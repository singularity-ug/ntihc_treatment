<?php /*defined in examplemyclass.php*/
    class MySql{
        private $dbc;
        private $user;
        private $pass;
        private $dbname;
        private $host;

        function __construct($host="localhost", $dbname="chmsc", $user="root", $pass=""){
            $this->user = $user;
            $this->pass = $pass;
            $this->dbname = $dbname;
            $this->host = $host;
            $opt = array(
               PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
               PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );
            try{
                $this->dbc = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $user, $pass, $opt);
            }
            catch(PDOException $e){
                 echo $e->getMessage();
                 echo "There was a problem with connection to db check credenctials";
            }
        } /*end function*/


        public function backup_tables($tables = '*'){  /* backup the db OR just a table */
            $host=$this->host;
            $user=$this->user;
            $pass=$this->pass;
            $dbname=$this->dbname;
            $data = "";
            //get all of the tables
            if($tables == '*')
            {
                $tables = array();
                $result = $this->dbc->prepare('SHOW TABLES'); 
                $result->execute();                         
                while($row = $result->fetch(PDO::FETCH_NUM)) 
                { 
                    $tables[] = $row[0]; 
                }
            }
            else
            {
                $tables = is_array($tables) ? $tables : explode(',',$tables);
            }
            //cycle through
            foreach($tables as $table)
            {
                $resultcount = $this->dbc->prepare('SELECT count(*) FROM '.$table);
                $resultcount->execute();
                $num_fields = $resultcount->fetch(PDO::FETCH_NUM);
                $num_fields = $num_fields[0];

                $result = $this->dbc->prepare('SELECT * FROM '.$table);
                $result->execute();
                $data.= 'DROP TABLE '.$table.';';

                $result2 = $this->dbc->prepare('SHOW CREATE TABLE '.$table);    
                $result2->execute();                            
                $row2 = $result2->fetch(PDO::FETCH_NUM);
                $data.= "\n\n".$row2[1].";\n\n";

                for ($i = 0; $i < $num_fields; $i++) 
                {
                    while($row = $result->fetch(PDO::FETCH_NUM))
                    { 
                        $data.= 'INSERT INTO '.$table.' VALUES(';
                        for($j=0; $j<$num_fields; $j++) 
                        {
                            $row[$j] = addslashes($row[$j]); 
                            $row[$j] = str_replace("\n","\\n",$row[$j]);
                            if (isset($row[$j])) { $data.= '"'.$row[$j].'"' ; } else { $data.= '""'; }
                            if ($j<($num_fields-1)) { $data.= ','; }
                        }
                        $data.= ");\n";
                    }
                }
                $data.="\n\n\n";
            }
            //save filename
            $filename = 'db-backup-'.time().'-'.(implode(",",$tables)).'.sql';
            $this->writeUTF8filename($filename,$data);
        /*USE EXAMPLE
           $connection = new MySql(SERVERHOST,"your_db_name",DBUSER, DBPASS);
           $connection->backup_tables(); //OR backup_tables("posts");
           $connection->closeConnection();
        */
        } /*end function*/


        private function writeUTF8filename($filenamename,$content){  /* save as utf8 encoding */
            $f=fopen($filenamename,"w+"); 
            # Now UTF-8 - Add byte order mark 
            fwrite($f, pack("CCC",0xef,0xbb,0xbf)); 
            fwrite($f,$content); 
            fclose($f); 
        /*USE EXAMPLE this is only used by public function above...
            $this->writeUTF8filename($filename,$data);
        */
        } /*end function*/


        public function recoverDB($file_to_load){
            echo "write some code to load and proccedd .sql file in here ...";
        /*USE EXAMPLE this is only used by public function above...
            recoverDB("some_buck_up_file.sql");
        */
        } /*end function*/


        public function closeConnection(){
            $this->dbc = null;
        //EXAMPLE OF USE 
        /*$connection->closeConnection();*/
        }/*end function*/


    } /*END OF CLASS*/
    ?>
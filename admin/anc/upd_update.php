 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['NTIHCNO'])){
$id       = trim($_POST['id']);
$NTIHCNO   = trim($_POST['NTIHCNO']);
$VISTDATE  = trim($_POST['VISTDATE']);
$WEEKSOFAMENOE     = trim($_POST['WEEKSOFAMENOE']);  
$FUNDALHEIGHT    = trim($_POST['FUNDALHEIGHT']);
$PRESENTATION = trim($_POST['PRESENTATION']);

     $POSITIONLIE   = trim($_POST['POSITIONLIE']);
	 $RELATIONPP    = trim($_POST['RELATIONPP']);
	 $FOETALHEART    = trim($_POST['FOETALHEART']);
	 $PROGRESSWEIGHT   = trim($_POST['PROGRESSWEIGHT']);
	 $PROGRESSBP      = trim($_POST['PROGRESSBP']);
     $VARICOSEOEDEMA   = trim($_POST['VARICOSEOEDEMA']);
	 $URINE    = trim($_POST['URINE']);
	 
	 $TT      = trim($_POST['TT']);
	 $IRONFOLIC  = trim($_POST['IRONFOLIC']);
	 $MEBENDAZOLE     = trim($_POST['MEBENDAZOLE']);
	 $IPT      = trim($_POST['IPT']);
	 $NETUSE   = trim($_POST['NETUSE']);
	 $COMPLAITS     = trim($_POST['COMPLAITS']);
	 $RETURNDATE     = trim($_POST['RETURNDATE']);
	 $NAMEOFEXAMINER    = trim($_POST['NAMEOFEXAMINER']);

$sql1="UPDATE `anteprogress`                SET
										  `NTIHCNO` ='$NTIHCNO',
		                                  `VISTDATE`='$VISTDATE',
										  `WEEKSOFAMENOE`='$WEEKSOFAMENOE',
										  `FUNDALHEIGHT` ='$FUNDALHEIGHT',
		                                  `PRESENTATION` ='$PRESENTATION',
										  
										  `POSITIONLIE`='$POSITIONLIE',
		                                  `RELATIONPP`='$RELATIONPP',
										  `FOETALHEART`='$FOETALHEART',
										  `PROGRESSWEIGHT`='$PROGRESSWEIGHT', 
										  `PROGRESSBP`='$PROGRESSBP',
										  `VARICOSEOEDEMA`='$VARICOSEOEDEMA',
			                              `URINE`='$URINE',
										  
										  `TT` ='$TT', 
										  `IRONFOLIC` ='$IRONFOLIC',
										  `MEBENDAZOLE` ='$MEBENDAZOLE',
                                          `IPT` ='$IPT',
										  `NETUSE` ='$NETUSE',
										  `COMPLAITS` ='$COMPLAITS',
                                          `RETURNDATE` ='$RETURNDATE', 
										  `NAMEOFEXAMINER` ='$NAMEOFEXAMINER'  
										   
                                           WHERE id='$id'";

                                   if($conn->query($sql1)){  header("location:anc_home.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 
									 
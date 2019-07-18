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
$NTIHCNO   = trim($_POST['NTIHCNO']);
$INSVCSTATUS  = trim($_POST['INSVCSTATUS']);
$TIMEOUT  = trim($_POST['TIMEOUT']); 

$RID  = trim($_POST['RID']); 
$sql1="UPDATE `cmpatientsregistration` SET
										  `NTIHCNO` ='$NTIHCNO',
		                                  `INSVCSTATUS`='$INSVCSTATUS',  
		                                  `INSERVICE`='ANC SERVICES', 
		                                  `SERVICEEXTENTION`='ANC',
		                                  `TIMEOUT`='$TIMEOUT' 
                                           WHERE RID='$RID'";
                                   if($conn->query($sql1)){ header("location:anc_home.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?> 
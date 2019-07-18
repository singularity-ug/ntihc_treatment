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
 
if(isset($_POST['RID'])){   
$RSVNID = trim($_POST['RSVNID']);
$RESERVATIONSTATUS   = trim($_POST['RESERVATIONSTATUS']); 
$RID = trim($_POST['RID']); 
$sql1="UPDATE `prescription` SET
										  `RESERVATIONSTATUS` ='$RESERVATIONSTATUS', 
										  `RID`='$RID'
                                           WHERE RSVNID='$RSVNID'";
										   
										   $conn->query("UPDATE cmpatientsregistration SET PRESCRIPTION = 'NULL'
	                       WHERE `RSVNID` = '$RSVNID'"); 	
						   
                                   if($conn->query($sql1)){ header("location:../client_medical.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?>

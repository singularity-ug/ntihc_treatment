
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

if(isset($_POST['DATECREATED'])){ 
$id       = trim($_POST['PID']);
$FIRSTNAME  = trim($_POST['FIRSTNAME']);
$LASTNAME = trim($_POST['LASTNAME']);
$OTHERNAME     = trim($_POST['OTHERNAME']);  
$SEX = trim($_POST['SEX']);
$AGE   = trim($_POST['AGE']);
$AGE1   = trim($_POST['AGE1']);
$SCHOOLINGSTATUS = trim($_POST['SCHOOLINGSTATUS']);
$HIGHESTLEVELOFEDUCATION  = trim($_POST['HIGHESTLEVELOFEDUCATION']);
$MARITALSTATUS   = trim($_POST['MARITALSTATUS']); 
$EMPLOYMENTSTATUS = trim($_POST['EMPLOYMENTSTATUS']);
$DISTRICT  = trim($_POST['DISTRICT']);
$DIVISION   = trim($_POST['DIVISION']);
$PLACEOFRESIDENCE   = trim($_POST['PLACEOFRESIDENCE']);
$DATECREATED = trim($_POST['DATECREATED']);
$PHONECONTACT = trim($_POST['PHONECONTACT']);
$MOTHERFIRSTNAME = trim($_POST['MOTHERFIRSTNAME']);
$MOTHERLASTNAME  = trim($_POST['MOTHERLASTNAME']);
$FATHERFIRSTNAME   = trim($_POST['FATHERFIRSTNAME']);
$FATHERLASTNAME   = trim($_POST['FATHERLASTNAME']);
$LIVINGWITH = trim($_POST['LIVINGWITH']);
$HEAREDABOUTNTIHC = trim($_POST['HEAREDABOUTNTIHC']);
$REGISTEREDBY = trim($_POST['REGISTEREDBY']);
$REGISTERACCOUNT = trim($_POST['REGISTERACCOUNT']);  

$NTIHCNO = trim($_POST['NTIHCNO']);  

$sql1="UPDATE `cmpatientsnewregistration`   
                                          SET 
										  `DATECREATED` ='$DATECREATED',
		                                  `FIRSTNAME`='$FIRSTNAME',
										   `NTIHCNO`='$NTIHCNO',
										  `LASTNAME`='$LASTNAME',
										  `OTHERNAME`='$OTHERNAME', 
		                                  `SEX`='$SEX',
										  `AGE`='$AGE',   `AGE1`='$AGE1',
										  `SCHOOLINGSTATUS`='$SCHOOLINGSTATUS',
		                                  `HIGHESTLEVELOFEDUCATION`='$HIGHESTLEVELOFEDUCATION',
										  `MARITALSTATUS`='$MARITALSTATUS',
										  `EMPLOYMENTSTATUS`='$EMPLOYMENTSTATUS',
		                                  `DISTRICT`='$DISTRICT',
										  `DIVISION`='$DIVISION',
										  `PLACEOFRESIDENCE`='$PLACEOFRESIDENCE',
			                              `PHONECONTACT`='$PHONECONTACT',
										  `MOTHERFIRSTNAME` ='$MOTHERFIRSTNAME',
										  `MOTHERLASTNAME` ='$MOTHERLASTNAME',
		                                  `FATHERFIRSTNAME`='$FATHERFIRSTNAME',
										  `FATHERLASTNAME`='$FATHERLASTNAME',
										  `LIVINGWITH`='$LIVINGWITH',
			                              `HEAREDABOUTNTIHC`='$HEAREDABOUTNTIHC',
										  `REGISTEREDBY`='$REGISTEREDBY', 
										  `REGISTERACCOUNT`='$REGISTERACCOUNT' 
                                          WHERE PID='$id'"; 
 
                                   if($conn->query($sql1)){  header("location:../registration_desk.php"); exit();}
								   else{ echo $conn->error; exit();}
                                                  
                                               }
 
                                    ?>  
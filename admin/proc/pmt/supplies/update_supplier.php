<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "procurement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['SERVICEPROVIDER'])){
$id       = trim($_POST['id']);
$SERVICEPROVIDER   = trim($_POST['SERVICEPROVIDER']);
$DATEREGISTERED  = trim($_POST['DATEREGISTERED ']);
$TYPE     = trim($_POST['TYPE']);
$PHYSICALADDRESS = trim($_POST['PHYSICALADDRESS']);
$PHYSICALLOCATION   = trim($_POST['PHYSICALLOCATION']);
$BOXNUMBER = trim($_POST['BOXNUMBER']);
$COUNTRYOFOPERATION  = trim($_POST['COUNTRYOFOPERATION']);
$CONTACTPERSON   = trim($_POST['CONTACTPERSON']);
$TELEPONENO = trim($_POST['TELEPONENO']);
$MOBILENO   = trim($_POST['MOBILENO']);
$ENTITYEMAIL   = trim($_POST['ENTITYEMAIL']);
$CONTACTPERSONEMAIL = trim($_POST['CONTACTPERSONEMAIL']);
$TAXSTATUS = trim($_POST['TAXSTATUS']);
$TINNO  = trim($_POST['TINNO']);
$FRAMEWORKDETAILS   = trim($_POST['FRAMEWORKDETAILS']);
$FRAMEWORKID    = trim($_POST['FRAMEWORKID']);
$ENTITYCODE    = trim($_POST['ENTITYCODE']);
$FRAMEWORKPERIOD = trim($_POST['FRAMEWORKPERIOD']);

$sql1="UPDATE `suppliers`
                      SET
										  `CONTACTPERSONEMAIL` ='$CONTACTPERSONEMAIL',
		                                  `SERVICEPROVIDER`='$SERVICEPROVIDER',
										  `DATEREGISTERED`='$DATEREGISTERED',
										  `TYPE`='$TYPE',
		                                  `PHYSICALADDRESS`='$PHYSICALADDRESS',
										  `PHYSICALLOCATION`='$PHYSICALLOCATION',
										  `BOXNUMBER`='$BOXNUMBER',
		                                  `COUNTRYOFOPERATION`='$COUNTRYOFOPERATION',
										  `CONTACTPERSON`='$CONTACTPERSON',
										  `TELEPONENO`='$TELEPONENO', 
										  `MOBILENO`='$MOBILENO',
										  `ENTITYEMAIL`='$ENTITYEMAIL',
			                              `TAXSTATUS`='$TAXSTATUS',
										  `TINNO` ='$TINNO',
										  `FRAMEWORKDETAILS` ='$FRAMEWORKDETAILS',
		                                  `FRAMEWORKID`='$FRAMEWORKID',
										  `ENTITYCODE`='$ENTITYCODE',
										  `FRAMEWORKPERIOD`='$FRAMEWORKPERIOD'
                                           WHERE id='$id'";

                                   if($conn->query($sql1)){  header("location:../suppliers _mgt.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 

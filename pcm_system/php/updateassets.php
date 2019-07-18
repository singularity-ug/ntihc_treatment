<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "pcms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}


if(isset($_POST['PROPERTYDESCRIPTION'])){
$id       = trim($_POST['idx']);
$PROPERTYDESCRIPTION   = trim($_POST['PROPERTYDESCRIPTION']);
$CATEGORY  = trim($_POST['CATEGORY']);
$CODIFICATIONSTATUS     = trim($_POST['CODIFICATIONSTATUS']);
$ENGRAVEDNUMBER = trim($_POST['ENGRAVEDNUMBER']);
$HOLDTYPE   = trim($_POST['HOLDTYPE']);
$DATEOFPURCHASE = trim($_POST['DATEOFPURCHASE']);
$MAKE  = trim($_POST['MAKE']);
$PROPERTYCOST   = trim($_POST['PROPERTYCOST']);
$SUPPLIEDBY = trim($_POST['SUPPLIEDBY']);
$LOCATION  = trim($_POST['LOCATION']);
$RESPONSIBLEOFFICER   = trim($_POST['RESPONSIBLEOFFICER']);
$OFFICERCONTACT   = trim($_POST['OFFICERCONTACT']);
$FUNCTIONALSTATUS = trim($_POST['FUNCTIONALSTATUS']);
$SERVICEREQUIREMENT = trim($_POST['SERVICEREQUIREMENT']);
$NEXTDUESERVICE  = trim($_POST['NEXTDUESERVICE']);
$REMINDDATE   = trim($_POST['REMINDDATE']);
$LASTUPDATEDBY    = trim($_POST['LASTUPDATEDBY']);
$UPDATEDDATE    = trim($_POST['UPDATEDDATE']);
$USERPFNO = trim($_POST['USERPFNO']);

$sql1="UPDATE `properties`                    SET
										  `FUNCTIONALSTATUS` ='$FUNCTIONALSTATUS',
		                                  `PROPERTYDESCRIPTION`='$PROPERTYDESCRIPTION',
										  `CATEGORY`='$CATEGORY',
										  `CODIFICATIONSTATUS`='$CODIFICATIONSTATUS',
		                                  `ENGRAVEDNUMBER`='$ENGRAVEDNUMBER',
										  `HOLDTYPE`='$HOLDTYPE',
										  `DATEOFPURCHASE`='$DATEOFPURCHASE',
		                                  `MAKE`='$MAKE',
										  `PROPERTYCOST`='$PROPERTYCOST',
										  `SUPPLIEDBY`='$SUPPLIEDBY',
		                                  `LOCATION`='$LOCATION',
										  `RESPONSIBLEOFFICER`='$RESPONSIBLEOFFICER',
										  `OFFICERCONTACT`='$OFFICERCONTACT',
			                              `SERVICEREQUIREMENT`='$SERVICEREQUIREMENT',
										  `NEXTDUESERVICE` ='$NEXTDUESERVICE ',
										  `REMINDDATE` ='$REMINDDATE',
		                                  `LASTUPDATEDBY`='$LASTUPDATEDBY',
										  `UPDATEDDATE`='$UPDATEDDATE',
										  `USERPFNO`='$USERPFNO'  
                                           WHERE id='$id'";
                                   if($conn->query($sql1)){ header("location:property_editor.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?>

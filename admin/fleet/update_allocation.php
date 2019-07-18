<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}


if(isset($_POST['DRIVERALLOCATED'])){
$id       = trim($_POST['id']);
$VEHICLELOCATION   = trim($_POST['VEHICLELOCATION']);
$VEHICLEALLOCATIONSTATUS  = trim($_POST['VEHICLEALLOCATIONSTATUS']);
$USERDEPARTMENT     = trim($_POST['USERDEPARTMENT']);
$ALLOCATEDTO = trim($_POST['ALLOCATEDTO']);
$DRIVERALLOCATED   = trim($_POST['DRIVERALLOCATED']);
$DRIVERMOBILENO = trim($_POST['DRIVERMOBILENO']);
$DRIVERWORKEXT  = trim($_POST['DRIVERWORKEXT']);
$DRIVERENTITYEMAIL   = trim($_POST['DRIVERENTITYEMAIL']); 
$DRIVERTITLE   = trim($_POST['DRIVERTITLE']);       
             
$sql1="UPDATE `motorisedequipments`                    SET
										  `VEHICLEALLOCATIONSTATUS` ='$VEHICLEALLOCATIONSTATUS',
		                                  `VEHICLELOCATION`='$VEHICLELOCATION',
										  `USERDEPARTMENT`='$USERDEPARTMENT',
										  `ALLOCATEDTO`='$ALLOCATEDTO',
		                                  `DRIVERALLOCATED`='$DRIVERALLOCATED',
										  `DRIVERMOBILENO`='$DRIVERMOBILENO',
										  `DRIVERWORKEXT`='$DRIVERWORKEXT', 
										  `DRIVERENTITYEMAIL`='$DRIVERENTITYEMAIL', 
										  `DRIVERTITLE`='$DRIVERTITLE' 
                                           WHERE id='$id'";
                                   if($conn->query($sql1)){ header("location:fleet_module.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?>

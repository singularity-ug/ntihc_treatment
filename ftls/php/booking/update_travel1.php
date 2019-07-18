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


if(isset($_POST['timeout'])){
$id       = trim($_POST['id']); 
$routed = trim($_POST['routed']);
$timeout   = trim($_POST['timeout']);

$Reservationdate_from = trim($_POST['Reservationdate_from']);
$journeypoint_start  = trim($_POST['journeypoint_start']);
$Destination_to   = trim($_POST['Destination_to']);   
$Reservationdate_to   = trim($_POST['Reservationdate_to']);

$timein  = trim($_POST['timein']);
$mileagein     = trim($_POST['mileagein']);
$mileageout = trim($_POST['mileageout']);
$distancecovered   = trim($_POST['distancecovered']);
$Servicedate   = trim($_POST['Servicedate']);
$Servicerecieved = trim($_POST['Servicerecieved']); 
$Parking  = trim($_POST['Parking']);

$sql1="UPDATE `ftlvehiclebooking` SET
										  `routed` ='$routed',
										  `Parking` ='$Parking',
		                                  `timeout`='$timeout',
										  `Reservationdate_from`='$Reservationdate_from',
										  `journeypoint_start`='$journeypoint_start',
		                                  `Destination_to`='$Destination_to',
										  `Reservationdate_to`='$Reservationdate_to',
										  
										  `timein`='$timein', 
										  `mileagein`='$mileagein', 
										  `mileageout`='$mileageout',
										  `distancecovered`='$distancecovered',
										  `Servicedate`='$Servicedate',
										  `Servicerecieved`='$Servicerecieved'
                                           WHERE id='$id'";
                                   if($conn->query($sql1)){ header("location:../driverlogs/driver_logs.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?>

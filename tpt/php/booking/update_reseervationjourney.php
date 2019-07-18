u<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ftl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}


if(isset($_POST['Vehicleallocated'])){
$id       = trim($_POST['id']); 
$Passengers = trim($_POST['Passengers']);
$Vehicleallocated   = trim($_POST['Vehicleallocated']);
$Vehicletype = trim($_POST['Vehicletype']);
$Checkout  = trim($_POST['Checkout']);
$Drivername   = trim($_POST['Drivername']);   
$DriverTitle   = trim($_POST['DriverTitle']);
$Mobilecontact  = trim($_POST['Mobilecontact']);
$Workcontact     = trim($_POST['Workcontact']);
$booktype = trim($_POST['booktype']);
$Allocationstatus   = trim($_POST['Allocationstatus']);
$Emailaddress = trim($_POST['Emailaddress']);
$Previousconsumptionrateperliter  = trim($_POST['Previousconsumptionrateperliter']);
$Costperlitre   = trim($_POST['Costperlitre']);               
$Allocationdate   = trim($_POST['Allocationdate']);                 
$Ratedas   = trim($_POST['Ratedas']);

$sql1="UPDATE `ftlvehiclebooking`                    SET
										  `Passengers` ='$Passengers',
		                                  `Vehicleallocated`='$Vehicleallocated',
										  `Vehicletype`='$Vehicletype',
										  `Checkout`='$Checkout',
		                                  `Drivername`='$Drivername',
										  `DriverTitle`='$DriverTitle',
										  `Mobilecontact`='$Mobilecontact', 
										  `Workcontact`='$Workcontact', 
										  `booktype`='$booktype',
										  `Allocationstatus`='$Allocationstatus',
		                                  `Emailaddress`='$Emailaddress',
										  `Previousconsumptionrateperliter`='$Previousconsumptionrateperliter',
										  `Costperlitre`='$Costperlitre', `Ratedas`='$Ratedas',
										  `Allocationdate`='$Allocationdate'
                                           WHERE id='$id'";
                                   if($conn->query($sql1)){ header("location:../cordination.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?>

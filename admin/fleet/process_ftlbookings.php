<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

if(isset($_POST['Createddate'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 

$Createddate = trim($_POST['Createddate']); 
$applicantname = trim($_POST['applicantname']);
$title = trim($_POST['title']);
$applicantdept = trim($_POST['applicantdept']);
$pfno = trim($_POST['pfno']);
$senderaccount   = trim($_POST['senderaccount']);
$Phonecontact = trim($_POST['Phonecontact']);
$booktype = trim($_POST['booktype']);
$Activity = trim($_POST['Activity']);
$journeypoint_start = trim($_POST['journeypoint_start']);
$Destination_to = trim($_POST['Destination_to']);
$Reservationdate_from   = trim($_POST['Reservationdate_from']);
$Reservationdate_to  = trim($_POST['Reservationdate_to']);
$Departuretime = trim($_POST['Departuretime']);
$Pickuptime_expected = trim($_POST['Pickuptime_expected']);
$Preferedvehicle = trim($_POST['Preferedvehicle']); 
$Passengers = trim($_POST['Passengers']); 
$ordertype = trim($_POST['ordertype']);
   
  
$sql = "INSERT INTO ftlvehiclebooking (Createddate,  
									 applicantname,  
									 title, 
									 applicantdept, 
									 pfno, 
									 senderaccount,
									 Phonecontact,
									 booktype, 
									 Activity,
									 journeypoint_start,
									 Destination_to,   
									 Reservationdate_from, Reservationdate_to, Departuretime, Pickuptime_expected, 
									 Preferedvehicle, Passengers,  
									 ordertype)
                             VALUES ('$Createddate', 
									 '$applicantname',
									 '$title',
									 '$applicantdept',
									 '$pfno',
									 '$senderaccount',                                    
									 '$Phonecontact',
									 '$booktype',
									 '$Activity',
									 '$journeypoint_start',
									 '$Destination_to', 
									 '$Reservationdate_from','$Reservationdate_to','$Departuretime','$Pickuptime_expected',        
							         '$Preferedvehicle', '$Passengers',
									 '$ordertype')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:fuel_mgt.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

<?php
$servername = "localhost";
$username = "root";
 $password = "toor2";
$dbname = "fleet";

if(isset($_POST['REGISTRATIONNO'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 
$REGISTRATIONNO = trim($_POST['REGISTRATIONNO']);
$TYPE = trim($_POST['TYPE']);
$MAKE = trim($_POST['MAKE']);
$MODEL = trim($_POST['MODEL']);
$COLOR = trim($_POST['COLOR']);
$YOM = trim($_POST['YOM']);
$POWER   = trim($_POST['POWER']);
$ENGINENO = trim($_POST['ENGINENO']);
$CHASSISNO = trim($_POST['CHASSISNO']); 
$CATEGORY = trim($_POST['CATEGORY']);
$FUNCTIONALSTATUS   = trim($_POST['FUNCTIONALSTATUS']);
$SEATINGCAPACITY  = trim($_POST['SEATINGCAPACITY']);
$FUELTYPE = trim($_POST['FUELTYPE']);
$HOLDSTATUS = trim($_POST['HOLDSTATUS']);
$ODOMETERSTATUS = trim($_POST['ODOMETERSTATUS']);
$ODOMETERTYPE = trim($_POST['ODOMETERTYPE']);
$ACQUISITIONDATE   = trim($_POST['ACQUISITIONDATE']);
$SUPPLIEDBY   = trim($_POST['SUPPLIEDBY']); 
$PURCHASECOST = trim($_POST['PURCHASECOST']); 
$ASSETIMAGE = trim($_POST['ASSETIMAGE']); 
$CONSUMPTIONPERKM = trim($_POST['CONSUMPTIONPERKM']); 
    
$USERDEPT = trim($_POST['USERDEPT']);
$DIVISION   = trim($_POST['DIVISION']);
$LOCATION   = trim($_POST['LOCATION']); 
$EQUIPMENTCATEGORY = trim($_POST['EQUIPMENTCATEGORY']);

$sql = "INSERT INTO motorisedequipments (REGISTRATIONNO,  
									  TYPE, 
									 CONSUMPTIONPERKM,
									 MAKE,  
									 MODEL, 
									 COLOR, 
									 YOM, 
									 POWER,
									 ENGINENO,
									 CHASSISNO,   
									 CATEGORY, 
									 FUNCTIONALSTATUS, SEATINGCAPACITY, FUELTYPE, HOLDSTATUS, ODOMETERSTATUS, ODOMETERTYPE, ACQUISITIONDATE, SUPPLIEDBY,
									 ASSETIMAGE, USERDEPT, DIVISION, LOCATION, EQUIPMENTCATEGORY,
									 PURCHASECOST) 
                             VALUES ('$REGISTRATIONNO',
									 '$TYPE',
									 '$CONSUMPTIONPERKM',
									 '$MAKE',
									 '$MODEL',
									 '$COLOR',
									 '$YOM',
									 '$POWER',                                    
									 '$ENGINENO', 
									 '$CHASSISNO',  
									 '$CATEGORY','$FUNCTIONALSTATUS','$SEATINGCAPACITY','$FUELTYPE',                                     '$HOLDSTATUS','$ODOMETERSTATUS','$ODOMETERTYPE',
									 '$ACQUISITIONDATE',
									 '$SUPPLIEDBY', 
									  '$ASSETIMAGE', '$USERDEPT','$DIVISION','$LOCATION', '$EQUIPMENTCATEGORY',
							     '$PURCHASECOST')"; 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:fleet_register.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

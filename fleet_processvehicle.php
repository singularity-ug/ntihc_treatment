
 <?php
$servername = "localhost";
$username = "root";
$password = "";
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
$ENGINE_NO = trim($_POST['ENGINE_NO']);
$CHASSIS_NO = trim($_POST['CHASSIS_NO']);
$CURRENTAGE = trim($_POST['CURRENTAGE']);
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

$sql = "INSERT INTO motorisedequipments (REGISTRATIONNO, 
									 TYPE, 
									 MAKE,  
									 MODEL, 
									 COLOR, 
									 YOM, 
									 POWER,
									 ENGINE_NO,
									 CHASSIS_NO, 
									 CHASSIS_NO,
									 CURRENTAGE,  
									 CATEGORY, 
									 FUNCTIONALSTATUS, SEATINGCAPACITY, FUELTYPE, HOLDSTATUS, ODOMETERSTATUS, ODOMETERTYPE, ACQUISITIONDATE, SUPPLIEDBY,
									 PURCHASECOST)
                             VALUES ('$REGISTRATIONNO',
									 '$TYPE',
									 '$MAKE',
									 '$MODEL',
									 '$COLOR',
									 '$YOM',
									 '$POWER',                                    
									 '$ENGINE_NO',
									 '$CHASSIS_NO',
									 '$CHASSIS_NO',
									 '$CURRENTAGE', 
									 '$CATEGORY','$FUNCTIONALSTATUS','$SEATINGCAPACITY','$FUELTYPE',                                     '$HOLDSTATUS','$ODOMETERSTATUS','$ODOMETERTYPE','$ACQUISITIONDATE','$SUPPLIEDBY', 
							     '$PURCHASECOST')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:fleetgeneral.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

if(isset($_POST['FUELISSUANCEDATE'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
  
$FUELISSUANCEDATE = trim($_POST['FUELISSUANCEDATE']); 
$FUELLOADPREPAREDBY = trim($_POST['FUELLOADPREPAREDBY']);
$FUELLOADPREPTITLE = trim($_POST['FUELLOADPREPTITLE']);
$FUELCARDNAME = trim($_POST['FUELCARDNAME']);
$ONLOADFUELAVAILABLE = trim($_POST['ONLOADFUELAVAILABLE']);
$CREDIT   = trim($_POST['CREDIT']);
$RECONCILIATIONSTATUS = trim($_POST['RECONCILIATIONSTATUS']);
$RECONCILIATIONSTATUS = trim($_POST['RECONCILIATIONSTATUS']);
$FUELLOADICON = trim($_POST['FUELLOADICON']);
$APPROVALSTATUS = trim($_POST['APPROVALSTATUS']);
$REVIEWFUEL = trim($_POST['REVIEWFUEL']);
$FUELISSUANCESTATUS   = trim($_POST['FUELISSUANCESTATUS']); 
  
$sql = "INSERT INTO fuellogs (FUELISSUANCEDATE,  
									 FUELLOADPREPAREDBY,  
									 FUELLOADPREPTITLE, 
									 FUELCARDNAME, 
									 ONLOADFUELAVAILABLE, 
									 CREDIT,
									 RECONCILIATIONSTATUS,  
									 FUELLOADICON,
									 APPROVALSTATUS,
									 REVIEWFUEL,    
									 FUELISSUANCESTATUS)
                             VALUES ('$FUELISSUANCEDATE', 
									 '$FUELLOADPREPAREDBY',
									 '$FUELLOADPREPTITLE',
									 '$FUELCARDNAME',
									 '$ONLOADFUELAVAILABLE',
									 '$CREDIT',                                    
									 '$RECONCILIATIONSTATUS',
									 '$FUELLOADICON',
									 '$APPROVALSTATUS',
									 '$REVIEWFUEL',  
									 '$FUELISSUANCESTATUS')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:fuel_admin.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

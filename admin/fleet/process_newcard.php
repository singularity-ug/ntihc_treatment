
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

if(isset($_POST['Fuelcardname'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 

$Fuelcardname = trim($_POST['Fuelcardname']); 
$Vendorname = trim($_POST['Vendorname']);
$Stationlocation = trim($_POST['Stationlocation']);
$Fueltargetlevel = trim($_POST['Fueltargetlevel']);
$Vendorframeworktype = trim($_POST['Vendorframeworktype']);
$Fuelcardstatus   = trim($_POST['Fuelcardstatus']);  
   
$sql = "INSERT INTO fuelcards (Fuelcardname,  
									 Vendorname,  
									 Stationlocation, 
									 Fueltargetlevel, 
									 Vendorframeworktype,  
									 Fuelcardstatus)
                             VALUES ('$Fuelcardname', 
									 '$Vendorname',
									 '$Stationlocation',
									 '$Fueltargetlevel', 
									 '$Vendorframeworktype', 
									 '$Fuelcardstatus')";

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

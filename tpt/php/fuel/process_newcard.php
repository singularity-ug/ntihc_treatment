
 <?php
$servername = "localhost";
$username = "root";
$password = "";
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
$Cardcode   = trim($_POST['Cardcode']);  
   
$sql = "INSERT INTO fuelcards (Fuelcardname,  
									 Vendorname,  
									 Cardcode,
									 Stationlocation, 
									 Fueltargetlevel, 
									 Vendorframeworktype,  
									 Fuelcardstatus)
                             VALUES ('$Fuelcardname', 
									 '$Vendorname',
									 '$Cardcode',
									 '$Stationlocation',
									 '$Fueltargetlevel', 
									 '$Vendorframeworktype', 
									 '$Fuelcardstatus')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:../fuel_master.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

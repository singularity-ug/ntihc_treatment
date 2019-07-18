
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ftl";

if(isset($_POST['FUELISSUANCEDATE'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 

$FUELISSUANCEDATE = trim($_POST['FUELISSUANCEDATE']); 
$Fuelcardname = trim($_POST['Fuelcardname']);
$ISSUEDBY = trim($_POST['ISSUEDBY']);
$ISSUERTITLE = trim($_POST['ISSUERTITLE']);
$ISSUERACCOUNT = trim($_POST['ISSUERACCOUNT']);  
$FISCALYEAR = trim($_POST['FISCALYEAR']);
$Fiscalmonth = trim($_POST['Fiscalmonth']);  

$sql = "INSERT INTO getentrant (FUELISSUANCEDATE,  
									 Fuelcardname, FISCALYEAR, Fiscalmonth,
									 ISSUEDBY, 
									 ISSUERTITLE, 
									 ISSUERACCOUNT)
                             VALUES ('$FUELISSUANCEDATE', 
									 '$Fuelcardname', '$FISCALYEAR', '$Fiscalmonth',
									 '$ISSUEDBY',
									 '$ISSUERTITLE',
									 '$ISSUERACCOUNT')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:fuel_addin.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

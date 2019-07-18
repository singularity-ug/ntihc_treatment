
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

if(isset($_POST['DRUGNAME'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }


$DRUGNAME = trim($_POST['DRUGNAME']);
$BREAKDOWN = trim($_POST['BREAKDOWN']);
$CATEGORY = trim($_POST['CATEGORY']);
$LOCATION = trim($_POST['LOCATION']);
$UOM = trim($_POST['UOM']);
$OPENINGSTOCK_QTY   = trim($_POST['OPENINGSTOCK_QTY']);
$UNIT_UOM = trim($_POST['UNIT_UOM']);
$UNITPRICE = trim($_POST['UNITPRICE']);
$REORDERLEVEL = trim($_POST['REORDERLEVEL']);
$DISCONTINUE = trim($_POST['DISCONTINUE']); 
$LASTUPDATEDBY   = trim($_POST['LASTUPDATEDBY']); 


$sql = "INSERT INTO ntihcdrugs (DRUGNAME,
									 BREAKDOWN,
									 CATEGORY,
									 LOCATION,
									 UOM,
									 OPENINGSTOCK_QTY,
									 UNIT_UOM,
									 UNITPRICE,
									 REORDERLEVEL,
									 DISCONTINUE, 
									 LASTUPDATEDBY)
                             VALUES ('$DRUGNAME',
									 '$BREAKDOWN',
									 '$CATEGORY',
									 '$LOCATION',
									 '$UOM',
									 '$OPENINGSTOCK_QTY',
									 '$UNIT_UOM',
									 '$	UNITPRICE',
									 '$REORDERLEVEL',
									 '$DISCONTINUE', 
									 '$LASTUPDATEDBY')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:drugs_mgr.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

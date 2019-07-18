
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement";

if(isset($_POST['DESCRIPTION'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }


$DESCRIPTION = trim($_POST['DESCRIPTION']);
$BREAKDOWN = trim($_POST['BREAKDOWN']);
$CATEGORY = trim($_POST['CATEGORY']);
$LOCATION = trim($_POST['LOCATION']);
$UNITOFMEASURE = trim($_POST['UNITOFMEASURE']);
$STOCKTAKEN   = trim($_POST['STOCKTAKEN']);
$QTYPERUOM = trim($_POST['QTYPERUOM']);
$UNITCOST = trim($_POST['UNITCOST']);
$REORDERLEVEL = trim($_POST['REORDERLEVEL']);
$DISCONTINUE = trim($_POST['DISCONTINUE']);
$ITEMNOTES = trim($_POST['ITEMNOTES']);
$LASTUPDATEDBY   = trim($_POST['LASTUPDATEDBY']);
$USERUNIT  = trim($_POST['USERUNIT']);


$sql = "INSERT INTO items (DESCRIPTION,
									 BREAKDOWN,
									 CATEGORY,
									 LOCATION,
									 UNITOFMEASURE,
									 STOCKTAKEN,
									 QTYPERUOM,
									 UNITCOST,
									 REORDERLEVEL,
									 DISCONTINUE,
									 ITEMNOTES,
									 LASTUPDATEDBY, USERUNIT )
                             VALUES ('$DESCRIPTION',
									 '$BREAKDOWN',
									 '$CATEGORY',
									 '$LOCATION',
									 '$UNITOFMEASURE',
									 '$STOCKTAKEN',
									 '$QTYPERUOM',
									 '$UNITCOST',
									 '$REORDERLEVEL',
									 '$DISCONTINUE',
									 '$ITEMNOTES',
									 '$LASTUPDATEDBY','$USERUNIT')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:stores_module.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

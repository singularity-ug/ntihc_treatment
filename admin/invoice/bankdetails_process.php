
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmultiple";

if(isset($_POST['ACCOUNTNAME'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }


$ACCOUNTNAME = trim($_POST['ACCOUNTNAME']);
$CLIENTBANKNAME = trim($_POST['CLIENTBANKNAME']);
$ACCOUNTNUMBER = trim($_POST['ACCOUNTNUMBER']);
$SWIFTCODE = trim($_POST['SWIFTCODE']);
$BRANCH = trim($_POST['BRANCH']);


$sql = "INSERT INTO bankdetails (ACCOUNTNAME,
									 CLIENTBANKNAME,
									 ACCOUNTNUMBER,
									 SWIFTCODE,
									 BRANCH )
            VALUES ('$ACCOUNTNAME',
									 '$CLIENTBANKNAME',
									 '$ACCOUNTNUMBER',
									 '$SWIFTCODE',
									 '$BRANCH')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:inv_receipts.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

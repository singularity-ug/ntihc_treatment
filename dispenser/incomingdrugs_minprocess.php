
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "procurement";

if(isset($_POST['ORDERSERIALID'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }


$ORDERSERIALID = trim($_POST['ORDERSERIALID']);
$DATECREATED = trim($_POST['DATECREATED']);
$REQUESTINGUNIT = trim($_POST['REQUESTINGUNIT']);
$ORDERTYPE = trim($_POST['ORDERTYPE']);
$FACILITYNANE = trim($_POST['FACILITYNANE']);
$REQUISTIONTYPE   = trim($_POST['REQUISTIONTYPE']);
$REQBYNAME = trim($_POST['REQBYNAME']);
$REQBYDATE = trim($_POST['REQBYDATE']);
$REQBY = trim($_POST['REQBY']); 
$CONFIRMERACCOUNT = trim($_POST['CONFIRMERACCOUNT']);   
 
$sql = "INSERT INTO outgingmin (ORDERSERIALID,
									 DATECREATED,
									 REQUESTINGUNIT,
									 ORDERTYPE,
									 FACILITYNANE,
									 REQUISTIONTYPE,
									 REQBYNAME,
									 REQBYDATE, CONFIRMERACCOUNT,
									 REQBY)
                             VALUES ('$ORDERSERIALID',
									 '$DATECREATED',
									 '$REQUESTINGUNIT',
									 '$ORDERTYPE',
									 '$FACILITYNANE',
									 '$REQUISTIONTYPE',
									 '$REQBYNAME',
									 '$REQBYDATE',  '$CONFIRMERACCOUNT',
									 '$REQBY')";
 
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:stores_requisition.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

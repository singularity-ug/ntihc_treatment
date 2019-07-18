
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
$SERVICEPROVIDER = trim($_POST['SERVICEPROVIDER']);
$SVPADDRESS = trim($_POST['SVPADDRESS']);
$SVPLOCATION = trim($_POST['SVPLOCATION']);
$INVOICENO   = trim($_POST['INVOICENO']);
$ORDERAMOUNT = trim($_POST['ORDERAMOUNT']);
$PAYMENTSTATUS = trim($_POST['PAYMENTSTATUS']);
$ENTITYCODE = trim($_POST['ENTITYCODE']); 
$INITIATEDBY = trim($_POST['INITIATEDBY']);   
$TITLE = trim($_POST['TITLE']);   
$m = date("m");
$y = date("Y");
$REQUISITIONID = trim($_POST['REQUISITIONID']); 
 
$sql = "INSERT INTO purchaseorder (ORDERSERIALID,
									 DATECREATED,
									 SERVICEPROVIDER,
									 SVPADDRESS,
									 SVPLOCATION,
									 INVOICENO,
									 ORDERAMOUNT,
									 PAYMENTSTATUS, ENTITYCODE, TITLE, FISCALMONTH, FISCALYEAR, ORDERROUTER, REQUISITIONID,
									 INITIATEDBY)
                             VALUES ('$ORDERSERIALID',
									 '$DATECREATED',
									 '$SERVICEPROVIDER',
									 '$SVPADDRESS',
									 '$SVPLOCATION',
									 '$INVOICENO',
									 '$ORDERAMOUNT',
									 '$PAYMENTSTATUS',  '$ENTITYCODE', '$TITLE',  '$m',  '$y', 'REQUISITIONROUTER', '$REQUISITIONID',
									 '$INITIATEDBY')";
 
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:lpo_general_doc.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

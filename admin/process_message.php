 <?php
 
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['sendto'])){ 

$sendto = trim($_POST['sendto']);
$subject = trim($_POST['subject']);
$comment = trim($_POST['comment']);
$recievedfrom = trim($_POST['recievedfrom']);
$name = trim($_POST['name']);
$name = trim($_POST['attachment']);

$sql = "INSERT INTO messager (sendto,
									 subject,
									 comment,
									 recievedfrom,
									 name,
									 attachment)
                             VALUES ('$sendto',
									 '$subject',
									 '$comment',
									 '$recievedfrom',
									 '$name',
									 '$attachment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:sys_dashboard.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

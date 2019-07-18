
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "pcms";

if(isset($_POST['CAPTUREDATE'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
  
$CAPTUREDATE = trim($_POST['CAPTUREDATE']);  
$AMOUNT = trim($_POST['AMOUNT']); 
  

$sql = "INSERT INTO allocation (CAPTUREDATE,   
								     AMOUNT)
									 
                             VALUES ('$CAPTUREDATE',  
									 '$AMOUNT')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:cug.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

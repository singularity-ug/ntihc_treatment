<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

if(isset($_POST['PURPOSE'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 

$PURPOSE = trim($_POST['PURPOSE']);  
$SOURCEOFFUND = trim($_POST['SOURCEOFFUND']);  
   
  
$sql = "INSERT INTO purposecategory (PURPOSE,   
									 SOURCEOFFUND)
                             VALUES ('$PURPOSE',   
									 '$SOURCEOFFUND')";

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
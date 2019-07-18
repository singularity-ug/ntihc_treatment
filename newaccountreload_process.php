<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmultiple";

if(isset($_POST['Accountnumber'])){
$an = trim($_POST['Accountnumber']);
$al= trim($_POST['amountloaded']);
$rfl = trim($_POST['Reasonforloading']); 
 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

 $sql = "INSERT INTO newload (Accountnumber, amountloaded, Reasonforloading)
                       VALUES ('$an', '$al', '$rfl')";		 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:budgeting.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 

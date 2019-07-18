<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmultiple";

if(isset($_POST['CREDIT'])){
$ld = trim($_POST['DATECREATED']);
$d = trim($_POST['DCDEFAULT']); 
$cd = trim($_POST['CREDIT']); 
 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   } 

 $sql = "INSERT INTO pettycash (DATECREATED, DCDEFAULT, CREDIT)
                       VALUES ('$ld', 'CREDIT',  '$cd')";	
					   
					   
if (mysqli_query($conn, $sql)) { 
    echo "New record created successfully";
	header("location:petty_cashmgt.php");
	exit(); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 
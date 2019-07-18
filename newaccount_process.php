<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmultiple";

if(isset($_POST['Accountnumber'])){
$an = trim($_POST['Accountnumber']);
$bn= trim($_POST['Bankname']);
$mas = trim($_POST['Minimumaccountsum']); 
 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

 $sql = "INSERT INTO newaccount (Accountnumber, Bankname, Minimumaccountsum)
                       VALUES ('$an', '$bn', '$mas')";		 

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

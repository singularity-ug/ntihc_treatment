
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

if(isset($_POST['Accountdetails'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 

$Accountdetails = trim($_POST['Accountdetails']); 
$Accountcode = trim($_POST['Accountcode']);
$Createdby = trim($_POST['Createdby']);
$Accountststus = trim($_POST['Accountststus']);

$sql = "INSERT INTO budgetaccount (Accountdetails,  
									 Accountcode,Accountststus, 
									 Createdby)
                             VALUES ('$Accountdetails', 
									 '$Accountcode',
									 '$Accountststus',   
									 '$Createdby')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:../budgeting.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

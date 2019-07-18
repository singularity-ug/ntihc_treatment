<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

if(isset($_POST['DATECREATED'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 

$DATECREATED = trim($_POST['DATECREATED']); 
$NTIHCNO = trim($_POST['NTIHCNO']);
$CLIENTNAME = trim($_POST['CLIENTNAME']);
$SCHOOLING = trim($_POST['SCHOOLING']);
$EMPLOYMENT = trim($_POST['EMPLOYMENT']); 
$PNCDATASTATUS = trim($_POST['PNCDATASTATUS']); 
$PHONECONTACT = trim($_POST['PHONECONTACT']); 
  
$sql = "INSERT INTO postnatal_care (DATECREATED,  
									 NTIHCNO,  
									 CLIENTNAME, 
									 SCHOOLING, 
									 EMPLOYMENT,  PHONECONTACT, 
									 PNCDATASTATUS)
                             VALUES ('$DATECREATED', 
									 '$NTIHCNO',
									 '$CLIENTNAME',
									 '$SCHOOLING',
									 '$EMPLOYMENT',  '$PHONECONTACT',                                  
									 '$PNCDATASTATUS')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:../postnatalcare.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 
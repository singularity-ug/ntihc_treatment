
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr";

if(isset($_POST['DATECREATED'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
  
$DATECREATED = trim($_POST['DATECREATED']); 
$Serial = trim($_POST['Serial']);
$FIRSTNAME = trim($_POST['FIRSTNAME']);
$LASTNAME = trim($_POST['LASTNAME']);
$OTHERNAME = trim($_POST['OTHERNAME']);  
$STAFFACCOUNT = trim($_POST['STAFFACCOUNT']);
$ENTITYLOGO = trim($_POST['ENTITYLOGO']);
$REGISTEREBY = trim($_POST['REGISTEREBY']);  
$SUBMISSIONLEVEL = trim($_POST['SUBMISSIONLEVEL']); 

$m = date("m");
$y = date("Y");
 

$sql = "INSERT INTO staffcontacts (DATECREATED,  
									 Serial,  
									 FIRSTNAME,  
									 LASTNAME,  
									 OTHERNAME, 
									 STAFFACCOUNT, ENTITYLOGO, 
									 FISCALMONTH, FISCALYEAR,SUBMISSIONLEVEL,  
									 REGISTEREBY)
                             VALUES ('$DATECREATED', 
									 '$Serial',
									 '$FIRSTNAME', 
									 '$LASTNAME',     
									 '$OTHERNAME',    
									 '$STAFFACCOUNT', '$ENTITYLOGO',  
									 '$m', '$y', '$SUBMISSIONLEVEL',
									 '$REGISTEREBY')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:../home_hrmgt.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

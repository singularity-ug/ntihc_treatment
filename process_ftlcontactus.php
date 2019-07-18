 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleet";

if(isset($_POST['Firstname'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
   
  $sql1 ="SELECT CID FROM fleetcontactus ORDER BY CID DESC LIMIT 1";
  
$sfnama = trim($_POST['Firstname']);
$surgtya = trim($_POST['Lastname']);
$svtypa = trim($_POST['Phonecontact']); 
$schkna = trim($_POST['ContactEmail']);
$bosfnama = trim($_POST['Ftlcomment']);
 
 $sql = "INSERT INTO fleetcontactus(Firstname, Lastname, Phonecontact, ContactEmail, Ftlcomment)
                                        VALUES ('$sfnama', '$surgtya', '$svtypa', '$schkna' '$bosfnama')";		 

if (mysqli_query($conn, $sql)) {
    echo "New message created successfully";
	header("location:ftl_reservations.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 

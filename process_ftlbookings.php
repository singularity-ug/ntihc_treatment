 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleet";

if(isset($_POST['TransportID'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
   
  $sql1 ="SELECT BID FROM vehiclebooking  ORDER BY BID DESC LIMIT 1";
  
$sfnama = trim($_POST['TransportID']);
$surgtya = trim($_POST['Phonecontact']);
$svtypa = trim($_POST['Routetype']);
$spoststa = trim($_POST['Destination']);
$popspoststa = trim($_POST['Purpose']);
$schkna = trim($_POST['Departure_date']);
$bosfnama = trim($_POST['Departure_time']);
$bosurgtya = trim($_POST['Return_date']);
$bosvtypa = trim($_POST['Return_time']);
$bospoststa = trim($_POST['Preferred_category']);
$boschkna = trim($_POST['Pasengers']);
 
 $sql = "INSERT INTO ftlvehiclebooking (TransportID, Phonecontact, Routetype, Destination, Purpose, Departure_date ,Departure_time ,Return_date ,Return_time ,Preferred_category ,Pasengers)
                                        VALUES ('$sfnama', '$surgtya', '$svtypa', '$spoststa', '$popspoststa', '$schkna', '$bosfnama', '$bosurgtya', '$bosvtypa', '$bospoststa', '$boschkna' )";		 

if (mysqli_query($conn, $sql)) {
    echo "New reservation created successfully";
	header("location:ftl_reservations.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleet";

if(isset($_POST['CARDIDENTITYNO'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
 

$sfnama = trim($_POST['CARDIDENTITYNO']);
$surgtya = trim($_POST['CARDNAME']);
$svtypa = trim($_POST['CARDCATEGORY']);
$spoststa = trim($_POST['VENDOR']);
$schkna = trim($_POST['MINFUELLEVEL']);
$cname   = trim($_POST['CURRENCY']);


 $sql = "INSERT INTO fuelcards (CARDIDENTITYNO, CARDNAME, CARDCATEGORY, VENDOR, MINFUELLEVEL, CURRENCY)
                                        VALUES ('$sfnama', '$surgtya', '$svtypa', '$spoststa', '$schkna','$cname')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:fuellogs.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

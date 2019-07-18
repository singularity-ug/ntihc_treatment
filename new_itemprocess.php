 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement";

if(isset($_POST['NTIHCNO'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());  
   
  $sql1 ="SELECT ID FROM items  ORDER BY ID DESC LIMIT 1";
  
$afnama = trim($_POST['ITEMNAME']);
$aurgtya = trim($_POST['MAKE']);
$avtypa = trim($_POST['TYPE']);
$apoststa = trim($_POST['UOM']);
$achkna = trim($_POST['CATEGORY']);
$amarita = trim($_POST['MINSTOCKLEVEL']);
$aempa = trim($_POST['DISCONTINUE']);
$adista = trim($_POST['LOCATION']);
$adivia = trim($_POST['LEVEL']);
$aplacresa = trim($_POST['SHELVENO']);
$aherdaa = trim($_POST['NOTES']);
$ahowdida = trim($_POST['OPENINGSTOCK_QTY']);
$adescra = trim($_POST['UNIT']);
$aprobca = trim($_POST['ESTIMATEDUNITPRICE']); 

 $sql = "INSERT INTO items (ITEMNAME, MAKE, TYPE, UOM, CATEGORY, MINSTOCKLEVEL, DISCONTINUE, LOCATION, LEVEL, SHELVENO, NOTES, OPENINGSTOCK_QTY, UNIT, ESTIMATEDUNITPRICE)
                       VALUES ('$afnama', '$aurgtya', '$avtypa', '$apoststa', '$achkna', '$amarita', '$aempa', '$adista', '$adivia', '$aplacresa', '$aherdaa', '$ahowdida', '$adescra', '$aprobca')";		 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:new_item.php");
	exit(); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 
<?php session_start(); 
$user  = "";
if(isset($_SESSION['user'])){
	$user = 'welcome : '.$_SESSION['user'];
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patientmgt";

if(isset($_POST['NTIHCNO'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
   
$datex= trim($_POST['DATECREATED']);
$ntih = trim($_POST['NTIHCNO']);
$lmm = trim($_POST['LMP']);  
$bpp = trim($_POST['BP']);
$wta = trim($_POST['WT']);
$dcontra = trim($_POST['CONTRACEPTIONMETHOD']);
$suppl = trim($_POST['SUPPLIESQTY']);
$meth = trim($_POST['METHODSTATUS']);
$dayy = trim($_POST['DAYENDINGSERVICELINE']);

 $sql = "INSERT INTO contraceptions (DATECREATED, NTIHCNO, LMP, BP, WT, CONTRACEPTIONMETHOD, SUPPLIESQTY, METHODSTATUS, DAYENDINGSERVICELINE)
                                        VALUES ('$datex', '$ntih', '$lmm', '$bpp', '$wta', '$dcontra', '$suppl', '$meth', '$dayy')";		 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 
 
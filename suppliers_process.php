 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement";

if(isset($_POST['SUPPLIERNAME'])){
$PHONECONTACT = trim($_POST['SUPPLIERNAME']);
$fnam = trim($_POST['TYPE']);
$urgty = trim($_POST['CATEGORY']);
$vtyp = trim($_POST['SPECIALIZATION']);
$postst = trim($_POST['COUNTRYOFOPERATION']);
$chkn = trim($_POST['PHYSICALLOCATION']);
$marit = trim($_POST['WEBSITE']);
$emp = trim($_POST['CONTACTPERSON']);
$dist = trim($_POST['POSITION']);
$divi = trim($_POST['CONTACTPHONENO']);
$placres = trim($_POST['EMAIL']);
$herda = trim($_POST['CONTACTADDRESS']);
$howdid = trim($_POST['TINNO']);
$descr = trim($_POST['TAXTYPE']);
$probc = trim($_POST['BANKACCOUNTTITLE']);
$acti = trim($_POST['BANKACCOUNTNO']);
$recnea = trim($_POST['BANKNAME']);
$specfy = trim($_POST['BRANCH']);
$reasfr = trim($_POST['NOTES']);
$notssfr = trim($_POST['DISCONTINUE']);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

 $sql = "INSERT INTO suppliersdb (SUPPLIERNAME, TYPE, CATEGORY, SPECIALIZATION, COUNTRYOFOPERATION, PHYSICALLOCATION, WEBSITE, CONTACTPERSON, POSITION, CONTACTPHONENO, EMAIL, CONTACTADDRESS, TINNO, TAXTYPE, BANKACCOUNTTITLE, BANKACCOUNTNO, BANKNAME, BRANCH, NOTES, DISCONTINUE)
                       VALUES ('$PHONECONTACT', '$fnam', '$urgty', '$vtyp', '$postst', '$chkn', '$marit', '$emp', '$dist', '$divi', '$placres', '$herda', '$howdid', '$descr', '$probc', '$acti', '$recnea', '$specfy', '$reasfr', '$notssfr')";		 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:suppliers.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 

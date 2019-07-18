 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement";

if(isset($_POST['REQUISITIONNO'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
  
$ida = trim($_POST['ISSUEDDATE']);
$requin = trim($_POST['REQUISITIONNO']);
$reqdet = trim($_POST['REQUISTIONDATE']);
$depato = trim($_POST['DEPARTMENT']);
$reqipyp = trim($_POST['REQUISITIONTYPE']);
$approv = trim($_POST['APPROVEDBY']);
$author = trim($_POST['AUTHORISEDBY']);
$issuer = trim($_POST['ISSUEDBY']);
$issuee = trim($_POST['ISSUEDTO']);
$numb = trim($_POST['NO']);
$pdt = trim($_POST['ITEM']);
$qtynd = trim($_POST['QUANTITYNEEDED']);
$qtyiss = trim($_POST['QUANTITYISSUED']);
$qtyisto = trim($_POST['QUANTITYINSTOCK']);
$unito = trim($_POST['UNITCOST']);
$subto = trim($_POST['SUBTOTAL']);

 $sql = "INSERT INTO outgoingorders (ISSUEDDATE, REQUISITIONNO, REQUISTIONDATE, DEPARTMENT, REQUISITIONTYPE, APPROVEDBY, AUTHORISEDBY, ISSUEDBY, ISSUEDTO, NO, ITEM, QUANTITYNEEDED, QUANTITYISSUED, QUANTITYINSTOCK, UNITCOST, SUBTOTAL)
                                        VALUES ('$ida', '$requin', '$reqdet', '$depato', '$reqipyp', '$approv', '$author', '$issuer', '$issuee', '$numb', '$pdt', '$qtynd', '$qtyiss', '$qtyisto', '$unito', '$subto')";		 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 

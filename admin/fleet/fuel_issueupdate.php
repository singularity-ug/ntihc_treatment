<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);
$id = trim($_POST['id']);
$opt = trim($_POST['FUELSTATION']);
$sp  = trim($_POST['REGISTRATIONNO']);
$db  = trim($_POST['INVOICENO']);
$cmt = trim($_POST['MILEAGEBEFORE']);
$apx = trim($_POST['MILEAGEAFTER']); 
$coz = trim($_POST['LITRE']);
$cal = trim($_POST['UNITPRICE']);
$coxx = trim($_POST['PROJECT']);
$rexs = trim($_POST['ISSUEDBY']);
$nuix = trim($_POST['ISSUERACCOUNT']);
$dv = trim($_POST['DRIVER']);
$fcn = trim($_POST['FUELCARDNAME']);
$full = trim($_POST['FUELISSUANCESTATUS']); 
$op  = '';
    
$conn->query("UPDATE fuellogs SET MILEAGEAFTER ='$apx', 
                                  FUELSTATION ='$sp',
								  REGISTRATIONNO ='$db', 
								  INVOICENO ='$db', 
								  MILEAGEBEFORE ='$cmt', 
								  LITRE ='$coz', 
								  UNITPRICE ='$cal', 
                                  PROJECT ='$coxx', 
								  ISSUEDBY ='$rexs', 
								  ISSUERACCOUNT ='$nuix',
								  DRIVER ='$dv', 
								  FUELCARDNAME ='$fcn',
                                  FUELISSUANCEDATE =NOW(), 
								  FUELISSUANCESTATUS ='ISSUED'
                                  WHERE id ='$id'");

}
   header("location:fuel_admin.php");
exit();
?> 
               
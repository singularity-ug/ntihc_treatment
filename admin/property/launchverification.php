<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "contemporary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}


if(isset($_POST['VERIFICATIONSTATUS'])){
$id       = trim($_POST['id']);
$QTYVERIFIED   = trim($_POST['QTYVERIFIED']);

$VERIFICATIONSTATUS  = trim($_POST['VERIFICATIONSTATUS']);  

$sql1="UPDATE `properties`    SET
										  `QTYVERIFIED` ='$QTYVERIFIED',
		                                  `VERIFICATIONSTATUS` ='$VERIFICATIONSTATUS' 
                                           WHERE PHYSICALSTATUS='AVAILABLE'";
if($QTYVERIFIED=='0'){     if($conn->query($sql1)){  header("location:asset.php"); exit();}
								   else{ echo $conn->error; exit();}
                      }
                    header("location:asset.php");exit();   }

   ?> 

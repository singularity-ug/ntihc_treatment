 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "pcms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['VERIFICATIONSTATUS'])){
$id       = trim($_POST['id']);
$VERIFICATIONSTATUS   = trim($_POST['VERIFICATIONSTATUS']);
$PHYSICALSTATUS  = trim($_POST['PHYSICALSTATUS']);
$QTYVERIFIED     = trim($_POST['QTYVERIFIED']);  
$ENGRAVEDNUMBER    = trim($_POST['ENGRAVEDNUMBER']);
$VERIFICATIONSTATUS = trim($_POST['VERIFICATIONSTATUS']);

$sql1="UPDATE `properties`                SET
										  `VERIFICATIONSTATUS` ='$VERIFICATIONSTATUS',
		                                  `PHYSICALSTATUS`='$PHYSICALSTATUS',
										  `QTYVERIFIED`='$QTYVERIFIED',
										  `ENGRAVEDNUMBER` ='$ENGRAVEDNUMBER',
		                                  `VERIFICATIONSTATUS` ='YES' 
                                           WHERE id='$id'";

                                   if($conn->query($sql1)){  header("location:property_editor.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 
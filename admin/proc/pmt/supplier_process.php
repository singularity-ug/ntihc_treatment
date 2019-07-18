
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "procurement";

if(isset($_POST['SERVICEPROVIDER'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }


$SERVICEPROVIDER = trim($_POST['SERVICEPROVIDER']);
$TYPE = trim($_POST['TYPE']);
$PHYSICALADDRESS = trim($_POST['PHYSICALADDRESS']);
$PHYSICALLOCATION = trim($_POST['PHYSICALLOCATION']);
$BOXNUMBER = trim($_POST['BOXNUMBER']);
$COUNTRYOFOPERATION   = trim($_POST['COUNTRYOFOPERATION']);
$CONTACTPERSON = trim($_POST['CONTACTPERSON']);
$DATEREGISTERED = trim($_POST['DATEREGISTERED']);
$TELEPONENO = trim($_POST['TELEPONENO']);
$MOBILENO = trim($_POST['MOBILENO']);
$ENTITYEMAIL = trim($_POST['ENTITYEMAIL']);
$CONTACTPERSONEMAIL   = trim($_POST['CONTACTPERSONEMAIL']);
$TAXSTATUS  = trim($_POST['TAXSTATUS']);
$TINNO = trim($_POST['TINNO']);
$FRAMEWORKDETAILS = trim($_POST['FRAMEWORKDETAILS']); 
$FRAMEWORKID  = trim($_POST['FRAMEWORKID']);
$ENTITYCODE = trim($_POST['ENTITYCODE']);
$FRAMEWORKPERIOD = trim($_POST['FRAMEWORKPERIOD']);

$sql = "INSERT INTO suppliers (SERVICEPROVIDER,
									 TYPE,
									 PHYSICALADDRESS,
									 PHYSICALLOCATION,
									 BOXNUMBER,
									 COUNTRYOFOPERATION,
									 CONTACTPERSON,
									 DATEREGISTERED,
									 TELEPONENO,
									 MOBILENO,
									 ENTITYEMAIL,
									 CONTACTPERSONEMAIL, TAXSTATUS, TINNO, 
									 FRAMEWORKDETAILS, 
									 FRAMEWORKID,
                                     ENTITYCODE,
                                     FRAMEWORKPERIOD)
                             VALUES ('$SERVICEPROVIDER',
									 '$TYPE',
									 '$PHYSICALADDRESS',
									 '$PHYSICALLOCATION',
									 '$BOXNUMBER',
									 '$COUNTRYOFOPERATION',
									 '$CONTACTPERSON',
									 '$DATEREGISTERED',
									 '$TELEPONENO',
									 '$MOBILENO',
									 '$ENTITYEMAIL',
									 '$CONTACTPERSONEMAIL','$TAXSTATUS','$TINNO',
									 '$FRAMEWORKDETAILS', 
									 '$FRAMEWORKID',
									 '$ENTITYCODE',
									 '$FRAMEWORKPERIOD')";

                                   if($conn->query($sql)){  header("location:suppliers_mgt.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 
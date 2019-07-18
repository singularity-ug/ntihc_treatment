
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
$CONTRACT = trim($_POST['CONTRACT']);
$PAYMENTSHEDULE = trim($_POST['PAYMENTSHEDULE']);
$TENURE = trim($_POST['TENURE']);
$STARTDATE = trim($_POST['STARTDATE']);
$ENDDATE   = trim($_POST['ENDDATE']);
$RESPONSIBILITYCENTER = trim($_POST['RESPONSIBILITYCENTER']);
$ACCOUNTABLE = trim($_POST['ACCOUNTABLE']);
$CONSULTED = trim($_POST['CONSULTED']);
$INFORMED = trim($_POST['INFORMED']);
$CONTRACTMANAGER = trim($_POST['CONTRACTMANAGER']); 

$sql = "INSERT INTO contracts (SERVICEPROVIDER, 
                                   CONTRACT,
									 PAYMENTSHEDULE,
									 TENURE,
									 STARTDATE,
									 ENDDATE,
									 RESPONSIBILITYCENTER,
									 ACCOUNTABLE,
									 CONSULTED,
									 INFORMED,
									 CONTRACTMANAGER)
                             VALUES ('$SERVICEPROVIDER',
									 '$CONTRACT',
									 '$PAYMENTSHEDULE',
									 '$TENURE',
									 '$STARTDATE',
									 '$ENDDATE',
									 '$RESPONSIBILITYCENTER',
									 '$ACCOUNTABLE',
									 '$CONSULTED',
									 '$INFORMED', ,
									 '$CONTRACTMANAGER')"; 

                                   if($conn->query($sql)){  header("location:../cotracts_project_mgt.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 

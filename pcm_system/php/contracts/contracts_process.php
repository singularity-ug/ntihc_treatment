
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "pcms";

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
$PROCUREMENTTYPE = trim($_POST['PROCUREMENTTYPE']); 
$BREAKDOWN = trim($_POST['BREAKDOWN']);
$FUNDING = trim($_POST['FUNDING']);
$PROJECTPURPOSE = trim($_POST['PROJECTPURPOSE']);
$PROJECTCORDINATOR = trim($_POST['PROJECTCORDINATOR']);
$CONTRACTMANAGER = trim($_POST['CONTRACTMANAGER']);  
$REMINDDATE = trim($_POST['REMINDDATE']);
$STATUS = trim($_POST['STATUS']);

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
									 PROCUREMENTTYPE,  
									 BREAKDOWN,
									 FUNDING, 
									 PROJECTPURPOSE, 
									 PROJECTCORDINATOR,
									  REMINDDATE, 
									  STATUS,
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
									 '$INFORMED', 
									 '$PROCUREMENTTYPE',  
									 '$BREAKDOWN',
									 '$FUNDING', 
									 '$PROJECTPURPOSE', 
									 '$PROJECTCORDINATOR',
									 '$REMINDDATE',
									 '$STATUS', 
									 '$CONTRACTMANAGER')"; 

                                   if($conn->query($sql)){  header("location:../contracts.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 
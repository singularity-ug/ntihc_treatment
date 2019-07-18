<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "procurement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['SERVICEPROVIDER'])){
$id       = trim($_POST['id']);
$SERVICEPROVIDER   = trim($_POST['SERVICEPROVIDER']);
$CONTRACT  = trim($_POST['CONTRACT']);
$CONTRACTVALUE     = trim($_POST['CONTRACTVALUE']);
$PAYMENTSHEDULE = trim($_POST['PAYMENTSHEDULE']);
$TENURE   = trim($_POST['TENURE']);
$ENDDATE = trim($_POST['ENDDATE']);
$STARTDATE  = trim($_POST['STARTDATE']);
$EXTENSIONDATE   = trim($_POST['EXTENSIONDATE']);
$EXTENSIONENDDATE = trim($_POST['EXTENSIONENDDATE']);
$RESPONSIBILITYCENTER   = trim($_POST['RESPONSIBILITYCENTER']);
$ACCOUNTABLE   = trim($_POST['ACCOUNTABLE']);
$CONSULTED = trim($_POST['CONSULTED']);
$INFORMED = trim($_POST['INFORMED']);
$CONTRACTMANAGER  = trim($_POST['CONTRACTMANAGER']);
$STATUS   = trim($_POST['STATUS']);   
$PROCUREMENTTYPE   = trim($_POST['PROCUREMENTTYPE']);
$BREAKDOWN = trim($_POST['BREAKDOWN']);
$FUNDING = trim($_POST['FUNDING']);
$PROJECTPURPOSE  = trim($_POST['PROJECTPURPOSE']);
$PROJECTCORDINATOR   = trim($_POST['PROJECTCORDINATOR']); 

$sql1="UPDATE `contracts`
                              SET 
		                                  `SERVICEPROVIDER`='$SERVICEPROVIDER',
										  `CONTRACT`='$CONTRACT',
										  `CONTRACTVALUE`='$CONTRACTVALUE',
		                                  `PAYMENTSHEDULE`='$PAYMENTSHEDULE',
										  `TENURE`='$TENURE',
										  `ENDDATE`='$ENDDATE',
		                                  `STARTDATE`='$STARTDATE',
										  `EXTENSIONDATE`='$EXTENSIONDATE',
										  `EXTENSIONENDDATE`='$EXTENSIONENDDATE', 
										  `RESPONSIBILITYCENTER`='$RESPONSIBILITYCENTER',
										  `ACCOUNTABLE`='$ACCOUNTABLE',
			                              `CONSULTED`='$CONSULTED',
										  `INFORMED` ='$INFORMED',
										  `CONTRACTMANAGER` ='$CONTRACTMANAGER',
		                                  `STATUS` ='$STATUS', 
										  `PROCUREMENTTYPE`='$PROCUREMENTTYPE',
			                              `BREAKDOWN`='$BREAKDOWN',
										  `FUNDING` ='$FUNDING',
										  `PROJECTPURPOSE` ='$PROJECTPURPOSE',
		                                  `PROJECTCORDINATOR` ='$PROJECTCORDINATOR' 
                                           WHERE id='$id'";

                                   if($conn->query($sql1)){  header("location:../proc_pdu_user.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 
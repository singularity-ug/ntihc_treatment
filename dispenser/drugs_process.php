<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['DATECREATED'])){

$dnx =array(); $fqx =array(); $tmx=array(); $pdx =array(); $qtyx =array();

$DATECREATED  = trim($_POST['DATECREATED']);
$NTIHCNO  = trim($_POST['NTIHCNO']); 

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx'];
  $tmx      =       $_POST['tmx'];
  $pdx   =       $_POST['pdx'];
  $qtyx      =       $_POST['qtyx'];
}
 
$m = date("m");
$y = date("Y"); 

$i=0;
for($i=0;$i<count($dnx);$i++){

$DRUGNAME =$dnx[$i];
$FREQUENCY  = $fqx[$i];
$TIMES  =  $tmx[$i];
$PERIOD   = $pdx[$i];
$QTYPRESCRIBED  =  $qtyx[$i];

$AGE  = trim($_POST['AGE']);
$AGE_GROUP  = trim($_POST['AGE_GROUP']); 
$CLIENTNAME  = trim($_POST['CLIENTNAME']);
$RECOMMENDEDDRUGS  = trim($_POST['RECOMMENDEDDRUGS']); 
$USERINITIAL  = trim($_POST['USERINITIAL']);
$REQUESTINGUNIT  = trim($_POST['REQUESTINGUNIT']); 
$DISPENSEDBY  = trim($_POST['DISPENSEDBY']);
$TIMEOUT  = trim($_POST['TIMEOUT']);
$CHECKAVAILABILITY  = trim($_POST['CHECKAVAILABILITY']); 
$SERVICE_EPISODE  = trim($_POST['SERVICE_EPISODE']);  
$ENTRYSTATUS  = trim($_POST['ENTRYSTATUS']); 
$DISPENSEDDATE  = trim($_POST['DISPENSEDDATE']); 
 

  $sql1="INSERT INTO `patientmgt`.`prescription` (`DATECREATED`,
                                                             `NTIHCNO`, 
													         `DRUGNAME`,
													         `FREQUENCY`,
													         `TIMES`,
													         `PERIOD`,
															 `QTYPRESCRIBED`,
															 `FISCALMONTH`,
													         `FISCALYEAR`, 
															 `AGE`,
													         `AGE_GROUP`,
													         `CLIENTNAME`,
													         `RECOMMENDEDDRUGS`,
															 `USERINITIAL`,
													         `REQUESTINGUNIT`,
													         `DISPENSEDBY`, 
															 `TIMEOUT`, 
															 `CHECKAVAILABILITY`,
															 `SERVICE_EPISODE`,
															 `ENTRYSTATUS`,
															 `DISPENSEDDATE`)
                                                VALUES (NOW(),
												      '$NTIHCNO',  
													   '$DRUGNAME',
													   '$FREQUENCY',
													   '$TIMES',
													   '$PERIOD',
													   '$QTYPRESCRIBED', 
													   '$m',
													   '$y',
													   'AGE',
													         '$AGE_GROUP',
													         '$CLIENTNAME',
													         '$RECOMMENDEDDRUGS',
															 '$USERINITIAL',
													         '$REQUESTINGUNIT',
													         '$DISPENSEDBY',
															 '$TIMEOUT',
															 'YES',
															 '$SERVICE_EPISODE',
															 'CAPTURED',
													   '$DISPENSEDDATE')";

                                  $conn->query($sql1);

						}
						}
                         header("location:drugs_mgr.php");
                                exit();

                                    ?>

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

$dnx =array(); $fqx =array(); 

$DATECREATED  = trim($_POST['DATECREATED']);
$CALLSERIALNO  = trim($_POST['CALLSERIALNO']); 

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx']; 
}
  
 
$m = date("m");
$y = date("Y"); 

$i=0;
for($i=0;$i<count($dnx);$i++){

$PROBLEM =$dnx[$i];
$PROBLEMCATEGORY  = $fqx[$i];  
 

$PHONECONTACT = trim($_POST['PHONECONTACT']);
$FIRSTNAME   = trim($_POST['FIRSTNAME']);
$LASTNAME  = trim($_POST['LASTNAME']);
$SEX   = trim($_POST['SEX']);
$AGE = trim($_POST['AGE']);
$SCHOOLINGSTATUS   = trim($_POST['SCHOOLINGSTATUS']);
$HIGHESTLEVELOFEDUCATION    = trim($_POST['HIGHESTLEVELOFEDUCATION']);
$MARITALSTATUS  = trim($_POST['MARITALSTATUS']);
$EMPLOYMENTSTATUS    = trim($_POST['EMPLOYMENTSTATUS']);
$DISTRICT   = trim($_POST['DISTRICT']); 
$DIVISION   = trim($_POST['DIVISION']);

$PLACEOFRESIDENCE= trim($_POST['PLACEOFRESIDENCE']); 
$LIVINGWITH = trim($_POST['LIVINGWITH']);
$HEAREDABOUTNTIHC  = trim($_POST['HEAREDABOUTNTIHC']);
$DESCRIPTION  = trim($_POST['DESCRIPTION']);
$USERINITIAL  = trim($_POST['USERINITIAL']);

$ACTIONTAKEN   = trim($_POST['ACTIONTAKEN']);
$RECOMMENDEDNEARESTHEALTHCENTRE = trim($_POST['RECOMMENDEDNEARESTHEALTHCENTRE']);
$SPECIFYSERVICEREFERREDFOR = trim($_POST['SPECIFYSERVICEREFERREDFOR']);
$REASONFORREFER = trim($_POST['REASONFORREFER']); 

  $sql1="INSERT INTO `patientmgt`.`tollfree` (`DATECREATED`, `CALLSERIALNO`,  `FISCALMONTH`, `FISCALYEAR`, 
                                               `PHONECONTACT`,  `FIRSTNAME`, `LASTNAME`,  
                                               `SEX`, `AGE`, `SCHOOLINGSTATUS`,`HIGHESTLEVELOFEDUCATION`,
											   `MARITALSTATUS`, `EMPLOYMENTSTATUS`,  `DISTRICT`,  `DIVISION`,
											   `PLACEOFRESIDENCE`, `LIVINGWITH`,`HEAREDABOUTNTIHC`,
											   `DESCRIPTION`,  `USERINITIAL`, 
											    `ACTIONTAKEN`, `RECOMMENDEDNEARESTHEALTHCENTRE`,
											    `SPECIFYSERVICEREFERREDFOR`, `REASONFORREFER`, 
                                                             `PROBLEM`,  `PROBLEMCATEGORY`)
                                                VALUES ('$DATECREATED', '$CALLSERIALNO',  '$m',  '$y',
											   '$PHONECONTACT', '$FIRSTNAME',  '$LASTNAME',
											   '$SEX',  '$AGE', '$SCHOOLINGSTATUS', '$HIGHESTLEVELOFEDUCATION',
											   '$MARITALSTATUS',  '$EMPLOYMENTSTATUS',  '$DISTRICT',  '$DIVISION', 
											   '$PLACEOFRESIDENCE', '$LIVINGWITH', '$HEAREDABOUTNTIHC',
											   '$DESCRIPTION', '$USERINITIAL',
											    '$ACTIONTAKEN',  '$RECOMMENDEDNEARESTHEALTHCENTRE',  
											    '$SPECIFYSERVICEREFERREDFOR', '$REASONFORREFER',  
                                                       '$PROBLEM',  '$PROBLEMCATEGORY')";

                                  $conn->query($sql1);

						}
						}
                         header("location:tollfree.php");
                                exit();

                                    ?>

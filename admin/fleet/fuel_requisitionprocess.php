<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['DATECREATED'])){

$dnx =array(); $fqx =array(); $tmx=array(); $pdx =array(); $qtyx =array();  $ord =array(); $dri =array();

$DATECREATED  = trim($_POST['DATECREATED']);
$INITIATORDEPARTRMENT  = trim($_POST['INITIATORDEPARTRMENT']); 

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx'];
  $tmx      =       $_POST['tmx'];
  $pdx   =       $_POST['pdx'];
  $qtyx      =       $_POST['qtyx'];
  $ord   =       $_POST['ord'];
  $dri      =       $_POST['dri'];
}
 
$m = date("m");
$y = date("Y"); 

$i=0;
for($i=0;$i<count($dnx);$i++){

$REGISTRATIONNO =$dnx[$i];
$TYPE  = $fqx[$i];
$PRODUCT  =  $tmx[$i];
$LUBRICANT   = $pdx[$i];
$LITRE  =  $qtyx[$i];
$CURRENTODOREADING   = $ord[$i];
$DRIVER  =  $dri[$i];

$INITIATORTITLE  = trim($_POST['INITIATORTITLE']); 
$INITIATEDBY  = trim($_POST['INITIATEDBY']);
$INITIATIONDATE  = trim($_POST['INITIATIONDATE']);  
$SENDTO  = trim($_POST['SENDTO']);
$ORDERNO  = trim($_POST['ORDERNO']);
$INITIATORACCOUNT  = trim($_POST['INITIATORACCOUNT']);     
$SERIALNO  = trim($_POST['SERIALNO']); 


  $sql1="INSERT INTO `fleet`.`fuellogs` (`DATECREATED`,
                                                             `INITIATORDEPARTRMENT`, 
													         `REGISTRATIONNO`,
													         `TYPE`,
													         `PRODUCT`,
													         `LUBRICANT`,
															 `LITRE`,
															 `CURRENTODOREADING`,
															 `DRIVER`,
															 `FISCALMONTH`,
													         `FISCALYEAR`,
															 `INITIATORTITLE`,
															 `INITIATEDBY`,
															 `INITIATIONDATE`,
															 `SENDTO`,
															 `ORDERNO`,
															 `INITIATORACCOUNT`, 
															 `SERIALNO`)
                                                VALUES (NOW(),
												       '$INITIATORDEPARTRMENT',  
													   '$REGISTRATIONNO',
													   '$TYPE',
													   '$PRODUCT',
													   '$LUBRICANT',
													   '$LITRE', 
													   '$CURRENTODOREADING',
													   '$DRIVER', 
													   '$m',
													   '$y',
													   '$INITIATORTITLE',
													   '$INITIATEDBY',  
													    NOW(),
													   '$SENDTO',
													   '$ORDERNO',
													   '$INITIATORACCOUNT',
													   '$SERIALNO')";

                                  $conn->query($sql1);

						}
						}
                         header("location:fuel_mgt.php");
                                exit();

                                    ?>

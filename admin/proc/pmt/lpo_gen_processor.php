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

if(isset($_POST['DATECREATED'])){

$dnx =array(); $fqx =array(); $tmx=array(); $pdx =array(); $qtyx =array();

$DATECREATED  = trim($_POST['DATECREATED']);
$SERVICEPROVIDER  = trim($_POST['SERVICEPROVIDER']);
$SVPADDRESS = trim($_POST['SVPADDRESS']);
$SVPLOCATION     = trim($_POST['SVPLOCATION']);

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx'];
  $tmx      =       $_POST['tmx'];
  $pdx   =       $_POST['pdx'];
  $qtyx      =       $_POST['qtyx'];
}

$TERMSOFDELIVERY = trim($_POST['TERMSOFDELIVERY']);
$APPROVERNAME   = trim($_POST['APPROVERNAME']);
$REVNAME = trim($_POST['REVNAME']);
$APPROVERTITLE  = trim($_POST['APPROVERTITLE']);
$REVTITLE  = trim($_POST['REVTITLE']);
$APPROVEDDATE   = trim($_POST['APPROVEDDATE']);
$m = date("m");
$y = date("Y");
$SUBTOTAL = trim($_POST['SUBTOTAL']);
$TAX  = trim($_POST['TAX']);
$TOTALCOST   = trim($_POST['TOTALCOST']);
$REVDATE   = trim($_POST['REVDATE']);
$NOTEA = trim($_POST['NOTEA']);
$NOTEB = trim($_POST['NOTEB']);
$NOTEC = trim($_POST['NOTEC']);
$ORDERSERIALID  = trim($_POST['ORDERSERIALID']);

$i=0;
for($i=0;$i<count($dnx);$i++){

$DESCRIPTION =$dnx[$i];
$QUANTITY  = $fqx[$i];
$UNITOFMEASURE  =  $tmx[$i];
$UNITCOST   = $pdx[$i];
$ITEMPRICE  =  $qtyx[$i];

$DOCUMENTTYPE = trim($_POST['DOCUMENTTYPE']);
$ORDERTYPE   = trim($_POST['ORDERTYPE']);
$PREPAREDBY = trim($_POST['PREPAREDBY']);
$PREPTITLE   = trim($_POST['PREPTITLE']);
$PREPFPNO = trim($_POST['PREPFPNO']); 
$DATEREQUIRED   = trim($_POST['DATEREQUIRED']);
$DELIVERYREMINDDATE = trim($_POST['DELIVERYREMINDDATE']);
$DELIVERYSTATUS = trim($_POST['DELIVERYSTATUS']);
$LPONO = trim($_POST['LPONO']);

  $sql1="INSERT INTO `procurement`.`recievables` (`DATECREATED`,
                                                         `SERVICEPROVIDER`,
                                                         `SVPADDRESS`,
											             `SVPLOCATION`,
													         `DESCRIPTION`,
													         `QUANTITY`,
													         `UNITOFMEASURE`,
													         `UNITCOST`,
													         `ITEMPRICE`,
													         `TERMSOFDELIVERY`,
													         `APPROVERNAME`,
													         `REVNAME`,
													         `APPROVERTITLE`,
															 `REVTITLE`,
 													         `APPROVEDDATE`,
													         `FISCALMONTH`,
													         `FISCALYEAR`,
													         `SUBTOTAL`,
													         `TAX`,
													         `TOTALCOST`,
													         `REVDATE`,
													         `NOTEA`,
													         `NOTEB`,
 													         `NOTEC`,
															 `ORDERSERIALID`,
															 `DOCUMENTTYPE`,
                                                             `ORDERTYPE`,
															 `PREPAREDBY`,
															 `PREPTITLE`,
															 `PREPFPNO`, 
															 `DATEREQUIRED`,
															 `DELIVERYREMINDDATE`,  `LPONO`, 
															 `DELIVERYSTATUS`)
                                                VALUES ('$DATECREATED',
												      '$SERVICEPROVIDER',
                                                      '$SVPADDRESS',
													   '$SVPLOCATION',
													   '$DESCRIPTION',
													   '$QUANTITY',
													   '$UNITOFMEASURE',
													   '$UNITCOST',
													   '$ITEMPRICE',
													   '$TERMSOFDELIVERY',
													   '$APPROVERNAME',
													   '$REVNAME',
													   '$APPROVERTITLE',
													   '$REVTITLE',
													   '$APPROVEDDATE',
													   '$m',
													   '$y',
													   '$SUBTOTAL',
													   '$TAX',
													   '$TOTALCOST',
													   '$REVDATE',
													   '$NOTEA',
													   '$NOTEB',
													   '$NOTEC',
													   '$ORDERSERIALID',
													   '$DOCUMENTTYPE',
													   '$ORDERTYPE', 
													   '$PREPAREDBY',
													   '$PREPTITLE',
													   '$PREPFPNO', 
													   '$DATEREQUIRED',
													   '$DELIVERYREMINDDATE',  '$LPONO',
													   '$DELIVERYSTATUS')";

                                  $conn->query($sql1);

						}
						}
                         header("location:proc_pdu.php");
                                exit();

                                    ?>

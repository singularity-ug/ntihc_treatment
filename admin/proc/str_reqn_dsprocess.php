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

$dnx =array(); $fqx =array(); $qtyrecieved=array(); $variance =array(); $batch =array(); $expdet=array(); $remdrt =array(); $tmx=array();  $lcn =array();  $pdx =array();
$qtyx =array();
$DATECREATED  = trim($_POST['DATECREATED']);
$REQUESTINGUNIT  = trim($_POST['REQUESTINGUNIT']);
$ORDERTYPE = trim($_POST['ORDERTYPE']);
$ORDERSERIALID     = trim($_POST['ORDERSERIALID']);
$FACILITYNANE = trim($_POST['FACILITYNANE']);  
$ORDERVALUE = trim($_POST['ORDERVALUE']);

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx'];
  $qtyrecieved      =       $_POST['qtyrecieved'];
  $variance   =       $_POST['variance'];
  $batch      =       $_POST['batch'];
  $expdet   =       $_POST['expdet'];
  $remdrt      =       $_POST['remdrt'];
  $tmx      =       $_POST['tmx'];
  $lcn      =       $_POST['lcn'];
  $pdx   =       $_POST['pdx'];
  $qtyx      =       $_POST['qtyx'];
 
}

$m = date("m");
$y = date("Y");

$i=0;
for($i=0;$i<count($dnx);$i++){

$DESCRIPTION =$dnx[$i];
$QTYINSTOCK  = $fqx[$i];
$QTYNEEDED  =  $qtyrecieved[$i];
$QTYISSUED   = $variance[$i];
$UNIT  =  $batch[$i];
$STOCKBAL  =  $expdet[$i];
$BATCHNO   = $remdrt[$i];
$UNITOFMEASURE  =  $tmx[$i];
$EXPIRY   = $lcn[$i];      
$UNITVALUE  =  $pdx[$i];  
$AMOUNT  =  $qtyx[$i];      

$REQUISTIONTYPE  = trim($_POST['REQUISTIONTYPE']);
$REQBY  = trim($_POST['REQBY']);
$AUTBY = trim($_POST['AUTBY']);
$APPBY     = trim($_POST['APPBY']);
$ISSBY = trim($_POST['ISSBY']);  
$REQBYNAME = trim($_POST['REQBYNAME']); 
$AUTBYNAME  = trim($_POST['AUTBYNAME']);
$APPBYNAME  = trim($_POST['APPBYNAME']);
$ISSBYNAME = trim($_POST['ISSBYNAME']);
$REQBYDATE     = trim($_POST['REQBYDATE']);
$AUTBYDATE = trim($_POST['AUTBYDATE']);  
$APPBYDATE = trim($_POST['APPBYDATE']);
$ISSBYDATE = trim($_POST['ISSBYDATE']);

  $sql1="INSERT INTO `procurement`.`outgoingorders` (`DATECREATED`,
                                                         `REQUESTINGUNIT`,
                                                         `ORDERTYPE`,
											             `ORDERSERIALID`,
													     `FACILITYNANE`, 
														 
															 `DESCRIPTION`,
													         `QTYINSTOCK`,
                             `QTYNEEDED`,
                             `QTYISSUED`,
                             `UNIT`,
                             `STOCKBAL`,
                             `BATCHNO`,
													         `UNITOFMEASURE`,
													         `EXPIRY`,
													         `UNITVALUE`,
															 `AMOUNT`,
													         `ORDERVALUE`,
															 `FISCALMONTH`,
													         `FISCALYEAR`, 
															 `REQUISTIONTYPE`,
													         `REQBY`,
													         `AUTBY`,
															 `APPBY`,
													         `ISSBY`,
															 `REQBYNAME`,
													         `AUTBYNAME`,  `APPBYNAME`,
															 `ISSBYNAME`,  `REQBYDATE`,
															 `AUTBYDATE`,  `APPBYDATE`,
															 `ISSBYDATE`)
															 
                                               VALUES (NOW(),
												      '$REQUESTINGUNIT',
                                                      '$ORDERTYPE',
													  '$ORDERSERIALID',
													  '$FACILITYNANE',
													  
													   '$DESCRIPTION',
													   '$QTYINSTOCK',
                             '$QTYNEEDED',
                             '$QTYISSUED',
                             '$UNIT',
                             '$STOCKBAL',
                             '$BATCHNO',
													   '$UNITOFMEASURE',
													   '$EXPIRY',
													   '$UNITVALUE',
													   '$AMOUNT',
													   '$ORDERVALUE',
													   '$m',
													   '$y', 
													         'STANDARD',
													         '$REQBY',
													         '$AUTBY',
															 '$APPBY',
													         '$ISSBY',
															 '$REQBYNAME',
													         '$AUTBYNAME',  '$APPBYNAME',
															 '$ISSBYNAME',  '$REQBYDATE',
															 '$AUTBYDATE',  '$APPBYDATE',
															 '$ISSBYDATE')";

                                  $conn->query($sql1);

						}
						}
                         header("location:str_reqn_drugandsupplies.php");
                                exit();

                                    ?>

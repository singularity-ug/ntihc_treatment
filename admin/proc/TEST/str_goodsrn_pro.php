<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['DATECREATED'])){

$dnx =array(); $fqx =array(); $qtyrecieved=array(); $variance =array(); $batch =array(); $expdet=array(); $remdrt =array(); $tmx=array(); $pdx =array();
 $qtyx =array(); $lcn =array();

$DATECREATED  = trim($_POST['DATECREATED']);
$SERVICEPROVIDER  = trim($_POST['SERVICEPROVIDER']);
$INVOICENO = trim($_POST['INVOICENO']);
$GOODSRECEIVABLETYPE     = trim($_POST['GOODSRECEIVABLETYPE']);  
$LPONO = trim($_POST['LPONO']); 
$GOODSRECIEVEDDATE = trim($_POST['GOODSRECIEVEDDATE']);
$TOTALCOST   = trim($_POST['TOTALCOST']);
$DELIVERYCOMMENT = trim($_POST['DELIVERYCOMMENT']);

$GOODSRECIEVEDBY = trim($_POST['GOODSRECIEVEDBY']);
$GOODSRECIEVEDBYTITLE     = trim($_POST['GOODSRECIEVEDBYTITLE']);  
$GOODSDELVDDATE = trim($_POST['GOODSDELVDDATE']); 
$ORDERSERIALID = trim($_POST['ORDERSERIALID']);
$STOCKTYPE   = trim($_POST['STOCKTYPE']);
$ORDERTYPE = trim($_POST['ORDERTYPE']);

$DELIVERYSTATUS = trim($_POST['DELIVERYSTATUS']);

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx'];
  $qtyrecieved      =       $_POST['qtyrecieved'];
  $variance   =       $_POST['variance'];
  $batch      =       $_POST['batch'];
  $expdet   =       $_POST['expdet'];
  $remdrt      =       $_POST['remdrt'];
  $tmx      =       $_POST['tmx'];
  $pdx   =       $_POST['pdx'];
  $qtyx      =       $_POST['qtyx'];
  $lcn      =       $_POST['lcn'];
}
 
$m = date("m");
$y = date("Y"); 

$i=0;
for($i=0;$i<count($dnx);$i++){

$DESCRIPTION =$dnx[$i];
$QUANTITY  = $fqx[$i];
$QTYRECIEVED  =  $qtyrecieved[$i];
$VARIANCE   = $variance[$i];
$BATCHNO  =  $batch[$i];
$EXPIRYDATE  =  $expdet[$i];
$EXPIRYREMINDDATE   = $remdrt[$i];
$UNITOFMEASURE  =  $tmx[$i];
$UNITCOST   = $pdx[$i];
$ITEMPRICE  =  $qtyx[$i];   
$STORELOCATION  =  $lcn[$i];   

  $sql1="INSERT INTO `procurement`.`recievables` (`DATECREATED`,
                                                         `SERVICEPROVIDER`,
                                                         `INVOICENO`,
											             `GOODSRECEIVABLETYPE`,
													         `DESCRIPTION`,
													         `QUANTITY`,
                             `QTYRECIEVED`,
                             `VARIANCE`,
                             `BATCHNO`,
                             `EXPIRYDATE`,
                             `EXPIRYREMINDDATE`,
													         `UNITOFMEASURE`,
													         `UNITCOST`,
													         `ITEMPRICE`,
															 `STORELOCATION`,
													         `GOODSRECIEVEDDATE`,
															 `FISCALMONTH`,
													         `FISCALYEAR`, 
															 `LPONO`,
													         `TOTALCOST`,
															 `DELIVERYCOMMENT`, 
                                                             `GOODSRECIEVEDBY`,
															 `GOODSRECIEVEDBYTITLE`,
 													         `GOODSDELVDDATE`,
															 `ORDERSERIALID`,
                                                             `STOCKTYPE`,
													         `ORDERTYPE`, 
															 `DELIVERYSTATUS`)
                                                VALUES ('$DATECREATED',
												      '$SERVICEPROVIDER',
                                                      '$INVOICENO',
													   '$GOODSRECEIVABLETYPE',
													   '$DESCRIPTION',
													   '$QUANTITY', 
                             '$QTYRECIEVED',
                             '$VARIANCE',
                             '$BATCHNO',
                             '$EXPIRYDATE',
                             '$EXPIRYREMINDDATE',
													   '$UNITOFMEASURE',
													   '$UNITCOST',
													   '$ITEMPRICE',
													   '$STORELOCATION',
													   '$GOODSRECIEVEDDATE', 
													   '$m',
													   '$y', 
													   '$LPONO', 
													   '$TOTALCOST',
													   '$DELIVERYCOMMENT',  
													   '$GOODSRECIEVEDBY',
													   '$GOODSRECIEVEDBYTITLE',
													   '$GOODSDELVDDATE',  
													   '$ORDERSERIALID', 
													   '$STOCKTYPE',
													   '$ORDERTYPE', 
													   '$DELIVERYSTATUS')";

                                  $conn->query($sql1);

						}
						}
                         header("location:stores_mgt.php");
                                exit();

                                    ?>

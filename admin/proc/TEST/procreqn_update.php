
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



if(isset($_POST['CATEGORY'])){
$desc =''; $qty =''; $uom=''; $escost=''; $marktp='';

$id       = trim($_POST['id']);
$CATEGORY  = trim($_POST['CATEGORY']);
$PDECODE = trim($_POST['PDECODE']);
$FINANCIALYEAR     = trim($_POST['FINANCIALYEAR']);


if (isset($_POST['sp'])) {
  $desc      = json_encode($_POST['desc']);
  $qty      = json_encode($_POST['qty']);
  $uom      = json_encode($_POST['uom']);
  $escost      = json_encode($_POST['escost']);
  $marktp      = json_encode($_POST['marktp']); 
}

$SEQUENCENUMBER = trim($_POST['SEQUENCENUMBER']);
$SUBJECTOFPROCUREMENT   = trim($_POST['SUBJECTOFPROCUREMENT']);
$PROCUREMENTPLANREF = trim($_POST['PROCUREMENTPLANREF']);
$LOCATIONFORDELIVERY  = trim($_POST['LOCATIONFORDELIVERY']);
$DATEREQUIRED   = trim($_POST['DATEREQUIRED']);
$m = date("m");
$y = date("Y");
$SUBTOTAL = trim($_POST['SUBTOTAL']);
$TAX  = trim($_POST['TAX']);
$TOTALCOST   = trim($_POST['TOTALCOST']);
$RFPUSERNAME   = trim($_POST['RFPUSERNAME']);
$RFPSIGNATURE = trim($_POST['RFPSIGNATURE']);
$RFPTITLE = trim($_POST['RFPTITLE']);
$RFPDATE = trim($_POST['RFPDATE']);
$RFPDEPARTMENT  = trim($_POST['RFPDEPARTMENT']);
$DESCRIPTION =$desc;       // actual value
$QUANTITY  = $qty;               // category
$UNITOFMEASURE  =  $uom;               // category
$ESTIMATEDCOST  = $escost;               // category
$MARKETPRICE  = $marktp; 

  $sql1="UPDATE `procreqn` SET   `CATEGORY`='$CATEGORY',
                                   `PDECODE`='$PDECODE',
											                `FINANCIALYEAR`= '$FINANCIALYEAR',
													         `DESCRIPTION`= '$DESCRIPTION',
													         `QUANTITY`='$QUANTITY',
													         `UNITOFMEASURE`='$UNITOFMEASURE',
													         `ESTIMATEDCOST`='$ESTIMATEDCOST',
													         `MARKETPRICE`='$MARKETPRICE', 
													         `SEQUENCENUMBER`='$SEQUENCENUMBER',
													         `SUBJECTOFPROCUREMENT`='$SUBJECTOFPROCUREMENT',
													         `PROCUREMENTPLANREF`='$PROCUREMENTPLANREF',
													         `LOCATIONFORDELIVERY`= '$LOCATIONFORDELIVERY',
 													         `DATEREQUIRED`='$DATEREQUIRED',
													         `FISCALMONTH`='$m',
													         `FISCALYEAR`='$y',
													         `SUBTOTAL`='$SUBTOTAL',
													         `TAX`='$TAX',
													         `TOTALCOST`='$TOTALCOST',
													         `RFPUSERNAME`='$RFPUSERNAME',
													         `RFPSIGNATURE`='$RFPSIGNATURE',
													         `RFPTITLE`='$RFPTITLE',
 													         `RFPDATE`='$RFPDATE',
													         `RFPDEPARTMENT`='$RFPDEPARTMENT'
                                   WHERE id='$id'";


  $sql2="UPDATE `procreqnorders` SET `CATEGORY`='$CATEGORY',
                                   `PDECODE`='$PDECODE',
  												         `FINANCIALYEAR`= '$FINANCIALYEAR',
													         `DESCRIPTION`= '$DESCRIPTION',
													         `QUANTITY`='$QUANTITY',
													         `UNITOFMEASURE`='$UNITOFMEASURE',
													         `ESTIMATEDCOST`='$ESTIMATEDCOST',
													         `MARKETPRICE`='$MARKETPRICE', 
													         `SEQUENCENUMBER`='$SEQUENCENUMBER',
													         `SUBJECTOFPROCUREMENT`='$SUBJECTOFPROCUREMENT',
													         `PROCUREMENTPLANREF`='$PROCUREMENTPLANREF',
													         `LOCATIONFORDELIVERY`= '$LOCATIONFORDELIVERY',
 													         `DATEREQUIRED`='$DATEREQUIRED',
													         `FISCALMONTH`='$m',
													         `FISCALYEAR`='$y',
													         `SUBTOTAL`='$SUBTOTAL',
													         `TAX`='$TAX',
													         `TOTALCOST`='$TOTALCOST',
													         `RFPUSERNAME`='$RFPUSERNAME',
													         `RFPSIGNATURE`='$RFPSIGNATURE',
													         `RFPTITLE`='$RFPTITLE',
 													         `RFPDATE`='$RFPDATE',
													         `RFPDEPARTMENT`='$RFPDEPARTMENT' 
                                                              WHERE CATEGORY='$CATEGORY'"; 
$sql='';

if (isset($_POST['mytempvar'])) { $sql = $sql2; } else { $sql = $sql1; }


                                   if($conn->query($sql)===true){
                                                  header("location:procreqn.php");
                                                exit(); }

                                   else{    echo 'ERROR'.$conn->error;  }
}

                                   exit();
                                    ?>

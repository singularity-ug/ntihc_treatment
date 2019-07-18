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
 
$CATEGORY  = trim($_POST['CATEGORY']);
$PDECODE = trim($_POST['PDECODE']);
$FINANCIALYEAR     = trim($_POST['FINANCIALYEAR']);


if (isset($_POST['desc'])) {
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
$THRESHOLD = trim($_POST['THRESHOLD']);
$THRESHOLDREASON   = trim($_POST['THRESHOLDREASON']);


  $sql1="INSERT INTO `procurement`.`procreqn` (`CATEGORY`,
                                                             `PDECODE`, 
											                 `FINANCIALYEAR`,
													         `DESCRIPTION`,
													         `QUANTITY`,
													         `UNITOFMEASURE`,
													         `ESTIMATEDCOST`,
													         `MARKETPRICE`, 
													         `SEQUENCENUMBER`,
													         `SUBJECTOFPROCUREMENT`,
													         `PROCUREMENTPLANREF`,
													         `LOCATIONFORDELIVERY`,
 													         `DATEREQUIRED`,
													         `FISCALMONTH`,
													         `FISCALYEAR`,
													         `SUBTOTAL`,
													         `TAX`,
													         `TOTALCOST`,
													         `RFPUSERNAME`,
													         `RFPSIGNATURE`,
													         `RFPTITLE`,
 													         `RFPDATE`, 
															 `RFPDEPARTMENT`,
															 `THRESHOLD`,
                                                             `THRESHOLDREASON`)
                                                VALUES (CATEGORY,
                                                       '$PDECODE',   
													   '$FINANCIALYEAR',
													   '$DESCRIPTION',
													   '$QUANTITY', 
													   '$UNITOFMEASURE',
													   '$ESTIMATEDCOST',
													   '$MARKETPRICE',
													   '$SEQUENCENUMBER',
													   '$SUBJECTOFPROCUREMENT',
													   '$PROCUREMENTPLANREF',
													   '$LOCATIONFORDELIVERY',
													   '$DATEREQUIRED',
													   '$m',
													   '$y',
													   '$SUBTOTAL',
													   '$TAX',
													   '$TOTALCOST',
													   '$RFPUSERNAME',
													   '$RFPSIGNATURE',
													   '$RFPTITLE',
													   '$RFPDATE',
													   '$RFPDEPARTMENT',
													   '$THRESHOLD',
													   '$THRESHOLDREASON')";  
   
                                   if($conn->query($sql1)===true){
                                                  header("location:procurement.php");
                                                exit(); }

                                   else{    echo 'ERROR'.$conn->error;  }
}

                                   exit();
                                    ?>

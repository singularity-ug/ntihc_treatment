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

$desc =array(); $qty =array(); $uom=array(); $escost =array(); $marktp =array();

$DATECREATED  = trim($_POST['DATECREATED']);
$CATEGORY  = trim($_POST['CATEGORY']);
$PDECODE = trim($_POST['PDECODE']);
$FINANCIALYEAR     = trim($_POST['FINANCIALYEAR']);
 

if (isset($_POST['desc'])) {
  $desc =      $_POST['desc'];
  $qty   =       $_POST['qty'];
  $uom      =       $_POST['uom'];
  $escost   =       $_POST['escost'];
  $marktp      =       $_POST['marktp'];
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
$INITIATORDEPT  = trim($_POST['INITIATORDEPT']);

$i=0;
for($i=0;$i<count($desc);$i++){
        
$DESCRIPTION =$desc[$i];       
$QUANTITY  = $qty[$i];                
$UNITOFMEASURE  =  $uom[$i];
$ESTIMATEDCOST  = $escost[$i];               
$MARKETPRICE  =  $marktp[$i];
  
$THRESHOLD = trim($_POST['THRESHOLD']);
$THRESHOLDREASON   = trim($_POST['THRESHOLDREASON']);
$RFPFILENUMBER = trim($_POST['RFPFILENUMBER']);  
$REQUISITIONID   = trim($_POST['REQUISITIONID']);
$SENDTO = trim($_POST['SENDTO']); 

  $sql1="INSERT INTO `procurement`.`procreqn` (`DATECREATED`,
                                                             `CATEGORY`,
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
															 `INITIATORDEPT`,
															 `THRESHOLD`,
                                                             `THRESHOLDREASON`,
															 `RFPFILENUMBER`,
															 `REQUISITIONID`,
															 `SENDTO`)
                                                VALUES (DATECREATED,  
												       '$CATEGORY',
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
													   '$INITIATORDEPT',
													   '$THRESHOLD',
													   '$THRESHOLDREASON', 
													   
													   '$RFPFILENUMBER',
													   '$REQUISITIONID', 
													   '$SENDTO')";  
   
                                  $conn->query($sql1);
						
						} 
						}                                 
                         header("location:proc/procurement_user.php");
                                exit(); 

                                    ?> 
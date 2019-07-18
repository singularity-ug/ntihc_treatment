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
  
if(isset($_POST['PMTNO'])){ 

$desc =array(); $qty =array(); $uom=array(); $marktp =array();

$DATECREATED  = trim($_POST['DATECREATED']);
$PAYEE  = trim($_POST['PAYEE']);
$PROJECT = trim($_POST['PROJECT']);  
$BUDGETLINEDESCRIPTION = trim($_POST['BUDGETLINEDESCRIPTION']); 
$PMTNO  = trim($_POST['PMTNO']);
$CHEQUENO   = trim($_POST['CHEQUENO']);
$AMOUNTINWORDS = trim($_POST['AMOUNTINWORDS']);
$PMTDATATE = trim($_POST['PMTDATATE']);

if (isset($_POST['desc'])) {
  $desc =      $_POST['desc'];
  $qty   =       $_POST['qty'];
  $uom      =       $_POST['uom']; 
  $marktp      =       $_POST['marktp'];
}
   
$m = date("m");
$y = date("Y");
$SUBTOTAL = trim($_POST['SUBTOTAL']); 

$i=0;
for($i=0;$i<count($desc);$i++){
        
$DESCRIPTION =$desc[$i];       
$BUDGETDETAILS  = $qty[$i];                
$CODE  =  $uom[$i];             
$AMOUNTUGX  =  $marktp[$i]; 
$FINANCIALYEAR   = trim($_POST['FINANCIALYEAR']);
$VOUCHERID   = trim($_POST['VOUCHERID']);
$SENDTO = trim($_POST['SENDTO']); 
$PREPTITLE  = trim($_POST['PREPTITLE']);
$PREPNAME   = trim($_POST['PREPNAME']);
$PREPDEPT   = trim($_POST['PREPDEPT']);
$BUDGETAMOUNT = trim($_POST['BUDGETAMOUNT']);
$EXPENDITURETODATE = trim($_POST['EXPENDITURETODATE']);
$BALANCEONBUDGET = trim($_POST['BALANCEONBUDGET']);
$AMOUNTREQUESTED = trim($_POST['AMOUNTREQUESTED']);

  $sql1="INSERT INTO `dbmultiple`.`chqpayments` (`DATECREATED`,
                                                            `PAYEE`,
                                                            `PROJECT`, 
															 `PMTNO`, 
															 `CHEQUENO`,
													         `AMOUNTINWORDS`,
															 `BUDGETLINEDESCRIPTION`,  
													         `DESCRIPTION`,
													         `BUDGETDETAILS`,
													         `CODE`,  
													         `AMOUNTUGX`,  
													         `FISCALMONTH`,
													         `FISCALYEAR`,
													         `SUBTOTAL`, 
															 `VOUCHERID`,
															 `PREPTITLE`,
													         `PREPNAME`,
													         `PREPDEPT`,
															 `FINANCIALYEAR`,
															 `BUDGETAMOUNT`,
													         `EXPENDITURETODATE`,
 													         `BALANCEONBUDGET`,
															 `AMOUNTREQUESTED`,
															 `PMTDATATE`, 
															 `SENDTO`)
                                                VALUES (NOW(),  
														       '$PAYEE',
                                                               '$PROJECT',
															   '$PMTNO', 
															   '$CHEQUENO',
													           '$AMOUNTINWORDS',
															   '$BUDGETLINEDESCRIPTION',
													   '$DESCRIPTION',
													   '$BUDGETDETAILS', 
													   '$CODE',  
													   '$AMOUNTUGX', 
													   '$m',
													   '$y',
													   '$SUBTOTAL',   
													   '$VOUCHERID', 
													   '$PREPTITLE',
													   '$PREPNAME',
													   '$PREPDEPT',
													   '$FINANCIALYEAR',
													   '$BUDGETAMOUNT',
													   '$EXPENDITURETODATE',
													   '$BALANCEONBUDGET',
													   '$AMOUNTREQUESTED',
													   '$PMTDATATE', 
													   '$SENDTO')";  
   
                                  $conn->query($sql1);
						
						} 
						}                                 
                         header("location:pmts_mgr.php");
                                exit(); 

                                    ?> 
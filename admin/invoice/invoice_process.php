<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "dbmultiple";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['CREATEDDATE'])){
$mdes =''; $mqty =''; $mrte=''; $amot='';
$CREATEDDATE  = trim($_POST['CREATEDDATE']);
$DOCTYPE  = trim($_POST['DOCTYPE']);
$ATTENTIONTO = trim($_POST['ATTENTIONTO']);
$ORDERNO     = trim($_POST['ORDERNO']);

if (isset($_POST['mdes'])) {
  $mdes      = json_encode($_POST['mdes']);
  $mqty      = json_encode($_POST['mqty']);
  $mrte      = json_encode($_POST['mrte']);
  $amot      = json_encode($_POST['amot']);
} 
$ACCOUNTNAME = trim($_POST['ACCOUNTNAME']);
$ACCOUNTNUMBER   = trim($_POST['ACCOUNTNUMBER']);
$CLIENTBANKNAME = trim($_POST['CLIENTBANKNAME']);
$BRANCH  = trim($_POST['BRANCH']);
$SWIFTCODE   = trim($_POST['SWIFTCODE']);
$m = date("m");
$y = date("Y");
$INVOICESUBTOTAL = trim($_POST['INVOICESUBTOTAL']);
$INVTAX  = trim($_POST['INVTAX']);
$INVGRANDTOTAL   = trim($_POST['INVGRANDTOTAL']);
$CREATEDBY   = trim($_POST['CREATEDBY']);
$USERTITLE = trim($_POST['USERTITLE']);
$USERDEPT = trim($_POST['USERDEPT']);
$USERPFNO = trim($_POST['USERPFNO']);
$DOCDATE  = trim($_POST['DOCDATE']);
$DESCRIPTION =$mdes;       // actual value
$QTY  = $mqty;               // DOCTYPE
$RATE  =  $mrte;               // DOCTYPE
$AMOUNT  = $amot; 

  $sql1="INSERT INTO `dbmultiple`.`receiptinvoices` (`CREATEDDATE`,
                                                             `DOCTYPE`,
                                                             `ATTENTIONTO`,
											                 `ORDERNO`,
													         `DESCRIPTION`,
													         `QTY`,
													         `RATE`,
													         `AMOUNT`,
													         `ACCOUNTNAME`,
													         `ACCOUNTNUMBER`,
													         `CLIENTBANKNAME`,
													         `BRANCH`,
 													         `SWIFTCODE`,
													         `FISCALMONTH`,
													         `FISCALYEAR`,
													         `INVOICESUBTOTAL`,
													         `INVTAX`,
													         `INVGRANDTOTAL`,
													         `CREATEDBY`,
													         `USERTITLE`,
													         `USERDEPT`,
 													         `USERPFNO`, 
															 `DOCDATE`)
                                                       VALUES (CREATEDDATE,
												       '$DOCTYPE',
                                                       '$ATTENTIONTO',
													   '$ORDERNO',
													   '$DESCRIPTION',
													   '$QTY',
													   '$RATE',
													   '$AMOUNT',
													   '$ACCOUNTNAME',
													   '$ACCOUNTNUMBER',
													   '$CLIENTBANKNAME',
													   '$BRANCH',
													   '$SWIFTCODE',
													   '$m',
													   '$y',
													   '$INVOICESUBTOTAL',
													   '$INVTAX',
													   '$INVGRANDTOTAL',
													   '$CREATEDBY',
													   '$USERTITLE',
													   '$USERDEPT',
													   '$USERPFNO',  
													   '$DOCDATE')";

                                   if($conn->query($sql1)===true){
                                                  header("location:inv_receipts.php");
                                                exit(); }

                                   else{    echo 'ERROR'.$conn->error;  }
}

                                   exit();
                                    ?>

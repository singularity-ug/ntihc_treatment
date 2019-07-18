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

if(isset($_POST['DOCDATE'])){
$item =''; $description =''; $qty=''; $rate=''; $amount=''; 
$DOCDATE  = trim($_POST['DOCDATE']);
$CREATEDDATE  = trim($_POST['CREATEDDATE']);
$DOCTYPE  = trim($_POST['DOCTYPE']);
$ATTENTIONTO = trim($_POST['ATTENTIONTO']);  
 
$PARTICULARS   = trim($_POST['PARTICULARS']);
$PAYMENTTYPE = trim($_POST['PAYMENTTYPE']);
$CHEQUENUMBER  = trim($_POST['CHEQUENUMBER']);
$CURRENCYTYPE   = trim($_POST['CURRENCYTYPE']);
$m = date("m");
$y = date("Y");
$AMOUNTINWORDS = trim($_POST['AMOUNTINWORDS']);
$TOTALSUM  = trim($_POST['TOTALSUM']);
$USERTITLE   = trim($_POST['USERTITLE']);
$CREATEDBY   = trim($_POST['CREATEDBY']);
$USERDEPT = trim($_POST['USERDEPT']);
$USERPFNO = trim($_POST['USERPFNO']); 
$ORDERNO = trim($_POST['ORDERNO']); 

  $sql1="INSERT INTO `dbmultiple`.`receiptinvoices` (`CREATEDDATE`,
                                                             `DOCDATE`,
                                                             `DOCTYPE`,
                                                             `ATTENTIONTO`,  
													         `PARTICULARS`,
													         `PAYMENTTYPE`,
													         `CHEQUENUMBER`,
 													         `CURRENCYTYPE`,
													         `FISCALMONTH`,
													         `FISCALYEAR`,
													         `AMOUNTINWORDS`,
													         `TOTALSUM`,
													         `USERTITLE`,
													         `CREATEDBY`,
													         `USERDEPT`,
															 `ORDERNO`,
													         `USERPFNO`)
                                                VALUES (CREATEDDATE,
												       '$DOCDATE',
												       '$DOCTYPE',
                                                       '$ATTENTIONTO', 
													   '$PARTICULARS',
													   '$PAYMENTTYPE',
													   '$CHEQUENUMBER',
													   '$CURRENCYTYPE',
													   '$m',
													   '$y',
													   '$AMOUNTINWORDS',
													   '$TOTALSUM',
													   '$USERTITLE',
													   '$CREATEDBY',
													   '$USERDEPT',
													   '$ORDERNO',
													   '$USERPFNO')";

                                   if($conn->query($sql1)===true){
                                                  header("location:inv_receipts.php");
                                                exit(); }

                                   else{    echo 'ERROR'.$conn->error;  }
}

                                   exit();
                                    ?>

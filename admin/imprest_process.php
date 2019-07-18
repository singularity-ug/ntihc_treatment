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

if(isset($_POST['IDNUMBER'])){
$impdescription =array(); $impcurrency =array(); $impdebit=array();

$IDNUMBER  = trim($_POST['IDNUMBER']);
$REQUESTDATE = trim($_POST['REQUESTDATE']);
$APPLICANTNAME     = trim($_POST['APPLICANTNAME']);
$AP_DEPARTRMENT = trim($_POST['AP_DEPARTRMENT']);

if (isset($_POST['impdescription'])) {
  $impdescription =      $_POST['impdescription'];
  $impcurrency   =       $_POST['impcurrency'];
  $impdebit      =       $_POST['impdebit'];
}

$SENDTO   = trim($_POST['SENDTO']);
$IMPAUTHORISEDBY   = trim($_POST['IMPAUTHORISEDBY']);
$IMPAUTHORISEDDATE   = trim($_POST['IMPAUTHORISEDDATE']);
$IMPAPPROVEDBY = trim($_POST['IMPAPPROVEDBY']);
$ORDERNO  = trim($_POST['ORDERNO']);

$m = date("m");
$y = date("Y");
$i=0;
for($i=0;$i<count($impdescription);$i++){
        
$IMPREST_DESCRIPTION =$impdescription[$i];       // actual value
$IMP_CURRENCY  = $impcurrency[$i];               // category
$IMP_DEBIT  =  $impdebit[$i];

  $sql1="INSERT INTO `dbmultiple`.`imprest` (                      `IDNUMBER`,
                                                                   `REQUESTDATE`,
											                       `APPLICANTNAME`,
													               `AP_DEPARTRMENT`,
													               `IMPREST_DESCRIPTION`,
													               `IMP_CURRENCY`,
													               `IMP_DEBIT`,
																   `SENDTO`,
													               `IMPAUTHORISEDBY`,
													               `IMPAUTHORISEDDATE`,
													               `IMPAPPROVEDBY`,
													               `IMPAPPROVEDDATE`,
																   `ORDERNO`,
                                                                   `FISCALMONTH`,
													               `FISCALYEAR`)
                                  VALUES (             '$IDNUMBER',
													   '$REQUESTDATE',
													   '$APPLICANTNAME',
													   '$AP_DEPARTRMENT',
													   '$IMPREST_DESCRIPTION',
													   '$IMP_CURRENCY',
													   '$IMP_DEBIT',
													   '$SENDTO',
													   '$IMPAUTHORISEDBY',
													   '$IMPAUTHORISEDDATE',
													   '$IMPAPPROVEDBY',
													   '$IMPAPPROVEDDATE',
													   '$ORDERNO',
													   '$m',
						    						   '$y')";
						$conn->query($sql1);
						
						} 
						}                                 
                         header("location:petty_userdept.php");
                                exit(); 

                                    ?> 
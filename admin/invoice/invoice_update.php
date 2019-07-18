
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
$id       = trim($_POST['id']);
$ATTENTIONTO  = trim($_POST['ATTENTIONTO']);
$AMOUNTINWORDS = trim($_POST['AMOUNTINWORDS']);
$PARTICULARS     = trim($_POST['PARTICULARS']);
$PAYMENTTYPE = trim($_POST['PAYMENTTYPE']);
$CHEQUENUMBER   = trim($_POST['CHEQUENUMBER']);
$CURRENCYTYPE = trim($_POST['CURRENCYTYPE']);
$TOTALSUM  = trim($_POST['TOTALSUM']);
$ORDERNO   = trim($_POST['ORDERNO']);

$sql1="UPDATE `receiptinvoices`
                                          SET
										  `DOCDATE` ='$DOCDATE',
		                                  `ATTENTIONTO`='$ATTENTIONTO',
										  `AMOUNTINWORDS`='$AMOUNTINWORDS',
										  `PARTICULARS`='$PARTICULARS',
		                                  `PAYMENTTYPE`='$PAYMENTTYPE',
										  `CHEQUENUMBER`='$CHEQUENUMBER',
										  `CURRENCYTYPE`='$CURRENCYTYPE',
		                                  `TOTALSUM`='$TOTALSUM',
										  `ORDERNO`='$ORDERNO' 
                                          WHERE id='$id'";

                                   if($conn->query($sql1)){  header("location:inv_receipts.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?>

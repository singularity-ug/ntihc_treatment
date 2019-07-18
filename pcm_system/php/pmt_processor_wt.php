
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "pcms";

if(isset($_POST['PAYMENTDATE'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
  
$PAYMENTDATE = trim($_POST['PAYMENTDATE']); 
$PMTSERIALID = trim($_POST['PMTSERIALID']); 
$USERINITIALS = trim($_POST['USERINITIALS']); 
$QUARTERACCOUNTABLE = trim($_POST['QUARTERACCOUNTABLE']);
$USERTITLE = trim($_POST['USERTITLE']);
$USERINO = trim($_POST['USERINO']);  
$PLANDETAILS = trim($_POST['PLANDETAILS']); 
$CODE = trim($_POST['CODE']);
$FINANCIALPERIOD = trim($_POST['FINANCIALPERIOD']);
$FIRSTQTROB = trim($_POST['FIRSTQTROB']); 
$SECONDQTROB = trim($_POST['SECONDQTROB']); 
$THIRDQTROB = trim($_POST['THIRDQTROB']);
$FOUTHQTROB = trim($_POST['FOUTHQTROB']);
$TOTALROB = trim($_POST['TOTALROB']); 
$BUDGETSTATUS = trim($_POST['BUDGETSTATUS']);   
$PAYEE = trim($_POST['PAYEE']); 
$PMTNO = trim($_POST['PMTNO']);   
$AMOUNTPAYABLE = trim($_POST['AMOUNTPAYABLE']);  
$METERNO = trim($_POST['METERNO']); 
$ACCOUNTNO = trim($_POST['ACCOUNTNO']);   
$PROPERTY = trim($_POST['PROPERTY']); 
$UTILITYTYPE = trim($_POST['UTILITYTYPE']);   
$FROMDATE = trim($_POST['FROMDATE']);  
$PREVIOUSUNITS = trim($_POST['PREVIOUSUNITS']); 
$CURRENTUNITS = trim($_POST['CURRENTUNITS']);   
$UNITSUSED = trim($_POST['UNITSUSED']); 
$COSTPERUNIT = trim($_POST['COSTPERUNIT']);   
$SERVICEFEES = trim($_POST['SERVICEFEES']);  
$VAT = trim($_POST['VAT']); 
$BILLEDAMOUNT = trim($_POST['BILLEDAMOUNT']);   
$ARREARS = trim($_POST['ARREARS']);  	 
$PREVIOUSPAYMENT = trim($_POST['PREVIOUSPAYMENT']);  	


$sql = "INSERT INTO payments (PAYMENTDATE,  
									 PMTSERIALID,   
									 USERINITIALS,  
									 QUARTERACCOUNTABLE,  
									 USERTITLE, 
									 USERINO,  
									 PLANDETAILS,  
									 CODE, 
									 FINANCIALPERIOD,  
									 FIRSTQTROB,       
									 SECONDQTROB, 
									 THIRDQTROB,
									 FOUTHQTROB,  
									 TOTALROB, 
									 BUDGETSTATUS, 
									 METERNO, ACCOUNTNO, PROPERTY, UTILITYTYPE, FROMDATE,    PREVIOUSUNITS, CURRENTUNITS,  
									 UNITSUSED,  COSTPERUNIT,  SERVICEFEES, VAT, BILLEDAMOUNT, ARREARS,PREVIOUSPAYMENT,   
									 AMOUNTPAYABLE, PAYEE, PMTNO)
                             VALUES ('$PAYMENTDATE', 
									 '$PMTSERIALID', 
									 '$USERINITIALS',    
									 '$QUARTERACCOUNTABLE',
									 '$USERTITLE', 
									 '$USERINO',  
									 '$PLANDETAILS',
									 '$CODE', 
									 '$FINANCIALPERIOD',    
									 '$FIRSTQTROB',
									 '$SECONDQTROB', 
									 '$THIRDQTROB',  
									 '$FOUTHQTROB', 
									 '$TOTALROB',    
									 '$BUDGETSTATUS', 
									 '$METERNO', '$ACCOUNTNO', '$PROPERTY', '$UTILITYTYPE', '$FROMDATE', '$PREVIOUSUNITS', '$CURRENTUNITS',  
									 '$UNITSUSED',  '$COSTPERUNIT',  '$SERVICEFEES', '$VAT', '$BILLEDAMOUNT', '$ARREARS', '$PREVIOUSPAYMENT',
									 '$AMOUNTPAYABLE', '$PAYEE', '$PMTNO')";
									  
                                       mysqli_query($conn, " UPDATE `procplanning`  SET `TOTALROB` = (`TOTALROB` - '$AMOUNTPAYABLE'), 
							                                     WHERE `PLANDETAILS` = '$PLANDETAILS' AND `FINANCIALPERIOD` = 
							                                     '$FINANCIALPERIOD'"); 
																 
									   mysqli_query($conn, " UPDATE `procplanning`  SET `FIRSTQTROB` = (`FIRSTQTROB` - '$AMOUNTPAYABLE'), 
							                                     WHERE `PLANDETAILS` = '$PLANDETAILS' AND `FINANCIALPERIOD` = '$FINANCIALPERIOD' 
																 AND `QUARTERACCOUNTABLE` = '1ST QUARTER'"); 
																 
																 
								       mysqli_query($conn, "UPDATE `procplanning` SET `SECONDQTROB`= (SECONDQTROB - '$AMOUNTPAYABLE'),
														WHERE `PLANDETAILS` = '$PLANDETAILS' AND `FINANCIALPERIOD` = '$FINANCIALPERIOD' 
																 AND `QUARTERACCOUNTABLE` = '2ND QUARTER'");  
																 
									   mysqli_query($conn, "UPDATE `procplanning` SET `THIRDQTROB`= (THIRDQTROB - '$AMOUNTPAYABLE'),
														WHERE `PLANDETAILS` = '$PLANDETAILS' AND `FINANCIALPERIOD` = '$FINANCIALPERIOD' 
																 AND `QUARTERACCOUNTABLE` = '3RD QUARTER'"); 
																 
									   mysqli_query($conn, "UPDATE `procplanning` SET `FOUTHQTROB`= (FOUTHQTROB - '$AMOUNTPAYABLE'),
														WHERE `PLANDETAILS` = '$PLANDETAILS' AND `FINANCIALPERIOD` = '$FINANCIALPERIOD' 
																 AND `QUARTERACCOUNTABLE` = '4TH QUARTER'");  						 						 	 
																 	
																  

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:payments.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement"; 
$dbname1 = "dbmultiple"; 
if(isset($_POST['PAYMENTDATE'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname1);

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
$CHEQUENO = trim($_POST['CHEQUENO']);
$PROJECT = trim($_POST['PROJECT']);
$PAYEE = trim($_POST['PAYEE']); 
$PMTNO = trim($_POST['PMTNO']);  
$DETAILSOFPAYMENT = trim($_POST['DETAILSOFPAYMENT']); 
$AMOUNTPAYABLE = trim($_POST['AMOUNTPAYABLE']);  

mysqli_query($conn, "UPDATE `procplanning` SET `TOTALROB` = (`TOTALROB` - '$AMOUNTPAYABLE') WHERE `PLANDETAILS` = '$PLANDETAILS'"); 

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {   }
 
$sql = "INSERT INTO payments        (PAYMENTDATE,  
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
									 DETAILSOFPAYMENT, AMOUNTPAYABLE, CHEQUENO, PROJECT, PAYEE, PMTNO)
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
									 '$DETAILSOFPAYMENT','$AMOUNTPAYABLE', '$CHEQUENO',  '$PROJECT',  '$PAYEE', '$PMTNO')";
									  
									 mysqli_query($conn, "UPDATE `procplanning` SET `TOTALROB` = (`TOTALROB` + '$AMOUNTPAYABLE') 
									 WHERE `PLANDETAILS` = '$PLANDETAILS'  AND `FINANCIALPERIOD` =  '$FINANCIALPERIOD' "); 
									 
									 if($QUARTERACCOUNTABLE=='1ST QUARTER'){
									 mysqli_query($conn, "UPDATE `procplanning` SET `FIRSTQTROB` = (`FIRSTQTROB` + '$AMOUNTPAYABLE') 
									 WHERE `PLANDETAILS` = '$PLANDETAILS'  AND `FINANCIALPERIOD` =  '$FINANCIALPERIOD'"); }  
									 
									 if($QUARTERACCOUNTABLE=='2ND QUARTER'){
									 mysqli_query($conn, "UPDATE `procplanning` SET `SECONDQTROB` = (`SECONDQTROB` + '$AMOUNTPAYABLE') 
									 WHERE `PLANDETAILS` = '$PLANDETAILS'  AND `FINANCIALPERIOD` =  '$FINANCIALPERIOD'"); }  
	 
	                                 if($QUARTERACCOUNTABLE=='3RD QUARTER'){ 
	                                 mysqli_query($conn, "UPDATE `procplanning` SET `THIRDQTROB` = (`THIRDQTROB` + '$AMOUNTPAYABLE') 
									 WHERE `PLANDETAILS` = '$PLANDETAILS'  AND `FINANCIALPERIOD` =  '$FINANCIALPERIOD'");} 
									 
									 if($QUARTERACCOUNTABLE=='4TH QUARTER'){   
									 mysqli_query($conn, "UPDATE `procplanning` SET `FOUTHQTROB` = (`FOUTHQTROB` + '$AMOUNTPAYABLE') 
									 WHERE `PLANDETAILS` = '$PLANDETAILS'  AND `FINANCIALPERIOD` =  '$FINANCIALPERIOD'"); }  
	     
									 mysqli_query($conn, "UPDATE `procplanning` SET `VARIANCE` = (BUDGETAMOUNT - TOTALROB) 
									 WHERE `PLANDETAILS` = '$PLANDETAILS'  AND `FINANCIALPERIOD` =  '$FINANCIALPERIOD' "); 
									 

} 
   					 
		  
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:payments.php");
	exit();
	}
 
 
else{}
?> 
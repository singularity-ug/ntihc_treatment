<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);
$id = trim($_POST['id']);
$opt = trim($_POST['FUELSTATION']);
$sp  = trim($_POST['REGISTRATIONNO']);
$db  = trim($_POST['INVOICENO']);
$mbf = trim($_POST['PREVIOUSMILEAGE']);
$cmf = trim($_POST['CURRENTMILEAGE']); 
$dcc = trim($_POST['DISTANCECOVERED']);
$rmm = trim($_POST['RUNNINGMILEAGE']);  
$coz = trim($_POST['LITRE']);
$cal = trim($_POST['UNITPRICE']);
$coxx = trim($_POST['PROJECT']);
$rexs = trim($_POST['ISSUEDBY']);
$nuix = trim($_POST['ISSUERACCOUNT']);
$dv = trim($_POST['DRIVER']);
$fcn = trim($_POST['ISSUERACCOUNT']);
$full = trim($_POST['FUELISSUANCESTATUS']); 
$pap = trim($_POST['PURPOSE']); 
$isstt = trim($_POST['ISSUERTITLE']); 
$mnem = trim($_POST['MONTHNAME']);
$fccd = trim($_POST['Fuelcardname']); 
$issac = trim($_POST['ISSUERACCOUNT']); 
$fueld = trim($_POST['FUELISSUANCEDATE']); 
$fucost = trim($_POST['TOTALAMOUNT']); 
$divv = trim($_POST['DIVISION']); 
$direc = trim($_POST['DIRECTORATE']);
$captu = trim($_POST['DATECAPTURED']); 
$funk = trim($_POST['FUNCTIONALSTATUS']); 
$dmob = trim($_POST['DRIVERMOBILENO']); 
$vlocn = trim($_POST['VEHICLELOCATION']); 
$cumnul = trim($_POST['Cardcode']); 
$fismon = trim($_POST['Fiscalmonth']); 
$soucc = trim($_POST['SOURCEOFFUND']); 
$discount = trim($_POST['discount']); 
$op  = '';
    
$conn->query("UPDATE fuellogs SET PREVIOUSMILEAGE ='$mbf',  CURRENTMILEAGE ='$cmf',   DISTANCECOVERED ='$dcc',  RUNNINGMILEAGE ='$rmm', 
                                  MONTHNAME ='$mnem',  Fuelcardname ='$fccd',  ISSUERACCOUNT ='$issac', ISSUERTITLE ='$isstt',
								  DIVISION ='$divv', DIRECTORATE ='$direc', TOTALAMOUNT ='$fucost',  Cardcode ='$cumnul',  
								  Fiscalmonth ='$fismon', Fiscalpaymentmonth='$fismon', LoadInvoicedate ='$fueld', 
                                  FUELSTATION ='$opt',
								  REGISTRATIONNO ='$sp', 
								  INVOICENO ='$db',  
								  LITRE ='$coz', 
								  UNITPRICE ='$cal', 
                                  PROJECT ='$coxx', 
								  ISSUEDBY ='$rexs', 
								  ISSUERACCOUNT ='$nuix',
								  DRIVER ='$dv',  
                                  FUELISSUANCEDATE ='$fueld',
								  FUELISSUANCESTATUS ='ISSUED',
								  PURPOSE ='$pap',
								  SOURCEOFFUND ='$soucc', 
								  DATECAPTURED ='$captu',
								  discount ='$discount'
                                  WHERE id ='$id'"); 
								  
								   mysqli_query($conn, "UPDATE `fuelcards` SET `fuelvailable` = (`fuelvailable` - '$fucost') 
								   WHERE `Fuelcardname` = '$fccd'"); 
									 
								   mysqli_query($conn, "UPDATE `motorisedequipments` SET `CURRENTMILEAGE` = '$cmf',
								                                                         `RECENTFUELCOSTPERLITER` = '$cal',
																						 `DRIVERALLOCATED` = '$dv',
																						 `FUNCTIONALSTATUS` = '$funk',
																						 `DRIVERMOBILENO` = '$dmob',
								                                                         `VEHICLELOCATION` = '$vlocn' 
								   WHERE `REGISTRATIONNO` = '$sp'"); 

}
   header("location:fuel_addin.php");
exit();
?> 
               
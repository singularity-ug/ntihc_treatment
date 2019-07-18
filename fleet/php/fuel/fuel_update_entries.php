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
$cumnul = trim($_POST['Cardcode']); 

$op  = '';
    
$conn->query("UPDATE fuellogs SET PREVIOUSMILEAGE ='$mbf',  CURRENTMILEAGE ='$cmf',   DISTANCECOVERED ='$dcc',  RUNNINGMILEAGE ='$rmm', 
                                  MONTHNAME ='$mnem',  Fuelcardname ='$fccd',  ISSUERACCOUNT ='$issac', ISSUERTITLE ='$isstt',
								  DIVISION ='$divv', DIRECTORATE ='$direc', TOTALAMOUNT ='$fucost', Cardcode ='$cumnul', 
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
								  DATECAPTURED ='$captu'
                                  WHERE id ='$id'"); 

}
   header("location:fuel_view_all.php");
exit();
?> 
               
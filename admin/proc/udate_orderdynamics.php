<?php

$conn = new mysqli("localhost", "root", "toor2", "dbmultiple");

if(isset($_POST['buttonsend']))
{
 
   $rb = $_POST['RECIEVEDBY'];
   $on = $_POST['ORDERNO'];
   $pb = $_POST['PAIDBY']; 
   $payt = $_POST['IMPAYTITTLE']; 
   
   $impdebit       =  $_POST['impdebit']; 
   $impbudesc       =  $_POST['impbudesc'];  
   $lid       =  $_POST['lid'];  
   
   for($x=0; $x<count($lid);$x++){
  $res =  $conn->query("UPDATE imprest SET RECIEVEDBY='$rb', RECIEVEDDATE=NOW(), CASHOUT='PAID', PAIDBY='$pb', PAIDDATE=NOW(), IMPAYTITTLE='$payt'
                 , LID='$lid[$x]' WHERE `ORDERNO` = '$on'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
   
for($i=0; $i<count($impbudesc);$i++){  
          $newam = $impdebit[$i]; 
		  $budgetdetails  = $impbudesc[$i];
    $conn->query("UPDATE budget SET amount_utilised = (amount_utilised + $newam) WHERE `budgetdetails` = '$budgetdetails'");
    $conn->query("UPDATE budget SET remaining_onbudget = (totalcost - amount_utilised) WHERE `budgetdetails` = '$budgetdetails'");	
	$conn->query("UPDATE budget SET percentage_utilised = (amount_utilised/totalcost)*100 WHERE `budgetdetails` = '$budgetdetails'");							
	$conn->query("UPDATE budget SET percentage_remaining = (remaining_onbudget/totalcost)*100 WHERE `budgetdetails` = '$budgetdetails'");	 }

} 
	header("location:../../petty_cash.php");
	exit();
?> 
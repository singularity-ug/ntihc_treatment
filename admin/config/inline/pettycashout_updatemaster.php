<?php

$conn = new mysqli("localhost", "root", "", "dbmultiple");

if(isset($_POST['buttonsend']))
{
 
   $rb = $_POST['RECIEVEDBY'];
   $on = $_POST['ORDERNO'];
   
   $impdebit       =  $_POST['impdebit']; 
   $impcode        =  $_POST['impcode'];  
  
   $conn->query("UPDATE imprest SET RECIEVEDBY='$rb', RECIEVEDDATE=NOW(), CASHOUT='PAID' WHERE `ORDERNO` = '$on'");
   
for($i=0; $i<count($impcode);$i++){  
          $newam = $impdebit[$i]; 
		  $code  = $impcode[$i];
    $conn->query("UPDATE budget SET amount_utilised = (amount_utilised + $newam) WHERE `code` = '$code'");
    $conn->query("UPDATE budget SET remaining_onbudget = (totalcost - amount_utilised) WHERE `code` = '$code'");	
	$conn->query("UPDATE budget SET percentage_utilised = (amount_utilised/totalcost)*100 WHERE `code` = '$code'");							
	$conn->query("UPDATE budget SET percentage_remaining = (remaining_onbudget/totalcost)*100 WHERE `code` = '$code'");	 }

}

?>
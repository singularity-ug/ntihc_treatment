<?php

$conn = new mysqli("localhost", "root", "", "dbmultiple");

if(isset($_POST['buttonload']))
{
 
   
   $on = $_POST['id'];
   $rb = $_POST[' REIMBURSMENTID'];
   $pb = $_POST['REPLENISHDATE']; 
   $payt = $_POST['CREDIT'];   
   $slod = $_POST['LOADEDBY'];
   $lott = $_POST['LOADERTITLE'];
     
   $conn->query("UPDATE imprest SET REIMBURSMENTID='$rb', REPLENISHDATE='$pb',  CASHOUT='PAID', CREDIT='$payt', 
                                    DCDEFAULT='DEFAULT', LOADEDBY='$slod' , LOADERTITLE='$lott' WHERE `id` = '$on'");
     						  }
  
header("location:../../petty_cash.php");
	exit();
?> 
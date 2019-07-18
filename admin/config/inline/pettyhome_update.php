<?php

$conn = new mysqli("localhost", "root", "", "dbmultiple");

if(isset($_POST['buttonresend']))
{
  
   $on = $_POST['ORDERNO'];
   
   $impdescription        =  $_POST['impdescription'];  
   $impcurrency       =  $_POST['impcurrency']; 
   $impdebit        =  $_POST['impdebit'];  
   
    
    $conn->query("UPDATE imprest SET REQUESTDATE=NOW(), AUTHACTION='PENDING', IMPREST_DESCRIPTION = '$impdescription', IMP_CURRENCY = '$impcurrency', IMP_DEBIT = '$impdebit',
	              WHERE `ORDERNO` = '$on'"); 
    } 
header("location:../../home_user.php");
	exit();
?>  
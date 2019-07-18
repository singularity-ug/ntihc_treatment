<?php

$conn = new mysqli("localhost", "root", "", "procurement");

if(isset($_POST['buttonsend']))
{ 
   $rb = $_POST['SENDTO'];
   $on = $_POST['REQUISITIONID'];
   $pb = $_POST['DATEREQUIRED']; 
   $payt = $_POST['LOCATIONFORDELIVERY'];  
   $gds = $_POST['SUBJECTOFPROCUREMENT'];
   $totx = $_POST['SUBTOTAL'];   
   $core = $_POST['CORACTION'];   
    
   $desc       =  $_POST['desc'];  
   $uom       =  $_POST['uom']; 
   $qty       =  $_POST['qty']; 
   $escost       =  $_POST['escost']; 
   $marktp       =  $_POST['marktp'];  
   
   for($x=0; $x<count($desc);$x++){
   $res =  $conn->query("UPDATE procreqn SET SENDTO='$rb', DATEREQUIRED='$pb', LOCATIONFORDELIVERY='$payt', SUBJECTOFPROCUREMENT='$gds', SUBTOTAL='$totx', CORACTION='PENDING',
   DESCRIPTION='$desc[$x]',
   UNITOFMEASURE='$uom[$x]', 
   QUANTITY='$qty[$x]',
   ESTIMATEDCOST='$escost[$x]',
   MARKETPRICE='$marktp[$x]' 
   WHERE `REQUISITIONID` = '$on'");  
		 		 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
    
} 
	header("location:procurement_user.php");
	exit();
?> 
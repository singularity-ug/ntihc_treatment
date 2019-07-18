<?php

$conn = new mysqli("localhost", "root", "toor2", "procurement");

if(isset($_POST['buttonsend']))
{
 
   $rb = $_POST['DESCRIPTION'];
   $on = $_POST['id']; 
   $off = $_POST['STORELOCATION'];
   $stat = $_POST['UNITCOST']; 
   $allot = $_POST['BASISOFVALUATION']; 
   $alx = $_POST['BUDGETCODE']; 
   $qttr = $_POST['QTYRECIEVED']; 
     
  $res =  $conn->query("UPDATE recievables SET DESCRIPTION='$rb', STORELOCATION='$off', UNITCOST='$stat', BASISOFVALUATION='$allot',
                        BUDGETCODE='$alx', QTYRECIEVED='$qttr' WHERE `id` = '$on'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }  
	header("location:stores_mgt_donations.php");
	exit();
?>   
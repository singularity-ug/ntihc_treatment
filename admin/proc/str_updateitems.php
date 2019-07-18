<?php

$conn = new mysqli("localhost", "root", "toor2", "procurement");

if(isset($_POST['buttonsend']))
{
 
   $rb = $_POST['OFFICERALLOCATED'];
   $on = $_POST['JOBNUMBER']; 
   $off = $_POST['OFFICERACCOUNT'];
   $stat = $_POST['ORDERSTATUS']; 
   $allot = $_POST['ALLOCATIONCOMMENT']; 
     
  $res =  $conn->query("UPDATE procreqn SET OFFICERALLOCATED='$rb', OFFICERACCOUNT='$off', ORDERSTATUS='$stat', ALLOCATIONCOMMENT='$allot' WHERE `JOBNUMBER` = '$on'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }  
	header("location:proc_pdu_mgr.php");
	exit();
?>   
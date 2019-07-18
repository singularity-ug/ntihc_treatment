<?php

$conn = new mysqli("localhost", "root", "toor2", "procurement");

if(isset($_POST['buttonsend']))
{
 
   $rb = $_POST['PROCUREMENTSTATUS'];
   $on = $_POST['JOBNUMBER'];  
     
  $res =  $conn->query("UPDATE procreqn SET PROCUREMENTSTATUS='$rb', RECIEVEDDATE=NOW() WHERE `JOBNUMBER` = '$on'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }  
	header("location:proc_review.php");
	exit();
?> 
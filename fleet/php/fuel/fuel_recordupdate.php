<?php

$conn = new mysqli("localhost", "root", "tooor2", "fleet");

if(isset($_POST['buttonsend']))
{
 
   $rb = $_POST['RVDBY'];
   $on = $_POST['ORDERNO'];
   $pb = $_POST['RVDNAME'];  
    
   $fcn       =  $_POST['fcn'];  
   $fs       =  $_POST['fs'];  
	 
  for($x=0; $x<count($fcn);$x++){
  $res =  $conn->query("UPDATE fuellogs SET RVDBY='$rb', RVDDATE=NOW(), REVIEWFUEL='REVIEWED', RVDNAME='$pb' 
                 ,FUELCARDNAME='$fcn[$x]',FUELSTATION='$fs[$x]' WHERE `ORDERNO` = '$on'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   } 
} 
	header("location:../fuel_review.php");
	exit();
?> 
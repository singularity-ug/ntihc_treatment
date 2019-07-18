<?php

$conn = new mysqli("localhost", "root", "", "procurement");

if(isset($_POST['buttonsend']))
{
   $FUCKERCOUNTER    = $_POST['FUCKERCOUNTER'];   
   $rb    = $_POST['DESCRIPTION'];
   $on    = $_POST['id']; 
   $off   = $_POST['SRFNO'];
   $stat  = $_POST['QTYISSUED']; 
   $allot = $_POST['FACILITYNANE']; 
   $alx   = $_POST['COLLECTEDBY']; 
   $qttr  = $_POST['PURPOSE']; 
     
   $res =  $conn->query("UPDATE outgoingorders SET DESCRIPTION='$rb', SRFNO='$off', QTYISSUED='$stat', FACILITYNANE='$allot',
                         COLLECTEDBY='$alx', PURPOSE='$qttr' WHERE `id` = '$on'");
						   
						 mysqli_query($conn, "UPDATE `items` SET `QTYISSUED` = (`QTYISSUED` + '$stat' - '$FUCKERCOUNTER') 
								   WHERE `DESCRIPTION` = '$rb'"); 
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }  
	header("location:stores_mgt_issued.php");
	exit();
?>   
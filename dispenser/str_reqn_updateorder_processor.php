<?php

$conn = new mysqli("localhost", "root", "toor2", "procurement");

if(isset($_POST['buttonsend']))
{
 
   $rb = $_POST['STOCKISSUANCESTATUS'];
   $on = $_POST['ORDERSERIALID'];
   $pb = $_POST['ISSBY']; 
   $payt = $_POST['ISSBYNAME']; 
   $paytdd = $_POST['ISSBYDATE']; 
   $paygg = $_POST['ISSUERACCOUNT']; 
   
   $variance       =  $_POST['variance']; 
   $dnx       =  $_POST['dnx'];  
   $tmx       =  $_POST['tmx']; 
   $batch       =  $_POST['batch'];  
   $remdrt       =  $_POST['remdrt']; 
   $lcn       =  $_POST['lcn'];  
   $expdet       =  $_POST['expdet'];  
   $pdx       =  $_POST['pdx'];  
   $qtyx       =  $_POST['qtyx'];    
   
   for($x=0; $x<count($remdrt);$x++){
  $res =  $conn->query("UPDATE outgoingorders SET STOCKISSUANCESTATUS='$rb', ENTRYDATE=NOW(), ISSBY='$pb',  ISSBYDATE='$paytdd', ISSUERACCOUNT='$paygg', ISSBYNAME='$payt',
                  BATCHNO='$remdrt[$x]', 
				  UNITOFMEASURE='$tmx[$x]', 
				  QTYISSUED='$variance[$x]', 
				  UNIT='$batch[$x]', 
				  EXPIRY='$lcn[$x]', 
				  STOCKBAL='$expdet[$x]', 
				  UNITVALUE='$pdx[$x]', 
				  AMOUNT='$qtyx[$x]' WHERE `ORDERSERIALID` = '$on'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
 
     
} 
	 
	
	header("location:../admin/proc/stores_module.php");
	exit();
?>  
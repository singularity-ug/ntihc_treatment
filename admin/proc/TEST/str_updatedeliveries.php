<?php
$conn = new mysqli("localhost", "root", "", "procurement");

if(isset($_POST['buttonsend']))
{ 
   $rb = $_POST['INVOICENO'];
   $on = $_POST['ORDERSERIALID'];
   $pb = $_POST['GOODSRECEIVABLETYPE']; 
   $payt = $_POST['STOCKTYPE'];  
   $gds = $_POST['GOODSRECIEVEDDATE']; 
   $delc = $_POST['DELIVERYCOMMENT']; 
   $grdet = $_POST['GOODSRECIEVEDBY'];    
   $gtit   =  $_POST['GOODSRECIEVEDBYTITLE']; 
   $gdes   =  $_POST['GOODSDELVDDATE'];  
   $dess = $_POST['DELIVERYSTATUS']; 
   $odds = $_POST['ORDERTYPE']; 
   
   $qtyrecieved       =  $_POST['qtyrecieved'];  
   $variance       =  $_POST['variance']; 
   $batch       =  $_POST['batch']; 
   $expdet       =  $_POST['expdet']; 
   $remdrt       =  $_POST['remdrt'];  
   $tmx       =  $_POST['tmx']; 
   $lcn       =  $_POST['lcn']; 
   $dnx       =  $_POST['dnx']; 
   
   for($x=0; $x<count($qtyrecieved);$x++){
   $res =  $conn->query("UPDATE recievables SET INVOICENO='$rb', GOODSRECEIVABLETYPE='$pb', STOCKTYPE='$payt', GOODSRECIEVEDDATE='$gds', DELIVERYCOMMENT='$delc',
   GOODSRECIEVEDBY='$grdet', GOODSRECIEVEDBYTITLE='$gtit', GOODSDELVDDATE=NOW(),  DELIVERYSTATUS='$dess', ORDERTYPE='$odds',
   QTYRECIEVED='$qtyrecieved[$x]',
   VARIANCE='$variance[$x]', 
   BATCHNO='$batch[$x]',
   EXPIRYDATE='$expdet[$x]', 
   EXPIRYREMINDDATE='$remdrt[$x]',
   UNITOFMEASURE='$tmx[$x]',
   STORELOCATION='$lcn[$x]'
   WHERE `ORDERSERIALID` = '$on' AND DESCRIPTION='$dnx[$x]'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
    
   } 
	header("location:stores_mgt_purchases.php");
	exit();
?> 
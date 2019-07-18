<?php

$conn = new mysqli("localhost", "root", "toor2", "procurement");

if(isset($_POST['buttonsend']))
{ 
   
   $on = $_POST['REQUISITIONID'];   
    
   $descc     =  $_POST['desc'];  
   $uom       =  $_POST['uom']; 
   $qty       =  $_POST['qty']; 
   $escost    =  $_POST['escost']; 
   $marktp    =  $_POST['marktp'];  
   
   for($x=0; $x<count($desc);$x++){
   $res =  $conn->query("UPDATE procreqn SET SENDTO='$rb',  
   UNITOFMEASURE='$uom[$x]', 
   QUANTITY='$qty[$x]',
   ESTIMATEDCOST='$escost[$x]',
   MARKETPRICE='$marktp[$x]' 
   WHERE `REQUISITIONID` = '$on' AND DESCRIPTION='$descc[$x]'"); 
   
   
     $sql1="INSERT INTO `procurement`.`recievables` (`DATECREATED`,
                                                             `SERVICEPROVIDER`, `SVPADDRESS`,  `SVPLOCATION`,  `DESCRIPTION`,  `QUANTITY`,
													         `UNITOFMEASURE`, `UNITCOST`,  `ITEMPRICE`, `TERMSOFDELIVERY`,  `APPROVERNAME`,`REVNAME`,
													         `APPROVERTITLE`,  `REVTITLE`, `APPROVEDDATE`, `FISCALMONTH`,  `FISCALYEAR`,
													         `SUBTOTAL`, `TAX`,  `TOTALCOST`,  `REVDATE`,  `NOTEA`,  `NOTEB`,  `NOTEC`,
															 `ORDERSERIALID`,  `DOCUMENTTYPE`, `ORDERTYPE`,  `PREPAREDBY`,  `PREPTITLE`, `PREPFPNO`, 
															 `DATEREQUIRED`,  `DELIVERYREMINDDATE`,  `LPONO`, 
															 `DELIVERYSTATUS`)
                                                VALUES ('$DATECREATED',
												       '$SERVICEPROVIDER',
                                                       '$SVPADDRESS', '$SVPLOCATION',  '$DESCRIPTION',  '$QUANTITY',   '$UNITOFMEASURE',  '$UNITCOST',  '$ITEMPRICE',   
													   '$TERMSOFDELIVERY',  '$APPROVERNAME', '$REVNAME',  '$APPROVERTITLE',  '$REVTITLE', '$APPROVEDDATE',  '$m',  '$y',
													   '$SUBTOTAL', '$TAX',  '$TOTALCOST',  '$REVDATE', '$NOTEA',  '$NOTEB',  '$NOTEC',  '$DOCUMENTTYPE',
													   '$ORDERTYPE',  '$PREPAREDBY',  '$PREPTITLE',  '$PREPFPNO',   '$DATEREQUIRED', '$DELIVERYREMINDDATE',  '$LPONO',
													   '$DELIVERYSTATUS')";
   
   
   
   
   
   
   
   
		 		 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
    
} 
	header("location:proc_pdu.php");
	exit();
?> 

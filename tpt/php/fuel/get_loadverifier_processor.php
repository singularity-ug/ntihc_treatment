
<?php

$conn = new mysqli("localhost", "root", "", "ftl");

if(isset($_POST['buttonsend']))
{
  
   $on = $_POST['purchaseid'];
   $rb = $_POST['Reference'];
   $pb = $_POST['Monthno']; 
   $payt = $_POST['verfiedby']; 
   $paytdd = $_POST['Yearval']; 
   $paygg = $_POST['Fiscalmonth']; 
   $nulsoft = $_POST['Loadreview']; 
       
   $dnx    =  $_POST['dnx'];  
   $tmx    =  $_POST['tmx'];   
   $cord   =  $_POST['cord']; 
   $fqx    =  $_POST['fqx'];    
   
   for($x=0; $x<count($fqx);$x++){
  $res =  $conn->query("UPDATE fuellogs SET Reference='$rb', FUELISSUANCEDATE=NOW(), Monthno='$pb',  Yearval='$paytdd', Fiscalmonth='$paygg', verfiedby='$payt',
                                             Loadreview='$nulsoft',  FUELISSUANCESTATUS='ISSUED',
				 
				  Fueloaded='$tmx[$x]', 
				  Cardcode='$cord[$x]',
				  Fuelcardname='$fqx[$x]' 
				  WHERE `purchaseid` = '$on' AND productid='$dnx[$x]'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
   $i =0;
  
    for($i=0; $i<count($dnx);$i++){  
          $newadd = $tmx[$i]; 
		   
    $conn->query("UPDATE fuelcards SET fuelvailable = (fuelvailable + $newadd) WHERE `productid` = '$dnx[$i]' AND `Fuelcardname` ='$fqx[$i]'");
    $conn->query("UPDATE purchase SET verfiedby = '$payt', Loadreview='$nulsoft' WHERE `purchaseid` = '$on'");	
	}

}   
  
	
	header("location:../dashboard.php");
	exit();
?>  


<?php

$conn = new mysqli("localhost", "root", "toor2", "patientmgt");

if(isset($_POST['buttonsend']))
{ 
   $rb = $_POST['NTIHCNO'];
   $on = $_POST['RSVNID'];
   $tex = $_POST['TESTSTATUS'];
 
   $aa = $_POST['AGE1'];
   $bb = $_POST['AGE_GROUP'];
   $cc = $_POST['SEX'];
   $dd = $_POST['NAME'];
   $ee = $_POST['REQUESTINGUNIT'];
   $ff = $_POST['REGISTERACCOUNT'];
   $gg = $_POST['LOTA'];
   $hh = $_POST['LOTB'];
   $ii = $_POST['LOTC'];
   $jj = $_POST['EXPIRYDATET1'];
   $kk = $_POST['EXPIRYDATET2'];
   $ll = $_POST['EXPIRYDATET3'];
   $mm = $_POST['FINALREACTIVITY'];
   $nn = $_POST['REACTIVITYT1'];
   $oo = $_POST['REACTIVITYT2'];
   $pp = $_POST['REACTIVITYT3'];
   $qq = $_POST['TECHTITLE'];
   $rr = $_POST['TESTEDBY']; 
   
   $ukass = $_POST['LABTIMEOUT']; 
     
   $dnx       =  $_POST['dnx'];     
   $fqx       =  $_POST['fqx'];    
   
   for($x=0; $x<count($fqx);$x++){
  $res =  $conn->query("UPDATE laborders SET NTIHCNO='$rb', TESTSTATUS='$tex', 
                  LABTIMEOUT='$ukass', TECHTITLE='$qq', TESTEDBY='$rr', 
                  RESULTDATE=NOW(), 
                  LABRESULTS='$fqx[$x]'   
				  WHERE `RSVNID` = '$on' AND TESTDESCRIPTION='$dnx[$x]'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
   $i =0;
  
    for($i=0; $i<count($dnx);$i++){  
          $newadd = $fqx[$i]; 
		   
     $conn->query("UPDATE cmpatientsregistration SET TESTSTATUS = 'COMPLETED',
	                       LABTIMEOUT='$ukass', TECHNICIANNAME='$rr'
	                       WHERE `RSVNID` = '$on'"); 
						   
	 $conn->query("UPDATE hivtests SET DATECREATED=NOW(), 
	                       AGE1='$aa',   AGE_GROUP='$bb', SEX='$cc', NAME='$dd',
						   REQUESTINGUNIT='$ee',   REGISTERACCOUNT='$ff', LOTA='$gg', LOTB='$hh',
						   LOTC='$ii',   EXPIRYDATET1='$jj', EXPIRYDATET3='$kk', EXPIRYDATET3='$ll',
	                       FINALREACTIVITY='$mm',   REACTIVITYT1='$nn', REACTIVITYT2='$oo', REACTIVITYT3='$pp',
						   TECHTITLE='$qq', TESTSTATUS='$tex', TESTEDBY='$rr'
	                       WHERE `RSVNID` = '$on'"); 					   	
	}

}   
  
	
	header("location:client_lab.php");
	exit();
?>  
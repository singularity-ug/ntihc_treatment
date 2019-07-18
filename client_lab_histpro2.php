

<?php

$conn = new mysqli("localhost", "root", "toor2", "patientmgt");

if(isset($_POST['buttonsend']))
{ 
   $rb = $_POST['NTIHCNO'];
   $on = $_POST['RSVNID'];
   $tex = $_POST['UPDATEDBY'];
    
   $dnx       =  $_POST['dnx'];     
   $fqx       =  $_POST['fqx']; 
   
   $aa       =  $_POST['aa'];
   $abb       =  $_POST['abb'];
   $acc       =  $_POST['acc'];
   $add       =  $_POST['add'];
   $aee       =  $_POST['aee'];
   $aff       =  $_POST['aff'];  
   
   for($x=0; $x<count($fqx);$x++){
  $res =  $conn->query("UPDATE laboratory SET NTIHCNO='$rb', UPDATEDBY='$tex', UPDATEDATE=NOW(), 
                  HEAMATOLOGY_SCROLOGY='$fqx[$x]',
				  MALARIA='$aa[$x]', 
				  STOOL_MICROSCOPY='$abb[$x]', 
				  URINE_MICROSCOPY='$acc[$x]', 
				  SWABS_TYPE='$add[$x]', 
				  SWABS_WETPREP='$aee[$x]',  
				  SWABS_GRAMSTAIN='$aff[$x]'   
				  WHERE `RSVNID` = '$on' AND SPECIMEN='$dnx[$x]'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
   $i =0;
  
    for($i=0; $i<count($dnx);$i++){  
          $newadd = $fqx[$i]; 
		   
    $conn->query("UPDATE cmpatientsregistration SET TECHNICIANNAME = '$tex'
	                       WHERE `RSVNID` = '$on'"); 	
	}

}   
  
	
	header("location:client_lab.php");
	exit();
?>  
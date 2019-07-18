

<?php

$conn = new mysqli("localhost", "root", "toor2", "patientmgt");

if(isset($_POST['buttonsend']))
{ 
   $rb = $_POST['NTIHCNO'];
   $on = $_POST['RSVNID'];
   $tex = $_POST['TESTSTATUS'];
    
   $dnx       =  $_POST['dnx'];     
   $fqx       =  $_POST['fqx'];    
   
   for($x=0; $x<count($fqx);$x++){
  $res =  $conn->query("UPDATE laborders SET NTIHCNO='$rb', TESTSTATUS='$tex', RESULTDATE=NOW(), 
                  LABRESULTS='$fqx[$x]'   
				  WHERE `RSVNID` = '$on' AND TESTDESCRIPTION='$dnx[$x]'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
   $i =0;
  
    for($i=0; $i<count($dnx);$i++){  
          $newadd = $fqx[$i]; 
		   
    $conn->query("UPDATE cmpatientsregistration SET TESTSTATUS = 'COMPLETED'
	                       WHERE `RSVNID` = '$on'"); 	
	}

}   
  
	
	header("location:client_lab.php");
	exit();
?>  
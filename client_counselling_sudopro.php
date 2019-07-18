

<?php

$conn = new mysqli("localhost", "root", "toor2", "patientmgt");

if(isset($_POST['buttonsend']))
{ 
   $rb = $_POST['NTIHCNO'];
   $on = $_POST['RSVNID']; 
   $aaa = $_POST['VISTTYPE'];  
   $bbb = $_POST['VISTBY'];
   $ccc = $_POST['BRIEF']; 
   $ddd = $_POST['COUNSELLING'];
   
   $eee = $_POST['PRE_TESTCOUSELLING_GIVEN']; 
   $fff = $_POST['COUNSELLED_AS']; 
    
$add = $_POST['HCT_ENTRYPOINT'];
$aee = $_POST['EVERTESTEDBEFORE'];
$af = $_POST['NUMBEROFTESTS']; 
$aj = $_POST['NUMBEROFSEXUALPARTNERS'];
$ak = $_POST['LAST_TESTRESULTS'];
$al = $_POST['SPOUSE_PARTNERTESTED_BEFORE'];
$am = $_POST['IFYES_RESULTS'];

$hh  = $_POST['RESULTSRECEIVED'];

$ii  = $_POST['RECIEVEDASACOUPLE'];
$jj = $_POST['COUPLERESULTS'];
$kk = $_POST['TB_SUSPICION'];
$ll = $_POST['COTRIMOXAZOLE_START'];
$mm = $_POST['CARE_LINK'];
$nn = $_POST['CDFOUR'];
$rr = $_POST['ACTIONTAKEN'];

$oo = $_POST['COUNSELORSNAME'];
$pp = $_POST['RECIEVEDDATE']; 
$ss = $_POST['SERVICEEXTENTION']; 

$vv = $_POST['FINALREACTIVITY'];
    
   $dnx       =  $_POST['dnx'];     
   $fqx       =  $_POST['fqx'];    
   
   for($x=0; $x<count($fqx);$x++){
  $res =  $conn->query("UPDATE counsellingservices SET NTIHCNO='$rb', VISTTYPE='$aaa',  UPDATEDATE=NOW(), 
                  VISTBY='$bbb', BRIEF='$ccc', COUNSELLING='$ddd',
                  PROBLEM='$fqx[$x]'   
				  WHERE `RSVNID` = '$on' AND PROBLEM_CATEGORY='$dnx[$x]'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
    }
    $i =0;
  
    for($i=0; $i<count($dnx);$i++){  
          $newadd = $fqx[$i]; 
		   
    $conn->query("UPDATE cmpatientsregistration SET TESTSTATUS = 'COMPLETED', 
	LABRESULTREVIEW ='POST TEST COUNSELLING DONE'
	                       WHERE `RSVNID` = '$on'"); 
						  
    $conn->query("UPDATE hct_counselling_andtesting SET PRE_TESTCOUSELLING_GIVEN = '$eee', 
	                       HCT_ENTRYPOINT = '$add', EVERTESTEDBEFORE = '$aee',
						   NUMBEROFTESTS = '$af', NUMBEROFSEXUALPARTNERS = '$aj',
						   LAST_TESTRESULTS = '$ak', SPOUSE_PARTNERTESTED_BEFORE = '$al',
						   IFYES_RESULTS = '$am',
	                       
						   COUNSELLED_AS = '$fff',
						   RESULTSRECEIVED = '$hh', 
						   
						   RECIEVEDASACOUPLE = '$ii',
						   COUPLERESULTS = '$jj', TB_SUSPICION = '$kk',
						   COTRIMOXAZOLE_START = '$ll', 
						   CARE_LINK = '$mm',
						   
						   CDFOUR = '$nn', 
						   ACTIONTAKEN = '$rr', 
						   
						   COUNSELORSNAME = '$oo',
						   RECIEVEDDATE = '$pp',  
						   SERVICEEXTENTION = '$ss', 
						    
						   FINALREACTIVITY = '$vv'
	                       WHERE `RSVNID` = '$on'"); 	
	} 
    }    
	header("location:counsellingroom.php");
	exit();
?>  
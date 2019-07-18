<?php

$conn = new mysqli("localhost", "root", "toor2", "ahr");

if(isset($_POST['buttonsend']))
{
  
   $STAFFAPPRAISALID = $_POST['STAFFAPPRAISALID']; 
   $FIRSTLVSUPERVISOR = $_POST['FIRSTLVSUPERVISOR'];
   $SECONDLVSUPERVISOR = $_POST['SECONDLVSUPERVISOR']; 
   $TITLE = $_POST['TITLE'];  
   $APPRAISALPERIOD = $_POST['APPRAISALPERIOD']; 
   $APPRAISALDATE = $_POST['APPRAISALDATE'];    
   $MARITALSTATUS = $_POST['MARITALSTATUS'];   
   $TELCONTACT = $_POST['TELCONTACT']; 
   $PERSONALEMAIL = $_POST['PERSONALEMAIL'];  
   $NOOFBIOCHILDREN = $_POST['NOOFBIOCHILDREN']; 
    $DISTRICT = $_POST['DISTRICT']; 
	$COUNTY = $_POST['COUNTY']; 
	$SUBCOUNTY = $_POST['SUBCOUNTY'];
   $PARISH = $_POST['PARISH']; 
   $LCVILLAGE = $_POST['LCVILLAGE']; 
   $EMPLOYMENTTERMS = $_POST['EMPLOYMENTTERMS']; 
   $OTHERS = $_POST['OTHERS'];
   $APPRAISEEACCOUNT = $_POST['APPRAISEEACCOUNT'];
   
   $AW       =  $_POST['AW']; 
   $IN       =  $_POST['IN'];  
   $FR       =  $_POST['FR']; 
   $TO       =  $_POST['TO'];  
   
  
   
   $AA       =  $_POST['AA']; 
   $BB       =  $_POST['BB'];  
   $CC       =  $_POST['CC']; 
   $DD       =  $_POST['DD']; 
   $EE       =  $_POST['EE']; 
   $FF       =  $_POST['FF'];  
   $GG       =  $_POST['GG']; 
    
    for($x=0; $x<count($AA);$x++){ 
    $res =  $conn->query("UPDATE staffappraisal SET 
                                           FIRSTLVSUPERVISOR='$FIRSTLVSUPERVISOR',  
                                           SECONDLVSUPERVISOR='$FIRSTLVSUPERVISOR', 
										   TITLE='$TITLE',   
										   APPRAISALPERIOD='$APPRAISALPERIOD',  
										   APPRAISALDATE='$APPRAISALDATE',     
										   MARITALSTATUS='$MARITALSTATUS', 
										   TELCONTACT='$TELCONTACT',
										   PERSONALEMAIL='$PERSONALEMAIL',  
										   NOOFBIOCHILDREN='$NOOFBIOCHILDREN',  
										   COUNTY='$COUNTY', 
										   SUBCOUNTY='$SUBCOUNTY',  
										   PARISH='$PARISH',  
										   LCVILLAGE='$LCVILLAGE',
                                           EMPLOYMENTTERMS='$EMPLOYMENTTERMS', 
                                           OTHERS='$OTHERS', 
										   APPRAISEEACCOUNT='$APPRAISEEACCOUNT',  
                 ACADEMICAWARD='$AW[$x]',
				 INSTITUTION='$IN[$x]',
				 FROMDATE='$FR[$x]',
				 TODATE='$TO[$x]', 
				 
				 CORERESPONSIBILITY='$AA[$x]',
				 SUBACTIVITY='$BB[$x]',
				 APPRAISEESCOREOUTOFTEN='$CC[$x]',
				 JUSTIFICATION='$DD[$x]', 
				 APPRAISERSCORE='$EE[$x]',
				 APPRAISERSCOMMENT='$FF[$x]',
				 AGREEDSCORE='$GG[$x]'  
				 
				 WHERE `STAFFAPPRAISALID` = '$STAFFAPPRAISALID'");
				 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
  
   
for($i=0; $i<count($AW);$i++){  
          $newam = $AW[$i]; 
		  $budgetdetails  = $impbudesc[$i];
    $conn->query("UPDATE budget SET amount_utilised = (amount_utilised + $newam) WHERE `budgetdetails` = '$budgetdetails'"); 							
	$conn->query("UPDATE budget SET percentage_remaining = (remaining_onbudget/totalcost)*100 WHERE `budgetdetails` = '$budgetdetails'");	 }

} 
 
	header("location:hr_contacts.php");
	exit();
?> 
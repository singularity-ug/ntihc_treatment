<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}



if(isset($_POST['STAFFAPPRAISALID'])){
$AW =''; $IN =''; $FR=''; $TO=''; 
 

if (isset($_POST['AW'])) {
  $AW      = json_encode($_POST['AW']);
  $IN      = json_encode($_POST['IN']);
  $FR      = json_encode($_POST['FR']);
  $TO      = json_encode($_POST['TO']); 
}

$ACADEMICAWARD =$AW;        
$INSTITUTION  = $IN;                
$FROMDATE  =  $FR;               
$TODATE  = $TO;                
  
$ID  = trim($_POST['id']);
 
   $FIRSTLVSUPERVISOR = trim($_POST['FIRSTLVSUPERVISOR']);
   $SECONDLVSUPERVISOR = trim($_POST['SECONDLVSUPERVISOR']); 
   $TITLE = trim($_POST['TITLE']);  
   $APPRAISALPERIOD = trim($_POST['APPRAISALPERIOD']); 
   $APPRAISALDATE = trim($_POST['APPRAISALDATE']);    
   $MARITALSTATUS = trim($_POST['MARITALSTATUS']);   
   $TELCONTACT = trim($_POST['TELCONTACT']); 
   $PERSONALEMAIL = trim($_POST['PERSONALEMAIL']);  
   $NOOFBIOCHILDREN = trim($_POST['NOOFBIOCHILDREN']); 
   $DISTRICT = trim($_POST['DISTRICT']); 
   $COUNTY = trim($_POST['COUNTY']); 
   $SUBCOUNTY = trim($_POST['SUBCOUNTY']);
   $PARISH = trim($_POST['PARISH']); 
   $LCVILLAGE = trim($_POST['LCVILLAGE']); 
   $EMPLOYMENTTERMS = trim($_POST['EMPLOYMENTTERMS']); 
   $OTHERS = trim($_POST['OTHERS']);
   $APPRAISEEACCOUNT = trim($_POST['APPRAISEEACCOUNT']);
   $APPRAISALPROGRESSLEVEL = trim($_POST['APPRAISALPROGRESSLEVEL']);
 
  $sql1="UPDATE `staffappraisal` SET    
										   `FIRSTLVSUPERVISOR`='$FIRSTLVSUPERVISOR',  
                                           `SECONDLVSUPERVISOR`='$FIRSTLVSUPERVISOR', 
										   `TITLE`='$TITLE',   
										   `APPRAISALPERIOD`='$APPRAISALPERIOD',  
										   `APPRAISALDATE`='$APPRAISALDATE',     
										   `MARITALSTATUS`='$MARITALSTATUS', 
										   `TELCONTACT`='$TELCONTACT',
										   `PERSONALEMAIL`='$PERSONALEMAIL',  
										   `NOOFBIOCHILDREN`='$NOOFBIOCHILDREN',  
										   `COUNTY`='$COUNTY', 
										   `SUBCOUNTY`='$SUBCOUNTY',  
										   `PARISH`='$PARISH',  
										   `LCVILLAGE`='$LCVILLAGE',
                                           `EMPLOYMENTTERMS`='$EMPLOYMENTTERMS', 
                                           `OTHERS`='$OTHERS', 
										   `APPRAISEEACCOUNT`='$APPRAISEEACCOUNT',  
										   
										   `ACADEMICAWARD`='$ACADEMICAWARD',  
										   `INSTITUTION`='$INSTITUTION', 
                                           `FROMDATE`='$FROMDATE',  
										   `TODATE`='$TODATE' 
										    WHERE id='$ID'"; 
										      
										 
		 $sql2="UPDATE `staffcontacts` SET  
                                                         `APPRAISALPROGRESSLEVEL`='$APPRAISALPROGRESSLEVEL'
														  WHERE STAFFAPPRAISALID='$STAFFAPPRAISALID'";
														   
														  
														  

$sql='';

if (isset($_POST['mytempvar'])) { $sql = $sql2; } else { $sql = $sql1; }


                                   if($conn->query($sql)===true){
                                                  header("location:appraisal.php");
                                                exit(); }

                                   else{    echo 'ERROR'.$conn->error;  }
}

                                   exit();
                                    ?>

										   
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ahr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['DATECREATED'])){

$dnx =array(); $dpp =array();  $fqx =array();  $dcm =array();
$variance =array();  $ddf =array();  $qtyx =array();

$desc =array();  $uom =array();  $escost =array();   $marktp =array(); 

$DATECREATED  = trim($_POST['DATECREATED']);  
$NAMEOFEMPLOYEE  = trim($_POST['NAMEOFEMPLOYEE']); 
$APPRAISEEACCOUNT = trim($_POST['APPRAISEEACCOUNT']);
$FIRSTLVSUPERVISOR     = trim($_POST['FIRSTLVSUPERVISOR']);
$SECONDLVSUPERVISOR = trim($_POST['SECONDLVSUPERVISOR']);   
  
if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $dpp   =       $_POST['dpp'];  
  $fqx   =       $_POST['fqx']; 
  $dcm   =       $_POST['dcm']; 
  $variance   =       $_POST['variance']; 
  $ddf   =       $_POST['ddf'];  
  $qtyx      =       $_POST['qtyx']; 
}
 

$i=0;
for($i=0;$i<count($dnx);$i++){
 
$CORERESPONSIBILITY =$dnx[$i];
$ACTIVITY  = $dpp[$i]; 
$APPRAISEESCOREA  = $fqx[$i]; 
$JUSTIFICATION  = $dcm[$i]; 
$APPRAISERCOREA   = $variance[$i];
$APPRAISERSCOMMENT  = $ddf[$i];  
$AGREEDSCOREA  =  $qtyx[$i]; 

 
if (isset($_POST['desc'])) {
  $desc =      $_POST['desc'];
  $uom   =       $_POST['uom'];   
  $escost   =       $_POST['escost'];  
  $marktp      =       $_POST['marktp']; 
} 

$i=0;
for($i=0;$i<count($desc);$i++){
 
$ACADEMICAWARD =$desc[$i];
$INSTITUTION  = $uom[$i];  
$FROMDATE  = $escost[$i];  
$TODATE  =  $marktp[$i]; 

$idx  = trim($_POST['id']);   
$APPRAISALKEY  = trim($_POST['APPRAISALKEY']);  
 
$APPZISCOREESCB  = trim($_POST['APPZISCOREESCB']);  
$JUSTIFICATIONSECB  = trim($_POST['JUSTIFICATIONSECB']); 
$APPZASCOREESCB  = trim($_POST['APPZASCOREESCB']);  
$APPZACOMMENTSECB  = trim($_POST['APPZACOMMENTSECB']); 
$AGREEDSCORESECB  = trim($_POST['AGREEDSCORESECB']); 

$APPZISCOREESCB2  = trim($_POST['APPZISCOREESCB2']);  
$JUSTIFICATIONSECB2  = trim($_POST['JUSTIFICATIONSECB2']); 
$APPZISCOREESCB3  = trim($_POST['APPZISCOREESCB3']);  
$JUSTIFICATIONSECB3  = trim($_POST['JUSTIFICATIONSECB3']);   
$APPZISCOREESCB4  = trim($_POST['APPZISCOREESCB4']);  
$JUSTIFICATIONSECB4  = trim($_POST['JUSTIFICATIONSECB4']);

$APPZISCOREESCB5  = trim($_POST['APPZISCOREESCB5']);  
$JUSTIFICATIONSECB5  = trim($_POST['JUSTIFICATIONSECB5']);    
$APPZISCOREESCB6  = trim($_POST['APPZISCOREESCB6']);  
$JUSTIFICATIONSECB6  = trim($_POST['JUSTIFICATIONSECB6']);  

$APPZISCOREESCB7  = trim($_POST['APPZISCOREESCB7']);  
$JUSTIFICATIONSECB7  = trim($_POST['JUSTIFICATIONSECB7']); 
$APPRAISALFINANCIALPERIOD  = trim($_POST['APPRAISALFINANCIALPERIOD']); 

$TITLE  = trim($_POST['TITLE']);  
$APPRAISALPERIOD  = trim($_POST['APPRAISALPERIOD']);  
$DEPARTMENT  = trim($_POST['DEPARTMENT']);  
$APPRAISALDATE  = trim($_POST['APPRAISALDATE']);  
$APPRAISALSUBMISSIONDEADLINE  = trim($_POST['APPRAISALSUBMISSIONDEADLINE']);   
  
$MARITALSTATUS  = trim($_POST['MARITALSTATUS']);  
$TELCONTACT  = trim($_POST['TELCONTACT']);  
$PERSONALEMAIL  = trim($_POST['PERSONALEMAIL']);  
          
$PFNUMBER  = trim($_POST['PFNUMBER']);  
$NOOFBIOCHILDREN  = trim($_POST['NOOFBIOCHILDREN']);  
$DISTRICT  = trim($_POST['DISTRICT']);  
$COUNTY  = trim($_POST['COUNTY']);  
$SUBCOUNTY  = trim($_POST['SUBCOUNTY']);  
$PARISH  = trim($_POST['PARISH']);  
$LCVILLAGE  = trim($_POST['LCVILLAGE']);  
$EMPLOYMENTTERMS  = trim($_POST['EMPLOYMENTTERMS']);  
$OTHERS  = trim($_POST['OTHERS']);  
        
  
$sql1="INSERT INTO `ahr`.`appraisal_b`                  (`DATECREATED`, 
                                                         `NAMEOFEMPLOYEE`, `APPRAISEEACCOUNT`,`FIRSTLVSUPERVISOR`, `SECONDLVSUPERVISOR`, 
											             `MARITALSTATUS`, `TELCONTACT`,`PERSONALEMAIL`, 
														 
														 `APPRAISALFINANCIALPERIOD`, `TITLE`,`APPRAISALPERIOD`, 
														 `DEPARTMENT`, `APPRAISALDATE`,`APPRAISALSUBMISSIONDEADLINE`, 
														
														 `CORERESPONSIBILITY`,  `ACTIVITY`, `APPRAISEESCOREA`,
														 `JUSTIFICATION`,  `APPRAISERCOREA`, `APPRAISERSCOMMENT`,`AGREEDSCOREA`,
														 `APPRAISALKEY`, 
														 
														 `PFNUMBER`, `NOOFBIOCHILDREN`,`DISTRICT`, 
														 `COUNTY`, `SUBCOUNTY`,`PARISH`, 
														 `LCVILLAGE`, `EMPLOYMENTTERMS`,`OTHERS`, 
														 
														 `ACADEMICAWARD`,  `INSTITUTION`, `FROMDATE`,  `TODATE`, 
														 
														 `APPZISCOREESCB`,  `JUSTIFICATIONSECB`, `APPZASCOREESCB`, `APPZACOMMENTSECB`, `AGREEDSCORESECB`,
														 `APPZISCOREESCB2`,  `JUSTIFICATIONSECB2`, 
														 `APPZISCOREESCB3`,  `JUSTIFICATIONSECB3`, 
														 `APPZISCOREESCB4`,  `JUSTIFICATIONSECB4`, 
														 `APPZISCOREESCB5`,  `JUSTIFICATIONSECB5`, 
														 `APPZISCOREESCB6`,  `JUSTIFICATIONSECB6`,
														 `APPZISCOREESCB7`,  `JUSTIFICATIONSECB7`,
														 
													     `id`)
															 
                                                       VALUES (NOW(), 
                                                      '$NAMEOFEMPLOYEE', '$APPRAISEEACCOUNT', '$FIRSTLVSUPERVISOR', '$SECONDLVSUPERVISOR',
													  '$MARITALSTATUS', '$TELCONTACT', '$PERSONALEMAIL',
													  
													  '$APPRAISALFINANCIALPERIOD', '$TITLE', '$APPRAISALPERIOD',
													  '$DEPARTMENT', '$APPRAISALDATE', '$APPRAISALSUBMISSIONDEADLINE',
													 
                                                      '$CORERESPONSIBILITY', '$ACTIVITY', '$APPRAISEESCOREA',  
													  '$JUSTIFICATION', '$APPRAISERCOREA', '$APPRAISERSCOMMENT',  '$AGREEDSCOREA',
													  '$APPRAISALKEY', 
													  
													  '$PFNUMBER', '$NOOFBIOCHILDREN', '$DISTRICT',
													  '$COUNTY', '$SUBCOUNTY', '$PARISH',
													  '$LCVILLAGE', '$EMPLOYMENTTERMS', '$OTHERS',
													  
													  '$ACADEMICAWARD', '$INSTITUTION', '$FROMDATE',   '$TODATE',
													  
													  '$APPZISCOREESCB', '$JUSTIFICATIONSECB', '$APPZASCOREESCB', '$APPZACOMMENTSECB', '$AGREEDSCORESECB',   
													  '$APPZISCOREESCB2', '$JUSTIFICATIONSECB2', 
													  '$APPZISCOREESCB3', '$JUSTIFICATIONSECB3', 
													  '$APPZISCOREESCB4', '$JUSTIFICATIONSECB4', 
													  '$APPZISCOREESCB5', '$JUSTIFICATIONSECB5', 
													  '$APPZISCOREESCB6', '$JUSTIFICATIONSECB6',
													  '$APPZISCOREESCB7', '$JUSTIFICATIONSECB7',
													   
													  '$idx')";

                                  $conn->query($sql1);
								  
								   mysqli_query($conn, "UPDATE `staffcontacts` SET `APPRAISALPROGRESSLEVEL` = 'Section B',
								                                                   `PROGRESSDATE` = (NOW()'    
								   WHERE  `id` = '$idx[$i]'");	

						}}
						}
                         header("location:my_appraisal.php");
                                exit();

                                    ?>    
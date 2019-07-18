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

if(isset($_POST['DATECREATED'])){

$dnx =array(); $dpp =array();  $fqx =array();  $dcm =array();
$variance =array();  $ddf =array();  $qtyx =array();
 

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

$ACADEMICAWARD  = trim($_POST['ACADEMICAWARD']);
$INSTITUTION  = trim($_POST['INSTITUTION']);
$FROMDATE  = trim($_POST['FROMDATE']);
$TODATE  = trim($_POST['TODATE']);
$ACADEMICAWARD1  = trim($_POST['ACADEMICAWARD1']);
$INSTITUTION1  = trim($_POST['INSTITUTION1']);
$FROMDATE1  = trim($_POST['FROMDATE1']);
$TODATE1  = trim($_POST['TODATE1']);
$ACADEMICAWARD2  = trim($_POST['ACADEMICAWARD2']);
$INSTITUTION2  = trim($_POST['INSTITUTION2']);
$FROMDATE2  = trim($_POST['FROMDATE2']);
$TODATE2  = trim($_POST['TODATE2']);
$ACADEMICAWARD3  = trim($_POST['ACADEMICAWARD3']);
$INSTITUTION3  = trim($_POST['INSTITUTION3']);
$FROMDATE3  = trim($_POST['FROMDATE3']);
$TODATE3  = trim($_POST['TODATE3']);
 
$APPOINTMENTSTARTDATE  = trim($_POST['APPOINTMENTSTARTDATE']);

  
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
														 `ACADEMICAWARD1`,  `INSTITUTION1`, `FROMDATE1`,  `TODATE1`,
														 `ACADEMICAWARD2`,  `INSTITUTION2`, `FROMDATE2`,  `TODATE2`,
														 `ACADEMICAWARD3`,  `INSTITUTION3`, `FROMDATE3`,  `TODATE3`,
														 
														 `APPZISCOREESCB`,  `JUSTIFICATIONSECB`, `APPZASCOREESCB`, `APPZACOMMENTSECB`, `AGREEDSCORESECB`,
														 `APPZISCOREESCB2`,  `JUSTIFICATIONSECB2`, 
														 `APPZISCOREESCB3`,  `JUSTIFICATIONSECB3`, 
														 `APPZISCOREESCB4`,  `JUSTIFICATIONSECB4`, 
														 `APPZISCOREESCB5`,  `JUSTIFICATIONSECB5`, 
														 `APPZISCOREESCB6`,  `JUSTIFICATIONSECB6`,
														 `APPZISCOREESCB7`,  `JUSTIFICATIONSECB7`,
														 
														 `APPOINTMENTSTARTDATE`, 
													     `id`)
															 
                                                       VALUES '$DATECREATED', 
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
													   '$ACADEMICAWARD1', '$INSTITUTION1', '$FROMDATE1',   '$TODATE1',
													   '$ACADEMICAWARD2', '$INSTITUTION2', '$FROMDATE2',   '$TODATE2',
													   '$ACADEMICAWARD3', '$INSTITUTION3', '$FROMDATE3',   '$TODATE3',
													  
													  '$APPZISCOREESCB', '$JUSTIFICATIONSECB', '$APPZASCOREESCB', '$APPZACOMMENTSECB', '$AGREEDSCORESECB',   
													  '$APPZISCOREESCB2', '$JUSTIFICATIONSECB2', 
													  '$APPZISCOREESCB3', '$JUSTIFICATIONSECB3', 
													  '$APPZISCOREESCB4', '$JUSTIFICATIONSECB4', 
													  '$APPZISCOREESCB5', '$JUSTIFICATIONSECB5', 
													  '$APPZISCOREESCB6', '$JUSTIFICATIONSECB6',
													  '$APPZISCOREESCB7', '$JUSTIFICATIONSECB7',
													  
													  '$APPOINTMENTSTARTDATE',
													  '$idx')";
 
                                   $conn->query($sql1);
								  
								   mysqli_query($conn, "UPDATE `staffcontacts` SET `APPRAISALPROGRESSLEVEL` = 'Progressing',
								                                                   `EMPLOYMENTTERMS` = '$EMPLOYMENTTERMS',
								                                                   `PROGRESSDATE` = '$DATECREATED'    
								                                                    WHERE  `id` = '$idx[$i]'");	

						}
						}
                         header("location:my_appraisal.php");
                                exit();

                                    ?>    
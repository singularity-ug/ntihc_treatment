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


if(isset($_POST['APPRAISALSTATUS'])){
$id       = trim($_POST['id']);
$APPRAISALCOUNT   = trim($_POST['APPRAISALCOUNT']); 
$APPRAISALSTATUS  = trim($_POST['APPRAISALSTATUS']); 
       
$APPRAISALMONTH  = trim($_POST['APPRAISALMONTH']); 
$APPRAISALMONTHYEAR  = trim($_POST['APPRAISALMONTHYEAR']); 
$APPRAISALFINANCIALPERIOD  = trim($_POST['APPRAISALFINANCIALPERIOD']); 
$APPRAISALSUBMISSIONDEADLINE  = trim($_POST['APPRAISALSUBMISSIONDEADLINE']); 
$APPRAISALEPISODE  = trim($_POST['APPRAISALEPISODE']); 

$sql1="UPDATE `staffcontacts`    SET
										   `APPRAISALMONTH` ='$APPRAISALMONTH',
										    `APPRAISALMONTHYEAR` ='$APPRAISALMONTHYEAR',
											 `APPRAISALFINANCIALPERIOD` ='$APPRAISALFINANCIALPERIOD',
											  `APPRAISALSUBMISSIONDEADLINE` ='$APPRAISALSUBMISSIONDEADLINE',
											   `APPRAISALEPISODE` ='$APPRAISALEPISODE',
										  `APPRAISALCOUNT` ='$APPRAISALCOUNT',
		                                  `APPRAISALSTATUS` ='$APPRAISALSTATUS' 
                                           WHERE APPRAISALELIGIBILITY='Active'";
if($APPRAISALCOUNT=='0'){     if($conn->query($sql1)){  header("location:../home_hrmgt.php"); exit();}
								   else{ echo $conn->error; exit();}
                      }
                    header("location:../home_hrmgt.php");exit();   }

   ?> 

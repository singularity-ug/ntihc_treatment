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


if(isset($_POST['JOBSTATUS'])){
$id       = trim($_POST['id']);   
$POSITIONCLASSIFICATION = trim($_POST['POSITIONCLASSIFICATION']); 
$REPORTSTO    = trim($_POST['REPORTSTO']);  
$DUTYSTATION = trim($_POST['DUTYSTATION']); 
  
$APPOINTMENTEFFECTIVEDATE    = trim($_POST['APPOINTMENTEFFECTIVEDATE']); 
$MRMS    = trim($_POST['MRMS']);        
$MADABSIR = trim($_POST['MADABSIR']); 
$THROUGHDATE    = trim($_POST['THROUGHDATE']);  
$DEPARTMENT = trim($_POST['DEPARTMENT']); 
$POSITIONOFFIRSTAPPOINTMENT  = trim($_POST['POSITIONOFFIRSTAPPOINTMENT']); 
$APPOINTMENTENDDATE    = trim($_POST['APPOINTMENTENDDATE']);    
$APPOINTMENTSTARTDATE = trim($_POST['APPOINTMENTSTARTDATE']); 
$EXPECTEDWORKHOURS    = trim($_POST['EXPECTEDWORKHOURS']);  
$GROSSSALARY = trim($_POST['GROSSSALARY']); 
$CURRENCY    = trim($_POST['CURRENCY']); 
$AMOUNTINWORDS    = trim($_POST['AMOUNTINWORDS']);    
$CONTRACTTYPE    = trim($_POST['CONTRACTTYPE']); 
$ENTITYREFEREEPOSITION    = trim($_POST['ENTITYREFEREEPOSITION']);   
$JOBSTATUS  = trim($_POST['JOBSTATUS']); 	   
$ENTITYREFEREEPOSITION  = trim($_POST['ENTITYREFEREEPOSITION']); 
$APPOINTMENTGENERATIONDATE  = trim($_POST['APPOINTMENTGENERATIONDATE']); 	
$APPRAISALSTATUS  = trim($_POST['APPRAISALSTATUS']); 
$APPRAISALELIGIBILITY  = trim($_POST['APPRAISALELIGIBILITY']); 	
	   
$sql1="UPDATE `staffcontacts`                    SET
										  `MRMS` ='$MRMS',
										  `APPRAISALELIGIBILITY` ='$APPRAISALELIGIBILITY',
										  `APPRAISALSTATUS` ='$APPRAISALSTATUS', 
										  `APPOINTMENTEFFECTIVEDATE` ='$APPOINTMENTEFFECTIVEDATE',
										  `DUTYSTATION` ='$DUTYSTATION',
									      `REPORTSTO` ='$REPORTSTO',      
										  `POSITIONCLASSIFICATION` ='$POSITIONCLASSIFICATION',       
                                          `ENTITYREFEREEPOSITION` ='$ENTITYREFEREEPOSITION',       
		                                  `MADABSIR`='$MADABSIR', 
										  `THROUGHDATE` ='$THROUGHDATE',
		                                  `DEPARTMENT`='$DEPARTMENT',
										  `POSITIONOFFIRSTAPPOINTMENT` ='$POSITIONOFFIRSTAPPOINTMENT',
		                                  `APPOINTMENTENDDATE`='$APPOINTMENTENDDATE', 
										  `EXPECTEDWORKHOURS` ='$EXPECTEDWORKHOURS',
		                                  `APPOINTMENTSTARTDATE`='$APPOINTMENTSTARTDATE',
										  `GROSSSALARY` ='$GROSSSALARY',
		                                  `CURRENCY`='$CURRENCY', 
										  `AMOUNTINWORDS` ='$AMOUNTINWORDS',
		                                  `CONTRACTTYPE`='$CONTRACTTYPE',  
										  `JOBSTATUS`='$JOBSTATUS',  
										   `APPOINTMENTGENERATIONDATE`='$APPOINTMENTGENERATIONDATE',  
										  `ENTITYREFEREEPOSITION`='$ENTITYREFEREEPOSITION' 
                                           WHERE id='$id'";
                                   if($conn->query($sql1)){ header("location:../home_hrmgt.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?>


 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr";

if(isset($_POST['FISCALMONTH'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 

$FISCALMONTH = trim($_POST['FISCALMONTH']); 
$APPOINTMENTSTARTDATE = trim($_POST['APPOINTMENTSTARTDATE']);
$id = trim($_POST['id']);
$PFNUMBER = trim($_POST['PFNUMBER']);
$NAMEOFEMPLOYEE = trim($_POST['NAMEOFEMPLOYEE']);
$TITLE = trim($_POST['TITLE']);
$DEPARTMENT = trim($_POST['DEPARTMENT']);
$DEPARTMENTALUNIT   = trim($_POST['DEPARTMENTALUNIT']);
$SALARYSCALE = trim($_POST['SALARYSCALE']); 
  
$GENERALEMPLOYEESTATUS = trim($_POST['GENERALEMPLOYEESTATUS']);
$BANKNAME = trim($_POST['BANKNAME']);
$BANKBRANCH   = trim($_POST['BANKBRANCH']);
$ACCOUNTNUMBER = trim($_POST['ACCOUNTNUMBER']);
$APPOINTMENTENDDATE = trim($_POST['APPOINTMENTENDDATE']);
$CONTRACTSTATUS   = trim($_POST['CONTRACTSTATUS']);
$EMPLOYMENTTERMS = trim($_POST['EMPLOYMENTTERMS']); 

$GENERALEMPLOYEESTATUS = trim($_POST['GENERALEMPLOYEESTATUS']);
$APPRAISALELIGIBILITY = trim($_POST['APPRAISALELIGIBILITY']);
$LEAVEENTILEMENT = trim($_POST['LEAVEENTILEMENT']);
$DAYSINAYEAR = trim($_POST['DAYSINAYEAR']);
$RETIREMENTAGE = trim($_POST['RETIREMENTAGE']);

$sql = "INSERT INTO empcontracts (FISCALMONTH,  
									 id, APPOINTMENTSTARTDATE, PFNUMBER,
									 NAMEOFEMPLOYEE, 
									 TITLE, 
									 DEPARTMENT,  
									 DEPARTMENTALUNIT, 
									 GENERALEMPLOYEESTATUS,  BANKNAME,  BANKBRANCH,  ACCOUNTNUMBER, APPOINTMENTENDDATE,  CONTRACTSTATUS,  EMPLOYMENTTERMS, 
									    
									 SALARYSCALE)
                             VALUES ('$FISCALMONTH', 
									 '$id',  '$APPOINTMENTSTARTDATE', '$PFNUMBER',
									 '$NAMEOFEMPLOYEE',
									 '$TITLE', 
									 '$DEPARTMENT',         
							         '$DEPARTMENTALUNIT', 
									 '$GENERALEMPLOYEESTATUS', '$BANKNAME', '$BANKBRANCH', '$ACCOUNTNUMBER', '$APPOINTMENTENDDATE','$CONTRACTSTATUS','$EMPLOYMENTTERMS', 
									 '$SALARYSCALE')";
									  
									  mysqli_query($conn, "UPDATE `staffcontacts` SET `APPOINTMENTSTARTDATE` = '$APPOINTMENTSTARTDATE',
									 `GENERALEMPLOYEESTATUS` = '$GENERALEMPLOYEESTATUS',
									 `APPRAISALELIGIBILITY` = '$APPRAISALELIGIBILITY',
									 `LEAVEENTILEMENT` = '$LEAVEENTILEMENT',
									 `RETIREMENTAGE` = '$RETIREMENTAGE',
									 `DEPARTMENT` = '$DEPARTMENT',
									 `SALARYSCALE` = '$SALARYSCALE',
									 `UNITALLOCATION` = 'ALLOCATED',  `APPRAISALCOUNT` = '2',
									 `DAYSINAYEAR` = '$DAYSINAYEAR'
								      WHERE  `id` = '$id'");
									  	 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:general_info.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

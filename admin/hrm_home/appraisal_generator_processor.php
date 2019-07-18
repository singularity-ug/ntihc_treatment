 
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr";

if(isset($_POST['EMAIL2'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
  
$EMAIL2 = trim($_POST['EMAIL2']); 
$PFNUMBER = trim($_POST['PFNUMBER']); 
$Serial = trim($_POST['Serial']);
$APPRAISALEPISODE = trim($_POST['APPRAISALEPISODE']);   
$NAMEOFEMPLOYEE = trim($_POST['NAMEOFEMPLOYEE']);
 $STAFFAPPRAISALID = trim($_POST['STAFFAPPRAISALID']);
 $DATECREATED = trim($_POST['DATECREATED']); 
    
$APMONTH = trim($_POST['APMONTH']);
$APYEAR = trim($_POST['APYEAR']);   
$APDEADLINE = trim($_POST['APDEADLINE']);
 
$id       = trim($_POST['Serial']); 
$APPRAISALPROGRESSLEVEL = trim($_POST['APPRAISALPROGRESSLEVEL']);    
$PROGRESSDATE  = trim($_POST['PROGRESSDATE']); 	

$sql = "INSERT INTO staffappraisal (EMAIL2,  STAFFAPPRAISALID, DATECREATED, APMONTH, APYEAR,  APDEADLINE,
									 PFNUMBER,   
									 Serial, 
									 APPRAISALEPISODE,  
									 NAMEOFEMPLOYEE)
                             VALUES ('$EMAIL2',   '$STAFFAPPRAISALID', '$DATECREATED', '$APMONTH', '$APYEAR', '$APDEADLINE',  
									 '$PFNUMBER',
									 '$Serial', 
									 '$APPRAISALEPISODE',   
									 '$NAMEOFEMPLOYEE')";
									 
									 mysqli_query($conn, "UPDATE `staffcontacts`  SET `APPRAISALPROGRESSLEVEL` = '$APPRAISALPROGRESSLEVEL',
									                                             `STAFFAPPRAISALID` = '$STAFFAPPRAISALID',
							                                     `PROGRESSDATE` = '$PROGRESSDATE' 
							                                     WHERE `Serial` = '$id'"); 
							     
									
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:hr_contacts.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>
 
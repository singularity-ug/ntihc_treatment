
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

if(isset($_POST['RSVNID'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 

$RSVNID = trim($_POST['RSVNID']); 
$AGE_GROUP = trim($_POST['AGE_GROUP']);
$AGE1 = trim($_POST['AGE1']);     
$SEX = trim($_POST['SEX']);  
$RID = trim($_POST['RID']);
$SERVICEPROVIDERACCOUNT = trim($_POST['SERVICEPROVIDERACCOUNT']);   
$SCHOOLING = trim($_POST['SCHOOLING']);
$NTIHCNO = trim($_POST['NTIHCNO']);  
$CLIENTNAME = trim($_POST['CLIENTNAME']);
$DATECREATED = trim($_POST['DATECREATED']); 
$PRESCRIPTION = trim($_POST['PRESCRIPTION']);  
$INSVCSTATUS = trim($_POST['INSVCSTATUS']);
$SERVICEPROVIDER = trim($_POST['SERVICEPROVIDER']); 
        
$sql = "INSERT INTO presctemp (RSVNID,  
									 AGE_GROUP, SEX, RID, SERVICEPROVIDERACCOUNT, 
									 SCHOOLING, NTIHCNO, CLIENTNAME, DATECREATED, 
									 PRESCRIPTION, INSVCSTATUS, SERVICEPROVIDER, 
									 AGE1)
                             VALUES ('$RSVNID', 
									 '$AGE_GROUP', '$SEX', '$RID', '$SERVICEPROVIDERACCOUNT',  
									 '$SCHOOLING', '$NTIHCNO', '$CLIENTNAME', '$DATECREATED', 
									 '$PRESCRIPTION', '$INSVCSTATUS', '$SERVICEPROVIDER',
									 '$AGE1')";
									   
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:../client_medical_prescription2.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

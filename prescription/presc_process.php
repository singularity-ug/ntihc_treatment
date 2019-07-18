
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

$TIMEIN = trim($_POST['TIMEIN']);
$SEX = trim($_POST['SEX']);  
$RID = trim($_POST['RID']);
$SERVICEPROVIDERACCOUNT = trim($_POST['SERVICEPROVIDERACCOUNT']);  
$RESERVATIONSTATUS = trim($_POST['RESERVATIONSTATUS']);  
$SCHOOLING = trim($_POST['SCHOOLING']);
$NTIHCNO = trim($_POST['NTIHCNO']);  
$CLIENTNAME = trim($_POST['CLIENTNAME']);
$DATECREATED = trim($_POST['DATECREATED']);  
      
$DRUGNAME = trim($_POST['DRUGNAME']);
$BOOKIN = trim($_POST['BOOKIN']);  
$FREQUENCY = trim($_POST['FREQUENCY']);  
$TIMES = trim($_POST['TIMES']);
$PERIOD = trim($_POST['PERIOD']);  
$QTYPRESCRIBED = trim($_POST['QTYPRESCRIBED']);
$QTYLEFT = trim($_POST['QTYLEFT']);
$ID = trim($_POST['ID']);

$sql = "INSERT INTO prescription (RSVNID,  
									 AGE_GROUP, TIMEIN, SEX, RID, SERVICEPROVIDERACCOUNT, RESERVATIONSTATUS,
									 SCHOOLING, NTIHCNO, CLIENTNAME, DATECREATED, 
									 DRUGNAME, BOOKIN, FREQUENCY,
									 TIMES, PERIOD, QTYPRESCRIBED, QTYLEFT, ID,
									 AGE1)
                             VALUES ('$RSVNID', 
									 '$AGE_GROUP', '$TIMEIN', '$SEX', '$RID', '$SERVICEPROVIDERACCOUNT', '$RESERVATIONSTATUS',
									 '$SCHOOLING', '$NTIHCNO', '$CLIENTNAME', '$DATECREATED', 
									 '$DRUGNAME', '$BOOKIN', '$FREQUENCY',
									 '$TIMES', '$PERIOD', '$QTYPRESCRIBED', '$QTYLEFT', '$ID',
									 '$AGE1')";
									 
									  $conn->query("UPDATE ntihcdrugs SET BOOKIN = '$QTYLEFT'
	                       WHERE `ID` = '$ID'"); 
									 

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

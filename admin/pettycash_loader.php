<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "dbmultiple";

if(isset($_POST['REQUESTDATE'])){
$AMOUNTREQUESTED = trim($_POST['AMOUNTREQUESTED']);
$REQUESTSTATUS = trim($_POST['REQUESTSTATUS']); 
$REQUESTDATE = trim($_POST['REQUESTDATE']);   
$LOADVOTE = trim($_POST['LOADVOTE']);
$APPLICANTDESIGNATION = trim($_POST['APPLICANTDESIGNATION']); 
$APPLICANTNAME = trim($_POST['APPLICANTNAME']);  
$CREATEDDATE = trim($_POST['CREATEDDATE']); 
$LASTREPLENISHMENT = trim($_POST['LASTREPLENISHMENT']);
$BALANCEINBOX = trim($_POST['BALANCEINBOX']);
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   } 

 $sql = "INSERT INTO pettyloads (REQUESTDATE, AMOUNTREQUESTED, REQUESTSTATUS, LOADVOTE, APPLICANTDESIGNATION, APPLICANTNAME, CREATEDDATE, 
                                 LASTREPLENISHMENT, BALANCEINBOX)
                       VALUES ('$REQUESTDATE', '$AMOUNTREQUESTED',  'PENDING', '$LOADVOTE', '$APPLICANTDESIGNATION', '$APPLICANTNAME', 
					   '$CREATEDDATE', '$LASTREPLENISHMENT', '$BALANCEINBOX')";	
					   
					   
if (mysqli_query($conn, $sql)) { 
    echo "New record created successfully";
	header("location:petty_cash.php");
	exit(); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 
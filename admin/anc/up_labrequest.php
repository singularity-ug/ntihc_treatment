<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

if(isset($_POST['NTIHCNO'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 
$NTIHCNO = trim($_POST['NTIHCNO']);
$DATECREATED = trim($_POST['DATECREATED']);
$NAME = trim($_POST['NAME']);
$AGE1 = trim($_POST['AGE1']);
$AGE_GROUP = trim($_POST['AGE_GROUP']);
$SEX = trim($_POST['SEX']);
$USERINITIAL   = trim($_POST['USERINITIAL']); 
$REQUESTINGUNIT = trim($_POST['REQUESTINGUNIT']); 
$VISTID = trim($_POST['VISTID']); 

$PHONECONTACT = trim($_POST['PHONECONTACT']);  
$EMPLOYMENT = trim($_POST['EMPLOYMENT']);
$DISTRICT   = trim($_POST['DISTRICT']);
$DIVISION   = trim($_POST['DIVISION']);  
 
$SCHOOLING = trim($_POST['SCHOOLING']); 
$MARITALSTATUS = trim($_POST['MARITALSTATUS']); 

$VISTBY   = trim($_POST['VISTBY']);  
$TESTDESCRIPTION   = trim($_POST['TESTDESCRIPTION']); 

$RID  = trim($_POST['RID']); 
$INSVCSTATUS  = trim($_POST['INSVCSTATUS']);  

$sql = "INSERT INTO laboratory (NTIHCNO,  
									 DATECREATED, 
									 NAME,
									 AGE1,  
									 AGE_GROUP, 
									 SEX,  
									 USERINITIAL,
									 VISTID, 
									 REQUESTINGUNIT,
									 PHONECONTACT, EMPLOYMENT, DISTRICT,  DIVISION, 
									 SCHOOLING, MARITALSTATUS,
									 VISTBY,  INSVCSTATUS, RID,
									 TESTDESCRIPTION) 
                             VALUES ('$NTIHCNO',
									 '$DATECREATED',
									 '$NAME',
									 '$AGE1',
									 '$AGE_GROUP',
									 '$SEX',
									 '$USERINITIAL',
									 '$VISTID',  
									 '$REQUESTINGUNIT',
									 '$PHONECONTACT', '$EMPLOYMENT', '$DISTRICT','$DIVISION',
									 '$SCHOOLING','$MARITALSTATUS', 
									 '$VISTBY',  '$INSVCSTATUS',  '$RID', 
									 '$TESTDESCRIPTION')"; 
									 
									 mysqli_query($conn, "UPDATE `cmpatientsregistration` SET `INSVCSTATUS` = '$INSVCSTATUS' 
									 WHERE `RID` = '$RID' ");  

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:anc_home.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?> 
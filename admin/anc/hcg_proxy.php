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
$CLIENTNAME = trim($_POST['CLIENTNAME']);
$AGE1 = trim($_POST['AGE1']);
$AGE_GROUP = trim($_POST['AGE_GROUP']);
$SEX = trim($_POST['SEX']);
$USERINITIAL   = trim($_POST['USERINITIAL']);    
  
$SCHOOLING = trim($_POST['SCHOOLING']);   
$EMPLOYMENT = trim($_POST['EMPLOYMENT']);
$RID  = trim($_POST['RID']); 
$HCG  = trim($_POST['HCG']);

$HCGSTATUS   = trim($_POST['HCGSTATUS']); 
$HCGPOSITIVE   = trim($_POST['HCGPOSITIVE']);
$HCGRESULTS   = trim($_POST['HCGRESULTS']);       

            $sql = "INSERT INTO hcg (NTIHCNO,  
									 DATECREATED, 
									 CLIENTNAME,
									 AGE1,  
									 AGE_GROUP, 
									 SEX,
									 USERINITIAL,   
									 HCGSTATUS, 
									 HCGRESULTS,
									 HCGPOSITIVE,
									 SCHOOLING, EMPLOYMENT,
									 HCG,   
									 RID) 
                             VALUES ('$NTIHCNO',
									 '$DATECREATED',
									 '$CLIENTNAME',
									 '$AGE1',
									 '$AGE_GROUP',
									 '$SEX',
									 '$USERINITIAL',
									 '$HCGSTATUS',   
									 '$HCGRESULTS', 
									 '$HCGPOSITIVE',  
									 '$SCHOOLING', '$EMPLOYMENT', 
									 '$HCG',  
									 '$RID')"; 
									 
									 mysqli_query($conn, "UPDATE `cmpatientsregistration` SET `HCG` = '$HCG' 
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
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
$REQUESTINGUNIT = trim($_POST['REQUESTINGUNIT']);  
$SCHOOLING = trim($_POST['SCHOOLING']); 
$REGISTERACCOUNT = trim($_POST['REGISTERACCOUNT']); 

$VISTTYPE = trim($_POST['VISTTYPE']);   
$RID  = trim($_POST['RID']); 
$INSVCSTATUS  = trim($_POST['INSVCSTATUS']); 
$ARTNUMBER = trim($_POST['ARTNUMBER']);
   
$art2     = trim($_POST['art2']);
$art3     = trim($_POST['art3']);
$art4     = trim($_POST['art4']);
$art5     = trim($_POST['art5']);
$art6     = trim($_POST['art6']);
$art7     = trim($_POST['art7']);
$art8     = trim($_POST['art8']);
$art9     = trim($_POST['art9']);
$art10     = trim($_POST['art10']);
$art11     = trim($_POST['art11']);
$art12     = trim($_POST['art12']);
$art13     = trim($_POST['art13']); 
$art14     = trim($_POST['art14']);
$art15     = trim($_POST['art15']);
$art16     = trim($_POST['art16']);
$art17     = trim($_POST['art17']);
$art18     = trim($_POST['art18']);
$art19     = trim($_POST['art19']);
$art20     = trim($_POST['art20']);
$art21     = trim($_POST['art21']);
$art22     = trim($_POST['art22']);   
$art23     = trim($_POST['art23']); 
$art24     = trim($_POST['art24']);
$art25     = trim($_POST['art25']); 
  
$sql = "INSERT INTO artmgr (NTIHCNO, DATECREATED, ARTNUMBER, art2, art3, art4, art5, art6, art7, art8, art9, art10, art11, art12, art13, art14, art15
           ,art16, art17, art18, art19, art20, art21, art22, art23, art24, art25, 
		   AGE1, AGE_GROUP, SEX, USERINITIAL, REQUESTINGUNIT, SCHOOLING, CLIENTNAME, INSVCSTATUS, RID, VISTTYPE,
		   REGISTERACCOUNT) 
           VALUES ('$NTIHCNO', NOW(), '$ARTNUMBER', 
		                         '$art2',
                                 '$art3',
                                 '$art4',
                                 '$art5',
                                 '$art6',
                                 '$art7',
                                 '$art8',
                                 '$art9',
                                 '$art10',
                                 '$art11',
                                 '$art12',
                                 '$art13',
                                 '$art14',
                                 '$art15',
                                 '$art16',
                                 '$art17',
                                 '$art18',
                                 '$art19',
                                 '$art20',
                                 '$art21',
                                 '$art22', 
                                 '$art23', 
                                 '$art24',
                                 '$art25',
                                 '$AGE1', '$AGE_GROUP', '$SEX', '$USERINITIAL', '$REQUESTINGUNIT', '$SCHOOLING', '$CLIENTNAME',
								 '$INSVCSTATUS',  '$RID',  '$VISTTYPE',
                                 '$REGISTERACCOUNT')"; 
		    
									 
									 mysqli_query($conn, "UPDATE `cmpatientsregistration` SET `INSVCSTATUS` = '$INSVCSTATUS',
									 `ART` = '1' 
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
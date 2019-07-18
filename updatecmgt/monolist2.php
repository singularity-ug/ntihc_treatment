<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);
$id = trim($_POST['id']);

$NTIHCNO = trim($_POST['NTIHCNO']);
$RESULTSRECEIVED  = trim($_POST['RESULTSRECEIVED']);
$RECIEVEDASACOUPLE  = trim($_POST['RECIEVEDASACOUPLE']);
$COUPLERESULTS = trim($_POST['COUPLERESULTS']);
$TB_SUSPICION = trim($_POST['TB_SUSPICION']);
$COTRIMOXAZOLE_START = trim($_POST['COTRIMOXAZOLE_START']);
$CARE_LINK = trim($_POST['CARE_LINK']); 
$CDFOUR = trim($_POST['CDFOUR']);
$COUNSELORSNAME = trim($_POST['COUNSELORSNAME']);
$RECIEVEDDATE = trim($_POST['RECIEVEDDATE']);
$TESTSTATUS = trim($_POST['TESTSTATUS']);
$ACTIONTAKEN = trim($_POST['ACTIONTAKEN']);
$REFERALUNIT = trim($_POST['REFERALUNIT']);
$ARTCLINIC = trim($_POST['ARTCLINIC']);
$FINALREACTIVITY = trim($_POST['FINALREACTIVITY']);
$RID = trim($_POST['RID']); 
$VISTTYPE = trim($_POST['VISTTYPE']); 
$op  = '';
    
$conn->query("UPDATE laboratory SET NTIHCNO ='$NTIHCNO',  RESULTSRECEIVED ='$RESULTSRECEIVED', RECIEVEDASACOUPLE ='$RECIEVEDASACOUPLE', 
                                  COUPLERESULTS ='$COUPLERESULTS', 
                                  TB_SUSPICION ='$TB_SUSPICION',  COTRIMOXAZOLE_START ='$COTRIMOXAZOLE_START',  CARE_LINK ='$CARE_LINK', 
								  CDFOUR ='$CDFOUR',
								  COUNSELORSNAME ='$COUNSELORSNAME', RECIEVEDDATE ='$RECIEVEDDATE', TESTSTATUS ='$TESTSTATUS',  ACTIONTAKEN ='$ACTIONTAKEN',  
								  REFERALUNIT ='$REFERALUNIT', ARTCLINIC='$ARTCLINIC', FINALREACTIVITY ='$FINALREACTIVITY', 
                                  RID ='$RID', VISTTYPE ='$VISTTYPE' 
                                  WHERE id ='$id'"); 
								   
								   mysqli_query($conn, "UPDATE `cmpatientsregistration` SET `FINALREACTIVITY` = '$FINALREACTIVITY', 
								                                                         `VISTTYPE` = '$VISTTYPE',
																						 `ARTCLINIC` = '$ARTCLINIC',
																						 `REFERALUNIT` = '$REFERALUNIT',
																						 `LABVIST` = '1',
																						 `HCT` = '1' 
								                                                          WHERE `RID` = '$RID'"); 

}
   header("location:../counsellingroom.php");
exit();
?> 
      
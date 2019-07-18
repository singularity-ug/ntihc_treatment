
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
$SCHOOLING = trim($_POST['SCHOOLING']);
$NTIHCNO = trim($_POST['NTIHCNO']);  
$CLIENTNAME = trim($_POST['CLIENTNAME']);
$DATECREATED = trim($_POST['DATECREATED']);   

$BRIEF = trim($_POST['BRIEF']);    
$VISTTYPE = trim($_POST['VISTTYPE']);  
$ESCORTEDBY = trim($_POST['ESCORTEDBY']);  
$VISTBY = trim($_POST['VISTBY']); 

$PRE_TESTCOUSELLING_GIVENa   = trim($_POST['PRE_TESTCOUSELLING_GIVEN']);
$COUNSELLED_ASa        = trim($_POST['COUNSELLED_AS']); 
$HCT_ENTRYPOINTa       = trim($_POST['HCT_ENTRYPOINT']); 
$EVERTESTEDBEFOREa     = trim($_POST['EVERTESTEDBEFORE']);
$NUMBEROFTESTSa        = trim($_POST['NUMBEROFTESTS']);
$NUMBEROFSEXUALPARTNERSa    = trim($_POST['NUMBEROFSEXUALPARTNERS']);
$LAST_TESTRESULTSa      = trim($_POST['LAST_TESTRESULTS']);
$SPOUSE_PARTNERTESTED_BEFOREa       = trim($_POST['SPOUSE_PARTNERTESTED_BEFORE']);
$IFYES_RESULTSa           = trim($_POST['IFYES_RESULTS']);

$RESULTSRECEIVED = trim($_POST['RESULTSRECEIVED']); 
$TECHNICIAN_NAME = trim($_POST['TECHNICIAN_NAME']);   
$TITLE = trim($_POST['TITLE']);   

$RECIEVEDASACOUPLE   = trim($_POST['RECIEVEDASACOUPLE']);
$COUPLERESULTS        = trim($_POST['COUPLERESULTS']); 
$TB_SUSPICION       = trim($_POST['TB_SUSPICION']); 
$COTRIMOXAZOLE_START     = trim($_POST['COTRIMOXAZOLE_START']);
$CARE_LINK        = trim($_POST['CARE_LINK']);
$CDFOUR    = trim($_POST['CDFOUR']);
$ACTIONTAKEN      = trim($_POST['ACTIONTAKEN']);
$COUNSELORSNAME       = trim($_POST['COUNSELORSNAME']);
$RECIEVEDDATE           = trim($_POST['RECIEVEDDATE']); 

$sql = "INSERT INTO hct_counselling_andtesting (RSVNID,  
									 AGE_GROUP, SEX, RID,  
									 SCHOOLING, NTIHCNO, CLIENTNAME, DATECREATED,  
									 BRIEF, VISTTYPE, ESCORTEDBY, VISTBY, 
									                    PRE_TESTCOUSELLING_GIVEN,
                                                        COUNSELLED_AS, 
                                                        HCT_ENTRYPOINT, 
                                                        EVERTESTEDBEFORE,
                                                        NUMBEROFTESTS,
                                                        NUMBEROFSEXUALPARTNERS,
                                                        LAST_TESTRESULTS,
                                                        SPOUSE_PARTNERTESTED_BEFORE,
                                                        IFYES_RESULTS,  
								    RESULTSRECEIVED, TECHNICIAN_NAME,
									TITLE, 
							 RECIEVEDASACOUPLE, COUPLERESULTS,  TB_SUSPICION, COTRIMOXAZOLE_START,
							 CARE_LINK, CDFOUR, ACTIONTAKEN, COUNSELORSNAME, RECIEVEDDATE,  
									AGE1)
									
                                     VALUES ('$RSVNID', 
									 '$AGE_GROUP', '$SEX', '$RID',  
									 '$SCHOOLING', '$NTIHCNO', '$CLIENTNAME', '$DATECREATED',
									 '$BRIEF', '$VISTTYPE', '$ESCORTEDBY', '$VISTBY', 
                                     '$PRE_TESTCOUSELLING_GIVENa ',
                                                       '$COUNSELLED_ASa', 
                                                       '$HCT_ENTRYPOINTa', 
                                                       '$EVERTESTEDBEFOREa',
                                                       '$NUMBEROFTESTSa',
                                                       '$NUMBEROFSEXUALPARTNERSa ',
                                                       '$LAST_TESTRESULTSa',
                                                       '$SPOUSE_PARTNERTESTED_BEFOREa',
                                                       '$IFYES_RESULTSa', 
									                   '$RESULTSRECEIVED ',
                                                       '$TECHNICIAN_NAME',
                                                       '$TITLE', 
										'$RECIEVEDASACOUPLE',	'$COUPLERESULTS',	'$TB_SUSPICION', '$COTRIMOXAZOLE_START',                                        '$CARE_LINK',
										'$CDFOUR', '$ACTIONTAKEN',	'$COUNSELORSNAME',	'$RECIEVEDDATE',   
									                   '$AGE1')";
									 
									  $conn->query("UPDATE cmpatientsregistration SET INSVCSTATUS = 'OUTREACH HCT',
									  OUTREACH='1'
	                                  WHERE `RSVNID` = '$RSVNID'"); 
									 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:counsellingroom.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

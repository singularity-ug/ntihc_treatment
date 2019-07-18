<?php 

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['DATECREATED'])){

$dnx =array(); $fqx =array(); $ab =array(); $ac =array();  $ad =array(); $ae =array(); $af =array();  $ag =array(); 

$DATECREATED  = trim($_POST['DATECREATED']);
$NTIHCNO  = trim($_POST['NTIHCNO']);  

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx']; 
  $ab =      $_POST['ab'];
  $ac   =       $_POST['ac']; 
  $ad =      $_POST['ad']; 
  $ae   =       $_POST['ae']; 
  $af =      $_POST['af'];   
  $ag =      $_POST['ag']; 
}
  
  
$i=0;
for($i=0;$i<count($dnx);$i++){
  
$SPECIMEN =$dnx[$i];
$HEAMATOLOGY_SCROLOGY  = $fqx[$i]; 

$MALARIA  =  $ab[$i];
$STOOL_MICROSCOPY   = $ac[$i];
$URINE_MICROSCOPY   = $ad[$i];
$SWABS_TYPE   = $ae[$i];
$SWABS_WETPREP  =  $af[$i];
$SWABS_GRAMSTAIN   = $ag[$i]; 
 
$m = date("m");
$y = date("Y"); 
$NAME  = trim($_POST['NAME']); 
$RID  = trim($_POST['RID']); 
$RSVNID  = trim($_POST['RSVNID']); 
$TESTSTATUS  = trim($_POST['TESTSTATUS']); 
$REQUESTINGUNIT  = trim($_POST['REQUESTINGUNIT']);  
$AGE1  = trim($_POST['AGE1']);  
$AGE_GROUP  = trim($_POST['AGE_GROUP']); 

$SEX  = trim($_POST['SEX']); 
$LABOREDRSTATUS  = trim($_POST['LABOREDRSTATUS']); 
$REGISTERACCOUNT  = trim($_POST['REGISTERACCOUNT']); 
$TIMEOUT  = trim($_POST['TIMEOUT']);   
$SERVICEPROVIDER  = trim($_POST['SERVICEPROVIDER']); 
$VISTTYPE  = trim($_POST['VISTTYPE']); 

$TESTEDBY  = trim($_POST['TESTEDBY']);
$TECHTITLE  = trim($_POST['TECHTITLE']);  

   $sql1="INSERT INTO `patientmgt`.`laboratory` (`DATECREATED`,
                                                             `NTIHCNO`,  
                                                             `SPECIMEN`, 
													         `HEAMATOLOGY_SCROLOGY`,
													         `MALARIA`,
													         `STOOL_MICROSCOPY`,
															 `URINE_MICROSCOPY`,
															 `SWABS_TYPE`,
													         `SWABS_WETPREP`, 
															 `SWABS_GRAMSTAIN`,
                                                             `TESTSTATUS`, 
															 `FISCALMONTH`, 
															 `FISCALYEAR`, 
															 `NAME`, 
															 `RID`,
															 `RSVNID`, 
															 `REQUESTINGUNIT`,  
															   
															 `AGE1`, 
															 `SEX`, `LABOREDRSTATUS`, `REGISTERACCOUNT`, `TIMEOUT`,
															 `SERVICEPROVIDER`, `VISTTYPE`,
															 `TESTEDBY`, `TECHTITLE`, 
															 `AGE_GROUP`)
                                                 VALUES ('$DATECREATED',
												 '$NTIHCNO',  
											     
												       '$SPECIMEN',
													   '$HEAMATOLOGY_SCROLOGY',
													   '$MALARIA',
													   '$STOOL_MICROSCOPY',
													   '$URINE_MICROSCOPY', 
													   '$SWABS_TYPE',
													   '$SWABS_WETPREP',
													   '$SWABS_GRAMSTAIN',  
                                                       '$TESTSTATUS', 
													   '$m',
													   '$y',
													   '$NAME',
													   '$RID',
													   '$RSVNID',
													   '$REQUESTINGUNIT', 
													   
													   '$AGE1',
													   '$SEX', '$LABOREDRSTATUS', '$REGISTERACCOUNT', '$TIMEOUT',
													   '$SERVICEPROVIDER', '$VISTTYPE', 
													   '$TESTEDBY', '$TECHTITLE', 
													         
													   '$AGE_GROUP')";
													   
													    mysqli_query($conn, "UPDATE `cmpatientsregistration` 
														SET `TESTSTATUS` = '$TESTSTATUS',
											 `LABVISTSDONE` = '1' 
									         WHERE `RSVNID` = '$RSVNID'"); 

                                  $conn->query($sql1);

						}
						}
                         header("location:client_lab.php");
                                exit();

                                    ?>

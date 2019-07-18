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



if(isset($_POST['NTIHCNO'])){
$sp =''; $he =''; $ma=''; $st=''; $ur=''; $sw=''; $swa=''; $swab='';

$ID       = trim($_POST['IDFX']);
$NTIHCNO  = trim($_POST['NTIHCNO']);
$TESTDATE = trim($_POST['TESTDATE']);
$NAME     = trim($_POST['NAME']);


if (isset($_POST['sp'])) {
  $sp      = json_encode($_POST['sp']);
  $he      = json_encode($_POST['he']);
  $ma      = json_encode($_POST['ma']);
  $st      = json_encode($_POST['st']);
  $ur      = json_encode($_POST['ur']);
  $sw      = json_encode($_POST['sw']);
  $swa     = json_encode($_POST['swa']);
  $swab    = json_encode($_POST['swab']);
}


$TECHNICIAN_NAME = trim($_POST['TECHNICIAN_NAME']);
$TITLE   = trim($_POST['TITLE']);
$REQUESTINGUNIT = trim($_POST['REQUESTINGUNIT']);
$USERINITIAL  = trim($_POST['USERINITIAL']);
$TESTDESCRIPTION   = trim($_POST['TESTDESCRIPTION']);
$m = date("m");
$y = date("Y");
$EXPIRYDATET1 = trim($_POST['EXPIRYDATET1']);
$EXPIRYDATET2  = trim($_POST['EXPIRYDATET2']);
$EXPIRYDATET3   = trim($_POST['EXPIRYDATET3']);
$REACTIVITYT1   = trim($_POST['REACTIVITYT1']);
$REACTIVITYT2 = trim($_POST['REACTIVITYT2']);
$REACTIVITYT3 = trim($_POST['REACTIVITYT3']);
$FINALREACTIVITY = trim($_POST['FINALREACTIVITY']);
$HEPATITIS_B  = trim($_POST['HEPATITIS_B']);
$SYPHILIS   = trim($_POST['SYPHILIS']);
$HB   = trim($_POST['HB']);
$RBS   = trim($_POST['RBS']);
$BLOOD = trim($_POST['BLOOD']);
$BLOODRESULTS = trim($_POST['BLOODRESULTS']);
$HCG = trim($_POST['HCG']);
$MALARIARDTs = trim($_POST['MALARIARDTs']);
$MALARIAMICROSCOPY = trim($_POST['MALARIAMICROSCOPY']);
$OTHERHEAMOPATRASITES = trim($_POST['OTHERHEAMOPATRASITES']);
$CYSTECELLS = trim($_POST['CYSTECELLS']);
$PROTEINS = trim($_POST['PROTEINS']);
$SPECIMEN =$sp;       // actual value
$HEAMATOLOGY_SCROLOGY  = $he;               // category
$MALARIA  =  $ma;               // category
$STOOL_MICROSCOPY  = $st;               // category
$URINE_MICROSCOPY  = $ur;               // category
$SWABS_TYPE  = $sw;               // category
$SWABS_WETPREP  = $swa;               // category
$SWABS_GRAMSTAIN  = $swab;

  $sql1="UPDATE `laboratory` SET   `NTIHCNO`='$NTIHCNO',
                                   `TESTDATE`='$TESTDATE',
											             `NAME`= '$NAME',
													         `SPECIMEN`= '$SPECIMEN',
													         `HEAMATOLOGY_SCROLOGY`='$HEAMATOLOGY_SCROLOGY',
													         `MALARIA`='$MALARIA',
													         `STOOL_MICROSCOPY`='$STOOL_MICROSCOPY',
													         `URINE_MICROSCOPY`='$URINE_MICROSCOPY',
													         `SWABS_TYPE`='$SWABS_TYPE',
													         `SWABS_WETPREP`= '$SWABS_WETPREP',
													         `SWABS_GRAMSTAIN`='$SWABS_GRAMSTAIN',
													         `TECHNICIAN_NAME`='$TECHNICIAN_NAME',
													         `TITLE`='$TITLE',
													         `REQUESTINGUNIT`='$REQUESTINGUNIT',
													         `USERINITIAL`= '$USERINITIAL',
 													         `TESTDESCRIPTION`='$TESTDESCRIPTION',
													         `FISCALMONTH`='$m',
													         `FISCALYEAR`='$y',
													         `EXPIRYDATET1`='$EXPIRYDATET1',
													         `EXPIRYDATET2`='$EXPIRYDATET2',
													         `EXPIRYDATET3`='$EXPIRYDATET3',
													         `REACTIVITYT1`='$REACTIVITYT1',
													         `REACTIVITYT2`='$REACTIVITYT2',
													         `REACTIVITYT3`='$REACTIVITYT3',
 													         `FINALREACTIVITY`='$FINALREACTIVITY',
													         `HEPATITIS_B`='$HEPATITIS_B',
													         `SYPHILIS`='$SYPHILIS',
													         `HB`='$HB',
													         `RBS`='$RBS',
													         `BLOOD`='$BLOOD',
													         `BLOODRESULTS`='$BLOODRESULTS',
													         `HCG`= '$HCG',
													         `MALARIARDTs`='$MALARIARDTs',
													         `MALARIAMICROSCOPY`='$MALARIAMICROSCOPY',
 													         `OTHERHEAMOPATRASITES`= '$OTHERHEAMOPATRASITES',
													         `CYSTECELLS`= '$CYSTECELLS',                                   
                                   `TESTSTATUS`= 'COMPLETED',
													         `PROTEINS`='$PROTEINS'  WHERE id='$ID'";


  $sql2="UPDATE `laboratory_temp` SET `NTIHCNO`='$NTIHCNO',
                                   `TESTDATE`='$TESTDATE',
  												         `SPECIMEN`= '$SPECIMEN',
  												         `HEAMATOLOGY_SCROLOGY`='$HEAMATOLOGY_SCROLOGY',
  												         `MALARIA`='$MALARIA',
  												         `STOOL_MICROSCOPY`='$STOOL_MICROSCOPY',
  												         `URINE_MICROSCOPY`='$URINE_MICROSCOPY',
  												         `SWABS_TYPE`='$SWABS_TYPE',
  												         `SWABS_WETPREP`= '$SWABS_WETPREP',
  												         `SWABS_GRAMSTAIN`='$SWABS_GRAMSTAIN',
  												         `TECHNICIAN_NAME`='$TECHNICIAN_NAME',
  												         `TITLE`='$TITLE',
  												         `REQUESTINGUNIT`='$REQUESTINGUNIT',
  												         `USERINITIAL`= '$USERINITIAL',
													         `TESTDESCRIPTION`='$TESTDESCRIPTION',
  												         `FISCALMONTH`='$m',
  												         `FISCALYEAR`='$y',
  												         `EXPIRYDATET1`='$EXPIRYDATET1',
  												         `EXPIRYDATET2`='$EXPIRYDATET2',
  												         `EXPIRYDATET3`='$EXPIRYDATET3',
  												         `REACTIVITYT1`='$REACTIVITYT1',
  												         `REACTIVITYT2`='$REACTIVITYT2',
  												         `REACTIVITYT3`='$REACTIVITYT3',
													         `FINALREACTIVITY`='$FINALREACTIVITY',
  												         `HEPATITIS_B`='$HEPATITIS_B',
  												         `SYPHILIS`='$SYPHILIS',
  												         `HB`='$HB',
  												         `RBS`='$RBS',
  												         `BLOOD`='$BLOOD',
  												         `BLOODRESULTS`='$BLOODRESULTS',
  												         `HCG`= '$HCG',
  												         `MALARIARDTs`='$MALARIARDTs',
  												         `MALARIAMICROSCOPY`='$MALARIAMICROSCOPY',
													         `OTHERHEAMOPATRASITES`= '$OTHERHEAMOPATRASITES',
  												         `CYSTECELLS`= '$CYSTECELLS',
  												         `PROTEINS`='$PROTEINS'  WHERE NTIHCNO='$NTIHCNO'";

$sql='';

if (isset($_POST['mytempvar'])) { $sql = $sql2; } else { $sql = $sql1; }


                                   if($conn->query($sql)===true){
                                                  header("location:laboratory.php");
                                                exit(); }

                                   else{    echo 'ERROR'.$conn->error;  }
}

                                   exit();
                                    ?>

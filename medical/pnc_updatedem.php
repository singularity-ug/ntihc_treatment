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
$id       = trim($_POST['id']);  
$NTIHCNO   = trim($_POST['NTIHCNO']);
$VITA = trim($_POST['VITA']);
$IPV  = trim($_POST['IPV']);
$PCV   = trim($_POST['PCV']);   
$DPT   = trim($_POST['DPT']);
$OPV  = trim($_POST['OPV']);
$BCG     = trim($_POST['BCG']);
$INR_NO = trim($_POST['INR_NO']);
$MU_AC   = trim($_POST['MU_AC']);
$eMTCTCODESP = trim($_POST['eMTCTCODESP']);
$eMTCTCODESW  = trim($_POST['eMTCTCODESW']);
$PVBLEEDING   = trim($_POST['PVBLEEDING']);               
$STATUSOFCERVIX   = trim($_POST['STATUSOFCERVIX']);                 
$STATUSOFBREAST   = trim($_POST['STATUSOFBREAST']); 
$FAMILYPLANNINGMETHOD   = trim($_POST['FAMILYPLANNINGMETHOD']);               
$TIMINGFORPNCVIST   = trim($_POST['TIMINGFORPNCVIST']);                 
$PNCDATASTATUS   = trim($_POST['PNCDATASTATUS']);


$sql1="UPDATE `postnatal_care`     SET 
		                                  `NTIHCNO`='$NTIHCNO',
										  `VITA`='$VITA',
										  `IPV`='$IPV',
		                                  `PCV`='$PCV',
										  `DPT`='$DPT',
										  `OPV`='$OPV', 
										  `BCG`='$BCG', 
										  `INR_NO`='$INR_NO',
										  `MU_AC`='$MU_AC',
		                                  `eMTCTCODESP`='$eMTCTCODESP',
										  `eMTCTCODESW`='$eMTCTCODESW',
										  `PVBLEEDING`='$PVBLEEDING', 
										  `STATUSOFBREAST`='$STATUSOFBREAST',
										  `STATUSOFCERVIX`='$STATUSOFCERVIX', 
                                          `FAMILYPLANNINGMETHOD`='$FAMILYPLANNINGMETHOD', 
										  `TIMINGFORPNCVIST`='$TIMINGFORPNCVIST', 
										  `PNCDATASTATUS`='UPDATED'

                                           WHERE id='$id'";
                                   if($conn->query($sql1)){ header("location:../postnatalcare.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?>
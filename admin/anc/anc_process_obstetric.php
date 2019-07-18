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

if(isset($_POST['VISTDATECREATED'])){

$dnxw =array(); $fqxw =array(); $tmxw=array(); $pdxw =array(); $qtyxw =array();
$abw =array(); $bcw =array(); $cdw=array(); $dew =array(); $efw =array();
$fgw =array(); $ghw =array(); $hiw=array(); $ijw =array(); $jkw =array();  $jkxxw =array(); 

$DATECREATED  = trim($_POST['DATECREATED']);  
$VISTDATECREATED  = trim($_POST['VISTDATECREATED']);  
if (isset($_POST['dnxw'])) {
  $dnxw =      $_POST['dnxw'];
  $fqxw   =       $_POST['fqxw'];
  $tmxw      =       $_POST['tmxw'];
  $pdxw   =       $_POST['pdxw'];
  $qtyxw      =       $_POST['qtyxw']; 
  $abw =      $_POST['abw'];
  $bcw   =       $_POST['bcw'];
  $cdw      =       $_POST['cdw'];
  $dew   =       $_POST['dew'];
  $efw      =       $_POST['efw'];
  $fgw =      $_POST['fgw'];
  $ghw   =       $_POST['ghw'];
  $hiw      =       $_POST['hiw'];
  $ijw =      $_POST['ijw'];
  $jkxxw   =       $_POST['jkxxw']; 
}
   

$i=0;
for($i=0;$i<count($dnxw);$i++){

$PRREGNANCY =$dnxw[$i];
$YEAROFPREG  = $fqxw[$i];
$BELOW12WEEKS  =  $tmxw[$i];
$ABOVE12WEEKS   = $pdxw[$i];
$PREMATURE  =  $qtyxw[$i]; 
$FULL  =  $abw[$i]; 
$PLACEOFDELIVERY   = $bcw[$i];
$TYPEOFDELIVERY  =  $cdw[$i]; 
$THIRDSTAGE   = $dew[$i]; 
$PUERPERLUM  =  $efw[$i];  
$ALIVESB  =  $fgw[$i];
$CHILDSEX   = $ghw[$i];
$BIRTHWEIGHT  =  $hiw[$i];
$IMMUN  =  $ijw[$i];
$HEALTHCONDITION  =  $jkxxw[$i];   
 
  
$HEALTHUNIT  = trim($_POST['HEALTHUNIT']);
$NTIHCNO  = trim($_POST['NTIHCNO']);
$SERIALNO  = trim($_POST['SERIALNO']);
$REGNO  = trim($_POST['REGNO']);
$CLIENTNAME  = trim($_POST['CLIENTNAME']);
$SCHOOLINGSTATUS  = trim($_POST['SCHOOLINGSTATUS']); 
$AGE  = trim($_POST['AGE']);
$AGE_GROUP  = trim($_POST['AGE_GROUP']);
$PHONECONTACT  = trim($_POST['PHONECONTACT']);  
$USERINITIAL  = trim($_POST['USERINITIAL']);
$USERDESIGNATION  = trim($_POST['USERDESIGNATION']);
$USERACCOUNT  = trim($_POST['USERACCOUNT']);
  
                                 
	$sql1="INSERT INTO `patientmgt`.`antenatal_obstetric` (`DATECREATED`,  `VISTDATECREATED`,
                                                     `PRREGNANCY`, `YEAROFPREG`,  `BELOW12WEEKS`,  `ABOVE12WEEKS`,  `PREMATURE`,
                                                     `FULL`, `PLACEOFDELIVERY`, `TYPEOFDELIVERY`,  `THIRDSTAGE`,  `PUERPERLUM`,
											         `ALIVESB`,  `CHILDSEX`,  `BIRTHWEIGHT`,  `IMMUN`,  `HEALTHCONDITION`,
												     
                                                      `HEALTHUNIT`,  `NTIHCNO`,  `SERIALNO`,  `REGNO`,   `CLIENTNAME`,  `SCHOOLINGSTATUS`, 
													  `AGE`,  `AGE_GROUP`, `PHONECONTACT`, `USERINITIAL`, `USERDESIGNATION`,  
												      `USERACCOUNT`)
                                                VALUES (DATECREATED, '$VISTDATECREATED',
												      '$PRREGNANCY', '$YEAROFPREG', '$BELOW12WEEKS', '$ABOVE12WEEKS', '$PREMATURE',
							                        '$FULL', '$PLACEOFDELIVERY', '$TYPEOFDELIVERY', '$THIRDSTAGE', '$PUERPERLUM',
							                        '$ALIVESB', '$CHILDSEX', '$BIRTHWEIGHT', '$IMMUN', '$HEALTHCONDITION', 
													'$HEALTHUNIT', '$NTIHCNO', '$SERIALNO', '$REGNO', '$CLIENTNAME',
													'$SCHOOLINGSTATUS', '$AGE', '$AGE_GROUP', '$PHONECONTACT',  
													'$USERINITIAL','$USERDESIGNATION',
													'$USERACCOUNT')";
													 

                                  $conn->query($sql1);

						}
						}
                         header("location:anc_home.php");
                                exit();

                                    ?> 
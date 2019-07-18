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

$dnx =array(); $fqx =array(); $tmx=array(); $pdx =array(); $qtyx =array();  

$TIMEOUT  = trim($_POST['TIMEOUT']); 
$NTIHCNO  = trim($_POST['NTIHCNO']); 
$DATECREATED  = trim($_POST['DATECREATED']);
$CLIENTNAME  = trim($_POST['CLIENTNAME']); 

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx'];
  $tmx      =       $_POST['tmx'];
  $pdx   =       $_POST['pdx'];
  $qtyx      =       $_POST['qtyx'];  
}
   

$i=0;
for($i=0;$i<count($dnx);$i++){

$DRUGNAME =$dnx[$i];
$FREQUENCY  = $fqx[$i];
$TIMES  =  $tmx[$i];
$PERIOD   = $pdx[$i];
$QTYPRESCRIBED  =  $qtyx[$i];   
  
$CHECKAVAILABILITY  = trim($_POST['CHECKAVAILABILITY']); 
$REQUESTINGUNIT  = trim($_POST['REQUESTINGUNIT']);
$SCHOOLING  = trim($_POST['SCHOOLING']); 
$AGE  = trim($_POST['AGE']); 
$AGE_GROUP  = trim($_POST['AGE_GROUP']);
$USERINITIAL  = trim($_POST['USERINITIAL']); 
$SEX  = trim($_POST['SEX']); 
$SERVICE_EPISODE  = trim($_POST['SERVICE_EPISODE']);             
    
  $sql1="INSERT INTO `patientmgt`.`prescription` (`DATECREATED`,  
                                                             `NTIHCNO`,   
                               `DRUGNAME`, `FREQUENCY`, `TIMES`, `PERIOD`, `QTYPRESCRIBED`,
                               `CHECKAVAILABILITY`, `REQUESTINGUNIT`, `SCHOOLING`, `AGE`, `AGE_GROUP`, `USERINITIAL`,`SEX`, 
                               `SERVICE_EPISODE`,  `TIMEOUT`,
                                   `CLIENTNAME`)
                                                VALUES ('$DATECREATED',
                               '$NTIHCNO', 
                             '$DRUGNAME', '$FREQUENCY', '$TIMES', '$PERIOD', '$QTYPRESCRIBED', 
                             '$CHECKAVAILABILITY', '$REQUESTINGUNIT', '$SCHOOLING', '$AGE', '$AGE_GROUP', '$USERINITIAL',  '$SEX',  
                             '$SERVICE_EPISODE', '$TIMEOUT',
                             '$CLIENTNAME')";
                             
                              mysqli_query($conn, "UPDATE `cmpatientsregistration` SET `INSVCSTATUS` = 'ANC SERVICES', `TIMEOUT` = '$TIMEOUT' 
                                                             WHERE `NTIHCNO` = '$NTIHCNO'"); 
                                       
                                       

                                  $conn->query($sql1);
                   
            }
            }
                         header("location:anc_home.php");
                                exit();

                                    ?>

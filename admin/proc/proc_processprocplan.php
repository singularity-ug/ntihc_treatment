<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "procurement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['DATECREATED'])){

$dnx =array(); $fqx =array(); $tmx=array(); $pdx =array(); $fqtr =array(); $qtyx =array(); 

$DATECREATED  = trim($_POST['DATECREATED']);
$OBJECTIVE  = trim($_POST['OBJECTIVE']);
$CODE  = trim($_POST['CODE']);  
$ITEMDESCRIPTION  = trim($_POST['ITEMDESCRIPTION']);
$FINANCIALPERIOD  = trim($_POST['FINANCIALPERIOD']); 

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx'];
  $tmx      =       $_POST['tmx'];
  $pdx   =       $_POST['pdx'];
  $fqtr      =       $_POST['fqtr'];
  $qtyx      =       $_POST['qtyx']; 
}
   

$i=0;
for($i=0;$i<count($dnx);$i++){

$PLANDETAILS =$dnx[$i];
$FIRSTQTR  = $fqx[$i];
$SECONDQTR  =  $tmx[$i];
$THIRDQTR   = $pdx[$i]; 
$FOURTHQTR  =  $fqtr[$i];
$BUDGETAMOUNT  =  $qtyx[$i]; 

$CODEDAMOUNT  = trim($_POST['CODEDAMOUNT']); 
$BUDGETSTATUS  = trim($_POST['BUDGETSTATUS']);  

  $sql1="INSERT INTO `procplanning` (`DATECREATED`,
                                                             `OBJECTIVE`,
															 `CODE`, 
													         `ITEMDESCRIPTION`,
													         `FINANCIALPERIOD`,
													         `PLANDETAILS`,
													         `FIRSTQTR`,
															 `SECONDQTR`,
															 `THIRDQTR`,
													         `FOURTHQTR`, 
															 `BUDGETAMOUNT`, 
															 `BUDGETSTATUS`, 
															 `CODEDAMOUNT`)
                                                VALUES (DATECREATED,
												      '$OBJECTIVE',   
													  '$CODE',   
													         '$ITEMDESCRIPTION',
													         '$FINANCIALPERIOD',
													         '$PLANDETAILS',
															 '$FIRSTQTR',
													         '$SECONDQTR',
													         '$THIRDQTR',
															 '$FOURTHQTR',
															 '$BUDGETAMOUNT',
															 '$BUDGETSTATUS',
													   '$CODEDAMOUNT')";

                                  $conn->query($sql1);

						}
						}
                         header("location:proc_pdu_mgr.php");
                                exit();

                                    ?>

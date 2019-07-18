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

$AW =array(); $IN =array(); $FR=array(); $TO =array(); 
 
if (isset($_POST['AW'])) {
  $AW =      $_POST['AW'];
  $IN   =       $_POST['IN'];
  $FR      =       $_POST['FR'];
  $TO   =       $_POST['TO']; 
 }
  
  
$ORDERSERIALID = trim($_POST['ORDERSERIALID']);
$DATECREATED = trim($_POST['DATECREATED']);
$REQUESTINGUNIT = trim($_POST['REQUESTINGUNIT']);
$ORDERTYPE = trim($_POST['ORDERTYPE']);
$FACILITYNANE = trim($_POST['FACILITYNANE']);
$REQUISTIONTYPE   = trim($_POST['REQUISTIONTYPE']);
$REQBYNAME = trim($_POST['REQBYNAME']);
$REQBYDATE = trim($_POST['REQBYDATE']);
$REQBY = trim($_POST['REQBY']); 
$REQUESTORACCOUNT = trim($_POST['REQUESTORACCOUNT']); 
  
$i=0;
for($i=0;$i<count($AW);$i++){

$DESCRIPTION =$AW[$i];
$QTYINSTOCK  = $IN[$i];
$QTYNEEDED  =  $FR[$i];
$UNITOFMEASURE   = $TO[$i];  
 

$m = date("m");
$y = date("Y");    

 
 
$sql1 = "INSERT INTO `procurement`.`outgoingorders`  
                                    (`ORDERSERIALID`,
									 `DATECREATED`,
									 `REQUESTINGUNIT`,
									 `ORDERTYPE`,
									 `FACILITYNANE`,
									 `REQUISTIONTYPE`,
									 `REQBYNAME`,
									 `REQBYDATE`, 
									   `DESCRIPTION`,  `QTYINSTOCK`,  `QTYNEEDED`, `UNITOFMEASURE`,  
									   `FISCALMONTH`, `FISCALYEAR`, `REQUESTORACCOUNT`,  
									   `REQBY`)
                             VALUES ('$ORDERSERIALID',
									 '$DATECREATED',
									 '$REQUESTINGUNIT',
									 '$ORDERTYPE',
									 '$FACILITYNANE',
									 '$REQUISTIONTYPE',
									 '$REQBYNAME',
									 '$REQBYDATE', 
									    '$DESCRIPTION',   '$QTYINSTOCK',  '$QTYNEEDED', '$UNITOFMEASURE',  
										'$m',  '$y', '$REQUESTORACCOUNT', 
									    '$REQBY')"; 
									  
        $conn->query($sql1);

						}
						}
                         header("location:store_orders.php");
                                exit();

                                    ?>

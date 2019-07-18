 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "procurement"; 
$dbname1 = "patientmgt"; 
if(isset($_POST['ORDERSERIALID'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname1);

// Check connection
if (!$conn) {   }


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
$DESCRIPTION = trim($_POST['DESCRIPTION']);
$QTYINSTOCK = trim($_POST['QTYINSTOCK']);
$QTYNEEDED = trim($_POST['QTYNEEDED']);
$QTYISSUED = trim($_POST['QTYISSUED']);
$UNIT = trim($_POST['UNIT']);
$STOCKBAL   = trim($_POST['STOCKBAL']);
$BATCHNO = trim($_POST['BATCHNO']);
$UNITOFMEASURE = trim($_POST['UNITOFMEASURE']);
$EXPIRY = trim($_POST['EXPIRY']);  
$UNITVALUE = trim($_POST['UNITVALUE']); 
$AMOUNT = trim($_POST['AMOUNT']); 
  $m = date("m");
$y = date("Y");    
$INITIATIONUNIT = trim($_POST['INITIATIONUNIT']);
$STOCKISSUANCESTATUS = trim($_POST['STOCKISSUANCESTATUS']);
$APPROVAL = trim($_POST['APPROVAL']);

mysqli_query($conn, "UPDATE `ntihcdrugs` SET `QTY_RECIEVED` = (`QTY_RECIEVED` + '$QTYISSUED') WHERE `DRUGNAME` = '$DESCRIPTION'"); 

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {   }
 
$sql = "INSERT INTO outgoingorders (ORDERSERIALID,
									 DATECREATED,
									 REQUESTINGUNIT,
									 ORDERTYPE,
									 FACILITYNANE,
									 REQUISTIONTYPE,
									 REQBYNAME,
									 REQBYDATE, 
									   DESCRIPTION,  QTYINSTOCK,  QTYNEEDED, QTYISSUED, UNIT,  STOCKBAL, BATCHNO, UNITOFMEASURE,  EXPIRY, UNITVALUE,  AMOUNT, 
									   FISCALMONTH,
								       FISCALYEAR, REQUESTORACCOUNT, INITIATIONUNIT, STOCKISSUANCESTATUS, APPROVAL,
									   REQBY)
                             VALUES ('$ORDERSERIALID',
									 '$DATECREATED',
									 '$REQUESTINGUNIT',
									 '$ORDERTYPE',
									 '$FACILITYNANE',
									 '$REQUISTIONTYPE',
									 '$REQBYNAME',
									 '$REQBYDATE', 
									    '$DESCRIPTION',   '$QTYINSTOCK',  '$QTYNEEDED',  '$QTYISSUED',  '$UNIT',  '$STOCKBAL',  '$BATCHNO',  '$UNITOFMEASURE', 
										'$EXPIRY',  '$UNITVALUE',  '$AMOUNT',
										'$FISCALMONTH',  '$FISCALYEAR', '$REQUESTORACCOUNT', '$INITIATIONUNIT', '$STOCKISSUANCESTATUS', '$APPROVAL',
									    '$REQBY')";
									 
                             mysqli_query($conn, " UPDATE `recievables`  SET `QUANTITYISSUED` = (`QUANTITYISSUED` + '$QTYISSUED'),
							                                    `BALANCEINSTOCK` = (QTYRECIEVED - QUANTITYISSUED)
							                                     WHERE `DESCRIPTION` = '$DESCRIPTION' AND `BATCHNO` = '$BATCHNO'"); 
							    
	

} 
   					 
		  
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:incomingorder_issue.php");
	exit();
	}
 
 
else{}
?> 
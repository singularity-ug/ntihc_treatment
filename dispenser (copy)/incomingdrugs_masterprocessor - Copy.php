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
$UNITOFMEASURE = trim($_POST['UNITOFMEASURE']); 
$UNITVALUE = trim($_POST['UNITVALUE']); 
  $m = date("m");
$y = date("Y");    


mysqli_query($conn, "UPDATE `ntihcdrugs` SET `QTY_REQUISITIONED` = (`QTY_REQUISITIONED` + '$QTYNEEDED') WHERE `DRUGNAME` = '$DESCRIPTION'"); 

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
									   DESCRIPTION,  QTYINSTOCK,  QTYNEEDED, UNITOFMEASURE,  
									   FISCALMONTH, FISCALYEAR, REQUESTORACCOUNT, UNITVALUE,
									   REQBY)
                             VALUES ('$ORDERSERIALID',
									 '$DATECREATED',
									 '$REQUESTINGUNIT',
									 '$ORDERTYPE',
									 '$FACILITYNANE',
									 '$REQUISTIONTYPE',
									 '$REQBYNAME',
									 '$REQBYDATE', 
									    '$DESCRIPTION',   '$QTYINSTOCK',  '$QTYNEEDED', '$UNITOFMEASURE',  
										'$FISCALMONTH',  '$FISCALYEAR', '$REQUESTORACCOUNT', '$UNITVALUE',
									    '$REQBY')";
									 
	

} 
   					 
									 
 
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:incomingdrugs.php");
	exit();
	}
 
 
else{}
?> 
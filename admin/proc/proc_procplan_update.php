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
  

if(isset($_POST['OBJECTIVE'])){
$id       = trim($_POST['id']);
$OBJECTIVE   = trim($_POST['OBJECTIVE']);
$CODE  = trim($_POST['CODE']);
$FINANCIALPERIOD     = trim($_POST['FINANCIALPERIOD']);
$ITEMDESCRIPTION = trim($_POST['ITEMDESCRIPTION']);
$PLANDETAILS   = trim($_POST['PLANDETAILS']);
$FIRSTQTR = trim($_POST['FIRSTQTR']);
$SECONDQTR  = trim($_POST['SECONDQTR']);
$THIRDQTR   = trim($_POST['THIRDQTR']);
$FOURTHQTR = trim($_POST['FOURTHQTR']);
$BUDGETAMOUNT  = trim($_POST['BUDGETAMOUNT']); 

$sql1="UPDATE `procplanning`        SET
										  `OBJECTIVE` ='$OBJECTIVE',
		                                  `CODE`='$CODE',
										  `FINANCIALPERIOD`='$FINANCIALPERIOD',
										  `ITEMDESCRIPTION`='$ITEMDESCRIPTION',
		                                  `PLANDETAILS`='$PLANDETAILS',
										  `FIRSTQTR`='$FIRSTQTR',
										  `SECONDQTR`='$SECONDQTR',
		                                  `THIRDQTR`='$THIRDQTR',
										  `FOURTHQTR`='$FOURTHQTR',
										  `BUDGETAMOUNT`='$BUDGETAMOUNT'
                                           WHERE id='$id'";
                                   if($conn->query($sql1)){ header("location:proc_pdu_mgr.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?> 
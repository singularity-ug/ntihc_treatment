
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "procurement";

if(isset($_POST['PAYMENTDATE'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
  
$PAYMENTDATE = trim($_POST['PAYMENTDATE']); 
$PMTSERIALID = trim($_POST['PMTSERIALID']);
$PAYMENTTYPE = trim($_POST['PAYMENTTYPE']);
$USERINITIALS = trim($_POST['USERINITIALS']);
$UTILITYTYPE = trim($_POST['UTILITYTYPE']); 
$QUARTERACCOUNTABLE = trim($_POST['QUARTERACCOUNTABLE']);
$USERTITLE = trim($_POST['USERTITLE']);
$USERINO = trim($_POST['USERINO']); 
  
$PLANDETAILS = trim($_POST['PLANDETAILS']); 
$CODE = trim($_POST['CODE']);
$FINANCIALPERIOD = trim($_POST['FINANCIALPERIOD']);
$FIRSTQTR = trim($_POST['FIRSTQTR']);
$SECONDQTR = trim($_POST['SECONDQTR']); 
$THIRDQTR = trim($_POST['THIRDQTR']);
$FOURTHQTR = trim($_POST['FOURTHQTR']);
$BUDGETAMOUNT = trim($_POST['BUDGETAMOUNT']); 
$BUDGETSTATUS = trim($_POST['BUDGETSTATUS']); 

$sql = "INSERT INTO paymentorders (PAYMENTDATE,  
									 PMTSERIALID,  
									 PAYMENTTYPE, 
									 USERINITIALS,  
									 QUARTERACCOUNTABLE,  
									 USERTITLE, 
									 USERINO,  
									 PLANDETAILS,  
									 CODE, 
									 FINANCIALPERIOD,  
									 FIRSTQTR,  
									 SECONDQTR, 
									 THIRDQTR,
									 FOURTHQTR,  
									 BUDGETAMOUNT, 
									 BUDGETSTATUS,   
									 UTILITYTYPE)
                             VALUES ('$PAYMENTDATE', 
									 '$PMTSERIALID',
									 '$PAYMENTTYPE', 
									 '$USERINITIALS',    
									 '$QUARTERACCOUNTABLE',
									 '$USERTITLE', 
									 '$USERINO',  
									 '$PLANDETAILS',
									 '$CODE', 
									 '$FINANCIALPERIOD',    
									 '$FIRSTQTR',
									 '$SECONDQTR', 
									 '$THIRDQTR',  
									 '$FOURTHQTR', 
									 '$BUDGETAMOUNT',    
									 '$BUDGETSTATUS', 
									 '$UTILITYTYPE')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:payments.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

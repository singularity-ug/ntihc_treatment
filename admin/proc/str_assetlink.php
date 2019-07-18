
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "contemporary";

if(isset($_POST['PROPERTYDESCRIPTION'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
 

$PROPERTYDESCRIPTION = trim($_POST['PROPERTYDESCRIPTION']); 
$MAKE = trim($_POST['MAKE']);
$CATEGORY = trim($_POST['CATEGORY']);
$LOCATION = trim($_POST['LOCATION']);
$RESPONSIBLEOFFICER = trim($_POST['RESPONSIBLEOFFICER']);
$OFFICERCONTACT   = trim($_POST['OFFICERCONTACT']);
$PROPERTYCOST = trim($_POST['PROPERTYCOST']);
$DATEOFPURCHASE = trim($_POST['DATEOFPURCHASE']);
$SUPPLIEDBY = trim($_POST['SUPPLIEDBY']);
$CODIFICATIONSTATUS = trim($_POST['CODIFICATIONSTATUS']);
$ENGRAVEDNUMBER = trim($_POST['ENGRAVEDNUMBER']);
$FUNCTIONALSTATUS   = trim($_POST['FUNCTIONALSTATUS']);
$DEPRECIATIONSTATUS  = trim($_POST['DEPRECIATIONSTATUS']);
$REMINDDATE = trim($_POST['REMINDDATE']);
$NEXTDUESERVICE = trim($_POST['NEXTDUESERVICE']);
$HOLDTYPE = trim($_POST['HOLDTYPE']); 
$SERVICEREQUIREMENT = trim($_POST['SERVICEREQUIREMENT']); 
  

$sql = "INSERT INTO properties (PROPERTYDESCRIPTION,  
									 MAKE,  
									 CATEGORY, 
									 LOCATION, 
									 RESPONSIBLEOFFICER, 
									 OFFICERCONTACT,
									 PROPERTYCOST,
									 DATEOFPURCHASE, 
									 SUPPLIEDBY,
									 CODIFICATIONSTATUS,
									 ENGRAVEDNUMBER,   
									 FUNCTIONALSTATUS, DEPRECIATIONSTATUS, REMINDDATE, NEXTDUESERVICE, 
									 HOLDTYPE, 
									 SERVICEREQUIREMENT)
                             VALUES ('$PROPERTYDESCRIPTION', 
									 '$MAKE',
									 '$CATEGORY',
									 '$LOCATION',
									 '$RESPONSIBLEOFFICER',
									 '$OFFICERCONTACT',                                    
									 '$PROPERTYCOST',
									 '$DATEOFPURCHASE',
									 '$SUPPLIEDBY',
									 '$CODIFICATIONSTATUS',
									 '$ENGRAVEDNUMBER', 
									 '$FUNCTIONALSTATUS','$DEPRECIATIONSTATUS','$REMINDDATE','$NEXTDUESERVICE',        
							         '$HOLDTYPE',
									 '$SERVICEREQUIREMENT')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:str_goodsrecievenote.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

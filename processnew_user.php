 <?php
	include 'php/confighr.php';	 

if(isset($_POST['Name'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }

$Name = trim($_POST['Name']);
$Username = trim($_POST['Username']);
$Phonecontact = trim($_POST['Phonecontact']); 
$Pwd = trim($_POST['Pwd']);
$Pwd = trim($_POST['ConfirmPwd']); 
$gender = trim($_POST['gender']);
$Type = trim($_POST['Type']); 
$Description = trim($_POST['Description']); 
$Dept = trim($_POST['Dept']); 
$Healthcenter = trim($_POST['Healthcenter']);
    
$sql = "INSERT INTO sys_users (Name, 
									 Username, 
									 Phonecontact,
									 Pwd,  
									 ConfirmPwd,
									 gender, 
									 Type, 
									 Description,     
									 Dept,  
									 Healthcenter)
                             VALUES ('$Name',
									 '$Username',
									 '$Phonecontact',
									 '$Pwd',
									 '$ConfirmPwd',
									 '$gender',
									 '$Type',   
									 '$Description', 
									 '$Dept', 
							         '$Healthcenter')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:sys_admin.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

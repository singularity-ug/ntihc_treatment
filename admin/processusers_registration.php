
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr";

if(isset($_POST['created'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
  
$created = trim($_POST['created']); 

$First_Name = trim($_POST['First_Name']);
$Last_Name = trim($_POST['Last_Name']);
$Email = trim($_POST['Email']); 
$Password = trim($_POST['Password']); 
$gender = trim($_POST['gender']);   
$Staff_Number = trim($_POST['Staff_Number']); 
$Phonecontact = trim($_POST['Phonecontact']); 
$Dept = trim($_POST['Dept']); 
$Description = trim($_POST['Description']);
$signature = trim($_POST['signature']);  
$dateoffirstappointment = trim($_POST['dateoffirstappointment']);  
$designationoffirstappointment = trim($_POST['designationoffirstappointment']); 
$facilityname = trim($_POST['facilityname']);  
$facilitydescription = trim($_POST['facilitydescription']);  
$Portfolio = trim($_POST['Portfolio']);  

$sql = "INSERT INTO user_table (created,  
									 First_Name,  
									 Last_Name, 
									 Email, 
									 Password,
									 gender, 
									 Staff_Number, 
									 Phonecontact,
									 Dept,
									 Description,
									 signature,
									 dateoffirstappointment, 
									 designationoffirstappointment,
									 facilityname,
									 facilitydescription,
									 Portfolio 
									  )
									 
                              VALUES ('$created', 
									 '$First_Name',
									 '$Last_Name',
									 '$Email',
									 '$Password',
									 '$gender', 
									 '$Staff_Number', 
									 '$Phonecontact',
									 '$Dept',
									 '$Description',
									 '$signature',
									 '$dateoffirstappointment', 
									 '$designationoffirstappointment',
									 '$facilityname',
									 '$facilitydescription',
									 '$Portfolio'
									 )";   

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:system_admin.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>
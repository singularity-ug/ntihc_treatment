 <?php
// including the database connection file
include_once("confighr.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['ID']); 
	$First_Name = mysqli_real_escape_string($mysqli, $_POST['First_Name']);
	$Last_Name = mysqli_real_escape_string($mysqli, $_POST['Last_Name']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
	$Description = mysqli_real_escape_string($mysqli, $_POST['Description']);
	$Phonecontact = mysqli_real_escape_string($mysqli, $_POST['Phonecontact']);
	$Dept = mysqli_real_escape_string($mysqli, $_POST['Dept']);
	$facilityname = mysqli_real_escape_string($mysqli, $_POST['facilityname']);
	$Staff_Number = mysqli_real_escape_string($mysqli, $_POST['Staff_Number']);
	$authorizationrights = mysqli_real_escape_string($mysqli, $_POST['authorizationrights']);
	$Current_Status = mysqli_real_escape_string($mysqli, $_POST['Current_Status']); 
	$facilitydescription = mysqli_real_escape_string($mysqli, $_POST['facilitydescription']);
	$dateoffirstappointment = mysqli_real_escape_string($mysqli, $_POST['dateoffirstappointment']);
	$designationoffirstappointment = mysqli_real_escape_string($mysqli, $_POST['designationoffirstappointment']);
	$Grantedby = mysqli_real_escape_string($mysqli, $_POST['Grantedby']);
	$Portfolio = mysqli_real_escape_string($mysqli, $_POST['Portfolio']);
    
	
	// checking empty fields
	if(empty($First_Name) || empty($Last_Name) || empty($gender) || empty($Email) || empty($Description)  || empty($Phonecontact)
	|| empty($Dept)  || empty($facilityname)) {

		if(empty($First_Name)) {
			echo "<font color='red'>First_Name field is empty.</font><br/>";
		}

		if(empty($Last_Name)) {
			echo "<font color='red'>Last_Name field is empty.</font><br/>";
		}

        if(empty($gender)) {
			echo "<font color='red'>gender field is empty.</font><br/>";
		}

		if(empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($Description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}

		if(empty($Phonecontact)) {
			echo "<font color='red'>Access field is empty.</font><br/>";
		}

		if(empty($Dept)) {
			echo "<font color='red'>Dept field is empty.</font><br/>";
		}

		if(empty($facilityname)) {
			echo "<font color='red'>Facility field is empty.</font><br/>";
		}

	} else {

		 $result = mysqli_query($mysqli, "UPDATE user_table SET First_Name='$First_Name',Last_Name='$Last_Name',gender='$gender',Email='$Email'
		 ,Description='$Description' ,Phonecontact='$Phonecontact' ,Dept='$Dept',facilityname='$facilityname'  
		 ,Staff_Number='$Staff_Number' 
		 ,authorizationrights='$authorizationrights' 
		 ,Current_Status='$Current_Status' 
		 ,facilitydescription='$facilitydescription' 
		 ,dateoffirstappointment='$dateoffirstappointment' 
		 ,designationoffirstappointment='$designationoffirstappointment' 
		 ,Grantedby='$Grantedby'
		 ,Portfolio='$Portfolio'
		  WHERE ID='$id'");
		;
		//redirectig to the display page. In our case, it is index.php
		header("Location:../admin/system_admin.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM user_table WHERE ID=$id");

while($res = mysqli_fetch_array($result))
{
	$First_Name = $res['First_Name'];
	$Last_Name = $res['Last_Name'];
	$gender = $res['gender'];
	$Email = $res['Email'];
	$Description = $res['Description'];
	$Phonecontact = $res['Phonecontact'];
	$Dept = $res['Dept'];
	$facilityname = $res['facilityname'];
	$Staff_Number = $res['Staff_Number'];
	$authorizationrights = $res['authorizationrights'];
	$Current_Status = $res['Current_Status'];
	$facilitydescription = $res['facilitydescription'];
	$dateoffirstappointment = $res['dateoffirstappointment'];
	$designationoffirstappointment = $res['designationoffirstappointment'];
	$Grantedby = $res['Grantedby'];
	$Portfolio = $res['Portfolio'];
}

?>

</body>
</html>

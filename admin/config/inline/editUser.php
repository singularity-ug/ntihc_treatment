

<?php
// including the database connection file
include_once("confighr.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']); 
	
	$Name = mysqli_real_escape_string($mysqli, $_POST['Name']);
	$Phonecontact = mysqli_real_escape_string($mysqli, $_POST['Phonecontact']);
	$Username = mysqli_real_escape_string($mysqli, $_POST['Username']);
	$Type = mysqli_real_escape_string($mysqli, $_POST['Type']);
	$Description = mysqli_real_escape_string($mysqli, $_POST['Description']);
	$Authorised = mysqli_real_escape_string($mysqli, $_POST['Authorised']);
	$Dept = mysqli_real_escape_string($mysqli, $_POST['Dept']);
	$Healthcenter = mysqli_real_escape_string($mysqli, $_POST['Healthcenter']);

	// checking empty fields
	if(empty($Name) || empty($Phonecontact) || empty($Username) || empty($Type) || empty($Description)  || empty($Authorised)
	|| empty($Dept)  || empty($Healthcenter)) {

		if(empty($Name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($Phonecontact)) {
			echo "<font color='red'>Phonecontact field is empty.</font><br/>";
		}

        if(empty($Username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}

		if(empty($Type)) {
			echo "<font color='red'>Type field is empty.</font><br/>";
		}

		if(empty($Description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}

		if(empty($Authorised)) {
			echo "<font color='red'>Access field is empty.</font><br/>";
		}

		if(empty($Dept)) {
			echo "<font color='red'>Dept field is empty.</font><br/>";
		}

		if(empty($Healthcenter)) {
			echo "<font color='red'>Facility field is empty.</font><br/>";
		}

	} else {

		$result = mysqli_query($mysqli, "UPDATE sys_users SET Name='$Name',Phonecontact='$Phonecontact',Username='$Username',Type='$Type'
		,Description='$Description' ,Authorised='$Authorised' ,Dept='$Dept',Healthcenter='$Healthcenter' WHERE id='$id'");
		;
		//redirectig to the display page. In our case, it is index.php
		header("Location:../sys_admin.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM sys_users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$Name = $res['Name'];
	$Phonecontact = $res['Phonecontact'];
	$Username = $res['Username'];
	$Type = $res['Type'];
	$Description = $res['Description'];
	$Authorised = $res['Authorised'];
	$Dept = $res['Dept'];
	$Healthcenter = $res['Healthcenter'];
}

?>
  
</body>
</html>

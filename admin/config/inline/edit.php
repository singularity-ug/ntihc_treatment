

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['RID']);

	$NTIHCNO = mysqli_real_escape_string($mysqli, $_POST['NTIHCNO']);
	$SERVICETYPE = mysqli_real_escape_string($mysqli, $_POST['SERVICETYPE']);
	$VISTTYPE = mysqli_real_escape_string($mysqli, $_POST['VISTTYPE']);
	$TIMESTAMP = mysqli_real_escape_string($mysqli, $_POST['TIMESTAMP']);

	// checking empty fields
	if(empty($NTIHCNO) || empty($SERVICETYPE) || empty($VISTTYPE) || empty($TIMESTAMP)) {

		if(empty($NTIHCNO)) {
			echo "<font color='red'>NTIHCNO field is empty.</font><br/>";
		}

		if(empty($SERVICETYPE)) {
			echo "<font color='red'>SERVICETYPE field is empty.</font><br/>";
		}

        if(empty($VISTTYPE)) {
			echo "<font color='red'>VISTTYPE field is empty.</font><br/>";
		}

		if(empty($TIMESTAMP)) {
			echo "<font color='red'>ACTION field is empty.</font><br/>";
		}
	} else {
	
		$result = mysqli_query($mysqli, "UPDATE cmpatientsregistration SET NTIHCNO='$NTIHCNO',SERVICETYPE='$SERVICETYPE',VISTTYPE='$VISTTYPE',TIMESTAMP='$TIMESTAMP' WHERE RID='$id'");
		;
		//redirectig to the display page. In our case, it is index.php
		header("Location:../counsellingroom.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE RID=$id");

while($res = mysqli_fetch_array($result))
{
	$NTIHCNO = $res['NTIHCNO'];
	$SERVICETYPE = $res['SERVICETYPE'];
	$VISTTYPE = $res['VISTTYPE'];
	$TIMESTAMP = $res['TIMESTAMP'];
}

?>

	 
</body>
</html>

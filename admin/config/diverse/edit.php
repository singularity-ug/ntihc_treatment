<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['RID']);

	$NTIHCNO = mysqli_real_escape_string($mysqli, $_POST['NTIHCNO']);
	$SERVICETYPE = mysqli_real_escape_string($mysqli, $_POST['SERVICETYPE']);
	$VISTTYPE = mysqli_real_escape_string($mysqli, $_POST['VISTTYPE']);

	// checking empty fields
	if(empty($NTIHCNO) || empty($SERVICETYPE) || empty($VISTTYPE)) {

		if(empty($NTIHCNO)) {
			echo "<font color='red'>NTIHCNO field is empty.</font><br/>";
		}

		if(empty($SERVICETYPE)) {
			echo "<font color='red'>SERVICETYPE field is empty.</font><br/>";
		}

		if(empty($VISTTYPE)) {
			echo "<font color='red'>VISTTYPE field is empty.</font><br/>";
		}
	} else {
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE cmpatientsregistration SET NTIHCNO='$NTIHCNO',SERVICETYPE='$SERVICETYPE',VISTTYPE='$VISTTYPE' WHERE RID=$id");

		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
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
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form NTIHCNO="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>NTIHCNO</td>
				<td><input type="text" name="NTIHCNO" value="<?php echo $NTIHCNO;?>"></td>

			</tr>
			<tr>
				<td>SERVICETYPE</td>
				<td><select name="SERVICETYPE" value="<?php echo $SERVICETYPE;?>">
                  <option value="<?php echo $SERVICETYPE;?>"> <?php echo $SERVICETYPE;?> </option>
  <option value="MEDICAL SERVICES">MEDICAL SERVICES</option>
  <option value="COUNSELLING SERVICES">COUNSELLING SERVICES</option>
  <option value="PREGNANCY RELATED SERVICES">PREGNANCY RELATED SERVICES</option>
</select>
                   </td>
                 
			</tr>
			<tr>
				<td>VIST TYPE</td>
				<td><input type="text" name="VISTTYPE" value="<?php echo $VISTTYPE;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="RID" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html> 
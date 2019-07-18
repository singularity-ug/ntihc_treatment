

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
		header("Location:../sys_admin.php");
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

	<form NTIHCNO="form1" method="post" action="edit3.php">
		<table class="table table-bordered">
			<tr>				
				<td>NTIHCNO : <input type="text" name="NTIHCNO" value="" readonly="readonly"></td>
				<td>SERVICETYPE : <select name="SERVICETYPE" value="<?php echo $SERVICETYPE;?>">
                  <option value="<?php echo $SERVICETYPE;?>"> <?php echo $SERVICETYPE;?> </option>
                  <option value="MEDICAL SERVICES">MEDICAL SERVICES</option>
                  <option value="COUNSELLING SERVICES">COUNSELLING SERVICES</option>
                  <option value="PREGNANCY RELATED SERVICES">PREGNANCY RELATED SERVICES</option>
                   <option value="OTHER SERVICES">OTHER SERVICES</option>
               </select>
                </td>
				<td> VIST TYPE : <input type="text" name="VISTTYPE" value=""></td>
				<td> DATE : <input type="text" name="TIMESTAMP" value="<?php echo $TIMESTAMP;?>" readonly="readonly"></td>
				<td><input type="hidden" name="RID" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>			
		</table>
	</form>
</body>
</html>

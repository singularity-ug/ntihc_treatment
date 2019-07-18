

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['ID']);

	$DRUGNAME = mysqli_real_escape_string($mysqli, $_POST['DRUGNAME']);
	$CATEGORY = mysqli_real_escape_string($mysqli, $_POST['CATEGORY']);
	$STRENGTH = mysqli_real_escape_string($mysqli, $_POST['STRENGTH']);
	$UOM = mysqli_real_escape_string($mysqli, $_POST['UOM']);
	$UNIT_UOM = mysqli_real_escape_string($mysqli, $_POST['UNIT_UOM']); 
	$OPENINGSTOCK_QTY = mysqli_real_escape_string($mysqli, $_POST['OPENINGSTOCK_QTY']);
	$UNITPRICE = mysqli_real_escape_string($mysqli, $_POST['UNITPRICE']);
	$DISCONTINUED = mysqli_real_escape_string($mysqli, $_POST['DISCONTINUED']);
	 
	// checking empty fields
	if(empty($DRUGNAME) || empty($CATEGORY) || empty($STRENGTH) || empty($UOM) || empty($UNIT_UOM)  || empty($OPENINGSTOCK_QTY)       
	|| empty($UNITPRICE)  || empty($DISCONTINUED)) {

		if(empty($DRUGNAME)) {
			echo "<font color='red'>DRUGNAME field is empty.</font><br/>";
		}

		if(empty($CATEGORY)) {
			echo "<font color='red'>CATEGORY field is empty.</font><br/>";
		}

        if(empty($STRENGTH)) {
			echo "<font color='red'>STRENGTH field is empty.</font><br/>";
		}

		if(empty($UOM)) {
			echo "<font color='red'>ACTION field is empty.</font><br/>";
		}
		
		if(empty($UNIT_UOM)) {
			echo "<font color='red'>UNIT UOM field is empty.</font><br/>";
		}
		
		if(empty($OPENINGSTOCK_QTY)) {
			echo "<font color='red'>OPS_QTY field is empty.</font><br/>";
		}
		
		if(empty($UNITPRICE)) {
			echo "<font color='red'>VALUATION field is empty.</font><br/>";
		}
		
		if(empty($DISCONTINUED)) {
			echo "<font color='red'>LAPSE field is empty.</font><br/>";
		}
		
	} else { 

		$result = mysqli_query($mysqli, "UPDATE ntihcdrugs SET DRUGNAME='$DRUGNAME',CATEGORY='$CATEGORY',STRENGTH='$STRENGTH',UOM='$UOM' 
		,UNIT_UOM='$UNIT_UOM' ,OPENINGSTOCK_QTY='$OPENINGSTOCK_QTY' ,UNITPRICE='$UNITPRICE',DISCONTINUED='$DISCONTINUED' WHERE ID='$id'");
		;
		//redirectig to the display page.
		header("Location:../dispensing.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM ntihcdrugs WHERE ID=$id");

while($res = mysqli_fetch_array($result))
{
	$DRUGNAME = $res['DRUGNAME'];
	$CATEGORY = $res['CATEGORY'];
	$STRENGTH = $res['STRENGTH'];
	$UOM = $res['UOM'];
	$UNIT_UOM = $res['UNIT_UOM'];
	$OPENINGSTOCK_QTY = $res['OPENINGSTOCK_QTY'];
	$UNITPRICE = $res['UNITPRICE'];
	$DISCONTINUED = $res['DISCONTINUED'];
}

?>
 
</body>
</html>

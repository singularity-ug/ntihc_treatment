<?php
// including the database connection file
include_once("dbcon.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	$financialyear = mysqli_real_escape_string($mysqli, $_POST['financialyear']);
	$period = mysqli_real_escape_string($mysqli, $_POST['period']);
    $status = mysqli_real_escape_string($mysqli, $_POST['status']);

	 

		//redirectig to the display page. In our case, it is index.php
		header("Location:../../budget_mgr.php");
	} 
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM financialperiod WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$financialyear = $res['financialyear'];
	$period = $res['period'];
	$status = $res['status'];
}

?>


</body>
</html>

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']); 
	$REQUESTEDCREDIT = mysqli_real_escape_string($mysqli, $_POST['REQUESTEDCREDIT']);
	$CREDIT = mysqli_real_escape_string($mysqli, $_POST['CREDIT']); 

	// checking empty fields
	if(empty($REQUESTEDCREDIT) || empty($CREDIT)) {

		if(empty($REQUESTEDCREDIT)) {
			echo "<font color='red'>REQUESTEDCREDIT field is empty.</font><br/>";
		}

		 
		if(empty($CREDIT)) {
			echo "<font color='red'>CREDIT field is empty.</font><br/>";
		}
	} else {
	
		$result = mysqli_query($mysqli, "UPDATE imprest SET REQUESTEDCREDIT='$REQUESTEDCREDIT',
		CREDIT='$CREDIT' 
		WHERE id='$id'");
		;
		//redirectig to the display page. In our case, it is index.php
		header("Location:../../petty_cash.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$REQUESTEDCREDIT = $res['REQUESTEDCREDIT'];
	$CREDIT = $res['CREDIT']; 
}

?> 
</body>
</html> 
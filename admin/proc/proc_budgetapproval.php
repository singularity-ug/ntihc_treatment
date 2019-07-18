
<?php
// including the database connection file
include_once("dbcon.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['REQUISITIONID']);
	$VOTE_HEADNO = mysqli_real_escape_string($mysqli, $_POST['VOTE_HEADNO']);
	$CONFEXTENSION = mysqli_real_escape_string($mysqli, $_POST['CONFEXTENSION']);
	$AOPCOMMENT = mysqli_real_escape_string($mysqli, $_POST['AOPCOMMENT']);
	$AOACTION = mysqli_real_escape_string($mysqli, $_POST['AOACTION']);
	$AONAME = mysqli_real_escape_string($mysqli, $_POST['AONAME']);
	$AODATE = mysqli_real_escape_string($mysqli, $_POST['AODATE']);
	$AOTITLE = mysqli_real_escape_string($mysqli, $_POST['AOTITLE']);
	$AOPFNO = mysqli_real_escape_string($mysqli, $_POST['AOPFNO']);
	$AODEPT = mysqli_real_escape_string($mysqli, $_POST['AODEPT']);
	$JOBNUMBER = mysqli_real_escape_string($mysqli, $_POST['JOBNUMBER']);

	// checking empty fields
	if(empty($VOTE_HEADNO)) {

		if(empty($VOTE_HEADNO)) {
			echo "<font color='red'>BUDGET EXTENSION field is empty.</font><br/>";
		}

	} else {

	$result = mysqli_query($mysqli, "UPDATE procreqn SET
    VOTE_HEADNO='$VOTE_HEADNO',
		CONFEXTENSION='$CONFEXTENSION',
		AOPCOMMENT='$AOPCOMMENT',
		AOACTION='$AOACTION',
		AONAME='$AONAME',
		AODATE=NOW(),
		AOTITLE='$AOTITLE',
		AOPFNO='$AOPFNO',
		AODEPT='$AODEPT',
		JOBNUMBER='$JOBNUMBER'
		WHERE REQUISITIONID='$id'");
		;

		//redirectig to the display page. In our case, it is index.php
		header("Location:proc_approval.php");
	}
}
?>

</body>
</html>

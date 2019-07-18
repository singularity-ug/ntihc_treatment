
<?php
// including the database connection file
include_once("dbcon.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['REQUISITIONID']); 
	$SUBPROGRAMME = mysqli_real_escape_string($mysqli, $_POST['SUBPROGRAMME']);
	$VOTE_HEADNO = mysqli_real_escape_string($mysqli, $_POST['VOTE_HEADNO']);
	$PROGRAMME = mysqli_real_escape_string($mysqli, $_POST['PROGRAMME']);
    $ITEM = mysqli_real_escape_string($mysqli, $_POST['ITEM']);
	$FORWARDTO = mysqli_real_escape_string($mysqli, $_POST['FORWARDTO']);
	$BALANCEREMAINING = mysqli_real_escape_string($mysqli, $_POST['BALANCEREMAINING']);
	$CORCOMMENT = mysqli_real_escape_string($mysqli, $_POST['CORCOMMENT']);
	$CORACTION = mysqli_real_escape_string($mysqli, $_POST['CORACTION']);
	$CORNAME = mysqli_real_escape_string($mysqli, $_POST['CORNAME']);
	$CORDATE = mysqli_real_escape_string($mysqli, $_POST['CORDATE']);
	$CORTITLE = mysqli_real_escape_string($mysqli, $_POST['CORTITLE']);
	$CORDEPT = mysqli_real_escape_string($mysqli, $_POST['CORDEPT']);
	$CORPFNO = mysqli_real_escape_string($mysqli, $_POST['CORPFNO']);
	$FINANCIALYEAR = mysqli_real_escape_string($mysqli, $_POST['FINANCIALYEAR']);
	$JOBNUMBER = mysqli_real_escape_string($mysqli, $_POST['JOBNUMBER']);

	// checking empty fields
	if(empty($VOTE_HEADNO)) {

		if(empty($VOTE_HEADNO)) {
			echo "<font color='red'>BUDGET EXTENSION field is empty.</font><br/>";
		}

	} else {

		$result = mysqli_query($mysqli, "UPDATE procreqn SET
    VOTE_HEADNO='$VOTE_HEADNO',
    SUBPROGRAMME='$SUBPROGRAMME',
    PROGRAMME='$PROGRAMME',
		ITEM='$ITEM',
		FORWARDTO='$FORWARDTO',
		BALANCEREMAINING='$BALANCEREMAINING',
		CORCOMMENT='$CORCOMMENT',
		CORACTION='$CORACTION',
		CORNAME='$CORNAME',
		CORDATE=NOW(),
		CORTITLE='$CORTITLE',
		CORPFNO='$CORPFNO',
		CORDEPT='$CORDEPT', 
		FINANCIALYEAR='$FINANCIALYEAR',
		JOBNUMBER='$JOBNUMBER' 
		WHERE REQUISITIONID='$id'");
		;

		//redirectig to the display page. In our case, it is index.php
		header("Location:budget_desk.php");
	}
}
?>

</body>
</html>

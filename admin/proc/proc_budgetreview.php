
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
	$BALANCEREMAINING = mysqli_real_escape_string($mysqli, $_POST['BALANCEREMAINING']); 
	$FINANCIALYEAR = mysqli_real_escape_string($mysqli, $_POST['FINANCIALYEAR']); 
	$CONFEXTENSION = mysqli_real_escape_string($mysqli, $_POST['CONFEXTENSION']);
	$CONFCOMMENT = mysqli_real_escape_string($mysqli, $_POST['CONFCOMMENT']);
	$CONFSTATUS = mysqli_real_escape_string($mysqli, $_POST['CONFSTATUS']);
	$CONFNAME = mysqli_real_escape_string($mysqli, $_POST['CONFNAME']);
	$CONFDATE = mysqli_real_escape_string($mysqli, $_POST['CONFDATE']);
	$CONFTITLE = mysqli_real_escape_string($mysqli, $_POST['CONFTITLE']); 
	$CONFPFNO = mysqli_real_escape_string($mysqli, $_POST['CONFPFNO']);
	$CONFDEPT = mysqli_real_escape_string($mysqli, $_POST['CONFDEPT']);
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
		BALANCEREMAINING='$BALANCEREMAINING',
		FINANCIALYEAR='$FINANCIALYEAR',
		CONFEXTENSION='$CONFEXTENSION',
		CONFCOMMENT='$CONFCOMMENT',
		CONFSTATUS='$CONFSTATUS',
		CONFNAME='$CONFNAME',
		CONFDATE=NOW(),
		CONFTITLE='$CONFTITLE',
		CONFPFNO='$CONFPFNO',
		CONFDEPT='$CONFDEPT', 
		JOBNUMBER='$JOBNUMBER'  
		WHERE REQUISITIONID='$id'");
		;

		//redirectig to the display page. In our case, it is index.php
		header("Location:proc_review.php");
	}
}
?>

</body>
</html>

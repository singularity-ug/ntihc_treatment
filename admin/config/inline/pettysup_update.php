 
<?php
// including the database connection file
include_once("dbcon.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	$BUDGETLINE = mysqli_real_escape_string($mysqli, $_POST['BUDGETLINE']);
	$BUDGETDETAILS = mysqli_real_escape_string($mysqli, $_POST['BUDGETDETAILS']); 
	$CODE = mysqli_real_escape_string($mysqli, $_POST['CODE']); 
    $AUTHACTION = mysqli_real_escape_string($mysqli, $_POST['AUTHACTION']); 
	$FORWARDTO = mysqli_real_escape_string($mysqli, $_POST['FORWARDTO']); 
	$IMPAUTHCOMMENT = mysqli_real_escape_string($mysqli, $_POST['IMPAUTHCOMMENT']); 
	$IMPAUTHORISEDBY = mysqli_real_escape_string($mysqli, $_POST['IMPAUTHORISEDBY']); 
	$IMPAUTHORISERNAME = mysqli_real_escape_string($mysqli, $_POST['IMPAUTHORISERNAME']); 
	$IMPAUTHORISEDDATE = mysqli_real_escape_string($mysqli, $_POST['IMPAUTHORISEDDATE']); 
	$IMPAUTHPFNUMBER = mysqli_real_escape_string($mysqli, $_POST['IMPAUTHPFNUMBER']); 
	$IMPAUTHDEPARTMENT = mysqli_real_escape_string($mysqli, $_POST['IMPAUTHDEPARTMENT']); 
	
	// checking empty fields
	if(empty($BUDGETDETAILS)) {

		if(empty($BUDGETDETAILS)) {
			echo "<font color='red'>BUDGET EXTENSION field is empty.</font><br/>";
		} 
 
	} else {
	
		$result = mysqli_query($mysqli, "UPDATE imprest SET BUDGETDETAILS='$BUDGETDETAILS',BUDGETLINE='$BUDGETLINE',CODE='$CODE',
		AUTHACTION='$AUTHACTION',
		FORWARDTO='$FORWARDTO',
		IMPAUTHCOMMENT='$IMPAUTHCOMMENT',
		IMPAUTHORISEDBY='$IMPAUTHORISEDBY',
		IMPAUTHORISERNAME='$IMPAUTHORISERNAME',
		IMPAUTHORISEDDATE='$IMPAUTHORISEDDATE',
		IMPAUTHPFNUMBER='$IMPAUTHPFNUMBER', 
		IMPAUTHDEPARTMENT='$IMPAUTHDEPARTMENT'  
		WHERE id='$id'");
		; 
		
		//redirectig to the display page. In our case, it is index.php
		header("Location:../../pettycash_sup.php");
	}
}
?>
 
</body>
</html>

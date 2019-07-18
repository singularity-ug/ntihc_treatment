 
<?php
// including the database connection file
include_once("dbcon.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	$BUDGETLINE = mysqli_real_escape_string($mysqli, $_POST['BUDGETLINE']);
	$CODE = mysqli_real_escape_string($mysqli, $_POST['CODE']); 
    $APPROACTION = mysqli_real_escape_string($mysqli, $_POST['APPROACTION']);   
	$FINALREDIRECTION = mysqli_real_escape_string($mysqli, $_POST['FINALREDIRECTION']); 
	$IMPAPPROVERNAME = mysqli_real_escape_string($mysqli, $_POST['IMPAPPROVERNAME']); 
	$IMPAPPROVERTITTLE = mysqli_real_escape_string($mysqli, $_POST['IMPAPPROVERTITTLE']); 
	$IMPAPPROVEDDATE = mysqli_real_escape_string($mysqli, $_POST['IMPAPPROVEDDATE']); 
	$APPROVERCOMMENT = mysqli_real_escape_string($mysqli, $_POST['APPROVERCOMMENT']); 
	$APPROVERPFNUMBER = mysqli_real_escape_string($mysqli, $_POST['APPROVERPFNUMBER']); 
	$APPROVERDEPARTMENT = mysqli_real_escape_string($mysqli, $_POST['APPROVERDEPARTMENT']); 
	
	// checking empty fields
	if(empty($APPROVERCOMMENT)) {

		if(empty($APPROVERCOMMENT)) {
			echo "<font color='red'>COMMENT TO field is empty.</font><br/>";
		} 
 
	} else {
	
		$result = mysqli_query($mysqli, "UPDATE imprest SET BUDGETLINE='$BUDGETLINE',CODE='$CODE',
		APPROACTION='$APPROACTION', 
		FINALREDIRECTION='$FINALREDIRECTION', 
		IMPAPPROVERNAME='$IMPAPPROVERNAME',
		IMPAPPROVERTITTLE='$IMPAPPROVERTITTLE',
		IMPAPPROVEDDATE='$IMPAPPROVEDDATE',
		APPROVERCOMMENT='$APPROVERCOMMENT',
		APPROVERPFNUMBER='$APPROVERPFNUMBER', 
		APPROVERDEPARTMENT='$APPROVERDEPARTMENT'  
		WHERE id='$id'");
		; 
		
		//redirectig to the display page. In our case, it is index.php
		header("Location:../../pettycash_fin.php");
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
	$BUDGETLINE = $res['BUDGETLINE'];
	$CODE = $res['CODE']; 
}

?>

 
</body>
</html>

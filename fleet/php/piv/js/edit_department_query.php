<?php
include('connect.php');

if(isset($_POST['update'])) {
	$dept_id = $_POST['dept_id']; 
	$dept_name = $_POST['dept_name'];

	$update = $con->prepare("UPDATE tbl_department SET dept_name = ? WHERE dept_id = ?");
	$update->execute(array($dept_name, $dept_id));
	header('location:department_table.php');

}
?>
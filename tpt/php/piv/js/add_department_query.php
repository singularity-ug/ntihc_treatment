<?php
include('connect.php');
if(isset($_POST['save'])) {
	$dept_name = $_POST['dept_name'];

	$add_personnel = $con->prepare("INSERT INTO tbl_department (dept_name) VALUES (?)");
	$add_personnel->execute(array($dept_name));
	header('location:department_table.php');
}
?>
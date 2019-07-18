<?php
include('connect.php');

$id = $_GET['dept_id'];
	$delete = $con->prepare("DELETE FROM tbl_department WHERE dept_id = '$id'");
	$delete->execute();
	header('location:department_table.php');
?>
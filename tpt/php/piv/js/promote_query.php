<?php
include('connect.php');

if(isset($_POST['update'])) {
	$per_id = $_POST['per_id'];
	$pos_name = $_POST['per_position'];
	$rank_name = $_POST['per_rank'];
	$per_designation = $_POST['per_designation'];

	$update = $con->prepare("UPDATE tbl_personnel SET pos_id = ?, rank_id = ?, per_designation = ? WHERE per_id = ?");
	$update->execute(array($pos_name, $rank_name, $per_designation, $per_id));
	header('location:promotion_table.php');
	}
?>
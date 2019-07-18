<?php
include('connect.php');

$id = $_GET['pos_id'];
	$delete = $con->prepare("DELETE FROM tbl_position WHERE pos_id = '$id'");
	$delete->execute();
	header('location:position_table.php');
?>
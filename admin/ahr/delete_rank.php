<?php
include('connect.php');

$id = $_GET['rank_id'];
	$delete = $con->prepare("DELETE FROM tbl_academic_rank WHERE rank_id = '$id'");
	$delete->execute();
	header('location:rank_table.php');
?>
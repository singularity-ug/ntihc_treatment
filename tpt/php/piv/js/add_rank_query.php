<?php
include('connect.php');
if(isset($_POST['save'])) {
	$rank_name = $_POST['rank_name'];


	$add_personnel = $con->prepare("INSERT INTO tbl_academic_rank (rank_name) VALUES (?)");
	$add_personnel->execute(array($rank_name));
	header('location:home.php');
}
?>
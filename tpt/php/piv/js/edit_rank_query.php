<?php
include('connect.php');

if(isset($_POST['update'])) {
	$rank_id = $_POST['rank_id']; 
	$rank_name = $_POST['rank_name'];

	$add_personnel = $con->prepare("UPDATE tbl_academic_rank SET rank_name = ? WHERE rank_id = ?");
	$add_personnel->execute(array($rank_name, $rank_id));
	header('location:rank_table.php');

}
?>
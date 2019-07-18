<?php
include('connect.php');
if(isset($_POST['save'])) {
	$gass_name = $_POST['gass_name'];


	$add_personnel = $con->prepare("INSERT INTO tbl_gass_rank (gass_name) VALUES (?)");
	$add_personnel->execute(array($gass_name));
	header('location:gass_rank_table.php');
}
?>
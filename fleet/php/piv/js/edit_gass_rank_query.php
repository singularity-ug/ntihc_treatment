<?php
include('connect.php');

if(isset($_POST['update'])) {
	$gass_id = $_POST['gass_id']; 
	$gass_name = $_POST['gass_name'];

	$add_personnel = $con->prepare("UPDATE tbl_gass_rank SET gass_name = ? WHERE gass_id = ?");
	$add_personnel->execute(array($gass_name, $gass_id));
	header('location:gass_rank_table.php');

}
?>
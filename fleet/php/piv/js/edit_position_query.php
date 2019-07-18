<?php
include('connect.php');

if(isset($_POST['update'])) {
	$pos_id = $_POST['pos_id']; 
	$pos_name = $_POST['pos_name'];

	$add_personnel = $con->prepare("UPDATE tbl_position SET pos_name = ? WHERE pos_id = ?");
	$add_personnel->execute(array($pos_name, $pos_id));
	header('location:position_table.php');

}
?>
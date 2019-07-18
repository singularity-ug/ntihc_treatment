<?php
include('connect.php');
if(isset($_POST['save'])) {
	$pos_name = $_POST['pos_name'];


	$add_personnel = $con->prepare("INSERT INTO tbl_position (pos_name) VALUES (?)");
	$add_personnel->execute(array($pos_name));
	header('location:position_table.php');
}
?>
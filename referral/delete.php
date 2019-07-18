<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from referral where RID='$id'");
	header('location:index.php');

?>
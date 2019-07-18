<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from prescription where DID='$id'");
	header('location:client_medical_prescription.php');

?>
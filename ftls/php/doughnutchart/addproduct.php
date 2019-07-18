<?php
	$conn = new mysqli("localhost", "root", "toor2", "pie");
 
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$category=$_POST['category'];
	$pname=$_POST['pname'];

	$sql="insert into product (catid, prodname) values ('$category', '$pname')";
	$conn->query($sql);

	header('location:index.php');
?>
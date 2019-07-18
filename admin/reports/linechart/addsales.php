<?php
	$conn = new mysqli("localhost", "root", "", "chartjs");
 
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$amount=$_POST['amount'];
	$sales_date=$_POST['sales_date'];

	$sql="insert into sales (amount, sales_date) values ('$amount', '$sales_date')";
	$conn->query($sql);

	header('location:index.php');
?>
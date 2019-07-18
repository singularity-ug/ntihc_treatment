<?php
	$conn = new mysqli("localhost", "root", "toor2", "pie");
 
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	//$cat = array();

	//for Samsung
	$sql="select * from product left join category on category.catid=product.catid where product.catid='1'";
	$query=$conn->query($sql);
	$samsung = $query->num_rows;

	//for Apple
	$sql="select * from product left join category on category.catid=product.catid where product.catid='2'";
	$aquery=$conn->query($sql);
	$apple = $aquery->num_rows;

	//for Vivo
	$sql="select * from product left join category on category.catid=product.catid where product.catid='3'";
	$vquery=$conn->query($sql);
	$vivo = $vquery->num_rows;

	//for Sony
	$sql="select * from product left join category on category.catid=product.catid where product.catid='4'";
	$squery=$conn->query($sql);
	$sony = $squery->num_rows;

	//for Nokia
	$sql="select * from product left join category on category.catid=product.catid where product.catid='5'";
	$nquery=$conn->query($sql);
	$nokia = $nquery->num_rows;

?>
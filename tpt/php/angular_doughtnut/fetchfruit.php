<?php

	$conn = new mysqli("localhost", "root", "toor2", "fleet");

	$out = array();

	$sql = "SELECT * FROM vehtype";
	$query = $conn->query($sql);

	while($row=$query->fetch_array()){
	    $out[] = $row;
	}

	echo json_encode($out);

?>
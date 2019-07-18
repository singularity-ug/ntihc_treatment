<?php

	$conn = new mysqli("localhost", "root", "toor2", "angular");

	$out = array('error' => false);

	$data = json_decode(file_get_contents("php://input"));

	$fruitid = $data->fruitid;
	$amount = $data->amount;

	$sql = "INSERT INTO sales (fruitid, amount) VALUES ('$fruitid', '$amount')";
	$query = $conn->query($sql);

	if($query){
		$out['message'] = "Purchase added successfully";
	}
	else{
		$out['error'] = true;
		$out['message'] = "Cannot add purchase"; 
	}

	echo json_encode($out);

?>
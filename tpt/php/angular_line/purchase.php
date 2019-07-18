<?php

	$conn = new mysqli("localhost", "root", "toor2", "angular");

	$out = array('error' => false);

	$data = json_decode(file_get_contents("php://input"));

	$amount = $data->amount;
	$date = $data->date;

	$sql = "INSERT INTO sales (amount, sale_date) VALUES ('$amount', '$date')";
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
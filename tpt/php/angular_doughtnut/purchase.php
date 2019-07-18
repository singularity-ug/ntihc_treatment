<?php

	$conn = new mysqli("localhost", "root", "toor2", "fleet");

	$out = array('error' => false);

	$data = json_decode(file_get_contents("php://input"));

	$vehid = $data->vehid;
	$TYPE = $data->TYPE;

	$sql = "INSERT INTO motorisedequipments (vehid, TYPE) VALUES ('$vehid', '$TYPE')";
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
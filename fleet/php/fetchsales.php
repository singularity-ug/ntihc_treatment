<?php

	$conn = new mysqli("localhost", "root", "toor2", "fleet");

	//set timezone
	//date_default_timezone_set('Asia/Manila');

	$year = date('Y'); //2018
	$prev = $year - 1;

	$out = array();

	for ($month = 1; $month <= 12; $month ++){
		$sql="SELECT sum(TOTALAMOUNT) AS total FROM fuellogs WHERE month(FUELISSUANCEDATE)='$month' AND year(FUELISSUANCEDATE)='$year' and FUELISSUANCESTATUS = 'ISSUED'";
		$query=$conn->query($sql);
		$row=$query->fetch_array();

		$out['year'][]=$row['total'];
	}

	for ($month = 1; $month <= 12; $month ++){
		$sql="SELECT sum(TOTALAMOUNT) AS total FROM fuellogs WHERE month(FUELISSUANCEDATE)='$month' AND year(FUELISSUANCEDATE)='$prev' and FUELISSUANCESTATUS = 'ISSUED'";
		$pquery=$conn->query($sql);
		$prow=$pquery->fetch_array();

		$out['prev'][]=$prow['total'];
	}

	echo json_encode($out);

?>
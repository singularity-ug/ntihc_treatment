<?php
	$conn = new mysqli("localhost", "root", "toor2", "patientmgt");
 
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	//$cat = array();

	//for Samsung
	$sql="select * from tollfree where DISTRICT='KAMPALA' AND DIVISION='CENTRAL'";
	$query=$conn->query($sql);
	$Central = $query->num_rows;

	//for Apple
	$sql="select * from tollfree where DISTRICT='KAMPALA' AND DIVISION='LUBAGA'";
	$aquery=$conn->query($sql);
	$Lubaga = $aquery->num_rows;

	//for Vivo
	$sql="select * from tollfree where DISTRICT='KAMPALA' AND DIVISION='NAKAWA'";
	$vquery=$conn->query($sql);
	$Nakawa = $vquery->num_rows;

	//for Sony
	$sql="select * from tollfree where DISTRICT='KAMPALA' AND DIVISION='MAKINDYE'";
	$squery=$conn->query($sql);
	$Makindye = $squery->num_rows;

	//for Nokia
	$sql="select * from tollfree where DISTRICT='KAMPALA' AND DIVISION='KAWEMPE'";
	$nquery=$conn->query($sql);
	$Kawempe = $nquery->num_rows;

?>
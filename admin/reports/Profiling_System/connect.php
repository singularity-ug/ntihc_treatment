<?php 
	$host = "localhost";
	$user = "root";
	$pass = "toor2";

	try {
		$con = new PDO("mysql:host=$host;dbname=patientmgt", $user, $pass);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'Connection Failed:' . $e->getMessage();
	}
?>
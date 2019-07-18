<?php
	session_start();
	$_SESSION["login-failed"] = "no";
	$_SESSION["reg-failed"] = 0;
	$_SESSION["fname"] = "";
	$_SESSION["reg-success"] = "no"; 
	
	header("Location: login.php");
?>
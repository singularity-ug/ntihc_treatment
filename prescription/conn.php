<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","toor2","patientmgt");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>
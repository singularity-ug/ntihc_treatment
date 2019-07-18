<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	exit();
}
?>

<?php
include("connect.php");

$msg = $_REQUEST["txtarea"];

session_start();
$userid = $_SESSION["userid"];
$date = date("g:i a");

$send = mysql_query("INSERT INTO chattb VALUES('','$userid','$msg','$date') ");

if($send)
{
	header("Location: home.php");
}

?>
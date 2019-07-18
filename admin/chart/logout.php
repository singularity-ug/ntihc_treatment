<?php
include("connect.php");

$_SESSION['fname'] = "";
session_destroy();

header("Location: index.php");
?>
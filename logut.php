<?php
session_start();
if(isset($_SESSION["access_level"]) && $_SESSION["access_level"]==1){
 echo "Hello ".$_SESSION["id"]." This is the auth page.<br/><a href='logout.php'>Logout</a>";
 }
else{
 header("Location: http://localhost/ntihc/index.php");
 }
?>
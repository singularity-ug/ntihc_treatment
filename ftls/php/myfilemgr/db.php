<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>

<?php 
$db = mysql_connect("localhost","root","toor2") or die ("Unable to connect to Localhost");
mysql_select_db("fleet") or die ("Could not select the database."); 
?>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php
$con = mysql_connect("localhost","root","toor2");
$db = mysql_select_db("echatdb") or die("Cant connect to DB");
?>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php
mysql_select_db('fleet',mysql_connect('localhost','root','toor2'))or die(mysql_error());
?>
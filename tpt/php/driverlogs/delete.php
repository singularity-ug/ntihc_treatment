<?php 

include('db.php');

$get_id=$_GET['student_id'];

mysql_query("delete from student where student_id = '$get_id' ")or die(mysql_error());
header('location:index.php');
?>
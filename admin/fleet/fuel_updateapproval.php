<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);

$opt = trim($_POST['ARNAME']);
$sp  = trim($_POST['ORDERNO']);
$db  = trim($_POST['ARBY']);
$cmt = trim($_POST['ARCOMMENT']);
$apx = trim($_POST['APPROVALSTATUS']);
$rdet = trim($_POST['ARDATE']);
$op  = '';
    
$conn->query("UPDATE fuellogs SET APPROVALSTATUS='$apx', ARNAME='$opt', ARBY='$db', ARCOMMENT='$cmt', ARDATE=NOW() WHERE ORDERNO='$sp'");

}
   header("location:fuel_mgt.php");
exit();
?> 
 
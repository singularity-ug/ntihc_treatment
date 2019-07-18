<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);

$opt = trim($_POST['APPROVERTITLE']);
$sp  = trim($_POST['ORDERNO']);
$db  = trim($_POST['APPROVEDBYNAME']);
$cmt = trim($_POST['APPROVALDATE']);
$apx = trim($_POST['APPROVERCOMMENT']);
$rdet = trim($_POST['APPROVERDEPT']);
$fuco = trim($_POST['APPROVALSTATUS']);
$op  = '';
    
$conn->query("UPDATE fuellogs SET APPROVERCOMMENT='$apx', APPROVERTITLE='$opt', APPROVEDBYNAME='$db', APPROVALDATE='$cmt', 
                              APPROVERDEPT='$rdet', APPROVALSTATUS='$fuco' WHERE ORDERNO='$sp'");

}
   header("location:../fuel_approve.php");
exit();
?> 
 
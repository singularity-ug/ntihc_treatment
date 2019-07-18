<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);

$opt = trim($_POST['RVDNAME']);
$sp  = trim($_POST['ORDERNO']);
$db  = trim($_POST['RVDBY']);
$cmt = trim($_POST['RVWERCOMMENT']);
$apx = trim($_POST['REVIEWFUEL']);
$rdet = trim($_POST['RVDDATE']);
$op  = '';
    
$conn->query("UPDATE fuellogs SET REVIEWFUEL='$apx', RVDNAME='$opt', RVDBY='$db', RVWERCOMMENT='$cmt',  
                                  RVDDATE=NOW() WHERE ORDERNO='$sp'");

}
   header("location:../fuel_review.php");
exit();
?>  
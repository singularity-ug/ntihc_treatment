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
$apx = trim($_POST['AUTHORIZATIONSTATUS']);
$rdet = trim($_POST['ARDATE']);
$ford  = trim($_POST['FORWARDTO']); 
$autde  = trim($_POST['AUTHDEPT']); 
 
$op  = '';
    
$conn->query("UPDATE fuellogs SET AUTHORIZATIONSTATUS='$apx', ARNAME='$opt', ARBY='$db', ARCOMMENT='$cmt', FORWARDTO='$ford', AUTHDEPT='$autde', ARDATE=NOW() WHERE ORDERNO='$sp'");

}
   header("location:../fuel_authorise.php");
exit();
?>    
 
<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);

$opt = trim($_POST['DISPENSESTATUS']);
$sp  = trim($_POST['SERVICE_EPISODE']);
$db  = trim($_POST['DISPENSEDBY']);
$cmt = trim($_POST['COMMENT']);
$tout = trim($_POST['TIMEOUT']);
$op  = '';
    
$conn->query("UPDATE prescription SET CHECKAVAILABILITY ='YES', ENTRYSTATUS ='PROCESSED', DISPENSESTATUS='$opt', DISPENSEDBY='$db', COMMENT='$cmt', TIMEOUT='$tout' WHERE SERVICE_EPISODE='$sp'");

}
   header("location:client_dispenser.php");
exit();
?>  
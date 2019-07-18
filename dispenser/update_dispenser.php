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
$op  = '';
    
$conn->query("UPDATE prescription SET CHECKAVAILABILITY ='YES' ,DISPENSESTATUS='$opt', DISPENSEDBY='$db', COMMENT='$cmt' WHERE SERVICE_EPISODE='$sp'");

}
   header("location:drugs_mgr.php");
exit();
?> 
 
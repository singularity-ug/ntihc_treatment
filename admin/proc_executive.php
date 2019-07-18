<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['id'])){
$op = ''; $id = trim($_POST['id']);
if(trim($_POST['op'])=='1'){ $op ="REJECTED";} else{$op ="APPROVED";}
     $conn->query("UPDATE procreqn SET AOACTION ='$op' WHERE id='$id' AND CORACTION ='AUTHORISED'");
}

exit();
?> 

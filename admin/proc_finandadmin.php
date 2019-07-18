<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['id'])){
$op = ''; $id = trim($_POST['id']);
if(trim($_POST['op'])=='1'){ $op ="REJECTED";} else{$op ="AUTHORISED";}
     $conn->query("UPDATE procreqn SET CORACTION ='$op' WHERE id='$id' AND RFPDEPARTMENT ='FINANCE AND ADMINISTRATION'");
}

exit();
?> 

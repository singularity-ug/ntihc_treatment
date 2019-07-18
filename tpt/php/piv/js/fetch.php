<?php 
include('connect.php');

$fetch = $con->prepare("SELECT * FROM tbl_personnel ORDER BY per_id");
$fetch->execute();
while($row = $fetch->fetch()) {
    $id = $row['per_id'];
    $name = $row['per_firstname'];
}
?>
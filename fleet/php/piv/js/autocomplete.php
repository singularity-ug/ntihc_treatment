<?php 
    include('connect.php');
    $stmt = $con->prepare("SELECT per_firstname, per_lastname FROM tbl_personnel");
    $stmt->execute();
    $stmt->bind_result($per_firstname, $per_lastname);
    while ($stmt->fetch()) {
       $arr[] = $per_firstname, $per_lastname;
    }
    echo json_encode($arr);
?>
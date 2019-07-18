<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['PID'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM cmpatientsnewregistration WHERE PID=$id");

//redirecting to the display page (index.php in our case)
header("Location:../registration_desk.php");
?>

<?php
//including the database connection file
include("confighr.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM sys_users WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:../sys_admin.php");
?>


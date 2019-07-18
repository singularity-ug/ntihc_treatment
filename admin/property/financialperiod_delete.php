<?php
//including the database connection file
include("dbcon.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM financialperiod WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:asset_config.php");
?>


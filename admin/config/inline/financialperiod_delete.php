<?php
//including the database connection file
include("configdmultiple.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM financialperiod WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:../../budget_mgr.php");
?>


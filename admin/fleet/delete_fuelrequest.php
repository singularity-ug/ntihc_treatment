<?php
//including the database connection file
include("connect/configftl.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM fuellogs WHERE SERIALNO=$id");

//redirecting to the display page (index.php in our case)
header("Location:fuel_requests.php");
?> 
 <?php
//including the database connection file
include("config_sup.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM contracts WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:../contracts.php");
?>


 <?php
//including the database connection file
include("config_ahr.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM staffcontacts WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:../home_hrmgt.php");
?>

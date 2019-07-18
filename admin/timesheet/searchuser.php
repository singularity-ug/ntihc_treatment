<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr";

$bd   = $_POST['bd']; 
$idxx = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM user_table WHERE  Email LIKE '%$bd%' AND authorizationrights = 'GRANTED'";
 
$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['Email'].'__'.$row['First_Name'].'  '.$row['Last_Name'].'__'.$row['Description'];

    $st=$st.'<a  style="margin-left:0%; font-family:lcd;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['Email'].' </i> &nbsp;&nbsp;&nbsp;<b> 
		'.$row['First_Name'].'  '.$row['Description'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


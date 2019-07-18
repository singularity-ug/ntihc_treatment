<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "procurement";

$bd   = $_POST['bd']; 
$idxx = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM frameworkdetails WHERE  FRAMEWORKDETAILS LIKE '%$bd'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['FRAMEWORKDETAILS'].'__'.$row['id'].'__'.$row['CODE'];

    $st=$st.'<a  style="margin-left:0%" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['FRAMEWORKDETAILS'].' </i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['id'].'  '.$row['CODE'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


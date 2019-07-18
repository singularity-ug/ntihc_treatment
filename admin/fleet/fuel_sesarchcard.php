<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

$bd   = $_POST['bd']; 
$idxx = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM fuelcards WHERE  Fuelcardname LIKE '%$bd%'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['Fuelcardname'].'__'.$row['fuelvailable'];

    $st=$st.'<a  style="margin-left:0%;font-size: 12px;height: 30px; font-family:lcd;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['Fuelcardname'].' </i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['fuelvailable'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


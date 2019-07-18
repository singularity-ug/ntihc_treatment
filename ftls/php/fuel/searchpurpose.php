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
$sql="SELECT * FROM purposecategory WHERE PURPOSE LIKE '%$bd%'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['PURPOSE'].'__'.$row['SOURCEOFFUND'];

    $st=$st.'<a  style="margin-left:0%" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['PURPOSE'].' </i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['SOURCEOFFUND'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


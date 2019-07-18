<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement";

$bd   = $_POST['bd']; 
$idxx = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM items WHERE  DESCRIPTION LIKE '%$bd%'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['DESCRIPTION'].'__'.$row['UNITOFMEASURE'].'__'.$row['CATEGORY'];

    $st=$st.'<a  style="margin-left:0%;font-size: 12px;height: 30px;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['CATEGORY'].' </i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['DESCRIPTION'].'  '.$row['UNITOFMEASURE'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


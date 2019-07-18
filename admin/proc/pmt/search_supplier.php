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
$sql="SELECT * FROM suppliers WHERE SERVICEPROVIDER LIKE '%$bd%'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['SERVICEPROVIDER'].'__'.$row['BOXNUMBER'].'__'.$row['PHYSICALLOCATION'];

    $st=$st.'<a  style="margin-left:0%; font size:10px;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['SERVICEPROVIDER'].' '.$row['BOXNUMBER'].'</i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['PHYSICALLOCATION'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


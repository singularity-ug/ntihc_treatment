<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "pcms";

$bdem   = $_POST['bdem']; 
$idxxem = $_POST['id2'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM water WHERE meterno LIKE '%$bdem%'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxxem.'__'.$row['meterno'].'__'.$row['accountno'].'__'.$row['property'].'__'.$row['previousunits'].'__'.$row['previouspmt'];

    $st=$st.'<a  style="margin-left:0%; font size:10px;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['meterno'].' '.$row['accountno'].'</i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['property'].'  '.$row['previousunits'].'  '.$row['previouspmt'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

$bd   = $_POST['bd']; 
$idxx = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM tollfree WHERE  PHONECONTACT LIKE '%$bd%' LIMIT 50";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['PHONECONTACT'].'__'.$row['FIRSTNAME'];

    $st=$st.'<a  style="margin-left:0%; font-size:10px;line-height: 0px;font-family:ariel;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['PHONECONTACT'].' &nbsp; '.$row['FIRSTNAME'].'</b></a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


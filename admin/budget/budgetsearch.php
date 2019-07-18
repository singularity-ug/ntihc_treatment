<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmultiple";

$bd   = $_POST['bd']; 
$idxx = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM budgetconfig WHERE  budgetdetails LIKE '%$bd%'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['budgetdetails'].'__'.$row['detailscode'].'__'.$row['budgetline'].'__'.$row['code'].'__'.$row['Costdescription'].'__'.$row['programme'].'__'.$row['programecode'];

    $st=$st.'<a  style="margin-left:0%" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['budgetdetails'].' </i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['detailscode'].'  '.$row['budgetline'].'  '.$row['code'].'  '.$row['Costdescription'].' '.$row['programme'].'  '.$row['programecode'].'</a>';

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


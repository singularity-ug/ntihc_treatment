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
$sql="SELECT * FROM humanresource WHERE  FIRSTNAME LIKE '%$bd%' AND ACCESSTOFLEETOPERATIONS = 'ENABLED'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['FIRSTNAME'].' '.$row['LASTNAME'].' '.$row['OTHERNAME'].'  __'.$row['MOBILEPHONE'].'__'.$row['WORKPHONENO'].'__'.$row['ENTITYEMAILACCOUNT']
	.'__'.$row['TITLE'].'__'.$row['DEPARTMENT'];

    $st=$st.'<a  style="margin-left:0%" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['FIRSTNAME'].' '.$row['LASTNAME'].'</i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['MOBILEPHONE'].'  '.$row['WORKPHONENO'].' '.$row['ENTITYEMAILACCOUNT'].'  '.$row['TITLE'].' '.$row['DEPARTMENT'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


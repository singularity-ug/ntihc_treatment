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
$sql="SELECT * FROM ntihcdrugs WHERE  DRUGNAME LIKE '%$bd%' ORDER BY DRUGNAME ASC";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['DRUGNAME'].'__'.$row['BOOKIN'].'__'.$row['ID'].'__'.$row['CATEGORY'];

    $st=$st.'<a  style="margin-left:0% font-size:10px" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['DRUGNAME'].' </i> &nbsp;&nbsp;&nbsp;<b>  &nbsp; <b style="color:blue;font-weight:normal;">BOOK-IN:</b>&nbsp;
		'.$row['BOOKIN'].' &nbsp; <b style="color:green; font-weight:normal;">CATEGORY:</b>&nbsp;'.$row['CATEGORY'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


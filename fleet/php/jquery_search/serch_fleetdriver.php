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
$sql="SELECT * FROM motorisedequipments WHERE  REGISTRATIONNO LIKE '%$bd%' AND AVAILABILITYDISPOSAL = 'AVAILABLE' AND VEHICLEALLOCATIONSTATUS = 'ALLOCATED'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['REGISTRATIONNO'].'__'.$row['TYPE'].'__'.$row['DRIVERALLOCATED'].'__'.$row['DRIVERMOBILENO']
	.'__'.$row['DRIVERWORKEXT'].'__'.$row['DRIVERTITLE'].'__'.$row['DRIVERENTITYEMAIL'].'__'.$row['CONSUMPTIONPERKM'].'__'.$row['RECENTFUELCOSTPERLITER'];

    $st=$st.'<a  style="margin-left:0%; font-size:10px;line-height: 0px;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['REGISTRATIONNO'].' &nbsp;'.$row['TYPE'].' </a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


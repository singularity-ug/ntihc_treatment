<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

$pn = $_POST['pn'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM tollfree WHERE  FIRSTNAME LIKE '%$fn%' AND LASTNAME LIKE '%$ln%'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $row['PHONECONTACT'].'__'.$row['FIRSTNAME'].' '.$row['LASTNAME'].'__'.$row['SEX'].'__'.$row['AGE'];
    $impt= $impt.'__'.$row['SCHOOLINGSTATUS'].'__'.$row['LEVEL_EDUCATION'].'__'.$row['MARITALSTATUS'].'__'.$row['EMPLOYMENTSTATUS'];
    $impt= $impt.'__'.$row['DISTRICT'].'__'.$row['DIVISION'].'__'.$row['PLACEOFRESIDENCE'].'__'.$row['LIVING_WITH'];
    $impt= $impt.'__'.$row['HEAREDABOUTNTIHC'].'__'.$row['HOWDIDYOUKNOABOUTTHISNO'];

    $st=$st.'<a  style="margin-left:0%" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['PHONECONTACT'].' </i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['FIRSTNAME'].'  '.$row['LASTNAME'].
        ' </b> &nbsp;&nbsp;'.$row['SEX'].
        ' &nbsp;&nbsp;&nbsp;<u> '.$row['AGE'].
        ' </u>&nbsp;&nbsp;'.$row['DISTRICT'].'</a>';

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>

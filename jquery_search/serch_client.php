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
$sql="SELECT *,AGE,CURDATE(), TIMESTAMPDIFF(YEAR,AGE,CURDATE()) AS age  FROM cmpatientsnewregistration WHERE  NTIHCNO LIKE '%$bd%' LIMIT 50";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['NTIHCNO'].'__'.$row['LASTNAME'].'  '.$row['FIRSTNAME'].'__'.$row['PID']
	.'__'.$row['age'].'__'.$row['REVEXT'].'__'.$row['SCHOOLINGSTATUS'].'__'.$row['PHONECONTACT']
	.'__'.$row['MOTHERFIRSTNAME'].'__'.$row['MOTHERLASTNAME'].'__'.$row['SEX'];

    $st=$st.'<a  style="margin-left:0%; font-size:10px;line-height: 0px;font-family:ariel;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['NTIHCNO'].' &nbsp; '.$row['LASTNAME'].' '.$row['FIRSTNAME']
		.'&nbsp;&nbsp;<b style="color:blue">Age:</b>&nbsp;<b style="color:red">'.$row['age'].'</b> 
		&nbsp;;&nbsp;<b style="color:blue">Mother:</b>&nbsp;<b style="color:red"> '.$row['MOTHERFIRSTNAME'].' </b></a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


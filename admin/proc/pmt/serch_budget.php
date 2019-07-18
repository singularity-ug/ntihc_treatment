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
$sql="SELECT * ,(FIRSTQTR-FIRSTQTROB) AS fir,(SECONDQTR-SECONDQTROB) AS sec,
                (THIRDQTR-THIRDQTROB) AS thr, (FOURTHQTR-FOUTHQTROB) AS fou,
				(BUDGETAMOUNT-TOTALROB) AS tot FROM procplanning WHERE PLANDETAILS LIKE '%$bd%' AND BUDGETSTATUS = 'RUNNING'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['PLANDETAILS'].'__'.$row['CODE'].'__'.$row['FINANCIALPERIOD'].
	'__'.$row['fir'].'__'.$row['sec'].'__'.$row['thr'].'__'.$row['fou'].'__'.$row['tot'].
	'__'.$row['FIRSTQTROB'].'__'.$row['SECONDQTROB'].'__'.$row['THIRDQTROB'].'__'.$row['FOUTHQTROB'].'__'.$row['TOTALROB'].
	'__'.$row['BUDGETSTATUS'];

    $st=$st.'<a  style="margin-left:0%; font size:10px;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['PLANDETAILS'].' '.$row['CODE'].'</i> &nbsp;&nbsp;&nbsp;<b> '
              .$row['FINANCIALPERIOD'].'  '.$row['FIRSTQTROB'].' '.$row['SECONDQTROB'].' '.$row['THIRDQTROB'].
			  ' '.$row['FOUTHQTROB'].'  '.$row['TOTALROB'].'  '.$row['BUDGETSTATUS'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


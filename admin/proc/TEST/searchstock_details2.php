<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement";

$bd   = $_POST['bd']; 
$idxx = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM recievables WHERE  DESCRIPTION LIKE '%$bd%'";

$result = $conn->query($sql);
$st ='<div class="list-group"> <br />';

while($row = $result->fetch_assoc()) {
    $impt = $idxx.'__'.$row['DESCRIPTION'].'__'.$row['BATCHNO'].'__'.$row['BALANCEINSTOCK'].'__'.$row['UNITOFMEASURE']
	                  .'__'.$row['EXPIRYDATE'].'__'.$row['UNITCOST'];

    $st=$st.'<a  style="margin-left:0%;font-size: 12px;height: 50px;" class="list-group-item" onclick="pop(\''.$impt.'\')"  href="javascript:void(0)">'.
        '<i> '.$row['DESCRIPTION'].' </i> &nbsp;&nbsp; &nbsp;<B style="color:red;">BATCH NO</B> &nbsp;'
              .$row['BATCHNO'].'  &nbsp;<B style="color:red;">BALANCE</B> &nbsp;'.$row['BALANCEINSTOCK'].' &nbsp;<B style="color:red;">UOM</B> &nbsp;'.$row['UNITOFMEASURE'].' &nbsp;<B style="color:red;">EXPIRY</B> &nbsp;'
			  .$row['EXPIRYDATE'].' &nbsp;<B style="color:red;">COST</B> &nbsp;'.$row['UNITCOST'].'</a>'; 

}
$st = $st.'</div>';
$conn->close();
echo $st;
exit();
?>


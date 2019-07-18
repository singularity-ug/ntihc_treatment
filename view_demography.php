<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patientmgt";

$str = $_GET['RID'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$date = date("Y-m-d").' 00:00:00';
$sql="SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO' AND NTIHCNO LIKE '%$str%'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
// echo out the contents of each row into a table
echo '<input onclick="update(this.id)"  style="width:50%;" type="button" id="'.$row['NTIHCNO'].'" value="'.$row['NTIHCNO'] . '"> <br>';

}

?>
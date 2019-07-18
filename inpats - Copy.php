<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patientmgt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$date = date("Y-m-d").' 00:00:00';
$sql="SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'";

$result = $conn->query($sql);
$st ='<table>
<thead>
<tr>
<th>TIME STAMP</th>
<th>NTIHC-NO.</th>
<th>CLIENT-NAME</th>

</tr>
</thead>
<tbody ">';

while($row = $result->fetch_assoc()) {
$st=$st."<tr>".
"<td>" . $row['TIMESTAMP'] . "</td>".
"<td>" . $row['NTIHCNO'] . "</td>".
"<td>" . $row['CLIENTNAME'] . "</td>".
"</tr>";
}
$st = $st.' </tbody>
</table> ';
$conn->close();
echo $st;
?>

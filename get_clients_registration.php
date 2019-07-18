<!DOCTYPE html>
<html>
<head>
<style>
h1 {
    border-bottom: 2px solid #cc9900;
    color: #996600;
    font-size: 12Px;
	
}
table, th , td  {
    border: 2px solid black;
    border-collapse: collapse;
    padding-left: 1px;
	padding-bottom: 1px;
	font-size: 12px;
}
table tr:nth-child(odd) {
    background-color: #FFFFCC;
}
table tr:nth-child(even) {
    background-color: #ffffff;
}
</style>
</head>
<body>

<h1>Patient vists</h1>
<div id="id01"></div>

<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

//$str = $_GET['q'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM cmpatientsnewregistration WHERE PID >= 'PID'";

$result = $conn->query($sql);
$st ='<table>
   <thead>
  <tr>
    <th>PID</th>
	<th>TIMESTAMP</th>
    <th>NTIHCNO.</th>
    <th>FIRST NAME</th>
	<th>LAST NAME</th>
	<th>SEX</th>
	<th>AGE</th>
	<th>SCHOOL</th>
	<th>MARITAL</th>
	<th>EMPLOYMENT</th>
	<th>DISTRICT</th>
	<th>DIVISION</th>
    <th>RESIDENCE</th> 
	<th>PHONE CONTACT</th> 
	<th>MOTHER FN</th> 
	<th>MOTHER LN</th> 
	<th>FATHER FN</th> 
	<th>FATHER LN</th> 
	<th>HEARED ABOUT NTIHC</th>
	<th>OLD PID</th>
  </tr>
  </thead>
  <tbody ">';
  
 
while($row = $result->fetch_assoc()) {
         
    $st=$st."<tr>".
	          "<td>" . $row['PID'] . "</td>".
			 "<td>" . $row['TIMESTAMP'] . "</td>". 
         "<td>" . $row['NTIHCNO'] . "</td>".
         "<td>" . $row['FIRSTNAME'] . "</td>".
		  "<td>" . $row['LASTNAME'] . "</td>".
		   "<td>" . $row['SEX'] . "</td>".
		   "<td>" . $row['AGE'] . "</td>".
		  "<td>" . $row['SCHOOLINGSTATUS'] . "</td>".
		   "<td>" . $row['MARITALSTATUS'] . "</td>".
		   "<td>" . $row['EMPLOYMENTSTATUS'] . "</td>".
		   "<td>" . $row['DISTRICT'] . "</td>".
		   "<td>" . $row['DIVISION'] . "</td>".
		   "<td>" . $row['PLACEOFRESIDENCE'] . "</td>".
		   "<td>" . $row['PHONECONTACT'] . "</td>".
		    "<td>" . $row['MOTHERFIRSTNAME'] . "</td>".
		    "<td>" . $row['MOTHERLASTNAME'] . "</td>".
		    "<td>" . $row['FATHERFIRSTNAME'] . "</td>".
		    "<td>" . $row['FATHERLASTNAME'] . "</td>".
		    "<td>" . $row['HEAREDABOUTNTIHC'] . "</td>".
            "<td>" . $row['OLDPID'] . "</td>".
		   "</tr>";
}
$st = $st.' </tbody>
</table> ';
$conn->close();
echo $st;
exit();
?>


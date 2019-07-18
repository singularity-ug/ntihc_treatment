<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated


$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration ORDER BY RID DESC"); // using mysqli_query instead
?>

<html>
<head>
	<title>Homepage</title>
</head>

<body>
<a href="addrecord.php">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>TIME STAMP</td>
		<td>CLIENT NO.</td>
		<td>SERVICE TYPE</td>
        <td>VIST TYPE</td>
		<td>UPDATE</td>
	</tr>
	<?php
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>";
		echo "<td>".$res['VISTTYPE']."</td>";
		echo "<td><a href=\"edit.php?id=$res[RID]\">Edit</a> | <a href=\"delete.php?id=$res[RID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>

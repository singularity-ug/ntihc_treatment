<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="Name"></td>
			</tr>
			<tr> 
				<td>Type</td>
				<td><select type="text" name="Type"> 
                    <option value="1"> </option> 
                    <option value="NEW">NEW</option>
                    <option>RE VIST</option>
				    </select> </td>
                 
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>


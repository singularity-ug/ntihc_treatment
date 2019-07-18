<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$NTIHCNO = mysqli_real_escape_string($mysqli, $_POST['NTIHCNO']);
	$SERVICETYPE = mysqli_real_escape_string($mysqli, $_POST['SERVICETYPE']);
	$VISTTYPE = mysqli_real_escape_string($mysqli, $_POST['VISTTYPE']);
	$TIMESTAMP = mysqli_real_escape_string($mysqli, $_POST['TIMESTAMP']);

	// checking empty fields
	if(empty($NTIHCNO) || empty($SERVICETYPE) || empty($VISTTYPE)) {

		if(empty($NTIHCNO)) {
			echo "<font color='red'>NTIHCNO field is empty.</font><br/>";
		}

		if(empty($SERVICETYPE)) {
			echo "<font color='red'>SERVICETYPE field is empty.</font><br/>";
		}

		if(empty($VISTTYPE)) {
			echo "<font color='red'>VISTTYPE field is empty.</font><br/>";
		}

		if(empty($TIMESTAMP)) {
			echo "<font color='red'>ACTION field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// if all the fields are filled (not empty)

		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO cmpatientsregistration (NTIHCNO,SERVICETYPE,VISTTYPE,TIMESTAMP)
		                                                              VALUES('$NTIHCNO','$SERVICETYPE','$VISTTYPE','$TIMESTAMP')");

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>

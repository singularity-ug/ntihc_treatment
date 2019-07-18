<?php
include("connect.php");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$sql = mysql_query("SELECT username,password,userID,fname FROM userstb WHERE username = '$username' AND password = '$password' ");

while($row = mysql_fetch_array($sql))
{
	if(($row[0] == $username) AND $row[1] == $password)
	{
		session_start();
		$_SESSION["fname"] = $row[3];
		$_SESSION["userid"] = $row[2];
		$_SESSION["uname"] = $row[0];
		header("Location: home.php");
	}	
}
		//if nothing found
	session_start();
	$_SESSION["login-failed"] = "yes";
	$_SESSION['reg-success'] = "clear";
	header("Location: login.php");
		
?>


<html>
<head>
<title>e chart</title>
</head>


<body>
<center>
	<div id="main">
		<h1>
			<font style="color:red; font-family:Calibri;">support</font>&nbsp;center
		</h1>
		<form action="confirm-login.php" method="POST">
			<table>
			<tr>
				<td>/username</td><td>:</td><td><input class="txt" type="text" required name="username" /></td>
			</tr>
			<tr>
				<td>/password</td><td>:</td><td><input class="txt" type="password" required name="password" /></td>
			</tr>
			<tr>
				<td colspan = "3" align="center"><a href="register.php"><input id="reg" type="button" value="register" /></a><input id="login" type="submit" value="log-in" /></td>
			</tr>
		</form>
	</div>
	
</center>
<p>*username and password not found</p>
</body>

</html>

<style>
.txt
{
	border-radius:4px;
	border:1px;
	height:30px;
}
#reg,#login
{
	width:110px;
	height:30px;
	border-radius:5px;
	border:0px;
	color:white;
}

#reg
{
	background:orange;
}

#login
{
	background:skyblue;
}


#main
{
	height:auto;
	width:400px;
	border:2px white solid;
	margin-top:120px;
}
body
{
	background:black;
	color:white;
}
</style>
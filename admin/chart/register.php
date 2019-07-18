<html>
<head>
	<title>chart</title>
	<script>
		function check()
		{
			var p1 = document.getElementById['p1'].value;
			var p2 = document.getElementById['p2'].value;

			if(p1 <> p2)
			{
				alert("Password not match.");
			}

		}
	</script>
</head>


<body>
<center>
	<div id="main">
		<h1>
			<font style="color:red; font-family:Calibri;">support</font>&nbsp;center
		</h1>
		<h4>REGISTER</h4>

		<?php
		Session_start();

		$_SESSION["login-success"] = 0;
		
		if($_SESSION["reg-failed"] == 1)
			{
				print("*registration failed");
			}

		if($_SESSION["fname"] == "")
		{
			//header("Location: login.php");
		}
		else
		{
			header("Location: home.php");
		}
		?>

		<form action="confirm-reg.php" method="POST">
			<table>
			<tr>
				<td class="align-right">username</td><td>:</td><td><input class="txt" type="text" required name="username" /></td>
			</tr>
			<tr>
				<td class="align-right">password</td><td>:</td><td><input  id="p1" class="txt" type="password" required name="password" /></td>
			</tr>
			<tr>
				<td class="align-right">confirm.password</td><td>:</td><td><input  id="p2" class="txt" type="password" required name="cpassword" /></td>
			</tr>
			<tr>
				<td class="align-right">last.name</td><td>:</td><td><input class="txt" type="text" required name="lname" /></td>
			</tr>
			<tr>
				<td class="align-right">first.name</td><td>:</td><td><input class="txt" type="text" required name="fname" /></td>
			</tr>
			<tr>
				<td colspan = "3" align="center">
					<a href="index.php"><input id="login" type="button" value="log-in"/></a>
					<input id="reg" type="submit" value="register" onClick="return check()" />
				</td>
			</tr>
			</table>
		</form>
	</div>
</center>
</body>

</html>

<style>
.txt
{
	border-radius:4px;
	border:1px;
	height:30px;
}

.align-right
{
	text-align:right;
}
#a
{
	text-decoration:none;
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
	float:center;
	margin-top:120px;
}
body
{
	background:#442727;
	color:white;
}
</style>
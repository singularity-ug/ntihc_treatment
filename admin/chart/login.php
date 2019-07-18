<?php
	session_start();
	if($_SESSION["fname"] == "")
	{
		//header("Location: index.php");
	}
	else
	{
		header("Location: home.php");
	}
?>

<html>
<head>
	<title>imms</title>
	<script type="text/javascript">
		function redirr()
		{
			location.href = "index.php";
		}
	</script>
</head>

<body>
<center>
	<div id="main">
		<h1>
		
			<font style="color:red; font-family:Calibri;">support</font>&nbsp;center
		</h1>
		<h4>
			<?php
				if($_SESSION['reg-success'] == "yes" && $_SESSION['login-failed'] == "clear" )
				{
					echo("/registration successful");
				}
				if($_SESSION['login-failed'] == "yes" && $_SESSION['reg-success'] = "clear")
				{
					echo("/login failed. Username and password not found");
				}
			?>
		</h4>
		<form action="confirm-login.php" method="POST">
			<table>
			<tr>
				<td>username</td><td>:</td><td><input class="txt" type="text" required name="username" /></td>
			</tr>
			<tr>
				<td>password</td><td>:</td><td><input class="txt" type="password" required name="password" /></td>
			</tr>
			<tr>
				<td colspan = "3" align="center"><br>
					<a href="register.php"><input id="reg" type="button" value="register" /></a>
					<input id="login" type="submit" value="log-in" />   
				</td>
				</tr>
			<tr>
				<td colspan = "3" align="center"><br> 
 <a href="../sys_dashboard.php" style="color:red; font-family:Calibri;">Admin module</a> &nbsp; 
 <a href="../../client_management.php"  style="color:red; font-family:Calibri;">clients mgt&nbsp;</a>
  
				</td> 
				  
				                                                                                                        
			</tr>
			
		</form>
	</div>
	
</center>
</body> 
</html> 
 
	 		     
<style>

h2
{
	color:green;
}
.txt
{
	border-radius:4px;
	border:1px;
	height:30px;
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
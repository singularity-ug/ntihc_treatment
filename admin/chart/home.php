<?php
	session_start();
	if($_SESSION['fname'] == "")
	{
		header("Location: index.php");
	}

?>

<html>
<head>
	<title>chart</title>
	<script type="text/javascript">
		function redirr()
		{
			location.href = "index.php";
		}
	</script>
</head>

<?php
	$_SESSION["login-failed"] = 0;
?>

<body>
<center>
	<div id="main">
		<h1>
			<font style="color:red; font-family:Calibri;"></font>Support&nbsp;center<hr>
		</h1>
		<table width="100%" style="background:">
			<tr>
				<td >
					<h3 style="color:yellow; font-family:Comic Sans Ms">&nbsp;Welcome <?php echo $_SESSION["fname"]; ?> </h3>
					<p><a href="choose-color.php" style="text-decoration:none; color:skyblue; margin-left:10px; padding-top:-40px; font-family:tahoma;"> </a></p>
				</td>
				 
				
				<td align="right">
					<a href="logout.php"><div id="lo-but"><p style="font-family:Comic Sans Ms; font-size:18px;">log-out</p></div></a>
				</td>
			</tr>
		</table>

		<iframe id="chatbox" src="home-auto.php"></iframe>
		
		<br/>
		<form action="send.php" method="POST">
		<table width="100%" align="center">
			<tr>
				<td align="right"><textarea id="txtarea" name="txtarea" required></textarea></td><td width="auto"><input type="submit" value=">>" id="send"></div></td>
			</tr>
		</table>
		</form>
	</div>
</center>
</body>

</html>

<style>
.names
{
	padding-top:5px;
}
a
{
	text-decoration:none;
}
#lo-but
{
	color:red;
	height:auto;
	width:80px;
	background:none;
	padding:1px;
	border-radius:2px;
	text-align:center;
	display:block;
	margin-top:-39px;
	margin-right:-3px;

}

#send
{
	width:50px;
	height:50px;
	border-radius:5px;
	border:0px;
	color:white;
	background:skyblue;
	font-size:18px;
}

#txtarea
{
	height:50px;
	width:85%;
	border-radius:5px;
}

.item
{
	color:white;
	text-align:left;
	background:gray;
	width:95%;
	min-height:25px;
	margin-top:17px;
	padding:5px;
	padding-top:-10px;
	border-radius:5px;
}

.item2
{
	color:white;
	text-align:left;
	background:purple;
	width:95%;
	min-height:25px;
	margin-top:17px;
	padding:5px;
	border-radius:5px;
}

#chatbox
{
	max-width:80%;
	min-width:80%;
	height:400px;
	border-radius:5px;
	background:black;
	overflow:scroll;
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
	max-width:800px;
	border:2px white solid;
	float:center;
	margin-top:40px;
	border-radius:10px;
}
body
{
	background:#442727;
	background-repeat:none;
	color:white;
}
</style>
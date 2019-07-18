<html>
<head>
	<meta http-equiv="refresh" content="10">
	<title>imms</title>
</head>
<body>
			<?php
				include("connect.php");

				session_start();

				$show = mysql_query("SELECT userstb.fname,chattb.chatbody,chattb.chatdate,userstb.username FROM userstb INNER JOIN chattb ON userstb.userID = chattb.userID ORDER BY chattb.chatid DESC LIMIT 50");

				$cur_bg = "skyblue";
				$cur_txt = "white";

				while($row = mysql_fetch_array($show))
				{

					$cur_user = $row[3];
					
 
					$getclr = mysql_query("SELECT colortb.colorbg,colortb.colortxt FROM colortb WHERE colortb.username = '$cur_user' ");

					while($val = mysql_fetch_array($getclr))
					{
						$cur_bg = $val[0];
						$cur_txt = $val[1];
					}

					if($row[0] == $_SESSION['fname'])
					{
						echo "
						<br/>
						<table style='margin-top:-20px; width:80%;' align='right'>
							<tr>
								<td width='10%' style='text-align:left; font-size:9px;'>".$row[2]."</td>
								<td width='75%'><div class='item-x' style='font-family:Comic Sans MS; color:".$cur_txt."; background: ".$cur_bg."'><p>".$row[1]."</p></div></td>
								<td class='names' width='15%' style='text-align:left; font-family:Comic Sans MS; color:".$cur_txt."; '>".$row[0]."</td>
							</tr>
						</table>
						";
					}
					
					else
					{

					echo "
						
						<table style='margin-top:-20px; width:80%;' align='left'>
							<tr>
								<td class='names' width='15%' style='text-align:right; font-family:Comic Sans MS; color:".$cur_txt."; '>".$row[0].":</td>
								<td width='75%'><div class='item' style='font-family:Comic Sans MS; color:".$cur_txt."; background: ".$cur_bg."'>&nbsp;".$row[1]."</div></td>
								<td width='10%' style='text-align:right; font-size:9px;'>".$row[2]."</td>
							</tr>
						</table>
						";

					}

				}
			?>

</body>
</html>

<style>
.names
{
	padding-top:5px;
}

body
{
	background:black;
	color:white;
}

.item
{
	
	text-align:left;
	
	max-width:95%;
	min-width:95%;
	min-height:30px;
	margin-top:17px;
	padding:5px;
	padding-top:-10px;
	border-radius:5px;
}

.item-x
{
	
	text-align:right;
	position:right;
	max-width:95%;
	min-width:95%;
	min-height:30px;
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
	max-width:95%;
	min-width:95%;
	min-height:30px;
	margin-top:17px;
	padding:5px;
	border-radius:5px;
}
</style>
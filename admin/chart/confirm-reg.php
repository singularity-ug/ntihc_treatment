<?php
include("connect.php");

$uname = $_REQUEST["username"];
$pword = $_REQUEST["password"];
$cpword = $_REQUEST["cpassword"];
$lname = $_REQUEST["lname"];
$fname = $_REQUEST["fname"];

echo $uname;
echo $pword;
echo $cpword;
echo $lname;
echo $fname;

if( ($uname == "") || ($pword == "")  || ($cpword == "")  || ($lname == "")  || ($fname == "") )
{
	session_start();
	$_SESSION["reg-failed"] = "no";
	header("Location: register.php");
}
else
	{
		if($pword == $cpword)
		{
			//add account
			$add = mysql_query("INSERT INTO userstb VALUES('','$uname','$pword','$lname','$fname') ");

			//add theme
			$addclr = mysql_query("INSERT INTO colortb VALUES('','$uname','skyblue','white') ");
			
			$_SESSION["reg-success"] = "yes";
	
			if($add)
			{
				//mysql_query($add);
				//mysqli_execute($add);
				$_SESSION["reg-success"] = "yes";
				$_SESSION['login-failed'] = "clear";
				header("Location: login.php");
			}
			
		}
		else
			{
				session_start();
				$_SESSION['login-failed'] = "clear";
				$_SESSION["reg-success"] = "no";
				header("Location: register.php");
			}
	}

?>
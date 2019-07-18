<?php
session_start();
require('connect/config.php');

	$pwd = md5("domain");
echo "<br> Given: " . $pwd . "<br> Exists: ad5f82e879a9c0d485b442eb37e50551 <br>";
  	$sql =   "SELECT * FROM `user_table` WHERE Email= 'ltulina@ntihc.org' AND Password = '$pwd' ";

           $res = $conn->query($sql);
if ($res){
	echo "Connection Successful!";
 	if($res->num_rows > 0)
		echo " and User Exists!";
	else
		echo " but User access denied!";
}
else
	echo "Connection Failed!";
?> 

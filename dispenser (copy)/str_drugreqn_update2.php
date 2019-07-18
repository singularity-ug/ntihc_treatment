<?php

$conn = new mysqli("localhost", "root", "toor2", "procurement");

if(isset($_POST['buttonsend']))
{ 
   $APPROVAL = $_POST['APPROVAL'];
   $on = $_POST['ORDERSERIALID'];
   $APPROVCOMMENT = $_POST['APPROVCOMMENT']; 
   $APPBYDATE = $_POST['APPBYDATE'];  
   $APPBYNAME = $_POST['APPBYNAME'];
   $AUTHPF = $_POST['AUTHPF'];   
   $APPPF = $_POST['APPPF'];   
   $APPDEPT  =  $_POST['APPDEPT'];  
    
   $res =  $conn->query("UPDATE outgoingorders SET APPROVAL='$APPROVAL',  
   APPROVCOMMENT='$APPROVCOMMENT',
   APPBYDATE='$APPBYDATE', 
   AUTHCORCOMMENT='$AUTHCORCOMMENT',
   APPBYNAME='$APPBYNAME',
   APPPF='$APPPF',  
   APPDEPT='$APPDEPT' 
   WHERE `ORDERSERIALID` = '$on'");  
		 		 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
     
	header("location:inc_approvals.php");
	exit();
?>  
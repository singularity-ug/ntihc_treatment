<?php

$conn = new mysqli("localhost", "root", "toor2", "procurement");

if(isset($_POST['buttonsend']))
{ 
   $AUTBY = $_POST['AUTBY'];
   $on = $_POST['ORDERSERIALID'];
   $AUTBYDATE = $_POST['AUTBYDATE']; 
   $AUTHDEPT = $_POST['AUTHDEPT'];  
   $AUTHCORCOMMENT = $_POST['AUTHCORCOMMENT'];
   $AUTHPF = $_POST['AUTHPF'];   
   $FORWARDTO = $_POST['FORWARDTO'];   
   $CONFIRMATIONOFREQUEST  =  $_POST['CONFIRMATIONOFREQUEST']; 
   $AUTBYNAME = $_POST['AUTBYNAME']; 
   $CONFIRMERACCOUNT = $_POST['CONFIRMERACCOUNT']; 
      
    
   $res =  $conn->query("UPDATE outgoingorders SET AUTBY='$AUTBY',  
   AUTBYDATE='$AUTBYDATE',
   AUTHDEPT='$AUTHDEPT', 
   AUTHCORCOMMENT='$AUTHCORCOMMENT',
   AUTHPF='$AUTHPF',
   CONFIRMATIONOFREQUEST='$CONFIRMATIONOFREQUEST',  
   AUTBYNAME='$AUTBYNAME',
   CONFIRMERACCOUNT='$CONFIRMERACCOUNT',
   FORWARDTO='$FORWARDTO' 
   WHERE `ORDERSERIALID` = '$on'");  
		 		 
				 if($res){}
				 else{echo $conn->error; exit();}
   }
     
	header("location:store_orders.php");
	exit();
?> 
  
               
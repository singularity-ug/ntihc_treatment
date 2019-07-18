<?php
include_once 'dbcon.php';
$id = $_POST['EID'];
$fy = $_POST['fy'];
$account = $_POST['account']; 

$fagone = $_POST['fagone']; $fagtwo = $_POST['fagtwo']; $fagthree = $_POST['fagthree'];

$tt = $_POST['tt']; 
$fqone = $_POST['fqone']; 
$fqonexx = $_POST['fqonexx'];
$fqtwo = $_POST['fqtwo'];
$fqthree = $_POST['fqthree'];
$fourthqtr = $_POST['fourthqtr'];
$qtt = $_POST['qtt'];

$chk = $_POST['EID'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	if($MySQLiconn->query("UPDATE clientsexamination SET DATECREATED='$fy[$i]',
	                                            NTIHCNO='$account[$i]', 
												VISTBY='$fagone[$i]', 
												MEDICALTOPIC='$fagtwo[$i]', 
											    MEDICALPROBLEM='$fagthree[$i]',  
												COUNSELLINGDONE='$tt[$i]',
		                                        SCHOOLING='$fqone[$i]', EMPLOYMENT='$fqonexx[$i]', 
												CLIENTNAME='$fqtwo[$i]', 
												AGE1='$fqthree[$i]',
												AGE_GROUP='$fourthqtr[$i]', 
												SEX='$qtt[$i]'
											    WHERE EID=".$id[$i])){ 
														 }
   else {
   echo $MySQLiconn->error;
   }
}
header("Location: index.php");
?>

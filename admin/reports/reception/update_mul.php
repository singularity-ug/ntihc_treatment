<?php
include_once 'dbcon.php';
$id = $_POST['RID'];
$fy = $_POST['fy'];
$account = $_POST['account']; 

$fagone = $_POST['fagone']; $fagtwo = $_POST['fagtwo']; $fagthree = $_POST['fagthree'];

$tt = $_POST['tt']; 
$fqone = $_POST['fqone'];
$fqtwo = $_POST['fqtwo'];
$fqthree = $_POST['fqthree'];
$fourthqtr = $_POST['fourthqtr'];
$qtt = $_POST['qtt'];

$chk = $_POST['RID'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	if($MySQLiconn->query("UPDATE cmpatientsregistration SET DATECREATED='$fy[$i]',
	                                            FISCALMONTH='$account[$i]', 
												FISCALYEAR='$fagone[$i]', 
												NTIHCNO='$fagtwo[$i]', 
											    SERVICETYPE='$fagthree[$i]',  
												VISTTYPE='$tt[$i]',
		                                        DATATYPE='$fqone[$i]', 
												CLIENTNAME='$fqtwo[$i]', 
												AGE1='$fqthree[$i]',
												AGE_GROUP='$fourthqtr[$i]', 
												SEX='$qtt[$i]'
											    WHERE RID=".$id[$i])){


														 }
   else {
   echo $MySQLiconn->error;
   }
}
header("Location: index.php");
?>

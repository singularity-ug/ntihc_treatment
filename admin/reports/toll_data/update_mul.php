<?php
include_once 'dbcon.php';
$id = $_POST['CID'];
$fy = $_POST['fy'];
$account = $_POST['account']; 

$fagone = $_POST['fagone']; $fagtwo = $_POST['fagtwo']; $fagthree = $_POST['fagthree'];

$tt = $_POST['tt']; 
$fqone = $_POST['fqone'];
$fqtwo = $_POST['fqtwo'];
$fqthree = $_POST['fqthree'];
$fourthqtr = $_POST['fourthqtr'];
$qtt = $_POST['qtt']; 

$LLqtt = $_POST['LLqtt']; $HHqtt = $_POST['HHqtt']; $NNqtt = $_POST['NNqtt'];

$chk = $_POST['CID'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	if($MySQLiconn->query("UPDATE tollfree SET DATECREATED='$fy[$i]',
	                                            PHONECONTACT='$account[$i]', 
												FIRSTNAME='$fagone[$i]', 
												SEX='$fagtwo[$i]', 
											    AGE='$fagthree[$i]',  
												SCHOOLINGSTATUS='$tt[$i]',
		                                        MARITALSTATUS='$fqone[$i]', 
												EMPLOYMENTSTATUS='$fqtwo[$i]', 
												DISTRICT='$fqthree[$i]',
												DIVISION='$fourthqtr[$i]', 
												PLACEOFRESIDENCE='$qtt[$i]', LIVINGWITH='$LLqtt[$i]', HEAREDABOUTNTIHC='$HHqtt[$i]', HOWDIDYOUKNOABOUTTHISNO='$NNqtt[$i]'
											    WHERE CID=".$id[$i])){


														 }
   else {
   echo $MySQLiconn->error;
   }
}
header("Location: index.php");
?>

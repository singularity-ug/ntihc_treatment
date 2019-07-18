<?php
include_once 'dbcon.php';
$id = $_POST['id'];
$fy = $_POST['fy'];
$bd = $_POST['bd'];
$ca = $_POST['ca'];
$co = $_POST['co'];
$bu = $_POST['bu'];
$un = $_POST['un'];
$qu = $_POST['qu'];
$ucos = $_POST['ucos']; 
$stls = $_POST['stls']; 

$chk = $_POST['id'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	if($MySQLiconn->query("UPDATE vetting_screening SET FIRSTNAME='$fy[$i]', LASTNAME='$bd[$i]', GENDER='$ca[$i]', PHONECONTACT='$co[$i]',
		                         SUMMARY_OF_QUALIFICATIONS='$bu[$i]', DRIVING_PERMIT_CLASSESS='$un[$i]', POSITION_APPLIED_FOR='$qu[$i]', COMMENT='$ucos[$i]',SHORTLISTSTATUS='$stls[$i]'
														 WHERE id=".$id[$i])){


														 }
   else {
   echo $MySQLiconn->error;
   }
}
header("Location: add-data.php");
?>

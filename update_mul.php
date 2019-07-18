<?php
include_once 'dbcon.php';
$id = $_POST['id'];
$ts = $_POST['ts'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$st = $_POST['st'];

$chk = $_POST['id'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$MySQLiconn->query("UPDATE cmpatientsregistration SET TIMESTAMP='$ts[$i]', NTIHCNO='$ln[$i]', CLIENTNAME='$ln[$i]', SERVICETYPE='$st[$i]' WHERE id=".$id[$i]);
}
header("Location: counsellingroom.php");
?>
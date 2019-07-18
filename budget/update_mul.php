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
$qtu = $_POST['qtu'];
$qto = $_POST['qto'];
$fqone = $_POST['fqone'];
$fqtwo = $_POST['fqtwo'];
$fqthree = $_POST['fqthree'];


$chk = $_POST['id'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	if($MySQLiconn->query("UPDATE users SET financial_yr='$fy[$i]', budget_details='$bd[$i]', category='$ca[$i]', code='$co[$i]',
		                         budget_line='$bu[$i]', unit_type='$un[$i]', quantity='$qu[$i]', unit_cost='$ucos[$i]', qty_unittype='$qtu[$i]',
	                           qty_outstanding ='$qto[$i]', 1stqtr_estimate='$fqone[$i]', 2ndqtr_estimate='$fqtwo[$i]', 3rdqtr_estimate='$fqthree[$i]'
														 WHERE id=".$id[$i])){


														 }
   else {
   echo $MySQLiconn->error;
   }
}
header("Location: index.php");
?>

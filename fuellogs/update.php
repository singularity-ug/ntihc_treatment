<?php
include_once 'fdbcon.php';
$id = $_POST['FLID'];
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

$chk = $_POST['FLID'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	if($MySQLiconn->query("UPDATE fleet_fuellogs SET FUELDATE='$fy[$i]', INVOICENO='$bd[$i]', REGISTRATIONNO='$ca[$i]', DRIVER='$co[$i]',
		                        'MILEAGE='$bu[$i]', PRODUCT='$un[$i]', LITRE='$qu[$i]', UNITPRICE='$ucos[$i]', AMOUNT='$qtu[$i]',
	                           USERDEPARTMENT ='$qto[$i]', PURPOSE='$fqone[$i]' 
														 WHERE FLID=".$id[$i])){


														 }
   else {
   echo $MySQLiconn->error;
   }
}
header("Location: fuel_index.php");
?>

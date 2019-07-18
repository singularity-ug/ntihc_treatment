<?php
include_once 'dbcon.php';
$id = $_POST['id'];
$fy = $_POST['fy'];
$account = $_POST['account'];
$fagix = $_POST['fagix'];
$tt = $_POST['tt']; 
$fqone = $_POST['fqone'];
$fqtwo = $_POST['fqtwo'];
$fqthree = $_POST['fqthree'];
$fourthqtr = $_POST['fourthqtr'];
$qtt = $_POST['qtt'];

$chk = $_POST['id'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	if($MySQLiconn->query("UPDATE budgeting SET financial_yr='$fy[$i]',
	                                            Accountcode='$account[$i]', 
												Accountdetails='$fagix[$i]', 
												budgetamount='$tt[$i]',
		                                        1stqtr_estimate='$fqone[$i]', 2ndqtr_estimate='$fqtwo[$i]', 3rdqtr_estimate='$fqthree[$i]',
												4thqtr_estimate='$fourthqtr[$i]', qtr_totals='$qtt[$i]'
											    WHERE id=".$id[$i])){


														 }
   else {
   echo $MySQLiconn->error;
   }
}
header("Location: index.php");
?>

<?php
include_once 'dbcon.php';
$id = $_POST['id'];
$fiy = $_POST['fiy'];
$bud = $_POST['bud'];
$unt = $_POST['unt'];
$qua = $_POST['qua'];
$ucoss = $_POST['ucoss'];
$ttc = $_POST['ttc'];
$approvalx = $_POST['approvalx'];
$Commentx = $_POST['Commentx'];


$chk = $_POST['id'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	if($MySQLiconn->query("UPDATE budget SET financial_period='$fiy[$i]', 
	                             budgetdetails='$bud[$i]',
		                         unit_type='$unt[$i]', quantity='$qua[$i]',
		                         unit_cost='$ucoss[$i]', totalcost='$ttc[$i]',
														 approval='$approvalx[$i]', 
														 Comment='$Commentx[$i]'
														 WHERE id=".$id[$i])){

														 }
   else {
   echo $MySQLiconn->error;
   }
}
header("Location: index_draft.php");
?>

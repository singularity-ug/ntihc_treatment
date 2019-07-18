
<?php
include('connect.php');

$action = $_REQUEST['action'];
if($action=="showAll"){
	
	$stmt=$con->prepare("SELECT COUNT(bs_name) as bsname FROM tbl_personnel WHERE bs_name <> ' '");
	$stmt->execute();
	if($stmt->rowCount() > 0){
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
extract($row);
?>
<?php echo $bsname; ?>
<?php
}
}
}else{
	
	$stmt=$con->prepare("SELECT (
							    SELECT COUNT(bs_name) as bstotal2 FROM tbl_personnel WHERE date_modified like '%$action%' AND bs_name <> ' ' ) as bstotal1,
							    (
							    SELECT COUNT(bs_name) as bstotal4 FROM tbl_personnel_master_file WHERE date_modified like '%$action%' AND bs_name <> ' ' 
							    ) as bstotal2
							FROM DUAL");
	$stmt->execute(array($action));
if($stmt->rowCount() > 0){
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
extract($row);

?>
<?php echo $bstotal1 + $bstotal2; ?>
<?php		
}
}
}
?>


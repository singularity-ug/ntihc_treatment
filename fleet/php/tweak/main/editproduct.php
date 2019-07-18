<?php
	include('../connectproc.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM fuelcards WHERE productid= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />

<form action="saveeditproduct.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Update Card info</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Fuel card name   </span><input type="text" style="width:265px; height:22px;"  name="Fuelcardname" value="<?php echo $row['Fuelcardname']; ?>" Required/> 
<span>Vendor name   </span><input type="text" style="width:265px; height:22px;"  name="Vendorname" value="<?php echo $row['Vendorname']; ?>" Required/> 
<span>Station location   </span><textarea style="width:265px; height:22px;" name="Stationlocation" ><?php echo $row['Stationlocation']; ?> </textarea> 
<span>Fuel target level  </span><input type	="text" style="width:265px; height:22px;" name="Fueltargetlevel" value="<?php echo $row['Fueltargetlevel']; ?>"Required /> 
<span>Vendor frame work type  </span><input type	="text" style="width:265px; height:22px;" name="Vendorframeworktype" value="<?php echo $row['Vendorframeworktype']; ?>"Required /> 
<span>Fuel card status   </span><input type="text" style="width:265px; height:22px;" id="txt1" name="Fuelcardstatus" value="<?php echo $row['Fuelcardstatus']; ?>" onkeyup="sum();" Required/> 
<span>fuel vailable  </span><input type="text" style="width:265px; height:22px;" id="txt2" name="fuelvailable" value="<?php echo $row['fuelvailable']; ?>" onkeyup="sum();" 
Required/> 
<span>Replacement  </span><input type="text" style="width:265px; height:22px;" id="txt3" name="Replacement" value="<?php echo $row['Replacement']; ?>"  > 
 
<span>Replacementdate  </span><input type="date" style="width:265px; height:22px;" min="0" name="Replacementdate" value="<?php echo $row['Replacementdate']; ?>" /> 
<span>Reason for replacement  </span><textarea style="width:265px; height:44px;" name="Reasonforreplacement" ><?php echo $row['Reasonforreplacement']; ?> </textarea> 
 
 <center><button class="btn btn-success btn-block btn-large" style="width:220px;height:30px;"><i class="icon icon-save icon-large"></i> Save Changes</button> </center>
 
</div>
</form>
<?php
}
?>
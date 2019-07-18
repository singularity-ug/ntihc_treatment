<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{
	$id = mysqli_real_escape_string($mysqli, $_POST['id']); 
	$PROPERTYDESCRIPTION = mysqli_real_escape_string($mysqli, $_POST['PROPERTYDESCRIPTION']);
	$CATEGORY = mysqli_real_escape_string($mysqli, $_POST['CATEGORY']);
	$CODIFICATIONSTATUS = mysqli_real_escape_string($mysqli, $_POST['CODIFICATIONSTATUS']);
	$ENGRAVEDNUMBER = mysqli_real_escape_string($mysqli, $_POST['ENGRAVEDNUMBER']);
	$HOLDTYPE = mysqli_real_escape_string($mysqli, $_POST['HOLDTYPE']);
	$DATEOFPURCHASE = mysqli_real_escape_string($mysqli, $_POST['DATEOFPURCHASE']);
	$MAKE = mysqli_real_escape_string($mysqli, $_POST['MAKE']);
	$PROPERTYCOST = mysqli_real_escape_string($mysqli, $_POST['PROPERTYCOST']);
	$SUPPLIEDBY = mysqli_real_escape_string($mysqli, $_POST['SUPPLIEDBY']);
	$LOCATION = mysqli_real_escape_string($mysqli, $_POST['LOCATION']);
	$RESPONSIBLEOFFICER = mysqli_real_escape_string($mysqli, $_POST['RESPONSIBLEOFFICER']);
	$OFFICERCONTACT = mysqli_real_escape_string($mysqli, $_POST['OFFICERCONTACT']); 
	$FUNCTIONALSTATUS = mysqli_real_escape_string($mysqli, $_POST['FUNCTIONALSTATUS']);
	$SERVICEREQUIREMENT = mysqli_real_escape_string($mysqli, $_POST['SERVICEREQUIREMENT']);
	$NEXTDUESERVICE = mysqli_real_escape_string($mysqli, $_POST['NEXTDUESERVICE']);
	$REMINDDATE = mysqli_real_escape_string($mysqli, $_POST['REMINDDATE']);
    
	
	// checking empty fields
	if(empty($PROPERTYDESCRIPTION)) {

		if(empty($PROPERTYDESCRIPTION)) {
			echo "<font color='red'>PROPERTY DESCRIPTION field is empty.</font><br/>";
		} 
 
	} else {
		$result = mysqli_query($mysqli, "UPDATE properties SET PROPERTYDESCRIPTION='$PROPERTYDESCRIPTION',
		 CATEGORY='$CATEGORY',
		 CODIFICATIONSTATUS='$CODIFICATIONSTATUS',
		 ENGRAVEDNUMBER='$ENGRAVEDNUMBER',
		 HOLDTYPE='$HOLDTYPE',
	     DATEOFPURCHASE='$DATEOFPURCHASE',
		 MAKE='$MAKE' ,PROPERTYCOST='$PROPERTYCOST',
		 SUPPLIEDBY='$SUPPLIEDBY',
	     LOCATION='$LOCATION',
		 RESPONSIBLEOFFICER='$RESPONSIBLEOFFICER',
		 OFFICERCONTACT='$OFFICERCONTACT',
		 FUNCTIONALSTATUS='$FUNCTIONALSTATUS',
		 SERVICEREQUIREMENT='$SERVICEREQUIREMENT',
		 NEXTDUESERVICE='$NEXTDUESERVICE',
		 REMINDDATE='$REMINDDATE' 
		 WHERE ENGRAVEDNUMBER='$id'");
		; 
		
		//redirectig to the display page. In our case, it is index.php
		header("Location:asset_config.php");
	}
}
?>
 
</body>
</html>
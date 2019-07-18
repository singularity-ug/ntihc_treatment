<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	$NTIHCNO = mysqli_real_escape_string($mysqli, $_POST['NTIHCNO']);
	$RESULTSRECEIVED = mysqli_real_escape_string($mysqli, $_POST['RESULTSRECEIVED']);
	$RECIEVEDASACOUPLE = mysqli_real_escape_string($mysqli, $_POST['RECIEVEDASACOUPLE']);
	$COUPLERESULTS = mysqli_real_escape_string($mysqli, $_POST['COUPLERESULTS']); 
	$TB_SUSPICION = mysqli_real_escape_string($mysqli, $_POST['TB_SUSPICION']);
	$COTRIMOXAZOLE_START = mysqli_real_escape_string($mysqli, $_POST['COTRIMOXAZOLE_START']);
	$CARE_LINK = mysqli_real_escape_string($mysqli, $_POST['CARE_LINK']);
	$CDFOUR = mysqli_real_escape_string($mysqli, $_POST['CDFOUR']);
	$COUNSELORSNAME = mysqli_real_escape_string($mysqli, $_POST['COUNSELORSNAME']);
	$RECIEVEDDATE = mysqli_real_escape_string($mysqli, $_POST['RECIEVEDDATE']);
	$TESTSTATUS = mysqli_real_escape_string($mysqli, $_POST['TESTSTATUS']); 
	$ACTIONTAKEN = mysqli_real_escape_string($mysqli, $_POST['ACTIONTAKEN']);
	$REFERALUNIT = mysqli_real_escape_string($mysqli, $_POST['REFERALUNIT']);
    $ARTCLINIC = mysqli_real_escape_string($mysqli, $_POST['ARTCLINIC']);
	$RID = mysqli_real_escape_string($mysqli, $_POST['RID']);
	$FINALREACTIVITY = mysqli_real_escape_string($mysqli, $_POST['FINALREACTIVITY']);

		$result = mysqli_query($mysqli, "UPDATE laboratory SET NTIHCNO='$NTIHCNO',RESULTSRECEIVED='$RESULTSRECEIVED',
		RECIEVEDASACOUPLE='$RECIEVEDASACOUPLE',COUPLERESULTS='$COUPLERESULTS',TB_SUSPICION='$TB_SUSPICION'
		,COTRIMOXAZOLE_START='$COTRIMOXAZOLE_START' ,CARE_LINK='$CARE_LINK' ,CDFOUR='$CDFOUR' ,COUNSELORSNAME='$COUNSELORSNAME' 
		,RECIEVEDDATE='$RECIEVEDDATE' ,TESTSTATUS='POST TEST COUNSELLING DONE' ,ACTIONTAKEN='$ACTIONTAKEN', 
		REFERALUNIT='$REFERALUNIT',
		ARTCLINIC='$ARTCLINIC',
		RID='$RID', 
		FINALREACTIVITY='$FINALREACTIVITY'
		WHERE id='$id'");
		
		if($result)	{}
		else{ echo "ERROR OCCURED".mysqli_error($mysqli); exit();}
}

//redirectig to the display page. In our case, it is index.php
header("Location:../counsellingroom.php");
		exit();
?>


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
	$COUNSELORS_NAME = mysqli_real_escape_string($mysqli, $_POST['COUNSELORS_NAME']);
	$RECIEVEDDATE = mysqli_real_escape_string($mysqli, $_POST['RECIEVEDDATE']);
	$TESTSTATUS = mysqli_real_escape_string($mysqli, $_POST['TESTSTATUS']);
		
		$result = mysqli_query($mysqli, "UPDATE hct_counselling_andtesting SET NTIHCNO='$NTIHCNO',RESULTSRECEIVED='$RESULTSRECEIVED',
		RECIEVEDASACOUPLE='$RECIEVEDASACOUPLE',COUPLERESULTS='$COUPLERESULTS',TB_SUSPICION='$TB_SUSPICION'
		,COTRIMOXAZOLE_START='$COTRIMOXAZOLE_START' ,CARE_LINK='$CARE_LINK' ,CDFOUR='$CDFOUR' ,COUNSELORS_NAME='$COUNSELORS_NAME' 
		,RECIEVEDDATE='$RECIEVEDDATE' ,TESTSTATUS='$TESTSTATUS' WHERE id='$id'");
		
		if($result)	{}
		else{ echo "ERROR OCCURED".mysqli_error($mysqli); exit();}
}

//redirectig to the display page. In our case, it is index.php
header("Location:../counsellingroom.php");
		exit();
?>


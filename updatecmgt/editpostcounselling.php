

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	$EXPIRYDATET1 = mysqli_real_escape_string($mysqli, $_POST['EXPIRYDATET1']);
	$EXPIRYDATET2 = mysqli_real_escape_string($mysqli, $_POST['EXPIRYDATET2']);
	$EXPIRYDATET3 = mysqli_real_escape_string($mysqli, $_POST['EXPIRYDATET3']);
	$REACTIVITYT1 = mysqli_real_escape_string($mysqli, $_POST['REACTIVITYT1']);
	$REACTIVITYT2 = mysqli_real_escape_string($mysqli, $_POST['REACTIVITYT2']);
	$REACTIVITYT3 = mysqli_real_escape_string($mysqli, $_POST['REACTIVITYT3']);
	$FINALREACTIVITY = mysqli_real_escape_string($mysqli, $_POST['FINALREACTIVITY']);
	$TECHNICIAN_NAME = mysqli_real_escape_string($mysqli, $_POST['TECHNICIAN_NAME']);
	$TITLE = mysqli_real_escape_string($mysqli, $_POST['TITLE']);
	$RESULTSRECEIVED = mysqli_real_escape_string($mysqli, $_POST['RESULTSRECEIVED']);
	$RECIEVEDASACOUPLE = mysqli_real_escape_string($mysqli, $_POST['RECIEVEDASACOUPLE']);
	$COUPLERESULTS = mysqli_real_escape_string($mysqli, $_POST['COUPLERESULTS']);
	$TB_SUSPICION = mysqli_real_escape_string($mysqli, $_POST['TB_SUSPICION']);
	$COTRIMOXAZOLE_START = mysqli_real_escape_string($mysqli, $_POST['COTRIMOXAZOLE_START']);
	$CARE_LINK = mysqli_real_escape_string($mysqli, $_POST['CARE_LINK']);
	$CDFOUR = mysqli_real_escape_string($mysqli, $_POST['CDFOUR']);
	$COUNSELORS_NAME = mysqli_real_escape_string($mysqli, $_POST['COUNSELORS_NAME']);
	$RECIEVEDDATE = mysqli_real_escape_string($mysqli, $_POST['RECIEVEDDATE']);



	// checking empty fields
	if(empty($EXPIRYDATET1) || empty($EXPIRYDATET2) || empty($EXPIRYDATET3) || empty($REACTIVITYT1) || empty($REACTIVITYT2)  || empty($REACTIVITYT3)
	|| empty($FINALREACTIVITY) || empty($TECHNICIAN_NAME) || empty($TITLE) || empty($RESULTSRECEIVED) || empty($RECIEVEDASACOUPLE) || empty($COUPLERESULTS)
	|| empty($TB_SUSPICION) || empty($COTRIMOXAZOLE_START) || empty($CARE_LINK) || empty($CDFOUR) || empty($COUNSELORS_NAME)
    || empty($RECIEVEDDATE)) {

		if(empty($EXPIRYDATET1)) {
			echo "<font color='red'>EXPIRYDATET1 field is empty.</font><br/>";
		}

		if(empty($EXPIRYDATET2)) {
			echo "<font color='red'>EXPIRYDATET2 field is empty.</font><br/>";
		}

        if(empty($EXPIRYDATET3)) {
			echo "<font color='red'>EXPIRYDATET3 field is empty.</font><br/>";
		}

		if(empty($REACTIVITYT1)) {
			echo "<font color='red'>ACTION field is empty.</font><br/>";
		}

		if(empty($REACTIVITYT2)) {
			echo "<font color='red'>UNIT REACTIVITYT1 field is empty.</font><br/>";
		}

		if(empty($REACTIVITYT3)) {
			echo "<font color='red'>OPS_QTY field is empty.</font><br/>";
		}

		if(empty($FINALREACTIVITY)) {
			echo "<font color='red'>VALUATION field is empty.</font><br/>";
		}

		if(empty($TECHNICIAN_NAME)) {
			echo "<font color='red'>LAPSE field is empty.</font><br/>";
		}

        if(empty($TITLE)) {
			echo "<font color='red'>TITLE field is empty.</font><br/>";
		}

        if(empty($RESULTSRECEIVED)) {
			echo "<font color='red'>RESULTS RECEIVED field is empty.</font><br/>";
		}

        if(empty($RECIEVEDASACOUPLE)) {
			echo "<font color='red'>RECIEVEDASACOUPLE field is empty.</font><br/>";
		}

		 if(empty($COUPLERESULTS)) {
			echo "<font color='red'>COUPLERESULTS field is empty.</font><br/>";
		}

        if(empty($TB_SUSPICION)) {
			echo "<font color='red'>TB_SUSPICION field is empty.</font><br/>";
		}

		 if(empty($COTRIMOXAZOLE_START)) {
			echo "<font color='red'>COTRIMOXAZOLE_START field is empty.</font><br/>";
		}

		 if(empty($CARE_LINK)) {
			echo "<font color='red'>CARE_LINK field is empty.</font><br/>";
		}

		 if(empty($CDFOUR)) {
			echo "<font color='red'>CDFOUR field is empty.</font><br/>";
		}

		 if(empty($COUNSELORS_NAME)) {
			echo "<font color='red'>COUNSELORS_NAME field is empty.</font><br/>";
		}

		if(empty($RECIEVEDDATE)) {
			echo "<font color='red'>RECIEVEDDATE field is empty.</font><br/>";
		}

	} else {

		$result = mysqli_query($mysqli, "UPDATE laboratory SET EXPIRYDATET1='$EXPIRYDATET1', EXPIRYDATET2='$EXPIRYDATET2', EXPIRYDATET3='$EXPIRYDATET3',            REACTIVITYT1='$REACTIVITYT1', REACTIVITYT2='$REACTIVITYT2',REACTIVITYT3='$REACTIVITYT3',
		FINALREACTIVITY='$FINALREACTIVITY',TECHNICIAN_NAME='$TECHNICIAN_NAME', TITLE='$TITLE',RESULTSRECEIVED='$RESULTSRECEIVED',RECIEVEDASACOUPLE='$RECIEVEDASACOUPLE',COUPLERESULTS='$COUPLERESULTS',TB_SUSPICION='$TB_SUSPICION',COTRIMOXAZOLE_START='$COTRIMOXAZOLE_START',CARE_LINK='$CARE_LINK',
		CDFOUR='$CDFOUR',COUNSELORS_NAME='$COUNSELORS_NAME',RECIEVEDDATE='$RECIEVEDDATE', WHERE id='$id'");
		; 
		
		header("Location:../counsellingroom.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM laboratory WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$EXPIRYDATET1 = $res['EXPIRYDATET1'];
	$EXPIRYDATET2 = $res['EXPIRYDATET2'];
	$EXPIRYDATET3 = $res['EXPIRYDATET3'];
	$REACTIVITYT1 = $res['REACTIVITYT1'];
	$REACTIVITYT2 = $res['REACTIVITYT2'];
	$REACTIVITYT3 = $res['REACTIVITYT3'];
	$FINALREACTIVITY = $res['FINALREACTIVITY'];
	$TECHNICIAN_NAME = $res['TECHNICIAN_NAME'];
	$TITLE = $res['TITLE'];
	$RESULTSRECEIVED = $res['RESULTSRECEIVED'];
	$RECIEVEDASACOUPLE = $res['RECIEVEDASACOUPLE'];
	$COUPLERESULTS = $res['COUPLERESULTS'];
	$TB_SUSPICION = $res['TB_SUSPICION'];
	$COTRIMOXAZOLE_START = $res['COTRIMOXAZOLE_START'];
	$CARE_LINK = $res['CARE_LINK'];
	$CDFOUR = $res['CDFOUR'];
	$COUNSELORS_NAME = $res['COUNSELORS_NAME'];
	$RECIEVEDDATE = $res['RECIEVEDDATE'];
}

?>

</body>
</html>

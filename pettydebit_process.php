<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmultiple";

if(isset($_POST['BUDGETLINE_EXTENSION'])){
$xdt = trim($_POST['DATECREATED']);
$xdd = trim($_POST['EXPENDITURE_DETAILS']);
$vn = trim($_POST['VOUCHER_NO']);
$dt = trim($_POST['DEBIT']);
$vx = trim($_POST['BUDGETLINE_EXTENSION']);
$month = trim(date('M'));
$year = trim(date('Y'));
$fy = (intval(trim(date('Y')))-1).'/'.$year;
$fiscm = (intval(trim(date('Y')))-1).'/'.$month;
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

 $sql = "INSERT INTO pettycash (DATECREATED, EXPENDITURE_DETAILS, VOUCHER_NO, DEBIT, BUDGETLINE_EXTENSION, MONTH_NAME, YEAR_FULL, FY, FISCALMONTH)
                       VALUES (NOW(), '$xdd', '$vn', '$dt', '$vx', '$month', '$year', '$fy', '$fiscm')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:petty_cashmgt.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

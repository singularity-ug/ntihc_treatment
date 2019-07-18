 <?php
 
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['EMPLOYEENAME'])){  

$EMPLOYEENAME = trim($_POST['EMPLOYEENAME']); 
$IDNUMBER = trim($_POST['IDNUMBER']);
$EMPLOYEEPOSITION = trim($_POST['EMPLOYEEPOSITION']);
$DEPARTMENT = trim($_POST['DEPARTMENT']);
$FISCALMONTH = trim($_POST['FISCALMONTH']);
$FISCALYEAR   = trim($_POST['FISCALYEAR']);
$SUPACCOUNT = trim($_POST['SUPACCOUNT']);
$SUPERVISORNAME = trim($_POST['SUPERVISORNAME']);
$SUPERVISORPOSITION = trim($_POST['SUPERVISORPOSITION']);   
$TOTALHOURS = trim($_POST['TOTALHOURS']);
$PH = trim($_POST['PH']);
$W = trim($_POST['W']);
$NW = trim($_POST['NW']);
$GA   = trim($_POST['GA']);
$SD = trim($_POST['SD']);
$SL = trim($_POST['SL']);
$AL = trim($_POST['AL']);  
$ML = trim($_POST['ML']); 

$D16   = trim($_POST['D16']);
$D17 = trim($_POST['D17']);
$D18 = trim($_POST['D18']);
$D19 = trim($_POST['D19']);  
$D20 = trim($_POST['D20']); 
$D21   = trim($_POST['D21']);
$D22 = trim($_POST['D22']);
$D23 = trim($_POST['D23']);
$D24 = trim($_POST['D24']);  
$D25 = trim($_POST['D25']); 
$D26   = trim($_POST['D26']);
$D27 = trim($_POST['D27']);
$D28 = trim($_POST['D28']);
$D29 = trim($_POST['D29']);  
$D30 = trim($_POST['D30']); 
$D31   = trim($_POST['D31']);
$D1 = trim($_POST['D1']);
$D2 = trim($_POST['D2']);
$D3 = trim($_POST['D3']);  
$D4 = trim($_POST['D4']); 
$D5   = trim($_POST['D5']);
$D6 = trim($_POST['D6']);
$D7 = trim($_POST['D7']);
$D8 = trim($_POST['D8']);  
$D9 = trim($_POST['D9']); 
$D10 = trim($_POST['D10']);  
$D11 = trim($_POST['D11']); 
$D12   = trim($_POST['D12']);
$D13 = trim($_POST['D13']);
$D14 = trim($_POST['D14']);
$D15 = trim($_POST['D15']); 

$PHp = trim($_POST['PHp']);
$Wp = trim($_POST['Wp']);
$NWp = trim($_POST['NWp']);
$GAp   = trim($_POST['GAp']);
$SDp = trim($_POST['SDp']);
$SLp = trim($_POST['SLp']);
$ALp = trim($_POST['ALp']);  
$MLp = trim($_POST['MLp']); 
$WDD = trim($_POST['WDD']);
$WDDp = trim($_POST['WDDp']);  
$monthpicker = trim($_POST['monthpicker']);
$PERCENTAGE = trim($_POST['PERCENTAGE']);

$sql = "INSERT INTO timesheet (EMPLOYEENAME,  
									 IDNUMBER,  
									 EMPLOYEEPOSITION, 
									 DEPARTMENT, 
									 FISCALMONTH, 
									 FISCALYEAR,
									 SUPACCOUNT,
									 SUPERVISORNAME, 
									 SUPERVISORPOSITION, 
									 TOTALHOURS,  
									 PH,   W,   NW,  GA,  SD, SL,   AL,  ML,
									 PHp,   Wp,   NWp,  GAp,  SDp, SLp,   ALp,  MLp, WDD,  WDDp, monthpicker,
									 D16, D17, D18, D19, D20, D21, D22, D23, D24, D25, D26, D27, D28, 
									 D29, D30, D31, D1, D2, D3, D4, D5, D6, D7, D8, D9,D10,D11,
									 D12, D13,D14, 
									 PERCENTAGE,D15)
									    
									 
                             VALUES ('$EMPLOYEENAME', 
									 '$IDNUMBER',
									 '$EMPLOYEEPOSITION',
									 '$DEPARTMENT',
									 '$FISCALMONTH',
									 '$FISCALYEAR',                                    
									 '$SUPACCOUNT',
									 '$SUPERVISORNAME',
									 '$SUPERVISORPOSITION', 
									 '$TOTALHOURS',
									 '$PH',  '$W', '$NW', '$GA', '$SD', '$SL', '$AL', '$ML',
									 '$PHp',  '$Wp', '$NWp', '$GAp', '$SDp', '$SLp', '$ALp', '$MLp', '$WDD', '$WDDp', '$monthpicker',
									 '$D16', '$D17', '$D18', '$D19', '$D20', '$D21', '$D22', '$D23', '$D24','$D25','$D26', '$D27', '$D28',
									 '$D29', '$D30', '$D31', '$D1', '$D2', '$D3', '$D4', '$D5', '$D6', '$D7', '$D8', '$D9', '$D10', '$D11',
									 '$D12', '$D13', '$D14',
									 '$PERCENTAGE', '$D15')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:index.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

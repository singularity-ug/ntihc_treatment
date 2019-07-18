 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patientmgt";

if(isset($_POST['CLIENTNAME'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

  $sql1 ="SELECT id FROM antenatalcare  ORDER BY id DESC LIMIT 1";
  $NO ='0';
  if($result1 = mysqli_query($conn, $sql1)){
            while($row = mysqli_fetch_array($result1)){
			       $NO= ''.(intval($row['id'])) ;
					 }
					 }

 
$NTIHCNO = trim($_POST['NTIHCNO']);
$ORDERDATE = trim($_POST['ORDERDATE']);
$CLIENTNAME = trim($_POST['CLIENTNAME']); 
$SCHOOLINGSTATUS = trim($_POST['SCHOOLINGSTATUS']);
$AGE = trim($_POST['AGE']); 
$AGEGROUP = trim($_POST['AGEGROUP']); 
$PHONECONTACT    = trim($_POST['PHONECONTACT']); 
$HEALTHUNIT    = trim($_POST['HEALTHUNIT']);  
$DRUGORDER = trim($_POST['DRUGORDER']);
$USERINITIAL = trim($_POST['USERINITIAL']); 
$USERDESIGNATION    = trim($_POST['USERDESIGNATION']);   
$USERACCOUNT    = trim($_POST['USERACCOUNT']); 
  
$sql = "INSERT INTO anc_drugorders (NTIHCNO, ORDERDATE, CLIENTNAME, SCHOOLINGSTATUS, AGE, PHONECONTACT,HEALTHUNIT, 
								   AGEGROUP,  
								   DRUGORDER, USERINITIAL,  USERDESIGNATION, USERACCOUNT)
                             VALUES ('$NTIHCNO', '$ORDERDATE', '$CLIENTNAME', '$SCHOOLINGSTATUS', '$AGE', '$PHONECONTACT',
							 '$HEALTHUNIT',
							  '$AGEGROUP',   
							 '$DRUGORDER', '$USERINITIAL', '$USERDESIGNATION', '$USERACCOUNT')";
							 

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:anc_home.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

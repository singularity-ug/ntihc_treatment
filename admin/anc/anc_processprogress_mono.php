 
<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

if(isset($_POST['DATECREATED'])){
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
$DATECREATED  = trim($_POST['DATECREATED']);   
$HEALTHUNIT  = trim($_POST['HEALTHUNIT']);
$NTIHCNO  = trim($_POST['NTIHCNO']);
$SERIALNO  = trim($_POST['SERIALNO']);
$REGNO  = trim($_POST['REGNO']);
$CLIENTNAME  = trim($_POST['CLIENTNAME']);
$SCHOOLINGSTATUS  = trim($_POST['SCHOOLINGSTATUS']); 
$AGE  = trim($_POST['AGE']);
$AGE_GROUP  = trim($_POST['AGE_GROUP']);
$PHONECONTACT  = trim($_POST['PHONECONTACT']);  
$USERINITIAL  = trim($_POST['USERINITIAL']);
$USERDESIGNATION  = trim($_POST['USERDESIGNATION']);
$USERACCOUNT  = trim($_POST['USERACCOUNT']);
$PARTNERESCORT  = trim($_POST['PARTNERESCORT']);  

$VISTDATE  = trim($_POST['VISTDATE']);
$WEEKSOFAMENOE  = trim($_POST['WEEKSOFAMENOE']);  
$FUNDALHEIGHT  = trim($_POST['FUNDALHEIGHT']);
$PRESENTATION  = trim($_POST['PRESENTATION']);
$POSITIONLIE  = trim($_POST['POSITIONLIE']);
$RELATIONPP  = trim($_POST['RELATIONPP']);  

$FOETALHEART  = trim($_POST['FOETALHEART']);
$PROGRESSWEIGHT  = trim($_POST['PROGRESSWEIGHT']);  
$PROGRESSBP  = trim($_POST['PROGRESSBP']);
$VARICOSEOEDEMA  = trim($_POST['VARICOSEOEDEMA']);
$URINE  = trim($_POST['URINE']);
$TT  = trim($_POST['TT']);  

$IRONFOLIC  = trim($_POST['IRONFOLIC']);
$MEBENDAZOLE  = trim($_POST['MEBENDAZOLE']);  
$IPT  = trim($_POST['IPT']);
$NETUSE  = trim($_POST['NETUSE']);
$COMPLAITS  = trim($_POST['COMPLAITS']);
$RETURNDATE  = trim($_POST['RETURNDATE']); 
$NAMEOFEXAMINER  = trim($_POST['NAMEOFEXAMINER']);   
  
$sql = "INSERT INTO anteprogress (DATECREATED,HEALTHUNIT, NTIHCNO, SERIALNO, REGNO, CLIENTNAME, SCHOOLINGSTATUS,  
								   AGE, AGE_GROUP,  PHONECONTACT, 
								   USERINITIAL, USERDESIGNATION,  USERACCOUNT, PARTNERESCORT, 
								                             VISTDATE,
													         WEEKSOFAMENOE,
													         FUNDALHEIGHT,
													         PRESENTATION, POSITIONLIE,
															 RELATIONPP, FOETALHEART, PROGRESSWEIGHT, PROGRESSBP, VARICOSEOEDEMA, URINE,
															 TT, IRONFOLIC, MEBENDAZOLE,  IPT, NETUSE, COMPLAITS,  NAMEOFEXAMINER,
								                             RETURNDATE) 
                             VALUES ('$DATECREATED', '$HEALTHUNIT', '$NTIHCNO', '$SERIALNO', '$REGNO', '$CLIENTNAME', '$SCHOOLINGSTATUS',  
							 '$AGE', '$AGE_GROUP', '$PHONECONTACT', 
							 '$USERINITIAL', '$USERDESIGNATION', '$USERACCOUNT', '$PARTNERESCORT',  
							                           '$VISTDATE',
                                                       '$WEEKSOFAMENOE',
													   '$FUNDALHEIGHT',
													   '$PRESENTATION', '$POSITIONLIE',
													   '$RELATIONPP', '$FOETALHEART', '$PROGRESSWEIGHT', '$PROGRESSBP', '$VARICOSEOEDEMA', '$URINE',
													   '$TT', '$IRONFOLIC', '$MEBENDAZOLE',  '$IPT', '$NETUSE', '$COMPLAITS', '$NAMEOFEXAMINER',  
							 
							 '$RETURNDATE')";
							 

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
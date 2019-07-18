 
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
$VISTDATECREATED  = trim($_POST['VISTDATECREATED']);     
$PRREGNANCY  = trim($_POST['PRREGNANCY']);
$YEAROFPREG  = trim($_POST['YEAROFPREG']);
$BELOW12WEEKS  = trim($_POST['BELOW12WEEKS']);
$ABOVE12WEEKS  = trim($_POST['ABOVE12WEEKS']);
$PREMATURE  = trim($_POST['PREMATURE']);
$FULL  = trim($_POST['FULL']); 
$PLACEOFDELIVERY  = trim($_POST['PLACEOFDELIVERY']);
$TYPEOFDELIVERY  = trim($_POST['TYPEOFDELIVERY']);
$THIRDSTAGE  = trim($_POST['THIRDSTAGE']);  
$PUERPERLUM  = trim($_POST['PUERPERLUM']);
$ALIVESB  = trim($_POST['ALIVESB']);
$CHILDSEX  = trim($_POST['CHILDSEX']);  
$BIRTHWEIGHT  = trim($_POST['BIRTHWEIGHT']);
$IMMUN  = trim($_POST['IMMUN']);  
$HEALTHCONDITION  = trim($_POST['HEALTHCONDITION']);
 
  
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
  
$sql = "INSERT INTO antenatal_obstetric (DATECREATED,VISTDATECREATED,HEALTHUNIT, NTIHCNO, SERIALNO, REGNO, CLIENTNAME, SCHOOLINGSTATUS,  
								         AGE, AGE_GROUP,  PHONECONTACT, 
								         USERINITIAL, USERDESIGNATION, USERACCOUNT, 
								                            PRREGNANCY, YEAROFPREG, BELOW12WEEKS, ABOVE12WEEKS, PREMATURE,
                                                            FULL, PLACEOFDELIVERY, TYPEOFDELIVERY, THIRDSTAGE, PUERPERLUM,
											                ALIVESB, CHILDSEX, BIRTHWEIGHT, IMMUN, HEALTHCONDITION) 
															 
                             VALUES ('$DATECREATED','$VISTDATECREATED','$HEALTHUNIT', '$NTIHCNO', '$SERIALNO', '$REGNO', '$CLIENTNAME', '$SCHOOLINGSTATUS',  
							 '$AGE', '$AGE_GROUP', '$PHONECONTACT', 
							 '$USERINITIAL', '$USERDESIGNATION', '$USERACCOUNT',  
							   
							                        '$PRREGNANCY', '$YEAROFPREG', '$BELOW12WEEKS', '$ABOVE12WEEKS', '$PREMATURE',
							                        '$FULL', '$PLACEOFDELIVERY', '$TYPEOFDELIVERY', '$THIRDSTAGE', '$PUERPERLUM',
							                        '$ALIVESB', '$CHILDSEX', '$BIRTHWEIGHT', '$IMMUN', '$HEALTHCONDITION')";
													 

							 

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
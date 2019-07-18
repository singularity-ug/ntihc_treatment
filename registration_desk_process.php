<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

if(isset($_POST['FIRSTNAME'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

  $sql1 ="SELECT PID FROM cmpatientsnewregistration  ORDER BY PID DESC LIMIT 1";
  $NO ='0';
  if($result1 = mysqli_query($conn, $sql1)){
            while($row = mysqli_fetch_array($result1)){
             $NO= ''.(intval($row['PID'])) ;
           }
           }


$NTIHCNO = trim($_POST['SCHOOLINGSTATUS']).'/'.(intval($NO)+1);
$DATECREATED = trim($_POST['DATECREATED']);
$fnama = trim($_POST['FIRSTNAME']);
$urgtya = trim($_POST['LASTNAME']);
$vtypa = trim($_POST['SEX']);
$poststa = trim($_POST['AGE']);
$poststac = trim($_POST['AGE1']);
$chkna = trim($_POST['SCHOOLINGSTATUS']);
$marita = trim($_POST['MARITALSTATUS']);
$empa = trim($_POST['EMPLOYMENTSTATUS']);
$dista = trim($_POST['DISTRICT']);
$divia = trim($_POST['DIVISION']);
$placresa = trim($_POST['PLACEOFRESIDENCE']);
$herdaa = trim($_POST['PHONECONTACT']);
$howdida = trim($_POST['MOTHERFIRSTNAME']);
$descra = trim($_POST['MOTHERLASTNAME']);
$probca = trim($_POST['FATHERFIRSTNAME']);
$actia = trim($_POST['FATHERLASTNAME']);
$recneaa = trim($_POST['HEAREDABOUTNTIHC']);
$hloe    = trim($_POST['HIGHESTLEVELOFEDUCATION']); 
$rejex    = trim($_POST['REGISTEREDBY']); 
$regisnn    = trim($_POST['REGISTERACCOUNT']); 
$emmx    = trim($_POST['TRIBE']); 
$emxx    = trim($_POST['RELIGION']); 
$TRIBE_OTHERS    = trim($_POST['TRIBE_OTHERS']); 
   
$VISTTYPE    = trim($_POST['VISTTYPE']);  
$OTHERRELIGION    = trim($_POST['OTHERRELIGION']); 
$OTHERDISTRICTS    = trim($_POST['OTHERDISTRICTS']); 
$OTHERSOURCESOFINFO    = trim($_POST['OTHERSOURCESOFINFO']);   

 $sql = "INSERT INTO cmpatientsnewregistration (NTIHCNO, DATECREATED, FIRSTNAME, LASTNAME, SEX, AGE,AGE1, SCHOOLINGSTATUS,HIGHESTLEVELOFEDUCATION, MARITALSTATUS, EMPLOYMENTSTATUS,
                                                DISTRICT, DIVISION, PLACEOFRESIDENCE, PHONECONTACT, MOTHERFIRSTNAME, MOTHERLASTNAME,
                                                 FATHERFIRSTNAME, FATHERLASTNAME, HEAREDABOUTNTIHC, REGISTEREDBY, REGISTERACCOUNT, TRIBE, SERVICEPOSTS,
                                                 RELIGION,
                         VISTTYPE,OTHERRELIGION,OTHERDISTRICTS,OTHERSOURCESOFINFO,
                         TRIBE_OTHERS)
                       VALUES ('$NTIHCNO', '$DATECREATED', '$fnama', '$urgtya', '$vtypa', '$poststa', '$poststac', '$chkna','$hloe', '$marita', '$empa', '$dista', '$divia',
                               '$placresa', '$herdaa', '$howdida', '$descra', '$probca', '$actia',  '$recneaa','$rejex','$regisnn','$emmx','POSTED',
                               '$emxx', 
                 '$VISTTYPE','$OTHERRELIGION','$OTHERDISTRICTS','$OTHERSOURCESOFINFO',
                 '$TRIBE_OTHERS')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully   :  ". json_encode($_POST).' error';
  if(trim($_POST['ISANC'])=='0'){
  header("location:registration_desk.php");
  }
  else if(trim($_POST['ISANC'])=='123'){  header("location:admin/anc/anc_new.php?freg=$NTIHCNO");}
  else{ echo json_encode($_POST);}
  exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

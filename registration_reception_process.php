<?php

 function ageCalculator($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today     = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }else{
        return 0;
    }
}

function getAgegroup($dob1){
  $age11 = ageCalculator($dob1);
  if ((intval($age11)>=10)&&(intval($age11)<=14))     { return '10-14';}
  else if((intval($age11)>=15)&&(intval($age11)<=19)) { return '15-19';}
  else if((intval($age11)>=20)&&(intval($age11)<=24)) { return '20-24';}
  else if((intval($age11)>24))                        { return '24';}
  else{return 'X';}
}

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

if(isset($_POST['NTIHCNO'])){
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  }

$sfnama = trim($_POST['NTIHCNO']);

  $sql1 ="SELECT PID,VISITS,SEX,AGE FROM cmpatientsnewregistration  WHERE NTIHCNO='$sfnama'";
       $service_episode="";
       $demography = array();
       $demo ="";
       $ag='';
       $sex='';
       $result = $conn->query($sql1);

       while($row = $result->fetch_assoc()) {
       $service_episode = $sfnama.'__'.(intval($row['VISITS'])+1); //create the service episode
       $demography      = $row;
       $ag  = getAgegroup($row['AGE']);
       $sex = $row['SEX'];
      }
       $demo = json_encode($demography);   //this is the demography
 
$surgtya = trim($_POST['DATECREATED']);
$svtypa = trim($_POST['SERVICETYPE']);
$spoststa = trim($_POST['VISTTYPE']);
$schkna  = trim($_POST['DATATYPE']);
$cname   = trim($_POST['CNAME']);
$chckin  = trim($_POST['CHECKIN']);
$agex  = trim($_POST['AGE1']);
$rmcount  = trim($_POST['REGISTERACCOUNT']);
$initials  = trim($_POST['USERINITIAL']);
$PID  = trim($_POST['PID']);
$m = date("m");
$y = date("Y");
$RSVNID  = trim($_POST['RSVNID']);
$MATERNALHEALTHSERVICE  = trim($_POST['MATERNALHEALTHSERVICE']);
$SCHOOLING  = trim($_POST['SCHOOLING']); 


$sql = "INSERT INTO cmpatientsregistration (NTIHCNO, DATECREATED, SERVICETYPE, VISTTYPE, DATATYPE,CHECKIN, CLIENTNAME, SERVICE_EPISODE,AGE_GROUP,SEX, AGE1, REGISTERACCOUNT,FISCALMONTH,FISCALYEAR, RSVNID, MATERNALHEALTHSERVICE, SCHOOLING, USERINITIAL)
                                     VALUES ('$sfnama', NOW(), '$svtypa', '$spoststa', '$schkna','$chckin','$cname','$service_episode','$ag','$sex' ,'$agex',
                  '$rmcount', '$m', '$y', '$RSVNID',  '$MATERNALHEALTHSERVICE', 
                  '$SCHOOLING', '$initials')";
                  
                  
           mysqli_query($conn, "UPDATE `cmpatientsnewregistration` SET `SERVICEPOSTS` =  'YES' 
                          WHERE `PID` = '$PID'");        
                 

if ($conn->query($sql)) {

  $conn->query("UPDATE cmpatientsnewregistration SET 
                                                    VISITS, SERVICEPOSTS=VISITS+1, YES WHERE NTIHCNO='$sfnama' AND  PID=PID");

    //update the REGN 
   

    //echo "New record created successfully";
  header("location:registration_desk.php");
  exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else{header("location:index.php");  exit();}
?>
 

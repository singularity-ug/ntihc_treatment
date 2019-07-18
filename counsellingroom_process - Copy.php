<?php

$cats = array("REASONFORTEST","GENERALTOPIC", "PSHYCOLOGICAL", "SEXUAL HEALTH","STDS","BODYCHANGES");

if(isset($_POST['NTIHCNO'])){
$datt   = trim($_POST['DATECREATED']);
$fnam   = trim($_POST['NTIHCNO']);
$urgty  = trim($_POST['VISTBY']);
$chkn   = "";//trim($_POST['REASONFORTEST']);
$marit  = trim($_POST['ACTION']);
$emp    = trim($_POST['BRIEF']);
$dist   = trim($_POST['COUNSELLING']);
$sed    = trim($_POST['SENDER']);
$rsns   = explode(',',trim($_POST['values']));        //0, 0, 0, 0, 0, 0

$connect = new mysqli("localhost", "root", "", "patientmgt");
/*check connection */
if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if( $result = $connect->query("SELECT VISITS , AGE ,  SEX, FIRSTNAME, LASTNAME, MARITALSTATUS, PHONECONTACT, EMPLOYMENTSTATUS,
                                      DISTRICT,DIVISION, SCHOOLINGSTATUS FROM `cmpatientsnewregistration` WHERE NTIHCNO ='".$fnam."'"))
{
    $total  = $result->num_rows;  //RESULTS RETURNED
    if($total<=0){  echo "no client found";         }      //DO NOTHING

    else{//do something where the user exists
      $tot    = 0;
      $age = 0;
      $sex  ='';
      $sch  ='';
      $name =''; //CLIENTNAME
      $ms  = '';
      $pc  ='';
      $es  = '';
      $ds  = '';
      $dv  = '';
      while ($row = $result->fetch_assoc() ) {  $tot= intval($row["VISITS"]);
                                                $age= intval($row["AGE"]);
                                                $sex = $row["SEX"];
                                                $sch = $row["SCHOOLINGSTATUS"];
                                                $name = $row["FIRSTNAME"].' '.$row["LASTNAME"]; //CLIENTNAME
                                                $ms = $row["MARITALSTATUS"];
                                                $pc  =$row["PHONECONTACT"];
                                                $es  = $row["EMPLOYMENTSTATUS"];
                                                $ds  = $row["DISTRICT"];
                                                $dv  = $row["DIVISION"];
                                           }

           $s_episode = $fnam."_". ($tot+1);
         //echo count($rsns);
           for ($i=0; $i < count($rsns); $i++) {

              if($rsns[$i]>0){
                $x=1;
                   for ($x=1; $x <= $rsns[$i]; $x++) {
                        $f    = 'fields'.($i+1).'_'.$x;  // post value for field
                        $prob = trim($_POST[$f]);        // actual value
                        $cat  = $cats[$i];               // category

   $sql ="INSERT INTO `counsellingservices` (`SERVICE_EPISODE`,
                                                   `TIMESTAMP`,
                                                   `DATECREATED`,
                                                   `NTIHCNO`,
                                                   `VISTBY`,
                                                   `REASONFORTEST`,
                                                   `PROBLEM_CATEGORY`,
                                                   `PROBLEM`,
                                                   `ACTION`,
                                                   `BRIEF`,
                                                   `COUNSELLING`,
                                                   `AGE`,
                                                   `SEX`,
                                                   `SCH`,
                                                   `CLIENTNAME`,
                                                   `MARITAL`,
                                                   `PHONECONTACT`,
                                                   `EMPLOYMENT`,
                                                   `DISTRICT`,
                                                   `DIVISION`)
                                            VALUES ('$s_episode',
                                                    CURRENT_TIMESTAMP,
                                                    NOW(),
                                                    '$fnam',
                                                    '$urgty',
                                                    '$chkn',
                                                    '$cat',
                                                    '$prob',
                                                    '$marit',
                                                    '$emp',
                                                    '$dist',
                                                    '$age',
                                                    '$sex',
                                                    '$sch',
                                                    '$name',
                                                    '$ms',
                                                    '$pc',
                                                    '$es',
                                                    '$ds',
                                                    '$dv')";
          //GENERATE THE QUERY TO INSERT AND UPDATE THE NUMBER OF VISITS.
           $connect->query($sql);
           //echo '<br />'.$sql;
                 }
               }
           }

           $connect->query("UPDATE `cmpatientsnewregistration`SET `VISITS` = (`VISITS`+1)  WHERE NTIHCNO ='".$fnam."'");

           $sql = "INSERT INTO requestforlabtest (NTIHCNO, DATECREATED, SENDER, VISTBY, NAME)
                                          VALUES ('$fnam', NOW(), '$sed', '$urgty', '$name')";
           $connect->query($sql);

           header("location:counsellingroom.php");
    }
}

else {
 echo "ERROR OCCURED ".$connect->error;
}

}

else{echo "ntihc not set";}
?>

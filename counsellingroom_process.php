<?php

$cats = array("REASONFORTEST","GENERALTOPIC", "PSHYCOLOGICAL", "SEXUAL HEALTH","STDS","BODYCHANGES");

if(isset($_POST['NTIHCNO'])){
$datt   = trim($_POST['DATECREATED']);
$fnam   = trim($_POST['NTIHCNO']);
$urgty  = trim($_POST['VISTBY']);
$chkn   = trim($_POST['REASONFORTEST']); 
$emp    = trim($_POST['BRIEF']);
$dist   = trim($_POST['COUNSELLING']);
$USERINITIALa    = trim($_POST['USERINITIAL']);
$HCTURGENCYa    = trim($_POST['HCTURGENCY']);
$PRE_TESTCOUSELLING_GIVENa   = trim($_POST['PRE_TESTCOUSELLING_GIVEN']);
$COUNSELLED_ASa        = trim($_POST['COUNSELLED_AS']); 
$HCT_ENTRYPOINTa       = trim($_POST['HCT_ENTRYPOINT']); 
$EVERTESTEDBEFOREa     = trim($_POST['EVERTESTEDBEFORE']);
$NUMBEROFTESTSa        = trim($_POST['NUMBEROFTESTS']);
$NUMBEROFSEXUALPARTNERSa    = trim($_POST['NUMBEROFSEXUALPARTNERS']);
$LAST_TESTRESULTSa      = trim($_POST['LAST_TESTRESULTS']);
$SPOUSE_PARTNERTESTED_BEFOREa       = trim($_POST['SPOUSE_PARTNERTESTED_BEFORE']);
$IFYES_RESULTSa           = trim($_POST['IFYES_RESULTS']);
$TESTDESCRIPTION    = trim($_POST['TESTDESCRIPTION']);
$REQUESTINGUNIT   = trim($_POST['REQUESTINGUNIT']);
$REASONFORTEST   = trim($_POST['REASONFORTEST']); 

$ESCORTEDBY   = trim($_POST['ESCORTEDBY']); 
$GENREQT   = trim($_POST['GENREQT']); 
$AGE1   = trim($_POST['AGE1']);
$AGE_GROUP   = trim($_POST['AGE_GROUP']); 
$RSVNID   = trim($_POST['RSVNID']); 
 

$TIMEOUT   = trim($_POST['TIMEOUT']); 
$SERVICEEXTENTION   = trim($_POST['SERVICEEXTENTION']); 
  
$rsns   = explode(',',trim($_POST['values']));        //0, 0, 0, 0, 0, 0

$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
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
                           `ESCORTEDBY`,  `GENREQT`,
                                                   `REASONFORTEST`,
                                                   `PROBLEM_CATEGORY`,
                                                   `PROBLEM`, 
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
                           `DIVISION`,
                                                   `USERINITIAL`)
                                            VALUES ('$s_episode',
                                                    CURRENT_TIMESTAMP,
                                                    NOW(),
                                                    '$fnam',
                                                    '$urgty',
                            '$ESCORTEDBY',  '$GENREQT',
                                                    '$chkn',
                                                    '$cat',
                                                    '$prob', 
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
                          '$dv',
                                                    '$USERINITIALa')";
          //GENERATE THE QUERY TO INSERT AND UPDATE THE NUMBER OF VISITS.
           $connect->query($sql);
           //echo '<br />'.$sql;
                 }
               }
           }
           $rid = trim($_POST['RID']);
           $connect->query("UPDATE `cmpatientsregistration` SET 
                               `INSVCSTATUS` = 'COUNSELLING SERVICES', 
                               `REQUESTINGUNIT` = 'HCT UNIT', 
                               `TIMEOUT` = '$TIMEOUT', 
                   `SERVICEEXTENTION` = '$SERVICEEXTENTION', 
                               `SERVICEPROVIDER` = '$USERINITIALa' 
                                WHERE `RID` = '$rid'");

         //     do a lab request 
        
         if($HCTURGENCYa=='HCT WANTED'){
       $connect->query("UPDATE `cmpatientsregistration` SET
                                                       `HCT` = '1' 
                                WHERE `RID` = '$rid'"); }                                                                                                                                                    
       if($HCTURGENCYa=='HCT WANTED'){
       $connect->query("UPDATE `cmpatientsregistration` SET
                                                       `TESTSTATUS` = 'NOT STARTED' 
                                WHERE `RID` = '$rid'"); }
                                
       if($HCTURGENCYa=='HCT WANTED'){
       $connect->query("UPDATE `cmpatientsregistration` SET
                                                       `LABVIST` = '1' 
                                WHERE `RID` = '$rid'"); }                                                  if($GENREQT=='REQUIRED'){
       $connect->query("UPDATE `cmpatientsregistration` SET
                                                       `GENERALCOUNSELLING` = '1' 
                                WHERE `RID` = '$rid'"); } 
                              
       //     do a HCT order
            if($HCTURGENCYa=='HCT WANTED'){
            $sql22 = "INSERT INTO laborders (NTIHCNO, DATECREATED, TESTDESCRIPTION,  USERINITIAL, REQUESTINGUNIT, NAME, 
                                    RSVNID, TESTSTATUS,
                                      AGE1, AGE_GROUP, SEX, SCHOOLING, MARITAL, DISTRICT, DIVISION, EMPLOYMENT, PHONECONTACT)
                                          VALUES ('$fnam', NOW(), '$TESTDESCRIPTION',  '$USERINITIALa', '$REQUESTINGUNIT', '$name', 
                      '$RSVNID', 'NOT STARTED',
                      '$AGE1', '$AGE_GROUP', '$sex', '$sch', '$ms', '$ds', '$dv', '$emp', '$pc')";
              $connect->query($sql22);
         }  


           //     do a hiv book
            if($HCTURGENCYa=='HCT WANTED'){
            $sql209 = "INSERT INTO hivtests (NTIHCNO, DATECREATED, TESTDESCRIPTION, USERINITIAL, REQUESTINGUNIT, NAME,
                                      RSVNID, TESTSTATUS, 
                                      AGE1, AGE_GROUP, SEX, SCHOOLING, MARITAL, DISTRICT, DIVISION, EMPLOYMENT, PHONECONTACT)
                                          VALUES ('$fnam', NOW(), '$TESTDESCRIPTION',  '$USERINITIALa', '$REQUESTINGUNIT', '$name',                                          '$RSVNID', 'NOT STARTED', 
                      '$AGE1', '$AGE_GROUP', '$sex', '$sch', '$ms', '$ds', '$dv', '$emp', '$pc')";
              $connect->query($sql209);
             }                                                      


       //insert initial data into the hct counselling
         $sql7 ="INSERT INTO `patientmgt`.`hct_counselling_andtesting`(`TIMESTAMP`,
                                                        `NTIHCNO`,
                                                        `DATECREATED`,
                            `HCTURGENCY`,
                                                        `PRE_TESTCOUSELLING_GIVEN`,
                                                        `COUNSELLED_AS`, 
                                                        `HCT_ENTRYPOINT`, 
                                                        `EVERTESTEDBEFORE`,
                                                        `NUMBEROFTESTS`,
                                                        `NUMBEROFSEXUALPARTNERS`,
                                                        `LAST_TESTRESULTS`,
                                                        `SPOUSE_PARTNERTESTED_BEFORE`,
                                                        `IFYES_RESULTS`, 
                            `REASONFORTEST`,  
                              `CLIENTNAME`,
                                                       `AGE1`, `AGE_GROUP`,
                                                       `SEX`,
                                                       `MARITAL`,
                                                       `SCHOOLING`,
                                                       `EMPLOYMENT`,
                                                       `DISTRICT`,
                                                       `DIVISION`,
                                                       `SERVICE_EPISODE`,
                             `USERINITIAL`)
                                               VALUES (CURRENT_TIMESTAMP,
                                                       '$fnam',
                                                       '$datt',
                                                       '$HCTURGENCYa',
                                                       '$PRE_TESTCOUSELLING_GIVENa ',
                                                       '$COUNSELLED_ASa', 
                                                       '$HCT_ENTRYPOINTa', 
                                                       '$EVERTESTEDBEFOREa',
                                                       '$NUMBEROFTESTSa',
                                                       '$NUMBEROFSEXUALPARTNERSa ',
                                                       '$LAST_TESTRESULTSa',
                                                       '$SPOUSE_PARTNERTESTED_BEFOREa',
                                                       '$IFYES_RESULTSa',
                              '$REASONFORTEST', 
                                                       '$name',
                                                        '$AGE1',  '$AGE_GROUP',
                                                       '$sex',
                                                       '$ms',
                                                       '$sch',
                                                       '$es',
                                                       '$ds',
                                                       '$dv',
                             '$s_episode', 
                                                       '$USERINITIALa')";

           if ($connect->query($sql7)) {  header("location:counsellingroom.php"); exit();        
        }       
      
     else{ echo  $sql7."   here is the problem :".$connect->error;    exit();}

            }

           header("location:counsellingroom.php");
           exit();  }
          } 
          else{echo "ntihc not set";}

          ?> 
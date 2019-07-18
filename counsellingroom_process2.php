<?php 
$cats = array("REASONFORTEST","GENERALTOPIC", "PSHYCOLOGICAL", "SEXUAL HEALTH","STDS","BODYCHANGES"); 

if(isset($_POST['NTIHCNO'])){
$datt   = trim($_POST['DATECREATED']);
$fnam   = trim($_POST['NTIHCNO']);
$urgty  = trim($_POST['VISTBY']); 
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
 $SERVICEPROVIDER   = trim($_POST['SERVICEPROVIDER']); 
 $TIMEOUT   = trim($_POST['TIMEOUT']);
 $SERVICEEXTENTION   = trim($_POST['SERVICEEXTENTION']);
 $OUTSVSTATUS   = trim($_POST['OUTSVSTATUS']);
 $AGE1   = trim($_POST['AGE1']);
 $AGE_GROUP   = trim($_POST['AGE_GROUP']);
 $VISTTYPE   = trim($_POST['VISTTYPE']);
 
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
                                                    '$fnam',
                          NOW(), 
                                                    '$urgty', 
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
                               `TIMEOUT` = '$TIMEOUT',
                               `SERVICEPROVIDER` = '$SERVICEPROVIDER', 
                               `SERVICEEXTENTION` = '$SERVICEEXTENTION', 
                               `OUTSVSTATUS` = '$OUTSVSTATUS', 
                                 `SCHOOLING` = '$sch' 
                                WHERE `RID` = '$rid'");

       //     do a lab request
      if($HCTURGENCYa=='HCT WANTED'){
           $sql = "INSERT INTO laboratory (NTIHCNO, DATECREATED, TESTDESCRIPTION,  USERINITIAL, REQUESTINGUNIT, NAME,
                                       AGE1,SEX,AGE_GROUP,
                       SCHOOLING,MARITALSTATUS,DISTRICT,DIVISION,EMPLOYMENT,PHONECONTACT,VISTTYPE)
                                           VALUES ('$fnam', NOW(), '$TESTDESCRIPTION',  '$USERINITIALa', '$REQUESTINGUNIT', '$name',
                       '$AGE1', '$sex', '$AGE_GROUP', 
                       '$sch', '$ms', '$ds', '$dv',  '$es', '$pc', '$VISTTYPE')";
           $connect->query($sql);

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
                             `CLIENTNAME`,
                                                       `AGE`,
                                                       `SEX`,
                                                       `MARITAL`,
                                                       `SCHOOLING`,
                                                       `EMPLOYMENT`,
                                                       `DISTRICT`,
                                                       `DIVISION`,
                                                       `SERVICE_EPISODE`,
                             `USERINITIAL`,  
                             `AGE1`, `VISTTYPE`,
                             `AGE_GROUP`)
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
                                                       '$name',
                                                       '$age',
                                                       '$sex',
                                                       '$ms',
                                                       '$sch',
                                                       '$es',
                                                       '$ds',
                                                       '$dv',
                             '$s_episode', 
                                                       '$USERINITIALa',  
                             '$AGE1',  '$VISTTYPE',
                             '$AGE_GROUP')";

           if ($connect->query($sql7)) {  header("location:counsellingroom.php"); exit();        
        }       
      
     else{ echo  $sql7."   here is the problem :".$connect->error;    exit();}

            }

           header("location:counsellingroom.php");
           exit();  }
          }
          }
          else{echo "ntihc not set";}

          ?>

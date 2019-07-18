<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>

<?php 
if(isset($_POST['NTIHCNO'])){
$datt   = trim($_POST['DATECREATED']);
$fnam   = trim($_POST['NTIHCNO']);
$urgtyn  = trim($_POST['VISTBY']);
$chknn   = "";//trim($_POST['REASONFORTEST']);
$urgemp    = trim($_POST['URGENCYTYPE']);
$cod  = trim($_POST['COUNSELLINGDONE']);
$acti    = trim($_POST['ACTIONTAKEN']);
$prb   = trim($_POST['PROBLEMBRIEF']);
$sedb    = trim($_POST['USERINITIAL']);
$seff    = trim($_POST['TROOM_INITIATION']);
$desc    = trim($_POST['TESTDESCRIPTION']);
$hs     = trim($_POST['HCGSTATUS']);
$hr     = trim($_POST['HCGRESULTS']);
$hp     = trim($_POST['HCGPOSITIVE']);
$fop    = trim($_POST['FOLLOWUP']);
$fodd   = trim($_POST['FOLLOWUPDATE']);
$SEX   = trim($_POST['SEX']);
$reft   = trim($_POST['REFTUNER']);
$medr   = trim($_POST['MEDICALREFERRAL']);
$svcr   = trim($_POST['SERVICEREFERREDFOR']);
$HCTCODE   = trim($_POST['HCTCODE']);
 
$REQUESTINGUNIT   = trim($_POST['REQUESTINGUNIT']);
$TIMEOUT   = trim($_POST['TIMEOUT']);
$REGISTERACCOUNT   = trim($_POST['REGISTERACCOUNT']);
$AGE1   = trim($_POST['AGE1']);
$AGE_GROUP   = trim($_POST['AGE_GROUP']);
$PRESCRIPTIONCOMMENT   = trim($_POST['PRESCRIPTIONCOMMENT']);

$SERVICEEXTENTION   = trim($_POST['SERVICEEXTENTION']);
$OUTSVSTATUS   = trim($_POST['OUTSVSTATUS']);  

$art2     = trim($_POST['art2']);
$art3     = trim($_POST['art3']);
$art4     = trim($_POST['art4']);
$art5     = trim($_POST['art5']);
$art6     = trim($_POST['art6']);
$art7     = trim($_POST['art7']);
$art8     = trim($_POST['art8']);
$art9     = trim($_POST['art9']);
$art10     = trim($_POST['art10']);
$art11     = trim($_POST['art11']);
$art12     = trim($_POST['art12']);
$art13     = trim($_POST['art13']); 
$art14     = trim($_POST['art14']);
$art15     = trim($_POST['art15']);
$art16     = trim($_POST['art16']);
$art17     = trim($_POST['art17']);
$art18     = trim($_POST['art18']);
$art19     = trim($_POST['art19']);
$art20     = trim($_POST['art20']);
$art21     = trim($_POST['art21']);
$art22     = trim($_POST['art22']);   
$art23     = trim($_POST['art23']); 
$art24     = trim($_POST['art24']);
$art25     = trim($_POST['art25']);
 
$RSVNID   = trim($_POST['RSVNID']);  
 

$rowsss  = trim($_POST['mytable_rows']);
$rowsss1 = trim($_POST['mytable_rows1']);

$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
/*check connection */
if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
}
//print_r($_POST);

if( $result = $connect->query("SELECT VISITS , AGE ,  SEX, FIRSTNAME, LASTNAME, MARITALSTATUS, PHONECONTACT, EMPLOYMENTSTATUS,
                                      DISTRICT,DIVISION, SCHOOLINGSTATUS FROM `cmpatientsnewregistration` WHERE NTIHCNO ='".$fnam."'"))
{
    $total  = $result->num_rows;  //RESULTS RETURNED
    if($total<=0){  echo "no client found";
           header('location:family_planning.php');
      exit();
          }      //DO NOTHING

    else{//do something where the user exists
     //echo " <br /> clientS found : ".$total;

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

                                              //  print_r($row);
                                           }

           $s_episode = $fnam."_". ($tot+1);

           $rsns      = intval($rowsss);  //convert value to integer mytable_rows
              if($rsns>0){
        $prescccc    = intval($rowsss1);  if($presccc<=0){ $acti='';}
                $x=1;
                   for ($x=1; $x <= $rsns; $x++) {

                        $prob = trim($_POST['p_'.$x]);       
              $qa = trim($_POST['aa_'.$x]); 
              $qb = trim($_POST['bb_'.$x]); 
              $qc = trim($_POST['cc_'.$x]);
              $qd = trim($_POST['dd_'.$x]); 
              $qe = trim($_POST['ee_'.$x]); 
              $qf = trim($_POST['ff_'.$x]);
                        $cat  = trim($_POST['c_'.$x]);         


  $sql="INSERT INTO `patientmgt`.`family_planning` (`TIMESTAMP`,
                                                       `NTIHCNO`,
                                                       `DATECREATED`,
                                                       `VISTBY`,
                             `HCTCODE`,
                            
                                                       `LNMP`,   `BP`,  `WT`,  `GSPGSN`,
                             `FPCOMMENTS`,  `FAMILYPLANNINGMETHOD`,  `QUANTITY`,`RETURNDATE`, 
                                                       `FOLLOWUP`,   `FOLLOWUPDATE`, 
 
                                                       `ACTIONTAKEN`, 
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
                             `REGISTERACCOUNT`,
                             `AGE1`, `RSVNID`,
                             `AGE_GROUP`)
                     
                                               VALUES (CURRENT_TIMESTAMP,
                                                       '$fnam',
                                                       '$datt',
                                                       '$urgtyn',
                             '$HCTCODE', 
                                                       '$cat',
                             '$qa', '$qb', '$qc', '$qd', '$qe', '$qf',
                                                       '$prob', 
                             '$fop', '$fodd',
                                                       '$acti',
                                                       '$name',
                                                       '$age',
                                                       '$sex',
                                                       '$ms',
                                                       '$sch',
                                                       '$es',
                                                       '$ds',
                                                       '$dv',
                                                       '$s_episode',
                             '$sedb',
                             '$REGISTERACCOUNT',
                             '$AGE1', '$RSVNID',
                             '$AGE_GROUP')";

          //GENERATE THE QUERY TO INSERT AND UPDATE THE NUMBER OF VISITS.
          if ($connect->query($sql)) {
          //  echo "<br /> something  didnt go  wrong : ";
          }

          else {
            echo "something went wrong : 1".$connect->error;
          }
          // echo "<br /> ".$sql;
           //echo '<br />'.$sql;
                 }
               }

           $rid = trim($_POST['RID']);
           $connect->query("UPDATE `cmpatientsregistration` SET
                                                       `INSVCSTATUS` = 'FAMILY PLANNING',
                               `TIMEOUT` = '$TIMEOUT',
                               `SERVICEPROVIDER` = '$sedb',
                               `SCHOOLING` = '$sch', 
                               `OUTSVSTATUS` = '$OUTSVSTATUS',  
                               `SERVICEEXTENTION` = '$SERVICEEXTENTION', 
                               `FOLLOWUP` = '$fop', 
                               `FOLLOWUPDATE` = '$fodd',  
                               `FP` = '1'
                                WHERE `RID` = '$rid'");
                               
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                     if($art2=='Active'){ 
       $connect->query("UPDATE `cmpatientsregistration` SET
                                                       `ART` = '1' 
                                WHERE `RID` = '$rid'"); } 
       if($hs=='YES'){  
       $connect->query("UPDATE `cmpatientsregistration` SET
                                                       `HCG` = '1' 
                                WHERE `RID` = '$rid'"); }
                              
       if($reft=='TURN ON'){
       $connect->query("UPDATE `cmpatientsregistration` SET
                                                       `REFERAL` = '1' 
                                WHERE `RID` = '$rid'"); }
       if($seff=='ON'){
       $connect->query("UPDATE `cmpatientsregistration` SET
                                                       `LABVIST` = '1' 
                                WHERE `RID` = '$rid'"); }                                                                                                                                                    
                   
                              
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$rsns      = intval($rowsss1);
   if($rsns>0){
     $x=1;
        for ($x=1; $x <= $rsns; $x++) {
             $dns  = trim($_POST['dn_'.$x]);        // drug name
             $fqc  = trim($_POST['fq_'.$x]);       // frequency
             $tim  = trim($_POST['tm_'.$x]);       // times
             $pd   = trim($_POST['pd_'.$x]);       // period
             $qty  = trim($_POST['qty_'.$x]);       // qty
             $sql ="INSERT INTO `prescription` (`TIMESTAMP`,
                                `DATECREATED`,
                                `NTIHCNO`,
                                `DRUGNAME`,
                `FREQUENCY`,
                `TIMES`,
                `PERIOD`,
                                 `QTYPRESCRIBED`,
                 `PROBLEMBRIEF`,
                 `FOLLOWUP`,
                 `FOLLOWUPDATE`,
                                 `CLIENTNAME`,
                                 `AGE`,
                                 `SEX`,
                                 `SCHOOLING`,
                                 `MARITAL`,
                                 `SERVICE_EPISODE`,
                 `PRESCRIPTIONCOMMENT`,
                 `USERINITIAL`)

              VALUES (CURRENT_TIMESTAMP,
                                 '$datt',
                                 '$fnam',
                                 '$dns',
                 '$fqc',
                 '$tim',
                                 '$pd',
                                 '$qty',
                 '$prb',
                 '$fop',
                 '$fodd',
                                 '$name',
                                 '$age',
                                 '$sex',
                                 '$sch',
                                 '$ms',
                                 '$s_episode',
                 '$PRESCRIPTIONCOMMENT',
                 '$sedb')";

//GENERATE THE QUERY TO INSERT AND UPDATE THE NUMBER OF VISITS.
if ($connect->query($sql)) {
//  echo "<br /> something  didnt go  wrong : ";
}

else {
 echo "something went wrong : 1".$connect->error;
}
// echo "<br /> ".$sql;
//echo '<br />'.$sql;
      }
    }


          //////////////////////////////////////////////////////////////////////////////////////////////////////////////

           }

      //update the lab visits
           $connect->query("UPDATE `cmpatientsnewregistration`SET `VISITS` = (`VISITS`+1)  WHERE NTIHCNO ='".$fnam."'");

         //     do a lab request
         if($seff=='ON'){
           $sql = "INSERT INTO laboratory (NTIHCNO, DATECREATED, USERINITIAL, VISTBY, NAME, TESTDESCRIPTION, REQUESTINGUNIT,
       AGE1,SEX,AGE_GROUP,SCHOOLING,MARITALSTATUS,DISTRICT,DIVISION,EMPLOYMENT,PHONECONTACT,RSVNID)  
                                       VALUES ('$fnam', NOW(), '$sedb', '$urgtyn', '$name', '$desc', '$REQUESTINGUNIT',
                     '$AGE1', '$SEX', '$AGE_GROUP', '$sch',  
                     '$ms', '$ds', '$dv',  '$es', '$pc', '$RSVNID')";
           $connect->query($sql);
       $connect->query("DELETE FROM lab_temp WHERE NTIHCNO ='".$fnam."'"); 
       $connect->query("INSERT INTO lab_temp (NTIHCNO) VALUES('".$fnam."')");
         }

     //insert data into the hcg table
     if($hs=='YES'){
           $sql = "INSERT INTO hcg (NTIHCNO, DATECREATED, VISTBY, HCGSTATUS, HCGRESULTS, HCGPOSITIVE, CLIENTNAME, AGE1, AGE_GROUP, SEX, SCHOOLING, USERINITIAL, EMPLOYMENT, 
       SERVICE_EPISODE)
                                          VALUES ('$fnam', NOW(),
                                 '$urgtyn',
                                 '$hs',
                                 '$hr',
                                 '$hp',
                                 '$name',
                                 '$AGE1',
                 '$AGE_GROUP',
                                 '$SEX',
                                 '$sch',
                 '$sedb',
                                 '$es',
                                 '$s_episode')";
           $connect->query($sql);
         } 
     //insert data into the art table                                                                                                                                                              
     if($art2=='Active'){
           $sql = "INSERT INTO artmgr (NTIHCNO, DATECREATED, art2, art3, art4, art5, art6, art7, art8, art9, art10, art11, art12, art13, art14, art15
           ,art16, art17, art18, art19, art20, art21, art22, art23, art24, art25, 
       AGE1, AGE_GROUP, SEX, USERINITIAL, REQUESTINGUNIT, SCHOOLING, CLIENTNAME, REGISTERACCOUNT) 
           VALUES ('$fnam', NOW(),
                                 '$art2',
                                 '$art3',
                                 '$art4',
                                 '$art5',
                                 '$art6',
                                 '$art7',
                                 '$art8',
                                 '$art9',
                                 '$art10',
                                 '$art11',
                                 '$art12',
                                 '$art13',
                                 '$art14',
                                 '$art15',
                                 '$art16',
                                 '$art17',
                                 '$art18',
                                 '$art19',
                                 '$art20',
                                 '$art21',
                                 '$art22', 
                                 '$art23', 
                                 '$art24',
                                 '$art25',
                                 '$AGE1',   '$AGE_GROUP', '$SEX', '$sedb', '$REQUESTINGUNIT', '$sch', '$name',
                                 '$REGISTERACCOUNT')";
           $connect->query($sql);
         }

      //insert data into the referral table
     if($reft=='TURN ON'){
           $sql = "INSERT INTO referral (NTIHCNO, DATECREATED, VISTBY, REFTUNER, MEDICALREFERRAL, SERVICEREFERREDFOR,
      CLIENTNAME,AGE1,AGE_GROUP,SEX, SCHOOLING,USERINITIAL)
                                          VALUES ('$fnam', NOW(),
                                 '$urgtyn',
                                 '$reft',
                                 '$medr',
                 '$svcr',
                 '$name', '$AGE1', '$AGE_GROUP', '$SEX',  '$sch',  
                                 '$sedb')";
           $connect->query($sql);
         }


         header('location:family_planning.php'); 


    }
    else {
      echo "something went wrong : ".$connect->error;
    }
}

else{echo "ntihc not set";
       header('location:family_planning.php');
     exit();}
?>

<?php
 
if(isset($_POST['NTIHCNO'])){
$datt   = trim($_POST['CREATEDDATE']);
$fnam   = trim($_POST['NTIHCNO']);  
$ABORTIONTYPE    = trim($_POST['ABORTIONTYPE']); 
$REASONFORABORTION    = trim($_POST['REASONFORABORTION']); 
$RESULTANTEFFECT  = trim($_POST['RESULTANTEFFECT']);
$REMARKS    = trim($_POST['REMARKS']);
$FOLLOWUPPOSTABORTION  = trim($_POST['FOLLOWUPPOSTABORTION']);
$FOLLOWUPPOSTABORTIONDATE   = trim($_POST['FOLLOWUPPOSTABORTIONDATE']);  

$FPSWITCH    = trim($_POST['FPSWITCH']); 
$PARITY    = trim($_POST['PARITY']);
$LIVINGCHILDREN  = trim($_POST['LIVINGCHILDREN']);
$LNMP    = trim($_POST['LNMP']);
$FAMILYPLANNINGVIST   = trim($_POST['FAMILYPLANNINGVIST']);
$FAMILYPLANNINGMETHOD   = trim($_POST['FAMILYPLANNINGMETHOD']);
$PILLDESCRIPTION  = trim($_POST['PILLDESCRIPTION']);
$QUANTITY    = trim($_POST['QUANTITY']);
$APPOINTMENTDATE   = trim($_POST['APPOINTMENTDATE']);
$FPFOLLOWUP    = trim($_POST['FPFOLLOWUP']);
$DATERETURNED  = trim($_POST['DATERETURNED']);
$HCTCODE    = trim($_POST['HCTCODE']);
$FPCOMPLAINT   = trim($_POST['FPCOMPLAINT']); 

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

$seff    = trim($_POST['TROOM_INITIATION']);
$desc    = trim($_POST['TESTDESCRIPTION']);
$hs     = trim($_POST['HCGSTATUS']);
$hr     = trim($_POST['HCGRESULTS']); 
$fop    = trim($_POST['FOLLOWUP']);
$fodd   = trim($_POST['FOLLOWUPDATE']); 
$reft   = trim($_POST['REFTUNER']);
$medr   = trim($_POST['MEDICALREFERRAL']);
$svcr   = trim($_POST['SERVICEREFERREDFOR']); 

$fop    = trim($_POST['FOLLOWUP']);
$fodd   = trim($_POST['FOLLOWUPDATE']);
$reft   = trim($_POST['REFTUNER']);
$medr   = trim($_POST['MEDICALREFERRAL']);
$svcr   = trim($_POST['SERVICEREFERREDFOR']);
$REQUESTINGUNIT   = trim($_POST['REQUESTINGUNIT']);
$sedb    = trim($_POST['USERINITIAL']);

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
	         header('location:abortioncare.php');
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
		   
		$sql="INSERT INTO abortioncare (NTIHCNO, CREATEDDATE, 
		                                    ABORTIONTYPE, REASONFORABORTION, RESULTANTEFFECT, REMARKS, FOLLOWUPPOSTABORTION, 
											CLIENTNAME, AGE, SEX, SCHOOLING, EMPLOYMENT, SERVICE_EPISODE, USERINITIAL)
                         VALUES ('$fnam', NOW(),
                                 '$ABORTIONTYPE',
                                 '$REASONFORABORTION',
                                 '$RESULTANTEFFECT',
								 '$REMARKS',
                                 '$FOLLOWUPPOSTABORTION',
                                 '$FOLLOWUPPOSTABORTIONDATE', 
                                 '$name',
                                 '$age',
                                 '$sex',
                                 '$sch',
                                 '$es',
								 '$s_episode',
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
               

		   $rid = trim($_POST['RID']);
           $connect->query("UPDATE `cmpatientsregistration` SET `INSVCSTATUS` = 'FAMILY PLANNING' WHERE `RID` = '$rid'");
		   
   //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   $rsns      = intval($rowsss1);
   if($rsns>0){
     $x=1;
        for ($x=1; $x <= $rsns; $x++) {
             $dns  = trim($_POST['dn_'.$x]);        // drug name
			 $fqc  = trim($_POST['fq_'.$x]);       // frequency
			 $tim  = trim($_POST['tm_'.$x]);       // times
			 $pd  = trim($_POST['pd_'.$x]);       // period
             $qty  = trim($_POST['qty_'.$x]);       // qty
             $sql ="INSERT INTO `prescription` (`TIMESTAMP`,
                                `CREATEDDATE`,
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
           $sql = "INSERT INTO laboratory (NTIHCNO, DATECREATED, USERINITIAL, NAME, TESTDESCRIPTION, REQUESTINGUNIT)
                                          VALUES ('$fnam', NOW(), '$sedb',  '$name', '$desc', '$REQUESTINGUNIT')";
           $connect->query($sql);
		   $connect->query("DELETE FROM lab_temp WHERE NTIHCNO ='".$fnam."'");
		   $connect->query("INSERT INTO lab_temp (NTIHCNO) VALUES('".$fnam."')");
         }

		 //insert data into the hcg table
		 if($hs=='YES'){
           $sql = "INSERT INTO hcg (NTIHCNO, DATECREATED, VISTBY, HCGSTATUS, HCGRESULTS,  CLIENTNAME, AGE, SEX, SCHOOLING, EMPLOYMENT, SERVICE_EPISODE)
                         VALUES ('$fnam', NOW(),
                                 '$urgtyn',
                                 '$hs',
                                 '$hr',
                                 '$name',
                                 '$age',
                                 '$sex',
                                 '$sch',
                                 '$es',
                                 '$s_episode')";
           $connect->query($sql);
         }

		  //insert data into the referral table
		 if($reft=='TURN ON'){
           $sql = "INSERT INTO referral (NTIHCNO, DATECREATED, VISTBY, REFTUNER, MEDICALREFERRAL, SERVICEREFERREDFOR, CLIENTNAME, AGE, SEX, SCHOOLING, EMPLOYMENT, SERVICE_EPISODE) 
                                          VALUES ('$fnam', NOW(),
                                 '$urgtyn',
                                 '$reft',
                                 '$medr',
                                 '$svcr',
								 '$name',
                                 '$age',
                                 '$sex',
                                 '$sch',
                                 '$es',
                                 '$s_episode')";
           $connect->query($sql);
         }
          
		   //insert data into the family planning table
		 if($FPSWITCH=='FP ACTIVE'){
          $sql="INSERT INTO `patientmgt`.`family_planning` (`TIMESTAMP`,
                                                       `NTIHCNO`,
                                                       `CREATEDDATE`, 
                                    `PARITY`, 
                                    `LIVINGCHILDREN`, 
                                    `LNMP`, 
                                    `FAMILYPLANNINGVIST`, 
                                    `FAMILYPLANNINGMETHOD`, 
                                    `PILLDESCRIPTION`, 
                                    `QUANTITY`, 
                                    `APPOINTMENTDATE`, 
                                    `FPFOLLOWUP`, 
                                    `DATERETURNED`, 
                                    `HCTCODE`, 
                                    `FPCOMPLAINT`, 
													   
                                                       `CLIENTNAME`,
                                                       `AGE`,
                                                       `SEX`,
                                                       `MARITAL`,
                                                       `SCHOOLING`,
                                                       `EMPLOYMENT`, 
                                                       `SERVICE_EPISODE`,
													   `USERINITIAL`)
                                               VALUES (CURRENT_TIMESTAMP,
                                                       '$fnam',
                                                       '$datt',  
                                                       '$PARITY',
                                                       '$LIVINGCHILDREN',
                                                       '$LNMP',
                                                       '$FAMILYPLANNINGVIST',
                                                       '$FAMILYPLANNINGMETHOD',
                                                       '$PILLDESCRIPTION',
													   '$QUANTITY',
                                                       '$APPOINTMENTDATE',
                                                       '$FPFOLLOWUP',
                                                       '$DATERETURNED',
                                                       '$HCTCODE',
                                                       '$FPCOMPLAINT', 
                                                       '$name',
                                                       '$age',
                                                       '$sex',
                                                       '$ms',
                                                       '$sch',
                                                       '$es', 
                                                       '$s_episode',
													   '$sedb')";

           $connect->query($sql);
         } 
		 
		   //insert data into the hct table
		  if($HCTURGENCYa=='HCT WANTED'){ 
		  $sql7 ="INSERT INTO `patientmgt`.`hct_counselling_andtesting`(`TIMESTAMP`,
                                                        `NTIHCNO`,  
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
                                                       `SERVICE_EPISODE`,
													   `USERINITIAL`)
                                               VALUES (CURRENT_TIMESTAMP,
                                                       '$fnam',  
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
													   '$s_episode', 
                                                       '$sedb')"; 
           $connect->query($sql);
         } 
		 
		 
		 $sql="INSERT INTO postabortioncare (NTIHCNO, CREATEDDATE, 
		                                    ABORTIONTYPE, REASONFORABORTION, RESULTANTEFFECT, REMARKS, FOLLOWUPPOSTABORTION, 
											CLIENTNAME, AGE, SEX, SCHOOLING, EMPLOYMENT, SERVICE_EPISODE, USERINITIAL)
                         VALUES ('$fnam', NOW(),
                                 '$ABORTIONTYPE',
                                 '$REASONFORABORTION',
                                 '$RESULTANTEFFECT',
								 '$REMARKS',
                                 '$FOLLOWUPPOSTABORTION',
                                 '$FOLLOWUPPOSTABORTIONDATE', 
                                 '$name',
                                 '$age',
                                 '$sex',
                                 '$sch',
                                 '$es',
								 '$s_episode',
                                 '$sedb')";
								  $connect->query($sql);
           

         header('location:abortioncare.php');
          // header("location: family_planning.php");


    }
    else {
      echo "something went wrong : ".$connect->error;
    }
}

else{echo "ntihc not set";
       header('location:abortioncare.php');
	   exit();}
?>

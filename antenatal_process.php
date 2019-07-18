<?php
 
if(isset($_POST['NTIHCNO'])){
$datt   = trim($_POST['DATECREATED']);
$fnam   = trim($_POST['NTIHCNO']); 
$PARITYa          = trim($_POST['PARITY']);
$ANCVISTa         = trim($_POST['ANCVIST']);
$ANC1_TIMINGa     = trim($_POST['ANC1_TIMING']);
$WEIGHTa          = trim($_POST['WEIGHT']);
$INR_NOa          = trim($_POST['INR_NO']);
$e_MTCTCODES_Wa   = trim($_POST['e_MTCTCODES']);
$e_MTCTCODES_Pa   = trim($_POST['e_MTCTCODES_P']);
$GRAVIDAa         = trim($_POST['GRAVIDA']);
$gest             = trim($_POST['GESTATIONALAGE']);
$EXPECTEDDATEOFDELIVERYa   = trim($_POST['EXPECTEDDATEOFDELIVERY']);
$BLOODPRESSUREa      = trim($_POST['BLOODPRESSURE']);
$MOTHERDIAGNOSISa    = trim($_POST['MOTHERDIAGNOSIS']);
$WHOSTAGEa      = trim($_POST['WHOSTAGE']);
$CD4COUNTa      = trim($_POST['CD4COUNT']);
$VIRALLOADa     = trim($_POST['VIRALLOAD']);
$ARVs_DRUGSa    = trim($_POST['ARVs_DRUGS']);
$PRE_ATRNUMBERa = trim($_POST['PRE_ATRNUMBER']);
$IPTa           = trim($_POST['IPT']);
$CTXa           = trim($_POST['CTX']);
$IYCFa          = trim($_POST['IYCF']);
$MNCa           = trim($_POST['MNC']);
$TBSTATUSa      = trim($_POST['TBSTATUS']);
$HAEMOGLOBINa   = trim($_POST['HAEMOGLOBIN']);
$SYPHILISTESTWa = trim($_POST['SYPHILISTESTW']);
$SYPHILISTESTPa = trim($_POST['SYPHILISTESTP']);
$emtpa          = trim($_POST['FAMILYPLANNINGMETHOD']);
$TTa            = trim($_POST['TT']);
$FREE_LLINa     = trim($_POST['FREE_LLINS']);
$MEBENDAZOLEa   = trim($_POST['MEBENDAZOLE']);
$IRONa          = trim($_POST['IRON']);
$FOLICACIDa     = trim($_POST['FOLICACID']);
$WEEKSOF_AMENORHOEAa  = trim($_POST['WEEKSOF_AMENORHOEA']);
$FUNDDALHEIGHTa = trim($_POST['FUNDDALHEIGHT']);
$PRESENTATIONa  = trim($_POST['PRESENTATION']);
$POSITIONLIEa   = trim($_POST['POSITIONLIE']);
$RELATIONPP_BRIMa  = trim($_POST['RELATIONPP_BRIM']);
$VARICOSE_OEDEMAa  = trim($_POST['VARICOSE_OEDEMA']);
$URINEa            = trim($_POST['URINE']); 
$USERINITIAL            = trim($_POST['USERINITIAL']); 
$reft   = trim($_POST['REFTUNER']);
$medr   = trim($_POST['MEDICALREFERRAL']);
$svcr   = trim($_POST['SERVICEREFERREDFOR']);
$REQUESTINGUNIT   = trim($_POST['REQUESTINGUNIT']);
$seff    = trim($_POST['TROOM_INITIATION']);
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
	         header('location:treatmentroom.php');
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
      

  $sql="INSERT INTO `patientmgt`.`antenatal` (`TIMESTAMP`,
                                                       `NTIHCNO`,
                                                       `CREATEDDATE`, 
                                                       `PARITY`,
  `ANCVIST`,
  `ANC1_TIMING`,
  `WEIGHT`,
  `INR_NO`,
  `e_MTCTCODES_W`,
  `e_MTCTCODES_P`,
  `GRAVIDA`,
  `GESTATIONALAGE`,
  `EXPECTEDDATEOFDELIVERY`,
  `MU_AC`,
  `BLOODPRESSURE`,
  `MOTHERDIAGNOSIS`,
  `WHOSTAGE`,
  `CD4COUNT`,
  `VIRALLOAD`,
  `ARVs_DRUGS`,
  `PRE_ATRNUMBER`,
  `IPT`,
  `CTX`,
  `IYCF`,
  `MNC`,
  `TBSTATUS`,
  `HAEMOGLOBIN`,
  `SYPHILISTESTW`,
  `SYPHILISTESTP`,
  `FAMILYPLANNINGMETHOD`,
  `TT`,
  `FREE_LLIN`,
  `MEBENDAZOLE`,
  `IRON`,
  `FOLICACID`,
  `WEEKSOF_AMENORHOEA`,
  `FUNDDALHEIGHT`,
  `PRESENTATION`,
  `POSITIONLIE`,
  `RELATIONPP_BRIM`,
  `FOETALHEART`,
  `VARICOSE_OEDEMA`,
  `URINE`,
  
													   
                                                       `CLIENTNAME`,
                                                       `AGE`,
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
													   '$PARITYa',
                                                       '$ANC1_TIMINGa',
                                                       '$WEIGHTa',
                                                       '$INR_NOa',
                                                       '$e_MTCTCODES_Wa',
                                                       '$GRAVIDAa ',
                                                       '$gest'
                                                       '$BLOODPRESSUREa ',
                                                       '$MOTHERDIAGNOSISa',
                                                       '$WHOSTAGEa',
                                                       '$CD4COUNTa',
                                                       '$VIRALLOADa',
                                                       '$ARVs_DRUGSa',
                                                       '$PRE_ATRNUMBERa',
                                                       '$IPTa',
                                                       '$CTXa',
                                                       '$IYCFa',
                                                       '$MNCa',
                                                       '$TBSTATUSa',
                                                       '$HAEMOGLOBINa',
                                                       '$SYPHILISTESTWa',
                                                       '$SYPHILISTESTPa',
                                                       '$emtpa',
                                                       '$TTa',
                                                       '$FREE_LLINa',
                                                       '$MEBENDAZOLEa',
                                                       '$IRONa',
                                                       '$FOLICACIDa',
                                                       '$WEEKSOF_AMENORHOEAa',
                                                       '$FUNDDALHEIGHTa',
                                                       '$PRESENTATIONa',
                                                       '$POSITIONLIEa',
                                                       '$RELATIONPP_BRIMa',
                                                       '$VARICOSE_OEDEMAa',
                                                       '$URINEa', 
                                                       '$name',
                                                       '$age',
                                                       '$sex',
                                                       '$ms',
                                                       '$sch',
                                                       '$es',
                                                       '$ds',
                                                       '$dv',
                                                       '$s_episode',
													   '$USERINITIAL')";

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
           $connect->query("UPDATE `cmpatientsregistration` SET `INSVCSTATUS` = 'YES' WHERE `RID` = '$rid'");
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
								 '$fodd',
                                 '$name',
                                 '$age',
                                 '$sex',
                                 '$sch',
                                 '$ms',
                                 '$s_episode',
								 '$USERINITIAL')";

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
                                          VALUES ('$fnam', NOW(), '$USERINITIAL',  '$name', '$desc', '$REQUESTINGUNIT')";
           $connect->query($sql);
		   $connect->query("DELETE FROM lab_temp WHERE NTIHCNO ='".$fnam."'");
		   $connect->query("INSERT INTO lab_temp (NTIHCNO) VALUES('".$fnam."')");
         }

		 //insert data into the hcg table
		 if($hs=='YES'){
           $sql = "INSERT INTO hcg (NTIHCNO, DATECREATED, HCGSTATUS, HCGRESULTS, HCGPOSITIVE, CLIENTNAME, AGE, SEX, SCHOOLING, EMPLOYMENT, SERVICE_EPISODE)
                                          VALUES ('$fnam', NOW(),
                                 
                                 '$hs',
                                 '$hr',
                                 '$hp',
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
           $sql = "INSERT INTO referral (NTIHCNO, DATECREATED, REFTUNER, MEDICALREFERRAL, SERVICEREFERREDFOR, CLIENTNAME, AGE, SEX, SCHOOLING, EMPLOYMENT, SERVICE_EPISODE)
                                          VALUES ('$fnam', NOW(),
                                
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


         header('location:antenatal.php');
          // header("location: treatmentroom.php");


    }
    else {
      echo "something went wrong : ".$connect->error;
    }
}

else{echo "ntihc not set";
       header('location:antenatal.php');
	   exit();}
?>

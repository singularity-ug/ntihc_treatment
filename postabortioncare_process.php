<?php
 
if(isset($_POST['NTIHCNO'])){
$datt   = trim($_POST['CREATEDDATE']);
$fnam   = trim($_POST['NTIHCNO']);
 
$ABORTIONTYPE    = trim($_POST['ABORTIONTYPE']);  
$REASONFORABORTION    = trim($_POST['REASONFORABORTION']);  
$COMPLAIT  = trim($_POST['COMPLAIT']);
$REMARKS    = trim($_POST['REMARKS']);
$FOLLOWUPPOSTABORTION  = trim($_POST['FOLLOWUPPOSTABORTION']);
$FOLLOWUPPOSTABORTIONDATE   = trim($_POST['FOLLOWUPPOSTABORTIONDATE']); 
 
$fop    = trim($_POST['FOLLOWUP']);
$fodd   = trim($_POST['FOLLOWUPDATE']);
$reft   = trim($_POST['REFTUNER']);
$medr   = trim($_POST['MEDICALREFERRAL']);
$svcr   = trim($_POST['SERVICEREFERREDFOR']);
$REQUESTINGUNIT   = trim($_POST['REQUESTINGUNIT']);

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
	         header('location:postabortion_care.php');
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
 
  $sql="INSERT INTO `patientmgt`.`postabortioncare` (`TIMESTAMP`,
                                                   `NTIHCNO`,
                                                   `CREATEDDATE`,
                                                       `ABORTIONTYPE`,  
                                                       `COMPLAIT`, 
                                                       `REMARKS`, 
                                                       `FOLLOWUPPOSTABORTION`, 
                                                       `FOLLOWUPPOSTABORTIONDATE` 
													 
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
                                                       '$ABORTIONTYPE', 
                                                       '$COMPLAIT',
                                                       '$REMARKS',
                                                       '$FOLLOWUPPOSTABORTION',
                                                       '$FOLLOWUPPOSTABORTIONDATE',  
                                    
                                                       '$name',
                                                       '$age',
                                                       '$sex',
                                                       '$ms',
                                                       '$sch',
                                                       '$es',
                                                       '$ds',
                                                       '$dv',
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


         header('location:postabortion_care'); 


    }
    else {
      echo "something went wrong : ".$connect->error;
    }
}

else{echo "ntihc not set";
       header('location:postabortion_care');
	   exit();}
?>

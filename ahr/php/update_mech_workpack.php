<?php
$regno = trim($_POST['regnumber']);
$jobnumbertech= trim($_POST['jobnumbertech']);
$make= trim($_POST['make']);
$notice = trim($_POST['noticeradio']);
$sys_p = trim($_POST['testdriveradios']);
$anyother = trim($_POST['anyotherfault']);
$description = trim($_POST['faults_description']);
$tests = trim($_POST['tests_carriedout']);
$results = trim($_POST['tests_results']);
$safety = trim($_POST['safety_box']);
$techname = trim($_POST['technicianName']);
$bs_standards = trim($_POST['bsstandards_applicable']);
$eng_tests = trim($_POST['engineer_tests']);
$risk_level = trim($_POST['risk_level']);
$safety_box= trim($_POST['safety_box_eng']);
$daterecorded = trim($_POST['daterecorded']);
$timerecorded = trim($_POST['timerecorded']);
$planning_engineer = trim($_POST['planning_engineer']);





$wp_job = trim($_POST['wp_jobnumber']);
$wp_reg = trim($_POST['wp_regnumber']);
$wp_make = trim($_POST['wp_make']);
$wp_install = trim($_POST['wp_installationage']);
$wp_mileage = trim($_POST['wp_mileage']);
$wp_history= trim($_POST['wp_history_radio']);
$wp_no = trim($_POST['wp_no_times']);
$wp_date = trim($_POST['wp_daterecorded']);
$conclusion = trim($_POST['conclusion']);
$wp_fault = trim($_POST['wp_faultname']);
$wp_corrective = trim($_POST['wp_corrective_action']);
$wp_safety = trim($_POST['wp_safety_proccedure']);
$wp_technical = trim($_POST['wp_technical_proceedure']);
$wp_time = trim($_POST['wp_time_safety']);
$wp_time_tech = trim($_POST['wp_time_technical']);
$wp_totaltime = trim($_POST['wp_totaltime']);
$wp_technicians = trim($_POST['wp_technicians']);
$wp_casuals = trim($_POST['wp_casuals']);
$wp_drivers = trim($_POST['wp_drivers']);
$wp_tools = trim($_POST['wp_tools']);
$wp_materials = trim($_POST['wp_materials']);


$varr =  array();
$varr = explode('-',$wp_date);
$yr=$varr[0];$mon = $varr[1]; $dd = $varr[2];
$sub_date = $mon.'-'.$dd;
$curr_date=$sub_date.'__'.$sub_date;
$otherdate=$sub_date.'__';

require('config.php');

$sql3="UPDATE `sjn_database`.`work_pack_prep_mech` SET `JOB_NO` = '$jobnumbertech', `REG_NO` = '$regno',
        `MAKE` = '$make', `DO_YOU_NOTICE` = '$notice', `SYS_PERSIST` = '$sys_p', `OTHER_FAULT` = '$anyother',
        `FAULT_DESC` = '$description', `TECH_TESTS` = '$tests', `results` = '$results',
        `TECH_SAFETY` = '$safety', `ENG_FAULT_BS` = '$bs_standards', `ENG_TESTS` = '$eng_tests', `RISK_LEVEL` = '$risk_level',
        `ENG_SAFETY` = '$safety_box', `DATE_REC` = '$daterecorded', `TIME_REC` = '$timerecorded', `ENG_NAME` = '$planning_engineer',
        `TECH_NAME` = '$techname' WHERE `work_pack_prep_mech`.`JOB_NO` = '$jobnumbertech'";
  if($conn->query($sql3)===true){


    $sql4 = "INSERT INTO `sjn_database`.`work_pack_mech` (`JOB_NO`, `REG_NO`, `MAKE`, `FAULT_NAME`, `CORR_ACTION`,
                                                     `SAFETY_PROCEEDURE`, `TECHNICAL_PROCEEDURE`, `TIME_SAFETY`,
                                                     `TIME_TECHNICAL`, `TOTAL_TIME`, `TECH`, `CASUALS`, `DRIVERS`,
                                                     `PORTERS`, `MASONS`, `TOOLS`, `MATERIALS`)
                                                     VALUES ( '$wp_job', '$wp_reg', '$wp_make', '$wp_fault', '$wp_corrective',
                                                        '$wp_safety', '$wp_technical', '$wp_time', '$wp_time_tech', '$wp_totaltime',
                                                        '$wp_technicians', '$wp_casuals', '$wp_drivers', '0', '0', '$wp_tools',
                                                        '$wp_materials')";

      if($conn->query($sql4)===true){


        $sql2 ="UPDATE `job_tracker_mechanical` SET `WORK_ORDER`=concat(WORK_ORDER,'$sub_date'), `WORK_PACK`= '$curr_date', `MATERIALS_WORK_PACK`='$otherdate'
                WHERE `JOB_NUMBER`='$wp_job'";

      if($conn->query($sql2)===true){
         echo 'success';
          $conn->close();
                header('location:../datatable/mechanical_planning.php');
                exit();
       }
       else{ echo ''.$conn->error; exit();}
     }
      else{echo ''.$conn->error; }


 }
  else{echo ''.$conn->error;}

  $conn->close();

  exit();
        header('location:../index.php');

?>

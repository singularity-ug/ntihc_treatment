<?php
session_start();
//Next we authenticate to use the database
require('config.php');
//print_r($_POST);
//echo json_encode($_POST);

$a1 = $conn->real_escape_string($_POST['fname']);
$a2 = $conn->real_escape_string($_POST['family_name']);
$a3 = $conn->real_escape_string($_POST['pos']);
$a4 = $conn->real_escape_string($_POST['dept']);
$a5 = $conn->real_escape_string($_POST['lmgr']);
$a6 = $conn->real_escape_string($_POST['oksh']);
$a7 = $conn->real_escape_string($_POST['job_grade']);
$a8 = $conn->real_escape_string($_POST['contract_type']);
$a9 = $conn->real_escape_string(json_encode($_POST['kra']));
$a10= $conn->real_escape_string(json_encode($_POST['wgt']));
$a11= $conn->real_escape_string(json_encode($_POST['msr']));
$a12= $conn->real_escape_string(json_encode($_POST['acaa']));
$a13= $conn->real_escape_string(json_encode($_POST['self']));
$a14= '';//$conn->real_escape_string($_POST['sup']);
$a15= '';///$conn->real_escape_string($_POST['agr']);
$a16= '';//$conn->real_escape_string($_POST['r1']);
$a17= '';// $conn->real_escape_string($_POST['r2']);
$a18= '';//$conn->real_escape_string($_POST['c1']);
$a19= '';//$conn->real_escape_string($_POST['c2']);
$a20= $conn->real_escape_string($_POST['o_self']);
$a21= '';//$conn->real_escape_string($_POST['o_sup']);
$a22= '';// $conn->real_escape_string($_POST['o_agreed']);
$a23= $conn->real_escape_string(json_encode($_POST['pdpa_act']));
$a24= $conn->real_escape_string(json_encode($_POST['pdp_deadline']));
$a25= $conn->real_escape_string(json_encode($_POST['pdp_sup']));
$a26= $conn->real_escape_string($_POST['aspirations']);
$a27= $conn->real_escape_string($_POST['comments']);
$a28= $conn->real_escape_string($_POST['d1']);
$a29= '';//$conn->real_escape_string($_POST['d2']);
$a30= '';//$conn->real_escape_string($_POST['d3']);
$a31= $conn->real_escape_string($_POST['username']);
$a32= $conn->real_escape_string($_POST['apse']);
$a33= '';//$conn->real_escape_string($_POST['apsr']);

$sql = "INSERT INTO `appraisals` ( `fname`, `family_name`, `pos`, `dept`, `lmgr`, `oksh`, `job_grade`, `contract_type`, `kra`,
        `wgt`, `msr`, `acaa`, `self`, `sup`, `agr`, `r1`, `r2`, `c1`, `c2`, `o_self`, `o_sup`, `o_agreed`, `pdpa_act`, `pdp_deadline`,
        `pdp_sup`, `aspirations`, `comments`, `d1`, `d2`, `d3`, `username`,`apse`,`apsr`)
          VALUES ('$a1', '$a2', '$a3',  '$a4', '$a5', '$a6', '$a7', '$a8', '$a9',
             '$a10', '$a11', '$a12', '$a13', '$a14', '$a15', '$a16', '$a17', '$a18', '$a19', '$a20', '$a21', '$a22',
              '$a23', '$a24', '$a25', '$a26', '$a27', '$a28', '$a29','$a30', '$a31','$a32','$a33')";

//echo $sql;
//exit();
if($conn->query($sql)===true){
             $_SESSION['USERID']    = $a31;
             $_SESSION['NAME_USER'] = $a1 .' '.$a2;
             $_SESSION['DEPT']      = $a4;

             header("location:datatable/myappraisals.php");
             exit(); }

else{    echo $connect_error;  }

exit();
 ?>

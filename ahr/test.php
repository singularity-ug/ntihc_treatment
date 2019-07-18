 <?php
 $id=$_GET['q'];
  $fname = '';
  $family_name = '';
  $pos  = '';
  $dept = '';
  $lmgr = '';
  $oksh = '';
  $job_grade = '';
  $contract_type = '';
  $kra = array( );
  $wgt = array( );
  $msr = array( );
  $acaa = array( );
  $self = array( );
  $pdpa_act = array( );
  $pdp_deadline = array( );
  $pdp_sup = array( );
  $aspirations = '';
  $comments = '';
  $apsr = '';
  $osh = '';
  $apse = '';
  $d1 = '';
  $d2 = '';
  $d3 = '';
  $o_self = '';

 require('config.php');
 $sql  = "SELECT * FROM appraisals  WHERE `id` = '$id' ";

  $res = $conn->query($sql);
 $x=1;
  while($row=$res->fetch_assoc()){
    print_r($row);
     $fname = $row['fname'];
     $family_name = $row['family_name'];
     $pos  = $row['pos'];
     $dept = $row['dept'];
     $lmgr = $row['lmgr'];
     $oksh = $row['oksh'];
     $job_grade = $row['job_grade'];
     $contract_type = $row['contract_type'];
     $kra = json_decode($row['kra']);
     $wgt = json_decode($row['wgt']);
     $msr = json_encode($row['msr']);
     $acaa = json_encode($row['acaa']);
     $self = json_encode($row['self']);
     $pdpa_act = json_encode($row['pdpa_act']);
     $pdp_deadline = json_encode($row['pdp_deadline']);
     $pdp_sup =  json_encode($row['pdp_sup']);
     $aspirations = $row['aspirations'];
     $comments = $row['comments'];
     $d1 = $row['d1'];
     $d2 = $row['d2'];
     $d3 = $row['d3'];
     $o_self = $row['o_self'];
      }

  ?>

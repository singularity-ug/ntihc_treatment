<?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
$rm         = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
$rm = $_SESSION['MREPEAT']; 
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}
 ?>
 
  <?php
  $id = $_GET['NTIHCNO']; 
  $DATECREATED = '';
  $TIMESTAMP = '';
  $NAME = '';
  $NTIHCNO  = '';
  $USERINITIAL = '';
  $TESTDATE = '';
  $AGE1 = '';  
  $SEX = ''; 
  $SCHOOLING=''; 
  $MARITALSTATUS='';
  $DISTRICT='';
  $MARITALSTATUS=''; 
  $FINALREACTIVITY=''; 

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laboratory  WHERE `NTIHCNO` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $DATECREATED = $row['DATECREATED'];  
     $TIMESTAMP = $row['TIMESTAMP'];
     $NTIHCNO  = $row['NTIHCNO'];
     $USERINITIAL = $row['USERINITIAL'];
     $TESTDATE = $row['TESTDATE'];
     $AGE1 = $row['AGE1'];
     $SEX = $row['SEX'];  
   $NAME = $row['NAME'];
     $SCHOOLING = $row['SCHOOLING']; 
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
   $FINALREACTIVITY = $row['FINALREACTIVITY']; 
      }

  ?> 
 
  
 
   
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>.</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../admin/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../admin/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../admin/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../admin/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

 

   <style media="screen">
  .btn {padding : 0px 3px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 0px solid transparent;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
} 
.progress{
  vertical-align:center;
  margin-bottom: 0px;
} 
                 table, th , td  {
                 border: 0px solid transparent;
                 border-collapse: collapse;
                 padding-left: 0px;
               padding-bottom: 0px;
               font-size: 12px;
               color:#000000;
         font-weight:normal;
             }
             table tr:nth-child(odd) {
             background-color:transparent;
             }
             table tr:nth-child(even) {
             background-color:transparent;
             } 
</style>

</head>
<body onLoad="window.print();">
<div class="wrapper" >
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">  
          
 <div class="col-sm-2"></div>
 
 <div class="col-sm-8"> 
        <img src="../assets/img/logsbig.PNG" width="100%" height="30%">  
 
         <form class="form-horizontal" action="" method="POST">
               <center> <p style="font-weight:bold; font-size:11px; font-family:lcd;"> HIV ANTIBODY TEST RESULTS </p> </center>  
              <br>
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr>
     <th style="width:20%;border:1px solid #000;">Counselling date </th>
   <th style="width:30%;border:1px solid #000;">  <?php echo $TIMESTAMP; ?> </th> 
        
   <th style="width:20%;border:1px solid #000;">Client No.</th>
   <td style="width:30%; border:1px solid #000;"> <?php echo $NTIHCNO; ?> </td> 
   </tr> 
 </tbody>
 </table>
 <p></p>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr>
     <th style="width:20%;border:1px solid #000;">Results date</th>
   <th style="width:30%;border:1px solid #000;">  <?php echo $DATECREATED; ?>  </th> 
       
   <th style="width:20%;border:1px solid #000;">Client name</th>
   <td style="width:30%;border:1px solid #000;font-size:10px;"> <?php echo $NAME; ?> </td>  
   </tr> 
 </tbody>
 </table>    
 <p></p>
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr>
           <th style="width:50%;border:0px;"> </th>
     <th style="width:10%;border:1px solid #000;">Age</th>
   <th style="width:15%;border:1px solid #000;">  <?php echo $AGE1; ?>  </th> 
       
   <th style="width:10%;border:1px solid #000;">Gender</th>
   <td style="width:15%;border:1px solid #000;font-size:10px;"> <?php echo $SEX; ?>  </td>  
   </tr> 
 </tbody>
 </table>  
    <p></p>
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
     <th style="width:20%;border:1px solid #000;">Serial No.</th>
   <th style="width:30%;border:1px solid #000; font-size:10px;">  <?php echo uniqid();?> </th> 
     
   <th style="width:10%;border:1px solid #000;">Schooling</th>
   <th style="width:15%;border:1px solid #000; font-size:10px;"> <?php echo $SCHOOLING; ?>  </th>  
       
   <th style="width:10%;border:1px solid #000;">Marital </th>
   <td style="width:15%;border:1px solid #000; font-size:10px;"> <?php echo $MARITALSTATUS; ?>   </td>  
   </tr> 
 </tbody>
 </table>   
    
    <br>
    <p style="font-size:14px; font-weight:bold;"> Meaning of HIV antibody results:</p>
       <b><b>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
   <th style="width:49%;border:1px solid #000;">
     <p style="text-align:left;">[1]&nbsp;<b>Non-Reactive</b> </p>
      <p style="text-align:left;"><b>(Negative)</b></p> 
   </th>
   <td style="width:2%;border:0px;"></td>
   <td style="width:49%;border:1px solid #000;">
     <p style="text-align:left;">[2]&nbsp;<b>Reactive </b></p> 
     <p style="text-align:left;"><b>(Preliminary Positive)</b></p> 
   </th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:49%;border:1px solid #000;"> A non-reactive (negative) test result means that no an
     tibodies to HIV-1 have been detected.  HIV antibodies may be absent 
     during the “window period” of infection. Follow-up testing may be necessary if indicated by risk factors. </td>
   <td style="width:2px; border:0px;"></td>
   <td style="width:49%;border:1px solid #000;">  A reactive (preliminary positive)
 test result suggests that 
antibodies to HIV-1  may be 
present in the blood obtained from a rapid, 
finger stick test with whole blood.  A 
specimen will have to be sent to a laboratory 
for a Western Blot test prior to confirmation 
of the reactive test result.  Precautions shoul
d be taken to avoid the chance of spreading 
HIV.  </td>              
   </tr>
  <tr>
 </tbody>
 </table>
 
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
    
    <td style="width:49%;border:1px solid #000;">
    <p style="text-align:left;">[3]&nbsp;<b>Invalid </b></p> 
    <p style="text-align:left;"></p> 
     </th>
     <td style="width:2%;border:0px;">
   <td style="width:49%;border:1px solid #000;">
     <p style="text-align:left;">[4]&nbsp;<b>Indeterminant </b></p>
      <p style="text-align:left;"></p> 
   </th>
   </tr>
   </thead>
   <tbody>
   <tr>
    <td style="width:49%;border:1px solid #000;">
invalid
 test result resulting from a finger stick can be due to a problem running 
the test or an interfering substance in th
e specimen.  A specimen using other testing 
technology should be collected and subm
itted to a laboratory for HIV testing. </td>
   
   <td style="width:2%;border:0px;">
   <td style="width:49%;border:1px solid #000;">
   Indeterminate" means that the test was run but didn't provide a clear negative or 
   positive result. People with indeterminate HIV test results can be HIV infected and 
   in the process of seroconverting, a time during which an HIV test would show a result somewhere 
   between negative and positive.</td>              
   </tr>
  <tr>
 </tbody>
 </table> 
       
          <br>   
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr> 
   
     <th style="width:100%;border:0px;">
  <b>Questions:</b>
 If you have any questions about the 
test result, please contact the 
Authorizing NTIHC Counsellor. </th>  
   </th>  
   </tr>
   </thead> 
 </tbody>
 </table> 
<br>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr> 
   
  <th style="width:100%;border:1px;">
  <b>Confidentiality and Disclosure</b>: 
This information has been disclosed to you from confidential records which are protected 
by Naguru TeenAGE1 Information and Health Center.  NTIHC prohibits you from 
making any further disclosure of this 
information without the specific 
written consent of the person 
to whom it pertains, or as 
otherwise permitted by law.  </th>  
   </th>  
   </tr>
   </thead> 
 </tbody>
 </table> 
 
  <br>
 <p style="font-weight:normal;">The HIV-1/3 antibody result from the HIV Antibody Test is: &nbsp;<b><?php echo $FINALREACTIVITY; ?></b></p>
 
  <hr>
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
     <th style="width:10%;border:1px solid #000;">Authorising counsellor</th>
   <th style="width:15%;border:1px solid #000; font-size:10px;"> <?php echo $USERINITIAL; ?>  </th> 
       
   <th style="width:10%;border:1px solid #000;">Signature</th>
   <td style="width:15%;border:1px solid #000;">  </td>  
   </tr> 
 </tbody>
 </table>  
             </form>
   
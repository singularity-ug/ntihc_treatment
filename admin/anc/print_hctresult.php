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
  $id = $_GET['q']; 
  $DATECREATED = '';
  $TIMESTAMP = '';
  $NAME = '';
  $NTIHCNO  = '';
  $USERINITIAL = '';
  $TESTDATE = '';
  $AGE = '';  
  $SEX = ''; 
  $SCHOOLINGSTATUS=''; 
  $MARITALSTATUS='';
  $DISTRICT='';
  $MARITALSTATUS=''; $FINALREACTIVITY='';

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laboratory  WHERE `NTIHCNO` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $FINALREACTIVITY = $row['FINALREACTIVITY'];
     $DATECREATED = $row['DATECREATED'];  
     $TIMESTAMP = $row['TIMESTAMP'];
     $NTIHCNO  = $row['NTIHCNO'];
     $USERINITIAL = $row['USERINITIAL']; $NAME = $row['NAME'];
     $TESTDATE = $row['TESTDATE'];
     $AGE = $row['AGE'];
     $SEX = $row['SEX'];  
     $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS']; 
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $MARITALSTATUS = $row['MARITALSTATUS']; 
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

 
  
<style>
h9 {
    border-bottom: 1px solid #fff;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 1px solid #fff;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 11px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #fff;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #fff;
    line-height: 1.0;
    padding: 1px;
    vertical-align: center;
   }

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
             table, th , td  {
                 border: 1px solid #fff;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 12px;
             	 color:#000000;
				 background-color: #fff;
				 font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#ffffff;
             }
             table tr:nth-child(even) {
             background:#ffffff;
             }

</style>
 
  
  
</head>
 
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body" style="border:1px solid #ddd;">    
 
         <form class="form-horizontal" action="" method="POST">
            <p style="font-weight:bold; font-size:14px; font-family:lcd;"> HIV Antibody Test Result </p>  

		 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
     <th style="width:20%;border:0px;">Counselling date </th>
	 <th style="width:30%;border:0px;">  <?php echo $TIMESTAMP; ?> </th> 
			  
   <th style="width:20%;border:0px;">Client No.</th>
   <td style="width:30%;"> <?php echo $NTIHCNO; ?> </td> 
   </tr>
   </thead> 
 </tbody>
 </table>
 
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
   
     <th style="width:20%;border:0px;">Results date</th>
	 <th style="width:30%;border:0px;">  <?php echo $DATECREATED; ?>  </th> 
			 
   <th style="width:20%;border:0px;">Client name</th>
   <td style="width:30%;"> <?php echo $NAME; ?> </td>  
   </tr>
   </thead> 
 </tbody>
 </table>    
 
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
   
    <th style="width:20%; ">Requested by</th>
	 <th style="width:30%; "><?php echo $USERINITIAL; ?>   </th>  
      <th style="width:20%; "> </th>
	 <th style="width:30%; ">    </th>  
   </tr>
   </thead> 
 </tbody>
 </table>    
    <br>
   <p style="font-size:14px;">The HIV-1/3 antibody result from the HIV Antibody Test is: <b>&nbsp;<?php echo $FINALREACTIVITY; ?> </b></p>    
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
	 </th>
   </tr>
   </thead> 
 </tbody>
 </table>    
    
	
	 <p style="font-size:14px; font-weight:bold;"> Meaning of the test result:</p>
	  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
   
   
     <th style="width:100%;border:0px;font-weight:normal;">
	 A non-reactive (negative) test result means that no an
     tibodies to HIV-1 have been detected.  HIV antibodies may be absent 
     during the “window period” of infection. Follow-up testing may be necessary if indicated by risk factors.   </th>  
	 </th>  
   </tr>
   </thead> 
 </tbody>
 </table>       
<br>
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
   
   
     <th style="width:100%;border:0px;font-weight:normal;">
	 A 
reactive (preliminary positive)
 test result suggests that 
antibodies to HIV-1  may be 
present in the blood obtained from a rapid, 
finger stick test with whole blood.  A 
specimen will have to be sent to a laboratory 
for a Western Blot test prior to confirmation 
of the reactive test result.  Precautions shoul
d be taken to avoid the chance of spreading 
HIV.     </th>  
	 </th>  
   </tr>
   </thead> 
 </tbody>
 </table>   
 <br>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
   
   
     <th style="width:100%;border:0px;font-weight:normal;">
	An 
invalid
 test result resulting from a finger stick can be due to a problem running 
the test or an interfering substance in th
e specimen.  A specimen using other testing 
technology should be collected and subm
itted to a laboratory for HIV testing.   </th>  
	 </th>  
   </tr>
   </thead> 
 </tbody>
 </table>   
 <br>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
   
     <th style="width:100%;border:0px;font-weight:normal;">
	 Indeterminate" means that the test was run but didn't provide a clear negative or 
	 positive result. People with indeterminate HIV test results can be HIV infected and 
	 in the process of seroconverting, a time during which an HIV test would show a result somewhere 
	 between negative and positive.</th>  
	 </th>  
   </tr>
   </thead> 
 </tbody>
 </table>   
          <br>   
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
   
     <th style="width:100%;border:0px;">
	Questions:
 If you have any questions about the 
test result, please contact the 
Authorizing NTIHC Counsellor. </th>  
	 </th>  
   </tr>
   </thead> 
 </tbody>
 </table> 
<br>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
   
  <th style="width:100%;border:0px;">
	Confidentiality and Disclosure: 
This information has been disclosed to you from confidential records which are protected 
by Naguru Teenage Information and Health Center.  NTIHC prohibits you from 
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
             </form>
	 <br>
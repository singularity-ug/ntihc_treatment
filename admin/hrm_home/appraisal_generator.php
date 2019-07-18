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
 
      
             
                     
      
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css"> 
   
 
   <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             } 
</style>
  
 </head> 
 
</head> 
<div class="wrapper" style="background-color:#fff;">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">   
          <script>
function myFunction() {
    window.print();
}
</script>


       <div class="col-sm-1">
       
       </div>
       
        <div class="col-sm-10">
       
  <?php 
  $id =  $_GET['q'];  
  $Serial = '';   
  $FIRSTNAME = '';  
  $LASTNAME = '';   
  $OTHERNAME = '';    
  $PFNUMBER = '';  
  $APPRAISALSTATUS = '';    
  $APPRAISALCOUNT = '';   
  $APPRAISALEPISODE = '';    
  $APPRAISALSUBMISSIONDEADLINE = '';  
  $APPRAISALFINANCIALPERIOD = '';   
  $APPRAISALMONTHYEAR = '';     	             
  $APPRAISALMONTH = '';   $APPRAISALPROGRESSLEVEL = '';  
			   		  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ahr";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM staffcontacts WHERE `EMAIL2` = '$id' AND APPRAISALELIGIBILITY='Active' 
			                                           AND APPRAISALCOUNT = '0'";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $id = $row['id']; 
     $EMAIL2  = $row['EMAIL2'];
     $FIRSTNAME  = $row['FIRSTNAME'];
     $LASTNAME = $row['LASTNAME'];   
	 $OTHERNAME = $row['OTHERNAME']; 
	 $PFNUMBER = $row['PFNUMBER'];   
	 $APPRAISALSTATUS = $row['APPRAISALSTATUS'];    
	 $APPRAISALCOUNT = $row['APPRAISALCOUNT'];   
	 $APPRAISALEPISODE = $row['APPRAISALEPISODE']; 
	 $APPRAISALSUBMISSIONDEADLINE = $row['APPRAISALSUBMISSIONDEADLINE'];  
	 $APPRAISALFINANCIALPERIOD = $row['APPRAISALFINANCIALPERIOD'];  
	 $APPRAISALMONTHYEAR = $row['APPRAISALMONTHYEAR'];   
	 $APPRAISALMONTH = $row['APPRAISALMONTH']; 
	 $Serial = $row['Serial']; 
     $APPRAISALPROGRESSLEVEL = $row['APPRAISALPROGRESSLEVEL'];                 
      } 
  ?> 
        
                  <!-- Info boxes -->  
                   
     <form class="form-horizontal" action="appraisal_generator_processor.php" method="POST" style="height:auto; font-weight:normal; background-color:#fff;"> 
       
     <input type="hidden"  id="Serial" name="Serial"  value="<?php  echo $Serial; ?>"  />  
     <input type="hidden"  id="PFNUMBER" name="PFNUMBER"  value=" <?php  echo $PFNUMBER; ?>"  /> 
     
     <input type="hidden"  id="APMONTH" name="APMONTH"  value="<?php  echo $APPRAISALMONTH; ?>"  />  
     <input type="hidden"  id="APYEAR" name="APYEAR"  value=" <?php  echo $APPRAISALMONTHYEAR; ?>"  />  
     <input type="hidden"  id="APDEADLINE" name="APDEADLINE" value="<?php  echo $APPRAISALSUBMISSIONDEADLINE; ?>"  />   
          
                <input type="hidden"  id="APPRAISALEPISODE" name="APPRAISALEPISODE"  value="<?php  echo $APPRAISALEPISODE; ?>"  />   
                <input type="hidden"   name="NAMEOFEMPLOYEE"  id="NAMEOFEMPLOYEE" value="<?php  echo $FIRSTNAME; ?> <?php  echo $LASTNAME; ?> <?php  echo $OTHERNAME; ?>" /> 
                <input type="hidden"   name="EMAIL2"  id="EMAIL2" value="<?php  echo $EMAIL2; ?>" />
               
                  <input type="hidden"   name="STAFFAPPRAISALID"  id="STAFFAPPRAISALID" value="<?php  echo uniqid(); ?>" /> 
                  <input type="hidden"   name="DATECREATED"  id="DATECREATED" value="<?php echo date('d-m-y'); ?>" /> 
                   
                  <input type="hidden"   name="APPRAISALPROGRESSLEVEL"  id="APPRAISALPROGRESSLEVEL" value="Started" />
                  <input type="hidden"   name="PROGRESSDATE"  id="PROGRESSDATE" value="<?php echo date('d-m-y'); ?>" /> 
                  
                   <Center><input class="button 5" type="submit" name="button" id="button" value="Accept" 
                   style="text-align:center; color:#fff; font-weight:bold; width:20%;"  />
              </form> 
              </div>         
              
              
       <div class="col-sm-1">
       
       </div>
       
       </div> 
       
<script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS -->  
</body>
</html>   
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
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc </title>
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
   <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

  <script src="../datatable/js/jquery-1.12.3.js"></script>
  <script src="../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../datatable/js/bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../datatable/js/buttons.flash.min.js"></script>
  <script src="../datatable/js/jszip.min.js"></script>
  <script src="../datatable/js/pdfmake.min.js"></script>
  <script src="../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
  <script src="../datatable/js/buttons.print.min.js"></script>
  <?php
  $fz ='';
  if(isset($_GET['q'])) { $fz=$_GET['q']; }
  ?>
  <script>
  $(document).ready(function() {
     var ttt = "<?php echo $fz;  ?>";

	 if(ttt==""){}  else{ $("#notificationModal").modal("show"); }
     $('#example').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:' file'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' Ntihc imms'
		},
		{extend :'pdf',
		 title:'Ntihc imms '
		},
		{extend :'print',
		 title:' Ntihc imms'
		}
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#times').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TIME SHEET'
		},
		{extend :'pdf',
		 title:'TIME SHEET'
		},
		{extend :'print',
		 title:'TIME SHEET'
		}
        ]
    } );
  } );
  </script>
<script>
  $(document).ready(function() {
     $('#exaconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
  
  
  
<script>
  $(document).ready(function() {
     $('#exstaffconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' STAFF CONTACTS'
		},
		{extend :'pdf',
		 title:'STAFF CONTACTS '
		},
		{extend :'print',
		 title:' STAFF CONTACTS'
		}
        ]
    } );
  } );
  </script>
  
  
   <script>
  $(document).ready(function() {
     $('#example13').DataTable();
  } );
  </script>

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PLANDETAILS"+num).val(data[2]);
  $("#CODE").val(data[2]);
  $("#FINANCIALPERIOD").val(data[3]);
  $("#FIRSTQTR").val(data[4]);
  $("#SECONDQTR").val(data[5]);
  $("#THIRDQTR").val(data[6]);
  $("#FOURTHQTR").val(data[7]);
  $("#BUDGETAMOUNT").val(data[8]); 
  $("#BUDGETSTATUS").val(data[9]);       
  
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "serch_budget.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result); 
}
  });
}
} 
</script>

 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border: 1px solid #000;
    line-height: 1.0;
    padding: 2px;
    vertical-align: center;
	
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #000;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
             	color:#000000;
				font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
             background:#fff;
             }

</style> 

</head> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header">

     <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" font style=" font:bold 18px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;margin-top: 10px;">Staff Appraisal</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="my_appraisal.php" class="" >New appraisal<span class="sr-only">(current)</span></a></li> 

          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> Logout</li></a>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              </li>
              <!-- Menu Body -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button --> 
        </ul>
      </div>

    </nav>
  </header>
 


<?php
  $id = $_GET['APPRAISALKEY'];   
  $APPRAISALKEY = '';
  $DATECREATED = '';
  $TIMESTAMP  = '';
  $NAMEOFEMPLOYEE = '';
  $APPRAISEEACCOUNT = '';
  $FIRSTLVSUPERVISOR = '';
  $SECONDLVSUPERVISOR = '';
  $APPRAISALSUBMISSIONDEADLINE = '';
  $dnx = array();
  $dpp = array();
  $fqx = array();
  $dcm = array();
  $variance = array(); 
  $ddf = array();
  $qtyx = array();     
  $APPOINTMENTSTARTDATE = '';  
  $TITLE = '';
  $APPRAISALPERIOD = ''; 
  $DEPARTMENT = '';  
  $APPRAISALDATE = '';
  $MARITALSTATUS = ''; 
  $TELCONTACT = '';  
  $PERSONALEMAIL = '';
  $NOOFBIOCHILDREN = ''; 
  $EMPLOYMENTTERMS = '';
  $OTHERS = ''; 
   
   
  
  $DISTRICT = '';  
  $COUNTY = '';
  $SUBCOUNTY = '';
  $PARISH = '';
  $LCVILLAGE = '';       
  			   		  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ahr";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM appraisal_b WHERE `APPRAISALKEY` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){ 
     $TIMESTAMP = $row['TIMESTAMP'];
     $APPRAISALKEY = $row['APPRAISALKEY'];
     $DATECREATED = $row['DATECREATED'];
     $NAMEOFEMPLOYEE  = $row['NAMEOFEMPLOYEE'];
     $APPRAISEEACCOUNT = $row['APPRAISEEACCOUNT'];
     $FIRSTLVSUPERVISOR = $row['FIRSTLVSUPERVISOR'];
     $SECONDLVSUPERVISOR = $row['SECONDLVSUPERVISOR'];
     $APPRAISALSUBMISSIONDEADLINE = $row['APPRAISALSUBMISSIONDEADLINE']; 
	 $dnx[] = $row['CORERESPONSIBILITY'];
     $dpp[]    = $row['ACTIVITY'];
     $fqx[]       = $row['APPRAISEESCOREA'];  
     $dcm[]       = $row['JUSTIFICATION'];
	 $variance[]        = $row['APPRAISERCOREA']; 
	 $ddf[] = $row['APPRAISERSCOMMENT'];
     $qtyx[]    = $row['AGREEDSCOREA']; 
     $APPOINTMENTSTARTDATE   = $row['APPOINTMENTSTARTDATE']; 
	 $TITLE = $row['TITLE'];  
	 $APPRAISALPERIOD = $row['APPRAISALPERIOD'];  
	  
	 $DISTRICT = $row['DISTRICT']; 
	 $COUNTY = $row['COUNTY'];  
	 $SUBCOUNTY = $row['SUBCOUNTY']; 
	 $PARISH = $row['PARISH'];  
	 $LCVILLAGE = $row['LCVILLAGE']; 
	         
	  
	 $DEPARTMENT = $row['DEPARTMENT']; 
	 $APPRAISALDATE = $row['APPRAISALDATE'];  
	 $MARITALSTATUS = $row['MARITALSTATUS']; 
	 $TELCONTACT = $row['TELCONTACT'];  
	 $PERSONALEMAIL = $row['PERSONALEMAIL']; 
	 $NOOFBIOCHILDREN = $row['NOOFBIOCHILDREN']; 
	 $EMPLOYMENTTERMS = $row['EMPLOYMENTTERMS'];  
	 $OTHERS = $row['OTHERS'];  
	 
      }

  ?>
  
       
    <section class="content-header">  
    </section>
 
              
       <div class ="container-fluid" style="width:90%; height:100%; border: 1px #f8f1f1 solid;border-radius: 4px;">
      <div class="row">
      <div class="col-sm-12">
                        
          <img src="../hrm_home/img/logsbigxt.PNG"  width="100%" height="100%">   
  
          <font style=" font-weight:bold; color:#000; font-size:11px;"><center>STAFF PERFOMANCE APPRAISAL</center></font>
          <br>
              <form id="form-wizard" class="form-horizontal" method="post"  action="app_section_aprocess.php" >
              <div id="form-wizard-1" class="step">
              
             <input type="hidden" name="APPRAISALKEY"  id="APPRAISALKEY"  value=" <?php  echo $APPRAISALKEY; ?> " > 
              
               <table class="table-responsive" style="margin-top:0px;" >
               <table class="table" style="border:0px;">
               <tr>
     
                <th style="width:20%;border:0px;">Name of Employee / Appraisee:</th>
				<th style="width:30%;border:0px;">  <input type="text" name="NAMEOFEMPLOYEE"  id="NAMEOFEMPLOYEE" 
                value=" <?php  echo $NAMEOFEMPLOYEE; ?> " readonly="" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                <th style="width:20%;border:0px;">Name of Supervisor / Appraiser: </th>
				<th style="width:30%;border:0px;">   </th> 
                </tr>
			    </table>
             
               <table class="table-responsive" style="margin-top:-25px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:50%;border:0px;"></th>  
                <th style="width:20%;border:0px;">1st Level supervisor </th>
				<th style="width:30%;border:0px;"> <select id="FIRSTLVSUPERVISOR" name="FIRSTLVSUPERVISOR" value="<?php  echo $FIRSTLVSUPERVISOR; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;">  
                 <option value="<?php  echo $FIRSTLVSUPERVISOR; ?>"><?php  echo $FIRSTLVSUPERVISOR; ?></option>
                  ddd     = "<?php   echo $stdd; ?>"; 
                 </select>
                
                </th> 
              </tr>
			  </table>
              
               <table class="table-responsive" style="margin-top:-25px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:50%;border:0px;"></th>  
                <th style="width:20%;border:0px;">2nd Level supervisor </th>
				<th style="width:30%;border:0px;"> <select id="SECONDLVSUPERVISOR" name="SECONDLVSUPERVISOR" value="<?php  echo $SECONDLVSUPERVISOR; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;">
               <option value="<?php  echo $SECONDLVSUPERVISOR; ?>"><?php  echo $SECONDLVSUPERVISOR; ?></option>
                  ddd     = "<?php   echo $stdd; ?>"; 
                 </select>
                 </th> 
              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-20px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:20%;border:0px;">Title</th>
				<th style="width:30%;border:0px;"> <input type="text" id="TITLE" name="TITLE" value="<?php  echo $TITLE; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                <th style="width:20%;border:0px;">Appraisal period </th>
				<th style="width:30%;border:0px;"> <input type="text" id="APPRAISALPERIOD" name="APPRAISALPERIOD" 
                value="<?php  echo $APPRAISALPERIOD; ?>" 
				required=" "  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
              </tr>
			  </table>
              
     
	  
               <table class="table-responsive" style="margin-top:-25px;">
               <table class="table" style="border:0px;">
               <tr> 
                <th style="width:20%;border:0px;">Department</th>
				<th style="width:30%;border:0px;"> <input type="text" id="DEPARTMENT" name="DEPARTMENT" value="<?php  echo $DEPARTMENT; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                <th style="width:20%;border:0px;">Appraisal date </th>
				<th style="width:30%;border:0px;"> <input type="text" id="APPRAISALDATE" name="APPRAISALDATE"  value="<?php  echo $APPRAISALDATE; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                </tr>
			    </table>
               
   <input type="hidden" id="id" name="id" value="<?php  echo $id; ?>">   
               
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">  Basis for Assesssment and development
        </th>  </tr> </table>  <br>
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
        Staff performance appraisal is a management tool for establishing the extent to which the set targets/objectives within overall goals of an organization are achieved.  The  appraisal process offers an opportunity to the appraisee and appraiser to dialogue and obtain a feedback on performance.
              </th>  </tr> </table>  <br>

               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
        The evaluation system enables the performance of all employees to be analyzed and documented. It is a participatory process in which the employee is given an opportunity to evaluate themselves and rate their performance on a pre-determined scale. The employee shall then discuss their scores with their respective supervisors and or line managers, who shall also score the employee against the same yardstick. The employee shall finally be expected to identify skills gaps in which they require professional skills training, as the supervisor/Line manager shall also be expected to give an evaluation of the competencies of the staff with regard to their ability to effectively attain their professional 
targets.        </th>  </tr> </table>  <br>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">           
   Deadline for submission: 
   </th>  </tr> </table>  <br>
   
   
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
   <?php  echo $APPRAISALSUBMISSIONDEADLINE; ?> &nbsp This means that all sections must be completed before this date; by the Appraisee, Appraiser, Appraiser’s appraiser and Program Director, working together to ensure this deadline is met.
 </th>  </tr> </table>  <br>
  
  
  <p style=" font-weight:bold; color:#000; font-size:11px;">SECTION A: TO BE COMPLETED BY THE APPRAISEE</p>
              
       <p style=" font-weight:bold; color:#000; font-size:12px;">A1.Appraisee's current details:</p>
             
       <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:20%;border:0px;">Marital status (Check appropriately)</th>
				<th style="width:30%;border:0px;"> 
                <input type="text" id="MARITALSTATUS" name="MARITALSTATUS" value="<?php  echo $MARITALSTATUS; ?>" 
               required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
                <th style="width:10%;border:0px;">Telephone contact </th>
				<th style="width:15%;border:0px;"> <input type="text" id="TELCONTACT" name="TELCONTACT" value="<?php  echo $TELCONTACT; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                <th style="width:10%;border:0px;">Personal email </th>
				<th style="width:15%;border:0px;"> <input type="text" id="PERSONALEMAIL" name="PERSONALEMAIL"  value="<?php  echo $PERSONALEMAIL; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
              </tr>
			  </table>         
               
               
               <table class="table-responsive" style="margin-top:-20px;">
               <table class="table" style="border:0px;">
               <tr> 
                <th style="width:20%;border:0px;">Number of biological children and their ages </th>
				<th style="width:80%;border:0px;"> <input type="text" id="NOOFBIOCHILDREN" name="NOOFBIOCHILDREN" value="<?php  echo $NOOFBIOCHILDREN; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
                
              </tr>
			  </table>        
              
               <table class="table-responsive" style="margin-top:-20px;">
               <table class="table" style="border:0px;">
               <tr> 
                <th style="width:14%;border:0px;">Current residential location: </th> 
                <th style="width:6%;border:0px;">District </th>
				<th style="width:20%;border:0px;"> <input type="text" id="DISTRICT" name="DISTRICT" value="<?php  echo $DISTRICT; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
                
                <th style="width:10%;border:0px;">County </th>
				<th style="width:20%;border:0px;"> <input type="text" id="COUNTY" name="COUNTY" value="<?php  echo $COUNTY; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                
                
                 <th style="width:10%;border:0px;">Sub county </th>
				<th style="width:20%;border:0px;"> <input type="text" id="SUBCOUNTY" name="SUBCOUNTY" value="<?php  echo $SUBCOUNTY; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
			  </table>
                  
     
               <table class="table-responsive" style="margin-top:-25px;"> 
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:14%;border:0px;"> </th> 
                <th style="width:6%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>  
                
                <th style="width:10%;border:0px;">Parish </th>
				<th style="width:20%;border:0px;"> <input type="text" id="PARISH" name="PARISH" value="<?php  echo $PARISH; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                
                
                 <th style="width:10%;border:0px;">LC1 Village </th>
				<th style="width:20%;border:0px;"> <input type="text" id="LCVILLAGE" name="LCVILLAGE" value="<?php  echo $LCVILLAGE; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
			  </table> 
              <p></p>
               
                <p style=" font-weight:bold; color:#000; font-size:11px;">A2.Terms of employment:</p> 
              <table class="table-responsive" style="margin-top:0px;">
              <table class="table" style="border:0px;">
              <tr> 
                <th style="width:20%;border:0px;">Terms of employment</th>
				<th style="width:50%;border:0px;">  
                 <input type="text" id="EMPLOYMENTTERMS" name="EMPLOYMENTTERMS" value="<?php  echo $EMPLOYMENTTERMS; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
                  
                 <th style="width:10%;border:0px;">Other (Specify) </th>
				 <th style="width:20%;border:0px;"> <input type="text" id="OTHERS" name="OTHERS" value="<?php  echo $OTHERS; ?>"
				   style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
              
               
              <p style=" font-weight:bold; color:#000; font-size:12px;"> 
              A 3: New/ additional Academic & Professional Qualifications acquired and short term training courses attended during appraisal period</p>
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:40%; text-align:left;">Award (Degree, Diploma, Certificate) </th>
				<th style="width:30%;text-align:left;"> Institution </th>  
                <th style="width:15%;text-align:left;"> From </th>
                <th style="width:15%;text-align:left;"> To </th> 
              </tr>
			  </table>         
                 <?php
					$a=mysqli_query($conn,"select * from appraisal_b WHERE `APPRAISALKEY` = '$id'");
					$arow=mysqli_fetch_array($a); 
				?>                            
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>   
				<th style="width:40%;;"> <input type="text" id="ACADEMICAWARD" name="ACADEMICAWARD"  value="<?php echo $arow['ACADEMICAWARD']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th> 
                  
				<th style="width:30%;"> <input type="text" id="INSTITUTION" name="INSTITUTION"  value="<?php echo $arow['INSTITUTION']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th>  
                  
				<th style="width:15%;"> <input type="text" id="FROMDATE" name="FROMDATE"  value="<?php echo $arow['FROMDATE']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th>  
                  
                  <th style="width:15%;"> <input type="text" id="TODATE" name="TODATE"  value="<?php echo $arow['TODATE']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th> 
              </tr>
			  </table> 
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>   
				<th style="width:40%;;"> <input type="text" id="ACADEMICAWARD1" name="ACADEMICAWARD1"  value="<?php echo $arow['ACADEMICAWARD1']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th> 
                  
				<th style="width:30%;"> <input type="text" id="INSTITUTION1" name="INSTITUTION1"  value="<?php echo $arow['INSTITUTION1']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th>  
                 
				<th style="width:15%;"> <input type="text" id="FROMDATE1" name="FROMDATE1"  value="<?php echo $arow['FROMDATE1']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th>  
                  
                  <th style="width:15%;"> <input type="text" id="TODATE1" name="TODATE1"  value="<?php echo $arow['TODATE1']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th> 
              </tr>
			  </table> 
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>   
				<th style="width:40%;;"> <input type="text" id="ACADEMICAWARD2" name="ACADEMICAWARD2"  value="<?php echo $arow['ACADEMICAWARD2']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th> 
                  
				<th style="width:30%;"> <input type="text" id="INSTITUTION2" name="INSTITUTION2"  value="<?php echo $arow['INSTITUTION2']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th>  
                 
				<th style="width:15%;"> <input type="text" id="FROMDATE2" name="FROMDATE2"  value="<?php echo $arow['FROMDATE2']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th>  
                  
                  <th style="width:15%;"> <input type="text" id="TODATE2" name="TODATE2"  value="<?php echo $arow['TODATE2']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th> 
              </tr>
			  </table>  
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>   
				<th style="width:40%;;"> <input type="text" id="ACADEMICAWARD3" name="ACADEMICAWARD3"  value="<?php echo $arow['ACADEMICAWARD3']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th> 
                  
				<th style="width:30%;"> <input type="text" id="INSTITUTION3" name="INSTITUTION3"  value="<?php echo $arow['INSTITUTION3']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th>  
                 
				<th style="width:15%;"> <input type="text" id="FROMDATE3" name="FROMDATE3"  value="<?php echo $arow['FROMDATE3']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th>  
                  
                  <th style="width:15%;"> <input type="text" id="TODATE3" name="TODATE3"  value="<?php echo $arow['TODATE3']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;border: 1px;"> </th> 
              </tr>
			  </table>  
  <br><br> 
              
              
              
       <p style=" font-weight:bold; color:#000; font-size:11px;">SECTION B: TO BE COMPLETED BY THE APPRAISEE AND APPRAISER</p>
              
       <p style=" font-weight:bold; color:#000; font-size:12px;">Section B.1: Tasks (Results) Assessment: The section shall consititute 80% of the final score</p>
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
This section is a summary of the Employee’s Assessment of their performance.  The Employee shall be expected to identify the core responsibilities as per their job descriptions/pre-determined agreed objectives and targets, and to score themselves against a scale of 1 to 10, with 1 being the lowest and 10 being the highest score, in reference to the above performance level categories.  The Appraiser will then appraise the employee performance and indicate the scores in the column for the appraiser. The Appraiser and Appraise will then have a dialogue meeting to discuss the performance, the performance and arrive at an agreed score to be filled in the column for agreed score.</P>
</th>  </tr> </table>  <br>

<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
        Each score must be justified and supported with explanations and details of the actual activities undertaken.
 </th>  </tr> </table>  

 
  <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr> 
   <th style="">Core responsibilities/performance objectives </th> 
       <th style="text-align:center;">Activities</th>  
       <th style="text-align:center;">Appraisee score out of 10</th>
       <th style="text-align:center;"><b>Justification</b>&nbsp(Give details of performance rating as against 
                                                  core duties /objectives/targets in quantifiable sums. E.g number of Deliverables seen.</th>  
       <th style=" text-align:center;">Appraiser's score</th>  
       <th style=" text-align:center;">Appraiser's.comments</th>
       <th style=" text-align:center;">Agreed score</th>       
      </tr>
      </thead>
      <tbody>       
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr > 
                                                   
                                                  <td> <input name="dnx[]" required="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  class="form-control" style= "width:100%; background-color:#fff;;"/></td>
                                                     
                                                  <td> <input name="dpp[]" required="" type="text" value="<?php  echo $dpp[$s]; ?>"  
                                                  class="form-control" readonly=""
                                                   style= "width:100%; background-color:#fff; text-align:left;"/></td> 
                                                     
                                                  <td> <input  name1="APPRAISEESCOREA[]" name="fqx[]" type="text" value="<?php echo $fqx[$s]; ?> " 
                                                     required="" class="form-control" style= "width:100%; background-color:#fff;text-align:center;"/></td> 
                                                  
                                                  <td> <input  name="dcm[]" type="text" value="<?php echo $dcm[$s]; ?>" 
                                                  class="form-control" style= "width:100%; background-color:#fff;text-align:left;"/></td> 
                                                     
                                                   <td> <input  class="qty" name1="qty[]" name="variance[]" readonly="" type="text" value="<?php echo $variance[$s]; ?>" 
                                                   class="form-control" style= "width:100%; background-color:#fff;text-align:center;"/></td>  
                                                    
                                                    <td> <input name="ddf[]" type="text" value="<?php echo $ddf[$s]; ?>"  readonly=""
                                                    class="form-control" style= "width:100%; background-color:#fff;"/></td> 
                                                    
                                                    <td> <input  name1="AGREEDSCOREA[]" name="qtyx[]" type="text" value="<?php echo $qtyx[$s]; ?>"  readonly="" 
                                                    class="form-control" style= "width:100%; background-color:#fff;text-align:center;" /></td>  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
                                
     
                                     
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">  
        Summary of rating / scores for B.1 
        </th>  </tr> </table>     
                
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:33.33333333%; text-align:left;"> Appraisee's section </th>
				<th style="width:33.33333333%;text-align:left;"> Appraiser section </th>  
                <th style="width:33.33333333%;text-align:center;"> Appraisee and Appraiser Dialogue Section </th>  
              </tr>
			  </table>         
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                <th style="width:15%;">a) Total score by appraisee </th>
				<th style="width:18.33333333%;;"> <input type="text" id="TTSCOREA" name="TTSCOREA" readonly="" value="<?php echo $arow['TTSCOREA']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%;">b) Total score by appraisee </th>
				<th style="width:18.33333333%;"> <input type="text" id="TTSCOREB" name="TTSCOREB" readonly="" value="<?php echo $arow['TTSCOREB']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
                <th style="width:15%;">c) Total agreed score </th>
				<th style="width:18.33333333%;"> <input type="text" id="TTSCOREAGREED" name="TTSCOREAGREED" readonly="" value="<?php echo $arow['TTSCOREAGREED']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
              </tr>
			  </table>   
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:15%;">Signature</th>
				<th style="width:18.33333333%;"> <input type="text" id="SIG" name="SIG" readonly=""
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%; ">Signature </th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGA" name="SIGA" readonly=""
			  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
                <th style="width:15%;">Signature of Appraisee </th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGB" name="SIGB" readonly=""
			  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
              </tr>
			  </table>       
                       
                  
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:15%;">Date</th>
				<th style="width:18.33333333%;"> <input type="text" id="APPZIDATEA" name="APPZIDATEA" readonly="" value="<?php echo $arow['APPZIDATEA']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%;">Date </th>
				<th style="width:18.33333333%;"> <input type="text" id="APPZADATEA" name="APPZADATEA" readonly="" value="<?php echo $arow['APPZADATEA']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
                <th style="width:15%;">Signature of Appraiser </th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGC" name="SIGC" readonly="" 
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
              </tr>
			  </table>  
              
              
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                 <th style="width:66.66666666%;">  </th>    
                
                <th style="width:15%;">Date </th>
				<th style="width:18.33333333%;"> <input type="text" id="DIALOGUEDATEA" name="DIALOGUEDATEA" readonly="" value="<?php echo $arow['DIALOGUEDATEA']; ?>"
			  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
              </tr>
			  </table>   
              <br> 
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">      
              <p style="font-weight:bold;">B.2. BEHAVIOURAL ASSESSMENT: This section shall constitute 20% of the final score)</p>
<p style="font-weight:bold;">Analysis and assessment of critical attributes required to perform the activities</p>
<p>The appraisee should only be rated in areas that are relevant to his/her job. The maximum points per attribute and/or quality are ten (10). Under each attribute, the 10 points should be allocated in a manner that shows the areas of strengths and weaknesses of the appraisee. Ten (10) is the maximum per attribute and one (1) lowest. Please indicate the relevant points in the boxes provided, thereafter add up the points, and indicate the total. The score out of 20 will be got by; dividing the total score by the total maximum score for all attributes rated. Then multiply the result by 20.
 </th>  </tr> </table>  <br>
 
 <br><br>
              
              </div>
              <div id="form-wizard-2" class="step">
              <br>
          <P> Rating by the Appraisee and the Appraiser/ Supervisor</P>
          
          <input type="hidden" id="APPRAISALKEY" name="APPRAISALKEY" value="<?php echo $arow['APPRAISALKEY']; ?>">
          
   <table class="table table-tabled-tabled" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>    
   <th style="width:;background-color:#fff;">No. </th> 
   <th style="width: ;background-color: #fff; text-align:center;">Core Responsibilities/ Performance objectives</th> 
    <th style="width: ;background-color:#fff;text-align:center;">Activities</th>
   <th style="width: ;background-color:#fff;text-align:center;">Appraisee Score out of 10 </th>
   <th style="width: ;background-color: #fff;text-align:center;">Justification (Give details of performance rating as against core duties /objectives/targets in quantifiable sums. E.g number of Deliverables seen, etc).</th>
   <th style="width: ;background-color: #fff;">Appraiser’s Score </th>
   <th style="width: ;background-color: #fff;">Appraiser’s Comments</th>
   <th style="width: ;background-color: #fff;">Agreed Score</th> 
 
      </tr>
      </thead>
      <tbody>
 
    <td> <center>1</center> </td> 
    <td>Provision of Youth Friendly services: (Client Service Orientation / Public Relations) </td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Treats the clients with respect and courtesy</li>
     <li>Shows appropriate patience with complaining clients and employees</li>
     <li>Is approachable and responsive to clients and others</li>
     <li>Provides consistent, quality service to all clients</li>
     <li>Demonstrates courtesy and a professional attitude in handling client issues</li>
     <li>Is available to the clients and provides accurate, consistent, and honest information.</li>
     <li>Knows how to keep confidential information confidential</li>
     <li>Understands and responds quickly to needs of department and clients</li>
     
     </ul> 
    </td>   
     
    <td> <input name1="APPZISCOREESCB[]" name="APPZISCOREESCB" type="text" required="" value="<?php echo $arow['APPZISCOREESCB']; ?>"
    style= "width:100%; background-color:#fff; text-align:center; "/></td> 
     
    <td> <textarea  name="JUSTIFICATIONSECB" type="text" required="" 
    style= "width:100%; background-color:#fff;height: 18px; "/> <?php echo $arow['JUSTIFICATIONSECB']; ?></textarea></td> 
    
    <td> <input class="qty" name1="qty[]" name="APPZASCOREESCB" type="text"  readonly=""  value="<?php echo $arow['APPZASCOREESCB']; ?>"
    style= "width:100%; background-color:#fcfcfc;text-align:center; "/>
    </td>
        
    <td> <textarea name="APPZACOMMENTSECB" type="text" readonly="" 
    style= "width:100%; background-color:#fcfcfc;height: 18px;"/> <?php echo $arow['APPZACOMMENTSECB']; ?></textarea></td>  
     
    <td> <input  name1="AGREEDSCORESECB[]" name="AGREEDSCORESECB" type="numeric"  readonly=""  value="<?php echo $arow['AGREEDSCORESECB']; ?>" 
    style= "width:100%; background-color:#fcfcfc; text-align:center; "/>    </td> 
                                                     
    </tr>   
     <td> <center>2</center> </td> 
    <td>Creativity/Innovation/Problem solving: </td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>He / She is always proactive (does things before being asked or forced to by events). </li>
     <li>Always optimize resources to produce more with the available resources by introducing easier or faster ways of doing business.</li>
     <li>Demonstrates attention to detail and accuracy while producing outputs</li>
     <li>Always generate new workable ideas for consideration. </li>
     <li>Proposes changes or new approaches</li>
     <li>Doesn’t shy away to suggest or try out something new or finding a different way to do things</li>
     <li>Considers alternative methods to increase effectiveness and efficiency</li>
     <li>Shows initiative and seeks opportunities to develop skills, knowledge, and experience.</li>
     <li>Adds insight into an existing or new situation</li>
     <li>Proactive; take initiative in discovering inventive methods of being productive so that their company gains from it in the process</li>
     <li>Accepts criticism, is open to new ideas, and handles conflict constructively and diplomatically.</li>
     <li>Learns from challenges and makes appropriate changes</li> 
     </ul> 
    </td>   
     
    <td> <input name1="APPZISCOREESCB2[]" name="APPZISCOREESCB2" type="text"   required="" value="<?php echo $arow['APPZISCOREESCB2']; ?>"
    style= "width:100%; background-color:#fff; text-align:center; "/></td>  
    
    <td> <textarea  name="JUSTIFICATIONSECB2" type="text"  required=""   
    style= "width:100%; background-color:#fff;height: 18px; "/> <?php echo $arow['JUSTIFICATIONSECB2']; ?> </textarea></td> 
    
    <td> <input class="qty" name1="qty2[]" name="APPZASCOREESCB2" type="text"  readonly="" value="<?php echo $arow['APPZASCOREESCB2']; ?>"
    style= "width:100%; background-color:#fcfcfc;text-align:center; "/>
    </td>
        
    <td> <textarea name="APPZACOMMENTSECB2" type="text" readonly=""  
    style= "width:100%; background-color:#fcfcfc;height: 18px;"/>  <?php echo $arow['APPZACOMMENTSECB2']; ?> </textarea></td>  
     
    <td> <input  name1="AGREEDSCORESECB2[]" name="AGREEDSCORESECB2" type="numeric"  readonly="" value="<?php echo $arow['AGREEDSCORESECB2']; ?>"
    style= "width:100%; background-color:#fcfcfc; text-align:center;"/>    </td> 
    
     </tr>   
     <td> <center>3</center> </td> 
    <td>Team Work:</td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Often engages colleagues while handling matters that require their opinion before deciding on final position. </li>
     <li>Is always willing to put in extra effort when needed to support others. </li>
     <li>Recognizes team differences (different ways of doing business in different business areas).</li>
     <li>Proactively shares relevant information and learning ideas with colleagues.</li>
     <li>Demonstrate commitment and delivers results when working on a team.</li>
     <li>Builds trust and cooperation with clients and among co-workers.</li>
     <li>Works effectively and contributes to positive strategic work relationships with people at all levels</li>
     <li>Fosters a work environment that conveys a sense of unity and cooperation among staff</li>
     <li>Does motivate coworkers and building constructive work relationships.</li>
     <li>Acts as coach (as appropriate) to help others learn new technology applications</li>
     <li>Continuously shares opinion and ideas with coworkers for the good of the team </li>
     <li>Contributes to a positive work environment through their interactions with others.</li> 
     <li>Is cooperative and responsive</li>
     <li>Promotes cooperation and teamwork</li>
     <li>Takes initiative to improve working relationships and foster feelings of mutual respect with  coworkers and customers</li>
     <li>Makes a special effort to boost employee morale and create a positive work environment</li>
     <li>Involves others in problem solving.</li>
     <li>Creates a positive work environment and influences the behavior of other employees by their supportive and optimistic approach to daily activities within the work environment.</li>
     <li>Assists coworkers in response to fluctuations in workloads</li>
     <li>Has a good working relationship with most of his/her peers,   subordinates, supervisors, clients, and the community?</li>
     <li>Exhibits willingness to work as a team member</li>
     <li>Balances own responsibilities with interests of team and/or department</li>
     <li>Shares knowledge, responsibilities, and expertise with others easily and frequently</li>
     <li>Acts as teacher, mentor, and/or coach to others in a work place</li>
     <li>Demonstrates positive influences within groups/teams in which she/he participates</li>
     </ul> 
    </td>   
     
    <td> <input name1="APPZISCOREESCB3[]" name="APPZISCOREESCB3" type="text" required="" value="<?php echo $arow['APPZISCOREESCB3']; ?>"
    style= "width:100%; background-color:#fff; text-align:center; "/></td>
      
    <td> <textarea  name="JUSTIFICATIONSECB3" type="text" required="" 
    style= "width:100%; background-color:#fff;height: 18px; "/> <?php echo $arow['JUSTIFICATIONSECB3']; ?> </textarea></td> 
    
    <td> <input class="qty" name1="qty3[]" name="APPZASCOREESCB3" type="text" readonly="" value="<?php echo $arow['APPZASCOREESCB3']; ?>"
    style= "width:100%; background-color:#fcfcfc;text-align:center; "/>
    </td>
        
    <td> <textarea name="APPZACOMMENTSEC3" type="text"  readonly=""  
    style= "width:100%; background-color:#fcfcfc;height: 18px;"/> <?php echo $arow['APPZACOMMENTSEC3']; ?> </textarea></td>  
     
    <td> <input  name1="AGREEDSCORESECB3[]" name="AGREEDSCORESECB3" type="numeric"  readonly="" value="<?php echo $arow['AGREEDSCORESECB3']; ?>"
    style= "width:100%; background-color:#fcfcfc; text-align:center;"/>    </td>  
    
    
     </tr>   
     <td> <center>4</center> </td> 
    <td>Communication</td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Communicates clearly, effectively, and appropriately verbally and in writing (presenting grammatically correct oral and written information).</li>
     <li>Appropriately expresses own opinion in a clear and confident manner with timely feedback. </li>
     <li>Listens effectively and carefully and waits for the other persons to first finish their intended message (ideas, problems or suggestion) before responding.</li>
     <li>Consistently communicates ideas, instructions, or information clearly, concisely, and tactfully</li>
     <li>Regularly keeps supervisor(s) and coworkers informed of his/her work progress and assignments.</li>
     <li>Provides accurate, timely information (oral/written)</li>
     <li>Responds in a prompt and friendly manner to requests and inquiries</li>
     <li>Meets routinely with supervisor and key customers to exchange information and clarify  expectations</li>
     <li>Uses appropriate communication methods and tools effectively (e.g., presentation, verbal, writing, relationship building, negotiating, listening) to meet needs of audience and/or situation</li>
     <li>Responds to telephone and e-mail messages within the day</li>
     <li>Recognizes appropriate times to communicate and tailors communication to meet the needs and preferences of others </li>
     <li>Shares information and accepts feedback easily and in a timely manner the time in all ways.</li> 
     <li>Complies with all Institutional policies and procedures at all times.</li>
     <li>Holds self and others accountable for their actions and behaviors.</li>
     <li>Is reliable, dependable and trusted.</li>
     <li>Follows instructions at all times</li>
     <li>Builds trust and works with integrity</li>
     <li>Keeps appointments, endeavors, full fills commitments and promises, etc.</li>
     <li>Adheres to established work schedule</li>
     <li>Arrives at work and meetings on time</li>
     <li>Administrative and financial accountabilities are accurate and submitted on time</li>
     <li>Knows how to keep confidential information confidential</li> 
     </ul> 
    </td>   
     
    <td> <input name1="APPZISCOREESCB4[]" name="APPZISCOREESCB4" type="text"  required="" value="<?php echo $arow['APPZISCOREESCB4']; ?>" 
	style= "width:100%; background-color:#fff; text-align:center; "/></td>  
    
    <td> <textarea  name="JUSTIFICATIONSECB4" type="text" required=""  style= "width:100%; background-color:#fff;height: 18px; "/>
	<?php echo $arow['JUSTIFICATIONSECB4']; ?></textarea></td> 
    
    <td> <input class="qty" name1="qty4[]" name="APPZASCOREESCB4" type="text"  readonly="" value="<?php echo $arow['APPZASCOREESCB4']; ?>" 
	style= "width:100%; background-color:#fcfcfc;text-align:center; "/>
    </td>
        
    <td> <textarea name="APPZACOMMENTSEC4" type="text"  readonly="" style= "width:100%; background-color:#fcfcfc;height: 18px;"/>
	<?php echo $arow['APPZACOMMENTSEC4']; ?></textarea></td>  
     
    <td> <input  name1="AGREEDSCORESECB4[]" name="AGREEDSCORESECB4" type="numeric"  value="0" readonly="" value="<?php echo $arow['AGREEDSCORESECB4']; ?>" 
	style= "width:100%; background-color:#fcfcfc; text-align:center;"/>    </td>  
     
      </tr>   
     <td> <center>5</center> </td> 
    <td>Decision Making:</td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Demonstrates appropriate initiative</li>
     <li>Knows decisions to make at his/her level and identifies information required to take appropriate decision. </li>
     <li>Analyses problem thoroughly. </li> 
     <li>Shows patience and determination in resolving problems. </li> 
     <li>Remains accountable to his / her decision. </li>
     <li>Makes informed decisions; after carefully and thoughtfully considering  potential implications </li>
     <li>Reaches sound decisions and exercises good judgment based on balanced consideration of facts, priorities, and alternatives </li> 
     <li>Reaches a decision rapidly after taking account of all likely outcomes and estimating the route most likely to bring success. The decisions almost always turn out to be good ones </li> 
     <li>Demonstrates ability to examine existing problems/issues in new ways </li>
     <li>Demonstrates awareness and sensitivity to others' needs in communicating and/or making decisions </li> 
     </ul> 
    </td>   
     
    <td> <input name1="APPZISCOREESCB5[]" name="APPZISCOREESCB5" type="text" required=""  value="<?php echo $arow['APPZISCOREESCB5']; ?>"
	style= "width:100%; background-color:#fff; text-align:center; "/></td> 
     
    <td> <textarea  name="JUSTIFICATIONSECB5" type="text" required=""  style= "width:100%; background-color:#fff;height: 18px; "/>
	<?php echo $arow['JUSTIFICATIONSECB5']; ?></textarea></td> 
    
    <td> <input class="qty" name1="qty5[]" name="APPZASCOREESCB5" type="text" readonly="" value="<?php echo $arow['APPZASCOREESCB5']; ?>"
	style= "width:100%; background-color:#fcfcfc;text-align:center; "/>
    </td>
        
    <td> <textarea name="APPZACOMMENTSEC5" type="text"  readonly="" style= "width:100%; background-color:#fcfcfc;height: 18px;"/>
	<?php echo $arow['APPZACOMMENTSEC5']; ?></textarea></td>  
     
    <td> <input  name1="AGREEDSCORESECB5[]" name="AGREEDSCORESECB5" type="numeric" value="0" readonly="" value="<?php echo $arow['AGREEDSCORESECB5']; ?>"
	style= "width:100%; background-color:#fcfcfc; text-align:center;"/>    </td> 
       
     </tr>   
     <td> <center>6</center> </td> 
    <td>Excellence:</td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Optimistic; Maintains positive attitudes at all times.</li>
     <li>Thinks analytical (gives opinion / idea after thoroughly thinking through it).</li>
     <li>Maintains good corporate image at all times (dressing appropriately, wearing IDs, maintaining neatness of body and dressings, punctual at work and manages his or her time well while on duty). </li> 
     <li>Always performs assignments beyond the expected targets. </li> 
     <li>Detail-oriented; Pays attention to details</li>
     <li>Responds promptly to requests for information and/or assistance. </li>
     <li>Meets supervisor’s coworkers and clients expectations in a timely manner/Delivers what has been promised.</li> 
     <li>Provides consistent, timely, high quality work</li> 
     <li>Meets assigned deadlines without additional prompting by supervisor or others</li>
     <li>Always finishes assignments on time, meets deadlines</li> 
     <li>Completes projects ahead of time without compromising the quality of work</li>
     <li>Expected results are achieved in a timely?</li>
     <li>Uses resources (people, time, materials) in cost-effective manner to achieve work objectives</li>
     <li>Completes work well in advance of deadlines so that the supervisor has plenty of time 
to review documents and make revisions, rather than receiving documents just before the 
deadline with little time for adequate proof reading and revisions.
</li>
     <li>Completes work by established time lines and routinely uses time efficiently</li> 
     </ul> 
    </td>   
     
    <td> <input name1="APPZISCOREESCB6[]" name="APPZISCOREESCB6" type="text"  required="" value="<?php echo $arow['APPZISCOREESCB6']; ?>"
	style= "width:100%; background-color:#fff; text-align:center; "/></td>  
    
    <td> <textarea  name="JUSTIFICATIONSECB6" type="text"  required="" style= "width:100%; background-color:#fff;height: 18px; "/>
	<?php echo $arow['JUSTIFICATIONSECB6']; ?></textarea></td> 
    
    <td> <input class="qty" name1="qty6[]" name="APPZASCOREESCB6" type="text" readonly="" value="<?php echo $arow['APPZASCOREESCB6']; ?>"
	style= "width:100%; background-color:#fcfcfc;text-align:center; "/> </td>
        
    <td> <textarea name="APPZACOMMENTSEC6" type="text"  class="form-control" readonly="" style= "width:100%; background-color:#fcfcfc;height: 18px;"/>
	<?php echo $arow['APPZACOMMENTSEC6']; ?></textarea></td>  
     
    <td> <input  name1="AGREEDSCORESECB6[]" name="AGREEDSCORESECB6" type="numeric"  value="0" readonly="" value="<?php echo $arow['AGREEDSCORESECB6']; ?>"
	style= "width:100%; background-color:#fcfcfc; text-align:center;"/>    </td>    
     
     </tr>   
     <td> <center>7</center> </td> 
    <td>Attendance:</td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Reports to work on a timely basis </li>
     <li>Is available at the work station to serve co-workers and clients.</li>
     <li>Consider arrival times, observance of time limits for breaks and lunches.   </li> 
     <li>Communicates and seeking prior approval for leave, and gives prompt notice to supervisor of absence due to illness or other acceptable reasons.</li> 
     <li>Secures data appropriately</li> 
     </ul> 
    </td>   
     
    <td> <input name1="APPZISCOREESCB7[]" name="APPZISCOREESCB7" type="text" required="" value="<?php echo $arow['APPZISCOREESCB7']; ?>"
	style= "width:100%; background-color:#fff; text-align:center; "/></td> 
     
    <td> <textarea  name="JUSTIFICATIONSECB7" type="text" required=""  
	 style= "width:100%; background-color:#fff;height: 18px; "/><?php echo $arow['JUSTIFICATIONSECB7']; ?> </textarea></td> 
    
    <td> <input class="qty" name1="qty7[]" name="APPZASCOREESCB7" type="text"  value="<?php echo $arow['APPZASCOREESCB7']; ?>"
	readonly="" style= "width:100%; background-color:#fcfcfc;text-align:center; "/>
    </td>
        
    <td> <textarea name="APPZACOMMENTSEC7" type="text"  readonly=""  
	style= "width:100%; background-color:#fcfcfc;height: 18px;"/><?php echo $arow['APPZACOMMENTSEC7']; ?> </textarea></td>  
     
    <td> <input type="numeric" name1="AGREEDSCORESECB7[]" name="AGREEDSCORESECB7" value="0"  readonly="" value="<?php echo $arow['AGREEDSCORESECB7']; ?>"
	style= "width:100%; background-color:#fcfcfc; text-align:center;"/>    </td>    
                    
     </tr>   
     <td>  Total </td>  
     <td>   </td> 
     <td>   </td> 
     <td>   </td> 
     <td>   </td>
     <td>   </td>
     <td>   </td>
     <div id="grand">
     <td><input type="numeric" name="ORDERVALUE" name1="gran" id="gran"  readonly="" 
	 style="width:100%; text-align:center;background-color:#fcfcfc; font-weight:bold;"></td>   
     </div>                                                 
     </tr>  
     </tbody> </table>  
       <input  type="hidden" name="dice" name1="dice[]"value="2" />  
            
       <input  type="hidden" name="equity" name1="equity[]"/>
       <input  type="hidden" name="equity2" name1="equity2[]"/>
       <input  type="hidden" name="equity3" name1="equity3[]"/>
       <input  type="hidden" name="equity4" name1="equity4[]"/>  
       <input  type="hidden" name="equity5" name1="equity5[]"/> 
       <input  type="hidden" name="equity6" name1="equity6[]"/>
       <input  type="hidden" name="equity7" name1="equity7[]"/> 
<script type="text/javascript">
$(document).ready(function() { 
	    $(".qty").keyup(function() {
        var grandTotal = 0;
        $("input[name1='qty[]']").each(function (index) {
            var qty = $("input[name1='qty[]']").eq(index).val();
		    var qty2 = $("input[name1='qty2[]']").eq(index).val(); 
			var qty3 = $("input[name1='qty3[]']").eq(index).val(); 
			var qty4 = $("input[name1='qty4[]']").eq(index).val(); 
			var qty5 = $("input[name1='qty5[]']").eq(index).val(); 
			var qty6 = $("input[name1='qty6[]']").eq(index).val(); 
			var qty7 = $("input[name1='qty7[]']").eq(index).val(); 
			
            var APPZISCOREESCB = $("input[name1='APPZISCOREESCB[]']").eq(index).val(); 
			var APPZISCOREESCB2 = $("input[name1='APPZISCOREESCB2[]']").eq(index).val();
			var APPZISCOREESCB3 = $("input[name1='APPZISCOREESCB3[]']").eq(index).val();
			var APPZISCOREESCB4 = $("input[name1='APPZISCOREESCB4[]']").eq(index).val();
			var APPZISCOREESCB5 = $("input[name1='APPZISCOREESCB5[]']").eq(index).val();
			var APPZISCOREESCB6 = $("input[name1='APPZISCOREESCB6[]']").eq(index).val();
			var APPZISCOREESCB7 = $("input[name1='APPZISCOREESCB7[]']").eq(index).val();
			
		    var dice = $("input[name1='dice[]']").eq(index).val();
			
            var equity = parseInt(APPZISCOREESCB) + parseInt(qty);
			var equity2 = parseInt(APPZISCOREESCB2) + parseInt(qty2);
			var equity3 = parseInt(APPZISCOREESCB3) + parseInt(qty3);
			var equity4 = parseInt(APPZISCOREESCB4) + parseInt(qty4);
			var equity5 = parseInt(APPZISCOREESCB5) + parseInt(qty5);
			var equity6 = parseInt(APPZISCOREESCB6) + parseInt(qty6);
			var equity7 = parseInt(APPZISCOREESCB7) + parseInt(qty7);
			
			var AGREEDSCORESECB = parseInt(equity) / parseInt(dice);
			var AGREEDSCORESECB2 = parseInt(equity2) / parseInt(dice);
			var AGREEDSCORESECB3 = parseInt(equity3) / parseInt(dice);
			var AGREEDSCORESECB4 = parseInt(equity4) / parseInt(dice);
			var AGREEDSCORESECB5 = parseInt(equity5) / parseInt(dice);
			var AGREEDSCORESECB6 = parseInt(equity6) / parseInt(dice);
			var AGREEDSCORESECB7 = parseInt(equity7) / parseInt(dice);

            if (!isNaN(AGREEDSCORESECB)) {
                $("input[name1='AGREEDSCORESECB[]']").eq(index).val(AGREEDSCORESECB);
                grandTotal = parseInt(grandTotal) + parseInt(AGREEDSCORESECB);
                $('#gran').val(grandTotal);
            } 
			if (!isNaN(AGREEDSCORESECB2)) {
                $("input[name1='AGREEDSCORESECB2[]']").eq(index).val(AGREEDSCORESECB2);
                grandTotal = parseInt(grandTotal) + parseInt(AGREEDSCORESECB2);
                $('#gran').val(grandTotal);
            } 
			if (!isNaN(AGREEDSCORESECB3)) {
                $("input[name1='AGREEDSCORESECB3[]']").eq(index).val(AGREEDSCORESECB3);
                grandTotal = parseInt(grandTotal) + parseInt(AGREEDSCORESECB3);
                $('#gran').val(grandTotal);
            } 
			
			if (!isNaN(AGREEDSCORESECB4)) {
                $("input[name1='AGREEDSCORESECB4[]']").eq(index).val(AGREEDSCORESECB4);
                grandTotal = parseInt(grandTotal) + parseInt(AGREEDSCORESECB4);
                $('#gran').val(grandTotal);
            } 
			if (!isNaN(AGREEDSCORESECB5)) {
                $("input[name1='AGREEDSCORESECB5[]']").eq(index).val(AGREEDSCORESECB5);
                grandTotal = parseInt(grandTotal) + parseInt(AGREEDSCORESECB5);
                $('#gran').val(grandTotal);
            } 
			if (!isNaN(AGREEDSCORESECB6)) {
                $("input[name1='AGREEDSCORESECB6[]']").eq(index).val(AGREEDSCORESECB6);
                grandTotal = parseInt(grandTotal) + parseInt(AGREEDSCORESECB6);
                $('#gran').val(grandTotal);
            } 
			if (!isNaN(AGREEDSCORESECB7)) {
                $("input[name1='AGREEDSCORESECB7[]']").eq(index).val(AGREEDSCORESECB7);
                grandTotal = parseInt(grandTotal) + parseInt(AGREEDSCORESECB7);
                $('#gran').val(grandTotal);
            } 
        });
    });
});
</script>
               
     <br>
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
        Summary of ratings/scores for B.2 
         </th>  </tr> </table>  <br>

        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:33.33333333%; text-align:left;">Appraisee's section </th>
				<th style="width:33.33333333%;text-align:left;"> Appraiser section </th>  
                <th style="width:33.33333333%;text-align:center;"> Appraisee and Appraiser Dialogue Section </th>  
              </tr>
			  </table>         
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                <th style="width:15%;">a) Total score by appraisee </th>
				<th style="width:18.33333333%;;"> <input type="text" id="TT1" name="TT1" readonly="" value="<?php echo $arow['TT1']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%;">b) Total score by appraisee </th>
				<th style="width:18.33333333%;"> <input type="text" id="TT2" name="TT2" readonly="" value="<?php echo $arow['TT2']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
                <th style="width:15%;">c) Total agreed score </th>
				<th style="width:18.33333333%;"> <input type="text" id="TT3" name="TT1" readonly="" value="<?php echo $arow['TT3']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
              </tr>
			  </table>   
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:15%;">Signature</th>
				<th style="width:18.33333333%;"> <input type="text" id="SIG" name="SIGQ" readonly=""
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%; ">Signature </th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGAQ" name="SIGAQ" readonly=""
			  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
                <th style="width:15%;">Signature of Appraisee </th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGBQ" name="SIGBQ" readonly=""
			  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
              </tr>
			  </table>       
                       
                  
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:15%;">Date</th>
				<th style="width:18.33333333%;"> <input type="text" id="TTDATE1" name="TTDATE1" readonly="" value="<?php echo $arow['TTDATE1']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%;">Date </th>
				<th style="width:18.33333333%;"> <input type="text" id="TTDATE2" name="TTDATE2" readonly="" value="<?php echo $arow['TTDATE2']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
                <th style="width:15%;">Signature of Appraiser </th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGCQ" name="SIGCQ" readonly=""
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
              </tr>
			  </table>  
              
               
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:66.66666666%;">  </th>     
                <th style="width:15%;">Date </th>
				<th style="width:18.33333333%;"> <input type="text" id="TTDATE3" name="TTDATE3" readonly="" value="<?php echo $arow['TTDATE3']; ?>"
			  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>   
              </tr>
			  </table>   
              <br> 
              
              <br>
     
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
         C. OVERALL PERFORMANCE  AND REVIEW COMMENTS: 
      </th>  </tr> </table>  <br>

         
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:33.33333333%; text-align:left;">Appraisee's section </th>
				<th style="width:33.33333333%;text-align:left;"> Appraiser section </th>  
                <th style="width:33.33333333%;text-align:center;"> Appraisee and Appraiser Dialogue Section </th>  
              </tr>
			  </table>         
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                <th style="width:15%;">a) Total score by appraisee </th>
				<th style="width:18.33333333%;;"> <input type="text" id="TTB1" name="TTB1" readonly="" value="<?php echo $arow['TTB1']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%;">b) Total score by appraisee </th>
				<th style="width:18.33333333%;"> <input type="text" id="TTB2" name="TTB2" readonly="" value="<?php echo $arow['TTB2']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
                <th style="width:15%;">c) Total agreed score </th>
				<th style="width:18.33333333%;"> <input type="text" id="TTB3" name="TTB3" readonly="" value="<?php echo $arow['TTB3']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
              </tr>
			  </table>   
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:15%;">Signature</th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGW" name="SIGW" readonly=""
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%; ">Signature </th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGAW" name="SIGAW" readonly=""
			  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
                <th style="width:15%;">Signature of Appraisee </th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGBW" name="SIGBW" readonly=""
			  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
              </tr>
			  </table>       
                       
                  
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:15%;">Date</th>
				<th style="width:18.33333333%;"> <input type="text" id="TTBDATE1" name="TTBDATE1" readonly="" value="<?php echo $arow['TTBDATE1']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%;">Date </th>
				<th style="width:18.33333333%;"> <input type="text" id="TTBDATE2" name="TTBDATE2" readonly="" 
				value="<?php echo $arow['TTBDATE2']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
                <th style="width:15%;">Signature of Appraiser </th>
				<th style="width:18.33333333%;"> <input type="text" id="SIGCW" name="SIGCW" readonly=""
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
              </tr>
			  </table>  
              
              
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                 <th style="width:66.66666666%;">  </th>    
                
                <th style="width:15%;">Date </th>
				<th style="width:18.33333333%;"> <input type="text" id="TTBDATE3" name="TTBDATE3" readonly="" 
				value="<?php echo $arow['TTBDATE3']; ?>"
			  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                
              </tr>
			  </table>   
              <br> 
              
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
        C.1.    1st LEVEL APPRAISER’S OVERALL COMMENTS FOR THE CYCLE INCLUDING DEVELOPMENT NEEDS WHERE APPLICABLE 
   (USE AND ATTACH ADDITIONAL PAPER IF YOUR SECTION C 2 IS TO EXCEED 1 PAGE)
    </th>  </tr> </table>  <br>

   
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr> 
     <th style="width:80%; text-align:left; border:0px;">C1.1 The appraisal was discussed with appraisee on (Date)</th> 
     <td style="width:20%;border:0px;"> <input type="date" name="DIALOGUEDATEC1" readonly = "" value="<?php echo $arow['DIALOGUEDATEC1']; ?>" 
	 style="width:100%; background-color:#fcfcfc;"> </td>  
	 </tr>  </table>
        
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr> 
     <th style="width:80%; text-align:left; border:0px;">
     Did you agree with the appraisee about his/her activities and outputs prior to the commencement of this appraisal period?</th> 
     <td style="width:20%;border:0px;"> 
     <input type="radio" name="DIALOGUEACCEPTANCEC1" value="YES" class="flat-green" disabled >
     <label>YES</label>
     <input type="radio" name="DIALOGUEACCEPTANCEC1" value="NO" class="flat-red" disabled >
     <label>NO</label>
     </td>  
	 </tr>  </table>        
   
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
         C 1.2	If NO please explain.
      </th>  </tr> </table>  

   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="DIALOGUEREASONFORDISAGREE" readonly = "" style="width:100%; background-color:#fcfcfc;" > <?php echo $arow['DIALOGUEREASONFORDISAGREE']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table>    
     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
        C1.3 If YES, indicate the highlights of your discussion with the appraisee.
        </th>  </tr> </table>
        
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="DIALOGUESATISFACTIONIFYES" readonly = "" style="width:100%; background-color:#fcfcfc;" > <?php echo $arow['DIALOGUESATISFACTIONIFYES']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table> 

      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
     C 1.4 Based on the appraisal you have made in C 1(C 3) and D 4 above indicate:
      </th>  </tr> </table><br>
      
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
     C 1.5 Areas of strength that enhanced employee performance:
      </th>  </tr> </table> 
      
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="PERFORMANCEMETRICS" readonly = "" style="width:100%; background-color:#fcfcfc;" > <?php echo $arow['PERFORMANCEMETRICS']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table> 
 
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
     C 1.6 Appraisee’s  areas for improvement;
      </th>  </tr> </table> 
      
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="AREASTHATNEEDIMPROVEMENT" readonly = "" style="width:100%; background-color:#fcfcfc;" > <?php echo $arow['AREASTHATNEEDIMPROVEMENT']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table> 
 
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
    C.1.7 What contribution has the appraisee made beyond the normal requirements of his/her job?
     </th>  </tr> </table> 
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="EXCEPTIONALCONTRIBUTION" readonly = "" style="width:100%; background-color:#fcfcfc;" > <?php echo $arow['EXCEPTIONALCONTRIBUTION']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table>   

    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">
    C.1.9    Indicate the appraisee’s potential for development in his/her career with  NTIHC
     </th>  </tr> </table> 
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="POTENTIALFORDEVELOPMENT" readonly = "" style="width:100%; background-color:#fcfcfc;" ><?php echo $arow['POTENTIALFORDEVELOPMENT']; ?></textarea>  
     </td>  
	 </tr>  </table>
 
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
     C.1.10  Specific actions or improvements that I have agreed with appraisee to increase his/her effectiveness in the next appraisal review period.
      </th>  </tr> </table> 
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="DIALOGUEACTION" readonly = "" style="width:100%; background-color:#fcfcfc;" ><?php echo $arow['DIALOGUEACTION']; ?></textarea>  
     </td>  
	 </tr>  </table>

       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
     C.1.11  What specific actions should management take to improve or motivate the appraisee to perform more efficiently?
      </th>  </tr> </table> 
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="MANAGERIALACTIONFORIMPROVEMENT" readonly = "" style="width:100%; background-color:#fcfcfc;" ><?php echo $arow['MANAGERIALACTIONFORIMPROVEMENT']; ?></textarea>  
     </td>  
	 </tr>  </table>
 
               
              
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                <th style="width:20%;">Appraiser </th>
				<th style="width:18.33333333%;;"> <input type="text" id="APPRAISERNAMEXT" name="APPRAISERNAMEXT" readonly="" 
				value="<?php echo $arow['APPRAISERNAMEXT']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%;">Signature </th>
				<th style="width:18.33333333%;">   </th>  
                
                <th style="width:10%;">Date </th>
				<th style="width:18.33333333%;"> <input type="text" id="APPRAISERDIALOGUEDATEXT" name="APPRAISERDIALOGUEDATEXT" readonly=""
				value="<?php echo $arow['APPRAISERDIALOGUEDATEXT']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
              </tr>
			  </table>    

           <BR>
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
        C.2   APPRAISEE’S OVERALL COMMENTS FOR THE CYCLE (USE  AND ATTACH ADDITIONAL PAPER, IF C 2 IS TO EXCEED 1 PAGE) 
         </th>  </tr> </table>  <br>

           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
         C.2 Facilitating and Constraining Factors
          </th>  </tr> </table>  <br>
          
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
           C.2.1   Briefly state factors that facilitated your performance, i.e., contributed positively towards your performance
            </th>  </tr> </table>
            
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="FACILITATINGFACORS" readonly = "" style="width:100%; background-color:#fcfcfc;" ><?php echo $arow['FACILITATINGFACORS']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table>
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
       C.2.2    Briefly outline major constraints/problems encountered in the execution of assignment and duties. 
       </th>  </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="CONSTRAININGFACORS" readonly = "" style="width:100%; background-color:#fcfcfc;" ><?php echo $arow['CONSTRAININGFACORS']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table>
        
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
           C.2.3    In which areas do you need support?
           </th>  </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="SUPPORTAREAS" readonly = "" style="width:100%; background-color:#fcfcfc;" ><?php echo $arow['SUPPORTAREAS']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table>

       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
       C.2.4    Suggest measures that could be taken at your personal level as well as at Management level to fully utilize your perceived strengths.
       </th>  </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="MEASURESREQUIRED" readonly = "" style="width:100%; background-color:#fcfcfc;" ><?php echo $arow['MEASURESREQUIRED']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table>   

 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
       C.2.5    What contribution have you made to NTIHC beyond the normal requirement of your job? </p>
 </th>  </tr> </table>
 
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="CONTRIBUTIONBEYONDNORMAL" readonly = "" style="width:100%; background-color:#fcfcfc;" ><?php echo $arow['CONTRIBUTIONBEYONDNORMAL']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table>   

       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
      C.2.6    In view of your strengths and potential, what are your expectations from NTIHC
      </th>  </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <textarea name="EXPECTATIONSFROMENTITY" readonly = "" style="width:100%; background-color:#fcfcfc;" > <?php echo $arow['EXPECTATIONSFROMENTITY']; ?>
	 </textarea>  
     </td>  
	 </tr>  </table>
     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
         Appraisee comments after Discussion with the Appraiser;
         </th>  </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr> 
     <th style="width:80%; text-align:left; border:0px;">
     C.2.7    Do you agree/disagree with the appraiser’s evaluation. </th> 
     <td style="width:20%;border:0px;"> 
     <input type="radio" name="EVALUATIONCOURSE" value="DISAGREE"  checked>
     <label>DISAGREE</label>
     <input type="radio" name="EVALUATIONCOURSE" value="AGREE" >
     <label>AGREE</label>
     </td>  
	 </tr>  </table>   

  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
  C.2.8   If you disagree, please explain. 
 </th>  </tr> </table><br>
 
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
  C.2.9   Specific actions or improvements that I have agreed with the appraiser to enhance my effectiveness in the next appraisal review period.
  </th>  </tr> </table> 
  
  
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr> 
     <th style="width:1000%; text-align:left; border:0px;">  
     <input type="text" name="AGREEDACTIONFORIMPROVEMENT1`" placeholder="1" readonly="" value="<?php echo $arow['AGREEDACTIONFORIMPROVEMENT1']; ?>" style="width:100%; text-align:left;background-color:#fcfcfc;" > 
     <input type="text" name="AGREEDACTIONFORIMPROVEMENT2`" placeholder="2" readonly="" value="<?php echo $arow['AGREEDACTIONFORIMPROVEMENT2']; ?>" style="width:100%; text-align:left;background-color:#fcfcfc;" >
     </td>  
	 </tr>  </table>  
       
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                <th style="width:20%;">Appraisee </th>
				<th style="width:18.33333333%;;"> <input type="text" id="APPRAISEENAMEXT" name="APPRAISEENAMEXT" readonly="" value="<?php echo $arow['APPRAISEENAMEXT']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fcfcfc; border: 1px;"> </th> 
                 
                 <th style="width:15%;">Signature </th>
				<th style="width:18.33333333%;">   </th>  
                
                <th style="width:10%;">Date </th>
				<th style="width:18.33333333%;"> <input type="text" id="APPRAISEEACCEPTANCEDATE2" name="APPRAISEEACCEPTANCEDATE2" readonly="" 
				value="<?php echo $arow['APPRAISEEACCEPTANCEDATE2']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
              </tr>
			  </table>    

           <BR>
 
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
        2nd <b style="font-size:11px;"> LEVEL APPRAISER’S OVERALL COMMENTS FOR THE CYCLE 
    </th>  </tr> </table>  

      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                <th style="width:20%;">Appraiseer </th>
				<th style="width:18.33333333%;;"> <input type="text" id="APPRAISERNAME2" name="APPRAISERNAME2" readonly=""
				value="<?php echo $arow['APPRAISERNAME2']; ?>"
				 style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th> 
                 
                 <th style="width:15%;">Signature </th>
				<th style="width:18.33333333%;">   </th>  
                
                <th style="width:10%;">Date </th>
				<th style="width:18.33333333%;"> <input type="text" id="APPRAISERACEPTANCEDATE22" name="APPRAISERACEPTANCEDATE22" readonly=""
				value="<?php echo $arow['APPRAISERACEPTANCEDATE22']; ?>"
				  style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
              </tr>
			  </table>    

           <BR>
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
          D. GENERAL RECOMMENDATIONS; 
          </th>  </tr> </table>  <br>


     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr> 
     <th style="width:50%; text-align:left; border:0px;"> GENERAL RECOMMENDATIONS</th> 
     <td style="width:50%;border:0px;"> JUSTIFY / SPECIFY </td>  
	 </tr>  </table> 
       
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr> 
     <th style="width:50%; text-align:left; border:0px;"> Confirm appointment</th> 
     <td style="width:50%;border:0px;"> 
     <input type="radio" name="CONFIRMATIONOFAPPOINTMENT" value="CONFIRMED" >
     <label>CONFIRM</label>
     <input type="radio" name="CONFIRMATIONOFAPPOINTMENT" value="REJECTED">
     <label>REJECT</label>
     </td>  
	 </tr>  </table> 
    
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr> 
     <th style="width:50%; text-align:left; border:0px;"> Renew Contract </th> 
     <td style="width:50%;border:0px;"> 
     <input type="radio" name="RENEWCONTRACT" value="YES" >
     <label>YES</label>
     <input type="radio" name="RENEWCONTRACT" value="NO">
     <label>NO</label>
     </td>  
	 </tr>  </table> 
     
     <P>Others; Specify:</P>
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr>  
     <td style="width:100%;border:0px;"> 
     <input type="text" name="SPECIFYOTHERACTIONS" readonly="" value="<?php echo $arow['SPECIFYOTHERACTIONS']; ?>" style="width:100%; background-color:#f1f1f1"  > 
     </td>  
	 </tr>  </table> 
     
     <BR>
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                <th style="width:20%;">Appraise: </th> 
                 <th style="width:40%;">Name </th> 
                 <th style="width:20%;">Signature </th>   
                <th style="width:20%;">Date </th> 
              </tr>
			  </table>    
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		      <thead> 
		      <tr>    
				<th style="width:20%;"> 1st level supervisor</th> 
                    
				<th style="width:40%;"> <input type="text" id="FIRSTLEVELSUPNAME" name="FIRSTLEVELSUPNAME" readonly="" value="<?php echo $arow['FIRSTLEVELSUPNAME']; ?>"
				style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                   
                <th style="width:20%;">   </th> 
                 
                <th style="width:20%;"> <input type="text" id="FIRSTLEVELSUPDATE" name="FIRSTLEVELSUPDATE" readonly"" value="<?php echo $arow['FIRSTLEVELSUPDATE']; ?>"
				style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                </tr>
			    </table>   
                
                <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		      <thead> 
		      <tr>    
				<th style="width:20%;"> 2nd level supervisor</th> 
                    
				<th style="width:40%;"> <input type="text" id="SECONDLEVELSUPNAME" name="SECONDLEVELSUPNAME" readonly ="" value="<?php echo $arow['SECONDLEVELSUPNAME']; ?>"
				style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                   
                <th style="width:20%;">   </th> 
                 
                <th style="width:20%;"> <input type="text" id="SECONDLEVELSUPDATE" name="SECONDLEVELSUPDATE" readonly="" value="<?php echo $arow['SECONDLEVELSUPDATE']; ?>"
				style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                </tr>
			    </table>    
              

           <BR>    
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
             E. PERFORMANCE OBJECTIVES AND TARGETS FOR THE NEXT APPRAISAL PERIOD.
              </th>  </tr> </table>  <br>
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">  
 At the beginning of the appraisal period, the appraiser and appraisee shall jointly agree on key activities and outputs. The scores per activity/output should also be agreed on depending on the weight attached to the different activities.
  </th>  </tr> </table>   

 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                 <th style="width:5%;">  </th> 
                 <th style="width:20%;">Performance Objectives : </th> 
                 <th style="width:35%;">Activities </th> 
                 <th style="width:20%;">Targets </th>   
                 <th style="width:20%;">Time frame </th> 
              </tr>
			  </table>    
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		      <thead> 
		      <tr>    
				<th style="width:5%;"> 1</th> 
                <th style="width:20%;"> <input type="text" id="NEXTPERFORMANCEOBJECTIVE1" name="NEXTPERFORMANCEOBJECTIVE1" readonly=""
				 value="<?php echo $arow['NEXTPERFORMANCEOBJECTIVE1']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"></th> 
                    
				<th style="width:35%;"> <input type="text" id="NEXTACTIVITY1" name="NEXTACTIVITY1" readonly=""
				 value="<?php echo $arow['NEXTACTIVITY1']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                   
                <th style="width:20%;"> <input type="text" id="NEXTTARGET1" name="NEXTTARGET1" readonly=""
				 value="<?php echo $arow['NEXTTARGET1']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;">  </th> 
                 
                <th style="width:20%;"> <input type="text" id="NEXTTIMEFRAME1" name="NEXTTIMEFRAME1" readonly=""
				 value="<?php echo $arow['NEXTTIMEFRAME1']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                </tr>
			    </table>   
                
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		      <thead> 
		      <tr>    
				<th style="width:5%;"> 2</th> 
                <th style="width:20%;"> <input type="text" id="NEXTPERFORMANCEOBJECTIVE2" name="NEXTPERFORMANCEOBJECTIVE2" readonly
				value="<?php echo $arow['NEXTPERFORMANCEOBJECTIVE2']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"></th> 
                    
				<th style="width:35%;"> <input type="text" id="NEXTACTIVITY2" name="NEXTACTIVITY2" readonly
				value="<?php echo $arow['NEXTACTIVITY2']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                   
                <th style="width:20%;"> <input type="text" id="NEXTTARGET2" name="NEXTTARGET2" readonly
				value="<?php echo $arow['NEXTTARGET2']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;">  </th> 
                 
                <th style="width:20%;"> <input type="text" id="NEXTTIMEFRAME2" name="NEXTTIMEFRAME2" readonly
				value="<?php echo $arow['NEXTTIMEFRAME2']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                </tr>
			    </table>       
              

           <BR>
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">    
           F.  PERFORMANCE LEVELS AND SCORES: 
            </th>  </tr> </table>  <br>
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">  
            The assessment is out of 100%; Section B1 carries 80 Marks, Section B2- 20 marks. The scores range from 1 to 10; representing 10 – 100%
            </th>  </tr> </table>  
           
           <table class="table table-tabled-tabled" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>    
   <th style="width:;background-color:#fff;">Performance Score </th> 
   <th style="width: ;background-color: #fff; text-align:center;">Performance Level</th> 
    <th style="width: ;background-color:#fff;text-align:center;">Descriptors</th>  
 
      </tr>
      </thead>
      <tbody>
 
    <td>91%-100% </td> 
    <td>Model </td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Consistently exceeds all set targets throughout the performance period.</li>
     <li>All the time accomplishes the tasks before the set timelines.</li>
     <li>The performance outputs are consistently of a higher quality over and above the expected standards </li>
     <li>Continuously seeks out and Introduces new ways of doing business that improves processes, outputs and efficiency.</li>  
     
     </ul> 
    </td>    
                            
    </tr>   
     <td> 81% - 90%</td> 
    <td>Very Good </td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Consistently exceeds most of the set targets by more than 80% throughout the performance period.</li>
     <li>Most of the time accomplishes the targets before the set timelines</li>
     <li>Performance outputs are most of the time of a higher quality over and above the set standard</li>
     <li>Most of the time seeks new ways of doing business and improving processes, output and efficiency. </li>  
     </ul> 
    </td>   
     

 </tr>   
     <td>66% - 80%</td> 
     <td>Good </td>  
    
     <td>  
     <ul style="margin-left: -25px;">
     <li>Consistently meets all the set targets within the set times throughout the performance period and delivers 100% of the set targets.</li>
     <li>Performance Outputs are consistently accurate and of an acceptable quality.</li> 
     </ul> 
     </td>   
     
      </tr>   
     <td>50% - 65%</td> 
    <td>Fair </td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Meets some of the set targets within the performance period</li>
     <li>Performance outputs are accurate and of an acceptable quality.</li>
     <li>Inconsistence in performance</li>
     <li>Outputs frequently fall below acceptable levels</li>
     
     </tr>   
     <td>40%  - 50%</td> 
     <td>Poor </td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Is unable to meet the set targets during the performance period.</li>
     <li>Is unable to meet the set targets during the performance period.</li>
     <li>Performance outputs are consistently low</li>
     <li>Error rates are high</li>
     <li>Shows an indifference to job responsibilities</li>
      
     </ul> 
    </td>   
    
     </tr>   
     <td>0%  - 49%</td> 
     <td>Unacceptable </td>  
    
    <td>  
     <ul style="margin-left: -25px;">
     <li>Staff persistently fails to produce any output, fails to meet any targets and fails to meet minimum behavioral standards of NTIHC</li> 
      
     </ul> 
    </td>   
</tr>  
    </tbody> </table>  


<BR>    
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;">  
           Overall assessment guide
            </th>  </tr> </table>  <br>
           
           <table class="table table-tabled-tabled" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>    
   <th style="width:;background-color:#fff;">Total Score </th> 
   <th style="width: ;background-color: #fff; text-align:left;">Remarks</th>  
 
      </tr>
      </thead>
      <tbody>
 
    <td>91% and above</td> 
    <td>Outstanding  </td>      
                            
    </tr>   
    <td> 81 – 90%</td> 
    <td>Very Good </td>   

     </tr>   
     <td>60% - 80%</td> 
     <td>Good </td>   
     
      </tr>   
     <td>50 – 59%</td> 
    <td>Fair </td>  
     </tr>  
      
     <td>49% and below</td> 
     <td>Unsatisfactory </td>  
      
    </tbody> </table>  
 <BR>

   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> <th style="border:0px;"> 
         G. COMMENTS BY THE PROGRAM DIRECTOR:
  </th>  </tr> </table>  <br>
  
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr> 
     <th style="width:1000%; text-align:left; border:0px;"> I have read the appraisal report for (Appraisee’s Name)</th> 
     <th style="width:1000%; text-align:left; border:0px;">  </td>  
	 </tr>  </table>   
 <P>Comments:</P>
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
	 <thead> 
     <tr> 
     <th style="width:1000%; text-align:left; border:0px;">  
     <textarea name="PDCOMMENT"  readonly="" style="width:100%; background-color:#fcfcfc;" > <?php echo $arow['PDCOMMENT']; ?> </textarea> 
     </td>  
	 </tr>  </table> 
 
 <BR>
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>   
                 <th style="width:40%;">Name </th> 
                 <th style="width:20%;">(PD)Signature </th>   
                <th style="width:20%;">Date </th> 
              </tr>
			  </table>    
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		      <thead> 
		      <tr>     
                    
				<th style="width:40%;"> <input type="text" id="PROGDIRECTORNAME" name="PROGDIRECTORNAME" readonly
				value="<?php echo $arow['PROGDIRECTORNAME']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                   
                <th style="width:20%;background-color:#fcfcfc;">   </th> 
                 
                <th style="width:20%;"> <input type="text" id="PDAPPROVALDATE" name="PDAPPROVALDATE" readonly
				value="<?php echo $arow['PDAPPROVALDATE']; ?>" style="width:100%; font-weight:normal; background-color:#fcfcfc;border: 1px;"> </th>  
                </tr>
			    </table>    

        
         <br> <br>  
           
              <br>  <br> 
              
              </div> 
              <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" />
                <div id="status"></div>
              </div>
              <div id="submitted"></div>
            </form>
             
                     
         
            <br>
                
      
                      
                      
<script src="../hrm_home/js/jquery.min.js"></script>
<script src="../hrm_home/js/jquery.ui.custom.js"></script>
<script src="../hrm_home/js/bootstrap.min.js"></script>
<script src="../hrm_home/js/jquery.validate.js"></script>
<script src="../hrm_home/js/jquery.wizard.js"></script>
<script src="../hrm_home/js/matrix.js"></script>
<script src="../hrm_home/js/matrix.wizard.js"></script> 
                  
                    
                      
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="infocts" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">   </h4>
                                        </div>
                                        <div class="modal-body"> 
              
             <div class="table-responsive mailbox-messages"> 
                     
                 
                 </div>    
                     
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;"> 
                                        <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                                  
                       
                      
                      
                      
          </div>
          <!-- /.box -->
        </div>
          
        <!-- /.col -->
      </div>
       
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
       
    </div> 
    
      
 
<script src="../assets/lib/moment/moment.min.js"></script>
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
 <script type="text/javascript" src="../../assets/js/gauge.js"></script>
</body>
</html>  
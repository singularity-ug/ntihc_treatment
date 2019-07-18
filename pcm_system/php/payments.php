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
$stss ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>pcms</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="../plugins/ionslider/ion.rangeSlider.css">
  <!-- ion slider Nice -->
  <link rel="stylesheet" href="../plugins/ionslider/ion.rangeSlider.skinNice.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="../plugins/bootstrap-slider/slider.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

   <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css"> 
  
  
 <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css"> 
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons --> 
  
  
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
     $('#secondq').DataTable( {
	  "iDisplayLength": 10,
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
     $('#exsuppex').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
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
  $("#resxx").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#METERNO"+num).val(data[2]);
  $("#ACCOUNTNO").val(data[2]);
  $("#PROPERTY").val(data[3]);
  $("#PREVIOUSUNITS").val(data[4]); 
  $("#PREVIOUSPAYMENT").val(data[5]); 
  
} 
function domem(ths){

  var bdem   = ths.value;
  var idxxem = ths.id;
  if (bdem==='') {   $("#resxx").html("");  }

  else{
  var dataString = "bdem="+bdem+"&id2="+idxxem;
  $.ajax({
  type: "POST",
  url: "serch_wt.php",
  data: dataString,
  cache: false,
  success: function(result){ 
    $("#resxx").html(result); 
}
  });
}
} 
</script>

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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
  require('config.php');
  ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="font-size:17px;"><b>PCM</b> &nbsp;Application</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

 <!-- Navbar Right Menu -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav"> 
            <li><a href="dashboard.php" class="" > Home<span class="sr-only">(current)</span></a></li>  
             <li><a href="../index.php"> <span class="glyphicon glyphicon-log-in"></span> </li></a>
          </ul></div>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span> </a>
            <ul class="dropdown-menu">
              
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 
                  <!-- end message --> 
                </ul>
              </li> 
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
                  </a>
            <ul class="dropdown-menu">
               
                </ul>
              </li> 
            </ul>
          </li> 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                
              </li>
              <!-- Menu Body -->
              
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image"> 
        </div>
        <div class="pull-left info">
           
        </div>
      </div>
      <!-- search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu"> 
          <li>
          <a href="dashboard.php">
            <i class="fa fa-th"></i> <span>System user dashmoard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">pcm</small>
            </span>
          </a>
        </li>
         
           <li class="treeview">
          <a href="#">
            <img src="../database icons/59449894425chart-512.png" width="50" height="50" class="img-circle"> 
            <span>Reports module</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          
              
            <li><a href="payments_rpt.php"><i class="fa fa-circle-o"></i> Payment transactions</a></li>
            <li><a href="payments_rpt.php"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
          </ul>
        </li>
         
         
         <li>
          <a href=<button class="" data-toggle="modal"  data-target="#payex"></button> 
            <img src="../database icons/budget.png" width="50" height="50" class="img-circle">
            <span>Payments module </span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="cug.php">
            <img src="../database icons/admin.jpg" width="50" height="50" class="img-circle">
            <span>CUG management</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="contracts.php">
            <img src="../database icons/employee.jpg" width="50" height="50" class="img-circle">
            <span>Contracts management</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="property_mgt.php">
            <img src="../database icons/admin2.jpg" width="50" height="50" class="img-circle">
            <span>Property management</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
        
        
          <li>
          <a href="budgeting.php">
            <img src="../database icons/microfinance-product-management-system.jpg" width="50" height="50" class="img-circle">
            <span>Budget management</span>
            <span class="pull-right-container">
              <small class=" "></small>
            </span>
          </a>
        </li> 
        
          
         
             <canvas id="canvas" width="300" height="300" style="height: 100%; width:100%;">
			</canvas> 
            
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <span class="glyphicon glyphicon-user" style="font-size:16px;"><b>Welcome:</b></span>
         <B style="font-size:11px;"> &nbsp <?php echo $nameofuser; ?>  </B>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
            
          <div class="box box-primary" style="border:0px;"> 
               <a href="payments.php" class="btn btn-primary btn-block margin-bottom"> Water payments</a> 

              <div class="box-tools pull-right">
                <div class="has-feedback"> 
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
             <!-- /.box-header -->
             <div class="box-body no-padding">
             <div class="mailbox-controls">
             <!-- Check all button -->

              </div>
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">

                  <!-- Info boxes --> 
                 
<?php
  $id ='';  
  $PAYMENTDATE = ''; 
  $PMTSERIALID  = '';
  $PAYMENTTYPE = '';
  $USERINITIALS = '';   
  $TIMESTAMP='';
  $QUARTERACCOUNTABLE='';   
  $USERTITLE = ''; 
  $USERINO='';  
  $UTILITYTYPE = '';  
  $PLANDETAILS = ''; 
  $CODE  = '';
  $FINANCIALPERIOD = '';
  $FIRSTQTR = '';   
  $SECONDQTR='';
  $THIRDQTR='';   
  $FOURTHQTR = ''; 
  $BUDGETAMOUNT='';  
  $BUDGETSTATUS = ''; 
  	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM paymentorders WHERE TIMESTAMP >='$date' ORDER BY id DESC LIMIT 1";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $PAYMENTDATE = $row['PAYMENTDATE']; 
     $PMTSERIALID = $row['PMTSERIALID'];
     $PAYMENTTYPE  = $row['PAYMENTTYPE'];
     $USERINITIALS = $row['USERINITIALS'];  
	 $QUARTERACCOUNTABLE=$row['QUARTERACCOUNTABLE'];  
     $USERTITLE   = $row['USERTITLE']; 
     $USERINO=$row['USERINO'];     
     $UTILITYTYPE   = $row['UTILITYTYPE'];  
	 $id   = $row['id'];  
	 $PLANDETAILS = $row['PLANDETAILS'];
     $CODE = $row['CODE']; 
     $FINANCIALPERIOD = $row['FINANCIALPERIOD'];
     $FIRSTQTR  = $row['FIRSTQTR'];
     $SECONDQTR = $row['SECONDQTR'];  
	 $THIRDQTR=$row['THIRDQTR'];  
     $FOURTHQTR   = $row['FOURTHQTR']; 
     $BUDGETAMOUNT=$row['BUDGETAMOUNT'];     
     $BUDGETSTATUS   = $row['BUDGETSTATUS'];   
      } 
  ?>
                     
               
            <form class="form-horizontal" action="pmt_processor_wt.php" method="POST" style="height:auto; font-weight:normal;">  
    
            <div class="col-sm-6">
            
            <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:20%; text-align:left;border:0px;">Budget sub item </th>
                <td style="width:80%;border:0px;"><input type="text"id="PLANDETAILS"  name="PLANDETAILS"  value="<?php  echo $PLANDETAILS; ?>" readonly="readonly" 
				style="width:100%;  background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
            
            
               <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:20%; text-align:left;border:0px;">Budget code </th>
                <td style="width:30%;border:0px;"><input type="text"id="CODE" name="CODE"  value="<?php  echo $CODE; ?>" readonly="readonly"     
				style="width:100%; background-color:#ECF0F5;height: 21px;"></td> 
                  
               <th style="width:20%; text-align:left;border:0px;">Financial year </th>
                <td style="width:30%;border:0px;"><input type="text"id="FINANCIALPERIOD" name="FINANCIALPERIOD"  value="<?php  echo $FINANCIALPERIOD; ?>" readonly="readonly"            
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                  
			 </tr>             
            </table>
            
            <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                <th style="width:20%; text-align:left;border:0px;"> Bal on 1st QTR</th>
                <td style="width:30%;border:0px;"><input type="text"id="FIRSTQTROB" name="FIRSTQTROB"  value="<?php  echo $FIRSTQTR; ?>" readonly="readonly"        
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                  
               
			    <th style="width:20%; text-align:left;border:0px;">Bal on 2nd QTR </th>
                <td style="width:30%;border:0px;"><input type="text"id="SECONDQTROB" name="SECONDQTROB"  value="<?php  echo $SECONDQTR; ?>" readonly="readonly"       
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                       
			 </tr>             
            </table>
            
                  
                  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               
                <th style="width:20%; text-align:left;border:0px;">Bal on 3rd QTR </th>
                <td style="width:30%;border:0px;"><input type="text"id="THIRDQTROB" name="THIRDQTROB"  value="<?php  echo $THIRDQTR; ?>" readonly="readonly"       
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                  
               
			    <th style="width:20%; text-align:left;border:0px;">Bal on 4th QTR</th>
                <td style="width:30%;border:0px;"><input type="text"id="FOUTHQTROB" name="FOUTHQTROB"  value="<?php  echo $FOURTHQTR; ?>" readonly="readonly"       
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                  
			 </tr>             
            </table>
            
             <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
			    <th style="width:20%; text-align:left;border:0px;">Total balance</th>
                <td style="width:30%;border:0px;">   <input type="text" name="TOTALROB" id="TOTALROB"  value="<?php  echo $BUDGETAMOUNT; ?>" readonly="readonly" 
               style="width:100%;  background-color:#ECF0F5;height: 21px;">
               
               
               </td> 
               
               
                  <th style="width:20%; text-align:left;border:0px;">Budget status </th>
                <td style="width:30%;border:0px;">   <input type="text" name="BUDGETSTATUS" id="BUDGETSTATUS"   value="<?php  echo $BUDGETSTATUS; ?>" readonly="readonly" 
               style="width:100%;background-color:#ECF0F5;height: 21px;"></td> 
               
                <input type="hidden" name="UTILITYTYPE" id="UTILITYTYPE"   value="<?php  echo $UTILITYTYPE; ?>" readonly="readonly" >
                
                 <input type="hidden" name="USERINITIALS" id="USERINITIALS"   value="<?php  echo $nameofuser; ?>" readonly="readonly" >
                 <input type="hidden" name="USERTITLE" id="USERTITLE"   value="<?php  echo $desc; ?>" readonly="readonly" >
                 <input type="hidden" name="USERINO" id="USERINO"   value="<?php  echo $USERINO; ?>" readonly="readonly" >
                 <input type="hidden" name="PAYEE" id="PAYEE"   value="NWSC" readonly="readonly" >
                
			 </tr>             
            </table>
            <div id="resxx"></div>
            </div>
            
            
                <div class="col-sm-6"> 
                 <table class="table-responsive" style="margin-top:-10px;">
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:20%; text-align:left;border:0px;">Meter number </th>
                <td style="width:30%;border:0px;"><input type="text"id="METERNO" onKeyUp="domem(this)"  name="METERNO" required="required"      
				style="width:100%;  background-color:#FFF;height: 21px;"></td> 
                  
               
			    <th style="width:20%; text-align:left;border:0px;">Account number</th>
                <td style="width:30%;border:0px;">   <input type="text" name="ACCOUNTNO" id="ACCOUNTNO"  readonly="readonly"
               style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
			 </tr>             
            </table>
             
               <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:20%; text-align:left;border:0px;">Property </th>
                <td style="width:80%;border:0px;"><input type="text"id="PROPERTY" name="PROPERTY" required="required" 
				style="width:100%; background-color:#ECF0F5;height: 21px;"></td>  
			 </tr>             
            </table>
            
            
               <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                <th style="width:20%; text-align:left;border:0px;">Payment quater </th>
                <td style="width:30%;border:0px;"><select id="QUARTERACCOUNTABLE" name="QUARTERACCOUNTABLE"  value="<?php  echo $QUARTERACCOUNTABLE; ?>"  required="required"     
				style="width:100%; background-color:#FFF;height: 21px;">
                <option value="<?php  echo $QUARTERACCOUNTABLE; ?>" ><?php  echo $QUARTERACCOUNTABLE; ?></option>
                <option>1ST QUARTER</option>
                <option>2ND QUARTER</option>
                <option>3RD QUARTER</option>
                <option>4TH QUARTER</option> 
                </select>
                </td> 
                  
               
			    <th style="width:20%; text-align:left;border:0px;">Payment No.</th>
                <td style="width:30%;border:0px;">   <input type="text" name="PMTNO" id="PMTNO"  value="<?php  echo $id; ?>"  required="required"
               style="width:100%; text-align:right;background-color:#ECF0F5;height:21px; text-align:center;"></td> 
			 </tr>             
            </table>
            
             <table class="table-responsive" style="margin-top:-20px;">  
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:20%; text-align:left;border:0px;">Created date</th>
                <td style="width:30%;border:0px;"> <input type="text"  id="PAYMENTDATE" name="PAYMENTDATE" value="<?php  echo $PAYMENTDATE; ?>"  required="required"      
				style="width:100%; background-color:#FFF;height: 21px;"> </td> 
                  
               
			    <th style="width:20%; text-align:left;border:0px;">Serial No.</th>
                <td style="width:30%;border:0px;">   <input type="text" name="PMTSERIALID" id="PMTSERIALID" value="<?php  echo $PMTSERIALID; ?>"  required="required" 
               style="width:100%; text-align:right;background-color:#ECF0F5;height: 21px;text-align:center;"></td> 
			 </tr>             
            </table>
            
            
            </div>
            
            <p></p>
   
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:0px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5; width:10%;">From date</th>
   <th style="border:2px solid #ecf0f5;width:10%;">To date</th>
   <th style="border:2px solid #ecf0f5;width:8%;">Previous units</th>
   <th style="border:2px solid #ecf0f5;width:8%;">Current units</th>
   <th style="border:2px solid #ecf0f5;width:8%;">Units used</th>
   <th style="border:2px solid #ecf0f5;width:8%;">Cost per unit</th> 
    <th style="border:2px solid #ecf0f5;width:7%;">Service fees charged</th>
   <th style="border:2px solid #ecf0f5;width:5%;">Vat 18%</th>
   <th style="border:2px solid #ecf0f5;width:8%;">Billed amount</th>
   <th style="border:2px solid #ecf0f5;width:8%;">Previous payment</th>
   <th style="border:2px solid #ecf0f5;width:8%;">Arrears</th>
   <th style="border:2px solid #ecf0f5;width:8%;">Amount payable</th>
   <th style="border:2px solid #d70000;width:4%;">Action</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="border:2px solid #ecf0f5;">
    <input type="date" name="FROMDATE" id="FROMDATE" required="required"
   style="width:100%; text-align:left;background-color:#fff; height:20px;">
   </td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="date" name="TODATE " id="TODATE" value="<?php echo date('y-m-d'); ?>" required="required" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
							
     <td style="border:2px solid #ecf0f5;">
    <input type="numeric" name="PREVIOUSUNITS" id="PREVIOUSUNITS"    required="required"
   style="width:100%; text-align:left;background-color:#ecf0f5; height:20px; text-align:center;">
   </td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="numeric" name="CURRENTUNITS " id="CURRENTUNITS"   
    style="width:100%; text-align:left;background-color:#fff;"></td> 
							                       
    <td style="border:2px solid #ecf0f5;">
    <input type="numeric" name="UNITSUSED" id="UNITSUSED"  required="required"
   style="width:100%; text-align:left;background-color:#fff; height:20px;">
   </td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="numeric" name="COSTPERUNIT " id="COSTPERUNIT"  
    style="width:100%; text-align:left;background-color:#fff;"></td> 
			 
     <td style="border:2px solid #ecf0f5;">
    <input type="numeric" name="SERVICEFEES" id="SERVICEFEES"  required="required"
   style="width:100%; text-align:left;background-color:#fff; height:20px;">
   </td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="numeric" name="VAT" id="VAT" value="18" required="required"
    style="width:100%; text-align:left;background-color:#FFF;">
    
    </td> 
							
     <td style="border:2px solid #ecf0f5;">
    <input type="numeric" name="BILLEDAMOUNT" id="BILLEDAMOUNT"   required="required"
   style="width:100%; text-align:left;background-color:#fff; height:20px;">
   </td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="text" name="PREVIOUSPAYMENT" id="PREVIOUSPAYMENT"  
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							                       
    <td style="border:2px solid #ecf0f5;">
    <input type="text" name="ARREARS" id="ARREARS"   required="required"
   style="width:100%; text-align:left;background-color:#fff; height:20px;">
   </td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="numeric" name="AMOUNTPAYABLE" id="AMOUNTPAYABLE"    
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
    
    <td style="border:2px solid #ecf0f5;"><input type="submit" name="button" id="button" value="Add" class="btn btn-success" /> </td> 
				       				                        
   </tr>
  <tr>
 </tbody>
 </table> 
     </form> 
        
     <br>
     
             
           <div class=""  id="viewrecords" >  </div>
                     <script> 
               function viewrecords(jose){
     		   var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'print_pmt_no.php?q='+odno,
                            success : function(data){
                                     $('#viewrecords').html(data);
     								$("#provoo").modal("show");
                                      }
                    });
                    } 
               </script>        
    
      <table id="exsuppex" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;"> 
                     <thead>
                     <tr>
                      
                     <th>P/NO.</th> 
                     <th>SERIAL/NO.</th>
                     <th>CREATED DATE</th>  
                     <th>PAYMENT QTR</th> 
                     <th>PAYMENT SUM</th>       
			         <th style="text-align:center;">ACTION</th> 
                      
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configpcmsdb.php");
             $date = date("Y-m-d").' 00:00:00';
             $result = mysqli_query($mysqli, "SELECT QUARTERACCOUNTABLE, PMTNO, PMTSERIALID, PAYMENTDATE, SUM(AMOUNTPAYABLE) FROM payments  
			 GROUP BY PMTNO ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $nakz = $res['QUARTERACCOUNTABLE']."***".$res['PMTNO'];
              echo "<tr>"; 
			  echo "<td>".$res['PMTNO']."</td>"; 
			  echo "<td>".$res['PMTSERIALID']."</td>"; 
			  echo "<td>".$res['PAYMENTDATE']."</td>";   
			  echo "<td>".$res['QUARTERACCOUNTABLE']."</td>"; 
			  echo "<td>".$res['SUM(AMOUNTPAYABLE)']."</td>";
			  echo '<td>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
		      <a id="101__'.$nakz.'" href="javascript:void(0)" onclick="viewrecords(this.id)" data-toggle="tooltip" title="View" 
		      <span class="glyphicon glyphicon-ok"> </span></a>   </td>';  
			  
             }
              ?>
             </tbody>
             </table>	         
               
                 
             </div></div></div></div></div>
              
              
               </div></div>
              
                 <!-- /. ROW  -->  
                 
                 
                 
                 
                 <div class="modal" id="addplan" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> Add new details</h4>
                                        </div>
                                        <div class="modal-body">

 
 <form id="form1" class="form-horizontal" action="proc_processprocplan.php" method="POST" style="height:auto; font-weight:normal;">

           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:12px; text-align:center;"> BUDGETING</p>
           
				<table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
   <th>OBJECTIVE</th>
   <th style="text-align:center;">CODE</th>
   <th style="text-align:center;">ITEM DESCRIPTION</th>
   <th style="text-align:center;">FINANCIAL PERIOD</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:20%;"><input type="text" name="OBJECTIVE" id="OBJECTIVE"   required="required" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:20%;"><input type="text" name="CODE" id="CODE"   required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
                
   <td style="width:35%;"><input type="text" name="ITEMDESCRIPTION" id="ITEMDESCRIPTION"   required="required" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:25%;"> <select name="FINANCIALPERIOD" id="FINANCIALPERIOD"  required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;">
                <option></option>
                <option>FY/2017-2018</option>
                <option>FY/2018-2019</option>
                <option>FY/2019-2020</option>
                </select></td> 
                
                 
   </tr>
  <tr>
 </tbody>
 </table>
      <input type="hidden" name="DATECREATED" id="DATECREATED" value="">    
              
    <table class="table table-table-bordered" id="mytable1" style="background-color: transparent; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:45%;"> DETAILS </th>
	      <th style="width:10%;"> 1ST QUARTER  </th>
		  <th style="width:10%;"> 2ND QUARTER  </th>
		  <th style="width:10%;"> 3RD QUARTER  </th>
          <th style="width:10%;"> 4TH QUARTER </th>  
          <th style="width:15%;"> AMOUNT </th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>      
     <input type="button" onClick="addRow16('mytable1')" value="Add details" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
             
  <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:85%; text-align:right; border:0px;"> TOTAL</th>
                <td style="width:15%; text-align:right; border:0px;"> 
                <input type="text" name="CODEDAMOUNT" id="CODEDAMOUNT"    
                style="width:100%; text-align:left;background-color:#ecf0f5;">
    </td>  
			  
			 </tr>             
            </table>

            <input type="hidden" name="BUDGETSTATUS" id="BUDGETSTATUS" value="RUNNING" >    
            
            <center> <input type="submit" name="button" id="button" value="Save"/>
            
            <button class="btn btn-default" data-dismiss="modal">Close</button></center>
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer"> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>
                     


  <div class="modal" id="budgetraws" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
  <div class="box box-primary" style="border:0px;"> 
               <a href="budgeting.php" class="btn btn-primary btn-block margin-bottom">View budget details</a>  
              <div class="box-tools pull-right"></div>
           
                   </script>     
               
                   <div class=""  id="gameofthrones" >  </div>
               <script> 
              function gameofthrones(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'proc_procplan_get.php?q='+odno,
                            success : function(data){
                                     $('#gameofthrones').html(data);
     								$("#fucky").modal("show");
                                      }
                    });
                    } 
               </script> 
			             
                   <table id="exsuppex" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM DESCRIPTION</th>
                <th>FINANCIAL PERIOD</th>
                <th>PROCUREMENT DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>AMOUNT</th> 
                <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM.DESCRIPTION</th>
                <th>FINANCIAL.PERIOD</th>
                <th>PROCUREMENT.DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>AMOUNT</th> 
                <th>ACTION</th>
            </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procplanning ORDER BY OBJECTIVE DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsvv = $res['ITEMDESCRIPTION']."***".$res['id']."***".$res['FINANCIALPERIOD'];
              echo "<tr>";
			   echo "<td>".$res['id']."</td>";
               echo "<td>".$res['OBJECTIVE']."</td>";
               echo "<td>".$res['CODE']."</td>"; 
			   echo "<td>".$res['ITEMDESCRIPTION']."</td>"; 
			   echo "<td>".$res['FINANCIALPERIOD']."</td>"; 
			   echo "<td>".$res['PLANDETAILS']."</td>";
               echo "<td>".$res['FIRSTQTR']."</td>";
               echo "<td>".$res['SECONDQTR']."</td>"; 
			   echo "<td>".$res['THIRDQTR']."</td>"; 
			   echo "<td>".$res['FOURTHQTR']."</td>"; 
			   echo "<td>".$res['BUDGETAMOUNT']."</td>";  
               echo '<td> 
			  &nbsp;&nbsp;&nbsp;
			  <a id="322__'.$dtsvv.'" href="javascript:void(0)" onclick="gameofthrones(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-check"> </span></a> 
              </td>'; 
             }
              ?>
             </tbody>
             </table>   
           
           
           
           
           
           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer"> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>

                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
               
 <!-- /. PAGE WRAPPER  -->
 
       <!-- /.content-wrapper -->
  <footer class="main-footerx" style="background-color: #000; color:#fff;text-align:center;">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

  
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
	<script type="text/javascript" src=" ../assets/js/gauge.js"></script> 
    
   
   <script> 
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[6].childNodes[0].value);
		   }
		   document.getElementById("CODEDAMOUNT").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';			 

	 var  s3cc = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 
	 var  ssx = '<input type="numeric" name="fqtr[]" id="fqtr'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
			 

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
								  '<td>'+ssx+' </td>'+
				                  '<td>'+s7gg+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId); 
  }

  function deleteRow16(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="dnx"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqx"+x;
          table.rows[x].cells[3].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[4].childNodes[0].id="pdx"+x; 
		  table.rows[x].cells[5].childNodes[0].id="fqtr"+x;
		  table.rows[x].cells[6].childNodes[0].id="qtyx"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
    
</body>
</html> 


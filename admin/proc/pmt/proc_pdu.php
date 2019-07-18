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
  <title>proc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../assets/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../../assets/notifier.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">

  <script src="../../datatable/js/jquery-1.12.3.js"></script>
  <script src="../../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../../datatable/js/bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../../datatable/js/buttons.flash.min.js"></script>
  <script src="../../datatable/js/jszip.min.js"></script>
  <script src="../../datatable/js/pdfmake.min.js"></script>
  <script src="../../datatable/js/vfs_fonts.js"></script>
  <script src="../../datatable/js/buttons.html5.min.js"></script>
  <script src="../../datatable/js/buttons.print.min.js"></script>
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
     $('#doomed').DataTable( {
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
     $('#exsupdex').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' SUPPLIERS LIST'
		},
		{extend :'pdf',
		 title:' SUPPLIERS LIST'
		},
		{extend :'print',
		 title:'  SUPPLIERS LIST'
		}
        ]
    } );
  } );
  </script>


<script>
  $(document).ready(function() {
     $('#exconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  CONTACTS'
		},
		{extend :'pdf',
		 title:'CONTACTS '
		},
		{extend :'print',
		 title:'  CONTACTS'
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
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SERVICEPROVIDER"+num).val(data[2]);
  $("#SVPADDRESS").val(data[2]);
  $("#SVPLOCATION").val(data[3]);       
      
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "search_supplier.php",
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
 <?php
  require('../config.php');
  ?>
    <!-- Logo -->
    <a href="../../sys_dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Dashboard</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../../proc_pdu.php" class="" >Home<span class="sr-only">(current)</span></a></li> 

          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
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
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
       <span class="glyphicon glyphicon-user" style="color:#000;"> </span>   
          <a href="javascript:void(0)">  <b style="font-size:11px;"><?php echo $nameofuser; ?> </b>  </a>
      
        <div class="pull-left image"> 
        </div> 
        <div class="pull-left info">
           
        </div>
      </div>
      <!-- search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;">MAIN NAVIGATION</li>
        
        
          <li>
          <a href="../procurement_user.php">
            <i class="fa fa-th"></i> <span style=" color:#000;">User department (s)</span>
            <span class="pull-right-container">
              <small class=" "></small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="../budget_desk.php">
            <i class="fa fa-th"></i> <span style="  color:#000;">Confirmations of purchases</span>
            <span class="pull-right-container">
              <small class="  ">  </small>
            </span>
          </a>
        </li>
         
          <li>
          <a href="../proc_review.php">
            <i class="fa fa-laptop"></i> <span style=" color:#000;">Procurement reviews</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="../proc_approval.php">
            <i class="fa fa-laptop"></i> <span style=" color:#000;">Procurement approvals</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
          <li>
           <a href="../../procurement_tracker.php">
            <i class="fa fa-th"></i><span style=" color:#000;">Procurement tracker</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
         
          <li>
         <a href="proc_purchase_orders.php">
            <i class="fa fa-circle-o"></i> <span style="color:#000;">Procurement orders</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
        <li> 
         <a href="suppliers _mgt.php">
            <i class="fa fa-circle-o"></i> <span style=" color:#000;">Suppliers management</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="cotracts_project_mgt.php">
            <i class="fa fa-circle-o"></i> <span style=" color:#000;">Contracts management</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="budgeting.php">
            <i class="fa fa-circle-o"></i> <span style="color:#000;">Procurement planning</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="pmt_viewall.php">
            <i class="fa fa-circle-o"></i> <span style="  color:#000;">Payments</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
         <li class="treeview">
         <a href=../../hr_mgt/<button class="" data-toggle="modal"  data-target="#"></button>
            <i class="fa fa-share"></i> <span style="color:#000;">Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right">Admin </i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="payments_rpt.php?d1=0&d2=0"> <i class="fa fa-circle-o">Daily payments report</i> </a></li>
           <li><a href="running_plan_report.php?d1=0&d2=0"> <i class="fa fa-circle-o">Running plan report</i> </a></li>
          </ul>
        </li>  
       
       
         <canvas id="canvas" width="500" height="500" style="height: 100%; width:100%;">
			</canvas> 
            
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#fcf9f9;">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
     <font style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 5px #000; color:#fff;"><center>Procurement Module	</center></font>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
                <div class="col-sm-8" style="margin-top: -41px;">
                
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Admin</a></li>
              <li><a href="#tab_2-2" data-toggle="tab" style=" font: bold 15px 'Aleo';
text-shadow: 1px 1px 28px #fcf9f9; color: #d14242; text-align: left;">Users</a></li> 
             
              <li class="pull-left header"><i class="fa fa-th"></i> Mode navigation</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
               
                 <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="proc_pdu.php">
                    <i class="fa fa-clipboard fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> Incoming orders 
                      &nbsp; 
                      (<B style="color:green;"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn  WHERE  CORACTION ='AUTHORISED'  
                                              AND  AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'WAITING'  
                                   GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC")) {   
								   
								                
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </B>)</h4>
                      </a>
                      </div> 
                  </div> 
                  
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                         <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#supdex">
                    <i class="fa fa-clipboard fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> Approved suppliers list </h4>
                      </a>
                      </div> 
                  </div> 
                  
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                         <a href="lpo_daily.php?d1=0&d2=0">
                    <i class="fa fa-clipboard fa-5x" style="color:#00a65a;"></i>
                      <h4 style="font-size:14px;">Purchase order reports</h4>
                      </a>
                      </div> 
                  </div> 
                    
                   
                  
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                         <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#contx">
                    <i class="fa fa-clipboard fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> Contracts details </h4>
                      </a>
                      </div> 
                  </div>  
                  
                  
                  
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"> 
                      <div class="div-square">
                          <a href="running_proc_plan_report.php?d1=0&d2=0">
                    <i class="fa fa-circle-o-notch fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;">procurement plan </h4>
                      </a>
                      </div> 
                  </div> 
                  
                  
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                         <a href="running_plan_report.php?d1=0&d2=0">
                    <i class="fa fa-clipboard fa-5x" style="color:#f56954;"></i>
                      <h4 style="font-size:14px;"> Reconciliated plan  </h4>
                      </a>
                      </div> 
                  </div> 
                   
              </div> 
              
              </div>
              
              <div class="tab-pane" id="tab_2-2">
              
               <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="../procurement_user.php">
                    <i class="fa fa-circle-o-notch fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> My.rejected orders &nbsp; 
                      <B> <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='REJECTED' AND RFPFILENUMBER ='$pf'
                                   GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </B></h4>
                      </a>
                      </div>
                       
                      
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="../budget_desk.php">
  <i class="fa fa-circle-o-notch fa-5x" style="color:#00a65a;"></i>
                      <h4 style="font-size:14px;">     <B> <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='PENDING' 
AND SENDTO ='$rm' GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </B>&nbsp;Pending confirmations 
                     </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="../budget_desk.php">
  <i class="fa fa-wechat fa-5x" style="color:#f56954;"></i>
                      <h4 style="font-size:14px;">Budget.desk 
                      (Waiting    &nbsp;   <B> <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND FORWARDTO ='$rm' AND CONFSTATUS ='WAITING'  GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
				 </B>)
                   </h4>
                      </a>
                      </div>
                     </div>
                      
                       
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                         <a href="../proc_approval.php">
                    <i class="fa fa-comments-o fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;">My.approvals 
                      (pending 
                      &nbsp;   <B>	<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFEXTENSION ='$rm' AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'WAITING' GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
						</B></h4>
                      </a>
                      </div>
                        
                  </div> 
                   
                      
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                         <a href="../proc_review.php">
  <i class="fa fa-clipboard fa-5x" style="color:#00a65a;"></i>
                      <h4 style="font-size:14px;">My.reviews
                       (approved  &nbsp;   <B><?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFEXTENSION ='$rm' AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'WAITING' GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </B> 
                    </h4>
                      </a>
                      </div>  
                  </div>
                  
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                         <a href=../../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button>
  <i class="fa fa-circle-o-notch fa-5x" style="color:#f56954;"></i>
                      <h4 style="font-size:14px;">Recieved  
                      (PDU &nbsp; <b><?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFEXTENSION ='$rm' AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'WAITING' GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </b>) </h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div> 
                 <!-- /. ROW  --> 
              </div>
              
              <!-- /.tab-pane -->
            </div> 
            
        </div>  
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
      <!-- START PROGRESS BARS -->      
      
        </div>  
        <div class="col-sm-3">         
                 
            
                  
                    
          </div>
        <!-- /.col -->
      </div></div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
              
              <div class="col-sm-5">
               <p  style=" font:bold 18px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:left;"> Approved procurement requisitions due for allocation  </p>
               <table id="example4" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>DATE</th>
                     <th>ORDER.NO.</th> 
                     <th>ACTION</th>
			         <th>PRINT</th>
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED'  
                                              AND  AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'WAITING'
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['REQUISITIONID']."***".$res['PROGRAMME']."***".$res['VOTE_HEADNO']."***".$res['SUBPROGRAMME']."***".$res['ITEM']
             ."***".$res['BALANCEREMAINING']."***".$res['JOBNUMBER']."***".$res['CORCOMMENT'];
              echo "<tr>";
              echo "<td>".$res['CORDATE']."</td>";
               echo "<td>".$res['JOBNUMBER']."</td>";  
              echo '<td> 
              <a id="2__'.$dts.'" href="javascript:void(0)" onclick="getprocform(this.id)" data-toggle="tooltip" title="View requisition"
              <span class="glyphicon glyphicon-edit"> </span></a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a id="3__'.$dts.'" href="javascript:void(0)" onclick="getdetailsf(this.id)" data-toggle="tooltip" title="Allocate an order"
              <span class="glyphicon glyphicon-ok"> </span></a>
              </td>';
			  echo "<td><a href=\"print_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">print</a>    </td>";
             }
              ?>
             </tbody>
             </table>
                 
                  
              
                   
                 
        <p  style=" font:bold 18px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:left;"> My allocated procurement orders &nbsp;(  <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn  WHERE  CORACTION ='AUTHORISED' AND OFFICERACCOUNT ='$rm' 
                                              AND  AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'STARTED' 
                                   GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC")) {   
								   
								                
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </B>)</h4>
    </p>
             
          <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                     <tr>
                     <th>DATE</th>
                     <th>ORDER NO.</th> 
                     <th>ACTION</th>
			         <th> </th>
                  </tr>
                  </tfoot> 
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND OFFICERACCOUNT ='$rm' 
                                              AND  AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'STARTED'
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['REQUISITIONID']."***".$res['PROGRAMME']."***".$res['VOTE_HEADNO']."***".$res['SUBPROGRAMME']."***".$res['ITEM']
             ."***".$res['BALANCEREMAINING']."***".$res['JOBNUMBER']."***".$res['CORCOMMENT'];
              echo "<tr>";
              echo "<td>".$res['CORDATE']."</td>";
               echo "<td>".$res['JOBNUMBER']."</td>"; 
              echo '<td>   
 			  <a id="2011__'.$dts.'" href="javascript:void(0)" onclick="getgen(this.id)" data-toggle="tooltip" title="View requisition"
              <span class="glyphicon glyphicon-ok"> </span></a> 
			  &nbsp;&nbsp;&nbsp;
			  
              <a id="3099__'.$dts.'" href="javascript:void(0)" onclick="genproced(this.id)" data-toggle="tooltip" title="Generate LPO"
              <span class="glyphicon glyphicon-share"> </span></a> 
			  &nbsp;&nbsp;&nbsp;
			  
			  <a id="31299__'.$dts.'" href="javascript:void(0)" onclick="getdetails(this.id)" data-toggle="tooltip" title="Send email"
              <span class="glyphicon glyphicon-envelope"> </span></a>
			  &nbsp;&nbsp;&nbsp;
              </td>';
			  echo "<td> ||<a href=\"print_rfq.php?REQUISITIONID=$res[REQUISITIONID]\">PRINT RFQ</a>  </td>";
             }
              ?>
             </tbody>
             </table>
               
      
               </div>    
              
                <div class="col-sm-4">
          <div class=""  id="getdetailsf" >  </div>
          <script> 
          function getdetailsf(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_pduoderallocation.php?q='+odno,
                       success : function(data){
                                $('#getdetailsf').html(data);
								$("#outx").modal("show");
                                 }
               });
               } 
          </script> 
          
          
           <div class="row text-center pad-top">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="div-square">
                          <a href=../../hr_mgt/<button class="" data-toggle="modal"  data-target="#genproc"></button>
                    <i class="fa fa-rocket fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> Generate new purchase order </h4>
                      </a>
                      </div> 
                  </div> 
                  
                 
                 
                 
                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="div-square">
                          <a href=<button class="" data-toggle="modal" data-target="#paywater"> </button>  
  <i class="fa fa-comments-o fa-5x" style="color:#00a65a;"></i>
                      <h4 style="font-size:14px;"> Generate new payment</h4>
                      </a>
                      </div> 
                </div> 
                
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="div-square">
                         <a href="payments_rpt.php?d1=0&d2=0">
                    <i class="fa fa-clipboard fa-5x" style="color:#00a65a;"></i>
                      <h4 style="font-size:14px;">View all payments </h4>
                      </a>
                      </div> 
                  </div> 
                
                  </div>   </div> 
                  <div class="col-sm-3">
                    <div id="reviews" class="carousel slide" data-ride="carousel" style="border:0px; border-radius:11px;">

                                    <div class="carousel-inner" style="background-color: #FFFFFF;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">
                                               Running contracts
                                               <span style="font-size:60px;"> 
                                               
                                                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id FROM contracts WHERE  STATUS ='RUNNING' GROUP BY id")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  
                                               
                                                </span>
                                             <br> <br>
                                                <div class="user-img pull-right">

                                                </div>
                                                <h5 class="pull-right"> <strong class="c-black"></strong></h5>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                         
                                              Due.for renewal
                                               <span style="font-size:60px;">
                                               
                                                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id,SERVICEPROVIDER, CONTRACT, STARTDATE, REMINDDATE, (REMINDDATE - STARTDATE) AS DAYS
				                               FROM contracts
											   WHERE REMINDDATE < CURDATE() + 1  AND STATUS = 'RUNNING' GROUP BY id")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
                                                
                                                </span>
                                            <br> <br> <br>
                                                 <div class="user-img pull-right">
                                                </div> 
                                            </div>
                                        </div>

                                         <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                          
                                               Expired contracts
                                               <span style="font-size:60px;"> 
                                               
                                                <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id,SERVICEPROVIDER, CONTRACT, STARTDATE, REMINDDATE, ENDDATE
				                               FROM contracts
											   WHERE ENDDATE < CURDATE() + 1 AND STATUS = 'RUNNING'  GROUP BY id")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
                                               
                                               </span>
                                            <br> <br> <br>
                                                 <div class="user-img pull-right">
                                                </div> 
                                            </div>
                                        </div>

                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" style="background-color:yellow;"></li>
                                        <li data-target="#reviews" data-slide-to="2" style="background-color:red;"></li>
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

     </div> 
     </div>
     
     <div class="col-sm-7">
      <div class="box box-primary" style="border:0px;">
               <a href="proc_pdu.php" class="btn btn-primary btn-block margin-bottom" 
               style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:#000;;">Running procurement plan by financial period</b></a>  </a> </div>
     
      <div id="dialog-window">
  <div id="scrollable-content">
   <ul>
                               <div class=""  id=" " style="margin-left:-39px;">
                               
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead> 
		<tr>
			         <th>FINANCIAL PERIOD</th> 
                     <th>TOTAL AMOUNT PLANNED</th>   
                     <th>BALANCE REMAINING</th>
		</tr>
	</thead>
	<tbody>
		
			<?php 
				include('connectproc.php');
				$result = $db->prepare("SELECT FINANCIALPERIOD, SUM(BUDGETAMOUNT), SUM(TOTALROB) FROM procplanning GROUP BY FINANCIALPERIOD DESC"); 
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['FINANCIALPERIOD']; ?></td> 
			<td>
			<?php
			$ppp=$row['SUM(BUDGETAMOUNT)'];
			echo formatMoney($ppp, true);
			?>
			</td>
            
           <td>
			<?php
			$ppp=$row['SUM(TOTALROB)'];
			echo formatMoney($ppp, true);
			?>
			</td>  
            
			 
			</tr>
			<?php
				}
			?>
			<tr>
			<th> </th> 
		 
		    </tr>
            
        
        
			<tr>
				<th colspan="1"><strong style="font-size: 12px; color: #222222;">TOTAL:</strong></th>
				<td colspan="1"><strong style="font-size: 12px; color: #222222;">
				<?php
				function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				} 
				$resultas = $db->prepare("SELECT SUM(BUDGETAMOUNT) FROM procplanning ");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg=$rowas['SUM(BUDGETAMOUNT)'];
				echo formatMoney($fgfg, true);
				}
				?>
				</strong></td>
				 
                
                <td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT SUM(TOTALROB) FROM procplanning");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['SUM(TOTALROB)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>
                 
			</tr>
		
	</tbody>
</table> 
     
     
       </div>
                                </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div> 

<style>
#dialog-window {
  height: 100px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 100px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>


 <div class="box box-primary" style="border:0px;">
               <a href="proc_pdu.php" class="btn btn-primary btn-block margin-bottom" 
               style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:#000;;">Local purchase order delivery tracker</b></a>  </a> </div>
               
  <table id="doomed" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr> 
                  <th>LPO NO. </th> 
                  <th>SERVICE PROVIDER</th> 
                  <th>REQUIRED</th>
                  <th>REMIND</th>
                  <th>ACTION</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>LPO NO. </th> 
                  <th>SERVICE PROVIDER</th> 
                  <th>REQUIRED</th>
                  <th>REMIND</th>
                  <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT SERVICEPROVIDER, LPONO, DATEREQUIRED, DELIVERYREMINDDATE,
			                                  TIMESTAMPDIFF( YEAR, DELIVERYREMINDDATE, now() ) as year
    , TIMESTAMPDIFF( MONTH, DELIVERYREMINDDATE, now() ) % 12 as month
    , FLOOR( TIMESTAMPDIFF( DAY, DELIVERYREMINDDATE, now() ) % 30.4375 ) as day 
			                                  FROM recievables 
											  WHERE DELIVERYREMINDDATE < CURDATE() + 1 AND DELIVERYSTATUS ='PENDING'  ORDER BY LPONO DESC");
  


             while($res = mysqli_fetch_array($result)) {
             $dtsxTc = $res['SERVICEPROVIDER']."***".$res['LPONO'];

               echo "<tr>"; 
			   echo "<td>".$res['LPONO']."</td>"; 
			   echo "<td>".$res['SERVICEPROVIDER']."</td>";  
			   echo "<td>".$res['DATEREQUIRED']."</td>"; 
			   echo "<td>".$res['DELIVERYREMINDDATE']."</td>"; 
			   echo '<td> 
			   &nbsp;
			   <a id="122__'.$dtsxTc.'" href="javascript:void(0)" onclick="newcont(this.id)" data-toggle="tooltip" title="Add new"
               <span class="glyphicon glyphicon-plus"> </span></a>
			   &nbsp;
			   <a id="13__'.$dtsxTc.'" href="javascript:void(0)" onclick="updateconts(this.id)" data-toggle="tooltip" title="Update"
               <span class="glyphicon glyphicon-new-window"> </span></a>
               </td>';
			   
	            }
               ?>
             </tbody>
             </table> 


     </div> 
                      </i></a>
                      </div> 
                      
                  </div> 
                    
                   </div>  
                    
                   </div> 
                
               
                
                   
                 </div>
                </div>
                
            </div>
            <!-- /.box-body -->
             
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="genproc" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 17px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            Generate local purchase order</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
    <form class="form-horizontal" action="lpo_mingenerator_processor.php" method="POST" style="height:auto; font-weight:normal;">  
             
               <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:20%;border:0px ;"> Order date</th>  
                <th style="width:30%;border:0px ;"> <input type="date"name="DATECREATED"  id="DATECREATED" value="<?php echo date('Y-m-d'); ?> " 
                 required="required"  class="form-control" style="width:100%;background-color:#FFF;"> 
                  </th>      
              </tr>
			  </table>  
              </div> 
              
              
              <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Serial number</th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="ORDERSERIALID" id="ORDERSERIALID" value=" <?php echo uniqid();?>" readonly=""
                 readonly="readonly"  class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table>  
              </div> 
              
                <input type="hidden" name="LPONO" id="LPONO">
                
                 <div class="col-sm-12">
               <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:30%;border:0px ;">Service provider</th>  
                <th style="width:70%;border:0px ;"> 
                <input type="text" name="SERVICEPROVIDER" onKeyUp="domee(this)"  id="SERVICEPROVIDER"  placeholder="Order to" required="required" autocomplete="off"
                  class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table> 
                 <div id="res"> </div> 
              </div>  
                 
                  
                <div class="col-sm-12">
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:30%;border:0px ;">Address</th>  
                <th style="width:70%;border:0px ;"> 
                <input type="text"  name="SVPADDRESS" id="SVPADDRESS"   required=""
                 class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table>  
              </div>  
              
                <div class="col-sm-12">
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:30%;border:0px ;">Location</th>  
                <th style="width:70%;border:0px ;"> 
                <input type="text"  name="SVPLOCATION" id="SVPLOCATION" required=""
                 class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table>  
              </div>  
                 
			  
         <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Invoice number  </th>  
                <th style="width:60%;border:0px ;"> <input type="text"  name="INVOICENO"  id="INVOICENO"  autocomplete="off"
                  class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
              </div>
              
               <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Amount (tax inc) </th>  
                <th style="width:60%;border:0px ;"> <input type="text"   name="ORDERAMOUNT"  id="ORDERAMOUNT" autocomplete="off"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
            </div>
            
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Payment status </th>  
                <th style="width:60%;border:0px ;"> <select   name="PAYMENTSTATUS"  id="PAYMENTSTATUS" autocomplete="off"
                 class="form-control" style="width:100%;background-color:#fff;"> 
                <option>Pending</option>
                </select> 
                  </th>  
              </tr>
			  </table> 
           </div>
            
         
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Entity code </th>  
                <th style="width:60%;border:0px ;"> <input type="text"  name="ENTITYCODE"  id="ENTITYCODE" value="NTIHC" readonly=""
                 class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table> 
           </div>
           
           
          <input type="hidden"name="INITIATEDBY"  id="INITIATEDBY" value="<?php echo $nameofuser; ?>" > 
          <input type="hidden"name="TITLE"  id="TITLE" value="<?php echo $desc; ?>" > 
           
        <Center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" />
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
             
             
                </form> 
                  </div>    
                    
           
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">  
                                        </div>
                                    </div>
                                </div>
                            </div></div>
               
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="outmania" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 17px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            Generate local purchase order</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                         <div class=""  id="genproced" >  </div>
                <script>

          function genproced(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'initiatelpo.php?q='+odno,
                       success : function(data){
                                $('#genproced').html(data);
								$("#outmania").modal("show");
                                 }
               });
               }

          </script> 
   
                  </div>    
                    
           
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">  
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                     
                     
                     
                      <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="contactinfo" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                              <p style="text-align:center;"> Please confirm your password to switch user mode ==> admin mode </p> 
                    
                      <form role="form"  action="../../../authenticate.php" method="POST" style="font-size:17px;";>
            
                      <input  type="password" class="form-control" style="height:25px;"  placeholder="Password" type="password" name="pwd" required=""  value=""> 

                      <input type="hidden" class="form-control"  style="height:25px;"  placeholder="Username"  name="username" type="text" value="<?php  echo $rm; ?>" 
                      readonly="readonly">  
                     <br>
                      <center> <input type="submit" class="btn btn-success" value="Log In" >
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </center> 
                           </form>
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
                     
            
            
            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="procreqnn" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 20px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            </h4>
                                        </div>
                                        <div class="modal-body"> 
               
                
                <div class=""  id="proc_requisition" >  </div>
                     <script>

               function getprocform(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'proc_requisition.php?q='+odno,
                            success : function(data){
                                     $('#proc_requisition').html(data);
     								$("#procreqnn").modal("show");
                                      }
                    });
                    }

               </script>
              
                </div>    
                    
        
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">  
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="outxfuddl" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 20px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            </h4>
                                        </div>
                                        <div class="modal-body"> 
               
                     
                    <div class=""  id="getgen" >  </div>
                <script>

          function getgen(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'proc_requisition.php?q='+odno,
                       success : function(data){
                                $('#getgen').html(data);
								$("#outxfuddl").modal("show");
                                 }
               });
               }

          </script> 
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
                            
                       <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="supdex" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" > 
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">  
            <form class="form-horizontal" style="height:auto; background-color:#fff;">  
            
    
           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:12px; text-align:left;"> APPROVED SUPPLIES LIST</p>
           
 <table id="exsupdex" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>ID</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>FRAME WORK DETAILS</th> 
                  <th>ADDRESS</th> 
                  <th>TELEPHONE CONTACTS AND EMAILS</th>
                  <th>TAX STATUS/ TIN NO.</th>   
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>ID</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>FRAME WORK DETAILS</th> 
                  <th>ADDRESS</th> 
                  <th>TELEPHONE CONTACTS AND EMAILS</th>
                  <th>TAX STATUS/ TIN NO.</th>   
            </tr>
        </tfoot>
        <tbody>   
   
             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM suppliers WHERE STATUS = 'SHORTLISTED' ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxccex = $res['SERVICEPROVIDER']."***".$res['id'];
							   
              echo "<tr>";  
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
			  echo "<td>".$res['FRAMEWORKDETAILS']."</td>"; 
			  echo "<td>".$res['PHYSICALADDRESS']." &nbsp; ".$res['PHYSICALLOCATION']." &nbsp;".$res['BOXNUMBER']." &nbsp;".$res['COUNTRYOFOPERATION']."</td>";   
			  echo "<td> <b>Contact person:</b> &nbsp;".$res['CONTACTPERSON']." <b>Tel:</b> &nbsp;".$res['TELEPONENO']." <b>Mobile:</b> &nbsp;".$res['MOBILENO']
			              ." <b>Email:</b> &nbsp;".$res['ENTITYEMAIL']." &nbsp;".$res['CONTACTPERSONEMAIL']."</td>";  
			  echo "<td> ".$res['TAXSTATUS']." <b>Tin No:</b> &nbsp;".$res['TINNO']."</td>";  
	            } 
               ?>
             </tbody>
             </table>
           <div class="col-sm-12">
           <div class="panel-body"> 
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#000;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                            
                            
                            
                            
                      
                 <div class="col-sm-12">
                     <div class="modal" id="contx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#FFF;" ><img src="../../../assets/img/logsbig.PNG" width="100%" height="30%">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">
                            <p>Projects / Contracts managemet</p>
		                  <table id="exconts" class="table table-table table-tabled" style="font-weight:normal; font-size:8px; width:100%;border: 2px solid #ecf0f5;">
                  <thead>
                  <tr>
                  <th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>TENURE</th>
                  <th>STARTDATE</th>
                  <th>ENDDATE</th>
                  <th>REMAINING PERIOD</th>
                  <th>EXTENSION (END DATE)</th> 
                  <th>CONTRACT MANAGER</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                   <th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>TENURE</th>
                  <th>STARTDATE</th>
                  <th>ENDDATE</th>
                  <th>REMAINING PERIOD</th>
                  <th>EXTENSION (END DATE)</th> 
                  <th>CONTRACT MANAGER</th>
                 </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT id, SERVICEPROVIDER, CONTRACT, CONTRACTVALUE, PAYMENTSHEDULE, TENURE, EXTENSIONENDDATE,
			                                         RESPONSIBILITYCENTER, ACCOUNTABLE, CONSULTED, INFORMED, CONTRACTMANAGER, STARTDATE, ENDDATE,
	  TIMESTAMPDIFF( YEAR, ENDDATE, now() ) as year
    , TIMESTAMPDIFF( MONTH, ENDDATE, now() ) % 12 as month
    , FLOOR( TIMESTAMPDIFF( DAY, ENDDATE, now() ) % 30.4375 ) as day
													             FROM contracts ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxT = $res['SERVICEPROVIDER']."***".$res['id'];

              echo "<tr>";
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>";
			  echo "<td>".$res['CONTRACT']."</td>";
			  echo "<td>".$res['CONTRACTVALUE']."</td>";
			  echo "<td>".$res['PAYMENTSHEDULE']."</td>";
			  echo "<td>".$res['TENURE']."</td>";
			  echo "<td>".$res['STARTDATE']."</td>";
			  echo "<td>".$res['ENDDATE']."</td>";
			  echo "<td>".$res['year']." &nbsp; Yrs &nbsp;".$res['month']." &nbsp; Months &nbsp;".$res['day']." &nbsp; Days</td>";
			  echo "<td>".$res['EXTENSIONENDDATE']."</td>"; 
			  echo "<td>".$res['CONTRACTMANAGER']."</td>";
	            }
               ?>
             </tbody>
             </table>

            <div class="col-sm-12">
           <div class="panel-body">
           </form>

           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#FFF; color:#000;">
                                           <center>  <button type="button" data-dismiss="modal">Close</button></center></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>      
                            
                             <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="paywater" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:left;">Generate payment </h4>
                                        </div>
                                        <div class="modal-body">
  <form class="form-horizontal" action="pmt_processone.php" method="POST" style="height:auto; font-weight:normal;">  
 
 
 <div class="col-sm-6" style="margin-left: -13px;">
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
    <th style="width:40%; border:0px;">Payment date</th>
	<td style="width:60%;border:0px;">
    <input type="date" name="PAYMENTDATE" id="PAYMENTDATE" value="<?php echo date('y-m-d'); ?>"  required=""
   style="width:100%; text-align:left;background-color:#FFF; height:20px;"></td>  						
   </tr>
  <tr>
 </tbody>
 </table>  
 
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
   <th style="width:40%;border:0px; background-color:#fff;">Payment s/n</th> 
	<td style="width:60%;border:0px;"><input type="text" name="PMTSERIALID" id="PMTSERIALID" value="<?php echo uniqid();?>"  readonly="" 
    style="width:100%; text-align:left;background-color:#FFF;"></td>  					
   </tr>
  <tr>
 </tbody>
 </table> 
 
</div>

   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
            
   <th style="width:100%;border:0px;">Payment quater</th>      
   </tr>
  <tr>
 </tbody>
 </table>
         
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
              
	<td style="width:100%;border:0px solid #fff;">
    <input type="radio" name="QUARTERACCOUNTABLE" id="QUARTERACCOUNTABLE" value="1ST QUARTER" />
    <label> 1ST QUARTER </label>
    <input type="radio" name="QUARTERACCOUNTABLE" id="QUARTERACCOUNTABLE" value="2ND QUARTER" />
    <label> 2ND QUARTER </label>
    <input type="radio" name="QUARTERACCOUNTABLE" id="QUARTERACCOUNTABLE" value="3RD QUARTER" />
    <label> 3RD QUARTER </label>
    <input type="radio" name="QUARTERACCOUNTABLE" id="QUARTERACCOUNTABLE" value="4TH QUARTER" />
    <label> 4TH QUARTER </label>
     </td>   
   </tr>
  <tr>
 </tbody>
 </table>
    						
  
          
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
    <th style="width:20%;border:0px; ">Payment type</th> 
	<td style="width:80%;border:0px;">
    <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="CHEQUE" checked />
    <label> CHEQUE </label>
     <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="EFT" />
    <label> EFT </label> 
     </td>   
   </tr>
  <tr>
 </tbody>
 </table>
  
   
  
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
   <th style="border:0px; background-color:#fff;width:20%;">User initials</th> 
	<td style="width:80%;border:2px solid #fff;"><input type="text" name="USERINITIALS" id="USERINITIALS"  value="<?php echo $nameofuser; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td>  
   </tr>
  <tr>
 </tbody>
 </table> 
  
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
   <th style="border:0px; background-color:#fff;width:20%;">Title</th> 
	<td style="border:2px solid #fff;width:80%;"><input type="text" name="USERTITLE" id="USERTITLE"  value="<?php echo $desc; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td> 
							
   </tr>
  <tr>              
 </tbody>
 </table> 
 
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
   <th style="border:0px; background-color:#fff;width:20%;">User PFN</th> 
	<td style="border:2px solid #fff;width:80%;"><input type="text" name="USERINO" id="USERINO"  value="<?php echo $pf; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
 
 
    <input type="hidden" name="UTILITYTYPE" id="UTILITYTYPE"   />
 
    <Center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" />
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
             </Center>   
             
                 </form> 
                           </div>    
                  </div>  
           
           <div class="col-sm-12">
           <div class="panel-body">
        
        
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">  
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> 
                    </div>
                    
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
    
      
  </footer> 
 
<script src="../../../assets/lib/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
  
 <script type="text/javascript" src="../../ ../assets/js/gauge.js"></script>
</body>
</html>

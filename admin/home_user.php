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
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/ionicons.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="assets/notifier.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css"> 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="datatable/css/buttons.dataTables.min.css">

  <script src="datatable/js/jquery-1.12.3.js"></script>
  <script src="datatable/js/jquery.dataTables.min.js"></script>
  <script src="datatable/js/bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.buttons.min.js"></script>
  <script src="datatable/js/buttons.flash.min.js"></script>
  <script src="datatable/js/jszip.min.js"></script>
  <script src="datatable/js/pdfmake.min.js"></script>
  <script src="datatable/js/vfs_fonts.js"></script>
  <script src="datatable/js/buttons.html5.min.js"></script>
  <script src="datatable/js/buttons.print.min.js"></script>
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
     $('#example6').DataTable( {
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

  <script> 
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();  
         document.getElementById('CHECKIN').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
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
                 border: 1px solid ecf0f5;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 12px;
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
  require('connect/config.php');?>
  <header class="main-header">

    <!-- Logo -->
    <a href="home_user.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NTIHC |</b>imms</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
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
          <li>
            <a href="home_user.php" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="assets/img/ntihclog2.png" width="100" height="100" class="img-circle" alt="User Image">
        </div> 
        <div class="pull-left info">
           <span class="glyphicon glyphicon-user">WELCOME</span>    
            <br> <br> 
          <a href="javascript:void(0)"> <b><?php echo $nameofuser; ?> </b>  </a>
           
          <p></p>
           
        </div>
      </div>
      <!-- search form --> 
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">OTHER MODULAR QUICK LINKS</li>
        
		 <li>
           <a href="timesheet/index.php">
            <i class="fa fa-th"></i> <span>Time sheet</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">0 </small>
            </span>
          </a>
        </li>
		
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Invoices and receipts</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">0 </small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Payments</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">0 </small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Payroll wizard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">0 </small>
            </span>
          </a>
        </li>        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Procurement</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
          </a>
          <ul class="treeview-menu"> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>PDU sub module</a></li> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Projects and contracts</a></li> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Stores sub module</a></li>    
          </ul>
        </li>
        
          <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Human resource mgt</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>HR module</a></li>     
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Fleet management </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Transport & logistics mgt</a></li>     
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Assets management </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Property management</a></li>     
          </ul>
        </li>
        
        
        <li class="treeview"> 
        </li>
        <li class="header">User groups</li>
         <li><a href="home_user.php"><i class="fa fa-circle-o text-red"></i>Home User<span></span></a></li>
         
          <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Executive admin</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal" </button> </i>Programme Director</a></li> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal" </button> </i>Deputy Programme Director</a></li>  
          </ul>
          </li>
        
          <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Advocacy and Research</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Head Advocacy and Research</a></li>   
          </ul>
          </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Finance and Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Head Fianance and Admin</a></li>   
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Service Delivery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Head Service Delivery</a></li>   
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <P>
        <a href="javascript:void(0)"> <B> HOME USER DASHBOARD</B>&nbsp;&nbsp;&nbsp TITLE: &nbsp <b><?php echo $desc; ?>  </b> </a>  
        <small></small>
      </P>
      <ol class="breadcrumb">   
          
      </ol>

        <br>
    <!-- Main content -->
      <div class="row">
        <div class="col-md-3">
          <a href="home_user.php" class="btn btn-primary btn-block margin-bottom"> System Dashboard</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox | Outbox</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked"> 
                <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#imprex"></button></i> My imprest requesitions<span 
                class="label label-warning pull-right">
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PENDING' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   </span></a>  
                
                 <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#imprexnotificationModal"></button></i> Travel advance requests<span class="label label-warning pull-right">0</span></a>  

              </ul>
            </div>
            <!-- /.box-body -->


          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Procurement </h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

                <li><a href=<button class="fa fa-circle-o text-red" data-toggle="modal"  data-target="#notificationModalproc"></button></i> procurement requests 
                <span class="label label-warning pull-right"><?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE  RFPFILENUMBER = '$pf' AND RFPUSERNAME = '$nameofuser' AND AOACTION ='APPROVED'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </span>
&nbsp
<span class="label label-success pull-right"><?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE  RFPFILENUMBER = '$pf' AND RFPUSERNAME = '$nameofuser' AND CORACTION ='AUTHORISED'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </span>
&nbsp

<span class="label label-danger pull-right"><?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE  RFPFILENUMBER = '$pf' AND RFPUSERNAME = '$nameofuser' AND CORACTION ='REJECTED'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </span> 
 
</a>

                <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#notificationModal"></button></i> Store requisitions <span class="label label-warning pull-right">0</span></a>

                <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#notificationModal"></button></i> LPO approvals <span class="label label-warning pull-right">0</span></a>
                
                <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#notificationModal"></button></i> Deliveries <span class="label label-warning pull-right">0</span></a>
              </ul>
            </div>
            <!-- /.box-body -->

            <!-- /.box-body -->

            </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Transport mgt</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

                <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#notificationModal"></button></i> Fuel requisitions <span class="label label-warning pull-right">0</span></a>

                <li><a href=<button class="fa fa-circle-o text-yellow" data-toggle="modal"  data-target="#notificationModal"></button></i> Transport reservations<span class="label label-warning pull-right">0</span></a>

                <li><a href=<button class="fa fa-circle-o text-light-blue" data-toggle="modal"  data-target="#notificationModal"></button></i> Vehicle hire voucher <span class="label label-warning pull-right">0</span></a>
              </ul>
            </div>

            </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Human Resource </h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

                <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#notificationModal"></button></i> Leave approvals <span class="label label-warning pull-right">0</span></a>

                <li><a href=<button class="fa fa-circle-o text-yellow" data-toggle="modal"  data-target="#notificationModal"></button></i> Timesheet <span class="label label-warning pull-right">0</span></a>

                <li><a href=<button class="fa fa-circle-o text-light-blue" data-toggle="modal"  data-target="#notificationModal"></button></i> Staff info <span class="label label-warning pull-right">0</span></a>
              </ul>
            </div>


          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->


      <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="font-family:lcd;">NTIHC | Integrated Medical and Managerial System</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
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
                  
       <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/budget.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href=<button class="" data-toggle="modal"  data-target="#notificationModal"></button></i>Cash <i class="fa fa-arrow-circle-right"></i></a>
             <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu"> 
                    <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModaltwentyfour" </button> </i>Imprest requisition</a></li>
                    <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#travel"  </button> </i>Travel advance form</a></li> 
                  </ul>
                </div></div>
          </div>
        </div></div>
        <!-- ./col -->  
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/admin.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">
            <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#notificationModal"></button>Medical <i class=""></i></a>
             <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu">
                     <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal" </button> </i>Access denied</a></li> 
                    <li class="divider"></li> 
                  </ul>
                </div></div>
          </div>
        </div></div>
        <!-- ./col -->
                  
       
       <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/queue-512.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href=<button class="" data-toggle="modal"  data-target="#notificationModal"></button></i>HR-Mgt <i class=""></i></a>
             <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu"> 
        <li><a href="../ahr/appraisal1.php"><i class="fa fa-th"></i>New appraisal</a></li> 
        <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#timesheet"></button></i> Time sheet</a></li>  
        <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#leaveform"></button></i> Leave form</a></li>  
        <li class="divider"></li> 
        <li><a href=<button class="fa fa-circle-o text-green" data-toggle="modal"  data-target="#exitint"></button></i> Exit interview form</a></li>
        <li><a href=<button class="fa fa-circle-o text-green" data-toggle="modal"  data-target="#handover"></button></i> Handover clearence form</a></li> 
                  </ul>
                </div></div>
          </div>
        </div></div>
        <!-- ./col -->
        
         
      <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/fleet.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href=<button class="" data-toggle="modal"  data-target="#notificationModal"></button></i>Fleet<i class="fa fa-arrow-circle-right"></i></a>
             <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu">
                   <li><a href=<button class="fa fa-circle-o text-red" data-toggle="modal"  data-target="#bookVehicle"></button></i> Book a vehicle</a></li>  
        <li><a href=<button class="fa fa-circle-o text-blue" data-toggle="modal"  data-target="#hireVehicle"></button></i> Vehicle hire voucher</a></li> 
        <li><a href=<button class="fa fa-circle-o text-green" data-toggle="modal"  data-target="#fuelRequests"></button></i> Fuel and lubricants</a></li> 
        <li><a href=<button class="fa fa-circle-o text-red" data-toggle="modal"  data-target="#driverContacts"></button></i> Driver's contacts</a></li>  
                    <li class="divider"></li>
        <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"></button></i> Vehicle defect form</a></li>
        <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"></button></i>Accident form</a></li> 
                                <li class="divider"></li>
        <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"></button></i> Fleet cordination tracker</a></li>
                    
                  </ul>
                </div></div>
          </div>
        </div></div>
        <!-- ./col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/employee.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href=<button class="" data-toggle="modal"  data-target="#notificationModal"></button></i>procure <i class=" "></i></a>
             <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu"> 
                    <li><a href=<button class="fa fa-circle-o" data-toggle="modal"  data-target="#procuremento" </button> </i> Procurement requisition</a></li>
                    <li class="divider"></li>
                     <li><a href=<button class="fa fa-circle-o" data-toggle="modal"  data-target="#storereqn" </button> </i> Store requisition</a></li>
                  
                  </ul>
                </div></div>
          </div>
        </div></div>
        <!-- ./col -->
  
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/press-nozbe.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#notificationModal"></button> </i> Assets<i class="fa fa-arrow-circle-right"></i></a>
             <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu"> 
                    <li class="divider"></li> 
                  </ul>
                </div>
                </div>
          </div>
        </div></div>
        <!-- ./col -->
         
      <!-- /.row -->

 
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                
                  <ul class="nav nav-tabs"> 
                                <li class="active"><a href="#newmessages1" data-toggle="tab">Compose</a>
                                </li>
                                <li><a href="#incoming1" data-toggle="tab">Message inbox<span class="label label-warning pull-right">
                                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
if ($result = mysqli_query($link, "SELECT id, subject FROM messager WHERE messageaction ='sent' AND sendto = '$rm'")) {
                                                                         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
                                 
                                </span></a>
                                </li>
                                 <li><a href="#sent1" data-toggle="tab">Sent</a>
                                </li> 
                                <li><a href="#trash1" data-toggle="tab">Trash </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                               <div class="tab-pane fade in active" id="newmessages1"> 
                               <br>
                               
              <form class="form-horizontal" action="process_message.php" method="POST">  
              <div class="col-sm-12"> 
                        
              <div class="form-group">                 
              <select class="form-control" name="sendto" id="sendto" required="required" placeholder="To:">
              <option></option>
               <?php   echo $stss; ?> 
              </select>
              </div>
              
              <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" required="required" placeholder="Subject:">
              </div>
              
              <div class="form-group"> 
              <textarea id="comment" name="comment" class="form-control" placeholder="Message body" required="required" style="height: 85px">
              </textarea> 
              </div> 
               
              <div class="form-group">                 
              <input type="hidden" class="form-control" name="recievedfrom"  id="recievedfrom" value="<?php echo $nameofuser; ?>" >
             
              </div>
               <input type="hidden" class="form-control" name="name"  id="name" > 
                  <input type="hidden" name="attachment" id="attachment">
                  </div>  
                  
             <center> <input type="submit" name="button" id="button" value="Send" /> </center>
                  
              </form>
                    
                                </div>  
                                <div class="tab-pane fade" id="incoming1"> 
                                <div class="col-sm-5">
                                <br>
<table id="example2" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
        <tr>  
              <th>Time stamp.</th>
              <th>Recieved from</th> 
              <th>Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th>Time stamp.</th>
              <th>Recieved from</th> 
              <th>Action</th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function referpat(myid){
var dts = myid.split("***");
document.getElementById("mysendto").value=dts[1];
document.getElementById("myID").value=dts[0];
document.getElementById("mytimestamp").value=dts[2];
document.getElementById("mysubject").value=dts[3];
document.getElementById("mycomment").value=dts[4];
}
</script> 
    
 <?php 
include_once("../updatecmgt/config.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM messager WHERE messageaction ='sent' AND sendto = '$rm' ORDER BY ID DESC");
 
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['ID']."***".$res['sendto']."***".$res['timestamp']."***".$res['subject']."***".$res['comment'];
		echo "<tr>"; 
		echo "<td>".$res['timestamp']."</td>";
		echo "<td>".$res['recievedfrom']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">OPEN</a> </td>'; 			
	}
	?>
	</tbody>
  </table>
  </div>
  <div class="col-sm-7">
               <br>
               
               <form method="post" action="home_user.php">
                 
       <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ecf0f5;">
        <th>Attention</th>
        <th><input type="text" id="mysendto" name="sendto" value="" readonly="readonly" style="text-align:left; width:100%;"></th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>Time stamp</B></td> 
        <td><input type="date" id="mytimestamp" name="timestamp" value="" readonly="readonly" style="text-align:left; width:100%;"></td> 
       </tr>
    </thead>
    <tbody>
      <tr style="background-color:#ecf0f5;">
        <td><b>Subjecy</b></td>
        <td><input type="text" id="mysubject" name="subject" value="" readonly="readonly" style="text-align:left; width:100%;"> </td> 
      </tr>
       </thead>
    <tbody>
      <tr>
        <td><b>Body</b></td>
         <td> <textarea id="mycomment" name="comment" value="" readonly="readonly" cols="60" rows="12" > </textarea> </td> 
      </tr>
       </thead>
    <tbody>
      <tr style="background-color:#ecf0f5;">
        <td><b>Action</b></td>
       <td><input type="hidden" id="myID" name="ID" value=""</td>
				 <input type="submit" name="update" value="Click"></td> 
      </tr> 
    </tbody>
  </table>
</div> 
	</form>
         
                       
                                    </div>
                                 
                       <div class="tab-pane fade" id="sent1">
                                    <h4>Sent messages</h4> 
                                    
                                    </div>
                                    
                                 
                                <div class="tab-pane fade" id="trash1">
                                    <h4>Trash</h4>
                                    
                                </div>
                            </div>
                            
                          <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       Quick search
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">   
                       
                     </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                       Find
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                     000000000 
                    </div>
                  </div>
                </div>  
                
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                       Find
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                     000000000 
                    </div>
                  </div>
                </div>  
                 
              </div>
            </div> 
            <!-- /.box-body --> 
                  </div>
                  <!-- /.btn-group -->
                <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                  </div>
                  <!-- /.btn-group -->
                  </div></div> </div></div> </div> 
                  
<div class="col-sm-12" style="background-color:#fff; height:180px;">
......
</div>

                  <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalproc" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog12">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffa6;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br><br><br><br><br><br>

           <form class="form-horizontal" style="height:auto;">
            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home1" data-toggle="tab">Confirmed orders</a>
                                </li>
                                <li><a href="#profile1" data-toggle="tab">Rejected</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                            <div class="tab-pane fade in active" id="home1" style="background-color: #ffffff;">
                                <br>

	  <div id="work" style="width:100%; font-weight:normal;">
    <table id="example5" class="table table-striped table-bordered" width="100%" >
        <thead>
        <tr>
                     <th>IDxxx</th>
                     <th>DATE</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th>
                     <th>SUBJECT OF PROCUREMENT </th>
                     <th>CATEGORY</th> 
                     <th>ESTIMATED-COST </th>
                     <th>ACTION </th>
        </tr>
        </thead>
        <tfoot>
        <tr>
                     <th>ID</th>
                     <th>DATE</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th>
                     <th>SUBJECT OF PROCUREMENT </th>
                     <th>CATEGORY</th> 
                     <th>ESTIMATED-COST </th>
                     <th>ACTION </th>
        </tr>
        </tfoot>
        <tbody>
  

 <?php
include_once("config/inline/configproc.php");

$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE RFPFILENUMBER = '$pf' AND RFPUSERNAME = '$nameofuser' AND CORACTION ='AUTHORISED' ORDER BY id DESC");
                                                                                                             
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['DATECREATED']."</td>";
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['INITIATORDEPT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['CATEGORY']."</td>"; 
		echo "<td>".$res['TOTALCOST']."</td>"; 
		echo "<td><a href=\"config/inline/procreqn_edit.php?id=$res[id]\">VIEW</a> </td>";		
	}
	?>
    
	</tbody>
  </table>
                <!-- /.table -->



                                </div> </div>
                                <div class="tab-pane fade" id="profile1">
                                <br>
                                 <div id="work" style="width:100%; font-weight:normal;">
    <table id="example3" class="table table-striped table-bordered" >
        <thead>
        <tr>
                <th>REQ ID</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th>
                     <th>SUBJECT OF PROCUREMENT </th>
                     <th>ESTIMATED COST </th>
                     <th>CONFIRMATION </th>
                     <th>DATE </th>
                     <th>APPROVAL</th>
                     <th>PROC'T STATUS</th>
                     <th>ACTION</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
                     <th>REQ ID</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th>
                     <th>SUBJECT OF PROCUREMENT </th>
                     <th>ESTIMATED COST </th>
                     <th>CONFIRMATION </th>
                     <th>DATE </th>
                     <th>APPROVAL</th>
                     <th>PROC'T STATUS</th>
                     <th>ACTION</th>
        </tr>
        </tfoot>
        <tbody>

       <script>
function procar(myid2){
var dts = myid2.split("***");
document.getElementById("myCATEGORY").value=dts[1];
document.getElementById("myid").value=dts[0];
document.getElementById("myPROCUREMENTSTATUS").value=dts[2];
document.getElementById("myITEM").value=dts[3];
}
</script>

 <?php
include_once("config/inline/configproc.php");

$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='REJECTED' ORDER BY id DESC");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['CATEGORY']."***".$res['PROCUREMENTSTATUS']."***".$res['ITEM'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['INITIATORDEPT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['TOTALCOST']."</td>";
		echo "<td>".$res['CORACTION']."</td>";
		echo "<td>".$res['CORDATE']."</td>";
	    echo "<td>".$res['AOACTION']."</td>";
		echo "<td>".$res['PROCUREMENTSTATUS']."</td>";
		echo "<td><a href=\"config/inline/procreqn_edit.php?id=$res[id]\">EDIT</a> | <a href=\"config/inline/procreqn_del.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">DEL</a></td>";	
	}
	?>
	</tbody>
  </table>
                <!-- /.table -->

                                </div>
                                </div>



           <div class="col-sm-12">
         </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


             <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="imprex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
             <div class="col-sm-12" >
<img src="../assets/img/logs.PNG" width="100%" height="100%">
</div>  
            <form class="form-horizontal" style="height:auto;">
             
            <div class="box-header with-border">
              <h3 class="box-title" style="text-align:center;">My imprest <b style="color:blue;">remote</b> storage</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       Imprest requisition tracker
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                    <BR>
     <table class="table table-bordered" style="margin-top: -25px;border: 0px;background-color:#f9f9f9;">
    <thead> 
      <tr class=" ">
       <th  style="height:50px; border:2px; border-radius:0px;background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Rejected orders &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5;background-color:#f9f9f9; border-radius:11px;">
       
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='REJECTED' AND IDNUMBER = '$pf' GROUP BY ORDERNO ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
       </th>
       
       <th  style="height:50px; border:2px; background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Due for authorising &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:blue; text-align:center;border:4px solid #ecf0f5; border-radius:11px;background-color:#f9f9f9;">
       
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND IDNUMBER = '$pf'  GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  
       </p>
       </th> 
        
       <th  style="height:50px; border:2px; background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;">  Due for approval &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:black; text-align:center; border:2px solid #ecf0f5;background-color:#f9f9f9; border-radius:11px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND IDNUMBER = '$pf' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
        </th>
        
       <th  style="height:50px; border:2px; background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Cash out &nbsp / &nbsp line items</p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5;  background-color:#f9f9f9; border-radius:11px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PENDING' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
       
       / 
       
  <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PAID' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>         
              
        </p>
        </th>
      </tr>
    </thead>   
  </table>
                    </div>
                  </div>
                </div>
                 
                <div class="panel box box-dangers">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTh">
                        Rejected orders by item description
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTh" class="panel-collapse collapse">
                    <div class="box-body">
                    
                      <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
        <th style="width:10px;">ID.</th>
        <th style="width:25px;">SERIAL*NO.</th> 
                     <th style="width:45px;">CREATED*DATE</th>
					 <th style="width:10px;">AMOUNT</th>    
                     <th style="width:10px;">VIEW</th> 
                     <th style="width:10px;">DEL</th>    
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='REJECTED' AND IDNUMBER = '$pf' ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";   
		echo "<td>".$res['ORDERNO']."</td>";  
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['IMP_DEBIT']."</td>";  
		echo '<td> <a id="1__'.$dts.'" href="javascript:void(0)"  onclick="getstuff(this.id)" data-toggle="tooltip" title="open" 
		<span class="glyphicon glyphicon-ok"> </span></a>  </td>'; 
	    echo "<td><a href=\"config/inline/pettyviewhomedel.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";	  			
	}
    ?>
	</tbody>
  </table>
                     
                    </div>
                  </div>
                </div>
                
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Petty cash payment history by invoice No.
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                    <table id="example10" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>  
       
                     <th style="width:45px;">CREATED.DATE</th>
                      <th style="width:25px;">INVOICE.NO</th>  
                     <th style="width:10px;">STATUS</th> 
                     <th style="width:10px;">PMT.DATE</th>       
                     <th style="width:10px; color:red; background-color:#ecf0f5;">ACTION</th> 
                      
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND APPROACTION ='APPROVED' AND IDNUMBER = '$pf' AND CASHOUT ='PAID' 
                                          GROUP BY ORDERNO ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";    
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['ORDERNO']."</td>";    
		echo "<td>".$res['CASHOUT']."</td>"; 
		echo "<td>".$res['RECIEVEDDATE']."</td>";    
		echo "<td><a href=\"config/inline/petty_payments_history.php?ORDERNO=$res[ORDERNO]\">Open</a></td>";		 
	}
    ?>
	</tbody>
  </table> 
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
           
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:red;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
 
              
               <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

               <div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logsbig.PNG" width="100%" height="100%">
</div> 
      
           <div class=""  id="pettyviewhome" >  </div>
                <script>

          function getstuff(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'config/inline/pettyviewhome.php?q='+odno,
                       success : function(data){
                                $('#pettyviewhome').html(data);
								$("#impres2").modal("show");
                                 }
               });
               }

          </script>
           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>

         </form> 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>
              
                    <!----/-----start models---------->
   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 

            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:40px; text-align:center;"> ACCESS DENIED</p>
             
            <p></p>
            <p style="color:red; font-weight:bold; font-size:40px; text-align:center;font-family:lcd;"> <?php echo date('Y-m-d'); ?></p> 
            </p>
            <p></p> 
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaltwentyfour" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logsbig.PNG" width="100%" height="100%">
</div> 
      
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>
 
          <form class="form-horizontal" action="imprest_process.php" method="POST" style="height:auto; font-weight:normal;">
           
       <table class="table table-bordered" >
      <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"> </th>
        <th style="border-bottom-color:white; width:50%; "> </th>  
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td>  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="REQUESTDATE" name="REQUESTDATE"  value="<?php echo date('d-m-y'); ?>"  class="form-control"
                        style=" font-size: 11px; text-align:left; width:100%;"/>  
                    </div>
                </div>
                <!-- /.form-group --></td>
                
               <td> <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4" style="text-align:left;"> PF No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="IDNUMBER" name="IDNUMBER" value=" <?php echo $pf; ?> " data-placement="top" 
                        readonly ="" style=" font-size: 11px; text-align:left; width:100%; background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group --> 
        </td> 
       </tr>
    </tbody>
  </table>  
        
         
         <table class="table table-bordered" style="margin-top:-19px;">
      <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"> </th>
        <th style="border-bottom-color:white; width:50%; "> </th>  
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Applicant</label>
                    <div class="col-sm-8">
                        <input type="text" id="APPLICANTNAME" name="APPLICANTNAME" class="form-control" value="<?php echo $nameofuser; ?> " 
                        readonly ="" style=" font-size: 11px; text-align:left; width:100%; background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group -->
                </td>
                <td> <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4" style="text-align:left;"> Department</label>
                    <div class="col-sm-8">
                        <select class="form-control"  name="AP_DEPARTRMENT" data-placement="top" style="font-size: 11px; text-align:left;"/>
                                <option value="<?php echo $dept; ?>"> <?php echo $dept; ?></option>
                <option value="ADVOCACY AND RESEARCH">ADVOCACY AND RESEARCH</option>
                <option value="FINANCE AND ADMINISTRATION">FINANCE AND ADMINISTRATION</option>
                <option value="SERVICE DELIVERY">SERVICE DELIVERY</option>
                </select>
                    </div>
                </div>
                <!-- /.form-group --> 
        </td>
        </tr>
    </tbody>
  </table>  
                   
  <table class="table table-striped" id="mytable11" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th>DESCRIPTION FOR WHICH CASH IS REQUIRED</th>
   <th>CURRENCY</th>
   <th>AMOUNT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  
  <input type="button" onClick="addRow166('mytable11')" value="Add" />
     <input type="button" onClick="deleteRow166('mytable11')" value="(Delete)" />
     <input type="hidden" id="mytable_rows11" value="0">
     
         
    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"> </th> 
        <th style="border-bottom-color:white; width:50%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td>
        <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" > Order no.</label>
                    <div class="col-sm-8">
                        <input type="text" name="ORDERNO" value=" <?php echo uniqid();?>" class="form-control"  readonly =""
                        style=" font-size: 11px; font-weight:bold; text-align:left; background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group -->  </td> 
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Total sum</label>
                    <div class="col-sm-8">
                        <input type="text" id="TOTALSUM" name="TOTALSUM" class="form-control" 
                        style=" font-size: 17px; font-weight:bold; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->

               </td>
      </tr>
    </tbody>
  </table>       
      
             
    <table class="table table-bordered">
    <thead>
      <tr  class="  "> 
        <th style="border-bottom-color:white; width:100%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td>
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Amount in words</label>
                    <div class="col-sm-8">
                        <input type="text" id="AMOUNTINWORDS" name="AMOUNTINWORDS" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->  </td>  
                </tr>
    </tbody>
  </table>       
      
          
            <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>
            
                
    <table class="table table-bordered">
    <thead>
      <tr  class="  "> 
        <th style="border-bottom-color:white; width:50%;"> </th> 
        <th style="border-bottom-color:white; width:50%;"> </th>
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td>
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Budget line</label>
                    <div class="col-sm-8">
                        <input type="text" id="BUDGETLINE" name="BUDGETLINE" readonly = "readonly" 
        style="width:100%; text-align:left;font-weight:bold; background-color:#f0f0f0;">
                    </div>
                 </div>
               <!-- /.form-group -->  </td>
               
                <td>  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Code</label>
                    <div class="col-sm-8">
                        <input type="text" id="CODE" name="CODE" readonly = "readonly" 
        style="width:100%; text-align:left;font-weight:bold; background-color:#f0f0f0;">
                    </div>
                 </div>
                 </td>
                </tr>
    </tbody>
  </table>       
        
          
    <table class="table table-bordered" style="margin-top: -19px;">
    <thead>
      <tr  class="  "> 
        <th style="border-bottom-color:white; width:50%;"> </th>
        <th style="border-bottom-color:white; width:50%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td>
          <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Confirm by</label>
                    <div class="col-sm-8">
                        <input type="text" id="IMPAUTHORISEDBY" name="IMPAUTHORISEDBY" placeholder"Signature"  class="form-control" readonly
                        style="font-size: 11px; border:0px;background-color:#f0f0f0;"/> 
                    </div>
                </div>
                <!-- /.form-group -->
 
                   <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Date</label>
                    <div class="col-sm-8"> 
                        <input type="text"  class="form-control" id="IMPAUTHORISEDDATE" name="IMPAUTHORISEDDATE" data-placement="top" readonly 
                        style=" font-size: 11px; border:0px;background-color:#f0f0f0; width:100%;"/>
                    </div>
                </div>
                <!-- /.form-group -->   </td> 
                
                <td>
                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Approved by</label>
                    <div class="col-sm-8">
                        <input type="text" id="IMPAPPROVEDBY" name="IMPAPPROVEDBY" placeholder"Signature"  class="form-control" readonly
                        style=" font-size: 11px; border:0px;background-color:#f0f0f0;"/> 
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4" style="text-align:left;"> Date</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  id="IMPAPPROVEDDATE" name="IMPAPPROVEDDATE" data-placement="top" readonly 
                        style=" font-size: 11px; text-align:center; border:0px;background-color:#f0f0f0;"/>
                </div>
                <!-- /.form-group -->  </td>  
                </tr>
    </tbody>
  </table>   
             
      <table class="table table-bordered " style="margin-top: -19px;">
      <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:30%;">  </th>
        <th style="border-bottom-color:white;font-weight:bold; width:40%; text-align:center;">Send to</th> 
        <th style="border-bottom-color:white;font-weight:bold; width:30%;"></th>  
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td></td>
        <td ><select name="SENDTO" id="SENDTO"  required="required" style="width:100%; text-align:center;">
                  ttt     = "<?php   echo $stss; ?>"; 
                  </select> </td> 
        <td></td>          
    </tbody>
    </table> 
    
    
        <div class="col-sm-12">
        <center> <input type="submit" name="button" id="button" value="Save" /></center>
          </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                        <div class="col-lg-12">
                        <div class="modal fade" id="travel" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"  style="text-align:center;"id="H1">  </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logs.PNG" width="100%" height="100%">
</div> 
      
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">TRAVEL ADVANCE REQUISITION </legend> </center>
 
          <form class="form-horizontal" action="travel_process.php" method="POST" style="height:auto; font-weight:normal;">
                
 
<table class="table table-bordered">
    <thead>
        <tr class=" ">
        <th style="border-bottom-color:white; width:33.333333333%;"></th>
        <th style="border-bottom-color:white; width:66.666666666%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>Applicant</B></td>
        <td>  <input type="text" name="TRAVELLER" id="TRAVELLER"  value="<?php echo $nameofuser; ?> " readonly="readonly"
        style="background-color:#fff; width:100%;"></td> 
      </tr>
      <tr>
        <td><b>Title</b></td>
        <td><input type="text"  name="TRAV_TITLE" id="TRAV_TITLE" value="<?php echo $desc; ?> " readonly="readonly"
        style="background-color:#fff; width:100%;">  </td> 
      </tr>
      <tr>
        <td><b>Activity</b></td>
        <td><textarea name="ACTIVITY"  id="ACTIVITY"  required="required" style="background-color:#fff; width:100%; height:20px;"></textarea>  </td> 
      </tr> 
      
      <tr>
        <td><b>Project</b></td>
        <td><input type="text"  name="PROJECT" id="PROJECT"  required="required" style="background-color:#fff; width:100%;">  </td> 
      </tr>
      <tr>
        <td><b>Contact</b></td>
        <td><input type="alphanumeric"  name="TRAV_CONTACT" id="TRAV_CONTACT" required="required" style="background-color:#fff; width:100%;">  </td> 
      </tr>
       <tr>
        <td><b>Budget line</b></td>
        <td><input type="text"  name="TRAV_BUDGETCODE" id="TRAV_BUDGETCODE" readonly="readonly" style="background-color:#f9f9f9; width:100%;">  </td> 
      </tr>
    </tbody>
  </table> 

    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; ">Date requested</th>
        <th style="border-bottom-color:white; text-align:center;">Date needed by</th>
        <th style="border-bottom-color:white; text-align:center;">Travel date</th>
        <th style="border-bottom-color:white; text-align:center;">Return date</th>  
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td><input type="date"  name="REQUESTDATE" id="REQUESTDATE" value="<?php echo date('d-m-y'); ?>"   
        style=" text-align:center; background-color:#fff;width:100%;"></td>
        <td><input type="date"  name="DATENEEDED" id="DATENEEDED"  placeholder="dd /mm /yyyy" required="required" 
        style="text-align:center; background-color:#fff; width:100%;"></td>  
        <td><input type="date"  name="TRAVELDATE" id="TRAVELDATE"   placeholder="dd /mm /yyyy" required="required"
         style="text-align:center; background-color:#fff; width:100%;"></td>
         <td><input type="date"  name="RETURNDATE" id="RETURNDATE" placeholder="dd /mm /yyyy"  required="required"
          style="text-align:center; background-color:#fff; width:100%;"></td>
      </tr>
    </tbody>
  </table>             

   <table class="table table-striped" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>Please show all calculations below</th> 
      </tr>
      </thead>
      <tbody> 
    </tbody>
  </table>
       
    <table class="table table-striped" id="mytable11111" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:46%;">Location</th>
   <th style="width:18%; text-align:center;">Per diem rate</th>
   <th style="width:18%; text-align:center;">No. of nights</th>
   <th style="width:18%; text-align:center;">Amount</th>
      </tr>
      </thead>
      <tbody> 
    </tbody>
  </table>
  
     <input type="button" onClick="addRow166111('mytable11111')" value="Add" />
     <input type="button" onClick="deleteRow166111('mytable11111')" value="(Delete)" />
     <input type="hidden" id="mytable_rows11111" value="0">
     
     <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"></th>
        <th style="border-bottom-color:white; width:50%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> </td>
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-6"> Total per diem</label>
                    <div class="col-sm-6">
                        <input type="text" id="TOTALPERDIEM" name="TOTALPERDIEM" class="form-control" readonly="readonly" 
                        style=" font-weight:bold; font-size: 14px; width:100%; background-color:#fff;text-align:right;"/>
                    </div>
                 </div>
               <!-- /.form-group --></td> 
      </tr>  
    </tbody>
  </table> 
     
   <table class="table table-striped" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>Other additional advance requirements</th> 
      </tr>
      </thead>
      <tbody> 
    </tbody>
  </table>
   
     <table class="table table-striped" id="mytable111112" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:80%;">Additional requirement</th> 
   <th style="width:20%; text-align:center;">Amount</th>
      </tr>
      </thead>
      <tbody> 
    </tbody>
  </table>
  
     <input type="button" onClick="addRow1661112('mytable111112')" value="Add" />
     <input type="button" onClick="deleteRow1661112('mytable111112')" value="(Delete)" />
     <input type="hidden" id="mytable_rows111112" value="0">     

       <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"></th>
        <th style="border-bottom-color:white; width:50%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> </td>
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-6"> Additional cost</label>
                    <div class="col-sm-6">
                        <input type="text" id="ADDITIONALCOST" name="ADDITIONALCOST" class="form-control" readonly="readonly" 
                        style=" font-weight:bold; font-size: 14px; width:100%; background-color:#fff;text-align:right;"/>
                    </div>
                 </div>
               <!-- /.form-group --></td> 
      </tr>  
    </tbody>
    </table>          
            
      <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"></th>
        <th style="border-bottom-color:white; width:50%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> </td>
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-6"> Total payment</label>
                    <div class="col-sm-6">
                        <input type="text" id="TOTALTRAVELPAYMENT" name="TOTALTRAVELPAYMENT" class="form-control" readonly="readonly" 
                        style=" font-weight:bold; font-size: 14px; width:100%; background-color:#fff; text-align:right;"/>
                    </div>
                 </div>
               <!-- /.form-group --></td> 
      </tr>  
    </tbody>
    </table>           
            
   <table class="table table-bordered ">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
        <th style="border-bottom-color:white;font-weight:bold; width:50%; text-align:center;">Send to: </th>
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"></th>  
         
      </tr>
    </thead>   
    <tbody>
      <tr>
        <td style="background-color:#f9f9f9;"></td>
        
        <td style="background-color:#f9f9f9;">
        <select name="SENDADVANCETO" id="SENDADVANCETO"  required="required" style="width:100%; text-align:center;">
                  ddd     = "<?php   echo $stss; ?>"; 
                  </select></td>  
        
        <td style="background-color:#f9f9f9;"> </td>  
    </tr> 
    </tbody>
    </table> 
    <input type="submit" name="button" id="button" value="Save" />
         </form>
     

        <div class="col-sm-12" >

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic travel form, no signature is required </p>
 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                  <div class="col-lg-12">
                        <div class="modal" id="timesheet" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog31">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body" style="background-color:#fff; height:1110px;">
 
                                        <div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:13px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br>  <br>  

          <center> <p style="color:#000; font-weight:bold;font-size:12px;">STAFF TIMESHEET </p> </center>
<hr>
            <form class="form-horizontal" style="height:auto;">
            
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="inputEmail3" class="control-label col-sm-4">Employee name</label>
                    <div class="col-sm-8">
                        <input type="text" id="EMPLOYEENAME" name="EMPLOYEENAME"    class="form-control">
                    </div>
                 </div>  
                  
                    <div class="form-group">
                    <label for="inputEmail3" class="control-label col-sm-4">ID number</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="IDNUMBER" name="IDNUMBER"  style="text-transform:uppercase;font-size: 11px;"/>
                    </div> </div> 
               <!-- /.form-group -->
 
               <div class="form-group">
                    <label for="inputEmail3" class="control-label col-sm-4">Position</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="EMPLOYEEPOSITION" name="EMPLOYEEPOSITION" data-placement="top" 
                    style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div>
                </div>  
                
                

                <div class="col-sm-6">  
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Supervisor</label>
                    <div class="col-sm-8">
                 <input type="text"class="form-control"  id="SUPERVISOR" name="SUPERVISOR"  placeholder="Name" style="text-transform:uppercase;font-size: 11px;"/> 
                 </div>
                 </div>  
                   
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Position</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"  name="SUPERVISORPOSITION" id="SUPERVISORPOSITION"  style="font-size: 11px; "/>
                    </div>
                 </div>
                 </div>  
                <!-- /.form-group -->
               <div class="col-lg-12">    
            <table class="table table-bordered">
    <thead>
      <tr  class="">
        <th>Department</th>
        <th>Month</th>
        <th>Year</th> 
      </tr>
    </thead>
    <tbody>
      <tr> 
        <td><select class="form-control" name="DEPARTMENT"id="DEPARTMENT" style="width:100%; text-align:left;">
                                <option value="N/A"> </option>
                                <option>FINANCE AND ADMINISTRATION</option>
                                <option>ADVOCACY AND RESEARCH</option>
                                <option>SERVICE DELIVERY</option>
                                </select></td>
        <td><input type="text" name="FISCALMONTH" id="FISCALMONTH"  value="<?php echo date("m");?>"  style="width:100%; text-align:center;"></td>
        <td><input type="text" name="FISCALYEAR" id="FISCALYEAR" value="<?php echo date("Y");?>" style="width:100%; text-align:center;"></td>
      </tr> 
      </tr>
    </tbody>
  </table>
   </div>
   <br>
   <div class="col-lg-4">
   
   <div id="calendar" style="width: 100%"></div>
   
   </div>
   <div class="col-lg-8">
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> Add hours worked</p>
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff;"> 
    <thead>
      <tr  class=" ">
         <th>16 </th>
         <th>17</th>
         <th>18</th>
         <th>19 </th>
         <th>20</th>
         <th>21</th>
         <th>22 </th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td><select class="form-control" name="D16" id="D16"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

        <td><select class="form-control" name="D17" id="D17"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
                                
       <td><select class="form-control" name="D18" id="D18"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
                                
         <td><select class="form-control" name="D19" id="D19"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

       <td><select class="form-control" name="D20" id="D20"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

       <td><select class="form-control" name="D21" id="D21"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" name="D22" id="D22"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
      </tr>
      <tr>
         <th>23</th>
         <th>24</th>
         <th>25 </th>
         <th>26</th>
         <th>27</th>
         <th>28 </th>
         <th>29</th>
      </tr>
      <tr>
          <td><select class="form-control" name="D23" id="D23"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" name="D24" id="D24"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" name="D25" id="D25"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" name="D26" id="D26"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" name="D27" id="D27"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

            <td><select class="form-control" name="D28" id="D28"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" name="D29" id="D29"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

      </tr>
      <tr>
         <th>30</th>
         <th>31 </th> 
         <th>1</th>
         <th>2</th>
         <th>3</th>
         <th>4 </th>
         <th>5</th>
      </tr>
       <tr>
         <td><select class="form-control" name="D30" id="D30"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

        <td><select class="form-control" name="D31" id="D31"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
        <td><select class="form-control" name="D1" id="D1"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

        <td><select class="form-control" name="D2" id="D2"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" name="D3" id="D3"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" name="D4" id="D4"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" name="D5" id="D5"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
        </tr>
      <tr>
         <th>6</th>
         <th>7 </th>
         <th>8</th>
         <th>9</th>
         <th>10 </th>
         <th>11</th>
         <th>12</th>
      </tr>
       <tr>
         <td><select class="form-control" name="D6" id="D6"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
           <td><select class="form-control" name="D7" id="D7"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
         <td><select class="form-control" name="D8" id="D8"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" name="D9" id="D9"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" name="D10" id="D10"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" name="D11" id="D11"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" name="D12" id="D12"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
        
        </tr>
      <tr>
        <th>13 </th>
         <th>14</th>
         <th>15</th>
         <th>Total</th> 
         <th>% </th>
         <th></th>
         <th></th>
      </tr>
       <tr>
        <td><select class="form-control" name="D13" id="D13"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

     <td><select class="form-control" name="D14" id="D14"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

     <td><select class="form-control" name="D15" id="D15"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

     <td> </td>
     <td> </td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table> 
  </div>
  
   
  <div class="col-lg-8" style="font-weight:normal;">
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> Summary of days not worked</p>
   
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff; font-weight:normal;">
         <thead>
         <th>DESCRIPTION </th>
         <th>SYMBOL</th>
         <th>TOTAL</th>
         </thead>
      <tbody>
      <tr>
        <th>Public holiday</th>
        <td style="text-align:center;">PH</td>
        <td style="text-align:center;">  </td>
    </tr>
    <tr>
    <tr>

        <th>Saturday and Sunday</th>
        <td style="text-align:center;"> W</td>
         <td style="text-align:center;">  </td>
        </tr>
    <tr>
    <tr>

        <th>Not worked</th>
        <td style="text-align:center;"> 0</td>
         <td style="text-align:center;">  </td>
 </tr>
    <tr>
    <tr>
    
 <th>General Administration</th>
        <td style="text-align:center;">GA</td>
         <td style="text-align:center;">  </td>
    </tr>
    <tr>
    <tr>

        <th>Staff Development</th>
        <td style="text-align:center;"> SD</td>
        <td style="text-align:center;">  </td>
        </tr>
    <tr>
    <tr>

        <th>Sick Leave</th>
        <td style="text-align:center;"> SL</td>
         <td style="text-align:center;">  </td>
</tr>
    <tr>
    <tr>  
        <th>Annual Leave</th>
        <td style="text-align:center;">AL</td>
         <td style="text-align:center;">  </td>
    </tr>
    <tr>
    <tr>

        <th>Maternity leave</th>
        <td style="text-align:center;"> ML</td>
        <td style="text-align:center;">  </td>
        </tr>
     </tbody>
  </table>
   </div>
 
  <div class="col-lg-4" style="font-weight:normal;">
  <p style="font-weight:bold; text-align:center; text-transform:uppercase;"> Time sheet results</p>
  <p style="text-align:center; font-family:lcd; font-size:120px;">
  00
  </p>
   
  </div>

   <div class="col-lg-12">
   <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>
   
   <div class="col-lg-6"> 
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Supervisor</label>
                    <div class="col-sm-8">
                        <input type="text" id="SUP_COMMENT" name="SUP_COMMENT"  placeholder="Comment"  class="form-control">
                    </div>
                 </div> 
                <!-- /.form-group -->
 
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Signature</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="blob" id="SUP_SIGNATURE" name="SUP_SIGNATURE" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div> 
               </div>
               <!-- /.form-group -->
 
               <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="SUP_RECDATE" name="SUP_RECDATE" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div>
                </div>  
                <!-- /.form-group -->
   
   
   <div class="col-lg-6">
    
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Administrator</label>
                    <div class="col-sm-8">
                        <input type="text" id="ADMIN_COMMENT" name="ADMIN_COMMENT"  placeholder="Comment"  class="form-control">
                    </div>
                 </div> 
                <!-- /.form-group -->
 
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Signature</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="blob" id="ADMIN_SIGNATURE" name="ADMIN_SIGNATURE" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div> 
               <!-- /.form-group -->
 
               <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="ADMIN_RECDATE" name="ADMIN_RECDATE" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div>
                </div>  
                <!-- /.form-group -->
   </div>
    
        <div class="col-sm-12" >

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic form, Signatory fields are auto generated in the official processing for certication. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div> 
                                       
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


            <div class="col-lg-12">
                        <div class="modal fade" id="leaveform" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"  style="text-align:center;"id="H1">  </h4>
                                        </div>
                                        <div class="modal-body">
<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> 

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> LEAVE / ABSENCE APPLICATION FORM </legend> </center>



            <P style="text-align:left;">This form should be completed for all types of leave / absences and should submitted for approval before the leave/absence is taken. Staff are requested to fill in the relevant sections of this form according to the type of leave/absence to be taken </P>

               <P style="text-align:left; font-weight:bold;"> (1). APPLICANT DETAILS</P>

                <form class="form-horizontal" style="height:auto;">

                <div class="col-sm-4">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="DATECREATED" name="DATECREATED"  value="<?php echo date('d-m-y'); ?>"  class="form-control"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">ID No.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="IDNUMBER" name="IDNUMBER" data-placement="top" required="required"                         style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


                <div class="col-sm-8">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-3">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  id="EMPLOYEENAME" name="EMPLOYEENAME"  required="required"
                        style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Title</label>
                    <div class="col-sm-9">
                   <input type="text" class="form-control"   name="POSITION" id="POSITION" data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;"/>
                   </div>
                </div>
                <!-- /.form-group -->
                </div>  
 
              <br> <br>
              
                <div class="col-sm-4">
                <P style="text-align:left; font-weight:bold; margin-left: -15px;"> (2). TYPE OF LEAVE (Tick appropriately)</P>
               <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="ANNUAL LEAVE" checked>
                                 Annual leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="SICK LEAVE">
                                 Sick leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="MATERNITY LEAVE">
                                   Maternity leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="PATERNITY LEAVE" >
                                   Paternity leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="STUDY LEAVE">
                                   Study leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="COMPASSIONATE LEAVE" >
                                    Compassionate leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                        </div>
                    </div> 
                    <!-- /.row -->
 
                    <div class="col-sm-8">
                    <P style="text-align:left; font-weight:bold; margin-left: -15px;"> (3). LEAVE DURATION</P>
                    
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">Commencement date</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control"   name="COMMENCEMENTDATE" id="COMMENCEMENTDATE"
                    placeholder="dd /mm/ yyyy" data-placement="top" required="required"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div> 
                    <!-- /.form-group -->
 
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">End date</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control"   name="ENDDATE" id="ENDDATE" required="required" data-placement="top" placeholder="dd /mm/ yyyy"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->

                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">Total number of days to be spent on leave.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="REQUIREDLEAVEDAYS" id="REQUIREDLEAVEDAYS" required="required" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>  
                <!-- /.form-group -->
 
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">Days entitled to in a year.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="DAYS_ENTITLEDINYEAR" id="DAYS_ENTITLEDINYEAR" value="22" data-placement="top" readonly
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group --> 
 
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">Total entitled days before taking on this leave.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="DAYSBEFORE_LEAVE" id="DAYSBEFORE_LEAVE"   required="required" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->  
 
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">Total days to be taken according to this application.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="DAYSTOBE_TAKEN" id="DAYSTOBE_TAKEN" required="required" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
                
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">Balance due.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="BALANCEDUE" id="BALANCEDUE"  data-placement="top" readonly
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group --> 
            </div> 
               
            <br>
            <p style="text-align:left; font-weight:bold;">(4).ABSENCE REQUEST  (To be filled if an employee is requesting for hour(s) off) </p>

            <div class="col-sm-4">
            <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Absence date</label>
                    <div class="col-sm-8">
                    <input type="numeric" class="form-control"   name="ABSENCEDATE" id="ABSENCEDATE"  placeholder="dd /mm /yyyy" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div> </div>
                <!-- /.form-group -->

             <div class="col-sm-4">
             <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Request duration</label>
                    <div class="col-sm-8">
                    <input type="numeric" class="form-control"   name="REQUESTDURATION" id="REQUESTDURATION"  placeholder="hours" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
             </div>

              <div class="col-sm-4">
            <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Hours worked</label>
                    <div class="col-sm-8">
                    <input type="numeric" class="form-control"   name="HOURSWORKED" id="HOURSWORKED"  placeholder="Total" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
            </div> 
            
            <br> 
            <label>Reason for absence </label>
                    <div class="switch switch-blue"> 
					<input type="radio" class="switch-input" name="REASONFORABSENCE" value="SICK" id="SICK">
					<label for="SICK" class="switch-label switch-label-off">Sick</label>
					<input type="radio" class="switch-input" name="REASONFORABSENCE" value="BEREAVEMENT" id="BEREAVEMENT">
					<label for="BEREAVEMENT" class="switch-label switch-label-off">Bereavement</label>
					<span class="switch-selection"></span></div>
			 	 
  
                    <label for="pass1">Others (Specify)</label>
                    <div class="form-group">
                    <div class="col-sm-12">
                    <input type="numeric" class="form-control"   name="OTHER_REASON" id="OTHER_REASON"  placeholder="hours" data-placement="top"
                    style="font-size: 11px; text-align:left;"/>
                    </div>
                    </div>
                <!-- /.form-group --> 
                    
  <p style="text-align:left; font-weight:bold;">(5).SUGGESTED SUBSTITUTE(S) </p>

  <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>Department</th>
         <th>Substitute's Name</th>
         <th>Supervisor's Authorization</th>
         <th>Departmental Head's approval</th>
         </thead>
    <tbody>
      <tr>
         <tr>
         <th><select class="form-control" name="DEPARTMENT"id="DEPARTMENT" required="required" style="width:100%; text-align:center;">
                                <option value="1"> </option>
                                <option>S D</option>
                                <option>A & R</option>
                                <option>F & A</option>
                                </select>
                                </th>
        <td><input type="text" name="SUBSTITUTENAME" id="SUBSTITUTENAME"   style="width:100%; text-align:left;">
           <input type="text" name="" id="" placeholder="Signature" readonly style="width:100%; text-align:center;background-color:#eee;">
        </td>

        <td><input type="text" name="AUTHORISEDBY" id="AUTHORISEDBY" readonly  style="width:100%; text-align:left; background-color:#eee;">
           <input type="text" name="" id="" placeholder="Signature" readonly style="width:100%; text-align:center;background-color:#eee;">
        </td>

        <td><input type="date" name="APPROVEDBY" id="APPROVEDBY"  readonly   style="width:100%; text-align:left;background-color:#eee;">
        <input type="text" name="" id="" placeholder="Signature"  readonly style="width:100%; text-align:center;background-color:#eee;">
        </td>
     </tr>
        </tr>
     </tbody>
  </table>
  
          <br>
            <div class="col-sm-5">
  <p style="text-align:left; font-weight:bold;">(6). APPROVAL </p>

  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Applicants signature</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="APPLICANT_STAMP" id="APPLICANT_STAMP" placeholder="Auto" data-placement="top" readonly
                    style="font-size: 11px; text-align:left;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
  </div>

  <div class="col-sm-7">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Approved by</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="FINALAPPROVAL" id="FINALAPPROVAL" placeholder="FIN & ADMIN" data-placement="top" readonly
                    style="font-size: 11px; text-align:left;"/>
                    </div>
                    </div></div>
                <!-- /.form-group -->
<div class="col-sm-7">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Signature</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="FINALAPP_TIMESTAMP" id="FINALAPP_TIMESTAMP"  data-placement="top" readonly
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div></div>
                <!-- /.form-group -->
<div class="col-sm-7">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Date</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="FINALAPPROVALDATE" id="FINALAPPROVALDATE" placeholder="dd /mm /yyyy" data-placement="top" readonly
                    style="font-size: 11px; text-align:left;"/>
                    </div>
                    </div>
                <!-- /.form-group -->

        </div>
        <div class="col-sm-12">
        <br>
        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic form, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div>


                                        </div>
                                        <div class="modal-footer"> 
                                       </div>
                                    </div>
                                </div>
                            </div>
                         </div>


          <div class="col-lg-12">
                        <div class="modal fade" id="handover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2"> </h4>
                                        </div>
                                        <div class="modal-body">

                                           <form role="form">
                                        <div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

 <div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br>  

          <center> <p style="color:#000000; font-weight:bold;font-size:12px;">HANDOVER / CLEARANCE FORM</p> </center>

            <form class="form-horizontal" style="height:auto;"> 
            
                <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">EMPLOYEE NAME</label>
                    <div class="col-sm-8">
                       <input type="date" name="NAMEOFPERSON" id="NAMEOFPERSON" class="form-control"> 
                    </div>
                 </div>
               </div>
               <!-- /.form-group -->
                <div class="col-sm-12"> 
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">POSITION</label>
                    <div class="col-sm-8">
                    <input type="text" name="POSITION" id="POSITION" class="form-control"> 
                    </div>
                 </div>
               </div>
                <!-- /.form-group --> 

                <div class="col-sm-12">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">DEPARTMENT</label>
                    <div class="col-sm-8">
                     <select class="form-control"  name="DEPARTMENT_HV" id="DEPARTMENT_HV"data-placement="top" style="font-size: 11px;"/>
                                <option value="1"> </option>
                <option value="ADVOCACY AND RESEARCH">ADVOCACY AND RESEARCH</option>
                <option value="FINANCE AND ADMINISTRATION">FINANCE AND ADMINISTRATION</option>
                <option value="SERVICE DELIVERY">SERVICE DELIVERY</option>
                </select> 
                    </div>
                  </div>
               </div>
               <!-- /.form-group -->

              <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">DATE OF EMPLOYMENT</label>
                    <div class="col-sm-8">
                       <input type="date" name="DATEOFEMPLOYMENT" id="datepicker" class="form-control"> 
                    </div>
                 </div>
               </div>
                <!-- /.form-group --> 
                 <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">End of services with NTIHC effective from </label>
                    <div class="col-sm-4">
                    <input class="form-control" type="date" id="ENDOFSERVICE" name="datepicker" value="<?php echo date('d-m-y'); ?>"  style="font-size: 11px;"/>
                    </div>
                  </div>
                </div>  
                <!-- /.form-group --> 
                
                
                 <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-7" style="font-weight:bold;">1. DEPARTMENTAL MANAGER/SUPERVISOR  </label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                
                  <div class="col-sm-12">
                  <div class="form-group">
                                            <label style="margin-left: 15px;">Have official documents and materials been handed in?</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="DOCUMENTSHANDIN" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="DOCUMENTSHANDIN" id="YES" value="YES" />YES
                                            </label> 
                                        </div>
                
                   
                 <div class="form-group">
                    <label style="margin-left: 15px;">What official equipment, machines, furniture, etc have been surrendered? </label>
                    <div class="col-sm-12">
                    <input type="date" name="EQUIPMENTSURRENDERED" id="EQUIPMENTSURRENDERED" class="form-control"> 
                 </div>
                 </div> 
                 <!-- /.form-group -->
                 
                  
                  <div class="form-group">
                                            <label style="margin-left: 15px;">Has a comprehensive handover report been submitted? </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="COMPREHENSIVEHANDOVER" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="COMPREHENSIVEHANDOVER" id="NO" value="YES" />YES
                                            </label> 
                                        </div>
                
                   
                 <div class="form-group">
                    <label style="margin-left: 15px;">Remarks:  </label>
                    <div class="col-sm-12">
                    <input type="date" name="HANDOVERREMARKS" id="HANDOVERREMARKS" class="form-control"> 
                 </div>
                 </div> 
                 <!-- /.form-group -->
                 
                  
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">DEPARTMENTAL HEAD</label> 
                 </div>
                
                <!-- /.form-group -->   
                 <div class="col-sm-12"> 
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="DEPARTMENTALHEAD" id="DEPARTMENTALHEAD" placeholder=" " readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="DEPARTMENTALSIGN" id="DEPARTMENTALSIGN" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="DEPARTMENTALDATE" id="DEPARTMENTALDATE" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>
</div> 

       
   <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-7" style="font-weight:bold; margin-left: -14px;">2. FINANCE AND ACCOUNTS DEPARTMENT  </label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                  
                  <div class="form-group">
                                            <label style="margin-left: 15px;">ADVANCES: Has personal account been cleared of outstanding advances or 
                                            any other debit balance? </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="DEBITBALANCECLEARED" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="DEBITBALANCECLEARED" id="NO" value="YES" />YES
                                            </label> 
                                        </div>
                                        
                 <div class="form-group">
                    <label style="margin-left: 15px;">Remarks:  </label>
                    <div class="col-sm-12">
                    <input type="date" name="DEBITREMARKS" id="DEBITREMARKS" class="form-control"> 
                 </div>
                 </div> 
                 <!-- /.form-group -->                       
                                        
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">FINANCE AND ACCOUNTS DEPARTMENT</label> 
                 </div>
                
                <!-- /.form-group -->   
                 <div class="col-sm-12"> 
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="FIN_ACCOUNTSHEAD" id="FIN_ACCOUNTSHEAD" placeholder=" " readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="FIN_ACCOUNTSSIGN" id="FIN_ACCOUNTSSIGN" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="FIN_ACCOUNTSDATE" id="FIN_ACCOUNTSDATE" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>
</div>                         
                
        <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-7" style="font-weight:bold; margin-left: -14px;">3. ADMINISTRATION DEPARTMENT </label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                  
                  <div class="form-group">
                                            <label style="margin-left: 15px;">Has staff complied with employment contract requirements? </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="EMP_CONTRACT_REQUIREMENT" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="EMP_CONTRACT_REQUIREMENT" id="NO" value="YES" />YES
                                            </label> 
                                        </div>
                                        
                   <div class="form-group">
                                            <label style="margin-left: 15px;">Has the official identity card been surrendered? </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="ID_SURRENDERED" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="ID_SURRENDERED" id="NO" value="YES" />YES
                                            </label> 
                                        </div>    
                                        
                   <div class="form-group">
                                            <label style="margin-left: 15px;">Has the exit form and interview been completed?  </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="EXIT_INTERVIEWSTATUS" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="EXIT_INTERVIEWSTATUS" id="NO" value="YES" />YES
                                            </label> 
                                        </div>                         
                                        
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">ADMINISTRATION MANAGER</label> 
                 </div>
                
                <!-- /.form-group -->   
                 <div class="col-sm-12"> 
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="ADMINMANAGER" id="ADMINMANAGER" placeholder=" " readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="ADMINMANAGERSIGN" id="ADMINMANAGERSIGN" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="ADMINMANAGERDATE" id="ADMINMANAGERDATE" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>
</div>               
           
           
            <div class="col-sm-12">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold; margin-left: -14px;">CERTIFICATE</label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold; margin-left: 0px;">I certify that the above named person has satisfied all requirements has no further obligation to the organization and is now cleared to be paid his/her outstanding benefits and dues. </label> 
                  </div>
                </div> 
                <!-- /.form-group --> 
                
                 
                 <div class="col-sm-12">
                 <div class="form-group">
                 <label for="pass1" class="control-label col-sm-7" style="font-weight:bold; margin-left: 0px;">4. APPROVAL </label> 
                 </div> 
                 <!-- /.form-group -->  
                
                 <div class="form-group">
                                            <label style="margin-left: 15px;">Clearance accepted and employee released.  </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="ACCEPTANCE_RELEASED" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="ACCEPTANCE_RELEASED" id="NO" value="YES" />YES
                                            </label> 
                                        </div>                         
                                        
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">PROGRAMME DIRECTOR</label> 
                 </div>
                
                <!-- /.form-group -->   
                 <div class="col-sm-12"> 
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="PDNAME" id="PDNAME" placeholder=" " readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="PDSIGN" id="PDSIGN" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="PDDATE" id="PDDATE" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>
</div>                    
                            
                   <div class="form-group">
                    <label for="pass1" class="control-label col-sm-12" style="font-weight:bold;">5.	STAFF MEMBER’S ACCEPTANCE </label> 
                 </div>
                 
              <div class="form-group">
                                            <label style="margin-left: 15px;">I do agree with the contents of this handover form as a true record of my status at the time of separation with NTIHC.  </label>
                                            <label class="radio-inline" style="margin-left: 15px;">
                                                <input type="radio" name="STAFF_ACCEPTANCE" id="NO" value="NO" checked="NO" />NO
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="STAFF_ACCEPTANCE" id="NO" value="YES" />YES
                                            </label> 
                                        </div>      
                 
                
                <!-- /.form-group -->   
                 <div class="col-sm-12"> 
                <table class="table table-bordered">
    <thead>
      <tr  class=" "> 
        <th style="text-align:left;">NAME</th>
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><input type="date" name="" id="" placeholder="" readonly class="form-control" 
                       style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                       
        <td><B><input type="text" name="" id="" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="" id="" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>
</div>  
 
                  
            <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Telephone contact</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="TELEPHONECONTACT" id="TELEPHONECONTACT" data-placement="top" readonly
                    style="font-size: 11px; text-align:left;"/>
                    </div> 
                <!-- /.form-group -->
  </div>      
                                           
                                    
             <div class="col-sm-12">
             <br> 
         
  

                </div>

        <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic form, Signatory fields are auto generated in the official processing by the administrators. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div>


                                        </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                    
                    
                    
                    <div class="col-lg-12">
                        <div class="modal fade" id="exitint" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2"> </h4>
                                        </div>
                                        <div class="modal-body">

                                           <form role="form">
                                        <div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

 <div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br>  

          <center> <p style="color:#000000; font-weight:bold;font-size:12px;">EXIT INTERVIEW FORM (Confidential)</p> </center>

            <form class="form-horizontal" style="height:auto;"> 
            
                <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">EMPLOYEE NAME</label>
                    <div class="col-sm-8">
                       <input type="date" name="NAMEOFPERSON" id="NAMEOFPERSON" class="form-control"> 
                    </div>
                 </div>
               </div>
               <!-- /.form-group -->
                <div class="col-sm-12"> 
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">JOB TITLE</label>
                    <div class="col-sm-8">
                    <input type="text" name="POSITION" id="POSITION" class="form-control"> 
                    </div>
                 </div>
               </div>
                <!-- /.form-group --> 

               <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">LENGTH OF SERVICE</label>
                    <div class="col-sm-8">
                       <input type="alphanumeric" name="LENGTHOFERVICE" id="LENGTHOFSERVICE" class="form-control"> 
                    </div>
                 </div>
               </div>
                <!-- /.form-group -->   

              <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">CURRENT SUPERVISOR</label>
                    <div class="col-sm-8">
                       <input type="text" name="CURRENTSUPERVISOR" id="CURRENTSUPERVISOR" class="form-control"> 
                    </div>
                 </div>
               </div>  
                
                  <div class="col-sm-12">
                  <br> 
                  <div class="col-sm-12">
                  <div class="form-group">
                  <label>1) Can you tell me why you decided to leave NTIHC? </label>
                  <textarea class="form-control " name="REASON_FOR_LEAVE_DECISION" rows="1" required="required" placeholder="Enter ..."> </textarea>
                  </div>
                  <!-- textarea -->
                  <div class="form-group">
                  <label>2)	Was this an easy or difficult decision? </label>
                  <textarea class="form-control " name="EASY_DIFFICULT_DECISION" rows="1" required="required" placeholder="Enter ..."></textarea>
                  </div>
                  <!-- textarea -->
                   
                  <div class="form-group">
                  <label>3) What are your plans?  </label>
                  <textarea class="form-control " name="EMPLOYEE_PLANS" rows="1" required="required" placeholder="Enter ..."></textarea>
                  </div>
                  <!-- textarea -->
                  
                  <div class="form-group">
                  <label>4)	How would you characterize your experience at NTIHC in general?  </label>

                  <textarea class="form-control " name="XTICS_OF_EMPLOYEE_EXPERIENCE" rows="1" required="required" placeholder="Enter ..."></textarea>
                  </div>
                  <!-- textarea -->
                  <div class="form-group">
                  <label>5) What are the high points of your experience working at NTIHC?  </label>
                  <textarea class="form-control " name="HIGHPOINTS" rows="1" required="required" placeholder="Enter ..."></textarea>
                  </div>
                  <!-- textarea -->
                  <div class="form-group">
                  <label>6)	What are the low points of your experience working at NTIHC?   </label>
                  <textarea class="form-control " name="LOWPOINTS" rows="1" required="required" placeholder="Enter ..."></textarea>
                  </div>
                  <!-- textarea -->
                  
                  <div class="form-group">
                  <label>7)	Is there anything NTIHC would have done differently to make you decide to stay? – please explain  </label>
                  <textarea class="form-control " name="ANYTHING_WOULD_HAVE_BEEN_DONE" rows="2" required="required" placeholder="Enter ..."></textarea>
                  </div>
                  <!-- textarea -->
                  
                  <div class="form-group">
                  <label>8)	Would you like to add any other comments that will help us retain other valuable employees in future?  </label>
                  <textarea class="form-control " name="ANYOTHER_COMMENT" rows="1" required="required" placeholder="Enter ..."></textarea>
                  </div>
                  <!-- textarea --> 
                  
                  </div>   
                 <div class="col-sm-12"> 
                <table class="table table-bordered">
    <thead>
      <tr  class=" ">  
        <th style="text-align:left;">SIGNATURE</th>
        <th style="text-align:left;">DATE</th>
      </tr>
    </thead>
    <tbody>
      <tr> 
                       
        <td><B><input type="text" name="EXITSTAFFSIGN" id="EXITSTAFFSIGN" class="form-control" readonly 
                    style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
                    
        <td><B><input type="text" name="EXITCREATEDDAT" id="EXITCREATEDDATE" class="form-control" readonly
                     style="border-left-color: transparent; border-top-color: transparent;border-right-color: transparent; width:100%;"> </B></td>
         </tr>
    </tbody>
  </table>
</div>                
             <div class="col-sm-12">
             <br> 
         
  

                </div>

        <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic form, Signatory fields are auto generated. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div>


                                        </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
   
                    
       <div class="col-lg-12">
                      <div class="modal" id="bookVehicle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog3">
                                    <div class="modal-content">
                                    <div class="modal-header" style="background-color:red;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br>  

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> TRANSPORT BOOKING</legend> </center>

            <form class="form-horizontal" style="height:auto;">
                <div class="col-sm-5">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">RSV Date</label>
                    <div class="col-sm-8">
                        <input type="date" id="datepicker" name="RSVDATE"  value="<?php echo date('d-m-y'); ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->
 
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">PF No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="PFILENUMBER" name="PFILENUMBER" required="required" data-placement="top" style="text-transform:uppercase;font-size: 11px; "/>
                    </div>
                </div>
                <!-- /.form-group -->
                
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="PHONECONTACT" name="PHONECONTACT" data-placement="top" required="required" style="text-transform:uppercase;font-size: 11px;  "/>
                    </div>
                </div>  
                <!-- /.form-group --></div>


               <div class="col-sm-7">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Full name</label>
                    <div class="col-sm-8">
                        <input type="text" id="APPLICANTNAME" name="APPLICANTNAME" required="required" class="form-control"
                         style="font-size: 11px;">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                        <select class="form-control"  name="DEPARTRMENT" data-placement="top" style="font-size: 11px; "/>
                                <option value="1"> </option>
                <option value="ADVOCACY AND RESEARCH">ADVOCACY AND RESEARCH</option>
                <option value="FINANCE AND ADMINISTRATION">FINANCE AND ADMINISTRATION</option>
                <option value="SERVICE DELIVERY">SERVICE DELIVERY</option>
                </select>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Book type</label>
                    <div class="col-sm-8">
                        <select class="form-control"  name="BOOKTYPE" id="BOOKTYPE"data-placement="top" style="font-size: 11px;"/>
                                <option value="PICK AND DROP">PICK AND DROP</option>
                <option value="ROUND TRIP">ROUND TRIP</option> 
                </select>
                    </div>
                </div>
                <!-- /.form-group -->
                </div>
                 
         <div class="col-sm-12">
                <div class="form-group"> 
                    <div class="col-sm-12">
                       <textarea id="wysihtml6" name="PURPOSE" rows="4" placeholder="Purpose of travel" required="required" class="form-control"></textarea>  
                    </div>
                </div>
                <!-- /.form-group -->
                
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> From</label>
                    <div class="col-sm-8">
                        <input type="text" id="DEPARTURE" name="DEPARTURE" value="HEAD QUARTER" class="form-control" style=" font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group --> 
                

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Destination</label>
                    <div class="col-sm-8">
                        <input type="text" id="DESTINATION" name="DESTINATION" class="form-control" style=" font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
               </div>
                
               <div class="col-sm-6">
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Start time</label>
                    <div class="col-sm-8">  
                             <div class="input-group bootstrap-timepicker"> 
                             <span class="input-group-addon add-on"><i class="icon-time"></i></span>
                                <input class="form-control timepicker-default" type="text" name="STARTTIME" placeholder="00:00" /> 
                            </div>
 
                    </div>
                 </div>
               <!-- /.form-group --> </div>
               
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> End time</label>
                    <div class="col-sm-8">
                    <div class="input-group bootstrap-timepicker">
                    <span class="input-group-addon add-on"><i class="icon-time"></i></span>
                   <input class="form-control timepicker-default" type="text" id="ENDTIME" name="ENDTIME" placeholder="00:00" /> 
                            </div> 
                    </div>
                 </div>
               <!-- /.form-group --> 
                </div>
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Prefered vehicle</label>
                    <div class="col-sm-8">
                    <select class="form-control" id="VEHICLECATEGORY" name="VEHICLECATEGORY"  data-placement="top" style="font-size: 11px; "/>
                                <option value="PICKUP /DC">PICKUP /DC</option>
                                <option value="MIN BUS">MIN BUS</option> 
                                <option value="STATION WAGON">STATION WAGON</option>
                                <option value="SALOON">SALOON</option> 
                </select>
                    </div> 
                 </div>
               <!-- /.form-group --> </div>
               
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Passengers</label>
                    <div class="col-sm-8">
                        <input type="numeric" id="PASSENGERS" name="PASSENGERS" class="form-control" placeholder="Number like: 1, 2, 4" style="font-size: 11px; text-align:center;"/>
                    </div>
                 </div>
               <!-- /.form-group --> 
               
               
              </div>
            <br>
            <div class="col-sm-12">   

        <p style="text-transform: ; text-align:left; font-weight:bold;"> 

         </form>
         <input type="submit" name="button" id="button" value="Make a reservation" />
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


            <div class="col-lg-12">
                        <div class="modal fade" id="hireVehicle" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"  style="text-align:center;"id="H1">  </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> 

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> VEHICLE HIRE VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">
                <div class="col-sm-5">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Hire date</label>
                    <div class="col-sm-7">
                        <input type="text" id="DATECREATED" name="DATECREATED"  value="<?php echo date('d-m-y'); ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Vehicle No.</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" id="HIREDVEHICLENUMBER" name="HIREDVEHICLENUMBER" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-7">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Hired from</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  id="SERVICEPROVIDER" name="SERVICEPROVIDER" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>  
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Contact(s)</label>
                    <div class="col-sm-8">
                    <input type="text"  class="form-control"  name="SERVICEPROVIDERCONTACT" id="SERVICEPROVIDERCONTACT"data-placement="top" style="font-size: 11px; "/> 
                    </div>
                </div>
                <!-- /.form-group -->
                </div>
                
         <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Requesting officer</label>
                    <div class="col-sm-8">
                        <input type="text" id="REQUESTINGOFFICER" name="REQUESTINGOFFICER" class="form-control" style="font-size: 12px; font-weight:bold; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Title</label>
                    <div class="col-sm-8">
                        <input type="text" id="TITLE" name="TITLE" class="form-control" style=" font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
               
               <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                        <select class="form-control"  name="HO_DEPARTRMENT" id="HO_DEPARTRMENT"data-placement="top" style="font-size: 11px;"/>
                                <option value="1"> </option>
                <option value="ADVOCACY AND RESEARCH">ADVOCACY AND RESEARCH</option>
                <option value="FINANCE AND ADMINISTRATION">FINANCE AND ADMINISTRATION</option>
                <option value="SERVICE DELIVERY">SERVICE DELIVERY</option>
                </select>
                    </div>
                </div> 
               
               <div class="form-group"> 
                    <div class="col-sm-12">
                       <textarea id="wysihtml6" name="PURPOSE" rows="4" placeholder="Purpose of travel" class="form-control"></textarea>  
                    </div>
                </div>
                <!-- /.form-group --> 
               
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> From</label>
                    <div class="col-sm-8">
                        <input type="text" id="STARTJOURNEY" name="STARTJOURNEY" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
               
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Destination</label>
                    <div class="col-sm-8">
                        <input type="text" id="DESTINATION_HV" name="DESTINATION_HV" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
                
              </div> 

            <div class="col-sm-12">
            <br>

          <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th style="text-align:left;">VEHICLE CAPACITY </th>
         <th style="text-align:center;">NO. OF PASSENGERS</th>
         <th style="text-align:center;">START MILEGE </th>
         <th style="text-align:center;">END MILEAGE</th>
         <th style="text-align:center;">MILEAGE COVERED</th>
         <th style="text-align:center;">DAYS TAKEN</th>
 
         </thead>
      <tbody>
      <tr>
        <td><input type="text" name="VEHICLECAPACITY" id="VEHICLECAPACITY"  required="required" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="NOOFPASSENGERS" id="NOOFPASSENGERS"  required="required"  style="width:100%; text-align:center;"></td>
        <td><input type="text" name="STARTMILEGE" id="STARTMILEGE"  required="required" placeholder="KM" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="ENDMILEAGE" id="ENDMILEAGE"   required="required" placeholder="KM" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="MILEAGECOVERED" id="MILEAGECOVERED"  readonly  style="width:100%; text-align:center;"></td>
        <td><input type="text" name="DAYSTAKEN" id="DAYSTAKEN"  value="1" style="width:100%; text-align:center;"></td>
        
        
        </tr>
     </tbody>
  </table>
  
  <B>
  
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th style="text-align:left;">VEHICLE CATEGORY </th>
         <th style="text-align:center;">RATE TYPE</th>
         <th style="text-align:center;">START TIME </th>
         <th style="text-align:center;">END TIME</th>
         <th style="text-align:center;">TOTAL HOURS</th> 
 
         </thead>
      <tbody>
      <tr>
        <td><input type="text" name="VEHICLECATEGORY" id="VEHICLECATEGORY"  required="required" style="width:100%; text-align:center;"></td>
        <td><select name="RATETYPE" id="RATETYPE" style="width:100%; text-align:center;">
        <option value="NEGOTIATED"> NEGOTIATED</option>
        <option>PER HOUR</option>
        <option>PER KM</option>
        </select> 
        </td>
        <td><input type="text" name="START_TIME" id="START_TIME"  required="required" placeholder="00:00" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="END_TIME" id="END_TIME"   required="required" placeholder="00:00" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="TOTALHOURS" id="TOTALHOURS"  readonly  placeholder="Auto" style="width:100%; text-align:center;"></td> 
         
        </tr>
     </tbody>
  </table>
  </div>
  
   <div class="col-sm-12">
   <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Amount</label>
                    <div class="col-sm-8">
                        <input type="text" id="HIRECOST" name="HIRECOST" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group --> 
                
            <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>


  <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         <th>Signatory</th>
         <th>Date</th>
         </thead>
    <tbody>
      <tr>
         <tr>
         <th>Approved by</th>
        <td><input type="text" name="APPROVEDBY" id="APPROVEDBY"  readonly  style="width:100%; text-align:left;"></td>
        <td><input type="date" name="APPROVEDDATE" id="APPROVEDDATE"  readonly="readonly" placeholder="dd /mm/ yyyy"  style="width:100%; text-align:center;"></td>
     </tr>
    <tr>

    <tr>
        <th>Recieved by</th>
        <td><input type="text"  class="form-control" name="RECIEVEDBY"id="RECIEVEDBY"  placeholder="Amount" readonly  style="width:100%; text-align:left;">
                                </td>
        <td><input type="date" class="form-control" id="RECIEVEDDATE" name="RECIEVEDDATE" readonly placeholder="dd /mm/ yyyy" style="width:100%; text-align:center;">


                                </td>
     </tr>
        </tr>
     </tbody>
  </table>

                </div>

        <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic voucher, Signatory fields are auto generated in the official processing by the  approver. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div>


                                        </div>
                                        <div class="modal-footer"> 
                                       </div>
                                    </div>
                                </div>
                            </div>
                         </div>


          <div class="col-lg-12">
                        <div class="modal fade" id="fuelRequests" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2"> </h4>
                                        </div>
                                        <div class="modal-body">

                                           <form role="form">
                                        <div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:18px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:15px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:15px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> <br>  

          <center> <legend style="color:#000; font-weight:bold;font-size:15px;">FUEL AND LUBRICANTS REQUISTION</legend> </center>

            <form class="form-horizontal" style="height:auto;">


                <div class="col-sm-3">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Date</label>
                    <div class="col-sm-7">
                       <input type="date" name="CREATEDDATE" id=">datepicker" value="<?php echo date('d-m-y'); ?>" class="form-control"> 
                    </div>
                 </div>
               </div>
                <!-- /.form-group -->

                <div class="col-sm-5">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                     <select class="form-control"  name="DEPARTRMENT_FR" id="DEPARTRMENT_FR"data-placement="top" style="font-size: 11px; text-align:center;"/>
                                <option value="1"> </option>
                <option value="ADVOCACY AND RESEARCH">ADVOCACY AND RESEARCH</option>
                <option value="FINANCE AND ADMINISTRATION">FINANCE AND ADMINISTRATION</option>
                <option value="SERVICE DELIVERY">SERVICE DELIVERY</option>
                </select> 
                    </div>
                  </div>
               </div>
               <!-- /.form-group -->

               <div class="col-sm-4">
               <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Initiated by</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="INITIATEDBY" name="INITIATEDBY" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div>
                </div> 
                <!-- /.form-group --> 
            
             <div class="col-sm-12">
             <br> 
     <input type="button" onClick="addRow9('mytable6')" value="Add fuel" />
     <input type="button" onClick="deleteRow9('mytable6')" value="(Delete)" />
     <input type="hidden" id="mytable_rows6" value="0">
      <br> <br>  

  <table class="table table-striped" id="mytable6" style="font-weight:normal;">
    <thead>
      <tr>
      <th>*</th>
   <th>REG NUMBER</th>
   <th>PRODUCT</th> 
   <th>LUBRICANT </th> 
   <th>QUANTITY</th>
   <th>PURPOSE</th>
   <th>ODO READING</th>
   <th>RECEIPIENT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  </div>
                 
   <script>
  function addRow9(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;
	   
     var  s1a = '<input type="text" name="REGISTRATIONNO[]" id="REGISTRATIONNO_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width: 100%;">';

	 var  s2b =  '<select name="PRODUCT[]" required="required"  id="PRODUCT_'+rowCount+'"'+
                'style= " margin-left:0px; width: 100%; background-color:#fff;" >'+
					                    '<option>DIESEL</option>'+
             		                    '<option>PETROL</option>'+ 
                                        '</select>'; 
										
	 var  s2b1 =  '<select name="LUBRICANT[]" id="LUBRICANT_'+rowCount+'"'+
                'style= " margin-left:0px; width: 100%; background-color:#fff;" >'+
					                    '<option>N/A</option>'+
             		                    '<option>GREASE</option>'+ 
										'<option>ENGINE OIL</option>'+ 
                                        '</select>'; 

    var  s3c =  '<input type="numeric" name="LITRE[]" id="LITRE_'+rowCount+'"  required="required" '+
                'style= " margin-left:0px; width: 100%; background-color:#fff;text-align:center;" >';
				
    var  s4d =  '<input type="numeric" name="PURPOSEOFCONSUMPTION[]" id="PURPOSEOFCONSUMPTION_'+rowCount+'"  required="required" '+
                'style= " margin-left:0px; width: 100%; background-color:#fff;" >';

    var  s5e =  '<input type="numeric" name="CURRENTODOREADING[]" id="CURRENTODOREADING_'+rowCount+'" '+
                'style= " margin-left:0px; width: 100%; background-color:#fff; text-align:center;" >';
				
     var  s6f =  '<input type="text" name="DRIVER[]" id="DRIVER_'+rowCount+'"  required="required" '+
                'style= " margin-left:0px; width: 100%; background-color:#fff;" >';

    
	        var row      = table.insertRow(rowCount);
			var row6     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
								  '<td>'+s2b1+' </td>'+
								  '<td>'+s3c+' </td>'+
	                              '<td>'+s4d+' </td>'+
								  '<td>'+s5e+' </td>'+ 
				                  '<td>'+s6f+' </td>';
			      row.innerHTML = row6;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows6').value=rowCount;

  }
   

  function deleteRow9(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="REGISTRATIONNO_"+x;
          table.rows[x].cells[2].childNodes[0].id="PRODUCT_"+x;
		  table.rows[x].cells[3].childNodes[0].id="LUBRICANT_"+x;
		  table.rows[x].cells[4].childNodes[0].id="LITRE_"+x;
          table.rows[x].cells[5].childNodes[0].id="PURPOSEOFCONSUMPTION_"+x;
		  table.rows[x].cells[6].childNodes[0].id="CURRENTODOREADING_"+x; 
		  table.rows[x].cells[7].childNodes[0].id="DRIVER_"+x;
          }
           document.getElementById('mytable_rows6').value=rowCount-1;
}

  </script>
             
  <div class="col-lg-12">
   <br>
  <P style="font-size:14px;">FOR OFFICIAL USE</P>
  <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         <th>Recommendation</th>
         <th>Signatory</th>
         <th>Date</th>
         </thead>
    <tbody>
      <tr>
        <tr>
        <th>Authorised by</th>
        <td><input type="text" name="AUTHORISERCOMMENT" id="AUTHORISERCOMMENT" readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="text" name="AUTHORISERNAME" id="AUTHORISERNAME" readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="date" name="AUTHORISEDDATE" id="AUTHORISEDDATE" readonly="readonly" placeholder="dd /mm/ yyyy"  style="width:100%; text-align:center;background-color:#eee;"></td>
     </tr>
     <tr>

     <tr>
        <th>Approved by</th>
        <td><input type="text" name="APPROVERCOMMENT" id="APPROVERCOMMENT"  readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="text"  class="form-control" name="APPROVERRNAME"id="APPROVERRNAME"  readonly  style="width:100%; text-align:left;background-color:#eee;">
                                </td>
        <td><input type="date" class="form-control" id="APPROVEDDATE1" name="APPROVEDDATE1" readonly placeholder="dd /mm/ yyyy" style="width:100%; text-align:center; background-color:#eee;">

                                </td>
     </tr>
        </tr>
     </tbody>
  </table>

                </div>

        <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic form, Signatory fields are auto generated in the official processing by the approver and the administrator. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div>


                                        </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                    
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="procuremento" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog10">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logsbig.PNG" width="100%" height="100%">
</div> 

        <center> <p style="color:#000; font-weight:bold;font-size:13px;"> <b>REQUEST FOR APPROVAL OF PROCUREMENT</b> </p> </center> 

         <form class="form-horizontal" action="procreqn_processor.php" method="POST">
 
         <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:center;">PART 1: REQUEST BY USER DEPARTMENT FOR APPROVAL OF PROCUREMENT METHOD</th>
               </tr>
            <tr>
            </tbody>
            </table>
            
   <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Procurement Reference Number </th>
               </tr>
            <tr>
            </tbody>
            </table>
             
        <table class="table table-bordered" style="font-weight:normal;">
    <thead>
      <tr  class="  "> 
              <th style="border-bottom-color:white; width:20%;">Code of procuring and Disposing Entity</th>
              <th style="border-bottom-color:white; width:30;">Supplies / Works / Non-consultancy services</th>
              <th style="border-bottom-color:white; width:20%;">Financial year</th>
              <th style="border-bottom-color:white; width:30;">Sequence number</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><input type="text" name="PDECODE" id="PDECODE" value="NTIHC"  readonly="readonly" style="width:100%; text-align:center;"></td>
              <input type="hidden" name="DATECREATED" id="DATECREATED" />
              <td><select name="CATEGORY"id="CATEGORY" style="width:100%; text-align:left;">
                                <option value="SPLS">SUPPLIES</option>
                                <option value="WRKS">WORKS</option> 
                                <option value="SRVCS">NON CONSULTANCY SERVICES</option>
                                </select></td>

              <td><input type="text" name="FINANCIALYEAR" id="FINANCIALYEAR" readonly="readonly" 
              style="width:100%; text-align:center; background-color:#f0f0f0;"></td>

              <td><input type="text" name="SEQUENCENUMBER" id="SEQUENCENUMBER" readonly="readonly" 
              style="width:100%; text-align:center;background-color:#f0f0f0;"></td>
            </tr>
            <tr>
            </tbody>
            </table> 
      
           <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Particulars of Procurement</th>
               </tr>
            <tr>
            </tbody>
            </table>
 
  
   <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:33.333333333%;"></th>
        <th style="border-bottom-color:white; width:66.666666666%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr> 
        <td><b>Subject of procurement</b></td>
        <td><textarea name="SUBJECTOFPROCUREMENT" required="required" style="background-color:#fff; width:100%; height:18px;"></textarea>  </td> 
      </tr> 
    </tbody>
  </table> 
  
    <table class="table table-bordered ">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Procurement plan reference </th>
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Location for delivery</th>
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Date required</th> 
         
               
      </tr>
    </thead>   
    <tbody>
      <tr>
        <th style="width:25%;"><input type="text"  name="PROCUREMENTPLANREF" id="PROCUREMENTPLANREF" readonly="readonly"  
        style="width:100%;font-weight:bold; background-color:#f0f0f0;"></th>
        
        <th style="width:25%;"><textarea   name="LOCATIONFORDELIVERY" id="LOCATIONFORDELIVERY"  required="required"
        style="width:100%; text-align:left; height:18px; "></textarea></th>
        
        <td style="width:30%;"><input type="date" name="DATEREQUIRED" id="DATEREQUIRED"  required="required"
        style="width:100%; text-align:center; height:18px; "></td>  
    </tr> 
    </tbody>
    </table> 
   
   <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Details relating to the Procurement</th>
               </tr>
            <tr>
            </tbody>
            </table>

        
       <table class="table table-bordered" id="mytable100">
    <thead>
      <tr  class="  ">  
      <th>*</th>
   <th style="width:50%;">DESCRIPTION  (Refer to specifications, terms of reference or scope of work)</th>
   <th style="width:18%;">UNIT OF MEASURE</th>
   <th style="width:10%; text-align:center;">QUANTITY</th>  
   <th style="width:10%; text-align:center;">RATE</th>
   <th style="width:12%; text-align:center;">AMOUNT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
        <input type="button" onClick="addRow16('mytable100')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable100')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">
        
     <br>
          <table class="table table-bordered" style="margin-top:-30px;">
    <thead>
      <tr  class="  "> 
         <th style="border-bottom-color:white;width:66.66666666%; "> </th>
        <th style="border-bottom-color:white; width:33.33333333%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td> </td>
        <td> <div class="form-group">
                                            <label class="control-label col-sm-4"><b>TOTAL COST (UGX)</b></label>
                                            <div class="col-sm-8">
                                                <input type="numeric" name="SUBTOTAL" id="SUBTOTAL"  style="width:100%; text-align:right;">
                                        </div>
                                        </div> 
                                        </td> 
										<input type="hidden" name="TAX" id="TAX" >
										<input type="hidden" name="TOTALCOST" id="TOTALCOST" >
      </tr>
    </tbody>
  </table>  
             
            
         <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:33.33333333%; ">(1) Request for procurement </th>
        <th style="border-bottom-color:white; width:33.33333333%;"> </th> 
        <th style="border-bottom-color:white; width:33.33333333%;"> (2) Confirmation of request</th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td>  
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="RFPUSERNAME" id="RFPUSERNAME" value="<?php echo $nameofuser; ?> "  readonly >
                </div>
                </div> 

 
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="RFPSIGNATURE" name="RFPSIGNATURE" readonly/>
                </div>
                </div> 
                  <input type="hidden" id="INITIATORDEPT" name="INITIATORDEPT"  readonly value="<?php echo $dept; ?>"/>
              
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="RFPTITLE" name="RFPTITLE" readonly value="<?php echo $desc; ?>"/>
                </div>
                </div> 
                 <input type="hidden" class="form-control" id="RFPFILENUMBER" name="RFPFILENUMBER" value=" <?php echo $pf; ?>"/>
                  
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="RFPDATE" name="RFPDATE" readonly value="<?php echo date('d-m-y'); ?>" />
                </div>
                </div>
                
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;"> </label>
                <div class="col-sm-8">
                <input type="hidden" class="form-control" id="RFPDEPARTMENT" name="RFPDEPARTMENT" value="<?php echo $dept; ?>"/>
                </div>
                </div>
        </td>  
        <td> </td>
        <td>    <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="CORNAME" id="CORNAME" placeholder="Head of user department" readonly="readonly">
                </div>
                </div> 
 
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="CORSIGNATURE" name="CORSIGNATURE" readonly="readonly"/>
                </div>
                </div> 
 
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="CORTITLE" name="CORTITLE" readonly="readonly"/>
                </div>
                </div> 
 
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="CORDATE" readonly="readonly" name="CORDATE"/>
                </div>
                </div>  </td> 
      </tr>
    </tbody>
  </table>     
  
  
    <table class="table table-bordered">Availability of funds to be confirmed prior to approval by Accounting Officer 
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:10%;"> Code number</th> 
        <th style="border-bottom-color:white; width:30%;"> Budget line </th>
        <th style="border-bottom-color:white; width:28%;"> Programme</th> 
        <th style="border-bottom-color:white; width:20%;"> Sub programme</th> 
        <th style="border-bottom-color:white; width:12%;"> Remaining on budget</th> 
      </tr>
    </thead>   
    <tbody>
      <tr>   
              <td><input type="text" name="VOTE_HEADNO" id="VOTE_HEADNO"  readonly="readonly"  style="width:100%; text-align:left; background-color:#f0f0f0;"></td>

              <td><input type="text" name="PROGRAMME"id="PROGRAMME" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"> </td>

              <td><input type="text" name="SUBPROGRAMME" id="SUBPROGRAMME" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"></td> 
                
              <td><input type="text" name="ITEM" id="ITEM" readonly="readonly" style="width:100%; text-align:left;background-color:#f0f0f0;"></td> 
               
              <td><input type="text" name="BALANCEREMAINING" id="BALANCEREMAINING" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"></td>
            </tr>
            <tr>
            </tbody>
          </table>
          

         <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:33.33333333%; ">(3) Confirmation of funding and approval to procure </th>
        <th style="border-bottom-color:white; width:33.33333333%;"> </th> 
        <th style="border-bottom-color:white; width:33.33333333%;">  </th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td>  
                
            
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="AONAME" id="AONAME" placeholder="Accounting Officer" readonly="readonly">
                </div>
                </div> 
                
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="AOSIGNATURE" name="AOSIGNATURE" readonly="readonly"/>
                </div>
                </div> 
                
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="AOTITLE" name="AOTITLE" readonly="readonly"/>
                </div>
                </div> 
                
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="AODATE" readonly="readonly" name="AODATE"/>
                </div>
                </div> 
        </td>  
        <td> </td>
        <td> </td>
         </tr>
    </tbody>
  </table>  

                
     <table class="table table-bordered">Procurement Threshold 
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:15%;"> Order serial No.</th> 
        <th style="border-bottom-color:white; width:30%;">Preferred method of procurement</th> 
        <th style="border-bottom-color:white; width:30%;">Reason </th> 
        <th style="border-bottom-color:white; width:15%;">Officer allocated</th>
         
      </tr>
    </thead>   
    <tbody>
      <tr>   
              
              <td><input type="text" name="REQUISITIONID" id="REQUISITIONID" value=" <?php echo uniqid();?>" readonly="readonly" style="width:100%; text-align:left;background-color:#f0f0f0;"></td>
              
              <td><input type="text" name="THRESHOLD" id="THRESHOLD"  readonly="readonly"  style="width:100%; text-align:left; background-color:#f0f0f0;"></td>

              <td><input type="text" name="THRESHOLDREASON" id="THRESHOLDREASON" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"> </td>

              <td><input type="text" name="SUBPROGRAMME" id="SUBPROGRAMME" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"></td>
 
            </tr>
            <tr>
            </tbody>
          </table>           
                  
                 
<table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:center;">NOTE: <b>Signatory fields are autogenerated in the official processing of this document.</th>
               </tr>
            <tr>
            </tbody>
            </table>
             
<br>
<table class="table table-bordered ">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
        <th style="border-bottom-color:white;font-weight:bold; width:50%; text-align:center;">Send to: </th>
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"></th>  
         
      </tr>
    </thead>   
    <tbody>
      <tr>
        <td style="background-color:#f9f9f9;"></td>
        
        <td style="background-color:#f9f9f9;">
        <select name="SENDTO" id="SENDTO"  required="required" style="width:100%; text-align:center;">
                  ddd     = "<?php   echo $stss; ?>"; 
                  </select></td>  
        
        <td style="background-color:#f9f9f9;"> </td>  
    </tr> 
    </tbody>
    </table> 
<br>

 <center> <input type="submit" name="button" id="button" value="Save Order " style= " font-size:15px; font-weight:bold; border-radius:11px; "/> </center>
  </form>
  

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                   <!----/-----start models---------->  
                    
            
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="storereqn" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
                                        <div class="modal-body">
<div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logsbig.PNG" width="100%" height="100%">
</div>  
        <center> <p style="color:#000; font-weight:bold;font-size:13px;"> REQUISITION FOR DRUGS AND SUPPLIES</p> </center>

        <form class="form-horizontal" action="storereq_process.php" method="POST">

 <table class="table table-bordered">
      <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:33.3333333333%;"> </th>
        <th style="border-bottom-color:white; width:33.333333333%; "> </th> 
         <th style="border-bottom-color:white; width:33.3333333333%;"> </th> 
      </tr>
    </thead>
    <tbody>
      <tr>   
        <td> <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Requisition date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="myDOCNUMBER" name="DOCNUMBER" value="<?php echo date('d-m-y'); ?>" data-placement="top" 
                        style=" font-size: 11px; text-align:left;"/>
                    </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Requisition No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE" readonly data-placement="top" 
                        style="font-size: 11px; text-align:left;"/>
                    </div>
                </div>
                <!-- /.form-group --> 
        </td> 
        
        <td> 
        
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Requesting unit</label>
                    <div class="col-sm-8">
                        <input class="form-control"  data-placement="top" style="border:0px;"/>
                      
                    </div>
                </div>
              <!-- /.form-group -->  
              
              <div class="form-group"> 
                    <div class="col-sm-12">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"  data-placement="top" 
                        style="font-size: 11px; text-align:left;"/>
                      
                    </div>
                </div>
              <!-- /.form-group -->
              
        </td>
        
        <td> </td>
      
      </tr>
    </tbody>
  </table>     


 <table class="table table-striped" id="mytable111" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
        <th style="width:60%;">DESCRIPTION</th>
        <th style="width:10%;">QTY IN-STOCK</th>  
        <th style="width:10%;">QTY NEEDED</th>    
        <th style="width:20%;">UNIT OF MEASURE</th> 
            
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  
     <input type="button" onClick="addRow1666('mytable111')" value="Add" />
     <input type="button" onClick="deleteRow1666('mytable111')" value="(Delete)" />
     <input type="hidden" id="mytable_rows111" value="0">
     <br><br>
 <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:bold; width:25%; text-align:center;">Requested by </th>
        <th style="border-bottom-color:white;font-weight:bold; width:25%; text-align:center;">Authorised by</th>  
        <th style="border-bottom-color:white;font-weight:bold; width:25%; text-align:center;">Approved by </th>
        <th style="border-bottom-color:white;font-weight:bold; width:25%; text-align:center;">Issued by</th>    
      </tr>
    </thead>
    <tbody>
        <tr>
        <td style="width:25%;"> 
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"   id="ISSUANCEDATE" name="ISSUANCEDATE" value="<?php echo $nameofuser; ?>" data-placement="top" 
                         readonly ="readonly" style="font-size: 11px; text-align:left; background-color:#fff;"/>
                        
                    </div>
                </div>
                <!-- /.form-group -->
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  id="ISSUANCEDATE" name="ISSUANCEDATE" value="<?php echo $desc; ?>" data-placement="top" 
                         readonly ="readonly" style="font-size: 11px; text-align:left; background-color:#fff;"/>
                       
                    </div>
                </div>
                <!-- /.form-group -->   
       <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"   id="ISSUANCEDATE" name="ISSUANCEDATE" value="<?php echo $dept; ?>" data-placement="top" 
                         readonly ="readonly" style="font-size: 11px; text-align:left; background-color:#fff;"/>
                        
                    </div>
                </div>
                <!-- /.form-group -->
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">PF number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"   id="ISSUANCEDATE" name="ISSUANCEDATE" value="<?php echo $pf; ?>" data-placement="top" 
                        readonly ="readonly"  style="font-size: 11px; text-align:left; background-color:#fff;"/>
                       
                    </div>
                </div>
                <!-- /.form-group -->   
        </td>  
        <th style="width:25%;">
        <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"   data-placement="top" 
                         readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                        
                    </div>
                </div>
                <!-- /.form-group -->
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"   data-placement="top" 
                        readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                       
                    </div>
                </div>
                <!-- /.form-group -->   
       <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"   data-placement="top" 
                        readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                        
                    </div>
                </div>
                <!-- /.form-group -->
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">PF number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"  data-placement="top" 
                        readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                       
                    </div>
                </div>
                <!-- /.form-group -->   
        </th> 
        
        </td>  
        <th style="width:25%;">
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"   data-placement="top" 
                       readonly ="readonly"  style="font-size: 11px; text-align:left;"/>
                        
                    </div>
                </div>
                <!-- /.form-group -->
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"   data-placement="top" 
                        readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                       
                    </div>
                </div>
                <!-- /.form-group -->   
       <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"   data-placement="top" 
                        readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                        
                    </div>
                </div>
                <!-- /.form-group -->
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">PF number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"  data-placement="top" 
                        readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                       
                    </div>
                </div>
                <!-- /.form-group -->   
        </th> 
        
        </td>  
        <th style="width:25%;">
        <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"   data-placement="top" 
                        readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                        
                    </div>
                </div>
                <!-- /.form-group -->
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"   data-placement="top" 
                       readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                       
                    </div>
                </div>
                <!-- /.form-group -->   
       <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"   data-placement="top" 
                        readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                        
                    </div>
                </div>
                <!-- /.form-group -->
         <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">PF number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" type="text" id="ISSUANCEDATE" name="ISSUANCEDATE"  data-placement="top" 
                        readonly ="readonly" style="font-size: 11px; text-align:left;"/>
                       
                    </div>
                </div>
                <!-- /.form-group -->   
        </th> 
        
    </tbody>
    </table>  
 
     <table class="table table-bordered ">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
        <th style="border-bottom-color:white;font-weight:bold; width:50%; text-align:center;">Send to: </th>
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"></th>  
         
      </tr>
    </thead>   
    <tbody>
      <tr>
        <td style="background-color:#f0f0f0;"></td>
        
        <td style="background-color:#f0f0f0;">
        <select name="SENDSTOREEQTO" id="SENDSTOREEQTO"  required="required" style="width:100%; text-align:center;">
                  ddd = "<?php   echo $stss; ?>"; 
                  </select></td>  
        
    <td style="background-color:#f0f0f0;"> </td>  
    </tr> 
    </tbody>
    </table> 
        <center> <input type="submit" name="button" id="button" value="Save" /> </center> 
 
        <div class="col-sm-12">
         </form> 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                         
   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="usermanual" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> User Manual</h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br><br><br><br><br><br>
 

            <form class="form-horizontal" style="height:auto;">

<p style="text-align:center; font-family:lcd; font-size:20px;"> Pending for ongoing modular integration</p>


           <div class="col-sm-12">
         </form> 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                  
                    
                     

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
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div>
    <strong>Copyright &copy; 2017  <b>Naguru Teenage Information and Health Center  . All rights reserved.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading"> </h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <div class="menu-info">



              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading"> </h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">

            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


<script src="../assets/lib/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->

     
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>


 <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[5].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="uom[]" id="uom_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';			 

	 var  s3cc = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="numeric" name="escost[]" id="escost_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';

     var  s7gg = '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'" onkeyup="calcsubtt(\'mytable100\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';
		 

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
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
		  table.rows[x].cells[1].childNodes[0].id="desc_"+x;
		  table.rows[x].cells[2].childNodes[0].id="uom_"+x;
          table.rows[x].cells[3].childNodes[0].id="qty_"+x; 
		  table.rows[x].cells[5].childNodes[0].id="escost_"+x;
		  table.rows[x].cells[6].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
   <!-- /.END PROCUREMENT REQUISITION  SCRIPT -->

   <!-- /.START IMPREST REQUEST SCRIPT -->

     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("TOTALSUM").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="impdescription[]" id="impdescription_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	 var  s2b =  '<select name="impcurrency[]" required="required"  id="impcurrency_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="impdebit[]" id="impdebit_'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow166(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="impdescription_"+x;
          table.rows[x].cells[2].childNodes[0].id="impcurrency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="impdebit_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

  <!-- /.END IMPREST REQUEST SCRIPT -->

      
  <!-- /.START TRAVEL SCRIPT -->
       <script>
	 
	 function calPdiem(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("TOTALPERDIEM").value = ''+sum;
	 
	 }
	 
	 
  function addRow166111(tableId){
     var  s1a11 = '<input type="text" name="lcnn[]" id="lcnn_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	   var  s2a22 = '<input type="numeric" name="pdmn[]" id="pdmn_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';
	   
	    var  s3dda = '<input type="numeric" name="ndsn[]" id="ndsn_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	 var  s31c1 =  '<input type="numeric" name="ampdm[]" id="ampdm_'+rowCount+'" onkeyup="calPdiem(\'mytable11111\')" value="0"  '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
   

		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a11+' </td>'+
	                              '<td>'+s2a22+' </td>'+
								  '<td>'+s3dda+' </td>'+
				                  '<td>'+s31c1+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11111').value=rowCount;
		  
		  calPdiem(tableId);

  }

  function deleteRow166111(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="lcnn_"+x;
          table.rows[x].cells[2].childNodes[0].id="pdmn_"+x;
		  table.rows[x].cells[3].childNodes[0].id="ndsn_"+x;
		  table.rows[x].cells[4].childNodes[0].id="ampdm_"+x;
          }
           document.getElementById('mytable_rows11111').value=rowCount-1;
		   calPdiem(tableId);
}

  </script>
  
     <script>
	 
	 function caladdin(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[2].childNodes[0].value);
		   }
		   document.getElementById("ADDITIONALCOST").value = ''+sum;
	 
	 }
	 
	 
  function addRow1661112(tableId){
     var  s1a112 = '<input type="text" name="reqret[]" id="reqret_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+ 'background-color:#fff; width:100%;">';
   

	 var  s31c12 =  '<input type="numeric" name="adtncot[]" id="adtncot_'+rowCount+'" onkeyup="caladdin(\'mytable111112\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
   

		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a112+' </td>'+ 
				                  '<td>'+s31c12+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows111112').value=rowCount;
		  
		 caladdin(tableId);

  }

  function deleteRow1661112(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="reqret"+x;
          table.rows[x].cells[2].childNodes[0].id="adtncot_"+x; 
          }
           document.getElementById('mytable_rows111112').value=rowCount-1;
		   caladdin(tableId);
}

  </script>
  <!-- /.END TRAVEL SCRIPT --> 
  
    

<!-- /.START DRUGS AND SUPPLIES REQUEST SCRIPT --> 
     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("TOTALSUM").value = ''+sum;
	 
	 }
	 
	 
  function addRow1666(tableId){
     var  sss1 = '<input type="text" name="DESCPN[]" id="DESCPN_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+
	  'background-color:#fff; width:100%;">';

	 var  sss2 = '<input type="text" name="INSTO[]" id="INSTO_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+   'background-color:#fff; width:100%;">'; 

	 var  sss3 = '<input type="text" name="NEEDE[]" id="NEEDE_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+  'background-color:#fff; width:100%;">';
				
	 var  sss4 = '<input type="text" name="UOM2[]" id="UOM2_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+  'background-color:#fff; width:100%;">'; 
				 
	   
		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+sss1+' </td>'+
	                              '<td>'+sss2+' </td>'+
								  '<td>'+sss3+' </td>'+ 
				                  '<td>'+sss4+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows111').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow1666(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="DESCPN_"+x;
          table.rows[x].cells[2].childNodes[0].id="INSTO_"+x;
		  table.rows[x].cells[3].childNodes[0].id="NEEDE_"+x;
		  table.rows[x].cells[1].childNodes[0].id="UOM2_"+x; 
          }
           document.getElementById('mytable_rows111').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

  <!-- /.END DRUGS AND SUPPLIES REQUEST SCRIPT -->
       
<?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
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
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:'myfile'
		}
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

		{extend :'pdf',
		 title:'myfile'
		}
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
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' X'
		},
		{extend :'pdf',
		 title:'X '
		},
		{extend :'print',
		 title:' X'
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

<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
    padding: 8px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}


	  {
                 border-bottom: 2px solid #000;
                 color:#000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 10px;
             	color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
             }
    </style>
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid black;
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
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <?php echo $pf; ?>  &nbsp;&nbsp;&nbsps
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                     <div class="pull-left">
                      </div>


                  </li>
                  <!-- end message -->

                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>

                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->

                  </li>
                  <!-- end task item -->

                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
              <li><a href="../logut.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
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
            <a href="procurement.php" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
            <span class="glyphicon glyphicon-user">Welcome</span>    
            <br> <br> 
          <a href="javascript:void(0)"><?php echo $nameofuser; ?>   </a>
           
          <p></p>
           
        </div>
      </div>
      <!-- search form --> 
      &nbsp;&nbsp;&nbsp;&nbsp <a href="javascript:void(0)">DEPT OF: &nbsp<?php echo $dept; ?>   </a> <p></p>  
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">ADMINISTRATION MODULE</li>
        <li class="active treeview">  
            <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Cash management</span>
            <span class="pull-right-container">
            <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu"> 

     <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModaltwentyfour" </button> </i>Imprest requisition</a></li>
     <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#buttonedModal "  </button> </i>Cash payment voucher</a></li> 
          </ul>
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
        <li>
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>Our wall</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">chk</small>
            </span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Other links</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="#"><i class="fa fa-circle-o"></i> Null</a></li>
               
          </ul>
        </li>
        
        <li class="treeview"> 
        </li>
        <li class="header">User Departments</li>
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
        <a href="javascript:void(0)"> TITLE: &nbsp<?php echo $desc; ?>   </a>  
        <small></small>
      </P>
      <ol class="breadcrumb">
        
        
        <li><a href=<button class="fa fa-circle-o text-red" data-toggle="modal"  data-target="#bookVehicle"></button></i> Book a vehicle</a></li>  
        <li><a href=<button class="fa fa-circle-o text-blue" data-toggle="modal"  data-target="#hireVehicle"></button></i> Vehicle hire voucher</a></li> 
        <li><a href=<button class="fa fa-circle-o text-green" data-toggle="modal"  data-target="#fuelRequests"></button></i> Fuel and lubricants</a></li>
        <li><a href=<button class="fa fa-circle-o text-yellow" data-toggle="modal"  data-target="#vehicleDefects"></button></i> Vehicle defect form</a></li>
        <li><a href="#"><i class="fa fa-th"></i>Accident form</a></li>   
        <li><a href=<button class="fa fa-circle-o text-red" data-toggle="modal"  data-target="#driverContacts"></button></i> Drivers contacts</a></li>
        <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#newMemo"></button></i> New memo</a></li>  
      </ol>

        <br>
   <!-- Main content -->
      <div class="row">
        <div class="col-md-3"> 
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"> </h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked"> 


              </ul>
            </div>
            <!-- /.box-body -->


          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"> </h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
               
              </ul>
            </div>
            <!-- /.box-body -->

            <!-- /.box-body -->

            </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"> </h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

                 
              </ul>
            </div>

            </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">  </h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

               
              </ul>
            </div>


          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->


        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="font-family:lcd;">NTIHC | FTL SUB SYSTEM</h3>

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
         <center> <img src="../assets/sysicons/fleet.png" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="home_ftl.php" class="small-box-footer">General <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/queue-512.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="home_ftl.php" class="small-box-footer">Drivers <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
         
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/icon f2images.jpg" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="home_ftl.php" class="small-box-footer">Fuel logs <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/svccimages.jpg" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="home_ftl.php" class="small-box-footer">Maintenance <i class=" "></i></a>
          </div>
        </div></div>
        <!-- ./col --> 

      <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/iffmages.png" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="home_ftl.php" class="small-box-footer">Accidents<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/insuranceimages.jpg" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="home_ftl.php" class="small-box-footer">Insurance <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        </div>
        <!-- ./col -->

              </div> </div></div></div> 

                <!-- /.col -->
                <div class="col-md-12">
                  <p class="text-center">
                    <!-- Calendar -->
          <div class="box box-solid bg-grey-gradient" style="background-color:#fff;">
            <div class="box-header">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title" style="color:#000000;">Transport and Logistics Unit</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="home_ftl.php"></a></li> 
                    <li class="divider"></li>
                    <li><a href="home_ftl.php"></a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->

                  <ul class="nav nav-tabs">
                
                  <ul class="nav nav-tabs">
                                <li class="active"><a href="#newmessages1" data-toggle="tab">Equipments</a>
                                </li> 
                                <li><a href="#drafts1" data-toggle="tab">Transport coordination trecker</a>
                                </li> 
                            </ul>

                            <div class="tab-content">
                               <div class="tab-pane fade in active" id="newmessages1"> 
                              
                               <div class="col-sm-5">
                               <div class="panel-body">
                                 <h4>Policy and Procedure Inclusive of Code of Practice</h4>  

      <p style="text-align:left;font-size:14px;color:#fb455f; font-weight:bold;">Vision </p> 
      
      <p style="text-align:left;font-size:13px;color:#000;"> To ensure that Fleet Management Unit provides an efficient and most cost-effective service for the supply of entity transport / coordination requirements to the various functional areas of the NTIHC's operational routes. </p>
      
       <p style="text-align:left;font-size:14px;color:#fb455f; font-weight:bold;">Mission </p>
      <p style="text-align:left;font-size:13px;color:#000;">The NTIHC’s fleet consists of only motor vehicles. </p>

          <p style="text-align:left;font-size:13px;color:#000;"> Driver and operator care in the daily use and basic maintenance of these equipment are extremely important. </p>
          
           <p style="color:#000; text-align:left; font-size:13px;">This affects the cost and reliability of the fleet operation.  reduced maintenance and less frustration to site supervisors.drivers and operators; all factors contributing to improved efficiencies and increased productivity within the various functional areas.</p>
           
           <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#newReg " style="color: #000000;border: 2px solid #000; text-align:center;"> </button> <i class="icon-lock icon-white"></i>Read more >> </a></li> 
                               </div></div>
                               
                                <div class="col-sm-7"> 
                                  <br><br>
                <div class="panel panel-default">              
                <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #ecf0f5;">

                                <div class="carousel-inner">
                                    <div class="item active">
                                    <img src="../assets/ftlimg/Slider02.png" width="814" height="450"  alt="" class="img-u image-responsive" />
                                   </div>
                                    <div class="item">
                                     <img src="../assets/ftlimg/Slider03.png" width="814" height="450" alt="" class="img-u image-responsive" />
                                    </div>
                                    <div class="item">
                                     <img src="../assets/ftlimg/Slider04.png" width="814" height="450"alt="" class="img-u image-responsive" />
                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>  </div>
                            </div>
                            <!-- /. ROW  -->
                            </div>
                            <div class="tab-pane fade" id="drafts1">
                                  

          <p style="color:#000; text-align:left; font-size:13px;"> Under integration</p>
         
    
                                    
                                     
                                </div> 
                            </div>
                      
                  </div></div>
                  <!-- /.btn-group -->


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
                                <li class="active"><a href="#home1" data-toggle="tab">Inbox |Rejected</a>
                                </li>
                                <li><a href="#profile1" data-toggle="tab">Outbox</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                            <div class="tab-pane fade in active" id="home1" style="background-color: #ffffff;">
                                <br>

	  <div id="work" style="width:100%; font-weight:normal;">
    <table id="example2" class="table table-striped table-bordered" width="100%" >
        <thead>
        <tr>
                     <th>ID</th>
                     <th>DATE</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th>
                     <th>SUBJECT OF PROCUREMENT </th>
                     <th>CATEGORY</th> 
                     <th>ESTIMATED-COST </th> 
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
        </tr>
        </tfoot>
        <tbody>
  

 <?php
include_once("config/inline/configproc.php");

$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE RFPDEPARTMENT ='ADVOCACY AND RESEARCH' AND CORACTION ='REJECTED' ORDER BY id DESC");
 
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['DATECREATED']."</td>";
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['RFPDEPARTMENT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['CATEGORY']."</td>"; 
		echo "<td>".$res['TOTALCOST']."</td>";  	
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

$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE RFPDEPARTMENT ='ADVOCACY AND RESEARCH' ORDER BY id DESC");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['CATEGORY']."***".$res['PROCUREMENTSTATUS']."***".$res['ITEM'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['RFPDEPARTMENT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['TOTALCOST']."</td>";
		echo "<td>".$res['CORACTION']."</td>";
		echo "<td>".$res['CORDATE']."</td>";
	    echo "<td>".$res['AOACTION']."</td>";
		echo "<td>".$res['PROCUREMENTSTATUS']."</td>";
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
            <p style="color:#ffffff; font-weight:bold;  font-size:20px; text-align:center;"> Dear: &nbsp<?php echo $nameofuser; ?>,  </p>
            <p style="color:#ffffff; font-weight:bold;  font-size:20px; text-align:center;"> Please contact the system admin for more information about
            authentication of user access levels</p>
            <p></p>
             <p style="color:red; font-weight:bold; font-size:40px; text-align:center;font-family:lcd;"> <?php echo date('Y-m-d'); ?></p>
             <p style="color:red; font-weight:bold; font-size:20px; text-align:center;">   
            <input type="text"  id="CHECKIN" name="CHECKIN"  readonly style=" border-bottom-style:none; border-left-style:none; border-right-style:none; 
            border-top-style:none; font-family:lcd; font-size:36px; font-weight:bold; background-color:#000000; text-align:center;">
             </p>
           <p></p> 
           
           <div class="col-sm-12">
           <div class="panel-body">
         </form>  
         </div>

                                        </div>
                                        <div class="modal-footer" style="background-color: red; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>

                   <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaltwo" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalthree" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalfour" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                   <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalfive" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                   <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalsix" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                   <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalseven" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaleight" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalnine" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalten" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaleleven" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaltwelve" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalthirteen" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalfourteen" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                   <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalfifteen" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalsixteen" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalseventeen" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaleighteen" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalninteen" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaltwenty" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">




           <div class="col-sm-12">
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

 <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaltwentyone" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog10">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:14px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

  <br> <br> <br> <br> <br> </br>

        <center> <p style="color:#000; font-weight:bold;font-size:12px;"> REQUEST FOR APPROVAL OF PROCUREMENT</p> </center>

        <hr><p style="color:#000; font-weight:normal;font-size:12px; text-align:center;">PART 1: REQUEST BY USER DEPARTMENT FOR APPROVAL OF PROCUREMENT METHOD</p> </hr>

         <form class="form-horizontal" action="procreqn_process.php" method="POST">

       <div class="col-xs-12 table-responsive">
           <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th style="text-align:left;">Procurement Reference Number</th>
               </tr>
            <tr>
            </tbody>
          </table>

            <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th>Code of procuring and Disposing Entity</th>
              <th>Supplies / Works / Non-consultancy services</th>
              <th>Financial year</th>
              <th>Sequence number</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><input type="text" name="PDECODE" id="PDECODE" value="NTIHC"  readonly="readonly" style="width:100%; text-align:center;"></td>

              <td><select class="form-control" name="CATEGORY"id="CATEGORY" required="required" style="width:100%; text-align:left;">
                                <option value="SUPPLIES">SUPPLIES</option>
                                <option value="WORKS">WORKS</option>
                                <option value="NON CONSULTANCY SERVICES">NON CONSULTANCY SERVICES</option>
                                </select></td>

              <td><input type="text" name="FINANCIALYEAR" id="FINANCIALYEAR" value="2016-2017"  style="width:100%; text-align:center;"></td>

              <td><input type="text" name="SEQUENCENUMBER" id="SEQUENCENUMBER" style="width:100%; text-align:center;"></td>
            </tr>
            <tr>
            </tbody>
          </table>
      </div>
      <!-- /.row -->

      <br><br><br><br><br><br>

          <div class="col-xs-12 table-responsive">
           <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th style="text-align:left;">Particulars of Procurement</th>
               </tr>
            <tr>
            </tbody>
            </table>

          <table class="table table-striped">
         <thead>
        <tbody>
        <tr>

        <th>Subject of procurement</th>
        <td><textarea id="wysihtml5" name="SUBJECTOFPROCUREMENT" required="required" style="width:100%; text-align:left;"></textarea></td>
        <tr>
        <th>Procurement plan reference</th>
        <td><input type="text" name="PROCUREMENTPLANREF" id="PROCUREMENTPLANREF" style="width:100%; text-align:left;"></td>
        <tr>

            <th style="text-align:left;">Location for delivery</th>
            <th style="text-align:left;">Date required</th>
            </tr>
            </thead>
            <tbody>
            <tr>
               <td><input type="text" name="LOCATIONFORDELIVERY" id="LOCATIONFORDELIVERY"  required="required" style="width:100%; text-align:left;"></td>
               <td><input type="date" name="DATEREQUIRED" id="DATEREQUIRED"  required="required" style="width:100%; text-align:left;"></td>
               </tr>
        <tr>
        </tr>
     </tbody>
  </table>
  </div>

  <br><br><br><br><br><br>

  <div class="col-xs-12 table-responsive">
           <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th style="text-align:left;">Details relating to the Procurement</th>
               </tr>
            <tr>
            </tbody>
            </table>

          <table class="table table-striped">

    <table class="table table-striped" id="mytable1">
    <thead>
      <tr>
      <th>*</th>
   <th>DESCRIPTION  (Refer to specifications, terms of reference or scope of work)</th>
   <th>QTY</th>
   <th>UNIT OF MEASURE</th>
   <th>ESTIMATED UNIT COST</th>
   <th>MARKET PRICE</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
        <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">
        </div>
        <!-- /.col -->
        </div>
      <div class="col-sm-12">
        <div class="col-xs-6">

           </div>

          <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">SUB TOTAL:</th>
                <td><input type="numeric" name="SUBTOTAL" id="SUBTOTAL"  style="width:100%; text-align:right;"></td>
              </tr>
              <tr>
                <th>TAX %</th>
                <td><input type="numeric" name="TAX" id="TAX" value="0" style="width:100%; text-align:right;"></td>
              </tr>
              <tr>
                <th>TOTAL COST</th>
                <td><input type="numeric" name="TOTALCOST" id="TOTALCOST" style="width:100%; text-align:right;"></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

       <div class="col-xs-12">
        <div class="col-xs-6">
        <p style="font-weight:bold;">(1) Request for procurement</p>
          <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="RFPUSERNAME" id="RFPUSERNAME" placeholder="Member of user department">
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="RFPSIGNATURE" name="RFPSIGNATURE"/>
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="RFPTITLE" name="RFPTITLE"/>
                </div>
                </div></div>

                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="RFPDATE" name="RFPDATE"value="<?php echo date('d-m-y'); ?>" />
                </div>
                </div></div>

                 <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;"> </label>
                <div class="col-sm-8">
                <input type="hidden" class="form-control" id="RFPDEPARTMENT" name="RFPDEPARTMENT"/>
                </div>
                </div></div>

           </div>

          <div class="col-xs-6">
        <p style="font-weight:bold;">(2) Confirmation of request</p>
          <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="CORNAME" id="CORNAME" placeholder="Head of user department" readonly="readonly">
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="CORSIGNATURE" name="CORSIGNATURE" readonly="readonly"/>
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="CORTITLE" name="CORTITLE" readonly="readonly"/>
                </div>
                </div></div>

                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="CORDATE" readonly="readonly" name="CORDATE"/>
                </div>
                </div></div></div>

            <div class="col-sm-12">

            <p style="" >Availability of funds to be confirmed prior to approval by Accounting Officer </p>

           <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th>Vote / head No</th>
              <th>Programme</th>
              <th>Sub-programme</th>
              <th>Item</th>
              <th>Balance remaining</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><input type="text" name="VOTE_HEADNO" id="VOTE_HEADNO"  readonly="readonly"  style="width:100%; text-align:left;"></td>

              <td><input type="text" name="PROGRAMME"id="PROGRAMME" readonly="readonly"  style="width:100%; text-align:left;"> </td>

              <td><input type="text" name="SUBPROGRAMME" id="SUBPROGRAMME" readonly="readonly"  style="width:100%; text-align:left;"></td>

              <td><input type="text" name="ITEM" id="ITEM" readonly="readonly" style="width:100%; text-align:left;"></td>

              <td><input type="text" name="BALANCEREMAINING" id="BALANCEREMAINING" readonly="readonly"  style="width:100%; text-align:left;"></td>
            </tr>
            <tr>
            </tbody>
          </table>
          </div>



           <div class="col-xs-6">
        <p style="font-weight:bold;">(3) Confirmation of funding and approval to procure</p>
          <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="AONAME" id="AONAME" placeholder="Accounting Officer" readonly="readonly">
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="AOSIGNATURE" name="AOSIGNATURE" readonly="readonly"/>
                </div>
                </div></div>

                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="AOTITLE" name="AOTITLE" readonly="readonly"/>
                </div>
                </div></div>

                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="AODATE" readonly="readonly" name="AODATE"/>
                </div>
                </div></div></div>


           <div class="col-sm-12">

<p style="font-weight:normal;">NOTE: This is an electronic form, signatory fields are autogenerated in the official processing by the Head of User Department and Accounting Officer.</p>

 <center> <input type="submit" name="button" id="button" value="Submit requisition " style= " font-size:15px; font-weight:bold; border-radius:11px; background-color:#000000; color:#ffffff; height:30px;"/> </center>
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

                   <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaltwentytwo" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">



22
           <div class="col-sm-12">
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

                   <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="newReg" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body" style="height:auto;">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:14px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br><br><br><br><br><br><br>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> Policy and Procedure Inclusive of Code of Practice </legend> </center>

            <form class="form-horizontal" >
            
      <p style="text-align:left;font-size:14px;color:#fb455f; font-weight:bold;">Vision </p> 
      
      <p style="text-align:left;font-size:13px;color:#000;"> To ensure that Fleet Management Unit provides an efficient and most cost-effective service for the supply of entity transport / coordination requirements to the various functional areas of the NTIHC's operational routes. </p>
      
       <p style="text-align:left;font-size:14px;color:#fb455f; font-weight:bold;">Mission </p>
       
      <p style="text-align:left;font-size:13px;color:#000;">The NTIHC’s fleet consists of only motor vehicles. </p>

          <p style="text-align:left;font-size:13px;color:#000;"> Driver and operator care in the daily use and basic maintenance of these equipment are extremely important. </p>
          
          
           <p style="color:#000; text-align:left; font-size:13px;">This affects the cost and reliability of the fleet operation.  reduced maintenance and less frustration to site supervisors.drivers and operators; all factors contributing to improved efficiencies and increased productivity within the various functional areas.</p>


          <p style="color:#000; text-align:left; font-size:13px;">This manual has been compiled for the specific purpose of establishing a uniform code of practice and conduct for all users, drivers and operators of the NTIHC’s motorised fleet. The content is directed at promoting knowledge and understanding of the disciplines important to the Fleet Management Services activities, with the ultimate aim of attaining optimum productivity and cost effectiveness, and eliminating vehicle abuse.
         


    <p style="color:#000; text-align:left; font-size:13px;">This affects the cost and reliability of the fleet operation.  reduced maintenance and less frustration to site supervisors.drivers and operators; all factors contributing to improved efficiencies and increased productivity within the various functional areas.</p>


          <p style="color:#000; text-align:left; font-size:13px;">This manual has been compiled for the specific purpose of establishing a uniform code of practice and conduct for all users, drivers and operators of the NTIHC’s motorised fleet. The content is directed at promoting knowledge and understanding of the disciplines important to the Fleet Management Services activities, with the ultimate aim of attaining optimum productivity and cost effectiveness, and eliminating vehicle abuse.
         <br>                                 

         <p style="color:#000; text-align:left; font-size:13px;">  Practical application of the guidelines, in conjunction with specific standing orders/policies/instructions issued by Fleet department, will prolong machinery service life and minimize vehicle accidents/losses caused through ignorance and/or negligence. </p>

            <br>
          <p style="color:#000; text-align:left; font-size:14px;"> The Policy and Procedure document addresses most aspects of daily vehicle operations. It also includes information on the “professional” driving techniques necessary to develop “above average” competence. Generally, the various sections in the Policy and Procedure document will be used for courses of instruction presented by the Fleet Management Services. Future driver/operator performance standards will be measured in terms of knowledge and practical application of the subject matter.  </p>

            <br>
          <p style="color:#000; text-align:left; font-size:14px;"> All users of motorised equipment are required to comply with the contents of this document. Users must also strive to eliminate unnecessary expenses from the fleet maintenance bill. Responsible usage of the fleet, accepted and practised as a total concept, that is, eliminating vehicle abuse, will serve to produce benefits in terms of increased driver/operator safety and status, reduced stress in the working environment, improved public image and a reduced cost burden on the entity’s rate payers.  </p>

          <br>
         <p style="color:#000; text-align:left; font-size:14px;"> It is therefore imperative that User Unit and Office Managers effectively manage vehicle usage so as to attain the objectives of this Policy and Procedures document.  </p>
         
         
         
         
         
         
         
         
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

                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModaltwentyfour" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog11">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:14px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br>   <br> <br>

          <center> <legend style="color:#000; font-weight:bold; font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>
          <form class="form-horizontal" action="imprest_process.php" method="POST" style="height:auto; font-weight:normal;">
                <div class="col-xs-6">

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="REQUESTDATE" name="REQUESTDATE"  value="<?php echo date('d-m-y'); ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">ID No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="IDNUMBER" name="IDNUMBER" data-placement="top" style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Applicant</label>
                    <div class="col-sm-8">
                        <input type="text" id="APPLICANTNAME" name="APPLICANTNAME" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                        <select class="form-control"  name="AP_DEPARTRMENT" data-placement="top" style="font-size: 11px; text-align:center;"/>
                                <option value="1"> </option>
                <option value="ADVOCACY AND RESEARCH">A & R</option>
                <option value="FINANCE AND ADMINISTRATION">F & A</option>
                <option value="SERVICE DELIVERY">S D</option>
                </select>
                    </div>
                </div>
                <!-- /.form-group -->
                </div>
                 <div class="col-sm-12">
                <input type="button" onClick="addRow166('mytable11')" value="Add" />
     <input type="button" onClick="deleteRow166('mytable11')" value="(Delete)" />
     <input type="hidden" id="mytable_rows11" value="0">

  <table class="table table-striped" id="mytable11" style="font-weight:normal;">
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
  </div>


         <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Total sum</label>
                    <div class="col-sm-8">
                        <input type="text" id="TOTALSUM" name="TOTALSUM" class="form-control" style="text-transform:uppercase;font-size: 12px; font-weight:bold; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Amount in words</label>
                    <div class="col-sm-8">
                        <input type="text" id="AMOUNTINWORDS" name="AMOUNTINWORDS" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
              </div>
           <br>
            <div class="col-sm-12">  <br>
            <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>
            </div>

            <div class="col-sm-6">
            <br>
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Authorised by</label>
                    <div class="col-sm-8">
                        <input type="text" id="IMPAUTHORISEDBY" name="IMPAUTHORISEDBY" placeholder"Signature"  class="form-control" readonly
                        style="text-transform:uppercase;font-size: 11px; border:0px;"/>
                        <p style="font-weight:bold">DEPARTMENTAL HEAD </p>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">

                        <input class="form-control" type="text" id="IMPAUTHORISEDDATE" name="IMPAUTHORISEDDATE" data-placement="top" readonly style="text-transform:uppercase;font-size: 11px; text-align:center; border:0px;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-6">
               <br>
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Approved by</label>
                    <div class="col-sm-8">
                        <input type="text" id="IMPAPPROVEDBY" name="IMPAPPROVEDBY" placeholder"Signature"  class="form-control" readonly
                        style="text-transform:uppercase;font-size: 11px; border:0px;"/>
                        <p style="font-weight:bold">FINANCE & ADMIN MANAGER </p>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="IMPAPPROVEDDATE" name="IMPAPPROVEDDATE" data-placement="top" readonly style="text-transform:uppercase;font-size: 11px; text-align:center; border:0px;"/>
                </div>
                <!-- /.form-group -->
                </div></div>



           <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic voucher, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>

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
                        <div class="modal fade" id="buttonedModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"  style="text-align:center;"id="H1">  </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:14px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> <br> <br>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> CASH PAYMENT VOUCHER </legend> </center>
            <form class="form-horizontal" action="pettycash_process.php" method="POST" style="height:auto;">
                <div class="col-sm-4">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="DATECREATED" name="DATECREATED"  value="<?php echo date('d-m-y'); ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">ID No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="IDNUMBER" name="IDNUMBER" data-placement="top" style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-8">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-3">Programme</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  id="PROGRAMME" name="PROGRAMME" style="text-transform:uppercase;font-size: 11px;"/>

                </select>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Code name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  name="BUDGETLINE" data-placement="top" style="font-size: 11px;"/>

                </select>
                    </div>
                </div>
                <!-- /.form-group -->
                </div>
                 <div class="col-sm-12">
                <input type="button" onClick="addRow17('mytable2')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable2')" value="(Delete)" />
     <input type="hidden" id="mytable_rows2" value="0">

  <table class="table table-striped" id="mytable2">
    <thead>
      <tr>
      <th>*</th>
   <th>DETAILS OF PAYMENT</th>
   <th>CURRENCY</th>
   <th>AMOUNT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  </div>
         <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Total sum</label>
                    <div class="col-sm-8">
                        <input type="text" id="TOTALSUM" name="TOTALSUM" class="form-control" style="text-transform:uppercase;font-size: 12px; font-weight:bold; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Amount in words</label>
                    <div class="col-sm-8">
                        <input type="text" id="AMOUNTINWORDS" name="AMOUNTINWORDS" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
              </div>
           <br>

            <div class="col-sm-12">
            <br>

            <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         </thead>
      <tbody>
      <tr>
       <th>Requested by</th>
        <td><input type="text" name="APPLICANTNAME" id="APPLICANTNAME"   style="width:100%; text-align:center;"></td>
        <th>Department</th>
        <td><input type="text" name="DEPARTRMENT_pcr" id="DEPARTRMENT_pcr"   style="width:100%; text-align:center;"></td>
        </tr>
     </tbody>
  </table>
  </div>

  <div class="col-sm-12">  <br>
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
        <td><input type="text"  class="form-control" name="RECIEVEDBY"id="RECIEVEDBY"  readonly  style="width:100%; text-align:left;">
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
        Note: This is an electronic voucher, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>

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
                        <div class="modal" id="bookVehicle" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header">
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
                                        <div class="modal-header" style="background-color: #ffffc6;" >
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
                                        <div class="modal-header" style="background-color:#f3f6ab;">
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
    <strong>Copyright &copy; 2017 <a href="http://ntihc.org">Naguru Teenage Information and Health Center</a>.</strong> All rights
    reserved.
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

<!-- jQuery 2.2.3 -->
<!-- Bootstrap 3.3.6 -->
<!-- Morris.js charts -->
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="plugins/daterangepicker/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
 <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

         <!-- PAGE LEVEL SCRIPTS -->
    <script src="../plugins/wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
    <script src="../assets/plugins/bootstrap-wysihtml5-hack.js"></script>
    <script src="../assets/plugins/CLEditor1_4_3/jquery.cleditor.min.js"></script>
    <script src="../assets/plugins/pagedown/Markdown.Converter.js"></script>
    <script src="../assets/plugins/pagedown/Markdown.Sanitizer.js"></script>
    <script src="../assets/plugins/Markdown.Editor-hack.js"></script>
    <script src="../assets/js/editorInit.js"></script>
    <script>
        $(function () { formWysiwyg(); });
        </script>

    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>


 <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1a = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+ 'background-color:#fff; width:100%;">';

	 var  s2b = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+ 'background-color:#fff; width:100%;">';

	 var  s3c =  '<select name="uom[]" required="required"  id="uom_'+rowCount+'"'+
                'style= " margin-left:-5px; width:100%; background-color:#fff;" >'+
					                    '<option>NIL</option>'+
             		                    '<option>PCS</option>'+
                                        '</select>';

	 var  s4d =  '<input type="numeric" name="escost[]" id="escost_'+rowCount+'"  required="required" '+
                 'style= " margin-left:-5px; width:100%; background-color:#fff;" >';

     var  s5e =  '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'"  required="required" '+
                 'style= " margin-left:-5px; width:100%; background-color:#fff;" >';


	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
								  '<td>'+s3c+' </td>'+
	                              '<td>'+s4d+' </td>'+
				                  '<td>'+s5e+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;

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
          table.rows[x].cells[2].childNodes[0].id="qty_"+x;
		  table.rows[x].cells[3].childNodes[0].id="uom_"+x;
		  table.rows[x].cells[4].childNodes[0].id="escost_"+x;
		  table.rows[x].cells[5].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
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

  <!-- /.START CASH PAYMENT VOUCHER SCRIPT -->
   <script>
  function addRow17(tableId){
     var  s1a = '<input type="text" name="description" id="description_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	 var  s2b =  '<select name="currency" required="required"  id="currency_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="debit" id="debit_'+rowCount+'"  required="required" '+
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
          document.getElementById('mytable_rows2').value=rowCount;

  }

  function deleteRow17(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="description_"+x;
          table.rows[x].cells[2].childNodes[0].id="currency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="debit_"+x;
          }
           document.getElementById('mytable_rows2').value=rowCount-1;
}

  </script>
  <!-- /.END CASH PAYMENT VOUCHER SCRIPT -->


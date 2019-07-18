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
  
  
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();  
         document.getElementById('myid').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
  
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
  
   <script>
  $(document).ready(function() {
     $('#example7').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example8').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example9').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example10').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example11').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example12').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example13').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example14').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example15').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example16').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example17').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example18').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
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
             <?php echo $pf; ?>  &nbsp;&nbsp;&nbsp
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
        <li><a href="procurement.php"><i class="fa fa-circle-o text-red"></i>Home page</a></li> 
        <li><a href="procurement_sys.php"><i class="fa fa-circle-o text-red"></i>User dashboard</a></li> 
        <li><a href="procurement_sys.php"><i class="fa fa-circle-o text-red"></i> </a></li> 
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
              <h3 class="box-title" style="font-family:lcd;">NTIHC | PROCUREMENT SUB SYSTEM</h3>

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
         <center> <img src="../database icons/microfinance-product-management-system.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="procurement_sys.php" class="small-box-footer">PDU <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
     

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/proc.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="procurement_sys.php" class="small-box-footer">Suppliers <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        <!-- ./col -->
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/admin.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="procurement_sys.php" class="small-box-footer">Contracts <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col --> 
        
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/admin2.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="procurement_sys.php" class="small-box-footer">Projects <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col --> 
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/budget.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="procurement_sys.php" class="small-box-footer">Payments<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col --> 

         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/Nepal+facing+site_Procurement+Icon.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="procurement_sys.php" class="small-box-footer">Stores <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
              </div> </div></div> 

                <!-- /.col -->
                <div class="col-md-12">
                  <p class="text-center">
                    <!-- Calendar -->
          <div class="box box-solid bg-grey-gradient" style="background-color:#fff;">
            <div class="box-header">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title" style="color:#000000;">Procurement and Disposal Uunit</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="procurement_sys.php"></a></li> 
                    <li class="divider"></li>
                    <li><a href="procurement_sys.php"></a></li>
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
                
                 <form method="post" action="updatecmgt/edit3.php"> 
  
   <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th>Sequence No.</th> 
              <th>Prefered threshold</th>
              <th>Switch allocated Order to ; </th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><input type="text" name="SEQUENCENUMBER" id="mySEQUENCENUMBER"  value="" readonly="readonly"  style="width:100%; text-align:left;"></td>
 
               
               <td><select name="PREFERREDMETHOD" id="myPREFERREDMETHOD" value="" style="width:100%; text-align:left;">
                  <option value="">  </option>
                  <option value="MICRO PROCUREMENT">MICRO PROCUREMENT</option>
                  <option value="REQUEST FOR QUOTATION / PROPOSAL METHOD">REQUEST FOR QUOTATION / PROPOSAL METHOD</option> 
                  <option value="RESTRICTED DOMESTIC OR INTERNATIONAL BIDDING ">RESTRICTED DOMESTIC OR INTERNATIONAL BIDDING</option>
                  <option value="OPEN DOMESTIC OR INTERNATIONAL BIDDING">OPEN DOMESTIC OR INTERNATIONAL BIDDING</option>
                  <option value="PUBLICATION OF INVITATION NOTICE FOR EXPRESSION OF INTEREST">PUBLICATION OF INVITATION NOTICE FOR EXPRESSION OF INTEREST</option>
                  <option value="SHORTLISTING WITHOUT PUBLICATION OF INTEREST">SHORTLISTING WITHOUT PUBLICATION OF INTEREST</option> 
                  </select>
                  </td>
              

              <td><select name="OFFICERALLOCATED" id="myOFFICERALLOCATED" value="" style="width:100%; text-align:left;">
                  <option value="">  </option>
                  <option value="OFFICER 1">OFFICER 1</option>
                  <option value="OFFICER 2">OFFICER 2</option> 
                  <option value="MANAGER PDU">MANAGER PDU</option> 
                  </select>
              </td>
              
              <td><input type="submit" name="update" value="Update"></td>
              
              <input type="hidden" id="myid" name="id" value="" >
			
             </tr>
            <tr>
           </tbody>
          </table> 
          Comment
           <textarea id="myOFFICERCOMMENT" name="OFFICERCOMMENT" value="" class="form-control"> </textarea>  
	     </form>
                
                  <ul class="nav nav-tabs">
                                <li class="active"><a href="#newmessages1" data-toggle="tab" style="font-weight:bold;">Supplies and non consultancy service orders..<span class="label label-primary pull-right"> 
                                 <?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE AOACTION ='APPROVED' AND PROCUREMENTSTATUS ='RECIEVED' AND SHORTCATEGORY ='SPLS/SRVCS'")) {

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
                                <li><a href="#incoming1" data-toggle="tab" style="font-weight:bold;">procurement of Work(s) Orders..<span class="label label-danger pull-right"> 
                                 <?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE AOACTION ='APPROVED' AND PROCUREMENTSTATUS ='RECIEVED' AND SHORTCATEGORY ='WRKS'")) {

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
                                 <li><a href="#sent1" data-toggle="tab" style="font-weight:bold;">Procurement of consultancy service orders..<span class="label label-primary pull-right">  
 <?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE AOACTION ='APPROVED' AND PROCUREMENTSTATUS ='RECIEVED' AND SHORTCATEGORY ='CONS'")) {

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
                                <li><a href="#drafts1" data-toggle="tab">Procurement tracker<span class="label label-danger pull-right"></span></a>
                                </li>
                                <li><a href="#trash1" data-toggle="tab">LPO's<span class="label label-success pull-right"></span></a>
                                </li>
                            </ul>

                            <div class="tab-content">
                               <div class="tab-pane fade in active" id="newmessages1">
                               <p></p> 
                          <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary"> 
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">      
                                
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%; text-align:left; font-weight:bold; color:#ffffff;">
	    Micro Procurement Orders for Procurement of Supplies / Non Consultancy Services<span class="sr-only">60% Complete</span>
		</div>
	    </div>  
        
                      </a>
                    </h4> 
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
        
        <script> 
function regnrecords(myid){
var dts = myid.split("***");
document.getElementById("mySEQUENCENUMBER").value=dts[1];
document.getElementById("myid").value=dts[0]; 
document.getElementById("myPREFERREDMETHOD").value=dts[2];
document.getElementById("myOFFICERALLOCATED").value=dts[3];
}
</script>
  
	  <div id="work" style="width:100%; "> 
    <table id="example7" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px;">
        <thead>
        <tr> 
        <th>ID.</th>
                     <th>TIMESTAMP</th>
                     <th>SUBJECT OF PROCUREMENT</th>
					 <th>CATEGORY</th>
                     <th>EST AMOUNT</th>     
                     <th>VERIFY</th> 
                     <th>ACTION</th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE AOACTION ='APPROVED' AND PROCUREMENTSTATUS ='RECIEVED' AND SHORTCATEGORY ='SPLS/SRVCS' AND PREFERREDMETHOD ='MICRO PROCUREMENT' ORDER BY id DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['SEQUENCENUMBER']."***".$res['PREFERREDMETHOD']."***".$res['OFFICERALLOCATED']."***".$res['ACTION'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['CATEGORY']."</td>";
		echo "<td>".$res['TOTALCOST']."</td>";  
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="regnrecords(this.id)">SOPMT</a> </td>'; 
		echo "<td><a href=\"config/inline/edit.php?id=$res[id]\">CLICK</a> </td>";			
	}

	?>
	</tbody>
  </table> 
        
         </div>
                  </div>
                </div>
                <div class="panel box box-danger"> 
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%; text-align:left; font-weight:bold; color:#ffffff;">
		Request for Quotation / Proposal Method for for Procurement of Supplies / Non Consultancy Services<span class="sr-only">60% Complete</span>
		</div>
	    </div>  
        
         </a>
                    </h4> 
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
         <script> 
function regnrecords(myid){
var dts = myid.split("***");
document.getElementById("mySEQUENCENUMBER").value=dts[1];
document.getElementById("myid").value=dts[0]; 
document.getElementById("myPREFERREDMETHOD").value=dts[2];
document.getElementById("myOFFICERALLOCATED").value=dts[3];
}
</script>
  
	 <div id="work" style="width:100%; "> 
    <table id="example7" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px;">
        <thead>
        <tr> 
        <th>ID.</th>
                     <th>TIMESTAMP</th>
                     <th>SUBJECT OF PROCUREMENT</th>
					 <th>CATEGORY</th>
                     <th>EST AMOUNT</th>     
                     <th>VERIFY</th> 
                     <th>ACTION</th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE AOACTION ='APPROVED' AND PROCUREMENTSTATUS ='RECIEVED' AND SHORTCATEGORY ='SPLS/SRVCS' AND PREFERREDMETHOD ='REQUEST FOR QUOTATION / PROPOSAL METHOD' ORDER BY id DESC");
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['SEQUENCENUMBER']."***".$res['PREFERREDMETHOD']."***".$res['OFFICERALLOCATED']."***".$res['ACTION'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['CATEGORY']."</td>";
		echo "<td>".$res['TOTALCOST']."</td>";  
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="regnrecords(this.id)">SOPMT</a> </td>'; 
		echo "<td><a href=\"config/inline/edit.php?id=$res[id]\">CLICK</a> </td>";			
	}

	?>
	</tbody>
  </table> 
        
       </div>
                  </div>
                </div>
                <div class="panel box box-success"> 
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
   
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%; text-align:left; font-weight:bold; color:#ffffff;">
		Restricted Domestic OR Restricted International Bidding for for Procurement of Supplies / Non Consultancy Services <span class="sr-only">60% Complete</span>
		</div>
	    </div>  
        
          </a>
                    </h4> 
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
        
         <script> 
function regnrecords(myid){
var dts = myid.split("***");
document.getElementById("mySEQUENCENUMBER").value=dts[1];
document.getElementById("myid").value=dts[0]; 
document.getElementById("myPREFERREDMETHOD").value=dts[2];
document.getElementById("myOFFICERALLOCATED").value=dts[3];
}
</script>
  
	 <div id="work" style="width:100%; "> 
    <table id="example7" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px;">
        <thead>
        <tr> 
        <th>ID.</th>
                     <th>TIMESTAMP</th>
                     <th>SUBJECT OF PROCUREMENT</th>
					 <th>CATEGORY</th>
                     <th>EST AMOUNT</th>     
                     <th>VERIFY</th> 
                     <th>ACTION</th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE AOACTION ='APPROVED' AND PROCUREMENTSTATUS ='RECIEVED' AND SHORTCATEGORY ='SPLS/SRVCS' AND PREFERREDMETHOD ='RESTRICTED DOMESTIC OR RESTRICTED INTERNATIONAL BIDDING' ORDER BY id DESC");
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['SEQUENCENUMBER']."***".$res['PREFERREDMETHOD']."***".$res['OFFICERALLOCATED']."***".$res['ACTION'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['CATEGORY']."</td>";
		echo "<td>".$res['TOTALCOST']."</td>";  
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="regnrecords(this.id)">SOPMT</a> </td>'; 
		echo "<td><a href=\"config/inline/edit.php?id=$res[id]\">CLICK</a> </td>";			
	}

	?>
	</tbody>
  </table> 
  
          </div>
                  </div>
                </div>
                <div class="panel box box-success"> 
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
        
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%; text-align:left; font-weight:bold; color:#ffffff;">
		Open Domestic bidding OR Open International Bidding for for Procurement of Supplies / Non Consultancy Services  <span class="sr-only">60% Complete</span>
		</div>
	    </div>   
         </a>
                    </h4> 
                  <div id="collapsefour" class="panel-collapse collapse">
                    <div class="box-body">
        
        <script> 
function regnrecords(myid){
var dts = myid.split("***");
document.getElementById("mySEQUENCENUMBER").value=dts[1];
document.getElementById("myid").value=dts[0]; 
document.getElementById("myPREFERREDMETHOD").value=dts[2];
document.getElementById("myOFFICERALLOCATED").value=dts[3];
}
</script>
  
	  <div id="work" style="width:100%; "> 
    <table id="example7" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px;">
        <thead>
        <tr> 
        <th>ID.</th>
                     <th>TIMESTAMP</th>
                     <th>SUBJECT OF PROCUREMENT</th>
					 <th>CATEGORY</th>
                     <th>EST AMOUNT</th>     
                     <th>VERIFY</th> 
                     <th>ACTION</th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE AOACTION ='APPROVED' AND PROCUREMENTSTATUS ='RECIEVED' AND SHORTCATEGORY ='SPLS/SRVCS' AND PREFERREDMETHOD ='OPEN DOMESTIC OR INTERNATIONAL BIDDING' ORDER BY id DESC");
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['SEQUENCENUMBER']."***".$res['PREFERREDMETHOD']."***".$res['OFFICERALLOCATED']."***".$res['ACTION'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['CATEGORY']."</td>";
		echo "<td>".$res['TOTALCOST']."</td>";  
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="regnrecords(this.id)">SOPMT</a> </td>'; 
		echo "<td><a href=\"config/inline/edit.php?id=$res[id]\">CLICK</a> </td>";			
	}

	?>
	</tbody>
  </table> 
   </div>
                  </div>
                </div>
              </div>
            </div> 
          
             
                                </div>  </div> </div> </div> </div> 
                                <div class="tab-pane fade" id="incoming1">
                                <p></p>
         <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;">
		 <span class="sr-only">60% Complete</span>
		</div>
	    </div> <br>            
        
        
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;color:#fff; text-align:left;">
		 .<span class="sr-only">60% Complete</span>
		</div>
	    </div> <br> 
        
        
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;color:#fff; text-align:left;">
		 <span class="sr-only">60% Complete</span>
		</div>
	    </div> <br>
        
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;color:#fff; text-align:left;">
		 <span class="sr-only">60% Complete</span>
		</div>
	    </div> <br>
        
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;color:#fff; text-align:left;">
		 <span class="sr-only">60% Complete</span>
		</div>
	    </div>  <br>     
              
                                    
                                </div> 
                                <div class="tab-pane fade" id="sent1">
                                <p></p> 
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px; color:#fff; text-align:left;">
		<span class="sr-only">60% Complete</span>
		</div>
	    </div> <br>  
        
                                
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px; color:#fff; text-align:left;">
		Orders for Procurement of consultancy services<span class="sr-only">60% Complete</span>
		</div>
	    </div> <br>     
        
        
        
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;">
		<span class="sr-only">60% Complete</span>
		</div>
	    </div> <br>
         
                
                                    </div>
                                    
                                <div class="tab-pane fade" id="drafts1">
                                 <p></p>
                                  <table id="example3" class="table table-striped table-bordered" >
        <thead>
        <tr> 
                     <th>ID</th> 
                     <th>CREATED</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th> 
                     <th>SUBJECT OF PROCUREMENT </th>  
                     <th>COST </th>  
                     <th>STATUS</th> 
                     <th>ALLOCATED-TO </th> 
                     <th>ACTION</th>  
                     <th>MONTH</th>  
                     <th>YEAR</th>  
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>ID</th> 
                     <th>CREATED</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th> 
                     <th>SUBJECT OF PROCUREMENT </th>  
                     <th>EST-COST </th>  
                     <th>STATUS</th> 
                     <th>ALLOCATED-TO </th> 
                     <th>ACTION</th>  
                     <th>MONTH</th>  
                     <th>YEAR</th>  
        </tr>
        </tfoot>
        <tbody> 
          <?php 
include_once("config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE CORACTION ='AUTHORISED' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['CATEGORY']."***".$res['PROCUREMENTSTATUS']."***".$res['ITEM'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['DATECREATED']."</td>";
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['RFPDEPARTMENT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>"; 
		echo "<td>".$res['TOTALCOST']."</td>";  
		echo "<td>".$res['PROCUREMENTSTATUS']."</td>"; 
		echo "<td>".$res['OFFICERALLOCATED']."</td>"; 
	    echo "<td>".$res['ACTION']."</td>";		
		echo "<td>".$res['FISCALMONTH']."</td>"; 
	    echo "<td>".$res['FISCALYEAR']."</td>";			
	}
	?>
	</tbody>
  </table>   
                                     
                                </div>
                                
                                <div class="tab-pane fade" id="trash1">
                                    <h4>LPO's</h4>
                                    
                                </div>
                            </div>
                      
                  </div>
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

  <br> <br> <br> <br>  </br><br>

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
                
                 <div class="col-xs-6">
        <p style="font-weight:bold;">Generic preferred method of procurement</p>
                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">THRESHOLD</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="THRESHOLD" id="THRESHOLD" placeholder="Automated" readonly="readonly">
                </div>
                </div></div>
                
                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">REASON</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="THRESHOLDREASON" id="THRESHOLDREASON" placeholder="Automated" readonly="readonly">
                </div>
                </div></div>
                
                </div>


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
                        <div class="modal" id="notificationModaltwentythree" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<p style="text-align:center; font-size:14px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br><br><br><br><br><br>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">


           23

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
                        <select class="form-control"  name="AP_DEPARTRMENT" data-placement="top" style="font-size: 11px; "/>
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
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#ffffca;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2"> </h4>
                                        </div>
                                        <div class="modal-body">

                                           <form role="form">
                                        <div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:17px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:15px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:15px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> <br> <br>

          <center> <legend style="color:#000; font-weight:bold;font-size:15px;">STAFF TIMESHEET </legend> </center>

            <form class="form-horizontal" style="height:auto;">


                <div class="col-sm-21">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Employee's name</label>
                    <div class="col-sm-8">
                        <input type="text" id="EMPLOYEENAME" name="EMPLOYEENAME"    class="form-control">
                    </div>
                 </div>
               </div>
                <!-- /.form-group -->

                <div class="col-sm-20">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">ID number</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="IDNUMBER" name="IDNUMBER" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div>
               </div>
               <!-- /.form-group -->

               <div class="col-sm-20">
               <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Position</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="EMPLOYEEPOSITION" name="EMPLOYEEPOSITION" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div>
                </div> </div>
                <!-- /.form-group -->


                <div class="col-sm-12">
                <br>

               <div class="col-sm-21">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Supervisor's name</label>
                    <div class="col-sm-8">
                 <input type="text"class="form-control"  id="SUPERVISOR" name="SUPERVISOR"  style="text-transform:uppercase;font-size: 11px;"/>

                    </div>
                </div>
                <!-- /.form-group --></div>
                <div class="col-sm-20">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Position</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"  name="SUPERVISORPOSITION" id="SUPERVISORPOSITION"  style="font-size: 11px; "/>
                    </div>
                 </div>
                </div>
                <!-- /.form-group -->

               <div class="col-sm-20">
               </div>

            <div class="col-sm-12">
            <br>
            <div class="col-sm-6">
            <table class="table table-bordered" style="margin-left: -13px; background-color: #fff;">
         <thead>
         <th> </th>
         </thead>
      <tbody>
      <tr>
       <th>Month</th>
        <td><input type="text" name="FISCALMONTH" id="FISCALMONTH"  style="width:100%; text-align:center;"></td>

         <th>Year</th>
        <td><input type="text" name="FISCALYEAR" id="FISCALYEAR"  style="width:100%; text-align:center;"></td>

        </tr>
     </tbody>
  </table>
  </div>

  <div class="col-sm-6">
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         </thead>
      <tbody>
      <tr>
      <th>Department</th>
        <td><select class="form-control" name="DEPARTMENT"id="DEPARTMENT" style="width:100%; text-align:center;">
                                <option value="N/A"> </option>
                                <option>FINANCE AND ADMINISTRATION</option>
                                <option>ADVOCACY AND RESEARCH</option>
                                <option>SERVICE DELIVERY</option>
                                </select>
        </td>

        </tr>
     </tbody>
  </table>
  </div></div>

  <div class="col-lg-12">
   <br>
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> Add hours worked</p>
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff;">
         <thead>
         <th> </th>
         <th>16 </th>
         <th>17</th>
         <th>18</th>
         <th>19 </th>
         <th>20</th>
         <th>21</th>
         <th>22 </th>
         <th>23</th>
         <th>24</th>
         <th>25 </th>
         <th>26</th>
         <th>27</th>
         <th>28 </th>
         <th>29</th>
         <th>30</th>
         <th>31 </th>
         <th>1</th>
         <th>2</th>
         <th>3</th>
         <th>4 </th>
         <th>5</th>
         <th>6</th>
         <th>7 </th>
         <th>8</th>
         <th>9</th>
         <th>10 </th>
         <th>11</th>
         <th>12</th>
         <th>13 </th>
         <th>14</th>
         <th>15</th>
         <th>Total</th>
         <th>%</th>
         </thead>
      <tbody>
      <tr>
        <th>Add</th>
        <td><input type="alphanumeric" class="form-control" name="D16" id="D16" value="0" style="width:100%; text-align:center;">
                                </td>

       <td><input type="alphanumeric" class="form-control" name="D17" id="D17" value="0" style="width:100%; text-align:center;">
                                </td>
       <td><input type="alphanumeric" class="form-control" name="D18" id="D18" value="0" style="width:100%; text-align:center;">
                                </td>
         <td><input type="alphanumeric" class="form-control" name="D19" id="D19" value="0" style="width:100%; text-align:center;">
                                </td>

      <td><input type="alphanumeric" class="form-control" name="D20" id="D20" value="0" style="width:100%; text-align:center;">
                                </td>

      <td><input type="alphanumeric" class="form-control" name="D21" id="D21" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D22" id="D22" value="0" style="width:100%; text-align:center;">
                                </td>
        <td><input type="alphanumeric" class="form-control" name="D23" id="D23" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D24" id="D24" value="0" style="width:100%; text-align:center;">
                                </td>

          <td><input type="alphanumeric" class="form-control" name="D25" id="D25" value="0" style="width:100%; text-align:center;">
                                </td>

          <td><input type="alphanumeric" class="form-control" name="D26" id="D26" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D27" id="D27" value="0" style="width:100%; text-align:center;">
                                </td>

           <td><input type="alphanumeric" class="form-control" name="D28" id="D28" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D29" id="D29" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D30" id="D30" value="0" style="width:100%; text-align:center;">
                                </td>

       <td><input type="alphanumeric" class="form-control" name="D31" id="D31" value="0" style="width:100%; text-align:center;">
                                </td>

       <td><input type="alphanumeric" class="form-control" name="D1" id="D1" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D2" id="D2" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D3" id="D3" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D4" id="D4" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D5" id="D5" value="0" style="width:100%; text-align:center;">
                                </td>

          <td><input type="alphanumeric" class="form-control" name="D6" id="D6" value="0" style="width:100%; text-align:center;">
                                </td>

          <td><input type="alphanumeric" class="form-control" name="D7" id="D7" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D8" id="D8" value="0" style="width:100%; text-align:center;">
                                </td>


         <td><input type="alphanumeric" class="form-control" name="D9" id="D9" value="0" style="width:100%; text-align:center;">
                                </td>


         <td><input type="alphanumeric" class="form-control" name="D10" id="D10" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D11" id="D11" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D12" id="D12" value="0" style="width:100%; text-align:center;">
                                </td>

     <td><input type="alphanumeric" class="form-control" name="D13" id="D13" value="0" style="width:100%; text-align:center;">
                                </td>

     <td><input type="alphanumeric" class="form-control" name="D14" id="D14" value="0"  style="width:100%; text-align:center;">
                                </td>

     <td><input type="alphanumeric" class="form-control" name="D15" id="D15" value="0" style="width:100%; text-align:center;">

                                </td>

     <td><input type="text" name="TOTALDAYS" id="TOTALDAYS"  style="width:100%; text-align:center;"></td>
     <td><input type="text" name="PERCENTAGEDAYS" id="PERCENTAGEDAYS"  style="width:100%; text-align:center;"></td>
     </tr>
     </tbody>
  </table>
   </div>

   <br>
  <div class="col-lg-4">
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> Summary of days not worked</p>
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff;">
         <thead>
         <th>Description </th>
         <th>Symbol</th>
         <th>Total</th>
         </thead>
      <tbody>
      <tr>
        <th>Public holiday</th>
        <td style="text-align:center;">PH</td>
        <td><input type="text" name="PH" id="PH"  readonly style="width:100%; text-align:center; background-color:#eee;"></td>
    </tr>
    <tr>
    <tr>

        <th>Saturday and Sunday</th>
        <td style="text-align:center;"> W</td>
        <td><input type="text" name="WEEKEND" id="WEEKEND" readonly style="width:100%; text-align:center;background-color:#eee; "></td>

        </tr>
    <tr>
    <tr>

        <th>Not worked</th>
        <td style="text-align:center;"> 0</td>
        <td><input type="numeric" name="NW" id="NW" readonly style="width:100%; text-align:center; background-color:#eee;"></td>

        </tr>
     </tbody>
  </table>
   </div>

 <div class="col-lg-4">
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> Summary of leave days</p>
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff;">
         <thead>
         <th>Description </th>
         <th>Symbol</th>
         <th>Total</th>
         </thead>
      <tbody>
      <tr>
        <th>General Administration</th>
        <td style="text-align:center;">GA</td>
        <td><input type="text" name="GA" id="GA"  readonly style="width:100%; text-align:center; background-color:#eee;"></td>
    </tr>
    <tr>
    <tr>

        <th>Staff Development</th>
        <td style="text-align:center;"> SD</td>
        <td><input type="text" name="SD" id="SD" readonly style="width:100%; text-align:center;background-color:#eee; "></td>

        </tr>
    <tr>
    <tr>

        <th>Sick Leave</th>
        <td style="text-align:center;"> SL</td>
        <td><input type="numeric" name="SL" id="SL" readonly style="width:100%; text-align:center; background-color:#eee;"></td>

        </tr>
     </tbody>
  </table>
   </div>

  <div class="col-lg-4">
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;">  Others</p>
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff;">
         <thead>
         <th>Description </th>
         <th>Symbol</th>
         <th>Total</th>
         </thead>
      <tbody>
      <tr>
        <th>Annual Leave</th>
        <td style="text-align:center;">AL</td>
        <td><input type="text" name="AL" id="AL"  readonly style="width:100%; text-align:center; background-color:#eee;"></td>
    </tr>
    <tr>
    <tr>

        <th>Maternity leave</th>
        <td style="text-align:center;"> ML</td>
        <td><input type="text" name="ML" id="ML" readonly style="width:100%; text-align:center;background-color:#eee; "></td>

        </tr>
     </tbody>
  </table>
   </div>

   <div class="col-lg-4">
  <p style="font-weight:bold; text-align:center; text-transform:uppercase;"> Month attendence results</p>
  <p style="font-weight:bold; text-align:left; text-transform:uppercase; border:1px solid #eee; height:129px;">

  </p>

  </div>


   <div class="col-lg-12">
   <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>

  <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         <th>Comment</th>
         <th>Signatory</th>
         <th>Date</th>
         </thead>
    <tbody>
      <tr>
         <tr>
         <th>Supervisor</th>
         <td><input type="text" name="APPROVERCOMMENT" id="APPROVERCOMMENT"  readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="text" name="APPROVEDBY" id="APPROVEDBY"  readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="date" name="APPROVEDDATE" id="APPROVEDDATE"  readonly="readonly" placeholder="dd /mm/ yyyy"  style="width:100%; text-align:center;background-color:#eee;"></td>
     </tr>
    <tr>

    <tr>
        <th>Administrator</th>
        <td><input type="text" name="ADMINCOMMENT" id="ADMINCOMMENT"  readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="text"  class="form-control" name="RECIEVEDBY"id="RECIEVEDBY"  readonly  style="width:100%; text-align:left;background-color:#eee;">
                                </td>
        <td><input type="date" class="form-control" id="RECIEVEDDATE" name="RECIEVEDDATE" readonly placeholder="dd /mm/ yyyy" style="width:100%; text-align:center; background-color:#eee;">

                                </td>
     </tr>
        </tr>
     </tbody>
  </table>

                </div>

        <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic staff timesheet, Signatory fields are auto generated in the official processing by the approver and the administrator. </p>

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
                        <div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3"> </h4>
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

 <br> <br><br> <br> <br> <br> <br> <br>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> LEAVE / ABSENCE APPLICATION FORM </legend> </center>

         <form class="form-horizontal" style="height:auto;">

            <P style="text-align:left;">This form should be completed for all types of leave / absences and should submitted for approval before the leave/absence is taken. Staff are requested to fill in the relevant sections of this form according to the type of leave/absence to be taken </P>

               <P style="text-align:left; font-weight:bold;"> (1). APPLICANT DETAILS</P>


                <div class="col-sm-5">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="DATECREATED" name="DATECREATED"  value="<?php echo date('d-m-y'); ?>"  class="form-control"/>
                    </div>
                </div> </div>
                <!-- /.form-group -->


                <div class="col-sm-7">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-3">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  id="EMPLOYEENAME" name="EMPLOYEENAME"  required="required"
                        style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                </div></div>
                <!-- /.form-group -->

                 <div class="col-sm-5">
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">ID No.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="IDNUMBER" name="IDNUMBER" data-placement="top" required="required"   style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                </div><!-- /.form-group -->

                 <div class="col-sm-7">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Title</label>
                    <div class="col-sm-9">
                   <input type="text" class="form-control"   name="POSITION" id="POSITION" data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;"/>
                   </div>
                </div>
                <!-- /.form-group -->
                </div> </div>

              <div class="col-sm-12">
              <br> <br>
               <P style="text-align:left; font-weight:bold;"> (2). TYPE OF LEAVE (Tick appropriately)</P>
               <div class="form-group">
                <div class="col-sm-4">
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
                    <P style="text-align:left; font-weight:bold;"> (3). LEAVE DURATION</P>

                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">Commencement date</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control"   name="COMMENCEMENTDATE" id="COMMENCEMENTDATE" placeholder="dd /mm/ yyyy" data-placement="top" required="required"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div></div>
                <!-- /.form-group -->

                    <div class="col-sm-8">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">End date</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control"   name="ENDDATE" id="ENDDATE" required="required" data-placement="top" placeholder="dd /mm/ yyyy"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->

                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Total number of days to be spent on leave.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="REQUIREDLEAVEDAYS" id="REQUIREDLEAVEDAYS" required="required" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div> </div>
                <!-- /.form-group -->

                    <div class="col-sm-8">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Days entitled to in a year.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="DAYS_ENTITLEDINYEAR" id="DAYS_ENTITLEDINYEAR" value="22" data-placement="top" readonly
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group --></div>

                    <div class="col-sm-8">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Total entitled days before taking on this leave.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="DAYSBEFORE_LEAVE" id="DAYSBEFORE_LEAVE"   required="required" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group --> </div>

                  <div class="col-sm-8">
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Total days to be taken according to this application.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="DAYSTOBE_TAKEN" id="DAYSTOBE_TAKEN" required="required" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Balance due.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="BALANCEDUE" id="BALANCEDUE"  data-placement="top" readonly
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
                     </div>
               </div>

            <div class="col-sm-12">
            <br>
            <p style="text-align:left; font-weight:bold;">(4).ABSENCE REQUEST  (To be filled if an employee is requesting for hour(s) off) </p>

            <table class="table table-bordered" style="background-color:#ffffff;">
         <thead>
           <th>Absence date</th>
         <td><input name="ABSENCEDATE" id="ABSENCEDATE"  placeholder="dd /mm /yyyy"
         style="width:100%; text-align:left;"></td>

         <th>Request duration</th>
         <td><input type="numeric" class="form-control"   name="REQUESTDURATION" id="REQUESTDURATION"  placeholder="hours"
         style="width:100%; text-align:left; background-color:#fff;"></td>

         <th>Hours worked</th>
         <td><input type="numeric" class="form-control"   name="HOURSWORKED" id="HOURSWORKED"  placeholder="Total"
            style="width:100%; text-align:left;background-color:#fff;"></td>

         </thead>
    <tbody>
  </table>
          </div>

            <div class="col-sm-12">
            <table class="table table-bordered" style="background-color:#ffffff;">
         <thead>
           <th>Reason for absence</th>
         <td><div class="switch switch-blue">
                    <input type="radio" class="switch-input" name="REASONFORABSENCE" value="NONE" id="NONE" checked="">
					<label for="NONE" class="switch-label switch-label-off"></label>
					<input type="radio" class="switch-input" name="REASONFORABSENCE" value="SICK" id="SICK">
					<label for="SICK" class="switch-label switch-label-off">Sick</label>
					<input type="radio" class="switch-input" name="REASONFORABSENCE" value="BEREAVEMENT" id="BEREAVEMENT">
					<label for="BEREAVEMENT" class="switch-label switch-label-off">Bereavement</label>
					<span class="switch-selection"></span></td>

         <th>Others (Specify)</th>
         <td><input type="numeric" class="form-control"   name="OTHER_REASON" id="OTHER_REASON"
            style="width:100%; text-align:left;background-color:#fff;"></td>

         </thead>
    <tbody>
  </table>
              </div>


  <div class="col-sm-12">
  <p style="text-align:left; font-weight:bold;">(5).SUGGESTED SUBSTITUTE(S) </p>

  <table class="table table-bordered" style="background-color:#ffffff;">
         <thead>
         <th>Department</th>
         <th><select class="form-control" name="DEPARTMENT"id="DEPARTMENT" required="required" style="width:100%; text-align:left;">
                                <option value="1"> </option>
                                <option>S D</option>
                                <option>A & R</option>
                                <option>F & A</option>
                                </select>
                                </th>


         <th>Substitute's Name</th>
         <td><input type="text" name="SUBSTITUTENAME" id="SUBSTITUTENAME"   style="width:100%; text-align:left;"></td>
         <tr>

         <th>Supervisor's Authorization</th>
         <td><input type="text" name="AUTHORISEDBY" id="AUTHORISEDBY" readonly  style="width:100%; text-align:left; background-color:#eee;"></td>

         <th>Departmental Head's approval</th>
         <td><input type="date" name="APPROVEDBY" id="APPROVEDBY"  readonly   style="width:100%; text-align:left;background-color:#eee;"></td>

         </thead>
    <tbody>
  </table>
  </div>
          <br>
            <div class="col-sm-12">
  <p style="text-align:left; font-weight:bold;">(6). APPROVAL </p>
  <table class="table table-bordered" style="background-color:#ffffff;">
         <thead>
           <th>Approved by</th>
         <td><input type="text" class="form-control" name="FINALAPPROVAL" id="FINALAPPROVAL" placeholder="FIN & ADMIN" readonly
         style="width:100%; text-align:left;"></td>


         <th>Signature</th>
         <td><input type="text" class="form-control" name="FINALAPP_TIMESTAMP" id="FINALAPP_TIMESTAMP" readonly
         style="width:100%; text-align:left; background-color:#eee;"></td>

         <th>Date</th>
         <td><input type="text" class="form-control" name="FINALAPPROVALDATE" id="FINALAPPROVALDATE" placeholder="dd /mm /yyyy" readonly   style="width:100%; text-align:left;background-color:#eee;"></td>

         </thead>
    <tbody>
  </table>

        </div>
        <div class="col-sm-12">
        <br>
        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic form, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
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

     var  s1a = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';

	 var  s2b = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';

     var  s3c =  '<input type="numeric" name="uom[]" id="uom_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >'; 

	 var  s4d =  '<input type="numeric" name="escost[]" id="escost_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';

     var  s5e =  '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';


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

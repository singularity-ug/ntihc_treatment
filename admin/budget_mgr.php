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
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stss ="";
if( $result = $connect->query("SELECT * FROM budgetcoder WHERE codestatus = 'ACTIVE' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['budgetline'] . " </option>";   }
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
  <!-- Bootstrap 3.3.6 -->
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
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="assets/notifier.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
   

   <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' BUDGET RECORDS'
		},
		{extend :'pdf',
		 title:'BUDGET RECORDSS '
		},
		{extend :'print',
		 title:' BUDGET RECORDS'
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
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 10,
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
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 15,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' BUDGET DETAILS'
		},
		{extend :'pdf',
		 title:'BUDGET DETAILS '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 5,
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
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'pdf',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'print',
		 title:'NTIHC |IMMS USER CONTACTS '
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
  
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example9').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#example10').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#example11').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
   
  <script>
  $(document).ready(function() {
     $('#example12').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example13').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#example14').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
  
  
   <script>
  $(document).ready(function() {
     $('#example15').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
  
  
  
  
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border: 1px solid #ECF0F5;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid #ECF0F5;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 12px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#ecf0f5;
             }
             table tr:nth-child(even) {
             background:#fff;
             }

</style>
   
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
  require('connect/config.php');
  ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="admin_user.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels --> 
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> &nbsp;&nbsp Dashboard</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <i class="glyphicon glyphicon-user"><b>Welcome:</b></i>  
              <span class="" style="font-size:10px;">&nbsp <B> <?php echo $nameofuser; ?> </B> &nbsp;&nbsp </span>
             
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"> </li>
              <li>
              
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                         <img src="../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
                      </div>
                      <h4>
                         Ntihc M.E team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not use this awesome application?</p>
                    </a>
                  </li>
                  <!-- end message --> 
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i> 
              <span class="">&nbsp<?php echo $nameofuser; ?>  </span>
            </a>  
             
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-th"></i> 
              <span class="">&nbsp<?php echo $desc; ?>  </span>
            </a> 
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-share"></i> 
              <span class="">&nbsp<?php echo $dept; ?>  </span>
            </a> 
            
            <ul class="dropdown-menu">
              <li class="header"> 
              
              
              
              </li>
              <li>
                <!-- inner menu: contains the actual data -->
                 
          </li>
              
          <!-- Control Sidebar Toggle Button -->
          <li> 
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <div class="user-panel">
           
           
           
           
          <ul class="sidebar-menu"> 
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Budget inbox</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">   
          </ul>
        </li>
         
          <ul class="nav nav-pills">
          <li class="active">
          <a href="#home-pills" data-toggle="tab"> 
            <i class="fa fa-th"></i> <span>Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp </span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>  
          
         <li>
          <a href="budget_current.php">
            <i class="fa fa-th"></i> <span>
           Current budget &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            </span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li> 
                           
          <li>
          <a href="#budgetlines-pills" data-toggle="tab">
            <i class="fa fa-th"></i> <span>Budget lines  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            </span>
            <span class="pull-right-container">
              <small class="">    </small>
            </span>
          </a>
        </li>
                        
          <li>
          <a href="#profile-pills" data-toggle="tab">
            <i class="fa fa-th"></i> <span>Budget records &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp </span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li>                        
            
         
            
            
          <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Budget reports
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
          </a>
          <ul class="treeview-menu"> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Expenditure</a></li> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Income</a></li> 
          <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModal"  </button> </i>Both</a></li>    
          </ul>
        </li>                       
          <li>
          <a href="#messages-pills" data-toggle="tab">
            <i class="fa fa-th"></i> <span>Income <b style="font-size:10px;">(forecasts & earnings</b>)  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            </span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
                                
                               
        <li>
          <a href="#settings-pills" data-toggle="tab">
            <i class="fa fa-th"></i> <span>Procurement &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            </span>
            <span class="pull-right-container">
              <small class=" ">  </small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="#seta-pills" data-toggle="tab">
            <i class="fa fa-th"></i> <span>Attainments on budget &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            </span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="#setb-pills" data-toggle="tab">
            <i class="fa fa-th"></i> <span>Commissioned funds &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            </span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li> 
         </ul>        
                  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
    </section>

    <!-- Main content -->
    <section class="content">
 
     <!-- Main content -->
      <div class="row">
 
            <div class="col-lg-12"> 
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home-pills"> 
                                  <div class="box box-solid">
            <div class="box-header with-border"> 
            </div>
              
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title" style=" font-size:15px; font-weight:bold;">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       Procurement and Disposal Unit
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                    
                    <div class="col-sm-4"> 

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


              </ul>
            </div>
            <!-- /.box-body -->


          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">CCCCCCCCC </h3>

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
              <h3 class="box-title">CCCCCCCCC </h3>

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
                    
                    <div class="col-sm-8">
                    
                      <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/budget.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="budget_mgr.php" class="small-box-footer">Budget <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->         
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/admin.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer">Medical <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->          
       
       
      <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/admin2.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer">Human   <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/microfinance-product-management-system.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer">Fleet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
         <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/syspanel1.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer">procurement <i class=" "></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/press-nozbe.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer">Assets  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        <!-- ./col -->
                    </div>
                  </div>
                </div></div>
                 
                <div class="panel box box-dangers">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTh">
                      Budget setup
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTh" class="panel-collapse collapse">
                    <div class="box-body">
           
                       <div class="col-sm-3"> 
                       <div class="panel-body" style="border:2px solid; border-radius:11px;"> 
                       <a href=<button class="fa fa-th" data-toggle="modal"  data-target="#m5" </button> </i> Add new budget line </a> 
                       <br>
                         
                       <a href=<button class="fa fa-th" data-toggle="modal"  data-target="#m10" </button> </i> Add new financial period </a> 
                      <br> 
                       
                      <a href=<button class="fa fa-th" data-toggle="modal"  data-target="#m1" </button> </i>New cost description </a> 
                      <br>
                      
                      <a href=<button class="fa fa-th" data-toggle="modal"  data-target="#m2" </button> </i>Add budget details</a> 
                       
                      <br>  
                       <a href=<button class="fa fa-th" data-toggle="modal"  data-target="#m6" </button> </i> View budget details </a> 
                       <br>
                       <a href=<button class="fa fa-th" data-toggle="modal"  data-target="#m7" </button> </i> </a> 
                      </div></div>
                      
                      <div class="col-sm-9" style="border:2px solid; border-radius:11px; height:120px;"> 
                      <div class="panel-body">
                       
                       
                       
                      </div></div>
                     
                       
                    </div>
                  </div>
                </div>
                 
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                       Add new budget datails
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                    <div class="col-sm-6">
                     <form method="post" action="budget/add-data.php" >
                       
     <table class="table table-bordered" style="margin-left: -25px;">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:70%;"></th>
        <th style="border-bottom-color:white; width:30%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>Enter how many records you want to insert</B></td>
        <td>  <input type="text" name="no_of_rec" id="no_of_rec" placeholder=" 1 , 2 , 3 , 5 . . ." required
        style="background-color:#fff; width:100%;"></td> 
      </tr>
      <tr>
        <td> <p></p><button type="submit" name="btn-gen-form" style="color: #fff; background-color: #449d44; width:100%;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Generate</button> </td>
        
        <td><p></p><a href="budget/index.php" style="color: #fff; background-color: #449d44; width:100%;" class="btn btn-large btn-success"><i class="glyphicon glyphicon-eye-open"></i> &nbsp; Edit Data</a>  </td>  
      </tr> 
    </tbody>
  </table>  
</form>  
    </div>  
    
    <div class="col-sm-6">
    
                                   <?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stdd2 ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd2=$stdd2. "  " . $row['period'] . "  ";   }
  }
$connect->close();
?> 
 
     <table class="table table-bordered" style="margin-left: -25px;">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:70%;"></th>
        <th style="border-bottom-color:white; width:30%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>Active financial period</B></td>
        <td> <B>Fiscal period indexing</B></td> 
      </tr>
      <tr>
      
        <td> <p></p> <input type="text" value="<?php   echo $stdd2; ?>" style="font-weight:bold; font-size:14px; width:100%;" > </td>
        
        <td> <p></p> <a href=<button class="fa fa-th" data-toggle="modal"  data-target="#m10" </button> </i> Activate / Deactivate</a> </td>
        
      </tr> 
    </tbody>
  </table> 
  <hr style="height:2px; background-color:#ecf0f5; width:100%; margin-left:-25px; margin-top:-16px;"  >
    </div>  
            
                      
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-4">
                <div id="reviews" class="carousel slide" data-ride="carousel"> 
      <div class="carousel-inner">
                                      <div class="item active"> 
                                     <div class="col-sm-10 col-md-offset-1"> 
                                     <br>
                                   <h4> </h4>     
                                        <p style="color:#000000; text-align:center; font-weight:bold; font-size:36px; margin-top:-35px;">0 </p> 
                                        <br><p></p>
                                                <div class="user-img pull-right">  
                                                </div> 
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                            <div class="col-sm-10 col-md-offset-1"><br> 
                                  <h4> </h4>       
                                               <p style="color:#000000; text-align:center; font-weight:bold; font-size:36px; margin-top:-35px;">0 </p> 
                                        <br><p></p>
                                                 <div class="user-img pull-right"> 
                                                </div> 
                                            </div> 
                                        </div>
                                        
                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1"> <br>
                                        <h4> </h4>
                                                 <p style="color:#000000; text-align:center; font-weight:bold; font-size:36px; margin-top:-35px;">0 </p> 
                                        <br><p></p>
                                                <div class="user.png pull-right"> 
                                                
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active"></li>
                                        <li data-target="#reviews" data-slide-to="1"></li>
                                        <li data-target="#reviews" data-slide-to="2"></li>
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->
          
        </div>
        <!-- /.col (right) --> 
         </div>
         
         <div class="col-sm-8">
          <div class="col-lg-4"> 
                     <a class="button1" href=<button class="small-box-footer" data-toggle="modal"  data-target="#notificationModal"></button>Imprest rqts 
					 &nbsp;&nbsp <span class="label label-success pull-right" data-toggle="tooltip" title="Approved cash out orders">
                      <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT  ORDERNO,FISCALMONTH FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND FINALREDIRECTION ='$rm' AND APPROACTION ='APPROVED' AND CASHOUT ='PENDING' ")) {        
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
                  
                     <span class="label label-danger pull-right" data-toggle="tooltip" title="Due for approval">
                      <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT  ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND FORWARDTO ='$rm' AND APPROACTION ='PENDING'")) {
                                             
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
                     
                     &nbsp <span class="label label-warning pull-right" data-toggle="tooltip" title="Due for authorising">
                      <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT  ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND SENDTO ='$rm'")) {
                                             
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
                     </a> 
                    </div>
                    
                     <div class="col-lg-4"> 
                     <a class="button" href=<button class="small-box-footer" data-toggle="modal"  data-target="#notificationModal"></button>Tracker
					 &nbsp;&nbsp <span class="label label-warning pull-right">0</span></a> 
                     </div>
                     
                     <div class="col-lg-4">  
              <a class="button2" href=<button class="small-box-footer" data-toggle="modal"  data-target="#notificationModal"></button>Tracker 
			  &nbsp;&nbsp <span class="label label-warning pull-right">0</span></a> 
                     </div>
                     
                     <div class="col-lg-4"><br> 
              <a class="button" href=<button class="small-box-footer" data-toggle="modal"  data-target="#notificationModal"></button> Tracker
			  &nbsp;&nbsp <span class="label label-warning pull-right">0</span></a> 
             </div>
             
             <div class="col-lg-4"> <br>
              <a class="button2" href=<button class="small-box-footer" data-toggle="modal"  data-target="#notificationModal"></button> Tracker
			  &nbsp;&nbsp <span class="label label-warning pull-right">0</span></a> 
             </div>
             
             <div class="col-lg-4"> <br>
              <a class="button" href=<button class="small-box-footer" data-toggle="modal"  data-target="#notificationModal"></button> Tracker
			  &nbsp;&nbsp <span class="label label-warning pull-right">0</span></a> 
             </div> 
             
             <div class="col-lg-4"><br>  
              <a class="button1" href=<button class="small-box-footer" data-toggle="modal"  data-target="#notificationModal"></button> Tracker
			  &nbsp;&nbsp <span class="label label-warning pull-right">0</span></a> 
             </div> 
             
             <div class="col-lg-4"> <br>
              <button type="submit" class="button">Click me!</button>
             </div>
             
             <div class="col-lg-4"> <br>
              <button type="submit" class="button2">Click me2!</button>
             </div>
                    </div>
                  </div>
                 
                ................ 
            <!-- /.box-body -->
          </div>  
           </div> 
          <!-- /.box -->         
           
                               
                                    
                                </div>
                                <div class="tab-pane fade" id="income-pills">
                                
                                WAITING FOR ADMIN SPECS
                                
                                </div>
                                <div class="tab-pane fade" id="budgetlines-pills">
                                 
          <div class="box box-solid">
            <div class="box-header with-border"> 
              <h3 class="box-title"> <b> Budget lines </b> &nbsp;&nbsp || &nbsp;&nbsp
               <b style="color:red;">Programmes/Objectives</b> &nbsp;&nbsp || &nbsp;&nbsp <b style="color:green;">Cost description </b>  
               &nbsp;&nbsp || &nbsp;&nbsp   <b style="color:blue;">local & remote</b> storage</b> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion2">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title" >
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapsem1">
                       Summary of current financial period budget lines by Total Cost 
                      </a>
                    </h4>
                  </div>
                  <div id="collapsem1" class="panel-collapse collapse in">
                    <div class="box-body">
                               <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example9" class="table table-striped table-bordered" >
        <thead>
        <tr>   
              <th style="text-transform:uppercase;width:13%;font-size:9px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;width:25%;font-size:9px;">BUDGET LINE</th> 
              <th style="text-transform:uppercase;width:8%;font-size:9px;">CODE</th>  
              <th style="text-transform:uppercase;width:20%;font-size:9px;">COST DESCRIPTION</th>
              <th style="text-transform:uppercase;width:20%;font-size:9px;">PROGRAMME</th>  
              <th style="text-transform:uppercase;width:10%;font-size:9px;">TOTAL COST</th>  
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th style="text-transform:uppercase;width:13%;font-size:9px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;width:25%;font-size:9px;">BUDGET LINE</th> 
              <th style="text-transform:uppercase;width:8%;font-size:9px;">CODE</th>  
              <th style="text-transform:uppercase;width:20%;font-size:9px;">COST DESCRIPTION</th>
              <th style="text-transform:uppercase;width:20%;font-size:9px;">PROGRAMME</th>  
              <th style="text-transform:uppercase;width:10%;font-size:9px;">TOTAL COST</th>   
        </tr>
        </tfoot>
        <tbody>
       
 <?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT financial_period, budgetdetails, code, Costdescription, programme, SUM(totalcost) 
                                   FROM budget WHERE periodstatus = 'Active' AND approval = 'Pending' GROUP BY budgetdetails ORDER BY budgetdetails DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['budgetdetails']."***".$res['financial_period'];
		echo "<tr>";  
		echo "<td>".$res['financial_period']."</td>";
		echo "<td>".$res['budgetdetails']."</td>"; 
		echo "<td>".$res['code']."</td>";
		echo "<td>".$res['Costdescription']."</td>"; 
		echo "<td>".$res['programme']."</td>"; 
		echo "<td>".$res['SUM(totalcost)']."</td>";    			
	}
	?>
	</tbody>
  </table>
  
   <a href=<button class="fa fa-circle-o text-light-blue" data-toggle="modal"  data-target="#notificationModal"></button></i> View all 
   <span class="">&nbsp;&nbsp;&nbsp  <b>Current Financial Period Budget Cost:</b> </span></a>
  </div>
                      
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapsem2">
                       Reconciliation of current budget lines against utilization of funds 
                      </a>
                    </h4>
                  </div>
                  <div id="collapsem2" class="panel-collapse collapse">
                    <div class="box-body">
                                 <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example10" class="table table-striped table-bordered" >
        <thead>
        <tr>   
              <th style="text-transform:uppercase;width:15%;font-size:9px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;width:31%;font-size:9px;">BUDGET LINE</th> 
              <th style="text-transform:uppercase;width:8%;font-size:9px;">CODE</th>  
              <th style="text-transform:uppercase;width:12%;font-size:9px;">BUDGET COST</th>
              <th style="text-transform:uppercase;width:10%;font-size:9px;">UTILISED</th>
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ULD</th>   
              <th style="text-transform:uppercase;width:10%;font-size:9px;">REMAINING</th>  
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ROB</th>  
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th style="text-transform:uppercase;width:15%;font-size:9px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;width:31%;font-size:9px;">BUDGET LINE</th> 
              <th style="text-transform:uppercase;width:8%;font-size:9px;">CODE</th>  
              <th style="text-transform:uppercase;width:12%;font-size:9px;">BUDGET COST</th>
              <th style="text-transform:uppercase;width:10%;font-size:9px;">AMOUNT UTILISED</th>
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ULD</th>   
              <th style="text-transform:uppercase;width:10%;font-size:9px;">REMAINING</th>  
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ROB</th>  
        </tr>
        </tfoot>
        <tbody>
       
 
 <?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT financial_period, budgetdetails, code, SUM(totalcost), SUM(amount_utilised), remaining_onbudget, percentage_utilised, percentage_remaining 
                                   FROM budget WHERE periodstatus = 'Active' GROUP BY budgetdetails ORDER BY budgetdetails DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['budgetdetails']."***".$res['financial_period'];
		echo "<tr>";  
		echo "<td>".$res['financial_period']."</td>";
		echo "<td>".$res['budgetdetails']."</td>"; 
		echo "<td>".$res['code']."</td>";
		echo "<td>".$res['SUM(totalcost)']."</td>"; 
		echo "<td>".$res['SUM(amount_utilised)']."</td>";
		echo "<td>".$res['percentage_utilised']."</td>";   
		echo "<td>".$res['remaining_onbudget']."</td>"; 
		echo "<td>".$res['percentage_remaining']."</td>";    			
	}
	?>
	</tbody>
  </table>
  
  <table class="table table-bordered ">
<thead>
  <tr  class="" style="font-weight:normal;">  
    <th style="border-bottom-color:white;font-weight:normal; width:29%;"> Financial period</th>
    <th style="border-bottom-color:white;font-weight:normal; width:17%; "> Total budget cost </th>
    <th style="border-bottom-color:white;font-weight:normal; width:17%;">Amount utilised</th>  
    <th style="border-bottom-color:white;font-weight:normal; width:10%;"> % utilised</th> 
    <th style="border-bottom-color:white;font-weight:normal; width:17%;">Remaining on budget</th>
    <th style="border-bottom-color:white;font-weight:normal; width:10%;"> % remaining</th>
     
  </tr>
</thead>   
<tbody>
  <tr>
    <td style="background-color:#FFF;"> </td> 
    <td style="background-color:#FFF;"> </td>  
    <td style="background-color:#FFF;"> </td>
    <td style="background-color:#FFF;"> </td>   
    <td style="background-color:#FFF;"> </td> 
    <td style="background-color:#FFF;"> <input type="text" value="" style="border:0px;"></td>  
    </tr> 
    </tbody>
    </table> 
     
   </div>
   
   <a href=<button class="fa fa-circle-o text-light-red" data-toggle="modal"  data-target="#notificationModal"></button></i> View all </a>
                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapsem3">
                     Reconciliation of current budget cost description against utilisation of funds
                      </a>
                    </h4>
                  </div>
                  <div id="collapsem3" class="panel-collapse collapse">
                    <div class="box-body">
                    
                                               <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example12" class="table table-striped table-bordered" >
        <thead>
        <tr>   
             <th style="text-transform:uppercase;width:14%;font-size:9px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;width:21%;font-size:9px;">COST DESCRIPTION</th> 
              <th style="text-transform:uppercase;width:20%;font-size:9px;">PROGRAMME / OBJECTIVE</th>   
              <th style="text-transform:uppercase;width:11%;font-size:9px;">TOTAL COST</th> 
              <th style="text-transform:uppercase;width:10%;font-size:9px;">UTILISED</th>
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ULD</th>   
              <th style="text-transform:uppercase;width:10%;font-size:9px;">REMAINING</th>  
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ROB</th>     
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th style="text-transform:uppercase;width:14%;font-size:9px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;width:21%;font-size:9px;">COST DESCRIPTION</th> 
              <th style="text-transform:uppercase;width:20%;font-size:9px;">PROGRAMME / OBJECTIVE</th>   
              <th style="text-transform:uppercase;width:11%;font-size:9px;">TOTAL COST</th> 
              <th style="text-transform:uppercase;width:10%;font-size:9px;">UTILISED</th>
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ULD</th>   
              <th style="text-transform:uppercase;width:10%;font-size:9px;">REMAINING</th>  
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ROB</th>    
        </tr>
        </tfoot>
        <tbody>
       
 <?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT financial_period, Costdescription, programme, SUM(totalcost),
                                   SUM(amount_utilised), remaining_onbudget, percentage_utilised, percentage_remaining 
                                   FROM budget WHERE periodstatus = 'Active' GROUP BY Costdescription ORDER BY Costdescription DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['Costdescription']."***".$res['financial_period'];
		echo "<tr>";  
		echo "<td>".$res['financial_period']."</td>";
		echo "<td>".$res['Costdescription']."</td>"; 
		echo "<td>".$res['programme']."</td>";  
		echo "<td>".$res['SUM(totalcost)']."</td>";  
		echo "<td>".$res['SUM(amount_utilised)']."</td>";
		echo "<td>".$res['percentage_utilised']."</td>";   
		echo "<td>".$res['remaining_onbudget']."</td>"; 
		echo "<td>".$res['percentage_remaining']."</td>"; 		
	}
	?>
	</tbody>
  </table>
         </div>           
                           
                      
                   <a href=<button class="fa fa-circle-o text-light-red" data-toggle="modal"  data-target="#notificationModal"></button></i> View all </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body --> 
          <!-- /.box -->
        </div>
             
            <div class="body">
	  <div class="progress">
	  <div class="progress-bar progress-bar-success" style="width: 70%; background-color:#ecf0f5; color:#000; text-align:left; font-weight:bold;">
      Reconciliation of current budget programmes / Objectives against utilisation of funds <span class="sr-only">35% Complete (success)</span></div>
      <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
	  <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
	  <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
	  </div>
      </div> 
          <br>   
                 <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example13" class="table table-striped table-bordered" >
        <thead>
        <tr>   
             <th style="text-transform:uppercase;width:14%;font-size:9px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;width:28%;font-size:9px;">PROGRAMME / OBJECTIVE</th> 
              <th style="text-transform:uppercase;width:12%;font-size:9px;"> ACTIVITY CODE</th>   
              <th style="text-transform:uppercase;width:12%;font-size:9px;">TOTAL COST</th> 
              <th style="text-transform:uppercase;width:10%;font-size:9px;">UTILISED</th>
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ULD</th>   
              <th style="text-transform:uppercase;width:10%;font-size:9px;">REMAINING</th>  
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ROB</th>    
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th style="text-transform:uppercase;width:14%;font-size:9px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;width:28%;font-size:9px;">PROGRAMME / OBJECTIVE</th> 
              <th style="text-transform:uppercase;width:12%;font-size:9px;"> ACTIVITY CODE</th>   
              <th style="text-transform:uppercase;width:12%;font-size:9px;">TOTAL COST</th> 
              <th style="text-transform:uppercase;width:10%;font-size:9px;">UTILISED</th>
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ULD</th>   
              <th style="text-transform:uppercase;width:10%;font-size:9px;">REMAINING</th>  
              <th style="text-transform:uppercase;width:7%;font-size:9px;">% ROB</th>    
        </tr>
        </tfoot>
        <tbody>
       
 <?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT financial_period, programme, programecode, SUM(totalcost),
                                   SUM(amount_utilised), remaining_onbudget, percentage_utilised, percentage_remaining 
                                   FROM budget WHERE periodstatus = 'Active' GROUP BY programme ORDER BY programme DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['programme']."***".$res['financial_period'];
		echo "<tr>";  
		echo "<td>".$res['financial_period']."</td>";
		echo "<td>".$res['programme']."</td>"; 
		echo "<td>".$res['programecode']."</td>";  
		echo "<td>".$res['SUM(totalcost)']."</td>";  
		echo "<td>".$res['SUM(amount_utilised)']."</td>";
		echo "<td>".$res['percentage_utilised']."</td>";   
		echo "<td>".$res['remaining_onbudget']."</td>"; 
		echo "<td>".$res['percentage_remaining']."</td>"; 		
	}
	?>
	</tbody>
  </table>
         </div> 
          <a href=<button class="fa fa-circle-o text-light-red" data-toggle="modal"  data-target="#notificationModal"></button></i> View all </a>
                          
                                </div> 
                                <div class="tab-pane fade" id="profile-pills">
                                
           
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"> <b> Manage budget approvals </b> &nbsp;&nbsp || &nbsp;&nbsp
               <b style="color:red;">Edit</b>  &nbsp;&nbsp || &nbsp;&nbsp <b style="color:blue;">Server <b style="color:green;">remote</b> storage</b> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion2x">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2x" href="#collapseOne2x">
                       Local storage of approved budget (records ) for active financial period
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne2x" class="panel-collapse collapse in">
                    <div class="box-body">
                      
                      
                     <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example1" class="table table-striped table-bordered" >
        <thead>
        <tr>  
        <th style="text-transform:uppercase;">ID</th>
              <th style="text-transform:uppercase;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;">BUDGET DATAILS</th> 
              <th style="text-transform:uppercase;">CODE</th>  
              <th style="text-transform:uppercase;">UNIT TYPE</th>
              <th style="text-transform:uppercase;">QTY</th> 
              <th style="text-transform:uppercase;">UNIT COST</th> 
              <th style="text-transform:uppercase;">TOTAL COST</th>  
        </tr>
        </thead>
        <tfoot>
        <tr> 
          <th style="text-transform:uppercase;">ID</th>
              <th style="text-transform:uppercase;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;">BUDGET DATAILS</th> 
              <th style="text-transform:uppercase;">CODE</th>  
              <th style="text-transform:uppercase;">UNIT TYPE</th>
              <th style="text-transform:uppercase;">QTY</th> 
              <th style="text-transform:uppercase;">UNIT COST</th> 
              <th style="text-transform:uppercase;">TOTAL COST</th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function configcodee(myid){
var dts = myid.split("***");
document.getElementById("myfinancial_period").value=dts[1];
document.getElementById("myID").value=dts[0];
document.getElementById("mybudgetdetails").value=dts[2]; 
document.getElementById("mycode").value=dts[3]; 
document.getElementById("myunit_type").value=dts[4]; 
document.getElementById("myquantity").value=dts[5]; 
document.getElementById("myunit_cost").value=dts[6]; 
}
</script> 
    
 <?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM budget ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['financial_period']."***".$res['budgetdetails']."***".$res['code']."***".$res['unit_type']."***".$res['quantity']."***".$res['unit_cost'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['financial_period']."</td>";
		echo "<td>".$res['budgetdetails']."</td>"; 
		echo "<td>".$res['code']."</td>";
		echo "<td>".$res['unit_type']."</td>"; 
		echo "<td>".$res['quantity']."</td>";
		echo "<td>".$res['unit_cost']."</td>";
		echo "<td>".$res['totalcost']."</td>";    			
	}
	?>
	</tbody>
  </table>
  </div>  
                      
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2x" href="#collapseTwo2x">
                       Created budget details &nbsp -- &nbsp <B style="color:blue;"> Due for approval</B>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo2x" class="panel-collapse collapse">
                    <div class="box-body">
                    
                    
                    
                     <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example15" class="table table-striped table-bordered" >
        <thead>
        <tr>  
        <th style="text-transform:uppercase;">ID</th>
              <th style="text-transform:uppercase;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;">BUDGET DATAILS</th> 
              <th style="text-transform:uppercase;">CODE</th>  
              <th style="text-transform:uppercase;">UNIT TYPE</th>
              <th style="text-transform:uppercase;">QTY</th> 
              <th style="text-transform:uppercase;">UNIT COST</th> 
              <th style="text-transform:uppercase;">TOTAL COST</th>  
        </tr>
        </thead>
        <tfoot>
        <tr> 
          <th style="text-transform:uppercase;">ID</th>
              <th style="text-transform:uppercase;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;">BUDGET DATAILS</th> 
              <th style="text-transform:uppercase;">CODE</th>  
              <th style="text-transform:uppercase;">UNIT TYPE</th>
              <th style="text-transform:uppercase;">QTY</th> 
              <th style="text-transform:uppercase;">UNIT COST</th> 
              <th style="text-transform:uppercase;">TOTAL COST</th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function configcodee(myid){
var dts = myid.split("***");
document.getElementById("myfinancial_period").value=dts[1];
document.getElementById("myID").value=dts[0];
document.getElementById("mybudgetdetails").value=dts[2]; 
document.getElementById("mycode").value=dts[3]; 
document.getElementById("myunit_type").value=dts[4]; 
document.getElementById("myquantity").value=dts[5]; 
document.getElementById("myunit_cost").value=dts[6]; 
}
</script> 
    
 <?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM budget WHERE periodstatus = 'Active' AND approval = 'Pending' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['financial_period']."***".$res['budgetdetails']."***".$res['code']."***".$res['unit_type']."***".$res['quantity']."***".$res['unit_cost'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['financial_period']."</td>";
		echo "<td>".$res['budgetdetails']."</td>"; 
		echo "<td>".$res['code']."</td>";
		echo "<td>".$res['unit_type']."</td>"; 
		echo "<td>".$res['quantity']."</td>";
		echo "<td>".$res['unit_cost']."</td>";
		echo "<td>".$res['totalcost']."</td>";    			
	}
	?>
	</tbody>
  </table>
  </div>  
                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2x" href="#collapseThree2x">
                       Search lapsed budget details by financial period
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree2x" class="panel-collapse collapse">
                    <div class="box-body">
                                    <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example14" class="table table-striped table-bordered" >
        <thead>
        <tr>  
        <th style="text-transform:uppercase;">ID</th>
              <th style="text-transform:uppercase;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;">BUDGET DATAILS</th> 
              <th style="text-transform:uppercase;">CODE</th>  
              <th style="text-transform:uppercase;">UNIT TYPE</th>
              <th style="text-transform:uppercase;">QTY</th> 
              <th style="text-transform:uppercase;">UNIT COST</th> 
              <th style="text-transform:uppercase;">TOTAL COST</th>  
        </tr>
        </thead>
        <tfoot>
        <tr> 
          <th style="text-transform:uppercase;">ID</th>
              <th style="text-transform:uppercase;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;">BUDGET DATAILS</th> 
              <th style="text-transform:uppercase;">CODE</th>  
              <th style="text-transform:uppercase;">UNIT TYPE</th>
              <th style="text-transform:uppercase;">QTY</th> 
              <th style="text-transform:uppercase;">UNIT COST</th> 
              <th style="text-transform:uppercase;">TOTAL COST</th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function configcodee(myid){
var dts = myid.split("***");
document.getElementById("myfinancial_period").value=dts[1];
document.getElementById("myID").value=dts[0];
document.getElementById("mybudgetdetails").value=dts[2]; 
document.getElementById("mycode").value=dts[3]; 
document.getElementById("myunit_type").value=dts[4]; 
document.getElementById("myquantity").value=dts[5]; 
document.getElementById("myunit_cost").value=dts[6]; 
}
</script> 
    
 <?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM budget ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['financial_period']."***".$res['budgetdetails']."***".$res['code']."***".$res['unit_type']."***".$res['quantity']."***".$res['unit_cost'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['financial_period']."</td>";
		echo "<td>".$res['budgetdetails']."</td>"; 
		echo "<td>".$res['code']."</td>";
		echo "<td>".$res['unit_type']."</td>"; 
		echo "<td>".$res['quantity']."</td>";
		echo "<td>".$res['unit_cost']."</td>";
		echo "<td>".$res['totalcost']."</td>";    			
	}
	?>
	</tbody>
  </table>
  </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            </div>                         
                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                
                                   
                                    
                            
                                    
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <h4>Settings Tab</h4>
                                    <p> </p>
                                </div>
                                 <div class="tab-pane fade" id="seta-pills">
                                    <h4>Settings Tab</h4>
                                    <p> </p>
                                </div>
                                 <div class="tab-pane fade" id="setb-pills">
                                    <h4>Settings Tab</h4>
                                    <p> </p>
                                </div>
                            </div>
                        </div>
                    </div> 
              </div>
          <!-- /.box -->
            
   
 
    </section>
    
     <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="addbudget" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body"> 
                                        
           <div class=""  id="invoice_receiptpage1" >  </div>
                <script>

          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'config/inline/invoice_receiptpage1.php',
                       success : function(data){
                                $('#invoice_receiptpage1').html(data);
                                 }
               });
               }, 2000);

          </script>
         
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                    
                     <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m1" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Add new cost description </h4>
                                        </div>
                                        <div class="modal-body">
                                         <form class="form-horizontal" action="budget_programprocess.php" method="POST" >     
    
    <table class="table table-bordered" style="background-color:#ecf0f5;">
    <thead>
      <tr  class="" style="font-weight:normal;"> 
        <th style="border-bottom-color:white;font-weight:bold; width:40%;">Cost description</th> 
        <th style="border-bottom-color:white;font-weight:bold; width:40%;">Programe </th>
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Pgm code</th> 
        
         
    </tr>
    </thead>   
    <tbody> 
        <tr> 
        
        <td> <input type="text" name="Cost_description" id="Cost_description"  required="required" style="width:100%;background-color:#ecf0f5;">  </td>
             
        <td> <input type="text" name="programme_ieb" id="programme_ieb"  required="required" style="width:100%;background-color:#ecf0f5;">  </td> 
         
        <td><input type="text"  name="programecode_ieb" id="programecode_ieb"  required="required" style="width:100%;background-color:#ecf0f5;"> </td> 
        
    </tr> 
    </tbody>
    </table> 
    </div> 
           <input type="hidden" name="lastupdatedateby_ieb" id="lastupdatedateby_ieb" value="<?php echo $nameofuser; ?> ">
           
         <center> <input type="submit" name="button" id="button" value="Save" /> 
          <a href=<button class="fa fa-th" data-toggle="modal"  data-target="#m3" </button> </i>View all</a> 
          </center>             
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                    
                     <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m2" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Budget  details</h4>
                                        </div>
                                        <div class="modal-body">
                                         <form class="form-horizontal" action="budget_configprocess.php" method="POST" > 
                                         
                                         <?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stdd ="";
if( $result = $connect->query("SELECT * FROM budgetcategory "))
{ while ($row = $result->fetch_assoc() ) 
{   $stdd=$stdd. "<option> " . $row['budgetlinename'] . " </option>";   } 
  }
$connect->close();
?>  

 <?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stdda ="";
if( $result = $connect->query("SELECT * FROM budgetcategory "))
{ while ($row = $result->fetch_assoc() ) 
{   $stdda=$stdda. "<option> " . $row['blcode'] . " </option>";   } 
  }
$connect->close();
?>                                                                                       
    <div class="col-sm-5">               
    <table class="table table-bordered" style="background-color:#ecf0f5;">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Budget details </th>
        <th style="border-bottom-color:white;font-weight:bold; width:20%; text-align:center;">Category (Budget line)</th>
        <th style="border-bottom-color:white;font-weight:bold; width:10%;">Code</th>   
         
    </tr>
    </thead>   
    <tbody>
        <tr> 
        <td> <textarea name="budgetdetails" id="budgetdetails"  placeholder="like: STI management" required="required" 
        style="width:100%; height:20px;background-color:#ecf0f5;"> </textarea> </td>
        
        <td> <select name="budgetline" id="budgetline"  required="required"  style="width:100%;background-color:#ecf0f5;" > 
         ddd     = "<?php   echo $stdd; ?>"; 
         </select> 
        </td>
          
        <td> <select name="code" id="code" required="required" style="width:100%;background-color:#ecf0f5;">  
         ddd     = "<?php   echo $stdda; ?>"; 
         </select>
        </td>  
    </tr> 
    </tbody>
    </table> 
    </div>
    
    
     <div class="col-sm-2">               
    <table class="table table-bordered" style="background-color:#ecf0f5;">
    <thead>
      <tr  class="" style="font-weight:normal;">   
        <th style="border-bottom-color:white;font-weight:bold; width:10%; text-align:center;">Code</th>   
         
    </tr>
    </thead>   
    <tbody>
        <tr>   
        <td> <input type="text" name="detailscode" id="detailscode"  placeholder="Applies to standalone details" style="width:100%;background-color:#ecf0f5;">  </td>  
    </tr> 
    </tbody>
    </table> 
    </div>
   
   <?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stddd1 ="";
if( $result = $connect->query("SELECT * FROM budgetprogram "))
{ while ($row = $result->fetch_assoc() ) 
{   $stddd1=$stddd1. "<option> " . $row['Cost_description'] . " </option>";   } 
  }
$connect->close();
?>  

 <?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stddd2 ="";
if( $result = $connect->query("SELECT * FROM budgetprogram GROUP BY programme_ieb ORDER BY programme_ieb DESC"))
{ while ($row = $result->fetch_assoc() ) 
{   $stddd2=$stddd2. "<option> " . $row['programme_ieb'] . " </option>";   } 
  }
$connect->close();
?>  

<?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stddd3 ="";
if( $result = $connect->query("SELECT * FROM budgetprogram GROUP BY programecode_ieb ORDER BY programecode_ieb DESC"))
{ while ($row = $result->fetch_assoc() ) 
{   $stddd3=$stddd3. "<option> " . $row['programecode_ieb'] . " </option>";   } 
  }
$connect->close();
?>                                           
    
    <div class="col-sm-5">    
    
    <table class="table table-bordered" style="background-color:#ecf0f5;">
    <thead>
      <tr  class="" style="font-weight:normal;">   
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Cost description</th>
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Programe </th>
        <th style="border-bottom-color:white;font-weight:bold; width:10%;">Pgm code</th>  
         
    </tr>
    </thead>   
    <tbody>
        <tr>  
        <td> <select name="Costdescription" id="Costdescription"  required="required" style="width:100%;background-color:#ecf0f5;">
         ddd     = "<?php   echo $stddd1; ?>"; 
        </select> </td>
         
        <td> <select name="programme" id="programme"  required="required" style="width:100%;background-color:#ecf0f5;"> 
         ddd     = "<?php   echo $stddd2; ?>"; 
        </select> </td> 
         
        <td><select  name="programecode" id="programecode"  required="required" style="width:100%;background-color:#ecf0f5;">
         ddd     = "<?php   echo $stddd3; ?>"; 
        </select> </td>  
    </tr> 
    </tbody>
    </table> 
    </div>
        <input type="hidden" name="lastupdatedate" id="lastupdatedate"  value="<?php echo date('d-m-y'); ?>"  style="width:100%;"> 
         <center> <input type="submit" name="button" id="button" value="Add" />   </center>             
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                    
                   <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m3" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Cost description by programme </h4>
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal">     
                 
            <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example3" class="table table-striped table-bordered" >
        <thead>
        <tr>  
        <th style="text-transform:uppercase;">ID</th>
             <th style="text-transform:uppercase;">COST DESCRIPTION</th>
              <th style="text-transform:uppercase;">PROGRAMME</th> 
              <th style="text-transform:uppercase;">PGM CODE</th>   
        </tr>
        </thead>
        <tfoot>
        <tr> 
          <th style="text-transform:uppercase;">ID</th>
              <th style="text-transform:uppercase;">COST DESCRIPTION</th>
              <th style="text-transform:uppercase;">PROGRAMME</th> 
              <th style="text-transform:uppercase;">PGM CODE</th>   
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function configcodee(myid){
var dts = myid.split("***");
document.getElementById("myCost_description").value=dts[1];
document.getElementById("myID").value=dts[0];
document.getElementById("myprogramme_ieb").value=dts[2]; 
document.getElementById("myprogramecode_ieb").value=dts[3];  
}
</script> 
    
 <?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM budgetprogram ORDER BY Cost_description DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['Cost_description']."***".$res['programecode_ieb']."***".$res['programecode_ieb'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['Cost_description']."</td>";
		echo "<td>".$res['programme_ieb']."</td>"; 
		echo "<td>".$res['programecode_ieb']."</td>";    			
	}
	?>
	</tbody>
  </table>
  </div>
           
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>  
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m5" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">New budget line   </h4>
                                        </div>
                                        <div class="modal-body">
                                         <form class="form-horizontal" action="budget_categoryprocess.php" method="POST" >     
    
    <table class="table table-bordered" style="background-color:#ecf0f5;">
    <thead>
      <tr  class="" style="font-weight:normal;"> 
        <th style="border-bottom-color:white;font-weight:bold; width:80%;">Budgetline</th> 
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Code </th> 
        
         
    </tr>
    </thead>   
    <tbody> 
        <tr> 
        
        <td> <input type="text" name="budgetlinename" id="budgetlinename"  required="required" style="width:100%;background-color:#ecf0f5;">  </td>
             
        <td> <input type="text" name="blcode" id="blcode"  required="required" style="width:100%;background-color:#ecf0f5;">  </td> 
          
        
    </tr> 
    </tbody>
    </table> 
    </div>  
           
         <center> <input type="submit" name="button" id="button" value="Save" />  
          </center>             
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> 
                    
                    
                     <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m5" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Add new budget line </h4>
                                        </div>
                                        <div class="modal-body">
                                         <form class="form-horizontal" action="budget_categoryprocess.php" method="POST" >     
    
    <table class="table table-bordered" style="background-color:#ecf0f5;">
    <thead>
      <tr  class="" style="font-weight:normal;"> 
        <th style="border-bottom-color:white;font-weight:bold; width:80%;">Budgetline</th> 
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Code </th> 
        
         
    </tr>
    </thead>   
    <tbody> 
        <tr> 
        
        <td> <input type="text" name="budgetlinename" id="budgetlinename"  required="required" style="width:100%;background-color:#ecf0f5;">  </td>
             
        <td> <input type="text" name="blcode" id="blcode"  required="required" style="width:100%;background-color:#ecf0f5;">  </td> 
          
        
    </tr> 
    </tbody>
    </table> 
    </div>  
           
         <center> <input type="submit" name="button" id="button" value="Save" />  
          </center>             
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>   
                    
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m6" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Budget classifications </h4>
                                        </div>
                                        <div class="modal-body">
                                                                      <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example" class="table table-striped table-bordered" >
        <thead>
        <tr>  
               <th style="text-transform:uppercase; width:5%;">ID</th>
              <th style="text-transform:uppercase;width:20%;">BUDGET DETAILS</th>
              <th style="text-transform:uppercase;width:5%;">BDCODEXT</th> 
              <th style="text-transform:uppercase;width:20%;">CATEGORY</th> 
              <th style="text-transform:uppercase;width:5%;">CODE</th>  
              <th style="text-transform:uppercase;width:20%;">COST DESCRIPTION</th>
              <th style="text-transform:uppercase;width:20%;">PROGRAME</th> 
              <th style="text-transform:uppercase;width:5%;">PGM.CODE</th>  
        </tr>
        </thead>
        <tfoot>
        <tr> 
              <th style="text-transform:uppercase; width:5%;">ID</th>
              <th style="text-transform:uppercase;width:20%;">BUDGET DETAILS</th>
              <th style="text-transform:uppercase;width:5%;">BDCODEXT</th> 
              <th style="text-transform:uppercase;width:20%;">CATEGORY</th> 
              <th style="text-transform:uppercase;width:5%;">CODE</th>  
              <th style="text-transform:uppercase;width:20%;">COST DESCRIPTION</th>
              <th style="text-transform:uppercase;width:20%;">PROGRAME</th> 
              <th style="text-transform:uppercase;width:5%;">PGM.CODE</th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function configcodee(myid){
var dts = myid.split("***");
document.getElementById("mybudgetdetails").value=dts[1];
document.getElementById("myID").value=dts[0];
document.getElementById("mybudgetline").value=dts[2]; 
document.getElementById("mycode").value=dts[3]; 
document.getElementById("myCostdescription").value=dts[4]; 
document.getElementById("myprogramme").value=dts[5]; 
document.getElementById("myprogramecode").value=dts[6]; 
}
</script> 
    
<?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM budgetconfig ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['budgetdetails']."***".$res['budgetline']."***".$res['code']."***".$res['Costdescription']."***".$res['programme']."***".$res['programecode'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['budgetdetails']."</td>";
		echo "<td>".$res['detailscode']."</td>";
		echo "<td>".$res['budgetline']."</td>"; 
		echo "<td>".$res['code']."</td>";
		echo "<td>".$res['Costdescription']."</td>"; 
		echo "<td>".$res['programme']."</td>";
		echo "<td>".$res['programecode']."</td>";    			
	}
	?>
	</tbody>
  </table>
  </div>
           
           <div class="col-sm-12">
           <div class="panel-body">
       
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> 
                    
                       
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m10" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;"> 
                                            
                                            Add / edit financial periods </h4>
                                        </div>
                                        <div class="modal-body">
                                        <form class="form-horizontal" method="post" action="budget_perriodsprocess.php">
   <br>   
   
   <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th style="text-transform:uppercase;">Financial year</th>
              <th style="text-transform:uppercase;">Financial period</th>
              <th style="text-transform:uppercase;">Status</th> 
              <th style="text-transform:uppercase;"></th>  
            </tr>
            </thead>
            <tbody>
            <tr>
               <td style="width:20%;"><input type="text" name="financialyear" id="myfinancialyear"  value=""  style="width:100%; text-align:left;"></td>
  
               <td style="width:40%;"><input type="text" name="period" id="myperiod" value=""   style="width:100%; text-align:left;">  </td>
               
               <td style="width:20%;"><input type="text" name="status" id="mystatus" value="" > </td>
               <input type="hidden" id="myID" name="id" value="" >
               
               <td style="width:20%;"> <input type="submit" name="update" value="Save" > </td>
              
             </tr>
            <tr>
           </tbody>
          </table>    
	     </form>
 
 
<script> 
function postpetty(myid){
var dts = myid.split("***");
document.getElementById("myfinancialyear").value=dts[1];
document.getElementById("myID").value=dts[0]; 
document.getElementById("myperiod").value=dts[2];
document.getElementById("mystatus").value=dts[3];   
}
</script>
  
	  <div id="work" style="width:100%; font-weight:normal;"> 
                                 <table id="example8" class="table table-striped table-bordered" >
        <thead>
        <tr>  
              <th style="text-transform:uppercase;font-size:10px;">FISCAL YEAR</th>
              <th style="text-transform:uppercase;font-size:10px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;font-size:10px;">STATUS</th> 
              <th style="text-transform:uppercase;font-size:10px;">ACTION</th>   
        </tr>
        </thead>
        <tfoot>
        <tr> 
             <th style="text-transform:uppercase;font-size:10px;">FISCAL YEAR</th>
              <th style="text-transform:uppercase;font-size:10px;">FINANCIAL PERIOD</th>
              <th style="text-transform:uppercase;font-size:10px;">STATUS</th> 
              <th style="text-transform:uppercase;font-size:10px;">ACTION</th>  
        </tr>
        </tfoot>
        <tbody>
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM financialperiod ORDER BY financialyear DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['financialyear']."***".$res['period']."***".$res['status'];
	      
		echo "<tr>";   
		echo "<td>".$res['financialyear']."</td>"; 
		echo "<td>".$res['period']."</td>"; 
		echo "<td>".$res['status']."</td>";  
		echo "<td><a href=\"config/inline/financialperiod_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Truncate</a></td>";	  			
	}
?>
	</tbody>
  </table> 
  
  </div>
           
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                             </div></div>
                           </div> 
                    
                    
                    
                    
                    
                    
                    
                         
                    </div>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div>
    <strong>Copyright &copy;  <a href="budget_config.php">Naguru Teenage Information and Health Center</a>.</strong> All rights
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
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
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
<!-- ./wrapper -->

<!-- jQuery 2.2.3 --> 
 
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
  
</body>
</html>

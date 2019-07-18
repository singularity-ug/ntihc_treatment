<?php
error_reporting(0);
include_once 'dbcon.php';

if(isset($_POST['save_mul']))
{
	$total = $_POST['total'];

	for($i=1; $i<=$total; $i++)
	{
		$FIRSTNAME = $_POST["FIRSTNAME$i"];
		$LASTNAME = $_POST["LASTNAME$i"];
		$PHONECONTACT = $_POST["PHONECONTACT$i"];
		$GENDER = $_POST["GENDER$i"];
		$SUMMARY_OF_QUALIFICATIONS = $_POST["SUMMARY_OF_QUALIFICATIONS$i"];
		$DRIVING_PERMIT_CLASSESS = $_POST["DRIVING_PERMIT_CLASSESS$i"];
		$POSITION_APPLIED_FOR = $_POST["POSITION_APPLIED_FOR$i"];
		$COMMENT = $_POST["COMMENT$i"];  
		$sql="INSERT INTO vetting_screening(FIRSTNAME,LASTNAME,PHONECONTACT,GENDER,SUMMARY_OF_QUALIFICATIONS,
		DRIVING_PERMIT_CLASSESS,POSITION_APPLIED_FOR,COMMENT) 
		VALUES('".$FIRSTNAME."','".$LASTNAME."','".$PHONECONTACT."','".$GENDER."','".$SUMMARY_OF_QUALIFICATIONS."',
		'".$DRIVING_PERMIT_CLASSESS."','".$POSITION_APPLIED_FOR."','".$COMMENT."' )";

		$sql = $MySQLiconn->query($sql);
	}

	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='new_applicants.php'; 
	    exit(); 
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while inserting , TRY AGAIN');
		</script>
        <?php
	}
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
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
           
		   
		{extend :'excel',
		 title:' STAFF CONTACTS'
		}, 
		{extend :'pdf',
		 title:'STAFF CONTACTS'
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
             	font-size: 12px;
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
           <span class="glyphicon glyphicon-user"></span> Welcome   <br>
         <a href="javascript:void(0)"><span></span>  </a> <p></p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">ADMINISTRATION MODULE</li>
        <li class="active treeview">  
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Cash requisitions</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu"> 

     <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#notificationModaltwentyfour"  </button> </i>Imprest</a></li>
     <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#buttonedModal "   </button> </i>Cash payment voucher</a></li>


          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Our wall</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li> 
        <li class="treeview"> 
        </li>
        <li class="header">User Departments</li>
         <li><a href="home_user.php"><i class="fa fa-circle-o text-red"></i>Home User<span></span></a></li>
        <li><a href="home_hr.php"><i class="fa fa-circle-o text-red"></i>Programme Director<span></span></a></li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Advocacy and Research</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="home_hr.php"><i class="fa fa-circle-o text-yellow"></i>Head Advocacy and Research<span></span></a></li> 
 
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
           <li><a href="home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Head Fianance and Admin<span></span></a></li>
           <li><a href="home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Procurement<span></span></a></li>
           <li><a href="home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Human Resource<span></span></a></li>
           <li><a href="home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Property management<span></span></a></li>
 
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
          <li><a href="home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Head Service Delivery<span></span></a></li>
 
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
      <h1> 
        <small> HR MODULE</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="home_hr.php"><i class="fa fa-th"></i>Home page</a></li> 
        <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#contacts"></button></i> Contacts</a></li>   
      </ol>

        <br>
    <!-- Main content -->
      <div class="row"> 
            <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="font-family:lcd;">NTIHC | HUMAN RESOURCE SUB SYSTEM</h3>

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
         <ul class="nav nav-tabs"> 
                  <!-- Info boxes --> 
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center>  <a href="#gen" data-toggle="tab"> <img src="../database icons/access-administrator-account.jpg" width="100" height="100" class="img-circle" 
         style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
           General <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col -->
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <a href="#appt" data-toggle="tab"> <img src="../database icons/images.jpg"width="100" height="100" class="img-circle" 
         style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
             Applicant <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col -->
         
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/icon f2images.jpg" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#seudo" data-toggle="tab"> S <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col -->
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/svccimages.jpg" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="#terror" data-toggle="tab"> G <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col --> 

      <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/iffmages.png" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="home_ftl.php" class="small-box-footer">Accidents<i class="fa fa-arrow-circle-right"></i></a>
           <a href="#troy" data-toggle="tab"> General <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col -->
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/sysicons/insuranceimages.jpg" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="#lampx" data-toggle="tab"> General <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        </div>
        <!-- ./col -->

                <!-- /.col -->
                <div class="col-md-12">
            
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
               <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color:#ecf0f5; font-weight:bold; color:#000000; text-align:left;">
		     <span  class="label label- pull-right" > </span>
             </div>
             </div><br>
             
              </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="gen">
             <div class="col-sm-5">
             <table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
             <th>No</th>
              <th>NAME</th>
              <th>PF NO.</th> 
               <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th>
              <th>NAME</th>
              <th>PF-NUMBER</th> 
               <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php
require('../php/confighr.php');
$sql = "SELECT * FROM humanresource ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
 $vx = $row['FIRSTNAME']."__".$row['LASTNAME']."__".$row['NEWPFNUMBER']."__".$row['MOBILEPHONE']."__".$row['OTHERNAME']."__".$row['OTHERNAME']."__"
 .$row['GENDER']."__".$row['BIRTHDATE']."__".$row['RELIGION']."__".$row['TRIBE']."__".$row['NATIONALITY']."__".$row['MARITALSTATUS']."__"
 .$row['NEXTOFKIN']."__".$row['RELATIONSHIP']."__".$row['NEXTOFKINCONTACT']."__".$row['MOBILEPHONE']."__".$row['EMERGENCYCONTACT']."__".$row['EMAIL']."__"
 .$row['NSSFNO']."__".$row['TINNO']."__".$row['PASSPORTPHOTO']."__"."__".$row['id'];
  echo'<tr>'.
       '<td>'.$x.'</td>'.
	      '<td>'.$row['FIRSTNAME'].'  '.$row['LASTNAME'].'</td>'.
          '<td>'.$row['NEWPFNUMBER'].'</td>'. 
		     '<td><input type="button" style="background-color:#ecf0f5;"  id="'.$vx.'" onclick="postvalues(this.id)" value="POST"></td>'.
   '</tr>';
$x=$x+1;

 }

 ?>
  </tbody>
  </table>
   
  <p></p>
  
  <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color:#ecf0f5; font-weight:bold; color:#000000; text-align:left;">
		     A<span  class="label label- pull-right" >
             <p style=" text-align:left; font-weight:bold; font-size:25px; color:red; font-family:lcd;margin-top: -5px;">   
             0
             </span>
             </div>
             </div><p></p> 
  
  <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; ">
         A  <span  class="label label- pull-right" >   
    <p style=" text-align:left; font-weight:bold; font-size:25px; color:red; font-family:lcd;margin-top: -5px;">                              
   <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
		
                                 </span>  
                                </div> </div> 
                               <p></p> 
                               
       <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color:#ecf0f5; font-weight:bold; color:#000000; text-align:left;">
		     A<span  class="label label- pull-right" >
             <p style=" text-align:left; font-weight:bold; font-size:25px; color:red; font-family:lcd;margin-top: -5px;">   
             0
             </span>
             </div>
             </div><p></p>                         
                                
       <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-black" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
         A  <span  class="label label- pull-right" > 
    <p style=" text-align:left; font-weight:bold; font-size:25px; color:white; font-family:lcd; margin-top:-5px;"> 
    0   
     </span>  
                                </div> </div><p></p> 
                                
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color:#ecf0f5; font-weight:bold; color:#000000; text-align:left;">
		     A<span  class="label label- pull-right" >
             <p style=" text-align:left; font-weight:bold; font-size:25px; color:red; font-family:lcd;margin-top: -5px;">   
             0
             </span>
             </div>
             </div><p></p>                             
                                
         <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
         A  <span  class="label label- pull-right" > 
    <p style=" text-align:left; font-weight:bold; font-size:25px; color:white; font-family:lcd; margin-top:-5px;"> 
    0   
     </span>  
                                </div> </div> <p></p> 
                                
         <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color:#ecf0f5; font-weight:bold; color:#000000; text-align:left;">
		     A<span  class="label label- pull-right" >
             <p style=" text-align:left; font-weight:bold; font-size:25px; color:red; font-family:lcd;margin-top: -5px;">   
             0
             </span>
             </div>
             </div><p></p>
                                     
          <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
         A  <span  class="label label- pull-right" > 
    <p style=" text-align:left; font-weight:bold; font-size:25px; color:white; font-family:lcd; margin-top:-5px;"> 
    0   
     </span>  
                                </div> </div>  <p></p> 
                                
         <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
         A  <span  class="label label- pull-right" > 
    <p style=" text-align:left; font-weight:bold; font-size:25px; color:white; font-family:lcd; margin-top:-5px;"> 
    0   
     </span>  
                                </div> </div> <p></p>                                                                      
                                                        
      </div> 
      <div class="col-sm-7" style="background-color:#ffffff; height:auto; ">
       <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">General</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab"></a>
                                </li>
                                <li><a href="#messages" data-toggle="tab"></a>
                                </li>
                                <li><a href="#settings" data-toggle="tab"></a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">

                 <div class="col-sm-8" style=" border-radius:11px; border:1px solid #eee;">
                              <form class="form-horizontal" style="height:auto;">
                 <div class="form-group">
                    <label class="control-label col-sm-6">First name </label>
                    <div class="col-sm-6">
                        <input type="text"  name="FIRSTNAME"  id="FIRSTNAME"  readonly="readonly" class="form-control" style="background-color:#fff;">
                          <input type="hidden" id="id" name="id">
                    </div>
                </div>

                <!-- /.form-group -->
                  <div class="form-group">
                    <label class="control-label col-sm-6">Last name </label>
                    <div class="col-sm-6">
                        <input type="text"  name="LASTNAME"  id="LASTNAME" readonly="readonly" class="form-control" style="background-color:#fff;">
                    </div>
                </div>

                <!-- /.form-group -->
                 <div class="form-group">
                    <label class="control-label col-sm-6">Other name </label>
                    <div class="col-sm-6">
                        <input type="text" name="OTHERNAME"  id="OTHERNAME" readonly="readonly" class="form-control" style="background-color:#fff;">
                    </div>
                </div>
                <!-- /.form-group -->


                     <!-- /.form-group -->
                <div class="form-group">
    <label class="control-label col-sm-6">Gender</label>
    <div class="col-sm-6">
       <input name="text" class="form-control" id="GENDER" name="GENDER" readonly="readonly" style="background-color:#fff;">
     
    </div>
    </div>
    <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-6">Birth date</label>
                    <div class="col-sm-6">
                        <input type="date"  name="BIRTHDATE"  id="datepicker" readonly="readonly" class="form-control" style="background-color:#fff;">
                    </div>
                </div>

                 <!-- /.form-group -->
                <div class="form-group">
    <label class="control-label col-sm-6">Religion</label>
    <div class="col-sm-6">
       <input name="text" class="form-control" id="RELIGION" name="RELIGION" readonly="readonly" style="background-color:#fff;">
      
    </div>
    </div>
    <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-label col-sm-6">Tribe</label>
                    <div class="col-sm-6">
                        <input type="text"  name="TRIBE"  id="TRIBE" readonly="readonly" class="form-control" style="background-color:#fff;">
                    </div>
                </div>
                <p></p>
                <!-- /.form-group -->
                <div class="form-group">
    <label class="control-label col-sm-6">Nationality</label>
    <div class="col-sm-6">
        <input name="text" class="form-control" id="NATIONALITY" name="NATIONALITY" readonly="readonly" style="background-color:#fff;">
 
    </div>
    </div>
    <!-- /.form-group -->

                 <div class="form-group">
    <label class="control-label col-sm-6">Marital status</label>
    <div class="col-sm-6">
        <input name="text" class="form-control" id="MARITALSTATUS" name="MARITALSTATUS" readonly="readonly" style="background-color:#fff;">
           
    </div>
    </div>
    <!-- /.form-group -->
    <div class="form-group">
                    <label class="control-label col-sm-6">Next of kin</label>
                    <div class="col-sm-6">
                        <input type="text"  name="NEXTOFKIN"  id="NEXTOFKIN"  class="form-control" readonly="readonly" style="background-color:#fff;">
                    </div>
                </div> 
                <!-- /.form-group -->

    <div class="form-group">
                    <label class="control-label col-sm-6">Relationship</label>
                    <div class="col-sm-6">
                       <input name="text" class="form-control" id="RELATIONSHIP" name="RELATIONSHIP" readonly="readonly" style="background-color:#fff;">
                      
                    </div>
                </div>
                <p>
                <!-- /.form-group -->
    <!-- /.form-group -->
     <div class="form-group">
                    <label class="control-label col-sm-6">Contact</label>
                    <div class="col-sm-6">
                     <input type="text"  name="NEXTOFKINCONTACT"  id="NEXTOFKINCONTACT" class="form-control"readonly="readonly" style="background-color:#fff;">
                    </div>
                </div>  
               
                <div class="form-group">
                <label class="control-label col-sm-6">Mobile phone</label>
                    <div class="col-sm-6"> 
                        <input type="alphanumeric" name="MOBILEPHONE"  id="MOBILEPHONE"  class="form-control" readonly="readonly"
                        style="background-color:#fff;">
                    </div> 
                </div>
  
                     <div class="form-group">
                <label class="control-label col-sm-6">Home phone</label>
                    <div class="col-sm-6">  
                        <input type="alphanumeric"  name="HOMEPHONE"  id="HOMEPHONE" class="form-control" readonly="readonly" 
                        style="background-color:#fff;">
                    </div></div>
                    
                    
                <div class="form-group">
                <label class="control-label col-sm-6">Emergency</label>
                    <div class="col-sm-6">  
                    <input type="alphanumeric"  name="EMERGENCYCONTACT"  id="EMERGENCYCONTACT"  class="form-control" readonly="readonly" 
                    style="background-color:#fff;">
                    </div></div>
                    </div>
                    
                    
                 <div class="col-sm-4">
                  <div class="form-group">
                    <label class="control-label col-lg-5"></label>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" id="PASSPORT" 
                            style="width:164px; height:172px; border: 1px solid #eee;border-radius: 11px;"></div>
                            <div> 
           <span class=""><span class="fileupload-new"> </span><span class="fileupload-exists"></span><input type="file" name="PASSPORTPHOTO" id="PASSPORTPHOTO"disabled="disabled"  style="margin-top: -18px;margin-left: 0px;width: 166px;"/></span>
                <a href="#" class=" " data-dismiss="fileupload" style="margin-left: 146px;
margin-top: -41px; height:20px;"></a>
        </div></div>
          
                 <div class="form-group" style="margin-top:-20px;">
                    <label >E-mail </label>
                        <input type="text" name="EMAIL"  id="EMAIL" class="form-control" readonly="readonly" style="background-color:#fff; text-transform:lowercase;">
                    </div>

                <div class="form-group">
                <label >NSSF  number</label>
                        <input type="text"  name="NSSFNO"  id="NSSFNO" class="form-control"  readonly="readonly" style="background-color:#fff;">
                    </div>
                    <!-- /.form-group -->
                <div class="form-group">
                <label >Tin number</label>
                        <input type="text"  name="TINNO"  id="TINNO" class="form-control" readonly="readonly" style="background-color:#fff;">
                    </div>
                <!-- /.form-group -->
                    <div class="form-group" style="margin-top:-8px;">
                    <label >New PF number</label>
                        <input type="text" name="NEWPFNUMBER"  id="NEWPFNUMBER" class="form-control" readonly="readonly" style="background-color:#fff;">
                    </div>
                <!-- /.form-group -->
                </form>
    </div> </div>
     <!-- /.form-group ------------------------------------------------------------------------------------------------------------------------------->


                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Profile Tab</h4>
                                   ..
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Messages Tab</h4>
                                    ...
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Settings Tab</h4>
                                    ..
                                </div>
                            </div>
                        </div>
                
           
               </div>
               <div class="tab-pane fade" id="appt">
                
              <form method="post" action="hr_vetting/add-data.php">

<table class='table table-bordered'>

<tr>
<td>Enter how the number of applicants you want to insert</td>
</tr>

<tr>
<td>
<input type="text" name="no_of_rec" placeholder="how many records u want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" class="form-control" required />
</td>
</tr>

<tr>
<td><button type="submit" name="btn-gen-form" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> &nbsp; Generate</button> 

<a href="new_applicants.php" style="margin-top: 0px;" class="btn btn-danger"> <i class="glyphicon glyphicon-fast-forward"></i> &nbsp; Shortlist</a>

<a href="new_interviews.php" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> &nbsp; Interviews</a>
</td>
</tr>

</table> 
</form>


<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
	<table class='table table-bordered'>

     <tr>
    <th>##</th>
    <th>FIRST NAME</th>
    <th>LAST NAME</th>
	<th>PHONE CONTACT</th>
    <th>GENDER</th>
	<th>QUALIFICATIONS</th>
    <th>PERMIT CLASSESS</th>
    <th>POSITION APPLIED</th>
    <th>COMMENT</th>
    </tr>
	<?php
	for($i=1; $i<=$_POST["no_of_rec"]; $i++)
	{
		?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="FIRSTNAME<?php echo $i; ?>" id="FIRSTNAME<?php echo $i; ?>" required="required" class='form-control' /></td>
        
        <td><input type="text" name="LASTNAME<?php echo $i; ?>" id="LASTNAME<?php echo $i; ?>" required="required" class='form-control'  /></td>
        
		<td><input type="alphanumeric" name="PHONECONTACT<?php echo $i; ?>"  id="PHONECONTACT<?php echo $i; ?>" class='form-control' maxlength="10" /></td>
        
        <td><select class='form-control' name="GENDER<?php echo $i; ?>" id="GENDER<?php echo $i; ?>" required="required" />
        <option value="1"> </option>
                                <option value="MALE">M</option>
								<option value="FEMALE">F</option>   
                                </select> 
        </td>
        
        
		<td><textarea id="wysihtml5" name="SUMMARY_OF_QUALIFICATIONS<?php echo $i; ?>"  required="required" class='form-control' style="height: 23px;"/></textarea></td>
        <td><input type="text" name="DRIVING_PERMIT_CLASSESS<?php echo $i; ?>" id="DRIVING_PERMIT_CLASSESS<?php echo $i; ?>"  value"N/A" placeholder="N/A" class='form-control' style=" text-align:center;"/></td> 
        
		 <td><input type="text" name="POSITION_APPLIED_FOR<?php echo $i; ?>" id="POSITION_APPLIED_FOR<?php echo $i; ?>" class='form-control'/></td>
         
          <td><select class='form-control' name="COMMENT<?php echo $i; ?>" id="COMMENT<?php echo $i; ?>" />
        <option value="CHECK ELIGIBILITY">C|E</option>
                                <option value="UNDER QUALIFIED">U|Q</option>
								<option value="OVER QUALIFIED">O|Q</option>  
                                <option value="MEET EXCEPTION">M|E</option>
                                <option value="OUTSTANDING">O</option> 
                                </select> 
        </td>
   
        </tr>
        <?php
	  } 
	?>
    <tr>
    <td colspan="3"> 
    </td> 
    </table>

    <button type="submit" name="save_mul" style="height: 28px;" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert records</button>

    <a href="add-data.php" class="btn btn-primary"> <i class="glyphicon glyphicon-fast-backward" style="height: 26px;" ></i> &nbsp;Exit</a>
    </form>
	<?php
}
?> 
 <br>
      
    <p style="font-size:12px; font-weight:bold; text-align:left;">APPLICANT RECORDS</p>

     <div id="work" style="width:100%;">

    <table id="example2" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No</th>
              <th>DATE</th>
              <th>NAME</th>
              <th>GENDER</th>
              <th>CONTACT</th>
              <th>QUALIFICATIONS</th> 
              <th>POST APPLIED</th> 
              <th>COMMENT</th>
              <th>STATUS</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th>
              <th>DATE</th>
              <th>NAME</th>
              <th>GENDER</th>
              <th>PHONE CONTACT</th>
              <th>QUALIFICATIONS</th> 
              <th>POSITION APPLIED</th> 
              <th>COMMENT</th> 
              <th>STATUS</th>
            </tr>
        </tfoot>
        <tbody>
<?php
require('../php/confighr.php');
$sql = "SELECT * FROM vetting_screening ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
        '<td>'.$x.'</td>'.
	    '<td>'.$row['RECIEVEDDATE'].'</td>'.
       '<td>'.$row['FIRSTNAME'].'  '.$row['LASTNAME'].'</td>'.
       '<td>'.$row['GENDER'].'</td>'.
	   '<td>'.$row['PHONECONTACT'].'</td>'.
	      '<td>'.$row['SUMMARY_OF_QUALIFICATIONS'].'</td>'. 
	      '<td>'.$row['POSITION_APPLIED_FOR'].'</td>'.
	      '<td>'.$row['COMMENT'].'</td>'. 
		  '<td>'.$row['SHORTLISTSTATUS'].'</td>'.
   '</tr>';
$x=$x+1;

 }
 ?>
	  </tbody>
  </table>
  
              
              
              
              
              
              
              
                </div>
                      
                  </div>
                  
                    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalone" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <div class="modal" id="notificationModaleleven" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
                                            <button typ 
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
                                <div class="modal-dialog12">
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

            <form class="form-horizontal" style=" background:url(../assets/img/ntihclog2.png); background-repeat:no-repeat; text-align:center;">
  
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
        <td><select class="form-control" name="DEPARTMENT"id="DEPARTMENT" style="width:100%; ">
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
   
   
   <br>
  <div class="col-lg-12">
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
        <tr>
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
    <tr>
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

         
         <input type="submit" name="button" id="button" value="Submit record" />
         </form>
         </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

 


            <div class="col-lg-12">
                        <div class="modal fade" id="contacts" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> STAFF CONTACTS </legend> </center>

 <div id="work" style="width:100%;">

    <table id="example1" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>N0</th>
              <th>NAME</th>
              <th>DEPARTMENT</th>
              <th>TITLE</th>
              <th>MOBILE CONTACT</th>
              <th>HOME CONTACT</th>
              <th>EMAIL</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>N0.</th>
              <th>NAME</th>
              <th>DEPARTMENT</th>
              <th>TITLE</th>
              <th>MOBILE CONTACT</th>
              <th>HOME CONTACT</th>
              <th>EMAIL</th>
            </tr>
        </tfoot>
        <tbody>
<?php
require('../php/confighr.php');
$sql = "SELECT * FROM humanresource ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
       '<td>'.$row['LASTNAME'].'  '.$row['FIRSTNAME'].'  '.$row['OTHERNAME'].'</td>'.
       '<td>'.$row['DEPARTMENT'].'</td>'.
	   '<td>'.$row['TITLE'].'</td>'.
	      '<td>'.$row['MOBILEPHONE'].'</td>'.
	      '<td>'.$row['HOMEPHONE'].'</td>'.
	      '<td>'.$row['EMAIL'].'</td>'. 
   '</tr>';
$x=$x+1;

 }
 ?>
	  </tbody>
  </table>                
        </div>
        <div class="col-sm-12">
        <br>
        <p style="text-transform: ; text-align:left; font-weight:bold;"> 
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


 <script>
  function postvalues(tis){
  var dsx = tis.split("__");
  $("#FIRSTNAME").val(dsx[0]);
  $("#LASTNAME").val(dsx[1]);
  $("#NEWPFNUMBER").val(dsx[2]);
  $("#MOBILEPHONE").val(dsx[3]);
  $("#OTHERNAME").val(dsx[4]);
  $("#GENDER").val(dsx[5]);
  $("#BIRTHDATE").val(dsx[6]);
  $("#RELIGION").val(dsx[7]);
  $("#TRIBE").val(dsx[8]);
  $("#NATIONALITY").val(dsx[9]);
  $("#MARITALSTATUS").val(dsx[10]);
  $("#NEXTOFKIN").val(dsx[11]);
  $("#RELATIONSHIP").val(dsx[12]);
  $("#NEXTOFKINCONTACT").val(dsx[13]);
  $("#MOBILEPHONE").val(dsx[14]);
  $("#HOMEPHONE").val(dsx[15]);
  $("#EMERGENCYCONTACT").val(dsx[16]);
  $("#EMAIL").val(dsx[17]);
  $("#NSSFNO").val(dsx[18]);
  $("#TINNO").val(dsx[19]);
  $("#PASSPORTPHOTO").val(dsx[20]);
  $("#IDFX").val(dsx[21]);
  }
  </script>


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


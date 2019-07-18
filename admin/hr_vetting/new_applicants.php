<?php
	include_once 'dbcon.php';
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
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>

   
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
    <a href="../home_user.php" class="logo">
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
              <img src="../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
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
            <a href="../procurement.php" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="../assets/img/ntihclog2.png" width="100" height="100" class="img-circle" alt="User Image">
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
         <li><a href="../home_user.php"><i class="fa fa-circle-o text-red"></i>Home User<span></span></a></li>
        <li><a href="../home_hr.php"><i class="fa fa-circle-o text-red"></i>Programme Director<span></span></a></li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Advocacy and Research</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="../home_hr.php"><i class="fa fa-circle-o text-yellow"></i>Head Advocacy and Research<span></span></a></li> 
 
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
           <li><a href="../home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Head Fianance and Admin<span></span></a></li>
           <li><a href="../home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Procurement<span></span></a></li>
           <li><a href="../home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Human Resource<span></span></a></li>
           <li><a href="../home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Property management<span></span></a></li>
 
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
          <li><a href="../home_hr.php"><i class="fa fa-circle-o text-aqua"></i>Head Service Delivery<span></span></a></li>
 
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
         <li><a href="../home_hr.php"><i class="fa fa-th"></i>Home page</a></li> 
        <li><a href=../<button class="fa fa-th" data-toggle="modal"  data-target="#contacts"></button></i> Contacts</a></li>   
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
         <center>  <a href="#gen" data-toggle="tab"> <img src="../../database icons/access-administrator-account.jpg" width="100" height="100" class="img-circle" 
         style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
           General <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col -->
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <a href="#appt" data-toggle="tab"> <img src="../../database icons/images.jpg"width="100" height="100" class="img-circle" 
         style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
             Applicants <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col -->
         
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <a href="#seudo" data-toggle="tab"><img src="../../database icons/syspanel.png" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
             Departments <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col -->
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../assets/sysicons/svccimages.jpg" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="#terror" data-toggle="tab"> G <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col --> 

      <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../assets/sysicons/iffmages.png" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href="../home_ftl.php" class="small-box-footer">X<i class="fa fa-arrow-circle-right"></i></a>
           <a href="#troy" data-toggle="tab"> General <i class="fa fa-arrow-circle-right"></i></a>
         </li> </div>
        </div></div>
        <!-- ./col -->
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../assets/sysicons/insuranceimages.jpg" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
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
          
<p style="text-align:center; font-size:12px; font-weight:bold ;">SUMMARY OF APPLICANTS DUE FOR ELIGIBILITY SCREENING AND SHORTLISTING FOR INTERVIEWS</p> 
 
  <br>         

      
      <div class="panel-body">              
 <form method="post" name="frm"> 
 <tr>
    <td colspan="3">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>
 
    <label style="margin-left:100px; width: 223px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit_records();" alt="edit" />edit</span>
    <span><img src="delete.png" onClick="delete_records();" alt="delete" />delete</span>
    </label>
     <a href="add-data.php" style="margin-top: -49px;" class="btn btn-danger"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Home</a>
      <a href="new_interviews.php" style="margin-top: -49px;" class="btn btn-danger"> <i class="glyphicon glyphicon-fast-forward"></i> &nbsp; Interview pane</a>
     <h5 style="font-weight:bold;"> Select and click edit button to shortlist appllicant for interviews</h5>
    </td>
	</tr> 
<table class='table table-bordered table-responsive' style=" width:100%;">
<tr>
<th>##</th> 
<th>DATE</th> 
<th>COMMENT</th>
    <th>FIRST NAME</th>
    <th>LAST NAME</th>
	<th>PHONE CONTACT</th>
    <th>GENDER</th>
	<th>QUALIFICATIONS</th>
    <th>PERMIT CLASSESS</th>
    <th>POSITION APPLIED</th>  
</tr>
<?php
	$res = $MySQLiconn->query("SELECT * FROM vetting_screening WHERE SHORTLISTSTATUS ='PENDING' ORDER BY id DESC");
	$count = $res->num_rows;  
 
	if($count > 0)
	{
		while($row=$res->fetch_array())   
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
			<td><?php echo $row['RECIEVEDDATE']; ?></td> 
            <td><?php echo $row['COMMENT']; ?></td>
			<td><?php echo $row['FIRSTNAME']; ?></td>
			<td><?php echo $row['LASTNAME']; ?></td>
			<td><?php echo $row['PHONECONTACT']; ?></td>
			<td><?php echo $row['GENDER']; ?></td>
			<td><?php echo $row['SUMMARY_OF_QUALIFICATIONS']; ?></td>
			<td style="text-align:center;"><?php echo $row['DRIVING_PERMIT_CLASSESS']; ?></td>
			<td><?php echo $row['POSITION_APPLIED_FOR']; ?></td>   
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
       <?php
	}
?>

<?php
  
if($count > 0)
{
	?>
	
    <?php
}

?>

</table>
</form>
</div> 
  </p>
    </div>
     </div>
     </div>

     
     </div>
     </div>
     </div>

 <!-- jQuery 2.2.3 -->
<!-- Bootstrap 3.3.6 -->
<!-- Morris.js charts -->
<script src="../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="../plugins/daterangepicker/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
 <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
 
    
      
</body>
</html> 
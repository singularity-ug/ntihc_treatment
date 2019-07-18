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
	  "iDisplayLength": 7,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'SUMMARY OF CUG ACTIVE USERS BY DIRECTORATE AND CATEGORY'
		},
		{extend :'pdf',
		 title:'SUMMARY OF CUG ACTIVE USERS BY DIRECTORATE AND CATEGORY'
		},
		{extend :'print',
		 title:'SUMMARY OF CUG ACTIVE USERS BY DIRECTORATE AND CATEGORY'
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
          
              
            <li><a href="payments_rpt.php"><i class="fa fa-circle-o"></i> Payments</a></li>
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
               <a href="cug.php" class="btn btn-primary btn-block margin-bottom" style="font-family:algeria;background-color:#FFF;">
               <b style="color:#000;font-family:lcd; ">CUG Management</b></a>  </a>

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
              <div class="table-responsive mailbox-messages" style="margin-top: -30px;">
                 <div class="col-sm-12" style="height:auto; ">

                  <!-- Info boxes -->
  <br><br>
   <form class="form-horizontal" action="cug_process.php" method="POST" style="height:auto; font-weight:normal;">  
    
  <div class="col-sm-6" >
  <table class="table table-striped" style="background-color:#fff; margin-top:0px;border:0px; ">
   <thead>  
   <tbody>
   <tr> 
    <th style="width:30%; border:0px;background-color:#fff;">Staff names</th> 
    <td style="width:70%; border:0px;"><input type="text" name="STAFFNAMES" id="STAFFNAMES" required="required"  
        style="width:100%; text-align:left;background-color:#fff;"> </td>              
     </td>  
  <tr>
 </tbody>
 </table>
 
  <input type="hidden" name="DATECREATED" id="DATECREATED" value="<?php echo date('y-m-d'); ?>">
  
  <table class="table table-striped" style="background-color:#fff; margin-top:0px;border:0px; margin-top:-20px;">
   <thead>  
   <tbody>
   <tr> 
    <th style="width:30%; border:0px;background-color:#fff;">PF Nummber</th> 
    <td style="width:70%; border:0px;"><input type="text" name="PFNO" id="PFNO" required="required"  
        style="width:100%; text-align:left;background-color:#fff; "> </td>              
     </td>  
  <tr>
 </tbody>
 </table>   
 
  <table class="table table-striped" style="background-color:#fff; margin-top:0px;border:0px; margin-top:-20px;">
   <thead>  
   <tbody>
   <tr> 
    <th style="width:30%; border:0px;background-color:#fff;">Directorate</th> 
    <td style="width:70%; border:0px;"><select name="DIRECTORATE" id="DIRECTORATE" required="required"  
        style="width:100%; text-align:left;background-color:#fff; ">
        <option></option>
        <option>Executive Director's Office</option>
        <option>Administration & Human Resources</option>
        <option>Revenue Collection</option>
        <option>Physical Planning</option>
        <option>Education & Social Services</option>
        <option>Gender, Community Service & Production</option>
        <option>Internal Audit</option>
        <option>Legal Affairs</option>
        <option>Public Health & Environment</option> 
        <option>Engineering & Technical Services</option>
        </select>
        </td>              
     </td>  
  <tr>
 </tbody>
 </table> 
 
 <table class="table table-striped" style="background-color:#fff; margin-top:0px;border:0px; ">
   <thead>  
   <tbody>
   <tr> 
    <th style="width:30%; border:0px;background-color:#fff;">Category</th> 
    <td style="width:70%; border:0px;"><select name="CATEGORY" id="CATEGORY" required="required"  
        style="width:100%; text-align:left;background-color:#fff;">
        <option></option>
        <option>Executive Director</option>
        <option>Deputy Executive Director</option>
        <option>Director</option>
        <option>Deputy Director</option>
        <option>Manager</option>
        <option>Supervisor</option>
        <option>Officer</option>
        </select>
         </td>                  
     </td>  
  <tr>
 </tbody>
 </table>   
   
   
 <?php
$connect = new mysqli("localhost", "root", "toor2", "pcms");
$stssl ="";
if( $result = $connect->query("SELECT * FROM allocation"))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['AMOUNT'] ." </option>";   }
  }
$connect->close();
?>  
  <table class="table table-striped" style="background-color:#fff; margin-top:0px;border:0px;  margin-top:-20px;">
   <thead>  
   <tbody>
   <tr> 
    <th style="width:30%; border:0px;background-color:#fff;">Allocation</th> 
    <td style="width:50%; border:0px;"><select name="ALLOCATION" id="ALLOCATION" required="required"  
        style="width:100%; text-align:left;background-color:#fff;">
        <option></option>
         <?php echo $stssl; ?> 
        </select>
         </td> 
     <th style="width:20%; border:0px;background-color:#fff;"><a href=<button class="" data-toggle="modal" data-target="#cugallocate"></button>Add new</th>                 
     </td>  
  <tr>
 </tbody>
 </table>  

    
  <input type="hidden" name="ISSUEDBY" id="ISSUEDBY" value=" <?php echo $nameofuser; ?> "> 
  <input type="hidden" name="TITLE" id="TITLE" value=" <?php echo $desc; ?> ">
  
  <table class="table table-striped" style="background-color:#fff; margin-top:0px;border:0px; margin-top:-20px; ">
   <thead>  
   <tbody>
   <tr> 
    <th style="width:30%; border:0px;background-color:#fff;">Designation</th> 
    <td style="width:70%; border:0px;"><input type="text" name="DESIGNATION" id="DESIGNATION" required="required"  
        style="width:100%; text-align:left;background-color:#fff;"> </td>              
     </td>  
  <tr>
 </tbody>
 </table>  
   
 </div>
 
 
 
   <div class="col-sm-6">
   
   
   <table class="table table-striped" style="background-color:#ffffff;border:0px; margin-top:-20px; ">
   <thead>
   <tr>
   <td style="width:50%; border:0px;background-color:#fff;">CUG Number</th>
   <th style="width:50%;background-color:#fff;border:0px;">Other Number</th>  
   </tr>
   </thead>
   <tbody>
   <tr>  
   
   <td style="width:50%; border:0px;background-color:#fff;"><input type="text" name="CUGNO" id="CUGNO"   
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   
   <td style="width:50%; border:0px;background-color:#fff;"><input type="text" name="OTHERNO" id="OTHERNO"  
                style="width:100%; text-align:left;background-color:#fff;  "></td>  
   </tr>
  <tr>
 </tbody>
 </table> 
 
 <table class="table table-striped" style="background-color:#ffffff;border:0px; margin-top:-20px; ">
   <thead>
   <tr>
   <td style="width:50%; border:0px;background-color:#fff;">Status</th>
   <th style="width:50%;background-color:#fff;border:0px;"> </th> 
   </tr>
   </thead>
   <tbody>
   <tr>   
   <td style="width:50%; border:0px;background-color:#fff;"> 
   <input type="radio" name="STATUS" id="STATUS"  value="Active" checked /> 
     <label style="font-size:10px;background-color:#fff;">Active</label>  
     <input type="radio" name="STATUS" id="STATUS"  value="Suspended"  /> 
     <label style="font-size:10px;background-color:#fff;">Suspended</label>  
   </td> 
   <td style="width:50%; border:0px;background-color:#fff;"> <center><input type="submit" name="update" value="Save"></center></td>  
   </tr>
   <tr>
 </tbody>
 </table> 
  
 
  <div id="reviews" class="carousel slide" data-ride="carousel" style="border:0px; border-radius:11px;">

                                    <div class="carousel-inner" style="background-color: #FFFFFF;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">
                                             <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
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
                                            </p>
                                                <div class="user-img pull-right">

                                                </div>
                                                <h5 class="pull-right"> <strong class="c-black"></strong></h5>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                             CUG Active Users
                                               <span style="font-size:60px;">

                                                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "pcms");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id FROM cug
											   WHERE STATUS = 'Active' GROUP BY id")) {

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
                                            </p> <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                               Suspended Users
                                               <span style="font-size:60px;">
 
                                                <?php
$link = mysqli_connect("localhost", "root", "toor2", "pcms");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id FROM cug
											   WHERE STATUS = 'Suspended' GROUP BY id")) {

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
                                            </p> <br>
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

                      </i></a>
                      </div>
                     </div>
                     </div> 
 
  
                 </div>  
    

 

              
               
             </div></div></div>
            
            <div class="table-responsive mailbox-messages"> 
             <div class="col-sm-12">
            
             <div class="box box-primary" style="border:0px;">
               <a href="cug.php" class="btn btn-primary btn-block margin-bottom" 
                style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:#000;;">Active cug users by directorate and category  </b></a>  </a> </div>

 

<table id="exsuppex" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;"> 
                     <thead>
                     <tr>
                      
                     <th>DIRECTORATE</th> 
                     <th>CATEGORY</th>
                     <th>TOTAL</th>       
			         <th style="text-align:center;">ACTION</th> 
                      
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configpcmsdb.php");
             $date = date("Y-m-d").' 00:00:00';
             $result = mysqli_query($mysqli, "SELECT DIRECTORATE, CATEGORY, COUNT(id) FROM cug  WHERE STATUS = 'Active'
			 GROUP BY DIRECTORATE,CATEGORY ORDER BY DIRECTORATE DESC");

             while($res = mysqli_fetch_array($result)) {
             $nakz = $res['DIRECTORATE']."***".$res['CATEGORY'];
              echo "<tr>"; 
			  echo "<td>".$res['DIRECTORATE']."</td>"; 
			  echo "<td>".$res['CATEGORY']."</td>"; 
			  echo "<td>".$res['COUNT(id)']." Active users</td>";     
			  echo '<td>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
		      <a id="101__'.$nakz.'" href="javascript:void(0)" onclick="cuggroups(this.id)" data-toggle="tooltip" title="View category" 
		      <span class="glyphicon glyphicon-ok"> </span></a>   </td>';  
			  
             }
              ?>
             </tbody>
             </table>	         
               
          
               
             
             </div>
             </div>

           
               </div></div>

                 <!-- /. ROW  -->




                 <div class="col-sm-12">
                     <div class="modal" id="contx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
                                        <table id="cug" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                  <th>TRUNCATE</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>STATUS</th>
                  <th>ACTION </th>
                  <th>TRUNCATE</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("configpcmsdb.php");

             $result = mysqli_query($mysqli, "SELECT * FROM cug ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxTc = $res['STAFFNAMES']."***".$res['id'];

              echo "<tr>";

			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['STAFFNAMES']."</td>";
			  echo "<td>".$res['PFNO']."</td>";
			  echo "<td>".$res['DIRECTORATE']."</td>";
			  echo "<td>".$res['CATEGORY']."</td>";
			  echo "<td>".$res['DESIGNATION']."</td>";
			  echo '<td> 
			  &nbsp; &nbsp;&nbsp;
			   <a id="122__'.$dtsxTc.'" href="javascript:void(0)" onclick="newcont(this.id)" data-toggle="tooltip" title="Update"
               <span class="glyphicon glyphicon-plus"> </span></a>
			    &nbsp;
			   <a id="13__'.$dtsxTc.'" href="javascript:void(0)" onclick="updateconts(this.id)" data-toggle="tooltip" title="Update"
               <span class="glyphicon glyphicon-new-window"> </span></a>
              </td>';
			  echo "<td> <a href=\"contracts/cont_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
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
                    </div>

   <div class="col-sm-12">
                     <div class="modal" id="xplodecug" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">

     
            <div class=""  id="cuggroups" >  </div>
                <script> 
               function cuggroups(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'cug_groupdc.php?q='+odno,
                            success : function(data){
                                     $('#cuggroups').html(data);
     								$("#xplodecug").modal("show");
                                      }
                    });
                    } 
               </script>

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

  <div class="col-sm-12">
                     <div class="modal" id="cugallocate" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> CUG Allocations </h4>
                                        </div>
                                        <div class="modal-body">
 
  <form class="form-horizontal" action="cug_demo.php" method="POST" style="height:auto; font-weight:normal;"> 
   
    <input type="hidden" name="CAPTUREDATE" id="CAPTUREDATE" value="<?php echo date('y-m-d'); ?>">
  
  <table class="table table-striped" style="background-color:#fff; margin-top:0px;border:0px; ">
   <thead>  
   <tbody>
   <tr> 
    <th style="width:35%; border:0px;background-color:#fff;">Add amount</th> 
    <td style="width:45%; border:0px;"><input type="text" name="AMOUNT" id="AMOUNT" required="required"  
        style="width:100%; text-align:left;background-color:#fff;"> </td>             
     </td> 
    <th style="width:20%; border:0px;background-color:#fff;">  <input type="submit" name="update" value="Save"> </th>    
  <tr>
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
  <footer class="main-footerx">
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

</body>
</html>

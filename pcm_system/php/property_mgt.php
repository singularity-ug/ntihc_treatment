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
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css ">
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
     $('#exprop').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'PROPERTY REGISTER'
		},
		{extend :'pdf',
		 title:'PROPERTY REGISTER '
		},
		{extend :'print',
		 title:'PROPERTY REGISTER'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#exverifier').DataTable( {
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
              <span class="label label-success">0</span> </a>
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
            <i class="fa fa-th"></i> <span style="font-weight:bold;"> &nbsp;&nbsp;&nbsp;&nbsp;System user dashmoard</span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li>
         
           <li class="treeview">
          <a href="#">
            <img src="../database icons/59449894425chart-512.png" width="40" height="40" class="img-circle"> 
            <span>Reports module</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="payments_rpt.php"><i class="fa fa-circle-o"></i> Payment transactions</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
          </ul>
        </li>
         
         
         <li>
          <a href=<button class="" data-toggle="modal"  data-target="#payex"></button> 
            <img src="../database icons/budget.png" width="40" height="40" class="img-circle">
            <span>Payments module </span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="cug.php">
            <img src="../assets/imgx/9oook.png" width="40" height="40" class="img-circle">
            <span>CUG management</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="contracts.php">
            <img src="../database icons/employee.jpg" width="40" height="40" class="img-circle">
            <span>Contracts management</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="property_mgt.php">
            <img src="../database icons/admin2.jpg" width="40" height="40" class="img-circle">
            <span>Property management</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
        
        
          <li>
          <a href="budgeting.php" >
            <img src="../database icons/microfinance-product-management-system.jpg" width="40" height="40" class="img-circle">
            <span>Budget management</span>
            <span class="pull-right-container">
              <small class=" "></small>
            </span>
          </a>
        </li> 
             
             <a href=<button class="" data-toggle="modal" data-target="#controlpanel"></button>
              <canvas id="canvas" width="300" height="300" style="height: 100%; width:100%;">
			</canvas>   </a>
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> 
        <center> <B style="font-size:16px;"> Property Management Module  </B></center>
      </h1>
     
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
                <div class="col-sm-6">
                
                
                       <div class="row text-center pad-top">
                     
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href=<button class="" data-toggle="modal" data-target="#m1"></button>
 <i class="fa fa-rocket fa-5x" style="color:#f56954;"></i>
                      <h4>Property register</h4>
                      </a>
                      </div>
                     
                  </div>   
                     
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                            <a href=<button class="" data-toggle="modal" data-target="#m2"></button>
 <i class="fa fa-rocket fa-5x" style="color:#00a65a;"></i>
                      <h4> New &nbsp; property</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href=<button class="" data-toggle="modal" data-target="#m3"></button>
 <i class="fa fa-rocket fa-5x" style="color:#f39c12;"></i>
                      <h4>Verification laucher</h4>
                      </a>
                      </div>
                      
                  </div>
                  
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="property_editor.php">
 <i class="fa fa-rocket fa-5x" style="color:#f56954;"></i>
                      <h4> Property &nbsp; editor </h4>
                      </a>
                      </div> 
                  </div>
                  
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="property_verified.php"> 
 <i class="fa fa-rocket fa-5x" style="color:#00a65a;"></i>
                      <h4>Verification &nbsp; report </h4>
                      </a>
                      </div> 
                  </div>
                  
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                            <a href=<button class="" data-toggle="modal" data-target="#m6"></button>
 <i class="fa fa-rocket fa-5x" style="color:#f39c12;"></i>
                      <h4> Service &nbsp;reminders</h4>
                      </a>
                      </div> 
                  </div>
                  
              </div>
                 <!-- /. ROW  --> </div>
                  <div class="row text-center pad-top">
                 <div class="col-sm-3">
                 
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="div-square">
                          <a href=<button class="" data-toggle="modal" data-target="#m71"></button>
 <i class=" " style="color:#f56954;"></i>
                      <h4>  </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="div-square">
                         <a href=<button class="" data-toggle="modal" data-target="#m81"></button>
 <i class=" " style="color:#00a65a;"></i>
                      <h4> </h4>
                      </a>
                      </div>
                </div>  </div>  
                
                 <div class="col-sm-3">
                 
                 
                 <div id="reviews" class="carousel slide" data-ride="carousel" style="border:0px; border-radius:11px;">

                                    <div class="carousel-inner" style="background-color: #FFFFFF;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">
                                             <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                              Total registered assets
                                               <span style="font-size:30px;">

                                                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "pcms");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' GROUP BY id")) {        
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
                                            </p> <br><p></p>
                                                 <div class="user-img pull-right">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                             Total operational assets
                                               <span style="font-size:30px;">
 <?php
$link = mysqli_connect("localhost", "root", "toor2", "pcms");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND FUNCTIONALSTATUS = 'OPERATIONAL' GROUP BY id")) {        
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
                                            </p> <br><p></p>
                                                 <div class="user-img pull-right">
                                                </div>
                                            </div>
                                        </div>
 
 
                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                             Number of faulty assets
                                               <span style="font-size:30px;">
 <?php
$link = mysqli_connect("localhost", "root", "toor2", "pcms");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND FUNCTIONALSTATUS = 'FAULTY' GROUP BY id")) {        
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
                                            </p> <br><p></p>
                                                 <div class="user-img pull-right">
                                                </div>
                                            </div>
                                        </div>  
                                        
                                        
                                         <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                            Un verified properties
                                               <span style="font-size:30px;">
 <?php
$link = mysqli_connect("localhost", "root", "toor2", "pcms");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND QTYVERIFIED = '0' GROUP BY id")) {        
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
                                            </p> <br><p></p>
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
                                        <li data-target="#reviews" data-slide-to="3" style="background-color:blue;"></li>
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

     </div>
     </div>

                      </i></a> 
                 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div></div>   </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
              
                <div class="table-responsive mailbox-messages"> 
             <div class="col-sm-12">
            
             <div class="box box-primary" style="border:0px;">
               <a href="property_mgt.php" class="btn btn-primary btn-block margin-bottom" 
                style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:#000;;">Property verification</b></a>  </a> </div>

 
                   <table id="exverifier" class="table table-striped table-bordered" style="font-weight:normal;"> 
 <thead>
          <tr> 
                     <th>NO</th> 
              	     <th>DESCRIPTION OF INVENTORY</th> 
                     <th>CATEGORY</th> 
					 <th>LOCATION</th> 
                     <th>CONDITION</th>   
					 <th>QTY COUNTED</th> 
                     <th>QTY IN LEDGER</th>
					 <th>VARIANCE</th> 
					 
            </tr>
        </thead>
        <tfoot>
          <tr>
           
                     <th>NO</th> 
              	     <th>DESCRIPTION OF INVENTORY</th> 
                     <th>CATEGORY</th> 
					 <th>LOCATION</th> 
                     <th>CONDITION</th>   
					 <th>QTY COUNTED</th> 
                     <th>QTY IN LEDGER</th>
					 <th>VARIANCE</th>    
            </tr>
        </tfoot>
        <tbody> 
<?php
require('configconns.php'); 

$sql = "SELECT COUNT(id),PROPERTYDESCRIPTION, CATEGORY, LOCATION, SUM(QTYVERIFIED), FUNCTIONALSTATUS, COUNT(id)-SUM(QTYVERIFIED) as variance
               FROM properties WHERE PHYSICALSTATUS = 'AVAILABLE' 
			   GROUP BY PROPERTYDESCRIPTION ORDER BY CATEGORY DESC";
   
 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){ 
  echo'<tr>'.
       '<td>'.$x.'</td>'.  
	   '<td>'.$row['PROPERTYDESCRIPTION'].'</td>'.
	   '<td>'.$row['CATEGORY'].'</td>'.  
       '<td>'.$row['LOCATION'].'</td>'. 
	   '<td>'.$row['FUNCTIONALSTATUS'].'</td>'. 
	   '<td>'.$row['SUM(QTYVERIFIED)'].'</td>'.  
	   '<td>'.$row['COUNT(id)'].'</td>'.  
	   '<td>'.$row['variance'].'</td>'.  
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
                 
                
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            
             <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="payex" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Manage Payments of Utilities</h4>
                                        </div>
                                        <div class="modal-body">
 

             <div class="row text-center pad-top">
                     
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="div-square"> 
                           <a href=<button class="" data-toggle="modal" data-target="#paywater"> 
                     <i class="fa fa-clipboard fa-5x"> 
                      <h4>Pay water bills</h4>
                      </i></a>
                      </div>
                     
                     
                  </div>   
                      
                        <div class="col-lg-6 col-md-6 col-sm-6col-xs-6">
                      <div class="div-square"> 
                           <a href=<button class="" data-toggle="modal" data-target="#payhep"> 
                     <i class="fa fa-rocket fa-5x"> 
                      <h4>Pay electricity bills</h4>
                      </i></a>
                      </div>
                     
                     
                  </div>    
                  </div>  
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
 
               
     
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="paywater" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #f0f0f0;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Pay Water bills</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
  <form class="form-horizontal" action="pmt_processone.php" method="POST" style="height:auto; font-weight:normal;">  
 
 
 <div class="col-sm-6" style="margin-left: -13px;">
  <table class="table table-striped" style="background-color:#fff; margin-top:0px; ">
   <thead>
   <tr>  
    <th style="width:40%; border:0px;">Payment date</th>
	<td style="width:60%;border:2px solid #FFF;">
    <input type="date" name="PAYMENTDATE" id="PAYMENTDATE" value="<?php echo date('y-m-d'); ?>"  required="required"
   style="width:100%; text-align:left;background-color:#FFF; height:20px;"></td>  						
   </tr>
  <tr>
 </tbody>
 </table>  
 
  <table class="table table-striped" style="background-color:#fff; margin-top:-15px; ">
   <thead>
   <tr>  
   <th style="width:40%;border:0px;">Payment s/n</th> 
	<td style="width:60%;border:2px solid #FFF;"><input type="text" name="PMTSERIALID" id="PMTSERIALID" value="<?php echo uniqid();?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF;"></td>  					
   </tr>
  <tr>
 </tbody>
 </table> 
 
</div>
  
<table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:20%; text-align:left;border:0px;">Budget sub item </th>
                <td style="width:80%;border:0px;"><input type="text"id="PLANDETAILS" onKeyUp="domee(this)" name="PLANDETAILS" required="required"
				style="width:100%;  background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
            
            
               <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:20%; text-align:left;border:0px;">Budget code </th>
                <td style="width:30%;border:0px;"><input type="text"id="CODE" name="CODE" readonly="readonly"   required=""    
				style="width:100%; background-color:#ECF0F5;height: 21px;"></td> 
                  
               <th style="width:20%; text-align:left;border:0px;">Financial year </th>
                <td style="width:30%;border:0px;"><input type="text"id="FINANCIALPERIOD" name="FINANCIALPERIOD" readonly="readonly"   required=""         
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                  
			 </tr>             
            </table>
         
            <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                <th style="width:20%; text-align:left;border:0px;"> Bal on 1st QTR</th>
                <td style="width:30%;border:0px;"><input type="text"id="FIRSTQTR" name="FIRSTQTR" readonly="readonly"        
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                  
               
			    <th style="width:20%; text-align:left;border:0px;">Bal on 2nd QTR </th>
                <td style="width:30%;border:0px;"><input type="text"id="SECONDQTR" name="SECONDQTR" readonly="readonly"       
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                       
			 </tr>             
            </table>
            
                  
                  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               
                <th style="width:20%; text-align:left;border:0px;">Bal on 3rd QTR </th>
                <td style="width:30%;border:0px;"><input type="text"id="THIRDQTR" name="THIRDQTR" readonly="readonly"       
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                  
               
			    <th style="width:20%; text-align:left;border:0px;">Bal on 4th QTR</th>
                <td style="width:30%;border:0px;"><input type="text"id="FOURTHQTR" name="FOURTHQTR" readonly="readonly"       
				style="width:100%;  background-color:#ECF0F5;height: 21px;"></td> 
                  
			 </tr>             
            </table>
            
             <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
			    <th style="width:20%; text-align:left;border:0px;">Total balance</th>
                <td style="width:30%;border:0px;">   <input type="text" name="BUDGETAMOUNT" id="BUDGETAMOUNT" readonly="readonly" 
               style="width:100%;  background-color:#ECF0F5;height: 21px;">
                
               </td>  
               
                  <th style="width:20%; text-align:left;border:0px;">Budget status </th>
                <td style="width:30%;border:0px;">   <input type="text" name="BUDGETSTATUS" id="BUDGETSTATUS"  readonly="readonly" 
               style="width:100%;background-color:#ECF0F5;height: 21px;"></td> 
                
			 </tr>             
            </table>

<div id="res"></div> 
<p></p>
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-15px; ">
   <thead>
   <tr> 
   <th style="width:100%;border:0px;">Payment quater</th>      
   </tr>
  <tr>
 </tbody>
 </table>
         
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr>     
	<td style="width:100%;border:2px solid #fff;">
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
    						
  
          
    <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-15px; ">
   <thead>
   <tr> 
   <th style="width:100%;border:0px; ">Payment type</th>      
   </tr>
  <tr>
 </tbody>
 </table>
         
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr>   
	<td style="width:100%;border:2px solid #fff;">
    <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="CHEQUE" checked />
    <label> CHEQUE </label>
     <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="EFT" />
    <label> EFT </label>
     <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="IFMS" />
    <label> IFMS </label> 
     </td>   
   </tr>
  <tr>
 </tbody>
 </table>
  
   
  
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:0px; ">
   <thead>
   <tr>  
   <th style="border:20px;width:20%;">User initials</th> 
	<td style="width:80%;border:2px solid #fff;"><input type="text" name="USERINITIALS" id="USERINITIALS"  value="<?php echo $nameofuser; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td>  
   </tr>
  <tr>
 </tbody>
 </table> 
  
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-15px; ">
   <thead>
   <tr>  
   <th style="border:2px solid #fff;width:20%;">Title</th> 
	<td style="border:2px solid #fff;width:80%;"><input type="text" name="USERTITLE" id="USERTITLE"  value="<?php echo $desc; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td> 
							
   </tr>
  <tr>              
 </tbody>
 </table> 
 
 <table class="table table-striped" style="background-color:#fff; margin-top:-15px; ">
   <thead>
   <tr>  
   <th style="border:2px solid #fff;width:20%;">User PFN</th> 
	<td style="border:2px solid #fff;width:80%;"><input type="text" name="USERINO" id="USERINO"  value="<?php echo $pf; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
 
 
    <input type="hidden" name="UTILITYTYPE" id="UTILITYTYPE"  value="WATER" />
 
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
      
<div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="payhep" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Pay Electricity bills</h4>
                                        </div>
                                        <div class="modal-body">
  <form class="form-horizontal" action="dashboard.php" method="POST" style="height:auto; font-weight:normal;">  
 
 <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Payment date</th>
   <th style="border:2px solid #ecf0f5;">Payment s/n</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;">
    <input type="date" name="PAYMENTDATE" id="PAYMENTDATE" value="<?php echo date('y-m-d'); ?>"  
   style="width:100%; text-align:left;background-color:#ecf0f5; height:20px;"></td> 
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="text" name="PMTSERIALID" id="PMTSERIALID" value="<?php echo uniqid();?>"  
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
           
           
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Payment type</th>
   <th style="border:2px solid #ecf0f5;">User initials by</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;">
    <select name="PAYMENTTYPE" id="PAYMENTTYPE"  
    style="width:100%; text-align:left;background-color:#ecf0f5;">
    <option>IFMS</option> 
    <option>CHEQUE</option> 
    <option>EFT</option> 
    <option>BANK</option> 
    </select>
     </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="text" name="USERINITIALS" id="USERINITIALS"  value="<?php echo $nameofuser; ?>" 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
    <input type="hidden" name="UTILITYTYPE" id="UTILITYTYPE"  value="ELECTRICITY" />
 
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
                     
            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="controlpanel" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Syetem Control Panel</h4>
                                        </div>
                                        <div class="modal-body">
                    <!--------->  
                    <p style="text-align:center;">  Attention :  <?php  echo $nameofuser; ?> </p> 
                     <p style="text-align:center;">Please confirm your control access password</p> 
                      <form role="form" action="dashboard.php" method="POST" style="font-size:17px;";>
            
                      <input type="password" class="form-control" style="height:25px;" placeholder="Password" type="password" name="pwd" required="" value=""> 

                      <input type="hidden" class="form-control" style="height:25px;" placeholder="Username"  name="username" type="text" value="<?php echo $rm; ?>"
                       readonly="readonly"> 
                     <br> 
                      <center> <input type="submit" class="btn btn-danger" value="Confirm" style="height:25px;"> &nbsp;
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </center> 
                   <!--------->    </form>            
                 <div class="col-sm-12">
           <div class="panel-body"> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> </center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                     
           
            
			  <div class="modal" id="m1" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#fff">
			
           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:15px; text-align:center;">PROPERTY REGISTER</p>

             <table id="exprop" class="table table-table table-tabled" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S/NO.</th>
                <th>PROPERTY.NO.</th>  
                <th>DESCRIPTION</th> 
                <th>CATEGORY</th> 
                <th>LOCATION</th> 
                <th>RESPONSIBLE.OFFICER</th>
                <th>COST</th> 
                <th>AGE/YRS</th>
                <th>SUPPLIER</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S/NO.</th>
                <th>PROPERTY.NO.</th>  
                <th>DESCRIPTION</th> 
                <th>CATEGORY</th> 
                <th>LOCATION</th> 
                <th>RESPONSIBLE.OFFICER</th>
                <th>COST</th> 
                <th>AGE/YRS</th>
                <th>SUPPLIER</th> 
                <th>STATUS</th>
            </tr>
        </tfoot>
        <tbody>


<?php

//$level = trim($_GET['q']);



function getLevel(){
  	  $str123 = trim($str123);
  	  $tempstr = str_replace('__','_',$str123);

  	if($str123==''){ 		 return '<td style="background-color:blue;">'.$str123.'</td>';  	 }
  	else
  	{
  		  $str1234=array();
            $str1234=explode('_',$tempstr);
  		  $cnt = count( $str1234);
         	if($str1234[$cnt-1]==''){   	 return '<td style="background-color:red;">'.$str123.'</td>';    	 }

  		               else{     return '<td style="background-color:green;">'.$str123.'</td>'; 	}
  	}

  return false;
}

function getIndicator($str123){
	  $str123 = trim($str123);
	  $tempstr = str_replace('__','_',$str123);

	if($str123==''){ 		 return '<td style="background-color:#ecf0f5;">'.$str123.'</td>';  	 }
	else
	{
		  $str1234=array();
          $str1234=explode('_',$tempstr);
		  $cnt = count( $str1234);
       	if($str1234[$cnt-1]==''){   	 return '<td style="background-color:#ecf0f5;">'.$str123.'</td>';    	 }

		               else{     return '<td style="background-color:#fff;">'.$str123.'</td>'; 	}
	}

}
  

require('configconns.php');
$sql = "SELECT id,PROPERTYDESCRIPTION,CATEGORY, CODIFICATIONSTATUS,ENGRAVEDNUMBER,
			                                         VERIFICATIONSTATUS,  DATEOFPURCHASE, MAKE,PROPERTYCOST,SUPPLIEDBY,
													 LOCATION,RESPONSIBLEOFFICER,OFFICERCONTACT,FUNCTIONALSTATUS,
													 SERVICEREQUIREMENT,NEXTDUESERVICE,REMINDDATE, PHYSICALSTATUS,
			 CURDATE(), TIMESTAMPDIFF(YEAR,DATEOFPURCHASE,CURDATE()) AS age 
			 FROM properties ORDER BY CATEGORY DESC"; 

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["id"].'</td>'.
                 '<td>'.$row["ENGRAVEDNUMBER"].'</td>'. 
				 getIndicator($row["PROPERTYDESCRIPTION"]). 
                 getIndicator($row["CATEGORY"]). 
                 getIndicator($row["LOCATION"]).
			     getIndicator($row["RESPONSIBLEOFFICER"]).
                 getIndicator($row["PROPERTYCOST"]). 
                 getIndicator($row["age"]).
				 getIndicator($row["SUPPLIEDBY"]).
                 '<td>'.$row["PHYSICALSTATUS"].'</td></tr>'; 

 }

?>

	  </tbody>
  </table>  
  
               
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer">
                                           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>
                                         
                            
                            
                             <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m2" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Add new property</h4>
                                        </div>
                                        <div class="modal-body">
                    

         <form class="form-horizontal" action="property_process.php" method="POST">
                
		   
     <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Description </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="PROPERTYDESCRIPTION" name="PROPERTYDESCRIPTION"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
             
			   <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Category </th>
				<th style="width:65%;border:2px solid #a9abae;"> <select id="CATEGORY" name="CATEGORY"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  
				        <option> </option>
                        <option>COMPUTER EQUIPMENT AND ACCESSORIES</option>
                        <option>OFFICE EQUIPMENT</option> 
                        </select></th>   
				</td>
              </tr>
			  </table> 
			  
			  <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;background-color:#FFF;">Codification </th>
				<th style="width:65%;border:2px solid #a9abae;">  
				  <input type="radio" name="CODIFICATIONSTATUS" id="CODIFICATIONSTATUS" value="PENDING" checked>
                  <label for="PENDING">PENDING</label> 
		          <input name="CODIFICATIONSTATUS" type="radio" id="CODIFICATIONSTATUS" value="CODIFIED" >
		          <label for="CODIFIED">CODIFIED</label>  
		            
		          <input name="CODIFICATIONSTATUS" type="radio" id="CODIFICATIONSTATUS" value="N/A" >
		          <label for="N/A">N/A</label> 
		          </th> 
                   </tr>
			  </table>  
				 
                <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>  
				<th style="width:35%;border:2px solid #a9abae; background-color:#FFF;">Registration No. </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="ENGRAVEDNUMBER" name="ENGRAVEDNUMBER"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				  
              </tr>
			  </table> 
			  
			 
				  <table class="table-responsive" style="margin-top:-18;px">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;background-color:#fff;">Hold type </th>
				<th style="width:85%;border:2px solid #a9abae;">  
				  <input type="radio" name="HOLDTYPE" id="HOLDTYPE" value="PURCHASED" checked>
                  <label for="PURCHASED">PURCHASED</label>
				  
		          <input name="HOLDTYPE" type="radio" id="HOLDTYPE" value="DONATION" >
		          <label for="DONATION">DONATION</label> 
		          </th>   
				     </tr>
			  </table>
                  
                 <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:35%;border:2px solid #a9abae; background-color:#fff;">Recieved date </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="date"  name="DATEOFPURCHASE"    id="DATEOFPURCHASE" 
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				  
              </tr>
			  </table> 
			  
			    <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
			   <th style="width:14.8%;border:2px solid #a9abae; background-color:#FFF;">Property make</th>
				<th style="width:41.4%;border:2px solid #a9abae;"> <input type="text"  id="MAKE" name="MAKE"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				
				<th style="width:16.6%;border:2px solid #a9abae; ">Cost </th>
				<th style="width:24.2%;border:2px solid #a9abae;"> <input type="numeric"  id="PROPERTYCOST" name="PROPERTYCOST"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>    
              </tr>
			  </table> 
  
			   <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Supplier / Donor / Project </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="SUPPLIEDBY" name="SUPPLIEDBY"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
 
             <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Asset location </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="LOCATION" name="LOCATION"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
			  
               <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Division </th>
				<th style="width:65%;border:2px solid #a9abae;"> <select id="DIVISION" name="DIVISION"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                <option></option>
                <option>HEADQUARTER</option> 
                <option>NAKAWA</option>
                <option>KAWEMPE</option> 
                <option>CITY HALL</option>
                <option>CENTRAL</option>
                <option>LUBAGA</option> 
                </select>
                </th>  
              </tr>
			  </table> 
			  
              
			  <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Officer responsible </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="RESPONSIBLEOFFICER" name="RESPONSIBLEOFFICER"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				 </tr>
			  </table> 
              
                <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
				 <th style="width:35%;border:2px solid #a9abae;">Phone contact </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="OFFICERCONTACT" name="OFFICERCONTACT"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
   
				  <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;background-color:#FFF;">Functional status </th>
				<th style="width:65%;border:2px solid #a9abae;">  
				  <input type="radio" name="FUNCTIONALSTATUS" id="FUNCTIONALSTATUS" value="OPERATIONAL" checked>
                  <label for="OPERATIONAL">OPERATIONAL</label> 
		          <input name="FUNCTIONALSTATUS" type="radio" id="FUNCTIONALSTATUS" value="FAULTY" >
		          <label for="FAULTY">FAULTY</label>  </th> 
		           </tr>
			  </table> 
    
              <table class="table-responsive" style="margin-top:-18px;">
              <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;background-color:#FFF;">Serviceability</th>
				<th style="width:65%;border:2px solid #a9abae;">  
				  <input type="radio" name="SERVICEREQUIREMENT" id="SERVICEREQUIREMENT" value="NOT APPLICABLE" checked>
                  <label for="SERVICEREQUIREMENT">NOT APPLICABLE</label> 
		          <input name="SERVICEREQUIREMENT" type="radio" id="SERVICEREQUIREMENT" value="APPLICABLE" >
		          <label for="SERVICEREQUIREMENT">APPLICABLE</label> 
		          </th>    
              </tr>
			  </table>  
		   
		 <P>If applicable,please add service dates </P>
         <table class="table-responsive" style="margin-top:-7px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;background-color:#FFF;"> Next service date</th>
				<th style="width:65%;border:2px solid #a9abae;">  
				  <input type="date" name="NEXTDUESERVICE" id="enddate"  style="width:100%;"> 
				  </th> 
				    </tr>
			  </table>  
                  
                  <table class="table-responsive" style="margin-top:-18px;">
            <table class="table" style="border:0px;">
              <tr>
				   <th style="width:35%;border:2px solid #a9abae;background-color:#FFF;">Remind date</th>
				  <th style="width:65%;border:2px solid #a9abae;">
		          <input  type="date" name="REMINDDATE" id="startdate" style="width:100%;"> 
		          </th>    
              </tr>
			  </table>  
     
        <td style="background-color:#f9f9f9;"> <center> <input type="submit" name="button" id="button" value="Save " 
	 style= " font-size:15px; font-weight:bold; border-radius:11px; "/> &nbsp;
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <center></td>  
    </tr> 
    </tbody>
    </table>  
           </form>
                   
           <div class="col-sm-12">
           <div class="panel-body"> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> </center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                            
                            
                            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m3" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Property verification </h4>
                                        </div>
                                        <div class="modal-body">
                    <!--------->   
                        <form class="form-horizontal" action="launchverification.php" method="POST">  
            <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
            <tr>
			    <th style="width:35%;border:2px solid #a9abae;background-color:#fff;">Launch verification </th>
				<th style="width:65%;border:2px solid #a9abae;">  
				  <input type="radio" name="QTYVERIFIED" id="QTYVERIFIED" value="5">
                  <label for="QTYVERIFIED">IGNORE</label> 
                  
		          <input name="QTYVERIFIED" type="radio" id="QTYVERIFIED" value="0" >
		          <label for="QTYVERIFIED">LAUNCH ALL</label>  
		          </th>  
				  </tbody>
        </table> 
                   
                <input type="hidden"  name="VERIFICATIONSTATUS" id="VERIFICATIONSTATUS" value="NO" readonly="readonly"
				style="width:100%; font-weight:normal; background-color:#fff;">    
               
			  
        <center> <input type="submit" name="update" value="Launch"  style= " font-size:15px; font-weight:bold; border-radius:11px; "/> 
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
          
                   <!--------->            
              <div class="col-sm-12">
           <div class="panel-body"> 
           
           Event one : <p style="font-weight:normal;">On launch, &nbsp; <b style="font-size:16px;"><?php
$link = mysqli_connect("localhost", "root", "", "pcms");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND QTYVERIFIED = '1' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   </b>
&nbsp; verified properties will be set for => re-verification </p>
 
           
          Event two: <p style="font-weight:normal;">  On launch, &nbsp; <b><?php
$link = mysqli_connect("localhost", "root", "", "pcms");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND QTYVERIFIED = '0' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </b>   
&nbsp; pending properties will be reset => due for verification </p>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> </center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                            
                             <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m4" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Electricity accounts</h4>
                                        </div>
                                        <div class="modal-body">
                    <!--------->   
                        <p style="text-align:center;">Waiting for user comments on modal navigation flow</p>
                   <!--------->            
               <div class="col-sm-12">
           <div class="panel-body"> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m5" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Water accounts </h4>
                                        </div>
                                        <div class="modal-body">
                    <!--------->   
                        <p style="text-align:center;">Waiting for user comments on modal navigation flow</p>
                   <!--------->            
                 <div class="col-sm-12">
           <div class="panel-body"> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                     
                     
                       <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m6" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Contracts manager </h4>
                                        </div>
                                        <div class="modal-body">
                    <!--------->   
                        <p style="text-align:center;">Waiting for user comments on modal navigation flow</p>
                   <!--------->            
                 <div class="col-sm-12">
           <div class="panel-body"> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                              <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m7" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Propert Management </h4>
                                        </div>
                                        <div class="modal-body">
                    <!--------->   
                        <p style="text-align:center;">Waiting for user comments on modal navigation flow</p>
                   <!--------->            
                  <div class="col-sm-12">
           <div class="panel-body"> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
 
                            
                              <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m8" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Automated Budget reconciliation wizard</h4>
                                        </div>
                                        <div class="modal-body">
                    <!--------->   
                       <p style="text-align:center;">Waiting for user comments on modal navigation flow</p>
                   <!--------->            
                        
           <div class="col-sm-12">
           <div class="panel-body"> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
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

  <!-- Control Sidebar -->
   
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar --> 
 
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

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

   <link rel="stylesheet" href="../assets/notifier2.css">
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
	  "iDisplayLength": 10,
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
	  "iDisplayLength": 20,
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
				font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header" style="margin-top: -20px;">
 <?php
  require('config.php');
  ?>
    
          <li>
          <li>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
          <li class="active"><a href="dashboard.php" class="" >Dashboard<span class="sr-only">(current)</span></a></li> 
           
          <li class="active"><a href=<a href=<button class="" data-toggle="modal" data-target="#m1" style="height: 33px; margin-top: 9px; padding: 5px 7px;"></button> 
          Property register<span class="sr-only">(current)</span></a></li>  
            
         <li class="active"><a href="asset_config.php" class="" >Update center<span class="sr-only">(current)</span></a></li> 
         
          <li class="active"><a href="property_verified.php" class="" >Verification report<span class="sr-only">(current)</span></a></li> 
         
          <li class="active"><a href=<button class="button 5" data-toggle="modal" data-target="#m6"  style="height: 33px; margin-top: 9px; padding: 5px 7px;"></button> 
          Service reminders<span class="sr-only">(current)</span></a></li>  
           
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../index.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
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
  <aside class="main-sidebar" style="background-color: #fff">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        .
           
        <div class="pull-left image"> 
        </div> 
        <div class="pull-left info">
           
        </div>
      </div>
      <!-- search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" style="margin-top: -90px;">
        <li class="header" font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;background-color:#f44336;">Assets management module</li> 
          <li>
          <a href="payments_rpt.php?d1=0&d2=0"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style="  color:#fff;">Manage Payments </span>
            <span class="pull-right-container">
              <small class="  ">   </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="cug.php"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">C U G Lines</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
        
        
         
          <li>
          <a href="contracts.php"  style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Contracts management</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
         <li> 
         <a href="property_mgt.php"  style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Property management</span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li>
        
          
        
         <li>
          <a href="budgeting.php"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Budgeting management </span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li>
        
         <li>
           <a href="plan_tracker.php" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i><span style=" color:#fff;">Requisitions tracker</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
          <li>
           <a href="#" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i><span style=" color:#fff;">Data center</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
         
          <li>
         <a href="#" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style="color:#fff;">Reports module</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
          
       <br> 
       
         <div id="reviews" class="carousel slide" data-ride="carousel" style="border:0px; border-radius:11px;">

                                    <div class="carousel-inner" style="background-color: #FFFFFF;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">
                                             <p> <center>Number of</center> </p>
                                             <p> <center>Running contracts </center></p>
                                              <center> <span style="font-size:30px;"> 
                                               
                                                  <?php
$link = mysqli_connect("localhost", "root", "toor2", "pcms");

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
                                               
                                               </span> </center><br>
                                                <div class="user-img pull-right">

                                                </div> 
                                                <h5 class="pull-right"> <strong class="c-black"> </strong></h5></center>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Contracts due for</center></p> 
                                            <p><center>renewal</center></p>
                                             <center>  <span style="font-size:30px;">
                                               
                                               <?php
$link = mysqli_connect("localhost", "root", "toor2", "pcms");

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
?>          </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>

                                      <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Number of</center></p> 
                                            <p><center>expired contracts</center></p>
                                             <center>  <span style="font-size:30px;">
                                               
                                            <?php
$link = mysqli_connect("localhost", "root", "toor2", "pcms");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id,SERVICEPROVIDER, CONTRACT, STARTDATE, REMINDDATE, ENDDATE
				                               FROM contracts
											   WHERE ENDDATE < CURDATE() + 1 AND STATUS = 'EXPIRED'  GROUP BY id")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
      </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>   
                                        
                                        
                                             <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Number of</center></p> 
                                            <p><center>CUG active users</center></p>
                                             <center>  <span style="font-size:30px;">
                                               
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
      </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div> 
                                        
                                        
                                                 <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Number of</center></p> 
                                            <p><center>suspended cug(s) </center></p>
                                             <center>  <span style="font-size:30px;">
                                               
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
      </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>     
                                          
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" style="background-color:yellow;"></li> 
                                        <li data-target="#reviews" data-slide-to="2" style="background-color:red;"></li> 
                                        <li data-target="#reviews" data-slide-to="3" style="background-color:green;"></li> 
                                        <li data-target="#reviews" data-slide-to="4" style="background-color:yellow;"></li> 
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->
                                    
                                    </div></ul>
                                    
        <center> <b style="color:#000; text-align:center;">User control panel</b> </center>
       <a href="#" style="margin-top: 10px; color:#fff;">
         <canvas id="canvas" width="400" height="400" style="height: 100%; width:100%;background-color:#f44336;">
			</canvas> </a></li>
            
            
           <li style="color:#fff;"> 
        User &nbsp;<span class="glyphicon glyphicon-user" style="color:#000;"> 
          <a href="javascript:void(0)">  <b style="font-size:11px;"><?php echo $nameofuser; ?> </b>  </a></span>   
      </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #dddddd;"> 
    <section class="content-header">  
    </section>
<br>
    <!-- Main content -->
    <section class="content"> 
        <div class="col-xs-12">
          <div class="box box-primary" style="margin-top: -11px;">
            <div class="box-header"> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
               
                 <div class="col-sm-12" style="height:auto; "> 
                <div class="row">
                <div class="row text-center pad-top">
                <div class="panel-body">
                  <div class="col-lg-2 col-xs-6">
                      <div class="div-square">
                         <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#m2"></button> 
                         <img src="../../database icons/admin.jpg"width="100" height="100" style="height:50%; width:50%;" class="img-circle">
                      <h4 style="font-size:14px;"> Add new asset</h4>
                      </a>
                      </div> 
                      </div>  
                
                  
                  <div class="col-lg-2 col-xs-6">
                      <div class="div-square">
                        <a href=<button class="small-box-footer" data-toggle="modal" data-target="#m3"></button>
                       <img src="../../database icons/20151012_561baec335c5f.png"width="100" height="100" style="height:50%; width:50%;" class="img-circle">
                      <h4 style="font-size:14px;">Verification laucher</h4>
                      </a>
                      </div> 
                      </div> 
                      
                <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><center>
                         <?php
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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
?> </center></h3>

              <p>Available assets</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div> 
          </div>
        </div>
        <!-- ./col -->
         
                     
        
         <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><center>
               <?php
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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
             </center></h3>

              <p>Operational assets</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div> 
          </div>
        </div>
        <!-- ./col -->
      

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
 <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><center>
                                                              
 <?php
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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
              </center></h3>

              <p> Faulty assets</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div> 
          </div>
        </div>
        <!-- ./col -->
      
        
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><center>
                                 
                                             
 <?php
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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
?>   </h3>

              <p>Un verified assets</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div> 
          </div>
        </div>
        <!-- ./col --> 
          
        </div>
        <!-- /.col --> 

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
              
               <b style="color:#000;;">Property verification data-table</b> 

 
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
                     
           
            
			  <div class="modal" id="m1" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#fff">
			 <img src="../../assets/img/logsbig.PNG" width="100%" height="90px"> 
           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:12px; text-align:center;">PROPERTY REGISTER</p>

             <table id="exprop" class="table table-tabled table-tabled" cellspacing="0" width="100%">
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
                                         
                            
                            
                            <div class="modal" id="m2" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body"> 
 <img src="../../assets/img/logsbig.PNG" width="100%" height="100%"> 
 <center> <p style="color:#000; font-weight:bold;font-size:12px;"> <b>ASSET REGISTRATION FORM</b> </p> </center> 
 
<hr  style="margin-top: -8px;">   


         <form class="form-horizontal" action="property_process.php" method="POST">
                
		   
     <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:14%;border:2px solid #a9abae;">Description </th>
				<th style="width:36%;border:2px solid #a9abae;"> <input type="text"  id="PROPERTYDESCRIPTION" name="PROPERTYDESCRIPTION"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
			  
			   <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:14%;border:2px solid #a9abae;">Category </th>
				<th style="width:36%;border:2px solid #a9abae;"> <select id="CATEGORY" name="CATEGORY"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  
				        <option> </option>
                        <option>COMPUTER EQUIPMENT AND ACCESSORIES</option>
                        <option>OFFICE EQUIPMENT</option> 
                        </select></th>   
				</td>
              </tr>
			  </table> 
			  
			  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:15%;border:2px solid #a9abae;background-color:#ecf0f5;">Codification </th>
				<th style="width:15%;border:2px solid #a9abae;">  
				  <input type="radio" name="CODIFICATIONSTATUS" id="CODIFICATIONSTATUS" value="PENDING" checked>
                  <label for="PENDING">PENDING</label>
				  </th> 
				  <th style="width:15%;border:2px solid #a9abae;">
		          <input name="CODIFICATIONSTATUS" type="radio" id="CODIFICATIONSTATUS" value="CODIFIED" >
		          <label for="CODIFIED">CODIFIED</label> 
		          </th> 
		           
				  <th style="width:13%;border:2px solid #a9abae;">
		          <input name="CODIFICATIONSTATUS" type="radio" id="CODIFICATIONSTATUS" value="N/A" >
		          <label for="N/A">N/A</label> 
		          </th>   
				  
				<th style="width:17%;border:2px solid #a9abae; background-color:#ecf0f5;">Registration No. </th>
				<th style="width:25%;border:2px solid #a9abae;"> <input type="text"  id="ENGRAVEDNUMBER" name="ENGRAVEDNUMBER"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				  
              </tr>
			  </table> 
			  
			 
				  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:15%;border:2px solid #a9abae;background-color:#ecf0f5;">Hold type </th>
				<th style="width:15%;border:2px solid #a9abae;">  
				  <input type="radio" name="HOLDTYPE" id="HOLDTYPE" value="PURCHASED" checked>
                  <label for="PURCHASED">PURCHASED</label>
				  </th> 
				  <th style="width:15%;border:2px solid #a9abae;">
		          <input name="HOLDTYPE" type="radio" id="HOLDTYPE" value="DONATION" >
		          <label for="DONATION">DONATION</label> 

		          </th> 
		           
				  <th style="width:13%;border:2px solid #a9abae;">
		          <input name="HOLDTYPE" type="radio" id="HOLDTYPE" value="RENTED" >
		          <label for="RENTED">RENTAL</label> 
		          </th>   
				  
				<th style="width:17%;border:2px solid #a9abae; background-color:#ecf0f5;">Recieved date </th>
				<th style="width:25%;border:2px solid #a9abae;"> <input type="date"  name="DATEOFPURCHASE"    id="DATEOFPURCHASE" 
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				  
              </tr>
			  </table> 
			  
			    <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			   <th style="width:14.8%;border:2px solid #a9abae; background-color:#ecf0f5;">Asset make</th>
				<th style="width:41.4%;border:2px solid #a9abae;"> <input type="text"  id="MAKE" name="MAKE"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				
				<th style="width:16.6%;border:2px solid #a9abae; ">Cost </th>
				<th style="width:24.2%;border:2px solid #a9abae;"> <input type="numeric"  id="PROPERTYCOST" name="PROPERTYCOST"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>    
              </tr>
			  </table> 
  
			   <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Supplier / Donor /Rented from </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="SUPPLIEDBY" name="SUPPLIEDBY"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
 
             <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Asset location </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="LOCATION" name="LOCATION"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
			  
			  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:20%;border:2px solid #a9abae;">Officer responsible </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="RESPONSIBLEOFFICER" name="RESPONSIBLEOFFICER"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				
				 <th style="width:20%;border:2px solid #a9abae;">Phone contact </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="OFFICERCONTACT" name="OFFICERCONTACT"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
   
				  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:16%;border:2px solid #a9abae;background-color:#FFF;">Functional status </th>
				<th style="width:17%;border:2px solid #a9abae;">  
				  <input type="radio" name="FUNCTIONALSTATUS" id="FUNCTIONALSTATUS" value="OPERATIONAL" checked>
                  <label for="OPERATIONAL">OPERATIONAL</label>
				  </th> 
				  <th style="width:13%;border:2px solid #a9abae;">
		          <input name="FUNCTIONALSTATUS" type="radio" id="FUNCTIONALSTATUS" value="FAULTY" >
		          <label for="FAULTY">FAULTY</label> 
		          </th> 
		           
				    <th style="width:15%;border:2px solid #a9abae;background-color:#FFF;">Serviceability</th>
				<th style="width:20%;border:2px solid #a9abae;">  
				  <input type="radio" name="SERVICEREQUIREMENT" id="SERVICEREQUIREMENT" value="NOT APPLICABLE" checked>
                  <label for="SERVICEREQUIREMENT">NOT APPLICABLE</label>
				  </th>   
				  <th style="width:17%;border:2px solid #a9abae;">
		          <input name="SERVICEREQUIREMENT" type="radio" id="SERVICEREQUIREMENT" value="APPLICABLE" >
		          <label for="SERVICEREQUIREMENT">APPLICABLE</label> 
		          </th>    
              </tr>
			  </table>  
		   
		 
         <table class="table-responsive" style="margin-top:0px;">If applicable,please add service dates 
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:16%;border:2px solid #a9abae;background-color:#FFF;"> Next service date</th>
				<th style="width:17%;border:2px solid #a9abae;">  
				  <input type="date" name="NEXTDUESERVICE" id="enddate"  style="width:100%;"> 
				  </th> 
				  
				   <th style="width:16%;border:2px solid #a9abae;background-color:#FFF;">Remind date</th>
				  <th style="width:17%;border:2px solid #a9abae;">
		          <input  type="date" name="REMINDDATE" id="startdate" style="width:100%;"> 
		          </th>    
              </tr>
			  </table>  
     
        <td style="background-color:#f9f9f9;"> <center> <input type="submit" name="button" id="button" value="Save " 
	 style= " font-size:15px; font-weight:bold; border-radius:11px; "/>  <center></td>  
    </tr> 
    </tbody>
    </table>  
           </form>
               </div>
                                        <div class="modal-footer"> 
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
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
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Property verification </h4>
                                        </div>
                                        <div class="modal-body" >
                 
                        <form class="form-horizontal"  action="launchverification.php" method="POST">  
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
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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

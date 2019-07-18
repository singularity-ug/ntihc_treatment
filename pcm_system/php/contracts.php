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
   <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#FRAMEWORKDETAILS"+num).val(data[2]);
  $("#FRAMEWORKID").val(data[2]);
  $("#ENTITYCODE").val(data[3]);

}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({

  type: "POST",
  url: "../supplies/procuerementsearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
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
     $('#example1').DataTable( {
	  "iDisplayLength":3,
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
	  "iDisplayLength": 3,
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
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
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
     $('#exsuppex').DataTable( {
	  "iDisplayLength": 8,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
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
     $('#excontract').DataTable( {
	  "iDisplayLength": 15,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
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
     $('#example6').DataTable( {
	  "iDisplayLength": 4,
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
     $('#exconts').DataTable( {
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
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:'  '
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
     $('#example11').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>


<script>
  $(document).ready(function() {
     $('#exords').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:'  '
		}
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
		 title:' APPROVED SUPPLIES LIST '
		},
		{extend :'pdf',
		 title:' APPROVED SUPPLIES LIST '
		},
		{extend :'print',
		 title:' APPROVED SUPPLIES LIST '
		}
        ]
    } );
  } );
  </script>

 <script>
  $(document).ready(function() {
     $('#frame').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
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
            <li><a href="#"><i class="fa fa-circle-o"></i> General</a></li>
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
     <center> <p style="font-size:18px; font-weight:bold;">  Contracts Management Module</p></center>
     
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
              
                 <div class="col-sm-12" style="height:auto; ">

                  <!-- Info boxes -->

                 

                  <div class="row text- pad-top">
                     <p></p>

 
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" >
                      <div class="div-square">
<a href=<button class="" data-toggle="modal" data-target="#contx"></button>
 <i class="fa fa-comments-o fa-5x" style="color:#f39c12;"></i>
                      <h4>  Contract details</h4>
                      </a>
                      </div>
                  </div>
        <!-- ./col --> 
        

         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" >
                      <div class="div-square">
 <a href=<button class="" data-toggle="modal" data-target="#notifx"></button>
 <i class="fa fa-lightbulb-o fa-5x" style="color:#00a65a;"></i>
                      <h4> Extension details </h4>
                      </a>
                      </div>
                  </div> 
                

           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" >
                      <div class="div-square">

                      </div>
                  </div>
        <!-- ./col --> 
        

         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6" >
                      <div class="div-square">

                      </div>
                  </div>
        <!-- ./col -->


         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="div-square">

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
                                              Due for renewal
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
                                            </p> <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
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
 </div></div>   </div></div></div>   </div>
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
               <b style="color:#000;;">Contracts extension tracker by remind date</b></a>  </a> </div>

  

<table class="table table-table table-tabled" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th>S/NO.</th>
            <th> SERVICE PROVIDER </th>
			<th> CONTRACT DETAILS </th>
			<th> STRAT DATE </th>
			<th> REMIND DATE</th>
            <th> END DATE </th>
			<th> REM(YRS) </th> <th> REM(M) </th><th>REM(D) </th>
			<th width="120" style="text-align:center;"> ACTION REQUIRED</th>
		</tr>
	</thead>
	<tbody>

			<?php
				include('connect/connectfuka.php');
				$result = $db->prepare("SELECT id,SERVICEPROVIDER, CONTRACT, STARTDATE, REMINDDATE, ENDDATE,
	TIMESTAMPDIFF( YEAR, ENDDATE, now() ) as year
    , TIMESTAMPDIFF( MONTH, ENDDATE, now() ) % 12 as month
    , FLOOR( TIMESTAMPDIFF( DAY, ENDDATE, now() ) % 30.4375 ) as day
	                                           FROM contracts
											   WHERE REMINDDATE < CURDATE() + 1 AND STATUS = 'RUNNING' ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
            <td><?php echo $row['id']; ?></td>
			<td><?php echo $row['SERVICEPROVIDER']; ?></td>
			<td><?php echo $row['CONTRACT']; ?></td>
			<td><?php echo $row['STARTDATE']; ?></td>
			<td> <?php echo $row['REMINDDATE']; ?></td>
            <td> <?php echo $row['ENDDATE']; ?></td>
            <td> <b style="color:red;"> <?php echo $row['year']; ?></b> Years</td>
            <td> <b style="color:red;"> <?php echo $row['month']; ?> </b> Months</td>
			<td> <b style="color:red;"> <?php echo $row['day']; ?> </b> Days</td>
			<td><a rel="facebox" href="contracts.php?id=<?php echo $row['id']; ?>"><button class="button 5" style="width:100%; font-size:12px;"><i class="icon-edit" ></i> Run Extension </button></a> </td>
			</tr>
			<?php
				}
			?>

	</tbody>
</table>
 
             
             </div></div></div> </div> </div>
             
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
             
               <a href="cotracts_project_mgt.php" class="btn btn-primary btn-block margin-bottom" 
                style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:green;;">Add </b>  &nbsp;|| <b style="color:#yellow;;">Update</b>
               &nbsp;==> Contracts </b></a>  </a> </div>

                 </div></div>
             

            <div class=""  id="updateconts" >  </div>
                     <script>

               function updateconts(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'contracts/get_contract_details.php?q='+odno,
                            success : function(data){
                                     $('#updateconts').html(data);
     								$("#xplodex").modal("show");
                                      }
                    });
                    }

               </script>


                <table id="exords" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                    <th>ACTION </th>
                   <th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>STATUS</th> 
                  <th>TRUNCATE</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                   <th>ACTION </th>
                   <th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>STATUS</th> 
                  <th>TRUNCATE</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("contracts/config_sup.php");

             $result = mysqli_query($mysqli, "SELECT * FROM contracts ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxTc = $res['SERVICEPROVIDER']."***".$res['id'];

              echo "<tr>";
               echo '<td> 
			   &nbsp;
			   <a id="122__'.$dtsxTc.'" href="javascript:void(0)" onclick="newcont(this.id)" data-toggle="tooltip" title="Update"
               <span class="glyphicon glyphicon-plus"> </span></a>
			   &nbsp;
			   <a id="13__'.$dtsxTc.'" href="javascript:void(0)" onclick="updateconts(this.id)" data-toggle="tooltip" title="Update"
               <span class="glyphicon glyphicon-new-window"> </span></a>
               </td>';
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>";
			  echo "<td>".$res['CONTRACT']."</td>";
			  echo "<td>".$res['CONTRACTVALUE']."</td>";
			  echo "<td>".$res['PAYMENTSHEDULE']."</td>";
			  echo "<td>".$res['STATUS']."</td>"; 
			  echo "<td> <a href=\"contracts/cont_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	            }
               ?>
             </tbody>
             </table>


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
                  <th>RESPONSIBILITY CENTER</th>
                  <th>ACCOUNTABLE</th>
                  <th>CONSULTED</th>
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
                  <th>RESPONSIBILITY CENTER</th>
                  <th>ACCOUNTABLE</th>
                  <th>CONSULTED</th>
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
			  echo "<td>".$res['RESPONSIBILITYCENTER']."</td>";
			  echo "<td>".$res['ACCOUNTABLE']."</td>";
			  echo "<td>".$res['CONSULTED']."</td>";
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
                    </div>

   <div class="col-sm-12">
                     <div class="modal" id="contracted" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  Add new contract</h4>
                                        </div>
                                        <div class="modal-body">

  <div class=""  id="newcont" >  </div>
                <script> 
          function newcont(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'contracts/newcontract.php?q='+odno,
                       success : function(data){
                                $('#newcont').html(data);
								$("#contracted").modal("show");
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

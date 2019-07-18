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
  <title>.</title>
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
             	font-size: 10px;
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
                 
              
              
</script>   
   <script>
function myFunction() {
    window.print();
}
</script>

            <div class="table-responsive mailbox-messages"> 
             <div class="col-sm-12">
             <img src="..//assets/imgx/logsbig.png" width="100%" height="30%">
  
 <center> <p style="color:#000; font-weight:bold;font-size:12px;margin-top: -20px;"> CURRENT ASSETS VERIFICATION REPORT    </p> </center> 
<center> <p style="color:#000; font-weight:bold;font-size:12px;margin-top: 0px;">  
FROM  <input type="date" name="CREATEDDATE" id=">datepicker" value="<?php echo date('d-m-y'); ?>">  
 TO  <input type="date" name="CREATEDDATE" id=">datepicker" value="<?php echo date('d-m-y'); ?>" > 
   </p> </center>
 
         <form class="form-horizontal" action="" method="POST">
      
         <?php
	include_once 'dbconns.php';
?>
  
<form method="post" name="frm"> 
           
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;font-weight:normal;text-align:left;" width="100%"> 
     <tr>  
              	     <th>DESCRIPTION OF INVENTORY</th> 
                     <th>CATEGORY</th> 
					 <th>LOCATION</th> 
                     <th>CONDITION</th>   
					 <th style="text-align: center;">QTY COUNTED</th> 
                     <th style="text-align: center;">QTY IN LEDGER</th>
					 <th style="text-align: center;">VARIANCE</th> 
    
</tr> 
<?php
	$res = $MySQLiconn->query("SELECT COUNT(id),PROPERTYDESCRIPTION, CATEGORY, LOCATION, SUM(QTYVERIFIED), FUNCTIONALSTATUS, COUNT(id)-SUM(QTYVERIFIED) as variance
               FROM properties WHERE PHYSICALSTATUS = 'AVAILABLE' AND VERIFICATIONSTATUS ='YES'
			   GROUP BY PROPERTYDESCRIPTION ORDER BY CATEGORY DESC");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td class="hidden"><input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['COUNT(id)']; ?>"  /></td> 
            <td><?php echo $row['PROPERTYDESCRIPTION']; ?></td> 
              
			<td><?php echo $row['CATEGORY']; ?></td>
            
			<td><?php echo $row['LOCATION']; ?></td> 
            
            <td> <?php echo $row['FUNCTIONALSTATUS']; ?> </td>
             
			<td style="text-align: center;"> <?php echo $row['SUM(QTYVERIFIED)']; ?>  </td>
            
			<td style="text-align: center;"> <?php echo $row['COUNT(id)']; ?>  </td>
             
            <td style="text-align: center;"><?php echo $row['variance']; ?></td> 
             
			</tr>
			<?php
		}
	}
	else
	{
		?>
        
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
 </tr>             
            </table> 
            <br>
    
     
            <table border="0" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;margin-top:3px;" width="100%" >  
              <tr> 
			     <th style="width:19%;">Prepared by</th> 
                 <th style="width:27%;">
                 <input type="text"  value=" <?php echo $desc; ?> "   
				 style="width:100%; text-align:left;background-color:#FFF;border:0px;"></td> 
                
                   <th style="width:4%; background-color:#fff;border:0px;"> </td>
                   
                 <th style="width:19%;"> &nbsp; Reviewd and approved by</th>
                 <th style="width:27%;"><input type="text"  name=""  value=" " 
				 style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td>    
      </tr>  
      </tr>             
     </table> 
      
     <table border="0" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;margin-top:3px;" width="100%" >  
              <tr> 
			     <th style="width:19%;">Name</th> 
                 <th style="width:27%;">
                 <input type="text"  value=" <?php echo $nameofuser; ?> "   
				 style="width:100%; text-align:left;background-color:#FFF;border:0px;"></td> 
                
                   <th style="width:4%; background-color:#fff;border:0px;"> </td>
                   
                 <th style="width:19%;"> &nbsp; Name</th>
                 <th style="width:27%;"><input type="text"  name=""  value=" " 
				 style="width:100%; text-align:left;background-color:#FFF;border:0px;"></td>    
      </tr>  
      </tr>             
     </table> 
            
			
		<table border="0" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;margin-top:3px;" width="100%" >  
              <tr> 
			     <th style="width:19%;">Date</th> 
                 <th style="width:27%;">
                 <input type="date"  <?php echo date('d-m-y'); ?>   
				 style="width:100%; text-align:left;background-color:#FFF;border:0px;"></td> 
                
                   <th style="width:4%; background-color:#fff;border:0px;"> </td>
                   
                 <th style="width:19%;"> &nbsp; Date</th>
                 <th style="width:27%;"><input type="date" name="" <?php echo date('d-m-y'); ?>
				 style="width:100%; text-align:left;background-color:#FFF;border:0px;"></td>    
      </tr>  
      </tr>             
     </table> 	 
                
             
            
           <table border="0" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left; margin-top:3px;" width="100%" >  
              <tr> 
			     <th style="width:19%;">Signature</th> 
                 <th style="width:27%;">
                 <input type="text"  value="  " readonly="readonly"  
				 style="width:100%; text-align:left;background-color:#FFF;border:0px;"></td> 
                
                   <th style="width:4%; background-color:#fff;border:0px;"> </td>
                   
                 <th style="width:19%;"> &nbsp; Signature</th>
                 <th style="width:27%;"><input type="text"  name=""  value=" " readonly="readonly"
				 style="width:100%; text-align:left;background-color:#FFF;border:0px;"></td>    
      </tr>  
      </tr>             
     </table> 
      
     
            <br>
            <center><button onClick="myFunction()" >Print </button>  </center>
   </form>     
           
                </div>
              </div>
            </div>
            <!-- /.box-body -->
                       
                            
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

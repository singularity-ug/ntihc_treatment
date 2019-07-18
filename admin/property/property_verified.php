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
          <li class="active"><a href="../sys_dashboard.php" class="" >Dashboard<span class="sr-only">(current)</span></a></li> 
           
          <li class="active"><a href="asset.php" class="" >Home<span class="sr-only">(current)</span></a></li> &nbsp;
             
             
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
              <li><a href="../index.php"> <span class="glyphicon glyphicon-log-in"></span> Logout</li></a>
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
          <a href="asset_config.php" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style="  color:#fff;">Asset verification center </span>
            <span class="pull-right-container">
              <small class="  ">   </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="property_verified.php"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Assets verification report</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
          
         
         
          <li>
         <a href="asset_data.php" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style="color:#fff;">Export data</span>
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
                                             <p> <center>Assts due for</center> </p>
                                             <p> <center>servicing </center></p>
                                              <center> <span style="font-size:30px;"> 
                                                0    
                                               </span> </center><br>
                                                <div class="user-img pull-right">

                                                </div> 
                                                <h5 class="pull-right"> <strong class="c-black"> </strong></h5></center>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Long over due</center></p> 
                                            <p><center>service</center></p>
                                             <center>  <span style="font-size:30px;">
                                        0
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
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->
                                    
                                    </div></ul>
                                    
        <center> <b style="color:#000; text-align:center;"> </b> </center>
       <a href="#" style="margin-top: 10px; color:#fff;">
         <canvas id="canvas" width="400" height="400" style="height: 100%; width:100%;background-color:#f44336;">
			</canvas> </a></li>
            
         
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff;"> 
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
              
               <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">
              
</script>   
   <script>
function myFunction() {
    window.print();
}
</script>

            <div class="table-responsive mailbox-messages"> 
             <div class="col-sm-12">
             <img src="../../assets/img/logsbig.PNG" width="100%" height="90px"> 
 <center> <p style="color:#000; font-weight:bold;font-size:11px;margin-top: -20px;"> CURRENT ASSETS VERIFICATION REPORT    </p> </center> 
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

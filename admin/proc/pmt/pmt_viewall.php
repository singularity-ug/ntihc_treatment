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
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>proc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../assets/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../../assets/notifier.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">

  <script src="../../datatable/js/jquery-1.12.3.js"></script>
  <script src="../../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../../datatable/js/bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../../datatable/js/buttons.flash.min.js"></script>
  <script src="../../datatable/js/jszip.min.js"></script>
  <script src="../../datatable/js/pdfmake.min.js"></script>
  <script src="../../datatable/js/vfs_fonts.js"></script>
  <script src="../../datatable/js/buttons.html5.min.js"></script>
  <script src="../../datatable/js/buttons.print.min.js"></script>
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
     $('#exsupdex').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' SUPPLIERS LIST'
		},
		{extend :'pdf',
		 title:' SUPPLIERS LIST'
		},
		{extend :'print',
		 title:'  SUPPLIERS LIST'
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
		 title:'file'
		},
		{extend :'pdf',
		 title:'file'
		},
		{extend :'print',
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
     $('#exords').DataTable( {
	  "iDisplayLength": 20,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'LOCAL PURCHASE ORDERS'
		},
		{extend :'pdf',
		 title:'LOCAL PURCHASE ORDERS'
		},
		{extend :'print',
		 title:'LOCAL PURCHASE ORDERS'
		}
        ]
    } );
  } );
  </script>


<script>
  $(document).ready(function() {
     $('#exstaffconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' STAFF CONTACTS'
		},
		{extend :'pdf',
		 title:'STAFF CONTACTS '
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
     $('#exdynam').DataTable( {
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
  
   
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PLANDETAILS"+num).val(data[2]);
  $("#CODE").val(data[2]);
  $("#FINANCIALPERIOD").val(data[3]);
  $("#FIRSTQTROB").val(data[4]);
  $("#SECONDQTROB").val(data[5]);
  $("#THIRDQTROB").val(data[6]);
  $("#FOUTHQTROB").val(data[7]);
  $("#TOTALROB").val(data[8]); 
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

</head> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header">
 <?php
  require('../config.php');
  ?>
    <!-- Logo -->
    <a href="../../sys_dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Dashboard</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav"> 
            <li class="active"><a href="payments.php" class="" >Back<span class="sr-only">(current)</span></a></li> 
            <li class="active"><a href="pmt_viewall.php" class="" >View all payments<span class="sr-only">(current)</span></a></li>   
             </a></li> 
              
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
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
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
       <span class="glyphicon glyphicon-user" style="color:#000;"> </span>   
          <a href="javascript:void(0)">  <b style="font-size:11px;"><?php echo $nameofuser; ?> </b>  </a>
      
        <div class="pull-left image"> 
        </div> 
        <div class="pull-left info">
           
        </div>
      </div>
      <!-- search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;">MAIN NAVIGATION</li>
        
        
          <li>
          <a href="../procurement_user.php">
            <i class="fa fa-th"></i> <span style=" color:#000;">User department (s)</span>
            <span class="pull-right-container">
              <small class=" "></small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="../budget_desk.php">
            <i class="fa fa-th"></i> <span style="  color:#000;">Confirmations of purchases</span>
            <span class="pull-right-container">
              <small class="  ">  </small>
            </span>
          </a>
        </li>
         
          <li>
          <a href="../proc_review.php">
            <i class="fa fa-laptop"></i> <span style=" color:#000;">Procurement reviews</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="../proc_approval.php">
            <i class="fa fa-laptop"></i> <span style=" color:#000;">Procurement approvals</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
          <li>
           <a href="../../procurement_tracker.php">
            <i class="fa fa-th"></i><span style=" color:#000;">Procurement tracker</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
         
          <li>
         <a href="proc_pdu.php">
            <i class="fa fa-circle-o"></i> <span style="color:#000;">Procurement orders</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
        <li> 
         <a href="suppliers _mgt.php">
            <i class="fa fa-circle-o"></i> <span style=" color:#000;">Suppliers management</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="cotracts_project_mgt.php">
            <i class="fa fa-circle-o"></i> <span style=" color:#000;">Contracts management</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
         <li>
          <a href=../../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button>
            <i class="fa fa-circle-o"></i> <span style="color:#000;">Procurement planning</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
        <li>
         <a href="payments.php">
            <i class="fa fa-circle-o"></i> <span style="  color:#000;">Payments</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
         <li class="treeview">
         <a href=../../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button>
            <i class="fa fa-share"></i> <span style="color:#000;">Reports</span>
            <span class="pull-right-container"> 
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="payments_rpt.php"><i class="fa fa-circle-o">Daily payments report</i> </a></li>
            <li><a href="../../procurement.php"><i class="fa fa-circle-o"></i> </a></li> 
          </ul>
        </li>  
       
       
         <canvas id="canvas" width="500" height="500" style="height: 100%; width:100%;">
			</canvas> 
            
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#fcf9f9;">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
     <font style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 5px #000; color:#fff;"><center>Payments	</center></font>
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
                 <img src="../../../assets/img/logsbig.PNG" width="100%" height="30%">
    
            
              
               <div class="table-responsive mailbox-messages"> 
               <div class="col-sm-12">
            
               <div class="box box-primary" style="border:0px;">
               <a href="payments.php" class="btn btn-primary btn-block margin-bottom" 
               style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:#000;;"><< &nbsp; View all payments by pmt number</b></a>  </a> </div>

  
 <table id="exdynam" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;"> 
                     <thead>
                     <tr>
                      
                     <th>P/NO.</th> 
                     <th>SERIAL/NO.</th>
                     <th>CREATED DATE</th>  
                     <th>PAYMENT QTR</th> 
                     <th>PAYMENT SUM</th>       
			         <th>ACTION</th> 
                     <th>PRING</th> 
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("../configproc.php");
             $date = date("Y-m-d").' 00:00:00';
             $result = mysqli_query($mysqli, "SELECT QUARTERACCOUNTABLE, PMTNO, PMTSERIALID, PAYMENTDATE, SUM(AMOUNTPAYABLE) FROM payments 
			 GROUP BY PMTNO ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $sdtsrrx = $res['QUARTERACCOUNTABLE']."***".$res['PMTNO'];
              echo "<tr>"; 
			  echo "<td>".$res['PMTNO']."</td>"; 
			  echo "<td>".$res['PMTSERIALID']."</td>"; 
			  echo "<td>".$res['PAYMENTDATE']."</td>";   
			  echo "<td>".$res['QUARTERACCOUNTABLE']."</td>"; 
			  echo "<td>".$res['SUM(AMOUNTPAYABLE)']."</td>";  
			    echo '<td> 
			   &nbsp;  &nbsp;   &nbsp;   &nbsp;   &nbsp; 
			   <a id="122__'.$sdtsrrx.'" href="javascript:void(0)" onclick="viewxplosion(this.id)" data-toggle="tooltip" title="View"
               <span class="glyphicon glyphicon-edit"> </span></a>
			 
               </td>';
			  echo "<td><a href=\"print_pmt_no.php?PMTNO=$res[PMTNO]\"> &nbsp;&nbsp;print</a>  
			    </td>";
             }
              ?>
             </tbody>
             </table>	            
          </div> 
          </div> </div> 
          </div>
 
        <div class=""  id="viewxplosion" >  </div>
                <script> 
          function viewxplosion(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'pmt_select_payables.php?q='+odno,
                       success : function(data){
                                $('#viewxplosion').html(data);
								$("#cfuckier").modal("show");
                                 }
               });
               } 
          </script>
           
  
           

   
                            
                            
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
 
<script src="../../../assets/lib/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
  
 <script type="text/javascript" src="../../ ../assets/js/gauge.js"></script>
</body>
</html>

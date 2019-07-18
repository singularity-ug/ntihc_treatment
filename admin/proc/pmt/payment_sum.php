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
$connect = new mysqli("localhost",  "root", "toor2", "ahr");
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
  <title>Ntihc | imm system</title>
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
  
  
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>  
  
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 13px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<?php 
include('connectproc.php');
$result = $db->prepare("SELECT * FROM sales");  
for($i=0; $row = $result->fetch(); $i++){
$cname=$row['name'];
$invoice=$row['invoice_number'];
$date=$row['date'];
$cash=$row['due_date'];
$cashier=$row['cashier'];

$pt=$row['type'];
$am=$row['amount'];
if($pt=='cash'){
$cash=$row['due_date'];
$amount=$cash-$am;
}
}
?>
  
   <script>
  $(document).ready(function() {
     $('#example13').DataTable();
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
  
  <header class="main-header">
 <?php
  require('../config.php');
  ?>
    <!-- Logo -->
    <a href="../proc_pdu_user.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Home |</b>  </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top"  style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../../../index.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
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
  

  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
       
    <!-- Main content -->
      <div class="row">
        <div class="col-md-3" style="background-color: #367fa9;">
          <a href="payments.php" class="btn btn-primary btn-block margin-bottom" style="background-color: #367fa9;">  </a>

          <div class="box box-solid">
            <div class="box-header with-border">
              
               
               <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"> <a href="payments.php">
         <center> <img src="../../assets/imgx/1stqtr.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a>
            <div class="inner">  
            <a href="payments.php" class="small-box-footer">Payments <i class=" "></i></a>
          </div>
        </div></div>
        <!-- ./col -->
                  
         
         <div class="box box-solid"> 
        
          <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"><a href="budgeting.php">
         <center> <img src="../../assets/imgx/5thqtr.png" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a>
            <div class="inner">  
            <a href="budgeting.php" class="small-box-footer">New budget<i class=""></i></a>
          </div>
        </div></div>
        <!-- ./col -->
         
          <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"><a href="payments_rpt.php">
         <center> <img src="../../assets/imgx/kkk.png" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a>
            <div class="inner">  
            <a href="payments_rpt.php" class="small-box-footer">Payment report <i class=""></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        
        </div>
        
       <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"><a href="payment_sum.php">
         <center> <img src="../../assets/imgx/kkk.png" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a>
            <div class="inner">  
            <a href="payment_sum.php" class="small-box-footer">Reconciliation <i class=""></i></a>
          </div>
        </div></div>
        
        
       <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../assets/imgx/kkk.png" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer"> <i class=""></i></a>
          </div>
        </div></div>
                   
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../assets/imgx/kkk.png" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer"> <i class=""></i></a>
          </div>
        </div></div>
        <!-- ./col -->
           
              </ul>
           <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">    
         <center><canvas id="canvas" width="250" height="250" style="height: 100px;">
			</canvas></center></div>
            </div>  
            
             <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">    
         <center><canvas id="canvas" width="250" height="250" style="height: 100px;">
			</canvas></center></div>
            </div> </div>
            
   
          
          <p></p>
        </div>  
        </div> 
        
        <!-- /.col -->


      <div class="col-md-9">
          <div class="box box-primary" style="border:0px;"> 
               <a href="#" class="btn btn-primary btn-block margin-bottom"> payments</a> 

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
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">


                  <!-- Info boxes --> 
    
   <div class="content" id="content"> 
	<div style="width: 100%; height: 190px;" >
	<div style="width: 100%;">
	<center> 
	 <img src="../../../assets/img/logsbig.PNG" width="100%" height="50%">
   <p style="text-align:center; font-weight:bold;">RECONCILIATION OF PROCUREMENT PLAN AGAINST EXPENDITURE</p>
	</center>
	<div>
	 
	</div>
	</div>
	<div style="width: 100%; float: left; height: 70px;">
     
    
	 <center>  FINANCIAL PERIOD  &nbsp;<select name="portal" id="cboOptions" onChange="showDiv('div',this)"
             style="height: 26px; background-color:#fff; spadding: 0px;">
            <option value="1">JULY 2016 TO JUNE 2017</option>
            <option value="2">JULY 2017 TO JUNE 2018</option>
          </select>  </center> 
		 
	
	</div>
	<div class="clearfix"></div>
	</div>
	<div style="width: 100%; margin-top:-70px;">
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead> 
		<tr>
			<th> FINANCIAL.PERIOD</th>
			<th> OBJECTIVE </th>
			<th> CODE </th>
            <th> DETAILS </th>
			         <th>1ST QTR</th> 
                     <th>2ND QTR</th> 
                     <th>3RD QTR</th>
                     <th>4TH QTR</th> 
                     <th>AMOUNT</th>  
		</tr>
	</thead>
	<tbody>
		
			<?php 
				include('connectproc.php');
				$result = $db->prepare("SELECT * FROM procplanning"); 
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['FINANCIALPERIOD']; ?></td>
			<td><?php echo $row['OBJECTIVE']; ?></td>
			<td><?php echo $row['CODE']; ?></td>
			<td><?php echo $row['PLANDETAILS']; ?></td>
			<td>
			<?php
			$ppp=$row['FIRSTQTROB'];
			echo formatMoney($ppp, true);
			?>
			</td>
            
           <td>
			<?php
			$ppp=$row['SECONDQTROB'];
			echo formatMoney($ppp, true);
			?>
			</td>  
            
			<td>
			<?php
			$dfdf=$row['THIRDQTROB'];
			echo formatMoney($dfdf, true);
			?>
			</td>
			<td>
			<?php
			$profit=$row['FOUTHQTROB'];
			echo formatMoney($profit, true);
			?>
			</td>
            
            <td>
			<?php
			$profit=$row['TOTALROB'];
			echo formatMoney($profit, true);
			?>
			 </td>
             
			</tr>
			<?php
				}
			?>
			<tr>
			<th> </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>  
			         <th> </th> 
                     <th> </th> 
                     <th> </th>
                     <th> </th> 
                     <th> </th>  
		 
		</tr>
            
        
        
			<tr>
				<th colspan="4"><strong style="font-size: 12px; color: #222222;">TOTAL:</strong></th>
				<td colspan="1"><strong style="font-size: 12px; color: #222222;">
				<?php
				function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				} 
				$resultas = $db->prepare("SELECT SUM(FIRSTQTROB) FROM procplanning ");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg=$rowas['SUM(FIRSTQTROB)'];
				echo formatMoney($fgfg, true);
				}
				?>
				</strong></td>
				<td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT SUM(SECONDQTROB) FROM procplanning");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['SUM(SECONDQTROB)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>
                
                <td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT SUM(THIRDQTROB) FROM procplanning");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['SUM(THIRDQTROB)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>
                
                 <td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT SUM(FOUTHQTROB) FROM procplanning");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['SUM(FOUTHQTROB)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>
                
                <td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT SUM(TOTALROB) FROM procplanning");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['SUM(TOTALROB)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>
                 
			</tr>
		
	</tbody>
</table> 
	<br>
	</div>
	</div>
	</div>
	</div>
<div class="pull-right" style="margin-right:100px;">
		<a href="javascript:Clickheretoprint()" style="font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
		</div>	
</div>
</div>
                 
             </div></div></div></div></div>
              
              
               </div></div>
              
                 <!-- /. ROW  -->  
             
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


<script src="../../assets/lib/moment/moment.min.js"></script>
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
<script type="text/javascript" src="../../assets/js/gauge.js"></script> 
   
</body>
</html> 


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
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stss ="";
if( $result = $connect->query("SELECT * FROM budgetcoder WHERE codestatus = 'ACTIVE' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['budgetline'] . " </option>";   }
  }
$connect->close();
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
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap2.css">
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
  <link rel="stylesheet" href="assets/notifier.css">
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
 
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  Cash payments by vourcher number'
		},
		{extend :'pdf',
		 title:' Cash payments by vourcher number'
		},
		{extend :'print',
		 title:' Cash payments by vourcher number'
		}
        ]
    } );
  } );
  </script>


  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 4,
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
     $('#example10').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' General petty cash expenditure Summary'
		},
		{extend :'pdf',
		 title:'General petty cash expenditure Summary'
		},
		{extend :'print',
		 title:'General petty cash expenditure Summary'
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
     $('#example7').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'Monthly payments by budget line'
		},
		{extend :'pdf',
		 title:'Monthly payments by budget line'
		},
		{extend :'print',
		 title:'Monthly payments by budget line'
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
  $('[data-toggle="tooltip"]').tooltip();
     $('#example12').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
  

 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 6px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
           
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 12px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#dddddd;
             }
             table tr:nth-child(even) {
                 background:#fff;
             } 
</style> 
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('connect/config.php');
  ?>
  
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="petty_cash_records.php">Cash Remote Storage<span class="sr-only">(current)</span></a></li> 
             
          </ul>
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">0</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 0 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Ntihc M.E team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not use this awesome application?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#"> </a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->
 
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                 <span class="glyphicon glyphicon-user">WELCOME:</span>     
          &nbsp <?php echo $nameofuser; ?>   
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <center><img src="../assets/img/ntihclog2.png" width="200" height="250" class="user-image" alt="User Image"> </center>
                  <p>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">NTIHC</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">NTIHC</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">NTIHC</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="../../index.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container" style="background-color:white;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h5> 
        </h5>
        <ol class="breadcrumb"> 
          
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
       <div class="box box-solid"> 
            <!-- /.box-header --> 
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       General petty cash expenditure Summary
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in"/>
                    <div class="box-body"/>
                     
          <div class="">
          
          <div id="work" style="width:100%; font-weight:normal;">  
     <table id="example10" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
          <tr> 
          <th>NO.</th>
                     <th>DATE</th>
                     <th>MONTH</th> 
                     <th>EXPENDITURE DETAILS</th>
					 <th>VOUCHER-NO.</th>
					 <th>CREDIT</th> 
                     <th>DEBIT</th> 
					 <th>BALANCE</th>
					 <th>BUDGET-LINE</th> 
                     <th>CODE</th> 
					 
            </tr>
        </thead>
        <tfoot>
          <tr>
           
              <th>NO</th>
              <th>DATE</th>
              	 <th>FISCAL (M)</th> 
                     <th>EXPENDITURE DETAILS</th>
					 <th>VOUCHER-NO.</th>
					 <th>CREDIT</th> 
                     <th>DEBIT</th> 
					 <th>BALANCE</th>
					 <th>BUDGET LINE</th> 
                     <th>CODE</th>  
            </tr>
        </tfoot>
        <tbody> 
<?php
require('config/config_dbmultiple.php'); 

$sql = "SELECT * FROM imprest WHERE APPROACTION ='APPROVED' AND CASHOUT ='PAID' AND DCDEFAULT ='DEFAULT' ORDER BY RECIEVEDDATE DESC";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['CREDIT']))-intval($row['IMP_DEBIT']);
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
       '<td>'.$row['RECIEVEDDATE'].'</td>'.
	   '<td>'.$row['FISCALMONTH'].' / '.$row['FISCALYEAR'].'</td>'.
       '<td>'.$row['IMPREST_DESCRIPTION'].'</td>'.
       '<td>'.$row['ORDERNO'].'</td>'.
       '<td>'.$row['CREDIT'].'</td>'.
       '<td>'.$row['IMP_DEBIT'].'</td>'.
       '<td>'.$bal.'</td>'.
       '<td>'.$row['BUDGETLINE'].'</td>'.
	   '<td>'.$row['CODE'].'</td>'. 
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
  <h3 style="margin-top: -7px;"> <?php   echo"BALANCE  : ".$bal; ?></h3>
      </div>
	  </center> 
     
     
      
  
                  </div>
                  </div>
                  </div>
                </div></div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                 
                    <h3 class="box-title"> <b> Monthly payments by budget line </b>  </h3> 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                   
           <div id="work" style="width:100%; font-weight:normal;">  
     <table id="example7" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
          <tr> 
                   <th>NO</th> 
              	     <th>MONTH</th>  
                     <th>YEAR</th>  
                     <th>AMOUNT (UGX)</th>  
					 <th>BUDGET LINE</th> 
                     <th>CODE</th> 
					 
            </tr>
        </thead>
        <tfoot>
          <tr>
           
                     <th>NO</th> 
              	     <th>FISCAL (M)</th>  
                     <th>FISCAL (Y)</th>  
                     <th>AMOUNT (UGX)</th>  
					 <th>BUDGET LINE</th> 
                     <th>CODE</th>  
            </tr>
        </tfoot>
        <tbody> 
<?php
require('config/config_dbmultiple.php'); 

$sql = "SELECT FISCALMONTH, FISCALYEAR, SUM(IMP_DEBIT), BUDGETLINE, CODE, CREDIT FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND APPROACTION ='APPROVED' AND CASHOUT ='PAID' 
                 GROUP BY FISCALMONTH, FISCALYEAR, BUDGETLINE ORDER BY FISCALYEAR DESC";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){ 
  echo'<tr>'.
       '<td>'.$x.'</td>'.  
	   '<td>'.$row['FISCALMONTH'].'</td>'.
	   '<td>'.$row['FISCALYEAR'].'</td>'. 
       '<td>'.$row['SUM(IMP_DEBIT)'].'</td>'. 
       '<td>'.$row['BUDGETLINE'].'</td>'.
	   '<td>'.$row['CODE'].'</td>'. 
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
     
                     
	  
                      </div>  
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
        <div class="col-sm-12">
        <hp class="box-title"> <b> Cash payments by vourcher number </b>  </p> 
        <div id="work" style="width:100%; font-weight:normal;">  
     <table id="example4" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>  
       
                     <th>PMT.DATE</th> 
                     <th>FISCAL MONTH</th> 
                     <th>VOUCHER.NO</th> 
                     <th>PAYEE</th> 
                     <th>AMOUNT</th> 
                     <th>PAID BY</th>  
                     <th style="color:red; background-color:#ecf0f5;">ACTION</th> 
                     
                     </tr>
        </thead>
        <tfoot>
          <tr>
          
          <th>PMT.DATE</th> 
                     <th>FISCAL MONTH</th> 
                     <th>VOUCHER.NO</th> 
                     <th>PAYEE</th> 
                     <th>AMOUNT</th> 
                     <th>PAID BY</th>  
                     <th style="color:red; background-color:#ecf0f5;">ACTION</th> 
                      
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT ORDERNO, RECIEVEDDATE, RECIEVEDBY, FISCALYEAR, FISCALMONTH, PAIDBY,SUM(IMP_DEBIT) FROM imprest 
                                          WHERE  AUTHACTION ='AUTHORISED' AND APPROACTION ='APPROVED' AND CASHOUT ='PAID' 
                                          GROUP BY ORDERNO ORDER BY RECIEVEDDATE DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['ORDERNO']."***".$res['RECIEVEDBY'];
		echo "<tr>";    
		echo "<td>".$res['RECIEVEDDATE']."</td>";
		echo "<td>".$res['FISCALMONTH']."/ ".$res['FISCALYEAR']."</td>";
		echo "<td>".$res['ORDERNO']."</td>"; 
		echo "<td>".$res['RECIEVEDBY']."</td>";    
		echo "<td>".$res['SUM(IMP_DEBIT)']."</td>"; 
		echo "<td>".$res['PAIDBY']."</td>";   
		   
		echo "<td><a href=\"config/inline/petty_payments.php?ORDERNO=$res[ORDERNO]\">Open</a></td>";		 
	}
    ?>
	</tbody>
  </table> 
     
        </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 
        </div>
        <!-- /.col ------------------------------------------------------->
        
      </div>
      <!-- /.row --> 
          <div class=""  id="pettyissuance" >  </div>
                <script>

          function getstuff(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'config/inline/pettyissuance.php?q='+odno,
                       success : function(data){
                                $('#pettyissuance').html(data);
								$("#issuance").modal("show");
                                 }
               });
               }

          </script>
        
          <!-- Custom Tabs (end tabs) -->  
<!----/-----start models---------->
  
   <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="pettywithdraw" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 <div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logs.PNG" width="100%" height="100%">
</div> 
      
          <center> <legend style="color:#000; font-weight:bold; font-size:12px; border:0px;"> CASH REIMBURSEMENT VOUCHER </legend> </center> 
          
            <form class="form-horizontal" style="height:auto;">
            
      <table class="table table-bordered">
      <thead>
      <tr class="" style="border-color:white;">
        <th style="border-bottom-color:white; "> </th>
        <th style="border-bottom-color:white; "> </th>  
        <th style="border-bottom-color:white; "> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td><B>DATE</B></td>
        <td><input type="date"  name="TOTALSUM" id="TOTALSUM" value="<?php echo date('d-m-y'); ?>"   style="background-color:#fff;width:100%;"></td> 
      </tr>
       <tr>
        <td><B>TO</B></td>
        <td><select type="text" id="MEMOTO" name="MEMOTO" class="form-control"  required="required"  style="background-color:#fff; width:100%;"> 
                     <option>PROGRAME DIRECTOR</option>
                     <option>DEPUTY PROGRAME DIRECTOR</option> 
                     </select>
        </td> 
      </tr>
      <tr>
        <td><B>THROUGH</B></td>
        <td><select type="text" id="MEMOTO" name="MEMOTO" class="form-control"  style="background-color:#fff; width:100%;">
                     <option>N/A</option>
                     <option>MANAGER FINANCE AND ADMINSTRATION</option>
                     <option>DEPUTY PROGRAME DIRECTOR</option> 
                     </select>
        </td> 
      </tr>
      
       <tr>
        <td><b>FROM</b></td> 
      <td><input type="text" id="MEMOPREPAREDBY" name="MEMOPREPAREDBY" class="form-control"  value="<?php echo $desc; ?> " readonly = "readonly" 
      style="background-color:#fff; width:100%; height:24px;"></td> 
                      
        </td> 
      </tr>
      
      <tr>
        <td><b>SUBJECT</b></td> 
      <td><textarea id="MEMOSUBJECT" name="MEMOSUBJECT" class="form-control"  placeholder="EDIT HERE" required="required"  style="background-color:#fff; width:100%; height:24px;"></textarea></td> 
                      
        </td> 
      </tr>
    </tbody>
  </table> 
             

  
             
    <table class="table table-bordered ">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Actual cash available (UGX) </th>
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Balance in cash box (UGX)</th>  
        <th style="border-bottom-color:white;font-weight:normal; width:23.3333333333%;">Variance (UGX)</th> 
        <th style="border-bottom-color:white;font-weight:normal; width:10%; text-align:center;">Expenditure</th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <th style="width:33.3333333333%;"><input type="text" name="ACTUALCASH" id="ACTUALCASH"     style="width:100%; text-align:center;font-weight:bold;"></th>
        <td style="width:33.3333333333%;"><input type="text" name="PHYSICALCASH" id="PHYSICALCASH" style="width:100%; text-align:center;font-weight:bold;"></td>
        <td style="width:33.3333333333%;"><input type="text" name="CASHVARIANCE" id="CASHVARIANCE" style="width:100%; text-align:center;font-weight:bold;"></td> 
        <td style="width:10%;"><a href="assets/datatable/petty_cash.php" style="height: 18px; color: #fff; border-color: #398439;" class="btn btn-large btn-danger"><i class="glyphicon glyphicon-eye-open"></i> &nbsp; Summary</a></td>
    </tr> 
    </tbody>
    </table> 
    
    <table class="table table-bordered" >
    <thead>
      <tr  class="" style="font-weight:normal;">
      <th style="border-bottom-color:white;"> </th> 
      </tr>
     </thead>
     <tbody>
        <tr> 
        <td style="width:100%;"><textarea class="textarea" name="VERIFICATIONCOMMENT" id="wysihtml5"   
        placeholder="Current cash reconciliation should show zero variance, else: you're required to account for the variance." 
        style="width:100%; height:50px;"> </textarea> </td> 
      </tr>  
      </tbody>
      </table> 
      
     <table class="table table-bordered"> 
      <thead>
      <tr class=""> 
        <th style="border-bottom-color:white; font-weight:normal;"></th>
        <th style="border-bottom-color:white; font-weight:normal;">Name</th>
        <th style="border-bottom-color:white; font-weight:normal;">Date</th>  
        <th style="border-bottom-color:white;font-weight:normal;">Comment</th> 
      </tr>
      </thead>   
      <tbody>
      <tr> 
        <td style="width:15%;"> Prepared by</th>
        <td style="width:30%;"><input type="text" name="VERIFIEDBY" id="VERIFIEDBY" value="<?php echo $nameofuser; ?>" style="width:100%; text-align:left;"></td>
        <td style="width:15%;"><input type="text" name="VERIFIEDBY" id="VERIFIEDBY" value"<?php echo $desc; ?>" style="width:100%; text-align:left;"></td>
        <td style="width:40%;"><textarea type="date" name="VERIFIERTITLE" id="VERIFIERTITLE"   style="width:100%; text-align:left; height:18px;"></textarea></td>
     </tr>  
     <tr> 
        <td style="width:15%;"> Approved by</th> 
        <td style="width:30%;"><input type="text" name="VERIFIEDBY" id="VERIFIEDBY"  style="width:100%; text-align:left;"></td>
        <td style="width:15%;"><input type="text" name="VERIFIEDBY" id="VERIFIEDBY"  style="width:100%; text-align:left;"></td>
        <td style="width:40%;"><textarea type="date" name="VERIFIERTITLE" id="VERIFIERTITLE"   style="width:100%; text-align:left; height:18px;"></textarea></td>
     </tr>
     </tbody>
     </table>        
         
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
  
  
   
                          
      </section>  
      
       
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        
      </div>
      <center> <strong>Copyright &copy; 2017  Naguru Teenage Information and Health Center</strong> All rights
    reserved.</center>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
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
    <script src="../assets/plugins/pagedown/Markdown.Converter.js"></script>
    <script src="../assets/plugins/pagedown/Markdown.Sanitizer.js"></script>
    <script src="../assets/plugins/Markdown.Editor-hack.js"></script>
    <script src="../assets/js/editorInit.js"></script>
    <script>
        $(function () { formWysiwyg(); });
        </script>

<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="plugins/ckeditor/build-config.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html> 

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
                'style= " margin-left:0px; width:100%; text-align:right; background-color:#fff;" >';


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

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
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stss ="";
if( $result = $connect->query("SELECT * FROM budgetcoder WHERE codestatus = 'ACTIVE' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['budgetline'] . " </option>";   }
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
   <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/ionicons.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 14,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' BUDGET DETAILS'
		},
		{extend :'pdf',
		 title:'BUDGET DETAILS '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
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
     $('#example7').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'pdf',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'print',
		 title:'NTIHC |IMMS USER CONTACTS '
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
  
   
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border: 1px solid #ECF0F5;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid #ECF0F5;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 12px;
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
  require('connect/config.php');
  ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels --> 
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NTIHC</b> &nbsp;&nbsp imm system</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"> </li>
              <li>
              
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                         <img src="../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
                      </div>
                      <h4>
                         Ntihc M.E team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not use this awesome application?</p>
                    </a>
                  </li>
                  <!-- end message --> 
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i> 
              <span class="">&nbsp<?php echo $nameofuser; ?>  </span>
            </a>  
             
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-th"></i> 
              <span class="">&nbsp<?php echo $desc; ?>  </span>
            </a> 
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-share"></i> 
              <span class="">&nbsp<?php echo $dept; ?>  </span>
            </a> 
            
            <ul class="dropdown-menu">
              <li class="header"> 
              
              
              
              </li>
              <li>
                <!-- inner menu: contains the actual data -->
                 
          </li>
              
          <!-- Control Sidebar Toggle Button -->
          <li> 
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <div class="user-panel">
           
           
           
           
         <ul class="sidebar-menu"> 
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Budget inbox</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
          
          <li role="presentation"><a role="menuitem" tabindex="-1" href="budget_config.php">Open current budget</a></li>  
      
          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Budget outbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
           <table id="example5" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
               <th>NO.</th>  
              <th>FINANCIAL YEAR</th> 
              <th>ACTION</th> 
            </tr>
         
        </tfoot>
        <tbody> 
<?php

require('../php/configdbmultiple.php');
$sql = "SELECT COUNT(budgetline), programme, programecode, Costdescription FROM budgetconfig GROUP BY programme, Costdescription ORDER BY programme DESC ";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.  
		  '<td>'.$row['programecode'].'</td>'. 
		  '<td><input type="button"  onclick="postvalues(this.id)" value="open"></td>'. 
   '</tr>';
$x=$x+1;

 }

 ?>
	  </tbody>
  </table>      
 
          </ul>
        </li>
        
        <li>
          <a href="budget_config.php">
            <i class="fa fa-th"></i> <span>Add new budget</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li>
          <a href="budget_config.php">
            <i class="fa fa-th"></i> <span>Budget datails</span>
            <span class="pull-right-container">
              
            </span>
          </a>
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
        Budget 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Procurement workplan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
           
           
           <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       Add budget details
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                                      
    <form class="form-horizontal" action="budget_configprocess.php" method="POST" >     
                    
    <table class="table table-bordered" style="background-color:#ecf0f5;">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Budget details </th>
        <th style="border-bottom-color:white;font-weight:bold; width:20%; text-align:center;">Category (Budget line)</th>
        <th style="border-bottom-color:white;font-weight:bold; width:10%;">Code</th>  
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Cost description</th>
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Programe </th>
        <th style="border-bottom-color:white;font-weight:bold; width:10%;">Pgm code</th>  
         
    </tr>
    </thead>   
    <tbody>
        <tr> 
        <td> <textarea name="budgetdetails" id="budgetdetails"  placeholder="like: STI management" required="required" 
        style="width:100%; height:20px;background-color:#ecf0f5;"> </textarea> </td>
        
        <td> <select name="budgetline" id="budgetline"  required="required" style="width:100%;background-color:#ecf0f5;" > 
        <option> </option>
        <option> xxxxdd</option>
        </select>
        </td>
          
        <td> <select name="code" id="code"  required="required" style="width:100%;background-color:#ecf0f5;">
        <option> </option>
                 <option> 22</option>
                 
                 </select> </td>  
        
        <td> <select name="Costdescription" id="Costdescription"  required="required" style="width:100%;background-color:#ecf0f5;">
         <option> </option>
        <option> dd</option>
        </select> </td>
         
        <td> <select name="programme" id="programme"  required="required" style="width:100%;background-color:#ecf0f5;"> 
        <option> </option>
        <option> ee</option>
        </select> </td> 
         
        <td><select  name="programecode" id="programecode"  required="required" style="width:100%;background-color:#ecf0f5;"> 
        <option> </option>
        <option> 22</option>
        </select> </td>  
    </tr> 
    </tbody>
    </table> 
        <input type="hidden" name="lastupdatedate" id="lastupdatedate"  value="<?php echo date('d-m-y'); ?>"  style="width:100%;"> 
         <center> <input type="submit" name="button" id="button" value="Add" />   </center>             
           </form>          
   
                      
                    </div>
                  </div>
                </div>
                 
                <div class="panel box box-dangers">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTh">
                        Summary of Budget activites by cost description and associated budget lines
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTh" class="panel-collapse collapse">
                    <div class="box-body">
                    
                     <table id="example4" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
               <th>NO.</th> 
              <th>PROGRAM / ACTIVITY</th>
              <th>PGM CODE</th>
              <th>COST DESCRIPTION</th>
              <th>ASSOCIATED BUDGET LINES</th>
            </tr>
         
        </tfoot>
        <tbody> 
<?php

require('../php/configdbmultiple.php');
$sql = "SELECT COUNT(budgetline), programme, programecode, Costdescription FROM budgetconfig GROUP BY programme, Costdescription ORDER BY programme DESC ";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
		  '<td>'.$row['programme'].'</td>'.
		  '<td>'.$row['programecode'].'</td>'.
		  '<td>'.$row['Costdescription'].'</td>'.
	      '<td>'.$row['COUNT(budgetline)'].'</td>'. 
		  
   '</tr>';
$x=$x+1;

 }

 ?>
	  </tbody>
  </table>      
 
        
                    </div>
                  </div>
                </div>
                 
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                       Edit details
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                      <form class="form-horizontal" action="budget_config.php" method="POST" >     
                    
    <table class="table table-bordered" style="background-color:#ecf0f5;">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Budget details </th>
        <th style="border-bottom-color:white;font-weight:bold; width:20%; text-align:center;">Category </th>
        <th style="border-bottom-color:white;font-weight:bold; width:10%;">Code</th>  
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Cost description</th>
        <th style="border-bottom-color:white;font-weight:bold; width:20%;">Programe /Activity</th>
        <th style="border-bottom-color:white;font-weight:bold; width:10%;">Pgm code</th>  
         
    </tr>
    </thead>   
    <tbody>
        <tr> 
        <td> <textarea name="budgetdetails" id="mybudgetdetails"  value="" required="required" style="width:100%; height:23px;background-color:#fff;"> </textarea> </td>
        
        <td> <select name="budgetline" id="mybudgetline" value="" required="required" style="width:100%;background-color:#fff;" > 
        <option> </option>
        <option> xxxxdd</option>
        </select>
        </td>
          
        <td> <select name="code" id="mycode" value="" required="required" style="width:100%;background-color:#fff;">
        <option> </option>
                 <option> 22</option>
                 
                 </select> </td>  
        
        <td> <select name="Costdescription" id="myCostdescription" value="" required="required" style="width:100%;background-color:#fff;">
         <option> </option>
        <option value="dd"> dd</option>
        </select> </td>
         
        <td> <select name="programme" id="myprogramme"  value="" required="required" style="width:100%;background-color:#fff;"> 
        <option> </option>
        <option> ee</option>
        </select> </td> 
         
        <td><select  name="programecode" id="myprogramecode"  value="" required="required" style="width:100%;background-color:#fff;"> 
        <option> </option>
        <option> 22</option>
        </select> </td>  
    </tr> 
    </tbody>
    </table> 
        <input type="hidden" name="lastupdatedate" id="lastupdatedate"  value="<?php echo date('d-m-y'); ?>"  style="width:100%;"> 
        <input type="hidden" name="lastupdatedby" id="lastupdatedby" value=" <?php echo $nameofuser; ?> "  style="width:100%;">
        <input type="hidden" id="myID" name="id" value="">
        <center> <input type="submit" name="button" id="button" value="Update" />  </center>             
           </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
           <div class="col-sm-12">              
  <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example" class="table table-striped table-bordered" >
        <thead>
        <tr>  
        <th style="text-transform:uppercase;">ID</th>
              <th style="text-transform:uppercase;">BUDGET DETAILS</th>
              <th style="text-transform:uppercase;">CATEGORY</th> 
              <th style="text-transform:uppercase;">CODE</th>  
              <th style="text-transform:uppercase;">COST DESCRIPTION</th>
              <th style="text-transform:uppercase;">PROGRAME</th> 
              <th style="text-transform:uppercase;">PGM CODE</th> 
              <th style="text-transform:uppercase;">ACTION</th> 
        </tr>
        </thead>
        <tfoot>
        <tr> 
          <th style="text-transform:uppercase;">ID</th>
              <th style="text-transform:uppercase;">BUDGET DETAILS</th>
              <th style="text-transform:uppercase;">CATEGORY</th> 
              <th style="text-transform:uppercase;">CODE</th>  
              <th style="text-transform:uppercase;">COST DESCRIPTION</th>
              <th style="text-transform:uppercase;">PROGRAME</th> 
              <th style="text-transform:uppercase;">PGM CODE</th>
              <th style="text-transform:uppercase;">ACTION</th>     
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function configcodee(myid){
var dts = myid.split("***");
document.getElementById("mybudgetdetails").value=dts[1];
document.getElementById("myID").value=dts[0];
document.getElementById("mybudgetline").value=dts[2]; 
document.getElementById("mycode").value=dts[3]; 
document.getElementById("myCostdescription").value=dts[4]; 
document.getElementById("myprogramme").value=dts[5]; 
document.getElementById("myprogramecode").value=dts[6]; 
}
</script> 
    
 <?php 
include_once("../updatecmgt/configmult.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM budgetconfig ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['budgetdetails']."***".$res['budgetline']."***".$res['code']."***".$res['Costdescription']."***".$res['programme']."***".$res['programecode'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['budgetdetails']."</td>";
		echo "<td>".$res['budgetline']."</td>"; 
		echo "<td>".$res['code']."</td>";
		echo "<td>".$res['Costdescription']."</td>"; 
		echo "<td>".$res['programme']."</td>";
		echo "<td>".$res['programecode']."</td>";  
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="configcodee(this.id)">Edit</a> </td>'; 			
	}
	?>
	</tbody>
  </table>
     </div> </div>
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Open Version</b>
    </div>
    <strong>Copyright &copy;  <a href="budget_config.php">Naguru Teenage Information and Health Center</a>.</strong> All rights
    reserved.
  </footer> 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 --> 
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../assets/lib/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>

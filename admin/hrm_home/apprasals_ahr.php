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
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
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
     $('#exaconts').DataTable( {
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
    <a href="../sys_dashboard.php" class="logo">
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
            <li class="active"><a href="../home_hrmgt.php" class="" >Home<span class="sr-only">(current)</span></a></li> 

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
          <a href="hr_contacts.php">
            <i class="fa fa-th"></i> <span style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">User-dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green "> All users</small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="../home_hrmgt.php">
            <i class="fa fa-th"></i> <span style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">Admin-dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green "> Admin</small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="../home_hrmgt.php">
            <i class="fa fa-laptop"></i> <span style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">Staff information</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green "> Admin</small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="../home_hrmgt.php">
            <i class="fa fa-laptop"></i> <span style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">General information</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green "> Admin</small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="../home_hrmgt.php">
            <i class="fa fa-circle-o"></i> <span style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">Time sheet</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green "> Admin</small>
            </span>
          </a>
        </li>
         
          <li>
          <a href="../home_hrmgt.php">
            <i class="fa fa-folder"></i> <span style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">Staff appraisals</span>
            <span class="pull-right-container">
              <small class=" label pull-right bg-green "> Admin</small>
            </span>
          </a>
        </li>  
       
         <li class="treeview">
          <a href="../home_hrmgt.php">
            <i class="fa fa-share"></i> <span style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 3px #000; color:#ffff;">Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right">Admin </i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../home_hrmgt.php"><i class="fa fa-circle-o"></i> </a></li>
            <li><a href="../home_hrmgt.php"><i class="fa fa-circle-o"></i> </a></li> 
          </ul>
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
     <font style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;"><center>Human Resource Management Module	</center></font>
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
                           <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#newemp"></button> 
                    <i class="fa fa-circle-o-notch fa-5x" style="color:#f39c12;"></i>
                      <h4> New employee </h4>
                      </a>
                      </div>
                       
                      
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#staffconts"></button> 
  <i class="fa fa-user fa-5x" style="color:#00a65a;"></i>
                      <h4> Staff contacts </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                            <a href="../timesheet/index.php" >
  <i class="fa fa-circle-o-notch fa-5x" style="color:#f56954;"></i>
                      <h4>Staff timesheet </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="../hr_mgt/hr_home.php" >
                    <i class="fa fa-rocket fa-5x" style="color:#f39c12;"></i>
                      <h4> Staff appraisals</h4>
                      </a>
                      </div>
                       
                      
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="../hr_mgt/hr_home.php" >
  <i class="fa fa-clipboard fa-5x" style="color:#00a65a;"></i>
                      <h4>My appraisal </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="../hr_mgt/hr_home.php" >
  <i class="fa fa-circle-o-notch fa-5x" style="color:#f56954;"></i>
                      <h4> </h4>
                      </a>
                      </div>
                     
                     
                  </div>
              </div>
                 <!-- /. ROW  --> 
               </div>
               <div class="col-sm-6"> 
                 
                  
                  
                  
                  
                  
                  
                  
                  
                  
                 
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div></div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
              
              <div class="col-sm-3 text-center">
                 
                 <div class="clearfix visible-sm-block"></div>  
                
         <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button></i>Pending contact info <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#fff; text-align:center; font-weight:bold; font-size:20px;">
            <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT Serial FROM staffcontacts  WHERE  SUBMISSIONLEVEL ='Pending'  
			                                           GROUP BY Serial ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
        
   <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button></i>Pending contact info <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#fff; text-align:center; font-weight:bold; font-size:20px;">
          5 
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
  
          <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button></i>Pending contact info <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#fff; text-align:center; font-weight:bold; font-size:20px;">
          5 
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
  
  
   <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button></i>Pending contact info <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#fff; text-align:center; font-weight:bold; font-size:20px;">
          5 
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
  
                  </div>  
              
                <div class="col-sm-9"> 
                <div class="table-responsive mailbox-messages">  
            
             <div class="box box-primary" style="border:0px;">
               <a href="../property_mgt.php" class="btn btn-primary btn-block margin-bottom" 
                style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:#000;;">Number of employees by departments</b></a>  </a> </div>

                  
               <div class=""  id="maraiyan" >  </div>
                     <script>

               function maraiyan(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'hrm_home/contdetails.php?q='+odno,
                            success : function(data){
                                     $('#maraiyan').html(data);
     								$("#newconttx").modal("show");
                                      }
                    });
                    }

               </script>
             <table id="example2" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                   <th>ID </th>
                  <th>CREATED DATE</th>
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th>  
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>ID </th>
                  <th>CREATED DATE</th>
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th>   
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("config_ahr.php");

             $result = mysqli_query($mysqli, "SELECT * FROM staffcontacts WHERE  SUBMISSIONLEVEL ='Completed' ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $mara = $res['id']."***".$res['Serial'];

              echo "<tr>"; 
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['DATECREATED']."</td>";
			  echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']." ".$res['OTHERNAME']." </td>";
			  echo "<td>".$res['ENTITYLOGO']."/".$res['FISCALYEAR']."/".$res['FISCALMONTH']."/".$res['id']."</td>";  
			    		 
	            }
               ?>
             </tbody>
             </table>
                </form> 
                   
                 </div>
                </div>
                
            </div></div></div>
            <!-- /.box-body -->
            
               fff
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="newemp" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 20px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            Generate personal file number</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
    <form class="form-horizontal" action="pfn_generator.php" method="POST" style="height:auto; font-weight:normal;">  
             
               <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:20%;border:0px ;"> Date created</th>  
                <th style="width:30%;border:0px ;"> <input type="date"name="DATECREATED"  id="DATECREATED" value="<?php echo date('Y-m-d'); ?> " 
                 required="required"  class="form-control" style="width:100%;background-color:#ECF0F5;"> 
                  </th>      
              </tr>
			  </table>  
              </div> 
              
              
              <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Serial number</th>  
                <th style="width:60%;border:0px ;"> <input type="text"name="Serial"  id="Serial" value=" <?php echo uniqid();?>"
                 readonly="readonly"  class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table>  
              </div> 
               
               
         <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> First name  </th>  
                <th style="width:60%;border:0px ;"> <input type="text"  name="FIRSTNAME"  id="FIRSTNAME"  autocomplete="off"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
              </div>
              
               <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Last name </th>  
                <th style="width:60%;border:0px ;"> <input type="text"   name="LASTNAME"  id="LASTNAME" autocomplete="off"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
            </div>
            
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Other names </th>  
                <th style="width:60%;border:0px ;"> <input type="text"   name="OTHERNAME"  id="OTHERNAME" autocomplete="off"
                 class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table> 
           </div>
            
         <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr>   
                <th style="width:100%;border:0px ;"> <select name="STAFFACCOUNT"  id="STAFFACCOUNT" 
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  
                   <option value="Undefined">Send to <option>
                   <?php   echo $stdd; ?> 
                   </select> 
                 </th>  
              </tr>
			 </table> 
           </div> 
           
          <input type="hidden"name="ENTITYLOGO"  id="ENTITYLOGO" value="NTIHC" > 
          
          <input type="hidden"name="SUBMISSIONLEVEL"  id="SUBMISSIONLEVEL" value="Pending" > 
           
           
          <input type="hidden"name="REGISTEREBY"  id="REGISTEREBY" value="<?php echo $nameofuser; ?>" > 
           
        <Center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" />
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
             
             
                </form> 
                  </div>    
                    
           
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">  
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                     
                     
                     
                      <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="contactinfo" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                               <div class=""  id="newcontact" >  </div>
                     <script>

               function newcontact(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'hrm_home/contact_details.php?q='+odno,
                            success : function(data){
                                     $('#newcontact').html(data);
     								$("#newconttxx").modal("show");
                                      }
                    });
                    }

               </script>
                                            
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 20px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            List of employees with pending contact information</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
    <form class="form-horizontal" action="" method="POST" style="height:auto; font-weight:normal;">  
              
             <div class="table-responsive mailbox-messages"> 
               
             <table id="exaconts" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                   <th>ID </th>
                  <th>CREATED DATE</th>
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th>  
                  <th>ACTION</th>
                  <th>ACTION</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>ID </th>
                  <th>CREATED DATE</th>
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th>  
                  <th>ACTION</th>
                  <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("config_ahr.php");

             $result = mysqli_query($mysqli, "SELECT * FROM staffcontacts WHERE  SUBMISSIONLEVEL ='Pending' ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxTc = $res['id']."***".$res['Serial'];

              echo "<tr>"; 
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['DATECREATED']."</td>";
			  echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']." ".$res['OTHERNAME']." </td>";
			  echo "<td>".$res['ENTITYLOGO']."/".$res['FISCALYEAR']."/".$res['FISCALMONTH']."/".$res['id']."</td>";
			   echo '<td> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
              <a id="2__'.$dtsxTc.'" href="javascript:void(0)" onclick="newcontact(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-ok"> </span></a> 
              </td>';  
			  echo "<td><a href=\"hrm_home/view_contact_info.php?Serial=$res[Serial]\">View info</a> &nbsp;|&nbsp;
			   <a href=\"hrm_home/contact_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		 
	            }
               ?>
             </tbody>
             </table>
                </form> 
                </div>    
                    
        
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;"> 
                                        <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                     
            
            
            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="staffconts" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 20px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                           STAFF CONTACTS </h4>
                                        </div>
                                        <div class="modal-body"> 
              
             <div class="table-responsive mailbox-messages"> 
             
             
              <table id="exstaffconts" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th> 
                  <th>DEPARTMENT </th>
                  <th>CONTACT1</th>
                  <th>CONTACT2</th>
                  <th>EMAIL</th> 
                 </tr>
        </thead>
        <tfoot>
          <tr> 
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th> 
                  <th>DEPARTMENT </th>
                  <th>CONTACT1</th>
                  <th>CONTACT2</th>
                  <th>EMAIL</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("config_ahr.php");

             $result = mysqli_query($mysqli, "SELECT * FROM staffcontacts WHERE  SUBMISSIONLEVEL ='Completed' ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $mara = $res['id']."***".$res['Serial'];

              echo "<tr>";   
			  echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']." ".$res['OTHERNAME']." </td>";
			  echo "<td>".$res['ENTITYLOGO']."/".$res['FISCALYEAR']."/".$res['FISCALMONTH']."/".$res['id']."</td>";  
			  echo "<td>".$res['DEPARTMENT']."</td>";	
			  echo "<td>".$res['MOBILEPHONE']."</td>";
			  echo "<td>".$res['HOMEPHONE']."</td>";
		      echo "<td>".$res['STAFFACCOUNT']."</td>";  	 
	            }
               ?>
             </tbody>
             </table>
         
              
                </div>    
                    
        
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;"> 
                                        <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
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

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
       
    </div> 
    
      
  </footer> 
 
<script src="../../assets/lib/moment/moment.min.js"></script>
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
  
 <script type="text/javascript" src="../ ../assets/js/gauge.js"></script>
</body>
</html>

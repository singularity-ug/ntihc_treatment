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
  <link rel="stylesheet" href="css/AdminLTE.min.css">
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
     $('#exacontapps').DataTable( {
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
     $('#appraistk').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' APPRAISAL TRACKER'
		},
		{extend :'pdf',
		 title:'APPRAISAL TRACKER'
		},
		{extend :'print',
		 title:'APPRAISAL TRACKER'
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
    border: 1px solid #000;
    line-height: 1.0;
    padding: 2px;
    vertical-align: center;
	
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #000;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 12px;
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
    <a href="../sys_dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" font style=" font:bold 18px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;margin-top: 10px;">Human Resource module</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="dashboard.php" class="" >Home<span class="sr-only">(current)</span></a></li> 

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
         
        
        <div class="info-box bg-pink hover-expand-effect" style="background-color:#f1f1f1;height: 49px;width: 95%;">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                              <?php
                                include('connectahr.php');
                                 $permanent = $con->prepare("SELECT COUNT(*) FROM staffcontacts where EMPLOYMENTTERMS = 'PERMANENT'");
                                    $permanent->execute();
                                    $fetch = $permanent->fetchAll();

                                foreach($fetch as $key => $row) { 
                                   $total = $row['COUNT(*)'];

                                }?>
                            <div class="text">PERMANENT</div>
                            <div class="number count-to"><?php echo $total; ?></div>
                        </div>
                    </div>
                 
                    <div class="info-box bg-cyan hover-expand-effect" style="background-color:#f1f1f1;height: 49px;width: 95%;">
                        <div class="icon">                        
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connectahr.php');
                                 $gass = $con->prepare("SELECT COUNT(*) FROM staffcontacts where EMPLOYMENTTERMS = 'CONTRACT'");
                                    $gass->execute();
                                    $fetch1 = $gass->fetchAll();

                                foreach($fetch1 as $key => $row1) { 
                                   $total1 = $row1['COUNT(*)'];

                              }?>
                            <div class="text">CONTRACT</div>
                            <div class="number count-to"><?php echo $total1; ?></div>
                        </div>
                    </div>
                
                    <div class="info-box bg-light-green hover-expand-effect" style="background-color:#f1f1f1;height: 49px;width: 95%;">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connectahr.php');
                                 $parttime = $con->prepare("SELECT COUNT(*) FROM staffcontacts where EMPLOYMENTTERMS = 'PROBATION'");
                                    $parttime->execute();
                                    $fetch2 = $parttime->fetchAll();

                                foreach($fetch2 as $key => $row2) { 
                                   $total2 = $row2['COUNT(*)'];

                              }?>
                            <div class="text">PROBATION</div>
                            <div class="number count-to"><?php echo $total2; ?></div>
                        </div>
                    </div>
                
                    <div class="info-box bg-light-green hover-expand-effect" style="background-color:#f1f1f1;height: 49px;width: 95%;">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connectahr.php');
                                 $jobOrder = $con->prepare("SELECT COUNT(*) FROM staffcontacts where EMPLOYMENTTERMS = 'SUPPORT STAFF'");
                                    $jobOrder->execute();
                                    $fetch3 = $jobOrder->fetchAll();

                                foreach($fetch3 as $key => $row3) { 
                                   $total3 = $row3['COUNT(*)'];

                              }?>
                            <div class="text">SUPPORT STAFF</div>
                            <div class="number count-to"><?php echo $total3; ?></div>
                        </div>
                    </div>
       
        
         <div class="info-box bg-light-green hover-expand-effect" style="background-color:#f1f1f1;height: 49px;width: 95%;">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connectahr.php');
                                 $jobOrder = $con->prepare("SELECT COUNT(*) FROM staffcontacts where EMPLOYMENTTERMS = 'TEMPORARY'");
                                    $jobOrder->execute();
                                    $fetch3 = $jobOrder->fetchAll();

                                foreach($fetch3 as $key => $row3) { 
                                   $total3 = $row3['COUNT(*)'];

                              }?>
                            <div class="text">TEMPORARY</div>
                            <div class="number count-to"><?php echo $total3; ?></div>
                        </div>
                    </div>
					
					
					 <div class="info-box bg-light-green hover-expand-effect" style="background-color:#f1f1f1;height: 49px;width: 95%;">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                        <div class="content">
                            <?php
                                include('connectahr.php');
                                 $jobOrder = $con->prepare("SELECT COUNT(*) FROM staffcontacts where EMPLOYMENTTERMS = 'PART TIME'");
                                    $jobOrder->execute();
                                    $fetch3 = $jobOrder->fetchAll();

                                foreach($fetch3 as $key => $row3) { 
                                   $total3 = $row3['COUNT(*)'];

                              }?>
                            <div class="text">PART TIME</div>
                            <div class="number count-to"><?php echo $total3; ?></div>
                        </div>
                    </div>
					
					
					
           <div class="dtime">
                    <div class="info-box bg-light-green hover-expand-effect" style="background-color:#f1f1f1;height: 49px;width: 95%;">
                        <i class="icon-calendar"></i>
                        <?php
                        $today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($today));
                        echo $new;
                        ?>
                    </div>
                 </div>
                <div class="notif" style="font-size: 11px;">
                <span><i>TODAY'S BIRTHDAYS</i></span><br><br>
                <div class="celeb">
                <?php
                  include("connectahr.php"); 
                    $date = date('-m-d');
                    $bquery = $con->prepare("SELECT * FROM staffcontacts WHERE BIRTHDATE LIKE '%$date%' ");
                    $bquery->execute();
                    while($row = $bquery->fetch()) {
                        $bday = $row["BIRTHDATE"];
                        $date = new DateTime($bday);
                        $now = new DateTime();
                        $difference = $date->diff($now)->format('%y');
                        $gender = $row['GENDER'];

                    if ($gender == 'Male') { ?>
                    
                        <span>Age: <?php echo $difference; ?></span><br>
                        <span">Name: Mr. <?php echo $row['FIRSTNAME']. " " . $row['OTHERNAME']. ". " . $row['LASTNAME']; ?></span><br>
                        <span>Mobile No.: <?php echo $row['MOBILEPHONE']; ?></span><br>
                        <span>Department: <?php echo $row['DEPARTMENT']; ?></span><br><br>
                   <?php } else { ?>
                        <span>Age: <?php echo $difference; ?></span><br>
                        <span>Name: Ms/Mrs. <?php echo $row['FIRSTNAME']. " " . $row['OTHERNAME']. ". " . $row['LASTNAME']; ?></span><br>
                        <span>Mobile No.: <?php echo $row['MOBILEPHONE']; ?></span><br>
                        <span>Department: <?php echo $row['DEPARTMENT']; ?></span><br>
                  <?php  }
                  }
                ?>
                    </div>
                </div>
            
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#F1F1F1;">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
     <img src="../../assets/img/logsbig.PNG" width="100%" height="30%" style="height:90px;">
               
     
    </section>
 <div class="panel-body">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12" style="font-size: 10px;">
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
                    <i class="fa fa-circle-o-notch fa-5x" style="color:#f39c12;font-size: 30px;"></i>
                      <h4 style="font-size:14px;"> New employee </h4>
                      </a>
                      </div> 
                  </div> 
                 
				 
				 
				       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="individual_report.php">   
  <i class="fa fa-user fa-5x" style="color:#00a65a; font-size: 30px;"></i>
                      <h4 style="font-size:14px;">Staff contacts &nbsp;
					  
					    <?php
                                include('connectahr.php');
                                 $parttime = $con->prepare("SELECT COUNT(*) FROM staffcontacts ");
                                    $parttime->execute();
                                    $fetch2 = $parttime->fetchAll();

                                foreach($fetch2 as $key => $row2) { 
                                   $total2 = $row2['COUNT(*)'];

                              }?>
                              
                            <?php echo $total2; ?>   </h4>
                      </a>
                      </div>
                   </div>
				   
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="general_info.php"> 
  <i class="fa fa-gear fa-5x" style="color:#f39c12;font-size: 30px;"></i>
                      <h4 style="font-size:14px;"> General information&nbsp;
					  
					    <?php
                                include('connectahr.php');
                                 $parttime = $con->prepare("SELECT COUNT(*) FROM staffcontacts  where SUBMISSIONLEVEL='Completed' AND UNITALLOCATION='PENDING'");
                                    $parttime->execute();
                                    $fetch2 = $parttime->fetchAll();

                                foreach($fetch2 as $key => $row2) { 
                                   $total2 = $row2['COUNT(*)'];

                              }?>
                              
                            <?php echo $total2; ?>   </h4>
                      </a>
					  
					   </h4>
                      </a>
                      </div>  
                  </div>
				  
				 
				  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                            <a href="../timesheet/index.php" >
  <i class="fa fa-circle-o-notch fa-5x" style="color:#00a65a;font-size: 30px;"></i>
                      <h4 style="font-size:14px;">My New timesheet </h4>
                      </a>
                      </div> 
                  </div>
				  
				   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                            <a href="timesheet_info.php" >
  <i class="fa fa-envelope-o fa-5x" style="color:#f56954;font-size: 30px;"></i>
                      <h4 style="font-size:14px;">Staff timesheet info </h4>
                      </a>
                      </div> 
                  </div>
				  
				  
                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href=../<button class="" data-toggle="modal"  data-target="#launchappraisal"></button> 
                    <i class="fa fa-rocket fa-5x" style="color:#f39c12;font-size: 30px;"></i>
                      <h4 style="font-size:14px;">Appraisal launcher</h4>
                      </a>
                      </div>
                       
                      
                  </div> 
                  
				   
              </div>
                 <!-- /. ROW  --> 
               </div>
               <div class="col-sm-6"> 
               
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href=../<button class="" data-toggle="modal"  data-target="#generateappz"></button> 
                   <i class="fa fa-user fa-5x" style="color:#f56954; font-size: 30px;"></i>
                     <center>  <h4 style="font-size:14px;"> My staff appraisal&nbsp; &nbsp;
					 <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
if ($result = mysqli_query($link, "SELECT id FROM staffcontacts  WHERE APPRAISALELIGIBILITY='Active' 
                                   AND APPRAISALCOUNT = '0' AND EMAIL2 = '$rm' 
								   AND APPRAISALPROGRESSLEVEL = 'Not started' GROUP BY id")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
 </h4></center>
                      </a>
                      </div>  </div>
               
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                          <a href="my_appraisal_template.php">
                   <i class="fa fa-clipboard fa-5x" style="color:#00a65a; font-size: 30px;"></i>
                     <center>  <h4 style="font-size:14px;"> Staff appraisal info
				 
                    </h4></center>
                      </a>
                      </div>  </div>
                   
                 
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
                 
         <div class="col-lg-6 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5; background-color:#fff;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button></i>Pending contact info <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#000; text-align:center; font-weight:bold; font-size:20px;">
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
          border-right: 4px solid #ecf0f5;background-color:#fff;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#appraisall"></button></i>Appraisals &nbsp; &nbsp; tracker<i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#000; text-align:center; font-weight:bold; font-size:20px;">
           <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM staffcontacts  WHERE APPRAISALELIGIBILITY='Active' AND APPRAISALCOUNT = '0' GROUP BY id")) {        
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
          border-right: 4px solid #ecf0f5; background-color:#fff;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactio"></button></i>Incoming appraisals <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#000; text-align:center; font-weight:bold; font-size:20px;">
          <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM staffcontacts  WHERE APPRAISALELIGIBILITY='Active' AND APPRAISALCOUNT = '1' AND APPRAISALSTATUS = 'Submitted' GROUP BY id")) {        
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
          border-right: 4px solid #ecf0f5;background-color:#fff;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactin"></button></i>Expired &nbsp;&nbsp; &nbsp;contracts <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#000; text-align:center; font-weight:bold; font-size:20px;">
          0 
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->   
        
        
         <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5; background-color:#fff;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactin"></button></i>Next week's &nbsp;&nbsp; &nbsp; birthday<i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#000; text-align:center; font-weight:bold; font-size:20px;">
          0 
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
  
   <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5;background-color:#fff;">
          <a href=../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactin"></button></i>Today's &nbsp;&nbsp; &nbsp;Birthdays <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#000; text-align:center; font-weight:bold; font-size:20px;">
          0 
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
   
                </div>  
              
                <div class="col-sm-9"> 
                <div class="table-responsive mailbox-messages">   
    <link href="plugins/css/jquery.dataTables.min.css" rel="stylesheet"> 
    <link href="css/style_dumx.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
     
   
    <div class="pie-report" style="float: right;">
        <script src="js/jquery.min.js"></script>
        <?php include('script.php'); ?> 

        <!-- Educational Qualification -->
        <!-- Talisay -->
        <?php
          include('connectahr.php');
          $date = date("Y", strtotime("+ 8 HOURS"));
          $qtalisay = $con->prepare("SELECT COUNT('id') FROM `staffcontacts` WHERE `DEPARTMENT` = 'ADVOCACY AND RESEARCH'") or die(mysqli_error());
          $qtalisay->execute();
          $talisay = $qtalisay->fetchAll();
          foreach($talisay as $key => $row) { 
           $total = $row["COUNT('id')"];

            }?>


        <!-- Alijis -->
          <?php
          $qalijis = $con->query("SELECT COUNT('id') FROM `staffcontacts` WHERE `DEPARTMENT` = 'SERVICE DELIVERY'") or die(mysqli_error());
          $qalijis->execute();
          $alijis = $qalijis->fetchAll();
          foreach($alijis as $key => $row) { 
           $total1 = $row["COUNT('id')"];

            }?>


        <!-- Binalbagan -->
          <?php
          $qbinalbagan = $con->query("SELECT COUNT('id') FROM `staffcontacts` WHERE `DEPARTMENT` = 'FINANCE AND ADMIN'") or die(mysqli_error());
          $qbinalbagan->execute();
          $binalbagan = $qbinalbagan->fetchAll();
          foreach($binalbagan as $key => $row) { 
           $total2 = $row["COUNT('id')"];

            }?>

 
        

            <!-- Educational Qualification -->
            <!-- Talisay -->
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edtbs = $row['COUNT(DISTINCT bs_name)'];
            }?>
			
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edtms = $row['COUNT(DISTINCT ms_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_campus = 'Talisay' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edtdr = $row['COUNT(DISTINCT dr_name)'];
            }?>

            <!-- Fortune Towne -->
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edfbs = $row['COUNT(DISTINCT bs_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edfms = $row['COUNT(DISTINCT ms_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_campus = 'Fortune Towne' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edfdr = $row['COUNT(DISTINCT dr_name)'];
            }?>

            <!-- Alijis -->
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edabs = $row['COUNT(DISTINCT bs_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edams = $row['COUNT(DISTINCT ms_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_campus = 'Alijis' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edadr = $row['COUNT(DISTINCT dr_name)'];
            }?>

            <!-- Binalbagan -->
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT bs_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edbbs = $row['COUNT(DISTINCT bs_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT ms_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edbms = $row['COUNT(DISTINCT ms_name)'];
            }?>
            <?php
                include('connect.php');
                 $display = $con->prepare("SELECT COUNT(DISTINCT dr_name) FROM tbl_personnel WHERE per_campus = 'Binalbagan' AND per_id<>0");
                    $display->execute();
                    $fetch = $display->fetchAll();

                foreach($fetch as $key => $row) { 
                   $edbdr = $row['COUNT(DISTINCT dr_name)'];
            }?>


        <script src="js/jquery.canvasjs.min.js"></script>
            <script type="text/javascript"> 
              window.onload = function() { 
                $("#chartContainer").CanvasJSChart({ 
                  title: { 
                    
                  }, 
                  axisY: { 
                    title: "Teachers" 
                  }, 
                  legend :{ 
                    verticalAlign: "center", 
                    horizontalAlign: "left" 
                  }, 
                  data: [ 
                  { 
                    type: "pie", 
                    showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: [ 
                      { label: "Advocacy and research",  y: 
                        <?php 
                          if($talisay == ""){
                              echo 0;
                          }else{
                            echo $total;
                          }
                        ?>, legendText: "Advocacy and research"}, 
                      { label: "Service delivery",  y: 
                        <?php 
                          if($alijis == ""){
                            echo 0;
                          }else{
                            echo $total1;
                          } 
                        ?>, legendText: "Service delivery"},
                      { label: "Admin and Finance",  y: 
                        <?php 
                          if($binalbagan == ""){
                            echo 0;
                          }else{
                            echo $total2;
                          } 
                        ?>, legendText: "Admin and Finance"} 
                    ] 
                  } 
                  ] 
                });
           


        // Educational Qualification
        var chart1 = new CanvasJS.Chart("bar2chartContainer",
            {
              title:{
                text: "Educational Qualification Per department"
              },
              animationEnabled: true,
              legend: {
                cursor:"pointer",
                itemclick : function(e) {
                  if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                      e.dataSeries.visible = false;
                  }
                  else {
                      e.dataSeries.visible = true;
                  }
                  chart1.render();
                }
              },
              axisY: {
                title: ""
              },
              toolTip: {
                shared: true,  
                content: function(e){
                  var str = '';
                  var total = 0 ;
                  var str3;
                  var str2 ;
                  for (var i = 0; i < e.entries.length; i++){
                    var  str1 = "<span style= 'color:"+e.entries[i].dataSeries.color + "'> " + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ; 
                    total = e.entries[i].dataPoint.y + total;
                    str = str.concat(str1);
                  }
                  str2 = "<span style = 'color:DodgerBlue; '><strong>"+e.entries[0].dataPoint.label + "</strong></span><br/>";
                  str3 = "<span style = 'color:Tomato '>Total: </span><strong>" + total + "</strong><br/>";
                  
                  return (str2.concat(str)).concat(str3);
                }

              },
              data: [
              {        
                type: "bar",
                showInLegend: true,
                name: "Bachelor Degree",
                color: "#f39c12",
                dataPoints: [
                { y: <?php echo $edbbs; ?>, label: "Test one"},        
                { y: <?php echo $edabs; ?>, label: "Test two"},              
                { y: <?php echo $edfbs; ?>, label: "Test three"},
                { y: <?php echo $edtbs; ?>, label: "Test four"}
                ]
              },
              {        
                type: "bar",
                showInLegend: true,
                name: "Masteral Degree",
                color: "#f56954",          
                dataPoints: [
                { y: <?php echo $edbms; ?>, label: "Test one"},        
                { y: <?php echo $edams; ?>, label: "Test two"},         
                { y: <?php echo $edfms; ?>, label: "Test three"},
                { y: <?php echo $edtms; ?>, label: "Test four"}
                ]
              },
              {        
                type: "bar",
                showInLegend: true,
                name: "Doctoral Degree",
                color: "#00a65a",
                dataPoints: [
                { y: <?php echo $edbdr; ?>, label: "Test one"},    
                { y: <?php echo $edadr; ?>, label: "Test two"},              
                { y: <?php echo $edfdr; ?>, label: "Test three"},
                { y: <?php echo $edtdr; ?>, label: "Test four"}
                ]
              }

              ]
            });

        chart1.render();
              }
            </script>
        </div>
    <div id = "content" style="margin-bottom: 15px !important;">
        <br />
        <br />
        <br />
        <div class = "">
        <div id="chartContainer" style="height: 400px; width: 85%; float: right; margin-right: 10px; margin-top: -70px;"></div> 
        
    </div>
  </body>
</html>
            
                 
                 </div>
                </div>
                
            </div>
            <!-- /.box-body -->
            
               
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
                                            
                                            
                                            
                                            <h4 class="modal-title" id="myModalLabel"  >
                                          <center> Employees with pending contact information </center></h4>
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
				  <th>UPDATE STATUS</th>
                 <th>ACTION</th>
                 <th>TRUNCATE</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>ID </th>
                  <th>CREATED DATE</th>
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th>
				 <th>UPDATE STATUS</th>
                  <th>ACTION</th>
                  <th>TRUNCATE</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("../hrm_home/config_ahr.php");

             $result = mysqli_query($mysqli, "SELECT * FROM staffcontacts WHERE  SUBMISSIONLEVEL ='Pending' ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxTc = $res['id']."***".$res['Serial'];

              echo "<tr>"; 
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['DATECREATED']."</td>";
			  echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']."  ".$res['OTHERNAME']." </td>";
			  echo "<td>".$res['ENTITYLOGO']."/".$res['FISCALYEAR']."/".$res['FISCALMONTH']."/".$res['id']."</td>";
			   echo "<td>".$res['SUBMISSIONLEVEL']."</td>";
			   echo '<td> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
              <a id="2__'.$dtsxTc.'" href="javascript:void(0)" onclick="newcontact(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-ok"> </span></a> 
              </td>';  
			  echo "<td>  <a href=\"contact_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		 
	            }
               ?>
             </tbody>
             </table>
                </form> 
				
				   <div class=""  id="newcontact" >  </div>
                     <script>

               function newcontact(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'contact_details.php?q='+odno,
                            success : function(data){
                                     $('#newcontact').html(data);
     								$("#newconttxx").modal("show");
                                      }
                    });
                    }

               </script>
                </div>    
                    
        
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;"> 
                                        
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                     
            
             
                      
                     
                      <div class="col-lg-12">
                        <div class="modal" id="launchappraisal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center; font-size:12px;">Periodical staff appraisal launcher </h4>
                                        </div>
                                        <div class="modal-body">
                 
                        <form class="form-horizontal" action="appraisal_launcher.php"  method="POST">  
            
             
                <table class="table-responsive" style="margin-top:0px;"> 
                <table class="table" style="border:0px;">
                <tr>  
                <th style="width:50%; text-align:left;border:0px;font-size:12px;">  Appraisal period</th>
                <td style="width:30%;border:0px;"><input type="text" name="APPRAISALMONTH" id="APPRAISALMONTH"  value="<?php echo date('F'); ?>" required="required"   
				style="width:100%; background-color:#fff;"></td>
                <td style="width:20%;border:0px;">
                <input type="text" name="APPRAISALMONTHYEAR" id="APPRAISALMONTHYEAR"   value="<?php echo date('Y'); ?>" required="required"    
				style="width:100%; background-color:#fff;"> 
                </td>  
			    </tr>             
                </table>
                 
                   <table class="table-responsive" style="margin-top:-16px;"> 
                <table class="table" style="border:0px;">
                <tr>  
                <th style="width:50%; text-align:left;border:0px;font-size:12px;">  Finacial period</th>
                <td style="width:50%;border:0px;"><input type="text" name="APPRAISALFINANCIALPERIOD" id="APPRAISALFINANCIALPERIOD"  
                value="FY <?php echo date('Y'); ?> - <?php echo date('Y') + 1; ?>" required="required"   
				style="width:100%; background-color:#fff;"> 
                </td>  
			    </tr>             
                </table>
               
  
                <table class="table-responsive" style="margin-top:-16px;"> 
                <table class="table" style="border:0px;">
                <tr>  
                <th style="width:50%; text-align:left;border:0px; font-size:12px;"> Select the launcher radio to activate</th>
                <td style="width:50%;border:0px;">
                <input type="radio" name="APPRAISALCOUNT" id="APPRAISALCOUNT" value="5">
                  <label style="font-weight:normal;">Disabled</label> 
                  
		          <input name="APPRAISALCOUNT" type="radio" id="APPRAISALCOUNT" value="0" >
		          <label style="font-weight:normal;">Launch for all</label> 
                </td>  
			    </tr>             
                </table>
                
                  <input type="hidden"  name="APPRAISALSTATUS" id="APPRAISALSTATUS" value="Pending" readonly="readonly"
				  style="width:100%; font-weight:normal; background-color:#fff;">    
             
                
                <table class="table-responsive" style="margin-top:-16px;"> 
                <table class="table" style="border:0px;">
                <tr>  
                <th style="width:50%; text-align:left;border:0px;font-size:12px;">  Deadline for submission:</th>
                <td style="width:50%;border:0px;"><input type="date" name="APPRAISALSUBMISSIONDEADLINE" id="APPRAISALSUBMISSIONDEADLINE"   required="required"  
				style="width:100%; background-color:#fff;"></td>  
			    </tr>             
                </table>
                
                 <table class="table-responsive" style="margin-top:-16px;"> 
                <table class="table" style="border:0px;">
                <tr>  
                <th style="width:50%; text-align:left;border:0px;font-size:12px;"> Exercise serial number</th>
                <td style="width:50%;border:0px;"><input type="text" name="APPRAISALEPISODE" id="APPRAISALEPISODE"  value=" <?php echo uniqid();?>" readonly="readonly"   
				style="width:100%; background-color:#fff;"></td>  
			    </tr>             
                </table>
			  
         <center> <input type="submit" name="update" value="Save" class="button 5" style= "font-size:15px; border-radius:7px; color:#fff; width:10%; "/>  &nbsp; &nbsp; &nbsp; &nbsp;
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </center> 
          
                   <!--------->            
              <div class="col-sm-12">
           <div class="panel-body"> 
           </form>
           
           Note : <p style="font-weight:normal;">On launch, &nbsp; <b style="font-size:16px;"><?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM staffcontacts  WHERE APPRAISALELIGIBILITY='Active' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   </b>
&nbsp; employees will be notified to fill and submit their appraisals </p>
  
	
<table class="table-responsive" style="margin-top:0px;"> 
                <table class="table" style="border:0px;">
                <tr>  
                 <th style="width:25%; text-align:left;font-size:12px;"> Pending appraisals</th>
                 
                 <th style="width:25%; text-align:left; font-size:12px;"> 
                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM staffcontacts  WHERE APPRAISALELIGIBILITY='Active' AND APPRAISALCOUNT = '0' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

                 </th> 
                  <th style="width:25%; text-align:left; font-size:12px;"> Submitted appraisals</th>
                 
                 <th style="width:25%; text-align:left; font-size:12px;"> 
                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM staffcontacts  WHERE APPRAISALELIGIBILITY='Active' AND APPRAISALCOUNT = '1' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

                 </th> 
			    </tr>             
                </table>
                	
  
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
                        <div class="modal" id="appraisall" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                             <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 20px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            Appraisals tracker</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
    <form class="form-horizontal" action="" method="POST" style="height:auto; font-weight:normal;">  
              
             <div class="table-responsive mailbox-messages"> 
               
             <table id="appraistk" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th style="font-size:10px;">EMPLOYEE NAME</th>
                  <th style="font-size:10px;">PF NUMBER</th>
                  <th style="font-size:10px;">APPRAISAL PERIOD</th>
                  <th style="font-size:10px;">STATUS</th> 
                   <th style="font-size:10px;">PROGRESS</th> 
                  <th style="font-size:10px;">DATE</th> 
                  <th style="font-size:10px;">DEADLINE FOR SUBMISSION</th>
                  <th style="font-size:10px;">ACTION</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th style="font-size:10px;">EMPLOYEE NAME</th>
                  <th style="font-size:10px;">PF NUMBER</th>
                  <th style="font-size:10px;">APPRAISAL PERIOD</th>
                  <th style="font-size:10px;">STATUS</th> 
                  <th style="font-size:10px;">PROGRESS</th> 
                  <th style="font-size:10px;">DATE</th> 
                  <th style="font-size:10px;">DEADLINE FOR SUBMISSION</th>
                  <th style="font-size:10px;">ACTION</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("../hrm_home/config_ahr.php");

             $result = mysqli_query($mysqli, "SELECT * FROM staffcontacts WHERE APPRAISALELIGIBILITY='Active' AND APPRAISALCOUNT = '0' GROUP BY id");

             while($res = mysqli_fetch_array($result)) {
             $dtsxTc = $res['id']."***".$res['STAFFAPPRAISALID'];

              echo "<tr>"; 
			
			  echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']." ".$res['OTHERNAME']." </td>";
			  echo "<td>".$res['PFNUMBER']."</td>"; 
			  echo "<td>".$res['APPRAISALMONTH']." ".$res['APPRAISALMONTHYEAR']."</td>";
			  echo "<td>".$res['APPRAISALSTATUS']."</td>";
			  echo "<td>".$res['APPRAISALPROGRESSLEVEL']."</td>";
			  echo "<td>".$res['PROGRESSDATE']."</td>"; 
			  echo "<td>".$res['APPRAISALSUBMISSIONDEADLINE']."</td>"; 
			  
			  echo "<td><a href=\"../hrm_home/appraisal_get.php?STAFFAPPRAISALID=$res[STAFFAPPRAISALID]\">View appraisal</a>  </td>";		 
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
                        <div class="modal" id="generateappz" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                           </h4>
                                        </div>
                                        <div class="modal-body">  
                                        
                                        
                <div class=""  id="appgenerator" >  </div>
                     <script>

               function appgenerator(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'appraisal_generator.php?q='+odno,
                            success : function(data){
                                     $('#appgenerator').html(data);
     								$("#newappoint").modal("show");
                                      }
                    });
                    }

               </script>  
               <form class="form-horizontal" action="" method="POST" style="height:auto; font-weight:normal;">  
     
             <table id="appraistk" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th style="font-size:10px;">EMPLOYEE NAME</th>
                  <th style="font-size:10px;">PF NUMBER</th> 
                  <th style="font-size:10px;">DEADLINE FOR SUBMISSION</th>
                  <th style="font-size:10px;">ACTION</th>
                 
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("config_ahr.php");

             $result = mysqli_query($mysqli, "SELECT * FROM staffcontacts WHERE APPRAISALELIGIBILITY='Active' 
			                                           AND APPRAISALCOUNT = '0' AND EMAIL2 = '$rm' AND APPRAISALPROGRESSLEVEL = 'Not started' GROUP BY id");

             while($res = mysqli_fetch_array($result)) {
             $dtsfucker = $res['id']."***".$res['Serial'];

              echo "<tr>"; 
			
			  echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']." ".$res['OTHERNAME']." </td>";
			  echo "<td>".$res['PFNUMBER']."</td>";  
			  echo "<td>".$res['APPRAISALSUBMISSIONDEADLINE']."</td>";
			    
			  echo "<td><a href=\"appraisal.php?Serial=$res[Serial]\">Run appraisal</a>  </td>";		 
	            }
               ?>
             </tbody>
             </table>
             
             
             
             
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </center> 
                           </form>
        
           <div class="col-sm-12">
           <div class="panel-body"> 
           <p style=" color:#000; text-align:center; font-size:11px;">
           Welcome to human resource module: you have <b style="color:blue; font-size:15px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM staffcontacts  WHERE APPRAISALELIGIBILITY='Active' 
                                   AND APPRAISALCOUNT = '0' AND EMAIL2 = '$rm' AND APPRAISALPROGRESSLEVEL = 'Not started' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </b> appraisal notification</p>
           
           </div>  </div>
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

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
$stddx ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stddx=$stddx. "<option> " . $row['Email'] ." </option>";   }
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
 <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/assets/ionicons.min.css">
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../admin/assets/notifier.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../admin/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../admin/datatable/css/buttons.dataTables.min.css">

  <script src="../admin/datatable/js/jquery-1.12.3.js"></script>
  <script src="../admin/datatable/js/jquery.dataTables.min.js"></script>
  <script src="../admin/datatable/js/bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.buttons.min.js"></script>
  <script src="../admin/datatable/js/buttons.flash.min.js"></script>
  <script src="../admin/datatable/js/jszip.min.js"></script>
  <script src="../admin/datatable/js/pdfmake.min.js"></script>
  <script src="../admin/datatable/js/vfs_fonts.js"></script>
  <script src="../admin/datatable/js/buttons.html5.min.js"></script>
  <script src="../admin/datatable/js/buttons.print.min.js"></script>
  
   
  
  
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
     $('#exampled').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#exdrug').DataTable( {
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
     $('#example6').DataTable( {
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
    <a href="sys_dashboard.php" class="logo">
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
            <li class="active"><a href="../client_management.php" class="" >Home<span class="sr-only">(current)</span></a></li> 
            <li><a href=<button class="" data-toggle="modal"  data-target="#notifx"></button>Drug requisition </span></a></li>
             
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
          <a href="drugs_mgr.php">
            <i class="fa fa-th"></i> <span style="color:#000;"> Dispensary dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green ">cmm</small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="inc_druglevels.php">
            <i class="fa fa-th"></i>  <span style="color:#000;"> Drug stock levels</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green "> cmm</small>
            </span>
          </a>
        </li>
         
          <li>
          <a href="drugs_mgr.php">
            <i class="fa fa-th"></i> <span style="color:#000;"> My store requisitions</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green "> cmm</small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="drugs_mgr.php">
            <i class="fa fa-th"></i> <span style="color:#000;">Drugs expiry center </span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green "> cmm</small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="drugs_mgr.php">
            <i class="fa fa-circle-o"></i> <span style="color:#000;"> Daily issuance by type</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green "> cmm</small>
            </span>
          </a>
        </li>
         
          <li>
          <a href="drugs_mgr.php">
            <i class="fa fa-folder"></i> <span style="color:#000;">Monthly issuance by type </span>
            <span class="pull-right-container">
              <small class="   ">   </small>
            </span>
          </a>
        </li>  
       
         
       
       
         <canvas id="canvas" width="400" height="400" style="height: 100%; width:100%;">
			</canvas> 
            
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#f8f3c033;">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
     <font style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 5px #000; color:#fff;"><center>Dispensary</center></font>
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
                 <div class="clearfix visible-sm-block"></div>  
                <div class="col-sm-8">
                
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5;">
          <a href=hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo" style="text-align:center;"></button>
          </i> &nbsp;&nbsp;&nbsp;&nbsp;Incoming orders <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#fff; text-align:center; font-weight:bold; font-size:20px;">
            <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
 $date = date("Y-m-d").' 00:00:00'; 
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM prescription  WHERE  TIMESTAMP >='$date' AND CHECKAVAILABILITY ='NO'  
			                                           GROUP BY NTIHCNO ")) {        
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
        
   <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5;">
          <a href=hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button></i>&nbsp;&nbsp;&nbsp;&nbsp; Orders dispensed <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#fff; text-align:center; font-weight:bold; font-size:20px;">
          <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
 $date = date("Y-m-d").' 00:00:00'; 
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM prescription  WHERE  TIMESTAMP >='$date' AND CHECKAVAILABILITY ='YES'  
			                                           GROUP BY NTIHCNO ")) {        
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
  
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5;">
          <a href=hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfs"></button></i>&nbsp;&nbsp;  Drugs expiry alerts <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#fff; text-align:center; font-weight:bold; font-size:20px;">
          0 
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
  
  
   <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5;">
          <a href=hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfs"></button></i>&nbsp;&nbsp;&nbsp;&nbsp;Low drug levels <i class=" "></i><p></p>
         <center> <p class="button 5" style="border: 6px solid #ecf0f5; width:50%; height:50%; color:#fff; text-align:center; font-weight:bold; font-size:20px;">
          0 
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
         </div>
        
        
         <div class="col-sm-4"> 
                
                       <div class="row text-center pad-top">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="div-square">
                           <a href="drugs_mgr.php">
                    <i class="fa fa-rocket fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> Today's tally tool</h4>
                      </a>
                      </div>
                        
                  </div>
                  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="div-square">
                           <a href="drugs_mgr.php"> 
  <i class="fa fa-clipboard fa-5x" style="color:#00a65a;"></i>
                      <h4 style="font-size:14px;"> Dispensing history </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="div-square">
                             <a href="drugs_mgr.php">
  <i class="fa fa-circle-o-notch fa-5x" style="color:#f56954;"></i>
                      <h4 style="font-size:14px;"> Expired drugs &nbsp;
                      <b> 0 </b></h4>
                      </a>
                      </div>
                     
      </div></div></div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin"> 
                <div class="col-sm-5"> 
                <div class="table-responsive mailbox-messages">  
            
             <div class="box box-primary" style="border:0px;">
               <a href="drugs_mgr.php" class="btn btn-primary btn-block margin-bottom" style="background-color:#FFF; color:#000;"  
               <b style="color:#000;;">Processed clients as of <b>today</b> &nbsp;<?php echo date('d-m-y'); ?></b></a>  </a> </div>
        
       
        
         <table id="exampled" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;"> 
         <thead>
        <tr>   
                     <th style=" width:20%;">DATE</th>
					 <th style=" width:16%;">NTIHC.NO</th>
                     <th style=" width:40%;">NAME</th>
                     <th style=" width:8%;">AGE</th> 
					 <th style=" width:8%;">SEX</th> 
                     <th style=" width:8%;">START</th>   
           </tr>
        </thead>
        <tfoot>
          <tr>
		      <th style=" width:20%;">DATE</th>
					 <th style=" width:16%;">NTIHC.NO</th>
                     <th style=" width:40%;">NAME</th>
                     <th style=" width:8%;">AGE</th> 
					 <th style=" width:8%;">SEX</th> 
                     <th style=" width:8%;">START</th>   
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function getregnvist(myid){
var dtsz = myid.split("***");
document.getElementById("myNTIHCNO").value=dtsz[0];
document.getElementById("myID").value=dtsz[1];  
document.getElementById("myAGE1").value=dtsz[2]; 
document.getElementById("myAGEGP").value=dtsz[3]; 
document.getElementById("myCLIENTNAME").value=dtsz[4]; 
document.getElementById("mySERVICE_EPISODE").value=dtsz[5];  
}
</script>    
          
       
<?php 
include_once("../updatecmgt/config.php"); 
 $date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['RID']."***".$res['NTIHCNO']."***".$res['AGE1']."***".$res['AGE_GROUP']
	."***".$res['CLIENTNAME']."***".$res['SERVICE_EPISODE'];
		echo "<tr>"; 
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>"; 
		echo "<td>".$res['AGE1']."</td>";
		echo "<td>".$res['SEX']."</td>";
		echo '<td>    
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dtsz.'" href="javascript:void(0)"  onclick="getregnvist(this.id)" data-toggle="tooltip" title="Post" 
		<span class=" glyphicon glyphicon-edit"> </span></a>  
		</td>';   	
	}
	   
    ?>
	</tbody>
  </table>  
           </div>
                </div>
                
             
         

      <div class="col-md-7">
          <div class="box box-primary" style="border:0px; text-align:left;">  

              

                  
                  <img src="../assets/img/logsbig.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:14px; background-color:#fff; font-family:lcd;"> <b>Dispense auto generated order</b> </p> </center> 
  
     <form class="form-horizontal" method="post" action="drugs_process.php" style="height:auto;">  
     
      <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
			     <th style="width:20%;border:1px solid #ECF0F5;">Prescription date </th>
				<th style="width:25%;border:1px solid #ECF0F5;"> <input type="date"  name="DATECREATED"  id="DATECREATED"  value="<?php echo date('Y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px;">  </th> 
                
                <th style="width:10%;border:0px;"> <input type="text"  name="TIMEOUT" id="CHECKIN"   readonly = "readonly" 
                style="text-align:center; background-color:#fff; width:100%;border:0px;">  </th>
                
                <th style="width:15%;border:1px solid #ECF0F5;">Client No. </th>
				<th style="width:30%;border:1px solid #ECF0F5;"> <input type="text" id="myID" name="NTIHCNO" required="required" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
               
        <input type="hidden" id="myNTIHCNO"  >
		<input type="hidden" name="AGE" id="myAGE1"> 
        <input type="hidden" id="myAGEGP" name="AGE_GROUP"> 
        <input type="hidden" id="myCLIENTNAME" name="CLIENTNAME"> 
        <input type="hidden" id="mySERVICE_EPISODE" name="SERVICE_EPISODE"> 
             
                   <table class="table table-bordered" id="mytable1" style="background-color: transparent; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:50%;"> DRUG </th>
	      <th style="width:10%;"> QTY  </th>
		  <th style="width:10%;"> TIMES  </th>
		  <th style="width:10%;"> PERIOD  </th>
          <th style="width:10%;"> TOTAL </th>  
          <th style="width:10%;"> BALANCE </th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>      
     <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
              <div id="res" ></div>
                    <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Prescription comment</th> 
				<th style="width:80%;border:0px;"> <textarea id="RECOMMENDEDDRUGS" name="RECOMMENDEDDRUGS"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </textarea>  </th>   
                 
              </tr>
			  </table> 
              
                <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Prescriped by</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="USERINITIAL" name="USERINITIAL"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                <th style="width:20%;border:0px;">Requesting unit</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="REQUESTINGUNIT" name="REQUESTINGUNIT"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
               
               <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Dispensed by</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="DISPENSEDBY" name="DISPENSEDBY" value="<?php echo $nameofuser; ?> " 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                <th style="width:20%;border:0px;">Date</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="DISPENSEDDATE" name="DISPENSEDDATE" value="<?php echo date('Y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
              
               <input type="hidden" id="CHECKAVAILABILITY" name="CHECKAVAILABILITY" value="YES">
               <input type="hidden" id="ENTRYSTATUS" name="ENTRYSTATUS" value="CAPTURED">
		
           <center> <input type="submit" name="button" id="button" value="Save"/></center>
             
                    </form> 
        
       
                    
             </div></div></div></div> 
              
               
    
 
               <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notifx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Generate requisition </h4>
                                        </div>
                                        <div class="modal-body">
 
        <form id="form1" class="form-horizontal" action="incomingdrugs_minprocess.php" method="POST" style="height:auto; font-weight:normal;">  
     
       <br>
        <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:20; text-align:left;border:0px;">Requisition date</th>
                <td style="width:30%;border:0px;"><input type="date"id="DATECREATED" name="DATECREATED"  value="<?php echo date('y-m-d'); ?>"      
				style="width:100%; text-align:center;background-color:#fff;height: 21px;"></td> 
                   
               
			  <th style="width:20%; text-align:left;border:0px;">Requesting unit</th>
                <td style="width:30%;border:0px;"><select name="REQUESTINGUNIT" id="REQUESTINGUNIT" required="required"
				style="width:100%; text-align:left;background-color:#fff;">
                         <option>DISPENSARY</option>
                         <option>LABORATORY</option> 
                         <option>FA</option> 
                         <option>SERVICE DELIVERY</option> 
                         <option>ADVOCACY AND RESEARCH</option> 
                         </select>
                </td>  
                </tr>             
            </table> 
                         
                <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr>     
			    <th style="width:20%; text-align:left;border:0px;">Order type</th>
                <td style="width:15%;border:0px;"> 
                <input type="radio" name="ORDERTYPE" id="ORDERTYPE" value="IN HOUSE"  checked>
                <label for="ORDERTYPE">IN HOUSE</label>  </td> 
                <td style="width:15%;border:0px;"><input name="ORDERTYPE" type="radio" id="ORDERTYPE" value="FACILITY" >
		        <label for="ORDERTYPE">FACILITY</label>  </td>
                <th style="width:50%; text-align:left;border:0px;"> </th>
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:-16px;"> 
            <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:20%; text-align:left;border:0px;">Requisition No.</th>
                <td style="width:30%;border:0px;"><input type="text"name="ORDERSERIALID" id="ORDERSERIALID" value="<?php echo uniqid();?>" readonly=""   
				style="width:100%; text-align:right;background-color:#fff;"></td> 
                 
               
			  <th style="width:20%; text-align:left;border:0px;">Facility name</th>
                <td style="width:30%;border:0px;"><input type="text" name="FACILITYNANE" id="FACILITYNANE" value="NTIHC" required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td>
                  
                  
			 </tr>             
            </table>
             <input type="hidden"id="REQUISTIONTYPE" name="REQUISTIONTYPE" value="STANDARD"  > 
            
            <input type="hidden"id="REQBY" name="REQBY" value=" <?php echo $desc; ?> "  >
            <input type="hidden"id="REQBYNAME" name="REQBYNAME" value=" <?php echo $nameofuser; ?> "> 
            <input type="hidden"id="REQBYDATE" name="REQBYDATE" value="<?php echo date('y-m-d'); ?>"> 
            
             <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:20; text-align:left;border:0px;">To be approved by</th>
                <td style="width:80%;border:0px;"><select id="CONFIRMERACCOUNT" name="CONFIRMERACCOUNT"  required="required"  
				style="width:100%; text-align:right;background-color:#fff;height: 21px;">
                  <option value="Undefined"> <option>
                  <?php   echo $stddx; ?> 
                  </select>  
                </td>   
             </td>  
             </tr>             
             </table>    
            
             <Center><input type="submit" name="button" id="button" value="Generate" />
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
             </Center> 
             
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;"> 
                                     </div>
                                   </div>
                                </div>
                             </div>
                           </div>
                         </div>
      

                </div> 
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
    <footer class="main-footerx">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

 
	<script type="text/javascript" src="../assets/js/gauge.js"></script> 
 
<script src="../assets/lib/moment/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<!-- Page script -->
  
</body>
</html>   

 <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#dnx"+num).val(data[2]);
  $("#bal").val(data[2]);
  $("#bal2").val(data[3]); 
 
}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "drugsearch.php",
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
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[6].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 } 

function  dostg(thisid){

     var val = thisid.split("_")[1];
	 var v1 = parseFloat(document.getElementById("pdx_"+val).value);
	 var v2 = parseFloat(document.getElementById("fqx_"+val).value);
	 var v3 = parseFloat(document.getElementById("tmx_"+val).value);

	 var v4 = v1*v2*v3;
	  document.getElementById("qtyx_"+val).value = v4;

}	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)"  name="dnx[]" id="dnx'+rowCount+'" autocomplete="off" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="fqx[]" id="fqx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';			 

	 var  s3cc = '<select onchange="dostg(this.id)"  name="tmx[]" id="tmx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;" >'+ 
                                        '<option>1</option>'+
                                        '<option>2</option>'+
                                        '<option>3</option>'+
										'<option>4</option>'+
                                        '</select>';
 		 
	 var  s6ff = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pdx[]" id="pdx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';

     var  s7gg = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="qtyx[]" id="qtyx'+rowCount+'" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
		 
       var  s9 = '<input type="numeric" name="bal[]" id="bal'+rowCount+'"readonly="readonly" '+
                 'style= " margin-left:0px; width:100%; background-color:#ecf0f5;text-align:center;" >';
		 
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
				                  '<td>'+s7gg+' </td>'+
								  '<td>'+s9+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId); 
  }

  function deleteRow16(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="dnx"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqx"+x;
          table.rows[x].cells[3].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[4].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[5].childNodes[0].id="qtyx"+x;
		  table.rows[x].cells[6].childNodes[0].id="bal"+x; 
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
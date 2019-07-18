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
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SUBPROGRAMME"+num).val(data[2]);
  $("#VOTE_HEADNO").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BALANCEREMAINING").val(data[5]);
  $("#FINANCIALYEAR").val(data[6]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../budget/budgetlinesearch.php",
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
	  "iDisplayLength": 6,
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
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM prescription  WHERE  TIMESTAMP >='$date' AND CHECKAVAILABILITY ='NO' GROUP BY NTIHCNO")) {        
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
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM prescription  WHERE  TIMESTAMP >='$date' AND CHECKAVAILABILITY ='YES' GROUP BY NTIHCNO")) {        
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
               <b style="color:#000;;">In-coming drug prescriptions </b></a>  </a> </div>

              
          <?php 
include_once("../php/configpatientmgtdb.php"); 

    $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM prescription WHERE TIMESTAMP >='$date' AND CHECKAVAILABILITY ='NO' GROUP BY NTIHCNO";

                     $result = $conn->query($sql);
                     $st ='<table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
                     <thead>
                     <tr>
                     <th>ID</th> 
					 <th>DATE</th>
                     <th>NTIHC-NO.</th>
					 <th>NAME</th>
					 <th>AGE</th> 
                     <th>ACTION</th>
                     </tr>
                     </thead>
                     <tbody ">';
                     $seenid = ""; $x=1;
                     while($row = $result->fetch_assoc()) {
                       if ($seenid==$row['NTIHCNO']) {
                        
                       }
                       else{
                         $seenid = $row['NTIHCNO'];
                     $st=$st."<tr>".
	                 "<td>" . ($x++) . "</td>". 
					 "<td>" . $row['DATECREATED'] . "</td>".
                     "<td>" . $row['NTIHCNO'] . "</td>".
					 "<td>" . $row['CLIENTNAME'] . "</td>".
					 "<td>" . $row['AGE'] . "</td>". 
					 
                     "<td>" . '<input type="button" style="width:100%; text-align:left;" id="'.$row['NTIHCNO'] .'______'.$row['DATECREATED'].'______'.$row['SERVICE_EPISODE'] 
					 .'______'.$row['RECOMMENDEDDRUGS'].'______'.$row['USERINITIAL'].'______'.$row['REQUESTINGUNIT']. '" value="Click"  onclick="getClient(this.id)">' . "</td>".
		             "</tr>";
                   }
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?> 
         
  <script>
function getClient(id){
var id1 = id.split('______');
$.ajax({
     url:"presc.php",
     method:"POST",
     data:{id:id1[0]},
     success:function(data){
	 var s = data.split("______");
          $('#prescribed').html(s[1]);
		  $('#AMOUNT').html(s[0]);
		  $("#DATECREATED").val(id1[1]);
		  $("#SERVICE_EPISODE").val(id1[2]);
		  $("#RECOMMENDEDDRUGS").val(id1[3]);
		  $("#USERINITIAL").val(id1[4]); 
		  $("#REQUESTINGUNIT").val(id1[5]);
     }
});
}
</script> 
                </form> 
                   
                 </div>
                </div>
                
             
         

      <div class="col-md-7">
          <div class="box box-primary" style="border:0px; text-align:left;">  

              

                  <!-- Info boxes -->
                  
                  <img src="../assets/img/logsbig.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>NTIHC DISPENSARY</b> </p> </center> 
  
     <form class="form-horizontal" method="post" action="update_dispenser.php" style="height:auto;">  
     
      <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
			     <th style="width:20%;border:1px solid #ECF0F5;">Prescription date </th>
				<th style="width:25%;border:1px solid #ECF0F5;"> <input type="text"  name="DATECREATED"  id="DATECREATED"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                <th style="width:10%;border:0px;"> <input type="text"  name="TIMEOUT" id="CHECKIN"   readonly = "readonly" 
                style="text-align:center; background-color:#fff; width:100%;border:0px;">  </th>
                
                <th style="width:15%;border:1px solid #ECF0F5;">Episode </th>
				<th style="width:30%;border:1px solid #ECF0F5;"> <input type="text" id="SERVICE_EPISODE" name="SERVICE_EPISODE" required="required" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
            
                           <div id="prescribed"> 
                           <table id="dataTable1"class="table table-bordered" style="background-color: transparent;">
                           <thead>
                           <tr>
          <th>  *  </th>
          <th style="width:50%;"> DRUG </th>
	      <th style="width:10%;"> QTY  </th>
		  <th style="width:10%;"> TIMES  </th>
		  <th style="width:10%;"> PERIOD  </th>
          <th style="width:10%;"> TOTAL </th>  
          <th style="width:10%;"> COST </th>
                              </tr>
                              </thead>
                              <tbody id="tablebody">
                                <tr id="1_rowdata" >
                                <td><input type="checkbox" required="required" checked="checked" /></td>
                                <td>
                                <select name="DRUGNAME" id="DRUGNAME" required="required"
                                  style= "width:100%; background-color:#fff;"/>
                                  </select>
                                </td> 
                                
                               <td><input type="numeric" name="FREQUENCY" id="FREQUENCY" required="required"
                               style= "width:100%; background-color:#fff; text-align:center;"/> 
                               </td>
                               
                                <td><input type="numeric" name="TIMES" id="TIMES" required="required"
                               style= "width:100%; background-color:#fff; text-align:center;"/> 
                               </td>
                               
                               <td><input type="numeric" name="PERIOD" id="PERIOD" required="required"
                               style= "width:100%; background-color:#fff; text-align:center;"/> 
                               </td>
                                
                               <td><input type="numeric" name="QTYPRESCRIBED" id="QTYPRESCRIBED" required="required"
                               style= "width:100%; background-color:#fff; text-align:center;"/> 
                               </td> 
                               <td><input type="numeric" name="UNITRATE" id="UNITRATE" required="required" 
                               style= ' width:100%; background-color:#fff;'/>

                            </td>
                              </tr>
                      </tbody>
                      </table>
                     
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
              
              
              <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">
                 <input type="radio" class="switch-input" name="DISPENSESTATUS" value="DEFAULT" id="DEFAULT" checked="">
			     <label for="DEFAULT" class="switch-label switch-label-off">EFFECTIVE</label>
                 
                </th> 
				<th style="width:30%;border:0px;"> 
                <input type="radio" class="switch-input" name="DISPENSESTATUS" value="ACTIVATE" id="ACTIVATE">
			    <label for="ACTIVATE" class="switch-label switch-label-on">NEEDS RECTIFICATION</label>
                </th>   
                  
				<th style="width:50%;border:0px;"> <textarea id="COMMENT" name="COMMENT" placeholder="Prescription error on rejection" 
				  style="width:100%; font-weight:normal; background-color:#fff; height:22px;"></textarea> </th>    
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
            <center>  
                <a href="client_dispensery.php" style="border: 1px solid #000; padding: 2px;border-radius: 3px; font-weight:bold; border-radius:5px;">
                Generate new order <span class="sr-only">(current)</a> &nbsp; &nbsp;
                
                <a href=<button class="" data-toggle="modal"  data-target="#notificationModal" 
                style="border: 1px solid #000; padding: 2px;border-radius: 3px; font-weight:bold; border-radius:5px;">
                </button>  Add new drug type<span class="sr-only">(current)</a>
                </span></a> 
               </center>
                    </form> 
       
                    
             </div></div></div></div> 
              
              
              
                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 "> 
   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 
 <img src="../assets/img/logsbig.PNG" width="100%" height="100%"> 
                <center> <p style="color:#000; font-weight:bold;font-size:12px;"> <b>NEW DRUG REGISTRATION FORM</b> </p> </center>
                 
           <form class="form-horizontal" action="new_drugprocessor.php" method="POST" style="height:auto; font-weight:normal;">  
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:3px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Item description</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="DRUGNAME" id="DRUGNAME"  required="required"
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   </tr>
  <tr>
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Category  </th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="CATEGORY"   id="CATEGORY" required="required"
    style="width:100%; text-align:left;background-color:#ecf0f5;">   </td>  
   </tr>
  <tr>
 </tbody>
 </table>
 
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Item classification</th>
   <th style="border:2px solid #ecf0f5;">Unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
   
	<td style="width:50%;border:2px solid #ecf0f5;">
    <input type="radio" name="BREAKDOWN" id="BREAKDOWN"  value="LAB SUPPLIES " >
    <label>LAB SUPPLIES</label>
    <input type="radio" name="BREAKDOWN" id="BREAKDOWN"  value="DRUGS " checked>
    <label>DRUGS</label>
    </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="text" name="UNITOFMEASURE " id="UNITOFMEASURE" 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
   <tr>
   
 </tbody>
 </table> 
 
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Stock taken</th>
   <th style="border:2px solid #ecf0f5;">Qty per unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="STOCKTAKEN" id="STOCKTAKEN"  value="0" 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
	
	<td style="width:50%;"><input type="numeric" name="QTYPERUOM " id="QTYPERUOM"  
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
   <tr>
   </tbody>
   </table>  
 
 
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Unit cost</th>
   <th style="border:2px solid #ecf0f5;">Minimum stock level</th>
   </tr>
   </thead>
   <tbody>
   
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="UNITCOST " id="UNITCOST"   
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="REORDERLEVEL " id="REORDERLEVEL"   
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table>  
 
  <input type="hidden" name="DISCONTINUE" id="DISCONTINUE" value="NO"  > 
          
	<table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Location</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%; border:2px solid #ecf0f5;"><input type="text" name="LOCATION" id="LOCATION"  
   style="width:100%; text-align:left;background-color:#ecf0f5;"> </td> 
   </tr>
  <tr>
 </tbody>
 </table> 
   
	<td style="width:50%;border:2px solid #ecf0f5;"> </td> 
							
  </tr>
  <tr>
 </tbody>
 </table> 
  
	
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">User initials</th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="LASTUPDATEDBY" id="LASTUPDATEDBY"  value="<?php echo $nameofuser; ?>  " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td>  
							
   </tr>
  <tr>
 </tbody>
 </table> 
  <Center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" /> &nbsp;
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
                            </div></div>
                    </div>
 
               <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notifx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Generate new drug requisition </h4>
                                        </div>
                                        <div class="modal-body">
 
        <form id="form1" class="form-horizontal" action="incomingdrugs_minprocess.php" method="POST" style="height:auto; font-weight:normal;">  
     
       <br>
        <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:20; text-align:left;border:0px;">Requisition date</th>
                <td style="width:30%;border:0px;"><input type="date"id="DATECREATED" name="DATECREATED"  value="<?php echo date('y-m-d'); ?>" required="required"     
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

          

<script>
var canvas = document.getElementById("canvas2");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script> 
    
  </div> 


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
<script src="../admin/admin/dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
	<script type="text/javascript" src="../assets/js/gauge.js"></script> 
</body>
</html> 
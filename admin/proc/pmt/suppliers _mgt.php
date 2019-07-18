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
	  "iDisplayLength": 15,
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
  
 <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#FRAMEWORKDETAILS"+num).val(data[2]);
  $("#FRAMEWORKID").val(data[2]);
  $("#ENTITYCODE").val(data[3]); 
 
}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "supplies/procuerementsearch.php",
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
            <li class="active"><a href="proc_pdu.php" class="" >Home<span class="sr-only">(current)</span></a></li> 
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
          <a href=../../hr_mgt/<button class="" data-toggle="modal"  data-target="#contactinfo"></button>
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
              <i class="fa fa-angle-left pull-right">Admin </i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../procurement.php"><i class="fa fa-circle-o"></i> </a></li>
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
     <font style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 5px #000; color:#fff;"><center>Suppliers List	</center></font>
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
    
             <div class="row text-center pad-top">
             <div class="col-sm-4">
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="div-square">
                         <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#addsup">
                    <i class="fa fa-rocket fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> Add new supplier list </h4>
                      </a>
                      </div> 
                  </div> 
              
              
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="div-square">
                         <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#fireworks">
                    <i class="fa fa-circle-o-notch fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> Details of procurement </h4>
                      </a>
                      </div> 
                  </div> 
              
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                      <div class="div-square">
                         <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#supdex">
                    <i class="fa fa-clipboard fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> Approved suppliers list </h4>
                      </a>
                      </div> 
                  </div> 
                  </div>
              </div> 
              </div></div>
              
                 <div class=""  id="explodexy" >  </div>
                     <script>

               function explodexy(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'supplies/get_sup_details.php?q='+odno,
                            success : function(data){
                                     $('#explodexy').html(data);
     								$("#xplosion").modal("show");
                                      }
                    });
                    }

               </script>   
              
                <table id="exords" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">  
                  <thead>
                  <tr>
                  <th>ID</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>FRAME WORK DETAILS</th> 
                  <th>ADDRESS</th> 
                  <th>TELEPHONE CONTACTS AND EMAILS</th>
                  <th>TAX STATUS/ TIN NO.</th> 
                  <th>STATUS</th>   
                  <th>ACTION</th>  
                  <th> </th>  
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>ID</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>FRAME WORK DETAILS</th> 
                  <th>ADDRESS</th> 
                  <th>TELEPHONE CONTACTS AND EMAILS</th>
                  <th>TAX STATUS/ TIN NO.</th> 
                  <th>STATUS</th>   
                  <th>ACTION</th>  
                  <th> </th>  
            </tr>
        </tfoot>
        <tbody>   
   
             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT *  FROM suppliers ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxccex = $res['SERVICEPROVIDER']."***".$res['id'];
							   
              echo "<tr>";  
			   echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
			  echo "<td>".$res['FRAMEWORKDETAILS']."</td>"; 
			  echo "<td>".$res['PHYSICALADDRESS']." &nbsp; ".$res['PHYSICALLOCATION']." &nbsp;".$res['BOXNUMBER']." &nbsp;".$res['COUNTRYOFOPERATION']."</td>";   
			  echo "<td> <b>Contact person:</b> &nbsp;".$res['CONTACTPERSON']." <b>Tel:</b> &nbsp;".$res['TELEPONENO']." <b>Mobile:</b> &nbsp;".$res['MOBILENO']
			              ." <b>Email:</b> &nbsp;".$res['ENTITYEMAIL']." &nbsp;".$res['CONTACTPERSONEMAIL']."</td>";  
			  echo "<td> ".$res['TAXSTATUS']." <b>Tin No:</b> &nbsp;".$res['TINNO']."</td>";  
			   
			  echo "<td>".$res['STATUS']."</td>"; 
			  echo '<td>  &nbsp;&nbsp; &nbsp;&nbsp; 
			   <a id="02__'.$dtsxccex.'" href="javascript:void(0)" onclick="explodexy(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-edit"> </span></a> 
              </td>';
			  
			  echo "<td> <a href=\"supplies/suppliers_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	            } 
               ?>
             </tbody>
             </table> 
                   
                     
                     
                      <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="contactinfo" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                              <p style="text-align:center;"> Please confirm your password to switch user mode ==> admin mode </p> 
                    
                      <form role="form"  action="../../../authenticate.php" method="POST" style="font-size:17px;";>
            
                      <input  type="password" class="form-control" style="height:25px;"  placeholder="Password" type="password" name="pwd" required=""  value=""> 

                      <input type="hidden" class="form-control"  style="height:25px;"  placeholder="Username"  name="username" type="text" value="<?php  echo $rm; ?>" 
                      readonly="readonly">  
                     <br>
                      <center> <input type="submit" class="btn btn-success" value="Log In" >
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </center> 
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
                        <div class="modal" id="procreqnn" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 20px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            </h4>
                                        </div>
                                        <div class="modal-body"> 
               
                
                <div class=""  id="proc_requisition" >  </div>
                     <script>

               function getprocform(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'proc_requisition.php?q='+odno,
                            success : function(data){
                                     $('#proc_requisition').html(data);
     								$("#procreqnn").modal("show");
                                      }
                    });
                    }

               </script>
              
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
                        <div class="modal" id="outxfuddl" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 20px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            </h4>
                                        </div>
                                        <div class="modal-body"> 
               
                     
                    <div class=""  id="getgen" >  </div>
                <script>

          function getgen(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'proc_requisition.php?q='+odno,
                       success : function(data){
                                $('#getgen').html(data);
								$("#outxfuddl").modal("show");
                                 }
               });
               }

          </script> 
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
                        <div class="modal" id="supdex" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" > 
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">  
            <form class="form-horizontal" style="height:auto; background-color:#fff;">  
            
    
           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:15px; text-align:center;"> APPROVED SUPPLIES LIST</p>
 <table id="exsupdex" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>ID</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>FRAME WORK DETAILS</th> 
                  <th>ADDRESS</th> 
                  <th>TELEPHONE CONTACTS AND EMAILS</th>
                  <th>TAX STATUS/ TIN NO.</th>   
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>ID</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>FRAME WORK DETAILS</th> 
                  <th>ADDRESS</th> 
                  <th>TELEPHONE CONTACTS AND EMAILS</th>
                  <th>TAX STATUS/ TIN NO.</th>   
            </tr>
        </tfoot>
        <tbody>   
   
             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM suppliers WHERE STATUS = 'SHORTLISTED' ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxccex = $res['SERVICEPROVIDER']."***".$res['id'];
							   
              echo "<tr>";  
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
			  echo "<td>".$res['FRAMEWORKDETAILS']."</td>"; 
			  echo "<td>".$res['PHYSICALADDRESS']." &nbsp; ".$res['PHYSICALLOCATION']." &nbsp;".$res['BOXNUMBER']." &nbsp;".$res['COUNTRYOFOPERATION']."</td>";   
			  echo "<td> <b>Contact person:</b> &nbsp;".$res['CONTACTPERSON']." <b>Tel:</b> &nbsp;".$res['TELEPONENO']." <b>Mobile:</b> &nbsp;".$res['MOBILENO']
			              ." <b>Email:</b> &nbsp;".$res['ENTITYEMAIL']." &nbsp;".$res['CONTACTPERSONEMAIL']."</td>";  
			  echo "<td> ".$res['TAXSTATUS']." <b>Tin No:</b> &nbsp;".$res['TINNO']."</td>";  
	            } 
               ?>
             </tbody>
             </table>
           <div class="col-sm-12">
           <div class="panel-body"> 
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#000;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                            
                            
                            <div class="col-sm-12">
                     <div class="modal" id="addsup" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
  
       <img src="../../../assets/img/logs.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>SUPPLIER INPUT FORM</b> </p> </center> 
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>(For new supplier and amending details)</b> </p> </center> 
 
		 <form class="form-horizontal" action="supplies/supplier_process.php" method="POST" style="height:auto; font-weight:normal;">    
		   
           <label>GENERAL</label>
           
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		    <thead> 
		    <tr>   
			    <th style="width:20%;border:0px;">Company name </th>
				<th style="width:80%;border:0px;"> <input type="text"  id="SERVICEPROVIDER" name="SERVICEPROVIDER"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>   
              </tr>
			  </table> 
              
                <input type="hidden"  id="DATEREGISTERED" name="DATEREGISTERED" >  
                  
                <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>  
                <th style="width:20%;border:0px;">Trading As: </th>
				<th style="width:80%;border:0px;"> <select id="TYPE" name="TYPE"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  
				        <option>  </option>
                        <option>COMPANY</option>
                        <option>INDIVIDUAL</option> 
                        </select></th>   
                 
              </tr>
			  </table> 
               
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>
			    <th style="width:20%;border:0px;">Address </th>
				<th style="width:30%;border:0px;"> <input type="text"  id="PHYSICALADDRESS" name="PHYSICALADDRESS"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                <th style="width:20%;border:0px;"> &nbsp;Post code</th>
				<th style="width:30%;border:0px;"> <input type="text"  id="BOXNUMBER" name="BOXNUMBER"   
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                </tr>
			  </table> 
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>
                <th style="width:20%;border:0px;">Country  </th>
				<th style="width:80%;border:0px;"> <input type="text" id="COUNTRYOFOPERATION" name="COUNTRYOFOPERATION" value="Uganda"  
			    style="width:100%; font-weight:normal; background-color:#fff;">   </th>
                  </tr>
			  </table> 
                  
                <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>   
                   
			    <th style="width:20%;border:0px;">Contact name(s) </th>
				<th style="width:80%;border:0px;"> <input type="text"  id="CONTACTPERSON" name="CONTACTPERSON"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                  </tr>
			  </table>
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>  
                
                 <th style="width:20%;border:0px;">Telephone 1 : </th>
				<th style="width:30%;border:0px;"> <input type="text" id="TELEPONENO" name="TELEPONENO"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
                 <th style="width:20%;border:0px;">&nbsp;Telephone 2 :</th>
				<th style="width:30%;border:0px;"> <input type="text"  id="MOBILENO" name="MOBILENO"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
                 
              </tr>
			  </table> 
              
              
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>   
                 <th style="width:20%;border:0px;">E-mail </th>
				<th style="width:80%;border:0px;"> <input type="text" id="CONTACTPERSONEMAIL" name="CONTACTPERSONEMAIL" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
                
                
                 
                <input type="hidden"  id="CONTACTPERSONEMAIL" name="CONTACTPERSONEMAIL" > 
                 
              </tr>
			  </table>  
                  
                  
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>  
                
                 <th style="width:20%;border:0px;">Postal address:
                 &nbsp;(If different from above) </th>
				<th style="width:30%;border:0px;"> <input type="text"  style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
                 <th style="width:20%;border:0px;">&nbsp; Post code</th>
				<th style="width:30%;border:0px;"> <input type="text" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
                 
              </tr>
			  </table> 
              
              
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>   
                 <th style="width:20%;border:0px;">VAT Reg No: </th>
				<th style="width:30%;border:0px;"> <input type="text" id="TINNO" name="TINNO"   
                 style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
                 <th style="width:20%;border:0px;">&nbsp;Company Reg No:</th>
				<th style="width:30%;border:0px;"> <input type="text" id="COMPANYREGNO" name="COMPANYREGNO" 
                style="width:100%; font-weight:normal; background-color:#fff;">  </th>   
              </tr>
			  </table> 
              
              <BR>
              <label style="font-size:11px;">BANK DETAILS</label>
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>   
                 <th style="width:20%;border:0px;">Bank name </th>
				<th style="width:80%;border:0px;"> <input type="text" id="BANKNAME" name="BANKNAME" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
              
                <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>   
                 <th style="width:20%;border:0px;">Bank address </th>
				<th style="width:30%;border:0px;"> <input type="text" id="BANKADDRESS" name="BANKADDRESS" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>  
                
                <th style="width:20%;border:0px;">&nbsp; Post code </th>
				<th style="width:30%;border:0px;"> <input type="text" id="BANKPOSTCODE" name="BANKPOSTCODE" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>  
                </tr>
			    </table>
                
                  <BR>
              <label style="font-size:11px;">OTHER DEPT</label>
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>   
                <th style="width:20%;border:0px;">Requested by </th>
				<th style="width:30%;border:0px;"> <input type="text" id="REQUESTEDBY" name="REQUESTEDBY" 
				  style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                
                
                <th style="width:20%;border:0px;">&nbsp; Date </th>
				<th style="width:30%;border:0px;"> <input type="date" id="REQUESTDATE" name="REQUESTDATE" 
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th>  
              </tr>
			  </table> 
              
                <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>   
                 <th style="width:20%;border:0px;">Purpose of Account</th>
				<th style="width:80%;border:0px;"> <input type="text" id="PURPOSEOFACCOUNT" name="PURPOSEOFACCOUNT" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                </tr>
			    </table>
                
                
                 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>   
                  <th style="width:20%;border:0px;">Authorised by </th>
				<th style="width:30%;border:0px;"> <input type="text" id="AUTHORISEDBY" name="AUTHORISEDBY" 
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th> 
                
                <th style="width:20%;border:0px;">&nbsp; Date </th>
				<th style="width:30%;border:0px;"> <input type="date" id="AUTHORISEDDATE" name="AUTHORISEDDATE" 
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th>  
              </tr>
			  </table> 
              
              </tr>
			  </table> 
              
              
              <BR>
               <input type="hidden" id="PHYSICALLOCATION" name="PHYSICALLOCATION" > 
              
              
			    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>
                <th style="width:20%;border:0px;">Tax status</th>
				<th style="width:80%;border:0px;"> <select id="TAXSTATUS" name="TAXSTATUS"   
				 style="width:100%; font-weight:normal; background-color:#fff;"> 
                <option></option>
                <option>INCLUSIVE</option>
                <option>EXEMPTED</option>
                 </th> 
              </tr>
			  </table> 
                 <BR>
			    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr> 
			    <th style="width:20%;border:0px;">Framework details</th>
				<th style="width:80%;border:0px;"> <input type="text" id="FRAMEWORKDETAILS" onKeyUp="domee(this)"  name="FRAMEWORKDETAILS"  autocomplete="off" 
				style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
              </tr>
			  </table>
                    <div id="res" ></div>
               
			    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%">
		        <thead> 
		        <tr>
                <th style="width:20%;border:0px;">Framework No. </th>
				<th style="width:30%;border:0px;"> <input type="text" id="FRAMEWORKID" name="FRAMEWORKID"   
				 style="width:100%; font-weight:normal; background-color:#ecf0f5; text-align:center;">   </th>   
                 
                  <input type="hidden" id="ENTITYCODE" name="ENTITYCODE" value="NTIHC"  > 
                 
                 <th style="width:20%;border:0px;"> &nbsp;Period </th>
				 <th style="width:30%;border:0px;"> <input type="text" id="FRAMEWORKPERIOD" name="FRAMEWORKPERIOD" 
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 </tr>
			     </table> 
                <BR>
               <center><input type="submit" name="button" id="button" value="Save " >
               <button type="button" data-dismiss="modal">Close</button></center>
            <div class="col-sm-12">
           <div class="panel-body"> 
            
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#FFF; color:#000;">
                                           <center> </center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                            
                          <div class="col-sm-12">
                     <div class="modal" id="fireworks" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">  
 
		 <form class="form-horizontal" action="supplies/pdframe_process.php" method="POST" style="height:auto; font-weight:normal;">    
		    
               <table class="table-responsive" >
            <table class="table" style="border:0px;">
              <tr>  
                <th style="width:10%;border:2px solid #a9abae;">Procurement details</th>
				<th style="width:80%;border:2px solid #a9abae;"> <input type="text" id="FRAMEWORKDETAILS" name="FRAMEWORKDETAILS"  required="required" 
				 style="width:100%; font-weight:normal; background-color:#ecf0f5;">   </th>   
                  <input type="hidden" id="CODE" name="CODE" value="NTIHC" >
				<th style="width:10%;border:2px solid #a9abae;">   <center><input type="submit" name="button" id="button" value="Add " >  </th>    
              
              </tr>
			  </table>   
              
              
               
                <table id="frame" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%; margin-top:-10px;"> 
                  <thead>
                  <tr> 
                     <th style="width:5%;">ID</th>
                     <th style="width:10%;">CODE</th> 
                     <th style="width:85%;">PROCUREMENT DETAILS</th> 
                      
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM frameworkdetails ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $sdtsrr = $res['id']."***".$res['FRAMEWORKDETAILS'];
              echo "<tr>"; 
			  echo "<td>".$res['id']."</td>";
              echo "<td>".$res['CODE']."</td>";  
			  echo "<td>".$res['FRAMEWORKDETAILS']."</td>";  
             }
              ?>
             </tbody>
             </table>	
             
            <div class="col-sm-12">
           <div class="panel-body"> 
           </form>
            
           </div>
            
                                        </div>
                                        <div class="modal-footer" style="background-color:#FFF; color:#000;">
                                           <center>  <button type="button" data-dismiss="modal">Close</button></center></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>  
                            
                            
                            
                            
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

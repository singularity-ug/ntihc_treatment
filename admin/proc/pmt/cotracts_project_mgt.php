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
             <li class="active"><a href=<button class="small-box-footer" data-toggle="modal"  data-target="#contx">Contract details<span class="sr-only">(current)</span></a></li> 
              
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
     <font style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 5px #000; color:#fff;"><center>Contracts Management	</center></font>
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
               <a href="cotracts_project_mgt.php" class="btn btn-primary btn-block margin-bottom" 
               style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:#000;;">Contracts extension tracker by remind date</b></a>  </a> </div>

  

<table class="table table-table table-tabled" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th>S/NO.</th>
            <th> SERVICE PROVIDER </th>
			<th> CONTRACT DETAILS </th>
			<th> STRAT DATE </th>
			<th> REMIND DATE</th>
            <th> END DATE </th>
			<th> REM(YRS) </th> <th> REM(M) </th><th>REM(D) </th>
			<th width="120" style="text-align:center;"> ACTION REQUIRED</th>
		</tr>
	</thead>
	<tbody>

			<?php
				include('connect/connectfuka.php');
				$result = $db->prepare("SELECT id,SERVICEPROVIDER, CONTRACT, STARTDATE, REMINDDATE, ENDDATE,  
	TIMESTAMPDIFF( YEAR, ENDDATE, now() ) as year
    , TIMESTAMPDIFF( MONTH, ENDDATE, now() ) % 12 as month
    , FLOOR( TIMESTAMPDIFF( DAY, ENDDATE, now() ) % 30.4375 ) as day
	                                           FROM contracts
											   WHERE REMINDDATE < CURDATE() + 1 AND STATUS = 'RUNNING' ORDER BY id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
            <td><?php echo $row['id']; ?></td>
			<td><?php echo $row['SERVICEPROVIDER']; ?></td>
			<td><?php echo $row['CONTRACT']; ?></td>
			<td><?php echo $row['STARTDATE']; ?></td>
			<td> <?php echo $row['REMINDDATE']; ?></td>
            <td> <?php echo $row['ENDDATE']; ?></td>
            <td> <b style="color:red;"> <?php echo $row['year']; ?></b> Years</td>
            <td> <b style="color:red;"> <?php echo $row['month']; ?> </b> Months</td>
			<td> <b style="color:red;"> <?php echo $row['day']; ?> </b> Days</td>
			<td><a rel="facebox" href="#?id=<?php echo $row['id']; ?>">
            <button class="button 5" style="width:100%; font-size:12px; border-radius:0px; color:#fff;"><i class="icon-edit" ></i> Run Extension </button></a> </td>
			</tr>
			<?php
				}
			?>

	</tbody>
</table>

  </div></div></div> </div> </div>
             
              <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
              
                <div class="table-responsive mailbox-messages"> 
             <div class="col-sm-12"> 
             
               <a href="cotracts_project_mgt.php" class="btn btn-primary btn-block margin-bottom" 
                style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:green;;">Add </b>  &nbsp;|| <b style="color:#yellow;;">Update</b>
               &nbsp;==> Contracts </b></a>  </a> </div>

                 </div> 
                

                <table id="exords" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                   <th>ACTION </th>
                   <th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>STATUS</th> 
                  <th>TRUNCATE</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                   <th>ACTION </th><th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>STATUS</th>
                 
                  <th>TRUNCATE</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM contracts ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxTc = $res['SERVICEPROVIDER']."***".$res['id'];

              echo "<tr>";
               echo '<td> 
			   &nbsp;
			   <a id="122__'.$dtsxTc.'" href="javascript:void(0)" onclick="newcont(this.id)" data-toggle="tooltip" title="Add new"
               <span class="glyphicon glyphicon-plus"> </span></a>
			   &nbsp;
			   <a id="13__'.$dtsxTc.'" href="javascript:void(0)" onclick="updateconts(this.id)" data-toggle="tooltip" title="Update"
               <span class="glyphicon glyphicon-new-window"> </span></a>
               </td>';
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>";
			  echo "<td>".$res['CONTRACT']."</td>";
			  echo "<td>".$res['CONTRACTVALUE']."</td>";
			  echo "<td>".$res['PAYMENTSHEDULE']."</td>";
			  echo "<td>".$res['STATUS']."</td>";
			  
			  echo "<td> <a href=\"contracts/cont_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
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
                     
            
            
                <div class="col-sm-12">
                     <div class="modal" id="contracted" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  Add new contract</h4>
                                        </div>
                                        <div class="modal-body">

  <div class=""  id="newcont" >  </div>
                <script> 
          function newcont(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'contracts/newcontract.php?q='+odno,
                       success : function(data){
                                $('#newcont').html(data);
								$("#contracted").modal("show");
                                 }
               });
               } 
          </script>


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

 
 
 
 
 
                <div class="col-sm-12">
                     <div class="modal" id="xplodex" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  Update projects / contract details</h4>
                                        </div>
                                        <div class="modal-body">
  <div class=""  id="updateconts" >  </div>
                     <script>

               function updateconts(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'contracts/get_contract_details.php?q='+odno,
                            success : function(data){
                                     $('#updateconts').html(data);
     								$("#xplodex").modal("show");
                                      }
                    });
                    }

               </script>



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

 
 
 
 
 
 
 
 
 
                          <div class="col-sm-12">
                     <div class="modal" id="contracted" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  Add new contract</h4>
                                        </div>
                                        <div class="modal-body">

  <div class=""  id="newcont" >  </div>
                <script> 
          function newcont(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'contracts/newcontract.php?q='+odno,
                       success : function(data){
                                $('#newcont').html(data);
								$("#contracted").modal("show");
                                 }
               });
               } 
          </script>


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

 
                            
                            
                            
                 <div class="col-sm-12">
                     <div class="modal" id="contx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">

		                  <table id="exconts" class="table table-table table-tabled" style="font-weight:normal; font-size:8px; width:100%;border: 2px solid #ecf0f5;">
                  <thead>
                  <tr>
                  <th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>TENURE</th>
                  <th>STARTDATE</th>
                  <th>ENDDATE</th>
                  <th>REMAINING PERIOD</th>
                  <th>EXTENSION (END DATE)</th>
                  <th>RESPONSIBILITY CENTER</th>
                  <th>ACCOUNTABLE</th>
                  <th>CONSULTED</th>
                  <th>CONTRACT MANAGER</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                   <th>S/NO</th>
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th>
                  <th>CONTRACT VALUE</th>
                  <th>PAYMENT SHEDULE</th>
                  <th>TENURE</th>
                  <th>STARTDATE</th>
                  <th>ENDDATE</th>
                  <th>REMAINING PERIOD</th>
                  <th>EXTENSION (END DATE)</th>
                  <th>RESPONSIBILITY CENTER</th>
                  <th>ACCOUNTABLE</th>
                  <th>CONSULTED</th>
                  <th>CONTRACT MANAGER</th>
                 </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT id, SERVICEPROVIDER, CONTRACT, CONTRACTVALUE, PAYMENTSHEDULE, TENURE, EXTENSIONENDDATE,
			                                         RESPONSIBILITYCENTER, ACCOUNTABLE, CONSULTED, INFORMED, CONTRACTMANAGER, STARTDATE, ENDDATE,
	  TIMESTAMPDIFF( YEAR, ENDDATE, now() ) as year
    , TIMESTAMPDIFF( MONTH, ENDDATE, now() ) % 12 as month
    , FLOOR( TIMESTAMPDIFF( DAY, ENDDATE, now() ) % 30.4375 ) as day
													             FROM contracts ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxT = $res['SERVICEPROVIDER']."***".$res['id'];

              echo "<tr>";
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>";
			  echo "<td>".$res['CONTRACT']."</td>";
			  echo "<td>".$res['CONTRACTVALUE']."</td>";
			  echo "<td>".$res['PAYMENTSHEDULE']."</td>";
			  echo "<td>".$res['TENURE']."</td>";
			  echo "<td>".$res['STARTDATE']."</td>";
			  echo "<td>".$res['ENDDATE']."</td>";
			  echo "<td>".$res['year']." &nbsp; Yrs &nbsp;".$res['month']." &nbsp; Months &nbsp;".$res['day']." &nbsp; Days</td>";
			  echo "<td>".$res['EXTENSIONENDDATE']."</td>";
			  echo "<td>".$res['RESPONSIBILITYCENTER']."</td>";
			  echo "<td>".$res['ACCOUNTABLE']."</td>";
			  echo "<td>".$res['CONSULTED']."</td>";
			  echo "<td>".$res['CONTRACTMANAGER']."</td>";
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
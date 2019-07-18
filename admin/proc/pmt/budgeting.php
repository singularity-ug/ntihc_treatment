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
     $('#exsuppex').DataTable( {
	  "iDisplayLength": 10,
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
            <li class="active"><a href="proc_pdu.php" class="" >Home<span class="sr-only">(current)</span></a></li>
             <li class="active"><a href="running_plan.php" class="" >View running plan<span class="sr-only">(current)</span></a></li>  
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
         <a href="budgeting.php">
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
     <font style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 5px #000; color:#fff;"><center>Procurement planning	</center></font>
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
               <a href="budgeting.php" class="btn btn-primary btn-block margin-bottom" 
               style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:#000;;">Add new procurement plan details</b></a>  </a> </div>

            
 <form id="form1" class="form-horizontal" action="proc_processprocplan.php" method="POST" style="height:auto; font-weight:normal;">
 
           
				<table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
   <th>OBJECTIVE</th>
   <th style="text-align:center;">CODE</th>
   <th style="text-align:center;">ITEM DESCRIPTION</th>
   <th style="text-align:center;">FINANCIAL PERIOD</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:20%;"><input type="text" name="OBJECTIVE" id="OBJECTIVE"   required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:20%;"><input type="text" name="CODE" id="CODE"   required="required"  
                style="width:100%; text-align:left;background-color:#fff;"></td> 
                
   <td style="width:35%;"><input type="text" name="ITEMDESCRIPTION" id="ITEMDESCRIPTION"   required="required" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:25%;"> <select name="FINANCIALPERIOD" id="FINANCIALPERIOD"  required="required"  
                style="width:100%; text-align:left;background-color:#fff;">
                <option></option>
                <option>FY/2017-2018</option>
                <option>FY/2018-2019</option>
                <option>FY/2019-2020</option>
                </select></td> 
                
                 
   </tr>
  <tr>
 </tbody>
 </table>
      <input type="hidden" name="DATECREATED" id="DATECREATED" value="">    
              
    <table class="table table-table-bordered" id="mytable1" style="background-color: transparent; margin-top:-15px; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:45%;"> DETAILS </th>
	      <th style="width:10%;"> 1ST QUARTER  </th>
		  <th style="width:10%;"> 2ND QUARTER  </th>
		  <th style="width:10%;"> 3RD QUARTER  </th>
          <th style="width:10%;"> 4TH QUARTER </th>  
          <th style="width:15%;"> AMOUNT </th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>      
     <input type="button" onClick="addRow16('mytable1')" value="Add details" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
             
  <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:85%; text-align:right; border:0px;"> TOTAL</th>
                <td style="width:15%; text-align:right; border:0px;"> 
                <input type="text" name="CODEDAMOUNT" id="CODEDAMOUNT"    
                style="width:100%; text-align:left;background-color:#ecf0f5;">
    </td>  
			  
			 </tr>             
            </table>

            <input type="hidden" name="BUDGETSTATUS" id="BUDGETSTATUS" value="RUNNING" >    
            
            <center> <input type="submit" name="button" id="button" value="Save"/>
            </center>
         </form>
         

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
             
               <a href="budgeting.php" class="btn btn-primary btn-block margin-bottom" 
                style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:green;;">Procurement plan records</b>  </a> </div>

                 </div> 
                

                <table id="exords" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                   </script>     
               
                   <div class=""  id="gameofthrones" >  </div>
               <script> 
              function gameofthrones(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'proc_procplan_get.php?q='+odno,
                            success : function(data){
                                     $('#gameofthrones').html(data);
     								$("#fucky").modal("show");
                                      }
                    });
                    } 
               </script> 
			             
                   <table id="exsuppex" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM DESCRIPTION</th>
                <th>FINANCIAL PERIOD</th>
                <th>PROCUREMENT DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>AMOUNT</th> 
                <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM.DESCRIPTION</th>
                <th>FINANCIAL.PERIOD</th>
                <th>PROCUREMENT.DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>AMOUNT</th> 
                <th>ACTION</th>
            </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("../configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procplanning ORDER BY OBJECTIVE DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsvv = $res['ITEMDESCRIPTION']."***".$res['id']."***".$res['FINANCIALPERIOD'];
              echo "<tr>";
			   echo "<td>".$res['id']."</td>";
               echo "<td>".$res['OBJECTIVE']."</td>";
               echo "<td>".$res['CODE']."</td>"; 
			   echo "<td>".$res['ITEMDESCRIPTION']."</td>"; 
			   echo "<td>".$res['FINANCIALPERIOD']."</td>"; 
			   echo "<td>".$res['PLANDETAILS']."</td>";
               echo "<td>".$res['FIRSTQTR']."</td>";
               echo "<td>".$res['SECONDQTR']."</td>"; 
			   echo "<td>".$res['THIRDQTR']."</td>"; 
			   echo "<td>".$res['FOURTHQTR']."</td>"; 
			   echo "<td>".$res['BUDGETAMOUNT']."</td>";  
               echo '<td> 
			  &nbsp;&nbsp;&nbsp;
			  <a id="322__'.$dtsvv.'" href="javascript:void(0)" onclick="gameofthrones(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-check"> </span></a> 
              </td>'; 
             }
              ?>
             </tbody>
             </table>   
           
                   
                     
                     
                    
            
            
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
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
  
 <script type="text/javascript" src="../../ ../assets/js/gauge.js"></script>
    <script>
  
 
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[6].childNodes[0].value);
		   }
		   document.getElementById("CODEDAMOUNT").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';			 

	 var  s3cc = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 
	 var  ssx = '<input type="numeric" name="fqtr[]" id="fqtr'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
			 

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
								  '<td>'+ssx+' </td>'+
				                  '<td>'+s7gg+' </td>';
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
		  table.rows[x].cells[5].childNodes[0].id="fqtr"+x;
		  table.rows[x].cells[6].childNodes[0].id="qtyx"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
    
</body>
</html>  

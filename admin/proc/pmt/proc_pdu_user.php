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

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
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
     $('#example1').DataTable( {
	  "iDisplayLength":3,
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
	  "iDisplayLength": 3,
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
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
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
     $('#exsuppex').DataTable( {
	  "iDisplayLength": 8,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
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
     $('#excontract').DataTable( {
	  "iDisplayLength": 15,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
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
     $('#exconts').DataTable( {
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
     $('#example7').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:'  '
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
     $('#exords').DataTable( {
	  "iDisplayLength": 20,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:'  '
		}
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
		 title:' APPROVED SUPPLIES LIST '
		},
		{extend :'pdf',
		 title:' APPROVED SUPPLIES LIST '
		},
		{extend :'print',
		 title:' APPROVED SUPPLIES LIST '
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
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
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

          <div class="box box-solid" style="border: 0px;">
            <div class="box-header with-border">
            
            
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary" style="border: 0px;">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                     In-coming approved procurement orders
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body"> 
          <div class="" style="margin-left:-19px;">
              <table id="example4" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>DATE</th>
                     <th>ORDER.NO.</th> 
                     <th>ACTION</th>
			         <th>PRINT</th>
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED'  
                                              AND  AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'WAITING'
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['REQUISITIONID']."***".$res['PROGRAMME']."***".$res['VOTE_HEADNO']."***".$res['SUBPROGRAMME']."***".$res['ITEM']
             ."***".$res['BALANCEREMAINING']."***".$res['JOBNUMBER']."***".$res['CORCOMMENT'];
              echo "<tr>";
              echo "<td>".$res['CORDATE']."</td>";
               echo "<td>".$res['JOBNUMBER']."</td>"; 
              echo '<td> 
              <a id="2__'.$dts.'" href="javascript:void(0)" onclick="getprocform(this.id)" data-toggle="tooltip" title="View requisition"
              <span class="glyphicon glyphicon-envelope"> </span></a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a id="3__'.$dts.'" href="javascript:void(0)" onclick="getdetailsf(this.id)" data-toggle="tooltip" title="Allocate an order"
              <span class="glyphicon glyphicon-th-list"> </span></a>
              </td>';
			  echo "<td><a href=\"print_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">print</a>    </td>";
             }
              ?>
             </tbody>
             </table>
             
			 <div class=""  id="getdetailsf" >  </div>
                <script>

          function getdetailsf(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_pduoderallocation.php?q='+odno,
                       success : function(data){
                                $('#getdetailsf').html(data);
								$("#outx").modal("show");
                                 }
               });
               }

          </script>  
                      
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        My allocations | forwarded orders
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    
                  <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                     <tr>
                     <th>DATE</th>
                     <th>ORDER NO.</th> 
                     <th>ACTION</th>
			         <th>PRINT</th>
                  </tr>
                  </tfoot> 
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND OFFICERACCOUNT ='$rm' 
                                              AND  AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'STARTED'
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['REQUISITIONID']."***".$res['PROGRAMME']."***".$res['VOTE_HEADNO']."***".$res['SUBPROGRAMME']."***".$res['ITEM']
             ."***".$res['BALANCEREMAINING']."***".$res['JOBNUMBER']."***".$res['CORCOMMENT'];
              echo "<tr>";
              echo "<td>".$res['CORDATE']."</td>";
               echo "<td>".$res['JOBNUMBER']."</td>"; 
              echo '<td> 
              
			   <a id="2011__'.$dts.'" href="javascript:void(0)" onclick="getgen(this.id)" data-toggle="tooltip" title="Allocatino details"
              <span class="glyphicon glyphicon-envelope"> </span></a>
			  
			  &nbsp;&nbsp;&nbsp; 
              <a id="3099__'.$dts.'" href="javascript:void(0)" onclick="getdetails(this.id)" data-toggle="tooltip" title="Allocatino details"
              <span class="glyphicon glyphicon-th-list"> </span></a>
              </td>';
			  echo "<td><a href=\"print_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">print</a>  
		| <a href=\"print_rfq.php?REQUISITIONID=$res[REQUISITIONID]\">rfq</a>  </td>";
             }
              ?>
             </tbody>
             </table>
               <div class=""  id="getdetails" >  </div>
                <script>

          function getdetails(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_pduoderallocation_view.php?q='+odno,
                       success : function(data){
                                $('#getdetails').html(data);
								$("#outx").modal("show");
                                 }
               });
               }

          </script>  
     
                  
                  </div>
                </div>
              </div>
            </div> 
          </div>
         
            
              
             <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"> <a href="proc_pdu_user.php">
         <center> <img src="../../../database icons/Nepal+facing+site_Procurement+Icon.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a>
            <div class="inner">  
            <a href="proc_pdu_user.php" class="small-box-footer">purchase.orders <i class=" "></i></a>
          </div>
        </div></div>
        <!-- ./col -->
           
          <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"><a href="budgeting.php">
         <center> <img src="../../assets/imgx/imagespoooooo.png" width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a>
            <div class="inner">  
            <a href="budgeting.php" class="small-box-footer">Suppliers<i class=""></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        
         
        
        
          
               <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"> <a href="payments.php">
         <center> <img src="../../assets/imgx/1stqtr.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a>
            <div class="inner">  
            <a href="payments.php" class="small-box-footer">Payments <i class=" "></i></a>
          </div>
        </div></div>
        <!-- ./col -->
                  
         
         <div class="box box-solid" style="border: 0px;"> 
        
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
            <a href="payments_rpt.php" class="small-box-footer">Payment.report <i class=""></i></a>
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
               <a href="#" class="btn btn-primary btn-block margin-bottom" style="font-family:algeria;"> PROCUREMENT MODULE &nbsp; &nbsp; | 
                              <b style="color:YELLOW;font-family:lcd;">PURCHASE ORDERS</b></a> 

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

                  
                    <div class=""  id="getgen" >  </div>
                <script>

          function getgen(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'proc_requisition.php?q='+odno,
                       success : function(data){
                                $('#getgen').html(data);
								$("#outxful").modal("show");
                                 }
               });
               }

          </script>  
     
                   
                  <div class="row text- pad-top">
                     
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square"> 
                           <a href="lpo_general.php"> 
                     <i class="fa fa-clipboard fa-5x"> 
                      <h4>Generate new purchase order</h4>
                      </i></a>
                      </div>  
                  </div>  
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href=<button class="" data-toggle="modal"  data-target="#m2"></button> 
 <i class="fa fa-users fa-5x"></i>
                      <h4>Procurement tracker</h4>
                      </a>
                      </div>
                      </div>
        <!-- ./col -->   
                    
                  <div class="col-sm-12">
                  
                  <table id="exords" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;"> 
                  <thead>
                  <tr> 
                     <th>LPO.DATE</th>
                     <th>LPO.NO.</th> 
                     <th>SERVICE.PROVIDER</th> 
			         <th>TOTAL COST</th> 
                     <th>DELIVERY.STATUS</th> 
                     <th>REQUIRED.DATE</th>
			         <th>ACTION</th> 
                      
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT TIMESTAMP, ORDERSERIALID, LPONO, SERVICEPROVIDER, SUBTOTAL, TAX, DATEREQUIRED, DELIVERYSTATUS, 
			(SUBTOTAL - (TAX/100 * SUBTOTAL)) AS tt FROM recievables GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $sdtsrr = $res['LPONO']."***".$res['ORDERSERIALID'];
              echo "<tr>"; 
			  echo "<td>".$res['TIMESTAMP']."</td>";
              echo "<td>".$res['LPONO']."</td>"; 
			  echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
              echo "<td>".$res['tt']."</td>"; 
              echo "<td>".$res['DELIVERYSTATUS']."</td>";
              echo "<td>".$res['DATEREQUIRED']."</td>"; 
			  echo "<td>  <a href=\"lpo_general_print.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print</a>   
			    </td>";
             }
              ?>
             </tbody>
             </table>   
             </div></div></div></div></div>
              
              
               </div></div>
              
                 <!-- /. ROW  -->  
                 
                 
                 
                 
                 <div class="modal" id="addplan" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> Add new details</h4>
                                        </div>
                                        <div class="modal-body">

 
 <form id="form1" class="form-horizontal" action="proc_processprocplan.php" method="POST" style="height:auto; font-weight:normal;">

           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:12px; text-align:center;"> BUDGETING</p>
           
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
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:20%;"><input type="text" name="CODE" id="CODE"   required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
                
   <td style="width:35%;"><input type="text" name="ITEMDESCRIPTION" id="ITEMDESCRIPTION"   required="required" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:25%;"> <select name="FINANCIALPERIOD" id="FINANCIALPERIOD"  required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;">
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
              
    <table class="table table-table-bordered" id="mytable1" style="background-color: transparent; ">
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
            
            <button class="btn btn-default" data-dismiss="modal">Close</button></center>
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer"> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>
                     


  <div class="modal" id="budgetraws" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
  <div class="box box-primary" style="border:0px;"> 
               <a href="budgeting.php" class="btn btn-primary btn-block margin-bottom">View budget details</a>  
              <div class="box-tools pull-right"></div>
           
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
             include_once("configproc.php");

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
           
           
           
           
           
           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer"> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>
                    
                    
                    <div class="modal" id="m2" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #dd4b39" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:20px; text-align:center;"> Procurement Tracker</p>

             <table id="example7" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ORDER.NO.</th>
                <th>RECIEVED</th> 
                <th>SUBJECT.OF.PROCUREMENT</th>
                <th>EST.COST</th>
                <th>ALLOCATED.TO</th>
                <th>RECOMMEDED.METHOD</th>
                <th>SHORTLISTED PROVIDER</th>
                <th>ACTUAL COST</th>
                <th>PAYMENT STATUS</th>
				<th>PENDING REQUIREMENTS</th>
                <th>ORDER STATUS</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ORDER.NO.</th>
                <th>RECIEVED</th> 
                <th>SUBJECT OF PROCUREMENT</th>
                <th>EST.COST</th>
                <th>ALLOCATED.TO</th>
                <th>RECOMMEDED.METHOD</th>
                <th>SHORTLISTED.PROVIDER</th>
                <th>ACTUAL.COST</th>
                <th>PAYMENT.STATUS</th>
				<th>REQUIREMENTS</th>
                <th>ORDER.STATUS</th> 
            </tr>
        </tfoot>
        <tbody>


<?php

//$level = trim($_GET['q']);



function getLevel(){
  	  $str123 = trim($str123);
  	  $tempstr = str_replace('__','_',$str123);

  	if($str123==''){ 		 return '<td style="background-color:blue;">'.$str123.'</td>';  	 }
  	else
  	{
  		  $str1234=array();
            $str1234=explode('_',$tempstr);
  		  $cnt = count( $str1234);
         	if($str1234[$cnt-1]==''){   	 return '<td style="background-color:red;">'.$str123.'</td>';    	 }

  		               else{     return '<td style="background-color:green;">'.$str123.'</td>'; 	}
  	}

  return false;
}

function getIndicator($str123){
	  $str123 = trim($str123);
	  $tempstr = str_replace('__','_',$str123);

	if($str123==''){ 		 return '<td style="background-color:#dd4b39;">'.$str123.'</td>';  	 }
	else
	{
		  $str1234=array();
          $str1234=explode('_',$tempstr);
		  $cnt = count( $str1234);
       	if($str1234[$cnt-1]==''){   	 return '<td style="background-color:#00a65a;">'.$str123.'</td>';    	 }

		               else{     return '<td style="background-color:#f39c12;">'.$str123.'</td>'; 	}
	}

}
  

require('connect/config.php');
$sql = "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND CONFEXTENSION ='$rm' 
                                              AND  AOACTION = 'APPROVED' AND ACTION = 'PENDING' 
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["JOBNUMBER"].'</td>'.
                 '<td>'.$row["RECIEVEDDATE"].'</td>'. 
				 getIndicator($row["SUBJECTOFPROCUREMENT"]). 
                 getIndicator($row["SUBTOTAL"]). 
                 getIndicator($row["OFFICERALLOCATED"]).
			     getIndicator($row["THRESHOLD"]).
                 getIndicator($row["SUPPLIER"]).
				 getIndicator($row["ACTUALCOST"]).
				  '<td>'.$row["PAYMENTSTATUS"].'</td>'.  
                 getIndicator($row["PENDINGREQUIREMENTS"]).
                 '<td>'.$row["ORDERSTATUS"].'</td></tr>';

 }

?>

	  </tbody>
  </table>  
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#dd4b39; color:#ffffff;">
                                           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>
 
                    

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


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
  <title>imms</title>
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
	  "iDisplayLength":5,
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
	  "iDisplayLength": 16,
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
     $('#exdelivx').DataTable( {
	  "iDisplayLength": 16,
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
     $('#exrecivbs').DataTable( {
	  "iDisplayLength": 16,
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
     $('#exdynam').DataTable( {
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
     $('#exdynam2').DataTable( {
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
     $('#exdons').DataTable( {
	  "iDisplayLength": 16,
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
     $('#expurchases').DataTable( {
	  "iDisplayLength": 16,
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
     $('#exdonext').DataTable( {
	  "iDisplayLength": 16,
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
     $('#app1').DataTable( {
	  "iDisplayLength": 6,
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
  
  <header class="main-header" style="margin-top: -20px;">
 <?php
  require('config.php');
  ?>
    
          <li>
          <li>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
          <li class="active"><a href="../sys_dashboard.php" class="" >Dashboard<span class="sr-only">(current)</span></a></li> 
            <li class="active"><a href="stores_mgt.php" class="" >Home<span class="sr-only">(current)</span></a></li> 
            
            <li class="active"><a href="../procurement.php" class="" >Procurement<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="pmt/proc_pdu.php" class="" >Pdu<span class="sr-only">(current)</span></a></li>
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../../index.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
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
        .
           
        <div class="pull-left image"> 
        </div> 
        <div class="pull-left info">
           
        </div>
      </div>
      <!-- search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" style="margin-top: -90px;">
        <li class="header" font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;background-color:#f44336;">STORES MODULE</li> 
          <li>
          <a href="stores_mgt.php"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style="  color:#fff;">Stores dashboard</span>
            <span class="pull-right-container">
              <small class="  ">   </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="stores_mgt_items.php"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Items | stock description</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
        
        
         
          <li>
          <a href="stores_mgt_purchases.php"  style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Receivables / Purchases</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
         <li> 
         <a href="stores_mgt_donations.php"  style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Donations received</span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li>
        
          
        
         <li>
          <a href="stores_mgt_issued.php"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Outgoing / Issued orders </span>
            <span class="pull-right-container">
              <small class=""> </small>
            </span>
          </a>
        </li>
        
         <li>
           <a href="stores_mgt_reconcile.php" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i><span style=" color:#fff;">Stock tracker by batch no.</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
        
          <li>
           <a href="str_data/main/stores_mgt_levels.php" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i><span style=" color:#fff;">Current stock levels</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
         
          <li>
         <a href="stores_mgt_deliveries.php" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style="color:#fff;">Deliveries</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
          
       <br> 
       
         <div id="reviews" class="carousel slide" data-ride="carousel" style="border:0px; border-radius:11px;">

                                    <div class="carousel-inner" style="background-color: #FFFFFF;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">
                                             <p> <center>Pending requisitions</center> </p>
                                             <p> <center>due for issuing </center></p>
                                              <center> <span style="font-size:30px;"> 
                                               
                                                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM outgoingorders 
                                   WHERE REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST = 'CONFIRMED' AND APPROVAL ='REVIEWED AND APPROVED'
			                       AND STOCKISSUANCESTATUS ='PENDING'
                                   GROUP BY ORDERSERIALID")) {   
								   
								                
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
                                               
                                               </span> </center><br>
                                                <div class="user-img pull-right">

                                                </div> 
                                                <h5 class="pull-right"> <strong class="c-black"> </strong></h5></center>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Pending supplies</center></p> 
                                            <p><center>by purchase order</center></p>
                                             <center>  <span style="font-size:30px;">
                                               
                                                <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM recievables  WHERE  ORDERTYPE ='ALERTED'  
			                                           GROUP BY ORDERSERIALID ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>           
                                                </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>

                                          
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" style="background-color:yellow;"></li> 
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->
                                    
                                    </div></ul>
                                    
        <center> <b style="color:#000; text-align:center;">Store reports</b> </center>
       <a href="../reports/stores_rpt.php" style="margin-top: 10px; color:#fff;">
         <canvas id="canvas" width="400" height="400" style="height: 100%; width:100%;background-color:#f44336;">
			</canvas> </a></li>
            
            
           <li> 
        <span class="glyphicon glyphicon-user" style="color:#000;"> 
          <a href="javascript:void(0)">  <b style="font-size:11px;"><?php echo $nameofuser; ?> </b>  </a></span>   
      </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #dddddd;"> 
    <section class="content-header">  
    </section>

    <!-- Main content -->
    <section class="content"> 
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
                 
              <div class="col-sm-5"  style="height:auto; font-weight:normal;border: 2px solid #dddddd; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 5px solid #dddddd;">
               <p  style="color:#000; text-align:left;"> Approved store requisition(s) due issuance 
               
                &nbsp;<b> 
                  <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM outgoingorders 
                                   WHERE REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST = 'CONFIRMED' AND APPROVAL ='REVIEWED AND APPROVED'
			                       AND STOCKISSUANCESTATUS ='PENDING'
                                   GROUP BY ORDERSERIALID")) {   
								   
								                
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </B></h4>
                </p>
                 <div class="table-responsive mailbox-messages">
                <table id="app1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;background-color:ecf0f5;">
                  <thead>
                  <tr>
                     <th style="width:15%;">DATE</th> 
                     <th style="width:10%;">ORDER NO.</th>  
                     <th  style="width:10%;">USER.UNIT</th>   
			         <th  style="width:5%;">ACTION</th> 
                  </tr>
                   </thead> 
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT APPBYDATE,ORDERSERIALID,REQBYNAME,REQUESTINGUNIT,FACILITYNANE,APPROVAL,REQBY,
			  AMOUNT, SUM(AMOUNT),ORDERTYPE,CONFIRMATIONOFREQUEST,APPBYNAME,AUTBYNAME,DATECREATED
			  FROM outgoingorders WHERE REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST = 'CONFIRMED' AND APPROVAL ='REVIEWED AND APPROVED'
			  AND STOCKISSUANCESTATUS ='PENDING' GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsy = $res['ORDERTYPE']."***".$res['ORDERSERIALID'];
              echo "<tr>";
               echo "<td>".$res['DATECREATED']."</td>";
               echo "<td>".$res['ORDERSERIALID']."</td>";   
               echo "<td>".$res['REQUESTINGUNIT']."</td>";   
			  echo "<td>&nbsp;&nbsp;&nbsp;<a href=\"str_reqn_updateorder.php?ORDERSERIALID=$res[ORDERSERIALID]\">Issue</a> |
			  <a href=\"str_reqn_printstandardminxtra.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print</a>  
			    </td>";
              }
              ?>
             </tbody>
             </table>   
            
             </div>    </div>   
             <div class="col-sm-7" 
             
              <div class="row text-center pad-top">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <div class="div-square">
                          <a href="../../dispenser/store_orders.php">
                      <i class="fa fa-rocket fa-5x" style="color:#f39c12;font-size:40px;"></i>
                      <h4 style="font-size:14px;"> Requisition | standard </h4>
                      </a>
                      </div> 
                      </div> 
                  
                  
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <div class="div-square">
                          <a href="str_reqn_general.php"> 
                          <i class="fa fa-comments-o fa-5x" style="color:#00a65a; font-size:40px;"></i>
                      <h4 style="font-size:14px;"> Requisition | general</h4>
                      </a>
                      </div> 
                      </div>  
                
                   
                  <div class="row text-center pad-top">
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <div class="div-square">
                          <a href="str_goodsrecievenote.php"> 
                      <i class="fa fa-comments-o fa-5x" style="color:#f39c12;font-size:40px;"></i>
                      <h4 style="font-size:14px;"> Goods receieved note</h4>
                      </a>
                      </div> 
                      </div>  
                
                
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <div class="div-square">
                          <a href="str_delnote.php">
  <i class="fa fa-comments-o fa-5x" style="color:#00a65a;font-size:40px;"></i>
                      <h4 style="font-size:14px;"> Delivery note form</h4>
                      </a>
                      </div> 
                  
                  
             
             
               </div>    </div>   </div></div><br>
                  
              
              <div class="col-sm-5"  style="height:auto; font-weight:normal;border: 2px solid #dddddd; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 5px solid #dddddd;">     
                 
        <p  style="color:#000; text-align:left;"> Local purchase orders</b> due for delivery &nbsp;  
         <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM recievables  WHERE  ORDERTYPE ='ALERTED'  
			                                           GROUP BY ORDERSERIALID ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>      </B></h4>
    </p>
             
           <div class=""  id="getdetailsextension" >  </div>
                <script>

          function getdetailsextension(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'upditems.php?q='+odno,
                       success : function(data){
                                $('#getdetailsextension').html(data);
								$("#outxzz").modal("show");
                                 }
               });
               }

          </script>  
               
             <div class="table-responsive mailbox-messages">
                  <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>DATE</th>
                     <th>LPO.NO.</th> 
                     <th>ACTION</th> 
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM recievables  WHERE  ORDERTYPE ='ALERTED' 
			                                           GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC ");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['ORDERSERIALID']."***".$res['LPONO']."***".$res['ORDERTYPE'];
              echo "<tr>";
              echo "<td>".$res['TIMESTAMP']."</td>";
               echo "<td>".$res['LPONO']."</td>";  
			  echo "<td><a href=\"lpo_general_print.php?ORDERSERIALID=$res[ORDERSERIALID]\">View LPO</a> &nbsp;|&nbsp;
			   <a href=\"str-goods.php?ORDERSERIALID=$res[ORDERSERIALID]\">Recieve goods</a> </td>";
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
 
          
          </div></div> 
     
     <div class="col-sm-7">
      <div class="box box-primary" style="border:0px;">
               <a href="proc_pdu.php" class="btn btn-primary btn-block margin-bottom" 
               style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:#000;;">List of items below target level</b></a>  </a> </div>
     
      <div id="dialog-window">
  <div id="scrollable-content">
   <ul>
                               <div class=""  id=" " style="margin-left:-39px;">
                               
        
        
        
        
        
        
        
        
        
     
     
       </div>
                                 </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>

<style>
#dialog-window {
  height: 227px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 227px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>
     </div>
                      </i></a>
                      </div> 
                       
                  </div> 
                    
                   </div>  
                    
                   </div> 
                
               
                
                   
                 </div>
                </div>
                
            </div>
            <!-- /.box-body -->
            
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="genproc" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 17px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            Generate local purchase order</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
    <form class="form-horizontal" action="lpo_mingenerator_processor.php" method="POST" style="height:auto; font-weight:normal;">  
             
               <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:20%;border:0px ;"> Order date</th>  
                <th style="width:30%;border:0px ;"> <input type="date"name="DATECREATED"  id="DATECREATED" value="<?php echo date('Y-m-d'); ?> " 
                 required="required"  class="form-control" style="width:100%;background-color:#FFF;"> 
                  </th>      
              </tr>
			  </table>  
              </div> 
              
              
              <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Serial number</th>  
                <th style="width:60%;border:0px ;"> <input type="text" name="ORDERSERIALID" id="ORDERSERIALID" value=" <?php echo uniqid();?>" readonly=""
                 readonly="readonly"  class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table>  
              </div> 
              
                <input type="hidden" name="LPONO" id="LPONO">
                
                 <div class="col-sm-12">
               <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:30%;border:0px ;">Service provider</th>  
                <th style="width:70%;border:0px ;"> 
                <input type="text" name="SERVICEPROVIDER" onKeyUp="domee(this)"  id="SERVICEPROVIDER"  placeholder="Order to" required="required" autocomplete="off"
                  class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table> 
                 <div id="res"> </div> 
              </div>  
                 
                  
                <div class="col-sm-12">
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:30%;border:0px ;">Address</th>  
                <th style="width:70%;border:0px ;"> 
                <input type="text"  name="SVPADDRESS" id="SVPADDRESS"   required=""
                 class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table>  
              </div>  
              
                <div class="col-sm-12">
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:30%;border:0px ;">Location</th>  
                <th style="width:70%;border:0px ;"> 
                <input type="text"  name="SVPLOCATION" id="SVPLOCATION" required=""
                 class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>    
              </tr>
			  </table>  
              </div>  
                 
			  
         <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Invoice number  </th>  
                <th style="width:60%;border:0px ;"> <input type="text"  name="INVOICENO"  id="INVOICENO"  autocomplete="off"
                  class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
              </div>
              
               <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Amount (tax inc) </th>  
                <th style="width:60%;border:0px ;"> <input type="text"   name="ORDERAMOUNT"  id="ORDERAMOUNT" autocomplete="off"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
            </div>
            
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Payment status </th>  
                <th style="width:60%;border:0px ;"> <select   name="PAYMENTSTATUS"  id="PAYMENTSTATUS" autocomplete="off"
                 class="form-control" style="width:100%;background-color:#fff;"> 
                <option>Pending</option>
                </select> 
                  </th>  
              </tr>
			  </table> 
           </div>
            
         
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Entity code </th>  
                <th style="width:60%;border:0px ;"> <input type="text"  name="ENTITYCODE"  id="ENTITYCODE" value="NTIHC" readonly=""
                 class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table> 
           </div>
           
           
          <input type="hidden"name="INITIATEDBY"  id="INITIATEDBY" value="<?php echo $nameofuser; ?>" > 
          <input type="hidden"name="TITLE"  id="TITLE" value="<?php echo $desc; ?>" > 
           
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
                                        <div class="modal-header" style="background-color: #fff;" ><img src="../../../assets/img/logsbig.PNG" width="100%" height="30%">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">  
            <form class="form-horizontal" style="height:auto; background-color:#fff;">  
            
    
           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:12px; text-align:left;"> APPROVED SUPPLIES LIST</p>
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
                     <div class="modal" id="contx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#FFF;" ><img src="../../../assets/img/logsbig.PNG" width="100%" height="30%">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">
                            <p>Projects / Contracts managemet</p>
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
                            </div></div>      
                            
                             <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="paywater" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:left;">Generate payment(s)</h4>
                                        </div>
                                        <div class="modal-body">
  <form class="form-horizontal" action="pmt_processone.php" method="POST" style="height:auto; font-weight:normal;">  
 
 
 <div class="col-sm-6" style="margin-left: -13px;">
  <table class="table table-responsive" style="background-color:#fff; margin-top:0px; ">
   <thead>
   <tr>  
    <th style="width:40%; border:0px;">Payment date</th>
	<td style="width:60%;border:0px;">
    <input type="date" name="PAYMENTDATE" id="PAYMENTDATE" value="<?php echo date('y-m-d'); ?>"  required=""
   style="width:100%; text-align:left;background-color:#FFF; height:20px;"></td>  						
   </tr>
  <tr>
 </tbody>
 </table>  
 
  <table class="table table-striped" style="background-color:#fff; margin-top:-15px; ">
   <thead>
   <tr>  
   <th style="width:40%;border:0px; background-color:#fff;">Payment s/n</th> 
	<td style="width:60%;border:0px;"><input type="text" name="PMTSERIALID" id="PMTSERIALID" value="<?php echo uniqid();?>"  readonly="" 
    style="width:100%; text-align:left;background-color:#FFF;"></td>  					
   </tr>
  <tr>
 </tbody>
 </table> 
 
</div>

  <table class="table table-striped" style="background-color:#fff; margin-top:-15px; ">
   <thead>
   <tr> 
   <th style="width:100%;border:0px;">Payment quater</th>      
   </tr>
  <tr>
 </tbody>
 </table>
         
   <table class="table table-striped" style="background-color:#fff; margin-top:-23px; ">
   <thead>
   <tr>     
	<td style="width:100%;border:0px solid #fff;">
    <input type="radio" name="QUARTERACCOUNTABLE" id="QUARTERACCOUNTABLE" value="1ST QUARTER" />
    <label> 1ST QUARTER </label>
    <input type="radio" name="QUARTERACCOUNTABLE" id="QUARTERACCOUNTABLE" value="2ND QUARTER" />
    <label> 2ND QUARTER </label>
    <input type="radio" name="QUARTERACCOUNTABLE" id="QUARTERACCOUNTABLE" value="3RD QUARTER" />
    <label> 3RD QUARTER </label>
    <input type="radio" name="QUARTERACCOUNTABLE" id="QUARTERACCOUNTABLE" value="4TH QUARTER" />
    <label> 4TH QUARTER </label>
     </td>   
   </tr>
  <tr>
 </tbody>
 </table>
    						
  
          
    <table class="table table-striped" style="background-color:#fff; margin-top:-15px; ">
   <thead>
   <tr> 
   <th style="width:100%;border:0px; ">Payment type</th>      
   </tr>
  <tr>
 </tbody>
 </table>
         
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr>   
	<td style="width:100%;border:0px;">
    <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="CHEQUE" checked />
    <label> CHEQUE </label>
     <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="EFT" />
    <label> EFT </label> 
     </td>   
   </tr>
  <tr>
 </tbody>
 </table>
  
   
  
   <table class="table table-striped" style="background-color:#fff; margin-top:0px; ">
   <thead>
   <tr>  
   <th style="border:0px; background-color:#fff;width:20%;">User initials</th> 
	<td style="width:80%;border:2px solid #fff;"><input type="text" name="USERINITIALS" id="USERINITIALS"  value="<?php echo $nameofuser; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td>  
   </tr>
  <tr>
 </tbody>
 </table> 
  
   <table class="table table-striped" style="background-color:#fff; margin-top:-15px; ">
   <thead>
   <tr>  
   <th style="border:0px; background-color:#fff;width:20%;">Title</th> 
	<td style="border:2px solid #fff;width:80%;"><input type="text" name="USERTITLE" id="USERTITLE"  value="<?php echo $desc; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td> 
							
   </tr>
  <tr>              
 </tbody>
 </table> 
 
 <table class="table table-striped" style="background-color:#fff; margin-top:-15px; ">
   <thead>
   <tr>  
   <th style="border:0px; background-color:#fff;width:20%;">User PFN</th> 
	<td style="border:2px solid #fff;width:80%;"><input type="text" name="USERINO" id="USERINO"  value="<?php echo $pf; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
 
 
    <input type="hidden" name="UTILITYTYPE" id="UTILITYTYPE"   />
 
    <Center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" />
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
             </Center>   
             
                 </form> 
                           </div>    
                  </div>  
           
           <div class="col-sm-12">
           <div class="panel-body">
        
        
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">  
                                        </div>
                                    </div>
                                </div>
                            </div></div>
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
 
<script src="../assets/lib/moment/moment.min.js"></script>
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
  
 <script type="text/javascript" src="../../assets/js/gauge.js"></script>
</body>
</html>

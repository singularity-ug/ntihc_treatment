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
$connect = new mysqli("localhost", "root", "", "ahr");
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
	  "iDisplayLength": 6,
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
     $('#expurchases').DataTable( {
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
     $('#exdonext').DataTable( {
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
$link = mysqli_connect("localhost", "root", "", "procurement");

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
$link = mysqli_connect("localhost", "root", "", "procurement");

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

             <b style="color:#000;;"> Standard requisitions for inhouse and facility issued orders</b>
         
                  <div class="table-responsive mailbox-messages">         
                                
                  <table id="exdynam" class="table table-table tabled" style="font-weight:normal; font-size:9px; width:100%;"> 
                  <thead>
                  <tr>
                     <th>DATE</th> 
                     <th>SERIAL.NO</th> 
                     <th>APPROVED.BY</th> 
                     <th>REQUESTING UNIT</th>
                     <th>FACILITY NANE</th> 
                     <th>ORDER.TYPE</th> 
                     <th>REQN.TYPE</th>     
			         <th>ACTION</th> 
                      
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM outgoingorders WHERE REQUISTIONTYPE='STANDARD' 
			 AND STOCKISSUANCESTATUS ='ISSUED' GROUP BY ORDERSERIALID ORDER BY DATECREATED DESC");

             while($res = mysqli_fetch_array($result)) {
             $sdtsrr = $res['id']."***".$res['ORDERSERIALID']."***".$res['FACILITYNANE']."***".$res['ORDERTYPE'];
              echo "<tr>"; 
			  echo "<td>".$res['DATECREATED']."</td>";
			  echo "<td>".$res['ORDERSERIALID']."</td>";
			  echo "<td>".$res['APPBYNAME']."</td>"; 
			  echo "<td>".$res['REQUESTINGUNIT']."</td>";
              echo "<td>".$res['FACILITYNANE']."</td>"; 
			  echo "<td>".$res['ORDERTYPE']."</td>"; 
			  echo "<td>".$res['REQUISTIONTYPE']."</td>"; 
			  echo "<td><a href=\"str_reqn_updateorder2.php?ORDERSERIALID=$res[ORDERSERIALID]\">UPDATE</a> &nbsp; | &nbsp; 
			  <a href=\"str_reqn_printstandard.php?ORDERSERIALID=$res[ORDERSERIALID]\">PRINT</a> 
			    </td>";
             }
              ?>
             </tbody>
             </table>	
                  
              
              </div>
              </div></div></div>
              
              </div>
              
               <!-- Main content -->
    <section class="content"> 
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">

             <b style="color:#000;;"> General requisitions for inhouse and facility orders </b>
         
                  <div class="table-responsive mailbox-messages">  
                   
             
      
        <div class=""  id="codify" >  </div>
                <script> 
          function codify(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'str_reqn_general_updrow.php?q='+odno,
                       success : function(data){
                                $('#codify').html(data);
								$("#ouoop").modal("show");
                                 }
               });
               } 
          </script>  
               
                    <P> </P>  
                    
                    <table id="exdonext" class="table table-table tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                    
                     <th>ID</th>
                     <th>DATE</th>  
                     <th>S/NO.</th>
                     <th>SRFNO</th>
                     <th>FACILITYNANE</th> 
                     <th>DESCRIPTION</th> 
                     <th>QTYISSUED</th>
                     <th>COLLECTEDBY</th>  
                     <th>PURPOSE</th>  
			         <th>ACTION</th> 
                     <th>PRINT</th> 
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM outgoingorders WHERE REQUISTIONTYPE='GENERAL'");

             while($res = mysqli_fetch_array($result)) {
             $dtsqq = $res['ORDERSERIALID']."***".$res['id'];
              echo "<tr>";
			 
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['DATECREATED']."</td>"; 
			  echo "<td>".$res['ORDERSERIALID']."</td>"; 
              echo "<td>".$res['SRFNO']."</td>"; 
			  echo "<td>".$res['FACILITYNANE']."</td>"; 
			  echo "<td>".$res['DESCRIPTION']."</td>";
              echo "<td>".$res['QTYISSUED']."</td>"; 
			  echo "<td>".$res['COLLECTEDBY']."</td>"; 
			  echo "<td>".$res['PURPOSE']."</td>"; 
			  echo '<td>    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   
              <a id="3__'.$dtsqq.'" href="javascript:void(0)" onclick="codify(this.id)" data-toggle="tooltip" title="Add value"
              <span class="glyphicon glyphicon-share"> </span></a>  
              </td>';
			  
			   echo "<td> <a href=\"str_reqn_printgeneral.php?ORDERSERIALID=$res[ORDERSERIALID]\">CLICK</a> 
			    </td>";
             } 
              ?>
             </tbody>
             </table>
              
                    
      
      
      
      
      
      
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

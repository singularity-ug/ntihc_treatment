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

  $("#DESCRIPTION"+num).val(data[2]);
  $("#QTYINSTOCK").val(data[2]);
  $("#UNITOFMEASURE").val(data[3]);
  $("#ESTIMATEDUNITCOST").val(data[4]); 
}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "searchdrug_details.php",
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
     $('#exdynam').DataTable( {
	  "iDisplayLength": 2,
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
     $('#app1').DataTable( {
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
     $('#app2').DataTable( {
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
     $('#app3').DataTable( {
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
     $('#app4').DataTable( {
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
  <?php
  require('config.php');
  ?> 
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
            <li class="active"><a href="store_orders.php" class="" >Home<span class="sr-only">(current)</span></a></li> 
            <li><a href=<button class="" data-toggle="modal"  data-target="#notifx"></button>New requisition </span></a></li>
             
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
          <a href="store_orders.php">
            <i class="fa fa-th"></i>  <span style="color:#000;"> Pending confirmations </span>
            <span class="pull-right-container">
              <small class=" ">   <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM outgoingorders  WHERE  REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST = 'PENDING'  
			                                            GROUP BY ORDERSERIALID ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
	
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </small>
            </span>
          </a>
        </li>
         
          <li>
          <a href="inc_approvals.php">
            <i class="fa fa-th"></i> <span style="color:#000;"> My pemding approvals</span>
            <span class="pull-right-container">
              <small class=" "> 
               <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM outgoingorders  WHERE  REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST='CONFIRMED' AND APPROVAL = 'PENDING'
			                                            AND FORWARDTO='$rm'  GROUP BY ORDERSERIALID ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
	
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>     
              </small>
            </span>
          </a>
        </li>
        
         <li>
          <a href="inc_confirm.php">
            <i class="fa fa-th"></i> <span style="color:#000;"> Unclassified approvals</span>
            <span class="pull-right-container">
              <small class=" "> 
               <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM outgoingorders  WHERE  REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST='CONFIRMED' AND APPROVAL = 'PENDING'
			                                            AND FORWARDTO='Undefined'  GROUP BY ORDERSERIALID ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
	
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>     
              </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="inc_viewall.php">
            <i class="fa fa-th"></i> <span style="color:#000;"> Approved requisitions</span>
            <span class="pull-right-container">
              <small class=" ">  </small>
            </span>
          </a>
        </li>
         
          
         
         
         
            
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#f8f3c033;">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
     <font style=" font:bold 24px 'Aleo'; text-shadow:1px 1px 5px #000; color:#fff;"><center>Stores </center></font>
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
     
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; margin-top:-18px; font-family:lcd; text-transform:uppercase;s">
         Store requisitions due for approval</p> </center> 
         <p></p>
    <div class=""  id="getstr" >  </div>
                <script>

          function getstr(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_drugreqnappv.php?q='+odno,
                       success : function(data){
                                $('#getstr').html(data);
								$("#outfcc").modal("show");
                                 }
               });
               }

          </script> 
  
                  <table id="app1" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th style="width:15%;">DATE</th> 
                     <th style="width:10%;">SERIAL NO.</th> 
                     <th style="width:20%;">CREATED BY</th> 
                     <th style="width:15%;">REQUESTING UNIT</th>
                     <th style="width:10%;">FACILITY NANE</th>  
                     <th  style="width:10%;">ESTIMATED COST(UGX)</th> 
                     <th  style="width:10%;">CONFIRMATION</th>     
			         <th  style="width:5%;">ACTION</th> 
			         <th  style="width:5%;">VIEW</th>
                  </tr>
                   </thead>
           <tfoot>
            <tr>
               <th style="width:15%;">DATE</th> 
                     <th style="width:10%;">SERIAL NO.</th> 
                     <th style="width:20%;">CREATED BY</th> 
                     <th style="width:15%;">REQUESTING UNIT</th>
                     <th style="width:10%;">FACILITY NANE</th>  
                     <th  style="width:10%;">ESTIMATED COST(UGX)</th> 
                     <th  style="width:10%;">CONFIRMATION</th>     
			         <th  style="width:5%;">ACTION</th> 
			         <th  style="width:5%;">VIEW</th>
            </tr>
                  
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("connect/configproc.php");

             $result = mysqli_query($mysqli, "SELECT TIMESTAMP,ORDERSERIALID,REQBYNAME,REQUESTINGUNIT,FACILITYNANE,APPROVAL,REQBY,
			  AMOUNT, SUM(AMOUNT),ORDERTYPE,CONFIRMATIONOFREQUEST
			  FROM outgoingorders WHERE REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST = 'CONFIRMED' AND APPROVAL='PENDING' AND FORWARDTO='$rm'
			  GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsy = $res['ORDERTYPE']."***".$res['ORDERSERIALID'];
              echo "<tr>";
               echo "<td>".$res['TIMESTAMP']."</td>";
               echo "<td>".$res['ORDERSERIALID']."</td>";  
			   echo "<td>".$res['REQBYNAME']."</td>";
               echo "<td>".$res['REQUESTINGUNIT']."</td>"; 
			   echo "<td>".$res['FACILITYNANE']."</td>";
			   echo "<td>".$res['SUM(AMOUNT)']."</td>";
               echo "<td>".$res['CONFIRMATIONOFREQUEST']."</td>";
			      
			   echo '<td>  &nbsp;&nbsp;
			   <a id="2__'.$dtsy.'" href="javascript:void(0)" onclick="getintfucker(this.id)" data-toggle="tooltip" title="View requisition"
              <span class="glyphicon glyphicon-share"> </span></a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  
			  <a id="3__'.$dtsy.'" href="javascript:void(0)" onclick="getstr(this.id)" data-toggle="tooltip" title="Confirm request"
              <span class="glyphicon glyphicon-ok"> </span></a> 
              </td>';
			  echo "<td>&nbsp;&nbsp;&nbsp;<a href=\"str_reqn_printstandardminxtra.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print</a>   </td>";
              }
              ?>
             </tbody>
             </table> 
               
             
              <div class=""  id="getintfucker" >  </div>
                <script>

          function getintfucker(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'str_viewrequisition.php?q='+odno,
                       success : function(data){
                                $('#getintfucker').html(data);
								$("#outfuc").modal("show");
                                 }
               });
               }

          </script> 
                 
             </div></div></div></div> 
              
              
               
 
               <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notifx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 14px 'Aleo'; text-shadow:1px 1px 5px #000; color:#fff;"> <center>Store requisition for drugs and supplies
                                           </center> </h4>
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
				style="width:100%; text-align:left;background-color:#fff;"></td> 
                 
               
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
				style="width:100%; text-align:left;background-color:#fff;height: 21px;">
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
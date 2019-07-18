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
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
   <!-- Bootstrap 3.3.6 -->
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
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('config.php');
  ?>

  <header class="main-header">
    <nav class="navbar navbar-static-top"> 
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="proc_pdu_user.php" class="button 5" > Find<span class="sr-only">(current)</span></a></li>
            <li><a href=<button class="small-box-footer" data-toggle="modal"  data-target="#m2"></button> Procurement tracker<span class="sr-only">(current)</span></a></li>
            
             
          </ul>

        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user" style="font-size:16px;"><b>Welcome:</b></span>
         <B style="font-size:11px;"> &nbsp <?php echo $nameofuser; ?>  </B>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Ntihc M.E team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not use this awesome application?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#"> </a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                 <img src="../../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>

                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">

                  <p>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i>
              <span class="">&nbsp<?php echo $nameofuser; ?>  </span>
            </a>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-th"></i>
              <span class="">&nbsp<?php echo $desc; ?>  </span>
            </a>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-share"></i>
              <span class="">&nbsp<?php echo $dept; ?>  </span>
            </a>

                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="../../index.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="row" style="background-color:#f9f9f9;">
       <!-- Content Header (Page header) -->
    <br>
    <div class="col-sm-3" style="height:auto; background-color:;">

               <div class="box-group" id="accordion">
                 <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                 <div class="panel box box-primary">
                   <div class="box-header with-border" style="text-align:center; background-color:#fff;">
                     <h4 class="box-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <B>  Inbox </b>
                       </a>
                     </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in" style="background-color: #ecf0f5;">

                       <div class="progress">
                   	  <div class="progress-bar progress-bar-success" style="width: 80%;  color:#fff; text-align:left; font-weight:bold;">
                       <B>In-coming procurement work orders</b><span class="sr-only">45% Complete (success)</span></div> 
                   	  <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   	  </div>

                       <br>
                  <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
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
              <a id="2__'.$dts.'" href="javascript:void(0)" onclick="getprocform(this.id)" data-toggle="tooltip" title="View requisition"
              <span class="glyphicon glyphicon-envelope"> </span></a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a id="3__'.$dts.'" href="javascript:void(0)" onclick="getdetails(this.id)" data-toggle="tooltip" title="Allocate an order"
              <span class="glyphicon glyphicon-th-list"> </span></a>
              </td>';
			  echo "<td><a href=\"print_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">RFP</a>  
		| <a href=\"print_rfq.php?REQUISITIONID=$res[REQUISITIONID]\">RFQ</a>  </td>";
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
             <div class="panel box box-danger">
               <div class="box-header with-border">
                 <h4 class="box-title">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                     Rejected procurement orders
                   </a>
                 </h4>
               </div>
               <div id="collapseTwo" class="panel-collapse collapse" style="background-color: #ecf0f5;">

                   <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                   Rejected procurement orders <span class="sr-only">35% Complete (success)</span></div>
                   <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   </div>

                   <br>
                   

                 </div>
               </div>
			    
            
             </div>
         <!-- /.box-body -->
 
   <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:33.3333333%;border:2px solid #a9abae;background-color:#ecf0f5;">  
				   <a class="quick-btn" href="#" style=" border-radius:5px;  ">
                                <i class="icon-check icon-2x"></i>
                                <span> My work orders </span>
                                <span class="label label-danger">
								 <?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND OFFICERACCOUNT ='$rm' 
AND ORDERSTATUS = 'STARTED' GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

							</span>
                            </a> 
                </th> 
				 
		           
				<th style="width:33.3333333%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span> ..........</span>
                                <span class="label label-success">
								 <?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND FORWARDTO ='$rm' AND CONFSTATUS ='WAITING'  GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
							</span>
                            </a>
                  </th>   
				  
				<th style="width:33.3333333%;border:2px solid #a9abae; background-color:#ecf0f5;">  
                            <a class="quick-btn" href="#" style=" border-radius:5px;background-color:#fff;"> 
                                <i class="icon-check icon-2x"></i>
                                <span>...... </span>
                                <span class="label label-warning">
								<?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFEXTENSION ='$rm' AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'WAITING' GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
								</span>
                            </a>
							
                </th>  
				  
              </tr>
			  </table> 
              
              
       <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:33.3333333%;border:2px solid #a9abae;background-color:#ecf0f5;">          
							<a class="quick-btn" href="#" style="  border-radius:5px;background-color:#fff;"> 
                                <i class="icon-check icon-2x"></i>
                                <span> ......</span>
                                <span class="label label-success">
								<?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFEXTENSION ='$rm' AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'WAITING' GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </span>
                            </a> 
                </th> 
				 
		           
				<th style="width:33.3333333%; border:2px solid #a9abae;"> 
							
                             <a class="quick-btn" href="#" style=" border-radius:5px;">
                                <i class="icon-check icon-2x"></i>
                                <span> ....... </span>
                                <span class="label label-danger">
								<?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFEXTENSION ='$rm' AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'WAITING' GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
								</span>
                            </a> 
                </th> 
				 
		           
				<th style="width:33.3333333%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style=" border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span>.....</span>
                                <span class="label label-warning">
								<?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'STARTED'
AND ACTION = 'PENDING' GROUP BY REQUISITIONID")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
							</span>
                            </a>
							
                </th>  
				  
              </tr>
			  </table> 
              <p></p>
 
           <div class="progress">
           <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
            <b> Proposed budget details due for confirmation</b> <span class="sr-only">35% Complete (success)</span></div>
           <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
           </div>

            
        </form>
 
		</div> 
		<div class="col-sm-9" style="height:auto;"> 

        <div class=""  id="getprocform" >  </div>
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

 
              <div class="box-group" id="accordion"> 
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOnev">
                      <b>Procurement and disposal unit</b>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOnev" class="panel-collapse collapse in">
                    <div class="box-body" style="background-color: #fff;"> 
					
					
           <ul class="nav nav-tabs">  
		   
           <div class="col-lg-2 col-xs-4"> 
          <!-- small box -->
           <li><a href="#ordex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">  
         <center> <img src="str_icns/535353239.jpg"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner"> 
             <a href="lpo_general.php" class="small-box-footer" style="text-align:center;">Orders<i class=" "></i></a>  
             <div class="pull-right box-tools">
                <!-- button with a dropdown -->
             <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu">
                    <li><a href="lpo_general.php">Generate L P O</a></li> 
                    <li class="divider"></li> 
                  </ul>
                </div>
        </div>
          </div>
        </div> </div>    
       
       
      <div class="col-lg-2 col-xs-4">
          <!-- small box -->
           <li><a href="#suplex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../database icons/admin2.jpg"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#supdex">Supplier details <i class=" "></i></a> 
          </div>
        </div></div></li>
        <!-- ./col -->
		
                      <div class="col-lg-2 col-xs-4">
          <!-- small box -->  
          <li class="active"><a href="#comtex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../database icons/budget.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href="budget_mgr.php" class="small-box-footer">Procurement plan <i class=" "></i></a>
          </div>
        </div></div> </li>
        <!-- ./col -->         
        
         
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#contrex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../database icons/microfinance-product-management-system.jpg"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" >
         </center></a> 
            <div class="inner">  
            <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#contx">Contracts mgt <i class=" "></i></a> 
          </div> 
        </div></div></li>
        <!-- ./col -->
         
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#paymex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center>  <a href=<button class="" data-toggle="modal" data-target="#paywater"><img src="../../database icons/syspanel1.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href=<button class="" data-toggle="modal" data-target="#paywater"> </button>Payments  <i class=" "></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#storex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center> <img src="str_icns/if_order-history_49596.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href="stores_module.php" class="small-box-footer">stores <i class="fa fa-arrow-circle-right"></i></a>
           </div>
        </div></div></li>
        <!-- ./col -->
                    </div>
                   
    
                     
                  </div>  
                </div>
                 
              </div>
			  
			  
			   <div class="tab-content" style="margin-top: -9px;"> 
                                <div class="tab-pane fade in active" id="ordex">
                                  <table id="exords" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;"> 
                  <thead>
                  <tr> 
                     <th>LPO.DATE</th>
                     <th>LPO.NO.</th> 
                     <th>SERVICE.PROVIDER</th>
                     <th>SUB.TOTAL</th> 
                     <th>TAX</th> 
			         <th>GRAND.TOTAL</th> 
                     <th>DELIVERY.STATUS</th> 
                     <th>REQUIRED.DATE</th>
			         <th>ACTION</th> 
                      
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM recievables GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $sdtsrr = $res['id']."***".$res['ORDERSERIALID']."***".$res['LPONO']."***".$res['ORDERTYPE'];
              echo "<tr>"; 
			  echo "<td>".$res['TIMESTAMP']."</td>";
              echo "<td>".$res['LPONO']."</td>"; 
			  echo "<td>".$res['SERVICEPROVIDER']."</td>";
			  echo "<td>".$res['SUBTOTAL']."</td>"; 
			  echo "<td>".$res['TAX']."</td>"; 
              echo "<td>".$res['TOTALCOST']."</td>"; 
              echo "<td>".$res['DELIVERYSTATUS']."</td>";
              echo "<td>".$res['DATEREQUIRED']."</td>"; 
			  echo "<td><a href=\"lpo_general_update.php?ORDERSERIALID=$res[ORDERSERIALID]\">Update</a> |
			   <a href=\"lpo_general_print.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print</a>   
			    </td>";
             }
              ?>
             </tbody>
             </table>	
             
             						  
			  	<div class=""  id="viewlpo" >  </div>
                <script>

          function viewlpo(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'lpo_general_update.php?q='+odno,
                       success : function(data){
                                $('#viewlpo').html(data);
								$("#itex").modal("show");
                                 }
               });
               }

          </script> 
                          </div>                 
                           
                          <div class="tab-pane fade" id="comtex">
                                    <h4>Commitees</h4>
                                    <p>
                                     .........
                                    </p>
                                </div>
                                
                                <div class="tab-pane fade" id="suplex">
        
                      <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 25%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;">
             Service providers<span class="sr-only">35% Complete (success)</span></div>
             
            <div class="progress-bar progress-bar-success" style="width: 25%;background-color:#fff;font-weight:bold;">
             <a href=<button class="small-box-footer" data-toggle="modal" data-target="#addsup">Add new supplier <i class=" "></i></a> 
             <span class="sr-only">20% Complete (warning)</span></div>
            
            <div class="progress-bar progress-bar-warning" style="width: 25%;background-color:#fff;font-weight:bold;">
            <a href=<button class="small-box-footer" data-toggle="modal" data-target="#fireworks">Details of procurement <i class=" "></i></a> 
            <span class="sr-only">20% Complete (warning)</span></div>
            
            <div class="progress-bar progress-bar-success" style="width: 25%;background-color:#fff;font-weight:bold;">
            <span class="sr-only">10% Complete (danger)</span></div>
            </div>

                   <p></p>	  
                      
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
               
       <div class=""  id="verify" >  </div>
                     <script>

               function getprocform(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'verify.php?q='+odno,
                            success : function(data){
                                     $('#verify').html(data);
     								$("#procreqnn").modal("show");
                                      }
                    });
                    }

               </script>   
 
  <table id="exsuppex" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;border: 2px solid #ecf0f5;">
                  <thead>
                  <tr>
                  <th>ID</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>TYPE</th> 
                  <th>FRAME WORK DETAILS</th> 
                  <th>AGE</th>
                  <th>STATUS</th>   
                  <th>ACTION</th>  
                  <th> </th>  
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>ID</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>TYPE</th> 
                  <th>FRAME WORK DETAILS</th> 
                  <th>AGE</th>
                  <th>STATUS</th>   
                  <th>ACTION</th>  
                  <th> </th>  
            </tr>
        </tfoot>
        <tbody>   
   
             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT id,SERVICEPROVIDER, FRAMEWORKDETAILS,TYPE, STATUS,FRAMEWORKID, ENTITYCODE, FRAMEWORKPERIOD,
			 CURDATE(), TIMESTAMPDIFF(YEAR,DATEREGISTERED,CURDATE()) AS age 
			 FROM suppliers ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxccex = $res['SERVICEPROVIDER']."***".$res['id'];
							   
              echo "<tr>";  
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
			  echo "<td>".$res['TYPE']."</td>"; 
			  echo "<td>".$res['ENTITYCODE']." ".$res['FRAMEWORKID']."/ ".$res['FRAMEWORKPERIOD']." : ".$res['FRAMEWORKDETAILS']."</td>"; 
			  echo "<td>".$res['age']."</td>"; 
			  echo "<td>".$res['STATUS']."</td>"; 
			  echo '<td> 
			   <a id="02__'.$dtsxccex.'" href="javascript:void(0)" onclick="explodexy(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-fullscreen"> </span></a>
			  &nbsp;&nbsp; &nbsp;&nbsp;
			   <a id="03__'.$dtsxccex.'" href="javascript:void(0)" onclick="getprocform(this.id)" data-toggle="tooltip" title="Approve"
              <span class="glyphicon glyphicon-check"> </span></a>
			  
              </td>';
			  echo "<td> <a href=\"supplies/suppliers_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	            } 
               ?>
             </tbody>
             </table> 
    
                                </div> 
                                
                                <div class="tab-pane fade" id="contrex">
                                <P></P>
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
               
               
                <div class=""  id="newcont" >  </div>
                <script>

          function newcont(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'contracts/newcontract.php?q='+odno,
                       success : function(data){
                                $('#newcont').html(data);
								$("#itexplosion").modal("show");
                                 }
               });
               }

          </script> 
                    
                <table id="excontract" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;border: 2px solid #ecf0f5;">
                  <thead>
                  <tr> 
                  <th>S/NO</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th> 
                  <th>CONTRACT VALUE</th> 
                  <th>PAYMENT SHEDULE</th>
                  <th>STATUS</th>  
                  <th>ACTION</th>
                  <th>TRUNCATE</th>  
                 </tr>
        </thead>
        <tfoot>
          <tr> 
                  <th>S/NO</th> 
                  <th>SERVICE PROVIDER</th>
                  <th>CONTRACT</th> 
                  <th>CONTRACT VALUE</th> 
                  <th>PAYMENT SHEDULE</th>
                  <th>STATUS</th>   
                  <th>ACTION </th> 
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
			 
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
			  echo "<td>".$res['CONTRACT']."</td>"; 
			  echo "<td>".$res['CONTRACTVALUE']."</td>"; 
			  echo "<td>".$res['PAYMENTSHEDULE']."</td>"; 
			  echo "<td>".$res['STATUS']."</td>";  
			  echo '<td> 
			    <a id="12__'.$dtsxTc.'" href="javascript:void(0)" onclick="newcont(this.id)" data-toggle="tooltip" title="Add new"
                <span class="glyphicon glyphicon-plus"> </span></a>
			   &nbsp;&nbsp; &nbsp;&nbsp;
			   <a id="13__'.$dtsxTc.'" href="javascript:void(0)" onclick="updateconts(this.id)" data-toggle="tooltip" title="Update"
               <span class="glyphicon glyphicon-new-window"> </span></a> 
              </td>'; 
			  echo "<td> <a href=\"contracts/cont_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	            } 
               ?>
             </tbody>
             </table> 
    
                                </div> 
                                
                                <div class="tab-pane fade" id="paymex">
                                    <h4>Payments</h4>
                                    <p> .........</p>
                                </div> 
                                
                                 <div class="tab-pane fade" id="storex">
                                    <h4>Stores</h4>
                                    <p> 
                                    ............</p>
                                </div> 
                                </div>
                                
                                
                                
                  

			  
			  
            </div> 
            <!-- /.box-body -->
          </div> 
          <!-- /.box -->
        </div>
        <!-- /.col -->   
		
	 
		</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<br>
            <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 25%;  color:#000; text-align:left; font-weight:bold;">
            <span class="sr-only">35% Complete (success)</span></div>
            <div class="progress-bar progress-bar-success" style="width: 25%"><span class="sr-only">20% Complete (warning)</span></div>
            <div class="progress-bar progress-bar-warning" style="width: 25%"><span class="sr-only">20% Complete (warning)</span></div>
            <div class="progress-bar progress-bar-success" style="width: 25%"><span class="sr-only">10% Complete (danger)</span></div>
            </div>





                    <div class="col-lg-12">
                        <div class="modal" id="impres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

               <div class="col-sm-12" style="text-align:left;">
<img src="../../assets/img/logsbig.PNG" width="100%" height="100%">
</div>

           <div class=""  id="procurestracker" >  </div>
                <script>

          function procurestracker(cjose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'prock_tracker.php?q='+odno,
                       success : function(data){
                                $('#procurestracker').html(data);
								$("#impres").modal("show");
                                 }
               });
               }

          </script>
           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>

         </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>

                       <div class="modal" id="m2" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
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
                                        <div class="modal-footer" style="background-color:red; color:#ffffff;">
                                           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>


      <div class="col-sm-12">
                     <div class="modal" id="itex" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

               <div class="col-sm-12" style="text-align:left;"> 
     
       <img src="../../assets/img/logs.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>NEW ITEM REGISTREATION FORM</b> </p> </center> 
 
		
          
           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>

         </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>

                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:40px; text-align:center;"> ACCESS DENIED</p>

            <p></p>
            <p style="color:red; font-weight:bold; font-size:40px; text-align:center;font-family:lcd;"> <?php echo date('Y-m-d'); ?></p>


           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:#ffffff;">
                                           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>

            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="supdex" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ecf0f5;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">  
            <form class="form-horizontal" style="height:auto; background-color:#fff;">
           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:20px; text-align:center;"> APPROVED SUPPLIES LIST</p>
 <table id="exsupdex" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
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
                                        <div class="modal-footer" style="background-color:#ecf0f5; color:#000;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                    
               <div class="col-sm-12">
                     <div class="modal" id="addsup" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
  
       <img src="../../assets/img/logs.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>NEW SUPPLIER REGISTREATION FORM</b> </p> </center> 
 
		 <form class="form-horizontal" action="supplies/supplier_process.php" method="POST" style="height:auto; font-weight:normal;">    
		   
     <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Service provider </th>
				<th style="width:80%;border:2px solid #a9abae;"> <input type="text"  id="SERVICEPROVIDER" name="SERVICEPROVIDER"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>   
              </tr>
			  </table> 
              
              
              <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Enrollment date </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="date"  id="DATEREGISTERED" name="DATEREGISTERED"  placeholder="yyyy / mm / dd"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Classification </th>
				<th style="width:30%;border:2px solid #a9abae;"> <select id="TYPE" name="TYPE"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  
				        <option>  </option>
                        <option>COMPANY</option>
                        <option>INDIVIDUAL</option> 
                        </select></th>   
                 
              </tr>
			  </table> 
               
              
               <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Physical address </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="PHYSICALADDRESS" name="PHYSICALADDRESS"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Location </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="PHYSICALLOCATION" name="PHYSICALLOCATION"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Box number</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="BOXNUMBER" name="BOXNUMBER"   
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Country / District </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="COUNTRYOFOPERATION" name="COUNTRYOFOPERATION"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
              
              
               <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Contact person </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="CONTACTPERSON" name="CONTACTPERSON"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Telephone number </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="TELEPONENO" name="TELEPONENO"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Mobile number</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="MOBILENO" name="MOBILENO"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Client e-mail </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="ENTITYEMAIL" name="ENTITYEMAIL"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Contact person email</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="CONTACTPERSONEMAIL" name="CONTACTPERSONEMAIL"   
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
                 
              </tr>
			  </table> 
              
			   
             <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Tax status</th>
				<th style="width:30%;border:2px solid #a9abae;"> <select id="TAXSTATUS" name="TAXSTATUS"   
				 style="width:100%; font-weight:normal; background-color:#fff;"> 
                <option></option>
                <option>INCLUSIVE</option>
                <option>EXEMPTED</option>
                 </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Tin number </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="TINNO" name="TINNO"  
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table>   
              
               
              
               <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Framework details</th>
				<th style="width:80%;border:2px solid #a9abae;"> <input type="text" id="FRAMEWORKDETAILS" onKeyUp="domee(this)"  name="FRAMEWORKDETAILS"  required="required" 
				style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table>
                   
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:2px solid #a9abae;">Framework No. </th>
				<th style="width:14.33333333%;border:2px solid #a9abae;"> <input type="text" id="FRAMEWORKID" name="FRAMEWORKID"  readonly="readonly" 
				 style="width:100%; font-weight:normal; background-color:#ecf0f5; text-align:center;">   </th>   
                 
                <th style="width:10%;border:2px solid #a9abae;">Code </th>
				<th style="width:24.33333333%;border:2px solid #a9abae;"> <input type="text" id="ENTITYCODE" name="ENTITYCODE"  readonly="readonly" 
				 style="width:100%; font-weight:normal; background-color:#ecf0f5;">   </th>   
                 
                 <th style="width:10%;border:2px solid #a9abae;">Period </th>
				<th style="width:24.33333333%;border:2px solid #a9abae;"> <input type="text" id="FRAMEWORKPERIOD" name="FRAMEWORKPERIOD" required="required"  
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th>    
              
              </tr>
			  </table>   
               <center><input type="submit" name="button" id="button" value="Save " >
               <button type="button" data-dismiss="modal">Close</button></center>
            <div class="col-sm-12">
           <div class="panel-body"> 
           
              
                 
			  <div id="dialog-window">
  <div id="scrollable-content"> 
   <ul>
                               <div id="res" style="margin-left: -41px;"></div>
                                </div> 
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>
 
<style>
#dialog-window {
  height: 100px;
  border: 0px black solid;
  border-radius:7px;
}

#scrollable-content {
  height: 100px;
  overflow: auto;
  background-color: transparent;
}

#footer {
  height: 0px; 
}
</style>	  
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#FFF; color:#000;">
                                           <center> </center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>  
                    
                    
                    
                    
                    
                    
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
              
              
               
                <table id="frame" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%; margin-top:-10px;"> 
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
                            
                            
                          <div class="col-sm-12">
                     <div class="modal" id="contx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  </h4>
                                        </div>
                                        <div class="modal-body">  
 
		                  <table id="exconts" class="table table-striped table-bordered" style="font-weight:normal; font-size:8px; width:100%;border: 2px solid #ecf0f5;">
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
                  <th>REMAINING MONTHS</th> 
                  <th>EXTENSION (END DATE)</th> 
                  <th>RESPONSIBILITY CENTER</th>
                  <th>ACCOUNTABLE</th> 
                  <th>CONSULTED</th> 
                  <th>INFORMED</th>
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
                  <th>REMAINING MONTHS</th> 
                  <th>EXTENSION (END DATE)</th> 
                  <th>RESPONSIBILITY CENTER</th>
                  <th>ACCOUNTABLE</th> 
                  <th>CONSULTED</th> 
                  <th>INFORMED</th>
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
			  echo "<td>".$res['year']." &nbsp; Years &nbsp;".$res['month']." &nbsp; Months &nbsp;".$res['day']." &nbsp; Days</td>"; 
			  echo "<td>".$res['EXTENSIONENDDATE']."</td>"; 
			  echo "<td>".$res['RESPONSIBILITYCENTER']."</td>"; 
			  echo "<td>".$res['ACCOUNTABLE']."</td>";  
			  echo "<td>".$res['CONSULTED']."</td>"; 
			  echo "<td>".$res['INFORMED']."</td>"; 
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
                    </div> 
                    
                    
                      <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="paywater" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #f0f0f0;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Process payments</h4>
                                        </div>
                                        <div class="modal-body">
  <form class="form-horizontal" action="pmt/pmt_processone.php" method="POST" style="height:auto; font-weight:normal;">  
 
 
 <div class="col-sm-6" style="margin-left: -13px;">
  <table class="table table-striped" style="background-color:#fff; margin-top:0px; ">
   <thead>
   <tr>  
    <th style="width:40%; border:0px;">Payment date</th>
	<td style="width:60%;border:2px solid #FFF;">
    <input type="date" name="PAYMENTDATE" id="PAYMENTDATE" value="<?php echo date('y-m-d'); ?>"  
   style="width:100%; text-align:left;background-color:#FFF; height:20px;"></td>  						
   </tr>
  <tr>
 </tbody>
 </table>  
 
  <table class="table table-striped" style="background-color:#fff; margin-top:-15px; ">
   <thead>
   <tr>  
   <th style="width:40%;border:0px;">Payment s/n</th> 
	<td style="width:60%;border:2px solid #FFF;"><input type="text" name="PMTSERIALID" id="PMTSERIALID" value="<?php echo uniqid();?>"  
    style="width:100%; text-align:left;background-color:#FFF;"></td>  					
   </tr>
  <tr>
 </tbody>
 </table> 
 
</div>

  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-15px; ">
   <thead>
   <tr> 
   <th style="width:100%;border:0px;">Payment quater</th>      
   </tr>
  <tr>
 </tbody>
 </table>
         
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr>     
	<td style="width:100%;border:2px solid #fff;">
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
    						
  
          
    <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-15px; ">
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
	<td style="width:100%;border:2px solid #fff;">
    <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="CHEQUE" checked />
    <label> CHEQUE </label>
     <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="EFT" />
    <label> EFT </label>
     <input type="radio" name="PAYMENTTYPE" id="PAYMENTTYPE" value="IFMS" />
    <label> IFMS </label> 
     </td>   
   </tr>
  <tr>
 </tbody>
 </table>
  
   
  
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:0px; ">
   <thead>
   <tr>  
   <th style="border:20px;width:20%;">User initials</th> 
	<td style="width:80%;border:2px solid #fff;"><input type="text" name="USERINITIALS" id="USERINITIALS"  value="<?php echo $nameofuser; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td>  
   </tr>
  <tr>
 </tbody>
 </table> 
  
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-15px; ">
   <thead>
   <tr>  
   <th style="border:2px solid #fff;width:20%;">Title</th> 
	<td style="border:2px solid #fff;width:80%;"><input type="text" name="USERTITLE" id="USERTITLE"  value="<?php echo $desc; ?>"  readonly=""
    style="width:100%; text-align:left;background-color:#FFF; border:0px;"></td> 
							
   </tr>
  <tr>              
 </tbody>
 </table> 
 
 <table class="table table-striped" style="background-color:#fff; margin-top:-15px; ">
   <thead>
   <tr>  
   <th style="border:2px solid #fff;width:20%;">User PFN</th> 
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

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">

      </div>
      <center> <strong>Copyright &copy; 2017  Naguru Teenage Information and Health Center</strong> All rights
    reserved.</center>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
<!-- Morris.js charts -->
<script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../timepicker/bootstrap-timepicker.min.js"></script>
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
</body>
</html>
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>

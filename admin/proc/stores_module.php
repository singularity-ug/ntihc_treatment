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
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
 
</head> 
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('config.php');
  ?>

  <header class="main-header">
    <nav class="navbar navbar-static-top"> 
        <div class="navbar-header">
          <a href="../sys_dashboard.php" class="navbar-brand"><b>Dashboard</b> </a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav"> 
            <li><a href="../admin_user.php" class="button5" > Home<span class="sr-only">(current)</span></a></li>
            <li><a href="stores_module.php" class="button5" > Stores module<span class="sr-only">(current)</span></a></li> 
           
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="str_allitems_report.php">Stock reconciliation report</a></li> 
                <li><a href="str_allitems_datatable.php">Monthly stock datatable</a></li>
                 <li><a href="str_alldonations_report.php">Donations report</a></li>  
                <li class="divider"></li> 
            <li><a href="str_itemstracker.php" > Items tracker<span class="sr-only">(current)</span></a></li>
            <li><a href="str_expirytracker.php"> Expiry tracker<span class="sr-only">(current)</span></a></li>
              </ul>
            </li>
          </ul>
  
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav"> 
                  
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar--> 
              <li><a href="../../index.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>

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
  <div class="row" style="background-color:#fff;">
       <!-- Content Header (Page header) -->
    <br>
    <div class="col-sm-3" style="height:auto; background-color:;">

               <div class="box-group" id="accordion">
                 <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                 <div class="panel box box-primary">
                   <div class="box-header with-border" style="text-align:center; background-color:#ecf0f5;">
                     <h4 class="box-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                   
                      <span class="glyphicon glyphicon-user" style="font-size:16px;"><b>Welcome:</b></span>
                      <B style="font-size:11px;"> &nbsp <?php echo $nameofuser; ?>  </B>
                       </a>
                     </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in" style="background-color: #ecf0f5;">

                       <div class="progress">
                   	  <div class="progress-bar progress-bar-success" style="width: 80%;  color:#fff; text-align:left; font-weight:bold;">
                       <B>Local purchase orders</b> due for delivery<span class="sr-only">45% Complete (success)</span></div> 
                   	  <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   	  </div>

                       <br>
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
               
            
                  <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>DATE</th>
                     <th>LPO.NO.</th> 
                     <th>ACTION</th>
			         <th> </th>
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
              echo '<td>  &nbsp
              <a id="2__'.$dts.'" href="javascript:void(0)" onclick="getprocform(this.id)" data-toggle="tooltip" title="View LPO"
              <span class="glyphicon glyphicon-th"> </span></a> 
              </td>';
			  echo "<td><a href=\"lpo_general_print.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print</a> |
			   <a href=\"str-goods.php?ORDERSERIALID=$res[ORDERSERIALID]\">Recieve</a> </td>";
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
                                <span> Pending supplies </span>
                                
                            </a> 
                </th> 
				 
		           
				<th style="width:33.3333333%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i> 
                                <span class="label label-success">
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

							</span>
                            </a>
                  </th>   
				  
				<th style="width:33.3333333%;border:2px solid #a9abae; background-color:#ecf0f5;">  
                            <a class="quick-btn" href="#" style=" border-radius:5px;background-color:#fff;"> 
                                <i class="icon-check icon-2x"></i>
                                <span>...... </span>
                                <span class="label label-warning">
								<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

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
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

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
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

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
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

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
  </form>
           <div class="progress">
           <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
            <b> New approved store requisitions</b> <span class="sr-only">35% Complete (success)</span></div>
           <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
           </div>
           <p></p>
            <table id="app1" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;background-color:ecf0f5;">
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
			  AMOUNT, SUM(AMOUNT),ORDERTYPE,CONFIRMATIONOFREQUEST,APPBYNAME,AUTBYNAME
			  FROM outgoingorders WHERE REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST = 'CONFIRMED' AND APPROVAL ='REVIEWED AND APPROVED'
			  AND STOCKISSUANCESTATUS ='PENDING' GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsy = $res['ORDERTYPE']."***".$res['ORDERSERIALID'];
              echo "<tr>";
               echo "<td>".$res['APPBYDATE']."</td>";
               echo "<td>".$res['ORDERSERIALID']."</td>";   
               echo "<td>".$res['REQUESTINGUNIT']."</td>";   
			  echo "<td>&nbsp;&nbsp;&nbsp;<a href=\"../../dispenser/str_reqn_updateorder.php?ORDERSERIALID=$res[ORDERSERIALID]\">Issue</a> |
			  <a href=\"../../dispenser/str_reqn_printstandardminxtra.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print</a>  
			    </td>";
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
                       url     : '../../dispenser/str_viewrequisition.php.php?q='+odno,
                       success : function(data){
                                $('#getintfucker').html(data);
								$("#outfuc").modal("show");
                                 }
               });
               }

          </script> 
       
 
		</div> 
		<div class="col-sm-9" style="height:auto;"> 

        <div class=""  id="proc_requisition" >  </div>
                     <script>

               function getprocform(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'lpo_view.php?q='+odno,
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
          <li class="active"><a href="#ordex" data-toggle="tab" style="background-color: #ecf0f5; border-radius: 11px;"> 
          <div class="small-box bg-grey-gradient" style="background-color: #fff; border-radius: 11px;">
         <center class="button5"> <img src="str_icns/get.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href=<button class="" data-toggle="modal"  data-target="#intex"></button> Items <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div> </li>
        <!-- ./col -->     		   
		   
		   <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#comtex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient" style="background-color: #fff; border-radius: 11px;">
          <center class="button5"> <img src="str_icns/order_tracking_online-512.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href="str_goodsrecievenote.php" class="small-box-footer">Recievables <i class=" "></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->          
       
       
      <div class="col-lg-2 col-xs-4">
          <!-- small box -->
           <li><a href="#suplex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient" style="background-color: #fff; border-radius: 11px;">
         <center class="button5"> <img src="str_icns/images.jpg"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href=<button class="" data-toggle="modal" data-target="#notifx"></button>Store requisition<i class=""></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->
		 
         
        <div class="col-lg-2 col-xs-4" >
          <!-- small box -->
          <li><a href="#contrex" data-toggle="tab" > 
          <div class="small-box bg-grey-gradient" style="background-color: #fff; border-radius: 11px;">
         <center class="button5"> <img src="str_icns/imagesppppp.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" >
         </center></a> 
            <div class="inner">  
            <a href="str_delnote.php" class="small-box-footer">Our deliveries <i class=""></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->
         
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#paymex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient" style="background-color: #fff; border-radius: 11px; " >
         <center class="button5"> <img src="str_icns/imageszsssss.jpg"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#dons">Donations <i class=" "></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#storex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient" style="background-color: #fff; border-radius: 11px;">
         <center class="button5"> <img src="str_icns/imagesxxxxxxxxxods.jpg"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href="proc_pdu_user.php" class="small-box-footer">Procurement <i class=" "></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->
                    </div>
                   
    
                     
                  </div>  
                </div>
                 
              </div>
			  
			  
			   <div class="tab-content" style="margin-top: -9px;">
                                <div class="tab-pane fade in active" id="ordex"> 
            <form class="form-horizontal" style="height:auto; ">
          			 <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 100%;  color:#000; text-align:center; font-weight:bold; background-color:#FFF;">
                 Store items<span class="sr-only">35% Complete (success)</span></div> 
                   </div>   <p></p>					  
				 <table id="example3" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>TWEAK</th>
                     <th>ID</th>
                     <th>DESCRIPTION</th>
                     <th>CATEGORY</th> 
                     <th>UNIT OF MEASURE</th>
			         <th>UNIT COST</th> 
                     <th>BALANCE IN STOCK</th> 
                     <th>STOCK VALUE</th>
			         <th>ACTION</th>
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT id,DESCRIPTION,CATEGORY, UNITOFMEASURE, STOCKTAKEN, QTYRECIEVED,QTYISSUED, UNITCOST,
			                                         (STOCKTAKEN + QTYRECIEVED -QTYISSUED) as instock, (STOCKTAKEN + QTYRECIEVED -QTYISSUED) *UNITCOST as stockval
			                                         FROM items WHERE DISCONTINUE = 'DISABLED' ORDER BY CATEGORY DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['DESCRIPTION']."***".$res['CATEGORY'];
              echo "<tr>";
			   echo '<td> 
              <a id="2__'.$dts.'" href="javascript:void(0)" onclick="newitem(this.id)" data-toggle="tooltip" title="New"
              <span class="glyphicon glyphicon-plus"> </span></a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a id="3__'.$dts.'" href="javascript:void(0)" onclick="getdetailsextension(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-th-list"> </span></a>
              </td>';
			  echo "<td>".$res['id']."</td>";
              echo "<td>".$res['DESCRIPTION']."</td>";
              echo "<td>".$res['CATEGORY']."</td>"; 
			  echo "<td>".$res['UNITOFMEASURE']."</td>";
              echo "<td>".$res['UNITCOST']."</td>"; 
              echo "<td>".$res['instock']."</td>";
              echo "<td>".$res['stockval']."</td>"; 
			   echo "<td><a href=\"str_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Truncate</a></td>";	 
             } 
              ?>
             </tbody>
             </table>
              
            	                       
                     
			<div class=""  id="viewdetails" >  </div>
                     <script>

               function viewdetails(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'str_itemdetails.php?q='+odno,
                            success : function(data){
                                     $('#viewdetails').html(data);
     								$("#proviewx").modal("show");
                                      }
                    });
                    }

               </script>
                                </div>                 
                           
                          <div class="tab-pane fade" id="comtex">
                       <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 100%;  color:#000; text-align:center; font-weight:bold; background-color:#FFF;">
                   Recieved Purchases / Dontions by order serial number<span class="sr-only">35% Complete (success)</span></div> 
                   </div>         <p></p>	
                                     <table id="exrecivbs" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;"> 
                  <thead>
                  <tr>
                    
                     <th>DATE</th> 
                     <th>SERIAL.NO.</th>
                     <th>RECIEVED.FROM</th>
                     <th>LPO.NO.</th> 
                     <th>INVOICE.NO.</th> 
                     <th>ORDER.COST</th> 
                     <th>RECIEVED.AS</th>   
			         <th>ACTION</th> 
                      
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM recievables WHERE STOCKTYPE='RECIEVABLES' GROUP BY ORDERSERIALID ORDER BY GOODSRECIEVEDDATE,ORDERSERIALID DESC");

             while($res = mysqli_fetch_array($result)) {
             $sdtsrr = $res['id']."***".$res['ORDERSERIALID']."***".$res['LPONO']."***".$res['ORDERTYPE'];
              echo "<tr>"; 
			  echo "<td>".$res['GOODSRECIEVEDDATE']."</td>";
			  echo "<td>".$res['ORDERSERIALID']."</td>";
			  echo "<td>".$res['SERVICEPROVIDER']."</td>";
              echo "<td>".$res['LPONO']."</td>"; 
			  echo "<td>".$res['INVOICENO']."</td>";
			  echo "<td>".$res['TOTALCOST']."</td>"; 
			  echo "<td>".$res['GOODSRECEIVABLETYPE']."</td>";    
			  echo "<td><a href=\"str_goodsrn_update.php?ORDERSERIALID=$res[ORDERSERIALID]\">Update</a>  &nbsp |
			 <a href=\"str_goodsrvn_print.php?ORDERSERIALID=$res[ORDERSERIALID]\">grn</a> &nbsp;|
			 <a href=\"lpo_gen_recievables.php?ORDERSERIALID=$res[ORDERSERIALID]\">lpo</a>
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
                                
                   <div class="tab-pane fade" id="suplex">
                   <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 100%;  color:#000; text-align:center; font-weight:bold; 
                   background-color:#FFF; text-transform:uppercase;">
                   Standard requisitions for inhouse and facility orders | <b>issued orders </b><span class="sr-only">35% Complete (success)</span></div> 
                   </div>                    
                                
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
			 AND STOCKISSUANCESTATUS ='ISSUED' GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

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
			  echo "<td><a href=\"str_reqn_printstandard.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print standard</a> 
			    </td>";
             }
              ?>
             </tbody>
             </table>	
                  
               <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 100%;  color:#000; text-align:center; font-weight:bold; 
                   background-color:#FFF;text-transform:uppercase; text-transform:uppercase;">
                   General requisitions for inhouse and facility orders <span class="sr-only">35% Complete (success)</span></div> 
                   </div>                        
              <table id="exdynam2" class="table table-table tabled" style="font-weight:normal; font-size:9px; width:100%;"> 
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

             $result = mysqli_query($mysqli, "SELECT * FROM outgoingorders WHERE REQUISTIONTYPE='GENERAL' GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

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
			  echo "<td> <a href=\"str_reqn_printgeneral.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print general</a>
			    </td>";
             }
              ?>
             </tbody>
             </table>	                       
                                    
                                </div> 
                                
                                <div class="tab-pane fade" id="contrex">
                                   <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 100%;  color:#000; text-align:center; font-weight:bold; background-color:#FFF;
                    text-transform:uppercase;">
                   Delivery notes for goods issued to facilities<span class="sr-only">35% Complete (success)</span></div> 
                   </div>     
                                 <table id="exdelivx" class="table table-table tabled" style="font-weight:normal; font-size:9px; width:100%;"> 
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

             $result = mysqli_query($mysqli, "SELECT * FROM outgoingorders WHERE ORDERTYPE = 'FACILITY' GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

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
			  echo "<td><a href=\"str_reqn_printdelnote.php?ORDERSERIALID=$res[ORDERSERIALID]\">print</a>  
			    </td>";
             }
              ?>
             </tbody>
             </table>	
                             
                                </div> 
                                
                                <div class="tab-pane fade" id="paymex">
                                      <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 100%;  color:#000; text-align:center; font-weight:bold; background-color:#FFF; 
                   text-transform:uppercase;">
                   Recieved donations / Valuation and budget codification<span class="sr-only">35% Complete (success)</span></div> 
                   </div>   
                    <div class=""  id="codify" >  </div>
                <script>

          function codify(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'str_codify.php?q='+odno,
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
                     <th>SERIAL NO.</th>  
                     <th>DATE</th> 
                     <th>DESCRIPTION</th> 
                     <th>UOM</th>
			         <th>DONATED BY</th>  
                     <th>QTY</th>
                     <th>UNIT.PRICE</th>  
                     <th>BASIS.OF.VALUATION</th> 
                     <th>CODE</th>
			         <th>ACTION</th>  
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT id,ORDERSERIALID,GOODSRECIEVEDDATE, DESCRIPTION,STORELOCATION, UNITOFMEASURE, SERVICEPROVIDER, QTYRECIEVED, UNITCOST,
			                                  (QTYRECIEVED * UNITCOST) as amountex, BASISOFVALUATION, BUDGETCODE 
											  FROM recievables WHERE GOODSRECEIVABLETYPE = 'DONATION' ORDER BY GOODSRECIEVEDDATE DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsqq = $res['ORDERSERIALID']."***".$res['id']."***".$res['SERVICEPROVIDER'];
              echo "<tr>";
			 
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['ORDERSERIALID']."</td>"; 
              echo "<td>".$res['GOODSRECIEVEDDATE']."</td>"; 
			  echo "<td>".$res['DESCRIPTION']."</td>";
              echo "<td>".$res['UNITOFMEASURE']."</td>"; 
              echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
              echo "<td>".$res['QTYRECIEVED']."</td>"; 
			  echo "<td>".$res['UNITCOST']."</td>"; 
			  echo "<td>".$res['BASISOFVALUATION']."</td>"; 
              echo "<td>".$res['BUDGETCODE']."</td>";   
			  echo '<td>   
              <a id="3__'.$dtsqq.'" href="javascript:void(0)" onclick="codify(this.id)" data-toggle="tooltip" title="Add value"
              <span class="glyphicon glyphicon-edit"> </span></a>  
              </td>';
             } 
              ?>
             </tbody>
             </table>
              
                    
                                </div> 
                                
                                 <div class="tab-pane fade" id="storex">
                              
                    <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 100%;  color:#000; text-align:center; font-weight:bold; background-color:#FFF;">
                    Recieved purchases for as per LPO / Invoice number<span class="sr-only">35% Complete (success)</span></div> 
                   </div>    <P> </P>       
                  <table id="expurchases" class="table table-table tabled" style="font-weight:normal; font-size:9px; width:100%;"> 
                     <thead>
            <tr>
                <th>DATE RECIEVED</th> 
                <th>DESCRIPTION</th>  
                <th>UOM</th>
                <th>LOCATION</th>
                <th>SUPPLIER</th>
                <th>LPO.NUMBER</th>
                <th>INVOICE.NO.</th>
                <th>QTY</th>
                <th>UNIT.PRICE</th>
                <th>AMOUNT</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>DATE RECIEVED</th> 
                <th>DESCRIPTION</th>  
                <th>UOM</th>
                <th>LOCATION</th>
                <th>SUPPLIER</th>
                <th>LPO.NUMBER</th>
                <th>INVOICE.NO.</th>
                <th>QTY</th>
                <th>UNIT.PRICE</th>
                <th>AMOUNT</th>
				
            </tr>
        </tfoot>
        <tbody>
             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT id,GOODSRECIEVEDDATE, DESCRIPTION,STORELOCATION, UNITOFMEASURE, SERVICEPROVIDER, LPONO, INVOICENO, QTYRECIEVED, UNITCOST,
			                                  (QTYRECIEVED * UNITCOST) + (QTYRECIEVED * UNITCOST *TAX/100) as amountex,  BASISOFVALUATION, BUDGETCODE 
											  FROM recievables WHERE GOODSRECEIVABLETYPE = 'PURCHASES' ORDER BY GOODSRECIEVEDDATE DESC");

             while($res = mysqli_fetch_array($result)) {
             $sdtsrr = $res['id']."***".$res['LPONO']."***".$res['INVOICENO'];
              echo "<tr>"; 
			  echo "<td>".$res['GOODSRECIEVEDDATE']."</td>";
			  echo "<td>".$res['DESCRIPTION']."</td>";
			  echo "<td>".$res['UNITOFMEASURE']."</td>"; 
			  echo "<td>".$res['STORELOCATION']."</td>";
              echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
			  echo "<td>".$res['LPONO']."</td>"; 
			  echo "<td>".$res['INVOICENO']."</td>";   
			  echo "<td>".$res['QTYRECIEVED']."</td>"; 
			  echo "<td>".$res['UNITCOST']."</td>";   
			  echo "<td>".$res['amountex']."</td>";   
             }
              ?>
             </tbody>
             </table>	 
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
 
			 <div class=""  id="newitem" >  </div>
                <script>

          function newitem(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'newitem.php?q='+odno,
                       success : function(data){
                                $('#newitem').html(data);
								$("#itex").modal("show");
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
                        <div class="modal" id="notifx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Generate requisition </h4>
                                        </div>
                                        <div class="modal-body">
 
        <form id="form1" class="form-horizontal" action="../../dispenser/incomingdrugs_minprocessmain.php" method="POST" style="height:auto; font-weight:normal;">  
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
                         <option value="STORES"> </option> 
                         <option>DISPENSARY</option>
                         <option>LABORATORY</option> 
                         <option>FINANCE AND ADMIN</option> 
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
				style="width:100%; background-color:#fff;"></td> 
                 
               
			  <th style="width:20%; text-align:left;border:0px;">Facility name</th>
                <td style="width:30%;border:0px;"><input type="text" name="FACILITYNANE" id="FACILITYNANE" value="NTIHC" required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td>
                  
                  
			 </tr>             
            </table>
            <input type="hidden"id="REQUISTIONTYPE" name="REQUISTIONTYPE" value="STANDARD"  > 
            <input type="hidden"id="INITIATIONUNIT" name="INITIATIONUNIT" value="STORES"  > 
            <input type="hidden"id="REQBY" name="REQBY" value=" <?php echo $desc; ?> "  >
            <input type="hidden"id="REQBYNAME" name="REQBYNAME" value=" <?php echo $nameofuser; ?> "> 
            <input type="hidden"id="REQBYDATE" name="REQBYDATE" value="<?php echo date('y-m-d'); ?>"> 
            
             <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:20; text-align:left;border:0px;">To be approved by</th>
                <td style="width:80%;border:0px;"><select id="CONFIRMERACCOUNT" name="CONFIRMERACCOUNT"  required="required"  
				style="width:100%;  background-color:#fff;height: 21px;">
                  <option value="Undefined"> <option>
                  <?php   echo $stdd; ?> 
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
                    
                    

            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="dons" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:20px; text-align:center;">IN-KIND CONTRIBUTION / DONATIONS  </p>

             <table id="exdons" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>DATE RECIEVED</th>
                <th>DESCRIPTION</th> 
                <th>LOCATION</th> 
                <th>UNIT.OF.MEASURE</th>
                <th>DONATED BY</th>
                <th>QTY</th>
                <th>UNIT.PRICE</th>
                <th>AMOUNT</th>
				<th>BASIS.OF.VALUATION</th>
                <th>BUDGET.CODE</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>DATE RECIEVED</th>
                <th>DESCRIPTION</th> 
                <th>LOCATION</th> 
                <th>UNIT.OF.MEASURE</th>
                <th>DONATED BY</th>
                <th>QTY</th>
                <th>UNIT.PRICE</th>
                <th>AMOUNT</th>
				<th>BASIS.OF.VALUATION</th>
                <th>BUDGET.CODE</th> 
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

		               else{     return '<td style="background-color:#FFE065;">'.$str123.'</td>'; 	}
	}

}
  

require('connect/config.php');
$sql = "SELECT GOODSRECIEVEDDATE, DESCRIPTION,STORELOCATION, UNITOFMEASURE, SERVICEPROVIDER, QTYRECIEVED, UNITCOST,(QTYRECIEVED * UNITCOST) as amountex,
        BASISOFVALUATION, BUDGETCODE FROM recievables WHERE GOODSRECEIVABLETYPE = 'DONATION' ORDER BY GOODSRECIEVEDDATE DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["GOODSRECIEVEDDATE"].'</td>'.
                 '<td>'.$row["DESCRIPTION"].'</td>'. 
				 getIndicator($row["STORELOCATION"]). 
                 getIndicator($row["UNITOFMEASURE"]). 
                 getIndicator($row["SERVICEPROVIDER"]).
			     getIndicator($row["QTYRECIEVED"]).
                 getIndicator($row["UNITCOST"]).
				 getIndicator($row["amountex"]). 
                 getIndicator($row["BASISOFVALUATION"]).
                 '<td>'.$row["BUDGETCODE"].'</td></tr>';

 }

?>

	  </tbody>
  </table> 
   

           <div class="col-sm-12" >
           <div class="panel-body" >
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
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

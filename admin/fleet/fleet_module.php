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
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
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
     $('#expex').DataTable( {
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
     $('#expexun').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#exdelivx').DataTable( {
	  "iDisplayLength": 20,
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
	  "iDisplayLength": 20,
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
     $('#exdons').DataTable( {
	  "iDisplayLength": 15,
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
	  "iDisplayLength": 20,
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
	  "iDisplayLength": 20,
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
          <a href="" class="navbar-brand"><b>FLEET MGT</b> </a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav"> 
          <li><a href="fuel_mgt.php" class="button5" > Users<span class="sr-only">(current)</span></a></li>
            <li><a href="fuel_admin.php" class="button5" > Fuel<span class="sr-only">(current)</span></a></li>
             <li><a href="fleet_module.php" class="button5" > General<span class="sr-only">(current)</span></a></li>
            <li><a href="fleet_logbook.php" class="button5" > Log book<span class="sr-only">(current)</span></a></li> 
             <li><a href="fleet_cordination_tracker.php" class="button5" > Tracker<span class="sr-only">(current)</span></a></li> 
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
      <!-- title row -->
      <div class="row">
  <div class="col-md-4">  
		
            <div class="box-header with-border" style="background-color: #464646;border-radius: 1px;">
              <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right" style="margin-top:-10px;">
              <li class="active"><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#cardx "> </button><b> Add vehicle</b></a></li>
               <li class="active"><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#dons "> 
                  </button><b style="color:green">Vehicles register</b></a></li>
              
              <li><a href="#tab_2-2" data-toggle="tab"> </a></li>  
               
              </li>
              <li class="pull-left header"><i class="fa fa-th"></i> </li>
            </ul>
            
             <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;background-color: #ecf0f5; ">  
				   <a class="quick-btn" href="#" style=" border-radius:5px;  ">
                                <i class="icon-check icon-2x"></i>
                                <span> Running vehicles</span>
                                <span class="label label-success" style="font-size: 13px; ">
<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM motorisedequipments WHERE FUNCTIONALSTATUS ='RUNNING'")) {        
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
				 
		           
				<th style="width:30%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span> Under repair</span>
                                <span class="label label-primary" style="font-size: 13px; ">
			<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM motorisedequipments WHERE FUNCTIONALSTATUS ='UNDER REPAIR'")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    		 	</span>
                            </a>
                  </th>  
                  
              <th style="width:35%; border:2px solid #a9abae; background-color:#ecf0f5"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span>Down vehicles</span>
                                <span class="label label-danger" style="font-size: 13px; ">
	 
<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM motorisedequipments WHERE FUNCTIONALSTATUS ='DOWN'")) {        
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
			    
				  
                <th style="width:35%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                 <span>Vehicles available</span>
                                <span class="label label-success" style="font-size: 13px; ">
			<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM motorisedequipments WHERE AVAILABILITYDISPOSAL ='AVAILABLE'")) {        
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
                <th style="width:30%;border:2px solid #a9abae; background-color:#ecf0f5;"> </th>  
				<th style="width:35%;border:2px solid #a9abae; background-color:#fff;">  
                            <a class="quick-btn" href="#" style=" border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span>  Pending allocations</span>
                                <span class="label label-info" style="font-size: 13px; ">
					<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM motorisedequipments WHERE VEHICLEALLOCATIONSTATUS ='PENDING'")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    		</span>
                            </a>
							
                </th>  
				  
              </tr>
			  </table> 
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
			  <div class="panel-body" style="margin-top: 0px;">
             
     
             <table id="example3" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th style="background-color:#ecf0f5; font-size:10px; width:10%;">S/NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:30%;">REG'N.NO.</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;width:40%;">TYPE</th> 
                     <th style="background-color:#ecf0f5;font-size:10px; width:40%;">ALLOCATION</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;width:20%;">ACTION</th>  
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5; font-size:10px; width:10%;">S/NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:30%;">REG'N.NO.</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;width:40%;">TYPE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;width:40%;">DRIVER  </th> 
                     <th style="background-color:#ecf0f5; font-size:10px;width:20%;">ACTION</th>    
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM motorisedequipments ORDER BY REGISTRATIONNO DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['id']."***".$res['REGISTRATIONNO'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['REGISTRATIONNO']."</td>"; 
		echo "<td>".$res['TYPE']."</td>";  
		echo "<td>".$res['VEHICLEALLOCATIONSTATUS']."</td>";  
		 echo '<td>
		        <a id="311__'.$dtszs.'" href="javascript:void(0)"  onclick="getvehicle(this.id)" data-toggle="tooltip" title="Manage status" 
			  <span class="glyphicon glyphicon-ok"> </span></a> 
               &nbsp;&nbsp;&nbsp;
               <a id="211__'.$dtszs.'" href="javascript:void(0)"  onclick="allocation(this.id)" data-toggle="tooltip" title="Allocate driver"
               <span class="glyphicon glyphicon-envelope"> </span></a>
			   &nbsp;&nbsp;&nbsp;
			   <a id="311__'.$dtszs.'" href="javascript:void(0)"  onclick="getothers(this.id)" data-toggle="tooltip" title="Manage status" 
			  <span class="glyphicon glyphicon-edit"> </span></a> 
               </td>';  	
	}
	   
    ?>
	</tbody>
  </table>              
					
  
  </div>   </div>  </div>  
  
 <div class="panel panel-default">

                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #000;">

                                <div class="carousel-inner">
                                    <div class="item active">
                                    <img src="/IMMS/menu/assets/css/fleet/Slider02.png" width="614" height="240"  alt="" class="img-u image-responsive" />
                                   </div>
                                    <div class="item">
                                     <img src="/IMMS/menu/assets/css/fleet/Slider03.png" width="614" height="240" alt="" class="img-u image-responsive" /> 
                                    </div>
                                    <div class="item">
                                     <img src="/IMMS/menu/assets/css/fleet/Slider04.png" width="614" height="240"alt="" class="img-u image-responsive" />
                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div> 
  
  
  
  
  </div>  </div>  </div>  
   
      <div class=""  id="getvehicle" >  </div>
                <script>

          function getvehicle(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_vehicle.php?q='+odno,
                       success : function(data){
                                $('#getvehicle').html(data);
								$("#ouxxxddda").modal("show");
                                 }
               });
               }

          </script>  
                                     
                
   <div class=""  id="allocation" >  </div>
                <script>

          function allocation(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'driver_allocation.php?q='+odno,
                       success : function(data){
                                $('#allocation').html(data);
								$("#joyems").modal("show");
                                 }
               });
               }

          </script>  
  
  
  <div class="col-sm-4">  
                   <p></p>
         <b style="font-family:lcd; font-size:18px;"> Fleet coordination</b> &nbsp;|  <b style="color:green;">Reservation orders</b>
              <p></p>
                   <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 32%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;
                    border:2px solid #ecf0f5; border-radius:4px;"> 
                   Pending orders &nbsp; <b>
                   
                   <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Pending'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?></b>  <span class="sr-only">35% Complete (success)</span></div>
                   
                   <div class="progress-bar progress-bar-info" style="width: 1%;"> <span class="sr-only">35% Complete (success)</span></div>
                   
                   <div class="progress-bar progress-bar-success" style="width: 32%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;
                    border:2px solid #ecf0f5; border-radius:4px;"> 
                   Allocated orders &nbsp; <b>
                   <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Allocated'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                   </b> 
                   <span class="sr-only">20% Complete (warning)</span></div> 
                   
  <div class="progress-bar progress-bar-info" style="width: 1%;"> <span class="sr-only">35% Complete (success)</span></div>
                   
                   <div class="progress-bar progress-bar-success" style="width: 33%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;
                    border:2px solid #ecf0f5; border-radius:4px;"> 
                   Unsuccessful &nbsp; <b>
                   <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Rejected'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                   </b> 
                   <span class="sr-only">20% Complete (warning)</span></div> 
                                     
                   
                   
                   </div> 
                   <br>     
                    
                 
   <div class=""  id="getresorder" >  </div>
                <script>

          function getresorder(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_reservationcordination.php?q='+odno,
                       success : function(data){
                                $('#getresorder').html(data);
								$("#outxxexxxx").modal("show");
                                 }
               });
               }

          </script>         
         <table id="example2" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
         <tr>   
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:45%;">APPLICANT.NAME</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;width:25%;">TRAVEL.DATE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">PSGs</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">ACTION</th> 
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5; font-size:10px;width:10%;">NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:45%;">APPLICANT.NAME</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;width:25%;">TRAVEL.DATE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">PSGs</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">ACTION</th> 
        </tr>
        </tfoot> 
        <tbody>  
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM ftlvehiclebooking WHERE ordertype = 'Reservation' AND Allocationstatus ='Pending' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['senderaccount']."***".$res['id'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['applicantname']."</td>"; 
		echo "<td>".$res['Reservationdate_from']."</td>"; 
		echo "<td>".$res['Passengers']."</td>";  
		 echo '<td> 
			    <a id="211__'.$dtsz.'" href="javascript:void(0)"  onclick="getresorder(this.id)" data-toggle="tooltip" title="View order"
               <span class="glyphicon glyphicon-ok"> </span></a> 
               &nbsp;&nbsp;&nbsp;
               <a id="291__'.$dtsz.'" href="javascript:void(0)"  onclick="getprocform(this.id)" data-toggle="tooltip" title="View order"
               <span class="glyphicon glyphicon-off"> </span></a> 
               </td>';  	
	}
	   
    ?>
	</tbody>
  </table> 
   
  </div>
  
  <div class="col-sm-4">
      <div class=""  id="getprocform" >  </div>
                <script>

          function getprocform(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_reservation.php?q='+odno,
                       success : function(data){
                                $('#getprocform').html(data);
								$("#outxddd").modal("show");
                                 }
               });
               }

          </script>  
                 <br>                      
               <p style="font-weight:bold;"> On-site parking vehicles due for logistics re-sheduling</p>
   <table id="exdynam" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
         <tr>   
                      <th style="background-color:#ecf0f5; font-size:10px;width:25%;">VEHIUCLE.NO.</th>
                    <th style="background-color:#ecf0f5; font-size:10px;width:20%;">TYPE</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;width:35%;">DRIVER NAME</th>
                     <th style="background-color:#ecf0f5; font-size:10px;width:20%;">CONTACT</th> 
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th style="background-color:#ecf0f5; font-size:10px;width:25%;">VEHIUCLE NO.</th>
                    <th style="background-color:#ecf0f5; font-size:10px;width:20%;">TYPE</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;width:35%;">DRIVER NAME</th>
                     <th style="background-color:#ecf0f5; font-size:10px;width:20%;">CONTACT</th>   
        </tr>
        </tfoot> 
        <tbody>  
<?php 
include_once("connect/configftl.php"); 
  $date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM ftlvehiclebooking
                                 WHERE Allocationdate >='$date' AND ordertype = 'Reservation' AND Allocationstatus ='Allocated' AND Checkinstatus = 'PARKING'
								 GROUP BY Vehicleallocated ORDER BY Vehicletype DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['Emailaddress']."***".$res['id'];
		echo "<tr>";  
		echo "<td>".$res['Vehicleallocated']."</td>"; 
		echo "<td>".$res['Vehicletype']."</td>";  
		echo "<td>".$res['Drivername']."</td>";  
		echo "<td>".$res['Mobilecontact']."</td>"; 
	}
	   
    ?>
	</tbody>
  </table>   
                     
                  </div> 
                  
                <div class="col-sm-8">
                
  
  <p style="font-weight:bold;"> Todays summary of fleet / vehicles travel cost by destination</p>
   <table id="expex" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
         <tr>   
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">R/NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:10%;">TRAVEL DATE</th>
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">VEHICLE.NO.</th>  
					 <th style="background-color:#ecf0f5; font-size:10px;width:10%;">DRIVER NAME</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">DESTI NATION</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">PSG (S)</th>  
                     <th style="background-color:#ecf0f5; font-size:10px;width:5%;">CHECK IN</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">CHECK OUT</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">TIME IN</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">TIME OUT</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">DISTANCE COVERED</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">JOURNEY COST</th>
                      
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5; font-size:10px;width:10%;">R/NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:10%;">TRAVEL DATE</th>
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">VEHICLE.NO.</th>  
					 <th style="background-color:#ecf0f5; font-size:10px;width:10%;">DRIVER NAME</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">DESTI NATION</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">PSG (S)</th>  
                     <th style="background-color:#ecf0f5; font-size:10px;width:5%;">CHECK IN</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">CHECK OUT</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">TIME IN</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">TIME OUT</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">DISTANCE COVERED</th>
                      <th style="background-color:#ecf0f5; font-size:10px; width:10%;">JOURNEY COST</th>
        </tr>
        </tfoot> 
        <tbody>  
<?php 
include_once("connect/configftl.php"); 
  $date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT id, Allocationdate,Vehicleallocated,Drivername,Actualdestination,Passengers,Checkout,Checkin,timein,timeout,
                                       Mobilecontact,Emailaddress, mileagein,mileageout, (mileageout -mileagein) As dist,Costperlitre,Previousconsumptionrateperliter,
									   (mileageout -mileagein) / Previousconsumptionrateperliter * Costperlitre As travelcost
                                       FROM ftlvehiclebooking WHERE Allocationdate >='$date' AND ordertype = 'Reservation' AND Allocationstatus ='Allocated' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['Emailaddress']."***".$res['id'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['Allocationdate']."</td>"; 
		echo "<td>".$res['Vehicleallocated']."</td>"; 
		echo "<td>".$res['Drivername']."</td>";  
		echo "<td>".$res['Actualdestination']."</td>";  
		echo "<td>".$res['Passengers']."</td>";
	    echo "<td>".$res['Checkout']."</td>";  
		echo "<td>".$res['Checkin']."</td>";  
		echo "<td>".$res['timein']."</td>";
		echo "<td>".$res['timeout']."</td>";
		echo "<td>".$res['dist']." &nbsp; KM</td>"; 
		echo "<td>".$res['travelcost']."</td>"; 		
	}
	   
    ?>
	</tbody>
  </table> 
  
                </div>
                    </div> 
                    
               
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
           <form>
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

                   <div class="modal" id="cardx" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#fde986;">
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                          <h4 class="modal-title" id="myModalLabel"  style="text-align:center;"> Vehicles / motorised equipments registration form</p>
                                        </div>
                                        <div class="modal-body" style="background-color:#f9f9f9;">
                                       


          <form class="form-horizontal" action="process_newvehicle.php" method="POST" style="height:auto;">

               <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Registration number</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="REGISTRATIONNO" name="REGISTRATIONNO"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                 <th style="width:20%;border:0px;">Make</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="MAKE" id="MAKE"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
             
          
                <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
               
               
                 <th style="width:20%;border:0px;">Type</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="TYPE" name="TYPE" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                  <th style="width:20%;border:0px;">Model</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="MODEL" id="MODEL"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
              
	    
               
             <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
               
               
                 <th style="width:20%;border:0px;">color</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="COLOR" id="COLOR" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                  <th style="width:20%;border:0px;">Year of manufacture</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="YOM" id="YOM" placeholder="yyyy/mm/dd"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
              
             
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
               
               
                 <th style="width:20%;border:0px;">Power</th> 
				<th style="width:30%;border:0px;"> <input type="text"  name="POWER" id="POWER" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                  <th style="width:20%;border:0px;">Category</th> 
				<th style="width:30%;border:0px;"> <select id="CATEGORY" name="CATEGORY"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> 
                        <option> </option>
                        <option> MANAGERIAL</option>
                        <option> SERVICE</option> 
                </select>

                </th>   
                   
                   
              </tr>
			  </table> 
               

               <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                
                 <th style="width:20%;border:0px;">Seating capacity</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="SEATINGCAPACITY" id="SEATINGCAPACITY"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                  <th style="width:20%;border:0px;">Functional status</th> 
				<th style="width:30%;border:0px;"> <select id="FUNCTIONALSTATUS" name="FUNCTIONALSTATUS" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                 <option value="RUNNING"> RUNNING</option>
                        <option>DOWN </option>
                        <option>REPAIRABLE </option>
                        </select>
                 </th>   
                    
              </tr>
			  </table> 

        
                <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                 
                  <th style="width:20%;border:0px;">Fuel type</th> 
				<th style="width:30%;border:0px;"> <select name="FUELTYPE" id="FUELTYPE"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                         <option>  </option>
                         <option>DIESEL </option>
                         <option>PETROL </option>
                         </select>
                 </th>   
                 
                 <th style="width:20%;border:0px;">Consuption per KM</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="CONSUMPTIONPERKM" id="CONSUMPTIONPERKM"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 
                    
              </tr>
			  </table> 
              
 
                 <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                 
                   <th style="width:20%;border:0px;">Engine number</th> 
				<th style="width:80%;border:0px;"> <input type="text" name="ENGINENO" id="ENGINENO"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 
              </tr>
			  </table>  

                <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                 <th style="width:20%;border:0px;">Chasis number</th> 
				<th style="width:80%;border:0px;"> <input type="text" name="CHASSISNO" id="CHASSISNO"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 
                    
              </tr>
			  </table>  


                <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                 
                  <th style="width:20%;border:0px;">Odometer status</th> 
				<th style="width:30%;border:0px;"> <select name="ODOMETERSTATUS" id="ODOMETERSTATUS"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                         <option>  </option>
                         <option>OPERATIONAL</option>
                         <option>NOT OPERATIONAL</option>
                         </select>
                 </th>   
                 
                  <th style="width:20%;border:0px;">Odometer type</th> 
				 <th style="width:30%;border:0px;"> 
                  <input type="radio" class="switch-input" name="ODOMETERTYPE" value="KM" id="KM" checked="">
					<label for="KM" class="switch-label switch-label-off">KM</label>
					<input type="radio" class="switch-input" name="ODOMETERTYPE" value="HRS" id="HRS">
					<label for="HRS" class="switch-label switch-label-off">HRS</label>
					<input type="radio" class="switch-input" name="ODOMETERTYPE" value="MILES" id="MILES">
					<label for="MILES" class="switch-label switch-label-off">MILES</label>
					<span class="switch-selection"></span>
                  </th> 
                 
                    
              </tr>
			  </table> 
              
                
                 <table class="table" style="border:0px; margin-top:-23px;">
                 <tr>  
                 
                 <th style="width:20%;border:0px;">Acquisition date</th> 
				<th style="width:30%;border:0px;"> <input type="date" name="ACQUISITIONDATE" id="ACQUISITIONDATE" placeholder="yyyy / mm / dd"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px;"> </th> 
                 
                   <th style="width:20%;border:0px;">Purchase cost</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="PURCHASECOST" id="PURCHASECOST"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                   
              </tr>
			  </table> 
            
 
  <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                 
                 <th style="width:20%;border:0px;">Purchased / Leased from</th> 
				<th style="width:8s0%;border:0px;"> <input type="text"  name="SUPPLIEDBY" id="SUPPLIEDBY" 
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 
                    
              </tr>
			  </table>  
                    
               

                  <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                 
                 <th style="width:20%;border:0px;">Holding type</th> 
				 <th style="width:80%;border:0px;"> 
                   <input type="radio" class="switch-input" name="HOLDSTATUS" value="PURCHASED" id="HOLDSTATUS" checked="">
					<label for="PURCHASED" class="switch-label switch-label-off">Purchased</label>
					<input type="radio" class="switch-input" name="HOLDSTATUS" value="LEASED" id="HOLDSTATUS">
					<label for="LEASED" class="switch-label switch-label-off">Leased</label>
					<input type="radio" class="switch-input" name="HOLDSTATUS" value="PROJECT SUPPORT" id="SPECIAL PROJECT">
					<label for="SPECIAL PROJECT" class="switch-label switch-label-off">Project support</label>  
					<span class="switch-selection"></span>
                  </th> 
              
              </tr>
			  </table> 
                  <input type="hidden" name="ASSETIMAGE" id="ASSETIMAGE"style="margin-top: -18px;margin-left: 0px;width: 166px;"/> 
                
     
              
              
	      <div class="col-sm-12" >
         <br>
         <center><input type="submit" name="button" id="button" value="Save record" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
         </form>
         </div>

                                        <div class="modal-footer">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
    

            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="dons" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4839;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:20px; text-align:center;">VEHICLES / MOTORISED EQUIPMENTS REGISTER </p>

             <table id="exdons" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S/NO.</th>
                <th>REGISTRATION.NO.</th>
                <th>MAKE</th> 
                <th>TYPE</th> 
                <th>ENGINE.NO</th>
                <th>CHASSIS.NO</th>
                <th>YOM</th>
                <th>AGE</th>
                <th>CATEGORY</th>
                <th>CONSUMPTION</th>
				<th>FUNCTIONAL.STATUS</th>
                <th>GENERAL.STATUS</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S/NO.</th>
                 <th>REGISTRATION.NO.</th>
                <th>MAKE</th> 
                <th>TYPE</th> 
                <th>ENGINE.NO</th>
                <th>CHASSIS.NO</th>
                <th>YOM</th>
                <th>AGE</th>
                <th>CATEGORY</th>
                <th>CONSUMPTION</th>
				<th>FUNCTIONAL STATUS</th>
                <th>GENERAL STATUS</th> 
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
$sql = "SELECT id, REGISTRATIONNO, MAKE, TYPE, ENGINENO, CHASSISNO, CURDATE(), YOM, TIMESTAMPDIFF(YEAR,YOM,CURDATE()) AS age ,
			                                        CATEGORY, FUNCTIONALSTATUS, CONSUMPTIONPERKM, AVAILABILITYDISPOSAL 
			                                        FROM motorisedequipments ORDER BY id DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["id"].'</td>'.
				 getIndicator($row["REGISTRATIONNO"]).  
                 getIndicator($row["MAKE"]).  
				 getIndicator($row["TYPE"]).  
                 getIndicator($row["ENGINENO"]).
			     getIndicator($row["CHASSISNO"]).
				 getIndicator($row["YOM"]).  
				 getIndicator($row["age"]).  
				 getIndicator($row["CATEGORY"]).
				 '<td>'.$row["CONSUMPTIONPERKM"].' &nbsp;KM PER LTR</td>'. 
				 getIndicator($row["FUNCTIONALSTATUS"]). 
                 '<td>'.$row["AVAILABILITYDISPOSAL"].'</td></tr>';


 }

?>

	  </tbody>
  </table> 
   

           <div class="col-sm-12" >
           <div class="panel-body" >
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#f9f9f9; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                            
                           <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="outx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4839;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body"> 
                                        
                                         
                              
                               
                               </div>
                                        <div class="modal-footer" style="background-color:#f9f9f9; color:#ffffff;">
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
    
  <script src="../../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>   
  <script src="../../assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
 <script src="../../assets/plugins/jasny/js/bootstrap-inputmask.js"></script>

</body>
</html>

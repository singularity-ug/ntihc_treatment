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

  $("#FUELCARDNAME"+num).val(data[2]);
  $("#ONLOADFUELAVAILABLE").val(data[2]); 
     
}


function bronald(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "fuel_sesarchcard.php",
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
     $('#exmen').DataTable( {
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
     $('#examX').DataTable( {
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
     $('#exdons').DataTable( {
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
		
            <div class="box-header with-border" style="background-color: #ecf0f5;border-radius: 1px;">
              <div class="nav-tabs-custom" style="margin-top:-25px;">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Issue fuel</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Review</a></li> 
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Options<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  
                  <li role="presentation" class="divider"></li> 
                </ul>
              </li>
              <li class="pull-left header"><i class="fa fa-th"></i> </li>
            </ul>
            <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:2px solid #a9abae;background-color:#ecf0f5;">  
				   <a class="quick-btn" href="#" style=" border-radius:5px;  ">
                                <i class="icon-check icon-2x"></i>
                                <span> In line</span>
                                <span class="label label-danger" style="font-size: 13px; ">
<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='PENDING' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
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
				 
		           
				<th style="width:25%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span> Pending</span>
                                <span class="label label-success" style="font-size: 13px; ">
			<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='PENDING' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
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
				  
                <th style="width:25%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                 <span> Review</span>
                                <span class="label label-success" style="font-size: 13px; ">
			<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
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
                  
				<th style="width:25%;border:2px solid #a9abae; background-color:#ecf0f5;">  
                            <a class="quick-btn" href="#" style=" border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span>Issuance</span>
                                <span class="label label-info" style="font-size: 13px; ">
					<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT REGISTRATIONNO FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' GROUP BY REGISTRATIONNO")) {        
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
                <div class=""  id="getdetailsextension" >  </div>
                <script>

          function getdetailsextension(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel_issue.php?q='+odno,
                       success : function(data){
                                $('#getdetailsextension').html(data);
								$("#outxzz").modal("show");
                                 }
               });
               }

          </script>  
               
             	 <table id="example2" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>NO.</th>
                     <th>DATE</th> 
                     <th>REGN.NO</th> 
                     <th>LITRES</th>
                     <th>ACTION</th> 
                       
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("connect/configftl.php");

             $result = mysqli_query($mysqli, "SELECT * FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                           AND  FUELISSUANCESTATUS = 'PENDING' ORDER BY DATECREATED DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['REGISTRATIONNO']."***".$res['id']."***".$res['DATECREATED'];
              echo "<tr>";
			 
			  echo "<td>".$res['id']."</td>";
              echo "<td>".$res['DATECREATED']."</td>"; 
              echo "<td>".$res['REGISTRATIONNO']."</td>";  
			  echo "<td>".$res['LITRE']."</td>";  
			    echo '<td>  
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a id="13__'.$dts.'" href="javascript:void(0)" onclick="getdetailsextension(this.id)" data-toggle="tooltip" title="Issue fuel"
              <span class="glyphicon glyphicon-ok"> </span></a>
              </td>';	 
             } 
              ?>
             </tbody>
             </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                  <table id="example1" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr> 
                     <th>APPROVAL.DATE</th> 
                     <th>ORDER.NO</th> 
                     <th>APPROVED.BY</th>
                     <th>ACTION</th>  
                  </tr>
                  </tfoot> 
                  <tbody>
                   

             <?php
             include_once("connect/configftl.php");

             $result = mysqli_query($mysqli, "SELECT * FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'WAITING' 
			                                  FUELLOADICON = 'USAGE' GROUP BY SERIALNO ORDER BY DATECREATED DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsf = $res['id']."***".$res['SERIALNO']."***".$res['REGISTRATIONNO'];
              echo "<tr>";
			  echo "<td>".$res['ARDATE']."</td>"; 
			  echo "<td>".$res['SERIALNO']."</td>"; 
              echo "<td>".$res['ARBY']."</td>";   
			    echo '<td> 
              <a id="20__'.$dtsf.'" href="javascript:void(0)" onclick="oraclex(this.id)" data-toggle="tooltip" title="View requisition"
              <span class="glyphicon glyphicon-share"> </span></a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a id="30__'.$dtsf.'" href="javascript:void(0)" onclick="reviewfuex(this.id)" data-toggle="tooltip" title="Review"
              <span class="glyphicon glyphicon-th"> </span></a>
              </td>';	 
             } 
              ?>
             </tbody>
             </table>
              </div> 
              <!-- /.tab-pane -->
             </div>
              
                <div class=""  id="reviewfuex" >  </div>
                <script>

          function reviewfuex(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel_review.php?q='+odno,
                       success : function(data){
                                $('#reviewfuex').html(data);
								$("#ouexplode").modal("show");
                                 }
               });
               }

          </script>  
              
            <!-- /.tab-content -->
          </div>
          
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
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
            
      
              
            
  <div class="col-sm-8"> 
  
   <div class=""  id="oraclex" >  </div>
                <script>

          function oraclex(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel_viewrequisition.php?q='+odno,
                       success : function(data){
                                $('#oraclex').html(data);
								$("#explodefuel").modal("show");
                                 }
               });
               }

          </script> 
              <br>
       <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 10%;  color:#fff; text-align:left; font-weight:bold; background-color:#ecf0f5;">
                   <li class="active"><a href=<button class="" data-toggle="modal"  data-target="#card " style="border:2px solid #3c8dbc ;"> </button><b> Fuel cards</b></a></li>
                     <span class="sr-only">35% Complete (success)</span></div>
                     
                    <div class="progress-bar progress-bar-success" style="width: 12%;  color:#fff; text-align:left; font-weight:bold; background-color:#ecf0f5;">
                    <a href=<button class="" data-toggle="modal"  data-target="#fuelix" style="border:2px solid #3c8dbc ;"> </button><b> Fuel loadings</b></a> 
                     <span class="sr-only">35% Complete (success)</span></div>  
                     
                   <div class="progress-bar progress-bar-success" style="width: 20%; color:#000; text-align:left; font-weight:bold; background-color:#ecf0f5;">
                   <a href="fuel_template.php" style="border:2px solid #3c8dbc;">Fuel consumption records</a>  
                   <span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-warning" style="width: 38%;background-color:#ecf0f5;"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-danger" style="width: 20%;background-color:#ecf0f5;"><span class="sr-only">10% Complete (danger)</span></div>
                   </div> 
                   <br>
                   
                   
                   
                    <br>
                    <b>Summary of fuel available by card name</b>
                 
        <table id="example6" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>   
        <tr>   
                      <th style="background-color:#ecf0f5; ">S/NO.</th> 
					 <th style="background-color:#ecf0f5; ">CARD NAME</th> 
                     <th style="background-color:#ecf0f5;  ">VENDOR</th>  
                     <th style="background-color:#ecf0f5; ">FUEL AVAILABLE</th>
					 <th style="background-color:#ecf0f5; ">TARGET LEVEL</th> 
                     <th style="background-color:#ecf0f5; ">RE-ORDER</th>
                     <th style="background-color:#ecf0f5; "></th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th style="background-color:#ecf0f5; ">S/NO.</th> 
					 <th style="background-color:#ecf0f5; ">CARD NAME</th> 
                     <th style="background-color:#ecf0f5;  ">VENDOR</th>  
                     <th style="background-color:#ecf0f5; ">FUEL AVAILABLE</th>
					 <th style="background-color:#ecf0f5; ">TARGET LEVEL</th> 
                     <th style="background-color:#ecf0f5; ">RE-ORDER</th>
          <tr> 
					  
        </tr>
        </tfoot> 
        <tbody>   
<?php
require('connect/configftl.php'); 
$date = date("Y-m-d").' 00:00:00';
$sql = "SELECT id, Fuelcardname, Vendorname, fuelvailable, Fueltargetlevel, cumulativeload FROM fuelcards 
                                             WHERE Fuelcardstatus ='ACTIVE' ORDER BY Fuelcardname DESC";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['Fueltargetlevel']))-intval($row['cumulativeload']);
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
       '<td>'.$row['Fuelcardname'].'</td>'.
	   '<td>'.$row['Vendorname'].'</td>'.  
	   '<td>'.$row['fuelvailable'].'</td>'.
       '<td>'.$bal.'</td>'.
       '<td>'.$row['Fueltargetlevel'].'</td>'.
	   '<td>'.$row['cumulativeload'].'</td>'. 
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
  <h3 style="margin-top: -7px;"> <?php   echo"Total fuel available (UGX)  : ".$bal; ?></h3>  
    
		 
  
  
  
	
  <?php
 

include("fusion/src/fusioncharts.php");
  
$hostdb = "localhost"; 
$userdb = "root";  
$passdb = "toor2"; 
$namedb = "fleet"; 

// Establish a connection to the database
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
 
if ($dbhandle->connect_error) {
exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?> 

<?php
  
    $strQuery = " SELECT * FROM fuelcards";
	
    // Execute the query, or else return the error message.
    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

    // If the query returns a valid response, prepare the JSON string
    if ($result) {
        // The `$arrData` array holds the chart attributes and data
        $arrData = array(
            "chart" => array(
              "caption" => "Bar graph",
              "paletteColors" => "#fb455f",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "20",
              "canvasBorderAlpha"=> "0",
              "usePlotGradientColor"=> "0",
              "plotBorderAlpha"=> "10",
              "showXAxisLine"=> "1",
              "xAxisLineColor" => "#000",
              "showValues" => "0",
              "divlineColor" => "#999999",
              "divLineIsDashed" => "1",
              "showAlternateHGridColor" => "0"
            )
        );

        $arrData["data"] = array();

// Push the data into the array
        while($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
		
            "label" => $row["Fuelcardname"], 
			
            "value" => $row["fuelvailable"]
            )
        );
        }

        /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

        $jsonEncodedData = json_encode($arrData); 
        $columnChart = new FusionCharts("column2D", "myFirstChart" , 756, 310, "chart-1", "json", $jsonEncodedData);

        // Render the chart
        $columnChart->render();

        // Close the database connection
        $dbhandle->close();
    }

?>

<div id="chart-1"><!-- Fusion Charts will render here--></div> 
     <!-- end fuel cards Fusion Charts display -->   
     
     
       <script type="text/javascript" src="fusion/js/fusioncharts.js"></script>
       <script src="fusion/js/fusioncharts.js"></script>
       <script src="fusion/js/fusioncharts.charts.js"></script>
       <script src="fusion/js/themes/fusioncharts.theme.zune.js"></script>
     		   
  
  <p></p>
  
  <p style="color:red; font-weight:bold; font-size:14px;">Fuel loadings due for reconciliation</p>
            <table id="example3" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                        <th style="background-color:#ecf0f5;  width:10%;">S/NO.</th>
					 <th style="background-color:#ecf0f5; width:20%;">DATE LOADED</th> 
					 <th style="background-color:#ecf0f5; width:20%;">CARD NAME</th> 
                     <th style="background-color:#ecf0f5; width:15%;">FUEL AVAILABLE</th>  
                     <th style="background-color:#ecf0f5;  width:15%;">FUEL REQUIRED</th>
					 <th style="background-color:#ecf0f5; width:10%;">STATUS</th>
                     <th style="background-color:#ecf0f5; width:10%;">RECONCILE</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5;  width:10%;">S/NO.</th>
					 <th style="background-color:#ecf0f5; width:20%;">DATE LOADED</th> 
					 <th style="background-color:#ecf0f5; width:20%;">CARD NAME</th> 
                     <th style="background-color:#ecf0f5; width:15%;">FUEL AVAILABLE</th>  
                     <th style="background-color:#ecf0f5;  width:15%;">FUEL REQUIRED</th>
					 <th style="background-color:#ecf0f5; width:10%;">STATUS</th>
                     <th style="background-color:#ecf0f5; width:10%;">RECONCILE</th>
        </tr>
        </tfoot> 
        <tbody> 
          
<?php 
include_once("connect/configftl.php"); 
 $date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM fuellogs 
                                 WHERE TIMESTAMP >='$date' AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                               AND FUELISSUANCESTATUS = 'ISSUED' 
														   AND FUELLOADICON = 'CARD LOADED' 
														   AND RECONCILIATIONSTATUS = 'PENDING' ORDER BY FUELISSUANCEDATE DESC");
   
	while($res = mysqli_fetch_array($result)) {
	$dtszO = $res['id']."***".$res['FUELCARDNAME']."***".$res['CREDIT']."***".$res['RECONCILIATIONSTATUS'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['FUELISSUANCEDATE']."</td>"; 
		echo "<td>".$res['FUELCARDNAME']."</td>"; 
		echo "<td>".$res['ONLOADFUELAVAILABLE']."</td>"; 
		echo "<td>".$res['CREDIT']."</td>"; 
		echo "<td>".$res['RECONCILIATIONSTATUS']."</td>";  
		  echo '<td> 
			    <a id="211__'.$dtszO.'" href="javascript:void(0)"  onclick="getresorder(this.id)" data-toggle="tooltip" title="View order"
               <span class="glyphicon glyphicon-ok"> </span></a> 
               &nbsp;&nbsp;&nbsp;
               <a id="291__'.$dtszO.'" href="javascript:void(0)"  onclick="getprocform(this.id)" data-toggle="tooltip" title="View order"
               <span class="glyphicon glyphicon-off"> </span></a> 
               </td>';   
	} 
    ?>
	</tbody>
  </table> 
  
  
  
          <b>Summary of daily fuel consumption by card name</b>
                     <div class=""  id="newitemx" >  </div>
                <script>

          function newitemx(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'view_dailyfuel.php?q='+odno,
                       success : function(data){
                                $('#newitemx').html(data);
								$("#itexd").modal("show");
                                 }
               });
               }

          </script>  
          
      
                <table id="exmen" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>    
					 <th style="background-color:#ecf0f5; width:10%;">FUEL DATE</th> 
					 <th style="background-color:#ecf0f5; width:10%;">CARD NAME</th> 
                     <th style="background-color:#ecf0f5; width:10%;">LITRES</th>  
                     <th style="background-color:#ecf0f5; width:10%;">RATE</th>
					 <th style="background-color:#ecf0f5; width:10%;">AMOUNT</th> 
                     <th style="background-color:#ecf0f5; width:10%;">ACTION</th>   
           </tr>
        </thead>
        <tfoot>
          <tr> 
					 <th style="background-color:#ecf0f5; width:10%;">FUEL DATE</th> 
					 <th style="background-color:#ecf0f5; width:10%;">CARD NAME</th> 
                     <th style="background-color:#ecf0f5; width:10%;">LITRES</th>  
                     <th style="background-color:#ecf0f5; width:10%;">RATE</th>
					 <th style="background-color:#ecf0f5; width:10%;">AMOUNT</th> 
                     <th style="background-color:#ecf0f5; width:10%;">ACTION</th>    
        </tr>
        </tfoot> 
        <tbody> 
    
                  
<?php 
include_once("connect/configftl.php"); 
   $date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT FUELISSUANCEDATE, FUELCARDNAME, 
                                                       SUM(LITRE), UNITPRICE, (UNITPRICE * LITRE) AS amount
													   FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                           AND FUELISSUANCESTATUS = 'ISSUED' AND FUELLOADICON = 'USAGE' GROUP BY FUELISSUANCEDATE,FUELCARDNAME 
													   ORDER BY FUELISSUANCEDATE DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtscc = $res['FUELCARDNAME']."***".$res['FUELISSUANCEDATE'];
		echo "<tr>";  
		echo "<td>".$res['FUELISSUANCEDATE']."</td>";  
		echo "<td>".$res['FUELCARDNAME']."</td>";     
		echo "<td>".$res['SUM(LITRE)']."</td>"; 
		echo "<td>".$res['UNITPRICE']."</td>";  
		echo "<td>".$res['amount']."</td>";
		 echo '<td> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a id="399__'.$dtscc.'" href="javascript:void(0)" onclick="newitemx(this.id)" data-toggle="tooltip" title="Review"
              <span class="glyphicon glyphicon-th"> </span></a>
              </td>';	   
	}
	   
    ?>
	</tbody>
  </table>     
   
   
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


                 
                        <div class="modal" id="card" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#fff;">
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <p class="modal-title" id="myModalLabel" style="text-align:center; font-weight:bold;"> FUEL CARDS</p></p>
                                        </div>
                                        <div class="modal-body">
                                        
              <form class="form-horizontal" action="process_newcard.php" method="POST" style="height:auto;">

              <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Fuel card name</th> 
				<th style="width:80%;border:0px;"> <input type="text" name="Fuelcardname" id="Fuelcardname"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
              </tr>
			  </table> 
              
               <table class="table" style="border:0px;margin-top:-23px;">
              <tr>  
                 
                 <th style="width:20%;border:0px;">Vendor name</th> 
				<th style="width:80%;border:0px;"> <input type="text" name="Vendorname" id="Vendorname"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
          
     <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Station location</th> 
				<th style="width:80%;border:0px;"> <input type="text"name="Stationlocation" id="Stationlocation"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
                   
              </tr>
			  </table> 
    
            <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
               
                 <th style="width:20%;border:0px;">Fuel target level</th> 
				<th style="width:80%;border:0px;"> <input type="text" name="Fueltargetlevel" id="Fueltargetlevel"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
    
     <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Vendor framework type</th> 
				<th style="width:30%;border:0px;"> <select name="Vendorframeworktype" id="Vendorframeworktype"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> 
                <option> FRAMEWORK CONTRACT</option>
								<option>OPEN MARKET</option>         
                                </select>
                </th>   
                 
                 
                 <th style="width:20%;border:0px;">Fuel card status</th> 
				<th style="width:30%;border:0px;"> <select name="Fuelcardstatus" id="Fuelcardstatus"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> 
                                <option>ACTIVE</option>
								<option>DEACTIVATE</option>         
                                </select>
                </th>      
                   
              </tr>
			  </table> 
	   
       
        <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
              
                <th style="width:90%;border:0px;"> </th>   
                <th style="width:10%;border:0px;"><center><input type="submit" name="button" id="button" value="Add new card" /></center></th>    
                   
              </tr>
			  </table> 
	      </form>
          
          

        <div class="col-sm-12" >
         <br>
         
         <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
         
         </div>

                                        <div class="modal-footer">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    


           
                        <div class="modal" id="fuelix" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#fde986;">
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <p class="modal-title" id="myModalLabel" style="text-align:center; font-weight:bold;"> </p></p>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
                          <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
  
          <center> <legend style="color:#000; font-weight:bold;font-size:12px;font-family:lcd; font-weight:bold;"> REQUISITION FOR FUEL LOADING </legend> </center> 
                      <br>
              <form class="form-horizontal" action="fuel_processload.php" method="POST" style="height:auto;">
 
               <table class="table" style="border:0px;margin-top:-23px;">
              <tr>   
                 <th style="width:20%;border:0px;">Requisition date</th> 
				<th style="width:80%;border:0px;"> <input type="text" name="FUELISSUANCEDATE" id="FUELISSUANCEDATE" value="<?php echo date('Y-m-d'); ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
              
               <table class="table" style="border:0px;;margin-top:-23px;">
              <tr>  
                <th style="width:20%;border:0px;">Prepared by</th> 
				<th style="width:80%;border:0px;"> <input type="text" name="FUELLOADPREPAREDBY" id="FUELLOADPREPAREDBY" value="<?php echo $nameofuser; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
              </tr>
			  </table> 
            
              <table class="table" style="border:0px;;margin-top:-23px;">
              <tr>  
                <th style="width:20%;border:0px;">Title</th> 
				<th style="width:80%;border:0px;"> <input type="text" name="FUELLOADPREPTITLE" id="FUELLOADPREPTITLE" value="<?php echo $desc; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
              </tr>
			  </table>  
          
                <table class="table table-striped" style="background-color:#ffffff; margin-top:-13px; ">
   <thead>
   <tr>
   <th style="width:40%;">Fuel card name</th>
   <th style="width:25%;">Fuel available</th>
   <th style="width:25%;">Fuel required (UGX)</th>
   <th style="width:10%;">Action</th>  
   </tr>
   </thead>
   <tbody>
   <tr> 
   <td><input type="text" name="FUELCARDNAME" onKeyUp="bronald(this)" id="FUELCARDNAME" required="required"  
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
    <td><input type="text" name="ONLOADFUELAVAILABLE" id="ONLOADFUELAVAILABLE"  readonly="readonly" 
                style="width:100%; text-align:left;background-color:#ECF0F5;"></td> 
                
    <td><input type="numeric" name="CREDIT" id="CREDIT"  required="required" 
                style="width:100%; text-align:left;background-color:#fff;"></td>
                
       <input type="hidden" name="RECONCILIATIONSTATUS" id="RECONCILIATIONSTATUS" value="PENDING" /> 
       <input type="hidden" name="FUELLOADICON" id="FUELLOADICON" value="CARD LOADED" /> 
       <input type="hidden" name="APPROVALSTATUS" id="APPROVALSTATUS" value="APPROVED" />
       <input type="hidden" name="REVIEWFUEL" id="REVIEWFUEL" value="REVIEWED" />
       <input type="hidden" name="FUELISSUANCESTATUS" id="FUELISSUANCESTATUS"  value="ISSUED" /> 
                             
    <td><center><input type="submit" name="button" id="button" value="Load" /></center></td> 
                                              
    </tr>
    <tr>
   </tbody>
   </table> 
   <div id="res"> 
              
	   </form>
       <br>
       
         <table id="example3" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
         <tr>   
                     <th style="background-color:#ecf0f5;  width:10%;">S/NO.</th>
					 <th style="background-color:#ecf0f5; width:20%;">DATE LOADED</th> 
					 <th style="background-color:#ecf0f5; width:30%;">CARD NAME</th> 
                     <th style="background-color:#ecf0f5; width:20%;">FUEL AVAILABLE</th>  
                     <th style="background-color:#ecf0f5;  width:20%;">FUEL REQUIRED</th>
					 <th style="background-color:#ecf0f5; width:10%;">RECONCILIATION</th>   
        </tr>
        </thead>
        <tfoot>
        <tr>
		             <th style="background-color:#ecf0f5;  width:10%;">S/NO.</th>
					 <th style="background-color:#ecf0f5; width:20%;">DATE LOADED</th> 
					 <th style="background-color:#ecf0f5; width:30%;">CARD NAME</th> 
                     <th style="background-color:#ecf0f5; width:20%;">FUEL AVAILABLE</th>  
                     <th style="background-color:#ecf0f5;  width:20%;">FUEL REQUIRED</th>
					 <th style="background-color:#ecf0f5; width:10%;">RECONCILIATION</th>   
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var Mts = myid.split("***");
document.getElementById("myFUELCARDNAME").value=Mts[0];
document.getElementById("myID").value=Mts[1];  
document.getElementById("myCREDIT").value=Mts[2]; 
document.getElementById("myRECONCILIATIONSTATUS").value=Mts[3]; 
}
</script>    
         
                 
<?php 
include_once("connect/configftl.php"); 
$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM fuellogs 
                                 WHERE TIMESTAMP >='$date' AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                               AND FUELISSUANCESTATUS = 'ISSUED' 
														   AND FUELLOADICON = 'CARD LOADED' 
														   AND RECONCILIATIONSTATUS = 'PENDING' ORDER BY FUELISSUANCEDATE DESC");
   
	while($res = mysqli_fetch_array($result)) {
	$Mts = $res['id']."***".$res['FUELCARDNAME']."***".$res['CREDIT']."***".$res['RECONCILIATIONSTATUS'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['FUELISSUANCEDATE']."</td>"; 
		echo "<td>".$res['FUELCARDNAME']."</td>"; 
		echo "<td>".$res['ONLOADFUELAVAILABLE']."</td>"; 
		echo "<td>".$res['CREDIT']."</td>"; 
		echo "<td>".$res['RECONCILIATIONSTATUS']."</td>";    
	} 
    ?>
	</tbody>
  </table>  
    

         <div class="col-sm-12" > 
         <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
         </div>

                                        <div class="modal-footer">  
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
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:20px; text-align:center;">  </p>

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

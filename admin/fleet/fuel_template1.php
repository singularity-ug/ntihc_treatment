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
	  "iDisplayLength": 12,
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
       
      <br>
  
  <div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">    
        
    <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
  
          <center> <legend style="color:#000; font-weight:bold;font-size:16px;font-family:lcd; font-weight:bold;"> FUEL RECORDS </legend> </center> 
       
       
   <table id="example6" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>   
        <tr>   
                      <th style="background-color:#ecf0f5; width:5%;">R/NO.</th>
					 <th style="background-color:#ecf0f5; width:9%;">FUEL DATE</th> 
					 <th style="background-color:#ecf0f5; width:6%;">REG.NO</th> 
                     <th style="background-color:#ecf0f5; width:9%;">STATION</th> 
                     <th style="background-color:#ecf0f5; width:8%;">CARD NAME</th> 
                     <th style="background-color:#ecf0f5; width:5%;">PREVIOUS MILEAGE</th>
					 <th style="background-color:#ecf0f5; width:5%;">CURRENT MILEAGE</th>
                     <th style="background-color:#ecf0f5; width:5%;">DISTANCE COVERED</th>
                     <th style="background-color:#ecf0f5; width:5%;">LITRES</th> 
					 <th style="background-color:#ecf0f5; width:5%;">RATE</th> 
                     <th style="background-color:#ecf0f5; width:5%;">AMOUNT</th>  
                     <th style="background-color:#ecf0f5; width:5%;">DEPOSIT</th> 
                     <th style="background-color:#ecf0f5; width:7%;">BALANCE</th>  
                     <th style="background-color:#ecf0f5; width:8%;">PROJECT</th>
                     <th style="background-color:#ecf0f5; width:8%;">TAKEN BY</th> 
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th style="background-color:#ecf0f5; width:5%;">R/NO.</th>
					 <th style="background-color:#ecf0f5; width:9%;">FUEL DATE</th> 
					 <th style="background-color:#ecf0f5; width:9%;">REG.NO</th> 
                     <th style="background-color:#ecf0f5; width:9%;">STATION</th> 
                     <th style="background-color:#ecf0f5; width:5%;">CARD NAME</th> 
                     <th style="background-color:#ecf0f5; width:5%;">PREVIOUS MILEAGE</th>
					 <th style="background-color:#ecf0f5; width:5%;">CURRENT MILEAGE</th>
                     <th style="background-color:#ecf0f5; width:5%;">DISTANCE COVERED</th>
                     <th style="background-color:#ecf0f5; width:5%;">LITRES</th> 
					 <th style="background-color:#ecf0f5; width:5%;">RATE</th> 
                     <th style="background-color:#ecf0f5; width:5%;">AMOUNT</th>  
                     <th style="background-color:#ecf0f5; width:5%;">DEPOSIT</th> 
                     <th style="background-color:#ecf0f5; width:7%;">BALANCE</th>  
                     <th style="background-color:#ecf0f5; width:8%;">PROJECT</th>
                     <th style="background-color:#ecf0f5; width:8%;">TAKEN BY</th> 
        </tr>
        </tfoot> 
        <tbody> 
<?php
require('connect/configftl.php'); 

$sql = "SELECT id, FUELISSUANCEDATE, REGISTRATIONNO, FUELSTATION, MILEAGEBEFORE, MILEAGEAFTER, MILEAGEAFTER - MILEAGEBEFORE AS distance,
                                                       FUELCARDNAME,AMOUNT,CREDIT,LITRE, UNITPRICE, UNITPRICE * LITRE AS amount, PROJECT, DRIVER
													   FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                           AND FUELISSUANCESTATUS = 'ISSUED' ORDER BY DATECREATED DESC";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['CREDIT']))-intval($row['amount']);
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
       '<td>'.$row['FUELISSUANCEDATE'].'</td>'.
	   '<td>'.$row['REGISTRATIONNO'].'</td>'.
       '<td>'.$row['FUELSTATION'].'</td>'.
	   '<td>'.$row['FUELCARDNAME'].'</td>'.
       '<td>'.$row['MILEAGEBEFORE'].'</td>'.
       '<td>'.$row['MILEAGEAFTER'].'</td>'.
	   '<td>'.$row['distance'].' &nbsp;KM</td>'.
       '<td>'.$row['LITRE'].'</td>'.
	   '<td>'.$row['UNITPRICE'].'</td>'. 
       '<td>'.$row['amount'].'</td>'. 
	   '<td>'.$row['CREDIT'].'</td>'.
       '<td>'.$bal.'</td>'.
       '<td>'.$row['PROJECT'].'</td>'.
	   '<td>'.$row['DRIVER'].'</td>'. 
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
  <h3 style="margin-top: -7px;"> <?php   echo"BALANCE  : ".$bal; ?></h3>    
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
                                        <div class="modal-header" style="background-color:#fde986;">
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

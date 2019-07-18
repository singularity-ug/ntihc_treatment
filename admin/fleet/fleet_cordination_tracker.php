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
     $('#expexy').DataTable( {
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
  
   
  <div class="col-sm-12">
  <div class="col-sm-6">
    <p style="font-weight:bold; text-align:center; font-family:lcd;"> Summary of daily fuel consumption by  vehicle</p>
   <table id="expexy" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
           <thead>
        <tr>   
                     <th style="background-color:#ecf0f5; width:5%;">FUEL DATE</th>
					 <th style="background-color:#ecf0f5; width:10%;">DRIVER</th> 
					 <th style="background-color:#ecf0f5; width:10%;">REG.NO</th> 
                     <th style="background-color:#ecf0f5; width:10%;">DISTANCE</th>  
                     <th style="background-color:#ecf0f5; width:5%;">LITERS</th>
					 <th style="background-color:#ecf0f5; width:10%;">RATE</th> 
                     <th style="background-color:#ecf0f5; width:10%;">AMOUNTT</th> 
           </tr>
        </thead>
        <tfoot>
          <tr>
		              <th style="background-color:#ecf0f5; width:5%;">FUEL DATE</th>
					 <th style="background-color:#ecf0f5; width:10%;">DRIVER</th> 
					 <th style="background-color:#ecf0f5; width:10%;">REG.NO</th> 
                     <th style="background-color:#ecf0f5; width:10%;">DISTANCE</th>  
                     <th style="background-color:#ecf0f5; width:5%;">LITERS</th>
					 <th style="background-color:#ecf0f5; width:10%;">RATE</th> 
                     <th style="background-color:#ecf0f5; width:10%;">AMOUNTT</th> 
        </tr>
        </tfoot> 
        <tbody> 
      
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "SELECT FUELISSUANCEDATE, DRIVER, REGISTRATIONNO, FUELSTATION, MILEAGEBEFORE, MILEAGEAFTER, MILEAGEAFTER - MILEAGEBEFORE AS distance,
                                                       LITRE, UNITPRICE, UNITPRICE * LITRE AS amount, PROJECT
													   FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                           AND FUELISSUANCESTATUS = 'ISSUED' AND FUELLOADICON = 'USAGE' ORDER BY DATECREATED DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['FUELISSUANCEDATE']."***".$res['REGISTRATIONNO'];
		echo "<tr>";  
		echo "<td>".$res['FUELISSUANCEDATE']."</td>"; 
	    echo "<td>".$res['DRIVER']."</td>";    
		echo "<td>".$res['REGISTRATIONNO']."</td>";   
		echo "<td>".$res['distance']." &nbsp;KM</td>"; 
		echo "<td>".$res['LITRE']."</td>"; 
		echo "<td>".$res['UNITPRICE']."</td>";  
		echo "<td>".$res['amount']."</td>";   
	}
	   
    ?>
	</tbody>
  </table>      

  </div>
  
  <div class="col-sm-6">
  <p style="font-weight:bold; text-align:center; font-family:lcd;"> Summary of daily fleet : / travel cost by vehicle</p>
   <table id="expex" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
         <tr>   
                      <th style="background-color:#ecf0f5; font-size:10px;width:10%;">R/NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:10%;">TRAVEL DATE</th>
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">VEHICLE.NO.</th>   
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">DISTANCE COVERED</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">RECENT FUEL.RATE</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">CONSUMPTION RATE</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">JOURNEY COST</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5; font-size:10px;width:10%;">R/NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:10%;">TRAVEL DATE</th>
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">VEHICLE.NO.</th>   
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">DISTANCE COVERED</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">RECENT FUEL.RATE</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">CONSUMPTION RATE</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">JOURNEY COST</th>
        </tr>
        </tfoot> 
        <tbody>  
<?php 
include_once("connect/configftl.php"); 
 $date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT id, Allocationdate,Vehicleallocated,Drivername,Actualdestination,Passengers,Checkout,Checkin,timein,timeout,
                                       Mobilecontact,Emailaddress, mileagein,mileageout, (SUM(mileageout) - SUM(mileagein)) As dist,
									    Costperlitre,  Previousconsumptionrateperliter,
									   (SUM(mileageout) - SUM(mileagein)) /  Previousconsumptionrateperliter * Costperlitre As travelcost
                                       FROM ftlvehiclebooking WHERE ordertype = 'Reservation' AND Allocationstatus ='Allocated' 
									   GROUP BY Allocationdate, Vehicleallocated ORDER BY Allocationdate DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['Emailaddress']."***".$res['id'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['Allocationdate']."</td>"; 
		echo "<td>".$res['Vehicleallocated']."</td>";    
		echo "<td>".$res['dist']."</td>"; 
		echo "<td>".$res['Costperlitre']."</td>";
		echo "<td>".$res['Previousconsumptionrateperliter']." km / ltr</td>"; 	
		echo "<td>".$res['travelcost']."</td>"; 	
	}
	   
    ?>
	</tbody>
  </table> 
  </div>
  </div></div>
  <div class="col-sm-12" >  
 <p style="font-weight:bold; text-align:center; font-family:lcd;"> Summary of daily fleet / vehicles travel cost by destination</p>
   <table id="example5" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
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
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">MILEAGE OUT</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">MILEAGE IN</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">DISTANCE COVERED</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">RECENT FUEL.RATE</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">CONSUMP TION.RATE</th>
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
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">MILEAGE OUT</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">MILEAGE IN</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">DISTANCE COVERED</th>
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">RECENT FUEL.RATE</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; width:5%;">CONSUMPTION RATE</th>
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
                                       FROM ftlvehiclebooking WHERE ordertype = 'Reservation' AND Allocationstatus ='Allocated' ORDER BY id DESC");
  
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
		echo "<td>".$res['mileageout']."</td>";
		echo "<td>".$res['mileagein']."</td>";
		echo "<td>".$res['dist']."</td>"; 
		echo "<td>".$res['Costperlitre']."</td>";
		echo "<td>".$res['Previousconsumptionrateperliter']." km / ltr</td>"; 	
		echo "<td>".$res['travelcost']."</td>"; 	
	}
	   
    ?>
	</tbody>
  </table> 
  
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

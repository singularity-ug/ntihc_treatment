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
  header('location:../index.php');
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/matrix-style2.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../css/uniform.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 
<link rel="stylesheet" href="../js/googleapis.js" type='text/css'>
    
<link rel="stylesheet" href="../css/notifier2.css" /> 
<link rel="stylesheet" href="../datatable/bootstrap/css/bootstrap.css" />  
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
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
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

    <style media="screen">
    .btn {padding : 0px 5px;}
    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
     border-top: 1px solid #fff; 
	 line-height: 1.0;  
	 padding: 3px; 
	 vertical-align: center;
    } 
    .progress{
     vertical-align:center;  
	 margin-bottom: 0px;
             } 
             table, th , td  {
                 border: 1px solid #fff; 
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
<body style="background: #fff;margin-top: -20px;"> 
 
<div id="header" style="background-color:#d70000;">  
<h2><a href="dashboard.php"> </a></h2>
</div>
 
<div id="sidebar"> 
 
<a href="#" class="visible-phone" style="background-color:#da542e; font:bold 14px 'Aleo'; text-shadow:1px 1px 2px #000; color:#fff;">
<i class="icon icon-signal"></i> &nbsp; &nbsp; &nbsp; &nbsp; Application Dashboard </a>
<ul  style="text-align:left;"> 
  
        <ul class="site-stats">
	   
	    <li class="" style="text-align:left;"><i class=" "><a href="fleet_administrator.php">
                <img src="../img/demo/access-administrator-account.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                <small >Fleet admin</small></li></a>
				 
				<li class="" style="text-align:left;"><i class=" "><a href="cordination.php">
                <img src="../img/demo/budget.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                <small >Budget mgt</small></li></a> 
	   
                <li class="" style="text-align:left;"><i class=" "><a href="cordination.php">
                <img src="../img/demo/images (2).png"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                <small>Cordination unit</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/103362-3d-glossy-green-orb-icon-business-gas-pump.png"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                <small>Fuel module</small></li></a>
                 
                 
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/103507-3d-glossy-green-orb-icon-business-tools11.png"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                <small>Fleet service</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/images.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                <small>Work orders</small></li></a>
                 
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/admin.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Accidents mgt</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/cover.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Insurance mgt</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/images (1).jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Drivers module</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="fleet_register.php">
                <img src="../img/demo/33989241-blue-vehicle-icons-on-white-background.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>General fleet</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="fleet_register.php">
                <img src="../img/demo/health-insurance-icon-png-3.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Fleet verification</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/images (1).png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Action center</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/Open-file-icon.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Quick export</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/access-administrator-account.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Database panel</small></li></a>
				 
				 
				 
			          <div id="reviews" class="carousel slide" data-ride="carousel"
    style="border: 1px solid #f2f0f0;
    border-bottom-width: 5px;
    border-bottom-style: solid;height: 154px;  border-top-right-radius:35px;
    border-bottom-left-radius:35px;"> 
                                  <br>  <div class="carousel-inner" style="background-color: #fff;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">  <p style="text-align:center;"> Fuel cards due for reoder</p> <br>
                                             <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                               <?php 
			    include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards where fuelvailable < 3000000 AND Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount123 = $result->rowcount(); 
			 ?>
                                               <span style="font-size:50px;">
                                                <?php echo $rowcount123;?>
                                               </span>
                                            </p> <br>
                                                <div class="user-img pull-right">

                                                </div> 
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1"> <p style="text-align:center;"> Notification 2</p> <br>
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                            
                                               <span style="font-size:50px;">
                                              002
                                                </span>
                                            </p> <br>
                                                 <div class="user-img pull-right">
                                                </div> 
                                            </div>
                                        </div>

                                         <div class="item">
                                            <div class="col-sm-10 col-md-offset-1"> <p style="text-align:center;"> Notification 3</p> <br>
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                           
                                               <span style="font-size:50px;">
                                                   003 
                                               </span>
                                            </p> <br>
                                                 <div class="user-img pull-right">
                                                </div>  
                                            </div>
                                        </div> 
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators" style="width: 10%;">
                                        <li data-target="#reviews" data-slide-to="0" class="active" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" style="background-color:blue;"></li>
                                        <li data-target="#reviews" data-slide-to="2" style="background-color:red;"></li> 
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

     </div>
              </ul>   
     
</div>




<div id="content" style="background: #fff;">
 

 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Fleet Co-ordination Unit &nbsp;  
		   <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
		  </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
             <div class="span9">  
             
             <div class=""  id="getresorder" >  </div>
                <script> 
          function getresorder(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'booking/cordinate_vehicles.php?q='+odno,
                       success : function(data){
                                $('#getresorder').html(data);
								$("#outxxexxxx").modal("show");
                                 }
               });
               } 
                </script>    
             
             
             <div class="table-responsive mailbox-messages"> 
             <br>
                  <!-- Info boxes --> 
             <div class="" id="bookorders" style="margin-left: 0px;"></div>
			 
			  <script> 
          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'general/fleetbookings.php',
                       success : function(data){
                                $('#bookorders').html(data);
                                 }
               });
               }, 2000);

          </script>
            
            
    
             </div>  </div>
			 
			  <div class="span3"> 
			  <ul class="site-stats">
                <li class="bg_ly"> <strong>
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
?>
                </strong> <small>Total number of pending orders</small></li>
                
                <li class="bg_lg">  <strong>
                
                                   <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date' AND Allocationstatus ='Allocated'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
</strong> <small>Total allocated orders </small></li>
                
                <li class="bg_lo">  <strong>
                
                 <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date' AND Allocationstatus ='Rejected'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                </strong> <small>Total number of rejected orders</small></li>
                
                <li class="bg_lb"> <strong>
                
                 <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                
                </strong> <small>Total Orders as of <?php echo date('y-m-d'); ?></small></li>
                
                <li class="bg_lg" style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5; background-color:#fff;"></i> 
                <small style="color:#000;">Current month progress</small>
                <strong style="color:#000;">0%</strong> 
                </li> 
                
                 <li class="bg_lo" style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5; background-color:#fff;"></i> 
                <small style="color:#000;">Current month inconsistency</small>
                <strong style="color:#000;">0%</strong> 
                </li> 
                
                 <li class="bg_lo" style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5; background-color:#fff;"></i> 
                <small style="color:#000;">Evaluation of today's results</small>
                <strong style="color:green; font-size:13px;">Success</strong> 
                </li> 
                
                 <li class="bg_lg" style="border-radius: 11px;border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;
          border-right: 4px solid #ecf0f5; background-color:#fff;"></i> 
                <small style="color:#000;">Top rated usage vehicle</small>
                <strong style="color:green; font-size:13px;">NULL</strong> 
                </li> 
              </ul> 
            </div>
           </div> 
         </div></div>
        
    <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5> 
		                  <div id="breadcrumb" style="border:0px;">
                          <a href="fuel/cordination_reports.php?d1=0&d2=0" data-toggle="modal" class="">Travel history</a> 
                          <a href="#myModal21" data-toggle="modal" class="">Log books</a>  
                          </div> 
		  
		  </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
                   
    <link rel="stylesheet" href="chartjs/bootstrap.min.css" />
	<script src="chartjs/jquery.min.js"></script>
	<script src="chartjs/bootstrap.min.js"></script>

	<!-- ChartJS -->
	<script src="chartjs/chart.js/Chart.js"></script>
		  
			<div class="box box-success">
            <div class="box-header with-border">
            	<?php
            		//set timezone
					//date_default_timezone_set('Asia/Manila');
					$year = date('Y');
            	?>
              <h5 class="box-title">Transport reservation patterns (<?php echo $year-1; ?> vs <?php echo $year; ?>)</h5>

            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height: 300px;
width: 1016px;"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
		</div>
	</div>
</div>
<?php include('chartjs/data_reservation.php'); ?>
<script>
  $(function () {
    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label               : 'Previous Year',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [ "<?php echo $pjan; ?>",
                                  "<?php echo $pfeb; ?>",
                                  "<?php echo $pmar; ?>",
                                  "<?php echo $papr; ?>",
                                  "<?php echo $pmay; ?>",
                                  "<?php echo $pjun; ?>",
                                  "<?php echo $pjul; ?>",
                                  "<?php echo $paug; ?>",
                                  "<?php echo $psep; ?>",
                                  "<?php echo $poct; ?>",
                                  "<?php echo $pnov; ?>",
                                  "<?php echo $pdec; ?>" 
                                ]
        },
        {
          label               : 'This Year',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [ "<?php echo $tjan; ?>",
                                  "<?php echo $tfeb; ?>",
                                  "<?php echo $tmar; ?>",
                                  "<?php echo $tapr; ?>",
                                  "<?php echo $tmay; ?>",
                                  "<?php echo $tjun; ?>",
                                  "<?php echo $tjul; ?>",
                                  "<?php echo $taug; ?>",
                                  "<?php echo $tsep; ?>",
                                  "<?php echo $toct; ?>",
                                  "<?php echo $tnov; ?>",
                                  "<?php echo $tdec; ?>" 
                                ]
        }
      ]
    }
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = barChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 5,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

  })
</script>

           </div>   </div></div></div></div>
       
   
<!--Start vehicle reservation------------------------------------------------------------------------------------------------------------------->
 <div id="mybooking" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Transport reservation order</h3>
              </div>
              <div class="modal-body">
              
              
                <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Book</a></li>
              <li><a data-toggle="tab" href="#tab2">Next</a></li> 
            </ul>
          </div>
          <div class="widget-content tab-content" style="background-color: #fff;">
            <div id="tab1" class="tab-pane active">
            <form class="form-horizontal" action="booking/process_ftlbookings.php" method="POST" style="height:auto;">
              
              <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>  
                <th style="width:30%;border:0px;">Date</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="Createddate" name="Createddate" value="<?php echo date('y-m-d'); ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
              
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Name</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="applicantname" name="applicantname" value="<?php echo $nameofuser; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
              
              
                <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Title</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="title" name="title" value="<?php echo $desc; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
 
 
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:100%;border:0px;">User Department</th>  
                </th>   
              </tr>
			  </table>
              <table class="table" style="border:0px; margin-top:-24px;"> 
              <tr>   
				<th style="width:100%;border:0px;"> <input type="text" id="applicantdept" name="applicantdept" value="<?php echo $dept; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>   
 
               <input type="hidden" id="pfno" name="pfno" value="<?php echo $pf; ?>" >
               <input type="hidden" id="senderaccount" name="senderaccount" value="<?php echo $rm; ?>" >
              
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Phone No.</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="Phonecontact" name="Phonecontact" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
              
              
               <table class="table" style="border:0px; margin-top:-24px;">
              <tr>  
                <th style="width:30%;border:0px;"> Book type</th> 
				<th style="width:70%;border:0px;"> 
                <select id="booktype" name="booktype" style="width:100%; font-weight:normal; background-color:#fff;">
                 <option>   </option>
                <option> PICK AND DROP </option> 
                <option> ROUND TRIP </option>
                </select>
                </th>   
              </tr>
			  </table>
              
              
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:100%;border:0px;">Activity / purpose of travel</th>  
                </th>   
              </tr>
			  </table>
              <table class="table" style="border:0px; margin-top:-24px;"> 
              <tr>   
				<th style="width:100%;border:0px;"> <textarea id="Activity" name="Activity" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:20px; "></textarea> </th>   
              </tr>
			  </table> 
            </div>
            <div id="tab2" class="tab-pane">
              
                 <table class="table" style="border:0px; margin-top:0px;">
              <tr>  
				<th style="width:100%;border:0px;"> <input type="text" id="journeypoint_start" name="journeypoint_start"  placeholder="From"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>  
              </tr>
			  </table>  
              
              
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>   
				<th style="width:100%;border:0px;"> <input type="text" id="Destination_to" name="Destination_to"  placeholder="Destination"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>   
              </tr>
			  </table>     
            
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Travel date</th> 
				<th style="width:70%;border:0px;"> <input type="date" id="Reservationdate_from" name="Reservationdate_from" value="<?php echo date('y-m-d'); ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>
                 </tr>
			     </table>   
                <span>
                <table class="table" style="border:0px; margin-top:-23px;">
                <tr> 
                <th style="width:30%;border:0px;">Return date</th>   
				<th style="width:70%;border:0px;"> <input type="date" id="Reservationdate_to" name="Reservationdate_to" value="<?php echo date('y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>   
              </tr>
			  </table>  </span>    
   
              
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Departure time</th> 
				<th style="width:70%;border:0px;"> <input type="time" id="Departuretime" name="Departuretime"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>   
                  </tr>
			   </table>  
              
                <span>
                <table class="table" style="border:0px; margin-top:-23px;">
               <tr> 
                <th style="width:30%;border:0px;">Expected return time</th> 
				<th style="width:70%;border:0px;"> <input type="time" id="Pickuptime_expected" name="Pickuptime_expected"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
              </tr>
			  </table>   </span>  
     
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Prefered vehicle</th> 
				<th style="width:70%;border:0px;"> <select id="Preferedvehicle" name="Preferedvehicle" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">   
                   <option value="PICKUP /DC">PICKUP /DC</option>
                                <option value="MIN BUS">MIN BUS</option> 
                                <option value="STATION WAGON">STATION WAGON</option>
                                <option value="SALOON">SALOON</option> 
                </select></th> 
                </tr>
			  </table>    
                 
                <table class="table" style="border:0px; margin-top:-23px;">
               <tr> 
                <th style="width:30%;border:0px;">Passengers</th> 
				<th style="width:50%;border:0px;"> <input type="text" id="Passengers" name="Passengers" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; text-align:center; font-weight:bold; ">  </th>
                
                <input type="hidden" id="ordertype" name="ordertype" value="Reservation">
                  
                <th style="width:20%;border:0px;"> <center>  <input type="submit" name="button" id="button" value="Save" />  </center> </th>  
                </tr>
			  </table>  
              
            </form>
               
            </div>
          </div>
        </div>
               
                
              </div> 
            </div>
          </div>
        </div>
<!--End vehicle reservation-------------------------------------------------------------------------------------------------------------------->



<!--Start model-------------------------------------------------------------------------------------------------------------------------------->
             <div id="myModal2" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Requisitions</h3>
              </div>
              <div class="modal-body">
              
                    <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOnecaro" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Fuel and lubricants requisition</h5>
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOnecaro">
              <div class="widget-content"> 
              
              <form id="form-wizard" class="form-horizontal" method="post"  action="fuel_updateapproval.php" >
              <div id="form-wizard-1" class="step">
                
      <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Health unit</th>
				<th style="width:20%;border:0px;"> <input type="text" id="username" name="HEALTHUNIT"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Reg No. </th>
				<th style="width:20%;border:0px;"> <input type="text" id="REGNO" name="REGNO"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
 
              </tr>
			  </table>
 
                 
                
              </div>
              <div id="form-wizard-2" class="step">
                <div class="control-group">
                  <label class="control-label">Email</label>
                  <div class="controls">
                    <input id="email" type="text" name="email" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">EULA</label>
                  <div class="controls">
                    <input id="eula" type="checkbox" name="eula" />
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" />
                <div id="status"></div>
              </div>
              <div id="submitted"></div>
            </form>
              
              
               </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwocaro" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
                <h5>Accordion closed</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwocaro">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGThreecaro" data-toggle="collapse"> <span class="icon"><i class="icon-eye-open"></i></span>
                <h5>Accordion closed</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGThreecaro">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
        </div>
                 
              </div>
            <div class="modal-footer"><a data-dismiss="modal" class="" href="#" >Cancel</a> </div> 
            </div>
    
<!--End model--->       

<!--Footer-part-->
<div class="row-fluid"> 
</div>
<!--end-Footer-part-->
<!--<script src="../js/jquery.min.js"></script>-->
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.validate.js"></script>
<script src="../js/matrix.js"></script>  
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/matrix.wizard.js"></script> 

</body>
</html>

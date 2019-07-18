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
  header('location:ftls/index.php');
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
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../css/uniform.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 
<link rel="stylesheet" href="../js/googleapis.js" type='text/css'>
   
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 

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


</head>
<body style="background: #fff;"> 
 
<!--Header-part-->
<div id="header" style="background-color:#000;">  
<h2><a href="dashboard.php"> </a></h2>
</div>
<!--close-Header-part--> 

 
<!--sidebar-menu-->

<div id="sidebar"> 
 <a href="#" class="visible-phone"><i class="icon icon-signal"></i> &nbsp; &nbsp; &nbsp; Fleet system dashboard</a>
  <ul>
    <li  class="submenu active"><a href="dashboard.php"><i class="icon icon-home"></i> <span>Fleet management menu</span></a> </li>
  
       <li><a href="cordination.php"><i class="icon icon-signal"></i> <span>Cordination unit</span></a> </li>
 
       <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Fuel sub module-Admin</span> </span></a>
      <ul> 
        <li><a href="#myModalfuel" data-toggle="modal" class="">Fuel center / entries</a></li>  
        <li><a href="#myModalfuel" data-toggle="modal" class="">Fuel management / admin</a></li> 
      </ul>
    </li>
     
       

       <li><a href="error.php"><i class="icon icon-signal"></i> <span>Motor vehicle log books</span></a> </li>


    <li><a href="error.php"><i class="icon icon-th"></i> <span>Fleet maintenance</span></a></li>

    <li><a href="error.php"><i class="icon icon-th"></i> <span>Accidents management</span></a></li>

     <li><a href="error.php"><i class="icon icon-th"></i> <span>Insurance and compensation</span></a></li>

    <li><a href="error.php"><i class="icon icon-th"></i> <span>General fleet management</span></a></li>

    <li><a href="error.php"><i class="icon icon-fullscreen"></i> <span>Verification and valuation</span></a></li>

     <li><a href="error.php"><i class="icon icon-fullscreen"></i> <span>Drivers management</span></a></li>


     <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Reports module</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="error.php">Under development</a></li>
      </ul>
    </li>

     <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Quick data export</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="error.php">Under development</a></li>
      </ul>
    </li>
     <li><a href="error.php"><i class="icon icon-fullscreen"></i> <span>Action center</span></a></li>
     
     <li><a href="error.php"><i class="icon icon-fullscreen"></i> <span>Control panel</span></a></li>
 
     <canvas id="canvas" width="300" height="300" style="height:100%; width:100%;"> </canvas>       
     <script type="text/javascript" src=" ../js/gauge.js"></script>
     
    
</div>



<div id="content" style="background: #fff;">
  <div id="content-header">
   <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="../index.php">Logout</a>  
                          </div> 
  </div> 

 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Fleet Management</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12"> 
            
             <div class="span3">
              <ul class="site-stats"> <a href="#myModal" data-toggle="modal" class="">
                <li class="bg_lg"><i class="icon-plus" style="color:#fff;"></i></a>
                 <strong>
                 
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
                 
                 </strong> 
                <a href="fleet_register.php"> <small style="color:#FFF;">Vehicles</small></li></a>
                
                <li class="bg_ly"><a href="#myAlert" data-toggle="modal">
                <i class="icon-user" style="color:#fff;">
                </i> <strong>120</strong> 
                <small>New driver</small></li> </a>
              
              
                <li class="bg_lo"> <a href="fuel_master.php?d1=0&d2=0"> 
                <i class="icon-share" style="color:#fff;"></i>
                <strong>00</strong>
                  <small style="color:#fff;">Fuel module</small></li></a>
                  
                 
                <li class="bg_lg"><i class="icon-edit"></i> <strong>00</strong> 
                <small>New User </small></li> 
              </ul>
            </div>
            
           <div class="span3">
              <ul class="site-stats">
                <li class="bg_lg"><i class="icon-dashboard"></i> <small>00</small>
                 <small>Insurance</small></li>
                 
                <li class="bg_ly"><i class="icon-th-list"></i> <small style="color:#000;">00</small> 
                <small style="color:#000;">Accidents</small></li> 
                
                
                <li class="bg_ly"><i class="icon-question-sign"></i> <small>00</small> 
                <small>Work orders</small></li> 
                
                <li class="bg_lo"><i class="icon-envelope"></i> <small>00</small> 
                <small>Action center</small></li> 
              </ul>
            </div>
            
             
             <div class="span3"> 
             
             <div id="reviews" class="carousel slide" data-ride="carousel"
    style="border: 3px solid #f2f0f0;
    border-bottom-width: 5px;
    border-bottom-style: solid;height: 173px;
border-bottom-left-radius:35px;"> 
                                  <br>  <div class="carousel-inner" style="background-color: #f9f9f9;height:auto;">
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
                                                <h5 class="pull-right"> <strong class="c-black"></strong></h5>
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
                                                  <h5 class="pull-right"> <strong class="c-black"></strong></h5>
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
                                                 <h5 class="pull-right"> <strong class="c-black"></strong></h5>
                                            </div>
                                        </div>

                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" style="background-color:yellow;"></li>
                                        <li data-target="#reviews" data-slide-to="2" style="background-color:red;"></li> 
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

     </div>
     </div>
 
     <div class="span3">

              <div class="progress progress-striped active">
              <div class="bar" style="width: 100%;background-color: #164242; color:#fff;"> 
                Fuel loadings
              </div>
            </div>
            
            
            <div class="progress progress-striped progress-success active"  >
              <div class="bar" style="width: 100%;background-color: #164242;">
               
   <td><a href="#myloadreview" data-toggle="modal"><button class="btn btn-info"  title="Fuel load due for review" style="margin-top: -5px;"><i class="icon-edit"> </i>
    Review  <b style="color:red;"> (<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT purchaseid  FROM purchase WHERE Approval ='Pending' AND Throughoneaccount='$rm'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>)</b>
		</button> </a>
   &nbsp; 
   <td><a href="#myloadapprovals" data-toggle="modal"><button class="btn btn-info" title="Fuel loadings due for approval" style="margin-top: -5px;"><i class="icon-edit">   </i> Approve <b style="color:red;"> (<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT purchaseid FROM purchase where Approval ='Reviewed' AND Loadreview ='Pending' AND Toaccount='$rm'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>)</b>
   
   </button> </a>   </td>
    
              </div>
            </div>
            <div class="progress progress-striped progress-warning active">
              <div class="bar" style="width: 60%;background-color: #164242;"></div>
            </div>
            <div class="progress progress-striped progress-warning active">
              <div class="bar" style="width: 60%;background-color: #164242;"></div>
            </div>
            <div class="progress progress-striped progress-danger active">
              <div class="bar" style="width: 100%;background-color: #164242;"></div>
            </div>


                 
     </div>                 </i></a>
                      </div> 
                     </div> 
                     </div>  
             </div> 
             
               <div class="row-fluid" style="margin-top: -16px;"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>   
            <div class="btn-group" style="margin-top: -9px;margin-left: -10px;">
            <button class="btn btn-info">Data center</button>
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="fuel/get_load_history2.php">My approved load history</a></li> 
              <li class="divider"></li> 
            </ul></div> </h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12"> 
            
    <link rel="stylesheet" href="doughnutchart/chart.js/bootstrap.css" />
	<script src="doughnutchart/chart.js/jquery.js"></script>
	<script src="doughnutchart/chart.js/bootstrap.js"></script>
   
	<!-- ChartJS -->
	<script src="doughnutchart/chart.js/Chart.js"></script>
              <?php
              //connection
              $conn = new mysqli("localhost", "root", "toor2", "pie");
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql="select * from category";
              $query=$conn->query($sql);

              while($row=$query->fetch_array()){
                ?>
                <option value="<?php echo $row['catid']; ?>"><?php echo $row['catname']; ?></option>
                <?php
              }
            ?>
            
            <?php
            	 //set timezone
					     //date_default_timezone_set('Asia/Manila');
					     $year = date('Y');
            	?> 
            <canvas id="pieChart" style="height:250px"></canvas>
            </div> 
          </div>
		</div>
	</div>
</div>


<?php include('doughnutchart/data.php'); ?>
<script>
  $(function () {
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?php echo $samsung; ?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Samsung'
      },
      {
        value    : <?php echo $apple; ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Apple'
      },
      {
        value    : <?php echo $vivo; ?>,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Vivo'
      },
      {
        value    : <?php echo $sony; ?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Sony'
      },
      {
        value    : <?php echo $nokia; ?>,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Nokia'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

  })
</script> 
             <div class="table-responsive mailbox-messages"> 
             <p></p>
             
        
           
             </div>  </div>
            </div>
           </div> 
         </div>
        
        <div class="span3"> 
         
      </div> 
    </div> 
<!--End-Chart-box--> 

 
 
    <div id="myModal" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Add new motorised equipment</h3>
              </div>
              <div class="modal-body">
              
               <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Vehicle information</h5>
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOne" style="background-color: #fff;">
              <div class="widget-content"> 
              
             <form class="form-horizontal" action="process_newvehicle.php" method="POST" style="height:auto;">
                
               <table class="table" style="border:0px;">
              <tr>  
                <th style="width:35%;border:0px;">Registration number</th> 
				<th style="width:65%;border:0px;"> <input type="text" id="REGISTRATIONNO" name="REGISTRATIONNO"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
               </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
              <tr>   
                <th style="width:35%;border:0px;">Make</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="MAKE" id="MAKE"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
             
               <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                 <th style="width:35%;border:0px;">Type</th> 
				<th style="width:65%;border:0px;"> <input type="text" id="TYPE" name="TYPE" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                  <th style="width:35%;border:0px;">Model</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="MODEL" id="MODEL"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
               
                
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:35%;border:0px;">color</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="COLOR" id="COLOR" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                </tr>
			  </table> 
              
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:35%;border:0px;">Year of manufacture</th> 
				<th style="width:65%;border:0px;"> <input type="date" name="YOM" id="YOM"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                <th style="width:35%;border:0px;">Power</th> 
				<th style="width:65%;border:0px;"> <input type="text"  name="POWER" id="POWER" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:35%;border:0px;">Category</th> 
				<th style="width:65%;border:0px;"> <select id="CATEGORY" name="CATEGORY"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> 
                        <option> </option>
                        <option> MANAGERIAL</option>
                        <option> SERVICE</option> 
                </select>
               </tr>
			  </table> 
              
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:35%;border:0px;">Equipment type</th> 
				<th style="width:65%;border:0px;"> <select id="EQUIPMENTCATEGORY" name="EQUIPMENTCATEGORY"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> 
                        <option> MOTOR VEHICLE</option>
                        <option> MOTOR CYCLE</option>
                        <option> HEAVY MOTOR EQUIPMENT</option>
                        <option> GENERATOR</option> 
                        <option> LAWN MOVER</option> 
                        <option> OTHERS</option>
                </select>
               </tr>
			  </table> 
              
               
               </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon">
              <i class="icon-circle-arrow-right"></i></span>
                <h5>Next 2/4</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwo" style="background-color:#fff;">
              <div class="widget-content">
              
                <table class="table" style="border:0px; margin-top:0px;">
               <tr> 
                 <th style="width:35%;border:0px;">Seating capacity</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="SEATINGCAPACITY" id="SEATINGCAPACITY"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                  </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;">Functional status</th> 
				<th style="width:65%;border:0px;"> <select id="FUNCTIONALSTATUS" name="FUNCTIONALSTATUS" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                 <option value="RUNNING"> RUNNING</option>
                        <option>DOWN </option>
                        <option>REPAIRABLE </option>
                        </select>
                  </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;">Fuel type</th> 
				<th style="width:65%;border:0px;"> <select name="FUELTYPE" id="FUELTYPE"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                         <option>  </option>
                         <option>DIESEL </option>
                         <option>PETROL </option>
                         </select>
                 </th>   
                   </tr>
			  </table> 
               
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                <th style="width:35%;border:0px;">Consuption per KM</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="CONSUMPTIONPERKM" id="CONSUMPTIONPERKM"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                   </tr>
			  </table> 
               
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                   <th style="width:35%;border:0px;">Engine number</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="ENGINENO" id="ENGINENO"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                  </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:35%;border:0px;">Chasis number</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="CHASSISNO" id="CHASSISNO"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                  </tr>
			  </table> 
               
              <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                  <th style="width:35%;border:0px;">Odometer status</th> 
				<th style="width:65%;border:0px;"> <select name="ODOMETERSTATUS" id="ODOMETERSTATUS"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                         <option>  </option>
                         <option>OPERATIONAL</option>
                         <option>NOT OPERATIONAL</option>
                         </select>
                 </th>   
                  </tr>
			  </table> 
               
              <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                 <th style="width:35%;border:0px;">Odometer type</th> 
				 <th style="width:20%;border:0px;"> 
                  <input type="radio" name="ODOMETERTYPE" value="KM" id="KM" checked="" style="margin-top:-4px;"> &nbsp;KM
				  </th>
                    
                    <th style="width:20%;border:0px;">
					<input type="radio" class="switch-input" name="ODOMETERTYPE" value="HRS" id="HRS" style="margin-top:-4px;"> &nbsp;HRS</th>
                    
                    <th style="width:25%;border:0px;">  
					<input type="radio" class="switch-input" name="ODOMETERTYPE" value="MILES" id="MILES" style="margin-top:-4px;"> &nbsp;MILES</th>  
              </tr>
			  </table> 
               
               </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTthree" data-toggle="collapse"> <span class="icon">
              <i class="icon-circle-arrow-right"></i></span>
                 <h5>Next 3/4</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTthree" style="background-color:#fff;">
              <div class="widget-content">
              
                <table class="table" style="border:0px; margin-top:0px;">
                 <tr>   
                 <th style="width:35%;border:0px;">Acquisition date</th> 
				<th style="width:65%;border:0px;"> <input type="date" name="ACQUISITIONDATE" id="ACQUISITIONDATE" placeholder="yyyy / mm / dd"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px;"> </th> 
                 </tr>
			  </table> 
              
                
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;">Purchase cost</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="PURCHASECOST" id="PURCHASECOST"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
			  </table> 
            
 
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr>   
                 <th style="width:35%;border:0px;">Purchased / Leased from</th> 
				<th style="width:65%;border:0px;"> <input type="text"  name="SUPPLIEDBY" id="SUPPLIEDBY" 
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
			  </table>  
                    
               
                <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:35%;border:0px;">Holding type</th> 
				 <th style="width:30%;border:0px;"> 
                   <input type="radio" class="switch-input" name="HOLDSTATUS" value="PURCHASED" id="HOLDSTATUS" checked="" style="margin-top:-4px;"> &nbsp;PURCHASED</th> 
                     
                    <th style="width:35%;border:0px;">
					<input type="radio" class="switch-input" name="HOLDSTATUS" value="PROJECT SUPPORT" id="HOLDSTATUS" style="margin-top:-4px;">  &nbsp;PROJECT SUPPORT</th> 
                  </th>  
              </tr>
			  </table> 
              
                 
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;">User department</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="USERDEPT" id="USERDEPT"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
			  </table> 
            
               
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;">Location</th> 
				<th style="width:65%;border:0px;"> <input type="text" name="LOCATION" id="LOCATION"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
			  </table> 
            
               
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;">Division</th> 
				<th style="width:65%;border:0px;"> <select name="DIVISION" id="DIVISION"
				  style="width:100%; font-weight:normal; background-color:#fff;">
                  <option></option>
                  <option>HEADQUARTER</option>
                  <option>KAWEMPE</option>
                  <option>NAKAWA</option>
                  <option>CENTRAL</option>
                  <option>LUBAGA</option>
                  <option>MAKINDYE</option>
                   </select> 
                   </th>  
              </tr>
			  </table> 
            
                  <input type="hidden" name="ASSETIMAGE" id="ASSETIMAGE"style="margin-top: -18px;margin-left: 0px;width: 166px;"/> 
                  
                 <center><input type="submit" name="button" id="button" value="Save" />
          <button type="button" class=" " data-dismiss="modal">Close</button></center>
         </form> 
               </div>
            </div>
          </div> 
        </div>
                
              </div>
            </div>

<!--End new vehicle----------------------------------------------------------------------------------------------------------------------------------->             
            
                
            <div id="myloadreview" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
               <center> <h3>Fuel loading due for review
               &nbsp; 
               <a href="#myauthorizations" data-toggle="modal"><button class=" " style="margin-top: -5px;"><i class="icon-edit"> </i>My authorised requests</button></a>
                </h3></center>
              </div>
              <div class="modal-body">
                
             <div class=""  id="getveview" >  </div>
                <script> 
          function getveview(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel/get_reveiew.php?q='+odno,
                       success : function(data){
                                $('#getveview').html(data);
								$("#ouxxxz").modal("show");
                                 }
               });
               } 
          </script> 
           
              <table id="expreview" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>   
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>       
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Pending' AND Throughoneaccount='$rm' order by date desc");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['Serial']."***".$res['purchaseid'];
		echo "<tr>"; 
		echo "<td>".$res['purchaseid']."</td>";
		echo "<td>".$res['date']."</td>"; 
		echo "<td>".$res['name']."</td>";  
	    echo '<td>  
		        <a id="101__'.$dtszs.'" href="javascript:void(0)" onclick="getveview(this.id)" data-toggle="tooltip" title="Load request" 
				style="color: #fff;border-radius: 6px; height: 17px;" <button class="btn btn-info"> Review </span></a>    
               </td>'; 	    	
	}
	   
    ?>
	</tbody>
  </table>   
                
              </div>
              <div class="modal-footer"> <a href="fleet_administrator.php"  class="btn btn-primary">Cancel</a> </div>
            </div>
          </div>
        </div>          
           
         <div id="myauthorizations" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
               <center> <h3>My authorised fuel loading 
                 </h3></center>
              </div>
              <div class="modal-body">
         <table id="exampleauth" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>    
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>      
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Approved' AND Throughoneaccount='$rm' AND date >='$date' order by date desc");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['Serial']."***".$res['purchaseid'];
		echo "<tr>"; 
		echo "<td>".$res['purchaseid']."</td>";
		echo "<td>".$res['date']."</td>"; 
		echo "<td>".$res['name']."</td>";   
	    echo "<td ><a href=\"fuel/get_loadmemo.php?purchaseid=$res[purchaseid]\"> &nbsp;&nbsp;<B>Print</B></a>  
			    </td>";    	
	}
	   
    ?>

	</tbody>
  </table>  
             
                
              </div>
               <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary" href="#">Cancel</a> </div>
            </div>
          </div>
        </div>      
            
    
        
         <div id="myloadapprovals" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
               <center> <h3>Fuel loading due for approval
               &nbsp; 
               <a href="#myapprovals" data-toggle="modal"><button class=" " style="margin-top: -5px;"><i class="icon-edit"> </i>My approved requests</button></a>
                </h3></center>
               </h3></center>
              </div>
              <div class="modal-body">
              
               
             <div class=""  id="getloadupdate" >  </div>
                <script> 
          function getloadupdate(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel/get_loadupdate.php?q='+odno,
                       success : function(data){
                                $('#getloadupdate').html(data);
								$("#ouz").modal("show");
                                 }
               });
               } 
          </script> 
          
         	 
             
              <table id="exampprove" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>   
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>      
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Reviewed' AND Loadreview ='Pending' AND Toaccount='$rm' order by date desc");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['Serial']."***".$res['purchaseid'];
		echo "<tr>"; 
		echo "<td>".$res['purchaseid']."</td>";
		echo "<td>".$res['date']."</td>"; 
		echo "<td>".$res['name']."</td>";  
	    echo '<td>  
		        <a id="101__'.$dtszs.'" href="javascript:void(0)" onclick="getloadupdate(this.id)" data-toggle="tooltip" title="Click to approve" 
				style="color: #fff;border-radius: 6px; height: 17px;" <button class="btn btn-danger"> Approve </span></a>    
               </td>'; 	    	
	}
	   
    ?>
	</tbody>
  </table>   
                
              </div>
             <div class="modal-footer"> <a href="fleet_administrator.php"  class="btn btn-primary">Cancel</a> </div>
            </div>
          </div>
        </div>          
            
            
         <div id="myapprovals" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <center><h3>My approved requests</h3></center>
              </div>
              <div class="modal-body">
               <table id="exampleauth" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                    <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>    
           </tr>
        </thead>
        <tfoot>
          <tr>
		            <th>ID</th><th>DATE</th>
					<th>INITIATOR</th> 
                    <th>ACTION</th>      
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 $date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Approved' AND Loadreview ='Verified' AND Toaccount='$rm' AND date >='$date' order by date desc");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['Serial']."***".$res['purchaseid'];
		echo "<tr>"; 
		echo "<td>".$res['purchaseid']."</td>";
		echo "<td>".$res['date']."</td>"; 
		echo "<td>".$res['name']."</td>";   
	    echo "<td ><a href=\"fuel/get_loadmemo.php?purchaseid=$res[purchaseid]\"> &nbsp;&nbsp;<B>Print</B></a>  
			    </td>";    	
	}
	   
    ?>
	</tbody>
  </table>  
             
                
              </div>
              <div class="modal-footer">  <a data-dismiss="modal" class="btn" href="#">Cancel</a> </div>
            </div>
          </div>
        </div>         
            
            
            <div id="myModal2" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Alert modal</h3>
              </div>
              <div class="modal-body">
                <p><img src="images/gallery/imgbox3.jpg"/></p>
              </div>
              <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Cancel</a> </div>
            </div>
            
            <div id="myAlert" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Alert modal</h3>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet...</p>
              </div>
              <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary" href="#">Confirm</a> <a data-dismiss="modal" class="btn" href="#">Cancel</a> </div>
            </div>
          </div>
        </div>          
       </div>
       
        <div id="myloadreview" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Fuel loading due for review</h3>
              </div>
              <div class="modal-body">
              
             
                
              </div>
              <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary" href="#">Confirm</a> <a data-dismiss="modal" class="btn" href="#">Cancel</a> </div>
            </div>
          </div>
        </div>          
            
        
         <div id="myloadapprovals" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Fuel loading due for approval</h3>
              </div>
              <div class="modal-body">
              
             
                
              </div>
              <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary" href="#">Confirm</a> <a data-dismiss="modal" class="btn" href="#">Cancel</a> </div>
            </div>
          </div>
        </div>          
 </div></div>
              </div>
<!--Footer-part--> 
</div>
<!--End-Footer-part-->
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.popover.js"></script>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../plugins/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../plugins/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../plugins/flot/jquery.flot.categories.min.js"></script>
</body>
</html>

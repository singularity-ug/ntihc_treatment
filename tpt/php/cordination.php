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
<body style="background: #fff;"> 

  
 <!--Chart-box-->
     
            
       <div class="span12"> <div class="span12">
       <div class="span5">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr> 
         
         <th style="width:33.33333333%;border:0px;"> <a href="#mybooking" data-toggle="modal" class=""><i class="icon-hdd"></i>Book&nbsp;a&nbsp;vehicle</a></th>
         <td style="width:33.33333333%;border:0px;"> <a href="fuel_requisition.php" class=""><i class="icon-home"></i><b>Request&nbsp;fuel</b></a></td>
     <td style="width:33.33333333%;border:0px;"> <a href="../index.php" class=""><i class="icon-off"></i>Logout</a>  
         </td>  
        </tr>
        </table>
    </div><div class="span7"></div></div>
    
    <div class="span12">   
    <div class="span3">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
     <td style="width:33.33333333%; border: 0px;">  
   <i class=" "><a href="../../admin/sys_dashboard.php">
                <img src="../img/demo/health-insurance-icon-png-3.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Dashboard</small></li></a>
     </td>  
     <td style="width:33.33333333%; border: 0px;">  
    <i class=" "><a href="dashboard.php">
                <img src="../img/demo/datexpot.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Home</small></li></a>
     </td>  
     <td style="width:33.33333333%; border: 0px;">  
    <class="" style="text-align:left;"><i class=" "><a href="fuel_review.php">
                <img src="../img/demo/33989241-blue-vehicle-icons-on-white-background.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Issue fuel</small></li></a>
     </td>  
    </td>   </tbody> </table>  </div>  
      
  
  <div class="span3">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
   
     <td style="width:33.33333333%; border: 0px;">  
     <i class=" "><a href="#newvehicle" data-toggle="modal" class=""> 
                <img src="../img/demo/images.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Vehicles</small></li></a>
     </td>  
     <td style="width:33.33333333%; border: 0px;">  
    <i class=" "><a href="myfilemgr/index.php">
                <img src="../img/demo/Open-file-icon.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Files mgr</small></li></a>
     </td>  
      <td style="width:33.33333333%; border: 0px;">    
         <div class="btn-group" style="margin-top: 0px;margin-left: -10px;background-color:transparent;">
         <img src="../img/demo/59449894425chart-512.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle"> 
            <button data-toggle="dropdown" class="" style="font-size:11px; background-color:transparent;">Reports<span class="caret"></span></button>
            <ul class="dropdown-menu" style="background-color:#fff;">
               
               <li><a href="fuel/cordination_reports.php?d1=0&d2=0">Cordination reports</a></li> 
               <li class="divider"></li> 
         
            </ul>  
         </div> 
     </td>  
    </td>   </tbody> </table>  </div>  
      
      
          
    <div class="span3">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
     <td style="width:33.33333333%; border: 0px;">    
         <div class="btn-group" style="margin-top: 0px;margin-left: -10px;background-color:transparent;">
         <img src="../img/demo/images (1).jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle"> 
            <button data-toggle="dropdown" class="" style="font-size:11px; background-color:transparent;">Setup<span class="caret"></span></button>
            <ul class="dropdown-menu" style="background-color:transparent;">
              <li><a href="#"> </a></li> 
               <li><a href="#"> </a></li>
              <li class="divider"></li> 
            </ul>  
         </div> 
     </td>  
     <td style="width:33.33333333%; border: 0px;">    
         <div class="btn-group" style="margin-top: 0px;margin-left: -10px;background-color:transparent;">
         <img src="../img/demo/xtra.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle"> 
            <button data-toggle="dropdown" class="" style="font-size:11px; background-color:transparent;">Export<span class="caret"></span></button>
            <ul class="dropdown-menu" style="background-color:transparent;">
              <li><a href="#"> </a></li> 
               <li><a href="#"> </a></li>
              <li class="divider"></li> 
            </ul>  
         </div> 
     </td>   
     <td style="width:33.33333333%; border: 0px;">    
         <div class="btn-group" style="margin-top: 0px;margin-left: -10px;background-color:transparent;">
         <img src="../img/demo/admin.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle"> 
            <button data-toggle="dropdown" class="" style="font-size:11px; background-color:transparent;">Others&nbsp;&nbsp;<span class="caret"></span></button>
            <ul class="dropdown-menu" style="background-color:transparent;">
               <li><a href="#"> </a></li> 
               <li><a href="#"> </a></li> 
              <li class="divider"></li> 
            </ul>  
         </div> 
     </td>  
    </td>   </tbody> </table>  </div> </div>
      
      
        
      <div class="span12">  <br>
        
       <div class="span7">
         
    
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
            
             </div> 
        </div> 
        
             <div class="span4">
                <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
     <td style="width:48%; border-radius: 11px; 
         border: 2px solid rgb(230, 220, 218); border-radius:8px; 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">
   <center>Incoming transport reservation(s)&nbsp;<br>
   <b class=""> 
      <?php 
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE  Allocationstatus ='Pending'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
   </b></center>        
    </td> 
  
   <td style="width:4%; border: 0px;"> </td>
     
   <td style="width:48%; border-radius: 11px; 
         border: 2px solid rgb(230, 220, 218); border-radius:8px; 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">
   <center>Total reservations allocated&nbsp;<br>
   <b class=""> 
     <?php
      
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

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
   </b></center>        
    </td>
    
 </tbody>
 </table> 
 
  <br>        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>    
       <td style="width:48%; border-radius: 11px; 
        border: 2px solid rgb(230, 220, 218); border-radius:8px; 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">
   <center>Number of rejected orders &nbsp;<br>
   <b class=""> 
   
                 <?php
      
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

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
   </b></center>        
    </td>
     
   <td style="width:4%; border: 1px;"></td>
   
     <td style="width:48%; border-radius: 11px; 
        border: 2px solid rgb(230, 220, 218); border-radius:8px; 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;"> 
   <center>Total Orders as of <?php echo date('y-m-d'); ?>&nbsp;<br>
   <b class=""> 
   <?php
      
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

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
   </b></center>        
    </td>
 </tbody>
 </table> 
       </div>
          </div> 
        </div> 
      </div>  
        
      
    <div class="span12"><div class="span12">     <div class="span11"> 
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
                <canvas id="barChart" style="height: 260px;
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

          </div>
          </div> 
        </div> 
      </div> 
      
      
         
    
</div>
      
    </div>
<!--End-Chart-box-->
 
  
 <div id="mybooking" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Transport reservation order</h3>
              </div>
              <div class="modal-body">


                <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1mo">Book</a></li>
              <li><a data-toggle="tab" href="#tab2mo">Next</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content" style="background-color: #fff;">
            <div id="tab1mo" class="tab-pane active">
           <form class="form-horizontal" action="booking/process_ftlbookings.php" method="POST" style="height:auto;">

              <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>
                <th style="width:30%;border:0px;">Date</th>
        <th style="width:70%;border:0px;"> <input type="date" id="Createddate" name="Createddate" value="<?php echo date('y-m-d'); ?>"
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
              
              
                <table class="table" style="border:0px; margin-top:-23px;">
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

            </div>
            <div id="tab2mo" class="tab-pane">

              
              <table class="table" style="border:0px; margin-top:0px;">
              <tr>
                <th style="width:40%;border:0px;">Travel date</th>
        <th style="width:60%;border:0px;"> <input type="date" id="Reservationdate_from" name="Reservationdate_from" value="<?php echo date('y-m-d'); ?>"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>
                 </tr>
           </table>
                <span>
                <table class="table" style="border:0px; margin-top:-23px;">
                <tr>
                <th style="width:40%;border:0px;">Return date</th>
        <th style="width:60%;border:0px;"> <input type="date" id="Reservationdate_to" name="Reservationdate_to" value="<?php echo date('y-m-d'); ?>"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>
              </tr>
        </table>  </span>


               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
                <th style="width:40%;border:0px;">Departure time</th>
        <th style="width:60%;border:0px;"> <input type="time" id="Departuretime" name="Departuretime"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>
                  </tr>
         </table>

                <span>
                <table class="table" style="border:0px; margin-top:-23px;">
               <tr>
                <th style="width:40%;border:0px;">Expected return time</th>
        <th style="width:60%;border:0px;"> <input type="time" id="Pickuptime_expected" name="Pickuptime_expected"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
        </table>   </span>

              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
                <th style="width:40%;border:0px;">Prefered vehicle</th>
        <th style="width:60%;border:0px;"> <select id="Preferedvehicle" name="Preferedvehicle"
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
                <th style="width:40%;border:0px;">Passengers</th>
        <th style="width:60%;border:0px;"> <input type="text" id="Passengers" name="Passengers"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; text-align:center; font-weight:bold; ">  </th>

                <input type="hidden" id="ordertype" name="ordertype" value="Reservation">
                 <input type="hidden" id="fiscalmonth" name="fiscalmonth" value="<?php echo date('F'); ?> <?php echo date("Y");?>" >
         
                </tr>
        </table>
              <center>  <input type="submit" name="button" id="button" value="Save" />
            </form>

            </div>
          </div>
        </div> 

              </div>
            </div>
          </div>
        </div>
   
       
<div class="row-fluid"> 
</div> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.validate.js"></script>
<script src="../js/matrix.js"></script>  
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/matrix.wizard.js"></script>  
</body>
</html>

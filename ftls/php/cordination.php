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
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../css/uniform.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 

  <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../css/notifier2.css" /> 
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

 <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stdd ="";
if( $result = $connect->query("SELECT * FROM motorisedequipments WHERE GENERALSTATUS = 'OPERATIONAL' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['REGISTRATIONNO'] ." </option>";   }
  }
$connect->close();
?> 

 <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stssl ="";
if( $result = $connect->query("SELECT * FROM panel WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?>  
</head>
 
     <div class="col-sm-1">
       </div>
        <div class="col-sm-10">
 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class=""></i> Home </a></h5>
        </div>
        <div class="widget-content" style="background-color: #fff;">
          <div class="row-fluid">
            <div class="span12"> 
              
             <img src="../img/logsbig.png" width="100%" height="30%">
             
        <center> <p style="color:#000; font-weight:bold;font-size:10px; background-color:#fff; font-family:lcd;margin-top: 0px;">
         <b>FLEET CORDINATION UNIT</b> </p> </center> 
          
     <form class="form-horizontal" method="post" action="fuel/fuel_requisitionprocess.php" style="height:auto;">  
       
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
             
             
             <div class="table-responsive mailbox-messages" style="border:0px;"> 
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
      
      <BR>
     
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr> 
             <th style="width:39%; text-align:left; border:0px;"> <strong>Total&nbsp;No.&nbsp;of pending&nbsp;orders</strong></th>
       <th style="width:10%; text-align:left; border:0px;">  
       <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5"> 
       <?php 
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Pending'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
             
       </td>  
       <th style="width:2%; text-align:left; border:0px;">  </th>
       <th style="width:39%; text-align:left; border:0px;"> <strong>Total allocated orders </strong> </th>
       <th style="width:10%; text-align:left; border:0px;">   
       <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5"> 
        <?php 
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date' AND Allocationstatus ='Allocated'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>

       </td>  
       </tr>             
             </table> 
       
           <BR>
       
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr> 
             <th style="width:39%; text-align:left; border:0px;">  <strong>Total&nbsp;No.&nbsp;of rejected&nbsp;orders</strong></th>
       <th style="width:10%; text-align:left; border:0px;">   
       <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5"> 
       <?php
      
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date' AND Allocationstatus ='Rejected'")) { 
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
            
       </td>  
       <th style="width:2%; text-align:left; border:0px;">  </th>
       <th style="width:39%; text-align:left; border:0px;"><strong>Total&nbsp;Orders as of <?php echo date('d-m-y'); ?></strong>  </th>
       <th style="width:10%; text-align:left; border:0px;">  
       <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5"> <?php 
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>           </b>
       </td>  
       </tr>             
             </table> 
        
 


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
        <BR> 
              <h5 class="box-title">Transport reservation patterns (<?php echo $year-1; ?> vs <?php echo $year; ?>)</h5>

            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height: 200px;
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
 
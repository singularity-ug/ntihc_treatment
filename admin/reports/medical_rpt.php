 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>imms</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css"> 
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
    "iDisplayLength":5,
        dom: 'Bfrtip',
        buttons: [
 
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
        font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>

</head> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
      
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:#d2d6de;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
          <li class="active"><a href="../sys_dashboard.php" class="" >Dashboard<span class="sr-only">(current)</span></a></li> 
              
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../../index.php"> <span class="glyphicon glyphicon-log-in"></span> Logout</li></a>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              </li>
              <!-- Menu Body -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button --> 
        </ul>
      </div>

    </nav>
  </header>
    
   
     
    <!-- Main content -->
    <section class="content"> 
        <div class="col-xs-12"> 
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin" style="margin-top: -20px;">
        
          

     
         
       <div class="col-lg-2 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient" style="height:150px; font-weight:normal;border: 2px solid rgb(230, 220, 218);
       border-radius: 2px; border-right: 0px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid rgb(230, 220, 218);">
              <div class="inner"> 
             <a href="home_hr.php" class="small-box-footer"> General&nbsp;svc reports <i class=""></i></a>  
              <div class="pull-right box-tools">
                
             <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                    <ul class="dropdown-menu pull-left" role="menu">
          <li><a href="med_gender_vs_agegroup.php?d1=0&d2=0">Total number of clients</a></li> 
          <li><a href="med_gender_vs_agegroup_sti.php?d1=0&d2=0">Clients with STI</a></li> 
          <li><a href="med_gender_vs_agegroup_others.php?d1=0&d2=0">Clients with other ailments</a></li>
          <li><a href="med_gender_vs_agegroup_referrals.php?d1=0&d2=0">Periodical referrals</a></li>
          <li class="divider"></li>
          <li><a href="med_gender_vs_agegroup_user_tracker.php?d1=0&d2=0">Medical users tracker</a></li>
          <li><a href="med_problem_tracker.php?d1=0&d2=0">Medical problems analysis</a></li> 
           <li class="divider"></li>
           <li><a href="level1.php?d1=0&d2=0">Level 1:Attendence to all services</a></li> 
           <li><a href="level2.php?d1=0&d2=0">Level 2:Attendence by type of service and age-group</a></li>
           <li><a href="level3.php?d1=0&d2=0">Level 3:Attendence by type of service, age-group by sex</a></li>  
           <li><a href="level4a.php?d1=0&d2=0">Level 4a:Attendence to services by month</a></li>
           <li><a href="level4b.php?d1=0&d2=0">Level 4b:Monthly clients registered by service providers</a></li> 

                </ul>
                </div>
                </div> 
                </div>  
         <center> <img src="../../assets/imgx/imagesffffffff.png"width="100" height="100" style="height:70px; width:70px;" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
          </div></div> 
        <!-- ./col --> 
                 
                <div class="col-lg-2 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient" style="height:150px; font-weight:normal;border: 2px solid #dddddd; border-radius: 2px; border-right: 0px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid rgb(230, 220, 218);">
              <div class="inner"> 
             <a href="home_hr.php" class="small-box-footer">Counselling services<i class=""></i></a>  
              <div class="pull-right box-tools">
                
                  <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu">

          <li><a href="counselling_cases.php?d1=0&d2=0">Number of counselling cases</a></li>
          <li><a href="counselling_hct.php?d1=0&d2=0">Number of HCT clients</a></li> 
          <li><a href="counselling_art.php?d1=0&d2=0">Number of ART clients</a></li>  
          
          <li class="divider"></li>
          <li><a href="hct_user_tracker.php?d1=0&d2=0">HCT_User traker</a></li> 
          <li><a href="art_tool.php?d1=0&d2=0">Art tool</a></li>  
                  </ul>
                </div>
                </div> 
               </div>  
         <center> <img src="../../assets/imgx/indexreewss.png" width="100" height="100" style="height:70px; width:70px;" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
          </div></div> 
        <!-- ./col --> 
    
     <div class="col-lg-2 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient" style="height:150px; font-weight:normal;border: 2px solid #dddddd; border-radius: 2px; border-right: 0px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid rgb(230, 220, 218);">
              <div class="inner"> 
             <a href="home_hr.php" class="small-box-footer">Pregnancy related<i class=""></i></a>  
              <div class="pull-right box-tools">
                
             <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu">
          <li><a href="hcg_summary.php?d1=0&d2=0">HCG&nbsp;=>&nbsp;Number of HCGs</a></li> 
          <li><a href="hcg_demog.php?d1=0&d2=0">HCG&nbsp;=>&nbsp;Agegroup & gender</a></li> 
                    <li class="divider"></li>
         <li><a href="anc_general.php?d1=0&d2=0">ANC&nbsp;=>&nbsp;Cases by agegroup & gender</a></li> 
         <li><a href="../anc/anc_tally_tool.php?d1=0&d2=0">ANC&nbsp;=>&nbsp;Tally tool</a></li> 
          <li class="divider"></li>
          <li><a href="#">FP&nbsp;=>&nbsp;Cases by agegroup & gender</a></li> 
                    <li><a href="#">FP&nbsp;=>&nbsp;new vs follow up</a></li> 
          <li class="divider"></li>
          <li><a href="#">PAC&nbsp;=>&nbsp;Induced vs sponstaneous</a></li> 
                    <li><a href="#">PAC&nbsp;=>&nbsp;Agegroup & gender</a></li> 
          <li class="divider"></li>
          <li><a href="#">PNC&nbsp;=>&nbsp;Agegroup & gender</a></li> 
                    <li><a href="#">PNC&nbsp;=>&nbsp;New Vs Old</a></li> 
          
                  </ul>
                </div>
                </div> 
               </div>  
         <center> <img src="../../assets/imgx/index.png" width="100" height="100" style="height:70px; width:70px;" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
          </div></div> 
        <!-- ./col --> 
                      
             <div class="col-lg-2 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient" style="height:150px; font-weight:normal;border: 2px solid #dddddd; border-radius: 2px; border-right: 0px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid rgb(230, 220, 218);">
              <div class="inner"> 
             <a href="home_hr.php" class="small-box-footer">Dispensary reports<i class=""></i></a>  
              <div class="pull-right box-tools">
                
             <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu">
                    <li><a href="#">Drugs issuance report</a></li> 
          <li><a href="#">Drug levels tracker</a></li>   
                  </ul>
                </div>
                </div> 
               </div>  
         <center> <img src="../../database icons/59449894425chart-512.png" width="100" height="100" style="height:70px; width:70px;" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
          </div></div> 
        <!-- ./col -->   
        
       <div class="col-lg-2 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient" style="height:150px; font-weight:normal;border: 2px solid #dddddd; border-radius: 2px; border-right: 0px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid rgb(230, 220, 218);">
              <div class="inner"> 
             <a href="home_hr.php" class="small-box-footer">Tollfree reports<i class=""></i></a>  
              <div class="pull-right box-tools">
                
             <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu">
                    <li><a href="tollree_rpt.php">View all</a></li>  
                  </ul>
                </div>
                </div> 
               </div>  
         <center> <img src="../../database icons/report-icon-23.png" width="100" height="100" style="height:70px; width:70px;" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
          </div></div> 
        <!-- ./col -->    
        
       <div class="col-lg-2 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient" style="height:150px; font-weight:normal;border: 2px solid #dddddd; border-radius: 2px; border-right: 0px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid rgb(230, 220, 218);">
              <div class="inner"> 
             <a href="home_hr.php" class="small-box-footer">Others / Export <i class=""></i></a>  
              <div class="pull-right box-tools">
                
             <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                   
                   <li><a href="../../medical/waiting_room.php">Waiting room </a></li>  
                   <li><a href="register.php">Clients vist history</a></li> 
                   <li><a href="register_medical.php">Medical examination data</a></li>  

                  </ul>
                </div>
                </div> 
               </div>  
         <center> <img src="../../assets/imgx/ttttttttt.jpg" width="100" height="100" style="height:70px; width:70px;" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
          </div></div> 
        <!-- ./col -->      
        

      
   <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
        
              <div class="col-lg-7" > 
<!-- ChartJS -->
<script src="chartjs/chart.js/Chart.js"></script> 
              <?php
                //set timezone
          //date_default_timezone_set('Asia/Manila');
          $year = date('Y');
              ?>
              <h5 class="box-title">Clients vist trends(<?php echo $year-1; ?> vs <?php echo $year; ?>)</h5>

            
              <div class="chart">
                <canvas id="barChart" style="height: 210px; width: 850px;"></canvas>
              </div>
           
          
<?php include('chartjs/data_clients.php'); ?>
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
        
        <div class="col-sm-5">
        
              <canvas id="pieChart" style="height:200px"></canvas>
            
<?php include('doughnutchart/data.php'); ?>
<script>
  $(function () {
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
       {
        value    : <?php echo $Central; ?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Central'
      },
      {
        value    : <?php echo $Lubaga; ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Lubaga'
      },
      {
        value    : <?php echo $Nakawa; ?>,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Nakawa'
      },
      {
        value    : <?php echo $Makindye; ?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Makindye'
      },
      {
        value    : <?php echo $Kawempe; ?>,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Kawempe'
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
    
     <p> <b><center>Toll free callers for Kampala (All divisions)</center></b></p> 
        </div>
        
        </div>
              <!-- /.tab-pane -->



          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">  
      
      
           <li"><a href="#tab_1-1" data-toggle="tab">

          
           <li><a href="#tab_2-2" data-toggle="tab">

         
           <li><a href="#tab_3-2" data-toggle="tab">

           <li><a href="#tab_4-2" data-toggle="tab">

            

              <div class="tab-pane" id="tab_2-2">

                 <div class="panel-body">
       <font style="  text-shadow:1px 1px 2px #cbafaf; color:#fe1313; margin-top:-10px;"> 
    Medical service providers Performance tracker as of  <?php echo date('Y-m-d'); ?></font> 
  <br><br>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;" width="100%">
    <thead> 
    <tr>    
            <th style="text-align:left;"> DATE </th> 
            <th style="text-align:left;"> MEDICAL SERVICE PROVIDER</th>  
            <th style="text-align:center;">TOTAL CLIENTS</th> 
            <th  colspan="5"  style="text-align:center;">SERVICE BREAKDOWN </th>   
             
        </tr> 
        <tr>   
        <th  style="text-align:center;">   </th>
        <th  style="text-align:center;">  </th>
        <th  style="text-align:center;">  </th>
    
        <th  style="text-align:center;"> MEDICAL </th> 
        <th  style="text-align:center;"> HCG </th> 
        <th  style="text-align:center;">  REFERRAL</th>
        <th  style="text-align:center;">  ART </th>
        <th  style="text-align:center;"> LAB ORDERS</th>
                
    </tr>
    </thead>
    <tbody>   
              
            <?php
              include('connftl.php');
              $date = date("Y-m-d").' 00:00:00';
              $query1=mysqli_query($conn,"select COUNT(NTIHCNO), SUM(MEDICAL), SUM(HCG), SUM(REFERAL),SUM(ART),SUM(LABVIST),
              DATECREATED,SERVICEPROVIDER from cmpatientsregistration 
                                          WHERE TIMESTAMP >='$date' AND INSVCSTATUS='TREATMENT ROOM'  
                            GROUP BY SERVICEPROVIDER ASC");
              while($row1=mysqli_fetch_array($query1)){
              ?>
                <tr>
                  <td class="hidden"></td>
                                    <td> <?php echo date('M d, Y', strtotime($row1['DATECREATED'])); ?>  </td>
                  <td><?php echo $row1['SERVICEPROVIDER']; ?> </td>
                  <td style="text-align:center; background-color:#e5e5e5;"><B ><?php echo $row1['COUNT(NTIHCNO)']; ?></B></td> 
                  <td style="text-align:center;"><?php echo $row1['SUM(MEDICAL)']; ?></td>
                  <td style="text-align:center;"><?php echo $row1['SUM(HCG)']; ?> </td>
                  <td style="text-align:center;"><?php echo $row1['SUM(REFERAL)']; ?></td>
                  <td style="text-align:center;" ><?php echo $row1['SUM(ART)']; ?> </td>
                  <td style="text-align:center;"><?php echo $row1['SUM(LABVIST)']; ?> </td> 
                </tr>
              <?php
              }
              ?> 
              </tbody>
              </table> 
              </div> 

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
<div class="panel-body">
       <font style="  text-shadow:1px 1px 2px #cbafaf; color:#000; margin-top:-10px;"> 
    Counselling service providers Performance tracker as of  <?php echo date('Y-m-d'); ?></font> 
  <br><br>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;" width="100%">
    <thead> 
    <tr>    
            <th style="text-align:left;"> DATE </th> 
            <th style="text-align:left;">HCT SERVICE PROVIDER</th>  
            <th style="text-align:center;">TOTAL CLIENTS</th> 
      
            <th  colspan="3"  style="text-align:center;">ACTION </th> 
      <th  colspan="2"  style="text-align:center;">REACTIVITY </th>   
            <th  colspan="3"  style="text-align:center;">ART CLINIC </th> 
      
       <th  style="text-align:center;"> LAB TESTS DONE</th>  
        </tr> 
        <tr>   
        <th  style="text-align:center;">   </th>
        <th  style="text-align:center;">  </th>
        <th  style="text-align:center;">  </th>
    
        <th  style="text-align:center;"> PENDING LAB RESULTS</th> 
        <th  style="text-align:center;"> PENDING HCT PTC </th> 
        <th  style="text-align:center;"> PTC DONE</th>
    
        <th  style="text-align:center;"> HIV (+) </th>
        <th  style="text-align:center;"> HIV (-)</th>
    
     <th  style="text-align:center;"> N/A</th>
         <th  style="text-align:center;"> REFERRED</th>
     <th  style="text-align:center;"> REJECTED</th> 
     
     <th  style="text-align:center;">  </th> 
                
    </tr>
  </thead>
  <tbody>       
              <?php
              include('connftl.php');
              $date = date("Y-m-d").' 00:00:00';
              $query1=mysqli_query($conn,"select COUNT(NTIHCNO),  
              DATECREATED,USERINITIAL,
              
              sum( if( TESTSTATUS = 'NOT STARTED', RECORDCOUNTER, 0 ) ) AS pending, 
              sum( if( TESTSTATUS = 'COMPLETED', RECORDCOUNTER, 0 ) ) AS comps,
              sum( if( TESTSTATUS = 'POST TEST COUNSELLING DONE', RECORDCOUNTER, 0 ) ) AS post,
              
              sum( if( FINALREACTIVITY = 'POSITIVE', RECORDCOUNTER, 0 ) ) AS reaction,
              sum( if( FINALREACTIVITY = 'NEGATIVE', RECORDCOUNTER, 0 ) ) AS negatex,
              
              sum( if( ARTCLINIC = 'NOT APPLICABLE', RECORDCOUNTER, 0 ) ) AS nonex,
              sum( if( ARTCLINIC = 'REFERRED', RECORDCOUNTER, 0 ) ) AS tricon,
              sum( if( ARTCLINIC = 'REJECTED', RECORDCOUNTER, 0 ) ) AS explode,
              
              sum( if( LABOREDRSTATUS = 'COMPLETED', RECORDCOUNTER, 0 ) ) AS succ
               
              from laboratory WHERE TIMESTAMP >='$date' AND REQUESTINGUNIT='COUNSELLING SERVICES' GROUP BY USERINITIAL ASC");
              while($row1=mysqli_fetch_array($query1)){
              ?>
                <tr>
                  <td class="hidden"></td>
                                    <td> <?php echo date('M d, Y', strtotime($row1['DATECREATED'])); ?>  </td>
                  <td><?php echo $row1['USERINITIAL']; ?> </td>
                  <td style="text-align:center; background-color:#e5e5e5;"><B ><?php echo $row1['COUNT(NTIHCNO)']; ?></B></td> 
                  <td style="text-align:center;"><?php echo $row1['pending']; ?></td>
                  <td style="text-align:center;"><?php echo $row1['comps']; ?> </td>
                  <td style="text-align:center;"><?php echo $row1['post']; ?></td>
                  <td style="text-align:center;" ><?php echo $row1['reaction']; ?> </td>
                  <td style="text-align:center;"><?php echo $row1['negatex']; ?> </td> 
                  
                  <td style="text-align:center;"><?php echo $row1['nonex']; ?></td>
                  <td style="text-align:center;" ><?php echo $row1['tricon']; ?> </td>
                  <td style="text-align:center;"><?php echo $row1['explode']; ?> </td> 
                  
                  <td style="text-align:center;"><?php echo $row1['succ']; ?> </td> 
                </tr>
              <?php
              }
            ?>
                    </tbody>
                </table>
              </div></div>
              
              <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_4-2">
          

              </div>
              <!-- /.tab-pane --> 
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->  
        
        
        
                     
                      <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="contactinfo" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            
                                              <p style="text-align:center;"> Please confirm your password to switch user mode ==> admin mode </p> 
                    
                      <form role="form"  action="../../../authenticate.php" method="POST" style="font-size:17px;";>
            
                      <input  type="password" class="form-control" style="height:25px;"  placeholder="Password" type="password" name="pwd" required=""  value=""> 

                      <input type="hidden" class="form-control"  style="height:25px;"  placeholder="Username"  name="username" type="text" value="<?php  echo $rm; ?>" 
                      readonly="readonly">  
                     <br>
                      <center> <input type="submit" class="btn btn-success" value="Log In" >
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </center> 
                           </form>
                </div>    
                    
        
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;"> 
                                        <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                     
             
                    </div> 
                    </div>
                    
          </div>
          
          <!-- /.box -->
        </div>
          
        <!-- /.col -->
      </div>
       
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
 
<script src="../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
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
  
 <script type="text/javascript" src="../../assets/js/gauge.js"></script>
</body>
</html>

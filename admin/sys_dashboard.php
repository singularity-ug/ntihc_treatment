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

<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>imms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <link rel="stylesheet" type="text/css" href="cpane/bootstrap/css/bootstrap.min.css" />

    <link href="cpane/css/main.css" rel="stylesheet">
    <link href="cpane/css/font-style.css" rel="stylesheet">
    <link href="cpane/css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="cpane/js/jquery.js"></script>    
    <script type="text/javascript" src="cpane/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="cpane/js/lineandbars.js"></script>
    
  <script type="text/javascript" src="cpane/js/dash-charts.js"></script>
  <script type="text/javascript" src="cpane/js/gauge.js"></script>
  
  <!-- NOTY JAVASCRIPT -->
  <script type="text/javascript" src="cpane/js/noty/jquery.noty.js"></script>
  <script type="text/javascript" src="cpane/js/noty/layouts/top.js"></script>
  <script type="text/javascript" src="cpane/js/noty/layouts/topLeft.js"></script>
  <script type="text/javascript" src="cpane/js/noty/layouts/topRight.js"></script>
  <script type="text/javascript" src="cpane/js/noty/layouts/topCenter.js"></script>
  
  <!-- You can add more layouts if you want -->
  <script type="text/javascript" src="cpane/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
  <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
  <script src="cpane/js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="cpane/js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>    
  </head>
  <body>
  
    <!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top" style="background-color:#000;">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="../../assets/img/ntihclog2.PNG" 
            width="30" height="30" alt=""></a>
        </div> 
          <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html"><i class="icon-home icon-white"></i>
                 <marquee id="ticker" direction="right" loop="20"> Logout &nbsp; <b style="font-size:10px;"><?php echo $nameofuser; ?></b>  </marquee> <span class="sr-only">(current)</span></a></li> 
       
                       
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">

    <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
          <div class="dash-unit"> 
            <p></p> 
            <div class="row text-center pad-top">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="div-square" > 
                      <a href="../client_management.php" >
 <img src="../database icons/hr.jpg"width="100" height="100" style="height:35%; width:35%; border:6px solid #d70000;" class="img-circle">
                      <h5 style="color:#fff;">Clients&nbsp;Mgt &nbsp;&nbsp;module</h5> 
                      </a>
                      </div> 
                      </div> 

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="div-square" > 
                      <a href="reports/medical_rpt.php" >
 <img src="../database icons/report-icon-23.png"width="100" height="100" style="height:35%; width:35%; border:6px solid #d70000;" class="img-circle">
                      <h5 style="color:#fff;">Clients&nbsp;Mgt &nbsp;&nbsp;Reports</h5> 
                      </a>
                      </div> </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="div-square" > 
                      <a href="sys_dashboard.php" >
 <img src="../database icons/access-administrator-account.jpg"width="100" height="100" style="height:35%; width:35%; border:6px solid #d70000;" class="img-circle">
                      <h5 style="color:#fff;">Administration Module</h5> 
                      </a>
                      </div> 
                  </div> 

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="div-square" > 
                      <a href="sys_dashboard.php" >
 <img src="../database icons/59449894425chart-512.png"width="100" height="100" style="height:35%; width:35%; border:6px solid #d70000;" class="img-circle">
                      <h5 style="color:#fff;">Administration Reports</h5> 
                      </a>
                      </div> </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="div-square" > 
                      <a href="sys_quicklinks.php" >
 <img src="../database icons/proc.jpg"width="100" height="100" style="height:35%; width:35%; border:6px solid #d70000;" class="img-circle">
                      <h5 style="color:#fff;">Quick&nbsp;Links</h5> 
                      </a>
                      </div> 
                  </div> 

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <div class="div-square" > 
                      <a href="chart/index.php" >
 <img src="../database icons/approve2.png" width="100" height="100" style="height:35%; width:35%; border:6px solid #d70000;" class="img-circle">
                      <h5 style="color:#fff;">Support&nbsp;center</h5> 
                      </a>
                      </div> </div>
                  </div> 

        </div>
        </div>

       <div class="col-sm-3 col-lg-3">
 <div class="half-unit">
            <dtitle>Server uptime</dtitle>
            <hr>
              <div class="clockcenter">
            <div class="clockcenter" style="text-align: center; font-size: 37px;">

<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();  
         document.getElementById('txt').innerHTML =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script>
 
 <onLoad="startTime()">

<div id="txt"></div>       
   <ul class="ajax-loaders" style="margin-top: -18px;"> 
                      <li><img src="ajax-loaders/ajax-loader-5.gif" title="ajax-loaders/ajax-loader-5.gif"></li> 
                      </ul>             
            </div>  </div>
      </div>

      <!-- SERVER UPTIME -->
      <div class="half-unit">
            <dtitle>Remote storage</dtitle>
            <hr>
            <div class="cont">
          <canvas id="canvas" width="290" height="280" style="margin-left: 55px; margin-top:-60px;" data-toggle="tooltip" title="Access denied"> </canvas>
        </div>
      </div> 
      </div><!-- /row -->


      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
          <div class="dash-unit">
            <dtitle>System admin</dtitle>
            <hr>
        <div class="thumbnail">
         <img src="../database icons/admin2.jpg"width="100" height="100" style="height:25%; width:25%;" class="img-circle">
        </div><!-- /thumbnail -->
        <h1>Manage access levels</h1>
        <h3>Job process rights</h3>
        <br>
          <div class="info-user">
            <span aria-hidden="true" class="li_user fs1" data-toggle="tooltip" title="Restricted access"></span>
            <span aria-hidden="true" class="li_settings fs1" data-toggle="tooltip" title="Restricted access"></span>
            <span aria-hidden="true" class="li_mail fs1" data-toggle="tooltip" title="Restricted access"></span>
            <span aria-hidden="true" class="li_key fs1" data-toggle="tooltip" title="Restricted access"></span>
          </div>
        </div>
        </div>

         
        <div class="col-sm-3 col-lg-3"> 
      <!-- LOCAL TIME BLOCK -->
          <div class="half-unit">
            <dtitle>Procurement module</dtitle>
            <hr>
              <div class="clockcenter">
             <a href="proc/pmt/proc_pdu.php" >
 <img src="../database icons/employee.jpg" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>  
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
              </div>
      </div>

      <!-- SERVER UPTIME -->
      <div class="half-unit">
            <dtitle>Suppliers management</dtitle>
            <hr>
            <div class="cont">
          <a href="sys_dashboard" >
 <img src="../database icons/clients.jpg" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>   
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
        </div>
      </div>

        </div>
        </div><!-- /row -->
       
 
      <!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
    
    <!-- BARS CHART - lineandbars.js file -->     
          <div class="half-unit">
            <dtitle>Stores Management</dtitle>
            <hr>
            <div class="cont">
              <a href="proc/stores_mgt.php" >
 <img src="../database icons/microfinance-product-management-system.jpg" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>  
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
            </div>
          </div>

    <!-- TO DO LIST -->     
          <div class="half-unit">
            <dtitle>Assets Management</dtitle>
            <hr>
            <div class="cont">
            <a href="property/asset.php" >
 <img src="../database icons/press-nozbe.png" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>  
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a> 
             </div>
          </div>
        </div>

        <div class="col-sm-3 col-lg-3">

    <!-- LIVE VISITORS BLOCK -->     
          <div class="half-unit">
            <dtitle>Contracts Management</dtitle>
            <hr>
            <div class="cont">
              <a href="sys_dashboard.php" >
 <img src="../database icons/proc2.png" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>   
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
         
            </div>
          </div>
          
    <!-- PAGE VIEWS BLOCK -->     
          <div class="half-unit">
            <dtitle>Human Resouce Management</dtitle>
            <hr>
            <div class="cont">
              <a href="ahr/dashboard.php" >
 <img src="../database icons/access-administrator-account.jpg" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>   
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-lg-3">
    <!-- TOTAL SUBSCRIBERS BLOCK -->     
          <div class="half-unit">
            <dtitle>Fleet Management System</dtitle>
            <hr>
            <div class="cont">
              <a href="../../tpt/php/dashboard.php">
 <img src="../database icons/fleet.png" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>   
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
            </div>
          </div>
          
    <!-- FOLLOWERS BLOCK -->     
          <div class="half-unit">
            <dtitle>Petty Cash Management</dtitle>
            <hr>
            <div class="cont">
              <a href="petty_cash.php" >
 <img src="assets/imgx/images3388.jpg" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>   
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
            </div>
          </div>
        </div>

      <div class="col-sm-3 col-lg-3">
    <!-- TOTAL SUBSCRIBERS BLOCK -->     
          <div class="half-unit">
            <dtitle>Invoices and receipts</dtitle>
            <hr>
            <div class="cont">
              <a href="invoice/inv_receipts.php" >
 <img src="assets/imgx/kkk.png" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>  
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
            </div>
          </div>
          
    <!-- FOLLOWERS BLOCK -->     
          <div class="half-unit">
            <dtitle>Payment&nbsp;/&nbsp;vouchers</dtitle>
            <hr>
            <div class="cont">
              <a href="pmts/pmts_mgr.php" >
 <img src="assets/imgx/1stqtr.png" width="100" height="100" style="height:25%; width:25%; border:6px solid #d70000;" class="img-circle"></a>   
                  <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
          <a href="#" class="btn btn-close btn-round btn-default">0<i class=""></i></a>
            </div>
          </div>
        </div>
      </div><!-- /row -->
      
    <!-- FOURTH ROW OF BLOCKS -->     
   
       
      
  </div> <!-- /container -->
  <div id="footerwrap" style="background-color:#000; ">
        <footer class="clearfix"></footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-12">
         <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; border:0px; color:#fff;"><img src="../assets/img/ntihclog2.png"width="100" height="100" style="height:5%; width:5%;"
        &nbsp;<i class=""></i>Naguru teenage information and health center - Copyright 2017&nbsp;-&nbsp;2018</a>  
             
            </div>

          </div><!-- /row -->
        </div><!-- /container -->   
  </div><!-- /footerwrap -->
          
</body></html>
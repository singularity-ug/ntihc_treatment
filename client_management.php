<?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
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
    <title>Ntihc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="assets/admin_bootstrap/css/bootstrap.css" />

    <link href="assets/admin_css/main.css" rel="stylesheet">
    <link href="assets/admin_css/font-style.css" rel="stylesheet">
    <link href="assets/admin_css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src=" assets/js/jquery.js"></script>    
    <script type="text/javascript" src=" assets/admin_bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src=" assets/js/lineandbars.js"></script>
    
	<script type="text/javascript" src=" assets/js/dash-charts.js"></script>
	<script type="text/javascript" src=" assets/js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src=" assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src=" assets/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="assets/js/highcharts.js"></script>
	<script src=" js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src=" js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 70px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway --> 

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
          <a class="navbar-brand" href="client_management.php">Home</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="admin/sys_dashboard.php"><i class="icon-home icon-white"></i> Admin module</a></li> 
              <li><a href="admin/sys_quicklinks.php"><i class="icon-user icon-white"></i> Quick links</a></li>    
              <li><a href="index.php"><i class="icon-user icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
  <div class="col-sm-12">
	  <!-- FIRST ROW OF BLOCKS -->  
      <div class="col-sm-9">
      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-4">
      		<div class="half-unit">  
                <h1>Registration Desk</h1> 
				<div class="thumbnail"> 
				<a href="registration_desk.php"><img src="database icons/social_network-512.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail --> 
				 
				</div>
        </div>
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-4">
      		<div class="half-unit"> 
		  		    <h1>Treatment Room</h1> 
				<div class="thumbnail">
				<a href="client_medical.php"><img src="database icons/images.jpg" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->  
			</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-4">
      		<div class="half-unit">   
		  		    <h1>Counselling Room</h1> 
				<div class="thumbnail">
				<a href="counsellingroom.php"><img src="database icons/press-nozbe.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->  
        </div>
        </div> 
        
     
        <!-- DONUT CHART BLOCK -->
        <div class="col-sm-4">
      		<div class="half-unit">   
		  		    <h1>Laboratory</h1> 
				<div class="thumbnail">
				<a href="laboratory.php"><a href="client_lab.php"><img src="database icons/microfinance-product-management-system.jpg" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->  
        </div>
        </div> 
			        
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-4">
      		<div class="half-unit"> 
		  		    <h1>Antenatal Care</h1> 
				<div class="thumbnail">
					<a href="admin/anc/anc_home.php"><img src="database icons/icon-resources-staffing.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail --> 
			</div>
        </div>  
        
	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-4">
      		<div class="half-unit">  
	      		<h1>Postnatal Care</h1>  
				<div class="thumbnail">
				<a href="postnatalcare.php"><img src="database icons/guests.jpg" width="140" height="200" alt="" class="img-circle">
				</div><!-- /thumbnail -->  
					</div> 
			</div>
           
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-4">
      		<div class="half-unit">  
                <h1>Post Abortion Care</h1> 
				<div class="thumbnail">
				<a href="abortioncare.php"><img src="database icons/20151012_561baec335c5f.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
			   
			</div>
        </div>
      </div><!-- /row -->
     
 
	  <!-- THIRD ROW OF BLOCKS --> 
	    <div class="col-sm-4">
      		<div class="half-unit">  
	      		<h1>Family Planning</h1>  
				<div class="thumbnail">
					<a href="family_planning.php"><img src="database icons/queue-512.png" width="140" height="200" alt="" class="img-circle">
				</div><!-- /thumbnail --> 
        </div>
        </div>
         
	  <!-- TO DO LIST -->     
      		<div class="col-sm-4">
      		<div class="half-unit">  
	      		<h1>Dispensing</h1>  
				<div class="thumbnail">
				<a href="dispenser/drugs_mgr.php"><img src="database icons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png" width="140" height="200" alt="" class="img-circle">
				</div><!-- /thumbnail -->   
		    </div>
        </div> 
        </div>   
         
      <div class="col-sm-3" style="height:auto;">   
      <div class="half-unit">   
        <h1>Toll free</h1>  
        <div class="thumbnail">
        <a href="tollfree.php"><img src="database icons/toll-free.png" width="140" height="200" alt="" class="img-circle">
        </div>  
        </div>
        
             
        <div class="half-unit">  <a href="referral/index.php">  
        <h1>Referrals</h1> </a> 
        <div class="thumbnail">
        <a href="referral/index.php"><img src="database icons/press-nozbe.png" width="140" height="200" alt="" class="img-circle">
        </div>  
        </div>
              
                
        <div class="half-unit">   
        <h1>Reports</h1>  
        <div class="thumbnail">
        <a href="admin/reports/medical_rpt.php">
        <img src="database icons/59449894425chart-512.png" width="140" height="200" alt="" class="img-circle">
        </div>  
        </div>
        </div>          
                
      	
        </div>
        </div> 
        </div>		
	  <!-- FOURTH ROW OF BLOCKS -->     
	<div class="row"> 
     
				</div>
			</div> 
		</div><!--/row -->
     </div>
 </div>
       
	</div> <!-- /container -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12"> 
      			<p>Naguru Teenage Information and Health Centre - Admin dashboard - Copyright 2017</p> 
                <p><img src="assets/img/ntihclog2.png" width="50" height="50"  style="margin-left: -671px;margin-top: -37px;">
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
          
       
  <script type="text/javascript" src="assets/lib/jquery/jquery.min.js"> </script>
<script type="text/javascript">       
         
   function post()
{
  var comment = document.getElementById("comment").value;
  var name = document.getElementById("username").value;
  if(comment!='' && name!='')
  {
    $.ajax({
      type: 'post',
      url: 'post_messanger.php',
      data: 
      {
         user_comm:comment,
	     user_name:name
      },
      success: function (response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    document.getElementById("comment").value="";
        document.getElementById("username").value="";
  
      }
    });
  }
  
  return false;
}
</script>      
          
</body></html>

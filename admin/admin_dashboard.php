<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>NTIHC | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="../assets/admin_bootstrap/css/bootstrap.css" />

    <link href="../assets/admin_css/main.css" rel="stylesheet">
    <link href="../assets/admin_css/font-style.css" rel="stylesheet">
    <link href="../assets/admin_css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="../assets/js/jquery.js"></script>    
    <script type="text/javascript" src="../assets/admin_bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="../assets/js/lineandbars.js"></script>
    
	<script type="text/javascript" src="../assets/js/dash-charts.js"></script>
	<script type="text/javascript" src="../assets/js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="../assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src=" ../assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src=" ../assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src=" ../assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src=" ../assets/js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="../assets/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="../assets/js/highcharts.js"></script>
	<script src=" ../js/jquery.flexslider.js" type="text/javascript"></script>

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
<link rel="stylesheet" href="assets/notifier.css">
    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"> NTIHC</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="../dashboard.php" class="button5"><i class="icon-home icon-white"></i> Dashboard</a></li>                            
              <li><a href="admin_dashboard.php" class="button5"><i class="icon-th icon-white"></i> Home</a></li>
              <li><a href="sys_dashboard.php" class="button5"><i class="icon-th icon-white"></i> Navigation</a></li> 
              <li><a href="../index.php"><i class="icon-user icon-white"></i> Logout</a></li>

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
                <h1>Cash management</h1> 
				<div class="thumbnail"> 
				<a href="petty_cash.php"><img src="../database icons/budget.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail --> 
				 
				</div>
        </div>
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-4">
      		<div class="half-unit"> 
		  		    <h1>Human resource management</h1> 
				<div class="thumbnail">
				 <a href="home_hrmgt.php"><img src="../assets/sysicons/queue-512.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->  
			</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-4">
      		<div class="half-unit">   
		  		    <h1>Fleet management</h1> 
				<div class="thumbnail">
				<a href="fleet/fuel_mgt.php"><img src="../assets/sysicons/fleet.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->  
        </div>
        </div> 
        
     
        <!-- DONUT CHART BLOCK -->
        <div class="col-sm-4">
      		<div class="half-unit">   
		  		    <h1>Procurement</h1> 
				<div class="thumbnail">
				<a href="procurement.php"><img src="../database icons/employee.jpg" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->  
        </div>
        </div> 
			        
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-4">
      		<div class="half-unit"> 
		  		    <h1>Stores management</h1> 
				<div class="thumbnail">
					<a href="proc/stores_mgt.php"><img src="../database icons/admin.jpg" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail --> 
			</div>
        </div>  
        
	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-4">
      		<div class="half-unit">  
	      		<h1>Assets management</h1>  
				<div class="thumbnail">
				<a href="property/asset.php"><img src="../database icons/press-nozbe.png" width="140" height="200" alt="" class="img-circle">
				</div><!-- /thumbnail -->  
					</div> 
			</div>
           
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-4">
      		<div class="half-unit">  
                <h1>Admin reports </h1> 
				<div class="thumbnail">
				<a href="admin_reports.php">
<img src="../database icons/admin2.jpg" width="140" height="200" alt="Marcel Newman" class="img-circle">
			   
			</div>
        </div>
      </div><!-- /row -->
     
 
	  <!-- THIRD ROW OF BLOCKS --> 
	    <div class="col-sm-4">
      		<div class="half-unit">  
	      		<h1> </h1>  
				<div class="thumbnail">
					<a href="admin_dashboard.php"><img src="" width="140" height="200" alt="" class="img-circle">
				</div><!-- /thumbnail --> 
        </div>
        </div>
         
	  <!-- TO DO LIST -->     
      		<div class="col-sm-4">
      		<div class="half-unit">  
	      		<h1> </h1>  
				<div class="thumbnail">
				<a href="admin_dashboard.php"><img src="" width="140" height="200" alt="" class="img-circle">
				</div><!-- /thumbnail -->   
		</div>
        </div> 
        </div>   
         
     <div class="col-sm-3" style="height:auto;">  
     <script>


function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();
         document.getElementById('CHECKIN').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script> 
      		<div class="half-unit">
	      		 <h1>Local Time</h1> 
		      		<div class="clockcenter">
                    <br> 
			        <center><input type="text"  id="CHECKIN" name="CHECKIN" style="border:0px; color:red; background-color: black; 
					font-family:algerian; font-size:50px; height:40px;"> </center> 
		      		</div>
			        </div> 

            <!-- SERVER UPTIME --> 
			<div class="half-unit">
            <h1>Server Uptime</h1> 
                <br><br>
	      		<div class="cont">
                </div>
				<canvas id="canvas" width="230" height="230" style="margin-left: 35px;">
			</canvas></div>
		    
            
         <div class="half-unit">   
	      		<h1> </h1>  
				<div class="thumbnail">
				<a href="admin_dashboard.php"><img src="" width="140" height="200" alt="" class="img-circle">
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
      			<p>Naguru Teenage Information and Health Centre - Admin dashboard - Copyright 2016</p> 
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

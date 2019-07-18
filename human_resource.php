 

<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>NTIHC | Admin</title>
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
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src=" js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src=" js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 130px;
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

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php" style="margin-left: 237px; color: #fffaf9; font-size: 22px;">
           NAGURU TEENAGE INFORMATION AND HEALTH CENTRE</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <img src="assets/img/ntihclog2.png" width="40" height="50" style="margin-left: 204px; margin-top: -11px;">
              <li class="active"><a href="dashboard.php"><i class="icon-home icon-white"></i> System dashboard</a></li>  
              <li><a href="#"><i class="icon-th icon-white"></i> Staff contacts</a></li>
              <li><a href="../php/logut.php"><i class="icon-lock icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container" style="height:1000px;">


	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit"> 
	      		<hr> 
                <h1>Employees register</h1> 
				<div class="thumbnail"> 
					<img src="database icons/queue-512.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail --> 
				<br>
					<div class="info-user">  
                   <a href="hr_employee_regn.php"><i class="li_settings fs1"></i> </a> 
					</div>
				       </div></div>
 
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
                    <hr>
                <h1>Appraisals</h1> 
				<div class="thumbnail"> 
				 <img src="database icons/images.jpg" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail --> 
				<br>
					<div class="info-user">  
                   <a href="#"><i class="li_settings fs1"></i> </a> 
					</div>
				       </div></div>
    

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">  
	        <hr>
                <h1>Payroll</h1> 
				<div class="thumbnail"> 
					<img src="database icons/report-3-xxl.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail --> 
				<br>
					<div class="info-user">  
                   <a href="#"><i class="li_settings fs1"></i> </a> 
				</div><!-- /thumbnail --> 
					<div class="info-user">  
					</div>
			</div> </div> 
        
        <div class="col-sm-3 col-lg-3">

      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle>Local Time</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
		      		</div>
			</div>

      <!-- SERVER UPTIME -->
			<div class="half-unit">
	      		<dtitle>System Uptime</dtitle>
	      		<hr>
	      		<div class="cont" style="margin-top: -73px;">
                </div>
				<canvas id="canvas" width="300" height="378px">
			</canvas></div>
		</div>
 
      </div><!-- /row --> 
        
	  <!-- THIRD ROW OF BLOCKS -->     
      <div class="row" style="width: 1140px; margin-left:0px;"> 
      		<div class="dash-unit"> 
      			<div class="text">
      			<h2 class="demoHeaders">Human Resource Management</h2>
<div id="accordion">
	<h3>  </h3>
	<div>
      
   <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:290px; margin-left:-46px; height:350px"/> 
      		<div class="dash-unit" style="height: 379px; margin-top: -13px;"/> 
	      		<hr>
                     <h1>Employee performance</h1> 
                    <div class="thumbnail"> 
					<img src="database icons/report-icon-23.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail --> 
                    <br>  
                     <div class="info-user">  
                   <a href="#"><i class="li_settings fs1"></i> </a> 
				</div><!-- /thumbnail --> 
					<div class="info-user">  
					</div>
                      
        </div></div>   
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
        
      		<div class="dash-unit" style="height: 379px; margin-top: -13px; width:260px;"/>  
                    <hr>  
		     <h1>Human resource panel</h1> 
                    <div class="thumbnail"> 
					<img src="database icons/report-icon-23.png" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail --> 
                    <br>  
                     <div class="info-user">  
                   <a href="#"><i class="li_settings fs1"></i> </a> 
				</div><!-- /thumbnail --> 
					<div class="info-user">  
					</div>
                      
        </div></div>  
           <!-- close  --> 
           
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 379px; margin-top: -13px; width:556px; margin-left: 20px;"/>  
                    <hr>  
      <form method="post" action="process.php" style="margin-left: -4px; width:494px;">
 
<table class='table table-bordered' style="margin-left: 33px;">
<td><h1>Post a message</h1></td>
</tr>
<td><div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Send to</span>
                <select class="form-control" id="gender" input name="gender" required="required" style="height:28px; width: 179px;"/>
                <option value="All"> All</option>
                                <option>Support centre</option>  
                 </select> 
              </div>  </td>
</tr>

<tr>
<td>        
<textarea id="wysihtml5" name="comment" placeholder="Edit Your Message Here." class="form-control" rows="5"></textarea> 
</td>
</tr>

<td> 
 <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Your name</span>
                 <input type="numeric" input name="username"  id="username" required="required" class="form-control" style="height:28px;"/>
              </div> 
</tr> 
<tr> 
   
<td><button type="submit" name="btn-gen-form" style="height: 34px; color: #fff; background-color: #449d44; border-color: #398439;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Submit</button>
   
</td>
</tr>

</table>

</form>  
              
                     
                   <br>  
					</div>
				</div>
             </div> 
       <!-- DONUT CHART BLOCK -->        
           
           
           
             
	<h3>.</h3>
	<div>
  local storage tested successfully
   

      
  </p>   
</div>	      
      		
  <!-- close  --> 
             
	<h3>.</h3>
	<div>
  local storage tested successfully
   

      
  </p>   
</div>	            
      	
 <!-- close  --> 
             
	<h3>.</h3>
	<div>
  local storage tested successfully
   

      
  </p>   
</div>	             
             
   <!-- close  --> 
             
	<h3>.</h3>
	<div>
  local storage tested successfully
   

      
  </p>   
</div>	           
           	           
            	</div>
      		</div>
      	</div>
      </div><!-- /row -->
      
	  <!-- FOURTH ROW OF BLOCKS -->     
	<div class="row"> 

				</div>
			</div>

		</div><!--/row -->
     
      
      
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
    
    
            <link href="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
            <script src="assets/lib/jquery/jquery.js"></script>
<script src="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
 
</body></html>
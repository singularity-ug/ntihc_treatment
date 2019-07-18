
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
	<script type="text/javascript" src="assets/js/highcharts.js"></script>
	<script src=" js/jquery.flexslider.js" type="text/javascript"></script>
    
     
    <script type="text/javascript" src="assets/lib/jquery/jquery.min2.js"></script>
	<script type="text/javascript" src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

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

  <style>
   {
                 border-bottom: 2px solid #cc9900;
                 color:#FF0000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 12px;
             	color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
             }
    </style>


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
             <img src="assets/img/ntihclog2.png" width="40" height="50" style="margin-left: 291px; margin-top: -11px;">
              <li class="active"><a href="fleetmgr.php"><i class="icon-home icon-white"></i> Dashboard</a></li>
              <li><a href="ftl_reservations.php"><i class="icon-th icon-white"></i> Home</a></li>
              <li><a href="logut.php"><i class="icon-lock icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
    
    
    <!-- /#top -->
                      <div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href=""> 
                                    <span class="label label-danger user-label"></span>                                </a>

                                <div class="media-body"> 
                                    <ul class="list-unstyled user-info"> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                         <p>  </p>
                         
              
                <!-- START NEW ICON-->
                <div class="col-lg-1"> 
				<div class="thumbnail">
		        <a href="#"><img src="assets/sysicons/fleet.png" alt="" class="img-circle"></i> </a></li><bold> General</bold>  
				</div><!-- /thumbnail --> 
                <!-- END ICON-->
                
                <!-- START NEW ICON-->  
				<div class="thumbnail col-lg-2">
		        <a href="#"><img src="assets/sysicons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png" alt="" class="img-circle"></i></a></li> <bold> Drivers</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON-->
                
                <!-- START NEW ICON-->   
				<div class="thumbnail col-lg-2">
                <a href="fuellogs.php"><img src="assets/sysicons/iconfuelimages.jpg" alt="  " class="img-circle"></i></a></li> <bold> Fuel logs</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON--> 
                
                   <!-- START NEW ICON-->   
				<div class="thumbnail col-lg-2">
			    <a href="#"><img src="assets/sysicons/auto-body-icon.png" style="width: 72px;margin-left:0px;" alt="  " class="img-circle"></i></a></li> <bold> Maintenance</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON--> 
                
                  <!-- START NEW ICON-->   
				<div class="thumbnail col-lg-2">
			     <a href="#"><img src="assets/sysicons/icon svses.jpg" alt="  " class="img-circle"></i></a></li> <bold> Service perfomance</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON--> 
                 
                 <!-- START NEW ICON-->  
				<div class="thumbnail col-lg-2">
			    <a href="#"><img src="assets/sysicons/iconCrash-for-Cash-Cover-Icon-300x269.jpg" alt="  " class="img-circle"></i></a></li> <bold>Accidents</bold> 
				</div><!-- /thumbnail --> 
                <!-- END ICON--> 
                         
                 <!-- START NEW ICON-->  
				<div class="thumbnail">
			     <a href="#"><img src="assets/sysicons/insuranceimages.jpg" alt="  " class="img-circle"></i></a></li> <bold> Insurance</bold> 
				</div><!-- /thumbnail -->
                </div>  
                
                <!-- END ICON--> <!-- END ICON--><!-- END ICON--><!-- END ICON--><!-- END ICON--><!-- END ICON-->
                
                <!-- START CONTAINER-->
                
                <div class="container" style="height:665px;"> 
                
                <div class="row">

                <!-- USER PROFILE BLOCK -->
                <div class="col-sm-3 col-lg-2 col-lg-pull-1">
      		    <div class="half-unit2"> 
 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Vehicle info</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="width: 38%; margin-left: 16px;">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Petty cash management</h4>
      </div>
      <div class="modal-body" style="background-color: #f0f0f0;">
      <p>Add record.</p>
          
      <!-- USER PROFILE BLOCK -->
            <div class="row">
            <div class="col-sm-3 col-lg-3" style="width: 176px; margin-top: 13px;" >  
<form method="post" action="pettycash_loader.php">

     </form>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 <!-- Close the modal with a button -->
  </div>
  </div> 
		</div> 
        </div>  
        </div>
        </div> 
<!-- CLOSE DIV -->

 
         <!-- USER PROFILE BLOCK -->
             <div class="col-sm-3 col-lg-2 col-lg-pull-1">
      		 <div class="half-unit2">
 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Fuel logs</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="width: 98%; margin-left: 16px;">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Add fuel consumption data</h4>
      </div>
      <div class="modal-body" style="background-color: #d70000;">
      <p>Add fuel consumption data</p>
          
      <!-- USER PROFILE BLOCK -->
            <div class="row">
            <div class="col-sm-3 col-lg-3" style="width: 176px; margin-top: 13px;" >  
<form method="post" action="pettycash_loader.php">

    
      </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 <!-- Close the modal with a button -->
 </div>
  </div> 
		</div> 
        </div>  
        </div>
        </div> 
<!-- CLOSE DIV -->
 
 
                <!-- USER PROFILE BLOCK -->
                <div class="col-sm-3 col-lg-2 col-lg-pull-1">
      		    <div class="half-unit2">
 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add vehicle</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="width: 38%; margin-left: 16px;">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Petty cash management</h4>
      </div>
      <div class="modal-body" style="background-color: #d70000;">
      <p>Add record.</p>
          
      <!-- USER PROFILE BLOCK -->
            <div class="row">
            <div class="col-sm-3 col-lg-3" style="width: 176px; margin-top: 13px;" >  
<form method="post" action="pettycash_loader.php">

    cccc
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 <!-- Close the modal with a button -->
 </div>
  </div> 
		</div> 
        </div>  
        </div>
        </div> 
<!-- CLOSE DIV -->

         <!-- USER PROFILE BLOCK -->
                 <div class="col-sm-3 col-lg-2 col-lg-pull-1">
      		    <div class="half-unit2"> 

 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add vehicle</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="width: 38%; margin-left: 16px;">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Petty cash management</h4>
      </div>
      <div class="modal-body" style="background-color: #d70000;">
      <p>Add record.</p>
          
      <!-- USER PROFILE BLOCK -->
            <div class="row">
            <div class="col-sm-3 col-lg-3" style="width: 176px; margin-top: 13px;" >  
<form method="post" action="pettycash_loader.php">

    cccc
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 <!-- Close the modal with a button -->
 </div>
  </div> 
		</div> 
        </div>  
        </div>
        </div> 
<!-- CLOSE DIV --> 
 
 
    <!-- USER PROFILE BLOCK -->
                <div class="col-sm-3 col-lg-2 col-lg-pull-1">
      		    <div class="half-unit2">
 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add vehicle</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="width: 38%; margin-left: 16px;">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Petty cash management</h4>
      </div>
      <div class="modal-body" style="background-color: #d70000;">
      <p>Add record.</p>
          
      <!-- USER PROFILE BLOCK -->
            <div class="row">
            <div class="col-sm-3 col-lg-3" style="width: 176px; margin-top: 13px;" >  
<form method="post" action="pettycash_loader.php">

    cccc
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 <!-- Close the modal with a button -->
 </div>
  </div> 
		</div> 
        </div>  
        </div>
        </div> 
<!-- CLOSE DIV --> 

    <!-- USER PROFILE BLOCK -->
                <div class="col-sm-3 col-lg-2">
      		    <div class="half-unit">
                 

 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add vehicle</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="width: 38%; margin-left: 16px;">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Petty cash management</h4>
      </div>
      <div class="modal-body" style="background-color: #d70000;">
      <p>Add record.</p>
          
      <!-- USER PROFILE BLOCK -->
            <div class="row">
            <div class="col-sm-3 col-lg-3" style="width: 176px; margin-top: 13px;" >  
<form method="post" action="pettycash_loader.php">

    cccc
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 <!-- Close the modal with a button -->
 </div>
  </div> 
		</div> 
        </div>  
        </div>
        </div> 
<!-- CLOSE DIV -->  
 
 
 
 
    </div>
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

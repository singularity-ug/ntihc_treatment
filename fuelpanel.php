 <?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stss ="";
if( $result = $connect->query("SELECT * FROM newaccount"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['Accountnumber'] . "</option>";   }
  }
$connect->close();
?>

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
              <li class="active"><a href="fleet_admin/ftl_register.php"><i class="icon-home icon-white"></i> System dashboard</a></li>  
              <li><a href="#"><i class="icon-th icon-white"></i> Staff contacts</a></li>
              <li><a href="../php/logut.php"><i class="icon-lock icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container" style="height:810px;">
  
	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="half-unit">
                <h1>Total fuel available</h1>  
                <h1>(All cards)</h1> 
				<div class="thumbnail" style="font-size:30px; font-weight:bold;">  
                 
                 00,000,000,000
                 
                   
				</div><!-- /thumbnail -->  
        </div></div>
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="half-unit">
                  <h1>Current consumption</h1>  
                <h1>(Before discount)</h1> 
				<div class="thumbnail" style="font-size:30px; color:#66FF00; font-weight:bold;">  
                 
                 00,000,000,000
                
				</div><!-- /thumbnail -->  
        </div></div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="half-unit"> 
	        	  <h1>Previous month (c)</h1>  
                <h1>(Before discount)</h1> 
				<div class="thumbnail" style="font-size:30px; font-weight:bold;">  
                 
                00,000,000,000  
                  
				</div><!-- /thumbnail -->  
			</div>
        </div> 
        
        <div class="col-sm-3 col-lg-3">

      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<h1>Difference</h1>  
                <h1>(Before discount)</h1> 
				<div class="thumbnail" style="font-size:30px; color:#FFFF00; font-weight:bold;">  
                 
                 00,000,000,000   
		      		</div>
			</div>
 
        
	  <!-- THIRD ROW OF BLOCKS -->      
      		<div class="dash-unit" style="width:1140px; margin-left:-877px;"> 
      			<div class="text" style="font-size:14px;">
      			<h2 class="demoHeaders">Fuel logs</h2>
<div id="accordion">
	<h3> Add-ins </h3>
	<div>
      
   <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:290px; margin-left:-46px; height:300px; "> 
         
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px;"/> 
	      		<hr>  
<form method="post" action="fuellogs/add-data.php" style="margin-left: -4px; width:189px;">
 
<table class='table table-bordered' style="margin-left: 33px;">
<td><h1>New fuel record</h1></td>
</tr>
<td>Enter how many records you want to insert</td>
</tr>

<tr>
<td>
<input type="text" name="no_of_rec" placeholder="how many records u want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" style="width: 281px;" class="form-control" required />
</td>
</tr>

<tr>
<td><button type="submit" name="btn-gen-form" style="height: 34px; color: #fff; background-color: #449d44; border-color: #398439;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add logs</button>
 

<a href="fuellogs/fuel_index.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-eye-open"></i> &nbsp; View Data</a>
  
</td>
</tr>

</table>

</form>  
                
                
				 
        </div></div> 
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px; margin-left:95px;"/>  
                    <hr> 
                    
                <form method="post" action="newaccount_process.php" style="margin-left: -4px; width:189px;">
 
<table class='table table-bordered' style="margin-left: 33px;">
<td><h1>New fuel card</h1></td>
</tr>
<td>Card name</td>
</tr>

<tr>
<td>
<input type="text" name="cardname" id="cardname" maxlength="20" pattern="[a-z]+" style="width: 281px;" class="form-control" required />
</td>
</tr>

<td>Target level (amount)</td>
</tr>

<tr>
<td>
<input type="numeric" name="targetlevel" id="targetlevel" maxlength="20" pattern="[0-9]+" style="width: 281px;" class="form-control" required />
</td>
</tr>

<td>Fuel vendor </td>
</tr>

<tr>
<td>
<input type="text" name="Fuelvendor" id="Fuelvendor" maxlength="20" pattern="[a-z]+" style="width: 281px;" class="form-control" required />
</td>
</tr>
 
<tr>
<td><button type="submit" name="btn-gen-form" style="height: 34px; color: #fff; background-color: #449d44; border-color: #398439;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Submit</button>
   
</td>
</tr>

</table>

</form>    
					</div>
				</div> 
           <!-- close messanger -->
           
            <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px; margin-left: 212px;"/>  
                <hr> 
                    
                <form method="post" action="newaccountreload_process.php" style="margin-left: -4px; width:189px;">
 
<table class='table table-bordered' style="margin-left: 33px;">
<td><h1>New consumption purpose</h1></td>
</tr>
<td>Fuel consumption purpose</td>
</tr>

<tr>
<td>       
<input type="text" name="consumptionpurpose" id="consumptionpurpose" maxlength="35" pattern="[a-z]+" style="width: 281px;" class="form-control" required />
</td>
</tr>

<td>Fuel source of fund</td>
</tr>

<tr>
<td>
<select class="form-control" id="sourceoffund" input name="sourceoffund"  required />
                <option value="_1"> </option>
                                
                 </select>
                  </div>  
              <br> 
</td>
</tr>

<td>Description</td>
</tr>

<tr>
<td>
<input type="text" name="Description" id="Description" maxlength="30" pattern="[a-z]+" style="width: 281px;" class="form-control" required />
</td>
</tr>
 
<tr>
<td><button type="submit" name="btn-gen-form" style="height: 34px; color: #fff; background-color: #449d44; border-color: #398439;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Submit</button>
   
</td>
</tr>

</table>

</form>  
              
				</div></div>
             </div>  
       <!-- DONUT CHART BLOCK -->  
             
	<h3>Fuel loading by card name</h3>
	<div>   
          <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width:365px; margin-left: -45px;"/>  
                <hr> 
                    
                <form method="post" action="newaccountreload_process.php" style="margin-left: -4px; width:189px;">
 
<table class='table table-bordered' style="margin-left: 33px;">
<td><h1>Load fuel</h1></td>
</tr>
<td>Load date</td>
</tr>

<tr>
<td>       
<input type="text" name="loaddate" id="datepicker" value="<?php echo date('Y-m-d'); ?>"style="width: 281px;" class="form-control" required />
</td>
</tr>

<td>Cardname</td>
</tr>

<tr>
<td>
<select class="form-control" id="Cardname" input name="Cardname"  required />
                <option value="_1"> </option>
                                
                 </select>
                  </div>  
              <br> 
</td>
</tr>

<td>Amount loaded</td>
</tr>

<tr>
<td>
<input type="text" name="amountloaded" id="amountloaded" maxlength="30" pattern="[0-9]+" style="width: 281px;" class="form-control" required />
</td>
</tr>
 
<tr>
<td><button type="submit" name="btn-gen-form" style="height: 34px; color: #fff; background-color: #449d44; border-color: #398439;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Submit</button>
   
</td>
</tr>

</table>

</form>  
              
				</div></div> 
       <!-- DONUT CHART BLOCK --> 
       
        <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width: 355px; margin-left: 65px;"/> 
            </p>
             <h1>Fuel loads due for reconciliation </h1 
                ><hr>  
                <form method="post" action="#" style="margin-left: -4px; width:189px;">
   
 
 
 
 
 
 
 
              
				</div></div>  
       
                  <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width: 386px; margin-left: 165px;"/> 
            </p>
             <h1>Manage fuel usage by load add-in</h1 
                ><hr>  
                <form method="post" action="#" style="margin-left: -4px; width:189px;">
   
 
 
 
 
 
 
 
              
				</div></div>
                </div>
                  
                <h3>Reconciliation of fuel loaded against invoices (vendor based invoice)</h3>
	            <div>   
            <!-- DONUT CHART BLOCK -->
            <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 445px; margin-top: -13px; width: 1133px; margin-left: -45px; background-color: #fff;"/>  
                <hr> 
                    
                <form method="post" action="#" style="margin-left: -4px; width:189px;">
 
  





                </form>   
				</div></div> 
       <!-- DONUT CHART BLOCK --> 
        
       
  </div> 
     
</div></div>
             </div>  
       <!-- DONUT CHART BLOCK -->  
   

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
<?php

	error_reporting(0);

	include_once 'fdbcon.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='fuel_index.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);

?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMMS|budget</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NTIHC|Budget</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="../jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>

    <meta name="description" content="jk3.x">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href="../assets/lib/animate.css/animate.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
    </head>

 <style>
    .form-control{padding: 0px 0px;}
             h9 {
                 border-bottom: 2px solid #cc9900;
                 color:#FF0000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid grey;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 12px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#EEEEEE;
             }
             table tr:nth-child(even) {
                 background:#FFF;
             }
    </style>

	 <link rel="stylesheet" href="../assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="../assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

  </head>

  <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">


                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                                </button>
                            <a href="" class="navbar-brand"><img src="" alt=""></a>                            </header>



                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-envelope"></i>
                                        <span class="label label-warning">5</span>                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-comments"></i>
                                        <span class="label label-danger">4</span>                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a href="../../php/logut.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                        <i class="fa fa-bars"></i>                                    </a>
                                    <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip"
                                       class="btn btn-default btn-sm toggle-right">
                                        <span class="glyphicon glyphicon-comment"></span>                                    </a>                                </div>
                            </div>




                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="../dashboard.php">Dashboard</a></li>
                                    <li><a href="">ADMIN</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Quick links<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">.</a></li>
                                            <li><a href="">.</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                  </nav>
                    <!-- /.navbar -->               <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder=" ">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">

                                                    <i class=""></i>                                                </button>
                                            </span>                                        </div>
                                  </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="fa fa-dashboard"></i>&nbsp;
             NAGURU TEENAGE INFORMATION AND HEALTH CENTRE : (I.M.M.SYSTEM)          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
      <div id="content" >
                    <div class="outer" >
                            <div class="text-center" >
    <ul class="stats_box" >
         </span>	   
          </div>
</div>
<div class="text-center" >
  <div class="form-inline">
   <div class="form-group">
        </div>
<div class="row">
 <div class="col-sm-13">
	   <div class="body" style="height: 750px; width: 316.6%; background:#eeeeee; margin-left:-4px;" >

<div class="clearfix"></div>

<!-- Accordion -->
<div id="accordion">
	<h3>New budget details</h3>
	<div>
<div class="container">

<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="update.php">
<table class='table table-bordered' style="margin-left: -112px; margin-top: -26px;">
<tr>
   <th>FUEL DATE</th> 
   <th>INVOICE NO.</th>
   <th>REG NO.</th>
   <th>DRIVER</th>
   <th>MILEAGE</th>
   <th>PDT</th> 
   <th>LITRE</th>
   <th>UNIT PRICE</th>  
   <th>CARD NAME</th> 
   <th>AMOUNT</th>
   <th>USERDEPARTMENT</th>
   <th>PURPOSE</th> 
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];
	$res=$MySQLiconn->query("SELECT * FROM fleet_fuellogs WHERE FLID=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="FLID[]" value="<?php echo $row['FLID'];?>" />
		<input type="text" name="fy[]" value="<?php echo $row['FUELDATE'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="bd[]" value="<?php echo $row['INVOICENO'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="ca[]" value="<?php echo $row['REGISTRATIONNO'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="co[]" value="<?php echo $row['DRIVER'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="bu[]" value="<?php echo $row['MILEAGE'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="un[]" value="<?php echo $row['PRODUCT'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="qu[]" value="<?php echo $row['LITRE'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="ucos[]" value="<?php echo $row['UNITPRICE'];?>" class="form-control" />
        </td>
        <td>
		<input type="text" name="qtu[]" value="<?php echo $row['AMOUNT'];?>" class="form-control" />
         </td>
        <td>
		<input type="text" name="qto[]" value="<?php echo $row['USERDEPARTMENT'];?>" class="form-control" />
         </td>
        <td>
		<input type="text" name="fqone[]" value="<?php echo $row['PURPOSE'];?>" class="form-control" />
         </td>
        <td>
		<input type="text" name="fqtwo[]" value="<?php echo $row['2ndqtr_estimate'];?>" class="form-control" />
         </td>
        <td>
		<input type="text" name="fqthree[]" value="<?php echo $row['3rdqtr_estimate'];?>" class="form-control" />
		</td>
		</tr>
		<?php
	}
}
?>
<tr>
<td colspan="2">
<button type="submit" name="savemul" class="btn btn-large btn-info"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="fuel_index.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
<br>
</td>
</tr>
</table>
</form>
</div>

  </p>
    </div>
</div>

</div>
<span > ...</span></div>
</div>
  <!-- /.outer -->
                </div>
                <!-- /#content -->
                    <div id="right" class="bg-light lter">
                        <div class="alert alert-danger" style="margin-left:-14px;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>
               .....................



                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                           ....................




                                <li><span class="inlinesparkline pull-right"></span></li>
                                <li><span class="dynamicsparkline pull-right"></span></li>
                                <li><span class="dynamicbar pull-right"></span></li>
                                <li><span class="inlinebar pull-right"></span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                        <span>
                       .....................





                        </span>
                         </div>
                            </div>
                        </div>   </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <!-- /#footer -->
            <!-- #helpModal -->

            <script src="../assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src="../assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="../assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="../assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="../assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="../assets/js/app.js"></script>

       <script src="../assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
       <script src="../assets/js/formsInit.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src="../ assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
 <link href="../assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
            <script src="../assets/lib/jquery/jquery.js"></script>
<script src="../assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
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
			    <!-- END PAGE LEVEL SCRIPTS -->
        </body>
</html>

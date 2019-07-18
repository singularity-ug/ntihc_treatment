<?php
error_reporting(0);
include_once 'fdbcon.php';

if(isset($_POST['save_mul']))
{
	$total = $_POST['total'];

	for($i=1; $i<=$total; $i++)
	{
		$fy = $_POST["fiy$i"];
		$bd = $_POST["bud$i"];
		$ca = $_POST["cat$i"];
		$co = $_POST["cod$i"];
		$bu = $_POST["bul$i"];
		$un = $_POST["unt$i"];
		$qu = $_POST["qua$i"];
		$ucos = $_POST["ucoss$i"];
		$qtu = $_POST["qtut$i"];

		$tt = $_POST["ttc$i"];

		$fqone = $_POST["1qtr$i"];
		$fqtwo = $_POST["2qtr$i"];
		$fqthree = $_POST["3qtr$i"];

		$qtt = $_POST["qttt$i"];

		$sql="INSERT INTO fleet_fuellogs(financial_yr,budget_details,category,code,budget_line,unit_type,quantity,unit_cost,qty_unittype,totalcost,1stqtr_estimate,2ndqtr_estimate) VALUES('".$fy."','".$bd."','".$ca."','".$co."','".$bu."','".$un."','".$qu."','".$ucoss."','".$qtu."','".$tt."','".$fqone."','".$fqtwo."')";

		$sql = $MySQLiconn->query($sql);
	}

	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='fuel_index.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while inserting , TRY AGAIN');
		</script>
        <?php
	}
}
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
    <script type="text/javascript">
  function 	calcTotal(objct){
      var id = objct.id;  //get elems id
			var num = id.charAt(id.length-1); //get number from id
      //start getting values
			var qty = parseFloat(document.getElementById('qua'+num).value);
			var unitcost = parseFloat(document.getElementById('ucoss'+num).value);
			var qtut = parseFloat(document.getElementById('qtut'+num).value);
			var oqtr = parseFloat(document.getElementById('1qtr'+num).value);
			var twoqtr = parseFloat(document.getElementById('2qtr'+num).value);
			var threeqtr = parseFloat(document.getElementById('3qtr'+num).value);

			//set the apparopriate values as required
      document.getElementById('qttt'+num).value = ''+(oqtr + twoqtr + threeqtr);
			document.getElementById('ttc'+num).value  = ''+(qty * unitcost * qtut);

    //get the new values  for further comparisons
     var		ttc = parseFloat(document.getElementById('ttc'+num).value);
		 var    qttt = parseFloat(document.getElementById('qttt'+num).value);
		 if(qttt>ttc){
			     document.getElementById('qttt'+num).style ="background-color:yellow;";
		 }
		 else {
			     document.getElementById('qttt'+num).style ="background-color: gainsboro;";
		 }
			}
    </script>
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
                                    <li class="active"><a href="../fuelpanel.php">Dashboard</a></li>
                                    <li><a href="">FUEL MANAGEMENT</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Quick links<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
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
             <img src="../assets/img/ntihclog2.png" width="30" height="30" style="margin-left:-3px;">
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


<div class="container">

</div>

<div class="clearfix"></div>
<br />

 <!-- Accordion -->
<div id="accordion">
	<h3>Add fuel logs</h3>
	<div>

<div class="container" style="margin-left: -43px; width: 1291px;">
<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post">
    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" /> 
	<table class='table table-bordered'>

    <tr>
    <th>##</th>
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
	for($i=1; $i<=$_POST["no_of_rec"]; $i++)
	{
		?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="date" value="<?php echo date('Y-m-d'); ?>" name="fiy<?php echo $i; ?>" id="fiy<?php echo $i; ?>"  placeholder="date" class='form-control' /></td>
        <td><input type="numeric" name="bud<?php echo $i; ?>" id="bud<?php echo $i; ?>" required="required" placeholder="Invoice" class='form-control' /></td>
		<td><input type="text" name="cat<?php echo $i; ?>"  id="cat<?php echo $i; ?>" required="required" placeholder="Reg no." class='form-control' /></td>
        <td><input type="text" name="cod<?php echo $i; ?>" id="cod<?php echo $i; ?>" required="required"placeholder="Driver" class='form-control' /></td>
		<td><input type="numeric" name="bul<?php echo $i; ?>" id="bul<?php echo $i; ?>" required="required" placeholder="Mileage" class='form-control' /></td>
        <td><input type="text" name="unt<?php echo $i; ?>" id="unt<?php echo $i; ?>"  required="required" placeholder="Type" class='form-control' /></td>
		<td><input type="text" onkeyUp = "calcTotal(this)" name="qua<?php echo $i; ?>" id="qua<?php echo $i; ?>"  value="1" required="required" class='form-control' /></td>
    <td><input type="text" onkeyUp = "calcTotal(this)" name="ucoss<?php echo $i; ?>" id="ucoss<?php echo $i; ?>" required="required" placeholder="price" class='form-control' /></td>
		<td><input type="text" onkeyUp = "calcTotal(this)" name="qtut<?php echo $i; ?>" id="qtut<?php echo $i; ?>" placeholder="Card" value="1" class='form-control' /></td>

		 <td><input type="text" name="ttc<?php echo $i; ?>" id="ttc<?php echo $i; ?>" disabled="disabled" placeholder="Amount" class='form-control' /></td>

    <td><input type="text" onkeyUp = "calcTotal(this)" name="1qtr<?php echo $i; ?>" id="1qtr<?php echo $i; ?>"placeholder="User unit" class='form-control' /></td>
		<td><input type="text" onkeyUp = "calcTotal(this)" name="2qtr<?php echo $i; ?>" id="2qtr<?php echo $i; ?>"placeholder="Purpose" class='form-control' /></td>
    <td><input type="text" onkeyUp = "calcTotal(this)" name="3qtr<?php echo $i; ?>" id="3qtr<?php echo $i; ?>"placeholder=" " class='form-control' /></td> 
		<td><input type="text" name="qttt<?php echo $i; ?>" id="qttt<?php echo $i; ?>" disabled="disabled" placeholder=" " class='form-control' /></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="3">

    <button type="submit" name="save_mul" style="height: 34px;" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Records</button>

    <a href="../fuelpanel.php" class="btn btn-primary"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Back to menu</a>

    </td>
    </tr>
    </table>
    </form>
	<?php
}
?>
</div> 
  </p>
    </div>
</div>

<div class="container">

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

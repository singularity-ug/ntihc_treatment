<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMMS</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href="../ntihc/assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../ntihc/assets/css/main.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/animate.css/animate.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
        <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" /> 
        <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
     
    <style>
	table{border:2px solid white;}
	td,th,tr{border:2px solid white;}
	select{width:64%;margin-left: -5px;float: right;font-size: 11px; height:24px;border: -1px solid #ccc;color: #0e0d0d;border-radius: 9px;} 
	</style>
   
   <script>
  <script>
	function searchpro(){
	   var dataString = document.getElementById('NTIHCNO').value;
	   
	   if(dataString==''){ document.getElementById('schrest').innerHTML="";}
	   else{
	   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
      document.getElementById('schrest').innerHTML = this.responseText; //
    }
  };
  xhttp.open("GET", "http://localhost/IMMS/php/get_clientNTIHCno_onregn.php?q="+dataString, true);
  xhttp.send();
	
	} 
	}
	
	
	function upt(idxx){
	document.getElementById('NTIHCNO').value = idxx;
	 document.getElementById('schrest').innerHTML="";
	}
	
    </script>
  
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>  
	 
	
	
 
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
      
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
                                    <a href="../php/logut.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
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
                                    <li class="active"><a href="dashboard.php">Dashboard</a></li>
                                    <li><a href="tollfree.php">TOLL FREE</a></li> 
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Quick links<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="tollfree_localstorage.php">Caller records</a></li> 
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
                                            <input type="text" class="form-control" placeholder="Search ...">
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
             NAGURU TEENAGE INFORMATION AND HEALTH CENTRE : (TOLL FREE SERVICES)          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                                       </ul>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                        <!-- /#menu -->
                    </div>
                    <!-- /#left -->
      <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <div class="text-center">
 
<div class="row"> 
	    <div class="box"> 
                 <div id="accordion">
	<h3>Toll free callers demography </h3>
	<div>
     <fieldset class="row17921" style= "margin-left: -24px; height:600px; text-align:left; margin-top:-6px; width: 1s893px; border: -6px solid #FFF; background-color:#EEEEEE;"/>

  <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "dbtollfree");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	 $sql = "SELECT * FROM tollfree";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo "<table>";
                echo "<tr>";
				    echo "<th>CALL-ID</th>";
                    echo "<th>TIME-STAMP</th>";
					echo "<th>PHONE-NO.</th>";
                    echo "<th>FIRST-NAME</th>";
					 echo "<th>LAST-NAME</th>";
					  echo "<th>SEX</th>";
					  echo "<th>AGE</th>"; 
                    echo "<th>SCHOOL</th>";
					echo "<th>MARITAL</th>";
                  echo "<th>EMPLOYMENT</th>";
				  echo "<th>DISTRICT</th>"; 
				   echo "<th>DIVISION</th>";
					echo "<th>PLACE OF RESIDENCE</th>";
                  echo "<th>HEAR ABOUT US</th>";
				  echo "<th>HEARED ABOUT NUMBER.</th>";
					echo "<th>EDIT</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
			       	echo "<td>" . $row['CID'] . "</td>";
				     echo "<td>" . $row['TIMESTAMP'] . "</td>";
                     echo "<td>" . $row['PHONECONTACT'] . "</td>";
					 echo "<td>" . $row['FIRSTNAME'] . "</td>";
					  echo "<td>" . $row['LASTNAME'] . "</td>";
					  echo "<td>" . $row['SEX'] . "</td>";
					  echo "<td>" . $row['AGE'] . "</td>"; 
					 echo "<td>" . $row['SCHOOLINGSTATUS'] . "</td>";
					 echo "<td>" . $row['MARITALSTATUS'] . "</td>";
				     echo "<td>" . $row['EMPLOYMENTSTATUS'] . "</td>";
				     echo "<td>" . $row['DISTRICT'] . "</td>"; 
					 echo "<td>" . $row['DIVISION'] . "</td>";
				     echo "<td>" . $row['PLACEOFRESIDENCE'] . "</td>";
				     echo "<td>" . $row['HEAREDABOUTNTIHC'] . "</td>"; 
					 echo "<td>" . $row['HOWDIDYOUKNOABOUTTHISNO'] . "</td>"; 
					
					 ///////echo '<td> <input type="button"  value="EDIT" onclick="editperson(this.id)"  id="'. $row['CID'] . '" style="width:100%;height:33px;background: #239c31;" ></td>';
                echo "</tr>";
            }
            echo "</table>";
            // Close result set

            mysqli_free_result($result);
        } else{
           echo "No records matching your query were found.";
       }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);

    ?>	            
    </div>
	<h3>Toll free service details </h3>
	<div>
     <fieldset class="row17921" style= "margin-left: -24px; height:600px; text-align:left; margin-top:-6px; width: 1s893px; border: -6px solid #FFF; background-color:#EEEEEE;"/>

  <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "dbtollfree");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	 $sql = "SELECT * FROM tollfree";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo "<table>";
                echo "<tr>";
				     echo "<th>CALL-ID</th>";
                     echo "<th>TIME-STAMP</th>";
					 echo "<th>PHONE-NO.</th>"; 
					 echo "<th>SEX</th>";
					 echo "<th>AGE</th>"; 
					echo "<th>SCHOOL</th>";
					echo "<th>MARITAL</th>";
                    echo "<th>EMPLOYMENT</th>";  
                    echo "<th>PROBLEM</th>";
					echo "<th>ACTION</th>";
					echo "<th>SERVICE REFERRED</th>"; 
                    echo "<th>DESCRIPTION</th>";
				    echo "<th>SVC REFERRED FOR</th>";
				  
					echo "<th>EDIT</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
			       	echo "<td>" . $row['CID'] . "</td>";
				     echo "<td>" . $row['TIMESTAMP'] . "</td>";
                     echo "<td>" . $row['PHONECONTACT'] . "</td>"; 
					  echo "<td>" . $row['SEX'] . "</td>";
					  echo "<td>" . $row['AGE'] . "</td>"; 
					  echo "<td>" . $row['SCHOOLINGSTATUS'] . "</td>";
					  echo "<td>" . $row['MARITALSTATUS'] . "</td>";
				      echo "<td>" . $row['EMPLOYMENTSTATUS'] . "</td>";  
					 echo "<td>" . $row['PROBLEMCATEGORY'] . "</td>";
					 echo "<td>" . $row['ACTIONTAKEN'] . "</td>";
					 echo "<td>" . $row['SPECIFYSERVICEREFERREDFOR'] . "</td>";
				     echo "<td>" . $row['DESCRIPTION'] . "</td>";
				     echo "<td>" . $row['SPECIFYSERVICEREFERREDFOR'] . "</td>";
					
					 ///////echo '<td> <input type="button"  value="EDIT" onclick="editperson(this.id)"  id="'. $row['CID'] . '" style="width:100%;height:33px;background: #239c31;" ></td>';
                echo "</tr>";
            }
            echo "</table>";
            // Close result set

            mysqli_free_result($result);
        } else{
           echo "No records matching your query were found.";
       }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);

    ?>	       
      
  </p>              
    </div>
	<h3>Third</h3>
	<div>
     
  </p>   
    </div>
</div>
   
     
                 </div>	
             </div>    
         </div>
     </div>
	  
	 
        
</div>
</div>
<hr>
   
                                
                               
                            </div>
                        </div>                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information And Health Centre</p>
            </footer>  
            <!-- /#footer -->
            <!-- #helpModal -->

            <script src="../ntihc/assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src="../ntihc/assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="../ntihc/assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="../ntihc/assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="../ntihc/assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="../ntihc/assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
<script>
 var x=0,y=0;
 
   
</script>


      <!-- PAGE LEVEL SCRIPT-->
 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>
        
     <!--END PAGE LEVEL SCRIPT-->
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
			    <!-- END PAGE LEVEL SCRIPTS -->s 
     
        </body>
</html>

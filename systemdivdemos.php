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
    <style>
	table{border:2px solid white;}
	td,th,tr{border:2px solid white;}
	select{width:64%;margin-left: -5px;float: right;font-size: 11px; height:24px;border: -1px solid #ccc;border-radius: 9px;} 
	</style> 
   
    <link rel="stylesheet" href=" assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href=" assets/less/theme.less">
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
                                    <li><a href="">STORES MANAGEMENT</a></li>
                                    <li><a href="">.</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Welcome<b class="caret"></b>                                        </a>
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
             NAGURU TEENAGE INFORMATION AND HEALTH CENTRE : (I.M.M.SYSTEM)          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
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
                        <ul id="menu" class="bg-blue dker">
                                  <li class="nav-header">System modules by user type</li>
                                  <li class="nav-divider"></li>
                                  <li class=""> 
                                      <a href="calendar_store_planner.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">User calender</span> </a>                                
                                        </li>
                                    <li>  
                                        
                                       <a href="incoming_items.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Recieve incoming stock</span> </a>                                
                                        </li>
                                    <li> 
                                                                    
                                     <a href="outgoing_items.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Issue requisitioned orders</span> </a> 
                                       </li>
                                    <li> 
                                                                    
                                     <a href="new_item.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Medical and general items</span> </a> 
                                      
                                      
                                       </li>
                                    <li>  
                                        
                                       <a href="suppliers.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Suppliers management</span> </a>   
                                                                     
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
    <ul class="stats_box">
	<li> 
    
	    <div class="stat_text">
      <strong></strong>Todays posts
		<span class="percent down"> <i class=""></i>
         <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT ID, comment FROM usersnotebook WHERE TIMESTAMP >='$date' ORDER BY comment")) {
  

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
        </span>	    </div>
	</li>
	<li> 
    
	    <div class="stat_text">
		<strong></strong>.........
		<span class="percent up"> <i class=""></i>
                               <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
</span></div>
	</li>
	<li> 
    
	    <div class="stat_text">
		<strong></strong> .........
		<span class="percent">  
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='YES' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
        </span>	    </div>
	</li>
	<li> 
    
    	    <div class="stat_text">
		<strong></strong>.........
		<span class="percent">  
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='LABORDERCOMPLETED' ORDER BY NTIHCNO")) { 

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
        </span>	    </div>
	</li>
	<li> 
    
	    <div class="stat_text">
		<strong></strong> ..........
		<span class="percent down"> <i class=""></i> 
         <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  
         </span>	    </div>
	</li>
    </ul>
</div> 
<div class="text-center" >
  <div class="form-inline">
   <div class="form-group"> 
        </div>  
<div class="row">
    <div class="col-lg-4">
	<div class="box">

	    <div class="body" style="height: 750px; width:100%; background-color:white;"   >
        <header>
  	  	<h5> STORES MODULE</h5>
  	    </header>
		
		
		<div class="aside22" id="aside2e2002000" style="color:black;">
         <h2 class="demoHeaders">Autocomplete</h2>
<div>
	<input id="autocomplete" title="type &quot;a&quot;">
</div>       
                  
   <h2 class="demoHeaders">Autocomplete</h2>
<div>
	<input id="autocomplete" title="type &quot;a&quot;">
</div>       
                         
   <!-- Checkboxradio -->
<h2 class="demoHeaders">Checkboxradio</h2>
<form style="margin-top: 1em;">
	<div id="radioset">
		<input type="radio" id="radio1" name="radio"><label for="radio1">Choice 1</label>
		<input type="radio" id="radio2" name="radio" checked="checked"><label for="radio2">Choice 2</label>
		<input type="radio" id="radio3" name="radio"><label for="radio3">Choice 3</label>
	</div>
</form>              
                 
 <h2 class="demoHeaders">Dialog</h2>
<p>
	<button id="dialog-link" class="ui-button ui-corner-all ui-widget">
		<span class="ui-icon ui-icon-newwin"></span>Open Dialog
	</button>
</p>


<h2 class="demoHeaders">Datepicker</h2>
<div id="datepicker"></div>

<!-- Progressbar -->
<h2 class="demoHeaders">Selectmenu</h2>
<select id="selectmenu">
	<option>Slower</option>
	<option>Slow</option>
	<option selected="selected">Medium</option>
	<option>Fast</option>
	<option>Faster</option>
</select>

<!-- Spinner -->
<h2 class="demoHeaders">Spinner</h2>
<input id="spinner">
                
</div>	
      </div>    
      </div>
</div>
	  
	  <div class="col-lg-4">
	<div class="box">
	   <div class="body" style="height: 750px; width:200%; background-color:grey;">
        <header>
        <h5>....</h5>
        </header><br />	
        <div class="col-md-6">
        
        <!-- Accordion -->
<h2 class="demoHeaders">Accordion</h2>
<div id="accordion">
	<h3>First</h3>
	<div>
    
    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
       
  </p>              
    </div>
	<h3>Second</h3>
	<div>
    Phasellus mattis tincidunt nibh.
      
  </p>              
    </div>
	<h3>Third</h3>
	<div>
     
  </p>   
    </div>
</div>

   <!-- Controlgroup -->
<h2 class="demoHeaders">Controlgroup</h2>
<fieldset>
	<legend>Rental Car</legend>
	<div id="controlgroup">
		<select id="car-type">
			<option>Compact car</option>
			<option>Midsize car</option>
			<option>Full size car</option>
			<option>SUV</option>
			<option>Luxury</option>
			<option>Truck</option>
			<option>Van</option>
		</select>
		<label for="transmission-standard">Standard</label>
		<input type="radio" name="transmission" id="transmission-standard">
		<label for="transmission-automatic">Automatic</label>
		<input type="radio" name="transmission" id="transmission-automatic">
		<label for="insurance">Insurance</label>
		<input type="checkbox" name="insurance" id="insurance">
		<label for="horizontal-spinner" class="ui-controlgroup-label"># of cars</label>
		<input id="horizontal-spinner" class="ui-spinner-input">
		<button>Book Now!</button>
	</div>
</fieldset>
                                         
      <!-- Tabs -->
<h2 class="demoHeaders">Tabs</h2>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">First</a></li>
		<li><a href="#tabs-2">Second</a></li>
		<li><a href="#tabs-3">Third</a></li>
	</ul>
	<div id="tabs-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
    
	<div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.
    </div>
    
	<div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
</div>
   
 <div class="input-group">
             <span class="input-group-addon" style="text-align:left; width:130px; background-color:#eeeeee;">Run Mother L.Name</span> 
            <input type='button' class="form-control"style= " width: 182px;height:25px;" ID='chkMOTHERLASTNAMEAvailability' value='Run Mother last Name'/> 
            </div>      
      
      
       
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
                            Completed Lab Orders 
                   
                                 <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "patientmgt");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	 $sql = "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='YES'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo "<table>";
                echo "<tr>";
				    echo "<th>RID</th>"; 
					echo "<th>NTIHC-NO.</th>";
                    echo "<th>VIST-TYPE</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
			       	echo "<td>" . $row['RID'] . "</td>"; 
                     echo "<td>" . $row['NTIHCNO'] . "</td>";
					 echo "<td>" . $row['VISTTYPE'] . "</td>";
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
                       Completed 
                                 <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "patientmgt");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	 $sql = "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='YES'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo "<table>";
                echo "<tr>";
				    echo "<th>RID</th>"; 
					echo "<th>NTIHC-NO.</th>";
                    echo "<th>VIST-TYPE</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
			       	echo "<td>" . $row['RID'] . "</td>"; 
                     echo "<td>" . $row['NTIHCNO'] . "</td>";
					 echo "<td>" . $row['VISTTYPE'] . "</td>";
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
                        </span>
                         </div> 
                            </div>
                        </div>   </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap --> 
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

            <script src=" assets/js/style-switcher.js"></script>
                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

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
			    <!-- END PAGE LEVEL SCRIPTS -->
 
        </body>
</html>
    <div class="input-group">
                <span class="input-group-addon" style="width: 114px; background-color:#DDDDDD;">Schooling</span>
                <select class="form-control" id="SCHOOLINGSTATUS" input name="SCHOOLINGSTATUS" required="required" >
                <option value="_1"> </option>
                                <option>IS</option>
								<option>OS</option>
                 </select> 
              </div>   
               <br>
               
                <div class="input-group">
                <span class="input-group-addon" style="width: 114px; background-color:#DDDDDD;">Level of education</span>
                <select class="form-control" id="HIGHESTLEVELOFEDUCATION" input name="HIGHESTLEVELOFEDUCATION" required="required" >
                <option value="_1"> </option>
                                <option>PRIMARY</option>
								<option>SECONDARY</option>
                                <option>TERTIARY</option>
								<option>VOCATION</option>
                                 <option>UNIVERSITY</option>
								<option>NONE</option>
                 </select> 
              </div>   
               <br>
               
                <div class="input-group">
                <span class="input-group-addon" style="width: 114px; background-color:#DDDDDD;">Marital status</span>
                <select class="form-control" id="MARITALSTATUS" input name="MARITALSTATUS" required="required" >
                <option value="_1"> </option>
                                <option>MARRIED</option>
                                <option>SEPARATED</option>
								<option>WIDOWED</option>
                                <option>DIVORCED</option>
								<option>NO RESPONSE</option> 
                 </select> 
              </div>   
               <br>
               
                <div class="input-group">
                <span class="input-group-addon" style="width: 114px; background-color:#DDDDDD;">Employment status</span>
                <select class="form-control" id="EMPLOYMENTSTATUS" input name="EMPLOYMENTSTATUS" required="required" >
               <option value="UNEMPLOYED">UNEMPLOYED </option> 
								<option>TEMPORARY</option>
                                <option>PERMANENT</option>
                 </select> 
              </div>   
               <br> 
                 
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">District</span>
                 <input type="numeric" input name="DISTRICT"  id="autocomplete" title="type &quot;a&quot;" required="required" class="form-control" >
              </div>  
              <br>
                   
                <div class="input-group">
                <span class="input-group-addon" style="width: 114px; background-color:#DDDDDD;">Division (only Kampala)</span>
                <select class="form-control" id="DIVISION" input name="DIVISION" placeholder"(only Kampala)">
                <option value="_1"> </option>
                                <option>CENTRAL</option>
								<option>LUBAGA</option>
                                <option>NAKAWA</option>
                                <option>MAKINDYE</option>
                                <option>KAWEMPE</option>
                 </select> 
              </div>   
               <br>
               
					</div>
				</div> 
           <!-- close messanger -->
           
            <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 379px; margin-top: -13px; width:260px; margin-left: 23px;"/>  
                    <hr>  
		       <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">Place of residence</span>
                 <input type="numeric" input name="PLACEOFRESIDENCE"  id="autocomplete" title="type &quot;a&quot;" required="required" class="form-control" >
              </div>  
              <br>
                   
                <div class="input-group">
                <span class="input-group-addon" style="width: 114px; background-color:#DDDDDD;">Living with</span>
                <select class="form-control" id="LIVINGWITH" input name="LIVINGWITH" required="required">
                <option value="_1"> </option>
                                <option>SINGLE PARENTS</option>
								<option>BOTH PARENTS</option>
                                <option>GRAND PARENTS</option>
                                <option>GUARDIAN</option>
								<option>ALONE/SELF</option>
                                <option>BROTHER</option>
                                <option>SISTER</option>
                                <option>B/FRIEND</option> 
                                <option>WIFE</option>
                                <option>HUSBAND</option>
                 </select> 
                 
              <div class="input-group">
                <span class="input-group-addon" style="width: 114px; background-color:#DDDDDD;">Heared about NTIHC</span>
                <select class="form-control" id="HEAREDABOUTNTIHC" input name="HEAREDABOUTNTIHC" >
                <option value="_1"> </option>
                                <option>PEERS</option>
								<option>PARENTS/GUARDIAN</option>
                                <option>HEALTH WORKER</option>
                                <option>OUTREACH</option>
								<option>EMPLOYER</option>
                                <option>NEWS PAPER</option>
                                <option>RADIO</option>
                                <option>TV</option> 
                 </select>
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 114px; background-color:#DDDDDD;">How did you know about this phone number</span> 
                <select class="form-control" id="HOWDIDYOUKNOABOUTTHISNO" input name="HOWDIDYOUKNOABOUTTHISNO" >
                <option value="_1"> </option>
                                <option>PEERS</option>
								<option>PARENTS/GUARDIAN</option>
                                <option>HEALTH WORKER</option>
                                <option>OUTREACH</option>
								<option>EMPLOYER</option>
                                <option>NEWS PAPER</option>
                                <option>RADIO</option>
                                <option>TV</option> 
                 </select>
              
               <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;">District</span>
                 <input type="numeric" input name="DISTRICT"  id="autocomplete" title="type &quot;a&quot;" required="required" class="form-control" >
              </div>  
              <br>
               </p> 
                   <input type="submit" name="button" id="button" value="Save and new"style="background-color:#d70000;">
                   <br> 
                    </form>
                    
                    <!-- start accordion -->
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
 <!-- END ACCORDION SCRIPT --> 
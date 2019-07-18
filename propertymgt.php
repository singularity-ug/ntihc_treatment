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
    <link rel="stylesheet" href=" assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href=" assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href=" assets/css/main.css">
    <link rel="stylesheet" href=" sassets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href=" assets/lib/animate.css/animate.css">
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
                                    <li class="active"><a href="admin_dashboard.php">Dashboard</a></li>
                                    <li><a href="">Property Management</a></li> 
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
             <img src="assets/img/ntihclog2.png" width="30" height="30" style="margin-left:-3px;">
             NAGURU TEENAGE INFORMATION AND HEALTH CENTRE : (I.M.M.SYSTEM)          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                
                    <!-- /#left -->
      <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <div class="text-center">
    <ul class="stats_box" style="background-color:#EEEEEE:">
	<li> 
   
<div class="text-center">  
      	 
  <!-- Accordion -->
<h2 class="demoHeaders">Property Management</h2>
<div id="accordion">
	<h3> New assets </h3>
	<div>  
     <form name="form1" method="post" action="#" > 
   <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3" style="width:290px; margin-left:-46px; height:300px;"/> 
      		<div class="dash-unit" style="height: 379px; margin-top:-73px; width:365px;"/>  
                   
        <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;text-align:left;">Asset name</span>
                 <input type="text"  name="ASSETNAME" id="ASSETNAME" class="form-control" style="height:28px;width:240px;"/>
              </div>  
              <br>  
              
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;text-align:left;">Make</span>
                 <input type="numeric" input name="MAKE"  id="MAKE" required="required" class="form-control" style="height:28px;width:240px;"/>
              </div>  
              <br>
               
               
               <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;text-align:left;">Type</span>
                 <input type="numeric" input name="TYPE"  id="TYPE" required="required" class="form-control" style="height:28px;width:240px;"/>
              </div>  
              <br> 
               
                  <div class="input-group">
                <span class="input-group-addon" style="width: 124px; background-color:#DDDDDD; text-align:left;">Category</span>
                <select class="form-control" id="CATEGORY" input name="CATEGORY" required="required" style="height:28px; width:240px;"/>
                <option value="_1"> </option>
                                <option>COMPUTER</option> 
                                <option>OFFICE EQUIPMENTS</option> 
								<option>FURNITURE AND FITTINGS</option>  
                 </select> 
              </div>   
               <br>  
               
                 <div class="input-group">
                <span class="input-group-addon" style="width: 124px; background-color:#DDDDDD;text-align:left;">Classification</span>
                <select class="form-control" id="CLASSIFICATION" input name="CLASSIFICATION" required="required" style="height:28px; width: 179px;width:240px;"/>
                <option value="_1">Category 2 </option>
                                <option>LAPTOP</option> 
								<option>DESKTOP</option>  
               </select> 
               </div>   
               <br>
               
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;text-align:left;">Serial number</span>
                 <input type="numeric" input name="SERIALNUMBER"  id="SERIALNUMBER" required="required" class="form-control" style="height:28px;width:240px;"/>
              </div>  
              <br> 
               
               <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#DDDDDD;text-align:left;">Engrave no.</span>
                 <input type="numeric" input name="ENGRAVENUMBER"  id="ENGRAVENUMBER" required="required" class="form-control" style="height:28px; width:240px;"/>
              </div>  
      <br>
               <div class="input-group">
               <span class="input-group-addon" style="width: 144px;background-color:#DDDDDD;text-align:left;">Aquisition date</span>
               <input type="date" input name="AQUISITIONDATE"  id="datepicker"  required="required" class="form-control" style="height:28px;width: 240px;"/>
               </div>  
              
				 
        </div></div> 
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 379px; margin-top:-73px; width:365px; margin-left:95px;"/>  
             
               <div class="input-group">
               <span class="input-group-addon" style="width: 144px;background-color:#DDDDDD;text-align:left;">Aquired from</span>
               <input type="date" input name="AQUIREDFROM"  id="AQUIREDFROM"  required="required" placeholder="seller / donors" class="form-control" style="height:28px;width: 240px;"/>
               </div>  
               <br> 
                 
               <div class="input-group">
               <span class="input-group-addon" style="width: 144px;background-color:#DDDDDD;text-align:left;">Aquisition cost</span>
              <input type="double" input name="AQUISITIONCOST"  id="AQUISITIONCOST"  placeholder="item cost" required="required" class="form-control" style="height:28px;width: 240px;"/>
              </div>  
              <br>  
                
                
                
                    
		      <div class="input-group">
                <span class="input-group-addon" style="width: 144px; background-color:#DDDDDD;text-align:left;">Condition</span>
                <select class="form-control" id="CONDITION" input name="CONDITION" required="required" style="height:28px; width:240px"/>
                <option value="_1"> </option>
                                <option>OBSOLESCENCE</option>
								<option>ABSOLUTE</option>
                                <option>REDUNDANT</option>
                                <option>SCRAP</option>
                 </select> 
              </div>   
               <br> 
        
        
                   <div class="input-group">
                <span class="input-group-addon" style="width: 144px;background-color:#DDDDDD;text-align:left;">Assigned to</span>
              <input type="text" input name="ASSIGNEDTO"  id="ASSIGNEDTO"  required="required" class="form-control" style="height:28px;width: 240px;"/>
              </div>  
              <br>
                   
               <div class="input-group">
                <span class="input-group-addon" style="width: 144px;background-color:#DDDDDD;text-align:left;">Holder contact</span>
              <input type="text" input name="HOLDERCONTACT"  id="HOLDERCONTACT"  required="required" class="form-control" style="height:28px;width: 240px;"/>
              </div>  
              <br>
              
                <div class="input-group">
                <span class="input-group-addon" style="width: 144px; background-color:#DDDDDD;text-align:left;">Status</span>
                <select class="form-control" id="CURRENTSTATUS" input name="CURRENTSTATUS" required="required" style="height:28px; width:240px"/>
                <option value="_1"> Current status</option>
                                <option>OPERATIONAL</option>
								<option>NOT OPERATIONAL</option>
                                <option>FAULTY</option> 
                                <option>NEEDS REPAIR</option>
                                <option>BEYOND REPAIR</option>
								<option>DISPOSED</option>
                                <option>MISSING</option>
                                <option>DONATED</option>
                 </select> 
              </div>   
               <br>
                
                        
               <div class="input-group">
                <span class="input-group-addon" style="width: 144px;background-color:#DDDDDD;text-align:left;">Location</span>
              <input type="text" input name="LOCATION"  id="LOCATION"  required="required" class="form-control" style="height:28px;width: 240px;"/>
              </div>  
              <br> 
             
               
                     <input type="submit" name="button" id="button" value="Save" class="btn btn-default">  
         
                      <button type="submit" id="button" value="Save" class="btn btn-default">Search</button> 
                                  
   
                   </div>
					</div>  
           <!-- close messanger -->
           
            <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="height: 379px; margin-top: -73px; width:365px; margin-left: 212px;"/>  
		      
               
                                 <div class="outer">
                        <div class="inner bg-light lter">
                            <div class="text-center">
    <ul class="stats_box" style="background-color:#EEEEEE:">
	<li> 
    
 <div class="sparkline line_day"></div> 
	    <div class="stat_text">
		<strong></strong>.......
		<span class="percent down"> <i class=""></i>
         <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'ORDER BY NTIHCNO")) {

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
    
 <div class="sparkline line_day"></div> 
	    <div class="stat_text">
		<strong></strong>.......
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

</span>	    </div>
	</li>
	<li> 
    
 <div class="sparkline line_day"></div> 
	    <div class="stat_text">
		<strong></strong>.......
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

</span>	    </div>
	</li>
	<li> 
    
 <div class="sparkline line_day"></div> 
	    <div class="stat_text">
		<strong></strong>.......
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

</span>	    </div>
	</li>
	<li> 
    
 <div class="sparkline line_day"></div> 
	    <div class="stat_text">
		<strong></strong>.......
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
    
 <div class="sparkline line_day"></div> 
	    <div class="stat_text">
		<strong></strong>.......
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
    
 <div class="sparkline line_day"></div> 
    	    <div class="stat_text">
		<strong></strong>.......
		<span class="percent">  
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT PID, NTIHCNO FROM cmpatientsnewregistration WHERE TIMESTAMP >='$date' ORDER BY NTIHCNO")) { 

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
				</div>   </div>  
               </div>   </div>  
       <!-- DONUT CHART BLOCK -->
     
       
  </p>              
    </div>
	<h3>View motorised equipments</h3>
	<div>
    LOCAL STORAGE RESTED SUCCESSFULLY
      
  </p>              
    </div>
	<h3>Other assets</h3>
	<div>
       LOCAL STORAGE RESTED SUCCESSFULLY
  </p>   
    </div>
</div>

 
 
 
 
 
                 
 
       </div>
       </div>
       </div>
	   </div> 
 </div>
 </div>
 </div>
 </div> 
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
     <script src=" assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
  <script type="text/javascript" src="assets/js/jquery.js"></script>    
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

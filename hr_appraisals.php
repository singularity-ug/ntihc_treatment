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
background:#FF0000;
}
table tr:nth-child(even) {
    background:#32B92D ;
}
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
                                    <li><a href="">HUMAN RESOURCE MANAGEMENT</a></li> 
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
                                  <li class="nav-header">ADMINISTRATION AND HUMAN RESOURCE</li>
                                  <li class="nav-divider"></li>
                                  <li class=""> 
                                        <a href="hr_dashboard.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">H R Dashbord</span> </a>                                
                                        </li>
                                    <li>  
                                        
                                       <a href="hr_appraisals.php"hr_appraisals">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">H R Appraisals</span> </a>                                
                                        </li>
                                    <li> 
                                                                    
                                     <a href="hr_empcontracts.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Employee contracts</span> </a> 
                                       </li>
                                    <li> 
                                                                    
                                     <a href="hr_employee_regn.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Employee registration</span> </a>  
                                      
                                       </li>
                                    <li>  
                                        
                                       <a href="">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Payroll</span> </a>                                            </li> 
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
		<strong></strong>No. of employees 
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
    
	    <div class="stat_text">
		<strong></strong>............
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
		<strong></strong> ...............
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
		<strong></strong>..............
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
		<strong></strong> .................
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
	<div class="box"> 
                        <div class="panel panel-default">  
                        <div class="panel-body" style="height: 550px;"> 
                         
		</div>    
                               
                    </div>
                </div>
 
            </div> 

        </div>     
                 
</div>	
      </div>    
      </div>
</div>
	  
	  <div class="col-lg-128">
	<div class="box">
	   <div class="body" style="height: 550px; width: 296.6%; background:url(../img/pattern/diamond_upholstery.png); margin-left: 106px;">
   	
        <div class="col-md-23">
                                            
         <h2 class="demoHeaders">Human Resource appraisals</h2>
<div id="accordion">
	<h3>Appraisal for new and existing employees  by department and sub unit</h3>
	<div>
      <fieldset class="row11" style= "margin-left: 1px; margin-top: -9px; width:260px;"/> 
      <label>Department</label> 
  <input type="text" id="DEPARTMENT"  required="required" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
       </P>
       <P>
       <label>Sub unit</label> 
  <input type="text" id="DEPARTMENTALUNIT" required="required" class="form-control chzn-select" style= "background-color:#EEEEEE;"/>
       </P>
       <P>
 
  </fieldset>   
  <fieldset class="row13" style= "margin-left: 264px; margin-top: -120px; width:260px; height:200px;"/>  
           
            <label>Start date</label> 
        <input type="text" id="datepicker"class="form-control chzn-select">
        </p> 
        
        <label>End date</label> 
        <input type="text" id="datepicker"class="form-control chzn-select">
        </p>  
         
       </fieldset> 
       <fieldset class="row14" style= "margin-left: 518px; margin-top: -201px; width:260px; height:200px;"/> 
            
           <label>Apprisal duration</label>
        <input type="text" name="APPRAISALDURATION" id="APPRAISALDURATION" required="required"class="form-control chzn-select" style= "background-color:#fff;"/>
        </p> 
          
         <label>Supervisor name</label>
        <input type="text" name="IMMEDIATESUPERVISOR" id="IMMEDIATESUPERVISOR" required="required"class="form-control chzn-select" style= "background-color:#fff;"/>
        </p> 
           
           </fieldset> 
          <fieldset class="row1400" style= "margin-left: 778px; margin-top: -200px; width:251px; height:200px;"/> 
          Analysis of results
          </p>
          (1) Unsatisfactory performance
              2.0 - 3.4 
              </p>
          (2) Meets targeted expectations
              6 
              </p>
          (3) Exceeds expectation
              7.4 - 8.9 
               </p>
          (4) Outstanding
              9.0 - 10     
          
           </fieldset>   
       <fieldset class="row110" style= "margin-left: 1px; margin-top: -76px; width:560px; background-color:#FFCB00;"/>    
                     					<input type="button" value="Add row" onClick="addRow('dataTable')" />
                     					<input type="button" value="Remove" onClick="deleteRow('dataTable')"  />
 
                                    <table id="dataTable"  border="1" style="width:100%;">
                                      <thead>
                                        <tr style="width:100%;">
                                <th> <label for="DEFAULT" class="label"> *</label>                   </th>
                                <th> <label for="PFNO" class="label">PF NO.</label>          </th>
                                <th> <label for="AVERAGESCORE" class="label">AVG.SCORE</label>  </th> 
                                <th><label for="EMPLOYMENTTYPE" class="label">EMPLOYMENT TYPE</label>             </th> 
                                <th><label for="TITLE" class="label">TITLE</label>                </th> 
                                <th><label for="SALARYSCALE" class="label">SALARY SCALE</label>                </th> 
                             </tr>
                                      </thead>
                                       <tbody id="tablebody" style="width:800px;">
                                         <tr id="0_rowdata" >
                                         <td><input type="checkbox" required="required" checked="checked" /></td>
                                         <td>
                                          <input type="text" name="PFNO" id="PFNO" required="required" style= "margin-left: 0px;margin-top: 5px;height:20px; width:100px; background-color:#fff;"/>
                                         </td>
                     			<td><input type="text" name="AVERAGESCORE" id="AVERAGESCORE" required="required" style= "margin-left: 0px;margin-top: 5px;height:20px; width:70px; background-color:#fff;"/> 
                     						       </td>
                     						       <td><select name="EMPLOYMENTTYPE" id="EMPLOYMENTTYPE" required="required" style= "margin-left: 0px;margin-top: 5px;height:20px; width:160px; background-color:#fff;"/>
                     		                      	  <option value="-1"> </option>
                     			                      <option>CONTRACT</option>
                     							      <option>PERMANENT</option>
                                                      <option>TEMPORARY</option>
                                                      <option>CASUAL</option> 
                                                    
                     							        </select>
                     					         </td>
                     					      	 <td>
                                                                                                 
                        <input type="text" name="TITLE" id="TITLE" required="required" style= "margin-left: 0px;margin-top: 5px;height:20px; width:369px; background-color:#fff;"/> 
                          
                              </td>
                        <td><select name="SALARYSCALE" id="SALARYSCALE" required="required" style= "margin-left: 0px;margin-top: 5px;height:20px; width:130px; background-color:#fff;"/>
                     		                      	  <option value="-1"> </option>
                     			                      <option>SCALE 1</option>
                     							      <option>SCALE 2</option>
                                                      <option>SCALE 3</option>
                                                      <option>SCALE 4</option> 
                                                      <option>SCALE 5</option>
                     							      <option>SCALE 6</option>
                                                      <option>SCALE 7</option>
                                                      <option>SCALE 8</option> 
                                                    
                     							        </select>
                          
                          
                          
                                </td>
                     		 </tr>
                               </tbody>
                               </table>
                                        
                                       <div class="clear"></div>
                                         <input class="submit" type="button" onClick="getvalues(this)" value="Save &raquo;">
                                  <div class="clear"></div>
                           <!--  </form> -->
                 
           </fieldset>         
  </p>              
    </div>
	<h3>22 </h3>
	<div>
    <fieldset class="row11" style= "margin-left: 1px; margin-top: -9px; width:260px;"/> 
           <P>2</P>
    
       <P> 
           </fieldset>
             
    </div>
	<h3>3 </h3>
	<div>   
       <fieldset class="row16" style= "margin-left: -3px; margin-top:-9px; width:210px; height:10px;"/>
         
         
      </P>   
   </fieldset> 
   </div>
	<h3>4 </h3>
	<div>
       <fieldset class="row120" style= "margin-left: -3px; margin-top: -9px; width:140px;"/> 
           <P>4</P>
     
  </p> 
  </fieldset> 
   </div>
	<h3> 5  </h3>
	<div>
       <fieldset class="row120" style= "margin-left: -3px; margin-top: -9px; width:140px;"/> 
       <P>5</P> 
       
       
        
  </p>   
  </fieldset> 
   </div>
	<h3> 6  </h3>
	<div>
       <fieldset class="row120" style= "margin-left: -3px; margin-top: -9px; width:140px;"/> 
       <P></P>
        
  </p> 
  </fieldset>
  
     </div>
	<h3>7  </h3>
	<div>
      <fieldset class="row120" style= "margin-left: -3px; margin-top: -9px; width:140px;"/> 
       
        
                                        
             </fieldset>   
             
      </div>
	<h3>8  </h3>
	<div>    
        
       </p>
	<p>            
		 
</form>                
    </div>
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
            
       <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
       <script src="assets/js/formsInit.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src=" assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
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

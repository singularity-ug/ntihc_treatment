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
                                    <li><a href="calendar.php">Calender</a></li>
                                    <li><a href="">.</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Welcome<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">.</a></li>
                                            <li><a href="">.</a></li>
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
                                    <a href="tollfree.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Toll free</span> </a>                                
                                        </li>
                                    <li>  
                                                                      
                                     <a href="registration_desk.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Patient management</span> </a>                                
                                        </li>
                                    <li>  
                                   
                                    <a href="treatmentroom.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Treatment room</span> </a>                                
                                        </li>
                                    <li> 
                                   
                                   <a href="counsellingroom.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Counselling room</span> </a>                                
                                        </li>
                                    <li> 
                                     
                                      <a href="lab_hmis_index.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Laboratory</span> </a>                                
                                        </li>
                                    <li>  
                                  
                                    <a href="#">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Dispensing</span> </a>                                
                                        </li>
                                    <li>   
                                    
                                    <a href="#">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Procurement</span>                                    </a>                                  </li>
                                    <li> 
                                    
                                     <a href="#">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Stores</span>                                    </a>                                  </li>
                                    <li>
                                   
                                   <a href="../fleet_admin/tpt_reservations.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Transport reservations</span>                                    </a>                                  </li>
                                    <li>
                                   
                                    <a href="../fleet_admin/ftl_register.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Fleet management</span>                                    </a>                                  </li>
                                    <li>
                                   
                                    <a href="#">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Human resource management</span>                                    </a>                                  </li>
                                    <li>
                                      
                                       <a href="#">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Administration</span>                                    </a>                                  </li>
                                    <li>  
                                    
                                    <a href="#">
                                      <i class="fa fa-file"></i>
                                      <span class="link-title">System admin</span>                                    </a>                                  </li> 
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
		<strong></strong>........
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
		<strong></strong>..........
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
		<strong></strong>........
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
		<strong></strong>.........
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
    <div class="col-lg-113">
	<div class="box">

	    <div class="body" style="height: 150px; width:80%; background-color:black;"   >
        <header>
  	  	<h5>ADMIN POST</h5>
  	    </header>    
                        <div class="panel panel-default"> 
                        </div>
                        <div class="panel-body">
                         <div id="datepicker"></div>
                        </p>
                            <button class="btn btn-info" data-toggle="modal" data-target="#uiModal">
                                Click Here to Post Message
                            </button>
                             
                        </div>
                    </div>
                    </div> 
                    <div class="col-lg-12">
                        <div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog2">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3">ADD NEW MESSAGE</h4>
                                        </div>
                                        <div class="modal-body">   
          <div class="col-xs-pull-7">
              <label>Send to</label>
         <select class="form-control" name="sendto" id="sendto" required="required" class="col-xs-pull-8"style= 'background-color:#FEEDFE;'/>
			<option value="-1">Select</option>                 
								<option>ALL</option>
								<option>MEDICAL UNIT</option>
                                <option>COUNSELLING UNIT</option>
								<option>TOLL FREE USER</option>
                                <option>REGISTRATION DESK</option>
								<option>STORES</option>
                    			</select>
                               </P> 
          
      <label>Body</label>   
  <textarea id="comment" placeholder="Edit Your Message Here....."></textarea>
  <br> </P>
  
      <label>Name</label>
  <input type="text" id="username" placeholder="Your Name" class="col-xs-pull-8" required="required">
       <br></P>
  <input type="button" onClick="post()" value="Post Comment">
   </div> 
  </form>    
		</div>   
        
                     </div>
                    </div>
                    </div>
                  
     </div>               
                 <div class="col-md-14">  
	          <div class="cont"> 
                </div>
				<canvas id="canvas" style="  width="300" height="300"> 
     
			</canvas></div>
		</div>   
         
	  <div class="col-lg-114">
	<div class="box">
	   <div class="body" style="height: 622px; width:100%; background-color:black;">
        <header>
        <h5>MEMOS</h5>
        </header><br />	
        <div class="col-lg-115">
         <div class="body" style="height: 547px; width:98%; background-color:white;">   
         
            <div class="col-md-17">   
        
             <label>DATE</label>
           <input name="MEMODATE" type="date"  value="<?php echo date('d-m-y');?>" style= "margin-left: 34px; height:25px; width:202px;background-color:#FFF;/>   
            </p>   
<p> 
    <label>Specialization</label> 
		<input type="radio" name="SPECIALIZATION" id="MEDICAL" value="MEDICAL" checked>
        <label for="MEDICAL">Medical</label>
		<input name="SPECIALIZATION" type="radio" id="GENERAL" value="GENERAL">
		<label for="GENERAL">General</label> 
        <input name="SPECIALIZATION" type="radio" id="BOTH" value="BOTH">
		<label for="BOTH">Both</label> 
	</p>  
      <label>Country of operation</label>
      <select name="COUNTRYOFOPERATION" id="COUNTRYOFOPERATION" required="required" placeholder="Choose a Country" class="form-control chzn-select" tabindex="2" style= 'margin-left: 2px; margin-top: -7px; width:260px; height:29px;background-color:#E8E8E8;'/>
<option value="-1">Select a COUNTRY</option> 
<option value="UGANDA">UGANDA</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
</select>
  </p>            
             
        <label>Country of operation</label>
      <select name="COUNTRYOFOPERATION" id="COUNTRYOFOPERATION" required="required" placeholder="Choose a Country" class="form-control chzn-select" tabindex="2" style= 'margin-left: 2px; margin-top: -7px; width:260px; height:29px;background-color:#E8E8E8;'/>
<option value="-1">Select a COUNTRY</option> 
<option value="UGANDA">UGANDA</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
</select>
  </p>             
     <label>Country of operation</label>
      <select name="COUNTRYOFOPERATION" id="COUNTRYOFOPERATION" required="required" placeholder="Choose a Country" class="form-control chzn-select" tabindex="2" style= 'margin-left: 2px; margin-top: -7px; width:260px; height:29px;background-color:#E8E8E8;'/>
<option value="-1">Select a COUNTRY</option> 
<option value="UGANDA">UGANDA</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
</select>
  </p>               
             
             
             
             
              </form>
            </div>
            <div class="box-footer clearfix">  
            </div>
          </div>

        </section>           
                       
                       
                       
                       
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
                            .
               
               
                       
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                            <div class="aside" style="color:#0000FF;">  
  <div class="col-xs-6"> 
<h2>Daily Posts</h2>
<ul>
 <div id="all_comments">
  <?php
    $host="localhost";
    $username="root";
    $password="";
    $databasename="contemporary";

    $connect= new mysqli($host,$username,$password,$databasename);
	if($connect){}
	else{echo 'failed to connect'.$connect->error;}
  
    $date = date("Y-m-d").' 00:00:00'; 
    $comm = $connect->query("SELECT name,comment,timestamp FROM usersnotebook WHERE timestamp >='$date' ORDER BY timestamp DESC");
	if($comm){
    while($row=$comm->fetch_assoc())
    {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['timestamp'];
    ?>
	
	<div class="comment_div"> 
	  <p class="name">Posted By:<?php echo $name;?></p>
      <p class="comment"><?php echo $comment;?></p>	
	  <p class="time"><?php echo $time;?></p>
	</div>
  
    <?php
    }
	}
	else{echo$connect->error;}
    ?>
  </div>
	</ul> 
      
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                        <span>  
                         
<h2>..</h2>
 
                        
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

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src=" assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS --> 
                
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
 
        </body>
</html>

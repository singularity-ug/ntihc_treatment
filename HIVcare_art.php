<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMMS</title>

    <meta name="description" content="  ">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href="../ntihc/assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../ntihc/assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
    <script src="assets/js/prescriptionscript.js"></script>
    <link rel="stylesheet" href="../ntihc/assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/animate.css/animate.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
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

    <script type="text/javascript">
      $(function() {
          $("#lava_menu").lavaLamp({
          fx: "backout",
          speed: 700
          });
       });
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
                                    <a href="logout.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
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
                                    <li class="active"><a href="client_management.php">DASHBOARD</a></li>
                                    <li><a href="treatmentroom.php">HIV CARE/ ART CARD</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            QUICK LINKS<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Waiting room</a></li>  
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

              <div id="content" class="row">
                <div class="col-md-12"style="background-color:#EEEEEE;">
                <center>
                  <ul class="stats_box">
                      <li>
                        <div class="sparkline line_day"></div>
                        <div class="stat_text">
                  		           <strong></strong>Due for medical svs
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
                                 </span>
                       </div>
                      </li>
                      <li>
                        <div class="sparkline line_day"></div>
                        <div class="stat_text">
                  		          <strong></strong>No. of clients in svs
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
                                 </span>
                       </div>
                      </li>
                      <li>
                        <div class="sparkline line_day"></div>
                        <div class="stat_text">
                  		           <strong></strong>Completed lab Orders
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
                                 </span>
                       </div>
                      </li>
                      <li>
                        <div class="sparkline line_day"></div>
                        <div class="stat_text">
                  		           <strong></strong>Total vists
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
                                 </span>
                       </div>
                      </li>
                  </ul>
                  <center>
                </div>


                   <div class="col-md-12"style="background-color:#EEEEEE;">
                        <div class="col-md-3" style="height:100%; width:22%; background-color:#EEEEEE;;">
                          <div class="form-inline">
                           <div class="form-group">
                           </div>
                        </div>
                        </div>
                        <div class="col-md-25" style="height:100%; width:42%; background-color:EEEEEE;">
                          <p>
                          <div id="accordion">
	                      <h3>ART CARD</h3>
	                      <div>
                            <fieldset class="row11331" style= " height:540px; background-color:#EEEEEE;"/>

 



                            </p>

    </div>
	<h3>............</h3>
	<div>
    Reconciliation of requisitioned drugs against dispencing

  </p>
</div>

	<h3>............</h3>
	<div>
    Current store drugs available

  </p>
</div>
</div>


	                     </div>
                        <div class="col-md-3" style="height:200%; width:55%; background-color:#EEEEEE;">

    <div id="tabs">
	<ul>
		<li><a href="#tabs-1">ARV Therapy</a></li>
		<li><a href="#tabs-2">HIV Treatment</a></li>
	</ul>
	<div id="tabs-1" style="background-color:#EEEEEE;">
 
                            <h4> Follow-up education, Support and Preparation for ARV therapy</h4>
                            
                            <div class="form-group">
                       <input type="text" class="form-control" disabled="disabled" style="width:43%; background-color:#fff;" id="CREATEDDATE" value="<?php echo date('Y-m-d'); ?>">
                         
                           </div>

                          </p>
                           
                           
                           
                      </div>
                      <label> Problem brief</label>
                             <textarea class="form-control wmd-input" rows="1" name="PROBLEMDESCRIPTION" id="wmd-input" disabled="disabled" style="width: 274px; margin-left:0px; height: 25px; background-color:#fff:">
                             </textarea>
                             </p>
                              <div class="form-group">
                       <input type="double" class="form-control" id="AMOUNT" disabled="disabled" style="width:43%; background-color:#fff;" id="CREATEDDATE">
                        </p>
                       
            <div class="clear"></div>
                    <input type="submit" name="button" id="button" value="GO >>" >
             <div class="clear"></div>
             </form>
              <!--  </form> -->

 </ul>
</div>

<div id="tabs-2">
                 <header>
                     <h5> pending</h5>
                     </header>
                <div class="form-group">
                     <label for="NTIHCNO">NTIHC NO:</label>
                     <input name="NTIHCNO" style="width:230px; background-color:fff;" id="NTIHCNO" type="text" class="form-control"  required="required"/>
                     </div>

                <div class="form-group">
                        <label>Service referred for</label>
                 <select class="form-control" id="SERVICEREFERREDFOR" name="SERVICEREFERREDFOR" placeholder"Select a servicr referred for" required="required" style="width:230px; background-color:fff;">
                        <option value="-1"> </option>
                        <option value="ART, SUPPORT & CARE">ART, SUPPORT & CARE</option>
                        <option value="FURTHER MANAGEMENT">FURTHER MANAGEMENT</option>
					</select>
                 </div>

                 <div class="form-group">
                             <label>Follow-up</label>
                             <label class="radio-inline">
                             <input type="radio" name="FOLLOWUP" id="FOLLOWUP" value="NO" checked="checked" >No </label>
                              <label class="radio-inline">
                              <input type="radio" name="FOLLOWUP " id="FOLLOWUP " value="YES" >Yes                   </label>
                 </div>
                  <div class="form-group">
                     <label for="FOLLOWUPDATE">Follow-up date:</label>
                     <input name="FOLLOWUPDATE" style="width:230px; background-color:fff;" id="datepicker" type="text" class="form-control"  required="required"/>
                     </div>


</div>
</div>

</div>
</div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">    </div>
</div>
     </div>

                    <div id="right" class="bg-light lter">
                        <div class="alert alert-danger" style="margin-left:-14px;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>

                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                          DUE FOR MEDICAL ATT.N

                             <div class="aside2" id="aside222" style="color:white;">
                    <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "patientmgt";

                     // Create connection
                     $conn = new mysqli($servername, $username, $password, $dbname);
                     // Check connection
                     if (!$conn) {
                     die("Connection failed: " . mysqli_connect_error());
                     }

                     $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'";

                     $result = $conn->query($sql);
                     $st ='<table>
                     <thead>
                     <tr>
                     <th>RID</th>
                     <th>TIME STAMP</th>
                     <th>NTIHC NO.</th>
                     </tr>
                     </thead>
                     <tbody ">';

                     while($row = $result->fetch_assoc()) {
                     $st=$st."<tr>".
	                 "<td>" . $row['RID'] . "</td>".
	                 "<td>" . $row['TIMESTAMP'] . "</td>".
                     "<td>" . $row['NTIHCNO'] . "</td>".
		             "</tr>";
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
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
                       DUE FOR COUNSELLING

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
                        </span>                        </div>


                           </div>
            </div>

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
            <script src="../ntihc/assets/lib/metismenu/metisMenu.js"></script>
            <script src="../ntihc/assets/lib/screenfull/screenfull.js"></script>
            <script src="../ntihc/assets/js/core.js"></script>
            <script src="../ntihc/assets/js/app.js"></script>
                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>
                <script src=" assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->

  <script>
      var pn = [];
          pn["v1"] = 0;
          pn["v2"] = 0;

      var x="0,0,0,0,0,0";

      function adss(selectorint)
      {
          pn["v"+selectorint] = pn["v"+selectorint]+1;
          var obj=  document.getElementById('fields'+selectorint);
                x=  pn["v1"] +","+ pn["v2"];
      }

      function remove(sid)
      {
               var  field='fields'+sid;
               var c = document.getElementById(field).childElementCount;
               var obj = document.getElementById(field);
               if(c<=0){}
               else{ 	obj.removeChild( obj.childNodes[c]);
                      pn["v"+sid] = pn["v"+sid]-1;
                      x=  pn["v1"] +","+ pn["v2"] +","+pn["v3"]+","+pn["v4"]+","+pn["v5"]+","+pn["v6"];
                      document.getElementById('values').value=x;
                   }
       }

            function save(){}
 </script>

 <!-- start accordion -->
<link href="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
<script src="assets/lib/jquery/jquery.js"></script>
<script src="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script>
function getClient(id){
$.ajax({
     url:"presc.php",
     method:"POST",
     data:{id:id},
     success:function(data){
          $('#prescribed').html(data);
     }
});
}
</script>


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
</body>
</html>

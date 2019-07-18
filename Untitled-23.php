<?php
$connect = new mysqli("localhost", "root", "", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT * FROM ntihcdrugs"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['DRUGNAME'] . "</option>";   }
  }
$connect->close();
?>




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
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
    <script src="assets/js/prescriptionscript.js"></script>
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">
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
             background:#FFFFA6;
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
                                    <a href="logut.php"data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                        <span class="glyphicon glyphicon-comment"></span>                                   </a>                                </div>
                            </div>

                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="client_management.php">DASHBOARD</a></li>
                                    <li><a href="treatmentroom.php">TREATMENT ROOM</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Quick links<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Waiting room</a></li>
                                            <li><a href="registration_desk.php">Registration desk</a></li>
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
             <img src="assets/img/ntihclog2.png" width="40" height="20">
              </i>&nbsp;
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

                                <div class="media-body" >
                                    <ul class="list-unstyled user-info">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker" >
                                  <li class="nav-header">  Clients Due for medical </li>
                                  <li class="nav-divider"></li>
                                  <li class="" >

                      <h4> Attention <h4>


                      <div class=""  id="inpats"  >


                                       </a>
                                           </li>
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
    <ul class="stats_box" style="background-color:#FFFFA6;">
	<li>


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
                      <li>
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
        </span>	    </div>
	</li>

    </ul>
</div>
<div class="text-left">

<form class="" action="treatmentroom_process.php" method="post">

<fieldset class="row112" style="margin-left:1px;  width:183px;margin-top:-12px; height:100px;"/>
    <div class="form-group">
    
    <div class="input-group">
                <span class="input-group-addon" style=" width: 100px; text-align:left; background-color:#FFFFC6;">NTIHC NO.</span>
              <input type="text" input name="NTIHCNO" onKeyUp="searchpro()" id="NTIHCNO"class="form-control" required="required" style="width: 170px; background-color:#fff; ">
              </div> <br>
 

     <div class="input-group">
                <span class="input-group-addon" style=" width: 100px; text-align:left; background-color:#FFFFC6;">Vist date</span>
                <input type="date" input name="DATECREATED"  id="DATECREATED" value="<?php echo date('Y-m-d'); ?>" class="form-control" style="width: 170px;">
                </div>
   

 <div class="clear" id="recievedids" style="margin-left:-87px; margin-top:-10px; width:342px;"></div>
                </p>
                <div  id="schrest">
                </div>
                </fieldset>

   <fieldset class="row11" style= "margin-left: 290px;margin-top: -100px;width: 200px;height: 103px;"/>
    <div class="input-group">
                <span class="input-group-addon" style="width:189px; text-align:left; background-color:#FFFFC6;">Vist by</span>
                <select class="form-control" id="VISTBY" input name="VISTBY" required="required" style="width: 170px;">
                                                   <option value="YOUTH">YOUTH</option>
                                                   <option>PARENT</option>
                                                   <option>YOUTH AND PARENT</option>
                                                   <option>COUPLE</option>
                                                   </select>
              </div> <br>
              
              <div class="input-group">
                <span class="input-group-addon" style="text-align:left; width:189px; background-color:#FFFFC6;">Urgency type</span>
                <select class="form-control" id="URGENCYTYPE" input name="URGENCYTYPE" style="width: 170px;">
                                                    <option value="NORMAL"> NORMAL</option>
                                                    <option>NORMAL</option>
                                                    <option>EMERGENCY</option>
                                                    <option>CRITICAL</option>
                                                     </select>
              </div>

              </fieldset>
              


                 <div class="col-md-12"  style=" "/>
<div id="tabs" style="margin-left: -14px; background-color:#FFFFC6; height: 700px;"/>
	<ul>
		<li><a href="#tabs-1">Examination / Prescription</a></li>
		<li><a href="#tabs-2">Lab results</a></li>
		<li><a href="#tabs-3">In-service list</a></li>
	</ul>
	<div id="tabs-1" style="margin-left: -18px;">

    <div class="col-md-6" style="height:140%;width: 93%; text-align:left; background-color:#FFFFC6; margin-left:4px;">
</p>
  <input type="button" onClick="addRow12('mytable')" value="Add row" class="btn-success"  style="background-color:green;" >
     <input type="button" onClick="deleteRow12('mytable')" value="Remove"  class="btn-danger" >

  </p>

     <table class="table table-striped" id="mytable" style="margin-left:0%;">
       <thead>
      <tr>
        <th>*</th>
        <th>Medical Category</th>
        <th>Problem</th>
      </tr>
      </thead>
    <tbody>

    </tbody>
  </table>


                                  <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6;">Problem brief</span>
                <textarea id="wysihtml5" name="PROBLEMBRIEF" class="form-control" rows="4"></textarea>
              </div>
               <br>

               <div class="col-sm-16 "> 
              <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Counselling done<span class="sr-only">60% Complete</span> 
		</div>
	    </div>     
                    <div class="switch switch-yellow">
					<input type="radio" class="switch-input" name="COUNSELLINGDONE" value="YES" id="YES" checked="">
					<label for="YES" class="switch-label switch-label-off">Yes</label>
					<input type="radio" class="switch-input" name="COUNSELLINGDONE" value="NO" id="NO">
					<label for="NO" class="switch-label switch-label-on">No</label>
					<span class="switch-selection"></span>
				</div>
                 
               
        <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Is HCG Required?.<span class="sr-only">60% Complete</span> 
		</div>
	    </div>    
        
        <div class="progress progress-striped active">        
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	    <input type="radio" name="HCGSTATUS" id=">NO" value="NO" checked>
        <label for=">NO"> No</label>
		<input name="HCGSTATUS" type="radio" id="YES" value="YES">
		<label for="YES">Yes</label> 
	    </div> 
	    </div>  </div> 
        

<div class="col-sm-17">
<div class="progress progress-striped active">

		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		HCG Results?.<span class="sr-only">60% Complete</span> 
		</div>
	    </div>    
<div class="switch switch-blue">
					<input type="radio" class="switch-input" name="HCGRESULTS" value="NEGATIVE" id="NEGATIVE" checked="">
					<label for="NEGATIVE" class="switch-label switch-label-off"> -VE (N)</label>
					<input type="radio" class="switch-input" name="HCGRESULTS" value="POSITIVE" id="POSITIVE">
					<label for="POSITIVE" class="switch-label switch-label-on"> ++VE (P)</label>
					<span class="switch-selection"></span>
			   </div>
 
<div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		If positive, justify<span class="sr-only">60% Complete</span> 
		</div>
	    </div> 
        <div class="progress progress-striped active">        
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	    <input type="radio" name="HCGPOSITIVE" id=">DEFAULT" value="DEFAULT" checked>
        <label for=">DEFAULT"> </label>
		<input name="HCGPOSITIVE" type="radio" id="WANTED" value="WANTED">
		<label for="WANTED">Wanted</label>
        <input name="HCGPOSITIVE" type="radio" id="UN WANTED" value="UN WANTED">
		<label for="UN WANTED">Un wanted</label>
	    </div>  </div>        
        
        <div class="col-sm-18">
        <div class="input-group">
           <span class="input-group-addon" style=" text-align:left; width:189px; background-color:#FFFFa6;" >Provider's initial</span>
           <input type="text" input name="USERINITIAL"  id="USERINITIAL" class="form-control" style="width:431px;">
           </div> <br>
           
            </div>     
            </div> 
            </div>
            </div>  

 <div class="col-md-3" style="margin-top:-13px;margin-left: 18px;"/>

	<div class="" style=" background-color:#FFFFC6; width: 423px;"/>

                <div class="input-group" style="margin-left:1px;">
                <span class="input-group-addon" style=" text-align:left; width:120px; background-color:#FFFFA6;">Lab request</span>
                </div>
                <div class="switch" style="margin-left:1px;">
					<input type="radio" class="switch-input" name="TROOM_INITIATION" value="OFF" id="OFF" checked="">
					<label for="OFF" class="switch-label switch-label-off">Off</label>
					<input type="radio" class="switch-input" name="TROOM_INITIATION" value="ON" id="ON">
					<label for="ON" class="switch-label switch-label-on">On</label>
					<span class="switch-selection"></span>
				</div>
               <br>

                <div class="input-group" style="margin-top: -115px; margin-left: 134px;">
                <span class="input-group-addon" style="width:112px; background-color:#FFFFA6;">Description</span>
                <textarea  name="TESTDESCRIPTION"  id="TESTDESCRIPTION" class="form-control" style="height: 76px;" placeholder="Tests required"  rows="2"></textarea>

              </div> 
               <p> </p>
               <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Prescription<span class="sr-only">60% Complete</span> 
		</div>
	    </div>  <br>
                      <input type="button" value="Add drugs" onClick="addRow13('dataTable1')" class="btn-success" style="background-color:green;" >
                      <input type="button" value="Remove" onClick="deleteRow13('dataTable1')"class="btn-danger" style="background-color:red;" >
                      <input type="hidden" value="0" name="mytable_rows1"  id="mytable_rows1" />
                      <input type="hidden" id="mytable_rows" name="mytable_rows" value="0">
                           <p></p>
                           <table id="dataTable1" class="form" border="1">
                             <thead>
                               <tr>
                               <th> <label for="" class="label"> *</label>   </th>
                               <th> <label for="DRUG" class="label"> DRUG</label>         </th>
                               <th><label for="FREQUENCY" class="label">FQ</label>        </th>
                               <th><label for="TIMES" class="label">TIMES</label>         </th>
                               <th><label for="PERIOD" class="label">PERIOD</label>       </th>
                               <th> <label for="QTYPRESCRIBED" class="label">QTY</label>  </th>
                               </tr>
                             </thead>

                              <tbody >
                              </tbody>
                      </table>
                      <br>
                       <div class="input-group" style="margin-left:1px;">
                <span class="input-group-addon" style=" text-align:left; width:166px; background-color:#FFFFA6;">Is follow-up required?</span>
                </div>
                <div class="switch switch-blue" style="margin-left: 173px; margin-top: -28px;">
					<input type="radio" class="switch-input" name="FOLLOWUP" value="NOT" id="NOT" checked="">
					<label for="NOT" class="switch-label switch-label-off">Not</label>
					<input type="radio" class="switch-input" name="FOLLOWUP" value="REQUIRED" id="REQUIRED">
					<label for="REQUIRED" class="switch-label switch-label-on">Required</label>
					<span class="switch-selection"></span>
				</div>

                <div class="input-group">
                <span class="input-group-addon" style="width:120px; background-color:#FFFFA6;">Follow-up date (if rqd)</span>
                <input type="text" input name="FOLLOWUPDATE"  id="datepicker" style="width: 127px;" class="form-control" >
                </div>
                <br>
 
                <div class="input-group">
                <span class="input-group-addon" style="width:120px;  background-color:#FFFFA6;"> Action taken </span>
                <select class="form-control" id="ACTIONTAKEN" input name="ACTIONTAKEN" style="width:174px;">
                                                    <option> TREATED </option>
                                                    <option> REFERRED </option>
                                                    <option> TREATED AND REFERRED </option>
                              	                    </select>
              </div>

               <br>
                <span> Fill (2A) & (2B) if referred</span>
                <div class="progress progress-striped active">        
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	    <input type="radio" name="REFTUNER" id=">SWITCHED OFF" value="SWITCHED OFF" checked>
        <label for=">SWITCHED OFFS">Switched  off</label>
		<input name="REFTUNER" type="radio" id="TURN ON" value="TURN ON">
		<label for="TURN ON">Turn on</label> 
	    </div> 
        </div>  
                 
                <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6;"> (2A) </span>
                <select class="form-control" id="MEDICALREFERRAL" input name="MEDICALREFERRAL" >
                                 <option value="-1"> </option>
                                 <option value="AIC">AIC</option>
                                 <option value="BUTABIKA HOSPITAL">BUTABIKA HOSPITAL</option>
                                 <option value="CHINA-UG FRIENDSHIP HOSP">CHINA-UG FRIENDSHIP HOSP</option>
                                 <option value="KADIC CLINIC">KADIC CLINIC</option>
                                 <option value="KAMPALA DISPENSARY">KAMPALA DISPENSARY</option>
                                 <option value="KIBULI HOSPITAL">KIBULI HOSPITAL</option>
                                 <option value="KISWA HEALTH CENTRE">KISWA HEALTH CENTRE</option>
                                 <option value="KISWA TB CLINIC">KISWA TB CLINIC</option>
                                 <option value="LUBAGA HOSPITAL">LUBAGA HOSPITAL</option>
                                 <option value="MENGO HOSPITAL">MENGO HOSPITAL</option>
                                 <option value="MILDMAY">MILDMAY</option>
                                 <option value="MULAGO ASSESSMENT CENTRE">MULAGO ASSESSMENT CENTRE</option>
                                 <option value="MULAGO DENTAL CLINIC">MULAGO DENTAL CLINIC</option>
                                 <option value="MULAGO ENT CLINIC">MULAGO ENT CLINIC</option>
                                 <option value="MULAGO EYE CLINIC">MULAGO EYE CLINIC</option>
                                 <option value="MULAGO MAIN HOSPITAL">MULAGO MAIN HOSPITAL</option>
                                 <option value="MULAGO SICKLE CELL CLINIC">MULAGO SICKLE CELL CLINIC</option>
                                 <option value="MULAGO SKIN CLINIC">MULAGO SKIN CLINIC</option>
                                 <option value="MULAGO STD CLINIC">MULAGO STD CLINIC</option>
                                 <option value="MULAGO SURGICAL OPD">MULAGO SURGICAL OPD</option>
                                 <option value="MULAGO TB MANAGEMENT">MULAGO TB MANAGEMENT</option>
                                 <option value="MULAGO ULTRA SCAN">MULAGO ULTRA SCAN</option>
                                 <option value="NSAMBYA">NSAMBYA</option>
                                 <option value="REACHOUT MBUYA">REACHOUT MBUYA</option>
                                 <option value="TASO">TASO</option>
                                 <option value="POLICE">POLICE</option>
                      	         </select>
                                 <span class="input-group-addon" style=" border: 1px; background-color:#FFFFC6;">Medical referral</span>    
              </div>


                <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6;"> (2B) </span>
                <select class="form-control" id="SERVICEREFERREDFOR" input name="SERVICEREFERREDFOR">
                        <option value="-1"> </option>
                        <option value="ART, SUPPORT & CARE">ART, SUPPORT & CARE</option>
                        <option value="FURTHER MANAGEMENT">FURTHER MANAGEMENT</option>
					</select>
                     <span class="input-group-addon" style=" border: 1px; background-color:#FFFFC6;"> Svc referred for </span>   
              </div>

                         </p> 
            <div class="clear"></div>
            </p>
                    <input type="submit" name="button" id="button" value="Save " style= "margin-left: -1px; font-size:15px; font-weight:bold;  margin-top:-1px;height:30px; background-color:black; color:red;"/>
                        <input type="reset" name="button" id="button" value="Clear" style="background-color: red; color:black;">
             <div class="clear"></div>
             </form>
              <!--  </form> --> 
                     </div> </div> </div>  </div> </div> </div>  </div> </div> </div>
	<div id="tabs-2">
    VVVVVVVVVVVVVVVVVVVVVV
</div>
<div id="tabs-3">
    VVVVVVVVVVVVV
</div>

</div>
</div>
</div>

                        </span>
                        </div>
                       </div>
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information And Health Centre</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->

            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="assets/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="assets/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="assets/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="assets/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="assets/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="assets/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="assets/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="assets/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <script src="assets/lib/screenfull/screenfull.js"></script>
            <script src="assets/js/core.js"></script>
            <script src="assets/js/app.js"></script>
                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>
                <script src="assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->

          <script>

          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'inpats.php',
                       success : function(data){
                                $('#inpats').html(data);
                                 }
               });
               }, 2000);

          </script>

<script>

  function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var s1 = '<select  name="p_'+rowCount+'" id="p_'+rowCount+'" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:310px; background-color:#fff" >'+
             		                      	'<option value="-1"> </option>'+
                                             '<option> ABDOMINAL PAIN</option>'+
                                             '<option> ABNORMAL VAGINAL DISCHARGE</option>'+
                                             '<option>ANTE-NATAL CARE</option>'+
                                             '<option>BACKACHE</option>'+
                                             '<option>C-C SCREENING-INITIAL</option>'+
                                            ' <option>C-C SCREENING-ROUTINE RESCREENING</option>'+
                                            ' <option>C-C VIA NEGATIVE</option>'+
                                            ' <option>C-C VIA POSITIVE</option>'+
                                            ' <option>C-C VIA SUSPICIOUS FOR CANCER</option>'+
                                            ' <option>CHEST PAIN</option>'+
                                            ' <option>CONSTIPATION</option>'+
                                            ' <option>CONTRACEPTIONS</option>'+
                                            ' <option>COUGH</option>'+
                                            ' <option>DENTAL PROBLEM</option>'+
                                            ' <option>DIZZINESS</option>'+
                                            ' <option>EYE PROBLEM</option>'+
                                            ' <option>FAMILY PLANNING</option>'+
                                            ' <option>FEVER</option>'+
                                             '+<option>FLU</option>'+
                                             '+<option>GBV-COMMUNITY REDRESS/SUPPORT GROUP</option>'+
                                            ' <option>GBV-EMERGENCY CONTRACEPTION</option>'+
                                            ' <option>ABNORMAL VAGINAL DISCHARGE</option>'+
                                            ' <option>GENITAL ULCER</option>'+
                                            ' <option>GROWTHS IN GENITALS</option>'+
                                            ' <option>HERPES SIMPLEX</option>'+
                                            ' <option>HERPES ZOSTA</option>'+
                                            '<option> HIV/AIDS</option>'+
                                            '<option>ITCHING IN GENITAL</option>'+
                                          '  <option>PAINFUL GENITALS</option>'+
                                            '<option>SWELLING IN GENITALS</option>'+
                                          '  <option>SYPHILLIS</option>'+
                                          '  <option>URETHRAL DISCHARGE</option>'+
                                          '  <option>VAGINAL DISCHARGE</option>'+
                                          '  <option> SEXUAL ABUSE</option>'+
                                          '  <option>SEXUAL PROBLEMS</option>'+
                                          '  <option>STDS-SEXUAL HEALTH</option>'+
                                           '<option> ACNE</option>'+
                                           '<option>BODY ODOUR</option>'+
                                           '<option>BREAST CHANGES</option>'+
                                           '<option>MENSTRUAL RELATED PROBLEMS</option>'+
                                           '<option>MENSTRUATION</option>'+
                                           '<option>NORMAL VAGINAL DISCHARGE</option>'+
                                           '<option>SIZE OF SEX ORGANS</option>'+
                                           '<option>VIRGINITY</option>'+
                                           '<option>WET DREAMS</option>'+
                                            '</Select>';


        var selects = '<select  name="c_'+rowCount+'" id="c_'+rowCount+'" required="required" '+
                    'style= "margin-left: 0px;margin-top: 5px;height:20px; width:143px; background-color:#fff;" >'+
             		    '<option value="-1"> </option>'+
                    '<option>GENERAL TOPIC</option>'+
             			  '<option>PREGNANCY</option>'+
             				'<option>STDS</option>'+
                    '<option>BODY CHANGES</option>'+
             				'<option>SEXUAL HEALTH</option>'+
                    '</select>';
     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+selects+' </td>'+
               '<td>'+s1+'</td>';

      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows').value=rowCount;

  }

function  dostg(thisid){
 
     var val = thisid.split("_")[1];
	 var v1 = parseFloat(document.getElementById("pd_"+val).value);
	 var v2 = parseFloat(document.getElementById("fq_"+val).value);
	 var v3 = parseFloat(document.getElementById("tm_"+val).value);
	 
	 var v4 = v1*v2*v3;
	  document.getElementById("qty_"+val).value = v4;

}

   function addRow13(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;
     var ttt     = "<?php   echo $stss; ?>";

	 var s1 = '<select  name="dn_'+rowCount+'" id="dn_'+rowCount+'" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:214px; background-color:#fff" >'+ ttt+
                                            '</Select>';


	 var fq = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="fq_'+rowCount+'" id="fq_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:45px; background-color:#fff;" />';


	 var tm = '<select  onchange="dostg(this.id)" name="tm_'+rowCount+'" id="tm_'+rowCount+'" required="required" '+
	           'style= "margin-left: 0px;margin-top: 5px;height:20px; width:36px; background-color:#fff;" />'+
                                        '<option>1</option>'+
                                        '<option>2</option>'+
                                        '<option>3</option>'+
										'<option>4</option>'+
                                        '</select>';

	 var pd = '<input type="numeric"  onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pd_'+rowCount+'" id="pd_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:45px; background-color:#fff;" />';



	 var qty = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qty_'+rowCount+'" id="qty_'+rowCount+'" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:45px; background-color:#fff;" />';


     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+s1+' </td>'+
			   '<td>'+fq+' </td>'+
			   '<td>'+tm+' </td>'+
			   '<td>'+pd+' </td>'+
			   '<td>'+qty+' </td>';


      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows1').value=rowCount;

  }

  function deleteRow12(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) {
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
          table.rows[x].cells[1].childNodes[0].id="p_"+x;
		  table.rows[x].cells[1].childNodes[0].name="p_"+x;
          table.rows[x].cells[2].childNodes[0].id="c_"+x;
		  table.rows[x].cells[2].childNodes[0].name="c_"+x;
          }
           document.getElementById('mytable_rows').value=rowCount-1;
}

 function deleteRow13(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) {
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
          table.rows[x].cells[1].childNodes[0].id="dn_"+x;
		      table.rows[x].cells[1].childNodes[0].name="dn_"+x;

		  table.rows[x].cells[2].childNodes[0].id="fq_"+x;
		  table.rows[x].cells[2].childNodes[0].name="fq_"+x;
		  table.rows[x].cells[3].childNodes[0].id="tm_"+x;
		  table.rows[x].cells[3].childNodes[0].name="tm_"+x;
		  table.rows[x].cells[4].childNodes[0].id="pd_"+x;
		  table.rows[x].cells[4].childNodes[0].name="pd_"+x;

          table.rows[x].cells[5].childNodes[0].id="qty_"+x;
		  table.rows[x].cells[5].childNodes[0].name="qty_"+x;

          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}


  </script>

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


	<!-- NOTY JAVASCRIPT -->
    <link href="assets/admin_css/main.css" rel="stylesheet">
	<script type="text/javascript" src=" assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topCenter.js"></script>
    <script type="text/javascript" src=" js/admin.js"></script>
</body>
</html>

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
                                    <a href="logut.php"data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                        <span class="glyphicon glyphicon-comment"></span>                                   </a>                                </div>
                            </div>

                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="client_management.php">DASHBOARD</a></li> 
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Quick links<b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Waiting room</a></li>
                                            <li><a href="registration_desk.php">Registration desk</a></li>
                                        </ul>
                                    </li>
                                     
                                    <div class="col-xs-24">
                                      <ul class="stats_box" style="margin-top:7px;">
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
                  		           <strong></strong>Finished lab Orders
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
  </div>               
                                    
                                    </a></li>
                                    
                                    
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                  </nav>
                    <!-- /.navbar -->               <header class="head">
                                <div class="search-bar">
                                  
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                               <h3 style="text-align: center;"
             <img src="assets/img/ntihclog2.png" width="35" height="20">
              </i>&nbsp;
              NAGURU TEENAGE INFORMATION AND HEALTH CENTRE   </h3>
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
                        
                        <ul id="menu"  >
                        
                        <div class="stat_text" style="background-color:#000000; border:2px solid">
                  		  
              
                                  <li class="nav-header">  Clients Due for medical </li>
                                  <li class="nav-divider"></li>
                                  
 


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

                        <div class="inner bg-light lter" style="height: auto;">

                            <div class="text-center"> 
</div>
<div class="text-left">
<div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center; background-color:#eeeeee;">Antenatal services</h1> 
                        <div class="panel-body" style="margin-top: -33px;"> 
                            <div class="row"> 
                             <div class="col-lg-153" style="margin-left: -9px;">
<form class="" action="treatmentroom_process.php" method="post">  
     
 <fieldset class="row112" style="margin-left:0px;  width:246px;margin-top:2px; height:100px;"/>
    <div class="form-group">
    
    <div class="input-group">
                <span class="input-group-addon" style=" width: 110px; text-align:left; background-color:#FFFFa6;">NTIHC No.</span>
              <input type="text" input name="NTIHCNO" onKeyUp="searchpro()" id="NTIHCNO"class="form-control" required="required" style="width: 150px; background-color:#fff;">
              </div>  

 <div class="clear" id="recievedids" style="margin-left:-87px; margin-top:-10px; width:342px;"></div>
                </p>
                <div  id="schrest">
                </div>
                </fieldset>

   <fieldset class="row11" style= "margin-left:294px; margin-top: -100px; width: 263px; height: 103px;"/>
    <div class="input-group">
                <span class="input-group-addon" style=" width: 110px; text-align:left; background-color:#FFFFa6;">Vist date</span>
                <input type="date" input name="DATECREATED"  id="DATECREATED" value="<?php echo date('Y-m-d'); ?>" class="form-control" style="width: 150px;"> 
              </fieldset>   
    
      <div class="panel-body" style="margin-left: -23px; margin-top: -92px;">
                            <div class="panel-group" id="accordion">
                             <div class="row">
                <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:#000000;">Antenatal #1</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body" >                        
                <fieldset class="row111331" style= "  margin-left: -22px;margin-top: -16px; "/> 
                <legend1> </legend1>
                <div class="input-group">
                <span class="input-group-addon" style="width:141px; text-align:left; background-color:#FFFFa6;">ANC vist</span>
                  <input type="number" input name="ANCVIST"  id="ANCVIST" class="form-control" style="width: 120px;">
              </div>   

             <div class="input-group">
                <span class="input-group-addon" style="width:141px; text-align:left; background-color:#FFFFa6;">Parity</span>
                 <input type="number" input name="PARITY"  id="PARITY" class="form-control" style="width: 120px;">
              </div>   

               <div class="input-group">
                <span class="input-group-addon" style="width:141px; text-align:left; background-color:#FFFFa6;">ANC1 timing</span>
                <select class="form-control" id="ANC1_TIMING" input name="ANC1_TIMING" required="required" style="width: 118px;">
                <option value="_1"> </option>
                <option>YES</option>
                <option>NO</option>
                </select>
              </div>   


              <div class="input-group">
                <span class="input-group-addon" style="width:141px; text-align:left; background-color:#FFFFa6;">Weight(kg)</span>
                <input type="numeric" input name="WEIGHT"  id="WEIGHT" class="form-control" style="width: 120px;">
              </div>


               <div class="input-group">
                <span class="input-group-addon" style="width:141px; text-align:left; background-color:#FFFFa6;">INR_No</span>
                 <input type="numeric" input name="INR_NO"  id="INR_NO" class="form-control" required="required" style="width: 120px;">
              </div>


                <div class="input-group">
                <span class="input-group-addon" style="text-align:left; width: 141px; background-color:#FFFFa6;">eMTCT codes(W) </span>
                <select class="form-control" id="e_MTCTCODES_W" input name="e_MTCTCODES" required="required" style="width: 118px;">
                <option value="_1"> </option>
                <option>TR</option>
                <option>TRK</option>
                <option>TRR</option>
                <option>TRRK</option>
                <option>TRRT</option>
                <option>TRR+</option>
                <option>TRR+</option>
                </select>
              </div> 
              </fieldset>
              <br>
              
              <fieldset class="row1113300" style= "margin-left: 250px; width:254px; margin-top: -156px;border-radius: 6%;
border: 4px solid white;"/>

               <div class="input-group">
                <span class="input-group-addon" style="width: 124px;text-align:left; background-color:#FFFFa6;">Gravida</span>
                <select class="form-control" id="GRAVIDA" input name="GRAVIDA" required="required" style="width: 120px; ">
                <option value="_1"> </option>
                <option>Prime gravida</option>
                <option>Gravida 2</option>
                <option>Gravida 3</option>
                <option>Gravida 4</option>
                <option>Gravida 5</option>
                <option>Gravida 6</option>
                <option>Gravida 7</option>
                <option>Gravida 8</option>
                <option>Gravida 9</option>
                <option>Gravida 10</option>
                </select>
              </div>  

              <div class="input-group">
                <span class="input-group-addon" style="width: 124px; text-align:left; background-color:#FFFFa6;">Gestation age</span>
                <input type="number" class="form-control" id="GESTATIONALAGE" input name="GESTATIONALAGE" placeholder="(weeks)"
                required="required" style="width: 120px; text-align:center; ">

              </div>  


               <div class="input-group">
                <span class="input-group-addon" style="width: 124px; text-align:left; background-color:#FFFFa6;">Date of delivery</span>
                <input type="date" input name="EXPECTEDDATEOFDELIVERY" id="datepicker" placeholder="expected"
                style="width: 120px;" class="form-control">
              </div>  
              
              <div class="input-group">
                <span class="input-group-addon" style=" width:124px; text-align:left; background-color:#FFFFa6;">MU_AC</span>
                <input type="number" input name="MU_AC"  id="MU_AC" class="form-control" required="required" style="width: 120px; text-align:center;">
              </div>


               <div class="input-group">
                <span class="input-group-addon" style="width: 124px; text-align:left; background-color:#FFFFa6;">Blood pressure</span>
                <input type="numeric" input name="BLOODPRESSURE"  id="BLOODPRESSURE" class="form-control" required="required" style="width: 120px;">
              </div>


              <div class="input-group">
                <span class="input-group-addon" style="width: 124px; text-align:left; background-color:#FFFFa6;">eMTCT (P) </span>
                <select class="form-control" id="e_MTCTCODES_P" input name="e_MTCTCODES_P" required="required" style="width: 120px;">
                <option value="_1"> </option>
                <option>TR</option>
                <option>TRK</option>
                <option>TRR</option>
                <option>TRRK</option>
                <option>TRRT</option>
                <option>TRR+</option>
                <option>TRR+</option>
                </select>
                </div> 
              </fieldset>
                 <p></p>
                 
                 <fieldset class="row1113300" style= "margin-left: -20px; width:523px;"/>
                 <div class="input-group">
                <span class="input-group-addon" style=" width: 140px; text-align:left; background-color:#ffffa6;">Diagnosis </span>
                <textarea id="wysihtml5" name="MOTHERDIAGNOSIS" class="form-control" rows="2" cols="90"></textarea>
              </div>
               </fieldset>
               
                <fieldset class="row111333" style= "width:231px; background-color:#ffffa6; margin-top: 2px; border-radius: 6%;
border: 4px solid white; margin-left: -20px;">
                
                <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Who / Clinical stage / Viral load<span class="sr-only">60% Complete</span>
		</div>
	    </div>
                <div class="input-group" style="margin-top: -18px;">
                <span class="input-group-addon" style="width:96px; text-align:left; background-color:#FFFFa6;">Who stage</span>
                <input type="text" input name="WHOSTAGE"  id="WHOSTAGE" class="form-control" style="width:126px;">
                </div>

                <div class="input-group">
                          <span class="input-group-addon" style="width:96px; text-align:left; background-color:#FFFFa6;">CD4 Count</span>
                <input type="text" input name="CD4COUNT"  id="CD4COUNT" class="form-control" style="width:126px;">
                </div>

                <div class="input-group">
                <span class="input-group-addon" style=" width:96px; text-align:left; background-color:#FFFFa6;">Viral load</span>
                <input type="text" input name="VIRALLOAD"  id="VIRALLOAD" class="form-control" style="width:126px;" >
                </div>
                </fieldset>

                <fieldset class="row111337" style= "margin-left: 250px; width:255px; background-color:#FFFFa6;margin-top: -101px; border-radius: 6%;
border: 4px solid white;">
                 
                <div class="input-group">
                <span class="input-group-addon" style="width:130px; text-align:left;background-color:#FFFFa6;">ARVs drugs</span>
                <input type="text" input name="ARVs_DRUGS"  id="ARVs_DRUGS" class="form-control" style="width:140px;">
                </div>  

                <div class="input-group">
                <span class="input-group-addon" style="width:130px; text-align:left;background-color:#FFFFa6;">Pre-ART No.</span>
                <input type="numeric" input name="PRE_ATRNUMBER"  id="PRE_ATRNUMBER" class="form-control" style="width:140px;">
                </div>

                <div class="input-group">
                <span class="input-group-addon" style="width:130px; text-align:left;background-color:#FFFFa6;">IPT</span>
                <input type="numeric" input name="IPT"  id="IPT" class="form-control" style="width:140px;">
                </div>

                <div class="input-group">
                <span class="input-group-addon" style="width:130px; text-align:left;background-color:#FFFFa6;">CTX</span>
                <input type="numeric" input name="CTX"  id="CTX" class="form-control" style="width:140px;">
                </div>
                </fieldset>                      </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#000000;">Antenatal  #2 (Other info)</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                             <fieldset class="row111333" style= "width:230px; background-color:#ffffa6; margin-top: 2px; border-radius: 6%; border: 4px solid white; margin-left: -20px; margin-top: -18px;">
                
       <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Infant and young child feeding counselling <span class="sr-only">60% Complete</span>
		</div>
	    </div>
        <div class="progress progress-striped active" style="margin-top: -15px;">
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	    <input type="radio" name="IYCF" id=">NO" value="NO" checked>
        <label for=">NO">No</label>
		<input name="IYCF" type="radio" id="YES" value="YES">
		<label for="YES">Yes</label>
	    </div>  </div>

        <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Maternal nutrition counselling (MNC) <span class="sr-only">60% Complete</span>
		</div>
	    </div>
         <div class="progress progress-striped active" style="margin-top: -15px;">
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	    <input type="radio" name="MNC" id=">NO" value="NO" checked>
        <label for=">NO">No</label>
		<input name="MNC" type="radio" id="YES" value="YES">
		<label for="YES">Yes</label>
	    </div>  </div>


                <div class="input-group">
                <span class="input-group-addon" style=" width:130px; text-align:left; background-color:#FFFFa6;">TB status</span>
                <select class="form-control" id="TBSTATUS" input name="TBSTATUS" required="required" style="width: 105px;">
                <option value="-1"> </option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                </select>
                </div>

                <div class="input-group">
                <span class="input-group-addon" style="width: 128px; text-align:left; background-color:#FFFFa6;">Haemoglobin</span>
                 <input type="alphanumeric" input name="HAEMOGLOBIN"  id="HAEMOGLOBIN" class="form-control" required="required" style="width: 105px;">
                </div>

                </fieldset>

                <fieldset class="row111337" style= "margin-left: 245px; width:260px; background-color:#FFFFa6;margin-top: -204px; border-radius: 6%;
border: 4px solid white;">
                 <div class="input-group">
                <span class="input-group-addon" style="width: 128px; text-align:left; background-color:#FFFFa6;">(W) Syphilis test</span>
                <select class="form-control" id="SYPHILISTESTW" input name="SYPHILISTESTW" style="width:67px;">
                <option value="-1">Results </option>
                <option>+VE</option>
                <option>-VE</option>
                </select> 
                </div>

                <div class="input-group">
                <span class="input-group-addon" style="width: 128px; text-align:left; background-color:#FFFFa6;">(P) Syphilis test</span>
                <select class="form-control" id="SYPHILISTESTP" input name="SYPHILISTESTP" style="width:67px;">
                <option value="-1">Results </option>
                <option>+VE</option>
                <option>-VE</option>
                </select> 
                </div>

                <div class="input-group">
                <span class="input-group-addon" style="width: 128px; text-align:left; background-color:#FFFFa6;">Family planning</span>
                <select class="form-control" id="FAMILYPLANNINGMETHOD" input name="FAMILYPLANNINGMETHOD" style="width:67px;" >
                <option value="-1">Counseling </option>
                <option>YES</option>
                <option>NO</option>
                </select> 
                </div>


                <div class="input-group">
                <span class="input-group-addon" style=" width: 128px; text-align:left; background-color:#FFFFa6;">TT</span>
                <input type="alphanumeric" input name="TT"  id="TT" class="form-control" style="width: 68px;">
                 </div>

                <div class="input-group">
                <span class="input-group-addon" style="width: 128px; text-align:left; background-color:#FFFFa6;">Free LLIN</span>
                <select class="form-control" id="FREE_LLIN" input name="FREE_LLINS" style="width: 68px;">
                <option value="-1"> </option>
                <option>YES</option>
                <option>NO</option>
                </select>
               </div>

                <div class="input-group">
                <span class="input-group-addon" style="width: 128px; text-align:left; background-color:#FFFFa6;">Mebendazole</span>
                <input type="number" input name="MEBENDAZOLE"  id="MEBENDAZOLE" class="form-control" style="width:68px;">
                 </div>

               <div class="input-group">
                          <span class="input-group-addon" style="width: 128px; text-align:left; background-color:#FFFFa6;">Iron</span>
                <input type="number" input name="IRON"  id="IRON" class="form-control" style="width: 68px" >
                </div>

                <div class="input-group">
                <span class="input-group-addon" style="width: 128px; text-align:left; background-color:#FFFFa6;">Folic acid</span>
                <input type="number" class="form-control" id="FOLICACID" input name="FOLICACID" style="width: 68px;">
               </div>
               <br>
                
                </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000000;">Antenatal #3 Examination progress</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        
                                        <table id="dataTable1002"  border="1" style="width: 109%; margin-left: -22px;">
                                <thead>
                                     <tr style="width:100%;">
                                <th> <label for="Default" class="label"> *</label>  </th>
                                <th> <label for="WEEKSOF_AMENORHOEA" class="label">Weeks of Amenorhoea</label>  </th>
                                <th><label for="FUNDDALHEIGHT" class="label">Fundal Height</label>   </th>
                                <th> <label for="PRESENTATION" class="label">Presentation</label>  </th>
                                <th><label for="POSITIONLIE" class="label">Position lie</label>     </th>  
                             </tr>
                                      </thead>
                                       <tbody id="tablebody" style="width:800px;">
                                        <tr id="0_rowdata" >
                                        <td><input type="checkbox" required="required" checked="checked" /></td>
                                        <td>
                                        <input type="text" name="WEEKSOF_AMENORHOEA" id="WEEKSOF_AMENORHOEA"
                                        style= "  margin-left: 0px;color:#000000;"/>
                                        </td>
                     					       	  <td><input type="text" name="FUNDDALHEIGHT" id="FUNDDALHEIGHT"  
                                        style= " margin-left: 0px;  color:#000000;"/>

                     						       </td>
                     						       <td><input type="text" name="PRESENTATION" id="PRESENTATION"  
                                       style= " margin-left: 0px;color:#000000;"/> 
                     					         </td>
                                                 
                     					      	 <td><input type="text" name="POSITIONLIE" id="POSITIONLIE"  
                                       style= " margin-left: 0px; color:#000000;"/> 
                     		              </td> 
                                       
                     				  </tr>
                               </tbody>
                               </table> 
                           <!--  </end1> -->
                           <br>
                           <!--  </start2> -->
                             <table id="dataTable1001"  border="1" style="width: 109%; margin-left: -22px;">
                                <thead>
                                     <tr style="width:100%;">
                                <th> <label for="Default" class="label"> *</label>  </th>
                                   <th><label for="RELATIONPP_BRIM" class="label">Relation PP / Brim</label></th>
                                <th> <label for="FOETALHEART" class="label">Foetal Heart</label>  </th>
                                <th><label for="VARICOSE_OEDEMA" class="label">Varicose Oedema</label>                </th>
                                <th><label for="URINE" class="label">Urine</label></th>  </th>  
                             </tr>
                                      </thead>
                                       <tbody id="tablebody" style="width:800px;">
                                        <tr id="0_rowdata" >
                                        <td><input type="checkbox" required="required" checked="checked" /></td>
                                        <td>
                                        <input type="text" name="RELATIONPP_BRIM" id="RELATIONPP_BRIM"
                                        style= "  margin-left: 0px;color:#000000;"/>
                                        </td>
                     					       	  <td><input type="text" name="FOETALHEART" id="FOETALHEART" 
                                        style= " margin-left: 0px;  color:#000000;"/>

                     						       </td>
                     						       <td><input type="text" name="VARICOSE_OEDEMA" id="VARICOSE_OEDEMA" 
                                       style= " margin-left: 0px;color:#000000;"/> 
                     					         </td>
                                                 
                     					      	 <td><input type="text" name="URINE" id="URINE"
                                       style= " margin-left: 0px; color:#000000;"/> 
                     		              </td> 
                                       
                     				  </tr>
                               </tbody>
                               </table> 
                           <!--  </form> -->  
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:#000000;">Antenatal #4 (Investigations & Other treatments)</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        
                                           <fieldset class="row111335" style= "margin-left:0px; width:470px; background-color:#; margin-top: 1px;"/>


        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
        <label for=">DEFAULT">BLOOD_INVESTIGATION => </label>
  	    <input type="radio" name="BLOOD_INVESTIGATION" id=">ACTIVE" value="ACTIVE" checked>
        <label for=">ACTIVE">Turn on lab request to order</label>
	    </div>  </div>

        <div class="progress progress-striped active" style="margin-top:-15px;">
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
        <label for=">DEFAULT">X_RAY_INVESTIGATION => </label>
  	    <input type="radio" name="X_RAY_INVESTIGATION" id=">DEACTIVATE" value="DEACTIVATE" checked>
        <label for=">ADEACTIVATE">Deactivated</label>
		<input name="X_RAY_INVESTIGATION" type="radio" id="ACTIVE" value="ACTIVE">
		<label for="ACTIVE">Activate </label>
	    </div>  </div>


        <div class="progress progress-striped active"  style="margin-top:-15px;">
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
        <label for=">DEFAULT">ULTRASOUND => </label>
  	    <input type="radio" name="ULTRASOUND" id=">DEACTIVATE" value="DEACTIVATE" checked>
        <label for=">ADEACTIVATE">Deactivated</label>
		<input name="ULTRASOUND" type="radio" id="ACTIVE" value="ACTIVE">
		<label for="ACTIVE">Activate </label>
	    </div>  </div>
  
         <div class="progress progress-striped active"  >
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
        <label for=">DEFAULT">OTHER_TREATMENT => </label>
  	    <input type="radio" name="OTHER_TREATMENT" id=">NOTNEEDED" value="NOTNEEDED" checked>
        <label for=">NOTNEEDED"> No treatment required</label>
		<input name="OTHER_TREATMENT" type="radio" id="NEEDED" value="NEEDED">
		<label for="NEEDED">Issue treatment</label>
	    </div>  </div>

        <div class="progress progress-striped active" style="margin-top:-17px;">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		If yes: proceed to prescription<span class="sr-only">60% Complete</span>
		</div>
	    </div>

         <div class="progress progress-striped active"  >
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
        <label for=">DEFAULT">REFERRAL => </label> 
		<input name="REFERRALIN_OUT" type="radio" id="IN" value="IN">
		<label for="IN">In </label>
        <input name="REFERRALIN_OUT" type="radio" id="OUT" value="OUT">
		<label for="OUT">Out </label>
	    </div>  </div>


                <div class="input-group" >
                <span class="input-group-addon" style="width: 166px;text-align:left; background-color:#FFFFC6;">Risk factors </span>
                <textarea id="wysihtml5" name="RISKFACTORS" placeholder="Recommendation for delivery with reference to client(s) complications" class="form-control" rows="3" cols="50"> </textarea>
                </div>


                <div class="input-group">
                <span class="input-group-addon" style="width: 166px;text-align:left; background-color:#FFFFC6;">Provider initial</span>
                <input type="text" input name="USERINITIAL"  id="USERINITIAL" class="form-control"  style="width:303px; background-color:#ffffa6;">
                </div>
 </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
    

 <div class="col-lg-146" style=" text-align: left;"/>    
                         
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Prescription and Referrals</a>
                                </li>
                                <li><a href="#profile-pills" data-toggle="tab">In-service</a>
                                </li>
                                <li><a href="#messages-pills" data-toggle="tab">Lab results</a>
                                </li> 
                            </ul> 
                            <div class="tab-content" >
                            <div class="tab-pane fade in active" id="home-pills" > 
                               
                                <div class="" style=" background-color:#ffffa6; width: 417px; "/>
                                    
        <fieldset class="row1"  style="border-radius: 6%; border: 4px solid white;">
        <div class="progress progress-striped active" style="width:280px;">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Switch on lab request to activate a lab order<span class="sr-only">60% Complete</span> 
		</div>  
        </div>
                <div class="switch" style="margin-left:289px;    margin-top: -46px;" >
					<input type="radio" class="switch-input" name="TROOM_INITIATION" value="OFF" id="OFF" checked="">
					<label for="OFF" class="switch-label switch-label-off">Off</label>
					<input type="radio" class="switch-input" name="TROOM_INITIATION" value="ON" id="ON">
					<label for="ON" class="switch-label switch-label-on">On</label>
					<span class="switch-selection"></span>
				</div> 
                 
                
                 <div class="input-group">
                <span class="input-group-addon" style=" width: 140px; text-align:left; background-color:#ffffa6;">Comment </span>
                <textarea  name="TESTDESCRIPTION"  id="TESTDESCRIPTION" class="form-control" style="height: 30px; width: 270px;" placeholder="  (optional)"  rows="1"  ></textarea>
               </div>
               </fieldset>
                <p></p>

              </div> 
               <fieldset class="row1"  style="width: 417px; border-radius: 6%; border: 4px solid white;">
               <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Prescription<span class="sr-only">60% Complete</span> 
		</div>
	    </div>   
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
                      <p></p>
                     
                     <div class="col-xs-19">   
            <label>Is medical follow-up required?</label> 
                    <div class="switch switch-blue" style="margin-left: 0px; margin-top: 0px;">
					<input type="radio" class="switch-input" name="FOLLOWUP" value="NOT" id="NOT" checked="">
					<label for="NOT" class="switch-label switch-label-off">No</label>
					<input type="radio" class="switch-input" name="FOLLOWUP" value="REQUIRED" id="REQUIRED">
					<label for="REQUIRED" class="switch-label switch-label-on">Required</label>
					<span class="switch-selection"></span>
				</div>
               </div> 
                 
                <div class="col-xs-20">  
        <label>If required? schedule a date</label> 
        
        <div class="progress progress-striped active">        
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	   <input type="text" input name="FOLLOWUPDATE"  id="datepicker" class="form-control" >
        </div> </div>   
        </div>     
        </fieldset>
         
         <br> 
         <fieldset class="row1"  style="border-radius: 6%; border: 4px solid white; width:417px;">
        <div class="col-xs-19" style="margin-left: 6px;">  
        <label>Action taken</label>  
        <div class="progress progress-striped active" style="margin-left: -6px;">        
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	   <select class="form-control" id="ACTIONTAKEN" input name="ACTIONTAKEN" >
        <option> TREATED </option>
                                                    <option> REFERRED </option>
                                                    <option> TREATED AND REFERRED </option>
                              	                    </select>
        </div> 
        </div> </div> 
        
        <div class="col-xs-19" style="margin-left: 7px;">   
        <label>Switch on" to activate referral</label> 
                
        <div class="progress progress-striped active">        
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	    <input type="radio" name="REFTUNER" id=">SWITCHED OFF" value="SWITCHED OFF" checked>
        <label for=">SWITCHED OFFS">Switched off</label>
		<input name="REFTUNER" type="radio" id="TURN ON" value="TURN ON">
		<label for="TURN ON">Switch on</label> 
	    </div> 
        </div> </div> 
          
        <div class="col-xs-19"  style="width:410px; margin-top:-15px;">   
		<label>Medical referral</label> 
		   
        <div class="progress progress-striped active" >        
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
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
              </div>
              </div>  </div>

              <div class="col-xs-19"  style="width:410px; margin-top:-15px;">   
		<label>Service referred for</label> 
		   
        <div class="progress progress-striped active" >        
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> 
                <select class="form-control" id="SERVICEREFERREDFOR" input name="SERVICEREFERREDFOR">
                        <option value="-1"> </option>
                        <option value="ART, SUPPORT & CARE">ART, SUPPORT & CARE</option>
                        <option value="FURTHER MANAGEMENT">FURTHER MANAGEMENT</option>
					</select>
                     </div>
              </div>  </div>
              </fieldset>

                         </p> 
            <div class="clear"></div>
            </p>
                    <input type="submit" name="button" id="button" value="Save " style= "margin-left: -1px; font-size:15px; font-weight:bold;  margin-top:-1px;height:30px; background-color:black; color:red;"/>
                        <input type="reset" name="button" id="button" value="Clear" style="background-color: red; color:black;">
             <div class="clear"></div>
             </form>
              <!--  </form> --> 
                     </div> 
                
                                    
                                    
                                </div>
                                
                                <div class="tab-pane fade" id="profile-pills">
                                 <div class="" style=" background-color:#ffffa6; width: 423px; "/>
                                    <h4>List of clients in service</h4> 
                                    
                                    
                                </div></div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Lab results</h4> 
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   </div> 
  
            </div> </div>
            <!-- /#wrap -->
           
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
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:210px; background-color:#fff" >'+ ttt+
                                            '</Select>';


	 var fq = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="fq_'+rowCount+'" id="fq_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:30px; background-color:#fff;" />';


	 var tm = '<select  onchange="dostg(this.id)" name="tm_'+rowCount+'" id="tm_'+rowCount+'" required="required" '+
	           'style= "margin-left: 0px;margin-top: 5px;height:20px; width:36px; background-color:#fff;" />'+
                                        '<option>1</option>'+
                                        '<option>2</option>'+
                                        '<option>3</option>'+
										'<option>4</option>'+
                                        '</select>';

	 var pd = '<input type="numeric"  onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pd_'+rowCount+'" id="pd_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:40px; background-color:#fff;" />';



	 var qty = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qty_'+rowCount+'" id="qty_'+rowCount+'" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:40px; background-color:#fff;" />';


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

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
                        
                        <div class="stat_text" style="background-color:#000000; border:2px solid"  >
                  		  
              
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
                    <h1 class="page-header" style="text-align:center; background-color:#eeeeee;">TREATMENT ROOM</h1> 
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:#000000;">#1</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body" >
                                                                
                <fieldset class="row1113300" style= "margin-left: -20px; width:523px; margin-top: -16px; border:4px solid #ffffa6;"/>
                <legend1> </legend1>
                
                 <div class="input-group">
                <span class="input-group-addon" style="background-color:#ffffa6;width: 160px;text-align:left;">Parity</span>
                <input type="number" input name="PARITY"  id="PARITY" class="form-control" style="width: 227px;">
              </div>
              <p> </p>
              
             <div class="input-group">
                <span class="input-group-addon" style="background-color:#ffffa6;width: 160px;text-align:left;">No. of living children</span>
                <input type="number" input name="LIVINGCHILDREN"  id="LIVINGCHILDREN" class="form-control" required="required" style="width: 227px;">
              </div> <p> </p>
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 152px;background-color:#ffffa6;width: 160px;text-align:left;">LNMP</span>
                <input type="date" input name="LNMP"  id="datepicker" class="form-control"  style="width: 227px;">
              </div>
             <p> </p>
               
            <div class="input-group">
                <span class="input-group-addon" style="background-color:#ffffa6;width:160px;text-align:left;">Method</span>
                <select class="form-control" id="FAMILYPLANNINGMETHOD" input name="FAMILYPLANNINGMETHOD" required="required" style="width:227px;" >
                <option value="-1"> </option>
                 <option>IMPLANON</option>
                 <option>JADELA</option>
                 <option>PILLS</option>
                 <option>CONDOMS</option>
                 <option>DEPO PROVERA</option>
                 <option>IUD</option>
                 <option>NORISTERAT</option>
                 <option>NORIGYNON</option>
                </select>
              </div> 
             <p> </p>
             
           <div class="input-group">
                <span class="input-group-addon" style="background-color:#ffffa6;width: 160px;text-align:left;">Description</span>
                <select class="form-control" id="DESCRIPTION" input name="DESCRIPTION" style="width: 227px;">
                <option value="NOT APPLICABLE">Applicable to pills only </option>
                <option>OVULLETS</option>
                 <option>SOFT SURE</option>
                 <option>LOFEMINAL</option>
                 <option>MICROGYNON</option> 
                </select>
              </div> <p> </p>
               
               <div class="input-group">
                <span class="input-group-addon" style="background-color:#ffffa6; width:160px; text-align:left;">Quantity (specify)</span>
                <input type="number" input name="QUANTITY"  id="QUANTITY" value="1" class="form-control" style="width: 227px;">  
              </div>
              <p> </p>
               
                <div class="input-group">
                <span class="input-group-addon" style="background-color:#ffffa6;width: 160px;text-align:left;">Appointment date</span>
                <input type="date" input name="APPOINTMENTDATE"  id="datepicker" class="form-control" style="width: 227px;"> 
             </div> <p> </p>
              
             <div class="progress progress-striped active">        
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
        Follow Up <span class="sr-only">60% Complete</span> 
  	    <input type="radio" name="FPFOLLOWUP" id=">NO" value="NO" >
        <label for=">NO"> No</label>
		<input name="FPFOLLOWUP" type="radio" id="YES" value="YES" checked>
		<label for="YES">Yes</label> 
	    </div> 
	    </div>  
        
               <div class="input-group">
               <span class="input-group-addon" style="background-color:#ffffa6;width: 160px;text-align:left;">Date returned</span>
               <input type="date" input name="DATERETURNED"  id="datepicker" value="<?php echo date('Y-m-d'); ?>" class="form-control" style="width: 227px; ">
              </div> <p> </p>
              
                <div class="input-group">
                <span class="input-group-addon" style="width: 113px;background-color:#ffffa6;width: 160px;text-align:left;">HCT Code</span>
                <input type="text" input name="HCTCODE"  id="HCTCODE" class="form-control" style="width: 227px;">
              </div> <p> </p>
                   
                 <div class="input-group">
                <span class="input-group-addon" style="background-color:#ffffa6;width: 160px;text-align:left;">Provider initial</span>
                <input type="text" input name="USERINITIAL"  id="USERINITIAL" class="form-control"  style="width: 227px; background-color:#fff;">
              </div>   
              </fieldset> 
                                </div>
                                </div>
                                </div>
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#000000;">#2 Process Family Planning</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        
                                             <fieldset class="row111333" style= "width:240px; background-color:#ffffa6; margin-top: 2px; border-radius: 0%; border: 4px solid white; margin-left: -20px; margin-top: -18px;">
                
       <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6;width: 120px;text-align:left;">Parity</span>
                <input type="number" input name="PARITY"  id="PARITY" class="form-control" style="width: 127px;">
              </div>
              
              <label>Living children</label>
             <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6;width: 120px;text-align:left;">Number</span>
                <input type="number" input name="LIVINGCHILDREN"  id="LIVINGCHILDREN" class="form-control" required="required"style="width: 127px;">
              </div> 
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 152px;background-color:#FFFFA6;width: 120px;text-align:left;">LNMP</span>
                <input type="date" input name="LNMP"  id="datepicker" class="form-control"  style="width: 127px;">
              </div>
             
               
            <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6;width: 120px;text-align:left;">Method</span>
                <select class="form-control" id="FAMILYPLANNINGMETHOD" input name="FAMILYPLANNINGMETHOD"  id="METHOD"required="required"style="width: 127px;" >
                <option value="-1"> </option>
                 <option>IMPLANON</option>
                 <option>JADELA</option>
                 <option>PILLS</option>
                 <option>CONDOMS</option>
                 <option>DEPO PROVERA</option>
                 <option>IUD</option>
                 <option>NORISTERAT</option>
                 <option>NORIGYNON</option>
                </select>
              </div>  
 
           <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6;width: 120px;text-align:left;">Description</span>
                <select class="form-control" id="DESCRIPTION" input name="DESCRIPTION" style="width: 127px;">
                <option value="NOT APPLICABLE">Pills only </option>
                <option>OVULLETS</option>
                 <option>SOFT SURE</option>
                 <option>LOFEMINAL</option>
                 <option>MICROGYNON</option> 
                </select>
              </div>  
               
               <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6; width:120px; text-align:left;">Qty</span>
                <input type="number" input name="QUANTITY"  id="QUANTITY" value="1" class="form-control" style="width: 127px;">  
              </div> 
              </fieldset>

                <fieldset class="row111337" style= "margin-left: 227px; width:276px; background-color:#FFFFa6;margin-top:-163px; border-radius: 0%;
border: 4px solid white;">
                  <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6;width: 120px;text-align:left;">Appointment date</span>
                <input type="date" input name="APPOINTMENTDATE"  id="datepicker" class="form-control" style="width: 131px;"> 
             </div>  
                
                <div class="progress progress-striped active">        
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">Follow Up
  	    <input type="radio" name="FPFOLLOWUP" id=">NO" value="NO" checked>
        <label for=">NO">No</label>
		<input name="FPFOLLOWUP" type="radio" id="YES" value="YES">
		<label for="YES">Yes</label> 
	    </div>  </div>         
                            
               <div class="input-group">
                <span class="input-group-addon" style="background-color:#FFFFA6;width: 135px;text-align:left;">Date returned</span>
                <input type="date" input name="DATERETURNED"  id="datepicker" value="<?php echo date('Y-m-d'); ?>" class="form-control" style="width: 131px;">
              </div> 
              
                <div class="input-group">
                <span class="input-group-addon" style="width: 135px; background-color:#FFFFA6;width: 135px;text-align:left;">HCT Code</span>
                <input type="text"name="HCTCODE"  id="HCTCODE" class="form-control" style="width: 131px;">
              </div>  
              
         <div class="progress progress-striped active">        
        <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">HIV counselling
  	    <input type="radio" name="HIVCOUNSELLINGSTATUS" id=">DEACTIVE" value="DEACTIVE" checked>
        <label for=">DEACTIVE">Deactivated</label>
		<input name="HIVCOUNSELLINGSTATUS" type="radio" id="ACTIVE" value="ACTIVE">
		<label for="ACTIVE">Activate</label> 
	    </div> </div>
       </fieldset>
                                     </div>
                                   </div>
                               </div>
                               <div class="panel panel-default">
                               <div class="panel-heading">
                               <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000000;">#3 HIV counselling (Section A)</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        <fieldset class="row111333" style= "width:267px; background-color:#ffffa6; margin-top: 2px; border-radius: 0%; border: 4px solid white; margin-left: -20px; margin-top: -18px;">
                
       <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		  SECTION A<span class="sr-only">80% Complete</span>
		</div>
	     </div> 

                <div class="input-group" style="margin-top: -16px;">
                <span class="input-group-addon" style=" width: 120px; text-align:left; background-color:#ffffa6;">Reg. No.</span>
                <input type="alphanumeric" input name="REGISTRATIONNUMBER"  id="REGISTRATIONNUMBER"  class="form-control" style=" width: 140px;"/>
                </div>

               <div class="input-group">
               <span class="input-group-addon" style="width: 120px; text-align:left; background-color:#ffffa6; color:FFF;">Date</span>
             <input type="date" id="datepicker" value="<?php echo date('d-m-y'); ?>" class="form-control" style="width: 140px;"/>
               </div>

                 <div class="input-group">
                <span class="input-group-addon" style="width:120px; text-align:left; background-color:#ffffa6;">Health Unit</span>
                 <input type="text" input name="HEALTHUNIT"  id="HEALTHUNIT"  value="NTIHC" class="form-control" style=" width: 140px;"/>
              </div>

               <div class="input-group">
                <span class="input-group-addon" style="width: 120px; text-align:left; background-color:#ffffa6;">HSD:</span>
                 <input type="text" input name="HSD"  id="HSD" class="form-control" style="  width:140px;"/>
              </div>

              <div class="input-group">
                <span class="input-group-addon" style="width: 120px; text-align:left; background-color:#ffffa6;">District</span>
                 <input type="text" input name="DISTRICT"  id="DISTRICT" class="form-control" style=" width: 140px; background-color:#FFFFC6;"/>
              </div>

              <div class="input-group">
                <span class="input-group-addon" style="width: 120px; text-align:left; background-color:#ffffa6; color:FFF;">Centre status</span>
                <select class="form-control" id="CENTRESTATUS" input name="CENTRESTATUS"  style=" width: 140px;"/>
                <option value="STATIC">STATIC </option>
                                <option>OUTREACH</option>
                 </select>
              </div>

               <div class="input-group">
                <span class="input-group-addon" style=" width:120px; text-align:left; background-color:#ffffa6;">Location</span>
               <input type="numeric" input name="LOCATION"  id="LOCATION" placeholder="Specify where"  class="form-control" style="  width:140px;"/>
               </div>

                <div class="input-group">
                <span class="input-group-addon" style="width: 120px;text-align:left; background-color:#ffffa6;">Point of testing</span>
                <select class="form-control" id="POINTOFTESTING" input name="POINTOFTESTING" placeholder="e.g. Ward, OPD, Clinic" style="   width: 140px;"/>
                <option value="-1"> </option>
                             <option>WARD</option>
                             <option>OPD</option>
                             <option>CLINIC</option>
                 </select>
              </div> 
              </fieldset>                   
               
                <fieldset class="row111337" style= "margin-left: 250px; width:254px; background-color:#FFFFa6; margin-top:-191px; border-radius: 0%;
border: 4px solid white;">
            <div class="input-group">
                <span class="input-group-addon" style="width: 120px;text-align:left; background-color:#ffffa6;">Client Name</span>
               <input type="numeric" input name="CLIENTNAME"  id="CLIENTNAME" class="form-control" style=" background-color:#FFFFC6; width: 127px;"/>
              </div>

                <div class="input-group">
                <span class="input-group-addon" style="width: 120px;text-align:left; background-color:#ffffa6;">Telephone</span>
               <input type="numeric" input name="PHONECONTACT"  id="PHONECONTACT"  class="form-control" style=" background-color:#FFFFC6;  width:127px;"/>
              </div>

                     <div class="input-group">
                <span class="input-group-addon" style="width: 120px;text-align:left; background-color:#ffffa6;">Sex</span>
                <select class="form-control" id="SEX" input name="SEX"  style="background-color:#FFFFC6; width: 127px;"/>
                <option value="-1"> </option>
                             <option>MALE</option>
                             <option>FEMALE</option>
                 </select>
              </div>
              <div class="input-group">
                <span class="input-group-addon" style="width: 120px;text-align:left; background-color:#ffffa6;">Age</span>
                <select class="form-control" id="AGE" input name="AGE"  style=" background-color:#FFFFC6; width: 127px;"/>
                <option value="0"> </option>
                                <option>Below 10</option>
								<option>10</option>
                                <option>11</option>
								<option>12</option>
                                <option>13</option>
								<option>14</option>
                                <option>15</option>
								<option>16</option>
                                <option>17</option>
								<option>18</option>
                                <option>19</option>
								<option>20</option>
                                <option>21</option>
								<option>22</option>
                                <option>23</option>
                                <option>24</option>
                                 <option>Above 24</option>
                                </select>
                                 </div>

                     <div class="input-group">
               <span class="input-group-addon" style="width: 120px;text-align:left; background-color:#ffffa6;">Accompanied</span>
               <select class="form-control" id="ACCOMPANIEDBY" input name="ACCOMPANIEDBY" placeholder="If child (Below 12 years)"  style=" width: 127px;"/>
                <option value="NONE">by</option>
                             <option>MOTHER</option>
                             <option>FATHER</option>
                             <option>CARE TAKER</option>
                 </select>
              </div>
               <div class="input-group">
                <span class="input-group-addon" style="width: 120px;text-align:left; background-color:#ffffa6;">Village</span>
               <input type="text" input name="VILLAGE"  id="VILLAGE" class="form-control" style=" width: 127px;"/>
              </div>

               <div class="input-group">
                <span class="input-group-addon" style="width: 120px;text-align:left; background-color:#ffffa6;">Parish</span>
               <input type="text" input name="PARISH"  id="PARISH"  class="form-control" style=" width: 127px;"/>
              </div>

              <div class="input-group">
                <span class="input-group-addon" style="width: 120px;text-align:left; background-color:#ffffa6;">Sub county</span>
              <input type="text" input name="SUBCOUNTY"  id="SUBCOUNTY"  class="form-control" style=" width: 127px;"/>
              </div>
       </fieldset>                          
                           <!--  </form> -->  
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:#000000;">#3ii HIV counselling (Section B)</a>
                                    </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        
                                    <fieldset class="row111333" style= "width:267px;  margin-top: 2px; margin-left: -20px; margin-top: -18px;">
                 
              <div class="form-group">
                        <label>Pre-Test Counselling</label>
                        <select class="col-lg-155" id="PRE_TESTCOUSELLING_GIVEN"  name="PRE_TESTCOUSELLING_GIVEN" > 
                        <option value="GIVEN">GIVEN</option>
                                <option>NOT GIVEN</option>   
                </select>
                </div>
               
              <div class="form-group">
                        <label>Counselled as</label>
                        <select class="col-lg-155" id="COUNSELLED_AS"  name="COUNSELLED_AS" > 
                        <option value="INDIVIDUAL">INDIVIDUAL</option>
                                <option>COUPLE</option>
                                <option>GROUP</option>   
                </select>
                </div>
              
 
              </fieldset>                   
               
                <fieldset class="row111337" style= "margin-left: 245px; width:282px; margin-top:-59px; border-radius: 0%;"> 
                  <div class="form-group">
                        <label>Approach</label>
                        <select class="col-lg-155" id="APPROACH"  name="APPROACH" > 
                        <option value="_1"> </option>
                              <option>CICT</option>
                                <option>PITC</option>   
                </select>
                </div>

                 
                 <div class="form-group">
                        <label>HCT Entry Point</label>
                        <select class="col-lg-155" id="HCT_ENTRYPOINT"  name="HCT_ENTRYPOINT" > 
                        <option value="_1"> </option>
                               <option>FACILITY BASED</option>
                                <option>WORK PLACE</option>
                                <option>HBHCT</option>
                                <option>FOR PREGNANT</option>
                                <option>PMTCT</option>
                                <option>PEP</option>
                                <option>CIRCUMCISION (SMC)</option>
                                <option>MARPS</option>  
                                </select>
                                </div>
                
                  <div class="form-group">
                        <label>Marital status</label>
                        <select class="col-lg-155" id="MARITALSTATUS"  name="MARITALSTATUS" > 
                        <option value="_1"> </option>
                                 <option>MARRIED/COHABITING</option>
                                <option>DIVORCED/SEPARATED</option>
                                <option>WIDOWED</option>
                                <option>NEVER MARRIED</option>  
                                </select>
                                </div> 
                </fieldset> 
                <br>  
                <p></p>   
                                         
              <fieldset class="row111335" style= "margin-left:-20px; width:470px; background-color:#; margin-top: 1px;"/>
              
               <div class="form-group">
                        <label>Have you ever Tested for HIV before?</label>
                        <select class="col-lg-154" id="EVERTESTEDBEFORE"  name="EVERTESTEDBEFORE" > 
                        <option value="_1"> </option>
                                <option>NO</option>
								<option>YES</option>  
                                </select>
                                </div>
                  
	          <div class="form-group">
                        <label>How many times have you tested in the last 12 months</label>
                        <input type="number" class="col-lg-154" id="NUMBEROFTESTS"  name="NUMBEROFTESTS" > 
                                </div>
         
	          <div class="form-group">
                        <label>Number of sexual partners in the last 12 months</label>
                        <input type="number" class="col-lg-154" id="NUMBEROFSEXUALPARTNERS"  name="NUMBEROFSEXUALPARTNERS" > 
                                </div> 
 
              <div class="form-group">
                        <label>What was the test results last time you Tested?</label>
                        <select class="col-lg-154" id="LAST_TESTRESULTS"  name="LAST_TESTRESULTS" >
                                <option value="_1"> </option>
                                <option>NEGATIVE</option>
								<option>POSITIVE</option> 
                                </select>
                                </div>  
          
		    <div class="form-group">
                        <label>Has your Partner / Spouse been tested for HIV before?</label>
                        <select class="col-lg-154" id="SPOUSE_PARTNERTESTED_BEFORE" name="SPOUSE_PARTNERTESTED_BEFORE" >
                                <option value="_1"> </option>
                                <option>NO</option>
								<option>YES</option>
                                <option>DO NOT KNOW</option> 
                                </select>
                                </div>  
         
         <div class="form-group">
                        <label>If yes what were the results?</label>
                        <select class="col-lg-154" id="IFYES_RESULTS" name="IFYES_RESULTS" >
                                <option value="_1"> </option>
                                <option>NEGATIVE</option>
								<option>POSITIVE</option>
                                <option>DO NOT KNOW</option> 
                                </select>
                                </div>   
          
        <div class="form-group">
                        <label>Acceptance date</label>
                        <input type="date" class="col-lg-154" value="<?php echo date('d-m-y'); ?>" id="ACCEPTANCEDATE" input name="ACCEPTANCEDATE" > 
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

<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>NTIHC | Tollfree</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="assets/admin_bootstrap/css/bootstrap1.css" />

    <link href="assets/admin_css/main.css" rel="stylesheet">
    <link href="assets/admin_css/font-style.css" rel="stylesheet">
    <link href="assets/admin_css/flexslider.css" rel="stylesheet">

     <link rel="stylesheet" href="assets/plugins/social-buttons/social-buttons.css" />

    <script type="text/javascript" src=" assets/js/jquery.js"></script>
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
    <link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
    <script src="assets/plugins/chosen/chosen.jquery.min.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->

<script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#PHONECONTACT").val(data[0]);
  $("#FIRSTNAME").val(data[1]);
  $("#LASTNAME").val(data[2]);
  $("#SEX").val(data[3]);
  $("#AGE").val(data[4]);
  $("#SCHOOLINGSTATUS option[value='"+data[5]+"']").attr('selected',true);
/*   $("#HIGHESTLEVELOFEDUCATION").val(data[5]);
  $("#MARITALSTATUS").val(data[6]);
  $("#EMPLOYMENTSTATUS").val(data[7]);
  $("#DISTRICT").val(data[8]);
  $("#DIVISION").val(data[9]);
  $("#PLACEOFRESIDENCE").val(data[10]);

  $("#MOTHERFIRSTNAME").val(data[12]);
  $("#MOTHERLASTNAME").val(data[13]);
  $("#FATHERFIRSTNAME").val(data[14]);
  $("#FATHERLASTNAME").val(data[15]);
  $("#HEAREDABOUTNTIHC").val(data[16]); */
}


function dome(){

  var pn = $("#PHONECONTACT").val();
  var fn = $("#FIRSTNAME").val();
  var ln = $("#LASTNAME").val();
  if (pn===''&&fn===''&&ln==='') {   $("#res").html("");  }

  else{
  var dataString = "pn="+pn+"&fn="+fn+"&ln="+ln;
  $.ajax({
  type: "POST",
  url: "tollSearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>

  </head>
  <body style="background-color:#f0f0f0;">

  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php" style="margin-left: 237px; color: #fffaf9; font-size: 22px;">
           NAGURU TEENAGE INFORMATION AND HEALTH CENTRE</a>
        </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
             <img src="assets/img/ntihclog2.png" width="40" height="50" style="margin-left: 211px; margin-top: -11px;">
              <li class="active"><a href="dashboard.php"><i class="icon-home icon-white"></i> System dashboard</a></li>
              <li><a href="tollfree_records.php"><i class="icon-th icon-white"></i> Local storage</a></li>
              <li><a href="logut.php"><i class="icon-lock icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container" style="height:auto;"/>

<form action="tollfree_process.php" method="POST">
<br />  <br />  <br />
<div class="col-lg-4">
 <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Date</label>
                    <div class="col-lg-8">
                        <input type="date"  name="DATECREATED" id="datepicker" value="<?php echo date('d-m-y'); ?>"class="form-control">
                    </div>
                </div>
                <!-- /.form-group --> 
<div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">Phone contact</label>
                    <div class="col-lg-8">
                        <input type="alphanumeric" onKeyUp="dome()" name="PHONECONTACT"  id="PHONECONTACT" maxlength="15"  required="required"
                        class="form-control"/>
                    </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                    <label class="control-label col-lg-4">First name </label>
                    <div class="col-lg-8">
                        <input type="text" onKeyUp="dome()" name="FIRSTNAME"  id="FIRSTNAME" required="required"
                       class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-label col-lg-4">Last name</label>
                    <div class="col-lg-8">
                        <input type="text" onKeyUp="dome()" name="LASTNAME"  id="LASTNAME" required="required"
                        class="form-control">
                    </div>
                </div>
                <br>
                <!-- /.form-group -->
                 

                <div class="form-group">
    <label class="control-label col-lg-4">Sex</label>
    <div class="col-lg-8">
        <select class="form-control" id="SEX" input name="SEX"  >
            <option value="_1"> </option>
                                <option>MALE</option>
								<option>FEMALE</option>
        </select>
    </div>
    </div>
    <!-- /.form-group -->

            <div class="form-group">
    <label class="control-label col-lg-4">Age</label>
    <div class="col-lg-8">
        <select class="form-control" id="AGE"  name="AGE" >
            <option value="_1"> </option>
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
        </select>
    </div>
    </div>
    <!-- /.form-group -->
     <div class="form-group">
    <label class="control-label col-lg-4">Schooling</label>
    <div class="col-lg-8">
        <select class="form-control" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS"  >
            <option value="_1"> </option>
                             <option value="IS">IS</option>
								<option value="OS">OS</option>
        </select>
    </div>
    </div>
     </div><!-- /.form-group -->
    
   <div class=" col-lg-5">
     <div class="form-group">
    <label class="control-label col-lg-4">Level of education</label>
    <div class="col-lg-8">
        <select class="form-control" id="HIGHESTLEVELOFEDUCATION"  name="HIGHESTLEVELOFEDUCATION"  >
              <option value="_1"> </option>
                                <option>PRIMARY</option>
								<option>SECONDARY</option>
                                <option>TERTIARY</option>
								<option>VOCATION</option>
                                 <option>UNIVERSITY</option>
								<option>NONE</option>
                 </select>
    </div>
    </div>
    <!-- /.form-group -->
    
     <div class="form-group">
    <label class="control-label col-lg-4">Marital status</label>
    <div class="col-lg-8">
        <select class="form-control" id="MARITALSTATUS" name="MARITALSTATUS" required="required">
            <option value="_1"> </option>
                                <option>MARRIED</option>
                                 <option>SINGLE</option>
                                <option>SEPARATED</option>
								<option>WIDOWED</option>
                                <option>DIVORCED</option>
								<option>NO RESPONSE</option>
            </select>
    </div>
    </div>
    <!-- /.form-group -->
    
     <div class="form-group">
    <label class="control-label col-lg-4">Employment status</label>
    <div class="col-lg-8">
        <select class="form-control" id="EMPLOYMENTSTATUS" name="EMPLOYMENTSTATUS" required="required">
            <option value="_1"> </option>
                                 <option>UNEMPLOYED</option>
								<option>TEMPORARY</option>
                                <option>PERMANENT</option>
        </select>
    </div>
    </div>  
 
 <div class="form-group">
    <label class="control-label col-lg-4">District</label>
    <div class="col-lg-8">
        <select class="form-control" id="DISTRICT" name="DISTRICT" >
            <option value="_1"> </option>
                                 <option>KAMPALA</option>
                                <option>ENTEBBE</option>
                                <option>MUKONO</option>
                                <option>WAKISO</option>
        </select>
    </div>
    </div>
    <!-- /.form-group -->

     <div class="form-group">
    <label class="control-label col-lg-4">Division</label>
    <div class="col-lg-8">
        <select class="form-control" id="DIVISION"   name="DIVISION" placeholder"(only Kampala)">
            <option value="_1"> </option>
                                <option>CENTRAL</option>
								<option>LUBAGA</option>
                                <option>NAKAWA</option>
                                <option>MAKINDYE</option>
                                <option>KAWEMPE</option>
        </select>
    </div>
    </div>
    <!-- /.form-group --> 
     

               <div class="form-group">
                    <label class="control-label col-lg-4">Residence</label>
                    <div class="col-lg-8">
                        <input type="text" name="PLACEOFRESIDENCE"  id="PLACEOFRESIDENCE" required="required" placeholder"Place" class="form-control">
                    </div>
                </div>

                            <!-- /.form-group -->

             <div class="form-group">
    <label class="control-label col-lg-4">Living with</label>
    <div class="col-lg-8">
        <select class="form-control" id="LIVINGWITH"  name="LIVINGWITH" required="required">
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
    </div>
    </div> 
    <!-- /.form-group -->
     </div>
    
    <div class=" col-lg-14"> 
    <div class="form-group">
                             <label>How did you hear about NTIHC</label>
                               <select class="form-control" id="HEAREDABOUTNTIHC" name="HEAREDABOUTNTIHC" required="required">
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
                                        </div>

           <div class="form-group">
                        <label>How did you know about this phone</label>
                        <select class="form-control" id="HOWDIDYOUKNOABOUTTHISNO" name="HOWDIDYOUKNOABOUTTHISNO" required="required">
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
                                        </div>

               <div class="form-group">
                        <label>Service provider's initial</label>
                        <input type="text" name="USERINITIAL"  id="USERINITIAL"   placeholder="Provider's initial" class="form-control" style="background-color:#f5f6f8;">
                    </div>
                    </div> 
          
    
   <div class="col-lg-15" > 
   <br>
   <p class="header" style="background-color:#fff; font-weight:bold; text-align:center; border-radius:9px; border:3px solid;">Process call details</p>

  
                  <!-- /.form-group -->
                    <div class="form-group">
                    <label>Description</label> 
                    <textarea id="text4" name="DESCRIPTION" class="form-control"></textarea> 
                     <!-- /.form-group --> 
                </div>
              


  <div class="col-lg-16">
        <p style="width: 318px;">
        <input type="button" onClick="addRow12('mytable')" value="Add Problem Category" class="btn btn-success">
        <input type="button" onClick="deleteRow12('mytable')" value="Remove" class="btn btn-danger">
        <input type="hidden" id="mytable_rows" name="mytable_rows" value="0">
        </p>
          <table class="table table-striped" id="mytable" style=" color:#000000; height:auto;">
                 <thead>
                    <tr>
                    <th>*</th>
                    <th>Problem</th>
                    <th> Category</th>
                    </tr>
                </thead>
          <tbody>

          </tbody>
         </table>
</div> 

<div class="col-lg-7">

 <div class="form-group">
    <label class="control-label col-lg-4">Action taken</label>
    <div class="col-lg-17">
        <select class="form-control" id="ACTIONTAKEN" input name="ACTIONTAKEN" required="required">
             <option value="COUNSEL">COUNSEL </option>
                                <option>REFER</option>
								<option>BOTH</option>
                 </select>
    </div>
    </div>
    <!-- /.form-group -->
 <div class="form-group">
                        <label>If referred; Specify referral centre</label>
                        <select class="form-control" id="RECOMMENDEDNEARESTHEALTHCENTRE" name="RECOMMENDEDNEARESTHEALTHCENTRE">
                                <option value="_1"> </option>
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

             <!-- /.form-group -->
             <div class="form-group">
                        <label>Specify service referred for</label>
                        <select class="form-control"  id="SPECIFYSERVICEREFERREDFOR" name="SPECIFYSERVICEREFERREDFOR">
                                <option value="_1"> </option>
                                <option> ABDOMINAL PAIN</option>
<option> ABNORMAL VAGINAL DISCHARGE</option>
<option> ANTE-NATAL CARE</option>
<option> C-C SCREENING-INITIAL</option>
<option> C-C VIA SUSPICIOUS FOR CANCER</option>
<option> CONSTIPATION</option>
<option> FAMILY PLANNING</option>
<option> GBV-EMERGENCY CONTRACEPTION</option>
<option> GBV-PEP</option>
<option> GBV-STI TREATMENT</option>
<option> GENITAL ITCHYING</option>
<option> GENITAL ULCER</option>
<option> HERPES SIMPLEX</option>
<option> HERPES ZOSTA</option>
<option> HIV/AIDS</option>
<option> INFERTILITY</option>
<option> ITCHING IN GENITAL</option>
<option> JOINT PAINS</option>
<option> LOWER ABDOMINAL PAIN</option>
<option> MALARIA</option>
<option> OTHERS</option>
<option> PAINFUL GENITALS</option>
<option> POST- ABORTION CARE</option>
<option> POST-NATAL CARE</option>
<option> PREGNANCY TESTING</option>
<option> SKIN PROBLEM</option>
<option> SORE THROAT</option>
<option> SWELLING IN GENITALS</option>
<option> SYPHILLIS</option>
<option> URETHRAL DISCHARGE</option>
<option> URINARY TRACT INFECTION</option>
<option> VAGINAL DISCHARGE</option>
</select>
                </div>

               <!-- /.form-group -->
             <div class="form-group">
                        <label>Reason for refer</label>
                        <input type="text" input name="REASONFORREFER"  id="REASONFORREFER"
                        class="form-control">
                 </div>
 
<input type="submit" class="btn btn-success"value="submit" style="border-radius:11px;">
<button type="reset" style="border-radius:11px;" class="btn btn-danger">Clear</button>

</div></div>
<div class="col-lg-18"> 
<div class="panel-body"> 
  <p  style="text-align:center; font-weight:bold;">Auto caller search</p>   
   <div id="res" style="border:3px solid;"> </div>
   </div></div>
   
   <div class="col-lg-18">
   <div class="panel-body"> 
   <div class="col-lg-3">
   <div class="panel-body" style=" height:auto; background-color:#fff; border-radius:11px;"> 
   <p style="text-align:left;">Counsel</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
            <?php
$link = mysqli_connect("localhost", "root", "", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date' AND ACTIONTAKEN ='COUNSEL'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
</p>
   </div>  </div> 
 
   <div class="col-lg-3" >
   <div class="panel-body" style="height:auto; background-color:#fff; border-radius:11px;">
    <p style="text-align:center;">Referred</p>
        <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
        <?php
$link = mysqli_connect("localhost", "root", "", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date' AND ACTIONTAKEN ='REFER'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
</p>
   </div></div>
   
   <div class="col-lg-3" >
   <div class="panel-body" style="height:auto; background-color:#fff; border-radius:11px;">
    <p style="text-align:center;">Both</p>
        <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
        <?php
$link = mysqli_connect("localhost", "root", "", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date' AND ACTIONTAKEN ='BOTH'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
   </p>
   </div></div>
   
   <div class="col-lg-3" >
   <div class="panel-body" style="height:auto; background-color:#fff; border-radius:11px;">
   <p style="text-align:center;">Total-calls</p>
        <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
        <?php
$link = mysqli_connect("localhost", "root", "", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
   </p>
   </div></div> 
   </div>
   
   
   <div class="col-lg-12">
   <div class="panel-body"> 
   <div class="col-lg-3">
   <div class="panel-body" style=" height:auto; background-color:#fff; border-radius:11px;"> 
   <p style="text-align:left;">Male</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
            <?php
$link = mysqli_connect("localhost", "root", "", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date' AND SEX ='MALE'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
</p>
   </div>  </div> 
 
   <div class="col-lg-3" >
   <div class="panel-body" style="height:auto; background-color:#fff; border-radius:11px;">
    <p style="text-align:center;">Female</p>
        <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
        <?php
$link = mysqli_connect("localhost", "root", "", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date' AND SEX ='FEMALE'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
</p>
   </div></div>
   
   <div class="col-lg-3" >
   <div class="panel-body" style="height:auto; background-color:#fff; border-radius:11px;">
    <p style="text-align:center;">In-school</p>
        <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
        <?php
$link = mysqli_connect("localhost", "root", "", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date' AND SCHOOLINGSTATUS ='OS'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
   </p>
   </div></div>
   
   <div class="col-lg-3" >
   <div class="panel-body" style="height:auto; background-color:#fff; border-radius:11px;">
   <p style="text-align:center;">Out-sch</p>
        <p style=" text-align:center; font-weight:bold; font-size:30px; margin-top:-13px;">
       <?php
$link = mysqli_connect("localhost", "root", "", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date' AND SCHOOLINGSTATUS ='IS'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
   </p>
   </div></div> 
    </div>
</form>
</div>
</div></div></div></div>
<br>
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p>Naguru Teenage Information and Health Centre - Admin dashboard - Copyright 2016</p>
                <p><img src="assets/img/ntihclog2.png" width="50" height="50"  style="margin-left: -671px;margin-top: -37px;">
      			</div>
      		</div><!-- /row -->
      	</div><!-- /container -->
  </div>

<script>

  function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var s1 = '<select name="p[]'+'"'+
              ' style= "margin-left:0px; font-size: 12px; background-color:#fff" >'+
                                         '<option value="-1"> </option>'+
                     '<option>AIDS SYMPTOMS</option>'+
						'<option> HIV STATUS</option>'+
						'<option>CURRENT HIV RISK</option>'+
						'<option>FEEL ILL</option>'+
						'<option>FURTHER STUDIES</option>'+
						'<option>ILL RELATIVE/PARTNER</option>'+
						'<option>LOST RELATIVE/PARTNER</option>'+
						'<option>NEW PARTNER</option>'+
						'<option>OTHERS</option>'+
						'<option>PAST HIV RISK</option>'+
						'<option>PREGNANCY</option>'+
						'<option>STD SYMPTOMS</option>'+
						'<option>TO GET MARRIED</option>'+
						'<option>TRAVEL ABROAD</option>'+
                        '<option>CAREER GUIDANCE</option>'+
						'<option>CULTURE</option>'+
						'<option>FOLLOW UP</option>'+
						'<option>GBV</option>'+
						'<option>HYGIENE</option>'+
						'<option>NUTRITION</option>'+
						'<option>OTHERS</option>'+
						'<option>R/SHIP WITH PARENTS</option>'+
						'<option>R/SHIP WITH PARTNER</option>'+
						'<option>R/SHIP WITH PEERS</option>'+
            '<option>ANGER</option>'+
						'<option>ANXIETY</option>'+
						'<option>DEFILEMENT</option>'+
						'<option>DEPRESSION</option>'+
						'<option>GBV-PSYCHOLOGICAL</option>'+
						'<option>GUILTY</option>'+
						'<option>HOSTILITY</option>'+
						'<option>RAPE</option>'+
						'<option>STRESS</option>'+
						'<option>TRAUMA</option>'+
            '<option>HIV/AIDS</option>'+
						'<option>SEXUAL ABUSE</option>'+
						'<option>SEXUAL PROBLEMS</option>'+
						'<option>STDS-SEXUAL HEALTH</option>'+
            '<option>ABNORMAL VAGINAL DISCHARGE</option>'+
						'<option>GENITAL ULCER</option>'+
						'<option>GROWTHS IN GENITALS</option>'+
						'<option>HERPES SIMPLEX</option>'+
						'<option>HERPES ZOSTA</option>'+
						'<option>HIV/AIDS</option>'+
						'<option>ITCHING IN GENITAL</option>'+
						'<option>PAINFUL GENITALS</option>'+
						'<option>SWELLING IN GENITALS</option>'+
						'<option>SYPHILLIS</option>'+
						'<option>URETHRAL DISCHARGE</option>'+
						'<option>VAGINAL DISCHARGE</option>'+
                        '<option>ACNE</option>'+
						'<option>BODY ODOUR</option>'+
						'<option>BREAST CHANGES</option>'+
						'<option>MENSTRUAL RELATED PROBLEMS</option>'+
						'<option>MENSTRUATION</option>'+
						'<option>ABNORMAL VAGINAL DISCHARGE</option>'+
						'<option>SIZE OF SEX ORGANS</option>'+
						'<option>VIRGINITY</option>'+
						'<option>WET DREAMS</option>'+
						'</select>';

     var select  =  '<select required="required"  name="c[]'+'"'+
                    'style= "margin-left: 0px; font-size: 12px; background-color:#fff;" >'+
             		    '<option value="-1"> </option>'+
						'<option>GENERAL </option>'+
             			    '<option>PREGNANCY</option>'+
             				'<option>STDS</option>'+
							'<option>HIV AIDS</option>'+
                            '<option>BODY CHANGES</option>'+
             				'<option>SEXUAL HEALTH</option>'+

                    '</select>';
     var row1= '<td><input type="checkbox"></td>'+
               '<td>'+select+' </td>'+
               '<td>'+s1+'</td>';

      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows').value=rowCount;

  }

  function deleteRow12(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
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


</body></html>

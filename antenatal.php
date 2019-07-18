 <?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}
 ?> 
 

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
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
    <title>Ntihc | imms</title>

    <meta name="description" content="  ">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less"> 
    <script src="assets/js/prescriptionscript.js"></script>
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">

    <style>
    .form-control{padding: 0px 0px;}
             h9 {
                 border-bottom: 2px solid #f39c12;
                 color:#FF0000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid #000;
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

  </head>

 <!--PAGE CONTENT --> 
        <div id="content"> 
                    <div class="inner bg-light lter5" style="height:auto;">
                    <div class="text-left">  
    <div class="col-lg-12" style="">
        
            <header> 
<div class="icons"><i class="icon-th"></i></div> 
                <div class="toolbar">
                    <ul class="nav pull-right">
                        <li><a href="#"></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th-large"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"></a></li> 
                            </ul>
                        </li>
                        <li>
                            <a href="#div-5" data-toggle="collapse" class="accordion-toggle minimize-box">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="top">
                    <!-- .navbar -->
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
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                             </a>     </div>


                                        <a data-placement="bottom" data-original-title="Messages"
                                        href="<button class="btn btn-warning" data-toggle="modal" data-target="#ntihcmessager" "
                                       class="btn btn-default btn-sm">
                                        <i class=" "></i>
                                        <span class="label label-danger" style="color: #fff;height: 18px;">4</span>
                                        </a>

                                <div class="btn-group">
                                    <a href="logut.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                        <span class="glyphicon glyphicon-comment"></span>
                                                          </a>      </div>
                            </div>

                            <div class="collapse navbar-collapse navbar-ex1-collapse" >

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                     <li class="active"><a href="client_management.php" style="background-color:#518dc1;border: 2px solid #f4f4f4;padding: 10.5px; 
									 text-align:left;color:#fff;">DASHBOARD</a></li>
                                      <li><a href="antenatal.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;">
									  <i class="icon-lock icon-white"></i>HOME</a></li>
                                     
                                         <li><a href="updatecmgt/index.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; 
										 text-align:left;"><i class="icon-lock icon-white"></i>IN / REFERRALS</a></li>
										   <li> <span class="glyphicon glyphicon-user" style="padding: 10.5px; color: #000000; text-align:left;"> WELCOME: <?php echo $nameofuser; ?></span> </li>  
                                       
                                 <li> <span class="glyphicon glyphicon-user" style="padding: 10.5px; color: #000000; text-align:left;"> DEPT OF: &nbsp<?php echo $dept; ?></span> </li>  
                                     
										 
                                    </div>

                                  </a></li>
                                </ul>
                                <!-- /.nav -->
                            </div>
            </header>
            <div id="div-5" class="accordion-body collapse in body">
   <hr style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> </hr>
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"></hr> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> </hr>

                   <h1 class="page-header" style="text-align:center; border-radius:0px; border-style:none;">NTIHC-ANTENATAL SERVICES</h1>


                            <div class="row">

<form class="form-horizontal" action="antenatal_process.php" method="post" style="height:auto;">

  <div class="col-sm-12">
 <div class="col-sm-2" style="height:auto;">
  <div class="panel-body" style="border:2px solid #000000; background-color:#ffffa6; border-radius:11px; ">
   <p style="text-align:center; font-weight:bold; font-size:14px; color:#000000;margin-top: -11px;">Due for medical services</p>
   <p style=" text-align:center; font-weight:bold; font-size:50px; font-family:lcd;margin-top: -16px;">
     <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>

   </p>
   </div>
  <br>

   <div class="panel-body" style="border:2px solid #000000; background-color:#fb455f; border-radius:11px; ">
   <p style="text-align:center; font-weight:bold; font-size:14px; color:#000000;margin-top: -11px;">Due for other services</p>
   <p style=" text-align:center; font-weight:bold; font-size:50px; font-family:lcd;margin-top: -16px;">
     <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='OTHER SERVICES' AND INSVCSTATUS ='NO'ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>

   </p>
   </div>
  <br>

   <div class="panel-body" style="border:2px solid #000000; background-color:#74c274; border-radius:11px;">
   <p style="text-align:center; font-weight:bold; font-size:14px; color:#000000;margin-top: -11px;">Due for counselling services</p>
   <p style=" text-align:center; font-weight:bold; font-size:50px; font-family:lcd;margin-top: -16px;">
     <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
   </p>
   </div>

  <br>
   <div class="panel-body" style="border:2px solid #000000; background-color:#fb455f; border-radius:11px;">
   <p style="text-align:center; font-weight:bold; font-size:14px; color:#000000;margin-top: -11px;">Internal referrals for urgent attention</p>
   <p style=" text-align:center; font-weight:bold; font-size:50px; font-family:lcd;margin-top: -16px;">
      <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='REFERRED'ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>

   </p>
   </div>

   <br>
   <div class="panel-body" style="border:2px solid #000000; background-color:#74c274; border-radius:11px;">
   <p style="text-align:center; font-weight:bold; font-size:14px; color:#000000;margin-top: -11px;">Completed lab orders </p>
   <p style=" text-align:center; font-weight:bold; font-size:50px; font-family:lcd;margin-top: -16px;">
      <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, NTIHCNO FROM laboratory WHERE TIMESTAMP >='$date' AND TESTSTATUS ='COMPLETED' AND REQUESTINGUNIT ='TREATMENT ROOM' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>

   </p>
   </div>

 </div>
 <div class="col-sm-14">
  <div class="panel-body" style=" height:auto; ">
       <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">NTIHC No.</label>
                    <div class="col-sm-8">
              <input type="text" name="NTIHCNO" onKeyUp="searchpro()" id="NTIHCNO"class="form-control" required="required" readonly >
              <input type="hidden" id="RID" name="RID">
                    </div>
                </div>
                </div>

              <div class="col-sm-6">
              <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Vist Date</label>
                    <div class="col-sm-8">
                     <input type="date" input name="DATECREATED"  id="DATECREATED" value="<?php echo date('Y-m-d'); ?>" class="form-control" >
                </div>
                </div>
                </div>
               <div class="col-sm-12">
                 <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:#000000;">Antenatal #1</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body" style="  background-color: trasparent;">
                                     <div class="col-sm-6">
                                        <br>
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">ANC vist</label>
                     <div class="col-sm-8">
                <input type="number" name="ANCVIST"  id="ANCVIST" class="form-control">
              </div>
              </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Parity</label>
                     <div class="col-sm-8">
                <input type="number" input name="PARITY"  id="PARITY" class="form-control">
              </div>
              </div>

               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">ANC1 timing</label>
                     <div class="col-sm-8">
                <select class="form-control" id="ANC1_TIMING" input name="ANC1_TIMING" required="required" >
                <option value="_1"> </option>
                <option>YES</option>
                <option>NO</option>
                </select>
              </div>
</div>

              <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Weight(kg)</label>
                     <div class="col-sm-8">
                <input type="numeric" input name="WEIGHT"  id="WEIGHT" class="form-control" >
              </div></div>

                     <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">INR_No</label>
                     <div class="col-sm-8">
                 <input type="numeric" input name="INR_NO"  id="INR_NO" class="form-control" required="required">
              </div></div>


                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">eMTCT codes(W)</label>
                     <div class="col-sm-8">
                <select class="form-control" id="e_MTCTCODES_W" input name="e_MTCTCODES" required="required" >
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
              </div>
              </div>

              <div class="col-sm-6" style="border:2px solid #000; border-radius:11px;">
        <br>
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Gravida</label>
                     <div class="col-sm-8">
                <select class="form-control" id="GRAVIDA" input name="GRAVIDA" required="required" >
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
              </div>  </div>

             <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Gestation </label>
                     <div class="col-sm-8">
                <input type="number" class="form-control" id="GESTATIONALAGE" input name="GESTATIONALAGE" placeholder="Age(weeks)"
                required="required" >
              </div>  </div>

               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date of delivery</label>
                     <div class="col-sm-8">
                <input type="date" input name="EXPECTEDDATEOFDELIVERY" id="datepicker" placeholder="expected">
              </div> </div>

              <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">MU_AC</label>
                     <div class="col-sm-8">
              <div class="input-group">
                <input type="number"  name="MU_AC"  id="MU_AC" class="form-control" required="required" style="text-align:center;">
              </div></div>
              </div>

              <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">BP</label>
                     <div class="col-sm-8">
                <input type="text"  name="BLOODPRESSURE"  id="BLOODPRESSURE" class="form-control" required="required" olaceholder="Blood pressure">
              </div></div>

               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">eMTCT(P)</label>
                     <div class="col-sm-8">
                <select class="form-control" id="e_MTCTCODES_P" input name="e_MTCTCODES_P" required="required" >
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
              </div>
              </div>
              </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#000000;">Antenatal  #2 </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body" style="  background-color: #f4f4f4;">


                      <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">MOTHER DIAGNOSIS</label>
                    <div class="col-sm-8">
                <textarea id="wysihtml5" name="MOTHERDIAGNOSIS" class="form-control" rows="2" cols="90" style="text-align:center;"></textarea>
              </div></div>

              <div class="col-sm-12">

		       <p> Who / Clinical stage / Viral load </p>
                <table id="dataTable1000"  border="1" style="width: 109%;  margin-left: -22px; background-color:#f0f0f0;">
                                <thead>
                                <th style="text-align:center;"> Who stage </th>
                                <th style="text-align:center;"> CD4 Count  </th>
                                <th style="text-align:center;"> Viral load  </th>
                                <th style="text-align:center;">  ARVs drugs   </th>
                               </thead>
                                <tbody>
           <tr>
        <th><input type="text" name="WHOSTAGE"  id="WHOSTAGE" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="CD4COUNT"  id="CD4COUNT"  style="width:100%; text-align:center;"></td>
        <td><input type="text" name="VIRALLOAD"  id="VIRALLOAD" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="ARVs_DRUGS"  id="ARVs_DRUGS" style="width:100%; text-align:center;"></td>
        </tr>

                            <thead>
                                <th>Pre-ART No. </th>
                                <th>IPT </th>
                                <th>CTX</th>
         </thead>
         <tbody>
           <tr>
        <td><input type="text" name="PRE_ATRNUMBER"  id="PRE_ATRNUMBER" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="IPT"  id="IPT"  style="width:100%; text-align:center;"></td>
        <td><input type="text" name="CTX"  id="CTX" style="width:100%; text-align:center;"></td>
     </tr>

                     				  </tr>
                               </tbody>
                               </table>
                           <!--  </form> -->

               </div>
                 </div></div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000000;">Antenatal  #3 (Other info) </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body" style="  background-color: #f4f4f4;">
                                        <div class="col-sm-12">

                                        <table id="dataTable1002"  border="1" style="width: 109%; margin-left: -22px; background-color:#f0f0f0;">
                                <thead>
                                <th style="text-align:center;"> Infant and young child feeding counselling  </th>
                                <th style="text-align:center;"> Maternal nutrition counselling (MNC)  </th>
                                <th style="text-align:center;"> TB status</th>
                                <th style="text-align:center;"> Haemoglobin  </th>
                               </thead>
                                <tbody>

        <th style="text-align:center; background-color:#fff;"><input type="radio" name="IYCF" id=">NO" value="NO" checked>
        <label for=">NO">No</label>
		<input name="IYCF" type="radio" id="YES" value="YES">
		<label for="YES">Yes</label> </td>

        <td style="text-align:center; background-color:#fff;"><input type="radio" name="MNC" id=">NO" value="NO" checked>
        <label for=">NO">No</label>
		<input name="MNC" type="radio" id="YES" value="YES">
		<label for="YES">Yes</label></td>

      <td style="text-align:center; background-color:#fff;"> <select  id="TBSTATUS" input name="TBSTATUS" required="required" >
                <option value="-1"> </option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                </select></td>

        <td style="text-align:center; background-color:#fff;"> <input type="alphanumeric" input name="HAEMOGLOBIN"  id="HAEMOGLOBIN" class="form-control"  style="width:100%; text-align:center;"></td>
        </tr>

                            <thead>
                                <th style="text-align:center;">(W) Syphilis test Results</th>
                                <th style="text-align:center;">(P) Syphilis test Results </th>
                                <th style="text-align:center;">Family planning counseling</th>
                                <th style="text-align:center;">TT </th>
         </thead>
         <tbody>
           <tr>
        <td><select class="form-control" id="SYPHILISTESTW" name="SYPHILISTESTW" style="width:100%; text-align:center;background-color:#fff;">
                <option value="-1"> </option>
                <option>+VE</option>
                <option>-VE</option>
                </select></td>

        <td style="text-align:center; background-color:#fff;"><select class="form-control" id="SYPHILISTESTP" input name="SYPHILISTESTP" style="width:100%; text-align:center;">
                <option value="-1"> </option>
                <option>+VE</option>
                <option>-VE</option>
                </select></td>

        <td style="text-align:center; background-color:#fff;"><select class="form-control" id="FAMILYPLANNINGMETHOD" input name="FAMILYPLANNINGMETHOD" style="width:100%; text-align:center;">
                <option value="-1"> </option>
                <option>YES</option>
                <option>NO</option>
                </select> </td>

         <td style="text-align:center; background-color:#fff;"><input type="alphanumeric" input name="TT"  id="TT" class="form-control" style="width:100%; text-align:center;"></td>
     </tr>


      </tr>

                            <thead>
                                <th style="text-align:center;">Free LLIN</th>
                                <th style="text-align:center;">Mebendazole </th>
                                <th style="text-align:center;">Iron</th>
                                <th style="text-align:center;">Folic acid </th>
         </thead>
         <tbody>
           <tr>
        <td><select class="form-control" id="FREE_LLIN" name="FREE_LLINS">
                <option value="-1"> </option>
                <option>YES</option>
                <option>NO</option>
                </select></td>

        <td style="text-align:center; background-color:#fff;"><input type="number" name="MEBENDAZOLE"  id="MEBENDAZOLE" class="form-control" style="width:100%; text-align:center;"> </td>

        <td style="text-align:center; background-color:#fff;"><input type="number" name="IRON"  id="IRON"> </td>

         <td style="text-align:center; background-color:#fff;"><input type="number" class="form-control" id="FOLICACID" name="FOLICACID" style="width:100%; text-align:center;"></td>
     </tr>

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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                            style="color:#000000;">Antenatal #4 Examination progress & Risk factors </a>
                                    </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body" style="  background-color: #f4f4f4;">
                      <div class="col-sm-12">

                                        <table id="dataTable1002"  border="1" style="width: 109%; margin-left: -22px; background-color:#f0f0f0;">
                                <thead>
                                <th style="text-align:center;"> Weeks of Amenorhoea </th>
                                <th style="text-align:center;"> Fundal Height  </th>
                                <th style="text-align:center;"> Presentation  </th>
                                <th style="text-align:center;"> Position lie   </th>
                               </thead>
                                <tbody>

        <th><input type="text" name="WEEKSOF_AMENORHOEA" id="WEEKSOF_AMENORHOEA" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="FUNDDALHEIGHT" id="FUNDDALHEIGHT"   style="width:100%; text-align:center;"></td>
        <td><input type="text" name="PRESENTATION" id="PRESENTATION" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="POSITIONLIE" id="POSITIONLIE"   style="width:100%; text-align:center;"></td>
        </tr>

                            <thead>
                                <th style="text-align:center;">Relation PP / Brim </th>
                                <th style="text-align:center;">Foetal Heart  </th>
                                <th style="text-align:center;">Varicose Oedema </th>
                                <th style="text-align:center;">Urine </th>
         </thead>
         <tbody>
           <tr>
        <td><input type="text" name="RELATIONPP_BRIM" id="RELATIONPP_BRIM" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="FOETALHEART" id="FOETALHEART"  style="width:100%; text-align:center;"></td>
        <td><input type="text" name="VARICOSE_OEDEMA" id="VARICOSE_OEDEMA" style="width:100%; text-align:center;"></td>
         <td><input type="text" name="URINE" id="URINE" style="width:100%; text-align:center;"></td>
     </tr>

                     				  </tr>
                               </tbody>
                               </table>
                </div> </div>
                 

                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
 
<div class="panel-body" style="margin-top: -45px;">
        <div class="col-sm-6">
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;  border-radius:11px;">
        Switch HCG status to actvate?.<span class="sr-only">60% Complete</span> 
	    </div>
	    </div>  </div>
        
        
        <div class="col-sm-6">
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;  border-radius:11px;">
        <span class="sr-only">60% Complete</span>
  	    <input type="radio" name="HCGSTATUS" id=">NO" value="NO" checked>
        <label for=">NO"> DEACTIVE</label>
		<input name="HCGSTATUS" type="radio" id="YES" value="YES">
		<label for="YES">ACTIVATE</label>
	    </div>
	    </div>  </div>

<div class="col-sm-6">
<div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;  border-radius:11px;">
		HCG Results?.<span class="sr-only">60% Complete</span>
		</div>
	    </div>
<div class="switch switch-blue" style="margin-left:0px; margin-top:-12px;">
					<input type="radio" class="switch-input" name="HCGRESULTS" value="NEGATIVE" id="NEGATIVE" checked="">
					<label for="NEGATIVE" class="switch-label switch-label-off"> -VE (N)</label>
					<input type="radio" class="switch-input" name="HCGRESULTS" value="POSITIVE" id="POSITIVE">
					<label for="POSITIVE" class="switch-label switch-label-on"> ++VE (P)</label>
					<span class="switch-selection"></span>
			   </div></div>

        <div class="col-sm-6">
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;  border-radius:11px;">
        Justify results:<span class="sr-only">60% Complete</span>
		<input name="HCGPOSITIVE" type="radio" id="WANTED" value="WANTED">
		<label for="WANTED">WANTED</label>
        <input name="HCGPOSITIVE" type="radio" id="UN WANTED" value="UN WANTED">
		<label for="UN WANTED">UN WANTED</label>
	    </div>  </div>   </div>
 
        </div>
    
        <div class="col-sm-12" >
        <div class="panel-body" style="margin-top: -34px;">  

     <p></p>
     <table class="table table-bordered" style="margin-left:0px; background-color:transparent; border:3px solid;">
         <thead>
         <th>User initial's</th>
         <th>User unit</th>
         </thead>
         <tbody>
      <tr>
        <td><input type="text" name="USERINITIAL"  id="USERINITIAL"  value="<?php echo $nameofuser; ?>" readonly style="width:100%; text-align:center;"></td>
        <td><input type="text" name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="ANTENATAL" readonly style="width:100%; text-align:center;"></td>
        </tr>
 </tr>
        </tr>
     </tbody>
  </table>

</div>
  </div>
    </div>



 <div class="col-sm-13" style="height:auto; text-align: left;"/>
                            <ul class="nav nav-pills">
                                <li class="active" style="font-weight:bold;"><a href="#home-pills" data-toggle="tab">Prescription </a>                                </li>
                              <li style="font-weight:bold;background-color: #ffffa6;border-radius: 5px;border: 1px solid;"><a href="#profile-pills" data-toggle="tab">Waiting</a>       </li>
                              <li style="font-weight:bold; border-radius: 5px;border: 1px solid;"><a href="#messages-pills" data-toggle="tab">In-service</a> </li>
                              <li style="font-weight:bold; border-radius: 5px;border: 1px solid;"><a href="#lab-pills" data-toggle="tab">Lab results</a>     </li>
                </ul>

                            <div class="tab-content" >
                            <div class="tab-pane fade in active" id="home-pills" />
                                <br>
                <div class="panel-body" style="background-color:#; border-radius:11px; border:2px solid #000000;">
                                <div class="col-sm-7" >
        <div class="progress progress-striped active" >
		<div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Switch on to activate lab order<span class="sr-only">60% Complete</span>
		</div>
        </div></div>
       <div class="col-sm-5" >
                <div class="switch" style="margin-top:1px;">
					<input type="radio" class="switch-input" name="TROOM_INITIATION" value="OFF" id="OFF" checked="">
					<label for="OFF" class="switch-label switch-label-off">Off</label>
					<input type="radio" class="switch-input" name="TROOM_INITIATION" value="ON" id="ON">
					<label for="ON" class="switch-label switch-label-on">On</label>
					<span class="switch-selection"></span>
				 </div>

              </div>

               <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Lab test</label>
                    <div class="col-sm-9">
                   <input type="numeric" class="form-control"   name="TESTDESCRIPTION"  id="TESTDESCRIPTION" data-placement="top"
                    placeholder="BD |Mps| Hb| HIV| Hep.B| Syp.| RBS| HCG| UA|"  style="font-size: 11px; "/>
                   </div>
                </div>
                </div>
                <br>

               <div class="panel-body"  style="border-radius: 11px; border: 2px solid #000;">
               <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
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
                               <th><label for="FREQUENCY" class="label">QTY</label>        </th>
                               <th><label for="TIMES" class="label">TIMES</label>         </th>
                               <th><label for="PERIOD" class="label">PERIOD</label>       </th>
                               <th> <label for="QTYPRESCRIBED" class="label">TOTAL</label>  </th>
                               </tr>
                             </thead>

                              <tbody >
                              </tbody>
                      </table>
                      <br>

                     <div class="col-sm-6">
            <label>Is medical follow-up required?</label>
                    <div class="switch switch-blue" style="margin-left: 0px; margin-top: 0px;">
					<input type="radio" class="switch-input" name="FOLLOWUP" value="NOT" id="NOT" checked="">
					<label for="NOT" class="switch-label switch-label-off">No</label>
					<input type="radio" class="switch-input" name="FOLLOWUP" value="REQUIRED" id="REQUIRED">
					<label for="REQUIRED" class="switch-label switch-label-on">Required</label>
					<span class="switch-selection"></span>
				</div>
               </div>

                <div class="col-sm-6">
        <label>If required? schedule a date</label>

        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	   <input type="text" input name="FOLLOWUPDATE"  id="datepicker" class="form-control" >
        </div> </div>
        </div></div>

         <br>
         <div class="panel-body"  style="border-radius: 11px; border: 2px solid #000;">
        <div class="col-sm-6">
        <label>Action taken</label>
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	   <select class="form-control" id="ACTIONTAKEN" input name="ACTIONTAKEN" >
        <option> TREATED </option>
                                                    <option> REFERRED </option>
                                                    <option> TREATED AND REFERRED </option>
                              	                    </select>
        </div>
        </div> </div>

        <div class="col-sm-6" >
        <label>Activate referral</label>

        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	    <input type="radio" name="REFTUNER" id=">SWITCHED OFF" value="SWITCHED OFF" checked>
        <label for=">SWITCHED OFFS">OFF</label>
		<input name="REFTUNER" type="radio" id="TURN ON" value="TURN ON">
		<label for="TURN ON">SWITCH ON</label>
	    </div>
        </div> </div>

        <div class="col-sm-12" >
		<label>Medical referral</label>
        <div class="progress progress-striped active" >
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
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
                                 <option value="NSAMBYA HOSPITAL">NSAMBYA HOSPITAL</option>
                                 <option value="REACHOUT MBUYA">REACHOUT MBUYA</option>
                                 <option value="TASO">TASO</option>
                                 <option value="POLICE">POLICE</option>
                      	         </select>
              </div>
              </div>

		<label>Service referred for</label>

        <div class="progress progress-striped active" >
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                <select class="form-control" id="SERVICEREFERREDFOR" input name="SERVICEREFERREDFOR">
                        <option value="-1"> </option>
                        <option value="ART, SUPPORT & CARE">ART, SUPPORT & CARE</option>
                        <option value="FURTHER MANAGEMENT">FURTHER MANAGEMENT</option>
					</select>
                     </div>
                     </div>
                     </div> </div>
           <br>
           <div class="clear"></div>
           <center> <input type="submit" name="button" id="button" value="Save " style= " font-size:15px; font-weight:bold; border-radius:11px; background-color:#000000; color:#ffffff; height:30px;"/> </center>
             <div class="clear"></div>
             </form>
              <!--  </form> -->


                                </div>

                                <div class="tab-pane fade" id="profile-pills">
                                 <div class=""  id="inpregnancy" >
                                 </div>


                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center;">


                                </div></div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Lab</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

 <div class="row">
                     <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:left;"> </h1>
                </div>
            </div>
        <div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-th"></i></div>
                <div class="toolbar">
                    <ul class="nav pull-right">
                        <li><a href="#"></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th-large"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#div-5" data-toggle="collapse" class="accordion-toggle minimize-box">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                            </div>
            </header>
            <div id="div-5" class="accordion-body collapse in body">


               <div class="col-sm-12" >
 <br>
</div>

            </div>
        </div>
    </div>
</div>
           </div></div>
                        </div>
                    </div>
                </div> </div>
                    </div>

         <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; Naguru Teenage Information asnd Health Centre</p>
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
			    <!-- END PAGE LEVEL SCRIPTS -->


          <script>
          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'inpregnancy.php ',
                       success : function(data){
                                $('#inpregnancy').html(data);
                                 }
               });
               }, 2000);
          </script>

<script>

  function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var s1 = '<select  name="p_'+rowCount+'" id="p_'+rowCount+'" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; background-color:#fff" >'+
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
						'+<option>LAP</option>'+
						'+<option>HEADACHE</option>'+
						'+<option>UTI</option>'+
						'+<option>SORETHROAT</option>'+
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
                    'style= "margin-left: 0px;margin-top: 5px;height:20px; background-color:#fff;" >'+
             		    '<option value="-1"> </option>'+
                    '<option>GENERAL</option>'+
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
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:200px; background-color:#fff" >'+ ttt+
                                            '</Select>';


	 var fq = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="fq_'+rowCount+'" id="fq_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:35px; background-color:#fff;" />';


	 var tm = '<select  onchange="dostg(this.id)" name="tm_'+rowCount+'" id="tm_'+rowCount+'" required="required" '+
	           'style= "margin-left: 0px;margin-top: 5px;height:20px; width:45px; background-color:#fff;" />'+
                                        '<option>1</option>'+
                                        '<option>2</option>'+
                                        '<option>3</option>'+
										'<option>4</option>'+
                                        '</select>';

	 var pd = '<input type="numeric"  onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pd_'+rowCount+'" id="pd_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:45px; background-color:#fff;" />';



	 var qty = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qty_'+rowCount+'" id="qty_'+rowCount+'" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:46px; background-color:#fff;" />';


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

 <!-- LINE FLAT MOVER -->
    <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/js/line_chart.js"></script>
    <!-- END LINE FLAT MOVER PAGE LEVEL SCRIPTS -->

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
<script>
function postclient(vd){

  var dta = vd.split(",");
  $("#NTIHCNO").val(dta[0]);
  $("#RID").val(dta[1]);
}

</script>

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

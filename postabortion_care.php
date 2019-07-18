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
    <title>ntihc</title>

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

         
                    <!-- /#left -->
                     <!--PAGE CONTENT --> 
        <div id="content">
            <div class="outer">
                    <div class="inner bg-light lter5" style="height:auto;">
                    <div class="text-left"> 
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
                                     <li class="active"><a href="dashboard.php" style="background-color:#518dc1;border: 2px solid #f4f4f4;padding: 10.5px; text-align:left;color:#fff;">Dashboard</a></li>
                                      <li><a href="treatmentroom.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i>Home</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;">
                                        Quick links<b class="caret"></b>  </a>
                                        <ul class="dropdown-menu">
                                    
                                        </ul>
                                    </li>
                                         <li><a href="updatecmgt/index.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i>Internal referrals</a></li>
                                    </div>
 
                                  </a></li>
                                </ul>
                                <!-- /.nav -->
                            </div>   
            </header>
            <div id="div-5" class="accordion-body collapse in body"> 


                   <h1 class="page-header" style="text-align:center; background-color:#f0f0f0; border-radius:11px;">NTIHC-POST ABORTION CARE</h1>
                        

                            <div class="row">
                            
<form class="form-horizontal" action="postabortioncare_process.php" method="post" style="height:auto;">

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
   <p style="text-align:center; font-weight:bold; font-size:14px; color:#000000;margin-top: -11px;">Due for pregnancy related services</p>
   <p style=" text-align:center; font-weight:bold; font-size:50px; font-family:lcd;margin-top: -16px;">
     <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO'ORDER BY NTIHCNO")) {

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
  <div class="panel-body" style=" height:auto;">  
       <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">NTIHC No.</label>
                    <div class="col-sm-8">
              <input type="text" name="NTIHCNO" onKeyUp="searchpro()" id="NTIHCNO"class="form-control" required="required" readonly >
              <input type="hidden" id="VISTBY" name="VISTBY" value="MOTHER"> 
                    </div>
                </div> 
                </div>
                
              <div class="col-sm-6">
              <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Vist Date</label>
                    <div class="col-sm-8">
                     <input type="date"   name="CREATEDDATE"  id="CREATEDDATE" value="<?php echo date('Y-m-d'); ?>" class="form-control" >
                     <input type="hidden" id="RID" name="RID"> 
                </div> 
                </div> 
                </div> 
     
    
      <div class="panel-body" style="margin-left: -23px; margin-top: -92px;">
                            <div class="panel-group" id="accordion">
                             <div class="row">
                <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:#000000;">Post abortion care</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body" style="background-color:#f4f4f4">  
                                     
                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Type of abortion</label>
                    <div class="col-sm-8">
                     <select  class="form-control"  id="ABORTIONTYPE"  name="ABORTIONTYPE">
                <option value="-1"> </option>
                <option>SPONSTANEOUS</option>
                <option>INDUCED</option>
                </select>
                </div> </div>
                <br>

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Reason for abortion</label>
                    <div class="col-sm-8">
                   <textarea id="wysihtml5" name="REASONFORABORTION" class="form-control" rows="1"></textarea> 
                
                </div> </div>
                 
           <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Complait</label>
                    <div class="col-sm-8">
               <textarea id="wysihtml5" name="RESULTANTEFFECT" class="form-control" rows="1"></textarea>
               </div>
               </div>

               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Remarks</label>
                    <div class="col-sm-8">
               <textarea id="wysihtml5" name="REMARKS" class="form-control" rows="1"></textarea>
               </div>
               </div>

                <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">Is follow up required?
  	    <input type="radio" name="FOLLOWUPPOSTABORTION" id=">NO" value="NO" checked>
        <label for=">NO">NO</label>
		<input type="radio" name="FOLLOWUPPOSTABORTION" id="YES" value="YES">
		<label for="YES">YES</label>
	    </div>  </div>

               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Follow up date</label>
                    <div class="col-sm-8">
                <input type="date" name="FOLLOWUPPOSTABORTIONDATE"  id="datepicker" class="form-control" >
                </div> </div>
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
                                        <div class="panel-body" style="background-color:#eee;">

              <div class="col-sm-12">
        <div class="col-sm-6">
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;">
        Activate famaily planning if required? <span class="sr-only">60% Complete</span>
	    </div>  </div>   </div>

        <div class="col-sm-6">
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;">
        <span class="sr-only">60% Complete</span>
		<input type="radio" name="FPSWITCH"  id="FP DEACTIVE" value="FP DEACTIVE" checked>
		<label for="FP DEACTIVE">DEACTIVATED</label>
        <input type="radio"  name="FPSWITCH" id="TURNED ON" value="FP ACTIVE">
		<label for="FP ACTIVE">ACTIVATE</label>
	    </div>  </div>   </div>
        </div>

        <div class="col-sm-8">

              <table id="dataTable1002"  border="1" style="width: 109%; margin-left: -22px; background-color:#f0f0f0;">

                            <thead>
                                <th style="text-align:center;">Parity</th>
                                <th style="text-align:center;">Number of iving children </th>


         </thead>
         <tbody>
           <tr>
        <td><input type="text" name="PARITY"  id="PARITY" style="width:100%; text-align:center;background-color:#fff;"> </td>

        <td><input type="text" name="LIVINGCHILDREN"  id="LIVINGCHILDREN" style="width:100%; text-align:center;"> </td>

                 </tr>
 
                                <th style="text-align:center;">LNMP</th>
                                <th style="text-align:center;">Vist details </th>

          </thead>
          <tbody>
          <tr>
          <td> <input type="date"  name="LNMP"  id="LNMP" style="width:100%; text-align:center;"> </td>

          <td ><select class="form-control" id="FAMILYPLANNINGVIST" name="FAMILYPLANNINGVIST"  style="width:100%; text-align:center;">
         <option value=""> </option>
                 <option value="FIRST VIST">FIRST VIST</option>
                 <option value="RE VIST">RE VIST</option>
                </select></td>

        </tr>
        </tr>

                             <thead>
                                <th style="text-align:center;">Family planning-method</th>
                                <th style="text-align:center;">Specify if pills given </th>


         </thead>
         <tbody>
         <tr>
         <td ><select class="form-control" id="FAMILYPLANNINGMETHOD" name="FAMILYPLANNINGMETHOD"  style="width:100%; text-align:center;">
          <option value="-1"> </option>
                 <option>IMPLANON</option>
                 <option>JADELA</option>
                 <option>PILLS</option>
                 <option>CONDOMS</option>
                 <option>DEPO PROVERA</option>
                 <option>IUD</option>
                 <option>NORISTERAT</option>
                 <option>NORIGYNON</option>
                 </select></td>

         <td><select class="form-control" id="PILLDESCRIPTION" name="PILLDESCRIPTION" style="width:100%; text-align:center;">
                 <option value="NOT APPLICABLE">N/A </option>
                 <option>OVULLETS</option>
                 <option>SOFT SURE</option>
                 <option>LOFEMINAL</option>
                 <option>MICROGYNON</option>
                </select></td>

          </tr>
                             <thead>
                                <th style="text-align:center;">Quantity</th>
                                <th style="text-align:center;">Appointment date </th>
         </thead>
         <tbody>
         <tr>

          <td style="text-align:center; background-color:#fff;"><input type="number" name="QUANTITY"  id="QUANTITY" style="width:100%; text-align:center;"> </td>

          <td style="text-align:center; background-color:#fff;"><input type="date" name="APPOINTMENTDATE"  id="datepicker"> </td>

          </tr>
                             <thead>
                                <th style="text-align:center;">Followup</th>
                                <th style="text-align:center;">Date returned</th>
         </thead>
         <tbody>
         <tr>

         <td style="text-align:center; background-color:#fff;"><input type="radio" name="FPFOLLOWUP" id=">NO" value="NO" checked>
         <label for=">NO">NO</label>
		<input type="radio"  name="FPFOLLOWUP" id="YES" value="YES">
		<label for="YES">YES</label> </td>
    <td><input type="date" class="form-control" name="DATERETURNED"  id="datepicker" value="<?php echo date('Y-m-d'); ?>"   style="width:100%; text-align:center;"> </td>

        </tr>
                     		  </tr>
                               </tbody>
                                </table>
                           <!--  </form> -->
                            </div>
                            <div class="col-sm-4">

                            <div class="form-group">
             <label for="text1" class="control-label col-sm-5">HCT Code</label>
             <div class="col-sm-7">
                <select class="form-control" name="HCTCODE"  id="HCTCODE" style="text-align:center;">
                <option value="_1"> </option>
                <option>TR</option>
                <option>TRK</option>
                <option>TRR</option>
                <option>TRRK</option>
                <option>TRRT</option>
                <option>TRR_tick</option>
                <option>TRR+</option>
                </select>

              </div> </div>
              <p></p>
          <textarea id="wysihtml5" name="FPCOMPLAINT" id="FPCOMPLAINT" class="form-control" rows="9" cols="90" placeholder="EDIT CLIENT COMPLAIT" style="text-align:center;"></textarea>                  </div>


                               </div>
                               </div>
                               </div>      
     <div class="panel panel-default">
                               <div class="panel-heading">
                               <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000000;">#3 HCT (HIV counselling)</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body" style="background-color:#EEE;">


                 <div class="col-sm-12">
        <div class="col-sm-6">
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;">
        Turn on HCT if required <span class="sr-only">60% Complete</span>
	    </div>  </div>   </div>

        <div class="col-sm-6">
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;  border-radius:11px;">
        <span class="sr-only">60% Complete</span>
		<input type="radio" name="HCTURGENCY"  id="NOT CRITICAL" value="NOT CRITICAL" checked>
		<label for="NOT CRITICAL">TURNED OFF</label>
        <input type="radio" name="HCTURGENCY" id="HCT WANTED" value="HCT WANTED">
		<label for="HCT WANTED">TURN ON</label>
	    </div>  </div>   </div>
        </div>

       <table class="table table-bordered" style=" background-color:#EEE; height:auto; border:2px solid #ddd; border-radius:11px;">
         <thead>
         <th> </th>
         <th> </th>
         </thead>
      <tbody>
      <tr>
      <th>Pre-Test Counselling done / information given</th>
      <td>              <select class="form-control " id="PRE_TESTCOUSELLING_GIVEN"  name="PRE_TESTCOUSELLING_GIVEN"  style="width:100%; text-align:center;">
                        <option value="YES">YES</option>
                                <option>NO</option>
                                </select>
                                </td>

           </tr>
         <tr>
         <th>Counselled as</th>
        <td> <select class="form-control" id="COUNSELLED_AS"  name="COUNSELLED_AS"  style="width:100%; text-align:center;">
                        <option value="INDIVIDUAL">INDIVIDUAL</option>
                                <option>COUPLE</option>
                                <option>GROUP</option>
                </select>
                </td>
       </tr>

         <tr>
         <th>HCT Entry Point</th>
        <td>   <select class="form-control" id="HCT_ENTRYPOINT"  name="HCT_ENTRYPOINT" style="width:100%; text-align:left;">
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
                                </td>
     </tr>

     <tr>
         <th>Have you ever Tested for HIV before?</th>
        <td>
        <input type="radio" name="EVERTESTEDBEFORE" id="FIRSTTEST" value="FIRSTTEST" checked>
        <label for="FIRSTTEST">1st test</label>
		<input type="radio" name="EVERTESTEDBEFORE"  id="RETESTANT" value="RETESTANT" >
		<label for="RETESTANT">Retestant</label>
                                </td>

     </tr>
    <tr>

         <th>How many times have you tested in the last 12 months</th>
        <td><input type="number" class="form-control" id="NUMBEROFTESTS"  name="NUMBEROFTESTS" style="width:100%; text-align:center;"> </td>
  </tr>
    <tr>

    <th>Number of sexual partners in the last 12 months</th>
        <td><input type="number" class="form-control" id="NUMBEROFSEXUALPARTNERS"  name="NUMBEROFSEXUALPARTNERS" style="width:100%; text-align:center;">
         </td>

     </tr>
    <th>What was the test results last time you Tested?</th>
        <td> <select class="form-control" id="LAST_TESTRESULTS"  name="LAST_TESTRESULTS" style="width:100%; text-align:center;">
                                <option value="_1"> </option>
                                <option>NEGATIVE</option>
								<option>POSITIVE</option>
                                </select>
                                </td>
     </tr>

     <th>Has your Partner / Spouse been tested for HIV before?</th>
        <td>   <select class="form-control" id="SPOUSE_PARTNERTESTED_BEFORE" name="SPOUSE_PARTNERTESTED_BEFORE" style="width:100%; text-align:center;">
                                <option value="_1"> </option>
                                <option>NO</option>
								<option>YES</option>
                                <option>DO NOT KNOW</option>
                                </select>
                                </td>
     </tr>

        <th>If yes what were the results?</th>
        <td> <select class="form-control" id="IFYES_RESULTS" name="IFYES_RESULTS" style="width:100%; text-align:center;">
                                <option value="_1"> </option>
                                <option>NEGATIVE</option>
								<option>POSITIVE</option>
                                <option>DO NOT KNOW</option>
                                </select>
                                </td>
          </tr>
     </tbody>
     </table>

     
</div>
                               </div>
                               </div>      
     <div class="panel panel-default">
                               <div class="panel-heading">
                               <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:#000000;">#4 HCG</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body" style="background-color:#EEE;">

                 
     <div class="panel-body" style="margin-top: -15px;">
        <div class="col-sm-6">
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;">
        Switch HCG status to actvate?.<span class="sr-only">60% Complete</span>
	    </div>
	    </div>  </div>


        <div class="col-sm-6">
        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  border-radius:11px;">
        <span class="sr-only">60% Complete</span>
  	    <input type="radio" name="HCGSTATUS" id=">NO" value="NO" checked>
        <label for=">NO"> DEACTIVE</label>
		<input type="radio" name="HCGSTATUS" id="YES" value="YES">
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
		<input type="radio"name="HCGPOSITIVE"  id="WANTED" value="WANTED">
		<label for="WANTED">WANTED</label>
        <input type="radio" name="HCGPOSITIVE"  id="UN WANTED" value="UN WANTED">
		<label for="UN WANTED">UN WANTED</label>
	    </div>  </div>   </div>

        </div> 
        
                               </div>
                                    </div>
                                </div>
                            </div>
                      
                 
              
            <BR> 
                             
                 
     <BR><BR>  s
     <table class="table table-bordered" style="margin-left:15px; background-color: #fff; width:95%;">
         <thead>
         <th>User initial's</th>
         <th>User unit</th>
         </thead>
         <tbody>
      <tr>
        <td><input type="text" name="USERINITIAL"  id="USERINITIAL" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="POST NATAL CARE" readonly style="width:100%; text-align:center;"></td>
        </tr>
 </tr>
        </tr>
     </tbody>
  </table>

</div>
  </div>
    </div></div></div>
 


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
                    <label for="pass1" class="control-label col-sm-3">Specify Lab test</label>
                    <div class="col-sm-9">
                   <input type="numeric" class="form-control"   name="TESTDESCRIPTION"  id="TESTDESCRIPTION" data-placement="top" 
                    placeholder="BD |Mps| Hb| HIV| Hep.B| Syp.| RBS| HCG| UA|" style="font-size: 11px; "/>
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
        <label>Switch on" to activate referral</label>

        <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
  	    <input type="radio" name="REFTUNER" id=">SWITCHED OFF" value="SWITCHED OFF" checked>
        <label for=">SWITCHED OFFS">Switched off</label>
		<input name="REFTUNER" type="radio" id="TURN ON" value="TURN ON">
		<label for="TURN ON">Switch on</label>
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
                                 <option value="NSAMBYA">NSAMBYA</option>
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
           </div></div>
                        </div>
                    </div></div>
                </div> </div>
                    </div>

         <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information asnd Health Centre</p>
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
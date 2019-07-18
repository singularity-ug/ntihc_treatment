<?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
$rm         = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
$rm = $_SESSION['MREPEAT']; 
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}
 ?>
 

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ntihc</title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href=" assets/lib/bootstrap/css/bootstrap_ws.css">
    <link rel="stylesheet" href="  assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href=" assets/css/main.css">
    <link rel="stylesheet" href="  assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href=" assets/lib/animate.css/animate.css"> 
        <!-- PAGE LEVEL STYLES -->
<link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href=" assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href=" assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href=" assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href=" assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href=" assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href=" assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href=" assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href=" assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href=" assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
        <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
         <style>
    .form-control{padding: 0px 0px;}
             h9 {
                 border-bottom: 1px solid #ccc;
                 color:#FF0000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 1px solid #ccc;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 12px;
             	color:#000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
             background:#fff;
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


    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="assets/libs/less.js/2.7.1/less.js"></script>
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
                                    <a href="index.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                        <span class="glyphicon glyphicon-comment"></span>                                    </a>                              
                                          </div>
                            </div>

                            <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color:#000000;">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="dashboard.php">Dashboard</a></li>
                                    
 
                               <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" style="color: #FFFFFFF;border: 2px solid #000; background-color:#D70000; text-align:left; padding:10.3px;">
                                         Other links<b class="caret"></b>  </a>                                       </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">.</a></li>
                                        </ul>
                                    </li>

</div>

                                      </a></li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                  </nav>
                    <!-- /.navbar -->
                                  <!-- /.navbar -->
                                    <!-- /.main-search -->
                                <!-- /.search-bar -->
                            <div class="main-bar" style="">
                                <h3 style="text-align:center; color:#FFFFFF;">
             <img src="assets/img/ntihclog2.png" width="30" height="30" style="margin-left:-3px;">
             NAGURU TEENAGE INFORMATION AND HEALTH CENTRE   </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                    </div>

                    </div>
                    <!-- /#left -->
                    <div id="content">
                    <div class="outer" style="background-color:#d70000;">
                    <div class="inner bg-light lter6" style="height:auto; background-color:#d70000;">
                    <div class="text-center">

</div>

     <div class="col-lg-12">
     <br>
     <div class="col-sm-3" >
     <div class="panel-body" style=" border-radius:11px; height:300px; background-color:#000;">

     <div class="dash-unit">
     <h4 style="color:#fff; text-align:center;">Client Management</h4>
				<div class="thumbnail">
	<a href="client_management.php"><img src="database icons/clients.jpg" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->
				<br>


                </div>


     </div>
     </div>
     <div class="col-sm-3">
     <div class="panel-body" style=" border-radius:11px; height:300px; background-color:#000;">
     <h4 style="color:#fff; text-align:center;">Toll free</h4>
				<div class="thumbnail">
	 <a href="tollfree.php"><img src="database icons/toll-free.png" width="130" height="70" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->

     <div class="col-sm-3" style=" border-radius:11px; height:auto; background-color:#000; border:2px solid;">
                 <p style="text-align:left; color: #fff; font-size:11px; margin-left:-10px;">Counselled</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #fff;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date' AND ACTIONTAKEN ='COUNSEL'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
</p>
                </div>
                 <div class="col-sm-3" style=" border-radius:11px; height:auto; background-color:#000; border:2px solid;">
                 <p style="text-align:center; color: #fff; font-size:11px; margin-left:-10px;">Referred</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #fff;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbtollfree");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT CID, ACTIONTAKEN FROM tollfree WHERE TIMESTAMP >='$date' AND ACTIONTAKEN ='REFER'")) {

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
                 <div class="col-sm-3" style=" border-radius:11px; height:auto; background-color:#000; border:2px solid;">
                 <p style="text-align:center; color: #fff; font-size:11px; margin-left:-10px;">Both</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #fff;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbtollfree");

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
                </div>
 <div class="col-sm-3" style=" border-radius:11px; height:auto; background-color:#000; border:2px solid;">
                 <p style="text-align:center; color: #fff; font-size:11px; margin-left:-10px;">Total</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #fff;">
                   <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbtollfree");

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
                </div>

     </div>
     </div>

      <div class="col-sm-3" >
     <div class="panel-body" style=" border-radius:11px; height:300px; background-color:#000;">
      <div class="dash-unit">
     <h4 style="color:#fff; text-align:center;">Administration</h4>
				<div class="thumbnail">
	<a href="admin/admin_dashboard.php"><img src="database icons/admin2.jpg" width="140" height="200" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->
				<br>


                </div>


     </div>
     </div>

     <div class="col-sm-3">
     <div class="panel-body" style=" border-radius:11px; height:108px; background-color:#000;">

     <h4 style="color:#fff; text-align:center;">Server uptime</h4>
		      		<div class="clockcenter" style="text-align: center; font-size: 37px;">

<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();  
         document.getElementById('txt').innerHTML =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script>
 
 <onLoad="startTime()">

<div id="txt"></div>  

     </div> </div>
     <br> <p></p>
     <div class="panel-body" style=" border-radius:11px; height:168px; background-color:#000;">
     
		      		<div class="col-sm-12">
				<center><canvas id="canvas" width="250" height="150">
			</canvas></center></div>


     </div>
     </div>

     </div>

     <div class="col-lg-12">
     <br>
     <br>
     <div class="col-sm-3" >
     <div class="panel-body" style=" border-radius:11px; height:300px; background-color:#000;">
     <div class="dash-unit">
      <h4 style="color:#fff; text-align:center;">Supported health centers</h4>
				<div class="thumbnail">
	<a href="support_reporting.php"><img src="database icons/Medical-54-512.png" width="140" height="200" alt="" class="img-circle"> 
				</div><!-- /thumbnail -->
				<br>
 

                </div>


     </div>
     </div>
     <div class="col-sm-3">
     <div class="panel-body" style=" border-radius:11px; height:300px; background-color:#000;">
      <div class="dash-unit">
      <h4 style="color:#fff; text-align:center;">System admin</h4>
				<div class="thumbnail">
	<a href="dashboard.php"> <img src="database icons/systemadmin0.jpg" width="140" height="100" alt="" class="img-circle">
				</div><!-- /thumbnail -->
				<br>
               <center> <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#newReg " 
style="color: #000000;border: 2px solid #000; text-align:center;"> </button> <i class="icon-lock icon-white"></i>Post a message</a></li> <center> 
                </div>
     </div>
     </div>

      <div class="col-sm-3" >
     <div class="panel-body" style=" border-radius:11px; height:300px; background-color:#000;">
     <div class="dash-unit">
     <h4 style="color:#fff; text-align:center;">Reports module</h4>
				<div class="thumbnail">
	<a href="admin/service_delivery/medical_rpt_monthly.php"><img src="database icons/report-3-xxl.png" width="140" height="200" alt="" class="img-circle">
				</div><!-- /thumbnail -->
				<br>


                </div>
     </div>
     </div>

     <div class="col-sm-3">
     <div class="panel-body" style=" border-radius:11px; height:138px; background-color:#000;">

     <h4 style="color:#fff; text-align:center;"></h4>
		      		<div class="clockcenter" style="text-align: center; font-size: 37px;"> 
			        <digiclock ></digiclock> </div>

     </div>
     <br> <p></p>
     <div class="panel-body" style=" border-radius:11px; height:138px; background-color:#000;">
     <div class="col-sm-4">
     <h4 style="color:#fff; text-align:center;"></h4>
     </div>
		    <div class="col-sm-7">
			 


     </div>
     </div>
     </div>

     </div>

     <div class="col-lg-12">
     <br>

    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> <br> <br>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="DATECREATED" name="DATECREATED"  value="<?php echo date('d-m-y'); ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">ID No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="IDNUMBER" name="IDNUMBER" data-placement="top" style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Applicant</label>
                    <div class="col-sm-8">
                        <input type="text" id="APPLICANTNAME" name="APPLICANTNAME" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                        <select class="form-control"  name="DEPARTRMENT" data-placement="top" style="font-size: 11px; text-align:center;"/>
                                <option value="1"> </option>
                <option value="ADVOCACY AND RESEARCH">A & R</option>
                <option value="FINANCE AND ADMINISTRATION">F & A</option>
                <option value="SERVICE DELIVERY">S D</option>
                </select>
                    </div>
                </div>
                <!-- /.form-group -->
                </div>
                 <div class="col-sm-12">
                <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">

  <table class="table table-striped" id="mytable1">
    <thead>
      <tr>
      <th>*</th>
   <th>DESCRIPTION FOR WHICH CASH IS REQUIRED</th>
   <th>CURRENCY</th>
   <th>AMOUNT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  </div>
                   <script>
  function addRow16(tableId){
     var  s1a = '<input type="text" name="description" id="description_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width: 265px;">';

	 var  s2b =  '<select name="currency" required="required"  id="currency_'+rowCount+'"'+
                'style= " margin-left:-5px; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="debit" id="debit_'+rowCount+'"  required="required" '+
                'style= " margin-left:-5px; background-color:#fff;" >';


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;

  }

  function deleteRow16(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="description_"+x;
          table.rows[x].cells[2].childNodes[0].id="currency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="debit_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}

  </script>

         <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Total sum</label>
                    <div class="col-sm-8">
                        <input type="text" id="TOTALSUM" name="TOTALSUM" class="form-control" style="text-transform:uppercase;font-size: 12px; font-weight:bold; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Amount in words</label>
                    <div class="col-sm-8">
                        <input type="text" id="AMOUNTINWORDS" name="AMOUNTINWORDS" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
              </div>
           <br>
            <div class="col-sm-12">  <br>
            <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>
            </div>

            <div class="col-sm-6">
            <br>
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Authorised by</label>
                    <div class="col-sm-8">
                        <input type="text" id="AUTHORISEDBY" name="AUTHORISEDBY" placeholder"Signature"  class="form-control" readonly
                        style="text-transform:uppercase;font-size: 11px; border:0px;"/>
                        <p style="font-weight:bold">DEPARTMENTAL HEAD </p>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="AUTHORISEDDATE" name="AUTHORISEDDATE" data-placement="top" readonly style="text-transform:uppercase;font-size: 11px; text-align:center; border:0px;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-6">
               <br>
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Approved by</label>
                    <div class="col-sm-8">
                        <input type="text" id="APPROVEDBY" name="APPROVEDBY" placeholder"Signature"  class="form-control" readonly
                        style="text-transform:uppercase;font-size: 11px; border:0px;"/>
                        <p style="font-weight:bold">FINANCE & ADMIN MANAGER </p>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="APPROVEDDATE" name="APPROVEDDATE" data-placement="top" readonly style="text-transform:uppercase;font-size: 11px; text-align:center; border:0px;"/>
                </div>
                <!-- /.form-group -->
                </div></div>



           <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic voucher, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                        <div class="col-lg-12">
                        <div class="modal fade" id="buttonedModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #ffffc6;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"  style="text-align:center;"id="H1">  </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> <br> <br>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> CASH PAYMENT VOUCHER </legend> </center>
            <form class="form-horizontal" action="pettycash_process.php" method="POST" style="height:auto;"> 
                <div class="col-sm-4">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="DATECREATED" name="DATECREATED"  value="<?php echo date('d-m-y'); ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">ID No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="IDNUMBER" name="IDNUMBER" data-placement="top" style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-8">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-3">Programme</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  id="PROGRAMME" name="PROGRAMME" style="text-transform:uppercase;font-size: 11px;"/>
                       
                </select>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Code name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  name="BUDGETLINE" data-placement="top" style="font-size: 11px;"/>
                               
                </select>
                    </div>
                </div>
                <!-- /.form-group -->
                </div>
                 <div class="col-sm-12">
                <input type="button" onClick="addRow17('mytable2')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable2')" value="(Delete)" />
     <input type="hidden" id="mytable_rows2" value="0">

  <table class="table table-striped" id="mytable2">
    <thead>
      <tr>
      <th>*</th>
   <th>DETAILS OF PAYMENT</th>
   <th>CURRENCY</th>
   <th>AMOUNT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  </div>
                   <script>
  function addRow17(tableId){
     var  s1a = '<input type="text" name="description" id="description_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width: 265px;">';

	 var  s2b =  '<select name="currency" required="required"  id="currency_'+rowCount+'"'+
                'style= " margin-left:-5px; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="debit" id="debit_'+rowCount+'"  required="required" '+
                'style= " margin-left:-5px; background-color:#fff;" >';


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows2').value=rowCount;

  }

  function deleteRow17(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="description_"+x;
          table.rows[x].cells[2].childNodes[0].id="currency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="debit_"+x;
          }
           document.getElementById('mytable_rows2').value=rowCount-1;
}

  </script>

         <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Total sum</label>
                    <div class="col-sm-8">
                        <input type="text" id="TOTALSUM" name="TOTALSUM" class="form-control" style="text-transform:uppercase;font-size: 12px; font-weight:bold; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Amount in words</label>
                    <div class="col-sm-8">
                        <input type="text" id="AMOUNTINWORDS" name="AMOUNTINWORDS" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
              </div>
           <br>

            <div class="col-sm-12">
            <br>

            <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         </thead>
      <tbody>
      <tr>
       <th>Requested by</th>
        <td><input type="text" name="APPLICANTNAME" id="APPLICANTNAME"   style="width:100%; text-align:center;"></td>
        <th>Department</th>
        <td><input type="text" name="DEPARTRMENT_pcr" id="DEPARTRMENT_pcr"   style="width:100%; text-align:center;"></td>
        </tr>
     </tbody>
  </table>
  </div>

  <div class="col-sm-12">  <br>
            <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>


  <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         <th>Signatory</th>
         <th>Date</th>
         </thead>
    <tbody>
      <tr>
         <tr>
         <th>Approved by</th>
        <td><input type="text" name="APPROVEDBY" id="APPROVEDBY"  readonly  style="width:100%; text-align:left;"></td>
        <td><input type="date" name="APPROVEDDATE" id="APPROVEDDATE"  readonly="readonly" placeholder="dd /mm/ yyyy"  style="width:100%; text-align:center;"></td>
     </tr>
    <tr>

    <tr>
        <th>Recieved by</th>
        <td><input type="text"  class="form-control" name="RECIEVEDBY"id="RECIEVEDBY"  readonly  style="width:100%; text-align:left;">
                                </td>
        <td><input type="date" class="form-control" id="RECIEVEDDATE" name="RECIEVEDDATE" readonly placeholder="dd /mm/ yyyy" style="width:100%; text-align:center;">

                                </td>
     </tr>
        </tr>
     </tbody>
  </table>

                </div>

        <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic voucher, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                   <div class="col-lg-12">
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#ffffca;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2"> </h4>
                                        </div>
                                        <div class="modal-body">

                                           <form role="form">
                                        <div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:17px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:15px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:15px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> <br> <br>

          <center> <legend style="color:#000; font-weight:bold;font-size:15px;">STAFF TIMESHEET </legend> </center>

            <form class="form-horizontal" style="height:auto;">


                <div class="col-sm-21">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Employee's name</label>
                    <div class="col-sm-8">
                        <input type="text" id="EMPLOYEENAME" name="EMPLOYEENAME"    class="form-control">
                    </div>
                 </div>
               </div>
                <!-- /.form-group -->

                <div class="col-sm-20">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">ID number</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="IDNUMBER" name="IDNUMBER" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div>
               </div>
               <!-- /.form-group -->

               <div class="col-sm-20">
               <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Position</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="EMPLOYEEPOSITION" name="EMPLOYEEPOSITION" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div>
                </div> </div>
                <!-- /.form-group -->


                <div class="col-sm-12">
                <br>

               <div class="col-sm-21">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Supervisor's name</label>
                    <div class="col-sm-8">
                 <input type="text"class="form-control"  id="SUPERVISOR" name="SUPERVISOR"  style="text-transform:uppercase;font-size: 11px;"/>

                    </div>
                </div>
                <!-- /.form-group --></div>
                <div class="col-sm-20">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Position</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"  name="SUPERVISORPOSITION" id="SUPERVISORPOSITION"  style="font-size: 11px; "/>
                    </div>
                 </div>
                </div>
                <!-- /.form-group -->

               <div class="col-sm-20">
               </div>

            <div class="col-sm-12">
            <br>
            <div class="col-sm-6">
            <table class="table table-bordered" style="margin-left: -13px; background-color: #fff;">
         <thead>
         <th> </th>
         </thead>
      <tbody>
      <tr>
       <th>Month</th>
        <td><input type="text" name="FISCALMONTH" id="FISCALMONTH"  style="width:100%; text-align:center;"></td>

         <th>Year</th>
        <td><input type="text" name="FISCALYEAR" id="FISCALYEAR"  style="width:100%; text-align:center;"></td>

        </tr>
     </tbody>
  </table>
  </div>

  <div class="col-sm-6">
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         </thead>
      <tbody>
      <tr>
      <th>Department</th>
        <td><select class="form-control" name="DEPARTMENT"id="DEPARTMENT" style="width:100%; text-align:center;">
                                <option value="N/A"> </option>
                                <option>FINANCE AND ADMINISTRATION</option>
                                <option>ADVOCACY AND RESEARCH</option>
                                <option>SERVICE DELIVERY</option>
                                </select>
        </td>

        </tr>
     </tbody>
  </table>
  </div></div>

  <div class="col-lg-12">
   <br>
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> Add hours worked</p>
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff;">
         <thead>
         <th> </th>
         <th>16 </th>
         <th>17</th>
         <th>18</th>
         <th>19 </th>
         <th>20</th>
         <th>21</th>
         <th>22 </th>
         <th>23</th>
         <th>24</th>
         <th>25 </th>
         <th>26</th>
         <th>27</th>
         <th>28 </th>
         <th>29</th>
         <th>30</th>
         <th>31 </th>
         <th>1</th>
         <th>2</th>
         <th>3</th>
         <th>4 </th>
         <th>5</th>
         <th>6</th>
         <th>7 </th>
         <th>8</th>
         <th>9</th>
         <th>10 </th>
         <th>11</th>
         <th>12</th>
         <th>13 </th>
         <th>14</th>
         <th>15</th>
         <th>Total</th>
         <th>%</th>
         </thead>
      <tbody>
      <tr>
        <th>Add</th>
        <td><input type="alphanumeric" class="form-control" name="D16" id="D16" value="0" style="width:100%; text-align:center;">
                                </td>

       <td><input type="alphanumeric" class="form-control" name="D17" id="D17" value="0" style="width:100%; text-align:center;">
                                </td>
       <td><input type="alphanumeric" class="form-control" name="D18" id="D18" value="0" style="width:100%; text-align:center;">
                                </td>
         <td><input type="alphanumeric" class="form-control" name="D19" id="D19" value="0" style="width:100%; text-align:center;">
                                </td>

      <td><input type="alphanumeric" class="form-control" name="D20" id="D20" value="0" style="width:100%; text-align:center;">
                                </td>

      <td><input type="alphanumeric" class="form-control" name="D21" id="D21" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D22" id="D22" value="0" style="width:100%; text-align:center;">
                                </td>
        <td><input type="alphanumeric" class="form-control" name="D23" id="D23" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D24" id="D24" value="0" style="width:100%; text-align:center;">
                                </td>

          <td><input type="alphanumeric" class="form-control" name="D25" id="D25" value="0" style="width:100%; text-align:center;">
                                </td>

          <td><input type="alphanumeric" class="form-control" name="D26" id="D26" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D27" id="D27" value="0" style="width:100%; text-align:center;">
                                </td>

           <td><input type="alphanumeric" class="form-control" name="D28" id="D28" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D29" id="D29" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D30" id="D30" value="0" style="width:100%; text-align:center;">
                                </td>

       <td><input type="alphanumeric" class="form-control" name="D31" id="D31" value="0" style="width:100%; text-align:center;">
                                </td>

       <td><input type="alphanumeric" class="form-control" name="D1" id="D1" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D2" id="D2" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D3" id="D3" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D4" id="D4" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D5" id="D5" value="0" style="width:100%; text-align:center;">
                                </td>

          <td><input type="alphanumeric" class="form-control" name="D6" id="D6" value="0" style="width:100%; text-align:center;">
                                </td>

          <td><input type="alphanumeric" class="form-control" name="D7" id="D7" value="0" style="width:100%; text-align:center;">
                                </td>

         <td><input type="alphanumeric" class="form-control" name="D8" id="D8" value="0" style="width:100%; text-align:center;">
                                </td>


         <td><input type="alphanumeric" class="form-control" name="D9" id="D9" value="0" style="width:100%; text-align:center;">
                                </td>


         <td><input type="alphanumeric" class="form-control" name="D10" id="D10" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D11" id="D11" value="0" style="width:100%; text-align:center;">
                                </td>

        <td><input type="alphanumeric" class="form-control" name="D12" id="D12" value="0" style="width:100%; text-align:center;">
                                </td>

     <td><input type="alphanumeric" class="form-control" name="D13" id="D13" value="0" style="width:100%; text-align:center;">
                                </td>

     <td><input type="alphanumeric" class="form-control" name="D14" id="D14" value="0"  style="width:100%; text-align:center;">
                                </td>

     <td><input type="alphanumeric" class="form-control" name="D15" id="D15" value="0" style="width:100%; text-align:center;">

                                </td>

     <td><input type="text" name="TOTALDAYS" id="TOTALDAYS"  style="width:100%; text-align:center;"></td>
     <td><input type="text" name="PERCENTAGEDAYS" id="PERCENTAGEDAYS"  style="width:100%; text-align:center;"></td>
     </tr>
     </tbody>
  </table>
   </div>

   <br>
  <div class="col-lg-4">
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> Summary of days not worked</p>
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff;">
         <thead>
         <th>Description </th>
         <th>Symbol</th>
         <th>Total</th>
         </thead>
      <tbody>
      <tr>
        <th>Public holiday</th>
        <td style="text-align:center;">PH</td>
        <td><input type="text" name="PH" id="PH"  readonly style="width:100%; text-align:center; background-color:#eee;"></td>
    </tr>
    <tr>
    <tr>

        <th>Saturday and Sunday</th>
        <td style="text-align:center;"> W</td>
        <td><input type="text" name="WEEKEND" id="WEEKEND" readonly style="width:100%; text-align:center;background-color:#eee; "></td>

        </tr>
    <tr>
    <tr>

        <th>Not worked</th>
        <td style="text-align:center;"> 0</td>
        <td><input type="numeric" name="NW" id="NW" readonly style="width:100%; text-align:center; background-color:#eee;"></td>

        </tr>
     </tbody>
  </table>
   </div>

 <div class="col-lg-4">
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> Summary of leave days</p>
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff;">
         <thead>
         <th>Description </th>
         <th>Symbol</th>
         <th>Total</th>
         </thead>
      <tbody>
      <tr>
        <th>General Administration</th>
        <td style="text-align:center;">GA</td>
        <td><input type="text" name="GA" id="GA"  readonly style="width:100%; text-align:center; background-color:#eee;"></td>
    </tr>
    <tr>
    <tr>

        <th>Staff Development</th>
        <td style="text-align:center;"> SD</td>
        <td><input type="text" name="SD" id="SD" readonly style="width:100%; text-align:center;background-color:#eee; "></td>

        </tr>
    <tr>
    <tr>

        <th>Sick Leave</th>
        <td style="text-align:center;"> SL</td>
        <td><input type="numeric" name="SL" id="SL" readonly style="width:100%; text-align:center; background-color:#eee;"></td>

        </tr>
     </tbody>
  </table>
   </div>

  <div class="col-lg-4">
  <p style="font-weight:bold; text-align:left; text-transform:uppercase;">  Others</p>
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff;">
         <thead>
         <th>Description </th>
         <th>Symbol</th>
         <th>Total</th>
         </thead>
      <tbody>
      <tr>
        <th>Annual Leave</th>
        <td style="text-align:center;">AL</td>
        <td><input type="text" name="AL" id="AL"  readonly style="width:100%; text-align:center; background-color:#eee;"></td>
    </tr>
    <tr>
    <tr>

        <th>Maternity leave</th>
        <td style="text-align:center;"> ML</td>
        <td><input type="text" name="ML" id="ML" readonly style="width:100%; text-align:center;background-color:#eee; "></td>

        </tr>
     </tbody>
  </table>
   </div>

   <div class="col-lg-4">
  <p style="font-weight:bold; text-align:center; text-transform:uppercase;"> Month attendence results</p>
  <p style="font-weight:bold; text-align:left; text-transform:uppercase; border:1px solid #eee; height:129px;">

  </p>

  </div>


   <div class="col-lg-12">
   <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>

  <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         <th>Comment</th>
         <th>Signatory</th>
         <th>Date</th>
         </thead>
    <tbody>
      <tr>
         <tr>
         <th>Supervisor</th>
         <td><input type="text" name="APPROVERCOMMENT" id="APPROVERCOMMENT"  readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="text" name="APPROVEDBY" id="APPROVEDBY"  readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="date" name="APPROVEDDATE" id="APPROVEDDATE"  readonly="readonly" placeholder="dd /mm/ yyyy"  style="width:100%; text-align:center;background-color:#eee;"></td>
     </tr>
    <tr>

    <tr>
        <th>Administrator</th>
        <td><input type="text" name="ADMINCOMMENT" id="ADMINCOMMENT"  readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="text"  class="form-control" name="RECIEVEDBY"id="RECIEVEDBY"  readonly  style="width:100%; text-align:left;background-color:#eee;">
                                </td>
        <td><input type="date" class="form-control" id="RECIEVEDDATE" name="RECIEVEDDATE" readonly placeholder="dd /mm/ yyyy" style="width:100%; text-align:center; background-color:#eee;">

                                </td>
     </tr>
        </tr>
     </tbody>
  </table>

                </div>

        <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic staff timesheet, Signatory fields are auto generated in the official processing by the approver and the administrator. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div>


                                        </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3"> </h4>
                                        </div>
                                        <div class="modal-body">


                                           <form role="form">

                                          <div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> <br> <br>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> LEAVE / ABSENCE APPLICATION FORM </legend> </center>



            <P style="text-align:left;">This form should be completed for all types of leave / absences and should submitted for approval before the leave/absence is taken. Staff are requested to fill in the relevant sections of this form according to the type of leave/absence to be taken </P>

               <P style="text-align:left; font-weight:bold;"> (1). APPLICANT DETAILS</P>

                <form class="form-horizontal" style="height:auto;">

                <div class="col-sm-4">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="DATECREATED" name="DATECREATED"  value="<?php echo date('d-m-y'); ?>"  class="form-control"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">ID No.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="IDNUMBER" name="IDNUMBER" data-placement="top" required="required"                         style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


                <div class="col-sm-8">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-3">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  id="EMPLOYEENAME" name="EMPLOYEENAME"  required="required"
                        style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Title</label>
                    <div class="col-sm-9">
                   <input type="text" class="form-control"   name="POSITION" id="POSITION" data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;"/>
                   </div>
                </div>
                <!-- /.form-group -->
                </div> </div>

              <div class="col-sm-12">
              <br> <br>
               <P style="text-align:left; font-weight:bold;"> (2). TYPE OF LEAVE (Tick appropriately)</P>
               <div class="form-group">
                <div class="col-sm-4">
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="ANNUAL LEAVE" checked>
                                 Annual leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="SICK LEAVE">
                                 Sick leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="MATERNITY LEAVE">
                                   Maternity leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="PATERNITY LEAVE" >
                                   Paternity leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="STUDY LEAVE">
                                   Study leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                            <!-- /.checkbox -->
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="LEAVETYPE" value="COMPASSIONATE LEAVE" >
                                    Compassionate leave
                                </label>
                            </div>
                            <!-- /.checkbox -->
                        </div>
                    </div>
                    <!-- /.row -->


                    <div class="col-sm-8">
                    <P style="text-align:left; font-weight:bold;"> (3). LEAVE DURATION</P>

                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">Commencement date</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control"   name="COMMENCEMENTDATE" id="COMMENCEMENTDATE" placeholder="dd /mm/ yyyy" data-placement="top" required="required"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div></div>
                <!-- /.form-group -->

                    <div class="col-sm-8">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">End date</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control"   name="ENDDATE" id="ENDDATE" required="required" data-placement="top" placeholder="dd /mm/ yyyy"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->

                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Total number of days to be spent on leave.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="REQUIREDLEAVEDAYS" id="REQUIREDLEAVEDAYS" required="required" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div> </div>
                <!-- /.form-group -->

                    <div class="col-sm-8">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Days entitled to in a year.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="DAYS_ENTITLEDINYEAR" id="DAYS_ENTITLEDINYEAR" value="22" data-placement="top" readonly
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group --></div>

                    <div class="col-sm-8">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Total entitled days before taking on this leave.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="DAYSBEFORE_LEAVE" id="DAYSBEFORE_LEAVE"   required="required" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group --> </div>

                  <div class="col-sm-8">
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Total days to be taken according to this application.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="DAYSTOBE_TAKEN" id="DAYSTOBE_TAKEN" required="required" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-8">*Balance due.</label>
                    <div class="col-sm-4">
                    <input type="numeric" class="form-control"   name="BALANCEDUE" id="BALANCEDUE"  data-placement="top" readonly
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
                     </div>
               </div>

            <div class="col-sm-12">
            <br>
            <p style="text-align:left; font-weight:bold;">(4).ABSENCE REQUEST  (To be filled if an employee is requesting for hour(s) off) </p>

            <div class="col-sm-4">
            <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Absence date</label>
                    <div class="col-sm-8">
                    <input type="numeric" class="form-control"   name="ABSENCEDATE" id="ABSENCEDATE"  placeholder="dd /mm /yyyy" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div> </div>
                <!-- /.form-group -->

             <div class="col-sm-4">
             <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Request duration</label>
                    <div class="col-sm-8">
                    <input type="numeric" class="form-control"   name="REQUESTDURATION" id="REQUESTDURATION"  placeholder="hours" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
             </div>

              <div class="col-sm-4">
            <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Hours worked</label>
                    <div class="col-sm-8">
                    <input type="numeric" class="form-control"   name="HOURSWORKED" id="HOURSWORKED"  placeholder="Total" data-placement="top"
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
            </div> </div>

            <br>
            <div class="col-sm-12">
            <br> <br>
            <div class="col-sm-4">
            <label>Reason for absence </label>
                    <div class="switch switch-blue">
                    <input type="radio" class="switch-input" name="REASONFORABSENCE" value="NONE" id="NONE" checked="">
					<label for="NONE" class="switch-label switch-label-off"></label>
					<input type="radio" class="switch-input" name="REASONFORABSENCE" value="SICK" id="SICK">
					<label for="SICK" class="switch-label switch-label-off">Sick</label>
					<input type="radio" class="switch-input" name="REASONFORABSENCE" value="BEREAVEMENT" id="BEREAVEMENT">
					<label for="BEREAVEMENT" class="switch-label switch-label-off">Bereavement</label>
					<span class="switch-selection"></span>
			</div>	</div>

              <div class="col-sm-8">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Others (Specify)</label>
                    <div class="col-sm-9">
                    <input type="numeric" class="form-control"   name="OTHER_REASON" id="OTHER_REASON"  placeholder="hours" data-placement="top"
                    style="font-size: 11px; text-align:left;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
              </div>
            </div>

  <div class="col-sm-12">
  <br> <br>

  <p style="text-align:left; font-weight:bold;">(5).SUGGESTED SUBSTITUTE(S) </p>

  <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>Department</th>
         <th>Substitute's Name</th>
         <th>Supervisor's Authorization</th>
         <th>Departmental Head's approval</th>
         </thead>
    <tbody>
      <tr>
         <tr>
         <th><select class="form-control" name="DEPARTMENT"id="DEPARTMENT" required="required" style="width:100%; text-align:center;">
                                <option value="1"> </option>
                                <option>S D</option>
                                <option>A & R</option>
                                <option>F & A</option>
                                </select>
                                </th>
        <td><input type="text" name="SUBSTITUTENAME" id="SUBSTITUTENAME"   style="width:100%; text-align:left;">
           <input type="text" name="" id="" placeholder="Signature" readonly style="width:100%; text-align:center;background-color:#eee;">
        </td>

        <td><input type="text" name="AUTHORISEDBY" id="AUTHORISEDBY" readonly  style="width:100%; text-align:left; background-color:#eee;">
           <input type="text" name="" id="" placeholder="Signature" readonly style="width:100%; text-align:center;background-color:#eee;">
        </td>

        <td><input type="date" name="APPROVEDBY" id="APPROVEDBY"  readonly   style="width:100%; text-align:left;background-color:#eee;">
        <input type="text" name="" id="" placeholder="Signature"  readonly style="width:100%; text-align:center;background-color:#eee;">
        </td>
     </tr>
        </tr>
     </tbody>
  </table>
  </div>
          <br>
            <div class="col-sm-5">
  <p style="text-align:left; font-weight:bold;">(6). APPROVAL </p>

  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Applicants signature</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="APPLICANT_STAMP" id="APPLICANT_STAMP" placeholder="Auto" data-placement="top" readonly
                    style="font-size: 11px; text-align:left;"/>
                    </div>
                    </div>
                <!-- /.form-group -->
  </div>

  <div class="col-sm-7">
                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Approved by</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="FINALAPPROVAL" id="FINALAPPROVAL" placeholder="FIN & ADMIN" data-placement="top" readonly
                    style="font-size: 11px; text-align:left;"/>
                    </div>
                    </div>
                <!-- /.form-group -->

                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Signature</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="FINALAPP_TIMESTAMP" id="FINALAPP_TIMESTAMP" placeholder="auto" data-placement="top" readonly
                    style="font-size: 11px; text-align:center;"/>
                    </div>
                    </div>
                <!-- /.form-group -->

                    <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Date</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="FINALAPPROVALDATE" id="FINALAPPROVALDATE" placeholder="dd /mm /yyyy" data-placement="top" readonly
                    style="font-size: 11px; text-align:left;"/>
                    </div>
                    </div>
                <!-- /.form-group -->

        </div>
        <div class="col-sm-12">
        <br>
        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic form, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>

         </form>
         <input type="submit" name="button" id="button" value="Submit record" />
         </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                     <div class="col-lg-12">
                        <div class="modal fade" id="newReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4"> </h4>
                                        </div>
                                        <div class="modal-body">
                                          <form role="form"> 
                                       <div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> <br> <br>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> Message </legend> </center>



                                            <div class="form-group">
                                            <label>BODY</label>
                                            <textarea id="comment" name="comment"class="form-control"placeholder="Edit Your Message Here....."></textarea>
                                            <p class="help-block">Contact system admin.</p>
                                             </div>

                                            <div class="form-group">
                                            <label>FROM</label>
                                            <input type="text" id="username" name="username"placeholder="Your Name" class="form-control" required="required">
                                            <p class="help-block">Full sender name.</p>
                                        </div>

   <input type="button" onClick="post()" value="Post Comment">

  </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

    <!------/ end modals------>

                    </div>
                </div>
              </div>



                            </div>
                        </div>
                    </div>
                </div>

         <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information and Health Centre</p>
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
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src="/assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->



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
     <script src="assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
  <script type="text/javascript" src=" assets/js/jquery.js"></script>
    <script type="text/javascript" src=" assets/admin_bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src=" assets/js/lineandbars.js"></script>

	<script type="text/javascript" src=" assets/js/dash-charts.js"></script>
	<script type="text/javascript" src=" assets/js/gauge.js"></script>

	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src=" assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="  assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topCenter.js"></script>

	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src=" assets/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="assets/js/highcharts.js"></script>
	<script src="assets/js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="assets/ js/admin.js"></script>

                <link href=" assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
            <script src=" assets/lib/jquery/jquery.js"></script>

			    <!-- END PAGE LEVEL SCRIPTS -->
   </body>
</html>

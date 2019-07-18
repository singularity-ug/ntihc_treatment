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

 <?php
   $id = '123';//$_POST['id'];

  $DATECREATED = '';
  $FIRSTNAME = '';
  $LASTNAME  = '';
  $OTHERNAME = '';
  $SEX = '';
  $AGE = '';
  $AGE1 = ''; 
  $SCHOOLINGSTATUS = '';
  $HIGHESTLEVELOFEDUCATION = '';
  $MARITALSTATUS = '';
  $EMPLOYMENTSTATUS = '';
  $DISTRICT = '';
  $DIVISION = '';
  $PLACEOFRESIDENCE = '';
  $PHONECONTACT = '';
  $MOTHERFIRSTNAME = '';
  $MOTHERLASTNAME='';
  $FATHERFIRSTNAME='';
  $FATHERLASTNAME='';
  $LIVINGWITH='';
  $HEAREDABOUTNTIHC='';
  $REGISTEREDBY='';

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE `PID` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $DATECREATED = $row['DATECREATED'];
     $FIRSTNAME = $row['FIRSTNAME'];
     $LASTNAME  = $row['LASTNAME'];
     $OTHERNAME = $row['OTHERNAME'];
     $SEX = $row['SEX'];
     $AGE = $row['AGE'];
	 $AGE1 = $row['AGE'];
     $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS'];
     $HIGHESTLEVELOFEDUCATION = $row['HIGHESTLEVELOFEDUCATION'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EMPLOYMENTSTATUS = $row['EMPLOYMENTSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $DIVISION = $row['DIVISION'];
     $PLACEOFRESIDENCE = $row['PLACEOFRESIDENCE'];
     $PHONECONTACT = $row['PHONECONTACT'];
     $MOTHERFIRSTNAME  = $row['MOTHERFIRSTNAME'];
     $MOTHERLASTNAME=$row['MOTHERLASTNAME'];
     $FATHERFIRSTNAME=$row['FATHERFIRSTNAME'];
     $FATHERLASTNAME=$row['FATHERLASTNAME'];
     $LIVINGWITH =$row['LIVINGWITH'];
     $HEAREDABOUTNTIHC=$row['HEAREDABOUTNTIHC'];
     $REGISTEREDBY=$row['REGISTEREDBY'];

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

    <meta name="description" content=" ">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href=" assets/lib/bootstrap/css/bootstrap_ws.css">
    <link rel="stylesheet" href=" assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href=" assets/css/main.css">
    <link rel="stylesheet" href=" assets/lib/metismenu/metisMenu.css">
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
 <link rel="stylesheet" href="admin/assets/notifier.css">
    <![endif]-->
  <link rel="stylesheet" href="ahr/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="ahr/datatable/css/buttons.dataTables.min.css">

  <script src="ahr/datatable/js/jquery-1.12.3.js"></script>
  <script src="ahr/datatable/js/jquery.dataTables.min.js"></script>
  <script src="ahr/datatable/js/bootstrap.min.js"></script>
  <script src="ahr/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="ahr/datatable/js/dataTables.buttons.min.js"></script>
  <script src="ahr/datatable/js/buttons.flash.min.js"></script>
  <script src="ahr/datatable/js/jszip.min.js"></script>
  <script src="ahr/datatable/js/pdfmake.min.js"></script>
  <script src="ahr/datatable/js/vfs_fonts.js"></script>
  <script src="ahr/datatable/js/buttons.html5.min.js"></script>
  <script src="ahr/datatable/js/buttons.print.min.js"></script>
  <script src="../js/custom.js"></script>


<script> 

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 1,
        dom: 'Bfrtip',
        buttons: [
  
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
     $('#example2').DataTable( {
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
  
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
  
        ]
    } );
  } );
  </script>
  
   <script>
	function searchpro(){
	   var dataString = document.getElementById('NTIHCNO').value;

	   if(dataString==''){ document.getElementById('schrest').innerHTML="";}
	   else{

	   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	//alert(this.responseText);
      document.getElementById('schrest').innerHTML = this.responseText; //
    }
  };
  xhttp.open("GET", "http://localhost/ntihc/get_clientNTIHCno_onregn.php?q="+dataString, true);
  xhttp.send();

	}
	}



  function agecalc(){
    var pn = $("#datepicker").val();
    var dataString = "d="+pn;
    $.ajax({ type: "POST",   url: "time.php", data: dataString, cache: false,
          success: function(result){
                           $("#AGE1").val(result);
          }
         });
  }
 
	function upt(idxx){
    var separatedDataArray = idxx.split("__");
	document.getElementById('NTIHCNO').value = separatedDataArray[0];
    document.getElementById('CNAME').value = separatedDataArray[1];
    document.getElementById('schrest').innerHTML="";
	}

    </script>

  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>


	<script type="text/javascript">
function ajaxFunction(str)
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      httpxml=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
function stateChanged()
    {
    if(httpxml.readyState==4)
      {
document.getElementById("displayDiv").innerHTML=httpxml.responseText;
document.getElementById("msg").style.display='none';

      }
    }
	var url="registration_desk_oldpidsearch.php";
url=url+"?txt="+str;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send(null);
document.getElementById("msg").innerHTML="Please Wait ...";
document.getElementById("msg").style.display='inline';

  }
</script>


 <style>
h9 {
    border-bottom: 2px solid #cc9900;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 2px solid black;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #ecf0f5;;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
   }

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
             table, th , td  {
                 border: 2px solid black;

                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 12px;
             	 color:#000000;
             }
             table tr:nth-child(odd) {
             background:#ffffff;
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
 
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="assets/libs/less.js/2.7.1/less.js"></script>
     <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />
  </head>

          
     <!--PAGE CONTENT -->  
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
                                    <span class="icon-bar"></span>    </button>
                            <a href="" class="navbar-brand"><img src="" alt=""></a>   </header>


                                
                            <div class="topnav"> 
                                <div class="btn-group"> 
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>   </a>                               
                                         </div> 
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                        <i class="fa fa-bars"></i>                   
                                          </a>
                                    <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip"
                                    class="btn btn-default btn-sm toggle-right">
                                    <span class="glyphicon glyphicon-comment"></span>                          
                                    </a>                          
                                    </div>
                                    </div>




                                    <div class="collapse navbar-collapse navbar-ex1-collapse">

                                    <!-- .nav -->
                                    <ul class="nav navbar-nav">
                                    <li class="active"><a href="client_management.php" 
                                    style="background-color:#518dc1;border: 2px solid #f4f4f4;padding: 10.5px; text-align:left;color:#fff;">Dashboard</a></li>
                                    
                                     <li><a href="registration_desk.php" 
                                     style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i>Home</a></li>
                                       
                                     <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal2 " 
                                     style="border: 2px solid #f4f4f4; padding: 10.5px; color: #fff; text-align:left;"> </button> <i class="icon-lock icon-white"></i> 
                                     Clients Checklist</a></li>  
                                     
                                      <li><a href="registration_desk.php" 
                                     style="border: 0px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i>
                                     Welcome: &nbsp <?php echo $nameofuser; ?></a></li>
                                        
                                      
                                     <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                            Welcome<b class="caret"></b> </a>
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
                    <!-- /.navbar -->              
                            <header class="head">
                                
                            <div class="main-bar">
                                <h3>
              <i class=""></i> 
            NTIHC-CLIENTS REGISTRATION DESK 
                    </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top --> 
                        <!-- #menu -->  
      <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter" style="background-color:#fff;">
                            <div class="text-left">
 
  <div class="col-sm-3">
  <div class="box-body">
              <div class="alert alert-danger alert-dismissible" style="background-color:#00a65a;  border:4px solid white;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4 style="color:#ffffff; font-size:20px; font-family:lcd; text-align:right;"><i class="glyphicon glyphicon-hand-up"></i>
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
                 </h4>
               <p style="color:#ffffff;">  DUE FOR MEDICAL SERVICES</p> 
              </div>   
   
    
        
  <div class="box-body"> 
    <p></p> 
              <div class="alert alert-info alert-dismissible" style="background-color:#f39c12; border:4px solid white;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4 style="color:#ffffff; font-size:20px; font-family:lcd; text-align:right;"><i class="glyphicon glyphicon-thumbs-down"></i> 
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
                </h4>
               <p style="color:#ffffff;">  DUE FOR COUNSELLING SERVICES </p>
              </div>
  
   <div class="box-body"> 
    <p></p> 
              <div class="alert alert-info alert-dismissible" style="background-color:#dd4b39; border:4px solid white;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4 style="color:#ffffff; font-size:20px; font-family:lcd; text-align:right;"><i class="glyphicon glyphicon-thumbs-down"></i> 
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
                </h4>
                <p style="color:#ffffff;"> DUE FOR PREGNANCR RELATED SERVICES </p>
              </div>
              
              
     <div class="box-body"> 
    <p></p> 
              <div class="alert alert-info alert-dismissible" style="background-color:#00a65a; border:4px solid white;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4 style="color:#ffffff; font-size:20px; font-family:lcd; text-align:right;"><i class="glyphicon glyphicon-thumbs-down"></i> 
                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='OTHER SERVICES' AND INSVCSTATUS ='NO' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                </h4>
                <p style="color:#ffffff;"> DUE FOR OTHER SERVICES </p>
              </div>           
       
  <div class="box-body"> 
    <p></p> 
              <div class="alert alert-info alert-dismissible" style="background-color:#dd4b39; border:4px solid white;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4 style="color:#ffffff; font-size:20px; font-family:lcd; text-align:right;"><i class="glyphicon glyphicon-thumbs-down"></i> 
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT PID, NTIHCNO FROM cmpatientsnewregistration WHERE TIMESTAMP >='$date' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
                </h4>
                <p style="color:#ffffff;"> NEW REGISTERED CLIENTS </p>
              </div> 
 
<div class="box-body"> 
    <p></p> 
              <div class="alert alert-info alert-dismissible" style="background-color:#f39c12; border:4px solid white;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4 style="color:#ffffff; font-size:20px; font-family:lcd; text-align:right;"><i class="glyphicon glyphicon-thumbs-down"></i> 
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>      
    </h4>
               <p style="color:#ffffff;"> TOTAL VISTS BY CURRENT DATE </p>
               </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
  
  </div>  </div></div></div>


  <div class="col-sm-9" > 
   <div class="panel-body" style=" border-radius:11px; border:2px solid;"> 
   <P></P>
    							
 <div class="col-lg-12" style="text-align:left;">
<img src="assets/img/logsbig.PNG" width="100%" height="100%">
</div>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> NEW CLIENT DEMOGRAPHY </legend> </center>

          <form class="form-horizontal" method="post" action="regndesk_update.php" style="height:auto;">

		  <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:50%;"> </th>
        <th style="border-bottom-color:white;font-weight:bold; width:50%;"> </th>   
      </tr>
    </thead>   
    <tbody>
        <tr> 
        <th>
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  id="DATECREATED" value="<?php echo date('Y-m-d'); ?>"   class="form-control">
                </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  id="FIRSTNAME" data-placement="top" value="<?php  echo $FIRSTNAME; ?>" />
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  id="LASTNAME"  value="<?php echo $LASTNAME;?>"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  value="<?php echo $OTHERNAME;?>" data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->


                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Gender</label>
                    <div class="col-sm-8">
                        <select class="form-control"  id="SEX" name="SEX"  /> 
                 <option <?php if ($SEX=='FEMALE') { echo 'selected="selected"'; } ?> >FEMALE</option>
                 <option <?php if ($SEX=='MALE') { echo 'selected="selected"'; } ?> >MALE</option> 
                 </select>  
                        </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date of birth</label>
                    <div class="col-sm-8">
                    <input type="date" name="AGE" onSelect="agecalc()" onChange="agecalc()"  id="datepicker1"   value="<?php echo $AGE;?>" class="form-control"  
                    data-placement="top" />
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <div class="col-sm-12">
                    <input type="text" name="AGE1" id="AGE1" class="form-control" data-placement="top"  readonly="readonly"  value="<?php echo $AGE1;?>" 
                    placeholder="Auto" style="background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Schooling</label>
                    <div class="col-sm-8">
                    <select class="form-control" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" data-placement="top" /> 
                 <option <?php if ($SCHOOLINGSTATUS=='IS') { echo 'selected="selected"'; } ?> >IS</option>
                 <option <?php if ($SCHOOLINGSTATUS=='OS') { echo 'selected="selected"'; } ?> >OS</option> 
                 </select>    
                   </div>
                   </div>
                <!-- /.form-group --> 

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Education</label>
                    <div class="col-sm-8">
                        <select class="form-control"   id="HIGHESTLEVELOFEDUCATION" name="HIGHESTLEVELOFEDUCATION"  />  
                 <option <?php if ($HIGHESTLEVELOFEDUCATION=='PRIMARY') { echo 'selected="selected"'; } ?> >PRIMARY</option>
                 <option <?php if ($HIGHESTLEVELOFEDUCATION=='SECONDARY') { echo 'selected="selected"'; } ?> >SECONDARY</option>
                 <option <?php if ($HIGHESTLEVELOFEDUCATION=='TERTIARY') { echo 'selected="selected"'; } ?> >TERTIARY</option>
                 <option <?php if ($HIGHESTLEVELOFEDUCATION=='VOCATION') { echo 'selected="selected"'; } ?> >VOCATION</option>
                 <option <?php if ($HIGHESTLEVELOFEDUCATION=='UNIVERSITY') { echo 'selected="selected"'; } ?> >UNIVERSITY</option>
                 <option <?php if ($HIGHESTLEVELOFEDUCATION=='NONE') { echo 'selected="selected"'; } ?> >NONE</option>
                 </select> 
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Marital status</label>
                    <div class="col-sm-8">
                    <select class="form-control" id="MARITALSTATUS"  name="MARITALSTATUS"  /> 
                 <option <?php if ($MARITALSTATUS=='SINGLE') { echo 'selected="selected"'; } ?> >SINGLE</option>
                 <option <?php if ($MARITALSTATUS=='MARRIED') { echo 'selected="selected"'; } ?> >MARRIED</option>
                 <option <?php if ($MARITALSTATUS=='SEPARATED') { echo 'selected="selected"'; } ?> >SEPARATED</option>
                 <option <?php if ($MARITALSTATUS=='WIDOWED') { echo 'selected="selected"'; } ?> >WIDOWED</option>
                 <option <?php if ($MARITALSTATUS=='DIVORCED') { echo 'selected="selected"'; } ?> >DIVORCED</option>
                 <option <?php if ($MARITALSTATUS=='NO RESPONSE') { echo 'selected="selected"'; } ?> >NO RESPONSE</option>
                 </select> 
                   </div>
                </div>
                <!-- /.form-group --> 
        </th>
        
        <td>   
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment status</label>
                    <div class="col-sm-8">
                  <select class="form-control" id="EMPLOYMENTSTATUS" input name="EMPLOYMENTSTATUS" /> 
                 <option <?php if ($EMPLOYMENTSTATUS=='TEMPORARY') { echo 'selected="selected"'; } ?> >TEMPORARY</option>
                 <option <?php if ($EMPLOYMENTSTATUS=='PERMANENT') { echo 'selected="selected"'; } ?> >PERMANENT</option> 
                 </select> 
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control" id="DISTRICT" input name="DISTRICT" value="<?php echo $DISTRICT;?>"/> 
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8">
                  <select class="form-control" id="DIVISION" name="DIVISION" /> 
                 <option <?php if ($DIVISION=='CENTRAL') { echo 'selected="selected"'; } ?> >CENTRAL</option>
                 <option <?php if ($DIVISION=='LUBAGA') { echo 'selected="selected"'; } ?> >LUBAGA</option> 
                 <option <?php if ($DIVISION=='NAKAWA') { echo 'selected="selected"'; } ?> >NAKAWA</option>
                 <option <?php if ($DIVISION=='MAKINDYE') { echo 'selected="selected"'; } ?> >MAKINDYE</option>
                 <option <?php if ($DIVISION=='KAWEMPE') { echo 'selected="selected"'; } ?> >KAWEMPE</option> 
                 </select> 
                               
                   </div>
                </div>
                <!-- /.form-group --> 
			      
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" value="<?php echo $PLACEOFRESIDENCE;?>" class="form-control" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone contact</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" value="<?php echo $PHONECONTACT;?>" class="form-control" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" value="<?php echo $MOTHERFIRSTNAME;?>" class="form-control" placeholder="First name" />
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  value="<?php echo $MOTHERLASTNAME;?>" class="form-control" placeholder="Last name" />
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" value="<?php echo $FATHERFIRSTNAME;?>"  class="form-control"  />
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  value="<?php echo $FATHERLASTNAME;?>"  class="form-control"  />
                   </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Living with</label>
                    <div class="col-sm-8">
                 <select class="form-control" id="LIVINGWITH" name="LIVINGWITH"  /> 
                 <option <?php if ($LIVINGWITH=='SINGLE PARENTS') { echo 'selected="selected"'; } ?> >SINGLE PARENTS</option>
                 <option <?php if ($LIVINGWITH=='BOTH PARENTS') { echo 'selected="selected"'; } ?> >BOTH PARENTS</option> 
                 <option <?php if ($LIVINGWITH=='GRAND PARENTS') { echo 'selected="selected"'; } ?> >GRAND PARENTS</option>
                 <option <?php if ($LIVINGWITH=='GUARDIAN') { echo 'selected="selected"'; } ?> >GUARDIAN</option>
                 <option <?php if ($LIVINGWITH=='ALONE/SELF') { echo 'selected="selected"'; } ?> >ALONE/SELF</option> 
                 <option <?php if ($LIVINGWITH=='BROTHER') { echo 'selected="selected"'; } ?> >BROTHER</option>
                 <option <?php if ($LIVINGWITH=='SISTER') { echo 'selected="selected"'; } ?> >SISTER</option> 
                 <option <?php if ($LIVINGWITH=='B/FRIEND') { echo 'selected="selected"'; } ?> >B/FRIEND</option>
                 <option <?php if ($LIVINGWITH=='WIFE') { echo 'selected="selected"'; } ?> >WIFE</option>
                 <option <?php if ($LIVINGWITH=='HUSBAND') { echo 'selected="selected"'; } ?> >HUSBAND</option>  
                 </select>                 
                </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Heard about us</label>
                    <div class="col-sm-8">
                  <select class="form-control" id="HEAREDABOUTNTIHC" name="HEAREDABOUTNTIHC" />
                   
                 <option <?php if ($HEAREDABOUTNTIHC=='PEERS') { echo 'selected="selected"'; } ?> >PEERS</option>
                 <option <?php if ($HEAREDABOUTNTIHC=='PARENTS/GUARDIAN') { echo 'selected="selected"'; } ?> >PARENTS/GUARDIAN</option> 
                 <option <?php if ($HEAREDABOUTNTIHC=='HEALTH WORKER') { echo 'selected="selected"'; } ?> >HEALTH WORKER</option>
                 <option <?php if ($HEAREDABOUTNTIHC=='OUTREACH') { echo 'selected="selected"'; } ?> >OUTREACH</option>
                 <option <?php if ($HEAREDABOUTNTIHC=='EMPLOYER') { echo 'selected="selected"'; } ?> >EMPLOYER</option> 
                 <option <?php if ($HEAREDABOUTNTIHC=='NEWS PAPER') { echo 'selected="selected"'; } ?> >NEWS PAPER</option>
                 <option <?php if ($HEAREDABOUTNTIHC=='RADIO') { echo 'selected="selected"'; } ?> >RADIO</option> 
                 <option <?php if ($HEAREDABOUTNTIHC=='TV') { echo 'selected="selected"'; } ?> >TV</option> 
                 </select> 
                   </div>
                </div>
                <!-- /.form-group --></th>
                </tbody>
    </table>
              
	 <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;"></th>
        <th style="border-bottom-color:white;font-weight:bold; width:66.6666666666%;"></th>   
      </tr>
    </thead>   
    <tbody>
        <tr> 
        <th>Registered by  </th>
        <td> <input type="text" class="form-control"  name="REGISTEREDBY"  id="REGISTEREDBY" value="<?php echo $REGISTEREDBY;?>" 
	 style="background-color:#fff;"/> </td> 
    </tbody>
    </table> 		 
         <input type="hidden" name="PID" id="PID" value="<?php echo $id;?>"  >
         <center><input type="submit"  name="update" value="Update"/><center>
         
         </form> 
     </div>
     </div>

     </div>


     </div>
     </div> 
       
                  
                 <div class="col-lg-12">
                        <div class="modal fade" id="uiModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#red;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                           <center> <h4 class="modal-title" id="H3">CLIENTS DUE FOR SERVICE ATTENTION</h4> </center>
                                        </div>
                                        <div class="modal-body">

 <div class="col-lg-12" style="text-align:left;">
<img src="assets/img/logsbig.PNG" width="100%" height="100%">
</div>
                <form method="post" action="updatecmgt/edit2.php">
		 <table class="table table-striped table-bordered" >
			<tr>
				<td>NTIHCNO : <input type="text" id="myNTIHCNO" name="NTIHCNO" value="" readonly="readonly"></td>
				<td>SERVICETYPE : <select id="mySERVICETYPE" name="SERVICETYPE" value="">
                  <option value="">  </option>
                  <option value="MEDICAL SERVICES">MEDICAL SERVICES</option>
                  <option value="COUNSELLING SERVICES">COUNSELLING SERVICES</option>
                  <option value="PREGNANCY RELATED SERVICES">PREGNANCY RELATED SERVICES</option>
                  <option value="OTHER SERVICES">OTHER SERVICES</option>
               </select>
                </td>
				<td> VIST TYPE : <input type="text" id="myVISTTYPE" name="VISTTYPE" value=""></td>
				<td> DATE : <input type="text" name="TIMESTAMP" value="<?php echo date('Y-m-d');?>" readonly="readonly"></td>
				<td><input type="hidden" id="myRID" name="RID" value=""</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>


<script>
function referpat(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[1];
document.getElementById("myRID").value=dts[0];
document.getElementById("mySERVICETYPE").value=dts[2];
document.getElementById("myVISTTYPE").value=dts[3];

}
</script>

	 <div id="work" style="width:100%;">

    <table id="example1" class="table table-striped table-bordered"  style="font-weight:normal;">
        <thead>
        <tr>
              <th>DATE TIME</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>SERVICE TYPE</th>
					 <th>USER INITIAL</th>
                     <th>ACTION 1</th>
                     <th>ACTION 2</th>
        </tr>
        </thead>
        <tfoot>
        <tr>

              <th>DATE TIME</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>SERVICE TYPE</th>
					 <th>USER INITIAL</th>
                     <th>ACTION 1</th>
                     <th>ACTION 2</th>
        </tr>
        </tfoot>
        <tbody>

 <?php
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='NO' ORDER BY RID DESC");

	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>";
		echo "<td>".$res['USERINITIAL']."</td>";
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">Edit</a> </td>';
		echo "<td><a href=\"updatecmgt/delete2.php?id=$res[RID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Truncate</a></td>";
	}
	?>
	</tbody>
  </table>



         </div>
        </div>
       <div class="col-sm-12">
         <br>
         </form>

         </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
 
      
    <div class="col-lg-12">
                        <div class="modal fade" id="uiModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3">  </h4>
                                        </div>
                                        <div class="modal-body">
										
			
          

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

 

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div></div> </div>
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

			    <!-- END PAGE LEVEL SCRIPTS -->
 <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
 <script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>

<script>
 var x=0,y=0;

function postclient(vd){

  var dta = vd.split("###");
  $("#NTIHCNO").val(dta[0]);
  $("#CNAME").val(dta[1]);
}

</script>



   </body>
</html>

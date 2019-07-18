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

    <meta name="description" content=" ">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href=" ../assets/lib/bootstrap/css/bootstrap_ws.css">
    <link rel="stylesheet" href="../ assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href=" ../assets/css/main.css">
    <link rel="stylesheet" href=" ../assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href=" ../assets/lib/animate.css/animate.css">
        <!-- PAGE LEVEL STYLES -->
<link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href=" ../assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href=" ../assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href=" ../assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href=" ../assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href=" ../assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href=" ../assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href=" ../assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href=" ../assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href=" ../assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
        <!-- END PAGE LEVEL  STYLES -->
<link rel="stylesheet" href="../assets/plugins/validationengine/css/validationEngine.jquery.css" />
 
    <![endif]-->
  <link rel="stylesheet" href="../ahr/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../ahr/datatable/css/buttons.dataTables.min.css">

  <script src="../ahr/datatable/js/jquery-1.12.3.js"></script>
  <script src="../ahr/datatable/js/jquery.dataTables.min.js"></script>
  <script src="../ahr/datatable/js/bootstrap.min.js"></script>
  <script src="../ahr/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../ahr/datatable/js/dataTables.buttons.min.js"></script>
  <script src="../ahr/datatable/js/buttons.flash.min.js"></script>
  <script src="../ahr/datatable/js/jszip.min.js"></script>
  <script src="../ahr/datatable/js/pdfmake.min.js"></script>
  <script src="../ahr/datatable/js/vfs_fonts.js"></script>
  <script src="../ahr/datatable/js/buttons.html5.min.js"></script>
  <script src="../ahr/datatable/js/buttons.print.min.js"></script>
  <script src="../js/custom.js"></script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
  
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 4,
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
	  "iDisplayLength": 4,
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
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'NTIHC STAFF CONTACTS'
		},
		{extend :'pdf',
		 title:'NTIHC STAFF CONTACTS'
		},
		{extend :'print',
		 title:'NTIHC STAFF CONTACTS'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
  
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' X'
		},
		{extend :'pdf',
		 title:'X '
		},
		{extend :'print',
		 title:' X'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'NTIHC STAFF CONTACTS'
		},
		{extend :'pdf',
		 title:'NTIHC STAFF CONTACTS'
		},
		{extend :'print',
		 title:'NTIHC STAFF CONTACTS'
		}
        ]
    } );
  } );
  </script>

<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
    padding: 8px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}


	  {
                 border-bottom: 2px solid #000;
                 color:#000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 10px;
             	color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
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
 
    <link rel="stylesheet" href="../assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="../assets/less/theme.less">
    <script src="../assets/libs/less.js/2.7.1/less.js"></script>
     <link rel="stylesheet" href="../assets/css/bootstrap-fileupload.min.css" />
  </head>

         
                    <!-- /#left -->
                     <!--PAGE CONTENT --> 
        <div id="content">
        <div class="outer">
                    <div class="inner bg-light lter5" style="height:auto;" >
                    <div class="text-left" > 
                     <div class="row">
                     <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center;">
                    NAGURU TEENAGE INFORMATION AND HEALTH CENTER </h1>
                </div>
            </div>  
        <div class="row" >
        <div class="col-lg-12" >
        <div class="box" >
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
                                    <li><a href="index.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i>Home</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;">
                                            Quick view<b class="caret"></b>  </a>
                                        <ul class="dropdown-menu">
                                     

                                        </ul>
                                    </li>
                                    
                                    <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal2 " style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; background-color:#f8f8f8; text-align:left;"> </button> <i class="icon-lock icon-white"></i>Staff contacts</a></li>  
                                      
                                    </div>
 
                                  </a></li>
                                </ul>
                                <!-- /.nav -->
                            </div>   
            </header>
            <div id="div-5" class="accordion-body collapse in body"> 
             <center> <legend style="color:#000; font-weight:bold;font-size:12px;">MANAGE INTERNAL REFERRALS </legend> </center>
 
  
	<form method="post" action="edit1.php">
		<table class="table table-bordered">
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
                 
     <div class="col-sm-6" style="height:auto; "> 
 <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		CLIENTS PROCESSED FOR MEDICAL ATTENTION <span class="sr-only">60% Complete</span>
        </div></div>
        
	  <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example2" class="table table-striped table-bordered" >
        <thead>
        <tr> 
        <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function referpat(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[1];
document.getElementById("myRID").value=dts[0];
document.getElementById("mySERVICETYPE").value=dts[2];
document.getElementById("myVISTTYPE").value=dts[3];
}
</script> 
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>
     </div></div>
                 
 
      <div class="col-sm-6" style="height:auto;">
 <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		CLIENTS PROCESSED FOR PREGNANCY RELATED SERVICES <span class="sr-only">60% Complete</span> 
		</div>
	    </div>
      <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example3" class="table table-striped table-bordered" >
        <thead>
        <tr> 
        <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>  
     
     </div>    
    
    
     </div>
	   <div class="col-sm-6" style="height:auto;">
     <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		PROCESSED CLIENTS DUE FOR OTHER SERVICES <span class="sr-only">60% Complete</span>
		</div>
	    </div>
      <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example1" class="table table-striped table-bordered" >
        <thead>
        <tr> 
        <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='OTHER SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>  
     
     </div>      
        
     </div>
      
        
     <div class="col-sm-6" style="height:auto;">
     <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		PROCESSED CLIENTS DUE FOR COUNSELLING SERVICES <span class="sr-only">60% Complete</span>
		</div>
	    </div>
      <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example4" class="table table-striped table-bordered" >
        <thead>
        <tr> 
        <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>DATE TIME</th> 
					 <th>NTIHCNO</th>
                     <th>CLIENT NAME</th> 
                     <th>SERVICE TYPE </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>  
     
     </div>  
     
     
     
     </div>  
     
     <br>  
  
 </div>
 </div>
 </div>
 </div>
 </div>
<div class="row">
  <div class="col-lg-12">
    <div class="box">
      <header>
	<center><h5> ALL RECORDS  </small></h5></center>
     </div> 
     <div class="col-sm-12" >  
  <form method="post" action="edit1.php">
		 <table class="table table-striped table-bordered" >
			<tr>				
				<td>NTIHCNO : <input type="text" id="cNTIHCNO" name="NTIHCNO" value="" readonly="readonly"></td>
				<td>SERVICETYPE : <select id="cSERVICETYPE" name="SERVICETYPE" value="">
                  <option value="">  </option>
                  <option value="MEDICAL SERVICES">MEDICAL SERVICES</option>
                  <option value="COUNSELLING SERVICES">COUNSELLING SERVICES</option>
                  <option value="PREGNANCY RELATED SERVICES">PREGNANCY RELATED SERVICES</option>
                  <option value="OTHER SERVICES">OTHER SERVICES</option>
               </select>
                </td>
				<td> VIST TYPE : <input type="text" id="cVISTTYPE" name="VISTTYPE" value=""></td>
				<td> DATE : <input type="text" name="TIMESTAMP" value="<?php echo date('Y-m-d');?>" readonly="readonly"></td>
				<td><input type="hidden" id="cRID" name="RID" value=""</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>			
		</table>
	</form>
 
 
<script> 
function regnrecords(myid){
var dts = myid.split("***");
document.getElementById("cNTIHCNO").value=dts[1];
document.getElementById("cRID").value=dts[0];
document.getElementById("cSERVICETYPE").value=dts[2];
document.getElementById("cVISTTYPE").value=dts[3];
}
</script>

 

	 <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example5" class="table table-striped table-bordered" >
        <thead>
        <tr> 
            <th>DATE TIME</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>SERVICE TYPE</th>
					 <th>VIST TYPE</th>
                     <th>DATA TYPE</th> 
                     <th>USER INITIAL </th> 
                     <th>ACTION </th> 
        </tr>
        </thead>
        <tfoot>
        <tr>
              
              <th>DATE TIME</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>SERVICE TYPE</th>
					 <th>VIST TYPE</th>
                     <th>DATA TYPE</th> 
                     <th>USER INITIAL </th> 
                     <th>ACTION </th>  
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND OUTSVSTATUS ='NO' ORDER BY RID DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>";
		echo "<td>".$res['VISTTYPE']."</td>";
		echo "<td>".$res['DATATYPE']."</td>";
		echo "<td>".$res['USERINITIAL']."</td>";
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="regnrecords(this.id)">Refer</a> </td>'; 			
	}
	?>
	</tbody>
  </table>  
    
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
     <div class="col-sm-3">
 <div class="col-sm-6" >
				 
 
                </div>
                </div>
                </div>
                        
                        
                        
                   
            </div>
        </div>
    </div>
</div>
  
     
     
     <div class="col-lg-12" >
     <br>

    <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
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

          <center> <legend style="color:#000; font-weight:normal;font-size:11px;"> SUMMARY OF MOTORISED EQUIPMENTS BY TYPE AND FUNCTIONAL STATUS</legend> </center>

            <form class="form-horizontal" style="height:auto;">

         
         </form>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> VEHICLE HIRE VOUCHER </legend> </center>

            <form class="form-horizontal" style="height:auto;">
                <div class="col-sm-4">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Hire date</label>
                    <div class="col-sm-8">
                        <input type="text" id="DATECREATED" name="DATECREATED"  value="<?php echo date('d-m-y'); ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Vehicle No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="HIREDVEHICLENUMBER" name="HIREDVEHICLENUMBER" data-placement="top" style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-8">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-3">Hired from</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control"  id="SERVICEPROVIDER" name="SERVICEPROVIDER" class="form-control" 
                    style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Contact(s)</label>
                    <div class="col-sm-9">
                    <input type="text"  class="form-control"  name="SERVICEPROVIDERCONTACT" id="SERVICEPROVIDERCONTACT"data-placement="top" style="font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->
                </div>

         <div class="col-sm-12">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Requesting officer</label>
                    <div class="col-sm-8">
                        <input type="text" id="REQUESTINGOFFICER" name="REQUESTINGOFFICER" class="form-control" style="text-transform:uppercase;font-size: 12px; font-weight:bold; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Title</label>
                    <div class="col-sm-8">
                        <input type="text" id="TITLE" name="TITLE" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->

               <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                        <select class="form-control"  name="HO_DEPARTRMENT" id="HO_DEPARTRMENT"data-placement="top" style="font-size: 11px; text-align:center;"/>
                                <option value="1"> </option>
                <option value="ADVOCACY AND RESEARCH">A & R</option>
                <option value="FINANCE AND ADMINISTRATION">F & A</option>
                <option value="SERVICE DELIVERY">S D</option>
                </select>
                    </div>
                </div>

               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Purpose of travel</label>
                    <div class="col-sm-8">
                       <textarea id="wysihtml6" name="PURPOSE" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <!-- /.form-group -->

               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> From</label>
                    <div class="col-sm-8">
                        <input type="text" id="STARTJOURNEY" name="STARTJOURNEY" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->

               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Destination</label>
                    <div class="col-sm-8">
                        <input type="text" id="DESTINATION_HV" name="DESTINATION_HV" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->

              </div>

            <div class="col-sm-12">
            <br>

          <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th style="text-align:left;">VEHICLE CAPACITY </th>
         <th style="text-align:center;">NO. OF PASSENGERS</th>
         <th style="text-align:center;">START MILEGE </th>
         <th style="text-align:center;">END MILEAGE</th>
         <th style="text-align:center;">MILEAGE COVERED</th>
         <th style="text-align:center;">DAYS TAKEN</th>

         </thead>
      <tbody>
      <tr>
        <td><input type="text" name="VEHICLECAPACITY" id="VEHICLECAPACITY"  required="required" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="NOOFPASSENGERS" id="NOOFPASSENGERS"  required="required"  style="width:100%; text-align:center;"></td>
        <td><input type="text" name="STARTMILEGE" id="STARTMILEGE"  required="required" placeholder="KM" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="ENDMILEAGE" id="ENDMILEAGE"   required="required" placeholder="KM" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="MILEAGECOVERED" id="MILEAGECOVERED"  readonly  style="width:100%; text-align:center;"></td>
        <td><input type="text" name="DAYSTAKEN" id="DAYSTAKEN"  value="1" style="width:100%; text-align:center;"></td>


        </tr>
     </tbody>
  </table>

  <B>

   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th style="text-align:left;">VEHICLE CATEGORY </th>
         <th style="text-align:center;">RATE TYPE</th>
         <th style="text-align:center;">START TIME </th>
         <th style="text-align:center;">END TIME</th>
         <th style="text-align:center;">TOTAL HOURS</th>

         </thead>
      <tbody>
      <tr>
        <td><input type="text" name="VEHICLECATEGORY" id="VEHICLECATEGORY"  required="required" style="width:100%; text-align:center;"></td>
        <td><select name="RATETYPE" id="RATETYPE" style="width:100%; text-align:center;">
        <option value="NEGOTIATED"> NEGOTIATED</option>
        <option>PER HOUR</option>
        <option>PER KM</option>
        </select>
        </td>
        <td><input type="text" name="START_TIME" id="START_TIME"  required="required" placeholder="00:00" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="END_TIME" id="END_TIME"   required="required" placeholder="00:00" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="TOTALHOURS" id="TOTALHOURS"  readonly  placeholder="Auto" style="width:100%; text-align:center;"></td>

        </tr>
     </tbody>
  </table>
  </div>

   <div class="col-sm-12">
   <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Amount</label>
                    <div class="col-sm-8">
                        <input type="text" id="HIRECOST" name="HIRECOST" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->

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
        <td><input type="text"  class="form-control" name="RECIEVEDBY"id="RECIEVEDBY"  placeholder="Amount" readonly  style="width:100%; text-align:left;">
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
        Note: This is an electronic voucher, Signatory fields are auto generated in the official processing by the  approver. </p>

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
                                        <div class="modal-header" style="background-color:#f3f6ab;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2"> </h4>
                                        </div>
                                        <div class="modal-body">

                                           <form role="form">
                                        <div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:18px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:15px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:15px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br><br> <br> <br> <br> <br> <br>

          <center> <legend style="color:#000; font-weight:bold;font-size:15px;">FUEL AND LUBRICANTS REQUISTION</legend> </center>

            <form class="form-horizontal" style="height:auto;">


                <div class="col-sm-21">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Requisition date</label>
                    <div class="col-sm-8">
                       <input type="date" name="CREATEDDATE" id=">datepicker" value="<?php echo date('d-m-y'); ?>" class="form-control">
                    </div>
                 </div>
               </div>
                <!-- /.form-group -->

                <div class="col-sm-20">
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                     <select class="form-control"  name="DEPARTRMENT_FR" id="DEPARTRMENT_FR"data-placement="top" style="font-size: 11px; text-align:center;"/>
                                <option value="1"> </option>
                <option value="ADVOCACY AND RESEARCH">A & R</option>
                <option value="FINANCE AND ADMINISTRATION">F & A</option>
                <option value="SERVICE DELIVERY">S D</option>
                </select>
                    </div>
                  </div>
               </div>
               <!-- /.form-group -->

               <div class="col-sm-20">
               <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Initiated by</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="INITIATEDBY" name="INITIATEDBY" data-placement="top" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                  </div>
                </div>
                <!-- /.form-group -->

             <div class="col-sm-12">
             <br> <br>
     <input type="button" onClick="addRow17('mytable2')" value="Add fuel" />
     <input type="button" onClick="deleteRow16('mytable2')" value="(Delete)" />
     <input type="hidden" id="mytable_rows2" value="0">
      <br> <br>

  <table class="table table-striped" id="mytable2">
    <thead>
      <tr>
      <th>*</th>
   <th>REG NUMBER</th>
   <th>PRODUCT</th>
   <th>LUBRICANT </th>
   <th>QUANTITY</th>
   <th>PURPOSE</th>
   <th>ODO READING</th>
   <th>RECEIPIENT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  </div>
                   <script>
  function addRow17(tableId){
     var  s1a = '<input type="text" name="REGISTRATIONNO" id="REGISTRATIONNO_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width: 100%;">';

	 var  s2b =  '<select name="PRODUCT" required="required"  id="PRODUCT_'+rowCount+'"'+
                'style= " margin-left:-5px; width: 100%; background-color:#fff;" >'+
					                    '<option>DIESEL</option>'+
             		                    '<option>PETROL</option>'+
                                        '</select>';

	  var  s2b1 =  '<select name="LUBRICANT" id="LUBRICANT_'+rowCount+'"'+
                'style= " margin-left:-5px; width: 100%; background-color:#fff;" >'+
					                    '<option>N/A</option>'+
             		                    '<option>GREASE</option>'+
										'<option>ENGINE OIL</option>'+
                                        '</select>';

    var  s3c =  '<input type="numeric" name="LITRE" id="LITRE_'+rowCount+'"  required="required" '+
                'style= " margin-left:-5px; width: 100%; background-color:#fff;text-align:center;" >';

    var  s4d =  '<input type="numeric" name="PURPOSEOFCONSUMPTION" id="PURPOSEOFCONSUMPTION_'+rowCount+'"  required="required" '+
                'style= " margin-left:-5px; width: 100%; background-color:#fff;" >';

    var  s5e =  '<input type="numeric" name="CURRENTODOREADING" id="CURRENTODOREADING_'+rowCount+'" '+
                'style= " margin-left:-5px; width: 100%; background-color:#fff; text-align:center;" >';

     var  s6f =  '<input type="text" name="DRIVER" id="DRIVER_'+rowCount+'"  required="required" '+
                'style= " margin-left:-5px; width: 100%; background-color:#fff;" >';



		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
								  '<td>'+s2b1+' </td>'+
								  '<td>'+s3c+' </td>'+
	                              '<td>'+s4d+' </td>'+
								  '<td>'+s5e+' </td>'+
				                  '<td>'+s6f+' </td>';
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
		  table.rows[x].cells[1].childNodes[0].id="REGISTRATIONNO_"+x;
          table.rows[x].cells[2].childNodes[0].id="PRODUCT_"+x;
		  table.rows[x].cells[3].childNodes[0].id="LUBRICANT_"+x;
		  table.rows[x].cells[4].childNodes[0].id="LITRE_"+x;
          table.rows[x].cells[5].childNodes[0].id="PURPOSEOFCONSUMPTION_"+x;
		  table.rows[x].cells[6].childNodes[0].id="CURRENTODOREADING_"+x;
		  table.rows[x].cells[7].childNodes[0].id="DRIVER_"+x;
          }
           document.getElementById('mytable_rows2').value=rowCount-1;
}

  </script>


  <div class="col-lg-12">
   <br>
  <P style="font-size:14px;">FOR OFFICIAL USE</P>
  <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th> </th>
         <th>Recommendation</th>
         <th>Signatory</th>
         <th>Date</th>
         </thead>
    <tbody>
      <tr>
        <tr>
        <th>Authorised by</th>
        <td><input type="text" name="AUTHORISERCOMMENT" id="AUTHORISERCOMMENT" readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="text" name="AUTHORISERNAME" id="AUTHORISERNAME" readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="date" name="AUTHORISEDDATE" id="AUTHORISEDDATE" readonly="readonly" placeholder="dd /mm/ yyyy"  style="width:100%; text-align:center;background-color:#eee;"></td>
     </tr>
     <tr>

     <tr>
        <th>Approved by</th>
        <td><input type="text" name="APPROVERCOMMENT" id="APPROVERCOMMENT"  readonly  style="width:100%; text-align:left; background-color:#eee;"></td>
        <td><input type="text"  class="form-control" name="APPROVERRNAME"id="APPROVERRNAME"  readonly  style="width:100%; text-align:left;background-color:#eee;">
                                </td>
        <td><input type="date" class="form-control" id="APPROVEDDATE1" name="APPROVEDDATE1" readonly placeholder="dd /mm/ yyyy" style="width:100%; text-align:center; background-color:#eee;">

                                </td>
     </tr>
        </tr>
     </tbody>
  </table>

                </div>

        <div class="col-sm-12">

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic form, Signatory fields are auto generated in the official processing by the approver and the administrator. </p>

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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> INCIDENCE / ACCIDENT FORM </legend> </center>

          <P style="text-align:left;">Waiting for admin format </P>



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
                        <div class="modal fade" id="uiModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#FFFFC6;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                           <center> <h4 class="modal-title" id="H3" style="text-transform:uppercase;"> users</h4> </center>
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

 <br> <br><br> <br> <br> <br>  
 
  
  <form method="post" action="editUser.php">
		 <table class="table table-striped table-bordered" style="font-weight:normal;">
			<thead> 				
				<td> FULL NAME</td>
                <td> CONTACT</td>
                <td> E-MAIL </td>
                <td> USER TYPE </td>
                <td> TITLE</td>
                <td> ACCESS </td>
                <td> DEPARTMENT </td> 
                <td> HEALTH CENTER </td> 
         </thead>
         <tbody>
         <tr>
                <td> <input type="text" id="myName" name="Name" value="" readonly="readonly" style=" width:100%;"></td>
                 
                 <td><input type="alphanumeric" id="myPhonecontact" name="Phonecontact" value="" style="width:100%;"> </td> 
                
                <td> <input type="text" id="myUsername" name="Username" value="" style="width:100%; "></td>
                  
                <td> <select id="myType"  name="Type" value="" style="width:100%; ">
                <?php $conn = new mysqli("localhost", "root", "", "patientmgt"); 
					   $result = $conn->query("SELECT UOM FROM systemconfig WHERE UOMdefault='UOM' ORDER BY UOM ASC"); 
					   echo '<option></option>';
					   while($row = $result->fetch_assoc()) {  echo '<option>'.$row['UOM'].'</option>'; } ?>
                       </Select>  
                </td>
                 
                <td> <input type="text" id="myDescription"  name="Description" value="" style="width:100%; "> </td>
                 
                <td> <select id="myAuthorised"  name="Authorised" value="" style=" width:100%;">
                 <option value="">  </option>  
                 <option value="ENABLED"> ENABLE </option> 
                 <option value="DISABLED">DISABLE</option> 
                 </Select>
                </td>
                 
                <td> <select id="myDept"  name="Dept" value="" style="width:100%; ">
                  <option value="">  </option>  
                  <?php $conn = new mysqli("localhost", "root", "", "patientmgt"); 
					   $result = $conn->query("SELECT UOM FROM systemconfig WHERE UOMdefault='UOM' ORDER BY UOM ASC"); 
					   echo '<option></option>';
					   while($row = $result->fetch_assoc()) {  echo '<option>'.$row['UOM'].'</option>'; } ?>
                       </Select>
                </td>
                
                <td> <select id="myHealthcenter"  name="Healthcenter"  value="" style=" width:100%; text-align:center;">
                 <option value="">  </option>   
                 <option value="YES">YES </option>
                 <option value="NO"> NO</option>  
                 </select>  
                </td>
                 
			 </tr>
        </tr>
     </tbody>
  </table>
  
  <input type="hidden" id="myid" name="id" value="" >
  <center> <input type="submit" name="update" value="Update">  </center>
  
	</form>
 
 
<script> 
function USER(myid){
var dts = myid.split("***");
document.getElementById("myName").value=dts[1];
document.getElementById("myid").value=dts[0];
document.getElementById("myPhonecontact").value=dts[2];
document.getElementById("myUsername").value=dts[3];
document.getElementById("myType").value=dts[4];
document.getElementById("myDescription").value=dts[5];
document.getElementById("myAuthorised").value=dts[6];
document.getElementById("myDept").value=dts[7];
document.getElementById("myHealthcenter").value=dts[8];  
}
</script>


<p style="font-weight:bold; text-align:left;">SWITCH USERS </p>

	 <div id="work" style="width:100%; font-weight:normal;">
     <table id="example5" class="table table-striped table-bordered"  style="font-size:90%; font-weight:normal;" cellspacing="0" width="100%"> 
     
        <thead>
        <tr> 
              <th>USER NAME</th>
              <th>CONTACT</th>
              <th>E-MAIL</th> 
              <th>USER TYPE</th>
              <th>TITLE</th>
              <th>ACCESS</th>
              <th>DEPARTMENT</th>
              <th>HEALTH CENTER</th>   
              <th>ACTION 1</th>
              <th style="color:#FF0000;">ACTION 2</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
              <th>USER NAME</th>
              <th>CONTACT</th>
              <th>E-MAIL</th> 
              <th>USER TYPE</th>
              <th>TITLE</th>
              <th>ACCESS</th>
              <th>DEPARTMENT</th>
              <th>HEALTH CENTER</th>   
              <th>ACTION</th>
              <th style="color:#FF0000;">ACTION 2</th>   
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("updatecmgt/confighr.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM sys_users ORDER BY id DESC");
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) { 
	$dts = $res['id']."***".$res['Name']."***".$res['Phonecontact']."***".$res['Username']."***".$res['Type']."***".$res['Description']."***".$res['Authorised']    ."***".$res['Dept']."***".$res['Healthcenter'];
	
		echo "<tr>";
		echo "<td>".$res['Name']."</td>";
		echo "<td>".$res['Phonecontact']."</td>"; 
		echo "<td>".$res['Username']."</td>";
		echo "<td>".$res['Type']."</td>"; 
		echo "<td>".$res['Description']."</td>"; 
		echo "<td>".$res['Authorised']."</td>";  
		echo "<td>".$res['Dept']."</td>";
		echo "<td>".$res['Healthcenter']."</td>";  
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="USER(this.id)">Switch User</a> </td>'; 
		echo "<td><a href=\"updatecmgt/deleteUser.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Truncate</a></td>";			
	}
	?>
	</tbody>
  </table>  
                                </div> </div>
                                <div class="tab-pane fade" id="profile">
                                    <center><h4>Register new users</h4></center>
                                    
                                   <form class="form-horizontal" action="processnew_user.php" method="POST" style="height:auto;">
    
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Full name</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="Name" name="Name" class="form-control" required="required"/>
                                        </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="control-label col-sm-4">Phone Contact</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="Phonecontact" name="Phonecontact" class="form-control" required="required"/>
                                        </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Gender</label>
                                            <div class="col-sm-8">
                                            <select class="form-control" id="gender" name="gender" required="required" />
                                            <option> </option>
                        <option>FEMALE</option>
                        <option>MALE</option> 
                        </select>
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">User e-mail</label> 
                                            <div class="col-sm-8">
                                                <input type="email" id="Username" name="Username" class="validate[required,custom[email]] form-control" required="required"/>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Password</label> 
                                            <div class="col-sm-8">
                                                <input type="password" id="Pwd" name="Pwd" class="validate[required] form-control" required="required"/>
                                            </div>
                                        </div>
                                         
                                         <div class="form-group">
                                            <label class="control-label col-sm-4">Confirm-password</label> 
                                            <div class="col-sm-8">
                                                <input type="password" id="ConfirmPwd" name="ConfirmPwd" class="validate[required,equals[pass1]] form-control" />
                                            </div>
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Authentication level</label> 
                                            <div class="col-sm-8">
                                               <select class="form-control"  id="Type" name="Type" required="required"/>
                                               <option> </option>
                                               <option>TOLLFREE</option>
                                               <option>REGN DESK</option>
                                               <option>TREATMENT ROOM</option>
                                               <option>COUNSELLING</option>
                                               <option>PAC</option>
                                               <option>ANC</option>
                                               <option>FAMILY PLANNING</option>
                                               <option>PNC</option>
                                               <option>LABORATORY</option>
                                               <option>SYS ADMIN</option>
                                               <option>FIN AND ADMIN</option>
                                               <option>SERVICE DELIVERY</option>
                                               <option>EXECUTIVE ADMIN</option>
                                               <option>ADVOCACY AND RESEARCH</option>
                                               <option>ADMIN AND FIN2</option>
                                               <option>ADMIN AND FIN3</option>
                                               <option>ADMIN AND FIN4</option>
                                               <option>ADMIN AND FIN5</option>
                                               <option>STORES</option> 
                                               </select> 
                                                
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="control-label col-sm-4">Title</label> 
                                            <div class="col-sm-8">
                                                <input type="text" id="Description" name="Description" class="form-control" required="required"/>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Department</label> 
                                            <div class="col-sm-8">
                                                <input type="text" id="Dept" name="Dept" class="form-control" required="required"/>
                                        </div>
                                        </div>
                                          
                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">User unit</label>
                    <div class="col-sm-8">
                        <select class="form-control"  id="Healthcenter" name="Healthcenter"  required="required"
                        style="text-transform:uppercase;font-size: 11px;"/>
                        <option>HEADQUARTER </option>  
                       </select>
                    </div>
                </div>
                <!-- /.form-group --> 
                
                    </div> 
        <div class="col-sm-12">
         <br>
         <input type="submit" name="button" id="button" value="Submit record" />
         </form>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>..........3</h4>
                                     ...
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>........4</h4>
                                    ..
                                </div>
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
                        <div class="modal fade" id="uiModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#ffffa6;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center><h4 class="modal-title" id="H3">STAFF CONTACTS </h4><center>
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
 
          <form class="form-horizontal" style="height:auto; "> 
         
           <div id="work" style="width:100%;"> 
         <table id="example6" class="table table-striped table-bordered"  style="font-size:90%; font-weight:normal; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No.</th>
              <th>USER NAME</th>
              <th>GENDER</th>
              <th>CONTACT</th>
              <th>TITLE</th>
              <th>DEPARTMENT</th>
              <th>HEALTH CENTER</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No.</th> 
              <th>USER NAME</th>
              <th>GENDER</th>
              <th>CONTACT</th>
              <th>TITLE</th>
              <th>DEPARTMENT</th>
              <th>HEALTH CENTER</th>
            </tr>
        </tfoot>
        <tbody>
<?php

require('../php/confighr.php');
$sql = "SELECT * FROM sys_users ORDER BY id DESC ";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
		  '<td>'.$row['Name'].'</td>'.
	      '<td>'.$row['gender'].'</td>'.  
	      '<td>'.$row['Phonecontact'].'</td>'. 
		  '<td>'.$row['Description'].'</td>'.
	      '<td>'.$row['Dept'].'</td>'. 
		  '<td>'.$row['Healthcenter'].'</td>'.
   '</tr>';
$x=$x+1;

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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> PENDING TRANSPORT RESERVATION ORDERS </legend> </center>



  </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


    <div class="col-lg-12">
                        <div class="modal fade" id="newReg1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;"> Code of conduct count; </h4>
                                        </div>
                                        <div class="modal-body">
                                           <form role="form">


    <p style="color:#000; text-align:left; font-size:13px;">This affects the cost and reliability of the fleet operation.  reduced maintenance and less frustration to site supervisors.drivers and operators; all factors contributing to improved efficiencies and increased productivity within the various functional areas.</p>

          <p style="color:#000; text-align:left; font-size:13px;">This manual has been compiled for the specific purpose of establishing a uniform code of practice and conduct for all users, drivers and operators of the NTIHC’s motorised fleet. The content is directed at promoting knowledge and understanding of the disciplines important to the Fleet Management Services activities, with the ultimate aim of attaining optimum productivity and cost effectiveness, and eliminating vehicle abuse.
         <br>

         <p style="color:#000; text-align:left; font-size:13px;">  Practical application of the guidelines, in conjunction with specific standing orders/policies/instructions issued by Fleet department, will prolong machinery service life and minimize vehicle accidents/losses caused through ignorance and/or negligence. </p>

            <br>
          <p style="color:#000; text-align:left; font-size:14px;"> The Policy and Procedure document addresses most aspects of daily vehicle operations. It also includes information on the “professional” driving techniques necessary to develop “above average” competence. Generally, the various sections in the Policy and Procedure document will be used for courses of instruction presented by the Fleet Management Services. Future driver/operator performance standards will be measured in terms of knowledge and practical application of the subject matter.  </p>

            <br>
          <p style="color:#000; text-align:left; font-size:14px;"> All users of motorised equipment are required to comply with the contents of this document. Users must also strive to eliminate unnecessary expenses from the fleet maintenance bill. Responsible usage of the fleet, accepted and practised as a total concept, that is, eliminating vehicle abuse, will serve to produce benefits in terms of increased driver/operator safety and status, reduced stress in the working environment, improved public image and a reduced cost burden on the entity’s rate payers.  </p>

          <br>
         <p style="color:#000; text-align:left; font-size:14px;"> It is therefore imperative that User Unit and Office Managers effectively manage vehicle usage so as to attain the objectives of this Policy and Procedures document.  </p>

  </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!------/ end modals------>

     <div class="col-lg-12">
                        <div class="modal fade" id="newReg2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;">  </h4>
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
 <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> INTERNAL REFERRALS </legend> </center>
 
 <div class="col-sm-4" style="height:auto;">
 <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		CLIENTS PROCESSED FOR MEDICAL ATTENTION <span class="sr-only">60% Complete</span>
		</div>
	    </div>
       
<?php 
include_once("updatecmgt/config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
?>  
<a href="addrecord.php">Home page</a><br/><br/>

	<table width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>TIME STAMP</td>
		<td>CLIENT NO.</td>
		<td>SERVICE TYPE</td> 
		<td>REFER</td>
	</tr>
    
	<?php
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo "<td><a href=\"updatecmgt/edit.php?id=$res[RID]\">Edit</a> | <a href=\"updatecmgt/delete.php?id=$res[RID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
    
    </div> 
    
    <div class="col-sm-4" style="height:auto;">
 <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		CLIENTS PROCESSED FOR PREGNANCY RELATED SERVICES <span class="sr-only">60% Complete</span>
		</div>
	    </div>
           
<?php 
include_once("updatecmgt/config.php");
 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
?>
 
<a href="addrecord.php">Add New Data</a><br/><br/>

	<table width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>TIME STAMP</td>
		<td>CLIENT NO.</td>
		<td>SERVICE TYPE</td> 
		<td>UPDATE</td>
	</tr>
	<?php
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo "<td><a href=\"updatecmgt/edit.php?id=$res[RID]\">Edit</a> | <a href=\"updatecmgt/delete.php?id=$res[RID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
    </div>
    
    <div class="col-sm-4">
      <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		PROCESSED CLIENTS DUE FOR COUNSELLING SERVICES <span class="sr-only">60% Complete</span>
		</div>
	    </div>      
<?php 
include_once("updatecmgt/config.php"); 

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' ORDER BY RID DESC");
 
?>
  
 
<a href="addrecord.php">Add New Data</a><br/><br/>

	<table width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>TIME STAMP</td>
		<td>CLIENT NO.</td>
		<td>SERVICE TYPE</td> 
		<td>UPDATE</td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>"; 
		echo "<td><a href=\"updatecmgt/edit.php?id=$res[RID]\">Edit</a> | <a href=\"updatecmgt/delete.php?id=$res[RID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
    </div>


                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!------/ end modals------>
 <!------/ end modals------>

    <div class="col-lg-12">
                        <div class="modal fade" id="newReg3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;">  </h4>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> EDIT JOURNEY LOGS </legend> </center>


                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!------/ end modals------>

                       <div class="col-lg-12">
                        <div class="modal fade" id="newReg4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;">  </h4>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> MOTOR VEHICLES DUE FOR SERVICE </legend> </center>


                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!------/ end modals------>

     <div class="col-lg-12">
                        <div class="modal fade" id="newReg5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;">  </h4>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> TRANSPORT HIRE TRACKER </legend> </center>



                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!------/ end modals------>

     <div class="col-lg-12">
                        <div class="modal fade" id="newReg6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;">  </h4>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> LIST OF DRIVERS WITH DUE CONTRACTS </legend> </center>


                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!------/ end modals------>

     <div class="col-lg-12">
                        <div class="modal fade" id="newReg7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#ffffc6;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;">  </h4>
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
 
  <ul class="nav nav-tabs">
                                <li class="active"><a href="#home1" data-toggle="tab">Registration desk (RD)</a>
                                </li>
                                <li><a href="#profile1" data-toggle="tab">RD all records</a>
                                </li>
                                <li><a href="#messages1" data-toggle="tab">Clients demography (CD)</a>
                                </li>
                                <li><a href="#settings1" data-toggle="tab">CD all records</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home1">
 <br>
 
 
                                </div> </div> 
                                <div class="tab-pane fade" id="profile1">
                                </div> 
                                
                                 <form method="post" action="updatecmgt/edit3.php">
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


<p style="font-weight:bold; text-align:left;">REGISTRATION DESK RECORDS (MAIN SERVER STORAGE)</p>

	 <div id="work" style="width:100%; font-weight:normal;">

    <table id="example6" class="table table-striped table-bordered" >
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
 
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration ORDER BY RID DESC");
 
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
		echo "<td><a href=\"updatecmgt/delete3.php?id=$res[RID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Truncate</a></td>";			
	}
	?>
	</tbody>
  </table> 
                                </div>
                                <div class="tab-pane fade" id="messages1">
                                    <h4>..</h4>
                                    ...
                                </div>
                                <div class="tab-pane fade" id="settings1">
                                    <h4>..</h4>
                                    ..
                                </div>
                            </div>
                      
  
                              <div class="col-sm-12">
      	                      </div> 

                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!------/ end modals------>

     <div class="col-lg-12">
                        <div class="modal fade" id="newReg8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;"> CONTACT US </h4>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> REPORT TO FLEET ADMIN </legend> </center>

                                            <div class="form-group">
                                            <label>FROM</label>
                                            <input type="text" id="SENDERNAME" name="SENDERNAME" placeholder="Your Name" class="form-control" required="required">
                                            <p class="help-block">Full sender name.</p>
                                            </div>

                                            <div class="form-group">
                                            <label>PHONE CONTACT</label>
                                            <input type="alphanumeric" id="PHONECONTACT" name="PHONECONTACT" placeholder="Your Name" class="form-control" required="required">
                                            <p class="help-block">Sender phone number.</p>
                                            </div>
                                            <div class="form-group">
                                            <label>E-MAIL</label>
                                            <input type="text" id="EMAIL_sender" name="EMAIL_sender" placeholder="Your Name" class="form-control" required="required">
                                            <p class="help-block">E-mail account.</p>
                                            </div>
                                            <div class="form-group">
                                            <label>BODY</label>
                                            <textarea id="COMMENT" name="COMMENT"class="form-control"placeholder="Edit Your Message Here....."></textarea>
                                            <p class="help-block">Talk to admin.</p>
                                             </div>

                       <input type="button" value="Post Complait">

                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!------/ end modals------>

   <div class="col-lg-12">
                        <div class="modal fade" id="ntihcmessager" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;"> MESSAGER </h4>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> TODAY'S POSTS </legend> </center>








                                           </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <!------/ end modals------>
    <div class="col-lg-12">
                        <div class="modal fade" id="uiregister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog2">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3" style="text-align:center;"> New user registration</h4>
                                        </div>
                                        <div class="modal-body"> 
          
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-12">
                        <div class="modal fade" id="replenishFuel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4" style="text-align:center;"> </h4>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> FUEL REPLENISHMENT REQUISITION </legend> </center>
<form class="form-horizontal" style="height:auto;">
                
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Order Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="REPLENISHREQUESTEDATE" name="REPLENISHREQUESTEDATE"  value="<?php echo date('d-m-y'); ?>"  class="form-control">
                    </div>
                </div>
                <br> <br><br> <br>
                <p style="font-size:13px; font-weight:normal;">This is to request for replenishment of the following fuel / lubricants cards due to the minimum levels 
                notified, Below is a summary of current fuel required for immediate facilitation of the entity logistics operations.</p>
                <!-- /.form-group -->
                </div>
                 <div class="col-sm-12">
                  
                <input type="button" onClick="addRow18('mytable4')" value="Add" />
     <input type="button" onClick="deleteRow17('mytable4')" value="(Delete)" />
     <input type="hidden" id="mytable_rows2" value="0">
<br> <br>
  <table class="table table-striped" id="mytable4">
    <thead>
      <tr>
      <th>*</th>
   <th>CARD NAME</th>
   <th>CURRENCY</th>
   <th>AMOUNT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  </div>
                   <script>
  function addRow18(tableId){
  
   var  s1a = '<select name="cardname" id="cardname_'+rowCount+'" required="required" '+ 
	           'style= "height:20px; width:100%; margin-left:-5px; background-color:#fff" >'+
			    '<?php $conn = new mysqli("localhost", "root", "", "fleet"); 
					   $result = $conn->query("SELECT * FROM fuelcards");
					   echo '<option></option>';
					   while($row = $result->fetch_assoc()) {  echo '<option>'.$row['CARDNAME'].'</option>'; } ?>'+'</Select>';		
					    

	 var  s2b =  '<select name="currency" required="required"  id="currency_'+rowCount+'"'+
                'style= " margin-left:-5px; width:100%; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="debit" id="debit_'+rowCount+'"  required="required" '+
                'style= " margin-left:-5px; width:100%; background-color:#fff;" >';


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

  function deleteRow18(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="cardname_"+x;
          table.rows[x].cells[2].childNodes[0].id="currency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="debit_"+x;
          }
           document.getElementById('mytable_rows4').value=rowCount-1;
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
                
               <br><br><br>  <br>   <br> 
               
               <p style="font-weight:bold; font-size:13px;">Summary of current fuel available</p>
              
                <div id="work" style="width:100%;">
                
             
             
    <table id="example4" class="table table-striped table-bordered"  style="font-size:90%; font-weight:normal;" cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No</th>
              <th>CARD ID</th>
              <th>CARD NAME</th>
              <th>MINIMUM</th> 
              <th>AVAILABLE</th>  
              <th>% DECREASE</th>  
            </tr>
        </thead>
        <tfoot> 
        <tbody>
<?php

require('php/configfleet.php');
$sql = "SELECT * FROM fuelcards ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){ 
  echo'<tr>'.
       '<td>'.$x.'</td>'.
	      '<td>'.$row['CARDIDENTITYNO'].'</td>'.
          '<td>'.$row['CARDNAME'].'</td>'.
	      '<td>'.$row['MINFUELLEVEL'].'</td>'.
		  '<td>'.$row['FUELAVAILABLE'].'</td>'.  
		  '<td>'.$row['PERCENTAGEDECREASE'].'</td>'.  
   '</tr>';
$x=$x+1;

 }

 ?>
	  </tbody>
  </table>  
  </div></div>

  <div class="col-sm-12">   
  
    <br>   <br> 
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Prepared by</label>
                    <div class="col-sm-8">
                        <input type="text" name="APPLICANTNAME" id="APPLICANTNAME"  class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
                <br>   <br> 
               
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
        Note: This is an electronic form, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>
 
         <input type="submit" name="button" id="button" value="Submit record" />
 
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
                </div>
                </div>
                </div>   
                </div>
                </div>
                </div>
                </div></div> 
                            </div>
                        </div>
                    </div>
                </div>

         <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information asnd Health Centre</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->

			    <!-- END PAGE LEVEL SCRIPTS -->
 <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
 <script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script> 
 
<script>
  function postvalues(tis){
  var dsx = tis.split("__");
  $("#REGISTRATIONNO").val(dsx[0]);
  $("#PRODUCT").val(dsx[1]);
  $("#LITRE").val(dsx[2]);
  $("#APPROVEDDATE1").val(dsx[3]);
  $("#DEPARTRMENT_FR").val(dsx[4]); 
  $("#LUBRICANT").val(dsx[5]);
  $("#PURPOSEOFCONSUMPTION").val(dsx[6]);
  $("#TYPE").val(dsx[7]); 
  $("#INITIATEDBY").val(dsx[8]);
  $("#CREATEDDATE").val(dsx[9]); 
  $("#DRIVER").val(dsx[10]); 
  $("#AUTHORISERNAME").val(dsx[11]); 
  $("#APPROVERRNAME").val(dsx[12]); 
  $("#APPROVERCOMMENT").val(dsx[13]);  
  $("#IDFX").val(dsx[14]);
  }
  </script> 
       
    <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="assets/js/validationInit.js"></script>
    <script>
        $(function () { formValidation(); });
        </script>
     <!--END PAGE LEVEL SCRIPTS -->
  
   </body>
</html>

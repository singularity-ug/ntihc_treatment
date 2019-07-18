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


   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
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
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 5,
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
	  "iDisplayLength": 3,
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
 
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="assets/libs/less.js/2.7.1/less.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />
  </head>

         
                    <!-- /#left -->
                     <!--PAGE CONTENT --> 
        <div id="content">
            <div class="outer">
                    <div class="inner bg-light lter5" style="height:auto;">
                    <div class="text-left"> 
                     <div class="row">
                     <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center;">
                    NAGURU TEENAGE INFORMATION AND HEALTH CENTER </h1>
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
                                    <li class="active"><a href="dashboard.php" style="border: 2px solid #000; padding: 10.5px; color: #000000;">Dashboard</a></li>
                                      <li><a href="fleetadmin.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i>Home</a></li>
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;">
                                            Quick links<b class="caret"></b>  </a>
                                        <ul class="dropdown-menu">
                                         <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#notificationModal" style="color: #000;border: 2px solid #000; text-align:left;"> </button> <i class="icon-lock icon-white"></i>Motorised equipments by type and functional status</a></li>
                                      <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#buttonedModal " style="color: #000;border: 2px solid #000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Hire a vehicle</a></li>
                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#formModal " style="color: #000;border: 2px solid #000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Fuel and lubricants requistion</a></li>
                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal " style="color: #000;border: 2px solid #000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Accident form</a></li>

                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal1 " style="color: #000;border: 2px solid #000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Defect form</a></li>
                                        <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal2 " style="color: #000;border: 2px solid #000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Asset acknoledgement form</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal3 " style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; background-color:#f8f8f8; text-align:left;"> </button> <i class="icon-lock icon-white"></i>Add vehicle</a></li>
                                    </div>
 
                                  </a></li>
                                </ul>
                                <!-- /.nav -->
                            </div>  
            </header>
            <div id="div-5" class="accordion-body collapse in body"> 
            
              <div class="col-sm-12" >    
      
 <br>
     <div class="col-sm-3">
 <div class="col-sm-6" >
				<div class="thumbnail" style="background-color:#8bcf3f; border-radius:11px;">
	 <a href="fleetgeneral.php"><img src="assets/sysicons/imaggges.jpg" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <!-- /thumbnail -->
                 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">General</p>
                </div>

				<div class="thumbnail" style="background-color: #f4cb55; border-radius:11px;">
	 <a href="#"><img src="assets/sysicons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">Drivers</p>
                 <!-- /thumbnail -->
                </div>


				<div class="thumbnail" style="background-color: #fb455f; border-radius:11px;">
	 <a href="fuellogs.php"><img src="assets/sysicons/iconfuelimages.jpg" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <!-- /thumbnail -->
                 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">Fuel logs</p>
                </div>
                </div>


     <div class="col-sm-6">
				<div class="thumbnail" style="background-color: #fb455f; border-radius:11px;">
	 <a href="#"><img src="assets/sysicons/auto-body-icon.png" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">Maintenance</p>
                 <!-- /thumbnail -->
                </div>

				<div class="thumbnail" style="background-color: #8bcf3f; border-radius:11px;">
	 <a href="#"><img src="assets/sysicons/iffmages.png" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <!-- /thumbnail -->
                 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">Accidents</p>
                </div>

				<div class="thumbnail" style="background-color: #f4cb55; border-radius:11px;">
	 <a href="#"><img src="assets/sysicons/insuranceimages.jpg" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">Insurance</p>
                 <!-- /thumbnail -->
                </div>
                </div>
                </div>

      <div class="col-sm-5" style=" border-radius:11px; height:auto; background-color:#fffff;">
      <div id="work" style="width:100%;">

    <table id="example1" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No</th>
              <th>REG NO.</th>
              <th>TYPE</th>
              <th>STATUS</th>
              <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th>
              <th>REG NO.</th>
              <th>TYPE</th>
              <th>STATUS</th>
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php

require('php/configfleet.php');
$sql = "SELECT * FROM motorisedequipments ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
 $vx = $row['REGISTRATIONNO']."__".$row['TYPE']."__".$row['MAKE']."__".$row['MODEL']."__".$row['YOM']."__".$row['POWER']."__"
 .$row['ENGINE_NO']."__".$row['CHASSIS_NO']."__".$row['CURRENTAGE']."__".$row['FUNCTIONALSTATUS']."__".$row['SEATINGCAPACITY']."__".$row['FUELTYPE']."__"
 .$row['CATEGORY']."__".$row['ASSETIMAGE']."__".$row['HOLDSTATUS']."__".$row['ODOMETERSTATUS']."__".$row['ACQUISITIONDATE']."__".$row['SUPPLIEDBY']."__"
 .$row['PURCHASECOST']."__".$row['SUPPLIEDBY']."__".$row['id'];
  echo'<tr>'.
       '<td>'.$x.'</td>'.
	      '<td>'.$row['REGISTRATIONNO'].'</td>'.
		  '<td>'.$row['TYPE'].'</td>'.
		  '<td>'.$row['FUNCTIONALSTATUS'].'</td>'.
		     '<td><input type="button" style="background-color:#fb455f;"  id="'.$vx.'" onclick="postvalues(this.id)" value="POST"></td>'.
   '</tr>';
$x=$x+1;

 }

 ?>
	  </tbody>
  </table> 
 
 
 <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 1px solid #eeeeee; height:auto;">

                                <div class="carousel-inner">
                                    <div class="item active">
                                    <img src="assets/ftlimg/Slider02.png" width="814" height="440"  alt="" class="img-u image-responsive" />
                                   </div>
                                    <div class="item">
                                     <img src="assets/ftlimg/Slider03.png" width="814" height="440" alt="" class="img-u image-responsive" />
                                    </div>
                                    <div class="item">
                                     <img src="assets/ftlimg/Slider04.png" width="814" height="440"alt="" class="img-u image-responsive" />
                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div> 
                     <!-- /. ROW  -->                   
    
    
    
    
                   
 

    </div>
    </div>

 <div class="col-sm-4">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">General</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Profile</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Messages</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Settings</a>
                                </li>
                            </ul>

                            <div class="tab-content"/>
                                <div class="tab-pane fade in active" id="home">
                 <div class="col-sm-12" style=" border-radius:11px; border:1px solid #eee;">
                               <form>

         <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Registration number</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control"  id="REGISTRATIONNO" name="EMPLOYEENAME"  disabled
                        style="text-transform:uppercase;font-size: 11px;background-color:#f9f9f9;"/>
                </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Make</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control"   name="MAKE" id="MAKE" data-placement="top" disabled="disabled"
                    style="text-transform:uppercase;font-size: 11px; background-color:#f9f9f9;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Type</label>
                    <div class="col-sm-7">
                         <input type="text" class="form-control"  id="TYPE" name="TYPE"
                        style="text-transform:uppercase;font-size: 11px;background-color:#f9f9f9;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Model</label>
                    <div class="col-sm-7">
                   <input type="text" class="form-control"   name="MODEL" id="MODEL" data-placement="top" disabled
                   style="text-transform:uppercase;font-size: 11px;background-color:#f9f9f9;"/>
                   </div>
                </div>

                <!-- /.form-group -->
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">color</label>
                    <div class="col-sm-7">
                   <input type="text" class="form-control"   name="COLOR" id="COLOR" data-placement="top" disabled
                   style="font-size: 11px; text-transform:uppercase;background-color:#f9f9f9;"/>
                   </div>
                </div>

                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Country </label>
                    <div class="col-sm-7">
                   <input type="numeric" class="form-control"   name="COUNTRY_OFMANUFACTURE" id="COUNTRY_OFMANUFACTURE" data-placement="top" disabled
                   style="font-size: 11px; background-color:#f9f9f9;"/>
                   </div>
                </div>

                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Year of manufacture</label>
                    <div class="col-sm-7">
                   <input type="numeric" class="form-control"   name="COLOR" id="COLOR" data-placement="top" disabled
                   style="font-size: 11px; background-color:#f9f9f9;"/>
                   </div>
                </div>

                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Current age</label>
                    <div class="col-sm-7">
                   <input type="numeric" class="form-control"   name="ASSETAGE" id="ASSETAGE" data-placement="top" disabled
                   style="font-size: 11px; background-color:#f9f9f9;"/>
                   </div>
                </div>


                 <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Power</label>
                    <div class="col-sm-7">
                   <input type="text" class="form-control"   name="POWER" id="POWER" data-placement="top" disabled
                   style="font-size: 11px; background-color:#f9f9f9;"/>
                   </div>
                </div>

                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Category</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control"  id="CATEGORY" name="CATEGORY"  disabled
                        style="text-transform:uppercase;font-size: 11px;background-color:#f9f9f9;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Seating capacity</label>
                    <div class="col-sm-7">
                   <input type="numeric" class="form-control"   name="SEATINGCAPACITY" id="SEATINGCAPACITY"   data-placement="top" disabled
                   style="font-size: 11px; background-color:#f9f9f9;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Functional status</label>
                    <div class="col-sm-7">
                         <input type="text" class="form-control"  id="FUNCTIONALSTATUS" name="FUNCTIONALSTATUS"  disabled
                        style="text-transform:uppercase;font-size: 11px;background-color:#f9f9f9;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Fuel type</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control"   name="FUELTYPE" id="FUELTYPE" data-placement="top" disabled
                   style="font-size: 11px; text-align:center;text-transform:uppercase;background-color:#f9f9f9;"/>
                   </div>
                   </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Engine number</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control"   name="ENGINE_NO" id="ENGINE_NO" disabled
                        style="text-transform:uppercase;font-size: 11px;background-color:#f9f9f9;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Chasis number</label>
                    <div class="col-sm-7">
                   <input type="text" class="form-control"   name="CHASSIS_NO" id="CHASSIS_NO" data-placement="top" disabled
                   style="font-size: 11px; text-transform:uppercase;background-color:#f9f9f9;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Odometer status</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control"   name="ODOMETERSTATUS" id="ODOMETERSTATUS" data-placement="top" disabled
                   style="font-size: 11px; background-color:#f9f9f9; "/>
                   </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Odometer type</label>
                    <div class="col-sm-7">
                   <input type="text" class="form-control"   name="ODOMETERTYPE" id="ODOMETERTYPE" data-placement="top" disabled
                   style="font-size: 11px; background-color:#f9f9f9;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Acquisition date</label>
                    <div class="col-sm-7">
                   <input type="text" class="form-control"   name="ACQUISITIONDATE" id="ACQUISITIONDATE" data-placement="top" disabled
                   style="font-size: 11px; background-color:#f9f9f9;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Purchase cost</label>
                    <div class="col-sm-7">
                   <input type="numeric" class="form-control"   name="PURCHASECOST" id="PURCHASECOST"  data-placement="top" disabled
                   style="font-size: 11px; background-color:#f9f9f9;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Purchased / Leased from</label>
                    <div class="col-sm-7">
                   <input type="text" class="form-control"   name="SUPPLIEDBY" id="SUPPLIEDBY"  data-placement="top" disabled
                   style="font-size: 11px; text-align:left;text-transform:uppercase;background-color:#f9f9f9;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                 

                </div>
                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Profile Tab</h4>
                                   ..
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Messages Tab</h4>
                                    ...
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Settings Tab</h4>
                                    ..
                                </div>
                            </div>
                        </div>
 </div></div>
     </div>
<div class="row">
  <div class="col-lg-12">
    <div class="box">
      <header>
	<h5> . </small></h5>
     </div>
  
     <br>  <br>   
     <div class="col-sm-3" > 
     <div class="col-sm-6" >
     <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">Total number of vehicles</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments")) {

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
     
    <br> <br> <p></p>
    <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">Total number of vehicles</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments")) {

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
     </div>  
	  
   <div class="col-sm-6" > 
    <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">Total number disposed</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments WHERE FUNCTIONALSTATUS ='DISPOSED'")) {

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
     <br> <br> <p></p>
  <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">Total number of vehicles</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments")) {

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
     
	 </div>  </div>  
     
  <div class="col-sm-5" >
     <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;">
        <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		Summary of motorised equipments by body description<span class="sr-only">60% Complete</span>
		</div>
	    </div>

   <table id="example2" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No.</th>
              <th>TYPE</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No.</th>
              <th>TYPE</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php

require('php/configfleet.php');
$sql = "SELECT COUNT(id), TYPE FROM motorisedequipments GROUP BY TYPE ORDER BY COUNT(id) DESC ";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.
	      '<td>'.$row['TYPE'].'</td>'.
	      '<td>'.$row['COUNT(id)'].'</td>'.
		     '<td><input type="button" id="'.$vx.'" onclick="postvalues(this.id)" value="OPEN"></td>'.
   '</tr>';
$x=$x+1;

 }

 ?>
	  </tbody>
  </table> 
     
     </div>
     </div>

  <div class="col-sm-4" >    
     <div class="col-sm-4" >
     <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">.</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments")) {

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
     
    <br> <br> <p></p>
    <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">.</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments")) {

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
     </div>  
	  
   <div class="col-sm-4" > 
    <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">.</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments WHERE FUNCTIONALSTATUS ='DISPOSED'")) {

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
     <br> <br> <p></p>
  <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">.</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments")) {

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
     </div>  
     
   <div class="col-sm-4" > 
    <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">.</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments WHERE FUNCTIONALSTATUS ='DISPOSED'")) {

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
     <br> <br> <p></p>
  <div class="panel-body" style=" border-radius:11px; height:auto; background-color:#fff; border:1px solid #eee;"> 
    <p style="text-align:center; color: #000; font-size:13px; margin-left:-10px;">.</p>
    <p style=" text-align:center; font-weight:bold; font-size:30px;  color: #000;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, REGISTRATIONNO FROM motorisedequipments")) {

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
     </div>
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

                <div id="work" style="width:100%;">
    <table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No.</th>
              <th>TYPE</th>
              <th>FUNCTIONAL STATUS</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No.</th>
              <th>TYPE</th>
              <th>FUNCTIONAL STATUS</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php

require('php/configfleet.php');
$sql = "SELECT COUNT(id), TYPE, FUNCTIONALSTATUS FROM motorisedequipments GROUP BY TYPE , FUNCTIONALSTATUS ORDER BY COUNT(id) DESC ";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.
	      '<td>'.$row['TYPE'].'</td>'.
		  '<td>'.$row['FUNCTIONALSTATUS'].'</td>'.
	      '<td>'.$row['COUNT(id)'].'</td>'.
		     '<td><input type="button" style="background-color:#f9f9f9;"  id="'.$vx.'" onclick="postvalues(this.id)" value="POST"></td>'.
   '</tr>';
$x=$x+1;

 }

 ?>
	  </tbody>
  </table>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> DEFECT FORM </legend> </center>



            <P style="text-align:left;">Waiting for administrator's format </P>



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
                        <div class="modal fade" id="uiModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;">MOTORISED ASSETS ACKNOLEDGEMENT FORM</legend> </center>
          <P style="text-align:left;">Waiting for admin format </P>



        </div>
        <div class="col-sm-12">
        <br>
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> FUEL REQUISITON TRACKER </legend> </center>


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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> DUE INSURANCE NOTIFICATIONS BY VEHICLE </legend> </center>


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
                        <div class="modal fade" id="uiModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3"> </h4>
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
  <center> <legend style="color:#000; font-weight:bold;font-size:11px;"> VEHICLES AND MOTORISED EQUIPMENTS REGISTERATION FORM</legend> </center> 


          <form class="form-horizontal" action="fleet_processvehicle.php" method="POST" style="height:auto;">

                <div class="col-sm-5">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Registration number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  id="REGISTRATIONNO" name="EMPLOYEENAME"  required="required"
                        style="text-transform:uppercase;font-size: 11px;"/>
                </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Make</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="MAKE" id="MAKE" data-placement="top" required="required"
                    style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                    <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Type</label>
                    <div class="col-sm-8">
                        <select class="form-control"  id="TYPE" name="TYPE"  required="required"
                        style="text-transform:uppercase;font-size: 11px;"/>
                        <option> </option>
                        <option> PICKUP/DC</option>
                        <option> MIN BUS</option>
                        <option> SALOON</option>
                        <option> STATION WAGON</option>
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Model</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"   name="MODEL" id="MODEL" data-placement="top" required="required"
                   style="text-transform:uppercase;font-size: 11px;"/>
                   </div>
                </div>

                <!-- /.form-group -->
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">color</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"   name="COLOR" id="COLOR" data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;text-transform:uppercase;"/>
                   </div>
                </div>

                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Year of manufacture</label>
                    <div class="col-sm-8">
                   <input type="numeric" class="form-control"   name="COLOR" id="COLOR" data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;"/>
                   </div>
                </div>

                <!-- /.form-group -->

                 <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Power</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"   name="POWER" id="POWER" data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;"/>
                   </div>
                </div>

                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Category</label>
                    <div class="col-sm-8">
                        <select class="form-control"  id="CATEGORY" name="CATEGORY"  required="required"
                        style="text-transform:uppercase;font-size: 11px;"/>
                        <option> </option>
                        <option> MANAGERIAL</option>
                        <option> SERVICE</option>

                       </select>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Seating capacity</label>
                    <div class="col-sm-8">
                   <input type="numeric" class="form-control"   name="SEATINGCAPACITY" id="SEATINGCAPACITY" placeholder="like: 4,6,8 .." data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Functional status</label>
                    <div class="col-sm-8">
                        <select class="form-control"  id="FUNCTIONALSTATUS" name="FUNCTIONALSTATUS"  required="required"
                        style="text-transform:uppercase;font-size: 11px;"/>
                        <option value="RUNNING"> RUNNING</option>
                        <option>DOWN </option>
                        <option>REPAIRABLE </option>
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Fuel type</label>
                    <div class="col-sm-8">
                   <select class="form-control"   name="FUELTYPE" id="FUELTYPE" data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;text-transform:uppercase;"/>
                   <option value=""> </option>
                        <option>DIESEL </option>
                        <option>PETROL </option>
                        </select>
                   </div>
                   </div>
                <!-- /.form-group -->


                 </div>
                <!-- /.form-group -->


                <div class="col-sm-7">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-3">Engine number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"   name="ENGINE_NO" id="ENGINE_NO"   required="required"
                        style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Chasis number</label>
                    <div class="col-sm-9">
                   <input type="text" class="form-control"   name="CHASSIS_NO" id="CHASSIS_NO" data-placement="top" required="required"
                   style="font-size: 11px; text-align:left;text-transform:uppercase;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Odometer status</label>
                    <div class="col-sm-9">
                   <select class="form-control"   name="ODOMETERSTATUS" id="ODOMETERSTATUS" data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;"/>
                   <option value="OPERATIONAL">OPERATIONAL</option>
                   <option>NOT OPERATIONAL</option>
                   </select>
                   </div>
                </div>
                <!-- /.form-group -->


            <label>Odometer type </label>
                    <div class="switch switch-blue">
                    <input type="radio" class="switch-input" name="ODOMETERTYPE" value="KM" id="KM" checked="">
					<label for="KM" class="switch-label switch-label-off">KM</label>
					<input type="radio" class="switch-input" name="ODOMETERTYPE" value="HRS" id="HRS">
					<label for="HRS" class="switch-label switch-label-off">HRS</label>
					<input type="radio" class="switch-input" name="ODOMETERTYPE" value="MILES" id="MILES">
					<label for="MILES" class="switch-label switch-label-off">MILES</label>
					<span class="switch-selection"></span>
			</div>	<br>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Acquisition date</label>
                    <div class="col-sm-9">
                   <input type="text" class="form-control"   name="ACQUISITIONDATE" id="ACQUISITIONDATE" placeholder="dd / mm / yyyy" data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Purchase cost</label>
                    <div class="col-sm-9">
                   <input type="numeric" class="form-control"   name="PURCHASECOST" id="PURCHASECOST"  data-placement="top" required="required"
                   style="font-size: 11px; text-align:center;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-3">Purchased / Leased from</label>
                    <div class="col-sm-9">
                   <input type="text" class="form-control"   name="SUPPLIEDBY" id="SUPPLIEDBY"  data-placement="top" required="required"
                   style="font-size: 11px; text-align:left;text-transform:uppercase;"/>
                   </div>
                </div>
                <!-- /.form-group -->

                   <label>Holding type </label>
                    <div class="switch switch-blue">
                    <input type="radio" class="switch-input" name="HOLDSTATUS" value="PURCHASED" id="PURCHASED" checked="">
					<label for="PURCHASED" class="switch-label switch-label-off">Purchased</label>
					<input type="radio" class="switch-input" name="HOLDSTATUS" value="LEASED" id="LEASED">
					<label for="LEASED" class="switch-label switch-label-off">Leased</label>
					<input type="radio" class="switch-input" name="HOLDSTATUS" value="SPECIAL PROJECT" id="SPECIAL PROJECT">
					<label for="SPECIAL PROJECT" class="switch-label switch-label-off">Project asset</label>
                    <br>
                    <input type="radio" class="switch-input" name="HOLDSTATUS" value="MILES" id="TEMPORARY">
					<label for="TEMPORARY" class="switch-label switch-label-off">Temporary</label>
					<span class="switch-selection"></span>
			        </div>	<br>
                
                    </div>
                    
                    
                    </div>

        <div class="col-sm-12">
         <br>
         <input type="submit" name="button" id="button" value="Submit record" />
         </form>
         </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    </div>
                  </div>
                </div></div>
                </div>   </div>
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
  $("#TYPE").val(dsx[1]);
  $("#MAKE").val(dsx[2]);
  $("#MODEL").val(dsx[3]);
  $("#YOM").val(dsx[4]);
  $("#POWER").val(dsx[5]);
  $("#ENGINE_NO").val(dsx[6]);
  $("#CHASSIS_NO").val(dsx[7]);
  $("#CURRENTAGE").val(dsx[8]);
  $("#FUNCTIONALSTATUS").val(dsx[9]);
  $("#SEATINGCAPACITY").val(dsx[10]);
  $("#FUELTYPE").val(dsx[11]);
  $("#CATEGORY").val(dsx[12]);
  $("#ASSETIMAGE").val(dsx[13]);
  $("#ODOMETERSTATUS").val(dsx[14]);
  $("#ACQUISITIONDATE").val(dsx[15]);
  $("#SUPPLIEDBY").val(dsx[16]);
  $("#PURCHASECOST").val(dsx[17]); 
  $("#IDFX").val(dsx[18]);
  }
  </script>
       
  
  
   </body>
</html>

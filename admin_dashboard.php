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
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'NUMBER OF PROPERTIES BY OFFICER RESPONSIBLE'
		},
		{extend :'pdf',
		 title:'NUMBER OF PROPERTIES BY OFFICER RESPONSIBLE'
		},
		{extend :'print',
		 title:'NUMBER OF PROPERTIES BY OFFICER RESPONSIBLE'
		}
        ]
    } );
  } );
  </script>


  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 10,
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
                                    <li class="active"><a href="dashboard.php" style="background-color:#518dc1;border: 2px solid #f4f4f4;padding: 10.5px; text-align:left;color:#fff;">Dashboard</a></li>
                                    <li><a href="admin_dashboard.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;background-color:#8bcf3f;"><i class="icon-lock icon-white"></i>Home</a></li> 
                                      
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;">
                                            Quick links<b class="caret"></b>  </a>
                                        <ul class="dropdown-menu">
                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#notificationModal" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Transport booking</a></li>
                                       
                                      <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#buttonedModal " style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Hire a vehicle</a></li>
                                      
                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#formModal " style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Fuel and lubricants requistion</a></li>
                                       
                                       <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal " style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Accident form</a></li>
                                        
                                        <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#uiModal2 " style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"> </button> <i class="icon-lock icon-white"></i>Asset acknoledgement form</a></li>
                                        </ul>
                                    </li> 
 <li><a href="#" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"><i class="icon-lock icon-white"></i>Staff contacts</a></li>
 <li><a href="#" style="border: 2px solid #f4f4f4; padding: 10.5px; color:#000;text-align:left;"><i class="icon-lock icon-white"></i>Appraisal form</a></li> 
                                      
                                      
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
	 <a href="human_resource.php"><img src="assets/sysicons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <!-- /thumbnail -->
                 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">HUMAN RESOURCE</p> 
                </div>
                 
				<div class="thumbnail" style="background-color: #f4cb55; border-radius:11px;">
	 <a href="#"><img src="database icons/press-nozbe.png" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">PROCUREMENT</p> 
                 <!-- /thumbnail -->
                </div>
                
                
				<div class="thumbnail" style="background-color: #fb455f; border-radius:11px;">
	 <a href="#"><img src="database icons/Nepal+facing+site_Procurement+Icon.png" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <!-- /thumbnail -->
                 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">STORES</p> 
                </div>
                </div>
                 

     <div class="col-sm-6"> 
				<div class="thumbnail" style="background-color: #fb455f; border-radius:11px;">
	 <a href="fleetadmin.php"><img src="assets/sysicons/svccimages.jpg" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">FLEET MANAGEMENT</p> 
                 <!-- /thumbnail -->
                </div>
          
				<div class="thumbnail" style="background-color: #8bcf3f; border-radius:11px;">
	 <a href=<button data-toggle="modal" data-target="#uiModal1"> </button><img src="database icons/admin.jpg" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <!-- /thumbnail -->
                 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">ADMIN</p> 
                </div>
                 
               
				<div class="thumbnail" style="background-color: #f4cb55; border-radius:11px;">
	 <a href="admin_dashboard.php"><img src="database icons/report-icon-23.png" width="80" height="140" alt="Marcel Newman" class="img-circle" >
				 <p style="color:#000; font-weight:bold;text-align:center; font-size:13px;">REPORTS</p> 
                 <!-- /thumbnail -->
                </div>
                </div> 
                </div> 
                 
      <div class="col-sm-9"   style=" border-radius:11px; height:410px;; background-color:#000;">
      <br>
           <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		<span class="sr-only">60% Complete</span>
		</div>
	    </div>

                            <div id="reviews" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner" style="background-color: #FFFFFF;height: 331px;">
                                        <div class="item active">

                                            <div class="col-sm-10 col-md-offset-1">
                                            
                                           <h4><i class=""><img src="assets/sysicons/dialog-warning-2400px.png" width="50" height="60"></i> ....<i class=""></i></h4>                                           <p style="color:#000000; text-align:center; font-weight:bold; font-size:36px; margin-top:-35px;">0 </p>
                                            <h5 class="pull-right">      <strong class="c-black">....</strong></h5>
                                                <div class="user-img pull-right"> 
                                                  
                                                </div>
                                                <h5 class="pull-right"> <strong class="c-black">....</strong></h5>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1"> 
                                                <h4><i class=" "><img src="assets/sysicons/dialog-warning-2400px.png" width="50" height="60"></i> .... <i class=" "></i></h4>                                       <p style="color:#000000; text-align:center; font-weight:bold; font-size:36px; margin-top:-35px;">0 </p>
                                                 <h5 class="pull-right">  <strong class="c-black">....</strong></h5>
                                                 <div class="user-img pull-right"> 
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">.....</strong></h5>
                                            </div> 
                                        </div>
                                        
                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">

                                        <h4><i class=" "><img src="assets/sysicons/dialog-warning-2400px.png" width="50" height="60"></i>......<i class=" "></i></h4>
                                                 <p style="color:#000000; text-align:center; font-weight:bold; font-size:36px; margin-top:-35px;">0 </p>
                                                <div class="user.png pull-right"> 
                                                
                                                </div>
                                                <h5 class="pull-right"><strong class="c-black">view</strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active"></li>
                                        <li data-target="#reviews" data-slide-to="1"></li>
                                        <li data-target="#reviews" data-slide-to="2"></li>
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->
 <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
		<span class="sr-only">60% Complete</span>
		</div>
	    </div>
     </div> 
       
                </div> 
 </div>
  
  
  
  
  
  
  
  <div class="row">
  <div class="col-lg-12">
    <div class="box">
      <header>
	<h5> . </small></h5>
     </div>
   
  
     <div class="col-sm-12" >
     <br> 
     <div class="panel-body" style=" border-radius:11px; height:100px; background-color:#FFFFFF;">
     <div class="dash-unit">
       
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> BOOK A VEHICLE</legend> </center>

            <form class="form-horizontal" style="height:auto;">
                <div class="col-sm-5">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">RSV Date</label>
                    <div class="col-sm-8">
                        <input type="date" id="datepicker" name="RSVDATE"  value="<?php echo date('d-m-y'); ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->
 
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">PF No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="PFILENUMBER" name="PFILENUMBER" required="required" data-placement="top" style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->
                
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="PHONECONTACT" name="PHONECONTACT" data-placement="top" required="required" style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                </div>  
                <!-- /.form-group --></div>


               <div class="col-sm-7">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Full name</label>
                    <div class="col-sm-8">
                        <input type="text" id="APPLICANTNAME" name="APPLICANTNAME" required="required" class="form-control"
                         style="text-transform:uppercase;font-size: 11px;">
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
                
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Book type</label>
                    <div class="col-sm-8">
                        <select class="form-control"  name="BOOKTYPE" id="BOOKTYPE"data-placement="top" style="font-size: 11px; text-align:center;"/>
                                <option value="PICK AND DROP">PICK AND DROP</option>
                <option value="ROUND TRIP">ROUND TRIP</option> 
                </select>
                    </div>
                </div>
                <!-- /.form-group -->
                </div>
                 
         <div class="col-sm-12">
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
                        <input type="text" id="DEPARTURE" name="DEPARTURE" value="HEAD QUARTER" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group --> 
                

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Destination</label>
                    <div class="col-sm-8">
                        <input type="text" id="DESTINATION" name="DESTINATION" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>
                    </div>
                 </div>
               <!-- /.form-group -->
               </div>
                
               <div class="col-sm-6">
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Start time</label>
                    <div class="col-sm-8">  
                             <div class="input-group bootstrap-timepicker"> 
                             <span class="input-group-addon add-on"><i class="icon-time"></i></span>
                                <input class="form-control timepicker-default" type="text" name="STARTTIME" placeholder="00:00" style=" text-align:center;"/> 
                            </div>
 
                    </div>
                 </div>
               <!-- /.form-group --> </div>
               
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> End time</label>
                    <div class="col-sm-8">
                    <div class="input-group bootstrap-timepicker">
                    <span class="input-group-addon add-on"><i class="icon-time"></i></span>
                   <input class="form-control timepicker-default" type="text" id="ENDTIME" name="ENDTIME" placeholder="00:00" style=" text-align:center;"/> 
                            </div> 
                    </div>
                 </div>
               <!-- /.form-group --> 
                </div>
                
                <div class="col-sm-6">
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Prefered vehicle</label>
                    <div class="col-sm-8">
                    <select class="form-control" id="VEHICLECATEGORY" name="VEHICLECATEGORY"  data-placement="top" style="font-size: 11px; text-align:center;"/>
                                <option value="PICKUP /DC">PICKUP /DC</option>
                                <option value="MIN BUS">MIN BUS</option> 
                                <option value="STATION WAGON">STATION WAGON</option>
                                <option value="SALOON">SALOON</option> 
                </select>
                    </div> 
                 </div>
               <!-- /.form-group --> </div>
               
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> No. of passengers</label>
                    <div class="col-sm-8">
                        <input type="numeric" id="PASSENGERS" name="PASSENGERS" class="form-control" placeholder="like: 1, 2, 4" style="text-transform:uppercase;font-size: 11px; text-align:center;"/>
                    </div>
                 </div>
               <!-- /.form-group --> 
               
               
              </div>
            <br>
            <div class="col-sm-12">   

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic form, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>

         </form>
         <input type="submit" name="button" id="button" value="Make a reservation" />
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
                        <input type="text" class="form-control"  id="SERVICEPROVIDER" name="SERVICEPROVIDER" class="form-control" style="text-transform:uppercase;font-size: 11px;"/>  
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
                                <div class="modal-dialog8">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                           <center> <h4 class="modal-title" id="H3"> Select user </h4> </center>
                                        </div>
                                        <div class="modal-body">
 
                                           <form role="form">

                                          <li><a href="admin_dashboard.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i>Admin User 1: .</a></li>

                                          <br>
                                          
                                           <li><a href="admin_dashboard.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i>Admin User 2: .</a></li>

                                          <br>
                                          
                                           <li><a href="admin_dashboard.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i> Admin User 3: .</a></li>

                                          <br>
                                          
                                           <li><a href="admin_dashboard.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i> Admin User 4: .</a></li>

                                          <br>
                                          
                                           <li><a href="property_mgt.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i> Admin User 5: Property manager</a></li>

                                          <br>
                                          
                                           <li><a href="admin_dashboard.php" style="border: 2px solid #f4f4f4; padding: 10.5px; color: #000000; text-align:left;"><i class="icon-lock icon-white"></i> Admin User 6: .</a></li>

                                          <br>

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
                    </div>
                  </div>
                </div>
                   </div> </div></div>
                </div>
                   </div>
                 </div>
                </div>
              </div></div></div>

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
                 
   </body>
</html>  
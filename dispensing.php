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
 
		{extend :'pdf',
		 title:'myfile'
		} 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 8,
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
	  "iDisplayLength": 8,
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
	  "iDisplayLength": 8,
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
     $('#example5').DataTable( {
	  "iDisplayLength": 8,
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
     $('#example6').DataTable( {
	  "iDisplayLength": 8,
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
                 border: 1px solid black;
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
    <div class="col-lg-12" style="background-color:;" >
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
                                    <span class="icon-bar"></span>  </button>
                            <a href="" class="navbar-brand"><img src="" alt=""></a>    </header>
 
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
                                    <a href="index.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                        <span class="glyphicon glyphicon-comment"></span>                  
                                                          </a>      </div>
                            </div>

                            <div class="collapse navbar-collapse navbar-ex1-collapse"  style="background-color:#fff;">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="client_management.php" style="border: 2px solid #f4f4f4; padding:8.5px; color: #FFF; 
									background-color:#DD4B39; text-align:left;"> DASHBOARD</a></li>
									
                                      <li><a href="dispensing.php" style="border: 2px solid #f4f4f4; padding:8.5px; color: #000000; 
									  background-color:#f8f8f8; text-align:left;"> <i class="icon-lock icon-white"></i>HOME</a></li>
                                     
									  <li><a href=<button class="btn btn-warning" data-toggle="modal"  data-target="#newReg7" 
                                      style="border: 2px solid #f4f4f4; padding:8.5px; color: #000000; background-color:#f8f8f8; text-align:left;"> </button> 
                                      <i class="icon-lock icon-white"></i>Drugs</a></li>
									                  
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

   	<h1 class="page-header" style="text-align:center; color:black; border-style:none;">
				  NTIHC-DISPENSARY</h1>	
                
    <div class="col-sm-3" style="height:auto;" > 
    <div class="box-body">
                <div class="alert alert-danger alert-dismissible" style="background-color:#f39c12;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="glyphicon glyphicon-hand-up"></i> 0</h4>
                LIST OF CLIENTS DUE FOR DISPENSING. 
                </div> 
             
            <?php 
include_once("php/configpatientmgtdb.php"); 

    $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM prescription WHERE TIMESTAMP >='$date' AND CHECKAVAILABILITY ='NO'";

                     $result = $conn->query($sql);
                     $st ='<table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
                     <thead>
                     <tr>
                     <th>ID</th> 
                     <th>NTIHC-NO.</th>
					 <th>NAME</th>
                     <th>ACTION</th>
                     </tr>
                     </thead>
                     <tbody ">';
                     $seenid = ""; $x=1;
                     while($row = $result->fetch_assoc()) {
                       if ($seenid==$row['NTIHCNO']) {
                        
                       }
                       else{
                         $seenid = $row['NTIHCNO'];
                     $st=$st."<tr>".
	                 "<td>" . ($x++) . "</td>". 
                     "<td>" . $row['NTIHCNO'] . "</td>".
					 "<td>" . $row['CLIENTNAME'] . "</td>".
                     "<td>" . '<input type="button" style="width:100%; text-align:left;" id="'.$row['NTIHCNO'] .'______'.$row['SERVICE_EPISODE'] 
					 .'______'.$row['REQUESTINGUNIT'].'______'.$row['RECOMMENDEDDRUGS']. '" value="Click"  onclick="getClient(this.id)">' . "</td>".
		             "</tr>";
                   }
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?>  
    
    
    <div class="box-body"> 
    <br><br><br>
              <div class="alert alert-info alert-dismissible" style="background-color:#00a65a;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="glyphicon glyphicon-thumbs-down"></i> 0</h4>
                
              </div>
              <div class="alert alert-warning alert-dismissible" style="background-color: #dd4b39;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="glyphicon glyphicon-certificate"></i> 0</h4> 
                
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
  
  </div>  
  <div class="col-sm-6">  
  <form class="form-horizontal" method="post" action="update_dispenser.php" style="height:auto;">
   <div class="panel-body" style="border:1px solid #000; border-radius:11px; margin-top: -10px;">
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

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> PRESCRIPTION </legend> </center>

                <div class="col-sm-6">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
            <input type="text" class="form-control" readonly="readonly"  id="CREATEDDATE" value="<?php echo date('Y-m-d'); ?>" 
			style=" background-color:#fff; ">  
            </div>
                </div> 
                </div>  
                
                <div class="col-sm-6">
                <div class="form-group">
                     <label for="text1" class="control-label col-sm-4">Episode</label>
                     <div class="col-sm-8">  
                      <input type="text" class="form-control" id="SERVICE_EPISODE" name="SERVICE_EPISODE" readonly="readonly" 
                       style=" background-color:#fff;" >
                      </div></div></div>
                 
                  <br> <br> 
                  <div class="panel-body"> 
                           <div id="prescribed"> 
                           <table id="dataTable1" class="form" width='100%' border="1" style="background-color: transparent;">
                           <thead>
                           <tr>
          <th><label for="" class="label"> *</label>   </th>
          <th> <label for="DRUG" class="label"> DRUG</label> </th>
	      <th><label for="FREQUENCY" class="label">QTY</label>   </th>
		  <th><label for="TIMES" class="label">TIMES</label> </th>
		  <th><label for="PERIOD" class="label">PERIOD</label> </th>
          <th> <label for="QTYPRESCRIBED" class="label">TOTAL</label> </th>  
          <th><label for="UNITRATE" class="label">COST</label>  </th>
                              </tr>
                              </thead>
                              <tbody id="tablebody">
                                <tr id="1_rowdata" >
                                <td><input type="checkbox" required="required" checked="checked" /></td>
                                <td>
                                <select name="DRUGNAME" id="DRUGNAME" readonly="readonly" 
                                  style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff;"/>
                                  </select>
                                </td> 
                                
                               <td><input type="numeric" name="FREQUENCY" id="FREQUENCY" readonly="readonly" 
                               style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff;"/> 
                               </td>
                               
                                <td><input type="numeric" name="TIMES" id="TIMES" readonly="readonly" 
                               style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff;"/> 
                               </td>
                               
                               <td><input type="numeric" name="PERIOD" id="PERIOD" readonly="readonly" 
                               style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff;"/> 
                               </td>
                                
                               <td><input type="numeric" name="QTYPRESCRIBED" id="QTYPRESCRIBED" readonly="readonly" 
                               style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; font-weight:bold; background-color:#fff; "/> 
                               </td> 
                               <td><input type="double" name="UNITRATE" id="UNITRATE" readonly="readonly" 
                               style= 'margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff;'/>

                            </td>
                              </tr>
                      </tbody>
                      </table>
                      </div>
                    </div>
                    
                    <div class="col-sm-12">
                    <div class="form-group"> 
                    <div class="col-sm-12">
                    <textarea class="form-control wmd-input" rows="1" name="PROBLEMDESCRIPTION"  id="wmd-input" readonly="readonly" 
                     style=" background-color:#fff;" > </textarea>
                    </div>
                    </div> 
                    </div>   
                
                    
                 <div class="col-sm-7">
                 <div class="form-group" >
                        <label class="control-label col-sm-4" for="reportrange">Requested by</label>
                        <div class="col-sm-8"> 
                   <input type="text" class="form-control"  id="USERINITIAL" name="USERINITIAL" readonly="readonly" 
                    style=" background-color:#fff;" >
                 </div>
                 </div> 
                      
                 <div class="form-group" >
                        <label class="control-label col-sm-4" for="reportrange">Requesting unit</label>
                        <div class="col-sm-8"> 
                   <input type="text" class="form-control"  id="REQUESTINGUNIT" name="REQUESTINGUNIT" readonly="readonly" 
                    style=" background-color:#fff;" >
                 </div>
                 </div> 
                      
                 <div class="form-group">
                        <label class="control-label col-sm-4" for="reportrange">Dispensed by</label>
                        <div class="col-sm-8"> 
                   <input type="text" class="form-control"  id="DISPENSEDBY" name="DISPENSEDBY"  value="<?php echo $nameofuser; ?> " readonly  
                    style=" background-color:#fff;" >
                 </div>
                 </div> 
                 
                    
                 <div class="form-group">
                    <label class="control-label col-sm-4">Treatment cost</label>
                    <div class="col-sm-8"> 
                    <input type="text" class="form-control" id="AMOUNT" readonly="readonly" style=" background-color:#ECF0F5; color:#000; font-weight:bold;" >
                    </div>
                    </div>  
         </div>
  
        <div class="col-lg-6">
        
        <label>ACTIVATE TO REFER AN ORDER</label>
                    <div class="switch switch-blue" style="margin-left: 0px; margin-top: 0px;">
					<input type="radio" class="switch-input" name="DISPENSESTATUS" value="DEFAULT" id="DEFAULT" checked="">
					<label for="DEFAULT" class="switch-label switch-label-off">DEACTIVATED</label>
					<input type="radio" class="switch-input" name="DISPENSESTATUS" value="ACTIVATE" id="ACTIVATE">
					<label for="ACTIVATE" class="switch-label switch-label-on">ACTIVATE</label>
					<span class="switch-selection"></span>
				    </div>
                  
           <br><br>     
           <label>Message prescription error here</label> 
                             <textarea class="col-sm-3" name="COMMENT" id="wmd-input"  rows="3" placeholder="Message initiator" 
                             style="background-color:#fff; width:100%"> </textarea>
                             </div> 
                               
           <div class="col-sm-12">  
           <center> <input type="submit" name="button" id="button" value="SUBMIT"/></center>
             
                    </form> 
                     
                    </div> 
                    </div> 
   <div class="box-body"> 
   <div class="col-sm-6"  style="margin-left:-13px;">
    <br><br> <p></p>
              <div class="alert alert-info alert-dismissible" style="background-color:#00a65a;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="glyphicon glyphicon-thumbs-down"></i> 0</h4>
                
              </div></div>
			  
	<div class="col-sm-6" style="margin-left:12px;">
    <br><br> <p></p>
              <div class="alert alert-info alert-dismissible" style="background-color:#dd4b39;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="glyphicon glyphicon-thumbs-down"></i> 0</h4>
                
              </div></div>		  
			  
   </div>	 
   </div>
   <div class="col-sm-2" style="border:2px solid; height:500px; border-radius:11px; margin-top:-9px; width: 280px;"/>
   
</div>

<div class="col-sm-2" style="width: 280px;"/>
<br>
              <div class="alert alert-info alert-dismissible" style="background-color:#dd4b39;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="glyphicon glyphicon-thumbs-down"></i> 0</h4>
                
              </div></div>	
			  
<div class="row">
  <div class="col-lg-12" style="height:300px;"> 
                    <div class="panel panel-default">
                         
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Prescription history</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Stock reconciliation</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Stock taking</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Due expiry notifications</a>
                                </li>
								<li><a href="#settings" data-toggle="tab">Automated costs of prescription by service episode</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Ph</h4>
                                    <p> .</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Sr</h4>
                                    <p> .</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>St</h4>
                                    <p>.</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Den</h4>
                                    <p> </p>
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
 
 
<script>
function getClient(id){
var id1 = id.split('______');
$.ajax({
     url:"presc.php",
     method:"POST",
     data:{id:id1[0]},
     success:function(data){
	 var s = data.split("______");
          $('#prescribed').html(s[1]);
		  $('#AMOUNT').html(s[0]);
		  $("#SERVICE_EPISODE").val(id1[1]);
		  $("#REQUESTINGUNIT").val(id1[2]);
		  $("#RECOMMENDEDDRUGS").val(id1[3]); 
     }
});
}
</script>
  
  
   </body>
</html>

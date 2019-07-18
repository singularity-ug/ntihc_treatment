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
 

 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap2.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="datatable/css/buttons.dataTables.min.css">

  <script src="datatable/js/jquery-1.12.3.js"></script>
  <script src="datatable/js/jquery.dataTables.min.js"></script>
  <script src="datatable/js/bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.buttons.min.js"></script>
  <script src="datatable/js/buttons.flash.min.js"></script>
  <script src="datatable/js/jszip.min.js"></script>
  <script src="datatable/js/pdfmake.min.js"></script>
  <script src="datatable/js/vfs_fonts.js"></script>
  <script src="datatable/js/buttons.html5.min.js"></script>
  <script src="datatable/js/buttons.print.min.js"></script>
  <?php
  $fz ='';
  if(isset($_GET['q'])) { $fz=$_GET['q']; }
  ?>
  <script>
  $(document).ready(function() {
     var ttt = "<?php echo $fz;  ?>";

	 if(ttt==""){}  else{ $("#notificationModal").modal("show"); }
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

		{extend :'pdf',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 6,
        dom: 'Bfrtip',
        buttons: [
 
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

		{extend :'pdf',
		 title:' file'
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
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' Ntihc imms'
		},
		{extend :'pdf',
		 title:'Ntihc imms '
		},
		{extend :'print',
		 title:' Ntihc imms'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example7').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'pdf',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'print',
		 title:'NTIHC |IMMS USER CONTACTS '
		}
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#example8').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
  
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example11').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script> 
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();  
         document.getElementById('CHECKIN').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script>
 
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('connect/config.php');
  ?>
  
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>  
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li> 
              </ul>
            </li>
          </ul>
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">0</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 0 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Ntihc M.E team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not use this awesome application?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#"> </a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">0</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 0 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i>  
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#"> </a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">0</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 0 tasks</li>
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">

                        <!-- Task title and progress text -->
                        <h3>
                           
                          <small class="pull-right">20%</small>
                        </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#"> </a>
                </li>
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                 <span class="glyphicon glyphicon-user">WELCOME:</span>     
          &nbsp <?php echo $nameofuser; ?>   
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <center><img src="../assets/img/ntihclog2.png" width="200" height="250" class="user-image" alt="User Image"> </center>
                  <p>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">NTIHC</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">NTIHC</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">NTIHC</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="../../index.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container" style="background-color:white;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h5>
        DEPT OF: 
          <small>&nbsp<?php echo $dept; ?> </small>
        </h5>
        <ol class="breadcrumb">
        <li><a href="property_mgt.php"><i class="fa fa-th"></i>Assets mgt</a></li>
         <li><a href="admin_user.php"><i class="fa fa-th"></i> Dashboard</a></li>
         <li><a href="home_user.php"><i class="fa fa-circle-o text-red"></i> Home user launcher</a></li> 
         <li><a href="reqn/procurement_tracker.php" class="text-muted"><i class="fa fa-gear"></i> General procurement tracker</a></li>
          
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
       <div class="box box-solid"> 
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Update assets
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                     <div class="col-sm-6"> 
          <div class="" style="margin-left:-19px;">
           <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example8" class="table table-striped table-bordered" >
        <thead>
        <tr>  
              <th>DESCRIPTION</th>
              <th>CATEGORY</th> 
              <th>OFFICER (R)</th> 
              <th>LOCATION</th> 
              <th>ACTION</th> 
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th>DESCRIPTION</th>
              <th>CATEGORY</th> 
              <th>RESPONSIBLE OFFICER</th> 
              <th>LOCATION</th> 
              <th>ACTION</th> 
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function referasset(myid){
var dts = myid.split("***");
document.getElementById("myPROPERTYDESCRIPTION").value=dts[1];
document.getElementById("myid").value=dts[0];
document.getElementById("myMAKE").value=dts[2];
document.getElementById("myCATEGORY").value=dts[3];
document.getElementById("myLOCATION").value=dts[4];
document.getElementById("myRESPONSIBLEOFFICER").value=dts[5];
document.getElementById("myOFFICERCONTACT").value=dts[6];
document.getElementById("myCODIFICATIONSTATUS").value=dts[7];
document.getElementById("myENGRAVEDNUMBER").value=dts[8];
document.getElementById("myDATEOFPURCHASE").value=dts[9];
document.getElementById("mySUPPLIEDBY").value=dts[10];
document.getElementById("myHOLDTYPE").value=dts[11];
document.getElementById("myPROPERTYCOST").value=dts[12];
document.getElementById("myFUNCTIONALSTATUS").value=dts[13];
document.getElementById("myDEPRECIATIONSTATUS").value=dts[14];
document.getElementById("mySERVICEREQUIREMENT").value=dts[15];
document.getElementById("myLASTSERVICEDDATE").value=dts[16];
document.getElementById("mySERVICEDBY").value=dts[17];
document.getElementById("mySERVICEPROVIDERCONTACT").value=dts[18];
document.getElementById("myNEXTDUESERVICE").value=dts[19];
document.getElementById("myREMINDDATE").value=dts[20];
document.getElementById("myLASTUPDATEDBY").value=dts[21];
   
          
}
</script> 
    
 <?php 
include_once("config/inline/configproperty.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM properties ORDER BY id DESC"); 

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['PROPERTYDESCRIPTION']."***".$res['MAKE']."***".$res['CATEGORY']."***".$res['LOCATION']."***".$res['RESPONSIBLEOFFICER']
	."***".$res['OFFICERCONTACT']."***".$res['CODIFICATIONSTATUS']."***".$res['ENGRAVEDNUMBER']."***".$res['DATEOFPURCHASE']."***".$res['SUPPLIEDBY']
	."***".$res['HOLDTYPE']."***".$res['PROPERTYCOST']."***".$res['FUNCTIONALSTATUS']."***".$res['DEPRECIATIONSTATUS']."***".$res['SERVICEREQUIREMENT']
	."***".$res['LASTSERVICEDDATE'] ."***".$res['SERVICEDBY']."***".$res['SERVICEPROVIDERCONTACT'] ."***".$res['NEXTDUESERVICE'] ."***".$res['REMINDDATE']."***".$res['LASTUPDATEDBY'];
	 
		echo "<tr>"; 
		echo "<td>".$res['PROPERTYDESCRIPTION']."</td>";
		echo "<td>".$res['CATEGORY']."</td>";  
		echo "<td>".$res['RESPONSIBLEOFFICER']."</td>"; 
	    echo "<td>".$res['LOCATION']."</td>";
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referasset(this.id)">OPEN</a> </td>'; 			
	}
	?>
	</tbody>
  </table>
     </div>
            
            
          </div></div>
        
         <div class="col-sm-6"> 
          <div class="">
          <!-- Custom Tabs (start tabs) -->
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">General</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Tab 2</a></li>
              <li><a href="#tab_3-2" data-toggle="tab">Tab 3</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                 Quick config <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="update_assets.php">Action 1</a></li> 
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="update_assets.php">Action 1</a></li>
                </ul>
              </li>
              <li class="pull-left header"><i class="fa fa-th"></i>Details</li>
            </ul>
            <div class="tab-content" style="height:230px;"/>
             <div class="tab-pane active" id="tab_1-1" >
              
                <form class="form-horizontal" method="post" action="edit1.php" >
                 
                <input type="hidden" id="myid" name="id" value="" >
         
		         <div class="col-sm-6">  
                    <label for="text1">Description</label>
                    <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control"  id="myPROPERTYDESCRIPTION" name="PROPERTYDESCRIPTION" value=""  
                        style="font-size: 11px;"/>
                </div>
                </div>
                <!-- /.form-group -->
  
                    <label for="text1" >Asset make</label>
                    <div class="form-group">
                    <div class="col-sm-12">
                        <select class="form-control"  id="myMAKE"  name="MAKE"  value="" 
                        style="font-size: 11px;"/>
                        <option> </option>
                        <option>LAPTOP</option>
                        <option> DESK TOP COMPUTERS</option>
                        <option> PHOTOCOPIER</option> 
                        </select>
                    </div>
                </div> 
                <!-- /.form-group -->
 
                    <label for="text1" >Category</label>
                    <div class="form-group">
                    <div class="col-sm-12">
                        <select class="form-control" id="myCATEGORY"  name="CATEGORY"  value=""  
                        style="font-size: 11px;"/>
                        <option> </option>
                        <option>COMPUTER EQUIPMENT AND ACCESSORIES</option>
                        <option>OFFICE EQUIPMENT</option> 
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->
                
                <label for="pass1" >Location</label>
                   <div class="form-group">
                    <div class="col-sm-12">
                   <input type="text" class="form-control"   name="LOCATION" id="myLOCATION" data-placement="top"  value="" 
                   style="font-size: 11px;"/>
                   </div>
                   </div>
                
                    </div>
                    
                    <div class="col-sm-6">
                      
                    <label for="pass1" >Responsible officer</label> 
                   <div class="form-group">
                    <div class="col-sm-12"> 
                   <input type="text" class="form-control"   name="RESPONSIBLEOFFICER" id="myRESPONSIBLEOFFICER" data-placement="top"  value="" 
                   style="font-size: 11px;"/>
                   </div>
                </div>

                <!-- /.form-group --> 
                    <label for="pass1" >Officer contact</label>
                   <div class="form-group">
                    <div class="col-sm-12"> 
                   <input type="numeric" class="form-control"   name="OFFICERCONTACT" id="myOFFICERCONTACT" data-placement="top"  value="" 
                   style="font-size: 11px;"/>
                   </div>
                   </div>

                <!-- /.form-group -->
                  
                    <label for="pass1">Codification</label>
                    <div class="form-group">
                    <div class="col-sm-12"> 
                   <select class="form-control" name="CODIFICATIONSTATUS" id="myCODIFICATIONSTATUS" value=""     
                   style="font-size: 11px; "/>
                   <option> </option> 
                   <option>PENDING</option>  
                                <option>ENGRAVED</option> 
                                <option>NOT APPLICABLE</option> 
                   </select>
                   </div>
                </div>
                <!-- /.form-group -->  
               
                    <label for="text1" >Asset engraved or serial number</label>
                     <div class="form-group">
                    <div class="col-sm-12"> 
                        <input type="text" class="form-control"  name="ENGRAVEDNUMBER" id="myENGRAVEDNUMBER" value="" 
                        style="font-size: 11px;"/>
                    </div>
                </div> 
                <!-- /.form-group --> 
                
                

              </div>   
  
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
              
                <div class="col-sm-6"> 
                   
                    <label for="pass1" >Date of purchase / acquisition</label>
                    <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <input type="date" class="form-control" name="DATEOFPURCHASE" id="myDATEOFPURCHASE"  data-placement="top" value=""   
                   style="font-size: 11px; "/>
                   </div>
                   </div>
                <!-- /.form-group --> 
                 
                    <label for="pass1" >Supplier / Donor</label>
                   <div class="form-group" style="margin-left: -15px;"> 
                    <div class="col-sm-12">
                   <input type="date"  class="form-control" name="SUPPLIEDBY" id="mySUPPLIEDBY" data-placement="top"  value="" 
                   style="font-size: 11px;"/> 
                   </div>
                   </div>
                <!-- /.form-group --> 
                
                    <label for="pass1">Hold type</label>
                    <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <select class="form-control" name="HOLDTYPE" id="myHOLDTYPE" data-placement="top" value=""   
                   style="font-size: 11px; "/>
                   <option> </option> 
								<option>PURCHASED</option>
								<option>DONATION</option> 
                   </select>  
                   </div>
                </div>
                  
                    <label for="pass1" >Purchase cost / valued cost</label>
                    <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <input type="text" class="form-control"   name="PROPERTYCOST" id="myPROPERTYCOST" data-placement="top" value="" 
                   style="font-size: 11px;"/>
                   </div>
                   </div>
    
                    <label for="pass1" >Operational status</label>
                   <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <select class="form-control" name="FUNCTIONALSTATUS" id="myFUNCTIONALSTATUS" data-placement="top" value="" 
                   style="font-size: 11px; "/>
                                <option> </option>
                                <option>OPERATIONAL</option> 
                                <option>FAULTY</option> 
                                <option>UNDER REPAIR</option> 
                                <option>MISSING</option>
                                <option>DONATED</option> 
                                <option>DISPOSED</option>
                                <option>LOST</option> 
                   </select>
                   </div>
                </div>
                <!-- /.form-group --> 
                
                </div>
                <div class="col-sm-6"> 
                 
                    <label for="pass1">Current condition</label>
                    <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <select class="form-control" name="DEPRECIATIONSTATUS" id="myDEPRECIATIONSTATUS" data-placement="top"  value="" 
                   style="font-size: 11px; "/>
                                <option > </option>  
                                <option>NEW</option>
								<option>OBSOLESCENCE</option>
								<option>ABSOLUTE</option>
                                <option>REDUNDANT</option>
                                <option>SCRAP</option>
                   </select>
                   </div>
                </div>
                <!-- /.form-group --> 
                
                
                 <label for="pass1">Service requirement</label>
                    <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <select class="form-control" name="SERVICEREQUIREMENT" id="mySERVICEREQUIREMENT" data-placement="top"  value="" 
                   style="font-size: 11px; "/>
                                <option > </option>  
                                <option>NO</option>
								<option>YES</option> 
                   </select>
                   </div>
                </div>
                <!-- /.form-group --> 
                
                
                    <label for="pass1" >Last serviced date</label>
                     <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <input type="date" class="form-control" name="LASTSERVICEDDATE" id="myLASTSERVICEDDATE"  data-placement="top"  value="" 
                   style="font-size: 11px;"/>
                   </div>
                </div>
                <!-- /.form-group -->
                
                
                <label for="pass1" >Serviced by</label>
                     <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <input type="date" class="form-control" name="SERVICEDBY" id="mySERVICEDBY"  data-placement="top" value=""  
                   style="font-size: 11px;"/>
                   </div>
                </div>
                <!-- /.form-group -->
                
                 <label for="pass1" >Phone contact</label>
                     <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <input type="date" class="form-control" name="SERVICEPROVIDERCONTACT" id="mySERVICEPROVIDERCONTACT"  data-placement="top" value=""  
                   style="font-size: 11px;"/>
                   </div>
                </div>
               
                  
              </div>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                 <!-- /.form-group -->
                 
                 <div class="col-sm-6">
                    <label for="pass1" >Next due service date</label>
                     <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <input type="date" class="form-control" name="NEXTDUESERVICE" id="date1"  data-placement="top"  value="" 
                   style="font-size: 11px;"/>
                   </div>
                </div>
                <!-- /.form-group -->
                <br>
                 
                    <label for="pass1" >Remind date</label>
                     <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <input type="date" class="form-control" name="REMINDDATE" id="date2"  data-placement="top"  value="" 
                   style="font-size: 11px;"/>
                   </div>
                </div>
                <!-- /.form-group -->
                <br>
                 <label for="pass1" >Last updated by</label>
                     <div class="form-group" style="margin-left: -15px;">  
                    <div class="col-sm-12">
                   <input type="text" class="form-control" name="LASTUPDATEDBY" id="myLASTUPDATEDBY"  data-placement="top"  value=" <?php echo $nameofuser; ?> "
                    readonly
                   style="font-size: 11px; background-color:white;"/>
                   </div>
                </div>
                <!-- /.form-group -->
                </div>
                 
                 <div class="col-sm-6"> 
                
                <input type="submit" name="button" id="button" value="Submit record" />
         </form>
                
                 
                </div> 
                 
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row --> 
            
          <!-- Custom Tabs (end tabs) -->  
        </div></div>
                      
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                     Assets due for service
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                      <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example4" class="table table-striped table-bordered" >
        <thead>
        <tr>  
              <th>DESCRIPTION</th>
              <th>CATEGORY</th> 
              <th>OFFICER (R)</th> 
               <th>NEXT DUE DATE</th>  
              <th>REMIND DATE</th> 
               <th  style="background-color:red; color:fff;">REMAINING DAYS </th> 
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th>DESCRIPTION</th>
              <th>CATEGORY</th> 
              <th>RESPONSIBLE OFFICER</th> 
              <th>NEXT DUE DATE</th>  
              <th>REMIND DATE</th> 
              <th  style="background-color:red; color:fff;">COUNT DOWN</th> 
        </tr>
        </tfoot>
        <tbody>
          
<?php 
include_once("config/inline/configproperty.php"); 
$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT id, PROPERTYDESCRIPTION,CATEGORY,RESPONSIBLEOFFICER,NEXTDUESERVICE,REMINDDATE,(NEXTDUESERVICE - REMINDDATE) AS DAYS FROM properties WHERE DATE(REMINDDATE) = '$date'  ORDER BY id DESC"); 

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['PROPERTYDESCRIPTION'] ;
	 
		echo "<tr>"; 
		echo "<td>".$res['PROPERTYDESCRIPTION']."</td>";
		echo "<td>".$res['CATEGORY']."</td>";  
		echo "<td>".$res['RESPONSIBLEOFFICER']."</td>"; 
		echo "<td>".$res['NEXTDUESERVICE']."</td>"; 	
	    echo "<td>".$res['REMINDDATE']."</td>"; 
	    echo "<td>".$res['DAYS']."</td>"; 
				
	}
	?>
	</tbody>
  </table>
     </div>
  
                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Collapsible Group Success
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                     
        
    
    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
       
        
           
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        
      </div>
      <center> <strong>Copyright &copy; 2017  Naguru Teenage Information and Health Center</strong> All rights
    reserved.</center>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
<!-- Morris.js charts -->
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="plugins/daterangepicker/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
 <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

         <!-- PAGE LEVEL SCRIPTS -->
    <script src="../plugins/wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
    <script src="../assets/plugins/bootstrap-wysihtml5-hack.js"></script> 
    <script src="../assets/plugins/pagedown/Markdown.Converter.js"></script>
    <script src="../assets/plugins/pagedown/Markdown.Sanitizer.js"></script>
    <script src="../assets/plugins/Markdown.Editor-hack.js"></script>
    <script src="../assets/js/editorInit.js"></script>
    <script>
        $(function () { formWysiwyg(); });
        </script>

<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="plugins/ckeditor/build-config.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>
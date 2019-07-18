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
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stss ="";
if( $result = $connect->query("SELECT * FROM budgetcoder WHERE codestatus = 'ACTIVE' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['budgetline'] . " </option>";   }
  }
$connect->close();
?>


 <?php
$connect = new mysqli("localhost", "root", "", "ahr");
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 
 
 
 
   <?php
  $id = '9';//$_POST['id'];
   
  $REQUESTDATE = '';
  $IDNUMBER = '';
  $APPLICANTNAME  = '';
  $AP_DEPARTRMENT = '';  
  $impdescription = array();
  $impcurrency = array();
  $impdebit = array();  
  $BUDGETLINE = '';
  $CODE = '';  
  $IMPAUTHORISEDBY = '';
  $IMPAUTHORISEDDATE = '';
  $IMPAPPROVEDBY = '';
  $IMPAPPROVEDDATE = ''; 
  $ORDERNO = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "dbmultiple";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM imprest  WHERE `id` = '$id' ";

 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){

     $REQUESTDATE = $row['REQUESTDATE'];
	 $IDNUMBER = $row['IDNUMBER'];
     $APPLICANTNAME = $row['APPLICANTNAME'];
     $AP_DEPARTRMENT = $row['AP_DEPARTRMENT'];
     $impdescription = json_decode($row['IMPREST_DESCRIPTION']);
     $impcurrency = json_decode($row['IMP_CURRENCY']);
     $impdebit = json_decode($row['IMP_DEBIT']);  
     $BUDGETLINE = $row['BUDGETLINE'];
	 $CODE = $row['CODE'];
     $IMPAUTHORISEDBY = $row['IMPAUTHORISEDBY'];
	 $IMPAUTHORISEDDATE = $row['IMPAUTHORISEDDATE'];
     $IMPAPPROVEDBY = $row['IMPAPPROVEDBY'];
	 $IMPAPPROVEDDATE = $row['IMPAPPROVEDDATE']; 
	 $ORDERNO = $row['ORDERNO'];  
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
          <a href="petty_cashUser.php" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
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
        
        </h5>
        <ol class="breadcrumb"> 
        
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
       <div class="box box-solid" > 
            <!-- /.box-header -->
            <div class="col-sm-6"> 
            <div class="box-body"  >
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       
                        <a href=<button class="" data-toggle="modal"  data-target="#notificationModal"  </button>
                         </i> <span class="label label-danger pull-right">In-progress
                           <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT  ORDERNO,FISCALMONTH FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND FINALREDIRECTION ='$rm' AND APPROACTION ='APPROVED' AND CASHOUT ='PENDING' ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
                          </span></a> 
                        
                          <a href=<button class="" data-toggle="modal"  data-target="#notificationModal"  </button>
                           </i> <span class="label label-warning pull-right">Un approved
                           <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT  ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND FORWARDTO ='$rm' AND APPROACTION ='PENDING'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
                          </span></a> 
                         
               
                     <a href=<button class="" data-toggle="modal"  data-target="#notificationModal"  </button>
                      </i> <span class="label label-danger pull-right">Un authorised  &nbsp 
                          <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT  ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND SENDTO ='$rm'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                          </span></a> 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in"/>
                    <div class="box-body"/>
                     
          <div class="">
          
             
           <div id="work" style="width:100%; font-weight:normal;"> 
    
      <?php 
include_once("../php/configdbmultiple.php"); 
 
                     $sql="SELECT * FROM imprest WHERE  AUTHACTION ='PENDING' AND IDNUMBER = '$pf' ORDER BY ORDERNO ";

                     $result = $conn->query($sql);
                     $st ='<table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
                     <thead>
                     <tr>
                     <th>ID</th>
					 <th>DATE</th>
					 <th>ORDER NO</th> 
					 <th>APPLICANT</th>
                     <th>ACTION</th>
                     </tr>
                     </thead>
                     <tbody ">';
                     $seenid = ""; $x=1;
                     while($row = $result->fetch_assoc()) {
                       if ($seenid==$row['ORDERNO']) {
                        
                       }
                       else{
                         $seenid = $row['ORDERNO'];
                     $st=$st."<tr>".
	                 "<td>" . ($x++) . "</td>". 
					 "<td>" . $row['TIMESTAMP'] . "</td>".
					 "<td>" . $row['ORDERNO'] . "</td>".  
					 "<td>" . $row['APPLICANTNAME'] . "</td>".
                     "<td>" . '<input type="button" style="width:100%; text-align:left;" id="'.$row['ORDERNO'].'______'.$row['IDNUMBER'] 
					 .'______'.$row['REQUESTDATE'] 
					 .'______'.$row['APPLICANTNAME'].'______'.$row['AP_DEPARTRMENT']. '" value="Click"  onclick="getpetty(this.id)">' . "</td>".
		             "</tr>";
                   }
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?> 
    
	 
     </div>
     <script>
function getpetty(id){
var id1 = id.split('______');
$.ajax({
     url:"presc.php",
     method:"POST",
     data:{id:id1[0]},
     success:function(data){
	 var s = data.split("______");
          $('#prescribed').html(s[1]);
		  $('#REQUESTDATE').html(s[0]);
		  $("#APPLICANTNAME").val(id1[1]);
		  $("#AP_DEPARTRMENT").val(id1[2]); 
     }
});
}
</script>
     
     
             </div>
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> 
                       Rejected petty cash requestions 
                       &nbsp;&nbsp <span class="label label-warning pull-right">0</span></a>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                                   <div id="work" style="width:100%; "> 
    <table id="example2" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
        <th>ID.</th>
                     <th>APPLICANT</th>
                     <th>DESCRIPTION</th>
					 <th>AMOUNT</th>    
                     <th>ACTION</th>     
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='REJECTED' AND SENDTO ='$desc' ORDER BY ORDERNO DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['BUDGETLINE']."***".$res['CODE']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";   
		echo "<td>".$res['APPLICANTNAME']."</td>";
		echo "<td>".$res['IMPREST_DESCRIPTION']."</td>"; 
		echo "<td>".$res['IMP_DEBIT']."</td>";  
		echo '<td><a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="Approve"   onclick="postpetty(this.id)"> 
		<span class="glyphicon glyphicon-ok"> </span> </a> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dts.'" href="<button class="btn btn-danger" data-toggle="modal"  data-target="#impres" data-toggle="tooltip" title="open" 
		</button> <span class="glyphicon glyphicon-off"> </span></a>  
		</td>';  			
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
                       Successful petty cash history
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp  <span class="label label-warning pull-right">0</span></a>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                      
                      
                      0000000000000
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col ------------------------------------------------------->
        
       <div class="col-sm-6"> 
          <div class="">
          <!-- Custom Tabs (start tabs) -->
           <div class="nav-tabs-custom" >
            <ul class="nav nav-tabs pull-right" >
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
            <div class="tab-content" style="height:700px;"/>
             <div class="tab-pane active" id="tab_1-1">
              
               <div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logs.PNG" width="100%" height="100%">
</div> 
      
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>
          <form class="form-horizontal" action="petty_cash" method="POST" style="height:auto; font-weight:normal;">
                <div class="col-xs-5">

                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input type="text" name="REQUESTDATE" id="REQUESTDATE"  value="<?php  echo $REQUESTDATE; ?>"  class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">PF No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="IDNUMBER"  id="IDNUMBER"  value="<?php  echo $IDNUMBER; ?>" data-placement="top" style=" font-size: 11px; text-align:left;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-7">
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Applicant</label>
                    <div class="col-sm-8">
                        <input type="text"  name="APPLICANTNAME" id="APPLICANTNAME" value="<?php  echo $APPLICANTNAME; ?>" class="form-control"  style=" font-size: 11px;"/>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Department</label>
                    <div class="col-sm-8">
                 <select class="form-control" name="AP_DEPARTRMENT"id="AP_DEPARTRMENT" style="font-size: 11px; text-align:left;"/>
                 <option <?php if ($AP_DEPARTRMENT=='ADVOCACY AND RESEARCH') { echo 'selected="selected"'; } ?> >ADVOCACY AND RESEARCH</option>
                 <option <?php if ($AP_DEPARTRMENT=='FINANCE AND ADMINISTRATION') { echo 'selected="selected"'; } ?> >FINANCE AND ADMINISTRATION</option>
                 <option <?php if ($AP_DEPARTRMENT=='SERVICE DELIVERY') { echo 'selected="selected"'; } ?> >SERVICE DELIVERY</option>
                 </select>
                    </div>
                </div>
                
                  
                <!-- /.form-group -->
                </div>
                 <div class="col-sm-12">
                 
  <table class="table table-striped" id="mytable11" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th>DESCRIPTION FOR WHICH CASH IS REQUIRED</th>
   <th>CURRENCY</th>
   <th>AMOUNT</th>
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($impdescription); $s=0;
                                                 for($s=0;$s<$tot;$s++){ ?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="impdescription[]" disabled="" type="text" value="<?php  echo $impdescription[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; "/></td>
                                                   
                                                  <td> <input  name="impcurrency[]" disabled="" type="text" value="<?php  echo $impcurrency[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; "/></td> 
                                                  
                                                  <td> <input  name="impdebit[]" disabled="" type="numeric" value="<?php echo $impdebit[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; "/></td> 
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                                
                            <input type="button" onClick="addRow166('mytable11')" value="Add" />
     <input type="button" onClick="deleteRow166('mytable11')" value="(Delete)" />
     <input type="hidden" id="mytable_rows11" value="0">  
     
        
        <!-- /.col --> 
  </div>


         <div class="col-sm-12">
         <p></p>
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4"> Total sum</label>
                    <div class="col-sm-8">
                        <input type="text"  name="TOTALSUM" id="TOTALSUM"  class="form-control" style="text-transform:uppercase;font-size: 12px; font-weight:bold; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group --> 
              </div>
           <br>
            <div class="col-sm-12">  <br>
            <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>
            
            <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:80%;">Budget line</th>
        <th style="border-bottom-color:white; width:20%; ">Code</th>  
      </tr>
    </thead>
    <tbody>
      <tr> 
        <td><input type="text"  name="BUDGETLINE" id="BUDGETLINE" value="<?php  echo $BUDGETLINE; ?>" class="form-control" readonly style="background-color:#fff;"> </td>
        <td><input type="text" name="CODE" id="CODE"  value="<?php  echo $CODE; ?>" class="form-control" readonly style="background-color:#fff;"> </td> 
      
      </tr>
    </tbody>
  </table>
           
</div>
            <div class="col-sm-6">
            <br>
                <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Authorised.by</label>
                    <div class="col-sm-8">
                        <input type="text" name="IMPAUTHORISEDBY" id="IMPAUTHORISEDBY"  value="<?php  echo $IMPAUTHORISEDBY; ?>" placeholder"Signature"  
                        class="form-control" readonly
                        style="font-size: 11px;  background-color:#fff;"/> 
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8"> 
                        <input class="form-control" type="text" name="IMPAUTHORISEDDATE" id="IMPAUTHORISEDDATE"  value="<?php  echo $IMPAUTHORISEDDATE; ?>" 
                        data-placement="top" readonly 
                        style=" font-size: 11px; background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group --></div>


               <div class="col-sm-6">
               <br>
               <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Approved by</label>
                    <div class="col-sm-8">
                        <input type="text" name="IMPAPPROVEDBY" id="IMPAPPROVEDBY"  value="<?php  echo $IMPAPPROVEDBY; ?>" placeholder"Signature"  class="form-control" readonly
                        style=" font-size: 11px; background-color:#fff;"/> 
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="IMPAPPROVEDDATE" id="IMPAPPROVEDDATE"  value="<?php  echo $IMPAPPROVEDDATE; ?>" data-placement="top" readonly 
                        style=" font-size: 11px; text-align:center; background-color:#fff;"/>
                </div>
                <!-- /.form-group -->
                </div></div>

<input class="form-control" type="text"  name="ORDERNO" value="<?php  echo $ORDERNO; ?>" data-placement="top" readonly 
                        style=" font-size: 11px; text-align:center; border:0px; font-size:16px; background-color:#FFF; "/>
  

           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic voucher, Signatory fields are auto generated in the official processing by the authoriser and approver. </p>

         </form>
         <input type="submit" name="button" id="button" value="Update my order" />
                       
              </div> 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
              
               
                 
                    
               
               
                  
              </div>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                 <!-- /.form-group -->
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                <!-- /.form-group -->
                </div>
                 
                 <div class="col-sm-6"> 
                 
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

        
      </section>  
      
       <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 

            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:40px; text-align:center;"> ACCESS DENIED</p>
             
            <p></p>
            <p style="color:red; font-weight:bold; font-size:40px; text-align:center;font-family:lcd;"> <?php echo date('Y-m-d'); ?></p>
             
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
      
      
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

 <!-- /.START IMPREST REQUEST SCRIPT -->

     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("TOTALSUM").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="impdescription[]" id="impdescription_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	 var  s2b =  '<select name="impcurrency[]" required="required"  id="impcurrency_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="impdebit[]" id="impdebit_'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; text-align:right; background-color:#fff;" >';


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow166(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="impdescription_"+x;
          table.rows[x].cells[2].childNodes[0].id="impcurrency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="impdebit_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

  <!-- /.END IMPREST REQUEST SCRIPT -->
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
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
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
  <link rel="stylesheet" href="assets/notifier.css">
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
  
  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
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
     $('#example1').DataTable( {
	  "iDisplayLength":3,
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
 
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('connect/config.php');
  ?>
  
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="sys_dashboard.php" class="navbar-brand"><b>Dashboard</b>&nbsp|&nbsp imms</a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
		  <li class="active"><a href="petty_userdept.php" class="button5" > Home<span class="sr-only">(current)</span></a></li> 
           
             
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
              <span class="glyphicon glyphicon-user" style="font-size:15px;">Welcome:</span>     
         <B style="font-size:12px;"> &nbsp <?php echo $nameofuser; ?>  </B>  
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
  
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                 <img src="assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
              
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
         <div class="col-sm-6">
         
          <?php
require('config/config_dbmultiple.php'); 

$sql = "SELECT * FROM imprest WHERE APPROACTION ='APPROVED' AND CASHOUT ='PAID' AND DCDEFAULT ='DEFAULT'";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['CREDIT']))-intval($row['IMP_DEBIT']);
  echo'<tr>'.   
   '</tr>';
$x=$x+1;
} 
 ?> 
  <h2 style="margin-top: -7px;"> <b style="font-family:lcd;"> <?php   echo"Balance in cash box  : ".$bal; ?> </b></h2>
       </div> 
        
        <div class="col-sm-6">
         <table class="table table-bordered" style="margin-top: -10px;border: 0px;">
    <thead> 
      <tr class=" ">
       <th  style="height:50px; border:2px; border-radius:11px;">
       <p style="font-size:12px;text-align:center; font-weight:normal;"> Pending orders &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5; border-radius:11px;">
       
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND IDNUMBER = '$pf'  GROUP BY ORDERNO ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
       </th>
       
       <th  style="height:50px; border:2px; border-radius;11px:">
       <p style="font-size:12px;text-align:center; font-weight:normal;"> Due for authorising &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:greeen; text-align:center;border:4px solid #ecf0f5; border-radius:11px;">
       
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND SENDTO ='$rm' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  
       </p>
       </th> 
        
       <th  style="height:50px; border:2px; border-radius;11px:">
       <p style="font-size:12px;text-align:center; font-weight:normal;">  Due for approval &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:red; text-align:center; border:4px solid #ecf0f5; border-radius:11px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND FORWARDTO ='$rm' AND APPROACTION ='PENDING' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
        </th>
        
       <th  style="height:50px; border:2px; border-radius;11px:">
       <p style="font-size:12px;text-align:center; font-weight:normal;"> Cash out &nbsp / &nbsp line items  </p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5; border-radius:11px;">
       <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
 AND APPROACTION ='APPROVED' AND FORWARDTO ='$rm' AND CASHOUT ='PENDING' ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  
/
<?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
 AND APPROACTION ='PENDING' AND FORWARDTO ='$rm' AND CASHOUT ='PENDING' ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
        </p>
        </th>
      </tr>
    </thead>   
  </table>         
       </div>
       
      <br> <br>  
        </h5>
        <ol class="breadcrumb">  
        </ol>
      </section> 
      <!-- Main content -->
      <section class="content"> 
       <div class="box box-solid"> 
            <!-- /.box-header -->
            <div class="box-body"  style="background-color:#ecf0f5;">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border" style="background-color: #f9f9f9;">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Petty cash requests due for approval
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body" style="background-color:#ffffff;"> 
          <div class="">
            
            <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Tab 1</a></li>
               
              <li class="pull-left header"><i class="fa fa-th" style="font-size:10px;"></i> 
               Cash available: 
              
               </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1"> 
            <div class="col-sm-12" style="background-color:#f9f9f9;"> 
            
            <div class="col-sm-6">
                
   <form method="post" action="config/inline/pettyadmin_update.php">
   <br>   
   <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th>Requisition no.</th> 
              <th>Budget line</th>
              <th>Code</th> 
            </tr>
            </thead>
            <tbody>
            <tr>
               <td style="width:24%;"><input type="text" name="ORDERNO" id="myORDERNO"  value="" readonly="readonly"  
               style="width:100%; text-align:left;background-color:#ECF0F5;"></td>
  
               <td style="width:66%;"><input type="text" name="BUDGETLINE" id="myBUDGETLINE" value="" readonly="readonly" 
               style="width:100%; text-align:left;">
                
                  </td>
               
                  <td style="width:10%;"><input type="text" name="CODE" id="myCODE" value="" readonly="readonly" 
                  style="width:100%; text-align:left; background-color:#ECF0F5;">  </td>
              
              
             </tr>
            <tr>
           </tbody>
          </table> 
          
 
 
<script> 
function postpetty(myid){
var dts = myid.split("***");
document.getElementById("myORDERNO").value=dts[1];
document.getElementById("myid").value=dts[0]; 
document.getElementById("myBUDGETLINE").value=dts[2];
document.getElementById("myCODE").value=dts[3]; 
document.getElementById("myIMP_DEBIT").value=dts[4];
document.getElementById("myTIMESTAMP").value=dts[5];
document.getElementById("myAP_DEPARTRMENT").value=dts[6]; 
document.getElementById("myIMPAUTHORISERNAME").value=dts[7]; 
document.getElementById("myIMPAUTHORISEDBY").value=dts[8]; 
document.getElementById("myIMPAUTHORISEDDATE").value=dts[9]; 
document.getElementById("myIMPAUTHCOMMENT").value=dts[10]; 
document.getElementById("myBUDGETDETAILS").value=dts[11]; 
document.getElementById("myAPPLICANTNAME").value=dts[12];

}
</script>
  
	<div id="work" style="width:100%; "> 
    <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
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
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND FORWARDTO ='$rm' AND APPROACTION ='PENDING' ORDER BY ORDERNO DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['BUDGETLINE']."***".$res['CODE']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'] ."***".$res['IMPAUTHORISERNAME']."***".$res['IMPAUTHORISEDBY']."***".$res['IMPAUTHORISEDDATE']."***".$res['IMPAUTHCOMMENT']
	."***".$res['BUDGETDETAILS']."***".$res['APPLICANTNAME'];
	      
		echo "<tr>";
		echo "<td>".$res['id']."</td>";   
		echo "<td>".$res['ORDERNO']."</td>"; 
		echo "<td>".$res['IMPREST_DESCRIPTION']."</td>"; 
		echo "<td>".$res['IMP_DEBIT']."</td>";  
		echo '<td><a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="View item"   onclick="postpetty(this.id)"> 
		<span class="glyphicon glyphicon-ok"> </span> </a> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getapproval(this.id)" data-toggle="tooltip" title="Approved line item" 
		<span class="glyphicon glyphicon-off"> </span></a>  
		</td>';  			
	}
?>
	</tbody>
  </table> 
  
  
   <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:100%;background-color:#F9F9F9;">Budget extension </th> 
      </tr>
    </thead>   
    <tbody>
        <tr> 
        <th style="width:100%;"><input type="text"  id="myBUDGETDETAILS" name="BUDGETDETAILS" readonly="readonly" 
        style="width:100%; text-align:left; background-color:#ECF0F5;">  </th> 
    </tbody>
    </table> 
  
   <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;background-color:#F9F9F9;">Applicant </th>
        <th style="border-bottom-color:white;font-weight:bold; width:66.6666666666%;background-color:#F9F9F9;"></th>   
      </tr>
    </thead>   
    <tbody>
        <tr> 
        <th style="width:50%;"><input type="text"  id="myAPPLICANTNAME" name="APPLICANTNAME" readonly="readonly" 
        style="width:100%; text-align:left; background-color:#ECF0F5;">  </th>
        <td style="width:50%;"> <b style="background-color:#f9f9f9;">Note:</b> Click the tick icon to Approve orders by ID</td> 
    </tbody>
    </table>  
  
      </div></div>
      
       <div class="col-sm-6">
       <br>
    <table class="table table-bordered ">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:20%;">Amount requested </th>
        <th style="border-bottom-color:white;font-weight:normal; width:23.3333333333%;">Requisition date </th>
        <th style="border-bottom-color:white;font-weight:normal; width:56.3333333333%;">Applicant department</th>  
      </tr>
    </thead>   
    <tbody>
      <tr>
        <th style="width:20%;"><input type="date"  name="IMP_DEBIT" id="myIMP_DEBIT"  value="" readonly="readonly" 
        style="width:100%; text-align:center;font-weight:bold;background-color:#ECF0F5;"></th>
        
        <th style="width:23.3333333333%;"><input type="standard"  name="TIMESTAMP" id="myTIMESTAMP"  value="" readonly="readonly" 
        style="width:100%; text-align:left;font-weight:bold;background-color:#ECF0F5;"></th>
        
        <td style="width:56.3333333333%;"><input type="text" name="AP_DEPARTRMENT" id="myAP_DEPARTRMENT" value="" readonly="readonly" 
        style="width:100%; text-align:left;font-weight:bold;background-color:#ECF0F5;"></td> 
    </tr> 
    </tbody>
    </table> 
      
       
    <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:bold; width:33.3333333333%;">Authorised by </th>
        <th style="border-bottom-color:white;font-weight:bold; width:66.6666666666%;"> </th>   
      </tr>
    </thead>
    <tbody>
        <tr>
        <td style="width:50%;"> 
        <input type="text"  name="IMPAUTHORISERNAME" id="myIMPAUTHORISERNAME" value="" readonly="readonly" 
         style="background-color:#fff; width:100%;background-color:#ECF0F5;"> 
        <input type="text" name="IMPAUTHORISEDBY" id="myIMPAUTHORISEDBY"  value="" readonly="readonly" 
        style="background-color:#fff; width:100%;background-color:#ECF0F5;">   
        <input type="text" name="IMPAUTHORISEDDATE"  id="myIMPAUTHORISEDDATE" value="" 
        style="background-color:#fff; width:100%;background-color:#ECF0F5;">   
       
        </td>  
        <th style="width:50%;"><textarea class="textarea" name="IMPAUTHCOMMENT" id="myIMPAUTHCOMMENT" readonly="readonly"
        style="width:100%; text-align:left;font-weight:normal;height: 54px;background-color:#ECF0F5;"></textarea></th> 
    </tbody>
    </table>   
           
    <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:bold; width:33.3333333333%;">Approved by </th>
        <th style="border-bottom-color:white;font-weight:bold; width:66.6666666666%;">Send to</th>   
      </tr>
    </thead>
    <tbody>
        <tr>
        <td style="width:50%;"> 
        <input type="text"  name="IMPAPPROVERNAME" id="IMPAPPROVERNAME"  value="<?php echo $nameofuser; ?>" readonly="readonly" 
        style="background-color:#fff; width:100%;background-color:#ECF0F5;"> 
        <input type="text" name="IMPAPPROVERTITTLE" id="IMPAPPROVERTITTLE"   value="<?php echo $desc; ?>" readonly="readonly" 
        style="background-color:#fff; width:100%;background-color:#ECF0F5;">   
        <input type="text" name="IMPAPPROVEDDATE"  id="IMPAPPROVEDDATE"  value="<?php echo date('Y-m-d'); ?>" required ="required" 
        style="background-color:#fff; width:100%;background-color:#ECF0F5;">   
       
        </td>  
        <th style="width:50%;">
        <select name="FINALREDIRECTION" id="FINALREDIRECTION" required="required" style="width:100%; text-align:left;">
                  <option value="Undefined"> <option>
                   <?php   echo $stdd; ?>  
                  </select> 
                  
                  
        <textarea class="textarea" name="APPROVERCOMMENT" id="APPROVERCOMMENT" required="required" placeholder="Comment"
        style="width:100%; text-align:left;font-weight:normal;height: 34px;"></textarea>
        
        </th> 
    </tbody>
    </table>          
                   
  
        <center> <input type="radio" name="APPROACTION" id="APPROACTION" value="APPROVED" checked>
        <label for="APPROVED">APPROVE</label>
		<input name="APPROACTION" type="radio" id="APPROACTION" value="REJECTED">
		<label for="REJECTED">REJECT</label> </center>
                                
         <P></P>
        <input type="hidden" id="APPROVERPFNUMBER" name="APPROVERPFNUMBER" value="<?php echo $pf; ?>" > 
        <input type="hidden" id="APPROVERDEPARTMENT" name="APPROVERDEPARTMENT" value="<?php echo $dept; ?>" >
         
        <input type="hidden" id="myid" name="id" value="" >
         
          <center> <input type="submit" name="update" value="Update" class="button5"> </center>
           <br>    
	     </form>
      
      
          </div> </div>
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
      <!-- START PROGRESS BARS -->
          
                      
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                       My approvals
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                     <div id="work" style="width:100%; "> 
    <table id="example2" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
                     <th>ORDER ID.</th>
                     <th>REQUISITION DATE</th>
                     <th>APPLICANT</th>
                     <th>DEPARTMENT</th> 
					 <th>AUTHORISED BY</th>  
                     <th>DATE</th>   
                     <th>APPROVED BY</th>
                     <th>DATE</th>   
                     <th>PMT STATUS</th> 
                     <th>ACTION</th>      
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND FORWARDTO ='$rm' AND APPROACTION ='APPROVED'
                                 GROUP BY ORDERNO ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['BUDGETLINE']."***".$res['CODE']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'] ."***".$res['IMPAUTHORISERNAME']."***".$res['IMPAUTHORISEDBY']."***".$res['IMPAUTHORISEDDATE']."***".$res['IMPAUTHCOMMENT']
	."***".$res['BUDGETDETAILS']."***".$res['APPLICANTNAME'];
	      
		echo "<tr>";
		echo "<td>".$res['ORDERNO']."</td>"; 
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['APPLICANTNAME']."</td>";   
		echo "<td>".$res['AP_DEPARTRMENT']."</td>";  
		echo "<td>".$res['IMPAUTHORISERNAME']."</td>";
		echo "<td>".$res['IMPAUTHORISEDDATE']."</td>";  
		echo "<td>".$res['IMPAPPROVERNAME']."</td>";  
		echo "<td>".$res['IMPAPPROVEDDATE']."</td>"; 
		echo "<td>".$res['CASHOUT']."</td>";  
		echo '<td> <a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getapproval(this.id)" data-toggle="tooltip" title="Click to view details" 
		<span class="glyphicon glyphicon-book"> </span></a>  
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
                     Cash payment vourcher remote storage
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                     <div id="work" style="width:100%; "> 
    <table id="example3" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
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
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='PENDING' AND SENDTO ='$rm' ORDER BY ORDERNO DESC");
  
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
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
       
         <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

               <div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logsbig.PNG" width="100%" height="100%">
</div> 
      
           <div class=""  id="pettyview_approve" >  </div>
                <script>

          function getapproval(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'config/inline/pettyview_approve.php?q='+odno,
                       success : function(data){
                                $('#pettyview_approve').html(data);
								$("#impres").modal("show");
                                 }
               });
               }

          </script>
           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>

         </form> 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>
                         
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
            </p>
            <p></p> 
           
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
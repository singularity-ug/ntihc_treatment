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
 
 

 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>cpanel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/ionicons.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="assets/notifier2.css">

  <script type="text/javascript" src="cpane/js/gauge.js"></script>
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
             background-color:transparent;
             }
             table tr:nth-child(even) {
             background-color:transparent;
             }  

</style>




</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <?php
  require('connect/config.php');?>
  <header class="main-header">

    <!-- Logo -->
    <a href="sys_dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="font-size: 12px; text-align: left;">System Admin</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->

                  </li>
                  <!-- end task item -->

                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
              <li><a href="../index.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              </li>
              <!-- Menu Body -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="home_user.php" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
    
    <!-- Content Header (Page header) -->
    <section class="content-header"  
    style="background:url(../assets/img/pattern/37734511-light-wallpaper.jpg);">
      
    <!-- Main content -->
      <div class="row">
        <div class="col-md-3" style="background-color: transparent;">


    <table border="1" cellpadding="4" cellspacing="0" 
    style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px; background-color: transparent;" width="100%">
    <thead> 
    <tr>  
    <td style="width:16%; border: 0px; background-color: transparent;">  
        <img src="assets/img/ntihclog2.png"width="70" height="90" style="border: 0px; background-color: transparent; ">   
      </td>
   
      
     <td style="width:28%; border: 0px; background-color: transparent;"> 
     <a href=<button class="small-box-footer" data-toggle="modal" data-target="#notificationModalnine"> 
     <center><img src="../database icons/icon-processmanagement.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
        Add&nbsp;New user</center>  </a></button>
         <div class="pull-right box-tools"> </div> 
        </div>    
    </td>
    

      <td style="width:28%; border: 0px; background-color: transparent;"> 
     <a href="http://41.190.139.254:8080/phpmyadmin/index.php?db=contemporary&target=db_operations.php&token=2a23c0765ced1df271e995a93c36fd96">  
     <center><img src="../database icons/sytemadmin.jpg"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
        phpMyAdmin login </center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>    
    </td>
   
        <td style="width:28%; border: 1px;"> <a href="abortioncare.php">
        <center><img src="../database icons/clients.jpg"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        System audits&nbsp;<b class="data-toggle=tooltip" tittle="Missing on TOR"> </center> </a>
        <div class="pull-right box-tools"> </div> 
        </div>   
    </td> 
    
   <td style="width:10%; border: 1px;">  
    </td>  
 </tbody>
 </table> 
          <a href="sys_dashboard.php" class="btn btn-primary btn-block margin-bottom"> System Dashboard</a>

          <div class="box box-solid" style="background-color: transparent;">
            <div class="box-header with-border">
              <h3 class="box-title">Summary of users</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">

               <table border="1" cellpadding="4" cellspacing="0" 
    style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px; background-color: transparent;" width="100%">
    <thead> 
    <tr>   

     <th style="width:26%; border: 0px; background-color: transparent;"> <strong>Registered users&nbsp;[Active]</strong></th>
     <th style="width:1.333333%; border: 0px; background-color: transparent;"> <strong> </strong></th>
       <th style="width:12%; text-align:left; border:0px;">   
       <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5"> 
       <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
if ($result = mysqli_query($link, "SELECT ID, Email FROM user_table 
  WHERE Current_Status = 'ACTIVE'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf(" %d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
     ?>

       </td>  
       <th style="width:1.33333333%; text-align:left; border:0px;">  </th>
     
     <td style="width:18%; border: 0px; background-color: transparent;"> <strong>Users online&nbsp;</strong></th>
       <th style="width:11%; text-align:left; border:0px;">   
       <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5"> 
       00

       </td>  
       <th style="width:1.33333333%; text-align:left; border:0px;">  </th>
    </td>
    

     <td style="width:18%; border: 0px; background-color: transparent;"> <strong>Users offline </strong></th>
       <th style="width:11%; text-align:left; border:0px;">   
       <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5"> 
      00

       </td>   
     
      
 </tbody>
 </table> 

            </div>
          </div>
          <!-- /. box -->


           <div class="box box-solid" style="background-color: transparent;">
            <div class="box-header with-border">
              <h3 class="box-title"> Number of users by department</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
            
              <div class="table-responsive mailbox-messages">
               <table id="example11" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No.</th>
              <th>USER TYPE</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No.</th> 
              <th>USER TYPE</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
 <?php

require('../php/confighr.php');
$sql = "SELECT COUNT(ID), Dept FROM user_table GROUP BY Dept ORDER BY COUNT(ID) DESC ";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.
        '<td>'.$row['Dept'].'</td>'. 
        '<td>'.$row['COUNT(ID)'].'</td>'.
       '<td><input type="button"  onclick="postvalues(this.id)" value="CLICK"></td>'. 
   '</tr>';
$x=$x+1;

 }

 ?>  
    </tbody>
  </table>  
  </div> 

            </div>
          </div>

          </div>
          <!-- /.box --> 


                <div class="col-md-9">
           
   <hr  style="padding:2px; width:100%; margin-left:0%; height:1px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:1px;background-color:yellow;margin-top:-20px;"> 
   <hr style="padding:2px; width:100%; margin-left:0%; height:1px; background-color:red;margin-top: -17px;"> 

 <div class="table-responsive mailbox-messages">
    
 <script> 
function regn(myid){
var dtss = myid.split("***");
document.getElementById("myFirst_Name").value=dtss[1];
document.getElementById("myid").value=dtss[0];
document.getElementById("myLast_Name").value=dtss[2];
document.getElementById("mygender").value=dtss[3];
document.getElementById("myEmail").value=dtss[4];
document.getElementById("myDescription").value=dtss[5];
document.getElementById("myDept").value=dtss[6];
document.getElementById("myPhonecontact").value=dtss[7]; 
document.getElementById("myfacilityname").value=dtss[8]; 
document.getElementById("myStaff_Number").value=dtss[9];
document.getElementById("mymyauthorizationrights").value=dtss[10]; 
document.getElementById("myfacilitydescription").value=dtss[11]; 
document.getElementById("mydateoffirstappointment").value=dtss[12];
document.getElementById("mydesignationoffirstappointment").value=dtss[13];
document.getElementById("myCurrent_Status").value=dtss[14];
document.getElementById("myGrantedby").value=dtss[15];  
document.getElementById("myPortfolio").value=dtss[16];  
}
</script>

<div id="work" style="width:100%; font-weight:normal;">
     <table id="example8" class="table table-striped table-bordered"  style="font-size:90%; font-weight:normal;" cellspacing="0" width="100%"> 
     
        <thead>
        <tr> 
              <th>NO.</th>
              <th>DATE</th>  
              <th>NAME</th> 
              <th>E-MAIL</th>
              <th>TITLE</th>
              <th>DEPARTMENT</th> 
              <th style="color:white; background-color:green;">ACTION</th>
              <th style="color:BLACK; background-color:RED;">DELETE</th>   
        </tr>
        </thead>
        <tfoot>
        <tr>
              <th>NO.</th>
              <th>DATE</th> 
              <th>NAME</th> 
              <th>E-MAIL</th>
              <th>TITLE</th>
              <th>DEPARTMENT</th> 
              <th style="color:white; background-color:green;">ACTION</th>
              <th style="color:BLACK; background-color:RED;">DELETE</th>   
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/configahr.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM user_table ORDER BY ID DESC");
 
  //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
  while($res = mysqli_fetch_array($result)) { 
  $dtss = $res['ID']."***".$res['First_Name']."***".$res['Last_Name']."***".$res['gender']."***".$res['Email']."***".$res['Description']."***".$res['Dept']    
  ."***".$res['Phonecontact']."***".$res['facilityname']."***".$res['Staff_Number']."***".$res['authorizationrights'] ."***".$res['facilitydescription']
   ."***".$res['dateoffirstappointment']."***".$res['designationoffirstappointment']
  ."***".$res['Current_Status'] ."***".$res['Grantedby']."***".$res['Portfolio']; 
   
    echo "<tr>";
    echo "<td>".$res['ID']."</td>";
    echo "<td>".$res['Date_Added']."</td>";
    echo "<td>".$res['First_Name'].' '.$res['Last_Name']. "</td>"; 
    echo "<td>".$res['Email']."</td>"; 
    echo "<td>".$res['Description']."</td>"; 
      echo "<td>".$res['Dept']."</td>"; 
    echo '<td><a id="'.$dtss.'" href="javascript:void(0);"   onclick="regn(this.id)">Switch On / Off</a> </td>'; 
    echo "<td><a href=\"../updatecmgt/deleteUser.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\" >Truncate</a></td>";      
  }
  ?>
  </tbody>
  </table>  

 </div> </div> 

  <hr  style="padding:2px; width:100%; margin-left:0%; height:1px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:1px;background-color:yellow;margin-top:-20px;"> 
   <hr style="padding:2px; width:100%; margin-left:0%; height:1px; background-color:red;margin-top: -17px;"> 



 
 <div class="col-sm-4" >
 <form method="post" action="../updatecmgt/editUser.php">

    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px; font-size: 10px;">FIRST NAME </td>
        <td style="width:65%;border:0px;"><input type="text" id="myFirst_Name" name="First_Name" 
        value=""  style=" width:100%; background-color:transparent;">
        
        </td>
    </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px;font-size: 10px;">LAST NAME </td>
        <td style="width:65%;border:0px;"><input type="text" id="myLast_Name" name="Last_Name"  
        value=""  style=" width:100%; background-color:transparent;">
        
        </td>
    </tr> </table>

         
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px; font-size: 10px;">GENDER </td>
        <td style="width:65%;border:0px;"><select id="mygender"  name="gender" 
        value=""  style=" width:100%; background-color:transparent;">
        <option value="">  </option>  
                 <option value="MALE"> MALE </option> 
                 <option value="FEMALE">FEMALE</option> 
                       </Select>  
        </td>
    </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px;font-size: 10px;">EMAIL </td>
        <td style="width:65%;border:0px;"><input type="text" id="myEmail" name="Email"  
        value=""  style=" width:100%; background-color:transparent;">
        
        </td>
    </tr> </table>

                
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px; font-size: 10px;">DESIGNATION </td>
        <td style="width:65%;border:0px;"> <input type="text" id="myDescription"  name="Description" 
        value=""  style=" width:100%; background-color:transparent;"> 
        </td>
    </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px;font-size: 10px;">DEPARTMENT </td>
        <td style="width:65%;border:0px;"><select id="myDept"  name="Dept" value="" 
        value=""  style=" width:100%; background-color:transparent;">
        <option value="">  </option>  
                  <option value="SERVICE DELIVERY">SERVICE DELIVERY</option> 
                  <option value="ADVOCACY AND RESEARCH">ADVOCACY AND RESEARCH</option> 
                  <option value="FINANCE AND ADMINISTRATION">FINANCE AND ADMINISTRATION</option>
                  <option value="EXECUTIVE ADMINISTRATION">EXECUTIVE ADMINISTRATION</option>
                  </Select>
        </td>
    </tr> </table>         
     </div> 
        
     <div class="col-sm-4" >
            
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px; font-size: 10px;">PHONE CONTACT </td>
        <td style="width:65%;border:0px;"> <input type="alphanumeric"  id="myPhonecontact"  name="Phonecontact"  
        value=""  style=" width:100%; background-color:transparent;"> 
        </td>
    </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px;font-size: 10px;">FACILITY NAME </td>
        <td style="width:65%;border:0px;"><input type="text" id="myfacilityname"  name="facilityname" 
        value=""  style=" width:100%; background-color:transparent;"> 
        </td>
    </tr> </table>               
                  
        
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px; font-size: 10px;">STAFF NUMBER </td>
        <td style="width:65%;border:0px;"> <input type="alphanumeric" id="myStaff_Number" name="Staff_Number"
        value=""  style=" width:100%; background-color:transparent;"> 
        </td>
    </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px;font-size: 10px;">PROCESS RIGHTS </td>
        <td style="width:65%;border:0px;"><select id="myauthorizationrights" name="authorizationrights"  
        value=""  style=" width:100%; background-color:transparent;"> 
         <option value=""> </option>
                  <option value="GRANTED"> GRANT ACCESS</option>
                  <option value="DENIED"> DISABLE RIGHTS</option>
                  </select>
        </td>
    </tr> </table>      

   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px; font-size: 10px;">FACILITY </td>
        <td style="width:65%;border:0px;"> <select id="myfacilitydescription"  name="facilitydescription"
        value=""  style=" width:100%; background-color:transparent;"> 
         <option value="">  </option>  
                  <option value="HEADQUARTER">HEADQUARTER</option> 
                  <option value="SUPPORTED HEALTH CENTER">SUPPORTED HEALTH CENTER</option>  
                  </Select>
        </td>
    </tr> </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px;font-size: 10px;">1ST APPOINTMENT</td>
        <td style="width:65%;border:0px;"> <input type="text"  id="mydateoffirstappointment"  name="dateoffirstappointment"
        value=""  style=" width:100%; background-color:transparent;">  
        </td>
    </tr> </table>      



  
   </div>  
        <div class="col-sm-4"> 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:100%;border:0px; font-size: 10px;">DESIGNATION OF FIRST APPOINTMENT </td> 
    </tr> </table>

    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <td style="width:100%;border:0px;"> <input type="text"  id="mydesignationoffirstappointment"  name="designationoffirstappointment"
        value=""  style=" width:100%; background-color:transparent;">  
        </td>
    </tr> </table>
 
  <input type="hidden" id="myid" name="ID" value="" >
  

 <table class="table table-striped table-bordered" style="font-weight:normal;">
      <thead>        
                 
                <td style="background-color:green; color:white;"> GRANTED BY: &nbsp;&nbsp;&nbsp 
                <input type="text"  id="myGrantedby"  name="Grantedby" value=" <?php echo $nameofuser; ?>" style=" width:100%; color:black;"> </td>  
         </thead> 
     </tbody>
  </table>
    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       

   <div class="progress progress-striped active" >
    <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%; color:white; text-align:left;">
    &nbsp AUTHENTICATION TYPE<span class="sr-only">60% Complete</span>
    </div>
        </div> 
  <div class="progress progress-striped active" >
    <div class="progress-bar progress-bar-imms1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
        style="width: 100%; color:black; text-align:left;">
    <select id="myPortfolio"  name="Portfolio" value="" style="width:100%; ">
           <optgroup label="M.E UNIT"> 
                  <option value=""> </option>
                  <option value="SYSTEM ADMIN">SYSTEM ADMIN</option> 
                  <option value="USER ADMIN">ADMIN USER</option>  
                   </optgroup>
            <optgroup label="SUPER ADMIN "> 
                  <option value="DIRECTOR">DIRECTOR</option> 
                  <option value="DEPUTY DIRECTOR">DEPUTY DIRECTOR</option>  
                  </optgroup>
            <optgroup label="SUPER USER"> 
                  <option value="HEAD SERVICE DELIVERY">HEAD SERVICE DELIVERY</option>
                  <option value="HEAD ADVOCACY AND RESEARCH">HEAD ADVOCACY AND RESEARCH</option>
                  <option value="HEAD FINANCE AND ADMIN">HEAD FINANCE AND ADMIN</option>
                  </optgroup>
            <optgroup label="SERVICE DELIVERY">    
                 <option value="CLIENT MANAGEMENT">CLIENT MANAGEMENT</option> 
                 <option value="CLIENT MANAGEMENT AND ADMIN">CLIENT MANAGEMENT AND ADMIN</option>  
                 </optgroup>
                  </Select><span class="sr-only">60% Complete</span>
        </div>
            </div>

            </div>
            

            <div class="col-sm-4"><br>
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:35%;border:0px;font-size: 10px;">USER STATUS</td>
        <td style="width:65%;border:0px;"> <select id="myCurrent_Status"  name="Current_Status" 
        value="" class="button 5" style=" width:100%; background-color:transparent;">
                  <option value="ACTIVE">ACTIVE</option>
                  <option value="LOGGED OUT">LOGGED OUT</option>
                  </select> 
        </td> 
    </tr> </table>      
 
            </div>
            
            <div class="col-sm-4"><br>
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px; background-color: transparent;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:100%;border:0px;font-size: 10px;">
        <center> <input type="submit" name="update" value="Update">  </center> 
      </td>
    </tr> </table>      
 
            </div> 

             <div class="col-sm-4"><br>

             

             </div> 
         
  </form> 
   </div> 
   <div class="col-sm-12"> 
           <a href="http://41.190.139.254:8080/phpmyadmin/index.php?db=contemporary&target=db_operations.php&token=2a23c0765ced1df271e995a93c36fd96">  
           <center> <canvas id="canvas" width="400" height="400" 
           style="height: 15%;width: 15%;" data-toggle="tooltip" title="Access denied"> </canvas></center></a>
          </div>

 </div></div>
 
  </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row --> 
  </div>
  


 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalnine" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
  <div class="col-sm-12" >
<img src="../assets/img/logs.PNG" width="100%" height="100%">
</div>  
 

          <center> <legend style="color:#000; font-weight:bold;font-size:11px;"> NEW USER REGISTRATION FORM </legend> </center>

             <form class="form-horizontal" action="processusers_registration.php" method="POST" style="height:auto; font-size:10px;" >
             
            <table class="table table-bordered" style="margin-top:-10px;">
      <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"> </th>
        <th style="border-bottom-color:white; width:50%; "> </th>  
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td>
         <div class="form-group">
                                            <label class="control-label col-sm-4">Fisrt name</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="First_Name" name="First_Name" class="form-control" required="required"/>
                                        </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="control-label col-sm-4">Last name</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="Last_Name" name="Last_Name" class="form-control" required="required"/>
                                        </div>
                                        </div> 
                              
                                          <div class="form-group">
                                            <label class="control-label col-sm-5">Gender</label> 
                                            <label class="radio-inline ">
                                                <input type="radio" style="margin-top: 0px;" name="gender" id="MALE" value="MALE" checked="checked" />MALE
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" style="margin-top: 0px;" name="gender" id="FEMALE" value="FEMALE" />FEMALE
                                            </label> 
                                        </div>
                                        
                                        
                                <div class="form-group">
                                            <label class="control-label col-sm-4">E-mail</label>
                                            <div class="col-sm-8"> 
                                           <input type="email" id="Email" name="Email" class="validate[required,custom[email]] form-control" required="required"/>
                                            </div>
                                        </div>
                                           <input type="hidden" id="created" name="created" class="form-control" >
                                           
                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Password</label> 
                                            <div class="col-sm-8">
                                           <input type="password" id="Password" name="Password" class="validate[required] form-control" required="required"/>  
                                        </div>
                                        </div>
                                        
                                        <div class="progress progress-striped active">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%;  color:#FFF; font-weight:bold; text-align:left;">
     SYSTEM AUTHENTICATION LEVELS<span class="sr-only">60% Complete</span>
    </div>
      </div>
        <p></p>            
                                           
                                         
        <div class="progress progress-striped active">
    <div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
        style="width: 100%; background-color:red; color:#000000; font-weight:bold;">
     <select id="myPortfolio"  name="Portfolio" required="required" style="width:100%;"/>
           <optgroup label="M.E UNIT"> 
                  <option value=""> </option>
                  <option value="SYSTEM ADMIN">SYSTEM ADMIN</option> 
                  <option value="USER ADMIN">ADMIN USER</option>  
                   </optgroup>
            <optgroup label="SUPER ADMIN "> 
                  <option value="DIRECTOR">DIRECTOR</option> 
                  <option value="DEPUTY DIRECTOR">DEPUTY DIRECTOR</option>  
                  </optgroup>
            <optgroup label="SUPER USER"> 
                  <option value="HEAD SERVICE DELIVERY">HEAD SERVICE DELIVERY</option>
                  <option value="HEAD ADVOCACY AND RESEARCH">HEAD ADVOCACY AND RESEARCH</option>
                  <option value="HEAD FINANCE AND ADMIN">HEAD FINANCE AND ADMIN</option>
                  </optgroup>
      <optgroup label="F & A DEPARTMENTAL USERS"> 
                  <option value="HEAD SERVICE DELIVERY">FINANCE AND ADMIN DEPARTMENTAL USER</option> 
                  </optgroup>   
            <optgroup label="SERVICE DELIVERY">    
                 <option value="CLIENT MANAGEMENT">CLIENT MANAGEMENT</option> 
                 <option value="CLIENT MANAGEMENT AND ADMIN">CLIENT MANAGEMENT AND ADMIN</option>  
                 </optgroup>
                 </Select><span class="sr-only">60% Complete</span>  
    </div>
      </div>
        <p></p>  
         
                                         
                 <div class="form-group">
                                            <label class="control-label col-sm-4">Phone contact</label>
                                            <div class="col-sm-8">
                                            <input type="alphanumeric" id="Phonecontact" name="Phonecontact" class="form-control" />
                                        </div>
                                        </div>
                 
                <div class="form-group">
                                            <label class="control-label col-sm-4">Staff number</label>
                                            <div class="col-sm-8">
                                            <input type="alphanumeric" id="Staff_Number" name="Staff_Number" class="form-control" />
                                        </div>
                                        </div>                            
         </td>
         
        <td> 
        
         
                                            <div class="form-group">
                                            <label class="control-label col-sm-4">Department</label>
                                            <div class="col-sm-8"> 
                                               <select class="form-control" id="Dept" name="Dept" required="required"/>
                                               <option> </option>
                                               <option>SERVICE DELIVERY</option>
                                               <option>FINANCE AND ADMINISTRATION</option>
                                               <option>ADVOCACY AND RESEARCH</option> 
                                               </select>
                                            
                                        </div>
                                        </div>
                                         
                                            <div class="form-group">
                                            <label class="control-label col-sm-4">Title</label>
                                            <div class="col-sm-8">
                                            <input type="text" id="Description" name="Description" class="form-control" />
                                        </div>
                                        </div> 
                                        <!-- /.form-group -->  
                            
                                  <div class="form-group" style="margin-left:0px;">
                  <label for="exampleInputFile">Import signature</label>
                  <input type="file" id="exampleInputFile" name="signature">   
                                        </div> 
                <!-- /.form-group --> 
                
                <div class="form-group">
                                            <label class="control-label col-sm-4">Date of first appointment</label>
                                            <div class="col-sm-8">
                                            <input type="date" id="dateoffirstappointment" name="dateoffirstappointment" class="form-control" />
                                        </div>
                                        </div> 
                                        <!-- /.form-group --> 
                                        
                                  <div class="form-group">
                                            <label class="control-label col-sm-4">Designation of first appointment</label>
                                            <div class="col-sm-8">
                                            <input type="text" id="designationoffirstappointment" name="designationoffirstappointment" class="form-control" />
                                        </div>
                                        </div> 
                                        <!-- /.form-group --> 
                                        
                                        
                                         <div class="form-group">
                                            <label class="control-label col-sm-4"> Facility name</label>
                                            <div class="col-sm-8">
                                            <input type="text" id="facilityname" name="facilityname" value="NTIHC" class="form-control" />
                                        </div>
                                        </div> 
                                        <!-- /.form-group --> 
                                        
                                        <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Facility unit</label>
                    <div class="col-sm-8">
                        <select class="form-control"  id="facilitydescription" name="facilitydescription" 
                        style="text-transform:uppercase;font-size: 11px;"/>
                        <option>HEADQUARTER </option> 
                        <option>SUPPORTED CENTER </option> 
                       </select>
                    </div>
                </div>
                <!-- /.form-group -->      
        </td> 
      
      </tr>
    </tbody>
  </table>         
                     
         <div class="col-sm-12">
         <input type="submit" name="button" id="button" value="Submit record" />
         </form> 
        
 <button type="button" class="btn btn-default" data-dismiss="modal" style="text-align:right;">Close</button>
 </div>
                                        
                                        <div class="modal-footer">
                                           
                                        </div></div> 
                                    </div>
                                </div>
                            </div>
                    </div>

                    
                    

                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row --> 
  </div>
  
 

<!-- jQuery 2.2.3 -->
<!-- Bootstrap 3.3.6 -->
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


 <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
  function addRow16(tableId){

   var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1a = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+ 'background-color:#fff; width:100%;">';

   var  s2b = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+ 'background-color:#fff; width:100%;">';

   var  s3c =  '<select name="uom[]" required="required"  id="uom_'+rowCount+'"'+
                'style= " margin-left:-5px; width:100%; background-color:#fff;" >'+
                              '<option>NIL</option>'+
                                    '<option>PCS</option>'+
                                        '</select>';

   var  s4d =  '<input type="numeric" name="escost[]" id="escost_'+rowCount+'"  required="required" '+
                 'style= " margin-left:-5px; width:100%; background-color:#fff;" >';

     var  s5e =  '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'"  required="required" '+
                 'style= " margin-left:-5px; width:100%; background-color:#fff;" >';


          var row      = table.insertRow(rowCount);
      var row2     = '<td><input type="checkbox" ></td>'+
                                '<td>'+s1a+' </td>'+
                                '<td>'+s2b+' </td>'+
                  '<td>'+s3c+' </td>'+
                                '<td>'+s4d+' </td>'+
                          '<td>'+s5e+' </td>';
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
      table.rows[x].cells[1].childNodes[0].id="desc_"+x;
          table.rows[x].cells[2].childNodes[0].id="qty_"+x;
      table.rows[x].cells[3].childNodes[0].id="uom_"+x;
      table.rows[x].cells[4].childNodes[0].id="escost_"+x;
      table.rows[x].cells[5].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}
  </script>
   <!-- /.END PROCUREMENT REQUISITION  SCRIPT -->


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
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';


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

  <!-- /.START CASH PAYMENT VOUCHER SCRIPT -->
   <script>
  function addRow17(tableId){
     var  s1a = '<input type="text" name="description" id="description_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

   var  s2b =  '<select name="currency" required="required"  id="currency_'+rowCount+'"'+

                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
                              '<option>UGX</option>'+
                                    '<option>USD</option>'+
                                        '</select>';

   var  s3c =  '<input type="numeric" name="debit" id="debit_'+rowCount+'"  required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';


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
  <!-- /.END CASH PAYMENT VOUCHER SCRIPT -->


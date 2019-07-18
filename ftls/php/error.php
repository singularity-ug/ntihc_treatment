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
  header('location:../index.php');
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/uniform.css" /> 
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body style="background: #1e282c;"> 
<!--Header-part-->
<div id="" style="background-color: #f56954;">
  <h2><a href="dashboard.php" style="font-size:12px; color:#f56954;"> . </a></h2>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" style="background:tranparent;">
  <ul class="nav" style="background:tranparent;">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages"
      class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> <?php echo $nameofuser; ?> </a></li>
        <li class="divider"></li>
         <li><a href="#"><i class="icon-user"></i> Full profile</a></li>
        <li><a href="../index.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>

    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages"
      class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span>
      <span class="">&nbsp <b style="color:white;">0</b></span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>

    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">My tasks</span></a></li>

    <li class=""><a title="" href="../index.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--end-nav-->


<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-signal"></i> &nbsp; &nbsp; &nbsp; FLEET USER MENU</a>
  <ul>
    <li  class="submenu active"><a href="dashboard.php"><i class="icon icon-home"></i> <span>FLEET MGT SYSTEM</span></a> </li>

       <li><a href="dashboard.php"><i class="icon icon-signal"></i> <span>Fleet users dashboard</span></a> </li>

       <li><a href="cordination.php"><i class="icon icon-signal"></i> <span>Cordination unit</span></a> </li>
 
       <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Fuel sub module-Admin</span> </span></a>
      <ul> 
        <li><a href="error.php">Fuel entry wizard</a></li>
        <li><a href="error.php">Fuel control panel</a></li> 
      </ul>
    </li>
     
       

       <li><a href="error.php"><i class="icon icon-signal"></i> <span>Motor vehicle log books</span></a> </li>


    <li><a href="error.php"><i class="icon icon-th"></i> <span>Fleet maintenance</span></a></li>

    <li><a href="error.php"><i class="icon icon-th"></i> <span>Accidents management</span></a></li>

     <li><a href="error.php"><i class="icon icon-th"></i> <span>Insurance and compensation</span></a></li>

    <li><a href="error.php"><i class="icon icon-th"></i> <span>General fleet management</span></a></li>

    <li><a href="error.php"><i class="icon icon-fullscreen"></i> <span>Verification and valuation</span></a></li>

     <li><a href="error.php"><i class="icon icon-fullscreen"></i> <span>Drivers management</span></a></li>


     <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Reports module</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="error.php">Under development</a></li>
      </ul>
    </li>

     <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Quick data export</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="error.php">Under development</a></li>
      </ul>
    </li>
</div>


<div id="content" style="background: #fff;">
  <div id="content-header" style="margin-top: 1px;">
   <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
                          <a href="#myModal" data-toggle="modal" class="">Transport</a> 
                          <a href="#myModal2" data-toggle="modal" class="">Requisitions</a>  
                          </div> 
  </div> 
 
  <div class="container-fluid"> 
    <div class="row-fluid">
        <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Error 500</h5>
          </div>
          <div class="widget-content">
            <div class="error_ex">
              <h1>500</h1>
              <h3>Under development. Method not allowed!</h3>
              <p>Access to this page is restricted</p>
              <a class="btn btn-warning btn-big"  href="dashboard.php">Back to Home</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12" style="color:#fff;"> 2017 &copy; Kampala capital city authority <a href="http://themedesigner.in">  </a> </div>
</div>
<!--end-Footer-part-->
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.wizard.js"></script>
</body>
</html>

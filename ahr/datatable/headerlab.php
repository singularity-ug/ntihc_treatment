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
  
  <nav class="navbar navbar-inverse  navbar-fixed-top">
    <div class="container-fluid" style="background-color:RED;">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">  </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="../../client_management.php" style="margin-top: 2px;">DASHBOARD</a></li>
       
          
            <li><a href="laboratory.php" style="color:#000;border: 1px solid #fff;padding: 13.8px;margin-top: 3px;">HOME</a></li>
             <li><a href="laboratory_tests.php" style="color:#000;border: 1px solid #fff;padding: 13.8px;margin-top: 3px;">TESTS</a></li>
             
             
            </ul>

            <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0)"><span class="glyphicon glyphicon-user"></span> WELCOME:&nbsp<?php echo $nameofuser; ?></a></li>
            <li><a href="../../index.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
            </ul>
      </div>
    </nav>

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

<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>imms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <link rel="stylesheet" type="text/css" href="cpane/bootstrap/css/bootstrap.min.css" />

    <link href="cpane/css/main.css" rel="stylesheet">
    <link href="cpane/css/font-style.css" rel="stylesheet">
    <link href="cpane/css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="cpane/js/jquery.js"></script>    
    <script type="text/javascript" src="cpane/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="cpane/js/lineandbars.js"></script>
    
  <script type="text/javascript" src="cpane/js/dash-charts.js"></script>
  <script type="text/javascript" src="cpane/js/gauge.js"></script>
  
  <!-- NOTY JAVASCRIPT -->
  <script type="text/javascript" src="cpane/js/noty/jquery.noty.js"></script>
  <script type="text/javascript" src="cpane/js/noty/layouts/top.js"></script>
  <script type="text/javascript" src="cpane/js/noty/layouts/topLeft.js"></script>
  <script type="text/javascript" src="cpane/js/noty/layouts/topRight.js"></script>
  <script type="text/javascript" src="cpane/js/noty/layouts/topCenter.js"></script>
  
  <!-- You can add more layouts if you want -->
  <script type="text/javascript" src="cpane/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
  <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
  <script src="cpane/js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="cpane/js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
     
    
    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  </head>
  <body>

    <!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top" style="background-color: #000;">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="../assets/img/ntihclog2.PNG" 
            width="30" height="30" alt=""></a>
        </div> 
          <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
              <li class="active"><a href="sys_dashboard.php"><i class="icon-home icon-white">Dashboard</i>
              <span class="sr-only">(current)</span></a></li> 
       
                       
            </ul>
          </div><!--/.nav-collapse -->
        </div>
     </div>

    <div class="container">
 
        <div class="row">

          <div class="col-lg-5">
            
            <div class="register-info-wraper">
              <div id="register-info">
                <div class="cont2"><p></p>
                  <div class="thumbnail">
                   <img src="cpane/images/profile.jpg"width="100" height="100" style="height:35%; width:35%;" class="img-circle">  
              </div><!-- /thumbnail -->
              <h1 style="font-size:25px;"><?php echo $nameofuser; ?></h1>

             
<?php
  $id ='';  
  $First_Name = ''; 
  $Last_Name  = ''; 
    
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ahr";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM user_table where Email = '$rm'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $First_Name = $row['First_Name']; 
     $Last_Name=$row['Last_Name'];        
      } 
  ?>


              <?php
          $a=mysqli_query($conn,"select * from user_table where Email = '$rm'");
          $arow=mysqli_fetch_array($a); 
        ?>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    <td style="border: 0px; width: 35%; text-align: left;"> User Status </td>
    <td style="border: 0px;width: 65%;"> <?php echo $arow['Current_Status']; ?>  </td> 
    </tr>
    </tbody>
    </table><br><br> 
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    <td style="border: 0px; width: 35%; text-align: left;"> Process rights </td>
    <td style="border: 0px;width: 65%;"> <?php echo $arow['authorizationrights']; ?>  </td> 
    </tr>
    </tbody>
    </table><br><br>    
               
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    <td style="border: 0px; width: 35%; text-align: left;"> PF Number </td>
    <td style="border: 0px;width: 65%;"> <?php echo $arow['Staff_Number']; ?>  </td> 
    </tr>
    </tbody>
    </table><br><br>
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    <td style="border: 0px; width: 35%; text-align: left;">Title </td>
    <td style="border: 0px;width: 65%;"><?php echo $arow['Description']; ?> </td> 
    </tr>
    </tbody>
    </table> <br> <br>  
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    <td style="border: 0px; width: 35%; text-align: left;"> Dept </td>
    <td style="border: 0px;width: 65%;"><?php echo $arow['Dept']; ?> </td> 
    </tr>
    </tbody>
    </table> <br> <br> 
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    <td style="border: 0px; width: 35%; text-align: left;">First appointment </td>
    <td style="border: 0px;width: 65%;"><?php echo $arow['dateoffirstappointment']; ?> </td> 
    </tr>
    </tbody>
    </table> <br> <br> 
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    <td style="border: 0px; width: 35%; text-align: left;">facility</td>
    <td style="border: 0px;width: 65%;"><?php echo $arow['facilityname']; ?> </td> 
    </tr>
    </tbody>
    </table>  
    <br><br>
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    <td style="border: 0px; width: 35%; text-align: left;">Description</td>
    <td style="border: 0px;width: 65%;"><?php echo $arow['facilitydescription']; ?> </td> 
    </tr>
    </tbody>
    </table>    
 <br><br>
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
    <td style="border: 0px; width: 35%; text-align: left;">Enrollment</td>
    <td style="border: 0px;width: 65%;"><?php echo $arow['Date_Added']; ?> </td> 
    </tr>
    </tbody>
    </table>  

    
    


             </div>
            </div>
           </div>
          </div>

          <div class="col-sm-7 col-lg-7">
            <div id="register-wraper">
                <form id="register-form" class="form">
                    <center><p style="font-size: 24px;">Quick admin access links</p></center> 
                
                    <div class="body">
                      <!-- first name -->
    <table border="1" cellpadding="4" cellspacing="0" 
    style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 1px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;">
      <div class="small-box bg-grey-gradient">
       <a href="procurement.php" >
            <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:60px; width:60px;"> 
          Procurement&nbsp;  </center></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
      <br><p></p>
      </div> 
      </td>
   
         <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
         <div class="small-box bg-grey-gradient">
       <a href="#tab_2-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" 
       style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Pending&nbsp;orders&nbsp;&nbsp; </a> &nbsp;&nbsp;&nbsp;
       <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p>
  
       <div class="small-box bg-grey-gradient"> 
       <a href="#tab_3-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Confirmed&nbsp;orders&nbsp;&nbsp; </a> <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p>

       <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
       <div class="small-box bg-grey-gradient">
       <a href="#tab_2-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Reviewed orders&nbsp;&nbsp; </a> &nbsp;
       <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p> 
       <div class="small-box bg-grey-gradient"> 
         <a href="#tab_3-2" data-toggle="tab">
         <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
           Approved&nbsp;orders&nbsp;&nbsp; </a>&nbsp;&nbsp;   
           <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
           <br><p></p>
           </td> </tbody> </table>

           <br>

         <table border="1" cellpadding="4" cellspacing="0" 
    style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
      <td style="width:40%; border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;">
      <div class="small-box bg-grey-gradient">
      <a href="../dispenser/store_orders.php" >
            <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:60px; width:60px;"> 
         Store&nbsp;requisitions  </center></a> <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
      <br><p></p>
      </div> 
      </td>
   
         <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
         <div class="small-box bg-grey-gradient">
       <a href="#tab_2-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" 
       style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Pending&nbsp;orders&nbsp;&nbsp; </a> &nbsp;&nbsp;&nbsp;
        <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p>
  
       <div class="small-box bg-grey-gradient"> 
       <a href="#tab_3-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Confirmed&nbsp;orders&nbsp;&nbsp; </a> 
        <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p>

       <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
       <div class="small-box bg-grey-gradient">
       <a href="#tab_2-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Reviewed&nbsp;orders&nbsp;&nbsp; </a>&nbsp;
       <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p> 
       <div class="small-box bg-grey-gradient"> 
         <a href="#tab_3-2" data-toggle="tab">
         <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
           Approved&nbsp;orders&nbsp;&nbsp; </a> &nbsp;&nbsp; 
           <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
           <br><p></p>
           </td> </tbody> </table>   

          <br>

         <table border="1" cellpadding="4" cellspacing="0" 
    style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
      <td style="width:40%; border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;">
      <div class="small-box bg-grey-gradient">
      <a href="petty_userdept.php" >
            <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:60px; width:60px;"> 
         Imprest&nbsp;requests&nbsp;</center></a> <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
      <br><p></p>
      </div> 
      </td>
   
         <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
         <div class="small-box bg-grey-gradient">
       <a href="#tab_2-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" 
       style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Pending&nbsp;orders&nbsp;&nbsp; </a> &nbsp;&nbsp;&nbsp;
        <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p>
  
       <div class="small-box bg-grey-gradient"> 
       <a href="#tab_3-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Confirmed&nbsp;orders&nbsp;&nbsp; </a> 
        <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p>

       <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
       <div class="small-box bg-grey-gradient">
       <a href="#tab_2-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Reviewed&nbsp;orders&nbsp;&nbsp; </a>&nbsp;
       <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p> 
       <div class="small-box bg-grey-gradient"> 
         <a href="#tab_3-2" data-toggle="tab">
         <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
           Approved&nbsp;orders&nbsp;&nbsp; </a> &nbsp;&nbsp; 
           <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
           <br><p></p>
           </td> </tbody> </table>  

            <br>

         <table border="1" cellpadding="4" cellspacing="0" 
    style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
      <td style="width:40%; border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;">
      <div class="small-box bg-grey-gradient">
      <a href="sys_quicklinks.php" >
            <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:60px; width:60px;"> 
         Human&nbsp;resource&nbsp;</center></a> <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
      <br><p></p>
      </div> 
      </td>
   
         <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
         <div class="small-box bg-grey-gradient">
        <a href=hr_mgt/<button class="" data-toggle="modal"  data-target="#newconttxx"></button>  
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" 
       style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       My&nbsp;contact&nbsp;info&nbsp;&nbsp; </a> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">
          <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
if ($result = mysqli_query($link, "SELECT id FROM staffcontacts  WHERE  SUBMISSIONLEVEL ='Pending' AND STAFFACCOUNT ='$rm' GROUP BY id")) {    
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
          <i class=""></i></a>
       <br><p></p>
  
       <div class="small-box bg-grey-gradient"> 
        <a href=../<button class="" data-toggle="modal"  data-target="#generateappz"></button> 
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       My&nbsp;Appraisal&nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">
          <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
if ($result = mysqli_query($link, "SELECT id FROM staffcontacts  WHERE APPRAISALELIGIBILITY='Active' 
                                   AND APPRAISALCOUNT = '0' AND EMAIL2 = '$rm' 
                   AND APPRAISALPROGRESSLEVEL = 'Not started' GROUP BY id")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
          <i class=""></i></a>
       <br><p></p>

       <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
       <div class="small-box bg-grey-gradient">
        <a href="timesheet/index.php" >
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Staff&nbsp;timesheet&nbsp;&nbsp; </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p> 
       <div class="small-box bg-grey-gradient"> 
         <a href="#tab_3-2" data-toggle="tab">
         <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
           Leave&nbsp;planning&nbsp;&nbsp; </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
           <br><p></p>
           </td> </tbody> </table>    


                <br>

         <table border="1" cellpadding="4" cellspacing="0" 
    style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
      <td style="width:40%; border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;">
      <div class="small-box bg-grey-gradient">
      <a href="sys_quicklinks.php" >
            <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:60px; width:60px;"> 
      Fleet&nbsp;mgt-(user)&nbsp;&nbsp;&nbsp;</center></a> <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
      <br><p></p>
      </div> 
      </td>
   
         <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
         <div class="small-box bg-grey-gradient">
       <a href="#tab_2-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" 
       style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Vehicle&nbsp;bookings</a> &nbsp;&nbsp;&nbsp;
        <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p>
  
       <div class="small-box bg-grey-gradient"> 
       <a href="#tab_3-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Fuel&nbsp;requisition&nbsp;&nbsp; </a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p>

       <td style="width:30%;border: 2px solid #fff; border-radius: 2px; border-right: 2px solid #dddddd; 
              border-left: 0px; border-top: 0px; border-bottom: 2px solid #dddddd;"> 
       <div class="small-box bg-grey-gradient">
       <a href="#tab_2-2" data-toggle="tab">
       <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
       Journey&nbsp;tracker&nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
       <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
       <br><p></p> 
       <div class="small-box bg-grey-gradient"> 
         <a href="#tab_3-2" data-toggle="tab">
         <img src="../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:33px; width:33px;" > 
           My&nbsp;travel&nbsp;history&nbsp;&nbsp;</a> &nbsp;&nbsp;&nbsp; 
           <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; color:#fff;">0<i class=""></i></a>
           <br><p></p>
           </td> </tbody> </table>  



                    </div>
                
                    <div class="footer">
                        <label class="checkbox inline"> 
                        </label> 
                    </div>
                </form>
            </div>
          </div>

        </div>



         



    </div>

  <div id="footerwrap" style="background-color: #000;">
        <footer class="clearfix"></footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-12">
         <a href="#" class="btn btn-close btn-round btn-default" style="background-color:#000; border:0px; color:#fff;"><img src="../assets/img/ntihclog2.png"width="100" height="100" style="height:5%; width:5%;"
        &nbsp;<i class=""></i>Naguru teenage information and health center - Copyright 2016&nbsp;-&nbsp;2018</a>  
             
            </div>

          </div><!-- /row -->
        </div><!-- /container -->   
  </div><!-- /footerwrap -->  
</body></html>
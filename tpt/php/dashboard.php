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
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/matrix-style2.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../css/uniform.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 
<link rel="stylesheet" href="../js/googleapis.js" type='text/css'>
   
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 

 <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

  <script src="../datatable/js/jquery-1.12.3.js"></script>
  <script src="../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../datatable/js/bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../datatable/js/buttons.flash.min.js"></script>
  <script src="../datatable/js/jszip.min.js"></script>
  <script src="../datatable/js/pdfmake.min.js"></script>
  <script src="../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
  <script src="../datatable/js/buttons.print.min.js"></script>

  
   
  
   <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SUBPROGRAMME"+num).val(data[2]);
  $("#VOTE_HEADNO").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BALANCEREMAINING").val(data[5]);
  $("#FINANCIALYEAR").val(data[6]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../budget/budgetlinesearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>

  <script>
  $(document).ready(function() {
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
    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:'  '
    },
    {extend :'pdf',
     title:'  '
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
     $('#example4').DataTable( {
    "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>


</head>
<body style="background: #fff;"> 

  
 <!--Chart-box-->
     
            
       <div class="span12"> <div class="span12">
       <div class="span5">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr> 
         
         <th style="width:33.33333333%;border:0px;"> <a href="#mybooking" data-toggle="modal" class=""><i class="icon-hdd"></i>Book&nbsp;a&nbsp;vehicle</a></th>
         <td style="width:33.33333333%;border:0px;"> <a href="fuel_requisition.php" class=""><i class="icon-home"></i><b>Request&nbsp;fuel</b></a></td>
     <td style="width:33.33333333%;border:0px;"> <a href="../index.php" class=""><i class="icon-off"></i>Logout</a>  
         </td>  
        </tr>
        </table>
    </div><div class="span7"></div></div>
    
    <div class="span12">   
    <div class="span3">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
     <td style="width:33.33333333%; border: 0px;">  
   <i class=" "><a href="../../admin/sys_dashboard.php">
                <img src="../img/demo/health-insurance-icon-png-3.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Dashboard</small></li></a>
     </td>  
     <td style="width:33.33333333%; border: 0px;">  
    <i class=" "><a href="dashboard.php">
                <img src="../img/demo/datexpot.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Home</small></li></a>
     </td>  
     <td style="width:33.33333333%; border: 0px;">  
    <class="" style="text-align:left;"><i class=" "><a href="fuel_review.php">
                <img src="../img/demo/33989241-blue-vehicle-icons-on-white-background.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Issue fuel</small></li></a>
     </td>  
    </td>   </tbody> </table>  </div>  
      
  
  <div class="span3">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
   
     <td style="width:33.33333333%; border: 0px;">  
     <i class=" "><a href="#newvehicle" data-toggle="modal" class=""> 
                <img src="../img/demo/images.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Vehicles</small></li></a>
     </td>  
     <td style="width:33.33333333%; border: 0px;">  
    <i class=" "><a href="myfilemgr/index.php">
                <img src="../img/demo/Open-file-icon.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Files mgr</small></li></a>
     </td>  
      <td style="width:33.33333333%; border: 0px;">    
         <div class="btn-group" style="margin-top: 0px;margin-left: -10px;background-color:transparent;">
         <img src="../img/demo/59449894425chart-512.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle"> 
            <button data-toggle="dropdown" class="" style="font-size:11px; background-color:transparent;">Reports<span class="caret"></span></button>
            <ul class="dropdown-menu" style="background-color:#fff;">
               
               <li><a href="fuel/cordination_reports.php?d1=0&d2=0">Cordination reports</a></li> 
               <li class="divider"></li> 
         
            </ul>  
         </div> 
     </td>  
    </td>   </tbody> </table>  </div>  
      
      
          
    <div class="span3">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
     <td style="width:33.33333333%; border: 0px;">    
         <div class="btn-group" style="margin-top: 0px;margin-left: -10px;background-color:transparent;">
         <img src="../img/demo/images (1).jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle"> 
            <button data-toggle="dropdown" class="" style="font-size:11px; background-color:transparent;">Setup<span class="caret"></span></button>
            <ul class="dropdown-menu" style="background-color:transparent;">
              <li><a href="#"> </a></li> 
               <li><a href="#"> </a></li>
              <li class="divider"></li> 
            </ul>  
         </div> 
     </td>  
     <td style="width:33.33333333%; border: 0px;">    
         <div class="btn-group" style="margin-top: 0px;margin-left: -10px;background-color:transparent;">
         <img src="../img/demo/xtra.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle"> 
            <button data-toggle="dropdown" class="" style="font-size:11px; background-color:transparent;">Export<span class="caret"></span></button>
            <ul class="dropdown-menu" style="background-color:transparent;">
              <li><a href="#"> </a></li> 
               <li><a href="#"> </a></li>
              <li class="divider"></li> 
            </ul>  
         </div> 
     </td>   
     <td style="width:33.33333333%; border: 0px;">    
         <div class="btn-group" style="margin-top: 0px;margin-left: -10px;background-color:transparent;">
         <img src="../img/demo/admin.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle"> 
            <button data-toggle="dropdown" class="" style="font-size:11px; background-color:transparent;">Others&nbsp;&nbsp;<span class="caret"></span></button>
            <ul class="dropdown-menu" style="background-color:transparent;">
               <li><a href="#"> </a></li> 
               <li><a href="#"> </a></li> 
              <li class="divider"></li> 
            </ul>  
         </div> 
     </td>  
    </td>   </tbody> </table>  </div> </div>
      
      
        
      <div class="span12">  <br>
            <div class="span4">
              <ul class="site-stats">
        
              <a href="#mybook" data-toggle="modal" class=""> <li class="bg_lg" style="background-color:#fff;border-radius: 11px;
        border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;  border-right: 4px solid #ecf0f5;"> 
        <i class="icon-ok" data-toggle="tooltip" title="User" style="color: green;"></i>  <i class="icon-remove" data-toggle="tooltip" title="User" style="color: red;"></i> </i> 
        <strong style="color:#yellow;">
                  <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Allocated' AND senderaccount='$rm' AND Servicerecieved='No'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  of

       <b data-toggle="tooltip" title="User"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Pending' AND senderaccount='$rm' AND Servicerecieved='No'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?></b>

                </strong></a>  <a href="cordination.php" data-toggle="tooltip" title="Admin"> <small style="color:blue;">Fleet cordination</small></li> 

               <li class="bg_ly" style="background-color:#fff;border-radius: 11px; 
         border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;  border-right: 4px solid #ecf0f5;"> 
               <a href="fuel_authorise.php"><i class="icon-remove" style="color: red;"></i></a>   <i class="icon-ok" style="color: green;"></i>  <strong style="color:#000;"> 
                
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE AUTHORIZATIONSTATUS ='PENDING' AND SENDTO = '$rm' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
  
|

 <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND SENDTO = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>     
                </strong> </a>  <a href="fuel_authorise.php"> <small style="color:blue;">Authorise fuel </small></li> </a>

              <li class="bg_lo" style="background-color:#fff;border-radius: 11px; 
         border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;  border-right: 4px solid #ecf0f5;">  <i class="icon-shopping-cart" style="color:#3a9f0e;"></i> 
        <strong style="color:#000;">
        <b> <a href="#logbookeditor" data-toggle="modal" class=""><b data-toggle="tooltip" title="User"><?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Allocated' AND senderaccount='$rm' AND Servicerecieved='No'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </a></b> &nbsp;|&nbsp;

 <b> <a href="driverlogs/driver_logs.php"><b data-toggle="tooltip" title="Driver"> 
 
 <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Allocated' AND Emailaddress='$rm' AND Servicerecieved='No'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?></b> 

        </strong> 
        
        
        <small style="color:blue;">logbook monitor </small></li>

                <li class="bg_lg" style="background-color:#fff;border-radius: 11px; 
         border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;  border-right: 4px solid #ecf0f5;">
                <a href="fuel_approve.php"><i class="icon-remove" style="color: red;"></i></a>   <i class="icon-ok" style="color:green;"></i>  <strong style="color:#000;"> 
                
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='PENDING' AND FORWARDTO = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
  
|

 <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND FORWARDTO = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>     
                </strong> </a>  <a href="fuel_approve.php"> <small style="color:blue">Approve fuel </small></li> </a>

                 <a href="#issuevehicle" data-toggle="modal" class="">
        <li class="bg_ly" style="background-color:#fff;border-radius: 11px; 
         border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;  border-right: 4px solid #ecf0f5;"> <i class="icon-repeat" style="color:#3a9f0e;">
         </i> <strong style="color:#000;"> 
                 <?php 
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE  Allocationstatus ='Pending'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                </a> </strong> <a href="cordination.php"> <small style="color:blue;">Transport orders</small></li></a>
                
                
                
                

                <li class="bg_lo" style="background-color:#fff;border-radius: 11px; 
         border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;  border-right: 4px solid #ecf0f5;"> 
                <a href="fuel_requisition_center.php"><i class="icon-share" style="color:#3a9f0e;"></i></a>  
                 </i>  <strong style="color:#000;"> 
                 Fuel
                </strong> </a>  <a href="fuel_requisition_center.php"> <small style="color:blue;">Requisition tracker </small></li> </a>
         

                </ul>
         </div>
        
       <div class="span4">
           <div class="panel panel-default" style="background-color:transparent;"> 
                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 0px;background-color:transparent;">

                                <div class="carousel-inner">
                                    <div class="item active">
                                    <img src="../imgf/Slider04.png" width="100%" height="50%"  alt="" class="img-u image-responsive" />
                                   </div>
                                    <div class="item">
                                     <img src="../imgf/Slider04.png" width="100%" height="50%" alt="" class="img-u image-responsive" /> 
                                    </div>
                                    <div class="item">
                                     <img src="../imgf/Slider04.png" width="100%" height="50%"alt="" class="img-u image-responsive" />
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
                        </div>
          <!-- nav-tabs-custom --> 
              
       
       </div> 
        
             <div class="span3">
    <ul class="site-stats">
           <div class="widget-box" style="background-color:transparent;border: 0px;">  
            <ul class="nav nav-tabs" style="border: 0px;"> 
        
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:40%; border: 0px;;">     
          <div class="small-box bg-grey-gradient"> <a data-toggle="tab" href="#tab1">
       <center><img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 6px solid #d70000; height:50px; width:50px;"> 
        Fuel&nbsp;loading(s) </center>   <i class="fa fa-arrow-circle-right"></i></a>
         <div class="pull-right box-tools"> 
     </div> 
         </div>  
     </td>
   
   <td style="width:60%;border: 0px;">  
    <div class="small-box bg-grey-gradient"> <a data-toggle="tab" href="#tab2">
         <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 6px solid #d70000; height:25px; width:25px;" > 
         Confirm &nbsp;
      <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
if ($result = mysqli_query($link, "SELECT purchaseid  FROM purchase WHERE Approval ='Pending' AND Throughoneaccount='$rm'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
 <i class="fa fa-arrow-circle-right"></i></a>
         <div class="pull-right box-tools"> 
    
     </div> 
        </div>
     <p></p>
  
  <div class="small-box bg-grey-gradient"> <a data-toggle="tab" href="#tab3">
          <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 6px solid #d70000;height:25px; width:25px;" > 
           Approve &nbsp;
       <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
if ($result = mysqli_query($link, "SELECT purchaseid FROM purchase where Approval ='Reviewed' AND Loadreview ='Pending' AND Toaccount='$rm'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
       <i class="fa fa-arrow-circle-right"></i></a>
           <div class="pull-right box-tools"></div>
          </div>
        </div> 
  
   </td>  
 </tbody>
 </table>
   
            </ul>
          </div>  
      </div>
      
        
             <div class="span3">
       <?php 
      include('tweak/connectproc.php');
        $result = $db->prepare("SELECT * FROM fuelcards WHERE Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
        $result->execute();
        $rowcount = $result->rowcount();
      ?>
      
      <?php 
      include('tweak/connectproc.php');
        $result = $db->prepare("SELECT * FROM fuelcards where fuelvailable < 250000 AND Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
        $result->execute();
        $rowcount123 = $result->rowcount(); 
       ?>
      <br>
            <div class="progress progress-striped progress-success active">&nbsp;&nbsp;<?php echo $rowcount;?>
              <div class="bar" style="width: 80%;">Total Number of fuel cards&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            </div> 
            <div class="progress progress-striped progress-warning active"> &nbsp;&nbsp;<?php echo $rowcount123;?>
              <div class="bar" style="width: 80%;">Fuel Cards below UGX of 250,000</b></a></div>
            </div>
            <div class="progress progress-striped progress-danger active"><a href="iterations/fuel_loads.php">
              <div class="bar" style="width: 80%;">Re-load fuel cards&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></div> 
            </div>
             
              
          </div>
      
      <div class="span2"></div>
      <div class="span8"> 
        <div class="widget-content tab-content" style="border:0px;"> 
            <div id="tab1" class="tab-pane active"> 
            </div>
            <div id="tab2" class="tab-pane">
      
       <div class=""  id="getveview" >  </div>
                <script> 
          function getveview(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel/get_reveiew2.php?q='+odno,
                       success : function(data){
                                $('#getveview').html(data);
                $("#ouxxxz").modal("show");
                                 }
               });
               } 
          </script> 
           
              <table id="expreview" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                 
                <th>ID</th><th>DATE</th>
          <th>INITIATOR</th> 
                    <th>ACTION</th>       
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Pending' AND Throughoneaccount='$rm' order by date desc");
  
  while($res = mysqli_fetch_array($result)) {
  $dtszs = $res['Serial']."***".$res['purchaseid'];
    echo "<tr>"; 
    echo "<td>".$res['purchaseid']."</td>";
    echo "<td>".$res['date']."</td>"; 
    echo "<td>".$res['name']."</td>";  
      echo '<td>  
            <a id="101__'.$dtszs.'" href="javascript:void(0)" onclick="getveview(this.id)" data-toggle="tooltip" title="Load request" 
        style="color: #fff;border-radius: 6px; height: 17px;" <button class="btn btn-info"> Review </span></a>    
               </td>';        
  }
     
    ?>
  </tbody>
  </table>   
        
            </div>
            <div id="tab3" class="tab-pane">
               <div class=""  id="getloadupdate" >  </div>
                <script> 
          function getloadupdate(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel/get_loadupdate2.php?q='+odno,
                       success : function(data){
                                $('#getloadupdate').html(data);
                $("#ouz").modal("show");
                                 }
               });
               } 
          </script> 
          
           
             
              <table id="exampprove" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>    
                <th>ID</th><th>DATE</th>
          <th>INITIATOR</th> 
                    <th>ACTION</th>      
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Reviewed' AND Loadreview ='Pending' AND Toaccount='$rm' order by date desc");
  
  while($res = mysqli_fetch_array($result)) {
  $dtszs = $res['Serial']."***".$res['purchaseid'];
    echo "<tr>"; 
    echo "<td>".$res['purchaseid']."</td>";
    echo "<td>".$res['date']."</td>"; 
    echo "<td>".$res['name']."</td>";  
      echo '<td>  
            <a id="101__'.$dtszs.'" href="javascript:void(0)" onclick="getloadupdate(this.id)" data-toggle="tooltip" title="Click to approve" 
        style="color: #fff;border-radius: 6px; height: 17px;" <button class="btn btn-danger"> Approve </span></a>    
                </td>';         
              } 
                ?>
  </tbody>
  </table>   
            </div>
          </div> 
        </div> 
       
         </div>
        
       <div class="span12"> <br>
            <div class="span4">
        
    
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
      <tr>    
     <td style=" border: 0px; width:50px;background-color:transparent;">
       <a href="#myloadconfirmation" data-toggle="modal"> 
     <img src="../img/icons/reset6.jpg" width="100" height="100" class="img-circle" style="border: 0px solid #d70000; height:50px; width:50px;">  
     </td>
     <td style=" border: 0px; width:35px;background-color:transparent;">Fuel loadings due for verification</td>
     <td style=" border: 0px; width:15px;background-color:transparent;">  
     <b style="color:red; text-align:center; font-size:20px;"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
if ($result = mysqli_query($link, "SELECT purchaseid FROM purchase where Approval ='Approved' AND Loadreview ='Pending'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?></b>  </a> 
     </td> 
    </tbody>  </table>   
    <br>
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
      <tr>     
        <td style="width:100%; border-radius: 11px; 
         border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;  border-right: 4px solid #ecf0f5; background-color:transparent;">
        <a href="fuel/get_reconcile_pen.php">
   <center>Loadings due for reconciliation<br>
   <b class=""> 
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
if ($result = mysqli_query($link, "select * from fuellogs where Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Pending' 
                                AND Recstatus='Pending' order by FUELISSUANCEDATE asc")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
   </b></a></center>        
    </td> 
    </tbody>  </table>   
    
     <br>
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
      <tr>     
        <td style="width:100%; border-radius: 11px; 
         border-top: 2px solid #ecf0f5;border-left: 1px solid #ecf0f5;  border-right: 4px solid #ecf0f5; background-color:transparent;">
        <a href="#myfueltracker" data-toggle="modal"> 
   <center>Current fuel level tracker by card name 
   </b></a></center>        
    </td> 
    </tbody>  </table>   
    
    
    
    </div>
   
    <div class="span7"> 
     <div class="row-fluid" style="margin-top: -16px;"> 
      
           
<script src="chartjs/jquery.min.js"></script> 

<!-- ChartJS -->
<script src="chartjs/chart.js/Chart.js"></script>
<div class="box box-success">
            <div class="box-header with-border">
              <?php
                //set timezone
          //date_default_timezone_set('Asia/Manila');
          $year = date('Y');
              ?>
              <h5 class="box-title">General fuel consumption patterns (<?php echo $year-1; ?> vs <?php echo $year; ?>)</h5>

            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height: 290px;
width: 816px;"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
  </div>
</div>

<?php include('chartjs/data_generalfuel.php'); ?>
<script>
  $(function () {
    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label               : 'Previous Year',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [ "<?php echo $pjan; ?>",
                                  "<?php echo $pfeb; ?>",
                                  "<?php echo $pmar; ?>",
                                  "<?php echo $papr; ?>",
                                  "<?php echo $pmay; ?>",
                                  "<?php echo $pjun; ?>",
                                  "<?php echo $pjul; ?>",
                                  "<?php echo $paug; ?>",
                                  "<?php echo $psep; ?>",
                                  "<?php echo $poct; ?>",
                                  "<?php echo $pnov; ?>",
                                  "<?php echo $pdec; ?>" 
                                ]
        },
        {
          label               : 'This Year',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [ "<?php echo $tjan; ?>",
                                  "<?php echo $tfeb; ?>",
                                  "<?php echo $tmar; ?>",
                                  "<?php echo $tapr; ?>",
                                  "<?php echo $tmay; ?>",
                                  "<?php echo $tjun; ?>",
                                  "<?php echo $tjul; ?>",
                                  "<?php echo $taug; ?>",
                                  "<?php echo $tsep; ?>",
                                  "<?php echo $toct; ?>",
                                  "<?php echo $tnov; ?>",
                                  "<?php echo $tdec; ?>" 
                                ]
        }
      ]
    }
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = barChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 5,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

  })
</script>
              
  <div class="span1"></div>
  
   <div class="span12">           
  <div class="span11">  
   <table id="exmon" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>   
                 
                <th>VEHICLE NO.</th>
          <th>TYPE</th> 
          <th>MAKE</th>
          <th>DRIVER</th> 
                    <th>CONTACT</th>   
          <th>ACTION</th>    
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from motorisedequipments where AVAILABILITYDISPOSAL ='AVAILABLE' GROUP BY TYPE ASC");
  
  while($res = mysqli_fetch_array($result)) {
  $dtszs = $res['REGISTRATIONNO']."***".$res['id'];
    echo "<tr>"; 
    echo "<td>".$res['REGISTRATIONNO']."</td>";  
    echo "<td>".$res['TYPE']."</td>";
    echo "<td>".$res['MAKE']."</td>"; 
    echo "<td>".$res['DRIVERALLOCATED']."</td>";  
    echo "<td>".$res['DRIVERMOBILENO']."</td>";  
      echo '<td>  
            <a id="10190002__'.$dtszs.'" href="javascript:void(0)" onclick="getcat(this.id)" data-toggle="tooltip" title="Click to view" 
        style="color: #fff;border-radius:1px; height: 17px; width:100%;" <button class="btn btn-info"> View </span></a>    
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
 
 <div id="mybooking" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Transport reservation order</h3>
              </div>
              <div class="modal-body">


                <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1mo">Book</a></li>
              <li><a data-toggle="tab" href="#tab2mo">Next</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content" style="background-color: #fff;">
            <div id="tab1mo" class="tab-pane active">
           <form class="form-horizontal" action="booking/process_ftlbookings.php" method="POST" style="height:auto;">

              <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>
                <th style="width:30%;border:0px;">Date</th>
        <th style="width:70%;border:0px;"> <input type="date" id="Createddate" name="Createddate" value="<?php echo date('y-m-d'); ?>"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
        </table>

              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
                <th style="width:30%;border:0px;">Name</th>
        <th style="width:70%;border:0px;"> <input type="text" id="applicantname" name="applicantname" value="<?php echo $nameofuser; ?>"
        readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
        </table>


                <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
                <th style="width:30%;border:0px;">Title</th>
        <th style="width:70%;border:0px;"> <input type="text" id="title" name="title" value="<?php echo $desc; ?>"
        readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
        </table>


               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
                <th style="width:100%;border:0px;">User Department</th>
                </th>
              </tr>
        </table>
              <table class="table" style="border:0px; margin-top:-24px;">
              <tr>
        <th style="width:100%;border:0px;"> <input type="text" id="applicantdept" name="applicantdept" value="<?php echo $dept; ?>"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
        </table>

               <input type="hidden" id="pfno" name="pfno" value="<?php echo $pf; ?>" >
               <input type="hidden" id="senderaccount" name="senderaccount" value="<?php echo $rm; ?>" >

               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
                <th style="width:30%;border:0px;">Phone No.</th>
        <th style="width:70%;border:0px;"> <input type="text" id="Phonecontact" name="Phonecontact"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
        </table>


               <table class="table" style="border:0px; margin-top:-24px;">
              <tr>
                <th style="width:30%;border:0px;"> Book type</th>
        <th style="width:70%;border:0px;">
                <select id="booktype" name="booktype" style="width:100%; font-weight:normal; background-color:#fff;">
                 <option>   </option>
                <option> PICK AND DROP </option>
                <option> ROUND TRIP </option>
                </select>
                </th>
              </tr>
        </table>


               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
                <th style="width:100%;border:0px;">Activity / purpose of travel</th>
                </th>
              </tr>
        </table>
              <table class="table" style="border:0px; margin-top:-24px;">
              <tr>
        <th style="width:100%;border:0px;"> <textarea id="Activity" name="Activity"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; height:20px; "></textarea> </th>
              </tr>
        </table>
              
              
                <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
        <th style="width:100%;border:0px;"> <input type="text" id="journeypoint_start" name="journeypoint_start"  placeholder="From"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>
              </tr>
        </table>


               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
        <th style="width:100%;border:0px;"> <input type="text" id="Destination_to" name="Destination_to"  placeholder="Destination"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>
              </tr>
        </table>

            </div>
            <div id="tab2mo" class="tab-pane">

              
              <table class="table" style="border:0px; margin-top:0px;">
              <tr>
                <th style="width:40%;border:0px;">Travel date</th>
        <th style="width:60%;border:0px;"> <input type="date" id="Reservationdate_from" name="Reservationdate_from" value="<?php echo date('y-m-d'); ?>"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>
                 </tr>
           </table>
                <span>
                <table class="table" style="border:0px; margin-top:-23px;">
                <tr>
                <th style="width:40%;border:0px;">Return date</th>
        <th style="width:60%;border:0px;"> <input type="date" id="Reservationdate_to" name="Reservationdate_to" value="<?php echo date('y-m-d'); ?>"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>
              </tr>
        </table>  </span>


               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
                <th style="width:40%;border:0px;">Departure time</th>
        <th style="width:60%;border:0px;"> <input type="time" id="Departuretime" name="Departuretime"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>
                  </tr>
         </table>

                <span>
                <table class="table" style="border:0px; margin-top:-23px;">
               <tr>
                <th style="width:40%;border:0px;">Expected return time</th>
        <th style="width:60%;border:0px;"> <input type="time" id="Pickuptime_expected" name="Pickuptime_expected"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
        </table>   </span>

              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>
                <th style="width:40%;border:0px;">Prefered vehicle</th>
        <th style="width:60%;border:0px;"> <select id="Preferedvehicle" name="Preferedvehicle"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; ">
                   <option value="PICKUP /DC">PICKUP /DC</option>
                                <option value="MIN BUS">MIN BUS</option>
                                <option value="STATION WAGON">STATION WAGON</option>
                                <option value="SALOON">SALOON</option>
                </select></th>
                </tr>
        </table>

                <table class="table" style="border:0px; margin-top:-23px;">
               <tr>
                <th style="width:40%;border:0px;">Passengers</th>
        <th style="width:60%;border:0px;"> <input type="text" id="Passengers" name="Passengers"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; text-align:center; font-weight:bold; ">  </th>

                <input type="hidden" id="ordertype" name="ordertype" value="Reservation">
                 <input type="hidden" id="fiscalmonth" name="fiscalmonth" value="<?php echo date('F'); ?> <?php echo date("Y");?>" >
         
                </tr>
        </table>
              <center>  <input type="submit" name="button" id="button" value="Save" />
            </form>

            </div>
          </div>
        </div>


              </div>
            </div>
          </div>
        </div>
<!--End vehicle reservation-------------------------------------------------------------------------------------------------------------------->


<!--Start model-------------------------------------------------------------------------------------------------------------------------------->
             <div id="myModal2" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3 style="text-align:center;">Requisitions</h3>
              </div>
              <div class="modal-body">

                    <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOnecaro" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5 style="margin-top: -9px;"> 
                <a href="fuel_requisition.php" class="btn btn-danger" style=" border-radius:6px;">Fuel and lubricants</a></h5>
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOnecaro">
              <div class="widget-content">
                       
               </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwocaro" data-toggle="collapse"> <span class="icon"><i class="icon-eye-open"></i></span>
                <h5> </h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwocaro">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGThreecaro" data-toggle="collapse"> <span class="icon"><i class="icon-eye-open"></i></span>
                <h5> </h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGThreecaro">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
        </div>

              </div>
            <div class="modal-footer"><a data-dismiss="modal" class="" href="#" >Cancel</a> </div>
            </div>

<!--End model--->

 <div id="mybook" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>  Welcome :&nbsp; <?php echo $nameofuser; ?>; &nbsp; You have
          <b style="color:red;">  <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Allocated' AND senderaccount='$rm'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </b>
          transport reservation(s)
       </h3>
              </div>
              <div class="modal-body" style="background-color: #fff;">

                <div id="all_comments">
  <?php
    $host="localhost";
    $username="root";
    $password="";
    $databasename="ftl";

    $connect= new mysqli($host,$username,$password,$databasename);
  if($connect){}
  else{echo 'failed to connect'.$connect->error;}

    $comm = $connect->query("SELECT id,Vehicleallocated,Drivername,timestamp,Allocationdate,Mobilecontact,Workcontact,Checkout
                           FROM ftlvehiclebooking WHERE Allocationstatus ='Allocated' AND senderaccount='$rm' ORDER BY id DESC");
  if($comm){
    while($row=$comm->fetch_assoc())
    {
    $Vehicleallocated=$row['Vehicleallocated'];
    $id=$row['id'];
    $Checkout=$row['Checkout'];
     $Allocationdate=$row['Allocationdate'];
     $Mobilecontact=$row['Mobilecontact'];
     $Workcontact=$row['Workcontact'];
    $Drivername=$row['Drivername'];
      $time=$row['timestamp'];
    ?>

  <div class="comment_div" style="background-color:#fff; border:2px solid #eee; border-radius:7px; border-left:2px solid #fff;
    border-right:5px solid #000; border-top:2px solid #000;">
      <p class="id"><b style="color:green;">Reservation ID</b>: &nbsp;<b style="color:#0000FF;"><?php echo $id;?> </b>
      &nbsp; <b style="color:black;"><?php echo $Checkout;?></b></p>
      <p class="time">Booking date &nbsp;<b style="color:black;font-weight:normal;"><?php echo $time;?></b></p>
      <p class="time">Allocation date &nbsp;<b style="color:black;font-weight:normal;"><?php echo $Allocationdate;?></b></p>
    <p class="name">Vehicle allocated: &nbsp;<b style="color:black; font-weight:bold;"><?php echo $Vehicleallocated;?></b></p>
      <p class="Drivername">Driver name &nbsp;<b style="color:black;font-weight:bold;"><?php echo $Drivername;?></b></p>
    <p class="Drivername">Contacts &nbsp;<b style="color:black;font-weight:bold;"><?php echo $Mobilecontact;?> ,&nbsp; <?php echo $Workcontact;?></b></p>
  </div>
    <hr>
    <?php
    }
  }
  else{echo$connect->error;}
    ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
            
  <!--Start model-------------------------------------------------------------------------------------------------------------------------------->
             <div id="myModalfuel" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Attention Fuel Management Unit</h3>
              </div>
              <div class="modal-body"> 
                     <!--------->  
                    <p style="text-align:center;">  Please confirm your password to login as an administrator</p> 
                      <form role="form" action="process_users.php" method="POST" style="font-size:17px;";>
            
                      <input type="password" class="form-control" style="height:25px;" placeholder="Password" type="password" name="pwd" required="" value=""> 

                     <input type="text" class="form-control" style="height:25px;" placeholder="Username"  
                      name="username" type="text" value="<?php  echo $rm; ?>" > 
                     
                      <center> <input type="submit" class="btn btn-success" value="Log In" style="height:27px;margin-top: -9px;"></center> 
                   <!--------->
                   
              </div>
            <div class="modal-footer"><a data-dismiss="modal" class="" href="#" >Cancel</a> </div>
            </div>

<!--End model--->  

   <!--Start model-------------------------------------------------------------------------------------------------------------------------------->
             <div id="logbookeditor" class="modal hide">
              <div class="modal-header">
              <button data-dismiss="modal" class="close" type="button">×</button>
              <h3>Passenger ==> Log book support</h3>
              </div>
              <div class="modal-body"> 
                   <link rel="stylesheet" href="../css/notifier2.css" />   
            <div class=""  id="getresorder" >  </div>
                <script> 
          function getresorder(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'driverlogs/get_journey1.php?q='+odno,
                       success : function(data){
                                $('#getresorder').html(data);
                $("#outxxexxxx").modal("show");
                                 }
               });
               } 
                </script>    
             
             
             <div class="table-responsive mailbox-messages"> 
             <br>
                  <!-- Info boxes --> 
             <div class="" id="bookorders" style="margin-left: 0px;"></div>
       
        <script> 
              setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'driverlogs/fleetjourney1.php',
                       success : function(data){
                                $('#bookorders').html(data);
                                 }
               });
               }, 2000);

          </script> 
                 </div>   
              </div>
            <div class="modal-footer"><a data-dismiss="modal" class="" href="#" >Cancel</a> </div>
            </div>

<!--End model--->   
             
              
            
            
             <!--Start model-------------------------------------------------------------------------------------------------------------------------------->
             <div id="myModal2" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Requisitions</h3>
              </div>
              <div class="modal-body">

           <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOoff1" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Fuel and lubricants requisition</h5>
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOoff1">
              <div class="widget-content">

              <form id="form-wizard" class="form-horizontal" method="post"  action="fuel_updateapproval.php" >
              <div id="form-wizard-1" class="step">

      <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Health unit</th>
        <th style="width:20%;border:0px;"> <input type="text" id="username" name="HEALTHUNIT"
        readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Reg No. </th>
        <th style="width:20%;border:0px;"> <input type="text" id="REGNO" name="REGNO"
        readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
        </table>



              </div>
              <div id="form-wizard-2" class="step">
                <div class="control-group">
                  <label class="control-label">Email</label>
                  <div class="controls">
                    <input id="email" type="text" name="email" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">EULA</label>
                  <div class="controls">
                    <input id="eula" type="checkbox" name="eula" />
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" />
                <div id="status"></div>
              </div>
              <div id="submitted"></div>
            </form>


               </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOoff2" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
                <h5>Accordion closed</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGOoff2">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOoff3" data-toggle="collapse"> <span class="icon"><i class="icon-eye-open"></i></span>
                <h5>Accordion closed</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGOoff3">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
        </div>

              </div>
            <div class="modal-footer"><a data-dismiss="modal" class="" href="#" >Cancel</a> </div>
            </div>

<!--End model--->  
            
            
              </div></div>
              </div>
        
        
        
 <!--Start model-------------------------------------------------------------------------------------------------------------------------------->
             <div id="issuevehicle" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3><center>ftl cordination / Vehicle allocation<center></h3>
              </div>
              <div class="modal-body"> 
                     <!--------->  
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:33.3333%; border: 1px;">  
   <center>Total orders allocated&nbsp;<br>
   <b class="button 5"> 
     <?php
      
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date' AND Allocationstatus ='Allocated'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
   </b></center>        
    </td>
   
     <td style="width:33.3333%; border: 1px;">  
   <center>Number of rejected orders &nbsp;<br>
   <b class="button 5"> 
   
                 <?php
      
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date' AND Allocationstatus ='Rejected'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
   </b></center>        
    </td>
     
   <td style="width:33.3333%; border: 1px;">  
   <center>Total Orders as of <?php echo date('y-m-d'); ?>&nbsp;<br>
   <b class="button 5"> 
   <?php
      
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
   </b></center>        
    </td>
 </tbody>
 </table> 
           
              </div>
            <div class="modal-footer"><a data-dismiss="modal" class="" href="#" >Cancel</a> </div>
            </div>

<!--End model---> 


<div id="myfueltracker" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3 style="text-align:center;">CURRENT FUEL AVAILABLE BY CARD NAME<br>
         <input type="text" name="filter" value="" id="filter" placeholder="Search card..." autocomplete="off" style="width:100%;"/>
         </h3>
              </div>
              <div class="modal-body">
          
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  text-align:left;" width="100%">
    <thead> 
    <tr>
        <tr>
      <th> Fuel card name </th> 
      <th> Vendor name </th>
      <th> Fuel target level </th> 
      <th> fuel vailable </th>
            <th> Reorder level </th>
      <th> Action </th>
  </tr>
  </thead>
  <tbody>
    
      <?php
      function formatMoney($number, $fractional=false) {
          if ($fractional) {
            $number = sprintf('%.2f', $number);
          }
          while (true) {
            $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
            if ($replaced != $number) {
              $number = $replaced;
            } else {
              break;
            }
          }
          return $number;
        }
        include('tweak/connectproc.php');
        $result = $db->prepare("SELECT *,Fueltargetlevel-fuelvailable as reorder  FROM fuelcards WHERE Fuelcardstatus = 'ACTIVE' ORDER BY Fuelcardname ASC");
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){
        $reorder=$row['reorder'];
        $Fueltargetlevel=$row['Fueltargetlevel'];
        $fuelvailable=$row['fuelvailable'];
        if ($fuelvailable < 3000000) {
        echo '<tr class="alert alert-warning record" style="color: #fff; background:#164242; class="progress progress-striped progress-success active">';
        }
        else {
        echo '<tr class="record">';
        }
      ?>
      
      <td><?php echo $row['Fuelcardname']; ?></td>
      <td><?php echo $row['Vendorname']; ?></td> 
       
      <td><?php
      $Fueltargetlevel=$row['Fueltargetlevel'];
      echo formatMoney($Fueltargetlevel, true);
      ?></td>
            
            <td><?php
      $fuelvailable=$row['fuelvailable'];
      echo formatMoney($fuelvailable, true);
      ?></td>
        
      <td>
      <?php
      $reorder=$row['reorder'];
      echo formatMoney($reorder, true);
      ?>
      </td>
             <td><a rel="facebox" title="Click to update card info" href="tweak/main/editproduct.php?id=<?php echo $row['productid']; ?>">
           <center> <button class="btn btn-warning"><i class="icon-edit"></i> </button> </center></a> 
           
       </td>
      </tr>
      <?php
        }
      ?>
     
    
  </tbody>
</table> 
              </div>
             <div class="modal-footer"> <a href="fuel_master.php"  class="btn btn-primary">Cancel</a> </div>
            </div>
          </div>
        </div>      






  <div id="myloadconfirmation" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Fuel loading requisitions due for confirmation</h3>
              </div>
              <div class="modal-body">
                   
                <div class=""  id="getloadverification" >  </div>
                <script> 
                function getloadverification(jose){
            var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel/get_load_verify.php?q='+odno,
                       success : function(data){
                                $('#getloadverification').html(data);
                $("#explodemate").modal("show");
                                 }
               });
               } 
               </script> 
          
           
         <table id="example6" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
         <tr>   
                    <th>ID</th><th>DATE</th>
          <th>INITIATOR</th> 
                    <th>&nbsp;&nbsp;&nbsp;VIEW</th> <th>ACTION</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
                <th>ID</th><th>DATE</th>
          <th>INITIATOR</th> 
                    <th>&nbsp;&nbsp;&nbsp;VIEW</th> <th>ACTION</th>     
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * from purchase where Approval ='Approved' AND Loadreview ='Pending' order by date desc");
  
  while($res = mysqli_fetch_array($result)) {
  $dtpp = $res['Serial']."***".$res['purchaseid'];
    echo "<tr>"; 
    echo "<td>".$res['purchaseid']."</td>";
    echo "<td>".$res['date']."</td>"; 
    echo "<td>".$res['name']."</td>"; 
    echo '<td>  
            <a id="10992__'.$dtpp.'" href="javascript:void(0)" onclick="getloadverification(this.id)" data-toggle="tooltip" title="Is fuel loaded?" 
        style="color: #fff;border-radius: 6px; height: 17px;" <button class="btn btn-success"> Click</span></a>    
               </td>'; 
          
      echo "<td><a href=\"fuel/get_loadverifier.php?purchaseid=$res[purchaseid]\">Verify</a> &nbsp; | &nbsp; 
        <a href=\"fuel/get_loadmemo.php?purchaseid=$res[purchaseid]\">Print</a> 
          </td>";     
  }
     
    ?>
  </tbody>
  </table>  
            
                

              </div>
             <div class="modal-footer"> <a href="fuel_master.php"  class="btn btn-primary">Cancel</a> </div>
            </div>
          </div>
        </div>  


        <!--Start model-------------------------------------------------------------------------------------------------------------------------------->

               <!--Start model-------------------------------------------------------------------------------------------------------------------------------->
                <div id="newvehicle" class="modal hide">
                <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3><center>Add new vehicle<center></h3>
                </div>
                 <div class="modal-body"> 
                   
          <form class="form-horizontal" action="process_newvehicle.php" method="POST" style="height:auto;">
                
              <table class="table" style="border:0px;">
              <tr>  
                <th style="width:20%;border:0px; background-color:#FFF; color:#000;">Registration number</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" id="REGISTRATIONNO" name="REGISTRATIONNO"   
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                <th style="width:20%;border:0px; background-color:#FFF;color:#000;">Make</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="MAKE" id="MAKE"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
        </table> 
        
<?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stss ="";
if( $result = $connect->query("SELECT * FROM vehtype"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['VEHICLETYPE'] . "</option>";   }
  }
$connect->close();
?>

                  <table class="table" style="border:0px;">
              <tr>  
              <th style="width:20%;border:0px; background-color:#FFF;color:#000;">Type</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <select id="TYPE" name="TYPE" 
        required="required" style="width:100%; font-weight:normal; background-color:#fff; color:#000;">
        <option></option>
        <option><?php   echo $stss; ?></option>
        </select>
         
         
                  <th style="width:20%;border:0px; background-color:#FFF;color:#000;">Model</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="MODEL" id="MODEL"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
        </table> 
               
                
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:20%;border:0px; background-color:#FFF;color:#000;">color</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="COLOR" id="COLOR" 
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 
                 <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Year of manufacture</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="date" name="YOM" id="YOM"  
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   </tr>
        </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Power</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text"  name="POWER" id="POWER" 
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                 <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Category</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <select id="CATEGORY" name="CATEGORY"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> 
                        <option> </option>
                        <option> MANAGERIAL</option>
                        <option> SERVICE</option> 
                </select>
               </tr>
        </table> 
              
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Equipment type</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <select id="EQUIPMENTCATEGORY" name="EQUIPMENTCATEGORY"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;"> 
                        <option> MOTOR VEHICLE</option>
                        <option> MOTOR CYCLE</option>
                        <option> HEAVY MOTOR EQUIPMENT</option>
                        <option> GENERATOR</option> 
                        <option> LAWN MOVER</option> 
                        <option> OTHERS</option>
                </select>
               </tr>
         
                 <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Seating capacity</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="SEATINGCAPACITY" id="SEATINGCAPACITY"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                  </tr>
        </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Functional status</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <select id="FUNCTIONALSTATUS" name="FUNCTIONALSTATUS" 
        required="required" style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;">
                 <option value="RUNNING"> RUNNING</option>
                        <option>DOWN </option>
                        <option>REPAIRABLE </option>
                        </select>
                  </th>
         
                  <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Fuel type</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <select name="FUELTYPE" id="FUELTYPE"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;">
                         <option>  </option>
                         <option>DIESEL </option>
                         <option>PETROL </option>
                         </select>
                 </th>   
                   </tr>
        </table> 
               
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Consuption per KM</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="CONSUMPTIONPERKM" id="CONSUMPTIONPERKM"
        required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                   
                   <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Engine number</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="ENGINENO" id="ENGINENO"
          style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                  </tr>
        </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Chasis number</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="CHASSISNO" id="CHASSISNO"
          style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                  
                  <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Odometer status</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <select name="ODOMETERSTATUS" id="ODOMETERSTATUS"
        required="required" style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;">
                         <option>  </option>
                         <option>OPERATIONAL</option>
                         <option>NOT OPERATIONAL</option>
                         </select>
                 </th>   
                  </tr>
        </table>
              
               
               
              <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                 <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Odometer type</th> 
         <th style="width:80%;border:0px;background-color:#FFF;color:#000;"> 
                  <input type="radio" name="ODOMETERTYPE" value="KM" id="KM" checked="" style="margin-top:-4px;"> &nbsp;KM 
          <input type="radio" class="switch-input" name="ODOMETERTYPE" value="HRS" id="HRS" style="margin-top:-4px;"> &nbsp;HRS  
          <input type="radio" class="switch-input" name="ODOMETERTYPE" value="MILES" id="MILES" style="margin-top:-4px;"> &nbsp;MILES</th>  
              </tr>
        </table> 
               
              
                <table class="table" style="border:0px; margin-top:0px;">
                 <tr>   
                 <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Acquisition date</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="date" name="ACQUISITIONDATE" id="ACQUISITIONDATE" 
        required="required" style="width:100%; font-weight:normal; background-color:#fff; height:20px;"> </th> 
                 
                  <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Purchase cost</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="PURCHASECOST" id="PURCHASECOST"
          style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
        </table> 
            
 
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr>   
                 <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Supplier</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input class="switch-input" type="text"  name="SUPPLIEDBY" id="SUPPLIEDBY" 
          style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
               
                 <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Holding type</th> 
         <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> 
                   <select class="switch-input" name="HOLDSTATUS" id="HOLDSTATUS"  
           style="margin-top:-4px;background-color:#FFF;color:#000;">
                   <option> </option>
                    <option>PURCHASED </option>
                    <option>DONATED</option>
                    </select>
                   </th> 
                   </tr>
        </table>
                  
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:20%;border:0px;background-color:#FFF;color:#000;">User department</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="USERDEPT" id="USERDEPT"
          style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              
                  <th style="width:20%;border:0px;background-color:#FFF;color:#000;">Location</th> 
        <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="LOCATION" id="LOCATION"
          style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
        </table> 
            
               
                
                  
                 <center><input type="submit" name="button" id="button" value="Save" />
          <button type="button" class=" " data-dismiss="modal">Close</button></center>
         </form> 
                 
              </div>
              <div class="modal-footer"><a data-dismiss="modal" class="" href="#" >Cancel</a> </div>
              </div>

<!--End model--->       


<!--End model--->       

<!--Footer-part-->
<!--div class="row-fluid" style="background-color: #000; color: #fff;">
  <div id="footer" class="span12" style="color:000;"> 2017 &copy; Naguru Teenage Information and Health Center <a href="#"> </a> </div-->
</div>
<!--end-Footer-part-->
    
     <script type="text/javascript" src=" ../js/gauge.js"></script>
     
<!--end-Footer-part-->
<!--end-Footer-part-->
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.ui.custom.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/jquery.wizard.js"></script>
<script src="../js/matrix.js"></script>
<script src="../js/matrix.wizard.js"></script> 

 <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->       
     <script type="text/javascript" src=" ../js/gauge.js"></script>
     
<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../plugins/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../plugins/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../plugins/flot/jquery.flot.categories.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 100;

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1);

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y = prev + Math.random() * 10 - 5;

        if (y < 0) {
          y = 0;
        } else if (y > 100) {
          y = 100;
        }

        data.push(y);
      }

      // Zip the generated y values with the x values
      var res = [];
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]]);
      }

      return res;
    }

    var interactive_plot = $.plot("#interactive", [getRandomData()], {
      grid: {
        borderColor: "#f3f3f3",
        borderWidth: 1,
        tickColor: "#f3f3f3"
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color: "#3c8dbc"
      },
      lines: {
        fill: true, //Converts the line chart to area chart
        color: "#3c8dbc"
      },
      yaxis: {
        min: 0,
        max: 100,
        show: true
      },
      xaxis: {
        show: true
      }
    });

    var updateInterval = 500; //Fetch data ever x milliseconds
    var realtime = "on"; //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()]);

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw();
      if (realtime === "on")
        setTimeout(update, updateInterval);
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === "on") {
      update();
    }
    //REALTIME TOGGLE
    $("#realtime .btn").click(function () {
      if ($(this).data("toggle") === "on") {
        realtime = "on";
      }
      else {
        realtime = "off";
      }
      update();
    });
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)]);
      cos.push([i, Math.cos(i)]);
    }
    var line_data1 = {
      data: sin,
      color: "#3c8dbc"
    };
    var line_data2 = {
      data: cos,
      color: "#00c0ef"
    };
    $.plot("#line-chart", [line_data1, line_data2], {
      grid: {
        hoverable: true,
        borderColor: "#f3f3f3",
        borderWidth: 1,
        tickColor: "#f3f3f3"
      },
      series: {
        shadowSize: 0,
        lines: {
          show: true
        },
        points: {
          show: true
        }
      },
      lines: {
        fill: false,
        color: ["#3c8dbc", "#f56954"]
      },
      yaxis: {
        show: true,
      },
      xaxis: {
        show: true
      }
    });
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: "absolute",
      display: "none",
      opacity: 0.8
    }).appendTo("body");
    $("#line-chart").bind("plothover", function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2);

        $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
            .css({top: item.pageY + 5, left: item.pageX + 5})
            .fadeIn(200);
      } else {
        $("#line-chart-tooltip").hide();
      }

    });
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]];
    $.plot("#area-chart", [areaData], {
      grid: {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color: "#00c0ef"
      },
      lines: {
        fill: true //Converts the line chart to area chart
      },
      yaxis: {
        show: false
      },
      xaxis: {
        show: false
      }
    });

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data: [["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart", [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {label: "Series2", data: 30, color: "#3c8dbc"},
      {label: "Series3", data: 20, color: "#0073b7"},
      {label: "Series4", data: 50, color: "#00c0ef"}
    ];
    $.plot("#donut-chart", donutData, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });
    /*
     * END DONUT CHART
     */

  });

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + "<br>"
        + Math.round(series.percent) + "%</div>";
  }
</script>

</body>
</html>

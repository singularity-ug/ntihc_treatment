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
<link rel="stylesheet" href="../css/matrix-style2.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/uniform.css" />
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" />
<link href="../js/googleapis.js" rel="stylesheet" type="text/css">
</head>
<body style="background: #fff;"> 

<!--Header-part-->
<div id="header" style="background-color:#000;">  
<h2><a href="dashboard.php"> </a></h2>
</div>
<!--close-Header-part--> 

 
<!--sidebar-menu-->

<div id="sidebar"> 
 <a href="#" class="visible-phone" style="background-color:#da542e; font:bold 14px 'Aleo'; text-shadow:1px 1px 2px #000; color:#fff;">
 <i class="icon icon-signal"></i>&nbsp;&nbsp;&nbsp; &nbsp;Fleet Management Dashboard</a>
  <ul  style="text-align:left;"> 
  
       <ul class="site-stats">
	   
	    <li class="" style="text-align:left;"><i class=" "><a href="fleet_administrator.php">
                <img src="../img/demo/access-administrator-account.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Fleet admin</small></li></a>
				 
				  <li class="" style="text-align:left;"><i class=" "><a href="budgeting.php">
                <img src="../img/demo/budget.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >Budget mgt</small></li></a>
	   
	   
                <li class="" style="text-align:left;"><i class=" "><a href="cordination.php">
                <img src="../img/demo/images (2).png"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                 <small>Cordination unit</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="fuel_master.php">
                <img src="../img/demo/103362-3d-glossy-green-orb-icon-business-gas-pump.png"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                 <small>Fuel module</small></li></a>
                 
                 
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/103507-3d-glossy-green-orb-icon-business-tools11.png"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                 <small>Fleet service</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/images.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Work orders</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/admin.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Accidents mgt</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/cover.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Insurance mgt</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/images (1).jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Drivers module</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/33989241-blue-vehicle-icons-on-white-background.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>General fleet</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/health-insurance-icon-png-3.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Fleet verification</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/images (1).png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Action center</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/Open-file-icon.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Quick export</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/access-administrator-account.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Database panel</small></li></a>
                 
              </ul>  
   
      
    
    
     
</div>

 
<div id="content" style="background: #fff;" />
   
 <!--Chart-box-->
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5> 
                         <div id="breadcrumb" style=" border:0px;"> 
                         <a href="#mybooking" data-toggle="modal" class=""><i class="icon-hdd"></i>Book&nbsp;a&nbsp;vehicle</a>
                         <a href="fuel_requisition.php" class=""><i class="icon-home"></i><b>Request&nbsp;fuel</b></a>
						 <a href="../index.php" class=""><i class="icon-off"></i>Logout</a> 
                         </div>
          
          
          </h5>
           
          
        </div>
        <div class="widget-content" style="background-color: #fff;">
          <div class="row-fluid">
            <div class="span6">
               
              <div class="panel panel-default"> 
                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 0px;">

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
              <a href="#mybook" data-toggle="modal" class=""> <li class="bg_lg"> <i class="icon-ok" style="color: #cef6ba;"></i>
                                                                   <i class="icon-remove" style="color: red;"></i> </i> <strong style="color:#fff;">
                  <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

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

        <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

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
?>

                </strong></a>  <a href="#mybook" data-toggle="modal" class=""> <small style="color:#fff;">My reservations</small></li> </a>

               <li class="bg_ly">
               <a href="fuel_authorise.php"><i class="icon-remove" style="color: red;"></i></a>   <i class="icon-ok" style="color: #cef6ba;"></i>  <strong style="color:#fff;"> 
                
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

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
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

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
                </strong> </a>  <a href="fuel_authorise.php"> <small style="color:#fff;">Authorise fuel </small></li> </a>

               <a href="#logbookeditor" data-toggle="modal" class=""> <li class="bg_lo"> <i class="icon-shopping-cart"></i> 
				<strong style="color:#fff;">
				 <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

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
				</strong> <small>logbook monitor </small></li></a>

                <li class="bg_lg">
                <a href="fuel_approve.php"><i class="icon-remove" style="color: red;"></i></a>   <i class="icon-ok" style="color: #cef6ba;"></i>  <strong style="color:#fff;"> 
                
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

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
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

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
                </strong> </a>  <a href="fuel_approve.php"> <small style="color:#fff;">Approve fuel </small></li> </a>

                <li class="bg_ly"> <i class="icon-repeat"></i> <strong style="color:#fff;"> 
                
                Quick
                </strong> <small>Downloads </small></li>
                
                
                
                

                <li class="bg_lo"> 
                <a href="fuel_requisition_center.php"><i class="icon-share" style="color: WHITE;"></i></a>  
                 </i>  <strong style="color:#fff; font-size:12px;"> 
                 Requisition
                </strong> </a>  <a href="fuel_requisition_center.php"> <small style="color:#fff;font-size:12px;"> tracker </small></li> </a>
				 

                </ul>
				 </div>
				
             <div class="span3">
    <ul class="site-stats">
           <div class="widget-box" style="background-color:#fff;border: 0px;">  
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
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
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
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
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
	   
	</ul> 
              
          </div>
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
      
      
        
            <!--Chart-box-->
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>   Fleet real time reservation trends </h5> 
        </div>
        <div class="widget-content"  style="background-color: #fff;">
        <div class="row-fluid">
             
               
    <div class="span1">
    <ul class="site-stats">
                
               
                
   </div></ul>
           
      
    <div class="span11">
    <ul class="site-stats">
                
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- interactive chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>
 
              <div class="box-tools pull-right">
               
                <div class="btn-group" id="realtime" data-toggle="btn-toggle"> 
                </div>
              </div>
            </div>
            <div class="box-body">
              <div id="interactive" style="height: 288px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box --> 
              </ul>
              </div> 
     
    </ul> 
            </div>
            
          </div>
        </div> 
      </div> 
      </div>
    
</div>
      
    </div>
<!--End-Chart-box-->
 

<!--Start model--->
   
<!--End model----------------------------------------------------------------------------------------------------------------------------------->

<!--Start vehicle reservation------------------------------------------------------------------------------------------------------------------->
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
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

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
    $databasename="fleet";

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
              <h3>Log book monitor</h3>
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

<!--Footer-part-->
<div class="row-fluid" style="background-color: #000; color: #fff;">
  <div id="footer" class="span12" style="color:000;"> 2017 &copy; Kampala capital city authority <a href="#"> </a> </div>
</div>
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

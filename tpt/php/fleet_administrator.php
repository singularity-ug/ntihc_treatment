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
  header('location:ftls/index.php');
}
 ?>


<!DOCTYPE html>
<html ng-app="app">
<head>
	<title>ftlm</title>
	<meta charset="utf-8">
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
<body style="background:url(../img/pattern/4326703-white-background-wallpapero.jpg);">

<!--Header-part-->
<div id="header" style="background-color:#d70000;">  
<h2><a href="dashboard.php"> </a></h2>
</div>
<!--close-Header-part--> 

 
<!--sidebar-menu-->

<div id="sidebar"> 
 <a href="#" class="visible-phone" style="background-color:#da542e; font:bold 14px 'Aleo'; text-shadow:1px 1px 2px #000; color:#fff;">
 <i class="icon icon-signal"></i>&nbsp;&nbsp;&nbsp; &nbsp;Application Dashboard</a>
  <ul  style="text-align:left;"> 
  
       <ul class="site-stats">
	   
	    <li class="" style="text-align:left;"><i class=" "><a href="cordination.php">
                <img src="../img/demo/access-administrator-account.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small >ftl admin</small></li></a>
				 
				  <li class="" style="text-align:left;"><i class=" "><a href="cordination.php">
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
                 <small>ftl service</small></li></a>
                
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
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="driverlogs/driver_logs.php">
                <img src="../img/demo/images (1).jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>Drivers module</small></li></a>
                
                <li class="" style="text-align:left;"><i class=" "><a href="ftl_register.php">
                <img src="../img/demo/33989241-blue-vehicle-icons-on-white-background.jpg"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>General ftl</small></li></a>
                 
                  <li class="" style="text-align:left;"><i class=" "><a href="#myModalfuel" data-toggle="modal" class="">
                <img src="../img/demo/health-insurance-icon-png-3.png"width="100" height="100" style="height:30%; width:30%;" class="img-circle">
                </i> 
                 <small>ftl verification</small></li></a>
                
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
				 
				 
				 
			          <div id="reviews" class="carousel slide" data-ride="carousel"
    style="border: 1px solid #f2f0f0;
    border-bottom-width: 5px;
    border-bottom-style: solid;height: 154px;  border-top-right-radius:35px;
    border-bottom-left-radius:35px; background-color:transparent;"> 
                                  <br>  <div class="carousel-inner" style="background-color:transparent;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">  <p style="text-align:center;"> Fuel cards due for reoder</p> <br>
                                             <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                               <?php 
			    include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards where fuelvailable < 3000000 AND Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount123 = $result->rowcount(); 
			 ?>
                                               <span style="font-size:50px;">
                                                <?php echo $rowcount123;?>
                                               </span>
                                            </p> <br>
                                                <div class="user-img pull-right">

                                                </div> 
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1"> <p style="text-align:center;"> Notification 2</p> <br>
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                            
                                               <span style="font-size:50px;">
                                              002
                                                </span>
                                            </p> <br>
                                                 <div class="user-img pull-right">
                                                </div> 
                                            </div>
                                        </div>

                                         <div class="item">
                                            <div class="col-sm-10 col-md-offset-1"> <p style="text-align:center;"> Notification 3</p> <br>
                                          <p style="color:#000000; text-align:center; font-weight:bold; font-size:16px; margin-top:0px;">
                                           
                                               <span style="font-size:50px;">
                                                   003 
                                               </span>
                                            </p> <br>
                                                 <div class="user-img pull-right">
                                                </div>  
                                            </div>
                                        </div> 
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators" style="width: 10%;">
                                        <li data-target="#reviews" data-slide-to="0" class="active" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" style="background-color:blue;"></li>
                                        <li data-target="#reviews" data-slide-to="2" style="background-color:red;"></li> 
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

     </div>
              </ul>   
     
</div>


<div id="content" style="background-color:transparent;">
          
  
   <!--Chart-box-->    
    <div class="row-fluid" style="background-color:transparent;"> 
      <div class="widget-box" style="background-color:transparent;"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>
           <div id="breadcrumb" style="border:0px;background-color:transparent;">
            <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
            <a href="budgeting.php" class="tip-bottom"><i class="icon-home"></i>Budgeting</a>  
            <a href="../index.php">Logout</a>  
                          </div> 
          </h5>
        </div> 
        <div class="widget-content" style="background-color:transparent;">
          <div class="row-fluid" style="background-color:transparent;">
           <div class="span12" style="background-color:transparent;"> 
          
           
     <div class="span4">
	  <div class="widget-box" style="border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;"> 
          <div class="widget-title">
            <ul class="nav nav-tabs">
              
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
   <td style="width:40%; border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">     
          <div class="small-box bg-grey-gradient"> <a data-toggle="tab" href="#tab1">
       <center><img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:40px; width:40px;"> 
        Fuel&nbsp;loading(s)&nbsp; </center>   <i class="fa fa-arrow-circle-right"></i></a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
   
   <td style="width:60%;border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;"> 
   
    <div class="small-box bg-grey-gradient"> <a data-toggle="tab" href="#tab2">
       <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:20px; width:20px;" > 
         Confirm  &nbsp;
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
          <img src="../img/icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:20px; width:20px;" > 
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
		
        <div class="widget-content tab-content" style="margin-top:45px; border:0px;"> 
            <div id="tab1" class="tab-pane active"> 
            </div>
            <div id="tab2" class="tab-pane">
			
			 <div class=""  id="getveview" >  </div>
                <script> 
          function getveview(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel/get_reveiew.php?q='+odno,
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
                       url     : 'fuel/get_loadupdate.php?q='+odno,
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
		   
	<div class="span4">
	  <div class="widget-box" style="border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;"> 
          <div class="widget-title">
            <ul class="nav nav-tabs">
              
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
   <td style="width:40%; border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">     
          <div class="small-box bg-grey-gradient"> <a href="myfilemgr/index.php">
       <center><img src="../img/demo/datexpot.jpg"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:40px; width:40px;">  
        Files&nbsp;manager&nbsp;&nbsp; </center> <a data-toggle="tab" href="#tab12">  <i class="fa fa-arrow-circle-right"></i></a></a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
   
   <td style="width:60%;border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;"> 
   
    <div class="small-box bg-grey-gradient"> <a data-toggle="tab" href="#tab22">
       <img src="../img/icons/save3.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:20px; width:20px;" > 
         pending&nbsp; 
 <i class="fa fa-arrow-circle-right"></i></a>
         <div class="pull-right box-tools"> 
		
		 </div> 
        </div>
		 <p></p>
	
	<div class="small-box bg-grey-gradient">  <a data-toggle="tab" href="#tab32">  
          <img src="../img/icons/download1.jpg"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:20px; width:20px;" > 
         pending&nbsp; 
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
		
        <div class="widget-content tab-content" style="margin-top:45px; border:0px;"> 
            <div id="tab12" class="tab-pane active"> 
            </div>
            <div id="tab22" class="tab-pane">
			
			 <div class=""  id="getveview" >  </div>
           
			  
            </div>
            <div id="tab32" class="tab-pane">
               
	 
            </div>
          </div> 
		   </div> 
		   
		   <div class="span4">
	  <div class="widget-box" style="border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;"> 
          <div class="widget-title">
            <ul class="nav nav-tabs">
              
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
   <td style="width:40%; border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">     
          <div class="small-box bg-grey-gradient"> <a href="user_panel.php">
       <center><img src="../img/demo/xtra.jpg"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:40px; width:40px;"> </a>
       <a data-toggle="tab" href="#tab13"> Drivers&nbsp;|&nbsp;users&nbsp;  </center>   <i class="fa fa-arrow-circle-right"></i></a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
   
   <td style="width:60%;border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;"> 
   
    <div class="small-box bg-grey-gradient"> <a data-toggle="tab" href="#tab23">
       <img src="../img/demo/Open-file-icon.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:20px; width:20px;" > 
       Contracts&nbsp;mgt&nbsp; 
	 
 <i class="fa fa-arrow-circle-right"></i></a>
         <div class="pull-right box-tools"> 
		
		 </div> 
        </div>
		 <p></p>
	
	<div class="small-box bg-grey-gradient"> <a data-toggle="tab" href="#tab33">
          <img src="../img/icons/reset6.jpg"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:20px; width:20px;" > 
          Appraisal&nbsp;editor 
		 
		   <i class="fa fa-arrow-circle-right"></i></a>
           <div class="pull-right box-tools"></div>
          </div>
        </div> 
	
	 </td>  
 </tbody>
 </table>
   
            </ul>
          </div> 
        </div>  </div> 
		
        <div class="widget-content tab-content" style="margin-top:47px; border:0px;"> 
            <div id="tab13" class="tab-pane active" style="background-color:transparent;"> 
            </div> 
			
            <div id="tab23" class="tab-pane">
			 
            </div>
            <div id="tab33" class="tab-pane">
             
            </div>
          </div> 
		   </div> 
        
	</div>
</div> 
	 </div> </div> 
	 
    <div class="row-fluid" style="margin-top: -16px;background-color:transparent;"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>  
		    <div class="btn-group" style="margin-top: -9px;margin-left: -10px;background-color:transparent;">
            <button class="btn btn-info" style=" background-color:transparent; color:#000;">Reports </button>
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu" style="background-color:transparent;">
              <li><a href="fuel/fuel_reports.php?d1=0&d2=0">Fuel reports</a></li> 
               <li><a href="fuel/cordination_reports.php?d1=0&d2=0">Cordination reports</a></li> 
              <li class="divider"></li> 
            </ul>  
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <div class="btn-group">
            <button class="btn btn-info" style="background-color:transparent; color:#000;">Data center &nbsp;</button>
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="fuel/get_load_history2.php">My approved load history</a></li> 
              <li><a href="fuel/fuel_export.php">Download fuel consumption history</a></li> 
              <li class="divider"></li> 
            </ul></div>
           </h5>
        </div>
        <div class="widget-content" style="background-color:transparent;">
          <div class="row-fluid">
            <div class="span7"> 
			 
			 <div class="table-responsive mailbox-messages"> 
			 
        <script type="text/javascript" src="fusion/js/fusioncharts.js"></script>
        <script src="fusion/js/fusioncharts.js"></script>
        <script src="fusion/js/fusioncharts.charts.js"></script>
        <script src="fusion/js/themes/fusioncharts.theme.zune.js"></script>
               
 
             <?php
			 
		 include("fusion/src/fusioncharts.php");
  
$hostdb = "localhost"; 
$userdb = "root";  
$passdb = "toor2"; 
$namedb = "fleet"; 

// Establish a connection to the database
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
 
if ($dbhandle->connect_error) {
exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?> 

<?php
  
    $strQuery = "SELECT * FROM fuelcards WHERE Fuelcardstatus = 'ACTIVE' ORDER BY Fuelcardname ASC";
	
    // Execute the query, or else return the error message.
    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

    // If the query returns a valid response, prepare the JSON string
    if ($result) {
        // The `$arrData` array holds the chart attributes and data
        $arrData = array(
            "chart" => array(
              "caption" => "Current fuel available by card name",
              "paletteColors" => "#cdcdcd",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "20",
              "canvasBorderAlpha"=> "0",
              "usePlotGradientColor"=> "0",
              "plotBorderAlpha"=> "10",
              "showXAxisLine"=> "1",
              "xAxisLineColor" => "#000",
              "showValues" => "0",
              "divlineColor" => "#999999",
              "divLineIsDashed" => "1",
              "showAlternateHGridColor" => "0"
            )
        );

        $arrData["data"] = array();

// Push the data into the array
        while($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
		
            "label" => $row["Fuelcardname"], 
			
            "value" => $row["fuelvailable"]
            )
        );
        }

        /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

        $jsonEncodedData = json_encode($arrData); 
        $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 431, "chart-1", "json", $jsonEncodedData);

        // Render the chart
        $columnChart->render();

        // Close the database connection
        $dbhandle->close();
    }

?>

    <div id="chart-1"><!-- Fusion Charts will render here--></div> 
    </div>  </div> 
	 <script src="angular_doughtnut/angular.min.js"></script>
	<script src="angular_doughtnut/Chart.bundle.min.js"></script>
	<style type="text/css">
		canvas{
	    margin:auto;
		}
		.alert{
		margin-top:20px;
		width:100%;
		}
	</style>
	<body ng-controller="myCtrl">
<div class="container">
	<div class="row"> 
		 <div class="span5"  ng-init="fetchsales()" style="border: 1px solid rgb(230, 220, 218); box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1) !important;">   
			<h5 class="page-header text-center">Fleet notification center</h5>
			<canvas id="dvCanvas" height="350" width="350"></canvas>
	    </div>
	</div>
</div>


	    </div>
	</div>
	</div> 

<script src="angular_doughtnut/app.js"></script>
<!--End-Footer-part-->
<!--script src="../js/jquery.min.js"></script--> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.popover.js"></script>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<!--script src="../plugins/jQuery/jquery-2.2.3.min.js"--> 
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
</body>
</html>

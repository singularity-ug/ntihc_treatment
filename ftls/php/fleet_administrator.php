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

  <link rel="stylesheet" href="../css/notifier2.css" /> 
	 
	
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
     $('#exmon').DataTable( {
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
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
 border: 1px solid #ddd;
line-height: 1.0;
padding: 3px;
vertical-align: center;
background-color: transparent;
color: #000;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #ddd;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 11px;
             	 color:#000000;
				 font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:transparent;
             }
             table tr:nth-child(even) {
             background:transparent;
             }

</style> 

</head>
<body style="background: #f9f9e9;"> 

<!--Header-part-->
<div id="header" style="background-color:#000;">  
<h2><a href="dashboard.php"> </a></h2>
</div>

   
<div id="sidebar"> 
 <a href="#" class="visible-phone" style="background-color:#da542e; font:bold 14px 'Aleo'; text-shadow:1px 1px 4px #000; color:#fff;">
 <img src="../img/logs.png"width="100" height="100" style="height:10%; width:10%;" class="img-circle">
 &nbsp;&nbsp;&nbsp; &nbsp;Fleet Management Dashboard</a>
  <ul  style="text-align:left;"> 
  
       <ul class="site-stats">
       
	     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		 <thead>  <tr>
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="fleet_administrator.php">  
		    <img src="../img/demo/access-administrator-account.jpg"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"><small>Fleet&nbsp;admin</small></button> </a>
          </div>  
	      </td>  
		
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"><a href="budgeting.php">  
		    <img src="../img/demo/budget.png"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"> <small>Budgeting</small> </button> </a>
          </div>  
	      </td> 
		</tr> </tbody> </table>
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		 <thead>  <tr>
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="cordination.php"> 
		    <img src="../img/demo/images (2).png"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"><small>Cordination</small></button> </a>
          </div>  
	      </td>  
		
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"><a href="fuel_datacenter.php">
		    <img src="../img/icons/download1.jpg"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"> <small>Fuel&nbsp;orders</small> </button> </a>
          </div>  
	      </td> 
		</tr> </tbody> </table>
        
           
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		 <thead>  <tr>
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="#myModalfuel" data-toggle="modal" class="">
		    <img src="../img/demo/images (2).png"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"><small>Service</small></button> </a>
          </div>  
	      </td>  
		
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="#myModalfuel" data-toggle="modal" class="">
		    <img src="../img/demo/admin.jpg"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"> <small>Work&nbsp;orders</small> </button> </a>
          </div>  
	      </td> 
		</tr> </tbody> </table>
         
             
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		 <thead>  <tr>
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="#myModalfuel" data-toggle="modal" class="">
		    <img src="../img/demo/admin.jpg"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"><small>Accidents</small></button> </a>
          </div>  
	      </td>  
		
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="#myModalfuel" data-toggle="modal" class="">
		    <img src="../img/demo/cover.png"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"> <small>Insurance</small> </button> </a>
          </div>  
	      </td> 
		</tr> </tbody> </table>
            
                  
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		 <thead>  <tr>
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="driverlogs/driver_logs.php">
		    <img src="../img/demo/images (1).jpg"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"><small>Drivers&nbsp;</small></button> </a>
          </div>  
	      </td>  
		
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="fleet_register.php">
		    <img src="../img/demo/33989241-blue-vehicle-icons-on-white-background.jpg"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"> <small>General</small> </button> </a>
          </div>  
	      </td> 
		</tr> </tbody> </table>
        
                
                
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		 <thead>  <tr>
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="#myModalfuel" data-toggle="modal" class="">
		    <img src="../img/demo/health-insurance-icon-png-3.png"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"><small>Valuation</small></button> </a>
          </div>  
	      </td>  
		
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;"> <a href="#myModalfuel" data-toggle="modal" class="">
		    <img src="../img/demo/images (1).png"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;"> <small>Alert&nbsp;center</small> </button> </a>
          </div>  
	      </td> 
		</tr> </tbody> </table>       
                   
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead>  <tr>
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;">  
		    <img src="../img/demo/Open-file-icon.png"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		    <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;">Export</button>
            <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu">
			  <li><a href="fuel/get_load_history2.php">My approved load history</a></li><br> 
              <li><a href="fuel/fuel_export.php">Download fuel consumption history</a></li>  
              <li class="divider"></li> 
            </ul>
          </div>  
	    </td>  
		
		 <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		 <td style="width:46%; border: 0px; background-color:transparent;">  
		     <img src="../img/icons/save3.png"width="100" height="100" style="height:30%; width:30%;"  class="img-circle">
		     <div class="btn-group">
            <button class="btn"  style="text-align:left; background-color:transparent; font-size:12px;
			border: 0px; padding: 2px 3px;">Setup</button>
            <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
           <ul class="dropdown-menu">
              <li><a href="user_panel.php">Add Driver</a></li><br> 
			  <li><a href="fuel_master.php">Fuel cards manager</a></li> 
              <li class="divider"></li> 
            </ul>
          </div>   </td>
		</tr>
       </tbody>
       </table>         
                
	<div id="reviews" class="carousel slide" data-ride="carousel" style="border: 1px solid #f2f0f0;
    border-bottom-width: 5px;
    border-bottom-style: solid;height: 20%;  border-top-right-radius:35px;
    border-bottom-left-radius:35px; background-color:transparent;"> 
                                  <br>  
                                  <div id="reviews" class="carousel-inner" style="background-color:transparent;height:auto;">
                                            <div class="item active">
                                            
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		 <thead>  <tr>
         <td style="width:4%; border: 0px; background-color:transparent;"></td>
		 <td style="width:60%; border: 0px; background-color:transparent;">Fuel cards due for reoder </td>
         <td style="width:4%; border: 0px; background-color:transparent;"></td> 
		 <td style="width:32%; border: 0px; background-color:transparent;"> 
         <p style="color:#000000; text-align:center; font-weight:bold; font-size:14px; margin-top:0px;">
                                               <?php 
			    include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards where fuelvailable < 3000000 AND Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount123 = $result->rowcount(); 
			                                    ?>
                                               <span style="font-size:30px;">
                                                <?php echo $rowcount123;?>
                                               </span>
                                            </p>
	      </td>   
		  </tr> </tbody> </table>        
                                        </div>

                                        <div class="item">
                                             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		 <thead>  <tr>
         <td style="width:4%; border: 0px; background-color:transparent;"></td>
		 <td style="width:60%; border: 0px; background-color:transparent;">Fuel cards due for reoder </td>
         <td style="width:4%; border: 0px; background-color:transparent;"></td> 
		 <td style="width:32%; border: 0px; background-color:transparent;"> 
         <p style="color:#000000; text-align:center; font-weight:bold; font-size:14px; margin-top:0px;">
                                               <?php 
			    include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards where fuelvailable < 3000000 AND Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount123 = $result->rowcount(); 
			                                    ?>
                                               <span style="font-size:30px;">
                                                <?php echo $rowcount123;?>
                                               </span>
                                            </p>
	      </td>   
		  </tr> </tbody> </table>
                                        </div>

                                         <div class="item">
                                            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		 <thead>  <tr>
         <td style="width:4%; border: 0px; background-color:transparent;"></td>
		 <td style="width:60%; border: 0px; background-color:transparent;">Fuel cards due for reoder </td>
         <td style="width:4%; border: 0px; background-color:transparent;"></td> 
		 <td style="width:32%; border: 0px; background-color:transparent;"> 
         <p style="color:#000000; text-align:center; font-weight:bold; font-size:14px; margin-top:0px;">
                                               <?php 
			    include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards where fuelvailable < 3000000 AND Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount123 = $result->rowcount(); 
			                                    ?>
                                               <span style="font-size:30px;">
                                                <?php echo $rowcount123;?>
                                               </span>
                                            </p>
	      </td>   
		  </tr> </tbody> </table> 
                                            </div>
                                        </div> 
                                  
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators" style="width:15%;">  
                                        <li data-target="#reviews" data-slide-to="0" class="hidden" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" class="hidden" style="background-color:yellow;"></li> 
                                        <li data-target="#reviews" data-slide-to="2" class="hidden" style="background-color:red;"></li>  
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->

               </div>
              </ul>   
                
		    
	   <p></p>
	   
	  <script type="text/javascript" src="../js/gauge.js"></script>
	   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead>  <tr>
		  <td style="width:4%; border: 0px; background-color:transparent;"> </td> 
		  <td style="width:46%; border: 0px; background-color:transparent;">    
		 
	  <canvas id="canvas" width="300" height="300" style=" height:70%; width:70%;" data-toggle="tooltip" title="Access denied"> </canvas>
		 </td>
         <td style="width:4%; border: 0px; background-color:transparent;"> </td>  
    <td style="width:46%; border: 0px; background-color:transparent;">  
				<ul class="ajax-loaders"> 
                                 <li style="margin-left: -35px;"><img src="ajax-loaders/ajax-loader-5.gif"
                                 title="ajax-loaders/ajax-loader-5.gif"></li> 
                                            <li style="margin-left: -35px;"><img src="ajax-loaders/ajax-loader-6.gif"
                                 title="ajax-loaders/ajax-loader-6.gif"></li> 
								  
                                    </ul>	
									</td>
									<td style="width:1%; border: 0px; background-color:transparent;">  </td>
									</tr>
       </tbody>
       </table>	 
	   
	   </div>
	    
       </div>
	   
 <div id="content" style="background-color:#f9f9e9;" >
          
  
   <!--Chart-box-->    
    <div class="row-fluid" style="background-color:transparent;"> 
      <div class="widget-box" style="background-color:transparent;"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>
           <div id="breadcrumb" style="border:0px;background-color:transparent;">
            <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
			     
		    <div class="btn-group">
            <button class="btn" style="text-align:left; background-color:transparent;">Reports</button>
            <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="fuel/fuel_reports.php?d1=0&d2=0">Fuel reports</a></li>  
              <li><a href="fuel/cordination_reports.php?d1=0&d2=0">Cordination reports</a></li>  
              <li class="divider"></li> 
            </ul>
          </div>   
	 
            <a href="../index.php">Logout</a>  
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
		   
		     
     <div class="span6">    
            <ul class="nav nav-tabs"> 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
      <td style="width:33.333333%; border: 0px; background-color:#fff;">    <a data-toggle="tab" href="#tab1">
       <center><img src="../img/icons/switch6.jpg"width="100" height="100" class=" " style=" height:55px; width:55px; background-color:transparent"> <br>
        <a href="iterations/fuel_loads.php">Reload fuel cards <b class="data-taggle" class="tooltip" title="Cards below UGX of 3,000,000/=">
		&nbsp;
		  <?php 
			include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards where fuelvailable < 3000000 AND Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount123 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount123;?>
		</a> </center>   </a> 
		</td>
   
   <td style="width:33.333333%;border: 0px ; background-color:#fff;">  
     <a data-toggle="tab" href="#tab2">
       <center><img src="../img/icons/switch6.jpg"width="100" height="100" class=" " style=" height:55px; width:55px; background-color:transparent"> <br> 
         Confirm request &nbsp;
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
 <center></a> 
     
	</td>
	<td style="width:33.333333%;border:0px ; background-color:#fff;"> 
	 <a data-toggle="tab" href="#tab3">
          <center><img src="../img/icons/switch6.jpg"width="100" height="100" class=" " style=" height:55px; width:55px; background-color:transparent"> <br>
           Approve request
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
		  <center></a> 
         
	 </td>  
 </tbody>
 </table>
 
 
 
 
 
 
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead>  <tr>  
        <td style="width:33.333333%; border: 0px; background-color:#fff;">       
		<center><a data-toggle="tab" href="#tab12x"> 
       <img src="../img/icons/switch5.jpg"width="100" height="100" class=" " style=" height:55px; width:55px; background-color:transparent"> <br></a> 
	    <a data-toggle="tab" href="#tab12"> 
        Verify&nbsp;fuel loadings <b style="color:red;"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
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
?> </b></center> </a> 
		</td>
   
    <td style="width:33.333333%; border: 0px; background-color:#fff;">  
	 <a data-toggle="tab" href="#tab22"> <a href="fuel/get_reconcile_pen.php">
        <center>  <img src="../img/icons/switch5.jpg"width="100" height="100" class=" " style=" height:55px; width:55px; background-color:transparent"> <br>
      Reconcile&nbsp;fuel loads </a>   <b style="color:red;">
		<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
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
?>  </b></center>
    </a>   </td>
	
	 <td style="width:33.333333%; border: 0px; background-color:#fff;">       <a href="myfilemgr/index.php">
       <center><img src="../img/demo/datexpot.jpg"width="100" height="100" class=" " style=" height:55px; width:55px; background-color:transparent"> <br>
        Files manager </center> <a data-toggle="tab" href="#tab12"> </a> 
		</td>  
 </tbody>
 </table>
 
   
            </ul>  
			</div>	
        <div class="widget-content tab-content" style="border:0px;" >  
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
            <div id="tab12x" class="tab-pane">    </div> 
			<div id="tab12" class="tab-pane" style="margin-top:-15px; background-color:transparent;">  
			
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
		            <th>ID</th>
					<th>DATE</th>
					<th>INITIATOR</th> 
                    <th>VIEW</th> 
					<th>ACTION</th>     
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
             
            
            
            <div id="tab22" class="tab-pane">
			 </div>
			
			 <div class=""  id="getveview" >  </div>
           
			  
            </div>
            <div id="tab32" class="tab-pane">
                
            </div>
            <div class="panel-body">
	 
     </div>
	 </div>
	       
		
      <div class="row-fluid">
      <div class="span5">
        <div class="widget-box" style="background-color:#fff;">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
		   <?php 
			include('tweak/connectproc.php');
				$result = $db->prepare("SELECT * FROM fuelcards WHERE Fuelcardstatus = 'ACTIVE' ORDER BY productid DESC");
				$result->execute();
				$rowcount = $result->rowcount();
			?> 
          
            <h5>
			Fuel cards: &nbsp;<?php echo $rowcount;?>&nbsp;&nbsp;&nbsp;<a href="fuel_master.php" style="color:#0000CC;">View details</a>
			
			</h5>
          </div>
		  
		  <script type="text/javascript" src="fusion/js/fusioncharts.js"></script>
        <script src="fusion/js/fusioncharts.js"></script>
        <script src="fusion/js/fusioncharts.charts.js"></script>
        <script src="fusion/js/themes/fusioncharts.theme.zune.js"></script>
        
         <div class="table-responsive mailbox-messages">       
 
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
              "paletteColors" => "#d70000",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "#d70000",
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
        $columnChart = new FusionCharts("column2D", "myFirstChart" , 400, 400, "chart-1", "json", $jsonEncodedData);

        // Render the chart
        $columnChart->render();

        // Close the database connection
        $dbhandle->close();
    }

?>

   <div id="chart-1"><!-- Fusion Charts will render here--></div> 
    
         </div>
        </div> 
      </div>
	  
	   
      <div class="span7">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1mon">Cordination</a></li>
              <li><a data-toggle="tab" href="#tab2mon">Other alerts</a></li> 
            </ul>
          </div>
          <div class="widget-content tab-content">
          <div id="tab1mon"class="tab-pane active">
		  
		  
		  <div class="span6">  
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
             <th style="width:39%; text-align:left; border:0px;"> <strong>Total&nbsp;number of pending&nbsp;orders</strong></th>
			 <th style="width:10%; text-align:left; border:0px;">  
			 <b style="text-align:center; font-size: 15px;border-radius: 11px;" class="button 5"> 
			 <?php 
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Pending'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
             
			 </td>  
			 <th style="width:2%; text-align:left; border:0px;">  </th>
			 <th style="width:39%; text-align:left; border:0px;"> <strong>Total allocated orders </strong> </th>
			 <th style="width:10%; text-align:left; border:0px;">   
			 <b style="text-align:center; font-size: 15px;border-radius: 11px;" class="button 5"> 
			  <?php 
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date' AND Allocationstatus ='Allocated'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>

			 </td>  
			 </tr>             
             </table> 
			 
              </div>  
			  
			  <div class="span6">  
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
             <th style="width:39%; text-align:left; border:0px;">  <strong>Total&nbsp;number of rejected orders</strong></th>
			 <th style="width:10%; text-align:left; border:0px;">   
			 <b style="text-align:center; font-size: 15px;border-radius: 11px;" class="button 5"> 
			 <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date' AND Allocationstatus ='Rejected'")) { 
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
            
			 </td>  
			 <th style="width:2%; text-align:left; border:0px;">  </th>
			 <th style="width:39%; text-align:left; border:0px;"><strong>Total&nbsp;Orders as of <?php echo date('d-m-y'); ?></strong>  </th>
			 <th style="width:10%; text-align:left; border:0px;">  
			 <b style="text-align:center; font-size: 15px;border-radius: 11px;" class="button 5"> <?php 
$link = mysqli_connect("localhost", "root", "toor2", "fleet"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationdate ='$date'")) { 
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>           </b>
			 </td>  
			 </tr>             
             </table> 
			 
              </div>     
 

		 
     <script src="areaChart/chart.js/jquery.min.js"></script> 
	 <script src="areaChart/chart.js/Chart.js"></script>
	 <?php 
	 $year = date('Y');
     ?>
	 
	 <br> <br> <br>  
     <h6 class="box-title">Transport reservation analysis between (<?php echo $year-1; ?> vs <?php echo $year; ?>)</h6>
			   
     <canvas id="areaChart" style="height:250px"></canvas> 
        
<?php include('areaChart/data_transport.php'); ?>
<script>
  $(function () {
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
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
    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)

  })
</script>   
			  
            </div>  
            <div id="tab2mon" class="tab-pane">
              
	        <p>UNDER DEVELOPMENT</p>
    
            </div>
            <div id="tab3mon" class="tab-pane">
            <p> Under development</p>
            </div>
          </div>
		   
   
			  
 
          </div>
		   
        </div> 
	   
       <marquee direction="up" scrollamount="1" onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 1, 0);">
		 
			
        <table id="exmon" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>   
                 
		            <th>EQUIPMENT CATEGORY</th>
					<th>AVAILABLE</th> 
					<th>RUNNING</th>
					<th>UNDER REPAIR</th> 
                    <th>DOWN</th>   
					<th>ACTION</th>    
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "select * ,SUM(COUNTID),  
								                                sum( if( FUNCTIONALSTATUS = 'RUNNING', COUNTID, 0 ) ) AS R,  
                                                                sum( if( FUNCTIONALSTATUS = 'UNDER-REPAIR', COUNTID, 0 ) ) AS U, 
																sum( if( FUNCTIONALSTATUS = 'DOWN', COUNTID, 0 ) ) AS D 
                                 from motorisedequipments where AVAILABILITYDISPOSAL ='AVAILABLE' GROUP BY TYPE ASC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['REGISTRATIONNO']."***".$res['id'];
		echo "<tr>"; 
		echo "<td>".$res['TYPE']."</td>";
		echo "<td>".$res['SUM(COUNTID)']."</td>"; 
		echo "<td>".$res['R']."</td>";  
		echo "<td>".$res['U']."</td>"; 
		echo "<td>".$res['D']."</td>";   
	    echo '<td>  
		        <a id="10190002__'.$dtszs.'" href="javascript:void(0)" onclick="getcat(this.id)" data-toggle="tooltip" title="Click to view" 
				style="color: #fff;border-radius:1px; height: 17px;" <button class="btn btn-info"> Display </span></a>    
               </td>'; 	    	
	}
	   
    ?>
	</tbody>
  </table>   
	</marquee> 
	  
	  
          </div>
        </div> 
      </div> 
      </div>
    
</div>
      
    </div>
<!--End-Chart-box-->
         
		 
		 
            </ul>
          </div> 
        </div>  </div> 
		
        
	 </div> </div> 
	  
			
			
			
			
			
	    </div>
	</div>
</div> 
	</div>
	</div> 

<!--end-Footer-part-->
<!--script src="../js/jquery.min.js"></script-->
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

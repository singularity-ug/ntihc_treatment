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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../datatable/bootstrap/css/bootstrap.css" />  
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
     $('#exvehc').DataTable( {
	  "iDisplayLength": 20,
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


    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
   border-top: 2px solid #fe0606;
line-height: 1.0;
padding: 3px;
vertical-align: center;
background-color: #503939;
color: white;
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
             	 font-size: 11px;
             	 color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
</head>
<body style="background: #1e282c;">
 

<!--Header-part-->
<div id="header" style="background-color:#da542e;margin-top: -20px;">  
<h2><a href="dashboard.php"> </a></h2>
</div>
<!--close-Header-part--> 
 
<!--sidebar-menu-->

<div id="sidebar"> 
 <a href="#" class="visible-phone"><i class="icon icon-signal"></i> &nbsp; &nbsp; &nbsp; Fleet system dashboard</a>
  <ul>
    <li  class="submenu active"><a href="dashboard.php"><i class="icon icon-home"></i> <span>General Fleet Management</span></a> </li>
   
  
<br><br> 
   
  <table id="exvehc" class="table table-table-stripped" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px; width:10%;">ID</th>
					 <th style="background-color:#ecf0f5; color:#000; font-size:10px;width:30%;">REG/NO.</th>  
                     <th style="background-color:#ecf0f5; color:#000; font-size:10px;width:20%;">ACTION</th>  
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5; color:#000;font-size:10px; width:10%;">ID</th>
					 <th style="background-color:#ecf0f5; color:#000; font-size:10px;width:30%;">REG/NO.</th>  
                     <th style="background-color:#ecf0f5; color:#000; font-size:10px;width:20%;">ACTION</th>    
        </tr>
        </tfoot> 
        <tbody> 
           
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM motorisedequipments ORDER BY REGISTRATIONNO DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtszs = $res['id']."***".$res['REGISTRATIONNO'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['REGISTRATIONNO']."</td>";  
		 echo '<td>  
		        <a id="311__'.$dtszs.'" href="javascript:void(0)"  onclick="getfleetinfo(this.id)" data-toggle="tooltip" title="View" style="color: #fff;"
			   style="color: #000;border-radius:2px; height: 20px;" <button class="button 5">View details</span></a>  
               </td>';  	
	}
	   
    ?>
	</tbody>
  </table>                
      
                        
<!--End sidebar-menu-->       
</div>
<!--Staet sidebar-container-->
 
<div id="content" style="background: #fff;">
  <div id="content-header" style="margin-top: 0px;">
   <div id="breadcrumb"> <a href="fleet_administrator.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
                          <a href="#myModal1" data-toggle="modal" class="">Travel history</a> 
                          <a href="#myModal21" data-toggle="modal" class="">Log books</a>  
                          </div> 
  </div> 
   
   
       <div class=""  id="getfleetinfo" >  </div>
                <script> 
          function getfleetinfo(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'general/fleet_general.php?q='+odno,
                       success : function(data){
                                $('#getfleetinfo').html(data);
								$("#ouxxxddda").modal("show");
                                 }
               });
               } 
          </script>  
   
 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box" style="margin-top: 8px;"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Fleet Management</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12"> 
             
             
             <div class=""  id="getresorder" >  </div>
                <script> 
          function getresorder(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'booking/cordinate_vehicles.php?q='+odno,
                       success : function(data){
                                $('#getresorder').html(data);
								$("#outxxexxxx").modal("show");
                                 }
               });
               } 
                </script>    
             
             
             <div class="table-responsive mailbox-messages"> 
             <p></p>
                  <!-- Info boxes --> 
             
             
             
             
             
             
             
             
             
             
  
    
             </div>  </div>
            </div>
           </div> 
         </div>
        
        <div class="span3"> 
        <ul class="site-stats"> 
            <ul class="nav nav-tabs" style="border:0px; background-color:#fff;">
			     
				 <a data-toggle="tab" href="#tab1"><li class="bg_lo"><i class="icon-home"></i> 
                <strong>
                 General
                 </strong> <small>Summary</small></li></a>
                
				
				 
                <a data-toggle="tab" href="#tab2"> <li class="bg_ly"><i class="icon-plus" style="color:#fff;"></i> 
                 <strong>
                 
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM motorisedequipments WHERE AVAILABILITYDISPOSAL ='AVAILABLE'")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    		
                 
                 </strong> 
				 <small style="color:#FFF;">Vehicles</small></li></a>
				
                
              
              </ul> 
          
    </div> 
	
	 <div class="span8"> 
 
        <div class="widget-content tab-content" style="margin-top:-20px; border:0px;"> 
            <div id="tab1" class="tab-pane active"> 
	 		
			 
			
    </div>
    <div id="tab2" class="tab-pane">
	
	  <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Vehicle information</h5>
                </a> </div>
            </div>

            <div class="collapse in accordion-body" id="collapseGOne" style="background-color: #fff;">
              <div class="widget-content"> 
	 <form class="form-horizontal" action="process_newvehicle.php" method="POST" style="height:auto;">
                
               <table class="table" style="border:0px;">
              <tr>  
                <th style="width:35%;border:0px; background-color:#FFF; color:#000;">Registration number</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" id="REGISTRATIONNO" name="REGISTRATIONNO"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
               </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
              <tr>   
                <th style="width:35%;border:0px; background-color:#FFF;color:#000;">Make</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="MAKE" id="MAKE"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
             
               <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
			  
<?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stss ="";
if( $result = $connect->query("SELECT * FROM vehtype"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['VEHICLETYPE'] . "</option>";   }
  }
$connect->close();
?>

                 <th style="width:35%;border:0px; background-color:#FFF;color:#000;">Type</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <select id="TYPE" name="TYPE" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; color:#000;">
				<option></option>
				<option><?php   echo $stss; ?></option>
				</select>
				
				
				 </th> 
                </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                  <th style="width:35%;border:0px; background-color:#FFF;color:#000;">Model</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="MODEL" id="MODEL"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
               
                
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:35%;border:0px; background-color:#FFF;color:#000;">color</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="COLOR" id="COLOR" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                </tr>
			  </table> 
              
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Year of manufacture</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="date" name="YOM" id="YOM"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Power</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text"  name="POWER" id="POWER" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Category</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <select id="CATEGORY" name="CATEGORY"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> 
                        <option> </option>
                        <option> MANAGERIAL</option>
                        <option> SERVICE</option> 
                </select>
               </tr>
			  </table> 
              
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Equipment type</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <select id="EQUIPMENTCATEGORY" name="EQUIPMENTCATEGORY"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;"> 
                        <option> MOTOR VEHICLE</option>
                        <option> MOTOR CYCLE</option>
                        <option> HEAVY MOTOR EQUIPMENT</option>
                        <option> GENERATOR</option> 
                        <option> LAWN MOVER</option> 
                        <option> OTHERS</option>
                </select>
               </tr>
			  </table> 
              
               
               </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon">
              <i class="icon-circle-arrow-right"></i></span>
                <h5>Next 2/4</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwo" style="background-color:#fff;">
              <div class="widget-content">
              
                <table class="table" style="border:0px; margin-top:0px;">
               <tr> 
                 <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Seating capacity</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="SEATINGCAPACITY" id="SEATINGCAPACITY"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                  </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Functional status</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <select id="FUNCTIONALSTATUS" name="FUNCTIONALSTATUS" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;">
                 <option value="RUNNING"> RUNNING</option>
                        <option>DOWN </option>
                        <option>REPAIRABLE </option>
                        </select>
                  </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Fuel type</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <select name="FUELTYPE" id="FUELTYPE"
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
                <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Consuption per KM</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="CONSUMPTIONPERKM" id="CONSUMPTIONPERKM"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                   </tr>
			  </table> 
               
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                   <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Engine number</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="ENGINENO" id="ENGINENO"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                  </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Chasis number</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="CHASSISNO" id="CHASSISNO"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                  </tr>
			  </table> 
               
              <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                  <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Odometer status</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <select name="ODOMETERSTATUS" id="ODOMETERSTATUS"
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
                 <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Odometer type</th> 
				 <th style="width:20%;border:0px;background-color:#FFF;color:#000;"> 
                  <input type="radio" name="ODOMETERTYPE" value="KM" id="KM" checked="" style="margin-top:-4px;"> &nbsp;KM
				  </th>
                    
                    <th style="width:20%;border:0px;background-color:#FFF;color:#000;">
					<input type="radio" class="switch-input" name="ODOMETERTYPE" value="HRS" id="HRS" style="margin-top:-4px;"> &nbsp;HRS</th>
                    
                    <th style="width:25%;border:0px;background-color:#FFF;color:#000;">  
					<input type="radio" class="switch-input" name="ODOMETERTYPE" value="MILES" id="MILES" style="margin-top:-4px;"> &nbsp;MILES</th>  
              </tr>
			  </table> 
               
               </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTthree" data-toggle="collapse"> <span class="icon">
              <i class="icon-circle-arrow-right"></i></span>
                 <h5>Next 3/4</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTthree" style="background-color:#fff;">
              <div class="widget-content">
              
                <table class="table" style="border:0px; margin-top:0px;">
                 <tr>   
                 <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Acquisition date</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="date" name="ACQUISITIONDATE" id="ACQUISITIONDATE" placeholder="yyyy / mm / dd"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px;"> </th> 
                 </tr>
			  </table> 
              
                
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Purchase cost</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="PURCHASECOST" id="PURCHASECOST"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
			  </table> 
            
 
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr>   
                 <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Purchased / Leased from</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text"  name="SUPPLIEDBY" id="SUPPLIEDBY" 
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
			  </table>  
                    
               
                <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Holding type</th> 
				 <th style="width:30%;border:0px;background-color:#FFF;color:#000;"> 
                   <input type="radio" class="switch-input" name="HOLDSTATUS" value="PURCHASED" id="HOLDSTATUS" checked="" 
				   style="margin-top:-4px;background-color:#FFF;color:#000;"> &nbsp;PURCHASED</th> 
                     
                    <th style="width:35%;border:0px;background-color:#FFF;color:#000;">
					<input type="radio" class="switch-input" name="HOLDSTATUS" value="PROJECT SUPPORT" id="HOLDSTATUS" 
					style="margin-top:-4px;background-color:#FFF;color:#000;">  &nbsp;PROJECT SUPPORT</th> 
                  </th>  
              </tr>
			  </table> 
              
                 
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#FFF;color:#000;">User department</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="USERDEPT" id="USERDEPT"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
			  </table> 
            
               
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Location</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <input type="text" name="LOCATION" id="LOCATION"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
              </tr>
			  </table> 
            
               
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#FFF;color:#000;">Division</th> 
				<th style="width:65%;border:0px;background-color:#FFF;color:#000;"> <select name="DIVISION" id="DIVISION"
				  style="width:100%; font-weight:normal; background-color:#fff;">
                  <option></option>
                  <option>HEADQUARTER</option>
                  <option>KAWEMPE</option>
                  <option>NAKAWA</option>
                  <option>CENTRAL</option>
                  <option>LUBAGA</option>
                  <option>MAKINDYE</option>
                   </select> 
                   </th>  
              </tr>
			  </table> 
            
                  <input type="hidden" name="ASSETIMAGE" id="ASSETIMAGE"style="margin-top: -18px;margin-left: 0px;width: 166px;"/> 
                  
                 <center><input type="submit" name="button" id="button" value="Save" />
          <button type="button" class=" " data-dismiss="modal">Close</button></center>
         </form> 
               </div>
            </div>
          </div> 
        </div>
	</div>
	</div>
<!--End-Chart-box--> 

 
<!--End model--->       

<!--Footer-part-->  
<!--end-Footer-part-->
<!--<script src="../js/jquery.min.js"></script>-->
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.validate.js"></script>
<script src="../js/matrix.js"></script>  
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/matrix.wizard.js"></script> 
</body>
</html>

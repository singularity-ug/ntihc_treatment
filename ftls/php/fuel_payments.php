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
<body style="background: #1e282c;">

<!--Header-part-->
<div id="" style="background-color: #f56954;">
  <h2><a href="dashboard.php" style="font-size:12px; color:#f56954;"> . </a></h2>
</div>
<!--close-Header-part-->
 

<!--Start sidebar-menu--> 
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-signal"></i> </a>
  <ul>
  <p></p>
  <p style=" font:bold 17px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;">Automated fuel payments </p> 
      
      
<!--End sidebar-menu-->       
</div>
<!--Staet sidebar-container-->
 
<div id="content" style="background: #fff;">
  <div id="content-header" style="margin-top: 1px;">
   <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
                          <a href="#myModal1" data-toggle="modal" class="">Travel history</a> 
                          <a href="#myModal21" data-toggle="modal" class="">Log books</a>  
                          </div> 
  </div> 

 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Fleet register</h5>
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
            
            
              <table id="example3" class="table table-table-bordered" style="font-size:9px; width:100%;">
         <thead>
         <tr>   
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">ACTION</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:45%;">APPLICANT.NAME</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;width:25%;">TRAVEL.DATE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">PSG</th> 
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5; font-size:10px;width:10%;">ACTION</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:45%;">APPLICANT.NAME</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;width:25%;">TRAVEL.DATE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">PSG</th> 
                    
        </tr>
        </tfoot> 
        <tbody>  
<?php 
include_once("connect/configftl.php"); 

$result = mysqli_query($mysqli, "SELECT * FROM ftlvehiclebooking WHERE ordertype = 'Reservation' AND Allocationstatus ='Pending' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['senderaccount']."***".$res['id'];
		echo "<tr>"; 
		echo '<td> 
			    <a id="1__'.$dtsz.'" href="javascript:void(0)"  onclick="getresorder(this.id)" data-toggle="tooltip" title="Allocate"
               <span class="glyphicon glyphicon-ok"> </span></a> 
               &nbsp;&nbsp;&nbsp;
               <a id="2__'.$dtsz.'" href="javascript:void(0)"  onclick="getprocform(this.id)" data-toggle="tooltip" title="History"
               <span class="glyphicon glyphicon-share"> </span></a> 
               </td>';  	
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['applicantname']."</td>"; 
		echo "<td>".$res['Reservationdate_from']."</td>"; 
		echo "<td>".$res['Passengers']."</td>";  
		
	}
	   
    ?>
	</tbody>
  </table> 
  
    
             </div>  </div>
            </div>
           </div> 
         </div>
        
        <div class="span3"> 
        <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong>
                 <?php 
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Createddate ='$date' AND Allocationstatus ='Pending'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                </strong> <small>Pending orders</small></li>
                
                <li class="bg_lh"><i class="icon-plus"></i> <strong>
                
                                   <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Createddate ='$date' AND Allocationstatus ='Allocated'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
</strong> <small>Allocated orders </small></li>
                
                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>
                
                 <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Createddate ='$date' AND Allocationstatus ='Rejected'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                </strong> <small>Rejected orders</small></li>
                
                <li class="bg_lh"><i class="icon-tag"></i> <strong>
                
                 <?php
			
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Createddate ='$date'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                
                </strong> <small>Total Orders</small></li>
                 
              </ul> 
         
      </div> 
    </div> 
<!--End-Chart-box--> 


<!--Start model--->
 <div id="myModal" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Transport</h3>
              </div>
              <div class="modal-body">
                 <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Reservations</h5> 
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOne">
              <div class="widget-content"> 
              
            <center> <a href="#mybooking" data-toggle="modal" class="btn btn-primary" style=" border-radius:6px;"> Click to book a vehicle </a> </center>
              
              
              </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i>
              </span>
                <h5>Accordion closed</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwo">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse"> <span class="icon"><i class="icon-eye-open"></i></span>
                <h5>Accordion closed</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGThree">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
        </div>
              </div>
            </div>
            
            
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
              <li class="active"><a data-toggle="tab" href="#tab1">Book</a></li>
              <li><a data-toggle="tab" href="#tab2">Next</a></li> 
            </ul>
          </div>
          <div class="widget-content tab-content" style="background-color: #fff;">
            <div id="tab1" class="tab-pane active">
            <form class="form-horizontal" action="booking/process_ftlbookings.php" method="POST" style="height:auto;">
              
              <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>  
                <th style="width:30%;border:0px;">Date</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="Createddate" name="Createddate" value="<?php echo date('y-m-d'); ?>"   
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
            </div>
            <div id="tab2" class="tab-pane">
              
                 <table class="table" style="border:0px; margin-top:0px;">
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
            
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Travel date</th> 
				<th style="width:70%;border:0px;"> <input type="date" id="Reservationdate_from" name="Reservationdate_from" value="<?php echo date('y-m-d'); ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>
                 </tr>
			     </table>   
                <span>
                <table class="table" style="border:0px; margin-top:-23px;">
                <tr> 
                <th style="width:30%;border:0px;">Return date</th>   
				<th style="width:70%;border:0px;"> <input type="date" id="Reservationdate_to" name="Reservationdate_to" value="<?php echo date('y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>   
              </tr>
			  </table>  </span>    
   
              
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Departure time</th> 
				<th style="width:70%;border:0px;"> <input type="time" id="Departuretime" name="Departuretime"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>   
                  </tr>
			   </table>  
              
                <span>
                <table class="table" style="border:0px; margin-top:-23px;">
               <tr> 
                <th style="width:30%;border:0px;">Expected return time</th> 
				<th style="width:70%;border:0px;"> <input type="time" id="Pickuptime_expected" name="Pickuptime_expected"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
              </tr>
			  </table>   </span>  
     
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Prefered vehicle</th> 
				<th style="width:70%;border:0px;"> <select id="Preferedvehicle" name="Preferedvehicle" 
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
                <th style="width:30%;border:0px;">Passengers</th> 
				<th style="width:50%;border:0px;"> <input type="text" id="Passengers" name="Passengers" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; text-align:center; font-weight:bold; ">  </th>
                
                <input type="hidden" id="ordertype" name="ordertype" value="Reservation">
                  
                <th style="width:20%;border:0px;"> <center>  <input type="submit" name="button" id="button" value="Save" />  </center> </th>  
                </tr>
			  </table>  
              
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
                <h3>Requisitions</h3>
              </div>
              <div class="modal-body">
              
                    <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOnecaro" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Fuel and lubricants requisition</h5>
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOnecaro">
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
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwocaro" data-toggle="collapse"> <span class="icon"><i class="icon-circle-arrow-right"></i></span>
                <h5>Accordion closed</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwocaro">
              <div class="widget-content"> Another is open </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGThreecaro" data-toggle="collapse"> <span class="icon"><i class="icon-eye-open"></i></span>
                <h5>Accordion closed</h5>
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

<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12" style="color:#fff;"> 2017 &copy; Kampala capital city authority <a href="http://themedesigner.in"> </a> </div>
</div>
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

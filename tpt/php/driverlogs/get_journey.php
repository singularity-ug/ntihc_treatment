 <?php
  $id = $_GET['q']; 
  $Createddate = '';
  $applicantname = '';
  $title  = '';
  $applicantdept = '';
  $pfno = ''; 
  $senderaccount = ''; 
  $CORNAME='';
  $CORSIGNATURE='';
  $Phonecontact=''; 
  $booktype='';
  $Activity='';
  $journeypoint_start='';
  $Destination_to='';
  $Reservationdate_from='';
  $Reservationdate_to='';
  $Departuretime='';
  $Pickuptime_expected='';
  $Preferedvehicle='';
  $Passengers='';  
  $Checkout='';
  $Vehicletype='';
  $Drivername='';
  $Mobilecontact='';  
  $Workcontact='';
  $DriverTitle='';
  $Emailaddress=''; 
  $Vehicleallocated=''; 
  $timeout='';  
  $timein='';
  $mileageout='';
  $mileagein=''; 
  $distancecovered=''; 
	$Parking=''; 
	 		  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "fleet";
             
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM ftlvehiclebooking  WHERE `id` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $Createddate = $row['Createddate'];
     $applicantname = $row['applicantname'];
     $title  = $row['title'];
     $applicantdept = $row['applicantdept'];
     $pfno = $row['pfno'];
     $senderaccount = $row['senderaccount'];
     $Phonecontact = $row['Phonecontact']; 
     $booktype=$row['booktype'];
     $Activity=$row['Activity'];
     $journeypoint_start=$row['journeypoint_start'];
     $Destination_to=$row['Destination_to'];
     $Reservationdate_from=$row['Reservationdate_from'];
     $Reservationdate_to=$row['Reservationdate_to'];
     $Departuretime=$row['Departuretime'];
     $Pickuptime_expected=$row['Pickuptime_expected'];
	 $Preferedvehicle=$row['Preferedvehicle'];
     $Passengers=$row['Passengers']; 
	 $Checkout=$row['Checkout'];
     $Vehicletype=$row['Vehicletype'];
     $Drivername=$row['Drivername'];
     $Mobilecontact=$row['Mobilecontact'];
	 $Workcontact=$row['Workcontact'];
     $DriverTitle=$row['DriverTitle'];
	 $Emailaddress=$row['Emailaddress'];  
     $Vehicleallocated = $row['Vehicleallocated'];   
	       
	 $timeout=$row['timeout'];
	 $timein=$row['timein'];
     $mileageout=$row['mileageout'];
	 $mileagein=$row['mileagein'];  
     $distancecovered = $row['distancecovered'];   
	  $Parking = $row['Parking'];     
	   $id = $row['id'];
      }

  ?> 

 
<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #f0f0f0;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #f0f0f0;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
				font-weight:normal;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>


  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#Vehicleallocated"+num).val(data[2]);
  $("#Vehicletype").val(data[2]);
  $("#Drivername").val(data[3]);
  $("#Mobilecontact").val(data[4]); 
  $("#Workcontact").val(data[5]);
  $("#DriverTitle").val(data[6]); 
  $("#Emailaddress").val(data[7]); 
  $("#Previousconsumptionrateperliter").val(data[8]); 
  $("#Costperlitre").val(data[9]); 
}
     
function domeexck(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "jquery_search/serch_fleetdriver.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}
 
</script> 
<div class="wrapper" style="background-color:#fff;">
  <!-- Main content --> 
      <!-- title row -->
      <div class="row"> 
      <div class="modal-body">     
                  
         <textarea id="" name="" style="width:100%; text-align:left;background-color:#ecf0f5;font-size:11px;"> Purpose;&nbsp; <?php  echo $Activity; ?></textarea>
         
         </div>
		 
		 <form class="form-horizontal" action="../booking/update_travel1.php" method="POST" style="height:auto;">
               
         <input type="hidden" name="id" id="id" readonly="readonly" value="<?php  echo $id; ?>" >  
    	<div class="col-sm-4">
	    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:30%; text-align:left; border:0px;">From</th>
        <th style="width:70%; text-align:left;border:0px;"><input type="text" id="journeypoint_start" name="journeypoint_start" value="<?php  echo $journeypoint_start; ?>"
		required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
		</tr>   </table>
		
		<input type="hidden" id="routed" name="routed" value="1"> 
		
		<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:30%; text-align:left; border:0px;">Date</th>
        <th style="width:70%; text-align:left;border:0px;"> <input type="text" id="Reservationdate_from" name="Reservationdate_from" value=" <?php  echo $Reservationdate_from; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; "> </th> 
		</tr>   </table>
		
		<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:30%; text-align:left; border:0px;">Time out</th>
        <th style="width:70%; text-align:left;border:0px;"> <input type="text" id="timeout" name="timeout" required="" value=" <?php  echo $timeout; ?>"
				style="width:100%; font-weight:normal; background-color:#fff; text-align:left; border:1px solid green; "> </th> 
		</tr>   </table>
			
		</div>
		
		<div class="col-sm-4">
	    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:30%; text-align:left; border:0px;">To</th>
        <th style="width:70%; text-align:left;border:0px;"><input type="text" id="Destination_to" name="Destination_to" value="<?php  echo $Destination_to; ?> "
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
		</tr>   </table>
		
		<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:30%; text-align:left; border:0px;">Date</th>
        <th style="width:70%; text-align:left;border:0px;"> <input type="date" id="Reservationdate_to" name="Reservationdate_to" value="<?php  echo $Reservationdate_to; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; "> </th> 
		</tr>   </table>
		
		<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
        <th style="width:30%; text-align:left; border:0px;">Time in</th>
        <th style="width:70%; text-align:left;border:0px;"> <input type="text" name="timein" id="timein"   value="<?php  echo $timein; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
		</tr>   </table>
			
		</div>
		<div class="col-sm-4">
	    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:60%; text-align:left; border:0px;">Mileage before</th>
        <th style="width:40%; text-align:left;border:0px;"><input type="text" name1="mileagein[]" id="mileagein" name="mileagein"  value="<?php  echo $mileagein; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
		</tr>   </table>
		
		<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:60%; text-align:left; border:0px;"> Mileage after</th>
        <th style="width:40%; text-align:left;border:0px;"> <input type="text" class="qty" name1="qty[]" id="mileageout" name="mileageout"  value="<?php  echo $mileageout; ?>"
		style="width:100%; font-weight:normal; background-color:#fff; "> </th> 
		</tr>   </table>
		
		<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:60%; text-align:left; border:0px;">Distance covered</th>
        <th style="width:40%; text-align:left;border:0px;"> <input type="text" name1="distancecovered[]" id="distancecovered" name="distancecovered" 
		value="<?php  echo $distancecovered; ?>"
				 readonly="" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
		</tr>   </table>
		  
		 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:30%; text-align:left; border:0px;">Route status</th>
        <th style="width:40%; text-align:left;border:0px;"> 
		<input type="radio" id="Servicerecieved" name="Servicerecieved" value="No" checked="checked" />
		<label>In service</label>
		<input type="radio" id="Servicerecieved" name="Servicerecieved" value="Yes" />
		<label>Check out</label>  </th>  
		</tr>   </table> 
		
		
	    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
        <th style="width:60%; text-align:left; border:0px;">Parking</th>
        <th style="width:40%; text-align:left;border:0px;"> <select name="Parking" id="Parking"  value="<?php  echo $Parking; ?>" required="required"  
                style="width:100%; text-align:left;background-color:#fff;font-size:11px;height:17px;"> 
        <option value="In transit">In transit</option>
		<option>City hall</option>
		<option>Nakawa</option>
		<option>Central</option>
		<option>Yard</option>
		<option>Makindye</option>
		<option>Kawempe</option>
		<option>Others</option>
                </select></td>   
		</tr>   </table>    
			  <br />
		<input type="hidden" id="Servicedate" name="Servicedate" value="<?php echo date('y-m-d'); ?>" />
			  
          <center> 
		  <input type="submit" name="button" id="button" value="Save" style="width:100%;"/>  
		  </center> 
          </form>  
        </div> 
             
 
      
<div id="grand">
<input type="hidden" name="gran" id="gran">
</div>

<script type="text/javascript">
$(document).ready(function() { 
	    $(".qty").keyup(function() {
        var grandTotal = 0;
        $("input[name1='qty[]']").each(function (index) {
            var qty = $("input[name1='qty[]']").eq(index).val(); 
		    var mileagein = $("input[name1='mileagein[]']").eq(index).val();
            var distancecovered = parseInt(qty) - parseInt(mileagein); 
			   
            if (!isNaN(distancecovered)) {
                $("input[name1='distancecovered[]']").eq(index).val(distancecovered);
                grandTotal = parseInt(grandTotal) + parseInt(distancecovered);
                $('#gran').val(grandTotal);
            } 
			 
        });
    });
});
</script>

  
<script> 
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();
         document.getElementById('timein').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script>              
               
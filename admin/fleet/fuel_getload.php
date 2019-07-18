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
	 		  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
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
	   $id = $row['id'];
      }

  ?> 

     <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
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
  url: "serch_fleetdriver.php",
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
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>VEHICLE ALLOCATION</b> </p> </center> 
 
            <form class="form-horizontal" action="update_reseervationjourney.php" method="POST" style="height:auto;">
             
               <table class="table" style="border:0px;">
              <tr>  
                <th style="width:30%;border:0px;">Request date</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="Createddate" name="Createddate"  value="<?php  echo $Createddate; ?>"   
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                
                <th style="width:20%;border:0px;">Order No.</th> 
				<th style="width:20%;border:0px;"> <input type="text"  id="id" name="id"  value="<?php  echo $id; ?>"  
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#fff;text-align:center; font-weight:bold; "> </th>
                
                   
              </tr>
			  </table> 
               
     
                 <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Prefered vehicle</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="Preferedvehicle" name="Preferedvehicle"  value="<?php  echo $Preferedvehicle; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
                
                <th style="width:20%;border:0px;">Passengers</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="Passengers" name="Passengers"  value="<?php  echo $Passengers; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; text-align:center; font-weight:bold; ">  </th>  
                 
              </tr>
			  </table> 
              
       
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-13px; ">
   <thead>
   <tr>
   <th style="width:30%;">Vehicle Registration No.</th>
   <th style="width:40%;">Vehicle type</th>
   <th style="width:20%;">Check out</th>  
   </tr>
   </thead>
   <tbody>
   <tr> 
   <td><input type="text" name="Vehicleallocated" onKeyUp="domeexck(this)" id="Vehicleallocated" value="<?php  echo $Vehicleallocated; ?>" required="required"  
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td><input type="text" name="Vehicletype" id="Vehicletype"  value="<?php  echo $Vehicletype; ?>" readonly="readonly" 
                style="width:100%; text-align:left;background-color:#fff;"></td> 
                
                   
    <td><input type="text" name="Checkout" id="Checkout" readonly="readonly"  
                style="width:100%; text-align:left;background-color:#ecf0f5; color:red;"></td> 
                                              
   </tr>
   <tr>
   </tbody>
   </table>    
   
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-20px; ">
   <thead>
   <tr>
   <th style="width:50%;">Driver name</th>
   <th style="width:50%;">Designation</th>  
   </tr>
   </thead>
   <tbody>
   <tr>  
   
   <td><input type="text" name="Drivername" id="Drivername"  value="<?php  echo $Drivername; ?>" readonly="readonly"  
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   
   <td><input type="text" name="DriverTitle" id="DriverTitle"  value="<?php  echo $DriverTitle; ?>" readonly="readonly" 
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td>  
   </tr>
  <tr>
 </tbody>
 </table>  
   
   <table class="table table-striped" style="background-color:#ffffff; margin-top:-22px; ">
   <thead>
   <tr>
   <th style="width:50%;">Mobile phone no.</th>
   <th style="width:50%;">Work phone no.</th>  
   </tr>
   </thead>
   <tbody>
   <tr>  
   <td><input type="text" name="Mobilecontact" id="Mobilecontact"  value="<?php  echo $Mobilecontact; ?>" readonly="readonly" 
       style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
                
  <td><input type="text" name="Workcontact" id="Workcontact"  value="<?php  echo $Workcontact; ?>" readonly="readonly"  
       style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
  </tr>
  <tr>
  </tbody>
  </table>   
 
     
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-22px; ">
   <thead>
   <tr>
   <th style="width:45%;">Allocated trip type</th>
   <th style="width:30%;">Action </th>  
   <th style="width:25%;"> </th>  
   </tr>
   </thead>
   <tbody>
   <tr> 
    <td><select name="booktype" id="booktype"  value="<?php  echo $booktype; ?>" required="required"  
                style="width:100%; text-align:left;background-color:#fff;">
                <option value="<?php  echo $booktype; ?>" ><?php  echo $booktype; ?></option>
                <option>ROUND TRIP</option>
                <option>PICK AND DROP</option>
                </select></td> 
                
    <td><input type="radio" name="Allocationstatus" id="Allocationstatus"  value="Allocated" checked />
    <label>ACCEPT</label> 
    <input type="radio" name="Allocationstatus" id="Allocationstatus"  value="Rejected"  />
    <label>REJECT</label>              
     </td>
                <input type="hidden" name="Emailaddress" id="Emailaddress" />  
                <input type="hidden" name="Previousconsumptionrateperliter" id="Previousconsumptionrateperliter" />   
                <input type="hidden" name="Costperlitre" id="Costperlitre" /> 
                <input type="hidden" name="Allocationdate" id="Allocationdate" value="<?php echo date('Y-m-d'); ?>"/>  
                 
    <td> <input type="submit" name="update" value="Update">   &nbsp;<a href="fleet_module.php"></i>Close </li> 
     </td> 
   </tr>
  <tr>
 </tbody>
 </table>   
  <div id="res">
  
               </form>
  
<script> 
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();
         document.getElementById('Checkout').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script>              
               

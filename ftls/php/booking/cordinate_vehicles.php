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
  $driveraccount='';
	 		  
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
	   $driveraccount = $row['driveraccount']; 
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
          
           
        <form class="form-horizontal" action="booking/update_reseervationjourney.php" method="POST" style="height:auto;">
              
            
           <div class="col-sm-3">
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
   <th style="width:50%;border:0px;">Request date</th>
   <th style="width:50%;border:0px;">Order/No</th> 
   </tr>
   </thead>
   <tbody>
   <tr>  
				<th style="border:0px;"><input type="numeric" value=" <?php  echo $Createddate; ?>"
                 style="width:100%; font-weight:normal; background-color:#ecf0f5;font-size:11px;height:18px; "> </td>
				 
                <td style="border:0px;"><input type="numeric" name="id" id="id" readonly="readonly" value="<?php  echo $id; ?>"  
				style="width:100%; font-weight:normal; background-color:#ecf0f5;font-size:11px;height:18px; "> </td> 
             
              </tr>
			  </table> 
              
              
     
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
   <th style="width:50%; border:0px;">Prefered vehicle</th>
   <th style="width:50%;border:0px;">Passengers</th> 
   </tr>
   </thead>
   <tbody>
   <tr>   
				<th style="border:0px;"> <input type="numeric" value=" <?php  echo $Preferedvehicle; ?> " 
                style="width:100%; font-weight:normal; background-color:#ecf0f5;font-size:11px;height:18px; "> </td>
                
                 <td style="border:0px;"><input type="numeric" name="Passengers" id="Passengers" required="required" value="<?php  echo $Passengers; ?>"  
				style="width:100%; font-weight:normal; background-color:#ecf0f5;font-size:11px;height:18px; "> </td>  
                 
              </tr>
			  </table>  
              
            </div>
              <div class="col-sm-3">   
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
   <th style="width:100%; border:0px;">Purpose</th> 
   </tr>
   </thead>
   <tbody>
   <tr>      <td style="border:0px;"><?php  echo $Activity; ?> </td>  
                 
              </tr>
			  </table>  
             
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
				<th style="width:100%;border:0px;"> <b style="color:#c9302c;">From </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
				<?php  echo $journeypoint_start; ?> </th>  
              </tr>
			  </table>  
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
				<th style="width:100%;border:0px;"> <b style="color:#c9302c;">Destination</b> &nbsp;&nbsp;  <?php  echo $Destination_to; ?> </th>  
              </tr>
			  </table> 
               
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
				<th style="width:100%;border:0px;"> <b style="color:#c9302c;">Travel date</b> &nbsp; &nbsp;   <?php  echo $Reservationdate_from; ?> &nbsp;|
                 <?php  echo $Departuretime; ?> </th>  
              </tr>
			  </table> 
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
				<th style="width:100%;border:0px;"> <b style="color:#c9302c;">Return date</b> &nbsp;  <?php  echo $Reservationdate_to; ?> &nbsp;|
                <?php  echo $Pickuptime_expected; ?> </th>   
              </tr>
			  </table> 
               </div>
               
             <div class="col-sm-3"> 
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
   <th style="width:50%; border:0px;">Vehicle No.</th>
   <th style="width:50%;border:0px;">Vehicle type</th> 
   </tr>
   </thead>
   <tbody> 
   <td style="border:0px;"><input type="numeric" name="Vehicleallocated" onKeyUp="domeexck(this)" id="Vehicleallocated" value="<?php  echo $Vehicleallocated; ?>" 
    autocomplete="off"
   style="width:100%; text-align:left;background-color:#fff; font-size:11px; height:18px;"></td>
   
   <td style="border:0px;"><input type="numeric" name="Vehicletype" id="Vehicletype"  value="<?php  echo $Vehicletype; ?>"   
                style="width:100%; text-align:left;background-color:#ecf0f5; font-size:11px;height:18px;"></td> 
                 
   </tr>
   <tr>
   </tbody>
   </table>    

    <div id="res" style=""></div>             
   
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
   <th style="width:50%;border:0px;">Driver name</th>
   
   </tr>
   </thead>
   <tbody>
   <tr>  
   
   <td style="border:0px;"><input type="numeric" name="Drivername" id="Drivername"  required="" value="<?php  echo $Drivername; ?>"  
   style="width:100%; text-align:left;background-color:#ecf0f5;font-size:11px;height:18px;"></td>
   
   
    <input type="hidden" name="DriverTitle" id="DriverTitle"  value="<?php  echo $DriverTitle; ?>"   
                style="width:100%; text-align:left;background-color:#ecf0f5; font-size:11px;height:18px;">  
   </tr>
  <tr>
 </tbody>
 </table>  
 
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
   <th style="width:50%;border:0px;">Email</th>
   
   </tr>
   </thead>
   <tbody>
   <tr>  
   
   <td style="border:0px;"><input type="numeric" name="Emailaddress" id="Emailaddress"  required="" value="<?php  echo $Emailaddress; ?>"  
   style="width:100%; text-align:left;background-color:#ecf0f5;font-size:11px;height:18px;"></td>
   
   
    <input type="hidden" name="DriverTitle" id="DriverTitle"  value="<?php  echo $driveraccount; ?>"   
                style="width:100%; text-align:left;background-color:#ecf0f5; font-size:11px;height:18px;">  
   </tr>
  <tr>
 </tbody>
 </table>  
  
  
   
              
            </div>
            
       <div class="col-sm-3"> 
	   
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
   <th style="width:50%;border:0px;">Mobile phone no.</th>
   <th style="width:50%;border:0px;">Work phone no.</th>  
   </tr>
   </thead>
   <tbody>
   <tr>  
   <td style="border:0px;"><input type="numeric" name="Mobilecontact" id="Mobilecontact"  value="<?php  echo $Mobilecontact; ?>"  
       style="width:100%; text-align:left;background-color:#ecf0f5; font-size:11px;height:18px;"></td> 
                
  <td style="border:0px;"><input type="numeric" name="Workcontact" id="Workcontact"  value="<?php  echo $Workcontact; ?>"  
       style="width:100%; text-align:left;background-color:#ecf0f5;font-size:11px;height:18px; "></td> 
  </tr>
  <tr>
  </tbody>
  </table>              
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
   <th style="width:100%;border:0px;">Allocated trip type</th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
    <td style="border:0px;"><select name="booktype" id="booktype"  value="<?php  echo $booktype; ?>" required="required"  
                style="width:100%; text-align:left;background-color:#fff;font-size:11px;height:17px;">
                <option value="<?php  echo $booktype; ?>" ><?php  echo $booktype; ?></option>
                <option>ROUND TRIP</option>
                <option>PICK AND DROP</option>
                </select></td> 
                 <tr>
 </tbody>
 </table>  
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
    <th style="width:30%;border:0px;">Action </th>     
    <td style="width:70%;border:0px;"><input type="radio" name="Allocationstatus" id="Allocationstatus"  value="Allocated" checked />
    <label style="font-size:10px;">ACCEPT</label> 
    <input type="radio" name="Allocationstatus" id="Allocationstatus"  value="Rejected"  />
    <label style="font-size:10px;">REJECT</label>              
     </td> 
                <input type="hidden" name="Previousconsumptionrateperliter" id="Previousconsumptionrateperliter" />   
               
                <input type="hidden" name="Costperlitre" id="Costperlitre" /> 
                <input type="hidden" name="Allocationdate" id="Allocationdate" value="<?php echo date('Y-m-d'); ?>"/>  
             
   </tr>
  <tr>
 </tbody>
 </table>  
               
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
   <th style="width:50%;border:0px;">Check out</th> 
   <td  style="width:50%;border:0px;"><input type="text" name="Checkout" id="Checkout" readonly="readonly"   
				style="width:100%; font-weight:normal; background-color:#fff; text-align:left; font-weight:bold; border:0px; "> </td> 
                
                 <input type="hidden" id="ordertype" name="ordertype" value="Reservation">
                <input type="hidden" id="Ratedas" name="Ratedas" value="1"> 
   
  <tr>
  </tbody>
  </table> 
<br />  
        
  <center> <input type="submit" name="update" value="Issue"> </center>
    
        </div> 
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
               
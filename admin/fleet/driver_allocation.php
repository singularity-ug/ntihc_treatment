 <?php
  $id = $_GET['q']; 
  $REGISTRATIONNO = '';
  $MAKE = '';
  $MODEL  = '';
  $TYPE = '';
  $COLOR = ''; 
  $YOM = ''; 
  $POWER='';
  $CATEGORY='';
  $SEATINGCAPACITY=''; 
  $FUNCTIONALSTATUS='';
  $FUELTYPE='';
  $CONSUMPTIONPERKM='';
  $ENGINENO='';
  $CHASSISNO='';
  $ODOMETERSTATUS='';
  $ODOMETERTYPE='';
  $ACQUISITIONDATE='';
  $PURCHASECOST='';
  $SUPPLIEDBY=''; 
  $HOLDSTATUS=''; 
  $ASSETIMAGE='';     
  $VEHICLEALLOCATIONSTATUS='';
  $VEHICLELOCATION='';
  $USERDEPARTMENT='';
  $ALLOCATEDTO='';
  $DRIVERALLOCATED='';
  $DRIVERMOBILENO=''; 
  $DRIVERWORKEXT=''; 
  $DRIVERENTITYEMAIL=''; 
  $DRIVERTITLE='';          	
			  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";
             
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM motorisedequipments  WHERE `REGISTRATIONNO` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $REGISTRATIONNO = $row['REGISTRATIONNO'];
     $MAKE = $row['MAKE'];
     $MODEL  = $row['MODEL'];
     $TYPE = $row['TYPE'];
     $COLOR = $row['COLOR'];
     $YOM = $row['YOM'];
     $POWER = $row['POWER']; 
     $CATEGORY=$row['CATEGORY'];
     $SEATINGCAPACITY=$row['SEATINGCAPACITY'];
     $FUNCTIONALSTATUS=$row['FUNCTIONALSTATUS'];
     $FUELTYPE=$row['FUELTYPE'];
     $CONSUMPTIONPERKM=$row['CONSUMPTIONPERKM'];
     $ENGINENO=$row['ENGINENO'];
     $CHASSISNO=$row['CHASSISNO'];
     $ODOMETERSTATUS=$row['ODOMETERSTATUS'];
	 $ODOMETERTYPE=$row['ODOMETERTYPE'];
     $ACQUISITIONDATE=$row['ACQUISITIONDATE']; 
	     $PURCHASECOST = $row['PURCHASECOST'];
	     $SUPPLIEDBY = $row['SUPPLIEDBY'];
		 $HOLDSTATUS = $row['HOLDSTATUS'];
		 $ASSETIMAGE = $row['ASSETIMAGE'];  
		 $VEHICLEALLOCATIONSTATUS = $row['VEHICLEALLOCATIONSTATUS'];
	     $VEHICLELOCATION = $row['VEHICLELOCATION'];
		 $USERDEPARTMENT = $row['USERDEPARTMENT'];
		 $ALLOCATEDTO = $row['ALLOCATEDTO'];   
		 $DRIVERALLOCATED = $row['DRIVERALLOCATED'];
	     $DRIVERMOBILENO = $row['DRIVERMOBILENO'];
		 $DRIVERWORKEXT = $row['DRIVERWORKEXT'];
		 $DRIVERENTITYEMAIL = $row['DRIVERENTITYEMAIL'];  
		 $DRIVERTITLE = $row['DRIVERTITLE'];    
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

  $("#DRIVERALLOCATED"+num).val(data[2]);
  $("#DRIVERMOBILENO").val(data[2]);
  $("#DRIVERWORKEXT").val(data[3]);
  $("#DRIVERENTITYEMAIL").val(data[4]); 
  $("#DRIVERTITLE").val(data[5]); 

}
     
function domeex(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "serch_vehicledriver.php",
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
                              <div class="col-sm-12">             
            
             
          <form class="form-horizontal" action="update_allocation.php" method="POST" style="height:auto;">
            
               <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:15%;border:0px;">Registration number</th> 
				<th style="width:18.333333%;border:0px;"> <input type="text" id="REGISTRATIONNO" name="REGISTRATIONNO"  value="<?php  echo $REGISTRATIONNO; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;"> </th>   
                 
                 
                 <th style="width:10%;border:0px;">Make</th> 
				<th style="width:23.333333%;border:0px;"> <input type="text" name="MAKE" id="MAKE" value="<?php  echo $MAKE; ?>"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;"> </th>   
                   
                   <th style="width:10%;border:0px;">Type</th> 
				<th style="width:23.333333%;border:0px;"> <input type="text" id="TYPE" name="TYPE" value="<?php  echo $TYPE; ?>"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;"> </th>   
              </tr>
			  </table> 
             
          
                <table class="table" style="border:0px; margin-top:-20px;">
              <tr> 
               
                
                <th style="width:15%;border:0px;">Allocation status</th> 
				<th style="width:18.333333%;border:0px;"> <select id="VEHICLEALLOCATIONSTATUS" name="VEHICLEALLOCATIONSTATUS"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                <option value="ALLOCATED">ALLOCATE </option> 
                </select>
                 </th>   
                 
                 
                 <th style="width:10%;border:0px;">Location</th> 
				<th style="width:23.333333%;border:0px;"> <input type="text" name="VEHICLELOCATION" id="VEHICLELOCATION" 
                value="<?php  echo $VEHICLELOCATION; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   <th style="width:10%;border:0px;">User department</th> 
				<th style="width:23.333333%;border:0px;"> <input type="text" id="USERDEPARTMENT" name="USERDEPARTMENT" value="<?php  echo $USERDEPARTMENT; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
                 
           <table class="table table-striped" style="background-color:#ffffff; margin-top:-13px; ">
   <thead>
   <tr>
   <th style="width:20%;">Allocated to</th>
   <th style="width:24%;">Driver name</th>
   <th style="width:13%;">Mobile phone no.</th>
   <th style="width:13%;">Work contact</th>
   <th style="width:20%;">Email address</th>
   <th style="width:10%;"> action &nbsp; <a href="fleet_module.php"></i>Close</a>  </th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td><input type="text" name="ALLOCATEDTO" id="ALLOCATEDTO"  value="N/A"  
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   
   <td><input type="text" name="DRIVERALLOCATED" onKeyUp="domeex(this)" id="DRIVERALLOCATED" value="<?php  echo $DRIVERALLOCATED; ?>" required="required"  
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td><input type="text" name="DRIVERMOBILENO" id="DRIVERMOBILENO"  value="<?php  echo $DRIVERMOBILENO; ?>" required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
                
   <td><input type="text" name="DRIVERWORKEXT" id="DRIVERWORKEXT"  value="<?php  echo $DRIVERWORKEXT; ?>" required="required"  
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td><input type="text" name="DRIVERENTITYEMAIL" id="DRIVERENTITYEMAIL"  value="<?php  echo $DRIVERENTITYEMAIL; ?>" required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
                 
               <input type="hidden" id="DRIVERTITLE" name="DRIVERTITLE" value="<?php  echo $DRIVERTITLE; ?>" />  
              <input type="hidden" id="id" name="id"  value="<?php  echo $id; ?>"   />
   
     <td> <input type="submit" name="update" value="Update">  </td> 
                               
   </tr>
  <tr>
 </tbody>
 </table>    
        <div id="res">
               </form>
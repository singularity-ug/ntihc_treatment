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

<div class="wrapper" style="background-color:#fff;">
  <!-- Main content --> 
      <!-- title row -->
      <div class="row"> 
                                         <div class="modal-body">   
                              <div class="col-sm-12">             
            
             
          <form class="form-horizontal" action="fleet_module.php" method="POST" style="height:auto;">
             <input type="hidden" id="id" name="id"  value="<?php  echo $id; ?>"   />

               <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Registration number</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="REGISTRATIONNO" name="REGISTRATIONNO"  value="<?php  echo $REGISTRATIONNO; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                 <th style="width:20%;border:0px;">Make</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="MAKE" id="MAKE" value="<?php  echo $MAKE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
             
          
                <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
               
               
                 <th style="width:20%;border:0px;">Type</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="TYPE" name="TYPE" value="<?php  echo $TYPE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                  <th style="width:20%;border:0px;">Model</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="MODEL" id="MODEL" value="<?php  echo $MODEL; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
              
             
             <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
               
               
                 <th style="width:20%;border:0px;">color</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="COLOR" id="COLOR" value="<?php  echo $COLOR; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                  <th style="width:20%;border:0px;">Year of manufacture</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="YOM" id="YOM" value="<?php  echo $YOM; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                   
              </tr>
			  </table> 
              
             
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
               
                 <th style="width:20%;border:0px;">Power</th> 
				<th style="width:30%;border:0px;"> <input type="text"  name="POWER" id="POWER" value="<?php  echo $POWER; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                  <th style="width:20%;border:0px;">Category</th> 
				<th style="width:30%;border:0px;"> <select id="CATEGORY" name="CATEGORY" value="<?php  echo $CATEGORY; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> 
                        <option value="<?php  echo $CATEGORY; ?>"> <?php  echo $CATEGORY; ?> </option>
                        <option> MANAGERIAL</option>
                        <option> SERVICE</option> 
                </select>

                </th>   
                   
                   
              </tr>
			  </table> 
               

               <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                
                 <th style="width:20%;border:0px;">Seating capacity</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="SEATINGCAPACITY" id="SEATINGCAPACITY" value="<?php  echo $SEATINGCAPACITY; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
                  <th style="width:20%;border:0px;">Functional status</th> 
				<th style="width:30%;border:0px;"> <select id="FUNCTIONALSTATUS" name="FUNCTIONALSTATUS" value="<?php  echo $FUNCTIONALSTATUS; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                 <option  value="<?php  echo $FUNCTIONALSTATUS; ?>"> <?php  echo $FUNCTIONALSTATUS; ?></option>
                        <option>DOWN </option>
                        <option>REPAIRABLE </option>
                        </select>
                 </th>   
                    
              </tr>
			  </table> 
             
        
                <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                 
                  <th style="width:20%;border:0px;">Fuel type</th> 
				<th style="width:30%;border:0px;"> <select name="FUELTYPE" id="FUELTYPE" value="<?php  echo $FUELTYPE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                         <option value="<?php  echo $FUELTYPE; ?>"> <?php  echo $FUELTYPE; ?> </option>
                         <option>DIESEL </option>
                         <option>PETROL </option>
                         </select>
                 </th>   
                 
                 <th style="width:20%;border:0px;">Consuption per KM</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="CONSUMPTIONPERKM" id="CONSUMPTIONPERKM" value="<?php  echo $CONSUMPTIONPERKM; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 
                    
              </tr>
			  </table> 
              
 
                 <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                 
                   <th style="width:20%;border:0px;">Engine number</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="ENGINENO" id="ENGINENO" value="<?php  echo $ENGINENO; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
             
                 <th style="width:20%;border:0px;">Chasis number</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="CHASSISNO" id="CHASSISNO" value="<?php  echo $CHASSISNO; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 
                    
              </tr>
			  </table>  


                <table class="table" style="border:0px; margin-top:-23px;">
              <tr> 
                 
                  <th style="width:20%;border:0px;">Odometer status</th> 
				<th style="width:30%;border:0px;"> <select name="ODOMETERSTATUS" id="ODOMETERSTATUS" value="<?php  echo $ODOMETERSTATUS; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">
                         <option  value="<?php  echo $ODOMETERSTATUS; ?>"> <?php  echo $ODOMETERSTATUS; ?> </option>
                         <option>OPERATIONAL</option>
                         <option>NOT OPERATIONAL</option>
                         </select>
                 </th>   
                 
                  <th style="width:20%;border:0px;">Odometer type</th> 
				 <th style="width:30%;border:0px;"> 
                  <select class="switch-input" name="ODOMETERTYPE" value="<?php  echo $ODOMETERTYPE; ?>" 
                  required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px;">  
                  <option value="<?php  echo $ODOMETERTYPE; ?>" > <?php  echo $ODOMETERTYPE; ?> </option> 
                  <option>HRS</option> 
                  <option>KM</option> 
					</select>
                  </th> 
                 
                    
              </tr>
			  </table> 
              
                
                 <table class="table" style="border:0px; margin-top:-23px;">
                 <tr>  
                 
                 <th style="width:20%;border:0px;">Acquisition date</th> 
				<th style="width:30%;border:0px;"> <input type="date" name="ACQUISITIONDATE" id="ACQUISITIONDATE" value="<?php  echo $ACQUISITIONDATE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px;"> </th> 
                 
                   <th style="width:20%;border:0px;">Purchase cost</th> 
				<th style="width:30%;border:0px;"> <input type="text" name="PURCHASECOST" id="PURCHASECOST" value="<?php  echo $PURCHASECOST; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                   
              </tr>
			  </table> 
            
               
  <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                 
                 <th style="width:20%;border:0px;">Purchased / Leased from</th> 
				<th style="width:30%;border:0px;"> <input type="text"  name="SUPPLIEDBY" id="SUPPLIEDBY" value="<?php  echo $SUPPLIEDBY; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 
                 <th style="width:20%;border:0px;">Holding type</th> 
				 <th style="width:30%;border:0px;"> 
                   <select class="switch-input" name="HOLDSTATUS"   id="HOLDSTATUS" value="<?php  echo $HOLDSTATUS; ?>"
                    style="width:100%; font-weight:normal; background-color:#fff;"> 
                   <option value="<?php  echo $HOLDSTATUS; ?>"><?php  echo $HOLDSTATUS; ?></option>
                   <option>PURCHASED</option>
                   <option>LEASED</option>
                   <option>PROJECT SUPPORT</option> 
					</select>
                  </th> 
              
              </tr>
			  </table> 
               
                <table class="table" style="border:0px; margin-top:-22px;">
              <tr>  
                 
                <th style="width:80%;border:0px;"></th> 
				<th style="width:20%;border:0px;">  <input type="submit" name="button" id="button" value="Update" /> 
                <span><a href="fleet_module.php" style="border:2px solid #ecf0f5; border-radius:6px;"></i>Close</a></span>   </th>  
              </tr>
			  </table> 
         
          
              
               </form>
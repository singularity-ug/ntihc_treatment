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
  header('location:index.php');
}
 ?>
  
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../css/matrix-style.css" />
<link rel="stylesheet" href="../../css/matrix-media.css" />
<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../../css/uniform.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 
<link rel="stylesheet" href="../js/googleapis.js" type='text/css'>

<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 

<link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">
 
 
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
  
  $USERDEPT='';  $EQUIPMENTCATEGORY='';  
  $LOCATION=''; 
  $DIVISION=''; 
                         
			  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ftl";
             
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
	     
			   
	 $LOCATION = $row['LOCATION']; $EQUIPMENTCATEGORY = $row['EQUIPMENTCATEGORY'];
	 $USERDEPT = $row['USERDEPT'];
	 $DIVISION = $row['DIVISION']; 		   
	 $id = $row['id']; 
	 
      }

  ?> 
 
     <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Details</a></li>
              <li><a data-toggle="tab" href="#tab2">Driver info</a></li>
              <li><a data-toggle="tab" href="#tab3">Fuel logs</a></li>
              <li><a data-toggle="tab" href="#tab4">Insurance</a></li>
              <li><a data-toggle="tab" href="#tab5">Routine service</a></li>
              <li><a data-toggle="tab" href="#tab6">Work orders / Repairs</a></li>
              <li><a data-toggle="tab" href="#tab7">Accidents</a></li>
              <li><a data-toggle="tab" href="#tab8">Breakdown</a></li>
              <li><a data-toggle="tab" href="#tab9">Other costs</a></li>
              <li><a data-toggle="tab" href="#tab10">Valuation</a></li>
              <li><a data-toggle="tab" href="#tab11">Action center</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content"  style="background-color:#fff;">
            <div id="tab1" class="tab-pane active">
             <p> General motorised equipment details </p>
             <form class="form-horizontal" action="" method="POST" style="height:auto;">
             
              <input type="hidden" id="id" name="id"  value="<?php  echo $id; ?>"   />
              <div class="col-sm-4">
              
              <table class="table" style="border:0px;">
              <tr>  
                <th style="width:35%;border:0px; background-color:#fff; color:#000;">Registration number</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" id="REGISTRATIONNO" name="REGISTRATIONNO" value="<?php  echo $REGISTRATIONNO; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;"> </th>   
               </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
              <tr>   
                <th style="width:35%;border:0px;background-color:#fff; color:#000;">Make</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="MAKE" id="MAKE" value="<?php  echo $MAKE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> </th>   
              </tr>
			  </table> 
             
               <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">Type</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" id="TYPE" name="TYPE" value="<?php  echo $TYPE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> </th> 
                </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                  <th style="width:35%;border:0px;background-color:#fff; color:#000;">Model</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="MODEL" id="MODEL" value="<?php  echo $MODEL; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> </th>    
              </tr>
			  </table> 
               
                
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">color</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="COLOR" id="COLOR" value="<?php  echo $COLOR; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> </th> 
                </tr>
			  </table> 
              
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">Year of manufacture</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="YOM" id="YOM"  value="<?php  echo $YOM; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> </th>   
                   </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                <th style="width:35%;border:0px;background-color:#fff; color:#000;">Power</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text"  name="POWER" id="POWER"  value="<?php  echo $POWER; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> </th> 
                </tr>
			  </table> 
            
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">Category</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <select id="CATEGORY" name="CATEGORY" value="<?php  echo $CATEGORY; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> 
                        <option value="<?php  echo $CATEGORY; ?>"><?php  echo $CATEGORY; ?> </option>
                        <option> MANAGERIAL</option>
                        <option> SERVICE</option> 
                </select>
               </tr>
			  </table> 
              
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">Equipment type</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <select id="EQUIPMENTCATEGORY" name="EQUIPMENTCATEGORY" value="<?php  echo $EQUIPMENTCATEGORY; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> 
                        <option value="<?php  echo $EQUIPMENTCATEGORY; ?>"><?php  echo $EQUIPMENTCATEGORY; ?> </option>
                        <option>MOTOR VEHICLE</option>
                        <option> MOTOR CYCLE</option>
                        <option> HEAVY MOTOR EQUIPMENT</option>
                        <option> GENERATOR</option> 
                        <option> LAWN MOVER</option> 
                        <option> OTHERS</option>
                </select>
               </tr>
			  </table> 
              
              
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                <th style="width:35%;border:0px;background-color:#fff; color:#000;">Seating capacity</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="SEATINGCAPACITY" id="SEATINGCAPACITY"  value="<?php  echo $SEATINGCAPACITY; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> </th> 
                </tr>
			  </table> 
              
                
                
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#fff; color:#000;">Functional status</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <select id="FUNCTIONALSTATUS" name="FUNCTIONALSTATUS"   value="<?php  echo $FUNCTIONALSTATUS; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;">
                <option value="<?php  echo $FUNCTIONALSTATUS; ?>"> <?php  echo $FUNCTIONALSTATUS; ?> </option>
                        <option>RUNNING</option>
                        <option>DOWN </option>
                        <option>REPAIRABLE </option>
                        </select>
                  </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#fff; color:#000;">Fuel type</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <select name="FUELTYPE" id="FUELTYPE"  value="<?php  echo $FUELTYPE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;">
                         <option value="<?php  echo $FUELTYPE; ?>"> <?php  echo $FUELTYPE; ?> </option>
                         <option>DIESEL </option>
                         <option>PETROL </option>
                         </select>
                 </th>   
                   </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                <th style="width:35%;border:0px;background-color:#fff; color:#000;">Consuption per KM</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="CONSUMPTIONPERKM" id="CONSUMPTIONPERKM"  value="<?php  echo $CONSUMPTIONPERKM; ?>"
				required="required" style="width:100%; font-weight:normal; font-size:11px;background-color:#fff;"> </th> 
                   </tr>
			  </table> 
               
              <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                   <th style="width:35%;border:0px;background-color:#fff; color:#000;">Engine number</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="ENGINENO" id="ENGINENO"  value="<?php  echo $ENGINENO; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> </th> 
                  </tr>
			  </table> 
              
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">Chasis number</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="CHASSISNO" id="CHASSISNO"  value="<?php  echo $CHASSISNO; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;"> </th> 
                  </tr>
			  </table> 
               
              <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                  <th style="width:35%;border:0px;background-color:#fff; color:#000;">Odometer status</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <select name="ODOMETERSTATUS" id="ODOMETERSTATUS"  value="<?php  echo $ODOMETERSTATUS; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;">
                         <option value="<?php  echo $ODOMETERSTATUS; ?>"> <?php  echo $ODOMETERSTATUS; ?> </option>
                         <option>OPERATIONAL</option>
                         <option>NOT OPERATIONAL</option>
                         </select>
                 </th>   
                  </tr>
			  </table> 
               
              <table class="table" style="border:0px; margin-top:-25px;">
              <tr>  
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">Odometer type</th> 
                 <th style="width:65%;border:0px;background-color:#fff;"> <select name="ODOMETERTYPE" id="ODOMETERTYPE"  value="<?php  echo $ODOMETERTYPE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;font-size:11px;">
                         <option value="<?php  echo $ODOMETERTYPE; ?>"> <?php  echo $ODOMETERTYPE; ?> </option>
                         <option>KM</option>
                         <option>HRS</option>   <option>MILES</option>
                         </select>
                </th>    
              </tr>
			  </table> 
              
  
               </div>
               <div class="col-sm-4">
                <table class="table" style="border:0px; margin-top:0px;">
                 <tr>   
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">Acquisition date</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="ACQUISITIONDATE" id="ACQUISITIONDATE"  value="<?php  echo $ACQUISITIONDATE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;"> </th> 
                 </tr>
			  </table> 
              
                
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#fff; color:#000;">Purchase cost</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="PURCHASECOST" id="PURCHASECOST"  value="<?php  echo $PURCHASECOST; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;  font-size:11px; "> </th>  
              </tr>
			  </table> 
            
 
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr>   
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">Purchased / Leased from</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text"  name="SUPPLIEDBY" id="SUPPLIEDBY"  value="<?php  echo $SUPPLIEDBY; ?>" 
				  style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;   "> </th>  
              </tr>
			  </table>  
                    
               
                <table class="table" style="border:0px; margin-top:-25px;">
               <tr>  
                 <th style="width:35%;border:0px;background-color:#fff; color:#000;">Holding type</th>
                 <th style="width:65%;border:0px;background-color:#fff;"> <select name="HOLDSTATUS" id="HOLDSTATUS"  value="<?php  echo $HOLDSTATUS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;   ">
                         <option value="<?php  echo $HOLDSTATUS; ?>"> <?php  echo $HOLDSTATUS; ?> </option>
                         <option>PURCHASED</option>
                         <option>PROJECT SUPPORT</option>   
                         </select>  
                  </th>  
              </tr>
			  </table> 
              
                 
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#fff; color:#000;">User department</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="USERDEPT" id="USERDEPT"  value="<?php  echo $USERDEPT; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;   "> </th>  
              </tr>
			  </table> 
            
               
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#fff; color:#000;">Location</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <input type="text" name="LOCATION" id="LOCATION" value="<?php  echo $LOCATION; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;   "> </th>  
              </tr>
			  </table> 
            
               
               <table class="table" style="border:0px; margin-top:-25px;">
               <tr> 
                  <th style="width:35%;border:0px;background-color:#fff; color:#000;">Division</th> 
				<th style="width:65%;border:0px;background-color:#fff;"> <select name="DIVISION" id="DIVISION" value="<?php  echo $DIVISION; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff; font-size:11px;   "> 
                  <option value="<?php  echo $DIVISION; ?>"><?php  echo $DIVISION; ?> </option>
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
                <?php
$connect = new mysqli("localhost", "root", "", "ftl");
$stss ="";
if( $result = $connect->query("SELECT REGISTRATIONNO,YOM,   
			 CURDATE(), TIMESTAMPDIFF(YEAR,YOM,CURDATE()) AS age 
			 FROM motorisedequipments WHERE `id` = '$id'"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "  " . $row['age'] ." ";   }
  }
$connect->close();
?>   



               <center>Asset age</center> 
              <center><p style="font-size:34px; font-family:lcd;"><?php echo $stss; ?> years</p></center>
               </form> 
              
 
         
               </div>
               <div class="col-sm-4">
              
              </div>
              
            
            </div>
            <div id="tab2" class="tab-pane">
            <p> Driver information </p>
            
            </div>
            <div id="tab3" class="tab-pane">
            
              <p> Monthly fuel consumption </p>
              
            </div> 
             <div id="tab4" class="tab-pane">
            
              <p> Insurance info </p>
              
            </div>
             <div id="tab5" class="tab-pane">
            
              <p> Routine service </p>
              
            </div>
            <div id="tab6" class="tab-pane">
            
              <p> Work orders / Repairs </p>
              
            </div>
            <div id="tab7" class="tab-pane">
            
              <p> Accident info </p>
              
            </div>
            <div id="tab8" class="tab-pane">
            
              <p> Breakdown </p>
              
            </div>
            <div id="tab9" class="tab-pane">
            
              <p> Other costs </p>
              
            </div>
            <div id="tab10" class="tab-pane">
            
              <p> Current valuation info </p>
              
            </div>
            <div id="tab11" class="tab-pane">
            
              <p> Decision center </p>
              
            </div>
          </div>
        </div>
          
 
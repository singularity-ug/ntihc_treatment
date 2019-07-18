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
 
  <style media="screen">
  .btn {padding : 0px 3px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #ddd;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid #ddd;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 11px;
             	 color:#000000;
				 font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
 <form class="form-horizontal" method="post" action="fuel_updateapproval.php" style="height:auto;">   
    <table class="table table-striped" style="background-color:#ffffff; margin-top:0px;">
   <thead>
   <tr> 
     <th style="width:20%;border:0px;">Employee name </th>
	 <th style="width:27%;border:0px;"> <input type="text"  id="myEMPLOYEENAME" name="EMPLOYEENAME"  
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
				 <th style="width:6%;border:0px;"></th>
	 <th style="width:20%;border:0px;">Supervisor name</th>
	 <th style="width:27%;border:0px;"> <input type="text" id="mySUPERVISORNAME" name="SUPERVISORNAME"  
		readonly="readonly"		required="required"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   			
			   
   </tr>
   </thead> 
 </tbody>
 </table>
 
   <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr> 
     <th style="width:20%;border:0px;">PF Number </th>
	 <th style="width:27%;border:0px;"> <input type="text"  id="myIDNUMBER" name="IDNUMBER"  
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			    <th style="width:6%;border:0px;"></th>
	 <th style="width:20%;border:0px;">Position </th>
	 <th style="width:27%;border:0px;"> <input type="text"  name="SUPERVISORPOSITION" id="mySUPERVISORPOSITION"  
			readonly="readonly"		required="required"   style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   		   
   </tr>
   </thead> 
   </tbody>
   </table>
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   
     <th style="width:20%;border:0px;">Designation </th>
	 <th style="width:27%;border:0px;"> <input type="text"  id="myEMPLOYEEPOSITION" name="EMPLOYEEPOSITION"  
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
		 <th style="width:6%;border:0px;"></th>	   
		<th style="width:20%;border:0px;"></th>
		<th style="width:27%;border:0px;"></th>	   
   </tr>
   </thead> 
 </tbody>
 </table>
 
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
    
     <th style="width:20%;border:0px;">Department </th>
	 <th style="width:27%;border:0px;"> <input type="text" name="DEPARTMENT"id="myDEPARTMENT"  
				required="required"  style="width:100%; font-weight:normal; background-color:#FFF;">  </td>
				</th> 
				 <th style="width:6%;border:0px;"></th>
				 
		<th style="width:8.5%;border:0px;">Month</th>
	 <th style="width:15%;border:0px;"> <input type="text"  name="FISCALMONTH" id="myFISCALMONTH"   
	 required="required" style="width:100%; font-weight:normal; background-color:#FFF;border:0px;">  </th> 
	 
	  <th style="width:8.5%;border:0px;">Year</th>
   <td style="width:15%;border:0px;"><input type="text" name="FISCALYEAR" id="myFISCALYEAR"  
   required="required" 
   style="width:100%; text-align:left;background-color:#FFF;border:0px;"></td>  
   </tr>
   </thead> 
 </tbody>
 </table> 
   
    
    <div class="col-sm-6" style="border: 2px solid #ecf0f5;">
	 <p style="font-weight:bold; text-align:left;"> Summary of hours attended</p>
  
	<table class="table table-bordered" style="background-color:#ffffff; margin-top:0px; ">
    <thead>
    <tr>				 
         <th style="text-align:center;">16 </th>
         <th style="text-align:center;">17</th>
         <th style="text-align:center;">18</th>
         <th style="text-align:center;">19 </th>
         <th style="text-align:center;">20</th>
         <th style="text-align:center;">21</th>
         <th style="text-align:center;">22 </th>
      </tr>
   
      <tr>
       <td><input type="text" class="form-control" name="D16" id="myD16"  onchange="calcdays()"
	   value=" " style="width:100%; text-align:center; color:blue; font-weight:bold; "> 
            </td>

        <td><input type="text" class="form-control" name="D17" id="myD17"  onchange="calcdays()" 
		value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
                                
       <td><input type="text" class="form-control"  onchange="calcdays()" name="D18" id="myD18" 
	  value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
                                
         <td><input type="text" class="form-control" onChange="calcdays()" name="D19" id="myD19"  
		value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

       <td><input type="text" class="form-control" onChange="calcdays()" name="D20" id="myD20"  
	  value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

       <td><input type="text" class="form-control" onChange="calcdays()" name="D21" id="myD21"  
	   value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D22" id="myD22"  
		 value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
          </td>
      </tr>
      <tr style="border:0px;">
         <th style="text-align:center;">23</th>
         <th style="text-align:center;">24</th>
         <th style="text-align:center;">25 </th>
         <th style="text-align:center;">26</th>
         <th style="text-align:center;">27</th>
         <th style="text-align:center;">28 </th>
         <th style="text-align:center;">29</th>
      </tr>
      <tr>
          <td><input type="text" class="form-control" onChange="calcdays()" name="D23" id="myD23"  
		  value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D24" id="myD24"  
		  value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D25" id="myD25" 
		 value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D26" id="myD26" 
		 value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D27" id=",myD27"  
		 value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

            <td><input type="text" class="form-control" onChange="calcdays()" name="D28" id="myD28"  
			value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D29" id="myD29"  
		 value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

      </tr>
      <tr>
         <th style="text-align:center;">30</th>
         <th style="text-align:center;">31 </th> 
         <th style="text-align:center;">1</th>
         <th style="text-align:center;">2</th>
         <th style="text-align:center;">3</th>
         <th style="text-align:center;">4 </th>
         <th style="text-align:center;">5</th>
      </tr>
       <tr>
         <td><input type="text" class="form-control" onChange="calcdays()" name="D30" id="myD30"  
		 value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

        <td><input type="text" class="form-control" onChange="calcdays()" name="D31" id="myD31"  
		value=" " style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
        <td><input type="text" class="form-control" onChange="calcdays()" name="D1" id="myD1"  
		value="  " style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

        <td><input type="text" class="form-control" onChange="calcdays()" name="D2" id="myD2" 
		value=" " style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D3" id="myD3" 
		 value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D4" id="myD4"  
		  value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D5" id="myD5"  
		  value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
        </tr>
      <tr>
         <th style="text-align:center;">6</th>
         <th style="text-align:center;">7 </th>
         <th style="text-align:center;">8</th>
         <th style="text-align:center;">9</th>
         <th style="text-align:center;">10 </th>
         <th style="text-align:center;">11</th>
         <th style="text-align:center;">12</th>
      </tr>
       <tr>
         <td><input type="text" class="form-control" onChange="calcdays()" name="D6" id="myD6" 
		 value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
           <td><input type="text" class="form-control" onChange="calcdays()" name="D7" id="myD7"  
		   value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
         <td><input type="text" class="form-control" onChange="calcdays()" name="D8" id="myD8"  
		 value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D9" id="myD9"  
		 value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D10" id="myD10"  
		 value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D11" id="myD11"  
		 value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D12" id="myD12"  
		 value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
        
        </tr>
      <tr>
         <th style="text-align:center;">13 </th>
         <th style="text-align:center;">14</th>
         <th style="text-align:center;">15</th>
         <th style="text-align:center;"> Total</th> 
         <th style="text-align:center;"> %</th>
         <th style="text-align:center;"> </th>
         <th style="text-align:center;"> </th>
      </tr>
       <tr style="border:0px;">
        <td><input type="text" class="form-control" onChange="calcdays()" name="D13" id="myD13" 
		value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

     <td><input type="text" class="form-control" onChange="calcdays()" name="D14" id="myD14"  
	 value=" "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

     <td><input type="text" class="form-control" onChange="calcdays()" name="D15" id="myD15"  
	 value="  "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
 
     <td><input type="text" class="form-control"   name="TOTALHOURS" id="myTOTALHOURS"  
	 value=" "style="width:100%; text-align:center; color:green; font-weight:bold;"> 
                                </td>
								
		<td><input type="text" class="form-control"   name="PERCENTAGE" id="myPERCENTAGE"  
	 value=" "style="width:100%; text-align:center; color:green; font-weight:bold;"> 
                                </td>						
								
      </tr>
    </tbody>
  </table> 
  
  <table class=" table table-bordered" style="background-color:#ffffff; margin-top:-10px; border:0px;"> 
   <thead>
   <tr> 

   <th style="width:30%;border:0px;">Confirmation date</th>
   <td style="width:70%;"><input type="text" id="myADMINDATE" name="ADMINDATE"  value="  "
   required="required" 
   style="width:100%; text-align:left;background-color:#FFF;"></td> 
   </tr>
   </thead> 
   </tbody>
   </table>     
  
  
    <table class="table table-bordered" style="background-color:#ffffff; margin-top:0px; border:0px; ">
   <thead>
   <tr>
   <th>Supervisor's comment</th> 
   </tr>
   </thead style="border:0px;">
   <tbody style="border:0px;">
   <tr>
   <td style="width:30%;"> <textarea name="SUP_COMMENT" id="mySUP_COMMENT" value=" "readonly="readonly"  
   style="width:100%; text-align:left;background-color:#fff;">   
				</textarea> </th>    			
   </tr>
  <tr>
 </tbody>
 </table>
  
 
	</div>
	<div class="col-sm-6">
	 
  <p style="font-weight:bold; text-align:left;"> Summary of days not worked</p>
  
   
  <table class="table table-striped" style="margin-left: 0px; background-color: #fff; font-weight:normal;">
         <thead>
         <th style="width:50%;">DESCRIPTION </th>
         <th style="width:17%;">SYMBOL</th>
         <th style="width:16%;">TOTAL</th>
		 <th style="width:17%; text-align:center;">%</th>
         </thead>
      <tbody>
      <tr>
        <th>Public holiday</th>
        <td style="text-align:center;"><input type="text" value="PH" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
        <td style="text-align:center;"> <input type="text" id="myPH"  name="PH" value=" "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		
		<td style="text-align:center;"> <input type="text" id="PHp"  name="PHp" readonly="readonly" 
		style="text-align:center; width:100%; background-color:white;"> </td>
    </tr>
    <tr>
    <tr>

        <th>Saturday and Sunday</th>
        <td style="text-align:center;"> <input type="text" value="W" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="myW" name="W" value="  "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 
		 <td style="text-align:center;"> <input type="text" id="myWp" name="Wp" value="  "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        </tr>
    <tr>
    <tr>

        <th>Not worked</th>
        <td style="text-align:center;"> <input type="text" value="0" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="myNW" name="NW" value=" "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 
		 <td style="text-align:center;"> <input type="text" id="myNWp" name="NWp" value=" "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
 </tr>
    <tr>
    <tr>
    
 <th>General Administration</th>
        <td style="text-align:center;"><input type="text" value="GA" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="myGA" name="GA" value=" "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="myGAp" name="GAp" value=" "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 
    </tr>
    <tr>
    <tr>

        <th>Staff Development</th>
        <td style="text-align:center;"> <input type="text" value="SD" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
        <td style="text-align:center;"> <input type="text" id="mySD" name="SD" value=" "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		<td style="text-align:center;"> <input type="text" id="mySDp" name="SDp" value=" "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        </tr>
    <tr>
    <tr>

        <th>Sick Leave</th>
        <td style="text-align:center;"> <input type="text" value="SL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="mySL" name="SL" value=" "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		  <td style="text-align:center;"> <input type="text" id="mySLp" name="SLp" value=" "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 
</tr>
    <tr>
    <tr>  
        <th>Annual Leave</th>
        <td style="text-align:center;"><input type="text" value="AL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="myAL" name="AL" value="  "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="myALp" name="ALp" value="  "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
    </tr>
    <tr>
    <tr>

        <th>Maternity leave</th>
        <td style="text-align:center;"><input type="text" value="ML" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        <td style="text-align:center;"> <input type="text" id="myML" name="ML" value=" "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		<td style="text-align:center;"> <input type="text" id="myMLp" name="MLp" value=" "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		
        </tr>
     </tbody>
  </table>
    </div>
     
	
	<div class="col-sm-6">
	    
  <table class=" table table-bordered" style="background-color:#ffffff; margin-top:-10px; border:0px;"> 
   <thead>
   <tr>
   
    <th style="width:30%;border:0px;">Admin name</th>
	<th style="width:70%;border:0px;"> <input type="text" id="myADMINNAME" name="ADMINNAME"    
	required="required" style="width:100%; font-weight:normal; background-color:#FFF;">  </th>  
   </tr>
   </thead> 
   </tbody>
   </table>    
	  
   <table class=" table table-bordered" style="background-color:#ffffff; margin-top:-10px; border:0px;"> 
   <thead>
   <tr> 

   <th style="width:30%;border:0px;">Approved Date</th>
   <td style="width:70%;"><input type="text" id="myADMINDATE" name="ADMINDATE"  
   required="required" 
   style="width:100%; text-align:left;background-color:#FFF;"></td> 
   </tr>
   </thead> 
   </tbody>
   </table>     
	 
	<table class="table table-bordered" style="background-color:#ffffff; margin-top:-10px; ">
   <thead>
   <tr>
   <th>Admin comment</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;"> <textarea name="ADMIN_COMMENT" name="myADMIN_COMMENT"  value=""
   readonly="readonly"  
   style="width:100%; text-align:left;background-color:#fff;">   
				</textarea> </th>    			
 </tr>
 <tr>
 </tbody>
 </table>
  
            
<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
 
$id   = trim($_POST['id']);
$sql="SELECT * FROM timesheet WHERE IDNUMBER='$id'";

$result = $conn->query($sql);
$st ='<table id="dataTable1" class="table table-bordered" style="margin-top:-21px;">
      <thead>
      <tr>
      <th style="width:1%;">  *  </th>
                     <th style="background-color:#f0f0f0;; color:BLACK;">No.</th>
                     <th style="background-color:#f0f0f0;; color:BLACK;">Period</th>
                     <th style="background-color:#f0f0f0;; color:BLACK;">Staff name</th>
					 <th style="background-color:#f0f0f0;; color:BLACK;">Worked</th> 
					 <th style="background-color:#f0f0f0;; color:BLACK;">%</th>  
           
     </tr>
     </thead>
    <tbody id="tablebody">';


$sum=0;
while($row = $result->fetch_assoc())
{
  $sql1="SELECT CONFIRMATIONSTATUS FROM timesheet WHERE  IDNUMBER='".$row['IDNUMBER']."'";
  $result1 = $conn->query($sql1);
  $unit  =0;
while( $row1    = $result1->fetch_assoc()){
       $unit    = intval($row1['CONFIRMATIONSTATUS']);}

  $st=$st.'<tr >
  <td><input type="checkbox" required="required" checked="checked" /></td>
  <td>
   <input type="text" name="SUPERVISORNAME"  value="'.$row['SUPERVISORNAME'].'"  id="" required="required" 
    style= " width:100%; background-color:#fff; text-align:center;"/>
  </td>
  
  <td><input type="text"  name="SUPERVISORNAME" value="'.$row['SUPERVISORNAME'].'" id="" required="required"
 style= "width:100%; background-color:#fff;"/>
</td>
  
 <td>
 <input type="text" name="SUPERVISORNAME" value="'.$row['SUPERVISORNAME'].'"  required="required" 
  style= "width:100%; background-color:#fff; "/> 
  </td>
  
   <td><input type="text" value="'.$row['SUPERVISORNAME'].'" name="SUPERVISORNAME" id=""  required="required" 
  style= "width:100%; background-color:#fff; "/> 
  </td>
   
  
  <td><input type="numeric"  value="'.$row['SUPERVISORNAME'].'" name="SUPERVISORNAME" required="required"
  style= "width:100%; background-color:#fff; text-align:center;"/> 
  </td>
   
    
    <td><input type="text"  value="'.$row['SUPERVISORNAME'].'" name="SUPERVISORNAME"  
  style= "width:100%; background-color:#fff; "/> 
  </td>
   
  </td>
</tr>';
$sum= $sum+(intval($row[''])*$unit);
}

$st = $st.' </tbody>
</table> ';
$conn->close();
echo $sum."______".$st;
?>
 
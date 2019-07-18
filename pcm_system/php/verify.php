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

<?php 
  $id =  $_GET['q'];  
  $MAKE = '';  
  $PROPERTYDESCRIPTION = ''; 
  $QTYVERIFIED = '';   
  $ENGRAVEDNUMBER = ''; 
  $VERIFICATIONSTATUS = '';   
  $PHYSICALSTATUS = '';     
	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "contemporary";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM properties  WHERE `id` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $MAKE  = $row['MAKE'];
     $PROPERTYDESCRIPTION  = $row['PROPERTYDESCRIPTION'];
     $QTYVERIFIED = $row['QTYVERIFIED'];   
	 $ENGRAVEDNUMBER = $row['ENGRAVEDNUMBER']; 
	 $VERIFICATIONSTATUS = $row['VERIFICATIONSTATUS'];  
	  $VERIFICATIONSTATUS = $row['VERIFICATIONSTATUS'];  
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

    <?php
$connect = new mysqli("localhost", "root", "toor2", "pcms");
$stss ="";
if( $result = $connect->query("SELECT PROPERTYDESCRIPTION,CATEGORY, CODIFICATIONSTATUS,ENGRAVEDNUMBER,
			                                         HOLDTYPE,  DATEOFPURCHASE, MAKE,PROPERTYCOST,SUPPLIEDBY,
													 LOCATION,RESPONSIBLEOFFICER,OFFICERCONTACT,FUNCTIONALSTATUS,
													 SERVICEREQUIREMENT,NEXTDUESERVICE,REMINDDATE, 
			 CURDATE(), TIMESTAMPDIFF(YEAR,DATEOFPURCHASE,CURDATE()) AS age 
			 FROM properties WHERE `id` = '$id'"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "  " . $row['age'] ." ";   }
  }
$connect->close();
?>   
   <div class="table-responsive mailbox-messages"> 
 
   <form class="form-horizontal" action="run_disposal.php" method="POST" style="height:auto; font-weight:normal;"> 
    
       <input type="hidden" name=" VERIFICATIONSTATUS" id=" VERIFICATIONSTATUS" value="YES" /> 
       
    <table class="table table-tabled" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
                <th style="text-align:center; background-color:#000; color:#fff;"> ID </th> 
                <th style="text-align:center; background-color:#000; color:#fff; text-transform:uppercase;"> Property No. </th>
                <th style="text-align:center; background-color:#000; color:#fff;text-transform:uppercase;"> Description </th>
                <th style="text-align:center; background-color:#000; color:#fff;text-transform:uppercase;"> Current age </th>
                <th style="text-align:center; background-color:#000; color:#fff;text-transform:uppercase;"> Confirm verification </th>
                <th style="text-align:center; background-color:#000; color:#fff;text-transform:uppercase;"> Confirm disposal </th>
                <th style="text-align:center; background-color:#000; color:#fff;text-transform:uppercase;"> Action </th>
   </tr>
   </thead>
   <tbody>
   <tr>  
              <td  style="text-align:center;">  <input type="text" name="id" value=" <?php  echo $id; ?>" style="width:100%; border:0px;text-align:center;"/>  </td> 
              
              <td>  <input type="text" name="ENGRAVEDNUMBER" id="ENGRAVEDNUMBER"
                value="<?php echo $ENGRAVEDNUMBER; ?> "  style="width:100%; border:0px;" /></td> 
                
              <td> <input type="text" name="PROPERTYDESCRIPTION" id="PROPERTYDESCRIPTION"
                value=" <?php echo $PROPERTYDESCRIPTION; ?>"  style="width:100%; border:0px; background-color:#fff;" /></th>  
                 
              <td>  <input type="text" value="<?php echo $stss; ?>" style="width:100%; border:0px; text-align:center;"> </td> 
              
              <td class="button 5" style="width:100%;border-radius: 2px;"> 
                <input type="radio" name="QTYVERIFIED" id="QTYVERIFIED" value="0" checked>
        <label for="QTYVERIFIED">NOT YET SEEN</label> 
		<input name="QTYVERIFIED" type="radio" id="QTYVERIFIED" value="1">
		<label for="QTYVERIFIED">VERIFY</label> 
              </td> 
              
              <td> 
               <input type="radio" name="PHYSICALSTATUS" id="PHYSICALSTATUS" value="AVAILABLE" checked>
        <label for="PHYSICALSTATUS">AVAILABLE</label> 
		<input name="PHYSICALSTATUS" type="radio" id="PHYSICALSTATUS" value="DISPOSED">
		<label for="PHYSICALSTATUS">DISPOSE</label> 
              </td>
              
              
              
              <td><input type="submit" name="update" value="Update"> &nbsp; <a href="property_mgt.php"> Close <span class="sr-only">(current)</span></a> </td>
              </tr> 
            </table>
             
                    
   </form>
   </div>
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
  $DESCRIPTION = '';
  $ORDERSERIALID='';
  $COLLECTEDBY='';
  $PURPOSE='';
  $STOCKBAL='';
  $SRFNO='';
  $DATECREATED=''; $QTYINSTOCK='';  $FACILITYNANE='';  $QTYISSUED='';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM outgoingorders  WHERE `id` = '$id' AND REQUISTIONTYPE='GENERAL'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
      
     $DESCRIPTION  = $row['DESCRIPTION']; 
     $ORDERSERIALID=$row['ORDERSERIALID']; 
	 $COLLECTEDBY=$row['COLLECTEDBY'];
     $PURPOSE=$row['PURPOSE']; 
	 $STOCKBAL=$row['STOCKBAL']; 
	 $SRFNO=$row['SRFNO'];  $QTYINSTOCK=$row['QTYINSTOCK'];
	 $DATECREATED=$row['DATECREATED']; 
	 $FACILITYNANE  = $row['FACILITYNANE'];   
	 $QTYISSUED  = $row['QTYISSUED']; 
	   $FUCKERCOUNTER= $row['FUCKERCOUNTER'];
	  $id  = $row['id']; 
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

   <form class="form-horizontal" action="str_generalreqn_update.php" method="POST" style="height:auto; font-weight:normal;">
     
  
  <table class="table table-striped" style="background-color:#ffffff; margin-top:3px; ">
   <thead>
   <tr>
   <th>S/no.</th>
   <th>Date</th>
   <th>SRF number</th>
   <th>S/n number</th>
   <th>Facility name</th> 
   
   <th>Description</th>
   <th>Qty issued</th> 
   <th>Collected by</th>  
   <th>Purpose</th> 
   <th>Action</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
      
    
                <td style="border:0px;"><input type="text" name="id" id="id"  value="<?php  echo $id; ?>"
				style="width:100%; text-align:center;background-color:#fff;height: 21px;"></td> 
                 
               
               <td style="border:0px;"><input type="text"id="DATECREATED" name="DATECREATED"  value=" <?php echo $DATECREATED; ?> "
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td> 
                    
                <td style="border:0px;"><input type="text" name="SRFNO" id="SRFNO"   value=" <?php echo $SRFNO; ?> "
				style="width:100%; text-align:left;background-color:#fff;"> 
             
                <td style="border:0px;"><input type="text"name="ORDERSERIALID" id="ORDERSERIALID" value=" <?php echo $ORDERSERIALID; ?> " required="required"  
				style="width:100%; text-align:right;background-color:#fff;"></td> 
                  
              <td style="border:0px;"><input type="text" name="FACILITYNANE" id="FACILITYNANE"   value=" <?php echo $FACILITYNANE; ?> "required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td>
                   
    
    <td style="border:0px;"><input type="text" name="DESCRIPTION" id="DESCRIPTION" value="<?php  echo $DESCRIPTION; ?>"  required="required"
    style="width:100%; text-align:left;background-color:#fff;"></td> 
   
    
    <td style="border:0px;"><input type="numeric" name="QTYISSUED" id="QTYISSUED"  value="<?php  echo $QTYISSUED; ?>" 
    style="width:100%; text-align:left;background-color:#fff;">  </td>  
	
    <input type="hidden" name="FUCKERCOUNTER" id="FUCKERCOUNTER"  value="<?php  echo $QTYISSUED; ?>" />
    
	<td style="border:0px;"><input type="text" name="COLLECTEDBY" id="COLLECTEDBY"  value="<?php  echo $COLLECTEDBY; ?>" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
     
		
    <td style="border:0px;"><input type="text" name="PURPOSE" id="PURPOSE"  value="<?php  echo $PURPOSE; ?>" 
    style="width:100%; text-align:left;background-color:#fff;">  </td>   
      
   <td style="border:0px;"> <input type="submit" name="buttonsend" value="Update" style="height: 25px;"> </td>  
	  
   <tr>
   </tbody>
   </table> 
  
   </form>
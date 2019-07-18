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
  $STORELOCATION='';
  $QTYRECIEVED='';
  $UNITCOST='';
  $BASISOFVALUATION='';
  $BUDGETCODE='';
  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM recievables  WHERE `id` = '$id' AND GOODSRECEIVABLETYPE = 'DONATION' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $DESCRIPTION  = $row['DESCRIPTION']; 
     $ORDERSERIALID=$row['ORDERSERIALID']; 
	 $STORELOCATION=$row['STORELOCATION'];
     $QTYRECIEVED=$row['QTYRECIEVED']; 
	 $UNITCOST=$row['UNITCOST']; 
	 $BASISOFVALUATION=$row['BASISOFVALUATION'];
	 $BUDGETCODE=$row['BUDGETCODE']; 
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

   <form class="form-horizontal" action="str_codifyupdate.php" method="POST" style="height:auto; font-weight:normal;">
    

  <table class="table table-striped" style="background-color:#ffffff; margin-top:3px; ">
   <thead>
   <tr>
   <th>Description</th>
   <th>ID</th>
   <th>Serial number</th>
   <th>Location</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:30%;"><input type="text" name="DESCRIPTION" id="DESCRIPTION" value="<?php  echo $DESCRIPTION; ?>"  required="required"
   style="width:100%; text-align:left;background-color:#fff;"></td> 
   
   <td style="width:10%;"><input type="numeric" name="id" id="id"  value="<?php  echo $id; ?>" 
    style="width:100%; text-align:left;background-color:#fff;">  </td>  
	
	<td style="width:20%;"><input type="text" name="ORDERSERIALID" id="ORDERSERIALID"  value="<?php  echo $ORDERSERIALID; ?>" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
		
    <td style="width:50%;"><input type="text" name="STORELOCATION" id="STORELOCATION"  value="<?php  echo $STORELOCATION; ?>" 
    style="width:100%; text-align:left;background-color:#fff;">  </td>  
	  
   </tr>
  <tr>
 </tbody>
 </table> 
 
 <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th>Quantity</th>
   <th>Unit price</th>
   <th>Basis of valuation</th>
   <th>Budget code</th>
   <th> </th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:10%;"><input type="text" name="QTYRECIEVED" id="QTYRECIEVED"  value="<?php  echo $QTYRECIEVED; ?>" 
    style="width:100%; text-align:left;background-color:#fff;"> </td>  
	
	<td style="width:15%;"><input type="text" name="UNITCOST" id="UNITCOST"  value="<?php  echo $UNITCOST; ?>"  
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    
    <td style="width:50%;"><input type="text" name="BASISOFVALUATION" id="BASISOFVALUATION" value="<?php  echo $BASISOFVALUATION; ?>" 
    style="width:100%; text-align:left;background-color:#fff;"> </td>  
      
	<td style="width:15%;"><input type="text" name="BUDGETCODE" id="BUDGETCODE"  value="<?php  echo $BUDGETCODE; ?>" 
    style="width:100%; text-align:left;background-color:#fff;"> </td>   
    
	<td style="width:10%;"><input type="submit" name="buttonsend" value="Update" style="height: 25px;"> </td> 			
                						
   </tr>
  <tr>
 </tbody>
 </table>   
  
 </form>
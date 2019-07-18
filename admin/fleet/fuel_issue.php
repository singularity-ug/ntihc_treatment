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
  $REGISTRATIONNO = '';  
  $TYPE = ''; 
  $PRODUCT = '';   
  $LUBRICANT = '';   
  $LITRE = '';   
  $DRIVER = '';
  $MILEAGEBEFORE = '';   
  $MILEAGEAFTER = '';   
  $FUELSTATION = '';  
  $FUELCARDNAME = ''; 
  $INVOICENO = '';   
  $FUELISSUANCEDATE = '';   
  $UNITPRICE = '';   
  $ISSUEDBY = '';
  $ISSUERACCOUNT = '';   
  $PROJECT = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM fuellogs  WHERE `id` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $REGISTRATIONNO  = $row['REGISTRATIONNO'];
     $TYPE  = $row['TYPE'];
     $PRODUCT = $row['PRODUCT'];   
	 $LUBRICANT = $row['LUBRICANT']; 
	 $LITRE = $row['LITRE'];   
	 $DRIVER = $row['DRIVER']; 
	 $MILEAGEBEFORE = $row['MILEAGEBEFORE'];   
	 $MILEAGEAFTER = $row['MILEAGEAFTER'];  
	 $FUELSTATION  = $row['FUELSTATION'];
     $FUELCARDNAME  = $row['FUELCARDNAME'];
     $INVOICENO = $row['INVOICENO'];   
	 $FUELISSUANCEDATE = $row['FUELISSUANCEDATE']; 
	 $UNITPRICE = $row['UNITPRICE'];   
	 $ISSUEDBY = $row['ISSUEDBY']; 
	 $ISSUERACCOUNT = $row['ISSUERACCOUNT'];   
	 $PROJECT = $row['PROJECT']; 
	   $id = $row['id'];  
      } 
  ?>
 


 <?php
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
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

   <form class="form-horizontal" action="fuel_issueupdate.php" method="POST" style="height:auto; font-weight:normal;">
    

  <table class="table table-striped" style="background-color:#ffffff; margin-top:3px; ">
   <thead>
   <tr>
   <th><a href="fuel_admin.php" style="font-weight:bold;"> Close<span class="sr-only">(current) </span></a> </th> 
   <th>Record </th>
   <th>Registration Number</th>
   <th>Type</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:15%;"> Number </td>
   
   <td style="width:10%;"><input type="text" name="id" id="id" value="<?php  echo $id; ?>"  readonly="readonly"
   style="width:100%; text-align:center;background-color:#ecf0f5;"></td> 
   
   <td style="width:35%;"><input type="text" name="REGISTRATIONNO" id="REGISTRATIONNO" value="<?php  echo $REGISTRATIONNO; ?>" readonly="readonly"
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   
   <td style="width:40%;"><input type="text" name="TYPE" id="TYPE" value="<?php  echo $TYPE; ?>" readonly="readonly"
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   </tr>
  <tr>
 </tbody>
 </table>
  
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th>Station  </th> 
   <th>Driver / Operator  </th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:50%;"> <input type="text" name="FUELSTATION" id="FUELSTATION"  required="required" value="<?php  echo $FUELSTATION; ?>" 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
   
   <td style="width:50%;"> <input type="text" name="DRIVER" id="DRIVER"  required="required" value="<?php  echo $DRIVER; ?>" 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
   </tr>
  <tr>
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th>Fuel card name  </th> 
   <th>Product</th>
   <th>Lubricant</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:50%;"> <input type="text" name="FUELCARDNAME" id="FUELCARDNAME"  required="required" value="<?php  echo $FUELCARDNAME; ?>" 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
   
   <td style="width:20%;"><select name="PRODUCT" id="PRODUCT"  value="<?php  echo $PRODUCT; ?>" 
    style="width:100%; text-align:left;background-color:#ecf0f5;">
     <option value="<?php  echo $PRODUCT; ?>"><?php  echo $PRODUCT; ?> <option>
     <option value="DIESEL">DIESEL <option>
     <option value="PETROL"> PETROL<option>   
                  </select> </td>  
	
	<td style="width:30%;"><input type="text" name="LUBRICANT" id="LUBRICANT"  value="<?php  echo $LUBRICANT; ?>"  
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   
   </tr>
  <tr>
 </tbody>
 </table>

   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; "> 
   <thead>
   <tr> 
   <th>Issue date </th> 
   <th>Invoice No. </th> 
   <th>Previous mileage</th>
   <th>Current mileage</th>
   <th>Litres</th>
   <th>Unit price</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
    <td style="width:25%;"><input type="date" name="FUELISSUANCEDATE" id="FUELISSUANCEDATE"  value="<?php echo date('y-m-d'); ?>" required="required"
    style="width:100%; text-align:left;background-color:#fff;"></td> 
   
   <td style="width:15%;"> <input type="text" name="INVOICENO" id="INVOICENO"  required="required"   
    style="width:100%; text-align:left;background-color:#fff;">  </td>   
    
	<td style="width:15%;"><input type="numeric" name="MILEAGEBEFORE" id="MILEAGEBEFORE" value="<?php  echo $MILEAGEBEFORE; ?>"    
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    
    <td style="width:15%;"><input type="numeric" name="MILEAGEAFTER" id="MILEAGEAFTER"  value="<?php  echo $MILEAGEAFTER; ?>"  
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    
    <td style="width:15%;"><input type="numeric" name="LITRE" id="LITRE"  value="<?php  echo $LITRE; ?>"  required="required"
    style="width:100%; text-align:center;background-color:#fff;"></td> 	
    
    <td style="width:15%;"><input type="numeric" name="UNITPRICE" id="UNITPRICE"  value="<?php  echo $UNITPRICE; ?>" required="required" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 					
   </tr>
  <tr>
 </tbody>
 </table> 
   
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>  
   <tr>  
   <th>Project</th>
   <th>Issued by</th>
   <th>Action</th> 
   </tr> 
   </thead>
   <tbody>
   <tr>   

	<td style="width:57%;"><input type="text" name="PROJECT" id="PROJECT"  value="<?php  echo $PROJECT; ?>"  required="required"
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    
    <td style="width:33%;"><input type="text" name="ISSUEDBY" id="ISSUEDBY"  value="<?php  echo $nameofuser; ?>"  readonly="readonly" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    
    <input type="hidden" name="ISSUERACCOUNT" id="ISSUERACCOUNT"  value="<?php  echo $rm; ?>" />
    <input type="hidden" name="FUELISSUANCESTATUS" id="FUELISSUANCESTATUS" value="ISSUED"  />
    
    <td style="width:10%;"><center> <input type="submit" name="button" id="button" value="Save"/> </td> 						
   </tr>
  <tr>
 </tbody>
 </table>  
 </form>

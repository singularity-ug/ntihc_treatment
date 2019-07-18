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
  $CATEGORY='';
  $UNITOFMEASURE='';
  $STOCKTAKEN='';
  $UNITCOST='';
  $BREAKDOWN='';
  $DISCONTINUE='';
  $REORDERLEVEL='';
  $QTYPERUOM='';
  $ITEMNOTES='';
  $LOCATION='';
  $LASTUPDATEDBY='';
  $USERUNIT=''; 

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM items  WHERE `DESCRIPTION` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $DESCRIPTION  = $row['DESCRIPTION']; 
     $CATEGORY=$row['CATEGORY']; 
	 $STOCKTAKEN=$row['STOCKTAKEN'];
     $UNITOFMEASURE=$row['UNITOFMEASURE']; 
	 $UNITCOST=$row['UNITCOST']; 
	 $BREAKDOWN=$row['BREAKDOWN'];
	 $DISCONTINUE=$row['DISCONTINUE'];
	 $REORDERLEVEL=$row['REORDERLEVEL'];
	 $QTYPERUOM=$row['QTYPERUOM'];
	 $ITEMNOTES=$row['ITEMNOTES'];
	 $LOCATION=$row['LOCATION'];
	 $LASTUPDATEDBY=$row['LASTUPDATEDBY']; 
	 $USERUNIT=$row['USERUNIT']; 
	 $id=$row['id'];  
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

   <form class="form-horizontal" action="upditems_update.php" method="POST" style="height:auto; font-weight:normal;">
    

  <table class="table table-striped" style="background-color:#ffffff; margin-top:3px; ">
   <thead>
   <tr>
   <th>S/no.</th> 
   <th>Description</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:15%;"><input type="text" name="id" id="id"  value="<?php echo $id; ?> " readonly="readonly" 
   style="width:100%; text-align:left;background-color:#fff;"></td>
   
   <td style="width:85%;"><input type="text" name="DESCRIPTION" id="DESCRIPTION" value="<?php  echo $DESCRIPTION; ?>"  required="required"
   style="width:100%; text-align:left;background-color:#fff;"></td> 
   </tr>
  <tr>
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th>Category  </th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;"> <select name="CATEGORY" id="CATEGORY"  value="<?php  echo $CATEGORY; ?>" required="required"
    style="width:100%; text-align:left;background-color:#fff;"> 
    
                  <option value="<?php  echo $CATEGORY; ?>"> <?php  echo $CATEGORY; ?><option>
                   <?php   echo $stdd; ?> 
                  </select> </td>  
   </tr>
  <tr>
 </tbody>
 </table>
 
    <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th>Breakdown</th>
   <th>Unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;"><select name="BREAKDOWN" id="BREAKDOWN"  value="<?php  echo $BREAKDOWN; ?>" 
    style="width:100%; text-align:left;background-color:#fff;">
     <option value="<?php  echo $BREAKDOWN; ?>"><?php  echo $BREAKDOWN; ?> <option>
     <option value="DRUG">DRUG <option>
     <option value="OTHER SUPPLIES"> OTHER SUPPLIES<option>  
                  </select> </td>  
	
	<td style="width:50%;"><input type="text" name="UNITOFMEASURE" id="UNITOFMEASURE"  value="<?php  echo $UNITOFMEASURE; ?>"  
    style="width:100%; text-align:left;background-color:#fff;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
 
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th>Stock taken</th>
   <th>Qty per unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;"><input type="numeric" name="STOCKTAKEN" id="STOCKTAKEN"  value="<?php  echo $STOCKTAKEN; ?>" 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
	
	<td style="width:50%;"><input type="numeric" name="QTYPERUOM" id="QTYPERUOM"  value="<?php  echo $QTYPERUOM; ?>" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table>  
 
 
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th>Unit cost</th>
   <th>Re-order level</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;"><input type="numeric" name="UNITCOST" id="UNITCOST" value="<?php  echo $UNITCOST; ?>" 
    style="width:100%; text-align:left;background-color:#fff;">  </td>  
	
	<td style="width:50%;"><input type="numeric" name="REORDERLEVEL" id="REORDERLEVEL"  value="<?php  echo $REORDERLEVEL; ?>" 
    style="width:100%; text-align:left;background-color:#fff;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table>  
 
 <table class="table-responsive" style="background-color:#ffffff; margin-top:-19px; ">
            <table class="table">
              <tr>
			    <th style="width:50%">Discontinue </th>
                <th style="width:50%"> <select name="DISCONTINUE" id="DISCONTINUE" value="<?php  echo $DISCONTINUE; ?>" 
                 style="width:100%; text-align:left;background-color:#fff;"> 
                  <option value="<?php  echo $DISCONTINUE; ?>"><?php  echo $DISCONTINUE; ?> <option>
                  <option value="DISABLED">DISABLED <option>
                  <option value="ACTIVATE"> ACTIVATE<option>  
                  </select> </td>  
				</th>  
              </tr> 
            </table>
             
    <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th>Item short notes</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%; border:2px solid #ecf0f5;"><textarea name="ITEMNOTES" id="ITEMNOTES"  value="<?php  echo $ITEMNOTES; ?>" 
 style="width:100%; text-align:left;background-color:#fff;"></textarea></td> 
   </tr>
  <tr>
 </tbody>
 </table>  
        
	<table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th>Location</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%; border:2px solid #ecf0f5;"><input type="text" name="LOCATION" id="LOCATION"  value="<?php  echo $LOCATION; ?>"  
   style="width:100%; text-align:left;background-color:#fff;"> </td> 
   </tr>
  <tr>
 </tbody>
 </table> 
  
   <table class="table table-striped" style="background-color:#fff; margin-top:-18px; ">
   <thead>
   <tr> 
   <th>Usage line</th>
   <th> </th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:80%;"><select name="USERUNIT" id="USERUNIT"  value="<?php  echo $USERUNIT; ?>" 
    style="width:100%; text-align:left;background-color:#fff;">
     <option value="<?php  echo $USERUNIT; ?>"><?php  echo $USERUNIT; ?> <option>
     <option value="GENERAL">GENERAL <option>
     <option value="DISPENSARY"> DISPENSARY<option>  
     <option value="LABORATORY"> LABORATORY<option>  
                  </select> </td>  
	
	<td style="width:20%;"><a href="stores_module.php"> Close <span class="sr-only">(current)</span></a>  </th> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
  
	
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th>Last updated by</th> 
   <th>Action</th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:80%;"><input type="text" name="LASTUPDATEDBY" id="LASTUPDATEDBY"  value="<?php echo $nameofuser; ?>  " 
    style="width:100%; text-align:left;background-color:#fff;"></td>  
	
    <td style="width:20%;"><input type="submit" name="update" value="Update" style="height: 24px;"> </td> 					
   </tr>
  <tr>
 </tbody>
 </table> 
 </form>
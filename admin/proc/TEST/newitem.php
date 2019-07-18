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
 $password = "";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM items  WHERE `id` = '$id' ";

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
      }

  ?>
  
 <?php
$connect = new mysqli("localhost", "root", "", "ahr");
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
 
   <form class="form-horizontal" action="str_itemprocess.php" method="POST" style="height:auto; font-weight:normal;">  
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:3px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Description</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="DESCRIPTION" id="DESCRIPTION"  value=" "  required="required"
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   </tr>
  <tr>
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Category  </th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:2px solid #ecf0f5;"> <select name="CATEGORY"   id="CATEGORY" required="required"
    style="width:100%; text-align:left;background-color:#ecf0f5;"> 
                  <option value=" "> <option>
                   <?php   echo $stdd; ?> 
                  </select> </td>  
   </tr>
  <tr>
 </tbody>
 </table>
 
    <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Breakdown</th>
   <th style="border:2px solid #ecf0f5;">Unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><select name="BREAKDOWN" id="BREAKDOWN"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;">
     <option value="DRUG">DRUG <option>
     <option value="OTHER SUPPLIES"> OTHER SUPPLIES<option>  
                  </select> </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="text" name="UNITOFMEASURE " id="UNITOFMEASURE"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
 
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Stock taken</th>
   <th style="border:2px solid #ecf0f5;">Qty per unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="STOCKTAKEN" id="STOCKTAKEN"  value="0" 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
	
	<td style="width:50%;"><input type="numeric" name="QTYPERUOM " id="QTYPERUOM"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table>  
 
 
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Unit cost</th>
   <th style="border:2px solid #ecf0f5;">Re-order level</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="UNITCOST " id="UNITCOST"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="REORDERLEVEL " id="REORDERLEVEL"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table>  
 
 <table class="table-responsive" style="background-color:#ffffff; margin-top:-19px; ">
            <table class="table">
              <tr>
			    <th style="width:25%;border:2px solid #ecf0f5;">Discontinue </th>
                <th style="width:75%">
				<center> <input type="radio" name="DISCONTINUE" id="DISCONTINUE" value="DISABLED" checked>
        <label for="DISCONTINUE">DISABLED</label>
		<input name="DISCONTINUE" type="radio" id="DISCONTINUE" value="ACTIVATE">
		<label for="DISCONTINUE">ACTIVATE</label> </center>
				</th>  
              </tr> 
            </table>
             
    <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Item short notes</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%; border:2px solid #ecf0f5;"><textarea name="ITEMNOTES" id="ITEMNOTES"  value="" required="required"
 style="width:100%; text-align:left;background-color:#ecf0f5;"></textarea></td> 
   </tr>
  <tr>
 </tbody>
 </table>  
        
	<table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Location</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%; border:2px solid #ecf0f5;"><input type="text" name="LOCATION" id="LOCATION"  value=""  
   style="width:100%; text-align:left;background-color:#ecf0f5;"> </td> 
   </tr>
  <tr>
 </tbody>
 </table> 
  
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Usage line</th>
   <th style="border:2px solid #ecf0f5;"> </th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><select name="USERUNIT" id="USERUNIT"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;">
     <option value="GENERAL">GENERAL <option>
     <option value="DISPENSARY"> DISPENSARY<option>  
     <option value="LABORATORY"> LABORATORY<option>  
                  </select> </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"> </td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
  
	
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Incharge stores</th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="LASTUPDATEDBY" id="LASTUPDATEDBY"  value="<?php echo $nameofuser; ?>  " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td>  
							
   </tr>
  <tr>
 </tbody>
 </table> 
  <Center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" /></Center>
			</form>
			
			 
			
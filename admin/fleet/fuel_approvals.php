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
 <form class="form-horizontal" method="post" action="fuel_updateapproval.php" style="height:auto;">   
  
   <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
			     <th style="width:13.33333333%;border:1px solid #ECF0F5;">Requisition date </th>
				<th style="width:20%;border:1px solid #ECF0F5;"> <input type="text"  name="TIMESTAMP"  id="TIMESTAMP"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                <th style="width:33.33333333%;border:0px;">  </th>
                
                <th style="width:13.33333333%;border:1px solid #ECF0F5;">Requisition No. </th>
				<th style="width:20%;border:1px solid #ECF0F5;"> <input type="text"  name="ORDERNO"  id="ORDERNO"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                 
              </tr>
			  </table> 
            
<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
 
$id   = trim($_POST['id']);
$sql="SELECT * FROM fuellogs WHERE SERIALNO='$id'";

$result = $conn->query($sql);
$st ='<table id="dataTable1" class="table table-bordered">
      <thead>
      <tr>
       <th>  *  </th>
  <th  style="width:15%;">REG NUMBER</th>
   <th  style="width:20%;">TYPE</th>
   <th  style="width:10%;">PRODUCT</th> 
   <th  style="width:15%;">LUBRICANT </th> 
   <th  style="width:5%;">QTY</th> 
   <th  style="width:10%;">ODO READING</th>
   <th  style="width:25%;">DRIVER</th>
     </tr>
     </thead>
    <tbody id="tablebody">';


$sum=0;
while($row = $result->fetch_assoc())
{
  $sql1="SELECT MAKE FROM motorisedequipments WHERE REGISTRATIONNO='".$row['REGISTRATIONNO']."'";
  $result1 = $conn->query($sql1);
  $unit  =0;
while( $row1    = $result1->fetch_assoc()){
       $unit    = intval($row1['TYPE']);}

  $st=$st.'<tr >
  <td><input type="checkbox" required="required" checked="checked" /></td>
  <td>
   <input type="text" name="REGISTRATIONNO"  value="'.$row['REGISTRATIONNO'].'"  id="" required="required" 
    style= " width:100%; background-color:#fff;"/>
  </td>
  
  <td><input type="text"   value="'.$unit.'" name="TYPE" id="" required="required"
 style= "width:100%; background-color:#fff;"/>
</td>
  
 <td>
 <input type="text" name="PRODUCT" value="'.$row['PRODUCT'].'"  required="required" 
  style= "width:100%; background-color:#fff; "/> 
  </td>
  
   <td><input type="text" value="'.$row['LUBRICANT'].'" name="LUBRICANT" id=""  required="required" 
  style= "width:100%; background-color:#fff; "/> 
  </td>
   
  
  <td><input type="numeric"  value="'.$row['LITRE'].'" name="LITRE" required="required"
  style= "width:100%; background-color:#fff; text-align:center;"/> 
  </td>
   
    
    <td><input type="text"  value="'.$row['CURRENTODOREADING'].'" name="CURRENTODOREADING"  
  style= "width:100%; background-color:#fff; "/> 
  </td>
  
   
    <td><input type="text"  value="'.$row['DRIVER'].'" name="DRIVER"  
  style= "width:100%; background-color:#fff; "/> 
  </td>
</tr>';
$sum= $sum+(intval($row[''])*$unit);
}

$st = $st.' </tbody>
</table> ';
$conn->close();
echo $sum."______".$st;
?>

  
                  <table class="table-responsive" style="margin-top:-10px;">
               <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Requested by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATORTITLE" name="INITIATORTITLE"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;"> </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Reviewed and approved by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="ARBY" name="ARBY" value="<?php echo $desc; ?> " 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Reviewed by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVDBY" name="RVDBY"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;"> </th>   
                  
                  
              </tr>
			  </table> 
               
               <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Name</th>  
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATEDBY" name="INITIATEDBY"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;"> </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="ARNAME" name="ARNAME" value="<?php echo $nameofuser; ?> " 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVDNAME" name="RVDNAME"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>   
                  
                  
              </tr>
			  </table> 
              
              
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATIONDATE" name="INITIATIONDATE"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:0px;"> <input type="date" id="ARDATE" name="ARDATE"  value="<?php echo date('Y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVDDATE" name="RVDDATE"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>   
                  
                  
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
               <th style="width:13.33333333%;border:0px;">User department</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATORDEPARTRMENT" name="INITIATORDEPARTRMENT"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Comment</th> 
				<th style="width:20%;border:0px;"> <textarea name="ARCOMMENT"  
				required="required"  style="width:100%; font-weight:normal; background-color:#fff; height:21px;"> </textarea></th>   
                 
                 <th style="width:13.33333333%;border:0px;">Comment</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVWERCOMMENT" name="RVWERCOMMENT"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;"> </th>   
                  
                  
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
              
              <th style="width:33.33333333%;border:0px;"></th>
              
                <th style="width:16.333333333%;border:0px;">
                <input type="radio" name="APPROVALSTATUS" id="APPROVALSTATUS" value="APPROVED" checked>
                <label for="APPROVED">APPROVE</label>
                 
                </th> 
				<th style="width:17%;border:0px;"> 
                <input name="APPROVALSTATUS" type="radio" id="APPROVALSTATUS" value="REJECTED">
		        <label for="REJECTED">REJECT</label> </center>
                </th>   
                    
				 <th style="width:33.33333333%;border:0px;"></th>
              </tr>
			  </table> 
               
              <input type="hidden" id="TIMESTAMP" name="TIMESTAMP" > 
               <center> <input type="submit" name="button" id="button" value="Confirm action"/>
               <a href="fuel_requests.php" style="border: 1px solid #000; padding: 2px;border-radius: 3px; font-weight:bold;"> New requestion <span class="sr-only">(current)
               </span></a> 
               </center>
             
                    </form> 

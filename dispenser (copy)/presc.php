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
 <form class="form-horizontal" method="post" action="update_dispenser.php" style="height:auto;">  
   <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:1px solid #ECF0F5;">Prescription date </th>
				<th style="width:25%;border:1px solid #ECF0F5;"> <input type="text"  name="DATECREATED"  id="DATECREATED"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                <th style="width:10%;border:0px;"></th>
                
                <th style="width:15%;border:1px solid #ECF0F5;">Episode </th>
				<th style="width:30%;border:1px solid #ECF0F5;"> <input type="text" id="SERVICE_EPISODE" name="SERVICE_EPISODE"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
            
<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$date = date("Y-m-d").' 00:00:00';
$id   = trim($_POST['id']);
$sql="SELECT * FROM prescription WHERE CHECKAVAILABILITY ='NO' AND NTIHCNO='$id'";

$result = $conn->query($sql);
$st ='<table id="dataTable1" class="table table-bordered">
      <thead>
      <tr>
       <th>  *  </th>
          <th style="width:50%;"> DRUG </th>
	      <th style="width:10%;"> QTY  </th>
		  <th style="width:10%;"> TIMES  </th>
		  <th style="width:10%;"> PERIOD  </th>
          <th style="width:10%;"> TOTAL </th>  
          <th style="width:10%;"> COST </th>
     </tr>
     </thead>
    <tbody id="tablebody">';


$sum=0;
while($row = $result->fetch_assoc())
{
  $sql1="SELECT UNITPRICE FROM ntihcdrugs WHERE DRUGNAME='".$row['DRUGNAME']."'";
  $result1 = $conn->query($sql1);
  $unit  =0;
while( $row1    = $result1->fetch_assoc()){
       $unit    = intval($row1['UNITPRICE']);}

  $st=$st.'<tr >
  <td><input type="checkbox" required="required" checked="checked" /></td>
  <td>
   <input type="text" name="DRUGNAME"  value="'.$row['DRUGNAME'].'"  id="" readonly="readonly" 
    style= " width:100%; background-color:#fff;"/>
  </td>
  
 <td>
 <input type="numeric" name="FREQUENCY" value="'.$row['FREQUENCY'].'"  readonly="readonly"  
  style= "width:100%; background-color:#fff; text-align:center;"/> 
  </td>
  
   <td><input type="numeric" value="'.$row['TIMES'].'" name="TIMES" id=""  readonly="readonly"  
  style= "width:100%; background-color:#fff; text-align:center;"/> 
  </td>
  
  <td><input type="numeric" value="'.$row['PERIOD'].'" name="PERIOD" id="" readonly="readonly" 
   style= "width:100%; background-color:#fff; text-align:center;"/> 
  </td>
  
  <td><input type="numeric"  value="'.$row['QTYPRESCRIBED'].'" name="QTYPRESCRIBED" readonly="readonly" 
  style= "width:100%; background-color:#fff; text-align:center;"/> 
  </td>
   
 <td><input type="double"   value="'.$unit.'" name="UNITRATE" id="" readonly="readonly" 
 style= "width:100%; background-color:#fff;"/>
</td>
</tr>';
$sum= $sum+(intval($row['QTYPRESCRIBED'])*$unit);
}

$st = $st.' </tbody>
</table> ';
$conn->close();
echo $sum."______".$st;
?>

  
                <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Prescription comment</th> 
				<th style="width:80%;border:0px;"> <textarea id="RECOMMENDEDDRUGS" name="RECOMMENDEDDRUGS"  
			  style="width:100%; font-weight:normal; background-color:#fff;"> </textarea>  </th>   
                 
              </tr>
			  </table> 
              
                <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Prescriped by</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="USERINITIAL" name="USERINITIAL"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                <th style="width:20%;border:0px;">Requesting unit</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="REQUESTINGUNIT" name="REQUESTINGUNIT"  
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
              
              
              <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">
                 <input type="radio" class="switch-input" name="DISPENSESTATUS" value="DEFAULT" id="DEFAULT" checked="">
			     <label for="DEFAULT" class="switch-label switch-label-off">EFFECTIVE DOSAGE</label>
                 
                </th> 
				<th style="width:30%;border:0px;"> 
                <input type="radio" class="switch-input" name="DISPENSESTATUS" value="ACTIVATE" id="ACTIVATE">
			    <label for="ACTIVATE" class="switch-label switch-label-on">FORWARD FOR RECTIFICATION</label>
                </th>   
                  
				<th style="width:50%;border:0px;"> <textarea id="COMMENT" name="COMMENT" placeholder="Comment" 
				  style="width:100%; font-weight:normal; background-color:#fff; height:22px;"></textarea> </th>    
              </tr>
			  </table> 
              
              
               <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Dispensed by</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="DISPENSEDBY" name="DISPENSEDBY" value="<?php echo $nameofuser; ?> " 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                <th style="width:20%;border:0px;">Date</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="DISPENSEDDATE" name="DISPENSEDDATE" value="<?php echo date('Y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
              
               <center> <input type="submit" name="button" id="button" value="Dispense"/> 
               </center>
             
                    </form> 

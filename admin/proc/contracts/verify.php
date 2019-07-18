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
	   $id = $row['id'];  
      } 
  ?>
 
   <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid #000;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 10px;
             	 color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#ecf0f5;
             }

</style>
 
   <form class="form-horizontal" action="run_disposal.php" method="POST" style="height:auto; font-weight:normal;">  
      
   <table class="table-responsive" style="background-color:#ffffff; margin-top:0px; ">
            <table class="table">
              <tr>
			    <th style="width:20%; background-color:#660099;color:#fff;font-size:15px;">RUN VERIFICATION </th>
                
                <th style="width:5%;border:2px solid #a9abae;background-color:#FFF; text-align:left;"> ID</th>
                <th style="width:35%;border:2px solid #a9abae;background-color:#FFF;"> DESCRIPTION</th>
                <th style="width:15%;border:2px solid #a9abae;background-color:#FFF;"> ASSET NO.</th>
                <th style="width:5%;border:2px solid #a9abae;background-color:#FFF; text-align:left;"> AGE</th>  
                <th style="width:15%;">
				<center> <input type="radio" name="QTYVERIFIED" id="QTYVERIFIED" value="0" checked>
        <label for="QTYVERIFIED">NOT YET SEEN</label> 
		<input name="QTYVERIFIED" type="radio" id="QTYVERIFIED" value="1">
		<label for="QTYVERIFIED">VERIFY</label> </center>
				</th>  
                <th style="width:5%;border:2px solid #a9abae;background-color:#FFF; text-align:left;"> <center>  
        <a href="asset_config.php"> CLOSE <span class="sr-only">(current)</span></a> 
        </center></th> 
              </tr> 
            </table> 
                  
<table class="table-responsive" style="background-color:#ffffff; margin-top:-19px; ">
            <table class="table">
              <tr> 
			    <th style="width:20%; background-color:#660099;color:#fff;font-size:15px;">DISPOSE THIS ITEM </th>
                
                 <th style="width:5%;border:2px solid #a9abae;">  <?php  echo $id; ?>  </th> 
                <th style="width:35%;border:2px solid #a9abae;"> <?php echo $PROPERTYDESCRIPTION; ?>  </th>  
                  
                   <th style="width:15%;border:2px solid #a9abae;">   <?php echo $ENGRAVEDNUMBER; ?>  </th>  
                  
                       <?php
$connect = new mysqli("localhost", "root", "toor2", "contemporary");
$stss ="";
if( $result = $connect->query("SELECT PROPERTYDESCRIPTION,CATEGORY, CODIFICATIONSTATUS,ENGRAVEDNUMBER,
			                                         HOLDTYPE,  DATEOFPURCHASE, MAKE,PROPERTYCOST,SUPPLIEDBY,
													 LOCATION,RESPONSIBLEOFFICER,OFFICERCONTACT,FUNCTIONALSTATUS,
													 SERVICEREQUIREMENT,NEXTDUESERVICE,REMINDDATE, 
			 CURDATE(), TIMESTAMPDIFF(YEAR,DATEOFPURCHASE,CURDATE()) AS age 
			 FROM properties WHERE `id` = '$id'"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['age'] ." </option>";   }
  }
$connect->close();
?> 

 
                   <th style="width:5%;border:2px solid #a9abae;">  <?php   echo $stss; ?>  </th> 
                  
                <th style="width:15%">
				<center> <input type="radio" name="PHYSICALSTATUS" id="PHYSICALSTATUS" value="AVAILABLE" checked>
        <label for="PHYSICALSTATUS">AVAILABLE</label> 
		<input name="PHYSICALSTATUS" type="radio" id="PHYSICALSTATUS" value="DISPOSED">
		<label for="PHYSICALSTATUS">DISPOSE</label> </center>
				</th>  
              <th style="width:5%;border:2px solid #a9abae;"> <center> <input type="submit" name="update" value="Update"> </center> </th>    
              </tr> 
            </table> 
            </table>   
   </form>
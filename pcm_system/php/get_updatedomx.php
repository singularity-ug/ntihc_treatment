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
  $idx =  $_GET['q'];  
  $MAKE = '';  
  $PROPERTYDESCRIPTION = ''; 
  $QTYVERIFIED = '';   
  $ENGRAVEDNUMBER = '';    
  $CATEGORY = '';  
  $CODIFICATIONSTATUS = ''; 
  $DATEOFPURCHASE = '';   
  $HOLDTYPE = '';    
  $PROPERTYCOST = '';  
  $SUPPLIEDBY = ''; 
  $LOCATION = '';   
  $RESPONSIBLEOFFICER = '';    
  $OFFICERCONTACT = '';  
  $FUNCTIONALSTATUS = ''; 
  $SERVICEREQUIREMENT = '';   
  $NEXTDUESERVICE = '';  
  $REMINDDATE = '';   
	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "pcms";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM properties  WHERE `id` = '$idx' ";


 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $MAKE  = $row['MAKE'];
     $PROPERTYDESCRIPTION  = $row['PROPERTYDESCRIPTION'];
     $QTYVERIFIED = $row['QTYVERIFIED'];   
	 $ENGRAVEDNUMBER = $row['ENGRAVEDNUMBER'];  
	 $CATEGORY = $row['CATEGORY']; 
     $CODIFICATIONSTATUS  = $row['CODIFICATIONSTATUS'];
     $ENGRAVEDNUMBER  = $row['ENGRAVEDNUMBER'];
     $HOLDTYPE = $row['HOLDTYPE'];   
	 $DATEOFPURCHASE = $row['DATEOFPURCHASE'];  
	 $PROPERTYCOST = $row['PROPERTYCOST']; 
     $SUPPLIEDBY  = $row['SUPPLIEDBY'];
     $LOCATION  = $row['LOCATION'];
     $RESPONSIBLEOFFICER = $row['RESPONSIBLEOFFICER'];   
	 $OFFICERCONTACT = $row['OFFICERCONTACT'];  
	 $FUNCTIONALSTATUS = $row['FUNCTIONALSTATUS']; 
     $SERVICEREQUIREMENT  = $row['SERVICEREQUIREMENT'];
     $NEXTDUESERVICE  = $row['NEXTDUESERVICE'];
     $NEXTDUESERVICE = $row['NEXTDUESERVICE'];   
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
                 background:#fff;
             }

</style>
 
   <form class="form-horizontal" action="updateassets.php" method="POST" style="height:auto; font-weight:normal;">    
		   
     <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
               <th style="width:3%;border:2px solid #a9abae;">ID </th>
				<th style="width:3%;border:2px solid #a9abae;"> <input type="text"  id="idx" name="idx" value="<?php  echo $idx; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              
			    <th style="width:10%;border:2px solid #a9abae;">Description </th>
				<th style="width:44%;border:2px solid #a9abae;"> <input type="text"  id="PROPERTYDESCRIPTION" name="PROPERTYDESCRIPTION"  
                value="<?php echo $PROPERTYDESCRIPTION; ?>"      
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:10%;border:2px solid #a9abae;">Category </th>
				<th style="width:30%;border:2px solid #a9abae;"> <select id="CATEGORY" name="CATEGORY" value="<?php  echo $CATEGORY; ?>"    
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  
				        <option value="<?php  echo $CATEGORY; ?>"> <?php  echo $CATEGORY; ?></option>
                        <option>COMPUTER EQUIPMENT AND ACCESSORIES</option>
                        <option>OFFICE EQUIPMENT</option> 
                        </select></th>   
                 
              </tr>
			  </table> 
			   
              
			  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:10%;border:2px solid #a9abae;background-color:#ecf0f5;">Codification </th>
				<th style="width:10%;border:2px solid #a9abae;">  
				  <select name="CODIFICATIONSTATUS" id="CODIFICATIONSTATUS"  value="<?php  echo $CODIFICATIONSTATUS; ?>"  style="width:100%;">
                 <option value="<?php  echo $CODIFICATIONSTATUS; ?>" > <?php  echo $CODIFICATIONSTATUS; ?></option>
                        <option>PENDING</option>
                        <option>CODIFIED</option> 
                        <option>N/A</option> 
                        </select></th>   
				 
				  
				<th style="width:10%;border:2px solid #a9abae; background-color:#ecf0f5;">Registration No. </th>
				<th style="width:20%;border:2px solid #a9abae;"> <input type="text"  id="ENGRAVEDNUMBER" name="ENGRAVEDNUMBER" value="<?php  echo $ENGRAVEDNUMBER; ?>"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>
                
                  <th style="width:10%;border:2px solid #a9abae;background-color:#ecf0f5;">Hold type </th>
				<th style="width:10%;border:2px solid #a9abae;">  
				  <select name="HOLDTYPE" id="HOLDTYPE" value="<?php  echo $HOLDTYPE; ?>"   style="width:100%;">
                 <option value="<?php  echo $HOLDTYPE; ?>" > <?php  echo $HOLDTYPE; ?></option>
                        <option>PURCHASED</option>
                        <option>DONATION</option> 
                        <option>RENTED</option> 
                        </select></th>     
				<th style="width:15%;border:2px solid #a9abae; background-color:#ecf0f5;">Recieved date </th>
				<th style="width:15%;border:2px solid #a9abae;"> <input type="date"  name="DATEOFPURCHASE"    id="DATEOFPURCHASE" value="<?php  echo $DATEOFPURCHASE; ?>" 
				style="width:100%; font-weight:normal; background-color:#fff;height:21px;">  </th>   
				  
              </tr>
			  </table> 
		 
			  
			    <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			   <th style="width:10%;border:2px solid #a9abae; ">Asset make</th>
				<th style="width:10%;border:2px solid #a9abae;"> <input type="text"  id="MAKE" name="MAKE"  value="<?php  echo $MAKE; ?>"
				style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				
				<th style="width:10%;border:2px solid #a9abae; ">Cost </th>
				<th style="width:10%;border:2px solid #a9abae;"> <input type="numeric"  id="PROPERTYCOST" name="PROPERTYCOST"  value="<?php  echo $PROPERTYCOST; ?>" 
				style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Supplier / Donor /Rented from </th>
				<th style="width:40%;border:2px solid #a9abae;"> <input type="text"  id="SUPPLIEDBY" name="SUPPLIEDBY" value="<?php  echo $SUPPLIEDBY; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>   
              </tr>
			  </table>  
 
             <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:10%;border:2px solid #a9abae;">Asset location </th>
				<th style="width:40%;border:2px solid #a9abae;"> <input type="text"  id="LOCATION" name="LOCATION"   value="<?php  echo $LOCATION; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:13%;border:2px solid #a9abae;">Officer responsible </th>
				<th style="width:15%;border:2px solid #a9abae;"> <input type="text"  id="RESPONSIBLEOFFICER" name="RESPONSIBLEOFFICER" value="<?php  echo $RESPONSIBLEOFFICER; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				 
                  <th style="width:12%;border:2px solid #a9abae;">Phone contact </th>
				<th style="width:10%;border:2px solid #a9abae;"> <input type="text"  id="OFFICERCONTACT" name="OFFICERCONTACT" value="<?php  echo $OFFICERCONTACT; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
		 
			   
   
				  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:10%;border:2px solid #a9abae;background-color:#FFF;">Functional status </th>
				<th style="width:10%;border:2px solid #a9abae;">  
				 <select name="FUNCTIONALSTATUS" id="FUNCTIONALSTATUS" value="<?php  echo $FUNCTIONALSTATUS; ?>" style="width:100%;">
                        <option  value="<?php  echo $SERVICEREQUIREMENT; ?>"> </option>
                        <option>OPERARATIONAL</option>
                        <option>FAULTY</option>  
                        </select></th>  
		          
		           
				    <th style="width:10%;border:2px solid #a9abae;background-color:#FFF;">Serviceability</th>
				<th style="width:10%;border:2px solid #a9abae;">  
				  <select name="SERVICEREQUIREMENT" id="SERVICEREQUIREMENT" value="<?php  echo $SERVICEREQUIREMENT; ?>" style="width:100%;">
                   <option  value="<?php  echo $SERVICEREQUIREMENT; ?>"> </option>
                        <option>OPERARATIONAL</option>
                        <option>NOT APPLICABLE</option>  
                        </select></th>  
                        
                  <th style="width:10%;border:2px solid #a9abae;background-color:#FFF;"> Next service date</th>
				<th style="width:10%;border:2px solid #a9abae;">  
				  <input type="date" name="NEXTDUESERVICE" id="NEXTDUESERVICE" value="<?php  echo $NEXTDUESERVICE; ?>"  style="width:100%;height:21px;"> 
				  
                  <th style="width:10%;border:2px solid #a9abae;background-color:#FFF;">Remind date</th>
				  <th style="width:10%;border:2px solid #a9abae;">
		          <input  type="date" name="REMINDDATE" id="REMINDDATE"  value="<?php  echo $REMINDDATE; ?>" style="width:100%;height:21px;"> 
		             
                    <th style="width:10%;border:2px solid #a9abae;background-color:#FFF;">Remind date</th>
				  <th style="width:10%;border:2px solid #a9abae;">
		          <input  type="date" name="REMINDDATE" id="REMINDDATE"  value="<?php  echo $REMINDDATE; ?>" style="width:100%;height:21px;">     
              </tr>
			  </table>  
		    
		      
      
      <table class="table-responsive" style="margin-top:-19px;border:0px;"> 
            <table class="table" style="border:0px;border:0px;">
              <tr>
			    <th style="width:10%;border:0px;background-color:#FFF;"> Updated by</th>
				<th style="width:20%;border:0px;">  
				  <input type="text" name="LASTUPDATEDBY" id="LASTUPDATEDBY" value="<?php echo $nameofuser; ?>" readonly="readonly" style="border:0px;width:100%;"> 
				  </th> 
				  
				   <th style="width:10%;border:0px;background-color:#FFF;">Date updated</th>
				  <th style="width:10%;border:0px;">
		          <input  type="date" name="UPDATEDDATE" id="UPDATEDDATE" value="<?php echo date('Y-m-d'); ?>" readonly="readonly" style="border:0px;width:100%;height:21px;"> 
		          </th>    
              
                  <input type="hidden" name="id" id="myID" value=" " > 
                   
                   <th style="width:40%; border:0px;"> </th> 
                    
              <input type="hidden" name="USERPFNO" id="USERPFNO" value=" <?php echo $pf; ?>" >
                
         <td style="width:10%;border:0px; background-color:#fff;">  <center> <input type="submit" name="update" value="Update"> </center></td>  
               
    </tr> 
    </tbody>
    </table>  
    
           </form>
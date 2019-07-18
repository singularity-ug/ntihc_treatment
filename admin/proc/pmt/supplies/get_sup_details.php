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
  $SERVICEPROVIDER = '';  
  $DATEREGISTERED = ''; 
  $TYPE = '';   
  $PHYSICALADDRESS = '';    
  $PHYSICALLOCATION = '';  
  $BOXNUMBER = ''; 
  $COUNTRYOFOPERATION = '';   
  $CONTACTPERSON = '';    
  $TELEPONENO = '';  
  $MOBILENO = ''; 
  $ENTITYEMAIL = '';   
  $CONTACTPERSONEMAIL = '';    
  $TAXSTATUS = '';  
  $TINNO = ''; 
  $FRAMEWORKDETAILS = '';   
  $FRAMEWORKID = '';  
  $ENTITYCODE = '';   
  $FRAMEWORKPERIOD = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM suppliers  WHERE `id` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $id = $row['id']; 
     $SERVICEPROVIDER  = $row['SERVICEPROVIDER'];
     $DATEREGISTERED  = $row['DATEREGISTERED'];
     $TYPE = $row['TYPE'];   
	 $PHYSICALADDRESS = $row['PHYSICALADDRESS'];  
	 $PHYSICALLOCATION = $row['PHYSICALLOCATION']; 
     $BOXNUMBER  = $row['BOXNUMBER'];
     $COUNTRYOFOPERATION  = $row['COUNTRYOFOPERATION'];
     $CONTACTPERSON = $row['CONTACTPERSON'];   
	 $TELEPONENO = $row['TELEPONENO'];  
	 $MOBILENO = $row['MOBILENO']; 
     $ENTITYEMAIL  = $row['ENTITYEMAIL'];
     $CONTACTPERSONEMAIL  = $row['CONTACTPERSONEMAIL'];
     $TAXSTATUS = $row['TAXSTATUS'];   
	 $TINNO = $row['TINNO'];  
	 $FRAMEWORKDETAILS = $row['FRAMEWORKDETAILS']; 
     $FRAMEWORKID  = $row['FRAMEWORKID'];
     $ENTITYCODE  = $row['ENTITYCODE'];
     $FRAMEWORKPERIOD = $row['FRAMEWORKPERIOD'];    
	 
      } 
  ?>
 
   <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #000;
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
  
     <form class="form-horizontal" action="supplies/update_supplier.php" method="POST" style="height:auto; font-weight:normal; background-color:#fff;">  
     
     
     <input type="hidden"  id="id" name="id"  value="<?php  echo $id; ?>"  />
     <div class="col-sm-6" >       
     <table class="table-responsive" style="margin-top:4px;">
                <table class="table" style="border:0px;">
                <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Service provider </th>
				<th style="width:80%;border:2px solid #a9abae;"> <input type="text"  id="SERVICEPROVIDER" name="SERVICEPROVIDER"  
                value="<?php  echo $SERVICEPROVIDER; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>   
                </tr>
			    </table> 
             
              <table class="table-responsive" style="margin-top:-23px;">
              <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Enrollment date </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="DATEREGISTERED" name="DATEREGISTERED"   value="<?php  echo $DATEREGISTERED; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Classification </th>
				<th style="width:30%;border:2px solid #a9abae;"> <select id="TYPE" name="TYPE"  value="<?php  echo $TYPE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  
				        <option value="<?php  echo $TYPE; ?>">   <?php  echo $TYPE; ?></option>
                        <option>COMPANY</option>
                        <option>INDIVIDUAL</option> 
                        </select></th>   
                 
              </tr>
			  </table> 
            
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Physical address </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="PHYSICALADDRESS" name="PHYSICALADDRESS" 
                value="<?php  echo $PHYSICALADDRESS; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Location </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="PHYSICALLOCATION" name="PHYSICALLOCATION"  
                value="<?php  echo $PHYSICALLOCATION; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
               
       
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Box number</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="BOXNUMBER" name="BOXNUMBER"   value="<?php  echo $BOXNUMBER; ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Country / District </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="COUNTRYOFOPERATION" name="COUNTRYOFOPERATION" 
                 value="<?php  echo $COUNTRYOFOPERATION; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Contact person </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="CONTACTPERSON" name="CONTACTPERSON"  value="<?php  echo $CONTACTPERSON; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Telephone number </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="TELEPONENO" name="TELEPONENO"   value="<?php  echo $TELEPONENO; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
               </div>       
               <div class="col-sm-6" >      
               <table class="table-responsive" style="margin-top:4px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Mobile number</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="MOBILENO" name="MOBILENO"  value="<?php  echo $MOBILENO; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Client e-mail </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="ENTITYEMAIL" name="ENTITYEMAIL"   
                value="<?php  echo $ENTITYEMAIL; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
             
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Contact person email</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="CONTACTPERSONEMAIL" name="CONTACTPERSONEMAIL"    
                value="<?php  echo $CONTACTPERSONEMAIL; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
                 
              </tr>
			  </table> 
                   
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Tax status</th>
				<th style="width:30%;border:2px solid #a9abae;"> <select id="TAXSTATUS" name="TAXSTATUS"   value="<?php  echo $TAXSTATUS; ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff;"> 
                <option></option>
                <option>INCLUSIVE</option>
                <option>EXEMPTED</option>
                 </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Tin number </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="TINNO" name="TINNO"  value="<?php  echo $TINNO; ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table>   
              
            
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Framework details</th>
				<th style="width:80%;border:2px solid #a9abae;"> <input type="text" id="FRAMEWORKDETAILS" name="FRAMEWORKDETAILS" 
                 required="required"  value="<?php  echo $FRAMEWORKDETAILS; ?>"
				style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table>   
              
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:2px solid #a9abae;">Framework ID </th>
				<th style="width:14.33333333%;border:2px solid #a9abae;"> <input type="text" id="FRAMEWORKID" name="FRAMEWORKID"  
                readonly="readonly"  value="<?php  echo $id; ?>"
				 style="width:100%; font-weight:normal; background-color:#ecf0f5;">   </th>   
                 
                <th style="width:10%;border:2px solid #a9abae;">Code </th>
				<th style="width:24.33333333%;border:2px solid #a9abae;"> <input type="text" id="ENTITYCODE" name="ENTITYCODE"  
                readonly="readonly"  value="<?php  echo $ENTITYCODE; ?>"
				 style="width:100%; font-weight:normal; background-color:#ecf0f5;">   </th>   
                 
                 <th style="width:10%;border:2px solid #a9abae;">Tenure period </th>
				<th style="width:24.33333333%;border:2px solid #a9abae;"> <input type="text" id="FRAMEWORKPERIOD" name="FRAMEWORKPERIOD" 
                required="required"   value="<?php  echo $FRAMEWORKPERIOD; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th>    
              
              </tr>
			  </table>  
                <center> <input type="submit" name="update" value="Update" style="height: 24px;"> 
                 <a href="suppliers _mgt.php"> Close <span class="sr-only">(current)</span></a> </center>
        
    </div></div> 
    
           </form> 

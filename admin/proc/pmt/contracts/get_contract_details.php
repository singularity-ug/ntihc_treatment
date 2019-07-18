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
  $CONTRACT = ''; 
  $CONTRACTVALUE = '';   
  $PAYMENTSHEDULE = '';    
  $TENURE = '';  
  $STARTDATE = '';   
  $ENDDATE = '';  
  $EXTENSIONDATE = '';    
  $EXTENSIONENDDATE = '';  
  $RESPONSIBILITYCENTER = ''; 
  $ACCOUNTABLE = '';   
  $CONSULTED = '';    
  $INFORMED = '';  
  $CONTRACTMANAGER = '';  
  $STATUS = '';   
  $PROCUREMENTTYPE = '';   
  $BREAKDOWN = '';    
  $FUNDING = '';  
  $PROJECTPURPOSE = '';  
  $PROJECTCORDINATOR = ''; 
   	      
			 
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM contracts  WHERE `id` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $id = $row['id']; 
     $SERVICEPROVIDER  = $row['SERVICEPROVIDER'];
     $CONTRACT  = $row['CONTRACT'];
     $CONTRACTVALUE = $row['CONTRACTVALUE'];   
	 $PAYMENTSHEDULE = $row['PAYMENTSHEDULE'];  
	 $TENURE = $row['TENURE']; 
     $STARTDATE  = $row['STARTDATE'];
     $ENDDATE  = $row['ENDDATE'];
     $EXTENSIONDATE = $row['EXTENSIONDATE']; 
	 $EXTENSIONENDDATE = $row['EXTENSIONENDDATE']; 
	 $RESPONSIBILITYCENTER = $row['RESPONSIBILITYCENTER'];  
	 $ACCOUNTABLE = $row['ACCOUNTABLE']; 
     $CONSULTED  = $row['CONSULTED'];
     $INFORMED  = $row['INFORMED'];
     $CONTRACTMANAGER = $row['CONTRACTMANAGER'];   
	 $STATUS = $row['STATUS'];   
	 $PROCUREMENTTYPE = $row['PROCUREMENTTYPE']; 
     $BREAKDOWN  = $row['BREAKDOWN'];
     $FUNDING  = $row['FUNDING'];
     $PROJECTPURPOSE = $row['PROJECTPURPOSE'];   
	 $PROJECTCORDINATOR = $row['PROJECTCORDINATOR'];   
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
            
     <form class="form-horizontal" action="contracts/update_contract.php" method="POST" style="height:auto; font-weight:normal; background-color:#fff;">  
   
     <input type="hidden"  id="id" name="id"  value="<?php  echo $id; ?>"  />
          
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
			    <th style="width:20%;border:2px solid #a9abae;">Project / Contract </th>
				<th style="width:80%;border:2px solid #a9abae;"> <input type="text"  id="CONTRACT" name="CONTRACT" value="<?php  echo $CONTRACT; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
                    
                 
              </tr>
			  </table> 
              
              
               <table class="table-responsive" style="margin-top:-23px;">
              <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Procurement type </th>
				<th style="width:30%;border:2px solid #a9abae;"> <select  id="PROCUREMENTTYPE" name="PROCUREMENTTYPE"   value="<?php  echo $PROCUREMENTTYPE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; "> 
                <option value="<?php  echo $PROCUREMENTTYPE; ?>"><?php  echo $PROCUREMENTTYPE; ?></option>
                <option>Contract</option>
                <option>LPO</option>
                </select>
                
                 </th>  
                
                 <th style="width:20%;border:2px solid #a9abae;">Project / Contract value </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="CONTRACTVALUE" name="CONTRACTVALUE" value="<?php  echo $CONTRACTVALUE; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
              
            
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Payment shedule </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="PAYMENTSHEDULE" name="PAYMENTSHEDULE" 
                value="<?php  echo $PAYMENTSHEDULE; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Tenure </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="TENURE" name="TENURE"  
                value="<?php  echo $TENURE; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
               
       
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Start date</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="STARTDATE" name="STARTDATE"   value="<?php  echo $STARTDATE; ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">End date </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="ENDDATE" name="ENDDATE" 
                 value="<?php  echo $ENDDATE; ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
              
              
              <table class="table-responsive" style="margin-top:-10px;">
              <table class="table" style="border:0px;">
              <tr> 
              <th style="width:20%;border:2px solid #a9abae;">Breakdown</th>
              <th style="width:30%;border:2px solid #a9abae;background-color:#F9F9F9;"> 
               <input type="text" id="BREAKDOWN" name="BREAKDOWN"  value="<?php  echo $BREAKDOWN; ?>"   
				style="width:100%; font-weight:normal; background-color:#F9F9F9;">   </th>  
			   
				 
                <th style="width:20%;border:2px solid #a9abae;background-color:#F9F9F9;">Source of funding </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="FUNDING" name="FUNDING" value="<?php  echo $FUNDING; ?>"  
				style="width:100%; font-weight:normal; background-color:#F9F9F9;">   </th>   
                 
              </tr>
			  </table> 
             
              
              <table class="table-responsive" style="margin-top:-23px;">
              <table class="table" style="border:0px;">
              <tr> 
              <th style="width:20%;border:2px solid #a9abae;background-color:#F9F9F9;">Project purpose</th>
              <th style="width:80%;border:2px solid #a9abae;background-color:#F9F9F9;">
               <input type="text" name="PROJECTPURPOSE" value="<?php echo $PROJECTPURPOSE;?> "
                style="width:100%; font-weight:normal; background-color:#F9F9F9;">   </th> 
				  </th>    
              </tr>
			  </table> 
              
              <table class="table-responsive" style="margin-top:-23px;">
              <table class="table" style="border:0px;">
              <tr> 
              <th style="width:20%;border:2px solid #a9abae;background-color:#F9F9F9;">Project cordinator (s)</th>
              <th style="width:80%;border:2px solid #a9abae;background-color:#F9F9F9;">
               <input type="text" id="PROJECTCORDINATOR" name="PROJECTCORDINATOR"value=" <?php echo $PROJECTCORDINATOR;?> "
			   style="width:100%; font-weight:normal; background-color:#F9F9F9; height:22px;">  </th>    
              </tr>
			  </table> 
              
              
              <table class="table-responsive" style="margin-top:-3px;">
              <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Contract extension date </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="EXTENSIONDATE" name="EXTENSIONDATE"  value="<?php  echo $EXTENSIONDATE; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
               
                <th style="width:20%;border:2px solid #a9abae;">Extension end date </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="EXTENSIONENDDATE" name="EXTENSIONENDDATE"   value="<?php  echo $EXTENSIONENDDATE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
               </tr>
			   </table> 
               </div>       
                 
              <table class="table-responsive" style="margin-top:4px;">
              <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Responsibility center</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="RESPONSIBILITYCENTER" name="RESPONSIBILITYCENTER"  
				value="<?php  echo $RESPONSIBILITYCENTER; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Accountable </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="ACCOUNTABLE" name="ACCOUNTABLE"   
                value="<?php  echo $ACCOUNTABLE; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
             
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Consulted</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="CONSULTED" name="CONSULTED"    
                value="<?php  echo $CONSULTED; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th> 

				<th style="width:20%;border:2px solid #a9abae;">Informed</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="INFORMED" name="INFORMED"    
                value="<?php  echo $INFORMED; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>
                 
              </tr>
			  </table> 
                   
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Contract manager </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="CONTRACTMANAGER" name="CONTRACTMANAGER"  value="<?php  echo $CONTRACTMANAGER; ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
                 <th style="width:15%;border:2px solid #a9abae;">Status</th>
				<th style="width:15%;border:2px solid #a9abae;"> <select  id="STATUS" name="STATUS"   value="<?php  echo $STATUS; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; "> 
                <option value="<?php  echo $STATUS; ?>"><?php  echo $STATUS; ?></option>
                <option>RUNNING</option>
                <option>COMPLETED</option>
                <option>STALLED</option>
                </select>
                
                 </th>  
                 </th>
				<th style="width:20%;border:2px solid #a9abae;">  
				<input type="submit" name="update" value="Update" style="height: 24px;">
				&nbsp &nbsp &nbsp
				<a href="cotracts_project_mgt.php"> Close <span class="sr-only">(current)</span></a>  </th>   
                </tr>
			  </table>     
              </div>
			  </div>  
              </form> 

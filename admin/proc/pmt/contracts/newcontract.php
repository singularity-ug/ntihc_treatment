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
            
     <form class="form-horizontal" action="contracts/contracts_process.php" method="POST" style="height:auto; font-weight:normal; background-color:#fff;">  
    
          
     <table class="table-responsive" style="margin-top:4px;">
                <table class="table" style="border:0px;">
                <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Service provider </th>
				<th style="width:80%;border:2px solid #a9abae;"> <input type="text"  id="SERVICEPROVIDER" name="SERVICEPROVIDER"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>   
                </tr>
			    </table> 
             
              <table class="table-responsive" style="margin-top:-23px;">
              <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Project / Contract </th>
				<th style="width:80%;border:2px solid #a9abae;"> <input type="text"  id="CONTRACT" name="CONTRACT"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
                    
                 
              </tr>
			  </table> 
              
              
               <table class="table-responsive" style="margin-top:-23px;">
              <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Procurement type </th>
				<th style="width:30%;border:2px solid #a9abae;"> <select  id="PROCUREMENTTYPE" name="PROCUREMENTTYPE"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; "> 
                <option></option>
                <option>Contract</option>
                <option>LPO</option>
                </select>
                
                 </th>  
                
                 <th style="width:20%;border:2px solid #a9abae;">Project / Contract value </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="CONTRACTVALUE" name="CONTRACTVALUE"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
              
            
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Payment shedule </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="PAYMENTSHEDULE" name="PAYMENTSHEDULE"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Tenure </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="TENURE" name="TENURE"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
               
       
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Start date</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="date"  id="STARTDATE" name="STARTDATE"   
				 style="width:100%; font-weight:normal; background-color:#fff; height:20px;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">End date </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="date" id="CONTRACTENDDATE" name="CONTRACTENDDATE"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:20px;">   </th>   
                 
              </tr>
			  </table> 
              
               
              <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Remind date</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="date"  id="REMINDDATE" name="REMINDDATE"   
				 style="width:100%; font-weight:normal; background-color:#fff; height:20px;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Contract status </th>
				<th style="width:30%;border:2px solid #a9abae;"> <select type="text" id="STATUS" name="STATUS"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff; height:20px;">  
                <option value="RUNNING"> Running</option>
                
                 </th>   
                 
              </tr>
			  </table> 
              
                
               
              <table class="table-responsive" style="margin-top:-10px;">
              <table class="table" style="border:0px;">
              <tr> 
              <th style="width:20%;border:2px solid #a9abae;">Breakdown</th>
              <th style="width:30%;border:2px solid #a9abae;background-color:#F9F9F9;">
                <input type="radio" class="switch-input" name="BREAKDOWN" value="DEFAULT" id="PROJECT" checked="">
			    <label for="DEFAULT" class="switch-label switch-label-off">PROJECT</label> 
                <input type="radio" class="switch-input" name="BREAKDOWN" value="CONTRACT" id="BREAKDOWN">
			    <label for="ACTIVATE" class="switch-label switch-label-on">CONTRACT</label>
                </th>   
			   
				 
                <th style="width:20%;border:2px solid #a9abae;background-color:#F9F9F9;">Source of funding </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="FUNDING" name="FUNDING"  placeholder="Applies to projects" 
				style="width:100%; font-weight:normal; background-color:#F9F9F9;">   </th>   
                 
              </tr>
			  </table> 
             
              
              <table class="table-responsive" style="margin-top:-23px;">
              <table class="table" style="border:0px;">
              <tr> 
              <th style="width:20%;border:2px solid #a9abae;background-color:#F9F9F9;">Project purpose</th>
              <th style="width:80%;border:2px solid #a9abae;background-color:#F9F9F9;">
               <textarea id="PROJECTPURPOSE" name="PROJECTPURPOSE" placeholder="Applies to projects" 
				  style="width:100%; font-weight:normal; background-color:#F9F9F9; height:22px;"></textarea> </th>    
              </tr>
			  </table> 
              
              <table class="table-responsive" style="margin-top:-23px;">
              <table class="table" style="border:0px;">
              <tr> 
              <th style="width:20%;border:2px solid #a9abae;background-color:#F9F9F9;">Project cordinator (s)</th>
              <th style="width:80%;border:2px solid #a9abae;background-color:#F9F9F9;">
               <textarea id="PROJECTCORDINATOR" name="PROJECTCORDINATOR" placeholder="Applies to projects" 
			  style="width:100%; font-weight:normal; background-color:#F9F9F9; height:22px;"></textarea> </th>    
              </tr>
			  </table> 
               
                
              <table class="table-responsive" style="margin-top:-10px;">
              <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Responsibility center</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="RESPONSIBILITYCENTER" name="RESPONSIBILITYCENTER"   
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                 <th style="width:20%;border:2px solid #a9abae;">Accountable </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="ACCOUNTABLE" name="ACCOUNTABLE"   
				  style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
             
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Consulted</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="CONSULTED" name="CONSULTED"     
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th> 

				<th style="width:20%;border:2px solid #a9abae;">Informed</th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="INFORMED" name="INFORMED"   
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>
                 
              </tr>
			  </table> 
                   
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:20%;border:2px solid #a9abae;">Project / contract manager </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text" id="CONTRACTMANAGER" name="CONTRACTMANAGER"  
				 style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                
                <th style="width:30%;border:2px solid #a9abae;"> </th>
				<th style="width:20%;border:2px solid #a9abae;">  
				<input type="submit" name="button" id="button" value="Save" /> 
				&nbsp &nbsp &nbsp
				<a href="cotracts_project_mgt.php"> Close <span class="sr-only">(current)</span></a>  </th>   
                </tr>
			  </table>     
              </div>
			  </div>  
              </form> 

 <center> <p style="color:#000; font-weight:bold;font-size:13px;"> <b>CHEQUE PAYMENT VOUCHER</b> </p> </center> 

         <form class="form-horizontal" action="processpmts.php" method="POST">
   
              <input type="text" name="DATECREATED" id="DATECREATED" />
              
        
        
    <table class="table table-bordered" id="mytable100">
    <thead>
      <tr  class="  ">  
      <th>*</th>
    <th style="width:40%;">DETAILS OF PAYMENT </th>
   <th style="width:30%;">BUDGET DETAILS</th>
   <th style="width:15%; text-align:center;">ACCOUNT / CODE</th>   
   <th style="width:15%; text-align:center;">AMOUNT (UGX)</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
        <input type="button" onClick="addRow16('mytable100')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable100')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">
        
     <br>
      
        <div class="form-group">
                                            <label class="control-label col-sm-4"><b>TOTAL Shs.</b></label>
                                            <div class="col-sm-8">
                                                <input type="numeric" name="SUBTOTAL" id="SUBTOTAL"  style="width:100%; text-align:right;">
                                        </div>
                                        </div> 
                                     

         
                
      <input type="text" name="REQUISITIONID" id="REQUISITIONID" value=" <?php echo uniqid();?>" 
	  readonly="readonly" style="width:100%; text-align:left;background-color:#f0f0f0;"> 
              
                       
<br>
<table class="table table-bordered ">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
        <th style="border-bottom-color:white;font-weight:bold; width:50%; text-align:center;">Send to: </th>
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"></th>  
         
      </tr>
    </thead>   
    <tbody>
      <tr>
        <td style="background-color:#f9f9f9;"></td>
        
        <td style="background-color:#f9f9f9;">
        <select name="SENDTO" id="SENDTO"  required="required" style="width:100%; text-align:center;">
                  ddd     = "<?php   echo $stdd; ?>"; 
                  </select></td>  
        
        <td style="background-color:#f9f9f9;"> </td>  
    </tr> 
    </tbody>
    </table> 
<br>

 <center> <input type="submit" name="button" id="button" value="Save Order " style= " font-size:15px; font-weight:bold; border-radius:11px; "/> </center>
  </form>
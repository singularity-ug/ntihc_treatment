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
  $REQUESTDATE = '';
  $VOUCHER_NO = '';
  $IDNUMBER = '';
  $APPLICANTNAME  = '';
  $AP_DEPARTRMENT = '';  
  $impdescription = array();
  $impcurrency    = array();
  $impdebit       = array(); 
  $impcode    = array();  
  $BUDGETLINE = ''; 
  $IMPAUTHORISEDBY = '';
  $IMPAUTHORISEDDATE = '';
  $IMPAPPROVEDBY = '';
  $IMPAPPROVEDDATE = ''; 
  $ORDERNO = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "dbmultiple";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM imprest  WHERE `ORDERNO` = '$id' ";

 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $REQUESTDATE      = $row['REQUESTDATE'];
     $VOUCHER_NO       = $row['VOUCHER_NO'];
	 $IDNUMBER         = $row['IDNUMBER'];
     $APPLICANTNAME    = $row['APPLICANTNAME'];
     $AP_DEPARTRMENT   = $row['AP_DEPARTRMENT'];
     $impdescription[] = $row['IMPREST_DESCRIPTION'];
     $impcurrency[]    = $row['IMP_CURRENCY'];
     $impdebit[]       = $row['IMP_DEBIT'];  
     $BUDGETLINE       = $row['BUDGETLINE'];
	 $impcode[]        = $row['CODE'];
     $IMPAUTHORISEDBY  = $row['IMPAUTHORISEDBY'];
	 $IMPAUTHORISEDDATE = $row['IMPAUTHORISEDDATE'];
     $IMPAPPROVEDBY    = $row['IMPAPPROVEDBY'];
	 $IMPAPPROVEDDATE  = $row['IMPAPPROVEDDATE']; 
	 $ORDERNO          = $row['ORDERNO'];  
      } 
     ?>
  
 
         <form id="form1" class="form-horizontal" action="config/inline/pettycashout_update.php" method="POST" style="height:auto; font-weight:normal;">  
               
               <div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logs.PNG" width="100%" height="100%">
</div>  
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">CASH PAYMENT VOUCHER </legend> </center> 
          
       
        <table class="table table-bordered">
    <thead>
      <tr  class="">
        <th> Serial No.</th>
        <th>  <input type="text" name="ORDERNO" id="ORDERNO"value="<?php  echo $ORDERNO; ?>"  readonly="readonly" 
        style="background-color:#fff; width:100%;">  </th>
         <th> Vourcher No.</th>
        <th> <input type="text" name="VOUCHER_NO" id="VOUCHER_NO" value="<?php  echo $VOUCHER_NO; ?>" required="required" 
        style="background-color:white; text-align:center;width:100%; border-color:green;"/> </th>
        </tr>
    </thead> 
    </table> 
    
       
                
      <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; "></th>
        <th style="border-bottom-color:white; "></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>Requisition date</B></td>
        <td>  <input type="text" name="REQUESTDATE" id="REQUESTDATE"  value="<?php  echo $REQUESTDATE; ?>" readonly="readonly" style="background-color:#fff; width:100%;"></td> 
      </tr>
      <tr>
        <td><b>Applicant name</b></td>
        <td><input type="text"  name="APPLICANTNAME" id="APPLICANTNAME" value="<?php  echo $APPLICANTNAME; ?>"readonly="readonly" style="background-color:#fff; width:100%;">  </td> 
      </tr>
      <tr>
        <td><b>PF. Nummber</b></td>
        <td><input type="text" name="IDNUMBER"  id="IDNUMBER" value="<?php  echo $IDNUMBER; ?>"readonly="readonly" style="background-color:#fff; width:100%;">  </td> 
      </tr>
      <tr>
        <td><b>Department</b></td>
        <td> <input type="text" name="AP_DEPARTRMENT"  value="<?php  echo $AP_DEPARTRMENT; ?>"readonly="readonly" style="background-color:#fff; width:100%;">  </td> 
      </tr> 
    </tbody>
  </table>
                
                
                 
  <table class="table table-striped" id="mytable11" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th>DESCRIPTION FOR WHICH CASH IS REQUIRED</th>
   <th>CURRENCY</th>
   <th>AMOUNT</th> 
   <th>CODE</th>
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($impdescription); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($impdebit[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="impdescription[]" readonly="" type="text" value="<?php  echo $impdescription[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; "/></td>
                                                   
                                                  <td> <input  name="impcurrency[]" readonly="" type="text" value="<?php  echo $impcurrency[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; "/></td> 
                                                  
                                                  <td> <input  name="impdebit[]" readonly="" type="numeric" value="<?php echo $impdebit[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; "/></td> 
                                                  
                                                  <td> <input  name="impcode[]" readonly="" type="numeric" value="<?php echo $impcode[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; "/></td> 
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                 
    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:60%;"> </th> 
        <th style="border-bottom-color:white; width:40%;">Amount approved</th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td> </td> 
        <td><input type="text"  name="TOTALSUM" id="TOTALSUM" value="<?php echo $totals;?>" readonly="" style="background-color:#fff;width:100%;"></td> 
       
      </tr>
    </tbody>
  </table> 
  
  <br>
 
   <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; "> </th>
        <th style="border-bottom-color:white; ">Signatory</th>  
        <th style="border-bottom-color:white; ">Date</th> 
      </tr>
    </thead>   
    <tbody>
      <tr>
         <tr>
         <th>Approved by</th>
        <td><input type="text" name="IMPAPPROVEDBY" id="IMPAPPROVEDBY"  value="<?php  echo $IMPAPPROVEDBY; ?>" readonly=""  style="width:100%; text-align:left;"></td>
        <td><input type="date" name="IMPAPPROVEDDATE" id="IMPAPPROVEDDATE" value="<?php  echo $IMPAPPROVEDDATE; ?>" readonly=""  style="width:100%; text-align:center;"></td>
     </tr>
    <tr>
    
     <tr>
         <tr>
         <th>Paid by</th>
        <td><input type="text" name="PAIDBY" id="PAIDBY"   value="<?php echo $nameofuser; ?> "  style="width:100%; text-align:left;"></td>
        <td><input type="date" name="PAIDDATE" id="PAIDDATE" value="<?php echo date('d-m-y'); ?>"  style="width:100%; text-align:center;"></td>
     </tr>
    <tr>
    

    <tr>
        <th>Recieved by</th>
        <td><input type="text"  class="form-control" name="RECIEVEDBY"id="RECIEVEDBY" required="required" style="width:100%; text-align:left;border-color:green;">
        </td>
        <td><input type="date" class="form-control" id="RECIEVEDDATE" name="RECIEVEDDATE"  value="<?php echo date('d-m-y'); ?>"  style="width:100%; text-align:center;">

     </td>
     </tr>
        </tr>
     </tbody>
  </table>
 <br>
     
      <center> <input type="submit" name="buttonsend" id="button" value="Cash out" /> </center>   
      
        </form>   
                 
   <!-- /.START IMPREST REQUEST SCRIPT -->

     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("TOTALSUM").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="impdescription[]" id="impdescription_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	 var  s2b =  '<select name="impcurrency[]" required="required"  id="impcurrency_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="impdebit[]" id="impdebit_'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';

     var  s4c =  '<input type="numeric" name="impcode[]" id="impcode'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
				
		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>'+
								  '<td>'+s4c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow166(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="impdescription_"+x;
          table.rows[x].cells[2].childNodes[0].id="impcurrency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="impdebit_"+x;
		  table.rows[x].cells[4].childNodes[0].id="impcode"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

  <!-- /.END IMPREST REQUEST SCRIPT -->

               
             
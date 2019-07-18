  <?php
  $id = $_GET['q']; 
  $DATECREATED = '';
  $PAYEE = '';
  $PROJECT = '';
  $BUDGETLINEDESCRIPTION  = '';
  $PMTNO = '';
  $CHEQUENO = '';
  $AMOUNTINWORDS = ''; 
  $desc = array();
  $qty = array();
  $uom = array(); 
  $marktp = array();
  $SUBTOTAL = ''; 
  $TIMESTAMP=''; 
  $FINANCIALYEAR='';
  $PREPTITLE='';
  $PREPNAME='';
  $PREPDEPT='';
  $BUDGETAMOUNT='';
  $EXPENDITURETODATE='';
  $BALANCEONBUDGET=''; 
  $AMOUNTREQUESTED=''; 
  $VOUCHERID=''; 

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "dbmultiple";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM chqpayments  WHERE `VOUCHERID` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $DATECREATED = $row['DATECREATED'];  
     $PAYEE = $row['PAYEE'];
     $PROJECT  = $row['PROJECT'];
     $BUDGETLINEDESCRIPTION = $row['BUDGETLINEDESCRIPTION'];
     $PMTNO = $row['PMTNO'];
     $CHEQUENO = $row['CHEQUENO'];
     $AMOUNTINWORDS = $row['AMOUNTINWORDS']; 
	 
	 $desc[] = $row['DESCRIPTION'];
     $qty[]    = $row['BUDGETDETAILS'];
     $uom[]       = $row['CODE'];   
	 $marktp[]        = $row['AMOUNTUGX'];
	  
     $SUBTOTAL = $row['SUBTOTAL']; 
     $TIMESTAMP = $row['TIMESTAMP'];
     $FINANCIALYEAR   = $row['FINANCIALYEAR'];
     $PREPTITLE = $row['PREPTITLE'];
     $PREPNAME = $row['PREPNAME'];
     $PREPDEPT = $row['PREPDEPT'];
     $BUDGETAMOUNT  = $row['BUDGETAMOUNT'];  
     $EXPENDITURETODATE=$row['EXPENDITURETODATE'];
     $BALANCEONBUDGET=$row['BALANCEONBUDGET'];
     $AMOUNTREQUESTED=$row['AMOUNTREQUESTED']; 
	 $VOUCHERID =$row['VOUCHERID']; 
      }

  ?>
 
 
 <style>
h9 {
    border-bottom: 1px solid #eee;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 1px solid #eee;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #eee;;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #eee;
    line-height: 1.0;
    padding: 1px;
    vertical-align: center;
   }

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
             table, th , td  {
                 border: 1px solid #eee;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 12px;
             	 color:#000000;
				 background-color: #fff;
             }
             table tr:nth-child(odd) {
             background:#ffffff;
             }
             table tr:nth-child(even) {
             background:#ffffff;
             }

</style>
  <div class="wrapper" style="background-color: #fff;">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body">   
                                      
  
<form id="form1" class="form-horizontal" action="config.php" method="POST" style="height:auto; font-weight:normal;">  
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="100%"> 
 <center> <p style="color:#000; font-weight:bold;font-size:12px;background-color:#fff;"> <b>CHEQUE PAYMENT VOUCHER</b> </p> </center> 
<hr  style="margin-top: -8px;">  
         <form class="form-horizontal" action="processpmts.php" method="POST">
   
         <input type="hidden" name="VOUCHERID" id="VOUCHERID" value="<?php echo $VOUCHERID; ?> " >
		 
     <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:16%;border:0px;">Payee </th>
				<th style="width:34%;border:0px;"> <input type="text"  name="PAYEE" id="PAYEE"  value="<?php echo $PAYEE; ?> "
				required="required" style="width:100%; font-weight:normal; background-color:#fff;border:0px;">  </th> 
				 <th style="width:14%;border:0px;"> Project </th>
                <td style="width:36%;border:0px;"> <input type="text" name="PROJECT" id="PROJECT"  value="<?php echo $PROJECT; ?> "
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </td>
              </tr>
			  </table>
			  
<table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;"> 
             <tr>
			    <th style="width:50%;border:0px;">Budget line description </th>  
				 <th style="width:14%;border:0px;"> Cheque Vr No. </th>
                <td style="width:36%;border:0px;"> <input type="text"   name="PMTNO" id="PMTNO"  value="<?php echo $PMTNO; ?> "
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;">  </td>
              </tr>
			  </table>
			  
			  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;"> 
             <tr> 
			    <th style="width:50%;border:0px;"><input type="text"  name="BUDGETLINEDESCRIPTION" id="BUDGETLINEDESCRIPTION"  value="<?php echo $BUDGETLINEDESCRIPTION; ?> "
				required="required" style="width:100%; font-weight:normal; background-color:#fff;border:0px;">  </th> 
				
				 <th style="width:14%;border:0px;"> Date</th>
                <td style="width:36%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED"  value="<?php echo $TIMESTAMP; ?> " 
				 style="width:100%; font-weight:normal; background-color:#fff;">  </td>
              </tr> 
            </table>
        
      
       <table class="table table-bordered" id="mytable100" style="margin-top:-15px">
    <thead>
      <tr  class="  ">  
      <th>*</th>
    <th style="width:65%;">DETAILS OF PAYMENT </th> 
   <th style="width:20%; text-align:center;">ACCOUNT / CODE</th>   
   <th style="width:15%; text-align:center;">AMOUNT (UGX)</th>
      </tr>
      </thead>
             <tbody >
                                                <?php  $tot = count($desc); $s=0;
                                                 for($s=0;$s<$tot;$s++){ ?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="desc[]" readonly="" type="text" value="<?php  echo $desc[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff; "/></td> 
												  
                                                  <td> <input  name="qty[]" readonly="" type="numeric" value="<?php  echo $qty[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff; text-align:center;"/></td> 
                                                  
                                                  <td> <input  name="marktp[]" readonly="" type="numeric" value="<?php echo $marktp[$s]; ?>"  class="form-control input-md" 
												  style= "width:100%; background-color:#fff;text-align:right;"/></td>
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
			 
	  
     <table class="table-responsive" style="margin-top:-20px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Cheque No.</th>
                <td style="width:30%"><input type="numeric" name="CHEQUENO" id="CHEQUENO"  value="<?php  echo $CHEQUENO; ?>"   
				required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td> 
				
                <th style="width:20%; text-align:right;">TOTAL Shs.</th>
                <td style="width:30%"><input type="numeric" name="SUBTOTAL" id="SUBTOTAL" value="<?php  echo $SUBTOTAL; ?>"  
				readonly="readonly"
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold;"></td>   
			 </tr>             
            </table>
			  
              <table class="table-responsive" style="margin-top:-10px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Amount in words.</th>
                <td style="width:80%"><input type="numeric" name="AMOUNTINWORDS" id="AMOUNTINWORDS"  value="<?php  echo $AMOUNTINWORDS; ?>"    
				required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td>    
			 </tr>             
            </table> 
			
			 <table class="table-responsive" style="margin-top:-10px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Prepared by:</th>
                <td style="width:30%"><input type="numeric" name="PREPTITLE" id="PREPTITLE"   readonly=""  value="<?php  echo $PREPTITLE; ?>"   
				style="width:100%; text-align:left;background-color:#fff;"></td>    
				<th style="width:20%; text-align:left;">Authorised by:</th>
                <td style="width:30%"><input type="numeric"    
				readonly="readonly"
				style="width:100%; text-align:left;background-color:#fff;"></td>   
			 </tr>             
            </table> 
			
			 
            <table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Reviewed and approved by:</th>
                <td style="width:30%"><input type="numeric"   readonly=""  
				style="width:100%; text-align:left;background-color:#fff;"></td>    
				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"><input type="numeric"    
				readonly="readonly"
				style="width:100%; text-align:left;background-color:#fff;"></td>   
			 </tr>             
            </table> 
			
			<table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Reviewed by:</th>
                <td style="width:30%"><input type="numeric" readonly="readonly"  
				style="width:100%; text-align:left;background-color:#fff;"></td>    
				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"><input type="numeric"   
				readonly="readonly"  
				style="width:100%; text-align:left;background-color:#fff;"></td>   
			 </tr>             
            </table>  
			 
                      
        <table class="table table-striped" style="background-color:#ffffff; margin-top:-10px; ">
     <thead>
     <tr>
     <th>Budget amount</th>
	 <th style="text-align:center;">Expenditure to date</th>
	 <th style="text-align:center;">Amount requested</th>
	 <th style="text-align:center;">Balance on budget</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <td style="width:25%;"><input type="text" name="BUDGETAMOUNT" id="BUDGETAMOUNT"    required="required"  value="<?php  echo $BUDGETAMOUNT; ?>"   
     style="width:100%; text-align:left;background-color:#fff;"></td>
	 
      <td style="width:25%;"><input type="text" name="EXPENDITURETODATE" id="EXPENDITURETODATE"  readonly="readonly" value="<?php  echo $EXPENDITURETODATE; ?>"   
     style="width:100%; text-align:center;background-color:#fff;"></td>
	 
	 <td style="width:25%;"><input type="text" name="AMOUNTREQUESTED" id="AMOUNTREQUESTED"  readonly="readonly"  value="<?php  echo $AMOUNTREQUESTED; ?>"   
     style="width:100%; text-align:center;background-color:#fff;"></td>
	 
	 <td style="width:25%;"><input type="text" name="BALANCEONBUDGET" id="BALANCEONBUDGET"  readonly="readonly"   value="<?php  echo $BALANCEONBUDGET; ?>"    
     style="width:100%; text-align:center;background-color:#fff;"></td>
     </tr>
    <tr>
   </tbody>
   </table>   
             </form>
			 
			 </div></div> 
			 

 <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="uom[]" id="uom_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';			 

	 var  s3cc = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">'; 

     var  s7gg = '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'" onkeyup="calcsubtt(\'mytable100\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';
		 

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+   
				                  '<td>'+s7gg+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId); 
  }

  function deleteRow16(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="desc_"+x;
		  table.rows[x].cells[2].childNodes[0].id="uom_"+x;
          table.rows[x].cells[3].childNodes[0].id="qty_"+x;  
		  table.rows[x].cells[6].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
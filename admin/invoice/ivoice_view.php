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
  $id = $_GET['q']; 
  $ORDERNO = ''; 
  $ATTENTIONTO = '';
  $TIMESTAMP = ''; 
  $mdes = array();
  $mqty = array();
  $mrte = array();
  $amot = array(); 
  $ACCOUNTNAME = '';
  $ACCOUNTNUMBER = '';
  $TOTALCOST = '';
  $CLIENTBANKNAME = '';
  $BRANCH = '';
  $SWIFTCODE = '';
   
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "dbmultiple";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM receiptinvoices  WHERE `DOCTYPE` = 'Invoice' AND `ORDERNO` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
  
     $ORDERNO = $row['ORDERNO'];
     $TIMESTAMP = $row['TIMESTAMP'];
     $ATTENTIONTO = $row['ATTENTIONTO']; 
	  
     $mdes = json_decode($row['DESCRIPTION']);
     $mqty = json_decode($row['QTY']);
     $mrte = json_decode($row['RATE']);
     $amot = json_decode($row['AMOUNT']); 
	 
     $ACCOUNTNAME = $row['ACCOUNTNAME'];
     $ACCOUNTNUMBER = $row['ACCOUNTNUMBER'];
     $CLIENTBANKNAME   = $row['CLIENTBANKNAME'];
     $BRANCH = $row['BRANCH']; 
     $SWIFTCODE =$row['SWIFTCODE']; 
	  
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
 
     
          <center> <p style="color:#000; font-weight:bold; font-size:15px; border:0px;">INVOICE </p> </center>
          <hr style="height:2px; background-color:red;margin-top:-10px;">
          <hr style="height:2px; background-color:green; margin-top:-21px;">
          <hr style="height:2px; background-color:yellow; margin-top:-21px;">
          
		    
		 
	  <div class="table-responsive">
            <table class="table">
              <tr>
			    <th style="width:66.6%"> </th>
                <th style="width:14%">Invoice No.</th>
                <td style="width:19.4%"><input type="numeric"  name="id" value="<?php  echo $id; ?>"  style="width:100%; text-align:center;"></td>
              </tr>
              <tr>
			    <th style="width:66.6%"> </th>
                <th style="width:14%"> Date</th>
                <td style="width:19.4%"> <input type="text"  name="TIMESTAMP"  value="<?php  echo $TIMESTAMP; ?>" style="width:100%; text-align:center;"></td>
              </tr> 
            </table>
			
			<input type="hidden"  id="id" name="id"  value="<?php  echo $id; ?>" >  
			
			<div class="table-responsive">
            <table class="table">
              <tr>
			    <th style="width:14%">Bill to: </th>
                <th style="width:86%"> <?php  echo $ATTENTIONTO; ?> </th> 
              </tr> 
            </table>
          
   
      <table class="table table-striped"  style="margin-top:-20px;">
      <table class="table table-striped" id="mytable11">
      <thead>
      <tr>
      <th>*</th>
        <th style="width:55.6%;">ITEM DESCRIPTION</th>  
        <th style="width:10%;text-align:center;">QTY</th>    
        <th style="width:14.4%;text-align:center;">RATE</th> 
        <th style="width:20%;text-align:center;">AMOUNT</th>   
      </tr>
      </thead>
             <tbody >
			  <?php  $tot = count($mdes); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($amot[$s]);?>
															  
                                                            <tr >
             <td><input type="checkbox" checked="checked" /></td>
             <td> <input  name="mdes[]" readonly="readonly" type="text" value="<?php  echo $mdes[$s]; ?>" class="form-control input-md" 
			 style= "width:100%; background-color:#fff;"/></td>
             <td> <input  name="mqty[]" readonly="readonly" type="numeric" value="<?php  echo $mqty[$s]; ?>" class="form-control input-md" 
			 style= "width:100%; background-color:#fff;text-align:center;"/></td>
                                                   
             <td> <input  name="mrte[]" readonly="readonly" type="numeric" value="<?php echo $mrte[$s]; ?>" class="form-control input-md" 
			 style= "width:100%; background-color:#fff;text-align:right;"/></td>
             <td> <input  name="amot[]" readonly="readonly" type="numeric" value="<?php echo $amot[$s]; ?>"  class="form-control input-md" 
			 style= "width:100%; background-color:#fff; text-align:right;"/></td>
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
        

		
		
          <div class="table-responsive">
            <table class="table">
              <tr>
			    <th style="width:66.6%"> </th>
                <th style="width:14%">Sub total:</th>
                <td style="width:19.4%"><input type="numeric" name="SUBTOTAL"  value="<?php echo $totals;?>"  style="width:100%; text-align:right;"></td>
              </tr>
              <tr>
			    <th style="width:66.6%"> </th>
                <th style="width:14%"> Tax %</th>
                <td style="width:19.4%"> <input type="numeric" name="TAX"  style="width:100%; text-align:right;"></td>
              </tr>
              <tr>
			    <th style="width:66.6%"> </th>
                <th style="width:14%">Grand total</th>
                <td style="width:19.4%"><input type="numeric" name="TOTALCOST"  style="width:100%; text-align:right;"></td>
              </tr>
            </table>


	 
    <table class="table table-bordered"><b>Please make cheque payment(s) / transfer(s) to the following account details</b>
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; ">A/c name</th>
        <th style="border-bottom-color:white; text-align:left;">A/c number</th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td><input type="text"  name="ACCOUNTNAME" id="ACCOUNTNAME" value="<?php  echo $ACCOUNTNAME; ?>" readonly="" 
		style=" text-align:left; background-color:#fff;width:100%;"></td>
        <td><input type="text"  name="ACCOUNTNUMBER" id="ACCOUNTNUMBER" value="<?php  echo $ACCOUNTNUMBER; ?>" 
		readonly=""  style="text-align:left; background-color:#fff; width:100%;"></td>  
          
      </tr>
    </tbody>
  </table> 
  
  <table class="table table-bordered" style="margin-top:-20px;">
    <thead>
      <tr  class="  "> 
        <th style="border-bottom-color:white; text-align:left;">Bank name</th>
        <th style="border-bottom-color:white; text-align:left;">Branch</th>  
		<th style="border-bottom-color:white; text-align:left;">Swift code</th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td><input type="text"  name="CLIENTBANKNAME" id="CLIENTBANKNAME" value="<?php  echo $CLIENTBANKNAME; ?>" readonly 
		style="text-align:left; background-color:#fff; width:100%;"></td>
		  <td><input type="numeric"  name="BRANCH" id="BRANCH" value="<?php  echo $BRANCH; ?>" readonly 
		 style="text-align:left; background-color:#fff; width:100%;"></td>
		<td><input type="numeric"  name="SWIFTCODE" id="SWIFTCODE" value="<?php  echo $SWIFTCODE; ?>" readonly 
	   style="text-align:left; background-color:#fff; width:100%;"></td>
	   
       
       
      </tr>
    </tbody>
  </table> 
  
  
  
	<div class="table-responsive">
            <table class="table">
              <tr>
			    <th style="width:50%"> </th>
                <th style="width:7%">Sign</th>
                <td style="width:43%"><input type="text" name=" "   style="width:100%; text-align:center;"></td>
              </tr>
              <tr>
			    <th style="width:50%"> </th>
                <th style="width:7%"> For:</th>
                <td style="width:43%"> <input type="text" name=" " value="Naguru Teenage Information and Health Center" style="width:100%;"</th>
              </tr> 
            </table>
  
	  
    <!-- /.START INVOICE SCRIPT -->

     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("INVOICESUBTOTAL").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="mdes[]" id="mdes'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+               
	 'background-color:#fff; width:100%;">';
	 
	 var  s2b = '<input type="numeric" name="mqty[]" id="mqty'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+               
	 'background-color:#fff; width:100%;">';
  
     var  s4c =  '<input type="numeric" name="mrte[]" id="mrte'+rowCount+'"  required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
				
	 var  s5d =  '<input type="numeric" name="amot[]" id="amot'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';			


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s4c+' </td>'+
								  '<td>'+s5d+' </td>';
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
		  table.rows[x].cells[1].childNodes[0].id="mdes_"+x;
          table.rows[x].cells[2].childNodes[0].id="mqty_"+x;
		  table.rows[x].cells[3].childNodes[0].id="mrte_"+x;
		  table.rows[x].cells[4].childNodes[0].id="amot_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

  <!-- /.END IMPREST REQUEST SCRIPT -->              
  

  
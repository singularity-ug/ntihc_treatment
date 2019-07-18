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
  $PDECODE = '';
  $CATEGORY = '';
  $FINANCIALYEAR  = '';
  $SEQUENCENUMBER = '';
  $SUBJECTOFPROCUREMENT = '';
  $PROCUREMENTPLANREF = '';
  $LOCATIONFORDELIVERY = '';
  $DATEREQUIRED = '';
  $descc = array();
  $qty = array();
  $uom = array();
  $escost = array();
  $marktp = array();
  $SUBTOTAL = '';
  $TAX = '';
  $TOTALCOST = '';
  $RFPUSERNAME = '';
  $RFPSIGNATURE = '';
  $RFPTITLE = '';
  $RFPDATE = ''; 
  $CORNAME='';
  $CORSIGNATURE='';
  $CORTITLE='';
  $CORDATE='';
  $VOTE_HEADNO='';
  $PROGRAMME='';
  $SUBPROGRAMME='';
  $ITEM='';
  $BALANCEREMAINING='';
  $AONAME='';
  $AOSIGNATURE='';
  $AOTITLE='';
  $AODATE='';
  $THRESHOLD='';
  $THRESHOLDREASON='';
  $REQUISITIONID='';
  $RFPFILENUMBER='';
  $INITIATORDEPT='';
  $OFFICERALLOCATED='';
  $JOBNUMBER='';

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM procreqn  WHERE `REQUISITIONID` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $PDECODE = $row['PDECODE'];
     $CATEGORY = $row['CATEGORY'];
     $FINANCIALYEAR  = $row['FINANCIALYEAR'];
     $SEQUENCENUMBER = $row['SEQUENCENUMBER'];
     $SUBJECTOFPROCUREMENT = $row['SUBJECTOFPROCUREMENT'];
     $PROCUREMENTPLANREF = $row['PROCUREMENTPLANREF'];
     $LOCATIONFORDELIVERY = $row['LOCATIONFORDELIVERY'];
     $DATEREQUIRED = $row['DATEREQUIRED'];
	 
	 $descc[] = $row['DESCRIPTION'];
     $qty[]    = $row['QUANTITY'];
     $uom[]       = $row['UNITOFMEASURE'];  
     $escost[]       = $row['ESTIMATEDCOST'];
	 $marktp[]        = $row['MARKETPRICE'];
	  
     $SUBTOTAL = $row['SUBTOTAL'];
     $TAX = $row['TAX'];
     $TOTALCOST   = $row['TOTALCOST'];
     $RFPUSERNAME = $row['RFPUSERNAME'];
     $RFPSIGNATURE = $row['RFPSIGNATURE'];
     $RFPTITLE = $row['RFPTITLE'];
     $RFPDATE  = $row['RFPDATE'];  
     $CORNAME=$row['CORNAME'];
     $CORSIGNATURE=$row['CORSIGNATURE'];
     $CORTITLE=$row['CORTITLE'];
     $CORDATE=$row['CORDATE'];
     $VOTE_HEADNO=$row['VOTE_HEADNO'];
     $PROGRAMME=$row['PROGRAMME'];
     $SUBPROGRAMME=$row['SUBPROGRAMME'];
     $ITEM=$row['ITEM'];
     $BALANCEREMAINING=$row['BALANCEREMAINING'];
     $AONAME=$row['AONAME'];
     $AOSIGNATURE=$row['AOSIGNATURE'];
     $AOTITLE=$row['AOTITLE'];
     $AODATE=$row['AODATE'];
	 $THRESHOLD=$row['THRESHOLD'];
     $THRESHOLDREASON=$row['THRESHOLDREASON']; 
	 $REQUISITIONID=$row['REQUISITIONID']; 
	 $RFPFILENUMBER=$row['RFPFILENUMBER'];
	 $INITIATORDEPT=$row['INITIATORDEPT'];
	 $OFFICERALLOCATED=$row['OFFICERALLOCATED'];
	 $JOBNUMBER=$row['JOBNUMBER'];
	 
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

 <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SERVICEPROVIDER"+num).val(data[2]);
  $("#SVPADDRESS").val(data[2]);
  $("#SVPLOCATION").val(data[3]);       
      
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "search_supplier.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result); 
}
  });
}
} 
</script>

<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
               <div class="modal-body">                                      
 <div class="col-sm-1">
 </div>
 
 <div class="col-sm-10">
<img src="../../../assets/img/logsbig.PNG" width="100%" height="100%">
 
      <center> <p style="color:#000; font-weight:bold;font-size:10px; background-color:#fff; ">  LOCAL PURCHASE ORDER  </p> </center> 
  
        <form id="form1" class="form-horizontal" action="lpo_general_doc.php" method="POST" style="height:auto; font-weight:normal;">  
        <br><br>
        <input type="hidden" name="REQUISITIONID" id="REQUISITIONID" value="<?php  echo $REQUISITIONID; ?>"  >
              
         <input type="hidden" name="JOBNUMBER" id="JOBNUMBER" value="<?php  echo $JOBNUMBER; ?>"  >
                    
        <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:50%; text-align:left; border:0px;"> 
               <input type="text" name="SERVICEPROVIDER"  onKeyUp="domee(this)"  id="SERVICEPROVIDER"  placeholder="Order to" required="required" autocomplete="off"
				style="width:100%; text-align:left;background-color:#fff; text-align:left; "></td> 
                
               <th style="width:21%; text-align:left; border:0px;"> </th> 
                 
                 <th style="width:13.25%; border:0px; text-align:left;">Order No.</th>
                 <td style="width:14.75%; border:0px;"><input type="text" name="LPONO" id="LPONO"  
                 value=" "    readonly="readonly"
				 style="width:100%; text-align:left;background-color:#fff; "></td>  
			  
			</tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:50%; text-align:right; border:0px;">  
                <input type="text" name="SVPADDRESS" id="SVPADDRESS"   placeholder="Post address"    
				style="width:100%; text-align:left;background-color:#fff; "></td> 
                
                <th style="width:21%; text-align:left; border:0px;"> </th> 
                
                 <th style="width:13.25%; text-align:left; border:0px;">Date</th>
                <td style="width:14.75%; border:0px;"><input type="date" id="DATECREATED" name="DATECREATED" value=" "  required="required" 
				style="width:100%; text-align:left;background-color:#fff;height: 21px; "></td>  
			 </tr>             
            </table>
             
             <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:50%; text-align:right; border:0px;">  <input type="text" name="SVPLOCATION" id="SVPLOCATION" placeholder="Location"   
                style="width:100%; text-align:left;background-color:#fff;"></td> 
                <th style="width:21%; text-align:left; border:0px;"> </th> 
                 <th style="width:13.25%; border:0px; text-align:left;"> </th>
                <td style="width:14.75%; border:0px;"> </td>  
			 </tr>             
            </table>
             
          <div class="col-sm-4"> <div id="res"> </div> </div> 
         
   <p style="font-weight:bold;">Please deliver the following items.</p>
      
<br>
        
       <table class="table table-bordered" id="mytable100" style="margin-top:-15px">
    <thead>
      <tr  class="  ">  
      <th>*</th>
     <th style="width:43%;">DESCRIPTION </th> 
      <th style="width:18%;">UNIT OF MEASURE</th>
   <th style="width:10%; text-align:center;">QUANTITY</th>  
   <th style="width:13.25%; text-align:center;">RATE</th>
   <th style="width:14.75%; text-align:center;">AMOUNT</th>  
      </tr>
      </thead>
             <tbody >
                                                <?php  $tot = count($descc); $s=0;
                                                 for($s=0;$s<$tot;$s++){ ?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="descc[]" required="" type="text" value="<?php  echo $descc[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff; "/></td>
												   <td> <input  name="uom[]" required="" type="text" value="<?php  echo $uom[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff;"/></td>
												  
                                                  <td> <input  name="qty[]" required="" type="numeric" value="<?php  echo $qty[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff; text-align:center;"/></td> 
                                                 
                                                  <td> <input  name="escost[]" required="" type="numeric" value="<?php echo $escost[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff;text-align:right;"/></td>
                                                  <td> <input  name="marktp[]" required="" type="numeric" value="<?php echo $marktp[$s]; ?>"  class="form-control input-md" 
												  style= "width:100%; background-color:#fff;text-align:right;"/></td>
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
			
			
  

  <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:left; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">SUB TOTAL</th>
                <td style="width:14.75%"><input type="numeric" id="SUBTOTAL"   name="SUBTOTAL"  name1="SUBTOTALD[]"  value="<?php  echo $SUBTOTAL; ?>"  
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold;"></td>  
			  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">VAT</th>
                <td style="width:14.75%"><input  class="qty" type="text" id="qty"  name="TAX"   name1="qty[]"  autocomplete="off" 
				style="width:100%; text-align:right;background-color:#fff;font-weight:bold;"></td>  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr> 
                 <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">GRAND TOTAL</th>
                <td style="width:14.75%"><input type="text" id="TOTALCOST" name="TOTALCOST"  name1="TOTALCOST[]"  autocomplete="off"  required=""
				style="width:100%; text-align:right;background-color:#fff;font-weight:bold;"></td>  
			  
              <input type="hidden" id="TAXCOST" name="TAXCOST"  name1="TAXCOST[]"  >
              
			</tr>             
            </table>
            
            <div id="grands">
<input type="hidden" name="grans" id="grans"> 
</div>

<script type="text/javascript">
$(document).ready(function() { 
	    $(".qty").keyup(function() {
        var grandTotals = 0;
        $("input[name1='qty[]']").each(function (index) {
            var qty = $("input[name1='qty[]']").eq(index).val();
            var SUBTOTALD = $("input[name1='SUBTOTALD[]']").eq(index).val();
            var TAXCOST = parseInt(qty) /100 * parseInt(SUBTOTALD); 
		    var TOTALCOST = parseInt(SUBTOTALD) - parseInt(TAXCOST); 

            if (!isNaN(TAXCOST)) {
                $("input[name1='TAXCOST[]']").eq(index).val(TAXCOST);
                grandTotal = parseInt(grandTotals) + parseInt(TAXCOST);
                $('#grans').val(grandTotals);
            } 
			if (!isNaN(TOTALCOST)) {
                $("input[name1='TOTALCOST[]']").eq(index).val(TOTALCOST);
                grandTotal = parseInt(grandTotals) + parseInt(TOTALCOST);
                $('#grans').val(grandTotals);
            } 
			
        });
    });
});
</script>
          
            <table class="table-responsive" style="margin-top:0px;"> <b>Terms of delivery</b>
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%; border:0px;"><textarea name="TERMSOFDELIVERY" id="TERMSOFDELIVERY" style="width:100%;" >  </textarea> 
				 </td>  
			  
			 </tr>             
            </table>
               
              <table class="table-responsive" style="margin-top:-19px;"> 
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:10%;border:0px;">  </th>
				<th style="width:23.3333333%;border:0px;"> <b> Approved by<b> </th>
                <th style="width:33.3333333%; border:0px;"> </th> 
				 <th style="width:10%; border:0px;">   </th>
                <td style="width:23.3333333%;border:0px;"> <b>Reviewed and approved by<b> </td>
              </tr>
              <tr>
			    <th style="width:10%;font-weight:normal;"> Name</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" name="APPROVERNAME" id="APPROVERNAME"  
				  style="width:100%; font-weight:normal; background-color:#fff;border:0px;"> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Name </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" name="REVNAME" id="REVNAME"  
				  style="width:100%; font-weight:normal; background-color:#fff;border:0px;"> </th>
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;"> Signature</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" readonly="readonly"
				 style="width:100%; font-weight:normal; background-color:#fff;border:0px;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;"> Signature</th>
                <td style="width:23.3333333%"><input type="text" class="form-control"  readonly="readonly"
			     style="width:100%; font-weight:normal; background-color:#fff;border:0px;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Title </th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" id="APPROVERTITLE" name="APPROVERTITLE"    
				  style="width:100%; font-weight:normal; background-color:#fff;border:0px;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Title </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" id="REVTITLE" name="REVTITLE"   
				 style="width:100%; font-weight:normal; background-color:#fff;border:0px;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Date </th>
				<th style="width:23.3333333%">  <input type="date" class="form-control" id="APPROVEDDATE" name="APPROVEDDATE"    
			    style="width:100%; font-weight:normal; background-color:#fff;border:0px;height:20px;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Date </th>
                <td style="width:23.3333333%"><input type="date" class="form-control" id="REVDATE"  name="REVDATE"  
				 style="width:100%; font-weight:normal; background-color:#fff;border:0px;height:20px;"></td>
              </tr>
            </table>  
             <br>
              
				<input type="hidden" name="ORDERTYPE" id="ORDERTYPE" value="ALERTED" >
			 
              <input type="hidden" name="ORDERSERIALID" id="ORDERSERIALID"  value=" <?php echo uniqid();?>" readonly="">  
               
          
           
                <input type="hidden" name="DELIVERYSTATUS" id="DELIVERYSTATUS" value="PENDING" >
                
                 
             <th style="width:15.33333333%;border:0px;">Expected date of delivery </th>
             <th style="width:20%"> 
             <input type="date" name="DATEREQUIRED" id="DATEREQUIRED" style="width:100%; background-color:fff;height:20px;"> </th> 
             
             <th style="width:10%;border:0px ;">Remind date </th>
             <th style="width:20%"> 
             <input type="date" name="DELIVERYREMINDDATE" id="DELIVERYREMINDDATE" style="width:100%; background-color:fff;height:20px;"> </th> 
             
             </tr>   
             </table>      
             
           <table class="table-responsive" style="margin-top:0px;"><b>Note:</b> 
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEA" id="NOTEA"  value="Please quote this LPO number on your invoice." style="width:100%;" >   </td>  
			  
			 </tr>             
            </table>  
            
             <tables class="table-responsive" style="margin-top:-23px;">  
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEB" id="NOTEB" style="width:100%;" >   </td>  
			  
			 </tr>             
            </table> 
            
            <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEC" id="NOTEC" style="width:100%;" >   </td>  
			  
			 </tr>             
            </table>  
             
        <input type="hidden" name="DOCUMENTTYPE" id="DOCUMENTTYPE" value="LPO">      
              
        <input type="hidden" name="PREPAREDBY" id="PREPAREDBY" value="<?php echo $nameofuser; ?>" > 
        <input type="hidden" name="PREPTITLE" id="PREPTITLE" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="PREPFPNO" id="PREPFPNO" value="<?php echo $pf; ?>" >                  
        <center> <input type="submit" name="buttonsend" id="button" value="Save" /> </center> 
        <br><br>
        </form>
			
            </form>
			
			 
    <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[5].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" name="descc[]" id="descc_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="uom[]" id="uom_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';			 

	 var  s3cc = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="numeric" name="escost[]" id="escost_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';

     var  s7gg = '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'" onkeyup="calcsubtt(\'mytable100\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';
		 

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
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
		  table.rows[x].cells[1].childNodes[0].id="descc_"+x;
		  table.rows[x].cells[2].childNodes[0].id="uom_"+x;
          table.rows[x].cells[3].childNodes[0].id="qty_"+x; 
		  table.rows[x].cells[5].childNodes[0].id="escost_"+x;
		  table.rows[x].cells[6].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
   <!-- /.END PROCUREMENT REQUISITION  SCRIPT --> 

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
  $desc = array();
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

 $servername = "localhost";
 $username = "root";
 $password = "";
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
	 
	 $desc[] = $row['DESCRIPTION'];
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
      }

  ?>
 
   <?php
$connect = new mysqli("localhost", "root", "", "ahr");
$stss ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
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

<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body">                                      

<form id="form1" class="form-horizontal" action="proc_requisitionupdate.php" method="POST" style="height:auto; font-weight:normal;">  
                
<img src="../../assets/img/logsbig.PNG" width="100%" height="100%">
 
     
        <center> <p style="color:#000; font-weight:bold;font-size:13px; background-color:#fff;"> <b>REQUEST FOR APPROVAL OF PROCUREMENT</b> </p> </center> 
 
 
        <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:center;">PART 1: REQUEST BY USER DEPARTMENT FOR APPROVAL OF PROCUREMENT METHOD</th>
               </tr>
            <tr>
            </tbody>
            </table>
            
   <table class="table table-bordered" style="margin-top:-10px">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Procurement Reference Number </th>
               </tr>
            <tr>
            </tbody>
            </table>
             
        <table class="table table-bordered" style="font-weight:normal;" style="margin-top:-15px">
    <thead>
      <tr  class="  "> 
              <th style="border-bottom-color:white; width:25%;">Code of procuring and Disposing Entity</th>
              <th style="border-bottom-color:white; width:30;">Supplies / Works / Non-consultancy services</th>
              <th style="border-bottom-color:white; width:20%;">Financial period</th>
              <th style="border-bottom-color:white; width:25;">Sequence number</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><input type="text" name="PDECODE" value="<?php  echo $PDECODE; ?>"  readonly=" readonly" 
			  style="width:100%; text-align:center; background-color:#fff;"></td>

              <td><select class="form-control" name="CATEGORY"id="CATEGORY" style="width:100%; text-align:left;">
                 <option <?php if ($CATEGORY=='SUPPLIES') { echo 'selected="selected"'; } ?> >SUPPLIES</option>
                 <option <?php if ($CATEGORY=='WORKS') { echo 'selected="selected"'; } ?> >WORKS</option>
                 <option <?php if ($CATEGORY=='NON CONSULTANCY SERVICES') { echo 'selected="selected"'; } ?> >NON CONSULTANCY SERVICES</option>
                 </select></td>

              <td><input type="text" name="FINANCIALYEAR" value="<?php  echo $FINANCIALYEAR; ?>" readonly="" 
			  style="width:100%; text-align:center;background-color:#fff;"></td>

              <td><input type="text" name="SEQUENCENUMBER" value="<?php  echo $SEQUENCENUMBER; ?>" readonly="" 
			  style="width:100%; text-align:center;background-color:#fff;"></td>
            </tr>
            <tr>
            </tbody>
            </table> 
      
           <table class="table table-bordered" style="margin-top:-10px">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Particulars of Procurement</th>
               </tr>
            <tr>
            </tbody>
            </table>
			
		     
           <table class="table table-bordered" style="margin-top:-10px">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:33.333333333%;"></th>
        <th style="border-bottom-color:white; width:66.666666666%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr> 
        <td><b>Subject of procurement</b></td>
        <td><input type="text" name="SUBJECTOFPROCUREMENT" value="<?php  echo $SUBJECTOFPROCUREMENT; ?>" required="required" 
		style="background-color:#fff; width:100%; height:21px;">  </td> 
      </tr> 
    </tbody>
  </table> 
  
    <table class="table table-bordered " style="margin-top:-10px">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Procurement plan reference </th>
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Location for delivery</th>
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Date required</th> 
         
               
      </tr>
    </thead>   
    <tbody>
      <tr>
        <th style="width:25%;"><input type="text"  name="PROCUREMENTPLANREF" id="PROCUREMENTPLANREF" value="<?php  echo $SUBPROGRAMME; ?>" readonly="readonly" 
        style="width:100%;font-weight:bold; background-color:#fff;"></th>
        
        <th style="width:25%;"><input type="text"   name="LOCATIONFORDELIVERY" id="LOCATIONFORDELIVERY"  value="<?php  echo $LOCATIONFORDELIVERY; ?>"
        style="width:100%; text-align:left; height:21px; "> </th>
        
        <td style="width:30%;"><input type="text" name="DATEREQUIRED" id="DATEREQUIRED"  value="<?php  echo $DATEREQUIRED; ?>" 
        style="width:100%; text-align:center; "></td>  
    </tr> 
    </tbody>
    </table> 
    
  <table class="table table-bordered" style="margin-top:-10px">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Details relating to the Procurement</th>
               </tr>
            <tr>
            </tbody>
            </table>

        
       <table class="table table-bordered" id="mytable100" style="margin-top:-15px">
    <thead>
      <tr  class="  ">  
      <th>*</th>
   <th style="width:50%;">DESCRIPTION  (Refer to specifications, terms of reference or scope of work)</th>
   <th style="width:18%;">UNIT OF MEASURE</th>
   <th style="width:10%; text-align:center;">QUANTITY</th>  
   <th style="width:10%; text-align:center;">RATE</th>
   <th style="width:12%; text-align:center;">AMOUNT</th> 
      </tr>
      </thead>
             <tbody >
			  <?php  $tot = count($desc); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($marktp[$s]);?>
                                                            <tr > 
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="desc[]" required="required" type="text" value="<?php  echo $desc[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff; "/></td>
												   <td> <input  name="uom[]" required="required" type="text" value="<?php  echo $uom[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff;"/></td>
												  
                                                  <td> <input  name="qty[]" required="required" type="numeric" value="<?php  echo $qty[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff; text-align:center;"/></td> 
                                                 
                                                  <td> <input  name="escost[]" required="required" type="numeric" value="<?php echo $escost[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff;text-align:right;"/></td>
                                                  <td> <input  name="marktp[]" required="required" type="numeric" value="<?php echo $marktp[$s]; ?>"  class="form-control input-md" 
												  style= "width:100%; background-color:#fff;text-align:right;"/></td>
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
			
			<input type="hidden" name="AOACTION" value="WAITING"  />
			<input type="hidden" name="CORACTION" value="PENDING"  /> 
			
  <div class="table-responsive" style="margin-top:-20px;"> 
            <table class="table">
              <tr> 
                 <th style="width:88.25%; text-align:left; font-size:11px;">ESTIMATED TOTAL COST</th>
                <td style="width:11.75%"><input type="numeric" name="SUBTOTAL" id="SUBTOTAL"   value="<?php  echo $totals; ?>"   readonly="readonly"
				style="width:100%; text-align:right;background-color:#fff;"></td> 
				
                                        <input type="hidden" name="TAX" id="TAX" value="<?php  echo $TAX; ?>">
										<input type="hidden" name="TOTALCOST" id="TOTALCOST" value="<?php  echo $TOTALCOST; ?>">
			  
			 </tr>             
            </table>
                  <input type="hidden" name="CORACTION" id="CORACTION" value="PENDING">  
            
            <div class="table-responsive" >
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:10%">(1) </th>
				<th style="width:23.3333333%"> <b> Request for procurement<b> </th>
                <th style="width:33.3333333%; border:0px;"> </th> 
				 <th style="width:10%"> (2) </th>
                <td style="width:23.3333333%"> <b>Confirmation of request<b> </td>
              </tr>
              <tr>
			    <th style="width:10%;font-weight:normal;"> NAME</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" name="RFPUSERNAME" id="RFPUSERNAME" value="<?php  echo $RFPUSERNAME; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">NAME </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" name="CORNAME" id="CORNAME" value="<?php  echo $CORNAME; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;"> SIGNATURE</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" id="RFPSIGNATURE" name="RFPSIGNATURE"  value="<?php  echo $RFPSIGNATURE; ?>"
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;"> SIGNATURE</th>
                <td style="width:23.3333333%"><input type="text" class="form-control" id="CORSIGNATURE" name="CORSIGNATURE" value="<?php  echo $CORSIGNATURE; ?>"
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">TITLE </th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" id="RFPTITLE" name="RFPTITLE" readonly  value="<?php  echo $RFPTITLE; ?>" 
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">TITLE </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" id="CORTITLE" name="CORTITLE"  value="<?php  echo $CORTITLE; ?>" 
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">DATE </th>
				<th style="width:23.3333333%">  <input type="text" class="form-control" id="RFPDATE" name="RFPDATE" readonly value="<?php  echo $RFPDATE; ?>"
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">DATE </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" id="CORDATE" readonly="readonly" name="CORDATE" value="<?php  echo $CORDATE; ?>"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"></td>
              </tr>
            </table>
			   
                  <input type="hidden" id="INITIATORDEPT" name="INITIATORDEPT"  value="<?php  echo $INITIATORDEPT; ?>"/>
               
                  <input type="hidden" class="form-control" id="RFPFILENUMBER" name="RFPFILENUMBER" value=" <?php echo $RFPFILENUMBER; ?>"
				   
	<table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;"><b>Availability of funds to be confirmed prior to approval by Accounting Officer </b> </th>
               </tr>
            <tr>
            </tbody>
            </table> 
			<br>
			
  <table class="table table-bordered" > 
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:10%;"> Code number</th> 
        <th style="border-bottom-color:white; width:30%;"> Budget line description </th>
        <th style="border-bottom-color:white; width:28%;"> Programme</th> 
        <th style="border-bottom-color:white; width:20%;"> Sub programme</th> 
        <th style="border-bottom-color:white; width:12%;"> Remaining on budget</th> 
      </tr>
    </thead>   
    <tbody>
      <tr>   
            
              <td><input type="text" name="VOTE_HEADNO" value="<?php  echo $VOTE_HEADNO; ?>"  readonly="readonly"  style="width:100%; text-align:left;"></td>
              <td><input type="text" name="SUBPROGRAMME" value="<?php  echo $SUBPROGRAMME; ?>"  readonly="readonly"  style="width:100%; text-align:left;"></td>

              <td><input type="text" name="PROGRAMME"value="<?php  echo $PROGRAMME; ?>"  readonly="readonly"  style="width:100%; text-align:left;"> </td>

            
              <td><input type="text" name="ITEM" value="<?php  echo $ITEM; ?>"  readonly="readonly" style="width:100%; text-align:left;"></td>

              <td><input type="text" name="BALANCEREMAINING" value="<?php  echo $BALANCEREMAINING; ?>"  readonly="readonly"  
			  style="width:100%; text-align:right;"></td>
            </tr>
            <tr>
            </tbody>
          </table>
   
  
  <div class="table-responsive">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:10%">(3)  </th>
				<th style="width:23.3333333%"> <b> Confirmation of funding and approval to procure<b> </th>
                <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr>
              <tr>
			    <th style="width:10%;font-weight:normal;"> NAME</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" name="AONAME" id="AONAME" value="<?php  echo $AONAME; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
               <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;"> SIGNATURE</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" id="AOSIGNATURE" name="AOSIGNATURE" value="<?php  echo $AOSIGNATURE; ?>" 
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">TITLE </th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" id="AOTITLE" name="AOTITLE" value="<?php  echo $AOTITLE; ?>" 
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">DATE </th>
				<th style="width:23.3333333%">  <input type="text" class="form-control" id="AODATE"  name="AODATE" value="<?php  echo $AODATE; ?>"
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr>
            </table>
  
     <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Procurement Threshold </th>
               </tr>
            <tr>
            </tbody>
            </table>
			
    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:15%;"> Order serial No.</th> 
        <th style="border-bottom-color:white; width:30%;">Preferred method of procurement</th> 
        <th style="border-bottom-color:white; width:35%;">Re-send to: </th> 
        <th style="border-bottom-color:white; width:10%;">Action</th>
         
      </tr>
    </thead>   
    <tbody>
      <tr>    
			
              <td><input type="text" name="REQUISITIONID" id="REQUISITIONID" value="<?php  echo $REQUISITIONID; ?>" readonly="readonly" 
			  style="width:100%; text-align:left;background-color:#fff;"></td>
              
              <td><input type="text" name="THRESHOLD" id="THRESHOLD"  readonly="readonly"  value="<?php  echo $THRESHOLD; ?>" 
			  style="width:100%; text-align:left; background-color:#fff;"></td>

              <td>  <select class="form-control" name="SENDTO" id="SENDTO"  required="required" placeholder="To:">
              <option></option>
              <?php   echo $stss; ?> 
              </select> </td>

             <td><center> <input type="submit" name="buttonsend" id="button" value="Update" /> </center> </td>
 
             </tr>
            <tr>
            </tbody>
            </table>            
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

     var  s1aa = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 
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
		  table.rows[x].cells[1].childNodes[0].id="desc_"+x;
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
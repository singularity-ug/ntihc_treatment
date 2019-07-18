<!DOCTYPE html>
<html>
<head>
	<!-- js -->			
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<title>
POS
</title>
      
		<link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

	<!-- combosearch box-->	
	
	  <script src="vendors/jquery-1.7.2.min.js"></script>
    <script src="vendors/bootstrap.js"></script>

	
	
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->




 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	

</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>
<body>
<?php include('navfixed.php');?>
 
<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>">Cash</a>

<a href="../index.php">Logout</a>
 
	
<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
            <li><a href="../../proc/proc_pdu_mgr.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
			<li class="active"><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Payments</a>  </li>  
			<li><a href="proc_planautomation.php"><i class="icon-shopping-cart icon-2x"></i> Plan details</a>  </li>             
			<li><a href="proc_planqtr.php"><i class="icon-list-alt icon-2x"></i> Running report</a>                                     </li>
			<li><a href="#"><i class="icon-group icon-2x"></i> 1st Qtr report</a>                                    </li>
			<li><a href="#"><i class="icon-group icon-2x"></i> 2nd Qtr report</a>  
            <li><a href="#"><i class="icon-group icon-2x"></i> 3rd Qtr report</a>                                    </li>
			<li><a href="#"><i class="icon-group icon-2x"></i> 4th Qtr report</a>  
                                              </li>
			<li><a href="payment_report.php"><i class="icon-bar-chart icon-2x"></i> Payments Report</a>                </li>
			<br><br><br><br><br><br>
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="text" class="trans" name="face" value="" disabled>
			</form>
			  </div>
			</li>
				
				</ul>    
 			
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
		<div class="content" id="content"> 
	<div style="width: 100%; height: 190px;" >
	<div style="width: 100%;">
	<center> 
	 <img src="../../../assets/img/logsbig.PNG" width="100%" height="50%">
   <p style="text-align:center; font-weight:bold;">PAYMENTS MANAGEMENT BY PROCUREMENT PLAN CODE</p>
	</center>
	<div>
	 
	</div>
	</div>
	<div style="width: 100%; float: left; height: 70px;">
													
<form action="incoming.php" method="post" >
											  
<select name="budget" style="width:100%; height:30px;" class="chzn-select2" required="" placeholder="Select">
<option></option>
	<?php
	include('../connectproc.php');
	$result = $db->prepare("SELECT * FROM procplanning");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['id'];?>"><?php echo $row['CODE']; ?> - <?php echo $row['PLANDETAILS']; ?> - <?php echo $row['FINANCIALPERIOD']; ?> 
        | <b style="color:#0000FF;">1st qtr:</b> <?php echo $row['FIRSTQTR']; ?>
        | <b style="color:#0000FF;">2nd qtr:</b> <?php echo $row['SECONDQTR']; ?>
        | <b style="color:#0000FF;">3rd qtr:</b> <?php echo $row['THIRDQTR']; ?>
        | <b style="color:blue;">4th qtr:</b> <?php echo $row['FOURTHQTR']; ?></option>
	<?php
				}
			?>
</select>
<br><p></p>
Amount paid&nbsp;<input type="numeric" name="BUDGETAMOUNT"  autocomplete="off" 
style="width: 10%; height:19px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;background-color:#fff; border-radius:5px;" / required>

Financial quarter &nbsp;<select name="FINANCILAQUARTER"   autocomplete="off"
 style="width: 12%; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;background-color:#fff; border-radius:5px;" />
 <option></option>
 <option value="FIRSTQTR"> 1st qtr</option>
 <option value="SECONDQTR">2nd qtr</option>
 <option value="THIRDQTR">3rd qtr</option>
 <option value="FOURTHQTR">4th qtr</option>
 </select>
 
Payment type &nbsp;<select name="PAYMENTTYPE"  autocomplete="off"
 style="width: 12%; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;background-color:#fff; border-radius:5px;" />
 <option></option>
 <option value="CHEQUE"> Cheque</option>
 <option value="CASH">Cash</option>
 <option value="EFT">EFT</option> 
 </select>
  
Payment date&nbsp;<input type="date" name="date" value="<?php echo date("m/d/y"); ?>"  
style="width: 12%; height:19px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px; background-color:#fff; border-radius:5px;" / required>

Invoice No.&nbsp;<input type="date" name="date"   
style="width: 12%; height:19px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px; background-color:#fff; border-radius:5px;" / required>

 
</form>

 <center> <p style="color:#000; font-weight:bold;font-size:12px;"> <b>CHEQUE PAYMENT VOUCHER</b> </p> </center> 
 
<hr  style="margin-top: -8px;">   


         <form class="form-horizontal" action="processpmts.php" method="POST">
   
          
     <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:14%;border:px;">Payee </th>
				<th style="width:36%;border:2px solid #a9abae;"> <input type="text"  name="PAYEE" id="PAYEE"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				 <th style="width:14%;border:0px;"> Project </th>
                <td style="width:36%;border:0px;"> <input type="text" name="PROJECT" id="PROJECT"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </td>
              </tr>
			  </table>
<table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;"> 
             <tr>
			    <th style="width:50%;border:0px;">Budget line description </th>  
				 <th style="width:14%;border:0px;"> Cheque Vr No. </th>
                <td style="width:36%;border:0px;"> <input type="text"   name="PMTNO" id="PMTNO"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>
              </tr>
			  </table>
			  
			  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;"> 
             <tr> 
			    <th style="width:50%;border:0px;"><input type="text"  name="BUDGETLINEDESCRIPTION" id="BUDGETLINEDESCRIPTION"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				
				 <th style="width:14%;border:0px;"> Date</th>
                <td style="width:36%;border:0px;"> <input type="date"  name="DATECREATED" id="DATECREATED"  placeholder = "dd / mm / yyy"
				 style="width:100%; font-weight:normal; background-color:#fff; height:19px;">  </td>
              </tr> 
            </table>
			
        <input type="hidden"  name="PMTDATATE" id="PMTDATATE"  value="<?php echo date('y-m-d'); ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff;">  
        
    <table class="table table-bordered" id="mytable100" style="margin-top: -17px;">
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
      
       <br>
	  <div id="res" style="border:2px solid;"> </div>

     <table class="table-responsive" style="margin-top:-18px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Cheque No.</th>
                <td style="width:30%"><input type="numeric" name="CHEQUENO" id="CHEQUENO"   
				required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td> 
				
                <th style="width:20%; text-align:right;">TOTAL Shs.</th>
                <td style="width:30%"><input type="numeric" name="SUBTOTAL" id="SUBTOTAL"   
				readonly="readonly"
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold;"></td>   
			 </tr>             
            </table>
			  
              <table class="table-responsive" style="margin-top:-10px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Amount in words.</th>
                <td style="width:80%"><input type="numeric" name="AMOUNTINWORDS" id="AMOUNTINWORDS"   
				required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td>    
			 </tr>             
            </table> 
			 <table class="table-responsive" style="margin-top:10px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Prepared by:</th>
                <td style="width:30%"><input type="numeric" name="PREPTITLE" id="PREPTITLE"  readonly=""  
				style="width:100%; text-align:left;background-color:#fff;"></td>    
				<th style="width:20%; text-align:left;">Reviewed by:</th>
                <td style="width:30%"><input type="numeric"    
				readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>   
			 </tr>             
            </table> 
			
			 
            <table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Reviewed and approved by:</th>
                <td style="width:30%"><input type="numeric"   readonly=""  
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>    
				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"><input type="numeric"    
				readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>   
			 </tr>             
            </table> 
			
			<table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Recieved by:</th>
                <td style="width:30%"><input type="numeric" readonly="readonly"  
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>    
				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"><input type="numeric"   
				readonly="readonly"  
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>   
			 </tr>             
            </table>                        
        <input type="hidden" name="PREPNAME" id="PREPNAME"    >   
        <input type="hidden" name="PREPDEPT" id="PREPDEPT"  >  
		<input type="hidden" name="FINANCIALYEAR" id="FINANCIALYEAR" > 
		<input type="hidden" name="VOUCHERID" id="VOUCHERID"  > 
              
                      
     <table class="table table-striped" style="background-color:#ffffff; margin-top:-13px; ">
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
     <td style="width:25%;"><input type="text" name="BUDGETAMOUNT" id="BUDGETAMOUNT"    required="required"  
     style="width:100%; text-align:left;background-color:#FFF;"></td>
	 
      <td style="width:25%;"><input type="text" name="EXPENDITURETODATE" id="EXPENDITURETODATE"  readonly="readonly" 
     style="width:100%; text-align:center;background-color:#ecf0f5;"></td>
	 
	 <td style="width:25%;"><input type="text" name="AMOUNTREQUESTED" id="AMOUNTREQUESTED"  readonly="readonly"  
     style="width:100%; text-align:center;background-color:#ecf0f5;"></td>
	 
	 <td style="width:25%;"><input type="text" name="BALANCEONBUDGET" id="BALANCEONBUDGET"  readonly="readonly"    
     style="width:100%; text-align:center;background-color:#ecf0f5;"></td>
     </tr>
    <tr>
   </tbody>
   </table>
              
<br>
<table class="table table-bordered " style="margin-top: -25px;">
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
		<option>nn</option> 
                  </select></td>  
        
        <td style="background-color:#f9f9f9;"> <center> <input type="submit" name="button" id="button" value="Save " 
	 style= " font-size:15px; font-weight:bold; border-radius:11px; "/>  <center></td>  
    </tr> 
    </tbody>
    </table>  
           </form>
<table class="table table-bordered" id="resultTable" data-responsive="table">
	<thead>
		<tr>
			<th> Budget Code </th>
			<th> Sub Item </th>
			<th> Financial Period </th>
			<th> Amount on budget</th>
			<th> Amount paid </th>
			<th> Sub total </th> 
			<th> Action </th>
		</tr>
	</thead>
	<tbody>
		
			 
</div>
</div>
</div>
</body>
<?php include('footer.php');?>
</html>

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
   <!-- /.END pmt SCRIPT -->
   
   
   
   
   <script>
	 
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("xero").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="imp[]" id="imp_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:#fff; width:100%;">';
	 
     var  s2b = '<input type="text" name="cur[]" id="cur_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:#fff; width:100%;">'; 

	 var  s3c =  '<input type="numeric" name="bix[]" id="bix_'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-right:0px; width:100%; background-color:#fff;" >';


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>';
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
		  table.rows[x].cells[1].childNodes[0].id="imp_"+x;
          table.rows[x].cells[2].childNodes[0].id="cur_"+x;
		  table.rows[x].cells[3].childNodes[0].id="bix_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

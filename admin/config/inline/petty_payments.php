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
  $id = $_GET['ORDERNO']; 
  $REQUESTDATE = '';
  $VOUCHER_NO = '';
  $IDNUMBER = '';
  $APPLICANTNAME  = '';
  $AP_DEPARTRMENT = '';  
  $impdescription = array();
  $impcurrency    = array();
  $impdebit       = array(); 
  $impcode    = array();   
  $IMPAUTHORISEDBY = '';
  $IMPAUTHORISEDDATE = '';
  $IMPAPPROVEDBY = '';
  $IMPAPPROVEDDATE = '';  
  $PAIDBY = ''; 
  $IMPAYTITTLE = ''; 
  $RECIEVEDDATE = '';   
  $RECIEVEDBY = ''; 
  $IMPAPPROVERNAME = '';   
  $IMPAPPROVERTITTLE = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "dbmultiple";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM imprest  WHERE AUTHACTION ='AUTHORISED' AND APPROACTION ='APPROVED' AND CASHOUT ='PAID' AND ORDERNO = '$id' ";
  
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
	 $impcode[]        = $row['CODE'];
     $IMPAUTHORISEDBY  = $row['IMPAUTHORISEDBY'];
	 $IMPAUTHORISEDDATE = $row['IMPAUTHORISEDDATE'];
     $IMPAPPROVEDBY    = $row['IMPAPPROVEDBY'];
	 $IMPAPPROVEDDATE  = $row['IMPAPPROVEDDATE']; 
	 $ORDERNO          = $row['ORDERNO']; 
	 $PAIDBY          = $row['PAIDBY']; 
	 $IMPAYTITTLE          = $row['IMPAYTITTLE']; 
	 $RECIEVEDDATE          = $row['RECIEVEDDATE']; 
	 $RECIEVEDBY          = $row['RECIEVEDBY']; 
	 $IMPAPPROVERNAME          = $row['IMPAPPROVERNAME']; 
	 $IMPAPPROVERTITTLE          = $row['IMPAPPROVERTITTLE'];  
	  
      } 
     ?>
    
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NTIHC | IMM System  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
 <style>
h9 {
    border-bottom: 2px solid #cc9900;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 1px solid #f0f0f0;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #ecf0f5;;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #f0f0f0;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
   }

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
             table, th , td  {
                 border: 1px solid #f0f0f0;
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
 
  
  
</head>
<body onLoad="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body">   


 <div class="col-sm-12" >
<img src="../../../assets/img/logsbig.PNG" width="100%" height="100%">
</div>  
<center> <legend style="color:#000; font-weight:bold; font-size:12px;">CASH PAYMENT VOUCHER </legend> </center> 
   <form id="form1" class="form-horizontal" action="petty_payments.php" method="POST" style="height:auto; font-weight:normal;">  
                 
       
        <table class="table table-bordered">
    <thead>
      <tr  class="">
        <th style="width:50%;"> </th> 
         <th  style="width:20%;"> Vourcher No.</th>
        <th style="width:30%;"> <input type="text" name="ORDERNO" id="ORDERNO"value="<?php  echo $ORDERNO; ?>"  readonly="readonly" 
        style="background-color:#fff; width:100%;"> </th>
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
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  <td> <input  name="impcurrency[]" readonly="" type="text" value="<?php  echo $impcurrency[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;"/></td> 
                                                  
                                                  <td> <input  name="impdebit[]" readonly="" type="numeric" value="<?php echo $impdebit[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td>
                                                     
                                                  
                                                  <td> <input  name="impcode[]" readonly="" type="numeric" value="<?php echo $impcode[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td> 
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                
    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:60%;"> </th> 
        <th style="border-bottom-color:white; width:20%;"> </th> 
        <th style="border-bottom-color:white; width:20%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td> </td> 
        <td>Total sum </td>
        <td><input type="text"  name="TOTALSUM" id="TOTALSUM" value="<?php echo $totals;?>" readonly="" style="background-color:#fff;width:100%;"></td> 
       
      </tr>
    </tbody>
  </table> 
  
  <br>
 
   <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="background-color:white; "> </th>
        <th style="background-color:white;  ">Name</th>  
        <th style="background-color:white;  ">Position</th> 
         <th style="background-color:white; ">Signatory</th>  
        <th style="background-color:white;  ">Date</th> 
      </tr>
    </thead>   
    <tbody>
      <tr>
         <tr>
         <th>Approved by</th>
        <td><input type="text" name="IMPAPPROVERNAME" id="IMPAPPROVERNAME"  value="<?php  echo $IMPAPPROVERNAME; ?>" readonly="" 
 style="width:100%; text-align:left;"></td>
        <td><input type="text" name="IMPAPPROVERTITTLE" id="IMPAPPROVERTITTLE" value="<?php  echo $IMPAPPROVERTITTLE; ?>" readonly="" 
 style="width:100%; text-align:left;"></td>
        <td><input type="text" name="IMPAPPROVEDBY" id="IMPAPPROVEDBY"  value="<?php  echo $IMPAPPROVEDBY; ?>" readonly=""  
style="width:100%; text-align:left;"></td>
        <td><input type="date" name="IMPAPPROVEDDATE" id="IMPAPPROVEDDATE" value="<?php  echo $IMPAPPROVEDDATE; ?>" readonly=""  
style="width:100%; text-align:center;"></td>
     </tr>
    <tr>
    
     <tr>
         <tr>
         <th>Paid by</th>
        <td><input type="text" name="PAIDBY" id="PAIDBY"   value="<?php  echo $PAIDBY; ?> "  style="width:100%; text-align:left;"></td>
        <td><input type="text" name="IMPAYTITTLE" id="IMPAYTITTLE" value="<?php  echo $IMPAYTITTLE; ?>"  style="width:100%; text-align:left;"></td>
        <td><input type="text" name="" id="" style="width:100%; text-align:left;"></td>
        <td><input type="date" date="RECIEVEDDATE" id="RECIEVEDDATE" value="<?php  echo $RECIEVEDDATE; ?>"  style="width:100%; text-align:center;"></td>
     </tr>
    <tr>
    

    <tr>
        <th>Recieved by</th>
        <td><input type="text"  class="form-control" name="RECIEVEDBY"id="RECIEVEDBY"  value="<?php  echo $RECIEVEDBY; ?> " 
        style="width:100%; text-align:left;">
        </td>
        <td><input type="text" class="form-control" id="RECIEVEDDATE" name="RECIEVEDDATE"   value=" " 
style="width:100%; text-align:left;">

        <td><input type="text" class="form-control" id="RECIEVEDDATE" name="RECIEVEDDATE"   value=" " 
style="width:100%; text-align:left;">

        <td><input type="date" class="form-control" id="RECIEVEDDATE" name="RECIEVEDDATE"   value=" " 
style="width:100%; text-align:center;">

     </td>
     </tr>
        </tr>
     </tbody>
  </table>
 <br>
       
      
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
             
                <div class="col-xs-12" >
                <br> 

        </div>
         <div class="col-xs-12"> 
      </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>

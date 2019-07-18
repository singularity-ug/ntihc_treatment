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
  $id = $_GET['REQUISITIONID']; 
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
  $RFPFILENUMBER='';
  $INITIATORDEPT='';
  $OFFICERALLOCATED='';
  $JOBNUMBER='';
  $REQUISITIONID='';
  $OFFICERACCOUNT='';  
 
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
	 $marktp[]        = $row['id'];
	  
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
	 $OFFICERACCOUNT=$row['OFFICERACCOUNT']; 
      }

  ?>
 
   
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> .</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
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
 
  
  
</head>
<body onLoad="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body">   
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="100%">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:13px; background-color:#fff;"> <b>REQUEST FOR QUOTATION</b> </p> </center> 
 
         <BR>
         
	 <div class="table-responsive" style="border:0px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:66.6%; border:0px;"> </th>
                <th style="width:14%">Request Date</th>
                <td style="width:19.4%"> <?php echo "" . date("Y/m/d") . "";  ?> </td>
              </tr>
              <tr>
			    <th style="width:66.6%; border:0px;"> </th>
                <th style="width:14%">RFQ Serial No.</th>
                <td style="width:19.4%">  <?php  echo $REQUISITIONID; ?> </td>
              </tr> 
           
  </table>
  <p style="font-size:15px; font-weight:bold">We are pleased to confirm our purchase of the following items</p>
<br>
        
    <table class="table table-bordered" id="mytable100" style="margin-top:-15px">
    <thead>
      <tr  class="  ">  
      <th>*</th>
   <th style="width:5%;">ITEM</th>   
   <th style="width:55%;">DESCRIPTION</th>
   <th style="width:25%;">UNIT OF MEASURE</th>
   <th style="width:15%; text-align:center;">QUANTITY</th>   
      </tr>
      </thead>
             <tbody >
                                                <?php  $tot = count($desc); $s=0;
                                                 for($s=0;$s<$tot;$s++){ ?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  
                                                   <td> <input  name="marktp[]" readonly="" type="text" value="<?php  echo $marktp[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff; "/></td>
                                                  
                                                  <td> <input  name="desc[]" readonly="" type="text" value="<?php  echo $desc[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff; "/></td>
												   <td> <input  name="uom[]" readonly="" type="text" value="<?php  echo $uom[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff;"/></td>
												  
                                                  <td> <input  name="qty[]" readonly="" type="numeric" value="<?php  echo $qty[$s]; ?>" class="form-control input-md" 
												  style= "width:100%; background-color:#fff; text-align:center;"/></td>  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
			
			  
            <div class="table-responsive" style="border:0px;">
            <table class="table" style="border:0px;">
              <tr> 
                <th style="width:20%">Contact person</th>
                <td style="width:30%"> <input type="text" class="form-control" name="OFFICERALLOCATED" id="OFFICERALLOCATED" value=" " 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                 <th style="width:50%; border:0px;"> </th>
              </tr>
              <tr>
			   
                <th style="width:20%">Title</th>
                <td style="width:30%"> <input type="text" class="form-control" id="AOSIGNATURE" name="AOSIGNATURE" value=" " 
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"> </td>
                 <th style="width:50%; border:0px;"> </th>
              </tr> 
           <tr>
              
               <th style="width:20%">E-mail</th>
                <td style="width:30%"> <input type="text" class="form-control" id="OFFICERACCOUNT" name="OFFICERACCOUNT" value=" " 
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></th></td>
                 <th style="width:50%; border:0px;"> </th>
              </tr> 
           <tr>
 
            <th style="width:20%">Phone contact</th>
                <td style="width:30%"> <input type="text" class="form-control" id="OFFICERACCOUNT" name="OFFICERACCOUNT" value=" " 
				readonly="readonly"    style="width:100%; font-weight:normal; background-color:#fff;"></th></td>
                 <th style="width:50%; border:0px;"> </th>
              </tr> 
           <tr> 
            </table>
              
              <br>
              
             <div class="table-responsive" style="border:0px;">
            <table class="table">
              <tr>
			    <th style="width:50%;border:0px;"> </th>
                <th style="width:7%">Sign</th>
                <td style="width:43%"><input type="text" name=" "   style="width:100%; text-align:center;"></td>
              </tr>
              <tr>
			    <th style="width:50%;border:0px;"> </th>
                <th style="width:7%"> For:</th>
                <td style="width:43%"> <input type="text" name=" " value="Naguru Teenage Information and Health Center" style="width:100%;"</th>
              </tr> 
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
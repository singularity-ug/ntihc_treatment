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
  $id = $_GET['SERIALNO'];  
  
  $SERIALNO = ''; 
  $DATECREATED  = ''; 
  $dnx = array();
  $fqx = array(); 
  $tmx = array();
  $pdx = array(); 
  $qtyx = array();
  $ord = array(); 
  $dri = array();  
  
  $TIMESTAMP='';
  $INITIATORDEPARTRMENT = '';
  $INITIATORTITLE = '';  
  $INITIATEDBY='';   
  $INITIATIONDATE = ''; 
  $SENDTO=''; 
  $ORDERNO = '';
  $INITIATORACCOUNT = '';   
  $ARBY = '';    
  $RVDBY='';
  $ARNAME='';   
  $RVDNAME = ''; 
  $ARDATE=''; 
  $RVDDATE = '';   
  $APPROVERTITLE='';
  $APPROVEDBYNAME='';   
  $APPROVALDATE = ''; 
  $APPROVERCOMMENT=''; 
  $APPROVERDEPT = '';  
  $AUTHDEPT='';  
  	  
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ftl";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM fuellogs  WHERE `SERIALNO` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $SERIALNO = $row['SERIALNO'];  
	 $DATECREATED   = $row['DATECREATED'];  
	 $dnx[] = $row['REGISTRATIONNO'];
     $fqx[]    = $row['TYPE']; 
     $tmx[]       = $row['PRODUCT'];   
	 $pdx[]       = $row['LUBRICANT']; 
	 $qtyx[]        = $row['LITRE'];
     $ord[]       = $row['CURRENTODOREADING'];
	 $dri[]        = $row['DRIVER'];  
     $INITIATORDEPARTRMENT=$row['INITIATORDEPARTRMENT'];  
     $INITIATORTITLE   = $row['INITIATORTITLE'];  
	 $INITIATEDBY=$row['INITIATEDBY'];  
     $INITIATIONDATE   = $row['INITIATIONDATE']; 
     $SENDTO=$row['SENDTO'];    
     $ORDERNO=$row['ORDERNO'];  
     $ARBY   = $row['ARBY']; 
	 $ARNAME=$row['ARNAME'];  
     $ARDATE   = $row['ARDATE']; 
	 $RVDDATE   = $row['RVDDATE']; 
	 $RVDNAME=$row['RVDNAME']; 
	 $RVDBY   = $row['RVDBY'];  
	 $APPROVERTITLE   = $row['APPROVERTITLE']; 
	 $APPROVEDBYNAME   = $row['APPROVEDBYNAME']; 
	 $APPROVALDATE=$row['APPROVALDATE']; 
	 $APPROVERCOMMENT   = $row['APPROVERCOMMENT']; 
	 $APPROVERDEPT   = $row['APPROVERDEPT']; 
	 $AUTHDEPT   = $row['AUTHDEPT'];  
      }

  ?>
     
<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../css/matrix-style.css" />
<link rel="stylesheet" href="../../css/matrix-media.css" />
<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../../css/uniform.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'> 

<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 

<link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">
 
 
  
   <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid black;
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
  
 </head>
<body style="background: #fff;"> 
 
</head>
<body onLoad="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">    
         
         <div class="container fluid" style="width:80%;">
 
        <img src="../../img/logsbig3.png" width="100%" height="30%">
             
        <center> <p style="color:#000; font-weight:bold;font-size:11px; background-color:#fff; font-family:lcd;margin-top: 0px;">
         <b>FUEL AND LUBRICANTS REQUISTION</b> </p> </center> 
          
         <form id="form1" class="form-horizontal" action="str_reqn_dsprocess.php" method="POST" style="height:auto; font-weight:normal; height:auto;">  
         <br>
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		 <thead> 
		 <tr> 
               <th style="width:80%; text-align:right; border:0px;background-color:#fff;">Requisition date </th>
               <td style="width:20%;border:0px;background-color:#fff; text-align:right;"> <?php echo $DATECREATED; ?> </td> 
                 
			</tr>             
            </table>
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:80%; text-align:right; border:0px;background-color:#fff;">Serial No. &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</th>
               <td style="width:20%;border:0px;background-color:#fff;text-align:right;"><?php echo $ORDERNO; ?> </td> 
                 
			</tr>             
            </table>    
              <br>
         
    <table border="1"  id="mytable1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
   <th style="font-size:11px;">REG NUMBER</th>
   <th style="font-size:11px;">TYPE</th>
   <th style="font-size:11px;">PRODUCT</th> 
   <th style="font-size:11px;">LUBRICANT </th> 
   <th style="font-size:11px;">QTY</th> 
   <th style="font-size:11px;">ODO READING</th>
   <th style="font-size:11px;">DRIVER</th> 
      </tr>
      </thead>
      <tbody>
       
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr > 
                                                  
                                                  <td> <?php  echo $dnx[$s]; ?> </td>
                                                   
                                                  <td> <?php  echo $fqx[$s]; ?> </td> 
                                                  
                                                  <td> <?php echo $tmx[$s]; ?> </td>  
                                                  
                                                  <td> <?php echo $pdx[$s]; ?> </td> 
                                                  
                                                   <td> <?php echo $qtyx[$s]; ?> </td> 
                                                  
                                                   <td> <?php echo $ord[$s]; ?> </td>  
                                                    
                                                    <td> <?php echo $dri[$s]; ?> </td> 
                                                    
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
       <br>
     <table class="table-responsive" style="margin-top:4px;">
               <table class="table" style="border:0px;">
               <tr>  
                <th style="width:13.33333333%;border:0px;">Requested by</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $INITIATORTITLE; ?> </th>   
                  
                 <th style="width:13.33333333%;border:0px;">Authorised by</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $ARBY; ?></th>   
                 
                 <th style="width:13.33333333%;border:0px;">Approved by</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $APPROVERTITLE; ?></th>  
              </tr>
			  </table>      
               
               
                <table class="table-responsive" style="margin-top:-17px;">
             <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Name</th>  
				<th style="width:20%;border:1px solid;">  <?php echo $INITIATEDBY; ?>  </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $ARNAME; ?>  </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $APPROVEDBYNAME; ?> </th>   
                  
                  
              </tr>                            
			  </table> 
              
               <table class="table-responsive" style="margin-top:-17px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Department</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $INITIATORDEPARTRMENT; ?> </th>   
                  
                 
                 <th style="width:13.33333333%;border:0px;">Department</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $AUTHDEPT; ?>    </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Department</th> 
				<th style="width:20%;border:1px solid;">  <?php echo $APPROVERDEPT; ?>  </th>   
                  
                  
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-17px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:1px solid;"> <?php echo $INITIATIONDATE; ?> </th>    
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:1px solid;">   <?php echo $ARDATE; ?>   </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:1px solid;">   <?php echo $APPROVALDATE; ?> </th>   
                  
                  
              </tr>
			  </table> 
               
                  <input type="hidden" id="SERIALNO" name="SERIALNO" value="<?php echo $SERIALNO; ?>"  > 
                    
                 
                   <br><br>  
        </form>
       
      
  

      </section>
      <!-- /.content -->
    
<!-- ./wrapper -->
<!-- Morris.js charts -->
     <script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>

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

     var  s1aa = '<select onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">'+ 
                                        '<option></option>'+
                                        '<option><?php   echo $stdd; ?></option>'+ 
                                        '</select>';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';			 

	 var  s3cc = '<select name="tmx[]" id="tmx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:left;">'+ 
                                        '<option></option>'+
                                        '<option>DIESEL</option>'+
                                        '<option>PETROL</option>'+ 
                                        '</select>';
 		 
	 var  s6ff = '<input type="text" name="pdx[]" id="pdx'+rowCount+'" value="N/A" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';


    var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s11 = '<input type="text" name="ord[]" id="ord'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';
				 
     var  s22 = '<input type="text" name="dri[]" id="dri'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
				                  '<td>'+s7gg+' </td>'+
								  '<td>'+s11+' </td>'+
				                  '<td>'+s22+' </td>';
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
		  table.rows[x].cells[1].childNodes[0].id="dnx"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqx"+x;
          table.rows[x].cells[3].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[4].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[5].childNodes[0].id="qtyx"+x;
		  table.rows[x].cells[6].childNodes[0].id="ord"+x;
		  table.rows[x].cells[7].childNodes[0].id="dri"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
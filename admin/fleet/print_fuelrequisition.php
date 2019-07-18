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
  	  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";
 
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
             	 font-size: 11px;
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
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
          <center> <p style="color:#000; font-weight:bold;font-size:14px; background-color:#fff; margin-top:-18px; font-family:lcd;"> FUEL AND LUBRICANTS REQUISTION </p> </center> 
  
     <form id="form1" class="form-horizontal" action="str_reqn_dsprocess.php" method="POST" style="height:auto; font-weight:normal;">  
         <br>
        <table class="table" style="border:0px;">
              <tr> 
			     <th style="width:13.33333333%;border:1px solid #ECF0F5;">Requisition date </th>
				<th style="width:20%;border:1px solid #ECF0F5;"> <input type="text"  name="DATECREATED"  id="DATECREATED"value="<?php echo $DATECREATED; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                <th style="width:33.33333333%;border:0px;">  </th>
                
                <th style="width:13.33333333%;border:1px solid #ECF0F5;">Requisition No. </th>
				<th style="width:20%;border:1px solid #ECF0F5;"> <input type="text"  id="ORDERNO" name="ORDERNO" value="<?php echo $ORDERNO; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                 
              </tr>
			  </table> 
        
   <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>  
    <th>*</th>
   <th  style="width:15%;">REG NUMBER</th>
   <th  style="width:20%;">TYPE</th>
   <th  style="width:10%;">PRODUCT</th> 
   <th  style="width:15%;">LUBRICANT </th> 
   <th  style="width:5%;">QTY</th> 
   <th  style="width:10%;">ODO READING</th>
   <th  style="width:25%;">DRIVER</th>
 
      </tr>
      </thead>
      <tbody>
       
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  
                                                  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff;;"/></td>
                                                   
                                                  <td> <input  name="fqx[]" readonly="" type="text" value="<?php  echo $fqx[$s]; ?>"   class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; text-align:center;"/></td> 
                                                    
                                                   
                                                     <td> <input  name="tmx[]" type="numeric" value="<?php echo $tmx[$s]; ?>" required="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;text-align:center;"/></td>  
                                                  
                                                  <td> <input  name="pdx[]" type="numeric" value="<?php echo $pdx[$s]; ?>"  readonly="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td> 
                                                  
                                                   <td> <input  name="qtyx[]" type="text" value="<?php echo $qtyx[$s]; ?>"  required="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff; "/></td> 
                                                  
                                                   <td> <input  name="ord[]" readonly="" type="text" value="<?php echo $ord[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fcfdfe;text-align:right;"/></td>  
                                                    
                                                    <td> <input  name="dri[]" type="numeric" value="<?php echo $dri[$s]; ?>"  readonly="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fcfdfe;text-align:right;"/></td> 
                                                    
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
       
     <table class="table-responsive" style="margin-top:4px;">
               <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Requested by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATORTITLE" name="INITIATORTITLE" value="<?php echo $INITIATORTITLE; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Reviewed and approved by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="ARBY" name="ARBY" value="<?php echo $ARBY; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Reviewed by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVDBY" name="RVDBY"  value="<?php echo $RVDBY; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
              </tr>
			  </table>      
               
               
                <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Name</th>  
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATEDBY" name="INITIATEDBY"  value="<?php echo $INITIATEDBY; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="ARNAME" name="ARNAME"   value="<?php echo $ARNAME; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVDNAME" name="RVDNAME"  value="<?php echo $RVDNAME; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
                  
              </tr>                            
			  </table> 
              
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Uesr department</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATORDEPARTRMENT" name="INITIATORDEPARTRMENT" value="<?php echo $INITIATORDEPARTRMENT; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <input type="hidden" id="INITIATIONDATE" name="INITIATIONDATE"  /> 
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="ARDATE" name="ARDATE"  value="<?php echo $ARDATE; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVDDATE" name="RVDDATE"  value="<?php echo $RVDDATE; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
                  
              </tr>
			  </table> 
              
              
                  <input type="hidden" id="SERIALNO" name="SERIALNO" value="<?php echo $SERIALNO; ?>"  > 
                    
                  
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
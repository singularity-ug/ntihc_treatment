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
  $id = $_GET['ORDERSERIALID'];  
  
  $ORDERSERIALID = ''; 
  $REQUESTINGUNIT  = '';
  $ORDERTYPE = '';
  $FACILITYNANE = ''; 
  
  $dnx = array();
  $fqx = array(); 
  $variance = array();  
  $remdrt = array();
  $lcn = array();  
  $pdx = array();  
  $qtyx = array(); 
  
  $TIMESTAMP='';
  $DATECREATED='';   
  $REQUESTINGUNIT = ''; 
  $FACILITYNANE=''; 
  $ORDERVALUE = '';
  $REQUISTIONTYPE = '';   
  $REQBY='';
  $AUTBY='';   
  $APPBY = ''; 
  $ISSBY=''; 
  $REQBYNAME = '';
  $AUTBYNAME = '';    
  $APPBYNAME='';
  $ISSBYNAME='';   
  $REQBYDATE = ''; 
  $AUTBYDATE=''; 
  $APPBYDATE = '';
  $ISSBYDATE = '';  
  $STOCKOUTCOMMENT = '';
  $SRFNO = '';  
    
  	
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM outgoingorders  WHERE `ORDERSERIALID` = '$id' AND REQUISTIONTYPE = 'GENERAL'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $ORDERSERIALID = $row['ORDERSERIALID']; 
     $REQUESTINGUNIT = $row['REQUESTINGUNIT'];
     $ORDERTYPE  = $row['ORDERTYPE'];
     $FACILITYNANE = $row['FACILITYNANE']; 
	 
	 $dnx[] = $row['DESCRIPTION'];
     $fqx[]    = $row['QTYINSTOCK']; 
	 $variance[]    = $row['QTYISSUED'];  
	 $remdrt[]        = $row['COLLECTEDBY']; 
	 $lcn[]        = $row['COLLTITLE'];
     $pdx[]       = $row['PURPOSE'];
	 $qtyx[]        = $row['STOCKBAL'];
	  
	 $DATECREATED=$row['DATECREATED'];  
     $REQUESTINGUNIT   = $row['REQUESTINGUNIT']; 
     $FACILITYNANE=$row['FACILITYNANE'];    
     $ORDERVALUE=$row['ORDERVALUE'];  
     $REQUISTIONTYPE   = $row['REQUISTIONTYPE']; 
	 $REQBY=$row['REQBY'];  
     $AUTBY   = $row['AUTBY']; 
     $APPBY=$row['APPBY'];    
     $ISSBY=$row['ISSBY'];  
     $REQBYNAME   = $row['REQBYNAME'];  
	 $AUTBYNAME=$row['AUTBYNAME'];  
     $APPBYNAME   = $row['APPBYNAME']; 
     $ISSBYNAME=$row['ISSBYNAME'];    
     $REQBYDATE=$row['REQBYDATE'];  
     $AUTBYDATE   = $row['AUTBYDATE']; 
	 $APPBYDATE=$row['APPBYDATE'];  
     $ISSBYDATE   = $row['ISSBYDATE'];  
     $STOCKOUTCOMMENT=$row['STOCKOUTCOMMENT'];  
     $SRFNO   = $row['SRFNO']; 
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
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row"> 
         
        <div class="col-xs-12">   
       <div class="container fluid" style="width:90%; ">  
  
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
         <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; margin-top:-18px; font-family:lcd;">
         GENERAL STORE REQUISITION FOR DRUGS AND SUPPLIES</p> </center> 
  
     <form id="form1" class="form-horizontal" action="stores_mgt_issued.php" method="POST" style="height:auto; font-weight:normal;">  
       
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>                                                                 
               <th style="width:13.25%; text-align:left;border:0px;">Requisition date</th>
                <td style="width:14.75%;border:0px;"><input type="text"id="DATECREATED" name="DATECREATED"  value=" <?php echo $DATECREATED; ?> "
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td> 
                  
               <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			   <th style="width:13.25%; text-align:left;border:0px;">SRF number</th>
                <td style="width:16.75%;border:0px;"><input type="text" name="SRFNO" id="SRFNO"   value=" <?php echo $SRFNO; ?> "
				style="width:100%; text-align:left;background-color:#fff;"> 
                </td>
                  
                <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;"> </th>
                <td style="width:14.75%; border:0px;">    </td> 
			</tr>             
            </table>
            <br>
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:13.25%; text-align:left;border:0px;">Requisition No.</th>
                <td style="width:14.75%;border:0px;"><input type="text"name="ORDERSERIALID" id="ORDERSERIALID" value=" <?php echo $ORDERSERIALID; ?> " required="required"  
				style="width:100%; text-align:right;background-color:#fff;"></td> 
                 
              <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Facility name</th>
              <td style="width:16.75%;border:0px;"><input type="text" name="FACILITYNANE" id="FACILITYNANE"    value=" <?php echo $FACILITYNANE; ?> "required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td>
                
                   <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;"> </th>
                <td style="width:14.75%; border:0px;">  </td>
                  
			 </tr>             
            </table>
               
              <br>
    <table border="1" cellpadding="4"  id="mytable1" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
   <th style="width:32%;background-color: #f9fafb;">DESCRIPTION </th> 
   <th style="width:7%;background-color: #f9fafb; text-align:center;">IN.STOCK</th> 
   <th style="width:7%;background-color: #f9fafb;text-align:center;">QTY.ISSUED</th>  
   <th style="width:15%;background-color: #f9fafb;text-align:center;">COLLECTED BY</th> 
   <th style="width:15%;background-color: #f9fafb;text-align:center;">TITLE</th>    
   <th style="width:15%;background-color: #f9fafb;text-align:center;">PURPOSE</th>
   <th style="width:7%;background-color: #f9fafb;text-align:center;">STOCK.BALANCE</th> 
     
      </tr>
      </thead>
      <tbody>

     
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr > 
                                                  
                                                  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff;;"/></td>
                                                   
                                                  <td> <input  name="fqx[]" readonly="" type="text" value="<?php  echo $fqx[$s]; ?>"   class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; text-align:center;"/></td> 
                                              
                                                  <td> <input  name="variance[]" type="numeric" value="<?php echo $variance[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;text-align:center;"/></td> 
                                                   
                                                  <td> <input  name="remdrt[]" type="numeric" value="<?php echo $remdrt[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td> 
                                                  
                                                   <td> <input  name="lcn[]" type="text" value="<?php echo $lcn[$s]; ?>"  required="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff; "/></td> 
                                                  
                                                   <td> <input  name="pdx[]" readonly="" type="text" value="<?php echo $pdx[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;text-align:left;"/></td>  
                                                    
                                                    <td> <input  name="qtyx[]" type="text" value="<?php echo $qtyx[$s]; ?>"  readonly="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;text-align:right;"/></td> 
                                                    
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
    </tbody>
  </table>     
     
       <div id="res" style="border:0px;"> </div> 
      
              <input type="hidden"id="REQUISTIONTYPE" name="REQUISTIONTYPE" value="GENERAL"  > 
           <br>
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
                <th style="width:100%;border:0px;background-color:#fff;"> <textarea name="STOCKOUTCOMMENT" 
				style="width:100%;" > 
				 <?php echo $STOCKOUTCOMMENT; ?> </textarea> </th>  
			 </tr>             
            </table>
            <br>
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>    
                  <th style="width:9%; text-align:left;border:0px;">Issued by</th>
                <td style="width:16%;border:0px;"><input type="text"id="ISSBY" name="ISSBY"   value=" <?php echo $ISSBY; ?> "      
				style="width:100%; background-color:#fff;height: 21px;"></td>  
                 <th style="width:75%; text-align:left;border:0px;"> </th>
			 </tr>             
             </table>
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>   
                  <th style="width:9%; text-align:left;border:0px;">Name</th>
                <td style="width:16%;border:0px;"><input type="text"id="ISSBYNAME" name="ISSBYNAME"  value=" <?php echo $ISSBYNAME; ?> "     
				style="width:100%; background-color:#fff;height: 21px;"></td>  
                 <th style="width:75%; text-align:left;border:0px;"> </th>
			 </tr>             
            </table>
            
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>   
                 
                  <th style="width:9%; text-align:left;border:0px;">Signature</th>
                <td style="width:16%;border:0px;"><input type="text"id=" "     
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td>  
                 <th style="width:75%; text-align:left;border:0px;"> </th>
			 </tr>             
            </table>
            
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>    
                  <th style="width:9%; text-align:left;border:0px;">Date</th>
                <td style="width:16%;border:0px;"><input type="text"id="ISSBYDATE" name="ISSBYDATE" value=" <?php echo $ISSBYDATE; ?> "         
				style="width:100%; background-color:#fff;height: 21px;"></td>  
                 <th style="width:75%; text-align:left;border:0px;"> </th>
			 </tr>             
            </table>
       
              <center> <input type="submit" name="buttonsend" id="button" value="Save" /> </center>   
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
		     sum    =sum+ parseFloat(table.rows[x].cells[11].childNodes[0].value);
		   }
		   document.getElementById("ORDERVALUE").value = ''+sum;
	 
	 }
	  
     function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domeeitem(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'" required="required"'+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';	
				 
	 var  sac = '<input type="text" name="variance[]" id="variance'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 				  
	 var  saf = '<input type="text" name="remdrt[]" id="remdrt'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 
	 var  s8lc = '<input type="date" name="lcn[]" id="lcn'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';		 
	
	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
 
    
   
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+sac+' </td>'+ 
				                  '<td>'+saf+' </td>'+
								  '<td>'+s8lc+' </td>'+ 
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
		  table.rows[x].cells[1].childNodes[0].id="dnx"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqx"+x;
		  table.rows[x].cells[3].childNodes[0].id="variance"+x; 
		  table.rows[x].cells[4].childNodes[0].id="remdrt"+x;
		  table.rows[x].cells[5].childNodes[0].id="lcn"+x;  
		  table.rows[x].cells[6].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[7].childNodes[0].id="qtyx"+x;  
		   
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script> 
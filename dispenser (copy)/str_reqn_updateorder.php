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
   $fuc = array(); 
  $dnx = array();
  $fqx = array();
  $qtyrecieved = array();
  $tmx = array();
  $variance = array(); 
  $batch = array();
  $expdet = array(); 
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
  	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM outgoingorders  WHERE `ORDERSERIALID` = '$id' AND REQUISTIONTYPE='STANDARD' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $ORDERSERIALID = $row['ORDERSERIALID']; 
     $REQUESTINGUNIT = $row['REQUESTINGUNIT'];
     $ORDERTYPE  = $row['ORDERTYPE'];
     $FACILITYNANE = $row['FACILITYNANE']; 
	 $fuc[] = $row['id'];
	 $dnx[] = $row['DESCRIPTION'];
     $fqx[]    = $row['QTYINSTOCK'];
	 $qtyrecieved[] = $row['QTYNEEDED']; 
     $tmx[]       = $row['UNITOFMEASURE']; 
	 $variance[]    = $row['QTYISSUED']; 
	 $batch[]       = $row['UNIT']; 
	 $expdet[]       = $row['STOCKBAL'];
	 $remdrt[]        = $row['BATCHNO']; 
	 $lcn[]        = $row['EXPIRY'];
     $pdx[]       = $row['UNITVALUE'];
	 $qtyx[]        = $row['AMOUNT']; 
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
      }

  ?>
   

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/assets/ionicons.min.css">
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../admin/assets/notifier.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../admin/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../admin/datatable/css/buttons.dataTables.min.css">

  <script src="../admin/datatable/js/jquery-1.12.3.js"></script>
  <script src="../admin/datatable/js/jquery.dataTables.min.js"></script>
  <script src="../admin/datatable/js/bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.buttons.min.js"></script>
  <script src="../admin/datatable/js/buttons.flash.min.js"></script>
  <script src="../admin/datatable/js/jszip.min.js"></script>
  <script src="../admin/datatable/js/pdfmake.min.js"></script>
  <script src="../admin/datatable/js/vfs_fonts.js"></script>
  <script src="../admin/datatable/js/buttons.html5.min.js"></script>
  <script src="../admin/datatable/js/buttons.print.min.js"></script>
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#dnxAVAILABLE"+num).val(data[2]);
  $("#remdrt").val(data[2]);
  $("#lcn").val(data[3]);
  $("#pdx").val(data[4]);  
}

   
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "searchstock_details2.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>

    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid black;
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
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="panel-body">
       <div class="container fluid" style="width:90%; border:2px solid;"> 
        <img src="../assets/img/logsbig.PNG" width="100%" height="30%">
           <center> <p style="color:#000; font-weight:bold;font-size:11px; background-color:#fff; margin-top:-15px; font-family:lcd;">
         STORE REQUISITION FOR DRUGS AND SUPPLIES</p> </center> 
  
   
     <form class="form-horizontal" action="str_reqn_updateorder_processor.php" method="POST" style="height:auto; font-weight:normal;">  
      
    
        <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:13.25%; text-align:left;border:0px;">Requisition date</th>
                <td style="width:14.75%;border:0px;"><input type="date"id="DATECREATED" name="DATECREATED" value="<?php  echo $DATECREATED; ?>" readonly="readonly"     
				style="width:100%; background-color:#fff;height: 21px;"></td> 
                  
               <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Requesting unit</th>
                <td style="width:16.75%;border:0px;"><input type="text" name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="<?php  echo $REQUESTINGUNIT; ?>"  
				style="width:100%; background-color:#fff;"> 
                </td>
                 
                 <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;">Order type</th>
                <td style="width:14.75%;border:0px;"> 
                <input type="text" name="ORDERTYPE" id="ORDERTYPE" value="<?php  echo $ORDERTYPE; ?>"   
                style="width:100%; text-align:left;background-color:#fff;"> 
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-16px;"> 
            <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:13.25%; text-align:left;border:0px;">Requisition No.</th>
                <td style="width:14.75%;border:0px;"><input type="text" name="ORDERSERIALID" id="ORDERSERIALID" value="<?php  echo $ORDERSERIALID; ?>"  
				style="width:100%; background-color:#fff;"></td> 
                 
                <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Facility name</th>
                <td style="width:16.75%;border:0px;"><input type="text" name="FACILITYNANE" id="FACILITYNANE"  value="<?php  echo $FACILITYNANE; ?>"  
				style="width:100%; background-color:#fff;"></td>
                
                   <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;"> Requisition type</th>
                <td style="width:14.75%;border:0px;"> <input type="text" name="REQUISTIONTYPE" id="REQUISTIONTYPE"  value="<?php  echo $REQUISTIONTYPE; ?>"  
				style="width:100%; background-color:#fff;"></td> 
                  
			 </tr>             
            </table>
              
            
      <p style="font-weight:normal;">Description of request</p>
           
   <table class="table table-table-tabled" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>  
      <th style="background-color: #fff;">*</th>
   <th style="width:5%;background-color:#fff;">S/NO </th>   
   <th style="width:30%;background-color:#fff;">DESCRIPTION </th> 
   <th style="width:5%;background-color: #fff; text-align:center;">QTY IN STOCK</th> 
    <th style="width:5%;background-color:#fff;text-align:center;">QTY NEEDED </th>
   <th style="width:15%;background-color:#fff;text-align:center;">UNIT OF MEASURE </th>
   <th style="width:5%;background-color: #fff;text-align:center;">QTY ISSUED</th>
   <th style="width:6%;background-color: #fff;">UNIT </th>
   <th style="width:7%;background-color: #fff;">STOCK BAL</th>
   <th style="width:7%;background-color: #fff;">BATCH NO.</th>
   <th style="width:7%;background-color: #fff;text-align:center;">EXPIRY</th>    
   <th style="width:7%;background-color: #fff;text-align:center;">UNIT VALUE</th>
   <th style="width:7%;background-color: #fff;text-align:center;">AMOUNT</th> 
 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  
                                                   <td> <input name="dnx[]"  type="text" value="<?php  echo $fuc[$s]; ?>" class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; text-align:center;border:0px;"/></td> 
                                                   
                                                  <td> <input name="dnx[]"  type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; "/>
                                                 </td>
                                                   
                                                  <td> <input  name="fqx[]"  type="text" value="<?php  echo $fqx[$s]; ?>"   class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; text-align:center;border:0px;"/></td> 
                                                    
                                                   
                                                     <td> <input  name="qtyrecieved[]" type="numeric" value="<?php echo $qtyrecieved[$s]; ?>" required="required" 
                                                     class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;text-align:center;border:0px;"/></td>  
                                                  
                                                  <td> <input  name="tmx[]" type="numeric" value="<?php echo $tmx[$s]; ?>"  readonly="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>
                                                  
                                                  
                                                  <td> <input  name="variance[]" type="numeric" value="<?php echo $variance[$s]; ?>" class="form-control required=""
                                                  input-md" style= "width:100%; background-color:#fff;text-align:center; "/></td> 
                                                  
                                                  <td> <input  name="batch[]" type="numeric" value="<?php echo $batch[$s]; ?>"  class="form-control required=""
                                                  input-md" style= "width:100%; background-color:#fff; "/></td> 
                                                  
                                                  <td> <input  name="expdet[]" type="numeric" value="<?php echo $expdet[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff; "/></td> 
                                                  
                                                  <input  type="hidden" name="dnxAVAILABLE"  />
                                                  
                                                  <td> <input type="text"  name="remdrt[]" onKeyUp="domee(this)"  value="<?php echo $remdrt[$s]; ?>" 
                                                  autocomplete="off"  
                                                  required="required" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff; "/></td> 
                                                   
                                                  
                                                   <td> <input  name="lcn[]" type="text" value="<?php echo $lcn[$s]; ?>"   class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff; "/></td> 
                                                  
                                                   <td> <input  name="pdx[]" type="text" value="<?php echo $pdx[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fcfdfe;text-align:right;"/></td>  
                                                    
                                                    <td> <input  name="qtyx[]" type="numeric" value="<?php echo $qtyx[$s]; ?>"   class="form-control 
                                                  input-md" style= "width:100%; background-color:#fcfdfe;text-align:right; "/></td> 
                                                    
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
    </tbody>
  </table>     
       
    <input type="hidden"id="STOCKISSUANCESTATUS" name="STOCKISSUANCESTATUS" value="ISSUED" >  
    <input type="hidden"id="ISSBY" name="ISSBY" value="<?php  echo $desc; ?>">
    <input type="hidden"id="ISSBYNAME" name="ISSBYNAME" value="<?php  echo $nameofuser; ?>" >
    <input type="hidden" id="ISSBYDATE" name="ISSBYDATE" value="<?php echo date('y-m-d'); ?>">  
    <input type="hidden"id="ISSUERACCOUNT" name="ISSUERACCOUNT" value="<?php  echo $rm; ?>">
    
    <input type="hidden" name="ORDERSERIALID" id="ORDERSERIALID"  value="<?php  echo $ORDERSERIALID; ?>" >
    
    <center> <input type="submit" name="buttonsend" id="button" value="Save" /> </center>   
      </form>
      <div id="res"> </div> 
     
       
      <table class="table-responsive" style="margin-top:-7px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                 <th style="width:85%; text-align:left;border:0px; text-align:right;">Order valuation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                 </th>
                <td style="width:15%;border:0px;"><input type="numeric" name="ORDERVALUE" id="ORDERVALUE"  value="<?php  echo $totals; ?>" 
				style="width:100%; text-align:right;background-color:#f8f2f1; font-weight:bold; font-size:16px;"></td>  
			  
			 </tr>             
            </table>
            
            
        <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;"> </th>
                <td style="width:15%;border:0px;"> </td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;"> </th>
                <td style="width:15%;border:0px;">  </td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;"> </th>
                <td style="width:15%;border:0px;"> </td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Issued by</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBY" name=""   value="<?php  echo $desc; ?>" readonly=""    
				style="width:100%;  background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table> 
            
            
               <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">                
              <tr>  
                <th style="width:9%; text-align:left;border:0px;"> </th>
                <td style="width:15%;border:0px;"> </td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;"> </th>
                <td style="width:15%;border:0px;"> </td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;"> </th>
                <td style="width:15%;border:0px;"> </td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Name</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBYNAME" name="" value="<?php  echo $nameofuser; ?>" readonly=""      
				style="width:100%; background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
            
           
            
           
             <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;"> </th>
                <td style="width:15%;border:0px;"> </td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;"> </th>
                <td style="width:15%;border:0px;"> </td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;"> </th>
                <td style="width:15%;border:0px;"> </td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Date</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBYDATE" name=""  value="<?php echo date('y-m-d'); ?>"      
				style="width:100%; background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table> 

      </section>
      <!-- /.content -->
    
<!-- ./wrapper -->
<!-- Morris.js charts -->
     <script src="../assets/lib/moment/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../admin/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../admin/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../admin/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
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
				 
					 
	 var  sab = '<input type="text" name="qtyrecieved[]" id="qtyrecieved'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 
	 var  s3cc = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:left;">';
 		 			 
				  
	 var  sac = '<input type="text" name="variance[]" id="variance'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 			 
	 var  sad = '<input type="text" name="batch[]" id="batch'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 			 
	 var  sae = '<input type="text" name="expdet[]" id="expdet'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 			 			 
	 var  saf = '<input type="text" name="remdrt[]" id="remdrt'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 
	 var  s8lc = '<input type="date" name="lcn[]" id="lcn'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';		 
	
	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
 
    
   
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+sab+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+sac+' </td>'+
								  '<td>'+sad+' </td>'+
								  '<td>'+sae+' </td>'+ 
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
		  table.rows[x].cells[3].childNodes[0].id="qtyrecieved"+x;
		  table.rows[x].cells[9].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[4].childNodes[0].id="variance"+x;
          table.rows[x].cells[5].childNodes[0].id="batch"+x; 
		  table.rows[x].cells[6].childNodes[0].id="expdet"+x;
		  table.rows[x].cells[7].childNodes[0].id="remdrt"+x;
		  table.rows[x].cells[8].childNodes[0].id="lcn"+x;  
		  table.rows[x].cells[10].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[11].childNodes[0].id="qtyx"+x;  
		   
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script> 
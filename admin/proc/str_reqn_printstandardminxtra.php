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
    <body onLoad="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
       <body class="  ">
        <script>
function myFunction() {
    window.print();
}
</script>
        
        <div class="col-xs-12">    
       <div class="container fluid"  style="width:95%; border: 2px solid #fef9f9;"> 
       
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
           <center> <p style="color:#000; font-weight:bold;font-size:11px; background-color:#fff;">
         STORE REQUISITION FOR DRUGS AND SUPPLIES</p> </center> <br>
      <form class="form-horizontal" action="str_reqn_updateorder_processor.php" method="POST" style="height:auto; font-weight:normal;">  
      
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
                 <th style="width:13.25%; text-align:left;border:0px;">Requisition date</th>
                <td style="width:14.75%;border:0px;"><input type="text"id="DATECREATED" name="DATECREATED" value="<?php  echo $DATECREATED; ?>" readonly="readonly"     
				style="width:100%; background-color:#fff; "></td> 
                  
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
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
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
              
            
     <br>
      <label style="font-weight:normal;">Description of request</label>
      
          
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>    
      <th style="background-color: #fff;">*</th>
   <th style="width:5%;background-color:#fff;">S/NO </th>   
   <th style="width:27%;background-color:#fff;">DESCRIPTION </th> 
   <th style="width:5%;background-color: #fff; text-align:center;">QTY IN STOCK</th> 
    <th style="width:5%;background-color:#fff;text-align:center;">QTY NEEDED </th>
   <th style="width:15%;background-color:#fff;text-align:center;">UNIT OF MEASURE </th>
   <th style="width:5%;background-color: #fff;text-align:center;">QTY ISSUED</th>
   <th style="width:6%;background-color: #fff;">UNIT </th>
   <th style="width:7%;background-color: #fff;">STOCK BAL</th>
   <th style="width:7%;background-color: #fff;">BATCH NO.</th>
   <th style="width:7%;background-color: #fff;text-align:center;">EXPIRY</th>    
   <th style="width:7%;background-color: #fff;text-align:center;">UNIT VALUE</th>
   <th style="width:10%;background-color: #fff;text-align:center;">AMOUNT</th> 
 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  
                                                   <td> <input name="dnx[]"  type="text" value="<?php  echo $fuc[$s]; ?>" class="form-control input-md" required="required" 
                                                   style= "width:100%; background-color:#fff; text-align:center;border:0px;"/></td> 
                                                   
                                                  <td> <input name="dnx[]"  type="text" value="<?php  echo $dnx[$s]; ?>" required="required" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; "/>
                                                 </td>
                                                   
                                                  <td> <input  name="fqx[]"  type="text" value="<?php  echo $fqx[$s]; ?>"   class="form-control input-md" required="required" 
                                                   style= "width:100%; background-color:#fff; text-align:center;border:0px;"/></td> 
                                                    
                                                   
                                                     <td> <input  name="qtyrecieved[]" type="numeric" value="<?php echo $qtyrecieved[$s]; ?>" required="required" 
                                                     class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;text-align:center;border:0px;"/></td>  
                                                  
                                                  <td> <input  name="tmx[]" type="numeric" value="<?php echo $tmx[$s]; ?>"  required="required"  class="form-control 
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
                                                  input-md" style= "width:100%; background-color:#fff; height:21px; "/></td> 
                                                  
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
    
   
      <div id="res"> </div> 
     
       <br>
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>    
                 <th style="width:85%; text-align:left;border:0px; text-align:right;">Order valuation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                 </th>
                <td style="width:15%;border:0px;"><input type="numeric" name="ORDERVALUE" id="ORDERVALUE"  value="<?php  echo $totals; ?>"  readonly=""
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold; font-size:16px;"></td>  
			  
			 </tr>             
            </table>
            
            <br>
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
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
            
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
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
            
           
            
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
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
                 
                  <th style="width:9%; text-align:left;border:0px;">Issued date</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBYDATE" name=""  value="<?php echo date('y-m-d'); ?>"  required=""    
				style="width:100%; background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>   
      </form>
       
 
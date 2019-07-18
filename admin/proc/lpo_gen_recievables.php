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
  $TERMSOFDELIVERY = '';
  $NOTEA  = '';
  $NOTEB = '';
  $NOTEC = '';
  $REVTITLE = '';
  $APPROVERTITLE = '';
  $DATEREQUIRED = '';
  $desc = array();
  $qty = array();
  $uom = array();
  $escost = array();
  $marktp = array();
  $SUBTOTAL = '';
  $TAX = '';
  $TOTALCOST = '';
  $REVNAME = '';
  $APPROVERNAME = '';
  $SERVICEPROVIDER='';
  $SVPLOCATION = '';
  $SVPADDRESS = '';  
  $DATECREATED='';
  $TIMESTAMP='';
  $LPONO=''; 
 
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM recievables  WHERE `ORDERSERIALID` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $ORDERSERIALID = $row['ORDERSERIALID'];
     $TERMSOFDELIVERY = $row['TERMSOFDELIVERY'];
     $NOTEA  = $row['NOTEA'];
     $NOTEB = $row['NOTEB'];
     $NOTEC = $row['NOTEC'];
     $REVTITLE = $row['REVTITLE'];
     $APPROVERTITLE = $row['APPROVERTITLE'];
     $DATEREQUIRED = $row['DATEREQUIRED'];
	 $LPONO = $row['LPONO'];  
	 $dnx[] = $row['DESCRIPTION'];
     $fqx[]    = $row['QUANTITY'];
     $tmx[]       = $row['UNITOFMEASURE'];  
     $pdx[]       = $row['UNITCOST'];
	 $qtyx[]        = $row['ITEMPRICE'];
	  
     $SUBTOTAL = $row['SUBTOTAL'];
     $TAX = $row['TAX'];
     $TOTALCOST   = $row['TOTALCOST'];
     $REVNAME = $row['REVNAME'];
     $APPROVERNAME = $row['APPROVERNAME'];
     $SERVICEPROVIDER = $row['SERVICEPROVIDER'];
     $SVPLOCATION  = $row['SVPLOCATION'];  
     $SVPADDRESS=$row['SVPADDRESS'];
     $DATECREATED=$row['DATECREATED']; 
      }

  ?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>.</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

  <script src="../datatable/js/jquery-1.12.3.js"></script>
  <script src="../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../datatable/js/bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../datatable/js/buttons.flash.min.js"></script>
  <script src="../datatable/js/jszip.min.js"></script>
  <script src="../datatable/js/pdfmake.min.js"></script>
  <script src="../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
  <script src="../datatable/js/buttons.print.min.js"></script>
  
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
       <div class="container fluid" style="width:90%; ">  
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; margin-top:0px;">  LOCAL PURCHASE ORDER  </p> </center> 
  
           
  
     <form id="form1" class="form-horizontal" action="lpo_gen_processor.php" method="POST" style="height:auto; font-weight:normal;">  
        <br><br>
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:70%; text-align:left; border:0px;"><?php  echo $SERVICEPROVIDER; ?> </th>
                 <th style="width:11%; text-align:left;border:0px;">Order No.</th>
                <td style="width:18%;border:0px;"> <?php  echo $LPONO; ?> </td>  
			  
			 </tr>             
            </table>
            
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
               <th style="width:70%; text-align:left; border:0px;"> <?php  echo $SVPADDRESS; ?> </th>
                 <th style="width:11%; text-align:left;border:0px;">Date</th>
                <td style="width:18%;border:0px;"> <?php  echo $TIMESTAMP; ?> </td>  
			 </tr>             
            </table>
             
                <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
               <th style="width:70%; text-align:left; border:0px;"><?php  echo $SVPLOCATION; ?> </th>
                 <th style="width:11%; text-align:left;border:0px;"> Serial No.</th>
                <td style="width:18%;border:0px;"> <?php  echo $ORDERSERIALID; ?>  </td>  
			 </tr>             
            </table> 
            </table>    
         
            <br>
     <label style="font-weight:normal;">Please deliver the following items.</label>
    
      
              
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
       <th style="width:42%;">DESCRIPTION </th> 
   <th style="width:10%; text-align:center;">QUANTITY</th> 
     <th style="width:18%;">UNIT OF MEASURE</th>
   <th style="width:14.25%; text-align:center;">RATE</th>
   <th style="width:14.75%; text-align:center;">AMOUNT</th>  
         
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr > 
                                                  <td> <?php  echo $dnx[$s]; ?>  </td>
                                                   
                                                  <td style="text-align:center;">  <?php  echo $fqx[$s]; ?> </td> 
                                                  
                                                  <td> <?php echo $tmx[$s]; ?> </td>
                                                  
                                                   <td  style="text-align:right;">  <?php echo $pdx[$s]; ?> </td>  
                                                    
                                                    <td  style="text-align:right;">  <?php echo $qtyx[$s]; ?> </td> 
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
                                <br> 
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:70.7%; text-align:left;border:0px; "> </th>
                 <th style="width:14.3%; text-align:left;">SUB TOTAL</th>
                <td style="width:15%; text-align:right;"><?php echo $totals;?> </td>  
			  
			 </tr>             
            </table>
            
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:70.7%; text-align:right;border:0px; "> </th>
                 <th style="width:14.3%;text-align:left;">VAT</th>
                <td style="width:15%;text-align:right;"> <?php  echo $TAX; ?> </td>  
			 </tr>             
            </table>
            
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px;	stext-align:left;" width="100%">
		<thead> 
		<tr> 
                 <th style="width:70.7%; text-align:right;border:0px;"> </th>
                 <th style="width:14.3%; text-align:left; ">GRAND.TOTAL</th>
                <td style="width:15%; text-align:right;"> <?php  echo $TOTALCOST; ?> </td>  
			  
			 </tr>             
            </table>
          <br>
     <label style="font-weight:normal;">Terms of delivery </label>
     
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:100%;border:0px;"> <textarea name="TERMSOFDELIVERY" style="width:100%;">  <?php echo $TERMSOFDELIVERY;?>  
				</textarea> </th>  
			 </tr>             
            </table>
               <br>
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			    <th style="width:10%;border:0px;">  </th>
				<th style="width:23.3333333%;border:0px;"> <b> Approved by<b> </th>
                <th style="width:33.3333333%; border:0px;"> </th> 
				 <th style="width:10%; border:0px;">   </th>
                <td style="width:23.3333333%;border:0px;"> <b>Reviewed and approved by<b> </td>
              </tr>
              
              <tr>
			    <th style="width:10%;font-weight:normal;border:0px;"> Name</th>
				<th style="width:23.3333333%;border:0px;"> <?php  echo $APPROVERNAME; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;border:0px;">Name </th>
                <td style="width:23.3333333%;border:0px;"> <?php  echo $REVNAME; ?> </th>
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;border:0px;"> Signature</th>
				<th style="width:23.3333333%;border:0px;">  </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;border:0px;"> Signature</th>
                <td style="width:23.3333333%;border:0px;"> </td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;border:0px;">Title </th>
				<th style="width:23.3333333%;border:0px;"> <?php  echo $APPROVERTITLE; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;border:0px;">Title </th>
                <td style="width:23.3333333%;border:0px;"> <?php  echo $REVTITLE; ?> </td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;border:0px;">Date </th>
				<th style="width:23.3333333%;border:0px;">   </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;border:0px;">Date </th>
                <td style="width:23.3333333%;border:0px;"> </td>
              </tr>
            </table>  
             <br>
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>   
                <td style="width:100%;border:0px;"> <?php  echo $NOTEA; ?>   </td>  
			  
			 </tr>             
            </table>  
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>   
                <td style="width:100%;border:0px;"> <?php  echo $NOTEB; ?>   </td>  
			  
			 </tr>             
            </table> 
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>   
                <td style="width:100%;border:0px;"><?php  echo $NOTEC; ?>   </td>  
			  
			 </tr>             
            </table>  
            
            
        </form>
  
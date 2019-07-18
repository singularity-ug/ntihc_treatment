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
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../assets/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../../assets/notifier.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">

  <script src="../../datatable/js/jquery-1.12.3.js"></script>
  <script src="../../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../../datatable/js/bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../../datatable/js/buttons.flash.min.js"></script>
  <script src="../../datatable/js/jszip.min.js"></script>
  <script src="../../datatable/js/pdfmake.min.js"></script>
  <script src="../../datatable/js/vfs_fonts.js"></script>
  <script src="../../datatable/js/buttons.html5.min.js"></script>
  <script src="../../datatable/js/buttons.print.min.js"></script>
  
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
       <body class="  ">
        <script>
function myFunction() {
    window.print();
}
</script>
        <div class="col-xs-12">   
       <div class="container fluid" style="width:90%; ">  
 
        <img src="../../../assets/img/logsbig.PNG" width="100%" height="30%" style="height:95px;">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; margin-top:-15px;">  LOCAL PURCHASE ORDER  </p> </center> 
  
           
  
     <form id="form1" class="form-horizontal" action="lpo_gen_processor.php" method="POST" style="height:auto; font-weight:normal;">  
        <br><br>
        <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:70%; text-align:left; border:0px;"><?php  echo $SERVICEPROVIDER; ?> </th>
                 <th style="width:11%; text-align:left;">Order No.</th>
                <td style="width:18%"> <?php  echo $LPONO; ?> </td>  
			  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:70%; text-align:left; border:0px;"> <?php  echo $SVPADDRESS; ?> </th>
                 <th style="width:11%; text-align:left;">Date</th>
                <td style="width:18%"> <?php  echo $TIMESTAMP; ?> </td>  
			 </tr>             
            </table>
             
                <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:70%; text-align:left; border:0px;"><?php  echo $SVPLOCATION; ?> </th>
                 <th style="width:11%; text-align:left;"> Serial No.</th>
                <td style="width:18%"> <?php  echo $ORDERSERIALID; ?>  </td>  
			 </tr>             
            </table> 
            </table>    
         
            
      <p style="font-weight:bold;">Please deliver the following items.</p>
    
        <table class="table table-table table-tabled" id="mytable1" style="font-weight:normal;">
    <thead>
      <tr>
      <th>DESCRIPTION </th> 
      <th style="text-align:center;">QUANTITY</th> 
      <th>UNIT OF MEASURE</th>
      <th style="text-align:right;">RATE</th>
      <th style="text-align:right;">AMOUNT</th>  
									</tr>
								</thead>
								<tbody>  
									<?php
										$total=0;
									    $total1=0; 
										$s=mysqli_query($conn,"select * ,(TAX/100)*QUANTITY*UNITCOST as aftertax, QUANTITY*UNITCOST as subx from recievables  
										where ORDERSERIALID='$id'");
										while($srow=mysqli_fetch_array($s)){
											?>
											<tr>
                                            
												<td><?php echo $srow['DESCRIPTION']; ?></td>
												 
												<td style="text-align:center;"><?php echo $srow['QUANTITY']; ?></td> 
												
												<td><?php echo $srow['UNITOFMEASURE']; ?></td>
                                               
											    <td style="text-align:right;"><?php echo number_format($srow['UNITCOST'],2); ?></td>
                                                 
												<td style="text-align:right;">
													<?php 
														$sub=$srow['subx'];
														echo number_format($sub,2);
														$total+=$sub;
													?>
												</td> 
												
												 <td colspan="5" class="hidden"><?php 
														$sub=$srow['subx']-$sub=$srow['aftertax'];
														echo number_format($sub,2);
														$total1+=$sub;
													?> </td> 
													
												 
											</tr>
											<?php
										}
									?>
									
									 
									<tr>
										<td colspan="4" align="left"><strong>Sub Total</strong></td>
                                        <td style="text-align:right;"><strong><?php echo number_format($total,2); ?></strong></td> 
									</tr>
									
									<tr>
										<td colspan="4" style="text-align:left;"><strong>Tax</strong></td>
                                        <td style="text-align:right;"><strong>  <?php  echo $TAX; ?> % </strong></td> 
									</tr>
									
									<tr>
										<td colspan="4" align="left"><strong>Grand Total</strong></td>
                                        <td style="text-align:right;"><strong><?php echo number_format($total1,2); ?></strong></td> 
									</tr>
								</tbody>
							</table>
							 
        <br/>

      
          
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;border: 0px;" width="100%"> <b> Terms of delivery </b>
		<thead> 
		<tr> 
            <table class="table" style="border:0px;">
              <tr>
                <th style="width:100%;border:0px;"> <textarea name="TERMSOFDELIVERY" style="width:100%; border:0px;">  <?php echo $TERMSOFDELIVERY;?>  
				</textarea> </th>  
			  
			 </tr>             
            </table>
               
              <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th colspan="2" style="width:33.3333333%;border:0px;">Approved by  </th>
                <th style="width:33.3333333%; border:0px;"> </th>  
                <td colspan="2" style="width:33.3333333%;border:0px;">Reviewed and approved by </td>
              </tr>
              <tr>
			    <th style="width:10%;font-weight:normal;"> Name</th>
				<th style="width:23.3333333%"> <?php  echo $APPROVERNAME; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Name </th>
                <td style="width:23.3333333%"> <?php  echo $REVNAME; ?> </th>
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;"> Signature</th>
				<th style="width:23.3333333%">  </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;"> Signature</th>
                <td style="width:23.3333333%"> </td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Title </th>
				<th style="width:23.3333333%"> <?php  echo $APPROVERTITLE; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Title </th>
                <td style="width:23.3333333%"> <?php  echo $REVTITLE; ?> </td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Date </th>
				<th style="width:23.3333333%">   </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Date </th>
                <td style="width:23.3333333%"> </td>
              </tr>
            </table>  
             <br>
           <table class="table-responsive" style="margin-top:0px;"> <b>Note:</b>
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%;border:0px;"> <?php  echo $NOTEA; ?>   </td>  
			  
			 </tr>             
            </table>  
            
             <table class="table-responsive" style="margin-top:-23px;">  
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%;border:0px;"> <?php  echo $NOTEB; ?>   </td>  
			  
			 </tr>             
            </table> 
            
            <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%;border:0px;"><?php  echo $NOTEC; ?>   </td>  
			  
			 </tr>             
            </table>  
            
            
        </form>
  

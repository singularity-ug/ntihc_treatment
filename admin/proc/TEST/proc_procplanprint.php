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
 $password = "";
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
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:14px; background-color:#fff; margin-top:-18px; font-family:lcd;">  LOCAL PURCHASE ORDER  </p> </center> 
  
     <form id="form1" class="form-horizontal" action="lpo_gen_processor.php" method="POST" style="height:auto; font-weight:normal;">  
        <br>
        <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:70%; text-align:right; border:0px;"> </th>
                 <th style="width:11%; text-align:left;">Order No.</th>
                <td style="width:18%"> <?php  echo $LPONO; ?> </td>  
			  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:70%; text-align:right; border:0px;"> </th>
                 <th style="width:11%; text-align:left;">Date</th>
                <td style="width:18%"> <?php  echo $TIMESTAMP; ?> </td>  
			 </tr>             
            </table>
             
              
              <table class="table-responsive" style="margin-top:0px;border:0px;" > 
            <table class="table"  style="border:0px;">
              <tr>   
                <td style="width:100%;border:0px;"> <?php  echo $SERVICEPROVIDER; ?> </td>  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-20px;border:0px;"> 
            <table class="table" style="border:0px;">
              <tr>  
                 <td style="width:100%; border:0px;"> <?php  echo $SVPADDRESS; ?> </td>  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-20px;border:0px;"> 
            <table class="table" style="border:0px;">
              <tr>   
              <td style="width:100%;border:0px;"> <?php  echo $SVPLOCATION; ?> </td>  
			  
			 </tr>             
            </table>   
            
      <p style="font-weight:bold;">Please deliver the following items.</p>
    
      
              
   <table class="table table-striped" id="mytable1" style="font-weight:normal; margin-top:-10px;">
    <thead>
      <tr>
       <th style="width:2%;">*</th>
       <th style="width:40%;">DESCRIPTION </th> 
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
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <?php  echo $dnx[$s]; ?> </td>
                                                   
                                                  <td style="text-align:center;">  <?php  echo $fqx[$s]; ?> </td> 
                                                  
                                                  <td> <?php echo $tmx[$s]; ?> </td>
                                                  
                                                   <td  style="text-align:right;">  <?php echo $pdx[$s]; ?> </td>  
                                                    
                                                    <td  style="text-align:right;">  <?php echo $qtyx[$s]; ?> </td> 
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
                                
      <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:71.88%; text-align:left; border:0px;"> </th>
                 <th style="width:14.05%; text-align:left;">SUB TOTAL</th>
                <td style="width:14.07%; text-align:right;"><?php echo $totals;?> </td>  
			  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71.88%; text-align:right; border:0px;"> </th>
                 <th style="width:14.05%;text-align:left;">VAT</th>
                <td style="width:14.07%;text-align:right;"> <?php  echo $TAX; ?> </td>  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr> 
                 <th style="width:71.88%; text-align:right; border:0px;"> </th>
                 <th style="width:14.05%; text-align:left;">GRAND.TOTAL</th>
                <td style="width:14.07%; text-align:right;"> <?php  echo $TOTALCOST; ?> </td>  
			  
			 </tr>             
            </table>
          
     
            <table class="table-responsive" style="margin-top:-20px;"> <b>Terms of delivery</b>
            <table class="table" style="border:0px;">
              <tr>
                <th style="width:100%;border:0px;">  <?php echo $TERMSOFDELIVERY;?>  
				</textarea> </th>  
			  
			 </tr>             
            </table>
               
              <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:10%;border:0px;">  </th>
				<th style="width:23.3333333%;border:0px;"> <b> Approved by<b> </th>
                <th style="width:33.3333333%; border:0px;"> </th> 
				 <th style="width:10%; border:0px;">   </th>
                <td style="width:23.3333333%;border:0px;"> <b>Reviewed and approved by<b> </td>
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
				<th style="width:23.3333333%"> "<?php  echo $APPROVERTITLE; ?> </th>
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
            
             <table class="table-responsive" style="margin-top:0px;">  
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%;border:0px;"> <?php  echo $NOTEB; ?>   </td>  
			  
			 </tr>             
            </table> 
            
            <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%;border:0px;"><?php  echo $NOTEC; ?>   </td>  
			  
			 </tr>             
            </table>  
            
        <input type="hidden" name="ORDERSERIALID" id="ORDERSERIALID" value="<?php  echo $ORDERSERIALID; ?>" readonly=""  >    
             
        </form>
  
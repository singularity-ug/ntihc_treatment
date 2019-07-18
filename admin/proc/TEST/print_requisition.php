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
	 $marktp[]        = $row['MARKETPRICE'];
	  
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
        <div class="col-sm-1"> </div>
  <div class="col-sm-10">
        <img src="../../../assets/img/logsbig.PNG" width="100%" height="100%" style="height:95px;">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff;"> <b>REQUEST FOR APPROVAL OF PROCUREMENT</b> </p> </center> 
 
 
     <p style="font-size:11px; "> PART 1: REQUEST BY USER DEPARTMENT FOR APPROVAL OF PROCUREMENT METHOD</p>
         
            
    <p style="text-align:left; font-size:12px;"> Procurement Reference Number </p>
            
             
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px; text-align:left;" width="100%">
		<thead> 
		<tr> 
              <th>Code of procuring and Disposing Entity</th>
              <th>Supplies / Works / Non-consultancy services</th>
              <th>Financial period</th>
              <th>Serial number</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td> <?php  echo $PDECODE; ?>  </td>

              <td><?php  echo $PDECODE; ?> </td>

              <td> <?php  echo $FINANCIALYEAR; ?> </td>

              <td> <?php  echo $REQUISITIONID; ?> </td>
            </tr>
            <tr>
            </tbody>
            </table> 
      <br>
           <p style="text-align:left; font-size:12px;">Particulars of Procurement</p>
               
		     
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px; text-align:left;" width="100%">
		<thead> 
		<tr>  
        <td style="width:25%;"><b>Subject of procurement</b></td>
        <td style="width:75%;"><textarea style="width:100%;"> <?php  echo $SUBJECTOFPROCUREMENT; ?></textarea> </td> 
      </tr> 
    </tbody>
  </table> 
  
  <br>
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px; text-align:left;" width="100%">
		<thead> 
		<tr> 
        <th>Procurement plan reference </th>
        <th>Location for delivery</th>
        <th>Date required</th> 
         
               
      </tr>
    </thead>   
    <tbody>
      <tr>
        <th><?php  echo $PROCUREMENTPLANREF; ?> </th>
        
        <th style="width:25%;"><?php  echo $LOCATIONFORDELIVERY; ?> </th>
        
        <td><?php  echo $DATEREQUIRED; ?> </td>  
    </tr> 
    </tbody>
    </table> 
     <br>

     <p style="text-align:left; font-size:12px;">Details relating to the Procurement</p>
               
 <table class="table table-table table-tabled" id="mytable1" style="font-weight:normal;">
    <thead>
      <tr>
   <th style="width:50%;">DESCRIPTION  </th>
   <th style="">UNIT OF MEASURE</th>
   <th style="text-align:center;">QUANTITY</th>  
   <th style="text-align:center;">RATE</th>
   <th style="text-align:center;">AMOUNT</th> 
									</tr>
								</thead>
								<tbody> 
									<?php
										$total=0; 
										$s=mysqli_query($conn,"select * from procreqn  
										where REQUISITIONID='$id'");
										while($srow=mysqli_fetch_array($s)){
											?>
											<tr>
                                            
												<td><?php echo $srow['DESCRIPTION']; ?></td>
												
												<td><?php echo $srow['UNITOFMEASURE']; ?></td>
												 
                                                
												<td style="text-align:center;"><?php echo $srow['QUANTITY']; ?></td> 
                                               
											    <td style="text-align:right;"><?php echo number_format($srow['ESTIMATEDCOST'],2); ?></td>
                                                 
												<td style="text-align:right;">
													<?php 
														$sub=$srow['QUANTITY'] * $srow['ESTIMATEDCOST'];
														echo number_format($sub,2);
														$total+=$sub;
													?>
												</td> 
											</tr>
											<?php
										}
									?>
									<tr>
										<td colspan="4" align="left"><strong>Grand Total</strong></td>
                                        <td style="text-align:right;"><strong><?php echo number_format($total,2); ?></strong></td> 
									</tr>
								</tbody>
							</table>
							
        <br/>
		
		 
 
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
				<th colspan="2" style="width:33.3333333%;border:0px;"> <b>(1) Request for procurement<b> </th>
                <th style="width:33.3333333%; border:0px;"> </th> 
                <td colspan="2" style="width:23.3333333%;border:0px;"> <b>(2) Confirmation of request<b> </td>
              </tr>
              <tr>
			    <th style="width:10%;font-weight:normal;"> NAME</th>
				<th style="width:23.3333333%">  <?php  echo $RFPUSERNAME; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">NAME </th>
                <td style="width:23.3333333%"> <?php  echo $CORNAME; ?>  </th>
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;"> SIGNATURE</th>
				<th style="width:23.3333333%">  <?php  echo $RFPSIGNATURE; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;"> SIGNATURE</th>
                <td style="width:23.3333333%"> <?php  echo $CORSIGNATURE; ?> </td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">TITLE </th>
				<th style="width:23.3333333%"> <?php  echo $RFPTITLE; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">TITLE </th>
                <td style="width:23.3333333%"> <?php  echo $CORTITLE; ?> </td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">DATE </th>
				<th style="width:23.3333333%">   <?php  echo $RFPDATE; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">DATE </th>
                <td style="width:23.3333333%"> <?php  echo $CORDATE; ?> </td>
              </tr>
            </table>
			    <br>
				   
	  
             <p style="text-align:left; font-size:12px;">Availability of funds to be confirmed prior to approval by Accounting Officer </p>
                
			
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
        <th> Code number</th> 
        <th> Budget line description </th>
        <th> Programme</th> 
        <th> Sub programme</th> 
        <th> Remaining on budget</th> 
      </tr>
    </thead>   
    <tbody>
      <tr>   
            
              <td><?php  echo $VOTE_HEADNO; ?></td>
              <td><?php  echo $SUBPROGRAMME; ?></td>

              <td><?php  echo $PROGRAMME; ?> </td>

            
              <td><?php  echo $ITEM; ?></td>

              <td><?php  echo $BALANCEREMAINING; ?> </td>
            </tr>
            <tr>
            </tbody>
          </table>
   
  <br>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
				<th colspan="2" style="width:33.3333333%;border:0px;"> <b> (3) Confirmation of funding and approval to procurement<b> </th>
                <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr>
              <tr>
			    <th style="width:10%;font-weight:normal;"> NAME</th>
				<th style="width:23.3333333%"> <?php  echo $AONAME; ?> </th>
               <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;"> SIGNATURE</th>
				<th style="width:23.3333333%"> <?php  echo $AOSIGNATURE; ?></th>
                <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">TITLE </th>
				<th style="width:23.3333333%">  <?php  echo $AOTITLE; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">DATE </th>
				<th style="width:23.3333333%"> <?php  echo $AODATE; ?> </th>
                <th style="width:33.3333333%; border:0px;"> </th>  
                <td style="width:33.3333333%;border:0px;"> </th>  
              </tr>
            </table>
  
          
                  
            
             </form>
			 
			 
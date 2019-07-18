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
       <div class="container fluid" style="width:80%; ">  

        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; margin-top:0px; font-family:lcd;"> DELIVERY NOTE</p> </center>

        <form id="form1" class="form-horizontal" action="str_reqn_dsprocess.php" method="POST" style="height:auto; font-weight:normal;">
        
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 

                <th style="width:13.25%; text-align:left;border:0px;"> </th>
                <td style="width:14.75%;border:0px;"> </td>

               <th style="width:9.33333333%; text-align:left; border:0px;"> </th>
			   <th style="width:13.25%; text-align:left;border:0px;"> </th>
               <td style="width:16.75%;border:0px;">
                </td>

                <th style="width:7.33333333%; text-align:left; border:0px;"> </th>
			    <th style="width:13.25%; text-align:left;border:0px;">Date</th>
                <td style="width:14.75%;border:0px;">
                <input type="text" name="" id="" value=" "
                 style="width:100%; text-align:left;background-color:#fff;">
			 </tr>
            </table>
 
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 

                <th style="width:13.25%; text-align:left;border:0px;"> </th>
                <td style="width:14.75%;border:0px;"> </td>

               <th style="width:9.33333333%; text-align:left; border:0px;"> </th>
			   <th style="width:13.25%; text-align:left;border:0px;"> </th>
               <td style="width:16.75%;border:0px;">
                </td>

                <th style="width:7.33333333%; text-align:left; border:0px;"> </th>
			    <th style="width:13.25%; text-align:left;border:0px;">Serial N0.</th>
                <td style="width:14.75%;border:0px;">
                <input type="text" name="ORDERSERIALID" id="ORDERSERIALID"
                  style="width:100%; text-align:left;background-color:#fff;"> </td>
			 </tr>
            </table>
            
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                 <th style="width:10.33333333%; text-align:left;border:0px;">Facility</th>
                <td style="width:89.7777777777%;border:0px;">
                <input type="text"name="FACILITYNANE" id="FACILITYNANE"
                style="width:100%; border:0px;";>
			 </tr>
            </table>

<br>
      <label style="font-weight:normal;">Please receive the following goods</label>


    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;">DESCRIPTION </th>
    <th style="width:20%;background-color: #fff;text-align:center;">UNIT OF MEASURE </th>
   <th style="width:15%;background-color: #fff;text-align:center;">QTY DELIVERED</th>
   <th style="width:15%;background-color: #fff;">BATCH NO.</th>
   <th style="width:15%;background-color: #fff;text-align:center;">EXPIRY DATE</th>

      </tr>
      </thead>
      <tbody>
    </tbody>
    </table>

      <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
  <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
    
   <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
      <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
    
      <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
    
   <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
      <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
    
    
     <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
    
   <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
      <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
    
     <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
    
   <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
      <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
    
    <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
    
   <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
      <table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
      <th style="width:35%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff; width:100%;"> </th>
    <th style="width:20%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;">   </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"> <input type="text" name=""  style="background-color:#fff;width:100%;"> </th>
   <th style="width:15%;background-color: #fff;border: 1px;"> <input type="text" name=""   style="background-color:#fff;width:100%;">  </th>
   <th style="width:15%;background-color: #fff;text-align:center;border: 1px;"><input type="text" name=""  style="background-color:#fff;width:100%;"> </th>

      </tr>
      </thead> 
    </table>
     
     
    
    <br>
    
    

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:13.33333333%; text-align:left;border:0px;">Delivered by</th>
                <td style="width:23%;border:0px;"><input type="text"id="REQBY" name="REQBY"   readonly=""
				style="width:100%;  background-color:#fff;height: 21px;"></td>

                  <th style="width:10.33333333%; text-align:left;border:0px;"> </th>
                <td style="width:20%;border:0px;"> </td>

                  <th style="width:10.33333333%; text-align:left;border:0px;">Recieved by</th>
                <td style="width:23%;border:0px;"><input type="text"id="ISSBY" name="ISSBY" readonly=""
				style="width:100%;  background-color:#fff;height: 21px;"></td>
			 </tr>
            </table>

     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:13.33333333%; text-align:left;border:0px;">Name</th>
                <td style="width:23%;border:0px;"><input type="text"id="REQBYNAME" name="REQBYNAME"  readonly=""
				style="width:100%; background-color:#fff;height: 21px;"></td>


                  <th style="width:10.33333333%; text-align:left;border:0px;"> </th>
                <td style="width:20%;border:0px;"> </td>

                  <th style="width:10.33333333%; text-align:left;border:0px;">Name</th>
                <td style="width:23%;border:0px;"><input type="text"id="ISSBYNAME" name="ISSBYNAME" readonly=""
				style="width:100%; background-color:#fff;height: 21px;"></td>
			 </tr>
            </table>


         
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:13.33333333%; text-align:left;border:0px;">Signature</th>
                <td style="width:23%;border:0px;"><input type="text"id=" "
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td>

                  <th style="width:10.33333333%; text-align:left;border:0px;"> </th>
                <td style="width:20%;border:0px;"> </td>

                  <th style="width:10.33333333%; text-align:left;border:0px;">Signature</th>
                <td style="width:23%;border:0px;"><input type="text"id=" "
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td>
			 </tr>
            </table>


            
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
                <th style="width:13.33333333%; text-align:left;border:0px;">Date</th>
                <td style="width:23%;border:0px;"><input type="text"id="REQBYDATE" name="REQBYDATE" readonly=""
				style="width:100%; background-color:#fff;height: 21px;"></td>

                  <th style="width:10.33333333%; text-align:left;border:0px;"> </th>
                <td style="width:20%;border:0px;"> </td>

                  <th style="width:10.33333333%; text-align:left;border:0px;">Date</th>
                <td style="width:23%;border:0px;"><input type="text"id="ISSBYDATE" name="ISSBYDATE"   readonly=""
				style="width:100%; background-color:#fff;height: 21px;"></td>
			 </tr>
            </table>

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

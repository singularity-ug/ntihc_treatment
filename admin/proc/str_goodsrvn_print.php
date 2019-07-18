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
  $qtyrecieved = array();
  $variance = array();
  $batch = array();
  $expdet = array();
  $remdrt = array();
  $lcn = array();
  $TOTALCOST = '';
  $REVNAME = '';
  $APPROVERNAME = '';
  $SERVICEPROVIDER='';
  $SVPLOCATION = '';
  $SVPADDRESS = '';
  $DATECREATED='';
  $TIMESTAMP='';
  $LPONO='';
  $DATEREQUIRED='';
  $DELIVERYREMINDDATE='';
  $DELIVERYSTATUS='';
  $DELIVERYCOMMENT=''; 
  $ORDERTYPE='';
  $INVOICENO='';
  $GOODSRECEIVABLETYPE='';
  $GOODSRECIEVEDDATE='';
  $GOODSRECIEVEDBY='';
  $GOODSRECIEVEDBYTITLE='';
  $DELIVERYSTATUS='';
  $GOODSDELVDDATE='';
  $STOCKTYPE='';

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
	 $dnx[] = $row['DESCRIPTION'];
     $fqx[]    = $row['QUANTITY'];
     $tmx[]       = $row['UNITOFMEASURE'];
     $pdx[]       = $row['UNITCOST'];
	 $qtyx[]        = $row['ITEMPRICE'];
	 $qtyrecieved[] = $row['QTYRECIEVED'];
     $variance[]    = $row['VARIANCE'];
     $batch[]       = $row['BATCHNO'];
     $expdet[]       = $row['EXPIRYDATE'];
	 $remdrt[]        = $row['EXPIRYREMINDDATE'];
	 $lcn[]        = $row['STORELOCATION'];
     $TOTALCOST   = $row['TOTALCOST'];
     $REVNAME = $row['REVNAME'];
	 $LPONO = $row['LPONO'];
	 $DELIVERYCOMMENT = $row['DELIVERYCOMMENT'];
     $APPROVERNAME = $row['APPROVERNAME'];
     $SERVICEPROVIDER = $row['SERVICEPROVIDER'];
     $SVPLOCATION  = $row['SVPLOCATION'];
     $SVPADDRESS=$row['SVPADDRESS'];
     $DATECREATED=$row['DATECREATED'];
	 $DATEREQUIRED  = $row['DATEREQUIRED'];
     $DELIVERYREMINDDATE=$row['DELIVERYREMINDDATE'];
     $DELIVERYSTATUS=$row['DELIVERYSTATUS'];
	 $ORDERTYPE=$row['ORDERTYPE'];
	 $INVOICENO=$row['INVOICENO'];
	 $GOODSRECEIVABLETYPE=$row['GOODSRECEIVABLETYPE'];
	 $GOODSRECIEVEDDATE=$row['GOODSRECIEVEDDATE'];
	 $GOODSRECIEVEDBY=$row['GOODSRECIEVEDBY'];
	 $GOODSRECIEVEDBYTITLE=$row['GOODSRECIEVEDBYTITLE'];
	 $DELIVERYSTATUS=$row['DELIVERYSTATUS'];
	 $GOODSDELVDDATE=$row['GOODSDELVDDATE'];
	 $STOCKTYPE=$row['STOCKTYPE'];
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
<body onLoad="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
                                         <div class="modal-body">

        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
         <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; margin-top:-18px; font-family:lcd;"> GOODS RECIEVED NOTE </p> </center>

      <form id="form1" class="form-horizontal" action="str_updatedeliveries.php" method="POST" style="height:auto; font-weight:normal;">
        <br>
        <div class="table-responsive" style="margin-top:-10px;">
            <table class="table"  style="border:0px;">
              <tr>

                 <th style="width:13.25%; text-align:left;border:0px;">Order No.</th>
                <td style="width:14.75%;border:0px;"><input type="numeric" name="LPONO" id="LPONO"   value="<?php  echo $LPONO; ?>" readonly="readonly"
				style="width:100%; text-align:left;background-color:#fff;"></td>

               <th style="width:9.33333333%; text-align:left; border:0px;"> </th>
			  <th style="width:13.25%; text-align:left;border:0px;">Invoice No.</th>
                <td style="width:14.75%;border:0px;"><input type="numeric" name="INVOICENO" id="INVOICENO" value="<?php  echo $INVOICENO; ?>" required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td>

                 <th style="width:9.33333333%; text-align:left; border:0px;"> </th>
			    <th style="width:13.25%; text-align:left;border:0px;">Recieved as</th>
                <td style="width:14.75%;border:0px;">
               <input name="GOODSRECEIVABLETYPE" type="text" id="GOODSRECEIVABLETYPE"  value="<?php  echo $GOODSRECEIVABLETYPE; ?>"
               style="width:100%; text-align:left;background-color:#fff;border:0px;"></td>
			 </tr>
            </table>

              <div class="table-responsive" style="margin-top:-16px;">
            <table class="table" style="border:0px;">
              <tr>
                 <th style="width:13.25%; text-align:left;border:0px;">Order Date</th>
                <td style="width:14.75%;border:0px;"><input type="text"id="DATECREATED" name="DATECREATED" value="<?php  echo $TIMESTAMP; ?>"  readonly="readonly"
				style="width:100%;background-color:#fff;height: 21px;"></td>

                <th style="width:9.33333333%; text-align:left; border:0px;"> </th>
			  <th style="width:13.25%; text-align:left;border:0px;">Recieved date</th>
                <td style="width:14.75%;border:0px;"><input type="numeric" name="GOODSRECIEVEDDATE" id="GOODSRECIEVEDDATE" value="<?php  echo $GOODSRECIEVEDDATE; ?>"
				style="width:100%; text-align:left;background-color:#fff;"></td>

                   <th style="width:9.33333333%; text-align:left; border:0px;"> </th>
			    <th style="width:13.25%; text-align:left;border:0px;"> Order serial No.</th>
                <td style="width:14.75%;border:0px;"><input type="text" name="ORDERSERIALID" id="ORDERSERIALID" value="<?php  echo $ORDERSERIALID; ?>" readonly=""
               style="width:100%; text-align:left;background-color:#fff;border:0px;"></td>

			 </tr>
            </table>

            <div class="table-responsive" style="margin-top:-16px;">
            <table class="table" style="border:0px;">
              <tr>
                 <th style="width:13.25%; text-align:left;border:0px;">Recieved from</th>
                <td style="width:86.75%;border:0px;"><input type="text"name="SERVICEPROVIDER" id="SERVICEPROVIDER"  value="<?php  echo $SERVICEPROVIDER; ?>" readonly="readonly"
				style="width:100%; text-align:left;background-color:#fff;border:0px;"></td>
			 </tr>
            </table>

      <p style="font-weight:normal;">Description of purchases</p>


   <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>
    <th style="background-color: #fff;">*</th>
   <th style="width:25%;background-color: #fff;">DESCRIPTION </th>
   <th style="width:5%;background-color: #fff; text-align:center;">QTY ORDERED</th>
    <th style="width:5%;background-color: #fff;text-align:center;">QTY RECEIVED </th>
   <th style="width:5%;background-color: #fff;text-align:center;">VARIANCE </th>
   <th style="width:5%;background-color: #fff;text-align:center;">BATCH NO. </th>
   <th style="width:7%;background-color: #fff;">EXPIRY DATE </th>
   <th style="width:7%;background-color: #fff;">REMIND DATE </th>
   <th style="width:12%;background-color: #fff;">UOM</th>
   <th style="width:7%;background-color: #fff;text-align:center;">RATE</th>
   <th style="width:8%;background-color: #fff;text-align:center;">AMOUNT</th>
   <th style="width:14%;background-color: #fff;text-align:center;">LOCATION</th>
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>

                                                  <td>  <?php  echo $dnx[$s]; ?> </td>

                                                  <td>  <?php  echo $fqx[$s]; ?> </td>


                                                     <td>  <?php echo $qtyrecieved[$s]; ?> </td>

                                                  <td> <?php echo $variance[$s]; ?> </td>

                                                  <td>  <?php echo $batch[$s]; ?></td>

                                                  <td>  <?php echo $expdet[$s]; ?> </td>

                                                  <td>  <?php echo $remdrt[$s]; ?> </td> 

                                                  <td>  <?php echo $tmx[$s]; ?> </td>

                                                   <td>  <?php echo $pdx[$s]; ?> </td>

                                                    <td>  <?php echo $qtyx[$s]; ?> </td>

                                                    <td>  <?php echo $lcn[$s]; ?> </td>

                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>


      <div id="res" style="border:0px;"> </div>

      <div class="table-responsive" style="margin-top:0px;">
            <table class="table"  style="border:0px;">
              <tr>
               <th style="width:72%; text-align:left; border:0px;"> </th>
                 <th style="width:13.3%; text-align:left;border:0px;">ORDER COST</th>
                <td style="width:13.7%"><input type="numeric" name="TOTALCOST"  value="<?php  echo $totals; ?>" readonly=""
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold;border:0px;"></td>

			 </tr>
            </table>


            <div class="table-responsive" style="margin-top:0px;"> Delivery comment
            <table class="table" style="border:0px;">
              <tr>
                 <th style="width:100%;border:0px;background-color:#fff;"> <textarea name="DELIVERYCOMMENT"
				style="width:100%;" > <?php  echo $DELIVERYCOMMENT; ?></textarea> </th>
			 </tr>
            </table>

              <table class="table-responsive" >
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:10%;border:0px;"> <b> Received by<b> </th>
				<th style="width:23.3333333%;border:0px;">  </th>
                <th style="width:66.6666666%; border:0px;"> </th>
              </tr>
              <tr>
			    <th style="width:10%;font-weight:normal;border:0px;"> Name</th>
				<th style="width:23.3333333%;border:0px;"> 
                <input type="text" class="form-control" name="GOODSRECIEVEDBY" id="GOODSRECIEVEDBY"  value="<?php  echo $GOODSRECIEVEDBY; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                 <th style="width:66.6666666%; border:0px;"> </th>
              </tr>
              <tr>


			    <th style="width:10%;font-weight:normal;border:0px;">Title </th>
				<th style="width:23.3333333%;border:0px;"> 
                <input type="text" class="form-control" id="GOODSRECIEVEDBYTITLE" name="GOODSRECIEVEDBYTITLE"
                value="<?php  echo $GOODSRECIEVEDBYTITLE; ?>" style="width:100%; font-weight:normal; background-color:#fff;"></th>
                 <th style="width:66.6666666%; border:0px;"> </th>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;border:0px;">Date </th>
				<th style="width:23.3333333%;border:0px;">  
                <input type="text" class="form-control" id="GOODSDELVDDATE" name="GOODSDELVDDATE"  value="<?php  echo $GOODSDELVDDATE; ?>"
			    style="width:100%; font-weight:normal; background-color:#fff;"></th>
                 <th style="width:66.6666666%; border:0px;"> </th>
              </tr>
            </table>
             <br>

 
                <input type="hidden" name="DELIVERYSTATUS" id="DELIVERYSTATUS" value="<?php  echo $DELIVERYSTATUS; ?>" readonly=""
               style="width:100%; border:0px;background-color:fff;">  
				 

             <input type="hidden" name="STOCKTYPE" id="STOCKTYPE"  value="<?php  echo $STOCKTYPE; ?>" >
             <input type="hidden" name="ORDERTYPE" id="ORDERTYPE" value="<?php  echo $ORDERTYPE; ?>" >

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
		   document.getElementById("SUBTOTAL").value = ''+sum;

	 }


  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" readonly="readonly" '+
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';

	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  readonly="readonly" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';


	 var  sab = '<input type="text" name="qtyrecieved[]" id="qtyrecieved'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';

	 var  sac = '<input type="text" name="variance[]" id="variance'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';

	 var  sad = '<input type="text" name="batch[]" id="batch'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';

	 var  sae = '<input type="text" name="expdet[]" id="expdet'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';

	 var  saf = '<input type="text" name="remdrt[]" id="remdrt'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';


	 var  s3cc = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" readonly="readonly" '+
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:left;">';

	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  readonly="readonly" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" readonly="readonly" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';

     var  s8lc = '<input type="text" name="lcn[]" id="lcn'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+sab+' </td>'+
								  '<td>'+sac+' </td>'+
								  '<td>'+sad+' </td>'+
								  '<td>'+sae+' </td>'+
				                  '<td>'+saf+' </td>'+
								  '<td>'+s3cc+' </td>'+
								  '<td>'+s6ff+' </td>'+
								  '<td>'+s7gg+' </td>'+
								  '<td>'+s8lc+' </td>';

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
		  table.rows[x].cells[4].childNodes[0].id="variance"+x;
          table.rows[x].cells[5].childNodes[0].id="batch"+x;
		  table.rows[x].cells[6].childNodes[0].id="expdet"+x;
		  table.rows[x].cells[7].childNodes[0].id="remdrt"+x;
          table.rows[x].cells[8].childNodes[0].id="tmx"+x;
		  table.rows[x].cells[9].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[10].childNodes[0].id="qtyx"+x;
          table.rows[x].cells[11].childNodes[0].id="lcn"+x;

          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>

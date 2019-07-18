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
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$TIMESTAMP = mysqli_real_escape_string($mysqli, $_POST['TIMESTAMP']);	
	$ATTENTIONTO = mysqli_real_escape_string($mysqli, $_POST['ATTENTIONTO']);
	$AMOUNTINWORDS = mysqli_real_escape_string($mysqli, $_POST['AMOUNTINWORDS']);
	$PARTICULARS = mysqli_real_escape_string($mysqli, $_POST['PARTICULARS']);
	$PAYMENTTYPE = mysqli_real_escape_string($mysqli, $_POST['PAYMENTTYPE']);
	$CHEQUENUMBER = mysqli_real_escape_string($mysqli, $_POST['CHEQUENUMBER']);
	$CURRENCYTYPE = mysqli_real_escape_string($mysqli, $_POST['CURRENCYTYPE']);
	$TOTALSUM = mysqli_real_escape_string($mysqli, $_POST['TOTALSUM']);
	$ORDERNO = mysqli_real_escape_string($mysqli, $_POST['ORDERNO']);

	// checking empty fields
	if(empty($ATTENTIONTO) || empty($PARTICULARS)) {

		if(empty($ATTENTIONTO)) {
			echo "<font color='red'>ATTENTION NAME field is empty.</font><br/>";
		}

		if(empty($PARTICULARS)) {
			echo "<font color='red'>PARTICULAR field is empty.</font><br/>";
		}
	} else {
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE receiptinvoices SET
		          TIMESTAMP='$TIMESTAMP',
				  ATTENTIONTO='$ATTENTIONTO',
				  AMOUNTINWORDS='$AMOUNTINWORDS'
				  PARTICULARS='$PARTICULARS',
				  PAYMENTTYPE='$PAYMENTTYPE',
				  CHEQUENUMBER='$CHEQUENUMBER'
				  CURRENCYTYPE='$CURRENCYTYPE',
				  TOTALSUM='$TOTALSUM'
				  ORDERNO='$ORDERNO'
				  WHERE id=$id");

		//redirectig to the display page. In our case, it is index.php
		header("Location: ../registration_desk.php");
	}
}
?>


<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM receiptinvoices WHERE DOCTYPE ='Receipt' AND id=$id");

while($res = mysqli_fetch_array($result))
{
	$TIMESTAMP = $res['TIMESTAMP'];
	$ATTENTIONTO = $res['ATTENTIONTO'];
	$AMOUNTINWORDS = $res['AMOUNTINWORDS'];
	$PARTICULARS = $res['PARTICULARS'];
	$PAYMENTTYPE = $res['PAYMENTTYPE'];
	$CHEQUENUMBER = $res['CHEQUENUMBER'];
	$CURRENCYTYPE = $res['CURRENCYTYPE'];
	$TOTALSUM = $res['TOTALSUM'];
	$ORDERNO = $res['ORDERNO'];
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
                                         <div class="modal-body">

          <img src="../../assets/img/logsbig.PNG" width="100%" height="100%">
          <center> <p style="color:#000; font-weight:bold; font-size:15px; border:0px;">RECIEPT </p> </center>
          <hr style="height:4px; background-color:red;margin-top:-10px;">
          


 <div class="table-responsive">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:66.6%; border:0px;"> </th>
                <th style="width:14%">Receipt No.</th>
                <td style="width:19.4%"><input type="numeric"  name="id" value="<?php  echo $id; ?>" style="width:100%; text-align:center;"></td>
              </tr>
              <tr>
			    <th style="width:66.6%;border:0px;"> </th>
                <th style="width:14%"> Date</th>
                <td style="width:19.4%"> <input type="text"  name="TIMESTAMP"  value="<?php  echo $TIMESTAMP; ?>" style="width:100%; text-align:center;"></td>
              </tr> 
          

         <input type="hidden"  id="id" name="id"  value="<?php  echo $id; ?>" >

<br>
    <table class="table table-bordered" style="margin-top:-15px;">
    <thead>
      <tr  class="  ">
         <td style="border-bottom-color:white; width:33.333333333%;border:0px;"><B>Recieved with thanks from</B></td>
        <td style="border-bottom-color:white; width:66.666666666%;border:0px;">  <input type="text" name="ATTENTIONTO" id="ATTENTIONTO" value="<?php  echo $ATTENTIONTO; ?>" style="background-color:#fff; width:100%;"></td>
      </tr>
      <tr>
        <td style="border-bottom-color:white; width:33.333333333%;border:0px;"><b>The sum of shillings</b></td>
        <td style="border-bottom-color:white; width:66.666666666%;border:0px;"><input type="text"  name="AMOUNTINWORDS" id="AMOUNTINWORDS" value="<?php  echo $AMOUNTINWORDS; ?>" style="background-color:#fff; width:100%;">  </td>
      </tr>
      <tr>
        <td style="border-bottom-color:white; width:33.333333333%;border:0px;"><b>Being payment for</b></td>
        <td style="border-bottom-color:white; width:66.666666666%;border:0px;"><input type="text" name="PARTICULARS"  id="PARTICULARS"  value="<?php  echo $PARTICULARS; ?>"
		style="background-color:#fff; width:100%; height:auto;">   </td>
      </tr>
    </thead> 
    </tbody>
  </table>

    <table class="table table-bordered">
    <thead>
      <tr  class="  " >
        <th style="border-bottom-color:white; ">Payment type</th>
        <th style="border-bottom-color:white; text-align:center;">Cheque No.</th>
        <th style="border-bottom-color:white; text-align:center;">Currency type</th>
        <th style="border-bottom-color:white; text-align:center;">Sum</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text"  name="PAYMENTTYPE" id="PAYMENTTYPE" value="<?php  echo $PAYMENTTYPE; ?>" readonly style=" text-align:center; background-color:#fff;width:100%;"></td>
        <td><input type="text"  name="CHEQUENUMBER" id="CHEQUENUMBER" value="<?php  echo $CHEQUENUMBER; ?>" readonly  style="text-align:center; background-color:#fff; width:100%;"></td>
        <td><input type="text"  name="CURRENCYTYPE" id="CURRENCYTYPE" value="<?php  echo $CURRENCYTYPE; ?>" readonly style="text-align:center; background-color:#fff; width:100%;"></td>
         <td><input type="numeric"  name="TOTALSUM" id="TOTALSUM" value="<?php  echo $TOTALSUM; ?>" readonly style="text-align:center; background-color:#fff; width:100%;"></td>
      </tr>
    </tbody>
  </table>

     <div class="table-responsive" style="border:0px;">
            <table class="table">
              <tr>
			    <th style="width:50%;border:0px;"> </th>
                <th style="width:7%">Sign</th>
                <td style="width:43%"><input type="text" name=" "   style="width:100%; text-align:center;"></td>
              </tr>
              <tr>
			    <th style="width:50%;border:0px;"> </th>
                <th style="width:7%"> For:</th>
                <td style="width:43%"> <input type="text" name=" " value="Naguru Teenage Information and Health Center" style="width:100%;"</th>
              </tr> 
            </table>



 <!-- /.START IMPREST REQUEST SCRIPT -->

     <script>

	 function calinvoice(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[5].childNodes[0].value);
		   }
		   document.getElementById("INVOICESUBTOTAL").value = ''+sum;
	 }




  function addRow166(tableId){
     var ss1 = '<input type="text" name="item[]" id="item_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+
	        'background-color:#fff; width:100%;">';

	 var ss2 = '<textarea name="description[]" id="description_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+
	        'background-color:#fff; width:100%; height:18px;"></textarea>';

	 var  ss3 = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+    'background-color:#fff; width:100%;">';

	 var  ss4 = '<input type="numeric" name="rate[]" id="rate_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+     'background-color:#fff; width:100%;">';

	 var  ss5 =  '<input type="numeric" name="amount[]" id="amount_'+rowCount+'" onkeyup="calinvoice(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';

		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+ss1+' </td>'+
	                              '<td>'+ss2+' </td>'+
								  '<td>'+ss3+' </td>'+
	                              '<td>'+ss4+' </td>'+
				                  '<td>'+ss5+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;

		  calinvoice(tableId);

  }

  function deleteRow166(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="item"+x;
          table.rows[x].cells[2].childNodes[0].id="description"+x;
		  table.rows[x].cells[3].childNodes[0].id="qty"+x;
		  table.rows[x].cells[4].childNodes[0].id="rate"+x;
          table.rows[x].cells[5].childNodes[0].id="amount"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calinvoice(tableId);
}

  </script>

  <!-- /.END IMPREST REQUEST SCRIPT -->



                <div class="col-xs-12" >
                <br>

        </div>
         <div class="col-xs-12">
      </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>

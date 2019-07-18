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
             	 font-size: 10px;
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
  
 <?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stddxx ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $stddxx=$stddxx. "" . $row['period'] ."";   }
  }
$connect->close();
?> 
  
  <?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$aa ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $aa=$aa. "" . $row['preparedby'] ."";   }
  }
$connect->close();
?> 

<?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$bb ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $bb=$bb. "" . $row['prepname'] ."";   }
  }
$connect->close();
?> 
<?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$cc ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $cc=$cc. "" . $row['reviewedby'] ."";   }
  }
$connect->close();
?> 
<?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$dd ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $dd=$dd. "" . $row['revname'] ."";   }
  }
$connect->close();
?>  
</head>
<body onLoad="window.print();">
<div class="wrapper" >
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body">   
 
       <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
  
 <center> <p style="color:#000; font-weight:bold;font-size:14px;margin-top: -20px;"> <b>ASSETS VERIFICATION REPORT FOR &nbsp <?php echo $stddxx; ?> </b> </p> </center> 

         <form class="form-horizontal" action="" method="POST">
      
         <?php
	include_once 'dbconns.php';
?>
  
<form method="post" name="frm">
<table id="example" class='table table-bordered table-responsive' style="margin-left: 0px; width:">
<tr>
<th style="width:1%;">##</th> 
              	     <th>DESCRIPTION OF INVENTORY</th> 
                     <th>CATEGORY</th> 
					 <th>LOCATION</th> 
                     <th>CONDITION</th>   
					 <th style="text-align: center;">QTY COUNTED</th> 
                     <th style="text-align: center;">QTY IN LEDGER</th>
					 <th style="text-align: center;">VARIANCE</th> 
    
</tr> 
<?php
	$res = $MySQLiconn->query("SELECT COUNT(id),PROPERTYDESCRIPTION, CATEGORY, LOCATION, SUM(QTYVERIFIED), FUNCTIONALSTATUS, COUNT(id)-SUM(QTYVERIFIED) as variance
               FROM properties WHERE PHYSICALSTATUS = 'AVAILABLE' 
			   GROUP BY PROPERTYDESCRIPTION ORDER BY CATEGORY DESC");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['COUNT(id)']; ?>"  /></td> 
            <td><?php echo $row['PROPERTYDESCRIPTION']; ?></td> 
              
			<td><?php echo $row['CATEGORY']; ?></td>
            
			<td><?php echo $row['LOCATION']; ?></td> 
            
            <td> <?php echo $row['FUNCTIONALSTATUS']; ?> </td>
             
			<td style="text-align: center;"> <?php echo $row['SUM(QTYVERIFIED)']; ?>  </td>
            
			<td style="text-align: center;"> <?php echo $row['COUNT(id)']; ?>  </td>
             
            <td style="text-align: center;"><?php echo $row['variance']; ?></td> 
             
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="1"> 

 
	</tr>
    <?php
}

?>

</table> 
      
       
      
            <br>
            
            
            <table class="table-responsive" style="margin-top:0px;" > 
            <table class="table">
              <tr> 
			    <th style="width:18%; text-align:left;">PREPARED BY</th>
				
                <td style="width:28%"><input type="text"  value=" <?php echo $aa; ?> "   readonly="readonly"
				style="width:100%; text-align:left;background-color:#FFF;"></td>  
				<th style="width:8%; border:0px;"> </th>
				<th style="width:18%; text-align:left;">REVIEWED AND APPROVED BY</th>
                <td style="width:28%"> <input type="text" value=" <?php echo $cc; ?> "   readonly="readonly"
				style="width:100%; text-align:left;background-color:#FFF;"></td> 

			 </tr>             
            </table> 
			
			 
            <table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr> 
			    <th style="width:18%; text-align:left;">NAME</th>
                <td style="width:28%"><input type="numeric"   value=" <?php echo $bb; ?> "   readonly="readonly" 
				style="width:100%; text-align:left;background-color:#FFF;"></td> 
				<th style="width:8%; border:0px;"> </th>
				
				<th style="width:18%; text-align:left;">NAME</th>
                <td style="width:28%"> <input type="text" value=" <?php echo $dd; ?> "  readonly="readonly" 
				style="width:100%; text-align:left;background-color:#FFF;"></td> 
			 </tr>             
            </table> 
			
			<table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr>  
				<th style="width:18%; text-align:left;">DATE</th>
                <td style="width:28%"> <input type="text"readonly="readonly"
				style="width:100%; text-align:left;background-color:#FFF;"></td>
                 <th style="width:8%; border:0px;"> </th>
				<th style="width:18%; text-align:left;">DATE</th>
                <td style="width:28%"> <input type="text"readonly="readonly"
				style="width:100%; text-align:left;background-color:#FFF;"></td>
			 </tr>             
            </table> 
            
            <table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr>  
				<th style="width:18%; text-align:left;">Signature</th>
                <td style="width:28%"> <input type="text"readonly="readonly"
				style="width:100%; text-align:left;background-color:#FFF;"></td>
                <th style="width:8%; border:0px;"> </th>
				<th style="width:18%; text-align:left;">Signature</th>
                <td style="width:28%"> <input type="text"readonly="readonly"
				style="width:100%; text-align:left;background-color:#FFF;"></td>
			 </tr>             
            </table> 
   </form>        
			 
             
			 
			
<!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="uom[]" id="uom_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';			 

	 var  s3cc = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">'; 

     var  s7gg = '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'" onkeyup="calcsubtt(\'mytable100\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';
		 

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+   
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
		  table.rows[x].cells[1].childNodes[0].id="desc_"+x;
		  table.rows[x].cells[2].childNodes[0].id="uom_"+x;
          table.rows[x].cells[3].childNodes[0].id="qty_"+x;  
		  table.rows[x].cells[6].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
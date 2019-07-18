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
  $test = array();  
  $TOTALCOST = '';
  $REVNAME = '';
  $APPROVERNAME = '';
  $SERVICEPROVIDER='';
  $SVPLOCATION = '';
  $SVPADDRESS = '';  
  $DATECREATED='';
  $TIMESTAMP=''; 
  $DATEREQUIRED='';
  $DELIVERYREMINDDATE='';
  $DELIVERYSTATUS=''; 
  $ORDERTYPE='';  
  $INVOICENO='';
  $GOODSRECEIVABLETYPE='';
  $GOODSRECIEVEDDATE='';
  $GOODSRECIEVEDBY='';
  $GOODSRECIEVEDBYTITLE='';
  $DELIVERYSTATUS=''; 
  $GOODSDELVDDATE='';
  $STOCKTYPE=''; 
  $DELIVERYCOMMENT='';  
  	
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
	 $test[]        = $row['id'];    
     $TOTALCOST   = $row['TOTALCOST'];
     $REVNAME = $row['REVNAME'];
	 $LPONO   = $row['LPONO']; 
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
	 $DELIVERYCOMMENT=$row['DELIVERYCOMMENT'];	
      }

  ?>
 
  <?php
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 

 

 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> . </title>
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

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#dnx"+num).val(data[2]); 
  $("#tmx").val(data[4]); 
    
} 

function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "str_searchitem.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>



  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
 
  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
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
             	font-size: 10px;
             	color:#000000;
				font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
 

   
   <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">  
 
        <script>
function myFunction() {
    window.print();
}
</script>
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%" style="height:90px;"> 
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; margin-top:-18px; font-family:lcd;"> GOODS RECIEVED NOTE </p> </center> 
  
        <form id="form1" class="form-horizontal" action="str_updatedeliveries.php" method="POST" style="height:auto; font-weight:normal;">  
        <br>
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
                 <th style="width:20%; text-align:left;border:0px;">Order Date  </th>
                <td style="width:30%;border:0px;">  <?php  echo $TIMESTAMP; ?> </td>  
                <th style="width:20%; text-align:left;border:0px;">Purchase Order No.</th>
                <td style="width:30%;border:0px;">  <?php  echo $LPONO; ?> </td>  
			 </tr>             
            </table> 
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
                 <th style="width:20%; text-align:left;border:0px;">Recieved date  </th>
                <td style="width:30%;border:0px;"> <?php  echo $GOODSRECIEVEDDATE; ?>  </td>  
                <th style="width:20%; text-align:left;border:0px;">Invoice No.</th>
                <td style="width:30%;border:0px;"> <?php  echo $INVOICENO; ?> </td>  
			 </tr>             
            </table> 
             
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
                 <th style="width:20%; text-align:left;border:0px;"> Recieved as  </th>
                <td style="width:30%;border:0px;"> <?php  echo $GOODSRECEIVABLETYPE; ?> </td>  
                <th style="width:20%; text-align:left;border:0px;">Order serial No.</th>
                <td style="width:30%;border:0px;"><?php  echo $ORDERSERIALID; ?> </td>  
			 </tr>             
            </table> 
           
             <br>
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
                 <th style="width:20%; text-align:left;border:0px;">Recieved from</th>
                <td style="width:80%;border:0px;"> <?php  echo $SERVICEPROVIDER; ?> </td>  
			 </tr>             
            </table>  
            <br>
   <p style="font-weight:normal;">Description of purchases</p> 
           
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 10px; font-weight:normal; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
								    <th>DESCRIPTION  </th> 
                                    <th>QTY ORDERED  </th> 
                                    <th>QTY RECEIVED </th>
                                    <th>DIFFERENCE   </th> 
                                    <th>BATCH NO. </th>
   <th>EXPIRY DATE </th>
   <th>REMIND DATE </th> 
   <th>UOM</th>
   <th>RATE</th>
   <th>AMOUNT</th>  
   <th> VARIANCE</th>
   <th> TOTAL COST</th>
   <th>LOCATION</th>  
									</tr>
								</thead> 
								<tbody>
									<?php
										$total=0;
										$total2=0;
										$total3=0;
										$total4=0;
										$s=mysqli_query($conn,"select * from recievables  where ORDERSERIALID='$id'");
										while($srow=mysqli_fetch_array($s)){
											?>
											<tr>
												<td><?php echo $srow['DESCRIPTION']; ?></td>
                                                
												<td style="text-align:center;"><?php echo number_format($srow['QUANTITY'],0); ?></td>
                                                 
                                                
                                                <td style="text-align:center;">
													<?php 
														$sub=$srow['QTYRECIEVED'];
														echo number_format($sub,0);
														$total+=$sub;
													?>
												</td> 
                                                
                                                <td style="text-align:center;">
													<?php 
														$sub=$srow['QUANTITY']-$srow['QTYRECIEVED'];
														echo number_format($sub,0);
														$total+=$sub;
													?>
												</td> 
                                                
                                                <td><?php echo $srow['BATCHNO']; ?></td>
                                                
                                                <td><?php echo $srow['EXPIRYDATE']; ?></td>
                                                
                                                <td><?php echo $srow['EXPIRYREMINDDATE']; ?></td>
                                                
                                                <td><?php echo $srow['UNITOFMEASURE']; ?></td>
                                                
                                                 <td style="text-align:center;">
													<?php 
														$sub=$srow['UNITCOST'];
														echo number_format($sub,0);
														$total+=$sub;
													?>
												</td> 
                                                
												<td style="text-align:right;">
													<?php 
														$sub=$srow['UNITCOST']*$srow['QTYRECIEVED'];
														echo number_format($sub,0);
														$total2+=$sub;
													?>
												</td> 
                                                
                                                <td style="text-align:right;">
													<?php 
														($sub=$srow['QUANTITY']-$srow['QTYRECIEVED'])*$srow['UNITCOST'] ;
														echo number_format($sub,0);
														$total3+=$sub;
													?>
												</td> 
                                                
                                                <td style="text-align:right;">
													<?php 
														$sub=$srow['UNITCOST']*$srow['QUANTITY'];
														echo number_format($sub,0);
														$total4+=$sub;
													?>
												</td> 
                                                
                                                
                                                 <td><?php echo $srow['STORELOCATION']; ?></td>
											</tr>
											<?php
										}
									?>
									<tr>
										<td colspan="9" align="left"><strong>Grand Total</strong></td>
                                        <td style="text-align:right;"><strong><?php echo number_format($total2,0); ?></strong></td>
                                        <td style="text-align:right;"><strong><?php echo number_format($total3,0); ?></strong></td>
										<td style="text-align:right;"><strong><?php echo number_format($total4,0); ?></strong></td>
                                        <td colspan="1" align="left"> </td>
									</tr>
								</tbody>
							</table>
                            
            <br>
            Delivery comment
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>   
                 <th style="width:100%;border:0px;background-color:#fff;">  
				<?php  echo $DELIVERYCOMMENT; ?>  </th>  
			 </tr>             
            </table>
               <br>
                   
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
                 
                <td style="width:33.33333333%;border:0px;">  Received by </td> 
                  <td style="width:33.33333333%;border:0px;">Name</td> 
                   <td style="width:33.33333333%;border:0px;">Date </td> 
			 </tr>             
            </table>        
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; font-weight:bold; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
                 
                <td style="width:33.33333333%;border:0px;"> <?php  echo $GOODSRECIEVEDBYTITLE; ?> </td> 
                  <td style="width:33.33333333%;border:0px;"><?php  echo $GOODSRECIEVEDBY; ?></td> 
                   <td style="width:33.33333333%;border:0px;"> <?php  echo $GOODSDELVDDATE; ?> </td> 
			 </tr>             
            </table>  
            
              
        
             <input type="hidden" name="DELIVERYSTATUS" id="DELIVERYSTATUS" value="<?php  echo $DELIVERYSTATUS; ?>" >
                
            
             <input type="hidden" name="STOCKTYPE" id="STOCKTYPE"  value="<?php  echo $STOCKTYPE; ?>" >
             <input type="hidden" name="ORDERTYPE" id="ORDERTYPE"  value="<?php  echo $ORDERTYPE; ?>" >   
             
    
       
        </form><br>
         <center> 
 
  <button onClick="myFunction()" >Print &nbsp;<?php  echo $LPONO; ?></button>  
   </center>
   

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
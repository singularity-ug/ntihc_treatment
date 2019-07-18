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
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stss ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
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
  
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SERVICEPROVIDER"+num).val(data[2]);
  $("#SVPADDRESS").val(data[2]);
  $("#SVPLOCATION").val(data[3]);       
      
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "search_supplier.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result); 
}
  });
}
} 
</script>
  
  <?php
  $fz ='';
  if(isset($_GET['q'])) { $fz=$_GET['q']; }
  ?>
  <script>
  $(document).ready(function() {
     var ttt = "<?php echo $fz;  ?>";

	 if(ttt==""){}  else{ $("#notificationModal").modal("show"); }
     $('#example').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:' file'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#secondq').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' Ntihc imms'
		},
		{extend :'pdf',
		 title:'Ntihc imms '
		},
		{extend :'print',
		 title:' Ntihc imms'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#exsuppex').DataTable( {
	  "iDisplayLength": 10,
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
  
   <script>
  $(document).ready(function() {
     $('#example13').DataTable();
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
        <div class="panel-body">
       <div class="container fluid" style="width:90%;border:2px solid;">  
 
        <img src="../../../assets/img/logsbig.PNG" width="100%" height="30%">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:18px; background-color:#fff; margin-top:-18px; font-family:ALGERIAN;">  LOCAL PURCHASE ORDER  </p> </center> 
  
     <form id="form1" class="form-horizontal" action="lpo_gen_processor.php" method="POST" style="height:auto; font-weight:normal;">  
        <br><br>
        <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:left; border:0px;"> 
               <input type="numeric" name="SERVICEPROVIDER" onKeyUp="domee(this)"  id="SERVICEPROVIDER"  placeholder="Order to" required="required" autocomplete="off"
				style="width:100%; text-align:left;background-color:#fff; text-align:left;"></td> 
                 
                 <th style="width:13.25%; border:0px; text-align:left;">Order No.</th>
                <td style="width:14.75%; border:0px;"><input type="numeric" name="LPONO" id="LPONO"    readonly="readonly"
				style="width:100%; text-align:left;background-color:#fff;"></td>  
			  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;">  
                <input type="text" name="SVPADDRESS" id="SVPADDRESS"     
				style="width:100%; text-align:left;background-color:#fff; border:0px;"></td> 
                
                 <th style="width:13.25%; text-align:left; border:0px;">Date</th>
                <td style="width:14.75%; border:0px;"><input type="date"id="DATECREATED" name="DATECREATED" required="required"  
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
             
             <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;">  <input type="text" name="SVPLOCATION" id="SVPLOCATION"    
				style="width:100%; text-align:left;background-color:#fff; border:0px;"></td> 
                
                 <th style="width:13.25%; border:0px; text-align:left;"> </th>
                <td style="width:14.75%; border:0px;"> </td>  
			 </tr>             
            </table>
              <div class="col-sm-6">
           <div id="res"> </div> 
           </div> 
        
         <p style="font-weight:bold;">Please deliver the following items.</p>
     
              
   <table class="table table-table table tabled" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
       <th style="width:43%;">DESCRIPTION </th> 
   <th style="width:10%; text-align:center;">QUANTITY</th> 
     <th style="width:18%;">UNIT OF MEASURE</th>
   <th style="width:13.25%; text-align:center;">RATE</th>
   <th style="width:14.75%; text-align:center;">AMOUNT</th>  
           
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>    
     <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
     
      <div id="res" style="border:0px;"> </div>
     
      <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:left; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">SUB TOTAL</th>
                <td style="width:14.75%"><input type="numeric" id="SUBTOTAL"   name="SUBTOTAL"  name1="SUBTOTALD[]"    
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold;"></td>  
			  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">VAT</th>
                <td style="width:14.75%"><input type="text" id="TAX"  name="TAX"   name1="TAX[]"   
				style="width:100%; text-align:right;background-color:#fff;font-weight:bold;"></td>  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr> 
                 <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">GRAND TOTAL</th>
                <td style="width:14.75%"><input type="text" id="TOTALCOST" name="TOTALCOST"  name1="TOTALCOST[]"  
				style="width:100%; text-align:right;background-color:#fff;font-weight:bold;"></td>  
			  
			</tr>             
            </table>
            
            <div id="grands">
<input type="hidden" name="grans" id="grans"> 
</div>

<script type="text/javascript">
$(document).ready(function() { 
	    $(".TAX").keyup(function() {
        var grandTotals = 0;
        $("input[name1='TAX[]']").each(function (index) {
            var TAX = $("input[name1='TAX[]']").eq(index).val();
            var SUBTOTALD = $("input[name1='SUBTOTALD[]']").eq(index).val();
            var TOTALCOST = parseInt(TAX) * parseInt(SUBTOTALD); 

            if (!isNaN(TOTALCOST)) {
                $("input[name1='TOTALCOST[]']").eq(index).val(TOTALCOST);
                grandTotal = parseInt(grandTotals) + parseInt(TOTALCOST);
                $('#grans').val(grandTotals);
            } 
        });
    });
});
</script>
     
            <table class="table-responsive" style="margin-top:0px;"> <b>Terms of delivery</b>
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%; border:0px;"><textarea name="TERMSOFDELIVERY" id="TERMSOFDELIVERY" style="width:100%;" >  </textarea> 
				 </td>  
			  
			 </tr>             
            </table>
               
              <table class="table-responsive" style="margin-top:-19px;"> 
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
				<th style="width:23.3333333%"> <input type="text" class="form-control" name="APPROVERNAME" id="APPROVERNAME"  
				  style="width:100%; font-weight:normal; background-color:#fff;border:0px;"> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Name </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" name="REVNAME" id="REVNAME"  
				  style="width:100%; font-weight:normal; background-color:#fff;border:0px;"> </th>
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;"> Signature</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" readonly="readonly"
				 style="width:100%; font-weight:normal; background-color:#fff;border:0px;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;"> Signature</th>
                <td style="width:23.3333333%"><input type="text" class="form-control"  readonly="readonly"
			     style="width:100%; font-weight:normal; background-color:#fff;border:0px;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Title </th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" id="APPROVERTITLE" name="APPROVERTITLE"    
				  style="width:100%; font-weight:normal; background-color:#fff;border:0px;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Title </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" id="REVTITLE" name="REVTITLE"   
				 style="width:100%; font-weight:normal; background-color:#fff;border:0px;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Date </th>
				<th style="width:23.3333333%">  <input type="date" class="form-control" id="APPROVEDDATE" name="APPROVEDDATE"    
			    style="width:100%; font-weight:normal; background-color:#fff;border:0px;height:20px;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Date </th>
                <td style="width:23.3333333%"><input type="date" class="form-control" id="REVDATE"  name="REVDATE"  
				 style="width:100%; font-weight:normal; background-color:#fff;border:0px;height:20px;"></td>
              </tr>
            </table>  
             <br>
             
    <table class="table-responsive" style="background-color:#ffffff; margin-top:0px;">
            <table class="table">
              <tr>
			    <th style="width:11.33333333%;border:0px;">Alert stores </th>
                <th style="width:45.33333333%">
				<input type="radio" name="ORDERTYPE" id="ORDERTYPE" value="ALERTED" checked>
        <label for="ORDERTYPE">ALERTED</label>  
		<input name="ORDERTYPE" type="radio" id="ORDERTYPE" value="NOT REQUIRED">
		<label for="ORDERTYPE">NOT REQUIRED</label>  
				</th>  
             <th style="width:15.3333333%;border:0px;">Order serial No. </th>
              <th style="width:25%"> 
              <input type="text" name="ORDERSERIALID" id="ORDERSERIALID" value=" <?php echo uniqid();?>" readonly="" style="width:100%; border:0px;background-color:fff;"> </th> 
              </tr>   
            </table>  
          
           <table class="table-responsive" style="background-color:#ffffff; margin-top:-23px;">
            <table class="table">
              <tr>
			    <th style="width:10.73333333%;border:0px;">Delivery status </th>
                <th style="width:15%">
                <input type="radio" name="DELIVERYSTATUS" id="DELIVERYSTATUS" value="PENDING" checked>
        <label for="DELIVERYSTATUS">PENDING</label>  
		<input name="DELIVERYSTATUS" type="radio" id="DELIVERYSTATUS" value="DELIVERED">
		<label for="DELIVERYSTATUS">DELIVERED</label>  
				</th>  
                 
             <th style="width:15.33333333%;border:0px;">Expected date of delivery </th>
             <th style="width:20%"> 
             <input type="date" name="DATEREQUIRED" id="DATEREQUIRED" style="width:100%; background-color:fff;height:20px;"> </th> 
             
             <th style="width:10%;border:0px ;">Remind date </th>
             <th style="width:20%"> 
             <input type="date" name="DELIVERYREMINDDATE" id="DELIVERYREMINDDATE" style="width:100%; background-color:fff;height:20px;"> </th> 
             
             </tr>   
             </table>      
             
           <table class="table-responsive" style="margin-top:0px;"><b>Note:</b> 
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEA" id="NOTEA"  value="Please quote this LPO number on your invoice." style="width:100%;" >   </td>  
			  
			 </tr>             
            </table>  
            
             <tables class="table-responsive" style="margin-top:-23px;">  
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEB" id="NOTEB" style="width:100%;" >   </td>  
			  
			 </tr>             
            </table> 
            
            <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEC" id="NOTEC" style="width:100%;" >   </td>  
			  
			 </tr>             
            </table>  
             
        <input type="hidden" name="DOCUMENTTYPE" id="DOCUMENTTYPE" value="LPO">      
              
        <input type="hidden" name="PREPAREDBY" id="PREPAREDBY" value="<?php echo $nameofuser; ?>" > 
        <input type="hidden" name="PREPTITLE" id="PREPTITLE" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="PREPFPNO" id="PREPFPNO" value="<?php echo $pf; ?>" >                  
        <center> <input type="submit" name="button" id="button" value="Save" /> </center> 
        <br><br>
        </form>
                  
         
                 
             </div></div></div></div></div>
              
              
               </div></div>
              
                 <!-- /. ROW  -->  
                 
                 
                 
                 
                
                    </div> </div>

                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
               
 <!-- /. PAGE WRAPPER  -->
 
       <!-- /.content-wrapper -->
  <footer class="main-footerx">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

  
  </div> 


<script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
<script type="text/javascript" src="../../assets/js/gauge.js"></script> 
   
</body>
</html> 

 <script>
  
 
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[5].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';			 

	 var  s3cc = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:left;">';
 		 
	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
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
          table.rows[x].cells[3].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[5].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[6].childNodes[0].id="qtyx"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>

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

  $("#dnx"+num).val(data[2]);
  $("#tmx").val(data[2]);       
      
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "storesearch.php",
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
 
  
<?php
  $id ='';  
  $ORDERSERIALID = ''; 
  $TIMESTAMP  = '';
  $DATECREATED = '';
  $SVPADDRESS = '';   
  $SVPLOCATION='';
  $ENTITYCODE='';   
  $FISCALMONTH = ''; 
  $FISCALYEAR='';   
  $SERVICEPROVIDER='';  
  	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM purchaseorder WHERE TIMESTAMP >='$date' ORDER BY id DESC LIMIT 1";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $ORDERSERIALID = $row['ORDERSERIALID']; 
     $DATECREATED = $row['DATECREATED'];
     $SVPADDRESS  = $row['SVPADDRESS'];
     $SVPLOCATION = $row['SVPLOCATION'];  
	 $ENTITYCODE=$row['ENTITYCODE'];  
     $FISCALMONTH   = $row['FISCALMONTH']; 
     $FISCALYEAR=$row['FISCALYEAR'];     
     $id   = $row['id']; 
	 $SERVICEPROVIDER = $row['SERVICEPROVIDER']; 
      } 
  ?>      
        
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
       <div class="container fluid" style="width:90%;">  
 
        <img src="../../../assets/img/logsbig.PNG" width="100%" height="30%">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; margin-top:-18px;">  LOCAL PURCHASE ORDER  </p> </center> 
  
        <form id="form1" class="form-horizontal" action="lpo_gen_processor.php" method="POST" style="height:auto; font-weight:normal;">  
        <br><br>
        <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:left; border:0px;"> 
               <input type="text" name="SERVICEPROVIDER"  id="SERVICEPROVIDER"  value="<?php  echo $SERVICEPROVIDER; ?>" 
               readonly="readonly" autocomplete="off"
				style="width:100%; text-align:left;background-color:#fff; text-align:left;border:0px;"></td> 
                 
                 <th style="width:13.25%; border:0px; text-align:left;">Order No.</th>
                <td style="width:14.75%; border:0px;"><input type="text" name="LPONO" id="LPONO"  
                 value="<?php  echo $ENTITYCODE; ?>/<?php  echo $FISCALYEAR; ?>/<?php  echo $FISCALMONTH; ?>/<?php  echo $id; ?> "    readonly="readonly"
				style="width:100%; text-align:left;background-color:#fff;border:0px;"></td>  
			  
			 </tr>             
            </table>
            
              <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;">  
                <input type="text" name="SVPADDRESS" id="SVPADDRESS"   value="<?php  echo $SVPADDRESS; ?>"    readonly="readonly"   
				style="width:100%; text-align:left;background-color:#fff; border:0px;"></td> 
                
                 <th style="width:13.25%; text-align:left; border:0px;">Date</th>
                <td style="width:14.75%; border:0px;"><input type="text" id="DATECREATED" name="DATECREATED" value="<?php  echo $DATECREATED; ?>"  readonly="readonly" 
				style="width:100%; text-align:left;background-color:#fff;height: 21px;border:0px;"></td>  
			 </tr>             
            </table>
             
             <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;">  <input type="text" name="SVPLOCATION" id="SVPLOCATION" value="<?php  echo $SVPLOCATION; ?>"  
                readonly="readonly"    
				style="width:100%; text-align:left;background-color:#fff; border:0px;"></td> 
                
                 <th style="width:13.25%; border:0px; text-align:left;"> </th>
                <td style="width:14.75%; border:0px;"> </td>  
			 </tr>             
            </table>
             
         
      
  <p style="font-weight:bold;">Please deliver the following items.</p>      
      <table class="table table-bordered" id="dataTable1" style="font-weight:normal; ">
    <thead>
      <tr  class="  ">  
      <th>*</th>
   <th style="width:50%;">DESCRIPTION </th>
    <th style="width:10%; text-align:center;">QUANTITY</th>  
   <th style="width:18%;">UNIT OF MEASURE</th> 
   <th style="width:10%; text-align:center;">RATE</th>
   <th style="width:12%; text-align:center;">AMOUNT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
                            <input type="button" value="Add" onClick="addRow13('dataTable1')" class="btn-success" style="background-color:green;" > &nbsp;
                            <input type="button" value="Remove" onClick="deleteRow13('dataTable1')"class="btn-danger" style="background-color:red;" >
                            <input type="hidden" value="0" name="mytable_rows1"  id="mytable_rows1" >
                            <input type="hidden" id="mytable_rows" name="mytable_rows" value="0">
     <br>
 
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
              
				<input type="hidden" name="ORDERTYPE" id="ORDERTYPE" value="ALERTED" >
			 
              <input type="hidden" name="ORDERSERIALID" id="ORDERSERIALID" value="<?php  echo $ORDERSERIALID; ?>" >  
               
          
           <table class="table-responsive" style="background-color:#ffffff; margin-top:-23px;">
            <table class="table">
              <tr>
			    <th style="width:10.73333333%;border:0px;">Delivery status </th>
                <th style="width:15%">
                <input type="radio" name="DELIVERYSTATUS" id="DELIVERYSTATUS" value="PENDING" checked>
        <label for="DELIVERYSTATUS">PENDING</label>  
		<input name="DELIVERYSTATUS" type="radio" id="DELIVERYSTATUS" value="NOT APPLICABLE">
		<label for="DELIVERYSTATUS">NOT APPLICABLE</label>  
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
 
    function  dostg(thisid){

     var val = thisid.split("_")[1]; 
	 var v2 = parseFloat(document.getElementById("fqx_"+val).value);
	 var v3 = parseFloat(document.getElementById("pdx_"+val).value);

	 var v4 = v2*v3;
	 document.getElementById("qtyx_"+val).value = v4;

    }

   function addRow13(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;
     
	 var s11 = '<input type="text" onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" autocomplete="off"  required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >';
			
		var s33 = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="fqx[]" name1="fqx_'+rowCount+'"  id="fqx_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';
 	 
			  
	 var s22 = '<input type="text" name="tmx[]" id="tmx'+rowCount+'" autocomplete="off"  required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >';	
			  	   
 
	 var s44 = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pdx[]" name1="pdx_'+rowCount+'" id="pdx_'+rowCount+'" required="required" '+
	           'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';
			    
			  
	 var s55 = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qtyx[]" name1="qtyx_'+rowCount+'" id="qtyx_'+rowCount+'" readonly="readonly" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';


     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+s11+' </td>'+
			   '<td>'+s33+' </td>'+
			   '<td>'+s22+' </td>'+
			   
			   '<td>'+s44+' </td>'+  
			   '<td>'+s55+' </td>';

                                             
      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows1').value=rowCount;

  }

  function deleteRow12(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) {
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
          table.rows[x].cells[1].childNodes[0].id="p_"+x;
		  table.rows[x].cells[1].childNodes[0].name="p_"+x;
          table.rows[x].cells[2].childNodes[0].id="c_"+x;
		  table.rows[x].cells[2].childNodes[0].name="c_"+x;
          }
           document.getElementById('mytable_rows').value=rowCount-1;
}

 function deleteRow13(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) {
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
          table.rows[x].cells[1].childNodes[0].id="dnx_"+x; 
		  table.rows[x].cells[2].childNodes[0].id="fqx_"+x; 
		  table.rows[x].cells[3].childNodes[0].id="tmx_"+x;  
		  table.rows[x].cells[4].childNodes[0].id="pdx_"+x;  
		  table.rows[x].cells[5].childNodes[0].name="qtyx_"+x; 
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}
 
  </script>  

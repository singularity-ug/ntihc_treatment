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
  $DATEREQUIRED='';
  $DELIVERYREMINDDATE='';
  $DELIVERYSTATUS=''; 
  $ORDERTYPE='';  
  
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
	  
     $SUBTOTAL = $row['SUBTOTAL'];
     $TAX = $row['TAX'];
     $TOTALCOST   = $row['TOTALCOST'];
     $REVNAME = $row['REVNAME'];
     $APPROVERNAME = $row['APPROVERNAME'];
     $SERVICEPROVIDER = $row['SERVICEPROVIDER'];
     $SVPLOCATION  = $row['SVPLOCATION'];  
     $SVPADDRESS=$row['SVPADDRESS'];
     $DATECREATED=$row['DATECREATED'];  
	 $DATEREQUIRED  = $row['DATEREQUIRED'];  
     $DELIVERYREMINDDATE=$row['DELIVERYREMINDDATE'];
     $DELIVERYSTATUS=$row['DELIVERYSTATUS']; 
	 $ORDERTYPE=$row['ORDERTYPE'];
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
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
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
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('config.php');
  ?>

   
   <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">  
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:14px; background-color:#fff; margin-top:-18px; font-family:lcd;">  LOCAL PURCHASE ORDER  </p> </center> 
  
     <form id="form1" class="form-horizontal" action="lpo_gen_processor.php" method="POST" style="height:auto; font-weight:normal;">  
        <br>
        <div class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:left; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">Order No.</th>
                <td style="width:14.75%"><input type="numeric" name="LPONO" id="LPONO"   value="<?php  echo $LPONO; ?>" readonly="readonly"
				style="width:100%; text-align:left;background-color:#fff;"></td>  
			  
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">Date</th>
                <td style="width:14.75%"><input type="date"id="DATECREATED" name="DATECREATED" value="<?php  echo $TIMESTAMP; ?>"  
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
             
             
             <p style="font-weight:bold;">Order To</p>
             
               <div class="table-responsive" style="margin-top:0px;border:0px;" > 
            <table class="table"  style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="numeric" name="SERVICEPROVIDER" id="SERVICEPROVIDER"  value="<?php  echo $SERVICEPROVIDER; ?>"
				style="width:100%; text-align:left;background-color:#fff;"></td> 
                  </tr> <tr>
                <td style="width:100%; border:0px;"><input type="numeric" name="SVPADDRESS" id="SVPADDRESS"   value="<?php  echo $SVPADDRESS; ?>"  
				style="width:100%; text-align:left;background-color:#fff;"></td>  
                 </tr> <tr>
                <td style="width:100%;border:0px;"><input type="numeric" name="SVPLOCATION" id="SVPLOCATION"    value="<?php  echo $SVPLOCATION; ?>"
				style="width:100%; text-align:left;background-color:#fff;"></td> 
			 </tr>             
            </table>  
            
    <p style="font-weight:bold;">Please recieve the following items.</p> 
      
    <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
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
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  <td> <input  name="fqx[]" readonly="" type="text" value="<?php  echo $fqx[$s]; ?>" 
                                                  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;"/></td> 
                                                  
                                                  <td> <input  name="tmx[]" readonly="" type="numeric" value="<?php echo $tmx[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td>
                                                  
                                                   <td> <input  name="pdx[]" readonly="" type="text" value="<?php echo $pdx[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td>  
                                                    
                                                    <td> <input  name="qtyx[]" type="numeric" value="<?php echo $qtyx[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;"/></td> 
                                                  
                                              </tr>
                                              <?php } ?>
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
                <td style="width:14.75%"><input type="numeric" name="SUBTOTAL" id="SUBTOTAL"  value="<?php  echo $SUBTOTAL; ?>"
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold;"></td>  
			  
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;">
              <tr> 
               <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">VAT</th>
                <td style="width:14.75%"><input type="numeric" name="TAX" id="TAX"   value="<?php  echo $TAX; ?>"
				style="width:100%; text-align:right;background-color:#fff;font-weight:bold;"></td>  
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;">
              <tr> 
                 <th style="width:71%; text-align:right; border:0px;"> </th>
                 <th style="width:13.25%; text-align:left;">GRAND TOTAL</th>
                <td style="width:14.75%"><input type="numeric" name="TOTALCOST" id="TOTALCOST" value="<?php  echo $TOTALCOST; ?>" 
				style="width:100%; text-align:right;background-color:#fff;font-weight:bold;"></td>  
			  
			 </tr>             
            </table>
          
     
            <div class="table-responsive" style="margin-top:0px;"> <b>Terms of delivery</b>
            <table class="table" style="border:0px;">
              <tr>   
                 <th style="width:100%;border:0px;background-color:#ecf0f5;"> <textarea name="TERMSOFDELIVERY"  
				style="width:100%;" ><?php echo $TERMSOFDELIVERY;?>  
				</textarea> </th>  
			 </tr>             
            </table>
               
              <div class="table-responsive" >
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
				<th style="width:23.3333333%"> <input type="text" class="form-control" name="APPROVERNAME" id="APPROVERNAME"  value="<?php  echo $APPROVERNAME; ?>" 
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Name </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" name="REVNAME" id="REVNAME"  value="<?php  echo $REVNAME; ?>" 
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr> 
			  <tr>
			    <th style="width:10%;font-weight:normal;"> Signature</th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" readonly="readonly"
				 style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;"> Signature</th>
                <td style="width:23.3333333%"><input type="text" class="form-control"  readonly="readonly"
			     style="width:100%; font-weight:normal; background-color:#fff;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Title </th>
				<th style="width:23.3333333%"> <input type="text" class="form-control" id="APPROVERTITLE" name="APPROVERTITLE" value="<?php  echo $APPROVERTITLE; ?>"    
				  style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Title </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" id="REVTITLE" name="REVTITLE"   value="<?php  echo $REVTITLE; ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff;"></td>
              </tr>
			  <tr>
			    <th style="width:10%;font-weight:normal;">Date </th>
				<th style="width:23.3333333%">  <input type="text" class="form-control" id="APPROVEDDATE" name="APPROVEDDATE"    
			    style="width:100%; font-weight:normal; background-color:#fff;"></th>
                <th style="width:33.3333333%; border:0px;"> </th>
				 <th style="width:10%;font-weight:normal;">Date </th>
                <td style="width:23.3333333%"><input type="text" class="form-control" id="REVDATE"  name="REVDATE"  
				 style="width:100%; font-weight:normal; background-color:#fff;"></td>
              </tr>
            </table>  
             <br>
             
            
           <table class="table-responsive" style="background-color:#ffffff; margin-top:0px;">
            <table class="table">
              <tr>
			    <th style="width:15%;border:2px solid #ecf0f5;">Order type </th>
                <th style="width:45%">
				<select name="ORDERTYPE" id="ORDERTYPE" value="<?php  echo $ORDERTYPE; ?>"style="width:100%;" >
        <option value="<?php  echo $ORDERTYPE; ?>" > <?php  echo $ORDERTYPE; ?></option> 
        <option> DRUGS AND OTHER SUPPLIES</option>   
        <option> GENERAL</option>
        </select>
				</th>  
             <th style="width:15%;border:2px solid #ecf0f5;">Order serial No. </th>
              <th style="width:25%"> 
              <input type="text" name="ORDERSERIALID" id="ORDERSERIALID" value="<?php  echo $ORDERSERIALID; ?>" readonly=""
               style="width:100%; border:0px;background-color:fff;"> </th> 
              </tr>   
            </table> 
            
           <table class="table-responsive" style="background-color:#ffffff; margin-top:0px;">
            <table class="table">
              <tr>
			    <th style="width:10.33333333%;border:2px solid #ecf0f5;">Delivery status </th>
                <th style="width:15%">
				<select name="DELIVERYSTATUS" id="DELIVERYSTATUS" value="<?php  echo $DELIVERYSTATUS; ?>"style="width:100%;" >
        <option value="<?php  echo $DELIVERYSTATUS; ?>" > <?php  echo $DELIVERYSTATUS; ?></option> 
        <option> PENDING</option>
        <option> DELIVERED</option>    
        </select>
		     </th>  
             <th style="width:15.33333333%;border:2px solid #ecf0f5;">Expected date of delivery </th>
             <th style="width:20%"> 
             <input type="text" name="DATEREQUIRED" id="DATEREQUIRED"  value="<?php  echo $DATEREQUIRED; ?>"
            style="width:100%; background-color:fff;height:20px;"> </th> 
             
             <th style="width:10.333333333%;border:2px solid #ecf0f5;">Remind date </th>
             <th style="width:20%"> 
             <input type="text" name="DELIVERYREMINDDATE" id="DELIVERYREMINDDATE" value="<?php  echo $DELIVERYREMINDDATE; ?>" 
             style="width:100%; background-color:fff;height:20px;"> </th> 
            
             </tr>   
             </table>   
        
           <div class="table-responsive" style="margin-top:-20px;"> <b>Note:</b>
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEA" id="NOTEA"   value="<?php  echo $NOTEA; ?>"  style="width:100%;" >   </td>  
			  
			 </tr>             
            </table>  
            
             <div class="table-responsive" style="margin-top:-20px;">  
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEB" id="NOTEB"  value="<?php  echo $NOTEB; ?>" style="width:100%;" >   </td>  
			  
			 </tr>             
            </table> 
            
            <div class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr>   
                <td style="width:100%"><input type="text" name="NOTEC" id="NOTEC"  value="<?php  echo $NOTEC; ?>"  style="width:100%;" >   </td>  
			  
			 </tr>             
            </table>  
                
                         
        <center> <input type="submit" name="button" id="button" value="Update" /> </center> 
        </form>
       
   

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  
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
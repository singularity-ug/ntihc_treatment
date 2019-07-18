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

function domeeitem(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../../dispenser/searchstores2.php",
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
       
    <!-- Main content -->
      <div class="row"> 
      
      <div class="container-fluid" style="width:80%; border:1px solid #fef7f7;">
          <div class="box box-primary" style="border:0px;margin-top: -22px;">  

              <div class="box-tools pull-right">
                <div class="has-feedback"> 
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
             <!-- /.box-header -->
             <div class="box-body no-padding">
             <div class="mailbox-controls">
             <!-- Check all button -->

              </div>
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">
 
 
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:11px; background-color:#fff; margin-top:0px; font-family:lcd;"> GENERAL STORE REQUISITION</p> </center> 
  
     <form id="form1" class="form-horizontal" action="str_reqn_gneprocess.php" method="POST" style="height:auto; font-weight:normal;">  
         <br>
         <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                <th style="width:13.25%; text-align:left;border:0px;">Requisition date</th>
                <td style="width:14.75%;border:0px;"><input type="date"id="DATECREATED" name="DATECREATED"  value="<?php echo date('y-m-d'); ?>" required="required"      
				style="width:100%;  background-color:#fff;height: 21px;"></td> 
                  
               <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			   <th style="width:13.25%; text-align:left;border:0px;">SRF number</th>
                <td style="width:16.75%;border:0px;"><input type="text" name="SRFNO" id="SRFNO" required="required"  autocomplete="off" 
				style="width:100%; text-align:left;background-color:#fff;"> 
                </td>
                  
                <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;"> </th>
                <td style="width:14.75%; border:0px;">    </td> 
			</tr>             
            </table>
            
            <table class="table-responsive" style="margin-top:-16px;"> 
            <table class="table" style="border:0px;">
            <tr>  
                <th style="width:13.25%; text-align:left;border:0px;">Requisition No.</th>
                <td style="width:14.75%;border:0px;"><input type="text"name="ORDERSERIALID" id="ORDERSERIALID" value="<?php echo uniqid();?>" readonly=""  
				style="width:100%; background-color:#fff;"></td> 
                 
              <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Facility name</th>
              <td style="width:16.75%;border:0px;"><input type="text" name="FACILITYNANE" id="FACILITYNANE" value="NTIHC" required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td>
                
                   <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;"> </th>
                <td style="width:14.75%; border:0px;">  </td>
                  
			 </tr>             
            </table>
              <input type="hidden" name="ORDERTYPE" id="ORDERTYPE" value="GENERAL" >
              
   <table class="table table-striped" id="dataTable1" style="font-weight:normal; ">
    <thead>
      <tr>  
   <th style="background-color: #f9fafb;">*</th>
   <th style="width:32%;background-color: #fff;">DESCRIPTION </th> 
   <th style="width:7%;background-color: #fff; text-align:center;">IN.STOCK</th> 
   <th style="width:7%;background-color: #fff;text-align:center;">QTY.ISSUED</th>  
   <th style="width:15%;background-color: #fff;text-align:center;">COLLECTED BY</th> 
   <th style="width:15%;background-color: #fff;text-align:center;">TITLE</th>    
   <th style="width:15%;background-color: #fff;text-align:center;">PURPOSE</th>
   <th style="width:7%;background-color: #fff;text-align:center;">STOCK.BALANCE</th> 
     
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>    
 
                            <input type="button" value="Add" onClick="addRow13('dataTable1')" class="btn-success" style="background-color:green;" > &nbsp;
                            <input type="button" value="Remove" onClick="deleteRow13('dataTable1')"class="btn-danger" style="background-color:red;" >
                            <input type="hidden" value="0" name="mytable_rows1"  id="mytable_rows1" >
                            <input type="hidden" id="mytable_rows" name="mytable_rows" value="0">
     
      <div id="res" style="border:0px;"> </div> 
      
              <input type="hidden"id="REQUISTIONTYPE" name="REQUISTIONTYPE" value="GENERAL"  > 
           
              <div class="table-responsive" style="margin-top:0px;"> Comment
               
              <table class="table" style="border:0px;">
              <tr>   
                <th style="width:100%;border:0px;background-color:#ecf0f5;"> <textarea name="STOCKOUTCOMMENT"  
				style="width:100%;" > 
				</textarea> </th>  
			 </tr>             
            </table>
            
            <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>    
                  <th style="width:9%; text-align:left;border:0px;">Issued by</th>
                <td style="width:16%;border:0px;"><input type="text"id="ISSBY" name="ISSBY"   value=" <?php echo $desc; ?> "      
				style="width:100%;background-color:#fff;height: 21px;"></td>  
                 <th style="width:75%;  border:0px;"> </th>
			 </tr>             
             </table>
            
             <table class="table-responsive" style="margin-top:-22px;"> 
            <table class="table"  style="border:0px;">
              <tr>   
                  <th style="width:9%; text-align:left;border:0px;">Name</th>
                <td style="width:16%;border:0px;"><input type="text"id="ISSBYNAME" name="ISSBYNAME"  value=" <?php echo $nameofuser; ?> "     
				style="width:100%; background-color:#fff;height: 21px;"></td>  
                 <th style="width:75%; text-align:left;border:0px;"> </th>
			 </tr>             
            </table>
            
            
             <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table"  style="border:0px;">
              <tr>   
                 
                  <th style="width:9%; text-align:left;border:0px;">Signature</th>
                <td style="width:16%;border:0px;"><input type="text"id=" "     
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td>  
                 <th style="width:75%; text-align:left;border:0px;"> </th>
			 </tr>             
            </table>
            
            
             <table class="table-responsive" style="margin-top:-23px;"> 
            <table class="table"  style="border:0px;">
              <tr>    
                  <th style="width:9%; text-align:left;border:0px;">Date</th>
                <td style="width:16%;border:0px;"><input type="date"id="ISSBYDATE" name="ISSBYDATE"  value="<?php echo date('d-m-y'); ?>"      
				style="width:100%; text-align:right;background-color:#fff;height: 21px;"></td>  
                 <th style="width:75%; text-align:left;border:0px;"> </th>
			 </tr>             
            </table>
            
             
              <Center><input type="submit" name="button" id="button" value="Save" /></Center> 
        </form>
       
   <div id="grand">
<input type="hidden" name="gran" id="gran">
</div>

<script type="text/javascript">

</script>
       
      

      </section>
 
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
 
    function  dostg(thisid){

     var val = thisid.split("_")[1]; 
	 var v2 = parseFloat(document.getElementById("fqx_"+val).value);
	 var v3 = parseFloat(document.getElementById("variance_"+val).value);

	 var v4 = v2-v3;
	 document.getElementById("qtyx_"+val).value = v4;

    }

   function addRow13(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;
     
	 var s1 = '<input type="text" onKeyUp="domeeitem(this)" name="dnx[]" id="dnx'+rowCount+'" autocomplete="off"  required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >';

	 var fq = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="fqx_'+rowCount+'"  id="fqx_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';


	 var tm = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="variance_'+rowCount+'" id="variance_'+rowCount+'" required="required" '+
	           'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';
			   
    var s133 = '<input type="text" name="remdrt[]" id="remdrt'+rowCount+'" autocomplete="off"  required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >';
			  
			  
     var s122 = '<input type="text" name="lcn[]" id="lcn'+rowCount+'" autocomplete="off"  required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >';
			  
	 var pd = '<input type="text" name="pdx[]" id="pdx'+rowCount+'" autocomplete="off"  required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >';		  
  
			  
	 var qty = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qtyx_'+rowCount+'" id="qtyx_'+rowCount+'" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';


     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+s1+' </td>'+
			   '<td>'+fq+' </td>'+
			   '<td>'+tm+' </td>'+
			   '<td>'+s133+' </td>'+
			   '<td>'+s122+' </td>'+
			   '<td>'+pd+' </td>'+
			   
			   '<td>'+qty+' </td>';


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
          table.rows[x].cells[1].childNodes[0].id="dn_"+x; 
		  table.rows[x].cells[2].childNodes[0].id="fqx_"+x; 
		  table.rows[x].cells[3].childNodes[0].id="variance_"+x;  
		  table.rows[x].cells[4].childNodes[0].id="remdrt_"+x; 
		  table.rows[x].cells[5].childNodes[0].id="lcn_"+x;  
		  table.rows[x].cells[6].childNodes[0].id="pdx_"+x;   
		  table.rows[x].cells[7].childNodes[0].name="qtyx_"+x; 
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}
 
  </script>  
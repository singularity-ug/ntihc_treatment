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
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/assets/ionicons.min.css">
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../admin/assets/notifier.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../admin/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../admin/datatable/css/buttons.dataTables.min.css">

  <script src="../admin/datatable/js/jquery-1.12.3.js"></script>
  <script src="../admin/datatable/js/jquery.dataTables.min.js"></script>
  <script src="../admin/datatable/js/bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.buttons.min.js"></script>
  <script src="../admin/datatable/js/buttons.flash.min.js"></script>
  <script src="../admin/datatable/js/jszip.min.js"></script>
  <script src="../admin/datatable/js/pdfmake.min.js"></script>
  <script src="../admin/datatable/js/vfs_fonts.js"></script>
  <script src="../admin/datatable/js/buttons.html5.min.js"></script>
  <script src="../admin/datatable/js/buttons.print.min.js"></script>
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#AW"+num).val(data[2]);
  $("#TO").val(data[2]); 
}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "searchstores.php",
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
     $('#exdynam').DataTable( {
	  "iDisplayLength": 2,
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
     $('#app1').DataTable( {
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
     $('#app2').DataTable( {
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
     $('#app3').DataTable( {
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
     $('#app4').DataTable( {
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
     $('#exdrug').DataTable( {
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
     $('#example6').DataTable( {
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
 
 
<?php
  $id ='';  
  $ORDERSERIALID = ''; 
  $REQUESTINGUNIT  = '';
  $ORDERTYPE = '';
  $FACILITYNANE = '';   
  $TIMESTAMP='';
  $DATECREATED='';   
  $REQUESTINGUNIT = ''; 
  $FACILITYNANE='';  
  $REQUISTIONTYPE = '';   
  $REQBY=''; 
  $REQBYNAME = ''; 
  $REQBYDATE = ''; 
   
  	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM outgingmin WHERE TIMESTAMP >='$date' ORDER BY id DESC LIMIT 1";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $ORDERSERIALID = $row['ORDERSERIALID']; 
     $REQUESTINGUNIT = $row['REQUESTINGUNIT'];
     $ORDERTYPE  = $row['ORDERTYPE'];
     $FACILITYNANE = $row['FACILITYNANE'];  
	 $DATECREATED=$row['DATECREATED'];  
     $REQUESTINGUNIT   = $row['REQUESTINGUNIT']; 
     $FACILITYNANE=$row['FACILITYNANE'];     
     $REQUISTIONTYPE   = $row['REQUISTIONTYPE']; 
	 $REQBY=$row['REQBY'];    
     $REQBYNAME   = $row['REQBYNAME'];  
     $REQBYDATE=$row['REQBYDATE'];   
      } 
  ?>
            
                    
                         <img src="../assets/img/logsbig.PNG" width="100%" height="30%">
     
        <center> <p style="color:#000; font-weight:bold;font-size:11px; background-color:#fff; margin-top:-10px;">
         STORE REQUISITION FOR DRUGS AND SUPPLIES</p> </center>  
     <form class="form-horizontal" action="incomingdrugs_masterprocessor.php" method="POST" style="height:auto; font-weight:normal;">  
         <br>
        <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:13.25%; text-align:left;border:0px;">Requisition date</th>
                <td style="width:14.75%;border:0px;"><input type="date"id="DATECREATED" name="DATECREATED"  value="<?php  echo $DATECREATED; ?>" 
                 required="required"  
				style="width:100%; background-color:#fff;height: 21px;"></td> 
                  
               <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Order type</th>
                <td style="width:16.75%;border:0px;"><select name="ORDERTYPE" id="ORDERTYPE" value="<?php  echo $ORDERTYPE; ?>"  required="required"
				style="width:100%; background-color:#fff;">
                 <option value="<?php  echo $ORDERTYPE; ?>" ><?php  echo $ORDERTYPE; ?></option>
                         <option>IN HOUSE</option>
                         <option>FACILITY</option>  
                         </select>
                </td> 
                
                <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:10.25%; text-align:left;border:0px;">Requesting unit</th>
                <td style="width:18.75%; border:0px;"> 
                <select name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="<?php  echo $REQUESTINGUNIT; ?>"  required="required"
				style="width:100%; background-color:#fff;">
                <option value="<?php  echo $REQUESTINGUNIT; ?>" ><?php  echo $REQUESTINGUNIT; ?></option>
                         <option>DISPENSARY</option>
                         <option>LABORATORY</option> 
                         <option>FA</option> 
                         <option>SERVICE DELIVERY</option> 
                         <option>ADVOCACY AND RESEARCH</option> 
                         </select>
                </td>           
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:-16px;"> 
            <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:13.25%; text-align:left;border:0px;">Requisition No.</th>
                <td style="width:14.75%;border:0px;"><input type="text"name="ORDERSERIALID" id="ORDERSERIALID" value="<?php  echo $ORDERSERIALID; ?>"  required="required"s  
				style="width:100%; background-color:#fff;"></td> 
                 
                <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Facility name</th>
                <td style="width:16.75%;border:0px;"><input type="text" name="FACILITYNANE" id="FACILITYNANE" value="<?php  echo $FACILITYNANE; ?>"  required="required"
				style="width:100%; background-color:#fff;"></td>
                
                   <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;"> </th>
                <td style="width:14.75%;border:0px;"></td>  
			 </tr>             
            </table>
              
            
      <p style="font-weight:normal;">Description of request</p>
     
     <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
       <th style="width:55%;">DESCRIPTION </th> 
       <th style="width:15%; text-align:center;">QTY IN STOCK</th>  
       <th style="width:15%; text-align:center;">QTY NEEDED</th>
       <th style="width:15%; text-align:center;">UNIT OF MEASURE</th>  
           
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>    
     <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
     
     <br>   <br>      
      <div class="col-sm-5">
     
     <div id="res"> </div> 
     
     </div>
   
    <input type="hidden"id="REQUISTIONTYPE" name="REQUISTIONTYPE" value="STANDARD" > 
      
    <input type="hidden"id="REQUESTORACCOUNT" name="REQUESTORACCOUNT" value="<?php  echo $rm; ?>">
        
        <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;">Requested by</th>
                <td style="width:15%;border:0px;"><input type="text"id="REQBY" name="REQBY" value="<?php  echo $REQBY; ?>"
				style="width:100%; background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%; border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;">Authorised by</th>
                <td style="width:15%;border:0px;"><input type="text"id="AUTBY" name="AUTBY"       
				style="width:100%;  background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%;  border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Approved by</th>
                <td style="width:15%;border:0px;"><input type="text"id="APPBY" name="APPBY"       
				style="width:100%;  background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%;  border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Issued by</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBY" name="ISSBY"     
				style="width:100%; background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
            
               <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;">Name</th>
                <td style="width:15%;border:0px;"><input type="text"id="REQBYNAME" name="REQBYNAME" value="<?php  echo $REQBYNAME; ?>" 
				style="width:100%; background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%;  border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;">Name</th>
                <td style="width:15%;border:0px;"><input type="text"id="AUTBYNAME" name="AUTBYNAME"       
				style="width:100%; background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Name</th>
                <td style="width:15%;border:0px;"><input type="text"id="APPBYNAME" name="APPBYNAME"       
				style="width:100%; background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Name</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBYNAME" name="ISSBYNAME"     
				style="width:100%; background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
            
            
             <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;">Signature</th>
                <td style="width:15%;border:0px;"><input type="text"id=" "   
				style="width:100%;  background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;">Signature</th>
                <td style="width:15%;border:0px;"><input type="text"id=" "      
				style="width:100%;  background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Signature</th>
                <td style="width:15%;border:0px;"><input type="text"id=" "     
				style="width:100%; background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Signature</th>
                <td style="width:15%;border:0px;"><input type="text"id=" "     
				style="width:100%;  background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
            
            
             <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;">Date</th>
                <td style="width:15%;border:0px;"><input type="text"id="REQBYDATE" name="REQBYDATE" value="<?php  echo $REQBYDATE; ?>"   
				style="width:100%;background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%; border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;">Date</th>
                <td style="width:15%;border:0px;"><input type="text"id="AUTBYDATE" name="AUTBYDATE"       
				style="width:100%; text-align:left;background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Date</th>
                <td style="width:15%;border:0px;"><input type="text"id="APPBYDATE" name="APPBYDATE"       
				style="width:100%; text-align:left;background-color:#fff;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Date</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBYDATE" name="ISSBYDATE"     
				style="width:100%; text-align:left;background-color:#fff;height: 21px;"></td>  
			 </tr>             
            </table>
            
             
              <Center><input type="submit" name="button" id="button" value="Save" /></Center> 
               </form>
       
                 
             </div></div></div></div> 
              
               
           


                </div> 
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
    <footer class="main-footerx" style="background-color: #000; color:#fff;text-align:center;">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div>
     
  </footer>

       
  </div> 


<script src="../assets/lib/moment/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/admin/dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
	<script type="text/javascript" src="../assets/js/gauge.js"></script> 
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

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="AW[]" id="AW'+rowCount+'" required="required" autocomplete="off"'+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="IN[]" id="IN'+rowCount+'"'+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" required="required">';			 
 
 		 
	 var  s6ff = '<input type="text" name="FR[]" id="FR'+rowCount+'" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" required="required">';

     var  s7gg = '<input type="text" name="TO[]" id="TO'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+ 
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
		  table.rows[x].cells[1].childNodes[0].id="AW"+x;
		  table.rows[x].cells[2].childNodes[0].id="IN"+x; 
		  table.rows[x].cells[3].childNodes[0].id="FR"+x;
		  table.rows[x].cells[4].childNodes[0].id="TO"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
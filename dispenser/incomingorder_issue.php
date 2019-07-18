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

  $("#DESCRIPTION"+num).val(data[2]);
  $("#BATCHNO").val(data[2]);
  $("#QTYINSTOCK").val(data[3]);
  $("#UNITOFMEASURE").val(data[4]); 
  $("#EXPIRY").val(data[5]);
  $("#UNITVALUE").val(data[6]); 
}

 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "searchstock_details.php",
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
   <?php
  require('config.php');
  ?>
   
 
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
  $INITIATIONUNIT = ''; 
  	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM outgingmin WHERE TIMESTAMP >='$date' AND INITIATIONUNIT ='STORES' ORDER BY id DESC LIMIT 1";

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
	 $INITIATIONUNIT=$row['INITIATIONUNIT'];   
	  $id=$row['id'];  
      } 
  ?>
           
                      </head>  
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="panel-body">
       <div class="container fluid" style="width:90%; border:2px solid;"> 
         <img src="../assets/img/logsbig.PNG" width="100%" height="30%" style="margin-top: 0px;">
    
          
        <center> <p style="color:#000; font-weight:bold;font-size:14px; background-color:#fff; margin-top:-18px; font-family:lcd;">
         REQUISITION FOR DRUGS AND SUPPLIES</p> </center> <hr>
  
     <form class="form-horizontal" action="incomingdrugs_masterprocessor_issue.php" method="POST" style="height:auto; font-weight:normal;">  
         <br>
        <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:13.25%; text-align:left;border:0px;">Requisition date</th>
                <td style="width:14.75%;border:0px;"><input type="date"id="DATECREATED" name="DATECREATED"  value="<?php  echo $DATECREATED; ?>"  required="required"  
				style="width:100%; background-color:#f8f2f1;height: 21px;"></td> 
                  
               <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Requesting unit</th>
                <td style="width:16.75%;border:0px;"><select name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="<?php  echo $REQUESTINGUNIT; ?>"  required="required"
				style="width:100%; background-color:#f8f2f1;">
                <option value="<?php  echo $REQUESTINGUNIT; ?>" ><?php  echo $REQUESTINGUNIT; ?></option>
                         <option>DISPENSARY</option>
                         <option>LABORATORY</option> 
                         <option>FA</option> 
                         <option>SERVICE DELIVERY</option> 
                         <option>ADVOCACY AND RESEARCH</option> 
                         </select>
                </td>           
                  
                <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;">Order type</th>
                <td style="width:14.75%; border:0px;"><select name="ORDERTYPE" id="ORDERTYPE" value="<?php  echo $ORDERTYPE; ?>"  required="required"
				style="width:100%; background-color:#f8f2f1;">
                 <option value="<?php  echo $ORDERTYPE; ?>" ><?php  echo $ORDERTYPE; ?></option>
                         <option>IN HOUSE</option>
                         <option>FACILITY</option>  
                         </select>
                </td>           
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:-16px;"> 
            <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:13.25%; text-align:left;border:0px;">Requisition No.</th>
                <td style="width:14.75%;border:0px;"><input type="text"name="ORDERSERIALID" id="ORDERSERIALID" value="<?php  echo $id; ?>"   required="required"  
				style="width:100%; background-color:#f8f2f1;"></td> 
                 
                <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Facility name</th>
                <td style="width:16.75%;border:0px;"><input type="text" name="FACILITYNANE" id="FACILITYNANE" value="<?php  echo $FACILITYNANE; ?>"  required="required"
				style="width:100%; background-color:#f8f2f1;"></td>
                
                   <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;"> </th>
                <td style="width:14.75%;border:0px;"></td>
                 
                  <input type="hidden" name="INITIATIONUNIT" id="INITIATIONUNIT" value="<?php  echo $INITIATIONUNIT; ?>">
			 </tr>             
            </table>
              
            
   
  
  
    <table style="border:1px solid purple">
    <tr>
   <th style="width:25%;background-color: #fff;">DESCRIPTION </th> 
   <th style="width:7%;background-color: #fff;">BATCH NO.</th>
   <th style="width:5%;background-color: #fff; text-align:center;">QTY IN STOCK</th> 
   <th style="width:5%;background-color: #fff;text-align:center;">QTY NEEDED </th>
   <th style="width:15%;background-color: #fff;text-align:center;">UNIT OF MEASURE </th>
   <th style="width:5%;background-color: #fff;text-align:center;">QTY ISSUED</th>
   <th style="width:5%;background-color: #fff;">UNIT </th>
   <th style="width:7%;background-color: #fff;">STOCK BAL</th> 
   <th style="width:7%;background-color: #fff;text-align:center;">EXPIRY</th>    
   <th style="width:7%;background-color: #fff;text-align:center;">UNIT VALUE</th>
   <th style="width:7%;background-color: #fff;text-align:center;">AMOUNT</th> 
       <th style="width:5%;background-color: #fff;text-align:center;">ACTION</th> 
    </tr>
    <tr>
     <th style="background-color: #f9fafb;"><input type="text"id="DESCRIPTION" onKeyUp="domee(this)" name="DESCRIPTION" autocomplete="off"
				style="width:100%; background-color:#f8f2f1;height: 21px;"> </th> 
                
   <th style="background-color: #f9fafb;"><input type="text"id="BATCHNO" name="BATCHNO" 
				style="width:100%; background-color:#f8f2f1;height: 21px;"> </th>
                
   <th style="background-color: #f9fafb; text-align:center;"><input type="text"id="QTYINSTOCK" name="QTYINSTOCK" name1="QTYINSTOCK[]" 
				style="width:100%; background-color:#f8f2f1;height: 21px;text-align:center;"> </th> 
                
    <th style="background-color: #f9fafb;text-align:center;"><input type="text"id="QTYNEEDED" name="QTYNEEDED" 
				style="width:100%; text-align:right;background-color:#fff;height: 21px;text-align:center;">  </th>
                
               <th style="background-color: #f9fafb;"><input type="text"id="UNITOFMEASURE" name="UNITOFMEASURE" 
				style="width:100%;background-color:#f8f2f1;height: 21px;"> </th>
                
               <th style="background-color: #f9fafb;text-align:center;">
              <input class="qty" type="text" name="QTYISSUED" name1="qty[]" 
				style="width:100%; background-color:#fff;height: 21px;text-align:center;">  </th>
                  
        
         <th style="background-color: #f9fafb;text-align:center;"><input type="text"id="UNIT" name="UNIT" 
				style="width:100%; background-color:#fff;height: 21px;"> </th>
                
   <th style="background-color: #f9fafb;"><input type="text"id="STOCKBAL" name="STOCKBAL" name1="STOCKBAL[]" 
				style="width:100%; background-color:#fff;height: 21px;text-align:center;">  </th>
                  
   <th style="background-color: #f9fafb;text-align:center;"><input type="text"id="EXPIRY" name="EXPIRY" 
				style="width:100%;  background-color:#f8f2f1;height: 21px;"> </th>   
                  
        
        <th style="background-color: #f9fafb;text-align:center;"><input type="text"id="UNITVALUE" name="UNITVALUE" name1="UNITVALUE[]" 
				style="width:100%; background-color:#f8f2f1;height: 21px;"> </th>
                
           <th style="background-color: #f9fafb;text-align:center;"><input type="text"id="AMOUNT" name="AMOUNT" name1="AMOUNT[]" 
				style="width:100%;  background-color:#f8f2f1;height: 21px;"> </th> 
                    
      <th style="background-color: #f9fafb;text-align:center;"><input type="submit" name="button" id="button" value="Save" />  </th> 
             

    </tbody>
  </table>  
<div id="grand">
<input type="hidden" name="gran" id="gran">
</div>

<script type="text/javascript">
$(document).ready(function() { 
	    $(".qty").keyup(function() {
        var grandTotal = 0;
        $("input[name1='qty[]']").each(function (index) {
            var qty = $("input[name1='qty[]']").eq(index).val();
            var UNITVALUE = $("input[name1='UNITVALUE[]']").eq(index).val();
            var AMOUNT = parseInt(qty) * parseInt(UNITVALUE);
		    var QTYINSTOCK = $("input[name1='QTYINSTOCK[]']").eq(index).val();
            var STOCKBAL = parseInt(QTYINSTOCK) - parseInt(qty);

            if (!isNaN(AMOUNT)) {
                $("input[name1='AMOUNT[]']").eq(index).val(AMOUNT);
                grandTotal = parseInt(grandTotal) + parseInt(AMOUNT);
                $('#gran').val(grandTotal);
            }
			
			 if (!isNaN(STOCKBAL)) {
                $("input[name1='STOCKBAL[]']").eq(index).val(STOCKBAL);
                grandTotal = parseInt(grandTotal) + parseInt(STOCKBAL);
                $('#granx').val(grandTotal);
            }
        });
    });
});
</script>
 
    <div class="col-sm-6">
     
     <div id="res"> </div> 
     
     </div>
     
    <input type="hidden"id="REQUISTIONTYPE" name="REQUISTIONTYPE" value="STANDARD" >  
    <input type="hidden"id="STOCKISSUANCESTATUS" name="STOCKISSUANCESTATUS" value="ISSUED" > 
    <input type="hidden"id="APPROVAL" name="APPROVAL" value="DIRECT ENTRY FROM STORES" >
    <input type="hidden"id="REQBY" name="REQBY" value="<?php  echo $REQBY; ?>">
    <input type="hidden"id="REQBYNAME" name="REQBYNAME" value="<?php  echo $REQBYNAME; ?>" >
    <input type="hidden" id="REQBYDATE" name="REQBYDATE" value="<?php  echo $REQBYDATE; ?>">  
    <input type="hidden"id="REQUESTORACCOUNT" name="REQUESTORACCOUNT" value="<?php  echo $rm; ?>">
    
       
       </form>
     <p></p>
       <table id="exdynam" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;"> 
                     <thead>
                     <tr>
                     <th>DATE</th> 
                     <th>SERIAL NO.</th> 
                     <th>CREATED BY</th> 
                     <th>REQUESTING UNIT</th>
                     <th>FACILITY NANE</th> 
                     <th>ORDER TYPE</th> 
                     <th>APPROVAL</th>     
			         <th>ACTION</th> 
                      
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("connect/configproc.php");
             $date = date("Y-m-d").' 00:00:00';
             $result = mysqli_query($mysqli, "SELECT * FROM outgoingorders WHERE DATECREATED >='$date'  AND REQUISTIONTYPE ='STANDARD' AND APPROVAL = 'DIRECT ENTRY FROM STORES' 
			 GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");
 
             while($res = mysqli_fetch_array($result)) {
             $sdtsrr = $res['id']."***".$res['ORDERSERIALID']."***".$res['FACILITYNANE']."***".$res['ORDERTYPE'];
              echo "<tr>"; 
			  echo "<td>".$res['DATECREATED']."</td>";
			  echo "<td>".$res['ORDERSERIALID']."</td>";
			  echo "<td>".$res['REQBYNAME']."</td>"; 
			  echo "<td>".$res['REQUESTINGUNIT']."</td>";
              echo "<td>".$res['FACILITYNANE']."</td>"; 
			  echo "<td>".$res['ORDERTYPE']."</td>"; 
			  echo "<td>".$res['REQUISTIONTYPE']."</td>";    
			  echo "<td><a href=\"str_reqn_printstandard.php?ORDERSERIALID=$res[ORDERSERIALID]\">print</a>  
			    </td>";
             }
              ?>
             </tbody>
             </table>	
     
      
           
           
        <table class="table-responsive" style="margin-top:0px;"> 
        
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;">Requested by</th>
                <td style="width:15%;border:0px;"><input type="text"id="REQBY" name="REQBY" value="<?php  echo $REQBY; ?>"
				style="width:100%; background-color:#f8f2f1;height: 21px;"></td> 
                 <th style="width:1%; border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;">Authorised by</th>
                <td style="width:15%;border:0px;"><input type="text"id="AUTBY" name="AUTBY"       
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td> 
                 <th style="width:1%;  border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Approved by</th>
                <td style="width:15%;border:0px;"><input type="text"id="APPBY" name="APPBY"       
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td> 
                 <th style="width:1%;  border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Issued by</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBY" name="ISSBY"     
				style="width:100%; background-color:#ecf0f5;height: 21px;"></td>  
			 </tr>             
            </table>
            
               <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;">Name</th>
                <td style="width:15%;border:0px;"><input type="text"id="REQBYNAME" name="REQBYNAME" value="<?php  echo $REQBYNAME; ?>" 
				style="width:100%; background-color:#f8f2f1;height: 21px;"></td> 
                 <th style="width:1%;  border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;">Name</th>
                <td style="width:15%;border:0px;"><input type="text"id="AUTBYNAME" name="AUTBYNAME"       
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Name</th>
                <td style="width:15%;border:0px;"><input type="text"id="APPBYNAME" name="APPBYNAME"       
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Name</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBYNAME" name="ISSBYNAME"     
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td>  
			 </tr>             
            </table>
            
            
             <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;">Signature</th>
                <td style="width:15%;border:0px;"><input type="text"id=" "   
				style="width:100%; text-align:right;background-color:#f8f2f1;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;">Signature</th>
                <td style="width:15%;border:0px;"><input type="text"id=" "      
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Signature</th>
                <td style="width:15%;border:0px;"><input type="text"id=" "     
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Signature</th>
                <td style="width:15%;border:0px;"><input type="text"id=" "     
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td>  
			 </tr>             
            </table>
            
            
             <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:9%; text-align:left;border:0px;">Date</th>
                <td style="width:15%;border:0px;"><input type="text"id="REQBYDATE" name="REQBYDATE" value="<?php  echo $REQBYDATE; ?>"   
				style="width:100%;background-color:#f8f2f1;height: 21px;"></td> 
                 <th style="width:1%; border:0px;"> </th>
                   
               <th style="width:10%; text-align:left;border:0px;">Date</th>
                <td style="width:15%;border:0px;"><input type="text"id="AUTBYDATE" name="AUTBYDATE"       
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Date</th>
                <td style="width:15%;border:0px;"><input type="text"id="APPBYDATE" name="APPBYDATE"       
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td> 
                 <th style="width:1%; text-align:left;border:0px;"> </th>
                 
                  <th style="width:9%; text-align:left;border:0px;">Date</th>
                <td style="width:15%;border:0px;"><input type="text"id="ISSBYDATE" name="ISSBYDATE"     
				style="width:100%; text-align:right;background-color:#ecf0f5;height: 21px;"></td>  
			 </tr>             
            </table>
            
             
              <br>
              
              
               <center><a href="../admin/proc/stores_module.php" class="button5"> Close </a></center>
               <br>
        </form>
       
                 
             </div></div></div></div> 
              
              
              
                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 "> 
   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 
 <img src="../assets/img/logsbig.PNG" width="100%" height="100%"> 
                <center> <p style="color:#000; font-weight:bold;font-size:12px;"> <b>NEW ITEM / LAB SUPPLIES REGISTRATION FORM</b> </p> </center>
                 
           <form class="form-horizontal" action="new_drugprocessor.php" method="POST" style="height:auto; font-weight:normal;">  
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:3px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Description</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="DESCRIPTION" id="DESCRIPTION"  value=" "  required="required"
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   </tr>
  <tr>
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Category  </th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="CATEGORY"   id="CATEGORY" required="required"
    style="width:100%; text-align:left;background-color:#ecf0f5;">   </td>  
   </tr>
  <tr>
 </tbody>
 </table>
 
    <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Breakdown</th>
   <th style="border:2px solid #ecf0f5;">Unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><select name="BREAKDOWN" id="BREAKDOWN"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;">
     <option value="DRUG">DRUG <option>
     <option value="OTHER SUPPLIES"> OTHER SUPPLIES<option>  
                  </select> </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="text" name="UNITOFMEASURE " id="UNITOFMEASURE"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
 
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Stock taken</th>
   <th style="border:2px solid #ecf0f5;">Qty per unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="STOCKTAKEN" id="STOCKTAKEN"  value="0" 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
	
	<td style="width:50%;"><input type="numeric" name="QTYPERUOM " id="QTYPERUOM"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table>  
 
 
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Unit cost</th>
   <th style="border:2px solid #ecf0f5;">Re-order level</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="UNITCOST " id="UNITCOST"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="REORDERLEVEL " id="REORDERLEVEL"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table>  
 
 <table class="table-responsive" style="background-color:#ffffff; margin-top:-19px; ">
            <table class="table">
              <tr>
			    <th style="width:25%;border:2px solid #ecf0f5;">Discontinue </th>
                <th style="width:75%">
				<center> <input type="radio" name="DISCONTINUE" id="DISCONTINUE" value="DISABLED" checked>
        <label for="DISCONTINUE">DISABLED</label>
		<input name="DISCONTINUE" type="radio" id="DISCONTINUE" value="ACTIVATE">
		<label for="DISCONTINUE">ACTIVATE</label> </center>
				</th>  
              </tr> 
            </table>
             
    <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Item short notes</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%; border:2px solid #ecf0f5;"><textarea name="ITEMNOTES" id="ITEMNOTES"  value="" required="required"
 style="width:100%; text-align:left;background-color:#ecf0f5;"></textarea></td> 
   </tr>
  <tr>
 </tbody>
 </table>  
        
	<table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Location</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%; border:2px solid #ecf0f5;"><input type="text" name="LOCATION" id="LOCATION"  value=""  
   style="width:100%; text-align:left;background-color:#ecf0f5;"> </td> 
   </tr>
  <tr>
 </tbody>
 </table> 
  
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Usage line</th>
   <th style="border:2px solid #ecf0f5;"> </th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><select name="USERUNIT" id="USERUNIT"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;">
     <option value="GENERAL">GENERAL <option>
     <option value="DISPENSARY"> DISPENSARY<option>  
     <option value="LABORATORY"> LABORATORY<option>  
                  </select> </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"> </td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
  
	
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Incharge stores</th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="LASTUPDATEDBY" id="LASTUPDATEDBY"  value="<?php echo $nameofuser; ?>  " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td>  
							
   </tr>
  <tr>
 </tbody>
 </table> 
  <Center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" /> &nbsp; 
  </Center>
			 
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;"> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
 
               <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="default" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 

            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:40px; text-align:center;"> ACCESS DENIED</p>
             
            <p></p>
            <p style="color:red; font-weight:bold; font-size:40px; text-align:center;font-family:lcd;"> <?php echo date('Y-m-d'); ?></p> 
            </p>
            <p></p> 
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                     </div>
                                   </div>
                                </div>
                             </div>
                           </div>
                         </div>
      

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
    <footer class="main-footerx">
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
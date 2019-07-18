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
  header('location:../index.php');
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../css/uniform.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 

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

  $("#SUBPROGRAMME"+num).val(data[2]);
  $("#VOTE_HEADNO").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BALANCEREMAINING").val(data[5]);
  $("#FINANCIALYEAR").val(data[6]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../budget/budgetlinesearch.php",
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
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength":3,
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
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 5,
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
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stdd ="";
if( $result = $connect->query("SELECT * FROM motorisedequipments WHERE GENERALSTATUS = 'OPERATIONAL' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['REGISTRATIONNO'] ." </option>";   }
  }
$connect->close();
?> 

 <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stssl ="";
if( $result = $connect->query("SELECT * FROM panel WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?>  
</head>
 
     <div class="col-sm-1">
       </div>
        <div class="col-sm-10">
 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-fast-backward"></i> Back </a></h5>
        </div>
        <div class="widget-content" style="background-color: #fff;">
          <div class="row-fluid">
            <div class="span12"> 
              
             <img src="../img/logsbig.png" width="100%" height="30%">
             
        <center> <p style="color:#000; font-weight:bold;font-size:10px; background-color:#fff; font-family:lcd;margin-top: 0px;">
         <b>FUEL AND LUBRICANTS REQUISTION</b> </p> </center> 
          
     <form class="form-horizontal" method="post" action="fuel/fuel_requisitionprocess.php" style="height:auto;">  
        <div class="panel-body">
        
             <table class="table-responsive" style="margin-top:0px;">
             <table class="table" style="border:0px;">
              <tr> 
			  <th style="width:20%;border:0px;">Requisition date </th>
		      <th style="width:30%;border:0px;"> <input type="date"  name="DATECREATED"  id="DATECREATED" value="<?php echo date('y-m-d'); ?>"   
			  required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
              
              <th style="width:20%;border:0px;">Requisition No. </th>
				<th style="width:30%;border:0px;"> <input type="text"  id="ORDERNO" name="ORDERNO" value=" <?php echo uniqid();?>"   
				readonly="readonly" style="width:100%; font-weight:normal;  background-color:#fff;">  </th>  
              </tr>
			  </table>  
              
                
               
              <div class="table-responsive mailbox-messages"> 
              <p></p>
              
   <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th  style="width:15%;">REG NUMBER</th>
   <th  style="width:20%;">TYPE</th>
   <th  style="width:10%;">PRODUCT</th> 
   <th  style="width:15%;">LUBRICANT </th> 
   <th  style="width:5%;">QTY</th> 
   <th  style="width:10%;">ODO READING</th>
   <th  style="width:25%;">DRIVER</th>
           
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>    
     <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
         
         </div>   </div>    
               
           <div class="col-sm-4"> 
         
          <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:40%;border:0px;">Requested by</th> 
				<th style="width:60%;border:0px;"> <input type="numeric" id="INITIATORTITLE" name="INITIATORTITLE" value="<?php echo $desc; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
			  </table>      
               
                <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:40%;border:0px;">Name</th>  
				<th style="width:60%;border:0px;"> <input type="numeric" id="INITIATEDBY" name="INITIATEDBY"  value="<?php echo $nameofuser; ?>" 
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
               
               
               
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:40%;border:0px;">Uesr department</th> 
				<th style="width:60%;border:0px;"> <input type="numeric" id="INITIATORDEPARTRMENT" name="INITIATORDEPARTRMENT" value="<?php echo $dept; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
                
                 <input type="hidden" id="INITIATIONDATE" name="INITIATIONDATE"  />  
                  
              </tr>
			  </table>
              
              
             <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;"> 
              
                <th style="width:40%;border:0px;">Send to:</th> 
				<th style="width:60%;border:0px;"> <select id="SENDTO" name="SENDTO" required="required"  autofocus="autofocus" 
                style="width:100%; font-weight:normal; background-color:#fff;">
                <option> </option>
                ddd     = "<?php   echo $stssl; ?>"; 
                </select> </th>    
                 
                  <input type="hidden" id="SERIALNO" name="SERIALNO" value=" <?php echo uniqid();?>"  >  
                    
                  <input type="hidden" id="INITIATORACCOUNT" name="INITIATORACCOUNT"  value="<?php echo $rm; ?>"  >   
              </tr>
			  </table> 
             
                 
         </div>
                
                
         <div class="col-sm-4"> 
          <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:40%;border:0px;">Reviewed and approved by</th> 
				<th style="width:60%;border:0px;"> <input type="numeric" id="ARBY" name="ARBY"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
                    <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:40%;border:0px;">Name</th> 
				<th style="width:60%;border:0px;"> <input type="numeric" id="ARNAME" name="ARNAME"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>     
              </tr>
			  </table>  
              </tr>
			  </table>      
               
          
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr>  
                 
                 <th style="width:40%;border:0px;">Date</th> 
				<th style="width:60%;border:0px;"> <input type="numeric" id="ARDATE" name="ARDATE"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
           
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:60%;border:0px;"> </th>    
              </tr>
			  </table>
             
         </div>
         
         <div class="col-sm-4"> 
          <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:40%;border:0px;">Reviewed by</th> 
				<th style="width:60%;border:0px;"> <input type="numeric" id="RVDBY" name="RVDBY"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
              </tr>
			  </table>      
               
           <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;">
              <tr>  
                 
                 <th style="width:40%;border:0px;">Name</th> 
				<th style="width:60%;border:0px;"> <input type="numeric" id="RVDNAME" name="RVDNAME"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
              
              
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr>      
                 <th style="width:40%;border:0px;">Date</th> 
				<th style="width:60%;border:0px;"> <input type="numeric" id="RVDDATE" name="RVDDATE"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
              
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr>   
                 <th style="width:100%;border:0px;"> <center> <input type="submit" name="button" id="button" value="Save"/></center></th>  
              </tr>
			  </table>
             
              
            </div> 
             </form>  
               </div>   
             
             </div> </div>  
            </div>
           </div>
           
            <div class="widget-box">
         <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Requisition history</h5> 
        </div>
        <div class="widget-content">
      
             
             
             <div class="table-responsive mailbox-messages"> 
             <p></p>
                  <!-- Info boxes --> 
           
    
    <table id="example5" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                     <th style="background-color:#ecf0f5;">ACTION</th>
                     <th style="background-color:#ecf0f5;">REQUISITION.DATE</th>
					 <th style="background-color:#ecf0f5;">SERIAL / NO.</th> 
					 <th style="background-color:#ecf0f5;">INITIATOR</th> 
                     <th style="background-color:#ecf0f5;">DEPARTMENT</th>  
                     <th style="background-color:#ecf0f5;">STATUS</th>   
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5;">ACTION</th>
                     <th style="background-color:#ecf0f5;">REQUISITION.DATE</th>
					 <th style="background-color:#ecf0f5;">SERIAL / NO.</th> 
					 <th style="background-color:#ecf0f5;">INITIATOR</th> 
                     <th style="background-color:#ecf0f5;">DEPARTMENT</th>  
                     <th style="background-color:#ecf0f5;">STATUS</th>  
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dts = myid.split("***");
document.getElementById("mySERIALNO").value=dts[0];
document.getElementById("myID").value=dts[1];  
document.getElementById("myINITIATEDBY").value=dts[2]; 
document.getElementById("myARDATE").value=dts[3]; 
}
</script>    
         
                 
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM fuellogs WHERE APPROVALSTATUS ='PENDING' AND INITIATORACCOUNT = '$rm' GROUP BY SERIALNO ORDER BY DATECREATED DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['SERIALNO']."***".$res['id']."***".$res['INITIATEDBY'];
		echo "<tr>"; 
		echo "<td><a href=\"fuel/print_fuelrequisition.php?SERIALNO=$res[SERIALNO]\">Print</a></td>";
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['SERIALNO']."</td>"; 
		echo "<td>".$res['INITIATEDBY']."</td>"; 
		echo "<td>".$res['INITIATORDEPARTRMENT']."</td>"; 
		echo "<td>".$res['APPROVALSTATUS']."</td>";   
	}
	   
    ?>
	</tbody>
  </table> 
  
         
           
                  
        <div class="span3"> 
        
        <ul class="site-stats">
                <li class="bg_lb"><i class="icon-user"></i> <strong>
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='PENDING' AND INITIATORACCOUNT = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
        </strong> <small>New </small>
                 <small>orders</small></li>
                
                <li class="bg_lo"><i class="icon-share"></i> <strong>
                
                                  <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND INITIATORACCOUNT = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

</strong> <small>Approved</small>
          <small>orders</small></li>  
              </ul>  
              </div>  
<!--End-Chart-box--> 
 

  <div class="span3"> 
        
        <ul class="site-stats">
                <li class="bg_ly"><i class="icon-share"></i> <strong>
                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='REJECTED' AND INITIATORACCOUNT = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    	
                </strong> <small>Rejected</small>
                <small>orders</small></li>
                
                <li class="bg_lg"><i class="icon-share"></i> <strong>
                
                                  <?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND INITIATORACCOUNT = '$rm' AND REVIEWFUEL = 'REVIEWED' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    		
</strong> <small>Confirmed </small>
           <small>orders </small>   </li> 
                 
              </ul>  
             </div>  
<!--End-Chart-box-->
</div>

  
<!--Footer-part-->
<div class="row-fluid"> 
</div>
<!--end-Footer-part-->
<!--<script src="../js/jquery.min.js"></script>-->
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.validate.js"></script>
<script src="../js/matrix.js"></script>  
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/matrix.wizard.js"></script> 
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

     var  s1aa = '<select onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">'+ 
                                        '<option></option>'+
                                        '<option><?php   echo $stdd; ?></option>'+ 
                                        '</select>';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';			 

	 var  s3cc = '<select name="tmx[]" id="tmx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:left;">'+ 
                                        '<option></option>'+
                                        '<option>AGO</option>'+
                                        '<option>PMS</option>'+ 
                                        '</select>';
 		 
	 var  s6ff = '<input type="text" name="pdx[]" id="pdx'+rowCount+'" value="N/A" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';


    var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s11 = '<input type="text" name="ord[]" id="ord'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';
				 
     var  s22 = '<input type="text" name="dri[]" id="dri'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
				                  '<td>'+s7gg+' </td>'+
								  '<td>'+s11+' </td>'+
				                  '<td>'+s22+' </td>';
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
		  table.rows[x].cells[4].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[5].childNodes[0].id="qtyx"+x;
		  table.rows[x].cells[6].childNodes[0].id="ord"+x;
		  table.rows[x].cells[7].childNodes[0].id="dri"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
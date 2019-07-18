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
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../css/matrix-style.css" />
<link rel="stylesheet" href="../../css/matrix-media.css" />
<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../../css/uniform.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 

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

   <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
   border-top: 1px solid #000;
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
				  font-weight:normal;
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
 
 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class=""></i>
         <a href="../dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-fast-backward"></i> Dasboard </a>
        </span>
          <h5>  &nbsp;<a href="../fuel_approve.php" title="Go to Home" class="tip-bottom"><i class="icon-backward"></i> Home </a>
           &nbsp;
         <a href="my_fuel_approvals.php" title="History" class="tip-bottom"><i class="icon-share"></i> My approval(s) </a></h5>
         </div>
         <div class="widget-content" style="background-color: #fff;">
         <div class="row-fluid">
             <div class="span12"> 
              
             <img src="../../img/logsbig.png" width="100%" height="30%">
             
        <center> <p style="color:#000; font-weight:bold;font-size:10px; background-color:#fff; font-family:lcd;margin-top: 0px;">
         <b>FUEL AND LUBRICANTS REQUSITIONS</b> </p> </center> 
        
              
            
              
             <div class="table-responsive mailbox-messages"> 
             <p></p>
                  <!-- Info boxes --> 
           
        
            
              <table id="example3" class="table table-table-bordered" style="font-size:9px; width:100%;">
         <thead>
         <tr>     
					 <th style="background-color:#ecf0f5; font-size:10px;">DATE</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;">SERIAL / NO.</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">REQUESTED BY</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">AUTHORISED BY</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">COMMENT</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">APPROVED BY</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">DATE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">ACTION</th> 
           </tr>
        </thead>
        <tfoot>
          <tr> 
					 <th style="background-color:#ecf0f5; font-size:10px;">DATE</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;">SERIAL / NO.</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">REQUESTED BY</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">AUTHORISED BY</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">COMMENT</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">APPROVED BY</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">DATE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">ACTION</th>  
        </tr>        
        </tfoot> 
        <tbody>  
<?php 
include_once("../connect/configftl.php"); 

$result = mysqli_query($mysqli, "SELECT * FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND FORWARDTO = '$rm' GROUP BY SERIALNO ORDER BY DATECREATED DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['ORDERNO']."***".$res['SERIALNO'];
		echo "<tr>";  	 
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['SERIALNO']."</td>"; 
		echo "<td>".$res['INITIATEDBY']."</td>"; 
		echo "<td>".$res['ARNAME']."</td>"; 
		echo "<td>".$res['ARCOMMENT']."</td>";   
		echo "<td>".$res['APPROVEDBYNAME']."</td>";  
		echo "<td>".$res['APPROVALDATE']."</td>";  
		echo "<td><a href=\"print_fuelrequisition.php?SERIALNO=$res[SERIALNO]\">Print</a></td>";
	}
	   
    ?>
	</tbody>
  </table> 
  
        
             </div>  </div>
            </div>
           </div> 
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
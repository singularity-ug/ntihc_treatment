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
<link rel="stylesheet" href="../../js/googleapis.js" type='text/css'>

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
	  "iDisplayLength": 20,
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
     $('#example4').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

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
				font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             } 
            </style> 

</head>
 
 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class=""></i>
        <a href="../fuel_master.php" title="Home" class="tip-bottom"><i class="icon-home"></i> Home</a>&nbsp;
        
        </span>
          <h5>    </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
             
        <table id="example3" class="table table-table-bordered" style="font-size:9px; width:100%;">
         <thead>
         <tr>   
                     <th style="background-color:#ecf0f5; font-size:10px; ">S/NO.</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">DATE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">INVOICE NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px; ">REG NO.</th>
                      <th style="background-color:#ecf0f5; font-size:10px;">RUNNING MILEAGE</th>
					 <th style="background-color:#ecf0f5; font-size:10px; ">DRIVER</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">PROJECT</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">DEPARTMENT</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">PURPOSE</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; ">CARD</th>
                     <th style="background-color:#ecf0f5; font-size:10px; ">PRODUCT</th>
					 <th style="background-color:#ecf0f5; font-size:10px; ">LITRES</th> 
					 <th style="background-color:#ecf0f5; font-size:10px; ">RATE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">AMOUNT</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">CREDIT</th>
					 <th style="background-color:#ecf0f5; font-size:10px; ">RUNNING BALANCE</th>   
        </tr>
        </thead> <tfoot> <tbody> 
<?php
require('connect_conn.php'); 

$sql = "SELECT * FROM fuellogs WHERE FUELISSUANCESTATUS = 'ISSUED' ORDER BY FUELISSUANCEDATE DESC";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['Fueloaded']))-intval($row['TOTALAMOUNT']);
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
       '<td>'.$row['FUELISSUANCEDATE'].'</td>'.
	   '<td>'.$row['INVOICENO'].'</td>'.
       '<td>'.$row['REGISTRATIONNO'].'</td>'.
	   '<td>'.$row['RUNNINGMILEAGE'].'</td>'.
       '<td>'.$row['DRIVER'].'</td>'. 
	   '<td>'.$row['DIVISION'].'</td>'.
	   '<td>'.$row['DIRECTORATE'].'</td>'. 
	   '<td>'.$row['PURPOSE'].'</td>'.
	   '<td>'.$row['Cardcode'].'</td>'.
	   '<td>'.$row['PRODUCT'].'</td>'. 
	   '<td>'.$row['LITRE'].'</td>'.  
	   '<td>'.$row['UNITPRICE'].'</td>'.
       '<td>'.$row['TOTALAMOUNT'].'</td>'.
       '<td>'.$row['Fueloaded'].'</td>'.
       '<td>'.$bal.'</td>'.
      
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
  
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
               <th style="width:50%; text-align:left; border:0px;background-color:#fff; text-align:right; font-size:12px;">  </th>
               <th style="width:20%; text-align:left; border:1px solid;background-color:#fff; text-align:right; font-size:12px;">Closing balance </th>
               <td style="width:30%;border:1px solid;background-color:#fff; text-align:right;font-size:16px;"> <?php echo"".$bal; ?> </td>  
			</tr>             
            </table>         
                 
            
     
            </div>
             </div>  </div>
            </div>
           </div> 
         </div>
        
       
<!--End-Chart-box--> 

    

<!--Footer-part-->
<div class="row-fluid"> 
</div>
<!--end-Footer-part-->
<!--<script src="../js/jquery.min.js"></script>-->
<script src="../../js/jquery.ui.custom.js"></script> 
<script src="../../js/bootstrap.min.js"></script> 
<script src="../../js/jquery.validate.js"></script>
<script src="../../js/matrix.js"></script>  
<script src="../../js/jquery.wizard.js"></script> 
<script src="../../js/matrix.wizard.js"></script> 
</body>
</html>

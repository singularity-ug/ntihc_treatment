  
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
     $('#exvehc').DataTable( {
	  "iDisplayLength": 20,
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
     $('#reconcilx').DataTable( {
	  "iDisplayLength": 10,
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
     $('#exapurpose').DataTable( {
	  "iDisplayLength": 12,
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
   border-top: 1px solid #000;
line-height: 1.0;
padding: 3px;
vertical-align: center;
background-color: #fff;
color: #000;
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
             	 color:#000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
</head>
  
 
 <div class="col-sm-1">
 </div>
  
          
      
      <div class="col-sm-10">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class=" "> 
        <a href="../dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> &nbsp; 
         </i></span>
          <h5>Verified fuel loadings due for reconciliation</h5> 
        </div>
        <div class="widget-content">
      
       
                
         <div class="table-responsive mailbox-messages">
         
                <div class=""  id="getreconcile" >  </div>
                <script> 
          function getreconcile(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_reconcile_dom.php?q='+odno,
                       success : function(data){
                                $('#getreconcile').html(data);
								$("#oexplosion").modal("show");
                                 }
               });
               } 
                </script>  
         
          <br>  
       <table id="exapurpose" class="table table-tabled table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">S/NO</th> 
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">DATE LOADED</th> 
					 <th style="background-color:#ecf0f5; color:#000;font-size:10px;">CARD NAME</th>  
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">FUEL LOADED</th> 
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">RECONCILIATION</th> 
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">ACTION</th>   
           </tr>
           </thead>
           <tfoot>
           <tr>
		             <th style="background-color:#ecf0f5; color:#000;font-size:10px;">S/NO</th> 
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">DATE LOADED</th> 
					 <th style="background-color:#ecf0f5; color:#000;font-size:10px;">CARD NAME</th>  
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">FUEL LOADED</th> 
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">RECONCILIATION</th> 
                     <th style="background-color:#ecf0f5; color:#000;font-size:10px;">ACTION</th>   
        </tr>
        </tfoot> 
        <tbody>  
           
<?php 
include_once("../connect/configftl.php");  
$result = mysqli_query($mysqli, "select * from fuellogs where Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Pending' 
															  AND Recstatus='Pending' order by FUELISSUANCEDATE asc");
  
	while($res = mysqli_fetch_array($result)) {
	$dsezy = $res['Fiscalmonth']."***".$res['id'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['FUELISSUANCEDATE']."</td>"; 
		echo "<td>".$res['Fuelcardname']."</td>";  
		echo "<td>".$res['Fueloaded']."</td>"; 
		echo "<td>".$res['Reconciliation']."</td>";
		 echo '<td>  
		        <a id="11901__'.$dsezy.'" href="javascript:void(0)" onclick="getreconcile(this.id)" data-toggle="tooltip" title="Click" 
				style="color: #fff;border-radius: 3px; height: 17px;" <button class="btn btn-danger"> Reconcile </span></a>    
               </td>'; 	  	
	}
	   
    ?>
	</tbody>
  </table>  
         
         
         </form> 
         </div></div>
    
       <!--Chart-box-->  
 <div class="col-sm-1">
 </div>  
      </div>  
   
     
             
    
<!--End model--->       

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
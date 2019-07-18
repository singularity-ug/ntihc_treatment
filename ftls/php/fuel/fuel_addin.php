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
  <script src="../../../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
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
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
 
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
  
                
 <div class="col-sm-1">
       </div>
        <div class="col-sm-10">
           
<?php
  $id ='';  
  $FUELISSUANCEDATE = ''; 
  $Fuelcardname  = '';
  $ISSUEDBY = '';
  $ISSUERTITLE = '';   
  $ISSUERACCOUNT=''; 
  $FISCALYEAR = '';   
  $Fiscalmonth='';  
  	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM getentrant ORDER BY id DESC LIMIT 1";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $FUELISSUANCEDATE = $row['FUELISSUANCEDATE'];
     $Fuelcardname = $row['Fuelcardname'];  
	 $ISSUEDBY=$row['ISSUEDBY'];  
     $ISSUERTITLE   = $row['ISSUERTITLE']; 
     $ISSUERACCOUNT=$row['ISSUERACCOUNT']; 
	 $FISCALYEAR=$row['FISCALYEAR']; 
	 $Fiscalmonth=$row['Fiscalmonth']; 
	 $id=$row['id'];     
      } 
  ?>
    

 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class=""></i>
        <a href="../fuel_datacenter.php" title="Home" class="tip-bottom"><i class="icon-home"></i> Home</a>&nbsp;
        
        </span>
          <h5>  
           <a href="fuel_myentry.php" class="">My entries</a> 
          </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
              
                
             <div class=""  id="getdetailsmobile" >  </div>
                <script> 
          function getdetailsmobile(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'fuel_issue.php?q='+odno,
                       success : function(data){
                                $('#getdetailsmobile').html(data);
								$("#outxxexxxx").modal("show");
                                 }
               });
               } 
                </script> 
                
                
                 <img src="../../img/logsbig.png" width="100%" height="30%"> 
             <div class="table-responsive mailbox-messages"> 
             <p></p>
                  <!-- Info boxes --> 
            
            <strong style="font-size:13px;"><center> Vehicles due for re-fueling</center></strong><p></p>
            
           <center> <td style="background-color:#transparent; font-size:10px; color:#bfcfe4;"> 
           <a href="../fuel_datacenter.php"class="btn btn-danger" <i class="icon-home"></i>Switch card</a>  
                    </td> </center>
   
              <table id="example3" class="table table-table-bordered" style="font-size:9px; width:100%;">
         <thead>
         <tr>   
                     <th style="background-color:#transparent; font-size:10px; ">REGN.NO</th> 
                     <th style="background-color:#transparent; font-size:10px; ">ACTION</th> 
                     <th style="background-color:#transparent; font-size:10px; ">R/NO.</th>
					 <th style="background-color:#transparent; font-size:10px; ">DATE</th>  
                     <th style="background-color:#transparent; font-size:10px; ">LITRES</th> 
                     <th style="background-color:#transparent; font-size:10px; ">DRIVER / OPERATOR</th> 
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#transparent; font-size:10px; ">REGN.NO</th> 
                     <th style="background-color:#transparent; font-size:10px; ">ACTION</th> 
                     <th style="background-color:#transparent; font-size:10px; ">R/NO.</th>
					 <th style="background-color:#transparent; font-size:10px; ">DATE</th>  
                     <th style="background-color:#transparent; font-size:10px; ">LITRES</th> 
                     <th style="background-color:#transparent; font-size:10px; ">DRIVER / OPERATOR</th> 
                    
        </tr>
        </tfoot> 
        <tbody>  
<?php 
include_once("../connect/configftl.php"); 

$result = mysqli_query($mysqli, "SELECT * FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                           AND  FUELISSUANCESTATUS = 'PENDING' ORDER BY DATECREATED DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['DATECREATED']."***".$res['id'];
		echo "<tr>"; 
		echo "<td>".$res['REGISTRATIONNO']."</td>";  
		echo '<td> 
			    <a id="1__'.$dtsz.'" href="javascript:void(0)"  onclick="getdetailsmobile(this.id)" data-toggle="tooltip" title="Issue fuel"
              style="color: #fff;border-radius: 4px; height: 20px;" <button class="btn btn-danger"> Issue fuel</span></a>  
               </td>';  	
		 echo "<td>".$res['id']."</td>"; 
		 echo "<td>".$res['DATECREATED']."</td>";  
         echo "<td>".$res['LITRE']."</td>";  
		 echo "<td>".$res['DRIVER']."</td>";  
		
	}
	   
    ?>
	</tbody>
  </table> 
  
    
     
           <center> <td style="background-color:#transparent; font-size:10px; color:#bfcfe4;">Note: 
           <b style="color:#bfcfe4;">All fuel issued by by entry episode</b>:&nbsp;0<?php  echo $id; ?> will be accounted on 
   &nbsp;<b style="color:#bfcfe4;">Card name</b>:&nbsp;<?php  echo $Fuelcardname; ?> 
   &nbsp;<b style="color:#bfcfe4;">Entry date</b>:&nbsp;<?php  echo $FUELISSUANCEDATE; ?>
   &nbsp;<b style="color:#bfcfe4;">Fiscal month</b>:&nbsp;<?php  echo $Fiscalmonth; ?> <?php  echo $FISCALYEAR; ?>
   &nbsp;<b style="color:#bfcfe4;">Entrant</b>:&nbsp;<?php  echo $ISSUEDBY; ?>  
    </td> </center>
             </div>  </div>
            </div>
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


<!DOCTYPE html>
<html lang="en">
<head>
<title>ftlm</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" /> 
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
   
     <div class="col-sm-1">
       </div>
        <div class="col-sm-10"> 
   
      
         <center>  
         
          <td>
   <div class="btn-group">
            <button class="btn btn-danger">Daily consumption</button>
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu"> 
              <li class="divider"></li> 
            </ul>
          </div></td>
          
           <td>
   <div class="btn-group">
            <button class="btn btn-danger">Payments</button>
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="rpt_loadings_invoices.php?d1=0&d2=0" data-toggle="modal">Loadings vs invoices</a></li>
              <li><a href="get_fuel_payments.php?d1=0&d2=0">Fuel analysis sheet</a></li> 
              <li class="divider"></li> 
            </ul>
          </div></td>
          
          
           <td>
   <div class="btn-group">
            <button class="btn btn-danger">Fuel trends</button>
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu"> 
              <li class="divider"></li> 
			   <li><a href="rpt_divisional.php?d1=0&d2=0">Fuel consumption per division</a></li> 
			   <li><a href="rpt_breakdown.php?d1=0&d2=0">Fuel breakdown report</a></li> 
            </ul>
          </div></td>
            
   <td>
   <div class="btn-group">
            <button class="btn btn-danger">Other fuel reports</button>
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
            <ul class="dropdown-menu"> 
              <li class="divider"></li> 
            </ul>
          </div></td>
            
     </center>
     
      
  
  
       
      <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size: 12px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
  
       
     
     
       <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stss ="";
if( $result = $connect->query("SELECT Fiscalpaymentmonth FROM fuellogs GROUP BY Fiscalpaymentmonth DESC"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Fiscalpaymentmonth'] ." </option>";   }
  }
$connect->close();
?> 
                  <!-- Info boxes --> 
    <br>
   <form action="fuel_reports.php" method="get">
 <center><strong>
From : <input type="date" style="width: 170px; padding:0px;" name="d1" class="tcal" value="" /> 


TO: <input type="date" style="width: 170px; padding:0px;" name="d2" class="tcal" value="" /> 

 <button class="btn btn-info" style="width: 123px; height:20px; margin-top:-8px;margin-left:8px;" type="submit">
 <i class="icon icon-search icon-large"></i> Search</button>
 </strong></center>
 
 </form>
 <div class="content" id="content">
 <div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">  
<img src="../../img/logsbig.png" width="100%" height="30%">
 Summary of daily fuel consumption from&nbsp;<?php echo $_GET['d1'] ?> to&nbsp;<?php echo $_GET['d2'] ?>  
 
<div class="panel-body">
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
			<th> Date</th>  
			<th style="text-align:center;"> Central& Nakawa </th>
            <th style="text-align:center;"> Lubaga & Kawempe </th>
            <th style="text-align:center;"> Makindye </th>
			<th style="text-align:center;"> City Hall</th>
            <th style="text-align:center;"> Eng Kawempe </th> 
            <th style="text-align:center;"> Eng Lubaga </th>
			<th style="text-align:center;"> Eng Nakawa </th>
            <th style="text-align:center;"> Eng Central</th>
			<th style="text-align:center;"> Eng Makindye </th>
            <th style="text-align:center;"> Emergency card </th>
            <th style="text-align:center;"> Service card</th>  
		</tr>
	 </thead>
	<tbody> 
			<?php
				include('connectproc.php');
				$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$result = $db->prepare("SELECT LoadInvoicedate,  
				                                                sum( if( Cardcode = 'CN', TOTALAMOUNT, 0 ) ) AS CN,  
                                                                sum( if( Cardcode = 'LK', TOTALAMOUNT, 0 ) ) AS LK, 
																sum( if( Cardcode = 'MA', TOTALAMOUNT, 0 ) ) AS MA,  
                                                                sum( if( Cardcode = 'CH', TOTALAMOUNT, 0 ) ) AS CH, 
																sum( if( Cardcode = 'EK', TOTALAMOUNT, 0 ) ) AS EK,  
                                                                sum( if( Cardcode = 'EL', TOTALAMOUNT, 0 ) ) AS EL, 
																sum( if( Cardcode = 'EN', TOTALAMOUNT, 0 ) ) AS EN,  
                                                                sum( if( Cardcode = 'EC', TOTALAMOUNT, 0 ) ) AS EC, 
                                                                sum( if( Cardcode = 'EM', TOTALAMOUNT, 0 ) ) AS EM, 
																sum( if( Cardcode = 'EMC', TOTALAMOUNT, 0 ) ) AS EMC, 
                                                                sum( if( Cardcode = 'SC', TOTALAMOUNT, 0 ) ) AS SC  
				                                                FROM fuellogs WHERE  APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND  FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :a AND :b GROUP by LoadInvoicedate DESC ");
				$result->bindParam(':a', $d1);
				$result->bindParam(':b', $d2);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			 
			<td><?php echo $row['LoadInvoicedate']; ?></td>
             
			<td style="text-align:right;"><?php
			$dsdsd=$row['CN'];
			echo formatMoney($dsdsd, true);
			?></td>
			
            <td style="text-align:right;"><?php
			$dsdsd=$row['LK'];
			echo formatMoney($dsdsd, true);
			?></td>
			
            <td style="text-align:right;"><?php
			$dsdsd=$row['MA'];
			echo formatMoney($dsdsd, true);
			?></td>
			
            <td style="text-align:right;"><?php
			$dsdsd=$row['CH'];
			echo formatMoney($dsdsd, true);
			?></td>
			
              
			<td style="text-align:right;"><?php
			$dsdsd=$row['EK'];
			echo formatMoney($dsdsd, true);
			?></td>
			
            <td style="text-align:right;"><?php
			$dsdsd=$row['EL'];
			echo formatMoney($dsdsd, true);
			?></td>
			
              
			<td style="text-align:right;"><?php
			$dsdsd=$row['EN'];
			echo formatMoney($dsdsd, true);
			?></td>
            
            <td style="text-align:right;"><?php
			$dsdsd=$row['EC'];
			echo formatMoney($dsdsd, true);
			?></td>
            
            <td style="text-align:right;"><?php
			$dsdsd=$row['EM'];
			echo formatMoney($dsdsd, true);
			?></td>
            
            <td style="text-align:right;"><?php
			$dsdsd=$row['EMC'];
			echo formatMoney($dsdsd, true);
			?></td>
            
            <td style="text-align:right;"><?php
			$dsdsd=$row['SC'];
			echo formatMoney($dsdsd, true);
			?></td>
            
			</tr>
			<?php
				}
			?>
            
            </tbody>
	<thead>
		<tr>
			<th colspan="13" style="border-top:1px solid #999999"> . </th> 
            
         </tr>   
            
		
	</tbody>
	<thead>
		<tr>
			<th colspan="1" style="border-top:1px solid #999999"> Total consumption: </th>
			<th colspan="1" style="border-top:1px solid #999999;text-align:right;"> 
			<?php
				function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.0f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$results = $db->prepare("SELECT sum(TOTALAMOUNT) 
				                                              FROM fuellogs WHERE Cardcode = 'CN'
															    AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND  FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :a AND :b"); 
															  
				$results->bindParam(':a', $d1);
				$results->bindParam(':b', $d2);
				$results->execute();
				for($i=0; $rows = $results->fetch(); $i++){
				$dsdsd=$rows['sum(TOTALAMOUNT)'];
				echo formatMoney($dsdsd, true);
				}
				?>
			</th>
            
            	<th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'LK' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND  FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'MA'  
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND  FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'CH' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND  FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d");  
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'EK' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'EL' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'EN' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'EC' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'EM' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'EMC' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'SC' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND FUELISSUANCESTATUS = 'ISSUED'  
															    AND LoadInvoicedate BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
               
		</tr>
	</thead>
</table>
    
 <div class="pull-right" style="margin-right:100px;">
		<a href="javascript:Clickheretoprint()" style="font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
		</div>	
           
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
 
          
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletesales.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>        

          
</body>
</html> 
          
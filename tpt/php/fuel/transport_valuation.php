 
  
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
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
   
  
    </head>  
  
        <center>    
   <td>
   <a href="cordination_reports.php?d1=0&d2=0" class="btn btn-danger" style="border-radius:0px;">Daily report</a>  &nbsp;
   <a href="cordination_monthly.php?d1=0&d2=0" class="btn btn-success" style="border-radius:0px;">Monthly report</a> &nbsp;
   <a href="transport_valuation.php?d1=0&d2=0" class="btn btn-primary" style="border-radius:0px;">Transport valuation</a> &nbsp; 
    </td> 
          </div></td>
           
   
     </center>
           
   
     </center>
     
     
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
$connect = new mysqli("localhost", "root", "", "fleet");
$stssl ="";
if( $result = $connect->query("SELECT * FROM panel WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?>  
  
    </head>  
 <section class="invoice">
      <!-- title row -->
      <div class="row">
       
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
  
       
       <div class="col-sm-1">
       </div>
        <div class="col-sm-10"> 
   
     
     
       <?php
$connect = new mysqli("localhost", "root", "", "fleet");
$stss ="";
if( $result = $connect->query("SELECT Fiscalpaymentmonth FROM fuellogs GROUP BY Fiscalpaymentmonth DESC"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Fiscalpaymentmonth'] ." </option>";   }
  }
$connect->close();
?> 
                  <!-- Info boxes --> 
    <br>
   <form action="transport_valuation.php" method="get">
<center><strong>
From : <input type="date" style="width: 170px; padding:0px;" name="d1" class="tcal" value="" /> 


TO: <input type="date" style="width: 170px; padding:0px;" name="d2" class="tcal" value="" /> 

 <button class="btn btn-info" style="width: 123px; height:20px; margin-top:-8px;margin-left:8px;" type="submit">
 <i class="icon icon-search icon-large"></i> Search</button>
 </strong></center>
 </form>
 <div class="content" id="content">
 <div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">  
<img src="../../img/logsbig3.png" width="100%" height="30%">
 Daily Transport Valuation Report from&nbsp;<?php echo $_GET['d1'] ?>&nbsp;to&nbsp;<?php echo $_GET['d2'] ?>   
  
 
<div class="panel-body">
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
			<th> Date</th>   
            <th style="text-align:center;"> Vehicle No. </th>
            <th style="text-align:center;"> Vehicle type </th>
			<th style="text-align:center;"> Driver name</th>  
			<th style="text-align:center;"> Contact </th>
            <th style="text-align:center;"> Activity </th>
            <th style="text-align:center;"> Departure </th>
			<th style="text-align:center;"> Destination</th>
			
            <th style="text-align:center;"> Consumption rate / km</th>  
			<th style="text-align:center;"> Previoius fuel rate / ltr </th>
            <th style="text-align:center;"> Mileage in </th>
            <th style="text-align:center;"> Mileage out </th>
			<th style="text-align:center;"> Distance covered</th> 
            <th style="text-align:center;"> Travel cost</th> 
		</tr>
	 </thead>
	<tbody> 
			<?php
				include('connectproc.php');
				$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$result = $db->prepare("SELECT *,mileageout-mileagein as dist, (mileageout-mileagein) * Costperlitre as rvcost  
				FROM ftlvehiclebooking WHERE Servicerecieved='Yes' AND Allocationdate BETWEEN :a AND :b GROUP by Allocationdate DESC ");
				$result->bindParam(':a', $d1);
				$result->bindParam(':b', $d2);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			 
			<td><?php echo $row['Allocationdate']; ?></td>  
			<td><?php echo $row['Vehicleallocated']; ?></td>
			<td><?php echo $row['Vehicletype']; ?></td>
			<td><?php echo $row['Drivername']; ?></td>
			<td><?php echo $row['Mobilecontact']; ?></td> 
            <td><?php echo $row['Activity']; ?></td> 
			<td><?php echo $row['journeypoint_start']; ?> </td> 
			<td><?php echo $row['Destination_to']; ?> </td>
			<td style="text-align:center;"><?php echo $row['Previousconsumptionrateperliter']; ?></td>
			
			<td><?php
			$Costperlitre=$row['Costperlitre'];
			echo formatMoney($Costperlitre, true);
			?></td>
			
			 
			<td><?php echo $row['mileagein']; ?></td>  
			<td><?php echo $row['mileageout']; ?></td>
			<td><?php echo $row['dist']; ?>&nbsp;km</td>
			
			 
			<td><?php
			$rvcost=$row['rvcost'];
			echo formatMoney($rvcost, true);
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
			<th colspan="13" style="border-top:1px solid #999999"> Total: </th>
			<th colspan="1" style="border-top:1px solid #999999;text-align:center;"> 
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
				$results = $db->prepare("SELECT sum(mileageout-mileagein) * Costperlitre as rvcost   
				                                               FROM ftlvehiclebooking WHERE Servicerecieved='Yes'  
															   AND Allocationdate BETWEEN :a AND :b"); 
				$results->bindParam(':a', $d1);
				$results->bindParam(':b', $d2);
				$results->execute();
				for($i=0; $rows = $results->fetch(); $i++){
				$dsdsd=$rows['rvcost'];
				echo formatMoney($dsdsd, true);
				}
				?>
			</th>
           
                    
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
          
             
             
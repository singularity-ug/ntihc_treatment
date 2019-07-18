 
  
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
   <a href="transport_template.php?d1=0&d2=0" class="btn btn-danger" style="border-radius:0px;">Template</a> 
    </td> 
          </div></td>
           
   
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
$connect = new mysqli("localhost", "root", "toor2", "fleet");
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
  
       
           
<div class="col-sm-12">
<p style="font-size:20px; text-align:center;"> Transport reservation | travel history</p>
 


<input type="text"   name="filter" value="" id="filter" placeholder="Search data..." autocomplete="off" />
 

<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th> S/no. </th> <th> Created date </th>
			<th> Applicant </th> 
			<th> Activity </th>
			<th> Psg </th> 
			<th> Allocated </th>
			<th> Status </th> 
			<th> journey point[From] </th>
            <th> Destination history</th>
			
			<th> Driver name </th> 
			<th> Contact(s) </th> 
			<th> Vehicle allocated </th> 
			<th> Type </th>
			<th> consumption rate per ltr </th> 
			<th> Recent fuel cost per ltr </th>
            <th> mileage in </th>
			<th> mileage out </th>
			<th> Distance covered </th> 
			<th> Travel cost </th> 
			<th> Time in </th> 
			<th> Time out </th>
			<th> Parking </th> 
			<th> Action date </th> 
			<th> View </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
			function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
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
				include('../tweak/connectproc.php');
				$result = $db->prepare("SELECT *,mileageout-mileagein as dist, (mileageout-mileagein) * Costperlitre as rvcost  FROM ftlvehiclebooking WHERE Servicerecieved='Yes' ORDER BY Allocationdate ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				$dist=$row['dist'];
				$mileagein=$row['mileagein'];
				$mileageout=$row['mileageout'];
				if ($mileageout < 30) {
				echo '<tr class="alert alert-warning record" style="color: #fff; background:#d70000; class="progress progress-striped progress-success active">';
				}
				else {
				echo '<tr class="record">';
				}
			?>
		  
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['Timestamp']; ?></td>
			<td><?php echo $row['applicantname']; ?></td>
			<td><?php echo $row['Activity']; ?></td> 
			<td style="text-align:center;"><?php echo $row['Passengers']; ?></td>
			<td><?php echo $row['Allocationdate']; ?></td> 
			<td><?php echo $row['Allocationstatus']; ?></td>
			 
			<td><?php echo $row['journeypoint_start']; ?><br>
			<b style="color:#d70000;"><?php echo $row['Reservationdate_from']; ?> 
			&nbsp;|&nbsp;
			<b style="color:blue;"><?php echo $row['Departuretime']; ?></b></td>
			
			<td><?php echo $row['Destination_to']; ?> <br>
			<b style="color:#d70000;"><?php echo $row['Reservationdate_to']; ?>  
			&nbsp;|&nbsp;
			<b style="color:blue;"><?php echo $row['Pickuptime_expected']; ?></b></td>
			
			<td><?php echo $row['Drivername']; ?></td>
			<td><?php echo $row['Mobilecontact']; ?>&nbsp;|&nbsp;<?php echo $row['Workcontact']; ?></td>
			
			<td><?php echo $row['Vehicleallocated']; ?></td>
			<td><?php echo $row['Vehicletype']; ?></td>
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
			
			<td><?php echo $row['timein']; ?></td>  
			<td><?php echo $row['timeout']; ?></td>
			
            <td><?php echo $row['Parking']; ?></td>
		    <td><?php echo $row['Servicedate']; ?></td>
             
            <td><a rel="facebox" title="Click to update card info" href="tweak/main/editproduct.php?id=<?php echo $row['id']; ?>">
           <center> <button class="btn btn-warning"><i class="icon-edit"></i> </button> </center></a> 
           
			 </td>
			</tr>
			<?php
				}
			?>
		 
		
	</tbody>
</table>

              </div>
                                </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>

<style>
#dialog-window {
  height: 800px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 800px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>


              </div>

           
    <link href="../css/bootstrap.css" rel="stylesheet">

    <link rel="../stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
    <link rel="../stylesheet" href="css/font-awesome.min.css">
    
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">

<link href="tweak/style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="../tweak/main/jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="../tweak/main/js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="../tweak/main/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../tweak/main/lib/jquery.js" type="text/javascript"></script>
<script src="../tweak/main/src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>     
             </div>  </div>
            </div>
           </div> 
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


<!--Footer-part-->
<div class="row-fluid"> 
</div>
<!--End-Footer-part-->
<script src="../../js/jquery.min.js"></script> 
<script src="../../js/jquery.ui.custom.js"></script> 
<script src="../../js/bootstrap.min.js"></script> 
<script src="../../js/jquery.gritter.min.js"></script> 
<script src="../../js/jquery.peity.min.js"></script> 
<script src="../../js/matrix.js"></script> 
<script src="../../js/matrix.interface.js"></script> 
<script src="../../js/matrix.popover.js"></script>
 

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../plugins/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../plugins/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../../plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../plugins/flot/jquery.flot.categories.min.js"></script>
</body>
</html>
          
</body>
</html> 
          
             
             
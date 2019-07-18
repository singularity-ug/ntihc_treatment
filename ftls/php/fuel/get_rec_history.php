  
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
<link rel="stylesheet" href="../../js/googleapis.js" type='text/css'>
    
<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 
 
<link rel="stylesheet" href="../css/bootstrap-wysihtml5.css" /> 

 <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

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
        <a href="get_reconcile_pen.php" title="Go to Home" class="tip-bottom"><i class="icon-fast-backward"></i> Back</a>
         </i></span> 
          <h5>Fuel reconciliation history</h5> 
        </div>
        <div class="widget-content">
      


        <div id="dialog-window">
  <div id="scrollable-content">
   <ul>
<div class=""  id=" " style="margin-left:-25px;">
<input type="text" style="padding:13px;" name="filter" value="" id="filter" placeholder="Search..." autocomplete="off" /> 
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align:left; font-weight:normal;">
	<thead>
		<tr>
     <th style="border:2px solid #ecf0f5;">S/NO.</th>
   <th style="border:2px solid #ecf0f5;">Request date</th> 
   <th style="border:2px solid #ecf0f5;">Invoice date</th>
   <th style="border:2px solid #ecf0f5;">Invoice No.</th> 
   <th style="border:2px solid #ecf0f5;">Card name</th>
   <th style="border:2px solid #ecf0f5;">Amount loaded</th> 
   <th style="border:2px solid #ecf0f5;">Payment period</th>  
   <th style="border:2px solid #ecf0f5;">Edit</th>  
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
				$result = $db->prepare("SELECT *,Fueloaded from fuellogs  where Loadreview ='Verified'  
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' order by FUELISSUANCEDATE DESC");
				
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){ 
				$Fueloaded=$row['Fueloaded'];
				if ($Fueloaded < 3000000) {
				echo '<tr class="alert alert-warning record" style="color: #fff; background:#fff; class="progress progress-striped progress-success active">';
				}
				else {
				echo '<tr class="record">';
				}
			?>
		  
				<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['FUELISSUANCEDATE']; ?></td> 
			 
			<td><?php echo $row['LoadInvoicedate']; ?></td> 
			 
			<td><?php echo $row['Loadinvoiceno']; ?></td> 
			   
            <td><?php echo $row['Fuelcardname']; ?></td> 
			  
                
			<td>
			<?php
			$Fueloaded=$row['Fueloaded'];
			echo formatMoney($Fueloaded, true);
			?>
			</td>
            
             <td><?php echo $row['Fiscalpaymentmonth']; ?></td> 
              <td><a rel="facebox" title="Click to update card info" href="tweak/main/editproduct.php?id=<?php echo $row['id']; ?>">
           <center> <button class="btn btn-warning"><i class="icon-edit"></i> </button> </center></a> 
           
             
			</tr>
			<?php
				}
			?>
		 
			<tr>
				<th></th>
				<th></th>
				<th></th> 
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			<tr>
				
			<tr>
				<th colspan="5"><strong style="font-size: 20px; color: #222222;">Total:</strong></th>
				<th colspan="2"><strong style="font-size: 13px; color: #222222;"> 
				<?php
				$resultas = $db->prepare("SELECT sum(Fueloaded) from fuellogs  where Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull'");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg=$rowas['sum(Fueloaded)'];
				echo formatMoney($fgfg, true);
				}
				?>
				</strong></th>
				 
					<th></th>
			</tr>
		
		
		
		
		
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
  height: 400px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 490px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>


              </div>

           
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="tweak/style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="tweak/main/jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="tweak/main/js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="tweak/main/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="tweak/main/lib/jquery.js" type="text/javascript"></script>
<script src="tweak/main/src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>     



              </div>
                                </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>

<style>
#dialog-window {
  height: 550px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 550px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>

  </div>
  </div>    
   </div>
   
 
<link href="../tweak/style.css" media="screen" rel="stylesheet" type="text/css" /> 
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
  
          
    <link href="../tweak/main/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../tweak/main/css/DT_bootstrap.css">
  
    <link rel="stylesheet" href="../tweak/main/css/font-awesome.min.css">
    
    <link href="../tweak/main/css/bootstrap-responsive.css" rel="stylesheet">       
       
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
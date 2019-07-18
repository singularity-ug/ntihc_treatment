<!DOCTYPE html>
<html>
<head>
	<!-- js -->			
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
 
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<title>
ntihc
</title>
 	 
  <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
     <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

	<!-- combosearch box-->	
	
	  <script src="vendors/jquery-1.7.2.min.js"></script>
    <script src="vendors/bootstrap.js"></script>

	
	
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->

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
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
 

  <script>
  $(document).ready(function() {
     $('#resultTable').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script> 


 <script language="javascript" type="text/javascript"> S
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	

</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>
<body> 
   <?php include('navfixed.php');?>
	
	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
             <div class="well sidebar-nav">
                 <ul class="nav nav-list">
               <li><a href="../../proc/proc_pdu_mgr.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li class="active"><a href="proc_planautomation.php"><i class="icon-shopping-cart icon-2x"></i> Plan details</a>  </li>             
			<li><a href="proc_planqtr.php"><i class="icon-list-alt icon-2x"></i> Running report</a>                                     </li>
			<li><a href="#"><i class="icon-group icon-2x"></i> 1st Qtr report</a>                                    </li>
			<li><a href="#"><i class="icon-group icon-2x"></i> 2nd Qtr report</a>  
            <li><a href="#"><i class="icon-group icon-2x"></i> 3rd Qtr report</a>                                    </li>
			<li><a href="#"><i class="icon-group icon-2x"></i> 4th Qtr report</a>  
                                              </li>
			<li><a href="payment_report.php"><i class="icon-bar-chart icon-2x"></i> Payments Report</a>                </li>
				<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="text" class="trans" name="face" value="" disabled>
			</form>
			  </div>
			</li>
				
				</ul>   	
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10"> 
    <br>
   <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 100%;  color:#000; text-align:center; font-weight:bold; background-color:#fff;">
             RUNNING PROCUREMENT PLAN DETAILS
             <span class="sr-only"> </span></div> 
            </div>
 
			 
 
	
<table class="table table-bordered" id="resultTable" data-responsive="table">
	<thead>
		<tr>
			<th> FINANCIAL.PERIOD</th>
			<th> OBJECTIVE </th>
			<th> CODE </th>
            <th> DETAILS </th>
			         <th>1ST QTR</th> 
                     <th>2ND QTR</th> 
                     <th>3RD QTR</th>
                     <th>4TH QTR</th> 
                     <th>AMOUNT</th> 
			<th> Action </th>
		</tr>
	</thead>
	<tbody>
		
			<?php 
				include('../connectproc.php');
				$result = $db->prepare("SELECT * FROM procplanning"); 
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['FINANCIALPERIOD']; ?></td>
			<td><?php echo $row['OBJECTIVE']; ?></td>
			<td><?php echo $row['CODE']; ?></td>
			<td><?php echo $row['PLANDETAILS']; ?></td>
			<td>
			<?php
			$ppp=$row['FIRSTQTR'];
			echo formatMoney($ppp, true);
			?>
			</td>
            
           <td>
			<?php
			$ppp=$row['SECONDQTR'];
			echo formatMoney($ppp, true);
			?>
			</td>  
            
			<td>
			<?php
			$dfdf=$row['THIRDQTR'];
			echo formatMoney($dfdf, true);
			?>
			</td>
			<td>
			<?php
			$profit=$row['FOURTHQTR'];
			echo formatMoney($profit, true);
			?>
			</td>
            
            <td>
			<?php
			$profit=$row['BUDGETAMOUNT'];
			echo formatMoney($profit, true);
			?>
			</td>
			<td width="90"> <button class="btn btn-mini btn-warning"><i class="icon icon-remove"></i> </button></a></td>
			</tr>
			<?php
				}
			?>
			<tr>
			<th> </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>  
			         <th>1ST QTR</th> 
                     <th>2ND QTR</th> 
                     <th>3RD QTR</th>
                     <th>4TH QTR</th> 
                     <th>AMOUNT</th>  
			<th>  </th>
		</tr>
			<tr>
				<th colspan="4"><strong style="font-size: 12px; color: #222222;">Total:</strong></th>
				<td colspan="1"><strong style="font-size: 12px; color: #222222;">
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
				$resultas = $db->prepare("SELECT SUM(FIRSTQTR) FROM procplanning ");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg=$rowas['SUM(FIRSTQTR)'];
				echo formatMoney($fgfg, true);
				}
				?>
				</strong></td>
				<td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT SUM(SECONDQTR) FROM procplanning");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['SUM(SECONDQTR)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>
                
                <td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT SUM(THIRDQTR) FROM procplanning");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['SUM(THIRDQTR)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>
                
                 <td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT SUM(FOURTHQTR) FROM procplanning");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['SUM(FOURTHQTR)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>
                
                <td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT SUM(BUDGETAMOUNT) FROM procplanning");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['SUM(BUDGETAMOUNT)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>
                 
				<th></th>
			</tr>
		
	</tbody>
</table><br>
 
</body>
<?php include('footer.php');?>
</html>
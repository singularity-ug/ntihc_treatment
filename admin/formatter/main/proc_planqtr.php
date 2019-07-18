<!DOCTYPE html>
<html>
<head> 
<title>
ntihc
</title>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 13px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<?php 
include('../connectproc.php');
$result = $db->prepare("SELECT * FROM sales");  
for($i=0; $row = $result->fetch(); $i++){
$cname=$row['name'];
$invoice=$row['invoice_number'];
$date=$row['date'];
$cash=$row['due_date'];
$cashier=$row['cashier'];

$pt=$row['type'];
$am=$row['amount'];
if($pt=='cash'){
$cash=$row['due_date'];
$amount=$cash-$am;
}
}
?>
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



 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
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
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;font-family:lcd; font-weight:bold;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul>           
          </div><!--/.well -->
        </div><!--/span-->
		
	<div class="span10"> 
    
<div class="content" id="content"> 
	<div style="width: 100%; height: 190px;" >
	<div style="width: 100%;">
	<center> 
	 <img src="../../../assets/img/logsbig.PNG" width="100%" height="50%">
   <p style="text-align:center; font-weight:bold;">RECONCILIATION OF PROCUREMENT PLAN AGAINST EXPENDITURE</p>
	</center>
	<div>
	 
	</div>
	</div>
	<div style="width: 100%; float: left; height: 70px;">
	<table cellpadding="0" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;width : 100%;">

		<tr> 
			<td> <center> <b>FINANCIAL PERIOD</b> &nbsp;<select name="portal" id="cboOptions" onChange="showDiv('div',this)"
             style="height: 26px; background-color:#fff; spadding: 0px;">
            <option value="1">JULY 2016 TO JUNE 2017</option>
            <option value="2">JULY 2017 TO JUNE 2018</option>
          </select>  </center></td>
		</tr> 
		</tr>
	</table>
	
	</div>
	<div class="clearfix"></div>
	</div>
	<div style="width: 100%; margin-top:-70px;">
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
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
                  
			</tr>
		
	</tbody>
</table> 
	<br>
	</div>
	</div>
	</div>
	</div>
<div class="pull-right" style="margin-right:100px;">
		<a href="javascript:Clickheretoprint()" style="font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
		</div>	
</div>
</div>



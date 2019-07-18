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
  
       
       <div class="col-sm-1">
       </div>
        <div class="col-sm-10"> 
   
     
     
       <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stss ="";
if( $result = $connect->query("SELECT Fiscalpaymentmonth FROM fuellogs GROUP BY Fiscalpaymentmonth DESC"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Fiscalpaymentmonth'] ." </option>";   }
  }
$connect->close();
?> 
                  <!-- Info boxes --> 
    
   <form action="get_fuel_payments.php" method="get">
<center><strong>
From : <select style="width: 223px; padding:0px;" name="d1" class="tcal" value="" /> 
               <option></option>
               <?php   echo $stss; ?> 
              </select>

Verify: <select style="width: 223px; padding:0px;" name="d2" class="tcal" value="" />
                <option></option>
               <?php   echo $stss; ?> 
              </select>

 <button class="btn btn-info" style="width: 123px; height:21px; margin-top:0px;margin-left:8px;" type="submit">
 <i class="icon icon-search icon-large"></i> Search</button>
 </strong></center>
 </form>
 <div class="content" id="content">
 <div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">  
<img src="../../img/logsbig.png" width="100%" height="30%">
 Fuel analysis sheet for the month of&nbsp;<?php echo $_GET['d1'] ?> <input type="hidden" value="<?php echo $_GET['d2'] ?>">  
 
<div class="panel-body">
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
			<th> Date</th> 
            <th> Invoice No. </th>
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
      
		<tr>
			<th colspan="2" style="border-top:1px solid #999999">Bal b/d </th> 
            </th>
                
			 </tbody>
	<thead>
		<tr>
    
			<?php
				include('connectproc.php');
				$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$result = $db->prepare("SELECT LoadInvoicedate, Loadinvoiceno,
				                                                sum( if( Cardcode = 'CN', Fueloaded, 0 ) ) AS CN,  
                                                                sum( if( Cardcode = 'LK', Fueloaded, 0 ) ) AS LK, 
																sum( if( Cardcode = 'MA', Fueloaded, 0 ) ) AS MA,  
                                                                sum( if( Cardcode = 'CH', Fueloaded, 0 ) ) AS CH, 
																sum( if( Cardcode = 'EK', Fueloaded, 0 ) ) AS EK,  
                                                                sum( if( Cardcode = 'EL', Fueloaded, 0 ) ) AS EL, 
																sum( if( Cardcode = 'EN', Fueloaded, 0 ) ) AS EN,  
                                                                sum( if( Cardcode = 'EC', Fueloaded, 0 ) ) AS EC, 
                                                                sum( if( Cardcode = 'EM', Fueloaded, 0 ) ) AS EM, 
																sum( if( Cardcode = 'EMC', Fueloaded, 0 ) ) AS EMC, 
                                                                sum( if( Cardcode = 'SC', Fueloaded, 0 ) ) AS SC  
				                                                FROM fuellogs WHERE Loadreview ='Verified' AND Loadreview ='Verified' 
                                                                AND Reconciliation='Reconciled' 
															    AND Recstatus='Successfull' 
															    AND Fiscalpaymentmonth BETWEEN :a AND :b GROUP by LoadInvoicedate,Loadinvoiceno DESC ");
				$result->bindParam(':a', $d1);
				$result->bindParam(':b', $d2);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			 
			<td><?php echo $row['LoadInvoicedate']; ?></td>
            <td><?php echo $row['Loadinvoiceno']; ?></td>  
            
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
			<th colspan="13" style="border-top:1px solid #999999; color:#fff; background-color:#f3f3f3;"> . </th> 
            
         </tr>   
            
		
	</tbody>
	<thead>
		<tr>
			<th colspan="2" style="border-top:1px solid #999999"> Total fuel loaded: </th>
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
				$results = $db->prepare("SELECT sum(Fueloaded) 
				                                              FROM fuellogs WHERE Cardcode = 'CN' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :a AND :b"); 
				$results->bindParam(':a', $d1);
				$results->bindParam(':b', $d2);
				$results->execute();
				for($i=0; $rows = $results->fetch(); $i++){
				$dsdsd=$rows['sum(Fueloaded)'];
				echo formatMoney($dsdsd, true);
				}
				?>
			</th>
            
            	<th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'LK' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'MA' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'CH' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EK' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EL' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EN' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EM' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EMC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'SC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
              
		
	</tbody>
	<thead>
		<tr>
			<th colspan="2" style="border-top:1px solid #999999">Discount  </th> 
            
            <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'CN' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
            
            <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'LK' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'MA' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'CH' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EK' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EL' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EN' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EM' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EMC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'SC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
			 </tbody>
	<thead>
		<tr>
			<th colspan="2" style="border-top:1px solid #999999">Amount to be paid  </th> 
            
            <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'CN' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
            
            <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'LK' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'MA' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'CH' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EK' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EL' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EN' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EM' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'EMC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded - Discountallowed / 100 * Fueloaded) FROM fuellogs WHERE Cardcode = 'SC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded - Discountallowed / 100 * Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                
                </tbody>
	<thead>
		<tr>
			<th colspan="13" style="border-top:1px solid #999999; color:#fff; background-color:#f3f3f3;"> . </th> 
            
         </tr>   
            
		
	</tbody>
	<thead>
		<tr>
			<th colspan="2" style="border-top:1px solid #999999">Total fuel available  </th> 
            
            <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$results = $db->prepare("SELECT sum(Fueloaded) 
				                                              FROM fuellogs WHERE Cardcode = 'CN' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :a AND :b"); 
				$results->bindParam(':a', $d1);
				$results->bindParam(':b', $d2);
				$results->execute();
				for($i=0; $rows = $results->fetch(); $i++){
				$dsdsd=$rows['sum(Fueloaded)'];
				echo formatMoney($dsdsd, true);
				}
				?>
			</th>
            
            	<th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'LK' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'MA' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'CH' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EK' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EL' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EN' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EM' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'EMC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(Fueloaded) FROM fuellogs WHERE Cardcode = 'SC' AND Loadreview ='Verified' AND Loadreview ='Verified' 
                                                              AND Reconciliation='Reconciled' 
															  AND Recstatus='Successfull' AND Fiscalpaymentmonth BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(Fueloaded)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
              
                  </tbody>
	<thead>
		<tr>
		 
			<th style="color:#fff;"> Date</th> 
            <th style="color:#fff;"> Invoice No. </th>
			<th style="text-align:center;color:#fff;"> Central& Nakawa </th>
            <th style="text-align:center;color:#fff;"> Lubaga & Kawempe </th>
            <th style="text-align:center;color:#fff;"> Makindye </th>
			<th style="text-align:center;color:#fff;"> City Hall</th>
            <th style="text-align:center;color:#fff;"> Eng Kawempe </th> 
            <th style="text-align:center;color:#fff;"> Eng Lubaga </th>
			<th style="text-align:center;color:#fff;"> Eng Nakawa </th>
            <th style="text-align:center;color:#fff;"> Eng Central</th>
			<th style="text-align:center;color:#fff;"> Eng Makindye </th>
            <th style="text-align:center;color:#fff;"> Emergency card </th>
            <th style="text-align:center;color:#fff;"> Service card</th>  
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
															    AND Fiscalpaymentmonth BETWEEN :a AND :b GROUP by LoadInvoicedate DESC ");
				$result->bindParam(':a', $d1);
				$result->bindParam(':b', $d2);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			 
			<td><?php echo $row['LoadInvoicedate']; ?></td>
            <td> </td>  
            
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
			<th colspan="13" style="border-top:1px solid #999999; background-color:#f3f3f3; color:#f3f3f3;"> . </th> 
            
         </tr>   
            
		
	</tbody>
    <thead>
		<tr>
			   <th colspan="2" style="border-top:1px solid #999999"> Total consumption: </th>
			 
                 <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) 
				                                                FROM fuellogs WHERE Cardcode = 'CN'
															    AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND  FUELISSUANCESTATUS = 'ISSUED'  
															    AND Fiscalpaymentmonth BETWEEN :c AND :d");
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
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs WHERE Cardcode = 'LK' 
				                                                AND APPROVALSTATUS ='APPROVED' AND REVIEWFUEL = 'REVIEWED' 
			                                                    AND  FUELISSUANCESTATUS = 'ISSUED'  
															    AND Fiscalpaymentmonth BETWEEN :c AND :d"); 
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
															    AND Fiscalpaymentmonth BETWEEN :c AND :d");  
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
															    AND Fiscalpaymentmonth BETWEEN :c AND :d"); 
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
															    AND Fiscalpaymentmonth BETWEEN :c AND :d"); 
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
															    AND Fiscalpaymentmonth BETWEEN :c AND :d"); 
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
															    AND Fiscalpaymentmonth BETWEEN :c AND :d"); 
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
															    AND Fiscalpaymentmonth BETWEEN :c AND :d"); 
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
															    AND Fiscalpaymentmonth BETWEEN :c AND :d"); 
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
															    AND Fiscalpaymentmonth BETWEEN :c AND :d"); 
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                 
			 </tbody>
	<thead>
		<tr>
			<th colspan="2" style="border-top:1px solid #999999">Closing balance </th> 
            
             
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
		 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			 
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			 
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
		 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			 
		
				</th>
                
               <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			 
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
		 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			 
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			 
		
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
		 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			 
		
				</th>
                
		</tr>
	</thead>
</table>
		 
<br>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
  <th style="width:20%;border:0px;">Downloaded by</th>
  <td style="width:25%;border:0px;"><input type="numeric" name="Mobilecontact" id="Mobilecontact"  value="<?php  echo $desc; ?> " readonly="readonly"  
       style="width:100%; text-align:left;background-color:#fff; font-size:11px;height:18px;"></td> 
          
  <th style="width:10%;border:0px;">   </th>
          
  <th style="width:20%;border:0px;">Reviewd and approved by</th>                
  <td style="width:25%;border:0px;"><input type="numeric" name="Workcontact" id="Workcontact"  value=" "  
       style="width:100%; text-align:left;background-color:#fff;font-size:11px;height:18px; "></td> 
  </tr>
  <tr>
  </tbody>
  </table>   
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
  <th style="width:20%;border:0px;">Name</th>
  <td style="width:25%;border:0px;"><input type="numeric" name="Mobilecontact" id="Mobilecontact"  value="<?php  echo $nameofuser; ?> " readonly="readonly"  
       style="width:100%; text-align:left;background-color:#fff; font-size:11px;height:18px;"></td> 
          
  <th style="width:10%;border:0px;">   </th>
          
  <th style="width:20%;border:0px;">Name</th>                
  <td style="width:25%;border:0px;"><input type="numeric" name="Workcontact" id="Workcontact"  value=" "  
       style="width:100%; text-align:left;background-color:#fff;font-size:11px;height:18px; "></td> 
  </tr>
  <tr>
  </tbody>
  </table> 
  
   
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
  <th style="width:20%;border:0px;">Signature</th>
  <td style="width:25%;border:0px;"><input type="numeric" name="si" id="si"  readonly="readonly"  
       style="width:100%; text-align:left;background-color:#fff; font-size:11px;height:18px;"></td> 
          
  <th style="width:10%;border:0px;">   </th>
          
  <th style="width:20%;border:0px;">Signature</th>                
  <td style="width:25%;border:0px;"><input type="numeric" name="sig" id="sig"  readonly="readonly"   
       style="width:100%; text-align:left;background-color:#fff;font-size:11px;height:18px; "></td> 
  </tr>
  <tr>
  </tbody>
  </table> 
   
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
  <th style="width:20%;border:0px;">Date</th>
  <td style="width:25%;border:0px;"><input type="numeric" name="Mobilecontact" id="Mobilecontact"  value="<?php echo date("F j, Y"); ?>"  readonly="readonly" 
       style="width:100%; text-align:left;background-color:#fff; font-size:11px;height:18px;"></td> 
          
  <th style="width:10%;border:0px;">   </th>
          
  <th style="width:20%;border:0px;">Date</th>                
  <td style="width:25%;border:0px;"><input type="numeric" name="Workcontact" id="Workcontact"  value=" "  
       style="width:100%; text-align:left;background-color:#fff;font-size:11px;height:18px; "></td> 
  </tr>
  <tr>
  </tbody>
  </table> 
<br>
    
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
             
             
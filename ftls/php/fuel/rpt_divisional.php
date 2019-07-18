 

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
   
      
    <br>
   <form action="rpt_divisional.php" method="get">
<center><strong>
From : <input type="date" style="width: 223px; padding:0px;" name="d1" class="tcal" value="" />  

To: <input type="date" style="width: 223px; padding:0px;" name="d2" class="tcal" value="" /> 

 <button class="btn btn-info" style="width: 123px; height:21px; margin-top:0px;margin-left:8px;" type="submit">
 <i class="icon icon-search icon-large"></i> Search</button>
 </strong></center>
 </form>
 <div class="content" id="content">
 <div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">  
 <img src="../../img/logsbig.png" width="100%" height="30%">
Fuel consumption report between &nbsp;<?php echo $_GET['d1'] ?>  and&nbsp;<?php echo $_GET['d2'] ?> &nbsp;for as per division
 
<div class="panel-body">
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
			<th> Consumption period</th>  
			<th style="text-align:center;"> Headquarter </th>
            <th style="text-align:center;"> Central </th>
            <th style="text-align:center;"> Nakawa </th>
			<th style="text-align:center;"> Kawempe</th>
            <th style="text-align:center;"> Lubaga </th> 
            <th style="text-align:center;"> Makindye </th>
			<th style="text-align:center;"><b> Total</b> </th>  
		</tr>
	 </thead>
	<tbody> 
			<?php
				include('connectproc.php');
				$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$result = $db->prepare("SELECT FUELISSUANCEDATE, Fiscalmonth,discount,
				                                                sum( if( DIVISION = 'H/Q', TOTALAMOUNT, 0 ) ) AS HQ,  
                                                                sum( if( DIVISION = 'CENTRAL', TOTALAMOUNT, 0 ) ) AS CT, 
																sum( if( DIVISION = 'NAKAWA', TOTALAMOUNT, 0 ) ) AS NK,  
                                                                sum( if( DIVISION = 'KAWEMPE', TOTALAMOUNT, 0 ) ) AS KW, 
																sum( if( DIVISION = 'LUBAGA', TOTALAMOUNT, 0 ) ) AS LB,    
                                                                sum( if( DIVISION = 'MAKINDYE', TOTALAMOUNT, 0 ) ) AS MA  
				                                                FROM fuellogs WHERE FUELISSUANCESTATUS = 'ISSUED' AND 
																FUELISSUANCEDATE BETWEEN :a AND :b GROUP by Fiscalmonth DESC ");
				$result->bindParam(':a', $d1);
				$result->bindParam(':b', $d2);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			 
			<td><?php echo $row['Fiscalmonth']; ?></td> 
            
			<td style="text-align:right;"><?php
			$dsdsd=$row['HQ'];
			echo formatMoney($dsdsd, true);
			?></td>
			
            <td style="text-align:right;"><?php
			$dsdsd=$row['CT'];
			echo formatMoney($dsdsd, true);
			?></td>
			
            <td style="text-align:right;"><?php
			$dsdsd=$row['NK'];
			echo formatMoney($dsdsd, true);
			?></td>
			
            <td style="text-align:right;"><?php
			$dsdsd=$row['KW'];
			echo formatMoney($dsdsd, true);
			?></td>
			
              
			<td style="text-align:right;"><?php
			$dsdsd=$row['LB'];
			echo formatMoney($dsdsd, true);
			?></td>
			
            <td style="text-align:right;"><?php
			$dsdsd=$row['MA'];
			echo formatMoney($dsdsd, true);
			?></td>
			
              
			<td style="text-align:right;"><?php
			$dsdsd=$row['HQ'] + $row['CT']+ $row['NK'] + $row['KW'] + $row['LB'] + $row['MA'];
			echo formatMoney($dsdsd, true);
			?></td>
            
            
			</tr>
			<?php
				}
			?>
		
	</tbody>
	<thead>
		<tr>
			<th colspan="1" style="border-top:1px solid #999999"> Total consumption </th>
			<th colspan="1" style="border-top:1px solid #999999;text-align:right;"> 
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
				$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$results = $db->prepare("SELECT sum(TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'H/Q'
															  AND FUELISSUANCEDATE BETWEEN :a AND :b"); 
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
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'CENTRAL'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
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
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs 
				                                     WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'NAKAWA'
													 AND FUELISSUANCEDATE BETWEEN :c AND :d");
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
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs 
				                                     WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'KAWEMPE'
													 AND FUELISSUANCEDATE BETWEEN :c AND :d");
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
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs 
				                                     WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'LUBAGA'
													 AND FUELISSUANCEDATE BETWEEN :c AND :d");
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
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs 
				                                     WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'MAKINDYE'
													 AND FUELISSUANCEDATE BETWEEN :c AND :d");
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
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT) FROM fuellogs 
				                                     WHERE FUELISSUANCESTATUS = 'ISSUED' 
													 AND FUELISSUANCEDATE BETWEEN :c AND :d");
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
			<th colspan="1" style="border-top:1px solid #999999">Discount  </th> 
            
            <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'H/Q'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
            
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'CENTRAL'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                 <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'NAKAWA'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'KAWEMPE'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'LUBAGA'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'MAKINDYE'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
              
               
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED'  
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
			 </tbody>
	<thead>
		<tr>
			<th colspan="1" style="border-top:1px solid #999999">Amount after discount  </th> 
            
            <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT - discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'H/Q'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT - discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
            
            <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT - discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'CENTRAL'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT - discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                 <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT - discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'NAKAWA'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT - discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT - discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'KAWEMPE'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT - discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT - discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'LUBAGA'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT - discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT - discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED' AND DIVISION = 'MAKINDYE'
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT - discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
                
                
                
                
                
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(TOTALAMOUNT - discount * TOTALAMOUNT)  FROM fuellogs 
				                                              WHERE FUELISSUANCESTATUS = 'ISSUED'  
															  AND FUELISSUANCEDATE BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALAMOUNT - discount * TOTALAMOUNT)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
		</tr>
	</thead>
</table>


<br>
        <script type="text/javascript" src="../fusion/js/fusioncharts.js"></script>
        <script src="../fusion/js/fusioncharts.charts.js"></script>
        <script src="../fusion/js/fusioncharts.charts.js"></script>
        <script src="../fusion/js/themes/fusioncharts.theme.zune.js"></script>
               
  <div class="table-responsive mailbox-messages"> 
             <?php
			 
		 include("../fusion/src/fusioncharts.php");
  
$hostdb = "localhost"; 
$userdb = "root";  
$passdb = "toor2"; 
$namedb = "fleet"; 

// Establish a connection to the database
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
 
if ($dbhandle->connect_error) {
exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?> 
 

<p class="hidden" <?php echo $_GET['d1'] ?>  <?php echo $_GET['d2'] ?></p>
<?php   
 $from_date = "$d1";
 $to_date = "$d2";
  $strQuery = " SELECT FUELISSUANCEDATE, Fiscalmonth,discount,SUM(TOTALAMOUNT), DIVISION,
				                                                sum( if( DIVISION = 'H/Q', TOTALAMOUNT, 0 ) ) AS HQ,  
                                                                sum( if( DIVISION = 'CENTRAL', TOTALAMOUNT, 0 ) ) AS CT, 
																sum( if( DIVISION = 'NAKAWA', TOTALAMOUNT, 0 ) ) AS NK,  
                                                                sum( if( DIVISION = 'KAWEMPE', TOTALAMOUNT, 0 ) ) AS KW, 
																sum( if( DIVISION = 'LUBAGA', TOTALAMOUNT, 0 ) ) AS LB,    
                                                                sum( if( DIVISION = 'MAKINDYE', TOTALAMOUNT, 0 ) ) AS MA  
				                                                FROM fuellogs WHERE FUELISSUANCESTATUS = 'ISSUED' AND 
																FUELISSUANCEDATE >= '" . $from_date . "' AND FUELISSUANCEDATE <= '" . $to_date . "' 
											                    GROUP BY DIVISION ASC";
	
    // Execute the query, or else return the error message.
    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}"); 
    // If the query returns a valid response, prepare the JSON string
    if ($result) {
        // The `$arrData` array holds the chart attributes and data
        $arrData = array(
            "chart" => array(
              "caption" => "Consumption trend as by the above period ",
              "paletteColors" => "#3c8dbc",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "20",
              "canvasBorderAlpha"=> "0",
              "usePlotGradientColor"=> "0",
              "plotBorderAlpha"=> "10",
              "showXAxisLine"=> "1",
              "xAxisLineColor" => "#000",
              "showValues" => "0",
              "divlineColor" => "#999999",
              "divLineIsDashed" => "1",
              "showAlternateHGridColor" => "0"
            )
        );

        $arrData["data"] = array();

// Push the data into the array
        while($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
		
            "label" => $row["DIVISION"], 
			
            "value" => $row["SUM(TOTALAMOUNT)"]
            )
        );
        }

        /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

        $jsonEncodedData = json_encode($arrData); 
        $columnChart = new FusionCharts("column2D", "myFirstChart" , 1060, 290, "chart-1", "json", $jsonEncodedData);

        // Render the chart
        $columnChart->render();

        // Close the database connection
        $dbhandle->close();
    }

?>

    <div id="chart-1"><!-- Fusion Charts will render here--></div> 

       






    <BR>
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
             
             
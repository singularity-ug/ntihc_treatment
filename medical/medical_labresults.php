      
  Completed lab results / Treatment room orders&nbsp;<br />
<table id="example01" class="table table-stripped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
		      <th>VIST&nbsp;DATE</th> 
			  <th>CLIENT&nbsp;NAME</th> 
			  <th>NTIHC&nbsp;NO.</th> 
              <th>AGE</th>
			  <th>MEDICAL</th>
			  <th>HCG</th>
			    <th>REFERRAL</th>
				 <th>ART</th>
			  <th>LAB&nbsp;VIST</th> 
			  <th>TEST&nbsp;STATUS</th> 
			  <th>INITIATED&nbsp;BY</th> 
              <th>LAB&nbsp;TECHNICIAN</th>  
			  <th style="text-align:center;">ACTION</th>      
           </tr>
         
        </tfoot> 
        <tbody> 
         
<?php 
include_once("../updatecmgt/config.php"); 
$date = date("Y-m-d").' 00:00:00';   
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='COMPLETED' AND MEDICAL ='1' AND LABVIST ='1' 
								   AND LABRESULTREVIEW ='NOTAPPLICABLE'
                                          GROUP BY NTIHCNO ORDER BY DATECREATED ASC ");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsget = $res['DATECREATED']."***".$res['NTIHCNO']."***".$res['NTIHCNO']."***".$res['DATECREATED'];
		echo "<tr>";  
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>";  
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['AGE1']."</td>"; 
		echo "<td>".$res['MEDICAL']."</td>";  
		echo "<td>".$res['HCG']."</td>"; 
		echo "<td>".$res['REFERAL']."</td>"; 
		echo "<td>".$res['ART']."</td>"; 
		echo "<td>".$res['LABVIST']."</td>";  
		echo "<td>".$res['TESTSTATUS']."</td>";  
		echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
		echo "<td>".$res['TECHNICIANNAME']."</td>";   
		echo "<td><a href=\"client_medical_hist.php?NTIHCNO=$res[NTIHCNO]\">Results</a>&nbsp;|  
		<a href=\"client_medical_disp.php?NTIHCNO=$res[NTIHCNO]\"><b>Prescribe</b></a>  </td>"; 
	}
	   
    ?>
	</tbody>
  </table>  
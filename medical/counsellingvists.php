 
			
	    <table id="example1" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>   
                     <th>DATE</th>
		             <th>NTIHC.NO.</th>
                     <th>NAME</th>
                     <th>AGE</th>  
                     <th>ACTION</th>  
           </tr> 
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[0];
document.getElementById("myID").value=dts[1];  
document.getElementById("myAGE1").value=dts[2]; 
document.getElementById("myRSVN").value=dts[3];
document.getElementById("myAGEGP").value=dts[4]; 
document.getElementById("myDATECREATED").value=dts[5];     
}
</script>    
         
        
<?php 
include_once("../updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE  TIMESTAMP >='$date' AND  SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['RSVNID']."***".$res['AGE_GROUP']."***".$res['DATECREATED'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>"; 
		echo "<td>".$res['AGE1']."</td>"; 
		echo '<td>    
		&nbsp;&nbsp;&nbsp; 
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service" 
		<span class="glyphicon glyphicon-ok"> </span></a>  
		</td>';   	
	}
	   
    ?>
	</tbody>
  </table>  


	    <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>
                     <th style="background-color:#f39c12; color:WHITE;width:25%;">VIST.DATE</th>
					 <th style="background-color:#00a65a; color:WHITE;width:15%;">NTIHC.NO</th>
                     <th style="background-color:#dd4b39; color:WHITE;width:40%;">CLIENT.NAME</th>
                     <th style="background-color:#f39c12; color:WHITE;width:10%;">AGE</th>
					 <th style="background-color:#f39c12; color:WHITE;width:10%;">VIST</th>
                     <th style="background-color:#FFF; color:#000; width:10%;">START</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
		     <th style="background-color:#f39c12; color:WHITE;width:25%;">VIST DATE</th>
					 <th style="background-color:#00a65a; color:WHITE;width:15%;">NTIHC.NO</th>
                     <th style="background-color:#dd4b39; color:WHITE;width:40%;">CLIENT.NAME</th>
                     <th style="background-color:#f39c12; color:WHITE;width:10%;">AGE</th>
					  <th style="background-color:#f39c12; color:WHITE;width:10%;">VIST</th>
                     <th style="background-color:#FFF; color:#000; width:10%;">START</th>
        </tr>
        </tfoot>
        <tbody>

    <script>
function postclient(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[0];
document.getElementById("myID").value=dts[1];
document.getElementById("myAGE1").value=dts[2];
document.getElementById("myAGEGP").value=dts[3];
}
</script>


<?php
include_once("../updatecmgt/config.php");

 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' ORDER BY RID");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP'];
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['AGE1']."</td>";
		echo "<td>".$res['VISTTYPE']."</td>";
		echo '<td>
		&nbsp;&nbsp;&nbsp;
		<a id="23__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
		<span class="glyphicon glyphicon-cog"> </span></a>
    <a id="24__'.$dts.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="Start service"
		<span class="glyphicon glyphicon-ok"> </span></a>
		</td>';
	}

    ?>
	</tbody>
  </table>

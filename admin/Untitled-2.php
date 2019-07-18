<?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
if ($result = mysqli_query($link, "SELECT id, subject FROM usersnotebook WHERE recievedfrom ='ddddd'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 

<?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE RFPDEPARTMENT ='ADVOCACY AND RESEARCH' AND CORACTION ='PENDING'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 


 <table id="example3" class="table table-striped table-bordered" >
        <thead>
        <tr> 
                     <th>RNO.</th> 
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th> 
                     <th>SUBJECT OF PROCUREMENT </th> 
                     <th>CATEGORY</th>  
                     <th>REFERENCE NO.</th> 
                     <th>ESTIMATED COST </th> 
                     <th>ACTION </th>  
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>REQ ID</th> 
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th> 
                     <th>SUBJECT OF PROCUREMENT </th>  
                     <th>ESTIMATED COST </th> 
                     <th>CONFIRMATION </th> 
                     <th>APPROVAL</th>  
                     <th>PROC'T STATUS</th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function procar(myid2){
var dts = myid2.split("***");
document.getElementById("myCATEGORY").value=dts[1];
document.getElementById("myid").value=dts[0];
document.getElementById("myREQNSTATUS").value=dts[2];
document.getElementById("myITEM").value=dts[3];
}
</script> 
      
 <?php 
include_once("config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE RFPDEPARTMENT ='ADVOCACY AND RESEARCH' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['CATEGORY']."***".$res['PROCUREMENTSTATUS']."***".$res['ITEM'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['RFPDEPARTMENT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>"; 
		echo "<td>".$res['TOTALCOST']."</td>"; 
		echo "<td>".$res['CORACTION']."</td>"; 
	    echo "<td>".$res['AOACTION']."</td>";
		echo "<td>".$res['PROCUREMENTSTATUS']."</td>"; 			
	}
	?>
	</tbody>
  </table>  
 
 

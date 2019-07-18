 
 
  
	<form method="post" action="edit1.php">
		<table class="table table-bordered">
			<tr>				
				<td>NTIHCNO : <input type="text" id="mysendto" name="sendto" value="" readonly="readonly"></td>
				<td>SERVICETYPE : <input type="text" id="mysubject" name="subject" value=""> 
                </td>
				<td> VIST TYPE : <input type="text" id="mycomment" name="comment" value=""></td>
				<td> DATE : <input type="text" name="timestamp" value="<?php echo date('Y-m-d');?>" readonly="readonly"></td>
				<td><input type="hidden" id="myID" name="ID" value=""</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>			
		</table>
	</form>
   
        
	  <div id="work" style="width:100%; font-weight:normal;"> 
    <table id="example2" class="table table-striped table-bordered" >
        <thead>
        <tr>  
              <th>Time stamp.</th>
              <th>Recieved from</th> 
              <th>Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th>Time stamp.</th>
              <th>Recieved from</th> 
              <th>Action</th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function referpat(myid){
var dts = myid.split("***");
document.getElementById("mysendto").value=dts[1];
document.getElementById("myID").value=dts[0];
document.getElementById("mysubject").value=dts[2];
document.getElementById("mycomment").value=dts[3];
}
</script> 
    
 <?php 
include_once("../updatecmgt/config.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM messager ORDER BY ID DESC");
 
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['ID']."***".$res['sendto']."***".$res['subject']."***".$res['comment'];
		echo "<tr>"; 
		echo "<td>".$res['timestamp']."</td>";
		echo "<td>".$res['recievedfrom']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">OPEN</a> </td>'; 			
	}
	?>
	</tbody>
  </table>
     </div></div>
                 
 
      
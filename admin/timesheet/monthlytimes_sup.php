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
 
 <table id="example" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>   
                     <th style="background-color:#f0f0f0;; color:BLACK;">No.</th>
                     <th style="background-color:#f0f0f0;; color:BLACK;">Period</th>
                     <th style="background-color:#f0f0f0;; color:BLACK;">Staff name</th> 
					 <th style="background-color:#f0f0f0;; color:BLACK;">Worked</th> 
					 <th style="background-color:#f0f0f0;; color:BLACK;">%</th> 
                     <th style="background-color:#f0f0f0;; color:BLACK;">Action</th>   
           </tr>
        </thead>
        <tfoot>
          <tr>
                     <th style="background-color:#f0f0f0;; color:BLACK;">No.</th>
                     <th style="background-color:#f0f0f0;; color:BLACK;">Period</th>
                     <th style="background-color:#f0f0f0;; color:BLACK;">Staff name</th>
					 <th style="background-color:#f0f0f0;; color:BLACK;">Worked</th> 
					 <th style="background-color:#f0f0f0;; color:BLACK;">%</th>  
                     <th style="background-color:#f0f0f0;; color:BLACK;">Action</th>   
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postx(myid){
var dts = myid.split("***");
document.getElementById("IDNUMBER").value=dts[1];
document.getElementById("myID").value=dts[0]; 
document.getElementById("SUPACCOUNT").value=dts[2]; 
document.getElementById("SUPERVISORNAME").value=dts[3]; 
document.getElementById("SUPERVISORPOSITION").value=dts[4]; 

}
</script>    
         
        
<?php 
include_once("config.php");
   
$result = mysqli_query($mysqli, "SELECT * FROM  timesheet WHERE SUPACCOUNT = '$rm' AND CONFIRMATIONSTATUS = 'PENDING' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['IDNUMBER']."***".$res['SUPACCOUNT']." ".$res['SUPERVISORNAME']."***".$res['SUPERVISORPOSITION'];
		echo "<tr>";   
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['FISCALMONTH']." ".$res['FISCALYEAR']."</td>"; 
		echo "<td>".$res['EMPLOYEENAME']."</td>"; 
		echo "<td>".$res['WDD']."</td>"; 
		echo "<td>".$res['WDDp']."</td>"; 
		echo '<td> 
			    <a id="12__'.$dts.'" href="javascript:void(0)" onclick="newcont(this.id)" data-toggle="tooltip" title="Add new"
                <span class="glyphicon glyphicon-plus"> </span></a>
			   &nbsp;&nbsp; &nbsp;&nbsp;
			   <a id="13__'.$dts.'" href="javascript:void(0)" onclick="updateconts(this.id)" data-toggle="tooltip" title="Update"
               <span class="glyphicon glyphicon-new-window"> </span></a> 
              </td>'; 
		echo "<td>  <a href=\"print_ts.php?id=$res[id]\">Print</a> |  
		  </td>"; 	
	}
	   
    ?>
	</tbody>
  </table>  
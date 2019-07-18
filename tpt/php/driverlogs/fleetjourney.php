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


	    <table id="example3" class="table table-table-bordered" style="font-size:9px; width:100%;">
         <thead>
         <tr>   
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%; text-align:center;">ACTION</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;width:10%;">ID.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:10%;">REG.NO.</th>
					 <th style="background-color:#ecf0f5; font-size:10px;width:45%;">APPLICANT</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;width:25%;">DATE</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; width:10%;">PSG</th> 
           
        </tr>
        </tfoot> 
        <tbody>  
<?php 
include_once("../connect/configftl.php"); 

$result = mysqli_query($mysqli, "SELECT * FROM ftlvehiclebooking WHERE ordertype = 'Reservation' AND Allocationstatus ='Allocated' 
                                 AND Emailaddress='$rm' AND Servicerecieved='No' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['senderaccount']."***".$res['id'];
		echo "<tr>"; 
		echo '<td> 
			    <a id="1__'.$dtsz.'" href="javascript:void(0)"  onclick="getresorder(this.id)" data-toggle="tooltip" title="Issue vehicle"
                style="color: #000;border-radius:2px; height: 20px;" <button class="button 5"> Travel  </span></a>  
               </td>';  	
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['Vehicleallocated']."</td>";   
		echo "<td>".$res['applicantname']."</td>";  
		echo "<td>".$res['Reservationdate_from']."</td>";  
		echo "<td>".$res['Passengers']."</td>";  
		
	}
	   
    ?>
	</tbody>
  </table> 
  
 <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
		{extend :'pdf',
		 title:'myfile'
		} 
        ]
    } );
  } );
  </script>
  
 <?php
					 require('php/configpatientmgtdb.php');
                     $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO'";

                     $result = $conn->query($sql);
                     $st ='<table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
                     <thead>
                     <tr>
                     <th>RID</th>
					 <th>CHECKIN</th>
					 <th>VIST</th> 
					 <th>CLIENT NAME</th>
                     </tr>
                     </thead>
                     <tbody ">';

                     while($row = $result->fetch_assoc()) {
					 $vd =  $row['NTIHCNO'].','.$row['RID']; 
                     $st=$st."<tr>".
	                 "<td>" . $row['RID'] . "</td>".
					  "<td>" . $row['CHECKIN'] . "</td>".
					   "<td>" . $row['VISTTYPE'] . "</td>".  
					'<td><input type="button" style="width:100%; text-align:left; background-color:#f5f5f5; color:#000; height:22px;" onclick="postclient(\''.$vd.'\')"  value="'.$row['CLIENTNAME'].'" ></td>'.
		             "</tr>";
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?>
					 
  
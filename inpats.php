        
 
 
                     <?php
					 require('php/configpatientmgtdb.php');

                     $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'";

                     $result = $conn->query($sql);
                     $st ='<table>
                     <thead>
                     <tr>
                     <th>RID</th>
					 <th>TIME STAMP</th> 
					 <th>NTIHC NO.</th> 
					 <th>VIST TYPE</th>  
					 <th>CLIENT NAME</th>
                     </tr>
                     </thead>
                     <tbody ">';

                     while($row = $result->fetch_assoc()) {
					 $vd =  $row['NTIHCNO'].','.$row['RID']; 
                     $st=$st."<tr>".
	                 "<td>" . $row['RID'] . "</td>".
					  "<td>" . $row['TIMESTAMP'] . "</td>".
					   "<td>" . $row['NTIHCNO'] . "</td>". 
					  "<td>" . $row['VISTTYPE'] . "</td>".  
					 '<td><input type="button" style="width:100%; text-align:left;" onclick="postclient(\''.$vd.'\')"  value="'.$row['CLIENTNAME'].'" ></td>'.
		             "</tr>";
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?>
					 
                      
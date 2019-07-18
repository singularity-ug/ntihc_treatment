  <fieldset class="row17921" style= "margin-left: -18px; margin-top: -9px; width: 422px; border: -6px solid #FFF; background-color:#DDDDDD;"/>
  
 <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "patientmgt";

                     // Create connection
                     $conn = new mysqli($servername, $username, $password, $dbname);
                     // Check connection
                     if (!$conn) {
                     die("Connection failed: " . mysqli_connect_error());
                     }

                     $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='YES'";

                     $result = $conn->query($sql);
                     $st ='<table>
                     <thead>
                     <tr>
                     <th>RID</th>
                     <th>TIME STAMP</th>
                     <th>NTIHC NO.</th>
					 <th>CLIENT NAME</th>
                     <th>SVC STATUS</th>
                     </tr>
                     </thead>
                     <tbody ">';

                     while($row = $result->fetch_assoc()) {
                     $st=$st."<tr>".
	                 "<td>" . $row['RID'] . "</td>".
	                 "<td>" . $row['TIMESTAMP'] . "</td>".
                     "<td>" . $row['NTIHCNO'] . "</td>".
					 "<td>" . $row['CLIENTNAME'] . "</td>".
                     "<td>" . $row['INSVCSTATUS'] . "</td>".
		             "</tr>";
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?>  

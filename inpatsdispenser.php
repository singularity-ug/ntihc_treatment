	  <style>
 {
                 border-bottom: 2px solid #000;
                 color:#000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 10px;
             	color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
             }
    </style>                       

 <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "toor2";
                     $dbname = "patientmgt";

                     // Create connection
                     $conn = new mysqli($servername, $username, $password, $dbname);
                     // Check connection
                     if (!$conn) {
                     die("Connection failed: " . mysqli_connect_error());
                     }

                     $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM prescription WHERE TIMESTAMP >='$date' AND CHECKAVAILABILITY ='NO'";

                     $result = $conn->query($sql);
                     $st ='<table>
                     <thead>
                     <tr>
                     <th>ID</th> 
                     <th>NTIHC-NO.</th>
					 <th>CLIENT NAME</th>
                     <th>ACTION</th>
                     </tr>
                     </thead>
                     <tbody ">';
                     $seenid = ""; $x=1;
                     while($row = $result->fetch_assoc()) {
                       if ($seenid==$row['NTIHCNO']) {
                         # code...
                       }
                       else{
                         $seenid = $row['NTIHCNO'];
                     $st=$st."<tr>".
	                 "<td>" . ($x++) . "</td>". 
                     "<td>" . $row['NTIHCNO'] . "</td>".
					 "<td>" . $row['CLIENTNAME'] . "</td>".
                     "<td>" . '<input type="button" id="'.$row['NTIHCNO'] .'" value="Click"  onclick="getClient(this.id)">' . "</td>".
		             "</tr>";
                   }
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?> 
                           
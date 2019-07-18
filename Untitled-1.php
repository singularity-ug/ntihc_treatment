  <style>
   {
                 border-bottom: 2px solid #cc9900;
                 color:#FF0000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 12px;
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
                     $password = "";
                     $dbname = "dbmultiple";

                     // Create connection
                     $conn = new mysqli($servername, $username, $password, $dbname);
                     // Check connection
                     if (!$conn) {
                     die("Connection failed: " . mysqli_connect_error());
                     }

                     $date = date("Y-m-d").' 00:00:00';
                     $sql="SELECT * FROM pettycash WHERE TIMESTAMP >='$date'";

                     $result = $conn->query($sql);
                     $st ='<table> 
					
                     <thead>
					 
					   <tr>
                     <th>NO.</th>
                     <th>DATE</th>
                     <th>EXPENDITURE DETAILS</th>
					 <th>VOUCHER-NO.</th>
					 <th>CREDIT</th> 
                     <th>DEBIT</th> 
					 <th>BALANCE</th>
					 <th>VOTE EXTENSION</th> 
                     </tr>
		              
                     </thead>
                     <tbody ">';
                    
                     while($row = $result->fetch_assoc()) {
                     $st=$st."<tr>".
					 
	                 "<td>" . $row['UID'] . "</td>".
	                 "<td>" . $row['DATECREATED'] . "</td>".
                     "<td>" . $row['EXPENDITURE_DETAILS'] . "</td>".
					 "<td>" . $row['VOUCHER_NO'] . "</td>".
					 "<td>" . $row['CREDIT'] . "</td>".
                     "<td>" . $row['DEBIT'] . "</td>". 
					 "<td>" . $row['BALANCE'] . "</td>".
				     "<td>" . $row['VOTE_EXTENSION'] . "</td>". 
					 
		             "</tr>";
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?>
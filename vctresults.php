    <style>
h9 {
    border-bottom: 2px solid #cc9900;
    color:#000000;
    font-size: 12px;
}
table, th , td  {
    border: 2px solid grey;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#FFFFF;
}
table tr:nth-child(odd) {
background:#E6E6E6;
}
table tr:nth-child(even) {
    background:#FFF ;
}
</style>
 
 <?php

$connect = new mysqli("localhost", "root", "", "patientmgt");

if( $result = $connect->query("SELECT * FROM voluntarytesting"))
{
  echo "<table>  <tr> 
        <th>ID</th>   <th>TIME-STAMP</th>   <th>NTIHC-NO.</th>   <th>NAME</th>  <th>HIV</th>  <th>SYPHILLIS</th>   <th>HPV</th>   <th>CATEGORY</th>  <th>RESULT_RECIEVED</th> <th>FOLLOWUP</th>
        </tr>";

      while ($row = $result->fetch_assoc() ) {
        echo "<tr>";
                        echo "<td>" . $row['VTID'] . "</td>"; 
				        echo "<td>" . $row['TIMESTAMP'] . "</td>";
                        echo "<td>" . $row['NTIHCNO'] . "</td>";
					    echo "<td>" . $row['CLIENTNAME'] . "</td>";
					    echo "<td>" . $row['HIV'] . "</td>";
					    echo "<td>" . $row['SYPHILLIS'] . "</td>";
					    echo "<td>" . $row['HPV'] . "</td>";
					    echo "<td>" . $row['CATEGORY'] . "</td>";
					    echo "<td>" . $row['RESULT_RECIEVED'] . "</td>";
				        echo "<td>" . $row['FOLLOWUP'] . "</td>";
        echo "</tr>";
                                          }
        echo "</table>";

}
$connect->close();
exit();
?>

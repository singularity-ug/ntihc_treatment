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

if( $result = $connect->query("SELECT * FROM requestforlabtest"))
{
  echo "<table>  <tr>
        <th>ID</th>   <th>TIME-STAMP</th>   <th>NTIHC-NO.</th>   <th>NAME</th>  <th>TESTTYPE</th>  <th>VISITBY</th> <th>SENDER</th> <th>STATUS</th>
        </tr>";

      while ($row = $result->fetch_assoc() ) {
        echo "<tr>";
        echo "<td>" . $row['ORDERNO'] . "</td>";
        echo "<td>" . $row['TIMESTAMP'] . "</td>";
        echo "<td>" . $row['NTIHCNO'] . "</td>";
        echo "<td>" . $row['NAME'] . "</td>";
        echo "<td>" . $row['TESTTYPE'] . "</td>";
        echo "<td>" . $row['VISTBY'] . "</td>";
        echo "<td>" . $row['SENDER'] . "</td>";
		echo "<td>" . $row['ORDERSTATUS'] . "</td>";
        echo "</tr>";
                                          }
        echo "</table>";

}
$connect->close();
exit();
?>

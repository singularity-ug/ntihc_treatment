<?php
function pluralize( $count, $text )
{
$text ='';
    return $count . ( ( $count == 1 ) ? ( "$text" ) : ( "${text}" ) );
}

function ago( $datetime )
{
    $interval = date_create('now')->diff( $datetime );
    $suffix = ( $interval->invert ? ' ago' : '' );

return pluralize( $interval->y, 'yr' );
}


 
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

$str = $_GET['q'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT *,AGE,CURDATE(), TIMESTAMPDIFF(YEAR,AGE,CURDATE()) AS AGE1 FROM cmpatientsnewregistration 
WHERE MOTHERLASTNAME LIKE '%$str%' LIMIT 50";

$result = $conn->query($sql);
$st ='<table>
   <thead>
  <tr>
     <th>MOTHER SUR NAME</th>
	 <th>FIRST NAME</th>
	 <th>CLIENT NAME</th> 
	 <th>AGE</th>
	 <th>CLIENT NO.</th>
	 <th>ENROLLMENT</th>
     </tr>
   </thead>
   <tbody ">';


while($row = $result->fetch_assoc()) {
       $ds = $row['AGE'];
      $ds1 =  new  DateTime($ds);
     $impt = $row['MOTHERLASTNAME'].'__'.$row['NTIHCNO'].'__'.$row['LASTNAME'].' '.$row['FIRSTNAME'].'__'.$row['AGE1'].'__'.$row['SEX'].'__'.ago($ds1);

    $st=$st."<tr>".
	     '<td> <input type="button" class="btn btn-success btn-sm" onclick="upt(this.id)" 
		   value="'. $row['MOTHERLASTNAME'].' "' .'id="' . $impt . '" style="width:100%;text-align: left; "> </td>'.
		    "<td>" . $row['MOTHERFIRSTNAME'] . "</td>".
 		    "<td>" . $row['LASTNAME'] . " &nbsp;" . $row['FIRSTNAME'] . "</td>". 
            "<td>" . $row['AGE1'] . " yrs</td>".
		    "<td>" . $row['NTIHCNO'] . "</td>".
		    "<td>" . $row['DATECREATED'] . "</td>".
		    "</tr>";
}
$st = $st.' </tbody>
</table> ';
$conn->close();
echo $st;
exit();
?>

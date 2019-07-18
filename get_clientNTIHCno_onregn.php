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
$sql="SELECT * FROM cmpatientsnewregistration WHERE NTIHCNO LIKE '%$str%'";

$result = $conn->query($sql);
$st ='<table>
   <thead>
  <tr>
     <th>NTIHC NO.</th>
	 <th>FIRST NAME</th>
	 <th>LAST NAME</th>
	 <th>AGE</th>
     </tr>
   </thead>
   <tbody ">';


while($row = $result->fetch_assoc()) {
       $ds = $row['AGE'];
      $ds1 =  new  DateTime($ds);
     $impt = $row['NTIHCNO'].'__'.$row['FIRSTNAME'].' '.$row['LASTNAME'].'__'.$row['SEX'].'__'.ago($ds1);

    $st=$st."<tr>".
	     '<td> <input type="button"  class="btn btn-success btn-sm" onclick="upt(this.id)" value="' . $row['NTIHCNO'] . '"' .'id="' . $impt . '"  style="width:100%; "> </td>'.
 		    "<td>" . $row['FIRSTNAME'] . "</td>".
		    "<td>" . $row['LASTNAME'] . "</td>".
            "<td>" . $row['AGE'] . "</td>".
		   "</tr>";
}
$st = $st.' </tbody>
</table> ';
$conn->close();
echo $st;
exit();
?>

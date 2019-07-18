 <table >
        <thead>
          <tr>
              <th>No.</th>
              <th>USER TYPE</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No.</th> 
              <th>USER TYPE</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php

require('../php/configtollfree.php');
$sql = "SELECT COUNT(CID), DISTRICT, SEX FROM tollfree GROUP BY DISTRICT , SEX ORDER BY COUNT(CID) DESC ";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.
	      '<td>'.$row['DISTRICT'].'</td>'.
		  '<td>'.$row['SEX'].'</td>'.
	      '<td>'.$row['COUNT(CID)'].'</td>'. 
   '</tr>';
$x=$x+1;

 }

 ?>
	  </tbody>
  </table>     
	  </tbody>
  </table>
  
 <?php

require('../php/confighr.php');
$sql = "SELECT COUNT(ID), Dept FROM user_table GROUP BY Dept ORDER BY COUNT(ID) DESC ";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.
	      '<td>'.$row['Dept'].'</td>'. 
	      '<td>'.$row['COUNT(ID)'].'</td>'. 
   '</tr>';
$x=$x+1;

 }

 ?>  
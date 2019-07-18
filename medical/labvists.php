 
 <table id="example" class="table table-tabled table-bordered"  style="font-size:90%; font-weight:normal;" cellspacing="0" width="100%">
        <thead>
          <tr> 
 
              <th>No</th>
        <th>DATE</th>
              <th>NAME</th>
               <th>NTIHC NO.</th>
              <th>TEST DESC</th>
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php
require('../ahr/php/configpatientmgtdb.php'); 
$date = date("Y-m-d").' 00:00:00'; 
$sql = "SELECT * FROM laboratory WHERE TIMESTAMP >='$date' AND TESTSTATUS = 'NOT STARTED' GROUP BY NTIHCNO ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
 $vx = $row['NAME']."__".$row['TESTDESCRIPTION']."__".$row['NTIHCNO']."__".$row['REQUESTINGUNIT']."__".$row['USERINITIAL']."__".$row['id']."__".$row['RSVNID'];
  echo'<tr>'.
       '<td>'.$x.'</td>'.
     '<td>'.$row['TIMESTAMP'].'</td>'.
        '<td>'.$row['NAME'].'</td>'.
        '<td>'.$row['NTIHCNO'].'</td>'.
         '<td>'.$row['TESTDESCRIPTION'].'</td>'.
         '<td><input type="button" id="'.$vx.'" onclick="postvalues(this.id)" value="POST"></td>'.
   '</tr>';
$x=$x+1;

 }

 ?>

    </tbody>
  </table>
  
  
  
  
  

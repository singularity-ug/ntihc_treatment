 <?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
 
}
$dept = $_GET['q'];
require('config.php');
$sql = "SELECT * FROM appraisals  WHERE `dept` = '$dept' ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
   if((strpos($desc, 'Manager') !== false)||(strpos($desc, 'Head of') !== false)||(strpos($desc, 'Supervisor') !== false)) {

   if($row['o_sup']===""){
  echo'<tr>'.
       '<td><input type="button" class="btn-success"  id="'.$row['id'].'" onclick="redirect4(this.id)" value="[]">'.$x.'</td>'.
       '<td>'.$row['fname'].' '.$row['family_name'].'</td>'.
       '<td>'.$row['pos'].'</td>'.
       '<td>'.$row['dept'].'</td>'.
       '<td>'.$row['contract_type'].'</td>'.
       '<td>'.$row['lmgr'].'</td>'.
       '<td>'.$row['o_self'].'</td>'.
       '<td>'.$row['o_sup'].'</td>'.
       '<td>'.$row['o_agreed'].'</td>'.
       '<td>'.$row['d1'] .'</td>'.
   '</tr>';
$x=$x+1;
}
 }
 }
 $conn->close();
 exit();
 ?>

<?php

$q = trim($_GET['query']);
//Next we authenticate to use the database
require('config.php');

 $sql = "SELECT * FROM `sys_users` WHERE Name LIKE '%$q%'";

  $res = $conn->query($sql);
 //Check unapproved table if official table has no matching result
 if($res->num_rows > 0){

         echo '  <div class="list-group">';
             while($row=$res->fetch_assoc()){
                $name = $row['Name']; $uname=$row['Username'];$dept=$row['Dept'];$desc=$row['Description'];
	echo'<button type="button" onclick="populate(this.id)" id="'.$name.','.$uname.','.$dept.
  '" class="list-group-item">'.$name.' : '.$desc.'  : '.$dept.'</button>';
                    }
    echo '</div>';
  }
$conn->close();
exit();
?>

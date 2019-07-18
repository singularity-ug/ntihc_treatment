<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "dbtollfree";//db

if(isset($_POST['PHONECONTACT'])){

  $connect = new mysqli($servername, $username,$password, $dbname);

  $stss    = trim($_POST['PHONECONTACT']);

  if( $result = $connect->query("SELECT * FROM tollfree WHERE `PHONECONTACT` = '$stss'"))
  {

    while ($row = $result->fetch_assoc() ) {

        $stss = $row['Accountnumber'] . ",".$row['Accountnumber'].",".$row['Accountnumber'].",".$row['Accountnumber'];


        }
   }
   echo $stss;
  $connect->close();
exit();

}

?>

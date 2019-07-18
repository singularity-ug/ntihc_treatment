
 <?php
  $connect = mysqli_connect("localhost", "root", "", "patientmgt");


  $sql = "INSERT INTO `voluntarytesting` (`TIMESTAMP`, `VCTTESTDATE`, `NTIHCNO`, `HIV`, `SYPHILLIS`, `HPV`, `CATEGORY`, `RESULT_RECIEVED`, `FOLLOWUP`)
VALUES (CURRENT_TIMESTAMP, NOW(),'".$_POST["p1"]."', '".$_POST["p2"]."', '".$_POST["p3"]."', '".$_POST["p4"]."', '".$_POST["p5"]."','','')";


  if(mysqli_query($connect, $sql))
  {
       echo 'Data Inserted';
  }
  else{      echo 'Data Not Inserted'.mysqli_error($connect);
  }
  ?>

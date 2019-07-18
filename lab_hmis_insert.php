<?php
 $connect = mysqli_connect("localhost", "root", "", "patientmgt");

 $sql = "INSERT INTO `lab_hmis-tests`(TESTDATE,NTIHCNO, SPECIMEN, `HEAMATOLOGY/SCROLOGY`, MALARIA, STOOL_MICROSCOPY, URINE_MICROSCOPY, `SWABS-TYPE`, `SWABS-WETPREP`, `SWABS-GRAMSTAIN`)
  VALUES(NOW(),'".$_POST["p1"]."', '".$_POST["p2"]."', '".$_POST["p3"]."', '".$_POST["p4"]."', '".$_POST["p5"]."', '".
            $_POST["p6"]."', '".$_POST["p7"]."', '".$_POST["p8"]."', '".$_POST["p9"]."')";

 if(mysqli_query($connect, $sql))
 {
      echo 'Data Inserted';
 }
 else{      echo 'Data Not Inserted'.mysqli_error($connect);
 }
 ?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtollfree";

if(isset($_POST['PHONECONTACT'])){
$PHONECONTACT = trim($_POST['PHONECONTACT']);
$fnam = trim($_POST['FIRSTNAME']);
$urgty = trim($_POST['LASTNAME']);
$vtyp = trim($_POST['SEX']);
$postst = trim($_POST['AGE']);
$chkn = trim($_POST['SCHOOLINGSTATUS']);
$marit = trim($_POST['MARITALSTATUS']);
$emp = trim($_POST['EMPLOYMENTSTATUS']);
$dist = trim($_POST['DISTRICT']);
$divi = trim($_POST['DIVISION']);
$placres = trim($_POST['PLACEOFRESIDENCE']);
$herda = trim($_POST['HEAREDABOUTNTIHC']);
$howdid = trim($_POST['HOWDIDYOUKNOABOUTTHISNO']);
$descr = trim($_POST['DESCRIPTION']);
$acti = trim($_POST['ACTIONTAKEN']);
$recnea = trim($_POST['RECOMMENDEDNEARESTHEALTHCENTRE']);
$specfy = trim($_POST['SPECIFYSERVICEREFERREDFOR']);
$reasfr = trim($_POST['REASONFORREFER']);
$p      = $_POST['P'];
$c      = $_POST['c'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

 $sql = "INSERT INTO tollfree (PHONECONTACT, FIRSTNAME, LASTNAME, SEX, AGE, SCHOOLINGSTATUS, MARITALSTATUS, EMPLOYMENTSTATUS, DISTRICT, DIVISION, PLACEOFRESIDENCE, HEAREDABOUTNTIHC, HOWDIDYOUKNOABOUTTHISNO, DESCRIPTION, ACTIONTAKEN, RECOMMENDEDNEARESTHEALTHCENTRE, SPECIFYSERVICEREFERREDFOR, REASONFORREFER)
                       VALUES ('$PHONECONTACT', '$fnam', '$urgty', '$vtyp', '$postst', '$chkn', '$marit', '$emp', '$dist', '$divi', '$placres', '$herda', '$howdid', '$descr', '$acti', '$recnea', '$specfy', '$reasfr')";


  $rsns    = count($p);;  //convert value to integer mytable_rows

              if($rsns>0){
                   $x=0;
                   for ($x=0; $x < $rsns; $x++) {

                        $prob = trim($p[$x]);   // actual value
                        $cat  = trim($c[$x]);  // category

  $sql1="INSERT INTO `tollfree`.` tollfree_problems (`PHONECONTACT`,
                                                    `FIRSTNAME`,
													`LASTNAME`,
													`SEX`,
													`AGE`,
													`SCHOOLINGSTATUS`,
													`MARITALSTATUS`,
													`EMPLOYMENTSTATUS`,
													`DISTRICT`,
													`DIVISION`,
													`ACTIONTAKEN`,
													`TOPIC`,
													`PROBLEMCATEGORY`)
              VALUES ('$PHONECONTACT',
											 '$fnam',
											 '$urgty',
											 '$vtyp',
											 '$postst',
											 '$chkn',
											 '$marit',
											 '$emp',
											 '$dist',
											 '$divi',
											 '$acti',
											 '$top',
											 '$probc')";
     mysqli_query($conn, $sql1);
        }

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
	header("location:tollfree.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
}

else{  header("location:index.php");  exit(); }

?>

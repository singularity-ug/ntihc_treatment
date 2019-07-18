<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "dbmultiple";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['ENTRYDATE'])){

$imp =array(); $cur =array(); $bix =array();

$ENTRYDATE   = trim($_POST['ENTRYDATE']);

if (isset($_POST['imp'])) {
  $imp =      $_POST['imp'];
  $cur   =       $_POST['cur'];
  $bix      =       $_POST['bix'];
}

$FINOBJECTIVE = trim($_POST['FINOBJECTIVE']);

$i=0;
for($i=0;$i<count($imp);$i++){

$BUDGETLINEDESCRIPTION =$imp[$i];
$CODE  = $cur[$i];
$BUDGETSUM  =  $bix[$i]; 
$FINPERIOD   = trim($_POST['FINPERIOD']);

  $sql1="INSERT INTO `dbmultiple`.`budgetlinedesc` (`ENTRYDATE`,

													         `BUDGETLINEDESCRIPTION`,
													         `CODE`,
													         `UNITOFMEASURE`,
													         `BUDGETSUM`,
													         `FINOBJECTIVE`,
															 `FINPERIOD`)
                                                VALUES (ENTRYDATE,
													   '$BUDGETLINEDESCRIPTION',
													   '$CODE',
													   '$UNITOFMEASURE',
													   '$BUDGETSUM',  
													   '$FINOBJECTIVE',
													   '$FINPERIOD')";

                                  $conn->query($sql1);

						}
						}
                         header("location:pmts_mgr.php");
                                exit();

                                    ?>

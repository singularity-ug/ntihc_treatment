<?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['SUP_COMMENT'])){
$id       = trim($_POST['id']);
$SUP_COMMENT   = trim($_POST['SUP_COMMENT']);
$CONFIRMATIONSTATUS  = trim($_POST['CONFIRMATIONSTATUS']);
$FORWARDTO     = trim($_POST['FORWARDTO']); 
$SUP_DATE     = trim($_POST['SUP_DATE']);

$sql1="UPDATE `timesheet`
                      SET
										  `SUP_COMMENT` ='$SUP_COMMENT',
		                                  `CONFIRMATIONSTATUS`='$CONFIRMATIONSTATUS',
										  `FORWARDTO`='$FORWARDTO', 
										  `SUP_DATE`='$SUP_DATE' 
                                           WHERE id='$id'";

                                   if($conn->query($sql1)){  header("location:supervisor.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 
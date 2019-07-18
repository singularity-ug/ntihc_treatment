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

if(isset($_POST['ADMIN_COMMENT'])){
$id       = trim($_POST['id']);
$ADMIN_COMMENT   = trim($_POST['ADMIN_COMMENT']);
$APPROVALSTATUS  = trim($_POST['APPROVALSTATUS']);
$ADMINNAME     = trim($_POST['ADMINNAME']); 
$ADMINDATE     = trim($_POST['ADMINDATE']);
$ADMINPOSITION     = trim($_POST['ADMINPOSITION']);

$sql1="UPDATE `timesheet`
                      SET
										  `ADMIN_COMMENT` ='$ADMIN_COMMENT',
		                                  `APPROVALSTATUS`='$APPROVALSTATUS',
										  `ADMINNAME`='$ADMINNAME', 
										  `ADMINDATE`='$ADMINDATE', 
										  `ADMINPOSITION`='$ADMINPOSITION'
                                           WHERE id='$id'";

                                   if($conn->query($sql1)){  header("location:manager.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 
 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmultiple";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['financialyear'])){  
$financialyear  = trim($_POST['financialyear']);  
$period = trim($_POST['period']); 
$status = trim($_POST['status']); 
  $sql1="INSERT INTO `dbmultiple`.`financialperiod` (              `financialyear`,  
													               `period`,
																   `status`)
																   
                                      VALUES (         '$financialyear',   
													   '$period',   
													   '$status' )";
						$conn->query($sql1);
						
						}                                  
                         header("location:budget_mgr.php");
                                exit(); 

                                    ?> 

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

if(isset($_POST['financialyear'])){  
$financialyear  = trim($_POST['financialyear']);  
$period = trim($_POST['period']); 
$status = trim($_POST['status']); 

$preparedby = trim($_POST['preparedby']); 
$prepdate = trim($_POST['prepdate']); 
$prepname = trim($_POST['prepname']); 
$reviewedby = trim($_POST['reviewedby']); 
$revname = trim($_POST['revname']);  

  $sql1="INSERT INTO `dbmultiple`.`financialperiod` (              `financialyear`,  
													               `period`,
																   `status`,
																   `preparedby`,  
													               `prepdate`,
																   `prepname`,
																   `reviewedby`,   
																   `revname`)
																   
                                      VALUES (         '$financialyear',   
													   '$period',   
													   '$status',
													   '$preparedby',   
													   '$prepdate',   
													   '$prepname',
													   '$reviewedby',  
													   '$revname' )";
						$conn->query($sql1);
						
						}                                  
                         header("location:asset_config.php");
                                exit(); 

                                    ?> 

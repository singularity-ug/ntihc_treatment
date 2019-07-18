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

if(isset($_POST['budgetlinename'])){  
$budgetlinename  = trim($_POST['budgetlinename']);  
$blcode = trim($_POST['blcode']); 

  $sql1="INSERT INTO `dbmultiple`.`budgetcategory` (                `budgetlinename`,  
													               `blcode`)
																   
                                      VALUES (         '$budgetlinename',   
													   '$blcode' )";
						$conn->query($sql1);
						
						}                                  
                         header("location:budget_mgr.php");
                                exit(); 

                                    ?> 

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

if(isset($_POST['lastupdatedateby_ieb'])){  
$lastupdatedateby_ieb  = trim($_POST['lastupdatedateby_ieb']);  
$Cost_description     = trim($_POST['Cost_description']); 
$programme_ieb = trim($_POST['programme_ieb']); 
$programecode_ieb = trim($_POST['programecode_ieb']); 

  $sql1="INSERT INTO `dbmultiple`.`budgetprogram` (                `lastupdatedateby_ieb`, 
											                       `Cost_description`,
																   `programme_ieb`,
													               `programecode_ieb`)
																   
                                      VALUES (         '$lastupdatedateby_ieb',  
													   '$Cost_description',
													   '$programme_ieb',
													   '$programecode_ieb' )";
						$conn->query($sql1);
						
						}                                  
                         header("location:budget_mgr.php");
                                exit(); 

                                    ?> 

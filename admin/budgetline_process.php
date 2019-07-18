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

if(isset($_POST['budgetline'])){  
$budgetline  = trim($_POST['budgetline']);
$code = trim($_POST['code']);
$Linecategory     = trim($_POST['Linecategory']); 
$updatedby = trim($_POST['updatedby']); 

  $sql1="INSERT INTO `dbmultiple`.`budgetcoder` (                  `budgetline`,
                                                                   `code`,
											                       `Linecategory`,
													               `updatedby`)
																   
                                      VALUES (         '$budgetline',
													   '$code',
													   '$Linecategory',
													   '$updatedby' )";
						$conn->query($sql1);
						
						}                                  
                         header("location:petty_cash.php");
                                exit(); 

                                    ?> 

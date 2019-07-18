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

if(isset($_POST['lastupdatedate'])){  
$lastupdatedate  = trim($_POST['lastupdatedate']);
$budgetdetails = trim($_POST['budgetdetails']);
$detailscode = trim($_POST['detailscode']);
$budgetline     = trim($_POST['budgetline']); 
$code = trim($_POST['code']); 
$Costdescription     = trim($_POST['Costdescription']); 
$programme = trim($_POST['programme']); 
$programecode = trim($_POST['programecode']); 

  $sql1="INSERT INTO `dbmultiple`.`budgetconfig` (                 `lastupdatedate`,
                                                                   `budgetdetails`,
																   `detailscode`,
											                       `budgetline`,
																   `code`,
											                       `Costdescription`,
																   `programme`,
													               `programecode`)
																   
                                      VALUES (         '$lastupdatedate',
													   '$budgetdetails',
													   '$detailscode',
													   '$budgetline',
													   '$code',
													   '$Costdescription',
													   '$programme',
													   '$programecode' )";
						$conn->query($sql1);
						
						}                                  
                         header("location:budget_mgr.php");
                                exit(); 

                                    ?> 

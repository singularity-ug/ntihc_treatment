<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['DESCRIPTION'])){
$id       = trim($_POST['id']);
$DESCRIPTION   = trim($_POST['DESCRIPTION']);
$CATEGORY  = trim($_POST['CATEGORY']);
$BREAKDOWN     = trim($_POST['BREAKDOWN']);
$UNITOFMEASURE = trim($_POST['UNITOFMEASURE']);
$STOCKTAKEN   = trim($_POST['STOCKTAKEN']);
$QTYPERUOM = trim($_POST['QTYPERUOM']);
$UNITCOST  = trim($_POST['UNITCOST']);
$REORDERLEVEL   = trim($_POST['REORDERLEVEL']);
$DISCONTINUE = trim($_POST['DISCONTINUE']);
$ITEMNOTES   = trim($_POST['ITEMNOTES']);
$LOCATION   = trim($_POST['LOCATION']);
$LASTUPDATEDBY = trim($_POST['LASTUPDATEDBY']); 
               
$sql1="UPDATE `items`
                              SET 
		                                  `DESCRIPTION`='$DESCRIPTION',
										  `CATEGORY`='$CATEGORY',
										  `BREAKDOWN`='$BREAKDOWN',
		                                  `UNITOFMEASURE`='$UNITOFMEASURE',
										  `STOCKTAKEN`='$STOCKTAKEN',
										  `QTYPERUOM`='$QTYPERUOM',
		                                  `UNITCOST`='$UNITCOST',
										  `REORDERLEVEL`='$REORDERLEVEL',
										  `DISCONTINUE`='$DISCONTINUE', 
										  `ITEMNOTES`='$ITEMNOTES',
										  `LOCATION`='$LOCATION',
			                              `USERUNIT`='$USERUNIT',
										  `LASTUPDATEDBY` ='$LASTUPDATEDBY' 
                                           WHERE id='$id'";

                                   if($conn->query($sql1)){  header("location:stores_module.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 

 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "procurement";

if(isset($_POST['FRAMEWORKDETAILS'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }


$FRAMEWORKDETAILS = trim($_POST['FRAMEWORKDETAILS']);
$CODE = trim($_POST['CODE']); 

$sql = "INSERT INTO frameworkdetails (FRAMEWORKDETAILS, 
                                     CODE)
                             VALUES ('$FRAMEWORKDETAILS', 
									 '$CODE')";

                                   if($conn->query($sql)){  header("location:../suppliers _mgt.php"); exit();}
								   else{ echo $conn->error; exit();}

                                               }

                                    ?> 

 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}
  

if(isset($_POST['ACTION'])){ 
$ACTION   = trim($_POST['ACTION']);  
$VISTID  = trim($_POST['VISTID']); 
$sql1="UPDATE `laboratory` SET
										  `ACTION` ='$ACTION' 
                                           WHERE VISTID='$VISTID'";
                                   if($conn->query($sql1)){ header("location:anc_home.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?> 
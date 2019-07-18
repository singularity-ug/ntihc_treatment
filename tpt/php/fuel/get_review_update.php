 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleet"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);
$id = trim($_POST['purchaseid']); 
$sp  = trim($_POST['Throughoneaccountdate']);
$db  = trim($_POST['Toaccount']);
$cmt = trim($_POST['Throughonetitle']);
$apx = trim($_POST['Throughone']); 
$coz = trim($_POST['Throughonecomment']);
$cal = trim($_POST['Approval']);
 
$op  = '';
    
$conn->query("UPDATE purchase SET   
								  Throughoneaccountdate ='$sp', 
								  Toaccount ='$db',  
								  Throughonetitle ='$cmt', 
								  Throughonecomment ='$coz', 
                                  Approval ='$cal',  
								  Throughone ='$apx' 
								   
                                  WHERE purchaseid ='$id'"); 

}
   header("location:../fleet_administrator.php");
exit();
?> 
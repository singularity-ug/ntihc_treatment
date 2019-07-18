 
<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "fleet"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);
$idx = trim($_POST['purchaseid']); 
$spnull  = trim($_POST['verfiedby']); 
$lonx= trim($_POST['Loadreview']);
 
$op  = '';
    
$conn->query("UPDATE purchase SET     
								  verfiedby ='$spnull',  
                                  Loadreview ='$lonx'     
                                  WHERE purchaseid ='$idx'"); 
								  
								  
								  
								  

}
   header("location:../fuel_master.php");
exit();
?> 

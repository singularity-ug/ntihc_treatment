 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleet"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);
$idx = trim($_POST['purchaseid']); 
$spx  = trim($_POST['Toapprover']);
$dbx  = trim($_POST['Toname']);
$cmtx = trim($_POST['Toaccountcomment']);
$apxx = trim($_POST['Toaccountdate']);  
$calx = trim($_POST['Approval']);
 
$op  = '';
    
$conn->query("UPDATE purchase SET   
								  Toapprover ='$spx', 
								  Toname ='$dbx',  
								  Toaccountcomment ='$cmtx',  
                                  Approval ='$calx',   
								  Toaccountdate ='$apxx'  
                                  WHERE purchaseid ='$idx'"); 

}
   header("location:../fleet_administrator.php");
exit();
?> 
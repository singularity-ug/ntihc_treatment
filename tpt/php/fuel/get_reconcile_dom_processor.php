 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ftl"; 

if(isset($_POST['button'])){
$conn = new mysqli($servername, $username, $password, $dbname);
$idx = trim($_POST['id']); 
$spnull  = trim($_POST['LoadInvoicedate']); 
$lonx= trim($_POST['Loadinvoiceno']);
$fucxey  = trim($_POST['Fiscalpaymentmonth']);  
$dull= trim($_POST['Recstatus']);
$minn  = trim($_POST['Reconciliation']);   
$disc  = trim($_POST['Discountallowed']);   
$op  = '';
    
$conn->query("UPDATE fuellogs SET     
								  LoadInvoicedate ='$spnull',  
                                  Loadinvoiceno ='$lonx', 
								  Fiscalpaymentmonth ='$fucxey', 
								  Recstatus ='$dull',  
                                  Reconciliation ='$minn',
								  Discountallowed ='$disc'
                                  WHERE id ='$idx'");  

}
   header("location:get_reconcile_pen.php");
exit();
?> 

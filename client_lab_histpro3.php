<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patientmgt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}
 
if(isset($_POST['NTIHCNO'])){
$id       = trim($_POST['id']); 
$NTIHCNO  = trim($_POST['NTIHCNO']);
$RSVNID = trim($_POST['RSVNID']);
$AGE1   = trim($_POST['AGE1']); 
$AGE_GROUP = trim($_POST['AGE_GROUP']);
$SEX  = trim($_POST['SEX']);
$NAME   = trim($_POST['NAME']);   
$REQUESTINGUNIT   = trim($_POST['REQUESTINGUNIT']); 
$REGISTERACCOUNT  = trim($_POST['REGISTERACCOUNT']);
$LOTA     = trim($_POST['LOTA']);
$LOTB   = trim($_POST['LOTB']);
$LOTC   = trim($_POST['LOTC']);
$EXPIRYDATET1   = trim($_POST['EXPIRYDATET1']);
$EXPIRYDATET2 = trim($_POST['EXPIRYDATET2']); 
$EXPIRYDATET3 = trim($_POST['EXPIRYDATET3']); 

$FINALREACTIVITY     = trim($_POST['FINALREACTIVITY']);
$REACTIVITYT1   = trim($_POST['REACTIVITYT1']);
$REACTIVITYT2   = trim($_POST['REACTIVITYT2']);
$REACTIVITYT3   = trim($_POST['REACTIVITYT3']);   

$TECHTITLE     = trim($_POST['TECHTITLE']);
$TESTEDBY   = trim($_POST['TESTEDBY']); 
 
$sql1="UPDATE `hivtests` SET
										  `RSVNID` ='$RSVNID',
										  `NTIHCNO` ='$NTIHCNO',
		                                  `AGE1`='$AGE1',
										  `AGE_GROUP`='$AGE_GROUP',
										  `SEX`='$SEX',
		                                  `NAME`='$NAME',
										  `REQUESTINGUNIT`='$REQUESTINGUNIT', 
										  `REGISTERACCOUNT`='$REGISTERACCOUNT', 
										  `LOTA`='$LOTA', 
										  `LOTB`='$LOTB',
										  `LOTC`='$LOTC',
										  `EXPIRYDATET1`='$EXPIRYDATET1',
										  `EXPIRYDATET2`='$EXPIRYDATET2',
										  `EXPIRYDATET3`='$EXPIRYDATET3',
										  `TECHTITLE`='$TECHTITLE',
										  `TESTEDBY`='$TESTEDBY', 
										  `FINALREACTIVITY`='$FINALREACTIVITY',
										  `REACTIVITYT1`='$REACTIVITYT1',
										  `REACTIVITYT2`='$REACTIVITYT2',
										  `REACTIVITYT3`='$REACTIVITYT3'
                                           WHERE id='$id'";
                                   if($conn->query($sql1)){ header("location:client_lab.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?>

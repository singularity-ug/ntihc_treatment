<?php
<?php
session_start();
session_regenerate_id();
$id='';
$nameofuser = '';
$name       = "";
$desc       = "";
$dept       = "";
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID'];
$name = $_SESSION['NAME'];
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
}
//echo json_encode($_POST);
//Next we authenticate to use the database
require('config.php');
//print_r($_POST);
//echo json_encode($_POST);
$id  = $conn->real_escape_string($_POST['id']);
$a6  = $conn->real_escape_string($_POST['osh']);
$a14 = $conn->real_escape_string(json_encode($_POST['sup']));
$a15 = $conn->real_escape_string(json_encode($_POST['agr']));
$a16 = $conn->real_escape_string(json_encode($_POST['r1']));
$a17 = $conn->real_escape_string(json_encode($_POST['r2']));
$a18 = $conn->real_escape_string(json_encode($_POST['c1']));
$a19 = $conn->real_escape_string(json_encode($_POST['c2']));
$a21 = $conn->real_escape_string($_POST['o_sup']);
$a22 = $conn->real_escape_string($_POST['o_agreed']);

$a27 = $conn->real_escape_string($_POST['comments']);
$a29 = $conn->real_escape_string($_POST['d2']);
$a30 = $conn->real_escape_string($_POST['d3']);
$a31 = $conn->real_escape_string($_POST['username']);
$a32 = $conn->real_escape_string($_POST['apse']);
$a33 = $conn->real_escape_string($_POST['apsr']);

$sql = "UPDATE `appraisals` SET  `oksh`='$a6',  `sup`='$a14', `agr`='$a15', `r1`='$a16', `r2`='$a17', `c1`='$a18',
                                 `c2`='$a19', `o_sup`='$a21', `o_agreed`='$a22',
                                 `comments`='$a27', `d2`='$a29', `d3`='$a30',`apse`='$a32',`apsr`='$a33' WHERE id='$id'";

//echo $sql;
//exit();
if($conn->query($sql)===true){
               header("location:datatable/myappraisals_supervisor.php");
             exit(); }

else{    echo $connect_error;  }

exit();
 ?>

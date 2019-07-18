<?php
session_start();

$uname    = trim($_POST['user']);
$pwd      =  trim($_POST['password']);

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " .$conn->error());
}

$sql = "SELECT * FROM sys_users WHERE Username='$uname' AND Pwd='".md5($pwd)."'";
//ECHO $sql;exit();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$portfolio='';
	$name='';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $portfolio = $row['Userlevel'];
	    $name    =   $row['Firstname'].' '.$row['Lastname'];
    }
	if($portfolio==='tollfree'){
	$_SESSION['user'] = $name;
	     header('Location: http://http://41.190.139.254:8080/tollfree.php');
	     die();  }

	elseif($portfolio==='stores'){
		header('Location: http://http://41.190.139.254:8080/menu_stores.php');
	     die();
	}
	elseif($portfolio==='contractsmgt'){
		header('Location: http://http://41.190.139.254:8080/menu_contractsmgt.php');
	     die();
	}
	elseif($portfolio==='humanresource'){
		header('Location: http://http://41.190.139.254:8080/menu_humanresource.php');
	     die();
	}
	elseif($portfolio==='counselling'){
		header('Location: http://http://41.190.139.254:8080/php/menu_conuselling.php');
	     die();
	}
	elseif($portfolio==='dispenser'){
		header('Location: http://http://41.190.139.254:8080/menu_dispenser.php');
	     die();
	}
	elseif($portfolio==='labtech'){
		header('Location: http://http://41.190.139.254:8080/menu_laboratory.php');
	     die();
	}
	elseif($portfolio==='clientsreception'){
		header('Location: http://http://41.190.139.254:8080/menu_patientsmgt.php');
	     die();
	}
	elseif($portfolio==='purchases'){
		header('Location: http://http://41.190.139.254:8080/menu_purchases.php');
	     die();
	}
	elseif($portfolio==='treatmentroom'){
		header('Location: http://http://41.190.139.254:8080/menu_treatmentroom.php');
	     die();
	}
	else{
		header('location: http://http://41.190.139.254:8080/index.php');
	die();
	}

} else {
	//ECHO $conn->error;exit();
   header('location: http://http://41.190.139.254:8080/index.php');
	die();
}
$conn->close();
exit();
?>

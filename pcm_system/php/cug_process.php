
 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "pcms";

if(isset($_POST['DATECREATED'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {   }
  
$DATECREATED = trim($_POST['DATECREATED']); 
$STAFFNAMES = trim($_POST['STAFFNAMES']);
$PFNO = trim($_POST['PFNO']);
$DIRECTORATE = trim($_POST['DIRECTORATE']);
$CATEGORY = trim($_POST['CATEGORY']); 
$ALLOCATION = trim($_POST['ALLOCATION']);
$DESIGNATION = trim($_POST['DESIGNATION']);
$CUGNO = trim($_POST['CUGNO']);  
$OTHERNO = trim($_POST['OTHERNO']); 
$STATUS = trim($_POST['STATUS']); 
$ISSUEDBY = trim($_POST['ISSUEDBY']); 
$TITLE = trim($_POST['TITLE']); 

$sql = "INSERT INTO cug (DATECREATED,  
									 STAFFNAMES,  
									 PFNO,   
									 DIRECTORATE,  
									 CATEGORY, ALLOCATION,  
									 DESIGNATION, 
									 CUGNO, OTHERNO,  ISSUEDBY, TITLE,  
									 STATUS)
									 
                             VALUES ('$DATECREATED', 
									 '$STAFFNAMES', 
									 '$PFNO', 
									 '$DIRECTORATE',      
									 '$CATEGORY', 
									 '$ALLOCATION', 
									 '$DESIGNATION',    
									 '$CUGNO',  '$OTHERNO', '$ISSUEDBY',  '$TITLE',
									 '$STATUS')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("location:cug.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{}
?>

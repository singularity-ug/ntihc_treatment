<?php
$connection = @mysql_connect("localhost", "root", "toor2"); // Establishing Connection with Server..
$db = mysql_select_db("patientmgt", $connection); // Selecting Database
//Fetching Values from URL
$NTIHCNO=trim($_POST['NTIHCNO']);

//Insert query
$query = mysql_query("SELECT * FROM cmpatientsnewregistration WHERE NTIHCNO = '$NTIHCNO'");
if($query){
	$res='';
	$count = mysql_num_rows($query);
	if($count==0){    echo "DOESNOT EXIST";}
	else{
		while($row=mysql_fetch_assoc($query)){
			 $res = $row['FIRSTNAME'];
			 $res =$res.','.$row['LASTNAME'];
			 $res =$res.','.$row['SEX'];
			 $res =$res.','.$row['AGE'];
			 $res =$res.','.$row['SCHOOLINGSTATUS'];
			 $res =$res.','.$row['HIGHESTLEVELOFEDUCATION'];
			 $res =$res.','.$row['MARITALSTATUS'];
			 $res =$res.','.$row['EMPLOYMENTSTATUS'];
			 $res =$res.','.$row['DISTRICT'];
			 $res =$res.','.$row['DIVISION'];
			 $res =$res.','.$row['PLACEOFRESIDENCE'];
			 $res =$res.','.$row['PHONECONTACT'];
			 $res =$res.','.$row['MOTHERFIRSTNAME'];
			 $res =$res.','.$row['MOTHERLASTNAME'];
			 $res =$res.','.$row['FATHERFIRSTNAME'];
			 $res =$res.','.$row['FATHERLASTNAME'];
			  $res =$res.','.$row['HEAREDABOUTNTIHC'];
			 }
		echo $res;		
	}	
}
mysql_close($connection); // Connection Closed
?>


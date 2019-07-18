<?php
	$conn = new mysqli("localhost", "root", "toor2", "patientmgt");
 
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	//$cat = array();

	//for Samsung
	$sql="select * from hct_counselling_andtesting group by SERVICE_EPISODE";
	$query=$conn->query($sql);
	$hct = $query->num_rows;

	//for Apple
	$sql="select * from clientsexamination WHERE MEDICALTOPIC = 'STI'  group by SERVICE_EPISODE";
	$aquery=$conn->query($sql);
	$sti = $aquery->num_rows;

	//for Vivo
	$sql="select * from clientsexamination  group by SERVICE_EPISODE";
	$vquery=$conn->query($sql);
	$medical = $vquery->num_rows;

	//for Sony
	$sql="select * from hcg";
	$squery=$conn->query($sql);
	$hcg = $squery->num_rows;

	//for Nokia
	$sql="select * from family_planning";
	$nquery=$conn->query($sql);
	$fp = $nquery->num_rows;
	
	//for Samsung
	$sql="select * from anteprogress";
	$query=$conn->query($sql);
	$anc = $query->num_rows;
	
	//for Apple
	$sql="select * from postnatal_care";
	$aquery=$conn->query($sql);
	$pnc = $aquery->num_rows;
	
	//for Vivo
	$sql="select * from postabortioncare";
	$vquery=$conn->query($sql);
	$pac = $vquery->num_rows;
 
     //for Samsung
	$sql="select * from counsellingservices GROUP BY SERVICE_EPISODE";
	$query=$conn->query($sql);
	$generalcoun = $query->num_rows;
    
    //for Samsung
	$sql="select * from tollfree";
	$query=$conn->query($sql);
	$tollfree = $query->num_rows;

?>
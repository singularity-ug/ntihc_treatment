 <?php
$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "ahr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}


if(isset($_POST['FIRSTNAME'])){
$id       = trim($_POST['id']); 
$FIRSTNAME = trim($_POST['FIRSTNAME']); 
$LASTNAME    = trim($_POST['LASTNAME']);  
$OTHERNAME = trim($_POST['OTHERNAME']); 
$MARITALSTATUS    = trim($_POST['MARITALSTATUS']); 
$BIRTHDATE = trim($_POST['BIRTHDATE']); 
$MOBILEPHONE    = trim($_POST['MOBILEPHONE']);  
$PLACEOFBIRTH = trim($_POST['PLACEOFBIRTH']); 
$GENDER    = trim($_POST['GENDER']); 
$NATIONALITY = trim($_POST['NATIONALITY']); 
$RELIGION    = trim($_POST['RELIGION']);  
$HOMEPHONE = trim($_POST['HOMEPHONE']); 
$EMAIL    = trim($_POST['EMAIL']); 
$EMAIL2    = trim($_POST['EMAIL2']);        
$RESIDENTIALADDRESS = trim($_POST['RESIDENTIALADDRESS']); 
$VILLAGELC1    = trim($_POST['VILLAGELC1']);  
$PARISHLC11 = trim($_POST['PARISHLC11']); 
$SUBCOUNTYDIVISIONLC3    = trim($_POST['SUBCOUNTYDIVISIONLC3']); 
$DISTRICT    = trim($_POST['DISTRICT']);    
$RESIDENTIALADDRESSAA = trim($_POST['RESIDENTIALADDRESSAA']); 
$VILLAGELC1AA    = trim($_POST['VILLAGELC1AA']);  
$PARISHLC11AA = trim($_POST['PARISHLC11AA']); 
$SUBCOUNTYDIVISIONLC3AA    = trim($_POST['SUBCOUNTYDIVISIONLC3AA']); 
$DISTRICTAA    = trim($_POST['DISTRICTAA']);    
$FULLNAMEOFSPOUSE    = trim($_POST['FULLNAMEOFSPOUSE']); 
$NUMBEROFCHILDREN    = trim($_POST['NUMBEROFCHILDREN']);  
$BANKNAME = trim($_POST['BANKNAME']); 
$BANKBRANCH    = trim($_POST['BANKBRANCH']); 
$ACCOUNTNUMBER    = trim($_POST['ACCOUNTNUMBER']);    
$PHYSICALDEFECTS    = trim($_POST['PHYSICALDEFECTS']); 
$ANYOTHERINFORECARDINGHEALTH    = trim($_POST['ANYOTHERINFORECARDINGHEALTH']);  
$NEXTOFKINPHONEONE    = trim($_POST['NEXTOFKINPHONEONE']);  
$NEXTOFKINPHONETWO = trim($_POST['NEXTOFKINPHONETWO']); 
$NEXTOFKINPHYSICALADDRESS    = trim($_POST['NEXTOFKINPHYSICALADDRESS']); 
$NEXTOFKINPOSTALADDRESS    = trim($_POST['NEXTOFKINPOSTALADDRESS']);    
$NEXTOFKINRELATIONSHIP    = trim($_POST['NEXTOFKINRELATIONSHIP']);  
 
$FULLNAMEOFFATHER    = trim($_POST['FULLNAMEOFFATHER']);  
$FATHERPHYSICALADDRESS = trim($_POST['FATHERPHYSICALADDRESS']); 
$FULLNAMEOFMOTHER    = trim($_POST['FULLNAMEOFMOTHER']); 
$MOTHERPHYSICALADDRESS    = trim($_POST['MOTHERPHYSICALADDRESS']);    
$NEXTOFKINFIRSTNAME    = trim($_POST['NEXTOFKINFIRSTNAME']); 
$NEXTOFKINSURNAME    = trim($_POST['NEXTOFKINSURNAME']); 

$ALTNEXTOFKINFIRSTNAME    = trim($_POST['ALTNEXTOFKINFIRSTNAME']);  
$ALTNEXTOFKINSURNAME = trim($_POST['ALTNEXTOFKINSURNAME']); 
$ALTNEXTOFKINPHONEONE    = trim($_POST['ALTNEXTOFKINPHONEONE']); 
$ALTNEXTOFKINPHONETWO    = trim($_POST['ALTNEXTOFKINPHONETWO']);    
                 
$ALTNEXTOFKINPHYSICALADDRESS    = trim($_POST['ALTNEXTOFKINPHYSICALADDRESS']);  
$ALTNEXTOFKINPOSTALADDRESS = trim($_POST['ALTNEXTOFKINPOSTALADDRESS']); 
$ALTNEXTOFKINRELATIONSHIP    = trim($_POST['ALTNEXTOFKINRELATIONSHIP']); 
$SUBMISSIONLEVEL    = trim($_POST['SUBMISSIONLEVEL']);    			
                            
$PFNUMBER  = trim($_POST['PFNUMBER']); 	   
	   
$sql1="UPDATE `staffcontacts`                    SET
										  `FIRSTNAME` ='$FIRSTNAME',
		                                  `LASTNAME`='$LASTNAME', 
										  `OTHERNAME` ='$OTHERNAME',
		                                  `MARITALSTATUS`='$MARITALSTATUS',
										  `BIRTHDATE` ='$BIRTHDATE',
		                                  `MOBILEPHONE`='$MOBILEPHONE', 
										  `PLACEOFBIRTH` ='$PLACEOFBIRTH',
		                                  `GENDER`='$GENDER',
										  `NATIONALITY` ='$NATIONALITY',
		                                  `RELIGION`='$RELIGION', 
										  `HOMEPHONE` ='$HOMEPHONE',
		                                  `EMAIL`='$EMAIL',  `EMAIL2`='$EMAIL2',
										  
										  `RESIDENTIALADDRESS`='$RESIDENTIALADDRESS',  
										  `VILLAGELC1`='$VILLAGELC1', 
										  `PARISHLC11`='$PARISHLC11',  
										  `SUBCOUNTYDIVISIONLC3`='$SUBCOUNTYDIVISIONLC3',
										  `DISTRICT`='$DISTRICT',  
										  `RESIDENTIALADDRESSAA`='$RESIDENTIALADDRESSAA',  
										  `VILLAGELC1AA`='$VILLAGELC1AA',  
										  `PARISHLC11AA`='$PARISHLC11AA',
										  `SUBCOUNTYDIVISIONLC3AA`='$SUBCOUNTYDIVISIONLC3AA', 
										  `DISTRICTAA`='$DISTRICTAA',  
										   `FULLNAMEOFSPOUSE`='$FULLNAMEOFSPOUSE', 
										   `NUMBEROFCHILDREN`='$NUMBEROFCHILDREN',  
										             
										  `BANKNAME`='$BANKNAME',
										  `BANKBRANCH` ='$BANKBRANCH',
		                                  `ACCOUNTNUMBER`='$ACCOUNTNUMBER', 
										  `PHYSICALDEFECTS` ='$PHYSICALDEFECTS',
		                                  `ANYOTHERINFORECARDINGHEALTH`='$ANYOTHERINFORECARDINGHEALTH', 
										   
										  `NEXTOFKINPHONEONE`='$NEXTOFKINPHONEONE',
										  `NEXTOFKINPHONETWO` ='$NEXTOFKINPHONETWO',
		                                  `NEXTOFKINPHYSICALADDRESS`='$NEXTOFKINPHYSICALADDRESS', 
										  `NEXTOFKINPOSTALADDRESS` ='$NEXTOFKINPOSTALADDRESS',
		                                  `NEXTOFKINRELATIONSHIP`='$NEXTOFKINRELATIONSHIP', 
										  
                                               
       	                                  `FULLNAMEOFFATHER`='$FULLNAMEOFFATHER',
										  `FATHERPHYSICALADDRESS`='$FATHERPHYSICALADDRESS',
										  `FULLNAMEOFMOTHER` ='$FULLNAMEOFMOTHER',
		                                  `MOTHERPHYSICALADDRESS`='$MOTHERPHYSICALADDRESS', 
										  `NEXTOFKINFIRSTNAME` ='$NEXTOFKINFIRSTNAME',
		                                  `NEXTOFKINSURNAME`='$NEXTOFKINSURNAME', 
										  
										      
										  `ALTNEXTOFKINFIRSTNAME` ='$ALTNEXTOFKINFIRSTNAME',
		                                  `ALTNEXTOFKINSURNAME`='$ALTNEXTOFKINSURNAME', 
										  `ALTNEXTOFKINPHONEONE` ='$ALTNEXTOFKINPHONEONE',
		                                  `ALTNEXTOFKINPHONETWO`='$ALTNEXTOFKINPHONETWO',  
										  
										  `ALTNEXTOFKINPHYSICALADDRESS` ='$ALTNEXTOFKINPHYSICALADDRESS',
		                                  `ALTNEXTOFKINPOSTALADDRESS`='$ALTNEXTOFKINPOSTALADDRESS', 
										  `ALTNEXTOFKINRELATIONSHIP` ='$ALTNEXTOFKINRELATIONSHIP',
		                                  `SUBMISSIONLEVEL`='$SUBMISSIONLEVEL',  
												
										  `PFNUMBER`='$PFNUMBER'
                                           WHERE id='$id'";
                                   if($conn->query($sql1)){ header("location:../sys_dashboard.php");exit();}
								   else{ echo 'Error : '.$conn->error; exit();}

                                  }

                                    ?>

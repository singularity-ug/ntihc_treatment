 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procurement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['DATECREATED'])){

$dnx =array(); $fqx =array();  $variance =array();  $remdrt =array();  $lcn =array();  $pdx =array(); $qtyx =array();
 
$DATECREATED  = trim($_POST['DATECREATED']); 
$ORDERTYPE = trim($_POST['ORDERTYPE']);
$ORDERSERIALID     = trim($_POST['ORDERSERIALID']);
$FACILITYNANE = trim($_POST['FACILITYNANE']);   

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx']; 
  $variance   =       $_POST['variance']; 
  $remdrt      =       $_POST['remdrt']; 
  $lcn      =       $_POST['lcn'];
  $pdx   =       $_POST['pdx'];
  $qtyx      =       $_POST['qtyx'];
 
}

$m = date("m");
$y = date("Y");

$i=0;
for($i=0;$i<count($dnx);$i++){
 
$DESCRIPTION =$dnx[$i];
$QTYINSTOCK  = $fqx[$i]; 
$QTYISSUED   = $variance[$i]; 
$COLLECTEDBY   = $remdrt[$i]; 
$COLLTITLE   = $lcn[$i];      
$PURPOSE  =  $pdx[$i];  
$STOCKBAL  =  $qtyx[$i];      

$REQUISTIONTYPE  = trim($_POST['REQUISTIONTYPE']); 
$ISSBY = trim($_POST['ISSBY']);   
$ISSBYNAME = trim($_POST['ISSBYNAME']); 
$ISSBYDATE = trim($_POST['ISSBYDATE']);
$SRFNO = trim($_POST['SRFNO']);
$STOCKOUTCOMMENT = trim($_POST['STOCKOUTCOMMENT']);

  $sql1="INSERT INTO `procurement`.`outgoingorders` (`DATECREATED`, 
                                                         `ORDERTYPE`,
											             `ORDERSERIALID`,
													     `FACILITYNANE`, 
														 
															 `DESCRIPTION`,
													         `QTYINSTOCK`, 
                                                             `QTYISSUED`, 
                                                             `COLLECTEDBY`, 
													         `COLLTITLE`,
													         `PURPOSE`,
															 `STOCKBAL`, 
															 `FISCALMONTH`,
													         `FISCALYEAR`, 
															 `REQUISTIONTYPE`, 
													         `ISSBY`, 
															 `ISSBYNAME`,  
															 `ISSBYDATE`,
															 `SRFNO`, 
															 `STOCKOUTCOMMENT`)
															 
                                               VALUES (NOW(), 
                                                      '$ORDERTYPE',
													  '$ORDERSERIALID',
													  '$FACILITYNANE',
													  
													   '$DESCRIPTION',
													   '$QTYINSTOCK', 
                                                       '$QTYISSUED',
                                                       '$COLLECTEDBY',
                                                       '$COLLTITLE',
                                                       '$PURPOSE',
													   '$STOCKBAL', 
													   '$m',
													   '$y', 
													         'GENERAL', 
													         '$ISSBY', 
															 '$ISSBYNAME',  
															 '$ISSBYDATE',
															 '$SRFNO', 
															 '$STOCKOUTCOMMENT')";

                                  $conn->query($sql1);
								  
								   mysqli_query($conn, "UPDATE `items` SET `QTYISSUED` = (`QTYISSUED` + '$QTYISSUED') 
								   WHERE  `DESCRIPTION` = '$dnx[$i]'");	

						}
						}
                         header("location:stores_mgt.php");
                                exit();

                                    ?> 
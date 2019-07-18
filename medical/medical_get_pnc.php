 


<?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
$rm         = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];

$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
$rm = $_SESSION['MREPEAT']; 
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}
 ?>

<?php 
  $id =  $_POST['bb'];  
  $DATECREATED = '';
  $FIRSTNAME = '';
  $LASTNAME  = '';
  $OTHERNAME = '';
  $SEX = '';
  $AGE = '';
  $AGE1 = ''; 
  $SCHOOLINGSTATUS = '';
  $HIGHESTLEVELOFEDUCATION = '';
  $MARITALSTATUS = '';
  $EMPLOYMENTSTATUS = '';
  $DISTRICT = '';
  $DIVISION = '';
  $PLACEOFRESIDENCE = '';
  $PHONECONTACT = '';
  $MOTHERFIRSTNAME = '';
  $MOTHERLASTNAME='';
  $FATHERFIRSTNAME='';
  $FATHERLASTNAME='';
  $LIVINGWITH='';
  $HEAREDABOUTNTIHC='';
  $REGISTEREDBY='';
  $REGISTERACCOUNT=''; 
  $NTIHCNO='';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";

 $res = $conn->query($sql);
 
 if($res){}
 else{echo $conn->error; exit();}

     while($row=$res->fetch_assoc()){
	  
	 $NTIHCNO     = $row['NTIHCNO'];  
	 $DATECREATED = $row['DATECREATED'];
     $FIRSTNAME   = $row['FIRSTNAME'];
     $LASTNAME    = $row['LASTNAME'];
     $OTHERNAME   = $row['OTHERNAME'];
     $SEX         = $row['SEX'];
     $AGE         = $row['AGE'];
	 $AGE1        = $row['AGE1'];
     $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS'];
     $HIGHESTLEVELOFEDUCATION = $row['HIGHESTLEVELOFEDUCATION'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EMPLOYMENTSTATUS = $row['EMPLOYMENTSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $DIVISION = $row['DIVISION'];
     $PLACEOFRESIDENCE = $row['PLACEOFRESIDENCE'];
     $PHONECONTACT = $row['PHONECONTACT'];
     $MOTHERFIRSTNAME  = $row['MOTHERFIRSTNAME'];
     $MOTHERLASTNAME=$row['MOTHERLASTNAME'];
     $FATHERFIRSTNAME=$row['FATHERFIRSTNAME'];
     $FATHERLASTNAME=$row['FATHERLASTNAME'];
     $LIVINGWITH =$row['LIVINGWITH'];
     $HEAREDABOUTNTIHC=$row['HEAREDABOUTNTIHC'];
     $REGISTEREDBY=$row['REGISTEREDBY']; 
      } 
	 
     ?>
	 
	 
    <form id="form1" class="form-horizontal" action="medical/pnc_updatedem.php" method="POST" style="height:auto; font-weight:normal;"> 
            
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
                <th style="width:10%; text-align:left;border:0px; ">Client&nbsp;No. </th>
                <th style="width:15%; text-align:left;">
				 <input type="text" name="NTIHCNO"  value="<?php echo $NTIHCNO;?>" 
					 readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"></th>
				
                <th style="width:10%; text-align:left;border:0px; ">Enroll&nbsp;date </th>
                <th style="width:15%; text-align:left;">
				<input type="date" name="DATECREATED"  value="<?php echo $DATECREATED;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"></th>
				
				<th style="width:10%; text-align:left;border:0px; ">First&nbsp;date </th>
                <th style="width:15%; text-align:left;"><input type="text"    name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"></th>
				
				<th style="width:10%; text-align:left;border:0px; "> Last&nbsp;name</th>
                <th style="width:15%; text-align:left;"><input type="text"   name="LASTNAME"  value="<?php echo $LASTNAME;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"></th> 
			  
			 </tr>     </table>
			 
               

<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
                <th style="width:10%; text-align:left;border:0px; ">Other name </th>
                <th style="width:15%; text-align:left;">
				  <input type="text"   name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"></th>
				
                <th style="width:10%; text-align:left;border:0px; ">Age   </th>
                <th style="width:15%; text-align:left;">
				<input type="numeric" name="AGE1" id="AGE1"  value="<?php echo $AGE1;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"></th>
				
				<th style="width:10%; text-align:left;border:0px; ">Gender  </th>
                <th style="width:15%; text-align:left;"><input type="text"  name="SEX" value="<?php echo $SEX;?>" 
						readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"> </th>
				
				<th style="width:10%; text-align:left;border:0px; "> Schooling </th>
                <th style="width:15%; text-align:left;"><input type="text"   name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"> </th> 
			  
			 </tr>     </table>
			  

 
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
                <th style="width:10%; text-align:left;border:0px; ">Education level </th>
                <th style="width:15%; text-align:left;">
				  <input type="text"   name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" 
					   readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"> </th>
				
                <th style="width:10%; text-align:left;border:0px; ">Marital status  </th>
                <th style="width:15%; text-align:left;">
				<input type="text"   name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" 
							  readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"> </th>
				
				<th style="width:10%; text-align:left;border:0px; ">Employ ment </th>
                <th style="width:15%; text-align:left;"><input type="text"   name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>"
				   readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;">  </th>
				
				<th style="width:10%; text-align:left;border:0px; "> District  </th>
                <th style="width:15%; text-align:left;"><input type="text"  name="DISTRICT" value="<?php echo $DISTRICT;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%;">  </th>  
			    </tr>  </table>
			  
                    
        
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
                <th style="width:10%; text-align:left;border:0px; ">Division  </th>
                <th style="width:15%; text-align:left;">
				 <input type="text"  name="DIVISION" value="<?php echo $DIVISION;?>" readonly="readonly" 
				  style="font-weight:normal; background-color:transparent;width:100%;"> </th>
				
                <th style="width:10%; text-align:left;border:0px; ">Village    </th>
                <th style="width:15%; text-align:left;">
				<input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE"   value="<?php echo $PLACEOFRESIDENCE;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"></th>
				
				<th style="width:10%; text-align:left;border:0px; ">Phone No.  </th>
                <th style="width:15%; text-align:left;"> <input type="text" name="PHONECONTACT"  id="PHONECONTACT"   value="<?php echo $PHONECONTACT;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;">  </th>
				
				<th style="width:10%; text-align:left;border:0px; "> Mother name </th>
                <th style="width:15%; text-align:left;"><input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME"  value="<?php echo $MOTHERFIRSTNAME;?>"  
					readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;">  </th>  
			    </tr>  </table>
			         
    
                    <input type="hidden" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"   value="<?php echo $MOTHERLASTNAME;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;">
					
                  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
                <th style="width:10%; text-align:left;border:0px; ">Father name </th>
                <th style="width:15%; text-align:left;">
				<input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME"  value="<?php echo $FATHERFIRSTNAME;?>"  
					style="font-weight:normal; background-color:transparent;width:100%;"> </th>
				
                <th style="width:10%; text-align:left;border:0px; ">Living with   </th>
                <th style="width:15%; text-align:left;">
				<input type="text"   name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>"
				 readonly="readonly" style="font-weight:normal; background-color:transparent;width:100%;"> </th>
				
				<th style="width:10%; text-align:left;border:0px; ">  </th>
                <th style="width:15%; text-align:left;">  </th>
				
				<th style="width:10%; text-align:left;border:0px; ">  </th>
                <th style="width:15%; text-align:left;">   </th>  
			    </tr>  </table>
			         
		 
                    <input type="hidden" name="FATHERLASTNAME"  id="FATHERLASTNAME"   value="<?php echo $FATHERLASTNAME;?>" 
					style="font-weight:normal; background-color:transparent;"> 
                     
    </form>
	
		<?php 
  $id =  $_POST['bb']; 
  $NTIHCNO=''; 
  $DATECREATED = '';
  $PNCSTATUS = '';
  $VITA  = '';
  $IPV = '';
  $PCV = ''; 
  $DPT = ''; 
  $OPV = '';  
  $BCG = ''; 
  
  $INR_NO  = '';
  $MU_AC = '';
  $eMTCTCODESP = ''; 
  $eMTCTCODESW = ''; 
  $PVBLEEDING = '';  
  $STATUSOFCERVIX = ''; 
  
  $STATUSOFBREAST = ''; 
  $FAMILYPLANNINGMETHOD = '';  
  $TIMINGFORPNCVIST = ''; 
  $PNCDATASTATUS = '';   
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM postnatal_care WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";

 $res = $conn->query($sql);
 
 if($res){}
 else{echo $conn->error; exit();}

     while($row=$res->fetch_assoc()){
	                  
	 $NTIHCNO     = $row['NTIHCNO'];  
	 $DATECREATED = $row['DATECREATED'];
     $id   = $row['id'];
     $PNCSTATUS    = $row['PNCSTATUS'];
     $VITA   = $row['VITA'];
     $IPV         = $row['IPV']; 
     $PCV = $row['PCV']; 
	 $DPT = $row['DPT']; 
     $OPV = $row['OPV'];
	 
	 $BCG   = $row['BCG'];
     $INR_NO    = $row['INR_NO'];
     $MU_AC   = $row['MU_AC'];
     $eMTCTCODESP         = $row['eMTCTCODESP']; 
     $eMTCTCODESW = $row['eMTCTCODESW']; 
	 $PVBLEEDING = $row['PVBLEEDING']; 
     $STATUSOFCERVIX = $row['STATUSOFCERVIX']; 
	 
	 $STATUSOFBREAST = $row['STATUSOFBREAST']; 
	 $FAMILYPLANNINGMETHOD = $row['FAMILYPLANNINGMETHOD']; 
     $TIMINGFORPNCVIST = $row['TIMINGFORPNCVIST'];
	 $PNCDATASTATUS = $row['PNCDATASTATUS'];
      }  
     ?>
			
    <hr>
	<form id="form1" class="form-horizontal" action="medical/pnc_updatedem.php" method="POST" style="height:auto; font-weight:normal;"> 
	
	<input type="hidden"  name="id" id="id" value="<?php echo $id;?>">
	<input type="hidden"  name="NTIHCNO" id="NTIHCNO" value="<?php echo $NTIHCNO;?>">
	
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
              <th style="width:25%;border:0px;">Timing for PNC vist</th>
        <th style="width:25%;border:0px;"> <select  name="TIMINGFORPNCVIST" id="TIMINGFORPNCVIST" value="<?php echo $TIMINGFORPNCVIST;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $TIMINGFORPNCVIST;?>"> <?php echo $TIMINGFORPNCVIST;?></option>
                                                   <option>6 HOURS</option>
                                                   <option>6 DAYS</option>
                                                   <option>6 WEEKS</option>
                                                   <option>6 MONTHS</option>
                                                   </select>
        </th>
        <th style="width:25%;border:0px;">FP method given</th>
        <th style="width:25%;border:0px;"> <select  name="FAMILYPLANNINGMETHOD"  id="FAMILYPLANNINGMETHOD" value="<?php echo $FAMILYPLANNINGMETHOD;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $FAMILYPLANNINGMETHOD;?>"> <?php echo $FAMILYPLANNINGMETHOD;?></option>
                 <option>IMPLANON</option>
                 <option>JADELA</option>
                 <option>PILLS</option>
                 <option>CONDOMS</option>
                 <option>DEPO PROVERA</option>
                 <option>IUD</option>
                 <option>NORISTERAT</option>
                 <option>NORIGYNON</option>
				 <option>SAYANA PRESS </option>
                 </select>
			  </th>
              </tr>
              </table>
		
		 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
              <th style="width:25%;border:0px;">Status of breast</th>
        <th style="width:25%;border:0px;"> <select  name="STATUSOFBREAST" id="STATUSOFBREAST" value="<?php echo $STATUSOFBREAST;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $STATUSOFBREAST;?>"> <?php echo $STATUSOFBREAST;?></option>
                                                   <option>NORMAL</option>
                                                   <option>ABNOMAL</option> 
                                                   </select>
        </th>
        <th style="width:25%;border:0px;">Status of cervix</th>
        <th style="width:25%;border:0px;"> <select  id="STATUSOFCERVIX" input name="STATUSOFCERVIX" value="<?php echo $STATUSOFCERVIX;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $STATUSOFCERVIX;?>"> <?php echo $STATUSOFCERVIX;?></option>
                                                   <option>NORMAL</option>
                                                   <option>ABNOMAL</option> 
                                                   </select>
												   </th>
              </tr>
        </table>
		
		 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
              <th style="width:25%;border:0px;">PVB bleeding</th>
        <th style="width:25%;border:0px;"> <select  id="PVBLEEDING" name="PVBLEEDING" value="<?php echo $PVBLEEDING;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $PVBLEEDING;?>"> <?php echo $PVBLEEDING;?></option>
                                                <option>NORMAL</option>
                                                <option>HIGH</option>
                                                <option>SPONTANEOUS</option>
                                                   </select>
        </th>
        <th style="width:25%;border:0px;"> </th>
        <th style="width:25%;border:0px;">   </th>
              </tr>
        </table>
		
		 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
              <th style="width:25%;border:0px;">eMTCT codes(W)</th>
        <th style="width:25%;border:0px;"> <select  id="eMTCTCODESW" name="eMTCTCODESW" value="<?php echo $eMTCTCODESW;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $eMTCTCODESW;?>"><?php echo $eMTCTCODESW;?> </option>
                <option>TR</option>
                <option>TRK</option>
                <option>TRR</option>
                <option>TRRK</option>
                <option>TRRT</option>
                <option>TRR+</option>
                <option>TRR+</option>
                                                   </select>
        </th>
        <th style="width:25%;border:0px;"> eMTCT codes(p)</th>
        <th style="width:25%;border:0px;"> <select  id="eMTCTCODESP" name="eMTCTCODESP" value="<?php echo $eMTCTCODESP;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $eMTCTCODESP;?>"> <?php echo $eMTCTCODESP;?></option>
                <option>TR</option>
                <option>TRK</option>
                <option>TRR</option>
                <option>TRRK</option>
                <option>TRRT</option>
                <option>TRR+</option>
                <option>TRR+</option>
                                                   </select>  </th>
              </tr>
        </table>
		
		 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
              <th style="width:25%;border:0px;">MU_AC</th>
        <th style="width:25%;border:0px;"> <input type="text"  name="MU_AC"  id="MU_AC" value="<?php echo $MU_AC;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
        </th>
		
        <th style="width:25%;border:0px;">INR_No</th>
        <th style="width:25%;border:0px;"> <input type="text" name="INR_NO"  id="INR_NO" value="<?php echo $INR_NO;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
												   </th>
              </tr>
        </table>
		<p></p>
		<label>Immunization</label>
		 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
              <th style="width:10%;border:0px;">BCG</th>
        <th style="width:15%;border:0px;"> <select  id="BCG" name="BCG" value="<?php echo $BCG;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $BCG;?>"><?php echo $BCG;?> </option>
                <option>YES</option>
                <option>NO</option> 
                </select>
        </th>
        <th style="width:10%;border:0px;">OPV</th>
        <th style="width:15%;border:0px;"> <select  id="OPV" name="OPV" value="<?php echo $OPV;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $OPV;?>"> <?php echo $OPV;?></option>
                <option>0</option>
				<option>1</option>
                <option>2</option>
				<option>3</option>
                </select>  </th>
				 
        <th style="width:10%;border:0px;">DPT</th>
        <th style="width:15%;border:0px;"> <select  id="DPT" name="DPT" value="<?php echo $DPT;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $DPT;?>"><?php echo $DPT;?> </option>
                <option>1</option>
                <option>2</option>
				<option>3</option> 
                </select>  </th>
				
				<th style="width:10%;border:0px;">PCV</th>
        <th style="width:15%;border:0px;"> <select  id="PCV" name="PCV" value="<?php echo $PCV;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $PCV;?>"> <?php echo $PCV;?></option>
                <option>1</option>
                <option>2</option>
				<option>3</option> 
                </select>  </th>
              </tr>
        </table>
		
		 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
              <th style="width:10%;border:0px;">IPV</th>
        <th style="width:15%;border:0px;"> <select  id="IPV" name="IPV" value="<?php echo $IPV;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $IPV;?>"> <?php echo $IPV;?></option>
                <option>YES</option>
                <option>NO</option> 
                </select>
        </th>
        <th style="width:10%;border:0px;">VIT A</th>
        <th style="width:15%;border:0px;"> <select  id="VITA" name="VITA" value="<?php echo $VITA;?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                   <option value="<?php echo $VITA;?>"><?php echo $VITA;?></option>
                <option>YES</option>
                <option>NO</option>
                </select>  </th>
				 
        <th style="width:10%;border:0px;">  </th>
        <th style="width:15%;border:0px;"></th>
				
				<th style="width:10%;border:0px;"> </th> 
				
        <th style="width:15%;border:0px;">  
		  </th>
              </tr>
        </table>
		<p></p>
		
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <th style="width:10%;border:0px;"> </th>
        <th style="width:15%;border:0px;"> </th>
        <th style="width:10%;border:0px;">   </th>
        <th style="width:15%;border:0px;">  </th>
				 
        <th style="width:10%;border:0px;"> Data Staus</th>
        <th style="width:15%;border:0px;"><input type="text"  id="PNCDATASTATUS" name="PNCDATASTATUS" value="<?php echo $PNCDATASTATUS;?>" readonly=""
		style="width:100%; font-weight:normal; background-color:transparent;" /></th>
				
				<th style="width:10%;border:0px;"><input type="submit" name="button" id="button" value="Update" /> </th>
				</form>
				
        <th style="width:15%;border:0px;"> 
		<form id="form1" class="form-horizontal" action="medical/pnc_idgenerator.php" method="POST" style="height:auto; font-weight:normal;"> 
		
<?php 
  $id =  $_POST['bb'];  
  $DATECREATED = '';
  $FIRSTNAME = '';
  $LASTNAME  = '';
  $OTHERNAME = '';
  $SEX = ''; 
  $SCHOOLINGSTATUS = ''; 
  $EMPLOYMENTSTATUS = '';  
  $PHONECONTACT = ''; 
  $NTIHCNO='';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";

 $res = $conn->query($sql);
 
 if($res){}
 else{echo $conn->error; exit();}

     while($row=$res->fetch_assoc()){
	  
	 $NTIHCNO     = $row['NTIHCNO'];  
	 $DATECREATED = $row['DATECREATED'];
     $FIRSTNAME   = $row['FIRSTNAME'];
     $LASTNAME    = $row['LASTNAME'];
     $OTHERNAME   = $row['OTHERNAME'];
     $SEX         = $row['SEX']; 
     $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS']; 
	 $PHONECONTACT = $row['PHONECONTACT']; 
     $EMPLOYMENTSTATUS = $row['EMPLOYMENTSTATUS']; 
      } 
	 
     ?>
		
		
		<input type="hidden" name="DATECREATED" id="DATECREATED" value="<?php echo date('d-m-y'); ?>" >
		<input type="hidden" name="NTIHCNO" id="NTIHCNO" value="<?php echo $NTIHCNO;?>">
		<input type="hidden" name="CLIENTNAME" id="CLIENTNAME" value="<?php echo $FIRSTNAME;?> <?php echo $LASTNAME;?>">
		<input type="hidden" name="SCHOOLING" id="SCHOOLING" value="<?php echo $SCHOOLINGSTATUS;?>">
		<input type="hidden" name="EMPLOYMENT" id="EMPLOYMENT" value="<?php echo $EMPLOYMENTSTATUS;?>">
		<input type="hidden" name="PHONECONTACT" id="PHONECONTACT" value="<?php echo $PHONECONTACT;?>">
		<input type="hidden" name="PNCDATASTATUS" id="PNCDATASTATUS" value="FILL FORM" >
		   
		<input type="submit" name="button" id="button" value="Generate episode" class="data_toggle="tooltip" title="Generate new episode" />
		</form>
		  </th>
         </tr>
        </table>
		
		<HR>
		<BR>
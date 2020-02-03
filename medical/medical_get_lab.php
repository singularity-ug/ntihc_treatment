 


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
	 
	
    <form id="form1" class="form-horizontal" action="medical/pnc_updatedem.php" method="POST" style="height:auto; font-weight:normal; font-size:10px;"> 
            
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
                <th style="width:13.33333333%; text-align:left;border:0px; ">Client&nbsp;No. </th>
                <th style="width:20%; text-align:left;">
				 <input type="text" name="NTIHCNO"  value="<?php echo $NTIHCNO;?>" 
					 readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"></th>
				
                <th style="width:13.33333333%; text-align:left;border:0px; ">Enroll&nbsp;date </th>
                <th style="width:20%; text-align:left;">
				<input type="text" name="DATECREATED"  value="<?php echo $DATECREATED;?>" 
					readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"></th>
				
				<th style="width:13.33333333%; text-align:left;border:0px; ">First&nbsp;name </th>
                <th style="width:20%; text-align:left;"><input type="text"    name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" 
					readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"></th>
				 
			 </tr>     </table>
			 
               

<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
	 
	 <th style="width:13.33333333%; text-align:left;border:0px; "> Last&nbsp;name</th>
                <th style="width:20%; text-align:left;"><input type="text"   name="LASTNAME"  value="<?php echo $LASTNAME;?>" 
				   readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"></th> 
			  
                <th style="width:13.33333333%; text-align:left;border:0px; ">Other name </th>
                <th style="width:20%; text-align:left;">
				  <input type="text"   name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" 
				   readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"></th>
				
                <th style="width:13.33333333%; text-align:left;border:0px; ">Age   </th>
                <th style="width:20%; text-align:left;">
				<input type="numeric" name="AGE1" id="AGE1"  value="<?php echo $AGE1;?>" 
					readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"></th>
				 
			 </tr>     </table>
			  

 
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
	 
	 <th style="width:13.33333333%; text-align:left;border:0px; ">Gender  </th>
                <th style="width:20%; text-align:left;"><input type="text"  name="SEX" value="<?php echo $SEX;?>" 
						readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"> </th>
				
				<th style="width:13.33333333%; text-align:left;border:0px; "> Schooling </th>
                <th style="width:20%; text-align:left;"><input type="text"   name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" 
					readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"> </th> 
			  
	  
                <th style="width:13.33333333%; text-align:left;border:0px; ">Education level </th>
                <th style="width:20%; text-align:left;">
				  <input type="text"   name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" 
					   readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"> </th>
				 
			    </tr>  </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
				<th style="width:13.33333333%; text-align:left;border:0px; ">Marital status  </th>
                <th style="width:20%; text-align:left;">
				<input type="text"   name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" 
							  readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"> </th>
				
				<th style="width:13.33333333%; text-align:left;border:0px; ">Employ ment </th>
                <th style="width:20%; text-align:left;"><input type="text"   name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>"
				   readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;">  </th>
				
				<th style="width:13.33333333%; text-align:left;border:0px; "> District  </th>
                <th style="width:20%; text-align:left;"><input type="text"  name="DISTRICT" value="<?php echo $DISTRICT;?>" 
				   readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent; width:100%; height:20px;">  </th>  
			  </tr>  </table>
                    
        
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
                <th style="width:13.33333333%; text-align:left;border:0px; ">Division  </th>
                <th style="width:20%; text-align:left;">
				 <input type="text"  name="DIVISION" value="<?php echo $DIVISION;?>" readonly="readonly" 
				  style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"> </th>
				
                <th style="width:13.33333333%; text-align:left;border:0px; ">Village    </th>
                <th style="width:20%; text-align:left;">
				<input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE"   value="<?php echo $PLACEOFRESIDENCE;?>" 
					readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;"></th>
				
				<th style="width:13.33333333%; text-align:left;border:0px; ">Phone No.  </th>
                <th style="width:20%; text-align:left;"> <input type="text" name="PHONECONTACT"  id="PHONECONTACT"   value="<?php echo $PHONECONTACT;?>" 
					readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%; height:20px;">  </th>
				 
			    </tr>  </table>
			         
    
                    <input type="hidden" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"   value="<?php echo $MOTHERLASTNAME;?>" 
					readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;">
					
					
                  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
     <thead> <tr> 
	 	<th style="width:13.33333333%; text-align:left;border:0px; "> Mother name </th>
                <th style="width:20%; text-align:left;"><input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME"  value="<?php echo $MOTHERFIRSTNAME;?>"  
					readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%;height:20px;">  </th>  
	 
                <th style="width:13.33333333%; text-align:left;border:0px; ">Father name </th>
                <th style="width:20%; text-align:left;">
				<input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME"  value="<?php echo $FATHERFIRSTNAME;?>"  
					style="font-weight:normal; font-size:10px; background-color:transparent;width:100%;height:20px;"> </th>
				
                <th style="width:13.33333333%; text-align:left;border:0px; ">Living with   </th>
                <th style="width:20%; text-align:left;">
				<input type="text"   name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>"
				 readonly="readonly" style="font-weight:normal; font-size:10px; background-color:transparent;width:100%;height:20px;"> </th>
				 
			    </tr>  </table>
			         
		 
                    <input type="hidden" name="FATHERLASTNAME"  id="FATHERLASTNAME"   value="<?php echo $FATHERLASTNAME;?>" 
					style="font-weight:normal; font-size:10px; background-color:transparent;"> 
                     
    </form>
	
<hr />

 <form class="form-horizontal"  method="post" action="tollfree.php" style="height: auto;background-color:transparent;"> 

  <?php 
  $id = $id ;  
  $RSVNID = ''; 
  $dnx    = array();
  $fqx    = array(); 
   $aa    = array();
   $dd    = array();  
  $DATECREATED = '';
  //$NTIHCNO = '';   
  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT TEST_TYPE, TIMESTAMP FROM examination_lab_request WHERE NTIHCNO = '$id' AND STATUS = 0";
  
 $res = $conn->query($sql);
    ?>
	   
	   <p>Required Tests</p>
	  <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; ">
    <thead>
      <tr>  
	   <th>CREATED DATE</th>
       <th>TEST DESCRIPTION </th>   
      </tr>
      </thead>
      <tbody>
 <?php while($row=$res->fetch_assoc()){
        $test = $row['TEST_TYPE'];  
        $timestamp = $row['TIMESTAMP'];  	 
     ?>
    <tr>
        <td>
            <input type="text" value="<?php echo $timestamp; ?>" readonly="true" style= "width:100%; background-color:#fff; "/>
		</td>
        <td>
            <input type="text" value="<?php echo $test; ?>" readonly="true" style= "width:100%; background-color:#fff; "/>
		</td>                                          
    </tr>
  <?php } ?>
</tbody>
        </table>  
      
    </tbody>
  </table>  
    
  </form>   
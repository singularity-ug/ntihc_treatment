<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['PID']); 
	$DATECREATED = mysqli_real_escape_string($mysqli, $_POST['DATECREATED']);
	$FIRSTNAME = mysqli_real_escape_string($mysqli, $_POST['FIRSTNAME']);
	$LASTNAME = mysqli_real_escape_string($mysqli, $_POST['LASTNAME']);	
	$OTHERNAME = mysqli_real_escape_string($mysqli, $_POST['OTHERNAME']);
	$SCHOOLINGSTATUS = mysqli_real_escape_string($mysqli, $_POST['SCHOOLINGSTATUS']);
	$SEX = mysqli_real_escape_string($mysqli, $_POST['SEX']);	
	$AGE = mysqli_real_escape_string($mysqli, $_POST['AGE']);
	$AGE1 = mysqli_real_escape_string($mysqli, $_POST['AGE1']);
	$HIGHESTLEVELOFEDUCATION = mysqli_real_escape_string($mysqli, $_POST['HIGHESTLEVELOFEDUCATION']);	
	$MARITALSTATUS = mysqli_real_escape_string($mysqli, $_POST['MARITALSTATUS']);
	$EMPLOYMENTSTATUS = mysqli_real_escape_string($mysqli, $_POST['EMPLOYMENTSTATUS']);
	$DISTRICT = mysqli_real_escape_string($mysqli, $_POST['DISTRICT']);	
	$DIVISION = mysqli_real_escape_string($mysqli, $_POST['DIVISION']);
	$PLACEOFRESIDENCE = mysqli_real_escape_string($mysqli, $_POST['PLACEOFRESIDENCE']);
	$PHONECONTACT = mysqli_real_escape_string($mysqli, $_POST['PHONECONTACT']);	
	$MOTHERFIRSTNAME = mysqli_real_escape_string($mysqli, $_POST['MOTHERFIRSTNAME']);
	$MOTHERLASTNAME = mysqli_real_escape_string($mysqli, $_POST['MOTHERLASTNAME']);
	$FATHERFIRSTNAME = mysqli_real_escape_string($mysqli, $_POST['FATHERFIRSTNAME']);	 
	$LIVINGWITH = mysqli_real_escape_string($mysqli, $_POST['LIVINGWITH']);	
	$HEAREDABOUTNTIHC = mysqli_real_escape_string($mysqli, $_POST['HEAREDABOUTNTIHC']);
	$REGISTEREDBY = mysqli_real_escape_string($mysqli, $_POST['REGISTEREDBY']);
	$REGISTERACCOUNT = mysqli_real_escape_string($mysqli, $_POST['REGISTERACCOUNT']);	
	 
	// checking empty fields
	if(empty($FIRSTNAME) || empty($LASTNAME) || empty($SCHOOLINGSTATUS)) {	
			
		if(empty($FIRSTNAME)) {
			echo "<font color='red'>FIRST NAME field is empty.</font><br/>";
		}
		
		if(empty($LASTNAME)) {
			echo "<font color='red'>LAST NAME field is empty.</font><br/>";
		}
		
		if(empty($SCHOOLINGSTATUS)) {
			echo "<font color='red'>SCHOOLING STATUS field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE cmpatientsnewregistration SET 
		          FIRSTNAME='$FIRSTNAME',
				  LASTNAME='$LASTNAME',
				  SCHOOLINGSTATUS='$SCHOOLINGSTATUS' 
				  DATECREATED='$DATECREATED',
				  OTHERNAME='$OTHERNAME',
				  SEX='$SEX' 
				  AGE='$AGE',
				  AGE1='$AGE1',
				  HIGHESTLEVELOFEDUCATION='$HIGHESTLEVELOFEDUCATION' 
				  MARITALSTATUS='$MARITALSTATUS',
				  EMPLOYMENTSTATUS='$EMPLOYMENTSTATUS',
				  DISTRICT='$DISTRICT' 
				  DIVISION='$DIVISION' 
				  PLACEOFRESIDENCE='$PLACEOFRESIDENCE'  
				  PHONECONTACT='$PHONECONTACT'   
				  MOTHERFIRSTNAME='$MOTHERFIRSTNAME',
				  MOTHERLASTNAME='$MOTHERLASTNAME' 
				  FATHERFIRSTNAME='$FATHERFIRSTNAME',
				  FATHERLASTNAME='$FATHERLASTNAME',
				  LIVINGWITH='$LIVINGWITH' 
				  HEAREDABOUTNTIHC='$HEAREDABOUTNTIHC' 
				  REGISTEREDBY='$REGISTEREDBY'  
				  REGISTERACCOUNT='$REGISTERACCOUNT'    
				  WHERE PID=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: ../registration_desk.php");
	}
}
?>
 
<?php
//getting id from url
$id = $_GET['PID'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsnewregistration WHERE PID=$id");

while($res = mysqli_fetch_array($result))
{
	$FIRSTNAME = $res['FIRSTNAME'];
	$LASTNAME = $res['LASTNAME'];
	$SCHOOLINGSTATUS = $res['SCHOOLINGSTATUS']; 
	$DATECREATED = $res['DATECREATED'];
	$OTHERNAME = $res['OTHERNAME'];
	$SEX = $res['SEX']; 
	$AGE = $res['AGE'];
	$AGE1 = $res['AGE1'];
	$HIGHESTLEVELOFEDUCATION = $res['HIGHESTLEVELOFEDUCATION']; 
	$MARITALSTATUS = $res['MARITALSTATUS'];
	$EMPLOYMENTSTATUS = $res['EMPLOYMENTSTATUS'];
	$DISTRICT = $res['DISTRICT']; 
	$DIVISION = $res['DIVISION'];
	$PLACEOFRESIDENCE = $res['PLACEOFRESIDENCE'];
	$PHONECONTACT = $res['PHONECONTACT']; 
	$MOTHERFIRSTNAME = $res['MOTHERFIRSTNAME'];
	$MOTHERLASTNAME = $res['MOTHERLASTNAME'];
	$FATHERFIRSTNAME = $res['FATHERFIRSTNAME']; 
	$FATHERLASTNAME = $res['FATHERLASTNAME'];
	$LIVINGWITH = $res['LIVINGWITH'];
	$HEAREDABOUTNTIHC = $res['HEAREDABOUTNTIHC']; 
	$REGISTEREDBY = $res['REGISTEREDBY'];
	$REGISTERACCOUNT = $res['REGISTERACCOUNT']; 
}
?>
<html>
<head>	
	<title>Edit Data</title>
     
</head>

<body>
	<a href="../registration_desk.php" >Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit_demo.php">
	 
    <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:50%;"> </th>
        <th style="border-bottom-color:white;font-weight:bold; width:50%;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  value="<?php echo $DATECREATED;?>" class="form-control">
                </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" required="required "/>
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  value="<?php echo $LASTNAME;?>" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" />
                   </div>
                </div>
                <!-- /.form-group -->


                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Gender</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="SEX" value="<?php echo $SEX;?>" required="required">
			                  <option value="<?php echo $SEX;?>"> <?php echo $SEX;?> </option> 
                        <option value="FEMALE">FEMALE</option>
                        <option value="MALE">MALE</option>
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date of birth</label>
                    <div class="col-sm-8">
                   <input type="date" name="AGE" onSelect="agecalc()" onChange="agecalc()"  id="datepicker1"   value="<?php echo $AGE;?>" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <div class="col-sm-12">
                    <input type="text" name="AGE1" id="AGE1" class="form-control" value="<?php echo $AGE1;?>"  />
                   </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Schooling</label>
                    <div class="col-sm-8"> 
                    <select class="form-control" name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" required="required">
			                  <option value="<?php echo $SCHOOLINGSTATUS;?>"> <?php echo $SCHOOLINGSTATUS;?> </option>
                              <option value="IS">IS</option>
                    <option value="OS">OS</option>
                        </select>
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Education</label>
                    <div class="col-sm-8">
                       <select class="form-control" name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" required="required">
			                  <option value="<?php echo $HIGHESTLEVELOFEDUCATION;?>"> <?php echo $HIGHESTLEVELOFEDUCATION;?> </option>
                                <option>PRIMARY</option>
								<option>SECONDARY</option>
                                <option>TERTIARY</option>
								<option>VOCATION</option>
                                <option>UNIVERSITY</option>
								<option>NONE</option>
                    			</select>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Marital status</label>
                    <div class="col-sm-8"> 
                              <select class="form-control" name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" required="required">
			                  <option value="<?php echo $MARITALSTATUS;?>"> <?php echo $MARITALSTATUS;?> </option>
								<option>SINGLE</option>
								<option>MARRIED</option>
                                <option>SEPARATED</option>
								<option>WIDOWED</option>
                                <option>DIVORCED</option>
								<option>NO RESPONSE</option>
                    			</select>
                   </div>
                </div>
                <!-- /.form-group -->

        </th>

        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment status</label>
                    <div class="col-sm-8"> 
                   <select class="form-control" name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>" required="required">
			       <option value="<?php echo $EMPLOYMENTSTATUS;?>"> <?php echo $EMPLOYMENTSTATUS;?> </option>
                                <option value="UNEMPLOYED">UNEMPLOYED</option>
								<option value="TEMPORARY">TEMPORARY</option>
                                <option value="PERMANENT">PERMANENT</option>
							    </select>
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <select class="form-control" name="DISTRICT" value="<?php echo $DISTRICT;?>" required="required">
			       <option value="<?php echo $DISTRICT;?>"> <?php echo $DISTRICT;?> </option>
								<option>KAMPALA</option>
								<option>MUKONO</option>
                                <option>WAKISO</option>
                                <option>MPIGI</option>
								<option>KAYUNGA</option>
                                <option>ENTEBBE</option>
                                <option>NAKASEKE</option>
								<option>BUIKWE</option>
                                <option>GOMBA</option>
                                <option>OTHERS</option>
                   </select>
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
			      <select class="form-control" name="DIVISION" value="<?php echo $DIVISION;?>">
			       <option value="<?php echo $DIVISION;?>"> <?php echo $DIVISION;?> </option>
								<option>CENTRAL</option>
								<option>LUBAGA</option>
                                <option>NAKAWA</option>
                                <option>MAKINDYE</option>
                                <option>KAWEMPE</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->
              
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control"  value="<?php echo $PLACEOFRESIDENCE;?>" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone contact</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control"  value="<?php echo $PHONECONTACT;?>" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control" value="<?php echo $MOTHERFIRSTNAME;?>"  required="required" />
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control" value="<?php echo $MOTHERLASTNAME;?>" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control" value="<?php echo $FATHERFIRSTNAME;?>"  />
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control" value="<?php echo $FATHERLASTNAME;?>"  />
                   </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Living with</label>
                    <div class="col-sm-8"> 
			      <select class="form-control" name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>">
			       <option value="<?php echo $LIVINGWITH;?>"> <?php echo $LIVINGWITH;?> </option>
								<option>SINGLE PARENTS</option>
								<option>BOTH PARENTS</option>
                                <option>GRAND PARENTS</option>
                                <option>GUARDIAN</option>
								<option>ALONE/SELF</option>
                                <option>BROTHER</option>
                                <option>SISTER</option>
                                <option>B/FRIEND</option>
                                <option>WIFE</option>
                                <option>HUSBAND</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Heard about us</label>
                    <div class="col-sm-8">
                  <select class="form-control" name="HEAREDABOUTNTIHC" value="<?php echo $HEAREDABOUTNTIHC;?>">
			       <option value="<?php echo $HEAREDABOUTNTIHC;?>"> <?php echo $HEAREDABOUTNTIHC;?> </option>
								<option value="PEERS">PEERS</option>
								<option value="PARENTS/GUARDIAN">PARENTS/GUARDIAN</option>
                                <option value="HEALTH WORKER">HEALTH WORKER</option>
                                <option value="OUTREACH">OUTREACH</option>
								<option value="EMPLOYER">EMPLOYER</option>
                                <option value="NEWS PAPER">NEWS PAPER</option>
                                <option value="RADIO">RADIO</option>
                                <option value="TV">TV</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->
            

             </td>
    </tbody>
    </table>


	 <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;"></th>
        <th style="border-bottom-color:white;font-weight:bold; width:66.6666666666%;"></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>Updated by  </th>
        <td> <input type="text" class="form-control"  name="REGISTEREDBY"  id="REGISTEREDBY" value="<?php echo $REGISTEREDBY; ?>"
		readonly="readonly" style="background-color:#fff;"/> </td>
        <input type="hidden" class="form-control"  name="REGISTERACCOUNT"  id="REGISTERACCOUNT" value="<?php echo $REGISTERACCOUNT; ?>">
    </tbody>
    </table>
 
              <input type="hidden" name="PID" value=<?php echo $_GET['PID'];?>> 
              
				<center> <input type="submit" name="update" value="Update"> <center>
         </form> 
    
    
    
    
    
    
</body>
</html>

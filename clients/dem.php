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
  $id =  $_GET['q'];  
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
  $TRIBE=''; 
  $RELIGION='';
  $PID = '';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE NTIHCNO = '$id' ";

 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	  
	 $NTIHCNO          = $row['NTIHCNO'];  
	 $DATECREATED = $row['DATECREATED'];
     $FIRSTNAME = $row['FIRSTNAME'];
     $LASTNAME  = $row['LASTNAME'];
     $OTHERNAME = $row['OTHERNAME'];
     $SEX = $row['SEX'];
     $AGE = $row['AGE'];
	 $AGE1 = $row['AGE1'];
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
	 $TRIBE=$row['TRIBE'];
     $RELIGION=$row['RELIGION']; 
     $PID = $row['PID'];
      } 
     ?>
    
    <form id="form1" class="form-horizontal" action="clients/dem_update.php" method="POST" style="height:auto; font-weight:normal;"> 
          
         <div class="col-lg-12" style="text-align:left;">
<img src="assets/img/logsbig.PNG" width="100%" height="100%">
</div>
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">CLIENT(S) DEMOGRAPHY </legend> </center> 
          
       
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
                    <label for="text1" class="control-label col-sm-4">Vist date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  value="<?php echo $DATECREATED;?>" class="form-control">
                </div>
                </div>
                <!-- /.form-group -->
               <input type="hidden" name="PID"  value="<?php echo $PID;?>" class="form-control">
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
                    <label for="pass1" class="control-label col-sm-4">Tribe</label>
                    <div class="col-sm-8"> 
                   <select class="form-control" name="TRIBE" value="<?php echo $TRIBE;?>" >
			       <option value="<?php echo $TRIBE;?>"> <?php echo $TRIBE;?> </option>
                                 <option>PROTESTANT</option>   <option>CATHOLIC</option>  <option>BORN AGAIN</option>  <option>MUSLIM</option>
				                 <option>SDA</option>  <option>JEHOVAH</option>   <option>OTHERS</option> 	
							     </select>
                   </div>
                </div>
                <!-- /.form-group -->
				
				

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date of birth</label>
                    <div class="col-sm-8">
                   <input type="date" name="AGE" value="<?php echo $AGE;?>" class="form-control" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->

               
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Age</label>
                    <div class="col-sm-8">
                    <input type="numeric" name="AGE1" id="AGE1" class="form-control" value="<?php echo $AGE1;?>"  />
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
                    <label for="pass1" class="control-label col-sm-4">Religion</label>
                    <div class="col-sm-8"> 
                   <select class="form-control" id="RELIGION" name="RELIGION" value="<?php echo $RELIGION;?>" >
			       <option value="<?php echo $RELIGION;?>"> <?php echo $RELIGION;?> </option>
                    <option>Acholi</option>  <option>Alur</option> <option>Aringa</option>  <option>Mufumbira</option>  <option> Ganda</option>
				    <option>Gisu</option>  <option>Bagungu</option>   <option>Gwere</option>  <option>Bahororo</option>  <option>Kiga</option>
					<option>Konzo</option>  <option>Nkole</option>   <option>Banyala</option>  <option>Rwandese</option>  <option>Banyole</option> 
					<option>Banyoro</option>  <option>Baruuli</option>   <option>Soga</option>  <option>Basongora</option>  <option>Batuku</option>
					<option>Batwa</option> <option>Bokora</option> <option>Chope</option> <option>Dodoth</option> <option>Ik(Teuso)</option> <option>Iteso</option> <option>Kebu</option>
					<option>Jie</option> <option>Jonam</option> <option>Jopadhola</option> <option>Kakwa</option> <option>Karimojong</option> <option>Kumam</option>
				    <option>Lango</option> <option>Lendu</option> <option>Lugbara</option> <option>Madi</option> <option>Matheniko</option> <option>Mvuba</option> <option>Napore</option> 
					<option>Nubi</option> <option>Pian</option> <option>Pokot</option> <option>Sabiny</option> <option>Samia</option>
							    </select>
                   </div>
                </div>
                <!-- /.form-group -->
				
		
		
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
        <td> <input type="text" class="form-control"  name="REGISTEREDBY"  id="REGISTEREDBY" value="<?php echo $nameofuser; ?>"
		readonly="readonly" style="background-color:#fff;"/> 
        </td>
        <input type="hidden" class="form-control"  name="REGISTERACCOUNT"  id="REGISTERACCOUNT" value="<?php echo $rm; ?>">
    </tbody>
    </table> 
             
       
				 <center> <input type="submit" name="buttonsendct" id="button" value="Update"  style="border-radius:11px;"/> 
                 &nbsp;&nbsp;&nbsp
                <a href="registration_desk.php" style="border-radius:11px; background-color:#ecfof5;"> Counsel  </a> 
                 </center>   
      <br>
        </form> 
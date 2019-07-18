 


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
	 
	
    
    <form id="form1" class="form-horizontal" action=" " method="POST" style="height:auto; font-weight:normal;"> 
      <div class="col-sm-12">      
       
      <table class="table table-tabled " style="border:0px;">
    <thead>
        <tr class="" style="font-weight:normal;">
       <th style="font-weight:normal; width:25%; border:0px;"> </th>
        <th style="font-weight:normal; width:25%;border:0px;"> </th>
		<th style="font-weight:normal; width:25%;border:0px;"> </th>
		<th style="font-weight:normal; width:25%;border:0px;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>
		
		 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Client.No.</label>
                    <div class="col-sm-8">
                     <input type="text" name="NTIHCNO"  value="<?php echo $NTIHCNO;?>" class="form-control"
					 readonly="readonly" style="font-weight:normal; background-color:transparent;">
                </div>
                </div>
                <!-- /.form-group -->
				
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Enroll&nbsp;date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  value="<?php echo $DATECREATED;?>" class="form-control"
					readonly="readonly" style="font-weight:normal; background-color:transparent;">
                </div>
                </div>
                <!-- /.form-group --> 

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First.name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;">
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  value="<?php echo $LASTNAME;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:transparent;">
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:transparent;">
                   </div>
                </div>
                <!-- /.form-group -->
 

        </th>
		
         <td>
		 
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Age</label>
                    <div class="col-sm-7">
                    <input type="numeric" name="AGE1" id="AGE1" class="form-control" value="<?php echo $AGE1;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;">
                   </div>
                </div>
                <!-- /.form-group --> 
		 
		  <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Gender</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="SEX" value="<?php echo $SEX;?>" 
						readonly="readonly" style="font-weight:normal; background-color:transparent;"> 
                    </div>
                </div>
                <!-- /.form-group -->

                  

               

 
			  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Schooling</label>
                    <div class="col-sm-7"> 
                    <input type="text"  class="form-control" name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;"> 
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Education.level</label>
                    <div class="col-sm-7">
                      <input type="text"  class="form-control" name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" 
					   readonly="readonly" style="font-weight:normal; background-color:transparent;"> 
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Marital.status</label>
                    <div class="col-sm-7"> 
                              <input type="text"  class="form-control" name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" 
							  readonly="readonly" style="font-weight:normal; background-color:transparent;"> 
                   </div>
                </div>
		 </th>
		 
        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment</label>
                    <div class="col-sm-8"> 
                   <input type="text"  class="form-control" name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>"
				   readonly="readonly" style="font-weight:normal; background-color:transparent;"> 
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <input type="text" class="form-control" name="DISTRICT" value="<?php echo $DISTRICT;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:transparent;"> 
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
			      <input type="text" class="form-control" name="DIVISION" value="<?php echo $DIVISION;?>" readonly="readonly" 
				  style="font-weight:normal; background-color:transparent;"> 
                   </div>
                </div>
                <!-- /.form-group -->
              
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control"  value="<?php echo $PLACEOFRESIDENCE;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;">
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone.No.</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control"  value="<?php echo $PHONECONTACT;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;">
                   </div>
                </div>
                <!-- /.form-group -->
 
             </td>
			 
			 <td>
			 
			 
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control" value="<?php echo $MOTHERFIRSTNAME;?>"  
					readonly="readonly" style="font-weight:normal; background-color:transparent;"> 
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control" value="<?php echo $MOTHERLASTNAME;?>" 
					readonly="readonly" style="font-weight:normal; background-color:transparent;">
                   </div>
                </div>
                <!-- /.form-group -->
		 
		
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control" value="<?php echo $FATHERFIRSTNAME;?>"  
					style="font-weight:normal; background-color:transparent;"> 
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control" value="<?php echo $FATHERLASTNAME;?>" 
					style="font-weight:normal; background-color:transparent;"> 
                   </div>
                </div>
                <!-- /.form-group -->
        <br>
		 <div class="form-group" style="margin-top:-15px;">
                    <label for="pass1" class="control-label col-sm-4">Living.with</label>
                    <div class="col-sm-8"> 
			      <input type="text"  class="form-control" name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>"
				 readonly="readonly" style="font-weight:normal; background-color:transparent;"> 
                   </div>
                </div>
			 
			 </td>
    </tbody>
    </table>
    </div>
	
  <?php 
  $id = $id ;  
  $EID = ''; 
  $prob   = array();
  $top    = array();
  $catg   = array();  
  $DATECREATED = '';
  $NTIHCNO = '';  
  $COUNSELLINGDONE = '';   
  $URGENCYTYPE = ''; 
  $VISTBY = '';   
  $PROBLEMBRIEF = '';  
  $ACTIONTAKEN = ''; 
  $SERVICE_EPISODE = ''; 
  $USERINITIAL = '';  
  $REGISTERACCOUNT = ''; 
  $AGE = '';   
  $AGE_GROUP = '';
  $SEX = '';  
  $SCHOOLING = '';
  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM clientsexamination WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $EID          = $row['EID'];  
	 $DATECREATED      = $row['DATECREATED'];  
     $prob[]    = $row['MEDICALPROBLEM']; 
	 $top[]    = $row['MEDICALTOPIC'];
     $catg[]       = $row['PROBLEMCATEGORY'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $COUNSELLINGDONE = $row['COUNSELLINGDONE'];
     $URGENCYTYPE    = $row['URGENCYTYPE'];
	 $VISTBY  = $row['VISTBY'];  
	 $PROBLEMBRIEF          = $row['PROBLEMBRIEF']; 
	 $ACTIONTAKEN          = $row['ACTIONTAKEN']; 
	 $SERVICE_EPISODE          = $row['SERVICE_EPISODE'];  
	 $USERINITIAL  = $row['USERINITIAL'];  
	 $REGISTERACCOUNT          = $row['REGISTERACCOUNT']; 
	 $AGE          = $row['AGE']; 
	 $AGE_GROUP          = $row['AGE_GROUP']; 
	 $SEX          = $row['SEX']; 
	 $SCHOOLING          = $row['SCHOOLING']; 
	 
      } 
     ?>
	   
     <div class="col-sm-6">
	  <table class="table" style="border:0px;">
                <tr>
			    <th style="width:25%;border:0px;">Service date </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED" value="<?php echo $DATECREATED;?>" 
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>

	            <th style="width:25%;border:0px;">Vist by </th>
				<th style="width:25%;border:0px;"> <select  name="VISTBY" id="VISTBY"  value="<?php echo $VISTBY;?>"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                  <option value="<?php echo $VISTBY;?>"><?php echo $VISTBY;?></option>
				                                   <option>YOUTH</option>
                                                   <option>PARENT</option>
                                                   <option>YOUTH AND PARENT</option>
                                                   <option>COUPLE</option>
                                                   </select>
				</th>
              </tr>
			  </table>
			  
			   <table class="table table-tabled" id="mytable11" style="font-weight:normal;margin-top: -13px; ">
    <thead>
      <tr>
      <th>*</th> 
   <th>PROBLEM CATEGORY</th> 
   <th>DESCRIPTION</th>
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($prob); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($catg[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
												  
												  <td> <input  name="top[]" readonly="" type="text" value="<?php  echo $top[$s]; ?>"  
                                                   style= "width:100%; background-color:transparent;"/></td>  
                                                   
												   
                                                  <td> <input  name="prob[]" readonly="" type="text" value="<?php  echo $prob[$s]; ?>"  
                                                   style= "width:100%; background-color:transparent;"/></td>
                                                   
                                                  
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
								
								   
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>
		 <td style="width:25%;border:0px;">Problem brief</td>
            <td style="width:75%;border:0px;">  <textarea name="PROBLEMBRIEF" readonly="readonly" style="width:100%; background-color:transparent;" ><?php echo $PROBLEMBRIEF;?>  
				</textarea> </th> 
   
        </tr>
       </tbody>
      </table>	
	  					
	    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
		
            <td style="width:25%;border:0px;">Urgency</td>
            <td style="width:75%;border:0px;"> <input type="text"  name="URGENCYTYPE" id="URGENCYTYPE" value="<?php  echo $URGENCYTYPE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
 
            </td>
        <tr>
            <td style="width:25%;border:0px;">Counselling done</td>
             <td style="width:75%;border:0px;">   <input type="text"  name="COUNSELLINGDONE" id="COUNSELLINGDONE" value="<?php  echo $COUNSELLINGDONE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>  
        </tr>
       </tbody>
      </table>	
			  
	 </div> 
	  
	  <div class="col-sm-6">
	  <?php 
  $id = $id ;   
  $DATECREATED = '';
  $NTIHCNO = '';   
  $TESTDESCRIPTION = ''; 
  $REQUESTINGUNIT = '';    
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laboratory WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	   
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $TESTDESCRIPTION = $row['TESTDESCRIPTION'];
     $REQUESTINGUNIT    = $row['REQUESTINGUNIT']; 
	 $USERINITIAL    = $row['USERINITIAL'];  
     } 
     ?>  
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
			  <center><B style="text-align:center; font-weight:bold;">Requested lab order</B></center>
		<thead> 
		<tr> 
		
			    <th style="width:40%;border:0px;">Lab test </th>
				<th style="width:60%;border:0px;"> <input type="text"  name="TESTDESCRIPTION" id="TESTDESCRIPTION" value="<?php  echo $TESTDESCRIPTION; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>  
              </tr>
			  </table>
			  
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
		
			    <th style="width:40%;border:0px;">Requesting unit</th>
				<th style="width:60%;border:0px;"> <input type="text"  name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="<?php  echo $REQUESTINGUNIT; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>  
              </tr>
			  </table> 
			  
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
		
			    <th style="width:40%;border:0px;">Initiated by</th>
				<th style="width:60%;border:0px;"> <input type="text"  name="USERINITIAL" id="USERINITIAL" value="<?php  echo $USERINITIAL; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>  
              </tr>
			  </table> 
			   
			   <?php
					$a=mysqli_query($conn,"select * from laboratory where NTIHCNO='$id'");
					$arow=mysqli_fetch_array($a); 
				?> 
			  <div class="nav-tabs-custom" style="border:0px;background-color:transparent;">
            <ul class="nav nav-tabs pull-right" style="background-color:transparent;">   
              
	  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
    <td style="width:33.33333333%; border: 0px;">
		<div class="small-box bg-grey-gradient">
		  <a href="#defo" data-toggle="tab">
		  <img src="database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #d70000;height:30px; width:30px;" > 
            &nbsp;&nbsp;&nbsp; </a> 
		  <br><p></p>
		  <div class="small-box bg-grey-gradient">
		  <a href="#tab_aa" data-toggle="tab">
		  <img src="database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #d70000;height:30px; width:30px;" > 
           Malaria&nbsp;&nbsp;&nbsp; </a> 
		   <br><p></p>
	
	       <div class="small-box bg-grey-gradient"> 
		   <a href="#tab_bb" data-toggle="tab">
           <img src="database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #d70000;height:30px; width:30px;" > 
           Syphillis&nbsp;&nbsp;&nbsp; </a> <br><p></p> 
		  </div> 
		  </td>
           
		   
         <td style="width:33.33333333%;border:0px;"> 
		 <div class="small-box bg-grey-gradient"> 
		   <a href="#tab_cc" data-toggle="tab">
           <img src="database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #d70000;height:30px; width:30px;" > 
           Blood&nbsp;&nbsp;&nbsp; &nbsp;</a> <br><p></p>
		 
         <div class="small-box bg-grey-gradient">
		  <a href="#tab_dd" data-toggle="tab">
           <img src="database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #d70000;height:30px; width:30px;" > 
          Hepatitis&nbsp;B&nbsp;&nbsp; </a> 
		   <br><p></p>
	
	      <div class="small-box bg-grey-gradient">
		  <a href="#tab_ee" data-toggle="tab">
           <img src="database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #d70000; height:30px; width:30px;"> 
          HB&nbsp;&nbsp;&nbsp; &nbsp; </a>
		  <br><p></p> 
		  
		  
	       </td>  
		   
		   <td style="width:33.33333333%;border:0px;"> 
		   <div class="small-box bg-grey-gradient">
		  <a href="#tab_ff" data-toggle="tab">
           <img src="database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #d70000;height:30px; width:30px;" > 
          RBS&nbsp;&nbsp; &nbsp; &nbsp; </a> 
		   <br><p></p> 
		   
          <div class="small-box bg-grey-gradient">
		  <a href="#tab_gg" data-toggle="tab">
           <img src="database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #d70000;height:30px; width:30px;" > 
           HCG&nbsp; &nbsp;&nbsp;&nbsp;</a> 
		   <br><p></p>
	
	       <div class="small-box bg-grey-gradient"> 
		   <a href="#tab_hh" data-toggle="tab">
           <img src="database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #d70000;height:30px; width:30px;" > 
           Urine&nbsp;analysis&nbsp;&nbsp; </a> <br><p></p>
		   
	       </td>  
           </tbody>
           </table>
		 </div>
		   
            </ul>
            <div class="tab-content" style="border:0px;">
            <div class="tab-pane active" id="defo">
			  
		<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:20%; border: 0px;">Technician</td> 
        <td style="width:30%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['TECHNICIAN_NAME']; ?>"  style="background-color:transparent;">  </td> 
		<td style="width:20%; border: 0px;">Test date</td> 
        <td style="width:30%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['TESTDATE']; ?>" style="background-color:transparent;"> </td> 
		
		 
           </tbody>
           </table>
			     </div>   
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_aa">
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		    <thead> 
		    <tr>  
        <td style="width:20%; border: 0px;"> Malaria RDTs</td>
   
        <td style="width:30%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['MALARIARDTs']; ?>" style="width:100%; background-color:transparent;"></td>  
		    <td style="width:20%; border: 0px;">Malaria microscopy</td>
   
        <td style="width:30%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['MALARIAMICROSCOPY']; ?>" style="width:100%; background-color:transparent;"></td> 
           </tbody>
           </table>
		 
		   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:20%; border: 0px;">Measure</td>
   
        <td style="width:30%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['MICROSCOPY_MEASURE']; ?>" style="width:100%; background-color:transparent;"></td> 
		  <td style="width:20%; border: 0px;">Other heamopatrasites</td>
   
        <td style="width:30%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['OTHERHEAMOPATRASITES']; ?>" style="width:100%; background-color:transparent;"></td> 
           </tbody>
           </table> 
		    
		    
			  </div>   
              <!-- /.tab-pane -->
			  
			   <div class="tab-pane" id="tab_bb">
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:20%; border: 0px;"> Syphilis</td>
   
        <td style="width:80%;border:0px;"><input type="text"  readonly="" value="<?php echo $arow['SYPHILIS']; ?>" style="width:100%; background-color:transparent;"> </td>  
           </tbody>
           </table>
			  </div>   
              <!-- /.tab-pane -->
			  
			   <div class="tab-pane" id="tab_cc">
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:20%; border: 0px;">Blood group </td>
   
        <td style="width:30%;border:0px;"><input type="text"  readonly="" value="<?php echo $arow['BLOOD']; ?>" style="width:100%; background-color:transparent;"> </td> 
		 
           <td style="width:20%; border: 0px;">Results </td>
   
        <td style="width:30%;border:0px;"><input type="text"  readonly="" value="<?php echo $arow['BLOODRESULTS']; ?>" style="width:100%; background-color:transparent;"> </td>  
           </tbody>
           </table> 
        
			  </div>   
              <!-- /.tab-pane -->
			  
			   <div class="tab-pane" id="tab_dd">
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:20%; border: 0px;">Results </td>
   
        <td style="width:80%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['HEPATITIS_B']; ?>" style="width:100%; background-color:transparent;">   </td>  
           </tbody>
           </table>
			  </div>   
              <!-- /.tab-pane -->
			  
			   <div class="tab-pane" id="tab_ee">
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:20%; border: 0px;"> HB results</td>
   
        <td style="width:80%;border:0px;">  <input type="text"  readonly="" value="<?php echo $arow['HB']; ?>" style="width:100%; background-color:transparent;"> </td>  
           </tbody>
           </table>
			  </div>   
              <!-- /.tab-pane -->
			  
			   <div class="tab-pane" id="tab_ff">
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:20%; border: 0px;"> RBS results </td> 
        <td style="width:80%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['HB']; ?>" style="width:100%; background-color:transparent;"> </td>  
           </tbody>
           </table>
		   </div>   
        <!-- /.tab-pane -->
			  
	    <div class="tab-pane" id="tab_gg">
	    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:20%; border: 0px;">HCG results </td> 
        <td style="width:80%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['HCG']; ?>" style="width:100%; background-color:transparent;">  </td>  
        </tbody> </table>
	    </div>   
        <!-- /.tab-pane -->
			  
			   <div class="tab-pane" id="tab_hh">
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
        <td style="width:20%; border: 0px;"> Cystecells </td> 
        <td style="width:30%;border:0px;">  <input type="text"  readonly="" value="<?php echo $arow['CYSTECELLS']; ?>" style="width:100%; background-color:transparent;">   </td>   
        <td style="width:20%; border: 0px;"> Proteins </td> 
        <td style="width:30%;border:0px;">  <input type="text"  readonly="" value="<?php echo $arow['PROTEINS']; ?>" style="width:100%; background-color:transparent;">   </td>  
        </tbody>
        </table>
			  </div>   
              <!-- /.tab-pane -->
		         
	 </div> 
	 
	   
	    
		
		
		
		
		
		
		
		
		
		
		

       <div class="nav-tabs-custom" style="margin-left:-10px">
         <?php
        $rex   = array();  //results array for ids
	    $dats  = array();  //results array for ids
         $xx    = 1; //array["1"]  begining index
        $re    = $conn->query("SELECT * FROM clientsexamination WHERE NTIHCNO= '$id[0]' GROUP BY DATECREATED");
        if($re){}
          else{echo 'Error : '.$conn->error; exit();}
         $tox   = $re->num_rows; //total results
         while ($row=$re->fetch_assoc()) {
               $rex["".$xx.""]   = $row['NTIHCNO'];
			   $dats ["".$xx.""] = $row['DATECREATED'];
               $xx++;
         }

         ?>

         <script type="text/javascript">
		 
         var total   =   parseInt("<?php echo $tox; ?>");
         var results1 = JSON.parse('<?php echo json_encode($rex); ?>');
		 var results2 = JSON.parse('<?php echo json_encode($dats); ?>');
         var current = 0;
         //we conver res1 object to array
         var arr = []; var arr1= []; var r =1;
		     
         for(var x in results1){  arr.push(results1[x]);   arr1.push(results2[x]); r++;}
		  console.log(arr1.length);
          console.log(arr1);   
		  console.log(arr);
		  
		  $(document).ready(function(){ document.getElementById("emma").value="0 out of "+arr.length;
		                                document.getElementById('Back').Enabled = false;});
		  
           function paginate(btnselect){
             var btn = btnselect.id;
                       document.getElementById('Back').Enabled    = true;
                       document.getElementById('Forward').Enabled = true;
                   
                  if(btn=='Back'){if(current==1||current==0){document.getElementById('Back').Enabled = false;}
                                     else{ current= current-1;}
                                 }
           else if(btn=='Forward'){if(current==total){document.getElementById('Forward').Enabled = false;}
                                 else{current= current+1;}
                                 }								 
             else{return;}
			 		 document.getElementById("emma").value= current +" out of "+arr.length;
			  //alert(arr[""+current]);  alert(arr1[""+current]);
             // make a post request to the server to obtain the data
             $.post( "bringdata.php", { id: arr[current-1], dates: arr1[current-1],'choices[]': [ "item1", "item2" ] })
           .done(function( data ) {
              $("#contentdiv").html(data);
           });

         }
         </script>

           <!--div class="col-sm-12"> 
		   
		   <input type="button" onClick="paginate(this)" id="Back" value="<<">
		   <input type="text"  id="emma"    readonly>
		   <input type="button" onClick="paginate(this)" id="Forward" value=">>">
		   
		   
		   </div>
		<div id="contentdiv" class="col-sm-12"  >
    
     </div>
   </div>
 
 
        </form>

	 
     </div>
              
        </form>  

		
                 
   <!-- /.START MEDICAL SCRIPT -->

     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("TOTALSUM").value = ''+sum;
	 
	 }
	  
  function addRow166(tableId){
	   
	 var  s2b =  '<input type="numeric" name="top[]" id="top'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:transparent;" >'; 
				
     var  s1a = '<input type="text" name="prob[]" id="prob'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:transparent; width:100%;">';
 

     var  s4c =  '<input type="numeric" name="catg[]" id="catg'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:transparent;" >';
				
		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s2b+' </td>'+
	                              '<td>'+s1a+' </td>'+ 
								  '<td>'+s4c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow166(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="top"+x;
          table.rows[x].cells[2].childNodes[0].id="prob"+x;
		  table.rows[x].cells[3].childNodes[0].id="catg"+x;  
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
} 
  </script>

  <!-- /.END MEDICAL SCRIPT -->
  
  
  <!-- /.START DRUGS SCRIPT -->
   <script>
	 
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("xero").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  saa = '<input type="text" name="imp[]" id="imp_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:transparent; width:100%;">';
	 
     var  sab = '<input type="text" name="cur[]" id="cur_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:transparent; width:100%;">'; 

	 
	 var  sac = '<input type="text" name="bix[]" id="bix_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:transparent; width:100%;">'; 

	 
     var  sad = '<input type="text" name="max[]" id="max_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:transparent; width:100%;">'; 

	 var  sae =  '<input type="numeric" name="mixy[]" id="mixy_'+rowCount+'" onkeyup="calcmoney(\'mytable12\')" value="0" required="required" '+
                'style= " margin-right:0px; width:100%; background-color:transparent;" >';
						 
				
		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+saa+' </td>'+
	                              '<td>'+sab+' </td>'+
								  '<td>'+sac+' </td>'+
	                              '<td>'+sad+' </td>'+
				                  '<td>'+sae+' </td>';
								  
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow166(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="imp_"+x;
          table.rows[x].cells[2].childNodes[0].id="cur_"+x;
		  table.rows[x].cells[3].childNodes[0].id="bix_"+x;
		  table.rows[x].cells[4].childNodes[0].id="max_"+x;
		  table.rows[x].cells[5].childNodes[0].id="mixy_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>
         <!-- /.END DRUGS SCRIPT -->  


	<!-- /.START COUNSELLING SCRIPT -->

     <script>
	 
	 function calrec(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("TOTAz").value = ''+sum;
	 
	 }
	  
  function addRow166(tableId){
     var  s1za = '<input type="text" name="reason[]" id="reason'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+ 'background-color:transparent; width:100%;">';
 

	 var  s2zb =  '<input type="numeric" name="counsellingtopic[]" id="counsellingtopic'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:transparent;" >';
				  

     var  s4zc =  '<input type="numeric" name="counsellingdesc[]" id="counsellingdesc'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:transparent;" >';
				
		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1za+' </td>'+
	                              '<td>'+s2zb+' </td>'+ 
								  '<td>'+s4zc+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1001').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow166(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="reason"+x;
          table.rows[x].cells[2].childNodes[0].id="counsellingtopic"+x;
		  table.rows[x].cells[3].childNodes[0].id="counsellingdescs"+x;  
          }
           document.getElementById('mytable_rows1100').value=rowCount-1;
		   calcmoney(tableId);
} 
  </script>

  <!-- /.END COUNSELLING SCRIPT -->	 
		   

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
          
         <div class="col-lg-12" style="text-align:left;">
 <img src="assets/img/logsbig.PNG" width="100%" height="100%">    
</div>
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">CLIENT SERVICE CARD </legend> </center> 
          
       
        <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
		<th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
		<th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>
		
		 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Client.No.</label>
                    <div class="col-sm-8">
                     <input type="text" name="NTIHCNO"  value="<?php echo $NTIHCNO;?>" class="form-control"
					 readonly="readonly" style="font-weight:normal; background-color:#fff;">
                </div>
                </div>
                <!-- /.form-group -->
				
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Vist.date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  value="<?php echo $DATECREATED;?>" class="form-control"
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                </div>
                </div>
                <!-- /.form-group --> 

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First.name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  value="<?php echo $LASTNAME;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other.name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group -->
 

        </th>
		
         <td>
		 
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Age</label>
                    <div class="col-sm-7">
                    <input type="numeric" name="AGE1" id="AGE1" class="form-control" value="<?php echo $AGE1;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group --> 
		 
		  <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Gender</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="SEX" value="<?php echo $SEX;?>" 
						readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                    </div>
                </div>
                <!-- /.form-group -->

                  

               

 
			  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Schooling</label>
                    <div class="col-sm-7"> 
                    <input type="text"  class="form-control" name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Education.level</label>
                    <div class="col-sm-7">
                      <input type="text"  class="form-control" name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" 
					   readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Marital.status</label>
                    <div class="col-sm-7"> 
                              <input type="text"  class="form-control" name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" 
							  readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
		 </th>
		 
        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment</label>
                    <div class="col-sm-8"> 
                   <input type="text"  class="form-control" name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>"
				   readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <input type="text" class="form-control" name="DISTRICT" value="<?php echo $DISTRICT;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
			      <input type="text" class="form-control" name="DIVISION" value="<?php echo $DIVISION;?>" readonly="readonly" 
				  style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->
              
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control"  value="<?php echo $PLACEOFRESIDENCE;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone.No.</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control"  value="<?php echo $PHONECONTACT;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group -->
 
             </td>
			 
			 <td>
			 
			 
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control" value="<?php echo $MOTHERFIRSTNAME;?>"  
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control" value="<?php echo $MOTHERLASTNAME;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;">
                   </div>
                </div>
                <!-- /.form-group -->
		 
		
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control" value="<?php echo $FATHERFIRSTNAME;?>"  
					style="font-weight:normal; background-color:#ecf0f5;"> 
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control" value="<?php echo $FATHERLASTNAME;?>" 
					style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
                <!-- /.form-group -->
        <br>
		 <div class="form-group" style="margin-top:-15px;">
                    <label for="pass1" class="control-label col-sm-4">Living.with</label>
                    <div class="col-sm-8"> 
			      <input type="text"  class="form-control" name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>"
				 readonly="readonly" style="font-weight:normal; background-color:#ecf0f5;"> 
                   </div>
                </div>
			 
			 </td>
    </tbody>
    </table>

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
	   
       <div class="nav-tabs-custom" style="margin-left:-10px">
            <ul class="nav nav-tabs pull-right" style="margin-top: -17px;">
             
              <li class="active"><a href="#tab_1-2def" data-toggle="tab"
			  style="padding: 1px 10px;border: 3px solid rgb(236, 240, 245); border-radius: 8px;"> </a></li>
			  
              <li><a href="#tab_2-2medical" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">Medical</a></li>
              <li><a href="#tab_3-2fp" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">FP</a></li>
              
              <li><a href="#tab_1-1anc" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">ANC</a></li>
              
              <li><a href="#tab_1-1pac" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">PAC</a></li>
              
              <li><a href="#tab_1-1pnc" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">PNC</a></li>
              
              <li><a href="#tab_1-1counsel" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">Counselling</a></li>
              
              <li><a href="#tab_1-1art" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">ART</a></li>
              
              <li><a href="#tab_1-1lab" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">LAB</a></li>
              
              <li><a href="#tab_1-1disp" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">Dispensary</a></li>
              
              <li><a href="#tab_1-1ref" data-toggle="tab" 
			  style="padding: 1px 3px; border: 2px solid rgb(236, 240, 245); border-radius: 6px; font-size: 12px;">Referrals</a></li>
                
            </ul>
            <div class="tab-content">
			<!-- /.tab-pane -->
			
			   <div class="tab-pane" id="tab_1-2def">
			   </div>
			
              <div class="tab-pane" id="tab_2-2medical">
                
     <div class="col-sm-7" style="margin-top: 0px;">  

	 <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:0px;">Service date </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED" value="<?php  echo $DATECREATED; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th> 

	            <th style="width:25%;border:0px;">Vist by </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="VISTBY" id="VISTBY" value="<?php  echo $VISTBY; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
              </tr>
			  </table>
 
  <table class="table table-striped" id="mytable11" style="font-weight:normal;margin-top: -13px; ">
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
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                                   
												   
                                                  <td> <input  name="prob[]" readonly="" type="text" value="<?php  echo $prob[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
								
	 <table class="table-responsive" style="margin-top:10px;"> 
            <table class="table" style="border:0px;">
              <tr>    
            <td style="width:25%;border:0px;">Urgency</td>
            <td style="width:75%;border:0px;"> <input type="text"  name="URGENCYTYPE" id="URGENCYTYPE" value="<?php  echo $URGENCYTYPE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th> 
 
            </td>
        <tr>
            <td style="width:25%;border:0px;">Counselling done</td>
             <td style="width:75%;border:0px;">   <input type="text"  name="COUNSELLINGDONE" id="COUNSELLINGDONE" value="<?php  echo $COUNSELLINGDONE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
        </tr>
       </tbody>
      </table>	
	      
                
    </div>
	
			   
	  <?php 
  $id = $id ;  
  $LABID = '';  
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
	 
     $LABID          = $row['LABID'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $TESTDESCRIPTION = $row['TESTDESCRIPTION'];
     $REQUESTINGUNIT    = $row['REQUESTINGUNIT']; 
	 
      } 
     ?>
		 
	   
			 <p></p> <div class="col-sm-5" style="border:1px solid #ecf0f5;">
			   <table class="table-responsive" style="margin-top:0px;"><center><B style="text-align:center; font-weight:bold;">Requested lab order</B></center>
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:40%;border:0px;">Lab test </th>
				<th style="width:60%;border:0px;"> <input type="text"  name="TESTDESCRIPTION" id="TESTDESCRIPTION" value="<?php  echo $TESTDESCRIPTION; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
              </tr>
			  </table>
			  
			  <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:40%;border:0px;">Requesting unit</th>
				<th style="width:60%;border:0px;"> <input type="text"  name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="<?php  echo $REQUESTINGUNIT; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
              </tr>
			  </table> 
	 </div> 
	 
	 
	  <?php 
  $id = $id ;  
  $CID = '';  
  $DATECREATED = '';
  $NTIHCNO = '';   
  $HCGRESULTS = ''; 
  $HCGPOSITIVE = '';    
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM hcg WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $CID          = $row['CID'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $HCGRESULTS = $row['HCGRESULTS'];
     $HCGPOSITIVE    = $row['HCGPOSITIVE']; 
	 
      } 
     ?>
	  <br> <br> <br>  <br> <br>  
	 <div class="col-sm-5" style="border:1px solid #ecf0f5;">
	 
	 <table class="table-responsive" style="margin-top:0px;"><center><B style="text-align:left; ">HCG</B></center>
            <table class="table" style="border:2px;">
              <tr>
			    <th style="width:40%;border:0px;">HCG results </th>
				<th style="width:60%;border:0px;"> <input type="text"  name="HCGRESULTS" id="HCGRESULTS" value="<?php  echo $HCGRESULTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				
              </tr>
			  </table>
			  
			  <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:40%;border:0px;">Justification</th>
				<th style="width:60%;border:0px;"> <input type="text"  name="HCGPOSITIVE" id="HCGPOSITIVE" value="<?php  echo $HCGPOSITIVE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
              </tr>
			  </table> 
			  </div>
			  
	<div class="col-sm-12">
	<p></p>
	
	<table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:14%;border:0px;">Problem brief </th> 

				<th style="width:86%;border:0px;"> <textarea name="PROBLEMBRIEF" readonly="readonly" style="width:100%;" ><?php echo $PROBLEMBRIEF;?>  
				</textarea> </th>  
              </tr>
			  </table>
		</div>	  
	     
     
	
	  <?php 
  $id = $id ;  
  $DID = ''; 
  $CREATEDDATE = '';
  $imp   = array();
  $cur    = array();
  $bix   = array();  
  $max    = array();
  $mixy   = array();  
  $NTIHCNO = '';  
  $DISPENSEDBY = '';   
  $REQUESTINGUNIT = '';  
  $PRESCRIPTIONCOMMENT = '';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM prescription WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $DID          = $row['DID'];  
	 $DATECREATED      = $row['DATECREATED'];  
     $imp[]    = $row['DRUGNAME']; 
	 $cur[]    = $row['FREQUENCY'];
     $bix[]       = $row['TIMES'];  
	 $max[]    = $row['PERIOD'];
     $mixy[]       = $row['QTYPRESCRIBED']; 
	 
     $NTIHCNO  = $row['NTIHCNO'];
	 $DISPENSEDBY = $row['DISPENSEDBY'];
     $REQUESTINGUNIT    = $row['REQUESTINGUNIT']; 
	 $PRESCRIPTIONCOMMENT    = $row['PRESCRIPTIONCOMMENT']; 
      } 
     ?>
	 
	 
	 <div class="col-sm-8" style="margin-top: -10px;">
	 
  <table class="table table-striped" id="mytable12" style="font-weight:normal; "><center><B style="text-align:center; font-weight:bold;">Medication</b></center>
    <thead>
      <tr>
      <th>*</th>
   <th style= "width:60%;" >DRUG</th> 
   <th style= "width:10%;" >QTY</th> 
   <th style= "width:10%;" >TIMES</th> 
   <th style= "width:10%;" >PERIOD</th> 
   <th style= "width:10%;" >TOTAL</th> 
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($imp); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($mixy[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="imp[]" readonly="" type="text" value="<?php  echo $imp[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  <td> <input  name="cur[]" readonly="" type="text" value="<?php  echo $cur[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
												   
                                                   <td> <input  name="bix[]" readonly="" type="text" value="<?php  echo $bix[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                                   
                                                  <td> <input  name="max[]" readonly="" type="text" value="<?php  echo $max[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
												   
												   <td> <input  name="mixy[]" readonly="" type="text" value="<?php  echo $mixy[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                
     </div>	  
	 
	 <div class="col-sm-4" >
	 <p></p>
	
  <table class="table-responsive" style="margin-top:0px; border:1px solid #ecf0f5;"> 
   <thead>
   <tr>
   <th> Follow up requirement </th>
   <th> Sheduled date</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:30%;"><input type="text" name="BALANCEREMAINING" id="BALANCEREMAINING"  value="" required="required" readonly="readonly" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:30%;"><input type="text" name="REQUISITIONID" id="myREQUISITIONID"  value="" required="required" readonly="readonly" 
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   </tr>
  <tr>
 </tbody>
 </table> 
 <br>
  <table class="table-responsive" style="margin-top:0px; border:1px solid #ecf0f5;"> 
            <table class="table" style="border:1px solid #ecf0f5;">
              <tr> 
			  <td style="width:50%;  font-weight:bold;">Service referral requirements </td>
				<td style="width:50%; "> <input type="text"  name="HCGRESULTS" id="HCGRESULTS" value="<?php  echo $HCGRESULTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>  
              </tr>
			  </table>
			    
			   </div>
			   
			    <?php 
  $id = $id ;  
  $MRID = '';  
  $DATECREATED = '';
  $NTIHCNO = '';   
  $MEDICALREFERRAL = ''; 
  $SERVICEREFERREDFOR = '';    
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM referral WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED ";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $MRID          = $row['MRID'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $MEDICALREFERRAL = $row['MEDICALREFERRAL'];
     $SERVICEREFERREDFOR    = $row['SERVICEREFERREDFOR']; 
	 
      } 
     ?> 
		<div class="col-sm-8"	>   
        <table class="table-responsive" style="margin-top:1px;border:1px solid;"><b style="text-align:left; "></b>
            <table class="table" style="border:1px solid #ecf0f5;">
              <tr> 
			  <td style="width:30%;border:0px; font-weight:bold;">Referral centre </td>
				<td style="width:70%;border:0px;"> <input type="text"  name="MEDICALREFERRAL" id="MEDICALREFERRAL" value="<?php  echo $MEDICALREFERRAL; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>  
              </tr>
			  </table>
			  
			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:1px solid #ecf0f5;">
              <tr> 
			  <td style="width:30%;border:0px; font-weight:bold;">Service referred </td>
				<td style="width:70%;border:0px;"> <input type="text"  name="SERVICEREFERREDFOR" id="SERVICEREFERREDFOR" value="<?php  echo $SERVICEREFERREDFOR; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>  
              </tr>
			  </table> 
          </div>	

		  <div class="col-sm-4"	>   
        <table class="table-responsive" style="margin-top:0px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr> 
			  <td style="width:100%;border:0px; font-weight:bold;">Action taken </td>  
              </tr>
			  </table>
			  
			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>  
				<td style="width:100%;border:0px;"> <input type="text"  name="ACTIONTAKEN" id="ACTIONTAKEN" value="<?php  echo $ACTIONTAKEN; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>  
              </tr>
			  </table> 
			  

			  
     </div>	
		  
	 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2fp">
               <p>Family planning</p>
               
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="tab_1-1anc">
               <p> ANC</p>
               
              </div>
              <!-- /.tab-pane -->
              
               <div class="tab-pane" id="tab_1-1pac">
               <p>PAC </p>
               
              </div>
              <!-- /.tab-pane -->
              
               <div class="tab-pane" id="tab_1-1pnc">
               <p>PNC </p>
               
              </div>
              <!-- /.tab-pane -->
              
               <div class="tab-pane" id="tab_1-1counsel">
			   
			    <div class="box-group" id="accordionx">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border" style="background-color: #ecf0f5;">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordionx" href="#collapseOnex">
                      HIV Counselling and Testing
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOnex" class="panel-collapse collapse in">
                    <div class="box-body"> 
               <div class="col-sm-4">  
  <?php 
  $id = $id ;  
  $HCTCID = '';  
  $DATECREATED = '';
  $NTIHCNO = '';   
  $PRE_TESTCOUSELLING_GIVEN = ''; 
  $COUNSELLED_AS = '';    
  $APPROACH = ''; 
  $HCT_ENTRYPOINT = '';    
  $EVERTESTEDBEFORE = ''; 
  $NUMBEROFTESTS = '';    
  $NUMBEROFSEXUALPARTNERS = ''; 
  $LAST_TESTRESULTS = '';    
  $SPOUSE_PARTNERTESTED_BEFORE = '';    
  $IFYES_RESULTS = ''; 
  $LAST_TESTRESULTS = '';   
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM hct_counselling_andtesting WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED ";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $HCTCID          = $row['HCTCID'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $PRE_TESTCOUSELLING_GIVEN = $row['PRE_TESTCOUSELLING_GIVEN'];
     $COUNSELLED_AS    = $row['COUNSELLED_AS']; 
	 $APPROACH = $row['APPROACH'];
     $HCT_ENTRYPOINT    = $row['HCT_ENTRYPOINT'];
	 $EVERTESTEDBEFORE = $row['EVERTESTEDBEFORE'];
     $NUMBEROFTESTS    = $row['NUMBEROFTESTS']; 
	 $NUMBEROFSEXUALPARTNERS = $row['NUMBEROFSEXUALPARTNERS'];
     $LAST_TESTRESULTS    = $row['LAST_TESTRESULTS']; 
	 $SPOUSE_PARTNERTESTED_BEFORE = $row['SPOUSE_PARTNERTESTED_BEFORE'];
     $IFYES_RESULTS    = $row['IFYES_RESULTS'];
	 $LAST_TESTRESULTS = $row['LAST_TESTRESULTS'];   
      } 
     ?> 
	 
	 
	 
	 <table class="table-responsive" style="margin-top:0px;"> 
	 
	  <?php 
  $id = $id ;  
  $CID = ''; 
  $CREATEDDATE = '';
  $VISTBY = '';    
  $pro    = array();   
  $NTIHCNO = '';  
  $ACTION = '';   
  $USERINITIAL = '';  
  $BRIEF = '';  
  $COUNSELLING = '';   
  $USERINITIAL = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM counsellingservices WHERE NTIHCNO = '$id' AND PROBLEM_CATEGORY = 'REASONFORTEST'  
                                            GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $CID          = $row['CID'];  
	 $DATECREATED      = $row['DATECREATED'];  
	 $VISTBY      = $row['VISTBY'];  
     $cate[]    = $row['PROBLEM_CATEGORY']; 	 
	 $pro[]    = $row['PROBLEM'];    
     $NTIHCNO  = $row['NTIHCNO'];
	 $ACTION = $row['ACTION'];
     $BRIEF    = $row['BRIEF']; 
	 $COUNSELLING    = $row['COUNSELLING']; 
	 $USERINITIAL    = $row['USERINITIAL']; 	 
      } 
     ?>
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:0px;">Service date </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED" value="<?php  echo $DATECREATED; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th> 
</tr>
			  </table>
			 
			  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr>
	            <th style="width:25%;border:0px;">Vist by </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="VISTBY" id="VISTBY" value="<?php  echo $VISTBY; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
              </tr>
			  </table>
  
     <?php
	include_once 'connect/config.php';
?> 
<table id="example" class='table table-bordered table-responsive' style="font-weight:normal;margin-top: -13px; ">
<tr>
<th style="width:1%;">*</th>
   <th style="width:8%;">REASON(S) FOR TESTING</th> 
    
</tr> 
<?php
	$res = $MySQLiconn->query("SELECT * FROM counsellingservices WHERE NTIHCNO = '$id' AND PROBLEM_CATEGORY = 'REASONFORTEST'  
                                          GROUP BY PROBLEM, NTIHCNO, DATECREATED ORDER BY PROBLEM, NTIHCNO, DATECREATED");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  /></td> </td>  
			<td><input type="text" name="cd[]" value="<?php echo $row['PROBLEM']; ?> " class="form-control" /></td>
             
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?> 

</table>
								
	 <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			   <th style="width:50%;border:0px;">Bief </th>
				<th style="width:50%;border:0px;"> <input type="text"  name="BRIEF" id="BRIEF" value="<?php  echo $BRIEF; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th> 
				  </tr>
			  </table>
				
				 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr> 
			  <td style="width:100%;border:0px; font-weight:bold;">Counselling</td>  
              </tr>
			  </table>
			  
			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>  
				<td style="width:100%;border:0px;"> <input type="text"  name="COUNSELLING" id="COUNSELLING" value="<?php  echo $COUNSELLING; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>  
              </tr>
			  </table> 	 
              </div>
			  
			  <div class="col-sm-8" style="margin-top: 0px;"> 
              <table class="table-responsive" >
              <table class="table" style="margin-top:2px;">
              <tr>
			    <th style="width:80%;border:1px solid #ecf0f5;">Pre-Test Counselling done / information given </th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="PRE_TESTCOUSELLING_GIVEN" id="PRE_TESTCOUSELLING_GIVEN" 
				value="<?php  echo $PRE_TESTCOUSELLING_GIVEN; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				
				  </tr>
			  </table>
			  
			  <table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">Counselled as </th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="COUNSELLED_AS" id="COUNSELLED_AS" 
				value="<?php  echo $COUNSELLED_AS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">HCT Entry Point</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="HCT_ENTRYPOINT" id="HCT_ENTRYPOINT" 
				value="<?php  echo $HCT_ENTRYPOINT; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">Have you ever Tested for HIV before?</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="EVERTESTEDBEFORE" id="EVERTESTEDBEFORE" 
				value="<?php  echo $EVERTESTEDBEFORE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">How many times have you tested in the last 12 months</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="NUMBEROFTESTS" id="NUMBEROFTESTS" 
				value="<?php  echo $NUMBEROFTESTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">Number of sexual partners in the last 12 months</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="NUMBEROFSEXUALPARTNERS" id="NUMBEROFSEXUALPARTNERS" 
				value="<?php  echo $NUMBEROFSEXUALPARTNERS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">What was the test results last time you Tested?</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="LAST_TESTRESULTS" id="LAST_TESTRESULTS" 
				value="<?php  echo $LAST_TESTRESULTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">Has your Partner / Spouse been tested for HIV before?</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="SPOUSE_PARTNERTESTED_BEFORE" id="SPOUSE_PARTNERTESTED_BEFORE" 
				value="<?php  echo $SPOUSE_PARTNERTESTED_BEFORE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">If yes what were the results?</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="IFYES_RESULTS" id="IFYES_RESULTS" 
				value="<?php  echo $IFYES_RESULTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				
				</div>
				 </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border" style="background-color: #ecf0f5;">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordionx" href="#collapseTworx">
                       General counselling
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTworx" class="panel-collapse collapse">
                    <div class="box-body"><BR>
					
				
				  <?php 
  $id = $id ;  
  $CID = ''; 
  $CREATEDDATE = '';
  $VISTBY = '';   
  $cate   = array();
  $pro    = array();   
  $NTIHCNO = '';  
  $ACTION = '';   
  $USERINITIAL = '';  
  $BRIEF = '';  
  $COUNSELLING = '';   
  $USERINITIAL = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM counsellingservices WHERE NTIHCNO = '$id'  GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $CID          = $row['CID'];  
	 $DATECREATED      = $row['DATECREATED'];  
	 $VISTBY      = $row['VISTBY'];  
     $cate[]    = $row['PROBLEM_CATEGORY']; 
	 $pro[]    = $row['PROBLEM'];    
     $NTIHCNO  = $row['NTIHCNO'];
	 $ACTION = $row['ACTION'];
     $BRIEF    = $row['BRIEF']; 
	 $COUNSELLING    = $row['COUNSELLING']; 
	 $USERINITIAL    = $row['USERINITIAL']; 	 
      } 
     ?>
	  
         <div class="col-sm-4" style="border:2px solid #ecf0f5;">
		 <?php
	include_once 'connect/config.php';
?> 
<table id="example" class='table table-bordered table-responsive' style="margin-left: 0px; width:">
<tr>
<th style="width:1%;">*</th>
   <th style="width:8%;">GENERAL</th> 
    
</tr> 
<?php
	$res = $MySQLiconn->query("SELECT * FROM counsellingservices WHERE NTIHCNO = '$id' AND PROBLEM_CATEGORY = 'GENERALTOPIC'  
                                            GROUP BY PROBLEM, NTIHCNO, DATECREATED ORDER BY PROBLEM, NTIHCNO, DATECREATED");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  /></td> </td>  
			<td><input type="text" name="cd[]" value="<?php echo $row['PROBLEM']; ?> " class="form-control" /></td>
             
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?> 

</table>
			  </div>
								
			<div class="col-sm-4" style="border:2px solid #ecf0f5;">				 
            <?php
	include_once 'connect/config.php';
?> 
<table id="example" class='table table-bordered table-responsive' style="margin-left: 0px; width:">
<tr>
<th style="width:1%;">*</th>
   <th style="width:8%;">PSYCHOLOGICAL</th> 
    
</tr> 
<?php
	$res = $MySQLiconn->query("SELECT * FROM counsellingservices WHERE NTIHCNO = '$id' AND PROBLEM_CATEGORY = 'PSHYCOLOGICAL'  
                                            GROUP BY PROBLEM, NTIHCNO, DATECREATED ORDER BY PROBLEM, NTIHCNO, DATECREATED");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  /></td> </td>  
			<td><input type="text" name="cd[]" value="<?php echo $row['PROBLEM']; ?> " class="form-control" /></td>
             
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?> 

</table>
					</div> 

					<div class="col-sm-4" style="border:2px solid #ecf0f5;">
					 <?php
	include_once 'connect/config.php';
?> 
<table id="example" class='table table-bordered table-responsive' style="margin-left: 0px; width:">
<tr>
<th style="width:1%;">*</th>
   <th style="width:8%;">SEXUAL HEALTH</th> 
    
</tr> 
<?php
	$res = $MySQLiconn->query("SELECT * FROM counsellingservices WHERE NTIHCNO = '$id' AND PROBLEM_CATEGORY = 'SEXUAL HEALTH'  
                                            GROUP BY PROBLEM, NTIHCNO, DATECREATED ORDER BY PROBLEM, NTIHCNO, DATECREATED");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  /></td> </td>  
			<td><input type="text" name="cd[]" value="<?php echo $row['PROBLEM']; ?> " class="form-control" /></td>
             
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?> 

</table>
					</div> 
					
					<div class="col-sm-4" style="border:2px solid #ecf0f5;">
					 <?php
	include_once 'connect/config.php';
?> 
<table id="example" class='table table-bordered table-responsive' style="margin-left: 0px; width:">
<tr>
<th style="width:1%;">*</th>
   <th style="width:8%;">STDs</th> 
    
</tr> 
<?php
	$res = $MySQLiconn->query("SELECT * FROM counsellingservices WHERE NTIHCNO = '$id' AND PROBLEM_CATEGORY = 'STDS'  
                                            GROUP BY PROBLEM, NTIHCNO, DATECREATED ORDER BY PROBLEM, NTIHCNO, DATECREATED");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  /></td> </td>  
			<td><input type="text" name="cd[]" value="<?php echo $row['PROBLEM']; ?> " class="form-control" /></td>
             
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?> 

</table>
					</div> 
					  
					
					<div class="col-sm-4" style="border:2px solid #ecf0f5;">
					 <?php
	include_once 'connect/config.php';
?> 
<table id="example" class='table table-bordered table-responsive' style="margin-left: 0px; width:">
<tr>
<th style="width:1%;">*</th>
   <th style="width:8%;">BODY CHANGES</th> 
    
</tr> 
<?php
	$res = $MySQLiconn->query("SELECT * FROM counsellingservices WHERE NTIHCNO = '$id' AND PROBLEM_CATEGORY = 'BODYCHANGES'  
                                            GROUP BY PROBLEM, NTIHCNO, DATECREATED ORDER BY PROBLEM, NTIHCNO, DATECREATED");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  /></td> </td>  
			<td><input type="text" name="cd[]" value="<?php echo $row['PROBLEM']; ?> " class="form-control" /></td>
             
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?> 

</table>
					     </div> 
					  </div> 
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border" style="background-color: #ecf0f5;">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordionx" href="#collapseTwox">
                       HCT results/ Post Test Counselling
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwox" class="panel-collapse collapse">
                    <div class="box-body"><BR> 
					
	  <?php 
  $id = $id ;  
  $LABID = '';  
  $DATECREATED = '';
  $NTIHCNO = '';   
  $TESTDESCRIPTION = ''; 
  $REQUESTINGUNIT = '';   
  $EXPIRYDATET1 = '';
  $EXPIRYDATET2 = ''; 
  $EXPIRYDATET3 = '';  
  $REACTIVITYT1 = '';   
  $REACTIVITYT2 = ''; 
  $REACTIVITYT3 = '';    
  $FINALREACTIVITY = '';   
  $TECHNICIAN_NAME = ''; 
  $TITLE = ''; 
  $RESULTSRECEIVED = '';  
  $RECIEVEDASACOUPLE = '';
  $COUPLERESULTS = '';   
  $TB_SUSPICION = '';  
  $COTRIMOXAZOLE_START = '';  
  $CARE_LINK = '';
  $CDFOUR = '';   
  $ACTION = ''; 
  $COUNSELORS_NAME = '';   
  $RECIEVEDDATE = ''; 
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt"; 

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laboratory WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $LABID          = $row['LABID'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $TESTDESCRIPTION = $row['TESTDESCRIPTION'];
     $REQUESTINGUNIT    = $row['REQUESTINGUNIT'];  
	 $EXPIRYDATET1      = $row['EXPIRYDATET1'];
     $EXPIRYDATET2 = $row['EXPIRYDATET2'];
     $EXPIRYDATET3    = $row['EXPIRYDATET3']; 	 
     $REACTIVITYT1  = $row['REACTIVITYT1'];
	 $REACTIVITYT2 = $row['REACTIVITYT2'];
     $REACTIVITYT3    = $row['REACTIVITYT3'];  
	 $FINALREACTIVITY  = $row['FINALREACTIVITY'];
	 $TECHNICIAN_NAME = $row['TECHNICIAN_NAME'];
     $TITLE    = $row['TITLE'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $TESTDESCRIPTION = $row['TESTDESCRIPTION']; 
	 $RESULTSRECEIVED    = $row['RESULTSRECEIVED']; 	 
     $RECIEVEDASACOUPLE  = $row['RECIEVEDASACOUPLE'];
	 $COUPLERESULTS = $row['COUPLERESULTS'];
     $TB_SUSPICION    = $row['TB_SUSPICION'];  
	 $COTRIMOXAZOLE_START  = $row['COTRIMOXAZOLE_START'];
	 $CARE_LINK = $row['CARE_LINK'];
     $CDFOUR    = $row['CDFOUR'];  
	 $ACTION      = $row['ACTION'];   
     $COUNSELORS_NAME  = $row['COUNSELORS_NAME'];
	 $RECIEVEDDATE = $row['RECIEVEDDATE'];  
      } 
     ?>
		
	
				<div class="col-sm-5" style="border: 2px solid #ecf0f5;">
				<table class="table-responsive" ><b>HIV </b> <b>Lab results</b>
				<table class="table" style="margin-left:0px; background-color:#fff; font-weight:normal; border:2px solid #ecf0f5;">
         <thead>
         <th>*</th>
         <th>HIV Test 1</th>
         <th>HIV Test 2</th>
         <th>HIV Test 3</th>
         </thead>

         <thead>
         <th>Kit name</th>
         <th>Determine</th>
         <th>Start Pack</th>
         <th>Unigold</th>
         </thead>
    <tbody>
      <tr>
       <th>Lot No.</th>
        <td ><input type="text" value="1"  readonly style="width:100%; text-align:center;"></td>
        <td ><input type="text" value="2" readonly style="width:100%; text-align:center;"></td>
        <td ><input type="text" value="3" readonly style="width:100%; text-align:center;"></td>
        </tr>

         <form method="post" class="form-horizontal" action="updatecmgt/update_counselling_lab_results.php">
 
         <tr>
         <th >Expiry date</th>
        <td ><input type="text" name="EXPIRYDATET1" id="myEXPIRYDATET1" value="<?php  echo $EXPIRYDATET1; ?>"  readonly="readonly" 
		style="width:100%; text-align:center;"></td>
        <td ><input type="text" name="EXPIRYDATET2" id="myEXPIRYDATET2" value="<?php  echo $EXPIRYDATET2; ?>"  readonly="readonly"
		style="width:100%; text-align:center;"></td>
        <td ><input type="text" name="EXPIRYDATET3" id="myEXPIRYDATET3" value="<?php  echo $EXPIRYDATET3; ?>"  readonly="readonly"
		style="width:100%; text-align:center;"></td>
     </tr>
    <tr>

    <tr>
        <th>Reactivity</th>
        <td style=" border:1px solid #ecf0f5;"><input type="text"  name="REACTIVITYT1" id="myREACTIVITYT1" 
		value="<?php  echo $REACTIVITYT1; ?>"  readonly="readonly"   
		style="width:100%; text-align:center;">
                              
                                </td>
        <td style=" border:1px solid #ecf0f5;"><input type="text"  id="myREACTIVITYT2" name="REACTIVITYT2" 
		value="<?php  echo $REACTIVITYT2; ?>"  readonly="readonly"   
		style="width:100%; text-align:center;">
                                
                                </td>
        <td style=" border:1px solid #ecf0f5;"><input type="text"  id="myREACTIVITYT3" name="REACTIVITYT3" 
		value="<?php  echo $REACTIVITYT3; ?>"  readonly="readonly"
		style="width:100%; text-align:center;">
       </td> 
    </tr>
    </tbody>
    </table>
	<br>
	<table class="table-responsive" >
                <table class="table" style="margin-top: -23px;">
                <tr> 
				<th style="width:35%;border:1px solid #ecf0f5;">Final reactivity</th>
				<th style="width:65%;border:1px solid #ecf0f5;"> <input type="text"  name="FINALREACTIVITY" id="FINALREACTIVITY" 
				value="<?php  echo $FINALREACTIVITY; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:bold; background-color:#000; color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:35%;border:1px solid #ecf0f5;">Technician name</th>
				<th style="width:65%;border:1px solid #ecf0f5;"> <input type="text"  name="TECHNICIAN_NAME" id="TECHNICIAN_NAME" 
				value="<?php  echo $TECHNICIAN_NAME; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
                <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:35%;border:1px solid #ecf0f5;">Title</th>
				<th style="width:65%;border:1px solid #ecf0f5;"> <input type="text"  name="TITLE" id="TITLE" 
				value="<?php  echo $TITLE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				
				
				</div>
				
				<div class="col-sm-7">
				<table class="table-responsive" ><b>Post Test Counselling</b>
              <table class="table" style="margin-top:2px;">
              <tr>
			    <th style="width:80%;border:1px solid #ecf0f5;">Results recieved </th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="RESULTSRECEIVED" id="RESULTSRECEIVED" 
				value="<?php  echo $RESULTSRECEIVED; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				
				  </tr>
			  </table>
			  
			  <table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">As a couple </th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="RECIEVEDASACOUPLE" id="RECIEVEDASACOUPLE" 
				value="<?php  echo $RECIEVEDASACOUPLE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				 <table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">Couple results</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="COUPLERESULTS" id="COUPLERESULTS" 
				value="<?php  echo $COUPLERESULTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table> 
				
				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">Is there suspicion of TB.(Current cough,fever,weight loss and night sweats) </th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="TB_SUSPICION" id="TB_SUSPICION" 
				value="<?php  echo $TB_SUSPICION; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">Has client started Co-trimoxazole prophylasis dosage? </th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="COTRIMOXAZOLE_START" id="COTRIMOXAZOLE_START" 
				value="<?php  echo $COTRIMOXAZOLE_START; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">Has client been linked care or any other service?</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="CARE_LINK" id="CARE_LINK" 
				value="<?php  echo $CARE_LINK; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				<table class="table-responsive" >
              <table class="table" style="margin-top: -19px;">
                <tr> 
				<th style="width:80%;border:1px solid #ecf0f5;">CD4 count results (If applicable)</th>
				<th style="width:20%;border:1px solid #ecf0f5;"> <input type="text"  name="CDFOUR" id="CDFOUR" 
				value="<?php  echo $CDFOUR; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th>  
				</tr>
			    </table>
				
				</div>
				 <br>
				<div class="col-sm-12" style="border: 2px solid #ecf0f5;">
				 <table class="table-responsive" >
            <table class="table" style="border:0px;margin-top: 10px;">
              <tr> 
			    <th style="width:25%;border:0px; background-color:#ecf0f5;">Action taken</th>
				<th style="width:75%;border:0px;background-color:#ecf0f5;"> <textarea name="ACTION"  
				style="width:100%;" ><?php echo $ACTION;?>  
				</textarea> </th>     
              </tr>
			  </table>
				
		      <table class="table-responsive" style="margin-top:0px;">
              <table class="table" style="border:2px solid #ecf0f5;">
              <tr>
			    <th style="width:14%;border:0px;">Counsellor's Name </th>
				<th style="width:36%;border:0px;"> <input type="text"  name="COUNSELORS_NAME" id="COUNSELORS_NAME" 
				value="<?php  echo $COUNSELORS_NAME; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				<th style="width:14%;border:0px;"> Results date </th>
                <td style="width:36%;border:0px;"> <input type="text" name="RECIEVEDDATE" id="RECIEVEDDATE"  
				value="<?php  echo $RECIEVEDDATE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </td>
              </tr>
			  </table></div>
				
              </div> </div>
			  </div> </div>
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="tab_1-1art">
               <p>ART </p>
               
              </div>
              <!-- /.tab-pane -->
              
               <div class="tab-pane" id="tab_1-1lab">
               <p> LAB</p>
               
              </div>
              <!-- /.tab-pane -->
              
               <div class="tab-pane" id="tab_1-1disp">
               <p>DISP </p>
               
              </div>
              <!-- /.tab-pane -->
              
               <div class="tab-pane" id="tab_1-1ref">
               <p> REFERRAL</p>
               
              </div>
              <!-- /.tab-pane -->
              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      
		
	  
	
	 
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
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'; 
				
     var  s1a = '<input type="text" name="prob[]" id="prob'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';
 

     var  s4c =  '<input type="numeric" name="catg[]" id="catg'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
				
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
	 'background-color:#fff; width:100%;">';
	 
     var  sab = '<input type="text" name="cur[]" id="cur_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:#fff; width:100%;">'; 

	 
	 var  sac = '<input type="text" name="bix[]" id="bix_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:#fff; width:100%;">'; 

	 
     var  sad = '<input type="text" name="max[]" id="max_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:#fff; width:100%;">'; 

	 var  sae =  '<input type="numeric" name="mixy[]" id="mixy_'+rowCount+'" onkeyup="calcmoney(\'mytable12\')" value="0" required="required" '+
                'style= " margin-right:0px; width:100%; background-color:#fff;" >';
						 
				
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
     var  s1za = '<input type="text" name="reason[]" id="reason'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+ 'background-color:#fff; width:100%;">';
 

	 var  s2zb =  '<input type="numeric" name="counsellingtopic[]" id="counsellingtopic'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
				  

     var  s4zc =  '<input type="numeric" name="counsellingdesc[]" id="counsellingdesc'+rowCount+'"   '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
				
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
		   

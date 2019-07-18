  
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
$connect = new mysqli("localhost", "root", "", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT * FROM ntihcdrugs"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['DRUGNAME'] . "</option>";   }
  }
$connect->close();
?>

<script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#dn"+num).val(data[2]);
  $("#instock").val(data[2]);
  $("#PROGRAMME").val(data[3]); 


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "drugsearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>


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
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">MEDICAL EXAMINATION CLIENT CARD </legend> </center> 
          
       
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
  $id =  $_GET['q']; 
  $EID = ''; 
  $catx   = array();
  $probx    = array(); 
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
     $catx[]    = $row['MEDICALPROBLEM']; 
	 $probx[]    = $row['MEDICALTOPIC'];  
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
	   
       <?php 
  $id =  $_GET['q']; 
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
	 
	 
     <div class="col-sm-7">  
<form class="form-horizontal" action="medical_update.php" method="post" style="height:auto;">

	 <table class="table-responsive">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:0px;">Service date </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED" value="<?php  echo $DATECREATED; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </th> 

	            <th style="width:25%;border:0px;">Vist by </th>
				<th style="width:25%;border:0px;"> <select  name="VISTBY" id="VISTBY" value="<?php  echo $VISTBY; ?>"    
				required="required" style="width:100%; font-weight:normal; background-color:#ecf0f5;"> 
				 <option value="<?php echo $VISTBY;?>"> <?php echo $VISTBY;?> </option>
                                                   <option value="YOUTH">YOUTH</option>
                                                   <option>PARENT</option>
                                                   <option>YOUTH AND PARENT</option>
                                                   <option>COUPLE</option>
                                                   </select>
				</th>  
              </tr>
			  </table> 
			  
  <table class="table table-striped" id="mytable11" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th> 
   <th>PROBLEM CATEGORY</th> 
   <th>DESCRIPTION</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
    <?php  $tot = count($catx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($probx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
												  
												  <td> <input  name="catx[]" readonly="" type="text" value="<?php  echo $catx[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                                   
												   
                                                  <td> <input  name="probx[]" readonly="" type="text" value="<?php  echo $probx[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
     <input type="button" onClick="addRow166('mytable11')" value="Add row" class="btn-success"   />
     <input type="button" onClick="deleteRow166('mytable11')" value="Remove" class="btn-danger" />
     <input type="hidden" id="mytable_rows11" value="0">
 
                                       </tbody>
                                </table> 
								 
	 
	  <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;">
              <tr>    
            <td>Urgency</td>
            <td>  <input type="radio" name="URGENCYTYPE"
			<?php if (isset($URGENCYTYPE) && $URGENCYTYPE=="NORMAL") echo "checked";?>
value="NORMAL">&nbsp NORMAL
			<input type="radio" name="URGENCYTYPE"
<?php if (isset($URGENCYTYPE) && $URGENCYTYPE=="EMERGENCY") echo "checked";?>
value="EMERGENCY">&nbsp EMERGENCY
             <input type="radio" name="URGENCYTYPE"
<?php if (isset($URGENCYTYPE) && $URGENCYTYPE=="CRITICAL") echo "checked";?>
value="CRITICAL"> &nbsp CRITICAL  </td>


            </td>
        <tr>
            <td>Counselling done</td>
			<td>  <input type="radio" name="COUNSELLINGDONE"
			<?php if (isset($COUNSELLINGDONE) && $COUNSELLINGDONE=="YES") echo "checked";?>
value="YES">&nbsp YES
			<input type="radio" name="COUNSELLINGDONE"
<?php if (isset($COUNSELLINGDONE) && $COUNSELLINGDONE=="NO") echo "checked";?>
value="NO">&nbsp NO 
            </td> 
        </tr>
       </tbody>
      </table>	
      <table class="table-responsive" >
            <table class="table" style="border:0px;">
              <tr> 
			    <th style="width:25%;border:0px; background-color:#ecf0f5;">Problem brief</th>
				<th style="width:75%;border:0px;background-color:#ecf0f5;"> <textarea name="PROBLEMBRIEF"  style="width:100%;" ><?php echo $PROBLEMBRIEF;?>  
				</textarea> </th>    
              </tr>
			  </table>
		  
        </div>  
		
        <input type="hidden"  name="NTIHCNO"   id="myNTIHCNO" value="" >
		<input type="hidden" id="myID" name="RID">
		<input type="hidden"  name="AGE1" id="myAGE1">
		<input type="hidden" id="myAGEGP" name="AGE_GROUP"> 
		<input type="hidden"  id="REGISTERACCOUNT" name="REGISTERACCOUNT"  value="<?php echo $rm; ?>" >
		<input type="hidden"  id="USERINITIAL" name="USERINITIAL"  value="<?php echo $nameofuser; ?>" >
		<input type="hidden"  id="SERVICEPROVIDER" name="SERVICEPROVIDER"  value="<?php echo $nameofuser; ?>" >
		<input type="hidden"  name="REQUESTINGUNIT" id="REQUESTINGUNIT" >  
		 
		
		   <div class="col-sm-5" style="border:2px solid #ecf0f5;">
	 <table class="table-responsive" > <center><b style="text-align:center;">Turn On Lab request to activate</b></center>
            <table class="table" style="border:0px;">
              <tr>    
            <td>Lab order processing</td>
            <td>  <input type="radio" name="TROOM_INITIATION" id="TROOM_INITIATION" value="OFF" checked>
        <label for="OFF">OFF</label>
		<input name="TROOM_INITIATION" type="radio" id="TROOM_INITIATION" value="ON">
		<label for="ON">ON</label>  </td> 
 
        <tr>
            <td>Add test(s) required</td>
             <td>   <input type="text" name="TESTDESCRIPTION" id="TESTDESCRIPTION" value="<?php  echo $TESTDESCRIPTION; ?>" style="width:100%;" </td>
        </tr>
       </tbody>
      </table>	   
		   </div>
		   <br> <br> <br>  <br> <br>  <br>  
		    <div class="col-sm-5" style="border:2px solid #ecf0f5;">
			
	<table class="table-responsive" style="margin-top:0px;"> 
            <table class="table" style="border:0px;"><center><b style="text-align:center;">HCG</b></center>
              <tr> 
            <td>Activate HCG if required</td>
            <td>  <input type="radio" name="HCGSTATUS" id="HCGSTATUS" value="NO" checked>
        <label for="NO">DEACTIVE</label> </td>
		<td>
		<input name="HCGSTATUS" type="radio" id="HCGSTATUS" value="YES" >
		<label for="YES">ACTIVATE</label>  </td>


            </td>
        <tr>
            <td>Results</td>
             <td>   <input type="radio" name="HCGRESULTS" id="HCGRESULTS" value="NEGATIVE" checked>
        <label for="NEGATIVE">NEGATIVE</label></td>
		<td>
		<input name="HCGRESULTS" type="radio" id="HCGRESULTS" value="POSITIVE">
		<label for="POSITIVE">POSITIVE</label>
                               </td>
							   
		</td>
        <tr>
            <td>Justify results</td>
             <td>   <input type="radio" name="HCGPOSITIVE" id="HCGPOSITIVE" value="WANTED" checked>
        <label for="WANTED">WANTED</label> </td>
		<td><input name="HCGPOSITIVE" type="radio" id="HCGPOSITIVE" value="UN WANTED">
		<label for="UN WANTED">UN WANTED</label>
                               </td>					   
        </tr>
         </tbody>
      </table>
  </div>
  <?php 
  $id = $id ;  
  $DID = ''; 
  $CREATEDDATE = '';
  $dnx   = array();
  $fqx    = array();
  $tmx   = array();  
  $pdx    = array();
  $qtyx   = array();  
  $NTIHCNO = '';  
  $DISPENSEDBY = '';   
  $REQUESTINGUNIT = '';  
  $PRESCRIPTIONCOMMENT = '';
  $FOLLOWUP = '';  
  $FOLLOWUPDATE = ''; 
  
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
     $dnx[]    = $row['DRUGNAME']; 
	 $fqx[]    = $row['FREQUENCY'];
     $tmx[]       = $row['TIMES'];  
	 $pdx[]    = $row['PERIOD'];
     $qtyx[]       = $row['QTYPRESCRIBED']; 
	
     $NTIHCNO  = $row['NTIHCNO'];
	 $DISPENSEDBY = $row['DISPENSEDBY'];
     $REQUESTINGUNIT    = $row['REQUESTINGUNIT']; 
	 $PRESCRIPTIONCOMMENT    = $row['PRESCRIPTIONCOMMENT']; 
	 $FOLLOWUP    = $row['FOLLOWUP']; 
	 $FOLLOWUPDATE    = $row['FOLLOWUPDATE']; 
	 
	
      } 
     ?>
  <BR>
    <div class="col-sm-7"> 
	
	 <table class="table table-bordered" id="mytable100" style="font-weight:normal;margin-top: -13px; ">
    <thead>
      <tr  class="  ">  
    <th style="width:5%;">*</th> 
   <th style="width:55%;">DRUG</th>  
   <th style="width:10%;">QTY</th>
   <th style="width:10%;">TIMES</th> 
   <th style="width:10%;">PERIOD</th>
   <th style="width:10%;">TOTAL</th>  
      </tr>
      </thead>
      <tbody>  
         <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  <td> <input  name="fqx[]" readonly="" type="text" value="<?php  echo $fqx[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
												   
                                                   <td> <input  name="tmx[]" readonly="" type="text" value="<?php  echo $tmx[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                                   
                                                  <td> <input  name="pdx[]" readonly="" type="text" value="<?php  echo $pdx[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
												   
												   <td> <input  name="qtyx[]" readonly="" type="text" value="<?php  echo $qtyx[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                
    </tbody>
  </table>
     <input type="button" onClick="addRow16('mytable100')" value="Add drugs" class="btn-success" style="background-color:green;" />
     <input type="button" onClick="deleteRow16('mytable100')" value="Remove" class="btn-danger" style="background-color:red;"/>
     <input type="hidden" id="mytable_rows1" value="0"> 
	 
			  </div> 
			
	   <div class="col-sm-5"> 		  
	 <div id="res" style="border:0px;"> </div>		  
 </div> 
 
    <div class="col-sm-7">  
	
	 <table class="table-responsive" >
            <table class="table" style="border:0px;margin-top: 10px;">
              <tr> 
			    <th style="width:25%;border:0px; background-color:#ecf0f5;">Prescription comment</th>
				<th style="width:75%;border:0px;background-color:#ecf0f5;"> <textarea name="PRESCRIPTIONCOMMENT"  
				style="width:100%;" ><?php echo $PRESCRIPTIONCOMMENT;?>  
				</textarea> </th>     
              </tr>
			  </table>
	</div>
	
	<div class="col-sm-5"> 
	<table class="table-responsive" style="margin-top:10px; border:1px solid #ecf0f5;"> 
   <thead>
   <tr>
   <th> <b>Activate Medical follow up </b> </th>
   <th> Shedule date</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td>  <input type="radio" name="FOLLOWUP" id="FOLLOWUP" value="NOT REQUIRED" checked>
        <label for="NOT REQUIRED">NOT REQUIRED</label>
		<input name="FOLLOWUP" type="radio" id="FOLLOWUP" value="REQUIRED">
		<label for="REQUIRED">REQUIRED</label>  </td> 
   
   <td style="width:30%;"><input type="text" name="FOLLOWUPDATE" id="FOLLOWUPDATE"  value="<?php  echo $FOLLOWUPDATE; ?>"  
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   </tr>
  <tr>
 </tbody>
 </table> 
	</div>
	
	<div class="col-sm-7"	>   
        <table class="table-responsive" style="margin-top:1px;border:1px solid;"><b style="text-align:left; "></b>
            <table class="table" style="border:1px solid #ecf0f5;">
              <tr> 
			  <td style="width:50%;border:0px; font-weight:bold; color:blue;">Turn on referral to process if required </td>
			   <td>  <input type="radio" name="REFTUNER" id="REFTUNER" value="SWITCHED OFF" checked>
        <label for="SWITCHED OFF">SWITCHED OFF</label>
		<input type="radio" name="REFTUNER"  id="REFTUNER" value="TURN ON">
		<label for="TURN ON">TURN ON</label>  </td> 
              </tr>
			  </table>
			  
			  
			   <table class="table-responsive" style="margin-top:-20px;border:1px solid;"><b style="text-align:left; "></b>
            <table class="table" style="border:1px solid #ecf0f5;">
              <tr> 
			  <td style="width:25%;border:0px; font-weight:bold;">Referral centre </td>
				<td style="width:75%;border:0px;"> <select  name="MEDICALREFERRAL" id="MEDICALREFERRAL" value="<?php echo $MEDICALREFERRAL;?>"
			 style="width:100%; font-weight:normal; background-color:#ecf0f5;">  
			                     <option value="<?php echo $MEDICALREFERRAL;?>"> <?php echo $MEDICALREFERRAL;?> </option> 
								 <option value="NTIHC">NTIHC</option>
                                 <option value="AIC">AIC</option>
                                 <option value="BUTABIKA HOSPITAL">BUTABIKA HOSPITAL</option>
                                 <option value="CHINA-UG FRIENDSHIP HOSP">CHINA-UG FRIENDSHIP HOSP</option>
                                 <option value="KADIC CLINIC">KADIC CLINIC</option>
                                 <option value="KAMPALA DISPENSARY">KAMPALA DISPENSARY</option>
                                 <option value="KIBULI HOSPITAL">KIBULI HOSPITAL</option>
                                 <option value="KISWA HEALTH CENTRE">KISWA HEALTH CENTRE</option>
                                 <option value="KISWA TB CLINIC">KISWA TB CLINIC</option>
                                 <option value="LUBAGA HOSPITAL">LUBAGA HOSPITAL</option>
                                 <option value="MENGO HOSPITAL">MENGO HOSPITAL</option>
                                 <option value="MILDMAY">MILDMAY</option>
                                 <option value="MULAGO ASSESSMENT CENTRE">MULAGO ASSESSMENT CENTRE</option>
                                 <option value="MULAGO DENTAL CLINIC">MULAGO DENTAL CLINIC</option>
                                 <option value="MULAGO ENT CLINIC">MULAGO ENT CLINIC</option>
                                 <option value="MULAGO EYE CLINIC">MULAGO EYE CLINIC</option>
                                 <option value="MULAGO MAIN HOSPITAL">MULAGO MAIN HOSPITAL</option>
                                 <option value="MULAGO SICKLE CELL CLINIC">MULAGO SICKLE CELL CLINIC</option>
                                 <option value="MULAGO SKIN CLINIC">MULAGO SKIN CLINIC</option>
                                 <option value="MULAGO STD CLINIC">MULAGO STD CLINIC</option>
                                 <option value="MULAGO SURGICAL OPD">MULAGO SURGICAL OPD</option>
                                 <option value="MULAGO TB MANAGEMENT">MULAGO TB MANAGEMENT</option>
                                 <option value="MULAGO ULTRA SCAN">MULAGO ULTRA SCAN</option>
                                 <option value="NSAMBYA">NSAMBYA</option>
                                 <option value="REACHOUT MBUYA">REACHOUT MBUYA</option>
                                 <option value="TASO">TASO</option>
                                 <option value="POLICE">POLICE</option>
			 </td>  
              </tr>
			  </table>
			  
			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:1px solid #ecf0f5;">
              <tr> 
			  <td style="width:25%;border:0px; font-weight:bold;">Service referred </td>
				<td style="width:75%;border:0px;"> <select name="SERVICEREFERREDFOR" id="SERVICEREFERREDFOR"  value="<?php echo $SERVICEREFERREDFOR;?>"
			  style="width:100%; font-weight:normal; background-color:#ecf0f5;"> 
			  <option value="<?php echo $SERVICEREFERREDFOR;?>"> <?php echo $SERVICEREFERREDFOR;?> </option> 
                        <option value="ART, SUPPORT & CARE">ART, SUPPORT & CARE</option>
                        <option value="FURTHER MANAGEMENT">FURTHER MANAGEMENT</option>
					</select>
			  

			  </td>  
              </tr>
			  </table> 
          </div>	

		  <div class="col-sm-5"	>   
        <table class="table-responsive" style="margin-top:0px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr> 
			  <td style="width:100%;border:0px; font-weight:bold;">Action taken </td>  
              </tr>
			  </table>
			  
			 <table class="table-responsive" style="margin-top:-20px;"><b style="text-align:left; "></b>
            <table class="table" style="border:0px;">
              <tr>  
				<td style="width:100%;border:0px;"> <select name="ACTIONTAKEN" id="ACTIONTAKEN"  value="<?php echo $ACTIONTAKEN;?>"
			 style="width:100%; font-weight:normal; background-color:#ecf0f5;"> \
			  <option value="<?php echo $ACTIONTAKEN;?>"> <?php echo $ACTIONTAKEN;?> </option>
			                                        <option> TREATED </option>
			                                        <option> REFERRED </option>
                                                    <option> TREATED AND REFERRED </option>
                              	                    </select>
			 </td>  
              </tr>
			  </table> 
        <center> <input type="submit" name="button" id="button" value="Update " 
		style= " font-size:15px; font-weight:bold; border-radius:11px; background-color:#000000; color:#ffffff; height:30px;"/> </center>
             <div class="clear"> 
			 
			 </form
			 
			 
			 
		 <!-- /.START EXAM SCRIPT --> 
     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("TO").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<select name="catx[]" required="required"  id="catx'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+ 
						'<option> </option>'+
                        '<option>GENERAL</option>'+
             			'<option>PREGNANCY</option>'+
             		    '<option>STI</option>'+
						'<option>SGBV</option>'+
                        '<option>BODY CHANGES</option>'+
             		    '<option>SEXUAL HEALTH</option>'+
                                        '</select>';


	 var  s2b =  '<select name="probx[]" required="required"  id="probx'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
					    '<option> </option>'+
                            '<option>ABDOMINAL PAIN</option>'+
                                            '<option>ABNORMAL VAGINAL DISCHARGE</option>'+
                                            '<option>ANTE-NATAL CARE</option>'+
                                            '<option>BACKACHE</option>'+
                                            '<option>C-C SCREENING-INITIAL</option>'+
                                            '<option>C-C SCREENING-ROUTINE RESCREENING</option>'+
                                            '<option>C-C VIA NEGATIVE</option>'+
                                            '<option>C-C VIA POSITIVE</option>'+
                                            '<option>C-C VIA SUSPICIOUS FOR CANCER</option>'+
                                            '<option>CHEST PAIN</option>'+
                                            '<option>CONSTIPATION</option>'+
                                            '<option>CONTRACEPTIONS</option>'+
                                            '<option>COUGH</option>'+
                                            '<option>DENTAL PROBLEM</option>'+
                                            '<option>DIZZINESS</option>'+
                                            '<option>EYE PROBLEM</option>'+
                                            '<option>FAMILY PLANNING</option>'+
                                            '<option>FEVER</option>'+
                                            '+<option>FLU</option>'+
											'+<option>SKIN INFECTION</option>'+
                                            '+<option>GBV-COMMUNITY REDRESS/SUPPORT GROUP</option>'+
                                            '<option>GBV-EMERGENCY CONTRACEPTION</option>'+
                                            '<option>ABNORMAL VAGINAL DISCHARGE</option>'+
                                            '<option>GENITAL ULCER</option>'+
                                            '<option>GROWTHS IN GENITALS</option>'+
											'<option>GENITAL WARTS</option>'+
                                            '<option>HERPES SIMPLEX</option>'+
                                            '<option>HERPES ZOSTA</option>'+
                                            '<option> HIV/AIDS</option>'+
                                            '<option>ITCHING IN GENITAL</option>'+
                                            '<option>PAINFUL GENITALS</option>'+
                                            '<option>SWELLING IN GENITALS</option>'+
                                            '<option>SYPHILLIS</option>'+
                                            '<option>URETHRAL DISCHARGE</option>'+
                                            '<option>VAGINAL DISCHARGE</option>'+
                                            '<option>SEXUAL ABUSE</option>'+
                                            '<option>SEXUAL PROBLEMS</option>'+
                                            '<option>STDS-SEXUAL HEALTH</option>'+
                                           '<option> ACNE</option>'+
										   '<option>TRICHOMONIASIS</option>'+
										   '<option>PUBIC LICE</option>'+
										   '<option>CHLAMYDIA</option>'+
										   '<option>GONORRHEA</option>'+
                                           '<option>BODY ODOUR</option>'+
                                           '<option>BREAST CHANGES</option>'+
                                           '<option>MENSTRUAL RELATED PROBLEMS</option>'+
                                           '<option>MENSTRUATION</option>'+
                                           '<option>NORMAL VAGINAL DISCHARGE</option>'+
                                           '<option>SIZE OF SEX ORGANS</option>'+
                                           '<option>VIRGINITY</option>'+
                                           '<option>WET DREAMS</option>'+
                                        '</select>';

		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+ 
				                  '<td>'+s2b+' </td>';
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
		  table.rows[x].cells[1].childNodes[0].id="catx_"+x;
          table.rows[x].cells[2].childNodes[0].id="probx_"+x; 
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

 
  <!-- /.END EXAM SCRIPT -->
  
  
   <!-- /.START DRUG SCRIPT -->
  <script>
    function  dostg(thisid){

     var val = thisid.split("_")[1];
	 var v1 = parseFloat(document.getElementById("pdx_"+val).value);
	 var v2 = parseFloat(document.getElementById("fqx_"+val).value);
	 var v3 = parseFloat(document.getElementById("tmx_"+val).value);

	 var v4 = v1*v2*v3;
	  document.getElementById("qtyx_"+val).value = v4;

}

  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;
      
	 var ttt     = "<?php   echo $stss; ?>"; 
										
     var  s1aa = '<select name="dnx_[]" onKeyUp="domee(this)"  id="dnx_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">'+   
                                        '<option></option>'+
                                        '<option><?php   echo $stss; ?></option>'+ 
                                        '</select>';
				 
	 var  s2bb = '<input type="text" name="fqx_[]" onkeyup="dostg(this.id)" onchange="dostg(this.id)" id="fqx_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; text-align:center; background-color:#fff;" >';	

     var  s3cc = '<select onchange="dostg(this.id)" name="tmx_[]" required="required"  id="tmx_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%;text-align:center; background-color:#fff;" >'+ 
						                '<option>1</option>'+
                                        '<option>2</option>'+
                                        '<option>3</option>'+
										'<option>4</option>'+
                                        '</select>';	
  
	 var  s4cc = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pdx_[]" id="pdx_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; text-align:center; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="qtyx_[]" id="qtyx_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; text-align:center; background-color:#fff;" >'; 

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+ 
								  '<td>'+s4cc+' </td>'+   
								  '<td>'+s6ff+' </td> ';
								  
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId); 
  }

  function deleteRow16(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="dnx_"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqx_"+x;
          table.rows[x].cells[3].childNodes[0].id="tmx_"+x; 
		  table.rows[x].cells[5].childNodes[0].id="pdx_"+x;
		  table.rows[x].cells[6].childNodes[0].id="qtyx_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
   <!-- /.END DRUG  SCRIPT --> 

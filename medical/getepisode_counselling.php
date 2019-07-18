  
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
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
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
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">HCT / GENERAL COUNSELLING CLIENT CARD </legend> </center> 
          
       
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
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group --> 
		 
		  <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Gender</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="SEX" value="<?php echo $SEX;?>" 
						readonly="readonly" style="font-weight:normal; background-color:#fff;"> 
                    </div>
                </div>
                <!-- /.form-group -->

                  

               

 
			  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Schooling</label>
                    <div class="col-sm-7"> 
                    <input type="text"  class="form-control" name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff;"> 
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Education.level</label>
                    <div class="col-sm-7">
                      <input type="text"  class="form-control" name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" 
					   readonly="readonly" style="font-weight:normal; background-color:#fff;"> 
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Marital.status</label>
                    <div class="col-sm-7"> 
                              <input type="text"  class="form-control" name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" 
							  readonly="readonly" style="font-weight:normal; background-color:#fff;"> 
                   </div>
                </div>
		 </th>
		 
        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment</label>
                    <div class="col-sm-8"> 
                   <input type="text"  class="form-control" name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>"
				   readonly="readonly" style="font-weight:normal; background-color:#fff;"> 
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <input type="text" class="form-control" name="DISTRICT" value="<?php echo $DISTRICT;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:#fff;"> 
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
			      <input type="text" class="form-control" name="DIVISION" value="<?php echo $DIVISION;?>" readonly="readonly" 
				  style="font-weight:normal; background-color:#fff;"> 
                   </div>
                </div>
                <!-- /.form-group -->
              
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control"  value="<?php echo $PLACEOFRESIDENCE;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone.No.</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control"  value="<?php echo $PHONECONTACT;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group -->
 
             </td>
			 
			 <td>
			 
			 
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control" value="<?php echo $MOTHERFIRSTNAME;?>"  
					readonly="readonly" style="font-weight:normal; background-color:#fff;"> 
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control" value="<?php echo $MOTHERLASTNAME;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff;">
                   </div>
                </div>
                <!-- /.form-group -->
		 
		
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father.name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control" value="<?php echo $FATHERFIRSTNAME;?>"  
					style="font-weight:normal; background-color:#fff;"> 
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control" value="<?php echo $FATHERLASTNAME;?>" 
					style="font-weight:normal; background-color:#fff;"> 
                   </div>
                </div>
                <!-- /.form-group -->
        <br>
		 <div class="form-group" style="margin-top:-15px;">
                    <label for="pass1" class="control-label col-sm-4">Living.with</label>
                    <div class="col-sm-8"> 
			      <input type="text"  class="form-control" name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>"
				 readonly="readonly" style="font-weight:normal; background-color:#fff;"> 
                   </div>
                </div>
			 
			 </td>
    </tbody>
    </table>
 
	   
    
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
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
</tr>
			  </table>
			 
			  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr>
	            <th style="width:25%;border:0px;">Vist by </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="VISTBY" id="VISTBY" value="<?php  echo $VISTBY; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
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
								
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			   <th style="width:50%;border:0px;">Bief </th>
				<th style="width:50%;border:0px;"> <input type="text"  name="BRIEF" id="BRIEF" value="<?php  echo $BRIEF; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				  </tr>
			  </table>
				
			<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			  <td style="width:100%;border:0px; font-weight:bold;">Counselling</td>  
              </tr>
			  </table>
			  
			<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<td style="width:100%;border:0px;">
         <input type="text"  name="COUNSELLING" id="COUNSELLING" value="<?php  echo $COUNSELLING; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </td>  
              </tr>
			  </table> 	 
              
			  
			<br>
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			    <th style="width:65%;border:1px solid #fff;">Pre-Test Counselling done / information given </th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="PRE_TESTCOUSELLING_GIVEN" id="PRE_TESTCOUSELLING_GIVEN" 
				value="<?php  echo $PRE_TESTCOUSELLING_GIVEN; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				
				  </tr>
			  </table>
			  
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">Counselled as </th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="COUNSELLED_AS" id="COUNSELLED_AS" 
				value="<?php  echo $COUNSELLED_AS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">HCT Entry Point</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="HCT_ENTRYPOINT" id="HCT_ENTRYPOINT" 
				value="<?php  echo $HCT_ENTRYPOINT; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">Have you ever Tested for HIV before?</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="EVERTESTEDBEFORE" id="EVERTESTEDBEFORE" 
				value="<?php  echo $EVERTESTEDBEFORE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">How many times have you tested in the last 12 months</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="NUMBEROFTESTS" id="NUMBEROFTESTS" 
				value="<?php  echo $NUMBEROFTESTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">Number of sexual partners in the last 12 months</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="NUMBEROFSEXUALPARTNERS" id="NUMBEROFSEXUALPARTNERS" 
				value="<?php  echo $NUMBEROFSEXUALPARTNERS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">What was the test results last time you Tested?</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="LAST_TESTRESULTS" id="LAST_TESTRESULTS" 
				value="<?php  echo $LAST_TESTRESULTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">Has your Partner / Spouse been tested for HIV before?</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="SPOUSE_PARTNERTESTED_BEFORE" id="SPOUSE_PARTNERTESTED_BEFORE" 
				value="<?php  echo $SPOUSE_PARTNERTESTED_BEFORE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
			<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
      <thead> 
      <tr> 
				<th style="width:65%;border:1px solid #fff;">If yes what were the results?</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="IFYES_RESULTS" id="IFYES_RESULTS" 
				value="<?php  echo $IFYES_RESULTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				
				  </div> 
                
				
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
	  
         <div class="col-sm-4" style="border:0px solid #fff;">
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
		
	 

				<div class="col-sm-4" style="border: 0px solid #fff;">
				<table class="table-responsive" > 
				<table class="table" style="margin-left:0px; background-color:#fff; font-weight:normal; border:2px solid #fff;">
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
        <td style=" border:1px solid #fff;"><input type="text"  name="REACTIVITYT1" id="myREACTIVITYT1" 
		value="<?php  echo $REACTIVITYT1; ?>"  readonly="readonly"   
		style="width:100%; text-align:center;">
                              
                                </td>
        <td style=" border:1px solid #fff;"><input type="text"  id="myREACTIVITYT2" name="REACTIVITYT2" 
		value="<?php  echo $REACTIVITYT2; ?>"  readonly="readonly"   
		style="width:100%; text-align:center;">
                                
                                </td>
        <td style=" border:1px solid #fff;"><input type="text"  id="myREACTIVITYT3" name="REACTIVITYT3" 
		value="<?php  echo $REACTIVITYT3; ?>"  readonly="readonly"
		style="width:100%; text-align:center;">
       </td> 
    </tr>
    </tbody>
    </table>
	<br>

	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:35%;border:1px solid #fff;">Final reactivity</th>
				<th style="width:65%;border:1px solid #fff;"> <input type="text"  name="FINALREACTIVITY" id="FINALREACTIVITY" 
				value="<?php  echo $FINALREACTIVITY; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:bold; color:#000;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:35%;border:1px solid #fff;">Technician name</th>
				<th style="width:65%;border:1px solid #fff;"> <input type="text"  name="TECHNICIAN_NAME" id="TECHNICIAN_NAME" 
				value="<?php  echo $TECHNICIAN_NAME; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:35%;border:1px solid #fff;">Title</th>
				<th style="width:65%;border:1px solid #fff;"> <input type="text"  name="TITLE" id="TITLE" 
				value="<?php  echo $TITLE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				
				 <br>
				
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			    <th style="width:80%;border:1px solid #fff;">Results recieved </th>
				<th style="width:20%;border:1px solid #fff;"> <input type="text"  name="RESULTSRECEIVED" id="RESULTSRECEIVED" 
				value="<?php  echo $RESULTSRECEIVED; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				
				  </tr>
			  </table>
			  
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:80%;border:1px solid #fff;">As a couple </th>
				<th style="width:20%;border:1px solid #fff;"> <input type="text"  name="RECIEVEDASACOUPLE" id="RECIEVEDASACOUPLE" 
				value="<?php  echo $RECIEVEDASACOUPLE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:80%;border:1px solid #fff;">Couple results</th>
				<th style="width:20%;border:1px solid #fff;"> <input type="text"  name="COUPLERESULTS" id="COUPLERESULTS" 
				value="<?php  echo $COUPLERESULTS; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table> 
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:80%;border:1px solid #fff;">Is there suspicion of TB.(Current cough,fever,weight loss and night sweats) </th>
				<th style="width:20%;border:1px solid #fff;"> <input type="text"  name="TB_SUSPICION" id="TB_SUSPICION" 
				value="<?php  echo $TB_SUSPICION; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:80%;border:1px solid #fff;">Has client started Co-trimoxazole prophylasis dosage? </th>
				<th style="width:20%;border:1px solid #fff;"> <input type="text"  name="COTRIMOXAZOLE_START" id="COTRIMOXAZOLE_START" 
				value="<?php  echo $COTRIMOXAZOLE_START; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:80%;border:1px solid #fff;">Has client been linked care or any other service?</th>
				<th style="width:20%;border:1px solid #fff;"> <input type="text"  name="CARE_LINK" id="CARE_LINK" 
				value="<?php  echo $CARE_LINK; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:80%;border:1px solid #fff;">CD4 count results (If applicable)</th>
				<th style="width:20%;border:1px solid #fff;"> <input type="text"  name="CDFOUR" id="CDFOUR" 
				value="<?php  echo $CDFOUR; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				</tr>
			    </table>
				
				</div>

				 <br>
				<div class="col-sm-8" style="border: 2px solid #fff;">
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			    <th style="width:20%;border:0px; background-color:#fff;">Action taken</th>
				<th style="width:80%;border:0px;background-color:#fff;"> <textarea name="ACTION"  
				style="width:100%;" ><?php echo $ACTION;?>  
				</textarea> </th>     
              </tr>
			  </table>
				
		     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			    <th style="width:20%;border:0px;">Counsellor's Name </th>
				<th style="width:30%;border:0px;"> <input type="text"  name="COUNSELORS_NAME" id="COUNSELORS_NAME" 
				value="<?php  echo $COUNSELORS_NAME; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				<th style="width:20%;border:0px;"> Results date </th>
                <td style="width:30%;border:0px;"> <input type="text" name="RECIEVEDDATE" id="RECIEVEDDATE"  
				value="<?php  echo $RECIEVEDDATE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </td>
              </tr>
			  </table></div>
				
              </div> </div>
			  </div> </div>
              </div>
			  </form>
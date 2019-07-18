  
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
  $RELIGION=''; 
   $TRIBE='';
  
 $servername = "localhost";
 $username = "root";
  $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED 
 ORDER BY NTIHCNO, DATECREATED";

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
   $RELIGION=$row['RELIGION']; 
    $TRIBE=$row['TRIBE'];  
      } 
   
     ?>
   
  
    
    <form id="form1" class="form-horizontal" action=" " method="POST" style="height:auto; font-weight:normal;"> 
          <div class="panel-body">
          <div class="col-lg-12" style="text-align:left;">
 <img src="assets/img/logsbig.PNG" width="100%" height="100%">    
</div>
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">CLIENT DEMOGRAPHY </legend> </center> 
           
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:24%; border:0px;"> </th>
        <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
        <th style="border-bottom-color:white;font-weight:normal; width:24%; border:0px;"> </th>
         <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
    <th style="border-bottom-color:white;font-weight:normal; width:24%; border:0px;"> </th>
        <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>   
    <th style="border-bottom-color:white;font-weight:normal; width:24%; border:0px;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>
    
     <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Client.No.</label>
                    <div class="col-sm-8">
                     <input type="text" name="NTIHCNO"  value="<?php echo $NTIHCNO;?>" 
           readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%">
                </div>
                </div>
                <!-- /.form-group -->
        
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Vist.date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  value="<?php echo $DATECREATED;?>" 
          readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%">
                </div>
                </div>
                <!-- /.form-group --> 

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First.name</label>
                    <div class="col-sm-8">
                    <input type="text"    name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" 
          readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%">
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last.name</label>
                    <div class="col-sm-8">
                   <input type="text"   name="LASTNAME"  value="<?php echo $LASTNAME;?>" 
           readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%">
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other.name</label>
                    <div class="col-sm-8">
                   <input type="text"   name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" 
           readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%">
                   </div>
                </div>
                <!-- /.form-group -->
 

         </th>
     <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
         <td>
     
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Age</label>
                    <div class="col-sm-7">
                    <input type="numeric" name="AGE1" id="AGE1"  value="<?php echo $AGE1;?>" 
          readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%">
                   </div>
                </div>
                <!-- /.form-group --> 
     
      <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Gender</label>
                    <div class="col-sm-7">
                        <input type="text"  name="SEX" value="<?php echo $SEX;?>" 
            readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                    </div>
                </div>
                <!-- /.form-group -->

                  

               

 
        <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Schooling</label>
                    <div class="col-sm-7"> 
                    <input type="text"   name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" 
          readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Education.level</label>
                    <div class="col-sm-7">
                      <input type="text"   name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" 
             readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                    </div>
                </div>
                
                 <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Tribe</label>
                    <div class="col-sm-7"> 
                              <input type="text"   name="TRIBE" value="<?php echo $TRIBE;?>" 
                readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                   </div>
                </div>
                
              
     </th>
      <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
        <td>
  <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Religion</label>
                    <div class="col-sm-8"> 
                              <input type="text"   name="RELIGION" value="<?php echo $RELIGION;?>" 
                readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                   </div>
                </div>
                
                 <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Marital.status</label>
                    <div class="col-sm-8"> 
                              <input type="text"   name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" 
                readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                   </div>
                </div>
                
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment</label>
                    <div class="col-sm-8"> 
                   <input type="text"   name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>"
           readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <input type="text"  name="DISTRICT" value="<?php echo $DISTRICT;?>" 
           readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
            <input type="text"  name="DIVISION" value="<?php echo $DIVISION;?>" readonly="readonly" 
          style="font-weight:normal; background-color:transparent; width:100%"> 
                   </div>
                </div>
                <!-- /.form-group -->
              
                
             </td>
        <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
       <td>
       
        <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE"   value="<?php echo $PLACEOFRESIDENCE;?>" 
          readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%">
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone&nbsp;No.</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT"   value="<?php echo $PHONECONTACT;?>" 
          readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%">
                   </div>
                </div>
                <!-- /.form-group -->
                
     <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother&nbsp;name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME"  value="<?php echo $MOTHERFIRSTNAME;?>"  
          readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                    
                    <input type="hidden" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"   value="<?php echo $MOTHERLASTNAME;?>" 
          readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%">
                    
                   </div>
                </div>
                <!-- /.form-group -->
     
    
     <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father&nbsp;name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME"  value="<?php echo $FATHERFIRSTNAME;?>"  
          style="font-weight:normal; background-color:transparent; width:100%"> 
                    
                    <input type="hidden" name="FATHERLASTNAME"  id="FATHERLASTNAME"   value="<?php echo $FATHERLASTNAME;?>" 
          style="font-weight:normal; background-color:transparent; width:100%"> 
                    
                   </div>
                </div>
                <!-- /.form-group -->
        
     <div class="form-group" style="margin-top:-15px;">
                    <label for="pass1" class="control-label col-sm-4">Living&nbsp;with</label>
                    <div class="col-sm-8"> 
            <input type="text"   name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>"
         readonly="readonly" style="font-weight:normal; background-color:transparent; width:100%"> 
                   </div>
                </div>
       
       </td>
    </tbody>
    </table>
 
  </div> </div> 
    
   

     
    <legend style="color:#000; font-weight:bold; font-size:12px;">LAB TEST DETAILS</legend> 
          <?php 
  $id = $_GET['NTIHCNO'];   
  $RSVNID = ''; 
  $dnx    = array();
  $fqx    = array(); 
  $aa    = array(); 
  
  $abb    = array();
  $acc    = array(); 
  $add    = array(); 
  $aee    = array();
  $aff    = array();  
   
  $DATECREATED = '';
  $NTIHCNO = '';   
  
  
 $servername = "localhost";
 $username = "root";
  $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laboratory WHERE NTIHCNO = '$id' ";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
   
     $RSVNID          = $row['RSVNID'];  
   $DATECREATED      = $row['DATECREATED'];  
   $dnx[]    = $row['SPECIMEN'];
     $fqx[]       = $row['HEAMATOLOGY_SCROLOGY']; 
   $aa[]    = $row['MALARIA'];
    
     $abb[]       = $row['STOOL_MICROSCOPY']; 
   $acc[]    = $row['URINE_MICROSCOPY'];
   $add[]    = $row['SWABS_TYPE'];
     $aee[]       = $row['SWABS_WETPREP']; 
   $aff[]    = $row['SWABS_GRAMSTAIN'];
   
   $TIMESTAMP  = $row['TIMESTAMP'];  
     $NTIHCNO  = $row['NTIHCNO']; 
   
      } 
     ?>
         
      <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; ">
      <thead>
      <tr>  
       <th>*</th>
      <th>SPECIMEN</th>
                    <th>HEAMATOLOGY/SEROLOGY</th>
                    <th>MALARIA</th>
                    <th>STOOL MICROSCOPY</th>
                    <th>URINE MICROSCOPY</th>
                    <th>SWABS.TYPE</th>
                    <th>WET.PREP</th>
                    <th>GRAM STAIN</th> 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                           
       <td> <select name="aa[]" type="text" value="<?php echo $aa[$s]; ?>" readonly=""  
                          style= "width:100%; background-color:#ecf0f5; "/>
                          <option value="<?php echo $aa[$s]; ?>"><?php echo $aa[$s]; ?></option>
             <option>URINE</option> 
             <option>STOOL</option> 
             <option>SALIVA</option> 
             <option>CSF</option> 
                          </select>
                          </td> 
                          
             <td> <select name="dnx[]"  type="text" value="<?php  echo $dnx[$s]; ?>" required="" 
                         style= "width:100%; background-color:#ecf0f5; "/>
                         <option value="<?php echo $dnx[$s]; ?>"><?php echo $dnx[$s]; ?></option>
               <option>HIV TEST </option> 
                 <option>Hb </option> 
                             <option>WBCT</option> 
                     <option>SYPHILIS TEST</option> 
               <option>BLOOD GROUPING</option> 
                          </select>
                         
                                                 </td> 
                         
             <td> <select  name="fqx[]" type="text" value="<?php echo $fqx[$s]; ?>"  required="" 
                          style= "width:100%; background-color:#fff; "/>
                          <option value="<?php echo $fqx[$s]; ?>"><?php echo $fqx[$s]; ?></option>
               <option>MALARIA MICROSCOPY </option> 
                             <option>MALARIA RDTs</option> 
                     <option>OTHER HEAMOPATRASITES</option> 
                          </select>
                          </td> 
                          
         <td> <select  name="abb[]" type="text" value="<?php echo $abb[$s]; ?>"  required="" 
                          style= "width:100%; background-color:#fff; "/>
                          <option value="<?php echo $abb[$s]; ?>"><?php echo $abb[$s]; ?></option>
                       <option>MACRO </option> 
                                         <option>MICRO</option> 
                          </select>
                          </td> 
                          
      <td> <select  name="acc[]" type="text" value="<?php echo $acc[$s]; ?>"  required="" 
                          style= "width:100%; background-color:#fff; "/>
                          <option value="<?php echo $acc[$s]; ?>"><?php echo $acc[$s]; ?></option>
              <option>MACROSCOPY </option> 
                            <option>MICROSCOPY</option>
                    <option>PROTEIN</option> 
              <option>SUGAR</option> 
                    <option>PREGNANCY</option> 
                          </select>
                          </td> 
                          
      <td> <select  name="add[]" type="text" value="<?php echo $add[$s]; ?>"  required="" 
                          style= "width:100%; background-color:#fff; "/>
                          <option value="<?php echo $add[$s]; ?>"><?php echo $add[$s]; ?></option>
               <option>VIGINAL </option> 
                             <option>ORAL</option> 
               <option>PENILE</option>
                          </select>
                          </td>
                          
      <td> <select  name="aee[]" type="text" value="<?php echo $aee[$s]; ?>"  required="" 
                          style= "width:100%; background-color:#fff; "/>
                          <option value="<?php echo $aee[$s]; ?>"><?php echo $aee[$s]; ?></option>
               <option>VIGINAL </option> 
                             <option>ORAL</option> 
               <option>PENILE</option> 
                          </select>
                          </td>                                                             
          <td> <select  name="aff[]" type="text" value="<?php echo $aff[$s]; ?>"  required="" 
                          style= "width:100%; background-color:#fff; "/>
                          <option value="<?php echo $aff[$s]; ?>"><?php echo $aff[$s]; ?></option>
               <option>POSITIVE </option> 
                             <option>NEGATIVE</option> 
                          </select>
                          </td>                                          
                           
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
  </tbody>
  </table>  
  
  <input type="hidden" name="RSVNID" value="<?php echo $RSVNID;?>" />
  <input type="hidden" name="NTIHCNO" value="<?php echo $NTIHCNO;?>" />
  <input type="hidden" name="UPDATEDBY" value="<?php echo $nameofuser;?>"  />
  
   
  <legend style="color:#000; font-weight:bold; font-size:12px;">LAB RESULTS</legend> 
   
   <?php 
  $id = $id ;  
  $RSVNID = ''; 
  $dnx    = array();
  $fqx    = array(); 
   $aa    = array();
   $dd    = array();  
  $DATECREATED = '';
  $NTIHCNO = '';   
  
  
 $servername = "localhost";
 $username = "root";
  $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laborders WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
   
     $RSVNID          = $row['RSVNID'];  
   $DATECREATED      = $row['DATECREATED'];  
   $dnx[]    = $row['TESTDESCRIPTION'];
     $fqx[]       = $row['LABRESULTS']; 
   $aa[]    = $row['TIMESTAMP'];
     $dd[]       = $row['TESTSTATUS'];  
     $NTIHCNO  = $row['NTIHCNO']; 
   
      } 
     ?>
            
   <form class="form-horizontal"  method="post" action="getepisode_labtests.php" 
   style="height: auto;background-color:transparent;">
   
   
    
    <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; ">
      <thead>
      <tr>  
       <th>*</th>
     <th>CREATED DATE</th>
       <th>TEST DESCRIPTION </th>  
       <th>LAB RESULTS</th>
     <th>STATUS</th>  
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                           
       <td> <input  name="aa[]" type="text" value="<?php echo $aa[$s]; ?>" readonly=""  
                          style= "width:100%; background-color:#ecf0f5; "/></td> 
                          
             <td> <input name="dnx[]"  type="text" value="<?php  echo $dnx[$s]; ?>" required="" 
                         style= "width:100%; background-color:#ecf0f5; "/>
                                                 </td> 
                         
             <td> <input  name="fqx[]" type="text" value="<?php echo $fqx[$s]; ?>"  required="" 
                          style= "width:100%; background-color:#fff; "/></td> 
                          
         <td> <input  name="dd[]" type="text" value="<?php echo $dd[$s]; ?>"  readonly="" 
                          style= "width:100%; background-color:#ecf0f5; "/></td> 
                                                   
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
  </tbody>
  </table>  
  
  <input type="hidden" name="RSVNID" value="<?php echo $RSVNID;?>" />
  <input type="hidden" name="NTIHCNO" value="<?php echo $NTIHCNO;?>" />
  
  <center> <input type="submit" name="buttonsend" id="button" value="Save" /> </center>
    
  </form>
  
     

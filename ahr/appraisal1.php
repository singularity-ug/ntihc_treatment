 <?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:../admin/index.php');
}
 ?> 
 
<?php
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stss ="";
if( $result = $connect->query("SELECT * FROM jobdesc WHERE TITLE = '$desc' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['JOBDESCRIPTION'] . " </option>";   }
  }
$connect->close();
?>
 
<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">

      <script src="jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>

      <script src=js/labscript.js></script>
      <script src=js/appraisal.js></script>
      <script src=js/custom.js></script>

     <script>
       $(document).ready(function(){
       $(".btn1").click(function(){
         var clone = $(".allofit").clone(true);
        $(".modal-body").append(clone);

    /*      console.log(JSON.stringify(clone));

          console.log(JSON.parse(JSON.stringify(clone)));
          console.log(clone.outerHTML);
        //$(".modal-body").append(JSON.parse(JSON.stringify(clone)));

        postAjax("process_appraisal.php",{p:1,p2:"fake data",p3:clone},function(data){
        //  console.log(data);
      //  $(".modal-body").append(data);
    });*/
       });

    /*  $("p").click(function(){
          $(this).animate({fontSize: "+=1px"});
       });*/
       });

</script>

 
</head>
<body style=" background-color:#ffffff;">


  <?php include('php/header.php'); ?>
<div class="allofit">


<div class ="container-fluid" style="width:100%; height:100%; border: 1px #000000 solid;border-radius: 4px;  margin-top:77px;">
  <div class="row">
      <div class="col-sm-12">
                    <form role="form" action="process_appraisal.php" method="post" class="registration-form">
                    
                    
                    
                        <fieldset>
                          <div class="col-md-12">
                          <div class="col-sm-2" style="text-align:left;">
<img src="../assets/img/ntihclog2.png" width="100" height="110">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:20px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:13px; font-weight:bold;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:13px; font-weight:bold;">Tel: 0393-216-467</p>
 <p style="text-align:center; font-weight:bold; font-size:13px;" >
                           STAFF PERFOMANCE APPRAISAL</p>
</div> 
</div>

 <div class="col-sm-12">                         
   <p>Step 1 / 3</p>
                     
   <!-- START ACCORDION & CAROUSEL--> 

      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border"> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Page 1
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                    
  <table class="table table-bordered" style="background-color:#fff;">
    <thead>
      <tr  class="">
        <th style="border-bottom-color: #fff;">Name of Employee / Appraisee:</th>
        <th style="border-bottom-color: #fff;">Name of Supervisor / Appraiser: </th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="font-weight:bold;"><B><input id="fname" name="fname" class="form-control input-md" type="text" value="<?php echo $nameofuser; ?>" readonly  
        style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; background-color:#fff;"> </B></td> 
         <td>   
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="lmgr">1st Level Aupervisor</label>
                                            <div class="col-md-8">
                                              <input id="lmgr" name="lmgr" onKeyUp="searchmgr(this.value)" 
                                              class="form-control input-md" type="text" required="required" style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;">
                                            </div>
                                          </div>
                                         

         <hr  style="padding:0px; margin-left:0%;">
           <div class="form-group">
                                            <label class="col-md-4 control-label" for="oks">2nd Level Aupervisor</label>
                                            <div class="col-md-8">
                                              <input id="oksh" name="oksh" class="form-control input-md" type="text" required="required"
                                              style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;">                                 
                                              </div>
                                          </div>
                                          </td> 
      </tr>
      <tr>
        <td style="border-bottom-color: #fff;"><b> <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Title:</label>
                                            <div class="col-md-8">
                                              <input id="pos" name="pos" value="<?php echo $desc;?>" class="form-control input-md" type="text"
                                              required="required" readonly 
                                              style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; background-color:#fff;">   
                                            </div>
                                          </div>
                                        </b></td>
        <td><!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="lmgr">Appraisal period</label>
                                            <div class="col-md-8">
                                              <input type="date" id="appraisalperiod" name="appraisalperiod"   
                                              class="form-control input-md" placeholder="FROM------TO" required="required" style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;">
                                            </div>
                                          </div> </td> 
      </tr>
      <tr>
        <td><b><div class="form-group">
                                            <label class="col-md-4 control-label" for="dept">Department</label>
                                            <div class="col-md-8">
                                                <select name="dept" id="dept" required="required" class="form-control"  
                                                 style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;"> 
                                                <option <?php if ($dept=='FINANCE AND ADMINISTRATION') { echo 'selected="selected"';   } ?> >FINANCE AND ADMINISTRATION</option>
                                                <option <?php if ($dept=='ADVOCACY AND RESEARCH)') { echo 'selected="selected"';   } ?> >ADVOCACY AND RESEARCH</option>
                                                <option <?php if ($dept=='SERVICE DELIVERY') { echo 'selected="selected"';   } ?>>SERVICE DELIVERY</option>  
                                                </select>
                                            </div>
                                          </div></b></td>
        <td><div class="form-group">
                                            <label class="col-md-4 control-label" for="lmgr">Appraisal date</label>
                                            <div class="col-md-8">
                                              <input type="date" id="appraisaldate" name="appraisaldate" value="<?php echo date('d-m-y'); ?>"  readonly
                                              class="form-control input-md"  style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; 
                                              background-color:#fff;">
                                            </div>
                                          </div> </td> </td> 
      </tr> 
       <tr> 
      </tr>
    </tbody>
  </table>
  <p><p/>
  <p style="font-weight:bold;">Basis for Assesssment and development</p>
  <p><p/>
  
  <p> Staff performance appraisal is a management tool for establishing the extent to which the set targets/objectives within overall goals of an organization are achieved.  The  appraisal process offers an opportunity to the appraisee and appraiser to dialogue and obtain a feedback on performance.<p/> 

 <p>The evaluation system enables the performance of all employees to be analyzed and documented. It is a participatory process in which the employee is given an opportunity to evaluate themselves and rate their performance on a pre-determined scale. The employee shall then discuss their scores with their respective supervisors and or line managers, who shall also score the employee against the same yardstick. The employee shall finally be expected to identify skills gaps in which they require professional skills training, as the supervisor/Line manager shall also be expected to give an evaluation of the competencies of the staff with regard to their ability to effectively attain their professional 
targets. <p/>

<p><p/>
  <p style="font-weight:bold;">Deadline for submission:</p>
   
  <p> <?php echo date('d-m-y'); ?> &nbsp This means that all sections must be completed before this date; by the Appraisee, Appraiser, Appraiser’s appraiser and Program Director, working together to ensure this deadline is met.</p> 
  
  <BR>    
   <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>
   <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 1</P>  
   <p></p>
   
      
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Page 2
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                     <p style="font-weight:bold;">SECTION A: TO BE COMPLETED BY THE APPRAISEE</p>
                         <table class="table table-bordered">
    <thead>
      <tr  class="">
        <th><div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Marital status</label>
                                            <div class="col-md-8">
                                              <input id="GENDER" name="GENDER"  class="form-control input-md" type="text"
                                              style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;">   
                                            </div>
                                          </div></th>
        <th><div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Telephone contact</label>
                                            <div class="col-md-8">
                                              <input id="PHONECONTACT" name="PHONECONTACT"  class="form-control input-md" type="text"
                                              style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;">   
                                            </div>
                                          </div></th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B><div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Number of biological children and their ages</label>
                                            <div class="col-md-8">
                                              <input id="NO_BIOLOGICALCHILDREN" name="NO_BIOLOGICALCHILDREN"  class="form-control input-md" type="text"
                                              style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;">   
                                            </div>
                                          </div></B></td>
        <td><div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Date of first appointment</label>
                                            <div class="col-md-8">
                                              <input id="FIRSTAPPOINTMENTDATE" name="FIRSTAPPOINTMENTDATE"  class="form-control input-md" type="text"
                                              style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;">   
                                            </div>
                                          </div></td> 
      </tr>
      <tr>
        <td><b><div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Present residence location</label>
                                            <div class="col-md-8">
                                              <input id="RESIDENTIALLOCATION" name="RESIDENTIALLOCATION"  class="form-control input-md" type="text"
                                              style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;">   
                                            </div>
                                          </div></b></td>
        <td><div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Designation on 1st appointment</label>
                                            <div class="col-md-8">
                                              <input id="DESIGNATIONOFFIRSTAPPOINTMENT" name="DESIGNATIONOFFIRSTAPPOINTMENT" class="form-control input-md" type="text"
                                              style="border-top-color: #fff;border-left-color: #fff;border-right-color: #fff;">   
                                            </div>
                                          </div></td> 
      </tr>   
          </tr>
    </tbody>
  </table>
                          <p></p>
                          
                          <p style="font-weight:bold;">A 1: Appraisee's Current Details:</p>
                          
                          
                          <p style="font-weight:bold;">A 2: Terms of Employment (Please tick appropriately)</p>
                          
                           <table class="table table-bordered">
    <thead>
      <tr  class=" ">
        <th><!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">probation</label>
                                            <div class="col-md-6">
                                              <input type="checkbox" id="contract_type" name="contract_type"  
                                              class="form-control input-md"  >
                                            </div>
                                          </div></th>
        <th><div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Contract</label>
                                            <div class="col-md-6">
                                              <input type="checkbox" id="contract_type" name="contract_type"  
                                              class="form-control input-md"  >
                                            </div>
                                          </div></th>
        <th><div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Temporary</label>
                                            <div class="col-md-6">
                                              <input type="checkbox" id="contract_type" name="contract_type"  
                                              class="form-control input-md"  >
                                            </div>
                                          </div></th>
        <th><div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Others (specify)</label>
                                            <div class="col-md-6">
                                              <input type="text" id="contract_type" name="contract_type"  
                                              class="form-control input-md"  >
                                            </div>
                                          </div></th>
      </tr>
    </thead> 
    </tbody>
  </table>                    
                          
                          <p style="font-weight:bold;">A 3: New/ additional Academic & Professional Qualifications acquired and short term training courses attended during appraisal period</p>
                            
                          <p>
                                  <input type="button" value="Add education details" onClick="addRow('dataTable3')" />
                                 <input type="button" value="Remove" onClick="deleteRow('dataTable3')"   />
                          </p>

                          <table id="dataTable3" class="table table-bordered" border="1">
                                 <thead>
                                       <tr  style="color:000;">
                                            <th> <label for="no" class="col-md-4 control-label" >    *    </label></th>
                                            <th> <label for="actd" class="col-md-12 control-label"> Award (Degree, Diploma, Certificate)</label></th>
                                            <th> <label for="ddl" class="col-md-3 control-label">  Institution                        </label></th>
                                            <th><label for="tbc" class="col-md-6 control-label"> Study period (	From - To )  </label></th>
                                       </tr>

                                </thead>
                                 <tbody>

                                        <tr  >
                                            <td> <input type="checkbox" required="required" checked="checked" /></td>
                                            <td> <input type="alphanumeric" name="pdpa_act[]" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                            <td> <input type="alphanumeric" name="pdp_deadline[]" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                            <td> <input type="alphanumeric" name="pdp_sup[]" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                        </tr>
                                 </tbody>
                          </table>

                         <hr >
                         
                         <P style="font-weight:bold;">SECTION B</P>
                         <p></p>
                         <P style="font-weight:bold;">TO BE COMPLETED BY THE APPRAISEE AND APPRAISER</P>
                         
                         <P style="font-weight: BOLD;">Section B.1: Tasks (Results) Assessment:</P>
                         <P>
This section is a summary of the Employee’s Assessment of their performance.  The Employee shall be expected to identify the core responsibilities as per their job descriptions/pre-determined agreed objectives and targets, and to score themselves against a scale of 1 to 10, with 1 being the lowest and 10 being the highest score, in reference to the above performance level categories.  The Appraiser will then appraise the employee performance and indicate the scores in the column for the appraiser. The Appraiser and Appraise will then have a dialogue meeting to discuss the performance, the performance and arrive at an agreed score to be filled in the column for agreed score.</P>

<p>Each score must be justified and supported with explanations and details of the actual activities undertaken.
</P>

<br><br> 
  <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>                        
  <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp  
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 2</P>                                     
                          
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->             
 <BR />   
                     <center>  <button type="button" class="btn btn-next btn-info">  Next >>>>> </button> </center>
                     <BR />
                      </div>
                      </fieldset>
 
                      <fieldset>
                      <div class="col-sm-12">
                          <h3>Step 2 / 3</h3>
                          <!-- START ACCORDION & CAROUSEL-->
      
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border"> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion1">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOnex">
                        Page 3
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOnex" class="panel-collapse collapse in">
                    <div class="box-body">
                      
                    <table id="dataTable2" class="table table-bordered" border="2"  style="border:2px solid; text-align:left;">
                                       <thead>
                                             <tr>
                                                  <th> <label for="no" class="col-md-4 control-label" > * </label></th>
                                                  <th> <label for="kra" class="col-md-12 control-label">CORE RESPONSIBILITIES/PERFORMANCE OBJECTIVES</label></th>
                                                  <th> <label for="wgt" class="col-md-3 control-label">ACTIVITIES </label></th>
                                                  <th>APPRAISEE SCORE &nbsp;&nbsp(10) </label></th>
                                                  
                                                  <th>JUSTIFICATION &nbsp (Give details of performance rating as against 
                                                  core duties /objectives/targets in quantifiable sums. E.g number of Deliverables seen.  </label></th>
                                                  
                                                  <th> <label for="aca" class="col-md-12 control-label">APPRAISER'S SCORE  </label></th>
                                                  <th> <label for="aca" class="col-md-12 control-label">APPRAISER'S COMMENT   </label></th>
                                                  <th> <label for="aca" class="col-md-12 control-label">AGREED SCORE </label></th> 
                                                  
                                                  </tr>
                                                  </thead>
                                                          <tbody >
                                                            <tr >
                                                            <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <select name="kra[]" type="alphanumeric" required="required" class="form-control input-md" 
                                                  style= "width:100%;height: 23px; "/>
                                                   ttt     = "<?php   echo $stss; ?>";
                                                  </select>
                                                  </td>
                                                  
                                                  <td> <textarea name="wgt[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
                                                  
                                                   <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)" name="self[]" type="numeric" required="required" 
                                                  style= "width:100%; text-align: center; "/></td>
                                                  
                                                  <td> <textarea  name="msr[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
                                                  
                                                  <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)" name="sup[]" type="numeric" readonly="readonly"                                                       style= "width:100%; text-align: center; background-color:#f0f0f0;"/></td>
                                                   
                                                  <td> <textarea  name="acaa[]" type="text" required="required" class="form-control input-md" readonly="readonly" 
                                                  style= "width:100%; width:100%; background-color:#f0f0f0; height: 25px;"> </textarea> </td>
                                                   
                                                  <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)" name="agr[]" type="numeric" readonly="readonly"                                                         style= "width:100%; text-align: center;background-color:#f0f0f0;"/></td>
                                                 </td>
                                              </tr>
                                       </tbody>
                                </table>
                                      <input type="button" value="Add Item" onClick="addRow('dataTable2');" />
                                      <input type="button" value="Remove"   onClick="deleteRow('dataTable2');"   /> 
                                      <input type="button" value="put data" class="btn1"/>
                                      <input type="button" value="show data"   data-toggle="modal" data-target="#myModalrequistion1"   />
        
         
                         <hr >
                         <p>SUMMARY OF RATINGS / SCORES FOR B.1 </p>
                         <table id="dataTable4" class="table" border="2">
                                <thead>
                                      <tr  style="color:000;">
                                           <th> <label for="cafa" class="col-md-12 control-label"> APPRAISEE SECTION</label></th>
                                           <th> <label for="cafa" class="col-md-12 control-label"> APPRAISER SECTION</label></th>
                                           <th> <label for="cafa" class="col-md-12 control-label"> APPRAISEE AND APPRAISER DIALOGUE SECTION</label></th>
                                      </tr>
                               </thead>
                                <tbody>
                                       <tr>
                                             <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Total Score by Appraisee :  </label>
                                            <div class="col-md-6">
                                                 <h1 style="margin-top:-5px;" id="totals">0.0</h1> 
                                            </div>
                                          </div> </td> 
                                             
                                             <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Total Score by Appraiser :  </label>
                                            <div class="col-md-6">
                                              <input type="numeric" id="appraiserscore" name="appraiserscore" value="0"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; text-align:center;"/>
                                            </div>
                                          </div> </td> 
                                           
                                             <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Total Agreed Score :  </label>
                                            <div class="col-md-6">
                                              <input type="numeric" id="totalagreedscore" name="totalagreedscore" value="0"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; text-align:center; "/>
                                            </div>
                                          </div> </td>  
                                       </tr>
                                            
                                        <tr >
                                        <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraiseesign" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; 
                                             background-color:#fff; "/>
                                            </div>
                                          </div> </td> 
                                          
                                           <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraisersign" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                          
                                            <td>
                                             <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature of appraisee : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraiseesignondialogue" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> 
                                          
                                          <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature of appraiser : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraisersignondialogue" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                            
                                       </tr>    
                                       <tr >
                                       
                                        <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Date : </label>
                                            <div class="col-md-6">
                                              <input type="date" name="appraiseedate" value="<?php echo date('d-m-y'); ?> "
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double;
                                               background-color:#fff;"/>
                                            </div>
                                          </div> </td> 
                                           
                                          <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Date : </label>
                                            <div class="col-md-6">
                                              <input type="date" name="appraiserdate"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                              
                                            <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Date : </label>
                                            <div class="col-md-6">
                                              <input type="date" name="dialoguedate" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                             
                                       </tr>
                                </tbody>
                         </table>
                         
                       <br><br> 
  <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>                        
  <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp  
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 3</P>                                     
                           
    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="#collapsebeta">
                        Page 4
                      </a>
                    </h4>
                  </div>
                  <div id="collapsebeta" class="panel-collapse collapse">
                    <div class="box-body">
                   
                    <p style="font-weight:bold;">B.2. BEHAVIOURAL ASSESSMENT: This section shall constitute 20% of the final score)</p>
<p style="font-weight:bold;">Analysis and assessment of critical attributes required to perform the activities</p>
<p>The appraisee should only be rated in areas that are relevant to his/her job. The maximum points per attribute and/or quality are ten (10). Under each attribute, the 10 points should be allocated in a manner that shows the areas of strengths and weaknesses of the appraisee. Ten (10) is the maximum per attribute and one (1) lowest. Please indicate the relevant points in the boxes provided, thereafter add up the points, and indicate the total. The score out of 20 will be got by; dividing the total score by the total maximum score for all attributes rated. Then multiply the result by 20.
 </p>
                    
                     <table class="table table-bordered">
                      <thead>
                        <th>CORE RESPONSIBILITIES</th>
                        <th>ACTIVITIES</th>
                        <th>APPRAISEE SCORE(10)</th>
                        <th>JUSTIFICATION</th>
                        <th>APPRAISER'S COMMENTS</th>
                        <th>AGREED SCORE</th>
                      </thead>

                      <tbody>

                        <tr>
                          <td> <b>Provision of Youth Friendly services: (Client Service Orientation / Public relations)</b> </td> 
                          
                          <td><p>•	Trained and knowledgeable in Youth friendly services.</p>
                              <p>•	Respects young people and their needs.</p>   
                              <P>•	Acknowledges the provision of privacy in delivering services to adolescents</P>
                              <P>•	Provides extra time to discuss the special needs of adolescents.</P>
                              </td>
                              
                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1apseescore[]" type="alphanumeric" required="required"  
                          style= "width:100%;height: auto; "/> </td>
                          
                          <td> <textarea  name="jstn[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>

                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1[]" type="alphanumeric" disabled=""  
                                                  style= "width:100%;height: auto; "/> </td>
                          
                           <td> <textarea  name="apzercomment1[]" type="text" readonly="readonly" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
     
                                
                          <td><input type="alphanumeric" required="required"  readonly="readonly"    name="c1[]" class="form-control input-md" 
                                                  style= "width:100%; height: auto;"/></td> 
                          
                        </tr>

                        <tr>
                          <td><div class=" col-md-8"><b>Creativity: </b></td>
                          
                          <td>  <P>•	He / She is always proactive (does things before being asked or forced to by events). </P>
                                <P> •	Always optimize resources to produce more with the available resources by introducing easier or faster ways of doing business.</P>
                                <P>•	Demonstrates attention to detail and accuracy while producing outputs.</P>
                                <P>•	Always generate new workable ideas for consideration.</P>

                          </td>
                          
                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1apseescore[]" type="alphanumeric" required="required"  
                          style= "width:100%;height: auto; "/> </td>
                          
                          <td> <textarea  name="jstn[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>

                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1[]" type="alphanumeric" disabled=""  
                                                  style= "width:100%;height: auto; "/> </td>
                          
                           <td> <textarea  name="apzercomment1[]" type="text" readonly="readonly" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
     
                                
                          <td><input type="alphanumeric" required="required"  readonly="readonly"    name="c1[]" class="form-control input-md" 
                                                  style= "width:100%; height: auto;"/></td> 
                        </tr>

                        <tr>
                          <td> <b>Team Work : </b></td>
                          
                          <td> <p>•	Often engages colleagues while handling matters that require their opinion before deciding on final position. </p>
                                <p>  •	Is always willing to put in extra effort when needed to support others. </p>
                                <p>  •	Recognizes team differences (different ways of doing business in different business areas).</p>
                                 <p> •	Proactively shares relevant information and learning ideas with colleagues.</p>
 
                          </td>
                          
                         <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1apseescore[]" type="alphanumeric" required="required"  
                          style= "width:100%;height: auto; "/> </td>
                          
                          <td> <textarea  name="jstn[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>

                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1[]" type="alphanumeric" disabled=""  
                                                  style= "width:100%;height: auto; "/> </td>
                          
                           <td> <textarea  name="apzercomment1[]" type="text" readonly="readonly" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
     
                                
                          <td><input type="alphanumeric" required="required"  readonly="readonly"    name="c1[]" class="form-control input-md" 
                                                  style= "width:100%; height: auto;"/></td> 
                          
                          </tr>

                      </tr> 
                      </tbody>
                      </table>
                    
                                   
                    
                    <br><br> 
  <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>                        
  <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp  
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 4</P>         
                      
                    </div>
                  </div>
                </div>
                
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="#collapsebub">
                        Page 5
                      </a>
                    </h4>
                  </div>
                  <div id="collapsebub" class="panel-collapse collapse">
                    <div class="box-body">
                    <p>B2 (Count 1)</p>
                     <table class="table table-bordered">
                      <thead>
                        <th>CORE RESPONSIBILITIES</th>
                        <th>ACTIVITIES</th>
                        <th>APPRAISEE SCORE(10)</th>
                        <th>JUSTIFICATION</th>
                        <th>APPRAISER'S COMMENTS</th>
                        <th>AGREED SCORE</th>
                      </thead>

                      <tbody>

                        <tr>
                   
                          <tr>
                          <td> <b>Respect: </b></td>
                          
                          <td> <p>•	Treats other people with civility and dignity.
                               <p>•	Is sensitive to other viewpoints and promotes an atmosphere of mutual respect.
                               <p>•	Refrains from behaviour or language that is exclusionary or offensive in nature. </p>
                               <p>•	Seeks to understand perspectives of different groups within the Authority. </p>
                          </td>
                          
                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1apseescore[]" type="alphanumeric" required="required"  
                          style= "width:100%;height: auto; "/> </td>
                          
                          <td> <textarea  name="jstn[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>

                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1[]" type="alphanumeric" disabled=""  
                                                  style= "width:100%;height: auto; "/> </td>
                          
                           <td> <textarea  name="apzercomment1[]" type="text" readonly="readonly" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
     
                                
                          <td><input type="alphanumeric" required="required"  readonly="readonly"    name="c1[]" class="form-control input-md" 
                                                  style= "width:100%; height: auto;"/></td> 
                          </tr>

                          <tr>
                          <td> <b>Communication: </b></td> 
                      
                        <td>  <p>•	Appropriately expresses own opinion in a clearand confident manner with timely feedback.</p>
                              <p>•	Listens carefully and waits forthe other persons to first finish their intended message before responding.</p>
                              <p>•	Chooses the appropriate channels to direct message to intended recipients.</p>
                              <p>•	Consistently presents grammatically correctwritten information, and in the appropriate style.</p>

                        </td>
                        
                         <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1apseescore2[]" type="alphanumeric" required="required"  
                          style= "width:100%;height: auto; "/> </td>
                          
                          <td> <textarea  name="jstn2[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>

                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric" disabled=""  
                                                  style= "width:100%;height: auto; "/> </td>
                          
                           <td> <textarea  name="apzercomment2[]" type="text" readonly="readonly" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
     
                                
                          <td><input type="alphanumeric" required="required"  readonly="readonly"    name="c2[]" class="form-control input-md" 
                                                  style= "width:100%; height: auto;"/></td> 
                        
                      </tr>

                      <tr>
                        <td> <b>Integrity: </b></td>
                        
                        <td> <p>•	Displays honesty and is upright all the time in all ways.</p>
                             <p>•	Complies with all Institutional policies and procedures at all times.</p>
                             <p>•	Holds self and others accountable for their actions and behaviors.</p>
                             <p>•	Is reliable, dependable and trusted.</p>
                             </td>
                        
                       <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1apseescore2[]" type="alphanumeric" required="required"  
                          style= "width:100%;height: auto; "/> </td>
                          
                          <td> <textarea  name="jstn2[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>

                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric" disabled=""  
                                                  style= "width:100%;height: auto; "/> </td>
                          
                           <td> <textarea  name="apzercomment2[]" type="text" readonly="readonly" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
     
                                
                          <td><input type="alphanumeric" required="required"  readonly="readonly"    name="c2[]" class="form-control input-md" 
                                                  style= "width:100%; height: auto;"/></td> 
                        </tr>

                        <tr>
                        <td> <b>Decision Making:</b> </td> 
                        
                        <td><p>•	Demonstrates appropriate initiative</p>
                            <p>•	Knows decisions to make at his/her level and identifies information required to take appropriate decision.</p>
                            <p>•	Analyses problem thoroughly.</p>
                            <p>•	Shows patience and determination in resolving problems.</p>
                            <p>•	Remains accountable to his / her decision.</p>
                            <p>•	Makes informed decisions; considering  potential implications</p>
                        </td>
                        
                       <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1apseescore2[]" type="alphanumeric" required="required"  
                          style= "width:100%;height: auto; "/> </td>
                          
                          <td> <textarea  name="jstn2[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>

                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric" disabled=""  
                                                  style= "width:100%;height: auto; "/> </td>
                          
                           <td> <textarea  name="apzercomment2[]" type="text" readonly="readonly" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
     
                                
                          <td><input type="alphanumeric" required="required"  readonly="readonly"    name="c2[]" class="form-control input-md" 
                                                  style= "width:100%; height: auto;"/></td> 
                        
                      </tr> 
                      </tbody>
                      </table>
                    
                    <br><br> 
  <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>                        
  <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp  
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 5</P>  
                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="#collapseoops">
                        Page 6
                      </a>
                    </h4>
                  </div>
                  <div id="collapseoops" class="panel-collapse collapse">
                    <div class="box-body">
                    <p>B2 (Count 2)</p>
                     <table class="table table-bordered">
                      <thead>
                        <th>CORE RESPONSIBILITIES</th>
                        <th>ACTIVITIES</th>
                        <th>APPRAISEE SCORE(10)</th>
                        <th>JUSTIFICATION</th>
                        <th>APPRAISER'S COMMENTS</th>
                        <th>AGREED SCORE</th>
                      </thead>

                      <tbody>

                        <tr> 
                          <td> <b>Excellence:</b> </td>
                        
                       <td> <p> •	Maintains positive attitudes at all times.
                            <p> •	Thinks analytical (gives opinion / idea after thoroughly thinking through it).
                            <p> •	Maintains good corporate image at all times (dressing appropriately, wearing IDs, maintaining neatness of body and dressings, punctual at work and manages his or her time well while on duty).
                            <p> •	Always performs assignments beyond the expected targets.

                        </td>
                     <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1apseescore2[]" type="alphanumeric" required="required"  
                          style= "width:100%;height: auto; "/> </td>
                          
                          <td> <textarea  name="jstn2[]" type="text" required="required" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>

                          <td> <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric" disabled=""  
                                                  style= "width:100%;height: auto; "/> </td>
                          
                           <td> <textarea  name="apzercomment2[]" type="text" readonly="readonly" class="form-control input-md" 
                                                  style= "width:100%; height: 24px;"> </textarea> </td>
     
                                
                          <td><input type="alphanumeric" required="required"  readonly="readonly"    name="c2[]" class="form-control input-md" 
                                                  style= "width:100%; height: auto;"/></td>  
                      </tr> 
                      </tbody>
                      </table> 
                    
                  <hr >
                         <p>SUMMARY OF RATINGS / SCORES FOR B.2 </p>
                         <table id="dataTable4" class="table" border="2">
                                <thead>
                                      <tr  style="color:000;">
                                           <th> <label for="cafa" class="col-md-12 control-label"> APPRAISEE SECTION</label></th>
                                           <th> <label for="cafa" class="col-md-12 control-label"> APPRAISER SECTION</label></th>
                                           <th> <label for="cafa" class="col-md-12 control-label"> APPRAISEE AND APPRAISER DIALOGUE SECTION</label></th>
                                      </tr>
                               </thead>
                                <tbody>
                                       <tr>
                                             <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Total Score by Appraisee :  </label>
                                            <div class="col-md-6">
                                             <input type="numeric" id="appraiseescore2" name="appraiseescore2" value="0"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; text-align:center;
                                              background-color:#fff;"/>
                                            </div>
                                          </div> </td> 
                                             
                                             <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Total Score by Appraiser :  </label>
                                            <div class="col-md-6">
                                              <input type="numeric" id="appraiserscore2" name="appraiserscore2" value="0"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; text-align:center;"/>
                                            </div>
                                          </div> </td> 
                                           
                                             <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Total Agreed Score :  </label>
                                            <div class="col-md-6">
                                              <input type="numeric" id="totalagreedscore2" name="totalagreedscore2" value="0"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; text-align:center; "/>
                                            </div>
                                          </div> </td>  
                                       </tr>
                                            
                                        <tr >
                                        <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraiseesign2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; 
                                             background-color:#fff; "/>
                                            </div>
                                          </div> </td> 
                                          
                                           <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraisersign2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                          
                                            <td>
                                             <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature of appraisee : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraiseesignondialogue2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> 
                                          
                                          <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature of appraiser : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraisersignondialogue2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                            
                                       </tr>    
                                       <tr >
                                       
                                        <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Date : </label>
                                            <div class="col-md-6">
                                              <input type="date" name="appraiseedate2" value="<?php echo date('d-m-y'); ?> "
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double;
                                               background-color:#fff;"/>
                                            </div>
                                          </div> </td> 
                                           
                                          <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Date : </label>
                                            <div class="col-md-6">
                                              <input type="date" name="appraiserdate2"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                              
                                            <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Date : </label>
                                            <div class="col-md-6">
                                              <input type="date" name="dialoguedate2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                             
                                       </tr>
                                </tbody>
                         </table>    
                    
                   <br><br> 
  <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>                        
  <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp  
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 6</P>         
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->     
                          
                            <center> <button type="button" class="btn btn-previous">Previous</button> 
                            <button type="button" class="btn btn-next">Next</button></center> 
                            <BR />
                        </div>
                      </fieldset>


 


                      <fieldset> 
                      
                            <h3>Step 3 / 3</h3>
                            <p>SECTION C: OVERALL PERFORMANCE AND REVIEW COMMENTS:</p>
                            <div class="col-md-12"> 
          <div class="box box-solid">
            <div class="box-header with-border"> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion2">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapsesec1">
                       Page 7
                      </a>
                    </h4>
                  </div>
                  <div id="collapsesec1" class="panel-collapse collapse in">
                    <div class="box-body">
                       
                         <p>TOTAL RATINGS / SCORE FOR B.1 AND B.2</p>
                         <table id="dataTable4" class="table" border="2">
                                <thead>
                                      <tr  style="color:000;">
                                           <th> <label for="cafa" class="col-md-12 control-label"> APPRAISEE SECTION</label></th>
                                           <th> <label for="cafa" class="col-md-12 control-label"> APPRAISER SECTION</label></th>
                                           <th> <label for="cafa" class="col-md-12 control-label"> APPRAISEE AND APPRAISER DIALOGUE SECTION</label></th>
                                      </tr>
                               </thead>
                                <tbody>
                                       <tr>
                                             <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Total Score by Appraisee :  </label>
                                            <div class="col-md-6">
                                             <input type="numeric" id="appraiseescore2" name="appraiseescore2" value="0"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; text-align:center;
                                              background-color:#fff;"/>
                                            </div>
                                          </div> </td> 
                                             
                                             <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Total Score by Appraiser :  </label>
                                            <div class="col-md-6">
                                              <input type="numeric" id="appraiserscore2" name="appraiserscore2" value="0"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; text-align:center;"/>
                                            </div>
                                          </div> </td> 
                                           
                                             <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Total Agreed Score :  </label>
                                            <div class="col-md-6">
                                              <input type="numeric" id="totalagreedscore2" name="totalagreedscore2" value="0"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; text-align:center; "/>
                                            </div>
                                          </div> </td>  
                                       </tr>
                                            
                                        <tr >
                                        <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraiseesign2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; 
                                             background-color:#fff; "/>
                                            </div>
                                          </div> </td> 
                                          
                                           <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraisersign2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                          
                                            <td>
                                             <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature of appraisee : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraiseesignondialogue2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> 
                                          
                                          <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Signature of appraiser : </label>
                                            <div class="col-md-6">
                                              <input type="blob" name="appraisersignondialogue2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                            
                                       </tr>    
                                       <tr >
                                       
                                        <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Date : </label>
                                            <div class="col-md-6">
                                              <input type="date" name="appraiseedate2" value="<?php echo date('d-m-y'); ?> "
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double;
                                               background-color:#fff;"/>
                                            </div>
                                          </div> </td> 
                                           
                                          <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Date : </label>
                                            <div class="col-md-6">
                                              <input type="date" name="appraiserdate2"  
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                              
                                            <td>
                                            <div class="form-group">
                                            <label class="col-md-6 control-label" for="lmgr">Date : </label>
                                            <div class="col-md-6">
                                              <input type="date" name="dialoguedate2" 
                                              class="form-control input-md"  readonly="readonly" 
                                              style= "width:100%;border-top-color: #fff;border-left-color: #fff;border-right-color: #fff; border-style:double; "/>
                                            </div>
                                          </div> </td> 
                                             
                                       </tr>
                                </tbody>
                         </table> 
                          <br>
                          <p style="font-weight:bold;">C.1. 1st LEVEL APPRAISER'S OVERALL COMMENTS FOR THE CYCLE INCLUDING DEVELOPMENT NEEDS WHERE APPLICABLE</p>  
                    <table class="table table-bordered">
                      <thead>
                        <th style="width:60%;"> </th>
                        <th style="width:40%;"> </th> 
                      </thead>

                      <tbody> 
                        <tr>
                          <td> <b>C 1.1 </b> The appraisal was discussed with appraisee on (Date)
                          </td>
  
                          <td><input type="date"  readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; "/></td>
                          
                        </tr> 
                        <tr>
                          <td> <b>C 1.2 </b>Did you agree with the appraisee about his/her activities and outputs prior to the commencement of this appraisal period?  
                          </td>
                        
                         <td><textarea type="text"  readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                          
                        </tr> 
                        <tr>
                          <td> <b>C 1.3	</b> If NO please explain 
                          </td>
                          <td><textarea type="text"  readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                        </tr>

                        <tr>
                          <td> <b>C 1.4	</b>If YES, indicate the highlights of your discussion with the appraisee  
                          </td>
                          
                           <td><textarea type="text"  readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                           
                         </tr> 
                        <tr>
                          <td> <b>C 1.5 </b>    Based on the appraisal you have made in C 1(C 3) and D 4 above indicate  
                          </td>
                            <td><textarea   readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                        </tr>

                        <tr>
                          <td> <b>C 1.6 </b>    Areas of strength that enhanced employee performance 
                          </td>
                           <td><textarea  readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                            
                          </tr> 
                        <tr>
                          <td> <b>C 1.7 </b>     Appraisee’s  areas for improvement  
                          </td>
                            <td><textarea   readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                        </tr>

                        <tr>
                          <td> <b>C.1.8 </b>    What contribution has the appraisee made beyond the normal requirements of his/her job?  
                          </td>
                          
                          <td><textarea  readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                           
                          </tr> 
                        <tr>
                          <td> <b>C.1.9  </b>   What contribution has the appraisee made beyond the normal requirements of his/her job?  
                          </td>
                            <td><textarea   readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%;height:24px;"/></textarea></td>
                           
                        </tr>

                        <tr>
                          <td> <b>C.1.10 </b>  Indicate the appraisee’s potential for development in his/her career with  NTIHC 
                          </td>
                          
                          <td><textarea  readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                            
                           </tr> 
                        <tr>
                          <td> <b>C.1.11  </b>Specific actions or improvements that I have agreed with appraisee to increase his/her effectiveness in the next appraisal review period  
                          </td>
                           
                          <td><textarea  readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                           
                        </tr>

                        <tr>
                          <td> <b>C.1.11 </b> What specific actions should management take to improve or motivate the appraisee to perform more efficiently? 
                          </td>
                          
                           <td><textarea  readonly="readonly" name="c1evel1[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                            
                        </tr>
                       </tbody>
                      </table>
                    
  <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>                        
  <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp  
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 7</P> 
   
   
   </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapsesecc2">
                        Page 8
                      </a>
                    </h4>
                  </div>
                  <div id="collapsesecc2" class="panel-collapse collapse">
                    <div class="box-body">
                    <p></p>
                       <p style="font-weight:bold;">C.2 APPRAISEE'S OVERALL COMMENTS FOR THE CYCLE </p> 
                       <p style="font-weight:bold;">C.2.A: Facilitating and Constraining factors </p>  
                    <table class="table table-bordered">
                      <thead>
                        <th style="width:60%;"> </th>
                        <th style="width:40%;"> </th> 
                      </thead>

                      <tbody> 
                        <tr>
                          <td> <b>C 2.1 </b> Briefly state factors that facilitated your performance, i.e., contributed positively towards your performance
                          </td>
  
                          <td><textarea  name="c1evel2[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                          
                        </tr> 
                        <tr>
                          <td> <b>C 2.2 </b>Briefly outline major constraints/problems encountered in the execution of assignment and duties
                          </td>
                        
                         <td><textarea  name="c1evel2[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                          
                        </tr> 
                        <tr>
                          <td> <b>C 2.3	</b> In which areas do you need support?
                          </td>
                          <td><textarea  name="c1evel2[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                        </tr>

                        <tr>
                          <td> <b>C 2.4	</b>Suggest measures that could be taken at your personal level as well as at Management level to fully utilize your perceived strengths  
                          </td>
                          
                           <td><textarea name="c1evel2[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                           
                         </tr> 
                        <tr>
                          <td> <b>C 2.5 </b> What contribution have you made to NTIHC beyond the normal requirement of your job? 
                          </td>
                            <td><textarea  name="c1evel2[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                        </tr>

                        <tr>
                          <td> <b>C 2.6 </b> In view of your strengths and potential, what are your expectations from NTIHC
                          </td>
                           <td><textarea  name="c1evel2[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                          
                        </tr>
                       </tbody>
                      </table>
                      
                        <p style="font-weight:bold;">C.2.B: Appraisee comments after Discussion with the Appraiser; </p>  
                    <table class="table table-bordered">
                      <thead>
                        <th style="width:60%;"> </th>
                        <th style="width:40%;"> </th> 
                      </thead>

                      <tbody> 
                        <tr>
                          <td> <b>C 2.7 </b> Do you agree/partly disagree/disagree with the appraiser’s evaluation. Please tick one box
                          </td>
   
                          <td>
        <input type="radio" name="c1evel2[]" type="radio" value="AGREE" checked>
        <label for="AGREE">AGREE</label> 
		<input name="c1evel2[]" type="radio" value="PARTLY DISAGREE" >
		<label for="PARTLY DISAGREE">PARTLY DISAGREE</label>
        <input name="c1evel2[]" type="radio" value="DISAGREE" >
		<label for="DISAGREE">DISAGREE</label> 
                        </td> 
                             
                        </tr> 
                        <tr>
                          <td> <b>C 2.8 </b> If you partly disagree/disagree, please explain.
                          </td>
                        
                         <td><textarea type="text" name="c1evel2[]" class="form-control input-md"  style= "width:100%; height:24px;"/></textarea></td>
                          
                        </tr> 
                        <tr>
                          <td> <b>C 2.9	</b> Specific actions or improvements that I have agreed with the appraiser to enhance my effectiveness in the
                           next appraisal review period.
                          </td>
                          <td><textarea type="text"  name="c1evel2[]" class="form-control input-md"  placeholder="1" 
                          style= "width:100%; height:24px;"/></textarea>
                          <p></p>
                              <textarea type="text"  name="c1evel2[]" class="form-control input-md"  placeholder="2" 
                              style= "width:100%; height:24px;"/></textarea>
                          </td>
                        </tr>
  
                       </tbody>
                      </table> 
                    
                     <br> 
  <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>                        
  <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp  
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 8</P> 
                    </div>
                  </div>
                </div>
                
               <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapsehateluv">
                        Page 9
                      </a>
                    </h4>
                  </div>
                  <div id="collapsehateluv" class="panel-collapse collapse">
                    <div class="box-body">
                  <p style="font-weight:bold;">2nd LEVEL APPRAISEER'S OVERALL COMMENTS FOR THE CYCLE </p>     
                     
                      <table class="table table-bordered">
                      <thead>
                        <th>GENERAL RECOMMENDATIONS</th>
                        <th></th>
                        <th>JUSTIFY / SPECIFY</th>
                      </thead> 
                      <tbody>

                        <tr>
                          <td>  <b>Confirm appointment</b> 
                          </td>

                           <td>
        <input type="radio" name="confirmappointment[]" type="radio" value="YES" checked>
        <label for="YES">YES</label> 
		<input name="confirmappointment[]" type="radio" value="NO" >
		<label for="NO">NO</label> 
                        </td>  
                        
                          <td><textarea name="justification1[]" class="form-control input-md" style= "width:100%; height:24px;"/></textarea></td>
                        </tr>

                        <tr>
                          <td> <b>Renew contract</b>  </td>
                          
                           <td>
        <input type="radio" name="Renewcontract[]" type="radio" value="YES" checked>
        <label for="YES">YES</label> 
		<input name="Renewcontract[]" type="radio" value="NO" >
		<label for="NO">NO</label> 
                        </td> 
                          
                          <td><textarea name="justification2[]" class="form-control input-md" style= "width:100%; height:24px;"/></textarea></td>
                        </tr>

                        <tr>
                          <td> <b>Others </b>   </td>
                          
                          <td><textarea name="specifyothers[]" class="form-control input-md" placeholder="Specify" style= "width:100%; height:24px;"/></textarea></td>
                          
                           <td><textarea name="justification3[]" class="form-control input-md" style= "width:100%; height:24px;"/></textarea></td>
                        </tr> 
                      </tbody>
                      </table> 
                       
                      <table class="table table-bordered">
                      <thead>
                        <th>APPRAISE</th>
                        <th>NAME</th>
                        <th>SIGNED</th>
                        <th>DATE</th>
                      </thead> 
                      <tbody>

                        <tr> 
                        <td>1st LEVEL APPRAISER</td>
                        <td><input  type="text"  name="appraiser11name[]" readonly style= "width:100%; height: auto;"/></td>
                         
                        <td><input  type="text"  name="appraiser11sign[]" readonly style= "width:100%; height: auto;"/> </td>
                        <td><input  type="date"  name="appraiser11date[]" readonly style= "width:100%; height: auto;"/>   </td>
                        </tr>

                        <tr>
                        
                        <td>1st LEVEL APPRAISER</td>
                        <td><input  type="text"  name="appraiser22name[]" readonly style= "width:100%; height: auto;"/></td>
                         
                        <td><input  type="text"  name="appraiser22sign[]" readonly style= "width:100%; height: auto;"/> </td>
                        <td><input  type="date"  name="appraiser22date[]" readonly style= "width:100%; height: auto;"/>   </td>
                        </tr>
                      </tbody>
                      </table>
                        
                    <br> 
  <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>                        
  <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp  
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 9</P> 
                    </div>
                  </div>
                </div>
                 
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapseseccc3">
                        Page 10
                      </a>
                    </h4>
                  </div>
                  <div id="collapseseccc3" class="panel-collapse collapse">
                    <div class="box-body">
                     
   <p style="font-weight:bold;">E. PERFORMANCE OBJECTIVES AND TARGETS FOR THE NEXT APPRAISAL PERIOD.</p>
   <P>At the beginning of the appraisal period, the appraiser and appraise shall jointly agree on key activities and outputs. The scores per activity/output should also be agreed on depending on the weight attached to the different activities. </P>
   
    <table class="table table-bordered" id="mytable1" style="border:2px solid; text-align:left;">
    <thead>
      <tr> 
      <th>NO.</th> 
   <th>PERFORMANCE OBJECTIVES</th>
   <th>ACTIVITIES</th> 
   <th>TARGETS</th> 
   <th>TIME FRAME</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
        <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">
     <p></p>   
      <p style="font-weight:bold;">F. PERFORMANCE LEVELS AND SCORES.</p>
       
   <P>Overall assessment guide . </P>
    <table class="table table-bordered">
                      <thead>
                        <th>Total score</th>
                        <th>91% and above</th> 
                        <th>81% - 90%/th>
                        <th>60 - 80%</th>
                        <th>50 - 59%</th>
                        <th>49% and below</th>
                      </thead> 
                      <tbody> 
                        <tr>
                          <td>Remarks </td>
                          <td>Outstanding </td> 
                          <td>Very good</td>
                          <td>Good</td> 
                          <td>Fair</td>
                          <td>Unsatisfactory </td>
                      </tr> 
                      </tbody>
                      </table>
           <p style="font-weight:bold;">The assessment is out of 100%; Section B1 carries 80 Marks, Section B2- 20 marks. The scores range from 1 to 10; representing 10 – 100%.
           </p> 
           
    <table class="table table-bordered">
                      <thead>
                        <th style="width:15%;"> </th>
                        <th  style="width:15%;"> </th> 
                        <th  style="width:70%;"> </th>
                      </thead>

                      <tbody>

                        <tr>
                          <td> 91% and above </td>
                          <td> Model </td> 
                          <td>   
                          <p>•	Consistently exceeds all set targets throughout the performance period.</p>
<p>•	All the time accomplishes the tasks before the set timelines. </p>
<p>•	The performance outputs are consistently of a higher quality over and above the expected standards.</p>
<p>•	Continuously seeks out and Introduces new ways of doing business that improves processes, outputs and efficiency.</p>

                          </td>
                        </tr>

                        <tr>
                          <td> 81% - 90%  </td>
                          <td>  Very Good </td>
                          <td>  
                          <p>•	Consistently exceeds most of the set targets by more than 80% throughout the performance period.</p>
<p>•	Most of the time accomplishes the targets before the set timelines</p>
<p>•	Performance outputs are most of the time of a higher quality over and above the set standard</p>
<p>•	Most of the time seeks new ways of doing business and improving processes, output and efficiency.</p>

                          
                           </td> 
                           </tr>

                        <tr>
                          <td> 60% - 80%  </td>
                          <td> Good  </td> 
                          <td>   
                          <p>•	Consistently meets all the set targets within the set times throughout the performance period and delivers 100% of the set targets.</p>
<p>•	Performance Outputs are consistently accurate and of an acceptable quality.</p>

                          
                          </td>
                          </tr>

                        <tr>
                          <td> 50% - 59%  </td>
                          <td>  Fair </td> 
                          <td>   
                          <p>•	Meets some of the set targets within the performance period.</p>
<p>•	Performance outputs are accurate and of an acceptable quality.</p>

                          
                          </td>
                        <tr>
                          <td> <50%   </td>
                          <td>  Poor </td>  
                          <td>  
                         <p> •	Is unable to meet the set targets during the performance period.<p>
<p>•	Performance outputs are below expected standards and require re-work most of the times<p>

                           </td>  
                          
                           </tr> 
                      </tbody>
                      </table>
   
                <p style="font-weight:bold;"> <b>G.</b> COMMENTS BY THE PROGRAM DIRECTOR:</p>  
                
                                       
           <table class="table table-bordered">
                      <thead>
                      <th style="width:30%;">I have read the appraisal report for (Appraisee’s Name):</th>
                      <th style="width:70%;">Comments:</th> 
                       </thead> 
                      <tbody> 
                          <tr>
                      <th>   <input id="username" name="username" value="<?php echo $nameofuser;?>" class="form-control input-md" type="text" readonly /> </th>
                      
                      <th>   <textarea name="pdscomment"  class="form-control input-md" type="text" readonly style="height:24px;"/> </textarea></th> 
                      </thead> 
                      <tbody>  
                      </table>
                      
            <table class="table table-bordered">
                      <thead>
                        <th>Name</th>
                        <th>Title</th> 
                        <th>Signature</th>
                        <th>Date</th> 
                      </thead> 
                      <tbody> 
                          <tr>
                          <td><input id="pdname" name="pdname" class="form-control input-md" type="text" readonly /> </td>
                          <td><input id="pdtitle" name="pdtitle" class="form-control input-md" type="text" readonly /> </td> 
                          <td><input id="pdsign" name="pdsign" class="form-control input-md" type="text" readonly /> </td>
                          <td><input id="pddate" name="pddate" class="form-control input-md" type="text" readonly /> </td>  
                      </tr> 
                      </tbody>
                      </table>           
                 
                             <center><button type="button" class="btn btn-previous btn-danger">Previous</button>
                            <button type="submit" class="btn btn-success">Submit Appraisal!</button></center>
                        </div>
                        
                       <hr  style="padding:2px; width:100%; margin-left:0%; height:4px; background-color:green;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:3px; background-color:yellow;margin-top: -20px;"> 
   <hr  style="padding:2px; width:100%; margin-left:0%; height:2px; background-color:red;margin-top: -17px;"> 
   <P></P>                        
  <P>I,&nbsp;&nbsp <?php echo $nameofuser; ?>  &nbsp  
   while recognizing that  provision of quality youth friendly services to young people starts with me; pledge to live and uphold all the NTIHC values of youth friendly services, confidentiality, gender equality, right to choice, right to evidence based information, and Integrity  in all that I do. I will seek to understand and consciously uphold all Policies, Guidelines and Procedures in place, in the drive to promoting access to quality ASRHS and information by young people. I recognize that the cornerstone of our success is offering the best service to our clients and stakeholders as a team, and with purpose and passion, and as such will maintain an attitude of service at all times. </P>  
  <p> Auto signed &nbsp <?php echo date('d-m-y'); ?>    </P> 
   <P style="text-align:center; font-size:14px; font-weight:bold;">Page 10</P>  
                        
                      </fieldset>
                       
                    </form>
                     
  
                    </div>
                  </div>
                </div>
              </div>
            </div>   
                    </div>
                </div>
</div>
</div>

<!-- modal for the requisitoins -->
<div class="modal fade" id="myModalrequistion1" role="dialog"  >
  <div class="modal-dialog"   style="width:95%;" >
    <!-- Modal content-->
    <div class="modal-content" style="background-color:red;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">test</h4>
      </div>
      <div class="modal-body" >


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>

 <script>
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;
      
	 var  s2bb = '<input type="text" name="objectives[]" id="objectives_'+rowCount+'" readonly="readonly" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; height: 23px;"> ';

     var  s3cc = '<textarea  name="activities[]" id="activities_'+rowCount+'"  readonly="readonly" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;height: 24px;" ></textarea>';
				   

     var  s5ee = '<input type="text" name="targets[]" id="targets_'+rowCount+'" readonly="readonly" '+
                 'style= " margin-left:0px; width:100%; background-color:#f0f0f0;" >';
				  

     var  s7gg = '<input type="text" name="timeframe[]" id="timeframe_'+rowCount+'" readonly="readonly" '+
                 'style= " margin-left:0px; width:100%; background-color:#f0f0f0;" >';
			  

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+ 
								  '<td>'+s5ee+' </td>'+ 
				                  '<td>'+s7gg+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;

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
          table.rows[x].cells[2].childNodes[0].id="objectives_"+x;
		  table.rows[x].cells[3].childNodes[0].id="activities_"+x; 
		  table.rows[x].cells[5].childNodes[0].id="targets_"+x; 
		  table.rows[x].cells[7].childNodes[0].id="timeframe_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}
  </script>
   <!-- /.END TASKS RESULTS ASSESSMENT -->
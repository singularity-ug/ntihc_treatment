<?php
session_start();
session_regenerate_id();
$id='';
$nameofuser = '';
$name       = "";
$desc       = "";
$dept       = "";
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID'];
$name = $_SESSION['NAME'];
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
}

if(isset($_GET['q'])){
  $id = $_GET['q'];
}
else{
header("location: index.php");
exit();
 }


 ?>
 <?php
  $fname = '';
  $family_name = '';
  $pos  = '';
  $dept = '';
  $lmgr = '';
  $oksh = '';
  $job_grade = '';
  $contract_type = '';
  $kra = array();
  $wgt = array();
  $msr = array();
  $acaa = array();
  $self = array();
  $pdpa_act = array();
  $pdp_deadline = array();
  $pdp_sup = array();;
  $aspirations = '';
  $comments = '';
  $apsr = '';
  $osh = '';
  $apse = '';
  $d1 = '';
  $d2 = '';
  $d3 = '';
  $o_self1 = '';
  $o_self = '';

 require('config.php');
 $sql  = "SELECT * FROM appraisals  WHERE `id` = '$id' ";

  $res = $conn->query($sql);
 $x=1;
  while($row=$res->fetch_assoc()){

     $fname = $row['fname'];
     $family_name = $row['family_name'];
     $pos  = $row['pos'];
     $dept = $row['dept'];
     $lmgr = $row['lmgr'];
     $oksh = $row['oksh'];
     $job_grade = $row['job_grade'];
     $contract_type = $row['contract_type'];
     $kra = json_decode($row['kra']);
     $wgt = json_decode($row['wgt']);
     $msr = json_decode($row['msr']);
     $acaa = json_decode($row['acaa']);
     $self = json_decode($row['self']);
     $pdpa_act = json_decode($row['pdpa_act']);
     $pdp_deadline = json_decode($row['pdp_deadline']);
     $pdp_sup =  json_decode($row['pdp_sup']);
     $aspirations = $row['aspirations'];
     $comments = $row['comments'];
     $d1 = $row['d1'];
     $d2 = $row['d2'];
     $d3 = $row['d3'];
     $o_self = $row['o_self'];
     $apse   = $row['apse'];
      }

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

    <style>
       th,td,tr{
      border: 2px solid #000000;
      }
</style>
</head>
<body style=" background-color:#fff;">


  <?php include('php/header.php'); ?>
<div class="allofit">


<div class ="container-fluid" style="width:100%; height:100%; border: 1px #e4e4e4 solid;border-radius: 4px;  margin-top:50px;">
  <div class="row">
      <div class="col-sm-12">
                    <form role="form" action="process_appraisal2.php" method="post" class="registration-form">
                        <fieldset>
                          <div class="col-md-12">
                              <h3>Step 1 / 3</h3>
                              <table class="table table-bordered" id="dataTable1">
                                <tbody>
                                      <tr>
                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">First Name:</label>
                                            <div class="col-md-8">
                                              <input id="fname" disabled="" name="fname" value="<?php  echo $fname; ?>" placeholder="eg Adrian" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->

                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Family Name:</label>
                                            <div class="col-md-8">
                                              <input id="family_name" disabled="" name="family_name" value="<?php  echo $family_name; ?>" placeholder="eg. Damali" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Position Title:</label>
                                            <div class="col-md-8">
                                              <input id="pos"  disabled="" name="pos" value="<?php  echo $pos; ?>" placeholder="eg. Engineer" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Dept:</label>
                                            <div class="col-md-8">
                                                <select disabled="" name="dept" id="dept" required="required" class="form-control"/>
                                                <option <?php if ($dept=='HUMAN RESOURCE') { echo 'selected="selected"';   } ?> >HUMAN RESOURCE</option>
                                                <option <?php if ($dept=='IT(INFORMATION TECHNOLOGY)') { echo 'selected="selected"';   } ?> >IT(INFORMATION TECHNOLOGY)</option>
                                                <option <?php if ($dept=='IT(INFORMATION TECHNOLOGY)') { echo 'selected="selected"';   } ?>>LEGAL AND ADMINISTRATION</option>
                                                <option <?php if ($dept=='IT(INFORMATION TECHNOLOGY)') { echo 'selected="selected"';   } ?> >FINANCE</option>
                                                <option <?php if ($dept=='CIRCULATION') { echo 'selected="selected"';   } ?> >CIRCULATION</option>
                                                <option <?php if ($dept=='N.C.U') { echo 'selected="selected"';   } ?> >N.C.U</option>
                                                <option <?php if ($dept=='ADVERTISING') { echo 'selected="selected"';   } ?> >ADVERTISING</option>
                                                <option <?php if ($dept=='RADIO') { echo 'selected="selected"';   } ?> >RADIO</option>
                                                <option <?php if ($dept=='PRODUCTION') { echo 'selected="selected"';   } ?> >PRODUCTION</option>
                                                <option <?php if ($dept=='EDITORIAL (FEATURES)') { echo 'selected="selected"';   } ?> >EDITORIAL (FEATURES)</option>
                                                <option <?php if ($dept=='EDITORIAL (NEWS)') { echo 'selected="selected"';   } ?> >EDITORIAL (NEWS)</option>
                                                <option <?php if ($dept=='EDITORIAL (SPORTS)') { echo 'selected="selected"';   } ?> >EDITORIAL (SPORTS)</option>
                                                <option <?php if ($dept=='EDITORIAL (SUPPLEMENTS)') { echo 'selected="selected"';   } ?> >EDITORIAL (SUPPLEMENTS)</option>
                                                <option <?php if ($dept=='EDITORIAL (SPECIAL PROJECTS)') { echo 'selected="selected"';   } ?> >EDITORIAL (SPECIAL PROJECTS)</option>
                                                <option <?php if ($dept=='EDITORIAL (DIGITAL)') { echo 'selected="selected"';   } ?> >EDITORIAL (DIGITAL)</option>
                                                </select>

                                            </div>
                                          </div>
                                        </td>
                                      </tr>


                                      <tr>
                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="lmgr">Line Manager:</label>
                                            <div class="col-md-8">
                                              <input id="lmgr" disabled="" name="lmgr" value="<?php echo $lmgr; ?>" placeholder="eg John Dumba" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="oks">Other key Stakeholders:</label>
                                            <div class="col-md-8">
                                              <input id="oksh" disabled="" name="oksh" value="<?php echo $oksh; ?>" placeholder="eg Tom Mary" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="jg">Job Grade:</label>
                                            <div class="col-md-8">
                                              <input id="job_grade" disabled="" value="<?php echo $job_grade; ?>" name="job_grade" placeholder="eg." class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Contract Type:</label>
                                            <div class="col-md-8">
                                                <select disabled="" name="contract_type" id="contract_type" required="required" class="form-control"/>
                                                       <option <?php if ($contract_type=='PERMANENT') { echo 'selected="selected"';   } ?>>PERMANENT</option>
                                                       <option <?php if ($contract_type=='TEMPORARY') { echo 'selected="selected"';   } ?>>TEMPORARY</option>
                                                       <option <?php if ($contract_type=='CONTRACT') { echo 'selected="selected"';   } ?>>CONTRACT</option>
                                                       <option <?php if ($contract_type=='RETAINED') { echo 'selected="selected"';   } ?>>RETAINED</option>
                                                 </select>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                              </table>
                      </div>

                      <div class="col-md-12">
                           <div class="col-md-6">
                              <div class="col-md-8">
                                <i><p>Before completing this section make sure you nd your manager have discussed the <b>Strategy</b></p></i>
                             </div>
                             <div class="col-md-6">

                             </div>
                             <div class="col-md-6">
                               <h1 id="totals"><?php echo $o_self; ?> </h1>
                             </div>
                              </div>

                           <div class="col-md-6" style="border: 3px solid;">
                             <div class="jumbotron" style="font-size:14px; padding-top:5px; padding-bottom:9px;">
                                <u><h4>PERFORMANCE APPRAISAL RATINGS DEFINITIONS</h4></u>
                                <p style="font-size:13px;"> 1 = Clearly Exceeds Job requirements</p>
                                <p style="font-size:13px;"> 2 = Meets and exceeds some Job requirements</p>
                                <p style="font-size:13px;"> 3 = Meets all Job requirements</p>
                                <p style="font-size:13px;"> 4 = Meets some but not all Job requirements</p>
                                <p style="font-size:13px;"> 5 = Doesnot meet the Job requirements</p>
                              </div>

                           </div>

                         </div>

                           <div class="col-md-12" >
                               <p>
                                      <input type="button" value="Add Item" onClick="addRow('dataTable2');" />
                                      <input type="button" value="Remove"   onClick="deleteRow('dataTable2');"   />
                               </p>
                               <p>
                                      <input type="button" value="put data" class="btn1"/>
                                      <input type="button" value="show data"   data-toggle="modal" data-target="#myModalrequistion1"   />
                               </p>

                                <table id="dataTable2" class="table table-bordered" border="1">
                                       <thead>
                                             <tr  style="color:#000;">
                                                  <th> <label for="no" class="col-md-4 control-label" >          *                     </label></th>
                                                  <th> <label for="kra" class="col-md-12 control-label">KEY RESULT AREA (SMART OBJECTIVES)</label></th>
                                                  <th> <label for="wgt" class="col-md-3 control-label">WEIGHTAGE                         </label></th>
                                                  <th><label for="msr" class="col-md-3 control-label">MEASURES                          </label></th>
                                                  <th> <label for="aca" class="col-md-12 control-label">ACTUAL ACHIEVEMENT   </label></th>
                                                  <th style="width:10%;"><label for="perf" class="col-md-2 control-label" >SELF____|___S/V____|___AGREED   </label></th>
                                              </tr>
                                                         </thead>
                                                          <tbody >
                                                            <?php  $tot = count($kra); $s=0;
                                                            for($s=0;$s<$tot;$s++){ ?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="kra[]" disabled="" type="alphanumeric" value="<?php  echo $kra[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="wgt[]" disabled="" type="alphanumeric" value="<?php  echo $wgt[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="msr[]" disabled="" type="alphanumeric" value="<?php  echo $msr[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="acaa[]" disabled="" type="alphanumeric" value="<?php echo $acaa[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="self[]" disabled="" type="text" value="<?php echo $self[$s]; ?>"required="required" style= "width:30%; "/>
                                                       <input onKeyUp="calcOnkeyup1(this)" onChange="calcOnkeyup1(this)" name="sup[]" type="number" required="required"   style= "width:30%; "/>|
                                                       <input onKeyUp="calcOnkeyup2(this)" onChange="calcOnkeyup2(this)" name="agr[]" type="number" required="required"   style= "width:31%; "/>
                                                 </td>
                                                            </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
                             </div>

                             <div class="col-md-12">
                      <table class="table table-bordered">
                      <thead>
                        <th>BEHAVIOURAL</th>
                        <th>RATINGS</th>
                        <th style="width: 27%;">COMMENTS SECTION</th>
                      </thead>

                      <tbody>

                        <tr>
                          <td> <div class=" col-md-8"><b>Client Orientation : </b>Understanding client needs and concerns; Responds promptly
                                  and effectively to client needs;Customises services and products appropriately</div>
                          </td>

                          <td>
                              <input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1[]" type="alphanumeric"   style= "width:100%; height: 34px;"/>
                                </td>
                          <td><input type="alphanumeric" required="required"      name="c1[]" class="form-control input-md" style= "width:100%; "/></td>
                        </tr>

                        <tr>
                          <td><div class=" col-md-8"><b>Drive For Results : </b>Makes Things happen; Is proactive; balances analysing with
                                 doing; Sets high standards; Commits to institution goals</div>
                          </td>
                          <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1[]" type="alphanumeric"   style= "width:100%; height: 34px;"/>
                          </td>
                          <td><input type="alphanumeric" required="required"      name="c1[]"  class="form-control input-md" style= "width:100%; "/></td>
                        </tr>

                        <tr>
                          <td><div class=" col-md-8"><b>Team Work : </b>Collaborates with others in own unit and across boundaries; Acknowledges others' contributions; Works effectively with individuals of different culture and gender; Iss willing to seek help as needed.</div>
                          </td>
                          <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1[]" type="alphanumeric"   style= "width:100%; height: 34px;"/>
                            </td>
                          <td><input type="alphanumeric" required="required"       name="c1[]" class="form-control input-md" style= "width:100%; "/></td>
                        </tr>

                        <tr>
                          <td><div class=" col-md-8"><b>Learning and Knowledge Sharing: </b>Is open to new ideas; Shares own knowledge; Applies knowledge in daily work; Builds partnerships for learning and knowledge sharing.</div>
                          </td>
                          <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r1[]" type="alphanumeric"  style= "width:100%; height: 34px;"/>
                          </td>
                          <td><input type="alphanumeric" required="required"      name="c1[]" class="form-control input-md" style= "width:100%; "/></td>
                        </tr>

                      <tr>
                        <th>FOR THOSE WITH DIRECT REPORTS ONLY</th>
                        <th>RATING</th>
                        <th>COMMENTS SECTION</th>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Selecting, Coaching and appraising staff : </b>Selects on basis of skills; Coches staff to help themm perform effectively; Appraises performance accuratelt.</div>
                        </td>
                        <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric"   style= "width:100%; height: 34px;"/>
                        </td>
                        <td><input type="alphanumeric" required="required"      name="c2[]" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Influencing and resolving differences across boundaries : </b>Builds useful alliances and collaborates with others; Breaks down barriers between units; Gains support from others without using formal authority.</div>
                        </td>
                        <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric"   style= "width:100%;height: 34px; "/>
                          </td>
                          <td><input type="alphanumeric" required="required"      name="c2[]" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Planning and managing staff t achieve quality results : </b>Communicates unit's goals clearly; Develops realistc plans; Empowers staff by removing obstacles. </div>
                        </td>
                        <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric"   style= "width:100%; height: 34px;"/>
                        </td>
                        <td><input type="alphanumeric" required="required"       name="c2[]" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Encouraging innovatin and open, team-based enviroment : </b>Creates an enviroment for collaboration and teamwork; Shares information well; Thinks beyond existing boundaries.</div>
                        </td>
                        <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric"   style= "width:100%; height: 34px;"/>
                            </td>
                        <td><input type="alphanumeric" required="required"        name="c2[]" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Inspiring trust : </b>Treats everyone fairly, consistently, and with respect; Maintains high standards of personal integrity; Demonstrates commitmet to institutional objectives and vision.</div>
                        </td>
                        <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric"  style= "width:100%; height: 34px;"/>
                        </td>
                        <td><input type="alphanumeric" required="required"        name="c2[]" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Creating an environment for learning and knowledge sharing : </b>Uses knowledge to equip clients and staff; Prmotes continuos learning enviroment; Shares knowledge and information.</div>
                        </td>
                        <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)" name="r2[]" type="alphanumeric"   style= "width:100%; height: 34px;"/> </td>
                        <td><input type="alphanumeric" required="required"       name="c2[]" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Focusing on big picture and overall framework for development : </b>Develops strategic priorities consistent with NMG's objectives and vision; Communicates strategy to diverse constituents.</div>
                        </td>
                        <td><input onKeyUp="calcOnkeyup(this)" onChange="calcOnkeyup(this)"  name="r2[]" type="alphanumeric"   style= "width:100%; height: 34px;"/> </td>
                        <td><input type="alphanumeric" required="required"      name="c2[]" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      </tbody>
                      </table>
                    <center>  <button type="button" class="btn btn-next btn-info"> NEXT SECTION >>>>> </button> </center>
                      </div>
                      </fieldset>



                      <fieldset>
                          <h3>Step 2 / 3</h3>
                          <p>DEVELOPMENT PLAN FOR 2016/2017:</p>
                        <div class="col-md-12" >
                          <p>
                                 <input type="button" value="Add Item" onClick="addRow('dataTable3')" />
                                 <input type="button" value="Remove" onClick="deleteRow('dataTable3')"   />
                          </p>

                          <table id="dataTable3" class="table table-bordered" border="1">
                                 <thead>
                                       <tr  style="color:000;">
                                            <th> <label for="no" class="col-md-4 control-label" >          *                      </label></th>
                                            <th> <label for="actd" class="col-md-12 control-label"> ACTIONS TAKEN for the development plan</label></th>
                                            <th> <label for="ddl" class="col-md-3 control-label">  DEADLINE                        </label></th>
                                            <th><label for="tbc" class="col-md-6 control-label"> TO BE CONDUCTED BY (Appraise/Appraiser/HR Department)  </label></th>
                                       </tr>

                                </thead>
                                 <tbody>
                                   <?php  $tot = count($pdpa_act); $s=0;
                                   for($s=0;$s<$tot;$s++){ ?>
                                        <tr  >
                                            <td> <input type="checkbox" required="required" checked="checked" /></td>
                                            <td> <input type="alphanumeric" disabled="" value="<?php  echo $pdpa_act[$s]; ?>"     name="pdpa_act[]"  class="form-control input-md" style= "width:100%; "/></td>
                                            <td> <input type="alphanumeric" disabled="" value="<?php  echo $pdp_deadline[$s]; ?>" name="pdp_deadline[]"  class="form-control input-md" style= "width:100%; "/></td>
                                            <td> <input type="alphanumeric" disabled="" value="<?php  echo $pdp_sup[$s]; ?>"      name="pdp_sup[]"  class="form-control input-md" style= "width:100%; "/></td>
                                        </tr>
                                        <?php } ?>
                                 </tbody>
                          </table>

                         <hr >
                         <table id="dataTable4" class="table" border="1">
                                <thead>
                                      <tr  style="color:000;">
                                           <th> <label for="cafa" class="col-md-12 control-label"> CAREER ASPIRATIONS FOR APPRAISEE</label></th>
                                      </tr>
                               </thead>
                                <tbody>
                                       <tr >
                                           <td>Career aspirations expressed by appraisee :
                                             <input type="alphanumeric" name="aspirations" value="<?php  echo $aspirations; ?>" disabled="" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                       </tr>

                                       <tr >
                                           <td>Comments by the appraiser :
                                             <input type="alphanumeric" name="comments" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                       </tr>
                                </tbody>
                         </table>
                            <button type="button" class="btn btn-next btn-success1">Previous</button>
                            <button type="button" class="btn btn-next btn-success1">Next</button>
                        </div>
                      </fieldset>



                      <fieldset>

                            <h3>Step 3 / 3</h3>
                            <p>COMMENTS AND SIGNATURES:</p>
                            <div class="col-md-12">
                              <table id="dataTable3" class="table table-bordered" border="1">
                                     <thead>
                                           <tr  style="color:000;">
                                                <th> <label for="apsr" class="col-md-12 control-label"> APPRAISER          </label></th>
                                                <th> <label for="osh" class="col-md-3 control-label">  OTHER STAKEHOLDERS </label></th>
                                                <th> <label for="apse" class="col-md-6 control-label"> APPRAISEE          </label></th>
                                           </tr>

                                    </thead>
                                     <tbody>
                                            <tr >
                                                <td><textarea name="apsr" cols="50" rows="8"></textarea></td>
                                                <td><textarea name="osh" cols="50" rows="8"> <?php echo $oksh; ?>  </textarea></td>
                                                <td><textarea name="apse" cols="50" rows="8"><?php echo $apse; ?>  </textarea></td>
                                            </tr>

                                            <tr >
                                                <td>Date : <input type="text" name="d1" VALUE="<?php  echo $d1; ?>" /></td>
                                                <td>Date : <input type="text" name="d2" VALUE="<?php  echo date("d/m/Y"); ?>" /></td>
                                                <td>Date : <input type="text" name="d3" VALUE="<?php  echo date("d/m/Y"); ?>"  /></td>
                                            </tr>

                                            <tr >
                                                <td>OVERALL PERFORMANCE RATING:
                                                  <input  type="text"   name="o_self1"  id="o_self1"  value=""   style="width:100%;" />
                                                  <input  type="hidden" name="o_self"   id="o_self"   value=" <?php echo $o_self;?>"   style="width:100%;" />
                                                  <input  type="hidden" name="o_sup"    id="o_sup"    value=""   style="width:100%;" />
                                                  <input  type="hidden" name="o_agreed" id="o_agreed" value=""   style="width:100%;" />
                                                  <input  type="hidden" name="username"  value="<?php echo $username; ?>"   />
                                                  <input  type="hidden" name="id"  value="<?php echo $_GET['q']; ?>"   />
                                                </td>
                                                <td>LINE MANAGER : <input type="text" VALUE="<?php  echo $lmgr; ?>" style="width:100%;" disabled="" /></td>
                                                <td></td>
                                            </tr>
                                     </tbody>

                              </table>
                            <button type="button" class="btn btn-previous btn-danger">Previous</button>
                            <button type="submit" class="btn btn-success">Submit Appraisal!</button>
                        </div>
                      </fieldset>
                    </form>
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

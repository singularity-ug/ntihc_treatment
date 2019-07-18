<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8;  IE=EDGE">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="bootstrap/jquery/jquery-1.11.3.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <script src=js/custom.js></script>
  <script src=js/datacapture.js></script>
  <script src=js/labscript.js></script>
  <script src=js/appraisal.js></script>

  <style>
  th,td,tr{
    border: 1px solid #000;
  }
  </style>

</head>

<body style=" background-color:#ccdccf;">

  <?php
  session_start();
  session_regenerate_id();
  $nameofuser = 'user';
/*  if(isset($_SESSION['USERID'])){
  $nameofuser = $_SESSION['USERID'];
  }
  else{
    $_SESSION = array();
    session_destroy();
    header('location:index.php');
  }*/
   ?>

<?php include('php/header.php'); ?>
    <!--<img src="imgs/kcca.png" class="img-circle" alt="Cinque Terre" width="110" height="110"> -->
<div class ="container-fluid" style="width:100%; height:100%; border: 1px #e4e4e4 solid;border-radius: 4px;  margin-top:50px;">
  <div class="row">
      <div class="col-sm-12">
                    <form role="form" action="" method="post" class="registration-form">
                        <fieldset>
                          <div class="col-md-12">
                              <h3>Step 1 / 3</h3>
                              <table class="table table-bordered" id="dataTable1">
                                <tbody>
                                      <tr>
                                        <td><input type="checkbox" required="required" checked="checked" /></td>
                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">First Name:</label>
                                            <div class="col-md-8">
                                              <input id="fname" name="fname" placeholder="eg Adrian" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->

                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Family Name:</label>
                                            <div class="col-md-8">
                                              <input id="famname" name="fanname" placeholder="eg. Damali" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Position Title:</label>
                                            <div class="col-md-8">
                                              <input id="pos" name="pos" placeholder="eg. Engineer" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Dept:</label>
                                            <div class="col-md-8">
                                                <select name="dept" id="dept" required="required" class="form-control"/>
                                                       <option>DEPARTMENT//INSTITUTION</option>
                                                       <option>/INSTITUTION</option>
                                                       <option>KSHS</option>
                                                       <option>YEN</option>
                                                 </select>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>


                                      <tr>
                                        <td><input type="checkbox" required="required" checked="checked" /></td>
                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="lmgr">Line Manager:</label>
                                            <div class="col-md-8">
                                              <input id="lmgr" name="lmgr" placeholder="eg John Dumba" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="oks">Other key Stakeholders:</label>
                                            <div class="col-md-8">
                                              <input id="oks" name="oks" placeholder="eg Tom Mary" class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="jg">Job Grade:</label>
                                            <div class="col-md-8">
                                              <input id="jg" name="jg" placeholder="eg." class="form-control input-md" type="text">
                                            </div>
                                          </div>
                                        </td>

                                        <td>  <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="vehicletype">Contract Type:</label>
                                            <div class="col-md-8">
                                                <select name="ct" id="ct" required="required" class="form-control"/>
                                                       <option>PERMANENT</option>
                                                       <option>TEMPORARY</option>
                                                       <option>CONTRACT</option>
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
                               <h1 id="totals">0.0</h1>
                             </div>
                              </div>

                           <div class="col-md-6">
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

                           <div class="col-md-12">
                               <p>
                                      <input type="button" value="Add Item" onClick="addRow('dataTable2')" />
                                      <input type="button" value="Remove" onClick="deleteRow('dataTable2')"   />
                               </p>

                                <table id="dataTable2" class="table table-bordered" border="1">
                                       <thead>
                                             <tr  style="color:#000;">
                                                  <th> <label for="no" class="col-md-4 control-label" >          *                     </label></th>
                                                  <th> <label for="kra" class="col-md-12 control-label">KEY RESULT AREA (SMART OBJECTIVES)</label></th>
                                                  <th> <label for="wgt" class="col-md-3 control-label">WEIGHTAGE                         </label></th>
                                                  <th><label for="msr" class="col-md-3 control-label">MEASURES                          </label></th>
                                                  <th> <label for="aca" class="col-md-12 control-label">ACTUAL ACHIEVEMENT   </label></th>
                                                  <th><label for="perf" class="col-md-2 control-label">PERFORMANCE                </label></th>

                                             </tr>

                                      </thead>

                                       <tbody>
                                              <tr >
                                                  <td> <input type="checkbox" required="required" checked="checked" /></td>
                                                  <td> <input  name="kra[]" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="wgt[]" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="msr[]" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="aca[]" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" name="perf[]" type="number" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                              </tr>
                                       </tbody>
                                </table>
                             </div>

                             <div class="col-md-12">
                      <table class="table table-bordered">
                      <thead>
                        <th>BEHAVIOURL</th>
                        <th>RATING</th>
                        <th>COMMENTS</th>
                      </thead>

                      <tbody>

                        <tr>
                          <td> <div class=" col-md-8"><b>Client Orientation : </b>Understanding client needs and concerns; Responds promptly
                                  and effectively to client needs;Customises services and products appropriately</div>
                          </td>

                          <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_1" name="r_1" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                          <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                        </tr>

                        <tr>
                          <td><div class=" col-md-8"><b>Drive For Results : </b>Makes Things happen; Is proactive; balances analysing with
                                 doing; Sets high standards; Commits to institution goals</div>
                          </td>
                          <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_2" name="r_2"  type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                          <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                        </tr>

                        <tr>
                          <td><div class=" col-md-8"><b>Team Work : </b>Collaborates with others in own unit and across boundaries; Acknowledges others' contributions; Works effectively with individuals of different culture and gender; Iss willing to seek help as needed.</div>
                          </td>
                          <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_3" name="r_3"  type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                          <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                        </tr>

                        <tr>
                          <td><div class=" col-md-8"><b>Learning and Knowledge Sharing: </b>Is open to new ideas; Shares own knowledge; Applies knowledge in daily work; Builds partnerships for learning and knowledge sharing.</div>
                          </td>
                          <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_4" name="r_4"  type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                          <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                        </tr>

                      <tr>
                        <th>FOR THOSE WITH DIRECT REPORTS ONLY</th>
                        <th>RATING</th>
                        <th>COMMENTS</th>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Selecting, Coaching and appraising staff : </b>Selects on basis of skills; Coches staff to help themm perform effectively; Appraises performance accuratelt.</div>
                        </td>
                        <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_5" name="r_5" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                        <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Influencing and resolving differences across boundaries : </b>Builds useful alliances and collaborates with others; Breaks down barriers between units; Gains support from others without using formal authority.</div>
                        </td>
                        <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_6" name="r_6" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                        <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Planning and managing staff t achieve quality results : </b>Communicates unit's goals clearly; Develops realistc plans; Empowers staff by removing obstacles. </div>
                        </td>
                        <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_7" name="r_7" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                        <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Encouraging innovatin and open, team-based enviroment : </b>Creates an enviroment for collaboration and teamwork; Shares information well; Thinks beyond existing boundaries.</div>
                        </td>
                        <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_8" name="r_8" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                        <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Inspiring trust : </b>Treats everyone fairly, consistently, and with respect; Maintains high standards of personal integrity; Demonstrates commitmet to institutional objectives and vision.</div>
                        </td>
                        <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_9" name="r_9" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                        <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Creating an environment for learning and knowledge sharing : </b>Uses knowledge to equip clients and staff; Prmotes continuos learning enviroment; Shares knowledge and information.</div>
                        </td>
                        <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_10" name="r_10" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                        <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      <tr>
                        <td><div class=" col-md-8"><b>Focusing on big picture and overall framework for development : </b>Develops strategic priorities consistent with NMG's objectives and vision; Communicates strategy to diverse constituents.</div>
                        </td>
                        <td><input onkeyup="calcOnkeyup(this)" onchange="calcOnkeyup(this)" id="r_11" name="r_11" type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
                        <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                      </tr>

                      </tbody>
                      </table>
                    <center>  <button type="button" class="btn btn-next btn-info"> >>>>> NEXT SECTION</button> </center>
                      </div>
                      </fieldset>



                      <fieldset>
                          <h3>Step 2 / 3</h3>
                          <p>DEVELOPMENT PLAN FOR 2016/2017:</p>
                        <div class="col-md-12">
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
                                        <tr  >
                                            <td> <input type="checkbox" required="required" checked="checked" /></td>
                                            <td> <input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                            <td> <input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                            <td> <input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                        </tr>
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
                                           <td>Career aspirations expressed by appraisee : <input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                       </tr>

                                       <tr >
                                           <td>Comments by the appraiser : <input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                                       </tr>
                                </tbody>
                         </table>
                            <button type="button" class="btn btn-previous">Previous</button>
                            <button type="button" class="btn btn-next">Next</button>
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
                                                <td><textarea name="osh" cols="50" rows="8"></textarea></td>
                                                <td><textarea name="apse" cols="50" rows="8"></textarea></td>
                                            </tr>

                                            <tr >
                                                <td>Date : <input type="text" /></td>
                                                <td>Date : <input type="text" /></td>
                                                <td>Date : <input type="text" /></td>
                                            </tr>

                                            <tr >
                                                <td>OVERALL PERFORMANCE RATING: <input type="text" style="width:100%;" /></td>
                                                <td>LINE MANAGER : <input type="text" style="width:100%;" disabled="" /></td>
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
</body>
</html>

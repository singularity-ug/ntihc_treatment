<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8;  IE=EDGE">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="bootstrap/jquery/jquery-1.11.3.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <script src=js/custom.js></script>
  <script src=js/datacapture.js></script>
  <script src=js/labscript.js></script>
  <style>
  th,td,tr{
    border: 1px solid #000;
    padding: 0px;
  }

.form-control{
    font-size: 13px;
    height:27px;
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
          <form id="vehicleform" class="form-horizontal" action ="php/insert_mechjob.php" method="POST" style="border: 3px #e4e4e4 solid;">
            <fieldset>
              <!-- Form Name -->
          <center >  <legend style="color:#B11D0B;">STAFF ADVANCE (FOR EXPENSES, CASH PURCHASE ETC TO BE ACCOUNTED FOR)</legend> </center>
       <div class="form-inline">

          <div class="form-group col-md-3">
            <label class="col-md-4 control-label" for="regno">APPLICANTS NAME</label>
            <div class="col-md-4">
              <input id="regno" name="regno" placeholder="eg. LG-001-002" onkeyup="searchvehicle(this.value)" class="form-control input-md"  type="text">
            </div>
              <div id="searchdiv" class="form-group" style="margin-left:20%; width:60%; margin-top:-3%;"></div>
            </div>

            <div class="form-group col-md-3">
              <label class="col-md-4 control-label" for="regno">ID NO: </label>
              <div class="col-md-4">
                <input id="datef" name="datef" value=""  class="form-control input-md"  type="text">
              </div>
            </div>

            <div class="form-group col-md-3">
              <label class="col-md-4 control-label" for="regno">SECTION CODE : </label>
              <div class="col-md-4">
                <input id="datef" name="datef" value=""  class="form-control input-md"  type="text">
              </div>
            </div>

          <div class="form-group col-md-3" style="">
              <label class="col-md-4 control-label" for="regno">DEPARTMENT</label>
              <div class="col-md-4">
                <select id="directorate" name="directorate" class="form-control">
                <option value="DAHR">HUMAN RESOURCE</option>
                <option value="DETS">IT(INFORMATION TECHNOLOGY)</option>
                <option value="DTS">LEGAL AND ADMINISTRATION</option>
                <option value="DTS">FINANCE</option>
                <option value="DTS">CIRCULATION</option>
                <option value="DTS">N.C.U</option>
                <option value="DTS">ADVERTISING</option>
                <option value="DTS">RADIO</option>
                <option value="DTS">PRODUCTION</option>

                <option value="DTS">EDITORIAL (FEATURES)</option>
                <option value="LEGAL">EDITORIAL (NEWS)</option>
                <option value="GENDER">EDITORIAL (SPORTS)</option>
                <option value="DTS">EDITORIAL (SUPPLEMENTS)</option>
                <option value="LEGAL">EDITORIAL (SPECIAL PROJECTS)</option>
                <option value="GENDER">EDITORIAL (DIGITAL)</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
      </div>

<div class="col-md-12" >

      <p>
        <input type="button" value="Add Expense" onClick="addRow('dataTable')" />
        <input type="button" value="Remove" onClick="deleteRow('dataTable')"  />

      </p>
             <table id="dataTable" class="table table-bordered" border="1">
               <thead>
                 <tr  style="color:000;">
         <th> <label for="NTIHCNO" class="col-md-4 control-label" >          *</label>                    </th>
         <th> <label for="NTIHCNO" class="col-md-8 control-label">      EXPLANATION FOR WHICH STAFF ADVANCE IS REQUIRED</label> </th>
         <th> <label for="NTIHCNO" class="col-md-4 control-label">      CURR</label> </th>
         <th> <label for="NTIHCNO" class="col-md-4 control-label">      AMOUNT</label> </th>
          </tr>
               </thead>
                <tbody id="tablebody">
                  <tr id="0_rowdata" >
                  <td><input type="checkbox" required="required" checked="checked" /></td>
                  <td> <input type="alphanumeric" name="exp" id="exp" required="required" class="form-control input-md" style= "width:100%; "/>
                  </td>
                 <td><select name="CURRENCY" id="CURRENCY" required="required" style= ''/>
                          <option>USD</option>
                          <option>UGX</option>
                          <option>KSHS</option>
                          <option>YEN</option>
                    </select>
                 </td>
                 <td> <input type="alphanumeric" name="AMOUNT" id="AMOUNT" required="required" class="form-control input-md"/>
                 </td>
        </tr>
        </tbody>
        </table>

        <div class="col-sm-8">
        </div>
        <div class="col-sm-4">
                   <div class="form-group col-md-12">
                      <label class="col-md-6 control-label" for="regno">TOTAL EXPENSES</label>
                      <div class="col-md-6">
                        <input id="regno" name="regno" placeholder="eg. LG-001-002" onkeyup="searchvehicle(this.value)" class="form-control input-md"  type="text">
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                                <label class="col-md-6 control-label" for="regno">LESS ADVANCE TAKEN</label>
                                <div class="col-md-6">
                                  <input id="regno" name="regno" placeholder="eg. LG-001-002" onkeyup="searchvehicle(this.value)" class="form-control input-md"  type="text">
                                </div>
                   </div>
                   <div class="form-group col-md-12">
                               <label class="col-md-6 control-label" for="regno">LESS ADVANCE TAKEN</label>
                               <div class="col-md-6">
                                 <input id="regno" name="regno" placeholder="eg. LG-001-002" onkeyup="searchvehicle(this.value)" class="form-control input-md"  type="text">
                               </div>
                  </div>
        </div>


        <div class="form-group col-md-12">
             <label class="col-md-4 control-label" for="regno">TOTAL IN WORDS : </label>
             <div class="col-md-8">
                  <input id="regno" name="regno" placeholder="TWO MILLION THREE HUNDRED THOUSAND SHILLINGS ONLY" onkeyup="searchvehicle(this.value)" class="form-control input-md"  type="text">
             </div>
        </div>

        <table class="table table-bordered" >
          <thead>
            <tr>
            <th>USER TITLE</th>
            <th>NAME OF USERS </th>
            <th>DATE</th>
          </tr>
  <!--          <div class="form-group col-md-12">
               <label class="col-md-6 control-label" for="regno">Car Reg No</label>
               <div class="col-md-6">
                 <input id="regno" name="regno" placeholder="eg. LG-001-002" onkeyup="searchvehicle(this.value)" class="form-control input-md"  type="text">
               </div>
             </div>-->
          </thead>
          <tbody>
            <tr>
            <td>CLAIMANT </th>
            <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></th>
            <td><input type="alphanumeric" class="form-control input-md" style= "width:100%;" value="<?php echo date('Y-m-d');?>"/></td>
            </tr>

            <tr>
            <td>HEAD OF SECTION </th>
            <td><input type="alphanumeric" disabled="" class="form-control input-md" style= "width:100%; background-color:#c6c6c6;"/></th>
            <td><input type="alphanumeric" disabled="" class="form-control input-md" style= "width:100%; background-color:#c6c6c6;"/></td>
            </tr>

            <tr>
            <td>HEAD OF DEPARTMENT </th>
            <td><input type="alphanumeric" disabled=""  class="form-control input-md" style= "width:100%; background-color:#c6c6c6;"/></th>
            <td><input type="alphanumeric" disabled="" class="form-control input-md" style= "width:100%;  background-color:#c6c6c6;" /></td>
            </tr>

            <tr>
            <td>PAYMENT BY</th>
            <td><input type="alphanumeric" disabled="" class="form-control input-md" style= "width:100%; background-color:#c6c6c6;"/></th>
            <td><input type="alphanumeric" disabled="" class="form-control input-md" style= "width:100%; background-color:#c6c6c6;"/></td>
            </tr>
          </tbody>
        </table>

        <table class="table table-bordered" id="dataTable1">
            <tbody>
                <tr>
                  <td><input type="checkbox" required="required" checked="checked" /></td>
                  <td>  <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="vehicletype">First Name:</label>
                      <div class="col-md-8">
                        <input id="vehicletype" name="vehicletype" placeholder="first name" class="form-control input-md" type="text">
                      </div>
                    </div>
                  </td>
                  <td>  <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="vehicletype">Family Name:</label>
                      <div class="col-md-8">
                        <input id="vehicletype" name="vehicletype" placeholder="first name" class="form-control input-md" type="text">
                      </div>
                    </div>
                  </td>
                  <td>  <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="vehicletype">Position Title:</label>
                      <div class="col-md-8">
                        <input id="vehicletype" name="vehicletype" placeholder="first name" class="form-control input-md" type="text">
                      </div>
                    </div>
                  </td>
                  <td>  <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="vehicletype">Dept:</label>
                      <div class="col-md-8">
                          <select name="CURRENCY" id="CURRENCY" required="required" class="form-control"/>
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
                      <label class="col-md-4 control-label" for="vehicletype">Line Manager:</label>
                      <div class="col-md-8">
                        <input id="vehicletype" name="vehicletype" placeholder="first name" class="form-control input-md" type="text">
                      </div>
                    </div>
                  </td>
                  <td>  <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="vehicletype">Other key Stakeholders:</label>
                      <div class="col-md-8">
                        <input id="vehicletype" name="vehicletype" placeholder="first name" class="form-control input-md" type="text">
                      </div>
                    </div>
                  </td>
                  <td>  <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="vehicletype">Job Grade:</label>
                      <div class="col-md-8">
                        <input id="vehicletype" name="vehicletype" placeholder="first name" class="form-control input-md" type="text">
                      </div>
                    </div>
                  </td>

                  <td>  <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="vehicletype">Contract Type:</label>
                      <div class="col-md-8">
                          <select name="CURRENCY" id="CURRENCY" required="required" class="form-control"/>
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
     <div class="col-md-12">
         <p>
                <input type="button" value="Add Item" onClick="addRow('dataTable2')" />
                <input type="button" value="Remove" onClick="deleteRow('dataTable2')"   />
         </p>
          <table id="dataTable2" class="table table-bordered" border="1">
                 <thead>
                       <tr  style="color:000;">
                            <th> <label for="NTIHCNO" class="col-md-4 control-label" >          *                      </label></th>
                            <th> <label for="NTIHCNO" class="col-md-12 control-label">KEY RESULT AREA (SMART OBJECTIVES)</label></th>
                            <th> <label for="NTIHCNO" class="col-md-3 control-label">WEIGHTAGE                         </label></th>
                            <th><label for="SPECIMEN" class="col-md-3 control-label">MEASURES                          </label></th>
                            <th> <label for="HEAMATOLOGY/SCROLOGY" class="col-md-12 control-label">ACTUAL ACHIEVEMENT   </label></th>
                            <th><label for="SWABS-GRAMSTAIN" class="col-md-2 control-label">PERFORMANCE                </label></th>
                       </tr>
                </thead>
                 <tbody>
                        <tr id="0_rowdata" >
                            <td><input type="checkbox" required="required" checked="checked" /></td>
                            <td> <input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                            <td> <input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                            <td> <input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                            <td> <input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
                            <td> <input type="number" required="required" class="form-control input-md" style= "width:100%; "/></td>
                        </tr>
                 </tbody>
          </table>
       </div>
       <div class="col-md-12">
<table class="table">
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
    <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
    <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
  </tr>
  <tr>
    <td><div class=" col-md-8"><b>Drive For Results : </b>Makes Things happen; Is proactive; balances analysing with
           doing; Sets high standards; Commits to institution goals</div>
    </td>
    <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
    <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
  </tr>
  <tr>
    <td><div class=" col-md-8"><b>Drive For Results : </b>Makes Things happen; Is proactive; balances analysing with
           doing; Sets high standards; Commits to institution goals</div>
    </td>
    <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/> </td>
    <td><input type="alphanumeric" required="required" class="form-control input-md" style= "width:100%; "/></td>
  </tr>
</tbody>
</table>
       </div>


</div>

            <!-- Button -->
              <div class="form-group">
                <label class="col-md-6 control-label" for="submitbuton"></label>
                <div class="col-md-6">
                  <button id="submitbuton" name="submitbuton" class="btn btn-success">SUBMIT ADVANCE REQUEST</button>
                </div>
              </div>

            </fieldset>
          </form>
  </div>
    </div>
</div>

</body>
</html>

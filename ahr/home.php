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
<div class ="container" style="width:100%; height:100%; border: 1px #e4e4e4 solid;border-radius: 4px;  margin-top:77px;">
    <div class="row">
      <div class="col-sm-12">
          <form id="vehicleform" class="form-horizontal" action ="php/insert_mechjob.php" method="POST" style="border: 3px #e4e4e4 solid;">
            <fieldset>
              <!-- Form Name -->
          <center >  <legend style="color:#B11D0B;">STAFF  EXPENSE CLAIM REIMBURSEMENT VOUCHER</legend> </center>
       <div class="form-inline">

          <div class="form-group col-md-4">
            <label class="col-md-4 control-label" for="regno">STAFF NAME</label>
            <div class="col-md-4">
              <input id="regno" name="regno" placeholder="eg. LG-001-002" onKeyUp="searchvehicle(this.value)" class="form-control input-md"  type="text">
            </div>
              <div id="searchdiv" class="form-group" style="margin-left:20%; width:60%; margin-top:-3%;"></div>
            </div>

            <div class="form-group col-md-4">
              <label class="col-md-4 control-label" for="regno">DATE : </label>
              <div class="col-md-4">
                <input id="datef" name="datef" value="<?php echo date('Y-m-d');?>"  class="form-control input-md"  type="text">
              </div>
            </div>

          <div class="form-group col-md-4" style="">
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
         <th> <label for="NTIHCNO" class="col-md-4 control-label">      NUMBER</label> </th>
         <th> <label for="NTIHCNO" class="col-md-4 control-label">EXPENSES</label> </th>
         <th><label for="SPECIMEN" class="col-md-4 control-label">     CURRENCY</label>             </th>
         <th> <label for="HEAMATOLOGY/SCROLOGY" class="col-md-4 control-label">AMOUNT</label>  </th>
      </tr>
               </thead>
                <tbody id="tablebody">
                  <tr id="0_rowdata" >
                  <td><input type="checkbox" required="required" checked="checked" /></td>
                  <td>
              <!--     <input type="alphanumeric" name="NTIHCNO" id="NTIHCNO" required="required" class="form-control" /> -->
                  </td>
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
        <hr >
        <table class="table table-bordered" >
          <thead>
            <tr>
            <th>MILEAGE</th>
            <th> CAR REG : </th>
            <th><input type="alphanumeric" name="exp" id="exp" required="required" class="form-control input-md" style= "width:100%; "/></th>
            <th>ENGINE CAP</th>
            <th><input type="alphanumeric" name="exp" id="exp" required="required" class="form-control input-md" style= "width:100%; "/></th>
            <th></th>
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
            <th>DATE</th>
            <th>KILOMETERS </th>
            <th>RATE</th>
            <th>JOURNEY</th>
            <th>REASON FOR JOURNEY</th>
            <th>Amount</th>
            </tr>
            <tr>
            <td><input type="alphanumeric" name="exp" id="exp" required="required" class="form-control input-md" style= "width:100%; "/></th>
            <td><input type="alphanumeric" name="exp" id="exp" required="required" class="form-control input-md" style= "width:100%; "/></th>
            <td><select name="CURRENCY" id="CURRENCY" required="required" style= ''/>
                     <option>USD</option>
                     <option>UGX</option>
                     <option>KSHS</option>
                     <option>YEN</option>
               </select>
            </td>
            <td><input type="alphanumeric" name="exp" id="exp" required="required" class="form-control input-md" style= "width:100%; "/></td>
            <td><input type="alphanumeric" name="exp" id="exp" required="required" class="form-control input-md" style= "width:100%; "/></td>
            <td><input type="alphanumeric" name="exp" id="exp" required="required" class="form-control input-md" style= "width:100%; "/></td>
            </tr>

          </tbody>
        </table>

        <p>
        <label for="">FOR OFFICIAL USE :
          <input type="button" value="ADD ENTRY" onClick="addRow('dataTable1')" />
          <input type="button" value="REMOVE" onClick="deleteRow('dataTable1')"  />
          </label>
        </p>
        <table class="table table-bordered" id="dataTable1">
              <thead>
                  <tr>
                    <th>*</th>
                    <th>Account Code</th>
                    <th>Cost Centre</th>
                    <th>Dept . Code</th>
                    <th>Naration</th>
                    <th>Currency</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" required="required" checked="checked" /></td>
                  <td><input type="alphanumeric"  required="required" class="form-control input-md" style= "width:100%; "/></td>
                  <td><input type="alphanumeric"  required="required" class="form-control input-md" style= "width:100%; "/></td>
                  <td><input type="alphanumeric"  required="required" class="form-control input-md" style= "width:100%; "/></td>
                  <td><input type="alphanumeric"  required="required" class="form-control input-md" style= "width:100%; "/></td>
                  <td><input type="alphanumeric"  required="required" class="form-control input-md" style= "width:100%; "/></td>
                </tr>
              </tbody>
        </table>
        <div class="col-sm-8">
        </div>
        <div class="col-sm-4">
                   <div class="form-group col-md-12">
                      <label class="col-md-6 control-label" for="regno">TOTAL EXPENSES</label>
                      <div class="col-md-6">
                        <input id="total" name="total"  value="0.000000" class="form-control input-md"  type="text">
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                                <label class="col-md-6 control-label" for="advance">LESS ADVANCE TAKEN</label>
                                <div class="col-md-6">
                                  <input id="advance" name="advance" value="0.000000" class="form-control input-md"  type="text">
                                </div>
                   </div>
                   <div class="form-group col-md-12">
                               <label class="col-md-6 control-label" for="regno">NET CASH ADVANCE</label>
                               <div class="col-md-6">
                                 <input id="net" name="netpay" placeholder="0.00000" class="form-control input-md"  type="text">
                               </div>
                  </div>
        </div>
</div>

            <!-- Button -->
              <div class="form-group">
                <label class="col-md-6 control-label" for="submitbuton"></label>
                <div class="col-md-6">
                  <button id="submitbuton" name="submitbuton" class="btn btn-success">SUBMIT CLAIM</button>
                </div>
              </div>

            </fieldset>
          </form>
  </div>
    </div>
</div>

</body>
</html>

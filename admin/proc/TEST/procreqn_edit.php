  <?php
  $id = $_GET['id'];
   
  $PDECODE = '';
  $CATEGORY = '';
  $FINANCIALYEAR  = '';
  $SEQUENCENUMBER = '';
  $SUBJECTOFPROCUREMENT = '';
  $PROCUREMENTPLANREF = '';
  $LOCATIONFORDELIVERY = '';
  $DATEREQUIRED = '';
  $desc = array();
  $qty = array();
  $uom = array();
  $escost = array();
  $marktp = array();
  $SUBTOTAL = '';
  $TAX = '';
  $TOTALCOST = '';
  $RFPUSERNAME = '';
  $RFPSIGNATURE = '';
  $RFPTITLE = '';
  $RFPDATE = '';
  $DEPARTMENT='';
  $CORNAME='';
  $CORSIGNATURE='';
  $CORTITLE='';
  $CORDATE='';
  $VOTE_HEADNO='';
  $PROGRAMME='';
  $SUBPROGRAMME='';
  $ITEM='';
  $BALANCEREMAINING='';
  $AONAME='';
  $AOSIGNATURE='';
  $AOTITLE='';
  $AODATE='';
  $THRESHOLD='';
  $THRESHOLDREASON='';

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "procurement";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM procreqn  WHERE `id` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $PDECODE = $row['PDECODE'];
     $CATEGORY = $row['CATEGORY'];
     $FINANCIALYEAR  = $row['FINANCIALYEAR'];
     $SEQUENCENUMBER = $row['SEQUENCENUMBER'];
     $SUBJECTOFPROCUREMENT = $row['SUBJECTOFPROCUREMENT'];
     $PROCUREMENTPLANREF = $row['PROCUREMENTPLANREF'];
     $LOCATIONFORDELIVERY = $row['LOCATIONFORDELIVERY'];
     $DATEREQUIRED = $row['DATEREQUIRED'];
     $desc = json_decode($row['DESCRIPTION']);
     $qty = json_decode($row['QUANTITY']);
     $uom = json_decode($row['UNITOFMEASURE']);
     $escost = json_decode($row['ESTIMATEDCOST']);
     $marktp = json_decode($row['MARKETPRICE']);
     $SUBTOTAL = $row['SUBTOTAL'];
     $TAX = $row['TAX'];
     $TOTALCOST   = $row['TOTALCOST'];
     $RFPUSERNAME = $row['RFPUSERNAME'];
     $RFPSIGNATURE = $row['RFPSIGNATURE'];
     $RFPTITLE = $row['RFPTITLE'];
     $RFPDATE  = $row['RFPDATE'];
     $DEPARTMENT=$row['RFPDEPARTMENT'];
     $CORNAME=$row['CORNAME'];
     $CORSIGNATURE=$row['CORSIGNATURE'];
     $CORTITLE=$row['CORTITLE'];
     $CORDATE=$row['CORDATE'];
     $VOTE_HEADNO=$row['VOTE_HEADNO'];
     $PROGRAMME=$row['PROGRAMME'];
     $SUBPROGRAMME=$row['SUBPROGRAMME'];
     $ITEM=$row['ITEM'];
     $BALANCEREMAINING=$row['BALANCEREMAINING'];
     $AONAME=$row['AONAME'];
     $AOSIGNATURE=$row['AOSIGNATURE'];
     $AOTITLE=$row['AOTITLE'];
     $AODATE=$row['AODATE'];
	 $THRESHOLD=$row['THRESHOLD'];
     $THRESHOLDREASON=$row['THRESHOLDREASON']; 
      }

  ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | procurement</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
 <style>
h9 {
    border-bottom: 2px solid #cc9900;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 2px solid black;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #ecf0f5;;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
   }

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
             table, th , td  {
                 border: 2px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 12px;
             	 color:#000000;
				 background-color: #fff;
             }
             table tr:nth-child(odd) {
             background:#ffffff;
             }
             table tr:nth-child(even) {
             background:#ffffff;
             }

</style>
 
  
  
</head>
<body onLoad="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body">   

<div class="col-sm-2" style="text-align:left;">
<img src="../../assets/img/ntihclog2.png" width="80" height="90">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:15px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:13px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:13px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br> <br> <br>  </br><br>  </br>

        <center> <p style="color:#000; font-weight:bold;font-size:12px;"> REQUEST FOR APPROVAL OF PROCUREMENT</p> </center>

        <hr><p style="color:#000; font-weight:normal;font-size:12px; text-align:center;">PART 1: REQUEST BY USER DEPARTMENT FOR APPROVAL OF PROCUREMENT METHOD</p> </hr>

            <form class="form-horizontal" style="height:auto;">

       <div class="col-xs-12 table-responsive">
           <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th style="text-align:left;">Procurement Reference Number</th>
               </tr>
            <tr>
            </tbody>
          </table>

            <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th>Code of procuring and Disposing Entity</th>
              <th>Supplies / Works / Non-consultancy services</th>
              <th>Financial year</th>
              <th>Sequence number</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><input type="text" name="PDECODE" value="<?php  echo $PDECODE; ?>"  style="width:100%; text-align:center;"></td>

              <td><select class="form-control" name="CATEGORY"id="CATEGORY" style="width:100%; text-align:left;">
                 <option <?php if ($CATEGORY=='SUPPLIES') { echo 'selected="selected"'; } ?> >SUPPLIES</option>
                 <option <?php if ($CATEGORY=='WORKS') { echo 'selected="selected"'; } ?> >WORKS</option>
                 <option <?php if ($CATEGORY=='NON CONSULTANCY SERVICES') { echo 'selected="selected"'; } ?> >NON CONSULTANCY SERVICES</option>
                 </select></td>

              <td><input type="text" name="FINANCIALYEAR" value="<?php  echo $FINANCIALYEAR; ?>" style="width:100%; text-align:center;"></td>

              <td><input type="text" name="SEQUENCENUMBER" value="<?php  echo $SEQUENCENUMBER; ?>" style="width:100%; text-align:center;"></td>
            </tr>
            <tr>
            </tbody>
          </table>
      </div>
      <!-- /.row -->

      <br><br><br><br><br><br>

          <div class="col-xs-12 table-responsive">
           <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th style="text-align:left;">Particulars of Procurement</th>
               </tr>
            <tr>
            </tbody>
            </table>

          <table class="table table-striped">
         <thead>
        <tbody>
        <tr>

        <th>Subject of procurement</th>
        <td><textarea id="wysihtml5" name="SUBJECTOFPROCUREMENT" value="<?php  echo $SUBJECTOFPROCUREMENT; ?>" style="width:100%; text-align:left;"></textarea></td>
        <tr>
        <th>Procurement plan reference</th>
        <td><input type="text" name="PROCUREMENTPLANREF" value="<?php  echo $PROCUREMENTPLANREF; ?>" readonly="readonly" style="width:100%; text-align:left;"></td>
        <tr>

            <th style="text-align:left;">Location for delivery</th>
            <th style="text-align:left;">Date required</th>
            </tr>
            </thead>
            <tbody>
            <tr>
               <td><input type="text" name="LOCATIONFORDELIVERY" value="<?php  echo $LOCATIONFORDELIVERY; ?>"  style="width:100%; text-align:left;"></td>
               <td><input type="date" name="DATEREQUIRED" value="<?php  echo $DATEREQUIRED; ?>" style="width:100%; text-align:left;"></td>
               </tr>
        <tr>
        </tr>
     </tbody>
  </table>
  </div>

  <br><br><br><br><br><br>

  <div class="col-xs-12 table-responsive">
           <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th style="text-align:left;">Details relating to the Procurement</th>
               </tr>
            <tr>
            </tbody>
            </table>

          <table class="table table-striped">
 <table class="table table-striped" id="mytable1">
    <thead>
      <tr>
      <th>*</th>
   <th>DESCRIPTION  (Refer to specifications, terms of reference or scope of work)</th>
   <th>QTY</th>
   <th>UNIT OF MEASURE</th>
   <th>ESTIMATED UNIT COST</th>
   <th>MARKET PRICE</th>
      </tr>
      </thead>
             <tbody >
                                                <?php  $tot = count($desc); $s=0;
                                                 for($s=0;$s<$tot;$s++){ ?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="desc[]" disabled="" type="text" value="<?php  echo $desc[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="qty[]" disabled="" type="numeric" value="<?php  echo $qty[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="uom[]" disabled="" type="text" value="<?php  echo $uom[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="escost[]" disabled="" type="numeric" value="<?php echo $escost[$s]; ?>" class="form-control input-md" style= "width:100%; "/></td>
                                                  <td> <input  name="marktp[]" disabled="" type="numeric" value="<?php echo $marktp[$s]; ?>"  class="form-control input-md" style= "width:100%; "/></td>
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
        <!-- /.col -->
        </div>
      <div class="col-sm-12">
        <div class="col-xs-6">

           </div>

          <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">SUB TOTAL:</th>
                <td><input type="numeric" name="SUBTOTAL" value="<?php  echo $SUBTOTAL; ?>"  style="width:100%; text-align:right;"></td>
              </tr>
              <tr>
                <th>TAX %</th>
                <td><input type="numeric" name="TAX" value="<?php  echo $TAX; ?>" style="width:100%; text-align:right;"></td>
              </tr>
              <tr>
                <th>TOTAL COST</th>
                <td><input type="numeric" name="TOTALCOST" value="<?php  echo $TOTALCOST; ?>" style="width:100%; text-align:right;"></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

       <div class="col-xs-12">
        <div class="col-xs-6">
        <p style="font-weight:bold;">(1) Request for procurement</p>
          <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="RFPUSERNAME" value="<?php  echo $RFPUSERNAME; ?>"  placeholder="Member of user department">
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" value="<?php  echo $RFPSIGNATURE; ?>"  name="RFPSIGNATURE"/>
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="RFPTITLE" value="<?php  echo $RFPTITLE; ?>"  />
                </div>
                </div></div>

                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" name="RFPDATE" value="<?php  echo $RFPDATE; ?>"/>
                </div>
                </div></div>

                 <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;"> </label>
                <div class="col-sm-8">
                <input type="hidden" class="form-control"  name="DEPARTMENT" value="<?php  echo $DEPARTMENT; ?>" />
                </div>
                </div></div>

           </div>

          <div class="col-xs-6">
        <p style="font-weight:bold;">(2) Confirmation of request</p>
          <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="CORNAME" value="<?php  echo $CORNAME; ?>" readonly="readonly">
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="CORSIGNATURE" value="<?php  echo $CORSIGNATURE; ?>" readonly="readonly"/>
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control"  name="CORTITLE" value="<?php  echo $CORTITLE; ?>" readonly="readonly"/>
                </div>
                </div></div>

                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control"  name="CORDATE" value="<?php  echo $CORDATE; ?>" readonly="readonly"  />
                </div>
                </div></div></div>

            <div class="col-sm-12">

            <p style="" >Availability of funds to be confirmed prior to approval by Accounting Officer </p>

           <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th>Vote / head No</th>
              <th>Programme</th>
              <th>Sub-programme</th>
              <th>Item</th>
              <th>Balance remaining</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><input type="text" name="VOTE_HEADNO" value="<?php  echo $VOTE_HEADNO; ?>"  readonly="readonly"  style="width:100%; text-align:left;"></td>

              <td><input type="text" name="PROGRAMME"value="<?php  echo $PROGRAMME; ?>"  readonly="readonly"  style="width:100%; text-align:left;"> </td>

              <td><input type="text" name="SUBPROGRAMME" value="<?php  echo $SUBPROGRAMME; ?>"  readonly="readonly"  style="width:100%; text-align:left;"></td>

              <td><input type="text" name="ITEM" value="<?php  echo $ITEM; ?>"  readonly="readonly" style="width:100%; text-align:left;"></td>

              <td><input type="text" name="BALANCEREMAINING" value="<?php  echo $BALANCEREMAINING; ?>"  readonly="readonly"  style="width:100%; text-align:left;"></td>
            </tr>
            <tr>
            </tbody>
          </table>
          </div>



           <div class="col-xs-6">
        <p style="font-weight:bold;">(3) Confirmation of funding and approval to procure</p>
          <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="AONAME" value="<?php  echo $AONAME; ?>"  placeholder="Accounting Officer" readonly="readonly">
                </div>
                </div></div>


                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control"  name="AOSIGNATURE" value="<?php  echo $AOSIGNATURE; ?>" readonly="readonly"/>
                </div>
                </div></div>

                <div class="box-body">
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control"  name="AOTITLE" value="<?php  echo $AOTITLE; ?>" readonly="readonly"/>
                </div>
                </div></div>

                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" name="AODATE" value="<?php  echo $AODATE; ?>"readonly="readonly" />
                </div>
                </div></div></div>
                
                <div class="col-xs-6">
                <p style="font-weight:bold;">Generic preferred method of procurement</p>
                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">THRESHOLD</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="THRESHOLD" value="<?php  echo $THRESHOLD; ?>" readonly="readonly">
                </div>
                </div></div>
                
                <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">REASON</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="THRESHOLDREASON" value="<?php  echo $THRESHOLDREASON; ?>" readonly="readonly">
                </div>
                </div></div>
                
                </div>
                

                <div class="col-xs-12" >
                <br>
                <p style="font-weight:normal;">NOTE: This is an electronic form, signatory fields are autogenerated in the official processing by the Head of User Department and Accounting Officer.</p>

        </div>
         <div class="col-xs-12"> 
      </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>

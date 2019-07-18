 
<!DOCTYPE html>
<?php
  header("Cache-Control: private, must-revalidate, max-age=0");
  header("Pragma: no-cache");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

 ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="ahr/datatable/css/bootstrap.min.css">
   <link rel="stylesheet" href="ahr/datatable/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="ahr/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="ahr/datatable/css/buttons.dataTables.min.css">

  <script src="ahr/datatable/js/jquery-1.12.3.js"></script>
  <script src="ahr/datatable/js/jquery.dataTables.min.js"></script>
  <script src="ahr/datatable/js/bootstrap.min.js"></script>
  <script src="ahr/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="ahr/datatable/js/dataTables.buttons.min.js"></script>
  <script src="ahr/datatable/js/buttons.flash.min.js"></script>
  <script src="ahr/datatable/js/jszip.min.js"></script>
  <script src="ahr/datatable/js/pdfmake.min.js"></script>
  <script src="ahr/datatable/js/vfs_fonts.js"></script>
  <script src="ahr/datatable/js/buttons.html5.min.js"></script>
  <script src="ahr/datatable/js/buttons.print.min.js"></script>
  <script src="../js/custom.js"></script>

  <script>
  $(document).ready(function() {
     $('#example2').DataTable();
	  $("#NAME").val("");
  $("#TESTDESCRIPTION").val("");
  $("#NTIHCNO").val("");
  $("#REQUESTINGUNIT").val("");
  $("#USERINITIAL").val("");
  } );
  </script>

  <script>
  function postvalues(tis){
  $("#tempaction").html('');
  var dsx = tis.split("__");
  $("#NAME").val(dsx[0]);
  $("#TESTDESCRIPTION").val(dsx[1]);
  $("#NTIHCNO").val(dsx[2]);
  $("#REQUESTINGUNIT").val(dsx[3]);
  $("#USERINITIAL").val(dsx[4]);
  $("#IDFX").val(dsx[5]);


    $.post("processtemp.php", {NTIHCNO: dsx[2]}, function(result){
        var obj = JSON.parse(result);
            console.log(obj.NTIHCNO);
            var table = document.getElementById('mytable');
            var rowCount = table.rows.length;
for (var iI = 1; iI < rowCount; iI++) {
     var row = table.rows[iI];
      row.cells[0].childNodes[0].checked = true;
}
       deleteRow12('mytable');
     if (obj.SPECIMEN==null) {}
     else {
       for (var i = 0; i < obj.SPECIMEN.length; i++) {

       var row1= '<td><input type="checkbox"></td>'+
                 '<td> <input type="text"  name=sp[] value="'+obj.SPECIMEN[i]+'" /> </td>'+
                 '<td> <input type="text"  name=he[] value="'+obj.HEAMATOLOGY_SCROLOGY[i]+'" /></td>'+
                 '<td> <input type="text"  name=ma[] value="'+obj.MALARIA[i]+'" /></td>'+
                 '<td> <input type="text"  name=st[] value="'+obj.STOOL_MICROSCOPY[i]+'" /></td>'+
                 '<td> <input type="text"  name=ur[] value="'+obj.URINE_MICROSCOPY[i]+'" /></td>'+
                 '<td> <input type="text"  name=sw[] value="'+obj.SWABS_TYPE[i]+'" /></td>'+
                 '<td> <input type="text"  name=swa[] value="'+obj.SWABS_WETPREP[i]+'" /></td>'+
                 '<td> <input type="text"  name=swab[] value="'+obj.SWABS_GRAMSTAIN[i]+'" /></td>';
          table = document.getElementById('mytable');
       rowCount = table.rows.length;
        var row2 = table.insertRow(rowCount);
            row2.innerHTML = row1;

            }
          }
$("#TECHNICIAN_NAME").val(obj.TECHNICIAN_NAME);
$("#TITLE").val(obj.TITLE);
$("#EXPIRYDATET1").val(obj.EXPIRYDATET1);
$("#EXPIRYDATET2").val(obj.EXPIRYDATET2);
$("#EXPIRYDATET3").val(obj.EXPIRYDATET3);
$("#REACTIVITYT1").val(obj.REACTIVITYT1);
$("#REACTIVITYT2").val(obj.REACTIVITYT2);
$("#REACTIVITYT3").val(obj.REACTIVITYT3);
$("#FINALREACTIVITY").val(obj.FINALREACTIVITY);
$("#HEPATITIS_B").val(obj.HEPATITIS_B);
$("#SYPHILIS").val(obj.SYPHILIS);
$("#HB").val(obj.HB);
$("#RBS").val(obj.RBS);
$("#BLOOD").val(obj.BLOOD);
$("#BLOODRESULTS").val(obj.BLOODRESULTS);
$("#HCG").val(obj.HCG);
$("#MALARIARDTs").val(obj.MALARIARDTs);
$("#MALARIAMICROSCOPY").val(obj.MALARIAMICROSCOPY);
$("#OTHERHEAMOPATRASITES").val(obj.OTHERHEAMOPATRASITES);
$("#CYSTECELLS").val(obj.CYSTECELLS);
$("#PROTEINS").val(obj.PROTEINS);
      });

  }

  function temporary(){
   $("#tempaction").html('<input type="hidden" name="mytempvar" value="hkato" />');
   $("#myform").submit();
  }
  </script>


  <script>
  function myFunction() {
      var itm = document.getElementById("someid");
      var cln = itm.cloneNode(true);
      var dstr=''+ cln;
      document.getElementById("someid").appendChild(cln);
      console.log(cln);
  }
  </script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [


		{extend :'pdf',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>


  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [


		{extend :'pdf',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
    padding: 8px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

	  {
                 border-bottom: 2px solid #000;
                 color:#000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid #000;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 10px;
             	 color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
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
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
             background:#fff;
             }

</style>

<!--  <meta http-equiv="refresh" content="10" > -->
</head>
<body style="background-color:#ffffc6;">
<?php include('ahr/datatable/headerlab.php'); ?>
<left>
  <br /><br /><br /><br />

  <p style="text-align:center; font-size:22px; color:#fff; background-color:green;">NTIHC-LABORATORY</p>
  <div class="col-lg-12">

  <div class="col-lg-3">
  <div class="col-lg-15" style="background-color:#fb455f; height:60px; border:2px solid; border-radius:11px;">
  <p style="text-align:center; color:#000; font-weight:bold;">Incoming lab rqts</p>
  <p style="text-align:center; color:#fff; font-weight:bold; font-size:20px; margin-top:-14px;">
   <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, NTIHCNO FROM laboratory WHERE TIMESTAMP >='$date' AND TESTSTATUS ='NOT STARTED' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  </p>
  </div>

  <div class="col-lg-15" >
  <div class="panel-body" style="background-color:green; height:60px; border:2px solid; border-radius:11px;">
  <p style="text-align:center; color:#fff; font-weight:bold;">Pending </p>
   <p style="text-align:center; color:#fff; font-weight:bold; font-size:20px; margin-top:-14px;">
    <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, NTIHCNO FROM laboratory WHERE TIMESTAMP >='$date' AND TESTSTATUS ='PENDING' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  </p>
  </div></div>

  <div class="col-lg-15" >
  <div class="panel-body" style="background-color:#fb455f; height:60px; border:2px solid; border-radius:11px;">
  <p style="text-align:center; color:#000; font-weight:bold;">Completed </p>
   <p style="text-align:center; color:#fff; font-weight:bold; font-size:20px; margin-top:-14px;">
   <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, NTIHCNO FROM laboratory WHERE TIMESTAMP >='$date' AND TESTSTATUS ='COMPLETED' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  </p>
  </div>
  </div>
  <br> <br> <br> <br>
  <p style="text-align:left; color:#000; font-weight:bold;">
  <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center;">
		Incoming lab orders due for attention <span class="sr-only">60% Complete</span>
		</div>
	    </div>
         </p>
   <div id="work" style="width:100%;">

 <table id="example" class="table table-striped table-bordered"  style="font-size:90%; font-weight:normal;" cellspacing="0" width="100%">
        <thead>
          <tr>
     <th>No</th>
              <th>NAME</th>
              <th>TEST DESC</th>
              <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th>
              <th>NAME</th>
              <th>TEST DESC</th>
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php
require('ahr/php/configpatientmgtdb.php');
$date = date("Y-m-d").' 00:00:00';
$sql = "SELECT * FROM laboratory WHERE TESTSTATUS='NOT STARTED' AND TIMESTAMP >='$date' ";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
 $vx = $row['NAME']."__".$row['TESTDESCRIPTION']."__".$row['NTIHCNO']."__".$row['REQUESTINGUNIT']."__".$row['USERINITIAL']."__".$row['id'];
  echo'<tr>'.
       '<td>'.$x.'</td>'.
	      '<td>'.$row['NAME'].'</td>'.
		     '<td>'.$row['TESTDESCRIPTION'].'</td>'.
		     '<td><input type="button" id="'.$vx.'" onclick="postvalues(this.id)" value="POST"></td>'.
   '</tr>';
$x=$x+1;

 }

 ?>

	  </tbody>
  </table>

   <br>
   <p style="text-align:left; color:#000; font-weight:bold;">
    <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%; text-align:center;">
		Search Client Lab Test History by NTIHC NO. / Name<span class="sr-only">60% Complete</span>
		</div>
	    </div>
         </p>

   <div id="work" style="width:100%;">

    <table id="example1" class="table table-striped table-bordered"  style="font-size:90%; font-weight:normal; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No</th>
              <th>NTIHC NO.</th>
              <th>NAME</th>
              <th>DISP</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th>
              <th>NTIHC NO.</th>
              <th>NAME</th>
              <th>DISP</th>
            </tr>
        </tfoot>
        <tbody>
<?php
require('ahr/php/configpatientmgtdb.php');

$sql = "SELECT * FROM laboratory ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.
		'<td>'.$row['NTIHCNO'].'</td>'.
	      '<td>'.$row['NAME'].'</td>'.
		     '<td><input type="button" id="'.$row['id'].'" onclick="redirect5(this.id)" value="VIEW"></td>'.
   '</tr>';
$x=$x+1;

 }
 ?>
	  </tbody>
  </table>
      </div>
  </div> </div>


  <div class="col-lg-14" style="border:2px solid grey; height: auto;border-radius:11px; background-color:#fff;">
<div class="col-lg-12">
<div class="col-lg-1">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-lg-9">
<p style="text-align:center; font-size:15px; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:13px; ">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; ">Tel: 0393-216-467</p>
<p style="text-align:center; font-size:12px; ">	LAB REQUEST</p>
</div>
</div>
<div class="col-lg-12">
<form id="myform" action="laboratory_process.php" method="post">
<p style="border:1px solid;"> </p>
<input type="hidden" id="IDFX" name="IDFX" value="">
   <div class="col-lg-6">
    <div class="form-group">
                    <label class="control-label col-lg-5">Test date </label>
                    <div class="col-lg-7">
                     <input type="text" name="TESTDATE" sid="TESTDATE" value="<?php echo date('Y-m-d'); ?>" class="form-control"
					 style="text-transform:uppercase; text-align:left; background-color:#fff;">

                </div>
               </div>

       <label class="control-label col-lg-5">NTIHC Number </label>
                    <div class="col-lg-7">
                    <input type="text" name="NTIHCNO" id="NTIHCNO" required="required" class="form-control" readonly style="text-transform:uppercase; background-color:#fff;">
                        <input type="hidden" id="RID" name="RID">
                    </div>


         <label class="control-label col-lg-5">Client name </label>
                    <div class="col-lg-7">
                    <input type="text" name="NAME" id="NAME"  class="form-control" readonly style="text-transform:uppercase; background-color:#fff;">
                    </div>
                </div>

    <div class="col-lg-6">
    <div class="form-group">
                    <label class="control-label col-lg-5">Requesting unit </label>
                    <div class="col-lg-7">
                     <input type="text" name="REQUESTINGUNIT"  id="REQUESTINGUNIT"  class="form-control" readonly style="text-transform:uppercase; text-align:left; background-color:#fff;">

                  </div>

                   <label class="control-label col-lg-5">Initiated by </label>
                    <div class="col-lg-7">
                     <input type="text" name="USERINITIAL"  id="USERINITIAL"  class="form-control" readonly style="text-transform:uppercase; text-align:left; background-color:#fff;">

                  </div>

                   <label class="control-label col-lg-5">Required test(s) </label>
                    <div class="col-lg-7">
                     <input type="text" name="TESTDESCRIPTION"  id="TESTDESCRIPTION"  class="form-control" readonly style="text-transform:uppercase; text-align:left; background-color:#fff;">

                  </div>
                </div>
               </div>

   <div class="col-lg-12">
   <br>
                             <div class="row">
                             <input type="button" onClick="addRow12('mytable')" value="Add test" class="btn btn-success">
        <input type="button" onClick="deleteRow12('mytable')" value="Remove" class="btn btn-danger">
        <input type="hidden" id="mytable_rows" name="mytable_rows" value="0">
        </p>
          <table class="table table-striped" id="mytable" style=" color:#000000; height:auto;">
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
          <tbody id="my_rows_bo">

          </tbody>
         </table>

   <br>
   <div class="col-lg-12">

   <div class="col-lg-6">
                <!-- /.form-group -->
                    <div class="form-group">
                    <label class="control-label col-lg-5">Technician</label>
                    <div class="col-lg-7">
                    <input type="text"  name="TECHNICIAN_NAME" id="TECHNICIAN_NAME" value="<?php echo $nameofuser; ?>" readonly class="form-control"
                    style="background-color:#fff;">
                    </div>
                    </div>
                <!-- /.form-group -->

                    <div class="form-group">
                    <label class="control-label col-lg-5">Title</label>
                    <div class="col-lg-7">
                    <input type="text"  name="TITLE" id="TITLE" value="<?php echo $desc; ?> " readonly class="form-control"
                    style="background-color:#fff;">
                    </div>
                    </div>
                <!-- /.form-group -->
                <br> <br> <br><br>

     <p style="text-align:left;font-weight:bold; font-size:12px;"> Summary of tests </p>
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>HIV: |HIV|</th>
         <th>Hepatitis B: |Hep.B|</th>
         <th>Syphilis: |Syp.|</th>
         <th>Hb: |Hb|</th>
         <th>RBS: |RBS|</th>
         </thead>

         <thead>
         <th>Blood: |BD|</th>
         <th>HCG: |HCG|</th>
         <th>Malaria: |MPs.|</th>
         <th>Urine analysis: |UA.|</th>
         </thead>
    <tbody>
  </table>


    <br>
   <p style="text-align:left;font-weight:bold; font-size:12px;"> Result 1: HIV</p>
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>|HIV|</th>
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
        <td><input type="text" name="LOTNOT1"  id="LOTNOT1"placeholder="1" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="LOTNOT2"  id="LOTNOT2"placeholder="2" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="LOTNOT3"  id="LOTNOT3"placeholder="3" style="width:100%; text-align:center;"></td>
        </tr>

         <tr>
         <th>Expiry date</th>
        <td><input type="text" name="EXPIRYDATET1" id="datepicker" value="<?php echo date('d-m-y'); ?>" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="EXPIRYDATET2" id="datepicker" value="<?php echo date('d-m-y'); ?>" style="width:100%; text-align:center;"></td>
        <td><input type="text" name="EXPIRYDATET3" id="datepicker" value="<?php echo date('d-m-y'); ?>" style="width:100%; text-align:center;"></td>
     </tr>
    <tr>

    <tr>
        <th>Reactivity</th>
        <td><select class="form-control" name="REACTIVITYT1" id="REACTIVITYT1"  style="width:100%; text-align:center;">
                                <option value="N/A"> N/A </option>
                                <option>NR</option>
                                <option>R</option>
                                <option>INV</option>
                                <option>NT</option>
                                </select>
                                </td>
        <td><select class="form-control" id="REACTIVITYT2" name="REACTIVITYT2" style="width:100%; text-align:center;">
                                <option value="N/A"> N/A </option>
                                <option>NR</option>
                                <option>R</option>
                                <option>INV</option>
                                <option>NT</option>
                                </select>
                                </td>
        <td><select class="form-control" id="REACTIVITYT3" name="REACTIVITYT3" style="width:100%; text-align:center;">
                                <option value="N/A"> N/A </option>
                                <option>NR</option>
                                <option>R</option>
                                <option>INV</option>
                                <option>NT</option>
                                </select>
                                </td>
     </tr>
        </tr>
     </tbody>
  </table>


    <div class="form-group">
                    <label class="control-label col-lg-5">Final reactivity (HIV results)</label>
                    <div class="col-lg-7">
                    <select class="form-control" name="FINALREACTIVITY"  id="FINALREACTIVITY"
                    style="text-transform:uppercase; text-align:center; background-color:#fff;">
                    <option value="N/A">N/A<option>
                                <option>NEGATIVE</option>
                                <option>POSITIVE</option>
								<option>INV</option>
								<option>INDETERMINATE</option>
                </select>

                  </div>
                </div>
                <!-- /.form-group -->

                 <div class="col-lg-12" style="border:2px solid #f0f0f0;">
                 <div class="col-lg-6">
   <p style="text-align:left;font-weight:bold; font-size:12px;"> Result 2: Hepatitis B</p>
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>|HE_B|</th>
         </thead>
         <thead>
         <td><select class="form-control" name="HEPATITIS_B" id="HEPATITIS_B"  style="width:100%; text-align:center;">
                                <option value="N/A"> N/A </option>
                                <option>NEGATIVE</option>
                                <option>POSITIVE</option>
                                </select>
                                </td>
         </thead>
    <tbody>
    </table>
    <!-- /.form-group -->
    </div>

     <div class="col-lg-6">
    <p style="text-align:left;font-weight:bold; font-size:12px;"> Result 3: Syphilis</p>
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>|SY|</th>
         </thead>
         <thead>
         <td><select class="form-control" name="SYPHILIS" id="SYPHILIS"  style="width:100%; text-align:center;">
                                <option value="N/A"> N/A </option>
                                <option>NEGATIVE</option>
                                <option>POSITIVE</option>
                                </select>
                                </td>
         </thead>
    <tbody>
    </table>
    <!-- /.form-group -->

    </div> </div>

                 </div>

   <div class="col-lg-6">
     <div class="col-lg-6">
   <p style="text-align:left;font-weight:bold; font-size:12px;"> Result 4: Hb</p>
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>|Hb| (g/d)</th>
         </thead>
         <thead>
         <td><input type="alphanumeric" class="form-control" name="HB" id="HB"  placeholder="N/A" style="width:100%; text-align:center;">
                                </td>
         </thead>
    <tbody>
    </table>
    <!-- /.form-group -->
    </div>

    <div class="col-lg-6">
    <p style="text-align:left;font-weight:bold; font-size:12px;"> Result 5: RBS</p>
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>|RBS|</th>
         </thead>
         <thead>
         <td><input type="alphanumeric" class="form-control" name="RBS" id="RBS"  placeholder="N/A" style="width:100%; text-align:center;">
                                </td>
         </thead>
    <tbody>
    </table>
    <!-- /.form-group -->

    </div>

       <div class="col-lg-6">
   <p style="text-align:left;font-weight:bold; font-size:12px;"> Result 6: Blood</p>
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>|BD|(group)</th>
         <th>Results</th>
         </thead>
         <thead>
         <td><select class="form-control" name="BLOOD" id="BLOOD"  style="width:100%; text-align:center;">
                                <option value="N/A">N/A</option>
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>O</option>
                                </select>
                                </td>

        <td><select class="form-control" name="BLOODRESULTS" id="BLOODRESULTS" style="width:100%; text-align:center;">
                                <option value="N/A"> N/A</option>
                                <option>POSITIVE</option>
                                <option>NEGATIVE</option>
                                </select>
                                </td>

         </thead>
    <tbody>
    </table>
    <!-- /.form-group -->
    </div>

    <div class="col-lg-6">
    <p style="text-align:left;font-weight:bold; font-size:12px;"> Result 7: HCG</p>
   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>|HCG|</th>
         </thead>
         <thead>
         <td><select class="form-control" name="HCG" id="HCG" style="width:100%; text-align:center;">
                                <option value="N/A">N/A </option>
                                <option>POSITIVE</option>
                                <option>NEGATIVE</option>
                                </select>
                                </td>
         </thead>
    <tbody>
    </table>
    <!-- /.form-group -->

    </div>
     <div class="panel-body">
    <p style="text-align:left;font-weight:bold; font-size:12px;"> Result 8: Malaria</p>

   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>|MA|</th>
         </thead>

         <thead>
         <th>Malaria RDTs</th>
         <th>Malaria microscopy</th>
         <th>Other heamopatrasites</th>
         </thead>
    <tbody>
      <tr>
      <td><select class="form-control" name="MALARIARDT" id="MALARIARDT"  style="width:100%; text-align:center;">
                                <option value="N/A">N/A </option>
                                <option>POSITIVE</option>
                                <option>NEGATIVE</option>
                                </select>
                                </td>

      <td><input type="alphanumeric" name="MALARIAMICROSCOPY"  id="MALARIAMICROSCOPY" PLACEHOLDER="N/A" style="width:100%; text-align:center;">
       <select class="form-control" name="MICROSCOPY_MEASURE" id="MICROSCOPY_MEASURE"  style="width:100%; text-align:center;">
                                <option value="N/A">N/A </option>
                                <option>PHF</option>
                                <option>PHPF</option>
                                </select>
                                </td>
       <td><input type="text" class="form-control" name="OTHERHEAMOPATRASITES" id="OTHERHEAMOPATRASITES"  value="N/A" style="width:100%; text-align:center;">
                                </td>

     </tr>
        </tr>
     </tbody>
  </table>

  <p style="text-align:left;font-weight:bold; font-size:12px;"> Result 9: Urine analysis</p>

   <table class="table table-bordered" style="margin-left:0px; background-color: #fff;">
         <thead>
         <th>|UA|</th>
         </thead>

         <thead>
         <th>Cystecells</th>
         <th>Proteins</th>
         </thead>
    <tbody>
      <tr>
      <td><select class="form-control" name="CYSTECELLS" id="CYSTECELLS"  style="width:100%; text-align:center;">
                                <option value="N/A"> N/A</option>
                                <option>POSITIVE</option>
                                <option>NEGATIVE</option>
                                </select>
                                </td>

       <td><select class="form-control" name="PROTEINS" id="PROTEINS" style="width:100%; text-align:center;">
                                <option value="N/A"> N/A</option>
                                <option>TRACE POSITIVE</option>
                                <option>NEGATIVE TRACE</option>
                                </select>
                                </td>

     </tr>
        </tr>
     </tbody>
  </table>

       <div id="tempaction" > </div>

   

   <div class="col-lg-12">
  <Center><input type="submit" name="button" id="button" value="Submit test" class="btn btn-success" /></Center>
  </div>
                <br> <br> <br> <br> <br>
                 </form>



    </div>
    </div> </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <br> <br>

</div>
    </div>

         <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
<br> <br> <br>
                <p style="text-align:center;">2016 &copy; Naguru Teenage Information asnd Health Centre</p>
            </footer>

     <script>
  function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var select = '<select name="sp[]'+'"'+
              ' style= "margin-left:0px; font-size: 12px; background-color:#fff" >'+
                                         '<option value="-1"> </option>'+
                        '<option>BLOOD</option>'+
						'<option>URINE</option>'+
						'<option>STOOL</option>'+
						'<option>SALIVA</option>'+
						'<option>CSF</option>'+
						'</select>';

     var s2   =  '<select required="required"  name="he[]'+'"'+
                 'style= "margin-left: 0px; font-size: 12px; background-color:#fff;" >'+
             		        '<option value="-1"> </option>'+
							'<option>HIV TEST </option>'+
						    '<option>Hb </option>'+
                            '<option>WBCT</option>'+
             				'<option>SYPHILIS TEST</option>'+
							'<option>BLOOD GROUPING</option>'+
                    '</select>';

	var s3  =  '<select required="required"  name="ma[]'+'"'+
                 'style= "margin-left: 0px; font-size: 12px; background-color:#fff;" >'+
             		        '<option value="-1"> </option>'+
						    '<option>MALARIA MICROSCOPY </option>'+
                            '<option>MALARIA RDTs</option>'+
             				'<option>OTHER HEAMOPATRASITES</option>'+
                    '</select>';

	var s4  =  '<select required="required"  name="st[]'+'"'+
                 'style= "margin-left: 0px; font-size: 12px; background-color:#fff;" >'+
             		        '<option value="-1"> </option>'+
						    '<option>MACRO </option>'+
                            '<option>MICRO</option>'+
                    '</select>';

	 var s5   =  '<select required="required"  name="ur[]'+'"'+
                 'style= "margin-left: 0px; font-size: 12px; background-color:#fff;" >'+
             		        '<option value="-1"> </option>'+
						    '<option>MACROSCOPY </option>'+
                            '<option>MICROSCOPY</option>'+
             				'<option>PROTEIN</option>'+
							'<option>SUGAR</option>'+
             				'<option>PREGNANCY</option>'+
                    '</select>';

	var s6  =  '<select required="required"  name="sw[]'+'"'+
                 'style= "margin-left: 0px; font-size: 12px; background-color:#fff;" >'+
             		        '<option value="-1"> </option>'+
						    '<option>VIGINAL </option>'+
                            '<option>ORAL</option>'+
							'<option>PENILE</option>'+
                    '</select>';

	var s7 =  '<select required="required"  name="swa[]'+'"'+
                 'style= "margin-left: 0px; font-size: 12px; background-color:#fff;" >'+
             		        '<option value="-1"> </option>'+
						    '<option>VIGINAL </option>'+
                            '<option>ORAL</option>'+
							'<option>PENILE</option>'+
                    '</select>';

	var s8 =  '<select required="required"  name="swab[]'+'"'+
                 'style= "margin-left: 0px; font-size: 12px; background-color:#fff;" >'+
             		        '<option value="-1"> </option>'+
						    '<option>POSITIVE </option>'+
                            '<option>NEGATIVE</option>'+
                    '</select>';


     var row1= '<td><input type="checkbox"></td>'+
               '<td>'+select+' </td>'+
			   '<td>'+s2+'</td>'+
			   '<td>'+s3+'</td>'+
			   '<td>'+s4+'</td>'+
			   '<td>'+s5+'</td>'+
               '<td>'+s6+'</td>'+
			   '<td>'+s7+'</td>'+
               '<td>'+s8+'</td>';

      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows').value=rowCount;

  }

  function deleteRow12(tableID) {
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
           document.getElementById('mytable_rows').value=rowCount-1;
}

  </script>


    </body>
  </html>

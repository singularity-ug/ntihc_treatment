 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

  <script src="../datatable/js/jquery-1.12.3.js"></script>
  <script src="../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../datatable/js/bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../datatable/js/buttons.flash.min.js"></script>
  <script src="../datatable/js/jszip.min.js"></script>
  <script src="../datatable/js/pdfmake.min.js"></script>
  <script src="../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
  <script src="../datatable/js/buttons.print.min.js"></script>


<script src="an_c/js/jquery.min.js"></script>
<script src="an_c/js/jquery.ui.custom.js"></script>
<script src="an_c/js/bootstrap.min.js"></script>
<script src="an_c/js/jquery.validate.js"></script>
<script src="an_c/js/jquery.wizard.js"></script>
<script src="an_c/js/matrix.js"></script>
<script src="an_c/js/matrix.wizard.js"></script>

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SUBPROGRAMME"+num).val(data[2]);
  $("#VOTE_HEADNO").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BALANCEREMAINING").val(data[5]);
  $("#FINANCIALYEAR").val(data[6]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../budget/budgetlinesearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 7,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength":3,
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
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#exdelivx').DataTable( {
	  "iDisplayLength": 20,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#exrecivbs').DataTable( {
	  "iDisplayLength": 20,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>


 <script>
  $(document).ready(function() {
     $('#exdynam').DataTable( {
	  "iDisplayLength": 20,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#exdons').DataTable( {
	  "iDisplayLength": 20,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#example11').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>



    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>

<?php
  $id = $_GET['q'];

  $NTIHCNO = '';
  $PHONECONTACT = '';
  $AGE = '';
  $SCHOOLINGSTATUS = '';

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $AGE = $row['AGE'];
	 $PHONECONTACT  = $row['PHONECONTACT'];
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
      }
  ?>


<?php
  $id = $_GET['q'];

  $NTIHCNO = '';
  $CLIENTNAME  = '';
  $AGE_GROUP = '';
  $AGE1  = '';
  $SERVICE_EPISODE = '';
  $SEX = '';

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $CLIENTNAME = $row['CLIENTNAME'];
     $AGE_GROUP = $row['AGE_GROUP'];
	 $AGE1 = $row['AGE1'];
	 $SERVICE_EPISODE = $row['SERVICE_EPISODE'];
     $SEX  = $row['SEX'];
      }
  ?>


</head>

       
                  <!-- Info boxes -->

    <div class="widget-box">
          <div class="widget-title" > <span class="icon"> <i class="icon-pencil"></i> </span>
          </div>
          <div class="widget-content nopadding" style="background-color:#fff;" >

          <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border" style="text-align: center; color:#000; font-size:10px;">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                     EXISTING CLIENTS
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">  
                     
                 <center><a href=<button class="btn btn-success" data-toggle="modal" data-target="#newrecord"</button> View / Update</b>
                                &nbsp;<?php  echo $NTIHCNO; ?>  <i class=" "></i></a></center>

                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border" style="text-align: center; color:#000;font-size:10px;">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    PREVIOUS OBSTETRIC HISTORY    &nbsp; &nbsp;| &nbsp; PROGRESS EXAMINATION
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">

                       <p style="text-align:center; font-weight:bold;"> PREVIOUS OBSTETRIC HISTORY</p>



  <?php
  $id = $_GET['q']; 
  $NTIHCNO = '';
  $AGE_GROUP = '';
  $CLIENTNAME = '';
  $SCHOOLINGSTATUS = '';
  $HEALTHUNIT = ''; 
  $REGNO = '';
  $PHONECONTACT = '';
  $SERIALNO = '';  

  $maa = array();
  $mbb = array();
  $mcc = array();
  $mdd = array();
  $mee = array();
  $mff = array();
  $mgg = array();
  $mhh = array();
  $mii = array();
  $mjj = array();
  $mkk = array();
  $mll = array();
  $mmm = array();
  $mnn = array();
  $moo = array();  

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM antenatal_obstetric  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO']; 
     $AGE_GROUP = $row['AGE_GROUP'];
	 $CLIENTNAME  = $row['CLIENTNAME'];
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
	 $HEALTHUNIT  = $row['HEALTHUNIT'];
	 $REGNO  = $row['REGNO'];
	 $PHONECONTACT  = $row['PHONECONTACT']; 
	 $SERIALNO  = $row['SERIALNO'];
     $id  = $row['id'];                     
	 $maa[] = $row['PRREGNANCY'];
     $mbb[]    = $row['YEAROFPREG'];
	 $mcc[] = $row['BELOW12WEEKS'];
     $mdd[]       = $row['ABOVE12WEEKS'];
	 $mee[]    = $row['PREMATURE'];
	 $mff[]       = $row['FULL'];
	 $mgg[]       = $row['PLACEOFDELIVERY'];
	 $mhh[]       = $row['TYPEOFDELIVERY'];
	 $mii[]        = $row['THIRDSTAGE'];
	 $mjj[]        = $row['PUERPERLUM'];
     $mkk[]       = $row['ALIVESB'];
	 $mll[]       = $row['CHILDSEX'];
	 $mmm[]       = $row['BIRTHWEIGHT'];
	 $mnn[]       = $row['IMMUN'];
	 $moo[]       = $row['HEALTHCONDITION']; 
      }
  ?>
                        <table class="table table-bordered" style="background-color:#ffffff;">
   <thead>
   <tr>
   <th style="width:2%;">    </th>
   <th style="width:8%;"> </th>
   <th style="width:9.9%; text-align:center;font-weight:bold;">ABORTIONS</th>
   <th style="width:45.9%;text-align:center;font-weight:bold;">TYPES OF DELIVERY </th>
   <th style="width:35%;font-weight:bold;"> CHILD</th>
   </tr>
   </thead>
 </tbody>
 </table> 

          <table class="table table-table table-tabled" id="mytable2" style="font-weight:normal; margin-top:0px; ">
       <thead>
      <tr> 
   <th  style="width:4%;">Preg nancy</th>
   <th  style="width:4%;">Year</th>
   <th  style="width:5%;">Below 12 wks</th>
   <th  style="width:5%;">Above 12 wks </th>
   <th  style="width:4%;">Prema ture</th>
   <th  style="width:4%;">Full</th>
   <th  style="width:15%;">Place of delivery</th>
   <th  style="width:15%;">Type of delivery</th>
   <th  style="width:4%;">Third stage</th>
   <th  style="width:5%;">Puer perlum</th>
   <th  style="width:5%;">Alive SB/NND</th>
   <th  style="width:5%;">Sex </th>
   <th  style="width:5%;">Birth weight</th>
   <th  style="width:5%;">Immun</th>
   <th  style="width:15%;">Health condition</th>
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($maa); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){
                                                             $totals += intval($moo[$s]);?>
                                                            <tr > 
                                                            
                                                  <td> <input  name="maa[]" readonly="" type="text" value="<?php  echo $maa[$s]; ?>"
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mbb[]" readonly="" type="text" value="<?php  echo $mbb[$s]; ?>"   class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;  border:0px;"/></td>


                                                     <td> <input  name="mcc[]" type="numeric" value="<?php echo $mcc[$s]; ?>"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mdd[]" type="numeric" value="<?php echo $mdd[$s]; ?>"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>


                                                  <td> <input  name="mee[]" type="numeric" value="<?php echo $mee[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mff[]" type="numeric" value="<?php echo $mff[$s]; ?>"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="mgg[]" type="numeric" value="<?php echo $mgg[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="mhh[]" type="numeric" value="<?php echo $mhh[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                   <td> <input  name="mii[]" type="text" value="<?php echo $mii[$s]; ?>"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px; "/></td>

                                                   <td> <input  name="mjj[]" readonly="" type="text" value="<?php echo $mjj[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fcfdfe; border:0px;"/></td>


                                                   <td> <input  name="mkk[]" type="numeric" value="<?php echo $mkk[$s]; ?>" required="" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mll[]" type="numeric" value="<?php echo $mll[$s]; ?>"  readonly="" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>


                                                  <td> <input  name="mmm[]" type="numeric" value="<?php echo $mmm[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mnn[]" type="numeric" value="<?php echo $mnn[$s]; ?>"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="moo[]" type="numeric" value="<?php echo $moo[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table> 
                               <br>
                               <center><a href=<button class="small-box-footer" data-toggle="modal" data-target="#obstetric" 
                               style="border:2px solid #000; border-radius:3px; background-color:;"><b>Add obstetric for</b>
                                &nbsp;<?php  echo $NTIHCNO; ?>  <i class=" "></i></a><center>

     </form>

       
                        <BR>
                        <p style="text-align:center; font-weight:bold;"> ANTENATAL PROGRESS EXAMINATION</p>

 <?php
  $id = $_GET['q'];

  $NTIHCNO = '';
  $DATECREATED = ''; 
  $SCHOOLINGSTATUS = '';
  $HEALTHUNIT = '';  
  $SERIALNO = '';
  $PHONECONTACT = '';
  $CLIENTNAME = '';

  $dnx = array();
  $fqx = array();
  $qtyrecieved = array();
  $tmx = array();
  $variance = array();
  $batch = array();
  $expdet = array();
  $remdrt = array();
  $lcn = array();
  $ma = array();
  $mb = array();
  $mc = array();
  $md = array();
  $me = array();
  $mf = array();
  $mg = array();
  $mh = array();
  $pdx = array();

  $qtyx = array();

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM anteprogress  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $DATECREATED = $row['DATECREATED'];
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
	 $HEALTHUNIT  = $row['HEALTHUNIT']; 
	 $SERIALNO  = $row['SERIALNO']; 
	 $CLIENTNAME  = $row['CLIENTNAME'];
     $PHONECONTACT = $row['PHONECONTACT'];

	 $dnx[] = $row['VISTDATE'];
     $fqx[]    = $row['WEEKSOFAMENOE'];
	 $qtyrecieved[] = $row['FUNDALHEIGHT'];
     $tmx[]       = $row['PRESENTATION'];
	 $variance[]    = $row['POSITIONLIE'];
	 $batch[]       = $row['RELATIONPP'];
	 $expdet[]       = $row['FOETALHEART'];
	 $remdrt[]        = $row['PROGRESSWEIGHT'];
	 $lcn[]        = $row['PROGRESSBP'];
     $pdx[]       = $row['VARICOSEOEDEMA'];
	 $ma[]       = $row['URINE'];
	 $mb[]       = $row['TT'];
	 $mc[]       = $row['IRONFOLIC'];
	 $md[]       = $row['MEBENDAZOLE'];
	 $me[]       = $row['IPT'];
	 $mf[]       = $row['NETUSE'];
	 $mg[]       = $row['COMPLAITS'];
	 $mh[]       = $row['RETURNDATE'];
	 $qtyx[]        = $row['NAMEOFEXAMINER'];


      }
  ?>
     <table class="table table-table table-tabled" id="mytable2" style="font-weight:normal; margin-top:0px; ">
       <thead>
      <tr>
   <th style="width:8%; ">Date </th>
   <th style="width:5%; text-align:center; border:opx;">Weeks.of Amenorr hoea</th>
   <th style="width:5%; border:opx;">Fundal height</th>
   <th style="width:5%; text-align:center;  border:opx;">Presen tation</th>
   <th style="width:4%; text-align:center; border:opx;">Position lie</th>
   <th style="width:5%; border:opx;">Relation PP/Brim </th>
   <th style="width:4%; text-align:center;border:opx;">Foetal heart</th>
   <th style="width:4%; border:opx;">Weight</th>
   <th style="width:5%; text-align:center;border:opx;">BP</th>
   <th style="width:5%; text-align:center;  border:opx;">Varicose/ oedema</th>
   <th style="width:4%; text-align:center; border:opx;">Urine</th>
   <th style="width:4%; border:opx;">TT</th>
   <th style="width:4%; text-align:center;border:opx;">Iron / folic</th>
   <th style="width:4;  text-align:center;border:opx;">Mebenda zole</th>
   <th style="width:4%; border:opx;">IPT </th>
   <th style="width:4%; border:opx;">Net use </th>
   <th style="width:10%;  border:opx;text-align:center;">Complaits and remarks</th>
   <th style="width:10%;  border:opx;">Return date</th>
   <th style="width:10%;   text-align:center;border:opx;">Name of examiner</th>

      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr >

                                                  <td> <?php  echo $dnx[$s]; ?> </td>

                                                  <td><?php  echo $fqx[$s]; ?> </td> 

                                                     <td> <?php echo $qtyrecieved[$s]; ?> </td>

                                                  <td>  <?php echo $tmx[$s]; ?> </td>


                                                  <td>  <?php echo $variance[$s]; ?> </td>

                                                  <td>  <?php echo $batch[$s]; ?> </td>


                                                  <td>  <?php echo $expdet[$s]; ?> </td>

                                                  <td>  <?php echo $remdrt[$s]; ?> </td>

                                                   <td>  <?php echo $lcn[$s]; ?> </td>

                                                   <td>  <?php echo $pdx[$s]; ?> </td>
 
                                                   <td>  <?php echo $ma[$s]; ?> </td>

                                                  <td>  <?php echo $mb[$s]; ?> </td> 

                                                  <td>  <?php echo $mc[$s]; ?> </td>

                                                  <td>  <?php echo $md[$s]; ?> </td>

                                                  <td>  <?php echo $me[$s]; ?> </td>

                                                  <td>  <?php echo $mf[$s]; ?> </td>

                                                   <td>  <?php echo $mg[$s]; ?> </td>

                                                     <td>  <?php echo $mh[$s]; ?> </td>

                                                    <td> <?php echo $qtyx[$s]; ?></td>



                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>

                                <br><center><a href=<button class="small-box-footer" data-toggle="modal" data-target="#progres" 
                               style="border:2px solid #000; border-radius:3px; background-color:;"><b>Add Progress for</b>
                                &nbsp;<?php  echo $NTIHCNO; ?>  <i class=" "></i></a><center>
                                  
     

                     </div> </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border" style="text-align:center; color:#000; font-size:10px;">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        INVESTIGATIONS &nbsp; | ULTRA SOUND  &nbsp; | RISK FACTORS &nbsp;TREATMENT
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">

                     <?php
  $id = $_GET['q'];

  $NTIHCNO = '';
  $DATECREATED = '';
  $CLIENTNAME = '';
  $SCHOOLINGSTATUS = '';
  $HEALTHUNIT = '';
  $LCONE = '';
  $CARDIACDISEASE = '';
  $DATEOFBIRTH = '';
  $KIDNEYDISEASE = '';
  $VILLAGE = '';
  $PARISH = '';
  $HYPERTENSION = '';
  $TB = '';
  $CLIENTOCCUPATION = '';
  $RELIGION = '';
  $ASTHMA = '';
  $TRIBE = '';
  $STI = '';
  $SICKLECELLS = '';
  $MARITALSTATUS = '';
  $EPILEPSYTWO = '';
  $ANYHOSPITALIZATION = '';
  $DIABETESONE = '';
  $BLEEDINGTWO = '';
  $NEXTOFKIN = '';
  $NEXTOFKINCONTACT = '';
  $NEXTOFKINRELATIONSHIP = '';
  $OCCUPATION = '';
  $OPERATIONS = '';
  $BLOODTRANSFUSION = '';
  $ADDRESS = '';
  $REASONFORBLOODTRANSFUSION = '';
  $GRAVIDA = '';
  $PARA = '';
  $ABORTIONS = '';
  $FRACTURES = '';
  $ECTOPICPREGNANCY = '';
  $BLEEDINGTHREE = '';
  $CAESAREANSECTION = '';
  $VACUUMSXTRACTION = '';
  $MENSES = '';
  $AMOUNT = '';
  $RETAINEDPLACENTA = '';
  $PPH = '';
  $METHODEVERUSED = '';
  $DISCONTINUEDATE = '';
  $OPERATIONSONTHEUTERUS = '';
  $CERVICALCIRCLAGE = '';
  $REASONFORDISCONTINUE = '';
  $REASONFORNEVERATTEMPT = '';
  $SMOKING = '';
  $ALCOHOL = '';
  $HEALTHOFTHEHUSBAND = '';
  $FIRSTDAYOFLNMP = '';
  $SERIALNO = '';
  $PHONECONTACT = '';
  $CLIENTNAME = '';
  $SYPHILISTEST = '';
  $XRAYONE = '';
  $MPS = '';
  $XRAYTWO = '';
  $VCTHIV = '';
  $XRAYTHREE = '';
  $OTHERTEST = '';
  $PELVICASS = '';
  $DIAGONALCONJUGATE = '';
  $SACRALCURVE = '';
  $PELVISADEQUATE = '';
  $ISACHIALTUBEROTIES = '';
  $SUBPUBICARCH = '';
  $ISICHIAL = '';
  $ULSRONE = '';
  $ULSRDATEONE = '';
  $ULSRTWO = '';
  $ULSRDATETWO = '';
  $ULSRTHREE = '';
  $ULSRDATETHREE = '';
  $ULSRFOUR = '';
  $ULSRDATEFOUR = '';
  $ULSRFIVE = '';
  $ULSRDATEFIVE = '';
  $RFRFDONE = '';
  $RFRFDTWO = '';
  $RFRFDTHREE = '';
  $RFRFDFOUR = '';
  $RFRFDFIVE = '';


 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM antenatalcare  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $DATECREATED = $row['DATECREATED'];
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
	 $HEALTHUNIT  = $row['HEALTHUNIT'];
	 $LCONE  = $row['LCONE'];
	 $CARDIACDISEASE  = $row['CARDIACDISEASE'];
	 $DATEOFBIRTH  = $row['DATEOFBIRTH'];
	 $KIDNEYDISEASE = $row['KIDNEYDISEASE'];
     $VILLAGE = $row['VILLAGE'];
	 $PARISH  = $row['PARISH'];
	 $HYPERTENSION  = $row['HYPERTENSION'];
	 $TB  = $row['TB'];
	 $CARDIACDISEASE  = $row['CARDIACDISEASE'];
     $CLIENTOCCUPATION = $row['CLIENTOCCUPATION'];
     $RELIGION = $row['RELIGION'];
	 $ASTHMA  = $row['ASTHMA'];
	 $TRIBE  = $row['TRIBE'];
	 $STI  = $row['STI'];
	 $SICKLECELLS  = $row['SICKLECELLS'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EPILEPSYTWO = $row['EPILEPSYTWO'];
	 $ANYHOSPITALIZATION = $row['ANYHOSPITALIZATION'];
	 $DIABETESONE  = $row['DIABETESONE'];
	 $BLEEDINGTHREE  = $row['BLEEDINGTHREE'];
	 $BLEEDINGTWO = $row['BLEEDINGTWO'];
     $NEXTOFKIN = $row['NEXTOFKIN'];
	 $NEXTOFKINCONTACT  = $row['NEXTOFKINCONTACT'];
	 $NEXTOFKINRELATIONSHIP  = $row['NEXTOFKINRELATIONSHIP'];
	 $OCCUPATION  = $row['OCCUPATION'];
	 $OPERATIONS  = $row['OPERATIONS'];
     $BLOODTRANSFUSION = $row['BLOODTRANSFUSION'];
     $ADDRESS = $row['ADDRESS'];
     $REASONFORBLOODTRANSFUSION  = $row['REASONFORBLOODTRANSFUSION'];
	 $GRAVIDA  = $row['GRAVIDA'];
	 $PARA  = $row['PARA'];
	 $ABORTIONS  = $row['ABORTIONS'];
     $FRACTURES = $row['FRACTURES'];
     $DC = $row['DC'];
	 $ECTOPICPREGNANCY = $row['ECTOPICPREGNANCY'];

	 $CAESAREANSECTION = $row['CAESAREANSECTION'];
     $VACUUMSXTRACTION = $row['VACUUMSXTRACTION'];
     $MENSES  = $row['MENSES'];
	 $AMOUNT  = $row['AMOUNT'];
	 $RETAINEDPLACENTA  = $row['RETAINEDPLACENTA'];
	 $PPH  = $row['PPH'];
     $METHODEVERUSED = $row['METHODEVERUSED'];
     $DISCONTINUEDATE = $row['DISCONTINUEDATE'];
	 $OPERATIONSONTHEUTERUS = $row['OPERATIONSONTHEUTERUS'];
	 $CERVICALCIRCLAGE  = $row['CERVICALCIRCLAGE'];
	 $REASONFORDISCONTINUE  = $row['REASONFORDISCONTINUE'];
	 $REASONFORNEVERATTEMPT  = $row['REASONFORNEVERATTEMPT'];
	 $SMOKING  = $row['SMOKING'];
     $ALCOHOL = $row['ALCOHOL'];
     $HEALTHOFTHEHUSBAND = $row['HEALTHOFTHEHUSBAND'];
	 $FIRSTDAYOFLNMP = $row['FIRSTDAYOFLNMP'];
	 $SERIALNO  = $row['SERIALNO'];
     $id  = $row['id'];
	 $CLIENTNAME  = $row['CLIENTNAME'];
     $PHONECONTACT = $row['PHONECONTACT'];
     $SYPHILISTEST = $row['SYPHILISTEST'];
     $XRAYONE = $row['XRAYONE'];
	 $MPS = $row['MPS'];
	 $XRAYTWO  = $row['XRAYTWO'];
     $VCTHIV  = $row['VCTHIV'];
	 $XRAYTHREE  = $row['XRAYTHREE'];
     $OTHERTEST = $row['OTHERTEST'];
     $SACRALCURVE = $row['SACRALCURVE'];
	 $PELVISADEQUATE  = $row['PELVISADEQUATE'];
     $ISACHIALTUBEROTIES  = $row['ISACHIALTUBEROTIES'];
	 $SUBPUBICARCH  = $row['SUBPUBICARCH'];
     $ISICHIAL = $row['ISICHIAL'];
     $PELVICASS  = $row['PELVICASS'];
     $DIAGONALCONJUGATE = $row['DIAGONALCONJUGATE'];
     $ULSRONE = $row['ULSRONE'];
	 $ULSRDATEONE  = $row['ULSRDATEONE'];
	 $ULSRTWO  = $row['ULSRTWO'];
	 $ULSRDATETWO  = $row['ULSRDATETWO'];
     $ULSRTHREE = $row['ULSRTHREE'];
     $ULSRDATETHREE = $row['ULSRDATETHREE'];
	 $ULSRFOUR  = $row['ULSRFOUR'];
     $ULSRDATEFOUR  = $row['ULSRDATEFOUR'];
	 $ULSRFIVE  = $row['ULSRFIVE'];
     $ULSRDATEFIVE = $row['ULSRDATEFIVE'];
     $RFRFDONE = $row['RFRFDONE'];
	 $RFRFDTWO  = $row['RFRFDTWO'];
     $RFRFDTHREE  = $row['RFRFDTHREE'];
	 $RFRFDFOUR  = $row['RFRFDFOUR'];
     $RFRFDFIVE = $row['RFRFDFIVE'];

      }
  ?>

                     <div class="col-sm-4">
             <table class="table-responsive" style="margin-top:30px;">
             <table class="table" style="border:0px;">
             <tr>

                <th style="width:100%;border:0px;"><b>INVESTIGATIONS</b>  </th>

              </tr>
			  </table>


               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:30%;border:0px  "> <b> Blood : HB</b>   </th>

                <th style="width:25%;border:0px ">
                 </th>

                 <th style="width:10%;border:0px  ">X-RAY </th>

                <th style="width:35%;border:0px ">  </th>

              </tr>
			  </table>

             <form  class="form-horizontal" action="anc_updatedem2.php" method="POST" style="height:auto; font-weight:normal;">



             <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
             <tr>
                <th style="width:25%;border:0px;">Syphilis test  </th>
                <th style="width:30%;border:0px ;">
                <input type="text" name="SYPHILISTEST" class="switch-input" id="SYPHILISTEST"  value="<?php  echo $SYPHILISTEST; ?>"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

                 <th style="width:10%;border:0px;">  </th>

                <th style="width:35%;border:0px;">
                <input type="text" name="XRAYONE" class="switch-input" id="XRAYONE"  value="<?php  echo $XRAYONE; ?>"
                style="width:100%;background-color:#fbf9f3;"> </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:25%;border:0px;">MPs </th>

                <th style="width:30%;border:0px ;">
                <input type="text" name="MPS" class="switch-input" id="MPS"  value="<?php  echo $MPS; ?>"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

                 <th style="width:10%;border:0px;">  </th>

                <th style="width:35%;border:0px;">
                <input type="text" name="XRAYTWO" class="switch-input" id="XRAYTWO"  value="<?php  echo $XRAYTWO; ?>"
                style="width:100%;background-color:#fbf9f3;"> </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:25%;border:0px;">VCT/HIV</th>



                <th style="width:30%;border:0px ;">
                <input type="text" name="VCTHIV" class="switch-input" id="VCTHIV"  value="<?php  echo $VCTHIV; ?>"
                style="width:100%;background-color:#fbf9f3;">
                </th>

                <th style="width:10%;border:0px;">  </th>

                <th style="width:35%;border:0px;">
                <input type="text" name="XRAYTHREE" class="switch-input" id="XRAYTHREE"  value="<?php  echo $XRAYTHREE; ?>"
                style="width:100%;background-color:#fbf9f3;"> </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:25%;border:0px;">Others </th>

                <th style="width:30%;border:0px ;">
                <input type="text" name="OTHERTEST" class="switch-input" id="OTHERTEST"  value="<?php  echo $OTHERTEST; ?>"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

                 <th style="width:10%;border:0px;">  </th>

                <th style="width:35%;border:0px;">  </th>

              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-10px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;"> Pelvic assessment (36 weeks)</th>

                <th style="width:40%;border:0px;">  <input type="text" name="PELVICASS" id="PELVICASS" value="<?php  echo $PELVICASS; ?>"
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>


              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;"> Diagonal conjugate</th>

                <th style="width:40%;border:0px;">  <input type="text" name="DIAGONALCONJUGATE" id="DIAGONALCONJUGATE" value="<?php  echo $DIAGONALCONJUGATE; ?>"
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;">Sacral curve</th>

                <th style="width:40%;border:0px;">  <input type="text" name="SACRALCURVE" id="SACRALCURVE" value="<?php  echo $SACRALCURVE; ?>"
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;">Isichial spines</th>

                <th style="width:40%;border:0px;">  <input type="text" name="ISICHIAL" id="ISICHIAL" value="<?php  echo $ISICHIAL; ?>"
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>


              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;"> Sub pubic arch</th>

                <th style="width:40%;border:0px;">  <input type="text" name="SUBPUBICARCH" id="SUBPUBICARCH" value="<?php  echo $SUBPUBICARCH; ?>"
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;"> Isachial tuberosities</th>

                <th style="width:40%;border:0px;">  <input type="text" name="ISACHIALTUBEROTIES" id="ISACHIALTUBEROTIES" value="<?php  echo $ISACHIALTUBEROTIES; ?>"
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;">Pelvis adequate/ borderline/ contracted</th>

                <th style="width:40%;border:0px;">  <input type="text" name="PELVISADEQUATE" id="PELVISADEQUATE" value="<?php  echo $PELVISADEQUATE; ?>"
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
			  </table>

               </div>

              <div class="col-sm-4">
               <table class="table-responsive" style="margin-top:30px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:100%;border:0px;"><b>ULTRA SOUND REPORTS AND DATES</b>  </th>

              </tr>
			  </table>

               <table class="table table-tabled" style="background-color:#ffffff; margin-top:32px; border:0px; ">
   <thead>
   <tr>
   <th style="background-color:#ffffff; border:0px;">Details</th>
   <th style="background-color:#ffffff; border:0px;">Date</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:75%;border:0px;"><input type="text" name="ULSRONE" id="ULSRONE" value="<?php  echo $ULSRONE; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATEONE" id="ULSRDATEONE" value="<?php  echo $ULSRDATEONE; ?>"
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
  <tr>
 </tbody>
 </table>


    <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

              <td style="width:75%;border:0px;"><input type="text" name="ULSRTWO" id="ULSRTWO" value="<?php  echo $ULSRTWO; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATETWO" id="ULSRDATETWO" value="<?php  echo $ULSRDATETWO; ?>"
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

              </tr>
			  </table>


     <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

              <td style="width:75%;border:0px;"><input type="text" name="ULSRTHREE" id="ULSRTHREE" value="<?php  echo $ULSRTHREE; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATETHREE" id="ULSRDATETHREE" value="<?php  echo $ULSRDATETHREE; ?>"
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

              </tr>
			  </table>

             <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

              <td style="width:75%;border:0px;"><input type="text" name="ULSRFOUR" id="ULSRFOUR" value="<?php  echo $ULSRFOUR; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATEFOUR" id="ULSRDATEFOUR" value="<?php  echo $ULSRDATEFOUR; ?>"
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

              <td style="width:75%;border:0px;"><input type="text" name="ULSRFIVE" id="ULSRFIVE" value="<?php  echo $ULSRFIVE; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATEFIVE" id="ULSRDATEFIVE" value="<?php  echo $ULSRDATEFIVE; ?>"
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

              </tr>
			  </table>
              </div>

              <div class="col-sm-4">

                <table class="table-responsive" style="margin-top:30px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:100%;border:0px;"><b>RISK FACTORS AND RECOMMENDATIONS FOR DELIVERY</b>  </th>

              </tr>
			  </table>

   <table class="table table-tabled" style="background-color:#ffffff; margin-top:48px; border:0px; ">
   <thead>
   <tr>

   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:0px;"><input type="text" name="RFRFDONE" id="RFRFDONE" value="<?php  echo $RFRFDONE; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   </tr>
  <tr>
 </tbody>
 </table>

 <table class="table table-tabled" style="background-color:#ffffff; margin-top:-23px; border:0px; ">
   <thead>
   <tr>
     <td style="width:100%;border:0px;"><input type="text" name="RFRFDTWO" id="RFRFDTWO" value="<?php  echo $RFRFDTWO; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
   </thead>
 </tbody>
 </table>

 <table class="table table-tabled" style="background-color:#ffffff; margin-top:-23px; border:0px; ">
   <thead>
   <tr>
     <td style="width:100%;border:0px;"><input type="text" name="RFRFDTHREE" id="RFRFDTHREE" value="<?php  echo $RFRFDTHREE; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
   </thead>
 </tbody>
 </table>

   <table class="table table-tabled" style="background-color:#ffffff; margin-top:-23px; border:0px; ">
   <thead>
   <tr>
      <td style="width:100%;border:0px;"><input type="text" name="RFRFDFOUR" id="RFRFDFOUR" value="<?php  echo $RFRFDFOUR; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
   </thead>
   </tbody>
   </table>


   <table class="table table-tabled" style="background-color:#ffffff; margin-top:-23px; border:0px; ">
   <thead>
   <tr>
     <td style="width:100%;border:0px;"><input type="text" name="RFRFDFIVE" id="RFRFDFIVE" value="<?php  echo $RFRFDFIVE; ?>"
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
   </thead>
   </tbody>
   </table>

    <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>">
             <input type="hidden" name="REGNO" id="REGNO" value="<?php echo $id; ?>">
             
             
    <center><input type="submit" name="update" value="Update" style="height: 24px;">
   
   
   <a href=<button class="small-box-footer" data-toggle="modal" data-target="#prescribe" 
                               style="border:2px solid #000; border-radius:3px; background-color:;"><b>Prescribe drugs for</b>
                                &nbsp;<?php  echo $NTIHCNO; ?>  <i class=" "></i></a></center>
                                
                               </form> 
                                
   
   <br>

                    </div>
                  </div>
                </div>
              </div>
            </div>


  
          <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="progres" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
                  <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">

                 <form id="form1" class="form-horizontal" action="anc_processprogress_mono.php" method="POST" style="height:auto; font-weight:normal;"> 

                  <table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr> 
   </thead>
   <tbody>
   <tr> 
    <th style="width:20%;background-color:#fff;">Partner escort</th>
    <td style="width:30%;background-color:#fff;"><input type="radio" name=" PARTNERESCORT" id=" PARTNERESCORT"  value="NO" checked />
    <label style="font-size:10px;">NO</label> 
    <input type="radio" name=" PARTNERESCORT" id=" PARTNERESCORT"  value="YES"/>
    <label style="font-size:10px;">YES</label>              
    </td>
     
    <th style="width:20%;background-color:#fff;">Vist date</th>      
    <td style="width:30%;background-color:#fff;"><input type="date"  id="VISTDATECREATED" name="VISTDATECREATED" value="<?php echo date('Y-m-d'); ?>" 
    style=" background-color:#fff;height:21px;width:100%;" ></td> 
                
   
   </tr>
  <tr>
 </tbody>
 </table>  
 


                 <input type="hidden"  id="DATECREATED" name="DATECREATED" value="<?php echo date('Y-m-d'); ?>" >
                 
                 <input type="hidden" id="HEALTHUNIT" name="HEALTHUNIT" value="<?php  echo $HEALTHUNIT; ?>">
				 <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>">
                 <input type="hidden" name="SERIALNO" id="SERIALNO" value="<?php echo $SERIALNO; ?>">
                 <input type="hidden" name="REGNO" id="REGNO" value="<?php echo $id; ?>"> 
                 <input type="hidden" name="AGE" id="AGE" value="<?php echo $AGE1; ?>">
                 <input type="hidden" name="AGE_GROUP" id="AGE_GROUP" value="<?php echo $AGE_GROUP; ?>"> 
 
        <input type="hidden" name="USERINITIAL" id="USERINITIAL" value="<?php echo $nameofuser; ?>" >
        <input type="hidden" name="USERDESIGNATION" id="USERDESIGNATION" value="<?php echo $desc; ?>" >
        <input type="hidden" name="USERACCOUNT" id="USERACCOUNT" value="<?php echo $rm; ?>" >


                 <?php
  $id = $_GET['q'];  
  
  $NTIHCNO = '';  
  $PHONECONTACT = '';   
  $FIRSTNAME = ''; 
  $LASTNAME = ''; 
  $SCHOOLINGSTATUS = '';     
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
   
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $FIRSTNAME = $row['FIRSTNAME']; 
	 $LASTNAME = $row['LASTNAME'];
	 $PHONECONTACT  = $row['PHONECONTACT']; 
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
      } 
  ?>
  
                 <input type="hidden" id="CLIENTNAME" name="CLIENTNAME" value="<?php  echo $FIRSTNAME; ?>   <?php  echo $LASTNAME; ?>">
				 <input type="hidden" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" value="<?php  echo $SCHOOLINGSTATUS; ?>">
                 <input type="hidden" id="PHONECONTACT" name="PHONECONTACT" value="<?php  echo $PHONECONTACT; ?>">

   <table class="table table-table table-tabled" style="font-weight:normal; margin-top:0px; ">
   <thead>
   <tr>
   <th style="width:8%;">Date </th>
   <th style="width:5%;text-align:center;">Weeks.of Amenorr hoea</th>
   <th style="width:4%;">Fundal height</th>
   <th style="width:4%;text-align:center; ">Presen tation</th>
   <th style="width:4%;text-align:center;">Position lie</th>
   <th style="width:4%;">Relation PP/Brim </th>
   <th style="width:4%;text-align:center;">Foetal heart</th>
   <th style="width:4%;">Weight</th>
   <th style="width:4%;text-align:center;">BP</th>
   <th style="width:4%;text-align:center;">Varicose/ oedema</th>
   <th style="width:4%;text-align:center;">Urine</th>
   <th style="width:4%;">TT</th>
   <th style="width:4%;text-align:center;">Iron / folic</th>
   <th style="width:4;text-align:center;">Mebenda zole</th>
   <th style="width:4%;">IPT </th>
   <th style="width:4%;">Net use </th>
   <th style="width:10%;text-align:center;">Complaits and remarks</th>
   <th style="width:10%;">Return date</th>
   <th style="width:10%;text-align:center;">Name of examiner</th>
   <th style="width:5%;text-align:center; color:red;">Action</th>
   </tr>
   </thead>
   <tbody>
   <tr>
	                                              <td> <input  name="VISTDATE" required="" type="date"  
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="WEEKSOFAMENOE"  type="text"  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; border:0px;"/></td>


                                                     <td> <input  name="FUNDALHEIGHT" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="PRESENTATION" type="numeric"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>


                                                  <td> <input  name="POSITIONLIE" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="RELATIONPP" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>
  
                                                  <td> <input  name="FOETALHEART" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="PROGRESSWEIGHT" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                   <td> <input  name="PROGRESSBP" type="text"  required="" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px; "/></td>

                                                   <td> <input  name="VARICOSEOEDEMA"  type="text"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fcfdfe; border:0px;"/></td>

                                                   <td> <input  name="URINE" type="numeric"  required="" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="TT" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td> 

                                                  <td> <input  name="IRONFOLIC" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="MEBENDAZOLE" type="numeric"  required="" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td> 
                                                  
                                                  <td> <input  name="IPT" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="NETUSE" type="numeric"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                   <td> <input  name="COMPLAITS" type="text"  required="" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px; "/></td>

                                                     <td> <input  name="RETURNDATE" type="date"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px; height:21px; "/></td>

                                                    <td> <input  name="NAMEOFEXAMINER" type="text"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fcfdfe; border:0px;"/></td>
                                                     
                                                    <td><center><input type="submit" name="button" id="button" value="Save" /></center></td>
 
   </tr>
  <tr>
 </tbody>
 </table>
   
           <div class="col-sm-12" >
           <div class="panel-body" >
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                    
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="obstetric" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

              <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
            <form id="form1" class="form-horizontal" action="anc_process_obstetric_mono.php" method="POST" style="height:auto; font-weight:normal;">
 

                 <input type="hidden"  id="VISTDATECREATED" name="VISTDATECREATED" value="<?php echo date('Y-m-d'); ?>" >
                 <input type="hidden" id="HEALTHUNIT" name="HEALTHUNIT" value="<?php  echo $HEALTHUNIT; ?>">
				 <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>">
                 <input type="hidden" name="SERIALNO" id="SERIALNO" value="<?php echo $SERIALNO; ?>"> 
                 <input type="hidden" name="AGE" id="AGE" value="<?php echo $AGE1; ?>">
                 <input type="hidden" name="AGE_GROUP" id="AGE_GROUP" value="<?php echo $AGE_GROUP; ?>"> 
                 <input type="hidden" name="REGNO" id="REGNO" value="<?php echo $id; ?>">
                  <input type="hidden"  id="DATECREATED" name="DATECREATED" value="<?php echo date('Y-m-d'); ?>" >
                   
<?php
  $id = $_GET['q'];  
  
  $NTIHCNO = '';  
  $PHONECONTACT = '';   
  $FIRSTNAME = ''; 
  $LASTNAME = ''; 
  $SCHOOLINGSTATUS = '';     
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
   
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $FIRSTNAME = $row['FIRSTNAME']; 
	 $LASTNAME = $row['LASTNAME'];
	 $PHONECONTACT  = $row['PHONECONTACT']; 
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
      } 
  ?>
  
                 <input type="hidden" id="CLIENTNAME" name="CLIENTNAME" value="<?php  echo $FIRSTNAME; ?>   <?php  echo $LASTNAME; ?>">
				 <input type="hidden" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" value="<?php  echo $SCHOOLINGSTATUS; ?>">
                 <input type="hidden" id="PHONECONTACT" name="PHONECONTACT" value="<?php  echo $PHONECONTACT; ?>">


        <input type="hidden" name="USERINITIAL" id="USERINITIAL" value="<?php echo $nameofuser; ?>" >
        <input type="hidden" name="USERDESIGNATION" id="USERDESIGNATION" value="<?php echo $desc; ?>" >
        <input type="hidden" name="USERACCOUNT" id="USERACCOUNT" value="<?php echo $rm; ?>" >

 
   
    <table class="table table-table table-tabled" style="font-weight:normal; margin-top:0px; ">
   <thead>
   <tr>
    <th  style="width:4%;">Preg nancy</th>
   <th  style="width:4%;">Year</th>
   <th  style="width:5%;">Below 12 wks</th>
   <th  style="width:5%;">Above 12 wks </th>
   <th  style="width:4%;">Prema ture</th>
   <th  style="width:4%;">Full</th>
   <th  style="width:13%;">Place of delivery</th>
   <th  style="width:13%;">Type of delivery</th>
   <th  style="width:4%;">Third stage</th>
   <th  style="width:5%;">Puer perlum</th>
   <th  style="width:5%;">Alive SB/NND</th>
   <th  style="width:5%;">Sex </th>
   <th  style="width:5%;">Birth weight</th>
   <th  style="width:5%;">Immun</th>
   <th  style="width:14%;">Health condition</th>
   <th  style="width:5%;">Action</th>
   </tr>
   </thead>
   <tbody>
   <tr>
	                                              <td> <input  name="PRREGNANCY" required="" type="number"  
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="YEAROFPREG"  type="text"  class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; ;border:0px;"/></td>


                                                     <td> <input  name="BELOW12WEEKS" type="numeric"    class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="ABOVE12WEEKS" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>


                                                  <td> <input  name="PREMATURE" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="FULL" type="numeric" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="PLACEOFDELIVERY" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>
                                                          
                                                  <td> <input  name="TYPEOFDELIVERY" type="text"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                   <td> <input  name="THIRDSTAGE" type="text" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px; "/></td>

                                                   <td> <input  name="PUERPERLUM" type="text"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fcfdfe; border:0px;"/></td>


                                                   <td> <input  name="ALIVESB" type="numeric" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="CHILDSEX" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>


                                                  <td> <input  name="BIRTHWEIGHT" type="numeric"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="IMMUN" type="numeric"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="HEALTHCONDITION" type="text"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>
                                                  
                                                  <td><center><input type="submit" name="button" id="button" value="Save" /></center></td> 
   </tr>
  <tr>
 </tbody>
 </table>
 

           <div class="col-sm-12" >
           <div class="panel-body" >
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>

                   <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="newrecord" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        <?php
  $id = $_GET['q'];
  $NTIHCNO = '';
  $DATECREATED = '';
  $CLIENTNAME = '';
  $SCHOOLINGSTATUS = '';
  $HEALTHUNIT = '';
  $LCONE = '';
  $CARDIACDISEASE = '';
  $DATEOFBIRTH = '';
  $KIDNEYDISEASE = '';
  $VILLAGE = '';
  $PARISH = '';
  $HYPERTENSION = '';
  $TB = '';
  $CLIENTOCCUPATION = '';
  $RELIGION = '';
  $ASTHMA = '';
  $TRIBE = '';
  $STI = '';
  $SICKLECELLS = '';
  $MARITALSTATUS = '';
  $EPILEPSYTWO = '';
  $ANYHOSPITALIZATION = '';
  $DIABETESONE = '';
  $BLEEDINGTWO = '';
  $NEXTOFKIN = '';
  $NEXTOFKINCONTACT = '';
  $NEXTOFKINRELATIONSHIP = '';
  $OCCUPATION = '';
  $OPERATIONS = '';
  $BLOODTRANSFUSION = '';
  $ADDRESS = '';
  $REASONFORBLOODTRANSFUSION = '';
  $GRAVIDA = '';
  $PARA = '';
  $ABORTIONS = '';
  $FRACTURES = '';
  $ECTOPICPREGNANCY = '';
  $BLEEDINGTHREE = '';
  $CAESAREANSECTION = '';
  $VACUUMSXTRACTION = '';
  $MENSES = '';
  $AMOUNT = '';
  $RETAINEDPLACENTA = '';
  $PPH = '';
  $METHODEVERUSED = '';
  $DISCONTINUEDATE = '';
  $OPERATIONSONTHEUTERUS = '';
  $CERVICALCIRCLAGE = '';
  $REASONFORDISCONTINUE = '';
  $REASONFORNEVERATTEMPT = '';
  $SMOKING = '';
  $ALCOHOL = '';
  $HEALTHOFTHEHUSBAND = '';
  $FIRSTDAYOFLNMP = '';  
  $GENSTATIONPERIOD = '';
  $PREGNANCYCOMPLICATION = '';
  $DIABETESTWO = '';
  $HYPERTENSIONTWO = '';
  $HOSPITALIZATIONTWO = '';
  $HOSPITALIZATIONFOR = '';
    
  $BLEEDING = '';
  $SICKLECELLSTWO = '';
  $EPILEPSY = '';
  $EXCESSIVEVOMITING = '';
  $TWINS = '';
  $HUSBANDSHEALTH = ''; 
  $DIARRHOEA = '';
  $FEVER = '';
  $COUGH = '';
  $WEIGHTLOSS = '';
  $OTHERS = '';
  $KNOWSTATUS = '';  
  $WANTTOTEST = '';
  $HEIGHT = '';
  $WEIGHT = '';
  $BP = '';
  $PULSE = '';
  $TEMPERATURE = ''; 
  $NUTRITIONALSTATUS = '';
  $WT = '';
  $MUAC = '';
  $ORALTHRUSH = '';
  $ANAEMIA = '';
  $TEETH = '';
   
  $EYES = '';
  $NECK = '';
  $NAILS = '';
  $BREASTS = '';
  $PALMS = '';
  $LEGS = '';
  $JAUNDICE = '';
    
  $DEFORMITIES = '';
  $HEART = '';
  $LYMPHGLANDS = '';
  $LUNGS = '';
  $HERPESZOSTER = '';  


 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM antenatalcare  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $DATECREATED = $row['DATECREATED'];
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
	 $HEALTHUNIT  = $row['HEALTHUNIT'];
	 $LCONE  = $row['LCONE'];
	 $CARDIACDISEASE  = $row['CARDIACDISEASE'];
	 $DATEOFBIRTH  = $row['DATEOFBIRTH'];
	 $KIDNEYDISEASE = $row['KIDNEYDISEASE'];
     $VILLAGE = $row['VILLAGE'];
	 $PARISH  = $row['PARISH'];
	 $HYPERTENSION  = $row['HYPERTENSION'];
	 $TB  = $row['TB'];
	 $CARDIACDISEASE  = $row['CARDIACDISEASE'];
     $CLIENTOCCUPATION = $row['CLIENTOCCUPATION'];
     $RELIGION = $row['RELIGION'];
	 $ASTHMA  = $row['ASTHMA'];
	 $TRIBE  = $row['TRIBE'];
	 $STI  = $row['STI'];
	 $SICKLECELLS  = $row['SICKLECELLS'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EPILEPSYTWO = $row['EPILEPSYTWO'];
	 $ANYHOSPITALIZATION = $row['ANYHOSPITALIZATION'];
	 $DIABETESONE  = $row['DIABETESONE'];
	 $BLEEDINGTHREE  = $row['BLEEDINGTHREE'];
	 $BLEEDINGTWO = $row['BLEEDINGTWO'];
     $NEXTOFKIN = $row['NEXTOFKIN'];
	 $NEXTOFKINCONTACT  = $row['NEXTOFKINCONTACT'];
	 $NEXTOFKINRELATIONSHIP  = $row['NEXTOFKINRELATIONSHIP'];
	 $OCCUPATION  = $row['OCCUPATION'];
	 $OPERATIONS  = $row['OPERATIONS'];
     $BLOODTRANSFUSION = $row['BLOODTRANSFUSION'];
     $ADDRESS = $row['ADDRESS'];
     $REASONFORBLOODTRANSFUSION  = $row['REASONFORBLOODTRANSFUSION'];
	 $GRAVIDA  = $row['GRAVIDA'];
	 $PARA  = $row['PARA'];
	 $ABORTIONS  = $row['ABORTIONS'];
     $FRACTURES = $row['FRACTURES'];
     $DC = $row['DC'];
	 $ECTOPICPREGNANCY = $row['ECTOPICPREGNANCY']; 
	 $CAESAREANSECTION = $row['CAESAREANSECTION'];
     $VACUUMSXTRACTION = $row['VACUUMSXTRACTION'];
     $MENSES  = $row['MENSES'];
	 $AMOUNT  = $row['AMOUNT'];
	 $RETAINEDPLACENTA  = $row['RETAINEDPLACENTA'];
	 $PPH  = $row['PPH'];
     $METHODEVERUSED = $row['METHODEVERUSED'];
     $DISCONTINUEDATE = $row['DISCONTINUEDATE'];
	 $OPERATIONSONTHEUTERUS = $row['OPERATIONSONTHEUTERUS'];
	 $CERVICALCIRCLAGE  = $row['CERVICALCIRCLAGE'];
	 $REASONFORDISCONTINUE  = $row['REASONFORDISCONTINUE'];
	 $REASONFORNEVERATTEMPT  = $row['REASONFORNEVERATTEMPT'];
	 $SMOKING  = $row['SMOKING'];
     $ALCOHOL = $row['ALCOHOL'];
     $HEALTHOFTHEHUSBAND = $row['HEALTHOFTHEHUSBAND'];
	 $FIRSTDAYOFLNMP = $row['FIRSTDAYOFLNMP'];
	  
     $GENSTATIONPERIOD  = $row['GENSTATIONPERIOD'];
	 $PREGNANCYCOMPLICATION  = $row['PREGNANCYCOMPLICATION'];
	 $DIABETESTWO  = $row['DIABETESTWO'];
     $HYPERTENSIONTWO = $row['HYPERTENSIONTWO'];
     $HOSPITALIZATIONTWO = $row['HOSPITALIZATIONTWO'];
	 $HOSPITALIZATIONFOR = $row['HOSPITALIZATIONFOR'];  
	 $BLEEDING = $row['BLEEDING'];	  
     $SICKLECELLSTWO  = $row['SICKLECELLSTWO'];
	 $EPILEPSY  = $row['EPILEPSY'];
	 $EXCESSIVEVOMITING  = $row['EXCESSIVEVOMITING'];
     $TWINS = $row['TWINS'];
     $HUSBANDSHEALTH = $row['HUSBANDSHEALTH'];
	 $DIARRHOEA = $row['DIARRHOEA']; 
     $FEVER  = $row['FEVER'];
	 $COUGH  = $row['COUGH'];
	 $WEIGHTLOSS  = $row['WEIGHTLOSS'];
     $OTHERS = $row['OTHERS'];
     $KNOWSTATUS = $row['KNOWSTATUS'];
	 $WANTTOTEST = $row['WANTTOTEST']; 
     $HEIGHT  = $row['HEIGHT'];
	 $WEIGHT  = $row['WEIGHT'];
	 $BP  = $row['BP'];
     $PULSE = $row['PULSE'];
     $TEMPERATURE = $row['TEMPERATURE'];
	 $NUTRITIONALSTATUS = $row['NUTRITIONALSTATUS'];
	 $WT  = $row['WT'];  
	 $MUAC  = $row['MUAC'];
	 $ORALTHRUSH  = $row['ORALTHRUSH'];
     $ANAEMIA = $row['ANAEMIA'];
	 $TEETH = $row['TEETH'];
     $EYES = $row['EYES'];
	 $NECK = $row['NECK']; 
     $NAILS  = $row['NAILS'];
	 $BREASTS  = $row['BREASTS'];
	 $PALMS  = $row['PALMS'];
     $LEGS = $row['LEGS'];
     $JAUNDICE = $row['JAUNDICE'];
	 $DEFORMITIES = $row['DEFORMITIES']; 
     $HEART  = $row['HEART'];
	 $LYMPHGLANDS  = $row['LYMPHGLANDS'];
	 $LUNGS  = $row['LUNGS'];
     $HERPESZOSTER = $row['HERPESZOSTER']; 

      }
  ?>
 
                                        
                                        
                                    <div class="container fluid" style="width:80%;border:2px solid;"> 
 <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
              <p style="text-align:center; font-weight:bold; font-size:10px;"> ANTE-NATAL CARD</p>  
               <form id="form-wizard" class="form-horizontal" method="post"  action="anc_select.php" style="background-color:#fff;">

              <div id="form-wizard-1" class="step" >

      <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Health unit</th>
				<th style="width:20%;border:0px;"> <input type="text" id="username" name="HEALTHUNIT" value="<?php  echo $HEALTHUNIT; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff; "> </th>


                 <th style="width:13.33333333%;border:0px;">Reg No. </th>
				<th style="width:20%;border:0px;"> <input type="text" id="REGNO" name="REGNO" value="<?php  echo $NTIHCNO; ?>"  readonly="readonly"
				 style="width:100%; font-weight:normal; background-color:#fff; "> </th>

              <th style="width:33.33333333%;border:0px; font-weight:bold; text-align:center;font-weight:bold;">  <b>PREVIOUS ILLNESS</b>
              </tr>
			  </table>



              <table class="table-responsive" style="margin-top:-10px;">
              <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Name</th>
				<th style="width:20%;border:0px;"> <input type="text" id="CLIENTNAME" name="CLIENTNAME" value="<?php  echo $CLIENTNAME; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Phone number</th>
				<th style="width:20%;border:0px;"> <input type="text" id="PHONECONTACT" name="PHONECONTACT" value="<?php  echo $PHONECONTACT; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

    <input type="hidden" id="AGE_GROUP" name="AGE_GROUP" value="<?php  echo $AGE_GROUP; ?>">
    <input type="hidden" id="AGE1" name="AGE1" value="<?php  echo $AGE1; ?>">
    <input type="hidden" id="SERVICE_EPISODE" name="SERVICE_EPISODE" value="<?php  echo $SERVICE_EPISODE; ?>">



                <th style="width:33.33333333%;border:0px;font-weight:bold;">MEDICAL</th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Date of birth</th>
				<th style="width:20%;border:0px;"> <input type="text" id="DATEOFBIRTH" name="DATEOFBIRTH" value="<?php  echo $DATEOFBIRTH; ?>"
				style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                <th style="width:13.33333333%;border:0px;">LC1</th>
				<th style="width:20%;border:0px;"> <input type="text" id="LCONE" name="LCONE" value="<?php  echo $LCONE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                <th style="width:10%;border:0px;">Cardiac disease</th>
				<th style="width:7%;border:0px;"> <input type="text" id="CARDIACDISEASE" name="CARDIACDISEASE" value="<?php  echo $CARDIACDISEASE; ?>"
			    style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">Kidney disease</th>
				<th style="width:7%;border:0px;"> <input type="text" id="KIDNEYDISEASE" name="KIDNEYDISEASE" value="<?php  echo $KIDNEYDISEASE; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Village</th>
				<th style="width:20%;border:0px;"> <input type="text" id="VILLAGE" name="VILLAGE" value="<?php  echo $VILLAGE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Parish</th>
				<th style="width:20%;border:0px;"> <input type="text" id="PARISH" name="PARISH" value="<?php  echo $PARISH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                <th style="width:10%;border:0px;">Hypertension</th>
				<th style="width:7%;border:0px;"> <input type="text" id="HYPERTENSION" name="HYPERTENSION" value="<?php  echo $HYPERTENSION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">TB <P style="color:#FFF;">..........................</P></th>
				<th style="width:7%;border:0px;"> <input type="text" id="TB" name="TB" value="<?php  echo $TB; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-10px;">
               <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Occupation</th>
				<th style="width:20%;border:0px;"> <input type="text" id="CLIENTOCCUPATION" name="CLIENTOCCUPATION" value="<?php  echo $CLIENTOCCUPATION; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Religion</th>
				<th style="width:20%;border:0px;"> <input type="text" id="RELIGION" name="RELIGION" value="<?php  echo $RELIGION; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                <th style="width:10%;border:0px;">Any hospitalization</th>
				<th style="width:7%;border:0px;"> <input type="text" id="ANYHOSPITALIZATION" name="ANYHOSPITALIZATION" value="<?php  echo $ANYHOSPITALIZATION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:10%;border:0px;">Asthma</th>
				<th style="width:7%;border:0px;"> <input type="text" id="ASTHMA" name="ASTHMA" value="<?php  echo $ASTHMA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
			  </table>

             <table class="table-responsive" style="margin-top:-10px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Education</th>
				<th style="width:20%;border:0px;"> <input type="text" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" value="<?php  echo $SCHOOLINGSTATUS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Tribe</th>
				<th style="width:20%;border:0px;"> <input type="text" id="TRIBE" name="TRIBE" value="<?php  echo $TRIBE; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                <th style="width:10%;border:0px;">STI</th>
				<th style="width:7%;border:0px;"> <input type="text" id="STI" name="STI" value="<?php  echo $STI; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                  <th style="width:10%;border:0px;">Sickle Cell disease</th>
				<th style="width:7%;border:0px;"> <input type="text" id="SICKLECELLS" name="SICKLECELLS" value="<?php  echo $SICKLECELLS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Marital status</th>
				<th style="width:20%;border:0px;"> <input type="text" id="MARITALSTATUS" name="MARITALSTATUS" value="<?php  echo $MARITALSTATUS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;"></th>
				<th style="width:20%;border:0px;">  </th>

                <th style="width:10%;border:0px;">Epilepsy (Seizure)</th>
				<th style="width:7%;border:0px;"> <input type="text" id="EPILEPSYTWO" name="EPILEPSYTWO" value="<?php  echo $EPILEPSYTWO; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">Bleeding</th>
				<th style="width:7%;border:0px;"> <input type="text" id="BLEEDINGTWO" name="BLEEDINGTWO" value="<?php  echo $BLEEDINGTWO; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Next of Kin</th>
				<th style="width:20%;border:0px;"> <input type="text" id="NEXTOFKIN" name="NEXTOFKIN" value="<?php  echo $NEXTOFKIN; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Phone number</th>
				<th style="width:20%;border:0px;"> <input type="text" id="NEXTOFKINCONTACT" name="NEXTOFKINCONTACT" value="<?php  echo $NEXTOFKINCONTACT; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                    <th style="width:10%;border:0px;">Diabetes</th>
				<th style="width:7%;border:0px;"> <input type="text" id="DIABETESONE" name="DIABETESONE" value="<?php  echo $DIABETESONE; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                         <th style="width:10%;border:0px;">Bleeding</th>
				<th style="width:7%;border:0px;"> <input type="text" id="BLEEDINGTHREE" name="BLEEDINGTHREE" value="<?php  echo $BLEEDINGTHREE; ?>"
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-10px;">
               <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Relationship</th>
				<th style="width:20%;border:0px;"> <input type="text" id="NEXTOFKINRELATIONSHIP" name="NEXTOFKINRELATIONSHIP" value="<?php  echo $NEXTOFKINRELATIONSHIP; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">  </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:33.33333333%;border:0px;font-weight:bold;">SURGICAL</th>

              </tr>
			  </table>

             <table class="table-responsive" style="margin-top:-10px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Occupation</th>
				<th style="width:20%;border:0px;"> <input type="text" id="OCCUPATION" name="OCCUPATION" value="<?php  echo $OCCUPATION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                 <th style="width:10%;border:0px;">Operations</th>
				<th style="width:7%;border:0px;"> <input type="text" id="OPERATIONS" name="OPERATIONS" value="<?php  echo $OPERATIONS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">Blood transfusions</th>
				<th style="width:7%;border:0px;"> <input type="text" id="BLOODTRANSFUSION" name="BLOODTRANSFUSION" value="<?php  echo $BLOODTRANSFUSION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Address</th>
				<th style="width:20%;border:0px;"> <input type="text" id="ADDRESS" name="ADDRESS" value="<?php  echo $ADDRESS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:10%;border:0px;">Why?</th>
				<th style="width:24%;border:0px;"> <input type="text" id="REASONFORBLOODTRANSFUSION" name="REASONFORBLOODTRANSFUSION" 
                value="<?php  echo $REASONFORBLOODTRANSFUSION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;">Gravida</th>
				<th style="width:20%;border:0px;"> <input type="text" id="GRAVIDA" name="GRAVIDA" value="<?php  echo $GRAVIDA; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:6.666666665%;border:0px;">Para</th>
				<th style="width:10%;border:0px;"> <input type="text" id="PARA" name="PARA" value="<?php  echo $PARA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                  <th style="width:6.666666665%;border:0px;">Abortions</th>
				<th style="width:10%;border:0px;"> <input type="text" id="ABORTIONS" name="ABORTIONS" value="<?php  echo $ABORTIONS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                <th style="width:27%;border:0px;">Fractures of pelvis, spine and femur</th>
				<th style="width:7%;border:0px;"> <input type="text" id="FRACTURES" name="FRACTURES" value="<?php  echo $FRACTURES; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>


                  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;" </th>
				<th style="width:20%;border:0px;">  </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:34%;border:0px;font-weight:bold;">OBS/GYN</th>

              </tr>
			  </table>

                  <table class="table-responsive" style="margin-top:-10px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:10%;border:0px;">D & C</th>
				<th style="width:7%;border:0px;"> <input type="text" id="DC" name="DC" value=""
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>


                 <th style="width:10%;border:0px;">Ectopic pregnancy</th>
				<th style="width:7%;border:0px;">  <input type="text" id="ECTOPICPREGNANCY" name="ECTOPICPREGNANCY" value=""
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

                 <table class="table-responsive" style="margin-top:-10px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;font-weight:bold;"> MENSTRUAL AND CONTRACEPTIVE HISTORY </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:10%;border:0px;">Caesarean section</th>
				<th style="width:7%;border:0px;"> <input type="text" id="CAESAREANSECTION" name="CAESAREANSECTION" value="<?php  echo $CAESAREANSECTION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">Vacuum extraction </th>
				<th style="width:7%;border:0px;"> <input type="text" id="VACUUMSXTRACTION" name="VACUUMSXTRACTION" value="<?php  echo $VACUUMSXTRACTION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-10px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:18.33333333%;border:0px;">Length of menses (No. of daya she bleeds)</th>
				<th style="width:15%;border:0px;"> <input type="text" id="MENSES" name="MENSES" value="<?php  echo $MENSES; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">Amount</th>
				<th style="width:15%;border:0px;"> <input type="text" id="AMOUNT" name="AMOUNT" value="<?php  echo $AMOUNT; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


                 <th style="width:10%;border:0px;">Retained placenta</th>
				<th style="width:7%;border:0px;"> <input type="text" id="RETAINEDPLACENTA" name="RETAINEDPLACENTA"  value="<?php  echo $RETAINEDPLACENTA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">PPH</th>
				<th style="width:7%;border:0px;"> <input type="text" id="PPH" name="PPH" value="<?php  echo $PPH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

                <table class="table-responsive" style="margin-top:-10px;">
             <table class="table" style="border:0px;">
              <tr>

                 <th style="width:18.33333333%;border:0px;">Family planning method ever used</th>
				<th style="width:15%;border:0px;"> <input type="text" id="METHODEVERUSED" name="METHODEVERUSED" value="<?php  echo $METHODEVERUSED; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">When was it discontinue?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="DISCONTINUEDATE" name="DISCONTINUEDATE" value="<?php  echo $DISCONTINUEDATE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:10%;border:0px;">Operations on the uterus</th>
				<th style="width:7%;border:0px;"> <input type="text" id="OPERATIONSONTHEUTERUS" name="OPERATIONSONTHEUTERUS" value="<?php  echo $OPERATIONSONTHEUTERUS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">Cervical circlage</th>
				<th style="width:7%;border:0px;"> <input type="text" id="CERVICALCIRCLAGE" name="CERVICALCIRCLAGE" value="<?php  echo $CERVICALCIRCLAGE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>





              <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
              <th style="width:18.33333333%;border:0px;">Why was it discontinued?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="REASONFORDISCONTINUE" name="REASONFORDISCONTINUE" value="<?php  echo $REASONFORDISCONTINUE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

               <th style="width:18.33333333%;border:0px;">If never used, why?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="REASONFORNEVERATTEMPT" name="REASONFORNEVERATTEMPT" value="<?php  echo $REASONFORNEVERATTEMPT; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:34%;border:0px;font-weight:bold;">SOCIAL HISTORY</th>

              </tr>
			  </table>

                  <table class="table-responsive" style="margin-top:-10px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

               <th style="width:10%;border:0px;">Smoking</th>
				<th style="width:7%;border:0px;"> <input type="text" id="SMOKING" name="SMOKING" value="<?php  echo $SMOKING; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">Alcohol</th>
				<th style="width:7%;border:0px;"> <input type="text" id="ALCOHOL" name="ALCOHOL" value="<?php  echo $ALCOHOL; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

              </div>
              <div id="form-wizard-2" class="step">

               <table class="table-responsive" style="margin-top:0px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;font-weight:bold;">PRESENT PREGNANCY </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                 <th style="width:10%;border:0px;">Health of the husband</th>
				<th style="width:24%;border:0px;"> <input type="text" id="email" name="HEALTHOFTHEHUSBAND" value="<?php  echo $HEALTHOFTHEHUSBAND; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

                 <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr>

                <th style="width:18.33333333%;border:0px;">First day of LNMP</th>
				<th style="width:15%;border:0px;"> <input type="text" id="FIRSTDAYOFLNMP" name="FIRSTDAYOFLNMP" value="<?php  echo $FIRSTDAYOFLNMP; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">EDD</th>
				<th style="width:15%;border:0px;"> <input type="text" id="eula"  name="EDD"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:34%;border:0px;font-weight:bold;">FAMILY HISTORY</th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:18.33333333%;border:0px;">Period of genstation</th>
				<th style="width:15%;border:0px;"> <input type="text" id="GENSTATIONPERIOD" name="GENSTATIONPERIOD" value="<?php  echo $GENSTATIONPERIOD; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">Complication of pregnancy if any</th>
				<th style="width:15%;border:0px;"> <input type="text" id="PREGNANCYCOMPLICATION" name="PREGNANCYCOMPLICATION" value="<?php  echo $PREGNANCYCOMPLICATION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

               <th style="width:10%;border:0px;">Diabetes</th>
				<th style="width:7%;border:0px;"> <input type="text" id="DIABETESTWO" name="DIABETESTWO" value="<?php  echo $DIABETESTWO; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">Hypertension</th>
				<th style="width:7%;border:0px;"> <input type="text" id="HYPERTENSIONTWO" name="HYPERTENSIONTWO" value="<?php  echo $HYPERTENSIONTWO; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


              </tr>
			  </table>

                 <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>
           
                <th style="width:18.33333333%;border:0px;">Any hospitalization</th>
				<th style="width:4%;border:0px;"> <input type="text" id="HOSPITALIZATIONTWO" name="HOSPITALIZATIONTWO" value="<?php  echo $HOSPITALIZATIONTWO; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>
                 <th style="width:3%;border:0px;">For</th>
                <th style="width:8%;border:0px;"> <input type="text" id="HOSPITALIZATIONFOR" name="HOSPITALIZATIONFOR" value="<?php  echo $HOSPITALIZATIONFOR; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">Bleeding</th>
				<th style="width:15%;border:0px;"> <input type="text" id="BLEEDING" name="BLEEDING" value="<?php  echo $BLEEDING; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:10%;border:0px;">Sickle cell disease</th>
				<th style="width:7%;border:0px;"> <input type="text" id="SICKLECELLSTWO" name="SICKLECELLSTWO" value="<?php  echo $SICKLECELLSTWO; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">Epilepsy</th>
				<th style="width:7%;border:0px;"> <input type="text" id="EPILEPSY" name="EPILEPSY" value="<?php  echo $EPILEPSY; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>



                <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:18.33333333%;border:0px;">Excessive vomiting</th>
				<th style="width:15%;border:0px;"> <input type="text" id="EXCESSIVEVOMITING" name="EXCESSIVEVOMITING" value="<?php  echo $EXCESSIVEVOMITING; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                   <th style="width:10%;border:0px;">Twins</th>
				<th style="width:7%;border:0px;"> <input type="text" id="TWINS" name="TWINS" value="<?php  echo $TWINS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">Husbands health</th>
				<th style="width:7%;border:0px;"> <input type="text" id="HUSBANDSHEALTH" name="HUSBANDSHEALTH" value="<?php  echo $HUSBANDSHEALTH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>
           
                <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;">Has any of the following been present for one month?</th>     </th>

                  <th style="width:6.33333333%;border:0px;">Fever</th>
				<th style="width:10%;border:0px;"> <input type="text" id="FEVER" name="FEVER" value="<?php  echo $FEVER; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Diarrhoea</th>
				<th style="width:10%;border:0px;"> <input type="text" id="DIARRHOEA" name="DIARRHOEA" value="<?php  echo $DIARRHOEA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:10%;border:0px;"> </th>
				<th style="width:7%;border:0px;">  </th>

                 <th style="width:10%;border:0px;"></th>
				<th style="width:7%;border:0px;">  </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

                  <th style="width:6.33333333%;border:0px;">Cough</th>
				<th style="width:10%;border:0px;"> <input type="text" id="COUGH" name="COUGH" value="<?php  echo $COUGH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Weight loss</th>
				<th style="width:10%;border:0px;"> <input type="text" id="WEIGHTLOSS" name="WEIGHTLOSS" value="<?php  echo $WEIGHTLOSS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

              </tr>
			  </table>

             <table class="table-responsive" style="margin-top:-3px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

                  <th style="width:6.33333333%;border:0px;">Others</th>
				<th style="width:27%;border:0px;"> <input type="text" id="OTHERS" name="OTHERS" value="<?php  echo $OTHERS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

              </tr>
			  </table>


              <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:18.33333333%;border:0px;">Does the mother know her HIV status?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="KNOWSTATUS" name="KNOWSTATUS" value="<?php  echo $KNOWSTATUS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:23.33333333%;border:0px;"> Does she want to test for HIV</th>
				<th style="width:10%;border:0px;">  <input type="text" id="WANTTOTEST" name="WANTTOTEST" value="<?php  echo $WANTTOTEST; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                   <th style="width:10%;border:0px;"></th>
				<th style="width:7%;border:0px;">  </th>

                 <th style="width:10%;border:0px;"> </th>
				<th style="width:7%;border:0px;">   </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;">If cough for more than 3 weeks and weight loss  </th>

                 <th style="width:33.33333333%;border:0px;font-weight:bold;"> Assess for TB </th>


                 <th style="width:33.33333333%;border:0px;"> </th>

              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-2px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;"> </th>

                  <th style="width:33.33333333%;border:0px;font-weight:bold;">PHYSICAL EXAMINATION  </th>

                <th style="width:33.33333333%;border:0px;"> </th>

              </tr>
			  </table>
              
          

              <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;"> </th>

                  <th style="width:6.33333333%;border:0px;">Height (cm)</th>
				<th style="width:10%;border:0px;"> <input type="text" id="HEIGHT" name="HEIGHT" value="<?php  echo $HEIGHT; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Weight (kg)</th>
				<th style="width:10%;border:0px;"> <input type="text" id="WEIGHT" name="WEIGHT" value="<?php  echo $WEIGHT; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:33.33333333%;border:0px;"> </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;"> </th>

                  <th style="width:6.33333333%;border:0px;">BP</th>
				<th style="width:10%;border:0px;"> <input type="text" id="BP" name="BP" value="<?php  echo $BP; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Pulse</th>
				<th style="width:10%;border:0px;"> <input type="text" id="PULSE" name="PULSE" value="<?php  echo $PULSE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>
          
                <th style="width:33.33333333%;border:0px;"> </th>     </th>

                  <th style="width:6.33333333%;border:0px;">Tempera ture</th>
				<th style="width:10%;border:0px;"> <input type="text" id="TEMPERATURE" name="TEMPERATURE" value="<?php  echo $TEMPERATURE; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;"> </th>
				<th style="width:10%;border:0px;">   </th>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

              </tr>
			  </table>


              <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:18.33333333%;border:0px;">Nutritional status?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="NUTRITIONALSTATUS" name="NUTRITIONALSTATUS" value="<?php  echo $NUTRITIONALSTATUS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:23.33333333%;border:0px;">  </th>
				<th style="width:10%;border:0px;">    </th>

                   <th style="width:10%;border:0px;"></th>
				<th style="width:7%;border:0px;">  </th>

                 <th style="width:10%;border:0px;"> </th>
				<th style="width:7%;border:0px;">   </th>

              </tr>
			  </table>


               <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;">Examine and comment on   </th>

                 <th style="width:6.33333333%;border:0px;">WT</th>
				<th style="width:10%;border:0px;"> <input type="text" id="WT" name="WT" value="<?php  echo $WT; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Muac</th>
				<th style="width:10%;border:0px;"> <input type="text" id="MUAC" name="MUAC" value="<?php  echo $MUAC; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:10%;border:0px;"></th>
				<th style="width:7%;border:0px;">  </th>

                 <th style="width:10%;border:0px;"> </th>
				<th style="width:7%;border:0px;">   </th>

              </tr>
			  </table>

			  <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>
            
                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Oral thrush</th>
				<th style="width:17%;border:0px;"> <input type="text" id="ORALTHRUSH" name="ORALTHRUSH" value="<?php  echo $ORALTHRUSH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Anaemia</th>
				<th style="width:17%;border:0px;"> <input type="text" id="ANAEMIA" name="ANAEMIA" value="<?php  echo $ANAEMIA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Teeth</th>
				<th style="width:17%;border:0px;"> <input type="text" id="TEETH" name="TEETH" value="<?php  echo $TEETH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Eyes</th>
				<th style="width:17%;border:0px;"> <input type="text" id="EYES" name="EYES" value="<?php  echo $EYES; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

                <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Neck</th>
				<th style="width:17%;border:0px;"> <input type="text" id="NECK" name="NECK" value="<?php  echo $NECK; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Nails</th>
				<th style="width:17%;border:0px;"> <input type="text" id="NAILS" name="NAILS" value="<?php  echo $NAILS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>
                
                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Breasts</th>
				<th style="width:17%;border:0px;"> <input type="text" id="BREASTS" name="BREASTS" value="<?php  echo $BREASTS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Palms</th>
				<th style="width:17%;border:0px;"> <input type="text" id="PALMS" name="PALMS" value="<?php  echo $PALMS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Legs</th>
				<th style="width:17%;border:0px;"> <input type="text" id="LEGS" name="LEGS" value="<?php  echo $LEGS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Jaundice</th>
				<th style="width:17%;border:0px;"> <input type="text" id="JAUNDICE" name="JAUNDICE" value="<?php  echo $JAUNDICE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Deformities</th>
				<th style="width:17%;border:0px;"> <input type="text" id="DEFORMITIES" name="DEFORMITIES" value="<?php  echo $DEFORMITIES; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Heart</th>
				<th style="width:17%;border:0px;"> <input type="text" id="HEART" name="HEART" value="<?php  echo $HEART; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

                <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Lymph Glands</th>
				<th style="width:17%;border:0px;"> <input type="text" id="LYMPHGLANDS" name="LYMPHGLANDS" value="<?php  echo $LYMPHGLANDS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Lungs</th>
				<th style="width:17%;border:0px;"> <input type="text" id="LUNGS" name="LUNGS" value="<?php  echo $LUNGS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

               <table class="table-responsive" style="margin-top:-3px;">
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Herpes zooster</th>
				<th style="width:17%;border:0px;"> <input type="text" id="HERPESZOSTER" name="HERPESZOSTER" value="<?php  echo $HERPESZOSTER; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;"> </th>
				<th style="width:17%;border:0px;">  </th>


              </tr>
			  </table>



              </div>

                <div class="form-actions">
                <center> <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" /> 
                 <a href="anc_home.php" class="btn btn-danger"> Close <span class="sr-only">(current)</a> &nbsp; 

                <div id="status"></div>
                <center>
                </div>
              <div id="submitted"></div>

 
 
 
  <div class="col-sm-12" >
           <div class="panel-body" > 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>

                   
                  <div class="row">  
                   <div class="col-lg-12">
                        <div class="modal" id="prescribe" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

             <div class="container fluid" style="width:60%;border:2px solid;"> 
 
              <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
              <p style="text-align:center; font-weight:bold; font-size:10px;"> PRESCRIPTION</p>  
               
             <form  class="form-horizontal" action="anc_processdrugorder.php" method="POST" style="height:auto; font-weight:normal;"> 
              <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>">   
              
                 <input type="hidden"  id="ORDERDATE" name="ORDERDATE" value="<?php echo date('Y-m-d'); ?>" > 
                 <input type="hidden" id="HEALTHUNIT" name="HEALTHUNIT" value="<?php  echo $HEALTHUNIT; ?>"> 
                 <input type="hidden" name="DRUGORDER" id="DRUGORDER" value="<?php echo uniqid();?>"> 
                  
                 <input type="hidden" name="AGE" id="AGE" value="<?php echo $AGE1; ?>">  
                 <input type="hidden" name="AGEGROUP" id="AGEGROUP" value="<?php echo $AGE_GROUP; ?>">   
				 <input type="hidden" id="PHONECONTACT" name="PHONECONTACT" value="<?php  echo $PHONECONTACT; ?>">   
        <input type="hidden" name="USERINITIAL" id="USERINITIAL" value="<?php echo $nameofuser; ?>" > 
        <input type="hidden" name="USERDESIGNATION" id="USERDESIGNATION" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="USERACCOUNT" id="USERACCOUNT" value="<?php echo $rm; ?>" > 
                   
<?php
  $id = $_GET['q'];  
  
  $NTIHCNO = '';  
  $PHONECONTACT = '';   
  $FIRSTNAME = ''; 
  $LASTNAME = ''; 
  $SCHOOLINGSTATUS = '';     
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
   
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $FIRSTNAME = $row['FIRSTNAME']; 
	 $LASTNAME = $row['LASTNAME'];
	 $PHONECONTACT  = $row['PHONECONTACT']; 
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
      } 
  ?>
  
                 <input type="hidden" id="CLIENTNAME" name="CLIENTNAME" value="<?php  echo $FIRSTNAME; ?>   <?php  echo $LASTNAME; ?>">
				 <input type="hidden" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" value="<?php  echo $SCHOOLINGSTATUS; ?>"> 

 
 <table class="table table-striped" style="background-color:#ecf0f5; margin-top:0px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5; width:40%;">DRUG DESCRIPTION</th>
   <th style="border:2px solid #ecf0f5;width:8%;">IN STOCK</th> 
   <th style="border:2px solid #ecf0f5;width:8%;">QTY ISSUED</th> 
   <th style="border:2px solid #ecf0f5; width:8%;">TIMES</th>
   <th style="border:2px solid #ecf0f5;width:8%;">PERIOD</th> 
   <th style="border:2px solid #ecf0f5; width:8%;">TOTAL</th>
   <th style="border:2px solid #ecf0f5;width:10%;">BALANCE</th> 
   <th style="border:2px solid #ecf0f5;width:10%; text-align:center;">ACTION</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="border:2px solid #ecf0f5;">
    <input type="text" name="DRUGNAME" onKeyUp="domee(this)" id="DRUGNAME" required="required" autocomplete="off"
   style="width:100%; text-align:left;background-color:#fff; height:20px;">
   </td>   
   
   <td style="border:2px solid #ecf0f5;"><input type="numeric"  id="INSTOCK"  name="INSTOCK" name1="INSTOCK[]" autocomplete="off"   readonly="readonly"  
    style="width:100%; text-align:center;background-color:#ECF0F5;"></td> 
			     
    <td style="border:2px solid #ecf0f5;"><input type="numeric"  id="FREQUENCY" name="FREQUENCY" name1="FREQUENCY[]"  autocomplete="off"  
    style="width:100%; text-align:center;background-color:#fff;"></td> 
    
	<td style="border:2px solid #ecf0f5;"><input type="numeric" id="TIMES"  name="TIMES"  name1="TIMES[]" autocomplete="off"   
    style="width:100%; text-align:center;background-color:#fff;"></td> 
    
   <td style="border:2px solid #ecf0f5;"><input type="numeric" id="PERIOD"   name="PERIOD" name1="PERIOD[]" autocomplete="off"  
    style="width:100%; text-align:center;background-color:#fff;"></td> 
    
     <td style="border:2px solid #ecf0f5;"><input type="text"  id="QTYPRESCRIBED" name="QTYPRESCRIBED"  name1="QTYPRESCRIBED[]" autocomplete="off"       
    style="width:100%; text-align:center;background-color:#fff;"></td> 
    
    <td style="border:2px solid #ecf0f5;"><input type="text" id="DRUGBALANCE"  name="DRUGBALANCE"  name1="DRUGBALANCE[]" autocomplete="off" readonly="readonly"  
    style="width:100%; text-align:center;background-color:#ECF0F5;"></td>  
           
<input type="hidden" id="CHECKAVAILABILITY" name="CHECKAVAILABILITY"  value="NO"> 
<input type="hidden" id="REQUESTINGUNIT"name="REQUESTINGUNIT" value="ANTENATAL CARE"> 
     
    <td style="border:2px solid #ecf0f5;"><center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" /></center> </td> 
				       				                        
   </tr>
  <tr>
 </tbody>
 </table>  
  

           <div class="col-sm-12" >
           <div class="panel-body" >
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> 
                   
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->

<!-- ./wrapper -->

<script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>
 
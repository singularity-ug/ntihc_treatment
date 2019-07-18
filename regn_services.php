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
 
 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>medical</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/assets/ionicons.min.css">
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="admin/assets/notifier.css">
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="admin/dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="admin/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="admin/datatable/css/buttons.dataTables.min.css">

  <script src="admin/datatable/js/jquery-1.12.3.js"></script>
  <script src="admin/datatable/js/jquery.dataTables.min.js"></script>
  <script src="admin/datatable/js/bootstrap.min.js"></script>
  <script src="admin/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="admin/datatable/js/dataTables.buttons.min.js"></script>
  <script src="admin/datatable/js/buttons.flash.min.js"></script>
  <script src="admin/datatable/js/jszip.min.js"></script>
  <script src="admin/datatable/js/pdfmake.min.js"></script>
  <script src="admin/datatable/js/vfs_fonts.js"></script>
  <script src="admin/datatable/js/buttons.html5.min.js"></script>
  <script src="admin/datatable/js/buttons.print.min.js"></script>
  

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:' file'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 15,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' Ntihc imms'
		},
		{extend :'pdf',
		 title:'Ntihc imms '
		},
		{extend :'print',
		 title:' Ntihc imms'
		}
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#exacontapps').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' STAFF CONTACTS'
		},
		{extend :'pdf',
		 title:'STAFF CONTACTS '
		},
		{extend :'print',
		 title:' STAFF CONTACTS'
		}
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#appraistk').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' APPRAISAL TRACKER'
		},
		{extend :'pdf',
		 title:'APPRAISAL TRACKER'
		},
		{extend :'print',
		 title:'APPRAISAL TRACKER'
		}
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#exstaffconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' STAFF CONTACTS'
		},
		{extend :'pdf',
		 title:'STAFF CONTACTS '
		},
		{extend :'print',
		 title:' STAFF CONTACTS'
		}
        ]
    } );
  } );
  </script>


<script>
  $(document).ready(function() {
     $('#exaconts').DataTable( {
	  "iDisplayLength": 10,
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
     $('#example13').DataTable();
  } );
  </script>

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#NTIHCNO"+num).val(data[2]);
  $("#CNAME").val(data[2]);
  $("#PID").val(data[3]);
  $("#AGE1").val(data[4]);      
   
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "jquery_search/serch_client.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result); 
}
  });
}
} 
</script>

 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
	font-weight: normal;
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
				font-weight: normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>


</head> 
<body class="hold-transition skin-blue sidebar-mini"> 
<div class="wrapper" style="background:url(assets/img/pattern/Light-Gret-Wallpaper-Downloads.jpg);">
       
  </header>
    
   
     
    <!-- Main content -->
    <section class="content">  
   

    <!-- Main content -->
    <section class="content" >
      <div class="row" > 
           <div class="col-md-1">  
            </div> 



              <div class="col-md-11">  
      
                <div class="col-md-5">
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:33.3333%; border: 1px;"> <a href="client_management.php">  
      <img src="assets/imgx/index.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Dashboard   </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
   
     <td style="width:33.3333%; border: 1px;"> <a href="registration_desk.php"> 
         <center><img src="assets/imgx/indexreewss.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
     
   <td style="width:33.3333%; border: 1px;"> <a href=<button data-toggle="modal"  data-target="#uiModal3" style="background-color:#00a65a;" >  </button>
       <center><img src="database icons/access-administrator-account.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
       Register </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
 </tbody>
 </table> 
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:33.3333%; border: 1px;"> <a href="regn_services.php">  
       <img src="database icons/exchange-512.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Referal  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
   
     <td style="width:33.3333%; border: 1px;"> <a href="admin/reports/med_daily_reception.php?d1=0&d2=0"> 
       <center><img src="assets/imgx/kkk.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Reports&nbsp;&nbsp;&nbsp;</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
     
   <td style="width:33.3333%; border: 1px;">  <a href="medical/waiting_room.php">
       <center><img src="assets/imgx/imagesffffffff.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Waiting </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
 </tbody>
 </table> 
  <br>
                        
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:10%; border: 0px;">  
    <img src="assets/img/ntihclog2.png"width="60" height="60" style="border: 0px; ">  
    </td>
   
     <td style="width:80%; border: 0px;">  
   <center style="color:#000; font-weight:bold; font-size:12px;">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</center><p></p>
   <center style="color:#000; font-weight:bold; font-size:12px;font:bold 13px 'Aleo'; text-shadow:1px 1px 4px #000; color:#fff;">REGISTRATION DESK</center><BR> 
    
    <td style="width:10%; border: 1px;">  
    </td>  
    </tbody>
    </table> 

    
           
          <div class="col-md-10">   <div class="panel-body">   
      <img src="assets/img/logsbig.PNG" width="100%" height="30%"></div> 
           
         <p style="text-align:center; font-weight:bold; font-size:12px; text-transform:uppercase; font-family:algerian; font-weight:normal;">
          CLIENTS IN-SERVICE REFERRAL</p><BR>
             <form method="post" action="updatecmgt/edit2.php">
             <div class="col-sm-3">
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:40%; text-align:left; border:0px; font-size:10px;">NTIHCNO</th>
                 <th style="width:60%; text-align:left;border:0px;"> <input type="text" id="myNTIHCNO" name="NTIHCNO" value="" class="form-control" readonly="readonly"  style="width:100%; background-color:#fff;"></th> 
			  
			 </tr>             
            </table></div>
            
              <div class="col-sm-3">
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; 	border:0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:40%; text-align:left; border:0px; font-size:10px;">SERVICETYPE</th>
                 <th style="width:60%; text-align:left;border:0px;"> <select id="mySERVICETYPE" name="SERVICETYPE" class="form-control" value=""  style="width:100%; background-color:#fff;">
                  <option value="">  </option>
                  <option value="MEDICAL SERVICES">MEDICAL SERVICES</option>
                  <option value="COUNSELLING SERVICES">COUNSELLING SERVICES</option>
                  <option value="PREGNANCY RELATED SERVICES">PREGNANCY RELATED SERVICES</option>
                  <option value="OTHER SERVICES">OTHER SERVICES</option>
               </select></th> 
			  
			 </tr>             
            </table></div>
          	 
              <div class="col-sm-3">
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; border:0px;font-size: 12px;text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:40%; text-align:left; border:0px; font-size:10px;">VIST TYPE</th>
                 <th style="width:60%; text-align:left;border:0px;"> <select id="myVISTTYPE" name="VISTTYPE" value="" class="form-control"  
                 style="width:100%; background-color:#fff;">
                 <option value="">  </option> 
                  <option value="NEW">NEW</option>
                   <option value="REVIST">REVIST</option>
                 </select>
                 </th> 
			  
			 </tr>             
            </table>
            </div>
             <div class="col-sm-3">
               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; border:0px;font-size: 12px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
               <th style="width:40%; text-align:left; border:0px; font-size:10px;">DATE</th>
                 <th style="width:40%; text-align:left;border:0px;"> 
                 <input type="text" name="TIMESTAMP" value="<?php echo date('Y-m-d');?>" class="form-control" readonly="readonly"  style="width:100%; background-color:#fff;"></th> 
                 
                  <input type="hidden" id="myRID" name="RID" value="">
                  
                 <th style="width:40%;border: 0px;" > <center><input type="submit" name="update" value="Update" ></center></td>
			  
			 </tr>             
            </table> </div>
	</form>

<br><br>
<div class="panel-body">
<script>
function referpat(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[1];
document.getElementById("myRID").value=dts[0];
document.getElementById("mySERVICETYPE").value=dts[2];
document.getElementById("myVISTTYPE").value=dts[3];
}
</script>

	  
    <table id="example5" class="table table-tabled table-bordered"  style="font-weight:normal;">
        <thead>
        <tr>
              <th>DATE TIME</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>VIST TYPE</th>
					 <th>DATA TYPE</th>
					 
					 <th>SERVICE TYPE</th>
					 <th>USER INITIAL</th>
                     <th style="background-color:green; color:white;">ACTION</th> 
        </tr>
        </thead>
        <tfoot>
        <tr>

              <th>DATE TIME</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>VIST TYPE</th>
					 <th>DATA TYPE</th>
					 
					 <th>SERVICE TYPE</th>
					 <th>USER INITIAL</th>
                     <th style="background-color:green; color:white;">ACTION</th> 
        </tr>
        </tfoot>
        <tbody>

 <?php
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='NO' 
                                   GROUP BY NTIHCNO ORDER BY TIMESTAMP DESC");

	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['RID']."***".$res['NTIHCNO']."***".$res['SERVICETYPE']."***".$res['VISTTYPE'];
		echo "<tr>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>";
		echo "<td>".$res['CLIENTNAME']."</td>";
		echo "<td>".$res['VISTTYPE']."</td>";
		echo "<td>".$res['DATATYPE']."</td>";
		echo "<td>".$res['SERVICETYPE']."</td>";
		echo "<td>".$res['USERINITIAL']."</td>";
		echo '<td><a id="'.$dts.'" href="javascript:void(0);"   onclick="referpat(this.id)">POST CLIENT</a> </td>'; 
	}
	?>
	</tbody>
  </table>
             
             
             
             
            </div>              
                   
                
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        
                          
            <div class="col-lg-12">
                        <div class="modal fade" id="uiModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3">  </h4>
                                        </div>
                                        <div class="modal-body">


 <div class="col-lg-12" style="text-align:left;">
<img src="assets/img/logs.PNG" width="100%" height="100%">
</div>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> NEW CLIENT DEMOGRAPHY </legend> </center>

          <form class="form-horizontal" method="post" action="registration_desk_process.php" style="height:auto;">
          <input type="hidden" name="ISANC" id="ISANC" value="<?php  if(isset($_GET['anc'])){echo '123';} else{echo '0';}  ?>">
		  <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:50%;"> </th>
        <th style="border-bottom-color:white;font-weight:bold; width:50%;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  id="DATECREATED" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control"   name="FIRSTNAME"  id="FIRSTNAME" data-placement="top" required="required "/>
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="LASTNAME"  id="LASTNAME"  data-placement="top" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other name</label>
                    <div class="col-sm-8">
                   <input type="text" class="form-control"  name="OTHERNAME"  id="OTHERNAME"  data-placement="top" />
                   </div>
                </div>
                <!-- /.form-group -->


                  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Gender</label>
                    <div class="col-sm-8">
                        <select class="form-control"  id="SEX" name="SEX" />
                        <option value="FEMALE">FEMALE</option>
                        <option value="MALE">MALE</option>
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Date of birth</label>
                    <div class="col-sm-8">
                   <input type="date" name="AGE" onSelect="agecalc()" onChange="agecalc()"  id="datepicker1"   class="form-control"  data-placement="top" required="required"/>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <div class="col-sm-12">
                    <input type="text" name="AGE1" id="AGE1" class="form-control" data-placement="top"  />
                   </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Schooling</label>
                    <div class="col-sm-8">
                   <select class="form-control" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" data-placement="top" />
                    <option value="IS">IS</option>
                    <option value="OS">OS</option>
                        </select>
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Education</label>
                    <div class="col-sm-8">
                        <select class="form-control"   id="HIGHESTLEVELOFEDUCATION" name="HIGHESTLEVELOFEDUCATION"  required="required" />
                       <option value="-1">Highest level </option>
                                <option>PRIMARY</option>
								<option>SECONDARY</option>
                                <option>TERTIARY</option>
								<option>VOCATION</option>
                                <option>UNIVERSITY</option>
								<option>NONE</option>
                    			</select>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Marital status</label>
                    <div class="col-sm-8">
                    <select class="form-control" id="MARITALSTATUS"  name="MARITALSTATUS" required="required"/>
                                <option value="-1"> </option>
								<option>SINGLE</option>
								<option>MARRIED</option>
                                <option>SEPARATED</option>
								<option>WIDOWED</option>
                                <option>DIVORCED</option>
								<option>NO RESPONSE</option>
                    			</select>
                   </div>
                </div>
                <!-- /.form-group -->

        </th>

        <td>

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment status</label>
                    <div class="col-sm-8">
                  <select class="form-control" id="EMPLOYMENTSTATUS" input name="EMPLOYMENTSTATUS" />
                                <option value="UNEMPLOYED">UNEMPLOYED</option>
								<option>TEMPORARY</option>
                                <option>PERMANENT</option>
							    </select>
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8">
                   <select class="form-control" id="DISTRICT" input name="DISTRICT" required="required" />
                   <option value="-1"> </option>
								<option>KAMPALA</option>
								<option>MUKONO</option>
                                <option>WAKISO</option>
                                <option>MPIGI</option>
								<option>KAYUNGA</option>
                                <option>ENTEBBE</option>
                                <option>NAKASEKE</option>
								<option>BUIKWE</option>
                                <option>GOMBA</option>
                                <option>OTHERS</option>
                   </select>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8">
                  <select class="form-control" id="DIVISION" name="DIVISION" />
			      <option value="-1">For Kampala</option>
								<option>CENTRAL</option>
								<option>LUBAGA</option>
                                <option>NAKAWA</option>
                                <option>MAKINDYE</option>
                                <option>KAWEMPE</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE" class="form-control" placeholder="Place" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone contact</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT" class="form-control" />
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME" class="form-control" placeholder="First name" required="required" />
                    <input type="text" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"  class="form-control" placeholder="Last name" required="required" />
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME" class="form-control" placeholder="First name"  />
                    <input type="text" name="FATHERLASTNAME"  id="FATHERLASTNAME"  class="form-control" placeholder="Last name"  />
                   </div>
                </div>
                <!-- /.form-group -->

                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Living with</label>
                    <div class="col-sm-8">
                  <select class="form-control" id="LIVINGWITH" name="LIVINGWITH"/>
			       <option value="-1"> </option>
								<option>SINGLE PARENTS</option>
								<option>BOTH PARENTS</option>
                                <option>GRAND PARENTS</option>
                                <option>GUARDIAN</option>
								<option>ALONE/SELF</option>
                                <option>BROTHER</option>
                                <option>SISTER</option>
                                <option>B/FRIEND</option>
                                <option>WIFE</option>
                                <option>HUSBAND</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Heard about us</label>
                    <div class="col-sm-8">
                  <select class="form-control" id="HEAREDABOUTNTIHC" name="HEAREDABOUTNTIHC"/>
			       <option value="-1">Source of info </option>
								<option>PEERS</option>
								<option>PARENTS/GUARDIAN</option>
                                <option>HEALTH WORKER</option>
                                <option>OUTREACH</option>
								<option>EMPLOYER</option>
                                <option>NEWS PAPER</option>
                                <option>RADIO</option>
                                <option>TV</option>
                                </select>
                   </div>
                </div>
                <!-- /.form-group -->

             </td>
    </tbody>
    </table>


	 <table class="table table-bordered ">
    <thead>
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;"></th>
        <th style="border-bottom-color:white;font-weight:bold; width:66.6666666666%;"></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>Registered by  </th>
        <td> <input type="text" class="form-control"  name="REGISTEREDBY"  id="REGISTEREDBY" value="<?php echo $nameofuser; ?>"
		readonly="readonly" style="background-color:#fff;"/> </td>
        <input type="hidden" class="form-control"  name="REGISTERACCOUNT"  id="REGISTERACCOUNT" value="<?php echo $rm; ?>">
    </tbody>
    </table>

         <center><input type="submit" name="button" id="button" value="Save" />
         
          <a href="clients/regn_plain_form.php">Print</a>
         <center>
         </form>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
         
         <script>

          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/waiting_innerroom.php',
                       success : function(data){
                                $('#waiting_innerroom').html(data);
                                 }
               });
               }, 2000);

          </script>             
                     
          </div>
          <!-- /.box -->
        </div>
          
        <!-- /.col -->
      </div>
        
  </footer> 
 
<script src="assets/lib/moment/moment.min.js"></script>
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
  
 <script type="text/javascript" src="admin/ ../assets/js/gauge.js"></script>
</body>
</html>

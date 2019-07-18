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
	  "iDisplayLength": 4,
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
    border-top: 1px solid #000000;
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
                 border: 1px solid black;
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
 
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="col-md-1">
            </div> 
            
            <div class="row">
        <div class="col-md-10">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class=""></i> 
               <a href="registration_desk.php"> <i class="icon-lock icon-white"></i><b style="color:green;">Home</b>  </a>&nbsp;&nbsp;
         
              <h3 class="box-title"> 
         <a href="regn_services.php"> <i class="icon-lock icon-white"></i><b class="glyphicon glyphicon-floppy-saved">Edit-vists</b>  </a>&nbsp;&nbsp;
         
         <a class="glyphicon glyphicon-user" href="registration.php" <i class="icon-lock icon-white"></i><b style="color:black;">Demography</b>  </a>
         </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                
                <div class="col-md-12"> 
           
		  <img src="assets/img/logs.PNG" width="100%" height="50%"> 
           
           
         <p style="text-align:center; font-weight:bold; font-size:12px; text-transform:uppercase; font-family:algerian; font-weight:normal;">
          Clients Registration Desk</p>
           <table id="example" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
                    <th style="background-color:#998f8f; color:WHITE;">NO</th>
		    <th style="background-color:#998f8f; color:WHITE;">DATE</th>
                     <th style="background-color:#998f8f; color:WHITE;">NTIHC.NO.</th>
                     <th style="background-color:#998f8f; color:WHITE;">CLIENT NAME</th>
                     <th style="background-color:#998f8f; color:WHITE;">AGE</th>
                     <th style="background-color:#998f8f; color:WHITE;">MOTHER NAME.</th>
                     <th style="background-color:#998f8f; color:WHITE;">OLD.PID</th>
                     <th style="background-color:#998f8f; color:WHITE;">POST</th>  
                     <th style="background-color:#998f8f; color:WHITE;">ACTION</th> 
           </tr>
        </thead>
        <tfoot>
          <tr>
                     <th style="background-color:#998f8f; color:WHITE;">NO</th>
					<th style="background-color:#998f8f; color:WHITE;">DATE</th>
                     <th style="background-color:#998f8f; color:WHITE;">NTIHC.NO.</th>
                     <th style="background-color:#998f8f; color:WHITE;">CLIENT NAME</th>
                     <th style="background-color:#998f8f; color:WHITE;">AGE</th>
                     <th style="background-color:#998f8f; color:WHITE;">MOTHER NAME.</th>
                     <th style="background-color:#998f8f; color:WHITE;">OLD.PID</th>
                     <th style="background-color:#998f8f; color:WHITE;">POST</th>  
                     <th style="background-color:#998f8f; color:WHITE;">ACTION</th> 
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclientxx(myid){
var dts = myid.split("***");
document.getElementById("NTIHCNO").value=dts[1];
document.getElementById("myid").value=dts[0]; 
document.getElementById("CNAME").value=dts[2]; 
document.getElementById("myAGE1").value=dts[3]; 

}
</script>    
         
        
<?php 
include_once("updatecmgt/config.php");
   
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsnewregistration ORDER BY PID DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['PID']."***".$res['NTIHCNO']."***".$res['FIRSTNAME']." ".$res['LASTNAME']."***".$res['AGE1'];
		echo "<tr>";
		echo "<td>".$res['PID']."</td>";
        echo "<td>".$res['DATECREATED']."</td>";
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']."</td>"; 
		echo "<td>".$res['AGE1']."</td>"; 
		echo "<td>".$res['MOTHERFIRSTNAME']." ".$res['MOTHERLASTNAME']."</td>";    
		echo "<td>".$res['OLDPID']."</td>"; 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="Post"   onclick="postclientxx(this.id)"> 
		<span class="glyphicon glyphicon-ok"> </span> </a> 
		&nbsp;&nbsp;&nbsp; 
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Update" 
		<span class="glyphicon glyphicon-cog"> </span></a>  
		</td>';  
		 
		echo "<td><a href=\"clients/regn_data_form.php?PID=$res[PID]\">Print</a> </td>";		
	}
	   
    ?>
	</tbody>
  </table>           
                     
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

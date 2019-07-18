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

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT * FROM labtesttypes"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['TESTTYPE'] . "</option>";   }
  }
$connect->close();
?>



<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$stssb ="";
if( $result = $connect->query("SELECT MEDICALTOPIC FROM medicalproblems GROUP BY MEDICALTOPIC"))
{ while ($row = $result->fetch_assoc() ) {   $stssb=$stssb. "<option>" . $row['MEDICALTOPIC'] . "</option>";   }
  }
$connect->close();
?>

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$art ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='ART'"))
{ while ($row = $result->fetch_assoc() ) {   $art=$art. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$bcs ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='BODY CHANGES'"))
{ while ($row = $result->fetch_assoc() ) {   $bcs=$bcs. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$gyn ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='GYNAECOLOGICAL CONDITIONS'"))
{ while ($row = $result->fetch_assoc() ) {   $gyn=$gyn. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$pre ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='PREGNANCY'"))
{ while ($row = $result->fetch_assoc() ) {   $pre=$pre. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$sgb ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='SGBV CASES'"))
{ while ($row = $result->fetch_assoc() ) {   $sgb=$sgb. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>


<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$sed ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='SIDE EFFECTS DRUG TOXICITIES ON ART'"))
{ while ($row = $result->fetch_assoc() ) {   $sed=$sed. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$sti ="";
if( $result = $connect->query("SELECT * FROM medicalproblems WHERE MEDICALTOPIC ='STI/STD'"))
{ while ($row = $result->fetch_assoc() ) {   $sti=$sti. "<option>" . $row['MEDICALPROBLEM'] . "</option>";   }
  }
$connect->close();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>treatment room</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
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
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="admin/assets/notifier2.css">
  <link rel="stylesheet" href="admin/dist/css/skins/skin-blue.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
 
 
   <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#DRUGNAME"+num).val(data[2]);
  $("#BOOKIN").val(data[2]);
  $("#ID").val(data[3]); 
} 
function domee(ths){ 
  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "medical/drugsearch.php",
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
     $('#exaoffsite').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#viewresults').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#example1ot').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [ 
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#exampleoutex').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [ 
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#example01').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		} 
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example0111').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		} 
        ]
    } );
  } );
  </script>
  

   <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#exatable').DataTable( {
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#myhistory').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>


  <script>
  $(document).ready(function() {
     $('#myserachhistory').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
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
	  "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

		 {extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
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
     $('#example').DataTable( {
	  "iDisplayLength":4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
	  "iDisplayLength": 5,
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
     $('#example7').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'pdf',
		 title:'NTIHC |IMMS USER CONTACTS '
		},
		{extend :'print',
		 title:'NTIHC |IMMS USER CONTACTS '
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example8').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example9').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#exampleout').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
   

  <script>
  $(document).ready(function() {
     $('#example10').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example11').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example0221').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example13').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example14').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#example15').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#example16').DataTable( {
	  "iDisplayLength": 7,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' file'
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:' BUDGET DETAILS'
		}
        ]
    } );
  } );
  </script>
 

   <style media="screen">
  .btn {padding : 0px 3px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 0px solid transparent;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
} 
.progress{
  vertical-align:center;
  margin-bottom: 0px;
} 
                 table, th , td  {
                 border: 0px solid transparent;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 12px;
             	 color:#000000;
				 font-weight:normal;
             }
             table tr:nth-child(odd) {
             background-color:transparent;
             }
             table tr:nth-child(even) {
             background-color:transparent;
             } 
</style>

   <script type='text/javascript' src='http://code.jquery.com/jquery-1.7.1.js'></script> 
  <link rel="stylesheet" type="text/css" href="/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="/css/result-light.css"> 
  <style type='text/css'>  </style>
   
<script type='text/javascript'>//<![CDATA[ 
$(function(){
 
function calculate() {
 
    var qt = $(this).closest("tr").find(".qt").val();
	var a = $(this).closest("tr").find(".a").val();
    var c = $(this).closest("tr").find(".c").val();
	var e = $(this).closest("tr").find(".e").val();
	qt = isNaN(parseFloat(qt))? 0 : parseFloat(qt);
    a = isNaN(parseFloat(a))? 0 : parseFloat(a);
    c = isNaN(parseFloat(c))? 0 : parseFloat(c);
	e = isNaN(parseFloat(e))? 0 : parseFloat(e);
    b = e - t;
 
    $(this).closest("tr").find(".b").val(b);
    $(this).closest("tr").find(".t").val(a*qt*c);
	$(this).closest("tr").find(".h").val(e-a*qt*c);
    
}
 
$(".qt,.h,.a,.c").keyup( calculate );
});//]]>  
 
</script>
 

 

<script>


function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();
         document.getElementById('CHECKIN').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script>
 

</head>
<body class="hold-transition skin-blue sidebar-mini" style="background:url(assets/img/pattern/4326703-white-background-wallpapero.jpg);">
     
  <?php
  require('admin/connect/config.php');
  ?>
  
 <!--?php
 require('v2/header_cm.php');
 ?-->
    
	<div class="panel-body">  
	 
	<div class="col-md-6" style="background-color:transparent;">  
		 
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:16%; border: 0px;">  
        <img src="assets/img/ntihclog2.png"width="70" height="90" style="border: 0px; ">   
      </td>
   
      <td style="width:28%; border: 0px;"> 
	   <a href="client_medical.php">  
	   <center><img src="database icons/Medical-54-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
        Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		<a href="admin/reports/prescription.php?d1=0&d2=0"> 
       <center><img src="database icons/59449894425chart-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">   
        Reports&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
   
      <td style="width:28%; border: 1px;"> <a href="abortioncare.php">
        <center><img src="database icons/social_network-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        PAC&nbsp;&nbsp; </center>    </a>
        <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		<a href="postnatalcare.php">
        <center><img src="database icons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        PNC&nbsp;&nbsp; </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
		 
	  <td style="width:28%; border: 1px;">  <a href="index.php">
        <center><img src="database icons/icon-processmanagement.png"width="100" height="100" class=" " style=" height:30px; width:40px; background-color:transparent"> 
        Enrollment </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		
		<a href="index.php">
        <center><img src="database icons/switchb1.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
        Logout&nbsp;&nbsp; </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>   
    
   <td style="width:10%; border: 1px;">  
    </td>  
 </tbody>
 </table> 
 
  
   </div> 
  
   <div class="col-md-6" style=" background-color:transparent;">  
  
  
   </div>
   </div>
     
   <div class="col-md-5" style=" background-color:transparent;">  
    <ul class="nav nav-tabs" style="border: 0px;">  
    
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
      <td style="width:60%; border: 0px; background-color:transparent;">  <a data-toggle="tab" href="#tab1"> 
       <center>  <br> 
         Clients seen by medical service providers &nbsp;
		  <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration  WHERE TIMESTAMP >='$date' 
                                   AND MEDICAL ='1' GROUP BY NTIHCNO");
				$result->execute();
				$rowcount16 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount16;?>
     
	</td>
	
	 <td style="width:40%; border: 0px; background-color:transparent;">  <a data-toggle="tab" href="#tab2X">  
	</td>
	 
 </tbody>
 </table>
   </ul>   
        <div class="panel-body">	
        <div class="widget-content tab-content" style="border:0px;" >  
            <div id="tab1" class="tab-pane active"> 
			   <div id="dialog-window" style="background-color:transparent;">
            <div id="scrollable-content" style="background-color:transparent;">
            <ul>
                               <div class=""  id=" " style="margin-left: -41px;">
                                 
        
<table id="example0221" class="table table-stripped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
		      <th>DATE</th> 
			  <th>NAME</th> 
			  <th>NTIHC&nbsp;NO.</th>  
			  <th style="text-align:center;">ACTION</th>      
           </tr>
         
        </tfoot> 
        <tbody> 
         
<?php 
include_once("updatecmgt/config.php"); 
$date = date("Y-m-d").' 00:00:00';   
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                          AND MEDICAL ='1'  
                                          GROUP BY NTIHCNO ORDER BY DATECREATED ASC ");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsget = $res['DATECREATED']."***".$res['NTIHCNO']."***".$res['NTIHCNO']."***".$res['DATECREATED'];
		echo "<tr>";  
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>";  
		echo "<td>".$res['NTIHCNO']."</td>";  
		echo "<td><a href=\"client_medical_hist.php?NTIHCNO=$res[NTIHCNO]\">Results</a>&nbsp;|  
		<a href=\"client_medical_disp.php?NTIHCNO=$res[NTIHCNO]\"><b>Prescribe</b></a>  </td>";   
	}
	   
    ?>
	</tbody>
  </table>  
      
                               </div>
                                </div>
                                </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div> 

<style>
#dialog-window {
  height: 600px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 600px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>
			 
	        </div>
            
			 <div id="tab2" class="tab-pane">  
			 
	        </div>
           <div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;"> 
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
             <th style="width:39%; text-align:left; border:0px;">  <strong>Pending&nbsp;lab requests</strong></th>
			 <th style="width:10%; text-align:left; border:0px;">   
			 <b data-toggle="tooltip" title="All sent requests" style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5"> 
			  <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration  WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='NOT STARTED' AND MEDICAL ='1' AND LABVIST ='1' 
								   AND LABRESULTREVIEW ='NOTAPPLICABLE' GROUP BY NTIHCNO");
				$result->execute();
				$rowcount5 = $result->rowcount(); 
			 ?>
		     <?php echo $rowcount5;?>
			 </td>  
			 <th style="width:2%; text-align:left; border:0px;">  </th>
			 <th style="width:39%; text-align:left; border:0px;"><strong>Completed&nbsp;lab orders </strong>  </th>
			 <th style="width:10%; text-align:left; border:0px;">  
			 <b data-toggle="tooltip" title="All completed results" style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;" class="button 5">
			  <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration  WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='COMPLETED' AND MEDICAL ='1' AND LABVIST ='1' 
								   AND LABRESULTREVIEW ='NOTAPPLICABLE' GROUP BY NTIHCNO");
				$result->execute();
				$rowcount6 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount6;?>
		 </b>
			 </td>  
			 </tr>             
             </table> 
            </div> 
			
	 </div>
			 
   </div> 
   </div>
   
          <div class="col-md-7" style=" background-color:transparent;">  
              
			   <div class="panel-body">
			   
			  <center style="color:#000; font-weight:bold; font-size:12px;font:bold 16px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">
			  Clients Management - Prescription</center><br>
			   
			   <div class=""  id="dem">  </div>
               <script> 
          function getstuffclientel(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[0];
		  var ddt = jose.split("__")[1];
		      postclient(ddt);
                $.ajax({
                       type    : 'POST',
					   data    :{bb:odno},
                       url     : 'medical/medical_get.php?q='+odno,
                       success : function(data){
                                $('#dem').html(data);
								$("#demm").modal("show");
                                 }
               });
               } 
               </script>  </div>
			   
			   
			     <?php
   $id =  $_GET['NTIHCNO'];   
  $NTIHCNO = ''; 
  $RSVNID  = '';
  $CLIENTNAME = '';
  $AGE = '';    
  $SCHOOLING='';  
  $SEX='';
  $RID=''; 
  $DATECREATED='';
  $SERVICEPROVIDERACCOUNT='';
  $AGE1=''; 
   $AGE_GROUP='';
   $SERVICEPROVIDER='';
   $INSVCSTATUS=''; 
   
      
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM cmpatientsregistration WHERE NTIHCNO = '$id' ";

   $res = $conn->query($sql);

   while($row=$res->fetch_assoc()){
   $NTIHCNO = $row['NTIHCNO'];
   $RSVNID = $row['RSVNID'];  
   $CLIENTNAME=$row['CLIENTNAME'];   
   $SCHOOLING=$row['SCHOOLING'];  
   $DATECREATED=$row['DATECREATED']; 
   $SERVICEPROVIDERACCOUNT=$row['SERVICEPROVIDERACCOUNT']; 
   $SEX   = $row['SEX']; 
   $AGE1   = $row['AGE1']; 
   $AGE_GROUP   = $row['AGE_GROUP']; 
   $SERVICEPROVIDER   = $row['SERVICEPROVIDER']; 
   $id=$row['RID']; 
   $RID=$row['RID'];
   $INSVCSTATUS   = $row['INSVCSTATUS'];
   } 
   ?>
			   
			   
		 

        <form class="form-horizontal" action="prescription/presc_process_xplode.php" method="post" style="height:auto;"/>
				 
		<input type="hidden" name="AGE1" id="AGE1"  value="<?php echo $AGE1; ?>"> 
        <input type="hidden" id="AGE_GROUP" name="AGE_GROUP"  value="<?php echo $AGE_GROUP; ?>">  
        <input type="hidden" id="RSVNID" name="RSVNID"  value="<?php echo $RSVNID; ?>"> 
		<input type="hidden" name="SEX" id="SEX"  value="<?php echo $SEX; ?>"> 
		<input type="hidden" name="RID" id="RID"  value="<?php echo $RID; ?>"> 
		<input type="hidden" name="SERVICEPROVIDERACCOUNT" id="SERVICEPROVIDERACCOUNT"  
		value="<?php echo $SERVICEPROVIDERACCOUNT; ?>">
		
		<input type="hidden" name="SERVICEPROVIDER" id="SERVICEPROVIDER"  value="<?php echo $SERVICEPROVIDER; ?>">
		 
		<input type="hidden" name="PRESCRIPTION" id="PRESCRIPTION"  value="0"> 
		<input type="hidden" name="INSVCSTATUS" id="INSVCSTATUS" value"<?php echo $INSVCSTATUS; ?>">  
			 
        <div class="col-sm-6" style=" background-color:transparent; ">  
	
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; 
		font-size: 12px; text-align:left;border: 0px;" width="100%">
        <thead> <tr> 
			    <th style="width:40%;border:0px;">Prescription date </th> 
				<th style="width:60%;border:0px;"> <input type="date"  name="DATECREATED" id="DATECREATED" 
				value="<?php echo $DATECREATED; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
				</th>  
                </tr>
			    </table>
				
			   <p></p>
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Client name </th>
			 
				<th style="width:60%;border:0px;"> <input type="text"  name="CLIENTNAME" id="CLIENTNAME" 
				value="<?php echo $CLIENTNAME; ?>"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
			  </div>
			  
			   <div class="col-sm-6" style=" background-color:transparent; ">  
	        
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">NTIHC&nbsp;NO. </th>
			 
				<th style="width:60%;border:0px;"> <input type="text"  name="NTIHCNO" id="NTIHCNO" 
				value="<?php echo $NTIHCNO; ?>" readonly=""
				readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>
			   <p></p>
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Schooling</th>
			 
				<th style="width:60%;border:0px;"> <input type="text"  name="SCHOOLING" id="SCHOOLING" 
				value="<?php echo $SCHOOLING; ?>"
				readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
			  </div>
		 
	    <form class="form-horizontal" action="prescription/presc_sudo_apt.php" method="post" style="height:auto;"/>
				   
        <input type="hidden" id="RSVNID" name="RSVNID"  value="<?php echo $RSVNID; ?>">  
		<input type="hidden" name="RID" id="RID"  value="<?php echo $RID; ?>">   
		 
		      
	   </div>  
	 
	 	  <div class="col-sm-7" style="background-color:transparent;"> <p></p>
	<div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
		 
		  <center><input type="submit" name="button" id="button" value="Click here to prescribe now" class="button 5"
		  style="font-size:15px; border-radius:11px;"/> </center> 
		  </form>
		  
		 </div>   </div> 
	
	
	 
		  
		  	  
	   
		 
		</div>    
		 
 </div></div></div> 
   
  		  
			<div id="dialog-window" style="background-color:transparent;">
            <div id="scrollable-content" style="background-color:transparent;">
            <ul>
                               <div class="" id="labresultxt" style="margin-left: -15px;">
					 
							   
							   </div>

                                </div>
                                </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div> 

<style>
#dialog-window {
  height: 280px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 280px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>

 <script> 
          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/medical_labresults.php',
                       success : function(data){
                                $('#labresultxt').html(data);
                                 }
               });
               }, 2000);

          </script>
  
			                                                                      

       
            
                </div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->


      </div>
      <br>
      <!-- /.row -->
      <!-- END CUSTOM TABS --> 

   </div>
   </div>
   </div>


    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


           <div class=""  id="getvist" >  </div>

           <div class="col-sm-12">
           <BR>

 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>

    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


           <div class=""  id="pettyview" >  </div>

           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>
 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>

                      <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


           <div class=""  id="getresults" >  </div>

           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>
 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>



                         </div>
                    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->


<!-- jQuery 2.2.3 -->

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
<script>
 
function getvistdata(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getepisode.php?q='+odno,
       success : function(data){
                $('#getvist').html(data);
$("#impres2").modal("show");
                 }
});
}


function getstuff(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getepisode2.php?q='+odno,
       success : function(data){
                $('#pettyview').html(data);
$("#impres").modal("show");
                 }
});
}


function gettestresults(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getresults2.php?q='+odno,
       success : function(data){
                $('#getresults').html(data);
$("#impres4").modal("show");
                 }
});
}

</script>

     <script> 
          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/medicalvists.php',
                       success : function(data){
                                $('#medicalvists').html(data);
                                 }
               });
               }, 2000);

          </script>
 
 </body>
 </html>

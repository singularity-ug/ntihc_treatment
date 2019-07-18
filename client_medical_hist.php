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
  $("#INSTOCK").val(data[2]);
  $("#PROGRAMME").val(data[3]); 
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
	  "iDisplayLength": 20,
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
	  "iDisplayLength": 20,
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
     $('#example12').DataTable( {
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
     
   <div class="col-md-4" style=" background-color:transparent;">  
    <ul class="nav nav-tabs" style="border: 0px;"> 
    
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>  
      <td style="width:80%; border: 0px; background-color:transparent;">  <a data-toggle="tab" href="#tab1"> 
       <center>  <br> 
         Completed lab results / Treatment room orders&nbsp;
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
     
	</td>
	
	 <td style="width:20%; border: 0px; background-color:transparent;">   
     
	</td>
	 
 </tbody>
 </table>
   </ul>   
        <div class="panel-body">	
        <div class="widget-content tab-content" style="border:0px;" >  
            <div id="tab1" class="tab-pane active">  
        
<table id="example0111" class="table table-stripped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
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
                                   AND TESTSTATUS ='COMPLETED' AND MEDICAL ='1' AND LABVIST ='1' 
								   AND LABRESULTREVIEW ='NOTAPPLICABLE'
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
   
          <div class="col-md-8" style=" background-color:transparent;">  
               
			   
			  <center style="color:#000; font-weight:bold; font-size:12px;font:bold 14px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff;">
			 NTIHC CLIENT MEDICAL CARD</center><br>
			   
			              
   <?php 
   $id =  $_GET['NTIHCNO'];   
  $DATECREATED = '';
  $FIRSTNAME = '';
  $LASTNAME  = '';
  $OTHERNAME = '';
  $SEX = '';
  $AGE = '';
  $AGE1 = ''; 
  $SCHOOLINGSTATUS = '';
  $HIGHESTLEVELOFEDUCATION = '';
  $MARITALSTATUS = '';
  $EMPLOYMENTSTATUS = '';
  $DISTRICT = '';
  $DIVISION = '';
  $PLACEOFRESIDENCE = '';
  $PHONECONTACT = '';
  $MOTHERFIRSTNAME = '';
  $MOTHERLASTNAME='';
  $FATHERFIRSTNAME='';
  $FATHERLASTNAME='';
  $LIVINGWITH='';
  $HEAREDABOUTNTIHC='';
  $REGISTEREDBY='';
  $REGISTERACCOUNT=''; 
  $NTIHCNO='';  
  $RELIGION=''; 
   $TRIBE='';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";

 $res = $conn->query($sql);
 
 if($res){}
 else{echo $conn->error; exit();}

     while($row=$res->fetch_assoc()){
	  
	 $NTIHCNO     = $row['NTIHCNO'];  
	 $DATECREATED = $row['DATECREATED'];
     $FIRSTNAME   = $row['FIRSTNAME'];
     $LASTNAME    = $row['LASTNAME'];
     $OTHERNAME   = $row['OTHERNAME'];
     $SEX         = $row['SEX'];
     $AGE         = $row['AGE'];
	 $AGE1        = $row['AGE1'];
     $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS'];
     $HIGHESTLEVELOFEDUCATION = $row['HIGHESTLEVELOFEDUCATION'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EMPLOYMENTSTATUS = $row['EMPLOYMENTSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $DIVISION = $row['DIVISION'];
     $PLACEOFRESIDENCE = $row['PLACEOFRESIDENCE'];
     $PHONECONTACT = $row['PHONECONTACT'];
     $MOTHERFIRSTNAME  = $row['MOTHERFIRSTNAME'];
     $MOTHERLASTNAME=$row['MOTHERLASTNAME'];
     $FATHERFIRSTNAME=$row['FATHERFIRSTNAME'];
     $FATHERLASTNAME=$row['FATHERLASTNAME'];
     $LIVINGWITH =$row['LIVINGWITH'];
     $HEAREDABOUTNTIHC=$row['HEAREDABOUTNTIHC'];
     $REGISTEREDBY=$row['REGISTEREDBY']; 
	 $RELIGION=$row['RELIGION']; 
	  $TRIBE=$row['TRIBE'];  
      } 
	 
     ?>
	 
	
    
    <form id="form1" class="form-horizontal" action=" " method="POST" style="height:auto; font-weight:normal;"> 
         <div class="col-sm-12">  <div class="panel-body">  
        
		   <div class="col-sm-4" style=" background-color:transparent; ">  
	
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; 
		font-size: 12px; text-align:left;border: 0px;" width="100%">
        <thead> <tr> 
			    <th style="width:40%;border:0px;">Enroll date </th> 
				<th style="width:60%;border:0px;"> <input type="text"  name="DATECREATED"  value="<?php echo $DATECREATED;?>" 
					readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				</th>  
                </tr>
			    </table>
				
			 
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">NTIHC&NO. </th>
			 
				<th style="width:60%;border:0px;"> <input type="text"  name="NTIHCNO"  value="<?php echo $NTIHCNO;?>" 
				required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">First name</th>
			 
				<th style="width:60%;border:0px;"> <input type="text"   name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" 
					readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Last name</th>
			 
				<th style="width:60%;border:0px;"> <input type="text"    name="LASTNAME"  value="<?php echo $LASTNAME;?>" 
				   readonly="readonly"style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Other name</th>
			 
				<th style="width:60%;border:0px;"> <input type="text"  name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" 
				   readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Age</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="AGE1" id="AGE1"  value="<?php echo $AGE1;?>" 
					readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
			  
 
 
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Gender</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="SEX" value="<?php echo $SEX;?>" 
						readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
			  </div>
			  
		    <div class="col-sm-4" style=" background-color:transparent; ">  
			
			 
			  
		  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Schooling</th>
			 
				<th style="width:60%;border:0px;"> <input type="text"  name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" 
					readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
		  
 
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Education</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" 
					   readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
		  
              
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Tribe</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="TRIBE" value="<?php echo $TRIBE;?>" 
							  readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>  
                
                
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Religion</th>
			 
				<th style="width:60%;border:0px;"> <input type="text"  name="RELIGION" value="<?php echo $RELIGION;?>" 
							  readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>  
			
		 
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Marital status</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" 
							  readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>  
               
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Employment</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>"
				   readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>  
                
				 

 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">District</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="DISTRICT" value="<?php echo $DISTRICT;?>" 
				   readonly="readonly"style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>  
                 
				
               </div>
			  
		    <div class="col-sm-4" style=" background-color:transparent; ">  
			
                  

               
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Division</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="DIVISION" value="<?php echo $DIVISION;?>" readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>  
                  
             
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Residence</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE"   value="<?php echo $PLACEOFRESIDENCE;?>" 
					readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>     

                  
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Phone&nbsp;No.</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="PHONECONTACT"  id="PHONECONTACT"   value="<?php echo $PHONECONTACT;?>" 
					readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>     
   
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Mother&nbsp;name</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME"  value="<?php echo $MOTHERFIRSTNAME;?>"  
					readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
             
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Father&nbsp;name</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME"  value="<?php echo $FATHERFIRSTNAME;?>"  
					readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
		  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
	  <th style="width:40%;border:0px;">Living&nbsp;with</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>"
				 readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table> 
              
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
	  <th style="width:40%;border:0px;">Enrolled&nbsp;by</th>
			 
				<th style="width:60%;border:0px;"> <input type="text" name="REGISTEREDBY" value="<?php echo $REGISTEREDBY;?>"
				 readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> 
				 </th> 
                
              </tr>
			  </table>      
             
		  </form> 
	  </div> </div>
	  
	 
	  
	   <?php 
  $id =  $_GET['NTIHCNO'];    
  $EID = ''; 
  $CREATEDDATE = '';
  $VISTBY = '';   
  $dnx   = array();
  $fqx    = array();   
  $NTIHCNO = '';    
  $COUNSELLINGDONE = '';
  $URGENCYTYPE = '';
  $VISTBY = '';
  $PROBLEMBRIEF = '';
  $ACTIONTAKEN = '';
  $SERVICE_EPISODE = '';
  $USERINITIAL = '';
  $REGISTERACCOUNT = '';
  $AGE1 = '';
  $AGE_GROUP = '';
  $SEX = '';
  $SCHOOLING = '';

  $COUNSELLINGDONE = '';
  $URGENCYTYPE = '';
  $PROBLEMBRIEF = '';
  
      
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM clientsexamination WHERE TIMESTAMP >='$date' 
                                   AND NTIHCNO = '$id' GROUP BY DATECREATED DESC";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $EID          = $row['EID'];    
	 $VISTBY      = $row['VISTBY'];  
     $dnx[]    = $row['MEDICALTOPIC']; 
	 $fqx[]    = $row['MEDICALPROBLEM'];    
	 $RSVNID    = $row['RSVNID'];    
	 $DATECREATED      = $row['DATECREATED']; 
     $NTIHCNO  = $row['NTIHCNO'];
	 $COUNSELLINGDONE = $row['COUNSELLINGDONE'];
     $URGENCYTYPE    = $row['URGENCYTYPE'];
	 $VISTBY  = $row['VISTBY'];
	 $PROBLEMBRIEF          = $row['PROBLEMBRIEF'];
	 $ACTIONTAKEN          = $row['ACTIONTAKEN'];
	 $SERVICE_EPISODE          = $row['SERVICE_EPISODE'];
	 $USERINITIAL  = $row['USERINITIAL'];
	 $REGISTERACCOUNT          = $row['REGISTERACCOUNT'];
	 $AGE1          = $row['AGE1'];
	 $AGE_GROUP          = $row['AGE_GROUP'];
	 $SEX          = $row['SEX'];
	 $SCHOOLING          = $row['SCHOOLING'];	 

   $COUNSELLINGDONE          = $row['COUNSELLINGDONE'];
   $URGENCYTYPE          = $row['URGENCYTYPE'];
   $PROBLEMBRIEF          = $row['PROBLEMBRIEF']; 
      } 
     ?>
		 

      <form class="form-horizontal" action="" method="post" style="height:auto;"/>
				
				       <div class="col-sm-12" style="background-color:transparent;">   
	
 <div class="col-sm-4" style="background-color:transparent;"><hr>
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			    <th style="width:40%;border:0px;">Service date </th>
				<th style="width:60%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED" value="<?php echo $DATECREATED;?>" 
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>
 
              </tr></thead>
			  </table>
			  
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr>  

	            <th style="width:40%;border:0px;">Vist by </th>
				<th style="width:60%;border:0px;"> <select  name="VISTBY" id="VISTBY"  value="<?php echo $VISTBY;?>"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                  <option value="<?php echo $VISTBY;?>"><?php echo $VISTBY;?></option>
				                                         <option>YOUTH</option>
                                                   <option>PARENT</option>
                                                   <option>YOUTH AND PARENT</option>
                                                   <option>COUPLE</option>
                                                   </select>
				</th>
              </tr></thead>
			  </table> 
			  
			  </div>
			  
			
 <div class="col-sm-8" style="background-color:transparent;"><hr>  
		<div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
		  <legend style="color:#000; font-weight:bold; font-size:12px;">Examination</legend>  
  	  
		 <table class="table table-tabled" id="mytable11" style="font-weight:normal;margin-top: -13px; ">
    <thead>
      <tr>
      <th>*</th> 
   <th>PROBLEM CATEGORY</th> 
   <th>DESCRIPTION</th>
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
												  
												  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>"  
                                                   style= "width:100%; background-color:transparent;"/></td>  
                                                   
												   
                                                  <td> <input  name="fqx[]" readonly="" type="text" value="<?php  echo $fqx[$s]; ?>"  
                                                   style= "width:100%; background-color:transparent;"/></td>
                                                   
                                                  
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
								
						</div></div>
								   
			 <div class="col-sm-4" style="background-color:transparent;">
			 
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>
		 <td style="width:100%;border:0px;">Problem brief</td>  
   
        </tr>
       </tbody>
      </table>	
	  			
		 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
            <td style="width:100%;border:0px;">  <textarea name="PROBLEMBRIEF" readonly="readonly" style="width:100%; background-color:transparent;" ><?php echo $PROBLEMBRIEF;?>  
				</textarea> </th> 
   
        </tr>
       </tbody>
      </table>	
	  <p></p>				
	    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
		
            <td style="width:40%;border:0px;">Urgency</td>
            <td style="width:60%;border:0px;"> <input type="text"  name="URGENCYTYPE" id="URGENCYTYPE" value="<?php  echo $URGENCYTYPE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
 
            </td>
			</tr> 
       </thead>
      </table>
			
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>
		 <td style="width:40%;border:0px;"> Counselling done</td>
             <td style="width:60%;border:0px;">   <input type="text"  name="COUNSELLINGDONE" id="COUNSELLINGDONE" value="<?php  echo $COUNSELLINGDONE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>  
        </tr>
       </thead>
      </table>	
	  
	  
			  
	 </div> 
	  
 <div class="col-sm-4"> 
 <?php 
  $id =  $_GET['NTIHCNO'];    
  $CID = ''; 
  $CREATEDDATE = ''; 
  $NTIHCNO = '';      
  $HCGPOSITIVE = ''; 
  $HCGRESULTS = '';
  $HCGSTATUS = '';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM hcg WHERE NTIHCNO = '$id'";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $CID          = $row['CID'];      
	 $DATECREATED      = $row['DATECREATED']; 
     $NTIHCNO  = $row['NTIHCNO'];
	 $HCGRESULTS = $row['HCGRESULTS'];
	 $HCGSTATUS      = $row['HCGSTATUS'];  
	 $HCGPOSITIVE          = $row['HCGPOSITIVE'];     
      } 
     ?>
		  
 <p></p>  
 
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			  <td style="width:100%;border:0px; font-weight:bold; color:blue;">Is HCG required ?</td> 
              </tr></thead>
			  </table>
			  
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:100%;border:0px;">  <input type="text" name="HCGSTATUS" id="HCGSTATUS" 
			  value="<?php  echo $HCGSTATUS; ?>"  readonly="readonly" style="width:100%; font-weight:normal; background-color:transparent;"> </td>
              </tr></thead>
			  </table>
			   
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			  <td style="width:100%;border:0px; font-weight:bold; ">Results (if required)</td> 
              </tr></thead>
			  </table>
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:100%;border:0px;">  <input type="text" name="HCGRESULTS" id="HCGRESULTS"
			   value="<?php  echo $HCGRESULTS; ?>" readonly="" style="width:100%; font-weight:normal; background-color:transparent;"> </td>
              </tr></thead>
			  </table>
			  
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			  <td style="width:100%;border:0px; font-weight:bold;">Justification of results </td> 
              </tr></thead>
			  </table>
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:100%;border:0px;">  <input type="text" name="HCGPOSITIVE" id="HCGPOSITIVE" 
			   value="<?php  echo $HCGPOSITIVE; ?>" readonly="" style="width:100%; font-weight:normal; background-color:transparent;"> </td>
              </tr></thead>
			  </table> 
			  
		 </div> 
	  
 <div class="col-sm-4">	<p></p>    
		 
  <?php 
  $id =  $_GET['NTIHCNO'];    
  $RID = ''; 
  $CREATEDDATE = ''; 
  $NTIHCNO = '';       
  $HCGRESULTS = '';
  $FOLLOWUP = '';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsregistration WHERE NTIHCNO = '$id'";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $RID          = $row['RID'];      
	 $DATECREATED      = $row['DATECREATED']; 
     $NTIHCNO  = $row['NTIHCNO'];
	 $FOLLOWUP = $row['FOLLOWUP'];
	 $FOLLOWUPDATE      = $row['FOLLOWUPDATE'];     
      } 
     ?>
				 
			  	  <hr>
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			    <td style="width:100%;border:0px; font-weight:bold;background-color:transparent;">Follow-up requirement</td> 
              </tr>
			  </table>
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
				<td style="width:100%;border:0px;">
				<input type="text"  name="FOLLOWUP" id="FOLLOWUP" required="required" 
				 value="<?php  echo $FOLLOWUP; ?>" readonly="" 
        style="width:100%; font-weight:normal; background-color:transparent;">   </td>
              </tr>
			  </table>

			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			  <td style="width:100%;border:0px; font-weight:bold;background-color:transparent;">Follow up date if required</td> 
              </tr>
			  </table>  
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:100%;border:0px;"> <input type="text" name="FOLLOWUPDATE" id="FOLLOWUPDATE" 
			   value="<?php  echo $FOLLOWUPDATE; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
			  </table>  
			  
			   
                
 </div> </div>
  <?php 
  $id = $_GET['NTIHCNO'];   
  $RSVNID = ''; 
  $dnx    = array();
  $fqx    = array(); 
   $aa    = array(); 
  $DATECREATED = '';
  $NTIHCNO = '';   
  $TROOM_INITIATION = '';
  $TESTSTATUS = '';  
  
  $TESTEDBY = '';
  $LABTIMEOUT = '';   
  $LABTIMEIN = '';
  $USERINITIAL = '';   
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laborders WHERE NTIHCNO = '$id' AND REQUESTINGUNIT ='TREATMENT ROOM' 
 AND TESTSTATUS='COMPLETED'";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $RSVNID          = $row['RSVNID'];  
	 $DATECREATED      = $row['DATECREATED'];  
	 $dnx[]    = $row['TESTDESCRIPTION'];
     $fqx[]       = $row['LABRESULTS']; 
	 $aa[]    = $row['DATECREATED'];  
     $NTIHCNO  = $row['NTIHCNO']; 
	 $TROOM_INITIATION  = $row['TROOM_INITIATION']; 
	 $TESTSTATUS  = $row['TESTSTATUS']; 
	 
	  $TESTEDBY  = $row['TESTEDBY']; 
	  $LABTIMEOUT  = $row['LABTIMEOUT']; 
	 $LABTIMEIN  = $row['LABTIMEIN']; 
	 $USERINITIAL  = $row['USERINITIAL']; 
	    
      } 
     ?>
	 <div class="col-sm-12" style="background-color:transparent;"> 
  <div class="col-sm-4" style="background-color:transparent;">
  <p></p>
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:100%;border:0px;"><b>Lab order details</b></td> 
              </tr>
			  </table>  
			  <p></p>
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:40%;border:0px;">Test status</td>
			  
			  <td style="width:60%;border:0px;"> <input type="text" name="TESTSTATUS" id="TESTSTATUS" 
			   value="<?php  echo $TESTSTATUS; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
			  </table>  
			  
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:40%;border:0px;">Time in</td>
			  
			  <td style="width:60%;border:0px;"> <input type="text" name="LABTIMEIN" id="LABTIMEIN" 
			   value="<?php  echo $LABTIMEIN; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
			  </table>  
			   
			  
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:40%;border:0px;">Time out</td>
			  
			  <td style="width:60%;border:0px;"> <input type="text" name="LABTIMEOUT" id="LABTIMEOUT" 
			   value="<?php  echo $LABTIMEOUT; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
			  </table>  
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:40%;border:0px;">Initiaded by</td>
			  
			  <td style="width:60%;border:0px;"> <input type="text" name="USERINITIAL" id="USERINITIAL" 
			   value="<?php  echo $USERINITIAL; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
			  </table> 
			  
			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:40%;border:0px;">Tested by</td>
			  
			  <td style="width:60%;border:0px;"> <input type="text" name="TESTEDBY" id="TESTEDBY" 
			   value="<?php  echo $TESTEDBY; ?>" readonly=""  style="width:100%;background-color:transparent;"></td>
              </tr>
			  </table>   
  
  </div>
 
  <div class="col-sm-8" style="background-color:transparent;">
  <div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
		  <legend style="color:#000; font-weight:bold; font-size:12px;">Lab results</legend> 
		  
	
            
	  <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; ">
      <thead>
      <tr>  
       <th>*</th> 
       <th>TEST DESCRIPTION </th>  
       <th>LAB RESULTS</th> 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
												    
             <td> <input name="dnx[]"  type="text" value="<?php  echo $dnx[$s]; ?>" required="" 
												 style= "width:100%; background-color:transparent; "/>
                                                 </td> 
												 
             <td> <input  name="fqx[]" type="text" value="<?php echo $fqx[$s]; ?>"  required="" 
												  style= "width:100%; background-color:transparent; "/> 
												  </td> 
												  
		     
                                                   
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
  </tbody>
  </table>  
    
  </div></div>
  
   <div class="col-sm-12" style="background-color:transparent;"><p></p>
  <div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
		  <legend style="color:#000; font-weight:bold; font-size:12px;">Prescription details</legend> 
		  
		 
	   
  <?php
  $id = $id ;
  $DID = '';
  $CREATEDDATE = '';
  $imp   = array();
  $cur    = array();
  $bix   = array();
  $max    = array();
  $mixy   = array();
  $NTIHCNO = '';
  $DISPENSEDBY = '';
  $REQUESTINGUNIT = '';
  $PRESCRIPTIONCOMMENT = '';
  $CAPTUREDBY = '';
$date = date("Y-m-d").' 00:00:00';
 $sql  = "SELECT * FROM prescription WHERE TIMESTAMP >='$date' AND NTIHCNO = '$id' ";

 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){

     $DID          = $row['DID'];
	 $DATECREATED      = $row['DATECREATED'];
     $imp[]    = $row['DRUGNAME'];
	 $cur[]    = $row['FREQUENCY'];
     $bix[]       = $row['TIMES'];
	 $max[]    = $row['PERIOD'];
     $mixy[]       = $row['QTYPRESCRIBED'];

     $NTIHCNO  = $row['NTIHCNO'];
	 $DISPENSEDBY = $row['DISPENSEDBY'];
     $REQUESTINGUNIT    = $row['REQUESTINGUNIT'];
	 $PRESCRIPTIONCOMMENT    = $row['PRESCRIPTIONCOMMENT'];
	 $CAPTUREDBY    = $row['CAPTUREDBY'];
      }
     ?>

 <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; ">
      <thead>
      <tr> 
      <th>*</th>
   <th style= "width:60%;" >DRUG</th> 
   <th style= "width:10%;" >QTY</th> 
   <th style= "width:10%;" >TIMES</th> 
   <th style= "width:10%;" >PERIOD</th> 
   <th style= "width:10%;" >TOTAL</th> 
      </tr>
      </thead>
      <tbody>
      <?php  $tot = count($imp); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($mixy[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  <td> <input  name="imp[]" readonly="" type="text" value="<?php  echo $imp[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
                                                   
                                                  <td> <input  name="cur[]" readonly="" type="text" value="<?php  echo $cur[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>
												   
                                                   <td> <input  name="bix[]" readonly="" type="text" value="<?php  echo $bix[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                                   
                                                  <td> <input  name="max[]" readonly="" type="text" value="<?php  echo $max[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
												   
												   <td> <input  name="mixy[]" readonly="" type="text" value="<?php  echo $mixy[$s]; ?>"  
                                                   style= "width:100%; background-color:#fff;"/></td>  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>
								 
		  
		  
		  
		  </div>
  
   <p></p>
					
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			    <th style="width:100%;border:0px; background-color:transparent;">Prescription comment </th> 
              </tr>
			  </table>
			  
			<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
				<th style="width:100%;border:0px;"> <textarea name="PRESCRIPTIONCOMMENT" id ="PRESCRIPTIONCOMMENT"
				required="required"  style="width:100%; font-weight:normal; background-color:transparent;"> <?php  echo $PRESCRIPTIONCOMMENT; ?></textarea> </th>
              </tr>
			  </table>
			  
			 </div> 
			   
			 <div class="col-sm-6" style="background-color:transparent;">  <p></p>
			 
			  
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead>  
    <tr>  
        <td style="width:40%;border:0px;background-color:transparent;">Prescribed by </td>
        <td style="width:60%;border:0px;">  <input type="text"  name="CAPTUREDBY" id="CAPTUREDBY" value="<?php  echo $CAPTUREDBY; ?>"  readonly="readonly"
        style="width:100%; font-weight:normal; background-color:transparent;"> 
       </td>
       </tr>
       </table>  
		
		 </div> 
			   
		 <div class="col-sm-6" style="background-color:transparent;"> <p></p>
			 	  
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  
	border: 0px;text-align:left;" width="100%">
    <thead>  
    <tr>  
        <td style="width:40%;border:0px;background-color:transparent;">Prescription date </td>
        <td style="width:60%;border:0px;">  <input type="text"  name="DATECREATED" id="DATECREATED" 
		value="<?php  echo $DATECREATED; ?>"  readonly="readonly"
        style="width:100%; font-weight:normal; background-color:transparent;"> 
       </td>
       </tr>
       </table>  
	   
	   </div> 
	    
  <?php
  $id = $_GET['NTIHCNO'];   
  $NTIHCNO = ''; 
  $REFTUNER  = '';
  $MEDICALREFERRAL = '';
  $SERVICEREFERREDFOR = '';    
  $RID='';  
      
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM referral Where NTIHCNO = '$id'";

   $res = $conn->query($sql);

   while($row=$res->fetch_assoc()){
   $NTIHCNO = $row['NTIHCNO'];
   $REFTUNER = $row['REFTUNER'];  
   $MEDICALREFERRAL=$row['MEDICALREFERRAL'];   
   $SERVICEREFERREDFOR=$row['SERVICEREFERREDFOR'];   
   $id=$row['RID']; 
   $RID=$row['RID'];
   } 
   ?>
			   
	<div class="col-sm-6" style="background-color:transparent;"> <p></p>  
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  <td style="width:100%;border:0px; font-weight:bold;">Is medical referal required? </td> </td>
              </tr>
			  </table>

 </div> 
<div class="col-sm-6" style="background-color:transparent;"> <p></p>  </div>

 <div class="col-sm-6" style="background-color:transparent;"> <p></p>
 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>   <td style="width:100%;border:0px;">  <input type="text" name="REFTUNER" id="REFTUNER" readonly=""  
			  value="<?php  echo $REFTUNER; ?>" style="width:100%; font-weight:normal; background-color:transparent;"> </td>
              </tr>
			  </table>  
	   </div>
			   
	<div class="col-sm-6" style="background-color:transparent;"> <p></p> 
			 	 	

			   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			  <td style="width:100%;border:0px; font-weight:bold;">Referral centre (If required)</td> 
			  </td>
              </tr>
			  </table>
			  
			   </div>
			   
	<div class="col-sm-6" style="background-color:transparent;"> <p></p> 
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			 <td style="width:100%;border:0px;"> 
          <input type="text"  name="MEDICALREFERRAL" id="MEDICALREFERRAL" readonly=""  
		 value="<?php  echo $MEDICALREFERRAL; ?>" style="width:100%; font-weight:normal; background-color:transparent;">
			  </td>
              </tr>
			  </table>
			  
			   </div>
			   
	<div class="col-sm-6" style="background-color:transparent;"> <p></p> 
	    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			  <td style="width:100%;border:0px; font-weight:bold;background-color:transparent;">Service referred </td> 
              </tr>
			  </table>
 </div>
			   
	<div class="col-sm-6" style="background-color:transparent;"> <p></p> 
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:100%;border:0px;"> 
              <input type="text" name="SERVICEREFERREDFOR" id="SERVICEREFERREDFOR" readonly=""  
			 value="<?php  echo $SERVICEREFERREDFOR; ?>"  style="width:100%; font-weight:normal; background-color:transparent;">
			  </td>
              </tr>
			  </table>
	 </div>
			   
	<div class="col-sm-6" style="background-color:transparent;"> <p></p> 
 
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr> 
			  <td style="width:100%;border:0px;">Action taken </td> 
              </tr>
			  </table>
 </div>
			   
	<div class="col-sm-6" style="background-color:transparent;"> <p></p> 
 

	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	border: 0px;text-align:left;" width="100%">
		<thead> 
		<tr>  
			  <td style="width:100%;border:0px;"> 
             <input type="text" name="ACTIONTAKEN" id="ACTIONTAKEN" readonly=""  
			 style="width:100%; font-weight:normal; background-color:transparent;">
			 </td>
              </tr>
			  </table>   
  
  
  
  <?php
  $id = $_GET['NTIHCNO'];   
  $NTIHCNO = ''; 
  $RSVNID  = '';
  $CLIENTNAME = '';
  $AGE = '';    
  $SCHOOLING='';  
  $SEX='';
  $RID='';
  $VISTTYPE='';
  $DATECREATED='';
  $SERVICEPROVIDERACCOUNT='';
  $AGE1=''; 
   $AGE_GROUP='';
      
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM cmpatientsregistration
                   Where SERVICEPROVIDERACCOUNT ='$rm'
				   AND PRESCRIPTION = '0' 
				   AND SERVICETYPE ='MEDICAL SERVICES' 
				   AND INSVCSTATUS ='TREATMENT ROOM'
				   ORDER BY RID DESC LIMIT 1";

   $res = $conn->query($sql);

   while($row=$res->fetch_assoc()){
   $NTIHCNO = $row['NTIHCNO'];
   $RSVNID = $row['RSVNID'];  
   $CLIENTNAME=$row['CLIENTNAME'];   
   $SCHOOLING=$row['SCHOOLING']; 
   $VISTTYPE=$row['VISTTYPE']; 
   $DATECREATED=$row['DATECREATED']; 
   $SERVICEPROVIDERACCOUNT=$row['SERVICEPROVIDERACCOUNT']; 
   $SEX   = $row['SEX']; 
   $AGE1   = $row['AGE1']; 
   $AGE_GROUP   = $row['AGE_GROUP']; 
   $id=$row['RID']; 
   $RID=$row['RID'];
   } 
   ?>
 
				 
		<input type="hidden" name="AGE1" id="AGE1"  value="<?php echo $AGE1; ?>"> 
        <input type="hidden" id="AGE_GROUP" name="AGE_GROUP"  value="<?php echo $AGE_GROUP; ?>">  
        <input type="hidden" id="RSVNID" name="RSVNID"  value="<?php echo $RSVNID; ?>">
		<input type="hidden" name="TIMEIN" id="CHECKIN" >  
		<input type="hidden" name="SEX" id="SEX"  value="<?php echo $SEX; ?>"> 
		<input type="hidden" name="RID" id="RID"  value="<?php echo $RID; ?>"> 
		<input type="hidden" name="SERVICEPROVIDERACCOUNT" id="SERVICEPROVIDERACCOUNT"  
		value="<?php echo $SERVICEPROVIDERACCOUNT; ?>">
		<input type="hidden" name="RESERVATIONSTATUS" id="RESERVATIONSTATUS" value="CREATED">
		
		<input type="hidden"  name="DATECREATED" id="myDATECREATED" 
				value="<?php echo $DATECREATED; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  
				
			 
		 <input type="hidden"  name="CLIENTNAME" id="CLIENTNAME" 
				value="<?php echo $CLIENTNAME; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  
		
		 <input type="hidden"  name="NTIHCNO" id="NTIHCNO" 
				value="<?php echo $NTIHCNO; ?>" readonly=""
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  
			   
		  <input type="hidden"  name="SCHOOLING" id="SCHOOLING" 
				value="<?php echo $SCHOOLING; ?>"
				required="required" style="width:100%; font-weight:normal; background-color:transparent;">  
				 
			   
			   </form>
		
		 
		  
		  <br> <br> <br> <br> <br> <br>
			  
	   
		 
		</div>    
		 
 </div></div></div> 
   
  		                                                              
 
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

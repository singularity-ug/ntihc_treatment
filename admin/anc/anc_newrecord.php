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
<html><head>
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
             	 font-size:12px;
             	 color:#000000;
				 font-weight:normal;
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
  $PLACEOFRESIDENCE = '';   
  $RELIGION = ''; 
  $TRIBE = '';   
  $MARITALSTATUS = ''; 
  $EMPLOYMENTSTATUS = '';    
  
  
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
	 
	 $PLACEOFRESIDENCE = $row['PLACEOFRESIDENCE']; 
	 $RELIGION  = $row['RELIGION']; 
	 $TRIBE  = $row['TRIBE'];
	 $MARITALSTATUS = $row['MARITALSTATUS']; 
	 $EMPLOYMENTSTATUS  = $row['EMPLOYMENTSTATUS'];   
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
  </head>
   
      <!-- title row -->
      <div class="row">
       <body class="  ">
        <script>
function myFunction() {
    window.print();
}
</script> 

                  <!-- Info boxes --> 
                    
     <p style="text-align:center;"> NEW CLIENT ANTE-NATAL CARD</p>  
    <div class="container-fluid" style="background-color: #fff;">

        <div class="widget-box">
          <div class="widget-title" > <span class="icon"> <i class="icon-pencil"></i> </span> 
          </div>
          <div class="widget-content nopadding" style="background-color:#fff;" >
            <form id="form-wizard" class="form-horizontal" method="post"  action="anc_process.php" style="background-color:#fff;">

              <div id="form-wizard-1" class="step" >

       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Health unit</th>
				<th style="width:20%;border:0px;"> <input type="text" id="username" name="HEALTHUNIT" value="NTIHC" required="required"
				  style="width:100%; font-weight:normal; background-color:#fff; "> </th>


                 <th style="width:13.33333333%;border:0px;">Reg No. </th>
				<th style="width:20%;border:0px;"> <input type="text" id="REGNO" name="REGNO" required="required" value="<?php  echo $NTIHCNO; ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff; "> </th>
				 
				 <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>">

              <th style="width:33.33333333%;border:0px; font-weight:bold; text-align:center;font-weight:bold;">  <b>PREVIOUS ILLNESS</b>
              </tr>
			  </table>

                  <input type="hidden" id="DATECREATED" name="DATECREATED" value="<?php echo date('Y-m-d'); ?>" >


              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Name</th>
				<th style="width:20%;border:0px;"> <input type="text" id="CLIENTNAME" name="CLIENTNAME" required="required"
          value="<?php  echo $CLIENTNAME; ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Phone number</th>
				<th style="width:20%;border:0px;"> <input type="text" id="PHONECONTACT" name="PHONECONTACT"  
          value="<?php  echo $PHONECONTACT; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

    
     
                <th style="width:33.33333333%;border:0px;font-weight:bold;">MEDICAL</th>

              </tr>
			  </table>

                <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Date of birth</th>
				<th style="width:20%;border:0px;"> <input type="text" id="DATEOFBIRTH" name="DATEOFBIRTH" required="required" value="<?php  echo $AGE; ?>"
				style="width:100%; font-weight:normal; background-color:#fff;"> </th>
 <?php
  $id = $_GET['q'];
  $NTIHCNO = '';
  $LCONE = '';
  $CARDIACDISEASE = ''; 
  $KIDNEYDISEASE = '';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM antenatalcare  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
	 $LCONE = $row['LCONE']; 
	 $CARDIACDISEASE = $row['CARDIACDISEASE']; 
	 $KIDNEYDISEASE = $row['KIDNEYDISEASE'];   
      }
  ?>


                <th style="width:13.33333333%;border:0px;">LC1</th>
				<th style="width:20%;border:0px;"> <input type="text" id="LCONE" name="LCONE" required="required" value="<?php  echo $LCONE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                <th style="width:10%;border:0px;">Cardiac disease</th>
				<th style="width:7%;border:0px;"> <input type="text" id="CARDIACDISEASE" name="CARDIACDISEASE" required="required" value="<?php  echo $CARDIACDISEASE; ?>"
			    style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">Kidney disease</th>
				<th style="width:7%;border:0px;"> <input type="text" id="KIDNEYDISEASE" name="KIDNEYDISEASE" required="required" value="<?php  echo $KIDNEYDISEASE; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Village</th>
				<th style="width:20%;border:0px;"> <input type="text" id="VILLAGE" name="VILLAGE" required="required" value="<?php  echo $PLACEOFRESIDENCE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

<?php
  $id = $_GET['q'];
  $NTIHCNO = '';
  $HYPERTENSION = '';
  $PARISH = ''; 
  $TB = '';
  $RELIGION = '';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM antenatalcare  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
	 $PARISH = $row['PARISH']; 
	 $HYPERTENSION = $row['HYPERTENSION']; 
	 $TB = $row['TB'];   
   $RELIGION = $row['RELIGION'];   
      }
  ?>

        <th style="width:13.33333333%;border:0px;">Parish</th>
				<th style="width:20%;border:0px;"> <input type="text" id="PARISH" name="PARISH" required="required" value="<?php  echo $PARISH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                <th style="width:10%;border:0px;">Hypertension</th>
				<th style="width:7%;border:0px;"> <input type="text" id="HYPERTENSION" name="HYPERTENSION" required="required"
          value="<?php  echo $HYPERTENSION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">TB <P style="color:#FFF;">..........................</P></th>
				<th style="width:7%;border:0px;"> <input type="text" id="TB" name="TB" required="required" value="<?php  echo $TB; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Occupation</th>
				<th style="width:20%;border:0px;"> <input type="text" id="CLIENTOCCUPATION" name="CLIENTOCCUPATION" 
         value="<?php echo $CLIENTOCCUPATION; ?>"  
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

 
  
                 <th style="width:13.33333333%;border:0px;">Religion</th>
				<th style="width:20%;border:0px;"> <input type="text" id="RELIGION" name="RELIGION"  
          value="<?php echo $RELIGION; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

        <?php
  $id = $_GET['q'];
  $NTIHCNO = '';
  $ANYHOSPITALIZATION = '';
  $ASTHMA = ''; 
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM antenatalcare  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
	 $ANYHOSPITALIZATION = $row['ANYHOSPITALIZATION']; 
	 $ASTHMA = $row['ASTHMA']; 
	   
      }
  ?>

                <th style="width:10%;border:0px;">Any hospitalization</th>
				<th style="width:7%;border:0px;"> <input type="text" id="ANYHOSPITALIZATION" name="ANYHOSPITALIZATION" required="required" value="<?php  echo $ANYHOSPITALIZATION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:10%;border:0px;">Asthma</th>
				<th style="width:7%;border:0px;"> <input type="text" id="ASTHMA" name="ASTHMA" required="required" value="<?php  echo $ASTHMA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
			  </table>

              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>


<?php
  $id = $_GET['q'];  
  
  $NTIHCNO = '';   
  $SCHOOLINGSTATUS = '';    
  $TRIBE = '';    
  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
   
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO']; 
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS']; 
	 $TRIBE  = $row['TRIBE']; 
      } 
  ?>
  
                <th style="width:13.33333333%;border:0px;">Education</th>
				<th style="width:20%;border:0px;"> <input type="text" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" required="required" value="<?php  echo $SCHOOLINGSTATUS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Tribe</th>
				<th style="width:20%;border:0px;"> <input type="text" id="TRIBE" name="TRIBE" required="required" value="<?php  echo $TRIBE; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

        <?php
  $id = $_GET['q'];
  $NTIHCNO = '';
  $NEXTOFKINRELATIONSHIP = '';
  $BLEEDINGTHREE = '';
  $DIABETESONE = '';
  $NEXTOFKINCONTACT = '';
  $NEXTOFKIN = '';
  $EPILEPSYTWO = '';
  $BLEEDINGTWO = '';
  $STI = '';
  $SICKLECELLS = '';
  $OCCUPATION = '';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM antenatalcare  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
   $NTIHCNO = $row['NTIHCNO'];
	 $NEXTOFKINRELATIONSHIP = $row['NEXTOFKINRELATIONSHIP']; 
	 $BLEEDINGTHREE = $row['BLEEDINGTHREE'];
	 $DIABETESONE = $row['DIABETESONE']; 
	 $NEXTOFKINCONTACT = $row['NEXTOFKINCONTACT'];  
	 $NEXTOFKIN = $row['NEXTOFKIN'];
	 $EPILEPSYTWO = $row['EPILEPSYTWO']; 
	 $BLEEDINGTWO = $row['BLEEDINGTWO']; 
	 $STI = $row['STI']; 
	 $SICKLECELLS = $row['SICKLECELLS']; 
   $OCCUPATION = $row['OCCUPATION']; 
	   
      }
  ?>

                <th style="width:10%;border:0px;">STI</th>
				<th style="width:7%;border:0px;"> <input type="text" id="STI" name="STI" required="required" value="<?php  echo $STI; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                  <th style="width:10%;border:0px;">Sickle Cell disease</th>
				<th style="width:7%;border:0px;"> <input type="text" id="SICKLECELLS" name="SICKLECELLS" required="required" value="<?php  echo $SICKLECELLS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Marital status</th>
				<th style="width:20%;border:0px;"> <input type="text" id="MARITALSTATUS" name="MARITALSTATUS" required="required" value="<?php  echo $MARITALSTATUS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>
   
                 <th style="width:13.33333333%;border:0px;"></th>
				<th style="width:20%;border:0px;">  </th>

                <th style="width:10%;border:0px;"> </th>
				<th style="width:7%;border:0px;"> <input type="hidden" id="EPILEPSYTWO" name="EPILEPSYTWO"  value="<?php  echo $EPILEPSYTWO; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;"></th>
				<th style="width:7%;border:0px;"> <input type="hidden" id="BLEEDINGTWO" name="BLEEDINGTWO" required="required" value="<?php  echo $BLEEDINGTWO; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

              </tr>
			  </table>

        
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Next of Kin</th>
				<th style="width:20%;border:0px;"> <input type="text" id="NEXTOFKIN" name="NEXTOFKIN" required="required" value="<?php  echo $NEXTOFKIN; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">Phone number</th>
				<th style="width:20%;border:0px;"> <input type="text" id="NEXTOFKINCONTACT" name="NEXTOFKINCONTACT" value="<?php  echo $NEXTOFKINCONTACT; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                    <th style="width:10%;border:0px;">Diabetes</th>
				<th style="width:7%;border:0px;"> <input type="text" id="DIABETESONE" name="DIABETESONE" required="required" value="<?php  echo $DIABETESONE; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                         <th style="width:10%;border:0px;">Bleeding</th>
				<th style="width:7%;border:0px;"> <input type="text" id="BLEEDINGTHREE" name="BLEEDINGTHREE" required="required" value="<?php  echo $BLEEDINGTHREE; ?>"
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

  
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Relationship</th>
				<th style="width:20%;border:0px;"> <input type="text" id="NEXTOFKINRELATIONSHIP" required="required" name="NEXTOFKINRELATIONSHIP" value="<?php  echo $NEXTOFKINRELATIONSHIP; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;">  </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:33.33333333%;border:0px;font-weight:bold;">SURGICAL</th>

              </tr>
			  </table>

	   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>
                <th style="width:13.33333333%;border:0px;">Occupation</th>
				<th style="width:20%;border:0px;"> <input type="text" id="OCCUPATION" name="OCCUPATION"  required="required" 
          value="<?php  echo $OCCUPATION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>




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
 
 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                 <th style="width:10%;border:0px;">Operations</th>
				<th style="width:7%;border:0px;"> <input type="text" id="OPERATIONS" name="OPERATIONS" required="required" value="<?php  echo $OPERATIONS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">Blood transfusions</th>
				<th style="width:7%;border:0px;"> <input type="text" id="BLOODTRANSFUSION" name="BLOODTRANSFUSION" required="required" value="<?php  echo $BLOODTRANSFUSION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Address</th>
				<th style="width:20%;border:0px;"> <input type="text" id="ADDRESS" name="ADDRESS" required="required" value="<?php  echo $ADDRESS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:10%;border:0px;">Why?</th>
				<th style="width:24%;border:0px;"> <input type="text" id="REASONFORBLOODTRANSFUSION" name="REASONFORBLOODTRANSFUSION" required="required"
                value="<?php  echo $REASONFORBLOODTRANSFUSION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;">Gravida</th>
				<th style="width:20%;border:0px;"> <input type="text" id="GRAVIDA" name="GRAVIDA" required="required" value="<?php  echo $GRAVIDA; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:6.666666665%;border:0px;">Para</th>
				<th style="width:10%;border:0px;"> <input type="text" id="PARA" name="PARA" required="required" value="<?php  echo $PARA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                  <th style="width:6.666666665%;border:0px;">Abortions</th>
				<th style="width:10%;border:0px;"> <input type="text" id="ABORTIONS" name="ABORTIONS" required="required" value="<?php  echo $ABORTIONS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                <th style="width:27%;border:0px;">Fractures of pelvis, spine and femur</th>
				<th style="width:7%;border:0px;"> <input type="text" id="FRACTURES" name="FRACTURES" required="required" value="<?php  echo $FRACTURES; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;" </th>
				<th style="width:20%;border:0px;">  </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:34%;border:0px;font-weight:bold;">OBS/GYN</th>

              </tr>
			  </table>
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:10%;border:0px;">D & C</th>
				<th style="width:7%;border:0px;"> <input type="text" id="DC" name="DC" required="required" 
          value="<?php  echo $DC; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>


        <th style="width:10%;border:0px;">Ectopic pregnancy</th>
				<th style="width:7%;border:0px;">  <input type="text" id="ECTOPICPREGNANCY" name="ECTOPICPREGNANCY" required="required" value="<?php  echo $ECTOPICPREGNANCY; ?>"
				style="width:100%; font-weight:normal; background-color:#fff;"> </th>
        </tr>
			  </table>

    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;font-weight:bold;"> MENSTRUAL AND CONTRACEPTIVE HISTORY </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                <th style="width:10%;border:0px;">Caesarean section</th>
				<th style="width:7%;border:0px;"> <input type="text" id="CAESAREANSECTION" name="CAESAREANSECTION" required="required" value="<?php  echo $CAESAREANSECTION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">Vacuum extraction </th>
				<th style="width:7%;border:0px;"> <input type="text" id="VACUUMSXTRACTION" name="VACUUMSXTRACTION" required="required" value="<?php  echo $VACUUMSXTRACTION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:18.33333333%;border:0px;">Length of menses (No. of daya she bleeds)</th>
				<th style="width:15%;border:0px;"> <input type="text" id="MENSES" name="MENSES" required="required" value="<?php  echo $MENSES; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">Amount</th>
				<th style="width:15%;border:0px;"> <input type="text" id="AMOUNT" name="AMOUNT" required="required" value="<?php  echo $AMOUNT; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


                 <th style="width:10%;border:0px;">Retained placenta</th>
				<th style="width:7%;border:0px;"> <input type="text" id="RETAINEDPLACENTA" name="RETAINEDPLACENTA"  required="required" value="<?php  echo $RETAINEDPLACENTA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">PPH</th>
				<th style="width:7%;border:0px;"> <input type="text" id="PPH" name="PPH" required="required" value="<?php  echo $PPH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                 <th style="width:18.33333333%;border:0px;">Family planning method ever used</th>
				<th style="width:15%;border:0px;"> <input type="text" id="METHODEVERUSED" name="METHODEVERUSED" required="required" value="<?php  echo $METHODEVERUSED; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">When was it discontinue?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="DISCONTINUEDATE" name="DISCONTINUEDATE" required="required" value="<?php  echo $DISCONTINUEDATE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:10%;border:0px;">Operations on the uterus</th>
				<th style="width:7%;border:0px;"> <input type="text" id="OPERATIONSONTHEUTERUS" name="OPERATIONSONTHEUTERUS" required="required" value="<?php  echo $OPERATIONSONTHEUTERUS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">Cervical circlage</th>
				<th style="width:7%;border:0px;"> <input type="text" id="CERVICALCIRCLAGE" name="CERVICALCIRCLAGE" required="required" value="<?php  echo $CERVICALCIRCLAGE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>




  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>
              <th style="width:18.33333333%;border:0px;">Why was it discontinued?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="REASONFORDISCONTINUE" name="REASONFORDISCONTINUE" required="required" value="<?php  echo $REASONFORDISCONTINUE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

               <th style="width:18.33333333%;border:0px;">If never used, why?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="REASONFORNEVERATTEMPT" name="REASONFORNEVERATTEMPT" required="required" value="<?php  echo $REASONFORNEVERATTEMPT; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:34%;border:0px;font-weight:bold;">SOCIAL HISTORY</th>

              </tr>
			  </table>

                 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

               <th style="width:10%;border:0px;">Smoking</th>
				<th style="width:7%;border:0px;"> <input type="text" id="SMOKING" name="SMOKING" required="required" value="<?php  echo $SMOKING; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">Alcohol</th>
				<th style="width:7%;border:0px;"> <input type="text" id="ALCOHOL" name="ALCOHOL" required="required" value="<?php  echo $ALCOHOL; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

              </div>
              <div id="form-wizard-2" class="step">

               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;font-weight:bold;">PRESENT PREGNANCY </th>


                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                 <th style="width:10%;border:0px;">Health of the husband</th>
				<th style="width:24%;border:0px;"> <input type="text" id="email" name="HEALTHOFTHEHUSBAND" required="required" value="<?php  echo $HEALTHOFTHEHUSBAND; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>

                 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:18.33333333%;border:0px;">First day of LNMP</th>
				<th style="width:15%;border:0px;"> <input type="text" id="FIRSTDAYOFLNMP" name="FIRSTDAYOFLNMP" required="required" value="<?php  echo $FIRSTDAYOFLNMP; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">EDD</th>
				<th style="width:15%;border:0px;"> <input type="text" id="eula"  name="EDD"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:34%;border:0px;font-weight:bold;">FAMILY HISTORY</th>

              </tr>
			  </table>

               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:18.33333333%;border:0px;">Period of genstation</th>
				<th style="width:15%;border:0px;"> <input type="text" id="GENSTATIONPERIOD" name="GENSTATIONPERIOD" required="required" value="<?php  echo $GENSTATIONPERIOD; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">Complication of pregnancy if any</th>
				<th style="width:15%;border:0px;"> <input type="text" id="PREGNANCYCOMPLICATION" name="PREGNANCYCOMPLICATION" required="required" value="<?php  echo $PREGNANCYCOMPLICATION; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

               <th style="width:10%;border:0px;">Diabetes</th>
				<th style="width:7%;border:0px;"> <input type="text" id="DIABETESTWO" name="DIABETESTWO" required="required" value="<?php  echo $DIABETESTWO; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


                 <th style="width:10%;border:0px;">Hypertension</th>
				<th style="width:7%;border:0px;"> <input type="text" id="HYPERTENSIONTWO" name="HYPERTENSIONTWO" required="required" value="<?php  echo $HYPERTENSIONTWO; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>


              </tr>
			  </table>

                <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>
           
                <th style="width:18.33333333%;border:0px;">Any hospitalization</th>
				<th style="width:4%;border:0px;"> <input type="text" id="HOSPITALIZATIONTWO" name="HOSPITALIZATIONTWO" required="required" value="<?php  echo $HOSPITALIZATIONTWO; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>
                 <th style="width:3%;border:0px;">For</th>
                <th style="width:8%;border:0px;"> <input type="text" id="HOSPITALIZATIONFOR" name="HOSPITALIZATIONFOR" required="required" value="<?php  echo $HOSPITALIZATIONFOR; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:18.33333333%;border:0px;">Bleeding</th>
				<th style="width:15%;border:0px;"> <input type="text" id="BLEEDING" name="BLEEDING" required="required" value="<?php  echo $BLEEDING; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:10%;border:0px;">Sickle cell disease</th>
				<th style="width:7%;border:0px;"> <input type="text" id="SICKLECELLSTWO" name="SICKLECELLSTWO" required="required" value="<?php  echo $SICKLECELLSTWO; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">Epilepsy</th>
				<th style="width:7%;border:0px;"> <input type="text" id="EPILEPSY" name="EPILEPSY" required="required" value="<?php  echo $EPILEPSY; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>



              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>
                <th style="width:18.33333333%;border:0px;">Excessive vomiting</th>
				<th style="width:15%;border:0px;"> <input type="text" id="EXCESSIVEVOMITING" name="EXCESSIVEVOMITING" required="required" value="<?php  echo $EXCESSIVEVOMITING; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:13.33333333%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>

                   <th style="width:10%;border:0px;">Twins</th>
				<th style="width:7%;border:0px;"> <input type="text" id="TWINS" name="TWINS" required="required" value="<?php  echo $TWINS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                 <th style="width:10%;border:0px;">Husbands health</th>
				<th style="width:7%;border:0px;"> <input type="text" id="HUSBANDSHEALTH" name="HUSBANDSHEALTH" required="required" value="<?php  echo $HUSBANDSHEALTH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;"> </th>

              </tr>
			  </table>
           
              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>
                <th style="width:33.33333333%;border:0px;">Has any of the following been present for one month?</th>     </th>

                  <th style="width:6.33333333%;border:0px;">Fever</th>
				<th style="width:10%;border:0px;"> <input type="text" id="FEVER" name="FEVER" required="required" value="<?php  echo $FEVER; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Diarrhoea</th>
				<th style="width:10%;border:0px;"> <input type="text" id="DIARRHOEA" name="DIARRHOEA" required="required" value="<?php  echo $DIARRHOEA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:10%;border:0px;"> </th>
				<th style="width:7%;border:0px;">  </th>

                 <th style="width:10%;border:0px;"></th>
				<th style="width:7%;border:0px;">  </th>

              </tr>
			  </table>

              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

                  <th style="width:6.33333333%;border:0px;">Cough</th>
				<th style="width:10%;border:0px;"> <input type="text" id="COUGH" name="COUGH" required="required" value="<?php  echo $COUGH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Weight loss</th>
				<th style="width:10%;border:0px;"> <input type="text" id="WEIGHTLOSS" name="WEIGHTLOSS" required="required" value="<?php  echo $WEIGHTLOSS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

              </tr>
			  </table>

            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

                  <th style="width:6.33333333%;border:0px;">Others</th>
				<th style="width:27%;border:0px;"> <input type="text" id="OTHERS" name="OTHERS" required="required" value="<?php  echo $OTHERS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

              </tr>
			  </table>


             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:18.33333333%;border:0px;">Does the mother know her HIV status?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="KNOWSTATUS" name="KNOWSTATUS" required="required" value="<?php  echo $KNOWSTATUS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:23.33333333%;border:0px;"> Does she want to test for HIV</th>
				<th style="width:10%;border:0px;">  <input type="text" id="WANTTOTEST" name="WANTTOTEST" required="required" value="<?php  echo $WANTTOTEST; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th>

                   <th style="width:10%;border:0px;"></th>
				<th style="width:7%;border:0px;">  </th>

                 <th style="width:10%;border:0px;"> </th>
				<th style="width:7%;border:0px;">   </th>

              </tr>
			  </table>

               <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;">If cough for more than 3 weeks and weight loss  </th>

                 <th style="width:33.33333333%;border:0px;font-weight:bold;"> Assess for TB </th>


                 <th style="width:33.33333333%;border:0px;"> </th>

              </tr>
			  </table>

            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;"> </th>

                  <th style="width:33.33333333%;border:0px;font-weight:bold;">PHYSICAL EXAMINATION  </th>

                <th style="width:33.33333333%;border:0px;"> </th>

              </tr>
			  </table>
              
          

           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;"> </th>

                  <th style="width:6.33333333%;border:0px;">Height (cm)</th>
				<th style="width:10%;border:0px;"> <input type="text" id="HEIGHT" name="HEIGHT" required="required" value="<?php  echo $HEIGHT; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Weight (kg)</th>
				<th style="width:10%;border:0px;"> <input type="text" id="WEIGHT" name="WEIGHT" required="required" value="<?php  echo $WEIGHT; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:33.33333333%;border:0px;"> </th>

              </tr>
			  </table>

            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;"> </th>

                  <th style="width:6.33333333%;border:0px;">BP</th>
				<th style="width:10%;border:0px;"> <input type="text" id="BP" name="BP" value="<?php  echo $BP; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Pulse</th>
				<th style="width:10%;border:0px;"> <input type="text" id="PULSE" name="PULSE" required="required" value="<?php  echo $PULSE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

              </tr>
			  </table>

           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>
          
                <th style="width:33.33333333%;border:0px;"> </th>     </th>

                  <th style="width:6.33333333%;border:0px;">Tempera ture</th>
				<th style="width:10%;border:0px;"> <input type="text" id="TEMPERATURE" name="TEMPERATURE" required="required" value="<?php  echo $TEMPERATURE; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;"> </th>
				<th style="width:10%;border:0px;">   </th>

                <th style="width:33.33333333%;border:0px;"> </th>     </th>

              </tr>
			  </table>


            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:18.33333333%;border:0px;">Nutritional status?</th>
				<th style="width:15%;border:0px;"> <input type="text" id="NUTRITIONALSTATUS" name="NUTRITIONALSTATUS" required="required" value="<?php  echo $NUTRITIONALSTATUS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                 <th style="width:23.33333333%;border:0px;">  </th>
				<th style="width:10%;border:0px;">    </th>

                   <th style="width:10%;border:0px;"></th>
				<th style="width:7%;border:0px;">  </th>

                 <th style="width:10%;border:0px;"> </th>
				<th style="width:7%;border:0px;">   </th>

              </tr>
			  </table>

 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;">Examine and comment on   </th>

                 <th style="width:6.33333333%;border:0px;">WT</th>
				<th style="width:10%;border:0px;"> <input type="text" id="WT" name="WT" required="required" value="<?php  echo $WT; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                    <th style="width:7%;border:0px;">Muac</th>
				<th style="width:10%;border:0px;"> <input type="text" id="MUAC" name="MUAC" required="required" value="<?php  echo $MUAC; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:10%;border:0px;"></th>
				<th style="width:7%;border:0px;">  </th>

                 <th style="width:10%;border:0px;"> </th>
				<th style="width:7%;border:0px;">   </th>

              </tr>
			  </table>

			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>
            
                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Oral thrush</th>
				<th style="width:17%;border:0px;"> <input type="text" id="ORALTHRUSH" name="ORALTHRUSH" required="required" value="<?php  echo $ORALTHRUSH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Anaemia</th>
				<th style="width:17%;border:0px;"> <input type="text" id="ANAEMIA" name="ANAEMIA" required="required" value="<?php  echo $ANAEMIA; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Teeth</th>
				<th style="width:17%;border:0px;"> <input type="text" id="TEETH" name="TEETH" required="required" value="<?php  echo $TEETH; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Eyes</th>
				<th style="width:17%;border:0px;"> <input type="text" id="EYES" name="EYES" required="required" value="<?php  echo $EYES; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

                 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Neck</th>
				<th style="width:17%;border:0px;"> <input type="text" id="NECK" name="NECK" required="required" value="<?php  echo $NECK; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Nails</th>
				<th style="width:17%;border:0px;"> <input type="text" id="NAILS" name="NAILS" required="required" value="<?php  echo $NAILS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>
                
                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Breasts</th>
				<th style="width:17%;border:0px;"> <input type="text" id="BREASTS" name="BREASTS" required="required" value="<?php  echo $BREASTS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Palms</th>
				<th style="width:17%;border:0px;"> <input type="text" id="PALMS" name="PALMS" required="required" value="<?php  echo $PALMS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

              <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Legs</th>
				<th style="width:17%;border:0px;"> <input type="text" id="LEGS" name="LEGS" required="required" value="<?php  echo $LEGS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Jaundice</th>
				<th style="width:17%;border:0px;"> <input type="text" id="JAUNDICE" name="JAUNDICE" required="required" value="<?php  echo $JAUNDICE; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Deformities</th>
				<th style="width:17%;border:0px;"> <input type="text" id="DEFORMITIES" name="DEFORMITIES" required="required" value="<?php  echo $DEFORMITIES; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Heart</th>
				<th style="width:17%;border:0px;"> <input type="text" id="HEART" name="HEART" required="required" value="<?php  echo $HEART; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px; text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Lymph Glands</th>
				<th style="width:17%;border:0px;"> <input type="text" id="LYMPHGLANDS" name="LYMPHGLANDS" required="required" value="<?php  echo $LYMPHGLANDS; ?>"
				 style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;">Lungs</th>
				<th style="width:17%;border:0px;"> <input type="text" id="LUNGS" name="LUNGS" required="required" value="<?php  echo $LUNGS; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>


              </tr>
			  </table>

             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;  text-align:left;" width="100%">
    <thead> 
    <tr>

                <th style="width:33.33333333%;border:0px;">    </th>

                 <th style="width:16.33333333%;border:0px;">Herpes zooster</th>
				<th style="width:17%;border:0px;"> <input type="text" id="HERPESZOSTER" name="HERPESZOSTER" required="required" value="<?php  echo $HERPESZOSTER; ?>"
				  style="width:100%; font-weight:normal; background-color:#fff;">  </th>

                   <th style="width:16.33333333%;border:0px;"> </th>
				<th style="width:17%;border:0px;">  </th>


              </tr>
			  </table>
    <input type="hidden" id="AGE_GROUP" name="AGE_GROUP" value="<?php  echo $AGE_GROUP; ?>">
    <input type="hidden" id="AGE" name="AGE" value="<?php  echo $AGE1; ?>">
    <input type="hidden" id="SERVICE_EPISODE" name="SERVICE_EPISODE" value="<?php  echo $SERVICE_EPISODE; ?>"> 
     
              
        <input type="hidden" id="DATECREATED" name="DATECREATED" value="<?php echo date('Y-m-d'); ?>" >
        <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>">
        <input type="hidden" name="ANCDYNAMICS" id ="ANCDYNAMICS" value="OBSTETRIC">
        <input type="hidden" name="SERIALNO" id="SERIALNO" value=" <?php echo uniqid();?>">   
        <input type="hidden" name="USERINITIAL" id="USERINITIAL" value="<?php echo $nameofuser; ?>" > 
        <input type="hidden" name="USERDESIGNATION" id="USERDESIGNATION" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="USERACCOUNT" id="USERACCOUNT" value="<?php echo $rm; ?>" >  
         <center><input type="submit" class="btn btn-successs" name="button" id="button" value="Save"/></center> <br>
              </div>

              <div class="form-actions">
               <center> <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" /> 
                <a href="anc_home.php" class="btn btn-danger"> Close <span class="sr-only">(current)</a> &nbsp;  
                 
                <div id="status"></div> 
                 <center>
              </div>


              <div id="submitted"></div>
              
              
              
              <br>
              
            </form>
                    
 

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
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>

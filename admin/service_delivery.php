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
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stss ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 


<?php
$conn1  = new mysqli("localhost", "root", "toor2", "dbtollfree");
$conn2 = new mysqli("localhost", "root", "toor2", "patientmgt");


function gettotals($conns,$sql1,$sex){  
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
return  $res->num_rows;
}


function getages($conns,$sql1,$sex){ 
     $age=[0,0,0,0,0,0]; 
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
	 while($row=$res->fetch_assoc()){
	     if($row['AGE_GROUP']=='10-14'){ $age[0] = $age[0]+1;}
	 elseif($row['AGE_GROUP']=='15-19'){ $age[1] = $age[1]+1;}
	 elseif($row['AGE_GROUP']=='20-24'){ $age[2] = $age[2]+1;}
	 elseif($row['AGE_GROUP']=='24'){ $age[3] = $age[3]+1;}
	 elseif($row['AGE_GROUP']=='E'){ $age[4] = $age[4]+1;}
	 elseif($row['AGE_GROUP']=='X'){ $age[5] = $age[5]+1;}
	 }
return  $age;

}


function getagess_episode($conns,$sql1,$sex){ 
     $age=array(); 
	 $age[0] =0; $age[1] =0; $age[2] =0; $age[3] =0; $age[4] =0; $age[5] =0;
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
	 while($row=$res->fetch_assoc()){
	 if(explode('__',$row['SERVICE_EPISODE'])[1]=='1'){
	     if($row['AGE_GROUP']=='10-14'){ $age[0] = $age[0]+1;}
	 elseif($row['AGE_GROUP']=='15-19'){ $age[1] = $age[1]+1;}
	 elseif($row['AGE_GROUP']=='20-24'){ $age[2] = $age[2]+1;}
	 elseif($row['AGE_GROUP']=='24'){ $age[3] = $age[3]+1;}
	 elseif($row['AGE_GROUP']=='E'){ $age[4] = $age[4]+1;}
	 elseif($row['AGE_GROUP']=='X'){ $age[5] = $age[5]+1;}
	 }
	 }
return  $age;

}

if(isset($_POST['edate'])){
  $d1 = $_POST['sdate'].' 00:00:00';
  $d2 = $_POST['edate'].' 23:59:59';
$sql  = "SELECT * FROM `hct_counselling_andtesting` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql2 = "SELECT * FROM `counsellingservices` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql0 = "SELECT * FROM `tollfree` GROUP BY PHONECONTACT HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql3 = "SELECT * FROM `clientsexamination` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql4 = "SELECT * FROM `hcg` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql5 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql6 = "SELECT * FROM `antenatal` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql7 = "SELECT * FROM `postnatal_care` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql8 = "SELECT * FROM `abortioncare` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql9 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
  
$sql01 = "SELECT * FROM `cmpatientsregistration` HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 

}
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/ionicons.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min2.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
 
  <link rel="stylesheet" href="assets/notifier.css">
   <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="datatable/css/buttons.dataTables.min.css">

  <script src="datatable/js/jquery-1.12.3.js"></script>
  <script src="datatable/js/jquery.dataTables.min.js"></script>
  <script src="datatable/js/bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="datatable/js/dataTables.buttons.min.js"></script>
  <script src="datatable/js/buttons.flash.min.js"></script>
  <script src="datatable/js/jszip.min.js"></script>
  <script src="datatable/js/pdfmake.min.js"></script>
  <script src="datatable/js/vfs_fonts.js"></script>
  <script src="datatable/js/buttons.html5.min.js"></script>
  <script src="datatable/js/buttons.print.min.js"></script>
  <?php
  $fz ='';
  if(isset($_GET['q'])) { $fz=$_GET['q']; }
  ?>
  <script>
  $(document).ready(function() {
     var ttt = "<?php echo $fz;  ?>";

	 if(ttt==""){}  else{ $("#notificationModal").modal("show"); }
     $('#example').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

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
     $('#example6').DataTable( {
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
     $('#exnclients').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL NUMBER OF CLIENTS BY PERIOD'
		},
		{extend :'pdf',
		 title:' TOTAL NUMBER OF CLIENTS BY PERIOD'
		},
		{extend :'print',
		 title:' TOTAL NUMBER OF CLIENTS BY PERIOD'
		}
        ]
    } );
  } );
  </script>
   
   
    <script>
  $(document).ready(function() {
     $('#exweekclients').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL WEEKLY NUMBER OF CLIENTS'
		},
		{extend :'pdf',
		 title:' TOTAL WEEKLY NUMBER OF CLIENTS'
		},
		{extend :'print',
		 title:' TOTAL WEEKLY NUMBER OF CLIENTS'
		}
        ]
    } );
  } );
  </script>
   
   
   <script>
  $(document).ready(function() {
     $('#exmonthclients').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL MONTHLY NUMBER OF CLIENTS'
		},
		{extend :'pdf',
		 title:' TOTAL MONTHLY NUMBER OF CLIENTS'
		},
		{extend :'print',
		 title:' TOTAL MONTHLY NUMBER OF CLIENTS'
		}
        ]
    } );
  } );
  </script>
  
  
  
    <script>
  $(document).ready(function() {
     $('#exqtrclients').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL QUATERLY NUMBER OF CLIENTS'
		},
		{extend :'pdf',
		 title:' TOTAL QUATERLY NUMBER OF CLIENTS'
		},
		{extend :'print',
		 title:' TOTAL QUATERLY NUMBER OF CLIENTS'
		}
        ]
    } );
  } );
  </script>
  
  
  <script>
  $(document).ready(function() {
     $('#exyearclients').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL ANNUAL NUMBER OF CLIENTS'
		},
		{extend :'pdf',
		 title:' TOTAL ANNUAL NUMBER OF CLIENTS'
		},
		{extend :'print',
		 title:' TOTAL ANNUAL NUMBER OF CLIENTS'
		}
        ]
    } );
  } );
  </script>
  
  
  
   <script>
  $(document).ready(function() {
     $('#exnclients1').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' DAILY NUMBER OF CLIENTS WITH STI'
		},
		{extend :'pdf',
		 title:' DAILY NUMBER OF CLIENTS WITH STI'
		},
		{extend :'print',
		 title:' DAILY NUMBER OF CLIENTS WITH STI'
		}
        ]
    } );
  } );
  </script>
   
   
    <script>
  $(document).ready(function() {
     $('#exweekclients1').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  WEEKLY NUMBER OF CLIENTS WITH STI'
		},
		{extend :'pdf',
		 title:' WEEKLY NUMBER OF CLIENTS WITH STI'
		},
		{extend :'print',
		 title:' WEEKLY NUMBER OF CLIENTS WITH STI'
		}
        ]
    } );
  } );
  </script>
   
   
   <script>
  $(document).ready(function() {
     $('#exmonthclients1').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' MONTHLY NUMBER OF CLIENTS WITH STI'
		},
		{extend :'pdf',
		 title:' MONTHLY NUMBER OF CLIENTS WITH STI'
		},
		{extend :'print',
		 title:' MONTHLY NUMBER OF CLIENTS WITH STI'
		}
        ]
    } );
  } );
  </script>
  
  
  
    <script>
  $(document).ready(function() {
     $('#exqtrclients1').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' QUATERLY NUMBER OF CLIENTS WITH STI'
		},
		{extend :'pdf',
		 title:' QUATERLY NUMBER OF CLIENTS WITH STI'
		},
		{extend :'print',
		 title:'QUATERLY NUMBER OF CLIENTS WITH STI'
		}
        ]
    } );
  } );
  </script>
  
  
  <script>
  $(document).ready(function() {
     $('#exyearclients1').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' ANNUAL NUMBER OF CLIENTS WITH STI'
		},
		{extend :'pdf',
		 title:' ANNUAL NUMBER OF CLIENTS WITH STI'
		},
		{extend :'print',
		 title:' ANNUAL NUMBER OF CLIENTS WITH STI'
		}
        ]
    } );
  } );
  </script>
  
  
   <script>
  $(document).ready(function() {
     $('#exnclients2').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' DAILY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'pdf',
		 title:' DAILY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'print',
		 title:' DAILY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		}
        ]
    } );
  } );
  </script>
   
   
    <script>
  $(document).ready(function() {
     $('#exweekclients2').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  WEEKLY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'pdf',
		 title:' WEEKLY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'print',
		 title:' WEEKLY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		}
        ]
    } );
  } );
  </script>
   
   
   <script>
  $(document).ready(function() {
     $('#exmonthclients2').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' MONTHLY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'pdf',
		 title:' MONTHLY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'print',
		 title:' MONTHLY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		}
        ]
    } );
  } );
  </script>
  
  
  
    <script>
  $(document).ready(function() {
     $('#exqtrclients2').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' QUATERLY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'pdf',
		 title:' QUATERLY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'print',
		 title:'QUATERLY NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		}
        ]
    } );
  } );
  </script>
  
  
  <script>
  $(document).ready(function() {
     $('#exyearclients2').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' ANNUAL NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'pdf',
		 title:' ANNUAL NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		},
		{extend :'print',
		 title:' ANNUAL NUMBER OF CLIENTS WITH OTHER MEDICAL AILMENTS'
		}
        ]
    } );
  } );
  </script>
  
  
  
   <script>
  $(document).ready(function() {
     $('#exnclients3').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' DAILY NUMBER OF CLIENTS REFERRED'
		},
		{extend :'pdf',
		 title:' DAILY NUMBER OF CLIENTS REFERRED'
		},
		{extend :'print',
		 title:' DAILY NUMBER OF CLIENTS REFERRED'
		}
        ]
    } );
  } );
  </script>
   
   
    <script>
  $(document).ready(function() {
     $('#exweekclients3').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  WEEKLY NUMBER OF CLIENTS REFERRED'
		},
		{extend :'pdf',
		 title:' WEEKLY NUMBER OF CLIENTS REFERRED'
		},
		{extend :'print',
		 title:' WEEKLY NUMBER OF CLIENTS REFERRED'
		}
        ]
    } );
  } );
  </script>
   
   
   <script>
  $(document).ready(function() {
     $('#exmonthclients3').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' MONTHLY NUMBER OF CLIENTS REFERRED'
		},
		{extend :'pdf',
		 title:' MONTHLY NUMBER OF CLIENTS REFERRED'
		},
		{extend :'print',
		 title:' MONTHLY NUMBER OF CLIENTS REFERRED'
		}
        ]
    } );
  } );
  </script>
  
  
  
    <script>
  $(document).ready(function() {
     $('#exqtrclients3').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' QUATERLY NUMBER OF CLIENTS REFERRED'
		},
		{extend :'pdf',
		 title:' QUATERLY NUMBER OF CLIENTS REFERRED'
		},
		{extend :'print',
		 title:'QUATERLY NUMBER OF CLIENTS REFERRED'
		}
        ]
    } );
  } );
  </script>
  
  
  <script>
  $(document).ready(function() {
     $('#exyearclients3').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' ANNUAL NUMBER OF CLIENTS REFERRED'
		},
		{extend :'pdf',
		 title:' ANNUAL NUMBER OF CLIENTS REFERRED'
		},
		{extend :'print',
		 title:' ANNUAL NUMBER OF CLIENTS REFERRED'
		}
        ]
    } );
  } );
  </script>
  
  
  
  
   <script>
  $(document).ready(function() {
     $('#exnclientsp').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL NUMBER OF CLIENTS BY PREGNANCY RELATED CASES'
		},
		{extend :'pdf',
		 title:' TOTAL NUMBER OF CLIENTS BY PREGNANCY RELATED CASES'
		},
		{extend :'print',
		 title:' TOTAL NUMBER OF CLIENTS BY PREGNANCY RELATED CASES'
		}
        ]
    } );
  } );
  </script>
   
   
    <script>
  $(document).ready(function() {
     $('#exweekclientsp').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL WEEKLY NUMBER OF PREGNANCY RELATED CASES'
		},
		{extend :'pdf',
		 title:' TOTAL WEEKLY NUMBER OF PREGNANCY RELATED CASES'
		},
		{extend :'print',
		 title:' TOTAL WEEKLY NUMBER OF PREGNANCY RELATED CASES'
		}
        ]
    } );
  } );
  </script>
   
   
   <script>
  $(document).ready(function() {
     $('#exmonthclientsp').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL MONTHLY NUMBER OF PREGNANCY RELATED CASES'
		},
		{extend :'pdf',
		 title:' TOTAL MONTHLY NUMBER OF PREGNANCY RELATED CASES'
		},
		{extend :'print',
		 title:' TOTAL MONTHLY NUMBER OF PREGNANCY RELATED CASES'
		}
        ]
    } );
  } );
  </script>
  
  
  
    <script>
  $(document).ready(function() {
     $('#exqtrclientsp').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL QUATERLY NUMBER OF PREGNANCY RELATED CASES'
		},
		{extend :'pdf',
		 title:' TOTAL QUATERLY NUMBER OF PREGNANCY RELATED CASES'
		},
		{extend :'print',
		 title:' TOTAL QUATERLY NUMBER OF PREGNANCY RELATED CASES'
		}
        ]
    } );
  } );
  </script>
  
  
  <script>
  $(document).ready(function() {
     $('#exyearclientsp').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TOTAL ANNUAL NUMBER OF PREGNANCY RELATED CASES'
		},
		{extend :'pdf',
		 title:' TOTAL ANNUAL NUMBER OF PREGNANCY RELATED CASES'
		},
		{extend :'print',
		 title:' TOTAL ANNUAL NUMBER OF PREGNANCY RELATED CASES'
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
                 border: 1px solid ecf0f5;
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




</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <?php
  require('connect/config.php');?>
  <header class="main-header">

    <!-- Logo -->
    <a href="home_user.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NTIHC |</b>imms</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
           
            <ul class="dropdown-menu">
              <li class="header">You have 0 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->

                  </li>
                  <!-- end task item -->

                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              </li>
              <!-- Menu Body -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="home_user.php" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/img/ntihclog2.png" width="100" height="100" class="img-circle" alt="User Image">
        </div> 
        <div class="pull-left info">
           <span class="glyphicon glyphicon-user">WELCOME</span>    
            <br> <br> 
          <a href="javascript:void(0)"><?php echo $nameofuser; ?>   </a>
           
          <p></p>
           
        </div>
      </div>
      <!-- search form --> 
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
       <li class="header">OTHER MODULAR QUICK LINKS</li>
        
		 <li>
           <a href="timesheet/index.php">
            <i class="fa fa-th"></i> <span>Time sheet</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">0 </small>
            </span>
          </a>
        </li>
		
		<li>
          <a href="petty_cash_approvals.php">
            <i class="fa fa-th"></i> <span>Cash reimbursments</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">0 </small>
            </span>
          </a>
        </li>
		
        <li>
           <a href="invoice/inv_receipts.php">
            <i class="fa fa-th"></i> <span>Invoices and receipts</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">0 </small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Payments</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">0 </small>
            </span>
          </a>
        </li>
        
        <li class="treeview">
        </li>
        <li class="header">User Departments</li>
         <li><a href="home_user.php"><i class="fa fa-circle-o text-red"></i>Home User<span></span></a></li>
        <li><a href="executive.php"><i class="fa fa-circle-o text-red"></i>Programme Director<span></span></a></li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Advocacy and Research</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="ud_advocacy.php"><i class="fa fa-circle-o text-yellow"></i>Head Advocacy and Research<span></span></a></li>

          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Finance and Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="fin_admin.php"><i class="fa fa-circle-o text-aqua"></i>Head Fianance and Admin<span></span></a></li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Service Delivery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="service_delivery.php"><i class="fa fa-circle-o text-aqua"></i>Head Service Delivery<span></span></a></li>

          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <a href="javascript:void(0)"> <B> ADMIN USER DASHBOARD <B>  &nbsp;&nbsp;&nbsp TITLE: &nbsp<?php echo $desc; ?>   </a>   
        <small></small>
      <br>
 
    <!-- Main content -->
      <div class="row">
        <div class="col-md-3">
          <a href="admin_user.php" class="btn btn-primary btn-block margin-bottom"> System Dashboard</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox | Outbox</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
              <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#imprex"></button></i> My imprest requesitions<span 
                class="label label-warning pull-right">
                <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PENDING' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   </span></a>  
               <li><a href="pettycash_sup.php" data-toggle="tooltip" title="Confirm"> Authorise imprest requests &nbsp 
                   <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT  ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND SENDTO ='$rm'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                  </a></li> 
                  
                  <li><a href="pettycash_fin.php" data-toggle="tooltip" title="Approve"> Approve imprest requisitions &nbsp;&nbsp;&nbsp 
                   <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT  ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND FORWARDTO ='$rm' AND APPROACTION ='PENDING'")) {
                                             
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
                  </a></li>    
              </ul>
            </div>
            <!-- /.box-body -->


          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border" style="text-align:Left; font-weight:bold;>
              <h3 class="box-title" style="text-align:center;">Procurement Orders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

                <li><a href="proc/procurement_user.php">My Procurement Orders <span class="label label-warning pull-right">
				<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE  CORACTION ='AUTHORISED' AND AOACTION ='PENDING'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </span></a>
               
			   <li><a href="proc/budget_desk.php">Orders due for confirmation<span class="label label-warning pull-right">
				<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE  CORACTION ='AUTHORISED' AND AOACTION ='PENDING'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </span></a> 
                  <li><a href="proc/proc_review.php">Orders due for review<span class="label label-warning pull-right">
				<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE  CORACTION ='AUTHORISED' AND AOACTION ='PENDING'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </span></a> 
                  
				  <li><a href="proc/proc_approval.php">Orders due for approval<span class="label label-warning pull-right">
				<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT id, PDECODE FROM procreqn WHERE  CORACTION ='AUTHORISED' AND AOACTION ='PENDING'")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </span></a>  
                 
 
              </ul>
            </div>
            <!-- /.box-body -->
  
            </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Transport mgt</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

                <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#notificationModal"></button></i> Fuel requisitions <span class="label label-warning pull-right">0</span></a>

                <li><a href=<button class="fa fa-circle-o text-yellow" data-toggle="modal"  data-target="#notificationModal"></button></i> Fuel card loadings <span class="label label-warning pull-right">0</span></a>

                <li><a href=<button class="fa fa-circle-o text-light-blue" data-toggle="modal"  data-target="#notificationModal"></button></i> Vehicle hire voucher <span class="label label-warning pull-right">0</span></a>
              </ul>
            </div>

            </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Human Resource </h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

                <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#notificationModal"></button></i> Leave approvals 
				<span class="label label-warning pull-right">0</span></a>

                <li><a href=<button class="fa fa-circle-o text-yellow" data-toggle="modal"  data-target="#notificationModal"></button></i> Timesheet 
				<span class="label label-warning pull-right">0</span></a>

              </ul>
            </div>


          </div>
          <!-- /.box -->
        </div>
        <!-- /.col --> 
          <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="font-family:lcd;"></h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
             <!-- /.box-header -->
             <div class="box-body no-padding">
             <div class="mailbox-controls">
             <!-- Check all button -->

              </div>
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">

                  <!-- Info boxes -->
          <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#medical">
		 <img src="../database icons/report-icon-23.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" >
		 </center>
            <div class="inner">  
            <a href="#" class="small-box-footer">Medical <i class=" "></i></a> </button>
          </div>
        </div></div>        
        
         <div class="col-lg-2 col-xs-4"> 
         <div class="small-box bg-grey-gradient">
         <center> <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#counselling">
		 <img src="../database icons/59449894425chart-512.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer">Counselling<i class=" "></i></a></button>
        </div>
        </div></div>      
       
        <div class="col-lg-2 col-xs-4"> 
        <div class="small-box bg-grey-gradient">
        <center> <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#pregnancy">
		<img src="../database icons/guests.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer">Pregnancy <i class=" "></i></a></button>
          </div>
        </div></div>
        <!-- ./col -->
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#tollfree">
		 <img src="../database icons/toll-free.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer">Tollfree <i class="fa fa-arrow-circle-right"></i></a></button>
          </div>
        </div></div>
        <!-- ./col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/20151012_561baec335c5f.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="#" class="small-box-footer">Dispensary<i class=" "></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../database icons/clients.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href="../medical/waiting_room,php" class="small-box-footer">Waiting-room <i class=" "></i></a>
          </div>
        </div></div>
        <!-- ./col -->
		
          </div>
        </div></div>
      
                
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->

            
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Tab 1</a></li>
               
                </ul>
              </li>
              <li class="pull-left header"><i class="fa fa-th"></i> Notifications</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
               <b> </b>
               
            
            <!-- /.box-header --> 
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title" style="text-align:left;">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Data templates
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                 
                     
                     <div class="col-lg-4"> 
                      <a href="../medical/reports/medical_tool.php" class="button1">Medical Daily Tallying Tool </a> 
                    </div>
                    
                     <div class="col-lg-4"> 
                     <a href="medical/" class="button1">HCG Daily Tallying Tool </a>  
                     </div>
                     
                     <div class="col-lg-4">  
                    <a href="medical/" class="button1">Tollfree Tracking Tool </a>  
                     </div>
                     
                     <div class="col-lg-4"><br> 
                 <a href="../medical/reports/hct_tool.php" class="button1">HCT Daily Tallying Tool </a>   
             </div>
             
             <div class="col-lg-4"> <br>
             <a href="medical/" class="button1">Antenatal monitoring Tool </a>  
             </div>
             
             <div class="col-lg-4"> <br>
              <a href="medical/" class="button1">Family planning Tool </a>  
             </div> 
             
             <div class="col-lg-4"><br>  
             <a href="medical/" class="button1">Referral for all services </a>   
             </div> 
             
             <div class="col-lg-4"> <br>
              <button type="submit" class="button"> </button>
             </div>
             
             <div class="col-lg-4"> <br>
              <button type="submit" class="button2"> </button>
             </div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Search
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                    
                    BBB 
                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                     Find
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                    
                    AA 
                    </div>
                  </div>
                </div>
                
                 <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                     View
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                    
                    AA 
                    </div>
                  </div>
                </div>
              </div> 
            <!-- /.box-body --> 
                 
               
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
               B
              </div> 
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="tab_3-2">
               C 
              </div> 
              <!-- /.tab-pane -->
              
              </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col --> 
      <!-- /.row -->
      <!-- END CUSTOM TABS --> 

 
                <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                  </div>
                  <!-- /.btn-group -->
                  </div></div> </div></div> </div> 
                  
<div class="col-sm-12" style="background-color:#fff; height:180px;">
......
</div>

 
                  <!----/-----start models---------->
                  <!----/-----start models---------->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModalzero" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog12">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-2" style="text-align:left;">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:12px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:12px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; font-weight: ;">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br><br><br><br><br><br>

           <form class="form-horizontal" style="height:auto;">
            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home1" data-toggle="tab">Inbox</a>
                                </li>
                                <li><a href="#profile1" data-toggle="tab">Outbox</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                            <div class="tab-pane fade in active" id="home1" style="background-color:white;">
                                <br>
                             <form method="post" action="../../config/inline/editprocreqnorders.php">
		<table class="table table-bordered" style="background:ffffff;">
			<tr>
				<td>CONFIRMED BY : <input type="text" id="myCORNAME" name="CORNAME" value="<?php echo $nameofuser; ?>  " readonly="readonly" style="width:100%;"></td>

                <td>SIGNATURE : <input type="text" id="myCORSIGNATURE" name="CORSIGNATURE" value="" readonly="readonly" style="width:100%;"></td>

				<td>TITLE : <input type="text" id="myCORTITLE" name="CORTITLE" value="<?php echo $desc; ?>" style="width:100%;"></td>

				<td>DATE : <input type="text" name="CORDATE" id="myCORDATE" value="<?php echo date('Y-m-d');?>" readonly="readonly" style="width:100%;"></td>
				<td><input type="hidden" id="myid" name="id" value=""</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table> 
	</form>

	  <div id="work" style="width:100%; font-weight:normal;">
      <table id="example2" class="table table-striped table-bordered" width="100%" >
        <thead>
        <tr>
                     <th>REQ ID</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th>
                     <th>SUBJECT OF PROCUREMENT </th>
                     <th>CATEGORY</th>
                     <th>ESTIMATED-COST </th>
                     <th>STATUS</th>
                     <th>ACTION </th>
        </tr>
        </thead>
        <tfoot>
        <tr>
                     <th>REQ ID</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th>
                     <th>SUBJECT OF PROCUREMENT </th>
                     <th>CATEGORY</th>
                     <th>ESTIMATED-COST </th>
                     <th>STATUS</th>
                     <th>ACTION </th>
        </tr>
        </tfoot>
        <tbody>

       <script>
function incomingOrders(myid){

 var dts = myid.split("__");
 var id = dts[1];
 var op= dts[0];

 if(op=='000'){
  var dataString = "idx="+id+"&op="+op;
  $.ajax({ type: "POST",  url: "proc_executive",  data: dataString, cache: false,
           success: function(result){

		  return;
        }
  });
 }
 else{
 var dataString = "id="+id+"&op="+op;
  $.ajax({ type: "POST",  url: "proc_executive",  data: dataString, cache: false,
           success: function(result){
          window.location.href="executive.php?q=yes";
		  return;
        }
  });
 }

}
</script>

 <?php
include_once("config/inline/configproc.php");

$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE CORACTION ='AUTHORISED' AND AOACTION ='PENDING' ORDER BY id DESC");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['PROCUREMENTPLANREF']."***".$res['CORNAME']."***".$res['ITEM'];
		echo "<tr>";
		echo '<td><a id="000__'.$res['id'].'" href="javascript:void(0)" onclick="incomingOrders(this.id)">'.$res['id'].'</a></td>';
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['RFPDEPARTMENT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['CATEGORY']."</td>";
		echo "<td>".$res['TOTALCOST']."</td>";
		echo "<td>".$res['CORACTION']."</td>";
		echo '<td>
		<a id="1__'.$dts.'" href="javascript:void(0);"  data-toggle="tooltip" title="Reject"  onclick="incomingOrders(this.id)"> <span class="glyphicon glyphicon-remove"></span></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dts.'" href="javascript:void(0);"  data-toggle="tooltip" title="Approve" onclick="incomingOrders(this.id)"> <span class="glyphicon glyphicon-ok"></span></a>
		</td>';
	}
	?>
	</tbody>
  </table>
                <!-- /.table -->



                                </div> </div>
                                <div class="tab-pane fade" id="profile1">
                                <br>
                                 <div id="work" style="width:100%; font-weight:normal;">
    <table id="example3" class="table table-striped table-bordered" >
        <thead>
        <tr>
                <th>REQ ID</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th>
                     <th>SUBJECT OF PROCUREMENT </th>
                     <th>ESTIMATED COST </th>
                     <th>CONFIRMATION </th>
                     <th>DATE </th>
                     <th>APPROVAL</th>
                     <th>PROC'T STATUS</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
                     <th>REQ ID</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th>
                     <th>SUBJECT OF PROCUREMENT </th>
                     <th>ESTIMATED COST </th>
                     <th>CONFIRMATION </th>
                     <th>DATE </th>
                     <th>APPROVAL</th>
                     <th>PROC'T STATUS</th>
        </tr>
        </tfoot>
        <tbody>

       <script>
function procar(myid2){
var dts = myid2.split("***");
document.getElementById("myCATEGORY").value=dts[1];
document.getElementById("myid").value=dts[0];
document.getElementById("myPROCUREMENTSTATUS").value=dts[2];
document.getElementById("myITEM").value=dts[3];
}
</script>

 <?php
include_once("config/inline/configproc.php");

$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE RFPDEPARTMENT ='ADVOCACY AND RESEARCH' ORDER BY id DESC");

	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['CATEGORY']."***".$res['PROCUREMENTSTATUS']."***".$res['ITEM'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['RFPDEPARTMENT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>";
		echo "<td>".$res['TOTALCOST']."</td>";
		echo "<td>".$res['CORACTION']."</td>";
		echo "<td>".$res['CORDATE']."</td>";
	    echo "<td>".$res['AOACTION']."</td>";
		echo "<td>".$res['PROCUREMENTSTATUS']."</td>";
	}
	?>
	</tbody>
  </table>
                <!-- /.table -->

                                </div>
                                </div>



           <div class="col-sm-12">
         </form>
         </div>


                                        </div>
                                        <div class="modal-footer" style="background-color:red;">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!----/-----start models---------->

                <div class="row">
                       <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 

            <form class="form-horizontal" style="height:auto; background-color:#000000">

            <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:40px; text-align:center;"> ACCESS DENIED</p>
            <p style="color:#ffffff; font-weight:bold;  font-size:15px; text-align:center;"> <?php echo $nameofuser; ?>,  </p> 
             
            <p></p>
             <p style="color:red; font-weight:bold; font-size:40px; text-align:center;font-family:lcd;"> <?php echo date('Y-m-d'); ?></p>
       
           
           <div class="col-sm-12">
           <div class="panel-body">
         </form> 
         </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>

                   <!----/-----start models---------->

               <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="imprex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
             <div class="col-sm-12" >
<img src="../assets/img/logs.PNG" width="100%" height="100%">
</div>  
            <form class="form-horizontal" style="height:auto;">
             
            <div class="box-header with-border">
              <h3 class="box-title" style="text-align:center;">My imprest <b style="color:blue;">remote</b> storage</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       Imprest requisition tracker
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                    <BR>
     <table class="table table-bordered" style="margin-top: -25px;border: 0px;background-color:#f9f9f9;">
    <thead> 
      <tr class=" ">
       <th  style="height:50px; border:2px; border-radius:0px;background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Rejected orders &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5;background-color:#f9f9f9; border-radius:11px;">
       
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='REJECTED' AND IDNUMBER = '$pf' GROUP BY ORDERNO ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
       </th>
       
       <th  style="height:50px; border:2px; background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Due for authorising &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:blue; text-align:center;border:4px solid #ecf0f5; border-radius:11px;background-color:#f9f9f9;">
       
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND IDNUMBER = '$pf'  GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  
       </p>
       </th> 
        
       <th  style="height:50px; border:2px; background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;">  Due for approval &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:black; text-align:center; border:2px solid #ecf0f5;background-color:#f9f9f9; border-radius:11px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND IDNUMBER = '$pf' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
        </th>
        
       <th  style="height:50px; border:2px; background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Cash out &nbsp / &nbsp line items</p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5;  background-color:#f9f9f9; border-radius:11px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PENDING' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
       
       / 
       
  <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PAID' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>         
              
        </p>
        </th>
      </tr>
    </thead>   
  </table>
                    </div>
                  </div>
                </div>
                 
                <div class="panel box box-dangers">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTh">
                        Rejected orders by item description
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTh" class="panel-collapse collapse">
                    <div class="box-body">
                    
                      <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
        <th style="width:10px;">ID.</th>
        <th style="width:25px;">SERIAL*NO.</th> 
                     <th style="width:45px;">CREATED*DATE</th>
					 <th style="width:10px;">AMOUNT</th>    
                     <th style="width:10px;">VIEW</th> 
                     <th style="width:10px;">DEL</th>    
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='REJECTED' AND IDNUMBER = '$pf' ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";   
		echo "<td>".$res['ORDERNO']."</td>";  
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['IMP_DEBIT']."</td>";  
		echo '<td> <a id="1__'.$dts.'" href="javascript:void(0)"  onclick="getstuff(this.id)" data-toggle="tooltip" title="open" 
		<span class="glyphicon glyphicon-ok"> </span></a>  </td>'; 
	    echo "<td><a href=\"config/inline/pettyviewhomedel.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";	  			
	}
    ?>
	</tbody>
  </table>
                     
                    </div>
                  </div>
                </div>
                
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThreex">
                        Petty cash payment history by invoice No.
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThreex" class="panel-collapse collapse">
                    <div class="box-body">
                    <table id="example10" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>  
       
                     <th style="width:45px;">CREATED.DATE</th>
                      <th style="width:25px;">INVOICE.NO</th>  
                     <th style="width:10px;">STATUS</th> 
                     <th style="width:10px;">PMT.DATE</th>       
                     <th style="width:10px; color:red; background-color:#ecf0f5;">ACTION</th> 
                      
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND APPROACTION ='APPROVED' AND IDNUMBER = '$pf' AND CASHOUT ='PAID' 
                                          GROUP BY ORDERNO ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";    
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['ORDERNO']."</td>";    
		echo "<td>".$res['CASHOUT']."</td>"; 
		echo "<td>".$res['RECIEVEDDATE']."</td>";    
		echo "<td><a href=\"config/inline/petty_payments_history.php?ORDERNO=$res[ORDERNO]\">Open</a></td>";		 
	}
    ?>
	</tbody>
  </table> 
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
           
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:red;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
 
              
                    <!----/-----start models---------->

               <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="imprex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
              <div class="col-sm-12" >
<img src="../assets/img/logs.PNG" width="100%" height="100%">
</div>  
            <form class="form-horizontal" style="height:auto;">  
            <div class="box-header with-border"> 
              <h3 class="box-title" style="text-align:center;">My imprest <b style="color:blue;">remote</b> storage</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       Imprest requisition tracker
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                    <BR>
     <table class="table table-bordered" style="margin-top: -25px;border: 0px;background-color:#f9f9f9;">
    <thead> 
      <tr class=" ">
       <th  style="height:50px; border:2px; border-radius:0px;background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Rejected orders &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5;background-color:#f9f9f9; border-radius:11px;">
       
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='REJECTED' AND IDNUMBER = '$pf' GROUP BY ORDERNO ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
       </th>
       
       <th  style="height:50px; border:2px; background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Due for authorising &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:blue; text-align:center;border:4px solid #ecf0f5; border-radius:11px;background-color:#f9f9f9;">
       
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND IDNUMBER = '$pf'  GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  
       </p>
       </th> 
        
       <th  style="height:50px; border:2px; background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;">  Due for approval &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:black; text-align:center; border:2px solid #ecf0f5;background-color:#f9f9f9; border-radius:11px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND IDNUMBER = '$pf' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
        </th>
        
       <th  style="height:50px; border:2px; background-color:#f9f9f9;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Cash out &nbsp / &nbsp line items</p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5;  background-color:#f9f9f9; border-radius:11px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PENDING' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
       
       / 
       
  <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PAID' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>         
              
        </p>
        </th>
      </tr>
    </thead>   
  </table>
                    </div>
                  </div>
                </div>
                 
                <div class="panel box box-dangers">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTh">
                        Rejected orders
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTh" class="panel-collapse collapse">
                    <div class="box-body">
                    
                      <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
        <th style="width:10px;">ID.</th>
        <th style="width:25px;">SERIAL NO.</th> 
                     <th style="width:45px;">CREATED*DATE</th>
					 <th style="width:10px;">AMOUNT</th>    
                     <th style="width:10px;">VIEW</th> 
                     <th style="width:10px;">DEL</th>    
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='REJECTED' AND IDNUMBER = '$pf' ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";   
		echo "<td>".$res['ORDERNO']."</td>";  
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['IMP_DEBIT']."</td>";  
		echo '<td> <a id="1__'.$dts.'" href="javascript:void(0)"  onclick="getstuff(this.id)" data-toggle="tooltip" title="open" 
		<span class="glyphicon glyphicon-ok"> </span></a>  </td>'; 
	    echo "<td><a href=\"config/inline/pettyviewhomedel.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";	  			
	}
    ?>
	</tbody>
  </table>
                     
                    </div>
                  </div>
                </div>
                
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Petty cash requisition history
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                     
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
           
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:red;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
 
                   <!----/-----start models---------->

                 

                   <div class="col-lg-12">
                        <div class="modal fade" id="medical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#ecf0f5;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2"> </h4>
                                        </div>
                                        <div class="modal-body">
           
            <form class="form-horizontal" style="height:auto;">
            <img src="../assets/img/logsbig.PNG" width="100%" height="30%">   
            <center> <legend style="color:#000; font-weight:bold;font-size:15px;">MEDICAL SERVICE REPORTS </legend> </center>
             
			 
			  <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1x" data-toggle="tab">Number of clients</a></li>
              <li><a href="#tab_2x" data-toggle="tab">STI's</a></li>
              <li><a href="#tab_3x" data-toggle="tab">Other ailments</a></li> 
			  <li><a href="#tab_4x" data-toggle="tab">Referrals</a></li> 
              <li class="pull-left header"><i class="fa fa-th"></i> Navigation Tabs</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1x">
                 
			 
			<div class="col-sm-2" style="height:auto; background-color:#ecf0f5;"> 
              <div class="nav-tabs-custom" style="margin-top: 14px;">
            <ul class="nav nav-tabs pull-right">
			    <li class="pull-left header"><i class="fa fa-th"></i> Periodic Tabs</li>
              <li class="active"><a href="#tab_daily" data-toggle="tab" style="width: 180px;">Daily</a></li>
              <li><a href="#tab_weekly" data-toggle="tab" style="width: 180px;">Weekly</a></li>
              <li><a href="#tab_monthly" data-toggle="tab" style="width: 180px;">Monthly</a></li>
			  <li><a href="#tab_quarterly" data-toggle="tab" style="width: 180px;">Quarterly</a></li>
              <li><a href="#tab_annual" data-toggle="tab" style="width: 180px;">Annual</a></li> 
            </ul>
           
           
			</div> </div>  
			
			<div class="col-sm-10"> 
			 <div class="tab-content">
			 <div class="tab-pane active" id="tab_daily">
			 
			  <?php
	include_once 'config/config_pmgt.php';
?>
     
      <table id="exnclients" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">DATE</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
 
     
   
   </div>  
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_weekly">
 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
  <table id="exweekclients" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">WEEK</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_monthly">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exmonthclients" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">MONTH</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			   
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_quarterly">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exqtrclients" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">QUATER</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			  <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_annual">
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exyearclients" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
	 
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">YEAR</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
	</div>
    </div></div>
</div>
 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2x">
			  
			  <div class="col-sm-2" style="height:auto; background-color:#ecf0f5;"> 
              <div class="nav-tabs-custom" style="margin-top: 14px;">
            <ul class="nav nav-tabs pull-right">
			    <li class="pull-left header"><i class="fa fa-th"></i> Periodic Tabs</li>
              <li><a href="#tab_daily1" data-toggle="tab" style="width: 180px;">Daily (STI)</a></li>
              <li><a href="#tab_weekly1" data-toggle="tab" style="width: 180px;">Weekly</a></li>
              <li><a href="#tab_monthly1" data-toggle="tab" style="width: 180px;">Monthly</a></li>
			  <li><a href="#tab_quarterly1" data-toggle="tab" style="width: 180px;">Quarterly</a></li>
              <li><a href="#tab_annual1" data-toggle="tab" style="width: 180px;">Annual</a></li> 
            </ul>
           
           
			</div> </div>  
			
			<div class="col-sm-10"> 
			 <div class="tab-content">
			 <div class="tab-pane active" id="tab_daily1">
			 
			  <?php
	include_once 'config/config_pmgt.php';
?>
     
      <table id="exnclients1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">DATE</th> 
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination 
	                                    WHERE MEDICALTOPIC ='STI'  
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination`  
	                                 WHERE MEDICALTOPIC ='STI' 
									 ORDER BY DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
 
     
   
   </div>  
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_weekly1">
 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
  <table id="exweekclients1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">WEEK</th> 
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination 
	                                    WHERE MEDICALTOPIC ='STI'  
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination`  
	                                 WHERE MEDICALTOPIC ='STI' 
									 ORDER BY DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array(); 
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{} 
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_monthly1">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exmonthclients1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">MONTH</th> 
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination 
	                                    WHERE MEDICALTOPIC ='STI'  
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination`  
	                                 WHERE MEDICALTOPIC ='STI' 
									 ORDER BY DATECREATED DESC"); 
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array(); 
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								 
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			   
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_quarterly1">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exqtrclients1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">QUATER</th> 
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination 
	                                    WHERE MEDICALTOPIC ='STI'  
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination`  
	                                 WHERE MEDICALTOPIC ='STI' 
									 ORDER BY DATECREATED DESC"); 
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array(); 
									 
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{} 
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			  <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_annual1">
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exyearclients1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
	 
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">YEAR</th> 
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination 
	                                    WHERE MEDICALTOPIC ='STI'  
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination`  
	                                 WHERE MEDICALTOPIC ='STI' 
									 ORDER BY DATECREATED DESC"); 
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array(); 
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{} 
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
	</div>
		 </div>
              </div></div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3x">
			  
              <div class="col-sm-2" style="height:auto; background-color:#ecf0f5;"> 
              <div class="nav-tabs-custom" style="margin-top: 14px;">
            <ul class="nav nav-tabs pull-right">
			    <li class="pull-left header"><i class="fa fa-th"></i> Periodic Tabs</li>
              <li><a href="#tab_daily2" data-toggle="tab" style="width: 180px;">Daily (other ailments)</a></li>
              <li><a href="#tab_weekly2" data-toggle="tab" style="width: 180px;">Weekly</a></li>
              <li><a href="#tab_monthly2" data-toggle="tab" style="width: 180px;">Monthly</a></li>
			  <li><a href="#tab_quarterly2" data-toggle="tab" style="width: 180px;">Quarterly</a></li>
              <li><a href="#tab_annua2" data-toggle="tab" style="width: 180px;">Annual</a></li> 
            </ul>
           
           
			</div> </div>  
			
			<div class="col-sm-10"> 
			 <div class="tab-content">
			 <div class="tab-pane active" id="tab_daily2">
			 
			  <?php
	include_once 'config/config_pmgt.php';
?>
     
      <table id="exnclients2" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">DATE</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
 
     
   
   </div>  
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_weekly2">
 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
  <table id="exweekclients2" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">WEEK</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_monthly2">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exmonthclients2" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">MONTH</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			   
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_quarterly2">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exqtrclients2" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">QUATER</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			  <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_annual2">
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exyearclients2" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
	 
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">YEAR</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
	</div>
	</div>
			</div>	
              </div>
			  <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4x"> 
                
              <div class="col-sm-2" style="height:auto; background-color:#ecf0f5;"> 
              <div class="nav-tabs-custom" style="margin-top: 14px;">
            <ul class="nav nav-tabs pull-right">
			    <li class="pull-left header"><i class="fa fa-th"></i> Periodic Tabs</li>
              <li><a href="#tab_daily3" data-toggle="tab" style="width: 180px;">Daily (Referrals)</a></li>
              <li><a href="#tab_weekly3" data-toggle="tab" style="width: 180px;">Weekly</a></li>
              <li><a href="#tab_monthly3" data-toggle="tab" style="width: 180px;">Monthly</a></li>
			  <li><a href="#tab_quarterly3" data-toggle="tab" style="width: 180px;">Quarterly</a></li>
              <li><a href="#tab_annua3" data-toggle="tab" style="width: 180px;">Annual</a></li> 
            </ul>
           
           
			</div> </div>  
			
			<div class="col-sm-10"> 
			 <div class="tab-content">
			 <div class="tab-pane active" id="tab_daily3">
			 
			  <?php
	include_once 'config/config_pmgt.php';
?>
     
      <table id="exnclients3" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">DATE</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
 
     
   
   </div>  
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_weekly3">
 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
  <table id="exweekclients3" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">WEEK</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_monthly3">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exmonthclients3" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">MONTH</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			   
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_quarterly3">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exqtrclients3" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">QUATER</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			  <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_annual3">
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exyearclients3" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
	 
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:16%;">YEAR</th>
        <th style="width:14%;text-align:center;">FEMALES</th>
        <th style="width:14%;text-align:center;">MALES</th>
		<th style="width:14%;text-align:center;">TOTAL</th>
        <th style="width:14%;text-align:center;">10-14</th>
		<th style="width:14%;text-align:center;">15-19</th>
        <th style="width:14%;text-align:center;">20-24</th> 
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0] +$grps[1] + $grps[2]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0] +$grps1[1] + $grps1[2]; ?></td> 
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
             
			
			<td style="text-align:center;"><?php echo $grps[0] + $grps1[0]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[1] + $grps1[1]; ?></td>
             
            <td style="text-align:center;"><?php echo $grps[2] + $grps1[2]; ?></td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
				
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom --> 
      </div>
			 


			<div class="col-sm-12">
           </div> </form> 
            


                                        </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    
<div class="col-lg-12">
                        <div class="modal fade" id="pregnancy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#ecf0f5;">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2"> </h4>
                                        </div>
                                        <div class="modal-body">
           
            <form class="form-horizontal" style="height:auto;">
            <img src="../assets/img/logsbig.PNG" width="100%" height="30%">   
            <center> <legend style="color:#000; font-weight:bold;font-size:15px;">PREGNANCY REPORT </legend> </center>
              
			<div class="col-sm-2" style="height:auto; background-color:#ecf0f5;"> 
              <div class="nav-tabs-custom" style="margin-top: 14px;">
            <ul class="nav nav-tabs pull-right">
			    <li class="pull-left header"><i class="fa fa-th"></i> Periodic Tabs</li>
              <li class="active"><a href="#tab_dailyp" data-toggle="tab" style="width: 180px;">Daily</a></li>
              <li><a href="#tab_weeklyp" data-toggle="tab" style="width: 180px;">Weekly</a></li>
              <li><a href="#tab_monthlyp" data-toggle="tab" style="width: 180px;">Monthly</a></li>
			  <li><a href="#tab_quarterlyp" data-toggle="tab" style="width: 180px;">Quarterly</a></li>
              <li><a href="#tab_annualp" data-toggle="tab" style="width: 180px;">Annual</a></li> 
            </ul>
           
           
			</div> </div>  
			
			<div class="col-sm-10"> 
			 <div class="tab-content">
			 <div class="tab-pane active" id="tab_dailyp">
			 
			  <?php
	include_once 'config/config_pmgt.php';
?>
     
      <table id="exnclientsp" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="">DATE</th>  
        <th style="text-align:center;">AGE GROUPS</th> 
		<th style="text-align:center;">HCG NEGATIVE</th>
        <th style="text-align:center;">HCG POSITIVE</th>
		<th style="text-align:center;">TOTAL</th>
		<th style="text-align:center;">WANTED</th>
        <th style="text-align:center;">UN.WANTED</th>
		<th style="text-align:center;">TOTAL </th>
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM`hcg`   
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * `hcg`   
									  ORDER BY DATECREATED DESC");  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row; 
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `hcg` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
			<td>  <?php echo $row['AGE_GROUP']; ?>  </td>
			
            <td style="text-align:center;"><?php echo $NEG; ?></td> 
            						 
            <td style="text-align:center;"> <?php echo $POS; ?> </td>
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"><?php echo $NEG + $POS; ?></td>
			
			<td style="text-align:center;"><?php echo $WAN; ?></td>
			
            <td style="text-align:center;"><?php echo $UWAN; ?></td> 
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"> <?php echo $WAN + $UWAN; ?> </td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
 
     
   
   </div>  
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_weeklyp">
 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
  <table id="exweekclientsp" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style=" ">WEEK</th>
         <th style="text-align:center;">AGE GROUPS</th> 
		<th style="text-align:center;">HCG NEGATIVE</th>
        <th style="text-align:center;">HCG POSITIVE</th>
		<th style="text-align:center;">TOTAL</th>
		<th style="text-align:center;">WANTED</th>
        <th style="text-align:center;">UN.WANTED</th>
		<th style="text-align:center;">TOTAL </th>
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM`hcg`   
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * `hcg`   
									  ORDER BY DATECREATED DESC");  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row; 
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `hcg` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
			<td>  <?php echo $row['AGE_GROUP']; ?>  </td>
			
            <td style="text-align:center;"><?php echo $NEG; ?></td> 
            						 
            <td style="text-align:center;"> <?php echo $POS; ?> </td>
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"><?php echo $NEG + $POS; ?></td>
			
			<td style="text-align:center;"><?php echo $WAN; ?></td>
			
            <td style="text-align:center;"><?php echo $UWAN; ?></td> 
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"> <?php echo $WAN + $UWAN; ?> </td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_monthlyp">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exmonthclientsp" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style=" ">MONTH</th>
          <th style="text-align:center;">AGE GROUPS</th> 
		<th style="text-align:center;">HCG NEGATIVE</th>
        <th style="text-align:center;">HCG POSITIVE</th>
		<th style="text-align:center;">TOTAL</th>
		<th style="text-align:center;">WANTED</th>
        <th style="text-align:center;">UN.WANTED</th>
		<th style="text-align:center;">TOTAL </th>
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM`hcg`   
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * `hcg`   
									  ORDER BY DATECREATED DESC");  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row; 
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `hcg` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
			<td>  <?php echo $row['AGE_GROUP']; ?>  </td>
			
            <td style="text-align:center;"><?php echo $NEG; ?></td> 
            						 
            <td style="text-align:center;"> <?php echo $POS; ?> </td>
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"><?php echo $NEG + $POS; ?></td>
			
			<td style="text-align:center;"><?php echo $WAN; ?></td>
			
            <td style="text-align:center;"><?php echo $UWAN; ?></td> 
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"> <?php echo $WAN + $UWAN; ?> </td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			   
			 
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_quarterlyp">
	 
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exqtrclientsp" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style=" ">QUATER</th>
          <th style="text-align:center;">AGE GROUPS</th> 
		<th style="text-align:center;">HCG NEGATIVE</th>
        <th style="text-align:center;">HCG POSITIVE</th>
		<th style="text-align:center;">TOTAL</th>
		<th style="text-align:center;">WANTED</th>
        <th style="text-align:center;">UN.WANTED</th>
		<th style="text-align:center;">TOTAL </th>
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM`hcg`   
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * `hcg`   
									  ORDER BY DATECREATED DESC");  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row; 
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `hcg` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
			<td>  <?php echo $row['AGE_GROUP']; ?>  </td>
			
            <td style="text-align:center;"><?php echo $NEG; ?></td> 
            						 
            <td style="text-align:center;"> <?php echo $POS; ?> </td>
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"><?php echo $NEG + $POS; ?></td>
			
			<td style="text-align:center;"><?php echo $WAN; ?></td>
			
            <td style="text-align:center;"><?php echo $UWAN; ?></td> 
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"> <?php echo $WAN + $UWAN; ?> </td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
  
			</div>	 
			  <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_annualp">
         <?php
	include_once 'config/config_pmgt.php';
?>
     
     <table id="exyearclientsp" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
	 
      <thead> 
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style=" ">YEAR</th>
          <th style="text-align:center;">AGE GROUPS</th> 
		<th style="text-align:center;">HCG NEGATIVE</th>
        <th style="text-align:center;">HCG POSITIVE</th>
		<th style="text-align:center;">TOTAL</th>
		<th style="text-align:center;">WANTED</th>
        <th style="text-align:center;">UN.WANTED</th>
		<th style="text-align:center;">TOTAL </th>
      </tr>
    <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM`hcg`   
									    GROUP BY DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * `hcg`   
									  ORDER BY DATECREATED DESC");  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row; 
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `hcg` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['CID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
			<td>  <?php echo $row['AGE_GROUP']; ?>  </td>
			
            <td style="text-align:center;"><?php echo $NEG; ?></td> 
            						 
            <td style="text-align:center;"> <?php echo $POS; ?> </td>
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"><?php echo $NEG + $POS; ?></td>
			
			<td style="text-align:center;"><?php echo $WAN; ?></td>
			
            <td style="text-align:center;"><?php echo $UWAN; ?></td> 
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"> <?php echo $WAN + $UWAN; ?> </td> 
		    
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:16%;"> 0</th>
        <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"> </th>
         <th style="text-align:center;width:14%;"></th>
		 <th style="text-align:center;width:14%;"> </th> 
    </td>
	</tr>
    <?php
}
	}
?>

</table>
	</div> 
</div> 
</div>
<div class="col-sm-12">
           </div> </form> 
            


                                        </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div>
    <strong>Copyright &copy; 2017 <b>Naguru Teenage Information and Health Center .<b>  All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading"> </h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <div class="menu-info">



              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading"> </h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">

            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


<script src="../assets/lib/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->

</body>
</html>


 <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->

 <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1a = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+ 'background-color:#fff; width:100%;">';

	 var  s2b = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+ 'background-color:#fff; width:100%;">';

	 var  s3c =  '<select name="uom[]" required="required"  id="uom_'+rowCount+'"'+
                'style= " margin-left:-5px; width:100%; background-color:#fff;" >'+
					                    '<option>NIL</option>'+
             		                    '<option>PCS</option>'+
                                        '</select>';

	 var  s4d =  '<input type="numeric" name="escost[]" id="escost_'+rowCount+'"  required="required" '+
                 'style= " margin-left:-5px; width:100%; background-color:#fff;" >';

     var  s5e =  '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'"  required="required" '+
                 'style= " margin-left:-5px; width:100%; background-color:#fff;" >';


	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
								  '<td>'+s3c+' </td>'+
	                              '<td>'+s4d+' </td>'+
				                  '<td>'+s5e+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;

  }

  function deleteRow16(tableID) {
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
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="desc_"+x;
          table.rows[x].cells[2].childNodes[0].id="qty_"+x;
		  table.rows[x].cells[3].childNodes[0].id="uom_"+x;
		  table.rows[x].cells[4].childNodes[0].id="escost_"+x;
		  table.rows[x].cells[5].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}
  </script>
   <!-- /.END PROCUREMENT REQUISITION  SCRIPT -->


   <!-- /.START IMPREST REQUEST SCRIPT -->

     <script>
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("TOTALSUM").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="impdescription[]" id="impdescription_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	 var  s2b =  '<select name="impcurrency[]" required="required"  id="impcurrency_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="impdebit[]" id="impdebit_'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
		  
		  calcmoney(tableId);

  }

  function deleteRow166(tableID) {
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
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="impdescription_"+x;
          table.rows[x].cells[2].childNodes[0].id="impcurrency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="impdebit_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

  <!-- /.END IMPREST REQUEST SCRIPT -->

  <!-- /.START CASH PAYMENT VOUCHER SCRIPT -->
   <script>
  function addRow17(tableId){
     var  s1a = '<input type="text" name="description" id="description_'+rowCount+'" required="required" '+ 'style= "margin-left:-5px'+                 'background-color:#fff; width:100%;">';

	 var  s2b =  '<select name="currency" required="required"  id="currency_'+rowCount+'"'+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="debit" id="debit_'+rowCount+'"  required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s3c+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows2').value=rowCount;

  }

  function deleteRow17(tableID) {
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
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[1].childNodes[0].id="description_"+x;
          table.rows[x].cells[2].childNodes[0].id="currency_"+x;
		  table.rows[x].cells[3].childNodes[0].id="debit_"+x;
          }
           document.getElementById('mytable_rows2').value=rowCount-1;
}

  </script>
  <!-- /.END CASH PAYMENT VOUCHER SCRIPT -->

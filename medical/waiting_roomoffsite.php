<?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
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
  <meta http-equiv="refresh" content="3">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/assets/bootstrap/css/bootstrap3.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/assets/ionicons.min.css">
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../admin/assets/notifier.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/skin-blue.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
   <link rel="stylesheet" href="../admin/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../admin/datatable/css/buttons.dataTables.min.css">

  <script src="../admin/datatable/js/jquery-1.12.3.js"></script>
  <script src="../admin/datatable/js/jquery.dataTables.min.js"></script>
  <script src="../admin/datatable/js/bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../admin/datatable/js/dataTables.buttons.min.js"></script>
  <script src="../admin/datatable/js/buttons.flash.min.js"></script>
  <script src="../admin/datatable/js/jszip.min.js"></script>
  <script src="../admin/datatable/js/pdfmake.min.js"></script>
  <script src="../admin/datatable/js/vfs_fonts.js"></script>
  <script src="../admin/datatable/js/buttons.html5.min.js"></script>
  <script src="../admin/datatable/js/buttons.print.min.js"></script>
   
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
	  "iDisplayLength": 4,
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
	  "iDisplayLength": 6,
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
	  "iDisplayLength": 100,
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
 
   
</head>
<body class="hold-transition skin-blue sidebar-mini"> 
 
  <header class="main-header">
    <!-- Logo -->
    <a href="admin/admin_user.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels --> 
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NTIHC</b> &nbsp;&nbsp IMM System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
	  <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
		    <li><a href="waiting_room.php"> On site <span class="sr-only">(current)</span></a></li>  
             <li><a href="waiting_roomcheck.php">Today <span class="sr-only">(current)</span></a></li> 			
            <li class="active"><a href="waiting_roomoffsite.php"> Off site<span class="sr-only">(current)</span></a></li>  
			 <li><a href="waiting_entries.php"> pending entries<span class="sr-only">(current)</span></a></li>  
			          
          </ul>
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <i class="glyphicon glyphicon-user"><b>Welcome:</b></i>   
             
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"> </li>
              <li>
              
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                         <img src="assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
                      </div>
                      <h4>
                         Ntihc M.E team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not use this awesome application?</p>
                    </a>
                  </li>
                  <!-- end message --> 
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i> 
              <span class="">&nbsp<?php echo $nameofuser; ?>  </span>
            </a>  
             
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-th"></i> 
              <span class="">&nbsp<?php echo $desc; ?>  </span>
            </a> 
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-share"></i> 
              <span class="">&nbsp<?php echo $dept; ?>  </span>
            </a> 
            
            <ul class="dropdown-menu">
              <li class="header"> 
               
              </li>
              <li> 
                 
          </li>
               
          <li> 
          </li>
        </ul>
      </div>
    </nav>
  </header> 
   
      <div class="row">
	  <div class="col-sm-12" > 
 
          <center> <legend style="color: #000;
font-weight: bold;
font-size: 20px;
font-family:lcd;
background-color: #F39C12;">WAITING ROOM - OFF SITE</legend> </center> 
          
  
  		  
    <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
			    <th>ID</th>
                <th>DATE</th>
				<th>DATA</th>
                <th>VIST</th> 
                <th>CLIENT NAME</th>
                <th>EPISODE</th>
                <th>SERVICE CATEGORY</th>
                <th>CHECKIN</th>
                <th>NOW</th>
				<th>H</th>
				<th>M</th>
                <th>CHECK.OUT</th>
                <th>LAST SERVICE</th>
				<th>SERVICE PROVIDER</th>
				<th>STATUS</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>DATE</th>
				<th>DATA</th>
                <th>VIST</th> 
                <th>CLIENT NAME</th>
                <th>SVC.EPISODE</th>
                <th>SERVICE CATEGORY</th>
                <th>CHECKIN</th>
                <th>NOW</th>
				<th>H</th>
				<th>M</th>
                <th>TIME OUT</th>
                <th>LAST SERVICE</th>
				<th>SERVICE PROVIDER</th>
                <th>STATUS</th>
            </tr>
        </tfoot>
        <tbody>

<?php

//$level = trim($_GET['q']);



function getLevel(){
  	  $str123 = trim($str123);
  	  $tempstr = str_replace('__','_',$str123);

  	if($str123==''){ 		 return '<td style="background-color:blue;">'.$str123.'</td>';  	 }
  	else
  	{
  		  $str1234=array();
            $str1234=explode('_',$tempstr);
  		  $cnt = count( $str1234);
         	if($str1234[$cnt-1]==''){   	 return '<td style="background-color:red;">'.$str123.'</td>';    	 }

  		               else{     return '<td style="background-color:green;">'.$str123.'</td>'; 	}
  	}

  return false;
}

function getIndicator($str123){
	  $str123 = trim($str123);
	  $tempstr = str_replace('__','_',$str123);

	if($str123==''){ 		 return '<td style="background-color:#dd4b39;">'.$str123.'</td>';  	 }
	else
	{
		  $str1234=array();
          $str1234=explode('_',$tempstr);
		  $cnt = count( $str1234);
       	if($str1234[$cnt-1]==''){   	 return '<td style="background-color:#00a65a;">'.$str123.'</td>';    	 }

		               else{     return '<td style="background-color:#f39c12;">'.$str123.'</td>'; 	}
	}

} 
		
require('configdb.php'); 
$sql = "SELECT RID, DATECREATED, SERVICE_EPISODE, VISTTYPE,SERVICETYPE,DATATYPE,AGE1, CHECKIN, CURRENT_TIME(),
                    HOUR(CURRENT_TIME()-CHECKIN) as ahour,
					MINUTE(CURRENT_TIME()-CHECKIN) as amins,
					TIMEOUT, CLIENTNAME, SERVICEPROVIDER, INSVCSTATUS, OUTSVSTATUS FROM cmpatientsregistration 
					WHERE DATATYPE = 'OFF SITE'  AND INSVCSTATUS ='NO'
					GROUP BY NTIHCNO ORDER BY RID DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
	             '<td>'.$row["RID"].'</td>'.
                  getIndicator($row["DATECREATED"]).  
				 getIndicator($row["DATATYPE"]). 
                 getIndicator($row["VISTTYPE"]).  
				 getIndicator($row["CLIENTNAME"]).
				 getIndicator($row["SERVICE_EPISODE"]).
				 getIndicator($row["SERVICETYPE"]).   
			     getIndicator($row["CHECKIN"]).
                 getIndicator($row["CURRENT_TIME()"]).
				 getIndicator($row["ahour"]). 
				 getIndicator($row["amins"]). 
				 getIndicator($row["TIMEOUT"]). 
                 getIndicator($row["INSVCSTATUS"]). 
				 getIndicator($row["SERVICEPROVIDER"]).
                 '<td>'.$row["OUTSVSTATUS"].'</td></tr>';

 }

?>

	  </tbody>
  </table> 

  
  
  

</form>
              
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
       
        
           
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
     <b> </b> 
   

<!-- jQuery 2.2.3 --> 
 
<script src="../assets/lib/moment/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<!-- Page script -->
  
</body>
</html>
  <script>
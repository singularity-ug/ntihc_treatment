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
$connect = new mysqli("localhost", "root", "", "ahr");
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 

 
 <?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stddxx ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $stddxx=$stddxx. "" . $row['period'] ."";   }
  }
$connect->close();
?> 
 
  <?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$aa ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $aa=$aa. "" . $row['preparedby'] ."";   }
  }
$connect->close();
?> 

<?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$bb ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $bb=$bb. "" . $row['prepname'] ."";   }
  }
$connect->close();
?> 
<?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$cc ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $cc=$cc. "" . $row['reviewedby'] ."";   }
  }
$connect->close();
?> 
<?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$dd ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $dd=$dd. "" . $row['revname'] ."";   }
  }
$connect->close();
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
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

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#uom"+num).val(data[2]);
  $("#qty").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BUDGETAMOUNT").val(data[5]);
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
	  "iDisplayLength": 2,
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
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#exvips').DataTable( {
	  "iDisplayLength":4,
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
     $('#example7').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
 
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
     $('#exofficer').DataTable( {
	 "iDisplayLength": 12, 
        dom: 'Bfrtip',
        buttons: [
		{extend :'copy',
		 title:'myfile'
		},
		{extend :'csv',
		 title:'myfile'
		},
		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
  
  

    <script>
  $(document).ready(function() {
     $('#exverification').DataTable();
  } );
  </script>
  
 <script>
  $(document).ready(function() {
     $('#exregister').DataTable( {
		"iDisplayLength": 12, 
        dom: 'Bfrtip',
        buttons: [
		{extend :'copy',
		 title:'FIXED ASSETS REGISTER'
		},
		{extend :'csv',
		 title:'FIXED ASSETS REGISTER'
		},
		{extend :'excel',
		 title:'FIXED ASSETS REGISTER'
		},
		{extend :'pdf',
		 title:'FIXED ASSETS REGISTER'
		},
		{extend :'print',
		 title:'FIXED ASSETS REGISTER'
		}
        ]
    } );
  } );
  </script>

    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ecf0f5;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #ecf0f5;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 10px;
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
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  
  <header class="main-header">
    <nav class="navbar navbar-static-top"> 
        <div class="navbar-header">
          <a href="../sys_dashboard.php" class="navbar-brand"><b>Dashboard</b> </a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="asset.php" class="button5" > Find<span class="sr-only">(current)</span></a></li> 
            
            <li class="active"><a href=<button class="small-box-footer" data-toggle="modal"  data-target="#m2"></button> 
			Add asset<span class="sr-only">(current)</span></a></li> 
            
			 <li class="active"><a href=<button class="small-box-footer" data-toggle="modal"  data-target="#regist"></button> 
			Fixed assets Register<span class="sr-only">(current)</span></a></li> 
            
             <li class="active"><a href="asset_config.php" class="button5" > Tweak<span class="sr-only">(current)</span></a></li> 
			<li class="active"><a href="print_verification_rpt.php" class="button5" > Report<span class="sr-only">(current)</span></a></li> 
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
              <span class="glyphicon glyphicon-user" style="font-size:16px;"><b>Welcome:</b></span>
         <B style="font-size:11px;"> &nbsp <?php echo $nameofuser; ?>  </B>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Ntihc M.E team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not use this awesome application?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#"> </a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                 <img src="../../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>

                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">

                  <p>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
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

                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="../../index.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="row" style="background-color:#ecf0f5;">
       <!-- Content Header (Page header) -->
    <br>
    <div class="col-sm-4" style="height:auto; background-color:;">

               <div class="box-group" id="accordion">
                 <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                 <div class="panel box box-primary">
                   <div class="box-header with-border">
                     <h4 class="box-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      <b>ASSETS MANAGEMENT SUB MODULE</b>
                       </a>
                     </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in" style="background-color: #ecf0f5;">

                       <div class="progress">
                   	  <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                       <B>Classification of Fixed Assets </b><span class="sr-only">35% Complete (success)</span></div>
                       <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   	  </div>

					 <BR>
                     
            <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:33.3333333%;border:2px solid #a9abae;background-color:#ecf0f5;">  
                 <a class="quick-btn" href="#" style=" border-radius:5px; background-color:#fff;">
                                <i class="icon-check icon-2x"></i>
                                <span> Registered assets </span>
                                <span class="label label-danger"> &nbsp
								 <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

								</span>
                            </a> 
                </th> 
				 
		           
				<th style="width:33.3333333%; border:2px solid #a9abae;"> 
                 <a class="quick-btn" href="#" style=" border-radius:5px; background-color:#fff;">
                                <i class="icon-check icon-2x"></i>
                                <span> Total operational assets </span>
                                <span class="label label-danger"> &nbsp
								 <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND FUNCTIONALSTATUS = 'OPERATIONAL' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

								</span>
                            </a>
                  </th>   
				  
				<th style="width:33.3333333%;border:2px solid #a9abae; background-color:#ecf0f5;">  
                <a class="quick-btn" href="#" style=" border-radius:5px; background-color:#fff;">
                                <i class="icon-check icon-2x"></i>
                                <span> Faulty assets </span>
                                <span class="label label-danger"> &nbsp
								 <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND FUNCTIONALSTATUS = 'FAULTY' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

								</span>
                            </a>
							
                </th>  
				  
              </tr>
			  </table> 
                      
					  
                       <br>
                  <table id="example" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>ASSET.CATEGORY</th>
                   <th>STATUS</th>
                     <th>TOTAL</th>   	
                  </tr>
                  </tfoot>
                  <tbody>

             <?php
             include_once("dbconfig.php");

             $result = mysqli_query($mysqli, "SELECT COUNT(id), CATEGORY, FUNCTIONALSTATUS FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE'
			                                         GROUP BY CATEGORY, FUNCTIONALSTATUS ORDER BY COUNT(id) DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['CATEGORY'];
              echo "<tr>"; 
               echo "<td>".$res['CATEGORY']."</td>"; 
			    echo "<td>".$res['FUNCTIONALSTATUS']."</td>"; 
			   echo "<td>".$res['COUNT(id)']."</td>";   
             } 
              ?>
             </tbody>
             </table>
  
           <div class="progress">
           <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
            <b>  </b> <span class="sr-only">35% Complete (success)</span></div>
           <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
           </div>
          <p></p>

                    <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#alloc"></button> 
					<B style="color:green;">Allocation of assets   </B> |  </a> 
                     <a class="quick-btn" href="#" style="border-radius:5px; "> 
                                <i class="icon-check icon-2x"></i>
                                <span> <b>Total assets holding cost</b></span>  
                                <span class="label label-success"> &nbsp 
								  <?php

require('../../php/configcontemporary.php');
$sql = "SELECT ROUND(SUM(PROPERTYCOST),2) FROM properties WHERE PHYSICALSTATUS = 'AVAILABLE'";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.  
	      '<td>'.$row['ROUND(SUM(PROPERTYCOST),2)'].'</td>'. 
   '</tr>';
$x=$x+1;

 }

 ?>
								</span>
                            </a>
                      
                    
             <table class="table-responsive" style="margin-top:10px;">
             <table class="table" style="border:0px;">
                <tr>
			    <th style="width:33.33333%;border:2px solid #a9abae;background-color:#ecf0f5;"> 
                
                
                 </th>
				<th style="width:33.33333%;border:2px solid #a9abae;">   <a class="quick-btn" href="#" style=" border-radius:5px; background-color:#fff;">
                                <i class="icon-check icon-2x"></i>
                                <span> Purchased </span>
                                <span class="label label-success"> &nbsp
								 <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND HOLDTYPE = 'PURCHASED' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

								</span>
                            </a>
				  </th> 
				  <th style="width:33.33333%;border:2px solid #a9abae;">
                    <a class="quick-btn" href="#" style=" border-radius:5px; background-color:#fff;">
                                <i class="icon-check icon-2x"></i>
                                <span> Donations </span>
                                <span class="label label-success"> &nbsp
								 <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND HOLDTYPE = 'DONATION' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

								</span>
                            </a>
		          </th>    
              </tr>
			  </table>        
					   
               <table class="table-responsive" style="margin-top:10px;">
             <table class="table" style="border:0px;">
                <tr> 
                 </th>
				<th style="width:33.33333%;border:2px solid #a9abae;">   <a class="quick-btn" href="#" style=" border-radius:5px; background-color:#fff;">
                                <i class="icon-check icon-2x"></i>
                                <span> Uncodified assets </span>
                                <span class="label label-success"> &nbsp
								 <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND CODIFICATIONSTATUS = 'PENDING' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

								</span>
                            </a>
				  </th> 
				  <th style="width:33.33333%;border:2px solid #a9abae;">
                    <a class="quick-btn" href="#" style=" border-radius:5px; background-color:#fff;">
                                <i class="icon-check icon-2x"></i>
                                <span> Serviceable assets </span>
                                <span class="label label-success"> &nbsp
								 <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND SERVICEREQUIREMENT = 'APPLICABLE' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

								</span>
                            </a>
		          </th>    
                  
              		  <th style="width:33.33333%;border:2px solid #a9abae;">
                    <a class="quick-btn" href="#" style=" border-radius:5px; background-color:#fff;">
                                <i class="icon-check icon-2x"></i>
                                <span> Due for service </span>
                                <span class="label label-danger"> &nbsp
								 <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND SERVICEREQUIREMENT = 'APPLICABLE' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    

								</span>
                            </a>
		          </th>      
              </tr>
			  </table>                         
              <BR>
					<a href=<button class="small-box-footer" data-toggle="modal"  data-target="#mfin"></button> 
					<B style="color:green;">Add verification details</B></a>            
                           
                    
			 </div> </div>
             
              <table class="table-responsive" style="margin-top:0px;" > 
            <table class="table">
              <tr> 
			    <th style="width:40%; text-align:left;"><a href="asset.php" class="button5" > 
                Service alerts<span class="sr-only">(current)</span></a></li> 
			       </th>
				  
                 
                 <th style="width:60%; text-align:left;"> <a href="asset.php" class="button 5" >  
                Unverified assets &nbsp; <b style="color:blue; font-weight:bold;">  <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' AND QTYVERIFIED = '0' GROUP BY id")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>     </b>
				<span class="sr-only">(current)</span></a></li> 
			       </th> 

			 </tr>             
            </table>
            
             
             
             </div> </div>

		<div class="col-sm-8" style="height:auto;"> 


		   
      <div class=""  id="getvoucher" >  </div>
                     <script>

               function getvoucher(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'view_pmt.php?q='+odno,
                            success : function(data){
                                     $('#getvoucher').html(data);
     								$("#vouc").modal("show");
                                      }
                    });
                    }

               </script>
			   
		   
		 <div class=""  id="getdetails" >  </div>
                <script>

          function getdetails(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_view.php?q='+odno,
                       success : function(data){
                                $('#getdetails').html(data);
								$("#outx").modal("show");
                                 }
               });
               }

          </script>   

   <img src="../../assets/img/logsbig.PNG" width="100%" height="100%">
  
 <center> <p style="color:#000; font-weight:bold;font-size:12px;margin-top: -20px;"> <b>ASSETS VERIFICATION REPORT FOR &nbsp <?php echo $stddxx; ?></b> </p> </center> 

           
                    <table id="exverification" class="table table-striped table-bordered" style="font-weight:normal;"> 
 <thead>
          <tr> 
                     <th>NO</th> 
              	     <th>DESCRIPTION OF INVENTORY</th> 
                     <th>CATEGORY</th> 
					 <th>LOCATION</th> 
                     <th>CONDITION</th>   
					 <th>QTY COUNTED</th> 
                     <th>QTY IN LEDGER</th>
					 <th>VARIANCE</th> 
					 
            </tr>
        </thead>
        <tfoot>
          <tr>
           
                     <th>NO</th> 
              	     <th>DESCRIPTION OF INVENTORY</th> 
                     <th>CATEGORY</th> 
					 <th>LOCATION</th> 
                     <th>CONDITION</th>   
					 <th>QTY COUNTED</th> 
                     <th>QTY IN LEDGER</th>
					 <th>VARIANCE</th>    
            </tr>
        </tfoot>
        <tbody> 
<?php
require('config.php'); 

$sql = "SELECT COUNT(id),PROPERTYDESCRIPTION, CATEGORY, LOCATION, SUM(QTYVERIFIED), FUNCTIONALSTATUS, COUNT(id)-SUM(QTYVERIFIED) as variance
               FROM properties WHERE PHYSICALSTATUS = 'AVAILABLE' 
			   GROUP BY PROPERTYDESCRIPTION ORDER BY CATEGORY DESC";
   
 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){ 
  echo'<tr>'.
       '<td>'.$x.'</td>'.  
	   '<td>'.$row['PROPERTYDESCRIPTION'].'</td>'.
	   '<td>'.$row['CATEGORY'].'</td>'.  
       '<td>'.$row['LOCATION'].'</td>'. 
	   '<td>'.$row['FUNCTIONALSTATUS'].'</td>'. 
	   '<td>'.$row['SUM(QTYVERIFIED)'].'</td>'.  
	   '<td>'.$row['COUNT(id)'].'</td>'.  
	   '<td>'.$row['variance'].'</td>'.  
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
   <form class="form-horizontal" action="" method="POST" style="height:auto; background-color:#ecf0f5;">	
      <table class="table-responsive" style="margin-top:-10px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Prepared by:</th>
				
                <td style="width:30%"><input type="text"  value="<?php echo $aa; ?> "   readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>  
				
				<th style="width:20%; text-align:left;">Reviewed and approved by:</th>
                <td style="width:30%"> <input type="text" value="<?php echo $cc; ?> "   readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 

			 </tr>             
            </table> 
			
			 
            <table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Name:</th>
                <td style="width:30%"><input type="numeric"   value="<?php echo $bb; ?> "   readonly="readonly" 
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
				
				
				<th style="width:20%; text-align:left;">Name</th>
                <td style="width:30%"> <input type="text" value="<?php echo $dd; ?> "  readonly="readonly" 
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
			 </tr>             
            </table> 
			
			<table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr>  
				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"> <input type="text"readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>

				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"> <input type="text"readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
			 </tr>             
            </table> 
            
            <table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr>  
				<th style="width:20%; text-align:left;">Signature</th>
                <td style="width:30%"> <input type="text"readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>

				<th style="width:20%; text-align:left;">Signature</th>
                <td style="width:30%"> <input type="text"readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
			 </tr>             
            </table> 
   </form>                   
                  
			  
			  
            </div> 
            <!-- /.box-body -->
          </div> 
          <!-- /.box -->
        </div>
        <!-- /.col -->   
		
	 
		</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 25%;  color:#000; text-align:left; font-weight:bold;">
            <span class="sr-only">35% Complete (success)</span></div>
            <div class="progress-bar progress-bar-success" style="width: 25%"><span class="sr-only">20% Complete (warning)</span></div>
            <div class="progress-bar progress-bar-warning" style="width: 25%"><span class="sr-only">20% Complete (warning)</span></div>
            <div class="progress-bar progress-bar-success" style="width: 25%"><span class="sr-only">10% Complete (danger)</span></div>
            </div>





                    <div class="col-lg-12">
                        <div class="modal" id="impres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

               <div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logsbig.PNG" width="100%" height="100%">
</div>

           <div class=""  id="cccpettyview" >  </div>
                <script>

          function cccgetstuff(cjose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'config/inline/cccpettyview.php?q='+odno,
                       success : function(data){
                                $('#cccpettyview').html(data);
								$("#impres").modal("show");
                                 }
               });
               }

          </script>
           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>

         </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>



                        <div class="modal" id="m2" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body"> 
 <img src="../../assets/img/logsbig.PNG" width="100%" height="100%"> 
 <center> <p style="color:#000; font-weight:bold;font-size:12px;"> <b>ASSET REGISTRATION FORM</b> </p> </center> 
 
<hr  style="margin-top: -8px;">   


         <form class="form-horizontal" action="property_process.php" method="POST">
                
		   
     <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:14%;border:2px solid #a9abae;">Description </th>
				<th style="width:36%;border:2px solid #a9abae;"> <input type="text"  id="PROPERTYDESCRIPTION" name="PROPERTYDESCRIPTION"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
			  
			   <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:14%;border:2px solid #a9abae;">Category </th>
				<th style="width:36%;border:2px solid #a9abae;"> <select id="CATEGORY" name="CATEGORY"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  
				        <option> </option>
                        <option>COMPUTER EQUIPMENT AND ACCESSORIES</option>
                        <option>OFFICE EQUIPMENT</option> 
                        </select></th>   
				</td>
              </tr>
			  </table> 
			  
			  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:15%;border:2px solid #a9abae;background-color:#ecf0f5;">Codification </th>
				<th style="width:15%;border:2px solid #a9abae;">  
				  <input type="radio" name="CODIFICATIONSTATUS" id="CODIFICATIONSTATUS" value="PENDING" checked>
                  <label for="PENDING">PENDING</label>
				  </th> 
				  <th style="width:15%;border:2px solid #a9abae;">
		          <input name="CODIFICATIONSTATUS" type="radio" id="CODIFICATIONSTATUS" value="CODIFIED" >
		          <label for="CODIFIED">CODIFIED</label> 
		          </th> 
		           
				  <th style="width:13%;border:2px solid #a9abae;">
		          <input name="CODIFICATIONSTATUS" type="radio" id="CODIFICATIONSTATUS" value="N/A" >
		          <label for="N/A">N/A</label> 
		          </th>   
				  
				<th style="width:17%;border:2px solid #a9abae; background-color:#ecf0f5;">Registration No. </th>
				<th style="width:25%;border:2px solid #a9abae;"> <input type="text"  id="ENGRAVEDNUMBER" name="ENGRAVEDNUMBER"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				  
              </tr>
			  </table> 
			  
			 
				  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:15%;border:2px solid #a9abae;background-color:#ecf0f5;">Hold type </th>
				<th style="width:15%;border:2px solid #a9abae;">  
				  <input type="radio" name="HOLDTYPE" id="HOLDTYPE" value="PURCHASED" checked>
                  <label for="PURCHASED">PURCHASED</label>
				  </th> 
				  <th style="width:15%;border:2px solid #a9abae;">
		          <input name="HOLDTYPE" type="radio" id="HOLDTYPE" value="DONATION" >
		          <label for="DONATION">DONATION</label> 
		          </th> 
		           
				  <th style="width:13%;border:2px solid #a9abae;">
		          <input name="HOLDTYPE" type="radio" id="HOLDTYPE" value="RENTED" >
		          <label for="RENTED">RENTAL</label> 
		          </th>   
				  
				<th style="width:17%;border:2px solid #a9abae; background-color:#ecf0f5;">Recieved date </th>
				<th style="width:25%;border:2px solid #a9abae;"> <input type="date"  name="DATEOFPURCHASE"    id="DATEOFPURCHASE" 
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				  
              </tr>
			  </table> 
			  
			    <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			   <th style="width:14.8%;border:2px solid #a9abae; background-color:#ecf0f5;">Asset make</th>
				<th style="width:41.4%;border:2px solid #a9abae;"> <input type="text"  id="MAKE" name="MAKE"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				
				<th style="width:16.6%;border:2px solid #a9abae; ">Cost </th>
				<th style="width:24.2%;border:2px solid #a9abae;"> <input type="numeric"  id="PROPERTYCOST" name="PROPERTYCOST"   
				style="width:100%; font-weight:normal; background-color:#fff;">  </th>    
              </tr>
			  </table> 
  
			   <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Supplier / Donor /Rented from </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="SUPPLIEDBY" name="SUPPLIEDBY"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
 
             <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:35%;border:2px solid #a9abae;">Asset location </th>
				<th style="width:65%;border:2px solid #a9abae;"> <input type="text"  id="LOCATION" name="LOCATION"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
			  
			  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:20%;border:2px solid #a9abae;">Officer responsible </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="RESPONSIBLEOFFICER" name="RESPONSIBLEOFFICER"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
				
				 <th style="width:20%;border:2px solid #a9abae;">Phone contact </th>
				<th style="width:30%;border:2px solid #a9abae;"> <input type="text"  id="OFFICERCONTACT" name="OFFICERCONTACT"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th>  
              </tr>
			  </table> 
   
				  <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:16%;border:2px solid #a9abae;background-color:#FFF;">Functional status </th>
				<th style="width:17%;border:2px solid #a9abae;">  
				  <input type="radio" name="FUNCTIONALSTATUS" id="FUNCTIONALSTATUS" value="OPERATIONAL" checked>
                  <label for="OPERATIONAL">OPERATIONAL</label>
				  </th> 
				  <th style="width:13%;border:2px solid #a9abae;">
		          <input name="FUNCTIONALSTATUS" type="radio" id="FUNCTIONALSTATUS" value="FAULTY" >
		          <label for="FAULTY">FAULTY</label> 
		          </th> 
		           
				    <th style="width:15%;border:2px solid #a9abae;background-color:#FFF;">Serviceability</th>
				<th style="width:20%;border:2px solid #a9abae;">  
				  <input type="radio" name="SERVICEREQUIREMENT" id="SERVICEREQUIREMENT" value="NOT APPLICABLE" checked>
                  <label for="SERVICEREQUIREMENT">NOT APPLICABLE</label>
				  </th>   
				  <th style="width:17%;border:2px solid #a9abae;">
		          <input name="SERVICEREQUIREMENT" type="radio" id="SERVICEREQUIREMENT" value="APPLICABLE" >
		          <label for="SERVICEREQUIREMENT">APPLICABLE</label> 
		          </th>    
              </tr>
			  </table>  
		   
		 
         <table class="table-responsive" style="margin-top:0px;">If applicable,please add service dates 
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:16%;border:2px solid #a9abae;background-color:#FFF;"> Next service date</th>
				<th style="width:17%;border:2px solid #a9abae;">  
				  <input type="date" name="NEXTDUESERVICE" id="enddate"  style="width:100%;"> 
				  </th> 
				  
				   <th style="width:16%;border:2px solid #a9abae;background-color:#FFF;">Remind date</th>
				  <th style="width:17%;border:2px solid #a9abae;">
		          <input  type="date" name="REMINDDATE" id="startdate" style="width:100%;"> 
		          </th>    
              </tr>
			  </table>  
     
        <td style="background-color:#f9f9f9;"> <center> <input type="submit" name="button" id="button" value="Save " 
	 style= " font-size:15px; font-weight:bold; border-radius:11px; "/>  <center></td>  
    </tr> 
    </tbody>
    </table>  
           </form>
               </div>
                                        <div class="modal-footer"> 
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>	
					

			  <div class="modal" id="regist" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #dd4b39;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
			
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:20px; text-align:center;"> FIXED ASSETS REGISTER</p>

             <table id="exregister" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NO.</th>
                <th>ASSET.NO.</th>  
                <th>DESCRIPTION</th> 
                <th>CATEGORY</th> 
                <th>LOCATION</th> 
                <th>RESPONSIBLE.OFFICER</th>
                <th>COST</th>
                <th>HOLD.TYPE</th>
                <th>RECIEVED DATE</th>
                <th>SUPPLIER</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>NO.</th>
                <th>ASSET.NO.</th>  
                <th>DESCRIPTION</th> 
                <th>CATEGORY</th> 
                <th>LOCATION</th> 
                <th>RESPONSIBLE.OFFICER</th>
                <th>COST</th>
                <th>HOLD TYPE</th>
                <th>RECIEVED DATE</th>
                <th>SUPPLIER</th> 
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

		               else{     return '<td style="background-color:#FFE065;">'.$str123.'</td>'; 	}
	}

}
  

require('config.php');
$sql = "SELECT * FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' ORDER BY CATEGORY DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["id"].'</td>'.
                 '<td>'.$row["ENGRAVEDNUMBER"].'</td>'. 
				 getIndicator($row["PROPERTYDESCRIPTION"]). 
                 getIndicator($row["CATEGORY"]). 
                 getIndicator($row["LOCATION"]).
			     getIndicator($row["RESPONSIBLEOFFICER"]).
                 getIndicator($row["PROPERTYCOST"]).
				 getIndicator($row["HOLDTYPE"]). 
                 getIndicator($row["DATEOFPURCHASE"]).
                 '<td>'.$row["SUPPLIEDBY"].'</td></tr>';

 }

?>

	  </tbody>
  </table>  
  
               
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#dd4b39; color:#ffffff;">
                                           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>

					
					
					
				
			  <div class="modal" id="alloc" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #dd4b39;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
			
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:14px; text-align:center;"> NUMBER OF ASSETS BY LOCATION AND OFFICER RESPONSIBLE</p>

         
  <table id="exofficer" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No.</th>
              <th>LOCATION</th>
              <th>RESPONSIBLE OFFICER</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No.</th> 
			  <th>LOCATION</th>
              <th>RESPONSIBLE OFFICER</th>
              <th>TOTAL</th>
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php

require('config.php');
$sql = "SELECT COUNT(id), LOCATION,RESPONSIBLEOFFICER FROM properties  WHERE PHYSICALSTATUS = 'AVAILABLE' GROUP BY LOCATION,RESPONSIBLEOFFICER ORDER BY COUNT(id) DESC ";

$res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
	       '<td>'.$row['LOCATION'].'</td>'.
		  '<td>'.$row['RESPONSIBLEOFFICER'].'</td>'.
	      '<td>'.$row['COUNT(id)'].'</td>'.
		     '<td><input type="button"  onclick="postvalues(this.id)" value="CLICK"></td>'.
   '</tr>';
$x=$x+1;

 }

 ?>
	  </tbody>
  </table> 
  
               
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#dd4b39; color:#ffffff;">
                                           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>

					
			
					<div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="mfin" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;"> 
                                             
                                        </div>
                                        <div class="modal-body">
                                     <form class="form-horizontal" method="post" action="perriods_process.php">
   <p>Assets verification</p>
   
   <table class="table-responsive" style="margin-top:0px;" > 
            <table class="table">
              <tr>  
				<th style="width:20%; text-align:left;">Financial year</th>
                <td style="width:30%"> <input type="text"name="financialyear" id="myfinancialyear" value=""  
				style="width:100%; text-align:left;background-color:#FFF;"></td>

				<th style="width:20%; text-align:left;">Verification period</th>
                <td style="width:30%"> <input type="text" name="period" id="myperiod" value=""   
				style="width:100%; text-align:left;background-color:#FFF;"></td>
			</tr>             
            </table>  
               
            <input type="hidden" name="status" id="mystatus" value="Active" > 
            <input type="hidden" id="myID" name="id" value="" > 
                
          
            <table class="table-responsive" style="margin-top:-14px;"> 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Prepared by:</th>
				
                <td style="width:30%"><input type="text" name="preparedby" id="preparedby"  value="<?php echo $desc; ?>" readonly=""   
				style="width:100%; text-align:left;background-color:#FFF;"></td>  
				
				<th style="width:20%; text-align:left;">Reviewed and approved by:</th>
                
                <td style="width:30%"> <input type="text" name="reviewedby" id="reviewedby"  
				style="width:100%; text-align:left;background-color:#FFF;"></td> 

			 </tr>             
            </table> 
		    
			 
            <table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Name:</th>
                <td style="width:30%"><input type="numeric"   name="prepname" id="prepname" value="<?php echo $nameofuser; ?>" readonly="readonly"
				style="width:100%; text-align:left;background-color:#FFF;"></td> 
				
				
				<th style="width:20%; text-align:left;">Name</th>
                <td style="width:30%"> <input type="text" name="revname" id="revname"  
				style="width:100%; text-align:left;background-color:#FFF;"></td> 
			 </tr>             
            </table> 
			
			<table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr>  
				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"> <input type="date"  name="prepdate" id="prepdate"  placeholder="dd /mm / yyyy" 
				style="width:100%; text-align:left;background-color:#FFF;"></td>

				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"> <input type="text"readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
			 </tr>             
            </table> 
       <center><input type="submit" name="update" value="Save" > </center>
	     </form>
               
                    
        <table id="exvips" class="table table-striped table-bordered" >
        <thead>
        <tr>   
             <th style="text-transform:uppercase;font-size:10px;">FINANCIAL YEAR</th> 
              <th style="text-transform:uppercase;font-size:10px;">SUBJECT</th>
              <th style="text-transform:uppercase;font-size:10px;">STATUS</th> 
              <th style="text-transform:uppercase;font-size:10px;">PREPARED BY</th>
              <th style="text-transform:uppercase;font-size:10px;">NAME</th> 
              <th style="text-transform:uppercase;font-size:10px;">REVIEW AND APPROVAL</th> 
              <th style="text-transform:uppercase;font-size:10px;">NAMES</th>  
              <th style="text-transform:uppercase;font-size:10px;">ACTION</th>  
        </tr>
        </thead>
        <tfoot>
        <tr> 
              <th style="text-transform:uppercase;font-size:10px;">FINANCIAL YEAR</th> 
              <th style="text-transform:uppercase;font-size:10px;">SUBJECT</th>
              <th style="text-transform:uppercase;font-size:10px;">STATUS</th> 
              <th style="text-transform:uppercase;font-size:10px;">PREPARED BY</th>
              <th style="text-transform:uppercase;font-size:10px;">NAME</th> 
              <th style="text-transform:uppercase;font-size:10px;">REVIEW AND APPROVAL</th> 
              <th style="text-transform:uppercase;font-size:10px;">NAMES</th>  
              <th style="text-transform:uppercase;font-size:10px;">ACTION</th>  
        </tr>
        </tfoot>
        <tbody>
 <?php 
include_once("dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM financialperiod ORDER BY financialyear DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['financialyear']."***".$res['period']."***".$res['status'];
	      
		echo "<tr>";   
		echo "<td>".$res['financialyear']."</td>"; 
		echo "<td>".$res['period']."</td>"; 
		echo "<td>".$res['status']."</td>";  
		echo "<td>".$res['preparedby']."</td>"; 
		echo "<td>".$res['prepname']."</td>"; 
		echo "<td>".$res['reviewedby']."</td>"; 
		echo "<td>".$res['revname']."</td>"; 
		echo "<td><a href=\"financialperiod_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Truncate</a></td>";	  			
	}
?>
	</tbody>
  </table>    
   
  </div>
           
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                             </div></div>
                           </div> 
					
            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m4" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:40px; text-align:center;"> ACCESS DENIED</p>

            <p></p>
            <p style="color:red; font-weight:bold; font-size:40px; text-align:center;font-family:lcd;"> <?php echo date('Y-m-d'); ?></p>
            </p>
            <p></p>

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

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">

      </div>
      <center> <strong>Copyright &copy; 2017  Naguru Teenage Information and Health Center</strong> All rights
    reserved.</center>
    </div>
    <!-- /.container -->
  </footer>
</div>
 
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

 <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" name="desc[]" id="desc_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="uom[]" id="uom_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';			 

	 var  s3cc = '<input type="numeric" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">'; 

     var  s7gg = '<input type="numeric" name="marktp[]" id="marktp_'+rowCount+'" onkeyup="calcsubtt(\'mytable100\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';
		 

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+   
				                  '<td>'+s7gg+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId); 
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
		  table.rows[x].cells[2].childNodes[0].id="uom_"+x;
          table.rows[x].cells[3].childNodes[0].id="qty_"+x;  
		  table.rows[x].cells[6].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
   <!-- /.END pmt SCRIPT -->
   
   
   
   
   <script>
	 
	 
	 function calcmoney(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[3].childNodes[0].value);
		   }
		   document.getElementById("xero").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="imp[]" id="imp_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:#fff; width:100%;">';
	 
     var  s2b = '<input type="text" name="cur[]" id="cur_'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+              
	 'background-color:#fff; width:100%;">'; 

	 var  s3c =  '<input type="numeric" name="bix[]" id="bix_'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-right:0px; width:100%; background-color:#fff;" >';


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
		  table.rows[x].cells[1].childNodes[0].id="imp_"+x;
          table.rows[x].cells[2].childNodes[0].id="cur_"+x;
		  table.rows[x].cells[3].childNodes[0].id="bix_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

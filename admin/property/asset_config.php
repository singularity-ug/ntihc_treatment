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

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>pcms</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="../plugins/ionslider/ion.rangeSlider.css">
  <!-- ion slider Nice -->
  <link rel="stylesheet" href="../plugins/ionslider/ion.rangeSlider.skinNice.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="../plugins/bootstrap-slider/slider.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

   <link rel="stylesheet" href="../assets/notifier2.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css"> 
  
  
 <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css"> 
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons --> 
  
  
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
     $('#exprop').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'PROPERTY REGISTER'
		},
		{extend :'pdf',
		 title:'PROPERTY REGISTER '
		},
		{extend :'print',
		 title:'PROPERTY REGISTER'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#exverifier').DataTable( {
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
     $('#example13').DataTable();
  } );
  </script>

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PLANDETAILS"+num).val(data[2]);
  $("#CODE").val(data[2]);
  $("#FINANCIALPERIOD").val(data[3]);
  $("#FIRSTQTR").val(data[4]);
  $("#SECONDQTR").val(data[5]);
  $("#THIRDQTR").val(data[6]);
  $("#FOURTHQTR").val(data[7]);
  $("#BUDGETAMOUNT").val(data[8]); 
  $("#BUDGETSTATUS").val(data[9]);       
  
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "serch_budget.php",
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
				font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header" style="margin-top: -20px;">
 <?php
  require('config.php');
  ?>
    
          <li>
          <li>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
          <li class="active"><a href="../sys_dashboard.php" class="" >Dashboard<span class="sr-only">(current)</span></a></li> 
           
          <li class="active"><a href="asset.php" class="" >Home<span class="sr-only">(current)</span></a></li> &nbsp;
             
             
          <li class="active"><a href=<button class="button 5" data-toggle="modal" data-target="#m6"  style="height: 33px; margin-top: 9px; padding: 5px 7px;"></button> 
          Service reminders<span class="sr-only">(current)</span></a></li>  
           
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../index.php"> <span class="glyphicon glyphicon-log-in"></span> Logout</li></a>
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
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color: #fff">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        .
           
        <div class="pull-left image"> 
        </div> 
        <div class="pull-left info">
           
        </div>
      </div>
      <!-- search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" style="margin-top: -90px;">
        <li class="header" font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;background-color:#f44336;">Assets management module</li> 
          <li>
          <a href="asset_config.php" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style="  color:#fff;">Asset verification center </span>
            <span class="pull-right-container">
              <small class="  ">   </small>
            </span>
          </a>
        </li>
        
          <li>
          <a href="property_verified.php"   style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#FF9800;">
            <i class="fa fa-th"></i> <span style=" color:#fff;">Assets verification report</span>
            <span class="pull-right-container">
              <small class=" "> </small>
            </span>
          </a>
        </li>
          
         
         
          <li>
         <a href="asset_data.php" style="height: 33px; border-radius: 0px; padding: 6px 9px; margin-top: 10px; color:#fff;background-color:#00a65a;">
            <i class="fa fa-th"></i> <span style="color:#fff;">Export data</span>
            <span class="pull-right-container">
              <small class="">  </small>
            </span>
          </a>
        </li>
          
       <br> 
       
         <div id="reviews" class="carousel slide" data-ride="carousel" style="border:0px; border-radius:11px;">

                                    <div class="carousel-inner" style="background-color: #FFFFFF;height:auto;">
                                            <div class="item active">
                                            <div class="col-sm-10 col-md-offset-1">
                                             <p> <center>Assts due for</center> </p>
                                             <p> <center>servicing </center></p>
                                              <center> <span style="font-size:30px;"> 
                                                0    
                                               </span> </center><br>
                                                <div class="user-img pull-right">

                                                </div> 
                                                <h5 class="pull-right"> <strong class="c-black"> </strong></h5></center>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="col-sm-10 col-md-offset-1">
                                           <p><center> Long over due</center></p> 
                                            <p><center>service</center></p>
                                             <center>  <span style="font-size:30px;">
                                        0
                                        </span></center>
                                            <br>
                                                 <div class="user-img pull-right">
                                                </div>
                                               <center> <h5 class="pull-right"> <strong class="c-black"> </strong></h5> </center> 
                                            </div>
                                        </div>
  
                                          
                                    </div>
                                    <!--INDICATORS-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active" style="background-color:green;"></li>
                                        <li data-target="#reviews" data-slide-to="1" style="background-color:yellow;"></li>  
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->
                                    
                                    </div></ul>
                                    
        <center> <b style="color:#000; text-align:center;"> </b> </center>
       <a href="#" style="margin-top: 10px; color:#fff;">
         <canvas id="canvas" width="400" height="400" style="height: 100%; width:100%;background-color:#f44336;">
			</canvas> </a></li>
            
         
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #fff;"> 
    <section class="content-header">  
    </section>
<br>
    <!-- Main content -->
    <section class="content"> 
        <div class="col-xs-12">
          <div class="box box-primary" style="margin-top: -11px;">
            <div class="box-header"> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
               
                 <div class="col-sm-12" style="height:auto; "> 
                <div class="row">
                <div class="row text-center pad-top">
                <div class="panel-body">
                  <div class="col-lg-2 col-xs-6">
                      <div class="div-square">
                         <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#m2"></button> 
                         <img src="../../database icons/admin.jpg"width="100" height="100" style="height:50%; width:50%;" class="img-circle">
                      <h4 style="font-size:14px;"> Add new asset</h4>
                      </a>
                      </div> 
                      </div>  
                
                  
                  <div class="col-lg-2 col-xs-6">
                      <div class="div-square">
                        <a href=<button class="small-box-footer" data-toggle="modal" data-target="#m3"></button>
                       <img src="../../database icons/20151012_561baec335c5f.png"width="100" height="100" style="height:50%; width:50%;" class="img-circle">
                      <h4 style="font-size:14px;">Verification laucher</h4>
                      </a>
                      </div> 
                      </div> 
                      
                <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><center>
                         <?php
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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
?> </center></h3>

              <p>Available assets</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div> 
          </div>
        </div>
        <!-- ./col -->
         
                     
        
         <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><center>
               <?php
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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
             </center></h3>

              <p>Operational assets</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div> 
          </div>
        </div>
        <!-- ./col -->
      

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
 <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><center>
                                                              
 <?php
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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
              </center></h3>

              <p> Faulty assets</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div> 
          </div>
        </div>
        <!-- ./col -->
      
        
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><center>
                                 
                                             
 <?php
$link = mysqli_connect("localhost", "root", "toor2", "contemporary");

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
?>   </h3>

              <p>Un verified assets</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div> 
          </div>
        </div>
        <!-- ./col --> 
          
        </div>
        <!-- /.col --> 

                      </i></a> 
                 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div></div>   </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
              
                <div class="table-responsive mailbox-messages"> 
             <div class="col-sm-12">
              
               
       <div class=""  id="verify" >  </div>
                     <script>

               function getprocform(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'verify.php?q='+odno,
                            success : function(data){
                                     $('#verify').html(data);
     								$("#procreqnn").modal("show");
                                      }
                    });
                    }

               </script>   
               <br>
 <table id="exverifier" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                 
                  <th>ID</th> 
                  <th>ASSET.NO.</th>
                  <th>DESCRIPTION</th> 
                  <th>MAKE</th>
                  <th>ACQUISITION.DATE</th> 
                  <th>AGE</th>  
                  <th>ACQUISITION.COST</th> 
                  <th>VERIFIED</th> 
                   <th>ACTION</th>  
                  <th> </th> 
                 </tr>
        </thead>
        <tfoot>
          <tr>
           <th>ID</th> 
                  <th>ASSET.NO.</th>
                  <th>DESCRIPTION</th> 
                  <th>MAKE</th>
                  <th>ACQUISITION.DATE</th> 
                  <th>AGE</th>  
                  <th>ACQUISITION.COST</th> 
                  <th>VERIFIED</th> 
                   <th>ACTION</th>  
                   <th> </th>  
            </tr>
        </tfoot>
        <tbody>  
             <?php
             include_once("configpcmsdb.php");

             $result = mysqli_query($mysqli, "SELECT id,PROPERTYDESCRIPTION,CATEGORY, CODIFICATIONSTATUS,ENGRAVEDNUMBER,
			                                         VERIFICATIONSTATUS,  DATEOFPURCHASE, MAKE,PROPERTYCOST,SUPPLIEDBY,
													 LOCATION,RESPONSIBLEOFFICER,OFFICERCONTACT,FUNCTIONALSTATUS,
													 SERVICEREQUIREMENT,NEXTDUESERVICE,REMINDDATE, 
			 CURDATE(), TIMESTAMPDIFF(YEAR,DATEOFPURCHASE,CURDATE()) AS age 
			 FROM properties ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxcc = $res['ENGRAVEDNUMBER']."***".$res['id']."***".$res['CATEGORY'];
							   
              echo "<tr>";  
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['ENGRAVEDNUMBER']."</td>";
			  echo "<td>".$res['PROPERTYDESCRIPTION']."</td>"; 
			  echo "<td>".$res['MAKE']."</td>";
			  echo "<td>".$res['DATEOFPURCHASE']."</td>"; 
			  echo "<td>".$res['age']."</td>"; 
			  echo "<td>".$res['PROPERTYCOST']."</td>";
			  echo "<td>".$res['VERIFICATIONSTATUS']."</td>"; 	
			  echo '<td> 
			    &nbsp;&nbsp; &nbsp;&nbsp;
			   <a id="2__'.$dtsxcc.'" href="javascript:void(0)" onclick="explodex(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-ok"> </span></a>
			  &nbsp;&nbsp; &nbsp;&nbsp;
			   <a id="3__'.$dtsxcc.'" href="javascript:void(0)" onclick="getprocform(this.id)" data-toggle="tooltip" title="Verify"
              <span class="glyphicon glyphicon-check"> </span></a>
			  
              </td>';
			  echo "<td> <a href=\"deleteasset.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	            } 
               ?>
             </tbody>
             </table>
             
                 
        
 
         
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            
            
              <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="xplosion" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fff;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" style="text-align:center;"> </h4>
                                        </div>
                                        <div class="modal-body">
  <div class=""  id="explodex" >  </div>
                     <script>

               function explodex(jose){
			   
     		  var odno = ((jose.split("__")[1]).split("***"))[1];			  
                     $.ajax({
                            type    : 'POST',
                            url     : 'get_updatedomx.php?q='+odno,
                            success : function(data){
                                     $('#explodex').html(data);
     								$("#xplosion").modal("show");
                                      }
                    });
                    }

               </script>  
 
                    <div class="col-sm-12">
           <div class="panel-body"> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                         
      </div>
       
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
       
    </div> 
    
      
  </footer>

  <!-- Control Sidebar -->
   
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar --> 
 
<script src="../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
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
	<script type="text/javascript" src=" ../assets/js/gauge.js"></script>
     
</body>
</html>

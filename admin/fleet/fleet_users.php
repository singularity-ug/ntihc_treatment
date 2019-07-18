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
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
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
	  "iDisplayLength": 6,
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
     $('#expurchases').DataTable( {
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
     $('#exdonext').DataTable( {
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
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('config.php');
  ?>

  <header class="main-header">
    <nav class="navbar navbar-static-top"> 
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>FLEET MGT</b> </a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav"> 
            <li><a href="fuel_mgt.php" class="button5" > Users<span class="sr-only">(current)</span></a></li>
           
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
              <li><a href="../../index.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>

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
      <!-- title row -->
      <div class="row">
      
       <div class="col-sm-4" style="height:auto; ">

            <div class="box-header with-border" style="background-color: #ecf0f5;border-radius: 1px;">
            
       <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient" class="button5">
         <center> <img src="../../assets/sysicons/imaggges.jpg" width="60" height="60" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href=<button class="" data-toggle="modal"  data-target="#bookVehicle"></button></i> &nbsp;&nbsp;Transport reservations <i class=""></i></a>
          </div>
        </div></div>
        <!-- ./col -->
        
        
         <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../assets/sysicons/icon reminderimages22.jpg" width="60" height="60" class="img-circle" style="border: 6px solid #ecf0f5;"></center>
            <div class="inner">  
            <a href=<a href=<button class="" data-toggle="modal"  data-target="#travel"></button></i>Travel.advance &nbsp; &nbsp; &nbsp;request <i class=" "></i></a>
          </div>
        </div></div>
        
        
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-grey-gradient">
         <center> <img src="../../assets/sysicons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png" width="60" height="60" class="img-circle" style="border: 6px solid #ecf0f5;" ></center>
            <div class="inner">  
            <a href=<button class="" data-toggle="modal"  data-target="#notificationModal"></button></i>Quick.links  <i class=""></i></a>
            
               <center> <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-left" role="menu"> 
        <li><a href="#"><i class="fa fa-th"></i>Fleet cordination tracker</a></li> 
        <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#timesheet"></button></i> &nbsp; My reservation trcker 
        &nbsp; <b>0</b></a></li> 
        <li><a href=<button class="fa fa-th" data-toggle="modal"  data-target="#timesheet"></button></i> &nbsp; My travel advance tracker 
        &nbsp; <b>0</b></a></li> 
            
        <li class="divider"></li>  
                  </ul></center>
                </div></div>
                 <div class="pull-right box-tools">
                <!-- button with a dropdown -->
          
        </div></div>
        <!-- ./col -->
        
        
        
        
        
        <BR>
		 
              <div class="nav-tabs-custom" style="margin-top:">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><b style="font-weight:bold; font-family:lcd; font-size:18px;">Fuel inbox</b> 
              &nbsp; <b class="button5"> Approvals</b></a></li>
              <li><a href="#tab_2-2" data-toggle="tab"> </a></li> 
                
            </ul>
            
             <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:2px solid #a9abae;background-color:#ecf0f5;">  
				   <a class="quick-btn" href="#" style=" border-radius:5px;  ">
                                <i class="icon-check icon-2x"></i>
                                <span> New</span>
                                <span class="label label-danger" style="font-size: 13px; ">
<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='PENDING' AND INITIATORACCOUNT = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
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
				 
		           
				<th style="width:25%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span> Pending</span>
                                <span class="label label-success" style="font-size: 13px; ">
			<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='PENDING' AND SENDTO = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
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
				  
                <th style="width:25%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                 <span> Approved</span>
                                <span class="label label-success" style="font-size: 13px; ">
			<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND SENDTO = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
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
                  
				<th style="width:25%;border:2px solid #a9abae; background-color:#ecf0f5;">  
                            <a class="quick-btn" href="#" style=" border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span>Rejected</span>
                                <span class="label label-info" style="font-size: 13px; ">
					<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='REJECTED' AND SENDTO = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    		</span>
                            </a>
							
                </th>  
				  
              </tr>
			  </table> 
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
			  <div class="panel-body" style="margin-top: 0px;">
             
            <?php 
include_once("config.php");  

                     $sql="SELECT * FROM fuellogs WHERE APPROVALSTATUS = 'PENDING' AND SENDTO = '$rm' GROUP BY SERIALNO ORDER BY DATECREATED DESC";

                     $result = $conn->query($sql);
                     $st ='<table id="example" class="table table-table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
                     <thead>
                     <tr>
                     <th>NO.</th> 
					 <th>REQUEST DATE</th>  
                     <th>ORDER NO.</th> 
                     <th>ACTION</th>
                     </tr>
                     </thead>
                     <tbody ">';
                     $seenid = ""; $x=1;
                     while($row = $result->fetch_assoc()) {
                       if ($seenid==$row['SERIALNO']) {
                        
                       }
                       else{
                         $seenid = $row['SERIALNO'];
                     $st=$st."<tr>".
	                 "<td>" . ($x++) . "</td>". 
					  "<td>" . $row['DATECREATED'] . "</td>". 
                     "<td>" . $row['SERIALNO'] . "</td>". 
					 
                     "<td>" . '<input type="button" style="width:100%; text-align:left;" id="'.$row['SERIALNO'] .'______'.$row['TIMESTAMP'].'______'.$row['ORDERNO'] 
					 .'______'.$row['INITIATORTITLE'].'______'.$row['ARBY'].'______'.$row['RVDBY']
					 .'______'.$row['INITIATEDBY'].'______'.$row['ARNAME'].'______'.$row['RVDNAME']
					 .'______'.$row['INITIATIONDATE'].'______'.$row['ARDATE']
					 .'______'.$row['RVDDATE'].'______'.$row['INITIATORDEPARTRMENT'].'______'.$row['ARCOMMENT']. '" value="Click"  onclick="getClient(this.id)">' . "</td>".
		             "</tr>";
                   }
                     }
                     $st = $st.' </tbody>
                     </table> ';
                     $conn->close();
                     echo $st;
                     ?> 
          <!-- /.content-wrapper -->           
                     
<script>
function getClient(id){
var id1 = id.split('______');
$.ajax({
     url:"fuel_approvals.php",
     method:"POST",
     data:{id:id1[0]},
     success:function(data){
	 var s = data.split("______");
          $('#prescribed').html(s[1]);
		  $('#AMOUNT').html(s[0]);
		  $("#TIMESTAMP").val(id1[1]);
		  $("#ORDERNO").val(id1[2]);
		  $("#INITIATORTITLE").val(id1[3]);
		  $("#ARBY").val(id1[4]); 
		  $("#RVDBY").val(id1[5]);
		  $("#INITIATEDBY").val(id1[6]);
		  $("#ARNAME").val(id1[7]); 
		  $("#RVDNAME").val(id1[8]);
		  $("#INITIATIONDATE").val(id1[9]);
		  $("#ARDATE").val(id1[10]); 
		  $("#RVDDATE").val(id1[11]); 
		  $("#INITIATORDEPARTRMENT").val(id1[12]);
		  $("#ARCOMMENT").val(id1[13]);
     }
});
}
</script> 
  
  </div>  
  
   </div>  
  
   </div> 
    <div class="panel panel-default">

                            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #000;">

                                <div class="carousel-inner">
                                    <div class="item active">
                                    <img src="/IMMS/menu/assets/css/fleet/Slider02.png" width="614" height="240"  alt="" class="img-u image-responsive" />
                                   </div>
                                    <div class="item">
                                     <img src="/IMMS/menu/assets/css/fleet/Slider03.png" width="614" height="240" alt="" class="img-u image-responsive" /> 
                                    </div>
                                    <div class="item">
                                     <img src="/IMMS/menu/assets/css/fleet/Slider04.png" width="614" height="240"alt="" class="img-u image-responsive" />
                                    </div>
                                </div>
                                <!--INDICATORS-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <!--PREVIUS-NEXT BUTTONS-->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
  
    </div>  </div>  </div> 
  <div class="col-sm-8">  
   <img src="../../assets/img/logsbig.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>FUEL AND LUBRICANTS REQUISTION</b> </p> </center> 
  
     <form class="form-horizontal" method="post" action="fuel_updateapproval.php" style="height:auto;">  
      
      <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
			     <th style="width:13.33333333%;border:1px solid #ECF0F5;">Requisition date </th>
				<th style="width:20%;border:1px solid #ECF0F5;"> <input type="text"  name="TIMESTAMP"  id="TIMESTAMP"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                <th style="width:33.33333333%;border:0px;">  </th>
                
                <th style="width:13.33333333%;border:1px solid #ECF0F5;">Requisition No. </th>
				<th style="width:20%;border:1px solid #ECF0F5;"> <input type="text"  name="ORDERNO"  id="ORDERNO"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                 
              </tr>
			  </table> 
            
                           <div id="prescribed"> 
                           <table id="dataTable1"class="table table-bordered" style="background-color: transparent;">
                           <thead>
                           <tr>
   <th>  *  </th>
   <th  style="width:15%;">REG NUMBER</th>
   <th  style="width:20%;">TYPE</th>
   <th  style="width:10%;">PRODUCT</th> 
   <th  style="width:15%;">LUBRICANT </th> 
   <th  style="width:5%;">QTY</th> 
   <th  style="width:10%;">ODO READING</th>
   <th  style="width:25%;">DRIVER</th>
           
                              </tr>
                              </thead>
                              <tbody id="tablebody">
                                <tr id="1_rowdata" >
                                <td><input type="checkbox" required="required" checked="checked" /></td>
                                <td>
                                <input type="text" name="REGISTRATIONNO" id="REGISTRATIONNO" required="required"
                                  style= "width:100%; background-color:#fff;"/> 
                                </td> 
                                
                                 <td><input type="text" name="TYPE" id="TYPE" required="required"
                               style= "width:100%; background-color:#fff; text-align:center;"/> 
                               </td> 
                                
                               <td><input type="text" name="PRODUCT" id="PRODUCT" required="required"
                               style= "width:100%; background-color:#fff; "/> 
                               </td>
                               
                                <td><input type="text" name="LUBRICANT" id="LUBRICANT"  
                               style= "width:100%; background-color:#fff; "/> 
                               </td>
                               
                               <td><input type="numeric" name="LITRE" id="LITRE" required="required"
                               style= "width:100%; background-color:#fff; text-align:center;"/> 
                               </td>
                                
                              
                               <td><input type="text" name="CURRENTODOREADING" id="CURRENTODOREADING"  
                               style= ' width:100%; background-color:#fff;'/>

                            </td>
                            
                             <td><input type="text" name="DRIVER" id="DRIVER" required="required" 
                               style= ' width:100%; background-color:#fff;'/>

                            </td>
                              </tr>
                      </tbody>
                      </table>
                     
                     
                <table class="table-responsive" style="margin-top:-10px;">
               <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Requested by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATORTITLE" name="INITIATORTITLE"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Reviewed and approved by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="ARBY" name="ARBY"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Reviewed by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVDBY" name="RVDBY"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
                  
              </tr>
			  </table> 
              
             <table class="table-responsive" style="margin-top:-20px;">
             <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Name</th>  
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATEDBY" name="INITIATEDBY"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="ARNAME" name="ARNAME"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Name</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVDNAME" name="RVDNAME"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
                  
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATIONDATE" name="INITIATIONDATE"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="ARDATE" name="ARDATE"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Date</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVDDATE" name="RVDDATE"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                  
                  
              </tr>
			  </table> 
              
               <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">User department</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATORDEPARTRMENT" name="INITIATORDEPARTRMENT"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                 <th style="width:13.33333333%;border:0px;">Comment</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="ARCOMMENT" name="ARCOMMENT"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <th style="width:13.33333333%;border:0px;">Comment</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="RVWERCOMMENT" name="RVWERCOMMENT"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                   
              </tr>
			  </table> 
               
                <center>  
                <a href="fuel_requests.php" style="border: 1px solid #000; padding: 2px;border-radius: 3px; font-weight:bold;"> New requestion<span class="sr-only">(current)
                </span></a> 
                </center>
                </form> 
                     
                  </div>   
                
                     
                    
                    <b>My approved orders</b>
                <table id="example3" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                     <th style="background-color:#ecf0f5;  width:25%;">REQUISITION.DATE</th>
					 <th style="background-color:#ecf0f5; width:15%;">ORDER.NO</th> 
					 <th style="background-color:#ecf0f5; width:10%;">INITIATOR</th> 
                     <th style="background-color:#ecf0f5; width:10%;">DEPARTMENT</th>  
                     <th style="background-color:#ecf0f5;  width:25%;">APPROVED.BY</th>
					 <th style="background-color:#ecf0f5; width:15%;">NAME</th> 
					 <th style="background-color:#ecf0f5; width:10%;">DATE</th>
                      <th style="background-color:#ecf0f5; width:10%;">COMMENT</th> 
                     <th style="background-color:#ecf0f5; width:10%;">ACTION</th>   
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5;  width:25%;">REQUISITION.DATE</th>
					 <th style="background-color:#ecf0f5; width:15%;">ORDER.NO</th> 
					 <th style="background-color:#ecf0f5; width:10%;">INITIATOR</th> 
                     <th style="background-color:#ecf0f5; width:10%;">DEPARTMENT</th>  
                     <th style="background-color:#ecf0f5;  width:25%;">APPROVED.BY</th>
					 <th style="background-color:#ecf0f5; width:15%;">NAME</th> 
					 <th style="background-color:#ecf0f5; width:10%;">DATE</th>
                      <th style="background-color:#ecf0f5; width:10%;">COMMENT</th> 
                     <th style="background-color:#ecf0f5; width:10%;">ACTION</th>    
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dts = myid.split("***");
document.getElementById("mySERIALNO").value=dts[0];
document.getElementById("myID").value=dts[1];  
document.getElementById("myINITIATEDBY").value=dts[2]; 
document.getElementById("myARDATE").value=dts[3]; 
}
</script>    
         
                 
<?php 
include_once("connect/configftl.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND SENDTO = '$rm'  GROUP BY SERIALNO ORDER BY DATECREATED DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['SERIALNO']."***".$res['id']."***".$res['INITIATEDBY'];
		echo "<tr>"; 
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['SERIALNO']."</td>"; 
		echo "<td>".$res['INITIATEDBY']."</td>"; 
		echo "<td>".$res['INITIATORDEPARTRMENT']."</td>"; 
		echo "<td>".$res['ARBY']."</td>"; 
		echo "<td>".$res['ARNAME']."</td>"; 
		echo "<td>".$res['ARDATE']."</td>"; 
		echo "<td>".$res['ARCOMMENT']."</td>";   
		echo "<td><a href=\"print_fuelrequisition.php?SERIALNO=$res[SERIALNO]\">Print</a></td>";
		  	
	}
	   
    ?>
	</tbody>
  </table>      
                    </div> 
                    
           <div class="col-sm-12">
                     <div class="modal" id="itex" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#dd4b39;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

               <div class="col-sm-12" style="text-align:left;"> 
     
       <img src="../../assets/img/logs.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>NEW ITEM REGISTREATION FORM</b> </p> </center> 
 
			 <div class=""  id="newitem" >  </div>
                <script>

          function newitem(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'newitem.php?q='+odno,
                       success : function(data){
                                $('#newitem').html(data);
								$("#itex").modal("show");
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
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

 
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:#ffffff;">
                                           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>


                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:40px; text-align:center;"> ACCESS DENIED</p>

            <p></p>
            <p style="color:red; font-weight:bold; font-size:40px; text-align:center;font-family:lcd;"> <?php echo date('Y-m-d'); ?></p>


           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:red; color:#ffffff;">
                                           <center> <button class="btn btn-default" data-dismiss="modal">Close</button></center>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>



 <div class="col-lg-12">
                        <div class="modal" id="bookVehicle" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 
          <img src="../../assets/img/logs.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>TRANSPORT RESERVATIONS</b> </p> </center> 
 
            <form class="form-horizontal" action="process_ftlbookings.php" method="POST" style="height:auto;">

               <table class="table" style="border:0px;">
              <tr>  
                <th style="width:30%;border:0px;">Request date</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="Createddate" name="Createddate" value="<?php echo date('y-m-d'); ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
              
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Applicant name</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="applicantname" name="applicantname" value="<?php echo $nameofuser; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
              
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Title</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="title" name="title" value="<?php echo $desc; ?>"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>  
 
           <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Department</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="applicantdept" name="applicantdept" value="<?php echo $dept; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table>   
 
               <input type="hidden" id="pfno" name="pfno" value="<?php echo $pf; ?>" >
               <input type="hidden" id="senderaccount" name="senderaccount" value="<?php echo $rm; ?>" >
              
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Phone contact</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="Phonecontact" name="Phonecontact" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
             
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Reservation type</th> 
				<th style="width:70%;border:0px;"> 
                <input type="radio" id="booktype" name="booktype" value="PICK AND DROP" checked>
                <label>PICK AND DROP</label>
                <input type="radio" id="booktype" name="booktype" value="ROUND TRIP"  >
                <label>ROUND TRIP</label>
                
                </th>   
              </tr>
			  </table>
                 
               
                 <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Activity</th> 
				<th style="width:70%;border:0px;"> <textarea id="Activity" name="Activity" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; "></textarea> </th>   
              </tr>
			  </table> 
                
          <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">From</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="journeypoint_start" name="journeypoint_start" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th> 
                
                  
              </tr>
			  </table> 
                
             <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Destination</th> 
				<th style="width:70%;border:0px;"> <input type="text" id="Destination_to" name="Destination_to" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>   
              </tr>
			  </table>     
            
              <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Travel date</th> 
				<th style="width:20%;border:0px;"> <input type="date" id="Reservationdate_from" name="Reservationdate_from" value="<?php echo date('y-m-d'); ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;height:21px; ">  </th>  
                
                
                <th style="width:30%;border:0px; text-align:right;">Return date</th>   
				<th style="width:20%;border:0px;"> <input type="date" id="Reservationdate_to" name="Reservationdate_to" value="<?php echo date('y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px; ">  </th>  
                
                 
              </tr>
			  </table>     
   
              
               <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Departure time</th> 
				<th style="width:11%;border:0px;"> <input type="text" id="Departuretime" name="Departuretime" value="hh:mm"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>  
                <th style="width:9%;border:0px;"> <select id="tsfx" name="tsfx" style="width:100%; font-weight:normal; background-color:#fff; height: 17px;">            
                  <option>AM</option> <option>PM</option>   
                </select></th>
                
                <th style="width:30%;border:0px; text-align:right;">Expected return time</th> 
				<th style="width:11%;border:0px;"> <input type="text" id="Pickuptime_expected" name="Pickuptime_expected" value="hh:mm"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; text-align:center; "> </th>
               <th style="width:9%;border:0px;"> <select id="tsfz" name="tsfz" style="width:100%; font-weight:normal; background-color:#fff; height: 17px;">            
                  <option>AM</option> <option>PM</option>   
                </select></th>

                 
              </tr>
			  </table>     
     
                 <table class="table" style="border:0px; margin-top:-23px;">
              <tr>  
                <th style="width:30%;border:0px;">Prefered vehicle</th> 
				<th style="width:30%;border:0px;"> <select id="Preferedvehicle" name="Preferedvehicle" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">   
                   <option value="PICKUP /DC">PICKUP /DC</option>
                                <option value="MIN BUS">MIN BUS</option> 
                                <option value="STATION WAGON">STATION WAGON</option>
                                <option value="SALOON">SALOON</option> 
                </select></th> 
                
                <th style="width:20%;border:0px; text-align:right;">Passengers</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="Passengers" name="Passengers" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; ">  </th>  
                
                 
              </tr>
			  </table>  
               
              <input type="hidden" id="ordertype" name="ordertype" value="Reservation">
              
            <div class="col-sm-12">   
           <center>  <input type="submit" name="button" id="button" value="Make a reservation" />
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           </center>    

         </form>
        
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


  <div class="col-lg-12">
                        <div class="modal fade" id="travel" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"  style="text-align:center;"id="H1">  </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-12" style="text-align:left;">
<img src="../../assets/img/logs.PNG" width="100%" height="100%">
</div> 
      
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;">TRAVEL ADVANCE REQUISITION </legend> </center>
 
          <form class="form-horizontal" action="travel_process.php" method="POST" style="height:auto; font-weight:normal;">
                
 
<table class="table table-bordered">
    <thead>
        <tr class=" ">
        <th style="border-bottom-color:white; width:33.333333333%;"></th>
        <th style="border-bottom-color:white; width:66.666666666%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>Applicant</B></td>
        <td>  <input type="text" name="TRAVELLER" id="TRAVELLER"  value="<?php echo $nameofuser; ?> " readonly="readonly"
        style="background-color:#fff; width:100%;"></td> 
      </tr>
      <tr>
        <td><b>Title</b></td>
        <td><input type="text"  name="TRAV_TITLE" id="TRAV_TITLE" value="<?php echo $desc; ?> " readonly="readonly"
        style="background-color:#fff; width:100%;">  </td> 
      </tr>
      <tr>
        <td><b>Activity</b></td>
        <td><textarea name="ACTIVITY"  id="ACTIVITY"  required="required" style="background-color:#fff; width:100%; height:20px;"></textarea>  </td> 
      </tr> 
      
      <tr>
        <td><b>Project</b></td>
        <td><input type="text"  name="PROJECT" id="PROJECT"  required="required" style="background-color:#fff; width:100%;">  </td> 
      </tr>
      <tr>
        <td><b>Contact</b></td>
        <td><input type="alphanumeric"  name="TRAV_CONTACT" id="TRAV_CONTACT" required="required" style="background-color:#fff; width:100%;">  </td> 
      </tr>
       <tr>
        <td><b>Budget line</b></td>
        <td><input type="text"  name="TRAV_BUDGETCODE" id="TRAV_BUDGETCODE" readonly="readonly" style="background-color:#f9f9f9; width:100%;">  </td> 
      </tr>
    </tbody>
  </table> 

    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; ">Date requested</th>
        <th style="border-bottom-color:white; text-align:center;">Date needed by</th>
        <th style="border-bottom-color:white; text-align:center;">Travel date</th>
        <th style="border-bottom-color:white; text-align:center;">Return date</th>  
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td><input type="date"  name="REQUESTDATE" id="REQUESTDATE" value="<?php echo date('d-m-y'); ?>"   
        style=" text-align:center; background-color:#fff;width:100%;"></td>
        <td><input type="date"  name="DATENEEDED" id="DATENEEDED"  placeholder="dd /mm /yyyy" required="required" 
        style="text-align:center; background-color:#fff; width:100%;"></td>  
        <td><input type="date"  name="TRAVELDATE" id="TRAVELDATE"   placeholder="dd /mm /yyyy" required="required"
         style="text-align:center; background-color:#fff; width:100%;"></td>
         <td><input type="date"  name="RETURNDATE" id="RETURNDATE" placeholder="dd /mm /yyyy"  required="required"
          style="text-align:center; background-color:#fff; width:100%;"></td>
      </tr>
    </tbody>
  </table>             

   <table class="table table-striped" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>Please show all calculations below</th> 
      </tr>
      </thead>
      <tbody> 
    </tbody>
  </table>
       
    <table class="table table-striped" id="mytable11111" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:46%;">Location</th>
   <th style="width:18%; text-align:center;">Per diem rate</th>
   <th style="width:18%; text-align:center;">No. of nights</th>
   <th style="width:18%; text-align:center;">Amount</th>
      </tr>
      </thead>
      <tbody> 
    </tbody>
  </table>
  
     <input type="button" onClick="addRow166111('mytable11111')" value="Add" />
     <input type="button" onClick="deleteRow166111('mytable11111')" value="(Delete)" />
     <input type="hidden" id="mytable_rows11111" value="0">
     
     <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"></th>
        <th style="border-bottom-color:white; width:50%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> </td>
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-6"> Total per diem</label>
                    <div class="col-sm-6">
                        <input type="text" id="TOTALPERDIEM" name="TOTALPERDIEM" class="form-control" readonly="readonly" 
                        style=" font-weight:bold; font-size: 14px; width:100%; background-color:#fff;text-align:right;"/>
                    </div>
                 </div>
               <!-- /.form-group --></td> 
      </tr>  
    </tbody>
  </table> 
     
   <table class="table table-striped" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>Other additional advance requirements</th> 
      </tr>
      </thead>
      <tbody> 
    </tbody>
  </table>
   
     <table class="table table-striped" id="mytable111112" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:80%;">Additional requirement</th> 
   <th style="width:20%; text-align:center;">Amount</th>
      </tr>
      </thead>
      <tbody> 
    </tbody>
  </table>
  
     <input type="button" onClick="addRow1661112('mytable111112')" value="Add" />
     <input type="button" onClick="deleteRow1661112('mytable111112')" value="(Delete)" />
     <input type="hidden" id="mytable_rows111112" value="0">     

       <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"></th>
        <th style="border-bottom-color:white; width:50%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> </td>
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-6"> Additional cost</label>
                    <div class="col-sm-6">
                        <input type="text" id="ADDITIONALCOST" name="ADDITIONALCOST" class="form-control" readonly="readonly" 
                        style=" font-weight:bold; font-size: 14px; width:100%; background-color:#fff;text-align:right;"/>
                    </div>
                 </div>
               <!-- /.form-group --></td> 
      </tr>  
    </tbody>
    </table>          
            
      <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"></th>
        <th style="border-bottom-color:white; width:50%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> </td>
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-6"> Total payment</label>
                    <div class="col-sm-6">
                        <input type="text" id="TOTALTRAVELPAYMENT" name="TOTALTRAVELPAYMENT" class="form-control" readonly="readonly" 
                        style=" font-weight:bold; font-size: 14px; width:100%; background-color:#fff; text-align:right;"/>
                    </div>
                 </div>
               <!-- /.form-group --></td> 
      </tr>  
    </tbody>
    </table>           
            
   <table class="table table-bordered ">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"> </th>
        <th style="border-bottom-color:white;font-weight:bold; width:50%; text-align:center;">Send to: </th>
        <th style="border-bottom-color:white;font-weight:normal; width:25%;"></th>  
         
      </tr>
    </thead>   
    <tbody>
      <tr>
        <td style="background-color:#f9f9f9;"></td>
        
        <td style="background-color:#f9f9f9;">
        <select name="SENDADVANCETO" id="SENDADVANCETO"  required="required" style="width:100%; text-align:center;">
                  ddd     = "<?php   echo $stss; ?>"; 
                  </select></td>  
        
        <td style="background-color:#f9f9f9;"> </td>  
    </tr> 
    </tbody>
    </table> 
    <input type="submit" name="button" id="button" value="Save" />
         </form>
     

        <div class="col-sm-12" >

        <p style="text-transform: ; text-align:left; font-weight:bold;">
        Note: This is an electronic travel form, no signature is required </p>
 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    



            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="dons" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:20px; text-align:center;">IN-KIND CONTRIBUTION / DONATIONS  </p>

             <table id="exdons" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>DATE RECIEVED</th>
                <th>DESCRIPTION</th> 
                <th>LOCATION</th> 
                <th>UNIT.OF.MEASURE</th>
                <th>DONATED BY</th>
                <th>QTY</th>
                <th>UNIT.PRICE</th>
                <th>AMOUNT</th>
				<th>BASIS.OF.VALUATION</th>
                <th>BUDGET.CODE</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>DATE RECIEVED</th>
                <th>DESCRIPTION</th> 
                <th>LOCATION</th> 
                <th>UNIT.OF.MEASURE</th>
                <th>DONATED BY</th>
                <th>QTY</th>
                <th>UNIT.PRICE</th>
                <th>AMOUNT</th>
				<th>BASIS.OF.VALUATION</th>
                <th>BUDGET.CODE</th> 
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
  

require('connect/config.php');
$sql = "SELECT GOODSRECIEVEDDATE, DESCRIPTION,STORELOCATION, UNITOFMEASURE, SERVICEPROVIDER, QTYRECIEVED, UNITCOST,(QTYRECIEVED * UNITCOST) as amountex,
        BASISOFVALUATION, BUDGETCODE FROM recievables WHERE GOODSRECEIVABLETYPE = 'DONATION' ORDER BY GOODSRECIEVEDDATE DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["GOODSRECIEVEDDATE"].'</td>'.
                 '<td>'.$row["DESCRIPTION"].'</td>'. 
				 getIndicator($row["STORELOCATION"]). 
                 getIndicator($row["UNITOFMEASURE"]). 
                 getIndicator($row["SERVICEPROVIDER"]).
			     getIndicator($row["QTYRECIEVED"]).
                 getIndicator($row["UNITCOST"]).
				 getIndicator($row["amountex"]). 
                 getIndicator($row["BASISOFVALUATION"]).
                 '<td>'.$row["BUDGETCODE"].'</td></tr>';

 }

?>

	  </tbody>
  </table> 
   

           <div class="col-sm-12" >
           <div class="panel-body" >
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

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
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stdd ="";
if( $result = $connect->query("SELECT * FROM motorisedequipments WHERE GENERALSTATUS = 'OPERATIONAL' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['REGISTRATIONNO'] ." </option>";   }
  }
$connect->close();
?> 

 <?php
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stssl ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['Email'] ." </option>";   }
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

		{extend :'pdf',
		 title:'myfile'
		}
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
     $('#exaoffsite').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
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
          <a href="" class="navbar-brand"><b>FLEET MGT</b></a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
          <li class="active"><a href="lpo_general.php" > FUEL<span class="sr-only">(current)</span></a></li> 
          <li><a href="fuel_mgt.php" class="button5" > Users<span class="sr-only">(current)</span></a></li>
            <li><a href="fuel_admin.php" class="button5" > Admin<span class="sr-only">(current)</span></a></li>
            

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
  <div class="col-md-4"> 
		
            <div class="box-header with-border" style="background-color: #ecf0f5;border-radius: 11px;">
              <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right" style="margin-top:0px;">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Fuel inbox &nbsp; <b>Rejected orders</b></a></li>
              <li><a href="#tab_2-2" data-toggle="tab"> </a></li>  
            </ul>
             <div id="res"> </div>
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
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND INITIATORACCOUNT = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
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
                                <span>Rejected </span>
                                <span class="label label-info" style="font-size: 13px; ">
							<?php
$link = mysqli_connect("localhost", "root", "toor2", "fleet");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERIALNO FROM fuellogs WHERE APPROVALSTATUS ='REJECTED' AND INITIATORACCOUNT = '$rm' AND REVIEWFUEL = 'WAITING' GROUP BY SERIALNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    			</span>
                            </a>
							
                </th>  
				  
              </tr>
			  </table> 
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
			  <div class="panel-body" style="margin-top: 0px;">
            <table id="exaoffsite" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>   
                   <th style="background-color:#f39c12; color:WHITE;width:25%;">REJECTED.DATE</th>
					 <th style="background-color:#00a65a; color:WHITE;width:15%;">ORDER.NO</th> 
					  <th style="background-color:#f39c12; color:WHITE;width:10%;">REJECTED.BY</th> 
                     <th style="background-color:#00a65a; color:WHITE; width:10%;">ACTION</th>    
           </tr>
        </thead>
        <tfoot>
          <tr>
		     <th style="background-color:#f39c12; color:WHITE;width:25%;">REJECTED.DATE</th>
					 <th style="background-color:#00a65a; color:WHITE;width:15%;">ORDER.NO</th> 
					  <th style="background-color:#f39c12; color:WHITE;width:10%;">REJECTED.BY</th> 
                     <th style="background-color:#00a65a; color:WHITE; width:10%;">ACTION</th>   
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
 
$result = mysqli_query($mysqli, "SELECT * FROM fuellogs WHERE APPROVALSTATUS ='REJECTED' AND INITIATORACCOUNT = '$rm' GROUP BY SERIALNO ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['SERIALNO']."***".$res['id']."***".$res['INITIATEDBY'];
		echo "<tr>"; 
		echo "<td>".$res['ARDATE']."</td>"; 
		echo "<td>".$res['SERIALNO']."</td>";  
		 echo "<td>".$res['ARBY']."</td>";  
		 echo "<td><a href=\"print_fuelrequisition.php?SERIALNO=$res[SERIALNO]\">Print</a> |
			 <a href=\"delete_fuelrequest.php?SERIALNO=$res[SERIALNO]\" onClick=\"return confirm('Are you sure you want to delete?')\">Truncate</a></td>";
		  	
	}
	   
    ?>
	</tbody>
  </table>  
  
  </div>   </div>  </div>  </div>  </div>  </div> 
  <div class="col-sm-8">  
   <img src="../../assets/img/logsbig.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>FUEL AND LUBRICANTS REQUISTION</b> </p> </center> 
  
     <form class="form-horizontal" method="post" action="fuel_requisitionprocess.php" style="height:auto;">  
      
       <table class="table" style="border:0px;">
              <tr> 
			     <th style="width:13.33333333%;border:1px solid #ECF0F5;">Requisition date </th>
				<th style="width:20%;border:1px solid #ECF0F5;"> <input type="date"  name="DATECREATED"  id="DATECREATED" value="<?php echo date('y-m-d'); ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                
                <th style="width:33.33333333%;border:0px;">  </th>
                
                <th style="width:13.33333333%;border:1px solid #ECF0F5;">Requisition No. </th>
				<th style="width:20%;border:1px solid #ECF0F5;"> <input type="text"  id="ORDERNO" name="ORDERNO" value=" <?php echo uniqid();?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
                 
              </tr>
			  </table> 
     
              
   <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th  style="width:15%;">REG NUMBER</th>
   <th  style="width:20%;">TYPE</th>
   <th  style="width:10%;">PRODUCT</th> 
   <th  style="width:15%;">LUBRICANT </th> 
   <th  style="width:5%;">QTY</th> 
   <th  style="width:10%;">ODO READING</th>
   <th  style="width:25%;">DRIVER</th>
           
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>    
     <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
         
              
               
           <table class="table-responsive" style="margin-top:4px;">
               <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:13.33333333%;border:0px;">Requested by</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATORTITLE" name="INITIATORTITLE" value="<?php echo $desc; ?>" 
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
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATEDBY" name="INITIATEDBY"  value="<?php echo $nameofuser; ?>" 
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
              
                <th style="width:13.33333333%;border:0px;">Uesr department</th> 
				<th style="width:20%;border:0px;"> <input type="text" id="INITIATORDEPARTRMENT" name="INITIATORDEPARTRMENT" value="<?php echo $dept; ?>"   
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 <input type="hidden" id="INITIATIONDATE" name="INITIATIONDATE"  /> 
                 
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
              
                <th style="width:13.33333333%;border:0px;">Send to:</th> 
				<th style="width:20%;border:0px;"> <select id="SENDTO" name="SENDTO" style="width:100%; font-weight:normal; background-color:#fff;">
                <option> </option>
                 ddd     = "<?php   echo $stssl; ?>"; 
                  </select> </th>    
                 
                  <input type="hidden" id="SERIALNO" name="SERIALNO" value=" <?php echo uniqid();?>"  >    
                   
                  <input type="hidden" id="INITIATORACCOUNT" name="INITIATORACCOUNT"  value="<?php echo $rm; ?>"  >  
                 
                 <th style="width:13.33333333%;border:0px;"> <center> <input type="submit" name="button" id="button" value="Save"/></center></th> 
				<th style="width:20%;border:0px;">   </th>   
                 
                 <th style="width:33.33333333%;border:0px;"> </th>   
                  
                  
              </tr>
			  </table> 
               
                
                </form> 
   

      </section>
      <!-- /.content -->
    </div> 
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
     <b>My raised requisitions</b>
                <table id="example5" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
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
 
$result = mysqli_query($mysqli, "SELECT * FROM fuellogs WHERE APPROVALSTATUS ='APPROVED' AND INITIATORACCOUNT = '$rm'  GROUP BY SERIALNO ORDER BY DATECREATED DESC");
  
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
    
<!-- ./wrapper -->
<!-- Morris.js charts -->
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
<script>
  
 
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[5].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<select onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">'+ 
                                        '<option></option>'+
                                        '<option><?php   echo $stdd; ?></option>'+ 
                                        '</select>';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';			 

	 var  s3cc = '<select name="tmx[]" id="tmx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:left;">'+ 
                                        '<option></option>'+
                                        '<option>DIESEL</option>'+
                                        '<option>PETROL</option>'+ 
                                        '</select>';
 		 
	 var  s6ff = '<input type="text" name="pdx[]" id="pdx'+rowCount+'" value="N/A" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';


    var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s11 = '<input type="text" name="ord[]" id="ord'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';
				 
     var  s22 = '<input type="text" name="dri[]" id="dri'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:left;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
				                  '<td>'+s7gg+' </td>'+
								  '<td>'+s11+' </td>'+
				                  '<td>'+s22+' </td>';
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
		  table.rows[x].cells[1].childNodes[0].id="dnx"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqx"+x;
          table.rows[x].cells[3].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[4].childNodes[0].id="pdx"+x;
		  table.rows[x].cells[5].childNodes[0].id="qtyx"+x;
		  table.rows[x].cells[6].childNodes[0].id="ord"+x;
		  table.rows[x].cells[7].childNodes[0].id="dri"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>

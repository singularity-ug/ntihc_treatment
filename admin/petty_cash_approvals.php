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
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stss ="";
if( $result = $connect->query("SELECT * FROM budgetcoder WHERE codestatus = 'ACTIVE' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['budgetline'] . " </option>";   }
  }
$connect->close();
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
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap2.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="assets/notifier.css">
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
	  "iDisplayLength": 5,
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
 
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' CASH PAYMENT VOUCHER'
		},
		{extend :'pdf',
		 title:'CASH PAYMENT VOUCHER'
		},
		{extend :'print',
		 title:' CASH PAYMENT VOUCHER'
		}
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
     $('#example10').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' CASH PAYMENT VOUCHER'
		},
		{extend :'pdf',
		 title:'CASH PAYMENT VOUCHER'
		},
		{extend :'print',
		 title:' CASH PAYMENT VOUCHER'
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
  
   <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example12').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
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
		 title:' '
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
 
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ccc;
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
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('connect/config.php');
  ?>
  
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="petty_cash_records.php"> Cash payments remote storage<span class="sr-only">(current)</span></a></li> 
            
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
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">0</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 0 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
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
 
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                 <span class="glyphicon glyphicon-user">WELCOME:</span>     
          &nbsp <?php echo $nameofuser; ?>   
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <center><img src="../assets/img/ntihclog2.png" width="200" height="250" class="user-image" alt="User Image"> </center>
                  <p>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">NTIHC</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">NTIHC</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">NTIHC</a>
                    </div>
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
  <div class="content-wrapper">
    <div class="container" style="background-color:white;">
      <!-- Content Header (Page header) -->
       

      <!-- Main content -->
      <section class="content">
       <div class="box box-solid"> 
            <!-- /.box-header -->
            <div class="col-sm-6"> 
            <div class="box-body">
		
			
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Petty cash reimbursmant approvals
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in"/>
                    <div class="box-body"/>
                    
					<form method="post" action="editorial/cashreim_update.php">
   <br>   
   <table class="table table-striped" style="background-color:#ffffff;">
            <thead>
            <tr>
              <th>Reimbursment key.</th> 
              <th>Comment</th>
              <th>Action </th> 
            </tr>
            </thead>
            <tbody>
            <tr>
               <td style="width:24%;"><input type="text" name="LOADVOTE" id="myLOADVOTE"  value="" readonly="readonly"  
               style="width:100%; text-align:left;background-color:#ECF0F5;"></td>
  
               <td style="width:66%;"><input type="text" name="APPROVALCOMMENT" id="myAPPROVALCOMMENT" value="" required="required" 
               style="width:100%; text-align:left;"> </td>
			   
               <input type="hidden"  name="LID" id="myID" value="" >
			   
			    <input type="hidden"  name="APPROVERDESIGNATION" id="APPROVERDESIGNATION" value="<?php echo $desc; ?>" >
				<input type="hidden"  name="APPROVERNAME" id="APPROVERNAME" value="<?php echo $nameofuser; ?>" >
			    <input type="hidden"  name="APPROVALDATE" id="APPROVALDATE" value="<?php echo date('Y-m-d'); ?>"  >
				<input type="hidden"  name="REQUESTSTATUS" id="REQUESTSTATUS" value="APPROVED" >
			   
               <td>  <center> <input type="submit" name="update" value="Update" > </center></td>
				   
             </tr>
            <tr>
           </tbody>
          </table> 
				</form>	 
					 
          <div class=""> 
 <table id="example" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>   
                      
					 <th style="background-color:GREEN; color:WHITE;">ID.</th>
                     <th style="background-color:#DD4B39; color:WHITE;">REQUEST.DATE</th>
                     <th style="background-color:GREEN; color:WHITE;">APPLICANT</th> 
                     <th style="background-color:#DD4B39; color:WHITE;">AMOUNT</th> 
					 <th style="background-color:GREEN; color:WHITE;">ACTION.</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
                     <th style="background-color:GREEN; color:WHITE;">NO.</th>
                     <th style="background-color:#DD4B39; color:WHITE;">REQUEST.DATE</th>
                     <th style="background-color:GREEN; color:WHITE;">APPLICANT</th> 
                     <th style="background-color:#DD4B39; color:WHITE;">AMOUNT</th> 
					 <th style="background-color:GREEN; color:WHITE;">ACTION.</th>
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postimptest(myid){
var dts = myid.split("***");
document.getElementById("myLOADVOTE").value=dts[1];
document.getElementById("myID").value=dts[0]; 
document.getElementById("myAPPROVALCOMMENT").value=dts[2];  

}
</script>    
         
        
<?php 
include_once("config/inline/dbcon.php");
   
$result = mysqli_query($mysqli, "SELECT * FROM  pettyloads  WHERE  REQUESTSTATUS ='PENDING'  ORDER BY LID DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['LID']."***".$res['LOADVOTE']."***".$res['APPROVALCOMMENT'];
		echo "<tr>";   
		echo "<td>".$res['LID']."</td>";
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['APPLICANTNAME']."</td>";    
		echo "<td>".$res['AMOUNTREQUESTED']."</td>"; 
		echo '<td> 
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientelx(this.id)" data-toggle="tooltip" title="Click to view" 
		<span class="glyphicon glyphicon-cog"> </span></a>
         &nbsp;&nbsp;&nbsp; 
        <a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="Click to approve"   onclick="postimptest(this.id)"> 
		<span class="glyphicon glyphicon-ok"> </span> </a>   		 
		</td>';  
		  	
	}
	   
    ?>
	</tbody>
  </table>    
<br> 
                  </div>
                  </div>
                </div></div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                 
                    <h3 class="box-title"> <b> Cash payment history </b> &nbsp;&nbsp || &nbsp;&nbsp
                    <b style="color:blue;">remote</b> storage</b> </h3> 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                   
           <div id="work" style="width:100%; font-weight:normal;">  
     <table id="example4" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>  
        <th style="width:10px;">PMT.DATE</th>  
                      <th style="width:45px;">APPLICANT</th>
                      <th style="width:25px;">INVOICE.NO</th>  
                      <th style="width:10px;">PAID.BY</th>  
                      <th style="width:10px; color:red; background-color:#ecf0f5;">ACTION</th> 
                      
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND APPROACTION ='APPROVED' AND CASHOUT ='PAID' 
                                          GROUP BY ORDERNO ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";    
		echo "<td>".$res['RECIEVEDDATE']."</td>";  
		echo "<td>".$res['APPLICANTNAME']."</td>";    
		echo "<td>".$res['ORDERNO']."</td>";    
		echo "<td>".$res['PAIDBY']."</td>";  
		echo "<td><a href=\"config/inline/petty_payments.php?ORDERNO=$res[ORDERNO]\">Open</a></td>";		 
	}
    ?>
	</tbody>
  </table> 
     
                     
	  
                      </div>  
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
			
			<div style="text-align:center;">
                  <div class="col-sm-3" >
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;">Pending requisitions</p>  
                    <br>
                   <p class="button 5" style="font-size:50px; font-family:lcd; margin-top:-15px; text-align:center;">
                      <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND IDNUMBER = '$pf'  GROUP BY ORDERNO ")) {        
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
                   </div></div>
                   
                   <div class="col-sm-3">
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;">Due for authorising</p> 
                    <br>
                   <p class="button2" style="font-size:50px; font-family:lcd; margin-top:-15px; text-align:center;">
                     <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND SENDTO ='$rm' GROUP BY ORDERNO")) {        
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
                   </div></div>
                   
                   <div class="col-sm-3">
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;">Orders Due for approval</p> 
                   <br>
                   <p class="button 5" style="font-size:50px; font-family:lcd; margin-top:-15px; text-align:center;">
                    <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND FORWARDTO ='$rm' AND APPROACTION ='PENDING' GROUP BY ORDERNO")) {        
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
                   </div></div>
                          
	  <div class="col-sm-3">
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;">Cash.out Orders (pay)</p> 
                   <br>
                   <p class="button 5" style="font-size:50px; font-family:lcd; margin-top:-15px; text-align:center;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND FINALREDIRECTION ='$rm' AND APPROACTION ='APPROVED' AND CASHOUT ='PENDING' GROUP BY ORDERNO")) {        
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
                   </div></div>
       </div> 
	   
          
            
          <?php
require('config/config_dbmultiple.php'); 

$sql = "SELECT * FROM imprest WHERE APPROACTION ='APPROVED' AND CASHOUT ='PAID' AND DCDEFAULT ='DEFAULT'";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['CREDIT']))-intval($row['IMP_DEBIT']);
  echo'<tr>'.   
   '</tr>';
$x=$x+1;
} 
 ?> 
 
            
          </div>  
        </div>  
         
        
       <div class="col-sm-6"> 
          <div class="">
          <!-- Custom Tabs (start tabs) -->
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">General</a></li> 
                
              <li class="pull-left header"><i class="fa fa-th"></i>Petty Cash Load history</li>
            </ul>
            <div class="tab-content" style="height:730px;"/>
             <div class="tab-pane active" id="tab_1-1">
              
			
             <br>
			 		   
		   <div class=""  id="cashreimbusment" >  </div>
                <script>

          function getstuffclientelx(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'editorial/cashreimbusment.php?q='+odno,
                       success : function(data){
                                $('#cashreimbusment').html(data);
								$("#reimbusment").modal("show");
                                 }
               });
               }

          </script> 
		  
		  
		  <div class="box-body">
              <div class="box-group" id="accordion11">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion11" href="#collapseOnezzz">
                      Imprest requisitions
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOnezzz" class="panel-collapse collapse in">
                    <div class="box-body"> 
	  
         <table id="example10" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
         <tr>   
                      
					 <th  >NO.</th>
                     <th  >APPROVAL.DATE</th>
                     <th  >CONFIRMED BY</th> 
                     <th  >APPROVED</th> 
					 <th  >CREDIT</th>
					 <th  >ACTION.</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
                     <th  >NO.</th>
                     <th  >APPROVAL.DATE</th>
                     <th  >CONFIRMED BY</th> 
                     <th  >APPROVED</th> 
					 <th  >CREDIT</th>
					 <th  >ACTION.</th>
        </tr>
        </tfoot> 
        <tbody> 
          
<?php 
include_once("config/inline/dbcon.php");
   
$result = mysqli_query($mysqli, "SELECT * FROM  pettyloads  WHERE  REQUESTSTATUS ='LOADED'  ORDER BY LID DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['LID']."***".$res['LOADVOTE']."***".$res['APPROVALCOMMENT'];
		echo "<tr>";   
		echo "<td>".$res['LID']."</td>";
		echo "<td>".$res['APPROVALDATE']."</td>";
		echo "<td>".$res['APPROVERNAME']."</td>";    
		echo "<td>".$res['AMOUNTREQUESTED']."</td>"; 
		echo "<td>".$res['CREDIT']."</td>"; 
		echo '<td> 
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientelx(this.id)" data-toggle="tooltip" title="Click to view" 
		<span class="glyphicon glyphicon-cog"> </span></a>
         &nbsp;&nbsp;&nbsp;  
		</td>';  
		  	
	}
	   
    ?>
	</tbody>
  </table>    
     
	   </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion11" href="#collapseTwozzz">
                        Imprest Reimbursment Reconciliation by Load ID
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwozzz" class="panel-collapse collapse">
                    <div class="box-body">
                        
			 <table id="example15" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>  
        <th style="width:10px;">LOAD NO</th>   
                      <th style="width:25px;">DEBIT</th>  
                      <th style="width:10px;">CREDIT</th>  
					  <th style="width:10px;">LOAD.BALANCE</th>
                      <th style="width:10px; color:red; background-color:#ecf0f5;">ACTION</th> 
                      
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT LID, SUM(IMP_DEBIT), SUM(CREDIT), SUM(CREDIT)-SUM(IMP_DEBIT) AS LOADBAL FROM imprest 
                                          WHERE APPROACTION ='APPROVED' AND CASHOUT ='PAID' 
                                          GROUP BY LID ORDER BY LID DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['LID'];
		echo "<tr>";  
        echo "<td>".$res['LID']."</td>";  		 
		echo "<td>".$res['SUM(IMP_DEBIT)']."</td>";   
		echo "<td>".$res['SUM(CREDIT)']."</td>"; 
		echo "<td>".$res['LOADBAL']."</td>"; 
		echo "<td><a href=\"editorial/cashloadings.php?LID=$res[LID]\">Open</a></td>";		 
	}
    ?>
	</tbody>
  </table>    
					   
					   
                    </div>
                  </div>
                </div> 
            
             <br>
			  <h2 class="button 5" style="margin-top: -7px;"> <b style="font-family:lcd;"> <?php   echo"Balance in cash box  : ".$bal; ?> </b></h2>
 
         
<script> 
function imploads(myid){
var dts = myid.split("***");
document.getElementById("myREQUESTEDCREDIT").value=dts[1];
document.getElementById("myID").value=dts[0]; 
document.getElementById("myCREDIT").value=dts[2];  
}
</script>
  
	 
   
     
                  
                </div> 
                 
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row --> 
            
          <!-- Custom Tabs (end tabs) -->  
<!----/-----start models---------->
  
   <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="pettywithdraw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog3">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
         
           <div class="col-sm-12">
           <div class="panel-body">
           
           </div>

                                        </div> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
  
  
   
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

     
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html>

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
                'style= " margin-left:0px; width:100%; text-align:right; background-color:#fff;" >';


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
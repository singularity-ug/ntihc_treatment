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
  
 
  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap3.css">
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="admin/assets/notifier.css">
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
   


    <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 5,
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
	  "iDisplayLength": 8,
        dom: 'Bfrtip',
        buttons: [

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
     $('#exdons').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

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
     $('#example3').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
  
        ]
    } );
  } );
  </script>
  
 <script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 8,
        dom: 'Bfrtip',
        buttons: [

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
     $('#example5').DataTable( {
	  "iDisplayLength": 8,
        dom: 'Bfrtip',
        buttons: [

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
     $('#example6').DataTable( {
	  "iDisplayLength": 8,
        dom: 'Bfrtip',
        buttons: [

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
     $('#example4').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
  
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#exampled').DataTable( {
	  "iDisplayLength": 8,
        dom: 'Bfrtip',
        buttons: [

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
  
  
 <style media="screen">
  .btn {padding : 0px 3px;}
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
<body class="hold-transition skin-blue sidebar-mini"> 
<?php
  require('admin/connect/config.php');
  ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="admin/admin_user.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels --> 
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b> DISPENSARY </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
	  <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="admin/home_user.php" class="button5"> Admin<span class="sr-only">(current)</span></a></li>  
            <li class="active"><a href="client_management.php" class="button5" > Home<span class="sr-only">(current)</span></a></li> 
            <li><a href="client_dispenser.php" class="button5"> Dispenser<span class="sr-only">(current)</span></a></li>  
			           
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
        <div class="col-md-5"> 
		
            <div class="box-header with-border" style="background-color: #ecf0f5;border-radius: 11px;">
              <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right" style="margin-top:0px;">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">On-site vists</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Off-site vists</a></li> 
                
            </ul>
            <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:2px solid #a9abae;background-color:#ecf0f5;">  
				   <a class="quick-btn" href="#" style=" border-radius:5px;  ">
                                <i class="icon-check icon-2x"></i>
                                <span> Pending</span>
                                <span class="label label-danger" style="font-size: 13px; ">
<?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM prescription WHERE  TIMESTAMP >='$date' AND CHECKAVAILABILITY ='NO' GROUP BY NTIHCNO")) {        
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
                                <span> Processed</span>
                                <span class="label label-success" style="font-size: 13px; ">
			<?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM prescription WHERE  TIMESTAMP >='$date' AND ENTRYSTATUS ='PROCESSED' GROUP BY NTIHCNO")) {        
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
                                <span> Captured</span>
                                <span class="label label-success" style="font-size: 13px; ">
			<?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM prescription WHERE  TIMESTAMP >='$date' AND ENTRYSTATUS ='CAPTURED' GROUP BY NTIHCNO")) {        
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
                                <span>Total orders </span>
                                <span class="label label-info" style="font-size: 13px; ">
								<?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM prescription WHERE  TIMESTAMP >='$date' AND CHECKAVAILABILITY ='YES' GROUP BY NTIHCNO")) {        
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
               <div id="res" style="margin-top:-10px;"></div> 
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
			  <div class="panel-body" style="margin-top: 0px;">
               
			   <table id="exampled" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;"> 
         <thead>
        <tr>   
                     <th style=" width:20%;">DATE</th>
					 <th style=" width:16%;">NTIHC.NO</th>
                     <th style=" width:40%;">NAME</th>
                     <th style=" width:8%;">AGE</th> 
					 <th style=" width:8%;">SEX</th> 
                     <th style=" width:8%;">START</th>   
           </tr>
        </thead>
        <tfoot>
          <tr>
		      <th style=" width:20%;">DATE</th>
					 <th style=" width:16%;">NTIHC.NO</th>
                     <th style=" width:40%;">NAME</th>
                     <th style=" width:8%;">AGE</th> 
					 <th style=" width:8%;">SEX</th> 
                     <th style=" width:8%;">START</th>   
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function getregnvist(myid){
var dtsz = myid.split("***");
document.getElementById("myNTIHCNO").value=dtsz[0];
document.getElementById("myID").value=dtsz[1];  
document.getElementById("myAGE1").value=dtsz[2]; 
document.getElementById("myAGEGP").value=dtsz[3]; 
document.getElementById("myCLIENTNAME").value=dtsz[4]; 
document.getElementById("mySERVICE_EPISODE").value=dtsz[5];  
}
</script>    
          
       
<?php 
include_once("updatecmgt/config.php"); 
 $date = date("Y-m-d").' 00:00:00';
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsz = $res['RID']."***".$res['NTIHCNO']."***".$res['AGE1']."***".$res['AGE_GROUP']
	."***".$res['CLIENTNAME']."***".$res['SERVICE_EPISODE'];
		echo "<tr>"; 
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>"; 
		echo "<td>".$res['AGE1']."</td>";
		echo "<td>".$res['SEX']."</td>";
		echo '<td>    
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dtsz.'" href="javascript:void(0)"  onclick="getregnvist(this.id)" data-toggle="tooltip" title="Post" 
		<span class=" glyphicon glyphicon-edit"> </span></a>  
		</td>';   	
	}
	   
    ?>
	</tbody>
  </table>  
  </div>   </div>  </div>  </div>  </div>  </div> 
  <div class="col-sm-6">  
   <img src="assets/img/logsbig.PNG" width="100%" height="30%"> 
          
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; font-family:lcd;"> <b>NTIHC DISPENSARY</b> </p> </center> 
  
     <form class="form-horizontal" method="post" action="dispenser/drugs_process.php" style="height:auto;">  
     
      <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
			     <th style="width:20%;border:1px solid #ECF0F5;">Prescription date </th>
				<th style="width:25%;border:1px solid #ECF0F5;"> <input type="date"  name="DATECREATED"  id="DATECREATED"  value="<?php echo date('Y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; height:21px;">  </th> 
                
                <th style="width:10%;border:0px;"> <input type="text"  name="TIMEOUT" id="CHECKIN"   readonly = "readonly" 
                style="text-align:center; background-color:#fff; width:100%;border:0px;">  </th>
                
                <th style="width:15%;border:1px solid #ECF0F5;">Client No. </th>
				<th style="width:30%;border:1px solid #ECF0F5;"> <input type="text" id="myID" name="NTIHCNO" required="required" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">   </th>   
                 
              </tr>
			  </table> 
               
        <input type="hidden" id="myNTIHCNO"  >
		<input type="hidden" name="AGE" id="myAGE1"> 
        <input type="hidden" id="myAGEGP" name="AGE_GROUP"> 
        <input type="hidden" id="myCLIENTNAME" name="CLIENTNAME"> 
        <input type="hidden" id="mySERVICE_EPISODE" name="SERVICE_EPISODE"> 
             
                   <table class="table table-bordered" id="mytable1" style="background-color: transparent; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:50%;"> DRUG </th>
	      <th style="width:10%;"> QTY  </th>
		  <th style="width:10%;"> TIMES  </th>
		  <th style="width:10%;"> PERIOD  </th>
          <th style="width:10%;"> TOTAL </th>  
          <th style="width:10%;"> BALANCE </th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>      
     <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
             
                    <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Prescription comment</th> 
				<th style="width:80%;border:0px;"> <textarea id="RECOMMENDEDDRUGS" name="RECOMMENDEDDRUGS"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </textarea>  </th>   
                 
              </tr>
			  </table> 
              
                <table class="table-responsive" style="margin-top:-20px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Prescriped by</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="USERINITIAL" name="USERINITIAL"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                <th style="width:20%;border:0px;">Requesting unit</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="REQUESTINGUNIT" name="REQUESTINGUNIT"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
               
               <table class="table-responsive" style="margin-top:-15px;">
            <table class="table" style="border:0px;">
              <tr> 
              
                <th style="width:20%;border:0px;">Dispensed by</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="DISPENSEDBY" name="DISPENSEDBY" value="<?php echo $nameofuser; ?> " 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
                 
                 
                <th style="width:20%;border:0px;">Date</th> 
				<th style="width:30%;border:0px;"> <input type="text" id="DISPENSEDDATE" name="DISPENSEDDATE" value="<?php echo date('Y-m-d'); ?>" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff;"> </th>    
              </tr>
			  </table> 
              
               <input type="hidden" id="CHECKAVAILABILITY" name="CHECKAVAILABILITY" value="YES">
               <input type="hidden" id="ENTRYSTATUS" name="ENTRYSTATUS" value="CAPTURED">
		
           <center> <input type="submit" name="button" id="button" value="Save"/></center>
             
                    </form> 
       
              </div> 
              
               <div class="col-sm-1" >
               <p></p>
    <table class="table table-bordered" style="border:0px;">
    <thead>
      <tr style="border:0px;">
        <th style="border:0px;"> </th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="border:0px;"><B> </B></td> 
      </tr>
      <tr>
        <td style="border:0px;"><b> </b></td>  
        
         </tr>
      <tr>
        <td style="border:0px;"><b> </b></td>  
        
         </tr>
      <tr>
        <td style="border:0px;"><b> </b></td>  
         </tr>
      <tr>
        <td style="border:0px;"><b> </b></td>  
        
       </tr>
    </tbody>
  </table>                 
                     </div>  
                    </div>
                    <br>
                    
                                <table id="exdons" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr> 
                     <th>DESCRIPTION</th>
                     <th>CATEGORY</th> 
                     <th>UOM</th>  
                     <th>BALANCE IN STOCK</th>
                     <th>UNIT COST</th> 
			         <th>STOCK VALUE</th>
                     <th>RE-ORDER LEVEL</th>  
                     <th>QTY TO RE-ORDER</th> 
            </tr>
        </thead>
        <tfoot>
            <tr> 
                     <th>DESCRIPTION</th>
                     <th>CATEGORY</th> 
                     <th>UOM</th>  
                     <th>BALANCE IN STOCK</th>
                     <th>UNIT COST</th> 
			         <th>STOCK VALUE</th>
                     <th>RE-ORDER LEVEL</th>  
                     <th>QTY TO RE-ORDER</th> 
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

	if($str123==''){ 		 return '<td style="background-color:#ecf0f5;">'.$str123.'</td>';  	 }
	else
	{
		  $str1234=array();
          $str1234=explode('_',$tempstr);
		  $cnt = count( $str1234);
       	if($str1234[$cnt-1]==''){   	 return '<td style="background-color:#F1E291;">'.$str123.'</td>';    	 }

		               else{     return '<td style="background-color:#fff;">'.$str123.'</td>'; 	}
	}

}
  

require('dispenser/connect/config.php');
$sql = "SELECT * FROM `items` 
			                                                      LEFT JOIN `recievables` ON items.DESCRIPTION=recievables.DESCRIPTION 
																  LEFT JOIN `outgoingorders` ON items.DESCRIPTION=outgoingorders.DESCRIPTION 
																  WHERE DISCONTINUE = 'DISABLED' ORDER BY items.DESCRIPTION DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'. 
				 getIndicator($row["DESCRIPTION"]). 
                 getIndicator($row["CATEGORY"]). 
                 getIndicator($row["UNITOFMEASURE"]).
			     getIndicator($row["STOCKTAKEN"]).
                 getIndicator($row["QUANTITY"]).
				 getIndicator($row["QTYISSUED"]). 
				 getIndicator($row["QTYISSUED"]). 
                 '<td>'.$row["UNITCOST"].'</td></tr>'; 
 }

?>

	  </tbody>
  </table> 
                    
                  </div>
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
      <!-- START PROGRESS BARS -->
       
   </div>       
   </div>                   
   </div>
 
     <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="error" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
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
            <p style="color:red; font-weight:bold; font-size:20px; text-align:center;">   
            <input type="text"  id="CHECKIN" name="CHECKIN"  readonly style=" border-bottom-style:none; border-left-style:none; border-right-style:none; 
            border-top-style:none; font-family:lcd; font-size:26px; font-weight:bold; background-color:#000000; text-align:center;">
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
                            
                            
            <div class="col-lg-12">
                        <div class="modal fade" id="uiModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3">  </h4>
                                        </div>
                                        <div class="modal-body">


 <div class="col-lg-12" style="text-align:left;">
<img src="assets/img/logs.PNG" width="100%" height="100%">
</div>

          <center> <legend style="color:#000; font-weight:bold;font-size:12px;"> NEW CLIENT DEMOGRAPHY </legend> </center>

          <form class="form-horizontal" method="post" action="registration_desk_process.php" style="height:auto;">

		  
         </form>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                 
                          
                          
                         </div>
                    </div>
    <!-- /.content -->
  </div>
 
 
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
  
</body>
</html>   

 <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#dnx"+num).val(data[2]);
  $("#bal").val(data[2]);
  $("#bal2").val(data[3]); 
 
}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "dispenser/drugsearch.php",
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
   function calcsubtt(tableId){
	     var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
		  var sum = 0;
		   for(var x=1; x<rowCount; x++) { //0
		  // alert(table.rows[x].cells[2].childNodes[1].value);
		     sum    =sum+ parseFloat(table.rows[x].cells[6].childNodes[0].value);
		   }
		   document.getElementById("SUBTOTAL").value = ''+sum;
	 
	 } 

function  dostg(thisid){

     var val = thisid.split("_")[1];
	 var v1 = parseFloat(document.getElementById("pdx_"+val).value);
	 var v2 = parseFloat(document.getElementById("fqx_"+val).value);
	 var v3 = parseFloat(document.getElementById("tmx_"+val).value);

	 var v4 = v1*v2*v3;
	  document.getElementById("qtyx_"+val).value = v4;

}	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)"  name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="fqx[]" id="fqx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';			 

	 var  s3cc = '<select onchange="dostg(this.id)"  name="tmx[]" id="tmx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;" >'+ 
                                        '<option>1</option>'+
                                        '<option>2</option>'+
                                        '<option>3</option>'+
										'<option>4</option>'+
                                        '</select>';
 		 
	 var  s6ff = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pdx[]" id="pdx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';

     var  s7gg = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="qtyx[]" id="qtyx'+rowCount+'" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
		 
       var  s9 = '<input type="numeric" name="bal[]" id="bal'+rowCount+'"readonly="readonly" '+
                 'style= " margin-left:0px; width:100%; background-color:#ecf0f5;text-align:center;" >';
		 
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
				                  '<td>'+s7gg+' </td>'+
								  '<td>'+s9+' </td>';
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
		  table.rows[x].cells[6].childNodes[0].id="bal"+x; 
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
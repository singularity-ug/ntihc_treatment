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
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
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
  <link rel="stylesheet" href="../admin/assets/notifier.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../admin/dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
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
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#DESCRIPTION"+num).val(data[2]);
  $("#QTYINSTOCK").val(data[2]);
  $("#UNITOFMEASURE").val(data[3]);
  $("#ESTIMATEDUNITCOST").val(data[4]); 
}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "searchdrug_details.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>
  
  
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
     $('#exdynam').DataTable( {
	  "iDisplayLength": 2,
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
     $('#app1').DataTable( {
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
     $('#app2').DataTable( {
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
     $('#app3').DataTable( {
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
     $('#app4').DataTable( {
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
     $('#exdrug').DataTable( {
	  "iDisplayLength": 10,
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   <?php
  require('config.php');
  ?>
  <header class="main-header">

    <!-- Logo -->
    <a href="drugs_mgr.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DISPENSARY</b> </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="incomingdrugs.php" class="button5" > Home<span class="sr-only">(current)</span></a></li> 
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My confirmation <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="inc_confirm.php">Store requisition-confirm</a></li>  
                <li class="divider"></li> 
              </ul>
              
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">My approvals &nbsp;                    												
              <b style="color:red; font-size:15px;" ><?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM outgoingorders WHERE REQUISTIONTYPE ='STANDARD' AND 
                                   CONFIRMATIONOFREQUEST='CONFIRMED' AND APPROVAL = 'PENDING' AND FORWARDTO ='$rm'  GROUP BY ORDERSERIALID ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
	
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    </b> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="inc_approvals.php">Store requisition-approve</a></li>  
                <li class="divider"></li> 
              </ul>
               <li><a href="inc_viewall.php">View all</a></li>  
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
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
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
       
    <!-- Main content -->
      <div class="row">
        <div class="col-md-3" style="background-color: #367fa9;">
          <a href="incomingdrugs.php" class="btn btn-primary btn-block margin-bottom" style="background-color: #367fa9;"> </a>

          <div class="box box-solid">
            <div class="box-header with-border">
              
               
          
        <table class="table-responsive" style="margin-top:0px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:87%;border:2px solid #a9abae;background-color:#ecf0f5;">  
				   <a class="quick-btn" href="#" style=" border-radius:5px;  ">
                                <i class="icon-check icon-2x"></i>
                                <span>   </span>
                                
                            </a> 
                </th>  
				<th style="width:13%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i> 
                                <span class="label label-success" style="font-size: 13px;">
														 <?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM outgoingorders  WHERE  REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST='CONFIRMED' 
                                                       AND REQUESTORACCOUNT='$rm' 
			                                           GROUP BY ORDERSERIALID ")) {        
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
           
           
        <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:87%;border:2px solid #a9abae;background-color:#ecf0f5;">  
				   <a class="quick-btn" href="#" style=" border-radius:5px;  ">
                                <i class="icon-check icon-2x"></i>
                                <span>  </span>
                                
                            </a> 
                </th>  
				<th style="width:13%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i> 
                                <span class="label label-danger" style="font-size: 13px;">
														 <?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM outgoingorders  WHERE  REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST = 'PENDING'  
			                                           AND REQUESTORACCOUNT='$rm'  GROUP BY ORDERSERIALID ")) {        
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
              
              <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:87%;border:2px solid #a9abae;background-color:#ecf0f5;">  
				   <a class="quick-btn" href="#" style=" border-radius:5px;  ">
                                <i class="icon-check icon-2x"></i>
                                <span>   </span>
                                
                            </a> 
                </th>  
				<th style="width:13%; border:2px solid #a9abae;"> 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i> 
                                <span class="label label-info" style="font-size: 13px;">
														 <?php
$link = mysqli_connect("localhost", "root", "", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERSERIALID FROM outgoingorders  WHERE  REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST='CONFIRMED' AND APPROVAL = 'PENDING'
			                                            AND REQUESTORACCOUNT='$rm'  GROUP BY ORDERSERIALID ")) {        
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
              </ul>
           
            
              </div>
             
          <p></p>
          <BR><BR><P></P>
        </div>  
        </div> 
        
        <!-- /.col -->


      <div class="col-md-9">
          <div class="box box-primary" style="border:0px;"> 
               <a href="#" class="btn btn-primary btn-block margin-bottom"> Remote storage</a> 

              <div class="box-tools pull-right">
                <div class="has-feedback"> 
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
                  
                  
       <br>
       
 
 
<?php
  $id ='';  
  $ORDERSERIALID = ''; 
  $REQUESTINGUNIT  = '';
  $ORDERTYPE = '';
  $FACILITYNANE = '';   
  $TIMESTAMP='';
  $DATECREATED='';   
  $REQUESTINGUNIT = ''; 
  $FACILITYNANE='';  
  $REQUISTIONTYPE = '';   
  $REQBY=''; 
  $REQBYNAME = ''; 
  $REQBYDATE = ''; 
   
  	
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 $date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM outgingmin WHERE TIMESTAMP >='$date' ORDER BY id DESC LIMIT 1";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $ORDERSERIALID = $row['ORDERSERIALID']; 
     $REQUESTINGUNIT = $row['REQUESTINGUNIT'];
     $ORDERTYPE  = $row['ORDERTYPE'];
     $FACILITYNANE = $row['FACILITYNANE'];  
	 $DATECREATED=$row['DATECREATED'];  
     $REQUESTINGUNIT   = $row['REQUESTINGUNIT']; 
     $FACILITYNANE=$row['FACILITYNANE'];     
     $REQUISTIONTYPE   = $row['REQUISTIONTYPE']; 
	 $REQBY=$row['REQBY'];    
     $REQBYNAME   = $row['REQBYNAME'];  
     $REQBYDATE=$row['REQBYDATE'];   
      } 
  ?>
            
                    
                         <img src="../assets/img/logsbig.PNG" width="100%" height="30%">
     
        <center> <p style="color:#000; font-weight:bold;font-size:12px; background-color:#fff; margin-top:-18px; font-family:lcd;">
         STORE REQUISITION FOR DRUGS AND SUPPLIES</p> </center> 
  
     <form class="form-horizontal" action="incomingdrugs_masterprocessor.php" method="POST" style="height:auto; font-weight:normal;">  
         <br>
        <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                 <th style="width:13.25%; text-align:left;border:0px;">Requisition date</th>
                <td style="width:14.75%;border:0px;"><input type="date"id="DATECREATED" name="DATECREATED"  value="<?php  echo $DATECREATED; ?>" 
                 required="required"  
				style="width:100%; background-color:#fff;height: 21px;"></td> 
                  
               <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Requesting unit</th>
                <td style="width:16.75%;border:0px;"><select name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="<?php  echo $REQUESTINGUNIT; ?>"  required="required"
				style="width:100%; background-color:#fff;">
                <option value="<?php  echo $REQUESTINGUNIT; ?>" ><?php  echo $REQUESTINGUNIT; ?></option>
                         <option>DISPENSARY</option>
                         <option>LABORATORY</option> 
                         <option>FA</option> 
                         <option>SERVICE DELIVERY</option> 
                         <option>ADVOCACY AND RESEARCH</option> 
                         </select>
                </td>           
                  
                <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;">Order type</th>
                <td style="width:14.75%; border:0px;"><select name="ORDERTYPE" id="ORDERTYPE" value="<?php  echo $ORDERTYPE; ?>"  required="required"
				style="width:100%; background-color:#fff;">
                 <option value="<?php  echo $ORDERTYPE; ?>" ><?php  echo $ORDERTYPE; ?></option>
                         <option>IN HOUSE</option>
                         <option>FACILITY</option>  
                         </select>
                </td>           
			 </tr>             
            </table>
            
              <div class="table-responsive" style="margin-top:-16px;"> 
            <table class="table" style="border:0px;">
              <tr>  
                 <th style="width:13.25%; text-align:left;border:0px;">Requisition No.</th>
                <td style="width:14.75%;border:0px;"><input type="text"name="ORDERSERIALID" id="ORDERSERIALID" value="<?php  echo $ORDERSERIALID; ?>"  required="required"s  
				style="width:100%; background-color:#fff;"></td> 
                 
                <th style="width:9.33333333%; text-align:left; border:0px;"> </th> 
			  <th style="width:13.25%; text-align:left;border:0px;">Facility name</th>
                <td style="width:16.75%;border:0px;"><input type="text" name="FACILITYNANE" id="FACILITYNANE" value="<?php  echo $FACILITYNANE; ?>"  required="required"
				style="width:100%; background-color:#fff;"></td>
                
                   <th style="width:7.33333333%; text-align:left; border:0px;"> </th> 
			    <th style="width:13.25%; text-align:left;border:0px;"> </th>
                <td style="width:14.75%;border:0px;"></td>  
			 </tr>             
            </table>
              
            
      <p style="font-weight:normal;">Description of request</p>
     
              
   <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>   
   <th style="width:40%;background-color: #ecf0f5;">DESCRIPTION </th> 
   <th style="width:10%;background-color: #ecf0f5; text-align:center;">QTY IN STOCK</th> 
    <th style="width:10%;background-color: #ecf0f5;text-align:center;">QTY NEEDED </th>
   <th style="width:20%;background-color: #ecf0f5;text-align:center;">UNIT OF MEASURE </th> 
       <th style="width:10%;background-color: #f9fafb;text-align:center;">ACTION</th> 
      </tr>
      </thead>
      <tbody>

 <th style="width:30%;background-color: #f9fafb;"><input type="text"id="DESCRIPTION" onKeyUp="domee(this)" name="DESCRIPTION" required="required"
				style="width:100%; background-color:#fff;height: 21px;"> </th> 
                
   <th style="width:5%;background-color: #f9fafb; text-align:center;"><input type="text"id="QTYINSTOCK" name="QTYINSTOCK" required="required"
				style="width:100%; background-color:#fff;height: 21px;text-align:center;"> </th> 
                
    <th style="width:5%;background-color: #f9fafb;text-align:center;"><input type="text"id="QTYNEEDED" name="QTYNEEDED" required="required" 
				style="width:100%; text-align:right;background-color:#fff;height: 21px;text-align:center;">  </th>
                
               <th style="width:7%;background-color: #f9fafb;"><input type="text"id="UNITOFMEASURE" name="UNITOFMEASURE" required="required"
				style="width:100%;background-color:#fff;height: 21px;"> </th> 
   <th style="width:7%;background-color: #f9fafb;text-align:center;"><input type="submit" name="button" id="button" value="Add" />  </th> 
            
                <input type="hidden" id="UNITVALUE" name="UNITVALUE" >  
    </tbody>
    </table>   
   
    <input type="hidden"id="REQUISTIONTYPE" name="REQUISTIONTYPE" value="STANDARD" >  
    <input type="hidden"id="REQBY" name="REQBY" value="<?php  echo $REQBY; ?>">
    <input type="hidden"id="REQBYNAME" name="REQBYNAME" value="<?php  echo $REQBYNAME; ?>" >
    <input type="hidden" id="REQBYDATE" name="REQBYDATE" value="<?php  echo $REQBYDATE; ?>">  
    <input type="hidden"id="REQUESTORACCOUNT" name="REQUESTORACCOUNT" value="<?php  echo $rm; ?>">
        </form>
     
       <table id="exdynam" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;"> 
                     <thead>
                     <tr>
                     <th>DATE</th> 
                     <th>SERIAL NO.</th> 
                     <th>CREATED BY</th> 
                     <th>REQUESTING UNIT</th>
                     <th>FACILITY NANE</th> 
                     <th>ORDER TYPE</th> 
                     <th>APPROVAL</th>     
			         <th>ACTION</th> 
                      
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("connect/configproc.php");
             $date = date("Y-m-d").' 00:00:00';
             $result = mysqli_query($mysqli, "SELECT * FROM outgoingorders WHERE TIMESTAMP >='$date' AND REQUISTIONTYPE ='STANDARD' AND APPROVAL = 'PENDING'
			 GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $sdtsrr = $res['id']."***".$res['ORDERSERIALID']."***".$res['FACILITYNANE']."***".$res['ORDERTYPE'];
              echo "<tr>"; 
			  echo "<td>".$res['TIMESTAMP']."</td>";
			  echo "<td>".$res['ORDERSERIALID']."</td>";
			  echo "<td>".$res['REQBYNAME']."</td>"; 
			  echo "<td>".$res['REQUESTINGUNIT']."</td>";
              echo "<td>".$res['FACILITYNANE']."</td>"; 
			  echo "<td>".$res['ORDERTYPE']."</td>"; 
			  echo "<td>".$res['APPROVAL']."</td>";    
			  echo "<td><a href=\"str_reqn_printstandardminxtra.php?ORDERSERIALID=$res[ORDERSERIALID]\">print</a>  
			    </td>";
             }
              ?>
             </tbody>
             </table>	
     
      
           
           
      
                 
             </div></div></div></div> 
              
              
              
                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 "> 
   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="notificationModal" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 
 <img src="../assets/img/logsbig.PNG" width="100%" height="100%"> 
                <center> <p style="color:#000; font-weight:bold;font-size:12px;"> <b>NEW ITEM / LAB SUPPLIES REGISTRATION FORM</b> </p> </center>
                 
           <form class="form-horizontal" action="new_drugprocessor.php" method="POST" style="height:auto; font-weight:normal;">  
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:3px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Description</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="DESCRIPTION" id="DESCRIPTION"  value=" "  required="required"
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   </tr>
  <tr>
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Category  </th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="CATEGORY"   id="CATEGORY" required="required"
    style="width:100%; text-align:left;background-color:#ecf0f5;">   </td>  
   </tr>
  <tr>
 </tbody>
 </table>
 
    <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Breakdown</th>
   <th style="border:2px solid #ecf0f5;">Unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><select name="BREAKDOWN" id="BREAKDOWN"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;">
     <option value="DRUG">DRUG <option>
     <option value="OTHER SUPPLIES"> OTHER SUPPLIES<option>  
                  </select> </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="text" name="UNITOFMEASURE " id="UNITOFMEASURE"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
 
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Stock taken</th>
   <th style="border:2px solid #ecf0f5;">Qty per unit of measure</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="STOCKTAKEN" id="STOCKTAKEN"  value="0" 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
	
	<td style="width:50%;"><input type="numeric" name="QTYPERUOM " id="QTYPERUOM"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table>  
 
 
  <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Unit cost</th>
   <th style="border:2px solid #ecf0f5;">Re-order level</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="UNITCOST " id="UNITCOST"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;">  </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"><input type="numeric" name="REORDERLEVEL " id="REORDERLEVEL"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
							
   </tr>
  <tr>
 </tbody>
 </table>  
 
 <table class="table-responsive" style="background-color:#ffffff; margin-top:-19px; ">
            <table class="table">
              <tr>
			    <th style="width:25%;border:2px solid #ecf0f5;">Discontinue </th>
                <th style="width:75%">
				<center> <input type="radio" name="DISCONTINUE" id="DISCONTINUE" value="DISABLED" checked>
        <label for="DISCONTINUE">DISABLED</label>
		<input name="DISCONTINUE" type="radio" id="DISCONTINUE" value="ACTIVATE">
		<label for="DISCONTINUE">ACTIVATE</label> </center>
				</th>  
              </tr> 
            </table>
             
    <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Item short notes</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%; border:2px solid #ecf0f5;"><textarea name="ITEMNOTES" id="ITEMNOTES"  value="" required="required"
 style="width:100%; text-align:left;background-color:#ecf0f5;"></textarea></td> 
   </tr>
  <tr>
 </tbody>
 </table>  
        
	<table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th style="border:2px solid #ecf0f5;">Location</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%; border:2px solid #ecf0f5;"><input type="text" name="LOCATION" id="LOCATION"  value=""  
   style="width:100%; text-align:left;background-color:#ecf0f5;"> </td> 
   </tr>
  <tr>
 </tbody>
 </table> 
  
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Usage line</th>
   <th style="border:2px solid #ecf0f5;"> </th>
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:50%;border:2px solid #ecf0f5;"><select name="USERUNIT" id="USERUNIT"  value=" " 
    style="width:100%; text-align:left;background-color:#ecf0f5;">
     <option value="GENERAL">GENERAL <option>
     <option value="DISPENSARY"> DISPENSARY<option>  
     <option value="LABORATORY"> LABORATORY<option>  
                  </select> </td>  
	
	<td style="width:50%;border:2px solid #ecf0f5;"> </td> 
							
   </tr>
  <tr>
 </tbody>
 </table> 
  
	
   <table class="table table-striped" style="background-color:#ecf0f5; margin-top:-23px; ">
   <thead>
   <tr> 
   <th style="border:2px solid #ecf0f5;">Incharge stores</th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
	<td style="width:100%;border:2px solid #ecf0f5;"><input type="text" name="LASTUPDATEDBY" id="LASTUPDATEDBY"  value="<?php echo $nameofuser; ?>  " 
    style="width:100%; text-align:left;background-color:#ecf0f5;"></td>  
							
   </tr>
  <tr>
 </tbody>
 </table> 
  <Center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" /> &nbsp; 
  </Center>
			 
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;"> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
 
               <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="strrequests" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:S#FFF;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Store requisitions due for confirmation </h4>
                                        </div>
                                        <div class="modal-body">
  
                  <table id="app1" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th style="width:15%;">DATE</th> 
                     <th style="width:10%;">SERIAL NO.</th> 
                     <th style="width:20%;">CREATED BY</th> 
                     <th style="width:15%;">REQUESTING UNIT</th>
                     <th style="width:10%;">FACILITY NANE</th>  
                     <th  style="width:10%;">ESTIMATED COST(UGX)</th> 
                     <th  style="width:10%;">CONFIRMATION</th>     
			         <th  style="width:5%;">ACTION</th> 
			         <th  style="width:5%;">VIEW</th>
                  </tr>
                   </thead>
           <tfoot>
            <tr>
               <th style="width:15%;">DATE</th> 
                     <th style="width:10%;">SERIAL NO.</th> 
                     <th style="width:20%;">CREATED BY</th> 
                     <th style="width:15%;">REQUESTING UNIT</th>
                     <th style="width:10%;">FACILITY NANE</th>  
                     <th  style="width:10%;">ESTIMATED COST(UGX)</th> 
                     <th  style="width:10%;">CONFIRMATION</th>     
			         <th  style="width:5%;">ACTION</th> 
			         <th  style="width:5%;">VIEW</th>
            </tr>
                  
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("connect/configproc.php");

             $result = mysqli_query($mysqli, "SELECT TIMESTAMP,ORDERSERIALID,REQBYNAME,REQUESTINGUNIT,FACILITYNANE,APPROVAL,REQBY,
			  AMOUNT, SUM(AMOUNT),ORDERTYPE,CONFIRMATIONOFREQUEST
			  FROM outgoingorders WHERE REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST = 'PENDING'
			  GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsy = $res['ORDERTYPE']."***".$res['ORDERSERIALID'];
              echo "<tr>";
               echo "<td>".$res['TIMESTAMP']."</td>";
               echo "<td>".$res['ORDERSERIALID']."</td>";  
			   echo "<td>".$res['REQBYNAME']."</td>";
               echo "<td>".$res['REQUESTINGUNIT']."</td>"; 
			   echo "<td>".$res['FACILITYNANE']."</td>";
			   echo "<td>".$res['SUM(AMOUNT)']."</td>";
               echo "<td>".$res['CONFIRMATIONOFREQUEST']."</td>";
			      
			   echo '<td>  &nbsp;&nbsp;
			   <a id="2__'.$dtsy.'" href="javascript:void(0)" onclick="getintfucker(this.id)" data-toggle="tooltip" title="View requisition"
              <span class="glyphicon glyphicon-envelope"> </span></a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  
			  <a id="3__'.$dtsy.'" href="javascript:void(0)" onclick="getdetails(this.id)" data-toggle="tooltip" title="Allocate an order"
              <span class="glyphicon glyphicon-th-list"> </span></a> 
              </td>';
			  echo "<td>&nbsp;&nbsp;&nbsp;<a href=\"str_reqn_printstandardminxtra.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print</a>   </td>";
              }
              ?>
             </tbody>
             </table> 
               
             
              <div class=""  id="getintfucker" >  </div>
                <script>

          function getintfucker(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'str_viewrequisition.php?q='+odno,
                       success : function(data){
                                $('#getintfucker').html(data);
								$("#outfuc").modal("show");
                                 }
               });
               }

          </script>
              
           </div>
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#FFF; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                     </div>
                                   </div>
                                </div>
                             </div>
                           </div>
                         </div>
      
 <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="strappv" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:S#FFF;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Store requisitions due for approval </h4>
                                        </div>
                                        <div class="modal-body">
 
                   <div class="col-sm-9">
                  <table id="app2" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th style="width:15%;">DATE</th> 
                     <th style="width:10%;">SERIAL NO.</th> 
                     <th style="width:20%;">CREATED BY</th> 
                     <th style="width:15%;">REQUESTING UNIT</th>
                     <th style="width:10%;">FACILITY NANE</th>  
                     <th  style="width:10%;">ESTIMATED COST(UGX)</th> 
                     <th  style="width:10%;">CONFIRMATION</th>     
			         <th  style="width:5%;">ACTION</th> 
			         <th  style="width:5%;">VIEW</th>
                  </tr>
                   </thead>
           <tfoot>
            <tr>
               <th style="width:15%;">DATE</th> 
                     <th style="width:10%;">SERIAL NO.</th> 
                     <th style="width:20%;">CREATED BY</th> 
                     <th style="width:15%;">REQUESTING UNIT</th>
                     <th style="width:10%;">FACILITY NANE</th>  
                     <th  style="width:10%;">ESTIMATED COST(UGX)</th> 
                     <th  style="width:10%;">CONFIRMATION</th>     
			         <th  style="width:5%;">ACTION</th> 
			         <th  style="width:5%;">VIEW</th>
            </tr>
                  
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("connect/configproc.php");

             $result = mysqli_query($mysqli, "SELECT TIMESTAMP,ORDERSERIALID,REQBYNAME,REQUESTINGUNIT,FACILITYNANE,APPROVAL,REQBY,
			  AMOUNT, SUM(AMOUNT), CONFIRMATIONOFREQUEST
			  FROM outgoingorders WHERE REQUISTIONTYPE ='STANDARD' AND CONFIRMATIONOFREQUEST = 'CONFIRMED'
			  GROUP BY ORDERSERIALID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsy = $res['FACILITYNANE']."***".$res['ORDERSERIALID'];
              echo "<tr>";
               echo "<td>".$res['TIMESTAMP']."</td>";
               echo "<td>".$res['ORDERSERIALID']."</td>";  
			   echo "<td>".$res['REQBYNAME']."</td>";
               echo "<td>".$res['REQUESTINGUNIT']."</td>"; 
			   echo "<td>".$res['FACILITYNANE']."</td>";
			   echo "<td>".$res['SUM(AMOUNT)']."</td>";
               echo "<td>".$res['CONFIRMATIONOFREQUEST']."</td>";
			      
			   echo '<td> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
			   <a id="'.$dtsy.'" href="javascript:void(0);" data-toggle="tooltip" title="Click to confirm order"  onclick="postpettyx(this.id)">
               <span class="glyphicon glyphicon-ok"> </span> </a>
              
              </td>';
			  echo "<td>&nbsp;&nbsp;&nbsp;<a href=\"str_reqn_printstandardminxtra.php?ORDERSERIALID=$res[ORDERSERIALID]\">Print</a>   </td>";
              }
              ?>
             </tbody>
             </table>
               
             
             </div>
             
              <div class="col-sm-3">
			
          
             <script>
           function postpeexD(myid){
           var dtsyxd = myid.split("***");
           document.getElementById("myMORDERSERIALID").value=dtsyxd[1];
           document.getElementById("myID").value=dtsyxd[0];
           document.getElementById("myAPPLICANTNAME").value=dtsyxd[2]; 

           }
           </script>


           <form method="post" action="str_drugreqn_update.php">
           
           <table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
           <thead>
           <tr>
           <th>Requisition serial number</th> 
           </tr>
           </thead>
           <tbody>
           <tr>
           <td style="width:30%;"><input type="text" name="ORDERSERIALID" id="myMORDERSERIALID"  value="" required="required"  
           style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
           </tr>
           <tr>
        </tbody>
        </table>
        
        
        <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
        <thead>
        <tr>
        <th>Confirmed by</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td style="width:30%;"><input type="text" name="AUTBY" id="AUTBY" value="<?php echo $desc; ?>" readonly="readonly" 
        style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
        </tr>
       <tr>
      </tbody>
     </table>

     <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
        <thead>
        <tr>
        <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td style="width:30%;"><input type="text" name="AUTBYNAME" id="AUTBYNAME" value="<?php echo $nameofuser; ?>" readonly="readonly" 
        style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
        </tr>
       <tr>
      </tbody>
     </table> 
      
	 <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
        <thead>
        <tr>
        <th>Department</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td style="width:30%;"><input type="text" name="AUTHDEPT" id="AUTHDEPT" value="<?php echo $dept; ?>" readonly="readonly" 
        style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
        </tr>
       <tr>
      </tbody>
     </table>	 
         
   <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th>PF Number</th>
   <th>Date</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:30%;"><input type="text" name="AUTHPF" id="AUTHPF"  value="<?php echo $pf; ?>" readonly="readonly" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:30%;"><input type="text" name="AUTBYDATE" id="AUTBYDATE"  value="<?php echo date('d-m-y'); ?>" readonly="readonly" 
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   </tr>
  <tr>
 </tbody>
 </table>
  
 
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
 <thead>
 <tr>
 <th>Comment</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td style="width:30%;"><textarea name="AUTHCORCOMMENT" id="AUTHCORCOMMENT"  value="" required="required"
 style="width:100%; text-align:left;background-color:#ecf0f5;"></textarea></td>

 </tr>
<tr>
</tbody>
</table>

<table class="table-responsive" style="background-color:#ffffff; margin-top:-19px; ">
            <table class="table">
              <tr>
			    <th style="width:25%">ACTION </th>
                <th style="width:75%">
				<center> <input type="radio" name="CONFIRMATIONOFREQUEST" id="CONFIRMATIONOFREQUEST" value="CONFIRMED" checked>
        <label for="CONFIRM">CONFIRM</label> 
				</th>  
              </tr> 
            </table>
                       
  
        
		 <center><input type="submit" name="buttonsend" value="Update" style="height: 25px;">  </center>
             <br>
           
           
           </div>
           <div class="col-sm-12">
           <div class="panel-body">
           </form> 
           </div>

                                        </div>
                                        <div class="modal-footer" style="background-color:#FFF; color:#ffffff;">
                                           <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                     </div>
                                   </div>
                                </div>
                             </div>
                           </div>
                         </div>
      


                </div> 
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
    <footer class="main-footerx" style="background-color: #000; color:#fff;text-align:center;">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

  
  </div> 


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
<script src="../admin/admin/dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
	<script type="text/javascript" src="../assets/js/gauge.js"></script> 
</body>
</html> 
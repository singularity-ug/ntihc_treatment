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
	  "iDisplayLength": 10,
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
	  "iDisplayLength": 5,
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
     $('#example11').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

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
  require('dbconfig.php');
  ?>

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
            <li class="active"><a href=<button class="button5" data-toggle="modal"  data-target="#m2"></button> 
			View payments<span class="sr-only">(current)</span></a></li> 
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
  <div class="row" style="background-color:#fff;">
       <!-- Content Header (Page header) -->
    <br>
    
    <div class="col-sm-6" style="height:auto; background-color:;">
    
    <img src="../../assets/img/logsbig.PNG" width="100%" height="100%"> 
 <center> <p style="color:#000; font-weight:bold;font-size:12px;"> <b>CHEQUE PAYMENT VOUCHER</b> </p> </center> 
 
<hr  style="margin-top: -8px;">   


         <form class="form-horizontal" action="processpmts.php" method="POST">
   
          
     <table class="table-responsive" style="margin-top:-10px;">
            <table class="table" style="border:0px;">
              <tr>
			    <th style="width:14%;border:2px solid #a9abae;">Payee </th>
				<th style="width:36%;border:2px solid #a9abae;"> <input type="text"  name="PAYEE" id="PAYEE"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				 <th style="width:14%;border:0px;"> Project </th>
                <td style="width:36%;border:0px;"> <input type="text" name="PROJECT" id="PROJECT"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </td>
              </tr>
			  </table>
<table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;"> 
             <tr>
			    <th style="width:50%;border:0px;">Budget line description </th>  
				 <th style="width:14%;border:0px;"> Cheque Vr No. </th>
                <td style="width:36%;border:0px;"> <input type="text"   name="PMTNO" id="PMTNO"  
				readonly="readonly" style="width:100%; font-weight:normal; background-color:#ecf0f5;">  </td>
              </tr>
			  </table>
			  
			  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;"> 
             <tr> 
			    <th style="width:50%;border:0px;"><input type="text"  name="BUDGETLINEDESCRIPTION" id="BUDGETLINEDESCRIPTION"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff;">  </th> 
				
				 <th style="width:14%;border:0px;"> Date</th>
                <td style="width:36%;border:0px;"> <input type="date"  name="DATECREATED" id="DATECREATED"  placeholder = "dd / mm / yyy"
				 style="width:100%; font-weight:normal; background-color:#fff; height:19px;">  </td>
              </tr> 
            </table>
			
        <input type="hidden"  name="PMTDATATE" id="PMTDATATE"  value="<?php echo date('y-m-d'); ?>" 
				 style="width:100%; font-weight:normal; background-color:#fff;">  
        
    <table class="table table-bordered" id="mytable100" style="margin-top: -17px;">
    <thead>
      <tr  class="  ">  
      <th>*</th>
   <th style="width:40%;">DETAILS OF PAYMENT </th>
   <th style="width:30%;">BUDGET DETAILS</th>
   <th style="width:15%; text-align:center;">ACCOUNT / CODE</th>   
   <th style="width:15%; text-align:center;">AMOUNT (UGX)</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
        <input type="button" onClick="addRow16('mytable100')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable100')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">
        
     <br>
      
       <br>
	  <div id="res" style="border:2px solid;"> </div>

     <table class="table-responsive" style="margin-top:-18px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Cheque No.</th>
                <td style="width:30%"><input type="numeric" name="CHEQUENO" id="CHEQUENO"   
				required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td> 
				
                <th style="width:20%; text-align:right;">TOTAL Shs.</th>
                <td style="width:30%"><input type="numeric" name="SUBTOTAL" id="SUBTOTAL"   
				readonly="readonly"
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold;"></td>   
			 </tr>             
            </table>
			  
              <table class="table-responsive" style="margin-top:-10px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Amount in words.</th>
                <td style="width:80%"><input type="numeric" name="AMOUNTINWORDS" id="AMOUNTINWORDS"   
				required="required"
				style="width:100%; text-align:left;background-color:#fff;"></td>    
			 </tr>             
            </table> 
			 <table class="table-responsive" style="margin-top:10px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Prepared by:</th>
                <td style="width:30%"><input type="numeric" name="PREPTITLE" id="PREPTITLE" value="<?php echo $desc; ?> "  readonly=""  
				style="width:100%; text-align:left;background-color:#fff;"></td>    
				<th style="width:20%; text-align:left;">Reviewed by:</th>
                <td style="width:30%"><input type="numeric"    
				readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>   
			 </tr>             
            </table> 
			
			 
            <table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Reviewed and approved by:</th>
                <td style="width:30%"><input type="numeric"   readonly=""  
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>    
				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"><input type="numeric"    
				readonly="readonly"
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>   
			 </tr>             
            </table> 
			
			<table class="table-responsive" style="margin-top:-23px;" > 
            <table class="table">
              <tr> 
			    <th style="width:20%; text-align:left;">Recieved by:</th>
                <td style="width:30%"><input type="numeric" readonly="readonly"  
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>    
				<th style="width:20%; text-align:left;">Date</th>
                <td style="width:30%"><input type="numeric"   
				readonly="readonly"  
				style="width:100%; text-align:left;background-color:#ecf0f5;"></td>   
			 </tr>             
            </table>                        
        <input type="hidden" name="PREPNAME" id="PREPNAME" value="<?php echo $nameofuser; ?>" >   
        <input type="hidden" name="PREPDEPT" id="PREPDEPT" value="<?php echo $dept; ?>" >  
		<input type="hidden" name="FINANCIALYEAR" id="FINANCIALYEAR" > 
		<input type="hidden" name="VOUCHERID" id="VOUCHERID" value=" <?php echo uniqid();?>" > 
              
                      
     <table class="table table-striped" style="background-color:#ffffff; margin-top:-13px; ">
     <thead>
     <tr>
     <th>Budget amount</th>
	 <th style="text-align:center;">Expenditure to date</th>
	 <th style="text-align:center;">Amount requested</th>
	 <th style="text-align:center;">Balance on budget</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <td style="width:25%;"><input type="text" name="BUDGETAMOUNT" id="BUDGETAMOUNT"    
     style="width:100%; text-align:left;background-color:#FFF;"></td>
	 
      <td style="width:25%;"><input type="text" name="EXPENDITURETODATE" id="EXPENDITURETODATE"  readonly="readonly" 
     style="width:100%; text-align:center;background-color:#ecf0f5;"></td>
	 
	 <td style="width:25%;"><input type="text" name="AMOUNTREQUESTED" id="AMOUNTREQUESTED"  readonly="readonly"  
     style="width:100%; text-align:center;background-color:#ecf0f5;"></td>
	 
	 <td style="width:25%;"><input type="text" name="BALANCEONBUDGET" id="BALANCEONBUDGET"  readonly="readonly"    
     style="width:100%; text-align:center;background-color:#ecf0f5;"></td>
     </tr>
    <tr>
   </tbody>
   </table>
              
<br>
<table class="table table-bordered " style="margin-top: -25px;">
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
        <select name="SENDTO" id="SENDTO"  required="required" style="width:100%; text-align:center;">
		<option></option>
                  ddd     = "<?php   echo $stdd; ?>"; 
                  </select></td>  
        
        <td style="background-color:#f9f9f9;"> <center> <input type="submit" name="button" id="button" value="Save " 
	 style= " font-size:15px; font-weight:bold; border-radius:11px; "/>  <center></td>  
    </tr> 
    </tbody>
    </table>  
           </form>
    

              

			 </div>   

		<div class="col-sm-6" style="height:auto;"> 

 <div class="box-group" id="accordion">
                 <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                 <div class="panel box box-primary">
                   <div class="box-header with-border">
                     <h4 class="box-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      <b>Payment voucher(s)</b>
                       </a>
                     </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in" style="background-color: #fff;">

                       <div class="progress">
                   	  <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                       <B>Reviewed and approved payments </b><span class="sr-only">35% Complete (success)</span></div>
                       <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   	  </div>

                       <br>
                  <table id="example" class="table table table-table tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>DATE</th>
                     <th>S/NO.</th>
                     <th>CHEQUE NO.</th>
					 <th>AMOUNT</th>
                        <th>&nbsp;&nbsp;&nbsp; VIEW</th>   
                        <th>&nbsp;&nbsp;&nbsp; ACTION</th>      				
                  </tr>
                  </tfoot>
                  <tbody>

             <?php
             include_once("dbconfig.php");

             $result = mysqli_query($mysqli, "SELECT * FROM chqpayments  
                                              GROUP BY VOUCHERID ORDER BY DATECREATED DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['VOUCHERID']."***".$res['SUBTOTAL'];
              echo "<tr>";
              echo "<td>".$res['TIMESTAMP']."</td>"; 
               echo "<td>".$res['VOUCHERID']."</td>";
			    echo "<td>".$res['CHEQUENO']."</td>";
			    echo "<td>".$res['SUBTOTAL']."</td>";
              echo '<td> 
              &nbsp;&nbsp;&nbsp; 
              <a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getvoucher(this.id)" data-toggle="tooltip" title="view"
              <span class="glyphicon glyphicon-envelope"> </span></a> &nbsp;|&nbsp;   
              </td>'; 
			  echo "<td><a href=\"print_pmt.php?VOUCHERID=$res[VOUCHERID]\">Print</a>  </td>";
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

                    <a href=<button class="small-box-footer" data-toggle="modal"  data-target="#m4"></button> 
					<B style="color:green;">Payment tracker   </B> | </a> 
					 &nbsp;&nbsp;&nbsp;
					<a href=<button class="small-box-footer" data-toggle="modal"  data-target="#m5"></button> 
					<B style="color:green;">Add budget description</B></a> 
				 
		   
		   
      
			   
		   
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
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body"> 
 
            
                    <table id="example5" class="table table-table-tabled" style="font-weight:normal;"> 
 <thead>
          <tr> 
                     <th>NO</th> 
              	     <th>PERIOD</th>  
                     <th>PAYEE</th>  
                     <th>CHEQUE.NO</th>  
					 <th>AMOUNT</th> 
					 <th>PROJECT</th>  
					 <th>BUDGET DESCRIPTION</th> 
                     <th>CODE</th> 
					 
            </tr>
        </thead>
        <tfoot>
          <tr>
           
                     <th>NO</th> 
              	     <th>PERIOD</th>  
                     <th>PAYEE</th>  
                     <th>CHEQUE.NO</th> 
					 <th>AMOUNT</th> 
					 <th>PROJECT</th>  
					 <th>BUDGET DESCRIPTION</th> 
                     <th>CODE</th>  
            </tr>
        </tfoot>
        <tbody> 
<?php
require('../config/config_dbmultiple.php'); 

$sql = "SELECT TIMESTAMP,DATECREATED, FISCALMONTH, FISCALYEAR, SUM(SUBTOTAL), BUDGETLINEDESCRIPTION, CODE, FINANCIALYEAR ,PAYEE, CHEQUENO,PROJECT
                 FROM chqpayments WHERE  CORACTION ='PENDING'  
                 GROUP BY FISCALMONTH, FISCALYEAR, BUDGETLINEDESCRIPTION ORDER BY FINANCIALYEAR, BUDGETLINEDESCRIPTION,FISCALYEAR DESC";
   
 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){ 
  echo'<tr>'.
       '<td>'.$x.'</td>'.  
	   '<td>'.$row['DATECREATED'].'</td>'.
	   '<td>'.$row['PAYEE'].'</td>'. 
	   '<td>'.$row['CHEQUENO'].'</td>'. 
       '<td>'.$row['SUM(SUBTOTAL)'].'</td>'. 
	   '<td>'.$row['PROJECT'].'</td>'. 
       '<td>'.$row['BUDGETLINEDESCRIPTION'].'</td>'.
	   '<td>'.$row['CODE'].'</td>'. 
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
			  

                                        </div>
                                        <div class="modal-footer"> 
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>	
					

			  <div class="modal" id="m4" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:20px; text-align:center;"> Procurement Tracker</p>

             <table id="example7" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ORDER.NO.</th>
                <th>RECIEVED</th> 
                <th>SUBJECT.OF.PROCUREMENT</th>
                <th>EST.COST</th>
                <th>ALLOCATED.TO</th>
                <th>RECOMMEDED.METHOD</th>
                <th>SHORTLISTED PROVIDER</th>
                <th>ACTUAL COST</th>
                <th>PAYMENT STATUS</th>
				<th>PENDING REQUIREMENTS</th>
                <th>ORDER STATUS</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ORDER.NO.</th>
                <th>RECIEVED</th> 
                <th>SUBJECT OF PROCUREMENT</th>
                <th>EST.COST</th>
                <th>ALLOCATED.TO</th>
                <th>RECOMMEDED.METHOD</th>
                <th>SHORTLISTED.PROVIDER</th>
                <th>ACTUAL.COST</th>
                <th>PAYMENT.STATUS</th>
				<th>REQUIREMENTS</th>
                <th>ORDER.STATUS</th> 
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
  

require('connect/config.php');
$sql = "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND CONFEXTENSION ='$rm' 
                                              AND  AOACTION = 'APPROVED' AND ACTION = 'PENDING' 
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["JOBNUMBER"].'</td>'.
                 '<td>'.$row["RECIEVEDDATE"].'</td>'. 
				 getIndicator($row["SUBJECTOFPROCUREMENT"]). 
                 getIndicator($row["SUBTOTAL"]). 
                 getIndicator($row["OFFICERALLOCATED"]).
			     getIndicator($row["THRESHOLD"]).
                 getIndicator($row["SUPPLIER"]).
				 getIndicator($row["ACTUALCOST"]).
				  '<td>'.$row["PAYMENTSTATUS"].'</td>'.  
                 getIndicator($row["PENDINGREQUIREMENTS"]).
                 '<td>'.$row["ORDERSTATUS"].'</td></tr>';

 }

?>

	  </tbody>
  </table>  
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

					
				 <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="m5" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" action="dynamicpross.php" method="POST">
   
   <p style="text-align:center; font-weight:bold;">New budget line description by Objective</p>
   
       <table class="table table-bordered" style="background-color:#ffffff; margin-top:-3px; ">
     <thead>
     <tr>
     <th>Objective</th>
	 <th style="text-align:center;">Financial period</th> 
     </tr>
     </thead>
     <tbody>
     <tr>
     <td style="width:25%; "><input type="text" name="FINOBJECTIVE" id="FINOBJECTIVE"    required="required"  
     style="width:100%; text-align:left;background-color:#fff;"></td>
	 
     <td style="width:25%; "><select name="FINPERIOD" id="FINPERIOD"  readonly="readonly" 
     style="width:100%; text-align:center;background-color:#fff;">
	 <option></option>
	 <option>July 2017 - June 2018</option>
	 <option>July 2018 - June 2019</option>
	 <option>July 2019 - June 2020</option>
	 </select>
	 </td> 
     </tr>
    <tr>
   </tbody>
   </table>        
        
        
    <table class="table table-bordered" id="mytable11">
    <thead>
      <tr  class="  ">  
      <th>*</th>
    <th style="width:60%;">BUDGET LINE DESCRIPTION</th>
   <th style="width:20%;">CODE</th>
   <th style="width:20%; text-align:center;">BUDGET SUM</th>    
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
       <input type="button" onClick="addRow166('mytable11')" value="Add" />
     <input type="button" onClick="deleteRow166('mytable11')" value="(Delete)" />
     <input type="hidden" id="mytable_rows11" value="0">
        
     <br> <br> 
	 
	<input type="hidden"  name="ENTRYDATE" id="ENTRYDATE"  value="<?php echo date('y-m-d'); ?>" 
	
		
	<center> <input type="submit" name="button" id="button" value="Save " 
	 style= " font-size:15px; font-weight:bold; border-radius:11px; "/>  <center>
 	 
  
           </form>
            

                                        </div>
                                        <div class="modal-footer"> 
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div>	
					
            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="vouce" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class=""  id="getvoucher" >  </div>
                     <script>

               function getvoucher(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'view_pmt.php?q='+odno,
                            success : function(data){
                                     $('#getvoucher').html(data);
     								$("#vouce").modal("show");
                                      }
                    });
                    }

               </script>
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
    </div>
    <!-- /.container -->
  </footer>
</div>
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

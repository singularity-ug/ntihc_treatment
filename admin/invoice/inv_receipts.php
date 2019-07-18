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
$stddas ="";
if( $result = $connect->query("SELECT * FROM bankdetails GROUP BY ACCOUNTNAME"))
{ while ($row = $result->fetch_assoc() ) {   $stddas=$stddas. "<option> " . $row['ACCOUNTNAME'] ." </option>";   }
  }
$connect->close();
?>


 <?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stdddf ="";
if( $result = $connect->query("SELECT * FROM bankdetails GROUP BY CLIENTBANKNAME "))
{ while ($row = $result->fetch_assoc() ) {   $stdddf=$stdddf. "<option> " . $row['CLIENTBANKNAME'] . " </option>";   }
  }
$connect->close();
?>


 <?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stddxx ="";
if( $result = $connect->query("SELECT * FROM bankdetails GROUP BY ACCOUNTNUMBER "))
{ while ($row = $result->fetch_assoc() ) {   $stddxx=$stddxx. "<option> " . $row['ACCOUNTNUMBER'] ." </option>";   }
  }
$connect->close();
?> 
 
      
<?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stddbranch ="";
if( $result = $connect->query("SELECT * FROM bankdetails GROUP BY BRANCH"))
{ while ($row = $result->fetch_assoc() ) {   $stddbranch=$stddbranch. "<option> " . $row['BRANCH'] ." </option>";   }
  }
$connect->close();
?> 

<?php
$connect = new mysqli("localhost", "root", "toor2", "dbmultiple");
$stddswft ="";
if( $result = $connect->query("SELECT * FROM bankdetails GROUP BY SWIFTCODE"))
{ while ($row = $result->fetch_assoc() ) {   $stddswft=$stddswft. "<option> " . $row['SWIFTCODE'] ." </option>";   }
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
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap2.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../assets/notifier.css">
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

  $("#BUDGETDETAILS"+num).val(data[2]);
  $("#BUDGETLINE").val(data[2]);
  $("#CODE").val(data[3]);

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
        {extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:' RECEIPTS '
		},
		{extend :'print',
		 title:' RECEIPTS'
		}
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength":2,
        dom: 'Bfrtip',
        buttons: [
        {extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:' INVOICES '
		},
		{extend :'print',
		 title:' INVOICES'
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
	  "iDisplayLength": 1,
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
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();
         document.getElementById('CHECKIN').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script>

   <style>
h9 {
    border-bottom: 1px solid #eee;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 1px solid #eee;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #eee;;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #eee;
    line-height: 1.0;
    padding: 1px;
    vertical-align: center;
   }

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
             table, th , td  {
                 border: 1px solid #eee;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 12px;
             	 color:#000000;
				 background-color: #fff;
             }
             table tr:nth-child(odd) {
             background:#ffffff;
             }
             table tr:nth-child(even) {
             background:#ffffff;
             }

</style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
 <?php
  require('config.php');
  ?>

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav"> 
            <li class="active"><a href="inv_receipts.php" class="button 5" > Close<span class="sr-only">(current)</span></a></li>

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
         <B style="font-size:12px;"> &nbsp <?php echo $nameofuser; ?>  </B>
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
     
    <div class="col-sm-5" style="height:auto; background-color:;">

	
	<div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab" style="font-size: 16px;"><i class="fa fa-th"></i> &nbsp Receipt</a></li>
              <li ><a href="#tab_2-2" data-toggle="tab" style="font-size: 16px;"><i class="fa fa-th"></i> &nbsp Invoice</a></li> 
              
              <li class="pull-left header"><i class="fa fa-th"></i> Payments</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <div class="box-group" id="accordion">
                 <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                 <div class="panel box box-primary">
                   <div class="box-header with-border">
                     <h4 class="box-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Add new receipt details  
                       </a>
                     </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in" style="background-color: #FFF;">

                       <div class="progress">
                   	  <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                       <B>  </b><span class="sr-only">35% Complete (success)</span></div>
                       <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   	  </div>

                       <br>
					   
             <form  class="form-horizontal" action="inv_receiptprocess.php" method="POST" style="height:auto; font-weight:normal;">  
			
 
             <table class="table table-striped" style="background-color:#ffffff;margin-top:-15px;">
             <thead>
             <tr>
             <th>Date</th>
			 <th>Output type</th>
             </tr>
             </thead>
             <tbody>
             <tr>
               <td style="width:50%;"><input type="date" id="CREATEDDATE" name="CREATEDDATE" value="<?php echo date('d-m-y'); ?>"  required="required"
               style="width:100%; text-align:left;background-color:#ecf0f5;">
               </td>
			   <td style="width:50%;">
			   <select   id="DOCTYPE" name="DOCTYPE" data-placement="top" required ="required"  
                       style="width:100%; text-align:left;background-color:#ecf0f5;">
					   <option>Receipt</option> 
                        </select>
               
               </td> 
             </tr>
            <tr>
           </tbody>
          </table>

		   <table class="table table-striped" style="background-color:#ffffff; margin-top:-15px;">
             <thead>
             <tr> 
			 <th>Receipt to</th>
             </tr>
             </thead>
             <tbody>
             <tr>
               <td style="width:50%;"><input type="text" class="form-control"  id="ATTENTIONTO" name="ATTENTIONTO" required ="required" 
               style="width:100%; text-align:left;background-color:#ecf0f5; ">  
			   
               </td> 
             </tr>
            <tr>
           </tbody>
          </table>
		  
          <table class="table table-striped" style="background-color:#ffffff;margin-top:-15px;">
             <thead>
             <tr> 
			 <th>Being payment for</th>
             </tr>
             </thead>
             <tbody>
             <tr>
               <td style="width:50%;"><textarea class="form-control"  id="PARTICULARS" name="PARTICULARS" required ="required" 
               style="width:100%; text-align:left;background-color:#ecf0f5;height:24px;"></textarea>
               </td> 
             </tr>
            <tr>
           </tbody>
          </table>
		 
		  <table class="table table-striped" style="background-color:#ffffff;margin-top:-15px;">
             <thead>
             <tr>
             <th>Payment type</th>
			 <th>Cheque No.</th>
			 <th>Currency</th>
             </tr>
             </thead>
             <tbody>
             <tr>
			 
			 <td style="width:33.3333333%;">
			   <select  id="PAYMENTTYPE" name="PAYMENTTYPE"   data-placement="top" 
                         style="width:100%; text-align:center;background-color:#ecf0f5;">
                        <option>Cash</option> 
                        <option>Cheque</option> 
                        <option>Others</option> 
                        </select> 
               
               </td> 
			   
               <td style="width:33.3333333%;">
			   <input type="text" id="CHEQUENUMBER" name="CHEQUENUMBER" value="N/A" 
               style="width:100%; text-align:center;background-color:#ecf0f5;">
               </td>
			   
			   <td style="width:33.3333333%;">
			   <select id="CURRENCYTYPE" name="CURRENCYTYPE"  data-placement="top" 
                        style="width:100%; text-align:center;background-color:#ecf0f5;">
                        <option>UGX</option>
                        <option>Dollar</option>
                        <option>Others</option>
                        </select> 
               </td>
			   
             </tr>
            <tr>
           </tbody>
          </table>
		  
		   <table class="table table-striped" style="background-color:#ffffff; margin-top:-15px;">
             <thead>
             <tr> 
			 <th>Amount in words</th>
			 <th>Sum (figures)</th>
             </tr>
             </thead>
             <tbody>
             <tr>
               <td style="width:70%;"><input type="text"  id="AMOUNTINWORDS" name="AMOUNTINWORDS"  required ="required" 
               style="width:100%; text-align:left;background-color:#ecf0f5; ">  </td>  
			   <td style="width:30%;"><input type="text"  id="TOTALSUM" name="TOTALSUM" required ="required" 
               style="width:100%; text-align:left;background-color:#ecf0f5; ">  </td>  
			         
             </tr>
            <tr>
           </tbody>
          </table>
		    <input type="hidden"  id="ORDERNO" name="ORDERNO"  value=" <?php echo uniqid();?>">
	 
		    <input type="hidden" name="CREATEDBY" id="CREATEDBY" value="<?php echo $nameofuser; ?>" >                
        <input type="hidden" name="USERTITLE" id="USERTITLE" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="USERDEPT" id="USERDEPT" value="<?php echo $dept; ?>" > 
        <input type="hidden" name="USERPFNO" id="USERPFNO" value="<?php echo $pf; ?>" >   
        <input type="hidden" name="DOCDATE" id="DOCDATE" value="<?php echo date('d-m-y'); ?>" >    
        <center> <input type="image" name="submit" id="button" src="../imgg/save5.jpg" width="60" height="60" style="margin-top:-16px;" /> </center>
        </form>
		  
		  
		   </div>
             </div>
             <div class="panel box box-danger">
               <div class="box-header with-border">
                 <h4 class="box-title">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                   Receipts | <b style="color:blue;">local </b> | <b style="color:red;">remote </b> <b> storage </b>
                   </a>
                 </h4>
               </div>
               <div id="collapseTwo" class="panel-collapse collapse" style="background-color: #FFF;">

                   <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                   Use the lower paginates to access all receipt records <span class="sr-only">35% Complete (success)</span></div>
                   <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   </div>
				   <BR>
         <table id="example" class="table table-striped table-bordered" style="background-color:#fff;">
        <thead>
        <tr>  
              <th style="text-transform:uppercase;">ID</th> 
			  <th style="text-transform:uppercase;">DATE</th> 
			  <th style="text-transform:uppercase;">PERIOD</th>
              <th style="text-transform:uppercase;">RECEIPT.TO</th> 
              <th style="text-transform:uppercase;">AMOUNT</th> 
              <th style="text-transform:uppercase;text-align:center;">ACTION</th> 
			  <th style="text-transform:uppercase; background-color:green;"></th>
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th style="text-transform:uppercase;">ID</th> 
			  <th style="text-transform:uppercase;">DATE</th> 
			  <th style="text-transform:uppercase;">PERIOD</th>  
              <th style="text-transform:uppercase;">RECEIPT.TO</th> 
              <th style="text-transform:uppercase;">AMOUNT</th> 
              <th style="text-transform:uppercase;text-align:center;">ACTION</th> 
			  <th style="text-transform:uppercase;background-color:green;"></th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function configcode(myid){
var dts = myid.split("***");
document.getElementById("myORDERNO").value=dts[1]; 
document.getElementById("myID").value=dts[0];
document.getElementById("myTIMESTAMP").value=dts[2];
document.getElementById("myATTENTIONTO").value=dts[3];
document.getElementById("myAMOUNTINWORDS").value=dts[4];
document.getElementById("myPARTICULARS").value=dts[5];
document.getElementById("myPAYMENTTYPE").value=dts[6]; 
document.getElementById("myCHEQUENUMBER").value=dts[7];
document.getElementById("myCURRENCYTYPE").value=dts[8];
document.getElementById("myTOTALSUM").value=dts[9];


  
}
</script> 
    
 <?php 
include_once("config.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM receiptinvoices WHERE DOCTYPE = 'Receipt' ORDER BY id DESC");
 
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['TIMESTAMP']."***".$res['ATTENTIONTO']."***".$res['AMOUNTINWORDS'] ."***".$res['PARTICULARS'] ."***".$res['PAYMENTTYPE']
	."***".$res['CHEQUENUMBER']."***".$res['CURRENCYTYPE']."***".$res['TOTALSUM'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['FISCALMONTH']." / ".$res['FISCALYEAR']."</td>";  
		echo "<td>".$res['ATTENTIONTO']."</td>"; 
		echo "<td>".$res['TOTALSUM']."</td>";  
		 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="Click to view receipt" onclick="configcode(this.id)"> 
		<span class=" glyphicon glyphicon-ok "> </span> </a> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffreceipt(this.id)" data-toggle="tooltip" title="Update" 
		<span class="glyphicon glyphicon-folder-open"> </span></a>    
		</td>';  
        echo "<td><a href=\"print_invoice.php?id=$res[id]\">Print</a> | <a href=\"delete_inv.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	} 
	?>
	</tbody>
  </table>
		     
                   </div>
				   </div>
				   </div>
		 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
			  
                <form  class="form-horizontal" action="invoice_process.php" method="POST" style="height:auto; font-weight:normal;">  
			 
             <table class="table table-striped" style="background-color:#ffffff;margin-top:-15px;">
             <thead>
             <tr>
             <th>Date</th>
			 <th>Output type</th>
             </tr>
             </thead>
             <tbody>
             <tr>
               <td style="width:50%;"><input type="date" id="CREATEDDATE" name="CREATEDDATE" value="<?php echo date('d-m-y'); ?>"  required="required"
               style="width:100%; text-align:left;background-color:#ecf0f5;">
               </td>
			   <td style="width:50%;">
			   <select   id="DOCTYPE" name="DOCTYPE" data-placement="top" required ="required"  
                       style="width:100%; text-align:left;background-color:#ecf0f5;">
					   <option>Invoice</option> 
                        </select>
               
               </td> 
             </tr>
            <tr>
           </tbody>
          </table>

		   <table class="table table-striped" style="background-color:#ffffff; margin-top:-15px;">
             <thead>
             <tr> 
			 <th>Bill to</th>
             </tr>
             </thead>
             <tbody>
             <tr>
               <td style="width:50%;"><input type="text" class="form-control"  id="ATTENTIONTO" name="ATTENTIONTO" required ="required" 
               style="width:100%; text-align:left;background-color:#ecf0f5; ">  
			   
               </td> 
             </tr>
            <tr>
           </tbody>
          </table>
                 <input type="hidden"  id="ORDERNO" name="ORDERNO"  value=" <?php echo uniqid();?>">
	 
	 <table class="table table-striped" id="mytable11" style="font-weight:normal; ">
     <thead>
     <tr>
     <th>*</th>
        <th style="width:52%;">ITEM DESCRIPTION</th>  
        <th style="width:10%;">QTY</th>    
        <th style="width:18%;">RATE</th> 
        <th style="width:20%;">AMOUNT</th>   
     </tr>
     </thead>
     <tbody> 
     </tbody>
     </table>
  
  <input type="button" onClick="addRow166('mytable11')" value="Add" />
     <input type="button" onClick="deleteRow166('mytable11')" value="(Delete)" />
     <input type="hidden" id="mytable_rows11" value="0">
      
	 
       
	<table class="table table-bordered" style="margin-top:-35px;">
    <thead>
      <tr  class=" ">
        <th style="border-bottom-color:white; width:50%; "> </th>
        <th style="border-bottom-color:white; width:50%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td> </td>
        <td>                            <div class="form-group">
                                            <label class="control-label col-sm-5"> <b>Sub total</b></label>
                                            <div class="col-sm-7">
                                            <input type="text" id="INVOICESUBTOTAL" name="INVOICESUBTOTAL" readonly="readonly" 
                                            style="text-align:right; background-color:#fff;width:100%;"/>
                                            </div>
                                            </div>
                                        
                                        <div class="form-group">  
                                          <label class="control-label col-sm-5"><b>Tax </b></label> 
                                          <div class="col-sm-7">
                                          <input type="text"  id="INVTAX" name="INVTAX" value="0"  
                                          style="text-align:right;background-color:#fff;width:100%;" />
                                          </div>
                                          </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-5"><b>Grand total</b></label>
                                            <div class="col-sm-7">
                                            <input type="text" id="INVGRANDTOTAL" name="INVGRANDTOTAL"   readonly="readonly" 
                                            style="text-align:right; background-color:#fff; width:100%;"/>
                                        </div>
                                        </div> </td> 
      </tr>
    </tbody>
  </table>    
  
  <table class="table table-bordered" style="margin-top:-25px;">
    <thead>
      <tr  class=" "> 
        <th style="border-bottom-color:white; width:100%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td> 
		                                    <div class="form-group">
                                            <label class="control-label col-sm-5"> <b>Account name</b></label>
                                            <div class="col-sm-7">
                                            <select id=" ACCOUNTNAME  " name=" ACCOUNTNAME" required="required"
                                            style="text-align:left; background-color:#fff;width:100%;"/> 
                                            <?php   echo $stddas; ?> 
                                            </select>
                                            </div>
                                            </div>
											 
											<div class="form-group">
                                            <label class="control-label col-sm-5"> <b>Bank name</b></label>
                                            <div class="col-sm-7">
                                            <select id=" CLIENTBANKNAME  " name=" CLIENTBANKNAME" required="required"
                                            style="text-align:left; background-color:#fff;width:100%;"/> 
                                            <?php   echo $stdddf; ?> 
                                            </select>
                                            </div>
                                            </div>
											
											 
											<div class="form-group">
                                            <label class="control-label col-sm-5"> <b>Account number</b></label>
                                            <div class="col-sm-7">
                                            <select id=" ACCOUNTNUMBER  " name=" ACCOUNTNUMBER" required="required"
                                            style="text-align:left; background-color:#fff;width:100%;"/> 
                                            <?php   echo $stddxx; ?> 
                                            </select>
                                            </div>
                                            </div>
											 
                                  
                                          <div class="form-group">  
                                          <label class="control-label col-sm-5"><b>Swift code </b></label> 
                                          <div class="col-sm-7">
                                          <select  name="SWIFTCODE"  id="SWIFTCODE" required="required" 
                                          style="text-align:left;background-color:#fff;width:100%;" />
										  <?php   echo $stddswft; ?> 
										  </select>
                                          </div>
                                          </div>
                                        
                                          <div class="form-group">  
                                          <label class="control-label col-sm-5"><b>Branch</b></label> 
                                          <div class="col-sm-7">
                                          <select  name="BRANCH"  id="BRANCH" required="required" 
                                          style="text-align:left;background-color:#fff;width:100%;" />
										  <?php   echo $stddbranch; ?> 
										  </select>
                                          </div>
                                          </div>
										  
										  </td> 
      </tr>
    </tbody>
  </table>   
        

	    <input type="hidden" name="CREATEDBY" id="CREATEDBY" value="<?php echo $nameofuser; ?>" >                
        <input type="hidden" name="USERTITLE" id="USERTITLE" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="USERDEPT" id="USERDEPT" value="<?php echo $dept; ?>" > 
        <input type="hidden" name="USERPFNO" id="USERPFNO" value="<?php echo $pf; ?>" >   
        <input type="hidden" name="DOCDATE" id="DOCDATE" value="<?php echo date('d-m-y'); ?>" >    
        <center> <input type="image" name="submit" id="button" src="../imgg/save5.jpg" width="60" height="60" style="margin-top:-16px;" /> </center>
        </form>
		
              </div> 
            </div> 
        </div> 
	 
                
       
 
 
         <div class="progress">
           <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
            <b> Invoice(s) <b>local</b> storage</b> <span class="sr-only">35% Complete (success)</span></div>
           <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
           </div>
		   <br>
  
        <table id="example1" class="table table-striped table-bordered" style="background-color:#fff;">
        <thead>
        <tr>  
              <th style="text-transform:uppercase;">ID</th> 
			  <th style="text-transform:uppercase;">DATE</th> 
			  <th style="text-transform:uppercase;">PERIOD</th>
              <th style="text-transform:uppercase;">BILL TO</th> 
              <th style="text-transform:uppercase;">SUB.TOTAL</th> 
              <th style="text-transform:uppercase;text-align:center;">ACTION</th> 
			  <th style="text-transform:uppercase;background-color:green;"></th>
        </tr>
        </thead>
        <tfoot>
        <tr>  
              <th style="text-transform:uppercase;">ID</th> 
			  <th style="text-transform:uppercase;">DATE</th> 
			  <th style="text-transform:uppercase;">PERIOD</th>  
              <th style="text-transform:uppercase;">BILL TO</th> 
              <th style="text-transform:uppercase;">SUB TOTAL</th> 
              <th style="text-transform:uppercase;text-align:center;">ACTION</th> 
			  <th style="text-transform:uppercase;background-color:green;"></th>  
        </tr>
        </tfoot>
        <tbody>
        
       <script> 
function configcode(myid){
var dts = myid.split("***");
document.getElementById("myORDERNO").value=dts[1]; 
document.getElementById("myID").value=dts[0];
document.getElementById("myTIMESTAMP").value=dts[2];
document.getElementById("myATTENTIONTO").value=dts[3];
document.getElementById("myAMOUNTINWORDS").value=dts[4];
document.getElementById("myPARTICULARS").value=dts[5];
document.getElementById("myPAYMENTTYPE").value=dts[6]; 
document.getElementById("myCHEQUENUMBER").value=dts[7];
document.getElementById("myCURRENCYTYPE").value=dts[8];
document.getElementById("myTOTALSUM").value=dts[9];


  
}
</script> 
    
 <?php 
include_once("config.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM receiptinvoices WHERE DOCTYPE = 'Invoice' ORDER BY id DESC");
 
 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['TIMESTAMP']."***".$res['ATTENTIONTO']."***".$res['AMOUNTINWORDS'] ."***".$res['PARTICULARS'] ."***".$res['PAYMENTTYPE']
	."***".$res['CHEQUENUMBER']."***".$res['CURRENCYTYPE']."***".$res['TOTALSUM'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['FISCALMONTH']." / ".$res['FISCALYEAR']."</td>";  
		echo "<td>".$res['ATTENTIONTO']."</td>"; 
		echo "<td>".$res['INVOICESUBTOTAL']."</td>";  
		 
		echo '<td><a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="Click to view edit and update receipt" onclick="configcode(this.id)"> 
		<span class=" glyphicon glyphicon-ok "> </span> </a> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffinvoice(this.id)" data-toggle="tooltip" title="Click to display invoice" 
		<span class="glyphicon glyphicon-folder-open"> </span></a>    
		</td>';  
        echo "<td><a href=\"print_invout.php?id=$res[id]\">Invoice</a> |<a href=\"print_receipt.php?id=$res[id]\">Receipt</a> | <a href=\"delete_inv.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	} 
	?>
	</tbody>
  </table>
		    
	  

		</div> 
		<div class="col-sm-7">
		 
		</div>
		
		<div class="col-sm-6" style="height:auto;">
		
        <form class="form-horizontal" action="invoice_update.php" method="POST" style="height:auto; font-weight:normal;"> 
             
               <div class="col-sm-12" style="text-align:left;">
               <img src="../../assets/img/logs.PNG" width="100%" height="100%">
               </div> 
      
	  
	  <div class=""  id="outputinvoice" >  </div>
                <script>

          function getstuffinvoice(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'ivoice_view.php?q='+odno,
                       success : function(data){
                                $('#outputinvoice').html(data);
								$("#outx").modal("show");
                                 }
               });
               }

          </script>
	  
          
          <center> <p style="color:#000; font-weight:bold; font-size:15px; border:0px;">RECIEPT </p> </center>
          <hr style="height:2px; background-color:red;margin-top:-10px;">
          <hr style="height:2px; background-color:green; margin-top:-19px;">
          <hr style="height:2px; background-color:yellow; margin-top:-19px;">
          
		   <input type="hidden"  id="myORDERNO" name="ORDERNO"  value=" ">    
		   
        <table class="table-responsive">
            <table class="table">
              <tr>
			    <th style="width:66.6%"> </th>
                <th style="width:14%">Receipt No.</th>
                <td style="width:19.4%"><input class="form-control" type="numeric" id="myID" name="id" style="width:100%; text-align:center;"></td>
              </tr>
              <tr>
			    <th style="width:66.6%"> </th>
                <th style="width:14%"> Date</th>
                <td style="width:19.4%"> <input class="form-control"   id="myTIMESTAMP" name="TIMESTAMP"  value=" "style="width:100%; text-align:center;"></td>
              </tr> 
            </table>
                      
                
    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:33.333333333%;"></th>
        <th style="border-bottom-color:white; width:66.666666666%;"></th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>Recieved with thanks from</B></td>
        <td>  <input type="text" name="ATTENTIONTO" id="myATTENTIONTO" value="" style="background-color:#fff; width:100%;"></td> 
      </tr>
      <tr>
        <td><b>The sum of shillings</b></td>
        <td><input type="text"  name="AMOUNTINWORDS" id="myAMOUNTINWORDS" value="" style="background-color:#fff; width:100%;">  </td> 
      </tr>
      <tr>
        <td><b>Being payment for</b></td>
        <td><textarea name="PARTICULARS"  id="myPARTICULARS"  value="" style="background-color:#fff; width:100%; height:auto;"></textarea>  </td> 
      </tr> 
    </tbody>
  </table> 
      
    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; ">Payment type</th>
        <th style="border-bottom-color:white; text-align:center;">Cheque No.</th>
        <th style="border-bottom-color:white; text-align:center;">Currency type</th>
        <th style="border-bottom-color:white; text-align:center;">Sum</th>  
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td><input type="text"  name="PAYMENTTYPE" id="myPAYMENTTYPE" value="" readonly style=" text-align:center; background-color:#fff;width:100%;"></td>
        <td><input type="text"  name="CHEQUENUMBER" id="myCHEQUENUMBER" value="" readonly  style="text-align:center; background-color:#fff; width:100%;"></td>  
        <td><input type="text"  name="CURRENCYTYPE" id="myCURRENCYTYPE"   value="" readonly style="text-align:center; background-color:#fff; width:100%;"></td>
         <td><input type="numeric"  name="TOTALSUM" id="myTOTALSUM"  value="" readonly style="text-align:center; background-color:#fff; width:100%;"></td>
      </tr>
    </tbody>
  </table> 
  
      
        
       <table class="table-responsive">
            <table class="table">
              <tr>
			    <th style="width:50%"> </th>
                <th style="width:7%">Sign</th>
                <td style="width:43%"><input type="text" name=" " id="mySIGNATURE"  style="width:100%; text-align:center;"></td>
              </tr>
              <tr>
			    <th style="width:50%"> </th>
                <th style="width:7%"> For:</th>
                <td style="width:43%"> <input type="text" name=" " value="Naguru Teenage Information and Health Center" style="width:100%;"</th>
              </tr> 
            </table>
          
    
        <input type="hidden" name="UPDATEDBY" id="UPDATEDBY"  value="<?php echo $nameofuser; ?>   <?php echo $desc; ?>   <?php echo $dept; ?>   <?php echo $pf; ?> &nbsp   <?php echo date('d-m-y'); ?>"  > 
        
     <center> <input type="image" name="submit" id="button" value="Update" src="../imgg/update3.jpg" width="60" height="60" /></center>   
      
     </form> 
	 
	  
	  <table class="table-responsive"><b>Quick panel</b>
            <table class="table">
              <tr>
			    <th style="width:33.3333333%">  <a href=<button class="fa fa-circle-o text-red" data-toggle="modal"  
				data-target="#m3"></button></i> Add new account details </a></th>
                
                <th style="width:33.3333333%"><a href=<button class="fa fa-circle-o text-green" data-toggle="modal"  
				data-target="#m2"></button></i> View / Export receipt records </a></th>
				
                <td style="width:33.3333333%"><a href=<button class="fa fa-circle-o text-blue" data-toggle="modal"  
				data-target="#m1"></button></i> Export invoice data </a></td>
              </tr> 
            </table> 
         
		  <table id="example4" class="table table-striped table-bordered" style="background-color:#fff; margin-top:-10px;"><b>Banking Account information</b>
        <thead>
        <tr>  
              <th style="text-transform:uppercase;">ID</th>  
			  <th style="text-transform:uppercase;">BANK.NAME</th>  
              <th style="text-transform:uppercase;">A/C.NUMBER</th> 
              <th style="text-transform:uppercase;">SWIFT.CODE</th> 
              <th style="text-transform:uppercase;">BRANCH</th> 
			  <th style="text-transform:uppercase;background-color:#00a65a;color:#fff;">VIEW</th> 
			  <th style="text-transform:uppercase;background-color:#dd4b39; color:#fff;text-align:center;">ACTION</th>  
        </tr>
        </thead> 
        <tfoot>
        <tr>  
              <th style="text-transform:uppercase;">ID</th>  
			  <th style="text-transform:uppercase;">BANK.NAME</th>  
              <th style="text-transform:uppercase;">A/C.NUMBER</th> 
              <th style="text-transform:uppercase;">SWIFT.CODE</th> 
              <th style="text-transform:uppercase;">BRANCH</th> 
			  <th style="text-transform:uppercase;background-color:#00a65a;color:#fff;">VIEW</th> 
			  <th style="text-transform:uppercase;background-color:#dd4b39; color:#fff; text-align:center;">ACTION</th>  
        </tr>
        </tfoot>
        <tbody>
         
 <?php 
include_once("config.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM bankdetails ORDER BY id DESC");
  
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ACCOUNTNUMBER']."***".$res['CLIENTBANKNAME'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['CLIENTBANKNAME']."</td>";  
		echo "<td>".$res['ACCOUNTNUMBER']."</td>"; 
		echo "<td>".$res['SWIFTCODE']."</td>";   
		echo "<td>".$res['BRANCH']."</td>";  
		echo '<td> <a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getstuffaccount(this.id)" data-toggle="tooltip" title="Click to display invoice" 
		<span class="glyphicon glyphicon-folder-open"> </span></a>  </td>';  
        echo "<td><a href=\"print_invout.php?id=$res[id]\">Update</a> 
		| <a href=\"delete_account.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	} 
	?>
	</tbody>
  </table>
		    
		 
		 </div>
		
		<div class="col-sm-1">
		
		
		 <div style="text-align: center;"> 
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;">New reciepts</p>  
                    <br>
                   <p class="button 5" style="font-size:30px; font-family:lcd; margin-top:-15px; text-align:center;">
                     <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM receiptinvoices WHERE TIMESTAMP >='$date' AND DOCTYPE = 'receipt' ORDER BY id")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                   </p>
                   </div> 
                    <br>
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;">New invoices</p> 
                    <br>
                   <p class="button2" style="font-size:30px; font-family:lcd; margin-top:-15px; text-align:center;">
                     <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM receiptinvoices WHERE TIMESTAMP >='$date' AND DOCTYPE = 'Invoice' ORDER BY id")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                   </p>
                   </div> 
                   
                   <br>
				   
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;"> Unpaid invoices</p>
                   <br>
                   <p class="button 5" style="font-size:30px; font-family:lcd; margin-top:-15px; text-align:center;">
                   <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM receiptinvoices WHERE  PAYMENTSTATUS ='Pending' AND DOCTYPE = 'Invoice' ORDER BY id")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                
                   </p>
                   </div>
				   
				    <br>
				   
                  <div class="panel-body" style="border-radius:11px; border:5px solid #ecf0f5;"
                  <p style="font-size:12px;"> Active A/c(s) </p>  
                   <br>
                   <p class="button2" style="font-size:30px; font-family:lcd; margin-top:-15px; text-align:center;">
                   <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, ACCOUNTNUMBER FROM bankdetails WHERE  DISCONTINUE ='Active' ORDER BY id")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
                
                   </p>
                   </div>
				   </div>
		
		
		
		
		</div>
		
      
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


                            <div class="col-lg-12">
                        <div class="modal" id="m2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Receipts </h4>
                                        </div>
                                        <div class="modal-body">

               
        <p style="text-align:left; font-weight:bold;"> Waiting for accountant's comment on key variables </p>

         </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>
						 
						  <div class="col-lg-12">
                        <div class="modal" id="m1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Invoices </h4>
                                        </div>
                                        <div class="modal-body">

               
        <p style="text-align:left; font-weight:bold;"> Waiting for accountant's comment on key variables </p>

         </form>
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>
						 
                        <div class="modal" id="m3" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal"  action="bankdetails_process.php" method="POST" style="height:auto; background-color:#000000">
            <table class="table table-bordered" >
    <thead>
      <tr  class=" "> 
        <th style="border-bottom-color:white; width:100%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td> 
		                                    <div class="form-group">
                                            <label class="control-label col-sm-3"> <b>A/c name</b></label>
                                            <div class="col-sm-9">
                                            <input type="text" id=" ACCOUNTNAME  " name=" ACCOUNTNAME" value="Naguru Teenage information and Health Centre"required="required"
                                            style="text-align:left; background-color:#fff;width:100%;"/> 
                                            </div>
                                            </div>
											 
											<div class="form-group">
                                            <label class="control-label col-sm-3"> <b>Bank name</b></label>
                                            <div class="col-sm-9">
                                            <input type="text" id=" CLIENTBANKNAME  " name=" CLIENTBANKNAME" value="Barclays Bank PLC,Uganda" required="required"
                                            style="text-align:left; background-color:#fff;width:100%;"/> 
                                            </div>
                                            </div>
 
											
											<div class="form-group">
                                            <label class="control-label col-sm-3"> <b>A/c number</b></label>
                                            <div class="col-sm-9">
                                            <input type="text" id=" ACCOUNTNUMBER  " name=" ACCOUNTNUMBER" required="required"
                                            style="text-align:left; background-color:#fff;width:100%;"/> 
                                            </div>
                                            </div>
											 
                                            <div class="form-group">
                                            <label class="control-label col-sm-3"> <b>Swift code</b></label>
                                            <div class="col-sm-9">
                                            <input type="text" name="SWIFTCODE"  id="SWIFTCODE"
                                            style="text-align:left; background-color:#fff;width:100%;"/> 
                                            </div>
                                            </div>
											   
                                        <div class="form-group">
                                            <label class="control-label col-sm-3"> <b>Branch</b></label>
                                            <div class="col-sm-9">
                                            <input type="text" name="BRANCH"  id="BRANCH" required="required" 
                                            style="text-align:left; background-color:#fff;width:100%;"/> 
                                            </div>
                                            </div>  
										  </td> 
      </tr>
    </tbody>
  </table>   
               
           <div class="col-sm-12">
           <div class="panel-body">
		    <center> <input type="submit" name="button" id="button" value="Save" /></center>
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-default" data-dismiss="modal">Close</button> 
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

                    </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
 
</div>
<!-- ./wrapper -->
<!-- Morris.js charts -->
<script src="../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="../plugins/daterangepicker/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
 <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

         <!-- PAGE LEVEL SCRIPTS -->

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
		     sum    =sum+ parseFloat(table.rows[x].cells[4].childNodes[0].value);
		   }
		   document.getElementById("INVOICESUBTOTAL").value = ''+sum;
	 
	 }
	 
	 
  function addRow166(tableId){
     var  s1a = '<input type="text" name="mdes[]" id="mdes'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+               
	 'background-color:#fff; width:100%;">';
	 
	 var  s2b = '<input type="numeric" name="mqty[]" id="mqty'+rowCount+'"  required="required" '+ 'style= "margin-left:-5px'+               
	 'background-color:#fff; width:100%;">';
  
     var  s4c =  '<input type="numeric" name="mrte[]" id="mrte'+rowCount+'"  required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';
				
	 var  s5d =  '<input type="numeric" name="amot[]" id="amot'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;" >';			


		    var table    = document.getElementById(tableId);
            var rowCount = table.rows.length;
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1a+' </td>'+
	                              '<td>'+s2b+' </td>'+
				                  '<td>'+s4c+' </td>'+
								  '<td>'+s5d+' </td>';
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
		  table.rows[x].cells[1].childNodes[0].id="mdes_"+x;
          table.rows[x].cells[2].childNodes[0].id="mqty_"+x;
		  table.rows[x].cells[3].childNodes[0].id="mrte_"+x;
		  table.rows[x].cells[4].childNodes[0].id="amot_"+x;
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcmoney(tableId);
}

  </script>

  <!-- /.END IMPREST REQUEST SCRIPT -->
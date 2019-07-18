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
  url: "budget/budgetdetailsearch.php",
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
     $('#exone').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'file '
		},
		{extend :'pdf',
		 title:'file '
		},
		{extend :'print',
		 title:'file '
		}
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#extwo').DataTable( {
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
  require('connect/config.php');
  ?>
  
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
           <a href="sys_dashboard.php" class="navbar-brand"><b>Dashboard</b></a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="petty_userdept.php" class="button5" > User(s)<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="pettycash_sup.php" class="button5" > Confirmation<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="pettycash_fin.php" class="button5" > Approval<span class="sr-only">(current)</span></a></li>
           
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
              <span class="glyphicon glyphicon-user" style="font-size:15px;">Welcome:</span>     
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
  
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                 <img src="assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
              
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
  <div class="content-wrapper" style="background-color:#fefafa;">
    <div class="container" style="background-color:#fefafa;">
      <!-- Content Header (Page header) -->
          
        <br>
            <div class="col-sm-6"  style="background-color:#ffffff;border-radius: 11px;">  
 <img src="../assets/img/logsbig.PNG" width="100%" height="100%">
 
          <center> <legend style="color:#000; font-weight:bold; font-size:12px;"> IMPREST REQUEST VOUCHER </legend> </center>
 
          <form class="form-horizontal" action="imprest_process.php" method="POST" style="height:auto; font-weight:normal;">
           
       <table class="table table-bordered" >
      <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"> </th>
        <th style="border-bottom-color:white; width:50%; "> </th>  
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td>  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Date</label>
                    <div class="col-sm-8">
                        <input type="text" id="REQUESTDATE" name="REQUESTDATE"  value="<?php echo date('d-m-y'); ?>"  class="form-control"
                        style=" font-size: 11px; text-align:left; width:100%;"/>  
                    </div>
                </div>
                <!-- /.form-group --></td>
                
               <td> <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4" style="text-align:left;"> PF No.</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="IDNUMBER" name="IDNUMBER" value=" <?php echo $pf; ?> " data-placement="top" 
                        readonly ="" style=" font-size: 11px; text-align:left; width:100%; background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group --> 
        </td> 
       </tr>
    </tbody>
  </table>  
        
         
         <table class="table table-bordered" style="margin-top: -19px;">
      <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"> </th>
        <th style="border-bottom-color:white; width:50%; "> </th>  
      </tr>
    </thead>
    <tbody>
      <tr>  
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Applicant</label>
                    <div class="col-sm-8">
                        <input type="text" id="APPLICANTNAME" name="APPLICANTNAME" class="form-control" value="<?php echo $nameofuser; ?> " 
                        readonly ="" style=" font-size: 11px; text-align:left; width:100%; background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group -->
                </td>
                <td> <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4" style="text-align:left;"> Department</label>
                    <div class="col-sm-8">
                        <select class="form-control"  name="AP_DEPARTRMENT" data-placement="top" style="font-size: 11px; text-align:left;"/>
                                <option value="<?php echo $dept; ?>"> <?php echo $dept; ?></option>
                <option value="ADVOCACY AND RESEARCH">ADVOCACY AND RESEARCH</option>
                <option value="FINANCE AND ADMINISTRATION">FINANCE AND ADMINISTRATION</option>
                <option value="SERVICE DELIVERY">SERVICE DELIVERY</option>
                </select>
                    </div>
                </div>
                <!-- /.form-group --> 
        </td>
        </tr>
    </tbody>
  </table>  
                   
  <table class="table table-striped" id="mytable11" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
   <th>DESCRIPTION FOR WHICH CASH IS REQUIRED</th>
   <th>CURRENCY</th>
   <th>AMOUNT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  
     <input type="button" onClick="addRow166('mytable11')" value="Add" />
     <input type="button" onClick="deleteRow166('mytable11')" value="(Delete)" />
     <input type="hidden" id="mytable_rows11" value="0">
     
         
    <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:50%;"> </th> 
        <th style="border-bottom-color:white; width:50%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td>
        <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" > Order no.</label>
                    <div class="col-sm-8">
                        <input type="text" name="ORDERNO" value=" <?php echo uniqid();?>" class="form-control"  readonly =""
                        style=" font-size: 11px; font-weight:bold; text-align:left; background-color:#fff;"/>
                    </div>
                </div>
                <!-- /.form-group -->  </td> 
        <td> <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Total sum</label>
                    <div class="col-sm-8">
                        <input type="text" id="TOTALSUM" name="TOTALSUM" class="form-control" 
                        style=" font-size: 17px; font-weight:bold; text-align:center;"/>
                    </div>
                </div>
                <!-- /.form-group -->

               </td>
      </tr>
    </tbody>
  </table>       
      
             
    <table class="table table-bordered" style="margin-top: -19px;">
    <thead>
      <tr  class="  "> 
        <th style="border-bottom-color:white; width:20%;"> </th> 
		 <th style="border-bottom-color:white; width:80%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td> Amount in words</td> 
         <td>    <input type="text" id="AMOUNTINWORDS" name="AMOUNTINWORDS" class="form-control" style="font-size: 11px;"/>  </td>  
                </tr>
    </tbody>
  </table>       
      
          
            <p style="font-weight:bold; text-align:left; text-transform:uppercase;"> For official use</p>
            
                
    <table class="table table-bordered" style="margin-top: -19px;">
    <thead>
      <tr  class="  "> 
        <th style="border-bottom-color:white; width:50%;"> </th> 
        <th style="border-bottom-color:white; width:50%;"> </th>
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td>
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Budget line</label>
                    <div class="col-sm-8">
                        <input type="text" id="BUDGETLINE" name="BUDGETLINE" readonly = "readonly" 
        style="width:100%; text-align:left;font-weight:bold; background-color:#f0f0f0;">
                    </div>
                 </div>
               <!-- /.form-group -->  </td>
               
                <td>  <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Code</label>
                    <div class="col-sm-8">
                        <input type="text" id="CODE" name="CODE" readonly = "readonly" 
        style="width:100%; text-align:left;font-weight:bold; background-color:#f0f0f0;">
                    </div>
                 </div>
                 </td>
                </tr>
    </tbody>
  </table>       
        
          
    <table class="table table-bordered" style="margin-top: -19px;">
    <thead>
      <tr  class="  "> 
        <th style="border-bottom-color:white; width:50%;"> </th>
        <th style="border-bottom-color:white; width:50%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td>
          <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Authorised.by</label>
                    <div class="col-sm-8">
                        <input type="text" id="IMPAUTHORISEDBY" name="IMPAUTHORISEDBY" placeholder"Signature"  class="form-control" readonly
                        style="font-size: 11px; border:0px;background-color:#f0f0f0;"/> 
                    </div>
                </div>
                <!-- /.form-group -->
 
                   <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Date</label>
                    <div class="col-sm-8"> 
                        <input type="text"  class="form-control" id="IMPAUTHORISEDDATE" name="IMPAUTHORISEDDATE" data-placement="top" readonly 
                        style=" font-size: 11px; border:0px;background-color:#f0f0f0; width:100%;"/>
                    </div>
                </div>
                <!-- /.form-group -->   </td> 
                
                <td>
                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4" style="text-align:left;"> Approved by</label>
                    <div class="col-sm-8">
                        <input type="text" id="IMPAPPROVEDBY" name="IMPAPPROVEDBY" placeholder"Signature"  class="form-control" readonly
                        style=" font-size: 11px; border:0px;background-color:#f0f0f0;"/> 
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4" style="text-align:left;"> Date</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  id="IMPAPPROVEDDATE" name="IMPAPPROVEDDATE" data-placement="top" readonly 
                        style=" font-size: 11px; text-align:center; border:0px;background-color:#f0f0f0;"/>
                </div>
                <!-- /.form-group -->  </td>  
                </tr>
    </tbody>
  </table>   
             
      <table class="table table-bordered ">
      <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:30%;">  </th>
        <th style="border-bottom-color:white;font-weight:bold; width:40%; text-align:center;">Send to</th> 
        <th style="border-bottom-color:white;font-weight:bold; width:30%;"></th>  
      </tr>
    </thead>   
    <tbody>
      <tr> 
        <td></td>
        <td ><select name="SENDTO" id="SENDTO"  required="required" style="width:100%; text-align:center;">
                  ttt     = "<?php   echo $stss; ?>"; 
                  </select> </td> 
        <td></td>          
    </tbody>
    </table> 
    
    
        <div class="col-sm-12">
        <center> <input type="submit" name="button" id="button" value="Save" /></center>
        <br> 
          </form>
         </div>
    
       
      </div>  
      
       <div class="col-sm-6" />
       <br>
      
         <table class="table table-bordered" style="margin-top: -10px;border: 0px;background-color:#fefafa;">
    <thead> 
      <tr class=" ">
       <th  style="height:50px; border:2px; border-radius:0px;background-color:#fefafa;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Rejected orders &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5;background-color:#fefafa; border-radius:11px;">
             <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='REJECTED' AND IDNUMBER = '$pf' GROUP BY ORDERNO ")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
       </th>
       
       <th  style="height:50px; border:2px; background-color:#fefafa;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Due for authorising &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:blue; text-align:center;border:4px solid #ecf0f5; border-radius:11px;background-color:#fefafa;">
       
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='PENDING' AND IDNUMBER = '$pf'  GROUP BY ORDERNO")) {        
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
       </th> 
        
       <th  style="height:50px; border:2px; background-color:#fefafa;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;">  Due for approval &nbsp </p>
       <p style="font-size:30px; font-weight:bold; color:black; text-align:center; border:2px solid #ecf0f5;background-color:#fefafa; border-radius:11px;">
       <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND IDNUMBER = '$pf' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  </p>
        </th>
        
       <th  style="height:50px; border:2px; background-color:#fefafa;">
       <p style="font-size:12px;text-align:center; font-weight:normal;background-color:#f9f9f9;"> Cash out &nbsp / &nbsp line items</p>
       <p style="font-size:30px; font-weight:bold; color:green; text-align:center;border:4px solid #ecf0f5;  background-color:#fefafa; border-radius:11px;">
         <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PENDING' GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
       
       / 
       
  <?php
$link = mysqli_connect("localhost", "root", "toor2", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT id, ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED' 
AND IDNUMBER = '$pf' AND APPROACTION ='APPROVED' AND CASHOUT ='PAID' GROUP BY ORDERNO")) {        
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
        </th>
      </tr>
    </thead>   
  </table> 
        Rejected orders by item description
                      
                    
                      <table id="exone" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
        <th style="width:10px;">ID.</th>
        <th style="width:25px;">SERIAL*NO.</th> 
                     <th style="width:45px;">CREATED*DATE</th>
					 <th style="width:10px;">AMOUNT</th>    
                     <th style="width:10px;">VIEW</th> 
                     <th style="width:10px;">DEL</th>    
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='REJECTED' AND IDNUMBER = '$pf' ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";
		echo "<td>".$res['id']."</td>";   
		echo "<td>".$res['ORDERNO']."</td>";  
		echo "<td>".$res['TIMESTAMP']."</td>"; 
		echo "<td>".$res['IMP_DEBIT']."</td>";  
		echo '<td> <a id="1__'.$dts.'" href="javascript:void(0)"  onclick="getstuff(this.id)" data-toggle="tooltip" title="open" 
		<span class="glyphicon glyphicon-ok"> </span></a>  </td>'; 
	    echo "<td><a href=\"config/inline/pettyviewhomedel.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";	  			
	}
    ?>
	</tbody>
  </table>
                     
                    
                        Petty cash payment history by invoice No.
                      
                    <table id="extwo" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr>  
       
                     <th style="width:45px;">CREATED.DATE</th>
                      <th style="width:25px;">INVOICE.NO</th>  
                     <th style="width:10px;">STATUS</th> 
                     <th style="width:10px;">PMT.DATE</th>       
                     <th style="width:10px; color:red; background-color:#ecf0f5;">ACTION</th> 
                      
        </tr>
        </tfoot>
        <tbody>
    
 <?php 
include_once("config/inline/dbcon.php");  
 
$result = mysqli_query($mysqli, "SELECT * FROM imprest WHERE  AUTHACTION ='AUTHORISED' AND APPROACTION ='APPROVED' AND IDNUMBER = '$pf' AND CASHOUT ='PAID' 
                                          GROUP BY ORDERNO ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['ORDERNO']."***".$res['APPLICANTNAME']."***".$res['IMP_DEBIT']."***".$res['TIMESTAMP']
	."***".$res['AP_DEPARTRMENT'];
		echo "<tr>";    
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['ORDERNO']."</td>";    
		echo "<td>".$res['CASHOUT']."</td>"; 
		echo "<td>".$res['RECIEVEDDATE']."</td>";    
		echo "<td><a href=\"config/inline/petty_payments_history.php?ORDERNO=$res[ORDERNO]\">Open</a></td>";		 
	}
    ?>
	</tbody>
  </table> 
                     
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
  <h2 style="margin-top: -7px;"> <b style="font-family:lcd;"> <?php   echo"Balance in cash box  : ".$bal; ?> </b></h2>
          <br><br><br> <br> 
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
   
</div>
<!-- ./wrapper -->
<!-- Morris.js charts -->
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="plugins/daterangepicker/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
 <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
 
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
                'style= " margin-left:0px; width:100%; background-color:#fff; text-align:center;" >'+
					                    '<option>UGX</option>'+
             		                    '<option>USD</option>'+
                                        '</select>';

	 var  s3c =  '<input type="numeric" name="impdebit[]" id="impdebit_'+rowCount+'" onkeyup="calcmoney(\'mytable11\')" value="0" required="required" '+
                'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';


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
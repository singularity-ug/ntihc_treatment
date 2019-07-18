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
  <title>proc</title>
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

  $("#desc"+num).val(data[2]);
  $("#uom").val(data[2]); 


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "storesearch.php",
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
	  "iDisplayLength": 5,
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
          <a href="../procurement.php" class="navbar-brand"><b>Procurement </b> </a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
           
          </ul>

        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
             
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
  <div class="row" style="background-color:#fff;">
       <!-- Content Header (Page header) -->
    <br>
    <div class="col-sm-3" style="height:auto; background-color:;">
 
  <div class="row text-center pad-top">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                      <div class="div-square">
                           <a href=hr_mgt/<button class="" data-toggle="modal"  data-target="#procuremento"></button> 
                    <i class="fa fa-rocket fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> New requisition </h4>
                      </a>
                      </div>
                       
                      
                  </div> 
                  
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                      <div class="div-square">
                           <a href="budget_desk.php"> 
                    <i class="fa fa-circle-o-notch fa-5x" style="color:#f56954;"></i>
                      <h4 style="font-size:14px;"> My confirmations </h4>
                      </a>
                      </div>
                       
                      
                  </div> 
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                      <div class="div-square">
                           <a href="proc_review.php"> 
                    <i class="fa fa-wechat fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> My.reviews (Orders)</h4>
                      </a>
                      </div>
                       
                      
                  </div>  
                 
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                      <div class="div-square">
                          <a href="proc_approval.php">
  <i class="fa fa-comments-o fa-5x" style="color:#00a65a;"></i>
                      <h4 style="font-size:14px;"> My approvals </h4>
                      </a>
                      </div>
                      
                       </div>  </div>   
    
               <div class="box-group" id="accordion">
                 <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                 <div class="panel box box-primary">
                   <div class="box-header with-border">
                     <h4 class="box-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                     
                       <span class="glyphicon glyphicon-user" style="font-size:16px;"><b>Welcome:</b></span>
         <B style="font-size:10px;"> &nbsp <?php echo $nameofuser; ?>  </B>
              </a> 
                     
                       </a>
                     </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in" style="background-color: #fff;">

                       <div class="progress">
                   	  <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                       <B> &nbsp;My procurement rejected orders 
					  &nbsp;&nbsp;&nbsp;&nbsp  
					   <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='REJECTED' AND RFPFILENUMBER ='$pf'
                                   GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
					   </b><span class="sr-only">35% Complete (success)</span></div>
                       <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   	  </div>

                       <br>
                  <table id="example1" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>DATE</th>
                     <th>S/NO.</th>
					 <th>EST COST</th>
                               <th>ACTION</th>
							   <th> </th>
                  </tr>
                  </tfoot>
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='REJECTED' AND RFPFILENUMBER ='$pf'
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['REQUISITIONID']."***".$res['PROGRAMME']."***".$res['VOTE_HEADNO']."***".$res['SUBPROGRAMME']."***".$res['ITEM']
             ."***".$res['BALANCEREMAINING'];
              echo "<tr>";
              echo "<td>".$res['TIMESTAMP']."</td>"; 
               echo "<td>".$res['REQUISITIONID']."</td>";
			    echo "<td>".$res['SUBTOTAL']."</td>";
              echo '<td><a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="Click to confirm request"   onclick="postpetty(this.id)">
              <span class="glyphicon glyphicon-ok"> </span> </a>
              &nbsp; 
              <a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getprocform(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-envelope"> </span></a>
			  &nbsp;  
			   <a id="3__'.$dts.'" href="javascript:void(0)"  onclick="getrejectionthree(this.id)" data-toggle="tooltip" title="View comment" 
			  <span class="glyphicon glyphicon-remove"> </span></a> 
               </td>';
			  echo "<td> <a href=\"delete_request.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	            } 
               ?>
              </tbody>
              </table>
			  
			   <div class=""  id="getrejectionthree" >  </div>
                <script>

          function getrejectionthree(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'getrejectionthree.php?q='+odno,
                       success : function(data){
                                $('#getrejectionthree').html(data);
								$("#outx").modal("show");
                                 }
               });
               }

          </script>

          </div>
		  </div>
		  <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                   My outbox <span class="sr-only">35% Complete (success)</span></div>
                   <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   </div> 
                   <br>
				   
				   <table id="example6" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>DATE</th>
                     <th>S/NO.</th>
					 <th>EST.COST</th>
                               <th>ACTION</th>
                  </tr>
                  </tfoot>
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND RFPFILENUMBER ='$pf'
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['REQUISITIONID']."***".$res['PROGRAMME']."***".$res['VOTE_HEADNO']."***".$res['SUBPROGRAMME']."***".$res['ITEM']
             ."***".$res['BALANCEREMAINING'];
              echo "<tr>";
              echo "<td>".$res['TIMESTAMP']."</td>"; 
               echo "<td>".$res['REQUISITIONID']."</td>";
			    echo "<td>".$res['SUBTOTAL']."</td>";
              echo '<td><a id="'.$dts.'" href="javascript:void(0);" data-toggle="tooltip" title="Click to confirm request"   onclick="postpetty(this.id)">
              <span class="glyphicon glyphicon-ok"> </span> </a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getprocform(this.id)" data-toggle="tooltip" title="Click to view requisition"
              <span class="glyphicon glyphicon-envelope"> </span></a>
              </td>';
             }
              ?>
             </tbody>
             </table>

		  </div>
		</div>

		<div class="col-sm-9" style="height:auto;"> 

      <div class=""  id="proc_requisition" >  </div>
               <script> 
              function getprocform(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'proc_requisitionupd.php?q='+odno,
                            success : function(data){
                                     $('#proc_requisition').html(data);
     								$("#procreqnn").modal("show");
                                      }
                    });
                    } 
               </script> 
 
              <div class="box-group" id="accordion"> 
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOnev">
                      <b>My confirmed procurement requisitions</b> 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOnev" class="panel-collapse collapse in">
                    <div class="box-body" style="background-color: #fff;"> 
           
                    <table id="example5" class="table table-table table-tabled" style="font-weight:normal;">
        <thead>
        <tr> 
                     <th>ORDER.NO.</th> 
                     <th>CREATED</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th> 
                     <th>SUBJECT.OF.PROCUREMENT </th>  
                     <th>EST.COST </th>    
                     <th>ACTION</th> 
					 <th>PDU.STATUS</th> 
                       
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>ORDER NO.</th> 
                     <th>CREATED DATE</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th> 
                     <th>SUBJECT OF PROCUREMENT </th>  
                     <th>EST COST </th>    
                     <th>ACTION</th> 
					 <th>PDU.STATUS</th> 
                      
                      
        </tr>
        </tfoot>
        <tbody> 
          <?php 
include_once("../config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND RFPFILENUMBER ='$pf'
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsx = $res['REQUISITIONID']."***".$res['CATEGORY']."***".$res['PROCUREMENTSTATUS']."***".$res['ITEM'];
		echo "<tr>"; 
		echo "<td>".$res['JOBNUMBER']."</td>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['INITIATORDEPT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>"; 
		echo "<td>".$res['SUBTOTAL']."</td>";      
		echo "<td><a href=\"view_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">View</a>  
		| <a href=\"print_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">Print</a>  </td>";
		echo "<td>".$res['ORDERSTATUS']."</td>"; 
	}
	?>
	</tbody>
  </table> 
                      
                     
                  </div>  
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo11">
                        <b>Procurement tracker by order number </b>
					     
                      </a>
                    </h4>
                  </div> 
                  <div id="collapseTwo11" class="panel-collapse collapse">
                    <div class="box-body" style="background-color:#ecf0f5;">
                      .......
                    </div>
                  </div>
				  
				  <b> Quick alerts</b>&nbsp
				   <a class="quick-btn" href="#" style=" border-radius:5px; background-color:#fff;">
                                <i class="icon-check icon-2x"></i>
                                <span> Due for confirmation </span>
                                <span class="label label-danger">
								 <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='PENDING' 
AND SENDTO ='$rm' GROUP BY REQUISITIONID")) {        
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
                          &nbsp
                            <a class="quick-btn" href="#" style=" border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span> Due for BD action</span>
                                <span class="label label-success">
								 <?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND FORWARDTO ='$rm' AND CONFSTATUS ='WAITING'  GROUP BY REQUISITIONID")) {        
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
                            </a>&nbsp
                            <a class="quick-btn" href="#" style="border-radius:5px;background-color:#fff;"> 
                                <i class="icon-check icon-2x"></i>
                                <span>Due for approval </span>
                                <span class="label label-warning">
								<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFEXTENSION ='$rm' AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'WAITING' GROUP BY REQUISITIONID")) {        
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
                            </a>&nbsp
							
							<a class="quick-btn" href="#" style="border-radius:5px;background-color:#fff;"> 
                                <i class="icon-check icon-2x"></i>
                                <span> FA:due for review</span>
                                <span class="label label-success">
								<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFEXTENSION ='$rm' AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'WAITING' GROUP BY REQUISITIONID")) {        
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
                            </a>&nbsp
							
                             <a class="quick-btn" href="#" style="border-radius:5px;">
                                <i class="icon-check icon-2x"></i>
                                <span> PDU: recieved orders </span>
                                <span class="label label-danger">
								<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFEXTENSION ='$rm' AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'WAITING' GROUP BY REQUISITIONID")) {        
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
                            </a>&nbsp
 
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
                                <i class="icon-check icon-2x"></i>
                                <span>  Pending work orders </span>
                                <span class="label label-warning">
								<?php
$link = mysqli_connect("localhost", "root", "toor2", "procurement");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT REQUISITIONID FROM procreqn WHERE  CORACTION ='AUTHORISED' 
AND CONFSTATUS ='CONFIRMED' AND AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'STARTED'
AND ACTION = 'PENDING' GROUP BY REQUISITIONID")) {        
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
                           <p></p>
                </div>
              </div>
			  
			  
			   <p style="text-align:left; font-size:15px; background-color:#fff; color:#000;"><b>My e-procurement requisitions follow up</b></p>
		  
    <table id="example6" class="table table-table table-tabled" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>JOB NO.</th>
                <th>CREATED</th> 
                <th>H.O.D</th>
                <th>DATE</th>
                <th>B.DESK</th>
                <th>DATE</th>
                <th>AO.APPROVALS</th>
                <th>FA.DATE</th>
                <th>P.D.U</th>
				<th>ALLOCATED.TO</th>
                <th>JOB.STATUS</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>JOB NO.</th>
                <th>CREATED</th> 
                <th>H.O.D</th>
                <th>DATE</th>
                <th>B.DESK</th>
                <th>DATE</th>
                <th>AO.APPROVALS</th>
                <th>FA.DATE</th>
                <th>P.D.U</th>
				<th>OFFICER</th>
                <th>JOB.STATUS</th>
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
$sql = "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND SENDTO ='$rm'  AND ACTION = 'PENDING'
                                               GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["JOBNUMBER"].'</td>'.
                 '<td>'.$row["TIMESTAMP"].'</td>'. 
				 getIndicator($row["CORACTION"]). 
                 getIndicator($row["CORDATE"]). 
                 getIndicator($row["CONFSTATUS"]).
			     getIndicator($row["CONFDATE"]).
                 getIndicator($row["AOACTION"]).
				 getIndicator($row["CONFDATE"]).
				 getIndicator($row["PROCUREMENTSTATUS"]).
                 getIndicator($row["OFFICERALLOCATED"]).
                 '<td>'.$row["ACTION"].'</td></tr>';

 }

?>

	  </tbody>
  </table> 

			  
			  
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

					
            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="procuremento" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog10">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

<div class="col-sm-12" style="text-align:left;">
<img src="../../assets/img/logsbig.PNG" width="100%" height="100%">
</div> 

        <center> <p style="color:#000; font-weight:bold;font-size:13px;"> <b>REQUEST FOR APPROVAL OF PROCUREMENT</b> </p> </center> 

         <form class="form-horizontal" action="../procreqn_processor.php" method="POST">
 
         <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:center;">PART 1: REQUEST BY USER DEPARTMENT FOR APPROVAL OF PROCUREMENT METHOD</th>
               </tr>
            <tr>
            </tbody>
            </table>
            
   <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Procurement Reference Number </th>
               </tr>
            <tr>
            </tbody>
            </table>
             
        <table class="table table-bordered" style="font-weight:normal;">
    <thead>
      <tr  class="  "> 
              <th style="border-bottom-color:white; width:20%;">Code of procuring and Disposing Entity</th>
              <th style="border-bottom-color:white; width:30;">Supplies / Works / Non-consultancy services</th>
              <th style="border-bottom-color:white; width:20%;">Financial year</th>
              <th style="border-bottom-color:white; width:30;">Sequence number</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><input type="text" name="PDECODE" id="PDECODE" value="NTIHC"  readonly="readonly" style="width:100%; text-align:center;"></td>
              <input type="hidden" name="DATECREATED" id="DATECREATED" />
              <td><select name="CATEGORY"id="CATEGORY" style="width:100%; text-align:left;">
                                <option value="SPLS">SUPPLIES</option>
                                <option value="WRKS">WORKS</option> 
                                <option value="SRVCS">NON CONSULTANCY SERVICES</option>
                                </select></td>

              <td><input type="text" name="FINANCIALYEAR" id="FINANCIALYEAR" readonly="readonly" 
              style="width:100%; text-align:center; background-color:#f0f0f0;"></td>

              <td><input type="text" name="SEQUENCENUMBER" id="SEQUENCENUMBER" readonly="readonly" 
              style="width:100%; text-align:center;background-color:#f0f0f0;"></td>
            </tr>
            <tr>
            </tbody>
            </table> 
      
           <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Particulars of Procurement</th>
               </tr>
            <tr>
            </tbody>
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
        <td><b>Subject of procurement</b></td>
        <td><textarea name="SUBJECTOFPROCUREMENT" required="required" style="background-color:#fff; width:100%; height:18px;"></textarea>  </td> 
      </tr> 
    </tbody>
  </table> 
  
    <table class="table table-bordered ">
    <thead>
      <tr  class="" style="font-weight:normal;">  
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Procurement plan reference </th>
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Location for delivery</th>
        <th style="border-bottom-color:white;font-weight:normal; width:33.3333333333%;">Date required</th> 
         
               
      </tr>
    </thead>   
    <tbody>
      <tr>
        <th style="width:25%;"><input type="text"  name="PROCUREMENTPLANREF" id="PROCUREMENTPLANREF" readonly="readonly"  
        style="width:100%;font-weight:bold; background-color:#f0f0f0;"></th>
        
        <th style="width:25%;"><textarea   name="LOCATIONFORDELIVERY" id="LOCATIONFORDELIVERY"  required="required"
        style="width:100%; text-align:left; height:18px; "></textarea></th>
        
        <td style="width:30%;"><input type="date" name="DATEREQUIRED" id="DATEREQUIRED"  required="required"
        style="width:100%; text-align:center; height:18px; "></td>  
    </tr> 
    </tbody>
    </table> 
   
   <table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:left;">Details relating to the Procurement</th>
               </tr>
            <tr>
            </tbody>
            </table>

        
       <table class="table table-bordered" id="mytable100">
    <thead>
      <tr  class="  ">  
      <th>*</th>
   <th style="width:50%;">DESCRIPTION  (Refer to specifications, terms of reference or scope of work)</th>
   <th style="width:18%;">UNIT OF MEASURE</th>
   <th style="width:10%; text-align:center;">QUANTITY</th>  
   <th style="width:10%; text-align:center;">RATE</th>
   <th style="width:12%; text-align:center;">AMOUNT</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
        <input type="button" onClick="addRow16('mytable100')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable100')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">
        
     <br>
          <table class="table table-bordered" style="margin-top:-30px;">
    <thead>
      <tr  class="  "> 
         <th style="border-bottom-color:white;width:66.66666666%; "> </th>
        <th style="border-bottom-color:white; width:33.33333333%;"> </th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td> </td>
        <td> <div class="form-group">
                                            <label class="control-label col-sm-4"><b>TOTAL COST (UGX)</b></label>
                                            <div class="col-sm-8">
                                                <input type="numeric" name="SUBTOTAL" id="SUBTOTAL"  style="width:100%; text-align:right;">
                                        </div>
                                        </div> 
                                        </td> 
										<input type="hidden" name="TAX" id="TAX" >
										<input type="hidden" name="TOTALCOST" id="TOTALCOST" >
      </tr>
    </tbody>
  </table>  
           <div class="col-sm-6" >
           <div id="res"></div> 
           </div>  
            
         <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:33.33333333%; ">(1) Request for procurement </th>
        <th style="border-bottom-color:white; width:33.33333333%;"> </th> 
        <th style="border-bottom-color:white; width:33.33333333%;"> (2) Confirmation of request</th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td>  
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="RFPUSERNAME" id="RFPUSERNAME" value="<?php echo $nameofuser; ?> "  readonly >
                </div>
                </div> 

 
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="RFPSIGNATURE" name="RFPSIGNATURE" readonly/>
                </div>
                </div> 
                  <input type="hidden" id="INITIATORDEPT" name="INITIATORDEPT"  readonly value="<?php echo $dept; ?>"/>
              
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="RFPTITLE" name="RFPTITLE" readonly value="<?php echo $desc; ?>"/>
                </div>
                </div> 
                 <input type="hidden" class="form-control" id="RFPFILENUMBER" name="RFPFILENUMBER" value=" <?php echo $pf; ?>"/>
                  
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="RFPDATE" name="RFPDATE" readonly value="<?php echo date('d-m-y'); ?>" />
                </div>
                </div>
                
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;"> </label>
                <div class="col-sm-8">
                <input type="hidden" class="form-control" id="RFPDEPARTMENT" name="RFPDEPARTMENT" value="<?php echo $dept; ?>"/>
                </div>
                </div>
        </td>  
        <td> </td>
        <td>    <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="CORNAME" id="CORNAME" placeholder="Head of user department" readonly="readonly">
                </div>
                </div> 
 
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="CORSIGNATURE" name="CORSIGNATURE" readonly="readonly"/>
                </div>
                </div> 
 
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="CORTITLE" name="CORTITLE" readonly="readonly"/>
                </div>
                </div> 
 
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="CORDATE" readonly="readonly" name="CORDATE"/>
                </div>
                </div>  </td> 
      </tr>
    </tbody>
  </table>     
  
  
    <table class="table table-bordered">Availability of funds to be confirmed prior to approval by Accounting Officer 
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:10%;"> Code number</th> 
        <th style="border-bottom-color:white; width:30%;"> Budget line </th>
        <th style="border-bottom-color:white; width:28%;"> Programme</th> 
        <th style="border-bottom-color:white; width:20%;"> Sub programme</th> 
        <th style="border-bottom-color:white; width:12%;"> Remaining on budget</th> 
      </tr>
    </thead>   
    <tbody>
      <tr>   
              <td><input type="text" name="VOTE_HEADNO" id="VOTE_HEADNO"  readonly="readonly"  style="width:100%; text-align:left; background-color:#f0f0f0;"></td>

              <td><input type="text" name="PROGRAMME"id="PROGRAMME" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"> </td>

              <td><input type="text" name="SUBPROGRAMME" id="SUBPROGRAMME" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"></td> 
                
              <td><input type="text" name="ITEM" id="ITEM" readonly="readonly" style="width:100%; text-align:left;background-color:#f0f0f0;"></td> 
               
              <td><input type="text" name="BALANCEREMAINING" id="BALANCEREMAINING" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"></td>
            </tr>
            <tr>
            </tbody>
          </table>
         

         <table class="table table-bordered">
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:33.33333333%; ">(3) Confirmation of funding and approval to procure </th>
        <th style="border-bottom-color:white; width:33.33333333%;"> </th> 
        <th style="border-bottom-color:white; width:33.33333333%;">  </th> 
      </tr>
    </thead>   
    <tbody>
      <tr>  
        <td>  
                
            
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;">NAME</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="AONAME" id="AONAME" placeholder="Accounting Officer" readonly="readonly">
                </div>
                </div> 
                
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">SIGNATURE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="AOSIGNATURE" name="AOSIGNATURE" readonly="readonly"/>
                </div>
                </div> 
                
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-4 control-label" style="font-weight:normal;">TITLE:</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="AOTITLE" name="AOTITLE" readonly="readonly"/>
                </div>
                </div> 
                
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label" style="font-weight:normal;"> DATE:</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="AODATE" readonly="readonly" name="AODATE"/>
                </div>
                </div> 
        </td>  
        <td> </td>
        <td> </td>
         </tr>
    </tbody>
  </table>  

                
     <table class="table table-bordered">Procurement Threshold 
    <thead>
      <tr  class="  ">
        <th style="border-bottom-color:white; width:15%;"> Order serial No.</th> 
        <th style="border-bottom-color:white; width:30%;">Preferred method of procurement</th> 
        <th style="border-bottom-color:white; width:30%;">Reason </th> 
        <th style="border-bottom-color:white; width:15%;">Officer allocated</th>
         
      </tr>
    </thead>   
    <tbody>
      <tr>   
              
              <td><input type="text" name="REQUISITIONID" id="REQUISITIONID" value=" <?php echo uniqid();?>" readonly="readonly" style="width:100%; text-align:left;background-color:#f0f0f0;"></td>
              
              <td><input type="text" name="THRESHOLD" id="THRESHOLD"  readonly="readonly"  style="width:100%; text-align:left; background-color:#f0f0f0;"></td>

              <td><input type="text" name="THRESHOLDREASON" id="THRESHOLDREASON" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"> </td>

              <td><input type="text" name="SUBPROGRAMME" id="SUBPROGRAMME" readonly="readonly"  style="width:100%; text-align:left;background-color:#f0f0f0;"></td>
 
            </tr>
            <tr>
            </tbody>
          </table>           
                  
                 
<table class="table table-bordered">
    <thead>
      <tr  class="  ">   
              <th style="text-align:center;">NOTE: <b>Signatory fields are autogenerated in the official processing of this document.</th>
               </tr>
            <tr>
            </tbody>
            </table>
             
<br>
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
        <select name="SENDTO" id="SENDTO"  required="required" style="width:100%; text-align:center;">
                  ddd     = "<?php   echo $stdd; ?>"; 
                  </select></td>  
        
        <td style="background-color:#f9f9f9;"> </td>  
    </tr> 
    </tbody>
    </table> 
<br>

 <center> <input type="submit" name="button" id="button" value="Save Order " style= " font-size:15px; font-weight:bold; border-radius:11px; "/> </center>
  </form>
  

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                   <!----/-----start models---------->  

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

 <!-- /.START PROCUREMENT REQUISITION  SCRIPT -->
  <script>
   function calcsubtt(tableId){
     
	 var val = tableId.split("_")[1];
	 var v1 = parseFloat(document.getElementById("qty_"+val).value); 
	 var v3 = parseFloat(document.getElementById("escost_"+val).value);

	 var v4 = v1*v3;
	 document.getElementById("marktp_"+val).value = v4;
   
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

     var  s1aa = '<input type="text" onKeyUp="domee(this)"  name="desc[]" id="desc_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="uom[]" id="uom_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';			 

	 var  s3cc = '<input type="numeric" onkeyup="dostg(tableId)" onchange="dostg(tableId)" name="qty[]" id="qty_'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="numeric" onkeyup="dostg(tableId)" onchange="dostg(tableId)" name="escost[]" id="escost_'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';

     var  s7gg = '<input type="numeric"  onchange="dostg(tableId)" name="marktp[]" id="marktp_'+rowCount+'" onkeyup="calcsubtt(\'mytable100\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;" >';
		 

	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
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
		  table.rows[x].cells[5].childNodes[0].id="escost_"+x;
		  table.rows[x].cells[6].childNodes[0].id="marktp_"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
   <!-- /.END PROCUREMENT REQUISITION  SCRIPT -->
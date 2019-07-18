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
     $('#exsuppex').DataTable( {
	  "iDisplayLength": 15,
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
     $('#example5').DataTable( {
	  "iDisplayLength": 15,
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
     $('#firstq').DataTable( {
	  "iDisplayLength": 15,
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
     $('#exam').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:'  '
		}
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#secondq').DataTable( {
	  "iDisplayLength": 15,
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
     $('#thirdq').DataTable( {
	  "iDisplayLength": 15,
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
     $('#fourthq').DataTable( {
	  "iDisplayLength": 15,
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
     $('#pmts').DataTable( {
	  "iDisplayLength": 15,
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
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>NTIHC</b>&nbsp|&nbsp imms</a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="proc_pdu_mgr.php" class="button5" > Refrsh<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="proc_pdu_user.php" class="button 5" > Procurement unit<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="../formatter/main/proc_planautomation.php" class="button 5" > Running procurement plan<span class="sr-only">(current)</span></a></li>

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
  <div class="row" style="background-color:#f9f9f9;">
       <!-- Content Header (Page header) -->
    <br>
    <div class="col-sm-3" style="height:auto; background-color:;">

               <div class="box-group" id="accordion">
                 <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                 <div class="panel box box-primary">
                   <div class="box-header with-border" style="text-align:center; background-color:#fff;">
                     <h4 class="box-title">
                       <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <B>  Inbox </b>
                       </a>
                     </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in" style="background-color: #ecf0f5;">

                       <div class="progress">
                   	  <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                       <B>Approved procurement requisitions</b><span class="sr-only">35% Complete (success)</span></div>
                       <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   	  <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   	  </div>

                       <br>
                  <table id="example5" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>DATE</th>
                     <th>ORDER.NO.</th> 
                     <th>ACTION</th>
			         <th>PRINT</th>
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED'  
                                              AND  AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED' AND ORDERSTATUS = 'WAITING'
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['REQUISITIONID']."***".$res['PROGRAMME']."***".$res['VOTE_HEADNO']."***".$res['SUBPROGRAMME']."***".$res['ITEM']
             ."***".$res['BALANCEREMAINING']."***".$res['JOBNUMBER']."***".$res['CORCOMMENT'];
              echo "<tr>";
              echo "<td>".$res['CORDATE']."</td>";
               echo "<td>".$res['JOBNUMBER']."</td>"; 
              echo '<td> 
              <a id="2__'.$dts.'" href="javascript:void(0)" onclick="getprocform(this.id)" data-toggle="tooltip" title="View requisition"
              <span class="glyphicon glyphicon-envelope"> </span></a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a id="3__'.$dts.'" href="javascript:void(0)" onclick="getdetails(this.id)" data-toggle="tooltip" title="Allocate an order"
              <span class="glyphicon glyphicon-th-list"> </span></a>
              </td>';
			  echo "<td><a href=\"print_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">RFP</a>  
		| <a href=\"view_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">COF</a>  </td>";
             }
              ?>
             </tbody>
             </table>
             
			 <div class=""  id="getdetails" >  </div>
                <script>

          function getdetails(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_pduoderallocation.php?q='+odno,
                       success : function(data){
                                $('#getdetails').html(data);
								$("#outx").modal("show");
                                 }
               });
               }

          </script>  

               </div>
             </div>
             <div class="panel box box-danger">
               <div class="box-header with-border">
                 <h4 class="box-title">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                     Rejected procurement orders
                   </a>
                 </h4>
               </div>
               <div id="collapseTwo" class="panel-collapse collapse" style="background-color: #ecf0f5;">

                   <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                   Rejected procurement orders <span class="sr-only">35% Complete (success)</span></div>
                   <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   </div>

                   <br>
                    CCCCCCCCCC

                 </div>
               </div>
			    
            
             </div>
         <!-- /.box-body -->
 
           <div class="progress">
           <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
            <b> Proposed budget details due for confirmation</b> <span class="sr-only">35% Complete (success)</span></div>
           <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
           </div>

            
        </form>
 
		</div> 
		<div class="col-sm-9" style="height:auto;"> 

        <div class=""  id="proc_requisition" >  </div>
                     <script>

               function getprocform(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'proc_requisition.php?q='+odno,
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
                      <b>Procurement and disposal unit</b>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOnev" class="panel-collapse collapse in">
                    <div class="box-body" style="background-color: #fff;"> 
					
					
           <ul class="nav nav-tabs">  
           
             <div class="col-lg-2 col-xs-4">
          <!-- small box -->  
          <li class="active"><a href="#ordex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/imgx/2ndtr.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href="budget_mgr.php" class="small-box-footer">Procurement plan <i class=""></i></a>
          </div>
        </div></div> </li>
        <!-- ./col -->         
        
		   
		   <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#comtex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
          <center> <img src="../assets/imgx/imageslll.jpg"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href="#" class="small-box-footer">First quarter<i class=" "></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->          
       
       
      <div class="col-lg-2 col-xs-4">
          <!-- small box -->
           <li><a href="#suplex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/imgx/images3388.jpg"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href="#" class="small-box-footer">Second quarter <i class=""></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->
		 
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#contrex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/imgx/5thqtr.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" >
         </center></a> 
            <div class="inner">  
            <a href="#" class="small-box-footer">Third quarter<i class=""></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->
         <!-- fix for small devices only --> 
        
        <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#paymex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/imgx/9oook.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href="#" class="small-box-footer">Fourth quarter <i class=" "></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->
        
         <div class="col-lg-2 col-xs-4">
          <!-- small box -->
          <li><a href="#storex" data-toggle="tab"> 
          <div class="small-box bg-grey-gradient">
         <center> <img src="../assets/imgx/1stqtr.png"width="70" height="70" class="img-circle" style="border: 6px solid #ecf0f5;" ></center></a> 
            <div class="inner">  
            <a href="#" class="small-box-footer">Payments <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div></li>
        <!-- ./col -->
                    </div>
                   
    
                     
                  </div>  
                </div>
               
			   <div class="tab-content">
                                <div class="tab-pane fade in active" id="ordex">
                                 <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 45%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;">
            PROCUREMENT PLAN DETAILS BY ITEM DESCRIPTION 
             <span class="sr-only">35% Complete (success)</span></div>
              
            
            <div class="progress-bar progress-bar-warning" style="width: 20%;background-color:#fff;font-weight:bold;">  
            <span class="sr-only">20% Complete (warning)</span></div>
            
            <div class="progress-bar progress-bar-warning" style="width: 15%;background-color:#fff;font-weight:bold;"> 
            <span class="sr-only">10% Complete (danger)</span></div>
             
            <div class="progress-bar progress-bar-success" style="width: 20%;background-color:#fff;font-weight:bold;">
            <a href=<button class="small-box-footer" data-toggle="modal" data-target="#addplan">Add new procurement plan<i class=" "></i></a> 
             
            <span class="sr-only">10% Complete (danger)</span></div>
            </div>
 
    <p></p>
                 <div class=""  id="runclone" >  </div>
                <script>

          function runclone(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'proc_plandetailsview.php?q='+odno,
                       success : function(data){
                                $('#runclone').html(data);
								$("#outxclows").modal("show");
                                 }
               });
               }

          </script>     
               
                 
                          
                  <table id="exam" class="table table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr> 
                     <th>OBJECTIVE</th> 
                     <th>CODE</th>
			         <th>ITEM DESCRIPTION</th>
                     <th>AMOUNT </th> 
                     <th>ACTION</th> 
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT ITEMDESCRIPTION, CODE, OBJECTIVE, FINANCIALPERIOD, SUM(BUDGETAMOUNT)  
			                                         FROM procplanning  GROUP BY ITEMDESCRIPTION, FINANCIALPERIOD ORDER BY OBJECTIVE DESC ");

             while($res = mysqli_fetch_array($result)) {
             $dtsvv = $res['FINANCIALPERIOD']."***".$res['ITEMDESCRIPTION']."***".$res['FINANCIALPERIOD'];
              echo "<tr>"; 
               echo "<td>".$res['OBJECTIVE']."</td>";
               echo "<td>".$res['CODE']."</td>"; 
			   echo "<td>".$res['ITEMDESCRIPTION']."</td>"; 
			   echo "<td>".$res['SUM(BUDGETAMOUNT)']."</td>"; 
               echo '<td> &nbsp;&nbsp; &nbsp;
              <a id="302__'.$dtsvv.'" href="javascript:void(0)" onclick="runclone(this.id)" data-toggle="tooltip" title="View"
              <span class="glyphicon glyphicon-th-list"> </span></a>
			  &nbsp;&nbsp;&nbsp; 
              </td>'; 
             }
              ?>
             </tbody>
             </table>
     
     
       <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 45%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;">
            PROCUREMENT PLAN DETAILS BY SUB ITEM 
             <span class="sr-only">35% Complete (success)</span></div>
              
            
            <div class="progress-bar progress-bar-warning" style="width: 20%;background-color:#fff;font-weight:bold;">  
            <span class="sr-only">20% Complete (warning)</span></div>
            
            <div class="progress-bar progress-bar-warning" style="width: 15%;background-color:#fff;font-weight:bold;"> 
            <span class="sr-only">10% Complete (danger)</span></div>
             
            <div class="progress-bar progress-bar-success" style="width: 20%;background-color:#fff;font-weight:bold;"> 
             
            <span class="sr-only">10% Complete (danger)</span></div>
            </div>
 
    <p></p>
                      </script>     
               
                   <div class=""  id="gameofthrones" >  </div>
               <script> 
              function gameofthrones(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'proc_procplan_get.php?q='+odno,
                            success : function(data){
                                     $('#gameofthrones').html(data);
     								$("#fucky").modal("show");
                                      }
                    });
                    } 
               </script> 
			             
                   <table id="exsuppex" class="table table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM DESCRIPTION</th>
                <th>FINANCIAL PERIOD</th>
                <th>PROCUREMENT DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>AMOUNT</th> 
                <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM.DESCRIPTION</th>
                <th>FINANCIAL.PERIOD</th>
                <th>PROCUREMENT.DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>AMOUNT</th> 
                <th>ACTION</th>
            </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procplanning ORDER BY OBJECTIVE DESC ");

             while($res = mysqli_fetch_array($result)) {
             $dtsvv = $res['ITEMDESCRIPTION']."***".$res['id']."***".$res['FINANCIALPERIOD'];
              echo "<tr>";
			   echo "<td>".$res['id']."</td>";
               echo "<td>".$res['OBJECTIVE']."</td>";
               echo "<td>".$res['CODE']."</td>"; 
			   echo "<td>".$res['ITEMDESCRIPTION']."</td>"; 
			   echo "<td>".$res['FINANCIALPERIOD']."</td>"; 
			   echo "<td>".$res['PLANDETAILS']."</td>";
               echo "<td>".$res['FIRSTQTR']."</td>";
               echo "<td>".$res['SECONDQTR']."</td>"; 
			   echo "<td>".$res['THIRDQTR']."</td>"; 
			   echo "<td>".$res['FOURTHQTR']."</td>"; 
			   echo "<td>".$res['BUDGETAMOUNT']."</td>";  
               echo '<td> 
			  &nbsp;&nbsp;&nbsp;
			  <a id="322__'.$dtsvv.'" href="javascript:void(0)" onclick="gameofthrones(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-check"> </span></a> 
              </td>'; 
             }
              ?>
             </tbody>
             </table>                    
                              
                    
                              
             
                  
                                </div>                 
                           
                          <div class="tab-pane fade" id="comtex">
                         
                                         <table id="firstq" class="table table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>FINANCIAL.PERIOD</th>
                     <th>OBJECTIVE</th> 
                     <th>CODE</th>
			         <th>DETAILS</th>
                     <th>1ST.QTR</th> 
                     <th>2ND QTR</th> 
                     <th>3RD QTR</th>
                     <th>4TH QTR</th> 
                     <th>AMOUNT</th> 
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procplanning ORDER BY FINANCIALPERIOD DESC ");

             while($res = mysqli_fetch_array($result)) {
             $dtsvv = $res['FINANCIALPERIOD']."***".$res['ITEMDESCRIPTION']."***".$res['FINANCIALPERIOD'];
              echo "<tr>";
			   echo "<td>".$res['FINANCIALPERIOD']."</td>";
               echo "<td>".$res['OBJECTIVE']."</td>";
               echo "<td>".$res['CODE']."</td>"; 
			   echo "<td>".$res['PLANDETAILS']."</td>"; 
			   echo "<td>".$res['FIRSTQTR']."</td>";
               echo "<td>".$res['SECONDQTR']."</td>";
               echo "<td>".$res['THIRDQTR']."</td>"; 
			   echo "<td>".$res['FOURTHQTR']."</td>";  
			   echo "<td>".$res['BUDGETAMOUNT']."</td>";  
             }
              ?>
             </tbody>
             </table>
                                    </p>
                                </div>
                                
                                <div class="tab-pane fade" id="suplex">
                                          <table id="secondq" class="table table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                     <th>FINANCIAL.PERIOD</th>
                     <th>OBJECTIVE</th> 
                     <th>CODE</th>
			         <th>DETAILS</th>
                     <th>1ST.QTR</th> 
                     <th>2ND QTR</th> 
                     <th>3RD QTR</th>
                     <th>4TH QTR</th> 
                     <th>AMOUNT</th> 
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procplanning ORDER BY FINANCIALPERIOD DESC ");

             while($res = mysqli_fetch_array($result)) {
             $dtsvv = $res['FINANCIALPERIOD']."***".$res['ITEMDESCRIPTION']."***".$res['FINANCIALPERIOD'];
              echo "<tr>";
			   echo "<td>".$res['FINANCIALPERIOD']."</td>";
               echo "<td>".$res['OBJECTIVE']."</td>";
               echo "<td>".$res['CODE']."</td>"; 
			   echo "<td>".$res['PLANDETAILS']."</td>"; 
			   echo "<td>".$res['FIRSTQTR']."</td>";
               echo "<td>".$res['SECONDQTR']."</td>";
               echo "<td>".$res['THIRDQTR']."</td>"; 
			   echo "<td>".$res['FOURTHQTR']."</td>";  
			   echo "<td>".$res['BUDGETAMOUNT']."</td>";  
             }
              ?>
             </tbody>
             </table>
                                </div> 
                                
                                <div class="tab-pane fade" id="contrex">
                                    <h4>Contracts</h4>
                                    <p> ..........</p>
                                </div> 
                                
                                <div class="tab-pane fade" id="paymex">
                                    <h4>Payments</h4>
                                    <p> .........</p>
                                </div> 
                                
                                <div class="tab-pane fade" id="storex">
                                   
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
     <td style="width:25%;"><input type="text" name="BUDGETAMOUNT" id="BUDGETAMOUNT"    required="required"  
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
                                </div>
                                
                                
                                
                  

			  
			  
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
<br>
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
<img src="../../assets/img/logsbig.PNG" width="100%" height="100%">
</div>

           <div class=""  id="procurestracker" >  </div>
                <script>

          function procurestracker(cjose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'prock_tracker.php?q='+odno,
                       success : function(data){
                                $('#procurestracker').html(data);
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

                       <div class="modal" id="addplan" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

 
 <form id="form1" class="form-horizontal" action="proc_processprocplan.php" method="POST" style="height:auto; font-weight:normal;">

           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:12px; text-align:center;"> PROCUREMENT PLANNING</p>
           
				<table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
   <th>OBJECTIVE</th>
   <th style="text-align:center;">CODE</th>
   <th style="text-align:center;">ITEM DESCRIPTION</th>
   <th style="text-align:center;">FINANCIAL PERIOD</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:20%;"><input type="text" name="OBJECTIVE" id="OBJECTIVE"   required="required" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:20%;"><input type="text" name="CODE" id="CODE"   required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
                
   <td style="width:35%;"><input type="text" name="ITEMDESCRIPTION" id="ITEMDESCRIPTION"   required="required" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:25%;"><input type="text" name="FINANCIALPERIOD" id="FINANCIALPERIOD"  required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
                
                 
   </tr>
  <tr>
 </tbody>
 </table>
      <input type="hidden" name="DATECREATED" id="DATECREATED" value="">    
              
    <table class="table table-bordered" id="mytable1" style="background-color: transparent; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:45%;"> DETAILS </th>
	      <th style="width:10%;"> 1ST QUARTER  </th>
		  <th style="width:10%;"> 2ND QUARTER  </th>
		  <th style="width:10%;"> 3RD QUARTER  </th>
          <th style="width:10%;"> 4TH QUARTER </th>  
          <th style="width:15%;"> AMOUNT </th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>      
     <input type="button" onClick="addRow16('mytable1')" value="Add details" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
             
  <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:85%; text-align:right; border:0px;"> TOTAL</th>
                <td style="width:15%; text-align:right; border:0px;"> 
                <input type="text" name="CODEDAMOUNT" id="CODEDAMOUNT"    
                style="width:100%; text-align:left;background-color:#ecf0f5;">
    </td>  
			  
			 </tr>             
            </table>

            <input type="hidden" name="BUDGETSTATUS" id="BUDGETSTATUS" value="RUNNING" >    
            
            <center> <input type="submit" name="button" id="button" value="Save"/>
            
            <button class="btn btn-default" data-dismiss="modal">Close</button></center>
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer"> 
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

            <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="procdetails" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog5">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


            <form class="form-horizontal" style="height:auto; background-color:#000000">
           <p style="color:#ffffff; font-weight:bold; font-family:lcd; font-size:20px; text-align:center;"> PROCUREMENT PLAN DETAILS</p>

             <table id="example7" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM.DESCRIPTION</th>
                <th>FINANCIAL.PERIOD</th>
                <th>PROCUREMENT.DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>BUDGET.AMOUNT</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM.DESCRIPTION</th>
                <th>FINANCIAL.PERIOD</th>
                <th>PROCUREMENT.DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>BUDGET.AMOUNT</th> 
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
$sql = "SELECT * FROM procplanning  ORDER BY id DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["id"].'</td>'.
                getIndicator($row["OBJECTIVE"]).   
				 getIndicator($row["CODE"]). 
                 getIndicator($row["ITEMDESCRIPTION"]). 
                 getIndicator($row["FINANCIALPERIOD"]).
			     getIndicator($row["PLANDETAILS"]).
                 getIndicator($row["FIRSTQTR"]).
				 getIndicator($row["SECONDQTR"]).
				  getIndicator($row["THIRDQTR"]).  
                 getIndicator($row["FOURTHQTR"]).
                 '<td>'.$row["BUDGETAMOUNT"].'</td></tr>';

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
      <center> <strong>Copyright &copy; 2017  Naguru Teenage Information and Health Center</strong> All rights
    reserved.</center>
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
		   document.getElementById("CODEDAMOUNT").value = ''+sum;
	 
	 }
	 
  
  function addRow16(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="dnx[]" id="dnx'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';			 

	 var  s3cc = '<input type="numeric" name="tmx[]" id="tmx'+rowCount+'" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%; text-align:center;">';
 		 
	 var  s6ff = '<input type="numeric" name="pdx[]" id="pdx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
				 
	 var  ssx = '<input type="numeric" name="fqtr[]" id="fqtr'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';
			 

     var  s7gg = '<input type="numeric" name="qtyx[]" id="qtyx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" value="0" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+  
								  '<td>'+s6ff+' </td>'+
								  '<td>'+ssx+' </td>'+
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
		  table.rows[x].cells[1].childNodes[0].id="dnx"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqx"+x;
          table.rows[x].cells[3].childNodes[0].id="tmx"+x; 
		  table.rows[x].cells[4].childNodes[0].id="pdx"+x; 
		  table.rows[x].cells[5].childNodes[0].id="fqtr"+x;
		  table.rows[x].cells[6].childNodes[0].id="qtyx"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
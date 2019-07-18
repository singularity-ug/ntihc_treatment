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
                            <a href="procurement_user.php"> 
                    <i class="fa fa-rocket fa-5x" style="color:#f39c12;"></i>
                      <h4 style="font-size:14px;"> User department  </h4>
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
                     </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in" style="background-color: #fff;">

                       <div class="progress">
                   	  <div class="progress-bar progress-bar-success" style="width: 100%;  color:#fff; text-align:left; font-weight:bold;">
                       <B>&nbsp; Procurement orders due for review and approval </b><span class="sr-only">35% Complete (success)</span></div> 
                   	  </div>

                       <br>
                  <table id="example1" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th>DATE</th>
                     <th>NO.</th>
					 <th>EST.COST</th>
                               <th>ACTION</th>
                  </tr>
                  </tfoot>
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND CONFSTATUS = 'CONFIRMED' AND CONFEXTENSION ='$rm'
                                              AND AOACTION = 'WAITING' GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['id']."***".$res['REQUISITIONID']."***".$res['PROGRAMME']."***".$res['VOTE_HEADNO']."***".$res['SUBPROGRAMME']."***".$res['ITEM']
             ."***".$res['BALANCEREMAINING']."***".$res['JOBNUMBER']."***".$res['CONFTITLE']."***".$res['CONFNAME']."***".$res['CONFDATE']
			 ."***".$res['CORCOMMENT'];
              echo "<tr>";
              echo "<td>".$res['CONFDATE']."</td>";
              echo "<td>".$res['JOBNUMBER']."</td>";
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
             <div class="panel box box-danger">
               <div class="box-header with-border">
                 <h4 class="box-title">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    View proposed budget line prior to approval
                   </a>
                 </h4>
               </div>
               <div id="collapseTwo" class="panel-collapse collapse" style="background-color: #ecf0f5;">

                   <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
                   Confirmation of funding <span class="sr-only">35% Complete (success)</span></div>
                   <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
                   <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
                   </div>

                   <br>
                    <script>
           function postpetty(myid){
           var dts = myid.split("***");
           document.getElementById("myREQUISITIONID").value=dts[1];
           document.getElementById("myid").value=dts[0];
           document.getElementById("mySUBPROGRAMME").value=dts[2]; 
		   document.getElementById("myVOTE_HEADNO").value=dts[3]; 
		   document.getElementById("myPROGRAMME").value=dts[4]; 
		   document.getElementById("myITEM").value=dts[5]; 
           document.getElementById("myBALANCEREMAINING").value=dts[6]; 
		   document.getElementById("myJOBNUMBER").value=dts[7]; 
		   document.getElementById("myCONFTITLE").value=dts[8]; 
		   document.getElementById("myCONFNAME").value=dts[9]; 
		   document.getElementById("myCONFDATE").value=dts[10]; 
		   document.getElementById("myCONFCOMMENT").value=dts[11]; 
           }
           </script>


             <form method="POST" action="proc_budgetapproval.php">
             <table class="table table-striped" style="background-color:#ffffff;">
             <thead>
             <tr>
             <th>Budget line description</th>
             </tr>
             </thead>
             <tbody>
             <tr>
			   
			   <input type="hidden" name="REQUISITIONID" id="myREQUISITIONID" value="" > 
			   
               <td style="width:70%;"><input type="text" onKeyUp="domee(this)" name="SUBPROGRAMME"  id="mySUBPROGRAMME" value="" required="required"
               style="width:100%; text-align:left;background-color:#ecf0f5;">
               </td>

             </tr>
            <tr>
           </tbody>
          </table>

          <div id="res" style="border:2px solid;"> </div>

           <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
           <thead>
           <tr>
           <th>Code.</th> 
           </tr>
           </thead>
           <tbody>
           <tr>
           <td style="width:30%;"><input type="text" name="VOTE_HEADNO" id="myVOTE_HEADNO"  value="" required="required" readonly="readonly" 
           style="width:100%; text-align:left;background-color:#ecf0f5;"></td>

           </tr>
          <tr>
         </tbody>
        </table>

        <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
        <thead>
        <tr>
        <th>Programme</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td style="width:30%;"><input type="text" name="PROGRAMME" id="myPROGRAMME"  value="" required="required" readonly="readonly" 
        style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
 
  
        </tr>
       <tr>
      </tbody>
     </table>

     <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
     <thead>
     <tr>
     <th>Sub programme</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <td style="width:30%;"><input type="text" name="ITEM" id="myITEM"  value="" required="required" readonly="readonly" 
     style="width:100%; text-align:left;background-color:#ecf0f5;"></td>

     </tr>
    <tr>
   </tbody>
   </table>

   <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   <th>Remaining on budget</th>
   <th>Requisition ID</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:30%;"><input type="text" name="BALANCEREMAINING" id="myBALANCEREMAINING"  value="" required="required" readonly="readonly" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:30%;"><input type="text" name="JOBNUMBER" id="myJOBNUMBER"  value="" required="required" readonly="readonly" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
   </tr>
  <tr>
 </tbody>
 </table>
 
 <input type="hidden" name="FINANCIALYEAR" id="FINANCIALYEAR" > 

 <input type="hidden" name="JOBNUMBER" id="myid" value=" " required="required" >  

                 </div>
               </div>
			    
            
             </div>
         <!-- /.box-body -->
 
           <div class="progress">
           <div class="progress-bar progress-bar-success" style="width: 70%;  color:#fff; text-align:left; font-weight:bold;">
            <b> Reviewed by</b> <span class="sr-only">35% Complete (success)</span></div>
           <div class="progress-bar progress-bar-success" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-warning" style="width: 10%"><span class="sr-only">20% Complete (warning)</span></div>
           <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
           </div>

           
  <table class="table-responsive">
            <table class="table">
              <tr>
			    <th style="width:30%"> Designation</th> 
                <td style="width:70%"><input type="text" name="CONFTITLE" id="myCONFTITLE"  value="" 
				 disabled="disabled"  style="width:100%; text-align:left;background-color:#fff;"></td>
              </tr>
              <tr> 
                <th style="width:30%">Name</th>
                <td style="width:70%"> <input type="text" name="CONFNAME" id="myCONFNAME " value=" "
				 disabled="disabled"   style="width:100%; text-align:left;background-color:#fff;"></td>
              </tr> 
			   <tr>
			    <th style="width:30%"> Date</th> 
                <td style="width:70%"><input type="text" name="CONFDATE" id="myCONFDATE"  value="" 
				 disabled="disabled"   style="width:100%; text-align:left;background-color:#fff;"></td>
              </tr>
			   <tr>
			    <th style="width:30%">Notes</th> 
                <td style="width:70%;"><input type="text" name="CONFCOMMENT" id="myCONFCOMMENT"  value="" readonly="readonly" 
                 style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
              </tr>
            </table>
    <br>

 <table class="table table-striped" style="background-color:#ffffff; margin-top:-20px; ">
 <thead>
 <tr>
 <th>Comment</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td style="width:30%;"><textarea name="AOPCOMMENT" id="AOPCOMMENT"  value="" required="required"
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
				<center> <input type="radio" name="AOACTION" id="AOACTION" value="APPROVED" checked>
        <label for="APPROVED">APPROVE</label>
		<input name="AOACTION" type="radio" id="AOACTION" value="REJECTED">
		<label for="REJECTED">REJECT</label> </center>
				</th>  
              </tr> 
            </table>
                      
  <table class="table-responsive" style="background-color:#ffffff; margin-top:-14px; ">
            <table class="table">
              <tr>
			    <th style="width:25%">Forward TO: </th>
                <th style="width:75%"> 
				<select name="CONFEXTENSION" id="CONFEXTENSION"  class="button 5" required="required" style="width:100%; text-align:left;">
                  <option value="Undefined"> <option>
                   <?php   echo $stdd; ?> 
                  </select> 
				</th>  
              </tr> 
            </table>
  
 <input type="hidden" name="AONAME" id="AONAME" value="<?php echo $nameofuser; ?>" >                
        <input type="hidden" name="AOTITLE" id="AOTITLE" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="AODEPT" id="AODEPT" value="<?php echo $dept; ?>" > 
        <input type="hidden" name="AOPFNO" id="AOPFNO" value="<?php echo $pf; ?>" >   
        <input type="hidden" name="AODATE" id="AODATE" value="<?php echo date('d-m-y'); ?>" >
		 
		  
     
 
		 <center> <input type="submit" name="update" value="Update"> </center>
             <br>
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
                      My confirmed funding / approvals to procure 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOnev" class="panel-collapse collapse in">
                    <div class="box-body" style="background-color: #fff;"> 
           
                    <table id="example5" class="table table-striped table-bordered" style="font-weight:normal;">
         <thead>
        <tr> 
                     <th>APPROVED DATE</th>
					 <th>ORDER NO.</th> 
					 <th>SUBJECT OF PROCUREMENT </th>  
					 <th>ESTIMATED COST </th>
                     <th>ORDER.STATUS</th>
					 <th>ICON</th>  
                     <th>ACTION</th> 
                       
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>APPROVED DATE</th>
					 <th>ORDER NO.</th> 
					 <th>SUBJECT OF PROCUREMENT </th>  
					 <th>ESTIMATED COST </th>
                     <th>ORDER.STATUS</th>
					 <th>ICON</th>  
                     <th>ACTION</th> 
                      
                      
        </tr>
        </tfoot>
        <tbody> 
          <?php 
include_once("../config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND CONFEXTENSION ='$rm' 
                                              AND  AOACTION = 'APPROVED' AND PROCUREMENTSTATUS = 'RECEIVED'
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC ");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['JOBNUMBER']."***".$res['CATEGORY']."***".$res['PROCUREMENTSTATUS']."***".$res['ITEM'];
		echo "<tr>"; 
		echo "<td>".$res['AODATE']."</td>"; 
		echo "<td>".$res['JOBNUMBER']."</td>";  
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>"; 
		echo "<td>".$res['SUBTOTAL']."</td>";   
		echo "<td>".$res['ORDERSTATUS']."</td>"; 
		echo '<td> <a id="2__'.$dts.'" href="javascript:void(0)"  onclick="getdetails(this.id)" data-toggle="tooltip" 
		title="Click to display info" 
		<span class="glyphicon glyphicon-folder-open"> </span></a>  </td>';      
		echo "<td><a href=\"view_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">View</a>  
		| <a href=\"print_requisition.php?REQUISITIONID=$res[REQUISITIONID]\">Print</a>  </td>";	  		
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
                       url     : 'get_followup.php?q='+odno,
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
				   <a class="quick-btn" href="#" style="border-radius:5px; background-color:#fff;">
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
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>    

								</span>
                            </a>
                          &nbsp
                            <a class="quick-btn" href="#" style="border-radius:5px;"> 
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
		  
    <table id="example6" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
$sql = "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND CONFEXTENSION ='$rm' 
                                              AND  AOACTION = 'APPROVED' AND ACTION = 'PENDING' 
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

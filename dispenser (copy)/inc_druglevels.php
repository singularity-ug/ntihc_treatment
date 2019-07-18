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
 
   

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc</title>
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
	  "iDisplayLength": 20,
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
     $('#example13').DataTable();
  } );
  </script>

 
    <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 2px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
                 background:transparent;
             }
             table tr:nth-child(even) {
                 background:transparent;
             }

</style>

</head> 
<body class="hold-transition skin-blue sidebar-mini"> 
<div class="wrapper" style="background:url(../assets/images/dd.jpg); background-repeat:repeat-x;">
       
  </header>
    
   
     
    <!-- Main content -->
    <section class="content">  
   

    <!-- Main content -->
    <section class="content" >
      <div class="row" > 
           <div class="col-md-1">  
            </div> 
   
        <div class="col-md-10">  
      
                <div class="col-md-5">
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:33.3333%; border: 1px;"> <a href="../client_management.php">  
      <img src="../assets/imgx/index.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
         Dashboard </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
   
     <td style="width:33.3333%; border: 1px;"> <a href="drugs_mgr.php"> 
         <center><img src="../assets/imgx/indexreewss.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Dispensing Home </center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
     
   <td style="width:33.3333%; border: 1px;"> <a href=<button data-toggle="modal"  data-target="#notifx" style="background-color:#00a65a;" >  </button>
       <center><img src="../assets/imgx/ttttttttt.jpg" width="100" height="100" class="img-circle" 
     style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
       Drug requisition</center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
 </tbody>
 </table> 
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:33.3333%; border: 1px;"> <a href="drugs_mgr.php">  
       <img src="../database icons/exchange-512.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Dispensing history </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
   
     <td style="width:33.3333%; border: 1px;"> <a href="inc_druglevels.php"> 
       <center><img src="../assets/imgx/kkk.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Drug stock levels</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
     
   <td style="width:33.3333%; border: 1px;">  <a href="../index.php">
       <center><img src="../assets/imgx/images.jpg" width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Logout user &nbsp;&nbsp;&nbsp;&nbsp; </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
 </tbody>
 </table> 
  </div>
     <div class="col-md-7">                    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:10%; border: 0px;">  
    <img src="../assets/img/ntihclog2.png"width="100" height="100" style="border: 0px;">  
    </td>
   
     <td style="width:80%; border: 0px;">  
   <center style="color:#000; font-weight:bold; font-size:12px;font:bold 17px 'Aleo'; text-shadow:1px 1px 6px #000; color:#fff;">I.M.M SYSTEM</center><BR>
   <center style="color:#000; font-weight:bold; font-size:12px;">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</center> <br> 
   <center style="color:#000; font-weight:bold; font-size:12px;">DRUGS STOCK LEVELS TRACKER</center> 
     </td> 
    
    <td style="width:10%; border: 1px;">  
    </td>  
    </tbody>
    </table> 
  </div>
             
                
        <div class="row">
        <div class="col-xs-12"> 
            <BR>
    <table id="exdrug" class="table table-table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                    <th>S/NO.</th>
                <th>DRUG NAME</th> 
                <th>CATEGORY</th>
                <th>UOM</th>
                <th>GROUP</th>
                <th>BALANCE IN STOCK</th>
                <th>UNIT COST</th>
                <th>STOCK VALUE</th> 
                <th>MIN STOCK</th> 
                <th>QTY TO REORDER</th> 
            </tr>
        </thead>
        <tfoot>
            <tr>
                     <th>S/NO.</th>
                <th>DRUG NAME</th> 
                <th>CATEGORY</th>
                <th>UOM</th>
                <th>GROUP</th>
                <th>BALANCE IN STOCK</th>
                <th>UNIT COST</th>
                <th>STOCK VALUE</th> 
                <th>MIN STOCK LEVEL</th> 
                <th>QTY TO REORDER</th> 
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

	if($str123==''){ 		 return '<td style="background-color:#367fa9;">'.$str123.'</td>';  	 }
	else
	{
		  $str1234=array();
          $str1234=explode('_',$tempstr);
		  $cnt = count( $str1234);
       	if($str1234[$cnt-1]==''){   	 return '<td style="background-color:#367fa9;">'.$str123.'</td>';    	 }

		               else{     return '<td style="background-color:#FFF;">'.$str123.'</td>'; 	}
	}

}
   
require('connect/configdrug.php');
$sql = "SELECT * FROM ntihcdrugs WHERE DISCONTINUE = 'NO' ORDER BY DRUGNAME ASC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["id"].'</td>'.
                 getIndicator($row["DRUGNAME"]).   
				 getIndicator($row["CATEGORY"]). 
                 getIndicator($row["UNITOFMEASURE"]).  
				 getIndicator($row["BREAKDOWN"]).  
			     getIndicator($row["BALANCEINSTOCK"]).
				 getIndicator($row["UNITPRICE"]).
                 getIndicator($row["STOCKVALUE"]). 
				 getIndicator($row["REORDERLEVEL"]).   
                 '<td>'.$row["QTYTOREORDER"].'</td></tr>';

 }

?>

	  </tbody>
  </table> 
                 
             </div></div></div></div> 
              
              
              
                 
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
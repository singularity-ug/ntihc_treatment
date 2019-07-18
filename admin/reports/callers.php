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
  <title>Ntihc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css"> 
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
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 20,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' CALLERS INFO'
		},
		{extend :'pdf',
		 title:'CALLERS INFO '
		},
		{extend :'print',
		 title:' CALLERS INFO'
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
				font-weight:normal;
				text-align:left;
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
  
  <!-- Left side column. contains the logo and sidebar -->
               
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">

<div class="col-sm-1">
 
</div>

<div class="col-sm-10">
                  <!-- Info boxes --> 
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
              <td style="border:0px;"> 
             
              <a rel="facebox" title="" href="tollree_rpt.php?d1=0&d2=0" >
              <button class="" ><i class="icon-edit">   
   </i> Perfomance dashboard</button> </a>
   
   <a rel="facebox" title="" href="general.php?d1=0&d2=0"><button class="">
   <i class="icon-edit">  
   </i> General report</button> </a>
   
   <a rel="facebox" title="" href="callers.php?d1=0&d2=0"><button class="">
   <i class="icon-edit">  
   </i>Caller records</button> </a>
 
    <a rel="facebox" title="" href="../sys_dashboard.php"><button class="">
   <i class="icon-edit">  
   </i>  <strong>System dashboard</strong></button> </a>   </td>   
			 </tr>             
            </table>
            
     <br>
   
<div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
 <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
     
     <p style="text-align:center;">Tollfree callers by times of call</p>
      <table id="example3" class="table table-table-bordered" style="font-size:9px; width:100%;">
         <thead>
         <tr>   
                     <th style="background-color:#ecf0f5; font-size:10px;">C/No.</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">Date of first register</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">Caller No.</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">Caller Name</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;">School</th>
                     <th style="background-color:#ecf0f5; font-size:10px;">Age</th>
					 <th style="background-color:#ecf0f5; font-size:10px;">Age-group</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">Sex</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">District</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">Marital status</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; ">Employment status</th>
                     <th style="background-color:#ecf0f5; font-size:10px; ">Source of info</th>
					 <th style="background-color:#ecf0f5; font-size:10px; ">Times</th>  
           </tr>
        </thead>
        <tfoot>
          <tr>
		             <th style="background-color:#ecf0f5; font-size:10px;">C/No.</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">Date of first register</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">Caller No.</th> 
                     <th style="background-color:#ecf0f5; font-size:10px;">Caller Name</th> 
					 <th style="background-color:#ecf0f5; font-size:10px;">School</th>
                     <th style="background-color:#ecf0f5; font-size:10px;">Age</th>
					 <th style="background-color:#ecf0f5; font-size:10px;">Age-group</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">Sex</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">District</th> 
                     <th style="background-color:#ecf0f5; font-size:10px; ">Marital status</th>  
                     <th style="background-color:#ecf0f5; font-size:10px; ">Employment status</th>
                     <th style="background-color:#ecf0f5; font-size:10px; ">Source of info</th>
					 <th style="background-color:#ecf0f5; font-size:10px; ">Times</th>  
        </tr>
        </tfoot> 
        <tbody> 
<?php
require('connect_conn.php'); 

$sql = "SELECT *,CASE
  WHEN AGE BETWEEN 10 AND 14 THEN '10-14'
  WHEN AGE BETWEEN 15 AND 19 THEN '15-19'
  WHEN AGE BETWEEN 20 AND 24 THEN '20-24'
  WHEN AGE > 24 THEN 'Over 24'
  END AS age_range,COUNT(RECORDCOUNTER) FROM tollfree  GROUP BY PHONECONTACT,FIRSTNAME DESC";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['RECORDCOUNTER']))-intval($row['RECORDCOUNTER']);
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
       '<td>'.$row['DATECREATED'].'</td>'.
	   '<td>'.$row['PHONECONTACT'].'</td>'.
	   '<td>'.$row['FIRSTNAME'].'</td>'.
       '<td>'.$row['SCHOOLINGSTATUS'].'</td>'.
	   '<td>'.$row['AGE'].'</td>'.
       '<td>'.$row['age_range'].'</td>'. 
	   '<td>'.$row['SEX'].'</td>'.
	   '<td>'.$row['DISTRICT'].'</td>'.
	   '<td>'.$row['MARITALSTATUS'].'</td>'. 
	   '<td>'.$row['EMPLOYMENTSTATUS'].'</td>'. 
	   '<td>'.$row['HEAREDABOUTNTIHC'].'</td>'. 
	   '<td>'.$row['COUNT(RECORDCOUNTER)'].'</td>'. 
      
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
  
     
     
     
     
     
     
     
     
            </div>
             
             </div></div></div></div>
              
              
               </div></div>
              
                 <!-- /. ROW  -->  
             
                </div>
                <!-- /.pull-right -->
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
               
 <!-- /. PAGE WRAPPER  -->
 
       <!-- /.content-wrapper -->
  <footer class="main-footerx">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

  
  </div> 


<script src="../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
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
<script type="text/javascript" src="../assets/js/gauge.js"></script> 
   
</body>
</html> 


 
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
		 title:'Daily Medical Service Provider(s) performance by Problem category and Age groups'
		},
		{extend :'pdf',
		 title:'Daily Medical Service Provider(s) performance by Problem category and Age groups'
		},
		{extend :'print',
		 title:'Daily Medical Service Provider(s) performance by Problem category and Age groups'
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
     
  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr> 
              <td style="border: 0px;">
              <center>
              <a rel="facebox" title="" href="medical.php?d1=0&d2=0" > 
   <button class="" ><i class="icon-edit">   
   </i> Back</button> </a>
   
   <a rel="facebox" title="" href="medical_export_performance.php"><button class="">
   <i class="icon-edit">  
   </i> User performance</button> </a>
   
    </center>
    </td>   
			 </tr>             
            </table>
            
     <br>
   
<div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
 <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
     
     <p style="text-align:center;">Daily Medical Service Provider(s) performance by Problem category and Age groups</p>
      <table id="example3" class="table table-table-bordered" style="font-size:9px; width:100%;">
         <thead>
         <tr>   
       <th>S/NO.</th>
        <th>DATE CREATED</th>
        <th>SERVICE PROVIDER</th>
        <th>MEDICAL TOPIC</th>
        <th style="text-align:center;">10-14</th>
        <th style="text-align:center;">15-19</th>
        <th style="text-align:center;">20-24</th>
        <th style="text-align:center;">Above 24</th><th>TOTAL</th>
        
           </tr>
        </thead>
        <tfoot>
          <tr>
		<th>S/NO.</th> 
        <th>DATE CREATED</th>
        <th>SERVICE PROVIDER</th>
        <th>MEDICAL TOPIC</th>
        <th style="text-align:center;">10-14</th>
        <th style="text-align:center;">15-19</th>
        <th style="text-align:center;">20-24</th>
        <th style="text-align:center;">Above 24</th><th>TOTAL</th> 
        </tr>
        </tfoot> 
        <tbody> 
<?php
require('connect_conn.php'); 

$sql = "SELECT DATECREATED,MEDICALTOPIC,  USERINITIAL,  
				                               sum( if( AGE_GROUP = '10-14', RECORDCOUNTER, 0 ) ) AS gpone,  
                                               sum( if( AGE_GROUP = '15-19', RECORDCOUNTER, 0 ) ) AS gptwo,
											   sum( if( AGE_GROUP = '20-24', RECORDCOUNTER, 0 ) ) AS gpthree, 
											   sum( if( AGE_GROUP = '20-24', RECORDCOUNTER, 0 ) ) AS gpfour 
											        
											   FROM clientsexamination 
				                               GROUP BY DATECREATED desc";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['gpone']))+intval($row['gptwo'])+intval($row['gpthree'])+intval($row['gpfour']);
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
	   '<td>'.$row['DATECREATED'].'</td>'.
       '<td>'.$row['USERINITIAL'].'</td>'.
	   '<td>'.$row['MEDICALTOPIC'].'</td>'.
	   '<td>'.$row['gpone'].'</td>'.
       '<td>'.$row['gptwo'].'</td>'.
	   '<td>'.$row['gpthree'].'</td>'.  
	   '<td>'.$row['gpfour'].'</td>'.  
	   '<td>'.$bal.'</td>'.
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


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | procurement</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
  
  <script>
  $(document).ready(function() {
     $('#example').DataTable();
  } );
  </script> 
  
  <script>
  $(document).ready(function() {
     $('#example1').DataTable();
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
 
  
  
</head>
<body onLoad="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body">   

<div class="col-sm-2" style="text-align:left;">
<img src="../assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:20px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:15px; font-weight:bold; ">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:15px; font-weight:bold; ">Tel: 0393-216-467</p>
</div>

<div class="col-sm-2"> </div>

 <br> <br> <br> <br>  </br><br>  </br>
 
<p style="text-align:center; font-size:16px; font-weight:;"> GENERAL PROCUREMENT TRACKER  </p>
<div class="col-sm-12">
 <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" style="text-transform:uppercase; font-weight:bold;color:green;">User &nbsp department &nbsp authorised&nbsp  orders</a></li>
              
              <li><a href="#tab_2" data-toggle="tab" style="text-transform:uppercase; font-weight:bold;color:blue;">PDU &nbsp| &nbspPAYMENTS</a></li>
              
             
              <li class="pull-right"><a href="procurement_tracker.php" class="text-muted"><i class="fa fa-gear"></i></a></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1"> 
              
              <table id="example" class="table table-striped table-bordered" style="font-weight:normal;">
        <thead>
        <tr> 
                     <th>ID</th> 
                     <th>CREATED DATE</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th> 
                     <th>SUBJECT OF PROCUREMENT </th>  
                     <th>ESTIMATED COST </th>  
                     <th>MONTH</th>  
                     <th>YEAR</th> 
                     <th>STATUS</th> 
                     <th>SEQUENCE NUMBER</th>  
                     <th>OFFICER ALLOCATED </th>
                     <th>ACTION</th> 
                       
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>ID</th> 
                     <th>CREATED DATE</th>
					 <th>INITIATOR</th>
                     <th>DEPARTMENT</th> 
                     <th>SUBJECT OF PROCUREMENT </th>  
                     <th>ESTIMATED COST </th>  
                     <th>MONTH</th>  
                     <th>YEAR</th> 
                     <th>STATUS</th> 
                     <th>SEQUENCE NUMBER</th>  
                     <th>OFFICER ALLOCATED </th>
                     <th>ACTION</th> 
                      
                      
        </tr>
        </tfoot>
        <tbody> 
          <?php 
include_once("../config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE CORACTION ='AUTHORISED' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['CATEGORY']."***".$res['PROCUREMENTSTATUS']."***".$res['ITEM'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>"; 
		echo "<td>".$res['TIMESTAMP']."</td>";
		echo "<td>".$res['RFPUSERNAME']."</td>";
		echo "<td>".$res['INITIATORDEPT']."</td>";
		echo "<td>".$res['SUBJECTOFPROCUREMENT']."</td>"; 
		echo "<td>".$res['TOTALCOST']."</td>";   
		echo "<td>".$res['FISCALMONTH']."</td>"; 
	    echo "<td>".$res['FISCALYEAR']."</td>";	
		echo "<td>".$res['PROCUREMENTSTATUS']."</td>"; 
		echo "<td>".$res['SEQUENCENUMBER']."</td>"; 
		echo "<td>".$res['OFFICERALLOCATED']."</td>"; 
		echo "<td>".$res['ACTION']."</td>";
		  		
	}
	?>
	</tbody>
  </table>  
              </div>
              
              <!-- /.tab-pane -->
              
              
              
              <div class="tab-pane" id="tab_2">
              
 <table id="example1" class="table table-striped table-bordered" style="font-weight:normal;">
        <thead>
        <tr> 
                     <th>ID</th>  
					 <th>INITIATOR</th>   
                     <th>ESTIMATED COST </th>    
                     <th>SEQUENCE NUMBER</th>   
                     <th>ACTION</th> 
                     <th>SERVICE PROVIDER</th>
                     <th>PROFOMA INVOICE.NO. </th> 
                     <th>ACTUAL COST </th> 
                     <th>TAX INVOICE NO.</th>
                     <th>COMPLETIONN CERTIFICATE</th>
                     <th>AMOUNT PAID</th>
                     <th>BALANCE</th>   
        </tr>
        </thead>
        <tfoot>
        <tr> 
                     <th>ID</th>  
					 <th>INITIATOR</th>   
                     <th>ESTIMATED COST </th>    
                     <th>REF NUMBER</th>   
                     <th>ACTION</th> 
                     <th>SUPPLIER</th>
                     <th>PROFOMA  </th> 
                     <th>ACTUAL COST </th> 
                     <th>TAX INVOICE</th>
                     <th>COMP CERT</th>
                     <th>AMOUNT PAID</th>
                     <th>BALANCE</th>   
        </tr>
        </tfoot>
        <tbody> 
          <?php 
include_once("../config/inline/configproc.php"); 
 
$result = mysqli_query($mysqli, "SELECT * FROM procreqn WHERE CORACTION ='AUTHORISED' ORDER BY id DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dts = $res['id']."***".$res['CATEGORY']."***".$res['PROCUREMENTSTATUS']."***".$res['ITEM'];
		echo "<tr>"; 
		echo "<td>".$res['id']."</td>";  
		echo "<td>".$res['RFPUSERNAME']."</td>"; 
		echo "<td>".$res['TOTALCOST']."</td>";     
		echo "<td>".$res['SEQUENCENUMBER']."</td>";  
		echo "<td>".$res['ACTION']."</td>";
		echo "<td>".$res['SUPPLIER']."</td>"; 
		echo "<td>".$res['PROFOMAINVOICENO']."</td>";
		echo "<td>".$res['ACTUALCOST']."</td>"; 	 
		echo "<td>".$res['TAXINVOICENO']."</td>";	
		echo "<td>".$res['COMPLETIONCERT']."</td>";	
		echo "<td>".$res['PAYMENT']."</td>";	
		echo "<td>".$res['BALANCE']."</td>";	
				
	}
	?>
	</tbody>
  </table>  
                 
                
              </div>
              
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
 
 
    </div> 

        </div>
         <div class="col-xs-12"> 
      </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>

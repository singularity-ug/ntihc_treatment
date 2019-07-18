<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>NTIHC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
   <link rel="stylesheet" type="text/css" href="assets/admin_bootstrap/css/bootstrap.css" /> 
    <!-- DATA TABLE CSS -->
    <link href="assets/admin_css/table.css" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="assets/admin_bootstrap/css/bootstrap.css" />

    <link href="assets/admin_css/main.css" rel="stylesheet"> 

    <script type="text/javascript" src=" assets/js/jquery.js"></script>    
    <script type="text/javascript" src=" assets/admin_bootstrap/js/bootstrap.min.js"></script>
    
     <script type="text/javascript" src="assets/js/admin.js"></script>
    <style type="text/css">
      body {
        padding-top: 60px;
		background-color:#ecf0f5;
      }
	  
	  
	  {
                 border-bottom: 2px solid #000;
                 color:#000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 10px;
             	color:#fff;
             }
             table tr:nth-child(odd) {
             background:#000000;
             }
             table tr:nth-child(even) {
                 background:#000000;
             }
    </style>
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
             }
             table tr:nth-child(odd) {
             background:#ecf0f5;
             }
             table tr:nth-child(even) {
                 background:#fff;
             } 

</style> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        
  	<!-- Google Fonts call. Font Used Open Sans --> 
    <!-- start datatables --> 
  <link rel="stylesheet" href="assets/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/datatable/css/buttons.dataTables.min.css">
    
      <script src="assets/datatable/js/jquery-1.12.3.js"></script>
  <script src="assets/datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/datatable/js/bootstrap.min.js"></script>
  <script src="assets/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/datatable/js/buttons.flash.min.js"></script>
  <script src="assets/datatable/js/jszip.min.js"></script>
  <script src="assets/datatable/js/pdfmake.min.js"></script>
  <script src="assets/datatable/js/vfs_fonts.js"></script>
  <script src="assets/datatable/js/buttons.html5.min.js"></script>
  <script src="assets/datatable/js/buttons.print.min.js"></script>
  
    <!-- end datatables -->
    <script>
  $(document).ready(function() {
     $('#example').DataTable({
	    "iDisplayLength": 1,
        dom: 'Bfrtip',
        buttons: [ 
		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
    <!-- start datatables function --> 
    

  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="assets/js/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/js/datatables/jquery.dataTables.min.js"></script>
  			<script type="text/javascript" charset="utf-8">
  			    $(document).ready(function () {
  			        $('#dt1').dataTable();
  			    });
	</script>
 <!-- end datatables -->
    <script>
  $(document).ready(function() {
     $('#example1').DataTable({
	    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [ 
		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
    <!-- start datatables function -->
    
     <!-- end datatables -->
    <script>
  $(document).ready(function() {
     $('#example2').DataTable({
	    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [ 
		{extend :'excel',
		 title:'myfile'
		},
		{extend :'pdf',
		 title:'myfile'
		},
		{extend :'print',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script>
    <!-- start datatables function -->
  </head>
  <body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php" style="margin-left: 237px; color: #fffaf9; font-size: 18px;">
           NAGURU TEENAGE INFORMATION AND HEALTH CENTRE</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav"> 
               <li class="active"><a href="registration_desk.php"><i class="icon-th icon-white"></i> Register</a></li>
              <li><a href="client_management.php"><i class="icon-home icon-white"></i> System dashboard</a></li>  
           
              <li><a href="logut.php"><i class="icon-lock icon-white"></i> Logout</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container" style="height:auto;" >

      <!-- CONTENT -->
      
	<div class="row">
    
		<div class="col-sm-12 col-lg-12" > 
     
                		<div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;color: #000;
font-weight: bold; color:#d70000;">
	SEARCH CLIENT RECORDS BY TABLE FIELDS<span class="sr-only">60% Complete</span> 
		</div>
	    </div>  		  
<!--  <meta http-equiv="refresh" content="10" > -->
 
 <p> </p>  
  
  <div id="work" style="width:100%;">

    <table id="example" class="table table-striped table-bordered" >
        <thead>
          <tr> 
              <th>N0.</th>
              <th>DATE</th>
              <th>NTIHC NO.</th>
                     <th>FIRST NAME</th>
					 <th>LASTNAME</th>
					 <th>SEX</th>   
                     <th>SCHOOL</th> 
                     <th>MOTHER.FN</th> 
					 <th>MOTHER.LN</th> 
                      <th>OLD PID</th
            ></tr>
        </thead>
        <tfoot>
          <tr>
           <th>N0.</th>
              <th>DATE</th>
              <th>NTIHC NO.</th>
                     <th>FIRST NAME</th>
					 <th>LASTNAME</th>
					 <th>SEX</th>   
                     <th>SCHOOL</th> 
                     <th>MOTHER.FN</th> 
					 <th>MOTHER.LN</th> 
                      <th>OLD PID</th>  
            </tr>
        </tfoot>
        <tbody>
        
<?php
require('assets/datatable/config_patientmgt.php');

$sql = "SELECT * FROM cmpatientsnewregistration";

 $res = $conn->query($sql);
$x=1; 
 while($row=$res->fetch_assoc()){ 
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
	    '<td>'.$row['TIMESTAMP'].'</td>'.
	    '<td>'.$row['NTIHCNO'].'</td>'.
       '<td>'.$row['FIRSTNAME'].'</td>'.
       '<td>'.$row['LASTNAME'].'</td>'.
	   '<td>'.$row['SEX'].'</td>'. 
	   '<td>'.$row['SCHOOLINGSTATUS'].'</td>'.
       '<td>'.$row['MOTHERFIRSTNAME'].'</td>'.
       '<td>'.$row['MOTHERLASTNAME'].'</td>'.   
	   '<td>'.$row['OLDPID'].'</td>'.  
   '</tr>';
$x=$x+1;
} 

 ?>
	  </tbody>
  </table> 
      		</div><!-- /row -->
            
            
            
       <!-- CONTENT -->
      
	<div class="row">
		<div class="col-sm-12 col-lg-12"> 
     <br>
         <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;color: #000;
font-weight: bold;">
	VIEW RECORDS BY CURRENT DATE<span class="sr-only">60% Complete</span> 
		</div>
	    </div>  		  
<!--  <meta http-equiv="refresh" content="10" > -->
 
 <p> </p>  
  
  <div id="work" style="width:100%;">

    <table id="example1" class="table table-striped table-bordered" >
        <thead>
          <tr> 
                <th>N0.</th>
              <th>DATE</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>SERVICE TYPE</th>
					 <th>VIST TYPE</th>   
                     <th>DATA TYPE</th> 
                     <th>ACTION</th> 
            </tr>
        </thead>
        <tfoot>
          <tr>
           <th>N0.</th>
              <th>DATE</th>
              <th>NTIHC NO.</th>
                     <th>CLIENT NAME</th>
					 <th>SERVICE TYPE</th>
					 <th>VIST TYPE</th>   
                     <th>DATA TYPE</th> 
                     <th>ACTION</th>  
            </tr>
        </tfoot>
        <tbody>
        
<?php
require('assets/datatable/config_patientmgt.php');

$date = date("Y-m-d").' 00:00:00';
$sql="SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date'"; 

 $res = $conn->query($sql);
$x=1; 
 while($row=$res->fetch_assoc()){ 
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
	    '<td>'.$row['TIMESTAMP'].'</td>'.
	    '<td>'.$row['NTIHCNO'].'</td>'.
       '<td>'.$row['CLIENTNAME'].'</td>'.
       '<td>'.$row['SERVICETYPE'].'</td>'.
	   '<td>'.$row['VISTTYPE'].'</td>'. 
	   '<td>'.$row['DATATYPE'].'</td>'. 
	   '<td><input type="button" class="btn-success"  id="'.$row['RID'].'" onclick="alert(this.id)" value="UPDATE"></td>'.  
   '</tr>';
$x=$x+1;
} 

 ?>
	  </tbody>
  </table>        
      	</div><!-- /container --> 
        
        <!-- CONTENT -->
      
	<div class="row">
		<div class="col-sm-12 col-lg-12"> 
     <br>
         <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-imms" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;color: #000;
font-weight: bold;">
	NEW CLIENTS DEMOGRAPHY BY CURRENT DATE<span class="sr-only">60% Complete</span> 
		</div>
	    </div>  		  
<!--  <meta http-equiv="refresh" content="10" > -->
 
 <p> </p>  
  
  <div id="work" style="width:100%;">

    <table id="example2" class="table table-striped table-bordered" >
        <thead>
          <tr> 
              <th>N0.</th>
              <th>DATE</th>
              <th>NTIHC NO.</th>
                     <th>FIRST NAME</th>
					 <th>LASTNAME</th>
					 <th>SEX</th>   
                     <th>SCHOOL</th> 
                     <th>MOTHER.FN</th> 
					 <th>MOTHER.LN</th> 
                     <th>UPDATE</th> 
            ></tr>
        </thead>
        <tfoot>
          <tr>
           <th>N0.</th>
              <th>DATE</th>
              <th>NTIHC NO.</th>
                     <th>FIRST NAME</th>
					 <th>LASTNAME</th>
					 <th>SEX</th>   
                     <th>SCHOOL</th> 
                     <th>MOTHER.FN</th> 
					 <th>MOTHER.LN</th> 
                      <th>UPDATE</th>  
            </tr>
        </tfoot>
        <tbody>
        
<?php
require('assets/datatable/config_patientmgt.php');
 $date = date("Y-m-d").' 00:00:00';
 $sql="SELECT * FROM cmpatientsnewregistration WHERE TIMESTAMP >='$date'"; 

 $res = $conn->query($sql);
$x=1; 
 while($row=$res->fetch_assoc()){ 
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
	    '<td>'.$row['TIMESTAMP'].'</td>'.
	    '<td>'.$row['NTIHCNO'].'</td>'.
       '<td>'.$row['FIRSTNAME'].'</td>'.
       '<td>'.$row['LASTNAME'].'</td>'.
	   '<td>'.$row['SEX'].'</td>'. 
	   '<td>'.$row['SCHOOLINGSTATUS'].'</td>'.
       '<td>'.$row['MOTHERFIRSTNAME'].'</td>'.
       '<td>'.$row['MOTHERLASTNAME'].'</td>'.   
	  '<td><input type="button" class="btn-success"  id="'.$row['PID'].'" onclick="alert(this.id)" value="UPDATE"></td>'.  
   '</tr>';
$x=$x+1;
} 

 ?>
	  </tbody>
  </table>        
      	</div><!-- /container -->  
                       </div> 
        		
	</div><!-- /footerwrap -->

</body></html>
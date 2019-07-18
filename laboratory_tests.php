<!DOCTYPE html>
 

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="ahr/datatable/css/bootstrap.min.css">
   <link rel="stylesheet" href="ahr/datatable/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="ahr/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="ahr/datatable/css/buttons.dataTables.min.css">

  <script src="ahr/datatable/js/jquery-1.12.3.js"></script>
  <script src="ahr/datatable/js/jquery.dataTables.min.js"></script>
  <script src="ahr/datatable/js/bootstrap.min.js"></script>
  <script src="ahr/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="ahr/datatable/js/dataTables.buttons.min.js"></script>
  <script src="ahr/datatable/js/buttons.flash.min.js"></script>
  <script src="ahr/datatable/js/jszip.min.js"></script>
  <script src="ahr/datatable/js/pdfmake.min.js"></script>
  <script src="ahr/datatable/js/vfs_fonts.js"></script>
  <script src="ahr/datatable/js/buttons.html5.min.js"></script>
  <script src="ahr/datatable/js/buttons.print.min.js"></script>
  <script src="../js/custom.js"></script>

  <script>
  $(document).ready(function() {
     $('#example2').DataTable();
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 10,
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


  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 10,
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
<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
    padding: 8px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
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
             background:#fff;
             }
             table tr:nth-child(even) {
             background:#ecf0f5;
             }

</style>

<!--  <meta http-equiv="refresh" content="10" > -->
</head>
<body style="">
<?php include('ahr/datatable/headerlab.php'); ?>
<left>
  <br /><br /><br /><br />
  
  <p style="text-align:center; font-size:22px; color:#fff; background-color:#000;">LABORATORY</p>
  <div class="col-lg-12"> 
 
  <div class="col-lg-3">  
  <div class="col-lg-15" style="background-color:#fff; height:60px; border:2px solid; border-radius:11px;">
  <p style="text-align:center; color:#000; font-weight:bold;">Incoming lab rqts</p>
  <p style="text-align:center; color:red; font-weight:bold; font-size:20px; margin-top:-14px;"> 
   <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, NTIHCNO FROM lab_hmis_tests WHERE TIMESTAMP >='$date' AND TESTSTATUS ='NOT STARTED' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  </p>
  </div> 
  
  <div class="col-lg-15" >
  <div class="panel-body" style="background-color:#fff; height:60px; border:2px solid; border-radius:11px;">
  <p style="text-align:center; color:#000; font-weight:bold;">Pending </p>
   <p style="text-align:center; color:blue; font-weight:bold; font-size:20px; margin-top:-14px;"> 
    <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, NTIHCNO FROM lab_hmis_tests WHERE TIMESTAMP >='$date' AND TESTSTATUS ='PENDING' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  </p>
  </div></div>
  
  <div class="col-lg-15" >
  <div class="panel-body" style="background-color:#fff; height:60px; border:2px solid; border-radius:11px;">
  <p style="text-align:center; color:#000; font-weight:bold;">Completed </p>
   <p style="text-align:center; color:#29ce29; font-weight:bold; font-size:20px; margin-top:-14px;"> 
   <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id, NTIHCNO FROM lab_hmis_tests WHERE TIMESTAMP >='$date' AND TESTSTATUS ='COMPLETED' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  </p>
  </div>
  </div>
  <br> <br> <br> <br>

   <p style="text-align:left; color:#000; font-weight:bold;">Search Client Lab Test History by NTIHC NO. / Name</p>   
   <div id="work" style="width:100%;">

    <table id="example1" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No</th> 
              <th>NTIHC NO.</th> 
              <th>NAME</th> 
              <th>DISP</th>   
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th> 
              <th>NTIHC NO.</th> 
              <th>NAME</th>  
              <th>DISP</th> 
            </tr>
        </tfoot>
        <tbody>
<?php
require('ahr/php/configpatientmgtdb.php');
 
$sql = "SELECT * FROM lab_hmis_tests ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.    
		'<td>'.$row['NTIHCNO'].'</td>'.  
	      '<td>'.$row['NAME'].'</td>'. 
		     '<td><input type="button" class="btn-success"  id="'.$row['id'].'" onclick="redirect5(this.id)" value="VIEW"></td>'. 
   '</tr>';
$x=$x+1;

 }
 ?>
	  </tbody>
  </table>
      </div>   
  </div>  

  
   <div class="col-lg-14" style="border:2px solid grey; height: auto;border-radius:11px;"> 
<div class="col-lg-12">   
<div class="col-lg-1">
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-lg-9">
<p style="text-align:center; font-size:15px; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:13px; ">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:12px; ">Tel: 0393-216-467</p>
<p style="text-align:center; font-size:12px; ">	LAB REQUEST</p>
</div>
</div>
<div class="col-lg-12"> 
 
  <p style="text-align:left; color:#000; font-weight:bold;">Lab orders  </p>
   <div id="work" style="width:100%;">

 <table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No</th>   
              <th>DATE</th> 
              <th>NAME</th> 
              <th>NTIHC NO.</th>   
              <th>REQUEST UNIT</th> 
              <th>TEST DESC</th>
              <th>INITIATED BY</th>
              <th>STATUS</th>
              <th>ACTION</th>  
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th>   
              <th>DATE</th> 
              <th>NAME</th> 
              <th>NTIHC NO.</th>   
              <th>REQUEST UNIT</th> 
              <th>TEST DESC</th>
              <th>INITIATED BY</th>
              <th>STATUS</th>
              <th>ACTION</th> 
            </tr>
        </tfoot>
        <tbody>
<?php
require('ahr/php/configpatientmgtdb.php');
$date = date("Y-m-d").' 00:00:00';
$sql = "SELECT * FROM lab_hmis_tests WHERE TIMESTAMP >='$date'";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td>'.$x.'</td>'.      
	      '<td>'.$row['DATECREATED'].'</td>'. 
		   '<td>'.$row['NAME'].'</td>'. 
		     '<td>'.$row['NTIHCNO'].'</td>'. 
			  '<td>'.$row['REQUESTINGUNIT'].'</td>'. 
			  '<td>'.$row['TESTDESCRIPTION'].'</td>'. 
			  '<td>'.$row['USERINITIAL'].'</td>'. 
			   '<td>'.$row['TESTSTATUS'].'</td>'. 
		     '<td><input type="button" class="btn-success"  id="'.$row['id'].'" onclick="redirect5(this.id)" value="EDIT"></td>'. 
   '</tr>';
$x=$x+1;

 }
 ?>
	  </tbody>
  </table>
      
   
    </body>
  </html>

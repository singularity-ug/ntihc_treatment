 <?php
session_start();
session_regenerate_id();
$nameofuser = ''; 
$desc       = "";
$dept       = ""; 
$pf       = ""; 
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID']; 
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}
 ?> 
  

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/buttons.dataTables.min.css">

  <script src="js/jquery-1.12.3.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/dataTables.buttons.min.js"></script>
  <script src="js/buttons.flash.min.js"></script>
  <script src="js/jszip.min.js"></script>
  <script src="js/pdfmake.min.js"></script>
  <script src="js/vfs_fonts.js"></script>
  <script src="js/buttons.html5.min.js"></script>
  <script src="js/buttons.print.min.js"></script>
  <script src="../js/custom.js"></script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
		{extend :'copy',
		 title:'myfile'
		},
		{extend :'csv',
		 title:'myfile'
		},
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
                 background:#fff;
             } 

</style> 

<!--  <meta http-equiv="refresh" content="10" > -->
</head>
<body style="">
<?php include('header.php'); ?>
<center>
  <br /><br /><br /><br />
  <br><br>
  <div id="work" style="width:95%;">

    <table id="example" class="table table-striped table-bordered"  style="font-size:90%; " cellspacing="0" width="100%">
        <thead>
          <tr>
              <th>No</th>
              <th>Name</th>
              <th>Position</th>
              <th>Department</th>
              <th>Contract Type</th>
              <th>Line Manager</th>
              <th>Self</th>
              <th>Supervisor</th>
              <th>Agreed</th>
              <th>Date</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th>
              <th>Name</th>
              <th>Position</th>
              <th>Department</th>
              <th>Contract Type</th>
              <th>Line Manager</th>
              <th>Self</th>
              <th>Supervisor</th>
              <th>Agreed</th>
              <th>Date</th>
            </tr>
        </tfoot>
        <tbody>
<?php
require('../config.php');
$sql = "SELECT * FROM appraisals  WHERE `username` = '$nameofuser' ORDER BY id DESC";

 $res = $conn->query($sql);
$x=1;
 while($row=$res->fetch_assoc()){
  echo'<tr>'.
       '<td><input type="button" class="btn-success"  id="'.$row['id'].'" onclick="redirect5(this.id)" value="[]">'.$x.'</td>'.
       '<td>'.$row['fname'].' '.$row['family_name'].'</td>'.
       '<td>'.$row['pos'].'</td>'.
       '<td>'.$row['dept'].'</td>'.
       '<td>'.$row['contract_type'].'</td>'.
       '<td>'.$row['lmgr'].'</td>'.
       '<td>'.$row['o_self'].'</td>'.
       '<td>'.$row['o_sup'].'</td>'.
       '<td>'.$row['o_agreed'].'</td>'.
       '<td>'.$row['d1'] .'</td>'.
   '</tr>';
$x=$x+1;

 }
 ?>
	  </tbody>
  </table>
  <h3><?php echo md5('howare you today'); ?></h3>
      </div>
	  </center>
    </body>
  </html>

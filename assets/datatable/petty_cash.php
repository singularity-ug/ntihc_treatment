<!DOCTYPE html>
<?php

session_start();
session_regenerate_id();
$nameofuser = '';
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
     $('#example').DataTable({
	    "iDisplayLength": 11,
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
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 6px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
           
             table, th , td  {
                 border: 2px solid white;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 12px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#dddddd;
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
  <div id="work" style="width:95%;">

    <table id="example" class="table table-striped table-bordered"  >
        <thead>
          <tr> 
          <th>NO.</th>
                     <th>DATE</th>
                     <th>EXPENDITURE DETAILS</th>
					 <th>VOUCHER-NO.</th>
					 <th>CREDIT</th> 
                     <th>DEBIT</th> 
					 <th>BALANCE</th>
					 <th>BUDGET-LINE</th> 
                     <th>CODE</th> 
					 <th>MONTH</th>
					 <th>FY</th>   
              <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
          <tr>
           
              <th>NO</th>
              <th>DATE</th>
                     <th>EXPENDITURE DETAILS</th>
					 <th>VOUCHER-NO.</th>
					 <th>CREDIT</th> 
                     <th>DEBIT</th> 
					 <th>BALANCE</th>
					 <th>BUDGET LINE</th> 
                     <th>CODE</th> 
					 <th>FISCAL (M)</th>
					 <th>FY</th> 
              <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>
<?php
require('config_dbmultiple.php');

$sql = "SELECT * FROM pettycash";

 $res = $conn->query($sql);
$x=1; $bal = 0;
 while($row=$res->fetch_assoc()){
    $bal=($bal+ intval($row['CREDIT']))-intval($row['DEBIT']);
  echo'<tr>'.
       '<td>'.$x.'</td>'. 
       '<td>'.$row['DATECREATED'].'</td>'.
       '<td>'.$row['EXPENDITURE_DETAILS'].'</td>'.
       '<td>'.$row['VOUCHER_NO'].'</td>'.
       '<td>'.$row['CREDIT'].'</td>'.
       '<td>'.$row['DEBIT'].'</td>'.
       '<td>'.$bal.'</td>'.
      '<td>'.$row['BUDGETLINE'].'</td>'.
	   '<td>'.$row['CODE'].'</td>'.
	   '<td>'.$row['FISCALMONTH'].'</td>'.
	   '<td>'.$row['FY'].'</td>'. 
       '<td><input type="button" class="btn-success"  id="'.$row['UID'].'" onclick="alert(this.id)" value="UPDATE"></td>'.
   '</tr>';
$x=$x+1;
}


 ?>
	  </tbody>
  </table>
  <h2> <?php   echo"BALANCE  : ".$bal; ?></h2>
      </div>
	  </center>
    </body>
  </html>

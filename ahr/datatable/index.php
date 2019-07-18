<?php
session_start();
session_regenerate_id();
$nameofuser = '';
header('location:../index.php');  	 exit();
if(isset($_SESSION['PORT'])){
$portfolio = $_SESSION['PORT'];
if($portfolio=='1'){header('location:../datacapturebuilt.php');}
elseif($portfolio==='PLANNING ENGINEER ELECTRICAL'){header('location:electrical_planning.php');}
elseif($portfolio==='MATERIALS ENGINEER ELCTRICAL'){header('location:electrical_materials.php');}
elseif($portfolio==='IMPLEMENTATION ENGINEER ELECTRICAL'){header('location:electrical_implementation.php');}
elseif($portfolio==='PLANNING ENGINEER MECHANICAL'){header('location:mechanical_planning.php');}
elseif($portfolio==='MATERIALS ENGINEER MECHANICAL'){header('location:mechanical_materials.php');}
else{header('location:../index.php');  	 exit();}
echo 'finished ()';exit();

}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/buttons.dataTables.min.css">

  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-1.12.3.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/dataTables.buttons.min.js"></script>
  <script src="js/buttons.flash.min.js"></script>
  <script src="js/jszip.min.js"></script>
  <script src="js/pdfmake.min.js"></script>
  <script src="js/vfs_fonts.js"></script>
  <script src="js/buttons.html5.min.js"></script>
  <script src="js/buttons.print.min.js"></script>

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

</head>
<body >
  <?php include('header.php'); ?>
<center>
  <div id="work" style="width:95%;">

    <table id="example" class="table table-striped table-bordered"  style="font-size:80%; font-weight: bold;" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th>Job Number</th>
              <th>Subject</th>
              <th>Year</th>
              <th>Order Req</th>
              <th>Work Order</th>
              <th>Work Pack</th>
              <th>Materials</th>
              <th>Procurement</th>
              <th>Delivery</th>
              <th>Implementation</th>
              <th>Status</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Job Number</th>
                <th>Subject</th>
                <th>Year</th>
                <th>Order Req</th>
                <th>Work Order</th>
                <th>Work Pack</th>
                <th>Materials</th>
                <th>Procurement</th>
                <th>Delivery</th>
                <th>Implementation</th>
                <th>Status</th>
            </tr>
        </tfoot>
        <tbody>

<?php

function getIndicator($str123){
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

}

require('../connect/config.php');
$sql = "SELECT * FROM job_tracker_electrical";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
	 echo '<tr>'.
                 '<td>'.$row["JOB_NUMBER"].'</td>'.
                 '<td>'.$row["SUBJECT"].'</td>'.
                 '<td>'.$row["YEAR"].'</td>'.
                 getIndicator($row["JOB_ORDER_REQUEST"]).
                 getIndicator($row["WORK_ORDER"]).
                 getIndicator($row["WORK_PACK"]).
                 getIndicator($row["MATERIALS_WORK_PACK"]).
			        	 getIndicator($row["PROCUREMENT"]).
                 getIndicator($row["MATERIALS_DELIVERY"]).
                 getIndicator($row["IMPLEMENTATION"]).
                 '<td>'.$row["STATUS"].'</td></tr>';

 }

?>

	  </tbody>
      </div>
	  </center>
    </body>
  </html>

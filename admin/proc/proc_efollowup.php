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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="connect/css/bootstrap.min.css">
  <link rel="stylesheet" href="connect/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="connect/css/buttons.dataTables.min.css">

  <script src="connect/js/jquery-1.12.3.js"></script>
  <script src="connect/js/jquery.dataTables.min.js"></script>
  <script src="connect/js/bootstrap.min.js"></script>
  <script src="connect/js/dataTables.bootstrap.min.js"></script>
  <script src="connect/js/dataTables.buttons.min.js"></script>
  <script src="connect/js/buttons.flash.min.js"></script>
  <script src="connect/js/jszip.min.js"></script>
  <script src="connect/js/pdfmake.min.js"></script>
  <script src="connect/js/vfs_fonts.js"></script>
  <script src="connect/js/buttons.html5.min.js"></script>
  <script src="connect/js/buttons.print.min.js"></script>
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
		 title:'myfile',
     customize: function(xlsx) {
               var sheet = xlsx.xl.worksheets['sheet1.xml'];

               $.each(["D","E","F","G","H","I","J","K"], function( ix, lx ){
  //  alert( "Index #" + i + ": " + lx );

               // Loop over the cells in column `F`
               $('row c[r^="'+lx+'"]', sheet).each( function () {
                   // Get the value and strip the non numeric characters
                   if ( $('is t', this).text()==='COMPLETED'||$('is t', this).text()==='PENDING') {
                       $(this).attr( 's', '25' );
                   }
                   //if ( $('is t', this).text().replace(/[^\d]/g, '') * 1 >= 500000 )
                   else if ( $('is t', this).text()==='') {
                       $(this).attr( 's', '20' );
                   }
                   else if ( $('is t', this).text().split('__')[1]==='') {
                       $(this).attr( 's', '35' );
                   }
                   else {
                       $(this).attr( 's', '40' );
                   }
                  });
              });
            }/*,
     exportOptions: {
                modifier: {
                    page: 'current'
                        }
                    }*/
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
  <BR><br>  <BR><br>
<center>
     <div id="work" style="width:95%;"> 
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
$sql = "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND FORWARDTO ='$rm'
                                               GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["JOBNUMBER"].'</td>'.
                 '<td>'.$row["TIMESTAMP"].'</td>'.
                 '<td>'.$row["FISCALYEAR"].'</td>'.
                 getIndicator($row["CORDATE"]).
                 getIndicator($row["CORACTION"]). 
                 getIndicator($row["CONFSTATUS"]).
			     getIndicator($row["CONFDATE"]).
                 getIndicator($row["AOACTION"]).
				 getIndicator($row["PROCUREMENTSTATUS"]).
                 getIndicator($row["OFFICERALLOCATED"]).
                 '<td>'.$row["ORDERSTATUS"].'</td></tr>';

 }

?>

	  </tbody>
      </div>
	  </center>
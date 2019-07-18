 
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  
 
<?php
  require('connect/config.php');
  ?>  
  
  
      <?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stdd2 ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd2=$stdd2. "  " . $row['period'] . "  ";   }
  }
$connect->close();
?> 

<?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stdd23 ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd23=$stdd23. "  " . $row['ratetype'] ."  " . $row['exchangerate'] ."  ";   }
  }
$connect->close();
?> 

<?php
$connect = new mysqli("localhost", "root", "", "dbmultiple");
$stdd234 ="";
if( $result = $connect->query("SELECT * FROM financialperiod WHERE status = 'Active' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd234=$stdd234. "  " . $row['budgetcurrency']. "  ";   }
  }
$connect->close();
?> 
 
 
</head>
<body onLoad="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
         <div class="row" >
        <div class="col-xs-12"> 
               <div class="modal-body">   


               <div class="col-sm-12" style="text-align:left;">
<img src="../assets/img/logsbig.PNG" width="100%" height="100%">
</div>
 
    <center> <p style="color:#000; font-weight:bold;font-size:15px;"> ACTIVITY BUDGET</p> </center>
        
     <table class="table table-bordered">
    <thead>
      <tr  class="">
        <th> Financial period</th>
        <th>  <input type="text"  value="<?php   echo $stdd2; ?>"  class="form-control" readonly="readonly" style="background-color:white;"/>  </th>
         <th> Currency</th>
        <th> <input type="text" value="<?php   echo $stdd234; ?>"  class="form-control" readonly="readonly" style="background-color:white; text-align:center;"/> </th>
         <th> Exchange rate</th>
        <th>  <input type="text" value="<?php   echo $stdd23; ?>" class="form-control" readonly="readonly" 
                                                style="background-color:white;text-align:center;"/> 
                                         </th> 
      </tr>
    </thead> 
  </table> 
    
        
         
    <?php
	include_once '../budget/dbcon.php';
    ?>
   <form class="form-horizontal"style="height:auto;">
   
   
     
    <table class="table table-bordered">
    <thead>
      <tr  class="" style="background-color:#f9f9f9;">
        <th style="border-bottom-color:white; width:10%;">CODE</th>
        <th style="border-bottom-color:white; width:20%;">COST DESCRIPTION</th>  
        <th style="border-bottom-color:white; width:20%;">UNIT TYPE</th>
        <th style="border-bottom-color:white; width:10%;">UNIT/QTY</th>  
        <th style="border-bottom-color:white; width:10%;">UNIT COST</th>
        <th style="border-bottom-color:white; width:10%;">TOTAL UGX</th> 
        <th style="border-bottom-color:white; width:10%;">TOTAL $USD</th> 
        <th style="border-bottom-color:white; width:10%;">ACTIVITY TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      
       <td> x</td>
       <td> w</td>
       <td> x</td>
       <td> w</td>
       <td> x</td>
       <td> w</td>
       <td> x</td> 
       <td> x</td> 
       </tr>
      <tr>
      
       <td> x</td>
       <td> w</td>
       <td> x</td>
       <td> w</td>
       <td> x</td>
       <td> w</td>
       <td> x</td> 
       <td> x</td> 
       </tr>
      <tr>
      
       <td> x</td>
       <td> w</td>
       <td> x</td>
       <td> w</td>
       <td> x</td>
       <td> w</td>
       <td> x</td> 
       <td> x</td> 
       </tr>
      <tr>
      
      <?php
	$res = $MySQLiconn->query("SELECT * FROM budget WHERE periodstatus = 'Active' AND approval = 'Pending'   ");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
             
        <td> <?php echo $row['detailscode']; ?>  </td> 
        <td> <?php echo $row['budgetdetails']; ?> </td> 
        <td> <?php echo $row['unit_type']; ?>  </td>
        <td> <?php echo $row['quantity']; ?>  </td>
        <td> <?php echo $row['unit_cost']; ?>  </td>
        <td> <?php echo $row['totalcost']; ?> </td> 
        <td> <?php echo $row['dollarate']; ?>  </td>
        <td>  </td> 
      </tr>
   <?php
		}
	}
	else
	{
		?>
        <tr> 
       
        <?php
	}
?>

    </tr>
        <tr>
        <td> xx1 </td>
        <td>  </td> 
        <td>  </td>
        <td>  </td> 
        <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>  </td> 
      </tr>
      <tr>
        <td> xx2 </td>
        <td>  </td> 
        <td>  </td> 
        <td>  </td>
        <td>  </td> 
        <td>  </td>
        <td>  </td>
        <td>  </td> 
      </tr>
      <tr>
        <td> xx3 </td>
        <td>  </td>
        <td>  </td> 
        <td>  </td>
        <td>  </td> 
        <td>  </td>
        <td>  </td> 
        <td>  </td> 
      </tr> 
    </tbody>
  </table> 
  
   
      
        
        
        <!---start----->
        
               
			 
			
 

</table>
        <!-----end------>
        </td> 
      </tr>
      <tr>
        <td><b>20 - 24 YRS</b></td>
        <td></td> 
        <td></td>
      </tr>
      <tr>
        <td><b>ABOVE 14 YRS</b></td>
        <td></td> 
        <td></td>
      </tr>
       <tr>
        <td style="text-align:right"><b>TOTALS </b></td>
        <td></td> 
        <td></td>
      </tr>
    </tbody>
  </table>


              
              
              
                </div></div>
                
                </div>
                

                <div class="col-xs-12" >
               

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

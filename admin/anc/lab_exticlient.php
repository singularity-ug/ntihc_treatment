 
  <?php
  $id = $_GET['q']; 
  $DATECREATED = '';
  $TIMESTAMP = '';
  $NAME = '';
  $NTIHCNO  = '';
  $USERINITIAL = '';
  $TESTDATE = '';
  $AGE1 = '';  
  $SEX = ''; 
  $SCHOOLING=''; 
  $MARITALSTATUS='';
  $DISTRICT='';
  $MARITALSTATUS='';
  $FINALREACTIVITY='';
  $VISTID=''; 

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM laboratory  WHERE `NTIHCNO` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $FINALREACTIVITY = $row['FINALREACTIVITY'];
     $DATECREATED = $row['DATECREATED'];  
     $TIMESTAMP = $row['TIMESTAMP'];
     $NTIHCNO  = $row['NTIHCNO'];
     $USERINITIAL = $row['USERINITIAL']; 
	 $NAME = $row['NAME'];  $VISTID = $row['VISTID'];
     $TESTDATE = $row['TESTDATE'];
     $AGE1 = $row['AGE1'];
     $SEX = $row['SEX'];  
     $SCHOOLING = $row['SCHOOLING']; 
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $MARITALSTATUS = $row['MARITALSTATUS'];  
      }

  ?> 
 
  
 
   
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>.</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../admin/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../admin/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../admin/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../admin/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

 
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
             }
             table tr:nth-child(odd) {
             background:transparent;
             }
             table tr:nth-child(even) {
             background:transparent;
             }


</style>

<body class="hold-transition skin-blue sidebar-mini" style="background-color:transparent;">  
</head>
 
        <div class="row"> 
	    <?php
					$a=mysqli_query($conn,"select * from laboratory where NTIHCNO='$id'");
					$arow=mysqli_fetch_array($a); 
				?> 
													 
	        
			  <form class="form-horizontal" action="lab_results_quit.php" method="POST"> 
			  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
		<thead> 
		<tr>   
                  <input type="hidden" id="VISTID" name="VISTID" value="<?php  echo $VISTID; ?>" > 
				  <input type="hidden" id="ACTION" name="ACTION" value="REVIEWED-ANC UNIT" >     
        <td style="width:100%;border:0px;">   </td>  
           </tbody>
           </table>
		   <center>
		   <input type="image" name="submit" id="button" src="../../databaseicons/delete5.jpg" width="50" height="45" style="background-color:transparent;" 
				 data-toggle="tooltip" title="Check out"/> 
		    </center></form>
              
		
		
		
		 
	 <br>
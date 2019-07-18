<?php
$conn1  = new mysqli("localhost", "root", "toor2", "dbtollfree"); 


function gettotals($conns,$sql1,$sex){  
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
return  $res->num_rows;
}

function getages($conns,$sql1,$sex){ 
     $age=array(); 
	 $age[0] =0; $age[1] =0; $age[2] =0; $age[3] =0; $age[4] =0; $age[5] =0;
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
	 while($row=$res->fetch_assoc()){
	     if($row['AGE']=='10-14'){ $age[0] = $age[0]+1;}
	 elseif($row['AGE']=='15-19'){ $age[1] = $age[1]+1;}
	 elseif($row['AGE']=='20-24'){ $age[2] = $age[2]+1;}
	 elseif($row['AGE']=='ABOVE 24'){ $age[3] = $age[3]+1;}
	 elseif($row['AGE']=='10-19'){ $age[4] = $age[4]+1;}
	 elseif($row['AGE']=='20-24'){ $age[5] = $age[5]+1;}
	 }
return  $age;

} 

function getmonthtotals($conns,$sql100,$month){  
     $sql100   = $sql100."AND FISCALMONTH = '".$month."'"; 
     $res  = $conns->query($sql1);
return  $res->num_rows;
} 


function getmonths($conns,$sql100,$month){ 
     $age=array(); 
	 $age[0] =0; $age[1] =0; $age[2] =0; $age[3] =0; $age[4] =0; $age[5] =0;
     $sql100   = $sql100."AND FISCALMONTH = '".$month."'"; 
     $res  = $conns->query($sql100);
	 while($row=$res->fetch_assoc()){
	     if($row['AGE']=='10-14'){ $age[0] = $age[0]+1;}
	 elseif($row['AGE']=='15-19'){ $age[1] = $age[1]+1;}
	 elseif($row['AGE']=='20-24'){ $age[2] = $age[2]+1;}
	 elseif($row['AGE']=='ABOVE 24'){ $age[3] = $age[3]+1;}
	 elseif($row['AGE']=='10-19'){ $age[4] = $age[4]+1;}
	 elseif($row['AGE']=='20-24'){ $age[5] = $age[5]+1;}
	 }
return  $age;

}  


if(isset($_POST['edate'])){
  $d1 = $_POST['sdate'].' 00:00:00';
  $d2 = $_POST['edate'].' 23:59:59';
$sql =  "SELECT * FROM `tollfree` GROUP BY PHONECONTACT HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
 
$sql021 =  "SELECT * FROM `tollfree` GROUP BY PHONECONTACT HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
 
$sql031 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='HCT' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql032 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='STI' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";  
$sql033 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='MEDICAL' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql034 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='HCG' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql035 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='FP' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql036 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='ANC' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql037 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='PNC' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql038 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='PAC' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql039 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='SGBV' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql0310 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='GENERAL COUNSELLING' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql0311 = " SELECT * FROM tollfree_problems WHERE PROBLEM ='TOLLFREE' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";

$sql041 = " SELECT * FROM tollfree WHERE DISTRICT ='KAMPALA' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql042 = " SELECT * FROM tollfree WHERE DISTRICT ='WAKISO' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";  
$sql043 = " SELECT * FROM tollfree WHERE DISTRICT ='MUKONO' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql044 = " SELECT * FROM tollfree WHERE DISTRICT ='KAYUNGA' HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 

$sql01 = "SELECT * FROM `tollfree` HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 

  
}
 
?> 
 
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> .</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
  <link rel="stylesheet" href="admin/assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="admin/assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="admin/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="admin/assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="admin/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  
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
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
  
</head> 
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
       <body class="  ">
        <script>
function myFunction() {
    window.print();
}
</script>
        <div class="col-xs-12">  
        <div class="panel-body">
       <div class="container fluid" style="width:90%;"> 
 
        <img src="assets/img/logsbig.PNG" width="100%" height="30%"> 
      <center> <p style="color:#000; font-weight:bold;font-size:12px;">TOLLFREE REPORT FOR THE PERIOD BETWEEN</p> </center> 
      
<center><form class="form-inline"  action="cmreport_tollfree.php" method="post">
 <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 20%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                     <span class="sr-only">35% Complete (success)</span></div>
                     
                    <div class="progress-bar progress-bar-success" style="width: 29%;  color:#000; text-align:right; font-weight:bold; background-color:#fff;"> 
                  START DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  
    <span class="sr-only">35% Complete (success)</span></div>  
                     
                     
                   <div class="progress-bar progress-bar-success" style="width: 2%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                     <span class="sr-only">35% Complete (success)</span></div>   
                     
                    <div class="progress-bar progress-bar-success" style="width: 29%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                 &nbsp;&nbsp;&nbsp; END DATE
    <span class="sr-only">35% Complete (success)</span></div>  
                   
                   <div class="progress-bar progress-bar-success" style="width: 20%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;">  
   <span class="sr-only">35% Complete (success)</span></div>  
                   
                   </div> 
         
         
         <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 20%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                    <input type="text" name="" style="width:100%; border:0px; background-color:#fff;"> 
                     <span class="sr-only">35% Complete (success)</span></div>
                     
                    <div class="progress-bar progress-bar-success" style="width: 29%;  color:#000; text-align:right; font-weight:bold; background-color:#fff;"> 
                   <input type="date" name="sdate" value="<?php  if(isset($_POST['sdate'])){echo $_POST['sdate'];} else{echo "";}   ?>" class="form-control" id="sdate" 
    style="font-weight:bold; width:100%; text-align:right;  border:0px; background-color:#fff;"> </span>
    <span class="sr-only">35% Complete (success)</span></div>  
                     
                     
                   <div class="progress-bar progress-bar-success" style="width:2%; color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                    <input type="text" name="" style="width:100%; border:0px; background-color:#fff;"> 
                      <span class="sr-only">35% Complete (success)</span></div>   
                     
                    <div class="progress-bar progress-bar-success" style="width: 29%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                    <input type="date" name="edate"  value="<?php  if(isset($_POST['sdate'])){echo $_POST['edate'];} else{echo "";}   ?>" class="form-control" id="edate"
   style="font-weight:bold; width:100%; text-align:left; border:0px; background-color:#fff;">
    <span class="sr-only">35% Complete (success)</span></div>  
                   
                   <div class="progress-bar progress-bar-success" style="width: 20%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                     <input type="submit" name="button" class="btn btn-default" Value="Generate" style="height:21px; width:100%; border:0px; background-color:#fff;" /> 
   <span class="sr-only">35% Complete (success)</span></div>  
                   
                   </div> 
   
 
   
</form></center> 

  <BR /><BR />
<form> 
<?php  
$mal   = getages($conn1,$sql01,'MALE');
$fmal  = getages($conn1,$sql01,'FEMALE');
 
?>

<?php  
$july   = getmonths($conn1,$sql01,'07');
$aug    = getmonths($conn1,$sql01,'08');
$sept   = getmonths($conn1,$sql01,'09');
$oct    = getmonths($conn1,$sql01,'10');
$nov    = getmonths($conn1,$sql01,'11');
$dec    = getmonths($conn1,$sql01,'12');
$jan    = getmonths($conn1,$sql01,'01');
$feb    = getmonths($conn1,$sql01,'02');
$mar    = getmonths($conn1,$sql01,'03');
$april  = getmonths($conn1,$sql01,'04');
$may    = getmonths($conn1,$sql01,'05');
$jun    = getmonths($conn1,$sql01,'06'); 
?>



 
  <p>  Number of young people calling on tollfree by age and gender</p> 
  <table class="table table-bordered">
    <thead>
      <tr  class="success">
        <th>GROUP</th>
        <th style="text-align:center;">FEMALE</th>
        <th style="text-align:center;">MALE</th>
        <th style="text-align:center;">TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td><B>10 - 14 YRS</B></td>
        <td style="text-align:center;"><?php echo $fmal[0]; ?></td>
        <td style="text-align:center;"><?php echo $mal[0]; ?></td>
        <td style="text-align:center;"><?php echo $mal[0] + $fmal[0]; ?> </td>
      </tr>
      <tr>
        <td><b>15 - 19 YRS</b></td>
        <td style="text-align:center;"><?php echo $fmal[1]; ?></td>
        <td style="text-align:center;"><?php echo $mal[1]; ?></td>
        <td style="text-align:center;"><?php echo $mal[1] + $fmal[1]; ?></td>
      </tr>
      <tr>
        <td><b>20 - 24 YRS</b></td>
        <td style="text-align:center;"><?php echo $fmal[2]; ?></td>
        <td style="text-align:center;"><?php echo $mal[2]; ?></td>
        <td style="text-align:center;"><?php echo $mal[2] + $fmal[2]; ?></td>
      </tr>
      <tr>
        <td><b>ABOVE 24 YRS</b></td>
        <td style="text-align:center;"><?php echo $fmal[3]; ?></td>
        <td style="text-align:center;"><?php echo $mal[3]; ?></td>
        <td style="text-align:center;"><?php echo $mal[3] + $fmal[3]; ?></td>
      </tr>
      <tr>
        <td style="text-align:right"><b>TOTALS </b></td>
        <td style="text-align:center;"><?php echo ($fmal[0] + $fmal[1]+$fmal[2] + $fmal[3]); ?></td>
        <td style="text-align:center;"><?php echo ($mal[0] + $mal[1]+$mal[2] + $mal[3]); ?></td>
        <td style="text-align:center;"><?php echo ($mal[0] + $mal[1]+$mal[2] + $mal[3]  + $fmal[0] + $fmal[1]+$fmal[2] + $fmal[3]); ?></td>
      </tr>
    </tbody>
  </table>
  <BR />   <BR />


    <p>Number of calls by months</p> 
  <table class="table table-bordered">
    <thead>
      <tr  class="success">
        <th>GROUP</th>
        <th>JULY</th>
        <th>AUG</th>
        <th>SEPT</th>
        <th>OCT</th>
        <th>NOV</th>
        <th>DEC</th>
        <th>JAN</th>
        <th>FEB</th>
        <th>MARCH</th>
        <th>APRIL</th>
        <th>MAY</th>
        <th>JUNE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>10 - 14 YRS</B></td>
         <td style="text-align:center;"><?php echo $july[0]; ?></td>
         <td style="text-align:center;"><?php echo $aug[0]; ?></td>
         <td style="text-align:center;"><?php echo $sept[0]; ?></td>
         <td style="text-align:center;"><?php echo $oct[0]; ?></td>
         <td style="text-align:center;"><?php echo $nov[0]; ?></td>
         <td style="text-align:center;"><?php echo $dec[0]; ?></td>
         <td style="text-align:center;"><?php echo $jan[0]; ?></td>
         <td style="text-align:center;"><?php echo $feb[0]; ?></td>
         <td style="text-align:center;"><?php echo $mar[0]; ?></td>
         <td style="text-align:center;"><?php echo $april[0]; ?></td>
         <td style="text-align:center;"><?php echo $may[0]; ?></td>
         <td style="text-align:center;"><?php echo $jun[0]; ?></td>
      </tr>
      <tr>
        <td><b>15 - 19 YRS</b></td>
        <td style="text-align:center;"><?php echo $july[1]; ?></td>
         <td style="text-align:center;"><?php echo $aug[1]; ?></td>
         <td style="text-align:center;"><?php echo $sept[1]; ?></td>
         <td style="text-align:center;"><?php echo $oct[1]; ?></td>
         <td style="text-align:center;"><?php echo $nov[1]; ?></td>
         <td style="text-align:center;"><?php echo $dec[1]; ?></td>
         <td style="text-align:center;"><?php echo $jan[1]; ?></td>
         <td style="text-align:center;"><?php echo $feb[1]; ?></td>
         <td style="text-align:center;"><?php echo $mar[1]; ?></td>
         <td style="text-align:center;"><?php echo $april[1]; ?></td>
         <td style="text-align:center;"><?php echo $may[1]; ?></td>
         <td style="text-align:center;"><?php echo $jun[1]; ?></td>
      </tr>
      <tr>
        <td><b>20 - 24 YRS</b></td>
         <td style="text-align:center;"><?php echo $july[2]; ?></td>
         <td style="text-align:center;"><?php echo $aug[2]; ?></td>
         <td style="text-align:center;"><?php echo $sept[2]; ?></td>
         <td style="text-align:center;"><?php echo $oct[2]; ?></td>
         <td style="text-align:center;"><?php echo $nov[2]; ?></td>
         <td style="text-align:center;"><?php echo $dec[2]; ?></td>
         <td style="text-align:center;"><?php echo $jan[2]; ?></td>
         <td style="text-align:center;"><?php echo $feb[2]; ?></td>
         <td style="text-align:center;"><?php echo $mar[2]; ?></td>
         <td style="text-align:center;"><?php echo $april[2]; ?></td>
         <td style="text-align:center;"><?php echo $may[2]; ?></td>
         <td style="text-align:center;"><?php echo $jun[2]; ?></td>
      </tr>
      <tr>
        <td><b>ABOVE 24 YRS</b></td>
        <td style="text-align:center;"><?php echo $july[3]; ?></td>
         <td style="text-align:center;"><?php echo $aug[3]; ?></td>
         <td style="text-align:center;"><?php echo $sept[3]; ?></td>
         <td style="text-align:center;"><?php echo $oct[3]; ?></td>
         <td style="text-align:center;"><?php echo $nov[3]; ?></td>
         <td style="text-align:center;"><?php echo $dec[3]; ?></td>
         <td style="text-align:center;"><?php echo $jan[3]; ?></td>
         <td style="text-align:center;"><?php echo $feb[3]; ?></td>
         <td style="text-align:center;"><?php echo $mar[3]; ?></td>
         <td style="text-align:center;"><?php echo $april[3]; ?></td>
         <td style="text-align:center;"><?php echo $may[3]; ?></td>
         <td style="text-align:center;"><?php echo $jun[3]; ?></td>
      </tr>
       <tr>
        <td style="text-align:right"><b>TOTALS </b></td>
        <td style="text-align:center;"><?php echo ($july[0] + $july[1]+$july[2] + $july[3]); ?></td>
        <td style="text-align:center;"><?php echo ($aug[0] + $aug[1]+$aug[2] + $aug[3]); ?></td>
        <td style="text-align:center;"><?php echo ($sept[0] + $sept[1]+$sept[2] + $sept[3]); ?></td>
        <td style="text-align:center;"><?php echo ($oct[0] + $oct[1]+$oct[2] + $oct[3]); ?></td>
        <td style="text-align:center;"><?php echo ($nov[0] + $nov[1]+$nov[2] + $nov[3]); ?></td>
        <td style="text-align:center;"><?php echo ($dec[0] + $dec[1]+$dec[2] + $dec[3]); ?></td>
        <td style="text-align:center;"><?php echo ($jan[0] + $jan[1]+$jan[2] + $jan[3]); ?></td>
        <td style="text-align:center;"><?php echo ($feb[0] + $feb[1]+$feb[2] + $feb[3]); ?></td>
        <td style="text-align:center;"><?php echo ($mar[0] + $mar[1]+$mar[2] + $mar[3]); ?></td>
        <td style="text-align:center;"><?php echo ($april[0] + $april[1]+$april[2] + $april[3]); ?></td>
        <td style="text-align:center;"><?php echo ($may[0] + $may[1]+$may[2] + $may[3]); ?></td>
        <td style="text-align:center;"><?php echo ($jun[0] + $jun[1]+$jun[2] + $jun[3]); ?></td>
      </tr>
    </tbody>
  </table>


 <BR />   <BR />


    <p>Number of callers by reason for calling</p>
  <table class="table table-bordered">
    <thead>
      <tr  class="success">
        <th>GROUP</th>
        <th style="text-align:center;">FEMALE</th>
        <th style="text-align:center;">MALE</th>
        <th style="text-align:center;">TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>HCT</B></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql031,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql031,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql031,'FEMALE')+gettotals($conn1,$sql031,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>STI</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql032,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql032,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql032,'FEMALE')+gettotals($conn1,$sql032,'MALE')):"");?></td>
      </tr>
      </tr>
      <tr>
        <td><b>MEDICAL</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql033,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql033,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql033,'FEMALE')+gettotals($conn1,$sql033,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>HCG</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql034,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql034,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql034,'FEMALE')+gettotals($conn1,$sql034,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>FP </b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql035,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql035,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql035,'FEMALE')+gettotals($conn1,$sql035,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>ANC</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql036,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql036,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql036,'FEMALE')+gettotals($conn1,$sql036,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>PNC</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql037,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql037,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql037,'FEMALE')+gettotals($conn1,$sql037,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>PAC</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql038,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql038,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql038,'FEMALE')+gettotals($conn1,$sql038,'MALE')):"");?></td> 
      </tr>
       <tr>
        <td><b>GENERAL COUSELLING</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql0310,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql0310,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql0310,'FEMALE')+gettotals($conn1,$sql0310,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>TOLLFREE</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql0311,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql0311,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql0311,'FEMALE')+gettotals($conn1,$sql0311,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>SGBV</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql039,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql039,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql039,'FEMALE')+gettotals($conn1,$sql039,'MALE')):"");?></td>
      </tr>
       <tr>
        <td style="text-align:right"><b>TOTALS : </b></td>
       <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql031,'FEMALE')+gettotals($conn1,$sql032,'FEMALE')
	   +gettotals($conn1,$sql033,'FEMALE')+gettotals($conn1,$sql034,'FEMALE')+gettotals($conn1,$sql035,'FEMALE')+gettotals($conn1,$sql036,'FEMALE')
	   +gettotals($conn1,$sql037,'FEMALE')+gettotals($conn1,$sql038,'FEMALE')+gettotals($conn1,$sql039,'FEMALE')+gettotals($conn1,$sql0310,'FEMALE')
	   +gettotals($conn1,$sql0311,'FEMALE') 
	   ):"");?></td>
       
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql031,'MALE')+gettotals($conn1,$sql032,'MALE')
	   +gettotals($conn1,$sql033,'MALE')+gettotals($conn1,$sql034,'MALE')+gettotals($conn1,$sql035,'MALE')+gettotals($conn1,$sql036,'MALE')
	   +gettotals($conn1,$sql037,'MALE')+gettotals($conn1,$sql038,'MALE')+gettotals($conn1,$sql039,'MALE')+gettotals($conn1,$sql0310,'MALE')
	   +gettotals($conn1,$sql0311,'MALE') 
	   ):"");?></td>
        
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql031,'FEMALE')+gettotals($conn1,$sql032,'FEMALE')
	   +gettotals($conn1,$sql033,'FEMALE')+gettotals($conn1,$sql034,'FEMALE')+gettotals($conn1,$sql035,'FEMALE')+gettotals($conn1,$sql036,'FEMALE')
	   +gettotals($conn1,$sql037,'FEMALE')+gettotals($conn1,$sql038,'FEMALE')+gettotals($conn1,$sql039,'FEMALE')+gettotals($conn1,$sql0310,'FEMALE')
	   +gettotals($conn1,$sql0311,'FEMALE')
	   +gettotals($conn1,$sql031,'MALE')+gettotals($conn1,$sql032,'MALE')
	   +gettotals($conn1,$sql033,'MALE')+gettotals($conn1,$sql034,'MALE')+gettotals($conn1,$sql035,'MALE')+gettotals($conn1,$sql036,'MALE')
	   +gettotals($conn1,$sql037,'MALE')+gettotals($conn1,$sql038,'MALE')+gettotals($conn1,$sql039,'MALE')+gettotals($conn1,$sql0310,'MALE')
	   +gettotals($conn1,$sql0311,'MALE') 
	   ):"");?></td>
      </tr>
    </tbody>
  </table>
 <BR>

 <p>Number of callers by gender and geographical location</p>  
  <table class="table table-bordered">
    <thead>
      <tr  class="success">
        <th>GROUP</th>
        <th style="text-align:center;">FEMALE</th>
        <th style="text-align:center;">MALE</th>
        <th style="text-align:center;">TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>KAMPALA</B></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql041,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql041,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql041,'FEMALE')+gettotals($conn1,$sql041,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>WAKISO</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql042,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql042,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql042,'FEMALE')+gettotals($conn1,$sql042,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>MUKONO</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql043,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql043,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql043,'FEMALE')+gettotals($conn1,$sql043,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>KAYUNGA</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql044,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql044,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql044,'FEMALE')+gettotals($conn1,$sql044,'MALE')):"");?></td>
      </tr>
       <tr>
        <td style="text-align:right"><b>TOTALS </b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql041,'FEMALE')+gettotals($conn1,$sql042,'FEMALE')
		+gettotals($conn1,$sql043,'FEMALE')+gettotals($conn1,$sql044,'FEMALE') 
		):"");?></td>
        
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql041,'MALE')+gettotals($conn1,$sql042,'MALE')
		+gettotals($conn1,$sql043,'MALE')+gettotals($conn1,$sql044,'MALE') 
		):"");?></td>
        
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql041,'FEMALE')+gettotals($conn1,$sql042,'FEMALE')
		+gettotals($conn1,$sql043,'FEMALE')+gettotals($conn1,$sql044,'FEMALE') 
		+gettotals($conn1,$sql041,'MALE')+gettotals($conn1,$sql042,'MALE')
		+gettotals($conn1,$sql043,'MALE')+gettotals($conn1,$sql044,'MALE') 
		):"");?></td>
      </tr>
    </tbody>
  </table>
  <BR />  
  
  <center><button onClick="myFunction()" >Print </button></center>&nbsp; &nbsp; 
      <a href="admin/sys_dashboard.php"> <span class="glyphicon glyphicon-log-in"></span> Dashboard</a></center>
<br>
  
  </form>
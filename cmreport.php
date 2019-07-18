<?php
$conn1  = new mysqli("localhost", "root", "toor2", "dbtollfree");
$conn2 = new mysqli("localhost", "root", "toor2", "patientmgt");


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
	      if($row['AGE_GROUP']=='10-14'){ $age[0] = $age[0]+1;}
	 elseif($row['AGE_GROUP']=='15-19'){ $age[1] = $age[1]+1;}
	 elseif($row['AGE_GROUP']=='20-24'){ $age[2] = $age[2]+1;}
	 elseif($row['AGE_GROUP']=='ABOVE 24'){ $age[3] = $age[3]+1;}
	 elseif($row['AGE_GROUP']=='10-19'){ $age[4] = $age[4]+1;}
	 elseif($row['AGE_GROUP']=='20-24'){ $age[5] = $age[5]+1;}
	 }
return  $age;

}


function getagess_episode($conns,$sql1,$sex){ 
     $age=array(); 
	 $age[0] =0; $age[1] =0; $age[2] =0; $age[3] =0; $age[4] =0; $age[5] =0;
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
	 while($row=$res->fetch_assoc()){
	 if(explode('__',$row['SERVICE_EPISODE'])[1]=='1'){
	     if($row['AGE_GROUP']=='10-14'){ $age[0] = $age[0]+1;}
	 elseif($row['AGE_GROUP']=='15-19'){ $age[1] = $age[1]+1;}
	 elseif($row['AGE_GROUP']=='20-24'){ $age[2] = $age[2]+1;}
	 elseif($row['AGE_GROUP']=='ABOVE 24'){ $age[3] = $age[3]+1;}
	 elseif($row['AGE_GROUP']=='10-19'){ $age[4] = $age[4]+1;}
	 elseif($row['AGE_GROUP']=='20-24'){ $age[5] = $age[5]+1;}
	 }
	 }
return  $age;

}




if(isset($_POST['edate'])){
  $d1 = $_POST['sdate'].' 00:00:00';
  $d2 = $_POST['edate'].' 23:59:59';
$sql  = "SELECT * FROM `hct_counselling_andtesting` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql2 = "SELECT * FROM `counsellingservices` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql0 = "SELECT * FROM `tollfree` GROUP BY PHONECONTACT HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql3 = "SELECT * FROM `clientsexamination` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql4 = "SELECT * FROM `hcg` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql5 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql6 = "SELECT * FROM `antenatal` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql7 = "SELECT * FROM `postnatal_care` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql8 = "SELECT * FROM `abortioncare` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql9 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 
$sql01 = "SELECT * FROM `cmpatientsregistration` HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";  
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
      <div class="row">
        <div class="col-xs-12">  
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%"> 
     <center> <legend style="color:#000; font-weight:bold;font-size:13px;"> CLIENT MANAGEMENT REPORT FOR THE PERIOD BETWEEN</legend> </center> 
          
      
<center> <form class="form-inline"  action="cm_general.php" method="post">


 <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 20%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                     <span class="sr-only">35% Complete (success)</span></div>
                     
                    <div class="progress-bar progress-bar-success" style="width: 29%;  color:#000; text-align:right; font-weight:bold; background-color:#fff;"> 
                  Start date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <span class="sr-only">35% Complete (success)</span></div>  
                     
                     
                   <div class="progress-bar progress-bar-success" style="width: 2%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                     <span class="sr-only">35% Complete (success)</span></div>   
                     
                    <div class="progress-bar progress-bar-success" style="width: 29%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                  &nbsp; End date
    <span class="sr-only">35% Complete (success)</span></div>  
                   
                   <div class="progress-bar progress-bar-success" style="width: 20%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;">  
   <span class="sr-only">35% Complete (success)</span></div>  
                   
                   </div> 
   


   <div class="progress">
                   <div class="progress-bar progress-bar-success" style="width: 20%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                     <span class="sr-only">35% Complete (success)</span></div>
                     
                    <div class="progress-bar progress-bar-success" style="width: 29%;  color:#000; text-align:right; font-weight:bold; background-color:#fff;"> 
                  <input type="date" name="sdate" 
   value="<?php  if(isset($_POST['sdate'])){echo $_POST['sdate'];} else{echo "";} ?>" class="form-control" id="sdate" 
    style="font-weight:bold; width:100%; text-align:right; background-color:#fff;"> </span>
    <span class="sr-only">35% Complete (success)</span></div>  
                     
                     
                   <div class="progress-bar progress-bar-success" style="width:2%; color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                     <span class="sr-only">35% Complete (success)</span></div>   
                     
                    <div class="progress-bar progress-bar-success" style="width: 29%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                   <input type="date" name="edate"  
                    value="<?php  if(isset($_POST['sdate'])){echo $_POST['edate'];} else{echo "";} ?>" class="form-control" id="edate"
   style="font-weight:bold; width:100%; text-align:left;background-color:#fff;">
    <span class="sr-only">35% Complete (success)</span></div>  
                   
                   <div class="progress-bar progress-bar-success" style="width: 20%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;"> 
                     <input type="submit" name="button" class="btn btn-default" Value="Generate" style="height:21px;" />  
   <span class="sr-only">35% Complete (success)</span></div>  
                   
                   </div> 
   
 
  
</form></center>

  <BR />
  <BR /><BR />
<form>
<?php 

$mal   = getages($conn2,$sql01,'MALE');
$fmal  = getages($conn2,$sql01,'FEMALE');


$mal1  = getagess_episode($conn2,$sql01,'MALE');
$fmal1 = getagess_episode($conn2,$sql01,'FEMALE');

?>

  <p>NUMBER OF YOUNG PEOPLE ACCESSING SRH SERVICES BY AGE GROUP AND GENDER</p>
 <table class="table table-bordered">
    <thead>
      <tr  class="success">
        <th>GROUP</th>
        <th>FEMALE</th>
        <th>MALE</th>
        <th>TOTAL</th>
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


    <p>NUMBER OF YOUNG PEOPLE ACCESSING SRH FOR IST TIME SERVICES BY AGE GROUP AND GENDER</p>
 <table class="table table-bordered">
    <thead>
      <tr  class="success">
        <th>GROUP</th>
        <th>FEMALE</th>
        <th>MALE</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>10 - 14 YRS</B></td>
        <td style="text-align:center;"><?php echo $mal1[0]; ?></td>
        <td style="text-align:center;"><?php echo $fmal1[0]; ?></td>
        <td style="text-align:center;"><?php echo $mal1[0] + $fmal1[0]; ?></td>
      </tr>
      <tr>
        <td><b>15 - 19 YRS</b></td>
        <td style="text-align:center;"><?php echo $mal1[1]; ?></td>
        <td style="text-align:center;"><?php echo $fmal1[1]; ?></td>
        <td style="text-align:center;"><?php echo $mal1[1] + $fmal1[1]; ?></td>
      </tr>
      <tr>
        <td><b>20 - 24 YRS</b></td>
        <td style="text-align:center;"><?php echo $mal1[2]; ?></td>
        <td style="text-align:center;"><?php echo $fmal1[2]; ?></td>
        <td style="text-align:center;"><?php echo $mal1[2] + $fmal1[2]; ?></td>
      </tr>
      <tr>
        <td><b>ABOVE 24 YRS</b></td>
        <td style="text-align:center;"><?php echo $mal1[3]; ?></td>
        <td style="text-align:center;"><?php echo $fmal1[3]; ?></td>
        <td style="text-align:center;"><?php echo ($mal1[3] + $fmal1[3]); ?> </td>
      </tr>
       <tr>
        <td style="text-align:right"><b>TOTALS </b></td>
        <td style="text-align:center;"><?php echo ($mal1[0] + $mal1[1]+$mal1[2] + $mal1[3]); ?></td>
        <td style="text-align:center;"><?php echo ($fmal1[0] + $fmal1[1]+$fmal1[2] + $fmal1[3]); ?></td>
        <td style="text-align:center;"><?php echo ($mal1[0] + $mal1[1]+$mal1[2] + $mal1[3]  + $fmal1[0] + $fmal1[1]+$fmal1[2] + $fmal1[3]); ?></td>
      </tr>
    </tbody>
  </table>


 <BR />   <BR />


    <p>NUMBER OF YOUNG PEOPLE ACCESSING SRH SERVICES BY SERVICE TYPE</p>
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
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql,'FEMALE')+gettotals($conn2,$sql,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>STI</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql3,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql3,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql3,'FEMALE')+gettotals($conn2,$sql3,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>MEDICAL</b></td>
       <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql3,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql3,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql3,'FEMALE')+gettotals($conn2,$sql3,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>HCG</b></td>
       <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql4,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql4,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql4,'FEMALE')+gettotals($conn2,$sql4,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>FP </b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql5,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql5,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql5,'FEMALE')+gettotals($conn2,$sql5,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>ANC</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql6,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql6,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql6,'FEMALE')+gettotals($conn2,$sql6,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>PNC</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql7,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql7,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql7,'FEMALE')+gettotals($conn2,$sql7,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>PAC</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql8,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql8,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql8,'FEMALE')+gettotals($conn2,$sql8,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>FP </b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql9,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql9,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql9,'FEMALE')+gettotals($conn2,$sql9,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>GENERAL COUSELLING</b></td>
       <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql2,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql2,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql2,'FEMALE')+gettotals($conn2,$sql2,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>TOLLFREE</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql0,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql0,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql0,'FEMALE')+gettotals($conn1,$sql0,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>SGBV</b></td>
        <td></td>
        <td></td>

        <td></td>
      </tr>
       <tr>
        <td style="text-align:right"><b>TOTALS : </b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql,'FEMALE')+gettotals($conn2,$sql2,'FEMALE') 
		+gettotals($conn2,$sql3,'FEMALE')+gettotals($conn2,$sql4,'FEMALE') +gettotals($conn2,$sql5,'FEMALE') +gettotals($conn2,$sql6,'FEMALE') 
		+gettotals($conn2,$sql7,'FEMALE') +gettotals($conn2,$sql8,'FEMALE') +gettotals($conn2,$sql9,'FEMALE') +gettotals($conn1,$sql0,'FEMALE') 
		):"");?></td>
        
         <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql,'MALE')+gettotals($conn2,$sql2,'MALE') 
		+gettotals($conn2,$sql3,'MALE')+gettotals($conn2,$sql4,'MALE') +gettotals($conn2,$sql5,'MALE') +gettotals($conn2,$sql6,'MALE') 
		+gettotals($conn2,$sql7,'MALE') +gettotals($conn2,$sql8,'MALE') +gettotals($conn2,$sql9,'MALE') +gettotals($conn1,$sql0,'MALE') 
		):"");?></td>
        
       <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql,'FEMALE')+gettotals($conn2,$sql2,'FEMALE') 
		+gettotals($conn2,$sql3,'FEMALE')+gettotals($conn2,$sql4,'FEMALE') +gettotals($conn2,$sql5,'FEMALE') +gettotals($conn2,$sql6,'FEMALE') 
		+gettotals($conn2,$sql7,'FEMALE') +gettotals($conn2,$sql8,'FEMALE') +gettotals($conn2,$sql9,'FEMALE') +gettotals($conn1,$sql0,'FEMALE') 
		+gettotals($conn2,$sql,'MALE')+gettotals($conn2,$sql2,'MALE') 
		+gettotals($conn2,$sql3,'MALE')+gettotals($conn2,$sql4,'MALE') +gettotals($conn2,$sql5,'MALE') +gettotals($conn2,$sql6,'MALE') 
		+gettotals($conn2,$sql7,'MALE') +gettotals($conn2,$sql8,'MALE') +gettotals($conn2,$sql9,'MALE') +gettotals($conn1,$sql0,'MALE') 
		):"");?></td>
      </tr>
    </tbody>
  </table>

<center><button onClick="myFunction()" >Print </button></center>
<br>
  
  </form>
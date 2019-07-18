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
 


if(isset($_POST['edate'])){
  $d1 = $_POST['sdate'].' 00:00:00';
  $d2 = $_POST['edate'].' 23:59:59';
$sql = "SELECT * FROM `hct_counselling_andtesting` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql2 = "SELECT * FROM `counsellingservices` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql0 = "SELECT * FROM `tollfree` GROUP BY PHONECONTACT HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql3 = "SELECT * FROM `clientsexamination` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql4 = "SELECT * FROM `hcg` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql5 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql6 = "SELECT * FROM `antenatal` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql7 = "SELECT * FROM `postnatal_care` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql8 = "SELECT * FROM `abortioncare` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql9 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 

$sq11 = "SELECT * FROM `cmpatientsregistration` HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 

$sql01 = "SELECT * FROM `cmpatientsregistration` HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 

}
 
?>
 
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ntihc</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href=" assets/lib/bootstrap/css/bootstrap_ws.css">
    <link rel="stylesheet" href="  assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href=" assets/css/main.css">
    <link rel="stylesheet" href="  assets/lib/metismenu/metisMenu.css"> 
        <!-- PAGE LEVEL STYLES -->   
    
         <style>
    .form-control{padding: 0px 0px;}
             h9 {
                 border-bottom: 2px solid #000;
                 color:#FF0000;
                 font-size: 12px;
             }
             table, th , td  {
                 border: 2px solid #000;
                 border-collapse: collapse;
                 padding-left: 0px;
             	padding-bottom: 0px;
             	font-size: 12px;
             	color:#000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }
    </style>
  

  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>


	<script type="text/javascript">
 
</script>

    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="assets/libs/less.js/2.7.1/less.js"></script>
  </head>

        <body class="  ">
        <script>
function myFunction() {
    window.print();
}
</script>
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
   
                    <div id="content">
                    <div class="outer">
                    <div class="inner bg-light lter5" style="height:auto;">
                    <div class="text-center">

</div>
            
     <div class="col-lg-12"> 
     <br> 
     <div class="container">
     
    <div class="col-sm-2" style="text-align:left;">                                        
<img src="assets/img/ntihclog2.png" width="90" height="100">
</div>

<div class="col-sm-8">
<p style="text-align:center; font-size:16px;font-weight:bold; ">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</p>
<p style="text-align:center; font-size:16px; font-weight: ;">P.O. Box 27572, Kampala-Uganda</p>
<p style="text-align:center; font-size:16px; font-weight: ;">Tel: 0393-216-467</p> 
</div>  
 
<div class="col-sm-2"> </div>  

 <br> <br><br> <br> <br> <br> <br> <br>
 
          <center> <legend style="color:#000; font-weight:bold;font-size:13px;"> CLIENT MANAGEMENT REPORT FOR THE PERIOD BETWEEN</legend> </center> 
           
<center> <form class="form-inline"  action="cmreport2.php" method="post">
<a href="report_module.php" <i class="glyphicon glyphicon-th"></i>&nbsp;</a> 
  <div class="form-group">
    <label for="email">START DATE :</label>
    <input type="date" name="sdate" value="<?php  if(isset($_POST['sdate'])){echo $_POST['sdate'];} else{echo "";}   ?>" class="form-control" id="sdate" 
    style="font-weight:bold; text-align:center;">
  </div>
  <div class="form-group">
    <label for="pwd">END DATE :</label>
    <input type="date" name="edate"  value="<?php  if(isset($_POST['sdate'])){echo $_POST['edate'];} else{echo "";}   ?>" class="form-control" id="edate"
   style="font-weight:bold; text-align:center;">
  </div>
  <input type="submit" class="btn btn-default" Value="GENERATE" />
</form></center>

  <BR />
  <BR /><BR />
<form>
<?php 

$malfp   = getages($conn2,$sql5,'MALE');
$fmalfp  = getages($conn2,$sql5,'FEMALE');

$malsti   = getages($conn2,$sql5,'MALE');
$fmalsti  = getages($conn2,$sql5,'FEMALE'); 

$malanc   = getages($conn2,$sql6,'MALE');
$fmalanc  = getages($conn2,$sql6,'FEMALE');

$malhct   = getages($conn2,$sql,'MALE');
$fmalhct  = getages($conn2,$sql,'FEMALE');

$malsmc   = getages($conn2,$sql5,'MALE');
$fmalsmc  = getages($conn2,$sql5,'FEMALE');

$malart   = getages($conn2,$sql5,'MALE');
$fmalart  = getages($conn2,$sql5,'FEMALE');

$malsgbv   = getages($conn2,$sql5,'MALE');
$fmalsgbv  = getages($conn2,$sql5,'FEMALE');

$malgencons   = getages($conn2,$sql2,'MALE');
$fmalgencons  = getages($conn2,$sql2,'FEMALE');



?> 

  <p></p> 
  <table class="table table-bordered">
    <thead>
      <tr  class="success">
        <th style="border:0px;">YOUNG PEOPLE UTILIZING SERVICES AT NTIHC </th>
        <th style="border:0px;"></th>
        <th style="border:0px;"></th>
        <th style="border:0px;"></th>
        <th style="border:0px;"></th>
        <th style="text-align:center;">QTR1 </th>
        <th style="text-align:center;">QTR2</th>
        <th style="text-align:center;">QTR3</th>
        <th style="text-align:center;">QTR4</th> 
        <th style="text-align:center;">TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="border:0px;"><B>GENERAL ATTENDENCE TO ALL SERVICES</B></td> 
        <td style="border:0px;"></td>
        <td style="border:0px;"></td>
        <td style="border:0px;"></td>
        <td style="border:0px;"></td>
        <td style="text-align:center;"> </td>
        <td style="text-align:center;"> </td>
        <td style="text-align:center;"> </td>
        <td style="text-align:center;"> </td>
        <td style="text-align:center;"> </td>
      </tr>
       </thead>
    <tbody>
      <tr>
      <thead>
      <tr  class="">
        <th>AGE AND SEX </th>
        <th>FP </th>
        <th>STI</th>
        <th>ANC</th>
        <th>HCT</th> 
        <th>SMC</th>
        <th>HIV </th>
        <th>SGBV</th>
        <th>GENERAL COUNSELLING</th>
        <th>TOTAL</th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>10 - 19 (MALE)</b></td>
        <td style="text-align:center;"> <?php echo $malfp[0] + $malfp[1]; ?> 
        <td style="text-align:center;"> <?php echo $malsti[0] + $malsti[1]; ?> 
        <td style="text-align:center;"> <?php echo $malanc[0] + $malanc[1]; ?> 
        <td style="text-align:center;"> <?php echo $malhct[0] + $malhct[1]; ?> 
        <td style="text-align:center;"> <?php echo $malsmc[0] + $malsmc[1]; ?> 
        <td style="text-align:center;"> <?php echo $malart[0] + $malart[1]; ?> 
        <td style="text-align:center;"> <?php echo $malsgbv[0] + $malsgbv[1]; ?> 
        <td style="text-align:center;"> <?php echo $malgencons[0] + $malgencons[1]; ?> 
        <td style="text-align:center;"> <?php echo $malfp[0] + $malfp[1] + $malsti[0] + $malsti[1] + $malanc[0] + $malanc[1] + $malhct[0] + $malhct[1] +  $malsmc[0] + $malsmc[1] + $malart[0] + $malart[1] + $malsgbv[0] + $malsgbv[1] + $malgencons[0] + $malgencons[1]; ?> 
      </tr>
      <tr>
         <td><b>10 - 19 (FEMALE)</b></td>
        <td style="text-align:center;"> <?php echo $fmalfp[0] + $fmalfp[1]; ?> 
        <td style="text-align:center;"> <?php echo $fmalsti[0] + $fmalsti[1]; ?> 
        <td style="text-align:center;"> <?php echo $fmalanc[0] + $fmalanc[1]; ?> 
        <td style="text-align:center;"> <?php echo $fmalhct[0] + $fmalhct[1]; ?> 
        <td style="text-align:center;"> <?php echo $fmalsmc[0] + $fmalsmc[1]; ?> 
        <td style="text-align:center;"> <?php echo $fmalart[0] + $fmalart[1]; ?> 
        <td style="text-align:center;"> <?php echo $fmalsgbv[0] + $fmalsgbv[1]; ?> 
        <td style="text-align:center;"> <?php echo $fmalgencons[0] + $fmalgencons[1]; ?> 
        <td style="text-align:center;"> <?php echo $fmalfp[0] + $fmalfp[1] + $fmalsti[0] + $fmalsti[1] + $fmalanc[0] + $fmalanc[1] + $fmalhct[0] + $fmalhct[1] +  $fmalsmc[0] + $fmalsmc[1] + $fmalart[0] + $fmalart[1] + $fmalsgbv[0] + $fmalsgbv[1] + $fmalgencons[0] + $fmalgencons[1]; ?> 
      </tr>
      <tr> 
        <td><b>20 - 24 (MALE)</b></td>
        <td style="text-align:center;"><?php echo $malfp[2]; ?></td> 
        <td style="text-align:center;"><?php echo $malsti[2]; ?></td> 
        <td style="text-align:center;"><?php echo $malanc[2]; ?></td> 
        <td style="text-align:center;"><?php echo $malhct[2]; ?></td> 
        <td style="text-align:center;"><?php echo $malsmc[2]; ?></td> 
        <td style="text-align:center;"><?php echo $malart[2]; ?></td> 
        <td style="text-align:center;"><?php echo $malsgbv[2]; ?></td> 
        <td style="text-align:center;"><?php echo $malgencons[2]; ?></td> 
       <td style="text-align:center;"><?php echo $malfp[2] + $malsti[2] + $malanc[2] + $malhct[2] + $malsmc[2]+ $malart[2]+ $malsgbv[2]+ $malgencons[2] ; ?></td> 
      </tr>
      <tr>
         <td><b>20 - 24 (FEMALE)</b></td>
       <td style="text-align:center;"> <?php echo $fmalfp[2]; ?></td> 
        <td style="text-align:center;"><?php echo $fmalsti[2]; ?></td> 
        <td style="text-align:center;"><?php echo $fmalanc[2]; ?></td> 
        <td style="text-align:center;"><?php echo $fmalhct[2]; ?></td> 
        <td style="text-align:center;"><?php echo $fmalsmc[2]; ?></td> 
        <td style="text-align:center;"><?php echo $fmalart[2]; ?></td> 
        <td style="text-align:center;"><?php echo $fmalsgbv[2]; ?></td> 
        <td style="text-align:center;"><?php echo $fmalgencons[2]; ?></td> 
       <td style="text-align:center;"><?php echo $fmalfp[2] + $fmalsti[2] + $fmalanc[2] + $fmalhct[2] + $fmalsmc[2]+ $fmalart[2]+ $fmalsgbv[2]+ $fmalgencons[2] ; ?></td> 
      </tr>
      <tr> 
        <td style="text-align:right"><b>TOTALS </b></td>
        <td style="text-align:center;"> <?php echo $malfp[0] + $malfp[1] + $malfp[2] + $fmalfp[0] + $fmalfp[1] + $fmalfp[2] ; ?> 
        <td style="text-align:center;"> <?php echo $malsti[0] + $malsti[1] + $malsti[2] + $fmalsti[0] + $fmalsti[1] + $fmalsti[2] ; ?> 
        <td style="text-align:center;"> <?php echo $malanc[0] + $malanc[1] + $malanc[2] + $fmalanc[0] + $fmalanc[1] + $fmalanc[2] ; ?> 
        <td style="text-align:center;"> <?php echo $malhct[0] + $malhct[1] + $malhct[2] + $fmalhct[0] + $fmalhct[1] + $fmalhct[2] ; ?> 
        <td style="text-align:center;"> <?php echo $malsmc[0] + $malsmc[1] + $malsmc[2] + $fmalsmc[0] + $fmalsmc[1] + $fmalsmc[2] ; ?> 
        <td style="text-align:center;"> <?php echo $malart[0] + $malart[1] + $malart[2] + $fmalart[0] + $fmalart[1] + $fmalart[2] ; ?> 
        <td style="text-align:center;"> <?php echo $malsgbv[0] + $malsgbv[1] + $malsgbv[2] + $fmalsgbv[0] + $fmalsgbv[1] + $fmalsgbv[2] ; ?> 
        <td style="text-align:center;"> <?php echo $malgencons[0] + $malgencons[1] + $malgencons[2] + $fmalgencons[0] + $fmalgencons[1] + $fmalgencons[2] ; ?> 
        
        <td style="text-align:center;"> <?php echo $malfp[0] + $malfp[1] + $malfp[2] + $fmalfp[0] + $fmalfp[1] + $fmalfp[2] 
		                                +$malsti[0] + $malsti[1] + $malsti[2] + $fmalsti[0] + $fmalsti[1] + $fmalsti[2]
										+$malanc[0] + $malanc[1] + $malanc[2] + $fmalanc[0] + $fmalanc[1] + $fmalanc[2]
										+$malhct[0] + $malhct[1] + $malhct[2] + $fmalhct[0] + $fmalhct[1] + $fmalhct[2]
										+$malsmc[0] + $malsmc[1] + $malsmc[2] + $fmalsmc[0] + $fmalsmc[1] + $fmalsmc[2]
										+$malart[0] + $malart[1] + $malart[2] + $fmalart[0] + $fmalart[1] + $fmalart[2]
										+$malsgbv[0] + $malsgbv[1] + $malsgbv[2] + $fmalsgbv[0] + $fmalsgbv[1] + $fmalsgbv[2]
										+$malgencons[0] + $malgencons[1] + $malgencons[2] + $fmalgencons[0] + $fmalgencons[1] + $fmalgencons[2] 
		                                ; ?> 
      </tr>
    </tbody>
  </table> 
 <BR />   <BR />
  
  <p>NUMBER OF YOUNG PEOPLE ACCESSING SRH SERVICES BY SERVICE TYPE OVER TIME</p> 
  <table class="table table-bordered">
    <thead>
      <tr  class="success">
        <th style="border:0px;"> </th>
        <th style="border:0px;"> </th>
        <th>FEMALE</th>
        <th>MALE</th>
        <th>TOTAL</th>
        <th>CUM-FEMALE</th>
        <th>CUM-MALE</th>
        <th>CUM-TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>FP</B></td> 
        <td> 10-19YRS 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              20-24 YRS</td> 
              
        <td style="text-align:center;"> <?php echo $fmalfp[0] + $fmalfp[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalfp[2]; ?></td> 
               
         <td style="text-align:center;"> <?php echo $malfp[0] + $malfp[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $malfp[2]; ?></td> 
              
         <td style="text-align:center;"> <?php echo $fmalfp[0] + $fmalfp[1] + $malfp[0] + $malfp[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalfp[2] + $malfp[2]; ?></td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
               <td>  
              <hr  style="width:100%; margin-left:0%;">
               </td> 
        </td> 
      </tr>
      <tr>
        <td><b>STI</b></td>
          <td> 10-19YRS 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              20-24 YRS</td> 
              
         <td style="text-align:center;"> <?php echo $fmalsti[0] + $fmalsti[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalsti[2]; ?></td> 
               
         <td style="text-align:center;"> <?php echo $malsti[0] + $malsti[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $malsti[2]; ?></td> 
              
         <td style="text-align:center;"> <?php echo $fmalsti[0] + $fmalsti[1] + $malsti[0] + $malsti[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalsti[2] + $malsti[2]; ?></td> 
              
         <td>  
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
        <td>  
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td>  
      </tr>
      <tr>
        <td><b>ANC</b></td>
         <td> 10-19YRS 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              20-24 YRS</td>  
              
        <td style="text-align:center;"> <?php echo $fmalanc[0] + $fmalanc[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalanc[2]; ?></td> 
               
         <td style="text-align:center;"> <?php echo $malanc[0] + $malanc[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $malanc[2]; ?></td> 
              
         <td style="text-align:center;"> <?php echo $fmalanc[0] + $fmalanc[1] + $malanc[0] + $malanc[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalanc[2] + $malanc[2]; ?></td>  
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
      </tr>
      <tr>
        <td><b>HCT</b></td>
          <td> 10-19YRS 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              20-24 YRS</td> 
              
        <td style="text-align:center;"> <?php echo $fmalhct[0] + $fmalhct[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalhct[2]; ?></td> 
               
         <td style="text-align:center;"> <?php echo $malhct[0] + $malhct[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $malhct[2]; ?></td> 
              
         <td style="text-align:center;"> <?php echo $fmalhct[0] + $fmalhct[1] + $malhct[0] + $malhct[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalhct[2] + $malhct[2]; ?></td>  
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
      </tr>
       <tr>
         <td><b>SMC</b></td>
         <td> 10-19YRS 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              20-24 YRS</td>  
              
       <td style="text-align:center;"> <?php echo $fmalsmc[0] + $fmalsmc[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalsmc[2]; ?></td> 
               
         <td style="text-align:center;"> <?php echo $malsmc[0] + $malsmc[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $malsmc[2]; ?></td> 
              
         <td style="text-align:center;"> <?php echo $fmalsmc[0] + $fmalsmc[1] + $malsmc[0] + $malsmc[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalsmc[2] + $malsmc[2]; ?></td>  
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
        <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              </td> 
        </tr>
        <tr>
        <td><b>HIV CARE</b></td>
         <td> 10-19YRS 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              20-24 YRS</td>  
              
         <td style="text-align:center;"> <?php echo $fmalart[0] + $fmalart[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalart[2]; ?></td> 
               
         <td style="text-align:center;"> <?php echo $malart[0] + $malart[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $malart[2]; ?></td> 
              
         <td style="text-align:center;"> <?php echo $fmalart[0] + $fmalart[1] + $malart[0] + $malart[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalart[2] + $malart[2]; ?></td>   
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
      </tr>
       <tr>
        <td><b>SGBV</b></td>
         <td> 10-19YRS 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              20-24 YRS</td>  
              
        <td style="text-align:center;"> <?php echo $fmalsgbv[0] + $fmalsgbv[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalsgbv[2]; ?></td> 
               
         <td style="text-align:center;"> <?php echo $malsgbv[0] + $malsgbv[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $malsgbv[2]; ?></td> 
              
         <td style="text-align:center;"> <?php echo $fmalsgbv[0] + $fmalsgbv[1] + $malsgbv[0] + $malsgbv[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalsgbv[2] + $malsgbv[2]; ?></td>   
              
        <td>  
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
        <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              </td> 
      </tr>
       <tr>
        <td><b>G.COUNSELLING</b></td>
          <td> 10-19YRS 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              20-24 YRS</td>  
              
       <td style="text-align:center;"> <?php echo $fmalgencons[0] + $fmalgencons[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalgencons[2]; ?></td> 
               
         <td style="text-align:center;"> <?php echo $malgencons[0] + $malgencons[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $malgencons[2]; ?></td> 
              
         <td style="text-align:center;"> <?php echo $fmalgencons[0] + $fmalgencons[1] + $malgencons[0] + $malgencons[1]; ?> 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
             <?php echo $fmalsgbv[2] + $malgencons[2]; ?></td>   
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
      </tr>
       <tr>
        <td style="text-align:right"><b>TOTALS </b></td>
          <td> 10-19YRS 
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
              20-24 YRS</td>  
              
         <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td> 
              
              <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td>
              
              <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td>
              
              <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td>
              
              <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td>
              
              <td>   
              <hr  style="padding:0px; width:111%; margin-left:-6%;">
               </td>  
      </tr>
    </tbody>
  </table>


 <BR />   <BR />
   
<br>

     </form> 



                    </div>
                </div>
              </div>



                            </div>
                        </div>
                    </div>
                </div>

         <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information And Health Centre</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->

            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="assets/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="assets/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="assets/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="assets/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="assets/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="assets/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="assets/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="assets/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="../IMMS/ntihc/assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="../IMMS/ntihc/assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src="../IMMS/ntihc/assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
<script>
 var x=0,y=0;

function postclient(vd){

  var dta = vd.split("###");
  $("#NTIHCNO").val(dta[0]);
  $("#CNAME").val(dta[1]);
}

</script>


      <!-- PAGE LEVEL SCRIPT-->
 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>

     <!--END PAGE LEVEL SCRIPT-->
     <script src="assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
  <script type="text/javascript" src=" assets/js/jquery.js"></script>
    <script type="text/javascript" src=" assets/admin_bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src=" assets/js/lineandbars.js"></script>

	<script type="text/javascript" src=" assets/js/dash-charts.js"></script>
	<script type="text/javascript" src=" assets/js/gauge.js"></script>

	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src=" assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="  assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topCenter.js"></script>

	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src=" assets/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="assets/js/highcharts.js"></script>
	<script src="assets/js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="assets/ js/admin.js"></script>

                <link href=" assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
            <script src=" assets/lib/jquery/jquery.js"></script>
<script src=" assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});


/*$('#datepicker').datepicker()
    .on("input change", function (e) {
    console.log("Date changed: ", e.target.value);
});*/

/*$( "#datepicker" ).datepicker({
	onSelect: function(dateText) {
    alert("Selected date: " + dateText + "; input's current value: " + this.value);
  }
});
*/


$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
			    <!-- END PAGE LEVEL SCRIPTS -->
        </body>
</html>


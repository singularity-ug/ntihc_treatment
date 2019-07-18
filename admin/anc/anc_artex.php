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
  $FINALREACTIVITY='';
   
  $REACTIVITYT1='';
  $REACTIVITYT2=''; 
  $REACTIVITYT3='';
  
  $EXPIRYDATET1='';
  $EXPIRYDATET2=''; 
  $EXPIRYDATET3='';
  
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
   $FINALREACTIVITY = $row['FINALREACTIVITY']; 
   
   $REACTIVITYT1   = $row['REACTIVITYT1'];
     $REACTIVITYT2 = $row['REACTIVITYT2']; 
   $REACTIVITYT3 = $row['REACTIVITYT3']; 
   
   $EXPIRYDATET1   = $row['EXPIRYDATET1'];
     $EXPIRYDATET2 = $row['EXPIRYDATET2']; 
   $EXPIRYDATET3 = $row['EXPIRYDATET3']; 
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
                           
          <div class="nav-tabs-custom" style="border:0px; background-color:transparent;">
            <ul class="nav nav-tabs pull-right" style="background-color:transparent;">
         
    <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border:0px;
    background-color:transparent;" width="100%">
    <thead> 
    <tr>  
        <td style="width:50%; border: 0px;background-color:transparent;"> 
      </td>
   
          <td style="width:50%; border: 0px;"> </td>  
           </tbody>
           </table>
       </div> 
       
    <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:50%; border: 0px;">
      <div class="small-box bg-grey-gradient">
       <a href="#tab_1-11" data-toggle="tab" style="background-color:transparent;"> 
          <center><img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:50px; width:50px;"> 
          New&nbsp;art&nbsp;record  </center></a> 
      </div> 
      </td>
   
          <td style="width:50%; border: 0px;">
          <div class="small-box bg-grey-gradient">
      <a href="#tab_3-33" data-toggle="tab">
           <img src="../../database icons/exchange-512.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:50px; width:50px;" > 
           ART&nbsp;history&nbsp;&nbsp; </a>  </div></td> 
         </td>  
           </tbody>
           </table>
       </div> 
       
       
       <div class="col-sm-2">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:50%; border: 0px;">  
         <div class="small-box bg-grey-gradient"> 
       <a href="#tab_3-3" data-toggle="tab">
           <img src="../../database icons/delete4.jpg"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:50px; width:50px;" > 
           Exit&nbsp;results&nbsp;&nbsp; </a> <br><p></p>
         </td>  
           </tbody>
           </table>
       </div> 
       
            </ul>
      
            <div class="tab-content" style="border:0px;background-color:transparent;"> 
      <div class="tab-pane active" id="tab_1-11" style="background-color:transparent;"> 
         
      <p><B><center>HIV CARE / ART CARD</center></B></p> 
      <div class="col-sm-12" style="background-color:transparent;">
      
  <form  class="form-horizontal" action="anc_artprocesor.php" method="POST" style="height:auto; font-weight:normal;"> 
 
  <?php
  $id = $_GET['q'];   
  $NTIHCNO = ''; 
  $NAME  = '';  
  $AGE_GROUP = ''; 
  $AGE1  = '';
  $RID = '';
  $SEX = ''; 
  $SCHOOLING = '';
  $VISTTYPE = '';      
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
  
 $conn = new mysqli($servername, $username, $password, $dbname); 
 $sql  = "SELECT * FROM laboratory  WHERE `NTIHCNO` = '$id' LIMIT 1"; 
 $res = $conn->query($sql); 
  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $NAME = $row['NAME'];  
     $AGE_GROUP = $row['AGE_GROUP']; 
   $AGE1 = $row['AGE1']; 
   $RID = $row['RID'];
     $SEX  = $row['SEX']; 
   $SCHOOLING = $row['SCHOOLING']; 
   $VISTTYPE = $row['VISTTYPE']; 
    
      } 
  ?>
        <input type="hidden" name="NTIHCNO" id="NTIHCNO" value="<?php echo $NTIHCNO; ?>">
    <input type="hidden" name="CLIENTNAME"  id="CLIENTNAME" value="<?php echo $NAME; ?>"> 
    <input type="hidden" name="AGE1" id="AGE1" value="<?php echo $AGE1; ?>">
    <input type="hidden" name="AGE_GROUP" id="AGE_GROUP" value="<?php echo $AGE_GROUP; ?>">
    <input type="hidden" id="SEX" name="SEX" value="<?php echo $SEX; ?>"> 
    <input type="hidden" id="REQUESTINGUNIT" name="REQUESTINGUNIT" value="ANC SERVICES" >
    <input type="hidden" id="SCHOOLING" name="SCHOOLING" value="<?php echo $SCHOOLING; ?>"> 
    <input type="hidden" id="REGISTERACCOUNT" name="REGISTERACCOUNT" value="<?php echo $rm; ?>" >  
    <input type="hidden" id="USERINITIAL" name="USERINITIAL" value="<?php echo $nameofuser; ?>" > 
    <input type="hidden" id="VISTTYPE" name="VISTTYPE" value="<?php echo $VISTTYPE; ?>">
    <input type="hidden" id="RID" name="RID" value="<?php echo $RID; ?>">
    <input type="hidden" name="INSVCSTATUS" id="INSVCSTATUS" value="ANC SERVICES" >  
               
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; 
   border:0px;text-align:left;border: 0px;background-color:transparent;" width="100%">
    <thead> 
    <tr> 
   <th style=""><b>Enrollmant Date</b>  </th>
   <th style="">Next appointment </th> 
   <th style="">Duration in months since first starting ART </th>
   <th style="">Wt</th>
   <th style="">If pregnant EDD/<B>em</B> TCT? write gestation in weeks and ANC # </th> 
   <th style="">TB status </th>
   <th style="">Potential SIDE EFFECTS</th>
   <th style="">New Ols, other problems  </th> 
   <th style="">Functional status  </th>
   <th style="">WHO clinical stage</th>
   <th style="">CPT/Dapsone </th> 
   
   <th colspan="2" style="">ARV drugs </th>
   
   <th  colspan="2" style="">Investigations</th>
   
   <th style="">Refer or consult or link/provide (including nutritional support and infant feeding)  </th>
  <th style="">Pill counting</th>
   </tr>
   
   <tr> 
   <th style="">Tick small box if scheduled</th>
   <th style=""> <b>Date</b></th> 
   <th style=""> / since starting current regimen</th>
   <th style=""><br> Ht.<b> </th>
   <th style="">FP/no FP if FP write method(s)</th> 
   <th style=""> If TB, Start/Stop (mm/yyyy) </th>
   <th style=""> </th>
   <th style="">   </th> 
   <th style=""> Work/playing Amb Bed</th>
   <th style="">WHO clinical stage</th>
   
   <th style=""> Adhere </th> 
    
   <th colspan="2" style="">  </th> 
   <th  style="">If CD4 <15% write (-) If CD4 >15 write(+)</th>
   <th style="">Hgb, RPR,CXR,TB sputums, infant Ab/PCR, other </th> 
   <th style="">If Hospitalized # of days</th> 
   <th> </th>
   </tr> 
   
   <tr> 
   <th style=""> </th>
   <th style=""> </th> 
   <th style="">  </th>
   <th style=""> Muac/oEDEMA +/-</th>
   <th style="">  Age in months if <=2 yrs</th> 
   <th style=""> </th>
   <th style=""> </th>
   <th style=""> </th> 
   <th style="">  </th>
 
   <th style=""> </th> 
   <th style=""> </th>
   
   <th  style=""> Adhere  </th>
   <th  style="">/why </th> 
   <th style=""> </th>
   <th  style=""> </th>
   <th style="">  </th> 
   <th style=""> </th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="DATECREATED" id="DATECREATED" value="<?php echo date('Y-m-d'); ?>" style="width:100%; text-align:left;background-color:#fff;">
  <input type="hidden" name="art2" value="active">
  <input type="alphanumeric" name="ARTNUMBER" id="ARTNUMBER" required="required" placeholder="Art number" style="width:100%; text-align:left;background-color:#fff;">
   
    </td>   
           
    <td style="border:2px solid #ecf0f5;"><input type="date" name="art3" id="art3"    
    style="width:100%; text-align:left;background-color:#fff;"></td> 
     
    
     
  <td style="border:2px solid #ecf0f5;">
  <input type="text" name="art4" id="art4"  style="width:100%; text-align:left;background-color:#fff;">
    <input type="text" name="art5" id="art5"  style="width:100%; text-align:left;background-color:#fff; height:20px;">
   </td>   
           
    <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art6" id="art6"  style="width:100%; text-align:left;background-color:#fff;">
  <input type="text" name="art7" id="art7"  style="width:100%; text-align:left;background-color:#fff;">
  <input type="text" name="art8" id="art8" style="width:100%; text-align:left;background-color:#fff;">
  </td> 
     
           
    
  <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art9" id="art9" style="width:100%; text-align:left;background-color:#fff;">
  <input type="text" name="art10" id="art10"  style="width:100%; text-align:left;background-color:#fff;">
  <input type="text" name="art11" id="art11"  style="width:100%; text-align:left;background-color:#fff;">
  </td> 
     
  <td style="border:2px solid #ecf0f5;">
   <input type="text" name="art12" id="art12" style="width:100%; text-align:left;background-color:#fff; height:20px;">
   <input type="text" name="art13" id="art13"   style="width:100%; text-align:left;background-color:#fff;">
   <input type="text" name="art14" id="art14"   style="width:100%; text-align:left;background-color:#fff;">
   </td>   
           
    
  <td style="border:2px solid #ecf0f5;">
  <textarea name="art15" id="art15" style="width:100%; text-align:left;background-color:#fff;height:20px;"></textarea></td> 
      
    
   <td style="border:2px solid #ecf0f5;">
   <textarea name="art16" id="art16"  
   style="width:100%; text-align:left;background-color:#fff; height:20px;"></textarea>
   
   </td>   
           
    
  <td style="border:2px solid #ecf0f5;"><select  name="art17" id="art17"    
    style="width:100%; text-align:left;background-color:#fff;">
   <option></option>
   <option>G</option>
   <option>F</option>
   <option>P</option>
   </select> 
  </td> 
     
   <td style="border:2px solid #ecf0f5;">
   <select name="art18" id="art18" style="width:100%; text-align:left;background-color:#fff; height:20px;"> 
   <option></option>
   <option>i</option>
   <option>ii</option>
   <option>iii</option>
   <option>iv</option>
   <option>Ti</option>
   <option>T2</option>
   <option>T3</option>
   <option>T4</option>
   </select>
   </td>   
           
    
  <td style="border:2px solid #ecf0f5;"><select name="art19" id="art19"    
    style="width:100%; text-align:left;background-color:#fff;"> 
   <option></option>
   <option>G</option>
   <option>F</option>
   <option>P</option>
   </select> 
  </td>  
    
  <td style="border:2px solid #ecf0f5;"><select type="numeric" name="art20" id="art20"    
    style="width:100%; text-align:left;background-color:#fff;">
  <option></option>
  <option>G</option>
  <option>F</option>
  <option>P</option>
  </select> 
  </td> 
     
  <td style="border:2px solid #ecf0f5;">
    <input type="number" name="art21" id="art21" style="width:100%; text-align:left;background-color:#fff; height:20px;">
   </td>   
           
    
  <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art22" id="art22" style="width:100%; text-align:left;background-color:#fff;"></td> 
     
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="art23" id="art23" style="width:100%; text-align:left;background-color:#fff; height:20px;">
    </td>   
           
  <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art24" id="art24" style="width:100%; text-align:left;background-color:#fff;"></td> 
  
  <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art25" id="art25" style="width:100%; text-align:left;background-color:#fff;"></td>
                                                
   </tr>
  <tr>
 </tbody>
 </table> <br>
    <center> <input type="image" name="submit" id="button" src="../../database icons/switchb1.png" width="50" height="50" 
        data-toggle="tooltip" title="Save art episode"></center> 
        </form> 
       
        </div> 
       
        <div class="tab-pane" id="tab_3-33"> 
        <hr>
        
   <form id="form1" class="form-horizontal" action=" " method="POST" style="height:auto; font-weight:normal;"> 
          
   <table class="table table-tabled" style="background-color:transparent; margin-top:0px; ">
   <thead>
   <tr> 
   <th style=""><b>Date</b>  </th>
   <th style="">Next appointment </th> 
   <th style="">Duration in months since first starting ART </th>
   <th style="">Wt</th>
   <th style="">If pregnant EDD/<B>em</B> TCT? write gestation in weeks and ANC # </th> 
   <th style="">TB status </th>
   <th style="">Potential SIDE EFFECTS</th>
   <th style="">New Ols, other problems  </th> 
   <th style="">Functional status  </th>
   <th style="">WHO clinical stage</th>
   <th style="">CPT/Dapsone </th> 
   
   <th colspan="2" style="">ARV drugs </th>
   
   <th  colspan="2" style="">Investigations</th>
   
   <th style="">Refer or consult or link/provide (including nutritional support and infant feeding)  </th>
  <th style="">Pill counting</th>
   </tr>
   
   <tr> 
   <th style="">Tick small box if scheduled</th>
   <th style=""> <b>Date</b></th> 
   <th style=""> / since starting current regimen</th>
   <th style=""><br> Ht.<b> </th>
   <th style="">FP/no FP if FP write method(s)</th> 
   <th style=""> If TB, Start/Stop (mm/yyyy) </th>
   <th style=""> </th>
   <th style="">   </th> 
   <th style=""> Work/playing Amb Bed</th>
   <th style="">WHO clinical stage</th>
   
   <th style=""> Adhere </th> 
    
   <th colspan="2" style="">  </th> 
   <th  style="">If CD4 <15% write (-) If CD4 >15 write(+)</th>
   <th style="">Hgb, RPR,CXR,TB sputums, infant Ab/PCR, other </th> 
   <th style="">If Hospitalized # of days</th> 
   <th> </th>
   </tr> 
   
   <tr> 
   <th style=""> </th>
   <th style=""> </th> 
   <th style="">  </th>
   <th style=""> Muac/oEDEMA +/-</th>
   <th style="">  Age in months if <=2 yrs</th> 
   <th style=""> </th>
   <th style=""> </th>
   <th style=""> </th> 
   <th style="">  </th>
 
   <th style=""> </th> 
   <th style=""> </th>
   
   <th  style=""> Adhere  </th>
   <th  style="">/why </th> 
    <th style=""> </th>
   <th  style=""> </th>
   <th style="">  </th> 
   <th style=""> </th> 
   </tr>
   </thead>
   <tbody>
   
    <?php
                    $total=0;
                    $total2=0;
                    $s=mysqli_query($conn,"select * from artmgr  WHERE NTIHCNO= '$id'");
                    while($srow=mysqli_fetch_array($s)){
                      ?>
                      <tr>
                      <td class="hidden"><?php echo $srow['NTIHCNO']; ?></td>
                                           
                      <td><input type="text" name="" value="<?php echo $srow['DATECREATED']; ?>" style="width:100%; text-align:left;">  <LABEL>Art number</LABEL> 
                      <input type="text" name="" value="<?php echo $srow['ARTNUMBER']; ?>" style="width:100%; text-align:left;"> 
                      </td>

                      <td><input type="text" name="" value="<?php echo $srow['art3']; ?>" style="width:100%; text-align:center;"> </td> 
                      
                      <td><input type="text" name="" value="<?php echo $srow['art4']; ?>" style="width:100%; text-align:center;">  
                      <input type="text" name="" value="<?php echo $srow['art5']; ?>" style="width:100%; text-align:center;"> 
                      </td>
                      
                      <td><input type="text" name="" value="<?php echo $srow['art6']; ?>" style="width:100%; text-align:center;">  
                      <input type="text" name="" value="<?php echo $srow['art7']; ?>" style="width:100%; text-align:center;"> 
                      <input type="text" name="" value="<?php echo $srow['art8']; ?>" style="width:100%; text-align:center;">  
                      </td>
                       
                      <td><input type="text" name="" value="<?php echo $srow['art9']; ?>" style="width:100%; text-align:center;">  
                      <input type="text" name="" value="<?php echo $srow['art10']; ?>" style="width:100%; text-align:center;"> 
                      <input type="text" name="" value="<?php echo $srow['art11']; ?>" style="width:100%; text-align:center;">   
                      </td>
                       
                      <td><input type="text" name="" value="<?php echo $srow['art12']; ?>" style="width:100%; text-align:center;">  
                      <input type="text" name="" value="<?php echo $srow['art13']; ?>" style="width:100%; text-align:center;">  
                      <input type="text" name="" value="<?php echo $srow['art14']; ?>" style="width:100%; text-align:center;"> 
                      </td>
                      
                      <td>  <textarea name="art15" id="art15" 
    style="width:100%; text-align:left;background-color:#fff;height:52px;"><?php echo $srow['art15']; ?></textarea></td> 
    
    <td>  <textarea name="art16" id="art16"  
    style="width:100%; text-align:left;background-color:#fff; height:52px;"><?php echo $srow['art16']; ?></textarea>  </td>  
    
    <td><input type="text" name="" value="<?php echo $srow['art17']; ?> " style="width:100%; text-align:center;"> </td> 
     
    <td><input type="text" name="" value="<?php echo $srow['art18']; ?> " style="width:100%; text-align:center;"> </td>   
            
    <td><input type="text" name="" value="<?php echo $srow['art19']; ?> " style="width:100%; text-align:center;"> </td>  
    
    <td><input type="text" name="" value="<?php echo $srow['art20']; ?> " style="width:100%; text-align:center;"> </td> 
     
    <td><input type="text" name="" value="<?php echo $srow['art21']; ?> " style="width:100%; text-align:center;"> </td>   
           
    <td><input type="text" name="" value="<?php echo $srow['art22']; ?>" style="width:100%; text-align:center;">  </td>   
            
    <td><input type="text" name="" value="<?php echo $srow['art23']; ?> " style="width:100%; text-align:center;"> </td>  
    
    <td><input type="text" name="" value="<?php echo $srow['art24']; ?> " style="width:100%; text-align:center;"> </td> 
     
    <td><input type="text" name="" value="<?php echo $srow['art25']; ?> " style="width:100%; text-align:center;"> </td>   
           
    <td class="hidden">
                          <?php 
                            $sub=$srow['RECORDCOUNTER'];
                            echo number_format($sub,2);
                            $total+=$sub;
                          ?>
                        </td> 
                      </tr>
                      <?php
                    }
                  ?>
                  <tr>
                    <td colspan="16" align="left"><strong>TOTAL VISTS</strong></td>
                    <td> <center><strong><?php echo number_format($total,2); ?></strong> </center></td> 
                  </tr>
                </tbody>
              </table>
     
   
    </form>
       
       
        </div>
         
        <div class="tab-pane" id="tab_3-3"> 
         <div class="col-sm-5"></div><div class="col-sm-4"> 
        <form class="form-horizontal" action="lab_results_quit.php" method="POST"> 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>   
                  <input type="hidden" id="VISTID" name="VISTID" value="<?php  echo $VISTID; ?>" > 
          <input type="hidden" id="ACTION" name="ACTION" value="REVIEWED-ANC UNIT" >     
            <td style="width:100%;border:0px; background-color:transparent;">   
      <input type="image" name="submit" id="button" src="../../database icons/delete5.jpg" width="50" height="45" 
         data-toggle="tooltip" title="Check out"/> </td> 
      <td style="width:100%;border:0px; background-color:transparent;">
      <a href="anc_home.php?d1=0&d2=0">  <img src="../../database icons/approve1.png"width="50" height="50" style="background-color:transparent;"
        data-toggle="tooltip" title="Exit"> </a>   </td>    
            </tbody>
            </table> 
      </form>
            </div></div>
      
              <!-- /.tab-pane -->
        
              <div class="tab-pane" id="tab_2-2c"> 
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;">  </td>
   
        <td style="width:60%;border:0px;">     </td>  
           </tbody>
           </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2c"> 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;">  </td>
   
        <td style="width:60%;border:0px;">     </td>  
           </tbody>
           </table>
              </div>
              <!-- /.tab-pane --> 
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>                      
 
        
     
     
   <br>
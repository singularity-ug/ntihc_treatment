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
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>

<body class="hold-transition skin-blue sidebar-mini">  
  
</head>
 
      <div class="row"> 
      <?php
          $a=mysqli_query($conn,"select * from laboratory where NTIHCNO='$id'");
          $arow=mysqli_fetch_array($a); 
        ?> 
                           
   <div class="nav-tabs-custom" style="border:0px;">
            <ul class="nav nav-tabs pull-right"> 
         
     <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;">
      <div class="small-box bg-grey-gradient">
      <a href="#tab_1-1" data-toggle="tab">
          <center><img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:40px; width:40px;"> 
          Lab&nbsp;results&nbsp;  </center></a>
      <br><p></p>
      </div> 
      </td>
   
         <td style="width:60%;border:0px;"> 
         <div class="small-box bg-grey-gradient">
      <a href="#tab_2-2" data-toggle="tab">
           <img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:23px; width:23px;" > 
          Hepatitis&nbsp;B&nbsp;&nbsp; </a> 
       <br><p></p>
  
         <div class="small-box bg-grey-gradient"> 
       <a href="#tab_3-2" data-toggle="tab">
           <img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:23px; width:23px;" > 
           Malaria&nbsp;&nbsp;&nbsp; </a> <br><p></p>
         </td>  
           </tbody>
           </table>
       </div>
       
        <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;">
      <div class="small-box bg-grey-gradient">
      <a href="#tab_1-1a" data-toggle="tab">
          <center><img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:40px; width:40px;"> 
          HB&nbsp;&nbsp;&nbsp; &nbsp; </center></a>
      <br><p></p>
      </div> 
      </td>
   
         <td style="width:60%;border:0px;"> 
         <div class="small-box bg-grey-gradient">
      <a href="#tab_2-2a" data-toggle="tab">
           <img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:23px; width:23px;" > 
          RBS&nbsp;&nbsp; &nbsp; &nbsp; </a> 
       <br><p></p>
  
         <div class="small-box bg-grey-gradient"> 
       <a href="#tab_3-2a" data-toggle="tab">
           <img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:23px; width:23px;" > 
           Blood&nbsp;&nbsp;&nbsp; &nbsp;</a> <br><p></p>
         </td>  
           </tbody>
           </table>
       </div>
       
         <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;">
      <div class="small-box bg-grey-gradient">
      <a href="#tab_1-1b" data-toggle="tab">
          <center><img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:40px; width:40px;"> 
          Syphilis&nbsp; &nbsp;&nbsp; </center></a>
      <br><p></p>
      </div> 
      </td>
   
         <td style="width:60%;border:0px;"> 
         <div class="small-box bg-grey-gradient">
      <a href="#tab_2-2b" data-toggle="tab">
           <img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:23px; width:23px;" > 
          HCG&nbsp; &nbsp;&nbsp;&nbsp;</a> 
       <br><p></p>
  
         <div class="small-box bg-grey-gradient"> 
       <a href="#tab_3-2b" data-toggle="tab">
           <img src="../../database icons/approve2.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969;height:23px; width:23px;" > 
           Urine&nbsp;analysis&nbsp;&nbsp; </a> <br><p></p>
         </td>  
           </tbody>
           </table>
       </div>
       
         <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;">
      <div class="small-box bg-grey-gradient">
      <a href="#tab_1-1c" data-toggle="tab">
          <center><img src="../../database icons/approve1.png"width="100" height="100" class="img-circle" style="border: 3px solid #6c6969; height:40px; width:40px;"> 
          Exit&nbsp;results&nbsp; &nbsp;</a>
      <br><br><p></p>
      </div> 
      </td>
    
           </tbody>
           </table>
       </div>
       
            </ul>
            <div class="tab-content" style="border:0px;">
              <div class="tab-pane active" id="tab_1-1">
              
       
      <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:35%; border: 0px;"><?php echo $arow['NTIHCNO']; ?></td>
   
        <td style="width:65%;border:0px;"> <?php echo $arow['NAME']; ?> </td>  
           </tbody>
           </table>
       </div>
     <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:35%; border: 0px;">TEST DESCRIPTION</td>
   
        <td style="width:65%;border:0px;"> <?php echo $arow['TESTDESCRIPTION']; ?> </td>  
           </tbody>
           </table>
       </div>  
       
       <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:35%; border: 0px;">TEST STATUS&nbsp;</td>
   
        <td style="width:65%;border:0px;"><input type="text" readonly="" value="<?php echo $arow['TESTSTATUS']; ?>"></B> </td>  
           </tbody>
           </table>
    </div>   
        
      <div class="col-sm-3">     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:30%; border: 0px;">TECHNICIAN</td> 
        <td style="width:70%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['TECHNICIAN_NAME']; ?>"> </td>  
           </tbody>
           </table>
       </div>   
       
        
              </div>   
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
        <div class="col-sm-3"> 
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:35%; border: 0px;">Results </td>
   
        <td style="width:65%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['HEPATITIS_B']; ?>">  </td>  
           </tbody>
           </table>
              </div>  <div class="col-sm-9"></div>
        </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                <div class="col-sm-3">   
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:35%; border: 0px;"> Malaria RDTs</td>
   
        <td style="width:65%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['MALARIARDTs']; ?>"></td>  
           </tbody>
           </table> 
           </div>
       
       <div class="col-sm-3">   
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:35%; border: 0px;">Malaria microscopy</td>
   
        <td style="width:65%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['MALARIAMICROSCOPY']; ?>"></td>  
           </tbody>
           </table> 
           </div>
        
     <div class="col-sm-3">   
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:35%; border: 0px;">Measure</td>
   
        <td style="width:65%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['MICROSCOPY_MEASURE']; ?>"></td>  
           </tbody>
           </table> 
           </div> 
       
       <div class="col-sm-3">   
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:35%; border: 0px;">Other heamopatrasites</td>
   
        <td style="width:65%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['OTHERHEAMOPATRASITES']; ?>"></td>  
           </tbody>
           </table>  
           </div>    
        
        </div>
              <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_1-1a">
                 <div class="col-sm-3"></div> <div class="col-sm-3"> 
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:35%; border: 0px;"> HB results</td>
   
        <td style="width:65%;border:0px;">  <input type="text"  readonly="" value="<?php echo $arow['HB']; ?>"> </td>  
           </tbody>
           </table>
              </div>
         <div class="col-sm-6"></div></div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2a">
        <div class="col-sm-3"></div> <div class="col-sm-3"> 
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;"> RBS results </td>
   
        <td style="width:60%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['HB']; ?>"> </td>  
           </tbody>
           </table>
             </div>
         <div class="col-sm-6"></div></div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2a">
              <div class="col-sm-3"></div> <div class="col-sm-3"> 
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;">Blood group </td>
   
        <td style="width:60%;border:0px;"><input type="text"  readonly="" value="<?php echo $arow['BLOOD']; ?>"> </td>  
           </tbody>
           </table>
              </div>
    <div class="col-sm-3"> 
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;">Results </td>
   
        <td style="width:60%;border:0px;"><input type="text"  readonly="" value="<?php echo $arow['BLOODRESULTS']; ?>"> </td>  
           </tbody>
           </table>
              </div>    
        <div class="col-sm-3"></div></div>
              <!-- /.tab-pane -->
        
         <div class="tab-pane" id="tab_1-1b">
                <div class="col-sm-3"></div> <div class="col-sm-3"></div> <div class="col-sm-3"> 
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;"> Syphilis</td>
   
        <td style="width:60%;border:0px;"><input type="text"  readonly="" value="<?php echo $arow['SYPHILIS']; ?>"> </td>  
           </tbody>
           </table>
              </div>
        <div class="col-sm-3"></div></div>
              <!-- /.tab-pane -->
        
              <div class="tab-pane" id="tab_2-2b">
             <div class="col-sm-3"></div> <div class="col-sm-3"></div> <div class="col-sm-3"> 
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;">HCG results </td>
   
        <td style="width:60%;border:0px;"> <input type="text"  readonly="" value="<?php echo $arow['HCG']; ?>"> </td>  
           </tbody>
           </table>
         
              </div>
         <div class="col-sm-3"></div></div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2b">
               <div class="col-sm-6"></div> <div class="col-sm-3"> 
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;"> Cystecells </td> 
        <td style="width:60%;border:0px;">  <input type="text"  readonly="" value="<?php echo $arow['CYSTECELLS']; ?>">  </td>  
        </tbody>
        </table></div>
    <div class="col-sm-3"> 
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
        <td style="width:40%; border: 0px;"> Proteins </td> 
        <td style="width:60%;border:0px;">  <input type="text"  readonly="" value="<?php echo $arow['PROTEINS']; ?>">  </td>  
        </tbody>
        </table></div> 
              </div>
              <!-- /.tab-pane -->
        
        <div class="tab-pane" id="tab_1-1c"> 
         <div class="col-sm-9"></div><div class="col-sm-3"> 
        <form class="form-horizontal" action="lab_results_quit.php" method="POST"> 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>   
                  <input type="hidden" id="VISTID" name="VISTID" value="<?php  echo $VISTID; ?>" > 
           <input type="hidden" id="ACTION" name="ACTION" value="REVIEWED-ANC UNIT" >     
        <td style="width:100%;border:0px;">   <input type="image" name="submit" id="button" src="../../database icons/delete5.jpg" width="50" height="45" 
         data-toggle="tooltip" title="Check out"/> </td>  
           </tbody>
           </table> </form>
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
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

<?php
  $id = $_GET['q'];  
  
  $NTIHCNO = '';  
  $PHONECONTACT = '';   
  $AGE = '';  
  $SCHOOLINGSTATUS = '';     
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
   
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $AGE = $row['AGE']; 
   $PHONECONTACT  = $row['PHONECONTACT']; 
   $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
      } 
  ?>
  

  <?php
  $id = $_GET['q'];  
  
  $NTIHCNO = '';  
  $DATECREATED = '';   
  $CLIENTNAME = '';  
  $SCHOOLINGSTATUS = '';
  $HEALTHUNIT = '';  
  $LCONE = ''; 
  $CARDIACDISEASE = ''; 
  $DATEOFBIRTH = '';  
  $KIDNEYDISEASE = '';   
  $VILLAGE = '';  
  $PARISH = '';
  $HYPERTENSION = '';  
  $TB = '';
  $CLIENTOCCUPATION = ''; 
  $RELIGION = '';  
  $ASTHMA = '';   
  $TRIBE = '';  
  $STI = '';
  $SICKLECELLS = '';  
  $MARITALSTATUS = ''; 
  $EPILEPSYTWO = ''; 
  $ANYHOSPITALIZATION = '';
  $DIABETESONE = '';  
  $BLEEDINGTWO = ''; 
  $NEXTOFKIN = '';  
  $NEXTOFKINCONTACT = '';   
  $NEXTOFKINRELATIONSHIP = '';  
  $OCCUPATION = '';
  $OPERATIONS = '';  
  $BLOODTRANSFUSION = ''; 
  $ADDRESS = '';  
  $REASONFORBLOODTRANSFUSION = ''; 
  $GRAVIDA = '';  
  $PARA = '';   
  $ABORTIONS = '';  
  $FRACTURES = '';
  $ECTOPICPREGNANCY = '';  
  $BLEEDINGTHREE = '';  
  $CAESAREANSECTION = ''; 
  $VACUUMSXTRACTION = '';  
  $MENSES = '';   
  $AMOUNT = '';  
  $RETAINEDPLACENTA = '';
  $PPH = '';  
  $METHODEVERUSED = ''; 
  $DISCONTINUEDATE = '';  
  $OPERATIONSONTHEUTERUS = ''; 
  $CERVICALCIRCLAGE = '';  
  $REASONFORDISCONTINUE = '';   
  $REASONFORNEVERATTEMPT = '';  
  $SMOKING = '';
  $ALCOHOL = '';  
  $HEALTHOFTHEHUSBAND = '';
  $FIRSTDAYOFLNMP = '';  
  $SERIALNO = ''; 
  $PHONECONTACT = '';  
  $CLIENTNAME = ''; 
  $SYPHILISTEST = '';  
  $XRAYONE = '';
  $MPS = '';  
  $XRAYTWO = ''; 
  $VCTHIV = '';  
  $XRAYTHREE = ''; 
  $OTHERTEST = '';  
  $PELVICASS = '';
  $DIAGONALCONJUGATE = '';  
  $SACRALCURVE = ''; 
  $PELVISADEQUATE = '';  
  $ISACHIALTUBEROTIES = '';    
  $SUBPUBICARCH = '';  
  $ISICHIAL = ''; 
  $ULSRONE = '';  
  $ULSRDATEONE = ''; 
  $ULSRTWO = '';  
  $ULSRDATETWO = ''; 
  $ULSRTHREE = '';  
  $ULSRDATETHREE = '';
  $ULSRFOUR = '';  
  $ULSRDATEFOUR = ''; 
  $ULSRFIVE = '';  
  $ULSRDATEFIVE = ''; 
  $RFRFDONE = '';
  $RFRFDTWO = '';  
  $RFRFDTHREE = ''; 
  $RFRFDFOUR = '';  
  $RFRFDFIVE = '';
    
   
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
      
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM antenatalcare  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $DATECREATED = $row['DATECREATED']; 
   $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS']; 
   $HEALTHUNIT  = $row['HEALTHUNIT'];
   $LCONE  = $row['LCONE']; 
   $CARDIACDISEASE  = $row['CARDIACDISEASE'];
   $DATEOFBIRTH  = $row['DATEOFBIRTH']; 
   $KIDNEYDISEASE = $row['KIDNEYDISEASE'];
     $VILLAGE = $row['VILLAGE']; 
   $PARISH  = $row['PARISH']; 
   $HYPERTENSION  = $row['HYPERTENSION'];
   $TB  = $row['TB']; 
   $CARDIACDISEASE  = $row['CARDIACDISEASE']; 
     $CLIENTOCCUPATION = $row['CLIENTOCCUPATION'];
     $RELIGION = $row['RELIGION']; 
   $ASTHMA  = $row['ASTHMA']; 
   $TRIBE  = $row['TRIBE'];
   $STI  = $row['STI']; 
   $SICKLECELLS  = $row['SICKLECELLS']; 
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EPILEPSYTWO = $row['EPILEPSYTWO'];  
   $ANYHOSPITALIZATION = $row['ANYHOSPITALIZATION']; 
   $DIABETESONE  = $row['DIABETESONE'];  
   $BLEEDINGTHREE  = $row['BLEEDINGTHREE'];    
   $BLEEDINGTWO = $row['BLEEDINGTWO'];
     $NEXTOFKIN = $row['NEXTOFKIN']; 
   $NEXTOFKINCONTACT  = $row['NEXTOFKINCONTACT']; 
   $NEXTOFKINRELATIONSHIP  = $row['NEXTOFKINRELATIONSHIP'];
   $OCCUPATION  = $row['OCCUPATION']; 
   $OPERATIONS  = $row['OPERATIONS']; 
     $BLOODTRANSFUSION = $row['BLOODTRANSFUSION'];
     $ADDRESS = $row['ADDRESS']; 
     $REASONFORBLOODTRANSFUSION  = $row['REASONFORBLOODTRANSFUSION']; 
   $GRAVIDA  = $row['GRAVIDA'];
   $PARA  = $row['PARA']; 
   $ABORTIONS  = $row['ABORTIONS']; 
     $FRACTURES = $row['FRACTURES'];
     $DC = $row['DC'];
   $ECTOPICPREGNANCY = $row['ECTOPICPREGNANCY'];  
   
   $CAESAREANSECTION = $row['CAESAREANSECTION'];
     $VACUUMSXTRACTION = $row['VACUUMSXTRACTION']; 
     $MENSES  = $row['MENSES']; 
   $AMOUNT  = $row['AMOUNT'];
   $RETAINEDPLACENTA  = $row['RETAINEDPLACENTA']; 
   $PPH  = $row['PPH']; 
     $METHODEVERUSED = $row['METHODEVERUSED'];
     $DISCONTINUEDATE = $row['DISCONTINUEDATE'];
   $OPERATIONSONTHEUTERUS = $row['OPERATIONSONTHEUTERUS'];   
   $CERVICALCIRCLAGE  = $row['CERVICALCIRCLAGE']; 
   $REASONFORDISCONTINUE  = $row['REASONFORDISCONTINUE'];
   $REASONFORNEVERATTEMPT  = $row['REASONFORNEVERATTEMPT']; 
   $SMOKING  = $row['SMOKING']; 
     $ALCOHOL = $row['ALCOHOL']; 
     $HEALTHOFTHEHUSBAND = $row['HEALTHOFTHEHUSBAND'];
   $FIRSTDAYOFLNMP = $row['FIRSTDAYOFLNMP'];  
   $SERIALNO  = $row['SERIALNO']; 
     $id  = $row['id']; 
   $CLIENTNAME  = $row['CLIENTNAME']; 
     $PHONECONTACT = $row['PHONECONTACT'];  
     $SYPHILISTEST = $row['SYPHILISTEST']; 
     $XRAYONE = $row['XRAYONE'];
   $MPS = $row['MPS'];   
   $XRAYTWO  = $row['XRAYTWO']; 
     $VCTHIV  = $row['VCTHIV']; 
   $XRAYTHREE  = $row['XRAYTHREE']; 
     $OTHERTEST = $row['OTHERTEST'];  
     $SACRALCURVE = $row['SACRALCURVE'];  
   $PELVISADEQUATE  = $row['PELVISADEQUATE']; 
     $ISACHIALTUBEROTIES  = $row['ISACHIALTUBEROTIES']; 
   $SUBPUBICARCH  = $row['SUBPUBICARCH']; 
     $ISICHIAL = $row['ISICHIAL'];    
     $PELVICASS  = $row['PELVICASS']; 
     $DIAGONALCONJUGATE = $row['DIAGONALCONJUGATE'];
     $ULSRONE = $row['ULSRONE'];    
   $ULSRDATEONE  = $row['ULSRDATEONE'];  
   $ULSRTWO  = $row['ULSRTWO']; 
   $ULSRDATETWO  = $row['ULSRDATETWO']; 
     $ULSRTHREE = $row['ULSRTHREE'];  
     $ULSRDATETHREE = $row['ULSRDATETHREE'];  
   $ULSRFOUR  = $row['ULSRFOUR']; 
     $ULSRDATEFOUR  = $row['ULSRDATEFOUR']; 
   $ULSRFIVE  = $row['ULSRFIVE']; 
     $ULSRDATEFIVE = $row['ULSRDATEFIVE'];  
     $RFRFDONE = $row['RFRFDONE'];  
   $RFRFDTWO  = $row['RFRFDTWO']; 
     $RFRFDTHREE  = $row['RFRFDTHREE']; 
   $RFRFDFOUR  = $row['RFRFDFOUR']; 
     $RFRFDFIVE = $row['RFRFDFIVE']; 
     
      } 
  ?>
   
</head>
   
      <!-- title row -->
      <div class="row" style="border: 2px solid #dddddd;">
       <body class="  ">
        <script>
function myFunction() {
    window.print();
}
</script> 

                  <!-- Info boxes --> 
                     

        <div class="widget-box">
          <div class="widget-title" > <span class="icon"> <i class="icon-pencil"></i> </span> 
          </div>
          <div class="widget-content nopadding" style="background-color:#fff;" > 
          
   
     <div class="col-sm-4">
             <table class="table-responsive" style="margin-top:30px;">
             <table class="table" style="border:0px;">
             <tr>

                <th style="width:100%;border:0px;"><b>INVESTIGATIONS</b>  </th>

              </tr>
        </table>

             
               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:30%;border:0px  "> <b> Blood : HB</b>   </th>

                <th style="width:25%;border:0px ">
                 </th>

                 <th style="width:10%;border:0px  ">X-RAY </th>

                <th style="width:35%;border:0px ">  </th>

              </tr>
        </table>
               
             <form  class="form-horizontal" action="anc_updatedem2.php" method="POST" style="height:auto; font-weight:normal;">
      
            
                 
             <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
             <tr> 
                <th style="width:25%;border:0px;">Syphilis test  </th> 
                <th style="width:30%;border:0px ;">
                <input type="text" name="SYPHILISTEST" class="switch-input" id="SYPHILISTEST"  value="<?php  echo $SYPHILISTEST; ?>" 
                style="width:100%;background-color:#fbf9f3;">
                 </th>

                 <th style="width:10%;border:0px;">  </th>

                <th style="width:35%;border:0px;">
                <input type="text" name="XRAYONE" class="switch-input" id="XRAYONE"  value="<?php  echo $XRAYONE; ?>"  
                style="width:100%;background-color:#fbf9f3;"> </th>

              </tr>
        </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:25%;border:0px;">MPs </th>

                <th style="width:30%;border:0px ;">
                <input type="text" name="MPS" class="switch-input" id="MPS"  value="<?php  echo $MPS; ?>" 
                style="width:100%;background-color:#fbf9f3;">
                 </th>

                 <th style="width:10%;border:0px;">  </th>

                <th style="width:35%;border:0px;">
                <input type="text" name="XRAYTWO" class="switch-input" id="XRAYTWO"  value="<?php  echo $XRAYTWO; ?>" 
                style="width:100%;background-color:#fbf9f3;"> </th>

              </tr>
        </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:25%;border:0px;">VCT/HIV</th>
                


                <th style="width:30%;border:0px ;">
                <input type="text" name="VCTHIV" class="switch-input" id="VCTHIV"  value="<?php  echo $VCTHIV; ?>" 
                style="width:100%;background-color:#fbf9f3;">
                </th>

                <th style="width:10%;border:0px;">  </th>

                <th style="width:35%;border:0px;">
                <input type="text" name="XRAYTHREE" class="switch-input" id="XRAYTHREE"  value="<?php  echo $XRAYTHREE; ?>" 
                style="width:100%;background-color:#fbf9f3;"> </th>

              </tr>
        </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:25%;border:0px;">Others </th>

                <th style="width:30%;border:0px ;">
                <input type="text" name="OTHERTEST" class="switch-input" id="OTHERTEST"  value="<?php  echo $OTHERTEST; ?>" 
                style="width:100%;background-color:#fbf9f3;">
                 </th>

                 <th style="width:10%;border:0px;">  </th>

                <th style="width:35%;border:0px;">  </th>

              </tr>
        </table>

              <table class="table-responsive" style="margin-top:-10px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;"> Pelvic assessment (36 weeks)</th>

                <th style="width:40%;border:0px;">  <input type="text" name="PELVICASS" id="PELVICASS" value="<?php  echo $PELVICASS; ?>" 
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>


              </tr>
        </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;"> Diagonal conjugate</th>

                <th style="width:40%;border:0px;">  <input type="text" name="DIAGONALCONJUGATE" id="DIAGONALCONJUGATE" value="<?php  echo $DIAGONALCONJUGATE; ?>" 
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
        </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;">Sacral curve</th>

                <th style="width:40%;border:0px;">  <input type="text" name="SACRALCURVE" id="SACRALCURVE" value="<?php  echo $SACRALCURVE; ?>" 
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
        </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;">Isichial spines</th>

                <th style="width:40%;border:0px;">  <input type="text" name="ISICHIAL" id="ISICHIAL" value="<?php  echo $ISICHIAL; ?>" 
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>


              </tr>
        </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;"> Sub pubic arch</th>

                <th style="width:40%;border:0px;">  <input type="text" name="SUBPUBICARCH" id="SUBPUBICARCH" value="<?php  echo $SUBPUBICARCH; ?>" 
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
        </table>

              <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;"> Isachial tuberosities</th>

                <th style="width:40%;border:0px;">  <input type="text" name="ISACHIALTUBEROTIES" id="ISACHIALTUBEROTIES" value="<?php  echo $ISACHIALTUBEROTIES; ?>" 
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
        </table>

               <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:60%;border:0px;">Pelvis adequate/ borderline/ contracted</th>

                <th style="width:40%;border:0px;">  <input type="text" name="PELVISADEQUATE" id="PELVISADEQUATE" value="<?php  echo $PELVISADEQUATE; ?>" 
                class="switch-input"
                style="width:100%;background-color:#fbf9f3;">
                 </th>

              </tr>
        </table>

               </div>

              <div class="col-sm-4">
               <table class="table-responsive" style="margin-top:30px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:100%;border:0px;"><b>ULTRA SOUND REPORTS AND DATES</b>  </th>

              </tr>
        </table>

               <table class="table table-tabled" style="background-color:#ffffff; margin-top:32px; border:0px; ">
   <thead>
   <tr>
   <th style="background-color:#ffffff; border:0px;">Details</th>
   <th style="background-color:#ffffff; border:0px;">Date</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:75%;border:0px;"><input type="text" name="ULSRONE" id="ULSRONE" value="<?php  echo $ULSRONE; ?>"  
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATEONE" id="ULSRDATEONE" value="<?php  echo $ULSRDATEONE; ?>" 
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
  <tr>
 </tbody>
 </table>


    <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

              <td style="width:75%;border:0px;"><input type="text" name="ULSRTWO" id="ULSRTWO" value="<?php  echo $ULSRTWO; ?>" 
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATETWO" id="ULSRDATETWO" value="<?php  echo $ULSRDATETWO; ?>" 
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

              </tr>
        </table>


     <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

              <td style="width:75%;border:0px;"><input type="text" name="ULSRTHREE" id="ULSRTHREE" value="<?php  echo $ULSRTHREE; ?>" 
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATETHREE" id="ULSRDATETHREE" value="<?php  echo $ULSRDATETHREE; ?>" 
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

              </tr>
        </table>

             <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

              <td style="width:75%;border:0px;"><input type="text" name="ULSRFOUR" id="ULSRFOUR" value="<?php  echo $ULSRFOUR; ?>" 
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATEFOUR" id="ULSRDATEFOUR" value="<?php  echo $ULSRDATEFOUR; ?>" 
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

              </tr>
        </table>

              <table class="table-responsive" style="margin-top:-23px;" >
             <table class="table" style="border:0px;">
              <tr>

              <td style="width:75%;border:0px;"><input type="text" name="ULSRFIVE" id="ULSRFIVE" value="<?php  echo $ULSRFIVE; ?>" 
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

   <td style="width:25%;border:0px;"><input type="text" name="ULSRDATEFIVE" id="ULSRDATEFIVE" value="<?php  echo $ULSRDATEFIVE; ?>" 
                style="width:100%; text-align:left;background-color:#fbf9f3;"></td>

              </tr>
        </table>
              </div>

              <div class="col-sm-4">

                <table class="table-responsive" style="margin-top:30px;" >
             <table class="table" style="border:0px;">
              <tr>

                <th style="width:100%;border:0px;"><b>RISK FACTORS AND RECOMMENDATIONS FOR DELIVERY</b>  </th>

              </tr>
        </table>

   <table class="table table-tabled" style="background-color:#ffffff; margin-top:48px; border:0px; ">
   <thead>
   <tr>

   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;border:0px;"><input type="text" name="RFRFDONE" id="RFRFDONE" value="<?php  echo $RFRFDONE; ?>" 
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
  <tr>
 </tbody>
 </table>

 <table class="table table-tabled" style="background-color:#ffffff; margin-top:-23px; border:0px; ">
   <thead>
   <tr>
     <td style="width:100%;border:0px;"><input type="text" name="RFRFDTWO" id="RFRFDTWO" value="<?php  echo $RFRFDTWO; ?>" 
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
   </thead>
 </tbody>
 </table>

 <table class="table table-tabled" style="background-color:#ffffff; margin-top:-23px; border:0px; ">
   <thead>
   <tr>
     <td style="width:100%;border:0px;"><input type="text" name="RFRFDTHREE" id="RFRFDTHREE" value="<?php  echo $RFRFDTHREE; ?>" 
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
   </thead>
 </tbody>
 </table>

   <table class="table table-tabled" style="background-color:#ffffff; margin-top:-23px; border:0px; ">
   <thead>
   <tr>
      <td style="width:100%;border:0px;"><input type="text" name="RFRFDFOUR" id="RFRFDFOUR" value="<?php  echo $RFRFDFOUR; ?>" 
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
   </thead>
   </tbody>
   </table>


   <table class="table table-tabled" style="background-color:#ffffff; margin-top:-23px; border:0px; ">
   <thead>
   <tr>
     <td style="width:100%;border:0px;"><input type="text" name="RFRFDFIVE" id="RFRFDFIVE" value="<?php  echo $RFRFDFIVE; ?>" 
   style="width:100%; text-align:left;background-color:#fbf9f3;"></td>
   </tr>
   </thead>
   </tbody>
   </table> 
   
    <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>">   
             <input type="hidden" name="REGNO" id="REGNO" value="<?php echo $id; ?>">   
    <input type="hidden" name="update" value="Update" style="height: 24px;">  
   </form>
   <br>
   </div> </div>
   
   
<?php
  $id = $_GET['q'];  
  
  $NTIHCNO = ''; 
  $CLIENTNAME  = '';  
  $AGE_GROUP = ''; 
  $AGE1  = '';
  $SERVICE_EPISODE = '';
  $SEX = '';      
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
   
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $CLIENTNAME = $row['CLIENTNAME'];  
     $AGE_GROUP = $row['AGE_GROUP']; 
   $AGE1 = $row['AGE1']; 
   $SERVICE_EPISODE = $row['SERVICE_EPISODE'];
     $SEX  = $row['SEX'];  
      } 
  ?>
  
   <div class="col-sm-8">
 
              <form  class="form-horizontal" action="anc_processdrugs.php" method="POST" style="height:auto; font-weight:normal;"> 
               
               
               <table class="table-responsive" style="margin-top:-20px;">  
            <table class="table"  style="border:0px;">
              <tr> 
                <td style="width:30%;border:0px;">  <input type="text" id="CLIENTNAME" name="CLIENTNAME" value="<?php  echo $CLIENTNAME; ?>" readonly="" > </td> 
          <th style="width:15%;border:0px;"><input type="text" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>" readonly=""> </th>
                <th style="width:10%; text-align:left;border:0px;">Age</th>
                <td style="width:10%;border:0px;">   <input type="text"  id="AGE" name="AGE" value="<?php  echo $AGE1; ?>" readonly="">  </td>  
                
                 <th style="width:10%; text-align:left;border:0px;">Date</th>
                <td style="width:25%;border:0px;">  <input type="date"  id="DATECREATED" name="DATECREATED" value="<?php echo date('Y-m-d'); ?>"  required="required" > </td> 
                  
               
       </tr>             
            </table>
               
                       
<input type="hidden" id="CHECKAVAILABILITY" name="CHECKAVAILABILITY"  value="NO"> 
<input type="hidden" id="REQUESTINGUNIT"name="REQUESTINGUNIT" value="ANTENATAL CARE"> 
                 
                  <input type="hidden" name="SCHOOLING" id="SCHOOLING"  value="<?php echo $SCHOOLINGSTATUS; ?>"  readonly="">  
                 
                  <input type="hidden" name="AGE_GROUP" id="AGE_GROUP" value="<?php  echo $AGE_GROUP; ?>" >
                  <input type="hidden"  id="USERINITIAL" name="USERINITIAL" value="<?php  echo $nameofuser; ?>"  >
                   <input type="hidden"  id="SEX" name="SEX" value="<?php  echo $SEX; ?>"  >     
                  <input type="hidden"  id="SERVICE_EPISODE" name="SERVICE_EPISODE"  value="<?php echo uniqid();?>" > 
          
    
          
     <table class="table table-bordered" id="dataTable1" style="font-weight:normal; margin-top:0px;border:0px; ">
    <thead>
      <tr>
   <th style="border:2px solid #ecf0f5;"> ## </th>
   <th style="border:2px solid #ecf0f5; width:60%;">DRUG DESCRIPTION</th> 
   <th style="border:2px solid #ecf0f5;width:10%;">QTY ISSUED</th> 
   <th style="border:2px solid #ecf0f5; width:10%;">TIMES</th>
   <th style="border:2px solid #ecf0f5;width:10%;">PERIOD</th> 
   <th style="border:2px solid #ecf0f5; width:10%;">TOTAL</th>  
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
                            <input type="button" value="Add drugs" onClick="addRow13('dataTable1')" class="btn-success" style="background-color:green;" > &nbsp;
                            <input type="button" value="Remove" onClick="deleteRow13('dataTable1')"class="btn-danger" style="background-color:red;" >
                            <input type="hidden" value="0" name="mytable_rows1"  id="mytable_rows1" >
                            <input type="hidden" id="mytable_rows" name="mytable_rows" value="0">
 
     <input type="submit" name="button" id="button" value="Save"/>
      <a href="anc_home.php" class="btn btn-danger" style="height: 25px; margin-top: -2px;"> Close <span class="sr-only">(current)</a> &nbsp;  


      <script> 
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();
         document.getElementById('TIMEOUT').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script> 
<input type="hidden"  id="TIMEOUT" name="TIMEOUT" >
     <BR><BR> 
     </form>    
   
  
  
   </div>     
  <P>Prescription history</P>                    
       
  <?php
  $id = $_GET['q'];   
  $NTIHCNO = '';   
  $CLIENTNAME = '';   
  $DATECREATED = ''; 
  $php = array(); 
  $dnx = array();
  $fqx = array();
  $qtyrecieved = array();
  $tmx = array();
  $variance = array(); 
  $AA = array();
  $BB = array();
  $CC = array(); 
  $DD = array(); 
   
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
      
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM prescription  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];   
   $DATECREATED  = $row['DATECREATED'];  
   $CLIENTNAME  = $row['CLIENTNAME']; 
   $php[] = $row['DATECREATED'];  
   $dnx[] = $row['DRUGNAME'];
     $fqx[]    = $row['FREQUENCY'];
   $qtyrecieved[] = $row['TIMES']; 
     $tmx[]       = $row['PERIOD']; 
   $variance[]    = $row['QTYPRESCRIBED'];  
   
   $AA[] = $row['USERINITIAL']; 
     $BB[]       = $row['CHECKAVAILABILITY']; 
   $CC[]    = $row['DISPENSEDBY'];
   $DD[]    = $row['DISPENSEDDATE'];   
      } 
  ?> 
      
    <div id="dialog-window">
  <div id="scrollable-content">
   <ul>
                               <div class=""  id=" " style="margin-left: -41px;">
                                     
 <table class="table table-table table-tabled" id="mytable2" style="font-weight:normal; margin-top:0px; ">
       <thead>
      <tr>
   <th style="border:2px solid #ecf0f5;width:1%;">*  </th>
   <th style="border:2px solid #ecf0f5;width:10%;">ISSUANCE DATE</th> 
   <th style="border:2px solid #ecf0f5;width:20%;">DRUG DESCRIPTION</th> 
   <th style="border:2px solid #ecf0f5;width:5%;">QTY</th> 
   <th style="border:2px solid #ecf0f5;width:5%;">TIMES</th>
   <th style="border:2px solid #ecf0f5;width:5%;">PERIOD</th> 
   <th style="border:2px solid #ecf0f5;width:5%;">TOTAL</th> 
   <th style="border:2px solid #ecf0f5;width:15%;">PRESCRIBED.BY</th> 
   <th style="border:2px solid #ecf0f5;width:9%;">ISSUED</th> 
   <th style="border:2px solid #ecf0f5;width:15%;">DISPENSED.BY</th> 
   <th style="border:2px solid #ecf0f5; width:10%;">ENTRY.DATE</th> 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($php); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($variance[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  
                                                  <td> <input  name="php[]" readonly="" type="text" value="<?php  echo $php[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td> 
                                                  
                                                  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>
                                                   
                                                  <td> <input  name="fqx[]" readonly="" type="text" value="<?php  echo $fqx[$s]; ?>"   class="form-control input-md"
                                                   style= "width:100%; background-color:#fff; text-align:center;border:0px;"/></td> 
                                                    
                                                   
                                                     <td> <input  name="qtyrecieved[]" type="numeric" value="<?php echo $qtyrecieved[$s]; ?>" required="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;text-align:center;border:0px;"/></td>  
                                                  
                                                  <td> <input  name="tmx[]" type="numeric" value="<?php echo $tmx[$s]; ?>"  readonly="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>
                                                  
                                                  
                                                  <td> <input  name="variance[]" type="numeric" value="<?php echo $variance[$s]; ?>" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fff;text-align:center;border:0px;"/></td> 
                                                   <td> <?php echo $AA[$s]; ?></td> 
                                                   <td> <?php echo $BB[$s]; ?></td>
                                                   <td> <?php echo $CC[$s]; ?></td>
                                                   <td> <?php echo $DD[$s]; ?></td>
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
         
         <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>">    
                   

                               </div>
                                </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>

<style>
#dialog-window {
  height: 150px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 150px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>


              </div>
 


<script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#dnx"+num).val(data[2]);
  $("#bal").val(data[2]);
  $("#bal2").val(data[3]);

}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "drugsearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>


<?php
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT * FROM ntihcdrugs"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['DRUGNAME'] . "</option>";   }
  }
$connect->close();
?>


   <script> 

    function  dostg(thisid){

     var val = thisid.split("_")[1];
   var v1 = parseFloat(document.getElementById("pdx_"+val).value);
   var v2 = parseFloat(document.getElementById("fqx_"+val).value);
   var v3 = parseFloat(document.getElementById("tmx_"+val).value);

   var v4 = v1*v2*v3;
   document.getElementById("qtyx_"+val).value = v4;

    }

   function addRow13(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;
     var ttt     = "<?php   echo $stss; ?>";

   var s1 = '<select name="dnx[]" id="dnx'+rowCount+'" onKeyUp="domee(this)" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >'+
                                        '<option></option>'+
                                        '<option><?php   echo $stss; ?></option>'+
                                        '</select>';

   var fq = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="fqx[]" id="fqx_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';


   var tm = '<input type="text" onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="tmx[]"  id="tmx_'+rowCount+'" required="required" '+
             'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';

   var pd = '<input type="numeric"  onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pdx[]"  id="pdx_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';



   var qty = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qtyx[]"  id="qtyx_'+rowCount+'" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:#fff;" />';


     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+s1+' </td>'+
         '<td>'+fq+' </td>'+
         '<td>'+tm+' </td>'+
         '<td>'+pd+' </td>'+
         '<td>'+qty+' </td>';


      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows1').value=rowCount;

  }

  function deleteRow12(tableID) {
         var table = document.getElementById(tableID);
       var rowCount = table.rows.length;
       for(var i=1; i<rowCount; i++) {
         var row = table.rows[i];
         var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
           rowCount--;
           i--;
         }
        }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
          table.rows[x].cells[1].childNodes[0].id="p_"+x;
      table.rows[x].cells[1].childNodes[0].name="p_"+x;
          table.rows[x].cells[2].childNodes[0].id="c_"+x;
      table.rows[x].cells[2].childNodes[0].name="c_"+x;
          }
           document.getElementById('mytable_rows').value=rowCount-1;
}

 function deleteRow13(tableID) {
         var table = document.getElementById(tableID);
       var rowCount = table.rows.length;
       for(var i=1; i<rowCount; i++) {
         var row = table.rows[i];
         var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
           rowCount--;
           i--;
         }
        }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
          table.rows[x].cells[1].childNodes[0].id="dnx_"+x; 
      table.rows[x].cells[2].childNodes[0].id="fqx_"+x; 
      table.rows[x].cells[3].childNodes[0].id="tmx_"+x; 
      table.rows[x].cells[4].childNodes[0].id="pdx_"+x;  
      table.rows[x].cells[5].childNodes[0].name="qtyx_"+x;

          }
           document.getElementById('mytable_rows1').value=rowCount-1;
} 
  </script>
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
  $CLIENTNAME  = '';  
  $AGE_GROUP = ''; 
  $AGE1  = '';
  $SERVICE_EPISODE = '';
  $SEX = '';  
  
  $ARTCLINIC  = '';
  $FINALREACTIVITY = '';
  $VISTTYPE = '';      
  
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
   
   $ARTCLINIC = $row['ARTCLINIC']; 
   $FINALREACTIVITY = $row['FINALREACTIVITY'];
     $VISTTYPE  = $row['VISTTYPE']; 
      } 
  ?>
  
  
</head>
   
      <!-- title row -->
      <div class="row">
       <body class="  ">
        <script>
function myFunction() {
    window.print();
}
</script> 
 
     <p style="text-align:center; font-weight:bold;background-color:transparent;"> ANTENATAL PROGRESS EXAMINATION</p>  
    <div class="container-fluid" style="background-color:transparent;">

        <div class="widget-box" style="background-color:transparent;">
          <div class="widget-title" > <span class="icon"> <i class="icon-pencil"></i> </span> 
          </div>
          <div class="widget-content nopadding" style="background-color:transparent;" > 
          
           <?php
  $id = $_GET['q'];

  $NTIHCNO = '';
  $DATECREATED = ''; 
  $SCHOOLINGSTATUS = '';
  $HEALTHUNIT = '';  
  $SERIALNO = '';
  $PHONECONTACT = '';
  $CLIENTNAME = '';

  $dnx = array();
  $fqx = array();
  $qtyrecieved = array();
  $tmx = array();
  $variance = array();
  $batch = array();
  $expdet = array();
  $remdrt = array();
  $lcn = array();
  $ma = array();
  $mb = array();
  $mc = array();
  $md = array();
  $me = array();
  $mf = array();
  $mg = array();
  $mh = array();
  $pdx = array();

  $qtyx = array();

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM anteprogress  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO'];
     $DATECREATED = $row['DATECREATED'];
   $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
   $HEALTHUNIT  = $row['HEALTHUNIT']; 
   $SERIALNO  = $row['SERIALNO']; 
   $CLIENTNAME  = $row['CLIENTNAME'];
     $PHONECONTACT = $row['PHONECONTACT'];

   $dnx[] = $row['VISTDATE'];
     $fqx[]    = $row['WEEKSOFAMENOE'];
   $qtyrecieved[] = $row['FUNDALHEIGHT'];
     $tmx[]       = $row['PRESENTATION'];
   $variance[]    = $row['POSITIONLIE'];
   $batch[]       = $row['RELATIONPP'];
   $expdet[]       = $row['FOETALHEART'];
   $remdrt[]        = $row['PROGRESSWEIGHT'];
   $lcn[]        = $row['PROGRESSBP'];
     $pdx[]       = $row['VARICOSEOEDEMA'];
   $ma[]       = $row['URINE'];
   $mb[]       = $row['TT'];
   $mc[]       = $row['IRONFOLIC'];
   $md[]       = $row['MEBENDAZOLE'];
   $me[]       = $row['IPT'];
   $mf[]       = $row['NETUSE'];
   $mg[]       = $row['COMPLAITS'];
   $mh[]       = $row['RETURNDATE'];
   $qtyx[]        = $row['NAMEOFEXAMINER'];


      }
  ?>
          
          
  <?php
  require('config_rom.php');
  ?>
  <table id="example3" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                    <th style="width:4%; ">S/No. </th>
                      <th style="width:8%; ">Date </th>
   <th style="width:5%; text-align:center; border:1px solid;">Weeks.of Amenorr hoea</th>
   <th style="width:5%; border:1px solid;">Fundal height</th>
   <th style="width:5%; text-align:center;  border:1px solid;">Presen tation</th>
   <th style="width:4%; text-align:center; border:1px solid;">Position lie</th>
   <th style="width:5%; border:1px solid;">Relation PP/Brim </th>
   <th style="width:4%; text-align:center;border:1px solid;">Foetal heart</th>
   <th style="width:4%; border:1px solid;">Weight</th>
   <th style="width:4%; text-align:center;border:1px solid;">BP</th>
   <th style="width:5%; text-align:center;  border:1px solid;">Varicose/ oedema</th>
   <th style="width:4%; text-align:center; border:1px solid;">Urine</th>
   <th style="width:4%; border:1px solid;">TT</th>
   <th style="width:4%; text-align:center;border:1px solid;">Iron / folic</th>
   <th style="width:4;  text-align:center;border:1px solid;">Mebenda zole</th>
   <th style="width:4%; border:1px solid;">IPT </th>
   <th style="width:4%; border:1px solid;">Net use </th>
   <th style="width:9%;  border:1px solid;text-align:center;">Complaits and remarks</th>
   <th style="width:9%;  border:1px solid;">Return date</th>
   <th style="width:9%;   text-align:center;border:1px solid;">Name of examiner</th>
               <th style="text-align:center;">ACTION</th>
                     <th>DEL</th>
                  </tr>
                  </tfoot>
          
                  <tbody>

             <?php
             include_once("configproxy.php");

             $result = mysqli_query($mysqli, "SELECT * FROM anteprogress  WHERE `NTIHCNO` = '$id'");

             while($res = mysqli_fetch_array($result)) {
             $dts = $res['NTIHCNO']."***".$res['id'];
              echo "<tr>";
        echo "<td>".$res['id']."</td>";
        echo "<td>".$res['VISTDATE']."</td>";
              echo "<td>".$res['WEEKSOFAMENOE']."</td>";
              echo "<td>".$res['FUNDALHEIGHT']."</td>"; 
        echo "<td>".$res['PRESENTATION']."</td>";
              echo "<td>".$res['POSITIONLIE']."</td>";  
            echo "<td>".$res['RELATIONPP']."</td>";
              echo "<td>".$res['FOETALHEART']."</td>";
              echo "<td>".$res['PROGRESSWEIGHT']."</td>"; 
        echo "<td>".$res['PROGRESSBP']."</td>";
              echo "<td>".$res['VARICOSEOEDEMA']."</td>";  
            echo "<td>".$res['URINE']."</td>";
              echo "<td>".$res['TT']."</td>";
              echo "<td>".$res['IRONFOLIC']."</td>"; 
        echo "<td>".$res['MEBENDAZOLE']."</td>";
              echo "<td>".$res['IPT']."</td>";   
            echo "<td>".$res['NETUSE']."</td>";
              echo "<td>".$res['COMPLAITS']."</td>";
              echo "<td>".$res['RETURNDATE']."</td>"; 
        echo "<td>".$res['NAMEOFEXAMINER']."</td>"; 
        echo '<td>  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              <a id="3__'.$dts.'" href="javascript:void(0)" onclick="getdetailsextension(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-edit"> </span></a>  
              </td>'; 
        echo "<td><a href=\"str_truncate.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Truncate</a></td>";  
              } 
              ?>
             </tbody>
             </table>
  
          <div class=""  id="getdetailsextension" >  </div>
          <script> 
          function getdetailsextension(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'upd_progress.php?q='+odno,
                       success : function(data){
                                $('#getdetailsextension').html(data);
                $("#outxzz").modal("show");
                                 }
               });
               } 
                </script>  
                                 <br><center><a href=<button class="small-box-footer" data-toggle="modal" data-target="#progres" 
                               style=" border-radius:3px; background-color:TRANSPARENT; font-size:11px;">   
                                <?php  echo $CLIENTNAME; ?> &nbsp;<?php  echo $NTIHCNO; ?>    <i class=" "></i></a><center>
        
           
              
     
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
    
   
   
      } 
  ?>
       <form id="form1" class="form-horizontal" action="anc_process_progress.php" method="POST" style="height:auto; font-weight:normal;">
     
              
                 <input type="hidden"  id="VISTDATECREATED" name="VISTDATECREATED" value="<?php echo date('Y-m-d'); ?>" > 
                 <input type="hidden"  id="DATECREATED" name="DATECREATED" value="<?php echo date('Y-m-d'); ?>" >   
                
                 <input type="hidden" name="REGNO" id="REGNO" value="<?php echo $id; ?>">    
         <input type="hidden" id="PHONECONTACT" name="PHONECONTACT" value="<?php  echo $PHONECONTACT; ?>">  
                 
        <input type="hidden" id="HEALTHUNIT" name="HEALTHUNIT" value="<?php  echo $HEALTHUNIT; ?>"> 
        <input type="hidden" name="USERINITIAL" id="USERINITIAL" value="<?php echo $nameofuser; ?>" > 
        <input type="hidden" name="USERDESIGNATION" id="USERDESIGNATION" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="USERACCOUNT" id="USERACCOUNT" value="<?php echo $rm; ?>" > 

    <table class="table table-bordered" id="mytable1" style="font-weight:normal; margin-top:0px;border:0px; background-color:transparent;">
    <thead>
      <tr>
    <th style="width:1%;text-align:center; border:1px solid;">  *  </th>
    <th style="width:8%; text-align:center; border:1px solid;">Date </th>
   <th style="width:5%; text-align:center; border:1px solid;">Weeks.of Amenorr hoea</th>
   <th style="width:5%; border:1px solid;">Fundal height</th>
   <th style="width:5%; text-align:center;  border:1px solid;">Presen tation</th>
   <th style="width:4%; text-align:center; border:1px solid;">Position lie</th>
   <th style="width:5%; border:1px solid;">Relation PP/Brim </th>
   <th style="width:4%; text-align:center;border:1px solid;">Foetal heart</th>
   <th style="width:4%; border:1px solid;">Weight</th>
   <th style="width:5%; text-align:center;border:1px solid;">BP</th>
   <th style="width:5%; text-align:center;  border:1px solid;">Varicose/ oedema</th>
   <th style="width:4%; text-align:center; border:1px solid;">Urine</th>
   <th style="width:4%; border:1px solid;">TT</th>
   <th style="width:4%; text-align:center;border:1px solid;">Iron / folic</th>
   <th style="width:4;  text-align:center;border:1px solid;">Mebenda zole</th>
   <th style="width:4%; border:1px solid;">IPT </th>
   <th style="width:4%; border:1px solid;">Net use </th>
   <th style="width:10%;  border:1px solid;text-align:center;">Complaits and remarks</th>
   <th style="width:10%;  border:1px solid;">Return date</th>
   <th style="width:10%;   text-align:center;border:1px solid;">Name of examiner</th>


      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  
<?php
  $id = $_GET['q'];  
  
  $NTIHCNO = ''; 
  $CLIENTNAME  = '';  
  $AGE_GROUP = ''; 
  $AGE1  = '';
  $SERVICE_EPISODE = '';
  $SEX = '';  
  $SCHOOLING = '';  
  $ARTCLINIC  = '';
  $FINALREACTIVITY = '';
  $VISTTYPE = '';      
  
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
   $SCHOOLING  = $row['SCHOOLING']; 
   $ARTCLINIC = $row['ARTCLINIC']; 
   $FINALREACTIVITY = $row['FINALREACTIVITY'];
     $VISTTYPE  = $row['VISTTYPE']; 
      } 
  ?>
                 <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>"> 
                 <input type="hidden" name="AGE" id="AGE" value="<?php echo $AGE1; ?>">  
                 <input type="hidden" name="AGE_GROUP" id="AGE_GROUP" value="<?php echo $AGE_GROUP; ?>"> 
         
         <input type="hidden" id="CLIENTNAME" name="CLIENTNAME" value="<?php  echo $CLIENTNAME; ?>">
         <input type="hidden" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" value="<?php  echo $SCHOOLING; ?>">  
                   
                  <label style="font-size:11px;"> ART CLINIC</label> <select id="ARTCLINIC" name="ARTCLINIC" value="<?php  echo $ARTCLINIC; ?>" >
        <option value="<?php echo $ARTCLINIC; ?>"><?php echo $ARTCLINIC; ?></option> 
        <option>N/A</option>
        <option>REFERRED</option> 
        </select> 
        
                <label style="font-size:11px;"> VIST</label><select name="VISTTYPE" id="VISTTYPE" value="<?php echo $VISTTYPE; ?>" >
        <option value="<?php echo $VISTTYPE; ?>"><?php echo $VISTTYPE; ?></option> 
        <option>NEW</option>
        <option>REVIST</option>
        </select>
          
               <label style="font-size:11px;">  REACTIVITY </label><select name="FINALREACTIVITY" id="FINALREACTIVITY" value="<?php echo $FINALREACTIVITY; ?>" > 
                <option value="<?php echo $FINALREACTIVITY; ?>"><?php echo $FINALREACTIVITY; ?></option> 
        <option>N/A</option>
        <option>NEGATIVE</option>
        <option>POSITIVE</option>
        </select>
        
                 <label style="font-size:11px;">  PARTNER ESCORT</label> 
    <input type="radio" name=" PARTNERESCORT" id="PARTNERESCORT"  value="NO" checked />
    <label>NO</label> 
    <input type="radio" name=" PARTNERESCORT" id="PARTNERESCORT"  value="YES"/>
    <label>YES</label>    
   
     <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0"> 
    
     <input type="submit" name="button" id="button" value="Save"/>
      <a href="anc_home.php" class="btn btn-success" style="height: 25px; margin-top: -2px;"> Close <span class="sr-only">(current)</a> &nbsp;  
      
   
  
     <BR><BR> 
     </form>

 


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



   <script>
   function calcsubtt(tableId){
       var table    = document.getElementById(tableId);
         var rowCount = table.rows.length;
      var sum = 0;
       for(var x=1; x<rowCount; x++) { //0
      // alert(table.rows[x].cells[2].childNodes[1].value);
         sum    =sum+ parseFloat(table.rows[x].cells[5].childNodes[0].value);
       }
       document.getElementById("SUBTOTAL").value = ''+sum;

   }


  function addRow16(tableId){

   var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

      var  s1aa = '<input type="date" name="dnx[]" id="dnx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; height:20px; required="required" >';


   var  s2bb = '<input type="text" name="fqx[]" id="fqx'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

   var  s3cc = '<input type="text" name="tmx[]" id="tmx'+rowCount+'"  '+
               'style= "margin-left:0px'+ 'background-color:#fff; width:100%;  ">';

   var  s6ff = '<input type="text" name="pdx[]" id="pdx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

     var  s7gg = '<input type="text" name="qtyx[]" id="qtyx'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

    var  s1prossy = '<input type="text" name="ab[]" id="ab'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';
 
 
     var  s22 = '<input type="text" name="bc[]" id="bc'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

   var  s33 = '<input type="text" name="cd[]" id="cd'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

     var  s44 = '<input type="text" name="de[]" id="de'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

      var  s55 = '<input type="text" name="ef[]" id="ef'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

     var  s66 = '<input type="text" name="fg[]" id="fg'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

   var  s77 = '<input type="text" name="gh[]" id="gh'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

     var  s88 = '<input type="text" name="hi[]" id="hi'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

    var  s99 = '<input type="text" name="ij[]" id="ij'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';
         
          var  sjj = '<select name="jkxx[]" id="jkxx'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >'+
                                        '<option></option>'+
                                        '<option>1</option>'+
                                        '<option value="2">2</option>'+ 
                                        '<option value="3">3</option>'+ 
                                        '<option value="4">4</option>'+ 
                                        '<option value="5">5</option>'+ 
                                        '<option value="6">6</option>'+ 
                                        '<option value="7">7</option>'+ 
                                        '<option value="8">8</option>'+ 
                                        '<option value="9">9</option>'+ 
                                        '<option value="10">10</option>'+  
                                        '</select>';

     var  s10 = '<input type="text" name="jk[]" id="jk'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

   var  s11 = '<textarea name="kl[]" id="kl'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;height:18px; " ></textarea>';

     var  s12 = '<input type="date" name="lm[]" id="lm'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

     var  s13 = '<input type="text" name="mn[]" id="mn'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';


          var row      = table.insertRow(rowCount);
      var row2     = '<td><input type="checkbox" ></td>'+
                                '<td>'+s1aa+' </td>'+
                                '<td>'+s2bb+' </td>'+
                  '<td>'+s3cc+' </td>'+
                  '<td>'+s6ff+' </td>'+
                  '<td>'+s7gg+' </td>'+
                  '<td>'+s1prossy+' </td>'+
                  '<td>'+s22+' </td>'+
                  '<td>'+s33+' </td>'+
                  '<td>'+s44+' </td>'+
                  '<td>'+s55+' </td>'+
                  '<td>'+s66+' </td>'+
                  '<td>'+s77+' </td>'+
                  '<td>'+s88+' </td>'+
                  '<td>'+s99+' </td>'+
                  '<td>'+sjj+' </td>'+
                  '<td>'+s10+' </td>'+
                  '<td>'+s11+' </td>'+
                  '<td>'+s12+' </td>'+
                          '<td>'+s13+' </td>';
            row.innerHTML = row2;
          //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows1').value=rowCount;
          calcsubtt(tableId);
  }

  function deleteRow16(tableID) {
         var table = document.getElementById(tableID);
       var rowCount = table.rows.length;
       for(var i=1; i<rowCount; i++) { //0
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
      table.rows[x].cells[1].childNodes[0].id="dnx"+x;
      table.rows[x].cells[2].childNodes[0].id="fqx"+x;
          table.rows[x].cells[3].childNodes[0].id="tmx"+x;
      table.rows[x].cells[4].childNodes[0].id="pdx"+x;
      table.rows[x].cells[5].childNodes[0].id="qtyx"+x;
      table.rows[x].cells[6].childNodes[0].id="ab"+x;
      table.rows[x].cells[7].childNodes[0].id="bc"+x;
          table.rows[x].cells[8].childNodes[0].id="cd"+x;
      table.rows[x].cells[9].childNodes[0].id="de"+x;
      table.rows[x].cells[10].childNodes[0].id="ef"+x;
      table.rows[x].cells[11].childNodes[0].id="fj"+x;
      table.rows[x].cells[12].childNodes[0].id="jh"+x;
          table.rows[x].cells[13].childNodes[0].id="hi"+x;
      table.rows[x].cells[14].childNodes[0].id="ij"+x;
      table.rows[x].cells[15].childNodes[0].id="jkxx"+x;
      table.rows[x].cells[16].childNodes[0].id="jk"+x;
      table.rows[x].cells[17].childNodes[0].id="kl"+x;
      table.rows[x].cells[18].childNodes[0].id="lm"+x;
          table.rows[x].cells[19].childNodes[0].id="mn"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
       calcsubtt(tableId);
}
  </script>

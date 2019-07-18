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
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
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
  
  
</head>
   
      <!-- title row -->
      <div class="row">
       <body class="  ">
        <script>
function myFunction() {
    window.print();
}
</script> 

                  <!-- Info boxes -->  
     <p style="text-align:center; font-weight:bold;"> PREVIOUS OBSTETRIC HISTORY</p>  
    <div class="container-fluid" style="background-color: #fff;">

        <div class="widget-box">
          <div class="widget-title" > <span class="icon"> <i class="icon-pencil"></i> </span> 
          </div>
          <div class="widget-content nopadding" style="background-color:#fff;" > 
          
          
  <?php
  $id = $_GET['q']; 
  $NTIHCNO = '';
  $AGE_GROUP = '';
  $CLIENTNAME = '';
  $SCHOOLINGSTATUS = '';
  $HEALTHUNIT = ''; 
  $REGNO = '';
  $PHONECONTACT = '';
  $SERIALNO = '';  

  $maa = array();
  $mbb = array();
  $mcc = array();
  $mdd = array();
  $mee = array();
  $mff = array();
  $mgg = array();
  $mhh = array();
  $mii = array();
  $mjj = array();
  $mkk = array();
  $mll = array();
  $mmm = array();
  $mnn = array();
  $moo = array();  

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";


 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM antenatal_obstetric  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $NTIHCNO = $row['NTIHCNO']; 
     $AGE_GROUP = $row['AGE_GROUP'];
	 $CLIENTNAME  = $row['CLIENTNAME'];
	 $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
	 $HEALTHUNIT  = $row['HEALTHUNIT'];
	 $REGNO  = $row['REGNO'];
	 $PHONECONTACT  = $row['PHONECONTACT']; 
	 $SERIALNO  = $row['SERIALNO'];
     $id  = $row['id'];                     
	 $maa[] = $row['PRREGNANCY'];
     $mbb[]    = $row['YEAROFPREG'];
	 $mcc[] = $row['BELOW12WEEKS'];
     $mdd[]       = $row['ABOVE12WEEKS'];
	 $mee[]    = $row['PREMATURE'];
	 $mff[]       = $row['FULL'];
	 $mgg[]       = $row['PLACEOFDELIVERY'];
	 $mhh[]       = $row['TYPEOFDELIVERY'];
	 $mii[]        = $row['THIRDSTAGE'];
	 $mjj[]        = $row['PUERPERLUM'];
     $mkk[]       = $row['ALIVESB'];
	 $mll[]       = $row['CHILDSEX'];
	 $mmm[]       = $row['BIRTHWEIGHT'];
	 $mnn[]       = $row['IMMUN'];
	 $moo[]       = $row['HEALTHCONDITION']; 
      }
  ?>
                        <table class="table table-bordered" style="background-color:#ffffff;">
   <thead>
   <tr>
   <th style="width:2%;">    </th>
   <th style="width:8%;"> </th>
   <th style="width:9.9%; text-align:center;font-weight:bold;">ABORTIONS</th>
   <th style="width:45.9%;text-align:center;font-weight:bold;">TYPES OF DELIVERY </th>
   <th style="width:35%;font-weight:bold;"> CHILD</th>
   </tr>
   </thead>
 </tbody>
 </table> 

          <table class="table table-table table-tabled" id="mytable2" style="font-weight:normal; margin-top:0px; ">
       <thead>
      <tr> 
   <th  style="width:4%;">Preg nancy</th>
   <th  style="width:4%;">Year</th>
   <th  style="width:5%;">Below 12 wks</th>
   <th  style="width:5%;">Above 12 wks </th>
   <th  style="width:4%;">Prema ture</th>
   <th  style="width:4%;">Full</th>
   <th  style="width:15%;">Place of delivery</th>
   <th  style="width:15%;">Type of delivery</th>
   <th  style="width:4%;">Third stage</th>
   <th  style="width:5%;">Puer perlum</th>
   <th  style="width:5%;">Alive SB/NND</th>
   <th  style="width:5%;">Sex </th>
   <th  style="width:5%;">Birth weight</th>
   <th  style="width:5%;">Immun</th>
   <th  style="width:15%;">Health condition</th>
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($maa); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){
                                                             $totals += intval($moo[$s]);?>
                                                            <tr > 
                                                            
                                                  <td> <input  name="maa[]" readonly="" type="text" value="<?php  echo $maa[$s]; ?>"
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mbb[]" readonly="" type="text" value="<?php  echo $mbb[$s]; ?>"   class="form-control input-md"
                                                   style= "width:100%; background-color:#fff;  border:0px;"/></td>


                                                     <td> <input  name="mcc[]" type="numeric" value="<?php echo $mcc[$s]; ?>"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mdd[]" type="numeric" value="<?php echo $mdd[$s]; ?>"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>


                                                  <td> <input  name="mee[]" type="numeric" value="<?php echo $mee[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mff[]" type="numeric" value="<?php echo $mff[$s]; ?>"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="mgg[]" type="numeric" value="<?php echo $mgg[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="mhh[]" type="numeric" value="<?php echo $mhh[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                   <td> <input  name="mii[]" type="text" value="<?php echo $mii[$s]; ?>"   class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px; "/></td>

                                                   <td> <input  name="mjj[]" readonly="" type="text" value="<?php echo $mjj[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fcfdfe; border:0px;"/></td>


                                                   <td> <input  name="mkk[]" type="numeric" value="<?php echo $mkk[$s]; ?>" required="" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mll[]" type="numeric" value="<?php echo $mll[$s]; ?>"  readonly="" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>


                                                  <td> <input  name="mmm[]" type="numeric" value="<?php echo $mmm[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff; border:0px;"/></td>

                                                  <td> <input  name="mnn[]" type="numeric" value="<?php echo $mnn[$s]; ?>"  class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                                  <td> <input  name="moo[]" type="numeric" value="<?php echo $moo[$s]; ?>" class="form-control
                                                  input-md" style= "width:100%; background-color:#fff;border:0px;"/></td>

                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table> 
                               <br>
                               <center><a href=<button class="small-box-footer" data-toggle="modal" data-target="#obstetric" 
                               style="border-radius:3px; background-color:;"><b> </b>
                               <?php  echo $CLIENTNAME; ?> &nbsp;<?php  echo $NTIHCNO; ?>  <i class=" "></i></a><center>
           
      <form id="form1" class="form-horizontal" action="anc_process_obstetric.php" method="POST" style="height:auto; font-weight:normal;">
               
    
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
  $AGE_GROUP = ''; 
   
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
	 $AGE_GROUP  = $row['AGE_GROUP'];
      } 
  ?>
      
       
        
        <input type="hidden"  id="VISTDATECREATED" name="VISTDATECREATED" value="<?php echo date('Y-m-d'); ?>" > 
                 <input type="hidden" id="HEALTHUNIT" name="HEALTHUNIT" value="<?php  echo $HEALTHUNIT; ?>">
				 <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>"> 
                 <input type="hidden" name="SERIALNO" id="SERIALNO" value="<?php echo $SERIALNO; ?>">  
                 <input type="hidden" name="REGNO" id="REGNO" value="<?php echo $id; ?>">   
                 <input type="hidden" id="CLIENTNAME" name="CLIENTNAME" value="<?php  echo $CLIENTNAME; ?>">
				 <input type="hidden" id="SCHOOLINGSTATUS" name="SCHOOLINGSTATUS" value="<?php  echo $SCHOOLINGSTATUS; ?>"> 
                 <input type="hidden" name="AGE" id="AGE" value="<?php echo $AGE1; ?>">  
                 <input type="hidden" name="AGE_GROUP" id="AGE_GROUP" value="<?php echo $AGE_GROUP; ?>">   
				 <input type="hidden" id="PHONECONTACT" name="PHONECONTACT" value="<?php  echo $PHONECONTACT; ?>">  
                
                
                
                
                
                  
        <input type="hidden" name="USERINITIAL" id="USERINITIAL" value="<?php echo $nameofuser; ?>" > 
        <input type="hidden" name="USERDESIGNATION" id="USERDESIGNATION" value="<?php echo $desc; ?>" >   
        <input type="hidden" name="USERACCOUNT" id="USERACCOUNT" value="<?php echo $rm; ?>" > 
       
  
 
 
 
    <table class="table table-bordered" id="mytable11" style="font-weight:normal; margin-top:0px;border:0px; ">
    <thead>
      <tr>
    <th style="width:1%;color:#000;border:opx;">  *  </th>
   <th  style="width:4%; color:#000;">Preg nancy</th>
   <th  style="width:4%;color:#000;">Year</th>
   <th  style="width:5%;color:#000;">Below 12 wks</th>
   <th  style="width:5%;color:#000;">Above 12 wks </th>
   <th  style="width:4%;color:#000;">Prema ture</th>
   <th  style="width:4%;color:#000;">Full</th>
   <th  style="width:15%;color:#000;">Place of delivery</th>
   <th  style="width:15%;color:#000;">Type of delivery</th>
   <th  style="width:4%;color:#000;">Third stage</th>
   <th  style="width:5%;color:#000;">Puer perlum</th>
   <th  style="width:5%;color:#000;">Alive SB/NND</th>
   <th  style="width:5%;color:#000;">Sex </th>
   <th  style="width:5%;color:#000;">Birth weight</th>
   <th  style="width:5%;color:#000;">Immun</th>
   <th  style="width:15%;color:#000;">Health condition</th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
     <input type="button" onClick="addRow161('mytable11')" value="Add" />
     <input type="button" onClick="deleteRow161('mytable11')" value="(Delete)" />
     <input type="hidden" id="mytable_rows11" value="0"> 
     <input type="submit" name="button" id="button" value="Save"/>
        <a href="anc_home.php" class="btn btn-danger" style="height: 25px; margin-top: -2px;"> Close <span class="sr-only">(current)</a> 
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


  function addRow161(tableId){

	 var table    = document.getElementById(tableId);
     var rowCount = table.rows.length;

      var  s1aa = '<input type="text" name="dnxw[]" id="dnxw'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; height:20px; required="required" >';


	 var  s2bb = '<input type="text" name="fqxw[]" id="fqxw'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

	 var  s3cc = '<input type="text" name="tmxw[]" id="tmxw'+rowCount+'"  '+
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;  ">';

	 var  s6ff = '<input type="text" name="pdxw[]" id="pdxw'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

     var  s7gg = '<input type="text" name="qtyxw[]" id="qtyxw'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

	var  s11 = '<input type="text" name="abw[]" id="abw'+rowCount+'" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';


     var  s22 = '<input type="text" name="bcw[]" id="bcw'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

	 var  s33 = '<input type="text" name="cdw[]" id="cdw'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

     var  s44 = '<input type="text" name="dew[]" id="dew'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

      var  s55 = '<input type="text" name="efw[]" id="efw'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

     var  s66 = '<input type="text" name="fgw[]" id="fgw'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

	 var  s77 = '<input type="text" name="ghw[]" id="ghw'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

     var  s88 = '<input type="text" name="hiw[]" id="hiw'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';

	  var  s99 = '<input type="text" name="ijw[]" id="ijw'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';
				 
				  var  sjj = '<input type="text" name="jkxxw[]" id="jkxxw'+rowCount+'"  '+
                 'style= " margin-left:0px; width:100%; background-color:#fff; " >';
 


	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+
								  '<td>'+s3cc+' </td>'+
								  '<td>'+s6ff+' </td>'+
								  '<td>'+s7gg+' </td>'+
								  '<td>'+s11+' </td>'+
								  '<td>'+s22+' </td>'+
								  '<td>'+s33+' </td>'+
								  '<td>'+s44+' </td>'+
								  '<td>'+s55+' </td>'+
								  '<td>'+s66+' </td>'+
								  '<td>'+s77+' </td>'+
								  '<td>'+s88+' </td>'+
								  '<td>'+s99+' </td>'+
								  '<td>'+sjj+' </td>';
			      row.innerHTML = row2;
		      //  alert("here here   : "+rowCount+'  :  '+s1a);
          document.getElementById('mytable_rows11').value=rowCount;
          calcsubtt(tableId);
  }

  function deleteRow161(tableID) {
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
		  table.rows[x].cells[1].childNodes[0].id="dnxw"+x;
		  table.rows[x].cells[2].childNodes[0].id="fqxw"+x;
          table.rows[x].cells[3].childNodes[0].id="tmxw"+x;
		  table.rows[x].cells[4].childNodes[0].id="pdxw"+x;
		  table.rows[x].cells[5].childNodes[0].id="qtyxw"+x;
		  table.rows[x].cells[6].childNodes[0].id="abw"+x;
		  table.rows[x].cells[7].childNodes[0].id="bcw"+x;
          table.rows[x].cells[8].childNodes[0].id="cdw"+x;
		  table.rows[x].cells[9].childNodes[0].id="dew"+x;
		  table.rows[x].cells[10].childNodes[0].id="efw"+x;
		  table.rows[x].cells[11].childNodes[0].id="fjw"+x;
		  table.rows[x].cells[12].childNodes[0].id="jhw"+x;
          table.rows[x].cells[13].childNodes[0].id="hiw"+x;
		  table.rows[x].cells[14].childNodes[0].id="ijw"+x;
		  table.rows[x].cells[15].childNodes[0].id="jkxxw"+x; 
          }
           document.getElementById('mytable_rows11').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>

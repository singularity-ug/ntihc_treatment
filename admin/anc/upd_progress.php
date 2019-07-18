  
  <?php
  $id =  $_GET['q'];
  $NTIHCNO = '';
  $DATECREATED = ''; 
  $SCHOOLINGSTATUS = '';
  $HEALTHUNIT = '';  
  $SERIALNO = '';
  $PHONECONTACT = '';
  $CLIENTNAME = '';
  $RELATIONPP='';
  $VISTDATE=''; $WEEKSOFAMENOE=''; $FUNDALHEIGHT=''; $PRESENTATION=''; $POSITIONLIE=''; $UNITCOST='';
  $FOETALHEART=''; $PROGRESSWEIGHT=''; $PROGRESSBP=''; $VARICOSEOEDEMA=''; $URINE=''; $TT='';
  $IRONFOLIC=''; $MEBENDAZOLE=''; $IPT=''; $NETUSE=''; $COMPLAITS=''; $RETURNDATE=''; 
  $RETURNDATE='';   $NAMEOFEXAMINER=''; 
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname); 
 $sql  = "SELECT * FROM anteprogress WHERE `id` = '$id'"; 
 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){ 
     $NTIHCNO = $row['NTIHCNO'];
     $DATECREATED = $row['DATECREATED'];
   $SCHOOLINGSTATUS  = $row['SCHOOLINGSTATUS'];
   $HEALTHUNIT  = $row['HEALTHUNIT']; 
   $SERIALNO  = $row['SERIALNO']; 
   $CLIENTNAME  = $row['CLIENTNAME']; 
   
   $VISTDATE  = $row['VISTDATE'];
     $WEEKSOFAMENOE     = $row['WEEKSOFAMENOE'];
   $FUNDALHEIGHT  = $row['FUNDALHEIGHT'];
     $PRESENTATION        = $row['PRESENTATION'];
   $POSITIONLIE    = $row['POSITIONLIE'];
   $RELATIONPP       = $row['RELATIONPP'];
   $FOETALHEART        = $row['FOETALHEART'];
   $PROGRESSWEIGHT        = $row['PROGRESSWEIGHT'];
   $PROGRESSBP        = $row['PROGRESSBP'];
     $VARICOSEOEDEMA       = $row['VARICOSEOEDEMA'];
   $URINE       = $row['URINE'];
   $TT       = $row['TT'];
   $IRONFOLIC        = $row['IRONFOLIC'];
   $MEBENDAZOLE       = $row['MEBENDAZOLE'];
   $IPT       = $row['IPT'];
   $NETUSE       = $row['NETUSE'];
   $COMPLAITS       = $row['COMPLAITS'];
   $RETURNDATE       = $row['RETURNDATE'];
   $NAMEOFEXAMINER        = $row['NAMEOFEXAMINER'];
   $id=$row['id'];  
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

   <form class="form-horizontal" action="upd_update.php" method="POST" style="height:auto; font-weight:normal;">
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
   <thead> <tr> 
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
   <th style="width:5%;   text-align:center;border:1px solid;">Action</th>
   </tr>
   </thead>
   <tbody>
   <tr> 
  
  <input type="hidden" name="NTIHCNO" id="NTIHCNO" value=" <?php  echo $NTIHCNO; ?>" />
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="id" id="id" readonly="" value="<?php  echo $id; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td> 
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="VISTDATE" id="VISTDATE" required="required" value=" <?php  echo $VISTDATE; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>    
           
    <td style="border:2px solid #ecf0f5;">
    <input type="text" name="WEEKSOFAMENOE" id="WEEKSOFAMENOE" required="required" value=" <?php  echo $WEEKSOFAMENOE; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="FUNDALHEIGHT" id="FUNDALHEIGHT" required="required" value=" <?php  echo $FUNDALHEIGHT; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="PRESENTATION" id="PRESENTATION" required="required" value=" <?php  echo $PRESENTATION; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="POSITIONLIE" id="POSITIONLIE" required="required" value=" <?php  echo $POSITIONLIE; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>
  
   <td style="border:2px solid #ecf0f5;">
    <input type="text" name="RELATIONPP" id="RELATIONPP" required="required" value=" <?php  echo $RELATIONPP; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>   
           
    <td style="border:2px solid #ecf0f5;">
    <input type="text" name="FOETALHEART" id="FOETALHEART" required="required" value=" <?php  echo $FOETALHEART; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="PROGRESSWEIGHT" id="PROGRESSWEIGHT" required="required" value=" <?php  echo $PROGRESSWEIGHT; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="PROGRESSBP" id="PROGRESSBP" required="required" value=" <?php  echo $PROGRESSBP; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="VARICOSEOEDEMA" id="VARICOSEOEDEMA" required="required" value=" <?php  echo $VARICOSEOEDEMA; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="URINE" id="URINE" required="required" value=" <?php  echo $URINE; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>   
           
    <td style="border:2px solid #ecf0f5;">
    <input type="text" name="TT" id="TT" required="required" value=" <?php  echo $TT; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="IRONFOLIC" id="IRONFOLIC" required="required" value=" <?php  echo $IRONFOLIC; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="MEBENDAZOLE" id="MEBENDAZOLE" required="required" value=" <?php  echo $MEBENDAZOLE; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="IPT" id="IPT" required="required" value=" <?php  echo $IPT; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
   <td style="border:2px solid #ecf0f5;">
    <input type="text" name="NETUSE" id="NETUSE" required="required" value=" <?php  echo $NETUSE; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>   
           
    <td style="border:2px solid #ecf0f5;">
    <input type="text" name="COMPLAITS" id="COMPLAITS" required="required" value=" <?php  echo $COMPLAITS; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="RETURNDATE" id="RETURNDATE" required="required" value=" <?php  echo $RETURNDATE; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>  
  
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="NAMEOFEXAMINER" id="NAMEOFEXAMINER" required="required" value=" <?php  echo $NAMEOFEXAMINER; ?>"
    style="width:100%; text-align:left;background-color:transparent;">
    </td>   
  
   <td style="border:2px solid #fff;">
   <center><input type="submit" name="button" id="button" value="Save" class="btn btn-success" /></center> </td>  
   </tr>
   <tr>  </tbody> </table> 
 
   </form>
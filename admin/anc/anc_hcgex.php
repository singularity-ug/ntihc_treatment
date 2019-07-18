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
  $RID = ''; 
  $NTIHCNO = ''; 
  $CLIENTNAME  = '';  
  $AGE_GROUP = ''; 
  $AGE1  = '';
  $SERVICE_EPISODE = '';
  $SEX = '';   
  $SERVICETYPE = '';   
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
   
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $RID = $row['RID'];
   $NTIHCNO = $row['NTIHCNO'];
     $CLIENTNAME = $row['CLIENTNAME'];  
     $AGE_GROUP = $row['AGE_GROUP']; 
   $AGE1 = $row['AGE1']; 
   $SERVICE_EPISODE = $row['SERVICE_EPISODE'];
     $SEX  = $row['SEX']; 
   $SERVICETYPE  = $row['SERVICETYPE'];   
      } 
  ?>
    
         <form  class="form-horizontal" action="hcg_proxy.php" method="POST" style="height:auto; font-weight:normal;"> 
               
         <input type="hidden"  id="DATECREATED" name="DATECREATED" value="<?php echo date('Y-m-d'); ?>"  > 
                
               <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>" readonly="">
               <input type="hidden" id="CLIENTNAME" name="CLIENTNAME" value="<?php  echo $CLIENTNAME; ?>">
               <input type="hidden"  id="AGE1" name="AGE1" value="<?php  echo $AGE1; ?>" readonly="">    
               <input type="hidden"  id="AGE_GROUP" name="AGE_GROUP" value="<?php  echo $AGE_GROUP; ?>" readonly="">  
                 
          <input type="hidden"  id="RID" name="RID" value="<?php  echo $RID; ?>" >  
                  <input type="hidden"  id="SEX" name="SEX" value="<?php  echo $SEX; ?>" >  
                  
                  <input type="hidden"  id="USERINITIAL" name="USERINITIAL" value="<?php  echo $nameofuser; ?>"  >   
                  <input type="hidden"  id="VISTID" name="VISTID"  value="<?php echo uniqid();?>" >
                  <input type="hidden"  id="REQUESTINGUNIT" name="REQUESTINGUNIT" value="ANC SERVICES"  >  
          <!---input type="hidden"  id="INSVCSTATUS" name="INSVCSTATUS" value="WAITING FOR LAB RESULTS"-->    
          
  <?php
  $id = $_GET['q'];  
  $PID = ''; 
  $NTIHCNO = '';  
  $PHONECONTACT = ''; 
  $DIVISION  = ''; 
  $DISTRICT = '';   
  $EMPLOYMENTSTATUS = '';
  $SCHOOLINGSTATUS = '';   
  $MARITALSTATUS = ''; 
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";
 
   
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE `NTIHCNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $PID = $row['PID'];
   $NTIHCNO = $row['NTIHCNO'];
     $PHONECONTACT = $row['PHONECONTACT'];  
     $DIVISION = $row['DIVISION']; 
   $DISTRICT = $row['DISTRICT']; 
   $EMPLOYMENTSTATUS = $row['EMPLOYMENTSTATUS']; 
   
   $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS']; 
   $MARITALSTATUS = $row['MARITALSTATUS']; 
      } 
  ?>
                  <input type="hidden"  id="PHONECONTACT" name="PHONECONTACT" value="<?php  echo $PHONECONTACT; ?>"  >    
          <input type="hidden"  id="EMPLOYMENT" name="EMPLOYMENT" value="<?php  echo $EMPLOYMENTSTATUS; ?>"  >   
                  <input type="hidden"  id="DISTRICT" name="DISTRICT"  value="<?php  echo $DISTRICT; ?>"  >   
                  <input type="hidden"  id="DIVISION" name="DIVISION" value="<?php  echo $DIVISION; ?>"  >   
          <input type="hidden"  id="SCHOOLING" name="SCHOOLING"  value="<?php  echo $SCHOOLINGSTATUS; ?>"  >   
                  <input type="hidden"  id="MARITALSTATUS" name="MARITALSTATUS" value="<?php  echo $MARITALSTATUS; ?>"  >   
          
        
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

         <div class="col-sm-3"></div>
   <div class="col-sm-6">
            
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left; background-color:transparent;" width="100%">
    <thead> 
    <tr> 
             
    <input name="HCGSTATUS" type="hidden" id="HCGSTATUS" value="YES" >
     
        <input type="hidden" id="HCG" name="HCG" value="1" >
     
            <td>Results</td>
             <td>    
             <input type="radio" name="HCGRESULTS" id="HCGRESULTS" value="NEGATIVE" checked>
        <label for="NEGATIVE">NEGATIVE</label></td>
    <td>
    <input name="HCGRESULTS" type="radio" id="HCGRESULTS" value="POSITIVE">
    <label for="POSITIVE">POSITIVE</label>
        </td>

    </td>
        <tr>
            <td>Justify results</td>
             <td>    
             <input type="radio" name="HCGPOSITIVE" id="HCGPOSITIVE" value="WANTED" >
        <label for="WANTED">WANTED</label> </td>
    <td><input name="HCGPOSITIVE" type="radio" id="HCGPOSITIVE" value="UN WANTED" checked>
    <label for="UN WANTED">UN WANTED</label>
                               </td>
        </tr>
         </tbody>
      </table> 
    
          
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left; background-color:transparent;" width="100%">
    <thead> 
    <tr>    
                <td style="width:50%;border:0px;"></td>
        <td style="width:25%;border:0px;"> <input type="image" name="submit" id="button" src="../../database icons/approve2.png" width="50" height="50" 
        data-toggle="tooltip" title="Save HCG">    </td>
        
         <td style="width:5%;border:0px;">   </td>  </form>  
        <td style="width:20%;border:0px;"> <a href="anc_home.php?d1=0&d2=0">  <img src="../../database icons/approve1.png"width="50" height="50" 
        data-toggle="tooltip" title="Exit"> </a>   </td>  
       </tr>             
            </table>  
      
      
         </div> <BR>  
                   
                
                 
    
     
   
    
 
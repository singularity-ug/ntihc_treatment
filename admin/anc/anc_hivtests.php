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
  
  
      
     <div class="col-sm-4">
             <table class="table-responsive" style="margin-top:30px;">
             <table class="table" style="border:0px;">
             <tr>

                <th style="width:100%;border:0px;">  </th>

              </tr>
        </table>
   </div>
   <div class="col-sm-8"> 
               <form  class="form-horizontal" action="update_episode.php" method="POST" style="height:auto; font-weight:normal;">  
               <input type="hidden"  id="DATECREATED" name="DATECREATED" value="<?php echo date('Y-m-d'); ?>"  required="required">
               <input type="hidden" id="NTIHCNO" name="NTIHCNO" value="<?php  echo $NTIHCNO; ?>" readonly="">
               <input type="hidden" id="CLIENTNAME" name="CLIENTNAME" value="<?php  echo $CLIENTNAME; ?>">
               <input type="hidden"  id="AGE" name="AGE" value="<?php  echo $AGE1; ?>" readonly="">    
               <input type="hidden"  id="AGE" name="AGE" value="<?php  echo $AGE_GROUP; ?>" readonly="">   
               <input type="hidden"  id="RID" name="RID" value="<?php  echo $RID; ?>">   
               <input type="hidden"  id="SEX" name="SEX" value="<?php  echo $SEX; ?>">   
               <input type="hidden"  id="USERINITIAL" name="USERINITIAL" value="<?php  echo $nameofuser; ?>"  >   
               <input type="hidden"  id="SERVICE_EPISODE" name="SERVICE_EPISODE"  value="<?php echo uniqid();?>" >

                   
            <center> <div class="col-sm-3">
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
  
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
                 <th style="width:75%; text-align:left;border:0px;"> <input type="radio"  id="INSVCSTATUS" name="INSVCSTATUS" 
                  value="ANC SERVICES" checked> 
               <label>Exit client</label> </th>
         <th style="width:2%; text-align:left;border:0px;"></th>
                <td style="width:10%;border:0px;">
         <input type="image" name="submit" id="button" src="../../database icons/delete5.jpg" width="50" height="45" 
         data-toggle="tooltip" title="Check out"/>    </td>
         <td style="width:3%;border:0px;">   </td>   
        <td style="width:10%;border:0px;"> <a href="anc_home.php?d1=0&d2=0">  <img src="../../database icons/approve1.png"width="50" height="50" 
        data-toggle="tooltip" title="Quit"> </a>  </td>  
       </tr>             
            </table>  
            </form>      
     <BR>     
   
    
 
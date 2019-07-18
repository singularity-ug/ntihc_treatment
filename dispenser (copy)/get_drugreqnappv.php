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
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stss ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 

<?php
  $id = $_GET['q'];  
  
  $ORDERSERIALID = ''; 
  $REQUESTINGUNIT  = '';
  $ORDERTYPE = '';
  $FACILITYNANE = '';  
  $dnx = array();
  $fqx = array();
  $qtyrecieved = array();
  $tmx = array();
  $variance = array(); 
  $batch = array();
  $expdet = array(); 
  $remdrt = array();
  $lcn = array();  
  $pdx = array();  
  $qtyx = array(); 
  $TIMESTAMP='';
  $DATECREATED='';   
  $REQUESTINGUNIT = ''; 
  $FACILITYNANE=''; 
  $ORDERVALUE = '';
  $REQUISTIONTYPE = '';   
  $REQBY='';
  $AUTBY='';   
  $APPBY = ''; 
  $ISSBY=''; 
  $REQBYNAME = '';
  $AUTBYNAME = '';    
  $APPBYNAME='';
  $ISSBYNAME='';   
  $REQBYDATE = ''; 
  $AUTBYDATE=''; 
  $APPBYDATE = '';
  $ISSBYDATE = '';   
  $AUTHCORCOMMENT = '';
  $AUTBYDATE = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM outgoingorders  WHERE `ORDERSERIALID` = '$id' AND REQUISTIONTYPE='STANDARD' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $ORDERSERIALID = $row['ORDERSERIALID']; 
     $REQUESTINGUNIT = $row['REQUESTINGUNIT'];
     $ORDERTYPE  = $row['ORDERTYPE'];
     $FACILITYNANE = $row['FACILITYNANE']; 
	 $dnx[] = $row['DESCRIPTION'];
     $fqx[]    = $row['QTYINSTOCK'];
	 $qtyrecieved[] = $row['QTYNEEDED']; 
     $tmx[]       = $row['UNITOFMEASURE']; 
	 $variance[]    = $row['UNITVALUE']; 
	 $batch[]       = $row['UNIT']; 
	 $expdet[]       = $row['STOCKBAL'];
	 $remdrt[]        = $row['BATCHNO']; 
	 $lcn[]        = $row['EXPIRY'];
     $pdx[]       = $row['UNITVALUE'];
	 $qtyx[]        = $row['AMOUNT']; 
	 $DATECREATED=$row['DATECREATED'];  
     $REQUESTINGUNIT   = $row['REQUESTINGUNIT']; 
     $FACILITYNANE=$row['FACILITYNANE'];    
     $ORDERVALUE=$row['ORDERVALUE'];  
     $REQUISTIONTYPE   = $row['REQUISTIONTYPE']; 
	 $REQBY=$row['REQBY'];  
     $AUTBY   = $row['AUTBY']; 
     $APPBY=$row['APPBY'];    
     $ISSBY=$row['ISSBY'];  
     $REQBYNAME   = $row['REQBYNAME'];  
	 $AUTBYNAME=$row['AUTBYNAME'];  
     $APPBYNAME   = $row['APPBYNAME']; 
     $ISSBYNAME=$row['ISSBYNAME'];    
     $REQBYDATE=$row['REQBYDATE'];  
     $AUTBYDATE   = $row['AUTBYDATE']; 
	 $APPBYDATE=$row['APPBYDATE'];  
     $ISSBYDATE   = $row['ISSBYDATE']; 
	    
	 $AUTHCORCOMMENT=$row['AUTHCORCOMMENT'];  
     $AUTBYDATE   = $row['AUTBYDATE']; 
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
           <form method="post" action="str_drugreqn_update2.php">
           
           <table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
           <thead>
           <tr>
           <th>Requisition serial number</th>
            <th>Confirmation date </th>
           </tr>
           </thead>
           <tbody>
           <tr>
           <td style="width:30%;"><input type="text" name="ORDERSERIALID" id="ORDERSERIALID"  value="<?php  echo $ORDERSERIALID; ?>" readonly="readonly"  
				style="width:100%; background-color:#fff;"></td> 
               
                
                <td style="width:30%;"><input type="text" name="AUTBYDATE" id="AUTBYDATE"   value="<?php  echo $AUTBYDATE; ?>"  readonly="readonly" 
                style="width:100%; text-align:left;background-color:#fff;"></td> 
           </tr>
           <tr>
        </tbody>
        </table>
        
        <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
 <thead>
 <tr>
 <th>Head of user department comment (Confirmation officer)</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td style="width:30%;"><textarea name="AUTHCORCOMMENT" readonly="readonly" style="width:100%; text-align:left;background-color:#ecf0f5;">
 <?php echo $AUTHCORCOMMENT;?> </textarea></td>

 </tr>
<tr>
</tbody>
</table>
        
        
         <table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
           <thead>
           <tr>
           <th>Approval date</th>
           <th>Approved by</th>
           </tr>
           </thead>
           <tbody>
           <tr> 
                <td style="width:30%;"><input type="text" name="APPBYDATE" id="APPBYDATE"  value="<?php echo date('d-m-y'); ?>" required="required" 
                style="width:100%; text-align:left;background-color:#FFF;"></td> 
                
                <td style="width:30%;"><input type="text" name="APPBYNAME" id="APPBYNAME"  value="<?php echo $nameofuser; ?>" readonly="readonly" 
                style="width:100%; text-align:left;background-color:#FFF;"></td>  
               
           </tr>
           <tr>
        </tbody>
        </table>
        
         <input type="hidden" name="APPBY" id="APPBYNAME" value="<?php echo $desc; ?>" > 
         <input type="hidden" name="APPDEPT" id="APPDEPT" value="<?php echo $dept; ?>">
         <input type="hidden" name="APPPF" id="APPPF" value="<?php echo $pf; ?>" >
          
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
 <thead>
 <tr>
 <th>Comment</th>   
 </tr>
 </thead>
 <tbody>
 <tr>
 <td style="width:30%;"><textarea name="APPROVCOMMENT" id="APPROVCOMMENT"  value="" required="required"
 style="width:100%; text-align:left;background-color:#FFF;"></textarea></td>

 </tr>
<tr>
</tbody>
</table>

<table class="table-responsive" style="background-color:#ffffff; margin-top:-19px; ">
            <table class="table">
              <tr>
			    <th style="width:10%">ACTION </th>
                <th style="width:25%">
				<center> <input type="radio" name="APPROVAL" id="APPROVAL" value="REVIEWED AND APPROVED" checked>
        <label for="CONFIRM">REVEIEW AND APPROVE</label>  </th>  
              
			    <th style="width:10%">  </th>
                <th style="width:40%">  
				</th>  
                
                <th style="width:10%">   <center><input type="submit" name="buttonsend" value="Update" style="height: 25px;">  </center></th>
              </tr> 
            </table> 
             <br>
             </form>
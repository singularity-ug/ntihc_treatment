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
  $id =  $_GET['q'];  
  $REGISTRATIONNO = '';  
  $TYPE = ''; 
  $PRODUCT = '';   
  $LUBRICANT = '';   
  $LITRE = '';   
  $DRIVER = '';  
  $FUELSTATION = '';  
  $Fuelcardname = ''; 
  $INVOICENO = '';   
  $FUELISSUANCEDATE = '';  $Fuelcardname = '';    $ISSUERTITLE = '';    $FISCALYEAR = '';  $Fiscalmonth = '';  
  $UNITPRICE = '';   
  $ISSUEDBY = '';
  $ISSUERACCOUNT = '';   
  $PROJECT = '';  
  $ARDATE = ''; 
  $ARNAME = '';  
  $MILEAGEBEFORE = ''; 
  $MILEAGEAFTER = ''; 
  $PURPOSE = ''; 
  $TOTALAMOUNT = '';   $DISTANCECOVERED = '';    $CURRENTMILEAGE = '';   $RUNNINGMILEAGE = '';    
              
  $TOTALAMOUNT = ''; 
  $UNITPRICE = ''; 
  $DIVISION = ''; 
  $DIRECTORATE = '';
  $PURPOSE = ''; 
  $DATECAPTURED = ''; 
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM fuellogs WHERE `id` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $REGISTRATIONNO  = $row['REGISTRATIONNO'];
     $TYPE  = $row['TYPE'];
     $PRODUCT = $row['PRODUCT'];   
	 $LUBRICANT = $row['LUBRICANT']; 
	 $LITRE = $row['LITRE'];   
	 $DRIVER = $row['DRIVER'];     
	 $FUELSTATION  = $row['FUELSTATION'];
     $Fuelcardname  = $row['Fuelcardname'];
     $INVOICENO = $row['INVOICENO'];   
	 $FUELISSUANCEDATE = $row['FUELISSUANCEDATE'];         
	 $UNITPRICE = $row['UNITPRICE'];   
	 $ISSUEDBY = $row['ISSUEDBY']; 
	 $ISSUERACCOUNT = $row['ISSUERACCOUNT'];  
	 
	 $Fuelcardname = $row['Fuelcardname']; 
	 $FISCALYEAR = $row['FISCALYEAR']; 
	 $ISSUERTITLE = $row['ISSUERTITLE']; 
	 $Fiscalmonth = $row['Fiscalmonth'];   
	    
	 $PROJECT = $row['PROJECT'];  
	  $ARDATE = $row['ARDATE'];
	  $ARNAME = $row['ARNAME']; 
	  $MILEAGEBEFORE = $row['MILEAGEBEFORE'];
	  $MILEAGEAFTER = $row['MILEAGEAFTER']; 
	  $PURPOSE = $row['PURPOSE']; 
	  $TOTALAMOUNT = $row['TOTALAMOUNT'];   
	  $DISTANCECOVERED = $row['DISTANCECOVERED'];  $RUNNINGMILEAGE = $row['RUNNINGMILEAGE'];   $CURRENTMILEAGE = $row['CURRENTMILEAGE'];   
	        
	  $TOTALAMOUNT = $row['TOTALAMOUNT'];   $UNITPRICE = $row['UNITPRICE'];  $DIVISION = $row['DIVISION']; 
	  $DIRECTORATE = $row['DIRECTORATE'];  $PURPOSE = $row['PURPOSE'];  $DATECAPTURED = $row['DATECAPTURED']; 
	  $id = $row['id']; 
      } 
  ?>
 




 <?php
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?>
 

<link href="../../js/googleapis.js" rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />   
 <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">

  <script src="../../datatable/js/jquery-1.12.3.js"></script>
  <script src="../../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../../datatable/js/bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../../datatable/js/buttons.flash.min.js"></script>
  <script src="../../datatable/js/jszip.min.js"></script>
  <script src="../../datatable/js/pdfmake.min.js"></script>
  <script src="../../datatable/js/vfs_fonts.js"></script>
  <script src="../../datatable/js/buttons.html5.min.js"></script>
  <script src="../../datatable/js/buttons.print.min.js"></script>
 

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
 
 
  <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stdd ="";
if( $result = $connect->query("SELECT * FROM motorisedequipments WHERE GENERALSTATUS = 'OPERATIONAL' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['REGISTRATIONNO'] ." </option>";   }
  }
$connect->close();
?> 

 <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stssl ="";
if( $result = $connect->query("SELECT * FROM panel WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?>  
 
 
<style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #f0f0f0;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #f0f0f0;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
				font-weight:normal;
             	color:#000000;
				font-weight:normal;s
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>

 
         <form class="form-horizontal" action="fuel_update_entries.php" method="POST" style="height:auto; font-weight:normal;">
           
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">step 1 / 2</a></li>
              <li><a data-toggle="tab" href="#tabext">step 2 / 2</a></li> 
            </ul>
         
          <div class="widget-content tab-content" style="background-color: #fff;">
            <div id="tab1" class="tab-pane active">
            
            <div class="col-sm-3">
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
   <th style="width:40%;">S/no.</th> 
   <td style="width:60%;"><input type="numeric" name="id" id="id"  readonly="readonly" value="<?php  echo $id; ?>"  readonly="readonly"
    style="width:100%; text-align:left;background-color:#fff;"> </td>  
              
     </tr>
     </table> 
    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
     
    <th style="width:40%;">Date</th> 
    <td style="width:60%;"><input type="numeric" name="FUELISSUANCEDATE" id="FUELISSUANCEDATE"  value="<?php  echo $FUELISSUANCEDATE; ?>"  readonly="readonly"
    style="width:100%; text-align:left;background-color:#fff;"></td>  
    <input type="hidden" name="Fuelcardname" id="Fuelcardname" value="<?php  echo $Fuelcardname; ?>" > 
    <input type="hidden" name="ISSUEDBY" id="ISSUEDBY" value="<?php  echo $ISSUEDBY; ?>" > 
    <input type="hidden" name="ISSUERTITLE" id="ISSUERTITLE"value="<?php  echo $ISSUERTITLE; ?>" > 
    <input type="hidden" name="ISSUERACCOUNT" id="ISSUERACCOUNT" value="<?php  echo $ISSUERACCOUNT; ?>" > 
    <input type="hidden" name="FISCALYEAR" id="FISCALYEAR" value="<?php  echo $FISCALYEAR; ?>" > 
    <input type="hidden" name="Fiscalmonth" id="Fiscalmonth" value="<?php  echo $Fiscalmonth; ?> <?php  echo $FISCALYEAR; ?>" > 
    <input type="hidden" name="MONTHNAME" id="MONTHNAME" value="<?php  echo $Fiscalmonth; ?>" > 
    <input type="hidden" name="PROJECT" id="PROJECT" >  
     </tr>
     </table> 
                <?php 
					$b=mysqli_query($conn,"select * from fuelcards where Fuelcardname='$Fuelcardname'");
					$brow=mysqli_fetch_array($b);
				?>
     <input type="hidden" name="Cardcode" id="Cardcode" value="<?php echo $brow['Cardcode']; ?>"  > 
     </div> 
     
<?php 
  $id =  $_GET['q'];  
  $REGISTRATIONNO = '';  
  $TYPE = ''; 
  $PRODUCT = '';   
  $LUBRICANT = '';   
  $LITRE = '';   
  $DRIVER = '';  
  $FUELSTATION = '';  
  $Fuelcardname = ''; 
  $INVOICENO = '';   
  $FUELISSUANCEDATE = '';   
  $UNITPRICE = '';   
  $ISSUEDBY = '';
  $ISSUERACCOUNT = '';   
  $PROJECT = '';  
  $ARDATE = ''; 
  $ARNAME = '';  
  $MILEAGEBEFORE = ''; 
  $MILEAGEAFTER = ''; 
  $PURPOSE = ''; 
  $TOTALAMOUNT = '';  
  $PREVIOUSMILEAGE = ''; 
  $CURRENTMILEAGE = ''; 
  $DISTANCECOVERED = ''; 
  $RUNNINGMILEAGE = ''; 
   
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "fleet";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM fuellogs WHERE `id` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $REGISTRATIONNO  = $row['REGISTRATIONNO'];
     $TYPE  = $row['TYPE'];
     $PRODUCT = $row['PRODUCT'];   
	 $LUBRICANT = $row['LUBRICANT']; 
	 $LITRE = $row['LITRE'];   
	 $DRIVER = $row['DRIVER'];   
	 $FUELSTATION  = $row['FUELSTATION'];
     $Fuelcardname  = $row['Fuelcardname'];
     $INVOICENO = $row['INVOICENO'];   
	 $FUELISSUANCEDATE = $row['FUELISSUANCEDATE']; 
	 $UNITPRICE = $row['UNITPRICE'];   
	 $ISSUEDBY = $row['ISSUEDBY']; 
	 $ISSUERACCOUNT = $row['ISSUERACCOUNT'];   
	 $PROJECT = $row['PROJECT'];  
	  $ARDATE = $row['ARDATE'];
	  $ARNAME = $row['ARNAME']; 
	  $MILEAGEBEFORE = $row['MILEAGEBEFORE'];
	  $MILEAGEAFTER = $row['MILEAGEAFTER']; 
	  $PURPOSE = $row['PURPOSE']; 
	  $TOTALAMOUNT = $row['TOTALAMOUNT']; 
	  
	  $PREVIOUSMILEAGE = $row['PREVIOUSMILEAGE'];
	  $CURRENTMILEAGE = $row['CURRENTMILEAGE']; 
	  $DISTANCECOVERED = $row['DISTANCECOVERED']; 
	  $RUNNINGMILEAGE = $row['RUNNINGMILEAGE']; 
	       
	  $id = $row['id'];  
      } 
      ?>
 

      
        <div class="col-sm-3">
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr> 
        <th style="width:40%;">Reg No.</th>  
        <td style="width:60%;"><input type="numeric" name="REGISTRATIONNO" id="REGISTRATIONNO"  value="<?php  echo $REGISTRATIONNO; ?>"  readonly="readonly"  
    style="width:100%; text-align:left;background-color:#fff;"></td>  
       
     </tr>
     </table>  
 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Driver</th>    
    <td style="width:60%;"><input type="numeric" name="DRIVER" id="DRIVER" value="<?php  echo $DRIVER; ?>"  required="required"   
    style="width:100%; text-align:left;background-color:#fff;"></td> 
     
     </tr>
     </table>  
     </div>
             
            <div class="col-sm-3">
     <?php 
					$b=mysqli_query($conn,"select * from motorisedequipments where REGISTRATIONNO='$REGISTRATIONNO'");
					$brow=mysqli_fetch_array($b);
				?>
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Previous mileage</th>    
    <td style="width:60%;"><input type="numeric" id="PREVIOUSMILEAGE" name="PREVIOUSMILEAGE" name1="PREVIOUSMILEAGE[]"
     value="<?php echo $brow['CURRENTMILEAGE']; ?>"    readonly="readonly"   
    style="width:100%; text-align:center;background-color:#fff;"></td> 
     
     </tr>
     </table> 
               
               
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Current mileage</th>    
    <td style="width:60%;"><input type="numeric" class="qty" type="text"  name="CURRENTMILEAGE" name1="qty[]"  value="<?php  echo $CURRENTMILEAGE; ?>" required="required"   
    style="width:100%; text-align:center;background-color:#fff;"></td> 
     
     </tr>
     </table> 
              
            </div>
            
            <div class="col-sm-3">
    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Distance covered</th>    
    <td style="width:60%;"><input type="numeric" id="DISTANCECOVERED" name="DISTANCECOVERED" name1="DISTANCECOVERED[]"  value="<?php  echo $DISTANCECOVERED; ?>" readonly="readonly"  
    style="width:100%; text-align:center;background-color:#fff;"></td> 
     
     </tr>
     </table> 
               
    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Running mileage</th>    
    <td style="width:60%;"><input type="numeric" id="RUNNINGMILEAGE" name="RUNNINGMILEAGE" name1="RUNNINGMILEAGE[]"   value="<?php  echo $RUNNINGMILEAGE; ?>" readonly="readonly"   
    style="width:100%; text-align:center;background-color:#fff;"></td> 
     
     </tr>
     </table>  
     </div> 
             
   <div class="col-sm-3">   
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
          <td style="width:20%;border:0px;">Status</td>    
    <td style="width:80%; border:0px;">
    <input type="radio" name="FUNCTIONALSTATUS" id="FUNCTIONALSTATUS" value="RUNNING" checked>
    <label>Running</label>
     <input type="radio" name="FUNCTIONALSTATUS" id="FUNCTIONALSTATUS" value="UNDRE REPAIR" >
    <label>Under repair</label>   
        </td>  
    </tr>
     </table> </div>
     
                <?php 
					$b=mysqli_query($conn,"select * from motorisedequipments where REGISTRATIONNO='$REGISTRATIONNO'");
					$brow=mysqli_fetch_array($b);
				?>
                 
     <div class="col-sm-3">   
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
          <td style="width:40%;border:0px;">Telephone</td>    
    <td style="width:60%; ">
    <input type="numeric" name="DRIVERMOBILENO" id="DRIVERMOBILENO" value="<?php echo $brow['DRIVERMOBILENO']; ?>"   
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    </tr>
    </table> </div>
     
      
        <div class="col-sm-3">   
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
        <td style="width:40%;border:0px;">Location</td>    
    <td style="width:60%; ">
    <input type="numeric" name="VEHICLELOCATION" id="VEHICLELOCATION" value="<?php echo $brow['VEHICLELOCATION']; ?>"      
    style="width:100%; text-align:left;background-color:#fff;"></td> 
    </tr>
     </table> </div>
     
      <div class="col-sm-3">
      
      
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>
        <td style="width:40%;border:0px;">Card name</td>    
    <td style="width:60%;border:0px; "><?php  echo $Fuelcardname; ?></td> 
    </tr>
     </table> </div>
     
            </div>
            <div id="tabext" class="tab-pane"> 
            
               <div class="col-sm-3">
    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Invoice No.</th>    
    <td style="width:60%;"><input type="numeric" name="INVOICENO" id="INVOICENO" value="<?php  echo $INVOICENO; ?>" required="required"   
    style="width:100%; text-align:center;background-color:#fff;"></td> 
     
     </tr>
     </table> 
               
    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Product</th>    
    <td style="width:60%;"><select name="PRODUCT" id="PRODUCT"  value="<?php  echo $PRODUCT; ?>"  required="required"      
     style="width:100%; text-align:center;background-color:#fff; height:22px;">
     <option value="<?php  echo $PRODUCT; ?>"><?php  echo $PRODUCT; ?> <option>
     <option>AGO<option>
     <option>PMS<option>   
     </select>
    </td>  
     </tr>
     </table>  
            </div>    
            
        <div class="col-sm-3">
    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Litres</th>    
    <td style="width:60%;"><input type="numeric" name="LITRE" id="LITRE" name1="LITRE[]"  value="<?php  echo $LITRE; ?>" required="required"  
    style="width:100%; text-align:center;background-color:#fff;"></td> 
     
     </tr>
     </table> 
               
    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Rate</th>    
    <td style="width:60%;"><input type="numeric" class="qtyexplode" type="text" name="UNITPRICE" name1="qtyexplode[]" value="<?php  echo $UNITPRICE; ?>" required="required"   
    style="width:100%; text-align:center;background-color:#fff; height:22px;"> 
    </td>  
    </tr>
    </table>     
                 
      
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Amount</th>    
    <td style="width:60%;"><input type="numeric" name="TOTALAMOUNT" id="TOTALAMOUNT" name1="TOTALAMOUNT[]" value="<?php  echo $TOTALAMOUNT; ?>" readonly="readonly"       
    style="width:100%; text-align:center;background-color:#fff; height:22px;"> 
    </td>  
    </tr>
    </table>   
    </div>  
             
             <div class="col-sm-6">
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Division</th>         
              <td style="width:60%;"><select name="DIVISION" id="DIVISION" value="<?php  echo $DIVISION; ?>" required="required"   
    style="width:100%; text-align:left;background-color:#fff;height:22px;">
    <option value="<?php  echo $DIVISION; ?>"> <?php  echo $DIVISION; ?></option>
                  <option>H/Q</option>
                  <option>KAWEMPE</option>
                  <option>NAKAWA</option>
                  <option>CENTRAL</option>
                  <option>LUBAGA</option>
                  <option>MAKINDYE</option>
                  </select>
    </td> 
    </tr>
    </table>  
    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Directorate</th>    
    <td style="width:60%;"><select name="DIRECTORATE" id="DIRECTORATE"  value="<?php  echo $DIRECTORATE; ?>" required="required"     
    style="width:100%; text-align:left;background-color:#fff;height:22px;">
                  <option  value="<?php  echo $DIRECTORATE; ?>"> <?php  echo $DIRECTORATE; ?></option>
                  <option value="EDSOFFICE">ED'S OFFICE</option>
                  <option value="GENDER">GENDER</option>
                  <option value="HEALTH">HEALTH</option>
                  <option value="AHR">AHR</option>
                  <option value="LEGAL">LEGAL</option>
                  <option value="TREASURY">TREASURY</option> 
                  <option value="REVENUE">REVENUE</option>
                  <option value="ENGINEERING">ENGINEERING</option>
                  <option value="AUDIT">AUDIT</option>
                  <option value="PHYSICALPLANNING">PHYSICAL PLANNING</option>
                  </select>
    </td> 
    </tr>
    </table>  
            
    <?php
$connect = new mysqli("localhost", "root", "toor2", "fleet");
$stssl ="";
if( $result = $connect->query("SELECT PURPOSE FROM purposecategory "))
{ while ($row = $result->fetch_assoc() ) {   $stssl=$stssl. "<option> " . $row['PURPOSE'] ." </option>";   }
  }
$connect->close();
?>   
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;" width="100%"> 
		<thead> 
		<tr>  
    <th style="width:40%;">Purpose</th>   
    <td style="width:60%;"><select name="PURPOSE" id="PURPOSE"  value="<?php  echo $PURPOSE; ?>"  
    required="required"   
    style="width:100%; text-align:left;background-color:#fff; height:22px;">
    <option value="<?php  echo $PURPOSE; ?>"  ><?php  echo $PURPOSE; ?> </option>
     ttt     = "<?php   echo $stssl; ?>"; 
    </select> 
    </td> 
    </tr>
    </table> 
    
    <input type="hidden" name="DATECAPTURED" id="DATECAPTURED" value="<?php  echo $DATECAPTURED; ?>">
    <br>
    <center><input type="submit" name="button" id="button" value="Save"/> </center>  
    </div> 
    </form>
    
       
    
<div id="grand">
<input type="hidden" name="gran" id="gran">
</div>

<script type="text/javascript">
$(document).ready(function() { 
	    $(".qty").keyup(function() {
        var grandTotal = 0;
        $("input[name1='qty[]']").each(function (index) {
            var qty = $("input[name1='qty[]']").eq(index).val(); 
		    var PREVIOUSMILEAGE = $("input[name1='PREVIOUSMILEAGE[]']").eq(index).val();
            var DISTANCECOVERED = parseInt(qty) - parseInt(PREVIOUSMILEAGE);
			var RUNNINGMILEAGE = parseInt(PREVIOUSMILEAGE) + parseInt(DISTANCECOVERED);
			   
            if (!isNaN(RUNNINGMILEAGE)) {
                $("input[name1='RUNNINGMILEAGE[]']").eq(index).val(RUNNINGMILEAGE);
                grandTotal = parseInt(grandTotal) + parseInt(RUNNINGMILEAGE);
                $('#gran').val(grandTotal);
            }
			
			 if (!isNaN(DISTANCECOVERED)) {
                $("input[name1='DISTANCECOVERED[]']").eq(index).val(DISTANCECOVERED);
                grandTotal = parseInt(grandTotal) + parseInt(DISTANCECOVERED);
                $('#granx').val(grandTotal);
            }
			 
        });
    });
});
</script>

                
 
<div id="grandz">
<input type="hidden" name="granz" id="granz">
</div>

<script type="text/javascript">
$(document).ready(function() { 
	    $(".qtyexplode").keyup(function() {
        var grandTotalz = 0;
        $("input[name1='qtyexplode[]']").each(function (index) {
            var qtyexplode = $("input[name1='qtyexplode[]']").eq(index).val();   
			var LITRE = $("input[name1='LITRE[]']").eq(index).val();  
			var TOTALAMOUNT = parseInt(qtyexplode) * parseInt(LITRE);
  
			 if (!isNaN(TOTALAMOUNT)) {
                $("input[name1='TOTALAMOUNT[]']").eq(index).val(TOTALAMOUNT);
                grandTotalz = parseInt(grandTotalz) + parseInt(TOTALAMOUNT);
                $('#granzx').val(grandTotalz);
            }
        });
    });
});
</script>
 
<script src="../.../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../plugins/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../plugins/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../../plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../plugins/flot/jquery.flot.categories.min.js"></script>
</body>
</html>
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
  
  $PMTNO = ''; 
  $PAYMENTDATE = ''; 
  $PMTSERIALID  = ''; 
  $USERINITIALS = '';   
  $TIMESTAMP='';
  $QUARTERACCOUNTABLE='';   
  $USERTITLE = ''; 
  $USERINO='';  
  $UTILITYTYPE = '';  
  $PLANDETAILS = ''; 
  $CODE  = '';
  $FINANCIALPERIOD = '';  
  $BUDGETSTATUS = ''; 
  $dnx = array();
  $mopx = array();
  $mopz = array();   
  $dov = array();
  $fqx = array();  
  $USERINITIALS  = '';
  $USERTITLE = '';  
  $USERINO = ''; 
  	
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "procurement";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM payments  WHERE `PMTNO` = '$id'";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $TIMESTAMP = $row['TIMESTAMP'];
     $PMTNO = $row['PMTNO']; 
     $PAYMENTDATE = $row['PAYMENTDATE'];
     $PMTSERIALID  = $row['PMTSERIALID']; 
	 
	 $dnx[] = $row['DETAILSOFPAYMENT'];
	 $mopx[] = $row['PAYEE'];
     $mopz[]    = $row['PROJECT'];   
	 $dov[] = $row['CHEQUENO'];
     $fqx[]    = $row['AMOUNTPAYABLE'];  
	  
     $USERINITIALS   = $row['USERINITIALS'];  
	 $QUARTERACCOUNTABLE=$row['QUARTERACCOUNTABLE'];  
     $USERTITLE   = $row['USERTITLE']; 
     $USERINO=$row['USERINO'];    
     $PLANDETAILS=$row['PLANDETAILS'];  
     $CODE   = $row['CODE']; 
	 $FINANCIALPERIOD=$row['FINANCIALPERIOD'];   
	       
	 $USERINITIALS=$row['USERINITIALS'];  
     $USERTITLE   = $row['USERTITLE']; 
     $USERINO=$row['USERINO'];    
      }

  ?>
   
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> .</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../admin/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../admin/assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href=".../../admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
 

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
 
  
  
</head> 
        
     <form id="form1" class="form-horizontal" action="../admin/proc/str_reqn_dsprocess.php" method="POST" style="height:auto; font-weight:normal;">  
         <br>
            
            <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                <th style="width:20%; text-align:left;border:0px;">Budget sub item </th>
                <td style="width:80%;border:0px;"><input type="text"id="PLANDETAILS"  name="PLANDETAILS"  value="<?php  echo $PLANDETAILS; ?>" readonly="readonly" 
				style="width:100%;  background-color:#fff; "></td>  
			 </tr>             
            </table>
            
            
               <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                 <th style="width:20%; text-align:left;border:0px;">Budget code </th>
                <td style="width:30%;border:0px;"><input type="text"id="CODE" name="CODE"  value="<?php  echo $CODE; ?>" readonly="readonly"     
				style="width:100%; background-color:#fff; "></td> 
                  
               <th style="width:20%; text-align:left;border:0px;">Financial year </th>
                <td style="width:30%;border:0px;"><input type="text"id="FINANCIALPERIOD" name="FINANCIALPERIOD"  value="<?php  echo $FINANCIALPERIOD; ?>" 
                readonly="readonly"            
				style="width:100%;  background-color:#fff; "></td> 
                  
			</tr>             
            </table> 
            
            
            
               <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
              
                <th style="width:20%; text-align:left;border:0px;">Payment quater </th>
                <td style="width:30%;border:0px;"><input type="text" id="QUARTERACCOUNTABLE" name="QUARTERACCOUNTABLE"  value="<?php  echo $QUARTERACCOUNTABLE; ?>"  
				style="width:100%; background-color:#FFF; "> 
                </td> 
                  
               
			    <th style="width:20%; text-align:left;border:0px;">Payment No.</th>
                <td style="width:30%;border:0px;">   <input type="text" name="PMTNO" id="PMTNO"  value="<?php  echo $PMTNO; ?>"  required="required"
               style="width:100%; text-align:right;background-color:#fff;height:21px; text-align:center;"></td> 
			 </tr>             
            </table>
            
             <table class="table-responsive" style="margin-top:-20px;">  
            <table class="table"  style="border:0px;">
              <tr>  
                 <th style="width:20%; text-align:left;border:0px;">Created date</th>
                <td style="width:30%;border:0px;"> <input type="text"  id="PAYMENTDATE" name="PAYMENTDATE" value="<?php  echo $PAYMENTDATE; ?>"  required="required"      
				style="width:100%; background-color:#FFF; "> </td> 
                  
               
			    <th style="width:20%; text-align:left;border:0px;">Serial No.</th>
                <td style="width:30%;border:0px;">   <input type="text" name="PMTSERIALID" id="PMTSERIALID" value="<?php  echo $PMTSERIALID; ?>"  required="required" 
               style="width:100%; text-align:right;background-color:#fff; text-align:center;"></td> 
			 </tr>             
            </table>
             
            <p></p>
            
            
            
              
   <table class="table table-table-tabled" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>  
      <th style="background-color: #fff;">*</th>
   <th style="width:30%;background-color:#fff;">DESCRIPTION </th>
   <th style="width:20%;background-color:#fff;">PAYEE </th> 
   <th style="width:20%;background-color: #fff;text-align:center;">PROJECT</th>    
   <th style="width:15%;background-color:#fff;">CHEQUE NO. </th> 
   <th style="width:15%;background-color: #fff;text-align:center;">AMOUNT</th> 
 
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
                                                  
                                                  <td> <input  name="dnx[]" readonly="" type="text" value="<?php  echo $dnx[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td> 
                                                  
                                                   <td> <input  name="mopx[]" readonly="" type="text" value="<?php  echo $mopx[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td> 
                                                  
                                                   <td> <input  name="mopz[]" readonly="" type="text" value="<?php  echo $mopz[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td> 
                                                  
                                                  <td> <input  name="dov[]" readonly="" type="text" value="<?php  echo $dov[$s]; ?>" 
                                                  class="form-control input-md" style= "width:100%; background-color:#fff; border:0px;"/></td> 
                                                    
                                                  <td> <input  name="fqx[]" type="numeric" value="<?php echo $fqx[$s]; ?>"  readonly="" class="form-control 
                                                  input-md" style= "width:100%; background-color:#fcfdfe;text-align:right;border:0px;"/></td> 
                                                    
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
    </tbody>
  </table>     
      
     
      <table class="table-responsive" style="margin-top:0px;"> 
            <table class="table"  style="border:0px;">
              <tr>  
                 <th style="width:85%; text-align:left;border:0px; text-align:right;">Total payment</th>
                <td style="width:15%;border:0px;"><input type="numeric" name="ORDERVALUE" id="ORDERVALUE"  value="<?php  echo $totals; ?>" 
				style="width:100%; text-align:right;background-color:#fff; font-weight:bold; font-size:16px;"></td>  
			  
			 </tr>             
            </table>
            
            
        <table class="table-responsive" > 
            <table class="table"  style="border:0px;">
              <tr>  
                <th style="width:10%; text-align:left; ">Created by</th>
                <td style="width:20%; "><input type="text"id="USERINITIALS" name="USERINITIALS" value="<?php  echo $USERINITIALS; ?>" readonly=""  
				style="width:100%;  background-color:#fff;height: 21px;"></td>  
                   
               <th style="width:10%; text-align:left; ">Title</th>
                <td style="width:30%; "><input type="text"id="USERTITLE" name="USERTITLE"   value="<?php  echo $USERTITLE; ?>" readonly=""      
				style="width:100%;  background-color:#f9fafb;height: 21px;"></td> 
                  
                  <th style="width:10%; text-align:left; ">PF number</th>
                <td style="width:20%; "><input type="text"id="USERINO" name="USERINO"    value="<?php  echo $USERINO; ?>" readonly=""     
				style="width:100%;  background-color:#f9fafb;height: 21px;"></td>  
			 </tr>             
            </table>
              
        </form>
       
                       
               <a href="payments.php" class="btn btn-primary btn-block margin-bottom" 
                style="font-family:algeria; background-color:#fff;"> <b style="color:#000;font-family:lcd;">
               <b style="color:green;;"> <<<<<<< </b>  </a> </div>
               
           </div> </div> </div> </div> </div> </div>

      </section>
      <!-- /.content --> </div>
    </div> </div> </div> </div> </div> </div>
<!-- ./wrapper -->
<!-- Morris.js charts -->
     <script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../admin/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../admin/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../admin/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../admin/dist/js/demo.js"></script>
<!-- Page script -->
    <!--END PAGE LEVEL SCRIPTS -->
</body>
</html> 
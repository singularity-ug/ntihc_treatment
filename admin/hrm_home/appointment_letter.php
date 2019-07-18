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
  $id =  $_GET['Serial'];  
  $Serial = '';  
  $FIRSTNAME = ''; 
  $LASTNAME = '';   
  $OTHERNAME = '';    
  $PFNUMBER = '';  
  $GENDER = '';  
  $MARITALSTATUS = '';  
  $PFNUMBER = '';   
  $OTHERNAME = '';    
  $GENDER = '';  
  $MARITALSTATUS = '';    
  $PLACEOFBIRTH = '';   
  $BIRTHDATE = '';    
  $NATIONALITY = '';  
  $RELIGION = '';   
  $MOBILEPHONE = '';   
  $HOMEPHONE = '';    
  $EMAIL = '';  
  $EMAIL2 = '';     
  $RESIDENTIALADDRESS = '';  
  $VILLAGELC1 = '';    
  $PARISHLC11 = '';   
  $SUBCOUNTYDIVISIONLC3 = '';    
  $DISTRICT = '';  
  $RESIDENTIALADDRESSAA = '';   
  $VILLAGELC1AA = '';   
  $PARISHLC11AA = '';    
  $SUBCOUNTYDIVISIONLC3AA = '';  
  $DISTRICTAA = '';   
  $ENTITYLOGO = '';    
  $FISCALYEAR = '';  
  $FISCALMONTH = ''; 	 
  $NUMBEROFCHILDREN = '';  
  $FULLNAMEOFSPOUSE = ''; 	 
  $BANKNAME = '';    
  $BANKBRANCH = '';  
  $ACCOUNTNUMBER = ''; 	 
  $PHYSICALDEFECTS = '';  
  $ANYOTHERINFORECARDINGHEALTH = ''; 	
   
  $NEXTOFKINPHONEONE = ''; 	 
  $NEXTOFKINPHONETWO = '';    
  $NEXTOFKINPHYSICALADDRESS = '';  
  $NEXTOFKINPOSTALADDRESS = ''; 	 
  $NEXTOFKINRELATIONSHIP = '';   
  $FULLNAMEOFFATHER = ''; 	 
  $FATHERPHYSICALADDRESS = '';    
  $FULLNAMEOFMOTHER = '';  
  $MOTHERPHYSICALADDRESS = ''; 	 
  $NEXTOFKINFIRSTNAME = '';  
  $NEXTOFKINSURNAME = ''; 	 
       		  
      
  $ALTNEXTOFKINFIRSTNAME = '';  
  $ALTNEXTOFKINSURNAME = ''; 	 
  $ALTNEXTOFKINPHONEONE = '';  
  $ALTNEXTOFKINPHONETWO = ''; 	
                           
  $ALTNEXTOFKINPHYSICALADDRESS = '';  
  $ALTNEXTOFKINPOSTALADDRESS = ''; 	 
  $ALTNEXTOFKINRELATIONSHIP = '';  
  $SUBMISSIONLEVEL = ''; 	             
	 
  $APPOINTMENTEFFECTIVEDATE = '';  
  $MRMS = ''; 	 
  $MADABSIR = '';  
  $THROUGHDATE = ''; 	 
  $POSITIONOFFIRSTAPPOINTMENT = ''; 
  $APPOINTMENTSTARTDATE = ''; 	 
  $DUTYSTATION = '';  
  $APPOINTMENTENDDATE = '';   
                
  $REPORTSTO = ''; 
  $POSITIONCLASSIFICATION = '';  
  $DEPARTMENT = ''; 	  
  $EXPECTEDWORKHOURS = '';   
  $GROSSSALARY = '';  
  $CURRENCY = '';   
  $AMOUNTINWORDS = ''; 	 
  $CONTRACTTYPE = '';  
  $ENTITYREFEREEPOSITION = '';         	             
  $JOBSTATUS = '';   
  			   		  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ahr";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM staffcontacts WHERE `Serial` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $id = $row['id']; 
     $Serial  = $row['Serial'];
     $FIRSTNAME  = $row['FIRSTNAME'];
     $LASTNAME = $row['LASTNAME'];   
	 $OTHERNAME = $row['OTHERNAME']; 
	 $PFNUMBER = $row['PFNUMBER'];  
	 $GENDER = $row['GENDER'];  
	 $MARITALSTATUS = $row['MARITALSTATUS'];  
	 $PFNUMBER = $row['PFNUMBER'];    
	 $BIRTHDATE = $row['BIRTHDATE'];    
	 $PLACEOFBIRTH = $row['PLACEOFBIRTH'];   
	 $NATIONALITY = $row['NATIONALITY']; 
	 $RELIGION = $row['RELIGION'];  
	 $MOBILEPHONE = $row['MOBILEPHONE'];  
	 $HOMEPHONE = $row['HOMEPHONE'];  
	 $EMAIL = $row['EMAIL'];  
	 $EMAIL2 = $row['EMAIL2'];   
     $RESIDENTIALADDRESS = $row['RESIDENTIALADDRESS'];    
	 $VILLAGELC1 = $row['VILLAGELC1'];   
	 $PARISHLC11 = $row['PARISHLC11']; 
	 $SUBCOUNTYDIVISIONLC3 = $row['SUBCOUNTYDIVISIONLC3'];  
	 $DISTRICT = $row['DISTRICT'];  
	 $RESIDENTIALADDRESSAA = $row['RESIDENTIALADDRESSAA'];  
	 $VILLAGELC1AA = $row['VILLAGELC1AA'];  
	 $PARISHLC11AA = $row['PARISHLC11AA'];  
	 $SUBCOUNTYDIVISIONLC3AA = $row['SUBCOUNTYDIVISIONLC3AA'];  
	 $DISTRICTAA = $row['DISTRICTAA'];   
	 $ENTITYLOGO = $row['ENTITYLOGO'];  
	 $FISCALYEAR = $row['FISCALYEAR'];  
	 $FISCALMONTH = $row['FISCALMONTH'];  
	 $NUMBEROFCHILDREN = $row['NUMBEROFCHILDREN'];  
	 $FULLNAMEOFSPOUSE = $row['FULLNAMEOFSPOUSE'];  
	       
	 $BANKNAME = $row['BANKNAME'];  
	 $BANKBRANCH = $row['BANKBRANCH'];  
	 $ACCOUNTNUMBER = $row['ACCOUNTNUMBER'];  
	 $PHYSICALDEFECTS = $row['PHYSICALDEFECTS'];  
	 $ANYOTHERINFORECARDINGHEALTH = $row['ANYOTHERINFORECARDINGHEALTH'];  
	 
	 $NEXTOFKINPHONEONE = $row['NEXTOFKINPHONEONE'];  
	 $NEXTOFKINPHONETWO = $row['NEXTOFKINPHONETWO'];  
	 $NEXTOFKINPHYSICALADDRESS = $row['NEXTOFKINPHYSICALADDRESS'];  
	 $NEXTOFKINPOSTALADDRESS = $row['NEXTOFKINPOSTALADDRESS'];  
	 $NEXTOFKINRELATIONSHIP = $row['NEXTOFKINRELATIONSHIP'];  
          
	 $FULLNAMEOFFATHER = $row['FULLNAMEOFFATHER']; 
	 $FATHERPHYSICALADDRESS = $row['FATHERPHYSICALADDRESS'];  
	 $FULLNAMEOFMOTHER = $row['FULLNAMEOFMOTHER'];  
	 $MOTHERPHYSICALADDRESS = $row['MOTHERPHYSICALADDRESS'];  
	 $NEXTOFKINFIRSTNAME = $row['NEXTOFKINFIRSTNAME'];  
	 $NEXTOFKINSURNAME = $row['NEXTOFKINSURNAME']; 
        
	 $ALTNEXTOFKINFIRSTNAME = $row['ALTNEXTOFKINFIRSTNAME'];  
	 $ALTNEXTOFKINSURNAME = $row['ALTNEXTOFKINSURNAME'];  
	 $ALTNEXTOFKINPHONEONE = $row['ALTNEXTOFKINPHONEONE'];  
	 $ALTNEXTOFKINPHONETWO = $row['ALTNEXTOFKINPHONETWO']; 
                           
	 $ALTNEXTOFKINPHYSICALADDRESS = $row['ALTNEXTOFKINPHYSICALADDRESS'];  
	 $ALTNEXTOFKINPOSTALADDRESS = $row['ALTNEXTOFKINPOSTALADDRESS'];  
	 $ALTNEXTOFKINRELATIONSHIP = $row['ALTNEXTOFKINRELATIONSHIP'];  
	 $SUBMISSIONLEVEL = $row['SUBMISSIONLEVEL']; 					
               
	
	 $APPOINTMENTEFFECTIVEDATE = $row['APPOINTMENTEFFECTIVEDATE'];  
	 $MRMS = $row['MRMS'];  
	 $MADABSIR = $row['MADABSIR'];  
	 $THROUGHDATE = $row['THROUGHDATE']; 
	  
	 $POSITIONOFFIRSTAPPOINTMENT = $row['POSITIONOFFIRSTAPPOINTMENT'];  
	 $APPOINTMENTSTARTDATE = $row['APPOINTMENTSTARTDATE'];  
	 $DUTYSTATION = $row['DUTYSTATION'];  
	 $APPOINTMENTENDDATE = $row['APPOINTMENTENDDATE'];  
		   
     $REPORTSTO = $row['REPORTSTO'];  
	 $POSITIONCLASSIFICATION = $row['POSITIONCLASSIFICATION'];  
	 $DEPARTMENT = $row['DEPARTMENT'];  
	 $EXPECTEDWORKHOURS = $row['EXPECTEDWORKHOURS']; 	 
	 
	 $GROSSSALARY = $row['GROSSSALARY'];  
	 $CURRENCY = $row['CURRENCY'];  
	 $AMOUNTINWORDS = $row['AMOUNTINWORDS'];  
	 $CONTRACTTYPE = $row['CONTRACTTYPE']; 
	 $ENTITYREFEREEPOSITION = $row['ENTITYREFEREEPOSITION']; 
	 $JOBSTATUS = $row['JOBSTATUS']; 
	          
                     		   
			   
      } 
  ?>
      
      
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../assets/notifier.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../datatable/css/buttons.dataTables.min.css">

  <script src="../datatable/js/jquery-1.12.3.js"></script>
  <script src="../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../datatable/js/bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../datatable/js/buttons.flash.min.js"></script>
  <script src="../datatable/js/jszip.min.js"></script>
  <script src="../datatable/js/pdfmake.min.js"></script>
  <script src="../datatable/js/vfs_fonts.js"></script>
  <script src="../datatable/js/buttons.html5.min.js"></script>
  <script src="../datatable/js/buttons.print.min.js"></script>
 
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
 
</head> 
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">   
          <script>
function myFunction() {
    window.print();
}
</script>


       
        <div class="container-fluid" style="width:70%;">
         
                <img src="../../assets/img/logs.PNG" width="100%" height="100%">  
                   
     <form class="form-horizontal" action="home_hrmgt.php" method="POST" style="height:auto; font-weight:normal; background-color:#fff;"> 
       <input type="hidden"  id="Serial" name="Serial"  value="<?php  echo $Serial; ?>"  />
     
     <input type="hidden"  id="id" name="id"  value="<?php  echo $id; ?>"  />
    
     <input type="hidden"  id="PFNUMBER" name="PFNUMBER"  
     value="<?php  echo $ENTITYLOGO; ?>/<?php  echo $FISCALYEAR; ?>/<?php  echo $FISCALMONTH; ?>/<?php  echo $id; ?>"  />  
     
           <div class="col-sm-12">
            <div class="panel-body">
             
               
             <?php  echo $APPOINTMENTEFFECTIVEDATE; ?> 
             <BR><BR>
               
             <?php  echo $MRMS; ?>. <?php  echo $LASTNAME; ?> <?php  echo $FIRSTNAME; ?> <?php  echo $OTHERNAME; ?>
            
             <br>
               
             <?php  echo $RESIDENTIALADDRESS; ?> - <?php  echo $DISTRICT; ?> 
             <br>
               
             <?php  echo $MOBILEPHONE; ?>  <?php  echo $HOMEPHONE; ?>
                   
             <br><br>
             
             Dear  <?php  echo $MADABSIR; ?>,
                   
              <br><br>
             
            <b> Subject:  Offer of Appointment as <?php  echo $POSITIONOFFIRSTAPPOINTMENT; ?></b>
            
            <BR><br>
            
            <p> On behalf of NTIHC, I am pleased to offer you the position of <?php  echo $POSITIONOFFIRSTAPPOINTMENT; ?>  <?php  echo $APPOINTMENTEFFECTIVEDATE; ?>
             through <?php  echo $THROUGHDATE; ?>. 
                The position is based in <?php  echo $DUTYSTATION; ?> you report to the <?php  echo $REPORTSTO; ?>.  This offer is subject to NTIHC obtaining satisfactory background check.</p>
                
              <p> </p>
                
              <p>This position is classified as a <?php  echo $POSITIONCLASSIFICATION; ?>. You will be expected to work <?php  echo $EXPECTEDWORKHOURS; ?>. You will be entitled to a monthly gross salary of <?php  echo $CURRENCY; ?> <?php  echo $GROSSSALARY; ?> (<?php  echo $AMOUNTINWORDS; ?>). Appropriate local statutory taxes will be deducted and remitted to respective authorities.</p>  
              <p> </p>
               
              
               <?php
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stss ="";
if( $result = $connect->query("SELECT APPOINTMENTSTARTDATE, APPOINTMENTENDDATE, 
			                   TIMESTAMPDIFF(MONTH, APPOINTMENTSTARTDATE, APPOINTMENTENDDATE)  AS month 
			                    FROM staffcontacts WHERE `Serial` = '$id'"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "  " . $row['month'] ." ";   }
  }
$connect->close();
?>   
              
         <?php
$connect = new mysqli("localhost", "root", "toor2", "ahr");
$stssyr ="";
if( $result = $connect->query("SELECT Serial, APPOINTMENTSTARTDATE, APPOINTMENTENDDATE, 
			                   TIMESTAMPDIFF(YEAR, APPOINTMENTSTARTDATE, APPOINTMENTENDDATE)  AS year 
			                    FROM staffcontacts WHERE `Serial` = '$id'"))
{ while ($row = $result->fetch_assoc() ) {   $stssyr=$stssyr. "  " . $row['year'] ." ";   }
  }
$connect->close();
?>         
              <p>This offer of employment is for an initial contract period of  <?php echo $stssyr; ?>  (<?php echo $stss; ?>) year/month(s). While NTIHC is making this offer of employment, please note that continuing employment with NTIHC is contingent on the funding direction of NTIHC’S programs and employee performance. </p>  
                
              <p> </p>
              
              
              <p>You will initially be placed on a <?php echo $stss; ?>. month <?php  echo $CONTRACTTYPE; ?> period at the end of which your performance will be evaluated. Either party to this contract may terminate your services by giving one month notice or one month salary in lieu of notice. Enclosed in this offer is a copy of your job description and detailed description of the terms and conditions including benefits provided by NTIHC that we would like you to sign and return to us on or prior to your start date</p>
              
              <p></p>
              
              <p>If this is in agreement of your understanding of this employment offer, please sign the letter to confirm your acceptance of this appointment and return it as soon as possible. </p>
              
              <br>
              
              <p>I wish therefore to congratulate you upon this achievement</p>
<p>Sincerely</p>
…………………………………………….
<p><?php  echo $ENTITYREFEREEPOSITION; ?> </p>

                
              </div>
              <!-- /.tab-pane -->
              
              
            </div>
            <!-- /.tab-content -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
      <!-- START PROGRESS BARS -->
                      
                      
                    </div>
                  </div>
              
              </div>
            </div>
            <!-- /.box-body -->
            
              
                    <button onClick="myFunction()" >Print </button>   
       
              </form> 
       
       </div> 
       
<script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
     
</body>
</html>   
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
<div class="wrapper" style="background-color:#fff;">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">   
          <script>
function myFunction() {
    window.print();
}
</script>


       <div class="col-sm-1">
       
       </div>
       
        <div class="col-sm-10">
        
                  <!-- Info boxes --> 
                <img src="../assets/img/logsbig.PNG" width="100%" height="100%"> 
                <center> <p style="color:#000; font-weight:bold;font-size:12px;"> <b> </b> </p> </center> 
                   
     <form class="form-horizontal" action="hrm_home/update_appointment.php" method="POST" style="height:auto; font-weight:normal; background-color:#fff;"> 
       
     <input type="hidden"  id="id" name="id"  value="<?php  echo $id; ?>"  /> 
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       Appointment information for &nbsp;<?php  echo $LASTNAME; ?> <?php  echo $FIRSTNAME; ?> <?php  echo $OTHERNAME; ?>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                    
              <div class="col-sm-6">
              <table class="table-responsive" style="margin-top:-3px;">
              <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Effective date </th>  
                <th style="width:60%;border:0px ;"> <input type="text"   name="APPOINTMENTEFFECTIVEDATE"  id="APPOINTMENTEFFECTIVEDATE" 
                value="<?php  echo $APPOINTMENTEFFECTIVEDATE; ?>"
                placeholder="Like: 7th April 2017"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
              </div>      
           
              <div class="col-sm-6" >
              <table class="table-responsive" style="margin-top:-3px;">
              <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Employee label  </th>  
                <th style="width:30%;border:0px ;"> <select  name="MRMS"  id="MRMS" value="<?php  echo $MRMS; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  
                 <option value="<?php  echo $MRMS; ?>"><?php  echo $MRMS; ?></option>
                 <option>Mr</option>
                 <option>Ms</option>
                 </select>
                 </th>  
                 
                 <th style="width:30%;border:0px ;"> <select  name="MADABSIR"  id="MADABSIR" value="<?php  echo $MADABSIR; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  
                 <option value="<?php  echo $MADABSIR; ?>"> <?php  echo $MADABSIR; ?></option>
                 <option>Sir</option>
                 <option>Madam</option>
                 </select>
                 </th> 
              </tr>
			  </table>  
              </div>
              
              <div class="col-sm-6"> 
              <table class="table-responsive" style="margin-top:-23px;">
              <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Through date </th>  
                <th style="width:60%;border:0px ;"> <input type="text"   name="THROUGHDATE"  id="THROUGHDATE" value="<?php  echo $THROUGHDATE; ?>"
                placeholder="Like: 30th September 2017"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
              </div>      
            
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Position </th>  
                <th style="width:60%;border:0px ;"> <input type="text"  name="POSITIONOFFIRSTAPPOINTMENT"  id="POSITIONOFFIRSTAPPOINTMENT" 
                value="<?php  echo $POSITIONOFFIRSTAPPOINTMENT; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">   
                 </th>  
              </tr>
			  </table> 
           </div>
                
               <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Appointment start date </th>  
                <th style="width:60%;border:0px ;"> <input type="date" id="APPOINTMENTSTARTDATE" name="APPOINTMENTSTARTDATE"  value="<?php  echo $APPOINTMENTSTARTDATE; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table>  
            </div>
            
              <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Duty station</th>  
                <th style="width:60%;border:0px ;"> <select name="DUTYSTATION"  id="DUTYSTATION" value="<?php  echo $DUTYSTATION; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                 <option>Kampala</option>
                 <option> </option>
                 </select>
                  </th>  
              </tr>
			  </table> 
           </div>
                  
             
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Appointment end date</th>  
                <th style="width:60%;border:0px ;"> <input type="date" name="APPOINTMENTENDDATE" id="APPOINTMENTENDDATE" value="<?php  echo $APPOINTMENTENDDATE; ?>" 
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  </th>  
              </tr>
			  </table> 
           </div>
           
            
           
           <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Reports to </th>  
                <th style="width:60%;border:0px ;"> <input type="text" id="REPORTSTO" name="REPORTSTO" value="<?php  echo $REPORTSTO; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">   </th>  
              </tr>
			  </table> 
           </div>
           
          
           
            <div class="col-sm-6">
               <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;">Position classification </th>  
                <th style="width:60%;border:0px ;"> <select  id="POSITIONCLASSIFICATION" name="POSITIONCLASSIFICATION" value="<?php  echo $POSITIONCLASSIFICATION; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">  
                            <option value="<?php  echo $POSITIONCLASSIFICATION; ?>"><?php  echo $POSITIONCLASSIFICATION; ?></option> 
                            <option> fulltime hire </option>
                            <option ></option> 
                            </select> </th>  
              </tr>
			  </table>  
            </div>
            
             <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Department</th>  
                <th style="width:60%;border:0px ;"> <select id="DEPARTMENT" name="DEPARTMENT" value="<?php  echo $DEPARTMENT; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                 <option value="<?php  echo $DEPARTMENT; ?>"> <?php  echo $DEPARTMENT; ?></option>
                 <option>Service delivery</option>
                 <option>Finance and diministration</option>
                 <option>Advocacy and research</option>
                 </select>
                  </th>  
              </tr>
			  </table> 
           </div>
          
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Expected work hours </th>  
                <th style="width:60%;border:0px ;"> <select name="EXPECTEDWORKHOURS"  id="EXPECTEDWORKHOURS" value="<?php  echo $EXPECTEDWORKHOURS; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                 <option value="<?php  echo $EXPECTEDWORKHOURS; ?>">  <?php  echo $EXPECTEDWORKHOURS; ?> </option>
                 <option>40 hours/week</option>
                 <option></option>
                 </select>
                  </th>  
              </tr>
			  </table> 
           </div>
           
           
           
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Gross salary </th>  
                <th style="width:25%;border:0px ;"> <input type="text" name="GROSSSALARY"  id="GROSSSALARY" value="<?php  echo $GROSSSALARY; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th> 
                <th style="width:15%;border:0px ;">Currency </th>    
                <th style="width:20%;border:0px ;"> <select name="CURRENCY"  id="CURRENCY" value="<?php  echo $CURRENCY; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;">
                 <option value="<?php  echo $CURRENCY; ?>">  <?php  echo $CURRENCY; ?></option>
                 <option>UG SHs</option>
                 </select>
                  </th>   
                  
              </tr>
			  </table> 
           </div>
           
            <div class="col-sm-12">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:19%;border:0px ;"> Amount in words </th>  
                <th style="width:79%;border:0px ;"> <input type="text" name="AMOUNTINWORDS"  id="AMOUNTINWORDS" value="<?php  echo $AMOUNTINWORDS; ?>"
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                  </th>  
              </tr>
			  </table> 
           </div>
           
            <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Contract type </th>  
                <th style="width:60%;border:0px ;"> <select name="CONTRACTTYPE"  id="CONTRACTTYPE" value="<?php  echo $CONTRACTTYPE; ?>"  
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                 <option value="<?php  echo $CONTRACTTYPE; ?>" ><?php  echo $CONTRACTTYPE; ?></option>
                 <option>Probation</option>
                 <option>Permanent</option>
                 <option>temporary</option>
                 </select>
                  </th>  
              </tr>
			  </table> 
              </div>
              
               <div class="col-sm-6">
             <table class="table-responsive" style="margin-top:-23px;">
            <table class="table" style="border:0px;">
              <tr> 
				<th style="width:40%;border:0px ;"> Sencere entity reference </th>  
                <th style="width:60%;border:0px ;"> <select name="ENTITYREFEREEPOSITION"  id="ENTITYREFEREEPOSITION"  value="<?php  echo $ENTITYREFEREEPOSITION; ?>"  
                 required="required" class="form-control" style="width:100%;background-color:#fff;"> 
                 <option  value="<?php  echo $ENTITYREFEREEPOSITION; ?>" ><?php  echo $ENTITYREFEREEPOSITION; ?></option>
                 <option>Programme Director</option>
                 </select>
                  </th>  
              </tr>
			  </table> 
              </div> 
                <input type="hidden"name="JOBSTATUS"  id="JOBSTATUS" value="Appointed" /> 
                
                <center><input type="submit" name="update" value="Update"></center>
                
               </form>
               
               
           </div> 
             
          
           </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border" style="text-align:center; font-size:13px;">
                    <h4 class="box-title" style="text-align:center; font-size:13px;">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                       Quick view
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                    
                <div class="table-responsive mailbox-messages"> 
               
             <table id="exacontapps" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                   <th>ID </th>
                  <th>CREATED DATE</th>
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th> 
                  <th>JOB STATUS</th>
                  <th>APPOINT</th>
                  <th>ACTION</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th>ID </th>
                  <th>CREATED DATE</th>
                  <th>EMPLOYEE NAME</th>
                  <th>PF NUMBER</th> 
                  <th>JOB STATUS</th> 
                  <th>APPOINT</th>
                  <th>ACTION</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("config_ahr.php");

             $result = mysqli_query($mysqli, "SELECT * FROM staffcontacts WHERE  SUBMISSIONLEVEL ='Completed' AND JOBSTATUS ='Appointed' ORDER BY id DESC");

             while($res = mysqli_fetch_array($result)) {
             $dtsxapp = $res['id']."***".$res['Serial'];

              echo "<tr>"; 
			  echo "<td>".$res['id']."</td>";
			  echo "<td>".$res['DATECREATED']."</td>";
			  echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']." ".$res['OTHERNAME']." </td>";
			  echo "<td>".$res['ENTITYLOGO']."/".$res['FISCALYEAR']."/".$res['FISCALMONTH']."/".$res['id']."</td>";
			  echo "<td>".$res['JOBSTATUS']."</td>";
			  echo '<td> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
              <a id="2__'.$dtsxapp.'" href="javascript:void(0)" onclick="appointment(this.id)" data-toggle="tooltip" title="Appoint me"
              <span class="glyphicon glyphicon-edit"> </span></a> 
              </td>';  
			  echo "<td><a href=\"hrm_home/appointment_letter.php?Serial=$res[Serial]\">View info</a>  </td>";		 
	            }
               ?>
             </tbody>
             </table>
            
      </div> 
                      
                    </div>
                  </div>
              
              </div>
            </div>
            <!-- /.box-body -->
           
                   
              </div>         
              
              
       <div class="col-sm-1">
       
       </div>
       
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
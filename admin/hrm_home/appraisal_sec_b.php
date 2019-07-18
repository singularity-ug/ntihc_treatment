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
$stdd ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stdd=$stdd. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc </title>
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
  <?php
  $fz ='';
  if(isset($_GET['q'])) { $fz=$_GET['q']; }
  ?>
  <script>
  $(document).ready(function() {
     var ttt = "<?php echo $fz;  ?>";

	 if(ttt==""){}  else{ $("#notificationModal").modal("show"); }
     $('#example').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:' file'
		}
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example5').DataTable( {
	  "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' Ntihc imms'
		},
		{extend :'pdf',
		 title:'Ntihc imms '
		},
		{extend :'print',
		 title:' Ntihc imms'
		}
        ]
    } );
  } );
  </script>


   <script>
  $(document).ready(function() {
     $('#times').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' TIME SHEET'
		},
		{extend :'pdf',
		 title:'TIME SHEET'
		},
		{extend :'print',
		 title:'TIME SHEET'
		}
        ]
    } );
  } );
  </script>
<script>
  $(document).ready(function() {
     $('#exaconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>
  
  
  
<script>
  $(document).ready(function() {
     $('#exstaffconts').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' STAFF CONTACTS'
		},
		{extend :'pdf',
		 title:'STAFF CONTACTS '
		},
		{extend :'print',
		 title:' STAFF CONTACTS'
		}
        ]
    } );
  } );
  </script>
  
  
   <script>
  $(document).ready(function() {
     $('#example13').DataTable();
  } );
  </script>

  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PLANDETAILS"+num).val(data[2]);
  $("#CODE").val(data[2]);
  $("#FINANCIALPERIOD").val(data[3]);
  $("#FIRSTQTR").val(data[4]);
  $("#SECONDQTR").val(data[5]);
  $("#THIRDQTR").val(data[6]);
  $("#FOURTHQTR").val(data[7]);
  $("#BUDGETAMOUNT").val(data[8]); 
  $("#BUDGETSTATUS").val(data[9]);       
  
} 
function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "serch_budget.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result); 
}
  });
}
} 
</script>

 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border: 1px solid #ECF0F5;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
	
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 2px solid #ECF0F5;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 12px;
             	color:#000000;
				font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
             background:#fff;
             }

</style> 

</head> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <header class="main-header">

    <!-- Logo -->
    <a href="hr_contacts.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Home</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="appraisal.php" class="" >Section A<span class="sr-only">(current)</span></a></li> 
            <li class="active"><a href="appraisal.php" class="" >Section B<span class="sr-only">(current)</span></a></li> 

          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
              <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> LOGOUT</li></a>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              </li>
              <!-- Menu Body -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button --> 
        </ul>
      </div>

    </nav>
  </header>
 


<?php 
  $id =  $_GET['STAFFAPPRAISALID'];  
  $Serial = '';  	 
  $STAFFAPPRAISALID = '';      $DATECREATED = ''; 
  $PFNUMBER = '';    
  $APMONTH = '';     
  $APYEAR = '';    
  $NAMEOFEMPLOYEE = '';  
  $APDEADLINE = ''; 	
	
			   		  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ahr";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM staffappraisal WHERE `STAFFAPPRAISALID` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $id = $row['id']; 
     $Serial  = $row['Serial'];
     $STAFFAPPRAISALID  = $row['STAFFAPPRAISALID'];  $DATECREATED  = $row['DATECREATED'];
     $PFNUMBER = $row['PFNUMBER'];   
	 $APMONTH = $row['APMONTH'];  
	 $APYEAR = $row['APYEAR']; 
	 $NAMEOFEMPLOYEE  = $row['NAMEOFEMPLOYEE'];
     $APDEADLINE = $row['APDEADLINE'];   
	
	  
      } 
  ?>              
 
  <!-- Content Wrapper. Contains page content --> 
    <!-- Content Header (Page header) -->
    <section class="content-header">  
    </section>
 
              
       <div class ="container-fluid" style="width:90%; height:100%; border: 1px #f8f1f1 solid;border-radius: 4px;">
      <div class="row">
      <div class="col-sm-12">
                        
          <img src="img/logsbigxt.PNG"  width="100%" height="100%">   
  
          <font style=" font-weight:bold; color:#000;"><center>STAFF PERFOMANCE APPRAISAL</center></font>
          <br>
              <form id="form-wizard" class="form-horizontal" method="post"  action="app_section_aprocess.php" >
              <div id="form-wizard-1" class="step">
               
                 <input type="hidden" name="STAFFAPPRAISALID"  id="STAFFAPPRAISALID" value="<?php  echo $STAFFAPPRAISALID; ?>" readonly="">    
                     
               <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr>

                <th style="width:20%;border:0px;">Name of Employee / Appraisee:</th>
				<th style="width:30%;border:0px;">  <input type="text" name="NAMEOFEMPLOYEE"  id="NAMEOFEMPLOYEE" value="<?php  echo $NAMEOFEMPLOYEE; ?>" readonly=""   
				  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 <th style="width:20%;border:0px;">Name of Supervisor / Appraiser: </th>
				<th style="width:30%;border:0px;">   </th> 
              </tr>
			  </table>
             
               <table class="table-responsive" style="margin-top:-25px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:50%;border:0px;"></th>  
                <th style="width:20%;border:0px;">1st Level supervisor </th>
				<th style="width:30%;border:0px;"> <input type="text" id="FIRSTLVSUPERVISOR" name="FIRSTLVSUPERVISOR"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
              </tr>
			  </table>
              
               <table class="table-responsive" style="margin-top:-25px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:50%;border:0px;"></th>  
                <th style="width:20%;border:0px;">2nd Level supervisor </th>
				<th style="width:30%;border:0px;"> <input type="text" id="SECONDLVSUPERVISOR" name="SECONDLVSUPERVISOR"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
              </tr>
			  </table>

              <table class="table-responsive" style="margin-top:-20px;">
               <table class="table" style="border:0px;">
              <tr>

                <th style="width:20%;border:0px;">Title</th>
				<th style="width:30%;border:0px;"> <input type="text" id="TITLE" name="TITLE" value="<?php  echo $desc; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 <th style="width:20%;border:0px;">Appraisal period </th>
				<th style="width:30%;border:0px;"> <input type="text" id="APPRAISALPERIOD" name="APPRAISALPERIOD" value="<?php  echo $APMONTH; ?> <?php  echo $APYEAR; ?>" 
				required=" "  style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
              </tr>
			  </table>
               
	  
              <table class="table-responsive" style="margin-top:-25px;">
               <table class="table" style="border:0px;">
              <tr>

                <th style="width:20%;border:0px;">Department</th>
				<th style="width:30%;border:0px;"> <input type="text" id="DEPARTMENT" name="DEPARTMENT" value="<?php  echo $dept; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                 <th style="width:20%;border:0px;">Appraisal date </th>
				<th style="width:30%;border:0px;"> <input type="text" id="APPRAISALDATE" name="APPRAISALDATE" value="<?php  echo $DATECREATED; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
              </tr>
			  </table>
              
              
              <p style="font-weight:bold;">Basis for Assesssment and development</p>
              <p><p/>
              <p> Staff performance appraisal is a management tool for establishing the extent to which the set targets/objectives within overall goals of an organization are achieved.  The  appraisal process offers an opportunity to the appraisee and appraiser to dialogue and obtain a feedback on performance.<p/> 

              <p>The evaluation system enables the performance of all employees to be analyzed and documented. It is a participatory process in which the employee is given an opportunity to evaluate themselves and rate their performance on a pre-determined scale. The employee shall then discuss their scores with their respective supervisors and or line managers, who shall also score the employee against the same yardstick. The employee shall finally be expected to identify skills gaps in which they require professional skills training, as the supervisor/Line manager shall also be expected to give an evaluation of the competencies of the staff with regard to their ability to effectively attain their professional 
targets.       <p/>

               <p><p/>
  <p style="font-weight:bold;">Deadline for submission:</p>
   
  <p> <?php  echo $APDEADLINE; ?> &nbsp This means that all sections must be completed before this date; by the Appraisee, Appraiser, Appraiser’s appraiser and Program Director, working together to ensure this deadline is met.</p> 
  
  
<?php 
  $id =  $_GET['STAFFAPPRAISALID'];  
  $Serial = '';  	 
  $STAFFAPPRAISALID = '';      $VILLAGELC1 = ''; 
  $PARISHLC11 = '';    
  $SUBCOUNTYDIVISIONLC3 = '';     
  $DISTRICT = '';    
  $DEPARTMENT = '';  
  $POSITIONOFFIRSTAPPOINTMENT = ''; 	
	
			   		  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ahr";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM staffcontacts WHERE `STAFFAPPRAISALID` = '$id' ";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){
     $id = $row['id']; 
	 $STAFFAPPRAISALID = $row['STAFFAPPRAISALID']; 
     $VILLAGELC1  = $row['VILLAGELC1'];
     $PARISHLC11  = $row['PARISHLC11'];  
	 $SUBCOUNTYDIVISIONLC3  = $row['SUBCOUNTYDIVISIONLC3'];
     $DISTRICT = $row['DISTRICT'];   
	 $DEPARTMENT = $row['DEPARTMENT'];  
	 $POSITIONOFFIRSTAPPOINTMENT = $row['POSITIONOFFIRSTAPPOINTMENT'];  
	
	  
      } 
  ?>      
  
       <p style=" font-weight:bold; color:#000; font-size:11px;">SECTION A: TO BE COMPLETED BY THE APPRAISEE</p>
              
       <p style=" font-weight:bold; color:#000; font-size:12px;">A1.Appraisee's current details:</p>
             
       <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:20%;border:0px;">Marital status (Check appropriately)</th>
				<th style="width:30%;border:0px;"> 
                <input type="radio" id="username" name="MARITALSTATUS" value="">
                <label>Married</label> 
                 <input type="radio" id="username" name="MARITALSTATUS" value="">
                <label>Single</label> 
                <input type="radio" id="username" name="MARITALSTATUS" value="">
                <label>Widowed</label> 
                 <input type="radio" id="username" name="MARITALSTATUS" value="">
                <label>Divorced</label> 
                
                 </th> 
                 <th style="width:10%;border:0px;">Telephone contact </th>
				<th style="width:15%;border:0px;"> <input type="text" id="TELCONTACT" name="TELCONTACT"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                <th style="width:10%;border:0px;">Personal email </th>
				<th style="width:15%;border:0px;"> <input type="text" id="PERSONALEMAIL" name="PERSONALEMAIL"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th> 
                
              </tr>
			  </table>         
              
              
               <table class="table-responsive" style="margin-top:-20px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:20%;border:0px;">Number of biological children and their ages </th>
				<th style="width:80%;border:0px;"> <input type="text" id="NOOFBIOCHILDREN" name="NOOFBIOCHILDREN"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
                
              </tr>
			  </table>         
              
                <table class="table-responsive" style="margin-top:-20px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:14%;border:0px;">Current residential location: </th> 
                <th style="width:6%;border:0px;">District </th>
				<th style="width:20%;border:0px;"> <input type="text" id="DISTRICT" name="DISTRICT" value="<?php  echo $DISTRICT; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>  
                
                <th style="width:10%;border:0px;">County </th>
				<th style="width:20%;border:0px;"> <input type="text" id="COUNTY" name="COUNTY"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                
                
                 <th style="width:10%;border:0px;">Sub county </th>
				<th style="width:20%;border:0px;"> <input type="text" id="SUBCOUNTY" name="SUBCOUNTY" value="<?php  echo $SUBCOUNTYDIVISIONLC3; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
			  </table>
                  
     
               <table class="table-responsive" style="margin-top:-25px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:14%;border:0px;"> </th> 
                <th style="width:6%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>  
                
                <th style="width:10%;border:0px;">Parish </th>
				<th style="width:20%;border:0px;"> <input type="text" id="PARISH" name="PARISH" value="<?php  echo $PARISHLC11; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                
                
                 <th style="width:10%;border:0px;">LC1 Village </th>
				<th style="width:20%;border:0px;"> <input type="text" id="LCVILLAGE" name="LCVILLAGE" value="<?php  echo $VILLAGELC1; ?>"
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>
              </tr>
			  </table> 
              <p></p>
               
              
              
              </div>
              <div id="form-wizard-2" class="step">
              
               <p style=" font-weight:bold; color:#000; font-size:11px;">A2.Terms of employment:</p> 
              <table class="table-responsive" style="margin-top:0px;">
              <table class="table" style="border:0px;">
              <tr> 
                <th style="width:20%;border:0px;">Terms of employment</th>
				<th style="width:50%;border:0px;"> 
                <input type="radio" id="username" name="EMPLOYMENTTERMS" value="">
                <label>Probation</label> 
                <input type="radio" id="username" name="EMPLOYMENTTERMS" value="">
                <label>Contract</label> 
                 <input type="radio" id="username" name="EMPLOYMENTTERMS" value="">
                <label>Temporary</label>  
                 </th> 
                 <th style="width:10%;border:0px;">Other (Specify) </th>
				 <th style="width:20%;border:0px;"> <input type="text" id="OTHERS" name="OTHERS"
				   style="width:100%; font-weight:normal; background-color:#fff;"> </th>   
              </tr>
			  </table> 
              
              <p style=" font-weight:bold; color:#000; font-size:12px;">
              A 3: New/ additional Academic & Professional Qualifications acquired and short term training courses attended during appraisal period</p>
              
    <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>
      <th>*</th>
       <th style="width:40%;">Award </th> 
       <th style="width:30%; text-align:center;">Institution</th>  
       <th style="width:15%; text-align:center;">From</th>
       <th style="width:15%; text-align:center;">To</th>  
           
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>    
     <input type="button" onClick="addRow16('mytable1')" value="Add" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
     <input type="submit" name="buttonsend" id="button" value="Proceed to section B" />          
               <br><br>
               
             <table class="table-responsive" style="margin-top:0px;">
               <table class="table" style="border:0px;">
              <tr> 
                <th style="width:14%;border:0px;"> </th> 
                <th style="width:6%;border:0px;"> </th>
				<th style="width:20%;border:0px;">   </th>  
                
                <th style="width:10%;border:0px;">Select appraisee account </th>
				<th style="width:20%;border:0px;"> <input type="text" id="APPRAISEEACCOUNT" name="APPRAISEEACCOUNT"  
				required=" " style="width:100%; font-weight:normal; background-color:#fff;"> </th>
                
                
                 <th style="width:10%;border:0px;">    </th>
				<th style="width:20%;border:0px;">  </th>
              </tr>
			  </table>   
              
              
              </div> 
              <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" />
                <div id="status"></div>
              </div>
              <div id="submitted"></div>
            </form>
             
                     
                     
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.wizard.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.wizard.js"></script> 
                  
                    
                      
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="infocts" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">   </h4>
                                        </div>
                                        <div class="modal-body"> 
              
             <div class="table-responsive mailbox-messages"> 
                     
                 
                 </div>    
                     
           <div class="col-sm-12">
           <div class="panel-body"> 
           
           
           </div>  </div>
                                        <div class="modal-footer" style="background-color:#fff; color:#ffffff;"> 
                                        <center> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                            
                                  
                       
                      
                      
                      
          </div>
          <!-- /.box -->
        </div>
          
        <!-- /.col -->
      </div>
       
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
       
    </div> 
    
      
 
<script src="../assets/lib/moment/moment.min.js"></script>
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
 <script type="text/javascript" src="../../assets/js/gauge.js"></script>
</body>
</html> 

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

     var  s1aa = '<input type="text" onKeyUp="domee(this)" name="AW[]" id="AW'+rowCount+'" required="required" '+ 
	             'style= "margin-left:0px'+ 'background-color:#fff; width:100%;">';
				 
	 var  s2bb = '<input type="text" name="IN[]" id="IN'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:center;" >';			 
 
 		 
	 var  s6ff = '<input type="date" name="FR[]" id="FR'+rowCount+'"  required="required" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';

     var  s7gg = '<input type="date" name="TO[]" id="TO'+rowCount+'" onkeyup="calcsubtt(\'mytable1\')" '+
                 'style= " margin-left:0px; width:100%; background-color:#fff;text-align:right;" >';
		 
      
	        var row      = table.insertRow(rowCount);
			var row2     = '<td><input type="checkbox" ></td>'+
	                              '<td>'+s1aa+' </td>'+
	                              '<td>'+s2bb+' </td>'+ 
								  '<td>'+s6ff+' </td>'+
				                  '<td>'+s7gg+' </td>';
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
		  table.rows[x].cells[1].childNodes[0].id="AW"+x;
		  table.rows[x].cells[2].childNodes[0].id="IN"+x; 
		  table.rows[x].cells[3].childNodes[0].id="FR"+x;
		  table.rows[x].cells[4].childNodes[0].id="TO"+x;
          }
           document.getElementById('mytable_rows1').value=rowCount-1;
		   calcsubtt(tableId);
}
  </script>
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
  
		 <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#SUPACCOUNT"+num).val(data[2]);
  $("#SUPERVISORNAME").val(data[2]);
  $("#SUPERVISORPOSITION").val(data[3]); 
  

}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "searchuser.php",
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
    border: 1px solid #fff;
    line-height: 1.0;
    padding: 2px;
    vertical-align: center;
	
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid #fff;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
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
    <a href="../sys_dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" font style=" font:bold 18px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;margin-top: 10px;">Dashboard</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #000;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
           <li class="active"><a href="../ahr/my_timesheet.php" class="" >My timesheet<span class="sr-only">(current)</span></a></li>  
            <li class="active"><a href="supervisor.php" class="" >Supervisor<span class="sr-only">(current)</span>&nbsp;
             <b style="color: red;"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
if ($result = mysqli_query($link, "SELECT id FROM timesheet WHERE SUPACCOUNT = '$rm' 
  AND CONFIRMATIONSTATUS = 'PENDING' GROUP BY id")) {  

    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?></b>
            </a></li>  
            <li class="active"><a href="myreviews.php" class="" > My reviews<span class="sr-only">(current)</span></a></li>

             <li class="active"><a href="manager.php" class="" > Manager <span class="sr-only">(current)</span>

             &nbsp;
             <b style="color: red;"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "ahr"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
if ($result = mysqli_query($link, "SELECT id FROM timesheet WHERE FORWARDTO = '$rm' AND CONFIRMATIONSTATUS = 'REVIEWED' AND APPROVALSTATUS = 'WAITING' GROUP BY id")) {  
 

    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?></b> </a></li> 
            <li class="active"><a href="myapprovals.php" class="" > My approvals<span class="sr-only">(current)</span></a></li> 
          
          </ul>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
         <li><a href="../logut.php"> <span class="glyphicon glyphicon-log-in"></span> Logout</li></a>
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
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
           
        <div class="pull-left image"> 
        </div> 
        <div class="pull-left info">
           
        </div>
      </div>
      <!-- search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" style="margin-top: -50px;">
        <li class="header" > </li> 
         <br>
     
	 <li> 
		  <?php require_once '_navigation.php'; ?> </li>
		  <br>
		  
		   <div style="float:center; width:100%;">
        <div id="nav"></div>  </div> 
		  
		 
		  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#fff;">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
	<div class="col-sm-1"> </div>
	
		 <div class="col-sm-10" style="border:1px solid #eee;"> 
		 
     <img src="../hrm_home/img/logsbigxt.PNG"  width="100%" height="100%"> 	 
		
		 
					 <p><center style="font-size:11px;">STAFF TIMESHEET</center></p>
					 <br>             
         
					 <form class="form-horizontal" action="timesheet_process.php" method="POST" > 
					<div class="col-sm-5" style="height:auto; ">
					
					 <table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">Employee name </th>
	 <th style="width:70%;border:0px;"> <input type="text"  id="EMPLOYEENAME" name="EMPLOYEENAME"    value="<?php echo $nameofuser; ?> "
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
   </tr>
   </thead> 
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-20px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">PF Number </th>
	 <th style="width:70%;border:0px;"> <input type="text"  id="IDNUMBER" name="IDNUMBER"  value="<?php echo $pf; ?> "
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
   </tr>
   </thead> 
 </tbody>
 </table>
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-20px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">Designation </th>
	 <th style="width:70%;border:0px;"> <input type="text"  id="EMPLOYEEPOSITION" name="EMPLOYEEPOSITION"  value="<?php echo $desc; ?> "
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
   </tr>
   </thead> 
 </tbody>
 </table>
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-20px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">Department </th>
	 <th style="width:70%;border:0px;"> <select name="DEPARTMENT" id="DEPARTMENT" value="<?php echo $dept; ?> "
				required="required"  style="width:100%; font-weight:normal; background-color:#FFF;"> 
                                <option><?php echo $dept; ?> </option>
                                <option>FINANCE AND ADMINISTRATION</option>
                                <option>ADVOCACY AND RESEARCH</option>
                                <option>SERVICE DELIVERY</option>
                                </select> </th>
                                
                                
                                
				</th> 
			   
   </tr>
   </thead> 
 </tbody>
 </table>
  
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-10px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">Supervisor email</th>
	 <th style="width:70%;border:0px;"> <input type="text" onKeyUp="domee(this)" id="SUPACCOUNT" name="SUPACCOUNT"
				required="required"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
   </tr>
   </thead> 
 </tbody>
 </table>
    
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-10px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">Supervisor name</th>
	 <th style="width:70%;border:0px;"> <input type="text" id="SUPERVISORNAME" name="SUPERVISORNAME"
		readonly="readonly"		required="required"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
   </tr>
   </thead> 
 </tbody>
 </table>
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-20px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">Position </th>
	 <th style="width:70%;border:0px;"> <input type="text"  name="SUPERVISORPOSITION" id="SUPERVISORPOSITION" 
			readonly="readonly"		required="required"   style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
   </tr>
   </thead> 
   
    <div id="res" style="border:2px solid;"> </div>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-10px; border:0px;"> 
   <thead>
   <tr>
   
     <th style="width:20%;border:0px;">Month</th>
	 <th style="width:30%;border:0px;"> <input type="text"  name="FISCALMONTH" id="FISCALMONTH"  value="<?php echo date('F'); ?>"   
	 required="required" style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			 
   <th style="width:20%;border:0px;">Year</th>
   <td style="width:30%;"><input type="text" name="FISCALYEAR" id="FISCALYEAR" value="<?php echo date("Y");?>" 
   required="required" 
   style="width:100%; text-align:left;background-color:#FFF;"></td>  
   </tr>
   </thead> 
 </tbody>
 </table>  
 
 <br> 
 
  <p style="font-weight:bold; text-align:left;"> Summary of days not worked</p>
  
   
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px;	stext-align:left;" width="100%">
		<thead> 
		<tr> 
         <th style="width:50%;">DESCRIPTION </th>
         <th style="width:20%;">SYMBOL</th>
         <th style="width:15%;">TOTAL</th>
		 <th style="width:15%; text-align:center;">%</th>
         </thead>
      <tbody>
      <tr>
        <th>Public holiday</th>
        <td style="text-align:center;"><input type="text" value="PH" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
        <td style="text-align:center;"> <input type="text" id="PH"  name="PH" readonly="readonly" 
		style="text-align:center; width:100%; background-color:white;"> </td>
		<td style="text-align:center;"> <input type="text" id="PHp"  name="PHp" readonly="readonly" 
		style="text-align:center; width:100%; background-color:white;"> </td>
		
    </tr>
    <tr>
    <tr>

        <th>Saturday and Sunday</th>
        <td style="text-align:center;"> <input type="text" value="W" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="W" name="W" readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
		  <td style="text-align:center;"> <input type="text" id="Wp" name="Wp" readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
        </tr>
    <tr>
    <tr>

        <th>Not worked</th>
        <td style="text-align:center;"> <input type="text" value="0" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="NW" name="NW" readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="NWp" name="NWp" readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
 </tr>
    <tr>
    <tr>
    
 <th>General Administration</th>
        <td style="text-align:center;"><input type="text" value="GA" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="GA" name="GA"  readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="GAp" name="GAp"  readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
    </tr>
    <tr>
    <tr>

        <th>Staff Development</th>
        <td style="text-align:center;"> <input type="text" value="SD" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
        <td style="text-align:center;"> <input type="text" id="SD" name="SD" readonly="readonly" 
		style="text-align:center; width:100%; background-color:white;"> </td>
		<td style="text-align:center;"> <input type="text" id="SDp" name="SDp" readonly="readonly" 
		style="text-align:center; width:100%; background-color:white;"> </td>
        </tr>
    <tr>
    <tr>

        <th>Sick Leave</th>
        <td style="text-align:center;"> <input type="text" value="SL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="SL" name="SL" readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="SLp" name="SLp" readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
</tr>
    <tr>
    <tr>  
        <th>Annual Leave</th>
        <td style="text-align:center;"><input type="text" value="AL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="AL" name="AL" readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="ALp" name="ALp" readonly="readonly" 
		 style="text-align:center; width:100%; background-color:white;"> </td>
    </tr>
    <tr>
    <tr>

        <th>Maternity leave</th>
        <td style="text-align:center;"><input type="text" value="ML" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        <td style="text-align:center;"> <input type="text" id="ML" name="ML" readonly="readonly" 
		style="text-align:center; width:100%; background-color:white;"> </td>
		<td style="text-align:center;"> <input type="text" id="MLp" name="MLp" readonly="readonly" 
		style="text-align:center; width:100%; background-color:white;"> </td>
        </tr>
		<tr>
    <tr>
 
       
        </tr>
     </tbody>
  </table> 
 </div>

					 
	<div class="col-sm-7" style="height:auto; ">
    <div class="progress"> 
            <div class="progress-bar progress-bar-success" style="width: 100%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;">
            <select name="monthpicker" id="monthpicker"   onchange="pickmonth(this.value)">
     <option>31</option>
	 <option>30</option>
	 <option>29</option>
	 <option>28</option>
     </select>	&nbsp; &nbsp; Select monthly number of days
            <span class="sr-only">10% Complete (danger)</span></div>
            </div>
            
	 
	  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px;	stext-align:left;" width="100%">
		<thead> 
		<tr>  
         <th style="text-align:center;">16 </th>
         <th style="text-align:center;">17</th>
         <th style="text-align:center;">18</th>
         <th style="text-align:center;">19 </th>
         <th style="text-align:center;">20</th>
         <th style="text-align:center;">21</th>
         <th style="text-align:center;">22 </th>
      </tr>
    </thead>
   <tbody>
      <tr>
          <td><select class="form-control" name="D16" id="D16" onChange="calcdays()" style="width:100%; margin-left: 5px; ">
      <option value="0">0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

        <td><select class="form-control" name="D17" onChange="calcdays()" id="D17"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
                                
       <td><select class="form-control"  onchange="calcdays()" name="D18" id="D18"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
                                
         <td><select class="form-control" onChange="calcdays()" name="D19" id="D19"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

       <td><select class="form-control" onChange="calcdays()" name="D20" id="D20"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
     <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

       <td><select class="form-control" onChange="calcdays()" name="D21" id="D21"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" onChange="calcdays()" name="D22" id="D22"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
       </td>
      </tr>
      <tr>
         <th style="text-align:center;">23</th>
         <th style="text-align:center;">24</th>
         <th style="text-align:center;">25 </th>
         <th style="text-align:center;">26</th>
         <th style="text-align:center;">27</th>
         <th style="text-align:center;">28 </th>
         <th style="text-align:center;">29</th>
      </tr>
      <tr>
          <td><select class="form-control" onChange="calcdays()" name="D23" id="D23"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
     <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" onChange="calcdays()" name="D24" id="D24"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" onChange="calcdays()" name="D25" id="D25"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" onChange="calcdays()" name="D26" id="D26"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" onChange="calcdays()" name="D27" id="D27"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

            <td><select class="form-control" onChange="calcdays()" name="D28" id="D28"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
     <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" onChange="calcdays()" name="D29" id="D29"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

      </tr>
      <tr>
         <th style="text-align:center;">30</th>
         <th style="text-align:center;">31 </th> 
         <th style="text-align:center;">1</th>
         <th style="text-align:center;">2</th>
         <th style="text-align:center;">3</th>
         <th style="text-align:center;">4 </th>
         <th style="text-align:center;">5</th>
      </tr>
       <tr>
         <td><select class="form-control" onChange="calcdays()" name="D30" id="D30"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
     <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

        <td><select class="form-control" onChange="calcdays()" name="D31" id="D31"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
        <td><select class="form-control" onChange="calcdays()" name="D1" id="D1"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
     <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

        <td><select class="form-control" onChange="calcdays()" name="D2" id="D2"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>


         <td><select class="form-control" onChange="calcdays()" name="D3" id="D3"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
     <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" onChange="calcdays()" name="D4" id="D4"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" onChange="calcdays()" name="D5" id="D5"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
        </tr>
      <tr>
         <th style="text-align:center;">6</th>
         <th style="text-align:center;">7 </th>
         <th style="text-align:center;">8</th>
         <th style="text-align:center;">9</th>
         <th style="text-align:center;">10 </th>
         <th style="text-align:center;">11</th>
         <th style="text-align:center;">12</th>
      </tr>
       <tr>
         <td><select class="form-control" onChange="calcdays()" name="D6" id="D6"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
           <td><select class="form-control" onChange="calcdays()" name="D7" id="D7"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
         <td><select class="form-control" onChange="calcdays()" name="D8" id="D8"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option> 
     <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" onChange="calcdays()" name="D9" id="D9"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" onChange="calcdays()" name="D10" id="D10"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>

      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

         <td><select class="form-control" onChange="calcdays()" name="D11" id="D11"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
      </td>

         <td><select class="form-control" onChange="calcdays()" name="D12" id="D12"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>
        
        </tr>
      <tr>
         <th style="text-align:center;">13 </th>
         <th style="text-align:center;">14</th>
         <th style="text-align:center;">15</th>
         <th style="text-align:center;> </th> 
         <th style="text-align:center;> </th>
         <th style="text-align:center;> </th>
         <th style="text-align:center;> </th>
      </tr>
       <tr>
        <td><select class="form-control" onChange="calcdays()" name="D13" id="D13"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
     <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

     <td><select class="form-control" onChange="calcdays()" name="D14" id="D14"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

     <td><select class="form-control" onChange="calcdays()" name="D15" id="D15"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>

      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="PH">PH</option> 
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

    
      </tr>
    </tbody>
  </table> 
   
     <br>
     <table class="table table-striped" style="margin-left: 0px; background-color: #fff; font-weight:normal;border:0px;">
         <thead>
         <th style="width:50%;text-align:center; border:0px;">Total hours </th>
         <th style="width:50%;text-align:center;border:0px;">Total %</th> 
         </thead>
      <tbody>
      <tr> 
        <td style="text-align:center;border:0px;"><input type="text" name="TOTALHOURS"  id="rsss"  value="00" readonly
		style="text-align:center; width:100%; background-color:white; font-size:40px;font-weight:normal;"></td>
		
        <td style="text-align:center;border:0px;"> <input type="text" name="PERCENTAGE"  id="resultssheet1" value="0.0%"
		readonly="readonly" style="text-align:center; width:100%; background-color:white;font-size:40px;font-weight:normal;"> </td>
    </tr>  
     </tbody>
  </table>
   <br>
  <table class="table table-striped" style="margin-left: 0px; background-color: #fff; font-weight:normal;border:0px;">
         <thead>
         <th style="width:50%;text-align:center; border:0px;">Days worked </th>
         <th style="width:50%;text-align:center;border:0px;">Percentage</th> 
         </thead>
      <tbody>
      <tr> 
        <td style="text-align:center;border:0px;"><input type="text" id="WDD" name="WDD" value="00" readonly="readonly" 
		style="text-align:center; width:100%; background-color:white; font-size:40px;font-weight:normal;"></td>
		
        <td style="text-align:center;border:0px;"> <input type="text" id="WDDp"  name="WDDp" value="0.0%" 
		readonly="readonly" style="text-align:center; width:100%; background-color:white;font-size:40px;font-weight:normal;"> </td>
    </tr>  
     </tbody>
  </table>   
	 
   </div>   
    
   <div class="col-sm-12"></div>  
   <br> 
   <div class="col-sm-4" style="font-weight:normal;"><br>
	 <table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
   <th>Supervisor's comment</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:30%;"> <textarea name="SUP_COMMENT" readonly="readonly"  
   style="width:100%; text-align:left;background-color:#f0f0f0;height: 49px;">   
				</textarea> </th>    			
   </tr>
  <tr>
 </tbody>
 </table>
	</div>
	
	<div class="col-sm-4" style="font-weight:normal;"><br>
	<table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">Admin name </th>
	 <th style="width:70%;border:0px;"> <input type="text"  id="ADMINNAME" name="ADMINNAME"    
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th>  
   </tr>
   </thead> 
 </tbody>
 </table>
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-20px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">Designation</th>
	 <th style="width:70%;border:0px;"> <input type="text"  id="ADMINPOSITION" name="ADMINPOSITION"    
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
   </tr>
   </thead> 
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-20px; ">
   <thead>
   <tr>
   
     <th style="width:30%;border:0px;">Date </th>
	 <th style="width:70%;border:0px;"> <input type="text"  id="ADMINDATE" name="ADMINDATE"   
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
   </tr>
   </thead> 
 </tbody>
 </table>
	</div>
	<div class="col-sm-4" style="font-weight:normal;"><br>
	     <table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr> 
    <th> Comment</th>
   </tr>
   </thead>
   <tbody>
   <tr>  
	 <td style="width:30%;"> <textarea name="ADMIN_COMMENT" readonly="readonly"  
	 style="width:100%; text-align:left;background-color:#f0f0f0;height: 49px;">   
				</textarea> </th>  			
   </tr>
  <tr>
 </tbody>
 </table>
	</div> 
      
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:0px;	stext-align:left;" width="100%">
		<thead> 
		<tr> 
        <th style="border:0px;"> <center> <input type="submit" name="button" id="button" value="Save" /></center></th> 
			  
			 </tr>             
            </table>
          <br> 
		
		 </form>
         </div> 
         
         
          <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="fukdead" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                             <h4 class="modal-title" id="myModalLabel" 
                                            style=" font:bold 20px 'Aleo'; text-shadow:1px 1px 3px #000; color:#fff; text-align:center;">
                                            Appraisals tracker</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
    <form class="form-horizontal" action="" method="POST" style="height:auto; font-weight:normal;">  
              
             <div class="table-responsive mailbox-messages"> 
               
             <table id="appraistk" class="table table-table table-tabled" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                  <th style="font-size:10px;">EMPLOYEE NAME</th>
                  <th style="font-size:10px;">PF NUMBER</th>
                  <th style="font-size:10px;">APPRAISAL PERIOD</th>
                  <th style="font-size:10px;">STATUS</th> 
                   <th style="font-size:10px;">PROGRESS</th> 
                  <th style="font-size:10px;">DATE</th> 
                  <th style="font-size:10px;">DEADLINE FOR SUBMISSION</th>
                  <th style="font-size:10px;">ACTION</th>
                 </tr>
        </thead>
        <tfoot>
          <tr>
                  <th style="font-size:10px;">EMPLOYEE NAME</th>
                  <th style="font-size:10px;">PF NUMBER</th>
                  <th style="font-size:10px;">APPRAISAL PERIOD</th>
                  <th style="font-size:10px;">STATUS</th> 
                  <th style="font-size:10px;">PROGRESS</th> 
                  <th style="font-size:10px;">DATE</th> 
                  <th style="font-size:10px;">DEADLINE FOR SUBMISSION</th>
                  <th style="font-size:10px;">ACTION</th>
            </tr>
        </tfoot>
        <tbody>

             <?php
             include_once("hrm_home/config_ahr.php");

             $result = mysqli_query($mysqli, "SELECT * FROM staffcontacts WHERE APPRAISALELIGIBILITY='Active' AND APPRAISALCOUNT = '0' GROUP BY id");

             while($res = mysqli_fetch_array($result)) {
             $dtsxTc = $res['id']."***".$res['STAFFAPPRAISALID'];

              echo "<tr>"; 
			
			  echo "<td>".$res['FIRSTNAME']." ".$res['LASTNAME']." ".$res['OTHERNAME']." </td>";
			  echo "<td>".$res['PFNUMBER']."</td>"; 
			  echo "<td>".$res['APPRAISALMONTH']." ".$res['APPRAISALMONTHYEAR']."</td>";
			  echo "<td>".$res['APPRAISALSTATUS']."</td>";
			  echo "<td>".$res['APPRAISALPROGRESSLEVEL']."</td>";
			  echo "<td>".$res['PROGRESSDATE']."</td>"; 
			  echo "<td>".$res['APPRAISALSUBMISSIONDEADLINE']."</td>"; 
			  echo "<td><a href=\"hrm_home/appraisal.php?STAFFAPPRAISALID=$res[STAFFAPPRAISALID]\">View appraisal</a>  </td>";		 
	            }
               ?>
             </tbody>
             </table>
                </form> 
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
                      
         
		 
		 <script> 
		 var daysinmonth =31;
	function pickmonth(val){
		daysinmonth = parseInt(val);
		for(var x1 =28; x1<=31;x1++){
			var idx ="D"+(x1);
		   document.getElementById(idx).style.visibility = 'visible';
		}
		for(var x =daysinmonth+1; x<=31;x++){
			var id ="D"+(x);
		   document.getElementById(id).style.visibility = 'hidden';
		}
		
	}	 
		 
     function calcdays(){
	   var idds =0,sum=0; var hols = [0,0,0,0,0,0,0,0,0];
	   for(idds=0;idds<daysinmonth;idds++){
		   var id ="D"+(idds+1);
		   var valu = document.getElementById(id).value;
		        if(valu=='PH'){ hols[0] = hols[0]+1; valu='8';}
		   else if(valu=='W') { hols[1] = hols[1]+1; valu='8';}
		   else if(valu=='GA'){ hols[2] = hols[2]+1; valu='8';}
		   else if(valu=='SD'){ hols[3] = hols[3]+1; valu='8';}
		   else if(valu=='SL'){ hols[4] = hols[4]+1; valu='8';}
		   else if(valu=='AL'){ hols[5] = hols[5]+1; valu='8';}
		   else if(valu=='ML'){ hols[6] = hols[6]+1; valu='8';}
		   else{
			   if(parseInt(valu)==0){ hols[8] = hols[8]+1;}
			    else{ hols[7] = hols[7]+1;}
		   }
		   sum = sum + parseInt(valu); 
	   }
	   document.getElementById('rsss').value = ""+sum; 
	   document.getElementById('resultssheet1').value= ''+((sum/(daysinmonth*8))*100);
	   document.getElementById('WDD').value = hols[7];
	   document.getElementById('WDDp').value = ((hols[7]*100)/(daysinmonth-(hols[0]+hols[1]+hols[2]+hols[3]+hols[4]+hols[5]+hols[6])));
	  // alert(sum);
	   $("#PH").val(hols[0]); $("#PHp").val(100*(hols[0]/daysinmonth));
	   $("#W").val(hols[1]); $("#Wp").val(100*(hols[1]/daysinmonth));
	   $("#GA").val(hols[2]); $("#GAp").val(100*(hols[2]/daysinmonth));
	   $("#SD").val(hols[3]); $("#SDp").val(100*(hols[3]/daysinmonth));
	   $("#SL").val(hols[4]); $("#SLp").val(100*(hols[4]/daysinmonth));
	   $("#AL").val(hols[5]); $("#ALp").val(100*(hols[5]/daysinmonth));
	   $("#ML").val(hols[6]); $("#MLp").val(100*(hols[6]/daysinmonth));
	   $("#NW").val(hols[8]); $("#NWp").val(100*(hols[8]/daysinmonth));
	   	   
   }
	  </script>
					
                </div>

            </div>
			
			
	 <script>
 
          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'monthlytimes.php',
                       success : function(data){
                                $('#monthlytimes').html(data);
                                 }
               });
               }, 2000);  

          </script>		
			
			
        </div>
      </div></div>
			 

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/daypilot/daypilot-all.min.js"></script>

        <script>
            var nav = new DayPilot.Navigator("nav");
            nav.selectMode = "week";
            nav.showMonths = 3;
            nav.skipMonths = 3;
            nav.onTimeRangeSelected = function(args) {
                 loadEvents(args.start.firstDayOfWeek(), args.start.addDays(7));
            };
            nav.init();

            var calendar = new DayPilot.Calendar("calendar");
            calendar.viewType = "Week";
            calendar.timeRangeSelectedHandling = "Disabled";
            calendar.eventMoveHandling = "Disabled";
            calendar.eventResizeHandling = "Disabled";
            calendar.onBeforeEventRender = function(args) {
                if (!args.data.tags) {
                    return;
                }
                switch (args.data.tags.status) {
                    case "free":
                        args.data.barColor = "green";
                        args.data.html = "Available<br/>" + args.data.tags.doctor;
                        args.data.toolTip = "Click to request this time slot";
                        break;
                    case "waiting":
                        args.data.barColor = "orange";
                        args.data.html = "Your appointment, waiting for confirmation";
                        break;
                    case "confirmed":
                        args.data.barColor = "#f41616";  // red
                        args.data.html = "Your appointment, confirmed";
                        break;
                }
            };
            calendar.onEventClick = function(args) {
                if (args.e.tag("status") !== "free") {
                    calendar.message("You can only request a new appointment in a free slot.");
                    return;

                }

                var modal = new DayPilot.Modal({
                    onClosed: function(args) {
                        if (args.result) {  // args.result is empty when modal is closed without submitting
                            loadEvents();
                        }
                    }
                });

                modal.showUrl("appointment_request.php?id=" + args.e.id());
            };
            calendar.init();

            loadEvents();

            function loadEvents(day) {
                var start = nav.visibleStart() > new DayPilot.Date() ? nav.visibleStart() : new DayPilot.Date();

                var params = {
                    start: start.toString(),
                    end: nav.visibleEnd().toString()
                };

                $.post("backend_events_free.php", JSON.stringify(params), function(data) {
                    if (day) {
                        calendar.startDate = day;
                    }
                    calendar.events.list = data;
                    calendar.update();

                    nav.events.list = data;
                    nav.update();

                });
            }
        </script>

		 
  <!----/-----start models----------> 
                   
  </div> 
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
   
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 --> 

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
</body> 
</html> 
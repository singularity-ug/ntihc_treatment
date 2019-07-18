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
$connect = new mysqli("localhost", "root", "", "ahr");
$stss ="";
if( $result = $connect->query("SELECT * FROM user_table WHERE authorizationrights = 'GRANTED' "))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['Email'] ." </option>";   }
  }
$connect->close();
?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title> </title>

        <link type="text/css" rel="stylesheet" href="css/layout.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
		<link rel="stylesheet" href="cssbootstrap.css">
        <!-- DayPilot library -->
        <script src="js/daypilot/daypilot-all.min.js"></script>
		<script src="js/jquery-1.9.1.min"></script> 
	 
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

    </head>
    <body>
        <?php require_once '_header.php'; ?>

        <div class="main">
            <?php require_once '_navigation.php'; ?>

            <div>

                <div style="float:left; width:160px">
                    <div id="nav"></div>
                </div>
                <div style="margin-left: 160px"> 
					  
					 <div class="col-sm-12">
					 <form class="form-horizontal" action="timesheet_process.php" method="POST" > 
					<div class="col-sm-4" style="height:auto; ">
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
	 <th style="width:70%;border:0px;"> <select name="DEPARTMENT"id="DEPARTMENT value="<?php echo $dept; ?> "
				required="required"  style="width:100%; font-weight:normal; background-color:#FFF;"> 
                <option value="-1"> </option>
                                <option>FINANCE AND ADMINISTRATION</option>
                                <option>ADVOCACY AND RESEARCH</option>
                                <option>SERVICE DELIVERY</option>
                                </select></td>
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
	 <th style="width:30%;border:0px;"> <input type="text"  name="FISCALMONTH" id="FISCALMONTH"  value="<?php echo date("m");?>"   
	 required="required" style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			 
   <th style="width:20%;border:0px;">Year</th>
   <td style="width:30%;"><input type="text" name="FISCALYEAR" id="FISCALYEAR" value="<?php echo date("Y");?>" 
   required="required" 
   style="width:100%; text-align:left;background-color:#FFF;"></td>  
   </tr>
   </thead> 
 </tbody>
 </table>    
 </div>

					 
	<div class="col-sm-4" style="height:auto; ">
					
	<table class="table table-striped" style="margin-left: 0px; background-color: #fff;"> 
    <thead>
      <tr style="text-align:center;">
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
          <td><select class="form-control" name="D16" id="D16" onchange="calcdays()" style="width:100%; margin-left: 5px; ">
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

        <td><select class="form-control" name="D17" onchange="calcdays()" id="D17"  style="width:100%; margin-left: 5px; ">
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
                                
         <td><select class="form-control" onchange="calcdays()" name="D19" id="D19"  style="width:100%; margin-left: 5px; ">
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

       <td><select class="form-control" onchange="calcdays()" name="D20" id="D20"  style="width:100%; margin-left: 5px; ">
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

       <td><select class="form-control" onchange="calcdays()" name="D21" id="D21"  style="width:100%; margin-left: 5px; ">
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

         <td><select class="form-control" onchange="calcdays()" name="D22" id="D22"  style="width:100%; margin-left: 5px; ">
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
          <td><select class="form-control" onchange="calcdays()" name="D23" id="D23"  style="width:100%; margin-left: 5px; ">
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

          <td><select class="form-control" onchange="calcdays()" name="D24" id="D24"  style="width:100%; margin-left: 5px; ">
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

          <td><select class="form-control" onchange="calcdays()" name="D25" id="D25"  style="width:100%; margin-left: 5px; ">
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

          <td><select class="form-control" onchange="calcdays()" name="D26" id="D26"  style="width:100%; margin-left: 5px; ">
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

         <td><select class="form-control" onchange="calcdays()" name="D27" id="D27"  style="width:100%; margin-left: 5px; ">
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

            <td><select class="form-control" onchange="calcdays()" name="D28" id="D28"  style="width:100%; margin-left: 5px; ">
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

         <td><select class="form-control" onchange="calcdays()" name="D29" id="D29"  style="width:100%; margin-left: 5px; ">
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
         <td><select class="form-control" onchange="calcdays()" name="D30" id="D30"  style="width:100%; margin-left: 5px; ">
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

        <td><select class="form-control" onchange="calcdays()" name="D31" id="D31"  style="width:100%; margin-left: 5px; ">
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
        <td><select class="form-control" onchange="calcdays()" name="D1" id="D1"  style="width:100%; margin-left: 5px; ">
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

        <td><select class="form-control" onchange="calcdays()" name="D2" id="D2"  style="width:100%; margin-left: 5px; ">
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

         <td><select class="form-control" onchange="calcdays()" name="D3" id="D3"  style="width:100%; margin-left: 5px; ">
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

          <td><select class="form-control" onchange="calcdays()" name="D4" id="D4"  style="width:100%; margin-left: 5px; ">
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

          <td><select class="form-control" onchange="calcdays()" name="D5" id="D5"  style="width:100%; margin-left: 5px; ">
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
         <td><select class="form-control" onchange="calcdays()" name="D6" id="D6"  style="width:100%; margin-left: 5px; ">
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
           <td><select class="form-control" onchange="calcdays()" name="D7" id="D7"  style="width:100%; margin-left: 5px; ">
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
         <td><select class="form-control" onchange="calcdays()" name="D8" id="D8"  style="width:100%; margin-left: 5px; ">
      <option value="0"> 0 </option>
      <option value="1">1 </option>
      <option value="2">2 </option>
      <option value="3">3 </option>
      <option value="4">4 </option>
      <option value="5">5 </option>
      <option value="6">6 </option>
      <option value="7">7 </option>
      <option value="8">8 </option>
      <option value="8">PH</option>
     <option value="PH">PH</option>
      <option value="W">W </option>
      <option value="GA">GA</option>
      <option value="SD">SD </option>
      <option value="SL">SL</option>
      <option value="AL">AL </option> 
      <option value="ML">ML </option> 
          </select>
                                </td>

          <td><select class="form-control" onchange="calcdays()" name="D9" id="D9"  style="width:100%; margin-left: 5px; ">
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

         <td><select class="form-control" onchange="calcdays()" name="D10" id="D10"  style="width:100%; margin-left: 5px; ">
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

         <td><select class="form-control" onchange="calcdays()" name="D11" id="D11"  style="width:100%; margin-left: 5px; ">
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

         <td><select class="form-control" onchange="calcdays()" name="D12" id="D12"  style="width:100%; margin-left: 5px; ">
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
        <td><select class="form-control" onchange="calcdays()" name="D13" id="D13"  style="width:100%; margin-left: 5px; ">
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

     <td><select class="form-control" onchange="calcdays()" name="D14" id="D14"  style="width:100%; margin-left: 5px; ">
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

     <td><select class="form-control" onchange="calcdays()" name="D15" id="D15"  style="width:100%; margin-left: 5px; ">
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

     <td> </td>
     <td> </td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table> 
  </div>  
    
   
   <div class="col-sm-4">
   
                <ul class="nav nav-pills nav-stacked"> 
                <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#imprex"></button></i> My imprest requesitions<span 
                class="label label-warning pull-right">
                <?php
$link = mysqli_connect("localhost", "root", "", "dbmultiple");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT ORDERNO FROM imprest WHERE  AUTHACTION ='AUTHORISED'  GROUP BY ORDERNO")) {        
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   </span></a>  
                
                 <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#imprexnotificationModal"></button></i> 
				 Travel advance requests<span class="label label-warning pull-right">0</span></a> 

				 <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#imprexnotificationModal"></button></i> 
				 Travel advance requests<span class="label label-warning pull-right">0</span></a> 

                 
				 <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#imprexnotificationModal"></button></i> 
				 Travel advance requests<span class="label label-warning pull-right">0</span></a> 

                 
				 <li><a href=<button class="fa fa-envelope-o" data-toggle="modal"  data-target="#imprexnotificationModal"></button></i> 
				 Travel advance requests<span class="label label-warning pull-right">0</span></a> 
  				 
              </ul>
  
  </div></div> 
  
  <div class="col-sm-12">
   
   <div id="work" style="width:100%; ">   
  <div class="col-sm-4" style="font-weight:normal;background-color: #;">
  <p style="font-weight:bold; text-align:left;"> Summary of days not worked</p>
  
   
  <table class="table table-striped" style="margin-left: 0px; background-color: #fff; font-weight:normal;">
         <thead>
         <th style="width:60%;">DESCRIPTION </th>
         <th style="width:20%;">SYMBOL</th>
         <th style="width:20%;">TOTAL</th>
         </thead>
      <tbody>
      <tr>
        <th>Public holiday</th>
        <td style="text-align:center;"><input type="text" value="PH" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
        <td style="text-align:center;"> <input type="text" id="PH"  name="PH" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
    </tr>
    <tr>
    <tr>

        <th>Saturday and Sunday</th>
        <td style="text-align:center;"> <input type="text" value="W" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="W" name="W" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        </tr>
    <tr>
    <tr>

        <th>Not worked</th>
        <td style="text-align:center;"> <input type="text" value="0" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="NW" name="NW" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
 </tr>
    <tr>
    <tr>
    
 <th>General Administration</th>
        <td style="text-align:center;"><input type="text" value="GA" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="GA" name="GA"  readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
    </tr>
    <tr>
    <tr>

        <th>Staff Development</th>
        <td style="text-align:center;"> <input type="text" value="SD" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
        <td style="text-align:center;"> <input type="text" id="SD" name="SD" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        </tr>
    <tr>
    <tr>

        <th>Sick Leave</th>
        <td style="text-align:center;"> <input type="text" value="SL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="SL" name="SL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
</tr>
    <tr>
    <tr>  
        <th>Annual Leave</th>
        <td style="text-align:center;"><input type="text" value="AL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="AL" name="AL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
    </tr>
    <tr>
    <tr>

        <th>Maternity leave</th>
        <td style="text-align:center;"><input type="text" value="ML" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        <td style="text-align:center;"> <input type="text" id="ML" name="ML" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        </tr>
     </tbody>
  </table>
  </div> 
    
  <div class="col-sm-4">
 <p style="font-weight:bold; text-align:center; "> Total hours</p> 
  <p style="text-align:center; font-family:lcd; font-size:120px;" id="resultssheet">
   000
   </p>  
      
   <input type="hidden" name="TOTALHOURS"  id="resultssheet" value="3"/>
       
     
   </div> </div>     
  
 <div class="col-sm-4" > 
 
  <div id="dialog-window">
  <div id="scrollable-content"> 
   <ul>
                               <div class=""  id="monthlytimes" style="margin-left: -41px;"></div>
                                </div> 
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div> 
 
<style>
#dialog-window {
  height: 227px;
  border: 0px black solid;
  border-radius:7px;
}

#scrollable-content {
  height: 227px;
  overflow: auto;
  background-color: transparent;
}

#footer {
  height: 0px; 
}
</style>	  
   
  </div></div>
	
   <div id="work" style="width:100%; "> 
   <div class="col-sm-12">
   
   <div class="col-sm-4" style="font-weight:normal;">
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
	
	<div class="col-sm-4" style="font-weight:normal;">
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
	<div class="col-sm-4" style="font-weight:normal;">
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
	</div></div>
      
        <center> <input type="submit" name="button" id="button" value="Save" /></center>
		 </form>
         </div> 
		 
		 <script> 
     function calcdays(){
	   var idds =0,sum=0; var hols = [0,0,0,0,0,0,0];
	   for(idds=0;idds<31;idds++){
		   var id ="D"+(idds+1);
		   var valu = document.getElementById(id).value;
		        if(valu=='PH'){ hols[0] = hols[0]+1; valu='8';}
		   else if(valu=='W') { hols[1] = hols[1]+1; valu='8';}
		   else if(valu=='GA'){ hols[2] = hols[2]+1; valu='8';}
		   else if(valu=='SD'){ hols[3] = hols[3]+1; valu='8';}
		   else if(valu=='SL'){ hols[4] = hols[4]+1; valu='8';}
		   else if(valu=='AL'){ hols[5] = hols[5]+1; valu='8';}
		   else if(valu=='ML'){ hols[6] = hols[6]+1; valu='8';}
		   else{}
		   sum = sum + parseInt(valu); 
	   }
	   $("#PH").val(hols[0]);
	   $("#W").val(hols[1]);
	   $("#GA").val(hols[2]);
	   $("#SD").val(hols[3]);
	   $("#SL").val(hols[4]);
	   $("#AL").val(hols[5]);
	   $("#ML").val(hols[6]);
	   document.getElementById('resultssheet').innerHTML = ""+sum; 
	   
   }
	  </script>
					
                </div>

            </div>
			
			
			
			
			
        </div>

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
    </body>
</html>

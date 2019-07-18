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
  $id = $_GET['id'];
  $IDNUMBER = '';
  $TIMESTAMP = '';
  $FISCALMONTH = '';
  $FISCALYEAR = '';
  $EMPLOYEENAME  = '';
  $EMPLOYEEPOSITION = '';
  $DEPARTMENT = '';
  $SUPACCOUNT = '';  
  $SUPERVISORNAME = ''; 
  $SUPERVISORPOSITION=''; 
  $TOTALHOURS='';$PERCENTAGE='';
  $D16=''; $D17=''; $D18=''; $D19=''; $D20=''; $D21=''; $D22=''; $D23=''; 
  $D24=''; $D25=''; $D26=''; $D27=''; $D28=''; $D29=''; $D30=''; $D31='';
  $D1=''; $D2=''; $D3=''; $D4=''; $D5=''; $D6=''; $D7=''; $D8=''; $D9='';
  $D10=''; $D11=''; $D12=''; $D13=''; $D14=''; $D15=''; 
  $D10='';
  $WDD='';$WDDp='';
  $PH=''; $W=''; $NW=''; $GA=''; $SD=''; $SL='';   $AL=''; $ML='';   
  $PHp=''; $Wp=''; $NWp=''; $GAp=''; $SDp=''; $SLp='';   $ALp=''; $MLp='';  
  $ADMIN_COMMENT='';
  $ADMINDATE='';
  $ADMINPOSITION='';
  $ADMINNAME=''; 

 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "ahr";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM timesheet  WHERE `id` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){

     $IDNUMBER  = $row['IDNUMBER']; 
     $TIMESTAMP = $row['TIMESTAMP'];
     $FISCALMONTH  = $row['FISCALMONTH'];
     $FISCALYEAR = $row['FISCALYEAR'];
     $EMPLOYEENAME = $row['EMPLOYEENAME'];
     $EMPLOYEEPOSITION = $row['EMPLOYEEPOSITION'];
     $DEPARTMENT = $row['DEPARTMENT'];  
     $SUPACCOUNT = $row['SUPACCOUNT']; 
     $SUPERVISORNAME = $row['SUPERVISORNAME'];
     $SUPERVISORPOSITION   = $row['SUPERVISORPOSITION'];
     $TOTALHOURS = $row['TOTALHOURS']; 
	 $D16   = $row['D16']; $D17 = $row['D17'];  $D18 = $row['D18'];  $D19 = $row['D19'];  $D20 = $row['D20']; 
     $D21 = $row['D21'];  $D22 = $row['D22'];  $D23 = $row['D23']; $D24 = $row['D24']; $D25 = $row['D25']; 
	 $D26 = $row['D26']; $D27 = $row['D27']; $D28 = $row['D28']; $D29 = $row['D29']; $D30 = $row['D30']; 
	 $D31 = $row['D31']; $D1 = $row['D1']; $D2 = $row['D2']; $D3 = $row['D3']; $D4 = $row['D4']; 
	 $D5 = $row['D5']; $D6 = $row['D6']; $D7 = $row['D7']; $D8 = $row['D8']; $D9 = $row['D9']; 
	 $D10 = $row['D10']; $D11 = $row['D11']; $D12 = $row['D12']; $D13 = $row['D13']; 
	 $D14 = $row['D14'];  $D15 = $row['D15'];
	 $PERCENTAGE = $row['PERCENTAGE'];
	 $WDD = $row['WDD']; 
	 $WDDp = $row['WDDp']; 
	 $PH = $row['PH'];  $W = $row['W'];    $PHp = $row['PHp'];  $Wp = $row['Wp'];
	 $NW = $row['NW'];  $GA = $row['GA'];  $NWp = $row['NWp'];  $GAp = $row['GAp'];
	 $SD = $row['SD'];  $SL = $row['SL'];  $SDp = $row['SDp'];  $SLp = $row['SLp'];
	 $AL = $row['AL'];  $ML = $row['ML'];  $ALp = $row['ALp'];  $MLp = $row['MLp'];
     $ADMIN_COMMENT = $row['ADMIN_COMMENT']; 
	 $ADMINDATE = $row['ADMINDATE'];
	 $ADMINPOSITION = $row['ADMINPOSITION'];
	 $ADMINNAME = $row['ADMINNAME'];
	     
      }

  ?> 
 
 
   
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>.</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../admin/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../jvectormap/jquery-jvectormap-1.2.2.css"> 

 
  
<style>
h9 {
    border-bottom: 1px solid #fff;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 1px solid #fff;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #fff;;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #fff;
    line-height: 1.0;
    padding: 1px;
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
             	 font-size: 12px;
             	 color:#000000;
				 background-color: #fff;
             }
             table tr:nth-child(odd) {
             background:#ffffff;
             }
             table tr:nth-child(even) {
             background:#ffffff;
             }

</style>
 
  
  
</head>
<body onLoad="window.print();">
<div class="wrapper" >
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12"> 
                                         <div class="modal-body">   
 
        <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">  
 
         <form class="form-horizontal" action="" method="POST">
               <center> <p style="font-weight:bold; font-size:19px; font-family:lcd;"> STAFF TIMESHEET </p> </center>  
          <br>
		  <form class="form-horizontal" action="timesheet_process.php" method="POST" >  
		  
			 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:0px;">
   <thead>
   <tr> 
     <th style="width:20%;border:0px;">Employee name </th>
	 <th style="width:27%;border:0px;"> <input type="text"  id="EMPLOYEENAME" name="EMPLOYEENAME" value="<?php echo $EMPLOYEENAME; ?> "
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
				 <th style="width:6%;border:0px;"></th>
	 <th style="width:20%;border:0px;">Supervisor name</th>
	 <th style="width:27%;border:0px;"> <input type="text" id="SUPERVISORNAME" name="SUPERVISORNAME" value="<?php echo $SUPERVISORNAME; ?> "
		readonly="readonly"		required="required"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   			
			   
   </tr>
   </thead> 
 </tbody>
 </table>
 
  <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   
     <th style="width:20%;border:0px;">PF Number </th>
	 <th style="width:27%;border:0px;"> <input type="text"  id="IDNUMBER" name="IDNUMBER"  value="<?php echo $IDNUMBER; ?> "
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			    <th style="width:6%;border:0px;"></th>
	 <th style="width:20%;border:0px;">Position </th>
	 <th style="width:27%;border:0px;"> <input type="text"  name="SUPERVISORPOSITION" id="SUPERVISORPOSITION" value="<?php echo $SUPERVISORPOSITION; ?> "
			readonly="readonly"		required="required"   style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   		   
   </tr>
   </thead> 
 </tbody>
 </table>
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
   
     <th style="width:20%;border:0px;">Designation </th>
	 <th style="width:27%;border:0px;"> <input type="text"  id="EMPLOYEEPOSITION" name="EMPLOYEEPOSITION" value="<?php echo $EMPLOYEEPOSITION; ?> "
				readonly="readonly"  style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			   
		 <th style="width:6%;border:0px;"></th>	   
		<th style="width:20%;border:0px;"></th>
		<th style="width:27%;border:0px;"></th>	   
   </tr>
   </thead> 
 </tbody>
 </table>
 
 
 <table class="table table-striped" style="background-color:#ffffff; margin-top:-23px; ">
   <thead>
   <tr>
    
     <th style="width:20%;border:0px;">Department </th>
	 <th style="width:27%;border:0px;"> <input type="text" name="DEPARTMENT"id="DEPARTMENT" value="<?php echo $DEPARTMENT; ?> " 
				required="required"  style="width:100%; font-weight:normal; background-color:#FFF;">  </td>
				 </th> 
				 <th style="width:6%;border:0px;">
                 </th>
				 
		<th style="width:8.5%;border:0px;">Month</th>
	 <th style="width:15%;border:0px;"> <input type="text"  name="FISCALMONTH" id="FISCALMONTH"  value="<?php echo $FISCALMONTH; ?> "
	 required="required" style="width:100%; font-weight:normal; background-color:#FFF;border:0px;">  </th> 
	 
	  <th style="width:8.5%;border:0px;">Year</th>
   <td style="width:15%;border:0px;"><input type="text" name="FISCALYEAR" id="FISCALYEAR" value="<?php echo $FISCALYEAR; ?> " 
   required="required" 
   style="width:100%; text-align:left;background-color:#FFF;border:0px;"></td>  
   </tr>
   </thead> 
 </tbody>
</table>  
					
 <table class="table-responsive">
            <table class="table-table-bordered">
   <thead>
   <tr>				 
         <th style="text-align:center;">16 </th>
         <th style="text-align:center;">17</th>
         <th style="text-align:center;">18</th>
         <th style="text-align:center;">19 </th>
         <th style="text-align:center;">20</th>
         <th style="text-align:center;">21</th>
         <th style="text-align:center;">22 </th> 
         <th style="text-align:center;">23</th>
         <th style="text-align:center;">24</th>
         <th style="text-align:center;">25 </th>
         <th style="text-align:center;">26</th>
         <th style="text-align:center;">27</th>
         <th style="text-align:center;">28 </th>
         <th style="text-align:center;">29</th>  
         <th style="text-align:center;">30</th>
         <th style="text-align:center;">31 </th>   
      </tr>
   
      <tr>
       <td><input type="text" class="form-control" name="D16" id="D16"  onchange="calcdays()"
	   value="<?php echo $D16; ?> " style="width:100%; text-align:center; color:blue; font-weight:bold; "> 
            </td>

        <td><input type="text" class="form-control" name="D17" id="D17"  onchange="calcdays()" 
		value="<?php echo $D17; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
                                
       <td><input type="text" class="form-control"  onchange="calcdays()" name="D18" id="D18" 
	  value="<?php echo $D18; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
                                
         <td><input type="text" class="form-control" onChange="calcdays()" name="D19" id="D19"  
		value="<?php echo $D19; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

       <td><input type="text" class="form-control" onChange="calcdays()" name="D20" id="D20"  
	  value="<?php echo $D20; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

       <td><input type="text" class="form-control" onChange="calcdays()" name="D21" id="D21"  
	   value="<?php echo $D21; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D22" id="D22"  
		 value="<?php echo $D22; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
          </td>
      
          <td><input type="text" class="form-control" onChange="calcdays()" name="D23" id="D23"  
		  value="<?php echo $D23; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D24" id="D24"  
		  value="<?php echo $D24; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D25" id="D25" 
		 value="<?php echo $D25; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D26" id="D26" 
		 value="<?php echo $D26; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D27" id="D27"  
		 value="<?php echo $D27; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

            <td><input type="text" class="form-control" onChange="calcdays()" name="D28" id="D28"  
			value="<?php echo $D28; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D29" id="D29"  
		 value="<?php echo $D29; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
          <td><input type="text" class="form-control" onChange="calcdays()" name="D30" id="D30"  
		 value="<?php echo $D30; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

        <td><input type="text" class="form-control" onChange="calcdays()" name="D31" id="D31"  
		value="<?php echo $D31; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td> 
      </tr>
      <tr>
         <th style="text-align:center;">1</th>
         <th style="text-align:center;">2</th>
         <th style="text-align:center;">3</th>
         <th style="text-align:center;">4 </th>
         <th style="text-align:center;">5</th>
		 <th style="text-align:center;">6</th>
         <th style="text-align:center;">7 </th>
         <th style="text-align:center;">8</th>
         <th style="text-align:center;">9</th>
         <th style="text-align:center;">10 </th>
         <th style="text-align:center;">11</th>
         <th style="text-align:center;">12</th> 
         <th style="text-align:center;">13 </th>
         <th style="text-align:center;">14</th>
         <th style="text-align:center;">15</th>
         <th style="text-align:center;">  </th>  
      </tr>
       <tr>
        
        <td><input type="text" class="form-control" onChange="calcdays()" name="D1" id="D1"  
		value="<?php echo $D1; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

        <td><input type="text" class="form-control" onChange="calcdays()" name="D2" id="D2" 
		value="<?php echo $D2; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D3" id="D3" 
		 value="<?php echo $D3; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D4" id="D4"  
		  value="<?php echo $D4; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D5" id="D5"  
		  value="<?php echo $D5; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
			 <td><input type="text" class="form-control" onChange="calcdays()" name="D6" id="D6" 
		 value="<?php echo $D6; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
           <td><input type="text" class="form-control" onChange="calcdays()" name="D7" id="D7"  
		   value="<?php echo $D7; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>	 
        
         <td><input type="text" class="form-control" onChange="calcdays()" name="D8" id="D8"  
		 value="<?php echo $D8; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

          <td><input type="text" class="form-control" onChange="calcdays()" name="D9" id="D9"  
		 value="<?php echo $D9; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D10" id="D10"  
		 value="<?php echo $D10; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D11" id="D11"  
		 value="<?php echo $D11; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

         <td><input type="text" class="form-control" onChange="calcdays()" name="D12" id="D12"  
		 value="<?php echo $D12; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td> 
        <td><input type="text" class="form-control" onChange="calcdays()" name="D13" id="D13" 
		value="<?php echo $D13; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

     <td><input type="text" class="form-control" onChange="calcdays()" name="D14" id="D14"  
	 value="<?php echo $D14; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>

     <td><input type="text" class="form-control" onChange="calcdays()" name="D15" id="D15"  
	 value="<?php echo $D15; ?> "style="width:100%; text-align:center; color:blue; font-weight:bold;"> 
                                </td>
 
     <td> <input type="text" class="form-control" style="width:100%; text-align:center; color:blue; font-weight:bold;">  </td>
								 						
								
      </tr>
    </tbody>
  </table>  
  <br>
 <table class="table-responsive">
            <table class="table-table-bordered">
              <tr>
			    <th style="width:15%;">Total hrs </th>
                 <td style="width:10%;"><input type="text" class="form-control"   name="TOTALHOURS" id="TOTALHOURS"  
	 value="<?php echo $TOTALHOURS; ?> "style="width:100%; text-align:center; color:green; font-weight:bold;"> 
                                </td>
                 <th style="width:15%; text-align:center;"> % (hrs)</th>
				<td style="width:10%;"><input type="text" class="form-control"   name="PERCENTAGE" id="PERCENTAGE"  
	 value="<?php echo $PERCENTAGE; ?> "style="width:100%; text-align:center; color:green; font-weight:bold;"> 
                                </td>
                <th style="width:15%; text-align:center;"> Worked days</th>
               <td style="width:10%;"><input type="text" class="form-control"   name="WDD" id="WDD"  
	 value="<?php echo $WDD; ?> "style="width:100%; text-align:center; color:green; font-weight:bold;"> 
                                </td>
				<th style="width:15%; text-align:center;">% worked </th> 
          <td style="width:10%;"><input type="text" class="form-control"   name="WDDp" id="WDDp"  
	 value="<?php echo $WDDp; ?> "style="width:100%; text-align:center; color:green; font-weight:bold;"> 
                                </td>		
                </tr>
    </tbody>
  </table>
  
  
   <br>
  <p style="font-weight:bold; text-align:left;"> Summary of other days</p>
  
   
  <table class="table table-bordered" style="margin-left: 0px; background-color: #fff; font-weight:normal;">
         <thead>
         <th style="width:25%;">DESCRIPTION </th>
         <th style="width:8.5%;text-align:center;">SYMBOL</th>
         <th style="width:8%;text-align:center;">TOTAL (HRS)</th>
		 <th style="width:8.5%; text-align:center;">%</th>
		  
		 <th style="width:25%;">DESCRIPTION </th>
         <th style="width:8.5%;text-align:center;">SYMBOL</th>
         <th style="width:8%;text-align:center;">TOTAL (HRS)</th>
		 <th style="width:8.5%; text-align:center;">%</th>
		 
		 
         </thead>
      <tbody>
      <tr>
        <th>Public holiday</th>
        <td style="text-align:center;"><input type="text" value="PH" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
        <td style="text-align:center;"> <input type="text" id="PH"  name="PH" value="<?php echo $PH; ?> "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		<td style="text-align:center;"> <input type="text" id="PHp"  name="PHp" value="<?php echo $PHp; ?> "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 
        <th>Saturday and Sunday</th>
        <td style="text-align:center;"> <input type="text" value="W" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="W" name="W" value="<?php echo $W; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="Wp" name="Wp" value="<?php echo $Wp; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 
        </tr>
    <tr>
    <tr>

        <th>Not worked</th>
        <td style="text-align:center;"> <input type="text" value="0" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="NW" name="NW" value="<?php echo $NW; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="NWp" name="NWp" value="<?php echo $NWp; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
 
 <th>General Administration</th>
        <td style="text-align:center;"><input type="text" value="GA" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="GA" name="GA" value="<?php echo $GA; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="GAp" name="GAp" value="<?php echo $GAp; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
    </tr>
    <tr>
    <tr>

        <th>Staff Development</th>
        <td style="text-align:center;"> <input type="text" value="SD" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
        <td style="text-align:center;"> <input type="text" id="SD" name="SD" value="<?php echo $SD; ?> "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		<td style="text-align:center;"> <input type="text" id="SDp" name="SDp" value="<?php echo $SDp; ?> "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
  
        <th>Sick Leave</th>
        <td style="text-align:center;"> <input type="text" value="SL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="SL" name="SL" value="<?php echo $SL; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="SLp" name="SLp" value="<?php echo $SLp; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
</tr>
    <tr>
    <tr>  
        <th>Annual Leave</th>
        <td style="text-align:center;"><input type="text" value="AL" readonly="readonly" style="text-align:center; width:100%; background-color:white;"></td>
         <td style="text-align:center;"> <input type="text" id="AL" name="AL" value="<?php echo $SL; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		 <td style="text-align:center;"> <input type="text" id="ALp" name="ALp" value="<?php echo $SLp; ?> "
		 readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
    
        <th>Maternity leave</th>
        <td style="text-align:center;"><input type="text" value="ML" readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        <td style="text-align:center;"> <input type="text" id="ML" name="ML" value="<?php echo $ML; ?> "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
		<td style="text-align:center;"> <input type="text" id="MLp" name="MLp" value="<?php echo $MLp; ?> "
		readonly="readonly" style="text-align:center; width:100%; background-color:white;"> </td>
        </tr>
		  
     </tbody>
  </table>
  
   
       
	<table class="table table-bordered" style="background-color:#ffffff; margin-top:0px; border:0px; ">
   <thead>
   <tr>
   <th>Supervisor's comment</th> 
   </tr>
   </thead style="border:0px;">
   <tbody style="border:0px;">
   <tr>
   <td style="width:30%;"> <textarea name="SUP_COMMENT" value="<?php echo $ML; ?> "readonly="readonly"  
   style="width:100%; text-align:left;background-color:#fff;">   
				</textarea> </th>    			
   </tr>
  <tr>
 </tbody>
 </table>
	  
   <table class=" table table-bordered" style="background-color:#ffffff; margin-top:-10px; border:0px;"> 
   <thead>
   <tr>
   
    <th style="width:13.3333%;border:0px;">Admin</th>
	<th style="width:23.3333%;border:0px;"> <input type="text" id="ADMINNAME" name="ADMINNAME"  value="<?php echo $ADMINNAME; ?> "   
	required="required" style="width:100%; font-weight:normal; background-color:#FFF;">  </th> 
			
   <th style="width:10%;border:0px;">Designation</th>
   <td style="width:27.3333%;"><input type="text" id="ADMINPOSITION" name="ADMINPOSITION"value="<?php echo $ADMINPOSITION; ?> "
   required="required" 
   style="width:100%; text-align:left;background-color:#FFF;"></td> 

   <th style="width:10%;border:0px;">Date</th>
   <td style="width:16%;"><input type="text" id="ADMINDATE" name="ADMINDATE"  value="<?php echo $ADMINDATE; ?> "
   required="required" 
   style="width:100%; text-align:left;background-color:#FFF;"></td> 
   </tr>
   </thead> 
   </tbody>
   </table>     
	 
	<table class="table table-bordered" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
   <th>Comment</th> 
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:100%;"> <textarea name="ADMIN_COMMENT" value="<?php echo $ADMIN_COMMENT; ?> "
   readonly="readonly"  
   style="width:100%; text-align:left;background-color:#fff;">   
				</textarea> </th>    			
 </tr>
 <tr>
 </tbody>
 </table>
 </form>
  
   
<?php
$conn1  = new mysqli("localhost", "root", "toor2", "dbtollfree");
$conn2 = new mysqli("localhost", "root", "toor2", "patientmgt");


function gettotals($conns,$sql1,$sex){  
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
return  $res->num_rows;
}


function getages($conns,$sql1,$sex){ 
     $age=[0,0,0,0,0,0]; 
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
	 while($row=$res->fetch_assoc()){
	     if($row['AGE_GROUP']=='10-14'){ $age[0] = $age[0]+1;}
	 elseif($row['AGE_GROUP']=='15-19'){ $age[1] = $age[1]+1;}
	 elseif($row['AGE_GROUP']=='20-24'){ $age[2] = $age[2]+1;}
	 elseif($row['AGE_GROUP']=='24'){ $age[3] = $age[3]+1;}
	 elseif($row['AGE_GROUP']=='E'){ $age[4] = $age[4]+1;}
	 elseif($row['AGE_GROUP']=='X'){ $age[5] = $age[5]+1;}
	 }
return  $age;

}


function getagess_episode($conns,$sql1,$sex){ 
     $age=array(); 
	 $age[0] =0; $age[1] =0; $age[2] =0; $age[3] =0; $age[4] =0; $age[5] =0;
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
	 while($row=$res->fetch_assoc()){
	 if(explode('__',$row['SERVICE_EPISODE'])[1]=='1'){
	     if($row['AGE_GROUP']=='10-14'){ $age[0] = $age[0]+1;}
	 elseif($row['AGE_GROUP']=='15-19'){ $age[1] = $age[1]+1;}
	 elseif($row['AGE_GROUP']=='20-24'){ $age[2] = $age[2]+1;}
	 elseif($row['AGE_GROUP']=='24'){ $age[3] = $age[3]+1;}
	 elseif($row['AGE_GROUP']=='E'){ $age[4] = $age[4]+1;}
	 elseif($row['AGE_GROUP']=='X'){ $age[5] = $age[5]+1;}
	 }
	 }
return  $age;

}

if(isset($_POST['edate'])){
  $d1 = $_POST['sdate'].' 00:00:00';
  $d2 = $_POST['edate'].' 23:59:59';
$sql  = "SELECT * FROM `hct_counselling_andtesting` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql2 = "SELECT * FROM `counsellingservices` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql0 = "SELECT * FROM `tollfree` GROUP BY PHONECONTACT HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql3 = "SELECT * FROM `clientsexamination` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql4 = "SELECT * FROM `hcg` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql5 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql6 = "SELECT * FROM `antenatal` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql7 = "SELECT * FROM `postnatal_care` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql8 = "SELECT * FROM `abortioncare` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql9 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
  
$sql01 = "SELECT * FROM `cmpatientsregistration` HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 

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
  <link rel="stylesheet" href="../dist/css/AdminLTE.min2.css">
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
    
  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
	  "iDisplayLength": 12,
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
     $('#example2').DataTable( {
	  "iDisplayLength": 5,
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

 
 
 
  <style media="screen">
  .btn {padding : 0px 3px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ecf0f5;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border:2px solid #000;
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <?php
  require('../connect/config.php');?>
  <header class="main-header">

    <!-- Logo -->
    <a href="../../client_medical.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dashboard</b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
           
            <ul class="dropdown-menu">
              <li class="header">You have 0 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->

                  </li>
                  <!-- end task item -->

                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/img/ntihclog2.png" width="100" height="100" class="user-image" alt="User Image">
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
          <li>
            <a href="../home_user.php" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  
		  
    <section class="content-header">
     <body ="window.print();">
<div class="wrapper">
  <!-- Main content -->
 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">       
        
    <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
  
          <center> <legend style="color:#000; font-weight:bold;font-size:11px;font-family:lcd;"> MEDICAL DAILY TALLYING TOOL </legend> </center> 
      
 <center><form class="form-inline"  action="medical_tool.php" method="post">
  <div class="form-group">
    <label for="email" style="font-size:10px;">FROM :</label>
    <input type="date" name="sdate" value="<?php  if(isset($_POST['sdate'])){echo $_POST['sdate'];} else{echo "";}   ?>" class="form-control" id="sdate" 
    style="font-weight:bold; text-align:center;">
  </div>
  <div class="form-group">
    <label for="pwd" style="font-size:10px;">TO :</label>
    <input type="date" name="edate"  value="<?php  if(isset($_POST['sdate'])){echo $_POST['edate'];} else{echo "";} ?>" class="form-control" id="edate"
   style="font-weight:bold; text-align:center;">
  </div> 
  <input type="submit" Value="Generate" style="background-color:#ecf0f5;font-size:11px; font-family:lcd; height:19px;">
  </form> </center>
  <BR>
 
    <?php
	include_once 'config.php';
     ?>
  
<form class="horizontal"method="post" name="frm">
  <table class="table table-bordered" style="font-size:8px; font-weight:normal;">
    <thead>
      <tr  class="" style="background-color:#fff;font-weight:normal;">
        <th style="width:20%;font-size:10px;">DATE</th>
        <th style="width:4%;text-align:center; font-size:10px;">10-14 FEMALES</th>
        <th style="width:4%;text-align:center;font-size:10px;">10-14 MALES</th>
		<th style="width:4%;text-align:center;font-size:10px;">15-19 FEMALES</th>
        <th style="width:4%;text-align:center;font-size:10px;">15-19 MALES</th>
		<th style="width:4%;text-align:center;font-size:10px;">20-24 FEMALES</th>
        <th style="width:4%;text-align:center;font-size:10px;">20-24 MALES</th>
        <th style="width:4%;text-align:center;font-size:10px;">TOTAL CLIENTS</th>
		<th style="width:4%;text-align:center;font-size:10px;">BODY CHANGES</th> 
        <th style="width:4%;text-align:center;font-size:10px;">PREG NANCY</th>
		<th style="width:4%;text-align:center;font-size:10px;">GENERAL ISSUES</th>
		<th style="width:4%;text-align:center;font-size:10px;">STI</th>
        <th style="width:4%;text-align:center;font-size:10px;">SEXUAL HEALTH</th>
		<th style="width:4%;text-align:center;font-size:10px;">SGBV</th>
		<th style="width:4%;text-align:center;font-size:10px;">TOTAL CLIENTS</th>
		<th style="width:4%;text-align:center;font-size:10px;">HCG NEGATIVE</th>
        <th style="width:4%;text-align:center;font-size:10px;">HCG POSITIVE</th>
		<th style="width:4%;text-align:center;font-size:10px;">TOTAL CLIENTS</th>
		<th style="width:4%;text-align:center;font-size:10px;">WANTED PREG</th>
        <th style="width:4%;text-align:center;font-size:10px;">UN.WANTED PREG</th>
		<th style="width:4%;text-align:center;font-size:10px;">TOTAL CLIENTS</th>
      </tr>
  <?php 
	if(isset($_POST['sdate'])){
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$dates = array();
	$res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED>='$sdate' AND clientsexamination.DATECREATED<='$edate' 
									 GROUP BY clientsexamination.DATECREATED DESC");
		while($row=$res->fetch_array()) {if($row['DATECREATED']==''){}
		else{$dates[] = $row['DATECREATED'];} }	  //GET ALL THE DATES IN SPECIFIED RANGE		 
	 
	 for($d=0;$d<count($dates);$d++){// FOR EACH DATE GET THE RECORDS
		   $res = $MySQLiconn->query("SELECT * FROM `clientsexamination` LEFT JOIN `hcg` ON clientsexamination.DATECREATED=hcg.DATECREATED 
	                                 WHERE clientsexamination.DATECREATED='$dates[$d]' ORDER BY clientsexamination.DATECREATED DESC");
									 $GEN =0; $STI=0; $PREG =0; $GBV =0; $BD=0; 	$SH =0;  
									 $MALES =0; $FEMALES =0; $result = array();
									 $NEG =0; $POS=0;  
									 $WAN =0; $UWAN=0;   
                              while($row=$res->fetch_array())
		                      {   
						         $result= $row;
						     //FOR EACH RECORD COUNT VARIABLES
                                    if($row['MEDICALTOPIC']=='GENERAL')      { $GEN =$GEN+1; }
			                    elseif($row['MEDICALTOPIC']=='STI')          { $STI =$STI+1; }
			                    elseif($row['MEDICALTOPIC']=='PREGNANCY')    { $PREG=$PREG+1;}
			                    elseif($row['MEDICALTOPIC']=='SGBV')         { $GBV =$GBV+1; }
			                    elseif($row['MEDICALTOPIC']=='BODY CHANGES') { $BD  =$BD+1;  }
			                    elseif($row['MEDICALTOPIC']=='SEXUAL HEALTH'){ $SH  =$SH+1;  }
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGRESULTS']=='NEGATIVE')      { $NEG =$NEG+1; }
			                    elseif($row['HCGRESULTS']=='POSITIVE')      { $POS =$POS+1; } 
			                    else{}
								
								 //FOR EACH RECORD COUNT VARIABLES
                                    if($row['HCGPOSITIVE']=='WANTED')      { $WAN =$WAN+1; }
			                    elseif($row['HCGPOSITIVE']=='UN WANTED')          { $UWAN =$UWAN+1; } 
			                    else{}
								
								//COUNT SEX 
								    if($row['SEX']=='MALE')      { $MALES   =$MALES+1;    }
			                    elseif($row['SEX']=='FEMALE')    { $FEMALES =$FEMALES+1;  }
								else{}
								
								//GET AGE GROUPS  
								
                  			  }
                         ?>		

                    <?php 
					$sql1="SELECT * FROM `clientsexamination` WHERE DATECREATED='$dates[$d]'";
					$grps = getages($conn2,$sql1,"FEMALE");
					$grps1 = getages($conn2,$sql1,"MALE");
					?>						 
                             <tr>
			<td> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['EID']; ?>"  />
		    <?php echo $dates[$d]; ?>  
			</td>
            <td style="text-align:center;"><?php echo $grps[0]; ?></td> 
			
            <td style="text-align:center;"><?php echo $grps1[0];; ?></td> 
		   
			<td style="text-align:center;"><?php echo $grps[1]; ?></td>
            
			<td style="text-align:center;"><?php echo $grps1[1]; ?></td> 
            
            <td style="text-align:center;"><?php echo $grps[2]; ?></td>
             
           	<td style="text-align:center;"><?php echo $grps1[2]; ?></td> 
		   
			<td style="text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+
                 $grps1[1]+$grps[2]+$grps1[2];?></td> 
            
			<td style="text-align:center;"><?php echo $BD; ?></td> 
            
            <td > <?php echo $PREG; ?> </td>
			
            <td style="text-align:center;"><?php echo $GEN; ?> </td>
			 
		    <td style="text-align:center;"><?php echo $STI; ?></td> 
			
			<td style="text-align:center;"> <?php echo $SH; ?> </td>
			
           	<td style="text-align:center;"><?php echo $GBV; ?></td>      
			
		    <td style="text-align:center; font-weight:bold;">
			<?php echo $BD +$PREG + $GEN+ $STI +$SH +$GBV;?></td> 
				
			<td style="text-align:center;"><?php echo $NEG; ?></td> 
            						 
            <td style="text-align:center;"> <?php echo $POS; ?> </td>
			
            <td style="text-align:center; font-weight:bold;"><?php echo $NEG + $POS; ?></td>
			
			<td style="text-align:center;"><?php echo $WAN; ?></td>
			
            <td style="text-align:center;"><?php echo $UWAN; ?></td> 
			
            <td style="font-weight:bold;text-align:center;"> <?php echo $WAN + $UWAN; ?> </td> 
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:20%;"> 0</th>
        <th style="text-align:center;width:4%;"></th>
		 <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"></th>
		 <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"></th>
		 <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"></th>
		 <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"></th>
		 <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"> </th> 
         <th style="text-align:center;width:4%;"></th>
		 <th style="text-align:center;width:4%;"> </th>
         <th style="text-align:center;width:4%;"> </th> 
		 <th style="text-align:center;width:4%;"> </th>
    </td>
	</tr>
    <?php
}
	}
?>

</table>
</form>
  
  
 <center><button onClick="myFunction()" >Print </button></center>
<br>
   </div>
                                        </form>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

</body>
</html> 
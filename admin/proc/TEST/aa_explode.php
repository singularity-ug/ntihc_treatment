<?php
$conn1  = new mysqli("localhost", "root", "", "dbtollfree");
$conn2 = new mysqli("localhost", "root", "", "patientmgt");


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
 
<!doctype html>
<html style="background-color:white;">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ntihc</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href=" ../../assets/lib/bootstrap/css/bootstrap_ws.css">
    <link rel="stylesheet" href=" ../../assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href=" ../../assets/css/main.css">
    <link rel="stylesheet" href=" ../../assets/lib/metismenu/metisMenu.css"> 
        <!-- PAGE LEVEL STYLES -->   
    
     
  
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
  

  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>


	<script type="text/javascript">
 
</script>

    <link rel="stylesheet" href="../../assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="../../assets/less/theme.less">
    <script src="../../assets/libs/less.js/2.7.1/less.js"></script>
  </head>

        <body class="  ">
        <script>
function myFunction() {
    window.print();
}
</script>
            <div class="bg-dark dk" id="wrap" >
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
   
                    <div id="content">
                    <div class="outer">
                    <div class="inner bg-light lter5" style="height:auto;">
                    
    <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
  
          <center> <legend style="color:#000; font-weight:bold;font-size:17px;font-family:lcd;"> MEDICAL DAILY TALLYING TOOL </legend> </center> 
      
 <center><form class="form-inline"  action="aa_explode.php" method="post">
  <div class="form-group">
    <label for="email">FROM :</label>
    <input type="date" name="sdate" value="<?php  if(isset($_POST['sdate'])){echo $_POST['sdate'];} else{echo "";}   ?>" class="form-control" id="sdate" 
    style="font-weight:bold; text-align:center;">
  </div>
  <div class="form-group">
    <label for="pwd">TO :</label>
    <input type="date" name="edate"  value="<?php  if(isset($_POST['sdate'])){echo $_POST['edate'];} else{echo "";}   ?>" class="form-control" id="edate"
   style="font-weight:bold; text-align:center;">
  </div> 
  <input type="submit" class="btn btn-default" Value="GENERATE" style="background-color:#ecf0f5; font-family:lcd;">
</form> </center>
 <BR>
 
    <?php
	include_once 'configconns.php';
?>
  
<form method="post" name="frm">
  <table class="table table-bordered" style="font-size:8px; font-weight:normal;">
    <thead>
      <tr  class="" style="background-color:#ecf0f5;font-weight:normal;">
        <th style="width:6%;">DATE</th>
        <th style="width:5%;text-align:center;">10-14 FEMALES</th>
        <th style="width:5%;text-align:center;">10-14 MALES</th>
		<th style="width:5%;text-align:center;">15-19 FEMALES</th>
        <th style="width:5%;text-align:center;">15-19 MALES</th>
		<th style="width:5%;text-align:center;">20-24 FEMALES</th>
        <th style="width:5%;text-align:center;">20-24 MALES</th>
        <th style="width:5%;text-align:center;">TOTAL CLIENTS</th>
		<th style="width:5%;text-align:center;">BODY CHANGES</th> 
        <th style="width:5%;text-align:center;">PREG NANCY</th>
		<th style="width:5%;text-align:center;">GENERAL ISSUES</th>
		<th style="width:4%;text-align:center;">STI</th>
        <th style="width:5%;text-align:center;">SEXUAL HEALTH</th>
		<th style="width:5%;text-align:center;">SGBV</th>
		<th style="width:5%;text-align:center;">TOTAL CLIENTS</th>
		<th style="width:5%;text-align:center;">HCG NEGATIVE</th>
        <th style="width:5%;text-align:center;">HCG POSITIVE</th>
		<th style="width:5%;text-align:center;">TOTAL CLIENTS</th>
		<th style="width:5%;text-align:center;">WANTED PREG</th>
        <th style="width:5%;text-align:center;">UN.WANTED PREG</th>
		<th style="width:5%;text-align:center;">TOTAL CLIENTS</th>
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
		   
			<td style="background-color:#ecf0f5; text-align:center;font-weight:bold;">
			<?php echo $grps[0] + $grps1[0]+ $grps[1]+$grps1[1]+$grps[2]+$grps1[2];?></td> 
            
			<td style="text-align:center;"><?php echo $BD; ?></td> 
            
            <td > <?php echo $PREG; ?> </td>
			
            <td style="text-align:center;"><?php echo $GEN; ?> </td>
			 
		    <td style="text-align:center;"><?php echo $STI; ?></td> 
			
			<td style="text-align:center;"> <?php echo $SH; ?> </td>
			
           	<td style="text-align:center;"><?php echo $GBV; ?></td>      
			
		    <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;">
			<?php echo $BD +$PREG + $GEN+ $STI +$SH +$GBV;?></td> 
				
			<td style="text-align:center;"><?php echo $NEG; ?></td> 
            						 
            <td style="text-align:center;"> <?php echo $POS; ?> </td>
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"><?php echo $NEG + $POS; ?></td>
			
			<td style="text-align:center;"><?php echo $WAN; ?></td>
			
            <td style="text-align:center;"><?php echo $UWAN; ?></td> 
			
            <td style="background-color:#ecf0f5;text-align:center; font-weight:bold;"> <?php echo $WAN + $UWAN; ?> </td> 
			</tr>							  
		 
	 <?php }	 ?>
	 
	<?php
$count=1;
if($count > 0)
{
	?>
	<tr>
    <td colspan="1">TOTAL</th>
   
        <th style="text-align:center;width:5%;"> 0</th>
        <th style="text-align:center;width:5%;"></th>
		 <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"></th>
		 <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"></th>
		 <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"></th>
		 <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"></th>
		 <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"> </th> 
         <th style="text-align:center;width:5%;"></th>
		 <th style="text-align:center;width:5%;"> </th>
         <th style="text-align:center;width:5%;"> </th> 
		 <th style="text-align:center;width:5%;"> </th>
    </td>
	</tr>
    <?php
}
	}
?>

</table>
</form>
  
  
 <center><button onClick="myFunction()" >Print this report</button></center>
<br>

     </form> 



                    </div>
                </div>
              </div>
 
                            </div>
                        </div>
                    </div>
                </div>
 
            <footer class="Footer bg-dark dker">
                <p style="color:#000;">2017 &copy; Naguru Teenage Information And Health Centre</p>
            </footer> 

            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="../assets/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="../assets/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="../assets/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="../assets/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="../assets/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="../assets/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="../assets/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="../assets/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src="../assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="../assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="../assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="../IMMS/ntihc/assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="../IMMS/ntihc/assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src="../IMMS/ntihc/assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
<script>
 var x=0,y=0;

function postclient(vd){

  var dta = vd.split("###");
  $("#NTIHCNO").val(dta[0]);
  $("#CNAME").val(dta[1]);
}

</script>


      <!-- PAGE LEVEL SCRIPT-->
 <script src="../assets/js/jquery-ui.min.js"></script>
 <script src="../assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="../assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="../assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="../assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="../assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="../assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
<script src="../assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="../assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="../assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="../assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="../assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="../assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="../assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>

     <!--END PAGE LEVEL SCRIPT-->
     <script src="assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
  <script type="text/javascript" src=" assets/js/jquery.js"></script>
    <script type="text/javascript" src=" assets/admin_bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src=" assets/js/lineandbars.js"></script>

	<script type="text/javascript" src=" assets/js/dash-charts.js"></script>
	<script type="text/javascript" src=" assets/js/gauge.js"></script>

	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src=" assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="  assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topCenter.js"></script>

	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src=" assets/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="assets/js/highcharts.js"></script>
	<script src="assets/js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="assets/ js/admin.js"></script>

                <link href=" assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
            <script src=" assets/lib/jquery/jquery.js"></script>
<script src=" assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
 
			    <!-- END PAGE LEVEL SCRIPTS -->
        </body>
</html>

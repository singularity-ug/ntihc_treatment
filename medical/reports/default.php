<?php
$conn1  = new mysqli("localhost", "root", "", "dbtollfree");
$conn2 = new mysqli("localhost", "root", "", "patientmgt");


function gettotals($conns,$sql1,$sex){  
     $sql1   = $sql1."AND SEX = '".$sex."'"; 
     $res  = $conns->query($sql1);
return  $res->num_rows;
}

if(isset($_POST['edate'])){
  $d1 = $_POST['sdate'].' 00:00:00';
  $d2 = $_POST['edate'].' 23:59:59';
$sql = "SELECT * FROM `hct_counselling_andtesting` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql2 = "SELECT * FROM `counsellingservices` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql0 = "SELECT * FROM `tollfree` GROUP BY PHONECONTACT HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql3 = "SELECT * FROM `clientsexamination` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql4 = "SELECT * FROM `hcg` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql5 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql6 = "SELECT * FROM `antenatal` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql7 = "SELECT * FROM `postnatal_care` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql8 = "SELECT * FROM `abortioncare` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'";
$sql9 = "SELECT * FROM `family_planning` GROUP BY NTIHCNO HAVING `TIMESTAMP`>= '$d1' AND `TIMESTAMP`<= '$d2'"; 

}
 
?>
 
<!doctype html>
<html>

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
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
   
                    <div id="content">
                    <div class="outer">
                    <div class="inner bg-light lter5" style="height:auto;">
                    
    <img src="../../assets/img/logsbig.PNG" width="100%" height="30%">
  
          <center> <legend style="color:#000; font-weight:bold;font-size:17px;font-family:lcd;"> MEDICAL DAILY TALLYING TOOL </legend> </center> 
      
 <center><form class="form-inline"  action="cmreport.php" method="post">
  <div class="form-group">
    <label for="email">FROM :</label>
    <input type="date" name="sdate" class="form-control" id="sdate">
  </div>
  <div class="form-group">
    <label for="pwd">TO :</label>
    <input type="date" name="edate" class="form-control" id="edate">
  </div>
  <input type="submit" class="btn btn-default" Value="GENERATE" style="background-color:#ecf0f5; font-family:lcd;">
</form> </center>
 <BR>
 
    <?php
	include_once 'dbcon.php';
?>
  
<form method="post" name="frm">
  <table class="table table-bordered" style="font-size:8px;">
    <thead>
      <tr  class="" style="background-color:#ecf0f5;">
        <th style="width:5%;">DATE</th>
        <th style="width:5%;">10-14 FEMALES</th>
        <th style="width:5%;">10-14 MALES</th>
		<th style="width:5%;">16-19 FEMALES</th>
        <th style="width:5%;">16-19 MALES</th>
		<th style="width:5%;">20-24 FEMALES</th>
        <th style="width:5%;">20-24 MALES</th>
        <th style="width:5%;">TOTAL CLIENTS</th>
		<th style="width:5%;">BODY CHANGES</th>
        <th style="width:5%;">STDs</th>
        <th style="width:5%;">PREG NANCY</th>
		<th style="width:5%;">GENERAL ISSUES</th>
        <th style="width:5%;">OTHER ISSUES</th>
		<th style="width:5%;">TOTAL CLIENTS</th>
		<th style="width:5%;">HCG NEGATIVE</th>
        <th style="width:5%;">HCG POSITIVE</th>
		<th style="width:5%;">TOTAL CLIENTS</th>
		<th style="width:5%;">WANTED PREG</th>
        <th style="width:5%;">UN.WANTED PREG</th>
		<th style="width:5%;">TOTAL CLIENTS</th>
      </tr>
    <?php
	$res = $MySQLiconn->query("SELECT * FROM imprest WHERE  AUTHACTION ='PENDING' ORDER BY ORDERNO");
	$count = $res->num_rows; 
	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td style="background-color:#ecf0f5;"> <input type="hidden" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  />
		    <?php echo $row['REQUESTDATE']; ?>  
			</td>
            <td><?php echo $row['ORDERNO']; ?></td> 
			
            <td><?php echo $row['APPLICANTNAME']; ?></td> 
		   
			<td><?php echo $row['IMPREST_DESCRIPTION']; ?></td>
            
			<td><?php echo $row['IMP_CURRENCY']; ?></td> 
            
            <td> <?php echo $row['IMP_DEBIT']; ?> </td>
             
              	<td><?php echo $row['IMP_CURRENCY']; ?></td> 
		   
				<td style="background-color:#ecf0f5;"><?php echo $row['IMP_CURRENCY']; ?></td> 
            
			<td><?php echo $row['IMP_CURRENCY']; ?></td> 
            
            <td> <?php echo $row['IMP_DEBIT']; ?> </td>

		    <td><?php echo $row['IMP_CURRENCY']; ?></td> 
			<td> <?php echo $row['CODE']; ?> </td>
           	<td><?php echo $row['IMP_CURRENCY']; ?></td> 
			
				<td style="background-color:#ecf0f5;"><?php echo $row['IMP_CURRENCY']; ?></td> 
				
			<td><?php echo $row['IMP_CURRENCY']; ?></td> 
            
            <td> <?php echo $row['IMP_DEBIT']; ?> </td>
			
            <td style="background-color:#ecf0f5;"><?php echo $row['IMP_CURRENCY']; ?></td>
			
			<td><?php echo $row['IMP_CURRENCY']; ?></td>
			
            <td><?php echo $row['IMP_CURRENCY']; ?></td> 
			
            <td style="background-color:#ecf0f5;"> <?php echo $row['IMP_DEBIT']; ?> </td> 
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
       <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
	}
?>

<?php

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
    </td>
	</tr>
    <?php
}

?>

</table>
</form>


 <BR />   <BR />


  <p>NUMBER OF YOUNG PEOPLE ACCESSING SRHS SERVICES BY SERVICE TYPE</p>
  <table class="table table-bordered">
    <thead>
      <tr  class="success">
        <th>GROUP</th>
        <th style="text-align:center;">FEMALE</th>
        <th style="text-align:center;">MALE</th>
        <th style="text-align:center;">TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><B>HCT</B></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql,'FEMALE')+gettotals($conn2,$sql,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>STI</b></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><b>MEDICAL</b></td>
       <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql3,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql3,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql3,'FEMALE')+gettotals($conn2,$sql3,'MALE')):"");?></td>
      </tr>
      <tr>
        <td><b>HCG</b></td>
       <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql4,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql4,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql4,'FEMALE')+gettotals($conn2,$sql4,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>FP </b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql5,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql5,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql5,'FEMALE')+gettotals($conn2,$sql5,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>ANC</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql6,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql6,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql6,'FEMALE')+gettotals($conn2,$sql6,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>PNC</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql7,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql7,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql7,'FEMALE')+gettotals($conn2,$sql7,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>PAC</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql8,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql8,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql8,'FEMALE')+gettotals($conn2,$sql8,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>FP </b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql9,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql9,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql9,'FEMALE')+gettotals($conn2,$sql9,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>GENERAL COUSELLING</b></td>
       <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql2,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn2,$sql2,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql2,'FEMALE')+gettotals($conn2,$sql2,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>TOLLFREE</b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql0,'FEMALE'): ""); ?> </td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))? gettotals($conn1,$sql0,'MALE'): "") ?></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn1,$sql0,'FEMALE')+gettotals($conn1,$sql0,'MALE')):"");?></td>
      </tr>
       <tr>
        <td><b>SGBV</b></td>
        <td></td>
        <td></td>

        <td></td>
      </tr>
       <tr>
        <td style="text-align:right"><b>TOTALS : </b></td>
        <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql,'FEMALE')+gettotals($conn2,$sql2,'FEMALE') 
		+gettotals($conn2,$sql3,'FEMALE')+gettotals($conn2,$sql4,'FEMALE') +gettotals($conn2,$sql5,'FEMALE') +gettotals($conn2,$sql6,'FEMALE') 
		+gettotals($conn2,$sql7,'FEMALE') +gettotals($conn2,$sql8,'FEMALE') +gettotals($conn2,$sql9,'FEMALE') +gettotals($conn1,$sql0,'FEMALE') 
		):"");?></td>
        
         <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql,'MALE')+gettotals($conn2,$sql2,'MALE') 
		+gettotals($conn2,$sql3,'MALE')+gettotals($conn2,$sql4,'MALE') +gettotals($conn2,$sql5,'MALE') +gettotals($conn2,$sql6,'MALE') 
		+gettotals($conn2,$sql7,'MALE') +gettotals($conn2,$sql8,'MALE') +gettotals($conn2,$sql9,'MALE') +gettotals($conn1,$sql0,'MALE') 
		):"");?></td>
        
       <td style="text-align:center;"><?php echo ((isset($_POST['sdate']))?(gettotals($conn2,$sql,'FEMALE')+gettotals($conn2,$sql2,'FEMALE') 
		+gettotals($conn2,$sql3,'FEMALE')+gettotals($conn2,$sql4,'FEMALE') +gettotals($conn2,$sql5,'FEMALE') +gettotals($conn2,$sql6,'FEMALE') 
		+gettotals($conn2,$sql7,'FEMALE') +gettotals($conn2,$sql8,'FEMALE') +gettotals($conn2,$sql9,'FEMALE') +gettotals($conn1,$sql0,'FEMALE') 
		+gettotals($conn2,$sql,'MALE')+gettotals($conn2,$sql2,'MALE') 
		+gettotals($conn2,$sql3,'MALE')+gettotals($conn2,$sql4,'MALE') +gettotals($conn2,$sql5,'MALE') +gettotals($conn2,$sql6,'MALE') 
		+gettotals($conn2,$sql7,'MALE') +gettotals($conn2,$sql8,'MALE') +gettotals($conn2,$sql9,'MALE') +gettotals($conn1,$sql0,'MALE') 
		):"");?></td>
      </tr>
    </tbody>
  </table>
</div>
 
 <center><button onclick="myFunction()" >Print this report</button></center>
<br>

     </form> 



                    </div>
                </div>
              </div>



                            </div>
                        </div>
                    </div>
                </div>

         <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information And Health Centre</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->

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
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});


/*$('#datepicker').datepicker()
    .on("input change", function (e) {
    console.log("Date changed: ", e.target.value);
});*/

/*$( "#datepicker" ).datepicker({
	onSelect: function(dateText) {
    alert("Selected date: " + dateText + "; input's current value: " + this.value);
  }
});
*/


$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
			    <!-- END PAGE LEVEL SCRIPTS -->
        </body>
</html>

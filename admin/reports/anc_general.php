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
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc</title>
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
     $('#secondq').DataTable( {
	  "iDisplayLength": 10,
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
 
 
  
<link href="../proc/pmt/css/bootstrap-responsive.css" rel="stylesheet">
<link href="../proc/style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="../proc/pmt/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../proc/pmt/lib/jquery.js" type="text/javascript"></script>
<script src="../proc/pmt/src/facebox.js" type="text/javascript"></script>  
  
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=100%, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 100%; font-size: 13px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
 
			 

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
             background:transparent;
             }
             table tr:nth-child(even) {
             background:transparent;
             }

</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
  
  <!-- Left side column. contains the logo and sidebar -->
             <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">
   <div class="col-sm-1">
</div>
<div class="col-sm-10">
      <td style="width:100%;background-color:#fff;">
      <center>
       <a rel="facebox" title="" href="medical_rpt.php?d1=0&d2=0"><button class="">
   <i class="icon-edit">  
   </i>Back to reports module</button> </a>
   </center>  </td>   
			 </tr>             
            </table>
     <br> 
<form action="anc_general.php" method="get">
<center><strong>From : <input type="date" style="width: 145px; padding:1px;" name="d1" class="tcal" value="" /> 
To: <input type="date" style="width: 145px; padding:1px;" name="d2" class="tcal" value="" />
 <button class="btn btn-info" style="width: 78px; height:26px; margin-top:-3px;margin-left:8px;" type="submit"><i class="icon icon-search icon-large"></i> Search</button>
</strong></center>
</form>
<br>
<div class="content" id="content" style="border: 2px solid aliceblue;">
<div style="font-weight:bold; text-align:center;font-size:12px;margin-bottom: 15px; font-weight:normal;">
<img src="../../assets/img/logsbig.PNG" width="100%" height="30%"> 
SUMMARY OF ANC PERFORMANCE BETWEEN&nbsp;<?php echo $_GET['d1'] ?>&nbsp;AND&nbsp;<?php echo $_GET['d2'] ?> 
    </div> 
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
        <th style="text-align:left;">AGE GROUP</th>
		
		<th style="text-align:center;">IS-SCH</th>
        <th style="text-align:center;">OUT-SCH</th>
		<th style="text-align:center;">TOTAL</th>
			
		<th style="text-align:center;">MALE ESCORT</th>
        <th style="text-align:center;">ANC TESTED FOR HIV</th>
		<th style="text-align:center;">ANC TESTED HIV +</th>
		
		<th style="text-align:center;">NEW ANC VISTS</th>
        <th style="text-align:center;">NEW ANC TESTED HIV +</th> 
		</tr>
	</thead>
	<tbody> 
				<?php
				include('connectpatientmgt.php');
				$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$result = $db->prepare("SELECT DATECREATED, USERINITIAL,
				CASE
  WHEN AGE BETWEEN 10 AND 14 THEN '10-14'
  WHEN AGE BETWEEN 15 AND 19 THEN '15-19'
  WHEN AGE BETWEEN 20 AND 24 THEN '20-24'
  WHEN AGE > 24 THEN 'Over 24'
  END AS age_range, 
											   
											   sum( if( SCHOOLINGSTATUS = 'IS', RECORDCOUNTER, 0 ) ) AS insc,  
                                               sum( if( SCHOOLINGSTATUS = 'OS', RECORDCOUNTER, 0 ) ) AS ossc,
											   
											   sum( if( PARTNERESCORT = 'YES', RECORDCOUNTER, 0 ) ) AS partner,
											   
											   sum( if( ARTCLINIC='REFERRED', RECORDCOUNTER, 0 ) ) AS ref,  
                                               sum( if( FINALREACTIVITY='POSITIVE', RECORDCOUNTER, 0 ) ) AS pos, 
											   sum( if( VISTTYPE='NEW', RECORDCOUNTER, 0 ) ) AS newx,  
                                               sum( if( VISTTYPE='NEW' AND FINALREACTIVITY='POSITIVE', RECORDCOUNTER, 0 ) ) AS explosion    
											   
											   FROM anteprogress 
				                               WHERE DATECREATED BETWEEN :a AND :b GROUP BY age_range ASC ");
				$result->bindParam(':a', $d1);
				$result->bindParam(':b', $d2);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record"> 
			<td><?php echo $row['age_range']; ?></td>    
			  
			<td  style="text-align:center;"><?php echo $row['insc']; ?></td>
			<td  style="text-align:center;"><?php echo $row['ossc']; ?></td> 
            <td style="text-align:center;background-color:#F9F9F9;"><?php
			$dsdsd=$row['insc'] + $row['ossc'];
			echo formatMoney($dsdsd, true);
			?></td>
			
			<td  style="text-align:center;"><?php echo $row['partner']; ?></td>
			
			<td  style="text-align:center;"><?php echo $row['ref']; ?></td>
			<td  style="text-align:center;"><?php echo $row['pos']; ?></td> 
            <td  style="text-align:center;"><?php echo $row['newx']; ?></td>   
			<td  style="text-align:center;"><?php echo $row['explosion']; ?></td>
			 
			</tr>
			<?php
				}
			?>
		
	</tbody>
	<thead>
		<tr>
			<th colspan="1" style="border-top:1px solid #999999">TOTAL</th>
			<th colspan="1" style="border-top:1px solid #999999;text-align:center;"> 
			    <?php
				function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.0f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$0', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$results = $db->prepare("SELECT sum(RECORDCOUNTER) FROM anteprogress WHERE SCHOOLINGSTATUS = 'IS' AND
				DATECREATED BETWEEN :a AND :b");
				$results->bindParam(':a', $d1);
				$results->bindParam(':b', $d2);
				$results->execute();
				for($i=0; $rows = $results->fetch(); $i++){
				$dsdsd=$rows['sum(RECORDCOUNTER)'];
				echo formatMoney($dsdsd, true);
				}
				?> </th>
            
               
                 
                <th colspan="1" style="border-top:1px solid #999999;text-align:center;">
			   	<?php 
				$resultia = $db->prepare("SELECT sum(RECORDCOUNTER) FROM anteprogress WHERE SCHOOLINGSTATUS = 'OS' 
				AND DATECREATED BETWEEN :c AND :d ");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(RECORDCOUNTER)'];
				echo formatMoney($zxc, true);
				}
				?> 
                </th>
                  
                <th colspan="1" style="border-top:1px solid #999999;text-align:center;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(RECORDCOUNTER) FROM anteprogress WHERE DATECREATED BETWEEN :c AND :d ");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(RECORDCOUNTER)'];
				echo formatMoney($zxc, true);
				}
				?> 
				</th>
				<th colspan="1" style="border-top:1px solid #999999;text-align:center;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(RECORDCOUNTER) FROM anteprogress WHERE PARTNERESCORT = 'YES' AND DATECREATED BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(RECORDCOUNTER)'];
				echo formatMoney($zxc, true);
				}
				?>  
				</th>
				 
				<th colspan="1" style="border-top:1px solid #999999;text-align:center;">
			   	<?php 
				$resultia = $db->prepare("SELECT sum(RECORDCOUNTER) FROM anteprogress WHERE ARTCLINIC='REFERRED' AND DATECREATED BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(RECORDCOUNTER)'];
				echo formatMoney($zxc, true);
				}
				?> 
                </th>  
											     
				<th colspan="1" style="border-top:1px solid #999999;text-align:center;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(RECORDCOUNTER) FROM anteprogress WHERE FINALREACTIVITY='POSITIVE' AND DATECREATED BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(RECORDCOUNTER)'];
				echo formatMoney($zxc, true);
				}
				?>  
				</th>
				 
				<th colspan="1" style="border-top:1px solid #999999;text-align:center;">
			   	<?php 
				$resultia = $db->prepare("SELECT sum(RECORDCOUNTER) FROM anteprogress WHERE VISTTYPE='NEW' AND DATECREATED BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(RECORDCOUNTER)'];
				echo formatMoney($zxc, true);
				}
				?> 
                </th>
              
				
				<th colspan="1" style="border-top:1px solid #999999;text-align:center;">
			    <?php 
				$resultia = $db->prepare("SELECT sum(RECORDCOUNTER) FROM anteprogress WHERE VISTTYPE='NEW' AND FINALREACTIVITY='POSITIVE' AND DATECREATED BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(RECORDCOUNTER)'];
				echo formatMoney($zxc, true);
				}
				?>  
				</th>
				 
			 
            </tr>
	   </thead>
       </table> 

<br>
       
         <div class="pull-right" style="margin-right:100px;">
		<a href="javascript:Clickheretoprint()" style="font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
		</div>	
           
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
 
               

</body>
<script src="../proc/pmt/js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletesales.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>             
            
                 
             </div></div></div></div></div>
              
              
               </div></div>
              
                 <!-- /. ROW  -->  
             
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
               
 <!-- /. PAGE WRAPPER  -->
 
       <!-- /.content-wrapper -->
  <footer class="main-footerx">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

  
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
<script type="text/javascript" src="../assets/js/gauge.js"></script> 
   
</body>
</html> 


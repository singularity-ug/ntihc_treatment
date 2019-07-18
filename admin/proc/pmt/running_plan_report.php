 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>proc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../assets/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. --> 
  <link rel="stylesheet" href="../../assets/notifier.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css"> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <![endif]-->
  <link rel="stylesheet" href="../../datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../datatable/css/buttons.dataTables.min.css">

  <script src="../../datatable/js/jquery-1.12.3.js"></script>
  <script src="../../datatable/js/jquery.dataTables.min.js"></script>
  <script src="../../datatable/js/bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="../../datatable/js/dataTables.buttons.min.js"></script>
  <script src="../../datatable/js/buttons.flash.min.js"></script>
  <script src="../../datatable/js/jszip.min.js"></script>
  <script src="../../datatable/js/pdfmake.min.js"></script>
  <script src="../../datatable/js/vfs_fonts.js"></script>
  <script src="../../datatable/js/buttons.html5.min.js"></script>
  <script src="../../datatable/js/buttons.print.min.js"></script>
  
  
  <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#PLANDETAILS"+num).val(data[2]);
  $("#CODE").val(data[2]);
  $("#FINANCIALPERIOD").val(data[3]);
  $("#FIRSTQTROB").val(data[4]);
  $("#SECONDQTROB").val(data[5]);
  $("#THIRDQTROB").val(data[6]);
  $("#FOUTHQTROB").val(data[7]);
  $("#TOTALROB").val(data[8]); 
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

<script>
  $(document).ready(function() {
     $('#exsuppex').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:' '
		},
		{extend :'pdf',
		 title:' '
		},
		{extend :'print',
		 title:' '
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
 
  
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>  
  
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 13px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<?php 
include('connectproc.php');
$result = $db->prepare("SELECT * FROM payments");  
for($i=0; $row = $result->fetch(); $i++){
$cname=$row['PLANDETAILS'];
$invoice=$row['id'];
$date=$row['PAYMENTDATE'];
$cash=$row['due_date'];
$cashier=$row['cashier'];

$pt=$row['type'];
$am=$row['AMOUNTPAYABLE'];
if($pt=='cash'){
$cash=$row['due_date'];
$amount=$cash-$am;
}
}
?> 
			 

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
<body class="hold-transition skin-blue sidebar-mini">
  
  <!-- Left side column. contains the logo and sidebar -->
              <br>
              <div class="container-fluid" style="width:100%;">
        
              <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">

  
 <?php
$connect = new mysqli("localhost", "root", "", "procurement");
$stss ="";
if( $result = $connect->query("SELECT FINANCIALPERIOD FROM procplanning GROUP BY FINANCIALPERIOD DESC"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option> " . $row['FINANCIALPERIOD'] ." </option>";   }
  }
$connect->close();
?> 
                  <!-- Info boxes --> 
    
   <form action="running_plan_report.php" method="get">
<center><strong>
Period <select style="width: 223px; padding:2px;" name="d1" class="tcal" value="" /> 
               <option></option>
               <?php   echo $stss; ?> 
              </select>

Confirm: <select style="width: 223px; padding:2px;" name="d2" class="tcal" value="" />
                <option></option>
               <?php   echo $stss; ?> 
              </select>

 <button class="btn btn-info" style="width: 123px; height:33px; margin-top:-6px;margin-left:8px;" type="submit"><i class="icon icon-search icon-large"></i> Search</button>
</strong></center>
</form>
<div class="content" id="content">
<div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
 <img src="../../../assets/img/logsbig.PNG" width="100%" height="30%">
    
Procurement Plan Reconciliation Report for&nbsp;<?php echo $_GET['d1'] ?>&nbsp; <p class="hidden"><?php echo $_GET['d2'] ?></p>  
</div>

	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead> 
		<tr>   
            <th  style="text-align:center;"> Item description </th>
            <th  style="text-align:center;"> Code </th>
			<th  style="text-align:center;"> Sub item</th>
 
            <th colspan="4" style="text-align:center;border:0px; "> Amount required for quarterly purchase</th> 
            <th  style="text-align:center;"> Total budget amount </th>

            <th style="text-align:center;border:0px;">  </th> 
            
            <th colspan="2" style="text-align:center;border:0px; "> Quarterly  expenditures</th> 
              
            <th style="text-align:center;border:0px;">  </th> 
			<th  style="text-align:center;"> Total expenditure </th>
            
            <th  style="text-align:center;"> Variance </th> 
		</tr>
        
        <tr>   
		    <th style="border:0px;">  </th> 
            <th style="border:0px;">  </th>
			<th style="border:0px;">  </th>
 
            <th style="text-align:center;"> Q1 </th>  
            <th style="text-align:center;"> Q2  </th>
            <th style="text-align:center;"> Q3 </th>
            <th style="text-align:center;"> Q4 </th>
            <th style="border:0px;">   </th>

            <th style="text-align:center;"> Q1 </th>  
            <th style="text-align:center;"> Q2 </th> 
            <th style="text-align:center;"> Q3 </th> 
            <th style="text-align:center;"> Q4 </th> 
			<th style="border:0px;">   </th>
            
            <th style="border:0px;">  </th> 
		</tr>
	</thead>
	<tbody>
		
			<?php
				include('connectproc.php');
				$d1=$_GET['d1'];
				$d2=$_GET['d2'];
				$result = $db->prepare("SELECT * FROM procplanning WHERE FINANCIALPERIOD BETWEEN :a AND :b ORDER by ITEMDESCRIPTION ASC ");
				$result->bindParam(':a', $d1);
				$result->bindParam(':b', $d2);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">  
			<td><?php echo $row['ITEMDESCRIPTION']; ?></td>
            <td><?php echo $row['CODE']; ?></td>
			<td><?php echo $row['PLANDETAILS']; ?></td> 
       
      <td style="text-align:right;"><?php
      $dsdsd=$row['FIRSTQTR'];
      echo formatMoney($dsdsd, true);
      ?></td>

      <td style="text-align:right;"><?php
      $dsdsd=$row['SECONDQTR'];
      echo formatMoney($dsdsd, true);
      ?></td>

      <td style="text-align:right;"><?php
      $dsdsd=$row['THIRDQTR'];
      echo formatMoney($dsdsd, true);
      ?></td>

      <td style="text-align:right;"><?php
      $dsdsd=$row['FOURTHQTR'];
      echo formatMoney($dsdsd, true);
      ?></td>


      <td style="text-align:right;"><?php
      $dsdsd=$row['BUDGETAMOUNT'];
      echo formatMoney($dsdsd, true);
      ?></td>
       
			<td style="text-align:right;"><?php
			$dsdsd=$row['FIRSTQTROB'];
			echo formatMoney($dsdsd, true);
			?></td>
			  
			<td style="text-align:right;"><?php
			$dsdsd=$row['SECONDQTROB'];
			echo formatMoney($dsdsd, true);
			?></td>
			  
      <td style="text-align:right;"><?php
      $dsdsd=$row['THIRDQTROB'];
      echo formatMoney($dsdsd, true);
      ?></td>
			 
      <td style="text-align:right;"><?php
      $dsdsd=$row['FOUTHQTROB'];
      echo formatMoney($dsdsd, true);
      ?></td>
            
       <td style="text-align:right;"><?php
      $dsdsd=$row['TOTALROB'];
      echo formatMoney($dsdsd, true);
      ?></td>
            
      <td style="text-align:right;"><?php
      $dsdsd=$row['VARIANCE'];
      echo formatMoney($dsdsd, true);
      ?></td>



      </tr>
      <?php
        }
      ?>
		
	</tbody>
	<thead>
		<tr>
			<th colspan="3" style="border-top:1px solid #999999"> Total: </th>
			<th colspan="1" style="border-top:1px solid #999999;text-align:right;"> 
			<?php
				function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
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
				$results = $db->prepare("SELECT sum(FIRSTQTR) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :a AND :b"); 
				$results->bindParam(':a', $d1);
				$results->bindParam(':b', $d2);
				$results->execute();
				for($i=0; $rows = $results->fetch(); $i++){
				$dsdsd=$rows['sum(FIRSTQTR)'];
				echo formatMoney($dsdsd, true);
				}
				?>
			</th>
             
       <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
      <?php 
        $resultia = $db->prepare("SELECT sum(SECONDQTR) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
        $resultia->bindParam(':c', $d1);
        $resultia->bindParam(':d', $d2);
        $resultia->execute();
        for($i=0; $cxz = $resultia->fetch(); $i++){
        $zxc=$cxz['sum(SECONDQTR)'];
        echo formatMoney($zxc, true);
        }
        ?>
    
        </th>



        <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
      <?php 
        $resultia = $db->prepare("SELECT sum(THIRDQTR) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
        $resultia->bindParam(':c', $d1);
        $resultia->bindParam(':d', $d2);
        $resultia->execute();
        for($i=0; $cxz = $resultia->fetch(); $i++){
        $zxc=$cxz['sum(THIRDQTR)'];
        echo formatMoney($zxc, true);
        }
        ?>
    
        </th>
               

         <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
      <?php 
        $resultia = $db->prepare("SELECT sum(FOURTHQTR) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
        $resultia->bindParam(':c', $d1);
        $resultia->bindParam(':d', $d2);
        $resultia->execute();
        for($i=0; $cxz = $resultia->fetch(); $i++){
        $zxc=$cxz['sum(FOURTHQTR)'];
        echo formatMoney($zxc, true);
        }
        ?>
    
        </th>
         

             <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
      <?php 
        $resultia = $db->prepare("SELECT sum(BUDGETAMOUNT) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
        $resultia->bindParam(':c', $d1);
        $resultia->bindParam(':d', $d2);
        $resultia->execute();
        for($i=0; $cxz = $resultia->fetch(); $i++){
        $zxc=$cxz['sum(BUDGETAMOUNT)'];
        echo formatMoney($zxc, true);
        }
        ?>
    
        </th>



       

        <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
      <?php 
        $resultia = $db->prepare("SELECT sum(FIRSTQTROB) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
        $resultia->bindParam(':c', $d1);
        $resultia->bindParam(':d', $d2);
        $resultia->execute();
        for($i=0; $cxz = $resultia->fetch(); $i++){
        $zxc=$cxz['sum(FIRSTQTROB)'];
        echo formatMoney($zxc, true);
        }
        ?>
    
        </th>
             

      
      <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(SECONDQTROB) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(SECONDQTROB)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>




      <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(THIRDQTROB) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(THIRDQTROB)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
                
     


         <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
      <?php 
        $resultia = $db->prepare("SELECT sum(FOUTHQTROB) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
        $resultia->bindParam(':c', $d1);
        $resultia->bindParam(':d', $d2);
        $resultia->execute();
        for($i=0; $cxz = $resultia->fetch(); $i++){
        $zxc=$cxz['sum(FOUTHQTROB)'];
        echo formatMoney($zxc, true);
        }
        ?>
    
        </th>
            

             
                <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
			<?php 
				$resultia = $db->prepare("SELECT sum(TOTALROB) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(TOTALROB)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>



        <th colspan="1" style="border-top:1px solid #999999;text-align:right;">
      <?php 
        $resultia = $db->prepare("SELECT sum(VARIANCE) FROM procplanning WHERE FINANCIALPERIOD BETWEEN :c AND :d");
        $resultia->bindParam(':c', $d1);
        $resultia->bindParam(':d', $d2);
        $resultia->execute();
        for($i=0; $cxz = $resultia->fetch(); $i++){
        $zxc=$cxz['sum(VARIANCE)'];
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

              <center>  <a href="proc_pdu.php" class="btn btn-primary btn-block margin-bottom" style="width:10%;"> Back</a></center>
               

</body>
<script src="js/jquery.js"></script>
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
               
                </div> 
              </div>
            </div>
          </div> 
        </div> 
      </div> 
    </section> 
               
 <!-- /. PAGE WRAPPER  -->
 
       <!-- /.content-wrapper -->
  <footer class="main-footerx">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

  
  </div> 


<script src="../../assets/lib/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
<script type="text/javascript" src="../../assets/js/gauge.js"></script> 
   
</body>
</html> 
<!DOCTYPE html>
<html>
<head>
	<!-- js -->			
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
 
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<title>
ntihc
</title>

 <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
     <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
 	 
  <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
     <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

	<!-- combosearch box-->	
	
	  <script src="vendors/jquery-1.7.2.min.js"></script>
    <script src="vendors/bootstrap.js"></script>

	  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome --> 
  <!-- Ionicons --> 
<!--sa poip up-->
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
  <script src="../js/custom.js"></script>
  <script>
  $(document).ready(function() {
     $('#exmary').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script> 
  
  <script>
  $(document).ready(function() {
     $('#ext').DataTable( {
	  "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

		{extend :'pdf',
		 title:'myfile'
		}
        ]
    } );
  } );
  </script> 
    <script>
  $(document).ready(function() {
     $('#secondq').DataTable( {
	  "iDisplayLength": 15,
        dom: 'Bfrtip',
        buttons: [

		{extend :'excel',
		 title:'  '
		},
		{extend :'pdf',
		 title:'  '
		},
		{extend :'print',
		 title:' '
		}
        ]
    } );
  } );
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
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style>
 <?php
  require('config.php');
  ?>

 <script language="javascript" type="text/javascript"> 
 
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	

</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>
<body> 
   <?php include('navfixed.php');?>
	
	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
             <div class="well sidebar-nav" style="background-color: #484848;">
                 <ul class="nav nav-list" style="margin-left: -10px;">
               <li><a href="../../proc/proc_pdu_mgr.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li class="active"><a href="proc_planautomation.php"><i class="icon-shopping-cart icon-2x"></i> Plan details</a>  </li>             
			<li><a href="proc_planqtr.php"><i class="icon-list-alt icon-2x"></i> Running report</a>                                     </li>
			<li><a href="#"><i class="icon-group icon-2x"></i> 1st Qtr report</a>                                    </li>
			<li><a href="#"><i class="icon-group icon-2x"></i> 2nd Qtr report</a>  
            <li><a href="#"><i class="icon-group icon-2x"></i> 3rd Qtr report</a>                                    </li>
			<li><a href="#"><i class="icon-group icon-2x"></i> 4th Qtr report</a>   </li>
			<li><a href="payment_report.php"><i class="icon-bar-chart icon-2x"></i> Payments </a>                </li>
				<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="text" class="trans" name="face" value="" disabled>
			</form>
			  </div>
			</li>
				
				</ul>   	
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10"> 
   <div class="contentheader"> 
   
			<i class="icon-money"></i> Procurement plan
			</div>
			 <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 25%;  color:#000; text-align:left; font-weight:bold; background-color:#fff;">
             Procurement plan by financial period<span class="sr-only">35% Complete (success)</span></div>
             
            <div class="progress-bar progress-bar-success" style="width: 20%;background-color:#fff;font-weight:bold;">
             <a href=<button class="small-box-footer" data-toggle="modal" data-target="#addplan">Add new procurement plan<i class=" "></i></a> 
             
             <span class="sr-only">20% Complete (warning)</span></div>
            
            <div class="progress-bar progress-bar-warning" style="width: 20%;background-color:#fff;font-weight:bold;">
             <li class="active"><a href="proc_plan_details.php" >View item descriptions &nbsp;|&nbsp; <b>Edit </b><span class="sr-only">(current)</span></a></li>  
            <span class="sr-only">20% Complete (warning)</span></div>
            
            <div class="progress-bar progress-bar-warning" style="width: 15%;background-color:#fff;font-weight:bold;"> 
            <span class="sr-only">10% Complete (danger)</span></div>
             
            <div class="progress-bar progress-bar-success" style="width: 20%;background-color:#fff;font-weight:bold;">
            <a href=<button class="small-box-footer" data-toggle="modal" data-target="#fireworks"> <i class=" "></i></a> 
            <span class="sr-only">10% Complete (danger)</span></div>
            </div> 
			 
 
 <center> <legend style="color:#000; font-weight:bold;font-size:14px;font-family:lcd;"> PROCUREMENT PLAN DETAILS BY ITEM DESCRIPTION </legend> </center> 
    
                 <div class=""  id="runclone" >  </div>
                <script>

          function runclone(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'proc_plandetailsview.php?q='+odno,
                       success : function(data){
                                $('#runclone').html(data);
								$("#outxclows").modal("show");
                                 }
               });
               }

          </script>     
               
                 
                          
                  <table id="exmary" class="table table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr> 
                     <th>OBJECTIVE</th> 
                     <th>CODE</th>
			         <th>ITEM DESCRIPTION</th>
                     <th>AMOUNT </th> 
                     <th>ACTION</th> 
                  </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT ITEMDESCRIPTION, CODE, OBJECTIVE, FINANCIALPERIOD, SUM(BUDGETAMOUNT)  
			                                         FROM procplanning  GROUP BY ITEMDESCRIPTION, FINANCIALPERIOD ORDER BY OBJECTIVE DESC ");

             while($res = mysqli_fetch_array($result)) {
             $dtsvv = $res['FINANCIALPERIOD']."***".$res['ITEMDESCRIPTION']."***".$res['FINANCIALPERIOD'];
              echo "<tr>"; 
               echo "<td>".$res['OBJECTIVE']."</td>";
               echo "<td>".$res['CODE']."</td>"; 
			   echo "<td>".$res['ITEMDESCRIPTION']."</td>"; 
			   echo "<td>".$res['SUM(BUDGETAMOUNT)']."</td>"; 
               echo '<td> &nbsp;&nbsp; &nbsp;
              <a id="302__'.$dtsvv.'" href="javascript:void(0)" onclick="runclone(this.id)" data-toggle="tooltip" title="View"
              <span class="glyphicon glyphicon-th-list"> </span></a>
			  &nbsp;&nbsp;&nbsp; 
              </td>'; 
             }
              ?>
             </tbody>
             </table>
            <br>
            <br>
            
            
 <center> <legend style="color:#000; font-weight:bold;font-size:14px;font-family:lcd;"> PROCUREMENT PLAN ITEM DESCRIPTIONS </legend> </center> 
    
            
              </script>     
               
                   <div class=""  id="gameofthrones" >  </div>
               <script> 
              function gameofthrones(jose){
     		  var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'proc_procplan_get.php?q='+odno,
                            success : function(data){
                                     $('#gameofthrones').html(data);
     								$("#fucky").modal("show");
                                      }
                    });
                    } 
               </script> 
                
                  <table id="ext" class="table table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
                  <thead>
                  <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM.DESCRIPTION</th>
                <th>FINANCIAL.PERIOD</th>
                <th>PROCUREMENT.DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>AMOUNT</th> 
                <th>ACTION</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S/NO.</th>
                <th>OBJECTIVE</th> 
                <th>CODE</th>
                <th>ITEM.DESCRIPTION</th>
                <th>FINANCIAL.PERIOD</th>
                <th>PROCUREMENT.DETAILS</th>
                <th>IST.QTR</th>
                <th>2ND.QTR</th>
                <th>3RD.QTR</th>
				<th>4TH.QTR</th>
                <th>AMOUNT</th> 
                <th>ACTION</th>
            </tr>
                  </tfoot>
				  
                  <tbody>

             <?php
             include_once("configproc.php");

             $result = mysqli_query($mysqli, "SELECT * FROM procplanning ORDER BY OBJECTIVE DESC ");

             while($res = mysqli_fetch_array($result)) {
             $dtsvv = $res['ITEMDESCRIPTION']."***".$res['id']."***".$res['FINANCIALPERIOD'];
              echo "<tr>";
			   echo "<td>".$res['id']."</td>";
               echo "<td>".$res['OBJECTIVE']."</td>";
               echo "<td>".$res['CODE']."</td>"; 
			   echo "<td>".$res['ITEMDESCRIPTION']."</td>"; 
			   echo "<td>".$res['FINANCIALPERIOD']."</td>"; 
			   echo "<td>".$res['PLANDETAILS']."</td>";
               echo "<td>".$res['FIRSTQTR']."</td>";
               echo "<td>".$res['SECONDQTR']."</td>"; 
			   echo "<td>".$res['THIRDQTR']."</td>"; 
			   echo "<td>".$res['FOURTHQTR']."</td>"; 
			   echo "<td>".$res['BUDGETAMOUNT']."</td>";  
               echo '<td> 
			  &nbsp;&nbsp;&nbsp;
			  <a id="322__'.$dtsvv.'" href="javascript:void(0)" onclick="gameofthrones(this.id)" data-toggle="tooltip" title="Update"
              <span class="glyphicon glyphicon-check"> </span></a> 
              </td>'; 
             }
              ?>
             </tbody>
             </table> 
<br> 
    <!--END PAGE LEVEL SCRIPTS --> 
    </div>
    
      <div class="modal" id="addplan" tabindex="-1"    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: red;" >
                                            <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">

 
 <form id="form1" class="form-horizontal" action="proc_processprocplan.php" method="POST" style="height:auto; font-weight:normal;">

           <p style="color:#000; font-weight:bold; font-family:lcd; font-size:12px; text-align:center;"> PROCUREMENT PLANNING</p>
           
				<table class="table table-striped" style="background-color:#ffffff; margin-top:0px; ">
   <thead>
   <tr>
   <th>OBJECTIVE</th>
   <th style="text-align:center;">CODE</th>
   <th style="text-align:center;">ITEM DESCRIPTION</th>
   <th style="text-align:center;">FINANCIAL PERIOD</th>
   </tr>
   </thead>
   <tbody>
   <tr>
   <td style="width:20%;"><input type="text" name="OBJECTIVE" id="OBJECTIVE"   required="required" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:20%;"><input type="text" name="CODE" id="CODE"   required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
                
   <td style="width:35%;"><input type="text" name="ITEMDESCRIPTION" id="ITEMDESCRIPTION"   required="required" 
   style="width:100%; text-align:left;background-color:#ecf0f5;"></td>
   
   <td style="width:25%;"><input type="text" name="FINANCIALPERIOD" id="FINANCIALPERIOD"  required="required"  
                style="width:100%; text-align:left;background-color:#ecf0f5;"></td> 
                
                 
   </tr>
  <tr>
 </tbody>
 </table>
      <input type="hidden" name="DATECREATED" id="DATECREATED" value="">    
              
    <table class="table table-bordered" id="mytable1" style="background-color: transparent; ">
    <thead>
      <tr>
      <th>*</th>
   <th style="width:45%;"> DETAILS </th>
	      <th style="width:10%;"> 1ST QUARTER  </th>
		  <th style="width:10%;"> 2ND QUARTER  </th>
		  <th style="width:10%;"> 3RD QUARTER  </th>
          <th style="width:10%;"> 4TH QUARTER </th>  
          <th style="width:15%;"> AMOUNT </th>
      </tr>
      </thead>
      <tbody>

    </tbody>
  </table>      
     <input type="button" onClick="addRow16('mytable1')" value="Add details" />
     <input type="button" onClick="deleteRow16('mytable1')" value="(Delete)" />
     <input type="hidden" id="mytable_rows1" value="0">  
             
  <table class="table-responsive" style="margin-top:-10px;"> 
            <table class="table"  style="border:0px;">
              <tr> 
               <th style="width:85%; text-align:right; border:0px;"> TOTAL</th>
                <td style="width:15%; text-align:right; border:0px;"> 
                <input type="text" name="CODEDAMOUNT" id="CODEDAMOUNT"    
                style="width:100%; text-align:left;background-color:#ecf0f5;">
    </td>  
			  
			 </tr>             
            </table>

            <input type="hidden" name="BUDGETSTATUS" id="BUDGETSTATUS" value="RUNNING" >    
            
            <center> <input type="submit" name="button" id="button" value="Save"/>
            
            <button class="btn btn-default" data-dismiss="modal">Close</button></center>
           
           <div class="col-sm-12">
           <div class="panel-body">
           </form>
           </div>

                                        </div>
                                        <div class="modal-footer"> 
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div> </div>

    
     </div> </div>
</body>
<?php include('footer.php');?>
</html>
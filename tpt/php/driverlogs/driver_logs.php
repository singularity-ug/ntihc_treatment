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
  header('location:../index.php');
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>ftl</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../css/matrix-style2.css" />
<link rel="stylesheet" href="../../css/matrix-media.css" />
<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../../css/uniform.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
 
<link rel="stylesheet" href="../../css/notifier2.css" />
<link rel="stylesheet" href="../../datatable/bootstrap/css/bootstrap.css" />  
<link rel="stylesheet" href="../../css/bootstrap-wysihtml5.css" /> 

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

  $("#SUBPROGRAMME"+num).val(data[2]);
  $("#VOTE_HEADNO").val(data[2]);
  $("#PROGRAMME").val(data[3]);
  $("#ITEM").val(data[4]);
  $("#BALANCEREMAINING").val(data[5]);
  $("#FINANCIALYEAR").val(data[6]);


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "../budget/budgetlinesearch.php",
  data: dataString,
  cache: false,
  success: function(result){

    $("#res").html(result);

}
  });
}
}


</script>

  <script>
  $(document).ready(function() {
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
	  "iDisplayLength":3,
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
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
	  "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
	  "iDisplayLength": 5,
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



<script>
  $(document).ready(function() {
     $('#example4').DataTable( {
	  "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

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
 
 <div class="col-sm-1">
       </div>
        <div class="col-sm-10">
  

 <!--Chart-box-->    
    <div class="row-fluid"> 
      <div class="widget-box"> 
        <div class="widget-title bg_lg"><span class="icon"><i class=""></i>
        <a href="../dashboard.php" title="Home" class="tip-bottom"><i class="icon-home"></i> Home</a>&nbsp;
        
        </span>
          <h5> 
		  Log book editor
          </h5>
        </div>
        <div class="widget-content" style="background-color:#fff;">
          <div class="row-fluid">
            <div class="span12"> 
       
		<ul class="nav nav-tabs" style="border:0px; background-color:#fff;">	 
        <div class="col-sm-3">  
		<ul class="site-stats" style="margin-top:0px; border:0px;">   
	    <li class="" style="text-align:left;"><i class=" "><a data-toggle="tab" href="#tab1">
                <img src="../../img/demo/access-administrator-account.jpg"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                <small >User info</small></li></a>
				 
				<li class="" style="text-align:left;"><i class=" "><a data-toggle="tab" href="#tab2">
                <img src="../../img/icons/approve2.png" width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                <small>My logbook</small></li></a>   
                </ul>  
		 </div>
		 
		<div class="col-sm-3">  
        <ul class="site-stats" style="margin-top:0px; border:0px;"> 
		
	    <li class="" style="text-align:left;"><i class=" "><a data-toggle="tab" href="#tab3">
                <img src="../../img/icons/switch5.jpg"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                <small>Fuel&nbsp;logs</small></li></a>
				 
				<li class="" style="text-align:left;"><i class=" "><a data-toggle="tab" href="#tab4">
                <img src="../../img/icons/delete2.jpg"width="100" height="100" style="height:40%; width:40%;" class="img-circle">
                </i> 
                <small >Alert&nbsp;center</small></li></a>  
	            </div>
                </ul>  
                </div> 
	    
	      <div class="col-sm-12"> 
		
            <div class="widget-content tab-content" style="margin-top:0px; border:0px;"> 
            <div id="tab1" class="tab-pane active"> 
			 Welcome :&nbsp; <?php echo $nameofuser; ?>; &nbsp; You have
          <b style="color:red;">  <?php
$link = mysqli_connect("localhost", "root", "toor2", "ftl");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id FROM ftlvehiclebooking WHERE Allocationstatus ='Allocated' AND Emailaddress='$rm' AND Servicerecieved='No'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> </b>
         travel order(s)
            </div>
            <div id="tab2" class="tab-pane" style="margin-top:0px; border:0px;"> 
		
		   <div class=""  id="getresorder" >  </div>
                <script> 
          function getresorder(jose){
		  var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'get_journey.php?q='+odno,
                       success : function(data){
                                $('#getresorder').html(data);
								$("#outxxexxxx").modal("show");
                                 }
               });
               } 
                </script>    
             
             
             <div class="table-responsive mailbox-messages"> 
             <br>
                  <!-- Info boxes --> 
             <div class="" id="bookorders" style="margin-left: 0px;"></div>
			 
			  <script> 
          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'fleetjourney.php',
                       success : function(data){
                                $('#bookorders').html(data);
                                 }
               });
               }, 2000);

          </script>
            
            
    
            </div>   
            
			
	        </div> 
	        <div id="tab3" class="tab-pane" style="margin-top:0px; border:0px;"> 
			*
	        </div>
			
			<div id="tab4" class="tab-pane" style="margin-top:0px; border:0px;"> 
			*
	        </div>
	        </div> </div> 
	   
         <div class="col-sm-6">
	
         
		 
         </div>
			
			
         </div> 
		  
		 </div>
            </div>
           </div> 
         </div>
        
       
<!--End-Chart-box--> 

    

<!--Footer-part-->
<!--End-Footer-part-->
<script src="../../js/jquery.min.js"></script> 
<script src="../../js/jquery.ui.custom.js"></script> 
<script src="../../js/bootstrap.min.js"></script> 
<script src="../../js/jquery.gritter.min.js"></script> 
<script src="../../js/jquery.peity.min.js"></script> 
<script src="../../js/matrix.js"></script> 
<script src="../../js/matrix.interface.js"></script> 
<script src="../../js/matrix.popover.js"></script>
</body>
</html>


<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../plugins/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../plugins/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="../../plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../plugins/flot/jquery.flot.categories.min.js"></script>
</body>
</html>

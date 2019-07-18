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
$connect = new mysqli("localhost", "root", "toor2", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT * FROM ntihcdrugs"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['DRUGNAME'] . "</option>"; }
  }
$connect->close();
?>
 
  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>hct</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap3.css">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="admin/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/assets/ionicons.min.css">
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="admin/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="admin/assets/notifier.css">
  <link rel="stylesheet" href="admin/dist/css/skins/skin-blue.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <link rel="stylesheet" href="admin/datatable/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="admin/datatable/css/buttons.dataTables.min.css">

  <script src="admin/datatable/js/jquery-1.12.3.js"></script>
  <script src="admin/datatable/js/jquery.dataTables.min.js"></script>
  <script src="admin/datatable/js/bootstrap.min.js"></script>
  <script src="admin/datatable/js/dataTables.bootstrap.min.js"></script>
  <script src="admin/datatable/js/dataTables.buttons.min.js"></script>
  <script src="admin/datatable/js/buttons.flash.min.js"></script>
  <script src="admin/datatable/js/jszip.min.js"></script>
  <script src="admin/datatable/js/pdfmake.min.js"></script>
  <script src="admin/datatable/js/vfs_fonts.js"></script>
  <script src="admin/datatable/js/buttons.html5.min.js"></script>
  <script src="admin/datatable/js/buttons.print.min.js"></script>
   
   <script type="text/javascript">

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#dn"+num).val(data[2]);
  $("#instock").val(data[2]);
  $("#PROGRAMME").val(data[3]); 


}


function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "medical/drugsearch.php",
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
     $('#exaoffsite').DataTable( {
    "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [ 
     {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:'  '
    }
        ]
    } );
  } );
  </script>

<script>
  $(document).ready(function() {
     $('#viewresults').DataTable( {
    "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [ 
     {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:'  '
    }
        ]
    } );
  } );
  </script>
  
  
   <script>
  $(document).ready(function() {
     $('#example01').DataTable( {
    "iDisplayLength": 30,
        dom: 'Bfrtip',
        buttons: [ 
      
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example1').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [ 
              ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#exatable').DataTable( {
    "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [
 
     {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:'  '
    }
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#myhistory').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
 
     {extend :'excel',
     title:' file'
    } 
        ]
    } );
  } );
  </script>
  
  
  <script>
  $(document).ready(function() {
     $('#myserachhistory').DataTable( {
    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [
 
     {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:'  '
    }
        ]
    } );
  } );
  </script>


    <script>
  $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
     $('#example2').DataTable( {
    "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example3').DataTable( {
    "iDisplayLength": 2,
        dom: 'Bfrtip',
        buttons: [

     {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:'  '
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
         {extend :'excel',
     title:'  '
    },
    {extend :'pdf',
     title:'  '
    } 
        ]
    } );
  } );
  </script>

  <script>
  $(document).ready(function() {
     $('#example').DataTable( {
    "iDisplayLength":4,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:'  '
    },
    {extend :'pdf',
     title:'  '
    },
    {extend :'print',
     title:'  '
    }
        ]
    } );
  } );
  </script>

   <script>
  $(document).ready(function() {
     $('#exampex').DataTable( {
    "iDisplayLength":8,
        dom: 'Bfrtip',
        buttons: [
 
        ]
    } );
  } );
  </script>



<script>
  $(document).ready(function() {
     $('#example6').DataTable( {
    "iDisplayLength": 5,
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
     $('#example7').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:'NTIHC |IMMS USER CONTACTS '
    },
    {extend :'pdf',
     title:'NTIHC |IMMS USER CONTACTS '
    },
    {extend :'print',
     title:'NTIHC |IMMS USER CONTACTS '
    }
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#example8').DataTable( {
    "iDisplayLength": 4,
        dom: 'Bfrtip',
        buttons: [
  
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example9').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:' BUDGET DETAILS'
    }
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#example10').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:' BUDGET DETAILS'
    }
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#example11').DataTable( {
    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:' BUDGET DETAILS'
    }
        ]
    } );
  } );
  </script>
   
  <script>
  $(document).ready(function() {
     $('#example12').DataTable( {
    "iDisplayLength": 5,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:' BUDGET DETAILS'
    }
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example13').DataTable( {
    "iDisplayLength": 3,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:'  '
    }
        ]
    } );
  } );
  </script>
  
  <script>
  $(document).ready(function() {
     $('#example14').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:' BUDGET DETAILS'
    }
        ]
    } );
  } );
  </script>
  
  
   <script>
  $(document).ready(function() {
     $('#example15').DataTable( {
    "iDisplayLength": 10,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:' BUDGET DETAILS'
    }
        ]
    } );
  } );
  </script>
  
   <script>
  $(document).ready(function() {
     $('#example16').DataTable( {
    "iDisplayLength": 7,
        dom: 'Bfrtip',
        buttons: [

    {extend :'excel',
     title:' file'
    },
    {extend :'pdf',
     title:'file '
    },
    {extend :'print',
     title:' BUDGET DETAILS'
    }
        ]
    } );
  } );
  </script>
  
  
  
  
  <style media="screen">
  .btn {padding : 0px 3px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 0px;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
	 font-weight:normal;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;

}

             table, th , td  {
                 border: 0px;
                 border-collapse: collapse;
                 padding-left: 0px;
               padding-bottom: 0px;
              font-size: 11px;
              color:#000000;
              font-weight:normal;
             }
             table tr:nth-child(odd) {
             background-color:transparent;
             }
             table tr:nth-child(even) {
             background-color:transparent;
             }

</style>
 
 <script> 

 

  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>

<script>


function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

var t = setInterval(function(){
     var today = new Date();
         document.getElementById('CHECKIN').value =   today.getHours() + ":" + checkTime(today.getMinutes()) + ":" + checkTime(today.getSeconds());

},1000);
</script> 
   
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<?php
  require('admin/connect/config.php');
  ?>
   

      <div class="panel-body"> 
      
	 
	<div class="col-md-8" style="background-color:transparent;">  
		 
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
    <td style="width:16%; border: 0px;">  
        <img src="assets/img/ntihclog2.png"width="70" height="90" style="border: 0px; ">   
      </td>
   
     <td style="width:28%; border: 0px;"> 
	   <a href="counsellingroom.php">  
	   <center><img src="assets/imgx/indexsssssss.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
        Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
        
		<a href="admin/reports/counselling_rtp.php?d1=0&d2=0"> 
       <center><img src="database icons/59449894425chart-512.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">   
        Reports&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
   
    
   
      <td style="width:28%; border: 1px;"> <a href="regn_services.php"> 
        <center><img src="assets/imgx/kkk.png"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
        Edit&nbsp;Services </center>    </a>
        <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		 <a href="counsellingroom.php">
        <center><img src="database icons/clients.jpg"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent"> 
         Art&nbsp;module&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		</td>
		 
	  <td style="width:28%; border: 1px;">  <a href="counsellingroom_hist.php">
        <center><img src="database icons/Subscribe-HR-Human-Resource-Management-Software-Core-HR-Large.png"width="100" height="100" class=" " 
        style=" height:30px; width:30px; background-color:transparent"> 
        History </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
		<p></p>
		
		<a href="index.php">
        <center><img src="database icons/delete3.jpg"width="100" height="100" class=" " style=" height:30px; width:30px; background-color:transparent">  
         Logout </center>    </a>
         <div class="pull-right box-tools"> </div> 
         </div>   
		 </td>   
    
   <td style="width:10%; border: 1px;">  
    </td>  
 </tbody>
 </table> 
 
  
   </div> 
  
   <div class="col-md-4" style=" background-color:transparent;">  
  
  
   </div>
   </div>
     
   <div class="col-md-3" style=" background-color:transparent;">  
   </div>
   
     
    
        
   </td>  
 </tbody>
 </table> 
  
     
    
     
    </div> </div>
    <div class="col-md-12"> 
           
    
     <div class="col-md-4">
      
            <div class="box-header with-border" style="background-color:transparent;">
              <div class="nav-tabs-custom" style="background-color:transparent;border:0px;">
            <ul class="nav nav-tabs pull-right" style="margin-top:-4px;background-color:transparent; border:0px;">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Lab&nbsp;results
              <b class="" style="text-align: center; font-size: 15px; border-radius: 11px;width: 28%; "> 
                 <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='COMPLETED' AND HCT ='1' AND LABVIST ='1' 
                                   GROUP BY NTIHCNO")) {
 
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
</b>
</a></li>
              <li><a href="#tab_2-2" data-toggle="tab" class="">Completed
              &nbsp; 
              
                  <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND 
				                        SERVICETYPE ='COUNSELLING SERVICES' 
				                        AND INSVCSTATUS ='COUNSELLING SERVICES' GROUP BY NTIHCNO
				                        ORDER BY NTIHCNO DESC");
				$result->execute();
				$rowcount311 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount311;?> 
             </a></li>  
                 
              </ul>
              <div class="tab-content" style="background-color:transparent;">
              <div class="tab-pane active" id="tab_1-1" style="background-color:transparent;"> 
        
   <table id="example01" class="table table-stripped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
		      <th>VIST&nbsp;DATE</th> 
			  <th>CLIENT&nbsp;NAME</th> 
			  <th>NTIHC&nbsp;NO.</th>  
              <th style="text-align:center;">ACTION</th>   
           </tr>
         
        </tfoot> 
        <tbody> 
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';  
     
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                   AND TESTSTATUS ='COMPLETED' AND HCT ='1' AND LABVIST ='1'
                                          GROUP BY NTIHCNO ORDER BY DATECREATED ASC ");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsget = $res['DATECREATED']."***".$res['NTIHCNO']."***".$res['NTIHCNO']."***".$res['DATECREATED'];
		echo "<tr>";  
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>";  
		echo "<td>".$res['NTIHCNO']."</td>";  
		echo "<td><a href=\"counsellingroom_hist_episode.php?NTIHCNO=$res[NTIHCNO]\">Update</a>  </td>";     	
	}
	   
    ?>
	</tbody>
  </table>  
          
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2" style="background-color:#fff;"> 
              <table id="example1" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; background-color:#fff;">
        <thead>
        <tr>   
                  
		             <th style="background-color:#fff;">DATE</th>
					 <th style="background-color:#fff;">NO.</th>
                     <th style="background-color:#fff;">CLIENT&nbsp;NAME</th>  
                     <th style="background-color:#fff;">ACTION</th>  
        </tr>
        </tfoot> 
        <tbody> 
        
    <script> 
function postclient(myid){
var dtsxxcq = myid.split("***");
document.getElementById("myNTIHCNO").value=dtsxxcq[0];
document.getElementById("myID").value=dtsxxcq[1];  
document.getElementById("myAGE1").value=dtsxxcq[2]; 
document.getElementById("myAGEGP").value=dtsxxcq[3];
document.getElementById("mySEX").value=dtsxxcq[4];  
}
</script>    
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND 
				                        SERVICETYPE ='COUNSELLING SERVICES' 
				                        AND INSVCSTATUS ='COUNSELLING SERVICES' GROUP BY NTIHCNO ORDER BY DATECREATED DESC");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsxxcq = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['DATECREATED'];
		echo "<tr>"; 
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>";    
		echo "<td><a href=\"counsellingroom_hist_episode.php?NTIHCNO=$res[NTIHCNO]\">Update</a>  </td>";  
	}
	   
    ?>
	</tbody>
    </table>  
    
   
              
              
               </div>
              <!-- /.tab-pane -->
               
            </div> 
          </div> 
		                
        </div> 
        
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
             <th style="width:39%; text-align:left; border:0px;">  <strong>Clients&nbsp;due&nbsp;for HCT / Counselling</strong></th>
			 <th style="width:10%; text-align:left; border:0px;">   
			 <b style="text-align:center; font-size:40px; font-size: 15px;border-radius: 11px;color:#fff;" class="button 5"> 
			 <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP")) {
 
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>
			 </td>  
			 <th style="width:2%; text-align:left; border:0px;">  </th>
			 <th style="width:39%; text-align:left; border:0px;"><strong>Outreach clients due for entry</strong>  </th>
			 <th style="width:10%; text-align:left; border:0px;">  
			 <b style="text-align:center; font-size:40px;font-size: 15px;border-radius: 11px;color:#fff;" class="button 5">
			   <?php 
			include('client_medical_conn.php');
			$date = date("Y-m-d").' 00:00:00';
				$result = $db->prepare("SELECT * FROM cmpatientsregistration WHERE SERVICETYPE ='OUTREACH' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO
				                        ORDER BY NTIHCNO DESC");
				$result->execute();
				$rowcount3 = $result->rowcount(); 
			 ?>
		<?php echo $rowcount3;?> 
		 </b>
			 </td>  
			 </tr>             
             </table> 
             
         
              
              
        </div>
        <!-- /.col -->   
       
                
   
            <div class="col-md-8" style=" background-color:transparent;">  
               
               
   <?php 
   $id =  $_GET['NTIHCNO'];   
  $DATECREATED = '';
  $FIRSTNAME = '';
  $LASTNAME  = '';
  $OTHERNAME = '';
  $SEX = '';
  $AGE = '';
  $AGE1 = ''; 
  $SCHOOLINGSTATUS = '';
  $HIGHESTLEVELOFEDUCATION = '';
  $MARITALSTATUS = '';
  $EMPLOYMENTSTATUS = '';
  $DISTRICT = '';
  $DIVISION = '';
  $PLACEOFRESIDENCE = '';
  $PHONECONTACT = '';
  $MOTHERFIRSTNAME = '';
  $MOTHERLASTNAME='';
  $FATHERFIRSTNAME='';
  $FATHERLASTNAME='';
  $LIVINGWITH='';
  $HEAREDABOUTNTIHC='';
  $REGISTEREDBY='';
  $REGISTERACCOUNT=''; 
  $NTIHCNO='';  
  $RELIGION=''; 
   $TRIBE='';
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsnewregistration  WHERE NTIHCNO = '$id' GROUP BY NTIHCNO, DATECREATED ORDER BY NTIHCNO, DATECREATED";

 $res = $conn->query($sql);
 
 if($res){}
 else{echo $conn->error; exit();}

     while($row=$res->fetch_assoc()){
	  
	 $NTIHCNO     = $row['NTIHCNO'];  
	 $DATECREATED = $row['DATECREATED'];
     $FIRSTNAME   = $row['FIRSTNAME'];
     $LASTNAME    = $row['LASTNAME'];
     $OTHERNAME   = $row['OTHERNAME'];
     $SEX         = $row['SEX'];
     $AGE         = $row['AGE'];
	 $AGE1        = $row['AGE1'];
     $SCHOOLINGSTATUS = $row['SCHOOLINGSTATUS'];
     $HIGHESTLEVELOFEDUCATION = $row['HIGHESTLEVELOFEDUCATION'];
     $MARITALSTATUS = $row['MARITALSTATUS'];
     $EMPLOYMENTSTATUS = $row['EMPLOYMENTSTATUS'];
     $DISTRICT   = $row['DISTRICT'];
     $DIVISION = $row['DIVISION'];
     $PLACEOFRESIDENCE = $row['PLACEOFRESIDENCE'];
     $PHONECONTACT = $row['PHONECONTACT'];
     $MOTHERFIRSTNAME  = $row['MOTHERFIRSTNAME'];
     $MOTHERLASTNAME=$row['MOTHERLASTNAME'];
     $FATHERFIRSTNAME=$row['FATHERFIRSTNAME'];
     $FATHERLASTNAME=$row['FATHERLASTNAME'];
     $LIVINGWITH =$row['LIVINGWITH'];
     $HEAREDABOUTNTIHC=$row['HEAREDABOUTNTIHC'];
     $REGISTEREDBY=$row['REGISTEREDBY']; 
	 $RELIGION=$row['RELIGION']; 
	  $TRIBE=$row['TRIBE'];  
      } 
	 
     ?>
	 
	
    
    <form id="form1" class="form-horizontal" action=" " method="POST" style="height:auto; font-weight:normal;"> 
         <div class="col-sm-12">  <div class="panel-body">  
 
          <center> <b style="color:#000; font-weight:bold; font-size:12px;">HCT / GENERAL COUNSELLING CLIENT CARD </b> </center> 
          <br>
       
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
        <tr class="" style="font-weight:normal;">
        <th style="border-bottom-color:white;font-weight:normal; width:24%; border:0px;"> </th>
        <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
        <th style="border-bottom-color:white;font-weight:normal; width:24%; border:0px;"> </th>
         <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
		<th style="border-bottom-color:white;font-weight:normal; width:24%; border:0px;"> </th>
        <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>   
		<th style="border-bottom-color:white;font-weight:normal; width:24%; border:0px;"> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <th>
		
		 <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Client.No.</label>
                    <div class="col-sm-8">
                     <input type="text" name="NTIHCNO"  value="<?php echo $NTIHCNO;?>" 
					 readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%">
                </div>
                </div>
                <!-- /.form-group -->
				
         <div class="form-group">
                    <label for="text1" class="control-label col-sm-4">Vist.date</label>
                    <div class="col-sm-8">
                     <input type="date" name="DATECREATED"  value="<?php echo $DATECREATED;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%">
                </div>
                </div>
                <!-- /.form-group --> 

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">First.name</label>
                    <div class="col-sm-8">
                    <input type="text"    name="FIRSTNAME"  value="<?php echo $FIRSTNAME;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%">
                    </div>
                </div>
                <!-- /.form-group -->


                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Last.name</label>
                    <div class="col-sm-8">
                   <input type="text"   name="LASTNAME"  value="<?php echo $LASTNAME;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%">
                   </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Other.name</label>
                    <div class="col-sm-8">
                   <input type="text"   name="OTHERNAME"  value="<?php echo $OTHERNAME;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%">
                   </div>
                </div>
                <!-- /.form-group -->
 

         </th>
		 <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
         <td>
		 
                  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Age</label>
                    <div class="col-sm-7">
                    <input type="numeric" name="AGE1" id="AGE1"  value="<?php echo $AGE1;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%">
                   </div>
                </div>
                <!-- /.form-group --> 
		 
		  <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Gender</label>
                    <div class="col-sm-7">
                        <input type="text"  name="SEX" value="<?php echo $SEX;?>" 
						readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                    </div>
                </div>
                <!-- /.form-group -->

                  

               

 
			  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Schooling</label>
                    <div class="col-sm-7"> 
                    <input type="text"   name="SCHOOLINGSTATUS" value="<?php echo $SCHOOLINGSTATUS;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                   </div>
                   </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="text1" class="control-label col-sm-5">Education.level</label>
                    <div class="col-sm-7">
                      <input type="text"   name="HIGHESTLEVELOFEDUCATION" value="<?php echo $HIGHESTLEVELOFEDUCATION;?>" 
					   readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                    </div>
                </div>
                
                 <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-5">Tribe</label>
                    <div class="col-sm-7"> 
                              <input type="text"   name="TRIBE" value="<?php echo $TRIBE;?>" 
							  readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                   </div>
                </div>
                
              
		 </th>
		  <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
        <td>
  <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Religion</label>
                    <div class="col-sm-8"> 
                              <input type="text"   name="RELIGION" value="<?php echo $RELIGION;?>" 
							  readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                   </div>
                </div>
                
                 <!-- /.form-group -->
                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Marital.status</label>
                    <div class="col-sm-8"> 
                              <input type="text"   name="MARITALSTATUS" value="<?php echo $MARITALSTATUS;?>" 
							  readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                   </div>
                </div>
                
                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Employment</label>
                    <div class="col-sm-8"> 
                   <input type="text"   name="EMPLOYMENTSTATUS" value="<?php echo $EMPLOYMENTSTATUS;?>"
				   readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                   </div>
                </div>
                <!-- /.form-group -->


                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">District</label>
                    <div class="col-sm-8"> 
                   <input type="text"  name="DISTRICT" value="<?php echo $DISTRICT;?>" 
				   readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                   </div>
                </div>
                <!-- /.form-group -->
                

                <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Division</label>
                    <div class="col-sm-8"> 
			      <input type="text"  name="DIVISION" value="<?php echo $DIVISION;?>" readonly="readonly" 
				  style="font-weight:normal; background-color:#fff; width:100%"> 
                   </div>
                </div>
                <!-- /.form-group -->
              
                
             </td>
			  <th style="border-bottom-color:white;font-weight:normal; width:1%; border:0px;"> </th>  
			 <td>
			 
			  <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Residence</label>
                    <div class="col-sm-8">
                    <input type="text" name="PLACEOFRESIDENCE" id="PLACEOFRESIDENCE"   value="<?php echo $PLACEOFRESIDENCE;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%">
                   </div>
                </div>
                <!-- /.form-group -->

                 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Phone&nbsp;No.</label>
                    <div class="col-sm-8">
                    <input type="text" name="PHONECONTACT"  id="PHONECONTACT"   value="<?php echo $PHONECONTACT;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%">
                   </div>
                </div>
                <!-- /.form-group -->
                
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Mother&nbsp;name</label>
                    <div class="col-sm-8">
                    <input type="text" name="MOTHERFIRSTNAME" id="MOTHERFIRSTNAME"  value="<?php echo $MOTHERFIRSTNAME;?>"  
					readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                    
                    <input type="hidden" name="MOTHERLASTNAME"  id="MOTHERLASTNAME"   value="<?php echo $MOTHERLASTNAME;?>" 
					readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%">
                    
                   </div>
                </div>
                <!-- /.form-group -->
		 
		
		 <div class="form-group">
                    <label for="pass1" class="control-label col-sm-4">Father&nbsp;name</label>
                    <div class="col-sm-8">
                    <input type="text" name="FATHERFIRSTNAME" id="FATHERFIRSTNAME"  value="<?php echo $FATHERFIRSTNAME;?>"  
					style="font-weight:normal; background-color:#fff; width:100%"> 
                    
                    <input type="hidden" name="FATHERLASTNAME"  id="FATHERLASTNAME"   value="<?php echo $FATHERLASTNAME;?>" 
					style="font-weight:normal; background-color:#fff; width:100%"> 
                    
                   </div>
                </div>
                <!-- /.form-group -->
        
		 <div class="form-group" style="margin-top:-15px;">
                    <label for="pass1" class="control-label col-sm-4">Living&nbsp;with</label>
                    <div class="col-sm-8"> 
			      <input type="text"   name="LIVINGWITH" value="<?php echo $LIVINGWITH;?>"
				 readonly="readonly" style="font-weight:normal; background-color:#fff; width:100%"> 
                   </div>
                </div>
			 
			 </td>
    </tbody>
    </table></form>
 <hr />
	  </div> </div>
     
  <?php 
  $id =  $_GET['NTIHCNO'];   
  $HCTCID = '';  
  $DATECREATED = '';
  $NTIHCNO = '';   
  $PRE_TESTCOUSELLING_GIVEN = ''; 
  $COUNSELLED_AS = '';    
  $APPROACH = ''; 
  $HCT_ENTRYPOINT = '';    
  $EVERTESTEDBEFORE = ''; 
  $NUMBEROFTESTS = '';    
  $NUMBEROFSEXUALPARTNERS = ''; 
  $LAST_TESTRESULTS = '';    
  $SPOUSE_PARTNERTESTED_BEFORE = '';    
  $IFYES_RESULTS = ''; 
  $LAST_TESTRESULTS = '';  
  
  $CDFOUR = ''; 
  $CARE_LINK = '';  
  $COTRIMOXAZOLE_START = '';  
  $TB_SUSPICION = '';  
  $COUPLERESULTS = '';  
  $RECIEVEDASACOUPLE = '';  
  $RESULTSRECEIVED = ''; 
  
  $ACTIONTAKEN = '';  
  $COUNSELORSNAME = '';  
  $RECIEVEDDATE = '';  
  $SERVICEEXTENTION = '';  	 	     
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM hct_counselling_andtesting WHERE NTIHCNO = '$id'";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $HCTCID          = $row['HCTCID'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $PRE_TESTCOUSELLING_GIVEN = $row['PRE_TESTCOUSELLING_GIVEN'];
     $COUNSELLED_AS    = $row['COUNSELLED_AS']; 
	 $APPROACH = $row['APPROACH'];
     $HCT_ENTRYPOINT    = $row['HCT_ENTRYPOINT'];
	 $EVERTESTEDBEFORE = $row['EVERTESTEDBEFORE'];
     $NUMBEROFTESTS    = $row['NUMBEROFTESTS']; 
	 $NUMBEROFSEXUALPARTNERS = $row['NUMBEROFSEXUALPARTNERS'];
     $LAST_TESTRESULTS    = $row['LAST_TESTRESULTS']; 
	 $SPOUSE_PARTNERTESTED_BEFORE = $row['SPOUSE_PARTNERTESTED_BEFORE'];
     $IFYES_RESULTS    = $row['IFYES_RESULTS'];
	 $LAST_TESTRESULTS = $row['LAST_TESTRESULTS'];  
	 
	 $CDFOUR  = $row['CDFOUR']; 
	 $CARE_LINK      = $row['CARE_LINK'];   
     $COTRIMOXAZOLE_START  = $row['COTRIMOXAZOLE_START']; 
	 $TB_SUSPICION      = $row['TB_SUSPICION'];   
     $COUPLERESULTS  = $row['COUPLERESULTS']; 
	 $RECIEVEDASACOUPLE      = $row['RECIEVEDASACOUPLE'];   
     $RESULTSRECEIVED  = $row['RESULTSRECEIVED']; 
	  
	 $ACTIONTAKEN      = $row['ACTIONTAKEN'];   
     $COUNSELORSNAME  = $row['COUNSELORSNAME']; 
	 $RECIEVEDDATE      = $row['RECIEVEDDATE'];   
     $SERVICEEXTENTION  = $row['SERVICEEXTENTION'];   
      } 
     ?> 
	 
	 
	  
	 
	 
		<div class="col-sm-12">
		
		
			  <?php 
  $id =  $_GET['NTIHCNO'];    
  $CID = ''; 
  $CREATEDDATE = '';
  $VISTBY = '';   
  $dnx   = array();
  $fqx    = array();   
  $NTIHCNO = '';  
  $ACTION = '';   
  $USERINITIAL = '';  
  $BRIEF = '';  
  $COUNSELLING = '';   
  $USERINITIAL = '';
  $VISTTYPE = '';   
  $RSVNID = ''; 
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);
$date = date("Y-m-d").' 00:00:00'; 
 $sql  = "SELECT * FROM counsellingservices WHERE TIMESTAMP >='$date' AND NTIHCNO = '$id' GROUP BY DATECREATED ";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $CID          = $row['CID'];  
	 $DATECREATED      = $row['DATECREATED'];  
	 $VISTBY      = $row['VISTBY'];  
     $dnx[]    = $row['PROBLEM_CATEGORY']; 
	 $fqx[]    = $row['PROBLEM'];    
     $NTIHCNO  = $row['NTIHCNO'];
	 $ACTION = $row['ACTION'];
     $BRIEF    = $row['BRIEF']; 
	 $VISTTYPE = $row['VISTTYPE'];
	 $COUNSELLING    = $row['COUNSELLING']; 
	  $RSVNID    = $row['RSVNID']; 
	 $USERINITIAL    = $row['USERINITIAL']; 	 
      } 
     ?>
		
		
      
		 <form class="form-horizontal"  method="post" action="client_counselling_sudopro.php" 
	     style="height: auto;background-color:transparent;">
	     
		 <input type="hidden"  name="NTIHCNO" id="NTIHCNO"  value="<?php  echo $NTIHCNO; ?>">
		 
		 <input type="hidden"  name="RSVNID" id="RSVNID"  value="<?php  echo $RSVNID; ?>">
		  
		 <div class="col-sm-4">
		   
		    <table class="table" style="border:0px;">
              <tr>
			    <th style="width:25%;border:0px;">Service date </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED" 
				value="<?php  echo $DATECREATED; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th> 
</tr>
			  </table>
			 
			  <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr>
	            <th style="width:25%;border:0px;">Vist by </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="VISTBY" id="VISTBY" value="<?php  echo $VISTBY; ?>"    required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
              </tr>
			  </table>
              
              <table class="table-responsive" style="margin-top:-20px;"> 
            <table class="table" style="border:0px;">
              <tr>
              	 
	            <th style="width:25%;border:0px;">HCT vist </th>
				<th style="width:25%;border:0px;"> <input type="text"  name="VISTTYPE" id="VISTTYPE" 
				value="<?php  echo $VISTTYPE; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%"> 
		 
		  </th>  
              </tr>
			  </table>
   </div>
   <div class="col-sm-4">
	
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			  <td style="width:100%;border:0px; font-weight:bold;">Counselling notes</td>  
              </tr>
			  </table>							
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
				<th style="width:100%;border:0px;"> <textarea name="BRIEF" id="BRIEF" value=""   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%"><?php  echo $BRIEF; ?></textarea>  </th> 
				  </tr>
			  </table>
			  
			  </div>
			<div class="col-sm-4">	
			<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			  <td style="width:100%;border:0px; font-weight:bold;">Comment</td>  
              </tr>
			  </table>
			  
			<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<td style="width:100%;border:0px;">
         <textarea  name="COUNSELLING" id="COUNSELLING" value=""   
		 style="width:100%; font-weight:normal; background-color:#fff; width:100%"><?php  echo $COUNSELLING; ?></textarea>  </td>  
              </tr>
			  </table> 
			  	 
              
	  
	 
			</div> </div><div class="col-sm-12"> 
         <div class="col-sm-12" style="border:0px solid #fff;"> 
			<div class="col-sm-6"> 
			 <br />
			 
			
	   
		<legend style="color:#000; font-weight:bold; font-size:12px;">GENERAL COUNSELLING</legend>

		  <div id="dialog-window" style="background-color:transparent;height: 325px;">
   <div id="scrollable-content" style="background-color:transparent;"> 
   <ul>
  <div class=""  id="" style="margin-left: -41px;font-size:10px;">
    

		  <table class="table table-table table tabled" id="mytable2" style="font-weight:normal; background-color:transparent; ">
      <thead>
      <tr>  
       <th>*</th>
	   <th>COUSELLING TOPIC</th>
       <th>DESCRIPTION </th>   
      </tr>
      </thead>
      <tbody>
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($fqx[$s]);?>
                                                            <tr >
                                                  <td><input type="checkbox" checked="checked" /></td>
												    
												  
             <td> <input name="dnx[]"  type="text" value="<?php  echo $dnx[$s]; ?>" required="" 
												 style= "width:100%; background-color:#FFF; "/>
                                                 </td> 
												 
             <td> <input  name="fqx[]" type="text" value="<?php echo $fqx[$s]; ?>"  required="" 
												  style= "width:100%; background-color:#fff; "/></td> 
												   
                                                   
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
      
  </tbody>
  </table>  

  

  </div>
                                </div> 
                                </ul>
</div>

<div id="footer" style="text-align:left; border:0px;">
</div> 

<style>
#dialog-window {
  height: 200px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 200px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
height: 0px;
}
</style>  
         
			  
			 
			</div> 
			 
			
			<div class="col-sm-6">  
			 <br />
			 
			
			<div class="panel-body" style="    font-weight: normal; font-size: ;  width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
		  <legend style="color:#000; font-weight:bold; font-size:12px;">HCT-PRE TEST COUNSELLING</legend>
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			    <th style="width:65%;border:1px solid #fff;">Pre-Test Counselling done / information given </th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="PRE_TESTCOUSELLING_GIVEN" id="PRE_TESTCOUSELLING_GIVEN" 
				value="<?php  echo $PRE_TESTCOUSELLING_GIVEN; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				
				  </tr>
			  </table>
			    
			 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">Counselled as </th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="COUNSELLED_AS" id="COUNSELLED_AS" 
				value="<?php  echo $COUNSELLED_AS; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
				
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">HCT Entry Point</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="HCT_ENTRYPOINT" id="HCT_ENTRYPOINT" 
				value="<?php  echo $HCT_ENTRYPOINT; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
		
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">Have you ever Tested for HIV before?</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="EVERTESTEDBEFORE" id="EVERTESTEDBEFORE" 
				value="<?php  echo $EVERTESTEDBEFORE; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">How many times have you tested in the last 12 months</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="numeric"  name="NUMBEROFTESTS" id="NUMBEROFTESTS" 
				value="<?php  echo $NUMBEROFTESTS; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
				
				
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">Number of sexual partners in the last 12 months</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="NUMBEROFSEXUALPARTNERS" id="NUMBEROFSEXUALPARTNERS" 
				value="<?php  echo $NUMBEROFSEXUALPARTNERS; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">What was the test results last time you Tested?</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="LAST_TESTRESULTS" id="LAST_TESTRESULTS" 
				value="<?php  echo $LAST_TESTRESULTS; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:65%;border:1px solid #fff;">Has your Partner / Spouse been tested for HIV before?</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="SPOUSE_PARTNERTESTED_BEFORE" id="SPOUSE_PARTNERTESTED_BEFORE" 
				value="<?php  echo $SPOUSE_PARTNERTESTED_BEFORE; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
				
			<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
      <thead> 
      <tr> 
				<th style="width:65%;border:1px solid #fff;">If yes what were the results?</th>
				<th style="width:35%;border:1px solid #fff;"> <input type="text"  name="IFYES_RESULTS" id="IFYES_RESULTS" 
				value="<?php  echo $IFYES_RESULTS; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
				</div>
				
				</div></div>
				
				
   <div class="col-sm-12" style="border:0px solid #fff;">             
		  
	<div class="col-sm-6" style="border:0px solid #fff;">
		   
					            
					
	  <legend style="color:#000; font-weight:bold; font-size:12px;">HIV TEST</legend> 
   <?php 
   $id =  $_GET['NTIHCNO'];  
  $DATECREATED = '';
  $NTIHCNO = '';   
  $AGE1 = '';
  $AGE_GROUP = '';   
  $SEX = '';
  $NAME = '';   
  $REQUESTINGUNIT = '';   
  $REGISTERACCOUNT = '';
  $TESTEDBY = ''; 
  $TECHTITLE = '';  
  $LOTA = '';  $LOTB = '';  $LOTC = '';  $EXPIRYDATET1 = '';  $EXPIRYDATET2 = '';  $EXPIRYDATET3 = '';  
  $REACTIVITYT1 = '';  $REACTIVITYT2 = '';  $REACTIVITYT3 = '';  $FINALREACTIVITY = '';  
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM hivtests WHERE NTIHCNO = '$id' GROUP BY RSVNID DESC";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 $id  = $row['id']; 
     $RSVNID          = $row['RSVNID'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO']; 
	  
	 $AGE1          = $row['AGE1'];  
	 $AGE_GROUP      = $row['AGE_GROUP'];   
     $SEX  = $row['SEX']; 
	 $NAME    = $row['NAME'];  
	 $REQUESTINGUNIT      = $row['REQUESTINGUNIT'];   
     $REGISTERACCOUNT  = $row['REGISTERACCOUNT']; 
	 $TESTEDBY      = $row['TESTEDBY'];   
     $TECHTITLE  = $row['TECHTITLE']; 
	 
	 $LOTA      = $row['LOTA'];   
     $LOTB  = $row['LOTB']; 
	 $LOTC      = $row['LOTC'];   
     $EXPIRYDATET1  = $row['EXPIRYDATET1']; 
	 $EXPIRYDATET2      = $row['EXPIRYDATET2'];   
     $EXPIRYDATET3  = $row['EXPIRYDATET3']; 
	 $REACTIVITYT1      = $row['REACTIVITYT1'];   
     $REACTIVITYT2  = $row['REACTIVITYT2']; 
	 $REACTIVITYT3      = $row['REACTIVITYT3'];   
     $FINALREACTIVITY  = $row['FINALREACTIVITY']; 
	      
      } 
     ?>
	 
	 <input type="hidden" name="id" value="<?php echo $id;?>" /> 
	    			 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;"></th>
	 <th style="width:25%;border:0px;">HIV Test 1  </th> 
	 <th style="width:25%;border:0px;"> HIV Test 2  </th>   
     <th style="width:25%;border:0px;">HIV Test 3</th>  </th>
     </tr>
     <tr>  </tbody>  </table> 
	 
	  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Kit name</th>
	 <th style="width:25%;border:0px;">Determine </th> 
	 <th style="width:25%;border:0px;">Start Pack </th>   
     <th style="width:25%;border:0px;">Unigold</th>  </th>
     </tr>
     <tr>  </tbody>  </table> 
	 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Lot No </th>
	 <th style="width:25%;border:0px;"> <input type="text"  name="LOTA" id="LOTA"  value="<?php echo $LOTA;?>"
	   style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	  
     <th style="width:25%;border:0px;">  <input type="text"  name="LOTB" id="LOTB" value="<?php echo $LOTB;?>" 
	   style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	 
     <td style="width:25%;"><input type="text"  name="LOTC" id="LOTC" value="<?php echo $LOTC;?>" 
	   style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
     </tr>
     <tr>  </tbody>  </table> 
	 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Expiry date</th>
	 <th style="width:25%;border:0px;"> <input type="text" name="EXPIRYDATET1" id="EXPIRYDATET1" 
	 value="<?php echo $EXPIRYDATET1;?>"
	 style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	  
     <th style="width:25%;border:0px;"> <input type="text"  name="EXPIRYDATE2" id="EXPIRYDATE2" 
	 value="<?php echo $EXPIRYDATET2;?>"
	 style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	 
     <td style="width:25%;"><input type="text"  name="EXPIRYDATET3" id="EXPIRYDATET3" value="<?php echo $EXPIRYDATET3;?>" 
	 style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
     </tr>
     <tr>  </tbody>  </table> 
	 
	  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Reactivity</th>
	 <th style="width:25%;border:0px;"> <input type="text"  id="REACTIVITYT1" name="REACTIVITYT1"  value="<?php echo $REACTIVITYT1;?>" style="width:100%; font-weight:normal; background-color:transparent;">   </th> 
	  
     <th style="width:25%;border:0px;"> <input type="text"  id="REACTIVITYT2" name="REACTIVITYT2" value="<?php echo $REACTIVITYT2;?>"
	 required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th> 
	 
     <th style="width:25%;border:0px;"> <input type="text"  id="REACTIVITYT3" name="REACTIVITYT3" value="<?php echo $REACTIVITYT3;?>"
	 required="required" style="width:100%; font-weight:normal; background-color:transparent;">   </th>
     </tr>
     <tr>  </tbody>  </table>  
 
	 <br>
	 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:35%;border:0px;">Final reactivity </th>
	 <th style="width:65%;border:0px;"> <input type="text" name="FINALREACTIVITY" id="FINALREACTIVITY" 
	 value="<?php echo $FINALREACTIVITY;?>"
	 readonly="" style="width:100%; font-weight:normal; background-color:transparent;">  
                                </select> 
	 </th>  
     </tr> </tbody>  </table> 
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:35%;border:0px solid #fff;">Technician name</th>
				<th style="width:65%;border:0px solid #fff;"> <input type="text"  name="TECHNICIAN_NAME" id="TECHNICIAN_NAME" 
				value="<?php  echo $TESTEDBY; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:transparent; width:100%">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:35%;border:0px solid #fff;">Title</th>
				<th style="width:65%;border:0px solid #fff;"> <input type="text"  name="TITLE" id="TITLE" 
				value="<?php  echo $TECHTITLE; ?>"  readonly="readonly"
				required="required" style="width:100%; font-weight:normal; background-color:transparent; width:100%">  </th>  
				</tr>
			    </table>
				 
				</div> 
				 
				<div class="col-sm-6">
				 <BR />
			<div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
		  <legend style="color:#000; font-weight:bold; font-size:12px;">HCT-POST TEST COUNSELLING</legend>  
  
				 
				  
        <input type="hidden"  name="TESTSTATUS" id="TESTSTATUS" value="POST TEST COUNSELLING DONE">  
                  
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			    <th style="width:60%;border:1px solid #fff;">Results recieved </th>
				<th style="width:40%;border:1px solid #fff;"> <select  name="RESULTSRECEIVED" id="RESULTSRECEIVED" 
				value="<?php  echo $RESULTSRECEIVED; ?>"  readonly="readonly"
				 required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%"> 
                 <option value="<?php  echo $RESULTSRECEIVED; ?>"><?php  echo $RESULTSRECEIVED; ?></option>
                 <option>YES</option>
                  <option>NO</option>
                </select>
                 </th>  
				
				  </tr>
			  </table>
              
			  
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:60%;border:1px solid #fff;">As a couple </th>
				<th style="width:40%; border:1px solid #fff;"> <select  name="RECIEVEDASACOUPLE" id="RECIEVEDASACOUPLE" 
				value="<?php echo $RECIEVEDASACOUPLE; ?>"  required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  
                 <option value="<?php echo $RECIEVEDASACOUPLE; ?>"><?php echo $RECIEVEDASACOUPLE; ?> </option>
                 <option>YES</option>
                 <option>NO</option>
                 </select>
                </th>  
				</tr>
			    </table> 
                    
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:60%;border:1px solid #fff;">Couple results</th>
				<th style="width:40%;border:1px solid #fff;"> <select name="COUPLERESULTS" id="COUPLERESULTS" 
				value="<?php  echo $COUPLERESULTS; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%"> 
                 <option value="<?php  echo $COUPLERESULTS; ?>"><?php  echo $COUPLERESULTS; ?></option>
                 <option>CONCORDANT</option>
                 <option>DISCORDANT</option>
                 <option>NOT APPLICABLE</option>
                 </select>
                 </th>  
				</tr>
			    </table> 
                 
				 
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
         <thead>   <tr> 
				<th style="width:60%;border:1px solid #fff;">Is there suspicion of TB.(Current cough,fever,weight loss and night sweats) </th>
				<th style="width:40%;border:1px solid #fff;"> <select  name="TB_SUSPICION" id="TB_SUSPICION" 
				 value="<?php  echo $TB_SUSPICION; ?>"   
				 required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  
                 <option value="<?php echo $TB_SUSPICION; ?>"> <?php echo $TB_SUSPICION; ?> </option>
                 <option>YES</option>
                 <option>NO</option>
                 </select>
                </th>  
				</tr>  </table>
				
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
         <thead>   <tr> 
				<th style="width:60%;border:1px solid #fff;">Has client started Co-trimoxazole prophylasis dosage? </th>
				<th style="width:40%;border:1px solid #fff;"> <select  name="COTRIMOXAZOLE_START" id="COTRIMOXAZOLE_START" 
				value="<?php  echo $COTRIMOXAZOLE_START; ?>"  
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">
                 <option value="<?php echo $COTRIMOXAZOLE_START; ?>"> <?php echo $COTRIMOXAZOLE_START; ?> </option>
                 <option>YES</option>
                 <option>NO</option>
                 </select>
                  </th>  
				</tr>  </table>
       
     
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:60%;border:1px solid #fff;">Has client been linked care or any other service?</th>
				<th style="width:40%;border:1px solid #fff;"> <select  name="CARE_LINK" id="CARE_LINK" 
				value="<?php  echo $CARE_LINK; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%"> 
                <option value="<?php echo $CARE_LINK; ?>"> <?php echo $CARE_LINK; ?> </option>
                 <option>YES</option>
                 <option>NO</option>
                 </select>
                 </th>  
				</tr>
			    </table>
				
                
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:60%;border:1px solid #fff;">CD4 count results (If applicable)</th>
				<th style="width:40%;border:1px solid #fff;"> <input type="text"  name="CDFOUR" id="CDFOUR" 
				value="<?php  echo $CDFOUR; ?>"   
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
                 
                
		
        </div></div>
         <br>
		 
        <div class="col-sm-12"> 
		
		
		Action taken
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
        <th style="width:100%;border:0px;background-color:#fff;"> <textarea name="ACTIONTAKEN"   id="ACTIONTAKEN"  
         style="width:100%;" /><?php  echo $ACTIONTAKEN; ?> </textarea>    </th>     
              </tr>
        </table>
         <p></p>
		 
		 
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
          <th style="width:20%;border:0px;">Counsellor's Name </th>
        <th style="width:30%;border:0px;"> <input type="text" name="COUNSELORSNAME" id="COUNSELORSNAME" 
        value="<?php echo $nameofuser; ?>"  
        required="required" style="width:100%; font-weight:normal; background-color:#;">  </th> 
		 <th style="width:1%;border:0px;"></th>
         
        <th style="width:20%;border:0px;"> Results date </th>
        <td style="width:30%;border:0px;"> <input type="date" name="RECIEVEDDATE" id="RECIEVEDDATE" required=""  
        value="<?php echo $RECIEVEDDATE; ?>" style="width:100%; font-weight:normal; background-color:#;">  </td>
         <th style="width:1%;border:0px;"></th>
          </tr>
        </table>
        <p></p>
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
         
         <th style="width:20%;border:0px;">Other services</th>
         <td style="width:30%;border:0px;"> <select name="SERVICEEXTENTION" id="SERVICEEXTENTION" 
		  value="<?php echo $SERVICEEXTENTION; ?>"  required="required"
			  style="width:100%; font-weight:normal; background-color:#fff;">
			  <option value="<?php echo $SERVICEEXTENTION; ?>"><?php echo $SERVICEEXTENTION; ?></option>
			                                        <option> NOT REQUIRED </option>
			                                        <option> COUNSELLING</option>
                                                    <option> MEDICAL </option>
                                                    <option> PAC </option>
													<option> ANC</option>
                                                    <option> FP </option>
													<option> PNC</option>
                              	                    </select>   
													 </td> 
                                                      
		 
		 <td style="width:50%;border:0px;">
          <center> 
		<input type="submit" name="buttonsend" id="button" value="Save episode" style="border-radius:9px;"/>
		 </form>
           </center>  
         </td> 
        </td> 
        </tr>
        </table>
		 <br>
         
			 
                 
           
	        </div>  
	  
	  </div></div></div>
      </div></div></div>
        
       
                                </div>
                         </div></div>
                         
                         
         
                          
                         </div>
                    </div>
    <!-- /.content -->
  </div>
 <!-- /.content-wrapper -->
  <div class="col-sm-12" style="height:40px; background-color:#fff;"  >
  <!-- Control Sidebar -->
   

<!-- jQuery 2.2.3 --> 
 
<script src="assets/lib/moment/moment.min.js"></script>
<script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
<!-- Page script -->
  
</body>
</html>
  <script>

          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/counsellingvists.php',
                       success : function(data){
                                $('#counsellingvists').html(data);
                                 }
               });
               }, 2000);

          </script>

<script> 

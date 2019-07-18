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
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Pending outreach entries
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
              </ul>
              <div class="tab-content" style="background-color:transparent;">
              <div class="tab-pane active" id="tab_1-1" style="background-color:transparent;"> 
          
			<table id="example01" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
        <thead>
        <tr>   
                  
		             <th style="background-color:transparent;">DATE</th>
					 <th style="background-color:transparent;">NTIHC.NO</th>
                     <th style="background-color:transparent;">CLIENT&nbsp;NAME</th>  
                     <th style="background-color:transparent;">ACTION</th>  
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
document.getElementById("myRSVNID").value=dtsxxcq[5]; 
}
</script>    
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='OUTREACH' AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsxxcq = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['RSVNID']."***".$res['DATECREATED'];
		echo "<tr>"; 
		echo "<td>".$res['DATECREATED']."</td>"; 
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>";    
		 echo "<td><a href=\"counsellingroom_hist_outreach.php?NTIHCNO=$res[NTIHCNO]\">Add HCT details</a>  </td>";      	
	}
	   
    ?>
	</tbody>
    </table> 
          
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2" style="background-color:transparent;"> 
                
              
               </div>
              <!-- /.tab-pane -->
               
            </div> 
          </div> 
		                
        </div> 
         <div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
        
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
  $RSVNID = '';  
  $CLIENTNAME = '';  
  $AGE_GROUP = ''; 
  $SCHOOLING = ''; 
  $SEX = ''; 
  $AGE1 = ''; 
  $INSVCSTATUS = '';  	 	     
  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "patientmgt";

 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cmpatientsregistration WHERE NTIHCNO = '$id'";
  
 $res = $conn->query($sql);

     while($row=$res->fetch_assoc()){
	 
     $RID          = $row['RID'];  
	 $DATECREATED      = $row['DATECREATED'];   
     $NTIHCNO  = $row['NTIHCNO'];
	 $RSVNID = $row['RSVNID'];
     $CLIENTNAME    = $row['CLIENTNAME']; 
	 $AGE1 = $row['AGE1'];  
	 $INSVCSTATUS = $row['INSVCSTATUS']; 
	  $AGE_GROUP    = $row['AGE_GROUP']; 
	  $SCHOOLING = $row['SCHOOLING']; 
	  $SEX = $row['SEX'];   
      } 
     ?> 
	 
	 
	  
	 
	 
		 <div class="col-sm-12" >
		  
		 <form class="form-horizontal"  method="post" action="client_counselling_sudoptc.php" 
	     style="height: auto;background-color:transparent;">
	     
		 <input type="hidden"  name="NTIHCNO" id="NTIHCNO"  value="<?php  echo $NTIHCNO; ?>">
		 
		 <input type="hidden"  name="RSVNID" id="RSVNID"  value="<?php  echo $RSVNID; ?>">
		   	     
		 <input type="hidden" name="SEX" id="SEX"  value="<?php echo $SEX; ?>"> 
		 
		 <input type="hidden" name="RID" id="RID"  value="<?php echo $RID; ?>"> 
		 
		 <input type="hidden"  name="CLIENTNAME" id="CLIENTNAME"  value="<?php  echo $CLIENTNAME; ?>">
		 
		 <input type="hidden"  name="AGE_GROUP" id="AGE_GROUP"  value="<?php  echo $AGE_GROUP; ?>">
		   	     
		 <input type="hidden" name="SCHOOLING" id="SCHOOLING"  value="<?php echo $SCHOOLING; ?>"> 
		 
		    
		  <div class="col-sm-6">
		   
		     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
    <thead>  <tr> 
        <th style="width:30%;border:0px;">Service Date </th> 
		   <th style="width:70%;border:0px;"> 
		<input type="date" name="DATECREATED" id="DATECREATED" value="<?php echo date('d-m-y'); ?>" 
        required="required"  style="width:100%; font-weight:normal; background-color:transparent; height:20px;">  </th> 
        </tr>
        </table>
        <p></p>
        
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
        <?php include('addin_js/client_medical_vb.js'); ?> 
         
              <th style="width:30%;border:0px;">Vist by </th>
        <th style="width:70%;border:0px;"> <select  name="VISTBY" id="cboOptions" onChange="showDiv('div',this)"
        required="" style="width:100%; font-weight:normal; background-color:transparent;"> 
                                      <option value="1"> </option>
                                      <option value="SELF">SELF</option>
									  <option value="COUPLE">COUPLE</option>
                                      <option value="ESCORTED">ESCORTED</option> 
                                      </select>      
        </th>  
        </tr>
        </table>
        <p></p>
        
          <div id="div1" class="text" style="display:none;">  </div>
		  <div id="divSELF" class="text" style="display:none;">  </div>
		  <div id="divCOUPLE" class="text" style="display:none;">  </div>
		  <div id="divESCORTED" class="text" style="display:none;"> 
           
		  <P></P>         
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr>  
          
           <th style="width:30%; text-align:left; border:0px;color:#d70000;">Specify</th>
           <th style="width:70%; text-align:left;border:0px;">
           <select  name="ESCORTEDBY" id="ESCORTEDBY" 
           style="text-transform: uppercase; width:100%; background-color:transparent;width:100%; font-size:11px;" />
		   <option></option>
		   <option>MOTHER</option>
		   <option>FATHER</option>
		   <option>UNCLE</option>
		   <option>AUNT</option>
		   <option>GRAND PARENT</option>
		   <option>BROTHER</option>
		   <option>SISTER</option>
		   <option>GUARDIAN</option>
		   <option>TEACHER</option>
		   <option>SCHOOL MATRON</option>
		   <option>SENIOR MAN</option>
		   <option>SENIOR WOMAN TEACHER</option>
		   <option>FRIEND</option>
		   <option>HUSBAND</option>
		   <option>WIFE</option>
		   <option>BOY FRIEND</option>
		   <option>GIRL FRIEND</option> 
		   </select>
		   
         </th> 
         </tr>             
         </table>    
         </div>  <P></P>
        
        
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%">
          <thead> 
          <tr> 
			  <th style="width:30%;border:0px;">HCT Vist</th>
        <th style="width:70%;border:0px;"> <select  name="VISTTYPE" id="VISTTYPE"  
        required="required" style="width:100%; font-weight:normal; background-color:transparent;"> 
                                      <option></option>
                                     <option>1st TIME TESTER</option>
                                     <option>RETESTER</option> 
                                     </select>       
        </th>  
                </tr>
          </table>
        <p></p>
   </div>
   <div class="col-sm-6">
	
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
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">
				</textarea>  </th> 
				  </tr>
			  </table>
			  
			  
	  
	 
			</div> 
			</div>
			 
		 
		  
			<div class="col-sm-12"> 
			 
			<div class="col-sm-6">  
			 <br />
			 
			 
		  <legend style="color:#000; font-weight:bold; font-size:12px;">PRE TEST COUNSELLING</legend>
		   
        
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Pre-Test Counselling done / information given</td> 
          <td style="width:30%;border:0px;">
          <select  name="PRE_TESTCOUSELLING_GIVEN" id="PRE_TESTCOUSELLING_GIVEN"  
           style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>NO</option>
                                     <option>YES</option> 
                                     </select>       
           </th>    </tr>  </table>  
        
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Counselled as </td> 
          <td style="width:30%;border:0px;">
          <select  name="COUNSELLED_AS" id="COUNSELLED_AS"  
           style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>INDIVIDUAL</option>
                                     <option>COUPLE</option> 
                                     <option>GROUP</option>
                                     </select>       
           </th>    </tr>  </table>  
            
            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr> 
        <th style="width:70%;border:0px;">HCT Entry Point</th>
        <th style="width:30%;border:0px;"> <select  name="HCT_ENTRYPOINT" id="HCT_ENTRYPOINT" 
         style="width:100%; font-weight:normal; background-color:transparent;"> 
                 <option value="-1"> </option>
                                <option>FACILITY BASED</option>
                                <option>WORK PLACE</option>
                                <option>HBHCT</option>
                                <option>FOR PREGNANT</option>
                                <option>PMTCT</option>
                                <option>PEP</option>
                                <option>CIRCUMCISION (SMC)</option>
                                <option>MARPS</option>
                                <option>OUTREACH</option>
                                </select>
        </th>  
        </tr>
        </table> 
        
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Have you ever Tested for HIV before? </td> 
          <td style="width:30%;border:0px;">
          <select  name="EVERTESTEDBEFORE" id="EVERTESTEDBEFORE"  
            style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>YES</option>
                                     <option>NO</option>  
                                     </select>       
           </th>    </tr>  </table>  
            
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">How many times have you tested in the last 12 months. </td> 
          <td style="width:30%;border:0px;">
          <input type="numeric"  name="NUMBEROFTESTS" id="NUMBEROFTESTS"  
           style="width:100%; font-weight:normal; background-color:transparent;">         
           </th>    </tr>  </table>  
            
           <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Number of sexual partners in the last 12 months. </td> 
          <td style="width:30%;border:0px;">
          <input type="numeric"  name="NUMBEROFSEXUALPARTNERS" id="NUMBEROFSEXUALPARTNERS"  
           style="width:100%; font-weight:normal; background-color:transparent;">         
           </th>    </tr>  </table>  <p></p>
           
          <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">What was the test results last time you Tested?.</td> 
          <td style="width:30%;border:0px;">
          <select  name="LAST_TESTRESULTS" id="LAST_TESTRESULTS"  
            style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>NEGATIVE</option>
                                     <option>POSITIVE</option>  
                                     </select>       
           </th>    </tr>  </table> <p></p>
            
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">Has your Partner / Spouse been tested for HIV before?</td> 
          <td style="width:30%;border:0px;">
          <select  name="SPOUSE_PARTNERTESTED_BEFORE" id="SPOUSE_PARTNERTESTED_BEFORE"  
           style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>NO</option>
                                     <option>YES</option>  
                                     </select>       
           </th>    </tr>  </table> 
            
             <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; text-align:left;border: 0px;" width="100%"> 
          <thead>   <tr>
          <td style="width:70%;border:0px;font-weight:normal;">If yes what were the results?</td> 
          <td style="width:30%;border:0px;">
          <select  name="IFYES_RESULTS" id="IFYES_RESULTS"  
         style="width:100%; font-weight:normal; background-color:transparent;"> 
                                     <option></option>
                                     <option>NEGATIVE</option>
                                     <option>POSITIVE</option>  
                                     <option>DO NOT KNOW</option> 
                                     </select>       
           </th>    </tr>  </table> <p></p>
           
			 
				 </div>
	<div class="col-sm-6" style="border:0px solid #fff;">
		   <br>
					            
					
	  <legend style="color:#000; font-weight:bold; font-size:12px;">HIV TESTING</legend> 
      
     
	    			 
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
	 <th style="width:25%;border:0px;"> <input type="text"  name="LOTA" id="LOTA" value="N/A"  
	  readonly="" style="width:100%; font-weight:normal; background-color:#ecf0f5;">    </th> 
	  
     <th style="width:25%;border:0px;">  <input type="text"  name="LOTB" id="LOTB"  value="N/A"
	  readonly="" style="width:100%; font-weight:normal; background-color:#ecf0f5;">   </th> 
	 
     <td style="width:25%;"><input type="text"  name="LOTC" id="LOTC"  value="N/A"
	  readonly="" style="width:100%; font-weight:normal; background-color:#ecf0f5;">    </th> 
     </tr>
     <tr>  </tbody>  </table> 
	 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Expiry date</th>
	 <th style="width:25%;border:0px;"> <input type="text" name="EXPIRYDATET1" id="EXPIRYDATET1" value="N/A" 
	 readonly="" style="width:100%; font-weight:normal; background-color:#ecf0f5;">    </th> 
	  
     <th style="width:25%;border:0px;"> <input type="text"  name="EXPIRYDATE2" id="EXPIRYDATE2" value="N/A"  
	 readonly="" style="width:100%; font-weight:normal; background-color:#ecf0f5;">    </th> 
	 
     <td style="width:25%;"><input type="text"  name="EXPIRYDATET3" id="EXPIRYDATET3" value="N/A" 
	 readonly="" style="width:100%; font-weight:normal; background-color:#ecf0f5;">    </th> 
     </tr>
     <tr>  </tbody>  </table> 
	 
	  <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:25%;border:0px;">Reactivity</th>
	 <th style="width:25%;border:0px;"> <input type="text"  id="REACTIVITYT1" name="REACTIVITYT1" value="N/A" 
	  readonly="" style="width:100%; font-weight:normal; background-color:#ecf0f5;">   </th> 
	  
     <th style="width:25%;border:0px;"> <input type="text"  id="REACTIVITYT2" name="REACTIVITYT2" value="N/A"  
	  readonly="" style="width:100%; font-weight:normal; background-color:#ecf0f5;">   </th> 
	 
     <th style="width:25%;border:0px;"> <input type="text"  id="REACTIVITYT3" name="REACTIVITYT3" value="N/A" 
	  readonly="" style="width:100%; font-weight:normal; background-color:#ecf0f5;">     </th>
     </tr>
     <tr>  </tbody>  </table>  
 
	 <br>
	 
	 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	
	 text-align:left; border:0px; background-color:transparent;" width="100%">
	 <thead> <tr>
     <th style="width:35%;border:0px;">Final reactivity </th>
	 <th style="width:65%;border:0px;"> <select name="FINALREACTIVITY" id="FINALREACTIVITY" value="N/A" 
	 required="" style="width:100%; font-weight:normal; background-color:transparent;"> 
	  <option></option>
	  <option>POSITIVE</option>
	  <option>NEGATIVE</option>
	  </select> 
                                 
	 </th>  
     </tr> </tbody>  </table> 
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:35%;border:0px solid #fff;">Tested by</th>
				<th style="width:65%;border:0px solid #fff;"> <input type="text"  name="TECHNICIAN_NAME" id="TECHNICIAN_NAME" 
			   style="width:100%; font-weight:normal; background-color:transparent; width:100%">  </th>  
				</tr>
			    </table>
				
				<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
				<th style="width:35%;border:0px solid #fff;">Title</th>
				<th style="width:65%;border:0px solid #fff;"> <input type="text"  name="TITLE" id="TITLE" 
				 style="width:100%; font-weight:normal; background-color:transparent; width:100%">  </th>  
				</tr>
			    </table>
				 
				</div> </div> 
				<div class="col-sm-12"> 
				<div class="col-sm-6">
				 <BR />
			<div class="panel-body" style="font-weight: normal; width: 100%;   
          background-color: transparent; border: 1px solid rgb(222, 212, 211); box-shadow: 3px 2px 0px 0px rgba(12, 12, 12, 0.1) !important; border-radius: 11px;">
		  <legend style="color:#000; font-weight:bold; font-size:12px;">POST TEST COUNSELLING</legend>  
   
        <input type="hidden"  name="TESTSTATUS" id="TESTSTATUS" value="OUT REACH TEST DONE">  
                  
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
			    <th style="width:60%;border:1px solid #fff;">Results recieved </th>
				<th style="width:40%;border:1px solid #fff;"> <select  name="RESULTSRECEIVED" id="RESULTSRECEIVED" 
				  required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%"> 
                  <option ></option>
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
				  required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  
                 <option> </option>
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
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%"> 
                 <option></option>
                 <option>CONCORDANT</option>
                 <option>DISCORDANT</option>
                 </select>
                 </th>  
				</tr>
			    </table> 
                 
				 
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
         <thead>   <tr> 
				<th style="width:60%;border:1px solid #fff;">Is there suspicion of TB.(Current cough,fever,weight loss and night sweats) </th>
				<th style="width:40%;border:1px solid #fff;"> <select  name="TB_SUSPICION" id="TB_SUSPICION"  
				 required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  
                 <option> </option>
                 <option>YES</option>
                 <option>NO</option>
                 </select>
                </th>  
				</tr>  </table>
				
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
         <thead>   <tr> 
				<th style="width:60%;border:1px solid #fff;">Has client started Co-trimoxazole prophylasis dosage? </th>
				<th style="width:40%;border:1px solid #fff;"> <select  name="COTRIMOXAZOLE_START" id="COTRIMOXAZOLE_START" 
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">
                 <option> </option>
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
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%"> 
                <option> </option>
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
				required="required" style="width:100%; font-weight:normal; background-color:#fff; width:100%">  </th>  
				</tr>
			    </table>
                 
                
		
        </div>  </div>
         
		 
        <div class="col-sm-6"> 
		
		
		Action taken
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr>  
        <th style="width:100%;border:0px;background-color:#fff;"> <textarea name="ACTIONTAKEN"   id="ACTIONTAKEN"  
         style="width:100%;" /> </textarea>    </th>     
              </tr>
        </table>
         <p></p>
		  
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
          <th style="width:35%;border:0px;">Counsellor's Name </th>
        <th style="width:65%;border:0px;"> <input type="text" name="COUNSELORSNAME" id="COUNSELORSNAME" 
        value="<?php echo $nameofuser; ?>"  
        required="required" style="width:100%; font-weight:normal; background-color:#;">  </th> 
		 <th style="width:1%;border:0px;"></th>
         </tr></thead>
        </table> 
		 
		 
	 <table border="1" cellpadding="4" cellspacing="0" 
	 style="font-family: arial; font-size: 11px;border: 0px;	text-align:left;" width="100%">
		<thead> 
		<tr> 
        <th style="width:35%;border:0px;"> Results date </th>
        <td style="width:65%;border:0px;"> <input type="date" name="RECIEVEDDATE" id="RECIEVEDDATE" required=""  
        value=" " style="width:100%; font-weight:normal; background-color:#;">  </td>
         <th style="width:1%;border:0px;"></th>
          </tr></thead>
        </table>
		
        <p></p>
		
          
		  <br>
          <center><input type="submit" name="button" id="button" value="Save" 
		  style="font-size:15px; border-radius:11px;"/> </center>  
		  </form>
           </center>  
          
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

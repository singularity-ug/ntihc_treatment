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
     $('#example01').DataTable( {
    "iDisplayLength": 30,
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
     $('#examplecc').DataTable( {
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
    border-top: 1px solid #000;
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
                 border: 1px solid #000;
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
<body class="hold-transition skin-blue sidebar-mini" style="background:url(assets/img/pattern/4326703-white-background-wallpapero.jpg);">
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
           
      
		<br>
							   
        <table id="example01" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
        <thead>
        <tr> 
		      <th>VIST&nbsp;DATE</th>
			  <th>DATA&nbsp;TYPE</th>
			  <th>CLIENT&nbsp;NAME</th> 
			  <th>NTIHC&nbsp;NO.</th> 
              <th>AGE</th>
			  <th>HCT</th>
			  <th>LAB&nbsp;VIST</th>
			  <th>GENERAL&nbsp;(C)</th>
			  <th>SERVICE&nbsp;PROVIDER</th> 
              <th>LAB&nbsp;TECHNICIAN</th> 
              <th style="text-align:center;">ACTION</th> 
			  <th style="text-align:center;">RESULTS</th>     
           </tr>
         
        </tfoot> 
        <tbody> 
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';  
     
$result = mysqli_query($mysqli, "SELECT * FROM cmpatientsregistration WHERE TESTSTATUS ='COMPLETED' AND HCT ='1' AND LABVIST ='1'
                                          GROUP BY NTIHCNO ORDER BY DATECREATED ASC ");
  
	while($res = mysqli_fetch_array($result)) {
	$dtsget = $res['DATECREATED']."***".$res['NTIHCNO']."***".$res['NTIHCNO']."***".$res['DATECREATED'];
		echo "<tr>";  
		echo "<td>".$res['DATECREATED']."</td>";
		echo "<td>".$res['DATATYPE']."</td>"; 
		echo "<td>".$res['CLIENTNAME']."</td>";  
		echo "<td>".$res['NTIHCNO']."</td>"; 
		echo "<td>".$res['AGE1']."</td>"; 
		echo "<td>".$res['HCT']."</td>"; 
		echo "<td>".$res['LABVISTSDONE']."</td>"; 
		echo "<td>".$res['GENERALCOUNSELLING']."</td>"; 
		echo "<td>".$res['SERVICEPROVIDER']."</td>"; 
		echo "<td>".$res['TECHNICIANNAME']."</td>";   
		echo "<td><a href=\"counsellingroom_hist_episode.php?NTIHCNO=$res[NTIHCNO]\">UPDATE</a>  </td>";  
		echo "<td><a href=\"medical/print_hctresults.php?NTIHCNO=$res[NTIHCNO]\">PRINT</a>  </td>";     	
	}
	   
    ?>
	</tbody>
  </table>  
  
            
	  
	  </div></div></div>
         
         
       
        </div> </div>
              </div> 
                 
                   
   
   
    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: 1000px; margin-left: -220px;">
                                        <div class="modal-header" style="background-color:transparent;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 
      
           <div class=""  id="getvist" >  </div>
                <script>

          function getvistdata(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/getepisode_counselling.php?q='+odno,
                       success : function(data){
                                $('#getvist').html(data);
                $("#impres2").modal("show");
                                 }
               });
               }

          </script>
           <div class="col-sm-12">
           <BR>
 

       
         </div>


                                        </div> 
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>
 
    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 
      
           <div class=""  id="pettyview" >  </div>
                <script>

          function getstuff(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/getepisode2.php?q='+odno,
                       success : function(data){
                                $('#pettyview').html(data);
                $("#impres").modal("show");
                                 }
               });
               }

          </script>
           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>
 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div>
                         
                         
                            
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 
      
           <div class=""  id="getresults" >  </div>  
                <script>

          function gettestresults(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/getresults2.php?q='+odno,
                       success : function(data){
                                $('#getresults').html(data);
                $("#impres4").modal("show");
                                 }
               });
               }

          </script>
           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>

         </form> 
         </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                         </div></div> 
                         
                         
                                
                 
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="imp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">
 <form>
      
           <div class=""  id="getallhistory" >  </div> 
                <script>

          function getallhistory(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/medical_gethist.php?q='+odno,
                       success : function(data){
                                $('#getallhistory').html(data);
                $("#imp").modal("show");
                                 }
               });
               }

          </script>
           <div class="col-sm-12">
           <BR>

        <p style="text-transform: ; text-align:left; font-weight:bold;">  </p>

         </form> 
         </div>
     
                          
                         </div>
                    </div>
    <!-- /.content -->
  </div>
 <!-- /.content-wrapper -->
  <div class="col-sm-12" style="height:40px; background-color:transparent;"  >
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

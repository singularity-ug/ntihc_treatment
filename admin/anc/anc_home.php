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
  <title>Ntihc | imm system</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
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

function pop(dat){
  $("#res").html("");
  var data = dat.split("__");
  $("#"+data[0]).val(data[1]);

  var num = data[0].substring(3);

  $("#DRUGNAME"+num).val(data[2]);
  $("#INSTOCK").val(data[2]);
  $("#UNITOFMEASURE").val(data[3]);
  $("#ESTIMATEDUNITCOST").val(data[4]); 
}

function domee(ths){

  var bd   = ths.value;
  var idxx = ths.id;
  if (bd==='') {   $("#res").html("");  }

  else{
  var dataString = "bd="+bd+"&id="+idxx;
  $.ajax({
  type: "POST",
  url: "anc_searchdrug.php",
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
     $('#exdynam').DataTable( {
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
     $('#app1').DataTable( {
    "iDisplayLength": 3,
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
     $('#app2').DataTable( {
    "iDisplayLength": 3,
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
     $('#app02').DataTable( {
    "iDisplayLength": 3,
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
     $('#app03').DataTable( {
    "iDisplayLength": 3,
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
     $('#app3').DataTable( {
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
     $('#app4').DataTable( {
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
     $('#exdrug').DataTable( {
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
     $('#example6').DataTable( {
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
             background-color:transparent;
             }
             table tr:nth-child(even) {
             background-color:transparent;
             }

</style>

<body class="hold-transition skin-blue sidebar-mini" style="background:url(../../assets/img/pattern/37734511-light-wallpaper.jpg);"> 
   
 <?php
  require('config.php');
  ?>
   </header>
 <div class="col-md-12">
      <div class="row"> 
        <div class="col-md-3">
      
     
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:33.3333%; border: 0px;"> <a href="../../client_management.php">  
       <center><img src="../../assets/imgx/index.png"width="100" height="100" class="img-circle" style="border: 0px solid #ecf0f5; height:40px; width:40px;"> 
        Dashboard</center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
   
     <td style="width:33.3333%; border: 0px;"> <a href="anc_home.php?d1=0&d2=0"> 
       <center><img src="../../assets/imgx/indexsssssss.png"width="100" height="100" class="img-circle" style="border: 0px solid #ecf0f5; height:50px; width:50px;"> 
        Real&nbsp;time </center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
     
   <td style="width:33.3333%; border: 1px;">  <a href="anc_home_pending.php">
       <center><img src="../../assets/imgx/imagesffffffff.png"width="100" height="100" class="img-circle" style="border: 0px solid #ecf0f5; height:50px; width:50px;"> 
        Pending&nbsp;</center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
    
   <td style="width:33.3333%; border: 1px;">  <a href="anc_home_history.php">
       <center><img src="../../assets/imgx/ttttttttt.jpg"width="100" height="100" class="img-circle" style="border: 0px solid #ecf0f5; height:50px; width:50px;"> 
        History </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>  
 </tbody>
 </table> 
 
 
    
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:33.3333%; border: 1px;"> <a href="../reports/anc_general.php?d1=0&d2=0">  
       <center><img src="../../assets/imgx/kkk.png"width="100" height="100" class="img-circle" style="border: 0px solid #ecf0f5; height:50px; width:50px;"> 
        Reports&nbsp;</center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>


      <td style="width:33.3333%; border: 1px;">  <a href="anc_tally_tool.php?d1=0&d2=0">  
       <center><img src="../../assets/imgx/indexreewss.png"width="100" height="100" class="img-circle" style="border: 0px solid #ecf0f5; height:50px; width:50px;"> 
       ANC&nbsp;Tool </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>  
  
   <td style="width:33.3333%; border: 1px;">  <a href="../reports/art_tool.php?d1=0&d2=0">  
       <center><img src="../../database icons/clients.jpg"width="100" height="100" class="img-circle" style="border: 0px solid #ecf0f5; height:50px; width:50px;"> 
       ART&nbsp;Tool </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
   
     <td style="width:33.3333%; border: 1px;">  <a href="../../index.php">
       <center><img src="../../assets/imgx/logout-button-hi.png"width="100" height="100" class="img-circle" style="border: 0px solid #ecf0f5; height:50px; width:50px;"> 
        Logout </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>  
    
  
 </tbody>
 </table> 
 
 
    </div>
    
     <div class="col-md-9" style="background-color:transparent;"> 
     <br>
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:10%; border: 0px;">  
        <img src="../../assets/img/ntihclog2.png"width="100" height="100" style="border: 0px; background-color:transparent;"> 
          
    </td>
   
     <td style="width:80%; border: 0px;">  
   <center style="color:#000; font-weight:bold; font-size:12px;font:bold 18px 'Aleo'; text-shadow:1px 1px 6px #000; color:#fff;background-color:transparent;">I.M.M SYSTEM</center><BR>
   <center style="color:#000; font-weight:bold; font-size:12px;background-color:transparent;">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</center> <br> 
   <center style="color:#000; font-weight:bold; font-size:12px;background-color:transparent;">ANTENATAL MODULE</center> 
    </td> 
    
   <td style="width:10%; border: 1px;">  
    </td>  
 </tbody>
 </table> 
     
  
  
  
    </div> </div>
    
       <div class="col-md-12" > 
 
               <div class=""  id="demog" >  </div>
                     <script> 
               function demog(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_select.php?q='+odno,
                            success : function(data){
                                     $('#demog').html(data);
                    $("#provoo").modal("show");
                                      }
                    });
                    } 
               </script>
               
               
          
          
           <div class=""  id="newclient" >  </div>
                     <script>

               function newclient(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_newrecord.php?q='+odno,
                            success : function(data){
                                     $('#newclient').html(data);
                    $("#provoo").modal("show");
                                      }
                    });
                    }

               </script>     
               
               <div class=""  id="progress">  </div>
                     <script>

               function progress(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_progress.php?q='+odno,
                            success : function(data){
                                     $('#progress').html(data);
                    $("#provoo").modal("show");
                                      }
                    });
                    }

               </script>   
   
       
     <div class=""  id="obstetric" >  </div>
                     <script>

               function obstetric(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_obstetric.php?q='+odno,
                            success : function(data){
                                     $('#obstetric').html(data);
                    $("#proviewx").modal("show");
                                      }
                    });
                    }

               </script>
               
               
                <div class=""  id="hivtesting" >  </div>
                     <script>

               function hivtesting(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_hivtests.php?q='+odno,
                            success : function(data){
                                     $('#hivtesting').html(data);
                    $("#proeee").modal("show");
                                      }
                    });
                    } 
               </script>
         
         
          <div class=""  id="fuckrqt" >  </div>
                     <script>

               function fuckrqt(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_labrqt.php?q='+odno,
                            success : function(data){
                                     $('#fuckrqt').html(data);
                    $("#proeee").modal("show");
                                      }
                    });
                    } 
               </script>

   <div class=""  id="hcgex" >  </div>
               <script> 
               function hcgex(jose){
               var odno = ((jose.split("__")[1]).split("***"))[1];
               $.ajax({
                            type    : 'POST',
                            url     : 'anc_hcgex.php?q='+odno,
                            success : function(data){
                                     $('#hcgex').html(data);
                    $("#proxy1").modal("show");
                                      }
                    });
                    } 
                    </script>
			   
			    <div class=""  id="artex" >  </div>
                <script>

                function artex(jose){
                var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_artex.php?q='+odno,
                            success : function(data){
                                     $('#artex').html(data);
                    $("#proxy2").modal("show");
                                      }
                    });
                    } 
               </script>
           
        <div class=""  id="medix" >  </div>
                     <script>

               function medix(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'anc_medical.php?q='+odno,
                            success : function(data){
                                     $('#medix').html(data);
                    $("#provoomef").modal("show");
                                      }
                    });
                    }

               </script>  
           
           <table id="exdynam" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;margin-top: -18px; ">  
                 <thead>
                 <tr>
                     <th >DATE</th>
                     <th >NTIHC.NO.</th>
                     <th>NAME</th>
                     <th>AGE</th>
                     <th >VIST</th> 
                     <th style="text-align:center;">ANC DEMOGRAPHY</th>
                     <th style="text-align:center;">OBSTETRIC HISTORY</th>
                     <th style="text-align:center;">PROGRESS EXAMINATION</th>
                     <th style="text-align:center;"><center>ACTION</center></th> 
                     <th style="text-align:center;"><center>ART</center></th>
                     <th>TREATMENT</th>
          
        </tr>
        </tfoot>
        <tbody>

    <script>
function postclient(myid){
var dts = myid.split("***");
document.getElementById("myNTIHCNO").value=dts[0];
document.getElementById("myID").value=dts[1];
document.getElementById("myAGE1").value=dts[2];
document.getElementById("myAGEGP").value=dts[3];
}
</script>


<?php
include_once("configpatientmgtdb.php");
$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' 
  AND SERVICETYPE ='PREGNANCY RELATED SERVICES' 
  AND MATERNALHEALTHSERVICE='ANC'AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ORDER BY TIMESTAMP");

  while($res = mysqli_fetch_array($result)) {
  $dts = $res['RID']."***".$res['NTIHCNO']."***".$res['AGE1']."***".$res['AGE_GROUP'];
    echo "<tr>";
    echo "<td>".$res['TIMESTAMP']."</td>";
    echo "<td>".$res['NTIHCNO']."</td>";
    echo "<td>".$res['CLIENTNAME']."</td>";
    echo "<td>".$res['AGE1']."</td>";
    echo "<td>".$res['VISTTYPE']."</td>"; 
    
     
    echo '<td>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a id="1190__'.$dts.'" href="javascript:void(0)"  onclick="newclient(this.id)" data-toggle="tooltip" title="Start service" 
    style="color: #000;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class=""> <button>Demography</button></span></a>
    </td>';
     
    echo '<td>  
    &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; 
    <a id="200__'.$dts.'" href="javascript:void(0)"  onclick="obstetric(this.id)" data-toggle="tooltip" title="Start service" 
    style="color: #000;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class=""><button> Previous history</button></span></a> 
    </td>';
      
    echo '<td>
    &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   
        <a id="230__'.$dts.'" href="javascript:void(0)"  onclick="progress(this.id)" data-toggle="tooltip" title="Start service"
    style="color: #000;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class=""> <button>Check progress</button></span></a>  </td>';
     
    echo '<td> &nbsp;&nbsp;
    <a id="10__'.$dts.'" href="javascript:void(0)"  onclick="hivtesting(this.id)" data-toggle="tooltip" title="Check out" 
    <span class="glyphicon glyphicon-remove"> </span></a> &nbsp; &nbsp;&nbsp;
  <a id="1X0__'.$dts.'" href="javascript:void(0)"  onclick="fuckrqt(this.id)" data-toggle="tooltip" title="Lab order" 
    <span class="glyphicon glyphicon-ok"> </span></a> &nbsp; &nbsp;&nbsp; 
    </td>';  
      
	echo '<td>
    &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   
        <a id="211230__'.$dts.'" href="javascript:void(0)"  onclick="artex(this.id)" data-toggle="tooltip" title="Art services"
    style="color: #000;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class=""> <button>ART</button></span></a>  </td>';
   
    echo '<td>
    &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   
        <a id="390__'.$dts.'" href="javascript:void(0)"  onclick="medix(this.id)" data-toggle="tooltip" title="Issue drugs"
    style="color: #000;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class=""> <button>Prescription</button></span></a>  </td>';

    
             } 

    ?>
  </tbody>
  </table>    
           <div class=""  id="labresults" >  </div>
               <script> 
               function labresults(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'lab_result.php?q='+odno,
                            success : function(data){
                                     $('#labresults').html(data);
                    $("#comefuck").modal("show");
                                      }
                    });
                    } 
               </script> 
         
          <div class=""  id="hctneg" >  </div>
               <script> 
               function hctneg(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'lab_hctresultsneg.php?q='+odno,
                            success : function(data){
                                     $('#hctneg').html(data);
                    $("#comefuck").modal("show");
                                      }
                    });
                    } 
               </script> 
         
          
          <div class=""  id="exitclient" >  </div>
               <script> 
               function exitclient(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'lab_exticlient.php?q='+odno,
                            success : function(data){
                                     $('#exitclient').html(data);
                    $("#comefuckit").modal("show");
                                      }
                    });
                    } 
               </script> 
         
          </div>
    <div class="col-sm-3" > 
      
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:50%; border: 1px;">   
          <center <p style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 2px 3px rgba(0, 0, 0, 0.1) !important;"> Due for Pregnancy related services 
     <br>  <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error()); 
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID,NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='PREGNANCY RELATED SERVICES' 
                AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ")) {   
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   

  
          <p/></center> 
        <!-- ./col -->
    </td>
   
     
     
    <td style="width:50%; border: 1px;">   
          <center <p style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 2px 3px rgba(0, 0, 0, 0.1) !important;"> Number of clients with pending data entries 
   <br>   <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

if ($result = mysqli_query($link, "SELECT RID,NTIHCNO FROM cmpatientsregistration WHERE SERVICETYPE ='PREGNANCY RELATED SERVICES' AND INSVCSTATUS ='NO'
                                                                       GROUP BY NTIHCNO ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  
          <p/></center> 
        <!-- ./col -->
    </td>
       
 </tbody>
 </table> 
 <br>
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:50%; border: 1px;">   
          <center <p style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 2px 3px rgba(0, 0, 0, 0.1) !important;"> Total number of clients examined 
    <br> <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT id,NTIHCNO FROM anteprogress WHERE TIMESTAMP >='$date' 
                                                                       GROUP BY NTIHCNO ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
          <p/></center> 
        <!-- ./col -->
    </td>
       
   
    <td style="width:50%; border: 1px;">   
          <center <p style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 2px 3px rgba(0, 0, 0, 0.1) !important;"> Total number of prescriptions made 
       <br>    
    <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERVICE_EPISODE FROM prescription WHERE TIMESTAMP >='$date' AND  REQUESTINGUNIT='ANTENATAL CARE'
                                                                       GROUP BY SERVICE_EPISODE ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
          <p/></center> 
        <!-- ./col -->
    </td>
       
 </tbody>
 </table> 
<br>
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:50%; border: 1px;">   
          <center <p style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 2px 3px rgba(0, 0, 0, 0.1) !important;"> Total number of orders dispensed 
          <br>  
     <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERVICE_EPISODE FROM prescription WHERE TIMESTAMP >='$date' AND  REQUESTINGUNIT='ANTENATAL CARE' AND  CHECKAVAILABILITY='YES'
                                                                       GROUP BY SERVICE_EPISODE ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
          <p/></center> 
        <!-- ./col -->
    </td>
       
   
    <td style="width:50%; border: 1px;">   
          <center <p style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 2px 3px rgba(0, 0, 0, 0.1) !important;">Total number of orders waiting for prescription 
       <br>     
    <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT SERVICE_EPISODE FROM prescription WHERE TIMESTAMP >='$date' AND REQUESTINGUNIT='ANTENATAL CARE' AND  CHECKAVAILABILITY='YES'
                                                                       GROUP BY SERVICE_EPISODE ")) {         
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result); 
  
    printf("%d  \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>    
                  
          <p/></center> 
        <!-- ./col -->
    </td>
  
  
       
 </tbody>
 </table> 
 
 <br>
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr> 
 <td style="width:50%; border: 1px;">   
          <center <p style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 2px 3px rgba(0, 0, 0, 0.1) !important;">Number of clients refered from HCT 
       <br>  
    <span data-toggle="tooltip" title="Referred clients"
       <b  style="color:#fff;  font-size:18px"  class="button5"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='POST TEST COUNSELLING DONE' AND REFERALUNIT='ANC SERVICES' 
                                         AND ACTION ='UNDEFINED' GROUP BY NTIHCNO")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>  </b> </span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
 
<span data-toggle="tooltip" title="Due for ART"  
        
<b  style="color:#fff; font-size:18px" class="button5"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
 $date = date("Y-m-d").' 00:00:00'; 
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='POST TEST COUNSELLING DONE' AND REFERALUNIT='ANC SERVICES' 
                                         AND ACTION ='UNDEFINED' AND FINALREACTIVITY='POSITIVE' GROUP BY NTIHCNO")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>  </b> </span>
 
          <p/></center> 
        <!-- ./col -->
    </td>
  
   <td style="width:50%; border: 1px;">   
          <center <p style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 2px 3px rgba(0, 0, 0, 0.1) !important;">Number of pending | completed lab results
       <br>  
         <span data-toggle="tooltip" title="Pending"
       <b  style="color:#fff;  font-size:18px"  class="button5"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='NOT STARTED' AND REQUESTINGUNIT ='ANC SERVICES' 
                                          GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>  </b> </span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
 
<span data-toggle="tooltip" title="Completed"
<b  style="color:#fff; font-size:18px" class="button5"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='COMPLETED' AND REQUESTINGUNIT ='ANC SERVICES' 
                                         AND ACTIONTAKEN ='UNDEFINED' GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>  </b> </span>
                  
          <p/></center> 
        <!-- ./col -->
    </td> 
 </tbody>
 </table> 
 </div> 
 <div class="col-sm-9">
  
               <div class="nav-tabs-custom" style="margin-top: -10px; background-color: transparent;">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Progress</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Lab&nbsp;orders&nbsp;<span data-toggle="tooltip" title="Pending"
       <b  class="button5" style="color:#fff;  font-size:18px"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='NOT STARTED' AND REQUESTINGUNIT ='ANC SERVICES' 
                                          GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>  </b> </span>&nbsp;&nbsp;|&nbsp;&nbsp;
 
<span data-toggle="tooltip" title="Completed"
<b  style="color:#fff; font-size:18px" class="button5"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='COMPLETED' AND REQUESTINGUNIT ='ANC SERVICES' 
                                        GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>  </b> </span>
 </a></li> 
 
 
 <li><a href="#tab_3-3" data-toggle="tab">HCT&nbsp;
  <span data-toggle="tooltip" title="HCT Referral"
       <b  style="color:#fff;  font-size:18px"  class="button5"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}
 $date = date("Y-m-d").' 00:00:00';  
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='POST TEST COUNSELLING DONE' AND REFERALUNIT='ANC SERVICES' 
                                         AND ACTION ='UNDEFINED' GROUP BY NTIHCNO")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>  </b> </span>&nbsp;&nbsp;
 &nbsp;ART&nbsp;+
 <span data-toggle="tooltip" title="Due for ART"  
        
<b  style="color:#fff; font-size:18px" class="button5"> <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
}  
$date = date("Y-m-d").' 00:00:00';  
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='POST TEST COUNSELLING DONE' AND REFERALUNIT='ANC SERVICES' 
                                         AND ACTION ='UNDEFINED' AND FINALREACTIVITY='POSITIVE' GROUP BY NTIHCNO")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>  </b> </span>
     
 </a></li>               
            </ul>
            <div class="tab-content" style="background-color: transparent;">
              <div class="tab-pane active" id="tab_1-1" style="background-color: transparent;">
                
 

<!-- ChartJS -->
<script src="chartjs/chart.js/Chart.js"></script> 
              <?php
                //set timezone
          //date_default_timezone_set('Asia/Manila');
          $year = date('Y');
              ?>
              <h5 class="box-title">Antenatal progress examination performance(<?php echo $year-1; ?> vs <?php echo $year; ?>)</h5>

            
              <div class="chart">
                <canvas id="barChart" style="height: 210px; width: 816px;"></canvas>
              </div>
           
          
<?php include('chartjs/data_anc.php'); ?>
<script>
  $(function () {
    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label               : 'Previous Year',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [ "<?php echo $pjan; ?>",
                                  "<?php echo $pfeb; ?>",
                                  "<?php echo $pmar; ?>",
                                  "<?php echo $papr; ?>",
                                  "<?php echo $pmay; ?>",
                                  "<?php echo $pjun; ?>",
                                  "<?php echo $pjul; ?>",
                                  "<?php echo $paug; ?>",
                                  "<?php echo $psep; ?>",
                                  "<?php echo $poct; ?>",
                                  "<?php echo $pnov; ?>",
                                  "<?php echo $pdec; ?>" 
                                ]
        },
        {
          label               : 'This Year',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [ "<?php echo $tjan; ?>",
                                  "<?php echo $tfeb; ?>",
                                  "<?php echo $tmar; ?>",
                                  "<?php echo $tapr; ?>",
                                  "<?php echo $tmay; ?>",
                                  "<?php echo $tjun; ?>",
                                  "<?php echo $tjul; ?>",
                                  "<?php echo $taug; ?>",
                                  "<?php echo $tsep; ?>",
                                  "<?php echo $toct; ?>",
                                  "<?php echo $tnov; ?>",
                                  "<?php echo $tdec; ?>" 
                                ]
        }
      ]
    }
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = barChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 5,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

  })
</script>
    

     
              </div>  
              <div class="tab-pane" id="tab_2-2" style="background-color: transparent;"> 
               <div class="table-responsive mailbox-messages" style="background-color: transparent;">  
               <div class="panel-body" style="background-color: transparent;">
               
                   
                <table id="app1" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;margin-top: -18px; ">  
                 <thead>
                 <tr>
                     <th>DATE</th>
           <th>NTIHC.NO.</th>
                     <th>NAME</th>
                     <th>AGE</th>
           <th>TEST&nbsp;DESCRIPTION</th>
                     <th>STATUS</th> 
           <th style="text-align:center;">RESULTS</th> 
                     <th style="text-align:center;">ANC&nbsp;SERVICES</th>
                    
                    
                     
            
        </tr>
        </tfoot>
        <tbody>

    <script>
function postclient(myid){
var dtsz1 = myid.split("***");
document.getElementById("myNTIHCNO").value=dtsz1[0];
document.getElementById("myID").value=dtsz1[1];
document.getElementById("myAGE1").value=dtsz1[2];
document.getElementById("myAGEGP").value=dtsz1[3];
}
</script>
 

<?php
include_once("configpatientmgtdb.php"); 
$date = date("Y-m-d").' 00:00:00';  
$result = mysqli_query($mysqli, "SELECT * FROM  laboratory WHERE TIMESTAMP >='$date' AND REQUESTINGUNIT ='ANC SERVICES' 
                                          AND ACTION ='UNDEFINED' GROUP BY NTIHCNO ORDER BY id ASC"); 

  while($res = mysqli_fetch_array($result)) {
  $dtsz1 = $res['id']."***".$res['NTIHCNO']."***".$res['AGE1']."***".$res['AGE_GROUP'];
    echo "<tr>";
    echo "<td>".$res['TIMESTAMP']."</td>";
    echo "<td>".$res['NTIHCNO']."</td>";
    echo "<td>".$res['NAME']."</td>";
    echo "<td>".$res['AGE1']."</td>";
  echo "<td>".$res['TESTDESCRIPTION']."</td>";  
    echo "<td>".$res['TESTSTATUS']."</td>";  
  
  echo '<td> &nbsp;  &nbsp; &nbsp; &nbsp;  
    <a id="221__'.$dtsz1.'" href="javascript:void(0)"  onclick="labresults(this.id)" data-toggle="tooltip" title="View" 
    style="color: #fff;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class="btn btn-success"> Click</span></a>  
    </td>'; 
  
    echo '<td>  &nbsp;&nbsp; 
    <a id="11901__'.$dtsz1.'" href="javascript:void(0)"  onclick="newclient(this.id)" data-toggle="tooltip" title="Demograph" 
    <span class="glyphicon glyphicon-envelope"> </span></a> &nbsp; &nbsp;&nbsp;  
   
    <a id="2001__'.$dtsz1.'" href="javascript:void(0)"  onclick="obstetric(this.id)" data-toggle="tooltip" title="Obstetric" 
    <span class="glyphicon glyphicon-share"> </span></a> &nbsp;  &nbsp;&nbsp;
    
  <a id="2301__'.$dtsz1.'" href="javascript:void(0)"  onclick="progress(this.id)" data-toggle="tooltip" title="Check progress"
    <span class="glyphicon glyphicon-edit"> </span></a> &nbsp;  &nbsp;&nbsp;
     
    <a id="39011__'.$dtsz1.'" href="javascript:void(0)" onclick="medix(this.id)" data-toggle="tooltip" title="Drugs"
    <span class="glyphicon glyphicon-cog"> </span></a>&nbsp;
  
  <a id="39081__'.$dtsz1.'" href="javascript:void(0)" onclick="exitclient(this.id)" data-toggle="tooltip" title="Exit"
    <span class="glyphicon glyphicon-cog"> </span></a> 
  
         </td>'; 
             } 

    ?>
  </tbody>
  </table>
  
              </div></div> </div>
          
              <div class="tab-pane" id="tab_3-3"> 
               <div class="table-responsive mailbox-messages">  
               <div class="panel-body">
         
         <table id="app02" class="table table-table-bordered" style="font-weight:normal; font-size:9px; width:100%;margin-top: -18px; ">  
                 <thead>
                 <tr>
                     <th>HCT&nbsp;DATE</th>
                     <th>NTIHC.NO.</th>
                     <th>CLIENT&nbsp;NAME</th>
                     <th>ACTION&nbsp;TAKEN</th>
           <th>COUNSELOR's&nbsp;NAME</th>
                     <th>FINAL&nbsp;REACTIVITY</th> 
           <th style="text-align:center;">VIEW</th>  
                     <th style="text-align:center;">ANC&nbsp;ACTION</th>  
                    
                     
            
        </tr>
        </tfoot>
        <tbody>

    <script>
function postclient(myid){
var dtuusx = myid.split("***");
document.getElementById("myNTIHCNO").value=dtuusx[0];
document.getElementById("myID").value=dtuusx[1];
document.getElementById("myAGE1").value=dtuusx[2];
document.getElementById("myAGEGP").value=dtuusx[3];
}
</script>
 

<?php
include_once("configpatientmgtdb.php");
 $date = date("Y-m-d").' 00:00:00'; 
 $result = mysqli_query($mysqli, "SELECT * FROM  laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='POST TEST COUNSELLING DONE' 
                                  AND ACTION='UNDEFINED' AND REFERALUNIT='ANC SERVICES' GROUP BY NTIHCNO ORDER BY id ASC");  

  while($res = mysqli_fetch_array($result)) {
  $dtuusx = $res['id']."***".$res['NTIHCNO']."***".$res['AGE1']."***".$res['AGE_GROUP'];
    echo "<tr>";
    echo "<td>".$res['RECIEVEDDATE']."</td>";
    echo "<td>".$res['NTIHCNO']."</td>";
    echo "<td>".$res['NAME']."</td>"; 
  echo "<td>".$res['TESTSTATUS']."</td>"; 
  echo "<td>".$res['COUNSELORSNAME']."</td>";
  echo "<td>".$res['FINALREACTIVITY']."</td>";  
     
  echo '<td> &nbsp;      
    <a id="122991__'.$dtuusx.'" href="javascript:void(0)"  onclick="hctneg(this.id)" data-toggle="tooltip" title="HCT" 
    style="color: #fff;border-radius: 3px; height: 20px; width:100%;margin-top: -17px;" <button class="btn btn-success"> Post</span></a>      
    </td>'; 
   echo '<td>  &nbsp; 
    <a id="1119011__'.$dtuusx.'" href="javascript:void(0)"  onclick="newclient(this.id)" data-toggle="tooltip" title="Demograph" 
    <span class="glyphicon glyphicon-envelope"> </span></a> &nbsp;   
   
    <a id="120011__'.$dtuusx.'" href="javascript:void(0)"  onclick="obstetric(this.id)" data-toggle="tooltip" title="Obstetric" 
    <span class="glyphicon glyphicon-share"> </span></a> &nbsp;   
    
  <a id="123011__'.$dtuusx.'" href="javascript:void(0)"  onclick="progress(this.id)" data-toggle="tooltip" title="Check progress"
    <span class="glyphicon glyphicon-edit"> </span></a> &nbsp;   
     
    <a id="139011__'.$dtuusx.'" href="javascript:void(0)" onclick="medix(this.id)" data-toggle="tooltip" title="Drugs"
    <span class="glyphicon glyphicon-cog"> </span></a> &nbsp; 
         
  <a id="139111__'.$dtuusx.'" href="javascript:void(0)" onclick="exitclient(this.id)" data-toggle="tooltip" title="Exit"
    <span class="glyphicon glyphicon-cog"> </span></a>       
         </td>';   
             } 

    ?>
  </tbody>
  </table>
         
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        
      
          
 
  </div></div></div></div> 
     <!-- /. ROW  -->   
         
             
                </div> 
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
    <footer class="main-footerx" style="background-color: #000; color:#fff;text-align:center;">
    <div class="pull-right hidden-xs">
      <b> </b>
    </div> 
  </footer>

  
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
<script src="../admin/dist/js/demo.js"></script>
<!-- Page script --> 
    <!--END PAGE LEVEL SCRIPTS --> 
  <script type="text/javascript" src="../../assets/js/gauge.js"></script> 
</body>
</html> 
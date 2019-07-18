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
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['DRUGNAME'] . "</option>";   }
  }
$connect->close();
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ntihc | imm system</title>
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
  <link rel="stylesheet" href="admin/assets/notifier2.css">
  <link rel="stylesheet" href="admin/dist/css/skins/skin-blue.min.css">
   

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
     $('#example1').DataTable( {
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
    border-top: 0px solid #ecf0f5;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
} 
.progress{
  vertical-align:center;
  margin-bottom: 0px;
} 
                 table, th , td  {
                 border: 0px solid #ecf0f5;
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
  function searchpro(){
     var dataString = document.getElementById('NTIHCNO').value;

     if(dataString==''){ document.getElementById('schrest').innerHTML="";}
     else{

     var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
  //alert(this.responseText);
      document.getElementById('schrest').innerHTML = this.responseText; //
    }
  };
  xhttp.open("GET", "get_clientNTIHCno_onregn.php?q="+dataString, true);
  xhttp.send();

  }
  }



  function agecalc(){
    var pn = $("#datepicker1").val();
    var dataString = "d="+pn;
    $.ajax({ type: "POST",   url: "time.php", data: dataString, cache: false,
          success: function(result){
                           $("#AGE1").val(result);
          }
         });
  }




  function upt(idxx){
    var separatedDataArray = idxx.split("__");
      document.getElementById('NTIHCNO').value = separatedDataArray[0];
        document.getElementById('CNAME').value = separatedDataArray[1];
      document.getElementById('schrest').innerHTML="";
    document.getElementById('myAGE1').value= separatedDataArray[3];
  }

    </script>

  <script type="text/javascript">

  </script>


  <script type="text/javascript">
function ajaxFunction(str)
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      httpxml=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
function stateChanged()
    {
    if(httpxml.readyState==4)
      {
document.getElementById("displayDiv").innerHTML=httpxml.responseText;
document.getElementById("msg").style.display='none';

      }
    }
  var url="registration_desk_oldpidsearch.php";
url=url+"?txt="+str;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateChanged;
httpxml.open("GET",url,true);
httpxml.send(null);
document.getElementById("msg").innerHTML="Please Wait ...";
document.getElementById("msg").style.display='inline';

  }
</script>



<script>
 var x=0,y=0;


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
  
  </header>

      <div class="row" style=" background-color:transparent;"> 
        <div class="col-md-4" >
     
      <br>
     
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead>  <tr>  
   <td style="width:33.3333%; border: 1px;"> <a href="client_management.php">  
       <center><img src="assets/imgx/index.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Dashboard&nbsp;&nbsp;&nbsp;</center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
   
     <td style="width:33.3333%; border: 1px;"> <a href="admin/reports/prescription.php?d1=0&d2=0"> 
       <center><img src="assets/imgx/kkk.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Reports&nbsp;&nbsp;&nbsp;</center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
     
   <td style="width:33.3333%; border: 1px;">  <a href="index.php">
       <center><img src="assets/imgx/ttttttttt.jpg"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Logout </center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td> 
 </tbody>
 </table> 
 
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:33.3333%; border: 1px;"> <a href="client_labpost.php">  
       <center><img src="assets/imgx/indexreewss.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Lab&nbsp;results&nbsp;&nbsp;<br><b style="color:red; margin-top:-10px; font-size:16px;">
    <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='NOT STARTED' AND REQUESTINGUNIT ='TREATMENT ROOM' 
                                          GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?></b>pending &nbsp;|&nbsp;<b style="color:green; font-size:16px;"><?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT NTIHCNO FROM cmpatientsregistration  WHERE TIMESTAMP >='$date' 
                                     AND INSVCSTATUS ='TREATMENT ROOM' 
                                                                       AND MEDICAL ='1'
                                                                       AND LABVIST = '1'
                                     AND LABOREDRSTATUS = 'COMPLETED'
                                     AND ONC_ACTIONTAKEN = 'NULL'
                                          GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?></b>completed </center>  </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
   
     <td style="width:33.3333%; border: 1px;"> <a href="regn_services.php"> 
       <center><img src="assets/imgx/imagesffffffff.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        In_referral </center>  </a>  
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
     
   <td style="width:33.3333%; border: 1px;">  <a href="client_medical.php">
       <center><img src="assets/imgx/index.png"width="100" height="100" class="img-circle" style="border: 6px solid #ecf0f5; height:50px; width:50px;"> 
        Refresh</center>    </a>
         <div class="pull-right box-tools"> </div> 
        </div>  
    </td>
    
        
   </td>  
 </tbody>
 </table> 
 
 
    </div>
    
     <div class="col-md-8" style=" background-color:transparent;"> 
     <br>
     
     <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border:0px;text-align:left;border: 0px;" width="100%">
    <thead> 
    <tr>  
   <td style="width:10%; border: 0px;">  
        <img src="assets/img/ntihclog2.png"width="100" height="100" style="border: 0px; "> 
          
    </td>
   
     <td style="width:80%; border: 0px;">  
   <center style="color:#000; font-weight:bold; font-size:12px;font:bold 17px 'Aleo'; text-shadow:1px 1px 6px #000; color:#fff;">I.M.M SYSTEM</center><BR>
   <center style="color:#000; font-weight:bold; font-size:12px;">NAGURU TEENAGE INFORMATION AND HEALTH CENTER</center> <br> 
   <center style="color:#000; font-weight:bold; font-size:12px;">POST ABORTION CARE</center> 
    </td> 
    
   <td style="width:10%; border: 1px;">  
    </td>  
 </tbody>
 </table> 
  
   
    </div> </div>
    
       <div class="col-md-12">
       
       <div class=""  id="labresults" >  </div>
               <script> 
               function labresults(jose){
           var odno = ((jose.split("__")[1]).split("***"))[1];
                     $.ajax({
                            type    : 'POST',
                            url     : 'admin/anc/lab_result2.php?q='+odno,
                            success : function(data){
                                     $('#labresults').html(data);
                    $("#comefuck").modal("show");
                                      }
                    });
                    } 
               </script>  
      </div> 
      <div class="col-md-4">
  
          <div class="box-body" style="margin-top:-10px;background-color:transparent;" >
          <div class="box-group" id="accordion" style=" background-color:transparent;"> 
                <div class="panel box box-primary" style="border:0px;background-color:transparent;">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Real time service
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body"> 
          <div class="" style="background-color:transparent;">
              <div class="clearfix visible-sm-block"></div>  
                 
         <div class="col-lg-3 col-xs-6" style="background-color:transparent;">
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border: 2px solid rgb(230, 220, 218); border-radius:8px; 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">
          <center> <b style=" font-size:11px;">Clients&nbsp;due for&nbsp;PAC</b></center> <i class=" "></i> 
         <center> <p class="" style=" width:50%; height:50%;  text-align:center; font-weight:bold; font-size:20px;">
         <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
AND MATERNALHEALTHSERVICE ='PAC' 
AND SERVICETYPE ='PREGNANCY RELATED SERVICES'
AND INSVCSTATUS ='NO' GROUP BY NTIHCNO ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
        
    <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient"  style="border: 2px solid rgb(230, 220, 218); border-radius:8px; 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">
          <center> <b style=" font-size:11px;">Counselling services</b></center> <i class=" "></i> 
         <center> <p class="" style=" width:50%; height:50%;  text-align:center; font-weight:bold; font-size:20px;">
         <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' 
                                      AND INSVCSTATUS ='NO' GROUP BY NTIHCNO ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
    
       <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient" style="border: 2px solid rgb(230, 220, 218); border-radius:8px; 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">
          <center> <b style=" font-size:11px;">Clients due for FP</b></center> <i class=" "></i> 
         <center> <p class="" style=" width:50%; height:50%;  text-align:center; font-weight:bold; font-size:20px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' 
AND MATERNALHEALTHSERVICE ='FP' 
AND SERVICETYPE ='PREGNANCY RELATED SERVICES'
AND INSVCSTATUS ='NO' GROUP BY NTIHCNO ORDER BY NTIHCNO")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
    
          <p/></center></a> 
          </div></div>  
        <!-- ./col -->
        
    <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-grey-gradient" style="border: 2px solid rgb(230, 220, 218); border-radius:8px; 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">
          <center> <b style=" font-size:11px;">Other services&nbsp;&nbsp;&nbsp; </b></center> <i class=" "></i> 
         <center> <p class="" style=" width:50%; height:50%;  text-align:center; font-weight:bold; font-size:20px;">
        <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date'
AND SERVICETYPE ='OTHER SERVICES' AND INSVCSTATUS ='NO' GROUP BY NTIHCNO ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
  
          <p/></center></a> 
          </div></div>  
        <!-- ./col --> 
              <div class="nav-tabs-custom" style=" background-color:transparent;"> 
              <ul class="nav nav-tabs pull-right" style="background-color:transparent;">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">On site</a></li>
        <li><a href="#tab_2-2a" data-toggle="tab">Completed</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Pending</a></li>
              <li><a href="#tab_3-2" data-toggle="tab" style="color:green;">Off</a></li>

            </ul>
            <div class="tab-content" style="background-color:transparent;">
              <div class="tab-pane active" id="tab_1-1" style="background-color:transparent;">
         <div class="box-body" style="background-color:transparent;">
        <div id="dialog-window" style="background-color:transparent;">
  <div id="scrollable-content" style="background-color:transparent;">
   <ul>
                               <div class=""  id="pacvists" style="margin-left: -41px;"></div>
                                </div>
                                 </ul>
  </div>

  <div id="footer" style="text-align:left; border:0px;">
  </div></div>

<style>
#dialog-window {
  height: 190px;
  border: 0px black solid;
  border-radius:7px;
  width:100%;
}

#scrollable-content {
  height: 190px;
  overflow: auto;
  background-color: transparent;
  width:100%;
}

#footer {
  height: 0px;
}
</style>

</div>
              
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2a" style=" background-color:transparent;">
        <table id="myhistory" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; margin-top:10px;">
        <thead>
        <tr>
                      <th style="">NO.</th>
                  <th style="">DATE</th>
                      <th style="">NTIHC.NO.</th>
                      <th style="">NAME</th>
                      <th style="">ACTION</th>

           </tr> 
        </tfoot>
        <tbody>

<?php
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00';

$result = mysqli_query($mysqli, "SELECT * FROM  clientsexamination WHERE TIMESTAMP >='$date' GROUP BY NTIHCNO ORDER BY DATECREATED");

  while($res = mysqli_fetch_array($result)) {
  $dtsget = $res['NTIHCNO']."***".$res['DATECREATED']."***".$res['DATECREATED'];
    echo "<tr>";
    echo "<td>".$res['EID']."</td>";
    echo "<td>".$res['DATECREATED']."</td>";
    echo "<td>".$res['NTIHCNO']."</td>";
    echo "<td>".$res['CLIENTNAME']."</td>";
    echo '<td> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a id="5__'.$dtsget.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a>
  
  

    </td>';
  }

    ?>
  </tbody>
  </table>
        </div> 
              
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2" style="background-color:transparent;">
 
              <table id="example4" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
        <thead>
        <tr>   
                  
                 <th style="background-color:transparent;">VIST DATE</th>
           <th style="background-color:transparent;">NTIHC.NO</th>
                     <th style="background-color:transparent;">CLIENT&nbsp;NAME</th>
                     <th style="background-color:transparent;">AGE</th> 
           <th style="background-color:transparent;">VIST</th> 
                     <th style="background-color:transparent;">ACTION</th>  
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
document.getElementById("mySEX").value=dts[4]; 
document.getElementById("myRSVNID").value=dts[5]; 
}
</script>    
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'ON SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
  while($res = mysqli_fetch_array($result)) {
  $dts = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['RSVNID']."***".$res['DATECREATED'];
    echo "<tr>"; 
    echo "<td>".$res['TIMESTAMP']."</td>"; 
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['CLIENTNAME']."</td>"; 
    echo "<td>".$res['AGE1']."</td>";
    echo "<td>".$res['VISTTYPE']."</td>"; 
    
    echo '<td>    
    
    <a id="410__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
    <span class="glyphicon glyphicon-ok"> </span></a> &nbsp;    
    <a id="510__'.$dts.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a> 
  
    </td>';       
  }
     
    ?>
  </tbody>
    </table> 
 

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2" style="background-color:transparent;">
              <p></p>


         <table id="exaoffsite" class="table table-striped table-bordered" style="font-weight:normal; font-size:9px; width:100%;">
         <thead>
        <tr>
                     <th style="background-color:#f39c12; color:WHITE;width:25%;">DATE</th>
           <th style="background-color:#00a65a; color:WHITE;width:15%;">NTIHC.NO</th>
                     <th style="background-color:#dd4b39; color:WHITE;width:40%;">NAME</th>
                     <th style="background-color:#f39c12; color:WHITE;width:10%;">AGE</th>
           <th style="background-color:#f39c12; color:WHITE;width:10%;">DATA</th>
                      <th style="background-color:transparent; color:BLACK; width:10%;">START</th>
           </tr>
        </thead>
        <tfoot>
          <tr>
         <th style="background-color:#f39c12; color:WHITE;width:25%;">DATE</th>
           <th style="background-color:#00a65a; color:WHITE;width:15%;">NTIHC NO</th>
                     <th style="background-color:#dd4b39; color:WHITE;width:40%;">NAME</th>
                     <th style="background-color:#f39c12; color:WHITE;width:10%;">AGE</th>
            <th style="background-color:#f39c12; color:WHITE;width:10%;">DATA</th>
                     <th style="background-color:transparent; color:BLACK; width:10%;">START</th>
        </tr>
        </tfoot>
        <tbody>

    <script>
function postclient(myid){
var dtsmong = myid.split("***");
document.getElementById("myNTIHCNO").value=dtsmong[0];
document.getElementById("myID").value=dtsmong[1];
document.getElementById("myAGE1").value=dtsmong[2];
document.getElementById("myAGEGP").value=dtsmong[3];
}
</script>


<?php
include_once("updatecmgt/config.php");

$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='NO'
                                                                       AND DATATYPE = 'OFF SITE' GROUP BY NTIHCNO ORDER BY TIMESTAMP");

  while($res = mysqli_fetch_array($result)) {
  $dtsmong = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP'];
    echo "<tr>";
    echo "<td>".$res['TIMESTAMP']."</td>";
    echo "<td>".$res['NTIHCNO']."</td>";
    echo "<td>".$res['CLIENTNAME']."</td>";
    echo "<td>".$res['AGE1']."</td>";
    echo "<td>".$res['DATATYPE']."</td>";
    echo '<td>
    &nbsp;&nbsp;&nbsp;
    <a id="21__'.$dtsmong.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
    <span class="glyphicon glyphicon-cog"> </span></a>
    &nbsp;&nbsp;&nbsp;
    </td>';
  }

    ?>
  </tbody>
  </table>
              </div>
            </div>
          </div>
</div>  
   </div>
                  </div>
                </div>
                <div class="panel box box-danger" style="background-color:transparent;">
                  <div class="box-header with-border" style="background-color:transparent;" >
                    <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    HCT Referrals &nbsp;<b style="color:red;">|
          <?php
$link = mysqli_connect("localhost", "root", "toor2", "patientmgt"); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
} 
$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT * FROM  laboratory  WHERE TIMESTAMP >='$date' AND TESTSTATUS ='POST TEST COUNSELLING DONE' 
                                   AND ARTCLINIC='REFERRED' AND ACTION='UNDEFINED' AND REFERALUNIT='MEDICAL SERVICES' GROUP BY NTIHCNO ")) {   
    $row_cnt = mysqli_num_rows($result); 
    printf("%d  \n", $row_cnt); 
    mysqli_free_result($result);
} 
mysqli_close($link);
?>&nbsp;Clients |</b>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" style="background-color:transparent;">
                    <div class="box-body" style="background-color:transparent;">
            <br>
          
   <table id="example1" class="table table-tabled table-bordered" style="font-weight:normal; font-size:9px; width:100%; background-color:transparent;">
        <thead>
        <tr>   
                  
                 <th style="background-color:#ecf0f5;">VIST DATE</th>
           <th style="background-color:#ecf0f5;">NTIHC.NO</th>
                     <th style="background-color:#ecf0f5;">CLIENT&nbsp;NAME</th>
                     <th style="background-color:#ecf0f5;">AGE</th>  
                     <th style="background-color:#ecf0f5;">ACTION</th>  
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
document.getElementById("mySEX").value=dts[4]; 
}
</script>    
         
<?php 
include_once("updatecmgt/config.php");

$date = date("Y-m-d").' 00:00:00'; 
$result = mysqli_query($mysqli, "SELECT * FROM  cmpatientsregistration WHERE TIMESTAMP >='$date' 
                                                                       AND INSVCSTATUS ='COUNSELLING SERVICES' 
                                                                       AND ARTCLINIC ='REFERRED'
                                                                       AND REFERALUNIT = 'MEDICAL SERVICES' 
                                     GROUP BY NTIHCNO ORDER BY TIMESTAMP");
  
  while($res = mysqli_fetch_array($result)) {
  $dts = $res['NTIHCNO']."***".$res['RID']."***".$res['AGE1']."***".$res['AGE_GROUP']."***".$res['SEX']."***".$res['DATECREATED'];
    echo "<tr>"; 
    echo "<td>".$res['DATECREATED']."</td>"; 
    echo "<td>".$res['NTIHCNO']."</td>"; 
    echo "<td>".$res['CLIENTNAME']."</td>"; 
    echo "<td>".$res['AGE1']."</td>"; 
    
    echo '<td>    
    
    <a id="4__'.$dts.'" href="javascript:void(0)"  onclick="getstuffclientel(this.id)" data-toggle="tooltip" title="Start service"
    <span class="glyphicon glyphicon-ok"> </span></a> &nbsp;  
    <a id="5__'.$dts.'" href="medical/medical_data.php?q='.$res['NTIHCNO'].'__'.$res['DATECREATED'].'" data-toggle="tooltip" title="History"
        <span class="glyphicon glyphicon-edit"> </span></a>&nbsp;  
  
    </td>';       
  }
     
    ?>
  </tbody>
  </table>          
              </div>
              <!-- /.tab-pane -->
            </div>
  
              </div>
            </div>
            <!-- /.box-body -->
 
         

              
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->





        <div class="col-md-8"><br>
     
          <BR> 
      <div class="panel-body">
       
         
         <div class=""  id="dem">  </div>
               <script> 
          function getstuffclientel(jose){
      var odno = ((jose.split("__")[1]).split("***"))[0];
      var ddt = jose.split("__")[1];
          postclient(ddt);
                $.ajax({
                       type    : 'POST',
             data    :{bb:odno},
                       url     : 'medical/medical_get_pac.php?q='+odno,
                       success : function(data){
                                $('#dem').html(data);
                $("#demm").modal("show");
                                 }
               });
               } 
                 </script> </div>
 
                <div class="col-sm-7"> 
        
                <form class="form-horizontal" action="abortioncareprocess.php" method="post" style="height:auto;"/>  
        
    
                <table class="table" style="border:0px;">
                <tr>
          <th style="width:25%;border:0px;">Service date </th>
        <th style="width:25%;border:0px;"> <input type="text"  name="DATECREATED" id="DATECREATED" value="<?php echo date('d-m-y'); ?>"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">  </th>

              <th style="width:25%;border:0px;">Vist by </th>
        <th style="width:25%;border:0px;"> <select  name="VISTBY" id="VISTBY"
        required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                                    <option> </option>
                                                   <option>SELF</option>
                                                   <option>ALONE</option> 
                                                   </select>
        </th>
              </tr>
        </table>
       
    
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
         <td style="width:40%;border:0px; font-weight:bold;background-color:transparent;">Type of abortion </td>
        <td style="width:60%;border:0px;">  <select  id="ABORTIONTYPE"  name="ABORTIONTYPE"
         style="width:100%; font-weight:normal; background-color:transparent;">
                <option> </option>
                <option>SPONSTANEOUS</option>
                <option>INDUCED</option>
                </select> </td>
              </tr>
        </table>
        
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
         <td style="width:40%;border:0px; font-weight:bold;background-color:transparent;">Reason for abortion </td>
        <td style="width:60%;border:0px;"><textarea  name="REASONFORABORTION"  rows="1"
         style="width:100%; font-weight:normal; background-color:transparent;"></textarea>   </td>
              </tr>
        </table>
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
         <td style="width:40%;border:0px; font-weight:bold;background-color:transparent;"> Complait</td>
        <td style="width:60%;border:0px;"> <textarea name="RESULTANTEFFECT"  rows="1"
          style="width:100%; font-weight:normal; background-color:transparent;">
        </textarea> </td>
              </tr>
        </table>
         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
         <td style="width:40%;border:0px; font-weight:bold;background-color:transparent;">Remarks </td>
        <td style="width:60%;border:0px;"> <textarea  name="REMARKS"  rows="1"
          style="width:100%; font-weight:normal; background-color:transparent;"></textarea> </td>
              </tr>
        </table>
        
        <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
         <td style="width:40%;border:0px; font-weight:bold;background-color:transparent;">Is follow up required?.</td>
        <td style="width:60%;border:0px;">
        <input type="radio" name="FOLLOWUP" id="FOLLOWUP" value="NO" checked>
        <label>DISABLED</label>
    <input type="radio" name="FOLLOWUP"  id="FOLLOWUP" value="YES">
    <label>REQUIRED</label>  </td>
              </tr>
        </table>

         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:40%;border:0px; font-weight:bold;background-color:transparent;">Follow up date if required</td>
        <td style="width:60%;border:0px;"> <input type="date" name="FOLLOWUPDATE" id="FOLLOWUPDATE" style="width:100%;background-color:transparent; height: 22px;"></td>
              </tr>
        </table>
      
       <hr> 
               
        
      <!---<table class="table table-striped" id="mytable" style="font-weight:normal;margin-top: -10px; "> 
     <input type="button" onClick="addRow12('mytable')" value="Add follow up vists if family planning is required" class="btn-success"  style="background-color:green;" > &nbsp;
     <input type="button" onClick="deleteRow12('mytable')" value="Remove episode"  class="btn-danger" >
   <br> <br>
    <thead>
      <tr>
      <th>*</th>
   <th>L.N.M.P</th>
   <th>BP</th>
   <th>WT</th>
   <th>GSP/GSN</th>
   <th>COMMENTS</th>
   <th>TYPE OF METHOD</th>
   <th>QTY</th>
   <th>RETURN DATE</th> 
      </tr>
      </thead>
      <tbody>
      </tbody>
      </table>  
      <!-- /.tab-pane -->
    
      
         <table class="table" style="border:0px;">
                <tr>  
      <th style="width:25%;border:0px;">  </th>
        <th style="width:25%;border:0px;"> </th>
    
        <th style="width:5%;border:0px;"></th> 
    <th style="width:25%;border:0px;">
     <a href="#tab_1-1explode" data-toggle="tab" style="background-color:transparent;"><button>General service</button></a> 
     </th>
        <th style="width:20%;border:0px;"> 
     <a href="#tab_2-2explode" data-toggle="tab" style="background-color:transparent;"><button>ART Card</button></a>  
        </th>
       
              </tr>
        </table>
    
            <div class="nav-tabs-custom" style="background-color:transparent;">
            <ul class="nav nav-tabs pull-right" style="background-color:transparent;">
               
            </ul>
            </div> 
          
           
            <br>

          <table id="dataTable1" class="table table-striped" style="font-weight:normal;margin-top: 7px; ">
                        <input type="button" value="Drugs" onClick="addRow13('dataTable1')" class="btn-success" style="background-color:green;" > &nbsp;
                            <input type="button" value="Remove" onClick="deleteRow13('dataTable1')"class="btn-danger" style="background-color:red;" >
                            <input type="hidden" value="0" name="mytable_rows1"  id="mytable_rows1" >
                            <input type="hidden" id="mytable_rows" name="mytable_rows" value="0">

          <thead>
            <tr>
                <th style="width:5%;">*</th>
                <th style="width:55%;">DRUG</th>
                <th style="width:10%;">QTY</th>
                <th style="width:10%;">TIMES</th>
                <th style="width:10%;">PERIOD</th>
                <th style="width:10%;">TOTAL</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
                  
   
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
          <th style="width:25%;border:0px; background-color:transparent;">Prescription comment &nbsp;&nbsp;(If required)</th>
        <th style="width:75%;border:0px;"> <textarea name="PRESCRIPTIONCOMMENT" id ="PRESCRIPTIONCOMMENT"
        required="required"  style="width:100%; font-weight:normal; background-color:transparent;"> </textarea> </th>
              </tr>
        </table>
        
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead>  
    <tr>  
        <td style="width:25%;border:0px;background-color:transparent;">Medical service providers </td>
        <td style="width:75%;border:0px;"> <Select name="USERINITIAL" id="USERINITIAL" required="required" 
        style="width:100%; font-weight:normal; background-color:transparent;">
                                              <option> </option>
                                              <option> HAJARAH NAMIREMBE </option>
                                              <option> MADINAH NAKIYEMBA </option>
                                              <option> GORRETH NAKIWALA </option>
                                              <option> JOLLYROSE KUSEMERERWE </option>
                                              <option> CHRISTINE KYAMULABI </option>
                                              <option> BETRIECE NAMUWONGE </option>
                                              <option> JANET NYAKANA </option>
                                              </select>
       </td>
       </tr>
       </table>  
        <input type="hidden" name="NTIHCNO" id="myNTIHCNO" value="" >
    <input type="hidden" id="myID" name="RID">
    <input type="hidden" name="AGE1" id="myAGE1">
    <input type="hidden" id="myAGEGP" name="AGE_GROUP">
    <input type="hidden" id="mySEX" name="SEX">
    <input type="hidden" id="myRSVNID" name="RSVNID">
    <input type="hidden" id="REGISTERACCOUNT" name="REGISTERACCOUNT" value="<?php echo $rm; ?>" > 
    <input type="hidden" id="SERVICEPROVIDER" name="SERVICEPROVIDER" value="<?php echo $nameofuser; ?>" >
    <input type="hidden" name="REQUESTINGUNIT" id="REQUESTINGUNIT" value="TREATMENT ROOM" >
        <input type="hidden" name="TIMEOUT" id="CHECKIN" readonly = "readonly" style="text-align:center; background-color:transparent; width:100%;"> 
      </div> 

       <div class="col-sm-5" style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">

<p>Activate to process the above services if required</p>
<p></p>
 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
            <td style="color:blue;width:42%;"><b>Enable Lab request</b> </td>
            <td style="border:0px; width:58%;">    <select name="TROOM_INITIATION" id="TROOM_INITIATION" required="" class="button 5"
      style="width:100%; font-weight:normal; background-color:transparent;height: 20px; border-radius: 9px;text-align:left;">
      <option></option>
      <option value="OFF">DISABLE</option>
      <option value="ON">ENABLE</option>
      </select>  </td>  
        </tr>
       </tbody>
      </table><p></p>
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
            <td style="width:42%;border:0px;">Add test(s) required </td>
            <td style="border:0px; width:58%;">    
             <input type="text" name="TESTDESCRIPTION" id="TESTDESCRIPTION" style="width:100%;" ></td>
        </tr>
       </tbody>
      </table>
    <p></p>
   
       </div>
       
       <br> <br> <br>  <br>  <br><p></p>
        <div class="col-sm-5" style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">
<p></p>
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
            <td style="color:blue;width:42%;"><b>Activate HCG if required</b> </td>
            <td style="border:0px; width:58%;">    <select name="HCGSTATUS" id="HCGSTATUS" required="" class="button 5"
      style="width:100%; font-weight:normal; background-color:transparent;height: 20px; border-radius: 9px; text-align:left;">
      <option></option>
      <option value="NO">DEACTIVATE</option>
      <option value="YES">ACTIVATE</option>
      </select>  </td>  
        </tr>
       </tbody>
      </table><p></p>

   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>  
        <tr>
            <td>Results</td>
             <td>   
             <input type="radio" name="HCGRESULTS" id="HCGRESULTS" value="0" checked>
             <input type="radio" name="HCGRESULTS" id="HCGRESULTS" value="NEGATIVE" >
        <label for="NEGATIVE">NEGATIVE</label></td>
    <td>
    <input name="HCGRESULTS" type="radio" id="HCGRESULTS" value="POSITIVE">
    <label for="POSITIVE">POSITIVE</label>
                               </td>

    </td>
        <tr>
            <td>Justify results</td>
            <td>   
             <input type="radio" name="HCGPOSITIVE" id="HCGPOSITIVE" value="0" checked>
             <input type="radio" name="HCGPOSITIVE" id="HCGPOSITIVE" value="WANTED" >
        <label for="WANTED">WANTED</label> </td>
    <td><input name="HCGPOSITIVE" type="radio" id="HCGPOSITIVE" value="UN WANTED">
    <label for="UN WANTED">UN WANTED</label>
                               </td>
        </tr>
         </tbody>
      </table>
    
  </div>
  
  

  <br> <br> <br>  <br> <br>  <br> 
  
<div class="col-sm-5" style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">

 <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:42%;border:0px; font-weight:bold; color:blue;">Turn on referral </td>
         <td style="width:58%;">  <input type="radio" name="REFTUNER" id="REFTUNER" value="SWITCHED OFF" checked>
        <label for="SWITCHED OFF">SWITCHED OFF</label>
    <input type="radio" name="REFTUNER"  id="REFTUNER" value="TURN ON">
    <label for="TURN ON">TURN ON</label>  </td>
              </tr>
        </table>


         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:25%;border:0px; font-weight:bold;">Referral centre </td>
        <td style="width:75%;border:0px;">
          <select  name="MEDICALREFERRAL" id="MEDICALREFERRAL" style="width:100%; font-weight:normal; background-color:transparent;">
                                  <option> </option>
                        <option value="NTIHC">NTIHC</option>
                                 <option value="AIC">AIC</option>
                                 <option value="BUTABIKA HOSPITAL">BUTABIKA HOSPITAL</option>
                                 <option value="CHINA-UG FRIENDSHIP HOSP">CHINA-UG FRIENDSHIP HOSP</option>
                                 <option value="KADIC CLINIC">KADIC CLINIC</option>
                                 <option value="KAMPALA DISPENSARY">KAMPALA DISPENSARY</option>
                                 <option value="KIBULI HOSPITAL">KIBULI HOSPITAL</option>
                                 <option value="KISWA HEALTH CENTRE">KISWA HEALTH CENTRE</option>
                                 <option value="KISWA TB CLINIC">KISWA TB CLINIC</option>
                                 <option value="LUBAGA HOSPITAL">LUBAGA HOSPITAL</option>
                                 <option value="MENGO HOSPITAL">MENGO HOSPITAL</option>
                                 <option value="MILDMAY">MILDMAY</option>
                                 <option value="MULAGO ASSESSMENT CENTRE">MULAGO ASSESSMENT CENTRE</option>
                                 <option value="MULAGO DENTAL CLINIC">MULAGO DENTAL CLINIC</option>
                                 <option value="MULAGO ENT CLINIC">MULAGO ENT CLINIC</option>
                                 <option value="MULAGO EYE CLINIC">MULAGO EYE CLINIC</option>
                                 <option value="MULAGO MAIN HOSPITAL">MULAGO MAIN HOSPITAL</option>
                                 <option value="MULAGO SICKLE CELL CLINIC">MULAGO SICKLE CELL CLINIC</option>
                                 <option value="MULAGO SKIN CLINIC">MULAGO SKIN CLINIC</option>
                                 <option value="MULAGO STD CLINIC">MULAGO STD CLINIC</option>
                                 <option value="MULAGO SURGICAL OPD">MULAGO SURGICAL OPD</option>
                                 <option value="MULAGO TB MANAGEMENT">MULAGO TB MANAGEMENT</option>
                                 <option value="MULAGO ULTRA SCAN">MULAGO ULTRA SCAN</option>
                                 <option value="NSAMBYA">NSAMBYA</option>
                                 <option value="REACHOUT MBUYA">REACHOUT MBUYA</option>
                                 <option value="TASO">TASO</option>
                                 <option value="POLICE">POLICE</option>
                 </select>
        </td>
              </tr>
        </table>
        
      <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px; border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:25%;border:0px; font-weight:bold;background-color:transparent;">Service referred </td>
        <td style="width:75%;border:0px;">
              <select name="SERVICEREFERREDFOR" id="SERVICEREFERREDFOR" style="width:100%; font-weight:normal; background-color:transparent;">
                  <option> </option>
                        <option value="ART, SUPPORT AND CARE">ART, SUPPORT AND CARE</option>
                        <option value="FURTHER MANAGEMENT">FURTHER MANAGEMENT</option>
              </select> 
        </td>
              </tr>
        </table>

</div>

 <br> <br> <br>  <br> <br> <br>  
  
<div class="col-sm-5" style="border: 2px solid rgb(230, 220, 218); 
box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.1) !important;">
<p></p>
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
        <td style="width:40%;border:0px;">Action taken </td>
        <td style="width:60%;border:0px;"> 
        <Select name="ACTIONTAKEN" id="ACTIONTAKEN" required="required" style="width:100%; font-weight:normal; background-color:transparent;">
                                        <option value=""> </option>
                                        <option> POST ABORTION CARE DONE</option>
                                        <option> TREATED </option>
                                        <option> REFERRED </option>
                                        <option> TREATED AND REFERRED </option>
                                        <option> SENT FOR LAB TEST </option>
                                        </select>
        </td>  </tr>
        </table>
    
    <p></p>
    <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr>   
      <th style="width:40%;border:0px;">Is family planning required?  </th>
        <th style="width:60%;border:0px;"><select name="FPREQUIREMENT" id="FPREQUIREMENT" required="" class="button 5"
      style="width:100%; font-weight:normal; background-color:transparent;height: 20px; border-radius: 9px;text-align:left;">
      <option></option>
      <option value="YES">YES</option>
      <option value="NO">NO</option>
      </select>   </th> 
       </tr>
       </table>
    
    <p></p>
     
   <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
     <thead> 
     <tr>    
     <th style="width:40%;border:0px;">Is HCT / General counselling required?  </th>
     <th style="width:60%;border:0px;"><select name="HCTREQUIREMENT" id="HCTREQUIREMENT" required="" class="button 5"
      style="width:100%; font-weight:normal; background-color:transparent;height: 20px; border-radius: 9px;text-align:left;">
      <option></option>
      <option value="YES">YES</option>
      <option value="NO">NO</option>
      </select>   </th> 
      </tr>
      </table>
     
       <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
       <thead> 
       <tr> 
         <td style="width:40%;border:0px; font-weight:bold;">Service check </td>
        <td style="width:60%;border:0px;">
        <input type="radio" name="OUTSVSTATUS" id="OUTSVSTATUS" value="IN SESSION" checked>
        <label for="IN SESSION">IN SESSION</label>
        <input type="radio" name="OUTSVSTATUS"  id="OUTSVSTATUS" value="CHECKED OUT">
        <label for="CHECKED OUT">CHECK OUT</label>  </td>
        </tr>
        </table>

         <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;  border: 0px;text-align:left;" width="100%">
    <thead> 
    <tr> 
          <td style="width:40%;border:0px; font-weight:bold;background-color:transparent;">  </td>
        <td style="width:60%;border:0px;"> </td>
              </tr>
        </table>
        <p></p>
         
    </div>
    </div> 
  
    
      
        <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1explode">
                
              </div>
              <!-- /.tab-pane -->
               <div class="tab-pane" id="tab_2-2explode">
                
      <div class="col-sm-12"  style="background-color:transparent;">  
  <p><B>HIV CARE / ART CARD</B></p>
  <div class=""  id="getART" >  </div>
               <script> 
          function getART(jose){
      var odno = ((jose.split("__")[1]).split("***"))[1];
                $.ajax({
                       type    : 'POST',
                       url     : 'medical_getart.php?q='+odno,
                       success : function(data){
                                $('#getART').html(data);
                $("#demmxa").modal("show");
                                 }
               });
               } 
          </script>
    
<table class="table table-tabled" style="background-color:transparent; margin-top:0px; ">
   <thead>
   <tr> 
   <th style=""><b>Date</b>  </th>
   <th style="">Next appointment </th> 
   <th style="">Duration in months since first starting ART </th>
   <th style="">Wt</th>
   <th style="">If pregnant EDD/<B>em</B> TCT? write gestation in weeks and ANC # </th> 
   <th style="">TB status </th>
   <th style="">Potential SIDE EFFECTS</th>
   <th style="">New Ols, other problems  </th> 
   <th style="">Functional status  </th>
   <th style="">WHO clinical stage</th>
   <th style="">CPT/Dapsone </th> 
   
   <th colspan="2" style="">ARV drugs </th>
   
   <th  colspan="2" style="">Investigations</th>
   
   <th style="">Refer or consult or link/provide (including nutritional support and infant feeding)  </th>
  <th style="">Pill counting</th>
   </tr>
   
   <tr> 
   <th style="">Tick small box if scheduled</th>
   <th style=""> <b>Date</b></th> 
   <th style=""> / since starting current regimen</th>
   <th style=""><br> Ht.<b> </th>
   <th style="">FP/no FP if FP write method(s)</th> 
   <th style=""> If TB, Start/Stop (mm/yyyy) </th>
   <th style=""> </th>
   <th style="">   </th> 
   <th style=""> Work/playing Amb Bed</th>
   <th style="">WHO clinical stage</th>
   
   <th style=""> Adhere </th> 
    
   <th colspan="2" style="">  </th> 
   <th  style="">If CD4 <15% write (-) If CD4 >15 write(+)</th>
   <th style="">Hgb, RPR,CXR,TB sputums, infant Ab/PCR, other </th> 
   <th style="">If Hospitalized # of days</th> 
   <th> </th>
   </tr> 
   
   <tr> 
   <th style=""> </th>
   <th style=""> </th> 
   <th style="">  </th>
   <th style=""> Muac/oEDEMA +/-</th>
   <th style="">  Age in months if <=2 yrs</th> 
   <th style=""> </th>
   <th style=""> </th>
   <th style=""> </th> 
   <th style="">  </th>
 
   <th style=""> </th> 
   <th style=""> </th>
   
   <th  style=""> Adhere  </th>
   <th  style="">/why </th> 
    <th style=""> </th>
   <th  style=""> </th>
   <th style="">  </th> 
   <th style=""> </th> 
   </tr>
   </thead>
   <tbody>
   <tr> 
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="DATECREATED" id="DATECREATED" value="<?php echo date('Y-m-d'); ?>" style="width:100%; text-align:left;background-color:transparent;">
  <input type="radio" name="art2" value="deactive" checked="checked">
  <label>OFF</label>
  <input type="radio" name="art2" value="Active">
  <label>ON</label>
    </td>   
           
    <td style="border:2px solid #ecf0f5;"><input type="date" name="art3" id="art3"    
    style="width:100%; text-align:left;background-color:transparent;"></td> 
     
    
     
  <td style="border:2px solid #ecf0f5;">
  <input type="text" name="art4" id="art4"  style="width:100%; text-align:left;background-color:transparent;">
    <input type="text" name="art5" id="art5"  style="width:100%; text-align:left;background-color:transparent; height:20px;">
   </td>   
           
    <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art6" id="art6"  style="width:100%; text-align:left;background-color:transparent;">
  <input type="text" name="art7" id="art7"  style="width:100%; text-align:left;background-color:transparent;">
  <input type="text" name="art8" id="art8" style="width:100%; text-align:left;background-color:transparent;">
  </td> 
     
           
    
  <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art9" id="art9" style="width:100%; text-align:left;background-color:transparent;">
  <input type="text" name="art10" id="art10"  style="width:100%; text-align:left;background-color:transparent;">
  <input type="text" name="art11" id="art11"  style="width:100%; text-align:left;background-color:transparent;">
  </td> 
     
  <td style="border:2px solid #ecf0f5;">
   <input type="text" name="art12" id="art12" style="width:100%; text-align:left;background-color:transparent; height:20px;">
   <input type="text" name="art13" id="art13"   style="width:100%; text-align:left;background-color:transparent;">
   <input type="text" name="art14" id="art14"   style="width:100%; text-align:left;background-color:transparent;">
   </td>   
           
    
  <td style="border:2px solid #ecf0f5;">
  <textarea name="art15" id="art15" style="width:100%; text-align:left;background-color:transparent;height:20px;"></textarea></td> 
      
    
   <td style="border:2px solid #ecf0f5;">
   <textarea name="art16" id="art16"  
   style="width:100%; text-align:left;background-color:transparent; height:20px;"></textarea>
   
   </td>   
           
    
  <td style="border:2px solid #ecf0f5;"><select  name="art17" id="art17"    
    style="width:100%; text-align:left;background-color:transparent;">
   <option></option>
   <option>G</option>
   <option>F</option>
   <option>P</option>
   </select> 
  </td> 
     
   <td style="border:2px solid #ecf0f5;">
   <select name="art18" id="art18" style="width:100%; text-align:left;background-color:transparent; height:20px;"> 
   <option></option>
   <option>i</option>
   <option>ii</option>
   <option>iii</option>
   <option>iv</option>
   <option>Ti</option>
   <option>T2</option>
   <option>T3</option>
   <option>T4</option>
   </select>
   </td>   
           
    
  <td style="border:2px solid #ecf0f5;"><select name="art19" id="art19"    
    style="width:100%; text-align:left;background-color:transparent;"> 
   <option></option>
   <option>G</option>
   <option>F</option>
   <option>P</option>
   </select> 
  </td>  
    
  <td style="border:2px solid #ecf0f5;"><select type="numeric" name="art20" id="art20"    
    style="width:100%; text-align:left;background-color:transparent;">
  <option></option>
  <option>G</option>
  <option>F</option>
  <option>P</option>
  </select> 
  </td> 
     
  <td style="border:2px solid #ecf0f5;">
    <input type="number" name="art21" id="art21" style="width:100%; text-align:left;background-color:transparent; height:20px;">
   </td>   
           
    
  <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art22" id="art22" style="width:100%; text-align:left;background-color:transparent;"></td> 
     
  <td style="border:2px solid #ecf0f5;">
    <input type="text" name="art23" id="art23" style="width:100%; text-align:left;background-color:transparent; height:20px;">
    </td>   
           
  <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art24" id="art24" style="width:100%; text-align:left;background-color:transparent;"></td> 
  
  <td style="border:2px solid #ecf0f5;">
  <input type="numeric" name="art25" id="art25" style="width:100%; text-align:left;background-color:transparent;"></td>
                                                
   </tr>
  <tr>
 </tbody>
 </table> 
 
              </div>  
        </div>
          <!-- /.tab-pane -->
                 
            </div>
     
     <input type="hidden" name="TRIGGER" value="Encoded" >
    <br> <br>  
     <center> <input type="submit" name="button" id="button" value="Save " 
    style= " font-size:15px; font-weight:bold; border-radius:11px; background-color:#000000; color:#ffffff; height:30px;"/> </center><br>
    </div>    
     
    <div class="col-sm-12" style="margin-top:-10px;"> 
 
    </div> 
   <div class="panel-body"><div class="panel-body">
   
   </div>
   
 </div></div></div></div></div>
   
 
 
                                                                                    

       
             <div class="clear">
          </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->


      </div>
      <br>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
      <!-- START PROGRESS BARS -->

   </div>
   </div>
   </div>


    <div class="row">
                    <div class="col-lg-12">
                        <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


           <div class=""  id="getvist" >  </div>

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
                        <div class="modal" id="impres2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog4">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:red;" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> </h4>
                                        </div>
                                        <div class="modal-body">


           <div class=""  id="getresults" >  </div>

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



                         </div>
                    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
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
<script>
 
function getvistdata(jose){
var odno = ((jose.split("__")[1]).split("***"))[1];
$.ajax({
       type    : 'POST',
       url     : 'medical/getepisode.php?q='+odno,
       success : function(data){
                $('#getvist').html(data);
$("#impres2").modal("show");
                 }
});
}


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

     <script> 
          setInterval(function() {
                $.ajax({
                       type    : 'POST',
                       url     : 'medical/medicalvists_pac.php',
                       success : function(data){
                                $('#pacvists').html(data);
                                 }
               });
               }, 2000);

          </script>

<script>

  function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

         var s1 = '<input type="date"  name="p_'+rowCount+'" id="p_'+rowCount+'" required="required" '+
            'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';
                      
        var saa = '<input type="text"  name="aa_'+rowCount+'" id="aa_'+rowCount+'" '+
            'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';
                      
       var sbb = '<input type="text"  name="bb_'+rowCount+'" id="bb_'+rowCount+'" '+
              'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';
                                    
               var scc = '<input type="text"  name="cc_'+rowCount+'" id="cc_'+rowCount+'" '+
               'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';
                      
         var sdd = '<textarea  name="dd_'+rowCount+'" id="dd_'+rowCount+'" '+
              'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" /></textarea>';
                      
         var see = '<select  name="ee_'+rowCount+'" id="ee_'+rowCount+'" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >'+
                                        '<option> </option>'+
                                            '<option>IMPLANON</option>'+ 
                                            '<option>JADELA</option>'+  
                      '<option>PILLS</option>'+ 
                                            '<option>CONDOMS</option>'+  
                      '<option>DEPO PROVERA</option>'+ 
                                            '<option>IUD</option>'+ 
                        '<option>NORISTERAT</option>'+ 
                                            '<option>NORIGYNON</option>'+  
                                            '</Select>';
                                    
           var sff = '<input type="text"  name="ff_'+rowCount+'" id="ff_'+rowCount+'" '+
               'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';                  

        var selects = '<input type="date"  name="c_'+rowCount+'" id="c_'+rowCount+'"  '+
                   'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';
          
     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+s1+' </td>'+
         '<td>'+saa+' </td>'+
         '<td>'+sbb+' </td>'+
         '<td>'+scc+' </td>'+
         '<td>'+sdd+' </td>'+
         '<td>'+see+' </td>'+
         '<td>'+sff+' </td>'+ 
                '<td>'+selects+' </td>';

      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows').value=rowCount;

  }

    function  dostg(thisid){

     var val = thisid.split("_")[1];
   var v1 = parseFloat(document.getElementById("pd_"+val).value);
   var v2 = parseFloat(document.getElementById("fq_"+val).value);
   var v3 = parseFloat(document.getElementById("tm_"+val).value);

   var v4 = v1*v2*v3;
   document.getElementById("qty_"+val).value = v4;

    }

   function addRow13(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;
     var ttt     = "<?php   echo $stss; ?>";

   var s1 = '<select name="dn_'+rowCount+'" onKeyUp="domee(this)" id="dn_'+rowCount+'" required="required" '+
              ' style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; background-color:#fff" >'+
                                        '<option></option>'+
                                        '<option><?php   echo $stss; ?></option>'+
                                        '</select>';

   var fq = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="fq_'+rowCount+'" id="fq_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';


   var tm = '<select  onchange="dostg(this.id)" name="tm_'+rowCount+'" id="tm_'+rowCount+'" required="required" '+
             'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />'+
                                        '<option>1</option>'+
                                        '<option>2</option>'+
                                        '<option>3</option>'+
                    '<option>4</option>'+
                                        '</select>';

   var pd = '<input type="numeric"  onkeyup="dostg(this.id)" onchange="dostg(this.id)" name="pd_'+rowCount+'" id="pd_'+rowCount+'" required="required" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';



   var qty = '<input type="numeric" onkeyup="dostg(this.id)" onchange="dostg(this.id)"  name="qty_'+rowCount+'" id="qty_'+rowCount+'" '+
                                        'style= "margin-left: 0px;margin-top: 5px;height:20px; width:100%; text-align:center; background-color:transparent;" />';


     var row1= '<td><input type="checkbox" checked=""></td>'+
               '<td>'+s1+' </td>'+
         '<td>'+fq+' </td>'+
         '<td>'+tm+' </td>'+
         '<td>'+pd+' </td>'+
         '<td>'+qty+' </td>';


      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows1').value=rowCount;

  }

  function deleteRow12(tableID) {
         var table = document.getElementById(tableID);
       var rowCount = table.rows.length;
       for(var i=1; i<rowCount; i++) {
         var row = table.rows[i];
         var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
           rowCount--;
           i--;
         }
        }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
          table.rows[x].cells[1].childNodes[0].id="p_"+x;
      table.rows[x].cells[1].childNodes[0].name="p_"+x;
          table.rows[x].cells[2].childNodes[0].id="c_"+x;
      table.rows[x].cells[2].childNodes[0].name="c_"+x;
      table.rows[x].cells[3].childNodes[0].id="aa_"+x;
      table.rows[x].cells[3].childNodes[0].name="aa_"+x;
      table.rows[x].cells[4].childNodes[0].id="bb_"+x;
      table.rows[x].cells[4].childNodes[0].name="bb_"+x;
      table.rows[x].cells[5].childNodes[0].id="cc_"+x;
      table.rows[x].cells[5].childNodes[0].name="cc_"+x;
      table.rows[x].cells[6].childNodes[0].id="dd_"+x;
      table.rows[x].cells[6].childNodes[0].name="dd_"+x;
      table.rows[x].cells[7].childNodes[0].id="ee_"+x;
      table.rows[x].cells[7].childNodes[0].name="ee_"+x;
      table.rows[x].cells[8].childNodes[0].id="ff_"+x;
      table.rows[x].cells[8].childNodes[0].name="ff_"+x;
          }
           document.getElementById('mytable_rows').value=rowCount-1;
}

 function deleteRow13(tableID) {
         var table = document.getElementById(tableID);
       var rowCount = table.rows.length;
       for(var i=1; i<rowCount; i++) {
         var row = table.rows[i];
         var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
           rowCount--;
           i--;
         }
        }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
          table.rows[x].cells[1].childNodes[0].id="dn_"+x;
          table.rows[x].cells[1].childNodes[0].name="dn_"+x;
      table.rows[x].cells[2].childNodes[0].id="fq_"+x;
      table.rows[x].cells[2].childNodes[0].name="fq_"+x;
      table.rows[x].cells[3].childNodes[0].id="tm_"+x;
      table.rows[x].cells[3].childNodes[0].name="tm_"+x;
      table.rows[x].cells[4].childNodes[0].id="pd_"+x;
      table.rows[x].cells[4].childNodes[0].name="pd_"+x;

          table.rows[x].cells[5].childNodes[0].id="qty_"+x;
      table.rows[x].cells[5].childNodes[0].name="qty_"+x;

          }
           document.getElementById('mytable_rows1').value=rowCount-1;
}


  </script>

  <script>
      var pn = [];
          pn["v1"] = 0;
          pn["v2"] = 0;

      var x="0,0,0,0,0,0";

      function adss(selectorint)
      {
          pn["v"+selectorint] = pn["v"+selectorint]+1;
          var obj=  document.getElementById('fields'+selectorint);
                x=  pn["v1"] +","+ pn["v2"];
      }

      function remove(sid)
      {
               var  field='fields'+sid;
               var c = document.getElementById(field).childElementCount;
               var obj = document.getElementById(field);
               if(c<=0){}
               else{  obj.removeChild( obj.childNodes[c]);
                      pn["v"+sid] = pn["v"+sid]-1;
                      x=  pn["v1"] +","+ pn["v2"] +","+pn["v3"]+","+pn["v4"]+","+pn["v5"]+","+pn["v6"];
                      document.getElementById('values').value=x;
                   }
       }

            function save(){}
 </script>


 </body>
 </html>
